<?php
require_once(getabspath("classes/cipherer.php"));




$tdata14704_Urgent_Jobs = array();	
	$tdata14704_Urgent_Jobs[".truncateText"] = true;
	$tdata14704_Urgent_Jobs[".NumberOfChars"] = 40; 
	$tdata14704_Urgent_Jobs[".ShortName"] = "14704_Urgent_Jobs";
	$tdata14704_Urgent_Jobs[".OwnerID"] = "";
	$tdata14704_Urgent_Jobs[".OriginalTable"] = "job";

//	field labels
$fieldLabels14704_Urgent_Jobs = array();
$fieldToolTips14704_Urgent_Jobs = array();
$pageTitles14704_Urgent_Jobs = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabels14704_Urgent_Jobs["English"] = array();
	$fieldToolTips14704_Urgent_Jobs["English"] = array();
	$pageTitles14704_Urgent_Jobs["English"] = array();
	$fieldLabels14704_Urgent_Jobs["English"]["work_id"] = "Work Id";
	$fieldToolTips14704_Urgent_Jobs["English"]["work_id"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["job_id"] = "Job Id";
	$fieldToolTips14704_Urgent_Jobs["English"]["job_id"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["total_images"] = "Total Images";
	$fieldToolTips14704_Urgent_Jobs["English"]["total_images"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["is_urgent"] = "Is Urgent";
	$fieldToolTips14704_Urgent_Jobs["English"]["is_urgent"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["urgent_instruction"] = "Urgent Instruction";
	$fieldToolTips14704_Urgent_Jobs["English"]["urgent_instruction"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["delivery_duration"] = "Delivery Duration";
	$fieldToolTips14704_Urgent_Jobs["English"]["delivery_duration"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["notes"] = "Notes";
	$fieldToolTips14704_Urgent_Jobs["English"]["notes"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["web_note"] = "Web Note";
	$fieldToolTips14704_Urgent_Jobs["English"]["web_note"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["comments"] = "Comments";
	$fieldToolTips14704_Urgent_Jobs["English"]["comments"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["pdf_id"] = "Pdf Id";
	$fieldToolTips14704_Urgent_Jobs["English"]["pdf_id"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["pdf_location"] = "Pdf Location";
	$fieldToolTips14704_Urgent_Jobs["English"]["pdf_location"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["jobstatus_id"] = "Jobstatus";
	$fieldToolTips14704_Urgent_Jobs["English"]["jobstatus_id"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["reviewed_date"] = "Reviewed Date";
	$fieldToolTips14704_Urgent_Jobs["English"]["reviewed_date"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["accepted_date"] = "Accepted Date";
	$fieldToolTips14704_Urgent_Jobs["English"]["accepted_date"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["designer_list"] = "Designer List";
	$fieldToolTips14704_Urgent_Jobs["English"]["designer_list"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["delivery_date"] = "Delivery Date";
	$fieldToolTips14704_Urgent_Jobs["English"]["delivery_date"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["client_id"] = "Client Id";
	$fieldToolTips14704_Urgent_Jobs["English"]["client_id"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["project_id"] = "Project Id";
	$fieldToolTips14704_Urgent_Jobs["English"]["project_id"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["complexity1"] = "Complexity1";
	$fieldToolTips14704_Urgent_Jobs["English"]["complexity1"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["complexity2"] = "Complexity2";
	$fieldToolTips14704_Urgent_Jobs["English"]["complexity2"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["complexity3"] = "Complexity3";
	$fieldToolTips14704_Urgent_Jobs["English"]["complexity3"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["complexity4"] = "Complexity4";
	$fieldToolTips14704_Urgent_Jobs["English"]["complexity4"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["complexity5"] = "Complexity5";
	$fieldToolTips14704_Urgent_Jobs["English"]["complexity5"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["complexity0"] = "Complexity0";
	$fieldToolTips14704_Urgent_Jobs["English"]["complexity0"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["complexityNP"] = "Complexity NP";
	$fieldToolTips14704_Urgent_Jobs["English"]["complexityNP"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["custom_complexity"] = "Custom Complexity";
	$fieldToolTips14704_Urgent_Jobs["English"]["custom_complexity"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["notify_options"] = "Notify Options";
	$fieldToolTips14704_Urgent_Jobs["English"]["notify_options"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["allow_batch_process"] = "Allow Batch Process";
	$fieldToolTips14704_Urgent_Jobs["English"]["allow_batch_process"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["reviewer_id"] = "Reviewer Id";
	$fieldToolTips14704_Urgent_Jobs["English"]["reviewer_id"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["accept_id"] = "Accept Id";
	$fieldToolTips14704_Urgent_Jobs["English"]["accept_id"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["notifer_id"] = "Notifer Id";
	$fieldToolTips14704_Urgent_Jobs["English"]["notifer_id"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["notify_date"] = "Notify Date";
	$fieldToolTips14704_Urgent_Jobs["English"]["notify_date"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["time_left"] = "Time Left";
	$fieldToolTips14704_Urgent_Jobs["English"]["time_left"] = "";
	$fieldLabels14704_Urgent_Jobs["English"]["qcs_list"] = "Qcs List";
	$fieldToolTips14704_Urgent_Jobs["English"]["qcs_list"] = "";
	if (count($fieldToolTips14704_Urgent_Jobs["English"]))
		$tdata14704_Urgent_Jobs[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels14704_Urgent_Jobs[""] = array();
	$fieldToolTips14704_Urgent_Jobs[""] = array();
	$pageTitles14704_Urgent_Jobs[""] = array();
	if (count($fieldToolTips14704_Urgent_Jobs[""]))
		$tdata14704_Urgent_Jobs[".isUseToolTips"] = true;
}
	
	
	$tdata14704_Urgent_Jobs[".NCSearch"] = true;



$tdata14704_Urgent_Jobs[".shortTableName"] = "14704_Urgent_Jobs";
$tdata14704_Urgent_Jobs[".nSecOptions"] = 0;
$tdata14704_Urgent_Jobs[".recsPerRowList"] = 1;
$tdata14704_Urgent_Jobs[".recsPerRowPrint"] = 1;
$tdata14704_Urgent_Jobs[".mainTableOwnerID"] = "";
$tdata14704_Urgent_Jobs[".moveNext"] = 1;
$tdata14704_Urgent_Jobs[".entityType"] = 1;

$tdata14704_Urgent_Jobs[".strOriginalTableName"] = "job";




$tdata14704_Urgent_Jobs[".showAddInPopup"] = false;

$tdata14704_Urgent_Jobs[".showEditInPopup"] = false;

$tdata14704_Urgent_Jobs[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata14704_Urgent_Jobs[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata14704_Urgent_Jobs[".fieldsForRegister"] = array();

if (!isMobile())
	$tdata14704_Urgent_Jobs[".listAjax"] = true;
else 
	$tdata14704_Urgent_Jobs[".listAjax"] = false;

	$tdata14704_Urgent_Jobs[".audit"] = false;

	$tdata14704_Urgent_Jobs[".locking"] = false;

$tdata14704_Urgent_Jobs[".edit"] = true;
$tdata14704_Urgent_Jobs[".afterEditAction"] = 1;
$tdata14704_Urgent_Jobs[".closePopupAfterEdit"] = 1;
$tdata14704_Urgent_Jobs[".afterEditActionDetTable"] = "";


$tdata14704_Urgent_Jobs[".list"] = true;

$tdata14704_Urgent_Jobs[".view"] = true;




$tdata14704_Urgent_Jobs[".delete"] = true;

$tdata14704_Urgent_Jobs[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdata14704_Urgent_Jobs[".searchSaving"] = false;
//

$tdata14704_Urgent_Jobs[".showSearchPanel"] = true;
		$tdata14704_Urgent_Jobs[".flexibleSearch"] = true;		

if (isMobile())
	$tdata14704_Urgent_Jobs[".isUseAjaxSuggest"] = false;
else 
	$tdata14704_Urgent_Jobs[".isUseAjaxSuggest"] = true;

$tdata14704_Urgent_Jobs[".rowHighlite"] = true;


																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																			
			
																																																																																																																																																																																																																																																																																																																																																																																																$tdata14704_Urgent_Jobs[".isUsebuttonHandlers"] = true;

$tdata14704_Urgent_Jobs[".addPageEvents"] = true;

// use timepicker for search panel
$tdata14704_Urgent_Jobs[".isUseTimeForSearch"] = true;





$tdata14704_Urgent_Jobs[".allSearchFields"] = array();
$tdata14704_Urgent_Jobs[".filterFields"] = array();
$tdata14704_Urgent_Jobs[".requiredSearchFields"] = array();

$tdata14704_Urgent_Jobs[".allSearchFields"][] = "time_left";
	$tdata14704_Urgent_Jobs[".allSearchFields"][] = "qcs_list";
	$tdata14704_Urgent_Jobs[".allSearchFields"][] = "job_id";
	$tdata14704_Urgent_Jobs[".allSearchFields"][] = "accept_id";
	$tdata14704_Urgent_Jobs[".allSearchFields"][] = "project_id";
	$tdata14704_Urgent_Jobs[".allSearchFields"][] = "notifer_id";
	$tdata14704_Urgent_Jobs[".allSearchFields"][] = "pdf_id";
	$tdata14704_Urgent_Jobs[".allSearchFields"][] = "notify_date";
	$tdata14704_Urgent_Jobs[".allSearchFields"][] = "work_id";
	$tdata14704_Urgent_Jobs[".allSearchFields"][] = "notify_options";
	$tdata14704_Urgent_Jobs[".allSearchFields"][] = "is_urgent";
	$tdata14704_Urgent_Jobs[".allSearchFields"][] = "delivery_duration";
	$tdata14704_Urgent_Jobs[".allSearchFields"][] = "delivery_date";
	$tdata14704_Urgent_Jobs[".allSearchFields"][] = "notes";
	$tdata14704_Urgent_Jobs[".allSearchFields"][] = "web_note";
	$tdata14704_Urgent_Jobs[".allSearchFields"][] = "allow_batch_process";
	$tdata14704_Urgent_Jobs[".allSearchFields"][] = "client_id";
	$tdata14704_Urgent_Jobs[".allSearchFields"][] = "jobstatus_id";
	$tdata14704_Urgent_Jobs[".allSearchFields"][] = "reviewer_id";
	$tdata14704_Urgent_Jobs[".allSearchFields"][] = "reviewed_date";
	$tdata14704_Urgent_Jobs[".allSearchFields"][] = "accepted_date";
	$tdata14704_Urgent_Jobs[".allSearchFields"][] = "designer_list";
	

$tdata14704_Urgent_Jobs[".googleLikeFields"] = array();
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "work_id";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "job_id";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "total_images";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "is_urgent";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "urgent_instruction";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "delivery_duration";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "notes";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "web_note";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "comments";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "pdf_id";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "pdf_location";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "jobstatus_id";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "reviewed_date";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "accepted_date";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "designer_list";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "delivery_date";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "time_left";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "client_id";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "project_id";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "complexity1";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "complexity2";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "complexity3";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "complexity4";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "complexity5";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "complexity0";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "complexityNP";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "custom_complexity";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "notify_options";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "allow_batch_process";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "reviewer_id";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "accept_id";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "notifer_id";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "notify_date";
$tdata14704_Urgent_Jobs[".googleLikeFields"][] = "qcs_list";


$tdata14704_Urgent_Jobs[".advSearchFields"] = array();
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "time_left";
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "qcs_list";
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "job_id";
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "accept_id";
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "project_id";
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "notifer_id";
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "pdf_id";
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "notify_date";
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "work_id";
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "notify_options";
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "is_urgent";
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "delivery_duration";
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "delivery_date";
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "notes";
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "web_note";
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "allow_batch_process";
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "client_id";
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "jobstatus_id";
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "reviewer_id";
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "reviewed_date";
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "accepted_date";
$tdata14704_Urgent_Jobs[".advSearchFields"][] = "designer_list";

$tdata14704_Urgent_Jobs[".tableType"] = "list";

$tdata14704_Urgent_Jobs[".printerPageOrientation"] = 0;
$tdata14704_Urgent_Jobs[".nPrinterPageScale"] = 100;

$tdata14704_Urgent_Jobs[".nPrinterSplitRecords"] = 40;

$tdata14704_Urgent_Jobs[".nPrinterPDFSplitRecords"] = 40;



$tdata14704_Urgent_Jobs[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdata14704_Urgent_Jobs[".pageSize"] = 20;

$tdata14704_Urgent_Jobs[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY TIMEDIFF(delivery_date, NOW()), delivery_date, is_urgent DESC, accepted_date, jobstatus_id";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata14704_Urgent_Jobs[".strOrderBy"] = $tstrOrderBy;

$tdata14704_Urgent_Jobs[".orderindexes"] = array();
$tdata14704_Urgent_Jobs[".orderindexes"][] = array(17, (1 ? "ASC" : "DESC"), "TIMEDIFF(delivery_date, NOW())");
$tdata14704_Urgent_Jobs[".orderindexes"][] = array(16, (1 ? "ASC" : "DESC"), "delivery_date");
$tdata14704_Urgent_Jobs[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "is_urgent");
$tdata14704_Urgent_Jobs[".orderindexes"][] = array(14, (1 ? "ASC" : "DESC"), "accepted_date");
$tdata14704_Urgent_Jobs[".orderindexes"][] = array(12, (1 ? "ASC" : "DESC"), "jobstatus_id");

$tdata14704_Urgent_Jobs[".sqlHead"] = "SELECT work_id,  job_id,  total_images,  is_urgent,  urgent_instruction,  delivery_duration,  notes,  web_note,  comments,  pdf_id,  pdf_location,  jobstatus_id,  reviewed_date,  accepted_date,  designer_list,  delivery_date,  TIMEDIFF(delivery_date, NOW()) AS time_left,  client_id,  project_id,  complexity1,  complexity2,  complexity3,  complexity4,  complexity5,  complexity0,  complexityNP,  custom_complexity,  notify_options,  allow_batch_process,  reviewer_id,  accept_id,  notifer_id,  notify_date,  qcs_list";
$tdata14704_Urgent_Jobs[".sqlFrom"] = "FROM job";
$tdata14704_Urgent_Jobs[".sqlWhereExpr"] = "accepted_date !=\"0000-00-00 00:00:00\" AND is_urgent = \"1\" AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12 AND (pdf_id =5001 OR pdf_id =5879 OR pdf_id =5880))";
$tdata14704_Urgent_Jobs[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "complexity0";
	$tabFields[] = "complexityNP";
	$tabFields[] = "custom_complexity";
$arrEditTabs[] = array('tabId'=>'Aditional_Complexcity1',
					   'tabName'=>"Additional Complexity",
					   'nType'=>'1',
					   'nOrder'=>9,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "client_id";
	$tabFields[] = "jobstatus_id";
	$tabFields[] = "reviewer_id";
	$tabFields[] = "reviewed_date";
	$tabFields[] = "pdf_location";
	$tabFields[] = "accept_id";
	$tabFields[] = "accepted_date";
	$tabFields[] = "notify_date";
	$tabFields[] = "notifer_id";
	$tabFields[] = "project_id";
$arrEditTabs[] = array('tabId'=>'Information1',
					   'tabName'=>"Information",
					   'nType'=>'1',
					   'nOrder'=>23,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdata14704_Urgent_Jobs[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "complexity0";
	$tabFields[] = "complexityNP";
	$tabFields[] = "custom_complexity";
$arrAddTabs[] = array('tabId'=>'Additional_Complexity1',
					  'tabName'=>"Additional Complexity",
					  'nType'=>'1',
					  'nOrder'=>8,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "work_id";
	$tabFields[] = "notify_options";
	$tabFields[] = "client_id";
	$tabFields[] = "jobstatus_id";
	$tabFields[] = "reviewer_id";
	$tabFields[] = "reviewed_date";
	$tabFields[] = "pdf_location";
$arrAddTabs[] = array('tabId'=>'Information1',
					  'tabName'=>"Information",
					  'nType'=>'1',
					  'nOrder'=>20,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdata14704_Urgent_Jobs[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "client_id";
	$tabFields[] = "jobstatus_id";
	$tabFields[] = "reviewer_id";
	$tabFields[] = "reviewed_date";
	$tabFields[] = "accept_id";
	$tabFields[] = "accepted_date";
	$tabFields[] = "notifer_id";
	$tabFields[] = "notify_date";
	$tabFields[] = "pdf_location";
$arrViewTabs[] = array('tabId'=>'Information1',
					   'tabName'=>"Information",
					   'nType'=>'1',
					   'nOrder'=>22,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdata14704_Urgent_Jobs[".arrViewTabs"] = $arrViewTabs;





//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata14704_Urgent_Jobs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata14704_Urgent_Jobs[".arrGroupsPerPage"] = $arrGPP;

$tdata14704_Urgent_Jobs[".highlightSearchResults"] = true;

$tableKeys14704_Urgent_Jobs = array();
$tableKeys14704_Urgent_Jobs[] = "work_id";
$tdata14704_Urgent_Jobs[".Keys"] = $tableKeys14704_Urgent_Jobs;

$tdata14704_Urgent_Jobs[".listFields"] = array();
$tdata14704_Urgent_Jobs[".listFields"][] = "work_id";
$tdata14704_Urgent_Jobs[".listFields"][] = "job_id";
$tdata14704_Urgent_Jobs[".listFields"][] = "total_images";
$tdata14704_Urgent_Jobs[".listFields"][] = "pdf_id";
$tdata14704_Urgent_Jobs[".listFields"][] = "delivery_duration";
$tdata14704_Urgent_Jobs[".listFields"][] = "jobstatus_id";
$tdata14704_Urgent_Jobs[".listFields"][] = "is_urgent";
$tdata14704_Urgent_Jobs[".listFields"][] = "urgent_instruction";
$tdata14704_Urgent_Jobs[".listFields"][] = "delivery_date";
$tdata14704_Urgent_Jobs[".listFields"][] = "time_left";
$tdata14704_Urgent_Jobs[".listFields"][] = "notes";
$tdata14704_Urgent_Jobs[".listFields"][] = "web_note";
$tdata14704_Urgent_Jobs[".listFields"][] = "comments";
$tdata14704_Urgent_Jobs[".listFields"][] = "reviewed_date";
$tdata14704_Urgent_Jobs[".listFields"][] = "pdf_location";
$tdata14704_Urgent_Jobs[".listFields"][] = "accepted_date";
$tdata14704_Urgent_Jobs[".listFields"][] = "designer_list";
$tdata14704_Urgent_Jobs[".listFields"][] = "qcs_list";

$tdata14704_Urgent_Jobs[".hideMobileList"] = array();


$tdata14704_Urgent_Jobs[".viewFields"] = array();
$tdata14704_Urgent_Jobs[".viewFields"][] = "qcs_list";
$tdata14704_Urgent_Jobs[".viewFields"][] = "work_id";
$tdata14704_Urgent_Jobs[".viewFields"][] = "job_id";
$tdata14704_Urgent_Jobs[".viewFields"][] = "pdf_id";
$tdata14704_Urgent_Jobs[".viewFields"][] = "project_id";
$tdata14704_Urgent_Jobs[".viewFields"][] = "complexity1";
$tdata14704_Urgent_Jobs[".viewFields"][] = "complexity2";
$tdata14704_Urgent_Jobs[".viewFields"][] = "complexity3";
$tdata14704_Urgent_Jobs[".viewFields"][] = "complexity4";
$tdata14704_Urgent_Jobs[".viewFields"][] = "complexity5";
$tdata14704_Urgent_Jobs[".viewFields"][] = "complexity0";
$tdata14704_Urgent_Jobs[".viewFields"][] = "complexityNP";
$tdata14704_Urgent_Jobs[".viewFields"][] = "custom_complexity";
$tdata14704_Urgent_Jobs[".viewFields"][] = "total_images";
$tdata14704_Urgent_Jobs[".viewFields"][] = "notify_options";
$tdata14704_Urgent_Jobs[".viewFields"][] = "is_urgent";
$tdata14704_Urgent_Jobs[".viewFields"][] = "urgent_instruction";
$tdata14704_Urgent_Jobs[".viewFields"][] = "time_left";
$tdata14704_Urgent_Jobs[".viewFields"][] = "delivery_duration";
$tdata14704_Urgent_Jobs[".viewFields"][] = "delivery_date";
$tdata14704_Urgent_Jobs[".viewFields"][] = "allow_batch_process";
$tdata14704_Urgent_Jobs[".viewFields"][] = "client_id";
$tdata14704_Urgent_Jobs[".viewFields"][] = "jobstatus_id";
$tdata14704_Urgent_Jobs[".viewFields"][] = "reviewer_id";
$tdata14704_Urgent_Jobs[".viewFields"][] = "reviewed_date";
$tdata14704_Urgent_Jobs[".viewFields"][] = "accept_id";
$tdata14704_Urgent_Jobs[".viewFields"][] = "accepted_date";
$tdata14704_Urgent_Jobs[".viewFields"][] = "notifer_id";
$tdata14704_Urgent_Jobs[".viewFields"][] = "notify_date";
$tdata14704_Urgent_Jobs[".viewFields"][] = "pdf_location";
$tdata14704_Urgent_Jobs[".viewFields"][] = "designer_list";

$tdata14704_Urgent_Jobs[".addFields"] = array();
$tdata14704_Urgent_Jobs[".addFields"][] = "job_id";
$tdata14704_Urgent_Jobs[".addFields"][] = "pdf_id";
$tdata14704_Urgent_Jobs[".addFields"][] = "complexity1";
$tdata14704_Urgent_Jobs[".addFields"][] = "complexity2";
$tdata14704_Urgent_Jobs[".addFields"][] = "complexity3";
$tdata14704_Urgent_Jobs[".addFields"][] = "complexity4";
$tdata14704_Urgent_Jobs[".addFields"][] = "complexity5";
$tdata14704_Urgent_Jobs[".addFields"][] = "complexity0";
$tdata14704_Urgent_Jobs[".addFields"][] = "complexityNP";
$tdata14704_Urgent_Jobs[".addFields"][] = "custom_complexity";
$tdata14704_Urgent_Jobs[".addFields"][] = "total_images";
$tdata14704_Urgent_Jobs[".addFields"][] = "is_urgent";
$tdata14704_Urgent_Jobs[".addFields"][] = "urgent_instruction";
$tdata14704_Urgent_Jobs[".addFields"][] = "delivery_duration";
$tdata14704_Urgent_Jobs[".addFields"][] = "delivery_date";
$tdata14704_Urgent_Jobs[".addFields"][] = "notes";
$tdata14704_Urgent_Jobs[".addFields"][] = "web_note";
$tdata14704_Urgent_Jobs[".addFields"][] = "comments";
$tdata14704_Urgent_Jobs[".addFields"][] = "work_id";
$tdata14704_Urgent_Jobs[".addFields"][] = "notify_options";
$tdata14704_Urgent_Jobs[".addFields"][] = "client_id";
$tdata14704_Urgent_Jobs[".addFields"][] = "jobstatus_id";
$tdata14704_Urgent_Jobs[".addFields"][] = "reviewer_id";
$tdata14704_Urgent_Jobs[".addFields"][] = "reviewed_date";
$tdata14704_Urgent_Jobs[".addFields"][] = "pdf_location";

$tdata14704_Urgent_Jobs[".masterListFields"] = array();
$tdata14704_Urgent_Jobs[".masterListFields"][] = "qcs_list";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "time_left";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "delivery_date";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "accept_id";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "job_id";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "project_id";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "notifer_id";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "pdf_id";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "notify_date";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "complexity1";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "work_id";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "complexity2";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "complexity3";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "complexity4";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "complexity5";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "complexity0";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "complexityNP";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "custom_complexity";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "total_images";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "notify_options";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "is_urgent";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "urgent_instruction";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "delivery_duration";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "notes";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "web_note";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "comments";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "allow_batch_process";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "client_id";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "jobstatus_id";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "reviewer_id";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "reviewed_date";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "pdf_location";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "accepted_date";
$tdata14704_Urgent_Jobs[".masterListFields"][] = "designer_list";

$tdata14704_Urgent_Jobs[".inlineAddFields"] = array();

$tdata14704_Urgent_Jobs[".editFields"] = array();
$tdata14704_Urgent_Jobs[".editFields"][] = "work_id";
$tdata14704_Urgent_Jobs[".editFields"][] = "job_id";
$tdata14704_Urgent_Jobs[".editFields"][] = "pdf_id";
$tdata14704_Urgent_Jobs[".editFields"][] = "complexity1";
$tdata14704_Urgent_Jobs[".editFields"][] = "complexity2";
$tdata14704_Urgent_Jobs[".editFields"][] = "complexity3";
$tdata14704_Urgent_Jobs[".editFields"][] = "complexity4";
$tdata14704_Urgent_Jobs[".editFields"][] = "complexity5";
$tdata14704_Urgent_Jobs[".editFields"][] = "complexity0";
$tdata14704_Urgent_Jobs[".editFields"][] = "complexityNP";
$tdata14704_Urgent_Jobs[".editFields"][] = "custom_complexity";
$tdata14704_Urgent_Jobs[".editFields"][] = "total_images";
$tdata14704_Urgent_Jobs[".editFields"][] = "delivery_duration";
$tdata14704_Urgent_Jobs[".editFields"][] = "delivery_date";
$tdata14704_Urgent_Jobs[".editFields"][] = "is_urgent";
$tdata14704_Urgent_Jobs[".editFields"][] = "urgent_instruction";
$tdata14704_Urgent_Jobs[".editFields"][] = "notes";
$tdata14704_Urgent_Jobs[".editFields"][] = "web_note";
$tdata14704_Urgent_Jobs[".editFields"][] = "comments";
$tdata14704_Urgent_Jobs[".editFields"][] = "notify_options";
$tdata14704_Urgent_Jobs[".editFields"][] = "allow_batch_process";
$tdata14704_Urgent_Jobs[".editFields"][] = "client_id";
$tdata14704_Urgent_Jobs[".editFields"][] = "jobstatus_id";
$tdata14704_Urgent_Jobs[".editFields"][] = "reviewer_id";
$tdata14704_Urgent_Jobs[".editFields"][] = "reviewed_date";
$tdata14704_Urgent_Jobs[".editFields"][] = "pdf_location";
$tdata14704_Urgent_Jobs[".editFields"][] = "accept_id";
$tdata14704_Urgent_Jobs[".editFields"][] = "accepted_date";
$tdata14704_Urgent_Jobs[".editFields"][] = "notify_date";
$tdata14704_Urgent_Jobs[".editFields"][] = "notifer_id";
$tdata14704_Urgent_Jobs[".editFields"][] = "project_id";

$tdata14704_Urgent_Jobs[".inlineEditFields"] = array();

$tdata14704_Urgent_Jobs[".exportFields"] = array();
$tdata14704_Urgent_Jobs[".exportFields"][] = "time_left";
$tdata14704_Urgent_Jobs[".exportFields"][] = "qcs_list";
$tdata14704_Urgent_Jobs[".exportFields"][] = "job_id";
$tdata14704_Urgent_Jobs[".exportFields"][] = "accept_id";
$tdata14704_Urgent_Jobs[".exportFields"][] = "project_id";
$tdata14704_Urgent_Jobs[".exportFields"][] = "notifer_id";
$tdata14704_Urgent_Jobs[".exportFields"][] = "notify_date";
$tdata14704_Urgent_Jobs[".exportFields"][] = "pdf_id";
$tdata14704_Urgent_Jobs[".exportFields"][] = "complexity1";
$tdata14704_Urgent_Jobs[".exportFields"][] = "work_id";
$tdata14704_Urgent_Jobs[".exportFields"][] = "complexity2";
$tdata14704_Urgent_Jobs[".exportFields"][] = "complexity3";
$tdata14704_Urgent_Jobs[".exportFields"][] = "complexity4";
$tdata14704_Urgent_Jobs[".exportFields"][] = "complexity5";
$tdata14704_Urgent_Jobs[".exportFields"][] = "complexity0";
$tdata14704_Urgent_Jobs[".exportFields"][] = "complexityNP";
$tdata14704_Urgent_Jobs[".exportFields"][] = "custom_complexity";
$tdata14704_Urgent_Jobs[".exportFields"][] = "total_images";
$tdata14704_Urgent_Jobs[".exportFields"][] = "notify_options";
$tdata14704_Urgent_Jobs[".exportFields"][] = "is_urgent";
$tdata14704_Urgent_Jobs[".exportFields"][] = "urgent_instruction";
$tdata14704_Urgent_Jobs[".exportFields"][] = "delivery_duration";
$tdata14704_Urgent_Jobs[".exportFields"][] = "delivery_date";
$tdata14704_Urgent_Jobs[".exportFields"][] = "notes";
$tdata14704_Urgent_Jobs[".exportFields"][] = "web_note";
$tdata14704_Urgent_Jobs[".exportFields"][] = "comments";
$tdata14704_Urgent_Jobs[".exportFields"][] = "allow_batch_process";
$tdata14704_Urgent_Jobs[".exportFields"][] = "client_id";
$tdata14704_Urgent_Jobs[".exportFields"][] = "jobstatus_id";
$tdata14704_Urgent_Jobs[".exportFields"][] = "reviewer_id";
$tdata14704_Urgent_Jobs[".exportFields"][] = "reviewed_date";
$tdata14704_Urgent_Jobs[".exportFields"][] = "pdf_location";
$tdata14704_Urgent_Jobs[".exportFields"][] = "accepted_date";
$tdata14704_Urgent_Jobs[".exportFields"][] = "designer_list";

$tdata14704_Urgent_Jobs[".importFields"] = array();
$tdata14704_Urgent_Jobs[".importFields"][] = "work_id";
$tdata14704_Urgent_Jobs[".importFields"][] = "job_id";
$tdata14704_Urgent_Jobs[".importFields"][] = "total_images";
$tdata14704_Urgent_Jobs[".importFields"][] = "is_urgent";
$tdata14704_Urgent_Jobs[".importFields"][] = "urgent_instruction";
$tdata14704_Urgent_Jobs[".importFields"][] = "delivery_duration";
$tdata14704_Urgent_Jobs[".importFields"][] = "notes";
$tdata14704_Urgent_Jobs[".importFields"][] = "web_note";
$tdata14704_Urgent_Jobs[".importFields"][] = "comments";
$tdata14704_Urgent_Jobs[".importFields"][] = "pdf_id";
$tdata14704_Urgent_Jobs[".importFields"][] = "pdf_location";
$tdata14704_Urgent_Jobs[".importFields"][] = "jobstatus_id";
$tdata14704_Urgent_Jobs[".importFields"][] = "reviewed_date";
$tdata14704_Urgent_Jobs[".importFields"][] = "accepted_date";
$tdata14704_Urgent_Jobs[".importFields"][] = "designer_list";
$tdata14704_Urgent_Jobs[".importFields"][] = "delivery_date";
$tdata14704_Urgent_Jobs[".importFields"][] = "time_left";
$tdata14704_Urgent_Jobs[".importFields"][] = "client_id";
$tdata14704_Urgent_Jobs[".importFields"][] = "project_id";
$tdata14704_Urgent_Jobs[".importFields"][] = "complexity1";
$tdata14704_Urgent_Jobs[".importFields"][] = "complexity2";
$tdata14704_Urgent_Jobs[".importFields"][] = "complexity3";
$tdata14704_Urgent_Jobs[".importFields"][] = "complexity4";
$tdata14704_Urgent_Jobs[".importFields"][] = "complexity5";
$tdata14704_Urgent_Jobs[".importFields"][] = "complexity0";
$tdata14704_Urgent_Jobs[".importFields"][] = "complexityNP";
$tdata14704_Urgent_Jobs[".importFields"][] = "custom_complexity";
$tdata14704_Urgent_Jobs[".importFields"][] = "notify_options";
$tdata14704_Urgent_Jobs[".importFields"][] = "allow_batch_process";
$tdata14704_Urgent_Jobs[".importFields"][] = "reviewer_id";
$tdata14704_Urgent_Jobs[".importFields"][] = "accept_id";
$tdata14704_Urgent_Jobs[".importFields"][] = "notifer_id";
$tdata14704_Urgent_Jobs[".importFields"][] = "notify_date";
$tdata14704_Urgent_Jobs[".importFields"][] = "qcs_list";

$tdata14704_Urgent_Jobs[".printFields"] = array();
$tdata14704_Urgent_Jobs[".printFields"][] = "qcs_list";
$tdata14704_Urgent_Jobs[".printFields"][] = "time_left";
$tdata14704_Urgent_Jobs[".printFields"][] = "job_id";
$tdata14704_Urgent_Jobs[".printFields"][] = "accept_id";
$tdata14704_Urgent_Jobs[".printFields"][] = "project_id";
$tdata14704_Urgent_Jobs[".printFields"][] = "notifer_id";
$tdata14704_Urgent_Jobs[".printFields"][] = "notify_date";
$tdata14704_Urgent_Jobs[".printFields"][] = "pdf_id";
$tdata14704_Urgent_Jobs[".printFields"][] = "complexity1";
$tdata14704_Urgent_Jobs[".printFields"][] = "work_id";
$tdata14704_Urgent_Jobs[".printFields"][] = "complexity2";
$tdata14704_Urgent_Jobs[".printFields"][] = "complexity3";
$tdata14704_Urgent_Jobs[".printFields"][] = "complexity4";
$tdata14704_Urgent_Jobs[".printFields"][] = "complexity5";
$tdata14704_Urgent_Jobs[".printFields"][] = "complexity0";
$tdata14704_Urgent_Jobs[".printFields"][] = "complexityNP";
$tdata14704_Urgent_Jobs[".printFields"][] = "custom_complexity";
$tdata14704_Urgent_Jobs[".printFields"][] = "total_images";
$tdata14704_Urgent_Jobs[".printFields"][] = "notify_options";
$tdata14704_Urgent_Jobs[".printFields"][] = "is_urgent";
$tdata14704_Urgent_Jobs[".printFields"][] = "urgent_instruction";
$tdata14704_Urgent_Jobs[".printFields"][] = "delivery_duration";
$tdata14704_Urgent_Jobs[".printFields"][] = "delivery_date";
$tdata14704_Urgent_Jobs[".printFields"][] = "notes";
$tdata14704_Urgent_Jobs[".printFields"][] = "web_note";
$tdata14704_Urgent_Jobs[".printFields"][] = "comments";
$tdata14704_Urgent_Jobs[".printFields"][] = "allow_batch_process";
$tdata14704_Urgent_Jobs[".printFields"][] = "client_id";
$tdata14704_Urgent_Jobs[".printFields"][] = "jobstatus_id";
$tdata14704_Urgent_Jobs[".printFields"][] = "reviewer_id";
$tdata14704_Urgent_Jobs[".printFields"][] = "reviewed_date";
$tdata14704_Urgent_Jobs[".printFields"][] = "pdf_location";
$tdata14704_Urgent_Jobs[".printFields"][] = "accepted_date";
$tdata14704_Urgent_Jobs[".printFields"][] = "designer_list";

//	work_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_id";
	$fdata["GoodName"] = "work_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","work_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "work_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "work_id";
	
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
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

	

	
	$tdata14704_Urgent_Jobs["work_id"] = $fdata;
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","job_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "job_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job_id";
	
		
		
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
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

	

	
	$tdata14704_Urgent_Jobs["job_id"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","total_images"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_images"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_images";
	
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
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
	
	
	
	

	

	
	$tdata14704_Urgent_Jobs["total_images"] = $fdata;
//	is_urgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "is_urgent";
	$fdata["GoodName"] = "is_urgent";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","is_urgent"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "is_urgent"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_urgent";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 99;
	
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

	

	
	$tdata14704_Urgent_Jobs["is_urgent"] = $fdata;
//	urgent_instruction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "urgent_instruction";
	$fdata["GoodName"] = "urgent_instruction";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","urgent_instruction"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "urgent_instruction"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "urgent_instruction";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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
	
	
	
	

	

	
	$tdata14704_Urgent_Jobs["urgent_instruction"] = $fdata;
//	delivery_duration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "delivery_duration";
	$fdata["GoodName"] = "delivery_duration";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","delivery_duration"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "delivery_duration"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delivery_duration";
	
		
		
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

	

	
	$tdata14704_Urgent_Jobs["delivery_duration"] = $fdata;
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","notes"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "notes"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notes";
	
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdata14704_Urgent_Jobs["notes"] = $fdata;
//	web_note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "web_note";
	$fdata["GoodName"] = "web_note";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","web_note"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "web_note"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "web_note";
	
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdata14704_Urgent_Jobs["web_note"] = $fdata;
//	comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "comments";
	$fdata["GoodName"] = "comments";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","comments"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "comments"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comments";
	
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	

	

	
	$tdata14704_Urgent_Jobs["comments"] = $fdata;
//	pdf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "pdf_id";
	$fdata["GoodName"] = "pdf_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","pdf_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf_id";
	
		
		
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "pdf";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "pdf_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "pdf_name";
	
		
	$edata["LookupOrderBy"] = "pdf_name";
	
		
			
		
				
	
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdata14704_Urgent_Jobs["pdf_id"] = $fdata;
//	pdf_location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "pdf_location";
	$fdata["GoodName"] = "pdf_location";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","pdf_location"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_location"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf_location";
	
		
		
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
	$edata["LookupTable"] = "pdf";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "pdf_location";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "pdf_location";
	
		
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
	
	
	
	

	

	
	$tdata14704_Urgent_Jobs["pdf_location"] = $fdata;
//	jobstatus_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "jobstatus_id";
	$fdata["GoodName"] = "jobstatus_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","jobstatus_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobstatus_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobstatus_id";
	
		
		
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
	
		
	$edata["LookupOrderBy"] = "job_status";
	
		
			
		
				
	
	
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdata14704_Urgent_Jobs["jobstatus_id"] = $fdata;
//	reviewed_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "reviewed_date";
	$fdata["GoodName"] = "reviewed_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","reviewed_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reviewed_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reviewed_date";
	
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
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

	

	
	$tdata14704_Urgent_Jobs["reviewed_date"] = $fdata;
//	accepted_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "accepted_date";
	$fdata["GoodName"] = "accepted_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","accepted_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "accepted_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "accepted_date";
	
		
		
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
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
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
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdata14704_Urgent_Jobs["accepted_date"] = $fdata;
//	designer_list
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "designer_list";
	$fdata["GoodName"] = "designer_list";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","designer_list"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_list"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designer_list";
	
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdata14704_Urgent_Jobs["designer_list"] = $fdata;
//	delivery_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "delivery_date";
	$fdata["GoodName"] = "delivery_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","delivery_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "delivery_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delivery_date";
	
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
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

	

	
	$tdata14704_Urgent_Jobs["delivery_date"] = $fdata;
//	time_left
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "time_left";
	$fdata["GoodName"] = "time_left";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","time_left"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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
	
	
		
	$fdata["EditFormats"]["add"] = $edata;
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
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
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

	

	
	$tdata14704_Urgent_Jobs["time_left"] = $fdata;
//	client_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "client_id";
	$fdata["GoodName"] = "client_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","client_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "client_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "client_id";
	
		
		
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

	

	
	$tdata14704_Urgent_Jobs["client_id"] = $fdata;
//	project_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "project_id";
	$fdata["GoodName"] = "project_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","project_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "project_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project_id";
	
		
		
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

	

	
	$tdata14704_Urgent_Jobs["project_id"] = $fdata;
//	complexity1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "complexity1";
	$fdata["GoodName"] = "complexity1";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","complexity1"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "complexity1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "complexity1";
	
		
		
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
	
	
	
	

	

	
	$tdata14704_Urgent_Jobs["complexity1"] = $fdata;
//	complexity2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "complexity2";
	$fdata["GoodName"] = "complexity2";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","complexity2"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "complexity2"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "complexity2";
	
		
		
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
	
	
	
	

	

	
	$tdata14704_Urgent_Jobs["complexity2"] = $fdata;
//	complexity3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "complexity3";
	$fdata["GoodName"] = "complexity3";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","complexity3"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "complexity3"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "complexity3";
	
		
		
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
	
	
	
	

	

	
	$tdata14704_Urgent_Jobs["complexity3"] = $fdata;
//	complexity4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "complexity4";
	$fdata["GoodName"] = "complexity4";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","complexity4"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "complexity4"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "complexity4";
	
		
		
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
	
	
	
	

	

	
	$tdata14704_Urgent_Jobs["complexity4"] = $fdata;
//	complexity5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "complexity5";
	$fdata["GoodName"] = "complexity5";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","complexity5"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "complexity5"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "complexity5";
	
		
		
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
	
	
	
	

	

	
	$tdata14704_Urgent_Jobs["complexity5"] = $fdata;
//	complexity0
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "complexity0";
	$fdata["GoodName"] = "complexity0";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","complexity0"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "complexity0"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "complexity0";
	
		
		
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
	
	
	
	

	

	
	$tdata14704_Urgent_Jobs["complexity0"] = $fdata;
//	complexityNP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "complexityNP";
	$fdata["GoodName"] = "complexityNP";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","complexityNP"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "complexityNP"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "complexityNP";
	
		
		
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
	
	
	
	

	

	
	$tdata14704_Urgent_Jobs["complexityNP"] = $fdata;
//	custom_complexity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "custom_complexity";
	$fdata["GoodName"] = "custom_complexity";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","custom_complexity"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "custom_complexity"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "custom_complexity";
	
		
		
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
	
	
	
	

	

	
	$tdata14704_Urgent_Jobs["custom_complexity"] = $fdata;
//	notify_options
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "notify_options";
	$fdata["GoodName"] = "notify_options";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","notify_options"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "notify_options"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notify_options";
	
		
		
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

	

	
	$tdata14704_Urgent_Jobs["notify_options"] = $fdata;
//	allow_batch_process
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "allow_batch_process";
	$fdata["GoodName"] = "allow_batch_process";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","allow_batch_process"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "allow_batch_process"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "allow_batch_process";
	
		
		
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

	

	
	$tdata14704_Urgent_Jobs["allow_batch_process"] = $fdata;
//	reviewer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "reviewer_id";
	$fdata["GoodName"] = "reviewer_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","reviewer_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reviewer_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reviewer_id";
	
		
		
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

	

	
	$tdata14704_Urgent_Jobs["reviewer_id"] = $fdata;
//	accept_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "accept_id";
	$fdata["GoodName"] = "accept_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","accept_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "accept_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "accept_id";
	
		
		
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

	

	
	$tdata14704_Urgent_Jobs["accept_id"] = $fdata;
//	notifer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "notifer_id";
	$fdata["GoodName"] = "notifer_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","notifer_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "notifer_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notifer_id";
	
		
		
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

	

	
	$tdata14704_Urgent_Jobs["notifer_id"] = $fdata;
//	notify_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "notify_date";
	$fdata["GoodName"] = "notify_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","notify_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "notify_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notify_date";
	
		
		
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

	

	
	$tdata14704_Urgent_Jobs["notify_date"] = $fdata;
//	qcs_list
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "qcs_list";
	$fdata["GoodName"] = "qcs_list";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("14704_Urgent_Jobs","qcs_list"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qcs_list"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qcs_list";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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

	

	
	$tdata14704_Urgent_Jobs["qcs_list"] = $fdata;

	
$tables_data["14704 Urgent Jobs"]=&$tdata14704_Urgent_Jobs;
$field_labels["14704_Urgent_Jobs"] = &$fieldLabels14704_Urgent_Jobs;
$fieldToolTips["14704 Urgent Jobs"] = &$fieldToolTips14704_Urgent_Jobs;
$page_titles["14704_Urgent_Jobs"] = &$pageTitles14704_Urgent_Jobs;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["14704 Urgent Jobs"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["14704 Urgent Jobs"] = array();


	
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
					$masterTablesData["14704 Urgent Jobs"][0] = $masterParams;	
				$masterTablesData["14704 Urgent Jobs"][0]["masterKeys"] = array();
	$masterTablesData["14704 Urgent Jobs"][0]["masterKeys"][]="user_id";
				$masterTablesData["14704 Urgent Jobs"][0]["detailKeys"] = array();
	$masterTablesData["14704 Urgent Jobs"][0]["detailKeys"][]="notifer_id";
		
	
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
					$masterTablesData["14704 Urgent Jobs"][1] = $masterParams;	
				$masterTablesData["14704 Urgent Jobs"][1]["masterKeys"] = array();
	$masterTablesData["14704 Urgent Jobs"][1]["masterKeys"][]="notify_option_id";
				$masterTablesData["14704 Urgent Jobs"][1]["detailKeys"] = array();
	$masterTablesData["14704 Urgent Jobs"][1]["detailKeys"][]="notify_options";
		
	
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
					$masterTablesData["14704 Urgent Jobs"][2] = $masterParams;	
				$masterTablesData["14704 Urgent Jobs"][2]["masterKeys"] = array();
	$masterTablesData["14704 Urgent Jobs"][2]["masterKeys"][]="pdf_id";
				$masterTablesData["14704 Urgent Jobs"][2]["detailKeys"] = array();
	$masterTablesData["14704 Urgent Jobs"][2]["detailKeys"][]="pdf_id";
		
	
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
					$masterTablesData["14704 Urgent Jobs"][3] = $masterParams;	
				$masterTablesData["14704 Urgent Jobs"][3]["masterKeys"] = array();
	$masterTablesData["14704 Urgent Jobs"][3]["masterKeys"][]="jobstatus_id";
				$masterTablesData["14704 Urgent Jobs"][3]["detailKeys"] = array();
	$masterTablesData["14704 Urgent Jobs"][3]["detailKeys"][]="jobstatus_id";
		
	
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
					$masterTablesData["14704 Urgent Jobs"][4] = $masterParams;	
				$masterTablesData["14704 Urgent Jobs"][4]["masterKeys"] = array();
	$masterTablesData["14704 Urgent Jobs"][4]["masterKeys"][]="project_id";
				$masterTablesData["14704 Urgent Jobs"][4]["detailKeys"] = array();
	$masterTablesData["14704 Urgent Jobs"][4]["detailKeys"][]="project_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_14704_Urgent_Jobs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_id,  job_id,  total_images,  is_urgent,  urgent_instruction,  delivery_duration,  notes,  web_note,  comments,  pdf_id,  pdf_location,  jobstatus_id,  reviewed_date,  accepted_date,  designer_list,  delivery_date,  TIMEDIFF(delivery_date, NOW()) AS time_left,  client_id,  project_id,  complexity1,  complexity2,  complexity3,  complexity4,  complexity5,  complexity0,  complexityNP,  custom_complexity,  notify_options,  allow_batch_process,  reviewer_id,  accept_id,  notifer_id,  notify_date,  qcs_list";
$proto0["m_strFrom"] = "FROM job";
$proto0["m_strWhere"] = "accepted_date !=\"0000-00-00 00:00:00\" AND is_urgent = \"1\" AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12 AND (pdf_id =5001 OR pdf_id =5879 OR pdf_id =5880))";
$proto0["m_strOrderBy"] = "ORDER BY TIMEDIFF(delivery_date, NOW()), delivery_date, is_urgent DESC, accepted_date, jobstatus_id";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "accepted_date !=\"0000-00-00 00:00:00\" AND is_urgent = \"1\" AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12 AND (pdf_id =5001 OR pdf_id =5879 OR pdf_id =5880))";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "accepted_date !=\"0000-00-00 00:00:00\" AND is_urgent = \"1\" AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12 AND (pdf_id =5001 OR pdf_id =5879 OR pdf_id =5880))"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "accepted_date !=\"0000-00-00 00:00:00\"";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "accepted_date",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "!=\"0000-00-00 00:00:00\"";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "is_urgent = \"1\"";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "is_urgent",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "= \"1\"";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
						$proto7=array();
$proto7["m_sql"] = "jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12 AND (pdf_id =5001 OR pdf_id =5879 OR pdf_id =5880)";
$proto7["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12 AND (pdf_id =5001 OR pdf_id =5879 OR pdf_id =5880)"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
						$proto9=array();
$proto9["m_sql"] = "jobstatus_id != 0";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "!= 0";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

			$proto7["m_contained"][]=$obj;
						$proto11=array();
$proto11["m_sql"] = "jobstatus_id != 9";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "!= 9";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

			$proto7["m_contained"][]=$obj;
						$proto13=array();
$proto13["m_sql"] = "jobstatus_id != 12";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "!= 12";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

			$proto7["m_contained"][]=$obj;
						$proto15=array();
$proto15["m_sql"] = "pdf_id =5001 OR pdf_id =5879 OR pdf_id =5880";
$proto15["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "pdf_id =5001 OR pdf_id =5879 OR pdf_id =5880"
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
						$proto17=array();
$proto17["m_sql"] = "pdf_id =5001";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "=5001";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

			$proto15["m_contained"][]=$obj;
						$proto19=array();
$proto19["m_sql"] = "pdf_id =5879";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "=5879";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

			$proto15["m_contained"][]=$obj;
						$proto21=array();
$proto21["m_sql"] = "pdf_id =5880";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "=5880";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

			$proto15["m_contained"][]=$obj;
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = true;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

			$proto7["m_contained"][]=$obj;
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = true;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto25["m_sql"] = "work_id";
$proto25["m_srcTableName"] = "14704 Urgent Jobs";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto27["m_sql"] = "job_id";
$proto27["m_srcTableName"] = "14704 Urgent Jobs";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "total_images",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto29["m_sql"] = "total_images";
$proto29["m_srcTableName"] = "14704 Urgent Jobs";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "is_urgent",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto31["m_sql"] = "is_urgent";
$proto31["m_srcTableName"] = "14704 Urgent Jobs";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "urgent_instruction",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto33["m_sql"] = "urgent_instruction";
$proto33["m_srcTableName"] = "14704 Urgent Jobs";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "delivery_duration",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto35["m_sql"] = "delivery_duration";
$proto35["m_srcTableName"] = "14704 Urgent Jobs";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto37["m_sql"] = "notes";
$proto37["m_srcTableName"] = "14704 Urgent Jobs";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "web_note",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto39["m_sql"] = "web_note";
$proto39["m_srcTableName"] = "14704 Urgent Jobs";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "comments",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto41["m_sql"] = "comments";
$proto41["m_srcTableName"] = "14704 Urgent Jobs";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto43["m_sql"] = "pdf_id";
$proto43["m_srcTableName"] = "14704 Urgent Jobs";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_location",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto45["m_sql"] = "pdf_location";
$proto45["m_srcTableName"] = "14704 Urgent Jobs";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto47["m_sql"] = "jobstatus_id";
$proto47["m_srcTableName"] = "14704 Urgent Jobs";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "reviewed_date",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto49["m_sql"] = "reviewed_date";
$proto49["m_srcTableName"] = "14704 Urgent Jobs";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "accepted_date",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto51["m_sql"] = "accepted_date";
$proto51["m_srcTableName"] = "14704 Urgent Jobs";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_list",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto53["m_sql"] = "designer_list";
$proto53["m_srcTableName"] = "14704 Urgent Jobs";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "delivery_date",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto55["m_sql"] = "delivery_date";
$proto55["m_srcTableName"] = "14704 Urgent Jobs";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$proto58=array();
$proto58["m_functiontype"] = "SQLF_CUSTOM";
$proto58["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "delivery_date"
));

$proto58["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NOW()"
));

$proto58["m_arguments"][]=$obj;
$proto58["m_strFunctionName"] = "TIMEDIFF";
$obj = new SQLFunctionCall($proto58);

$proto57["m_sql"] = "TIMEDIFF(delivery_date, NOW())";
$proto57["m_srcTableName"] = "14704 Urgent Jobs";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "time_left";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "client_id",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto61["m_sql"] = "client_id";
$proto61["m_srcTableName"] = "14704 Urgent Jobs";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto63["m_sql"] = "project_id";
$proto63["m_srcTableName"] = "14704 Urgent Jobs";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity1",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto65["m_sql"] = "complexity1";
$proto65["m_srcTableName"] = "14704 Urgent Jobs";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity2",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto67["m_sql"] = "complexity2";
$proto67["m_srcTableName"] = "14704 Urgent Jobs";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity3",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto69["m_sql"] = "complexity3";
$proto69["m_srcTableName"] = "14704 Urgent Jobs";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity4",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto71["m_sql"] = "complexity4";
$proto71["m_srcTableName"] = "14704 Urgent Jobs";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity5",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto73["m_sql"] = "complexity5";
$proto73["m_srcTableName"] = "14704 Urgent Jobs";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity0",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto75["m_sql"] = "complexity0";
$proto75["m_srcTableName"] = "14704 Urgent Jobs";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "complexityNP",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto77["m_sql"] = "complexityNP";
$proto77["m_srcTableName"] = "14704 Urgent Jobs";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "custom_complexity",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto79["m_sql"] = "custom_complexity";
$proto79["m_srcTableName"] = "14704 Urgent Jobs";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "notify_options",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto81["m_sql"] = "notify_options";
$proto81["m_srcTableName"] = "14704 Urgent Jobs";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "allow_batch_process",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto83["m_sql"] = "allow_batch_process";
$proto83["m_srcTableName"] = "14704 Urgent Jobs";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "reviewer_id",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto85["m_sql"] = "reviewer_id";
$proto85["m_srcTableName"] = "14704 Urgent Jobs";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "accept_id",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto87["m_sql"] = "accept_id";
$proto87["m_srcTableName"] = "14704 Urgent Jobs";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "notifer_id",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto89["m_sql"] = "notifer_id";
$proto89["m_srcTableName"] = "14704 Urgent Jobs";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "notify_date",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto91["m_sql"] = "notify_date";
$proto91["m_srcTableName"] = "14704 Urgent Jobs";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "qcs_list",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto93["m_sql"] = "qcs_list";
$proto93["m_srcTableName"] = "14704 Urgent Jobs";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto95=array();
$proto95["m_link"] = "SQLL_MAIN";
			$proto96=array();
$proto96["m_strName"] = "job";
$proto96["m_srcTableName"] = "14704 Urgent Jobs";
$proto96["m_columns"] = array();
$proto96["m_columns"][] = "work_id";
$proto96["m_columns"][] = "job_id";
$proto96["m_columns"][] = "client_id";
$proto96["m_columns"][] = "project_id";
$proto96["m_columns"][] = "job_directory";
$proto96["m_columns"][] = "complexity1";
$proto96["m_columns"][] = "complexity2";
$proto96["m_columns"][] = "complexity3";
$proto96["m_columns"][] = "complexity4";
$proto96["m_columns"][] = "complexity5";
$proto96["m_columns"][] = "complexity0";
$proto96["m_columns"][] = "complexityNP";
$proto96["m_columns"][] = "custom_complexity";
$proto96["m_columns"][] = "total_images";
$proto96["m_columns"][] = "is_urgent";
$proto96["m_columns"][] = "urgent_instruction";
$proto96["m_columns"][] = "delivery_duration";
$proto96["m_columns"][] = "delivery_date";
$proto96["m_columns"][] = "notify_options";
$proto96["m_columns"][] = "notes";
$proto96["m_columns"][] = "web_note";
$proto96["m_columns"][] = "comments";
$proto96["m_columns"][] = "pdf_id";
$proto96["m_columns"][] = "pdf_location";
$proto96["m_columns"][] = "allow_batch_process";
$proto96["m_columns"][] = "jobstatus_id";
$proto96["m_columns"][] = "reviewer_id";
$proto96["m_columns"][] = "reviewed_date";
$proto96["m_columns"][] = "accept_id";
$proto96["m_columns"][] = "accepted_date";
$proto96["m_columns"][] = "downloader_id";
$proto96["m_columns"][] = "download_date";
$proto96["m_columns"][] = "distributor_id";
$proto96["m_columns"][] = "distribute_date";
$proto96["m_columns"][] = "designer_list";
$proto96["m_columns"][] = "qcs_list";
$proto96["m_columns"][] = "finish_date";
$proto96["m_columns"][] = "uploader_id";
$proto96["m_columns"][] = "upload_date";
$proto96["m_columns"][] = "notifer_id";
$proto96["m_columns"][] = "notify_date";
$proto96["m_columns"][] = "rejector_id";
$proto96["m_columns"][] = "reject_date";
$proto96["m_columns"][] = "reject_reason";
$proto96["m_columns"][] = "activity_log";
$proto96["m_columns"][] = "time_remaining";
$obj = new SQLTable($proto96);

$proto95["m_table"] = $obj;
$proto95["m_sql"] = "job";
$proto95["m_alias"] = "";
$proto95["m_srcTableName"] = "14704 Urgent Jobs";
$proto97=array();
$proto97["m_sql"] = "";
$proto97["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto97["m_column"]=$obj;
$proto97["m_contained"] = array();
$proto97["m_strCase"] = "";
$proto97["m_havingmode"] = false;
$proto97["m_inBrackets"] = false;
$proto97["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto97);

$proto95["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto95);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto99=array();
						$proto100=array();
$proto100["m_functiontype"] = "SQLF_CUSTOM";
$proto100["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "delivery_date"
));

$proto100["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NOW()"
));

$proto100["m_arguments"][]=$obj;
$proto100["m_strFunctionName"] = "TIMEDIFF";
$obj = new SQLFunctionCall($proto100);

$proto99["m_column"]=$obj;
$proto99["m_bAsc"] = 1;
$proto99["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto99);

$proto0["m_orderby"][]=$obj;					
												$proto103=array();
						$obj = new SQLField(array(
	"m_strName" => "delivery_date",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto103["m_column"]=$obj;
$proto103["m_bAsc"] = 1;
$proto103["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto103);

$proto0["m_orderby"][]=$obj;					
												$proto105=array();
						$obj = new SQLField(array(
	"m_strName" => "is_urgent",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto105["m_column"]=$obj;
$proto105["m_bAsc"] = 0;
$proto105["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto105);

$proto0["m_orderby"][]=$obj;					
												$proto107=array();
						$obj = new SQLField(array(
	"m_strName" => "accepted_date",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto107["m_column"]=$obj;
$proto107["m_bAsc"] = 1;
$proto107["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto107);

$proto0["m_orderby"][]=$obj;					
												$proto109=array();
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "14704 Urgent Jobs"
));

$proto109["m_column"]=$obj;
$proto109["m_bAsc"] = 1;
$proto109["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto109);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="14704 Urgent Jobs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_14704_Urgent_Jobs = createSqlQuery_14704_Urgent_Jobs();


	
																																		
	
$tdata14704_Urgent_Jobs[".sqlquery"] = $queryData_14704_Urgent_Jobs;

include_once(getabspath("include/14704_Urgent_Jobs_events.php"));
$tableEvents["14704 Urgent Jobs"] = new eventclass_14704_Urgent_Jobs;
$tdata14704_Urgent_Jobs[".hasEvents"] = true;

?>