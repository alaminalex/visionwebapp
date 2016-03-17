<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/button.php");
	
$params = (array)my_json_decode(postvalue('params'));
$buttId = $params['buttId'];

// proccess table events
if($buttId=='Action1_label')
{
	require_once("include/Pending_Jobs_variables.php");
	$cipherer = new RunnerCipherer("Pending Jobs");
	buttonHandler_Action1_label($params);
}
if($buttId=='Action2_label')
{
	require_once("include/Pending_Jobs_variables.php");
	$cipherer = new RunnerCipherer("Pending Jobs");
	buttonHandler_Action2_label($params);
}
if($buttId=='Action3_label')
{
	require_once("include/Pending_Jobs_variables.php");
	$cipherer = new RunnerCipherer("Pending Jobs");
	buttonHandler_Action3_label($params);
}
if($buttId=='Action1_label1')
{
	require_once("include/job_variables.php");
	$cipherer = new RunnerCipherer("job");
	buttonHandler_Action1_label1($params);
}
if($buttId=='Action2_label1')
{
	require_once("include/job_variables.php");
	$cipherer = new RunnerCipherer("job");
	buttonHandler_Action2_label1($params);
}
if($buttId=='Action3_label1')
{
	require_once("include/job_variables.php");
	$cipherer = new RunnerCipherer("job");
	buttonHandler_Action3_label1($params);
}
if($buttId=='Distribute_Files')
{
	require_once("include/File_Distribution_variables.php");
	$cipherer = new RunnerCipherer("File Distribution");
	buttonHandler_Distribute_Files($params);
}
if($buttId=='Start')
{
	require_once("include/Designer_Filesheet_variables.php");
	$cipherer = new RunnerCipherer("Designer Filesheet");
	buttonHandler_Start($params);
}
if($buttId=='Finish')
{
	require_once("include/Designer_Filesheet_variables.php");
	$cipherer = new RunnerCipherer("Designer Filesheet");
	buttonHandler_Finish($params);
}
if($buttId=='Distribute_to_QC')
{
	require_once("include/File_Distribution_variables.php");
	$cipherer = new RunnerCipherer("File Distribution");
	buttonHandler_Distribute_to_QC($params);
}
if($buttId=='QC_Distribute_Files')
{
	require_once("include/File_Distribution_variables.php");
	$cipherer = new RunnerCipherer("File Distribution");
	buttonHandler_QC_Distribute_Files($params);
}
if($buttId=='Start1')
{
	require_once("include/QC_Filesheet_variables.php");
	$cipherer = new RunnerCipherer("QC Filesheet");
	buttonHandler_Start1($params);
}
if($buttId=='Finish1')
{
	require_once("include/QC_Filesheet_variables.php");
	$cipherer = new RunnerCipherer("QC Filesheet");
	buttonHandler_Finish1($params);
}
if($buttId=='New_Button1')
{
	require_once("include/Download_Job_variables.php");
	$cipherer = new RunnerCipherer("Download Job");
	buttonHandler_New_Button1($params);
}
if($buttId=='New_Button11')
{
	require_once("include/Download_Job_variables.php");
	$cipherer = new RunnerCipherer("Download Job");
	buttonHandler_New_Button11($params);
}
if($buttId=='Back')
{
	require_once("include/jobfile_variables.php");
	$cipherer = new RunnerCipherer("jobfile");
	buttonHandler_Back($params);
}
if($buttId=='Action1_label3')
{
	require_once("include/All_Jobs_variables.php");
	$cipherer = new RunnerCipherer("All Jobs");
	buttonHandler_Action1_label3($params);
}
if($buttId=='Action2_label3')
{
	require_once("include/All_Jobs_variables.php");
	$cipherer = new RunnerCipherer("All Jobs");
	buttonHandler_Action2_label3($params);
}
if($buttId=='Action3_label3')
{
	require_once("include/All_Jobs_variables.php");
	$cipherer = new RunnerCipherer("All Jobs");
	buttonHandler_Action3_label3($params);
}
if($buttId=='Start_Job')
{
	require_once("include/QC_Worksheet_variables.php");
	$cipherer = new RunnerCipherer("QC Worksheet");
	buttonHandler_Start_Job($params);
}
if($buttId=='Finish_Job')
{
	require_once("include/QC_Worksheet_variables.php");
	$cipherer = new RunnerCipherer("QC Worksheet");
	buttonHandler_Finish_Job($params);
}
if($buttId=='Back23')
{
	require_once("include/user_variables.php");
	$cipherer = new RunnerCipherer("user");
	buttonHandler_Back23($params);
}
if($buttId=='Back23')
{
	require_once("include/user1_variables.php");
	$cipherer = new RunnerCipherer("user1");
	buttonHandler_Back23($params);
}
if($buttId=='Distribute1')
{
	require_once("include/File_Distribution_variables.php");
	$cipherer = new RunnerCipherer("File Distribution");
	buttonHandler_Distribute1($params);
}
if($buttId=='Start2')
{
	require_once("include/Designer_Level2_Filesheet_variables.php");
	$cipherer = new RunnerCipherer("Designer Level2 Filesheet");
	buttonHandler_Start2($params);
}
if($buttId=='Finish2')
{
	require_once("include/Designer_Level2_Filesheet_variables.php");
	$cipherer = new RunnerCipherer("Designer Level2 Filesheet");
	buttonHandler_Finish2($params);
}
if($buttId=='Action1_label4')
{
	require_once("include/Need_to_Accept_variables.php");
	$cipherer = new RunnerCipherer("Need to Accept");
	buttonHandler_Action1_label4($params);
}
if($buttId=='Action2_label4')
{
	require_once("include/Need_to_Accept_variables.php");
	$cipherer = new RunnerCipherer("Need to Accept");
	buttonHandler_Action2_label4($params);
}
if($buttId=='Action3_label4')
{
	require_once("include/Need_to_Accept_variables.php");
	$cipherer = new RunnerCipherer("Need to Accept");
	buttonHandler_Action3_label4($params);
}
if($buttId=='Action1_label5')
{
	require_once("include/Need_Notify_variables.php");
	$cipherer = new RunnerCipherer("Need Notify");
	buttonHandler_Action1_label5($params);
}
if($buttId=='Action2_label5')
{
	require_once("include/Need_Notify_variables.php");
	$cipherer = new RunnerCipherer("Need Notify");
	buttonHandler_Action2_label5($params);
}
if($buttId=='Action3_label5')
{
	require_once("include/Need_Notify_variables.php");
	$cipherer = new RunnerCipherer("Need Notify");
	buttonHandler_Action3_label5($params);
}
if($buttId=='Action1_label6')
{
	require_once("include/Need_Download_variables.php");
	$cipherer = new RunnerCipherer("Need Download");
	buttonHandler_Action1_label6($params);
}
if($buttId=='Action2_label6')
{
	require_once("include/Need_Download_variables.php");
	$cipherer = new RunnerCipherer("Need Download");
	buttonHandler_Action2_label6($params);
}
if($buttId=='Action3_label12')
{
	require_once("include/Need_Download_variables.php");
	$cipherer = new RunnerCipherer("Need Download");
	buttonHandler_Action3_label12($params);
}
if($buttId=='Start_Job3')
{
	require_once("include/Designer_Level_2_variables.php");
	$cipherer = new RunnerCipherer("Designer Level 2");
	buttonHandler_Start_Job3($params);
}
if($buttId=='Finish_Job1')
{
	require_once("include/Designer_Level_2_variables.php");
	$cipherer = new RunnerCipherer("Designer Level 2");
	buttonHandler_Finish_Job1($params);
}
if($buttId=='Action1_label7')
{
	require_once("include/Need_QC_variables.php");
	$cipherer = new RunnerCipherer("Need QC");
	buttonHandler_Action1_label7($params);
}
if($buttId=='Action2_label7')
{
	require_once("include/Need_QC_variables.php");
	$cipherer = new RunnerCipherer("Need QC");
	buttonHandler_Action2_label7($params);
}
if($buttId=='Action3_label6')
{
	require_once("include/Need_QC_variables.php");
	$cipherer = new RunnerCipherer("Need QC");
	buttonHandler_Action3_label6($params);
}
if($buttId=='Action1_label8')
{
	require_once("include/Need_Upload_variables.php");
	$cipherer = new RunnerCipherer("Need Upload");
	buttonHandler_Action1_label8($params);
}
if($buttId=='Action2_label8')
{
	require_once("include/Need_Upload_variables.php");
	$cipherer = new RunnerCipherer("Need Upload");
	buttonHandler_Action2_label8($params);
}
if($buttId=='Action3_label8')
{
	require_once("include/Need_Upload_variables.php");
	$cipherer = new RunnerCipherer("Need Upload");
	buttonHandler_Action3_label8($params);
}
if($buttId=='Action1_label9')
{
	require_once("include/Pending_14704_variables.php");
	$cipherer = new RunnerCipherer("Pending 14704");
	buttonHandler_Action1_label9($params);
}
if($buttId=='Action2_label9')
{
	require_once("include/Pending_14704_variables.php");
	$cipherer = new RunnerCipherer("Pending 14704");
	buttonHandler_Action2_label9($params);
}
if($buttId=='Action3_label7')
{
	require_once("include/Pending_14704_variables.php");
	$cipherer = new RunnerCipherer("Pending 14704");
	buttonHandler_Action3_label7($params);
}
if($buttId=='Action1_label71')
{
	require_once("include/14704_Need_QC_variables.php");
	$cipherer = new RunnerCipherer("14704 Need QC");
	buttonHandler_Action1_label71($params);
}
if($buttId=='Action2_label71')
{
	require_once("include/14704_Need_QC_variables.php");
	$cipherer = new RunnerCipherer("14704 Need QC");
	buttonHandler_Action2_label71($params);
}
if($buttId=='Action3_label61')
{
	require_once("include/14704_Need_QC_variables.php");
	$cipherer = new RunnerCipherer("14704 Need QC");
	buttonHandler_Action3_label61($params);
}
if($buttId=='Action1_label81')
{
	require_once("include/14704_Need_Upload_variables.php");
	$cipherer = new RunnerCipherer("14704 Need Upload");
	buttonHandler_Action1_label81($params);
}
if($buttId=='Action2_label81')
{
	require_once("include/14704_Need_Upload_variables.php");
	$cipherer = new RunnerCipherer("14704 Need Upload");
	buttonHandler_Action2_label81($params);
}
if($buttId=='Action3_label81')
{
	require_once("include/14704_Need_Upload_variables.php");
	$cipherer = new RunnerCipherer("14704 Need Upload");
	buttonHandler_Action3_label81($params);
}
if($buttId=='Action1_label61')
{
	require_once("include/14704_Need_Download_variables.php");
	$cipherer = new RunnerCipherer("14704 Need Download");
	buttonHandler_Action1_label61($params);
}
if($buttId=='Action2_label61')
{
	require_once("include/14704_Need_Download_variables.php");
	$cipherer = new RunnerCipherer("14704 Need Download");
	buttonHandler_Action2_label61($params);
}
if($buttId=='Action3_label121')
{
	require_once("include/14704_Need_Download_variables.php");
	$cipherer = new RunnerCipherer("14704 Need Download");
	buttonHandler_Action3_label121($params);
}
if($buttId=='Action1_label51')
{
	require_once("include/14704_Need_Notify_variables.php");
	$cipherer = new RunnerCipherer("14704 Need Notify");
	buttonHandler_Action1_label51($params);
}
if($buttId=='Action2_label51')
{
	require_once("include/14704_Need_Notify_variables.php");
	$cipherer = new RunnerCipherer("14704 Need Notify");
	buttonHandler_Action2_label51($params);
}
if($buttId=='Action3_label51')
{
	require_once("include/14704_Need_Notify_variables.php");
	$cipherer = new RunnerCipherer("14704 Need Notify");
	buttonHandler_Action3_label51($params);
}
if($buttId=='Action1_label42')
{
	require_once("include/14704_Need_Accept_variables.php");
	$cipherer = new RunnerCipherer("14704 Need Accept");
	buttonHandler_Action1_label42($params);
}
if($buttId=='Action2_label42')
{
	require_once("include/14704_Need_Accept_variables.php");
	$cipherer = new RunnerCipherer("14704 Need Accept");
	buttonHandler_Action2_label42($params);
}
if($buttId=='Action3_label42')
{
	require_once("include/14704_Need_Accept_variables.php");
	$cipherer = new RunnerCipherer("14704 Need Accept");
	buttonHandler_Action3_label42($params);
}
if($buttId=='Empty_The_Designers_Report')
{
	require_once("include/custompages_variables.php");
	$cipherer = new RunnerCipherer("custompages");
	buttonHandler_Empty_The_Designers_Report($params);
}
if($buttId=='Update_The_Designers_Report')
{
	require_once("include/custompages_variables.php");
	$cipherer = new RunnerCipherer("custompages");
	buttonHandler_Update_The_Designers_Report($params);
}
if($buttId=='Delete_The_Jobs')
{
	require_once("include/custompages_variables.php");
	$cipherer = new RunnerCipherer("custompages");
	buttonHandler_Delete_The_Jobs($params);
}
if($buttId=='Update_The_Designers_Report1')
{
	require_once("include/custompages_variables.php");
	$cipherer = new RunnerCipherer("custompages");
	buttonHandler_Update_The_Designers_Report1($params);
}
if($buttId=='QC_Distribute_Files11')
{
	require_once("include/14704_Designer_Report_variables.php");
	$cipherer = new RunnerCipherer("14704 Designer Report");
	buttonHandler_QC_Distribute_Files11($params);
}
if($buttId=='Reject1')
{
	require_once("include/QC_Filesheet_variables.php");
	$cipherer = new RunnerCipherer("QC Filesheet");
	buttonHandler_Reject1($params);
}
if($buttId=='Reject_Job')
{
	require_once("include/QC_Worksheet_variables.php");
	$cipherer = new RunnerCipherer("QC Worksheet");
	buttonHandler_Reject_Job($params);
}
if($buttId=='Start3')
{
	require_once("include/Correction_Files_variables.php");
	$cipherer = new RunnerCipherer("Correction Files");
	buttonHandler_Start3($params);
}
if($buttId=='Finish3')
{
	require_once("include/Correction_Files_variables.php");
	$cipherer = new RunnerCipherer("Correction Files");
	buttonHandler_Finish3($params);
}
if($buttId=='Action1_label16')
{
	require_once("include/Delected_Jobs_variables.php");
	$cipherer = new RunnerCipherer("Delected Jobs");
	buttonHandler_Action1_label16($params);
}
if($buttId=='Action1_label91')
{
	require_once("include/Pending_18442_variables.php");
	$cipherer = new RunnerCipherer("Pending 18442");
	buttonHandler_Action1_label91($params);
}
if($buttId=='Action2_label91')
{
	require_once("include/Pending_18442_variables.php");
	$cipherer = new RunnerCipherer("Pending 18442");
	buttonHandler_Action2_label91($params);
}
if($buttId=='Action3_label71')
{
	require_once("include/Pending_18442_variables.php");
	$cipherer = new RunnerCipherer("Pending 18442");
	buttonHandler_Action3_label71($params);
}
if($buttId=='Action1_label511')
{
	require_once("include/18442_Need_Notify_variables.php");
	$cipherer = new RunnerCipherer("18442 Need Notify");
	buttonHandler_Action1_label511($params);
}
if($buttId=='Action2_label511')
{
	require_once("include/18442_Need_Notify_variables.php");
	$cipherer = new RunnerCipherer("18442 Need Notify");
	buttonHandler_Action2_label511($params);
}
if($buttId=='Action3_label511')
{
	require_once("include/18442_Need_Notify_variables.php");
	$cipherer = new RunnerCipherer("18442 Need Notify");
	buttonHandler_Action3_label511($params);
}
if($buttId=='Action1_label811')
{
	require_once("include/18442_Need_Upload_variables.php");
	$cipherer = new RunnerCipherer("18442 Need Upload");
	buttonHandler_Action1_label811($params);
}
if($buttId=='Action2_label811')
{
	require_once("include/18442_Need_Upload_variables.php");
	$cipherer = new RunnerCipherer("18442 Need Upload");
	buttonHandler_Action2_label811($params);
}
if($buttId=='Action3_label811')
{
	require_once("include/18442_Need_Upload_variables.php");
	$cipherer = new RunnerCipherer("18442 Need Upload");
	buttonHandler_Action3_label811($params);
}
if($buttId=='Action1_label711')
{
	require_once("include/18442_Need_QC_variables.php");
	$cipherer = new RunnerCipherer("18442 Need QC");
	buttonHandler_Action1_label711($params);
}
if($buttId=='Action2_label711')
{
	require_once("include/18442_Need_QC_variables.php");
	$cipherer = new RunnerCipherer("18442 Need QC");
	buttonHandler_Action2_label711($params);
}
if($buttId=='Action3_label611')
{
	require_once("include/18442_Need_QC_variables.php");
	$cipherer = new RunnerCipherer("18442 Need QC");
	buttonHandler_Action3_label611($params);
}
if($buttId=='Action1_label611')
{
	require_once("include/18442_Need_Download_variables.php");
	$cipherer = new RunnerCipherer("18442 Need Download");
	buttonHandler_Action1_label611($params);
}
if($buttId=='Action2_label611')
{
	require_once("include/18442_Need_Download_variables.php");
	$cipherer = new RunnerCipherer("18442 Need Download");
	buttonHandler_Action2_label611($params);
}
if($buttId=='Action3_label1211')
{
	require_once("include/18442_Need_Download_variables.php");
	$cipherer = new RunnerCipherer("18442 Need Download");
	buttonHandler_Action3_label1211($params);
}
if($buttId=='Action1_label421')
{
	require_once("include/18442_Need_Accept_variables.php");
	$cipherer = new RunnerCipherer("18442 Need Accept");
	buttonHandler_Action1_label421($params);
}
if($buttId=='Action2_label421')
{
	require_once("include/18442_Need_Accept_variables.php");
	$cipherer = new RunnerCipherer("18442 Need Accept");
	buttonHandler_Action2_label421($params);
}
if($buttId=='Action3_label421')
{
	require_once("include/18442_Need_Accept_variables.php");
	$cipherer = new RunnerCipherer("18442 Need Accept");
	buttonHandler_Action3_label421($params);
}
if($buttId=='Action1_label82')
{
	require_once("include/Deadline_Missed_variables.php");
	$cipherer = new RunnerCipherer("Deadline Missed");
	buttonHandler_Action1_label82($params);
}
if($buttId=='Action2_label82')
{
	require_once("include/Deadline_Missed_variables.php");
	$cipherer = new RunnerCipherer("Deadline Missed");
	buttonHandler_Action2_label82($params);
}
if($buttId=='Action1_label92')
{
	require_once("include/Urgent_Jobs_variables.php");
	$cipherer = new RunnerCipherer("Urgent Jobs");
	buttonHandler_Action1_label92($params);
}
if($buttId=='Action2_label92')
{
	require_once("include/Urgent_Jobs_variables.php");
	$cipherer = new RunnerCipherer("Urgent Jobs");
	buttonHandler_Action2_label92($params);
}
if($buttId=='Action1_label911')
{
	require_once("include/14704_Urgent_Jobs_variables.php");
	$cipherer = new RunnerCipherer("14704 Urgent Jobs");
	buttonHandler_Action1_label911($params);
}
if($buttId=='Action2_label911')
{
	require_once("include/14704_Urgent_Jobs_variables.php");
	$cipherer = new RunnerCipherer("14704 Urgent Jobs");
	buttonHandler_Action2_label911($params);
}
if($buttId=='Action1_label9111')
{
	require_once("include/18442_Urgent_Jobs_variables.php");
	$cipherer = new RunnerCipherer("18442 Urgent Jobs");
	buttonHandler_Action1_label9111($params);
}
if($buttId=='Action2_label9111')
{
	require_once("include/18442_Urgent_Jobs_variables.php");
	$cipherer = new RunnerCipherer("18442 Urgent Jobs");
	buttonHandler_Action2_label9111($params);
}
if($buttId=='Email_Report')
{
	require_once("include/custompages_variables.php");
	$cipherer = new RunnerCipherer("custompages");
	buttonHandler_Email_Report($params);
}
if($buttId=='New_Button12')
{
	require_once("include/Download_Reject_Job_variables.php");
	$cipherer = new RunnerCipherer("Download Reject Job");
	buttonHandler_New_Button12($params);
}
if($buttId=='New_Button111')
{
	require_once("include/Download_Reject_Job_variables.php");
	$cipherer = new RunnerCipherer("Download Reject Job");
	buttonHandler_New_Button111($params);
}
if($buttId=='Action1_label19')
{
	require_once("include/rejected_job_variables.php");
	$cipherer = new RunnerCipherer("rejected_job");
	buttonHandler_Action1_label19($params);
}
if($buttId=='Action2_label2')
{
	require_once("include/rejected_job_variables.php");
	$cipherer = new RunnerCipherer("rejected_job");
	buttonHandler_Action2_label2($params);
}
if($buttId=='QC_Distribute_Files3')
{
	require_once("include/File_Distribution_Rejected_variables.php");
	$cipherer = new RunnerCipherer("File Distribution Rejected");
	buttonHandler_QC_Distribute_Files3($params);
}
if($buttId=='Distribute_Files3')
{
	require_once("include/File_Distribution_Rejected_variables.php");
	$cipherer = new RunnerCipherer("File Distribution Rejected");
	buttonHandler_Distribute_Files3($params);
}
if($buttId=='Distribute14')
{
	require_once("include/File_Distribution_Rejected_variables.php");
	$cipherer = new RunnerCipherer("File Distribution Rejected");
	buttonHandler_Distribute14($params);
}
if($buttId=='Distribute_to_QC4')
{
	require_once("include/File_Distribution_Rejected_variables.php");
	$cipherer = new RunnerCipherer("File Distribution Rejected");
	buttonHandler_Distribute_to_QC4($params);
}
if($buttId=='Finish_Job12')
{
	require_once("include/Designer_Level_2_for_Correction_variables.php");
	$cipherer = new RunnerCipherer("Designer Level 2 for Correction");
	buttonHandler_Finish_Job12($params);
}
if($buttId=='Start21')
{
	require_once("include/Designer_Level2_Filesheet_for_Correction_variables.php");
	$cipherer = new RunnerCipherer("Designer Level2 Filesheet for Correction");
	buttonHandler_Start21($params);
}
if($buttId=='Finish21')
{
	require_once("include/Designer_Level2_Filesheet_for_Correction_variables.php");
	$cipherer = new RunnerCipherer("Designer Level2 Filesheet for Correction");
	buttonHandler_Finish21($params);
}
if($buttId=='Start_Job1')
{
	require_once("include/QC_Worksheet_for_Correction_variables.php");
	$cipherer = new RunnerCipherer("QC Worksheet for Correction");
	buttonHandler_Start_Job1($params);
}
if($buttId=='Reject_Job1')
{
	require_once("include/QC_Worksheet_for_Correction_variables.php");
	$cipherer = new RunnerCipherer("QC Worksheet for Correction");
	buttonHandler_Reject_Job1($params);
}
if($buttId=='Finish_Job2')
{
	require_once("include/QC_Worksheet_for_Correction_variables.php");
	$cipherer = new RunnerCipherer("QC Worksheet for Correction");
	buttonHandler_Finish_Job2($params);
}
if($buttId=='Start11')
{
	require_once("include/QC_Filesheet_for_Correction_variables.php");
	$cipherer = new RunnerCipherer("QC Filesheet for Correction");
	buttonHandler_Start11($params);
}
if($buttId=='Reject11')
{
	require_once("include/QC_Filesheet_for_Correction_variables.php");
	$cipherer = new RunnerCipherer("QC Filesheet for Correction");
	buttonHandler_Reject11($params);
}
if($buttId=='Finish11')
{
	require_once("include/QC_Filesheet_for_Correction_variables.php");
	$cipherer = new RunnerCipherer("QC Filesheet for Correction");
	buttonHandler_Finish11($params);
}
if($buttId=='Action3_label2')
{
	require_once("include/rejected_job_variables.php");
	$cipherer = new RunnerCipherer("rejected_job");
	buttonHandler_Action3_label2($params);
}
if($buttId=='Start_Job33')
{
	require_once("include/Designer_Level_2_for_Correction_variables.php");
	$cipherer = new RunnerCipherer("Designer Level 2 for Correction");
	buttonHandler_Start_Job33($params);
}

// proccess non table events


// create table and non table handlers
function buttonHandler_Action1_label($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action3_label($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	/*
if($params["confirmation"] == "ContinueProcess")
{ //CONTINUE NOTIFYING
*/
$result["my_server_share"] = $_SESSION["my_server_share"];
	while($record = $button->getCurrentRecord())
	{
	if ($record["jobstatus_id"] == 7)
	{
		$current_time = date("Y-m-d H:i:s");
		$uploaded_by = $_SESSION["user_id"];
		$uploaded_date = $current_time;
		$sql = "update job set `jobstatus_id`='8', `uploader_id`='".$uploaded_by."', `upload_date`='".$current_time."' where work_id=" .$record["work_id"];
		CustomQuery($sql);
	break;
	}
	if ($record["jobstatus_id"] == 8)
	{
		$current_time = date("Y-m-d H:i:s");
		$notified_by = $_SESSION["user_id"];
		$notify_date = $current_time;
		$sql = "update job set `jobstatus_id`='9', `notifer_id`='".$notified_by."', `notify_date`='".$notify_date."' where work_id=" .$record["work_id"];

			//REMOVE DIRECTORYFROM OUTPUT
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["output_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["output_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);

			//REMOVE DIRECTORYFROM DOWNLOAD
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["download_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["download_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			//exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);
			
			
//			if(file_exists($dir_to_move))
			//{
			$dir_to_move = $_SESSION["upload_dir"].$record["work_id"]."\\";
			$dir_to_move_to = $_SESSION["upload_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			//echo '<br>'.$dir_to_move.'<br>';
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_move\" \"$dir_to_move_to\"", $outputbb1);
			//print_r($outputbb1);
			//}


			//print_r($outputbb);
			//REMOVE DIRECTORYFROM OUTPUT

		CustomQuery($sql);

//UPDATE JOBFILE INFORMATION OF NOTIFIED JOB
$jobfile_update_sql = "UPDATE jobfile LEFT JOIN job ON jobfile.job_id = job.job_id SET jobfile.jobfile_status_id = 9 WHERE 	job.jobstatus_id = 9 	AND job.job_id = '".$record["work_id"]."'";

		CustomQuery($jobfile_update_sql);

//UPDATE JOBFILE INFORMATION OF NOTIFIED JOB


	break;
	}

	}

//CONTINUE NOTIFYING
/*
}
else
{
$result["confirmation"] = "Process Cancelled";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);

	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if (!mkdir($make_dir, 0, true))
	{
	//FAILED
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	echo my_json_encode($result);
}
function buttonHandler_Action3_label1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	echo my_json_encode($result);
}
function buttonHandler_Distribute_Files($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];

$server_name = $_SESSION["my_server_name"];
$distribution_success = false;

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

//$params["file_list"];
$result["total_files"] = COUNT($params["file_list"]);
$result["designer_id"] = $params["designer_id"];
$result["designer_name"] = $params["designer_name"];
$result["work_id"] = $params["work_id"];
$result["job_id"] = $params["job_id"];
$result["designer_level"] = $params["designer_level"];
$work_id = $result["work_id"];
$result["job_id"];

$jobfile_status_id = 13;
$selected_user_id = $result["designer_id"];
$selected_username = $result["designer_name"];
$current_user_id = $_SESSION["user_id"];
$current_date_refreshed = date("Y-m-d H:i:s");	//GET CURRENT DATE
$current_file_id = "";

/*
for($i=0; $i<5; $i++)
{
exec("xxcopy /y \"\\\\192.168.2.1\\C$\\TEST\\\" \"\\\\192.168.2.1\\D$\\TEST\\$i\\\"", $execoutput);
print_r($execoutput);
}

*/

for($j=0; $j<$result["total_files"]; $j++)
{

				$current_file = $params["file_list"][$j];
/*
				//GET FILE URL
						$selected_jobfile_sql = "
						SELECT file_url, client_id FROM jobfile WHERE `jobfile_id`='$current_file'
						";
						
						$selected_jobfile_result = mysqli_query($mysqlilink, $selected_jobfile_sql);
						
							while($selected_jobfile_detail = mysqli_fetch_array($selected_jobfile_result, MYSQLI_BOTH))
								{
								$file_url = addslashes($selected_jobfile_detail['file_url']);
								$client_id = $selected_jobfile_detail['client_id'];
								}				

				//GET FILE URL


				//COPY FILE TO USER DIRECTORY
				//COPY FILES

					$output = addslashes("users\\".$selected_username."\\");
					$client_dir = addslashes("clients\\".$client_id."\\");
					$work_dir = addslashes($work_id."\\");
					$job_dir = addslashes($job_id."\\");


					$exclude_from_current_file = addslashes($server_name).$client_dir.addslashes("downloads\\");
					$include_to_current_file = addslashes($server_name).$output;
					$current_file_dest = str_replace($exclude_from_current_file, $include_to_current_file, $file_url);
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					$current_file_done_src = str_replace($current_file_name, "done\\".$current_file_name, $current_file_dest);
					$current_file_path_copy_src = str_replace($current_file_name, "path copy\\".$current_file_name, $current_file_dest);
					

				//CREATE DONE AND PATH COPY FOLDER STRUCTURE FOR FILES
				$current_file_withslash = $file_url;
				$current_file_done_dest = str_replace($exclude_from_current_file, $include_to_current_file, $current_file_done_src);
				$current_file_path_copy_dest = str_replace($exclude_from_current_file, $include_to_current_file, $current_file_path_copy_src);
				$current_file_done_dest_url = str_replace($current_file_name, "", $current_file_done_dest);
				$current_file_path_copy_dest_url = str_replace($current_file_name, "", $current_file_path_copy_dest);

if(!exec("xxcopy /y /PB \"".stripslashes($file_url)."\" \"".stripslashes($current_file_dest_url)."\"", $execoutput))
{
}

if ($execoutput[3] == "The source directory must be specified.")
			{
			$error_found = true ;
			$error_found_detail = "Source File Not Found. Please Check Detail<br>File Name: $current_file_name_slashed";
			$copy_success = false;
			}

*/

			if($result["designer_level"] == "2")
			{
			$update_jobfile_sql = "

				UPDATE `jobfile`
				SET 
				`jobfile_status_id` =  $jobfile_status_id,
				`designer2_id` = '$selected_user_id',
				`distributor_id` = '$current_user_id',
				`distribute_date`= '$current_date_refreshed',
				`start2_date` = '0000-00-00 00:00:00',
				`end2_date` = '0000-00-00 00:00:00',
				`designer2_time` = NULL,

				`reject_date` = ''

				WHERE `jobfile_id` = '$current_file'
				";
			}	//DESIGNER LEVEL 2
			else
			{//DESIGNER LEVEL 1
			$update_jobfile_sql = "

				UPDATE `jobfile`
				SET 
				`jobfile_status_id` =  $jobfile_status_id,
				`designer_id` = '$selected_user_id',
				`distributor_id` = '$current_user_id',
				`distribute_date`= '$current_date_refreshed'

				WHERE `jobfile_id` = '$current_file'
				";
			}//DESIGNER LEVEL 1
				if(mysqli_query($mysqlilink, $update_jobfile_sql))
							{
							//SUCCESSFULLY UPDATED DATABSE
							//NOW PROCEED TO CLEAR THE SESSION
							$distribution_success = true;
							}
						else
							{	//WARN THE USER THAT FILE STATUS COULD NOT BE UPDATED
							//echo "<br>Could not Update JOB Information; please contact Administrator or Try again Later<br>";
							$distribution_success = false;
							}	//WARN THE USER THAT FILE STATUS COULD NOT BE UPDATED

}

if($distribution_success == true)
	{	//---------------------------------------------------------------
					//UPDATE JOB INFORMATION IN DATABASE<br />
					$set_job_status_id = (int) "4";
					$designer_list_append = "".$selected_user_id.",";
					$current_date_refreshed = date("Y-m-d H:i:s");	//GET CURRENT DATE
					
					$update_jobfile_sql = "
					UPDATE `job`
					SET
					`jobstatus_id` = '$set_job_status_id',
					`designer_list` = concat(designer_list, '$designer_list_append'),
					`distributor_id` = '$current_user_id',
					`distribute_date` = '$current_date_refreshed'
					
					WHERE `work_id` = '$work_id'"; 

						if(mysqli_query($mysqlilink, $update_jobfile_sql))
							{
							//SUCCESSFULLY UPDATED DATABSE
							//NOW PROCEED TO CLEAR THE SESSION
							$distribution_success = true;
							}
						else
							{	//WARN THE USER THAT FILE STATUS COULD NOT BE UPDATED
							  //echo "<br>Could not Update JOB Information; please contact Administrator or Try again Later<br>";
							$distribution_success = false;
							}	//WARN THE USER THAT FILE STATUS COULD NOT BE UPDATED

							//UPDATE JOB INFORMATION IN DATABASE
	}	//---------------------------------------------------------------

							/*
						$to = "$selected_username@visioninfoltd.com";
						$subject = "Received $number_of_files Files from Job #$job_id";
						$message = "
						Dear $selected_username,
						You Have $number_of_files new Files to Process from Job #$job_id. 
						Please deliver according to delivery time advised.
						
						Regards 
						Processing Department 
						Vision Info Ltd
						";
						$from = "processing@visioninfoltd.com";
						$headers = "From:" . $from;
						if (mail($to,$subject,$message,$headers))
							{
							echo "An email has been Sent to $selected_username. ";
							}
						*/
$result["distribution_success"] = $distribution_success;
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Start($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
				$record = $button->getCurrentRecord();
$result["UserID"] = $_SESSION["UserID"];
$result["file_url"] = $record["file_url"];
$file_url = $result["file_url"];
$result["jobfile_id"] = $record["jobfile_id"];
$result["UserID"] = $_SESSION["UserID"];
$selected_username = $result["UserID"];
$result["user_id"] = $record["designer_id"];
$result["job_id"] = $record["job_id"];
$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$current_date = date("Y-m-d H:i:s");	//GET CURRENT DATE
$null_date = "0000-00-00 00:00";

$current_date = date("Y-m-d H:i:s");	//GET CURRENT DATE
$null_date = "0000-00-00 00:00";

				//COPY FILE TO USER DIRECTORY
				//COPY FILES

					$server_name = $_SESSION["my_server_name"];
					$work_dir = addslashes($work_id."\\");
					$job_dir = addslashes($job_id."\\");

					$current_file_src = $_SESSION["download_dir"].$file_url;
					$current_file_src = utf8_decode($current_file_src);
					$current_file_dest = $_SESSION["user_dir_local"].$file_url;
					//$current_file_dest = utf8_decode($current_file_dest);
					
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					
					$current_file_done_src = str_replace($current_file_name, "done\\".$current_file_name, $current_file_dest);
					$current_file_path_copy_src = str_replace($current_file_name, "path copy\\".$current_file_name, $current_file_dest);
					
				//CREATE DONE AND PATH COPY FOLDER STRUCTURE FOR FILES
				$current_file_withslash = $file_url;
				$current_file_done_dest = str_replace($exclude_from_current_file, $include_to_current_file, $current_file_done_src);
				$current_file_done_dest = utf8_decode($current_file_done_dest);
				$current_file_path_copy_dest = str_replace($exclude_from_current_file, $include_to_current_file, $current_file_path_copy_src);
				$current_file_path_copy_dest = utf8_decode($current_file_path_copy_dest);
				$current_file_done_dest_url = str_replace($current_file_name, "", $current_file_done_dest);
				$current_file_path_copy_dest_url = str_replace($current_file_name, "", $current_file_path_copy_dest);

if(!exec("C:/xxcopy/xxcopy.exe /y /SC \"".$current_file_src."\" \"".$current_file_dest_url."\"", $execoutput))
{
$copy_success = true;
/*
//ADDITIONAL FILE TRANSFERS
if($additional_files_transferred)
{
}
else
{				
				//ADDITIONAL FOLDERS
				$current_file_additional_src_url = str_replace($current_file_name, "additional files\\", $current_file_src);
				$current_file_additional_dest_url = str_replace($current_file_name, "additional files\\", $current_file_dest);

				if(file_exists($current_file_additional_dest_url))
				{
				//FOLDER EXISTS
				}
				else
				{
					if (!mkdir($current_file_additional_dest_url, 0, true))
					{
					//FAILED
					}
				}

				//COPY ADDITIONAL FILES
				exec("C:/xxcopy/xxcopy.exe /YY /E /SC \"".$current_file_additional_src_url."\" \"".$current_file_additional_dest_url."\"", $execoutput);
				$additional_files_transferred = true;
}
//ADDITIONAL FILE TRANSFERS
*/

	/*	//REMOVED DONE FOLDER TO REMOVE CONFUSION
	if(file_exists($current_file_dest_url."\\done"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\Done", 0, true))
		{
		//FAILED
		}
	}
	*/ //REMOVED DONE FOLDER TO REMOVE CONFUSION

	if(file_exists($current_file_dest_url."\\path copy"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\path copy", 0, true))
		{
		//FAILED
		}
	}
}

if ($execoutput[3] == "The source directory must be specified.")
			{
			$error_found = true ;
			$error_found_detail = "Source File Not Found. Please Check Detail<br>File Name: $current_file_name_slashed";
			$copy_success = false;
			}

if($copy_success==true)
{
$result["action_response"] = "Transferred!";

//UPDATE JOB FILE INFORMATION
$update_jobfile_sql = "
UPDATE jobfile
SET `start_date` = '".$current_date."', 
`folder_name` = '".$_SESSION["user_pc_name"]."',
`jobfile_status_id` = '4'
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`start_date` = '0000-00-00 00:00:00')";
CustomQuery($update_jobfile_sql);

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='4' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='4'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='14' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='14'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='7' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='7'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
}
else
{
$result["action_response"] = "Transfer Failed!";
}

/*				
} // IF NOT FILE IS STILL IN PROGRESS
else
{
$result["action_response"] = "You have not finished last file from Job #".$data["job_id"]."! Finish that before starting another file.";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Finish($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
					$record = $button->getCurrentRecord();
$result["UserID"] = $_SESSION["UserID"];
$result["file_url"] = $record["file_url"];
$file_url = $result["file_url"];
$result["jobfile_id"] = $record["jobfile_id"];
$result["UserID"] = $_SESSION["UserID"];
$selected_username = $result["UserID"];
$result["user_id"] = $record["designer_id"];
$result["job_id"] = $record["job_id"];
$result["work_id"] = $record["work_id"];

$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$current_time = date("Y-m-d H:i:s");
$mull_time = date("0000-00-00 00:00:00");
				//COPY FILE TO USER DIRECTORY
				//COPY FILES

					$server_name = $_SESSION["my_server_name"];
					$work_dir = addslashes($work_id."\\");
					$job_dir = addslashes($job_id."\\");

					
					$current_file_src = $_SESSION["user_dir_local"].$file_url;
					$current_file_dest = $_SESSION["output_dir"].$file_url;
		
			//FIND FILE NAME		
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					
					$current_file_ext_find = explode(".", $current_file_name);
					$current_file_ext = $current_file_ext_find[count($current_file_ext_find)-1];

					$current_file_name_without_ext = str_ireplace(".".$current_file_ext,"",$current_file_name);
					
			//DEFINE DONE SRC		
					$current_file_done_url = str_replace($current_file_name,"done\\",$file_url);
					//echo "<h2>".$current_file_done_url."</h2>";
			//DEFINE DONE DEST

			//DEFINE PATH COPY SRC
					$current_file_path_copy_url = str_replace($current_file_name,"path copy\\",$file_url);
					//echo "<h2>".$current_file_path_copy_url."</h2>";

				//ADDITIONAL FOLDERS
				$current_file_additional_src_url = str_replace($current_file_name, "additional files\\", $current_file_src);
				$current_file_additional_dest_url = str_replace($current_file_name, "additional files\\", $current_file_dest);

			//DEFINE PATH COPY DEST
//DO NOT TRANSFER ORIGINAL FILES IN DONE AND PATH COPY TRANSFER					
/*
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_src."\" \"".$current_file_dest_url."\"", $execoutput))
{
$copy_success = true;
	if(file_exists($current_file_dest_url."\\done"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\Done", 0, true))
		{
		//FAILED
		}
	}
	

	if(file_exists($current_file_dest_url."\\path copy"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\path copy", 0, true))
		{
		//FAILED
		}
	}
}
//print_r($execoutput);
//echo "<br>";

if ($execoutput[3] == "The source directory must be specified.")
			{
			$error_found = true ;
			$error_found_detail = "Source File Not Found. Please Check Detail<br>File Name: $current_file_name_slashed";
			$copy_success = false;
			}
*/
//DO NOT TRANSFER ORIGINAL FILES IN DONE AND PATH COPY TRANSFER					

$check_extensions = array("jpg", "psd", "jpeg",  "tif", "png",  "eps", "tiff", "gif");
$done_file_transferred = false;
$path_copy_file_transferred = false;

foreach ($check_extensions as $file_ext)
{
//TRANSFER DONE AND PATH COPY FILES
//DONE
$current_file_done_src = $_SESSION["user_dir_local"].$current_file_done_url.$current_file_name_without_ext.".$file_ext";
$current_file_done_src = utf8_decode($current_file_done_src);
$current_file_done_dest_url = $_SESSION["output_dir"].$current_file_done_url;
$current_file_done_dest = $current_file_done_dest_url.$current_file_name_without_ext.".$file_ext";
$current_file_done_dest = utf8_decode($current_file_done_dest);
//echo "<h4>$current_file_done_src</h4>";
//echo "<h4>$current_file_done_dest_url</h4>";

if($done_file_transferred)
{
}
else
{
if(file_exists($current_file_done_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_done_src."\" \"".$current_file_done_dest_url."\"", $execoutput))
{
	if(file_exists($current_file_done_dest))
	{	//DESTINATION FILE COPIED
	$copy_success = true;
	//$done_file_transferred = true;
	}
}
else
{
$copy_success = false;
}
} //FILE EXISTS, TRANSFER
}

//PATH COPY
$current_file_path_copy_src = $_SESSION["user_dir_local"].$current_file_path_copy_url.$current_file_name_without_ext.".$file_ext";
$current_file_path_copy_src = utf8_decode($current_file_path_copy_src);
$current_file_path_copy_dest_url = $_SESSION["output_dir"].$current_file_path_copy_url;
$current_file_path_copy_dest = $current_file_path_copy_dest_url.$current_file_name_without_ext.".$file_ext";
$current_file_path_copy_dest = utf8_decode($current_file_path_copy_dest);
//echo "<h4>$current_file_path_copy_src</h4>";
//echo "<h4>$current_file_path_copy_dest_url</h4>";

//PATH COPY Transferred
if($path_copy_file_transferred)
{
}
else
{
if(file_exists($current_file_path_copy_src))
{ //FILE EXISTS, TRANSFER

if(!exec("C:/xxcopy/xxcopy.exe /y /SC \"".$current_file_path_copy_src."\" \"".$current_file_path_copy_dest_url."\"", $execoutput))
{
	if(file_exists($current_file_path_copy_dest))
	{
	$copy_success = true;
	//$path_copy_file_transferred = true;
	}
}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
} // PATH COPY Transferred

//TRANSFER DONE AND PATH COPY FILES			
}

$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");

if($copy_success==true)
{

/*
//ADDITIONAL FILE TRANSFERS
if($additional_files_transferred)
{
}
else
{				
				//ADDITIONAL FOLDERS
				$current_file_additional_src_url = str_replace($current_file_name, "additional files\\", $current_file_src);
				$current_file_additional_dest_url = str_replace($current_file_name, "additional files\\", $current_file_dest);

				if(file_exists($current_file_additional_dest_url))
				{
				//FOLDER EXISTS
				}
				else
				{
					if (!mkdir($current_file_additional_dest_url, 0, true))
					{
					//FAILED
					}
				}

				//COPY ADDITIONAL FILES
				exec("C:/xxcopy/xxcopy.exe /YY /E /SC \"".$current_file_additional_src_url."\" \"".$current_file_additional_dest_url."\"", $execoutput);
				$additional_files_transferred = true;
}
//ADDITIONAL FILE TRANSFERS 

*/

$result["action_response"] = "Transferred!";
//UPDATE JOBFILE INFORMATION
/*
//UPDATE JOB FILE INFORMATION
$update_jobfile_sql = "
UPDATE jobfile
SET `start_date` = '".$current_date."',
`jobfile_status_id` = '4'
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`start_date` = '".$null_date."')";
CustomQuery($update_jobfile_sql);
*/

//`folder_name` = '".$_SESSION["user_pc_name"]."',
//UPDATE JOB FILE INFORMATION
//`folder_name` = '".$_SESSION["user_pc_name"]."',

$update_jobfile_sql = "
UPDATE jobfile
SET `end_date` = '".$current_date."',
`jobfile_status_id` = '14'
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer_time` IS NULL)";
CustomQuery($update_jobfile_sql);

//UPDATE TIME TAKEN
$update_jobfile_sql = "
UPDATE jobfile
SET designer_time = TIMEDIFF(end_date, start_date)
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer_time` IS NULL)";
CustomQuery($update_jobfile_sql);

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='4' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='4'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='14' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='14'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='7' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='7'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION

}
else
{
$result["action_response"] = "Transfer Failed!";
};
	echo my_json_encode($result);
}
function buttonHandler_Distribute_to_QC($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	
$i = "";
while($allrecords = $button->getNextSelectedRecord())
{
$selected_work_id = $allrecords["work_id"];
$selected_job_id = $allrecords["job_id"];
if($i == "")
{
$i = $allrecords["jobfile_id"];
}
else
{
$i = $i.",".$allrecords["jobfile_id"];
}
}

$result["work_id"] = $selected_work_id;
$result["job_id"] = $selected_job_id;
$result["file_list"] = $i;
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_QC_Distribute_Files($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$server_name = $_SESSION["my_server_name"];
$distribution_success = false;

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

//$params["file_list"];
$result["total_files"] = COUNT($params["file_list"]);
$result["designer_id"] = $params["designer_id"];
$result["designer_name"] = $params["designer_name"];
$result["work_id"] = $params["work_id"];
$result["job_id"] = $params["job_id"];

$work_id = $result["work_id"];
$result["job_id"];

$jobfile_status_id = 17;
$selected_user_id = $result["designer_id"];
$selected_username = $result["designer_name"];
$current_user_id = $_SESSION["user_id"];
$current_date_refreshed = date("Y-m-d H:i:s");	//GET CURRENT DATE
$current_file_id = "";

for($j=0; $j<$result["total_files"]; $j++)
{

				$current_file = $params["file_list"][$j];
/*
				//GET FILE URL
						$selected_jobfile_sql = "
						SELECT file_url, client_id FROM jobfile WHERE `jobfile_id`='$current_file'
						";
						
						$selected_jobfile_result = mysqli_query($mysqlilink, $selected_jobfile_sql);
						
							while($selected_jobfile_detail = mysqli_fetch_array($selected_jobfile_result, MYSQLI_BOTH))
								{
								$file_url = addslashes($selected_jobfile_detail['file_url']);
								$client_id = $selected_jobfile_detail['client_id'];
								}				

				//GET FILE URL


				//COPY FILE TO USER DIRECTORY
				//COPY FILES

					$output = addslashes("users\\".$selected_username."\\");
					$client_dir = addslashes("clients\\".$client_id."\\");
					$work_dir = addslashes($work_id."\\");
					$job_dir = addslashes($job_id."\\");


					$exclude_from_current_file = addslashes($server_name).$client_dir.addslashes("downloads\\");
					$include_to_current_file = addslashes($server_name).$output;
					$current_file_dest = str_replace($exclude_from_current_file, $include_to_current_file, $file_url);
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					$current_file_done_src = str_replace($current_file_name, "done\\".$current_file_name, $current_file_dest);
					$current_file_path_copy_src = str_replace($current_file_name, "path copy\\".$current_file_name, $current_file_dest);
					

				//CREATE DONE AND PATH COPY FOLDER STRUCTURE FOR FILES
				$current_file_withslash = $file_url;
				$current_file_done_dest = str_replace($exclude_from_current_file, $include_to_current_file, $current_file_done_src);
				$current_file_path_copy_dest = str_replace($exclude_from_current_file, $include_to_current_file, $current_file_path_copy_src);
				$current_file_done_dest_url = str_replace($current_file_name, "", $current_file_done_dest);
				$current_file_path_copy_dest_url = str_replace($current_file_name, "", $current_file_path_copy_dest);

if(!exec("xxcopy /y /PB \"".stripslashes($file_url)."\" \"".stripslashes($current_file_dest_url)."\"", $execoutput))
{
}

if ($execoutput[3] == "The source directory must be specified.")
			{
			$error_found = true ;
			$error_found_detail = "Source File Not Found. Please Check Detail<br>File Name: $current_file_name_slashed";
			$copy_success = false;
			}

*/

/*				`qcstart_date` = '0000-00-00 00:00:00',
				`qcend_date` = '0000-00-00 00:00:00',
				`qc_time` = NULL,
*/
			$update_jobfile_sql = "

				UPDATE `jobfile`
				SET 
				`jobfile_status_id` =  $jobfile_status_id,
				`qc_id` = '$selected_user_id',
				`distributor_id` = '$current_user_id',
				`distribute_date`= '$current_date_refreshed',
				`qcstart_date` = '0000-00-00 00:00:00',
				`qcend_date` = '0000-00-00 00:00:00',
				`reject_reason` = NULL,
				`qc_time` = NULL

				WHERE `jobfile_id` = '$current_file'
				";

				if(mysqli_query($mysqlilink, $update_jobfile_sql))
							{
							//SUCCESSFULLY UPDATED DATABSE
							//NOW PROCEED TO CLEAR THE SESSION
							$distribution_success = true;
							}
						else
							{	//WARN THE USER THAT FILE STATUS COULD NOT BE UPDATED
							//echo "<br>Could not Update JOB Information; please contact Administrator or Try again Later<br>";
							$distribution_success = false;
							}	//WARN THE USER THAT FILE STATUS COULD NOT BE UPDATED

}

if($distribution_success == true)
	{	//---------------------------------------------------------------
					//UPDATE JOB INFORMATION IN DATABASE<br />
					//$set_job_status_id = (int) "4";
					$qc_list_append = "".$selected_user_id.",";
					$current_date_refreshed = date("Y-m-d H:i:s");	//GET CURRENT DATE
					
					$update_jobfile_sql = "
					UPDATE `job`
					SET
					`qcs_list` = concat(qcs_list, '$qc_list_append'),
					`distributor_id` = '$current_user_id',
					`distribute_date` = '$current_date_refreshed'
					
					WHERE `work_id` = '$work_id'"; 

						if(mysqli_query($mysqlilink, $update_jobfile_sql))
							{
							//SUCCESSFULLY UPDATED DATABSE
							//NOW PROCEED TO CLEAR THE SESSION
							$distribution_success = true;
							}
						else
							{	//WARN THE USER THAT FILE STATUS COULD NOT BE UPDATED
							  //echo "<br>Could not Update JOB Information; please contact Administrator or Try again Later<br>";
							$distribution_success = false;
							}	//WARN THE USER THAT FILE STATUS COULD NOT BE UPDATED

							//UPDATE JOB INFORMATION IN DATABASE
	}	//---------------------------------------------------------------

							/*
						$to = "$selected_username@visioninfoltd.com";
						$subject = "Received $number_of_files Files from Job #$job_id";
						$message = "
						Dear $selected_username,
						You Have $number_of_files new Files to Process from Job #$job_id. 
						Please deliver according to delivery time advised.
						
						Regards 
						Processing Department 
						Vision Info Ltd
						";
						$from = "processing@visioninfoltd.com";
						$headers = "From:" . $from;
						if (mail($to,$subject,$message,$headers))
							{
							echo "An email has been Sent to $selected_username. ";
							}
						*/
$result["distribution_success"] = $distribution_success;;
	echo my_json_encode($result);
}
function buttonHandler_Start1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
				$record = $button->getCurrentRecord();
$result["UserID"] = $_SESSION["UserID"];
$result["file_url"] = $record["file_url"];
$file_url = $result["file_url"];
$result["jobfile_id"] = $record["jobfile_id"];
$result["UserID"] = $_SESSION["UserID"];
$selected_username = $result["UserID"];
$result["user_id"] = $record["designer_id"];
$result["job_id"] = $record["job_id"];
$result["work_id"] = $record["work_id"];

$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$current_time = date("Y-m-d H:i:s");
$mull_time = date("0000-00-00 00:00:00");
				//COPY FILE TO USER DIRECTORY
				//COPY FILES

					$server_name = $_SESSION["my_server_name"];
					$work_dir = addslashes($work_id."\\");
					$job_dir = addslashes($job_id."\\");

					
					$current_file_src = $_SESSION["output_local"].$file_url;
					$current_file_dest = $_SESSION["user_dir_local"].$file_url;
		
			//FIND FILE NAME		
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					
					$current_file_ext_find = explode(".", $current_file_name);
					$current_file_ext = $current_file_ext_find[count($current_file_ext_find)-1];

					$current_file_name_without_ext = str_ireplace(".".$current_file_ext,"",$current_file_name);
					
			//DEFINE DONE SRC		
					$current_file_done_url = str_replace($current_file_name,"done\\",$file_url);
					//echo "<h2>".$current_file_done_url."</h2>";
			//DEFINE DONE DEST

			//DEFINE PATH COPY SRC
					$current_file_path_copy_url = str_replace($current_file_name,"path copy\\",$file_url);
					//echo "<h2>".$current_file_path_copy_url."</h2>";
			//DEFINE PATH COPY DEST
//DO NOT TRANSFER ORIGINAL FILES IN DONE AND PATH COPY TRANSFER					
/*
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_src."\" \"".$current_file_dest_url."\"", $execoutput))
{
$copy_success = true;
	if(file_exists($current_file_dest_url."\\done"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\Done", 0, true))
		{
		//FAILED
		}
	}
	

	if(file_exists($current_file_dest_url."\\path copy"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\path copy", 0, true))
		{
		//FAILED
		}
	}
}
//print_r($execoutput);
//echo "<br>";

if ($execoutput[3] == "The source directory must be specified.")
			{
			$error_found = true ;
			$error_found_detail = "Source File Not Found. Please Check Detail<br>File Name: $current_file_name_slashed";
			$copy_success = false;
			}
*/
//DO NOT TRANSFER ORIGINAL FILES IN DONE AND PATH COPY TRANSFER					

$check_extensions = array("jpg", "psd", "jpeg",  "tif", "png",  "eps", "tiff", "gif");
$done_file_transferred = false;
$path_copy_file_transferred = false;

foreach ($check_extensions as $file_ext)
{
//TRANSFER DONE AND PATH COPY FILES
//DONE
$current_file_done_src = $_SESSION["output_dir"].$current_file_done_url.$current_file_name_without_ext.".$file_ext";
$current_file_done_dest_url = $_SESSION["user_dir_local"].$current_file_done_url;
//echo "<h4>$current_file_done_src</h4>";
//echo "<h4>$current_file_done_dest_url</h4>";

if($done_file_transferred)
{
}
else
{
if(file_exists($current_file_done_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_done_src."\" \"".$current_file_done_dest_url."\"", $execoutput))
{
$copy_success = true;
$done_file_transferred = true;
}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
}

//PATH COPY
$current_file_path_copy_src = $_SESSION["output_dir"].$current_file_path_copy_url.$current_file_name_without_ext.".$file_ext";
$current_file_path_copy_dest_url = $_SESSION["user_dir_local"].$current_file_path_copy_url;
//echo "<h4>$current_file_path_copy_src</h4>";
//echo "<h4>$current_file_path_copy_dest_url</h4>";

//PATH COPY Transferred
if($path_copy_file_transferred)
{
}
else
{
if(file_exists($current_file_path_copy_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_path_copy_src."\" \"".$current_file_path_copy_dest_url."\"", $execoutput))
{
$copy_success = true;
$path_copy_file_transferred = true;
}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
} // PATH COPY Transferred

//TRANSFER DONE AND PATH COPY FILES			
}

$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");

if($copy_success==true)
{
$result["action_response"] = "Transferred!";
//UPDATE JOBFILE INFORMATION

//UPDATE JOB FILE INFORMATION
//`reject_reason` = '".$_SESSION["user_pc_name"]."',

$update_jobfile_sql = "
UPDATE jobfile
SET `qcstart_date` = '".$current_date."',
`jobfile_status_id` = '5'
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`qc_time` IS NULL)";
CustomQuery($update_jobfile_sql);

/*
//UPDATE TIME TAKEN
$update_jobfile_sql = "
UPDATE jobfile
SET designer_time = TIMEDIFF(end_date, start_date)
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer_time` IS NULL)";
CustomQuery($update_jobfile_sql);
*/
}
else
{
$result["action_response"] = "Transfer Failed!";
}

//UPDATE JOB FILE INFORMATION
$update_jobfile_sql = "
UPDATE jobfile
SET `start_date` = '".$current_date."',
`jobfile_status_id` = '4'
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`start_date` = '".$null_date."')";
CustomQuery($update_jobfile_sql);

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='4' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='4'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='14' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='14'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='7' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='7'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION;
	echo my_json_encode($result);
}
function buttonHandler_Finish1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$record = $button->getCurrentRecord();
$result["UserID"] = $_SESSION["UserID"];
$result["file_url"] = $record["file_url"];
$file_url = $result["file_url"];
$result["jobfile_id"] = $record["jobfile_id"];
$result["UserID"] = $_SESSION["UserID"];
$selected_username = $result["UserID"];
$result["user_id"] = $record["designer_id"];
$result["job_id"] = $record["job_id"];
$result["work_id"] = $record["work_id"];

$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$current_time = date("Y-m-d H:i:s");
$mull_time = date("0000-00-00 00:00:00");
				//COPY FILE TO USER DIRECTORY
				//COPY FILES

					$server_name = $_SESSION["my_server_name"];
					$work_dir = addslashes($work_id."\\");
					$job_dir = addslashes($job_id."\\");

					
					$current_file_src = $_SESSION["user_dir_local"].$file_url;
					$current_file_dest = $_SESSION["upload_dir"].$file_url;
		
			//FIND FILE NAME		
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					
					$current_file_ext_find = explode(".", $current_file_name);
					$current_file_ext = $current_file_ext_find[count($current_file_ext_find)-1];

					$current_file_name_without_ext = str_ireplace(".".$current_file_ext,"",$current_file_name);
					
			//DEFINE DONE SRC		
					$current_file_done_url = str_replace($current_file_name,"done\\",$file_url);
					//echo "<h2>".$current_file_done_url."</h2>";
			//DEFINE DONE DEST

			//DEFINE PATH COPY SRC
					$current_file_path_copy_url = str_replace($current_file_name,"path copy\\",$file_url);
					//echo "<h2>".$current_file_path_copy_url."</h2>";
			//DEFINE PATH COPY DEST
//DO NOT TRANSFER ORIGINAL FILES IN DONE AND PATH COPY TRANSFER					
/*
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_src."\" \"".$current_file_dest_url."\"", $execoutput))
{
$copy_success = true;
	if(file_exists($current_file_dest_url."\\done"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\Done", 0, true))
		{
		//FAILED
		}
	}
	

	if(file_exists($current_file_dest_url."\\path copy"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\path copy", 0, true))
		{
		//FAILED
		}
	}
}
//print_r($execoutput);
//echo "<br>";

if ($execoutput[3] == "The source directory must be specified.")
			{
			$error_found = true ;
			$error_found_detail = "Source File Not Found. Please Check Detail<br>File Name: $current_file_name_slashed";
			$copy_success = false;
			}
*/
//DO NOT TRANSFER ORIGINAL FILES IN DONE AND PATH COPY TRANSFER					

$check_extensions = array("jpg", "psd", "jpeg",  "tif", "png",  "eps", "tiff", "gif");
$done_file_transferred = false;
$path_copy_file_transferred = false;

foreach ($check_extensions as $file_ext)
{
//TRANSFER DONE AND PATH COPY FILES
//DONE
$current_file_done_src = $_SESSION["user_dir_local"].$current_file_done_url.$current_file_name_without_ext.".$file_ext";
$current_file_done_dest_url = $_SESSION["upload_dir"].$current_file_done_url;
//echo "<h4>$current_file_done_src</h4>";
//echo "<h4>$current_file_done_dest_url</h4>";

if($done_file_transferred)
{
}
else
{
if(file_exists($current_file_done_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_done_src."\" \"".$current_file_done_dest_url."\"", $execoutput))
{
$copy_success = true;
$done_file_transferred = true;
}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
}

//PATH COPY
$current_file_path_copy_src = $_SESSION["user_dir_local"].$current_file_path_copy_url.$current_file_name_without_ext.".$file_ext";
$current_file_path_copy_dest_url = $_SESSION["upload_dir"].$current_file_path_copy_url;
//echo "<h4>$current_file_path_copy_src</h4>";
//echo "<h4>$current_file_path_copy_dest_url</h4>";

//PATH COPY Transferred
if($path_copy_file_transferred)
{
}
else
{
if(file_exists($current_file_path_copy_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_path_copy_src."\" \"".$current_file_path_copy_dest_url."\"", $execoutput))
{
$copy_success = true;
$path_copy_file_transferred = true;
}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
} // PATH COPY Transferred

//TRANSFER DONE AND PATH COPY FILES			
}

$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");

if($copy_success==true)
{
$result["action_response"] = "Transferred!";
//UPDATE JOBFILE INFORMATION

//UPDATE JOB FILE INFORMATION
$update_jobfile_sql = "
UPDATE jobfile
SET `qcend_date` = '".$current_date."',
`jobfile_status_id` = '7'
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`qc_time` IS NULL)";
CustomQuery($update_jobfile_sql);

//UPDATE TIME TAKEN
$update_jobfile_sql = "
UPDATE jobfile
SET qc_time = TIMEDIFF(qcend_date, qcstart_date)
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`qc_time` IS NULL)";
CustomQuery($update_jobfile_sql);

}
else
{
$result["action_response"] = "Transfer Failed!";
}

//UPDATE JOB FILE INFORMATION
$update_jobfile_sql = "
UPDATE jobfile
SET `start2_date` = '".$current_date."',
`jobfile_status_id` = '4'
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`start2_date` = '".$null_date."')";
CustomQuery($update_jobfile_sql);

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='4' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='4'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='14' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='14'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='7' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='7'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION

;;
	echo my_json_encode($result);
}
function buttonHandler_New_Button1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_New_Button11($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_Back($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label3($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label3($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action3_label3($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["my_server_share"] = $_SESSION["my_server_share"];

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 7)
{
	$current_time = date("Y-m-d H:i:s");
	$uploaded_by = $_SESSION["user_id"];
	$uploaded_date = $current_time;
	$sql = "update job set `jobstatus_id`='8', `uploader_id`='".$uploaded_by."', `upload_date`='".$current_time."' where work_id=" .$record["work_id"];
	CustomQuery($sql);
break;
}
if ($record["jobstatus_id"] == 8)
{
	$current_time = date("Y-m-d H:i:s");
	$uploaded_by = $_SESSION["user_id"];
	$uploaded_date = $current_time;
	$sql = "update job set `jobstatus_id`='9', `uploader_id`='".$uploaded_by."', `upload_date`='".$current_time."' where work_id=" .$record["work_id"];
	CustomQuery($sql);
break;
}


};
	echo my_json_encode($result);
}
function buttonHandler_Start_Job($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
				//DESIGNER LEVEL 2 BATCH START BUTTON

			$record = $button->getCurrentRecord();
$result["UserID"] = $_SESSION["UserID"];
$result["file_url"] = $record["file_url"];
$file_url = $result["file_url"];
$result["jobfile_id"] = $record["jobfile_id"];
$result["UserID"] = $_SESSION["UserID"];
$selected_username = $result["UserID"];
$result["user_id"] = $record["designer_id"];
$result["job_id"] = $record["job_id"];
$result["work_id"] = $record["work_id"];

$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$current_time = date("Y-m-d H:i:s");
$mull_time = date("0000-00-00 00:00:00");
				//COPY FILE TO USER DIRECTORY
				//COPY FILES

$server_name = $_SESSION["my_server_name"];
$work_dir = addslashes($work_id."\\");
$job_dir = addslashes($job_id."\\");

	//CUSTOM DATABASE CONNECTION
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
	//CUSTOM DATABASE CONNECTION
	
	//CUSTOM DATABASE QUERY
	$select_jobfile_sql = "
			Select * from jobfile
			WHERE `work_id`='".$result["work_id"]."' AND `qc_id`='".$_SESSION["user_id"]."' AND qc_time IS NULL
			";

	$select_jobfile_result = mysqli_query($mysqlilink, $select_jobfile_sql);
	$number_of_jobs = mysqli_num_rows($select_jobfile_result);
	//CUSTOM DATABASE QUERY
	
	//$list_jobfile_result = mysqli_fetch_array($select_jobfile_result, MYSQLI_BOTH);
	//print_r($list_jobfile_result);
	
$list_of_files_copied = array();
$done_file_transferred = false;
$path_copy_file_transferred = false;
$original_file_sucess = false;

// ENUMERATE JOBFILES  -------------------------------------------------------------------------------------------------------
	while($list_jobfile_result = mysqli_fetch_array($select_jobfile_result, MYSQLI_BOTH))
	{	// COPY EACH FILE AND MAKE DB UPDATE
	$file_url = $list_jobfile_result["file_url"];
	$result["file_url"] = $list_jobfile_result["file_url"];
	
	$jobfile_id = $list_jobfile_result["jobfile_id"];
	$result["jobfile_id"] = $list_jobfile_result["jobfile_id"];
	//echo "$jobfile_id  $file_url";
	
					$current_file_src = $_SESSION["output_local"].$file_url;
					$current_file_dest = $_SESSION["user_dir_local"].$file_url;
			//FIND FILE NAME		
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					$current_file_ext_find = explode(".", $current_file_name);
					$current_file_ext = $current_file_ext_find[count($current_file_ext_find)-1];
					$current_file_name_without_ext = str_ireplace(".".$current_file_ext,"",$current_file_name);
			//DEFINE DONE SRC		
					$current_file_done_url = str_replace($current_file_name,"done\\",$file_url);
					//echo "<h2>".$current_file_done_url."</h2>";
			//DEFINE PATH COPY SRC
					$current_file_path_copy_url = str_replace($current_file_name,"path copy\\",$file_url);
					//echo "<h2>".$current_file_path_copy_url."</h2>";
			//DEFINE PATH COPY DEST
					$check_extensions = $_SESSION["check_extensions"];


//SKIP COPYING ORIGINAL FILE FOR QC
/*
					//TRANSFER CURRENT ORIGINAL FILES
						$current_file_src2 = $_SESSION["download_dir"].$file_url;
						if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".$current_file_src2."\" \"".$current_file_dest_url."\"", $execoutput))
						{
							//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
							if(file_exists($current_file_dest))
								{
								//echo "<br> $current_file_dest";
								
								//reject_date = pc number
								$update_jobfile_sql = "
								UPDATE jobfile
								SET `start2_date` = '".$current_time."',
								`reject_date` = '".$_SESSION["user_pc_name"]."',
								`jobfile_status_id` = '4'
								WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`end2_date`='0000-00-00 00:00:00')";
								CustomQuery($update_jobfile_sql);
								
								$copy_success = true;
								$original_file_sucess = true;
								array_push($list_of_files_copied, $result["jobfile_id"]);
								}
							//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
						}
						//TRANSFER CURRENT ORIGINAL FILES

*/
//SKIP COPYING ORIGINAL FILE FOR QC

foreach ($check_extensions as $file_ext)
{
//TRANSFER DONE AND PATH COPY FILES
//DONE
$current_file_done_src = $_SESSION["output_dir"].$current_file_done_url.$current_file_name_without_ext.".$file_ext";
$current_file_done_src = utf8_decode($current_file_done_src);
$current_file_done_dest_url = $_SESSION["user_dir_local"].$current_file_done_url;

//CREATE DONE FOLDER
if(file_exists($current_file_done_dest_url)) 	{ /*FOLDER EXISTS*/	} else  {  if (!mkdir($current_file_done_dest_url, 0, true)) { /*FOLDER CREATION FAILED*/ } }

//echo "<br>$current_file_done_src <br>$current_file_done_dest_url";
/*
if($done_file_transferred)
{
//FILE ALREADY TRANSFERRED
}
//TRANSFER FILES IF SOURCE EXISTS
else
{
*/
if(file_exists($current_file_done_src))
{ 
if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".utf8_decode($current_file_done_src)."\" \"".$current_file_done_dest_url."\"", $execoutput_done))
{
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
	if(file_exists($current_file_done_dest_url.$current_file_name_without_ext.".$file_ext"))
		{
		//`reject_reason` = '".$_SESSION["user_pc_name"]."',
		//reject_date = pc number
		$update_jobfile_sql = "
		UPDATE jobfile
		SET `qcstart_date` = '".$current_time."',
		`jobfile_status_id` = '5'
		WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`qcend_date`='0000-00-00 00:00:00')";
		CustomQuery($update_jobfile_sql);
		
		$copy_success = true;
		$done_file_transferred = true;
		array_push($list_of_files_copied, $result["jobfile_id"]);
		}
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED

}
else
{
//$copy_success = false;
}
}

//}
//TRANSFER FILES IF SOURCE EXISTS

//PATH COPY
$current_file_path_copy_src = $_SESSION["output_dir"].$current_file_path_copy_url.$current_file_name_without_ext.".$file_ext";
$current_file_path_copy_src = utf8_decode($current_file_path_copy_src);
$current_file_path_copy_dest_url = $_SESSION["user_dir_local"].$current_file_path_copy_url;
//echo "<h4>$current_file_path_copy_src</h4>";
//echo "<h4>$current_file_path_copy_dest_url</h4>";

if(file_exists($current_file_path_copy_dest_url))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_path_copy_dest_url, 0, true))
		{
		//FAILED
		}
	}

//PATH COPY Transferred
/*
if($path_copy_file_transferred)
{
}
else
{
*/
if(file_exists($current_file_path_copy_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".$current_file_path_copy_src."\" \"".$current_file_path_copy_dest_url."\"", $execoutput_path_copy))
{
	
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
	if(file_exists($current_file_path_copy_dest_url.$current_file_name_without_ext.".$file_ext"))
		{
		//`reject_reason` = '".$_SESSION["user_pc_name"]."',			
		$update_jobfile_sql = "
		UPDATE jobfile
		SET `qcstart_date` = '".$current_time."',
		`jobfile_status_id` = '5'
		WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`qcend_date`='0000-00-00 00:00:00')";
		CustomQuery($update_jobfile_sql);
		
		$copy_success = true;
		$path_copy_file_transferred = true;
		array_push($list_of_files_copied, $result["jobfile_id"]);
		}
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED

}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
//} // PATH COPY Transferred

/*

//ADDITIONAL FILE TRANSFERS
if($additional_files_transferred == true)
{
}
else
{				
				//ADDITIONAL FOLDERS
				$current_file_additional_src_url = str_replace($current_file_name, "additional files\\", $current_file_src);
				$current_file_additional_dest_url = str_replace($current_file_name, "additional files\\", $current_file_dest);

				$current_file_additional_src_url = $_SESSION["output_dir"].$current_file_additional_src_url;
				$current_file_additional_dest_url = $current_file_additional_dest_url;

				if(file_exists($current_file_additional_dest_url))
				{
				//FOLDER EXISTS
				}
				else
				{
					if (!mkdir($current_file_additional_dest_url, 0, true))
					{
					//FAILED
					}
				}

				//COPY ADDITIONAL FILES
				exec("C:/xxcopy/xxcopy.exe /YY /E /SC \"".$current_file_additional_src_url."\" \"".$current_file_additional_dest_url."\"", $execoutput1);
				$additional_files_transferred = true;
}
//ADDITIONAL FILE TRANSFERS

*/




//TRANSFER DONE AND PATH COPY FILES
}

$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");

if($copy_success==true)
{
$result["action_response"] = "Transferred!";
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='5' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='5'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='14' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='14'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='7' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='7'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

/*
//UPDATE TIME TAKEN
$update_jobfile_sql = "
UPDATE jobfile
SET designer_time = TIMEDIFF(end_date, start_date)
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer_time` IS NULL)";
CustomQuery($update_jobfile_sql);
*/
}
else
{
$result["action_response"] = "Transfer Failed!";
}


}	// COPY EACH FILE AND MAKE DB UPDATE	
// ENUMERATE JOBFILES  -------------------------------------------------------------------------------------------------------



//print_r($list_of_files_copied);
//DESIGNER LEVEL 2 BATCH START BUTTON;;;
;
	echo my_json_encode($result);
}
function buttonHandler_Finish_Job($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
				//DESIGNER LEVEL 2 BATCH FINISH BUTTON

			$record = $button->getCurrentRecord();
$result["UserID"] = $_SESSION["UserID"];
$result["file_url"] = $record["file_url"];
$file_url = $result["file_url"];
$result["jobfile_id"] = $record["jobfile_id"];
$result["UserID"] = $_SESSION["UserID"];
$selected_username = $result["UserID"];
$result["user_id"] = $record["designer_id"];
$result["job_id"] = $record["job_id"];
$result["work_id"] = $record["work_id"];

$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");
				//COPY FILE TO USER DIRECTORY
				//COPY FILES

$server_name = $_SESSION["my_server_name"];
$work_dir = addslashes($work_id."\\");
$job_dir = addslashes($job_id."\\");

	//CUSTOM DATABASE CONNECTION
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
	//CUSTOM DATABASE CONNECTION
	
	//CUSTOM DATABASE QUERY
	$select_jobfile_sql = "
			Select * from jobfile
			WHERE `work_id`='".$result["work_id"]."' AND `qc_id`='".$_SESSION["user_id"]."' AND qc_time IS NULL
			";

	$select_jobfile_result = mysqli_query($mysqlilink, $select_jobfile_sql);
	$number_of_jobs = mysqli_num_rows($select_jobfile_result);
	//CUSTOM DATABASE QUERY
	
	//$list_jobfile_result = mysqli_fetch_array($select_jobfile_result, MYSQLI_BOTH);
	//print_r($list_jobfile_result);
	
$list_of_files_copied = array();
$done_file_transferred = false;
$path_copy_file_transferred = false;
$original_file_sucess = false;

// ENUMERATE JOBFILES  -------------------------------------------------------------------------------------------------------
	while($list_jobfile_result = mysqli_fetch_array($select_jobfile_result, MYSQLI_BOTH))
	{	// COPY EACH FILE AND MAKE DB UPDATE
	$file_url = $list_jobfile_result["file_url"];
	$result["file_url"] = $list_jobfile_result["file_url"];
	
	$jobfile_id = $list_jobfile_result["jobfile_id"];
	$result["jobfile_id"] = $list_jobfile_result["jobfile_id"];
	//echo "$jobfile_id  $file_url";

		$GLOBALS["jobfile_start_date_first"] = $list_jobfile_result["qcstart_date"];
	
					$current_file_src = $_SESSION["user_dir_local"].$file_url;
					$current_file_dest = $_SESSION["upload_dir"].$file_url;
			//FIND FILE NAME		
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					$current_file_ext_find = explode(".", $current_file_name);
					$current_file_ext = $current_file_ext_find[count($current_file_ext_find)-1];
					$current_file_name_without_ext = str_ireplace(".".$current_file_ext,"",$current_file_name);
			//DEFINE DONE SRC		
					$current_file_done_url = str_replace($current_file_name,"done\\",$file_url);
					//echo "<h2>".$current_file_done_url."</h2>";
			//DEFINE PATH COPY SRC
					$current_file_path_copy_url = str_replace($current_file_name,"path copy\\",$file_url);
					//echo "<h2>".$current_file_path_copy_url."</h2>";
			//DEFINE PATH COPY DEST
					$check_extensions = $_SESSION["check_extensions"];
		/*
					//TRANSFER CURRENT ORIGINAL FILES
						$current_file_src2 = $_SESSION["download_dir"].$file_url;
						if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".$current_file_src2."\" \"".$current_file_dest_url."\"", $execoutput))
						{
							//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
							if(file_exists($current_file_dest))
								{
								//echo "<br> $current_file_dest";
								
								//UPDATE JOB FILE INFORMATION
								$update_jobfile_sql = "
								UPDATE jobfile
								SET `end2_date` = '".$current_date."',
								`jobfile_status_id` = '14'
								WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer2_time` IS NULL)";
								CustomQuery($update_jobfile_sql);
								
								$copy_success = true;
								$original_file_sucess = true;
								array_push($list_of_files_copied, $result["jobfile_id"]);
								}
							//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
						}
						//TRANSFER CURRENT ORIGINAL FILES

			*/

foreach ($check_extensions as $file_ext)
{
//TRANSFER DONE AND PATH COPY FILES
//DONE
$current_file_done_src = $_SESSION["user_dir_local"].$current_file_done_url.$current_file_name_without_ext.".$file_ext";
$current_file_done_src = utf8_decode($current_file_done_src);
$current_file_done_dest_url = $_SESSION["upload_dir"].$current_file_done_url;

//CREATE DONE FOLDER
if(file_exists($current_file_done_dest_url)) 	{ /*FOLDER EXISTS*/	} else  {  if (!mkdir($current_file_done_dest_url, 0, true)) { /*FOLDER CREATION FAILED*/ } }

//echo "<br>$current_file_done_src <br>$current_file_done_dest_url";
/*
if($done_file_transferred)
{
//FILE ALREADY TRANSFERRED
}
//TRANSFER FILES IF SOURCE EXISTS
else
{
*/
if(file_exists($current_file_done_src))
{ 
if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".utf8_decode($current_file_done_src)."\" \"".$current_file_done_dest_url."\"", $execoutput_done))
{
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
	if(file_exists($current_file_done_dest_url.$current_file_name_without_ext.".$file_ext"))
		{
		
		//UPDATE JOB FILE INFORMATION
		$update_jobfile_sql = "
		UPDATE jobfile
		SET `qcend_date` = '".$current_date."',
		`jobfile_status_id` = '7'
		WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`qc_time` IS NULL)";
		CustomQuery($update_jobfile_sql);
		
		$copy_success = true;
		$done_file_transferred = true;
		array_push($list_of_files_copied, $result["jobfile_id"]);
		}
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED

}
else
{
//$copy_success = false;
}
}

//}
//TRANSFER FILES IF SOURCE EXISTS

//PATH COPY
$current_file_path_copy_src = $_SESSION["user_dir_local"].$current_file_path_copy_url.$current_file_name_without_ext.".$file_ext";
$current_file_path_copy_src = utf8_decode($current_file_path_copy_src);
$current_file_path_copy_dest_url = $_SESSION["upload_dir"].$current_file_path_copy_url;
//echo "<h4>$current_file_path_copy_src</h4>";
//echo "<h4>$current_file_path_copy_dest_url</h4>";

if(file_exists($current_file_path_copy_dest_url))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_path_copy_dest_url, 0, true))
		{
		//FAILED
		}
	}

//PATH COPY Transferred
/*
if($path_copy_file_transferred)
{
}
else
{
*/
if(file_exists($current_file_path_copy_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".$current_file_path_copy_src."\" \"".$current_file_path_copy_dest_url."\"", $execoutput_path_copy))
{
	
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
	if(file_exists($current_file_path_copy_dest_url.$current_file_name_without_ext.".$file_ext"))
		{
			
		//UPDATE JOB FILE INFORMATION
		$update_jobfile_sql = "
		UPDATE jobfile
		SET `qcend_date` = '".$current_date."',
		`jobfile_status_id` = '7'
		WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`qc_time` IS NULL)";
		CustomQuery($update_jobfile_sql);
		
		$copy_success = true;
		$path_copy_file_transferred = true;
		array_push($list_of_files_copied, $result["jobfile_id"]);
		}
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED

}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
//} // PATH COPY Transferred

/*

//ADDITIONAL FILE TRANSFERS
if($additional_files_transferred == true)
{
}
else
{				
				//ADDITIONAL FOLDERS
				$current_file_additional_src_url = str_replace($current_file_name, "additional files\\", $current_file_src);
				$current_file_additional_dest_url = str_replace($current_file_name, "additional files\\", $current_file_dest);

				$current_file_additional_src_url = $_SESSION["output_dir"].$current_file_additional_src_url;
				$current_file_additional_dest_url = $current_file_additional_dest_url;

				if(file_exists($current_file_additional_dest_url))
				{
				//FOLDER EXISTS
				}
				else
				{
					if (!mkdir($current_file_additional_dest_url, 0, true))
					{
					//FAILED
					}
				}

				//COPY ADDITIONAL FILES
				exec("C:/xxcopy/xxcopy.exe /YY /E /SC \"".$current_file_additional_src_url."\" \"".$current_file_additional_dest_url."\"", $execoutput1);
				$additional_files_transferred = true;
}
//ADDITIONAL FILE TRANSFERS

*/




//TRANSFER DONE AND PATH COPY FILES
}

$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");

if($copy_success==true)
{
$result["action_response"] = "Transferred!";
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='7' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='7'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='14' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='14'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

/*
//UPDATE TIME TAKEN
$update_jobfile_sql = "
UPDATE jobfile
SET designer_time = TIMEDIFF(end_date, start_date)
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer_time` IS NULL)";
CustomQuery($update_jobfile_sql);
*/
}
else
{
$result["action_response"] = "Transfer Failed!";
}

}	// COPY EACH FILE AND MAKE DB UPDATE	
// ENUMERATE JOBFILES  -------------------------------------------------------------------------------------------------------
$list_of_files_copied = array_unique($list_of_files_copied);
$number_of_files_transferred = COUNT($list_of_files_copied);
//UPDATE AVERAGE TIME 
foreach ($list_of_files_copied as $jobfile_id_added)
{
//UPDATE TIME TAKEN
	$update_jobfile_sql2 = "
	UPDATE jobfile
	SET qc_time = SEC_TO_TIME(TIME_TO_SEC(TIMEDIFF(qcend_date, '".$GLOBALS["jobfile_start_date_first"]."'))/".$number_of_files_transferred.")
	WHERE `jobfile_id`='".$jobfile_id_added."' AND (`qc_time` IS NULL)";
	CustomQuery($update_jobfile_sql2);	
}

//MAKE ALL THE STARTED BUT NOT TRANSFERRED FILES TO NULL START DATE
	$update_jobfile_sql2 = "
	UPDATE jobfile SET qcstart_date = '0000-00-00 00:00:00',
	qcend_date = '0000-00-00 00:00:00', 
	qc_time = NULL 
	WHERE `qc_id`='".$_SESSION["user_id"]."' 
	AND `qc_time` IS NULL
	AND `job_id` = '".$result["job_id"]."'
	";
	CustomQuery($update_jobfile_sql2);
//MAKE ALL THE STARTED BUT NOT TRANSFERRED FILES TO NULL START DATE
	
//UPDATE AVERAGE TIME 
//print_r($list_of_files_copied);
//DESIGNER LEVEL 2 BATCH START BUTTON;
	echo my_json_encode($result);
}
function buttonHandler_Back23($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_Distribute1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	
$result["my_server_share"] = $_SESSION["my_server_share"];
$i = "";
while($allrecords = $button->getNextSelectedRecord())
{
$selected_work_id = $allrecords["work_id"];
$selected_job_id = $allrecords["job_id"];
if($i == "")
{
$i = $allrecords["jobfile_id"];
}
else
{
$i = $i.",".$allrecords["jobfile_id"];
}
}

$result["work_id"] = $selected_work_id;
$result["job_id"] = $selected_job_id;
$result["file_list"] = $i;
$result["server_url"] = $_SESSION["my_server_url"];

;
	echo my_json_encode($result);
}
function buttonHandler_Start2($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
				$record = $button->getCurrentRecord();
$result["UserID"] = $_SESSION["UserID"];
$result["file_url"] = $record["file_url"];
$file_url = $result["file_url"];
$result["jobfile_id"] = $record["jobfile_id"];
$result["UserID"] = $_SESSION["UserID"];
$selected_username = $result["UserID"];
$result["user_id"] = $record["designer_id"];
$result["job_id"] = $record["job_id"];
$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$current_date = date("Y-m-d H:i:s");	//GET CURRENT DATE
$null_date = "0000-00-00 00:00";

$current_date = date("Y-m-d H:i:s");	//GET CURRENT DATE
$null_date = "0000-00-00 00:00";

				//COPY FILE TO USER DIRECTORY
				//COPY FILES

					$server_name = $_SESSION["my_server_name"];
					$work_dir = addslashes($work_id."\\");
					$job_dir = addslashes($job_id."\\");

					
					$current_file_src = $_SESSION["output_local"].$file_url;
					$current_file_dest = $_SESSION["user_dir_local"].$file_url;
		
			//FIND FILE NAME		
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					
					$current_file_ext_find = explode(".", $current_file_name);
					$current_file_ext = $current_file_ext_find[count($current_file_ext_find)-1];

					$current_file_name_without_ext = str_ireplace(".".$current_file_ext,"",$current_file_name);
					
			//DEFINE DONE SRC		
					$current_file_done_url = str_replace($current_file_name,"done\\",$file_url);
					//echo "<h2>".$current_file_done_url."</h2>";
			//DEFINE DONE DEST

			//DEFINE PATH COPY SRC
					$current_file_path_copy_url = str_replace($current_file_name,"path copy\\",$file_url);
					//echo "<h2>".$current_file_path_copy_url."</h2>";
			//DEFINE PATH COPY DEST
//DO NOT TRANSFER ORIGINAL FILES IN DONE AND PATH COPY TRANSFER					
/*
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_src."\" \"".$current_file_dest_url."\"", $execoutput))
{
$copy_success = true;
	if(file_exists($current_file_dest_url."\\done"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\Done", 0, true))
		{
		//FAILED
		}
	}
	

	if(file_exists($current_file_dest_url."\\path copy"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\path copy", 0, true))
		{
		//FAILED
		}
	}
}
//print_r($execoutput);
//echo "<br>";

if ($execoutput[3] == "The source directory must be specified.")
			{
			$error_found = true ;
			$error_found_detail = "Source File Not Found. Please Check Detail<br>File Name: $current_file_name_slashed";
			$copy_success = false;
			}
*/
//DO NOT TRANSFER ORIGINAL FILES IN DONE AND PATH COPY TRANSFER					

$check_extensions = array("jpg", "psd", "jpeg",  "tif", "png",  "eps", "tiff", "gif");
$done_file_transferred = false;
$path_copy_file_transferred = false;

foreach ($check_extensions as $file_ext)
{
//TRANSFER DONE AND PATH COPY FILES
//DONE
$current_file_done_src = $_SESSION["output_dir"].$current_file_done_url.$current_file_name_without_ext.".$file_ext";
$current_file_done_dest_url = $_SESSION["user_dir_local"].$current_file_done_url;
//echo "<h4>$current_file_done_src</h4>";
//echo "<h4>$current_file_done_dest_url</h4>";

if($done_file_transferred)
{
}
else
{
if(file_exists($current_file_done_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_done_src."\" \"".$current_file_done_dest_url."\"", $execoutput))
{
$copy_success = true;
$done_file_transferred = true;
}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
}

//PATH COPY
$current_file_path_copy_src = $_SESSION["output_dir"].$current_file_path_copy_url.$current_file_name_without_ext.".$file_ext";
$current_file_path_copy_dest_url = $_SESSION["user_dir_local"].$current_file_path_copy_url;
//echo "<h4>$current_file_path_copy_src</h4>";
//echo "<h4>$current_file_path_copy_dest_url</h4>";

//PATH COPY Transferred
if($path_copy_file_transferred)
{
}
else
{
if(file_exists($current_file_path_copy_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_path_copy_src."\" \"".$current_file_path_copy_dest_url."\"", $execoutput))
{
$copy_success = true;
$path_copy_file_transferred = true;
}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
} // PATH COPY Transferred

//TRANSFER DONE AND PATH COPY FILES			
}

$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");

if($copy_success==true)
{
$result["action_response"] = "Transferred!";
//UPDATE JOBFILE INFORMATION

//UPDATE JOB FILE INFORMATION
$update_jobfile_sql = "
UPDATE jobfile
SET `qcstart_date` = '".$current_date."',
`reject_reason` = '".$_SESSION["user_pc_name"]."',
`jobfile_status_id` = '5'
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`qc_time` IS NULL)";
CustomQuery($update_jobfile_sql);

/*
//UPDATE TIME TAKEN
$update_jobfile_sql = "
UPDATE jobfile
SET designer_time = TIMEDIFF(end_date, start_date)
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer_time` IS NULL)";
CustomQuery($update_jobfile_sql);
*/
}
else
{
$result["action_response"] = "Transfer Failed!";
}

//echo $current_file_src;
//echo $current_file_dest_url;
$current_file_src2 = $_SESSION["download_dir"].$current_file_src;
//echo "<h1>$current_file_src2";

if(!exec("C:/xxcopy/xxcopy.exe /y /SC \"".$current_file_src2."\" \"".$current_file_dest_url."\"", $execoutput))
{
$copy_success = true;

/*
//ADDITIONAL FILE TRANSFERS
if($additional_files_transferred)
{
}
else
{				
				//ADDITIONAL FOLDERS
				$current_file_additional_src_url = str_replace($current_file_name, "additional files\\", $current_file_src);
				$current_file_additional_dest_url = str_replace($current_file_name, "additional files\\", $current_file_dest);

				if(file_exists($current_file_additional_dest_url))
				{
				//FOLDER EXISTS
				}
				else
				{
					if (!mkdir($current_file_additional_dest_url, 0, true))
					{
					//FAILED
					}
				}

				//COPY ADDITIONAL FILES
				exec("C:/xxcopy/xxcopy.exe /YY /E /SC \"".$current_file_additional_src_url."\" \"".$current_file_additional_dest_url."\"", $execoutput);
				$additional_files_transferred = true;
}
//ADDITIONAL FILE TRANSFERS
*/

	/*	//REMOVED DONE FOLDER TO REMOVE CONFUSION
	if(file_exists($current_file_dest_url."\\done"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\Done", 0, true))
		{
		//FAILED
		}
	}
	*/ //REMOVED DONE FOLDER TO REMOVE CONFUSION

	if(file_exists($current_file_dest_url."\\path copy"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\path copy", 0, true))
		{
		//FAILED
		}
	}
}

if ($execoutput[3] == "The source directory must be specified.")
			{
			$error_found = true ;
			$error_found_detail = "Source File Not Found. Please Check Detail<br>File Name: $current_file_name_slashed";
			$copy_success = false;
			}

if($copy_success==true)
{
$result["action_response"] = "Transferred!";

//UPDATE JOB FILE INFORMATION
$update_jobfile_sql = "
UPDATE jobfile
SET `start2_date` = '".$current_date."', 
`reject_date` = '".$_SESSION["user_pc_name"]."',
`jobfile_status_id` = '4'
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`start2_date` = '0000-00-00 00:00:00')";
CustomQuery($update_jobfile_sql);

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='4' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='4'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='14' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='14'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='7' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='7'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
}
else
{
$result["action_response"] = "Transfer Failed!";
}

/*				
} // IF NOT FILE IS STILL IN PROGRESS
else
{
$result["action_response"] = "You have not finished last file from Job #".$data["job_id"]."! Finish that before starting another file.";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Finish2($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$record = $button->getCurrentRecord();
$result["UserID"] = $_SESSION["UserID"];
$result["file_url"] = $record["file_url"];
$file_url = $result["file_url"];
$result["jobfile_id"] = $record["jobfile_id"];
$result["UserID"] = $_SESSION["UserID"];
$selected_username = $result["UserID"];
$result["user_id"] = $record["designer_id"];
$result["job_id"] = $record["job_id"];
$result["work_id"] = $record["work_id"];

$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$current_time = date("Y-m-d H:i:s");
$mull_time = date("0000-00-00 00:00:00");
				//COPY FILE TO USER DIRECTORY
				//COPY FILES

					$server_name = $_SESSION["my_server_name"];
					$work_dir = addslashes($work_id."\\");
					$job_dir = addslashes($job_id."\\");

					
					$current_file_src = $_SESSION["user_dir_local"].$file_url;
					$current_file_dest = $_SESSION["output_dir"].$file_url;
		
			//FIND FILE NAME		
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					
					$current_file_ext_find = explode(".", $current_file_name);
					$current_file_ext = $current_file_ext_find[count($current_file_ext_find)-1];

					$current_file_name_without_ext = str_ireplace(".".$current_file_ext,"",$current_file_name);
					
			//DEFINE DONE SRC		
					$current_file_done_url = str_replace($current_file_name,"done\\",$file_url);
					//echo "<h2>".$current_file_done_url."</h2>";
			//DEFINE DONE DEST

			//DEFINE PATH COPY SRC
					$current_file_path_copy_url = str_replace($current_file_name,"path copy\\",$file_url);
					//echo "<h2>".$current_file_path_copy_url."</h2>";

				//ADDITIONAL FOLDERS
				$current_file_additional_src_url = str_replace($current_file_name, "additional files\\", $current_file_src);
				$current_file_additional_dest_url = str_replace($current_file_name, "additional files\\", $current_file_dest);

			//DEFINE PATH COPY DEST
//DO NOT TRANSFER ORIGINAL FILES IN DONE AND PATH COPY TRANSFER					
/*
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_src."\" \"".$current_file_dest_url."\"", $execoutput))
{
$copy_success = true;
	if(file_exists($current_file_dest_url."\\done"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\Done", 0, true))
		{
		//FAILED
		}
	}
	

	if(file_exists($current_file_dest_url."\\path copy"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\path copy", 0, true))
		{
		//FAILED
		}
	}
}
//print_r($execoutput);
//echo "<br>";

if ($execoutput[3] == "The source directory must be specified.")
			{
			$error_found = true ;
			$error_found_detail = "Source File Not Found. Please Check Detail<br>File Name: $current_file_name_slashed";
			$copy_success = false;
			}
*/
//DO NOT TRANSFER ORIGINAL FILES IN DONE AND PATH COPY TRANSFER					

$check_extensions = array("jpg", "psd", "jpeg",  "tif", "png",  "eps", "tiff", "gif");
$done_file_transferred = false;
$path_copy_file_transferred = false;

foreach ($check_extensions as $file_ext)
{
//TRANSFER DONE AND PATH COPY FILES
//DONE
$current_file_done_src = $_SESSION["user_dir_local"].$current_file_done_url.$current_file_name_without_ext.".$file_ext";
$current_file_done_src = utf8_decode($current_file_done_src);
$current_file_done_dest_url = $_SESSION["output_dir"].$current_file_done_url;
$current_file_done_dest = $current_file_done_dest_url.$current_file_name_without_ext.".$file_ext";
$current_file_done_dest = utf8_decode($current_file_done_dest);
//echo "<h4>$current_file_done_src</h4>";
//echo "<h4>$current_file_done_dest_url</h4>";

if($done_file_transferred)
{
}
else
{
if(file_exists($current_file_done_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_done_src."\" \"".$current_file_done_dest_url."\"", $execoutput))
{
	if(file_exists($current_file_done_dest))
	{	//DESTINATION FILE COPIED
	$copy_success = true;
	//$done_file_transferred = true;
	}
}
else
{
$copy_success = false;
}
} //FILE EXISTS, TRANSFER
}

//PATH COPY
$current_file_path_copy_src = $_SESSION["user_dir_local"].$current_file_path_copy_url.$current_file_name_without_ext.".$file_ext";
$current_file_path_copy_src = utf8_decode($current_file_path_copy_src);
$current_file_path_copy_dest_url = $_SESSION["output_dir"].$current_file_path_copy_url;
$current_file_path_copy_dest = $current_file_path_copy_dest_url.$current_file_name_without_ext.".$file_ext";
$current_file_path_copy_dest = utf8_decode($current_file_path_copy_dest);
//echo "<h4>$current_file_path_copy_src</h4>";
//echo "<h4>$current_file_path_copy_dest_url</h4>";

//PATH COPY Transferred
if($path_copy_file_transferred)
{
}
else
{
if(file_exists($current_file_path_copy_src))
{ //FILE EXISTS, TRANSFER

if(!exec("C:/xxcopy/xxcopy.exe /y /SC \"".$current_file_path_copy_src."\" \"".$current_file_path_copy_dest_url."\"", $execoutput))
{
	if(file_exists($current_file_path_copy_dest))
	{
	$copy_success = true;
	//$path_copy_file_transferred = true;
	}
}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
} // PATH COPY Transferred

//TRANSFER DONE AND PATH COPY FILES			
}

$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");

if($copy_success==true)
{

/*
//ADDITIONAL FILE TRANSFERS
if($additional_files_transferred)
{
}
else
{				
				//ADDITIONAL FOLDERS
				$current_file_additional_src_url = str_replace($current_file_name, "additional files\\", $current_file_src);
				$current_file_additional_dest_url = str_replace($current_file_name, "additional files\\", $current_file_dest);

				if(file_exists($current_file_additional_dest_url))
				{
				//FOLDER EXISTS
				}
				else
				{
					if (!mkdir($current_file_additional_dest_url, 0, true))
					{
					//FAILED
					}
				}

				//COPY ADDITIONAL FILES
				exec("C:/xxcopy/xxcopy.exe /YY /E /SC \"".$current_file_additional_src_url."\" \"".$current_file_additional_dest_url."\"", $execoutput);
				$additional_files_transferred = true;
}
//ADDITIONAL FILE TRANSFERS 

*/

$result["action_response"] = "Transferred!";
//UPDATE JOBFILE INFORMATION
/*
//UPDATE JOB FILE INFORMATION
$update_jobfile_sql = "
UPDATE jobfile
SET `start2_date` = '".$current_date."',
`jobfile_status_id` = '4'
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`start2_date` = '".$null_date."')";
CustomQuery($update_jobfile_sql);
*/

//`folder_name` = '".$_SESSION["user_pc_name"]."',
//UPDATE JOB FILE INFORMATION
$update_jobfile_sql = "
UPDATE jobfile
SET `end2_date` = '".$current_date."',
`folder_name` = '".$_SESSION["user_pc_name"]."',
`jobfile_status_id` = '14'
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer2_time` IS NULL)";
CustomQuery($update_jobfile_sql);

//UPDATE TIME TAKEN
$update_jobfile_sql = "
UPDATE jobfile
SET designer2_time = TIMEDIFF(end2_date, start2_date)
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer2_time` IS NULL)";
CustomQuery($update_jobfile_sql);

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='4' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='4'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='14' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='14'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='7' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='7'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION

}
else
{
$result["action_response"] = "Transfer Failed!";
};
	echo my_json_encode($result);
}
function buttonHandler_Action1_label4($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label4($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action3_label4($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	/*
if($params["confirmation"] == "ContinueProcess")
{ //CONTINUE NOTIFYING
*/
$result["my_server_share"] = $_SESSION["my_server_share"];
	while($record = $button->getCurrentRecord())
	{
	if ($record["jobstatus_id"] == 7)
	{
		$current_time = date("Y-m-d H:i:s");
		$uploaded_by = $_SESSION["user_id"];
		$uploaded_date = $current_time;
		$sql = "update job set `jobstatus_id`='8', `uploader_id`='".$uploaded_by."', `upload_date`='".$current_time."' where work_id=" .$record["work_id"];
		CustomQuery($sql);
	break;
	}
	if ($record["jobstatus_id"] == 8)
	{
		$current_time = date("Y-m-d H:i:s");
		$notified_by = $_SESSION["user_id"];
		$notify_date = $current_time;
		$sql = "update job set `jobstatus_id`='9', `notifer_id`='".$notified_by."', `notify_date`='".$notify_date."' where work_id=" .$record["work_id"];

			//REMOVE DIRECTORYFROM OUTPUT
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["output_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["output_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);

			//REMOVE DIRECTORYFROM DOWNLOAD
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["download_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["download_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			//exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);
			
			
//			if(file_exists($dir_to_move))
			//{
			$dir_to_move = $_SESSION["upload_dir"].$record["work_id"]."\\";
			$dir_to_move_to = $_SESSION["upload_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			//echo '<br>'.$dir_to_move.'<br>';
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_move\" \"$dir_to_move_to\"", $outputbb1);
			//print_r($outputbb1);
			//}


			//print_r($outputbb);
			//REMOVE DIRECTORYFROM OUTPUT

		CustomQuery($sql);

	break;
	}

	}

//CONTINUE NOTIFYING
/*
}
else
{
$result["confirmation"] = "Process Cancelled";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label5($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label5($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action3_label5($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	/*
if($params["confirmation"] == "ContinueProcess")
{ //CONTINUE NOTIFYING
*/
$result["my_server_share"] = $_SESSION["my_server_share"];
	while($record = $button->getCurrentRecord())
	{
	if ($record["jobstatus_id"] == 7)
	{
		$current_time = date("Y-m-d H:i:s");
		$uploaded_by = $_SESSION["user_id"];
		$uploaded_date = $current_time;
		$sql = "update job set `jobstatus_id`='8', `uploader_id`='".$uploaded_by."', `upload_date`='".$current_time."' where work_id=" .$record["work_id"];
		CustomQuery($sql);
	break;
	}
	if ($record["jobstatus_id"] == 8)
	{
		$current_time = date("Y-m-d H:i:s");
		$notified_by = $_SESSION["user_id"];
		$notify_date = $current_time;
		$sql = "update job set `jobstatus_id`='9', `notifer_id`='".$notified_by."', `notify_date`='".$notify_date."' where work_id=" .$record["work_id"];

			//REMOVE DIRECTORYFROM OUTPUT
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["output_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["output_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);

			//REMOVE DIRECTORYFROM DOWNLOAD
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["download_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["download_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			//exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);
			
			
//			if(file_exists($dir_to_move))
			//{
			$dir_to_move = $_SESSION["upload_dir"].$record["work_id"]."\\";
			$dir_to_move_to = $_SESSION["upload_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			//echo '<br>'.$dir_to_move.'<br>';
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_move\" \"$dir_to_move_to\"", $outputbb1);
			//print_r($outputbb1);
			//}


			//print_r($outputbb);
			//REMOVE DIRECTORYFROM OUTPUT

		CustomQuery($sql);

	break;
	}

	}

//CONTINUE NOTIFYING
/*
}
else
{
$result["confirmation"] = "Process Cancelled";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label6($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label6($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action3_label12($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	/*
if($params["confirmation"] == "ContinueProcess")
{ //CONTINUE NOTIFYING
*/
$result["my_server_share"] = $_SESSION["my_server_share"];
	while($record = $button->getCurrentRecord())
	{
	if ($record["jobstatus_id"] == 7)
	{
		$current_time = date("Y-m-d H:i:s");
		$uploaded_by = $_SESSION["user_id"];
		$uploaded_date = $current_time;
		$sql = "update job set `jobstatus_id`='8', `uploader_id`='".$uploaded_by."', `upload_date`='".$current_time."' where work_id=" .$record["work_id"];
		CustomQuery($sql);
	break;
	}
	if ($record["jobstatus_id"] == 8)
	{
		$current_time = date("Y-m-d H:i:s");
		$notified_by = $_SESSION["user_id"];
		$notify_date = $current_time;
		$sql = "update job set `jobstatus_id`='9', `notifer_id`='".$notified_by."', `notify_date`='".$notify_date."' where work_id=" .$record["work_id"];

			//REMOVE DIRECTORYFROM OUTPUT
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["output_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["output_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);

			//REMOVE DIRECTORYFROM DOWNLOAD
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["download_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["download_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			//exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);
			
			
//			if(file_exists($dir_to_move))
			//{
			$dir_to_move = $_SESSION["upload_dir"].$record["work_id"]."\\";
			$dir_to_move_to = $_SESSION["upload_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			//echo '<br>'.$dir_to_move.'<br>';
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_move\" \"$dir_to_move_to\"", $outputbb1);
			//print_r($outputbb1);
			//}


			//print_r($outputbb);
			//REMOVE DIRECTORYFROM OUTPUT

		CustomQuery($sql);

	break;
	}

	}

//CONTINUE NOTIFYING
/*
}
else
{
$result["confirmation"] = "Process Cancelled";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Start_Job3($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
				//DESIGNER LEVEL 2 BATCH START BUTTON

			$record = $button->getCurrentRecord();
$result["UserID"] = $_SESSION["UserID"];
$result["file_url"] = $record["file_url"];
$file_url = $result["file_url"];
$result["jobfile_id"] = $record["jobfile_id"];
$result["UserID"] = $_SESSION["UserID"];
$selected_username = $result["UserID"];
$result["user_id"] = $record["designer_id"];
$result["job_id"] = $record["job_id"];
$result["work_id"] = $record["work_id"];

$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$current_time = date("Y-m-d H:i:s");
$mull_time = date("0000-00-00 00:00:00");
				//COPY FILE TO USER DIRECTORY
				//COPY FILES

$server_name = $_SESSION["my_server_name"];
$work_dir = addslashes($work_id."\\");
$job_dir = addslashes($job_id."\\");

	//CUSTOM DATABASE CONNECTION
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
	//CUSTOM DATABASE CONNECTION
	
	//CUSTOM DATABASE QUERY
	$select_jobfile_sql = "
			Select * from jobfile
			WHERE `work_id`='".$result["work_id"]."' AND `designer2_id`='".$_SESSION["user_id"]."' AND designer2_time IS NULL
			";

	$select_jobfile_result = mysqli_query($mysqlilink, $select_jobfile_sql);
	$number_of_jobs = mysqli_num_rows($select_jobfile_result);
	//CUSTOM DATABASE QUERY
	
	//$list_jobfile_result = mysqli_fetch_array($select_jobfile_result, MYSQLI_BOTH);
	//print_r($list_jobfile_result);
	
$list_of_files_copied = array();
$done_file_transferred = false;
$path_copy_file_transferred = false;
$original_file_sucess = false;

// ENUMERATE JOBFILES  -------------------------------------------------------------------------------------------------------
	while($list_jobfile_result = mysqli_fetch_array($select_jobfile_result, MYSQLI_BOTH))
	{	// COPY EACH FILE AND MAKE DB UPDATE
	$file_url = $list_jobfile_result["file_url"];
	$result["file_url"] = $list_jobfile_result["file_url"];
	
	$jobfile_id = $list_jobfile_result["jobfile_id"];
	$result["jobfile_id"] = $list_jobfile_result["jobfile_id"];
	//echo "$jobfile_id  $file_url";
	
					$current_file_src = $_SESSION["output_local"].$file_url;
					$current_file_dest = $_SESSION["user_dir_local"].$file_url;
			//FIND FILE NAME		
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					$current_file_ext_find = explode(".", $current_file_name);
					$current_file_ext = $current_file_ext_find[count($current_file_ext_find)-1];
					$current_file_name_without_ext = str_ireplace(".".$current_file_ext,"",$current_file_name);
			//DEFINE DONE SRC		
					$current_file_done_url = str_replace($current_file_name,"done\\",$file_url);
					//echo "<h2>".$current_file_done_url."</h2>";
			//DEFINE PATH COPY SRC
					$current_file_path_copy_url = str_replace($current_file_name,"path copy\\",$file_url);
					//echo "<h2>".$current_file_path_copy_url."</h2>";
			//DEFINE PATH COPY DEST
					$check_extensions = $_SESSION["check_extensions"];

					//TRANSFER CURRENT ORIGINAL FILES
						$current_file_src2 = $_SESSION["download_dir"].$file_url;
						if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".$current_file_src2."\" \"".$current_file_dest_url."\"", $execoutput))
						{
							//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
							if(file_exists($current_file_dest))
								{
								//echo "<br> $current_file_dest";
								
								//reject_date = pc number
								$update_jobfile_sql = "
								UPDATE jobfile
								SET `start2_date` = '".$current_time."',
								`reject_date` = '".$_SESSION["user_pc_name"]."',
								`jobfile_status_id` = '4'
								WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`end2_date`='0000-00-00 00:00:00')";
								CustomQuery($update_jobfile_sql);
								
								$copy_success = true;
								$original_file_sucess = true;
								array_push($list_of_files_copied, $result["jobfile_id"]);
								}
							//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
						}
						//TRANSFER CURRENT ORIGINAL FILES

foreach ($check_extensions as $file_ext)
{
//TRANSFER DONE AND PATH COPY FILES
//DONE
$current_file_done_src = $_SESSION["output_dir"].$current_file_done_url.$current_file_name_without_ext.".$file_ext";
$current_file_done_src = utf8_decode($current_file_done_src);
$current_file_done_dest_url = $_SESSION["user_dir_local"].$current_file_done_url;

//CREATE DONE FOLDER
if(file_exists($current_file_done_dest_url)) 	{ /*FOLDER EXISTS*/	} else  {  if (!mkdir($current_file_done_dest_url, 0, true)) { /*FOLDER CREATION FAILED*/ } }

//echo "<br>$current_file_done_src <br>$current_file_done_dest_url";
/*
if($done_file_transferred)
{
//FILE ALREADY TRANSFERRED
}
//TRANSFER FILES IF SOURCE EXISTS
else
{
*/
if(file_exists($current_file_done_src))
{ 
if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".utf8_decode($current_file_done_src)."\" \"".$current_file_done_dest_url."\"", $execoutput_done))
{
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
	if(file_exists($current_file_done_dest_url.$current_file_name_without_ext.".$file_ext"))
		{
		
		//reject_date = pc number
		$update_jobfile_sql = "
		UPDATE jobfile
		SET `start2_date` = '".$current_time."',
		`reject_date` = '".$_SESSION["user_pc_name"]."',
		`jobfile_status_id` = '4'
		WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`end2_date`='0000-00-00 00:00:00')";
		CustomQuery($update_jobfile_sql);
		
		$copy_success = true;
		$done_file_transferred = true;
		array_push($list_of_files_copied, $result["jobfile_id"]);
		}
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED

}
else
{
//$copy_success = false;
}
}

//}
//TRANSFER FILES IF SOURCE EXISTS

//PATH COPY
$current_file_path_copy_src = $_SESSION["output_dir"].$current_file_path_copy_url.$current_file_name_without_ext.".$file_ext";
$current_file_path_copy_src = utf8_decode($current_file_path_copy_src);
$current_file_path_copy_dest_url = $_SESSION["user_dir_local"].$current_file_path_copy_url;
//echo "<h4>$current_file_path_copy_src</h4>";
//echo "<h4>$current_file_path_copy_dest_url</h4>";

if(file_exists($current_file_path_copy_dest_url))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_path_copy_dest_url, 0, true))
		{
		//FAILED
		}
	}

//PATH COPY Transferred
/*
if($path_copy_file_transferred)
{
}
else
{
*/
if(file_exists($current_file_path_copy_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".$current_file_path_copy_src."\" \"".$current_file_path_copy_dest_url."\"", $execoutput_path_copy))
{
	
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
	if(file_exists($current_file_path_copy_dest_url.$current_file_name_without_ext.".$file_ext"))
		{
			
		//reject_date = pc number
		$update_jobfile_sql = "
		UPDATE jobfile
		SET `start2_date` = '".$current_time."',
		`reject_date` = '".$_SESSION["user_pc_name"]."',
		`jobfile_status_id` = '4'
		WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`end2_date`='0000-00-00 00:00:00')";
		CustomQuery($update_jobfile_sql);
		
		$copy_success = true;
		$path_copy_file_transferred = true;
		array_push($list_of_files_copied, $result["jobfile_id"]);
		}
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED

}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
//} // PATH COPY Transferred

/*

//ADDITIONAL FILE TRANSFERS
if($additional_files_transferred == true)
{
}
else
{				
				//ADDITIONAL FOLDERS
				$current_file_additional_src_url = str_replace($current_file_name, "additional files\\", $current_file_src);
				$current_file_additional_dest_url = str_replace($current_file_name, "additional files\\", $current_file_dest);

				$current_file_additional_src_url = $_SESSION["output_dir"].$current_file_additional_src_url;
				$current_file_additional_dest_url = $current_file_additional_dest_url;

				if(file_exists($current_file_additional_dest_url))
				{
				//FOLDER EXISTS
				}
				else
				{
					if (!mkdir($current_file_additional_dest_url, 0, true))
					{
					//FAILED
					}
				}

				//COPY ADDITIONAL FILES
				exec("C:/xxcopy/xxcopy.exe /YY /E /SC \"".$current_file_additional_src_url."\" \"".$current_file_additional_dest_url."\"", $execoutput1);
				$additional_files_transferred = true;
}
//ADDITIONAL FILE TRANSFERS

*/




//TRANSFER DONE AND PATH COPY FILES
}

$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");

if($copy_success==true)
{
$result["action_response"] = "Transferred!";
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='4' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='4'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='14' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='14'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='7' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='7'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

/*
//UPDATE TIME TAKEN
$update_jobfile_sql = "
UPDATE jobfile
SET designer_time = TIMEDIFF(end_date, start_date)
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer_time` IS NULL)";
CustomQuery($update_jobfile_sql);
*/
}
else
{
$result["action_response"] = "Transfer Failed!";
}


}	// COPY EACH FILE AND MAKE DB UPDATE	
// ENUMERATE JOBFILES  -------------------------------------------------------------------------------------------------------



//print_r($list_of_files_copied);
//DESIGNER LEVEL 2 BATCH START BUTTON;;;
;
	echo my_json_encode($result);
}
function buttonHandler_Finish_Job1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
				//DESIGNER LEVEL 2 BATCH FINISH BUTTON

			$record = $button->getCurrentRecord();
$result["UserID"] = $_SESSION["UserID"];
$result["file_url"] = $record["file_url"];
$file_url = $result["file_url"];
$result["jobfile_id"] = $record["jobfile_id"];
$result["UserID"] = $_SESSION["UserID"];
$selected_username = $result["UserID"];
$result["user_id"] = $record["designer_id"];
$result["job_id"] = $record["job_id"];
$result["work_id"] = $record["work_id"];

$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");
				//COPY FILE TO USER DIRECTORY
				//COPY FILES

$server_name = $_SESSION["my_server_name"];
$work_dir = addslashes($work_id."\\");
$job_dir = addslashes($job_id."\\");

	//CUSTOM DATABASE CONNECTION
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
	//CUSTOM DATABASE CONNECTION
	
	//CUSTOM DATABASE QUERY
	$select_jobfile_sql = "
			Select * from jobfile
			WHERE `work_id`='".$result["work_id"]."' AND `designer2_id`='".$_SESSION["user_id"]."' AND designer2_time IS NULL
			";

	$select_jobfile_result = mysqli_query($mysqlilink, $select_jobfile_sql);
	$number_of_jobs = mysqli_num_rows($select_jobfile_result);
	//CUSTOM DATABASE QUERY
	
	//$list_jobfile_result = mysqli_fetch_array($select_jobfile_result, MYSQLI_BOTH);
	//print_r($list_jobfile_result);
	
$list_of_files_copied = array();
$done_file_transferred = false;
$path_copy_file_transferred = false;
$original_file_sucess = false;

// ENUMERATE JOBFILES  -------------------------------------------------------------------------------------------------------
	while($list_jobfile_result = mysqli_fetch_array($select_jobfile_result, MYSQLI_BOTH))
	{	// COPY EACH FILE AND MAKE DB UPDATE
	$file_url = $list_jobfile_result["file_url"];
	$result["file_url"] = $list_jobfile_result["file_url"];
	
	$jobfile_id = $list_jobfile_result["jobfile_id"];
	$result["jobfile_id"] = $list_jobfile_result["jobfile_id"];
	//echo "$jobfile_id  $file_url";

		$GLOBALS["jobfile_start_date_first"] = $list_jobfile_result["start2_date"];
	
					$current_file_src = $_SESSION["user_dir_local"].$file_url;
					$current_file_dest = $_SESSION["output_dir"].$file_url;
			//FIND FILE NAME		
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					$current_file_ext_find = explode(".", $current_file_name);
					$current_file_ext = $current_file_ext_find[count($current_file_ext_find)-1];
					$current_file_name_without_ext = str_ireplace(".".$current_file_ext,"",$current_file_name);
			//DEFINE DONE SRC		
					$current_file_done_url = str_replace($current_file_name,"done\\",$file_url);
					//echo "<h2>".$current_file_done_url."</h2>";
			//DEFINE PATH COPY SRC
					$current_file_path_copy_url = str_replace($current_file_name,"path copy\\",$file_url);
					//echo "<h2>".$current_file_path_copy_url."</h2>";
			//DEFINE PATH COPY DEST
					$check_extensions = $_SESSION["check_extensions"];
		/*
					//TRANSFER CURRENT ORIGINAL FILES
						$current_file_src2 = $_SESSION["download_dir"].$file_url;
						if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".$current_file_src2."\" \"".$current_file_dest_url."\"", $execoutput))
						{
							//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
							if(file_exists($current_file_dest))
								{
								//echo "<br> $current_file_dest";
								
								//UPDATE JOB FILE INFORMATION
								$update_jobfile_sql = "
								UPDATE jobfile
								SET `end2_date` = '".$current_date."',
								`jobfile_status_id` = '14'
								WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer2_time` IS NULL)";
								CustomQuery($update_jobfile_sql);
								
								$copy_success = true;
								$original_file_sucess = true;
								array_push($list_of_files_copied, $result["jobfile_id"]);
								}
							//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
						}
						//TRANSFER CURRENT ORIGINAL FILES

			*/

foreach ($check_extensions as $file_ext)
{
//TRANSFER DONE AND PATH COPY FILES
//DONE
$current_file_done_src = $_SESSION["user_dir_local"].$current_file_done_url.$current_file_name_without_ext.".$file_ext";
$current_file_done_src = utf8_decode($current_file_done_src);
$current_file_done_dest_url = $_SESSION["output_dir"].$current_file_done_url;

//CREATE DONE FOLDER
if(file_exists($current_file_done_dest_url)) 	{ /*FOLDER EXISTS*/	} else  {  if (!mkdir($current_file_done_dest_url, 0, true)) { /*FOLDER CREATION FAILED*/ } }

//echo "<br>$current_file_done_src <br>$current_file_done_dest_url";
/*
if($done_file_transferred)
{
//FILE ALREADY TRANSFERRED
}
//TRANSFER FILES IF SOURCE EXISTS
else
{
*/
if(file_exists($current_file_done_src))
{ 
if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".utf8_decode($current_file_done_src)."\" \"".$current_file_done_dest_url."\"", $execoutput_done))
{
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
	if(file_exists($current_file_done_dest_url.$current_file_name_without_ext.".$file_ext"))
		{
		
		//UPDATE JOB FILE INFORMATION
		$update_jobfile_sql = "
		UPDATE jobfile
		SET `end2_date` = '".$current_date."',
		`jobfile_status_id` = '14'
		WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer2_time` IS NULL)";
		CustomQuery($update_jobfile_sql);
		
		$copy_success = true;
		$done_file_transferred = true;
		array_push($list_of_files_copied, $result["jobfile_id"]);
		}
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED

}
else
{
//$copy_success = false;
}
}

//}
//TRANSFER FILES IF SOURCE EXISTS

//PATH COPY
$current_file_path_copy_src = $_SESSION["user_dir_local"].$current_file_path_copy_url.$current_file_name_without_ext.".$file_ext";
$current_file_path_copy_src = utf8_decode($current_file_path_copy_src);
$current_file_path_copy_dest_url = $_SESSION["output_dir"].$current_file_path_copy_url;
//echo "<h4>$current_file_path_copy_src</h4>";
//echo "<h4>$current_file_path_copy_dest_url</h4>";

if(file_exists($current_file_path_copy_dest_url))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_path_copy_dest_url, 0, true))
		{
		//FAILED
		}
	}

//PATH COPY Transferred
/*
if($path_copy_file_transferred)
{
}
else
{
*/
if(file_exists($current_file_path_copy_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".$current_file_path_copy_src."\" \"".$current_file_path_copy_dest_url."\"", $execoutput_path_copy))
{
	
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
	if(file_exists($current_file_path_copy_dest_url.$current_file_name_without_ext.".$file_ext"))
		{
			
		//UPDATE JOB FILE INFORMATION
		$update_jobfile_sql = "
		UPDATE jobfile
		SET `end2_date` = '".$current_date."',
		`jobfile_status_id` = '14'
		WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer2_time` IS NULL)";
		CustomQuery($update_jobfile_sql);
		
		$copy_success = true;
		$path_copy_file_transferred = true;
		array_push($list_of_files_copied, $result["jobfile_id"]);
		}
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED

}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
//} // PATH COPY Transferred

/*

//ADDITIONAL FILE TRANSFERS
if($additional_files_transferred == true)
{
}
else
{				
				//ADDITIONAL FOLDERS
				$current_file_additional_src_url = str_replace($current_file_name, "additional files\\", $current_file_src);
				$current_file_additional_dest_url = str_replace($current_file_name, "additional files\\", $current_file_dest);

				$current_file_additional_src_url = $_SESSION["output_dir"].$current_file_additional_src_url;
				$current_file_additional_dest_url = $current_file_additional_dest_url;

				if(file_exists($current_file_additional_dest_url))
				{
				//FOLDER EXISTS
				}
				else
				{
					if (!mkdir($current_file_additional_dest_url, 0, true))
					{
					//FAILED
					}
				}

				//COPY ADDITIONAL FILES
				exec("C:/xxcopy/xxcopy.exe /YY /E /SC \"".$current_file_additional_src_url."\" \"".$current_file_additional_dest_url."\"", $execoutput1);
				$additional_files_transferred = true;
}
//ADDITIONAL FILE TRANSFERS

*/




//TRANSFER DONE AND PATH COPY FILES
}

$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");

if($copy_success==true)
{
$result["action_response"] = "Transferred!";
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='4' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='4'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='14' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='14'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='7' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='7'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

/*
//UPDATE TIME TAKEN
$update_jobfile_sql = "
UPDATE jobfile
SET designer_time = TIMEDIFF(end_date, start_date)
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer_time` IS NULL)";
CustomQuery($update_jobfile_sql);
*/
}
else
{
$result["action_response"] = "Transfer Failed!";
}

}	// COPY EACH FILE AND MAKE DB UPDATE	
// ENUMERATE JOBFILES  -------------------------------------------------------------------------------------------------------
$list_of_files_copied = array_unique($list_of_files_copied);
$number_of_files_transferred = COUNT($list_of_files_copied);
//UPDATE AVERAGE TIME 
foreach ($list_of_files_copied as $jobfile_id_added)
{
//UPDATE TIME TAKEN
	$update_jobfile_sql2 = "
	UPDATE jobfile
	SET designer2_time = SEC_TO_TIME(TIME_TO_SEC(TIMEDIFF(end2_date, '".$GLOBALS["jobfile_start_date_first"]."'))/".$number_of_files_transferred.")
	WHERE `jobfile_id`='".$jobfile_id_added."' AND (`designer2_time` IS NULL)";
	CustomQuery($update_jobfile_sql2);	
}

//MAKE ALL THE STARTED BUT NOT TRANSFERRED FILES TO NULL START DATE
	$update_jobfile_sql2 = "
	UPDATE jobfile SET start2_date = '0000-00-00 00:00:00',
	end2_date = '0000-00-00 00:00:00', 
	designer2_time = NULL 
	WHERE `designer2_id`='".$_SESSION["user_id"]."' 
	AND `designer2_time` IS NULL
	AND `job_id` = '".$result["job_id"]."'
	";
	CustomQuery($update_jobfile_sql2);
//MAKE ALL THE STARTED BUT NOT TRANSFERRED FILES TO NULL START DATE
	
//UPDATE AVERAGE TIME 
//print_r($list_of_files_copied);
//DESIGNER LEVEL 2 BATCH START BUTTON;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label7($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label7($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action3_label6($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	/*
if($params["confirmation"] == "ContinueProcess")
{ //CONTINUE NOTIFYING
*/
$result["my_server_share"] = $_SESSION["my_server_share"];
	while($record = $button->getCurrentRecord())
	{
	if ($record["jobstatus_id"] == 7)
	{
		$current_time = date("Y-m-d H:i:s");
		$uploaded_by = $_SESSION["user_id"];
		$uploaded_date = $current_time;
		$sql = "update job set `jobstatus_id`='8', `uploader_id`='".$uploaded_by."', `upload_date`='".$current_time."' where work_id=" .$record["work_id"];
		CustomQuery($sql);
	break;
	}
	if ($record["jobstatus_id"] == 8)
	{
		$current_time = date("Y-m-d H:i:s");
		$notified_by = $_SESSION["user_id"];
		$notify_date = $current_time;
		$sql = "update job set `jobstatus_id`='9', `notifer_id`='".$notified_by."', `notify_date`='".$notify_date."' where work_id=" .$record["work_id"];

			//REMOVE DIRECTORYFROM OUTPUT
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["output_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["output_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);

			//REMOVE DIRECTORYFROM DOWNLOAD
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["download_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["download_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			//exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);
			
			
//			if(file_exists($dir_to_move))
			//{
			$dir_to_move = $_SESSION["upload_dir"].$record["work_id"]."\\";
			$dir_to_move_to = $_SESSION["upload_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			//echo '<br>'.$dir_to_move.'<br>';
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_move\" \"$dir_to_move_to\"", $outputbb1);
			//print_r($outputbb1);
			//}


			//print_r($outputbb);
			//REMOVE DIRECTORYFROM OUTPUT

		CustomQuery($sql);

	break;
	}

	}

//CONTINUE NOTIFYING
/*
}
else
{
$result["confirmation"] = "Process Cancelled";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label8($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label8($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action3_label8($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	/*
if($params["confirmation"] == "ContinueProcess")
{ //CONTINUE NOTIFYING
*/
$result["my_server_share"] = $_SESSION["my_server_share"];
	while($record = $button->getCurrentRecord())
	{
	if ($record["jobstatus_id"] == 7)
	{
		$current_time = date("Y-m-d H:i:s");
		$uploaded_by = $_SESSION["user_id"];
		$uploaded_date = $current_time;
		$sql = "update job set `jobstatus_id`='8', `uploader_id`='".$uploaded_by."', `upload_date`='".$current_time."' where work_id=" .$record["work_id"];
		CustomQuery($sql);
	break;
	}
	if ($record["jobstatus_id"] == 8)
	{
		$current_time = date("Y-m-d H:i:s");
		$notified_by = $_SESSION["user_id"];
		$notify_date = $current_time;
		$sql = "update job set `jobstatus_id`='9', `notifer_id`='".$notified_by."', `notify_date`='".$notify_date."' where work_id=" .$record["work_id"];

			//REMOVE DIRECTORYFROM OUTPUT
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["output_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["output_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);

			//REMOVE DIRECTORYFROM DOWNLOAD
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["download_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["download_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			//exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);
			
			
//			if(file_exists($dir_to_move))
			//{
			$dir_to_move = $_SESSION["upload_dir"].$record["work_id"]."\\";
			$dir_to_move_to = $_SESSION["upload_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			//echo '<br>'.$dir_to_move.'<br>';
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_move\" \"$dir_to_move_to\"", $outputbb1);
			//print_r($outputbb1);
			//}


			//print_r($outputbb);
			//REMOVE DIRECTORYFROM OUTPUT

		CustomQuery($sql);

	break;
	}

	}

//CONTINUE NOTIFYING
/*
}
else
{
$result["confirmation"] = "Process Cancelled";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label9($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label9($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action3_label7($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	/*
if($params["confirmation"] == "ContinueProcess")
{ //CONTINUE NOTIFYING
*/
$result["my_server_share"] = $_SESSION["my_server_share"];
	while($record = $button->getCurrentRecord())
	{
	if ($record["jobstatus_id"] == 7)
	{
		$current_time = date("Y-m-d H:i:s");
		$uploaded_by = $_SESSION["user_id"];
		$uploaded_date = $current_time;
		$sql = "update job set `jobstatus_id`='8', `uploader_id`='".$uploaded_by."', `upload_date`='".$current_time."' where work_id=" .$record["work_id"];
		CustomQuery($sql);
	break;
	}
	if ($record["jobstatus_id"] == 8)
	{
		$current_time = date("Y-m-d H:i:s");
		$notified_by = $_SESSION["user_id"];
		$notify_date = $current_time;
		$sql = "update job set `jobstatus_id`='9', `notifer_id`='".$notified_by."', `notify_date`='".$notify_date."' where work_id=" .$record["work_id"];

			//REMOVE DIRECTORYFROM OUTPUT
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["output_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["output_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);

			//REMOVE DIRECTORYFROM DOWNLOAD
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["download_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["download_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			//exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);
			
			
//			if(file_exists($dir_to_move))
			//{
			$dir_to_move = $_SESSION["upload_dir"].$record["work_id"]."\\";
			$dir_to_move_to = $_SESSION["upload_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			//echo '<br>'.$dir_to_move.'<br>';
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_move\" \"$dir_to_move_to\"", $outputbb1);
			//print_r($outputbb1);
			//}


			//print_r($outputbb);
			//REMOVE DIRECTORYFROM OUTPUT

		CustomQuery($sql);

	break;
	}

	}

//CONTINUE NOTIFYING
/*
}
else
{
$result["confirmation"] = "Process Cancelled";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label71($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label71($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action3_label61($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	/*
if($params["confirmation"] == "ContinueProcess")
{ //CONTINUE NOTIFYING
*/
$result["my_server_share"] = $_SESSION["my_server_share"];
	while($record = $button->getCurrentRecord())
	{
	if ($record["jobstatus_id"] == 7)
	{
		$current_time = date("Y-m-d H:i:s");
		$uploaded_by = $_SESSION["user_id"];
		$uploaded_date = $current_time;
		$sql = "update job set `jobstatus_id`='8', `uploader_id`='".$uploaded_by."', `upload_date`='".$current_time."' where work_id=" .$record["work_id"];
		CustomQuery($sql);
	break;
	}
	if ($record["jobstatus_id"] == 8)
	{
		$current_time = date("Y-m-d H:i:s");
		$notified_by = $_SESSION["user_id"];
		$notify_date = $current_time;
		$sql = "update job set `jobstatus_id`='9', `notifer_id`='".$notified_by."', `notify_date`='".$notify_date."' where work_id=" .$record["work_id"];

			//REMOVE DIRECTORYFROM OUTPUT
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["output_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["output_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);

			//REMOVE DIRECTORYFROM DOWNLOAD
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["download_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["download_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			//exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);
			
			
//			if(file_exists($dir_to_move))
			//{
			$dir_to_move = $_SESSION["upload_dir"].$record["work_id"]."\\";
			$dir_to_move_to = $_SESSION["upload_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			//echo '<br>'.$dir_to_move.'<br>';
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_move\" \"$dir_to_move_to\"", $outputbb1);
			//print_r($outputbb1);
			//}


			//print_r($outputbb);
			//REMOVE DIRECTORYFROM OUTPUT

		CustomQuery($sql);

	break;
	}

	}

//CONTINUE NOTIFYING
/*
}
else
{
$result["confirmation"] = "Process Cancelled";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label81($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label81($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action3_label81($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	/*
if($params["confirmation"] == "ContinueProcess")
{ //CONTINUE NOTIFYING
*/
$result["my_server_share"] = $_SESSION["my_server_share"];
	while($record = $button->getCurrentRecord())
	{
	if ($record["jobstatus_id"] == 7)
	{
		$current_time = date("Y-m-d H:i:s");
		$uploaded_by = $_SESSION["user_id"];
		$uploaded_date = $current_time;
		$sql = "update job set `jobstatus_id`='8', `uploader_id`='".$uploaded_by."', `upload_date`='".$current_time."' where work_id=" .$record["work_id"];
		CustomQuery($sql);
	break;
	}
	if ($record["jobstatus_id"] == 8)
	{
		$current_time = date("Y-m-d H:i:s");
		$notified_by = $_SESSION["user_id"];
		$notify_date = $current_time;
		$sql = "update job set `jobstatus_id`='9', `notifer_id`='".$notified_by."', `notify_date`='".$notify_date."' where work_id=" .$record["work_id"];

			//REMOVE DIRECTORYFROM OUTPUT
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["output_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["output_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);

			//REMOVE DIRECTORYFROM DOWNLOAD
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["download_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["download_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			//exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);
			
			
//			if(file_exists($dir_to_move))
			//{
			$dir_to_move = $_SESSION["upload_dir"].$record["work_id"]."\\";
			$dir_to_move_to = $_SESSION["upload_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			//echo '<br>'.$dir_to_move.'<br>';
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_move\" \"$dir_to_move_to\"", $outputbb1);
			//print_r($outputbb1);
			//}


			//print_r($outputbb);
			//REMOVE DIRECTORYFROM OUTPUT

		CustomQuery($sql);

	break;
	}

	}

//CONTINUE NOTIFYING
/*
}
else
{
$result["confirmation"] = "Process Cancelled";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label61($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label61($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action3_label121($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	/*
if($params["confirmation"] == "ContinueProcess")
{ //CONTINUE NOTIFYING
*/
$result["my_server_share"] = $_SESSION["my_server_share"];
	while($record = $button->getCurrentRecord())
	{
	if ($record["jobstatus_id"] == 7)
	{
		$current_time = date("Y-m-d H:i:s");
		$uploaded_by = $_SESSION["user_id"];
		$uploaded_date = $current_time;
		$sql = "update job set `jobstatus_id`='8', `uploader_id`='".$uploaded_by."', `upload_date`='".$current_time."' where work_id=" .$record["work_id"];
		CustomQuery($sql);
	break;
	}
	if ($record["jobstatus_id"] == 8)
	{
		$current_time = date("Y-m-d H:i:s");
		$notified_by = $_SESSION["user_id"];
		$notify_date = $current_time;
		$sql = "update job set `jobstatus_id`='9', `notifer_id`='".$notified_by."', `notify_date`='".$notify_date."' where work_id=" .$record["work_id"];

			//REMOVE DIRECTORYFROM OUTPUT
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["output_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["output_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);

			//REMOVE DIRECTORYFROM DOWNLOAD
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["download_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["download_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			//exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);
			
			
//			if(file_exists($dir_to_move))
			//{
			$dir_to_move = $_SESSION["upload_dir"].$record["work_id"]."\\";
			$dir_to_move_to = $_SESSION["upload_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			//echo '<br>'.$dir_to_move.'<br>';
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_move\" \"$dir_to_move_to\"", $outputbb1);
			//print_r($outputbb1);
			//}


			//print_r($outputbb);
			//REMOVE DIRECTORYFROM OUTPUT

		CustomQuery($sql);

	break;
	}

	}

//CONTINUE NOTIFYING
/*
}
else
{
$result["confirmation"] = "Process Cancelled";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label51($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label51($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action3_label51($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	/*
if($params["confirmation"] == "ContinueProcess")
{ //CONTINUE NOTIFYING
*/
$result["my_server_share"] = $_SESSION["my_server_share"];
	while($record = $button->getCurrentRecord())
	{
	if ($record["jobstatus_id"] == 7)
	{
		$current_time = date("Y-m-d H:i:s");
		$uploaded_by = $_SESSION["user_id"];
		$uploaded_date = $current_time;
		$sql = "update job set `jobstatus_id`='8', `uploader_id`='".$uploaded_by."', `upload_date`='".$current_time."' where work_id=" .$record["work_id"];
		CustomQuery($sql);
	break;
	}
	if ($record["jobstatus_id"] == 8)
	{
		$current_time = date("Y-m-d H:i:s");
		$notified_by = $_SESSION["user_id"];
		$notify_date = $current_time;
		$sql = "update job set `jobstatus_id`='9', `notifer_id`='".$notified_by."', `notify_date`='".$notify_date."' where work_id=" .$record["work_id"];

			//REMOVE DIRECTORYFROM OUTPUT
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["output_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["output_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);

			//REMOVE DIRECTORYFROM DOWNLOAD
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["download_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["download_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			//exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);
			
			
//			if(file_exists($dir_to_move))
			//{
			$dir_to_move = $_SESSION["upload_dir"].$record["work_id"]."\\";
			$dir_to_move_to = $_SESSION["upload_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			//echo '<br>'.$dir_to_move.'<br>';
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_move\" \"$dir_to_move_to\"", $outputbb1);
			//print_r($outputbb1);
			//}


			//print_r($outputbb);
			//REMOVE DIRECTORYFROM OUTPUT

		CustomQuery($sql);

	break;
	}

	}

//CONTINUE NOTIFYING
/*
}
else
{
$result["confirmation"] = "Process Cancelled";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label42($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label42($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action3_label42($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	/*
if($params["confirmation"] == "ContinueProcess")
{ //CONTINUE NOTIFYING
*/
$result["my_server_share"] = $_SESSION["my_server_share"];
	while($record = $button->getCurrentRecord())
	{
	if ($record["jobstatus_id"] == 7)
	{
		$current_time = date("Y-m-d H:i:s");
		$uploaded_by = $_SESSION["user_id"];
		$uploaded_date = $current_time;
		$sql = "update job set `jobstatus_id`='8', `uploader_id`='".$uploaded_by."', `upload_date`='".$current_time."' where work_id=" .$record["work_id"];
		CustomQuery($sql);
	break;
	}
	if ($record["jobstatus_id"] == 8)
	{
		$current_time = date("Y-m-d H:i:s");
		$notified_by = $_SESSION["user_id"];
		$notify_date = $current_time;
		$sql = "update job set `jobstatus_id`='9', `notifer_id`='".$notified_by."', `notify_date`='".$notify_date."' where work_id=" .$record["work_id"];

			//REMOVE DIRECTORYFROM OUTPUT
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["output_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["output_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);

			//REMOVE DIRECTORYFROM DOWNLOAD
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["download_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["download_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			//exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);
			
			
//			if(file_exists($dir_to_move))
			//{
			$dir_to_move = $_SESSION["upload_dir"].$record["work_id"]."\\";
			$dir_to_move_to = $_SESSION["upload_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			//echo '<br>'.$dir_to_move.'<br>';
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_move\" \"$dir_to_move_to\"", $outputbb1);
			//print_r($outputbb1);
			//}


			//print_r($outputbb);
			//REMOVE DIRECTORYFROM OUTPUT

		CustomQuery($sql);

	break;
	}

	}

//CONTINUE NOTIFYING
/*
}
else
{
$result["confirmation"] = "Process Cancelled";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Empty_The_Designers_Report($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.

global $dal;

$sql = "TRUNCATE `visionwebapp`.`designer_report`";

CustomQuery($sql);

$result["txt"] = "Records were deleted.";;
	echo my_json_encode($result);
}
function buttonHandler_Update_The_Designers_Report($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
global $dal;
$result["txt"] = $params["txt"]." world!";
$sql = "
INSERT INTO designer_report (
	work_date,
	designer_name,
    pdf_name,
    estimated_time,
    designer_time,
    efficiency,
    total_images_counted
)

SELECT
SUBSTRING(start_date, 1, 10) as start_date_only,
user.username as designer_name,
pdf.pdf_name,
IFNULL(SUM(TIME_TO_SEC(pdf.pdf_estimated_average)),0) as total_estimated_time,
IFNULL(SUM(TIME_TO_SEC(designer_time)), 0 ) as total_designer_time,
IFNULL((SUM(TIME_TO_SEC(pdf.pdf_estimated_average)) * 100) / SUM(
IF(TIME_TO_SEC(jobfile.designer_time) > '60', TIME_TO_SEC(jobfile.designer_time), TIME_TO_SEC(pdf.pdf_estimated_average))
)    , 0) as efficiency,
COUNT(*)
	
FROM jobfile
LEFT JOIN user ON user.user_id = jobfile.designer_id
LEFT JOIN pdf ON pdf.pdf_id = jobfile.project_id
WHERE designer_id IS NOT NULL AND (end_date > '0000-00-00 00:00:00') AND ((jobfile.filename not like '%retouch%') AND (jobfile.filename not like '%detail_2%'))
GROUP BY designer_name, pdf_name, start_date_only
ORDER BY designer_id, start_date_only";
CustomQuery($sql);

$result["txt"] = "Designers Reports were updated.";;
	echo my_json_encode($result);
}
function buttonHandler_Delete_The_Jobs($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	global $dal;

$sql = "TRUNCATE `visionwebapp`.`designer_report`";

CustomQuery($sql);

$result["txt"] = "Records were deleted.";;
	echo my_json_encode($result);
}
function buttonHandler_Update_The_Designers_Report1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
$sql = "
INSERT INTO designer_report (
	work_date,
	designer_name,
    pdf_name,
    estimated_time,
    designer_time,
    efficiency,
    total_images_counted
)

SELECT
SUBSTRING(start2_date, 1, 10) as start_date_only,
user.username as designer_name,
pdf.pdf_name,
IFNULL(SUM(TIME_TO_SEC(pdf.pdf_estimated_average)),0) as total_estimated_time,
IFNULL(SUM(TIME_TO_SEC(designer2_time)), 0 ) as total_designer_time,
IFNULL((SUM(TIME_TO_SEC(pdf.pdf_estimated_average)) * 100) / SUM(  
IF(TIME_TO_SEC(jobfile.designer2_time) > '60', TIME_TO_SEC(jobfile.designer2_time), TIME_TO_SEC(pdf.pdf_estimated_average))
  )    , 0) as efficiency,

COUNT(*)

FROM jobfile
LEFT JOIN user ON user.user_id = jobfile.designer2_id
LEFT JOIN pdf ON pdf.pdf_id = jobfile.project_id
WHERE designer2_id IS NOT NULL AND end2_date > '0000-00-00 00:00:00' AND ((jobfile.filename not like '%retouch%') AND (jobfile.filename not like '%detail_2%'))
GROUP BY designer_name, pdf_name, start_date_only
ORDER BY designer2_id, start_date_only
";
CustomQuery($sql);
$result["txt"] = "Designers 2 Reports were updated.";
;
	echo my_json_encode($result);
}
function buttonHandler_QC_Distribute_Files11($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$server_name = $_SESSION["my_server_name"];
$distribution_success = false;

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

//$params["file_list"];
$result["total_files"] = COUNT($params["file_list"]);
$result["designer_id"] = $params["designer_id"];
$result["designer_name"] = $params["designer_name"];
$result["work_id"] = $params["work_id"];
$result["job_id"] = $params["job_id"];

$work_id = $result["work_id"];
$result["job_id"];

$jobfile_status_id = 17;
$selected_user_id = $result["designer_id"];
$selected_username = $result["designer_name"];
$current_user_id = $_SESSION["user_id"];
$current_date_refreshed = date("Y-m-d H:i:s");	//GET CURRENT DATE
$current_file_id = "";

for($j=0; $j<$result["total_files"]; $j++)
{

				$current_file = $params["file_list"][$j];
/*
				//GET FILE URL
						$selected_jobfile_sql = "
						SELECT file_url, client_id FROM jobfile WHERE `jobfile_id`='$current_file'
						";
						
						$selected_jobfile_result = mysqli_query($mysqlilink, $selected_jobfile_sql);
						
							while($selected_jobfile_detail = mysqli_fetch_array($selected_jobfile_result, MYSQLI_BOTH))
								{
								$file_url = addslashes($selected_jobfile_detail['file_url']);
								$client_id = $selected_jobfile_detail['client_id'];
								}				

				//GET FILE URL


				//COPY FILE TO USER DIRECTORY
				//COPY FILES

					$output = addslashes("users\\".$selected_username."\\");
					$client_dir = addslashes("clients\\".$client_id."\\");
					$work_dir = addslashes($work_id."\\");
					$job_dir = addslashes($job_id."\\");


					$exclude_from_current_file = addslashes($server_name).$client_dir.addslashes("downloads\\");
					$include_to_current_file = addslashes($server_name).$output;
					$current_file_dest = str_replace($exclude_from_current_file, $include_to_current_file, $file_url);
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					$current_file_done_src = str_replace($current_file_name, "done\\".$current_file_name, $current_file_dest);
					$current_file_path_copy_src = str_replace($current_file_name, "path copy\\".$current_file_name, $current_file_dest);
					

				//CREATE DONE AND PATH COPY FOLDER STRUCTURE FOR FILES
				$current_file_withslash = $file_url;
				$current_file_done_dest = str_replace($exclude_from_current_file, $include_to_current_file, $current_file_done_src);
				$current_file_path_copy_dest = str_replace($exclude_from_current_file, $include_to_current_file, $current_file_path_copy_src);
				$current_file_done_dest_url = str_replace($current_file_name, "", $current_file_done_dest);
				$current_file_path_copy_dest_url = str_replace($current_file_name, "", $current_file_path_copy_dest);

if(!exec("xxcopy /y /PB \"".stripslashes($file_url)."\" \"".stripslashes($current_file_dest_url)."\"", $execoutput))
{
}

if ($execoutput[3] == "The source directory must be specified.")
			{
			$error_found = true ;
			$error_found_detail = "Source File Not Found. Please Check Detail<br>File Name: $current_file_name_slashed";
			$copy_success = false;
			}

*/

/*				`qcstart_date` = '0000-00-00 00:00:00',
				`qcend_date` = '0000-00-00 00:00:00',
				`qc_time` = NULL,
*/
			$update_jobfile_sql = "

				UPDATE `jobfile`
				SET 
				`jobfile_status_id` =  $jobfile_status_id,
				`qc_id` = '$selected_user_id',
				`distributor_id` = '$current_user_id',
				`distribute_date`= '$current_date_refreshed'

				WHERE `jobfile_id` = '$current_file'
				";

				if(mysqli_query($mysqlilink, $update_jobfile_sql))
							{
							//SUCCESSFULLY UPDATED DATABSE
							//NOW PROCEED TO CLEAR THE SESSION
							$distribution_success = true;
							}
						else
							{	//WARN THE USER THAT FILE STATUS COULD NOT BE UPDATED
							//echo "<br>Could not Update JOB Information; please contact Administrator or Try again Later<br>";
							$distribution_success = false;
							}	//WARN THE USER THAT FILE STATUS COULD NOT BE UPDATED

}

if($distribution_success == true)
	{	//---------------------------------------------------------------
					//UPDATE JOB INFORMATION IN DATABASE<br />
					//$set_job_status_id = (int) "4";
					$qc_list_append = "".$selected_user_id.",";
					$current_date_refreshed = date("Y-m-d H:i:s");	//GET CURRENT DATE
					
					$update_jobfile_sql = "
					UPDATE `job`
					SET
					`qcs_list` = concat(qcs_list, '$qc_list_append'),
					`distributor_id` = '$current_user_id',
					`distribute_date` = '$current_date_refreshed'
					
					WHERE `work_id` = '$work_id'"; 

						if(mysqli_query($mysqlilink, $update_jobfile_sql))
							{
							//SUCCESSFULLY UPDATED DATABSE
							//NOW PROCEED TO CLEAR THE SESSION
							$distribution_success = true;
							}
						else
							{	//WARN THE USER THAT FILE STATUS COULD NOT BE UPDATED
							  //echo "<br>Could not Update JOB Information; please contact Administrator or Try again Later<br>";
							$distribution_success = false;
							}	//WARN THE USER THAT FILE STATUS COULD NOT BE UPDATED

							//UPDATE JOB INFORMATION IN DATABASE
	}	//---------------------------------------------------------------

							/*
						$to = "$selected_username@visioninfoltd.com";
						$subject = "Received $number_of_files Files from Job #$job_id";
						$message = "
						Dear $selected_username,
						You Have $number_of_files new Files to Process from Job #$job_id. 
						Please deliver according to delivery time advised.
						
						Regards 
						Processing Department 
						Vision Info Ltd
						";
						$from = "processing@visioninfoltd.com";
						$headers = "From:" . $from;
						if (mail($to,$subject,$message,$headers))
							{
							echo "An email has been Sent to $selected_username. ";
							}
						*/
$result["distribution_success"] = $distribution_success;;
	echo my_json_encode($result);
}
function buttonHandler_Reject1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	
$i = "";
while($allrecords = $button->getNextSelectedRecord())
{
$selected_work_id = $allrecords["work_id"];
$selected_job_id = $allrecords["job_id"];
$selected_pdf_id = $allrecords["project_id"];
$selected_designer_id = $allrecords["designer_id"];
$selected_designer2_id = $allrecords["designer2_id"];
$selected_qc_id = $allrecords["qc_id"];

if($i == "")
{
$i = $allrecords["jobfile_id"];
}
else
{
$i = $i.",".$allrecords["jobfile_id"];
}
}

$result["work_id"] = $selected_work_id;
$result["job_id"] = $selected_job_id;
$result["pdf_id"] = $selected_pdf_id;
$result["designer_id"] = $selected_designer_id;
$result["designer2_id"] = $selected_designer2_id;
$result["qc_id"] = $selected_qc_id;

$result["file_list"] = $i;

$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Reject_Job($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	echo my_json_encode($result);
}
function buttonHandler_Start3($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
				$record = $button->getCurrentRecord();
$result["UserID"] = $_SESSION["UserID"];
$result["file_url"] = $record["jobfile_file_url"];
$file_url = $result["file_url"];
$result["jobfile_id"] = $record["jobfile_id"];
$result["rejected_jobfile_id"] = $record["rejected_jobfile_id"];
$result["UserID"] = $_SESSION["UserID"];
$selected_username = $result["UserID"];
$result["user_id"] = $record["cr_designer_id"];
$result["job_id"] = $record["job_id"];
$result["work_id"] = $record["work_id"];

$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$current_time = date("Y-m-d H:i:s");
$mull_time = date("0000-00-00 00:00:00");
				//COPY FILE TO USER DIRECTORY
				//COPY FILES

					$server_name = $_SESSION["my_server_name"];
					$work_dir = addslashes($work_id."\\");
					$job_dir = addslashes($job_id."\\");

					
					$current_file_src = $_SESSION["output_local"].$file_url;
					$current_file_dest = $_SESSION["user_dir_local"].$file_url;
		
			//FIND FILE NAME		
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					
					$current_file_ext_find = explode(".", $current_file_name);
					$current_file_ext = $current_file_ext_find[count($current_file_ext_find)-1];

					$current_file_name_without_ext = str_ireplace(".".$current_file_ext,"",$current_file_name);
					
			//DEFINE DONE SRC		
					$current_file_done_url = str_replace($current_file_name,"done\\",$file_url);
					//echo "<h2>".$current_file_done_url."</h2>";
			//DEFINE DONE DEST

			//DEFINE PATH COPY SRC
					$current_file_path_copy_url = str_replace($current_file_name,"path copy\\",$file_url);
					//echo "<h2>".$current_file_path_copy_url."</h2>";
			//DEFINE PATH COPY DEST
//DO NOT TRANSFER ORIGINAL FILES IN DONE AND PATH COPY TRANSFER					
/*
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_src."\" \"".$current_file_dest_url."\"", $execoutput))
{
$copy_success = true;
	if(file_exists($current_file_dest_url."\\done"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\Done", 0, true))
		{
		//FAILED
		}
	}
	

	if(file_exists($current_file_dest_url."\\path copy"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\path copy", 0, true))
		{
		//FAILED
		}
	}
}
//print_r($execoutput);
//echo "<br>";

if ($execoutput[3] == "The source directory must be specified.")
			{
			$error_found = true ;
			$error_found_detail = "Source File Not Found. Please Check Detail<br>File Name: $current_file_name_slashed";
			$copy_success = false;
			}
*/
//DO NOT TRANSFER ORIGINAL FILES IN DONE AND PATH COPY TRANSFER					

$check_extensions = $_SESSION["check_extensions"]; //array("jpg", "psd", "jpeg",  "tif", "png",  "eps", "tiff", "gif");
$done_file_transferred = false;
$path_copy_file_transferred = false;

foreach ($check_extensions as $file_ext)
{
//TRANSFER DONE AND PATH COPY FILES
//DONE
$current_file_done_src = $_SESSION["output_dir"].$current_file_done_url.$current_file_name_without_ext.".$file_ext";
$current_file_done_src = utf8_decode($current_file_done_src);
$current_file_done_dest_url = $_SESSION["user_dir_local"].$current_file_done_url;
//echo "<h4>$current_file_done_src</h4>";
//echo "<h4>$current_file_done_dest_url</h4>";

if($done_file_transferred)
{
}
else
{
if(file_exists($current_file_done_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_done_src."\" \"".$current_file_done_dest_url."\"", $execoutput))
{
$copy_success = true;
$done_file_transferred = true;
}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
}

//PATH COPY
$current_file_path_copy_src = $_SESSION["output_dir"].$current_file_path_copy_url.$current_file_name_without_ext.".$file_ext";
$current_file_path_copy_src = utf8_decode($current_file_path_copy_src);
$current_file_path_copy_dest_url = $_SESSION["user_dir_local"].$current_file_path_copy_url;
//echo "<h4>$current_file_path_copy_src</h4>";
//echo "<h4>$current_file_path_copy_dest_url</h4>";

//PATH COPY Transferred
if($path_copy_file_transferred)
{
}
else
{
if(file_exists($current_file_path_copy_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /y /SC \"".$current_file_path_copy_src."\" \"".$current_file_path_copy_dest_url."\"", $execoutput))
{
$copy_success = true;
$path_copy_file_transferred = true;
}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
} // PATH COPY Transferred

/*
//ADDITIONAL FILE TRANSFERS
if($additional_files_transferred)
{
}
else
{				
				//ADDITIONAL FOLDERS
				$current_file_additional_src_url = str_replace($current_file_name, "additional files\\", $current_file_src);
				$current_file_additional_dest_url = str_replace($current_file_name, "additional files\\", $current_file_dest);

				if(file_exists($current_file_additional_dest_url))
				{
				//FOLDER EXISTS
				}
				else
				{
					if (!mkdir($current_file_additional_dest_url, 0, true))
					{
					//FAILED
					}
				}

				//COPY ADDITIONAL FILES
				exec("C:/xxcopy/xxcopy.exe /YY /E /SC \"".$current_file_additional_src_url."\" \"".$current_file_additional_dest_url."\"", $execoutput);
				//print_r($execoutput);
				$additional_files_transferred = true;
}
//ADDITIONAL FILE TRANSFERS
*/
//TRANSFER DONE AND PATH COPY FILES			
}

$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");

if($copy_success==true)
{
$result["action_response"] = "Transferred!";
//UPDATE JOBFILE INFORMATION

//UPDATE JOB FILE INFORMATION
$update_jobfile_sql = "
UPDATE rejected_jobfile
SET `cr_start_date` = '".$current_date."',
`cr_pc_name` = '".$_SESSION["user_pc_name"]."'
WHERE `rejected_jobfile_id`='".$result["rejected_jobfile_id"]."' AND (`cr_designer_time` IS NULL)";
CustomQuery($update_jobfile_sql);

/*
//UPDATE TIME TAKEN
$update_jobfile_sql = "
UPDATE jobfile
SET designer_time = TIMEDIFF(end_date, start_date)
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer_time` IS NULL)";
CustomQuery($update_jobfile_sql);
*/
}
else
{
$result["action_response"] = "Transfer Failed!";
}

/*
//UPDATE JOB FILE INFORMATION
$update_jobfile_sql = "
UPDATE jobfile
SET `start_date` = '".$current_date."',
SET `end_date` = '".$current_date."'
`jobfile_status_id` = '4'
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`start_date` = '".$null_date."')";
CustomQuery($update_jobfile_sql);
*/
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
/*

$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='4' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='4'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='14' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='14'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='7' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='7'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

*/
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION;
	echo my_json_encode($result);
}
function buttonHandler_Finish3($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
				$record = $button->getCurrentRecord();
$result["UserID"] = $_SESSION["UserID"];
$result["file_url"] = $record["jobfile_file_url"];
$file_url = $result["file_url"];
$result["jobfile_id"] = $record["jobfile_id"];
$result["rejected_jobfile_id"] = $record["rejected_jobfile_id"];
$result["UserID"] = $_SESSION["UserID"];
$selected_username = $result["UserID"];
$result["user_id"] = $record["cr_designer_id"];
$result["job_id"] = $record["job_id"];
$result["work_id"] = $record["work_id"];

$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$current_time = date("Y-m-d H:i:s");
$mull_time = date("0000-00-00 00:00:00");
				//COPY FILE TO USER DIRECTORY
				//COPY FILES

					$server_name = $_SESSION["my_server_name"];
					$work_dir = addslashes($work_id."\\");
					$job_dir = addslashes($job_id."\\");

					
					$current_file_src = $_SESSION["user_dir_local"].$file_url;
					$current_file_dest = $_SESSION["output_dir"].$file_url;
		
			//FIND FILE NAME		
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					
					$current_file_ext_find = explode(".", $current_file_name);
					$current_file_ext = $current_file_ext_find[count($current_file_ext_find)-1];

					$current_file_name_without_ext = str_ireplace(".".$current_file_ext,"",$current_file_name);
					
			//DEFINE DONE SRC		
					$current_file_done_url = str_replace($current_file_name,"done\\",$file_url);
					//echo "<h2>".$current_file_done_url."</h2>";
			//DEFINE DONE DEST

			//DEFINE PATH COPY SRC
					$current_file_path_copy_url = str_replace($current_file_name,"path copy\\",$file_url);
					//echo "<h2>".$current_file_path_copy_url."</h2>";
			//DEFINE PATH COPY DEST
//DO NOT TRANSFER ORIGINAL FILES IN DONE AND PATH COPY TRANSFER					
/*
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_src."\" \"".$current_file_dest_url."\"", $execoutput))
{
$copy_success = true;
	if(file_exists($current_file_dest_url."\\done"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\Done", 0, true))
		{
		//FAILED
		}
	}
	

	if(file_exists($current_file_dest_url."\\path copy"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\path copy", 0, true))
		{
		//FAILED
		}
	}
}
//print_r($execoutput);
//echo "<br>";

if ($execoutput[3] == "The source directory must be specified.")
			{
			$error_found = true ;
			$error_found_detail = "Source File Not Found. Please Check Detail<br>File Name: $current_file_name_slashed";
			$copy_success = false;
			}
*/
//DO NOT TRANSFER ORIGINAL FILES IN DONE AND PATH COPY TRANSFER					

$check_extensions = $_SESSION["check_extensions"];//array("jpg", "psd", "jpeg",  "tif", "png",  "eps", "tiff", "gif");
$done_file_transferred = false;
$path_copy_file_transferred = false;

foreach ($check_extensions as $file_ext)
{
//TRANSFER DONE AND PATH COPY FILES
//DONE
$current_file_done_src = $_SESSION["user_dir_local"].$current_file_done_url.$current_file_name_without_ext.".$file_ext";
$current_file_done_dest_url = $_SESSION["output_dir"].$current_file_done_url;
//echo "<h4>$current_file_done_src</h4>";
//echo "<h4>$current_file_done_dest_url</h4>";

if($done_file_transferred)
{
}
else
{
if(file_exists($current_file_done_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_done_src."\" \"".$current_file_done_dest_url."\"", $execoutput))
{
$copy_success = true;
$done_file_transferred = true;
}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
}

//PATH COPY
$current_file_path_copy_src = $_SESSION["user_dir_local"].$current_file_path_copy_url.$current_file_name_without_ext.".$file_ext";
$current_file_path_copy_dest_url = $_SESSION["output_dir"].$current_file_path_copy_url;
//echo "<h4>$current_file_path_copy_src</h4>";
//echo "<h4>$current_file_path_copy_dest_url</h4>";

//PATH COPY Transferred
if($path_copy_file_transferred)
{
}
else
{
if(file_exists($current_file_path_copy_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /y /SC \"".$current_file_path_copy_src."\" \"".$current_file_path_copy_dest_url."\"", $execoutput))
{
$copy_success = true;
$path_copy_file_transferred = true;
}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
} // PATH COPY Transferred

/*
//ADDITIONAL FILE TRANSFERS
if($additional_files_transferred)
{
}
else
{				
				//ADDITIONAL FOLDERS
				$current_file_additional_src_url = str_replace($current_file_name, "additional files\\", $current_file_src);
				$current_file_additional_dest_url = str_replace($current_file_name, "additional files\\", $current_file_dest);

				if(file_exists($current_file_additional_dest_url))
				{
				//FOLDER EXISTS
				}
				else
				{
					if (!mkdir($current_file_additional_dest_url, 0, true))
					{
					//FAILED
					}
				}

				//COPY ADDITIONAL FILES
				exec("C:/xxcopy/xxcopy.exe /YY /E /SC \"".$current_file_additional_src_url."\" \"".$current_file_additional_dest_url."\"", $execoutput);
				$additional_files_transferred = true;
}
//ADDITIONAL FILE TRANSFERS

*/
//TRANSFER DONE AND PATH COPY FILES			
}

$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");

if($copy_success==true)
{
$result["action_response"] = "Transferred!";
//UPDATE JOBFILE INFORMATION

//UPDATE JOB FILE INFORMATION
//UPDATE JOB FILE INFORMATION
$update_jobfile_sql = "
UPDATE rejected_jobfile
SET `cr_end_date` = '".$current_date."'
WHERE `rejected_jobfile_id`='".$result["rejected_jobfile_id"]."' AND (`cr_designer_time` IS NULL)";
CustomQuery($update_jobfile_sql);


//UPDATE TIME TAKEN
$update_jobfile_sql = "
UPDATE rejected_jobfile
SET cr_designer_time = TIMEDIFF(cr_end_date, cr_start_date)
WHERE `rejected_jobfile_id`='".$result["rejected_jobfile_id"]."' AND (`cr_designer_time` IS NULL)";
CustomQuery($update_jobfile_sql);

}
else
{
$result["action_response"] = "Transfer Failed!";
}

//UPDATE JOB FILE INFORMATION
$update_jobfile_sql = "
UPDATE jobfile
SET `jobfile_status_id` = '14'
WHERE `jobfile_id`='".$result["jobfile_id"]."' ";
CustomQuery($update_jobfile_sql);

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='4' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='4'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='14' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='14'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `jobfile` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='4' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `job`
SET `jobstatus_id`='14'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION

;;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label16($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);

	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if (!mkdir($make_dir, 0, true))
	{
	//FAILED
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label91($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label91($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action3_label71($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	/*
if($params["confirmation"] == "ContinueProcess")
{ //CONTINUE NOTIFYING
*/
$result["my_server_share"] = $_SESSION["my_server_share"];
	while($record = $button->getCurrentRecord())
	{
	if ($record["jobstatus_id"] == 7)
	{
		$current_time = date("Y-m-d H:i:s");
		$uploaded_by = $_SESSION["user_id"];
		$uploaded_date = $current_time;
		$sql = "update job set `jobstatus_id`='8', `uploader_id`='".$uploaded_by."', `upload_date`='".$current_time."' where work_id=" .$record["work_id"];
		CustomQuery($sql);
	break;
	}
	if ($record["jobstatus_id"] == 8)
	{
		$current_time = date("Y-m-d H:i:s");
		$notified_by = $_SESSION["user_id"];
		$notify_date = $current_time;
		$sql = "update job set `jobstatus_id`='9', `notifer_id`='".$notified_by."', `notify_date`='".$notify_date."' where work_id=" .$record["work_id"];

			//REMOVE DIRECTORYFROM OUTPUT
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["output_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["output_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);

			//REMOVE DIRECTORYFROM DOWNLOAD
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["download_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["download_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			//exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);
			
			
//			if(file_exists($dir_to_move))
			//{
			$dir_to_move = $_SESSION["upload_dir"].$record["work_id"]."\\";
			$dir_to_move_to = $_SESSION["upload_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			//echo '<br>'.$dir_to_move.'<br>';
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_move\" \"$dir_to_move_to\"", $outputbb1);
			//print_r($outputbb1);
			//}


			//print_r($outputbb);
			//REMOVE DIRECTORYFROM OUTPUT

		CustomQuery($sql);

	break;
	}

	}

//CONTINUE NOTIFYING
/*
}
else
{
$result["confirmation"] = "Process Cancelled";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label511($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label511($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action3_label511($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	/*
if($params["confirmation"] == "ContinueProcess")
{ //CONTINUE NOTIFYING
*/
$result["my_server_share"] = $_SESSION["my_server_share"];
	while($record = $button->getCurrentRecord())
	{
	if ($record["jobstatus_id"] == 7)
	{
		$current_time = date("Y-m-d H:i:s");
		$uploaded_by = $_SESSION["user_id"];
		$uploaded_date = $current_time;
		$sql = "update job set `jobstatus_id`='8', `uploader_id`='".$uploaded_by."', `upload_date`='".$current_time."' where work_id=" .$record["work_id"];
		CustomQuery($sql);
	break;
	}
	if ($record["jobstatus_id"] == 8)
	{
		$current_time = date("Y-m-d H:i:s");
		$notified_by = $_SESSION["user_id"];
		$notify_date = $current_time;
		$sql = "update job set `jobstatus_id`='9', `notifer_id`='".$notified_by."', `notify_date`='".$notify_date."' where work_id=" .$record["work_id"];

			//REMOVE DIRECTORYFROM OUTPUT
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["output_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["output_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);

			//REMOVE DIRECTORYFROM DOWNLOAD
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["download_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["download_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			//exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);
			
			
//			if(file_exists($dir_to_move))
			//{
			$dir_to_move = $_SESSION["upload_dir"].$record["work_id"]."\\";
			$dir_to_move_to = $_SESSION["upload_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			//echo '<br>'.$dir_to_move.'<br>';
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_move\" \"$dir_to_move_to\"", $outputbb1);
			//print_r($outputbb1);
			//}


			//print_r($outputbb);
			//REMOVE DIRECTORYFROM OUTPUT

		CustomQuery($sql);

	break;
	}

	}

//CONTINUE NOTIFYING
/*
}
else
{
$result["confirmation"] = "Process Cancelled";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label811($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label811($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action3_label811($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	/*
if($params["confirmation"] == "ContinueProcess")
{ //CONTINUE NOTIFYING
*/
$result["my_server_share"] = $_SESSION["my_server_share"];
	while($record = $button->getCurrentRecord())
	{
	if ($record["jobstatus_id"] == 7)
	{
		$current_time = date("Y-m-d H:i:s");
		$uploaded_by = $_SESSION["user_id"];
		$uploaded_date = $current_time;
		$sql = "update job set `jobstatus_id`='8', `uploader_id`='".$uploaded_by."', `upload_date`='".$current_time."' where work_id=" .$record["work_id"];
		CustomQuery($sql);
	break;
	}
	if ($record["jobstatus_id"] == 8)
	{
		$current_time = date("Y-m-d H:i:s");
		$notified_by = $_SESSION["user_id"];
		$notify_date = $current_time;
		$sql = "update job set `jobstatus_id`='9', `notifer_id`='".$notified_by."', `notify_date`='".$notify_date."' where work_id=" .$record["work_id"];

			//REMOVE DIRECTORYFROM OUTPUT
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["output_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["output_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);

			//REMOVE DIRECTORYFROM DOWNLOAD
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["download_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["download_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			//exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);
			
			
//			if(file_exists($dir_to_move))
			//{
			$dir_to_move = $_SESSION["upload_dir"].$record["work_id"]."\\";
			$dir_to_move_to = $_SESSION["upload_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			//echo '<br>'.$dir_to_move.'<br>';
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_move\" \"$dir_to_move_to\"", $outputbb1);
			//print_r($outputbb1);
			//}


			//print_r($outputbb);
			//REMOVE DIRECTORYFROM OUTPUT

		CustomQuery($sql);

	break;
	}

	}

//CONTINUE NOTIFYING
/*
}
else
{
$result["confirmation"] = "Process Cancelled";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label711($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label711($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action3_label611($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	/*
if($params["confirmation"] == "ContinueProcess")
{ //CONTINUE NOTIFYING
*/
$result["my_server_share"] = $_SESSION["my_server_share"];
	while($record = $button->getCurrentRecord())
	{
	if ($record["jobstatus_id"] == 7)
	{
		$current_time = date("Y-m-d H:i:s");
		$uploaded_by = $_SESSION["user_id"];
		$uploaded_date = $current_time;
		$sql = "update job set `jobstatus_id`='8', `uploader_id`='".$uploaded_by."', `upload_date`='".$current_time."' where work_id=" .$record["work_id"];
		CustomQuery($sql);
	break;
	}
	if ($record["jobstatus_id"] == 8)
	{
		$current_time = date("Y-m-d H:i:s");
		$notified_by = $_SESSION["user_id"];
		$notify_date = $current_time;
		$sql = "update job set `jobstatus_id`='9', `notifer_id`='".$notified_by."', `notify_date`='".$notify_date."' where work_id=" .$record["work_id"];

			//REMOVE DIRECTORYFROM OUTPUT
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["output_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["output_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);

			//REMOVE DIRECTORYFROM DOWNLOAD
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["download_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["download_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			//exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);
			
			
//			if(file_exists($dir_to_move))
			//{
			$dir_to_move = $_SESSION["upload_dir"].$record["work_id"]."\\";
			$dir_to_move_to = $_SESSION["upload_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			//echo '<br>'.$dir_to_move.'<br>';
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_move\" \"$dir_to_move_to\"", $outputbb1);
			//print_r($outputbb1);
			//}


			//print_r($outputbb);
			//REMOVE DIRECTORYFROM OUTPUT

		CustomQuery($sql);

	break;
	}

	}

//CONTINUE NOTIFYING
/*
}
else
{
$result["confirmation"] = "Process Cancelled";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label611($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label611($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action3_label1211($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	/*
if($params["confirmation"] == "ContinueProcess")
{ //CONTINUE NOTIFYING
*/
$result["my_server_share"] = $_SESSION["my_server_share"];
	while($record = $button->getCurrentRecord())
	{
	if ($record["jobstatus_id"] == 7)
	{
		$current_time = date("Y-m-d H:i:s");
		$uploaded_by = $_SESSION["user_id"];
		$uploaded_date = $current_time;
		$sql = "update job set `jobstatus_id`='8', `uploader_id`='".$uploaded_by."', `upload_date`='".$current_time."' where work_id=" .$record["work_id"];
		CustomQuery($sql);
	break;
	}
	if ($record["jobstatus_id"] == 8)
	{
		$current_time = date("Y-m-d H:i:s");
		$notified_by = $_SESSION["user_id"];
		$notify_date = $current_time;
		$sql = "update job set `jobstatus_id`='9', `notifer_id`='".$notified_by."', `notify_date`='".$notify_date."' where work_id=" .$record["work_id"];

			//REMOVE DIRECTORYFROM OUTPUT
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["output_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["output_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);

			//REMOVE DIRECTORYFROM DOWNLOAD
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["download_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["download_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			//exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);
			
			
//			if(file_exists($dir_to_move))
			//{
			$dir_to_move = $_SESSION["upload_dir"].$record["work_id"]."\\";
			$dir_to_move_to = $_SESSION["upload_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			//echo '<br>'.$dir_to_move.'<br>';
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_move\" \"$dir_to_move_to\"", $outputbb1);
			//print_r($outputbb1);
			//}


			//print_r($outputbb);
			//REMOVE DIRECTORYFROM OUTPUT

		CustomQuery($sql);

	break;
	}

	}

//CONTINUE NOTIFYING
/*
}
else
{
$result["confirmation"] = "Process Cancelled";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label421($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label421($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action3_label421($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	/*
if($params["confirmation"] == "ContinueProcess")
{ //CONTINUE NOTIFYING
*/
$result["my_server_share"] = $_SESSION["my_server_share"];
	while($record = $button->getCurrentRecord())
	{
	if ($record["jobstatus_id"] == 7)
	{
		$current_time = date("Y-m-d H:i:s");
		$uploaded_by = $_SESSION["user_id"];
		$uploaded_date = $current_time;
		$sql = "update job set `jobstatus_id`='8', `uploader_id`='".$uploaded_by."', `upload_date`='".$current_time."' where work_id=" .$record["work_id"];
		CustomQuery($sql);
	break;
	}
	if ($record["jobstatus_id"] == 8)
	{
		$current_time = date("Y-m-d H:i:s");
		$notified_by = $_SESSION["user_id"];
		$notify_date = $current_time;
		$sql = "update job set `jobstatus_id`='9', `notifer_id`='".$notified_by."', `notify_date`='".$notify_date."' where work_id=" .$record["work_id"];

			//REMOVE DIRECTORYFROM OUTPUT
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["output_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["output_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);

			//REMOVE DIRECTORYFROM DOWNLOAD
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["download_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["download_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			//exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);
			
			
//			if(file_exists($dir_to_move))
			//{
			$dir_to_move = $_SESSION["upload_dir"].$record["work_id"]."\\";
			$dir_to_move_to = $_SESSION["upload_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			//echo '<br>'.$dir_to_move.'<br>';
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_move\" \"$dir_to_move_to\"", $outputbb1);
			//print_r($outputbb1);
			//}


			//print_r($outputbb);
			//REMOVE DIRECTORYFROM OUTPUT

		CustomQuery($sql);

	break;
	}

	}

//CONTINUE NOTIFYING
/*
}
else
{
$result["confirmation"] = "Process Cancelled";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label82($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label82($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label92($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label92($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label911($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label911($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label9111($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
if ($record["jobstatus_id"] == 1)
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	$add_to_date = $delivery_duration; // hours
	$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
	$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

	$accepted_by = $_SESSION["user_id"];
	$accepted_date = $current_time;
	$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$record["work_id"];
	CustomQuery($sql);



	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}

	break;
}
else if ($record['jobstatus_id'] == "2")
	{
	$sql = "update job set jobstatus_id='20' where work_id=" .$record["work_id"];
	CustomQuery($sql);
	break;
	}
else if ($record['jobstatus_id'] == "3")
	{
	break;
	}
else
	{
	break;
	}
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label9111($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Email_Report($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	
$designer_report_sql = "SELECT
jobfile.end2_date,
`user`.team,
jobfile.designer2_id,
jobfile.project_id,
COUNT(*) AS files,
pdf.pdf_estimated_average,
SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))) AS eta_total,
SEC_TO_TIME(AVG(TIME_TO_SEC(pdf.pdf_estimated_average))) AS eta_avg,
jobfile.designer2_time AS taken_time,
SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_total,
SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_avg,
(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(jobfile.designer2_time))))* 100 AS efficiency,
IF((SEC_TO_TIME(25200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))) < 0, '00:00:00', (SEC_TO_TIME(25200 - SUM(TIME_TO_SEC(jobfile.designer2_time))))) AS idle_time,
IF((((25200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(25200)) < 0, 0, (((25200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(25200))) AS idle_percentage
FROM jobfile
LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id
LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id
WHERE jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.designer2_time) > '60'
GROUP BY DATE(jobfile.end2_date), `user`.team, jobfile.designer2_id
ORDER BY jobfile.end2_date DESC, `user`.team, jobfile.designer2_id DESC";

$designer_reports_query = CustomQuery($designer_report_sql);
$designer_reports = db_fetch_array($designer_reports_query);

$result["designer2_id"] = $designer_reports["designer2_id"];

//$email="moinul@msbd.com";
$email="moinul.sazu@clippingpathimage.com";
//$cc_email = "riajul.islam@gmail.com";
//$bcc_email = "alex@clippingpathimage.com";
$message="Daily Designer Report for ".$designer_reports["designer2_id"];

$subject="Daily Designer Report";
runner_mail(array('to'  => $email, 'cc' => '$cc_email',
'$bcc_email' => 'test3@test.com', 'subject' => $subject, 'body' => $message));;
	echo my_json_encode($result);
}
function buttonHandler_New_Button12($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_New_Button111($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_Action1_label19($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$current_time = date("Y-m-d H:i:s");
$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];
	//print_r($_SESSION);

while($record = $button->getCurrentRecord())
{
	$delivery_duration = $record["delivery_duration"];
	$client_dir = $record["client_id"];
	$work_dir = $record["work_id"]."\\".$record["job_id"];
	
	//, `activity_log`='".$make_dir."'
	$make_dir = $_SESSION["download_dir"].$record["work_id"]."\\".$record["job_id"];

	if(file_exists($make_dir))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($make_dir, 0, true))
		{
		//FAILED
		}
	}
  break;
} ;
	echo my_json_encode($result);
}
function buttonHandler_Action2_label2($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["record"] = $button->getCurrentRecord();
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_QC_Distribute_Files3($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$server_name = $_SESSION["my_server_name"];
$distribution_success = false;

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

//$params["file_list"];
$result["total_files"] = COUNT($params["file_list"]);
$result["designer_id"] = $params["designer_id"];
$result["designer_name"] = $params["designer_name"];
$result["work_id"] = $params["work_id"];
$result["job_id"] = $params["job_id"];

$work_id = $result["work_id"];
$result["job_id"];

$jobfile_status_id = 17;
$selected_user_id = $result["designer_id"];
$selected_username = $result["designer_name"];
$current_user_id = $_SESSION["user_id"];
$current_date_refreshed = date("Y-m-d H:i:s");	//GET CURRENT DATE
$current_file_id = "";

for($j=0; $j<$result["total_files"]; $j++)
{

				$current_file = $params["file_list"][$j];
/*
				//GET FILE URL
						$selected_jobfile_sql = "
						SELECT file_url, client_id FROM jobfile WHERE `jobfile_id`='$current_file'
						";
						
						$selected_jobfile_result = mysqli_query($mysqlilink, $selected_jobfile_sql);
						
							while($selected_jobfile_detail = mysqli_fetch_array($selected_jobfile_result, MYSQLI_BOTH))
								{
								$file_url = addslashes($selected_jobfile_detail['file_url']);
								$client_id = $selected_jobfile_detail['client_id'];
								}				

				//GET FILE URL


				//COPY FILE TO USER DIRECTORY
				//COPY FILES

					$output = addslashes("users\\".$selected_username."\\");
					$client_dir = addslashes("clients\\".$client_id."\\");
					$work_dir = addslashes($work_id."\\");
					$job_dir = addslashes($job_id."\\");


					$exclude_from_current_file = addslashes($server_name).$client_dir.addslashes("downloads\\");
					$include_to_current_file = addslashes($server_name).$output;
					$current_file_dest = str_replace($exclude_from_current_file, $include_to_current_file, $file_url);
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					$current_file_done_src = str_replace($current_file_name, "done\\".$current_file_name, $current_file_dest);
					$current_file_path_copy_src = str_replace($current_file_name, "path copy\\".$current_file_name, $current_file_dest);
					

				//CREATE DONE AND PATH COPY FOLDER STRUCTURE FOR FILES
				$current_file_withslash = $file_url;
				$current_file_done_dest = str_replace($exclude_from_current_file, $include_to_current_file, $current_file_done_src);
				$current_file_path_copy_dest = str_replace($exclude_from_current_file, $include_to_current_file, $current_file_path_copy_src);
				$current_file_done_dest_url = str_replace($current_file_name, "", $current_file_done_dest);
				$current_file_path_copy_dest_url = str_replace($current_file_name, "", $current_file_path_copy_dest);

if(!exec("xxcopy /y /PB \"".stripslashes($file_url)."\" \"".stripslashes($current_file_dest_url)."\"", $execoutput))
{
}

if ($execoutput[3] == "The source directory must be specified.")
			{
			$error_found = true ;
			$error_found_detail = "Source File Not Found. Please Check Detail<br>File Name: $current_file_name_slashed";
			$copy_success = false;
			}

*/

/*				`qcstart_date` = '0000-00-00 00:00:00',
				`qcend_date` = '0000-00-00 00:00:00',
				`qc_time` = NULL,
*/
			$update_jobfile_sql = "

				UPDATE `rejected_jobfile2`
				SET 
				`jobfile_status_id` =  $jobfile_status_id,
				`qc_id` = '$selected_user_id',
				`distributor_id` = '$current_user_id',
				`distribute_date`= '$current_date_refreshed'

				WHERE `jobfile_id` = '$current_file'
				";

				if(mysqli_query($mysqlilink, $update_jobfile_sql))
							{
							//SUCCESSFULLY UPDATED DATABSE
							//NOW PROCEED TO CLEAR THE SESSION
							$distribution_success = true;
							}
						else
							{	//WARN THE USER THAT FILE STATUS COULD NOT BE UPDATED
							//echo "<br>Could not Update JOB Information; please contact Administrator or Try again Later<br>";
							$distribution_success = false;
							}	//WARN THE USER THAT FILE STATUS COULD NOT BE UPDATED

}

if($distribution_success == true)
	{	//---------------------------------------------------------------
					//UPDATE JOB INFORMATION IN DATABASE<br />
					//$set_job_status_id = (int) "4";
					$qc_list_append = "".$selected_user_id.",";
					$current_date_refreshed = date("Y-m-d H:i:s");	//GET CURRENT DATE
					
					$update_jobfile_sql = "
					UPDATE `job`
					SET
					`qcs_list` = concat(qcs_list, '$qc_list_append'),
					`distributor_id` = '$current_user_id',
					`distribute_date` = '$current_date_refreshed'
					
					WHERE `work_id` = '$work_id'"; 

						if(mysqli_query($mysqlilink, $update_jobfile_sql))
							{
							//SUCCESSFULLY UPDATED DATABSE
							//NOW PROCEED TO CLEAR THE SESSION
							$distribution_success = true;
							}
						else
							{	//WARN THE USER THAT FILE STATUS COULD NOT BE UPDATED
							  //echo "<br>Could not Update JOB Information; please contact Administrator or Try again Later<br>";
							$distribution_success = false;
							}	//WARN THE USER THAT FILE STATUS COULD NOT BE UPDATED

							//UPDATE JOB INFORMATION IN DATABASE
	}	//---------------------------------------------------------------

							/*
						$to = "$selected_username@visioninfoltd.com";
						$subject = "Received $number_of_files Files from Job #$job_id";
						$message = "
						Dear $selected_username,
						You Have $number_of_files new Files to Process from Job #$job_id. 
						Please deliver according to delivery time advised.
						
						Regards 
						Processing Department 
						Vision Info Ltd
						";
						$from = "processing@visioninfoltd.com";
						$headers = "From:" . $from;
						if (mail($to,$subject,$message,$headers))
							{
							echo "An email has been Sent to $selected_username. ";
							}
						*/
$result["distribution_success"] = $distribution_success;;
	echo my_json_encode($result);
}
function buttonHandler_Distribute_Files3($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];

$server_name = $_SESSION["my_server_name"];
$distribution_success = false;

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

//$params["file_list"];
$result["total_files"] = COUNT($params["file_list"]);
$result["designer_id"] = $params["designer_id"];
$result["designer_name"] = $params["designer_name"];
$result["work_id"] = $params["work_id"];
$result["job_id"] = $params["job_id"];
$result["designer_level"] = $params["designer_level"];
$work_id = $result["work_id"];
$result["job_id"];

$jobfile_status_id = 13;
$selected_user_id = $result["designer_id"];
$selected_username = $result["designer_name"];
$current_user_id = $_SESSION["user_id"];
$current_date_refreshed = date("Y-m-d H:i:s");	//GET CURRENT DATE
$current_file_id = "";

/*
for($i=0; $i<5; $i++)
{
exec("xxcopy /y \"\\\\192.168.2.1\\C$\\TEST\\\" \"\\\\192.168.2.1\\D$\\TEST\\$i\\\"", $execoutput);
print_r($execoutput);
}

*/

for($j=0; $j<$result["total_files"]; $j++)
{

				$current_file = $params["file_list"][$j];
/*
				//GET FILE URL
						$selected_jobfile_sql = "
						SELECT file_url, client_id FROM jobfile WHERE `jobfile_id`='$current_file'
						";
						
						$selected_jobfile_result = mysqli_query($mysqlilink, $selected_jobfile_sql);
						
							while($selected_jobfile_detail = mysqli_fetch_array($selected_jobfile_result, MYSQLI_BOTH))
								{
								$file_url = addslashes($selected_jobfile_detail['file_url']);
								$client_id = $selected_jobfile_detail['client_id'];
								}				

				//GET FILE URL


				//COPY FILE TO USER DIRECTORY
				//COPY FILES

					$output = addslashes("users\\".$selected_username."\\");
					$client_dir = addslashes("clients\\".$client_id."\\");
					$work_dir = addslashes($work_id."\\");
					$job_dir = addslashes($job_id."\\");


					$exclude_from_current_file = addslashes($server_name).$client_dir.addslashes("downloads\\");
					$include_to_current_file = addslashes($server_name).$output;
					$current_file_dest = str_replace($exclude_from_current_file, $include_to_current_file, $file_url);
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					$current_file_done_src = str_replace($current_file_name, "done\\".$current_file_name, $current_file_dest);
					$current_file_path_copy_src = str_replace($current_file_name, "path copy\\".$current_file_name, $current_file_dest);
					

				//CREATE DONE AND PATH COPY FOLDER STRUCTURE FOR FILES
				$current_file_withslash = $file_url;
				$current_file_done_dest = str_replace($exclude_from_current_file, $include_to_current_file, $current_file_done_src);
				$current_file_path_copy_dest = str_replace($exclude_from_current_file, $include_to_current_file, $current_file_path_copy_src);
				$current_file_done_dest_url = str_replace($current_file_name, "", $current_file_done_dest);
				$current_file_path_copy_dest_url = str_replace($current_file_name, "", $current_file_path_copy_dest);

if(!exec("xxcopy /y /PB \"".stripslashes($file_url)."\" \"".stripslashes($current_file_dest_url)."\"", $execoutput))
{
}

if ($execoutput[3] == "The source directory must be specified.")
			{
			$error_found = true ;
			$error_found_detail = "Source File Not Found. Please Check Detail<br>File Name: $current_file_name_slashed";
			$copy_success = false;
			}

*/

			if($result["designer_level"] == "2")
			{
			$update_jobfile_sql = "

				UPDATE `rejected_jobfile2`
				SET 
				`jobfile_status_id` =  $jobfile_status_id,
				`designer2_id` = '$selected_user_id',
				`distributor_id` = '$current_user_id',
				`distribute_date`= '$current_date_refreshed',
				`start2_date` = '0000-00-00 00:00:00',
				`reject_date` = ''

				WHERE `jobfile_id` = '$current_file'
				";
			}	//DESIGNER LEVEL 2
			else
			{//DESIGNER LEVEL 1
			$update_jobfile_sql = "

				UPDATE `rejected_jobfile2`
				SET 
				`jobfile_status_id` =  $jobfile_status_id,
				`designer_id` = '$selected_user_id',
				`distributor_id` = '$current_user_id',
				`distribute_date`= '$current_date_refreshed'

				WHERE `jobfile_id` = '$current_file'
				";
			}//DESIGNER LEVEL 1
				if(mysqli_query($mysqlilink, $update_jobfile_sql))
							{
							//SUCCESSFULLY UPDATED DATABSE
							//NOW PROCEED TO CLEAR THE SESSION
							$distribution_success = true;
							}
						else
							{	//WARN THE USER THAT FILE STATUS COULD NOT BE UPDATED
							//echo "<br>Could not Update JOB Information; please contact Administrator or Try again Later<br>";
							$distribution_success = false;
							}	//WARN THE USER THAT FILE STATUS COULD NOT BE UPDATED

}

if($distribution_success == true)
	{	//---------------------------------------------------------------
					//UPDATE JOB INFORMATION IN DATABASE<br />
					$set_job_status_id = (int) "4";
					$designer_list_append = "".$selected_user_id.",";
					$current_date_refreshed = date("Y-m-d H:i:s");	//GET CURRENT DATE
					
					$update_jobfile_sql = "
					UPDATE `job`
					SET
					`jobstatus_id` = '$set_job_status_id',
					`designer_list` = concat(designer_list, '$designer_list_append'),
					`distributor_id` = '$current_user_id',
					`distribute_date` = '$current_date_refreshed'
					
					WHERE `work_id` = '$work_id'"; 

						if(mysqli_query($mysqlilink, $update_jobfile_sql))
							{
							//SUCCESSFULLY UPDATED DATABSE
							//NOW PROCEED TO CLEAR THE SESSION
							$distribution_success = true;
							}
						else
							{	//WARN THE USER THAT FILE STATUS COULD NOT BE UPDATED
							  //echo "<br>Could not Update JOB Information; please contact Administrator or Try again Later<br>";
							$distribution_success = false;
							}	//WARN THE USER THAT FILE STATUS COULD NOT BE UPDATED

							//UPDATE JOB INFORMATION IN DATABASE
	}	//---------------------------------------------------------------

							/*
						$to = "$selected_username@visioninfoltd.com";
						$subject = "Received $number_of_files Files from Job #$job_id";
						$message = "
						Dear $selected_username,
						You Have $number_of_files new Files to Process from Job #$job_id. 
						Please deliver according to delivery time advised.
						
						Regards 
						Processing Department 
						Vision Info Ltd
						";
						$from = "processing@visioninfoltd.com";
						$headers = "From:" . $from;
						if (mail($to,$subject,$message,$headers))
							{
							echo "An email has been Sent to $selected_username. ";
							}
						*/
$result["distribution_success"] = $distribution_success;
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Distribute14($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	
$result["my_server_share"] = $_SESSION["my_server_share"];
$i = "";
while($allrecords = $button->getNextSelectedRecord())
{
$selected_work_id = $allrecords["work_id"];
$selected_job_id = $allrecords["job_id"];
if($i == "")
{
$i = $allrecords["jobfile_id"];
}
else
{
$i = $i.",".$allrecords["jobfile_id"];
}
}

$result["work_id"] = $selected_work_id;
$result["job_id"] = $selected_job_id;
$result["file_list"] = $i;
$result["server_url"] = $_SESSION["my_server_url"];

;
	echo my_json_encode($result);
}
function buttonHandler_Distribute_to_QC4($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	
$i = "";
while($allrecords = $button->getNextSelectedRecord())
{
$selected_work_id = $allrecords["work_id"];
$selected_job_id = $allrecords["job_id"];
if($i == "")
{
$i = $allrecords["jobfile_id"];
}
else
{
$i = $i.",".$allrecords["jobfile_id"];
}
}

$result["work_id"] = $selected_work_id;
$result["job_id"] = $selected_job_id;
$result["file_list"] = $i;
$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Finish_Job12($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
				//DESIGNER LEVEL 2 BATCH FINISH BUTTON

			$record = $button->getCurrentRecord();
$result["UserID"] = $_SESSION["UserID"];
$result["file_url"] = $record["file_url"];
$file_url = $result["file_url"];
$result["jobfile_id"] = $record["jobfile_id"];
$result["UserID"] = $_SESSION["UserID"];
$selected_username = $result["UserID"];
$result["user_id"] = $record["designer_id"];
$result["job_id"] = $record["job_id"];
$result["work_id"] = $record["work_id"];

$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");
				//COPY FILE TO USER DIRECTORY
				//COPY FILES

$server_name = $_SESSION["my_server_name"];
$work_dir = addslashes($work_id."\\");
$job_dir = addslashes($job_id."\\");

	//CUSTOM DATABASE CONNECTION
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
	//CUSTOM DATABASE CONNECTION
	
	//CUSTOM DATABASE QUERY
	$select_jobfile_sql = "
			Select * from rejected_jobfile2
			WHERE `work_id`='".$result["work_id"]."' AND `designer2_id`='".$_SESSION["user_id"]."' AND designer2_time IS NULL
			";

	$select_jobfile_result = mysqli_query($mysqlilink, $select_jobfile_sql);
	$number_of_jobs = mysqli_num_rows($select_jobfile_result);
	//CUSTOM DATABASE QUERY
	
	//$list_jobfile_result = mysqli_fetch_array($select_jobfile_result, MYSQLI_BOTH);
	//print_r($list_jobfile_result);
	
$list_of_files_copied = array();
$done_file_transferred = false;
$path_copy_file_transferred = false;
$original_file_sucess = false;

// ENUMERATE JOBFILES  -------------------------------------------------------------------------------------------------------
	while($list_jobfile_result = mysqli_fetch_array($select_jobfile_result, MYSQLI_BOTH))
	{	// COPY EACH FILE AND MAKE DB UPDATE
	$file_url = $list_jobfile_result["file_url"];
	$result["file_url"] = $list_jobfile_result["file_url"];
	
	$jobfile_id = $list_jobfile_result["jobfile_id"];
	$result["jobfile_id"] = $list_jobfile_result["jobfile_id"];
	//echo "$jobfile_id  $file_url";

		$GLOBALS["jobfile_start_date_first"] = $list_jobfile_result["start2_date"];
	
					$current_file_src = $_SESSION["user_dir_local"].$file_url;
					$current_file_dest = $_SESSION["output_dir"].$file_url;
			//FIND FILE NAME		
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					$current_file_ext_find = explode(".", $current_file_name);
					$current_file_ext = $current_file_ext_find[count($current_file_ext_find)-1];
					$current_file_name_without_ext = str_ireplace(".".$current_file_ext,"",$current_file_name);
			//DEFINE DONE SRC		
					$current_file_done_url = str_replace($current_file_name,"done\\",$file_url);
					//echo "<h2>".$current_file_done_url."</h2>";
			//DEFINE PATH COPY SRC
					$current_file_path_copy_url = str_replace($current_file_name,"path copy\\",$file_url);
					//echo "<h2>".$current_file_path_copy_url."</h2>";
			//DEFINE PATH COPY DEST
					$check_extensions = $_SESSION["check_extensions"];
		/*
					//TRANSFER CURRENT ORIGINAL FILES
						$current_file_src2 = $_SESSION["download_dir"].$file_url;
						if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".$current_file_src2."\" \"".$current_file_dest_url."\"", $execoutput))
						{
							//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
							if(file_exists($current_file_dest))
								{
								//echo "<br> $current_file_dest";
								
								//UPDATE JOB FILE INFORMATION
								$update_jobfile_sql = "
								UPDATE jobfile
								SET `end2_date` = '".$current_date."',
								`jobfile_status_id` = '14'
								WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer2_time` IS NULL)";
								CustomQuery($update_jobfile_sql);
								
								$copy_success = true;
								$original_file_sucess = true;
								array_push($list_of_files_copied, $result["jobfile_id"]);
								}
							//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
						}
						//TRANSFER CURRENT ORIGINAL FILES

			*/

foreach ($check_extensions as $file_ext)
{
//TRANSFER DONE AND PATH COPY FILES
//DONE
$current_file_done_src = $_SESSION["user_dir_local"].$current_file_done_url.$current_file_name_without_ext.".$file_ext";
$current_file_done_src = utf8_decode($current_file_done_src);
$current_file_done_dest_url = $_SESSION["output_dir"].$current_file_done_url;

//CREATE DONE FOLDER
if(file_exists($current_file_done_dest_url)) 	{ /*FOLDER EXISTS*/	} else  {  if (!mkdir($current_file_done_dest_url, 0, true)) { /*FOLDER CREATION FAILED*/ } }

//echo "<br>$current_file_done_src <br>$current_file_done_dest_url";
/*
if($done_file_transferred)
{
//FILE ALREADY TRANSFERRED
}
//TRANSFER FILES IF SOURCE EXISTS
else
{
*/
if(file_exists($current_file_done_src))
{ 
if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".utf8_decode($current_file_done_src)."\" \"".$current_file_done_dest_url."\"", $execoutput_done))
{
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
	if(file_exists($current_file_done_dest_url.$current_file_name_without_ext.".$file_ext"))
		{
		
		//UPDATE JOB FILE INFORMATION
		$update_jobfile_sql = "
		UPDATE rejected_jobfile2
		SET `end2_date` = '".$current_date."',
		`jobfile_status_id` = '14'
		WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer2_time` IS NULL)";
		CustomQuery($update_jobfile_sql);
		
		$copy_success = true;
		$done_file_transferred = true;
		array_push($list_of_files_copied, $result["jobfile_id"]);
		}
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED

}
else
{
//$copy_success = false;
}
}

//}
//TRANSFER FILES IF SOURCE EXISTS

//PATH COPY
$current_file_path_copy_src = $_SESSION["user_dir_local"].$current_file_path_copy_url.$current_file_name_without_ext.".$file_ext";
$current_file_path_copy_src = utf8_decode($current_file_path_copy_src);
$current_file_path_copy_dest_url = $_SESSION["output_dir"].$current_file_path_copy_url;
//echo "<h4>$current_file_path_copy_src</h4>";
//echo "<h4>$current_file_path_copy_dest_url</h4>";

if(file_exists($current_file_path_copy_dest_url))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_path_copy_dest_url, 0, true))
		{
		//FAILED
		}
	}

//PATH COPY Transferred
/*
if($path_copy_file_transferred)
{
}
else
{
*/
if(file_exists($current_file_path_copy_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".$current_file_path_copy_src."\" \"".$current_file_path_copy_dest_url."\"", $execoutput_path_copy))
{
	
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
	if(file_exists($current_file_path_copy_dest_url.$current_file_name_without_ext.".$file_ext"))
		{
			
		//UPDATE JOB FILE INFORMATION
		$update_jobfile_sql = "
		UPDATE rejected_jobfile2
		SET `end2_date` = '".$current_date."',
		`jobfile_status_id` = '14'
		WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer2_time` IS NULL)";
		CustomQuery($update_jobfile_sql);
		
		$copy_success = true;
		$path_copy_file_transferred = true;
		array_push($list_of_files_copied, $result["jobfile_id"]);
		}
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED

}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
//} // PATH COPY Transferred

/*

//ADDITIONAL FILE TRANSFERS
if($additional_files_transferred == true)
{
}
else
{				
				//ADDITIONAL FOLDERS
				$current_file_additional_src_url = str_replace($current_file_name, "additional files\\", $current_file_src);
				$current_file_additional_dest_url = str_replace($current_file_name, "additional files\\", $current_file_dest);

				$current_file_additional_src_url = $_SESSION["output_dir"].$current_file_additional_src_url;
				$current_file_additional_dest_url = $current_file_additional_dest_url;

				if(file_exists($current_file_additional_dest_url))
				{
				//FOLDER EXISTS
				}
				else
				{
					if (!mkdir($current_file_additional_dest_url, 0, true))
					{
					//FAILED
					}
				}

				//COPY ADDITIONAL FILES
				exec("C:/xxcopy/xxcopy.exe /YY /E /SC \"".$current_file_additional_src_url."\" \"".$current_file_additional_dest_url."\"", $execoutput1);
				$additional_files_transferred = true;
}
//ADDITIONAL FILE TRANSFERS

*/




//TRANSFER DONE AND PATH COPY FILES
}

$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");

if($copy_success==true)
{
$result["action_response"] = "Transferred!";
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='4' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='4'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='14' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='14'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='7' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='7'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

/*
//UPDATE TIME TAKEN
$update_jobfile_sql = "
UPDATE jobfile
SET designer_time = TIMEDIFF(end_date, start_date)
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer_time` IS NULL)";
CustomQuery($update_jobfile_sql);
*/
}
else
{
$result["action_response"] = "Transfer Failed!";
}

}	// COPY EACH FILE AND MAKE DB UPDATE	
// ENUMERATE JOBFILES  -------------------------------------------------------------------------------------------------------
$list_of_files_copied = array_unique($list_of_files_copied);
$number_of_files_transferred = COUNT($list_of_files_copied);
//UPDATE AVERAGE TIME 
foreach ($list_of_files_copied as $jobfile_id_added)
{
//UPDATE TIME TAKEN
	$update_jobfile_sql2 = "
	UPDATE rejected_jobfile2
	SET designer2_time = SEC_TO_TIME(TIME_TO_SEC(TIMEDIFF(end2_date, '".$GLOBALS["jobfile_start_date_first"]."'))/".$number_of_files_transferred.")
	WHERE `jobfile_id`='".$jobfile_id_added."' AND (`designer2_time` IS NULL)";
	CustomQuery($update_jobfile_sql2);	
}

//MAKE ALL THE STARTED BUT NOT TRANSFERRED FILES TO NULL START DATE
	$update_jobfile_sql2 = "
	UPDATE rejected_jobfile2 SET start2_date = '0000-00-00 00:00:00',
	end2_date = '0000-00-00 00:00:00', 
	designer2_time = NULL 
	WHERE `designer2_id`='".$_SESSION["user_id"]."' 
	AND `designer2_time` IS NULL
	AND `job_id` = '".$result["job_id"]."'
	";
	CustomQuery($update_jobfile_sql2);
//MAKE ALL THE STARTED BUT NOT TRANSFERRED FILES TO NULL START DATE
	
//UPDATE AVERAGE TIME 
//print_r($list_of_files_copied);
//DESIGNER LEVEL 2 BATCH START BUTTON;
	echo my_json_encode($result);
}
function buttonHandler_Start21($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
				$record = $button->getCurrentRecord();
$result["UserID"] = $_SESSION["UserID"];
$result["file_url"] = $record["file_url"];
$file_url = $result["file_url"];
$result["jobfile_id"] = $record["jobfile_id"];
$result["UserID"] = $_SESSION["UserID"];
$selected_username = $result["UserID"];
$result["user_id"] = $record["designer_id"];
$result["job_id"] = $record["job_id"];
$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$current_date = date("Y-m-d H:i:s");	//GET CURRENT DATE
$null_date = "0000-00-00 00:00";

$current_date = date("Y-m-d H:i:s");	//GET CURRENT DATE
$null_date = "0000-00-00 00:00";

				//COPY FILE TO USER DIRECTORY
				//COPY FILES

					$server_name = $_SESSION["my_server_name"];
					$work_dir = addslashes($work_id."\\");
					$job_dir = addslashes($job_id."\\");

					$current_file_src = $_SESSION["download_dir"].$file_url;
					$current_file_src = utf8_decode($current_file_src);
					$current_file_dest = $_SESSION["user_dir_local"].$file_url;
					//$current_file_dest = utf8_decode($current_file_dest);
					
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					
					$current_file_done_src = str_replace($current_file_name, "done\\".$current_file_name, $current_file_dest);
					$current_file_path_copy_src = str_replace($current_file_name, "path copy\\".$current_file_name, $current_file_dest);
					
				//CREATE DONE AND PATH COPY FOLDER STRUCTURE FOR FILES
				$current_file_withslash = $file_url;
				$current_file_done_dest = str_replace($exclude_from_current_file, $include_to_current_file, $current_file_done_src);
				$current_file_done_dest = utf8_decode($current_file_done_dest);
				$current_file_path_copy_dest = str_replace($exclude_from_current_file, $include_to_current_file, $current_file_path_copy_src);
				$current_file_path_copy_dest = utf8_decode($current_file_path_copy_dest);
				$current_file_done_dest_url = str_replace($current_file_name, "", $current_file_done_dest);
				$current_file_path_copy_dest_url = str_replace($current_file_name, "", $current_file_path_copy_dest);

if(!exec("C:/xxcopy/xxcopy.exe /y /SC \"".$current_file_src."\" \"".$current_file_dest_url."\"", $execoutput))
{
$copy_success = true;

/*
//ADDITIONAL FILE TRANSFERS
if($additional_files_transferred)
{
}
else
{				
				//ADDITIONAL FOLDERS
				$current_file_additional_src_url = str_replace($current_file_name, "additional files\\", $current_file_src);
				$current_file_additional_dest_url = str_replace($current_file_name, "additional files\\", $current_file_dest);

				if(file_exists($current_file_additional_dest_url))
				{
				//FOLDER EXISTS
				}
				else
				{
					if (!mkdir($current_file_additional_dest_url, 0, true))
					{
					//FAILED
					}
				}

				//COPY ADDITIONAL FILES
				exec("C:/xxcopy/xxcopy.exe /YY /E /SC \"".$current_file_additional_src_url."\" \"".$current_file_additional_dest_url."\"", $execoutput);
				$additional_files_transferred = true;
}
//ADDITIONAL FILE TRANSFERS
*/

	/*	//REMOVED DONE FOLDER TO REMOVE CONFUSION
	if(file_exists($current_file_dest_url."\\done"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\Done", 0, true))
		{
		//FAILED
		}
	}
	*/ //REMOVED DONE FOLDER TO REMOVE CONFUSION

	if(file_exists($current_file_dest_url."\\path copy"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\path copy", 0, true))
		{
		//FAILED
		}
	}
}

if ($execoutput[3] == "The source directory must be specified.")
			{
			$error_found = true ;
			$error_found_detail = "Source File Not Found. Please Check Detail<br>File Name: $current_file_name_slashed";
			$copy_success = false;
			}

if($copy_success==true)
{
$result["action_response"] = "Transferred!";

//UPDATE JOB FILE INFORMATION
$update_jobfile_sql = "
UPDATE rejected_jobfile2
SET `start2_date` = '".$current_date."', 
`reject_date` = '".$_SESSION["user_pc_name"]."',
`jobfile_status_id` = '4'
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`start2_date` = '0000-00-00 00:00:00')";
CustomQuery($update_jobfile_sql);

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='4' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='4'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='14' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='14'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='7' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='7'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
}
else
{
$result["action_response"] = "Transfer Failed!";
}

/*				
} // IF NOT FILE IS STILL IN PROGRESS
else
{
$result["action_response"] = "You have not finished last file from Job #".$data["job_id"]."! Finish that before starting another file.";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Finish21($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$record = $button->getCurrentRecord();
$result["UserID"] = $_SESSION["UserID"];
$result["file_url"] = $record["file_url"];
$file_url = $result["file_url"];
$result["jobfile_id"] = $record["jobfile_id"];
$result["UserID"] = $_SESSION["UserID"];
$selected_username = $result["UserID"];
$result["user_id"] = $record["designer_id"];
$result["job_id"] = $record["job_id"];
$result["work_id"] = $record["work_id"];

$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$current_time = date("Y-m-d H:i:s");
$mull_time = date("0000-00-00 00:00:00");
				//COPY FILE TO USER DIRECTORY
				//COPY FILES

					$server_name = $_SESSION["my_server_name"];
					$work_dir = addslashes($work_id."\\");
					$job_dir = addslashes($job_id."\\");

					
					$current_file_src = $_SESSION["user_dir_local"].$file_url;
					$current_file_dest = $_SESSION["output_dir"].$file_url;
		
			//FIND FILE NAME		
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					
					$current_file_ext_find = explode(".", $current_file_name);
					$current_file_ext = $current_file_ext_find[count($current_file_ext_find)-1];

					$current_file_name_without_ext = str_ireplace(".".$current_file_ext,"",$current_file_name);
					
			//DEFINE DONE SRC		
					$current_file_done_url = str_replace($current_file_name,"done\\",$file_url);
					//echo "<h2>".$current_file_done_url."</h2>";
			//DEFINE DONE DEST

			//DEFINE PATH COPY SRC
					$current_file_path_copy_url = str_replace($current_file_name,"path copy\\",$file_url);
					//echo "<h2>".$current_file_path_copy_url."</h2>";

				//ADDITIONAL FOLDERS
				$current_file_additional_src_url = str_replace($current_file_name, "additional files\\", $current_file_src);
				$current_file_additional_dest_url = str_replace($current_file_name, "additional files\\", $current_file_dest);

			//DEFINE PATH COPY DEST
//DO NOT TRANSFER ORIGINAL FILES IN DONE AND PATH COPY TRANSFER					
/*
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_src."\" \"".$current_file_dest_url."\"", $execoutput))
{
$copy_success = true;
	if(file_exists($current_file_dest_url."\\done"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\Done", 0, true))
		{
		//FAILED
		}
	}
	

	if(file_exists($current_file_dest_url."\\path copy"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\path copy", 0, true))
		{
		//FAILED
		}
	}
}
//print_r($execoutput);
//echo "<br>";

if ($execoutput[3] == "The source directory must be specified.")
			{
			$error_found = true ;
			$error_found_detail = "Source File Not Found. Please Check Detail<br>File Name: $current_file_name_slashed";
			$copy_success = false;
			}
*/
//DO NOT TRANSFER ORIGINAL FILES IN DONE AND PATH COPY TRANSFER					

$check_extensions = array("jpg", "psd", "jpeg",  "tif", "png",  "eps", "tiff", "gif");
$done_file_transferred = false;
$path_copy_file_transferred = false;

foreach ($check_extensions as $file_ext)
{
//TRANSFER DONE AND PATH COPY FILES
//DONE
$current_file_done_src = $_SESSION["user_dir_local"].$current_file_done_url.$current_file_name_without_ext.".$file_ext";
$current_file_done_src = utf8_decode($current_file_done_src);
$current_file_done_dest_url = $_SESSION["output_dir"].$current_file_done_url;
$current_file_done_dest = $current_file_done_dest_url.$current_file_name_without_ext.".$file_ext";
$current_file_done_dest = utf8_decode($current_file_done_dest);
//echo "<h4>$current_file_done_src</h4>";
//echo "<h4>$current_file_done_dest_url</h4>";

if($done_file_transferred)
{
}
else
{
if(file_exists($current_file_done_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_done_src."\" \"".$current_file_done_dest_url."\"", $execoutput))
{
	if(file_exists($current_file_done_dest))
	{	//DESTINATION FILE COPIED
	$copy_success = true;
	//$done_file_transferred = true;
	}
}
else
{
$copy_success = false;
}
} //FILE EXISTS, TRANSFER
}

//PATH COPY
$current_file_path_copy_src = $_SESSION["user_dir_local"].$current_file_path_copy_url.$current_file_name_without_ext.".$file_ext";
$current_file_path_copy_src = utf8_decode($current_file_path_copy_src);
$current_file_path_copy_dest_url = $_SESSION["output_dir"].$current_file_path_copy_url;
$current_file_path_copy_dest = $current_file_path_copy_dest_url.$current_file_name_without_ext.".$file_ext";
$current_file_path_copy_dest = utf8_decode($current_file_path_copy_dest);
//echo "<h4>$current_file_path_copy_src</h4>";
//echo "<h4>$current_file_path_copy_dest_url</h4>";

//PATH COPY Transferred
if($path_copy_file_transferred)
{
}
else
{
if(file_exists($current_file_path_copy_src))
{ //FILE EXISTS, TRANSFER

if(!exec("C:/xxcopy/xxcopy.exe /y /SC \"".$current_file_path_copy_src."\" \"".$current_file_path_copy_dest_url."\"", $execoutput))
{
	if(file_exists($current_file_path_copy_dest))
	{
	$copy_success = true;
	//$path_copy_file_transferred = true;
	}
}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
} // PATH COPY Transferred

//TRANSFER DONE AND PATH COPY FILES			
}

$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");

if($copy_success==true)
{

/*
//ADDITIONAL FILE TRANSFERS
if($additional_files_transferred)
{
}
else
{				
				//ADDITIONAL FOLDERS
				$current_file_additional_src_url = str_replace($current_file_name, "additional files\\", $current_file_src);
				$current_file_additional_dest_url = str_replace($current_file_name, "additional files\\", $current_file_dest);

				if(file_exists($current_file_additional_dest_url))
				{
				//FOLDER EXISTS
				}
				else
				{
					if (!mkdir($current_file_additional_dest_url, 0, true))
					{
					//FAILED
					}
				}

				//COPY ADDITIONAL FILES
				exec("C:/xxcopy/xxcopy.exe /YY /E /SC \"".$current_file_additional_src_url."\" \"".$current_file_additional_dest_url."\"", $execoutput);
				$additional_files_transferred = true;
}
//ADDITIONAL FILE TRANSFERS 

*/

$result["action_response"] = "Transferred!";
//UPDATE JOBFILE INFORMATION
/*
//UPDATE JOB FILE INFORMATION
$update_jobfile_sql = "
UPDATE jobfile
SET `start2_date` = '".$current_date."',
`jobfile_status_id` = '4'
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`start2_date` = '".$null_date."')";
CustomQuery($update_jobfile_sql);
*/

//`folder_name` = '".$_SESSION["user_pc_name"]."',
//UPDATE JOB FILE INFORMATION
$update_jobfile_sql = "
UPDATE rejected_jobfile2
SET `end2_date` = '".$current_date."',
`jobfile_status_id` = '14'
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer2_time` IS NULL)";
CustomQuery($update_jobfile_sql);

//UPDATE TIME TAKEN
$update_jobfile_sql = "
UPDATE rejected_jobfile2
SET designer2_time = TIMEDIFF(end2_date, start2_date)
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer2_time` IS NULL)";
CustomQuery($update_jobfile_sql);

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='4' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='4'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='14' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='14'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='7' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='7'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION

}
else
{
$result["action_response"] = "Transfer Failed!";
};
	echo my_json_encode($result);
}
function buttonHandler_Start_Job1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
				//DESIGNER LEVEL 2 BATCH START BUTTON

			$record = $button->getCurrentRecord();
$result["UserID"] = $_SESSION["UserID"];
$result["file_url"] = $record["file_url"];
$file_url = $result["file_url"];
$result["jobfile_id"] = $record["jobfile_id"];
$result["UserID"] = $_SESSION["UserID"];
$selected_username = $result["UserID"];
$result["user_id"] = $record["designer_id"];
$result["job_id"] = $record["job_id"];
$result["work_id"] = $record["work_id"];

$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$current_time = date("Y-m-d H:i:s");
$mull_time = date("0000-00-00 00:00:00");
				//COPY FILE TO USER DIRECTORY
				//COPY FILES

$server_name = $_SESSION["my_server_name"];
$work_dir = addslashes($work_id."\\");
$job_dir = addslashes($job_id."\\");

	//CUSTOM DATABASE CONNECTION
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
	//CUSTOM DATABASE CONNECTION
	
	//CUSTOM DATABASE QUERY
	$select_jobfile_sql = "
			Select * from rejected_jobfile2
			WHERE `work_id`='".$result["work_id"]."' AND `qc_id`='".$_SESSION["user_id"]."' AND qc_time IS NULL
			";

	$select_jobfile_result = mysqli_query($mysqlilink, $select_jobfile_sql);
	$number_of_jobs = mysqli_num_rows($select_jobfile_result);
	//CUSTOM DATABASE QUERY
	
	//$list_jobfile_result = mysqli_fetch_array($select_jobfile_result, MYSQLI_BOTH);
	//print_r($list_jobfile_result);
	
$list_of_files_copied = array();
$done_file_transferred = false;
$path_copy_file_transferred = false;
$original_file_sucess = false;

// ENUMERATE JOBFILES  -------------------------------------------------------------------------------------------------------
	while($list_jobfile_result = mysqli_fetch_array($select_jobfile_result, MYSQLI_BOTH))
	{	// COPY EACH FILE AND MAKE DB UPDATE
	$file_url = $list_jobfile_result["file_url"];
	$result["file_url"] = $list_jobfile_result["file_url"];
	
	$jobfile_id = $list_jobfile_result["jobfile_id"];
	$result["jobfile_id"] = $list_jobfile_result["jobfile_id"];
	//echo "$jobfile_id  $file_url";
	
					$current_file_src = $_SESSION["output_local"].$file_url;
					$current_file_dest = $_SESSION["user_dir_local"].$file_url;
			//FIND FILE NAME		
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					$current_file_ext_find = explode(".", $current_file_name);
					$current_file_ext = $current_file_ext_find[count($current_file_ext_find)-1];
					$current_file_name_without_ext = str_ireplace(".".$current_file_ext,"",$current_file_name);
			//DEFINE DONE SRC		
					$current_file_done_url = str_replace($current_file_name,"done\\",$file_url);
					//echo "<h2>".$current_file_done_url."</h2>";
			//DEFINE PATH COPY SRC
					$current_file_path_copy_url = str_replace($current_file_name,"path copy\\",$file_url);
					//echo "<h2>".$current_file_path_copy_url."</h2>";
			//DEFINE PATH COPY DEST
					$check_extensions = $_SESSION["check_extensions"];


//SKIP COPYING ORIGINAL FILE FOR QC
/*
					//TRANSFER CURRENT ORIGINAL FILES
						$current_file_src2 = $_SESSION["download_dir"].$file_url;
						if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".$current_file_src2."\" \"".$current_file_dest_url."\"", $execoutput))
						{
							//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
							if(file_exists($current_file_dest))
								{
								//echo "<br> $current_file_dest";
								
								//reject_date = pc number
								$update_jobfile_sql = "
								UPDATE jobfile
								SET `start2_date` = '".$current_time."',
								`reject_date` = '".$_SESSION["user_pc_name"]."',
								`jobfile_status_id` = '4'
								WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`end2_date`='0000-00-00 00:00:00')";
								CustomQuery($update_jobfile_sql);
								
								$copy_success = true;
								$original_file_sucess = true;
								array_push($list_of_files_copied, $result["jobfile_id"]);
								}
							//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
						}
						//TRANSFER CURRENT ORIGINAL FILES

*/
//SKIP COPYING ORIGINAL FILE FOR QC

foreach ($check_extensions as $file_ext)
{
//TRANSFER DONE AND PATH COPY FILES
//DONE
$current_file_done_src = $_SESSION["output_dir"].$current_file_done_url.$current_file_name_without_ext.".$file_ext";
$current_file_done_src = utf8_decode($current_file_done_src);
$current_file_done_dest_url = $_SESSION["user_dir_local"].$current_file_done_url;

//CREATE DONE FOLDER
if(file_exists($current_file_done_dest_url)) 	{ /*FOLDER EXISTS*/	} else  {  if (!mkdir($current_file_done_dest_url, 0, true)) { /*FOLDER CREATION FAILED*/ } }

//echo "<br>$current_file_done_src <br>$current_file_done_dest_url";
/*
if($done_file_transferred)
{
//FILE ALREADY TRANSFERRED
}
//TRANSFER FILES IF SOURCE EXISTS
else
{
*/
if(file_exists($current_file_done_src))
{ 
if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".utf8_decode($current_file_done_src)."\" \"".$current_file_done_dest_url."\"", $execoutput_done))
{
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
	if(file_exists($current_file_done_dest_url.$current_file_name_without_ext.".$file_ext"))
		{
		//`reject_reason` = '".$_SESSION["user_pc_name"]."',
		//reject_date = pc number
		$update_jobfile_sql = "
		UPDATE rejected_jobfile2
		SET `qcstart_date` = '".$current_time."',
		`jobfile_status_id` = '5'
		WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`qcend_date`='0000-00-00 00:00:00')";
		CustomQuery($update_jobfile_sql);
		
		$copy_success = true;
		$done_file_transferred = true;
		array_push($list_of_files_copied, $result["jobfile_id"]);
		}
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED

}
else
{
//$copy_success = false;
}
}

//}
//TRANSFER FILES IF SOURCE EXISTS

//PATH COPY
$current_file_path_copy_src = $_SESSION["output_dir"].$current_file_path_copy_url.$current_file_name_without_ext.".$file_ext";
$current_file_path_copy_src = utf8_decode($current_file_path_copy_src);
$current_file_path_copy_dest_url = $_SESSION["user_dir_local"].$current_file_path_copy_url;
//echo "<h4>$current_file_path_copy_src</h4>";
//echo "<h4>$current_file_path_copy_dest_url</h4>";

if(file_exists($current_file_path_copy_dest_url))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_path_copy_dest_url, 0, true))
		{
		//FAILED
		}
	}

//PATH COPY Transferred
/*
if($path_copy_file_transferred)
{
}
else
{
*/
if(file_exists($current_file_path_copy_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".$current_file_path_copy_src."\" \"".$current_file_path_copy_dest_url."\"", $execoutput_path_copy))
{
	
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
	if(file_exists($current_file_path_copy_dest_url.$current_file_name_without_ext.".$file_ext"))
		{
			//`reject_reason` = '".$_SESSION["user_pc_name"]."',
		$update_jobfile_sql = "
		UPDATE rejected_jobfile2
		SET `qcstart_date` = '".$current_time."',
		`jobfile_status_id` = '5'
		WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`qcend_date`='0000-00-00 00:00:00')";
		CustomQuery($update_jobfile_sql);
		
		$copy_success = true;
		$path_copy_file_transferred = true;
		array_push($list_of_files_copied, $result["jobfile_id"]);
		}
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED

}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
//} // PATH COPY Transferred

/*

//ADDITIONAL FILE TRANSFERS
if($additional_files_transferred == true)
{
}
else
{				
				//ADDITIONAL FOLDERS
				$current_file_additional_src_url = str_replace($current_file_name, "additional files\\", $current_file_src);
				$current_file_additional_dest_url = str_replace($current_file_name, "additional files\\", $current_file_dest);

				$current_file_additional_src_url = $_SESSION["output_dir"].$current_file_additional_src_url;
				$current_file_additional_dest_url = $current_file_additional_dest_url;

				if(file_exists($current_file_additional_dest_url))
				{
				//FOLDER EXISTS
				}
				else
				{
					if (!mkdir($current_file_additional_dest_url, 0, true))
					{
					//FAILED
					}
				}

				//COPY ADDITIONAL FILES
				exec("C:/xxcopy/xxcopy.exe /YY /E /SC \"".$current_file_additional_src_url."\" \"".$current_file_additional_dest_url."\"", $execoutput1);
				$additional_files_transferred = true;
}
//ADDITIONAL FILE TRANSFERS

*/




//TRANSFER DONE AND PATH COPY FILES
}

$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");

if($copy_success==true)
{
$result["action_response"] = "Transferred!";
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='5' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='5'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='14' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='14'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='7' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='7'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

/*
//UPDATE TIME TAKEN
$update_jobfile_sql = "
UPDATE jobfile
SET designer_time = TIMEDIFF(end_date, start_date)
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer_time` IS NULL)";
CustomQuery($update_jobfile_sql);
*/
}
else
{
$result["action_response"] = "Transfer Failed!";
}


}	// COPY EACH FILE AND MAKE DB UPDATE	
// ENUMERATE JOBFILES  -------------------------------------------------------------------------------------------------------



//print_r($list_of_files_copied);
//DESIGNER LEVEL 2 BATCH START BUTTON;;;
;
	echo my_json_encode($result);
}
function buttonHandler_Reject_Job1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	echo my_json_encode($result);
}
function buttonHandler_Finish_Job2($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
				//DESIGNER LEVEL 2 BATCH FINISH BUTTON

			$record = $button->getCurrentRecord();
$result["UserID"] = $_SESSION["UserID"];
$result["file_url"] = $record["file_url"];
$file_url = $result["file_url"];
$result["jobfile_id"] = $record["jobfile_id"];
$result["UserID"] = $_SESSION["UserID"];
$selected_username = $result["UserID"];
$result["user_id"] = $record["designer_id"];
$result["job_id"] = $record["job_id"];
$result["work_id"] = $record["work_id"];

$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");
				//COPY FILE TO USER DIRECTORY
				//COPY FILES

$server_name = $_SESSION["my_server_name"];
$work_dir = addslashes($work_id."\\");
$job_dir = addslashes($job_id."\\");

	//CUSTOM DATABASE CONNECTION
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
	//CUSTOM DATABASE CONNECTION
	
	//CUSTOM DATABASE QUERY
	$select_jobfile_sql = "
			Select * from rejected_jobfile2
			WHERE `work_id`='".$result["work_id"]."' AND `qc_id`='".$_SESSION["user_id"]."' AND qc_time IS NULL
			";

	$select_jobfile_result = mysqli_query($mysqlilink, $select_jobfile_sql);
	$number_of_jobs = mysqli_num_rows($select_jobfile_result);
	//CUSTOM DATABASE QUERY
	
	//$list_jobfile_result = mysqli_fetch_array($select_jobfile_result, MYSQLI_BOTH);
	//print_r($list_jobfile_result);
	
$list_of_files_copied = array();
$done_file_transferred = false;
$path_copy_file_transferred = false;
$original_file_sucess = false;

// ENUMERATE JOBFILES  -------------------------------------------------------------------------------------------------------
	while($list_jobfile_result = mysqli_fetch_array($select_jobfile_result, MYSQLI_BOTH))
	{	// COPY EACH FILE AND MAKE DB UPDATE
	$file_url = $list_jobfile_result["file_url"];
	$result["file_url"] = $list_jobfile_result["file_url"];
	
	$jobfile_id = $list_jobfile_result["jobfile_id"];
	$result["jobfile_id"] = $list_jobfile_result["jobfile_id"];
	//echo "$jobfile_id  $file_url";

		$GLOBALS["jobfile_start_date_first"] = $list_jobfile_result["qcstart_date"];
	
					$current_file_src = $_SESSION["user_dir_local"].$file_url;
					$current_file_dest = $_SESSION["upload_dir"].$file_url;
			//FIND FILE NAME		
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					$current_file_ext_find = explode(".", $current_file_name);
					$current_file_ext = $current_file_ext_find[count($current_file_ext_find)-1];
					$current_file_name_without_ext = str_ireplace(".".$current_file_ext,"",$current_file_name);
			//DEFINE DONE SRC		
					$current_file_done_url = str_replace($current_file_name,"done\\",$file_url);
					//echo "<h2>".$current_file_done_url."</h2>";
			//DEFINE PATH COPY SRC
					$current_file_path_copy_url = str_replace($current_file_name,"path copy\\",$file_url);
					//echo "<h2>".$current_file_path_copy_url."</h2>";
			//DEFINE PATH COPY DEST
					$check_extensions = $_SESSION["check_extensions"];
		/*
					//TRANSFER CURRENT ORIGINAL FILES
						$current_file_src2 = $_SESSION["download_dir"].$file_url;
						if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".$current_file_src2."\" \"".$current_file_dest_url."\"", $execoutput))
						{
							//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
							if(file_exists($current_file_dest))
								{
								//echo "<br> $current_file_dest";
								
								//UPDATE JOB FILE INFORMATION
								$update_jobfile_sql = "
								UPDATE jobfile
								SET `end2_date` = '".$current_date."',
								`jobfile_status_id` = '14'
								WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer2_time` IS NULL)";
								CustomQuery($update_jobfile_sql);
								
								$copy_success = true;
								$original_file_sucess = true;
								array_push($list_of_files_copied, $result["jobfile_id"]);
								}
							//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
						}
						//TRANSFER CURRENT ORIGINAL FILES

			*/

foreach ($check_extensions as $file_ext)
{
//TRANSFER DONE AND PATH COPY FILES
//DONE
$current_file_done_src = $_SESSION["user_dir_local"].$current_file_done_url.$current_file_name_without_ext.".$file_ext";
$current_file_done_src = utf8_decode($current_file_done_src);
$current_file_done_dest_url = $_SESSION["upload_dir"].$current_file_done_url;

//CREATE DONE FOLDER
if(file_exists($current_file_done_dest_url)) 	{ /*FOLDER EXISTS*/	} else  {  if (!mkdir($current_file_done_dest_url, 0, true)) { /*FOLDER CREATION FAILED*/ } }

//echo "<br>$current_file_done_src <br>$current_file_done_dest_url";
/*
if($done_file_transferred)
{
//FILE ALREADY TRANSFERRED
}
//TRANSFER FILES IF SOURCE EXISTS
else
{
*/
if(file_exists($current_file_done_src))
{ 
if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".utf8_decode($current_file_done_src)."\" \"".$current_file_done_dest_url."\"", $execoutput_done))
{
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
	if(file_exists($current_file_done_dest_url.$current_file_name_without_ext.".$file_ext"))
		{
		
		//UPDATE JOB FILE INFORMATION
		$update_jobfile_sql = "
		UPDATE rejected_jobfile2
		SET `qcend_date` = '".$current_date."',
		`jobfile_status_id` = '7'
		WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`qc_time` IS NULL)";
		CustomQuery($update_jobfile_sql);
		
		$copy_success = true;
		$done_file_transferred = true;
		array_push($list_of_files_copied, $result["jobfile_id"]);
		}
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED

}
else
{
//$copy_success = false;
}
}

//}
//TRANSFER FILES IF SOURCE EXISTS

//PATH COPY
$current_file_path_copy_src = $_SESSION["user_dir_local"].$current_file_path_copy_url.$current_file_name_without_ext.".$file_ext";
$current_file_path_copy_src = utf8_decode($current_file_path_copy_src);
$current_file_path_copy_dest_url = $_SESSION["upload_dir"].$current_file_path_copy_url;
//echo "<h4>$current_file_path_copy_src</h4>";
//echo "<h4>$current_file_path_copy_dest_url</h4>";

if(file_exists($current_file_path_copy_dest_url))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_path_copy_dest_url, 0, true))
		{
		//FAILED
		}
	}

//PATH COPY Transferred
/*
if($path_copy_file_transferred)
{
}
else
{
*/
if(file_exists($current_file_path_copy_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".$current_file_path_copy_src."\" \"".$current_file_path_copy_dest_url."\"", $execoutput_path_copy))
{
	
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
	if(file_exists($current_file_path_copy_dest_url.$current_file_name_without_ext.".$file_ext"))
		{
			
		//UPDATE JOB FILE INFORMATION
		$update_jobfile_sql = "
		UPDATE rejected_jobfile2
		SET `qcend_date` = '".$current_date."',
		`jobfile_status_id` = '7'
		WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`qc_time` IS NULL)";
		CustomQuery($update_jobfile_sql);
		
		$copy_success = true;
		$path_copy_file_transferred = true;
		array_push($list_of_files_copied, $result["jobfile_id"]);
		}
	//UPDATE JOB FILE INFORMATION ONLY IF FILES ARE TRANSFERRED

}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
//} // PATH COPY Transferred

/*

//ADDITIONAL FILE TRANSFERS
if($additional_files_transferred == true)
{
}
else
{				
				//ADDITIONAL FOLDERS
				$current_file_additional_src_url = str_replace($current_file_name, "additional files\\", $current_file_src);
				$current_file_additional_dest_url = str_replace($current_file_name, "additional files\\", $current_file_dest);

				$current_file_additional_src_url = $_SESSION["output_dir"].$current_file_additional_src_url;
				$current_file_additional_dest_url = $current_file_additional_dest_url;

				if(file_exists($current_file_additional_dest_url))
				{
				//FOLDER EXISTS
				}
				else
				{
					if (!mkdir($current_file_additional_dest_url, 0, true))
					{
					//FAILED
					}
				}

				//COPY ADDITIONAL FILES
				exec("C:/xxcopy/xxcopy.exe /YY /E /SC \"".$current_file_additional_src_url."\" \"".$current_file_additional_dest_url."\"", $execoutput1);
				$additional_files_transferred = true;
}
//ADDITIONAL FILE TRANSFERS

*/




//TRANSFER DONE AND PATH COPY FILES
}

$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");

if($copy_success==true)
{
$result["action_response"] = "Transferred!";
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='7' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='7'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='14' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='14'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

/*
//UPDATE TIME TAKEN
$update_jobfile_sql = "
UPDATE jobfile
SET designer_time = TIMEDIFF(end_date, start_date)
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer_time` IS NULL)";
CustomQuery($update_jobfile_sql);
*/
}
else
{
$result["action_response"] = "Transfer Failed!";
}

}	// COPY EACH FILE AND MAKE DB UPDATE	
// ENUMERATE JOBFILES  -------------------------------------------------------------------------------------------------------
$list_of_files_copied = array_unique($list_of_files_copied);
$number_of_files_transferred = COUNT($list_of_files_copied);
//UPDATE AVERAGE TIME 
foreach ($list_of_files_copied as $jobfile_id_added)
{
//UPDATE TIME TAKEN
	$update_jobfile_sql2 = "
	UPDATE rejected_jobfile2
	SET qc_time = SEC_TO_TIME(TIME_TO_SEC(TIMEDIFF(qcend_date, '".$GLOBALS["jobfile_start_date_first"]."'))/".$number_of_files_transferred.")
	WHERE `jobfile_id`='".$jobfile_id_added."' AND (`qc_time` IS NULL)";
	CustomQuery($update_jobfile_sql2);	
}

//MAKE ALL THE STARTED BUT NOT TRANSFERRED FILES TO NULL START DATE
	$update_jobfile_sql2 = "
	UPDATE rejected_jobfile2 SET qcstart_date = '0000-00-00 00:00:00',
	qcend_date = '0000-00-00 00:00:00', 
	qc_time = NULL 
	WHERE `qc_id`='".$_SESSION["user_id"]."' 
	AND `qc_time` IS NULL
	AND `job_id` = '".$result["job_id"]."'
	";
	CustomQuery($update_jobfile_sql2);
//MAKE ALL THE STARTED BUT NOT TRANSFERRED FILES TO NULL START DATE
	
//UPDATE AVERAGE TIME 
//print_r($list_of_files_copied);
//DESIGNER LEVEL 2 BATCH START BUTTON;
	echo my_json_encode($result);
}
function buttonHandler_Start11($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
				$record = $button->getCurrentRecord();
$result["UserID"] = $_SESSION["UserID"];
$result["file_url"] = $record["file_url"];
$file_url = $result["file_url"];
$result["jobfile_id"] = $record["jobfile_id"];
$result["UserID"] = $_SESSION["UserID"];
$selected_username = $result["UserID"];
$result["user_id"] = $record["designer_id"];
$result["job_id"] = $record["job_id"];
$result["work_id"] = $record["work_id"];

$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$current_time = date("Y-m-d H:i:s");
$mull_time = date("0000-00-00 00:00:00");
				//COPY FILE TO USER DIRECTORY
				//COPY FILES

					$server_name = $_SESSION["my_server_name"];
					$work_dir = addslashes($work_id."\\");
					$job_dir = addslashes($job_id."\\");

					
					$current_file_src = $_SESSION["output_local"].$file_url;
					$current_file_dest = $_SESSION["user_dir_local"].$file_url;
		
			//FIND FILE NAME		
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					
					$current_file_ext_find = explode(".", $current_file_name);
					$current_file_ext = $current_file_ext_find[count($current_file_ext_find)-1];

					$current_file_name_without_ext = str_ireplace(".".$current_file_ext,"",$current_file_name);
					
			//DEFINE DONE SRC		
					$current_file_done_url = str_replace($current_file_name,"done\\",$file_url);
					//echo "<h2>".$current_file_done_url."</h2>";
			//DEFINE DONE DEST

			//DEFINE PATH COPY SRC
					$current_file_path_copy_url = str_replace($current_file_name,"path copy\\",$file_url);
					//echo "<h2>".$current_file_path_copy_url."</h2>";
			//DEFINE PATH COPY DEST
//DO NOT TRANSFER ORIGINAL FILES IN DONE AND PATH COPY TRANSFER					
/*
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_src."\" \"".$current_file_dest_url."\"", $execoutput))
{
$copy_success = true;
	if(file_exists($current_file_dest_url."\\done"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\Done", 0, true))
		{
		//FAILED
		}
	}
	

	if(file_exists($current_file_dest_url."\\path copy"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\path copy", 0, true))
		{
		//FAILED
		}
	}
}
//print_r($execoutput);
//echo "<br>";

if ($execoutput[3] == "The source directory must be specified.")
			{
			$error_found = true ;
			$error_found_detail = "Source File Not Found. Please Check Detail<br>File Name: $current_file_name_slashed";
			$copy_success = false;
			}
*/
//DO NOT TRANSFER ORIGINAL FILES IN DONE AND PATH COPY TRANSFER					

$check_extensions = array("jpg", "psd", "jpeg",  "tif", "png",  "eps", "tiff", "gif");
$done_file_transferred = false;
$path_copy_file_transferred = false;

foreach ($check_extensions as $file_ext)
{
//TRANSFER DONE AND PATH COPY FILES
//DONE
$current_file_done_src = $_SESSION["output_dir"].$current_file_done_url.$current_file_name_without_ext.".$file_ext";
$current_file_done_dest_url = $_SESSION["user_dir_local"].$current_file_done_url;
//echo "<h4>$current_file_done_src</h4>";
//echo "<h4>$current_file_done_dest_url</h4>";

if($done_file_transferred)
{
}
else
{
if(file_exists($current_file_done_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_done_src."\" \"".$current_file_done_dest_url."\"", $execoutput))
{
$copy_success = true;
$done_file_transferred = true;
}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
}

//PATH COPY
$current_file_path_copy_src = $_SESSION["output_dir"].$current_file_path_copy_url.$current_file_name_without_ext.".$file_ext";
$current_file_path_copy_dest_url = $_SESSION["user_dir_local"].$current_file_path_copy_url;
//echo "<h4>$current_file_path_copy_src</h4>";
//echo "<h4>$current_file_path_copy_dest_url</h4>";

//PATH COPY Transferred
if($path_copy_file_transferred)
{
}
else
{
if(file_exists($current_file_path_copy_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_path_copy_src."\" \"".$current_file_path_copy_dest_url."\"", $execoutput))
{
$copy_success = true;
$path_copy_file_transferred = true;
}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
} // PATH COPY Transferred

//TRANSFER DONE AND PATH COPY FILES			
}

$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");

if($copy_success==true)
{
$result["action_response"] = "Transferred!";
//UPDATE rejected_jobfile2 INFORMATION

//UPDATE JOB FILE INFORMATION
//`reject_reason` = '".$_SESSION["user_pc_name"]."',
$update_jobfile_sql = "
UPDATE rejected_jobfile2
SET `qcstart_date` = '".$current_date."',
`jobfile_status_id` = '5'
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`qc_time` IS NULL)";
CustomQuery($update_jobfile_sql);

/*
//UPDATE TIME TAKEN
$update_jobfile_sql = "
UPDATE rejected_jobfile2
SET designer_time = TIMEDIFF(end_date, start_date)
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer_time` IS NULL)";
CustomQuery($update_jobfile_sql);
*/
}
else
{
$result["action_response"] = "Transfer Failed!";
}

//UPDATE JOB FILE INFORMATION
$update_jobfile_sql = "
UPDATE rejected_jobfile2
SET `start_date` = '".$current_date."',
`jobfile_status_id` = '4'
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`start_date` = '".$null_date."')";
CustomQuery($update_jobfile_sql);

//CHECKING rejected_jobfile2 STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='4' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='4'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

//CHECKING rejected_jobfile2 STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='14' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='14'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING rejected_jobfile2 STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='7' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='7'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING rejected_jobfile2 STATUS AND UPDATE FILE INFORMATION;
	echo my_json_encode($result);
}
function buttonHandler_Reject11($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	
$i = "";
while($allrecords = $button->getNextSelectedRecord())
{
$selected_work_id = $allrecords["work_id"];
$selected_job_id = $allrecords["job_id"];
$selected_pdf_id = $allrecords["project_id"];
$selected_designer_id = $allrecords["designer_id"];
$selected_designer2_id = $allrecords["designer2_id"];
$selected_qc_id = $allrecords["qc_id"];

if($i == "")
{
$i = $allrecords["jobfile_id"];
}
else
{
$i = $i.",".$allrecords["jobfile_id"];
}
}

$result["work_id"] = $selected_work_id;
$result["job_id"] = $selected_job_id;
$result["pdf_id"] = $selected_pdf_id;
$result["designer_id"] = $selected_designer_id;
$result["designer2_id"] = $selected_designer2_id;
$result["qc_id"] = $selected_qc_id;

$result["file_list"] = $i;

$result["my_server_share"] = $_SESSION["my_server_share"];;
	echo my_json_encode($result);
}
function buttonHandler_Finish11($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$record = $button->getCurrentRecord();
$result["UserID"] = $_SESSION["UserID"];
$result["file_url"] = $record["file_url"];
$file_url = $result["file_url"];
$result["jobfile_id"] = $record["jobfile_id"];
$result["UserID"] = $_SESSION["UserID"];
$selected_username = $result["UserID"];
$result["user_id"] = $record["designer_id"];
$result["job_id"] = $record["job_id"];
$result["work_id"] = $record["work_id"];

$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$current_time = date("Y-m-d H:i:s");
$mull_time = date("0000-00-00 00:00:00");
				//COPY FILE TO USER DIRECTORY
				//COPY FILES

					$server_name = $_SESSION["my_server_name"];
					$work_dir = addslashes($work_id."\\");
					$job_dir = addslashes($job_id."\\");

					
					$current_file_src = $_SESSION["user_dir_local"].$file_url;
					$current_file_dest = $_SESSION["upload_dir"].$file_url;
		
			//FIND FILE NAME		
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					
					$current_file_ext_find = explode(".", $current_file_name);
					$current_file_ext = $current_file_ext_find[count($current_file_ext_find)-1];

					$current_file_name_without_ext = str_ireplace(".".$current_file_ext,"",$current_file_name);
					
			//DEFINE DONE SRC		
					$current_file_done_url = str_replace($current_file_name,"done\\",$file_url);
					//echo "<h2>".$current_file_done_url."</h2>";
			//DEFINE DONE DEST

			//DEFINE PATH COPY SRC
					$current_file_path_copy_url = str_replace($current_file_name,"path copy\\",$file_url);
					//echo "<h2>".$current_file_path_copy_url."</h2>";
			//DEFINE PATH COPY DEST
//DO NOT TRANSFER ORIGINAL FILES IN DONE AND PATH COPY TRANSFER					
/*
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_src."\" \"".$current_file_dest_url."\"", $execoutput))
{
$copy_success = true;
	if(file_exists($current_file_dest_url."\\done"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\Done", 0, true))
		{
		//FAILED
		}
	}
	

	if(file_exists($current_file_dest_url."\\path copy"))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_dest_url."\\path copy", 0, true))
		{
		//FAILED
		}
	}
}
//print_r($execoutput);
//echo "<br>";

if ($execoutput[3] == "The source directory must be specified.")
			{
			$error_found = true ;
			$error_found_detail = "Source File Not Found. Please Check Detail<br>File Name: $current_file_name_slashed";
			$copy_success = false;
			}
*/
//DO NOT TRANSFER ORIGINAL FILES IN DONE AND PATH COPY TRANSFER					

$check_extensions = array("jpg", "psd", "jpeg",  "tif", "png",  "eps", "tiff", "gif");
$done_file_transferred = false;
$path_copy_file_transferred = false;

foreach ($check_extensions as $file_ext)
{
//TRANSFER DONE AND PATH COPY FILES
//DONE
$current_file_done_src = $_SESSION["user_dir_local"].$current_file_done_url.$current_file_name_without_ext.".$file_ext";
$current_file_done_dest_url = $_SESSION["upload_dir"].$current_file_done_url;
//echo "<h4>$current_file_done_src</h4>";
//echo "<h4>$current_file_done_dest_url</h4>";

if($done_file_transferred)
{
}
else
{
if(file_exists($current_file_done_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_done_src."\" \"".$current_file_done_dest_url."\"", $execoutput))
{
$copy_success = true;
$done_file_transferred = true;
}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
}

//PATH COPY
$current_file_path_copy_src = $_SESSION["user_dir_local"].$current_file_path_copy_url.$current_file_name_without_ext.".$file_ext";
$current_file_path_copy_dest_url = $_SESSION["upload_dir"].$current_file_path_copy_url;
//echo "<h4>$current_file_path_copy_src</h4>";
//echo "<h4>$current_file_path_copy_dest_url</h4>";

//PATH COPY Transferred
if($path_copy_file_transferred)
{
}
else
{
if(file_exists($current_file_path_copy_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /y /SC /PB \"".$current_file_path_copy_src."\" \"".$current_file_path_copy_dest_url."\"", $execoutput))
{
$copy_success = true;
$path_copy_file_transferred = true;
}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
} // PATH COPY Transferred

//TRANSFER DONE AND PATH COPY FILES			
}

$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");

if($copy_success==true)
{
$result["action_response"] = "Transferred!";
//UPDATE JOBFILE INFORMATION

//UPDATE JOB FILE INFORMATION
$update_jobfile_sql = "
UPDATE rejected_jobfile2
SET `qcend_date` = '".$current_date."',
`jobfile_status_id` = '7'
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`qc_time` IS NULL)";
CustomQuery($update_jobfile_sql);

//UPDATE TIME TAKEN
$update_jobfile_sql = "
UPDATE rejected_jobfile2
SET qc_time = TIMEDIFF(qcend_date, qcstart_date)
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`qc_time` IS NULL)";
CustomQuery($update_jobfile_sql);

}
else
{
$result["action_response"] = "Transfer Failed!";
}

//UPDATE JOB FILE INFORMATION
$update_jobfile_sql = "
UPDATE rejected_jobfile2
SET `start2_date` = '".$current_date."',
`jobfile_status_id` = '4'
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`start2_date` = '".$null_date."')";
CustomQuery($update_jobfile_sql);

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='4' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='4'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='14' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='14'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='7' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='7'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING JOBFILE STATUS AND UPDATE FILE INFORMATION

;;
	echo my_json_encode($result);
}
function buttonHandler_Action3_label2($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	/*
if($params["confirmation"] == "ContinueProcess")
{ //CONTINUE NOTIFYING
*/
$result["my_server_share"] = $_SESSION["my_server_share"];
	while($record = $button->getCurrentRecord())
	{
	if ($record["jobstatus_id"] == 7)
	{
		$current_time = date("Y-m-d H:i:s");
		$uploaded_by = $_SESSION["user_id"];
		$uploaded_date = $current_time;
		$sql = "update rejected_job set `jobstatus_id`='8', `uploader_id`='".$uploaded_by."', `upload_date`='".$current_time."' where work_id=" .$record["work_id"];
		CustomQuery($sql);
	break;
	}
	if ($record["jobstatus_id"] == 8)
	{
		$current_time = date("Y-m-d H:i:s");
		$notified_by = $_SESSION["user_id"];
		$notify_date = $current_time;
		$sql = "update rejected_job set `jobstatus_id`='9', `notifer_id`='".$notified_by."', `notify_date`='".$notify_date."' where work_id=" .$record["work_id"];

			//REMOVE DIRECTORYFROM OUTPUT
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["output_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["output_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);

			//REMOVE DIRECTORYFROM DOWNLOAD
			$work_id = $record["work_id"];
			$dir_to_remove = $_SESSION["download_dir"].$record["work_id"]."\\";

			$dir_to_move_to = $_SESSION["download_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_remove\" \"$dir_to_move_to\"", $outputbb);
			//exec("C:/xxcopy/xxcopy.exe /RMDIR /YY /PD0 /WD0 \"$dir_to_move_to\"", $outputbb);
			//print_r($outputbb);
			
			
//			if(file_exists($dir_to_move))
			//{
			$dir_to_move = $_SESSION["upload_dir"].$record["work_id"]."\\";
			$dir_to_move_to = $_SESSION["upload_dir"]."Notified Jobs\\".$record["work_id"]."\\";
			//echo '<br>'.$dir_to_move.'<br>';
			exec("C:/xxcopy/xxcopy.exe /RC /S /H /R /YY /PD0 /ED0 /WD0 \"$dir_to_move\" \"$dir_to_move_to\"", $outputbb1);
			//print_r($outputbb1);
			//}


			//print_r($outputbb);
			//REMOVE DIRECTORYFROM OUTPUT

		CustomQuery($sql);

//UPDATE rejected_jobfile2 INFORMATION OF NOTIFIED rejected_job
$jobfile_update_sql = "UPDATE 	rejected_jobfile2 LEFT JOIN rejected_job ON rejected_jobfile2.job_id = rejected_job.job_id SET rejected_jobfile2.jobfile_status_id = 9 WHERE 	rejected_job.jobstatus_id = 9 	AND rejected_job.job_id = '".$record["work_id"]."'";

		CustomQuery($jobfile_update_sql);

//UPDATE rejected_jobfile2 INFORMATION OF NOTIFIED rejected_job


	break;
	}

	}

//CONTINUE NOTIFYING
/*
}
else
{
$result["confirmation"] = "Process Cancelled";
}
*/;
	echo my_json_encode($result);
}
function buttonHandler_Start_Job33($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
				//DESIGNER LEVEL 2 BATCH START BUTTON

			$record = $button->getCurrentRecord();
$result["UserID"] = $_SESSION["UserID"];
$result["file_url"] = $record["file_url"];
$file_url = $result["file_url"];
$result["jobfile_id"] = $record["jobfile_id"];
$result["UserID"] = $_SESSION["UserID"];
$selected_username = $result["UserID"];
$result["user_id"] = $record["designer_id"];
$result["job_id"] = $record["job_id"];
$result["work_id"] = $record["work_id"];

$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];
$current_time = date("Y-m-d H:i:s");
$mull_time = date("0000-00-00 00:00:00");
				//COPY FILE TO USER DIRECTORY
				//COPY FILES

$server_name = $_SESSION["my_server_name"];
$work_dir = addslashes($work_id."\\");
$job_dir = addslashes($job_id."\\");

	//CUSTOM DATABASE CONNECTION
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
	//CUSTOM DATABASE CONNECTION
	
	//CUSTOM DATABASE QUERY
	$select_jobfile_sql = "
			Select * from rejected_jobfile2
			WHERE `work_id`='".$result["work_id"]."' AND `designer2_id`='".$_SESSION["user_id"]."' AND designer2_time IS NULL
			";

	$select_jobfile_result = mysqli_query($mysqlilink, $select_jobfile_sql);
	$number_of_jobs = mysqli_num_rows($select_jobfile_result);
	//CUSTOM DATABASE QUERY
	
	//$list_jobfile_result = mysqli_fetch_array($select_jobfile_result, MYSQLI_BOTH);
	//print_r($list_jobfile_result);
	
$list_of_files_copied = array();
$done_file_transferred = false;
$path_copy_file_transferred = false;
$original_file_sucess = false;

// ENUMERATE JOBFILES  -------------------------------------------------------------------------------------------------------
	while($list_jobfile_result = mysqli_fetch_array($select_jobfile_result, MYSQLI_BOTH))
	{	// COPY EACH FILE AND MAKE DB UPDATE
	$file_url = $list_jobfile_result["file_url"];
	$result["file_url"] = $list_jobfile_result["file_url"];
	
	$jobfile_id = $list_jobfile_result["jobfile_id"];
	$result["jobfile_id"] = $list_jobfile_result["jobfile_id"];
	//echo "$jobfile_id  $file_url";
	
					$current_file_src = $_SESSION["output_local"].$file_url;
					$current_file_dest = $_SESSION["user_dir_local"].$file_url;
			//FIND FILE NAME		
					$current_file_name_find = explode("\\", $current_file_dest);
					$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
					$current_file_dest_url = str_replace($current_file_name, "", $current_file_dest);
					$current_file_ext_find = explode(".", $current_file_name);
					$current_file_ext = $current_file_ext_find[count($current_file_ext_find)-1];
					$current_file_name_without_ext = str_ireplace(".".$current_file_ext,"",$current_file_name);
			//DEFINE DONE SRC		
					$current_file_done_url = str_replace($current_file_name,"done\\",$file_url);
					//echo "<h2>".$current_file_done_url."</h2>";
			//DEFINE PATH COPY SRC
					$current_file_path_copy_url = str_replace($current_file_name,"path copy\\",$file_url);
					//echo "<h2>".$current_file_path_copy_url."</h2>";
			//DEFINE PATH COPY DEST
					$check_extensions = $_SESSION["check_extensions"];

					//TRANSFER CURRENT ORIGINAL FILES
						$current_file_src2 = $_SESSION["download_dir"].$file_url;
						if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".$current_file_src2."\" \"".$current_file_dest_url."\"", $execoutput))
						{
							//UPDATE rejected_job FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
							if(file_exists($current_file_dest))
								{
								//echo "<br> $current_file_dest";
								
								//reject_date = pc number
								$update_jobfile_sql = "
								UPDATE rejected_jobfile2
								SET `start2_date` = '".$current_time."',
								`reject_date` = '".$_SESSION["user_pc_name"]."',
								`jobfile_status_id` = '4'
								WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`end2_date`='0000-00-00 00:00:00')";
								CustomQuery($update_jobfile_sql);
								
								$copy_success = true;
								$original_file_sucess = true;
								array_push($list_of_files_copied, $result["jobfile_id"]);
								}
							//UPDATE rejected_job FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
						}
						//TRANSFER CURRENT ORIGINAL FILES

foreach ($check_extensions as $file_ext)
{
//TRANSFER DONE AND PATH COPY FILES
//DONE
$current_file_done_src = $_SESSION["output_dir"].$current_file_done_url.$current_file_name_without_ext.".$file_ext";
$current_file_done_src = utf8_decode($current_file_done_src);
$current_file_done_dest_url = $_SESSION["user_dir_local"].$current_file_done_url;

//CREATE DONE FOLDER
if(file_exists($current_file_done_dest_url)) 	{ /*FOLDER EXISTS*/	} else  {  if (!mkdir($current_file_done_dest_url, 0, true)) { /*FOLDER CREATION FAILED*/ } }

//echo "<br>$current_file_done_src <br>$current_file_done_dest_url";
/*
if($done_file_transferred)
{
//FILE ALREADY TRANSFERRED
}
//TRANSFER FILES IF SOURCE EXISTS
else
{
*/
if(file_exists($current_file_done_src))
{ 
if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".utf8_decode($current_file_done_src)."\" \"".$current_file_done_dest_url."\"", $execoutput_done))
{
	//UPDATE rejected_job FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
	if(file_exists($current_file_done_dest_url.$current_file_name_without_ext.".$file_ext"))
		{
		
		//reject_date = pc number
		$update_jobfile_sql = "
		UPDATE rejected_jobfile2
		SET `start2_date` = '".$current_time."',
		`reject_date` = '".$_SESSION["user_pc_name"]."',
		`jobfile_status_id` = '4'
		WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`end2_date`='0000-00-00 00:00:00')";
		CustomQuery($update_jobfile_sql);
		
		$copy_success = true;
		$done_file_transferred = true;
		array_push($list_of_files_copied, $result["jobfile_id"]);
		}
	//UPDATE rejected_job FILE INFORMATION ONLY IF FILES ARE TRANSFERRED

}
else
{
//$copy_success = false;
}
}

//}
//TRANSFER FILES IF SOURCE EXISTS

//PATH COPY
$current_file_path_copy_src = $_SESSION["output_dir"].$current_file_path_copy_url.$current_file_name_without_ext.".$file_ext";
$current_file_path_copy_src = utf8_decode($current_file_path_copy_src);
$current_file_path_copy_dest_url = $_SESSION["user_dir_local"].$current_file_path_copy_url;
//echo "<h4>$current_file_path_copy_src</h4>";
//echo "<h4>$current_file_path_copy_dest_url</h4>";

if(file_exists($current_file_path_copy_dest_url))
	{
	//FOLDER EXISTS
	}
	else
	{
		if (!mkdir($current_file_path_copy_dest_url, 0, true))
		{
		//FAILED
		}
	}

//PATH COPY Transferred
/*
if($path_copy_file_transferred)
{
}
else
{
*/
if(file_exists($current_file_path_copy_src))
{ //FILE EXISTS, TRANSFER
if(!exec("C:/xxcopy/xxcopy.exe /BN /YY /SC \"".$current_file_path_copy_src."\" \"".$current_file_path_copy_dest_url."\"", $execoutput_path_copy))
{
	
	//UPDATE rejected_job FILE INFORMATION ONLY IF FILES ARE TRANSFERRED
	if(file_exists($current_file_path_copy_dest_url.$current_file_name_without_ext.".$file_ext"))
		{
			
		//reject_date = pc number
		$update_jobfile_sql = "
		UPDATE rejected_jobfile2
		SET `start2_date` = '".$current_time."',
		`reject_date` = '".$_SESSION["user_pc_name"]."',
		`jobfile_status_id` = '4'
		WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`end2_date`='0000-00-00 00:00:00')";
		CustomQuery($update_jobfile_sql);
		
		$copy_success = true;
		$path_copy_file_transferred = true;
		array_push($list_of_files_copied, $result["jobfile_id"]);
		}
	//UPDATE rejected_job FILE INFORMATION ONLY IF FILES ARE TRANSFERRED

}
else
{
//$copy_success = false;
}
} //FILE EXISTS, TRANSFER
//} // PATH COPY Transferred

/*

//ADDITIONAL FILE TRANSFERS
if($additional_files_transferred == true)
{
}
else
{				
				//ADDITIONAL FOLDERS
				$current_file_additional_src_url = str_replace($current_file_name, "additional files\\", $current_file_src);
				$current_file_additional_dest_url = str_replace($current_file_name, "additional files\\", $current_file_dest);

				$current_file_additional_src_url = $_SESSION["output_dir"].$current_file_additional_src_url;
				$current_file_additional_dest_url = $current_file_additional_dest_url;

				if(file_exists($current_file_additional_dest_url))
				{
				//FOLDER EXISTS
				}
				else
				{
					if (!mkdir($current_file_additional_dest_url, 0, true))
					{
					//FAILED
					}
				}

				//COPY ADDITIONAL FILES
				exec("C:/xxcopy/xxcopy.exe /YY /E /SC \"".$current_file_additional_src_url."\" \"".$current_file_additional_dest_url."\"", $execoutput1);
				$additional_files_transferred = true;
}
//ADDITIONAL FILE TRANSFERS

*/




//TRANSFER DONE AND PATH COPY FILES
}

$current_date = date("Y-m-d H:i:s");
$mull_date = date("0000-00-00 00:00:00");

if($copy_success==true)
{
$result["action_response"] = "Transferred!";
//CHECKING rejected_jobfile2 STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='4' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='4'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

//CHECKING rejected_jobfile2 STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='14' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='14'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}
//CHECKING rejected_jobfile2 STATUS AND UPDATE FILE INFORMATION
$file_status_check = "SELECT * FROM `rejected_jobfile2` WHERE `job_id`='".$result["job_id"]."' AND `jobfile_status_id`='7' ";
$rsExists = CustomQuery($file_status_check);
$data=db_fetch_array($rsExists);
if($data)
{
$job_status_update = "UPDATE `rejected_job`
SET `jobstatus_id`='7'
WHERE `job_id`='".$result["job_id"]."'";
CustomQuery($job_status_update);
}

/*
//UPDATE TIME TAKEN
$update_jobfile_sql = "
UPDATE rejected_jobfile2
SET designer_time = TIMEDIFF(end_date, start_date)
WHERE `jobfile_id`='".$result["jobfile_id"]."' AND (`designer_time` IS NULL)";
CustomQuery($update_jobfile_sql);
*/
}
else
{
$result["action_response"] = "Transfer Failed!";
}


}	// COPY EACH FILE AND MAKE DB UPDATE	
// ENUMERATE JOBFILES  -------------------------------------------------------------------------------------------------------



//print_r($list_of_files_copied);
//DESIGNER LEVEL 2 BATCH START BUTTON;;;
;
	echo my_json_encode($result);
}
?>
