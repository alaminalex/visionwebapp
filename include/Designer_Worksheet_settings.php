<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDesigner_Worksheet = array();	
	$tdataDesigner_Worksheet[".truncateText"] = true;
	$tdataDesigner_Worksheet[".NumberOfChars"] = 40; 
	$tdataDesigner_Worksheet[".ShortName"] = "Designer_Worksheet";
	$tdataDesigner_Worksheet[".OwnerID"] = "";
	$tdataDesigner_Worksheet[".OriginalTable"] = "job";

//	field labels
$fieldLabelsDesigner_Worksheet = array();
$fieldToolTipsDesigner_Worksheet = array();
$pageTitlesDesigner_Worksheet = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDesigner_Worksheet["English"] = array();
	$fieldToolTipsDesigner_Worksheet["English"] = array();
	$pageTitlesDesigner_Worksheet["English"] = array();
	$fieldLabelsDesigner_Worksheet["English"]["work_id"] = "Work Id";
	$fieldToolTipsDesigner_Worksheet["English"]["work_id"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["job_id"] = "Job Id";
	$fieldToolTipsDesigner_Worksheet["English"]["job_id"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["total_images"] = "Total Images";
	$fieldToolTipsDesigner_Worksheet["English"]["total_images"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["is_urgent"] = "Is Urgent";
	$fieldToolTipsDesigner_Worksheet["English"]["is_urgent"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["urgent_instruction"] = "Urgent Instruction";
	$fieldToolTipsDesigner_Worksheet["English"]["urgent_instruction"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["delivery_duration"] = "Delivery Duration";
	$fieldToolTipsDesigner_Worksheet["English"]["delivery_duration"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["notes"] = "Notes";
	$fieldToolTipsDesigner_Worksheet["English"]["notes"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["web_note"] = "Web Note";
	$fieldToolTipsDesigner_Worksheet["English"]["web_note"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["comments"] = "Comments";
	$fieldToolTipsDesigner_Worksheet["English"]["comments"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["pdf_id"] = "Pdf Id";
	$fieldToolTipsDesigner_Worksheet["English"]["pdf_id"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["pdf_location"] = "Pdf Location";
	$fieldToolTipsDesigner_Worksheet["English"]["pdf_location"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["jobstatus_id"] = "Jobstatus";
	$fieldToolTipsDesigner_Worksheet["English"]["jobstatus_id"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["reviewed_date"] = "Reviewed Date";
	$fieldToolTipsDesigner_Worksheet["English"]["reviewed_date"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["accepted_date"] = "Accepted Date";
	$fieldToolTipsDesigner_Worksheet["English"]["accepted_date"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["designer_list"] = "Designer List";
	$fieldToolTipsDesigner_Worksheet["English"]["designer_list"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["delivery_date"] = "Delivery Date";
	$fieldToolTipsDesigner_Worksheet["English"]["delivery_date"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["client_id"] = "Client Id";
	$fieldToolTipsDesigner_Worksheet["English"]["client_id"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["project_id"] = "Project Id";
	$fieldToolTipsDesigner_Worksheet["English"]["project_id"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["complexity1"] = "Complexity1";
	$fieldToolTipsDesigner_Worksheet["English"]["complexity1"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["complexity2"] = "Complexity2";
	$fieldToolTipsDesigner_Worksheet["English"]["complexity2"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["complexity3"] = "Complexity3";
	$fieldToolTipsDesigner_Worksheet["English"]["complexity3"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["complexity4"] = "Complexity4";
	$fieldToolTipsDesigner_Worksheet["English"]["complexity4"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["complexity5"] = "Complexity5";
	$fieldToolTipsDesigner_Worksheet["English"]["complexity5"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["complexity0"] = "Complexity0";
	$fieldToolTipsDesigner_Worksheet["English"]["complexity0"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["complexityNP"] = "Complexity NP";
	$fieldToolTipsDesigner_Worksheet["English"]["complexityNP"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["custom_complexity"] = "Custom Complexity";
	$fieldToolTipsDesigner_Worksheet["English"]["custom_complexity"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["notify_options"] = "Notify Options";
	$fieldToolTipsDesigner_Worksheet["English"]["notify_options"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["allow_batch_process"] = "Allow Batch Process";
	$fieldToolTipsDesigner_Worksheet["English"]["allow_batch_process"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["reviewer_id"] = "Reviewer Id";
	$fieldToolTipsDesigner_Worksheet["English"]["reviewer_id"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["accept_id"] = "Accept Id";
	$fieldToolTipsDesigner_Worksheet["English"]["accept_id"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["notifer_id"] = "Notifer Id";
	$fieldToolTipsDesigner_Worksheet["English"]["notifer_id"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["notify_date"] = "Notify Date";
	$fieldToolTipsDesigner_Worksheet["English"]["notify_date"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["time_left"] = "Time Left";
	$fieldToolTipsDesigner_Worksheet["English"]["time_left"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["designer_id"] = "Designer Id";
	$fieldToolTipsDesigner_Worksheet["English"]["designer_id"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["total_assigned_this_user"] = "Assigned Images";
	$fieldToolTipsDesigner_Worksheet["English"]["total_assigned_this_user"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["qcs_list"] = "Qcs List";
	$fieldToolTipsDesigner_Worksheet["English"]["qcs_list"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["pdf_estimated_average"] = "Pdf Estimated Average";
	$fieldToolTipsDesigner_Worksheet["English"]["pdf_estimated_average"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["distribute_date"] = "Distribute Date";
	$fieldToolTipsDesigner_Worksheet["English"]["distribute_date"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["time_to_delivery"] = "Time To Delivery";
	$fieldToolTipsDesigner_Worksheet["English"]["time_to_delivery"] = "";
	$fieldLabelsDesigner_Worksheet["English"]["designer_time_left"] = "Designer Time Left";
	$fieldToolTipsDesigner_Worksheet["English"]["designer_time_left"] = "";
	if (count($fieldToolTipsDesigner_Worksheet["English"]))
		$tdataDesigner_Worksheet[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDesigner_Worksheet[""] = array();
	$fieldToolTipsDesigner_Worksheet[""] = array();
	$pageTitlesDesigner_Worksheet[""] = array();
	if (count($fieldToolTipsDesigner_Worksheet[""]))
		$tdataDesigner_Worksheet[".isUseToolTips"] = true;
}
	
	
	$tdataDesigner_Worksheet[".NCSearch"] = true;



$tdataDesigner_Worksheet[".shortTableName"] = "Designer_Worksheet";
$tdataDesigner_Worksheet[".nSecOptions"] = 0;
$tdataDesigner_Worksheet[".recsPerRowList"] = 1;
$tdataDesigner_Worksheet[".recsPerRowPrint"] = 1;
$tdataDesigner_Worksheet[".mainTableOwnerID"] = "";
$tdataDesigner_Worksheet[".moveNext"] = 1;
$tdataDesigner_Worksheet[".entityType"] = 1;

$tdataDesigner_Worksheet[".strOriginalTableName"] = "job";




$tdataDesigner_Worksheet[".showAddInPopup"] = false;

$tdataDesigner_Worksheet[".showEditInPopup"] = false;

$tdataDesigner_Worksheet[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDesigner_Worksheet[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDesigner_Worksheet[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataDesigner_Worksheet[".listAjax"] = true;
else 
	$tdataDesigner_Worksheet[".listAjax"] = false;

	$tdataDesigner_Worksheet[".audit"] = false;

	$tdataDesigner_Worksheet[".locking"] = false;

$tdataDesigner_Worksheet[".edit"] = true;
$tdataDesigner_Worksheet[".afterEditAction"] = 1;
$tdataDesigner_Worksheet[".closePopupAfterEdit"] = 1;
$tdataDesigner_Worksheet[".afterEditActionDetTable"] = "";


$tdataDesigner_Worksheet[".list"] = true;


$tdataDesigner_Worksheet[".import"] = true;

$tdataDesigner_Worksheet[".exportTo"] = true;

$tdataDesigner_Worksheet[".printFriendly"] = true;


$tdataDesigner_Worksheet[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDesigner_Worksheet[".searchSaving"] = false;
//

$tdataDesigner_Worksheet[".showSearchPanel"] = true;
		$tdataDesigner_Worksheet[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDesigner_Worksheet[".isUseAjaxSuggest"] = false;
else 
	$tdataDesigner_Worksheet[".isUseAjaxSuggest"] = true;

$tdataDesigner_Worksheet[".rowHighlite"] = true;


																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																
$tdataDesigner_Worksheet[".addPageEvents"] = true;

// use timepicker for search panel
$tdataDesigner_Worksheet[".isUseTimeForSearch"] = false;





$tdataDesigner_Worksheet[".allSearchFields"] = array();
$tdataDesigner_Worksheet[".filterFields"] = array();
$tdataDesigner_Worksheet[".requiredSearchFields"] = array();

$tdataDesigner_Worksheet[".allSearchFields"][] = "time_to_delivery";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "pdf_estimated_average";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "distribute_date";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "qcs_list";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "designer_time_left";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "time_left";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "total_assigned_this_user";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "designer_id";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "work_id";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "job_id";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "pdf_id";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "complexity1";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "complexity2";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "complexity3";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "complexity4";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "complexity5";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "complexity0";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "complexityNP";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "custom_complexity";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "delivery_duration";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "delivery_date";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "is_urgent";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "notes";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "web_note";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "notify_options";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "allow_batch_process";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "client_id";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "jobstatus_id";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "reviewer_id";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "reviewed_date";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "accept_id";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "accepted_date";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "designer_list";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "notify_date";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "notifer_id";
	$tdataDesigner_Worksheet[".allSearchFields"][] = "project_id";
	

$tdataDesigner_Worksheet[".googleLikeFields"] = array();
$tdataDesigner_Worksheet[".googleLikeFields"][] = "designer_time_left";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "time_to_delivery";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "work_id";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "job_id";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "total_images";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "is_urgent";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "urgent_instruction";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "delivery_duration";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "notes";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "web_note";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "comments";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "pdf_id";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "pdf_location";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "jobstatus_id";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "reviewed_date";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "accepted_date";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "designer_list";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "qcs_list";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "delivery_date";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "time_left";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "client_id";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "project_id";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "complexity1";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "complexity2";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "complexity3";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "complexity4";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "complexity5";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "complexity0";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "complexityNP";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "custom_complexity";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "notify_options";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "allow_batch_process";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "reviewer_id";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "accept_id";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "notifer_id";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "notify_date";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "designer_id";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "distribute_date";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "pdf_estimated_average";
$tdataDesigner_Worksheet[".googleLikeFields"][] = "total_assigned_this_user";


$tdataDesigner_Worksheet[".advSearchFields"] = array();
$tdataDesigner_Worksheet[".advSearchFields"][] = "time_to_delivery";
$tdataDesigner_Worksheet[".advSearchFields"][] = "pdf_estimated_average";
$tdataDesigner_Worksheet[".advSearchFields"][] = "distribute_date";
$tdataDesigner_Worksheet[".advSearchFields"][] = "qcs_list";
$tdataDesigner_Worksheet[".advSearchFields"][] = "designer_time_left";
$tdataDesigner_Worksheet[".advSearchFields"][] = "time_left";
$tdataDesigner_Worksheet[".advSearchFields"][] = "total_assigned_this_user";
$tdataDesigner_Worksheet[".advSearchFields"][] = "designer_id";
$tdataDesigner_Worksheet[".advSearchFields"][] = "work_id";
$tdataDesigner_Worksheet[".advSearchFields"][] = "job_id";
$tdataDesigner_Worksheet[".advSearchFields"][] = "pdf_id";
$tdataDesigner_Worksheet[".advSearchFields"][] = "complexity1";
$tdataDesigner_Worksheet[".advSearchFields"][] = "complexity2";
$tdataDesigner_Worksheet[".advSearchFields"][] = "complexity3";
$tdataDesigner_Worksheet[".advSearchFields"][] = "complexity4";
$tdataDesigner_Worksheet[".advSearchFields"][] = "complexity5";
$tdataDesigner_Worksheet[".advSearchFields"][] = "complexity0";
$tdataDesigner_Worksheet[".advSearchFields"][] = "complexityNP";
$tdataDesigner_Worksheet[".advSearchFields"][] = "custom_complexity";
$tdataDesigner_Worksheet[".advSearchFields"][] = "delivery_duration";
$tdataDesigner_Worksheet[".advSearchFields"][] = "delivery_date";
$tdataDesigner_Worksheet[".advSearchFields"][] = "is_urgent";
$tdataDesigner_Worksheet[".advSearchFields"][] = "notes";
$tdataDesigner_Worksheet[".advSearchFields"][] = "web_note";
$tdataDesigner_Worksheet[".advSearchFields"][] = "notify_options";
$tdataDesigner_Worksheet[".advSearchFields"][] = "allow_batch_process";
$tdataDesigner_Worksheet[".advSearchFields"][] = "client_id";
$tdataDesigner_Worksheet[".advSearchFields"][] = "jobstatus_id";
$tdataDesigner_Worksheet[".advSearchFields"][] = "reviewer_id";
$tdataDesigner_Worksheet[".advSearchFields"][] = "reviewed_date";
$tdataDesigner_Worksheet[".advSearchFields"][] = "accept_id";
$tdataDesigner_Worksheet[".advSearchFields"][] = "accepted_date";
$tdataDesigner_Worksheet[".advSearchFields"][] = "designer_list";
$tdataDesigner_Worksheet[".advSearchFields"][] = "notify_date";
$tdataDesigner_Worksheet[".advSearchFields"][] = "notifer_id";
$tdataDesigner_Worksheet[".advSearchFields"][] = "project_id";

$tdataDesigner_Worksheet[".tableType"] = "list";

$tdataDesigner_Worksheet[".printerPageOrientation"] = 0;
$tdataDesigner_Worksheet[".nPrinterPageScale"] = 100;

$tdataDesigner_Worksheet[".nPrinterSplitRecords"] = 40;

$tdataDesigner_Worksheet[".nPrinterPDFSplitRecords"] = 40;



$tdataDesigner_Worksheet[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataDesigner_Worksheet[".pageSize"] = 20;

$tdataDesigner_Worksheet[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY designer_time_left DESC, job.delivery_date, job.is_urgent DESC, job.accepted_date, job.jobstatus_id";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDesigner_Worksheet[".strOrderBy"] = $tstrOrderBy;

$tdataDesigner_Worksheet[".orderindexes"] = array();

$tdataDesigner_Worksheet[".sqlHead"] = "SELECT TIMEDIFF((jobfile.distribute_date + INTERVAL (TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(jobfile.work_id)) SECOND), NOW()) as designer_time_left,  SEC_TO_TIME(TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(jobfile.work_id)) AS time_to_delivery,  job.work_id,  job.job_id,  job.total_images,  job.is_urgent,  job.urgent_instruction,  job.delivery_duration,  job.notes,  job.web_note,  job.comments,  job.pdf_id,  job.pdf_location,  job.jobstatus_id,  job.reviewed_date,  job.accepted_date,  job.designer_list,  job.qcs_list,  job.delivery_date,  TIMEDIFF(delivery_date, NOW()) AS time_left,  job.client_id,  job.project_id,  job.complexity1,  job.complexity2,  job.complexity3,  job.complexity4,  job.complexity5,  job.complexity0,  job.complexityNP,  job.custom_complexity,  job.notify_options,  job.allow_batch_process,  job.reviewer_id,  job.accept_id,  job.notifer_id,  job.notify_date,  jobfile.designer_id,  jobfile.distribute_date,  pdf.pdf_estimated_average,  COUNT(jobfile.work_id) as total_assigned_this_user";
$tdataDesigner_Worksheet[".sqlFrom"] = "FROM job  INNER JOIN jobfile ON job.work_id = jobfile.work_id  INNER JOIN pdf ON pdf.pdf_id = job.pdf_id  AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12)";
$tdataDesigner_Worksheet[".sqlWhereExpr"] = "";
$tdataDesigner_Worksheet[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "client_id";
	$tabFields[] = "jobstatus_id";
	$tabFields[] = "reviewer_id";
	$tabFields[] = "reviewed_date";
	$tabFields[] = "pdf_location";
	$tabFields[] = "accept_id";
	$tabFields[] = "accepted_date";
	$tabFields[] = "designer_list";
	$tabFields[] = "notify_date";
	$tabFields[] = "notifer_id";
	$tabFields[] = "project_id";
$arrEditTabs[] = array('tabId'=>'Information1',
					   'tabName'=>"Information",
					   'nType'=>'1',
					   'nOrder'=>22,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataDesigner_Worksheet[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Information1',
					  'tabName'=>"Information",
					  'nType'=>'1',
					  'nOrder'=>22,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
$tdataDesigner_Worksheet[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Information1',
					   'tabName'=>"Information",
					   'nType'=>'1',
					   'nOrder'=>22,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataDesigner_Worksheet[".arrViewTabs"] = $arrViewTabs;





//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDesigner_Worksheet[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDesigner_Worksheet[".arrGroupsPerPage"] = $arrGPP;

$tdataDesigner_Worksheet[".highlightSearchResults"] = true;

$tableKeysDesigner_Worksheet = array();
$tableKeysDesigner_Worksheet[] = "work_id";
$tdataDesigner_Worksheet[".Keys"] = $tableKeysDesigner_Worksheet;

$tdataDesigner_Worksheet[".listFields"] = array();
$tdataDesigner_Worksheet[".listFields"][] = "designer_time_left";
$tdataDesigner_Worksheet[".listFields"][] = "time_to_delivery";
$tdataDesigner_Worksheet[".listFields"][] = "qcs_list";
$tdataDesigner_Worksheet[".listFields"][] = "distribute_date";
$tdataDesigner_Worksheet[".listFields"][] = "pdf_estimated_average";
$tdataDesigner_Worksheet[".listFields"][] = "time_left";
$tdataDesigner_Worksheet[".listFields"][] = "work_id";
$tdataDesigner_Worksheet[".listFields"][] = "job_id";
$tdataDesigner_Worksheet[".listFields"][] = "pdf_id";
$tdataDesigner_Worksheet[".listFields"][] = "total_images";
$tdataDesigner_Worksheet[".listFields"][] = "total_assigned_this_user";
$tdataDesigner_Worksheet[".listFields"][] = "designer_id";
$tdataDesigner_Worksheet[".listFields"][] = "delivery_duration";
$tdataDesigner_Worksheet[".listFields"][] = "delivery_date";
$tdataDesigner_Worksheet[".listFields"][] = "is_urgent";
$tdataDesigner_Worksheet[".listFields"][] = "urgent_instruction";
$tdataDesigner_Worksheet[".listFields"][] = "notes";
$tdataDesigner_Worksheet[".listFields"][] = "web_note";
$tdataDesigner_Worksheet[".listFields"][] = "comments";
$tdataDesigner_Worksheet[".listFields"][] = "jobstatus_id";
$tdataDesigner_Worksheet[".listFields"][] = "reviewed_date";
$tdataDesigner_Worksheet[".listFields"][] = "pdf_location";
$tdataDesigner_Worksheet[".listFields"][] = "accepted_date";
$tdataDesigner_Worksheet[".listFields"][] = "designer_list";

$tdataDesigner_Worksheet[".hideMobileList"] = array();


$tdataDesigner_Worksheet[".viewFields"] = array();
$tdataDesigner_Worksheet[".viewFields"][] = "designer_time_left";
$tdataDesigner_Worksheet[".viewFields"][] = "time_to_delivery";
$tdataDesigner_Worksheet[".viewFields"][] = "distribute_date";
$tdataDesigner_Worksheet[".viewFields"][] = "pdf_estimated_average";

$tdataDesigner_Worksheet[".addFields"] = array();
$tdataDesigner_Worksheet[".addFields"][] = "distribute_date";

$tdataDesigner_Worksheet[".masterListFields"] = array();
$tdataDesigner_Worksheet[".masterListFields"][] = "designer_time_left";
$tdataDesigner_Worksheet[".masterListFields"][] = "time_to_delivery";
$tdataDesigner_Worksheet[".masterListFields"][] = "pdf_estimated_average";
$tdataDesigner_Worksheet[".masterListFields"][] = "distribute_date";
$tdataDesigner_Worksheet[".masterListFields"][] = "designer_id";
$tdataDesigner_Worksheet[".masterListFields"][] = "total_assigned_this_user";
$tdataDesigner_Worksheet[".masterListFields"][] = "time_left";
$tdataDesigner_Worksheet[".masterListFields"][] = "qcs_list";
$tdataDesigner_Worksheet[".masterListFields"][] = "work_id";
$tdataDesigner_Worksheet[".masterListFields"][] = "job_id";
$tdataDesigner_Worksheet[".masterListFields"][] = "pdf_id";
$tdataDesigner_Worksheet[".masterListFields"][] = "complexity1";
$tdataDesigner_Worksheet[".masterListFields"][] = "complexity2";
$tdataDesigner_Worksheet[".masterListFields"][] = "complexity3";
$tdataDesigner_Worksheet[".masterListFields"][] = "complexity4";
$tdataDesigner_Worksheet[".masterListFields"][] = "complexity5";
$tdataDesigner_Worksheet[".masterListFields"][] = "complexity0";
$tdataDesigner_Worksheet[".masterListFields"][] = "complexityNP";
$tdataDesigner_Worksheet[".masterListFields"][] = "custom_complexity";
$tdataDesigner_Worksheet[".masterListFields"][] = "total_images";
$tdataDesigner_Worksheet[".masterListFields"][] = "delivery_duration";
$tdataDesigner_Worksheet[".masterListFields"][] = "delivery_date";
$tdataDesigner_Worksheet[".masterListFields"][] = "is_urgent";
$tdataDesigner_Worksheet[".masterListFields"][] = "urgent_instruction";
$tdataDesigner_Worksheet[".masterListFields"][] = "notes";
$tdataDesigner_Worksheet[".masterListFields"][] = "web_note";
$tdataDesigner_Worksheet[".masterListFields"][] = "comments";
$tdataDesigner_Worksheet[".masterListFields"][] = "notify_options";
$tdataDesigner_Worksheet[".masterListFields"][] = "allow_batch_process";
$tdataDesigner_Worksheet[".masterListFields"][] = "client_id";
$tdataDesigner_Worksheet[".masterListFields"][] = "jobstatus_id";
$tdataDesigner_Worksheet[".masterListFields"][] = "reviewer_id";
$tdataDesigner_Worksheet[".masterListFields"][] = "reviewed_date";
$tdataDesigner_Worksheet[".masterListFields"][] = "pdf_location";
$tdataDesigner_Worksheet[".masterListFields"][] = "accept_id";
$tdataDesigner_Worksheet[".masterListFields"][] = "accepted_date";
$tdataDesigner_Worksheet[".masterListFields"][] = "designer_list";
$tdataDesigner_Worksheet[".masterListFields"][] = "notify_date";
$tdataDesigner_Worksheet[".masterListFields"][] = "notifer_id";
$tdataDesigner_Worksheet[".masterListFields"][] = "project_id";

$tdataDesigner_Worksheet[".inlineAddFields"] = array();
$tdataDesigner_Worksheet[".inlineAddFields"][] = "distribute_date";

$tdataDesigner_Worksheet[".editFields"] = array();
$tdataDesigner_Worksheet[".editFields"][] = "qcs_list";
$tdataDesigner_Worksheet[".editFields"][] = "distribute_date";
$tdataDesigner_Worksheet[".editFields"][] = "work_id";
$tdataDesigner_Worksheet[".editFields"][] = "job_id";
$tdataDesigner_Worksheet[".editFields"][] = "pdf_id";
$tdataDesigner_Worksheet[".editFields"][] = "complexity1";
$tdataDesigner_Worksheet[".editFields"][] = "complexity2";
$tdataDesigner_Worksheet[".editFields"][] = "complexity3";
$tdataDesigner_Worksheet[".editFields"][] = "complexity4";
$tdataDesigner_Worksheet[".editFields"][] = "complexity5";
$tdataDesigner_Worksheet[".editFields"][] = "complexity0";
$tdataDesigner_Worksheet[".editFields"][] = "complexityNP";
$tdataDesigner_Worksheet[".editFields"][] = "custom_complexity";
$tdataDesigner_Worksheet[".editFields"][] = "total_images";
$tdataDesigner_Worksheet[".editFields"][] = "delivery_duration";
$tdataDesigner_Worksheet[".editFields"][] = "delivery_date";
$tdataDesigner_Worksheet[".editFields"][] = "is_urgent";
$tdataDesigner_Worksheet[".editFields"][] = "urgent_instruction";
$tdataDesigner_Worksheet[".editFields"][] = "notes";
$tdataDesigner_Worksheet[".editFields"][] = "web_note";
$tdataDesigner_Worksheet[".editFields"][] = "comments";
$tdataDesigner_Worksheet[".editFields"][] = "notify_options";
$tdataDesigner_Worksheet[".editFields"][] = "allow_batch_process";
$tdataDesigner_Worksheet[".editFields"][] = "client_id";
$tdataDesigner_Worksheet[".editFields"][] = "jobstatus_id";
$tdataDesigner_Worksheet[".editFields"][] = "reviewer_id";
$tdataDesigner_Worksheet[".editFields"][] = "reviewed_date";
$tdataDesigner_Worksheet[".editFields"][] = "pdf_location";
$tdataDesigner_Worksheet[".editFields"][] = "accept_id";
$tdataDesigner_Worksheet[".editFields"][] = "accepted_date";
$tdataDesigner_Worksheet[".editFields"][] = "designer_list";
$tdataDesigner_Worksheet[".editFields"][] = "notify_date";
$tdataDesigner_Worksheet[".editFields"][] = "notifer_id";
$tdataDesigner_Worksheet[".editFields"][] = "project_id";

$tdataDesigner_Worksheet[".inlineEditFields"] = array();
$tdataDesigner_Worksheet[".inlineEditFields"][] = "distribute_date";

$tdataDesigner_Worksheet[".exportFields"] = array();
$tdataDesigner_Worksheet[".exportFields"][] = "designer_time_left";
$tdataDesigner_Worksheet[".exportFields"][] = "time_to_delivery";
$tdataDesigner_Worksheet[".exportFields"][] = "pdf_estimated_average";
$tdataDesigner_Worksheet[".exportFields"][] = "distribute_date";
$tdataDesigner_Worksheet[".exportFields"][] = "designer_id";
$tdataDesigner_Worksheet[".exportFields"][] = "total_assigned_this_user";
$tdataDesigner_Worksheet[".exportFields"][] = "time_left";
$tdataDesigner_Worksheet[".exportFields"][] = "qcs_list";
$tdataDesigner_Worksheet[".exportFields"][] = "work_id";
$tdataDesigner_Worksheet[".exportFields"][] = "job_id";
$tdataDesigner_Worksheet[".exportFields"][] = "pdf_id";
$tdataDesigner_Worksheet[".exportFields"][] = "complexity1";
$tdataDesigner_Worksheet[".exportFields"][] = "complexity2";
$tdataDesigner_Worksheet[".exportFields"][] = "complexity3";
$tdataDesigner_Worksheet[".exportFields"][] = "complexity4";
$tdataDesigner_Worksheet[".exportFields"][] = "complexity5";
$tdataDesigner_Worksheet[".exportFields"][] = "complexity0";
$tdataDesigner_Worksheet[".exportFields"][] = "complexityNP";
$tdataDesigner_Worksheet[".exportFields"][] = "custom_complexity";
$tdataDesigner_Worksheet[".exportFields"][] = "total_images";
$tdataDesigner_Worksheet[".exportFields"][] = "delivery_duration";
$tdataDesigner_Worksheet[".exportFields"][] = "delivery_date";
$tdataDesigner_Worksheet[".exportFields"][] = "is_urgent";
$tdataDesigner_Worksheet[".exportFields"][] = "urgent_instruction";
$tdataDesigner_Worksheet[".exportFields"][] = "notes";
$tdataDesigner_Worksheet[".exportFields"][] = "web_note";
$tdataDesigner_Worksheet[".exportFields"][] = "comments";
$tdataDesigner_Worksheet[".exportFields"][] = "notify_options";
$tdataDesigner_Worksheet[".exportFields"][] = "allow_batch_process";
$tdataDesigner_Worksheet[".exportFields"][] = "client_id";
$tdataDesigner_Worksheet[".exportFields"][] = "jobstatus_id";
$tdataDesigner_Worksheet[".exportFields"][] = "reviewer_id";
$tdataDesigner_Worksheet[".exportFields"][] = "reviewed_date";
$tdataDesigner_Worksheet[".exportFields"][] = "pdf_location";
$tdataDesigner_Worksheet[".exportFields"][] = "accept_id";
$tdataDesigner_Worksheet[".exportFields"][] = "accepted_date";
$tdataDesigner_Worksheet[".exportFields"][] = "designer_list";
$tdataDesigner_Worksheet[".exportFields"][] = "notify_date";
$tdataDesigner_Worksheet[".exportFields"][] = "notifer_id";
$tdataDesigner_Worksheet[".exportFields"][] = "project_id";

$tdataDesigner_Worksheet[".importFields"] = array();
$tdataDesigner_Worksheet[".importFields"][] = "designer_time_left";
$tdataDesigner_Worksheet[".importFields"][] = "time_to_delivery";
$tdataDesigner_Worksheet[".importFields"][] = "work_id";
$tdataDesigner_Worksheet[".importFields"][] = "job_id";
$tdataDesigner_Worksheet[".importFields"][] = "total_images";
$tdataDesigner_Worksheet[".importFields"][] = "is_urgent";
$tdataDesigner_Worksheet[".importFields"][] = "urgent_instruction";
$tdataDesigner_Worksheet[".importFields"][] = "delivery_duration";
$tdataDesigner_Worksheet[".importFields"][] = "notes";
$tdataDesigner_Worksheet[".importFields"][] = "web_note";
$tdataDesigner_Worksheet[".importFields"][] = "comments";
$tdataDesigner_Worksheet[".importFields"][] = "pdf_id";
$tdataDesigner_Worksheet[".importFields"][] = "pdf_location";
$tdataDesigner_Worksheet[".importFields"][] = "jobstatus_id";
$tdataDesigner_Worksheet[".importFields"][] = "reviewed_date";
$tdataDesigner_Worksheet[".importFields"][] = "accepted_date";
$tdataDesigner_Worksheet[".importFields"][] = "designer_list";
$tdataDesigner_Worksheet[".importFields"][] = "qcs_list";
$tdataDesigner_Worksheet[".importFields"][] = "delivery_date";
$tdataDesigner_Worksheet[".importFields"][] = "time_left";
$tdataDesigner_Worksheet[".importFields"][] = "client_id";
$tdataDesigner_Worksheet[".importFields"][] = "project_id";
$tdataDesigner_Worksheet[".importFields"][] = "complexity1";
$tdataDesigner_Worksheet[".importFields"][] = "complexity2";
$tdataDesigner_Worksheet[".importFields"][] = "complexity3";
$tdataDesigner_Worksheet[".importFields"][] = "complexity4";
$tdataDesigner_Worksheet[".importFields"][] = "complexity5";
$tdataDesigner_Worksheet[".importFields"][] = "complexity0";
$tdataDesigner_Worksheet[".importFields"][] = "complexityNP";
$tdataDesigner_Worksheet[".importFields"][] = "custom_complexity";
$tdataDesigner_Worksheet[".importFields"][] = "notify_options";
$tdataDesigner_Worksheet[".importFields"][] = "allow_batch_process";
$tdataDesigner_Worksheet[".importFields"][] = "reviewer_id";
$tdataDesigner_Worksheet[".importFields"][] = "accept_id";
$tdataDesigner_Worksheet[".importFields"][] = "notifer_id";
$tdataDesigner_Worksheet[".importFields"][] = "notify_date";
$tdataDesigner_Worksheet[".importFields"][] = "designer_id";
$tdataDesigner_Worksheet[".importFields"][] = "distribute_date";
$tdataDesigner_Worksheet[".importFields"][] = "pdf_estimated_average";
$tdataDesigner_Worksheet[".importFields"][] = "total_assigned_this_user";

$tdataDesigner_Worksheet[".printFields"] = array();
$tdataDesigner_Worksheet[".printFields"][] = "designer_time_left";
$tdataDesigner_Worksheet[".printFields"][] = "time_to_delivery";
$tdataDesigner_Worksheet[".printFields"][] = "pdf_estimated_average";
$tdataDesigner_Worksheet[".printFields"][] = "distribute_date";
$tdataDesigner_Worksheet[".printFields"][] = "designer_id";
$tdataDesigner_Worksheet[".printFields"][] = "total_assigned_this_user";
$tdataDesigner_Worksheet[".printFields"][] = "time_left";
$tdataDesigner_Worksheet[".printFields"][] = "qcs_list";
$tdataDesigner_Worksheet[".printFields"][] = "work_id";
$tdataDesigner_Worksheet[".printFields"][] = "job_id";
$tdataDesigner_Worksheet[".printFields"][] = "pdf_id";
$tdataDesigner_Worksheet[".printFields"][] = "complexity1";
$tdataDesigner_Worksheet[".printFields"][] = "complexity2";
$tdataDesigner_Worksheet[".printFields"][] = "complexity3";
$tdataDesigner_Worksheet[".printFields"][] = "complexity4";
$tdataDesigner_Worksheet[".printFields"][] = "complexity5";
$tdataDesigner_Worksheet[".printFields"][] = "complexity0";
$tdataDesigner_Worksheet[".printFields"][] = "complexityNP";
$tdataDesigner_Worksheet[".printFields"][] = "custom_complexity";
$tdataDesigner_Worksheet[".printFields"][] = "total_images";
$tdataDesigner_Worksheet[".printFields"][] = "delivery_duration";
$tdataDesigner_Worksheet[".printFields"][] = "delivery_date";
$tdataDesigner_Worksheet[".printFields"][] = "is_urgent";
$tdataDesigner_Worksheet[".printFields"][] = "urgent_instruction";
$tdataDesigner_Worksheet[".printFields"][] = "notes";
$tdataDesigner_Worksheet[".printFields"][] = "web_note";
$tdataDesigner_Worksheet[".printFields"][] = "comments";
$tdataDesigner_Worksheet[".printFields"][] = "notify_options";
$tdataDesigner_Worksheet[".printFields"][] = "allow_batch_process";
$tdataDesigner_Worksheet[".printFields"][] = "client_id";
$tdataDesigner_Worksheet[".printFields"][] = "jobstatus_id";
$tdataDesigner_Worksheet[".printFields"][] = "reviewer_id";
$tdataDesigner_Worksheet[".printFields"][] = "reviewed_date";
$tdataDesigner_Worksheet[".printFields"][] = "pdf_location";
$tdataDesigner_Worksheet[".printFields"][] = "accept_id";
$tdataDesigner_Worksheet[".printFields"][] = "accepted_date";
$tdataDesigner_Worksheet[".printFields"][] = "designer_list";
$tdataDesigner_Worksheet[".printFields"][] = "notify_date";
$tdataDesigner_Worksheet[".printFields"][] = "notifer_id";
$tdataDesigner_Worksheet[".printFields"][] = "project_id";

//	designer_time_left
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "designer_time_left";
	$fdata["GoodName"] = "designer_time_left";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","designer_time_left"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_time_left"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIMEDIFF((jobfile.distribute_date + INTERVAL (TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(jobfile.work_id)) SECOND), NOW())";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);
	
	
		
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Time");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);
	
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["designer_time_left"] = $fdata;
//	time_to_delivery
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_to_delivery";
	$fdata["GoodName"] = "time_to_delivery";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","time_to_delivery"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "time_to_delivery"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(jobfile.work_id))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);
	
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["time_to_delivery"] = $fdata;
//	work_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "work_id";
	$fdata["GoodName"] = "work_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","work_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "work_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.work_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["work_id"] = $fdata;
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","job_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "job_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.job_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["job_id"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","total_images"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_images"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.total_images";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataDesigner_Worksheet["total_images"] = $fdata;
//	is_urgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "is_urgent";
	$fdata["GoodName"] = "is_urgent";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","is_urgent"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "is_urgent"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.is_urgent";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["is_urgent"] = $fdata;
//	urgent_instruction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "urgent_instruction";
	$fdata["GoodName"] = "urgent_instruction";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","urgent_instruction"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "urgent_instruction"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.urgent_instruction";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataDesigner_Worksheet["urgent_instruction"] = $fdata;
//	delivery_duration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "delivery_duration";
	$fdata["GoodName"] = "delivery_duration";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","delivery_duration"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "delivery_duration"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.delivery_duration";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "24";
	$edata["LookupValues"][] = "48";
	$edata["LookupValues"][] = "12";
	$edata["LookupValues"][] = "6";
	$edata["LookupValues"][] = "36";
	$edata["LookupValues"][] = "72";

		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "24";
	$edata["LookupValues"][] = "48";
	$edata["LookupValues"][] = "12";
	$edata["LookupValues"][] = "6";
	$edata["LookupValues"][] = "36";
	$edata["LookupValues"][] = "72";

		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "24";
	$edata["LookupValues"][] = "48";
	$edata["LookupValues"][] = "12";
	$edata["LookupValues"][] = "6";
	$edata["LookupValues"][] = "36";
	$edata["LookupValues"][] = "72";

		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["delivery_duration"] = $fdata;
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","notes"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "notes"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.notes";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["notes"] = $fdata;
//	web_note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "web_note";
	$fdata["GoodName"] = "web_note";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","web_note"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "web_note"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.web_note";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["web_note"] = $fdata;
//	comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "comments";
	$fdata["GoodName"] = "comments";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","comments"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "comments"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.comments";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataDesigner_Worksheet["comments"] = $fdata;
//	pdf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "pdf_id";
	$fdata["GoodName"] = "pdf_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","pdf_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.pdf_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "pdf";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$edata["LCType"] = 1;
		
		
			
	$edata["LinkField"] = "pdf_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "pdf_name";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["pdf_id"] = $fdata;
//	pdf_location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "pdf_location";
	$fdata["GoodName"] = "pdf_location";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","pdf_location"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_location"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.pdf_location";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	

	

	
	$tdataDesigner_Worksheet["pdf_location"] = $fdata;
//	jobstatus_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "jobstatus_id";
	$fdata["GoodName"] = "jobstatus_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","jobstatus_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobstatus_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.jobstatus_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "jobstatus";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "jobstatus_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "job_status";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["jobstatus_id"] = $fdata;
//	reviewed_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "reviewed_date";
	$fdata["GoodName"] = "reviewed_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","reviewed_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reviewed_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.reviewed_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 10; 
	$edata["LastYearFactor"] = 100; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["reviewed_date"] = $fdata;
//	accepted_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "accepted_date";
	$fdata["GoodName"] = "accepted_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","accepted_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "accepted_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.accepted_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 10; 
	$edata["LastYearFactor"] = 100; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 10; 
	$edata["LastYearFactor"] = 100; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["accepted_date"] = $fdata;
//	designer_list
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "designer_list";
	$fdata["GoodName"] = "designer_list";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","designer_list"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_list"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.designer_list";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		$edata["Multiselect"] = true; 
	
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["designer_list"] = $fdata;
//	qcs_list
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "qcs_list";
	$fdata["GoodName"] = "qcs_list";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","qcs_list"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qcs_list"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.qcs_list";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["qcs_list"] = $fdata;
//	delivery_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "delivery_date";
	$fdata["GoodName"] = "delivery_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","delivery_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "delivery_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.delivery_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 10; 
	$edata["LastYearFactor"] = 100; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 10; 
	$edata["LastYearFactor"] = 100; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["delivery_date"] = $fdata;
//	time_left
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "time_left";
	$fdata["GoodName"] = "time_left";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","time_left"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "time_left"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIMEDIFF(delivery_date, NOW())";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);
	
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["time_left"] = $fdata;
//	client_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "client_id";
	$fdata["GoodName"] = "client_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","client_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "client_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.client_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "clients";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "client_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "client_name";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["client_id"] = $fdata;
//	project_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "project_id";
	$fdata["GoodName"] = "project_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","project_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "project_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.project_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "project";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;
		
		
			
	$edata["LinkField"] = "project_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "project_name";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["project_id"] = $fdata;
//	complexity1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "complexity1";
	$fdata["GoodName"] = "complexity1";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","complexity1"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "complexity1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.complexity1";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["complexity1"] = $fdata;
//	complexity2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "complexity2";
	$fdata["GoodName"] = "complexity2";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","complexity2"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "complexity2"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.complexity2";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["complexity2"] = $fdata;
//	complexity3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "complexity3";
	$fdata["GoodName"] = "complexity3";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","complexity3"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "complexity3"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.complexity3";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["complexity3"] = $fdata;
//	complexity4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "complexity4";
	$fdata["GoodName"] = "complexity4";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","complexity4"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "complexity4"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.complexity4";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["complexity4"] = $fdata;
//	complexity5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "complexity5";
	$fdata["GoodName"] = "complexity5";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","complexity5"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "complexity5"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.complexity5";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["complexity5"] = $fdata;
//	complexity0
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "complexity0";
	$fdata["GoodName"] = "complexity0";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","complexity0"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "complexity0"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.complexity0";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["complexity0"] = $fdata;
//	complexityNP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "complexityNP";
	$fdata["GoodName"] = "complexityNP";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","complexityNP"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "complexityNP"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.complexityNP";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["complexityNP"] = $fdata;
//	custom_complexity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "custom_complexity";
	$fdata["GoodName"] = "custom_complexity";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","custom_complexity"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "custom_complexity"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.custom_complexity";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["custom_complexity"] = $fdata;
//	notify_options
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "notify_options";
	$fdata["GoodName"] = "notify_options";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","notify_options"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "notify_options"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.notify_options";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "notifyoption";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "notify_option_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "notify_option";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["notify_options"] = $fdata;
//	allow_batch_process
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "allow_batch_process";
	$fdata["GoodName"] = "allow_batch_process";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","allow_batch_process"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "allow_batch_process"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.allow_batch_process";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["allow_batch_process"] = $fdata;
//	reviewer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "reviewer_id";
	$fdata["GoodName"] = "reviewer_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","reviewer_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reviewer_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.reviewer_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;
		
		
			
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "username";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["reviewer_id"] = $fdata;
//	accept_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "accept_id";
	$fdata["GoodName"] = "accept_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","accept_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "accept_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.accept_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["accept_id"] = $fdata;
//	notifer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "notifer_id";
	$fdata["GoodName"] = "notifer_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","notifer_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "notifer_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.notifer_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "username";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["notifer_id"] = $fdata;
//	notify_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "notify_date";
	$fdata["GoodName"] = "notify_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","notify_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "notify_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.notify_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 10; 
	$edata["LastYearFactor"] = 100; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["notify_date"] = $fdata;
//	designer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "designer_id";
	$fdata["GoodName"] = "designer_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","designer_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.designer_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["designer_id"] = $fdata;
//	distribute_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "distribute_date";
	$fdata["GoodName"] = "distribute_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","distribute_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "distribute_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.distribute_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["distribute_date"] = $fdata;
//	pdf_estimated_average
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "pdf_estimated_average";
	$fdata["GoodName"] = "pdf_estimated_average";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","pdf_estimated_average"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_estimated_average"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf.pdf_estimated_average";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);
	
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["pdf_estimated_average"] = $fdata;
//	total_assigned_this_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "total_assigned_this_user";
	$fdata["GoodName"] = "total_assigned_this_user";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designer_Worksheet","total_assigned_this_user"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_assigned_this_user"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(jobfile.work_id)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Worksheet["total_assigned_this_user"] = $fdata;

	
$tables_data["Designer Worksheet"]=&$tdataDesigner_Worksheet;
$field_labels["Designer_Worksheet"] = &$fieldLabelsDesigner_Worksheet;
$fieldToolTips["Designer Worksheet"] = &$fieldToolTipsDesigner_Worksheet;
$page_titles["Designer_Worksheet"] = &$pageTitlesDesigner_Worksheet;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Designer Worksheet"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Designer Worksheet"] = array();


	
				$strOriginalDetailsTable="user";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="user";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "user";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "1";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Designer Worksheet"][0] = $masterParams;	
				$masterTablesData["Designer Worksheet"][0]["masterKeys"] = array();
	$masterTablesData["Designer Worksheet"][0]["masterKeys"][]="user_id";
				$masterTablesData["Designer Worksheet"][0]["detailKeys"] = array();
	$masterTablesData["Designer Worksheet"][0]["detailKeys"][]="notifer_id";
		
	
				$strOriginalDetailsTable="notifyoption";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="notifyoption";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "notifyoption";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Designer Worksheet"][1] = $masterParams;	
				$masterTablesData["Designer Worksheet"][1]["masterKeys"] = array();
	$masterTablesData["Designer Worksheet"][1]["masterKeys"][]="notify_option_id";
				$masterTablesData["Designer Worksheet"][1]["detailKeys"] = array();
	$masterTablesData["Designer Worksheet"][1]["detailKeys"][]="notify_options";
		
	
				$strOriginalDetailsTable="pdf";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pdf";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pdf";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Designer Worksheet"][2] = $masterParams;	
				$masterTablesData["Designer Worksheet"][2]["masterKeys"] = array();
	$masterTablesData["Designer Worksheet"][2]["masterKeys"][]="pdf_id";
				$masterTablesData["Designer Worksheet"][2]["detailKeys"] = array();
	$masterTablesData["Designer Worksheet"][2]["detailKeys"][]="pdf_id";
		
	
				$strOriginalDetailsTable="jobstatus";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="jobstatus";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "jobstatus";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Designer Worksheet"][3] = $masterParams;	
				$masterTablesData["Designer Worksheet"][3]["masterKeys"] = array();
	$masterTablesData["Designer Worksheet"][3]["masterKeys"][]="jobstatus_id";
				$masterTablesData["Designer Worksheet"][3]["detailKeys"] = array();
	$masterTablesData["Designer Worksheet"][3]["detailKeys"][]="jobstatus_id";
		
	
				$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="project";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "project";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Designer Worksheet"][4] = $masterParams;	
				$masterTablesData["Designer Worksheet"][4]["masterKeys"] = array();
	$masterTablesData["Designer Worksheet"][4]["masterKeys"][]="project_id";
				$masterTablesData["Designer Worksheet"][4]["detailKeys"] = array();
	$masterTablesData["Designer Worksheet"][4]["detailKeys"][]="project_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Designer_Worksheet()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TIMEDIFF((jobfile.distribute_date + INTERVAL (TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(jobfile.work_id)) SECOND), NOW()) as designer_time_left,  SEC_TO_TIME(TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(jobfile.work_id)) AS time_to_delivery,  job.work_id,  job.job_id,  job.total_images,  job.is_urgent,  job.urgent_instruction,  job.delivery_duration,  job.notes,  job.web_note,  job.comments,  job.pdf_id,  job.pdf_location,  job.jobstatus_id,  job.reviewed_date,  job.accepted_date,  job.designer_list,  job.qcs_list,  job.delivery_date,  TIMEDIFF(delivery_date, NOW()) AS time_left,  job.client_id,  job.project_id,  job.complexity1,  job.complexity2,  job.complexity3,  job.complexity4,  job.complexity5,  job.complexity0,  job.complexityNP,  job.custom_complexity,  job.notify_options,  job.allow_batch_process,  job.reviewer_id,  job.accept_id,  job.notifer_id,  job.notify_date,  jobfile.designer_id,  jobfile.distribute_date,  pdf.pdf_estimated_average,  COUNT(jobfile.work_id) as total_assigned_this_user";
$proto0["m_strFrom"] = "FROM job  INNER JOIN jobfile ON job.work_id = jobfile.work_id  INNER JOIN pdf ON pdf.pdf_id = job.pdf_id  AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12)";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY designer_time_left DESC, job.delivery_date, job.is_urgent DESC, job.accepted_date, job.jobstatus_id";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$proto6=array();
$proto6["m_functiontype"] = "SQLF_CUSTOM";
$proto6["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.distribute_date + INTERVAL (TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(jobfile.work_id)) SECOND)"
));

$proto6["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NOW()"
));

$proto6["m_arguments"][]=$obj;
$proto6["m_strFunctionName"] = "TIMEDIFF";
$obj = new SQLFunctionCall($proto6);

$proto5["m_sql"] = "TIMEDIFF((jobfile.distribute_date + INTERVAL (TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(jobfile.work_id)) SECOND), NOW())";
$proto5["m_srcTableName"] = "Designer Worksheet";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "designer_time_left";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$proto10=array();
$proto10["m_functiontype"] = "SQLF_CUSTOM";
$proto10["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(jobfile.work_id)"
));

$proto10["m_arguments"][]=$obj;
$proto10["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto10);

$proto9["m_sql"] = "SEC_TO_TIME(TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(jobfile.work_id))";
$proto9["m_srcTableName"] = "Designer Worksheet";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "time_to_delivery";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto12["m_sql"] = "job.work_id";
$proto12["m_srcTableName"] = "Designer Worksheet";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto14["m_sql"] = "job.job_id";
$proto14["m_srcTableName"] = "Designer Worksheet";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "total_images",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto16["m_sql"] = "job.total_images";
$proto16["m_srcTableName"] = "Designer Worksheet";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "is_urgent",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto18["m_sql"] = "job.is_urgent";
$proto18["m_srcTableName"] = "Designer Worksheet";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "urgent_instruction",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto20["m_sql"] = "job.urgent_instruction";
$proto20["m_srcTableName"] = "Designer Worksheet";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "delivery_duration",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto22["m_sql"] = "job.delivery_duration";
$proto22["m_srcTableName"] = "Designer Worksheet";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto24["m_sql"] = "job.notes";
$proto24["m_srcTableName"] = "Designer Worksheet";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "web_note",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto26["m_sql"] = "job.web_note";
$proto26["m_srcTableName"] = "Designer Worksheet";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "comments",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto28["m_sql"] = "job.comments";
$proto28["m_srcTableName"] = "Designer Worksheet";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto30["m_sql"] = "job.pdf_id";
$proto30["m_srcTableName"] = "Designer Worksheet";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_location",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto32["m_sql"] = "job.pdf_location";
$proto32["m_srcTableName"] = "Designer Worksheet";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto34["m_sql"] = "job.jobstatus_id";
$proto34["m_srcTableName"] = "Designer Worksheet";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "reviewed_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto36["m_sql"] = "job.reviewed_date";
$proto36["m_srcTableName"] = "Designer Worksheet";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "accepted_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto38["m_sql"] = "job.accepted_date";
$proto38["m_srcTableName"] = "Designer Worksheet";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_list",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto40["m_sql"] = "job.designer_list";
$proto40["m_srcTableName"] = "Designer Worksheet";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "qcs_list",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto42["m_sql"] = "job.qcs_list";
$proto42["m_srcTableName"] = "Designer Worksheet";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "delivery_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto44["m_sql"] = "job.delivery_date";
$proto44["m_srcTableName"] = "Designer Worksheet";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$proto47=array();
$proto47["m_functiontype"] = "SQLF_CUSTOM";
$proto47["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "delivery_date"
));

$proto47["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NOW()"
));

$proto47["m_arguments"][]=$obj;
$proto47["m_strFunctionName"] = "TIMEDIFF";
$obj = new SQLFunctionCall($proto47);

$proto46["m_sql"] = "TIMEDIFF(delivery_date, NOW())";
$proto46["m_srcTableName"] = "Designer Worksheet";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "time_left";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "client_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto50["m_sql"] = "job.client_id";
$proto50["m_srcTableName"] = "Designer Worksheet";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto52["m_sql"] = "job.project_id";
$proto52["m_srcTableName"] = "Designer Worksheet";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity1",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto54["m_sql"] = "job.complexity1";
$proto54["m_srcTableName"] = "Designer Worksheet";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity2",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto56["m_sql"] = "job.complexity2";
$proto56["m_srcTableName"] = "Designer Worksheet";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity3",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto58["m_sql"] = "job.complexity3";
$proto58["m_srcTableName"] = "Designer Worksheet";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity4",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto60["m_sql"] = "job.complexity4";
$proto60["m_srcTableName"] = "Designer Worksheet";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity5",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto62["m_sql"] = "job.complexity5";
$proto62["m_srcTableName"] = "Designer Worksheet";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity0",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto64["m_sql"] = "job.complexity0";
$proto64["m_srcTableName"] = "Designer Worksheet";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "complexityNP",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto66["m_sql"] = "job.complexityNP";
$proto66["m_srcTableName"] = "Designer Worksheet";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "custom_complexity",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto68["m_sql"] = "job.custom_complexity";
$proto68["m_srcTableName"] = "Designer Worksheet";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "notify_options",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto70["m_sql"] = "job.notify_options";
$proto70["m_srcTableName"] = "Designer Worksheet";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "allow_batch_process",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto72["m_sql"] = "job.allow_batch_process";
$proto72["m_srcTableName"] = "Designer Worksheet";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "reviewer_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto74["m_sql"] = "job.reviewer_id";
$proto74["m_srcTableName"] = "Designer Worksheet";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "accept_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto76["m_sql"] = "job.accept_id";
$proto76["m_srcTableName"] = "Designer Worksheet";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "notifer_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto78["m_sql"] = "job.notifer_id";
$proto78["m_srcTableName"] = "Designer Worksheet";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "notify_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto80["m_sql"] = "job.notify_date";
$proto80["m_srcTableName"] = "Designer Worksheet";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designer Worksheet"
));

$proto82["m_sql"] = "jobfile.designer_id";
$proto82["m_srcTableName"] = "Designer Worksheet";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "distribute_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designer Worksheet"
));

$proto84["m_sql"] = "jobfile.distribute_date";
$proto84["m_srcTableName"] = "Designer Worksheet";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Designer Worksheet"
));

$proto86["m_sql"] = "pdf.pdf_estimated_average";
$proto86["m_srcTableName"] = "Designer Worksheet";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$proto89=array();
$proto89["m_functiontype"] = "SQLF_COUNT";
$proto89["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designer Worksheet"
));

$proto89["m_arguments"][]=$obj;
$proto89["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto89);

$proto88["m_sql"] = "COUNT(jobfile.work_id)";
$proto88["m_srcTableName"] = "Designer Worksheet";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "total_assigned_this_user";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto91=array();
$proto91["m_link"] = "SQLL_MAIN";
			$proto92=array();
$proto92["m_strName"] = "job";
$proto92["m_srcTableName"] = "Designer Worksheet";
$proto92["m_columns"] = array();
$proto92["m_columns"][] = "work_id";
$proto92["m_columns"][] = "job_id";
$proto92["m_columns"][] = "client_id";
$proto92["m_columns"][] = "project_id";
$proto92["m_columns"][] = "job_directory";
$proto92["m_columns"][] = "complexity1";
$proto92["m_columns"][] = "complexity2";
$proto92["m_columns"][] = "complexity3";
$proto92["m_columns"][] = "complexity4";
$proto92["m_columns"][] = "complexity5";
$proto92["m_columns"][] = "complexity0";
$proto92["m_columns"][] = "complexityNP";
$proto92["m_columns"][] = "custom_complexity";
$proto92["m_columns"][] = "total_images";
$proto92["m_columns"][] = "is_urgent";
$proto92["m_columns"][] = "urgent_instruction";
$proto92["m_columns"][] = "delivery_duration";
$proto92["m_columns"][] = "delivery_date";
$proto92["m_columns"][] = "notify_options";
$proto92["m_columns"][] = "notes";
$proto92["m_columns"][] = "web_note";
$proto92["m_columns"][] = "comments";
$proto92["m_columns"][] = "pdf_id";
$proto92["m_columns"][] = "pdf_location";
$proto92["m_columns"][] = "allow_batch_process";
$proto92["m_columns"][] = "jobstatus_id";
$proto92["m_columns"][] = "reviewer_id";
$proto92["m_columns"][] = "reviewed_date";
$proto92["m_columns"][] = "accept_id";
$proto92["m_columns"][] = "accepted_date";
$proto92["m_columns"][] = "downloader_id";
$proto92["m_columns"][] = "download_date";
$proto92["m_columns"][] = "distributor_id";
$proto92["m_columns"][] = "distribute_date";
$proto92["m_columns"][] = "designer_list";
$proto92["m_columns"][] = "qcs_list";
$proto92["m_columns"][] = "finish_date";
$proto92["m_columns"][] = "uploader_id";
$proto92["m_columns"][] = "upload_date";
$proto92["m_columns"][] = "notifer_id";
$proto92["m_columns"][] = "notify_date";
$proto92["m_columns"][] = "rejector_id";
$proto92["m_columns"][] = "reject_date";
$proto92["m_columns"][] = "reject_reason";
$proto92["m_columns"][] = "activity_log";
$proto92["m_columns"][] = "time_remaining";
$obj = new SQLTable($proto92);

$proto91["m_table"] = $obj;
$proto91["m_sql"] = "job";
$proto91["m_alias"] = "";
$proto91["m_srcTableName"] = "Designer Worksheet";
$proto93=array();
$proto93["m_sql"] = "";
$proto93["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto93["m_column"]=$obj;
$proto93["m_contained"] = array();
$proto93["m_strCase"] = "";
$proto93["m_havingmode"] = false;
$proto93["m_inBrackets"] = false;
$proto93["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto93);

$proto91["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto91);

$proto0["m_fromlist"][]=$obj;
												$proto95=array();
$proto95["m_link"] = "SQLL_INNERJOIN";
			$proto96=array();
$proto96["m_strName"] = "jobfile";
$proto96["m_srcTableName"] = "Designer Worksheet";
$proto96["m_columns"] = array();
$proto96["m_columns"][] = "jobfile_id";
$proto96["m_columns"][] = "file_url";
$proto96["m_columns"][] = "client_id";
$proto96["m_columns"][] = "work_id";
$proto96["m_columns"][] = "job_id";
$proto96["m_columns"][] = "project_id";
$proto96["m_columns"][] = "folder_name";
$proto96["m_columns"][] = "filename";
$proto96["m_columns"][] = "jobfile_type";
$proto96["m_columns"][] = "jobfile_note";
$proto96["m_columns"][] = "jobfile_status_id";
$proto96["m_columns"][] = "downloader_id";
$proto96["m_columns"][] = "distributor_id";
$proto96["m_columns"][] = "designer_id";
$proto96["m_columns"][] = "qc_id";
$proto96["m_columns"][] = "uploader_id";
$proto96["m_columns"][] = "notifier_id";
$proto96["m_columns"][] = "rejector_id";
$proto96["m_columns"][] = "download_date";
$proto96["m_columns"][] = "distribute_date";
$proto96["m_columns"][] = "start_date";
$proto96["m_columns"][] = "end_date";
$proto96["m_columns"][] = "designer_time";
$proto96["m_columns"][] = "qcstart_date";
$proto96["m_columns"][] = "qcend_date";
$proto96["m_columns"][] = "qc_time";
$proto96["m_columns"][] = "upload_date";
$proto96["m_columns"][] = "notify_date";
$proto96["m_columns"][] = "reject_date";
$proto96["m_columns"][] = "reject_reason";
$proto96["m_columns"][] = "designer2_id";
$proto96["m_columns"][] = "start2_date";
$proto96["m_columns"][] = "end2_date";
$proto96["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto96);

$proto95["m_table"] = $obj;
$proto95["m_sql"] = "INNER JOIN jobfile ON job.work_id = jobfile.work_id";
$proto95["m_alias"] = "";
$proto95["m_srcTableName"] = "Designer Worksheet";
$proto97=array();
$proto97["m_sql"] = "job.work_id = jobfile.work_id";
$proto97["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto97["m_column"]=$obj;
$proto97["m_contained"] = array();
$proto97["m_strCase"] = "= jobfile.work_id";
$proto97["m_havingmode"] = false;
$proto97["m_inBrackets"] = false;
$proto97["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto97);

$proto95["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto95);

$proto0["m_fromlist"][]=$obj;
												$proto99=array();
$proto99["m_link"] = "SQLL_INNERJOIN";
			$proto100=array();
$proto100["m_strName"] = "pdf";
$proto100["m_srcTableName"] = "Designer Worksheet";
$proto100["m_columns"] = array();
$proto100["m_columns"][] = "pdf_id";
$proto100["m_columns"][] = "pdf_name";
$proto100["m_columns"][] = "client_id";
$proto100["m_columns"][] = "pdf_location";
$proto100["m_columns"][] = "last_update";
$proto100["m_columns"][] = "pdf_estimated_average";
$proto100["m_columns"][] = "pdf_estimated_average1";
$proto100["m_columns"][] = "pdf_estimated_average2";
$proto100["m_columns"][] = "pdf_actual_average";
$proto100["m_columns"][] = "price";
$obj = new SQLTable($proto100);

$proto99["m_table"] = $obj;
$proto99["m_sql"] = "INNER JOIN pdf ON pdf.pdf_id = job.pdf_id  AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12)";
$proto99["m_alias"] = "";
$proto99["m_srcTableName"] = "Designer Worksheet";
$proto101=array();
$proto101["m_sql"] = "pdf.pdf_id = job.pdf_id  AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12)";
$proto101["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "pdf.pdf_id = job.pdf_id  AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12)"
));

$proto101["m_column"]=$obj;
$proto101["m_contained"] = array();
						$proto103=array();
$proto103["m_sql"] = "pdf.pdf_id = job.pdf_id";
$proto103["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Designer Worksheet"
));

$proto103["m_column"]=$obj;
$proto103["m_contained"] = array();
$proto103["m_strCase"] = "= job.pdf_id";
$proto103["m_havingmode"] = false;
$proto103["m_inBrackets"] = false;
$proto103["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto103);

			$proto101["m_contained"][]=$obj;
						$proto105=array();
$proto105["m_sql"] = "jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12";
$proto105["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12"
));

$proto105["m_column"]=$obj;
$proto105["m_contained"] = array();
						$proto107=array();
$proto107["m_sql"] = "jobstatus_id != 0";
$proto107["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto107["m_column"]=$obj;
$proto107["m_contained"] = array();
$proto107["m_strCase"] = "!= 0";
$proto107["m_havingmode"] = false;
$proto107["m_inBrackets"] = false;
$proto107["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto107);

			$proto105["m_contained"][]=$obj;
						$proto109=array();
$proto109["m_sql"] = "jobstatus_id != 9";
$proto109["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto109["m_column"]=$obj;
$proto109["m_contained"] = array();
$proto109["m_strCase"] = "!= 9";
$proto109["m_havingmode"] = false;
$proto109["m_inBrackets"] = false;
$proto109["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto109);

			$proto105["m_contained"][]=$obj;
						$proto111=array();
$proto111["m_sql"] = "jobstatus_id != 12";
$proto111["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto111["m_column"]=$obj;
$proto111["m_contained"] = array();
$proto111["m_strCase"] = "!= 12";
$proto111["m_havingmode"] = false;
$proto111["m_inBrackets"] = false;
$proto111["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto111);

			$proto105["m_contained"][]=$obj;
$proto105["m_strCase"] = "";
$proto105["m_havingmode"] = false;
$proto105["m_inBrackets"] = true;
$proto105["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto105);

			$proto101["m_contained"][]=$obj;
$proto101["m_strCase"] = "";
$proto101["m_havingmode"] = false;
$proto101["m_inBrackets"] = false;
$proto101["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto101);

$proto99["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto99);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto113=array();
						$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designer Worksheet"
));

$proto113["m_column"]=$obj;
$obj = new SQLGroupByItem($proto113);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto115=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "designer_time_left "
));

$proto115["m_column"]=$obj;
$proto115["m_bAsc"] = 0;
$proto115["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto115);

$proto0["m_orderby"][]=$obj;					
												$proto117=array();
						$obj = new SQLField(array(
	"m_strName" => "delivery_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto117["m_column"]=$obj;
$proto117["m_bAsc"] = 1;
$proto117["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto117);

$proto0["m_orderby"][]=$obj;					
												$proto119=array();
						$obj = new SQLField(array(
	"m_strName" => "is_urgent",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto119["m_column"]=$obj;
$proto119["m_bAsc"] = 0;
$proto119["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto119);

$proto0["m_orderby"][]=$obj;					
												$proto121=array();
						$obj = new SQLField(array(
	"m_strName" => "accepted_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto121["m_column"]=$obj;
$proto121["m_bAsc"] = 1;
$proto121["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto121);

$proto0["m_orderby"][]=$obj;					
												$proto123=array();
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Worksheet"
));

$proto123["m_column"]=$obj;
$proto123["m_bAsc"] = 1;
$proto123["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto123);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Designer Worksheet";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Designer_Worksheet = createSqlQuery_Designer_Worksheet();


	
																																								
	
$tdataDesigner_Worksheet[".sqlquery"] = $queryData_Designer_Worksheet;

include_once(getabspath("include/Designer_Worksheet_events.php"));
$tableEvents["Designer Worksheet"] = new eventclass_Designer_Worksheet;
$tdataDesigner_Worksheet[".hasEvents"] = true;

?>