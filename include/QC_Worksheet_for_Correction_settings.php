<?php
require_once(getabspath("classes/cipherer.php"));




$tdataQC_Worksheet_for_Correction = array();	
	$tdataQC_Worksheet_for_Correction[".truncateText"] = true;
	$tdataQC_Worksheet_for_Correction[".NumberOfChars"] = 40; 
	$tdataQC_Worksheet_for_Correction[".ShortName"] = "QC_Worksheet_for_Correction";
	$tdataQC_Worksheet_for_Correction[".OwnerID"] = "";
	$tdataQC_Worksheet_for_Correction[".OriginalTable"] = "rejected_job";

//	field labels
$fieldLabelsQC_Worksheet_for_Correction = array();
$fieldToolTipsQC_Worksheet_for_Correction = array();
$pageTitlesQC_Worksheet_for_Correction = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsQC_Worksheet_for_Correction["English"] = array();
	$fieldToolTipsQC_Worksheet_for_Correction["English"] = array();
	$pageTitlesQC_Worksheet_for_Correction["English"] = array();
	$fieldLabelsQC_Worksheet_for_Correction["English"]["work_id"] = "Work Id";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["work_id"] = "";
	$fieldLabelsQC_Worksheet_for_Correction["English"]["total_images"] = "Total Images";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["total_images"] = "";
	$fieldLabelsQC_Worksheet_for_Correction["English"]["delivery_duration"] = "Delivery Duration";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["delivery_duration"] = "";
	$fieldLabelsQC_Worksheet_for_Correction["English"]["web_note"] = "Web Note";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["web_note"] = "";
	$fieldLabelsQC_Worksheet_for_Correction["English"]["comments"] = "Comments";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["comments"] = "";
	$fieldLabelsQC_Worksheet_for_Correction["English"]["pdf_id"] = "Pdf Id";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["pdf_id"] = "";
	$fieldLabelsQC_Worksheet_for_Correction["English"]["jobstatus_id"] = "Jobstatus";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["jobstatus_id"] = "";
	$fieldLabelsQC_Worksheet_for_Correction["English"]["delivery_date"] = "Delivery Date";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["delivery_date"] = "";
	$fieldLabelsQC_Worksheet_for_Correction["English"]["reviewer_id"] = "Reviewer Id";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["reviewer_id"] = "";
	$fieldLabelsQC_Worksheet_for_Correction["English"]["notifer_id"] = "Notifer Id";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["notifer_id"] = "";
	$fieldLabelsQC_Worksheet_for_Correction["English"]["notify_date"] = "Notify Date";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["notify_date"] = "";
	$fieldLabelsQC_Worksheet_for_Correction["English"]["designer_id"] = "Designer Id";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["designer_id"] = "";
	$fieldLabelsQC_Worksheet_for_Correction["English"]["total_assigned_this_user"] = "Assigned Images";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["total_assigned_this_user"] = "";
	$fieldLabelsQC_Worksheet_for_Correction["English"]["designer_time_left"] = "Work Status";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["designer_time_left"] = "";
	$fieldLabelsQC_Worksheet_for_Correction["English"]["time_to_delivery"] = "Time To Delivery";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["time_to_delivery"] = "";
	$fieldLabelsQC_Worksheet_for_Correction["English"]["pdf_name"] = "Pdf Name";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["pdf_name"] = "";
	$fieldLabelsQC_Worksheet_for_Correction["English"]["time_left"] = "Time Left";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["time_left"] = "";
	$fieldLabelsQC_Worksheet_for_Correction["English"]["designer2_id"] = "Designer2 Id";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["designer2_id"] = "";
	$fieldLabelsQC_Worksheet_for_Correction["English"]["distribute_date"] = "Distribute Date";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["distribute_date"] = "";
	$fieldLabelsQC_Worksheet_for_Correction["English"]["pdf_estimated_average"] = "Pdf Estimated Average";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["pdf_estimated_average"] = "";
	$fieldLabelsQC_Worksheet_for_Correction["English"]["job_id"] = "Job Id";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["job_id"] = "";
	$fieldLabelsQC_Worksheet_for_Correction["English"]["qc_id"] = "Qc Id";
	$fieldToolTipsQC_Worksheet_for_Correction["English"]["qc_id"] = "";
	if (count($fieldToolTipsQC_Worksheet_for_Correction["English"]))
		$tdataQC_Worksheet_for_Correction[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsQC_Worksheet_for_Correction[""] = array();
	$fieldToolTipsQC_Worksheet_for_Correction[""] = array();
	$pageTitlesQC_Worksheet_for_Correction[""] = array();
	$fieldLabelsQC_Worksheet_for_Correction[""]["time_to_delivery"] = "Time To Delivery";
	$fieldToolTipsQC_Worksheet_for_Correction[""]["time_to_delivery"] = "";
	$fieldLabelsQC_Worksheet_for_Correction[""]["pdf_name"] = "Pdf Name";
	$fieldToolTipsQC_Worksheet_for_Correction[""]["pdf_name"] = "";
	$fieldLabelsQC_Worksheet_for_Correction[""]["time_left"] = "Time Left";
	$fieldToolTipsQC_Worksheet_for_Correction[""]["time_left"] = "";
	$fieldLabelsQC_Worksheet_for_Correction[""]["designer2_id"] = "Designer2 Id";
	$fieldToolTipsQC_Worksheet_for_Correction[""]["designer2_id"] = "";
	$fieldLabelsQC_Worksheet_for_Correction[""]["distribute_date"] = "Distribute Date";
	$fieldToolTipsQC_Worksheet_for_Correction[""]["distribute_date"] = "";
	$fieldLabelsQC_Worksheet_for_Correction[""]["pdf_estimated_average"] = "Pdf Estimated Average";
	$fieldToolTipsQC_Worksheet_for_Correction[""]["pdf_estimated_average"] = "";
	$fieldLabelsQC_Worksheet_for_Correction[""]["job_id"] = "Job Id";
	$fieldToolTipsQC_Worksheet_for_Correction[""]["job_id"] = "";
	$fieldLabelsQC_Worksheet_for_Correction[""]["qc_id"] = "Qc Id";
	$fieldToolTipsQC_Worksheet_for_Correction[""]["qc_id"] = "";
	if (count($fieldToolTipsQC_Worksheet_for_Correction[""]))
		$tdataQC_Worksheet_for_Correction[".isUseToolTips"] = true;
}
	
	
	$tdataQC_Worksheet_for_Correction[".NCSearch"] = true;



$tdataQC_Worksheet_for_Correction[".shortTableName"] = "QC_Worksheet_for_Correction";
$tdataQC_Worksheet_for_Correction[".nSecOptions"] = 0;
$tdataQC_Worksheet_for_Correction[".recsPerRowList"] = 1;
$tdataQC_Worksheet_for_Correction[".recsPerRowPrint"] = 1;
$tdataQC_Worksheet_for_Correction[".mainTableOwnerID"] = "";
$tdataQC_Worksheet_for_Correction[".moveNext"] = 1;
$tdataQC_Worksheet_for_Correction[".entityType"] = 1;

$tdataQC_Worksheet_for_Correction[".strOriginalTableName"] = "rejected_job";




$tdataQC_Worksheet_for_Correction[".showAddInPopup"] = false;

$tdataQC_Worksheet_for_Correction[".showEditInPopup"] = false;

$tdataQC_Worksheet_for_Correction[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataQC_Worksheet_for_Correction[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataQC_Worksheet_for_Correction[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataQC_Worksheet_for_Correction[".listAjax"] = true;
else 
	$tdataQC_Worksheet_for_Correction[".listAjax"] = false;

	$tdataQC_Worksheet_for_Correction[".audit"] = false;

	$tdataQC_Worksheet_for_Correction[".locking"] = false;

$tdataQC_Worksheet_for_Correction[".edit"] = true;
$tdataQC_Worksheet_for_Correction[".afterEditAction"] = 1;
$tdataQC_Worksheet_for_Correction[".closePopupAfterEdit"] = 1;
$tdataQC_Worksheet_for_Correction[".afterEditActionDetTable"] = "";


$tdataQC_Worksheet_for_Correction[".list"] = true;


$tdataQC_Worksheet_for_Correction[".import"] = true;

$tdataQC_Worksheet_for_Correction[".exportTo"] = true;

$tdataQC_Worksheet_for_Correction[".printFriendly"] = true;


$tdataQC_Worksheet_for_Correction[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataQC_Worksheet_for_Correction[".searchSaving"] = false;
//

$tdataQC_Worksheet_for_Correction[".showSearchPanel"] = true;
		$tdataQC_Worksheet_for_Correction[".flexibleSearch"] = true;		

if (isMobile())
	$tdataQC_Worksheet_for_Correction[".isUseAjaxSuggest"] = false;
else 
	$tdataQC_Worksheet_for_Correction[".isUseAjaxSuggest"] = true;

$tdataQC_Worksheet_for_Correction[".rowHighlite"] = true;


																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									
			
			
																																																		$tdataQC_Worksheet_for_Correction[".isUsebuttonHandlers"] = true;

$tdataQC_Worksheet_for_Correction[".addPageEvents"] = true;

// use timepicker for search panel
$tdataQC_Worksheet_for_Correction[".isUseTimeForSearch"] = false;





$tdataQC_Worksheet_for_Correction[".allSearchFields"] = array();
$tdataQC_Worksheet_for_Correction[".filterFields"] = array();
$tdataQC_Worksheet_for_Correction[".requiredSearchFields"] = array();

$tdataQC_Worksheet_for_Correction[".allSearchFields"][] = "designer_time_left";
	$tdataQC_Worksheet_for_Correction[".allSearchFields"][] = "time_to_delivery";
	$tdataQC_Worksheet_for_Correction[".allSearchFields"][] = "pdf_estimated_average";
	$tdataQC_Worksheet_for_Correction[".allSearchFields"][] = "job_id";
	$tdataQC_Worksheet_for_Correction[".allSearchFields"][] = "qc_id";
	$tdataQC_Worksheet_for_Correction[".allSearchFields"][] = "distribute_date";
	$tdataQC_Worksheet_for_Correction[".allSearchFields"][] = "designer2_id";
	$tdataQC_Worksheet_for_Correction[".allSearchFields"][] = "pdf_name";
	$tdataQC_Worksheet_for_Correction[".allSearchFields"][] = "time_left";
	$tdataQC_Worksheet_for_Correction[".allSearchFields"][] = "designer_id";
	$tdataQC_Worksheet_for_Correction[".allSearchFields"][] = "total_assigned_this_user";
	$tdataQC_Worksheet_for_Correction[".allSearchFields"][] = "notifer_id";
	$tdataQC_Worksheet_for_Correction[".allSearchFields"][] = "pdf_id";
	$tdataQC_Worksheet_for_Correction[".allSearchFields"][] = "notify_date";
	$tdataQC_Worksheet_for_Correction[".allSearchFields"][] = "work_id";
	$tdataQC_Worksheet_for_Correction[".allSearchFields"][] = "delivery_duration";
	$tdataQC_Worksheet_for_Correction[".allSearchFields"][] = "delivery_date";
	$tdataQC_Worksheet_for_Correction[".allSearchFields"][] = "web_note";
	$tdataQC_Worksheet_for_Correction[".allSearchFields"][] = "jobstatus_id";
	$tdataQC_Worksheet_for_Correction[".allSearchFields"][] = "reviewer_id";
	

$tdataQC_Worksheet_for_Correction[".googleLikeFields"] = array();
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "designer_time_left";
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "time_to_delivery";
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "work_id";
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "job_id";
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "total_images";
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "delivery_duration";
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "web_note";
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "comments";
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "pdf_id";
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "pdf_name";
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "jobstatus_id";
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "delivery_date";
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "time_left";
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "reviewer_id";
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "notifer_id";
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "notify_date";
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "designer_id";
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "designer2_id";
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "distribute_date";
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "qc_id";
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "pdf_estimated_average";
$tdataQC_Worksheet_for_Correction[".googleLikeFields"][] = "total_assigned_this_user";


$tdataQC_Worksheet_for_Correction[".advSearchFields"] = array();
$tdataQC_Worksheet_for_Correction[".advSearchFields"][] = "designer_time_left";
$tdataQC_Worksheet_for_Correction[".advSearchFields"][] = "time_to_delivery";
$tdataQC_Worksheet_for_Correction[".advSearchFields"][] = "pdf_estimated_average";
$tdataQC_Worksheet_for_Correction[".advSearchFields"][] = "job_id";
$tdataQC_Worksheet_for_Correction[".advSearchFields"][] = "qc_id";
$tdataQC_Worksheet_for_Correction[".advSearchFields"][] = "distribute_date";
$tdataQC_Worksheet_for_Correction[".advSearchFields"][] = "designer2_id";
$tdataQC_Worksheet_for_Correction[".advSearchFields"][] = "pdf_name";
$tdataQC_Worksheet_for_Correction[".advSearchFields"][] = "time_left";
$tdataQC_Worksheet_for_Correction[".advSearchFields"][] = "designer_id";
$tdataQC_Worksheet_for_Correction[".advSearchFields"][] = "total_assigned_this_user";
$tdataQC_Worksheet_for_Correction[".advSearchFields"][] = "notifer_id";
$tdataQC_Worksheet_for_Correction[".advSearchFields"][] = "pdf_id";
$tdataQC_Worksheet_for_Correction[".advSearchFields"][] = "notify_date";
$tdataQC_Worksheet_for_Correction[".advSearchFields"][] = "work_id";
$tdataQC_Worksheet_for_Correction[".advSearchFields"][] = "delivery_duration";
$tdataQC_Worksheet_for_Correction[".advSearchFields"][] = "delivery_date";
$tdataQC_Worksheet_for_Correction[".advSearchFields"][] = "web_note";
$tdataQC_Worksheet_for_Correction[".advSearchFields"][] = "jobstatus_id";
$tdataQC_Worksheet_for_Correction[".advSearchFields"][] = "reviewer_id";

$tdataQC_Worksheet_for_Correction[".tableType"] = "list";

$tdataQC_Worksheet_for_Correction[".printerPageOrientation"] = 0;
$tdataQC_Worksheet_for_Correction[".nPrinterPageScale"] = 100;

$tdataQC_Worksheet_for_Correction[".nPrinterSplitRecords"] = 40;

$tdataQC_Worksheet_for_Correction[".nPrinterPDFSplitRecords"] = 40;



$tdataQC_Worksheet_for_Correction[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataQC_Worksheet_for_Correction[".pageSize"] = 20;

$tdataQC_Worksheet_for_Correction[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY designer_time_left DESC, rejected_job.delivery_date, rejected_job.jobstatus_id";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataQC_Worksheet_for_Correction[".strOrderBy"] = $tstrOrderBy;

$tdataQC_Worksheet_for_Correction[".orderindexes"] = array();

$tdataQC_Worksheet_for_Correction[".sqlHead"] = "SELECT TIMEDIFF((rejected_jobfile2.distribute_date + INTERVAL (TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(rejected_jobfile2.work_id)) SECOND), NOW()) as designer_time_left,  SEC_TO_TIME(TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(rejected_jobfile2.work_id)) AS time_to_delivery,  rejected_job.work_id,  rejected_job.job_id,  rejected_job.total_images,  rejected_job.delivery_duration,  rejected_job.web_note,  rejected_job.comments,  rejected_job.pdf_id,  rejected_job.pdf_name,  rejected_job.jobstatus_id,  rejected_job.delivery_date,  TIMEDIFF(delivery_date, NOW()) AS time_left,  rejected_job.reviewer_id,  rejected_job.notifer_id,  rejected_job.notify_date,  rejected_jobfile2.designer_id,  rejected_jobfile2.designer2_id,  rejected_jobfile2.distribute_date,  rejected_jobfile2.qc_id,  pdf.pdf_estimated_average,  COUNT(rejected_jobfile2.work_id) as total_assigned_this_user";
$tdataQC_Worksheet_for_Correction[".sqlFrom"] = "FROM rejected_job  INNER JOIN rejected_jobfile2 ON rejected_job.work_id = rejected_jobfile2.work_id  INNER JOIN pdf ON pdf.pdf_id = rejected_job.pdf_id  AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12)";
$tdataQC_Worksheet_for_Correction[".sqlWhereExpr"] = "";
$tdataQC_Worksheet_for_Correction[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "jobstatus_id";
$arrEditTabs[] = array('tabId'=>'Information1',
					   'tabName'=>"Information",
					   'nType'=>'1',
					   'nOrder'=>12,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataQC_Worksheet_for_Correction[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Additional_Complexity1',
					  'tabName'=>"Additional Complexity",
					  'nType'=>'1',
					  'nOrder'=>8,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Information1',
					  'tabName'=>"Information",
					  'nType'=>'1',
					  'nOrder'=>20,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
$tdataQC_Worksheet_for_Correction[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Information1',
					   'tabName'=>"Information",
					   'nType'=>'1',
					   'nOrder'=>23,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataQC_Worksheet_for_Correction[".arrViewTabs"] = $arrViewTabs;





//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataQC_Worksheet_for_Correction[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataQC_Worksheet_for_Correction[".arrGroupsPerPage"] = $arrGPP;

$tdataQC_Worksheet_for_Correction[".highlightSearchResults"] = true;

$tableKeysQC_Worksheet_for_Correction = array();
$tableKeysQC_Worksheet_for_Correction[] = "work_id";
$tdataQC_Worksheet_for_Correction[".Keys"] = $tableKeysQC_Worksheet_for_Correction;

$tdataQC_Worksheet_for_Correction[".listFields"] = array();
$tdataQC_Worksheet_for_Correction[".listFields"][] = "designer_time_left";
$tdataQC_Worksheet_for_Correction[".listFields"][] = "time_left";
$tdataQC_Worksheet_for_Correction[".listFields"][] = "job_id";
$tdataQC_Worksheet_for_Correction[".listFields"][] = "work_id";
$tdataQC_Worksheet_for_Correction[".listFields"][] = "pdf_id";
$tdataQC_Worksheet_for_Correction[".listFields"][] = "pdf_name";
$tdataQC_Worksheet_for_Correction[".listFields"][] = "jobstatus_id";
$tdataQC_Worksheet_for_Correction[".listFields"][] = "total_images";
$tdataQC_Worksheet_for_Correction[".listFields"][] = "total_assigned_this_user";
$tdataQC_Worksheet_for_Correction[".listFields"][] = "pdf_estimated_average";
$tdataQC_Worksheet_for_Correction[".listFields"][] = "qc_id";
$tdataQC_Worksheet_for_Correction[".listFields"][] = "designer2_id";
$tdataQC_Worksheet_for_Correction[".listFields"][] = "designer_id";
$tdataQC_Worksheet_for_Correction[".listFields"][] = "distribute_date";
$tdataQC_Worksheet_for_Correction[".listFields"][] = "delivery_duration";
$tdataQC_Worksheet_for_Correction[".listFields"][] = "time_to_delivery";
$tdataQC_Worksheet_for_Correction[".listFields"][] = "delivery_date";
$tdataQC_Worksheet_for_Correction[".listFields"][] = "web_note";
$tdataQC_Worksheet_for_Correction[".listFields"][] = "comments";

$tdataQC_Worksheet_for_Correction[".hideMobileList"] = array();


$tdataQC_Worksheet_for_Correction[".viewFields"] = array();

$tdataQC_Worksheet_for_Correction[".addFields"] = array();

$tdataQC_Worksheet_for_Correction[".masterListFields"] = array();
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "designer_time_left";
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "time_to_delivery";
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "pdf_estimated_average";
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "job_id";
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "qc_id";
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "distribute_date";
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "designer2_id";
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "designer_id";
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "time_left";
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "pdf_name";
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "delivery_date";
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "total_assigned_this_user";
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "notifer_id";
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "notify_date";
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "pdf_id";
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "work_id";
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "total_images";
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "delivery_duration";
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "web_note";
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "comments";
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "jobstatus_id";
$tdataQC_Worksheet_for_Correction[".masterListFields"][] = "reviewer_id";

$tdataQC_Worksheet_for_Correction[".inlineAddFields"] = array();

$tdataQC_Worksheet_for_Correction[".editFields"] = array();
$tdataQC_Worksheet_for_Correction[".editFields"][] = "time_left";
$tdataQC_Worksheet_for_Correction[".editFields"][] = "job_id";
$tdataQC_Worksheet_for_Correction[".editFields"][] = "pdf_name";
$tdataQC_Worksheet_for_Correction[".editFields"][] = "total_assigned_this_user";
$tdataQC_Worksheet_for_Correction[".editFields"][] = "distribute_date";
$tdataQC_Worksheet_for_Correction[".editFields"][] = "work_id";
$tdataQC_Worksheet_for_Correction[".editFields"][] = "pdf_id";
$tdataQC_Worksheet_for_Correction[".editFields"][] = "total_images";
$tdataQC_Worksheet_for_Correction[".editFields"][] = "delivery_duration";
$tdataQC_Worksheet_for_Correction[".editFields"][] = "delivery_date";
$tdataQC_Worksheet_for_Correction[".editFields"][] = "web_note";
$tdataQC_Worksheet_for_Correction[".editFields"][] = "jobstatus_id";

$tdataQC_Worksheet_for_Correction[".inlineEditFields"] = array();

$tdataQC_Worksheet_for_Correction[".exportFields"] = array();
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "designer_time_left";
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "time_to_delivery";
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "pdf_estimated_average";
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "job_id";
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "qc_id";
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "distribute_date";
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "designer2_id";
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "designer_id";
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "time_left";
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "pdf_name";
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "total_assigned_this_user";
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "notifer_id";
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "notify_date";
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "pdf_id";
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "work_id";
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "total_images";
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "delivery_duration";
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "delivery_date";
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "web_note";
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "comments";
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "jobstatus_id";
$tdataQC_Worksheet_for_Correction[".exportFields"][] = "reviewer_id";

$tdataQC_Worksheet_for_Correction[".importFields"] = array();
$tdataQC_Worksheet_for_Correction[".importFields"][] = "designer_time_left";
$tdataQC_Worksheet_for_Correction[".importFields"][] = "time_to_delivery";
$tdataQC_Worksheet_for_Correction[".importFields"][] = "work_id";
$tdataQC_Worksheet_for_Correction[".importFields"][] = "job_id";
$tdataQC_Worksheet_for_Correction[".importFields"][] = "total_images";
$tdataQC_Worksheet_for_Correction[".importFields"][] = "delivery_duration";
$tdataQC_Worksheet_for_Correction[".importFields"][] = "web_note";
$tdataQC_Worksheet_for_Correction[".importFields"][] = "comments";
$tdataQC_Worksheet_for_Correction[".importFields"][] = "pdf_id";
$tdataQC_Worksheet_for_Correction[".importFields"][] = "pdf_name";
$tdataQC_Worksheet_for_Correction[".importFields"][] = "jobstatus_id";
$tdataQC_Worksheet_for_Correction[".importFields"][] = "delivery_date";
$tdataQC_Worksheet_for_Correction[".importFields"][] = "time_left";
$tdataQC_Worksheet_for_Correction[".importFields"][] = "reviewer_id";
$tdataQC_Worksheet_for_Correction[".importFields"][] = "notifer_id";
$tdataQC_Worksheet_for_Correction[".importFields"][] = "notify_date";
$tdataQC_Worksheet_for_Correction[".importFields"][] = "designer_id";
$tdataQC_Worksheet_for_Correction[".importFields"][] = "designer2_id";
$tdataQC_Worksheet_for_Correction[".importFields"][] = "distribute_date";
$tdataQC_Worksheet_for_Correction[".importFields"][] = "qc_id";
$tdataQC_Worksheet_for_Correction[".importFields"][] = "pdf_estimated_average";
$tdataQC_Worksheet_for_Correction[".importFields"][] = "total_assigned_this_user";

$tdataQC_Worksheet_for_Correction[".printFields"] = array();
$tdataQC_Worksheet_for_Correction[".printFields"][] = "designer_time_left";
$tdataQC_Worksheet_for_Correction[".printFields"][] = "time_to_delivery";
$tdataQC_Worksheet_for_Correction[".printFields"][] = "pdf_estimated_average";
$tdataQC_Worksheet_for_Correction[".printFields"][] = "job_id";
$tdataQC_Worksheet_for_Correction[".printFields"][] = "qc_id";
$tdataQC_Worksheet_for_Correction[".printFields"][] = "distribute_date";
$tdataQC_Worksheet_for_Correction[".printFields"][] = "designer2_id";
$tdataQC_Worksheet_for_Correction[".printFields"][] = "designer_id";
$tdataQC_Worksheet_for_Correction[".printFields"][] = "time_left";
$tdataQC_Worksheet_for_Correction[".printFields"][] = "pdf_name";
$tdataQC_Worksheet_for_Correction[".printFields"][] = "total_assigned_this_user";
$tdataQC_Worksheet_for_Correction[".printFields"][] = "notifer_id";
$tdataQC_Worksheet_for_Correction[".printFields"][] = "notify_date";
$tdataQC_Worksheet_for_Correction[".printFields"][] = "pdf_id";
$tdataQC_Worksheet_for_Correction[".printFields"][] = "work_id";
$tdataQC_Worksheet_for_Correction[".printFields"][] = "total_images";
$tdataQC_Worksheet_for_Correction[".printFields"][] = "delivery_duration";
$tdataQC_Worksheet_for_Correction[".printFields"][] = "delivery_date";
$tdataQC_Worksheet_for_Correction[".printFields"][] = "web_note";
$tdataQC_Worksheet_for_Correction[".printFields"][] = "comments";
$tdataQC_Worksheet_for_Correction[".printFields"][] = "jobstatus_id";
$tdataQC_Worksheet_for_Correction[".printFields"][] = "reviewer_id";

//	designer_time_left
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "designer_time_left";
	$fdata["GoodName"] = "designer_time_left";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","designer_time_left"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_time_left"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIMEDIFF((rejected_jobfile2.distribute_date + INTERVAL (TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(rejected_jobfile2.work_id)) SECOND), NOW())";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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

	

	
	$tdataQC_Worksheet_for_Correction["designer_time_left"] = $fdata;
//	time_to_delivery
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_to_delivery";
	$fdata["GoodName"] = "time_to_delivery";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","time_to_delivery"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "time_to_delivery"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(rejected_jobfile2.work_id))";
	
		
		
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

	

	
	$tdataQC_Worksheet_for_Correction["time_to_delivery"] = $fdata;
//	work_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "work_id";
	$fdata["GoodName"] = "work_id";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","work_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "work_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_job.work_id";
	
		
		
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

	

	
	$tdataQC_Worksheet_for_Correction["work_id"] = $fdata;
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","job_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "job_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_job.job_id";
	
		
		
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

	

	
	$tdataQC_Worksheet_for_Correction["job_id"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","total_images"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_images"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_job.total_images";
	
		
		
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
	
	
	
	

	

	
	$tdataQC_Worksheet_for_Correction["total_images"] = $fdata;
//	delivery_duration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "delivery_duration";
	$fdata["GoodName"] = "delivery_duration";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","delivery_duration"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "delivery_duration"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_job.delivery_duration";
	
		
		
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

	

	
	$tdataQC_Worksheet_for_Correction["delivery_duration"] = $fdata;
//	web_note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "web_note";
	$fdata["GoodName"] = "web_note";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","web_note"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "web_note"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_job.web_note";
	
		
		
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

	

	
	$tdataQC_Worksheet_for_Correction["web_note"] = $fdata;
//	comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "comments";
	$fdata["GoodName"] = "comments";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","comments"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "comments"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_job.comments";
	
		
		
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
	
	
	
	

	

	
	$tdataQC_Worksheet_for_Correction["comments"] = $fdata;
//	pdf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "pdf_id";
	$fdata["GoodName"] = "pdf_id";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","pdf_id"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_job.pdf_id";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataQC_Worksheet_for_Correction["pdf_id"] = $fdata;
//	pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "pdf_name";
	$fdata["GoodName"] = "pdf_name";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","pdf_name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_job.pdf_name";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
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

	

	
	$tdataQC_Worksheet_for_Correction["pdf_name"] = $fdata;
//	jobstatus_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "jobstatus_id";
	$fdata["GoodName"] = "jobstatus_id";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","jobstatus_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobstatus_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_job.jobstatus_id";
	
		
		
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

	

	
	$tdataQC_Worksheet_for_Correction["jobstatus_id"] = $fdata;
//	delivery_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "delivery_date";
	$fdata["GoodName"] = "delivery_date";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","delivery_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "delivery_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_job.delivery_date";
	
		
		
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

	

	
	$tdataQC_Worksheet_for_Correction["delivery_date"] = $fdata;
//	time_left
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "time_left";
	$fdata["GoodName"] = "time_left";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","time_left"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
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

	

	
	$tdataQC_Worksheet_for_Correction["time_left"] = $fdata;
//	reviewer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "reviewer_id";
	$fdata["GoodName"] = "reviewer_id";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","reviewer_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reviewer_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_job.reviewer_id";
	
		
		
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

	

	
	$tdataQC_Worksheet_for_Correction["reviewer_id"] = $fdata;
//	notifer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "notifer_id";
	$fdata["GoodName"] = "notifer_id";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","notifer_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "notifer_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_job.notifer_id";
	
		
		
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

	

	
	$tdataQC_Worksheet_for_Correction["notifer_id"] = $fdata;
//	notify_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "notify_date";
	$fdata["GoodName"] = "notify_date";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","notify_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "notify_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_job.notify_date";
	
		
		
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
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
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

	

	
	$tdataQC_Worksheet_for_Correction["notify_date"] = $fdata;
//	designer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "designer_id";
	$fdata["GoodName"] = "designer_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","designer_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.designer_id";
	
		
		
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

	

	
	$tdataQC_Worksheet_for_Correction["designer_id"] = $fdata;
//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","designer2_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer2_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.designer2_id";
	
		
		
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

	

	
	$tdataQC_Worksheet_for_Correction["designer2_id"] = $fdata;
//	distribute_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "distribute_date";
	$fdata["GoodName"] = "distribute_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","distribute_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "distribute_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.distribute_date";
	
		
		
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

	

	
	$tdataQC_Worksheet_for_Correction["distribute_date"] = $fdata;
//	qc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "qc_id";
	$fdata["GoodName"] = "qc_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","qc_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qc_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.qc_id";
	
		
		
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

	

	
	$tdataQC_Worksheet_for_Correction["qc_id"] = $fdata;
//	pdf_estimated_average
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "pdf_estimated_average";
	$fdata["GoodName"] = "pdf_estimated_average";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","pdf_estimated_average"); 
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

	

	
	$tdataQC_Worksheet_for_Correction["pdf_estimated_average"] = $fdata;
//	total_assigned_this_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "total_assigned_this_user";
	$fdata["GoodName"] = "total_assigned_this_user";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("QC_Worksheet_for_Correction","total_assigned_this_user"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_assigned_this_user"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(rejected_jobfile2.work_id)";
	
		
		
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
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataQC_Worksheet_for_Correction["total_assigned_this_user"] = $fdata;

	
$tables_data["QC Worksheet for Correction"]=&$tdataQC_Worksheet_for_Correction;
$field_labels["QC_Worksheet_for_Correction"] = &$fieldLabelsQC_Worksheet_for_Correction;
$fieldToolTips["QC Worksheet for Correction"] = &$fieldToolTipsQC_Worksheet_for_Correction;
$page_titles["QC_Worksheet_for_Correction"] = &$pageTitlesQC_Worksheet_for_Correction;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["QC Worksheet for Correction"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["QC Worksheet for Correction"] = array();


	
				$strOriginalDetailsTable="user";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="user";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "user";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["QC Worksheet for Correction"][0] = $masterParams;	
				$masterTablesData["QC Worksheet for Correction"][0]["masterKeys"] = array();
	$masterTablesData["QC Worksheet for Correction"][0]["masterKeys"][]="user_id";
				$masterTablesData["QC Worksheet for Correction"][0]["detailKeys"] = array();
	$masterTablesData["QC Worksheet for Correction"][0]["detailKeys"][]="notifer_id";
		
	
				$strOriginalDetailsTable="pdf";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pdf";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pdf";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["QC Worksheet for Correction"][1] = $masterParams;	
				$masterTablesData["QC Worksheet for Correction"][1]["masterKeys"] = array();
	$masterTablesData["QC Worksheet for Correction"][1]["masterKeys"][]="pdf_id";
				$masterTablesData["QC Worksheet for Correction"][1]["detailKeys"] = array();
	$masterTablesData["QC Worksheet for Correction"][1]["detailKeys"][]="pdf_id";
		
	
				$strOriginalDetailsTable="jobstatus";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="jobstatus";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "jobstatus";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["QC Worksheet for Correction"][2] = $masterParams;	
				$masterTablesData["QC Worksheet for Correction"][2]["masterKeys"] = array();
	$masterTablesData["QC Worksheet for Correction"][2]["masterKeys"][]="jobstatus_id";
				$masterTablesData["QC Worksheet for Correction"][2]["detailKeys"] = array();
	$masterTablesData["QC Worksheet for Correction"][2]["detailKeys"][]="jobstatus_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_QC_Worksheet_for_Correction()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TIMEDIFF((rejected_jobfile2.distribute_date + INTERVAL (TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(rejected_jobfile2.work_id)) SECOND), NOW()) as designer_time_left,  SEC_TO_TIME(TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(rejected_jobfile2.work_id)) AS time_to_delivery,  rejected_job.work_id,  rejected_job.job_id,  rejected_job.total_images,  rejected_job.delivery_duration,  rejected_job.web_note,  rejected_job.comments,  rejected_job.pdf_id,  rejected_job.pdf_name,  rejected_job.jobstatus_id,  rejected_job.delivery_date,  TIMEDIFF(delivery_date, NOW()) AS time_left,  rejected_job.reviewer_id,  rejected_job.notifer_id,  rejected_job.notify_date,  rejected_jobfile2.designer_id,  rejected_jobfile2.designer2_id,  rejected_jobfile2.distribute_date,  rejected_jobfile2.qc_id,  pdf.pdf_estimated_average,  COUNT(rejected_jobfile2.work_id) as total_assigned_this_user";
$proto0["m_strFrom"] = "FROM rejected_job  INNER JOIN rejected_jobfile2 ON rejected_job.work_id = rejected_jobfile2.work_id  INNER JOIN pdf ON pdf.pdf_id = rejected_job.pdf_id  AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12)";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY designer_time_left DESC, rejected_job.delivery_date, rejected_job.jobstatus_id";
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
	"m_sql" => "(rejected_jobfile2.distribute_date + INTERVAL (TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(rejected_jobfile2.work_id)) SECOND)"
));

$proto6["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NOW()"
));

$proto6["m_arguments"][]=$obj;
$proto6["m_strFunctionName"] = "TIMEDIFF";
$obj = new SQLFunctionCall($proto6);

$proto5["m_sql"] = "TIMEDIFF((rejected_jobfile2.distribute_date + INTERVAL (TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(rejected_jobfile2.work_id)) SECOND), NOW())";
$proto5["m_srcTableName"] = "QC Worksheet for Correction";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "designer_time_left";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$proto10=array();
$proto10["m_functiontype"] = "SQLF_CUSTOM";
$proto10["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(rejected_jobfile2.work_id)"
));

$proto10["m_arguments"][]=$obj;
$proto10["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto10);

$proto9["m_sql"] = "SEC_TO_TIME(TIME_TO_SEC(pdf.pdf_estimated_average)*COUNT(rejected_jobfile2.work_id))";
$proto9["m_srcTableName"] = "QC Worksheet for Correction";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "time_to_delivery";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto12["m_sql"] = "rejected_job.work_id";
$proto12["m_srcTableName"] = "QC Worksheet for Correction";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto14["m_sql"] = "rejected_job.job_id";
$proto14["m_srcTableName"] = "QC Worksheet for Correction";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "total_images",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto16["m_sql"] = "rejected_job.total_images";
$proto16["m_srcTableName"] = "QC Worksheet for Correction";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "delivery_duration",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto18["m_sql"] = "rejected_job.delivery_duration";
$proto18["m_srcTableName"] = "QC Worksheet for Correction";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "web_note",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto20["m_sql"] = "rejected_job.web_note";
$proto20["m_srcTableName"] = "QC Worksheet for Correction";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "comments",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto22["m_sql"] = "rejected_job.comments";
$proto22["m_srcTableName"] = "QC Worksheet for Correction";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto24["m_sql"] = "rejected_job.pdf_id";
$proto24["m_srcTableName"] = "QC Worksheet for Correction";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto26["m_sql"] = "rejected_job.pdf_name";
$proto26["m_srcTableName"] = "QC Worksheet for Correction";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto28["m_sql"] = "rejected_job.jobstatus_id";
$proto28["m_srcTableName"] = "QC Worksheet for Correction";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "delivery_date",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto30["m_sql"] = "rejected_job.delivery_date";
$proto30["m_srcTableName"] = "QC Worksheet for Correction";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$proto33=array();
$proto33["m_functiontype"] = "SQLF_CUSTOM";
$proto33["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "delivery_date"
));

$proto33["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NOW()"
));

$proto33["m_arguments"][]=$obj;
$proto33["m_strFunctionName"] = "TIMEDIFF";
$obj = new SQLFunctionCall($proto33);

$proto32["m_sql"] = "TIMEDIFF(delivery_date, NOW())";
$proto32["m_srcTableName"] = "QC Worksheet for Correction";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "time_left";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "reviewer_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto36["m_sql"] = "rejected_job.reviewer_id";
$proto36["m_srcTableName"] = "QC Worksheet for Correction";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "notifer_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto38["m_sql"] = "rejected_job.notifer_id";
$proto38["m_srcTableName"] = "QC Worksheet for Correction";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "notify_date",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto40["m_sql"] = "rejected_job.notify_date";
$proto40["m_srcTableName"] = "QC Worksheet for Correction";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto42["m_sql"] = "rejected_jobfile2.designer_id";
$proto42["m_srcTableName"] = "QC Worksheet for Correction";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto44["m_sql"] = "rejected_jobfile2.designer2_id";
$proto44["m_srcTableName"] = "QC Worksheet for Correction";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "distribute_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto46["m_sql"] = "rejected_jobfile2.distribute_date";
$proto46["m_srcTableName"] = "QC Worksheet for Correction";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "qc_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto48["m_sql"] = "rejected_jobfile2.qc_id";
$proto48["m_srcTableName"] = "QC Worksheet for Correction";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average",
	"m_strTable" => "pdf",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto50["m_sql"] = "pdf.pdf_estimated_average";
$proto50["m_srcTableName"] = "QC Worksheet for Correction";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$proto53=array();
$proto53["m_functiontype"] = "SQLF_COUNT";
$proto53["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto53["m_arguments"][]=$obj;
$proto53["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto53);

$proto52["m_sql"] = "COUNT(rejected_jobfile2.work_id)";
$proto52["m_srcTableName"] = "QC Worksheet for Correction";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "total_assigned_this_user";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto55=array();
$proto55["m_link"] = "SQLL_MAIN";
			$proto56=array();
$proto56["m_strName"] = "rejected_job";
$proto56["m_srcTableName"] = "QC Worksheet for Correction";
$proto56["m_columns"] = array();
$proto56["m_columns"][] = "work_id";
$proto56["m_columns"][] = "job_id";
$proto56["m_columns"][] = "previous_job_id";
$proto56["m_columns"][] = "total_images";
$proto56["m_columns"][] = "reject_type";
$proto56["m_columns"][] = "reject_notes";
$proto56["m_columns"][] = "web_note";
$proto56["m_columns"][] = "comments";
$proto56["m_columns"][] = "jobstatus_id";
$proto56["m_columns"][] = "downloader_id";
$proto56["m_columns"][] = "download_date";
$proto56["m_columns"][] = "distributor_id";
$proto56["m_columns"][] = "distribute_date";
$proto56["m_columns"][] = "uploader_id";
$proto56["m_columns"][] = "upload_date";
$proto56["m_columns"][] = "notifer_id";
$proto56["m_columns"][] = "notify_date";
$proto56["m_columns"][] = "reviewer_id";
$proto56["m_columns"][] = "reject_date";
$proto56["m_columns"][] = "reject_reason";
$proto56["m_columns"][] = "delivery_date";
$proto56["m_columns"][] = "pdf_id";
$proto56["m_columns"][] = "pdf_name";
$proto56["m_columns"][] = "delivery_duration";
$proto56["m_columns"][] = "designer_list";
$proto56["m_columns"][] = "qcs_list";
$obj = new SQLTable($proto56);

$proto55["m_table"] = $obj;
$proto55["m_sql"] = "rejected_job";
$proto55["m_alias"] = "";
$proto55["m_srcTableName"] = "QC Worksheet for Correction";
$proto57=array();
$proto57["m_sql"] = "";
$proto57["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto57["m_column"]=$obj;
$proto57["m_contained"] = array();
$proto57["m_strCase"] = "";
$proto57["m_havingmode"] = false;
$proto57["m_inBrackets"] = false;
$proto57["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto57);

$proto55["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto55);

$proto0["m_fromlist"][]=$obj;
												$proto59=array();
$proto59["m_link"] = "SQLL_INNERJOIN";
			$proto60=array();
$proto60["m_strName"] = "rejected_jobfile2";
$proto60["m_srcTableName"] = "QC Worksheet for Correction";
$proto60["m_columns"] = array();
$proto60["m_columns"][] = "jobfile_id";
$proto60["m_columns"][] = "previous_jobfile_id";
$proto60["m_columns"][] = "file_url";
$proto60["m_columns"][] = "client_id";
$proto60["m_columns"][] = "work_id";
$proto60["m_columns"][] = "job_id";
$proto60["m_columns"][] = "previous_job_id";
$proto60["m_columns"][] = "project_id";
$proto60["m_columns"][] = "folder_name";
$proto60["m_columns"][] = "filename";
$proto60["m_columns"][] = "jobfile_type";
$proto60["m_columns"][] = "jobfile_note";
$proto60["m_columns"][] = "jobfile_status_id";
$proto60["m_columns"][] = "downloader_id";
$proto60["m_columns"][] = "distributor_id";
$proto60["m_columns"][] = "designer_id";
$proto60["m_columns"][] = "qc_id";
$proto60["m_columns"][] = "uploader_id";
$proto60["m_columns"][] = "notifier_id";
$proto60["m_columns"][] = "rejector_id";
$proto60["m_columns"][] = "download_date";
$proto60["m_columns"][] = "distribute_date";
$proto60["m_columns"][] = "start_date";
$proto60["m_columns"][] = "end_date";
$proto60["m_columns"][] = "designer_time";
$proto60["m_columns"][] = "qcstart_date";
$proto60["m_columns"][] = "qcend_date";
$proto60["m_columns"][] = "qc_time";
$proto60["m_columns"][] = "upload_date";
$proto60["m_columns"][] = "notify_date";
$proto60["m_columns"][] = "reject_date";
$proto60["m_columns"][] = "reject_reason";
$proto60["m_columns"][] = "reject_reason_others";
$proto60["m_columns"][] = "screenshots";
$proto60["m_columns"][] = "designer2_id";
$proto60["m_columns"][] = "start2_date";
$proto60["m_columns"][] = "end2_date";
$proto60["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto60);

$proto59["m_table"] = $obj;
$proto59["m_sql"] = "INNER JOIN rejected_jobfile2 ON rejected_job.work_id = rejected_jobfile2.work_id";
$proto59["m_alias"] = "";
$proto59["m_srcTableName"] = "QC Worksheet for Correction";
$proto61=array();
$proto61["m_sql"] = "rejected_job.work_id = rejected_jobfile2.work_id";
$proto61["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto61["m_column"]=$obj;
$proto61["m_contained"] = array();
$proto61["m_strCase"] = "= rejected_jobfile2.work_id";
$proto61["m_havingmode"] = false;
$proto61["m_inBrackets"] = false;
$proto61["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto61);

$proto59["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto59);

$proto0["m_fromlist"][]=$obj;
												$proto63=array();
$proto63["m_link"] = "SQLL_INNERJOIN";
			$proto64=array();
$proto64["m_strName"] = "pdf";
$proto64["m_srcTableName"] = "QC Worksheet for Correction";
$proto64["m_columns"] = array();
$proto64["m_columns"][] = "pdf_id";
$proto64["m_columns"][] = "pdf_name";
$proto64["m_columns"][] = "client_id";
$proto64["m_columns"][] = "pdf_location";
$proto64["m_columns"][] = "last_update";
$proto64["m_columns"][] = "pdf_estimated_average";
$proto64["m_columns"][] = "pdf_estimated_average1";
$proto64["m_columns"][] = "pdf_estimated_average2";
$proto64["m_columns"][] = "pdf_actual_average";
$proto64["m_columns"][] = "price";
$obj = new SQLTable($proto64);

$proto63["m_table"] = $obj;
$proto63["m_sql"] = "INNER JOIN pdf ON pdf.pdf_id = rejected_job.pdf_id  AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12)";
$proto63["m_alias"] = "";
$proto63["m_srcTableName"] = "QC Worksheet for Correction";
$proto65=array();
$proto65["m_sql"] = "pdf.pdf_id = rejected_job.pdf_id  AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12)";
$proto65["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "pdf.pdf_id = rejected_job.pdf_id  AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12)"
));

$proto65["m_column"]=$obj;
$proto65["m_contained"] = array();
						$proto67=array();
$proto67["m_sql"] = "pdf.pdf_id = rejected_job.pdf_id";
$proto67["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "pdf",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto67["m_column"]=$obj;
$proto67["m_contained"] = array();
$proto67["m_strCase"] = "= rejected_job.pdf_id";
$proto67["m_havingmode"] = false;
$proto67["m_inBrackets"] = false;
$proto67["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto67);

			$proto65["m_contained"][]=$obj;
						$proto69=array();
$proto69["m_sql"] = "jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12";
$proto69["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12"
));

$proto69["m_column"]=$obj;
$proto69["m_contained"] = array();
						$proto71=array();
$proto71["m_sql"] = "jobstatus_id != 0";
$proto71["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto71["m_column"]=$obj;
$proto71["m_contained"] = array();
$proto71["m_strCase"] = "!= 0";
$proto71["m_havingmode"] = false;
$proto71["m_inBrackets"] = false;
$proto71["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto71);

			$proto69["m_contained"][]=$obj;
						$proto73=array();
$proto73["m_sql"] = "jobstatus_id != 9";
$proto73["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto73["m_column"]=$obj;
$proto73["m_contained"] = array();
$proto73["m_strCase"] = "!= 9";
$proto73["m_havingmode"] = false;
$proto73["m_inBrackets"] = false;
$proto73["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto73);

			$proto69["m_contained"][]=$obj;
						$proto75=array();
$proto75["m_sql"] = "jobstatus_id != 12";
$proto75["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto75["m_column"]=$obj;
$proto75["m_contained"] = array();
$proto75["m_strCase"] = "!= 12";
$proto75["m_havingmode"] = false;
$proto75["m_inBrackets"] = false;
$proto75["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto75);

			$proto69["m_contained"][]=$obj;
$proto69["m_strCase"] = "";
$proto69["m_havingmode"] = false;
$proto69["m_inBrackets"] = true;
$proto69["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto69);

			$proto65["m_contained"][]=$obj;
$proto65["m_strCase"] = "";
$proto65["m_havingmode"] = false;
$proto65["m_inBrackets"] = false;
$proto65["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto65);

$proto63["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto63);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto77=array();
						$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto77["m_column"]=$obj;
$obj = new SQLGroupByItem($proto77);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto79=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "designer_time_left "
));

$proto79["m_column"]=$obj;
$proto79["m_bAsc"] = 0;
$proto79["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto79);

$proto0["m_orderby"][]=$obj;					
												$proto81=array();
						$obj = new SQLField(array(
	"m_strName" => "delivery_date",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto81["m_column"]=$obj;
$proto81["m_bAsc"] = 1;
$proto81["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto81);

$proto0["m_orderby"][]=$obj;					
												$proto83=array();
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "QC Worksheet for Correction"
));

$proto83["m_column"]=$obj;
$proto83["m_bAsc"] = 1;
$proto83["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto83);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="QC Worksheet for Correction";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_QC_Worksheet_for_Correction = createSqlQuery_QC_Worksheet_for_Correction();


	
																						
	
$tdataQC_Worksheet_for_Correction[".sqlquery"] = $queryData_QC_Worksheet_for_Correction;

include_once(getabspath("include/QC_Worksheet_for_Correction_events.php"));
$tableEvents["QC Worksheet for Correction"] = new eventclass_QC_Worksheet_for_Correction;
$tdataQC_Worksheet_for_Correction[".hasEvents"] = true;

?>