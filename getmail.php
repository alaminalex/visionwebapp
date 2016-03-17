<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

	include('include/dbcommon.php');

	error_reporting(E_ALL ^ E_NOTICE);
	restore_error_handler();
	restore_error_handler();
	define("LIMIT_MESSAGES", "100");
	
    	include('fetch/Server.php');
	include('fetch/Message.php');
	include('fetch/Attachment.php');
	
	$servers=0;
	$folder=DBLookup("select attachment_folder from mail_settings");
	// main loop
	// get all mail servers 
	
	global $conn;
	if (GetDatabaseType()==0) // MySQL
		$strSQL = "select * from mail_servers where lastconnect is null or DATE_ADD(lastconnect,INTERVAL `interval` MINUTE)<now()";
	elseif (GetDatabaseType()==2) // MS SQL Server
		$strSQL = "select * from mail_servers where lastconnect is null or DATEADD(n,interval,lastconnect)<getdate()";

	$rs = db_query($strSQL,$conn);
	while ($data = db_fetch_array($rs)) {
	
		$servers++;
		// get last LIMIT_MESSAGES email ids for the current mail server
		if (GetDatabaseType()==0) // MySQL
			$rsIDs = db_query("select message_id from mail_messages order by id desc limit 0,".LIMIT_MESSAGES,$conn);
		elseif (GetDatabaseType()==2) // MS SQL Server
			$rsIDs = db_query("select top " .LIMIT_MESSAGES. " message_id from mail_messages order by id desc",$conn);
		
		$ids=array();
		while ($dataIDs = db_fetch_array($rsIDs)) {
			$ids[$dataIDs["message_id"]]="";
		}
		
		// connect to mail server
		$server = new \Fetch\Server($data["server"],$data["port"]);
		$server->setAuthentication($data["user"],$data["password"]);
		$server->setFlag("novalidate-cert");

		$messages = $server->getMessages(LIMIT_MESSAGES, $ids);
		echo $data["server"] . ": messages: ".count($messages)."<br>";
		
		// process messages
		foreach ($messages as $message) {
			$headers = $message->getHeaders();
			if (array_key_exists($headers->message_id, $ids)) {
				echo "Message ".htmlspecialchars($headers->message_id)." already exists<br>";
			}
			else {
				echo "Saving message ".htmlspecialchars($headers->message_id)."<br>";
				writeToDB($data["id"], $message, $folder);
			}
			
			// delete message?
			if ($data["leave_copy"]!=1)
				$message->delete();
		}
		$server->expunge();
		CustomQuery("update mail_servers set lastconnect='".date('Y-m-d H:i:s')."' where id=".$data["id"]);
	}
	
	if ($servers==0)
		echo "Nothing to do now";



function writeToDB($server_id, $message, $folder) {
	
	global $dal;

	// save attachments to $folder
	
	$attachments = $message->getAttachments();
	if ($attachments) {
		foreach ($attachments as $attachment) {

		$filename=$attachment->getFilename();
		$path_parts = er_pathinfo_local($filename);
		$newName=$folder."/".$path_parts["filename"]."_".generatePassword(8).'.'.$path_parts["extension"];
		$attachment->saveAs($newName);
	
		
		$files[] = array("usrName"=>$filename, "name"=>$newName, "size"=>filesize($newName) , 
			"type"=> getContentTypeByExtension(substr($filename, -4)) );

	
		}
	}

	$headers = $message->getHeaders();
	$from=$message->getFrom();
	$to=$message->getTo();
	$cc=$message->getCC();
	$bcc=$message->getBCC();
	
	$tblMessages = $dal->Table("mail_messages");

	$tblMessages->Value["created"]=date("Y-m-d H:i:s");
	$tblMessages->Value["attachment"]= $files ? my_json_encode($files) : "";
	$body = cleanBody(decodeMimeStr($message->getMessageBody(true)));
	$tblMessages->Value["body"]=processInlineImages($body, $message);  
	$tblMessages->Value["to_email"]=decodeMimeStr($to[0]["address"]);
	$tblMessages->Value["to_name"]=decodeMimeStr($to[0]["name"]);
	$tblMessages->Value["message_id"]=decodeMimeStr($headers->message_id);
	$tblMessages->Value["subject"]=decodeMimeStr($message->getSubject());
	$tblMessages->Value["maildate"]= date("Y-m-d H:i:s",strtotime($headers->date));
	$tblMessages->Value["from_email"]= decodeMimeStr($from[0]["address"]);
	$tblMessages->Value["from_name"]= decodeMimeStr($from[0]["name"]);
	$tblMessages->Value["cc"]= decodeMimeStr($cc[0]["address"]);
	$tblMessages->Value["bcc"]= decodeMimeStr($bcc[0]["address"]);
	$tblMessages->Value["server_id"]= $server_id;

	$tblMessages->Add();


}

function decodeMimeStr($string, $charset="UTF-8" ) 
{ 
      $newString = ''; 
      $elements=imap_mime_header_decode($string); 
      for($i=0;$i<count($elements);$i++) 
      { 
        if ($elements[$i]->charset == 'default') 
          $elements[$i]->charset = $charset; 
        $newString .= iconv($elements[$i]->charset, $charset, $elements[$i]->text); 
      } 
      return $newString; 
} 

function er_pathinfo_local($path)
{
	$ret = pathinfo($path);
	if(!isset($ret["filename"]))
	{
		$extlen = strlen($ret['extension']);
		if($extlen)
			++$extlen;
		$ret["filename"] = substr($ret["basename"],0, strlen($ret["basename"]) - $extlen);
	}
	return $ret;
}

function cleanBody($input) {
$input = preg_replace('/<head>(.*)<\/head>/is', '', $input);

return $input;
}

function processInlineImages($body, $message) {

$regex='/<img(.*?)cid:([^"]+)"/s';
preg_match_all($regex, $body, $matches);
$attachments = $message->getAttachments();
for ($i=0; $i<count($matches[2]);$i++) {
	foreach ($attachments as $attachment) {
		if ($matches[2][$i]==$attachment->getID()) {
			$imgstr="mfhandler.php?file=".$attachment->getFilename()."&table=mail_messages&field=attachment&pageType=view&key1=%%id%%&nodisp=1";
			$body=str_replace($matches[2][$i],$imgstr,$body);
			}
		}
}

$body = str_replace("cid:","",$body);
return $body;

}

?>