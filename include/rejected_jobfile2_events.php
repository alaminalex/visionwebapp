<?php 
class eventclass_rejected_jobfile2  extends eventsBase
{ 
	function eventclass_rejected_jobfile2()
	{
	// fill list of events

		$this->events["BeforeShowAdd"]=true;

		$this->events["AfterAdd"]=true;

		$this->events["BeforeAdd"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, &$pageObject)
{

		$file_list_get = $_GET["file_list"];
$file_list_get = explode(",", $file_list_get);
$GLOBALS["file_list"] = $file_list_get;

$server_name = $_SESSION["my_server_name"];
$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];

ini_set('error_reporting', E_ALL);

if(!$mysqlilink = mysqli_connect($hostname, $username, $password, $dbname))
	{
	echo "Could not connect to Database. <br>
		  CONTACT YOUR ADMINISTRATOR.";
	}
	else
		{
		//echo mysqli_get_host_info($mysqlilink);
		}
		
		$mysqlilink->set_charset("utf8");
		mb_internal_encoding('UTF-8');

$file_names = array();

foreach ($file_list_get as $file_list_files)
	{	//FOR EACH FILE IN LIST, GET FILE NAME
	$select_jobfile_sql = "SELECT filename from jobfile WHERE jobfile_id='".$file_list_files."' LIMIT 1";
	$select_jobfile_result = mysqli_query($mysqlilink, $select_jobfile_sql);

	while($list_jobfile_result = mysqli_fetch_array($select_jobfile_result, MYSQLI_BOTH))
			{
			$jobfile_name = $list_jobfile_result["filename"];
			array_push($file_names, $jobfile_name);
			}
	} 	//FOR EACH FILE IN LIST, GET FILE NAME

$file_names = implode("\n", $file_names);

$pageObject->setProxyValue("work_id", $_GET["work_id"]);
$pageObject->setProxyValue("previous_job_id", $_GET["work_id"]);
$pageObject->setProxyValue("job_id", $_GET["job_id"]);
$pageObject->setProxyValue("pdf_id", $_GET["pdf_id"]);
$pageObject->setProxyValue("designer_id", $_GET["designer_id"]);
$pageObject->setProxyValue("designer2_id", $_GET["designer2_id"]);
$pageObject->setProxyValue("qc_id", $_GET["qc_id"]);
$pageObject->setProxyValue("file_list", $file_names);
$pageObject->setProxyValue("file_list_id", $_GET["file_list"]);

//HIDE FILENAME FIELD FROM PAGE
$pageObject->hideField("filename");

//echo COUNT($GLOBALS["all_file_list"])." Files are selected";

// Place event code here.
// Use "Add Action" button to add code snippets.


//alex9999
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

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

				//GET USER INPUT FROM REJECTION PAGE
//LIST OF FILES TO BE REJECTED	//DONE
$file_list_get = explode(",", $values["filename"]);
//print_r($file_list_get); echo "<br>";

//Reject Reasons
$reject_reason = $values["reject_reason"];
$reject_reason_others = $values["reject_reason_others"];
$job_id = $values["job_id"];
$project_id = $values["project_id"];
$rejector_id = $values["rejector_id"];
$reject_date = date("Y-m-d H:i:s");
$screenshots = $values["screenshots"];
echo "reject_reason $reject_reason<br> reject_reason_others $reject_reason_others<br> job_id $job_id<br> project_id  $project_id<br> rejector_id $rejector_id<br> reject_date $reject_date screenshots $screenshots";
//GET USER INPUT FROM REJECTION PAGE

//GET FILE DETAIL FROM JOBFILE INFORMATION
$server_name = $_SESSION["my_server_name"];
$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];

ini_set('error_reporting', E_ALL);

if(!$mysqlilink = mysqli_connect($hostname, $username, $password, $dbname))
	{
	echo "Could not connect to Database. <br>
		  CONTACT YOUR ADMINISTRATOR.";
	}
	else
		{
		//echo mysqli_get_host_info($mysqlilink);
		}
		$mysqlilink->set_charset("utf8");
		mb_internal_encoding('UTF-8');

		
		
foreach ($file_list_get as $file_list_files)
	{	//FOR EACH FILE IN LIST, GET FILE NAME
	$select_jobfile_sql = "SELECT * from jobfile WHERE jobfile_id='".$file_list_files."'";
	$select_jobfile_result = mysqli_query($mysqlilink, $select_jobfile_sql);
	$number_of_files = mysqli_num_rows($select_jobfile_result);
	
	echo "<h1>$number_of_files</h1>";
	
	//$list_jobfile_result = mysqli_fetch_array($select_jobfile_result, MYSQLI_BOTH);
	//print_r($list_jobfile_result);
	
	
	while($list_jobfile_result = mysqli_fetch_array($select_jobfile_result, MYSQLI_BOTH))
			{
	// INSERT DATA INTO REJECTED JOBFILE -----------------------------------------------------------
	//		AUTOMATIC/PREDEFINED
	//	$jobfile_id
		$jobfile_status_id = "10";		//SET  AS 10 (rejected by QC)

//		FROM jobfile
		$downloader_id = (int) $list_jobfile_result["downloader_id"];
		//echo "<br> $downloader_id";
		$distributor_id = (int) $list_jobfile_result["distributor_id"];
		//echo "<br> $distributor_id";
		$file_url = addslashes($list_jobfile_result["file_url"]);
		//echo "<br> $file_url";
		$client_id =  (int) $list_jobfile_result["client_id"];
		//echo "<br> $client_id";
		$work_id =  (int) $list_jobfile_result["work_id"];
		//echo "<br> $work_id";
		$job_id =  (int) $list_jobfile_result["job_id"];
		//echo "<br> $job_id";
		$previous_job_id =  $job_id;
		//echo "<br> $previous_job_id";
		$project_id =  (int) $list_jobfile_result["project_id"];
		//echo "<br> $project_id";
		$folder_name = $list_jobfile_result["folder_name"];
		//echo "<br> $folder_name";
		$filename = $list_jobfile_result["filename"];
		//echo "<br> $filename";
		$jobfile_type = "2";
		//echo "<br> $jobfile_type";
		$jobfile_note = $list_jobfile_result["jobfile_note"];
		//echo "<br> $jobfile_note";
		$uploader_id =  (int) $list_jobfile_result["uploader_id"];
		//echo "<br> $uploader_id";
		$notifier_id =  (int) $list_jobfile_result["notifier_id"];
		//echo "<br> $notifier_id";
		$download_date = $list_jobfile_result["download_date"];
		//echo "<br> $download_date";
		$distribute_date = $list_jobfile_result["distribute_date"];
		//echo "<br> $distribute_date";
		$designer_id =  (int) $list_jobfile_result["designer_id"];
		//echo "<br> $designer_id";
		$qc_id =  (int) $list_jobfile_result["qc_id"];
		//echo "<br> $qc_id";
		$start_date = $list_jobfile_result["start_date"];
		//echo "<br> $start_date";
		$end_date = $list_jobfile_result["end_date"];
		//echo "<br> $end_date";
		$designer_time = $list_jobfile_result["designer_time"]; 
		if($designer_time != NULL) {} else {$designer_time = "00:00:00";}
		//echo "<br> $designer_time";
		$qcstart_date = $list_jobfile_result["qcstart_date"];
		//echo "<br> $qcstart_date";
		$qcend_date = $list_jobfile_result["qcend_date"];
		//echo "<br> $qcend_date";
		$qc_time = $list_jobfile_result["qc_time"];
		if($qc_time != NULL) {} else {$qc_time = "00:00:00";}
		//echo "<br> $qc_time";
		$upload_date = $list_jobfile_result["upload_date"];
		//echo "<br> $upload_date";
		$notify_date = $list_jobfile_result["notify_date"];
		//echo "<br> $notify_date";
		$designer2_id =  (int) $list_jobfile_result["designer2_id"];
		//echo "<br> $designer2_id";
		$start2_date = $list_jobfile_result["start2_date"];
		//echo "<br> $start2_date";
		$end2_date = $list_jobfile_result["end2_date"];
		//echo "<br> $end2_date";
		$designer2_time = $list_jobfile_result["designer2_time"];
		if($designer2_time != NULL) {} else {$designer2_time = "00:00:00";}
		//echo "<br> $designer2_time";
		
//		FROM userinput
		$previous_jobfile_id =  (int) $file_list_files;
		//echo "<br> $previous_jobfile_id";
		$rejector_id = (int) $_SESSION["user_id"];
		//echo "<br> $rejector_id";
		$reject_date = date("Y-m-d H:i:s");
		//echo "<br> $reject_date";
		$reject_reason = $values["reject_reason"];
		//echo "<br> $reject_reason";
		$reject_reason_others = $values["reject_reason_others"];
		//echo "<br> $reject_reason_others";
		$screenshots = $values["screenshots"];
		//echo "<br> $screenshots";
		
		$insert_new_rejected_file_sql = "
		INSERT INTO `rejected_jobfile2` (
		`jobfile_id`, `previous_jobfile_id`, `file_url`, `client_id`, `work_id`, `job_id`, `previous_job_id`, `project_id`, `folder_name`, `filename`, `jobfile_type`, `jobfile_note`, `jobfile_status_id`, `downloader_id`, `distributor_id`, `designer_id`, `qc_id`, `uploader_id`, `notifier_id`, `rejector_id`, `download_date`, `distribute_date`, `start_date`, `end_date`, `designer_time`, `qcstart_date`, `qcend_date`, `qc_time`, `upload_date`, `notify_date`, `reject_date`, `reject_reason`, `reject_reason_others`, `screenshots`, `designer2_id`, `start2_date`, `end2_date`, `designer2_time`) VALUES (
		NULL, '$previous_jobfile_id', '$file_url', '$client_id', '$work_id', '$job_id', '$previous_job_id', '$project_id', '$folder_name', '$filename', '$jobfile_type', '$jobfile_note', '$jobfile_status_id', '$downloader_id', '$distributor_id', '$designer_id', '$qc_id', '$uploader_id', '$notifier_id', '$rejector_id', '$download_date', '$distribute_date', '$start_date', '$end_date', '$designer_time', '$qcstart_date', '$qcend_date', '$qc_time', '$upload_date', '$notify_date', '$reject_date', '$reject_reason', '$reject_reason_others', '$screenshots', '$designer2_id', '$start2_date', '$end2_date', '$designer2_time');
		";
		
				if(!$insert_file_result = mysqli_query($mysqlilink, $insert_new_rejected_file_sql))
						{
						echo "<h2>Errors Found. Cannot Inserting REJECTED FILE data</h2>".mysqli_error($mysqlilink);
						}
						
						else
						{
						echo "INSERTED DATA INTO REJECTED JOBFILE2 TABLE";
						
							//UPDATE ORIGINAL JOBFILE INFORMATION AS REJECTED
																
								$update_jobfile_sql = "UPDATE jobfile
								SET `jobfile`.`jobfile_status_id` = '10',
									`jobfile`.`jobfile_status_id` = '10',
									`jobfile`.`jobfile_type` = 2,
									`jobfile`.`designer2_id` = NULL,
									`jobfile`.`start2_date` = '0000-00-00 00:00:00',
									`jobfile`.`end2_date` = '0000-00-00 00:00:00',
									`jobfile`.`designer2_time` = NULL,
									`jobfile`.`qc_id` = NULL,
									`jobfile`.`qcstart_date` = '0000-00-00 00:00:00',
									`jobfile`.`qcend_date` = '0000-00-00 00:00:00',
									`jobfile`.`qc_time` = NULL
								WHERE jobfile.jobfile_id = '".$previous_jobfile_id."'";
								
								//RESET START DATE, END DATE etc later

								//echo $update_jobfile_sql;
								//exit;
								
								
								if(!mysqli_query($mysqlilink, $update_jobfile_sql))
									{
									echo "ERROR UPDATING ORIGINAL JOBFILE INFORMATION ".mysqli_error($mysqlilink);
									}
							//UPDATE ORIGINAL JOBFILE INFORMATION AS REJECTED
						}

		
		
						
		

			} // INSERT DATA INTO REJECTED JOBFILE -----------------------------------------------------------
	
} 	//FOR EACH FILE IN LIST, GET FILE NAME		

						//UPDATE JOB INFORMATION			
						$update_job_sql = "
									UPDATE  `visionwebapp`.`job`
									SET  `jobstatus_id` =  '10'
									WHERE  `job`.`job_id` = $previous_job_id
									;";
									
							if(!$update_job_query = mysqli_query($mysqlilink, $update_job_sql))
								{
								echo "<h2>Errors Found. Cannot Update Job Information</h2>".mysqli_error($mysqlilink);
								}
						//UPDATE JOB INFORMATION

header("Location: ".$_SESSION["my_server_url"]."qc_filesheet_list.php?q=%28job_id~equals~".$previous_job_id."%29%28qc_id~equals~".$rejector_id."%29");

exit;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
