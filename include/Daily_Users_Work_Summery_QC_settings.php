<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDaily_Users_Work_Summery_QC = array();	
	$tdataDaily_Users_Work_Summery_QC[".truncateText"] = true;
	$tdataDaily_Users_Work_Summery_QC[".NumberOfChars"] = 256; 
	$tdataDaily_Users_Work_Summery_QC[".ShortName"] = "Daily_Users_Work_Summery_QC";
	$tdataDaily_Users_Work_Summery_QC[".OwnerID"] = "";
	$tdataDaily_Users_Work_Summery_QC[".OriginalTable"] = "users_work_report";

//	field labels
$fieldLabelsDaily_Users_Work_Summery_QC = array();
$fieldToolTipsDaily_Users_Work_Summery_QC = array();
$pageTitlesDaily_Users_Work_Summery_QC = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDaily_Users_Work_Summery_QC["English"] = array();
	$fieldToolTipsDaily_Users_Work_Summery_QC["English"] = array();
	$pageTitlesDaily_Users_Work_Summery_QC["English"] = array();
	$fieldLabelsDaily_Users_Work_Summery_QC["English"]["work_date"] = "Work Date";
	$fieldToolTipsDaily_Users_Work_Summery_QC["English"]["work_date"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC["English"]["user_name"] = "User Name";
	$fieldToolTipsDaily_Users_Work_Summery_QC["English"]["user_name"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC["English"]["team_id"] = "Team Id";
	$fieldToolTipsDaily_Users_Work_Summery_QC["English"]["team_id"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC["English"]["user_group"] = "User Group";
	$fieldToolTipsDaily_Users_Work_Summery_QC["English"]["user_group"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC["English"]["designer_time"] = "Designer Time";
	$fieldToolTipsDaily_Users_Work_Summery_QC["English"]["designer_time"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC["English"]["qc_time"] = "Qc Time";
	$fieldToolTipsDaily_Users_Work_Summery_QC["English"]["qc_time"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC["English"]["comments"] = "Comments";
	$fieldToolTipsDaily_Users_Work_Summery_QC["English"]["comments"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC["English"]["designer_done"] = "Designer Done";
	$fieldToolTipsDaily_Users_Work_Summery_QC["English"]["designer_done"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC["English"]["designer_eta"] = "Designer Eta";
	$fieldToolTipsDaily_Users_Work_Summery_QC["English"]["designer_eta"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC["English"]["QC_done"] = "QC Done";
	$fieldToolTipsDaily_Users_Work_Summery_QC["English"]["QC_done"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC["English"]["qc_eta"] = "Qc Eta";
	$fieldToolTipsDaily_Users_Work_Summery_QC["English"]["qc_eta"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC["English"]["rejected_by_qc"] = "Rejected By Qc";
	$fieldToolTipsDaily_Users_Work_Summery_QC["English"]["rejected_by_qc"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC["English"]["rejected_designer_ETA"] = "Rejected Designer ETA";
	$fieldToolTipsDaily_Users_Work_Summery_QC["English"]["rejected_designer_ETA"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC["English"]["rejected_designer_time"] = "Rejected Designer Time";
	$fieldToolTipsDaily_Users_Work_Summery_QC["English"]["rejected_designer_time"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC["English"]["rejected_customer"] = "Rejected Customer";
	$fieldToolTipsDaily_Users_Work_Summery_QC["English"]["rejected_customer"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC["English"]["rejected_customer_eta"] = "Rejected Customer Eta";
	$fieldToolTipsDaily_Users_Work_Summery_QC["English"]["rejected_customer_eta"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC["English"]["rejected_customer_time"] = "Rejected Customer Time";
	$fieldToolTipsDaily_Users_Work_Summery_QC["English"]["rejected_customer_time"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC["English"]["total_eta"] = "Total Eta";
	$fieldToolTipsDaily_Users_Work_Summery_QC["English"]["total_eta"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC["English"]["performance"] = "Performance";
	$fieldToolTipsDaily_Users_Work_Summery_QC["English"]["performance"] = "";
	if (count($fieldToolTipsDaily_Users_Work_Summery_QC["English"]))
		$tdataDaily_Users_Work_Summery_QC[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDaily_Users_Work_Summery_QC[""] = array();
	$fieldToolTipsDaily_Users_Work_Summery_QC[""] = array();
	$pageTitlesDaily_Users_Work_Summery_QC[""] = array();
	$fieldLabelsDaily_Users_Work_Summery_QC[""]["user_name"] = "User Name";
	$fieldToolTipsDaily_Users_Work_Summery_QC[""]["user_name"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC[""]["team_id"] = "Team Id";
	$fieldToolTipsDaily_Users_Work_Summery_QC[""]["team_id"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC[""]["user_group"] = "User Group";
	$fieldToolTipsDaily_Users_Work_Summery_QC[""]["user_group"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC[""]["designer_time"] = "Designer Time";
	$fieldToolTipsDaily_Users_Work_Summery_QC[""]["designer_time"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC[""]["qc_time"] = "Qc Time";
	$fieldToolTipsDaily_Users_Work_Summery_QC[""]["qc_time"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC[""]["comments"] = "Comments";
	$fieldToolTipsDaily_Users_Work_Summery_QC[""]["comments"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC[""]["designer_done"] = "Designer Done";
	$fieldToolTipsDaily_Users_Work_Summery_QC[""]["designer_done"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC[""]["designer_eta"] = "Designer Eta";
	$fieldToolTipsDaily_Users_Work_Summery_QC[""]["designer_eta"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC[""]["QC_done"] = "QC Done";
	$fieldToolTipsDaily_Users_Work_Summery_QC[""]["QC_done"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC[""]["qc_eta"] = "Qc Eta";
	$fieldToolTipsDaily_Users_Work_Summery_QC[""]["qc_eta"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC[""]["rejected_by_qc"] = "Rejected By Qc";
	$fieldToolTipsDaily_Users_Work_Summery_QC[""]["rejected_by_qc"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC[""]["rejected_designer_ETA"] = "Rejected Designer ETA";
	$fieldToolTipsDaily_Users_Work_Summery_QC[""]["rejected_designer_ETA"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC[""]["rejected_designer_time"] = "Rejected Designer Time";
	$fieldToolTipsDaily_Users_Work_Summery_QC[""]["rejected_designer_time"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC[""]["rejected_customer"] = "Rejected Customer";
	$fieldToolTipsDaily_Users_Work_Summery_QC[""]["rejected_customer"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC[""]["rejected_customer_eta"] = "Rejected Customer Eta";
	$fieldToolTipsDaily_Users_Work_Summery_QC[""]["rejected_customer_eta"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC[""]["rejected_customer_time"] = "Rejected Customer Time";
	$fieldToolTipsDaily_Users_Work_Summery_QC[""]["rejected_customer_time"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC[""]["total_eta"] = "Total Eta";
	$fieldToolTipsDaily_Users_Work_Summery_QC[""]["total_eta"] = "";
	$fieldLabelsDaily_Users_Work_Summery_QC[""]["performance"] = "Performance";
	$fieldToolTipsDaily_Users_Work_Summery_QC[""]["performance"] = "";
	if (count($fieldToolTipsDaily_Users_Work_Summery_QC[""]))
		$tdataDaily_Users_Work_Summery_QC[".isUseToolTips"] = true;
}
	
	
	$tdataDaily_Users_Work_Summery_QC[".NCSearch"] = true;



$tdataDaily_Users_Work_Summery_QC[".shortTableName"] = "Daily_Users_Work_Summery_QC";
$tdataDaily_Users_Work_Summery_QC[".nSecOptions"] = 0;
$tdataDaily_Users_Work_Summery_QC[".recsPerRowList"] = 1;
$tdataDaily_Users_Work_Summery_QC[".recsPerRowPrint"] = 1;
$tdataDaily_Users_Work_Summery_QC[".mainTableOwnerID"] = "";
$tdataDaily_Users_Work_Summery_QC[".moveNext"] = 1;
$tdataDaily_Users_Work_Summery_QC[".entityType"] = 2;

$tdataDaily_Users_Work_Summery_QC[".strOriginalTableName"] = "users_work_report";




$tdataDaily_Users_Work_Summery_QC[".showAddInPopup"] = false;

$tdataDaily_Users_Work_Summery_QC[".showEditInPopup"] = false;

$tdataDaily_Users_Work_Summery_QC[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDaily_Users_Work_Summery_QC[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDaily_Users_Work_Summery_QC[".fieldsForRegister"] = array();

$tdataDaily_Users_Work_Summery_QC[".listAjax"] = false;

	$tdataDaily_Users_Work_Summery_QC[".audit"] = false;

	$tdataDaily_Users_Work_Summery_QC[".locking"] = false;


$tdataDaily_Users_Work_Summery_QC[".add"] = true;
$tdataDaily_Users_Work_Summery_QC[".afterAddAction"] = 0;
$tdataDaily_Users_Work_Summery_QC[".closePopupAfterAdd"] = 1;
$tdataDaily_Users_Work_Summery_QC[".afterAddActionDetTable"] = "";

$tdataDaily_Users_Work_Summery_QC[".list"] = true;

$tdataDaily_Users_Work_Summery_QC[".inlineAdd"] = true;


$tdataDaily_Users_Work_Summery_QC[".exportTo"] = true;

$tdataDaily_Users_Work_Summery_QC[".printFriendly"] = true;


$tdataDaily_Users_Work_Summery_QC[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDaily_Users_Work_Summery_QC[".searchSaving"] = false;
//

$tdataDaily_Users_Work_Summery_QC[".showSearchPanel"] = true;
		$tdataDaily_Users_Work_Summery_QC[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDaily_Users_Work_Summery_QC[".isUseAjaxSuggest"] = false;
else 
	$tdataDaily_Users_Work_Summery_QC[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDaily_Users_Work_Summery_QC[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDaily_Users_Work_Summery_QC[".isUseTimeForSearch"] = false;





$tdataDaily_Users_Work_Summery_QC[".allSearchFields"] = array();
$tdataDaily_Users_Work_Summery_QC[".filterFields"] = array();
$tdataDaily_Users_Work_Summery_QC[".requiredSearchFields"] = array();

$tdataDaily_Users_Work_Summery_QC[".allSearchFields"][] = "work_date";
	$tdataDaily_Users_Work_Summery_QC[".allSearchFields"][] = "user_name";
	$tdataDaily_Users_Work_Summery_QC[".allSearchFields"][] = "team_id";
	$tdataDaily_Users_Work_Summery_QC[".allSearchFields"][] = "QC_done";
	$tdataDaily_Users_Work_Summery_QC[".allSearchFields"][] = "qc_eta";
	$tdataDaily_Users_Work_Summery_QC[".allSearchFields"][] = "qc_time";
	$tdataDaily_Users_Work_Summery_QC[".allSearchFields"][] = "rejected_customer";
	$tdataDaily_Users_Work_Summery_QC[".allSearchFields"][] = "rejected_customer_eta";
	$tdataDaily_Users_Work_Summery_QC[".allSearchFields"][] = "rejected_customer_time";
	$tdataDaily_Users_Work_Summery_QC[".allSearchFields"][] = "total_eta";
	$tdataDaily_Users_Work_Summery_QC[".allSearchFields"][] = "performance";
	$tdataDaily_Users_Work_Summery_QC[".allSearchFields"][] = "comments";
	

$tdataDaily_Users_Work_Summery_QC[".googleLikeFields"] = array();
$tdataDaily_Users_Work_Summery_QC[".googleLikeFields"][] = "work_date";
$tdataDaily_Users_Work_Summery_QC[".googleLikeFields"][] = "user_name";
$tdataDaily_Users_Work_Summery_QC[".googleLikeFields"][] = "team_id";
$tdataDaily_Users_Work_Summery_QC[".googleLikeFields"][] = "user_group";
$tdataDaily_Users_Work_Summery_QC[".googleLikeFields"][] = "designer_done";
$tdataDaily_Users_Work_Summery_QC[".googleLikeFields"][] = "designer_eta";
$tdataDaily_Users_Work_Summery_QC[".googleLikeFields"][] = "designer_time";
$tdataDaily_Users_Work_Summery_QC[".googleLikeFields"][] = "QC_done";
$tdataDaily_Users_Work_Summery_QC[".googleLikeFields"][] = "qc_eta";
$tdataDaily_Users_Work_Summery_QC[".googleLikeFields"][] = "qc_time";
$tdataDaily_Users_Work_Summery_QC[".googleLikeFields"][] = "rejected_by_qc";
$tdataDaily_Users_Work_Summery_QC[".googleLikeFields"][] = "rejected_designer_ETA";
$tdataDaily_Users_Work_Summery_QC[".googleLikeFields"][] = "rejected_designer_time";
$tdataDaily_Users_Work_Summery_QC[".googleLikeFields"][] = "rejected_customer";
$tdataDaily_Users_Work_Summery_QC[".googleLikeFields"][] = "rejected_customer_eta";
$tdataDaily_Users_Work_Summery_QC[".googleLikeFields"][] = "rejected_customer_time";
$tdataDaily_Users_Work_Summery_QC[".googleLikeFields"][] = "total_eta";
$tdataDaily_Users_Work_Summery_QC[".googleLikeFields"][] = "performance";
$tdataDaily_Users_Work_Summery_QC[".googleLikeFields"][] = "comments";


$tdataDaily_Users_Work_Summery_QC[".advSearchFields"] = array();
$tdataDaily_Users_Work_Summery_QC[".advSearchFields"][] = "work_date";
$tdataDaily_Users_Work_Summery_QC[".advSearchFields"][] = "user_name";
$tdataDaily_Users_Work_Summery_QC[".advSearchFields"][] = "team_id";
$tdataDaily_Users_Work_Summery_QC[".advSearchFields"][] = "user_group";
$tdataDaily_Users_Work_Summery_QC[".advSearchFields"][] = "designer_done";
$tdataDaily_Users_Work_Summery_QC[".advSearchFields"][] = "designer_eta";
$tdataDaily_Users_Work_Summery_QC[".advSearchFields"][] = "designer_time";
$tdataDaily_Users_Work_Summery_QC[".advSearchFields"][] = "QC_done";
$tdataDaily_Users_Work_Summery_QC[".advSearchFields"][] = "qc_eta";
$tdataDaily_Users_Work_Summery_QC[".advSearchFields"][] = "qc_time";
$tdataDaily_Users_Work_Summery_QC[".advSearchFields"][] = "rejected_by_qc";
$tdataDaily_Users_Work_Summery_QC[".advSearchFields"][] = "rejected_designer_ETA";
$tdataDaily_Users_Work_Summery_QC[".advSearchFields"][] = "rejected_designer_time";
$tdataDaily_Users_Work_Summery_QC[".advSearchFields"][] = "rejected_customer";
$tdataDaily_Users_Work_Summery_QC[".advSearchFields"][] = "rejected_customer_eta";
$tdataDaily_Users_Work_Summery_QC[".advSearchFields"][] = "rejected_customer_time";
$tdataDaily_Users_Work_Summery_QC[".advSearchFields"][] = "total_eta";
$tdataDaily_Users_Work_Summery_QC[".advSearchFields"][] = "performance";
$tdataDaily_Users_Work_Summery_QC[".advSearchFields"][] = "comments";

$tdataDaily_Users_Work_Summery_QC[".tableType"] = "report";

$tdataDaily_Users_Work_Summery_QC[".printerPageOrientation"] = 0;
$tdataDaily_Users_Work_Summery_QC[".nPrinterPageScale"] = 100;

$tdataDaily_Users_Work_Summery_QC[".nPrinterSplitRecords"] = 40;

$tdataDaily_Users_Work_Summery_QC[".nPrinterPDFSplitRecords"] = 40;



$tdataDaily_Users_Work_Summery_QC[".geocodingEnabled"] = false;

//report settings
$tdataDaily_Users_Work_Summery_QC[".printReportLayout"] = 3;	

$tdataDaily_Users_Work_Summery_QC[".reportPrintPartitionType"] = 0;	
$tdataDaily_Users_Work_Summery_QC[".reportPrintGroupsPerPage"] = 3;	
	$tdataDaily_Users_Work_Summery_QC[".lowGroup"] = 1;



$tdataDaily_Users_Work_Summery_QC[".reportGroupFields"] = true;
$tdataDaily_Users_Work_Summery_QC[".pageSize"] = 1;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "work_date";
	$rgroupField['groupInterval'] = 5;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataDaily_Users_Work_Summery_QC[".reportGroupFieldsData"] = $reportGroupFields;


$tdataDaily_Users_Work_Summery_QC[".isExistTotalFields"] = true;


$tdataDaily_Users_Work_Summery_QC[".reportPageSummary"] = true;


$tdataDaily_Users_Work_Summery_QC[".repShowDet"] = true;

$tdataDaily_Users_Work_Summery_QC[".reportLayout"] = 3;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDaily_Users_Work_Summery_QC[".strOrderBy"] = $tstrOrderBy;

$tdataDaily_Users_Work_Summery_QC[".orderindexes"] = array();
$tdataDaily_Users_Work_Summery_QC[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "work_date");

$tdataDaily_Users_Work_Summery_QC[".sqlHead"] = "SELECT work_date,  user_name,  team_id,  user_group,  SUM(IFNULL(total_images_counted_designer, 0)) AS designer_done,  SEC_TO_TIME(SUM(IFNULL(estimated_designer_time,0))) AS designer_eta,  SEC_TO_TIME(SUM(IFNULL(designer_time,0))) AS designer_time,  SUM(IFNULL(total_images_counted_qc, 0)) AS QC_done,  SEC_TO_TIME(SUM(IFNULL(estimated_qc_time,0))) AS qc_eta,  SEC_TO_TIME(SUM(IFNULL(qc_time,0))) AS qc_time,  SUM(IFNULL(total_rejected_by_qc, 0)) AS rejected_by_qc,  SEC_TO_TIME(SUM(IFNULL(total_rejected_by_qc_eta,0))) AS rejected_designer_ETA,  SEC_TO_TIME(SUM(IFNULL(total_rejected_by_qc_taken,0))) AS rejected_designer_time,  SUM(IFNULL(total_rejected_by_customer, 0)) AS rejected_customer,  SEC_TO_TIME(SUM(IFNULL(total_rejected_by_customer_eta,0))) AS rejected_customer_eta,  SEC_TO_TIME(SUM(IFNULL(total_rejected_by_customer_taken,0))) AS rejected_customer_time,  SEC_TO_TIME((SUM(IFNULL(estimated_designer_time,0))-SUM(IFNULL(total_rejected_by_qc_eta,0)))+(SUM(IFNULL(estimated_qc_time,0))-SUM(IFNULL(total_rejected_by_customer_eta,0)))) AS total_eta,  ((SUM(IFNULL(estimated_designer_time,0))-SUM(IFNULL(total_rejected_by_qc,0)))+(SUM(IFNULL(estimated_qc_time,0))-SUM(IFNULL(total_rejected_by_customer_eta,0))))/390 AS performance,  comments";
$tdataDaily_Users_Work_Summery_QC[".sqlFrom"] = "FROM users_work_report";
$tdataDaily_Users_Work_Summery_QC[".sqlWhereExpr"] = "(user_group =8)";
$tdataDaily_Users_Work_Summery_QC[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDaily_Users_Work_Summery_QC[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDaily_Users_Work_Summery_QC[".arrGroupsPerPage"] = $arrGPP;

$tdataDaily_Users_Work_Summery_QC[".highlightSearchResults"] = true;

$tableKeysDaily_Users_Work_Summery_QC = array();
$tdataDaily_Users_Work_Summery_QC[".Keys"] = $tableKeysDaily_Users_Work_Summery_QC;

$tdataDaily_Users_Work_Summery_QC[".listFields"] = array();
$tdataDaily_Users_Work_Summery_QC[".listFields"][] = "work_date";
$tdataDaily_Users_Work_Summery_QC[".listFields"][] = "user_name";
$tdataDaily_Users_Work_Summery_QC[".listFields"][] = "team_id";
$tdataDaily_Users_Work_Summery_QC[".listFields"][] = "user_group";
$tdataDaily_Users_Work_Summery_QC[".listFields"][] = "designer_done";
$tdataDaily_Users_Work_Summery_QC[".listFields"][] = "designer_eta";
$tdataDaily_Users_Work_Summery_QC[".listFields"][] = "designer_time";
$tdataDaily_Users_Work_Summery_QC[".listFields"][] = "QC_done";
$tdataDaily_Users_Work_Summery_QC[".listFields"][] = "qc_eta";
$tdataDaily_Users_Work_Summery_QC[".listFields"][] = "qc_time";
$tdataDaily_Users_Work_Summery_QC[".listFields"][] = "rejected_by_qc";
$tdataDaily_Users_Work_Summery_QC[".listFields"][] = "rejected_designer_ETA";
$tdataDaily_Users_Work_Summery_QC[".listFields"][] = "rejected_designer_time";
$tdataDaily_Users_Work_Summery_QC[".listFields"][] = "rejected_customer";
$tdataDaily_Users_Work_Summery_QC[".listFields"][] = "rejected_customer_eta";
$tdataDaily_Users_Work_Summery_QC[".listFields"][] = "rejected_customer_time";
$tdataDaily_Users_Work_Summery_QC[".listFields"][] = "total_eta";
$tdataDaily_Users_Work_Summery_QC[".listFields"][] = "performance";
$tdataDaily_Users_Work_Summery_QC[".listFields"][] = "comments";

$tdataDaily_Users_Work_Summery_QC[".hideMobileList"] = array();


$tdataDaily_Users_Work_Summery_QC[".viewFields"] = array();
$tdataDaily_Users_Work_Summery_QC[".viewFields"][] = "work_date";
$tdataDaily_Users_Work_Summery_QC[".viewFields"][] = "user_name";
$tdataDaily_Users_Work_Summery_QC[".viewFields"][] = "team_id";
$tdataDaily_Users_Work_Summery_QC[".viewFields"][] = "user_group";
$tdataDaily_Users_Work_Summery_QC[".viewFields"][] = "designer_done";
$tdataDaily_Users_Work_Summery_QC[".viewFields"][] = "designer_eta";
$tdataDaily_Users_Work_Summery_QC[".viewFields"][] = "designer_time";
$tdataDaily_Users_Work_Summery_QC[".viewFields"][] = "QC_done";
$tdataDaily_Users_Work_Summery_QC[".viewFields"][] = "qc_eta";
$tdataDaily_Users_Work_Summery_QC[".viewFields"][] = "qc_time";
$tdataDaily_Users_Work_Summery_QC[".viewFields"][] = "rejected_by_qc";
$tdataDaily_Users_Work_Summery_QC[".viewFields"][] = "rejected_designer_ETA";
$tdataDaily_Users_Work_Summery_QC[".viewFields"][] = "rejected_designer_time";
$tdataDaily_Users_Work_Summery_QC[".viewFields"][] = "rejected_customer";
$tdataDaily_Users_Work_Summery_QC[".viewFields"][] = "rejected_customer_eta";
$tdataDaily_Users_Work_Summery_QC[".viewFields"][] = "rejected_customer_time";
$tdataDaily_Users_Work_Summery_QC[".viewFields"][] = "total_eta";
$tdataDaily_Users_Work_Summery_QC[".viewFields"][] = "performance";
$tdataDaily_Users_Work_Summery_QC[".viewFields"][] = "comments";

$tdataDaily_Users_Work_Summery_QC[".addFields"] = array();
$tdataDaily_Users_Work_Summery_QC[".addFields"][] = "user_name";
$tdataDaily_Users_Work_Summery_QC[".addFields"][] = "team_id";
$tdataDaily_Users_Work_Summery_QC[".addFields"][] = "user_group";
$tdataDaily_Users_Work_Summery_QC[".addFields"][] = "designer_time";
$tdataDaily_Users_Work_Summery_QC[".addFields"][] = "qc_time";
$tdataDaily_Users_Work_Summery_QC[".addFields"][] = "comments";

$tdataDaily_Users_Work_Summery_QC[".masterListFields"] = array();
$tdataDaily_Users_Work_Summery_QC[".masterListFields"][] = "work_date";
$tdataDaily_Users_Work_Summery_QC[".masterListFields"][] = "user_name";
$tdataDaily_Users_Work_Summery_QC[".masterListFields"][] = "team_id";
$tdataDaily_Users_Work_Summery_QC[".masterListFields"][] = "user_group";
$tdataDaily_Users_Work_Summery_QC[".masterListFields"][] = "designer_done";
$tdataDaily_Users_Work_Summery_QC[".masterListFields"][] = "designer_eta";
$tdataDaily_Users_Work_Summery_QC[".masterListFields"][] = "designer_time";
$tdataDaily_Users_Work_Summery_QC[".masterListFields"][] = "QC_done";
$tdataDaily_Users_Work_Summery_QC[".masterListFields"][] = "qc_eta";
$tdataDaily_Users_Work_Summery_QC[".masterListFields"][] = "qc_time";
$tdataDaily_Users_Work_Summery_QC[".masterListFields"][] = "rejected_by_qc";
$tdataDaily_Users_Work_Summery_QC[".masterListFields"][] = "rejected_designer_ETA";
$tdataDaily_Users_Work_Summery_QC[".masterListFields"][] = "rejected_designer_time";
$tdataDaily_Users_Work_Summery_QC[".masterListFields"][] = "rejected_customer";
$tdataDaily_Users_Work_Summery_QC[".masterListFields"][] = "rejected_customer_eta";
$tdataDaily_Users_Work_Summery_QC[".masterListFields"][] = "rejected_customer_time";
$tdataDaily_Users_Work_Summery_QC[".masterListFields"][] = "total_eta";
$tdataDaily_Users_Work_Summery_QC[".masterListFields"][] = "performance";
$tdataDaily_Users_Work_Summery_QC[".masterListFields"][] = "comments";

$tdataDaily_Users_Work_Summery_QC[".inlineAddFields"] = array();
$tdataDaily_Users_Work_Summery_QC[".inlineAddFields"][] = "user_name";
$tdataDaily_Users_Work_Summery_QC[".inlineAddFields"][] = "team_id";
$tdataDaily_Users_Work_Summery_QC[".inlineAddFields"][] = "user_group";
$tdataDaily_Users_Work_Summery_QC[".inlineAddFields"][] = "designer_time";
$tdataDaily_Users_Work_Summery_QC[".inlineAddFields"][] = "qc_time";
$tdataDaily_Users_Work_Summery_QC[".inlineAddFields"][] = "comments";

$tdataDaily_Users_Work_Summery_QC[".editFields"] = array();
$tdataDaily_Users_Work_Summery_QC[".editFields"][] = "user_name";
$tdataDaily_Users_Work_Summery_QC[".editFields"][] = "team_id";
$tdataDaily_Users_Work_Summery_QC[".editFields"][] = "user_group";
$tdataDaily_Users_Work_Summery_QC[".editFields"][] = "designer_time";
$tdataDaily_Users_Work_Summery_QC[".editFields"][] = "qc_time";
$tdataDaily_Users_Work_Summery_QC[".editFields"][] = "comments";

$tdataDaily_Users_Work_Summery_QC[".inlineEditFields"] = array();
$tdataDaily_Users_Work_Summery_QC[".inlineEditFields"][] = "user_name";
$tdataDaily_Users_Work_Summery_QC[".inlineEditFields"][] = "team_id";
$tdataDaily_Users_Work_Summery_QC[".inlineEditFields"][] = "user_group";
$tdataDaily_Users_Work_Summery_QC[".inlineEditFields"][] = "designer_time";
$tdataDaily_Users_Work_Summery_QC[".inlineEditFields"][] = "qc_time";
$tdataDaily_Users_Work_Summery_QC[".inlineEditFields"][] = "comments";

$tdataDaily_Users_Work_Summery_QC[".exportFields"] = array();
$tdataDaily_Users_Work_Summery_QC[".exportFields"][] = "work_date";
$tdataDaily_Users_Work_Summery_QC[".exportFields"][] = "user_name";
$tdataDaily_Users_Work_Summery_QC[".exportFields"][] = "team_id";
$tdataDaily_Users_Work_Summery_QC[".exportFields"][] = "user_group";
$tdataDaily_Users_Work_Summery_QC[".exportFields"][] = "designer_done";
$tdataDaily_Users_Work_Summery_QC[".exportFields"][] = "designer_eta";
$tdataDaily_Users_Work_Summery_QC[".exportFields"][] = "designer_time";
$tdataDaily_Users_Work_Summery_QC[".exportFields"][] = "QC_done";
$tdataDaily_Users_Work_Summery_QC[".exportFields"][] = "qc_eta";
$tdataDaily_Users_Work_Summery_QC[".exportFields"][] = "qc_time";
$tdataDaily_Users_Work_Summery_QC[".exportFields"][] = "rejected_by_qc";
$tdataDaily_Users_Work_Summery_QC[".exportFields"][] = "rejected_designer_ETA";
$tdataDaily_Users_Work_Summery_QC[".exportFields"][] = "rejected_designer_time";
$tdataDaily_Users_Work_Summery_QC[".exportFields"][] = "rejected_customer";
$tdataDaily_Users_Work_Summery_QC[".exportFields"][] = "rejected_customer_eta";
$tdataDaily_Users_Work_Summery_QC[".exportFields"][] = "rejected_customer_time";
$tdataDaily_Users_Work_Summery_QC[".exportFields"][] = "total_eta";
$tdataDaily_Users_Work_Summery_QC[".exportFields"][] = "performance";
$tdataDaily_Users_Work_Summery_QC[".exportFields"][] = "comments";

$tdataDaily_Users_Work_Summery_QC[".importFields"] = array();
$tdataDaily_Users_Work_Summery_QC[".importFields"][] = "work_date";
$tdataDaily_Users_Work_Summery_QC[".importFields"][] = "user_name";
$tdataDaily_Users_Work_Summery_QC[".importFields"][] = "team_id";
$tdataDaily_Users_Work_Summery_QC[".importFields"][] = "user_group";
$tdataDaily_Users_Work_Summery_QC[".importFields"][] = "designer_done";
$tdataDaily_Users_Work_Summery_QC[".importFields"][] = "designer_eta";
$tdataDaily_Users_Work_Summery_QC[".importFields"][] = "designer_time";
$tdataDaily_Users_Work_Summery_QC[".importFields"][] = "QC_done";
$tdataDaily_Users_Work_Summery_QC[".importFields"][] = "qc_eta";
$tdataDaily_Users_Work_Summery_QC[".importFields"][] = "qc_time";
$tdataDaily_Users_Work_Summery_QC[".importFields"][] = "rejected_by_qc";
$tdataDaily_Users_Work_Summery_QC[".importFields"][] = "rejected_designer_ETA";
$tdataDaily_Users_Work_Summery_QC[".importFields"][] = "rejected_designer_time";
$tdataDaily_Users_Work_Summery_QC[".importFields"][] = "rejected_customer";
$tdataDaily_Users_Work_Summery_QC[".importFields"][] = "rejected_customer_eta";
$tdataDaily_Users_Work_Summery_QC[".importFields"][] = "rejected_customer_time";
$tdataDaily_Users_Work_Summery_QC[".importFields"][] = "total_eta";
$tdataDaily_Users_Work_Summery_QC[".importFields"][] = "performance";
$tdataDaily_Users_Work_Summery_QC[".importFields"][] = "comments";

$tdataDaily_Users_Work_Summery_QC[".printFields"] = array();
$tdataDaily_Users_Work_Summery_QC[".printFields"][] = "work_date";
$tdataDaily_Users_Work_Summery_QC[".printFields"][] = "user_name";
$tdataDaily_Users_Work_Summery_QC[".printFields"][] = "team_id";
$tdataDaily_Users_Work_Summery_QC[".printFields"][] = "user_group";
$tdataDaily_Users_Work_Summery_QC[".printFields"][] = "designer_done";
$tdataDaily_Users_Work_Summery_QC[".printFields"][] = "designer_eta";
$tdataDaily_Users_Work_Summery_QC[".printFields"][] = "designer_time";
$tdataDaily_Users_Work_Summery_QC[".printFields"][] = "QC_done";
$tdataDaily_Users_Work_Summery_QC[".printFields"][] = "qc_eta";
$tdataDaily_Users_Work_Summery_QC[".printFields"][] = "qc_time";
$tdataDaily_Users_Work_Summery_QC[".printFields"][] = "rejected_by_qc";
$tdataDaily_Users_Work_Summery_QC[".printFields"][] = "rejected_designer_ETA";
$tdataDaily_Users_Work_Summery_QC[".printFields"][] = "rejected_designer_time";
$tdataDaily_Users_Work_Summery_QC[".printFields"][] = "rejected_customer";
$tdataDaily_Users_Work_Summery_QC[".printFields"][] = "rejected_customer_eta";
$tdataDaily_Users_Work_Summery_QC[".printFields"][] = "rejected_customer_time";
$tdataDaily_Users_Work_Summery_QC[".printFields"][] = "total_eta";
$tdataDaily_Users_Work_Summery_QC[".printFields"][] = "performance";
$tdataDaily_Users_Work_Summery_QC[".printFields"][] = "comments";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Daily_Users_Work_Summery_QC","work_date"); 
	$fdata["FieldType"] = 7;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "work_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "work_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDaily_Users_Work_Summery_QC["work_date"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Daily_Users_Work_Summery_QC","user_name"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "user_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_name";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDaily_Users_Work_Summery_QC["user_name"] = $fdata;
//	team_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "team_id";
	$fdata["GoodName"] = "team_id";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Daily_Users_Work_Summery_QC","team_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "team_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "team_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "team";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "team_name";
	
		
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDaily_Users_Work_Summery_QC["team_id"] = $fdata;
//	user_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user_group";
	$fdata["GoodName"] = "user_group";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Daily_Users_Work_Summery_QC","user_group"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "user_group"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_group";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "group";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "group_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "groupname_display";
	
		
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataDaily_Users_Work_Summery_QC["user_group"] = $fdata;
//	designer_done
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "designer_done";
	$fdata["GoodName"] = "designer_done";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Users_Work_Summery_QC","designer_done"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_done"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(IFNULL(total_images_counted_designer, 0))";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataDaily_Users_Work_Summery_QC["designer_done"] = $fdata;
//	designer_eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "designer_eta";
	$fdata["GoodName"] = "designer_eta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Users_Work_Summery_QC","designer_eta"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_eta"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(IFNULL(estimated_designer_time,0)))";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataDaily_Users_Work_Summery_QC["designer_eta"] = $fdata;
//	designer_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "designer_time";
	$fdata["GoodName"] = "designer_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Users_Work_Summery_QC","designer_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(IFNULL(designer_time,0)))";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["rprint"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["rprint"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["rprint"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	

	

	
	$tdataDaily_Users_Work_Summery_QC["designer_time"] = $fdata;
//	QC_done
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "QC_done";
	$fdata["GoodName"] = "QC_done";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Users_Work_Summery_QC","QC_done"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "QC_done"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(IFNULL(total_images_counted_qc, 0))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDaily_Users_Work_Summery_QC["QC_done"] = $fdata;
//	qc_eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "qc_eta";
	$fdata["GoodName"] = "qc_eta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Users_Work_Summery_QC","qc_eta"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qc_eta"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(IFNULL(estimated_qc_time,0)))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDaily_Users_Work_Summery_QC["qc_eta"] = $fdata;
//	qc_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "qc_time";
	$fdata["GoodName"] = "qc_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Users_Work_Summery_QC","qc_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qc_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(IFNULL(qc_time,0)))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=30";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDaily_Users_Work_Summery_QC["qc_time"] = $fdata;
//	rejected_by_qc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "rejected_by_qc";
	$fdata["GoodName"] = "rejected_by_qc";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Users_Work_Summery_QC","rejected_by_qc"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rejected_by_qc"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(IFNULL(total_rejected_by_qc, 0))";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataDaily_Users_Work_Summery_QC["rejected_by_qc"] = $fdata;
//	rejected_designer_ETA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "rejected_designer_ETA";
	$fdata["GoodName"] = "rejected_designer_ETA";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Users_Work_Summery_QC","rejected_designer_ETA"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rejected_designer_ETA"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(IFNULL(total_rejected_by_qc_eta,0)))";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataDaily_Users_Work_Summery_QC["rejected_designer_ETA"] = $fdata;
//	rejected_designer_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "rejected_designer_time";
	$fdata["GoodName"] = "rejected_designer_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Users_Work_Summery_QC","rejected_designer_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rejected_designer_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(IFNULL(total_rejected_by_qc_taken,0)))";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataDaily_Users_Work_Summery_QC["rejected_designer_time"] = $fdata;
//	rejected_customer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "rejected_customer";
	$fdata["GoodName"] = "rejected_customer";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Users_Work_Summery_QC","rejected_customer"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rejected_customer"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(IFNULL(total_rejected_by_customer, 0))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDaily_Users_Work_Summery_QC["rejected_customer"] = $fdata;
//	rejected_customer_eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "rejected_customer_eta";
	$fdata["GoodName"] = "rejected_customer_eta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Users_Work_Summery_QC","rejected_customer_eta"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rejected_customer_eta"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(IFNULL(total_rejected_by_customer_eta,0)))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDaily_Users_Work_Summery_QC["rejected_customer_eta"] = $fdata;
//	rejected_customer_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "rejected_customer_time";
	$fdata["GoodName"] = "rejected_customer_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Users_Work_Summery_QC","rejected_customer_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rejected_customer_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(IFNULL(total_rejected_by_customer_taken,0)))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDaily_Users_Work_Summery_QC["rejected_customer_time"] = $fdata;
//	total_eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "total_eta";
	$fdata["GoodName"] = "total_eta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Users_Work_Summery_QC","total_eta"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_eta"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME((SUM(IFNULL(estimated_designer_time,0))-SUM(IFNULL(total_rejected_by_qc_eta,0)))+(SUM(IFNULL(estimated_qc_time,0))-SUM(IFNULL(total_rejected_by_customer_eta,0))))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDaily_Users_Work_Summery_QC["total_eta"] = $fdata;
//	performance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "performance";
	$fdata["GoodName"] = "performance";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Users_Work_Summery_QC","performance"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "performance"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "((SUM(IFNULL(estimated_designer_time,0))-SUM(IFNULL(total_rejected_by_qc,0)))+(SUM(IFNULL(estimated_qc_time,0))-SUM(IFNULL(total_rejected_by_customer_eta,0))))/390";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDaily_Users_Work_Summery_QC["performance"] = $fdata;
//	comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "comments";
	$fdata["GoodName"] = "comments";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Daily_Users_Work_Summery_QC","comments"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataDaily_Users_Work_Summery_QC["comments"] = $fdata;

	
$tables_data["Daily Users Work Summery QC"]=&$tdataDaily_Users_Work_Summery_QC;
$field_labels["Daily_Users_Work_Summery_QC"] = &$fieldLabelsDaily_Users_Work_Summery_QC;
$fieldToolTips["Daily Users Work Summery QC"] = &$fieldToolTipsDaily_Users_Work_Summery_QC;
$page_titles["Daily_Users_Work_Summery_QC"] = &$pageTitlesDaily_Users_Work_Summery_QC;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Daily Users Work Summery QC"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Daily Users Work Summery QC"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Daily_Users_Work_Summery_QC()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_date,  user_name,  team_id,  user_group,  SUM(IFNULL(total_images_counted_designer, 0)) AS designer_done,  SEC_TO_TIME(SUM(IFNULL(estimated_designer_time,0))) AS designer_eta,  SEC_TO_TIME(SUM(IFNULL(designer_time,0))) AS designer_time,  SUM(IFNULL(total_images_counted_qc, 0)) AS QC_done,  SEC_TO_TIME(SUM(IFNULL(estimated_qc_time,0))) AS qc_eta,  SEC_TO_TIME(SUM(IFNULL(qc_time,0))) AS qc_time,  SUM(IFNULL(total_rejected_by_qc, 0)) AS rejected_by_qc,  SEC_TO_TIME(SUM(IFNULL(total_rejected_by_qc_eta,0))) AS rejected_designer_ETA,  SEC_TO_TIME(SUM(IFNULL(total_rejected_by_qc_taken,0))) AS rejected_designer_time,  SUM(IFNULL(total_rejected_by_customer, 0)) AS rejected_customer,  SEC_TO_TIME(SUM(IFNULL(total_rejected_by_customer_eta,0))) AS rejected_customer_eta,  SEC_TO_TIME(SUM(IFNULL(total_rejected_by_customer_taken,0))) AS rejected_customer_time,  SEC_TO_TIME((SUM(IFNULL(estimated_designer_time,0))-SUM(IFNULL(total_rejected_by_qc_eta,0)))+(SUM(IFNULL(estimated_qc_time,0))-SUM(IFNULL(total_rejected_by_customer_eta,0)))) AS total_eta,  ((SUM(IFNULL(estimated_designer_time,0))-SUM(IFNULL(total_rejected_by_qc,0)))+(SUM(IFNULL(estimated_qc_time,0))-SUM(IFNULL(total_rejected_by_customer_eta,0))))/390 AS performance,  comments";
$proto0["m_strFrom"] = "FROM users_work_report";
$proto0["m_strWhere"] = "(user_group =8)";
$proto0["m_strOrderBy"] = "ORDER BY work_date DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "user_group =8";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "user_group",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Users Work Summery QC"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=8";
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
			$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Users Work Summery QC"
));

$proto5["m_sql"] = "work_date";
$proto5["m_srcTableName"] = "Daily Users Work Summery QC";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Users Work Summery QC"
));

$proto7["m_sql"] = "user_name";
$proto7["m_srcTableName"] = "Daily Users Work Summery QC";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Users Work Summery QC"
));

$proto9["m_sql"] = "team_id";
$proto9["m_srcTableName"] = "Daily Users Work Summery QC";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "user_group",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Users Work Summery QC"
));

$proto11["m_sql"] = "user_group";
$proto11["m_srcTableName"] = "Daily Users Work Summery QC";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_SUM";
$proto14["m_arguments"] = array();
						$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "total_images_counted_designer"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto15);

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "SUM(IFNULL(total_images_counted_designer, 0))";
$proto13["m_srcTableName"] = "Daily Users Work Summery QC";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "designer_done";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_CUSTOM";
$proto19["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(IFNULL(estimated_designer_time,0))"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "SEC_TO_TIME(SUM(IFNULL(estimated_designer_time,0)))";
$proto18["m_srcTableName"] = "Daily Users Work Summery QC";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "designer_eta";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_CUSTOM";
$proto22["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(IFNULL(designer_time,0))"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "SEC_TO_TIME(SUM(IFNULL(designer_time,0)))";
$proto21["m_srcTableName"] = "Daily Users Work Summery QC";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "designer_time";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$proto25=array();
$proto25["m_functiontype"] = "SQLF_SUM";
$proto25["m_arguments"] = array();
						$proto26=array();
$proto26["m_functiontype"] = "SQLF_CUSTOM";
$proto26["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "total_images_counted_qc"
));

$proto26["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto26);

$proto25["m_arguments"][]=$obj;
$proto25["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto25);

$proto24["m_sql"] = "SUM(IFNULL(total_images_counted_qc, 0))";
$proto24["m_srcTableName"] = "Daily Users Work Summery QC";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "QC_done";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$proto30=array();
$proto30["m_functiontype"] = "SQLF_CUSTOM";
$proto30["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(IFNULL(estimated_qc_time,0))"
));

$proto30["m_arguments"][]=$obj;
$proto30["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto30);

$proto29["m_sql"] = "SEC_TO_TIME(SUM(IFNULL(estimated_qc_time,0)))";
$proto29["m_srcTableName"] = "Daily Users Work Summery QC";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "qc_eta";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$proto33=array();
$proto33["m_functiontype"] = "SQLF_CUSTOM";
$proto33["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(IFNULL(qc_time,0))"
));

$proto33["m_arguments"][]=$obj;
$proto33["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto33);

$proto32["m_sql"] = "SEC_TO_TIME(SUM(IFNULL(qc_time,0)))";
$proto32["m_srcTableName"] = "Daily Users Work Summery QC";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "qc_time";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$proto36=array();
$proto36["m_functiontype"] = "SQLF_SUM";
$proto36["m_arguments"] = array();
						$proto37=array();
$proto37["m_functiontype"] = "SQLF_CUSTOM";
$proto37["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "total_rejected_by_qc"
));

$proto37["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto37["m_arguments"][]=$obj;
$proto37["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto37);

$proto36["m_arguments"][]=$obj;
$proto36["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto36);

$proto35["m_sql"] = "SUM(IFNULL(total_rejected_by_qc, 0))";
$proto35["m_srcTableName"] = "Daily Users Work Summery QC";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "rejected_by_qc";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$proto41=array();
$proto41["m_functiontype"] = "SQLF_CUSTOM";
$proto41["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(IFNULL(total_rejected_by_qc_eta,0))"
));

$proto41["m_arguments"][]=$obj;
$proto41["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto41);

$proto40["m_sql"] = "SEC_TO_TIME(SUM(IFNULL(total_rejected_by_qc_eta,0)))";
$proto40["m_srcTableName"] = "Daily Users Work Summery QC";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "rejected_designer_ETA";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$proto44=array();
$proto44["m_functiontype"] = "SQLF_CUSTOM";
$proto44["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(IFNULL(total_rejected_by_qc_taken,0))"
));

$proto44["m_arguments"][]=$obj;
$proto44["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto44);

$proto43["m_sql"] = "SEC_TO_TIME(SUM(IFNULL(total_rejected_by_qc_taken,0)))";
$proto43["m_srcTableName"] = "Daily Users Work Summery QC";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "rejected_designer_time";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$proto47=array();
$proto47["m_functiontype"] = "SQLF_SUM";
$proto47["m_arguments"] = array();
						$proto48=array();
$proto48["m_functiontype"] = "SQLF_CUSTOM";
$proto48["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "total_rejected_by_customer"
));

$proto48["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto48["m_arguments"][]=$obj;
$proto48["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto48);

$proto47["m_arguments"][]=$obj;
$proto47["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto47);

$proto46["m_sql"] = "SUM(IFNULL(total_rejected_by_customer, 0))";
$proto46["m_srcTableName"] = "Daily Users Work Summery QC";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "rejected_customer";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$proto52=array();
$proto52["m_functiontype"] = "SQLF_CUSTOM";
$proto52["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(IFNULL(total_rejected_by_customer_eta,0))"
));

$proto52["m_arguments"][]=$obj;
$proto52["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto52);

$proto51["m_sql"] = "SEC_TO_TIME(SUM(IFNULL(total_rejected_by_customer_eta,0)))";
$proto51["m_srcTableName"] = "Daily Users Work Summery QC";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "rejected_customer_eta";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$proto55=array();
$proto55["m_functiontype"] = "SQLF_CUSTOM";
$proto55["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(IFNULL(total_rejected_by_customer_taken,0))"
));

$proto55["m_arguments"][]=$obj;
$proto55["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto55);

$proto54["m_sql"] = "SEC_TO_TIME(SUM(IFNULL(total_rejected_by_customer_taken,0)))";
$proto54["m_srcTableName"] = "Daily Users Work Summery QC";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "rejected_customer_time";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$proto58=array();
$proto58["m_functiontype"] = "SQLF_CUSTOM";
$proto58["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(SUM(IFNULL(estimated_designer_time,0))-SUM(IFNULL(total_rejected_by_qc_eta,0)))+(SUM(IFNULL(estimated_qc_time,0))-SUM(IFNULL(total_rejected_by_customer_eta,0)))"
));

$proto58["m_arguments"][]=$obj;
$proto58["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto58);

$proto57["m_sql"] = "SEC_TO_TIME((SUM(IFNULL(estimated_designer_time,0))-SUM(IFNULL(total_rejected_by_qc_eta,0)))+(SUM(IFNULL(estimated_qc_time,0))-SUM(IFNULL(total_rejected_by_customer_eta,0))))";
$proto57["m_srcTableName"] = "Daily Users Work Summery QC";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "total_eta";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((SUM(IFNULL(estimated_designer_time,0))-SUM(IFNULL(total_rejected_by_qc,0)))+(SUM(IFNULL(estimated_qc_time,0))-SUM(IFNULL(total_rejected_by_customer_eta,0))))/390"
));

$proto60["m_sql"] = "((SUM(IFNULL(estimated_designer_time,0))-SUM(IFNULL(total_rejected_by_qc,0)))+(SUM(IFNULL(estimated_qc_time,0))-SUM(IFNULL(total_rejected_by_customer_eta,0))))/390";
$proto60["m_srcTableName"] = "Daily Users Work Summery QC";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "performance";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "comments",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Users Work Summery QC"
));

$proto62["m_sql"] = "comments";
$proto62["m_srcTableName"] = "Daily Users Work Summery QC";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto64=array();
$proto64["m_link"] = "SQLL_MAIN";
			$proto65=array();
$proto65["m_strName"] = "users_work_report";
$proto65["m_srcTableName"] = "Daily Users Work Summery QC";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "report_id";
$proto65["m_columns"][] = "report_reference";
$proto65["m_columns"][] = "work_date";
$proto65["m_columns"][] = "user_name";
$proto65["m_columns"][] = "team_id";
$proto65["m_columns"][] = "subdiv_id";
$proto65["m_columns"][] = "user_group";
$proto65["m_columns"][] = "pdf_name";
$proto65["m_columns"][] = "total_images_counted_designer";
$proto65["m_columns"][] = "estimated_designer_time";
$proto65["m_columns"][] = "designer_time";
$proto65["m_columns"][] = "total_images_counted_qc";
$proto65["m_columns"][] = "estimated_qc_time";
$proto65["m_columns"][] = "qc_time";
$proto65["m_columns"][] = "total_rejected_by_qc";
$proto65["m_columns"][] = "total_rejected_by_qc_eta";
$proto65["m_columns"][] = "total_rejected_by_qc_taken";
$proto65["m_columns"][] = "total_rejected_by_customer";
$proto65["m_columns"][] = "total_rejected_by_customer_eta";
$proto65["m_columns"][] = "total_rejected_by_customer_taken";
$proto65["m_columns"][] = "efficiency";
$proto65["m_columns"][] = "work_type";
$proto65["m_columns"][] = "comments";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "users_work_report";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "Daily Users Work Summery QC";
$proto66=array();
$proto66["m_sql"] = "";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto68=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Users Work Summery QC"
));

$proto68["m_column"]=$obj;
$obj = new SQLGroupByItem($proto68);

$proto0["m_groupby"][]=$obj;
												$proto70=array();
						$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Users Work Summery QC"
));

$proto70["m_column"]=$obj;
$obj = new SQLGroupByItem($proto70);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto72=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Users Work Summery QC"
));

$proto72["m_column"]=$obj;
$proto72["m_bAsc"] = 0;
$proto72["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto72);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Daily Users Work Summery QC";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Daily_Users_Work_Summery_QC = createSqlQuery_Daily_Users_Work_Summery_QC();


	
																			
	
$tdataDaily_Users_Work_Summery_QC[".sqlquery"] = $queryData_Daily_Users_Work_Summery_QC;

$tableEvents["Daily Users Work Summery QC"] = new eventsBase;
$tdataDaily_Users_Work_Summery_QC[".hasEvents"] = false;

?>