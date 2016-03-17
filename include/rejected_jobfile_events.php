<?php 
class eventclass_rejected_jobfile  extends eventsBase
{ 
	function eventclass_rejected_jobfile()
	{
	// fill list of events

		$this->events["BeforeShowAdd"]=true;

		$this->events["AfterAdd"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, &$pageObject)
{

		$file_list_get = $_GET["file_list"];
$file_list_get = explode(",", $file_list_get);
$GLOBALS["file_list"] = $file_list_get;

$pageObject->setProxyValue("work_id", $_GET["work_id"]);
$pageObject->setProxyValue("job_id", $_GET["job_id"]);
$pageObject->setProxyValue("pdf_id", $_GET["pdf_id"]);
$pageObject->setProxyValue("designer_id", $_GET["designer_id"]);
$pageObject->setProxyValue("designer2_id", $_GET["designer2_id"]);
$pageObject->setProxyValue("qc_id", $_GET["qc_id"]);
$pageObject->setProxyValue("file_list", $file_list_get);
//echo COUNT($GLOBALS["all_file_list"])." Files are selected";

// Place event code here.
// Use "Add Action" button to add code snippets.

;		
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		//**********  Send email with new data  ************

$rejected_user_id = $values["jobfile_id"];
//$jobfile_id = $values["jobfile_id"];
$sql = "SELECT
`user`.username,
jobfile.filename,
type_of_errors.type_of_error
FROM rejected_jobfile
INNER JOIN jobfile ON rejected_jobfile.jobfile_id = jobfile.jobfile_id
INNER JOIN `user` ON jobfile.designer2_id = `user`.user_id
LEFT OUTER JOIN type_of_errors ON rejected_jobfile.type_of_error = type_of_errors.id
WHERE (jobfile.jobfile_id =".$rejected_user_id.")";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);



$email="".$data['username']."@visioninfoltd.com";
$from="".$_SESSION["UserID"]."@visioninfoltd.com";
$msg="";
$subject="".$data["type_of_error"]."";

$msg.= "Dear ".$data['username']."\r\n"."\r\n";

$msg.= "You have done Wrong on job ".$values["job_id"]." File name ".$data["filename"]."\r\n";
$msg.= "Check the ScreenCapture from the ERROR listing web ".$_SESSION["my_server_url"]."File_Reject_view.php?editid1=".$values["jobfile_id"]." , and your have done the wrong listed below"."\r\n";
$msg.= "".$data["type_of_error"]."\r\n"."\r\n";

$msg.= "".$values["cr_comment"]."\r\n"."\r\n";

//$folder = "userfiles/".$_SESSION["Employee Name"];

//$attachments = array();
// Attachments description. The 'path'(a path to the attachment) is required. Others parameters are optional: 
//'name' overrides the attachment name, 'encoding' sets a file encoding, 'type' sets a MIME type 
//$attachments = array(
//      array('path' => getabspath("userfiles/".$_SESSION["Employee Name"]/$values['ScreenCap']), 
//               'name' => $values['ScreenCap'], 
//               'encoding' => 'base64', 
//               'type' => 'application/octet-stream'),
//) ;


// $msg.= "".$imageValue .= "<img alt=\"".$values['ScreenCap']."\" src=".$values['ScreenCap'].">";

$msg.= "Best "."\r\n".$session_username."\r\n";

$ret=runner_mail(array('to' => $email, 'subject' => $subject, 'body' => $msg, 'from'=>$from, 'attachments' => $attachments));
if(!$ret["mailed"])
	echo $ret["message"];






$current_file = $values["jobfile_id"];
$jobfile_status_id = "10";

			$update_jobfile_sql = "

				UPDATE `jobfile`
				SET 
				`jobfile_status_id` =  $jobfile_status_id
				WHERE `jobfile_id` = '$current_file'
				";

customQuery($update_jobfile_sql);



/*
$update_rejected_jobfile_sql = "

				UPDATE `rejected_jobfile`
				SET 
				`file_url` =  '',
				`cr_pc_name` =  '',
				`cr_qc_pc_name` =  '',
				`cr_notifier_id` =  'NULL'
				WHERE `rejected_jobfile_id` = '$current_file'
				";

customQuery($update_rejected_jobfile_sql);
*/

header("Location: QC_Worksheet_list.php");
exit();

// Place event code here.
// Use "Add Action" button to add code snippets.


;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
