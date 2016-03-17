<?php
require_once(getabspath("classes/cipherer.php"));




$tdataUrgent_Jobs = array();	
	$tdataUrgent_Jobs[".truncateText"] = true;
	$tdataUrgent_Jobs[".NumberOfChars"] = 40; 
	$tdataUrgent_Jobs[".ShortName"] = "Urgent_Jobs";
	$tdataUrgent_Jobs[".OwnerID"] = "";
	$tdataUrgent_Jobs[".OriginalTable"] = "job";

//	field labels
$fieldLabelsUrgent_Jobs = array();
$fieldToolTipsUrgent_Jobs = array();
$pageTitlesUrgent_Jobs = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsUrgent_Jobs["English"] = array();
	$fieldToolTipsUrgent_Jobs["English"] = array();
	$pageTitlesUrgent_Jobs["English"] = array();
	$fieldLabelsUrgent_Jobs["English"]["work_id"] = "Work Id";
	$fieldToolTipsUrgent_Jobs["English"]["work_id"] = "";
	$fieldLabelsUrgent_Jobs["English"]["job_id"] = "Job Id";
	$fieldToolTipsUrgent_Jobs["English"]["job_id"] = "";
	$fieldLabelsUrgent_Jobs["English"]["total_images"] = "Total Images";
	$fieldToolTipsUrgent_Jobs["English"]["total_images"] = "";
	$fieldLabelsUrgent_Jobs["English"]["is_urgent"] = "Is Urgent";
	$fieldToolTipsUrgent_Jobs["English"]["is_urgent"] = "";
	$fieldLabelsUrgent_Jobs["English"]["urgent_instruction"] = "Urgent Instruction";
	$fieldToolTipsUrgent_Jobs["English"]["urgent_instruction"] = "";
	$fieldLabelsUrgent_Jobs["English"]["delivery_duration"] = "Delivery Duration";
	$fieldToolTipsUrgent_Jobs["English"]["delivery_duration"] = "";
	$fieldLabelsUrgent_Jobs["English"]["notes"] = "Notes";
	$fieldToolTipsUrgent_Jobs["English"]["notes"] = "";
	$fieldLabelsUrgent_Jobs["English"]["web_note"] = "Web Note";
	$fieldToolTipsUrgent_Jobs["English"]["web_note"] = "";
	$fieldLabelsUrgent_Jobs["English"]["comments"] = "Comments";
	$fieldToolTipsUrgent_Jobs["English"]["comments"] = "";
	$fieldLabelsUrgent_Jobs["English"]["pdf_id"] = "Pdf Id";
	$fieldToolTipsUrgent_Jobs["English"]["pdf_id"] = "";
	$fieldLabelsUrgent_Jobs["English"]["pdf_location"] = "Pdf Location";
	$fieldToolTipsUrgent_Jobs["English"]["pdf_location"] = "";
	$fieldLabelsUrgent_Jobs["English"]["jobstatus_id"] = "Jobstatus";
	$fieldToolTipsUrgent_Jobs["English"]["jobstatus_id"] = "";
	$fieldLabelsUrgent_Jobs["English"]["reviewed_date"] = "Reviewed Date";
	$fieldToolTipsUrgent_Jobs["English"]["reviewed_date"] = "";
	$fieldLabelsUrgent_Jobs["English"]["accepted_date"] = "Accepted Date";
	$fieldToolTipsUrgent_Jobs["English"]["accepted_date"] = "";
	$fieldLabelsUrgent_Jobs["English"]["designer_list"] = "Designer List";
	$fieldToolTipsUrgent_Jobs["English"]["designer_list"] = "";
	$fieldLabelsUrgent_Jobs["English"]["delivery_date"] = "Delivery Date";
	$fieldToolTipsUrgent_Jobs["English"]["delivery_date"] = "";
	$fieldLabelsUrgent_Jobs["English"]["client_id"] = "Client Id";
	$fieldToolTipsUrgent_Jobs["English"]["client_id"] = "";
	$fieldLabelsUrgent_Jobs["English"]["project_id"] = "Project Id";
	$fieldToolTipsUrgent_Jobs["English"]["project_id"] = "";
	$fieldLabelsUrgent_Jobs["English"]["complexity1"] = "Complexity1";
	$fieldToolTipsUrgent_Jobs["English"]["complexity1"] = "";
	$fieldLabelsUrgent_Jobs["English"]["complexity2"] = "Complexity2";
	$fieldToolTipsUrgent_Jobs["English"]["complexity2"] = "";
	$fieldLabelsUrgent_Jobs["English"]["complexity3"] = "Complexity3";
	$fieldToolTipsUrgent_Jobs["English"]["complexity3"] = "";
	$fieldLabelsUrgent_Jobs["English"]["complexity4"] = "Complexity4";
	$fieldToolTipsUrgent_Jobs["English"]["complexity4"] = "";
	$fieldLabelsUrgent_Jobs["English"]["complexity5"] = "Complexity5";
	$fieldToolTipsUrgent_Jobs["English"]["complexity5"] = "";
	$fieldLabelsUrgent_Jobs["English"]["complexity0"] = "Complexity0";
	$fieldToolTipsUrgent_Jobs["English"]["complexity0"] = "";
	$fieldLabelsUrgent_Jobs["English"]["complexityNP"] = "Complexity NP";
	$fieldToolTipsUrgent_Jobs["English"]["complexityNP"] = "";
	$fieldLabelsUrgent_Jobs["English"]["custom_complexity"] = "Custom Complexity";
	$fieldToolTipsUrgent_Jobs["English"]["custom_complexity"] = "";
	$fieldLabelsUrgent_Jobs["English"]["notify_options"] = "Notify Options";
	$fieldToolTipsUrgent_Jobs["English"]["notify_options"] = "";
	$fieldLabelsUrgent_Jobs["English"]["allow_batch_process"] = "Allow Batch Process";
	$fieldToolTipsUrgent_Jobs["English"]["allow_batch_process"] = "";
	$fieldLabelsUrgent_Jobs["English"]["reviewer_id"] = "Reviewer Id";
	$fieldToolTipsUrgent_Jobs["English"]["reviewer_id"] = "";
	$fieldLabelsUrgent_Jobs["English"]["accept_id"] = "Accept Id";
	$fieldToolTipsUrgent_Jobs["English"]["accept_id"] = "";
	$fieldLabelsUrgent_Jobs["English"]["notifer_id"] = "Notifer Id";
	$fieldToolTipsUrgent_Jobs["English"]["notifer_id"] = "";
	$fieldLabelsUrgent_Jobs["English"]["notify_date"] = "Notify Date";
	$fieldToolTipsUrgent_Jobs["English"]["notify_date"] = "";
	$fieldLabelsUrgent_Jobs["English"]["time_left"] = "Time Left";
	$fieldToolTipsUrgent_Jobs["English"]["time_left"] = "";
	$fieldLabelsUrgent_Jobs["English"]["qcs_list"] = "Qcs List";
	$fieldToolTipsUrgent_Jobs["English"]["qcs_list"] = "";
	if (count($fieldToolTipsUrgent_Jobs["English"]))
		$tdataUrgent_Jobs[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsUrgent_Jobs[""] = array();
	$fieldToolTipsUrgent_Jobs[""] = array();
	$pageTitlesUrgent_Jobs[""] = array();
	if (count($fieldToolTipsUrgent_Jobs[""]))
		$tdataUrgent_Jobs[".isUseToolTips"] = true;
}
	
	
	$tdataUrgent_Jobs[".NCSearch"] = true;



$tdataUrgent_Jobs[".shortTableName"] = "Urgent_Jobs";
$tdataUrgent_Jobs[".nSecOptions"] = 0;
$tdataUrgent_Jobs[".recsPerRowList"] = 1;
$tdataUrgent_Jobs[".recsPerRowPrint"] = 1;
$tdataUrgent_Jobs[".mainTableOwnerID"] = "";
$tdataUrgent_Jobs[".moveNext"] = 1;
$tdataUrgent_Jobs[".entityType"] = 1;

$tdataUrgent_Jobs[".strOriginalTableName"] = "job";




$tdataUrgent_Jobs[".showAddInPopup"] = false;

$tdataUrgent_Jobs[".showEditInPopup"] = false;

$tdataUrgent_Jobs[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataUrgent_Jobs[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataUrgent_Jobs[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataUrgent_Jobs[".listAjax"] = true;
else 
	$tdataUrgent_Jobs[".listAjax"] = false;

	$tdataUrgent_Jobs[".audit"] = false;

	$tdataUrgent_Jobs[".locking"] = false;

$tdataUrgent_Jobs[".edit"] = true;
$tdataUrgent_Jobs[".afterEditAction"] = 1;
$tdataUrgent_Jobs[".closePopupAfterEdit"] = 1;
$tdataUrgent_Jobs[".afterEditActionDetTable"] = "";


$tdataUrgent_Jobs[".list"] = true;

$tdataUrgent_Jobs[".view"] = true;

$tdataUrgent_Jobs[".import"] = true;

$tdataUrgent_Jobs[".exportTo"] = true;

$tdataUrgent_Jobs[".printFriendly"] = true;

$tdataUrgent_Jobs[".delete"] = true;

$tdataUrgent_Jobs[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataUrgent_Jobs[".searchSaving"] = false;
//

$tdataUrgent_Jobs[".showSearchPanel"] = true;
		$tdataUrgent_Jobs[".flexibleSearch"] = true;		

if (isMobile())
	$tdataUrgent_Jobs[".isUseAjaxSuggest"] = false;
else 
	$tdataUrgent_Jobs[".isUseAjaxSuggest"] = true;

$tdataUrgent_Jobs[".rowHighlite"] = true;


																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																			
			
																																																																																																																																																																																																																																																																																																																																																																																																																																$tdataUrgent_Jobs[".isUsebuttonHandlers"] = true;

$tdataUrgent_Jobs[".addPageEvents"] = true;

// use timepicker for search panel
$tdataUrgent_Jobs[".isUseTimeForSearch"] = true;





$tdataUrgent_Jobs[".allSearchFields"] = array();
$tdataUrgent_Jobs[".filterFields"] = array();
$tdataUrgent_Jobs[".requiredSearchFields"] = array();

$tdataUrgent_Jobs[".allSearchFields"][] = "time_left";
	$tdataUrgent_Jobs[".allSearchFields"][] = "qcs_list";
	$tdataUrgent_Jobs[".allSearchFields"][] = "job_id";
	$tdataUrgent_Jobs[".allSearchFields"][] = "accept_id";
	$tdataUrgent_Jobs[".allSearchFields"][] = "project_id";
	$tdataUrgent_Jobs[".allSearchFields"][] = "notifer_id";
	$tdataUrgent_Jobs[".allSearchFields"][] = "pdf_id";
	$tdataUrgent_Jobs[".allSearchFields"][] = "notify_date";
	$tdataUrgent_Jobs[".allSearchFields"][] = "work_id";
	$tdataUrgent_Jobs[".allSearchFields"][] = "notify_options";
	$tdataUrgent_Jobs[".allSearchFields"][] = "is_urgent";
	$tdataUrgent_Jobs[".allSearchFields"][] = "delivery_duration";
	$tdataUrgent_Jobs[".allSearchFields"][] = "delivery_date";
	$tdataUrgent_Jobs[".allSearchFields"][] = "notes";
	$tdataUrgent_Jobs[".allSearchFields"][] = "web_note";
	$tdataUrgent_Jobs[".allSearchFields"][] = "allow_batch_process";
	$tdataUrgent_Jobs[".allSearchFields"][] = "client_id";
	$tdataUrgent_Jobs[".allSearchFields"][] = "jobstatus_id";
	$tdataUrgent_Jobs[".allSearchFields"][] = "reviewer_id";
	$tdataUrgent_Jobs[".allSearchFields"][] = "reviewed_date";
	$tdataUrgent_Jobs[".allSearchFields"][] = "accepted_date";
	$tdataUrgent_Jobs[".allSearchFields"][] = "designer_list";
	

$tdataUrgent_Jobs[".googleLikeFields"] = array();
$tdataUrgent_Jobs[".googleLikeFields"][] = "work_id";
$tdataUrgent_Jobs[".googleLikeFields"][] = "job_id";
$tdataUrgent_Jobs[".googleLikeFields"][] = "total_images";
$tdataUrgent_Jobs[".googleLikeFields"][] = "is_urgent";
$tdataUrgent_Jobs[".googleLikeFields"][] = "urgent_instruction";
$tdataUrgent_Jobs[".googleLikeFields"][] = "delivery_duration";
$tdataUrgent_Jobs[".googleLikeFields"][] = "notes";
$tdataUrgent_Jobs[".googleLikeFields"][] = "web_note";
$tdataUrgent_Jobs[".googleLikeFields"][] = "comments";
$tdataUrgent_Jobs[".googleLikeFields"][] = "pdf_id";
$tdataUrgent_Jobs[".googleLikeFields"][] = "pdf_location";
$tdataUrgent_Jobs[".googleLikeFields"][] = "jobstatus_id";
$tdataUrgent_Jobs[".googleLikeFields"][] = "reviewed_date";
$tdataUrgent_Jobs[".googleLikeFields"][] = "accepted_date";
$tdataUrgent_Jobs[".googleLikeFields"][] = "designer_list";
$tdataUrgent_Jobs[".googleLikeFields"][] = "delivery_date";
$tdataUrgent_Jobs[".googleLikeFields"][] = "time_left";
$tdataUrgent_Jobs[".googleLikeFields"][] = "client_id";
$tdataUrgent_Jobs[".googleLikeFields"][] = "project_id";
$tdataUrgent_Jobs[".googleLikeFields"][] = "complexity1";
$tdataUrgent_Jobs[".googleLikeFields"][] = "complexity2";
$tdataUrgent_Jobs[".googleLikeFields"][] = "complexity3";
$tdataUrgent_Jobs[".googleLikeFields"][] = "complexity4";
$tdataUrgent_Jobs[".googleLikeFields"][] = "complexity5";
$tdataUrgent_Jobs[".googleLikeFields"][] = "complexity0";
$tdataUrgent_Jobs[".googleLikeFields"][] = "complexityNP";
$tdataUrgent_Jobs[".googleLikeFields"][] = "custom_complexity";
$tdataUrgent_Jobs[".googleLikeFields"][] = "notify_options";
$tdataUrgent_Jobs[".googleLikeFields"][] = "allow_batch_process";
$tdataUrgent_Jobs[".googleLikeFields"][] = "reviewer_id";
$tdataUrgent_Jobs[".googleLikeFields"][] = "accept_id";
$tdataUrgent_Jobs[".googleLikeFields"][] = "notifer_id";
$tdataUrgent_Jobs[".googleLikeFields"][] = "notify_date";
$tdataUrgent_Jobs[".googleLikeFields"][] = "qcs_list";


$tdataUrgent_Jobs[".advSearchFields"] = array();
$tdataUrgent_Jobs[".advSearchFields"][] = "time_left";
$tdataUrgent_Jobs[".advSearchFields"][] = "qcs_list";
$tdataUrgent_Jobs[".advSearchFields"][] = "job_id";
$tdataUrgent_Jobs[".advSearchFields"][] = "accept_id";
$tdataUrgent_Jobs[".advSearchFields"][] = "project_id";
$tdataUrgent_Jobs[".advSearchFields"][] = "notifer_id";
$tdataUrgent_Jobs[".advSearchFields"][] = "pdf_id";
$tdataUrgent_Jobs[".advSearchFields"][] = "notify_date";
$tdataUrgent_Jobs[".advSearchFields"][] = "work_id";
$tdataUrgent_Jobs[".advSearchFields"][] = "notify_options";
$tdataUrgent_Jobs[".advSearchFields"][] = "is_urgent";
$tdataUrgent_Jobs[".advSearchFields"][] = "delivery_duration";
$tdataUrgent_Jobs[".advSearchFields"][] = "delivery_date";
$tdataUrgent_Jobs[".advSearchFields"][] = "notes";
$tdataUrgent_Jobs[".advSearchFields"][] = "web_note";
$tdataUrgent_Jobs[".advSearchFields"][] = "allow_batch_process";
$tdataUrgent_Jobs[".advSearchFields"][] = "client_id";
$tdataUrgent_Jobs[".advSearchFields"][] = "jobstatus_id";
$tdataUrgent_Jobs[".advSearchFields"][] = "reviewer_id";
$tdataUrgent_Jobs[".advSearchFields"][] = "reviewed_date";
$tdataUrgent_Jobs[".advSearchFields"][] = "accepted_date";
$tdataUrgent_Jobs[".advSearchFields"][] = "designer_list";

$tdataUrgent_Jobs[".tableType"] = "list";

$tdataUrgent_Jobs[".printerPageOrientation"] = 0;
$tdataUrgent_Jobs[".nPrinterPageScale"] = 100;

$tdataUrgent_Jobs[".nPrinterSplitRecords"] = 40;

$tdataUrgent_Jobs[".nPrinterPDFSplitRecords"] = 40;



$tdataUrgent_Jobs[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataUrgent_Jobs[".pageSize"] = 20;

$tdataUrgent_Jobs[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY TIMEDIFF(delivery_date, NOW()), delivery_date, is_urgent DESC, accepted_date, jobstatus_id";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataUrgent_Jobs[".strOrderBy"] = $tstrOrderBy;

$tdataUrgent_Jobs[".orderindexes"] = array();
$tdataUrgent_Jobs[".orderindexes"][] = array(17, (1 ? "ASC" : "DESC"), "TIMEDIFF(delivery_date, NOW())");
$tdataUrgent_Jobs[".orderindexes"][] = array(16, (1 ? "ASC" : "DESC"), "delivery_date");
$tdataUrgent_Jobs[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "is_urgent");
$tdataUrgent_Jobs[".orderindexes"][] = array(14, (1 ? "ASC" : "DESC"), "accepted_date");
$tdataUrgent_Jobs[".orderindexes"][] = array(12, (1 ? "ASC" : "DESC"), "jobstatus_id");

$tdataUrgent_Jobs[".sqlHead"] = "SELECT work_id,  job_id,  total_images,  is_urgent,  urgent_instruction,  delivery_duration,  notes,  web_note,  comments,  pdf_id,  pdf_location,  jobstatus_id,  reviewed_date,  accepted_date,  designer_list,  delivery_date,  TIMEDIFF(delivery_date, NOW()) AS time_left,  client_id,  project_id,  complexity1,  complexity2,  complexity3,  complexity4,  complexity5,  complexity0,  complexityNP,  custom_complexity,  notify_options,  allow_batch_process,  reviewer_id,  accept_id,  notifer_id,  notify_date,  qcs_list";
$tdataUrgent_Jobs[".sqlFrom"] = "FROM job";
$tdataUrgent_Jobs[".sqlWhereExpr"] = "accepted_date !=\"0000-00-00 00:00:00\" AND is_urgent = \"1\" AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12 AND pdf_id !=5000 AND pdf_id !=5879 AND pdf_id !=5880)";
$tdataUrgent_Jobs[".sqlTail"] = "";

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
$tdataUrgent_Jobs[".arrEditTabs"] = $arrEditTabs;


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
$tdataUrgent_Jobs[".arrAddTabs"] = $arrAddTabs;

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
$tdataUrgent_Jobs[".arrViewTabs"] = $arrViewTabs;





//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataUrgent_Jobs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataUrgent_Jobs[".arrGroupsPerPage"] = $arrGPP;

$tdataUrgent_Jobs[".highlightSearchResults"] = true;

$tableKeysUrgent_Jobs = array();
$tableKeysUrgent_Jobs[] = "work_id";
$tdataUrgent_Jobs[".Keys"] = $tableKeysUrgent_Jobs;

$tdataUrgent_Jobs[".listFields"] = array();
$tdataUrgent_Jobs[".listFields"][] = "work_id";
$tdataUrgent_Jobs[".listFields"][] = "job_id";
$tdataUrgent_Jobs[".listFields"][] = "total_images";
$tdataUrgent_Jobs[".listFields"][] = "pdf_id";
$tdataUrgent_Jobs[".listFields"][] = "delivery_duration";
$tdataUrgent_Jobs[".listFields"][] = "jobstatus_id";
$tdataUrgent_Jobs[".listFields"][] = "is_urgent";
$tdataUrgent_Jobs[".listFields"][] = "urgent_instruction";
$tdataUrgent_Jobs[".listFields"][] = "delivery_date";
$tdataUrgent_Jobs[".listFields"][] = "time_left";
$tdataUrgent_Jobs[".listFields"][] = "notes";
$tdataUrgent_Jobs[".listFields"][] = "web_note";
$tdataUrgent_Jobs[".listFields"][] = "comments";
$tdataUrgent_Jobs[".listFields"][] = "reviewed_date";
$tdataUrgent_Jobs[".listFields"][] = "pdf_location";
$tdataUrgent_Jobs[".listFields"][] = "accepted_date";
$tdataUrgent_Jobs[".listFields"][] = "designer_list";
$tdataUrgent_Jobs[".listFields"][] = "qcs_list";

$tdataUrgent_Jobs[".hideMobileList"] = array();


$tdataUrgent_Jobs[".viewFields"] = array();
$tdataUrgent_Jobs[".viewFields"][] = "qcs_list";
$tdataUrgent_Jobs[".viewFields"][] = "work_id";
$tdataUrgent_Jobs[".viewFields"][] = "job_id";
$tdataUrgent_Jobs[".viewFields"][] = "pdf_id";
$tdataUrgent_Jobs[".viewFields"][] = "project_id";
$tdataUrgent_Jobs[".viewFields"][] = "complexity1";
$tdataUrgent_Jobs[".viewFields"][] = "complexity2";
$tdataUrgent_Jobs[".viewFields"][] = "complexity3";
$tdataUrgent_Jobs[".viewFields"][] = "complexity4";
$tdataUrgent_Jobs[".viewFields"][] = "complexity5";
$tdataUrgent_Jobs[".viewFields"][] = "complexity0";
$tdataUrgent_Jobs[".viewFields"][] = "complexityNP";
$tdataUrgent_Jobs[".viewFields"][] = "custom_complexity";
$tdataUrgent_Jobs[".viewFields"][] = "total_images";
$tdataUrgent_Jobs[".viewFields"][] = "notify_options";
$tdataUrgent_Jobs[".viewFields"][] = "is_urgent";
$tdataUrgent_Jobs[".viewFields"][] = "urgent_instruction";
$tdataUrgent_Jobs[".viewFields"][] = "time_left";
$tdataUrgent_Jobs[".viewFields"][] = "delivery_duration";
$tdataUrgent_Jobs[".viewFields"][] = "delivery_date";
$tdataUrgent_Jobs[".viewFields"][] = "allow_batch_process";
$tdataUrgent_Jobs[".viewFields"][] = "client_id";
$tdataUrgent_Jobs[".viewFields"][] = "jobstatus_id";
$tdataUrgent_Jobs[".viewFields"][] = "reviewer_id";
$tdataUrgent_Jobs[".viewFields"][] = "reviewed_date";
$tdataUrgent_Jobs[".viewFields"][] = "accept_id";
$tdataUrgent_Jobs[".viewFields"][] = "accepted_date";
$tdataUrgent_Jobs[".viewFields"][] = "notifer_id";
$tdataUrgent_Jobs[".viewFields"][] = "notify_date";
$tdataUrgent_Jobs[".viewFields"][] = "pdf_location";
$tdataUrgent_Jobs[".viewFields"][] = "designer_list";

$tdataUrgent_Jobs[".addFields"] = array();
$tdataUrgent_Jobs[".addFields"][] = "job_id";
$tdataUrgent_Jobs[".addFields"][] = "pdf_id";
$tdataUrgent_Jobs[".addFields"][] = "complexity1";
$tdataUrgent_Jobs[".addFields"][] = "complexity2";
$tdataUrgent_Jobs[".addFields"][] = "complexity3";
$tdataUrgent_Jobs[".addFields"][] = "complexity4";
$tdataUrgent_Jobs[".addFields"][] = "complexity5";
$tdataUrgent_Jobs[".addFields"][] = "complexity0";
$tdataUrgent_Jobs[".addFields"][] = "complexityNP";
$tdataUrgent_Jobs[".addFields"][] = "custom_complexity";
$tdataUrgent_Jobs[".addFields"][] = "total_images";
$tdataUrgent_Jobs[".addFields"][] = "is_urgent";
$tdataUrgent_Jobs[".addFields"][] = "urgent_instruction";
$tdataUrgent_Jobs[".addFields"][] = "delivery_duration";
$tdataUrgent_Jobs[".addFields"][] = "delivery_date";
$tdataUrgent_Jobs[".addFields"][] = "notes";
$tdataUrgent_Jobs[".addFields"][] = "web_note";
$tdataUrgent_Jobs[".addFields"][] = "comments";
$tdataUrgent_Jobs[".addFields"][] = "work_id";
$tdataUrgent_Jobs[".addFields"][] = "notify_options";
$tdataUrgent_Jobs[".addFields"][] = "client_id";
$tdataUrgent_Jobs[".addFields"][] = "jobstatus_id";
$tdataUrgent_Jobs[".addFields"][] = "reviewer_id";
$tdataUrgent_Jobs[".addFields"][] = "reviewed_date";
$tdataUrgent_Jobs[".addFields"][] = "pdf_location";

$tdataUrgent_Jobs[".masterListFields"] = array();
$tdataUrgent_Jobs[".masterListFields"][] = "qcs_list";
$tdataUrgent_Jobs[".masterListFields"][] = "time_left";
$tdataUrgent_Jobs[".masterListFields"][] = "delivery_date";
$tdataUrgent_Jobs[".masterListFields"][] = "accept_id";
$tdataUrgent_Jobs[".masterListFields"][] = "job_id";
$tdataUrgent_Jobs[".masterListFields"][] = "project_id";
$tdataUrgent_Jobs[".masterListFields"][] = "notifer_id";
$tdataUrgent_Jobs[".masterListFields"][] = "pdf_id";
$tdataUrgent_Jobs[".masterListFields"][] = "notify_date";
$tdataUrgent_Jobs[".masterListFields"][] = "complexity1";
$tdataUrgent_Jobs[".masterListFields"][] = "work_id";
$tdataUrgent_Jobs[".masterListFields"][] = "complexity2";
$tdataUrgent_Jobs[".masterListFields"][] = "complexity3";
$tdataUrgent_Jobs[".masterListFields"][] = "complexity4";
$tdataUrgent_Jobs[".masterListFields"][] = "complexity5";
$tdataUrgent_Jobs[".masterListFields"][] = "complexity0";
$tdataUrgent_Jobs[".masterListFields"][] = "complexityNP";
$tdataUrgent_Jobs[".masterListFields"][] = "custom_complexity";
$tdataUrgent_Jobs[".masterListFields"][] = "total_images";
$tdataUrgent_Jobs[".masterListFields"][] = "notify_options";
$tdataUrgent_Jobs[".masterListFields"][] = "is_urgent";
$tdataUrgent_Jobs[".masterListFields"][] = "urgent_instruction";
$tdataUrgent_Jobs[".masterListFields"][] = "delivery_duration";
$tdataUrgent_Jobs[".masterListFields"][] = "notes";
$tdataUrgent_Jobs[".masterListFields"][] = "web_note";
$tdataUrgent_Jobs[".masterListFields"][] = "comments";
$tdataUrgent_Jobs[".masterListFields"][] = "allow_batch_process";
$tdataUrgent_Jobs[".masterListFields"][] = "client_id";
$tdataUrgent_Jobs[".masterListFields"][] = "jobstatus_id";
$tdataUrgent_Jobs[".masterListFields"][] = "reviewer_id";
$tdataUrgent_Jobs[".masterListFields"][] = "reviewed_date";
$tdataUrgent_Jobs[".masterListFields"][] = "pdf_location";
$tdataUrgent_Jobs[".masterListFields"][] = "accepted_date";
$tdataUrgent_Jobs[".masterListFields"][] = "designer_list";

$tdataUrgent_Jobs[".inlineAddFields"] = array();

$tdataUrgent_Jobs[".editFields"] = array();
$tdataUrgent_Jobs[".editFields"][] = "work_id";
$tdataUrgent_Jobs[".editFields"][] = "job_id";
$tdataUrgent_Jobs[".editFields"][] = "pdf_id";
$tdataUrgent_Jobs[".editFields"][] = "complexity1";
$tdataUrgent_Jobs[".editFields"][] = "complexity2";
$tdataUrgent_Jobs[".editFields"][] = "complexity3";
$tdataUrgent_Jobs[".editFields"][] = "complexity4";
$tdataUrgent_Jobs[".editFields"][] = "complexity5";
$tdataUrgent_Jobs[".editFields"][] = "complexity0";
$tdataUrgent_Jobs[".editFields"][] = "complexityNP";
$tdataUrgent_Jobs[".editFields"][] = "custom_complexity";
$tdataUrgent_Jobs[".editFields"][] = "total_images";
$tdataUrgent_Jobs[".editFields"][] = "delivery_duration";
$tdataUrgent_Jobs[".editFields"][] = "delivery_date";
$tdataUrgent_Jobs[".editFields"][] = "is_urgent";
$tdataUrgent_Jobs[".editFields"][] = "urgent_instruction";
$tdataUrgent_Jobs[".editFields"][] = "notes";
$tdataUrgent_Jobs[".editFields"][] = "web_note";
$tdataUrgent_Jobs[".editFields"][] = "comments";
$tdataUrgent_Jobs[".editFields"][] = "notify_options";
$tdataUrgent_Jobs[".editFields"][] = "allow_batch_process";
$tdataUrgent_Jobs[".editFields"][] = "client_id";
$tdataUrgent_Jobs[".editFields"][] = "jobstatus_id";
$tdataUrgent_Jobs[".editFields"][] = "reviewer_id";
$tdataUrgent_Jobs[".editFields"][] = "reviewed_date";
$tdataUrgent_Jobs[".editFields"][] = "pdf_location";
$tdataUrgent_Jobs[".editFields"][] = "accept_id";
$tdataUrgent_Jobs[".editFields"][] = "accepted_date";
$tdataUrgent_Jobs[".editFields"][] = "notify_date";
$tdataUrgent_Jobs[".editFields"][] = "notifer_id";
$tdataUrgent_Jobs[".editFields"][] = "project_id";

$tdataUrgent_Jobs[".inlineEditFields"] = array();

$tdataUrgent_Jobs[".exportFields"] = array();
$tdataUrgent_Jobs[".exportFields"][] = "time_left";
$tdataUrgent_Jobs[".exportFields"][] = "qcs_list";
$tdataUrgent_Jobs[".exportFields"][] = "job_id";
$tdataUrgent_Jobs[".exportFields"][] = "accept_id";
$tdataUrgent_Jobs[".exportFields"][] = "project_id";
$tdataUrgent_Jobs[".exportFields"][] = "notifer_id";
$tdataUrgent_Jobs[".exportFields"][] = "notify_date";
$tdataUrgent_Jobs[".exportFields"][] = "pdf_id";
$tdataUrgent_Jobs[".exportFields"][] = "complexity1";
$tdataUrgent_Jobs[".exportFields"][] = "work_id";
$tdataUrgent_Jobs[".exportFields"][] = "complexity2";
$tdataUrgent_Jobs[".exportFields"][] = "complexity3";
$tdataUrgent_Jobs[".exportFields"][] = "complexity4";
$tdataUrgent_Jobs[".exportFields"][] = "complexity5";
$tdataUrgent_Jobs[".exportFields"][] = "complexity0";
$tdataUrgent_Jobs[".exportFields"][] = "complexityNP";
$tdataUrgent_Jobs[".exportFields"][] = "custom_complexity";
$tdataUrgent_Jobs[".exportFields"][] = "total_images";
$tdataUrgent_Jobs[".exportFields"][] = "notify_options";
$tdataUrgent_Jobs[".exportFields"][] = "is_urgent";
$tdataUrgent_Jobs[".exportFields"][] = "urgent_instruction";
$tdataUrgent_Jobs[".exportFields"][] = "delivery_duration";
$tdataUrgent_Jobs[".exportFields"][] = "delivery_date";
$tdataUrgent_Jobs[".exportFields"][] = "notes";
$tdataUrgent_Jobs[".exportFields"][] = "web_note";
$tdataUrgent_Jobs[".exportFields"][] = "comments";
$tdataUrgent_Jobs[".exportFields"][] = "allow_batch_process";
$tdataUrgent_Jobs[".exportFields"][] = "client_id";
$tdataUrgent_Jobs[".exportFields"][] = "jobstatus_id";
$tdataUrgent_Jobs[".exportFields"][] = "reviewer_id";
$tdataUrgent_Jobs[".exportFields"][] = "reviewed_date";
$tdataUrgent_Jobs[".exportFields"][] = "pdf_location";
$tdataUrgent_Jobs[".exportFields"][] = "accepted_date";
$tdataUrgent_Jobs[".exportFields"][] = "designer_list";

$tdataUrgent_Jobs[".importFields"] = array();
$tdataUrgent_Jobs[".importFields"][] = "work_id";
$tdataUrgent_Jobs[".importFields"][] = "job_id";
$tdataUrgent_Jobs[".importFields"][] = "total_images";
$tdataUrgent_Jobs[".importFields"][] = "is_urgent";
$tdataUrgent_Jobs[".importFields"][] = "urgent_instruction";
$tdataUrgent_Jobs[".importFields"][] = "delivery_duration";
$tdataUrgent_Jobs[".importFields"][] = "notes";
$tdataUrgent_Jobs[".importFields"][] = "web_note";
$tdataUrgent_Jobs[".importFields"][] = "comments";
$tdataUrgent_Jobs[".importFields"][] = "pdf_id";
$tdataUrgent_Jobs[".importFields"][] = "pdf_location";
$tdataUrgent_Jobs[".importFields"][] = "jobstatus_id";
$tdataUrgent_Jobs[".importFields"][] = "reviewed_date";
$tdataUrgent_Jobs[".importFields"][] = "accepted_date";
$tdataUrgent_Jobs[".importFields"][] = "designer_list";
$tdataUrgent_Jobs[".importFields"][] = "delivery_date";
$tdataUrgent_Jobs[".importFields"][] = "time_left";
$tdataUrgent_Jobs[".importFields"][] = "client_id";
$tdataUrgent_Jobs[".importFields"][] = "project_id";
$tdataUrgent_Jobs[".importFields"][] = "complexity1";
$tdataUrgent_Jobs[".importFields"][] = "complexity2";
$tdataUrgent_Jobs[".importFields"][] = "complexity3";
$tdataUrgent_Jobs[".importFields"][] = "complexity4";
$tdataUrgent_Jobs[".importFields"][] = "complexity5";
$tdataUrgent_Jobs[".importFields"][] = "complexity0";
$tdataUrgent_Jobs[".importFields"][] = "complexityNP";
$tdataUrgent_Jobs[".importFields"][] = "custom_complexity";
$tdataUrgent_Jobs[".importFields"][] = "notify_options";
$tdataUrgent_Jobs[".importFields"][] = "allow_batch_process";
$tdataUrgent_Jobs[".importFields"][] = "reviewer_id";
$tdataUrgent_Jobs[".importFields"][] = "accept_id";
$tdataUrgent_Jobs[".importFields"][] = "notifer_id";
$tdataUrgent_Jobs[".importFields"][] = "notify_date";
$tdataUrgent_Jobs[".importFields"][] = "qcs_list";

$tdataUrgent_Jobs[".printFields"] = array();
$tdataUrgent_Jobs[".printFields"][] = "qcs_list";
$tdataUrgent_Jobs[".printFields"][] = "time_left";
$tdataUrgent_Jobs[".printFields"][] = "job_id";
$tdataUrgent_Jobs[".printFields"][] = "accept_id";
$tdataUrgent_Jobs[".printFields"][] = "project_id";
$tdataUrgent_Jobs[".printFields"][] = "notifer_id";
$tdataUrgent_Jobs[".printFields"][] = "notify_date";
$tdataUrgent_Jobs[".printFields"][] = "pdf_id";
$tdataUrgent_Jobs[".printFields"][] = "complexity1";
$tdataUrgent_Jobs[".printFields"][] = "work_id";
$tdataUrgent_Jobs[".printFields"][] = "complexity2";
$tdataUrgent_Jobs[".printFields"][] = "complexity3";
$tdataUrgent_Jobs[".printFields"][] = "complexity4";
$tdataUrgent_Jobs[".printFields"][] = "complexity5";
$tdataUrgent_Jobs[".printFields"][] = "complexity0";
$tdataUrgent_Jobs[".printFields"][] = "complexityNP";
$tdataUrgent_Jobs[".printFields"][] = "custom_complexity";
$tdataUrgent_Jobs[".printFields"][] = "total_images";
$tdataUrgent_Jobs[".printFields"][] = "notify_options";
$tdataUrgent_Jobs[".printFields"][] = "is_urgent";
$tdataUrgent_Jobs[".printFields"][] = "urgent_instruction";
$tdataUrgent_Jobs[".printFields"][] = "delivery_duration";
$tdataUrgent_Jobs[".printFields"][] = "delivery_date";
$tdataUrgent_Jobs[".printFields"][] = "notes";
$tdataUrgent_Jobs[".printFields"][] = "web_note";
$tdataUrgent_Jobs[".printFields"][] = "comments";
$tdataUrgent_Jobs[".printFields"][] = "allow_batch_process";
$tdataUrgent_Jobs[".printFields"][] = "client_id";
$tdataUrgent_Jobs[".printFields"][] = "jobstatus_id";
$tdataUrgent_Jobs[".printFields"][] = "reviewer_id";
$tdataUrgent_Jobs[".printFields"][] = "reviewed_date";
$tdataUrgent_Jobs[".printFields"][] = "pdf_location";
$tdataUrgent_Jobs[".printFields"][] = "accepted_date";
$tdataUrgent_Jobs[".printFields"][] = "designer_list";

//	work_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_id";
	$fdata["GoodName"] = "work_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","work_id"); 
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

	

	
	$tdataUrgent_Jobs["work_id"] = $fdata;
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","job_id"); 
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

	

	
	$tdataUrgent_Jobs["job_id"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","total_images"); 
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
	
	
	
	

	

	
	$tdataUrgent_Jobs["total_images"] = $fdata;
//	is_urgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "is_urgent";
	$fdata["GoodName"] = "is_urgent";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","is_urgent"); 
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
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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

	

	
	$tdataUrgent_Jobs["is_urgent"] = $fdata;
//	urgent_instruction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "urgent_instruction";
	$fdata["GoodName"] = "urgent_instruction";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","urgent_instruction"); 
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
	
	
	
	

	

	
	$tdataUrgent_Jobs["urgent_instruction"] = $fdata;
//	delivery_duration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "delivery_duration";
	$fdata["GoodName"] = "delivery_duration";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","delivery_duration"); 
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

	

	
	$tdataUrgent_Jobs["delivery_duration"] = $fdata;
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","notes"); 
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

	

	
	$tdataUrgent_Jobs["notes"] = $fdata;
//	web_note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "web_note";
	$fdata["GoodName"] = "web_note";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","web_note"); 
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

	

	
	$tdataUrgent_Jobs["web_note"] = $fdata;
//	comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "comments";
	$fdata["GoodName"] = "comments";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","comments"); 
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
	
	
	
	

	

	
	$tdataUrgent_Jobs["comments"] = $fdata;
//	pdf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "pdf_id";
	$fdata["GoodName"] = "pdf_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","pdf_id"); 
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

	

	
	$tdataUrgent_Jobs["pdf_id"] = $fdata;
//	pdf_location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "pdf_location";
	$fdata["GoodName"] = "pdf_location";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","pdf_location"); 
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
	
	
	
	

	

	
	$tdataUrgent_Jobs["pdf_location"] = $fdata;
//	jobstatus_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "jobstatus_id";
	$fdata["GoodName"] = "jobstatus_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","jobstatus_id"); 
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

	

	
	$tdataUrgent_Jobs["jobstatus_id"] = $fdata;
//	reviewed_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "reviewed_date";
	$fdata["GoodName"] = "reviewed_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","reviewed_date"); 
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

	

	
	$tdataUrgent_Jobs["reviewed_date"] = $fdata;
//	accepted_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "accepted_date";
	$fdata["GoodName"] = "accepted_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","accepted_date"); 
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

	

	
	$tdataUrgent_Jobs["accepted_date"] = $fdata;
//	designer_list
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "designer_list";
	$fdata["GoodName"] = "designer_list";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","designer_list"); 
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

	

	
	$tdataUrgent_Jobs["designer_list"] = $fdata;
//	delivery_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "delivery_date";
	$fdata["GoodName"] = "delivery_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","delivery_date"); 
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

	

	
	$tdataUrgent_Jobs["delivery_date"] = $fdata;
//	time_left
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "time_left";
	$fdata["GoodName"] = "time_left";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","time_left"); 
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

	

	
	$tdataUrgent_Jobs["time_left"] = $fdata;
//	client_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "client_id";
	$fdata["GoodName"] = "client_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","client_id"); 
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

	

	
	$tdataUrgent_Jobs["client_id"] = $fdata;
//	project_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "project_id";
	$fdata["GoodName"] = "project_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","project_id"); 
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

	

	
	$tdataUrgent_Jobs["project_id"] = $fdata;
//	complexity1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "complexity1";
	$fdata["GoodName"] = "complexity1";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","complexity1"); 
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
	
	
	
	

	

	
	$tdataUrgent_Jobs["complexity1"] = $fdata;
//	complexity2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "complexity2";
	$fdata["GoodName"] = "complexity2";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","complexity2"); 
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
	
	
	
	

	

	
	$tdataUrgent_Jobs["complexity2"] = $fdata;
//	complexity3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "complexity3";
	$fdata["GoodName"] = "complexity3";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","complexity3"); 
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
	
	
	
	

	

	
	$tdataUrgent_Jobs["complexity3"] = $fdata;
//	complexity4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "complexity4";
	$fdata["GoodName"] = "complexity4";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","complexity4"); 
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
	
	
	
	

	

	
	$tdataUrgent_Jobs["complexity4"] = $fdata;
//	complexity5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "complexity5";
	$fdata["GoodName"] = "complexity5";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","complexity5"); 
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
	
	
	
	

	

	
	$tdataUrgent_Jobs["complexity5"] = $fdata;
//	complexity0
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "complexity0";
	$fdata["GoodName"] = "complexity0";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","complexity0"); 
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
	
	
	
	

	

	
	$tdataUrgent_Jobs["complexity0"] = $fdata;
//	complexityNP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "complexityNP";
	$fdata["GoodName"] = "complexityNP";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","complexityNP"); 
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
	
	
	
	

	

	
	$tdataUrgent_Jobs["complexityNP"] = $fdata;
//	custom_complexity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "custom_complexity";
	$fdata["GoodName"] = "custom_complexity";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","custom_complexity"); 
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
	
	
	
	

	

	
	$tdataUrgent_Jobs["custom_complexity"] = $fdata;
//	notify_options
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "notify_options";
	$fdata["GoodName"] = "notify_options";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","notify_options"); 
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

	

	
	$tdataUrgent_Jobs["notify_options"] = $fdata;
//	allow_batch_process
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "allow_batch_process";
	$fdata["GoodName"] = "allow_batch_process";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","allow_batch_process"); 
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

	

	
	$tdataUrgent_Jobs["allow_batch_process"] = $fdata;
//	reviewer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "reviewer_id";
	$fdata["GoodName"] = "reviewer_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","reviewer_id"); 
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

	

	
	$tdataUrgent_Jobs["reviewer_id"] = $fdata;
//	accept_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "accept_id";
	$fdata["GoodName"] = "accept_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","accept_id"); 
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

	

	
	$tdataUrgent_Jobs["accept_id"] = $fdata;
//	notifer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "notifer_id";
	$fdata["GoodName"] = "notifer_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","notifer_id"); 
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

	

	
	$tdataUrgent_Jobs["notifer_id"] = $fdata;
//	notify_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "notify_date";
	$fdata["GoodName"] = "notify_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","notify_date"); 
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

	

	
	$tdataUrgent_Jobs["notify_date"] = $fdata;
//	qcs_list
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "qcs_list";
	$fdata["GoodName"] = "qcs_list";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Urgent_Jobs","qcs_list"); 
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

	

	
	$tdataUrgent_Jobs["qcs_list"] = $fdata;

	
$tables_data["Urgent Jobs"]=&$tdataUrgent_Jobs;
$field_labels["Urgent_Jobs"] = &$fieldLabelsUrgent_Jobs;
$fieldToolTips["Urgent Jobs"] = &$fieldToolTipsUrgent_Jobs;
$page_titles["Urgent_Jobs"] = &$pageTitlesUrgent_Jobs;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Urgent Jobs"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Urgent Jobs"] = array();


	
				$strOriginalDetailsTable="user";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="user";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "user";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "1";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Urgent Jobs"][0] = $masterParams;	
				$masterTablesData["Urgent Jobs"][0]["masterKeys"] = array();
	$masterTablesData["Urgent Jobs"][0]["masterKeys"][]="user_id";
				$masterTablesData["Urgent Jobs"][0]["detailKeys"] = array();
	$masterTablesData["Urgent Jobs"][0]["detailKeys"][]="notifer_id";
		
	
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
					$masterTablesData["Urgent Jobs"][1] = $masterParams;	
				$masterTablesData["Urgent Jobs"][1]["masterKeys"] = array();
	$masterTablesData["Urgent Jobs"][1]["masterKeys"][]="notify_option_id";
				$masterTablesData["Urgent Jobs"][1]["detailKeys"] = array();
	$masterTablesData["Urgent Jobs"][1]["detailKeys"][]="notify_options";
		
	
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
					$masterTablesData["Urgent Jobs"][2] = $masterParams;	
				$masterTablesData["Urgent Jobs"][2]["masterKeys"] = array();
	$masterTablesData["Urgent Jobs"][2]["masterKeys"][]="pdf_id";
				$masterTablesData["Urgent Jobs"][2]["detailKeys"] = array();
	$masterTablesData["Urgent Jobs"][2]["detailKeys"][]="pdf_id";
		
	
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
					$masterTablesData["Urgent Jobs"][3] = $masterParams;	
				$masterTablesData["Urgent Jobs"][3]["masterKeys"] = array();
	$masterTablesData["Urgent Jobs"][3]["masterKeys"][]="jobstatus_id";
				$masterTablesData["Urgent Jobs"][3]["detailKeys"] = array();
	$masterTablesData["Urgent Jobs"][3]["detailKeys"][]="jobstatus_id";
		
	
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
					$masterTablesData["Urgent Jobs"][4] = $masterParams;	
				$masterTablesData["Urgent Jobs"][4]["masterKeys"] = array();
	$masterTablesData["Urgent Jobs"][4]["masterKeys"][]="project_id";
				$masterTablesData["Urgent Jobs"][4]["detailKeys"] = array();
	$masterTablesData["Urgent Jobs"][4]["detailKeys"][]="project_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Urgent_Jobs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_id,  job_id,  total_images,  is_urgent,  urgent_instruction,  delivery_duration,  notes,  web_note,  comments,  pdf_id,  pdf_location,  jobstatus_id,  reviewed_date,  accepted_date,  designer_list,  delivery_date,  TIMEDIFF(delivery_date, NOW()) AS time_left,  client_id,  project_id,  complexity1,  complexity2,  complexity3,  complexity4,  complexity5,  complexity0,  complexityNP,  custom_complexity,  notify_options,  allow_batch_process,  reviewer_id,  accept_id,  notifer_id,  notify_date,  qcs_list";
$proto0["m_strFrom"] = "FROM job";
$proto0["m_strWhere"] = "accepted_date !=\"0000-00-00 00:00:00\" AND is_urgent = \"1\" AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12 AND pdf_id !=5000 AND pdf_id !=5879 AND pdf_id !=5880)";
$proto0["m_strOrderBy"] = "ORDER BY TIMEDIFF(delivery_date, NOW()), delivery_date, is_urgent DESC, accepted_date, jobstatus_id";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "accepted_date !=\"0000-00-00 00:00:00\" AND is_urgent = \"1\" AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12 AND pdf_id !=5000 AND pdf_id !=5879 AND pdf_id !=5880)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "accepted_date !=\"0000-00-00 00:00:00\" AND is_urgent = \"1\" AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12 AND pdf_id !=5000 AND pdf_id !=5879 AND pdf_id !=5880)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "accepted_date !=\"0000-00-00 00:00:00\"";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "accepted_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
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
	"m_srcTableName" => "Urgent Jobs"
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
$proto7["m_sql"] = "jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12 AND pdf_id !=5000 AND pdf_id !=5879 AND pdf_id !=5880";
$proto7["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12 AND pdf_id !=5000 AND pdf_id !=5879 AND pdf_id !=5880"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
						$proto9=array();
$proto9["m_sql"] = "jobstatus_id != 0";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
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
	"m_srcTableName" => "Urgent Jobs"
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
	"m_srcTableName" => "Urgent Jobs"
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
$proto15["m_sql"] = "pdf_id !=5000";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "!=5000";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

			$proto7["m_contained"][]=$obj;
						$proto17=array();
$proto17["m_sql"] = "pdf_id !=5879";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "!=5879";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

			$proto7["m_contained"][]=$obj;
						$proto19=array();
$proto19["m_sql"] = "pdf_id !=5880";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "!=5880";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

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
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto23["m_sql"] = "work_id";
$proto23["m_srcTableName"] = "Urgent Jobs";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto25["m_sql"] = "job_id";
$proto25["m_srcTableName"] = "Urgent Jobs";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "total_images",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto27["m_sql"] = "total_images";
$proto27["m_srcTableName"] = "Urgent Jobs";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "is_urgent",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto29["m_sql"] = "is_urgent";
$proto29["m_srcTableName"] = "Urgent Jobs";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "urgent_instruction",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto31["m_sql"] = "urgent_instruction";
$proto31["m_srcTableName"] = "Urgent Jobs";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "delivery_duration",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto33["m_sql"] = "delivery_duration";
$proto33["m_srcTableName"] = "Urgent Jobs";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto35["m_sql"] = "notes";
$proto35["m_srcTableName"] = "Urgent Jobs";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "web_note",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto37["m_sql"] = "web_note";
$proto37["m_srcTableName"] = "Urgent Jobs";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "comments",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto39["m_sql"] = "comments";
$proto39["m_srcTableName"] = "Urgent Jobs";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto41["m_sql"] = "pdf_id";
$proto41["m_srcTableName"] = "Urgent Jobs";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_location",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto43["m_sql"] = "pdf_location";
$proto43["m_srcTableName"] = "Urgent Jobs";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto45["m_sql"] = "jobstatus_id";
$proto45["m_srcTableName"] = "Urgent Jobs";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "reviewed_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto47["m_sql"] = "reviewed_date";
$proto47["m_srcTableName"] = "Urgent Jobs";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "accepted_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto49["m_sql"] = "accepted_date";
$proto49["m_srcTableName"] = "Urgent Jobs";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_list",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto51["m_sql"] = "designer_list";
$proto51["m_srcTableName"] = "Urgent Jobs";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "delivery_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto53["m_sql"] = "delivery_date";
$proto53["m_srcTableName"] = "Urgent Jobs";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$proto56=array();
$proto56["m_functiontype"] = "SQLF_CUSTOM";
$proto56["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "delivery_date"
));

$proto56["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NOW()"
));

$proto56["m_arguments"][]=$obj;
$proto56["m_strFunctionName"] = "TIMEDIFF";
$obj = new SQLFunctionCall($proto56);

$proto55["m_sql"] = "TIMEDIFF(delivery_date, NOW())";
$proto55["m_srcTableName"] = "Urgent Jobs";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "time_left";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "client_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto59["m_sql"] = "client_id";
$proto59["m_srcTableName"] = "Urgent Jobs";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto61["m_sql"] = "project_id";
$proto61["m_srcTableName"] = "Urgent Jobs";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity1",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto63["m_sql"] = "complexity1";
$proto63["m_srcTableName"] = "Urgent Jobs";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity2",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto65["m_sql"] = "complexity2";
$proto65["m_srcTableName"] = "Urgent Jobs";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity3",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto67["m_sql"] = "complexity3";
$proto67["m_srcTableName"] = "Urgent Jobs";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity4",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto69["m_sql"] = "complexity4";
$proto69["m_srcTableName"] = "Urgent Jobs";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity5",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto71["m_sql"] = "complexity5";
$proto71["m_srcTableName"] = "Urgent Jobs";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity0",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto73["m_sql"] = "complexity0";
$proto73["m_srcTableName"] = "Urgent Jobs";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "complexityNP",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto75["m_sql"] = "complexityNP";
$proto75["m_srcTableName"] = "Urgent Jobs";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "custom_complexity",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto77["m_sql"] = "custom_complexity";
$proto77["m_srcTableName"] = "Urgent Jobs";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "notify_options",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto79["m_sql"] = "notify_options";
$proto79["m_srcTableName"] = "Urgent Jobs";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "allow_batch_process",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto81["m_sql"] = "allow_batch_process";
$proto81["m_srcTableName"] = "Urgent Jobs";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "reviewer_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto83["m_sql"] = "reviewer_id";
$proto83["m_srcTableName"] = "Urgent Jobs";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "accept_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto85["m_sql"] = "accept_id";
$proto85["m_srcTableName"] = "Urgent Jobs";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "notifer_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto87["m_sql"] = "notifer_id";
$proto87["m_srcTableName"] = "Urgent Jobs";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "notify_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto89["m_sql"] = "notify_date";
$proto89["m_srcTableName"] = "Urgent Jobs";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "qcs_list",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto91["m_sql"] = "qcs_list";
$proto91["m_srcTableName"] = "Urgent Jobs";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto93=array();
$proto93["m_link"] = "SQLL_MAIN";
			$proto94=array();
$proto94["m_strName"] = "job";
$proto94["m_srcTableName"] = "Urgent Jobs";
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
$proto93["m_srcTableName"] = "Urgent Jobs";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto97=array();
						$proto98=array();
$proto98["m_functiontype"] = "SQLF_CUSTOM";
$proto98["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "delivery_date"
));

$proto98["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NOW()"
));

$proto98["m_arguments"][]=$obj;
$proto98["m_strFunctionName"] = "TIMEDIFF";
$obj = new SQLFunctionCall($proto98);

$proto97["m_column"]=$obj;
$proto97["m_bAsc"] = 1;
$proto97["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto97);

$proto0["m_orderby"][]=$obj;					
												$proto101=array();
						$obj = new SQLField(array(
	"m_strName" => "delivery_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto101["m_column"]=$obj;
$proto101["m_bAsc"] = 1;
$proto101["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto101);

$proto0["m_orderby"][]=$obj;					
												$proto103=array();
						$obj = new SQLField(array(
	"m_strName" => "is_urgent",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto103["m_column"]=$obj;
$proto103["m_bAsc"] = 0;
$proto103["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto103);

$proto0["m_orderby"][]=$obj;					
												$proto105=array();
						$obj = new SQLField(array(
	"m_strName" => "accepted_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto105["m_column"]=$obj;
$proto105["m_bAsc"] = 1;
$proto105["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto105);

$proto0["m_orderby"][]=$obj;					
												$proto107=array();
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Urgent Jobs"
));

$proto107["m_column"]=$obj;
$proto107["m_bAsc"] = 1;
$proto107["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto107);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Urgent Jobs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Urgent_Jobs = createSqlQuery_Urgent_Jobs();


	
																																		
	
$tdataUrgent_Jobs[".sqlquery"] = $queryData_Urgent_Jobs;

include_once(getabspath("include/Urgent_Jobs_events.php"));
$tableEvents["Urgent Jobs"] = new eventclass_Urgent_Jobs;
$tdataUrgent_Jobs[".hasEvents"] = true;

?>