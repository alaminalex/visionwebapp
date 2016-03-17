<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDesigner_Level_2 = array();	
	$tdataDesigner_Level_2[".truncateText"] = true;
	$tdataDesigner_Level_2[".NumberOfChars"] = 40; 
	$tdataDesigner_Level_2[".ShortName"] = "Designer_Level_2";
	$tdataDesigner_Level_2[".OwnerID"] = "";
	$tdataDesigner_Level_2[".OriginalTable"] = "job";

//	field labels
$fieldLabelsDesigner_Level_2 = array();
$fieldToolTipsDesigner_Level_2 = array();
$pageTitlesDesigner_Level_2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDesigner_Level_2["English"] = array();
	$fieldToolTipsDesigner_Level_2["English"] = array();
	$pageTitlesDesigner_Level_2["English"] = array();
	$fieldLabelsDesigner_Level_2["English"]["work_id"] = "Work Id";
	$fieldToolTipsDesigner_Level_2["English"]["work_id"] = "";
	$fieldLabelsDesigner_Level_2["English"]["job_id"] = "Job Id";
	$fieldToolTipsDesigner_Level_2["English"]["job_id"] = "";
	$fieldLabelsDesigner_Level_2["English"]["total_images"] = "Total Images";
	$fieldToolTipsDesigner_Level_2["English"]["total_images"] = "";
	$fieldLabelsDesigner_Level_2["English"]["is_urgent"] = "Is Urgent";
	$fieldToolTipsDesigner_Level_2["English"]["is_urgent"] = "";
	$fieldLabelsDesigner_Level_2["English"]["urgent_instruction"] = "Urgent Instruction";
	$fieldToolTipsDesigner_Level_2["English"]["urgent_instruction"] = "";
	$fieldLabelsDesigner_Level_2["English"]["delivery_duration"] = "Delivery Duration";
	$fieldToolTipsDesigner_Level_2["English"]["delivery_duration"] = "";
	$fieldLabelsDesigner_Level_2["English"]["notes"] = "Notes";
	$fieldToolTipsDesigner_Level_2["English"]["notes"] = "";
	$fieldLabelsDesigner_Level_2["English"]["web_note"] = "Web Note";
	$fieldToolTipsDesigner_Level_2["English"]["web_note"] = "";
	$fieldLabelsDesigner_Level_2["English"]["comments"] = "Comments";
	$fieldToolTipsDesigner_Level_2["English"]["comments"] = "";
	$fieldLabelsDesigner_Level_2["English"]["pdf_id"] = "Pdf Id";
	$fieldToolTipsDesigner_Level_2["English"]["pdf_id"] = "";
	$fieldLabelsDesigner_Level_2["English"]["pdf_location"] = "Pdf Location";
	$fieldToolTipsDesigner_Level_2["English"]["pdf_location"] = "";
	$fieldLabelsDesigner_Level_2["English"]["jobstatus_id"] = "Jobstatus";
	$fieldToolTipsDesigner_Level_2["English"]["jobstatus_id"] = "";
	$fieldLabelsDesigner_Level_2["English"]["reviewed_date"] = "Reviewed Date";
	$fieldToolTipsDesigner_Level_2["English"]["reviewed_date"] = "";
	$fieldLabelsDesigner_Level_2["English"]["accepted_date"] = "Accepted Date";
	$fieldToolTipsDesigner_Level_2["English"]["accepted_date"] = "";
	$fieldLabelsDesigner_Level_2["English"]["designer_list"] = "Designer List";
	$fieldToolTipsDesigner_Level_2["English"]["designer_list"] = "";
	$fieldLabelsDesigner_Level_2["English"]["delivery_date"] = "Delivery Date";
	$fieldToolTipsDesigner_Level_2["English"]["delivery_date"] = "";
	$fieldLabelsDesigner_Level_2["English"]["client_id"] = "Client Id";
	$fieldToolTipsDesigner_Level_2["English"]["client_id"] = "";
	$fieldLabelsDesigner_Level_2["English"]["project_id"] = "Project Id";
	$fieldToolTipsDesigner_Level_2["English"]["project_id"] = "";
	$fieldLabelsDesigner_Level_2["English"]["complexity1"] = "Complexity1";
	$fieldToolTipsDesigner_Level_2["English"]["complexity1"] = "";
	$fieldLabelsDesigner_Level_2["English"]["complexity2"] = "Complexity2";
	$fieldToolTipsDesigner_Level_2["English"]["complexity2"] = "";
	$fieldLabelsDesigner_Level_2["English"]["complexity3"] = "Complexity3";
	$fieldToolTipsDesigner_Level_2["English"]["complexity3"] = "";
	$fieldLabelsDesigner_Level_2["English"]["complexity4"] = "Complexity4";
	$fieldToolTipsDesigner_Level_2["English"]["complexity4"] = "";
	$fieldLabelsDesigner_Level_2["English"]["complexity5"] = "Complexity5";
	$fieldToolTipsDesigner_Level_2["English"]["complexity5"] = "";
	$fieldLabelsDesigner_Level_2["English"]["complexity0"] = "Complexity0";
	$fieldToolTipsDesigner_Level_2["English"]["complexity0"] = "";
	$fieldLabelsDesigner_Level_2["English"]["complexityNP"] = "Complexity NP";
	$fieldToolTipsDesigner_Level_2["English"]["complexityNP"] = "";
	$fieldLabelsDesigner_Level_2["English"]["custom_complexity"] = "Custom Complexity";
	$fieldToolTipsDesigner_Level_2["English"]["custom_complexity"] = "";
	$fieldLabelsDesigner_Level_2["English"]["notify_options"] = "Notify Options";
	$fieldToolTipsDesigner_Level_2["English"]["notify_options"] = "";
	$fieldLabelsDesigner_Level_2["English"]["allow_batch_process"] = "Allow Batch Process";
	$fieldToolTipsDesigner_Level_2["English"]["allow_batch_process"] = "";
	$fieldLabelsDesigner_Level_2["English"]["reviewer_id"] = "Reviewer Id";
	$fieldToolTipsDesigner_Level_2["English"]["reviewer_id"] = "";
	$fieldLabelsDesigner_Level_2["English"]["accept_id"] = "Accept Id";
	$fieldToolTipsDesigner_Level_2["English"]["accept_id"] = "";
	$fieldLabelsDesigner_Level_2["English"]["notifer_id"] = "Notifer Id";
	$fieldToolTipsDesigner_Level_2["English"]["notifer_id"] = "";
	$fieldLabelsDesigner_Level_2["English"]["notify_date"] = "Notify Date";
	$fieldToolTipsDesigner_Level_2["English"]["notify_date"] = "";
	$fieldLabelsDesigner_Level_2["English"]["time_left"] = "Time Left";
	$fieldToolTipsDesigner_Level_2["English"]["time_left"] = "";
	$fieldLabelsDesigner_Level_2["English"]["designer_id"] = "Designer Id";
	$fieldToolTipsDesigner_Level_2["English"]["designer_id"] = "";
	$fieldLabelsDesigner_Level_2["English"]["total_assigned_this_user"] = "Assigned Images";
	$fieldToolTipsDesigner_Level_2["English"]["total_assigned_this_user"] = "";
	$fieldLabelsDesigner_Level_2["English"]["qcs_list"] = "Qcs List";
	$fieldToolTipsDesigner_Level_2["English"]["qcs_list"] = "";
	$fieldLabelsDesigner_Level_2["English"]["pdf_estimated_average"] = "Pdf Estimated Average";
	$fieldToolTipsDesigner_Level_2["English"]["pdf_estimated_average"] = "";
	$fieldLabelsDesigner_Level_2["English"]["distribute_date"] = "Distribute Date";
	$fieldToolTipsDesigner_Level_2["English"]["distribute_date"] = "";
	$fieldLabelsDesigner_Level_2["English"]["time_to_delivery"] = "Time To Delivery";
	$fieldToolTipsDesigner_Level_2["English"]["time_to_delivery"] = "";
	$fieldLabelsDesigner_Level_2["English"]["designer_time_left"] = "Designer Time Left";
	$fieldToolTipsDesigner_Level_2["English"]["designer_time_left"] = "";
	$fieldLabelsDesigner_Level_2["English"]["designer2_id"] = "Designer2 Id";
	$fieldToolTipsDesigner_Level_2["English"]["designer2_id"] = "";
	if (count($fieldToolTipsDesigner_Level_2["English"]))
		$tdataDesigner_Level_2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDesigner_Level_2[""] = array();
	$fieldToolTipsDesigner_Level_2[""] = array();
	$pageTitlesDesigner_Level_2[""] = array();
	if (count($fieldToolTipsDesigner_Level_2[""]))
		$tdataDesigner_Level_2[".isUseToolTips"] = true;
}
	
	
	$tdataDesigner_Level_2[".NCSearch"] = true;



$tdataDesigner_Level_2[".shortTableName"] = "Designer_Level_2";
$tdataDesigner_Level_2[".nSecOptions"] = 0;
$tdataDesigner_Level_2[".recsPerRowList"] = 1;
$tdataDesigner_Level_2[".recsPerRowPrint"] = 1;
$tdataDesigner_Level_2[".mainTableOwnerID"] = "";
$tdataDesigner_Level_2[".moveNext"] = 1;
$tdataDesigner_Level_2[".entityType"] = 1;

$tdataDesigner_Level_2[".strOriginalTableName"] = "job";




$tdataDesigner_Level_2[".showAddInPopup"] = false;

$tdataDesigner_Level_2[".showEditInPopup"] = false;

$tdataDesigner_Level_2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDesigner_Level_2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDesigner_Level_2[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataDesigner_Level_2[".listAjax"] = true;
else 
	$tdataDesigner_Level_2[".listAjax"] = false;

	$tdataDesigner_Level_2[".audit"] = false;

	$tdataDesigner_Level_2[".locking"] = false;

$tdataDesigner_Level_2[".edit"] = true;
$tdataDesigner_Level_2[".afterEditAction"] = 1;
$tdataDesigner_Level_2[".closePopupAfterEdit"] = 1;
$tdataDesigner_Level_2[".afterEditActionDetTable"] = "";


$tdataDesigner_Level_2[".list"] = true;


$tdataDesigner_Level_2[".import"] = true;

$tdataDesigner_Level_2[".exportTo"] = true;

$tdataDesigner_Level_2[".printFriendly"] = true;


$tdataDesigner_Level_2[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDesigner_Level_2[".searchSaving"] = false;
//

$tdataDesigner_Level_2[".showSearchPanel"] = true;
		$tdataDesigner_Level_2[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDesigner_Level_2[".isUseAjaxSuggest"] = false;
else 
	$tdataDesigner_Level_2[".isUseAjaxSuggest"] = true;

$tdataDesigner_Level_2[".rowHighlite"] = true;


																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																			
			
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																$tdataDesigner_Level_2[".isUsebuttonHandlers"] = true;

$tdataDesigner_Level_2[".addPageEvents"] = true;

// use timepicker for search panel
$tdataDesigner_Level_2[".isUseTimeForSearch"] = false;





$tdataDesigner_Level_2[".allSearchFields"] = array();
$tdataDesigner_Level_2[".filterFields"] = array();
$tdataDesigner_Level_2[".requiredSearchFields"] = array();

$tdataDesigner_Level_2[".allSearchFields"][] = "time_to_delivery";
	$tdataDesigner_Level_2[".allSearchFields"][] = "pdf_estimated_average";
	$tdataDesigner_Level_2[".allSearchFields"][] = "distribute_date";
	$tdataDesigner_Level_2[".allSearchFields"][] = "designer2_id";
	$tdataDesigner_Level_2[".allSearchFields"][] = "qcs_list";
	$tdataDesigner_Level_2[".allSearchFields"][] = "designer_time_left";
	$tdataDesigner_Level_2[".allSearchFields"][] = "time_left";
	$tdataDesigner_Level_2[".allSearchFields"][] = "total_assigned_this_user";
	$tdataDesigner_Level_2[".allSearchFields"][] = "designer_id";
	$tdataDesigner_Level_2[".allSearchFields"][] = "work_id";
	$tdataDesigner_Level_2[".allSearchFields"][] = "job_id";
	$tdataDesigner_Level_2[".allSearchFields"][] = "pdf_id";
	$tdataDesigner_Level_2[".allSearchFields"][] = "complexity1";
	$tdataDesigner_Level_2[".allSearchFields"][] = "complexity2";
	$tdataDesigner_Level_2[".allSearchFields"][] = "complexity3";
	$tdataDesigner_Level_2[".allSearchFields"][] = "complexity4";
	$tdataDesigner_Level_2[".allSearchFields"][] = "complexity5";
	$tdataDesigner_Level_2[".allSearchFields"][] = "complexity0";
	$tdataDesigner_Level_2[".allSearchFields"][] = "complexityNP";
	$tdataDesigner_Level_2[".allSearchFields"][] = "custom_complexity";
	$tdataDesigner_Level_2[".allSearchFields"][] = "delivery_duration";
	$tdataDesigner_Level_2[".allSearchFields"][] = "delivery_date";
	$tdataDesigner_Level_2[".allSearchFields"][] = "is_urgent";
	$tdataDesigner_Level_2[".allSearchFields"][] = "notes";
	$tdataDesigner_Level_2[".allSearchFields"][] = "web_note";
	$tdataDesigner_Level_2[".allSearchFields"][] = "notify_options";
	$tdataDesigner_Level_2[".allSearchFields"][] = "allow_batch_process";
	$tdataDesigner_Level_2[".allSearchFields"][] = "client_id";
	$tdataDesigner_Level_2[".allSearchFields"][] = "jobstatus_id";
	$tdataDesigner_Level_2[".allSearchFields"][] = "reviewer_id";
	$tdataDesigner_Level_2[".allSearchFields"][] = "reviewed_date";
	$tdataDesigner_Level_2[".allSearchFields"][] = "accept_id";
	$tdataDesigner_Level_2[".allSearchFields"][] = "accepted_date";
	$tdataDesigner_Level_2[".allSearchFields"][] = "designer_list";
	$tdataDesigner_Level_2[".allSearchFields"][] = "notify_date";
	$tdataDesigner_Level_2[".allSearchFields"][] = "notifer_id";
	$tdataDesigner_Level_2[".allSearchFields"][] = "project_id";
	

$tdataDesigner_Level_2[".googleLikeFields"] = array();
$tdataDesigner_Level_2[".googleLikeFields"][] = "designer_time_left";
$tdataDesigner_Level_2[".googleLikeFields"][] = "time_to_delivery";
$tdataDesigner_Level_2[".googleLikeFields"][] = "work_id";
$tdataDesigner_Level_2[".googleLikeFields"][] = "job_id";
$tdataDesigner_Level_2[".googleLikeFields"][] = "total_images";
$tdataDesigner_Level_2[".googleLikeFields"][] = "is_urgent";
$tdataDesigner_Level_2[".googleLikeFields"][] = "urgent_instruction";
$tdataDesigner_Level_2[".googleLikeFields"][] = "delivery_duration";
$tdataDesigner_Level_2[".googleLikeFields"][] = "notes";
$tdataDesigner_Level_2[".googleLikeFields"][] = "web_note";
$tdataDesigner_Level_2[".googleLikeFields"][] = "comments";
$tdataDesigner_Level_2[".googleLikeFields"][] = "pdf_id";
$tdataDesigner_Level_2[".googleLikeFields"][] = "pdf_location";
$tdataDesigner_Level_2[".googleLikeFields"][] = "jobstatus_id";
$tdataDesigner_Level_2[".googleLikeFields"][] = "reviewed_date";
$tdataDesigner_Level_2[".googleLikeFields"][] = "accepted_date";
$tdataDesigner_Level_2[".googleLikeFields"][] = "designer_list";
$tdataDesigner_Level_2[".googleLikeFields"][] = "qcs_list";
$tdataDesigner_Level_2[".googleLikeFields"][] = "delivery_date";
$tdataDesigner_Level_2[".googleLikeFields"][] = "time_left";
$tdataDesigner_Level_2[".googleLikeFields"][] = "client_id";
$tdataDesigner_Level_2[".googleLikeFields"][] = "project_id";
$tdataDesigner_Level_2[".googleLikeFields"][] = "complexity1";
$tdataDesigner_Level_2[".googleLikeFields"][] = "complexity2";
$tdataDesigner_Level_2[".googleLikeFields"][] = "complexity3";
$tdataDesigner_Level_2[".googleLikeFields"][] = "complexity4";
$tdataDesigner_Level_2[".googleLikeFields"][] = "complexity5";
$tdataDesigner_Level_2[".googleLikeFields"][] = "complexity0";
$tdataDesigner_Level_2[".googleLikeFields"][] = "complexityNP";
$tdataDesigner_Level_2[".googleLikeFields"][] = "custom_complexity";
$tdataDesigner_Level_2[".googleLikeFields"][] = "notify_options";
$tdataDesigner_Level_2[".googleLikeFields"][] = "allow_batch_process";
$tdataDesigner_Level_2[".googleLikeFields"][] = "reviewer_id";
$tdataDesigner_Level_2[".googleLikeFields"][] = "accept_id";
$tdataDesigner_Level_2[".googleLikeFields"][] = "notifer_id";
$tdataDesigner_Level_2[".googleLikeFields"][] = "notify_date";
$tdataDesigner_Level_2[".googleLikeFields"][] = "designer_id";
$tdataDesigner_Level_2[".googleLikeFields"][] = "designer2_id";
$tdataDesigner_Level_2[".googleLikeFields"][] = "distribute_date";
$tdataDesigner_Level_2[".googleLikeFields"][] = "pdf_estimated_average";
$tdataDesigner_Level_2[".googleLikeFields"][] = "total_assigned_this_user";


$tdataDesigner_Level_2[".advSearchFields"] = array();
$tdataDesigner_Level_2[".advSearchFields"][] = "time_to_delivery";
$tdataDesigner_Level_2[".advSearchFields"][] = "pdf_estimated_average";
$tdataDesigner_Level_2[".advSearchFields"][] = "distribute_date";
$tdataDesigner_Level_2[".advSearchFields"][] = "designer2_id";
$tdataDesigner_Level_2[".advSearchFields"][] = "qcs_list";
$tdataDesigner_Level_2[".advSearchFields"][] = "designer_time_left";
$tdataDesigner_Level_2[".advSearchFields"][] = "time_left";
$tdataDesigner_Level_2[".advSearchFields"][] = "total_assigned_this_user";
$tdataDesigner_Level_2[".advSearchFields"][] = "designer_id";
$tdataDesigner_Level_2[".advSearchFields"][] = "work_id";
$tdataDesigner_Level_2[".advSearchFields"][] = "job_id";
$tdataDesigner_Level_2[".advSearchFields"][] = "pdf_id";
$tdataDesigner_Level_2[".advSearchFields"][] = "complexity1";
$tdataDesigner_Level_2[".advSearchFields"][] = "complexity2";
$tdataDesigner_Level_2[".advSearchFields"][] = "complexity3";
$tdataDesigner_Level_2[".advSearchFields"][] = "complexity4";
$tdataDesigner_Level_2[".advSearchFields"][] = "complexity5";
$tdataDesigner_Level_2[".advSearchFields"][] = "complexity0";
$tdataDesigner_Level_2[".advSearchFields"][] = "complexityNP";
$tdataDesigner_Level_2[".advSearchFields"][] = "custom_complexity";
$tdataDesigner_Level_2[".advSearchFields"][] = "delivery_duration";
$tdataDesigner_Level_2[".advSearchFields"][] = "delivery_date";
$tdataDesigner_Level_2[".advSearchFields"][] = "is_urgent";
$tdataDesigner_Level_2[".advSearchFields"][] = "notes";
$tdataDesigner_Level_2[".advSearchFields"][] = "web_note";
$tdataDesigner_Level_2[".advSearchFields"][] = "notify_options";
$tdataDesigner_Level_2[".advSearchFields"][] = "allow_batch_process";
$tdataDesigner_Level_2[".advSearchFields"][] = "client_id";
$tdataDesigner_Level_2[".advSearchFields"][] = "jobstatus_id";
$tdataDesigner_Level_2[".advSearchFields"][] = "reviewer_id";
$tdataDesigner_Level_2[".advSearchFields"][] = "reviewed_date";
$tdataDesigner_Level_2[".advSearchFields"][] = "accept_id";
$tdataDesigner_Level_2[".advSearchFields"][] = "accepted_date";
$tdataDesigner_Level_2[".advSearchFields"][] = "designer_list";
$tdataDesigner_Level_2[".advSearchFields"][] = "notify_date";
$tdataDesigner_Level_2[".advSearchFields"][] = "notifer_id";
$tdataDesigner_Level_2[".advSearchFields"][] = "project_id";

$tdataDesigner_Level_2[".tableType"] = "list";

$tdataDesigner_Level_2[".printerPageOrientation"] = 0;
$tdataDesigner_Level_2[".nPrinterPageScale"] = 100;

$tdataDesigner_Level_2[".nPrinterSplitRecords"] = 40;

$tdataDesigner_Level_2[".nPrinterPDFSplitRecords"] = 40;



$tdataDesigner_Level_2[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataDesigner_Level_2[".pageSize"] = 20;

$tdataDesigner_Level_2[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY designer_time_left DESC, job.delivery_date, job.is_urgent DESC, job.accepted_date, job.jobstatus_id";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDesigner_Level_2[".strOrderBy"] = $tstrOrderBy;

$tdataDesigner_Level_2[".orderindexes"] = array();

$tdataDesigner_Level_2[".sqlHead"] = "SELECT TIMEDIFF((jobfile.distribute_date + INTERVAL (TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(jobfile.work_id)) SECOND), NOW()) as designer_time_left,  SEC_TO_TIME(TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(jobfile.work_id)) AS time_to_delivery,  job.work_id,  job.job_id,  job.total_images,  job.is_urgent,  job.urgent_instruction,  job.delivery_duration,  job.notes,  job.web_note,  job.comments,  job.pdf_id,  job.pdf_location,  job.jobstatus_id,  job.reviewed_date,  job.accepted_date,  job.designer_list,  job.qcs_list,  job.delivery_date,  TIMEDIFF(delivery_date, NOW()) AS time_left,  job.client_id,  job.project_id,  job.complexity1,  job.complexity2,  job.complexity3,  job.complexity4,  job.complexity5,  job.complexity0,  job.complexityNP,  job.custom_complexity,  job.notify_options,  job.allow_batch_process,  job.reviewer_id,  job.accept_id,  job.notifer_id,  job.notify_date,  jobfile.designer_id,  jobfile.designer2_id,  jobfile.distribute_date,  pdf.pdf_estimated_average,  COUNT(jobfile.work_id) as total_assigned_this_user";
$tdataDesigner_Level_2[".sqlFrom"] = "FROM job  INNER JOIN jobfile ON job.work_id = jobfile.work_id  INNER JOIN pdf ON pdf.pdf_id = job.pdf_id  AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12)";
$tdataDesigner_Level_2[".sqlWhereExpr"] = "";
$tdataDesigner_Level_2[".sqlTail"] = "";

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
$tdataDesigner_Level_2[".arrEditTabs"] = $arrEditTabs;


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
$tdataDesigner_Level_2[".arrAddTabs"] = $arrAddTabs;

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
$tdataDesigner_Level_2[".arrViewTabs"] = $arrViewTabs;





//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDesigner_Level_2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDesigner_Level_2[".arrGroupsPerPage"] = $arrGPP;

$tdataDesigner_Level_2[".highlightSearchResults"] = true;

$tableKeysDesigner_Level_2 = array();
$tableKeysDesigner_Level_2[] = "work_id";
$tdataDesigner_Level_2[".Keys"] = $tableKeysDesigner_Level_2;

$tdataDesigner_Level_2[".listFields"] = array();
$tdataDesigner_Level_2[".listFields"][] = "designer_time_left";
$tdataDesigner_Level_2[".listFields"][] = "time_to_delivery";
$tdataDesigner_Level_2[".listFields"][] = "qcs_list";
$tdataDesigner_Level_2[".listFields"][] = "designer2_id";
$tdataDesigner_Level_2[".listFields"][] = "distribute_date";
$tdataDesigner_Level_2[".listFields"][] = "pdf_estimated_average";
$tdataDesigner_Level_2[".listFields"][] = "time_left";
$tdataDesigner_Level_2[".listFields"][] = "work_id";
$tdataDesigner_Level_2[".listFields"][] = "job_id";
$tdataDesigner_Level_2[".listFields"][] = "pdf_id";
$tdataDesigner_Level_2[".listFields"][] = "total_images";
$tdataDesigner_Level_2[".listFields"][] = "total_assigned_this_user";
$tdataDesigner_Level_2[".listFields"][] = "designer_id";
$tdataDesigner_Level_2[".listFields"][] = "delivery_duration";
$tdataDesigner_Level_2[".listFields"][] = "delivery_date";
$tdataDesigner_Level_2[".listFields"][] = "is_urgent";
$tdataDesigner_Level_2[".listFields"][] = "urgent_instruction";
$tdataDesigner_Level_2[".listFields"][] = "notes";
$tdataDesigner_Level_2[".listFields"][] = "web_note";
$tdataDesigner_Level_2[".listFields"][] = "comments";
$tdataDesigner_Level_2[".listFields"][] = "jobstatus_id";
$tdataDesigner_Level_2[".listFields"][] = "reviewed_date";
$tdataDesigner_Level_2[".listFields"][] = "pdf_location";
$tdataDesigner_Level_2[".listFields"][] = "accepted_date";
$tdataDesigner_Level_2[".listFields"][] = "designer_list";

$tdataDesigner_Level_2[".hideMobileList"] = array();


$tdataDesigner_Level_2[".viewFields"] = array();

$tdataDesigner_Level_2[".addFields"] = array();

$tdataDesigner_Level_2[".masterListFields"] = array();
$tdataDesigner_Level_2[".masterListFields"][] = "designer_time_left";
$tdataDesigner_Level_2[".masterListFields"][] = "time_to_delivery";
$tdataDesigner_Level_2[".masterListFields"][] = "pdf_estimated_average";
$tdataDesigner_Level_2[".masterListFields"][] = "distribute_date";
$tdataDesigner_Level_2[".masterListFields"][] = "designer2_id";
$tdataDesigner_Level_2[".masterListFields"][] = "designer_id";
$tdataDesigner_Level_2[".masterListFields"][] = "total_assigned_this_user";
$tdataDesigner_Level_2[".masterListFields"][] = "time_left";
$tdataDesigner_Level_2[".masterListFields"][] = "qcs_list";
$tdataDesigner_Level_2[".masterListFields"][] = "work_id";
$tdataDesigner_Level_2[".masterListFields"][] = "job_id";
$tdataDesigner_Level_2[".masterListFields"][] = "pdf_id";
$tdataDesigner_Level_2[".masterListFields"][] = "complexity1";
$tdataDesigner_Level_2[".masterListFields"][] = "complexity2";
$tdataDesigner_Level_2[".masterListFields"][] = "complexity3";
$tdataDesigner_Level_2[".masterListFields"][] = "complexity4";
$tdataDesigner_Level_2[".masterListFields"][] = "complexity5";
$tdataDesigner_Level_2[".masterListFields"][] = "complexity0";
$tdataDesigner_Level_2[".masterListFields"][] = "complexityNP";
$tdataDesigner_Level_2[".masterListFields"][] = "custom_complexity";
$tdataDesigner_Level_2[".masterListFields"][] = "total_images";
$tdataDesigner_Level_2[".masterListFields"][] = "delivery_duration";
$tdataDesigner_Level_2[".masterListFields"][] = "delivery_date";
$tdataDesigner_Level_2[".masterListFields"][] = "is_urgent";
$tdataDesigner_Level_2[".masterListFields"][] = "urgent_instruction";
$tdataDesigner_Level_2[".masterListFields"][] = "notes";
$tdataDesigner_Level_2[".masterListFields"][] = "web_note";
$tdataDesigner_Level_2[".masterListFields"][] = "comments";
$tdataDesigner_Level_2[".masterListFields"][] = "notify_options";
$tdataDesigner_Level_2[".masterListFields"][] = "allow_batch_process";
$tdataDesigner_Level_2[".masterListFields"][] = "client_id";
$tdataDesigner_Level_2[".masterListFields"][] = "jobstatus_id";
$tdataDesigner_Level_2[".masterListFields"][] = "reviewer_id";
$tdataDesigner_Level_2[".masterListFields"][] = "reviewed_date";
$tdataDesigner_Level_2[".masterListFields"][] = "pdf_location";
$tdataDesigner_Level_2[".masterListFields"][] = "accept_id";
$tdataDesigner_Level_2[".masterListFields"][] = "accepted_date";
$tdataDesigner_Level_2[".masterListFields"][] = "designer_list";
$tdataDesigner_Level_2[".masterListFields"][] = "notify_date";
$tdataDesigner_Level_2[".masterListFields"][] = "notifer_id";
$tdataDesigner_Level_2[".masterListFields"][] = "project_id";

$tdataDesigner_Level_2[".inlineAddFields"] = array();

$tdataDesigner_Level_2[".editFields"] = array();
$tdataDesigner_Level_2[".editFields"][] = "qcs_list";
$tdataDesigner_Level_2[".editFields"][] = "distribute_date";
$tdataDesigner_Level_2[".editFields"][] = "work_id";
$tdataDesigner_Level_2[".editFields"][] = "job_id";
$tdataDesigner_Level_2[".editFields"][] = "pdf_id";
$tdataDesigner_Level_2[".editFields"][] = "complexity1";
$tdataDesigner_Level_2[".editFields"][] = "complexity2";
$tdataDesigner_Level_2[".editFields"][] = "complexity3";
$tdataDesigner_Level_2[".editFields"][] = "complexity4";
$tdataDesigner_Level_2[".editFields"][] = "complexity5";
$tdataDesigner_Level_2[".editFields"][] = "complexity0";
$tdataDesigner_Level_2[".editFields"][] = "complexityNP";
$tdataDesigner_Level_2[".editFields"][] = "custom_complexity";
$tdataDesigner_Level_2[".editFields"][] = "total_images";
$tdataDesigner_Level_2[".editFields"][] = "delivery_duration";
$tdataDesigner_Level_2[".editFields"][] = "delivery_date";
$tdataDesigner_Level_2[".editFields"][] = "is_urgent";
$tdataDesigner_Level_2[".editFields"][] = "urgent_instruction";
$tdataDesigner_Level_2[".editFields"][] = "notes";
$tdataDesigner_Level_2[".editFields"][] = "web_note";
$tdataDesigner_Level_2[".editFields"][] = "comments";
$tdataDesigner_Level_2[".editFields"][] = "notify_options";
$tdataDesigner_Level_2[".editFields"][] = "allow_batch_process";
$tdataDesigner_Level_2[".editFields"][] = "client_id";
$tdataDesigner_Level_2[".editFields"][] = "jobstatus_id";
$tdataDesigner_Level_2[".editFields"][] = "reviewer_id";
$tdataDesigner_Level_2[".editFields"][] = "reviewed_date";
$tdataDesigner_Level_2[".editFields"][] = "pdf_location";
$tdataDesigner_Level_2[".editFields"][] = "accept_id";
$tdataDesigner_Level_2[".editFields"][] = "accepted_date";
$tdataDesigner_Level_2[".editFields"][] = "designer_list";
$tdataDesigner_Level_2[".editFields"][] = "notify_date";
$tdataDesigner_Level_2[".editFields"][] = "notifer_id";
$tdataDesigner_Level_2[".editFields"][] = "project_id";

$tdataDesigner_Level_2[".inlineEditFields"] = array();

$tdataDesigner_Level_2[".exportFields"] = array();
$tdataDesigner_Level_2[".exportFields"][] = "designer_time_left";
$tdataDesigner_Level_2[".exportFields"][] = "time_to_delivery";
$tdataDesigner_Level_2[".exportFields"][] = "pdf_estimated_average";
$tdataDesigner_Level_2[".exportFields"][] = "distribute_date";
$tdataDesigner_Level_2[".exportFields"][] = "designer2_id";
$tdataDesigner_Level_2[".exportFields"][] = "designer_id";
$tdataDesigner_Level_2[".exportFields"][] = "total_assigned_this_user";
$tdataDesigner_Level_2[".exportFields"][] = "time_left";
$tdataDesigner_Level_2[".exportFields"][] = "qcs_list";
$tdataDesigner_Level_2[".exportFields"][] = "work_id";
$tdataDesigner_Level_2[".exportFields"][] = "job_id";
$tdataDesigner_Level_2[".exportFields"][] = "pdf_id";
$tdataDesigner_Level_2[".exportFields"][] = "complexity1";
$tdataDesigner_Level_2[".exportFields"][] = "complexity2";
$tdataDesigner_Level_2[".exportFields"][] = "complexity3";
$tdataDesigner_Level_2[".exportFields"][] = "complexity4";
$tdataDesigner_Level_2[".exportFields"][] = "complexity5";
$tdataDesigner_Level_2[".exportFields"][] = "complexity0";
$tdataDesigner_Level_2[".exportFields"][] = "complexityNP";
$tdataDesigner_Level_2[".exportFields"][] = "custom_complexity";
$tdataDesigner_Level_2[".exportFields"][] = "total_images";
$tdataDesigner_Level_2[".exportFields"][] = "delivery_duration";
$tdataDesigner_Level_2[".exportFields"][] = "delivery_date";
$tdataDesigner_Level_2[".exportFields"][] = "is_urgent";
$tdataDesigner_Level_2[".exportFields"][] = "urgent_instruction";
$tdataDesigner_Level_2[".exportFields"][] = "notes";
$tdataDesigner_Level_2[".exportFields"][] = "web_note";
$tdataDesigner_Level_2[".exportFields"][] = "comments";
$tdataDesigner_Level_2[".exportFields"][] = "notify_options";
$tdataDesigner_Level_2[".exportFields"][] = "allow_batch_process";
$tdataDesigner_Level_2[".exportFields"][] = "client_id";
$tdataDesigner_Level_2[".exportFields"][] = "jobstatus_id";
$tdataDesigner_Level_2[".exportFields"][] = "reviewer_id";
$tdataDesigner_Level_2[".exportFields"][] = "reviewed_date";
$tdataDesigner_Level_2[".exportFields"][] = "pdf_location";
$tdataDesigner_Level_2[".exportFields"][] = "accept_id";
$tdataDesigner_Level_2[".exportFields"][] = "accepted_date";
$tdataDesigner_Level_2[".exportFields"][] = "designer_list";
$tdataDesigner_Level_2[".exportFields"][] = "notify_date";
$tdataDesigner_Level_2[".exportFields"][] = "notifer_id";
$tdataDesigner_Level_2[".exportFields"][] = "project_id";

$tdataDesigner_Level_2[".importFields"] = array();
$tdataDesigner_Level_2[".importFields"][] = "designer_time_left";
$tdataDesigner_Level_2[".importFields"][] = "time_to_delivery";
$tdataDesigner_Level_2[".importFields"][] = "work_id";
$tdataDesigner_Level_2[".importFields"][] = "job_id";
$tdataDesigner_Level_2[".importFields"][] = "total_images";
$tdataDesigner_Level_2[".importFields"][] = "is_urgent";
$tdataDesigner_Level_2[".importFields"][] = "urgent_instruction";
$tdataDesigner_Level_2[".importFields"][] = "delivery_duration";
$tdataDesigner_Level_2[".importFields"][] = "notes";
$tdataDesigner_Level_2[".importFields"][] = "web_note";
$tdataDesigner_Level_2[".importFields"][] = "comments";
$tdataDesigner_Level_2[".importFields"][] = "pdf_id";
$tdataDesigner_Level_2[".importFields"][] = "pdf_location";
$tdataDesigner_Level_2[".importFields"][] = "jobstatus_id";
$tdataDesigner_Level_2[".importFields"][] = "reviewed_date";
$tdataDesigner_Level_2[".importFields"][] = "accepted_date";
$tdataDesigner_Level_2[".importFields"][] = "designer_list";
$tdataDesigner_Level_2[".importFields"][] = "qcs_list";
$tdataDesigner_Level_2[".importFields"][] = "delivery_date";
$tdataDesigner_Level_2[".importFields"][] = "time_left";
$tdataDesigner_Level_2[".importFields"][] = "client_id";
$tdataDesigner_Level_2[".importFields"][] = "project_id";
$tdataDesigner_Level_2[".importFields"][] = "complexity1";
$tdataDesigner_Level_2[".importFields"][] = "complexity2";
$tdataDesigner_Level_2[".importFields"][] = "complexity3";
$tdataDesigner_Level_2[".importFields"][] = "complexity4";
$tdataDesigner_Level_2[".importFields"][] = "complexity5";
$tdataDesigner_Level_2[".importFields"][] = "complexity0";
$tdataDesigner_Level_2[".importFields"][] = "complexityNP";
$tdataDesigner_Level_2[".importFields"][] = "custom_complexity";
$tdataDesigner_Level_2[".importFields"][] = "notify_options";
$tdataDesigner_Level_2[".importFields"][] = "allow_batch_process";
$tdataDesigner_Level_2[".importFields"][] = "reviewer_id";
$tdataDesigner_Level_2[".importFields"][] = "accept_id";
$tdataDesigner_Level_2[".importFields"][] = "notifer_id";
$tdataDesigner_Level_2[".importFields"][] = "notify_date";
$tdataDesigner_Level_2[".importFields"][] = "designer_id";
$tdataDesigner_Level_2[".importFields"][] = "designer2_id";
$tdataDesigner_Level_2[".importFields"][] = "distribute_date";
$tdataDesigner_Level_2[".importFields"][] = "pdf_estimated_average";
$tdataDesigner_Level_2[".importFields"][] = "total_assigned_this_user";

$tdataDesigner_Level_2[".printFields"] = array();
$tdataDesigner_Level_2[".printFields"][] = "designer_time_left";
$tdataDesigner_Level_2[".printFields"][] = "time_to_delivery";
$tdataDesigner_Level_2[".printFields"][] = "pdf_estimated_average";
$tdataDesigner_Level_2[".printFields"][] = "distribute_date";
$tdataDesigner_Level_2[".printFields"][] = "designer2_id";
$tdataDesigner_Level_2[".printFields"][] = "designer_id";
$tdataDesigner_Level_2[".printFields"][] = "total_assigned_this_user";
$tdataDesigner_Level_2[".printFields"][] = "time_left";
$tdataDesigner_Level_2[".printFields"][] = "qcs_list";
$tdataDesigner_Level_2[".printFields"][] = "work_id";
$tdataDesigner_Level_2[".printFields"][] = "job_id";
$tdataDesigner_Level_2[".printFields"][] = "pdf_id";
$tdataDesigner_Level_2[".printFields"][] = "complexity1";
$tdataDesigner_Level_2[".printFields"][] = "complexity2";
$tdataDesigner_Level_2[".printFields"][] = "complexity3";
$tdataDesigner_Level_2[".printFields"][] = "complexity4";
$tdataDesigner_Level_2[".printFields"][] = "complexity5";
$tdataDesigner_Level_2[".printFields"][] = "complexity0";
$tdataDesigner_Level_2[".printFields"][] = "complexityNP";
$tdataDesigner_Level_2[".printFields"][] = "custom_complexity";
$tdataDesigner_Level_2[".printFields"][] = "total_images";
$tdataDesigner_Level_2[".printFields"][] = "delivery_duration";
$tdataDesigner_Level_2[".printFields"][] = "delivery_date";
$tdataDesigner_Level_2[".printFields"][] = "is_urgent";
$tdataDesigner_Level_2[".printFields"][] = "urgent_instruction";
$tdataDesigner_Level_2[".printFields"][] = "notes";
$tdataDesigner_Level_2[".printFields"][] = "web_note";
$tdataDesigner_Level_2[".printFields"][] = "comments";
$tdataDesigner_Level_2[".printFields"][] = "notify_options";
$tdataDesigner_Level_2[".printFields"][] = "allow_batch_process";
$tdataDesigner_Level_2[".printFields"][] = "client_id";
$tdataDesigner_Level_2[".printFields"][] = "jobstatus_id";
$tdataDesigner_Level_2[".printFields"][] = "reviewer_id";
$tdataDesigner_Level_2[".printFields"][] = "reviewed_date";
$tdataDesigner_Level_2[".printFields"][] = "pdf_location";
$tdataDesigner_Level_2[".printFields"][] = "accept_id";
$tdataDesigner_Level_2[".printFields"][] = "accepted_date";
$tdataDesigner_Level_2[".printFields"][] = "designer_list";
$tdataDesigner_Level_2[".printFields"][] = "notify_date";
$tdataDesigner_Level_2[".printFields"][] = "notifer_id";
$tdataDesigner_Level_2[".printFields"][] = "project_id";

//	designer_time_left
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "designer_time_left";
	$fdata["GoodName"] = "designer_time_left";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","designer_time_left"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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

	

	
	$tdataDesigner_Level_2["designer_time_left"] = $fdata;
//	time_to_delivery
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_to_delivery";
	$fdata["GoodName"] = "time_to_delivery";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","time_to_delivery"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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

	

	
	$tdataDesigner_Level_2["time_to_delivery"] = $fdata;
//	work_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "work_id";
	$fdata["GoodName"] = "work_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","work_id"); 
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

	

	
	$tdataDesigner_Level_2["work_id"] = $fdata;
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","job_id"); 
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

	

	
	$tdataDesigner_Level_2["job_id"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","total_images"); 
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
	
	
	
	

	

	
	$tdataDesigner_Level_2["total_images"] = $fdata;
//	is_urgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "is_urgent";
	$fdata["GoodName"] = "is_urgent";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","is_urgent"); 
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

	

	
	$tdataDesigner_Level_2["is_urgent"] = $fdata;
//	urgent_instruction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "urgent_instruction";
	$fdata["GoodName"] = "urgent_instruction";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","urgent_instruction"); 
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
	
	
	
	

	

	
	$tdataDesigner_Level_2["urgent_instruction"] = $fdata;
//	delivery_duration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "delivery_duration";
	$fdata["GoodName"] = "delivery_duration";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","delivery_duration"); 
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

	

	
	$tdataDesigner_Level_2["delivery_duration"] = $fdata;
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","notes"); 
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

	

	
	$tdataDesigner_Level_2["notes"] = $fdata;
//	web_note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "web_note";
	$fdata["GoodName"] = "web_note";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","web_note"); 
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

	

	
	$tdataDesigner_Level_2["web_note"] = $fdata;
//	comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "comments";
	$fdata["GoodName"] = "comments";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","comments"); 
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
	
	
	
	

	

	
	$tdataDesigner_Level_2["comments"] = $fdata;
//	pdf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "pdf_id";
	$fdata["GoodName"] = "pdf_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","pdf_id"); 
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

	

	
	$tdataDesigner_Level_2["pdf_id"] = $fdata;
//	pdf_location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "pdf_location";
	$fdata["GoodName"] = "pdf_location";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","pdf_location"); 
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
	
	
	
	

	

	
	$tdataDesigner_Level_2["pdf_location"] = $fdata;
//	jobstatus_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "jobstatus_id";
	$fdata["GoodName"] = "jobstatus_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","jobstatus_id"); 
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

	

	
	$tdataDesigner_Level_2["jobstatus_id"] = $fdata;
//	reviewed_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "reviewed_date";
	$fdata["GoodName"] = "reviewed_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","reviewed_date"); 
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

	

	
	$tdataDesigner_Level_2["reviewed_date"] = $fdata;
//	accepted_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "accepted_date";
	$fdata["GoodName"] = "accepted_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","accepted_date"); 
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

	

	
	$tdataDesigner_Level_2["accepted_date"] = $fdata;
//	designer_list
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "designer_list";
	$fdata["GoodName"] = "designer_list";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","designer_list"); 
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

	

	
	$tdataDesigner_Level_2["designer_list"] = $fdata;
//	qcs_list
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "qcs_list";
	$fdata["GoodName"] = "qcs_list";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","qcs_list"); 
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

	

	
	$tdataDesigner_Level_2["qcs_list"] = $fdata;
//	delivery_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "delivery_date";
	$fdata["GoodName"] = "delivery_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","delivery_date"); 
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

	

	
	$tdataDesigner_Level_2["delivery_date"] = $fdata;
//	time_left
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "time_left";
	$fdata["GoodName"] = "time_left";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","time_left"); 
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

	

	
	$tdataDesigner_Level_2["time_left"] = $fdata;
//	client_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "client_id";
	$fdata["GoodName"] = "client_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","client_id"); 
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

	

	
	$tdataDesigner_Level_2["client_id"] = $fdata;
//	project_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "project_id";
	$fdata["GoodName"] = "project_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","project_id"); 
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

	

	
	$tdataDesigner_Level_2["project_id"] = $fdata;
//	complexity1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "complexity1";
	$fdata["GoodName"] = "complexity1";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","complexity1"); 
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

	

	
	$tdataDesigner_Level_2["complexity1"] = $fdata;
//	complexity2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "complexity2";
	$fdata["GoodName"] = "complexity2";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","complexity2"); 
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

	

	
	$tdataDesigner_Level_2["complexity2"] = $fdata;
//	complexity3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "complexity3";
	$fdata["GoodName"] = "complexity3";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","complexity3"); 
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

	

	
	$tdataDesigner_Level_2["complexity3"] = $fdata;
//	complexity4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "complexity4";
	$fdata["GoodName"] = "complexity4";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","complexity4"); 
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

	

	
	$tdataDesigner_Level_2["complexity4"] = $fdata;
//	complexity5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "complexity5";
	$fdata["GoodName"] = "complexity5";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","complexity5"); 
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

	

	
	$tdataDesigner_Level_2["complexity5"] = $fdata;
//	complexity0
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "complexity0";
	$fdata["GoodName"] = "complexity0";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","complexity0"); 
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

	

	
	$tdataDesigner_Level_2["complexity0"] = $fdata;
//	complexityNP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "complexityNP";
	$fdata["GoodName"] = "complexityNP";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","complexityNP"); 
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

	

	
	$tdataDesigner_Level_2["complexityNP"] = $fdata;
//	custom_complexity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "custom_complexity";
	$fdata["GoodName"] = "custom_complexity";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","custom_complexity"); 
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

	

	
	$tdataDesigner_Level_2["custom_complexity"] = $fdata;
//	notify_options
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "notify_options";
	$fdata["GoodName"] = "notify_options";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","notify_options"); 
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

	

	
	$tdataDesigner_Level_2["notify_options"] = $fdata;
//	allow_batch_process
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "allow_batch_process";
	$fdata["GoodName"] = "allow_batch_process";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","allow_batch_process"); 
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

	

	
	$tdataDesigner_Level_2["allow_batch_process"] = $fdata;
//	reviewer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "reviewer_id";
	$fdata["GoodName"] = "reviewer_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","reviewer_id"); 
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

	

	
	$tdataDesigner_Level_2["reviewer_id"] = $fdata;
//	accept_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "accept_id";
	$fdata["GoodName"] = "accept_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","accept_id"); 
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

	

	
	$tdataDesigner_Level_2["accept_id"] = $fdata;
//	notifer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "notifer_id";
	$fdata["GoodName"] = "notifer_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","notifer_id"); 
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

	

	
	$tdataDesigner_Level_2["notifer_id"] = $fdata;
//	notify_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "notify_date";
	$fdata["GoodName"] = "notify_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","notify_date"); 
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

	

	
	$tdataDesigner_Level_2["notify_date"] = $fdata;
//	designer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "designer_id";
	$fdata["GoodName"] = "designer_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","designer_id"); 
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

	

	
	$tdataDesigner_Level_2["designer_id"] = $fdata;
//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","designer2_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer2_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.designer2_id";
	
		
		
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

	

	
	$tdataDesigner_Level_2["designer2_id"] = $fdata;
//	distribute_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "distribute_date";
	$fdata["GoodName"] = "distribute_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","distribute_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
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

	

	
	$tdataDesigner_Level_2["distribute_date"] = $fdata;
//	pdf_estimated_average
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "pdf_estimated_average";
	$fdata["GoodName"] = "pdf_estimated_average";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","pdf_estimated_average"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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

	

	
	$tdataDesigner_Level_2["pdf_estimated_average"] = $fdata;
//	total_assigned_this_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "total_assigned_this_user";
	$fdata["GoodName"] = "total_assigned_this_user";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designer_Level_2","total_assigned_this_user"); 
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

	

	
	$tdataDesigner_Level_2["total_assigned_this_user"] = $fdata;

	
$tables_data["Designer Level 2"]=&$tdataDesigner_Level_2;
$field_labels["Designer_Level_2"] = &$fieldLabelsDesigner_Level_2;
$fieldToolTips["Designer Level 2"] = &$fieldToolTipsDesigner_Level_2;
$page_titles["Designer_Level_2"] = &$pageTitlesDesigner_Level_2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Designer Level 2"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Designer Level 2"] = array();


	
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
					$masterTablesData["Designer Level 2"][0] = $masterParams;	
				$masterTablesData["Designer Level 2"][0]["masterKeys"] = array();
	$masterTablesData["Designer Level 2"][0]["masterKeys"][]="user_id";
				$masterTablesData["Designer Level 2"][0]["detailKeys"] = array();
	$masterTablesData["Designer Level 2"][0]["detailKeys"][]="notifer_id";
		
	
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
					$masterTablesData["Designer Level 2"][1] = $masterParams;	
				$masterTablesData["Designer Level 2"][1]["masterKeys"] = array();
	$masterTablesData["Designer Level 2"][1]["masterKeys"][]="notify_option_id";
				$masterTablesData["Designer Level 2"][1]["detailKeys"] = array();
	$masterTablesData["Designer Level 2"][1]["detailKeys"][]="notify_options";
		
	
				$strOriginalDetailsTable="pdf";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pdf";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pdf";
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
					$masterTablesData["Designer Level 2"][2] = $masterParams;	
				$masterTablesData["Designer Level 2"][2]["masterKeys"] = array();
	$masterTablesData["Designer Level 2"][2]["masterKeys"][]="pdf_id";
				$masterTablesData["Designer Level 2"][2]["detailKeys"] = array();
	$masterTablesData["Designer Level 2"][2]["detailKeys"][]="pdf_id";
		
	
				$strOriginalDetailsTable="jobstatus";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="jobstatus";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "jobstatus";
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
					$masterTablesData["Designer Level 2"][3] = $masterParams;	
				$masterTablesData["Designer Level 2"][3]["masterKeys"] = array();
	$masterTablesData["Designer Level 2"][3]["masterKeys"][]="jobstatus_id";
				$masterTablesData["Designer Level 2"][3]["detailKeys"] = array();
	$masterTablesData["Designer Level 2"][3]["detailKeys"][]="jobstatus_id";
		
	
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
					$masterTablesData["Designer Level 2"][4] = $masterParams;	
				$masterTablesData["Designer Level 2"][4]["masterKeys"] = array();
	$masterTablesData["Designer Level 2"][4]["masterKeys"][]="project_id";
				$masterTablesData["Designer Level 2"][4]["detailKeys"] = array();
	$masterTablesData["Designer Level 2"][4]["detailKeys"][]="project_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Designer_Level_2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TIMEDIFF((jobfile.distribute_date + INTERVAL (TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(jobfile.work_id)) SECOND), NOW()) as designer_time_left,  SEC_TO_TIME(TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(jobfile.work_id)) AS time_to_delivery,  job.work_id,  job.job_id,  job.total_images,  job.is_urgent,  job.urgent_instruction,  job.delivery_duration,  job.notes,  job.web_note,  job.comments,  job.pdf_id,  job.pdf_location,  job.jobstatus_id,  job.reviewed_date,  job.accepted_date,  job.designer_list,  job.qcs_list,  job.delivery_date,  TIMEDIFF(delivery_date, NOW()) AS time_left,  job.client_id,  job.project_id,  job.complexity1,  job.complexity2,  job.complexity3,  job.complexity4,  job.complexity5,  job.complexity0,  job.complexityNP,  job.custom_complexity,  job.notify_options,  job.allow_batch_process,  job.reviewer_id,  job.accept_id,  job.notifer_id,  job.notify_date,  jobfile.designer_id,  jobfile.designer2_id,  jobfile.distribute_date,  pdf.pdf_estimated_average,  COUNT(jobfile.work_id) as total_assigned_this_user";
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
$proto5["m_srcTableName"] = "Designer Level 2";
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
$proto9["m_srcTableName"] = "Designer Level 2";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "time_to_delivery";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto12["m_sql"] = "job.work_id";
$proto12["m_srcTableName"] = "Designer Level 2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto14["m_sql"] = "job.job_id";
$proto14["m_srcTableName"] = "Designer Level 2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "total_images",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto16["m_sql"] = "job.total_images";
$proto16["m_srcTableName"] = "Designer Level 2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "is_urgent",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto18["m_sql"] = "job.is_urgent";
$proto18["m_srcTableName"] = "Designer Level 2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "urgent_instruction",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto20["m_sql"] = "job.urgent_instruction";
$proto20["m_srcTableName"] = "Designer Level 2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "delivery_duration",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto22["m_sql"] = "job.delivery_duration";
$proto22["m_srcTableName"] = "Designer Level 2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto24["m_sql"] = "job.notes";
$proto24["m_srcTableName"] = "Designer Level 2";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "web_note",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto26["m_sql"] = "job.web_note";
$proto26["m_srcTableName"] = "Designer Level 2";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "comments",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto28["m_sql"] = "job.comments";
$proto28["m_srcTableName"] = "Designer Level 2";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto30["m_sql"] = "job.pdf_id";
$proto30["m_srcTableName"] = "Designer Level 2";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_location",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto32["m_sql"] = "job.pdf_location";
$proto32["m_srcTableName"] = "Designer Level 2";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto34["m_sql"] = "job.jobstatus_id";
$proto34["m_srcTableName"] = "Designer Level 2";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "reviewed_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto36["m_sql"] = "job.reviewed_date";
$proto36["m_srcTableName"] = "Designer Level 2";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "accepted_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto38["m_sql"] = "job.accepted_date";
$proto38["m_srcTableName"] = "Designer Level 2";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_list",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto40["m_sql"] = "job.designer_list";
$proto40["m_srcTableName"] = "Designer Level 2";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "qcs_list",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto42["m_sql"] = "job.qcs_list";
$proto42["m_srcTableName"] = "Designer Level 2";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "delivery_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto44["m_sql"] = "job.delivery_date";
$proto44["m_srcTableName"] = "Designer Level 2";
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
$proto46["m_srcTableName"] = "Designer Level 2";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "time_left";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "client_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto50["m_sql"] = "job.client_id";
$proto50["m_srcTableName"] = "Designer Level 2";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto52["m_sql"] = "job.project_id";
$proto52["m_srcTableName"] = "Designer Level 2";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity1",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto54["m_sql"] = "job.complexity1";
$proto54["m_srcTableName"] = "Designer Level 2";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity2",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto56["m_sql"] = "job.complexity2";
$proto56["m_srcTableName"] = "Designer Level 2";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity3",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto58["m_sql"] = "job.complexity3";
$proto58["m_srcTableName"] = "Designer Level 2";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity4",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto60["m_sql"] = "job.complexity4";
$proto60["m_srcTableName"] = "Designer Level 2";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity5",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto62["m_sql"] = "job.complexity5";
$proto62["m_srcTableName"] = "Designer Level 2";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity0",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto64["m_sql"] = "job.complexity0";
$proto64["m_srcTableName"] = "Designer Level 2";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "complexityNP",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto66["m_sql"] = "job.complexityNP";
$proto66["m_srcTableName"] = "Designer Level 2";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "custom_complexity",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto68["m_sql"] = "job.custom_complexity";
$proto68["m_srcTableName"] = "Designer Level 2";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "notify_options",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto70["m_sql"] = "job.notify_options";
$proto70["m_srcTableName"] = "Designer Level 2";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "allow_batch_process",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto72["m_sql"] = "job.allow_batch_process";
$proto72["m_srcTableName"] = "Designer Level 2";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "reviewer_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto74["m_sql"] = "job.reviewer_id";
$proto74["m_srcTableName"] = "Designer Level 2";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "accept_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto76["m_sql"] = "job.accept_id";
$proto76["m_srcTableName"] = "Designer Level 2";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "notifer_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto78["m_sql"] = "job.notifer_id";
$proto78["m_srcTableName"] = "Designer Level 2";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "notify_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto80["m_sql"] = "job.notify_date";
$proto80["m_srcTableName"] = "Designer Level 2";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designer Level 2"
));

$proto82["m_sql"] = "jobfile.designer_id";
$proto82["m_srcTableName"] = "Designer Level 2";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designer Level 2"
));

$proto84["m_sql"] = "jobfile.designer2_id";
$proto84["m_srcTableName"] = "Designer Level 2";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "distribute_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designer Level 2"
));

$proto86["m_sql"] = "jobfile.distribute_date";
$proto86["m_srcTableName"] = "Designer Level 2";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Designer Level 2"
));

$proto88["m_sql"] = "pdf.pdf_estimated_average";
$proto88["m_srcTableName"] = "Designer Level 2";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$proto91=array();
$proto91["m_functiontype"] = "SQLF_COUNT";
$proto91["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designer Level 2"
));

$proto91["m_arguments"][]=$obj;
$proto91["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto91);

$proto90["m_sql"] = "COUNT(jobfile.work_id)";
$proto90["m_srcTableName"] = "Designer Level 2";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "total_assigned_this_user";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto93=array();
$proto93["m_link"] = "SQLL_MAIN";
			$proto94=array();
$proto94["m_strName"] = "job";
$proto94["m_srcTableName"] = "Designer Level 2";
$proto94["m_columns"] = array();
$proto94["m_columns"][] = "work_id";
$proto94["m_columns"][] = "job_id";
$proto94["m_columns"][] = "client_id";
$proto94["m_columns"][] = "project_id";
$proto94["m_columns"][] = "job_directory";
$proto94["m_columns"][] = "complexity1";
$proto94["m_columns"][] = "complexity2";
$proto94["m_columns"][] = "complexity3";
$proto94["m_columns"][] = "complexity4";
$proto94["m_columns"][] = "complexity5";
$proto94["m_columns"][] = "complexity0";
$proto94["m_columns"][] = "complexityNP";
$proto94["m_columns"][] = "custom_complexity";
$proto94["m_columns"][] = "total_images";
$proto94["m_columns"][] = "is_urgent";
$proto94["m_columns"][] = "urgent_instruction";
$proto94["m_columns"][] = "delivery_duration";
$proto94["m_columns"][] = "delivery_date";
$proto94["m_columns"][] = "notify_options";
$proto94["m_columns"][] = "notes";
$proto94["m_columns"][] = "web_note";
$proto94["m_columns"][] = "comments";
$proto94["m_columns"][] = "pdf_id";
$proto94["m_columns"][] = "pdf_location";
$proto94["m_columns"][] = "allow_batch_process";
$proto94["m_columns"][] = "jobstatus_id";
$proto94["m_columns"][] = "reviewer_id";
$proto94["m_columns"][] = "reviewed_date";
$proto94["m_columns"][] = "accept_id";
$proto94["m_columns"][] = "accepted_date";
$proto94["m_columns"][] = "downloader_id";
$proto94["m_columns"][] = "download_date";
$proto94["m_columns"][] = "distributor_id";
$proto94["m_columns"][] = "distribute_date";
$proto94["m_columns"][] = "designer_list";
$proto94["m_columns"][] = "qcs_list";
$proto94["m_columns"][] = "finish_date";
$proto94["m_columns"][] = "uploader_id";
$proto94["m_columns"][] = "upload_date";
$proto94["m_columns"][] = "notifer_id";
$proto94["m_columns"][] = "notify_date";
$proto94["m_columns"][] = "rejector_id";
$proto94["m_columns"][] = "reject_date";
$proto94["m_columns"][] = "reject_reason";
$proto94["m_columns"][] = "activity_log";
$proto94["m_columns"][] = "time_remaining";
$obj = new SQLTable($proto94);

$proto93["m_table"] = $obj;
$proto93["m_sql"] = "job";
$proto93["m_alias"] = "";
$proto93["m_srcTableName"] = "Designer Level 2";
$proto95=array();
$proto95["m_sql"] = "";
$proto95["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto95["m_column"]=$obj;
$proto95["m_contained"] = array();
$proto95["m_strCase"] = "";
$proto95["m_havingmode"] = false;
$proto95["m_inBrackets"] = false;
$proto95["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto95);

$proto93["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto93);

$proto0["m_fromlist"][]=$obj;
												$proto97=array();
$proto97["m_link"] = "SQLL_INNERJOIN";
			$proto98=array();
$proto98["m_strName"] = "jobfile";
$proto98["m_srcTableName"] = "Designer Level 2";
$proto98["m_columns"] = array();
$proto98["m_columns"][] = "jobfile_id";
$proto98["m_columns"][] = "file_url";
$proto98["m_columns"][] = "client_id";
$proto98["m_columns"][] = "work_id";
$proto98["m_columns"][] = "job_id";
$proto98["m_columns"][] = "project_id";
$proto98["m_columns"][] = "folder_name";
$proto98["m_columns"][] = "filename";
$proto98["m_columns"][] = "jobfile_type";
$proto98["m_columns"][] = "jobfile_note";
$proto98["m_columns"][] = "jobfile_status_id";
$proto98["m_columns"][] = "downloader_id";
$proto98["m_columns"][] = "distributor_id";
$proto98["m_columns"][] = "designer_id";
$proto98["m_columns"][] = "qc_id";
$proto98["m_columns"][] = "uploader_id";
$proto98["m_columns"][] = "notifier_id";
$proto98["m_columns"][] = "rejector_id";
$proto98["m_columns"][] = "download_date";
$proto98["m_columns"][] = "distribute_date";
$proto98["m_columns"][] = "start_date";
$proto98["m_columns"][] = "end_date";
$proto98["m_columns"][] = "designer_time";
$proto98["m_columns"][] = "qcstart_date";
$proto98["m_columns"][] = "qcend_date";
$proto98["m_columns"][] = "qc_time";
$proto98["m_columns"][] = "upload_date";
$proto98["m_columns"][] = "notify_date";
$proto98["m_columns"][] = "reject_date";
$proto98["m_columns"][] = "reject_reason";
$proto98["m_columns"][] = "designer2_id";
$proto98["m_columns"][] = "start2_date";
$proto98["m_columns"][] = "end2_date";
$proto98["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto98);

$proto97["m_table"] = $obj;
$proto97["m_sql"] = "INNER JOIN jobfile ON job.work_id = jobfile.work_id";
$proto97["m_alias"] = "";
$proto97["m_srcTableName"] = "Designer Level 2";
$proto99=array();
$proto99["m_sql"] = "job.work_id = jobfile.work_id";
$proto99["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto99["m_column"]=$obj;
$proto99["m_contained"] = array();
$proto99["m_strCase"] = "= jobfile.work_id";
$proto99["m_havingmode"] = false;
$proto99["m_inBrackets"] = false;
$proto99["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto99);

$proto97["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto97);

$proto0["m_fromlist"][]=$obj;
												$proto101=array();
$proto101["m_link"] = "SQLL_INNERJOIN";
			$proto102=array();
$proto102["m_strName"] = "pdf";
$proto102["m_srcTableName"] = "Designer Level 2";
$proto102["m_columns"] = array();
$proto102["m_columns"][] = "pdf_id";
$proto102["m_columns"][] = "pdf_name";
$proto102["m_columns"][] = "client_id";
$proto102["m_columns"][] = "pdf_location";
$proto102["m_columns"][] = "last_update";
$proto102["m_columns"][] = "pdf_estimated_average";
$proto102["m_columns"][] = "pdf_estimated_average1";
$proto102["m_columns"][] = "pdf_estimated_average2";
$proto102["m_columns"][] = "pdf_actual_average";
$proto102["m_columns"][] = "price";
$obj = new SQLTable($proto102);

$proto101["m_table"] = $obj;
$proto101["m_sql"] = "INNER JOIN pdf ON pdf.pdf_id = job.pdf_id  AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12)";
$proto101["m_alias"] = "";
$proto101["m_srcTableName"] = "Designer Level 2";
$proto103=array();
$proto103["m_sql"] = "pdf.pdf_id = job.pdf_id  AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12)";
$proto103["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "pdf.pdf_id = job.pdf_id  AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12)"
));

$proto103["m_column"]=$obj;
$proto103["m_contained"] = array();
						$proto105=array();
$proto105["m_sql"] = "pdf.pdf_id = job.pdf_id";
$proto105["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Designer Level 2"
));

$proto105["m_column"]=$obj;
$proto105["m_contained"] = array();
$proto105["m_strCase"] = "= job.pdf_id";
$proto105["m_havingmode"] = false;
$proto105["m_inBrackets"] = false;
$proto105["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto105);

			$proto103["m_contained"][]=$obj;
						$proto107=array();
$proto107["m_sql"] = "jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12";
$proto107["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12"
));

$proto107["m_column"]=$obj;
$proto107["m_contained"] = array();
						$proto109=array();
$proto109["m_sql"] = "jobstatus_id != 0";
$proto109["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto109["m_column"]=$obj;
$proto109["m_contained"] = array();
$proto109["m_strCase"] = "!= 0";
$proto109["m_havingmode"] = false;
$proto109["m_inBrackets"] = false;
$proto109["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto109);

			$proto107["m_contained"][]=$obj;
						$proto111=array();
$proto111["m_sql"] = "jobstatus_id != 9";
$proto111["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto111["m_column"]=$obj;
$proto111["m_contained"] = array();
$proto111["m_strCase"] = "!= 9";
$proto111["m_havingmode"] = false;
$proto111["m_inBrackets"] = false;
$proto111["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto111);

			$proto107["m_contained"][]=$obj;
						$proto113=array();
$proto113["m_sql"] = "jobstatus_id != 12";
$proto113["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto113["m_column"]=$obj;
$proto113["m_contained"] = array();
$proto113["m_strCase"] = "!= 12";
$proto113["m_havingmode"] = false;
$proto113["m_inBrackets"] = false;
$proto113["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto113);

			$proto107["m_contained"][]=$obj;
$proto107["m_strCase"] = "";
$proto107["m_havingmode"] = false;
$proto107["m_inBrackets"] = true;
$proto107["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto107);

			$proto103["m_contained"][]=$obj;
$proto103["m_strCase"] = "";
$proto103["m_havingmode"] = false;
$proto103["m_inBrackets"] = false;
$proto103["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto103);

$proto101["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto101);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto115=array();
						$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designer Level 2"
));

$proto115["m_column"]=$obj;
$obj = new SQLGroupByItem($proto115);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto117=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "designer_time_left "
));

$proto117["m_column"]=$obj;
$proto117["m_bAsc"] = 0;
$proto117["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto117);

$proto0["m_orderby"][]=$obj;					
												$proto119=array();
						$obj = new SQLField(array(
	"m_strName" => "delivery_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto119["m_column"]=$obj;
$proto119["m_bAsc"] = 1;
$proto119["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto119);

$proto0["m_orderby"][]=$obj;					
												$proto121=array();
						$obj = new SQLField(array(
	"m_strName" => "is_urgent",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto121["m_column"]=$obj;
$proto121["m_bAsc"] = 0;
$proto121["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto121);

$proto0["m_orderby"][]=$obj;					
												$proto123=array();
						$obj = new SQLField(array(
	"m_strName" => "accepted_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto123["m_column"]=$obj;
$proto123["m_bAsc"] = 1;
$proto123["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto123);

$proto0["m_orderby"][]=$obj;					
												$proto125=array();
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Designer Level 2"
));

$proto125["m_column"]=$obj;
$proto125["m_bAsc"] = 1;
$proto125["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto125);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Designer Level 2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Designer_Level_2 = createSqlQuery_Designer_Level_2();


	
																																									
	
$tdataDesigner_Level_2[".sqlquery"] = $queryData_Designer_Level_2;

include_once(getabspath("include/Designer_Level_2_events.php"));
$tableEvents["Designer Level 2"] = new eventclass_Designer_Level_2;
$tdataDesigner_Level_2[".hasEvents"] = true;

?>