<?php
require_once(getabspath("classes/cipherer.php"));




$tdataNeed_QC = array();	
	$tdataNeed_QC[".truncateText"] = true;
	$tdataNeed_QC[".NumberOfChars"] = 40; 
	$tdataNeed_QC[".ShortName"] = "Need_QC";
	$tdataNeed_QC[".OwnerID"] = "";
	$tdataNeed_QC[".OriginalTable"] = "job";

//	field labels
$fieldLabelsNeed_QC = array();
$fieldToolTipsNeed_QC = array();
$pageTitlesNeed_QC = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsNeed_QC["English"] = array();
	$fieldToolTipsNeed_QC["English"] = array();
	$pageTitlesNeed_QC["English"] = array();
	$fieldLabelsNeed_QC["English"]["work_id"] = "Work Id";
	$fieldToolTipsNeed_QC["English"]["work_id"] = "";
	$fieldLabelsNeed_QC["English"]["job_id"] = "Job Id";
	$fieldToolTipsNeed_QC["English"]["job_id"] = "";
	$fieldLabelsNeed_QC["English"]["total_images"] = "Total Images";
	$fieldToolTipsNeed_QC["English"]["total_images"] = "";
	$fieldLabelsNeed_QC["English"]["is_urgent"] = "Is Urgent";
	$fieldToolTipsNeed_QC["English"]["is_urgent"] = "";
	$fieldLabelsNeed_QC["English"]["urgent_instruction"] = "Urgent Instruction";
	$fieldToolTipsNeed_QC["English"]["urgent_instruction"] = "";
	$fieldLabelsNeed_QC["English"]["delivery_duration"] = "Delivery Duration";
	$fieldToolTipsNeed_QC["English"]["delivery_duration"] = "";
	$fieldLabelsNeed_QC["English"]["notes"] = "Notes";
	$fieldToolTipsNeed_QC["English"]["notes"] = "";
	$fieldLabelsNeed_QC["English"]["web_note"] = "Web Note";
	$fieldToolTipsNeed_QC["English"]["web_note"] = "";
	$fieldLabelsNeed_QC["English"]["comments"] = "Comments";
	$fieldToolTipsNeed_QC["English"]["comments"] = "";
	$fieldLabelsNeed_QC["English"]["pdf_id"] = "Pdf Id";
	$fieldToolTipsNeed_QC["English"]["pdf_id"] = "";
	$fieldLabelsNeed_QC["English"]["pdf_location"] = "Pdf Location";
	$fieldToolTipsNeed_QC["English"]["pdf_location"] = "";
	$fieldLabelsNeed_QC["English"]["jobstatus_id"] = "Jobstatus";
	$fieldToolTipsNeed_QC["English"]["jobstatus_id"] = "";
	$fieldLabelsNeed_QC["English"]["reviewed_date"] = "Reviewed Date";
	$fieldToolTipsNeed_QC["English"]["reviewed_date"] = "";
	$fieldLabelsNeed_QC["English"]["accepted_date"] = "Accepted Date";
	$fieldToolTipsNeed_QC["English"]["accepted_date"] = "";
	$fieldLabelsNeed_QC["English"]["designer_list"] = "Designer List";
	$fieldToolTipsNeed_QC["English"]["designer_list"] = "";
	$fieldLabelsNeed_QC["English"]["delivery_date"] = "Delivery Date";
	$fieldToolTipsNeed_QC["English"]["delivery_date"] = "";
	$fieldLabelsNeed_QC["English"]["client_id"] = "Client Id";
	$fieldToolTipsNeed_QC["English"]["client_id"] = "";
	$fieldLabelsNeed_QC["English"]["project_id"] = "Project Id";
	$fieldToolTipsNeed_QC["English"]["project_id"] = "";
	$fieldLabelsNeed_QC["English"]["complexity1"] = "Complexity1";
	$fieldToolTipsNeed_QC["English"]["complexity1"] = "";
	$fieldLabelsNeed_QC["English"]["complexity2"] = "Complexity2";
	$fieldToolTipsNeed_QC["English"]["complexity2"] = "";
	$fieldLabelsNeed_QC["English"]["complexity3"] = "Complexity3";
	$fieldToolTipsNeed_QC["English"]["complexity3"] = "";
	$fieldLabelsNeed_QC["English"]["complexity4"] = "Complexity4";
	$fieldToolTipsNeed_QC["English"]["complexity4"] = "";
	$fieldLabelsNeed_QC["English"]["complexity5"] = "Complexity5";
	$fieldToolTipsNeed_QC["English"]["complexity5"] = "";
	$fieldLabelsNeed_QC["English"]["complexity0"] = "Complexity0";
	$fieldToolTipsNeed_QC["English"]["complexity0"] = "";
	$fieldLabelsNeed_QC["English"]["complexityNP"] = "Complexity NP";
	$fieldToolTipsNeed_QC["English"]["complexityNP"] = "";
	$fieldLabelsNeed_QC["English"]["custom_complexity"] = "Custom Complexity";
	$fieldToolTipsNeed_QC["English"]["custom_complexity"] = "";
	$fieldLabelsNeed_QC["English"]["notify_options"] = "Notify Options";
	$fieldToolTipsNeed_QC["English"]["notify_options"] = "";
	$fieldLabelsNeed_QC["English"]["allow_batch_process"] = "Allow Batch Process";
	$fieldToolTipsNeed_QC["English"]["allow_batch_process"] = "";
	$fieldLabelsNeed_QC["English"]["reviewer_id"] = "Reviewer Id";
	$fieldToolTipsNeed_QC["English"]["reviewer_id"] = "";
	$fieldLabelsNeed_QC["English"]["accept_id"] = "Accept Id";
	$fieldToolTipsNeed_QC["English"]["accept_id"] = "";
	$fieldLabelsNeed_QC["English"]["notifer_id"] = "Notifer Id";
	$fieldToolTipsNeed_QC["English"]["notifer_id"] = "";
	$fieldLabelsNeed_QC["English"]["notify_date"] = "Notify Date";
	$fieldToolTipsNeed_QC["English"]["notify_date"] = "";
	$fieldLabelsNeed_QC["English"]["time_left"] = "Time Left";
	$fieldToolTipsNeed_QC["English"]["time_left"] = "";
	$fieldLabelsNeed_QC["English"]["qcs_list"] = "Qcs List";
	$fieldToolTipsNeed_QC["English"]["qcs_list"] = "";
	if (count($fieldToolTipsNeed_QC["English"]))
		$tdataNeed_QC[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsNeed_QC[""] = array();
	$fieldToolTipsNeed_QC[""] = array();
	$pageTitlesNeed_QC[""] = array();
	if (count($fieldToolTipsNeed_QC[""]))
		$tdataNeed_QC[".isUseToolTips"] = true;
}
	
	
	$tdataNeed_QC[".NCSearch"] = true;



$tdataNeed_QC[".shortTableName"] = "Need_QC";
$tdataNeed_QC[".nSecOptions"] = 0;
$tdataNeed_QC[".recsPerRowList"] = 1;
$tdataNeed_QC[".recsPerRowPrint"] = 1;
$tdataNeed_QC[".mainTableOwnerID"] = "";
$tdataNeed_QC[".moveNext"] = 1;
$tdataNeed_QC[".entityType"] = 1;

$tdataNeed_QC[".strOriginalTableName"] = "job";




$tdataNeed_QC[".showAddInPopup"] = false;

$tdataNeed_QC[".showEditInPopup"] = false;

$tdataNeed_QC[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataNeed_QC[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataNeed_QC[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataNeed_QC[".listAjax"] = true;
else 
	$tdataNeed_QC[".listAjax"] = false;

	$tdataNeed_QC[".audit"] = false;

	$tdataNeed_QC[".locking"] = false;

$tdataNeed_QC[".edit"] = true;
$tdataNeed_QC[".afterEditAction"] = 1;
$tdataNeed_QC[".closePopupAfterEdit"] = 1;
$tdataNeed_QC[".afterEditActionDetTable"] = "";


$tdataNeed_QC[".list"] = true;

$tdataNeed_QC[".view"] = true;




$tdataNeed_QC[".delete"] = true;

$tdataNeed_QC[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataNeed_QC[".searchSaving"] = false;
//

$tdataNeed_QC[".showSearchPanel"] = true;
		$tdataNeed_QC[".flexibleSearch"] = true;		

if (isMobile())
	$tdataNeed_QC[".isUseAjaxSuggest"] = false;
else 
	$tdataNeed_QC[".isUseAjaxSuggest"] = true;

$tdataNeed_QC[".rowHighlite"] = true;


																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																			
			
			
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																$tdataNeed_QC[".isUsebuttonHandlers"] = true;

$tdataNeed_QC[".addPageEvents"] = true;

// use timepicker for search panel
$tdataNeed_QC[".isUseTimeForSearch"] = true;





$tdataNeed_QC[".allSearchFields"] = array();
$tdataNeed_QC[".filterFields"] = array();
$tdataNeed_QC[".requiredSearchFields"] = array();

$tdataNeed_QC[".allSearchFields"][] = "time_left";
	$tdataNeed_QC[".allSearchFields"][] = "qcs_list";
	$tdataNeed_QC[".allSearchFields"][] = "job_id";
	$tdataNeed_QC[".allSearchFields"][] = "accept_id";
	$tdataNeed_QC[".allSearchFields"][] = "project_id";
	$tdataNeed_QC[".allSearchFields"][] = "notifer_id";
	$tdataNeed_QC[".allSearchFields"][] = "pdf_id";
	$tdataNeed_QC[".allSearchFields"][] = "notify_date";
	$tdataNeed_QC[".allSearchFields"][] = "work_id";
	$tdataNeed_QC[".allSearchFields"][] = "notify_options";
	$tdataNeed_QC[".allSearchFields"][] = "is_urgent";
	$tdataNeed_QC[".allSearchFields"][] = "delivery_duration";
	$tdataNeed_QC[".allSearchFields"][] = "delivery_date";
	$tdataNeed_QC[".allSearchFields"][] = "notes";
	$tdataNeed_QC[".allSearchFields"][] = "web_note";
	$tdataNeed_QC[".allSearchFields"][] = "allow_batch_process";
	$tdataNeed_QC[".allSearchFields"][] = "client_id";
	$tdataNeed_QC[".allSearchFields"][] = "jobstatus_id";
	$tdataNeed_QC[".allSearchFields"][] = "reviewer_id";
	$tdataNeed_QC[".allSearchFields"][] = "reviewed_date";
	$tdataNeed_QC[".allSearchFields"][] = "accepted_date";
	$tdataNeed_QC[".allSearchFields"][] = "designer_list";
	

$tdataNeed_QC[".googleLikeFields"] = array();
$tdataNeed_QC[".googleLikeFields"][] = "work_id";
$tdataNeed_QC[".googleLikeFields"][] = "job_id";
$tdataNeed_QC[".googleLikeFields"][] = "total_images";
$tdataNeed_QC[".googleLikeFields"][] = "is_urgent";
$tdataNeed_QC[".googleLikeFields"][] = "urgent_instruction";
$tdataNeed_QC[".googleLikeFields"][] = "delivery_duration";
$tdataNeed_QC[".googleLikeFields"][] = "notes";
$tdataNeed_QC[".googleLikeFields"][] = "web_note";
$tdataNeed_QC[".googleLikeFields"][] = "comments";
$tdataNeed_QC[".googleLikeFields"][] = "pdf_id";
$tdataNeed_QC[".googleLikeFields"][] = "pdf_location";
$tdataNeed_QC[".googleLikeFields"][] = "jobstatus_id";
$tdataNeed_QC[".googleLikeFields"][] = "reviewed_date";
$tdataNeed_QC[".googleLikeFields"][] = "accepted_date";
$tdataNeed_QC[".googleLikeFields"][] = "designer_list";
$tdataNeed_QC[".googleLikeFields"][] = "delivery_date";
$tdataNeed_QC[".googleLikeFields"][] = "time_left";
$tdataNeed_QC[".googleLikeFields"][] = "client_id";
$tdataNeed_QC[".googleLikeFields"][] = "project_id";
$tdataNeed_QC[".googleLikeFields"][] = "complexity1";
$tdataNeed_QC[".googleLikeFields"][] = "complexity2";
$tdataNeed_QC[".googleLikeFields"][] = "complexity3";
$tdataNeed_QC[".googleLikeFields"][] = "complexity4";
$tdataNeed_QC[".googleLikeFields"][] = "complexity5";
$tdataNeed_QC[".googleLikeFields"][] = "complexity0";
$tdataNeed_QC[".googleLikeFields"][] = "complexityNP";
$tdataNeed_QC[".googleLikeFields"][] = "custom_complexity";
$tdataNeed_QC[".googleLikeFields"][] = "notify_options";
$tdataNeed_QC[".googleLikeFields"][] = "allow_batch_process";
$tdataNeed_QC[".googleLikeFields"][] = "reviewer_id";
$tdataNeed_QC[".googleLikeFields"][] = "accept_id";
$tdataNeed_QC[".googleLikeFields"][] = "notifer_id";
$tdataNeed_QC[".googleLikeFields"][] = "notify_date";
$tdataNeed_QC[".googleLikeFields"][] = "qcs_list";


$tdataNeed_QC[".advSearchFields"] = array();
$tdataNeed_QC[".advSearchFields"][] = "time_left";
$tdataNeed_QC[".advSearchFields"][] = "qcs_list";
$tdataNeed_QC[".advSearchFields"][] = "job_id";
$tdataNeed_QC[".advSearchFields"][] = "accept_id";
$tdataNeed_QC[".advSearchFields"][] = "project_id";
$tdataNeed_QC[".advSearchFields"][] = "notifer_id";
$tdataNeed_QC[".advSearchFields"][] = "pdf_id";
$tdataNeed_QC[".advSearchFields"][] = "notify_date";
$tdataNeed_QC[".advSearchFields"][] = "work_id";
$tdataNeed_QC[".advSearchFields"][] = "notify_options";
$tdataNeed_QC[".advSearchFields"][] = "is_urgent";
$tdataNeed_QC[".advSearchFields"][] = "delivery_duration";
$tdataNeed_QC[".advSearchFields"][] = "delivery_date";
$tdataNeed_QC[".advSearchFields"][] = "notes";
$tdataNeed_QC[".advSearchFields"][] = "web_note";
$tdataNeed_QC[".advSearchFields"][] = "allow_batch_process";
$tdataNeed_QC[".advSearchFields"][] = "client_id";
$tdataNeed_QC[".advSearchFields"][] = "jobstatus_id";
$tdataNeed_QC[".advSearchFields"][] = "reviewer_id";
$tdataNeed_QC[".advSearchFields"][] = "reviewed_date";
$tdataNeed_QC[".advSearchFields"][] = "accepted_date";
$tdataNeed_QC[".advSearchFields"][] = "designer_list";

$tdataNeed_QC[".tableType"] = "list";

$tdataNeed_QC[".printerPageOrientation"] = 0;
$tdataNeed_QC[".nPrinterPageScale"] = 100;

$tdataNeed_QC[".nPrinterSplitRecords"] = 40;

$tdataNeed_QC[".nPrinterPDFSplitRecords"] = 40;



$tdataNeed_QC[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataNeed_QC[".pageSize"] = 20;

$tdataNeed_QC[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY delivery_date, is_urgent DESC, accepted_date, jobstatus_id";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataNeed_QC[".strOrderBy"] = $tstrOrderBy;

$tdataNeed_QC[".orderindexes"] = array();
$tdataNeed_QC[".orderindexes"][] = array(16, (1 ? "ASC" : "DESC"), "delivery_date");
$tdataNeed_QC[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "is_urgent");
$tdataNeed_QC[".orderindexes"][] = array(14, (1 ? "ASC" : "DESC"), "accepted_date");
$tdataNeed_QC[".orderindexes"][] = array(12, (1 ? "ASC" : "DESC"), "jobstatus_id");

$tdataNeed_QC[".sqlHead"] = "SELECT work_id,  job_id,  total_images,  is_urgent,  urgent_instruction,  delivery_duration,  notes,  web_note,  comments,  pdf_id,  pdf_location,  jobstatus_id,  reviewed_date,  accepted_date,  designer_list,  delivery_date,  TIMEDIFF(delivery_date, NOW()) AS time_left,  client_id,  project_id,  complexity1,  complexity2,  complexity3,  complexity4,  complexity5,  complexity0,  complexityNP,  custom_complexity,  notify_options,  allow_batch_process,  reviewer_id,  accept_id,  notifer_id,  notify_date,  qcs_list";
$tdataNeed_QC[".sqlFrom"] = "FROM job";
$tdataNeed_QC[".sqlWhereExpr"] = "(jobstatus_id = \"14\") AND (accepted_date >=\"0000-00-00 00:00:00\") AND (pdf_id !=5002 AND pdf_id !=5027 AND pdf_id !=5028 AND pdf_id !=5029 AND pdf_id !=5030 AND pdf_id !=5370 AND pdf_id !=5371 AND pdf_id !=5031 AND pdf_id !=5001 AND pdf_id !=5879 AND pdf_id !=5880)";
$tdataNeed_QC[".sqlTail"] = "";

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
$tdataNeed_QC[".arrEditTabs"] = $arrEditTabs;


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
$tdataNeed_QC[".arrAddTabs"] = $arrAddTabs;

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
$tdataNeed_QC[".arrViewTabs"] = $arrViewTabs;





//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataNeed_QC[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataNeed_QC[".arrGroupsPerPage"] = $arrGPP;

$tdataNeed_QC[".highlightSearchResults"] = true;

$tableKeysNeed_QC = array();
$tableKeysNeed_QC[] = "work_id";
$tdataNeed_QC[".Keys"] = $tableKeysNeed_QC;

$tdataNeed_QC[".listFields"] = array();
$tdataNeed_QC[".listFields"][] = "work_id";
$tdataNeed_QC[".listFields"][] = "job_id";
$tdataNeed_QC[".listFields"][] = "total_images";
$tdataNeed_QC[".listFields"][] = "pdf_id";
$tdataNeed_QC[".listFields"][] = "delivery_duration";
$tdataNeed_QC[".listFields"][] = "jobstatus_id";
$tdataNeed_QC[".listFields"][] = "is_urgent";
$tdataNeed_QC[".listFields"][] = "urgent_instruction";
$tdataNeed_QC[".listFields"][] = "delivery_date";
$tdataNeed_QC[".listFields"][] = "time_left";
$tdataNeed_QC[".listFields"][] = "notes";
$tdataNeed_QC[".listFields"][] = "web_note";
$tdataNeed_QC[".listFields"][] = "comments";
$tdataNeed_QC[".listFields"][] = "reviewed_date";
$tdataNeed_QC[".listFields"][] = "pdf_location";
$tdataNeed_QC[".listFields"][] = "accepted_date";
$tdataNeed_QC[".listFields"][] = "designer_list";
$tdataNeed_QC[".listFields"][] = "qcs_list";

$tdataNeed_QC[".hideMobileList"] = array();


$tdataNeed_QC[".viewFields"] = array();
$tdataNeed_QC[".viewFields"][] = "qcs_list";
$tdataNeed_QC[".viewFields"][] = "work_id";
$tdataNeed_QC[".viewFields"][] = "job_id";
$tdataNeed_QC[".viewFields"][] = "pdf_id";
$tdataNeed_QC[".viewFields"][] = "project_id";
$tdataNeed_QC[".viewFields"][] = "complexity1";
$tdataNeed_QC[".viewFields"][] = "complexity2";
$tdataNeed_QC[".viewFields"][] = "complexity3";
$tdataNeed_QC[".viewFields"][] = "complexity4";
$tdataNeed_QC[".viewFields"][] = "complexity5";
$tdataNeed_QC[".viewFields"][] = "complexity0";
$tdataNeed_QC[".viewFields"][] = "complexityNP";
$tdataNeed_QC[".viewFields"][] = "custom_complexity";
$tdataNeed_QC[".viewFields"][] = "total_images";
$tdataNeed_QC[".viewFields"][] = "notify_options";
$tdataNeed_QC[".viewFields"][] = "is_urgent";
$tdataNeed_QC[".viewFields"][] = "urgent_instruction";
$tdataNeed_QC[".viewFields"][] = "time_left";
$tdataNeed_QC[".viewFields"][] = "delivery_duration";
$tdataNeed_QC[".viewFields"][] = "delivery_date";
$tdataNeed_QC[".viewFields"][] = "allow_batch_process";
$tdataNeed_QC[".viewFields"][] = "client_id";
$tdataNeed_QC[".viewFields"][] = "jobstatus_id";
$tdataNeed_QC[".viewFields"][] = "reviewer_id";
$tdataNeed_QC[".viewFields"][] = "reviewed_date";
$tdataNeed_QC[".viewFields"][] = "accept_id";
$tdataNeed_QC[".viewFields"][] = "accepted_date";
$tdataNeed_QC[".viewFields"][] = "notifer_id";
$tdataNeed_QC[".viewFields"][] = "notify_date";
$tdataNeed_QC[".viewFields"][] = "pdf_location";
$tdataNeed_QC[".viewFields"][] = "designer_list";

$tdataNeed_QC[".addFields"] = array();
$tdataNeed_QC[".addFields"][] = "job_id";
$tdataNeed_QC[".addFields"][] = "pdf_id";
$tdataNeed_QC[".addFields"][] = "complexity1";
$tdataNeed_QC[".addFields"][] = "complexity2";
$tdataNeed_QC[".addFields"][] = "complexity3";
$tdataNeed_QC[".addFields"][] = "complexity4";
$tdataNeed_QC[".addFields"][] = "complexity5";
$tdataNeed_QC[".addFields"][] = "complexity0";
$tdataNeed_QC[".addFields"][] = "complexityNP";
$tdataNeed_QC[".addFields"][] = "custom_complexity";
$tdataNeed_QC[".addFields"][] = "total_images";
$tdataNeed_QC[".addFields"][] = "is_urgent";
$tdataNeed_QC[".addFields"][] = "urgent_instruction";
$tdataNeed_QC[".addFields"][] = "delivery_duration";
$tdataNeed_QC[".addFields"][] = "delivery_date";
$tdataNeed_QC[".addFields"][] = "notes";
$tdataNeed_QC[".addFields"][] = "web_note";
$tdataNeed_QC[".addFields"][] = "comments";
$tdataNeed_QC[".addFields"][] = "work_id";
$tdataNeed_QC[".addFields"][] = "notify_options";
$tdataNeed_QC[".addFields"][] = "client_id";
$tdataNeed_QC[".addFields"][] = "jobstatus_id";
$tdataNeed_QC[".addFields"][] = "reviewer_id";
$tdataNeed_QC[".addFields"][] = "reviewed_date";
$tdataNeed_QC[".addFields"][] = "pdf_location";

$tdataNeed_QC[".masterListFields"] = array();
$tdataNeed_QC[".masterListFields"][] = "qcs_list";
$tdataNeed_QC[".masterListFields"][] = "time_left";
$tdataNeed_QC[".masterListFields"][] = "delivery_date";
$tdataNeed_QC[".masterListFields"][] = "accept_id";
$tdataNeed_QC[".masterListFields"][] = "job_id";
$tdataNeed_QC[".masterListFields"][] = "project_id";
$tdataNeed_QC[".masterListFields"][] = "notifer_id";
$tdataNeed_QC[".masterListFields"][] = "pdf_id";
$tdataNeed_QC[".masterListFields"][] = "notify_date";
$tdataNeed_QC[".masterListFields"][] = "complexity1";
$tdataNeed_QC[".masterListFields"][] = "work_id";
$tdataNeed_QC[".masterListFields"][] = "complexity2";
$tdataNeed_QC[".masterListFields"][] = "complexity3";
$tdataNeed_QC[".masterListFields"][] = "complexity4";
$tdataNeed_QC[".masterListFields"][] = "complexity5";
$tdataNeed_QC[".masterListFields"][] = "complexity0";
$tdataNeed_QC[".masterListFields"][] = "complexityNP";
$tdataNeed_QC[".masterListFields"][] = "custom_complexity";
$tdataNeed_QC[".masterListFields"][] = "total_images";
$tdataNeed_QC[".masterListFields"][] = "notify_options";
$tdataNeed_QC[".masterListFields"][] = "is_urgent";
$tdataNeed_QC[".masterListFields"][] = "urgent_instruction";
$tdataNeed_QC[".masterListFields"][] = "delivery_duration";
$tdataNeed_QC[".masterListFields"][] = "notes";
$tdataNeed_QC[".masterListFields"][] = "web_note";
$tdataNeed_QC[".masterListFields"][] = "comments";
$tdataNeed_QC[".masterListFields"][] = "allow_batch_process";
$tdataNeed_QC[".masterListFields"][] = "client_id";
$tdataNeed_QC[".masterListFields"][] = "jobstatus_id";
$tdataNeed_QC[".masterListFields"][] = "reviewer_id";
$tdataNeed_QC[".masterListFields"][] = "reviewed_date";
$tdataNeed_QC[".masterListFields"][] = "pdf_location";
$tdataNeed_QC[".masterListFields"][] = "accepted_date";
$tdataNeed_QC[".masterListFields"][] = "designer_list";

$tdataNeed_QC[".inlineAddFields"] = array();

$tdataNeed_QC[".editFields"] = array();
$tdataNeed_QC[".editFields"][] = "work_id";
$tdataNeed_QC[".editFields"][] = "job_id";
$tdataNeed_QC[".editFields"][] = "pdf_id";
$tdataNeed_QC[".editFields"][] = "complexity1";
$tdataNeed_QC[".editFields"][] = "complexity2";
$tdataNeed_QC[".editFields"][] = "complexity3";
$tdataNeed_QC[".editFields"][] = "complexity4";
$tdataNeed_QC[".editFields"][] = "complexity5";
$tdataNeed_QC[".editFields"][] = "complexity0";
$tdataNeed_QC[".editFields"][] = "complexityNP";
$tdataNeed_QC[".editFields"][] = "custom_complexity";
$tdataNeed_QC[".editFields"][] = "total_images";
$tdataNeed_QC[".editFields"][] = "delivery_duration";
$tdataNeed_QC[".editFields"][] = "delivery_date";
$tdataNeed_QC[".editFields"][] = "is_urgent";
$tdataNeed_QC[".editFields"][] = "urgent_instruction";
$tdataNeed_QC[".editFields"][] = "notes";
$tdataNeed_QC[".editFields"][] = "web_note";
$tdataNeed_QC[".editFields"][] = "comments";
$tdataNeed_QC[".editFields"][] = "notify_options";
$tdataNeed_QC[".editFields"][] = "allow_batch_process";
$tdataNeed_QC[".editFields"][] = "client_id";
$tdataNeed_QC[".editFields"][] = "jobstatus_id";
$tdataNeed_QC[".editFields"][] = "reviewer_id";
$tdataNeed_QC[".editFields"][] = "reviewed_date";
$tdataNeed_QC[".editFields"][] = "pdf_location";
$tdataNeed_QC[".editFields"][] = "accept_id";
$tdataNeed_QC[".editFields"][] = "accepted_date";
$tdataNeed_QC[".editFields"][] = "notify_date";
$tdataNeed_QC[".editFields"][] = "notifer_id";
$tdataNeed_QC[".editFields"][] = "project_id";

$tdataNeed_QC[".inlineEditFields"] = array();

$tdataNeed_QC[".exportFields"] = array();
$tdataNeed_QC[".exportFields"][] = "time_left";
$tdataNeed_QC[".exportFields"][] = "qcs_list";
$tdataNeed_QC[".exportFields"][] = "job_id";
$tdataNeed_QC[".exportFields"][] = "accept_id";
$tdataNeed_QC[".exportFields"][] = "project_id";
$tdataNeed_QC[".exportFields"][] = "notifer_id";
$tdataNeed_QC[".exportFields"][] = "notify_date";
$tdataNeed_QC[".exportFields"][] = "pdf_id";
$tdataNeed_QC[".exportFields"][] = "complexity1";
$tdataNeed_QC[".exportFields"][] = "work_id";
$tdataNeed_QC[".exportFields"][] = "complexity2";
$tdataNeed_QC[".exportFields"][] = "complexity3";
$tdataNeed_QC[".exportFields"][] = "complexity4";
$tdataNeed_QC[".exportFields"][] = "complexity5";
$tdataNeed_QC[".exportFields"][] = "complexity0";
$tdataNeed_QC[".exportFields"][] = "complexityNP";
$tdataNeed_QC[".exportFields"][] = "custom_complexity";
$tdataNeed_QC[".exportFields"][] = "total_images";
$tdataNeed_QC[".exportFields"][] = "notify_options";
$tdataNeed_QC[".exportFields"][] = "is_urgent";
$tdataNeed_QC[".exportFields"][] = "urgent_instruction";
$tdataNeed_QC[".exportFields"][] = "delivery_duration";
$tdataNeed_QC[".exportFields"][] = "delivery_date";
$tdataNeed_QC[".exportFields"][] = "notes";
$tdataNeed_QC[".exportFields"][] = "web_note";
$tdataNeed_QC[".exportFields"][] = "comments";
$tdataNeed_QC[".exportFields"][] = "allow_batch_process";
$tdataNeed_QC[".exportFields"][] = "client_id";
$tdataNeed_QC[".exportFields"][] = "jobstatus_id";
$tdataNeed_QC[".exportFields"][] = "reviewer_id";
$tdataNeed_QC[".exportFields"][] = "reviewed_date";
$tdataNeed_QC[".exportFields"][] = "pdf_location";
$tdataNeed_QC[".exportFields"][] = "accepted_date";
$tdataNeed_QC[".exportFields"][] = "designer_list";

$tdataNeed_QC[".importFields"] = array();
$tdataNeed_QC[".importFields"][] = "work_id";
$tdataNeed_QC[".importFields"][] = "job_id";
$tdataNeed_QC[".importFields"][] = "total_images";
$tdataNeed_QC[".importFields"][] = "is_urgent";
$tdataNeed_QC[".importFields"][] = "urgent_instruction";
$tdataNeed_QC[".importFields"][] = "delivery_duration";
$tdataNeed_QC[".importFields"][] = "notes";
$tdataNeed_QC[".importFields"][] = "web_note";
$tdataNeed_QC[".importFields"][] = "comments";
$tdataNeed_QC[".importFields"][] = "pdf_id";
$tdataNeed_QC[".importFields"][] = "pdf_location";
$tdataNeed_QC[".importFields"][] = "jobstatus_id";
$tdataNeed_QC[".importFields"][] = "reviewed_date";
$tdataNeed_QC[".importFields"][] = "accepted_date";
$tdataNeed_QC[".importFields"][] = "designer_list";
$tdataNeed_QC[".importFields"][] = "delivery_date";
$tdataNeed_QC[".importFields"][] = "time_left";
$tdataNeed_QC[".importFields"][] = "client_id";
$tdataNeed_QC[".importFields"][] = "project_id";
$tdataNeed_QC[".importFields"][] = "complexity1";
$tdataNeed_QC[".importFields"][] = "complexity2";
$tdataNeed_QC[".importFields"][] = "complexity3";
$tdataNeed_QC[".importFields"][] = "complexity4";
$tdataNeed_QC[".importFields"][] = "complexity5";
$tdataNeed_QC[".importFields"][] = "complexity0";
$tdataNeed_QC[".importFields"][] = "complexityNP";
$tdataNeed_QC[".importFields"][] = "custom_complexity";
$tdataNeed_QC[".importFields"][] = "notify_options";
$tdataNeed_QC[".importFields"][] = "allow_batch_process";
$tdataNeed_QC[".importFields"][] = "reviewer_id";
$tdataNeed_QC[".importFields"][] = "accept_id";
$tdataNeed_QC[".importFields"][] = "notifer_id";
$tdataNeed_QC[".importFields"][] = "notify_date";
$tdataNeed_QC[".importFields"][] = "qcs_list";

$tdataNeed_QC[".printFields"] = array();
$tdataNeed_QC[".printFields"][] = "qcs_list";
$tdataNeed_QC[".printFields"][] = "time_left";
$tdataNeed_QC[".printFields"][] = "job_id";
$tdataNeed_QC[".printFields"][] = "accept_id";
$tdataNeed_QC[".printFields"][] = "project_id";
$tdataNeed_QC[".printFields"][] = "notifer_id";
$tdataNeed_QC[".printFields"][] = "notify_date";
$tdataNeed_QC[".printFields"][] = "pdf_id";
$tdataNeed_QC[".printFields"][] = "complexity1";
$tdataNeed_QC[".printFields"][] = "work_id";
$tdataNeed_QC[".printFields"][] = "complexity2";
$tdataNeed_QC[".printFields"][] = "complexity3";
$tdataNeed_QC[".printFields"][] = "complexity4";
$tdataNeed_QC[".printFields"][] = "complexity5";
$tdataNeed_QC[".printFields"][] = "complexity0";
$tdataNeed_QC[".printFields"][] = "complexityNP";
$tdataNeed_QC[".printFields"][] = "custom_complexity";
$tdataNeed_QC[".printFields"][] = "total_images";
$tdataNeed_QC[".printFields"][] = "notify_options";
$tdataNeed_QC[".printFields"][] = "is_urgent";
$tdataNeed_QC[".printFields"][] = "urgent_instruction";
$tdataNeed_QC[".printFields"][] = "delivery_duration";
$tdataNeed_QC[".printFields"][] = "delivery_date";
$tdataNeed_QC[".printFields"][] = "notes";
$tdataNeed_QC[".printFields"][] = "web_note";
$tdataNeed_QC[".printFields"][] = "comments";
$tdataNeed_QC[".printFields"][] = "allow_batch_process";
$tdataNeed_QC[".printFields"][] = "client_id";
$tdataNeed_QC[".printFields"][] = "jobstatus_id";
$tdataNeed_QC[".printFields"][] = "reviewer_id";
$tdataNeed_QC[".printFields"][] = "reviewed_date";
$tdataNeed_QC[".printFields"][] = "pdf_location";
$tdataNeed_QC[".printFields"][] = "accepted_date";
$tdataNeed_QC[".printFields"][] = "designer_list";

//	work_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_id";
	$fdata["GoodName"] = "work_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","work_id"); 
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

	

	
	$tdataNeed_QC["work_id"] = $fdata;
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","job_id"); 
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

	

	
	$tdataNeed_QC["job_id"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","total_images"); 
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
	
	
	
	

	

	
	$tdataNeed_QC["total_images"] = $fdata;
//	is_urgent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "is_urgent";
	$fdata["GoodName"] = "is_urgent";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","is_urgent"); 
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

	

	
	$tdataNeed_QC["is_urgent"] = $fdata;
//	urgent_instruction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "urgent_instruction";
	$fdata["GoodName"] = "urgent_instruction";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","urgent_instruction"); 
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
	
	
	
	

	

	
	$tdataNeed_QC["urgent_instruction"] = $fdata;
//	delivery_duration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "delivery_duration";
	$fdata["GoodName"] = "delivery_duration";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","delivery_duration"); 
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

	

	
	$tdataNeed_QC["delivery_duration"] = $fdata;
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","notes"); 
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

	

	
	$tdataNeed_QC["notes"] = $fdata;
//	web_note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "web_note";
	$fdata["GoodName"] = "web_note";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","web_note"); 
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

	

	
	$tdataNeed_QC["web_note"] = $fdata;
//	comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "comments";
	$fdata["GoodName"] = "comments";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","comments"); 
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
	
	
	
	

	

	
	$tdataNeed_QC["comments"] = $fdata;
//	pdf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "pdf_id";
	$fdata["GoodName"] = "pdf_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","pdf_id"); 
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

	

	
	$tdataNeed_QC["pdf_id"] = $fdata;
//	pdf_location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "pdf_location";
	$fdata["GoodName"] = "pdf_location";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","pdf_location"); 
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
	
	
	
	

	

	
	$tdataNeed_QC["pdf_location"] = $fdata;
//	jobstatus_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "jobstatus_id";
	$fdata["GoodName"] = "jobstatus_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","jobstatus_id"); 
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

	

	
	$tdataNeed_QC["jobstatus_id"] = $fdata;
//	reviewed_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "reviewed_date";
	$fdata["GoodName"] = "reviewed_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","reviewed_date"); 
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

	

	
	$tdataNeed_QC["reviewed_date"] = $fdata;
//	accepted_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "accepted_date";
	$fdata["GoodName"] = "accepted_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","accepted_date"); 
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

	

	
	$tdataNeed_QC["accepted_date"] = $fdata;
//	designer_list
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "designer_list";
	$fdata["GoodName"] = "designer_list";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","designer_list"); 
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

	

	
	$tdataNeed_QC["designer_list"] = $fdata;
//	delivery_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "delivery_date";
	$fdata["GoodName"] = "delivery_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","delivery_date"); 
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

	

	
	$tdataNeed_QC["delivery_date"] = $fdata;
//	time_left
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "time_left";
	$fdata["GoodName"] = "time_left";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Need_QC","time_left"); 
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

	

	
	$tdataNeed_QC["time_left"] = $fdata;
//	client_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "client_id";
	$fdata["GoodName"] = "client_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","client_id"); 
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

	

	
	$tdataNeed_QC["client_id"] = $fdata;
//	project_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "project_id";
	$fdata["GoodName"] = "project_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","project_id"); 
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

	

	
	$tdataNeed_QC["project_id"] = $fdata;
//	complexity1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "complexity1";
	$fdata["GoodName"] = "complexity1";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","complexity1"); 
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
	
	
	
	

	

	
	$tdataNeed_QC["complexity1"] = $fdata;
//	complexity2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "complexity2";
	$fdata["GoodName"] = "complexity2";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","complexity2"); 
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
	
	
	
	

	

	
	$tdataNeed_QC["complexity2"] = $fdata;
//	complexity3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "complexity3";
	$fdata["GoodName"] = "complexity3";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","complexity3"); 
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
	
	
	
	

	

	
	$tdataNeed_QC["complexity3"] = $fdata;
//	complexity4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "complexity4";
	$fdata["GoodName"] = "complexity4";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","complexity4"); 
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
	
	
	
	

	

	
	$tdataNeed_QC["complexity4"] = $fdata;
//	complexity5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "complexity5";
	$fdata["GoodName"] = "complexity5";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","complexity5"); 
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
	
	
	
	

	

	
	$tdataNeed_QC["complexity5"] = $fdata;
//	complexity0
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "complexity0";
	$fdata["GoodName"] = "complexity0";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","complexity0"); 
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
	
	
	
	

	

	
	$tdataNeed_QC["complexity0"] = $fdata;
//	complexityNP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "complexityNP";
	$fdata["GoodName"] = "complexityNP";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","complexityNP"); 
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
	
	
	
	

	

	
	$tdataNeed_QC["complexityNP"] = $fdata;
//	custom_complexity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "custom_complexity";
	$fdata["GoodName"] = "custom_complexity";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","custom_complexity"); 
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
	
	
	
	

	

	
	$tdataNeed_QC["custom_complexity"] = $fdata;
//	notify_options
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "notify_options";
	$fdata["GoodName"] = "notify_options";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","notify_options"); 
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

	

	
	$tdataNeed_QC["notify_options"] = $fdata;
//	allow_batch_process
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "allow_batch_process";
	$fdata["GoodName"] = "allow_batch_process";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","allow_batch_process"); 
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

	

	
	$tdataNeed_QC["allow_batch_process"] = $fdata;
//	reviewer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "reviewer_id";
	$fdata["GoodName"] = "reviewer_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","reviewer_id"); 
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

	

	
	$tdataNeed_QC["reviewer_id"] = $fdata;
//	accept_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "accept_id";
	$fdata["GoodName"] = "accept_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","accept_id"); 
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

	

	
	$tdataNeed_QC["accept_id"] = $fdata;
//	notifer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "notifer_id";
	$fdata["GoodName"] = "notifer_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","notifer_id"); 
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

	

	
	$tdataNeed_QC["notifer_id"] = $fdata;
//	notify_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "notify_date";
	$fdata["GoodName"] = "notify_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","notify_date"); 
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

	

	
	$tdataNeed_QC["notify_date"] = $fdata;
//	qcs_list
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "qcs_list";
	$fdata["GoodName"] = "qcs_list";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Need_QC","qcs_list"); 
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

	

	
	$tdataNeed_QC["qcs_list"] = $fdata;

	
$tables_data["Need QC"]=&$tdataNeed_QC;
$field_labels["Need_QC"] = &$fieldLabelsNeed_QC;
$fieldToolTips["Need QC"] = &$fieldToolTipsNeed_QC;
$page_titles["Need_QC"] = &$pageTitlesNeed_QC;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Need QC"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Need QC"] = array();


	
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
					$masterTablesData["Need QC"][0] = $masterParams;	
				$masterTablesData["Need QC"][0]["masterKeys"] = array();
	$masterTablesData["Need QC"][0]["masterKeys"][]="user_id";
				$masterTablesData["Need QC"][0]["detailKeys"] = array();
	$masterTablesData["Need QC"][0]["detailKeys"][]="notifer_id";
		
	
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
					$masterTablesData["Need QC"][1] = $masterParams;	
				$masterTablesData["Need QC"][1]["masterKeys"] = array();
	$masterTablesData["Need QC"][1]["masterKeys"][]="notify_option_id";
				$masterTablesData["Need QC"][1]["detailKeys"] = array();
	$masterTablesData["Need QC"][1]["detailKeys"][]="notify_options";
		
	
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
					$masterTablesData["Need QC"][2] = $masterParams;	
				$masterTablesData["Need QC"][2]["masterKeys"] = array();
	$masterTablesData["Need QC"][2]["masterKeys"][]="pdf_id";
				$masterTablesData["Need QC"][2]["detailKeys"] = array();
	$masterTablesData["Need QC"][2]["detailKeys"][]="pdf_id";
		
	
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
					$masterTablesData["Need QC"][3] = $masterParams;	
				$masterTablesData["Need QC"][3]["masterKeys"] = array();
	$masterTablesData["Need QC"][3]["masterKeys"][]="jobstatus_id";
				$masterTablesData["Need QC"][3]["detailKeys"] = array();
	$masterTablesData["Need QC"][3]["detailKeys"][]="jobstatus_id";
		
	
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
					$masterTablesData["Need QC"][4] = $masterParams;	
				$masterTablesData["Need QC"][4]["masterKeys"] = array();
	$masterTablesData["Need QC"][4]["masterKeys"][]="project_id";
				$masterTablesData["Need QC"][4]["detailKeys"] = array();
	$masterTablesData["Need QC"][4]["detailKeys"][]="project_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Need_QC()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_id,  job_id,  total_images,  is_urgent,  urgent_instruction,  delivery_duration,  notes,  web_note,  comments,  pdf_id,  pdf_location,  jobstatus_id,  reviewed_date,  accepted_date,  designer_list,  delivery_date,  TIMEDIFF(delivery_date, NOW()) AS time_left,  client_id,  project_id,  complexity1,  complexity2,  complexity3,  complexity4,  complexity5,  complexity0,  complexityNP,  custom_complexity,  notify_options,  allow_batch_process,  reviewer_id,  accept_id,  notifer_id,  notify_date,  qcs_list";
$proto0["m_strFrom"] = "FROM job";
$proto0["m_strWhere"] = "(jobstatus_id = \"14\") AND (accepted_date >=\"0000-00-00 00:00:00\") AND (pdf_id !=5002 AND pdf_id !=5027 AND pdf_id !=5028 AND pdf_id !=5029 AND pdf_id !=5030 AND pdf_id !=5370 AND pdf_id !=5371 AND pdf_id !=5031 AND pdf_id !=5001 AND pdf_id !=5879 AND pdf_id !=5880)";
$proto0["m_strOrderBy"] = "ORDER BY delivery_date, is_urgent DESC, accepted_date, jobstatus_id";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(jobstatus_id = \"14\") AND (accepted_date >=\"0000-00-00 00:00:00\") AND (pdf_id !=5002 AND pdf_id !=5027 AND pdf_id !=5028 AND pdf_id !=5029 AND pdf_id !=5030 AND pdf_id !=5370 AND pdf_id !=5371 AND pdf_id !=5031 AND pdf_id !=5001 AND pdf_id !=5879 AND pdf_id !=5880)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobstatus_id = \"14\") AND (accepted_date >=\"0000-00-00 00:00:00\") AND (pdf_id !=5002 AND pdf_id !=5027 AND pdf_id !=5028 AND pdf_id !=5029 AND pdf_id !=5030 AND pdf_id !=5370 AND pdf_id !=5371 AND pdf_id !=5031 AND pdf_id !=5001 AND pdf_id !=5879 AND pdf_id !=5880)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobstatus_id = \"14\"";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "= \"14\"";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "accepted_date >=\"0000-00-00 00:00:00\"";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "accepted_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = ">=\"0000-00-00 00:00:00\"";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = true;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
						$proto7=array();
$proto7["m_sql"] = "pdf_id !=5002 AND pdf_id !=5027 AND pdf_id !=5028 AND pdf_id !=5029 AND pdf_id !=5030 AND pdf_id !=5370 AND pdf_id !=5371 AND pdf_id !=5031 AND pdf_id !=5001 AND pdf_id !=5879 AND pdf_id !=5880";
$proto7["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "pdf_id !=5002 AND pdf_id !=5027 AND pdf_id !=5028 AND pdf_id !=5029 AND pdf_id !=5030 AND pdf_id !=5370 AND pdf_id !=5371 AND pdf_id !=5031 AND pdf_id !=5001 AND pdf_id !=5879 AND pdf_id !=5880"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
						$proto9=array();
$proto9["m_sql"] = "pdf_id !=5002";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "!=5002";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

			$proto7["m_contained"][]=$obj;
						$proto11=array();
$proto11["m_sql"] = "pdf_id !=5027";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "!=5027";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

			$proto7["m_contained"][]=$obj;
						$proto13=array();
$proto13["m_sql"] = "pdf_id !=5028";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "!=5028";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

			$proto7["m_contained"][]=$obj;
						$proto15=array();
$proto15["m_sql"] = "pdf_id !=5029";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "!=5029";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

			$proto7["m_contained"][]=$obj;
						$proto17=array();
$proto17["m_sql"] = "pdf_id !=5030";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "!=5030";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

			$proto7["m_contained"][]=$obj;
						$proto19=array();
$proto19["m_sql"] = "pdf_id !=5370";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "!=5370";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

			$proto7["m_contained"][]=$obj;
						$proto21=array();
$proto21["m_sql"] = "pdf_id !=5371";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "!=5371";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

			$proto7["m_contained"][]=$obj;
						$proto23=array();
$proto23["m_sql"] = "pdf_id !=5031";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "!=5031";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

			$proto7["m_contained"][]=$obj;
						$proto25=array();
$proto25["m_sql"] = "pdf_id !=5001";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "!=5001";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

			$proto7["m_contained"][]=$obj;
						$proto27=array();
$proto27["m_sql"] = "pdf_id !=5879";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "!=5879";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

			$proto7["m_contained"][]=$obj;
						$proto29=array();
$proto29["m_sql"] = "pdf_id !=5880";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "!=5880";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

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
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto33["m_sql"] = "work_id";
$proto33["m_srcTableName"] = "Need QC";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto35["m_sql"] = "job_id";
$proto35["m_srcTableName"] = "Need QC";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "total_images",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto37["m_sql"] = "total_images";
$proto37["m_srcTableName"] = "Need QC";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "is_urgent",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto39["m_sql"] = "is_urgent";
$proto39["m_srcTableName"] = "Need QC";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "urgent_instruction",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto41["m_sql"] = "urgent_instruction";
$proto41["m_srcTableName"] = "Need QC";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "delivery_duration",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto43["m_sql"] = "delivery_duration";
$proto43["m_srcTableName"] = "Need QC";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto45["m_sql"] = "notes";
$proto45["m_srcTableName"] = "Need QC";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "web_note",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto47["m_sql"] = "web_note";
$proto47["m_srcTableName"] = "Need QC";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "comments",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto49["m_sql"] = "comments";
$proto49["m_srcTableName"] = "Need QC";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto51["m_sql"] = "pdf_id";
$proto51["m_srcTableName"] = "Need QC";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_location",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto53["m_sql"] = "pdf_location";
$proto53["m_srcTableName"] = "Need QC";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto55["m_sql"] = "jobstatus_id";
$proto55["m_srcTableName"] = "Need QC";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "reviewed_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto57["m_sql"] = "reviewed_date";
$proto57["m_srcTableName"] = "Need QC";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "accepted_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto59["m_sql"] = "accepted_date";
$proto59["m_srcTableName"] = "Need QC";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_list",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto61["m_sql"] = "designer_list";
$proto61["m_srcTableName"] = "Need QC";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "delivery_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto63["m_sql"] = "delivery_date";
$proto63["m_srcTableName"] = "Need QC";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$proto66=array();
$proto66["m_functiontype"] = "SQLF_CUSTOM";
$proto66["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "delivery_date"
));

$proto66["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NOW()"
));

$proto66["m_arguments"][]=$obj;
$proto66["m_strFunctionName"] = "TIMEDIFF";
$obj = new SQLFunctionCall($proto66);

$proto65["m_sql"] = "TIMEDIFF(delivery_date, NOW())";
$proto65["m_srcTableName"] = "Need QC";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "time_left";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "client_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto69["m_sql"] = "client_id";
$proto69["m_srcTableName"] = "Need QC";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto71["m_sql"] = "project_id";
$proto71["m_srcTableName"] = "Need QC";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity1",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto73["m_sql"] = "complexity1";
$proto73["m_srcTableName"] = "Need QC";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity2",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto75["m_sql"] = "complexity2";
$proto75["m_srcTableName"] = "Need QC";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity3",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto77["m_sql"] = "complexity3";
$proto77["m_srcTableName"] = "Need QC";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity4",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto79["m_sql"] = "complexity4";
$proto79["m_srcTableName"] = "Need QC";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity5",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto81["m_sql"] = "complexity5";
$proto81["m_srcTableName"] = "Need QC";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "complexity0",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto83["m_sql"] = "complexity0";
$proto83["m_srcTableName"] = "Need QC";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "complexityNP",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto85["m_sql"] = "complexityNP";
$proto85["m_srcTableName"] = "Need QC";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "custom_complexity",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto87["m_sql"] = "custom_complexity";
$proto87["m_srcTableName"] = "Need QC";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "notify_options",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto89["m_sql"] = "notify_options";
$proto89["m_srcTableName"] = "Need QC";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "allow_batch_process",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto91["m_sql"] = "allow_batch_process";
$proto91["m_srcTableName"] = "Need QC";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "reviewer_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto93["m_sql"] = "reviewer_id";
$proto93["m_srcTableName"] = "Need QC";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLField(array(
	"m_strName" => "accept_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto95["m_sql"] = "accept_id";
$proto95["m_srcTableName"] = "Need QC";
$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "";
$obj = new SQLFieldListItem($proto95);

$proto0["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLField(array(
	"m_strName" => "notifer_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto97["m_sql"] = "notifer_id";
$proto97["m_srcTableName"] = "Need QC";
$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "";
$obj = new SQLFieldListItem($proto97);

$proto0["m_fieldlist"][]=$obj;
						$proto99=array();
			$obj = new SQLField(array(
	"m_strName" => "notify_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto99["m_sql"] = "notify_date";
$proto99["m_srcTableName"] = "Need QC";
$proto99["m_expr"]=$obj;
$proto99["m_alias"] = "";
$obj = new SQLFieldListItem($proto99);

$proto0["m_fieldlist"][]=$obj;
						$proto101=array();
			$obj = new SQLField(array(
	"m_strName" => "qcs_list",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto101["m_sql"] = "qcs_list";
$proto101["m_srcTableName"] = "Need QC";
$proto101["m_expr"]=$obj;
$proto101["m_alias"] = "";
$obj = new SQLFieldListItem($proto101);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto103=array();
$proto103["m_link"] = "SQLL_MAIN";
			$proto104=array();
$proto104["m_strName"] = "job";
$proto104["m_srcTableName"] = "Need QC";
$proto104["m_columns"] = array();
$proto104["m_columns"][] = "work_id";
$proto104["m_columns"][] = "job_id";
$proto104["m_columns"][] = "client_id";
$proto104["m_columns"][] = "project_id";
$proto104["m_columns"][] = "job_directory";
$proto104["m_columns"][] = "complexity1";
$proto104["m_columns"][] = "complexity2";
$proto104["m_columns"][] = "complexity3";
$proto104["m_columns"][] = "complexity4";
$proto104["m_columns"][] = "complexity5";
$proto104["m_columns"][] = "complexity0";
$proto104["m_columns"][] = "complexityNP";
$proto104["m_columns"][] = "custom_complexity";
$proto104["m_columns"][] = "total_images";
$proto104["m_columns"][] = "is_urgent";
$proto104["m_columns"][] = "urgent_instruction";
$proto104["m_columns"][] = "delivery_duration";
$proto104["m_columns"][] = "delivery_date";
$proto104["m_columns"][] = "notify_options";
$proto104["m_columns"][] = "notes";
$proto104["m_columns"][] = "web_note";
$proto104["m_columns"][] = "comments";
$proto104["m_columns"][] = "pdf_id";
$proto104["m_columns"][] = "pdf_location";
$proto104["m_columns"][] = "allow_batch_process";
$proto104["m_columns"][] = "jobstatus_id";
$proto104["m_columns"][] = "reviewer_id";
$proto104["m_columns"][] = "reviewed_date";
$proto104["m_columns"][] = "accept_id";
$proto104["m_columns"][] = "accepted_date";
$proto104["m_columns"][] = "downloader_id";
$proto104["m_columns"][] = "download_date";
$proto104["m_columns"][] = "distributor_id";
$proto104["m_columns"][] = "distribute_date";
$proto104["m_columns"][] = "designer_list";
$proto104["m_columns"][] = "qcs_list";
$proto104["m_columns"][] = "finish_date";
$proto104["m_columns"][] = "uploader_id";
$proto104["m_columns"][] = "upload_date";
$proto104["m_columns"][] = "notifer_id";
$proto104["m_columns"][] = "notify_date";
$proto104["m_columns"][] = "rejector_id";
$proto104["m_columns"][] = "reject_date";
$proto104["m_columns"][] = "reject_reason";
$proto104["m_columns"][] = "activity_log";
$proto104["m_columns"][] = "time_remaining";
$obj = new SQLTable($proto104);

$proto103["m_table"] = $obj;
$proto103["m_sql"] = "job";
$proto103["m_alias"] = "";
$proto103["m_srcTableName"] = "Need QC";
$proto105=array();
$proto105["m_sql"] = "";
$proto105["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto105["m_column"]=$obj;
$proto105["m_contained"] = array();
$proto105["m_strCase"] = "";
$proto105["m_havingmode"] = false;
$proto105["m_inBrackets"] = false;
$proto105["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto105);

$proto103["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto103);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto107=array();
						$obj = new SQLField(array(
	"m_strName" => "delivery_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto107["m_column"]=$obj;
$proto107["m_bAsc"] = 1;
$proto107["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto107);

$proto0["m_orderby"][]=$obj;					
												$proto109=array();
						$obj = new SQLField(array(
	"m_strName" => "is_urgent",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto109["m_column"]=$obj;
$proto109["m_bAsc"] = 0;
$proto109["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto109);

$proto0["m_orderby"][]=$obj;					
												$proto111=array();
						$obj = new SQLField(array(
	"m_strName" => "accepted_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto111["m_column"]=$obj;
$proto111["m_bAsc"] = 1;
$proto111["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto111);

$proto0["m_orderby"][]=$obj;					
												$proto113=array();
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Need QC"
));

$proto113["m_column"]=$obj;
$proto113["m_bAsc"] = 1;
$proto113["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto113);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Need QC";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Need_QC = createSqlQuery_Need_QC();


	
																																		
	
$tdataNeed_QC[".sqlquery"] = $queryData_Need_QC;

include_once(getabspath("include/Need_QC_events.php"));
$tableEvents["Need QC"] = new eventclass_Need_QC;
$tdataNeed_QC[".hasEvents"] = true;

?>