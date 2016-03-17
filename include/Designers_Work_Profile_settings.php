<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDesigners_Work_Profile = array();	
	$tdataDesigners_Work_Profile[".truncateText"] = true;
	$tdataDesigners_Work_Profile[".NumberOfChars"] = 256; 
	$tdataDesigners_Work_Profile[".ShortName"] = "Designers_Work_Profile";
	$tdataDesigners_Work_Profile[".OwnerID"] = "";
	$tdataDesigners_Work_Profile[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsDesigners_Work_Profile = array();
$fieldToolTipsDesigners_Work_Profile = array();
$pageTitlesDesigners_Work_Profile = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDesigners_Work_Profile["English"] = array();
	$fieldToolTipsDesigners_Work_Profile["English"] = array();
	$pageTitlesDesigners_Work_Profile["English"] = array();
	$fieldLabelsDesigners_Work_Profile["English"]["work_date"] = "Work Date";
	$fieldToolTipsDesigners_Work_Profile["English"]["work_date"] = "";
	$fieldLabelsDesigners_Work_Profile["English"]["team_id"] = "Team Id";
	$fieldToolTipsDesigners_Work_Profile["English"]["team_id"] = "";
	$fieldLabelsDesigners_Work_Profile["English"]["designer_name"] = "Designer Name";
	$fieldToolTipsDesigners_Work_Profile["English"]["designer_name"] = "";
	$fieldLabelsDesigners_Work_Profile["English"]["user_group"] = "User Group";
	$fieldToolTipsDesigners_Work_Profile["English"]["user_group"] = "";
	$fieldLabelsDesigners_Work_Profile["English"]["designer_done"] = "Designer Done";
	$fieldToolTipsDesigners_Work_Profile["English"]["designer_done"] = "";
	$fieldLabelsDesigners_Work_Profile["English"]["designer_eta"] = "Designer Eta";
	$fieldToolTipsDesigners_Work_Profile["English"]["designer_eta"] = "";
	$fieldLabelsDesigners_Work_Profile["English"]["designer_time"] = "Designer Time";
	$fieldToolTipsDesigners_Work_Profile["English"]["designer_time"] = "";
	$fieldLabelsDesigners_Work_Profile["English"]["QC_done"] = "QC Done";
	$fieldToolTipsDesigners_Work_Profile["English"]["QC_done"] = "";
	$fieldLabelsDesigners_Work_Profile["English"]["qc_eta"] = "Qc Eta";
	$fieldToolTipsDesigners_Work_Profile["English"]["qc_eta"] = "";
	$fieldLabelsDesigners_Work_Profile["English"]["qc_time"] = "Qc Time";
	$fieldToolTipsDesigners_Work_Profile["English"]["qc_time"] = "";
	$fieldLabelsDesigners_Work_Profile["English"]["rejected_by_qc"] = "Rejected By Qc";
	$fieldToolTipsDesigners_Work_Profile["English"]["rejected_by_qc"] = "";
	$fieldLabelsDesigners_Work_Profile["English"]["rejected_designer_ETA"] = "Rejected Designer ETA";
	$fieldToolTipsDesigners_Work_Profile["English"]["rejected_designer_ETA"] = "";
	$fieldLabelsDesigners_Work_Profile["English"]["rejected_designer_time"] = "Rejected Designer Time";
	$fieldToolTipsDesigners_Work_Profile["English"]["rejected_designer_time"] = "";
	$fieldLabelsDesigners_Work_Profile["English"]["rejected_customer"] = "Rejected Customer";
	$fieldToolTipsDesigners_Work_Profile["English"]["rejected_customer"] = "";
	$fieldLabelsDesigners_Work_Profile["English"]["rejected_customer_eta"] = "Rejected Customer Eta";
	$fieldToolTipsDesigners_Work_Profile["English"]["rejected_customer_eta"] = "";
	$fieldLabelsDesigners_Work_Profile["English"]["rejected_customer_time"] = "Rejected Customer Time";
	$fieldToolTipsDesigners_Work_Profile["English"]["rejected_customer_time"] = "";
	$fieldLabelsDesigners_Work_Profile["English"]["total_eta"] = "Total Eta";
	$fieldToolTipsDesigners_Work_Profile["English"]["total_eta"] = "";
	$fieldLabelsDesigners_Work_Profile["English"]["performance"] = "Performance";
	$fieldToolTipsDesigners_Work_Profile["English"]["performance"] = "";
	$fieldLabelsDesigners_Work_Profile["English"]["comments"] = "Comments";
	$fieldToolTipsDesigners_Work_Profile["English"]["comments"] = "";
	if (count($fieldToolTipsDesigners_Work_Profile["English"]))
		$tdataDesigners_Work_Profile[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDesigners_Work_Profile[""] = array();
	$fieldToolTipsDesigners_Work_Profile[""] = array();
	$pageTitlesDesigners_Work_Profile[""] = array();
	$fieldLabelsDesigners_Work_Profile[""]["user_group"] = "User Group";
	$fieldToolTipsDesigners_Work_Profile[""]["user_group"] = "";
	$fieldLabelsDesigners_Work_Profile[""]["designer_done"] = "Designer Done";
	$fieldToolTipsDesigners_Work_Profile[""]["designer_done"] = "";
	$fieldLabelsDesigners_Work_Profile[""]["designer_eta"] = "Designer Eta";
	$fieldToolTipsDesigners_Work_Profile[""]["designer_eta"] = "";
	$fieldLabelsDesigners_Work_Profile[""]["designer_time"] = "Designer Time";
	$fieldToolTipsDesigners_Work_Profile[""]["designer_time"] = "";
	$fieldLabelsDesigners_Work_Profile[""]["QC_done"] = "QC Done";
	$fieldToolTipsDesigners_Work_Profile[""]["QC_done"] = "";
	$fieldLabelsDesigners_Work_Profile[""]["qc_eta"] = "Qc Eta";
	$fieldToolTipsDesigners_Work_Profile[""]["qc_eta"] = "";
	$fieldLabelsDesigners_Work_Profile[""]["qc_time"] = "Qc Time";
	$fieldToolTipsDesigners_Work_Profile[""]["qc_time"] = "";
	$fieldLabelsDesigners_Work_Profile[""]["rejected_by_qc"] = "Rejected By Qc";
	$fieldToolTipsDesigners_Work_Profile[""]["rejected_by_qc"] = "";
	$fieldLabelsDesigners_Work_Profile[""]["rejected_designer_ETA"] = "Rejected Designer ETA";
	$fieldToolTipsDesigners_Work_Profile[""]["rejected_designer_ETA"] = "";
	$fieldLabelsDesigners_Work_Profile[""]["rejected_designer_time"] = "Rejected Designer Time";
	$fieldToolTipsDesigners_Work_Profile[""]["rejected_designer_time"] = "";
	$fieldLabelsDesigners_Work_Profile[""]["rejected_customer"] = "Rejected Customer";
	$fieldToolTipsDesigners_Work_Profile[""]["rejected_customer"] = "";
	$fieldLabelsDesigners_Work_Profile[""]["rejected_customer_eta"] = "Rejected Customer Eta";
	$fieldToolTipsDesigners_Work_Profile[""]["rejected_customer_eta"] = "";
	$fieldLabelsDesigners_Work_Profile[""]["rejected_customer_time"] = "Rejected Customer Time";
	$fieldToolTipsDesigners_Work_Profile[""]["rejected_customer_time"] = "";
	$fieldLabelsDesigners_Work_Profile[""]["total_eta"] = "Total Eta";
	$fieldToolTipsDesigners_Work_Profile[""]["total_eta"] = "";
	$fieldLabelsDesigners_Work_Profile[""]["performance"] = "Performance";
	$fieldToolTipsDesigners_Work_Profile[""]["performance"] = "";
	$fieldLabelsDesigners_Work_Profile[""]["comments"] = "Comments";
	$fieldToolTipsDesigners_Work_Profile[""]["comments"] = "";
	if (count($fieldToolTipsDesigners_Work_Profile[""]))
		$tdataDesigners_Work_Profile[".isUseToolTips"] = true;
}
	
	
	$tdataDesigners_Work_Profile[".NCSearch"] = true;



$tdataDesigners_Work_Profile[".shortTableName"] = "Designers_Work_Profile";
$tdataDesigners_Work_Profile[".nSecOptions"] = 0;
$tdataDesigners_Work_Profile[".recsPerRowList"] = 1;
$tdataDesigners_Work_Profile[".recsPerRowPrint"] = 1;
$tdataDesigners_Work_Profile[".mainTableOwnerID"] = "";
$tdataDesigners_Work_Profile[".moveNext"] = 1;
$tdataDesigners_Work_Profile[".entityType"] = 2;

$tdataDesigners_Work_Profile[".strOriginalTableName"] = "jobfile";




$tdataDesigners_Work_Profile[".showAddInPopup"] = false;

$tdataDesigners_Work_Profile[".showEditInPopup"] = false;

$tdataDesigners_Work_Profile[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDesigners_Work_Profile[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDesigners_Work_Profile[".fieldsForRegister"] = array();

$tdataDesigners_Work_Profile[".listAjax"] = false;

	$tdataDesigners_Work_Profile[".audit"] = false;

	$tdataDesigners_Work_Profile[".locking"] = false;


$tdataDesigners_Work_Profile[".add"] = true;
$tdataDesigners_Work_Profile[".afterAddAction"] = 0;
$tdataDesigners_Work_Profile[".closePopupAfterAdd"] = 1;
$tdataDesigners_Work_Profile[".afterAddActionDetTable"] = "";

$tdataDesigners_Work_Profile[".list"] = true;

$tdataDesigners_Work_Profile[".inlineAdd"] = true;


$tdataDesigners_Work_Profile[".exportTo"] = true;

$tdataDesigners_Work_Profile[".printFriendly"] = true;


$tdataDesigners_Work_Profile[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDesigners_Work_Profile[".searchSaving"] = false;
//

$tdataDesigners_Work_Profile[".showSearchPanel"] = true;
		$tdataDesigners_Work_Profile[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDesigners_Work_Profile[".isUseAjaxSuggest"] = false;
else 
	$tdataDesigners_Work_Profile[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDesigners_Work_Profile[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDesigners_Work_Profile[".isUseTimeForSearch"] = false;





$tdataDesigners_Work_Profile[".allSearchFields"] = array();
$tdataDesigners_Work_Profile[".filterFields"] = array();
$tdataDesigners_Work_Profile[".requiredSearchFields"] = array();

$tdataDesigners_Work_Profile[".allSearchFields"][] = "work_date";
	$tdataDesigners_Work_Profile[".allSearchFields"][] = "designer_name";
	$tdataDesigners_Work_Profile[".allSearchFields"][] = "team_id";
	$tdataDesigners_Work_Profile[".allSearchFields"][] = "user_group";
	$tdataDesigners_Work_Profile[".allSearchFields"][] = "designer_done";
	$tdataDesigners_Work_Profile[".allSearchFields"][] = "designer_eta";
	$tdataDesigners_Work_Profile[".allSearchFields"][] = "designer_time";
	$tdataDesigners_Work_Profile[".allSearchFields"][] = "QC_done";
	$tdataDesigners_Work_Profile[".allSearchFields"][] = "qc_eta";
	$tdataDesigners_Work_Profile[".allSearchFields"][] = "qc_time";
	$tdataDesigners_Work_Profile[".allSearchFields"][] = "rejected_by_qc";
	$tdataDesigners_Work_Profile[".allSearchFields"][] = "rejected_designer_ETA";
	$tdataDesigners_Work_Profile[".allSearchFields"][] = "rejected_designer_time";
	$tdataDesigners_Work_Profile[".allSearchFields"][] = "rejected_customer";
	$tdataDesigners_Work_Profile[".allSearchFields"][] = "rejected_customer_eta";
	$tdataDesigners_Work_Profile[".allSearchFields"][] = "rejected_customer_time";
	$tdataDesigners_Work_Profile[".allSearchFields"][] = "total_eta";
	$tdataDesigners_Work_Profile[".allSearchFields"][] = "performance";
	$tdataDesigners_Work_Profile[".allSearchFields"][] = "comments";
	

$tdataDesigners_Work_Profile[".googleLikeFields"] = array();
$tdataDesigners_Work_Profile[".googleLikeFields"][] = "work_date";
$tdataDesigners_Work_Profile[".googleLikeFields"][] = "designer_name";
$tdataDesigners_Work_Profile[".googleLikeFields"][] = "team_id";
$tdataDesigners_Work_Profile[".googleLikeFields"][] = "user_group";
$tdataDesigners_Work_Profile[".googleLikeFields"][] = "designer_done";
$tdataDesigners_Work_Profile[".googleLikeFields"][] = "designer_eta";
$tdataDesigners_Work_Profile[".googleLikeFields"][] = "designer_time";
$tdataDesigners_Work_Profile[".googleLikeFields"][] = "QC_done";
$tdataDesigners_Work_Profile[".googleLikeFields"][] = "qc_eta";
$tdataDesigners_Work_Profile[".googleLikeFields"][] = "qc_time";
$tdataDesigners_Work_Profile[".googleLikeFields"][] = "rejected_by_qc";
$tdataDesigners_Work_Profile[".googleLikeFields"][] = "rejected_designer_ETA";
$tdataDesigners_Work_Profile[".googleLikeFields"][] = "rejected_designer_time";
$tdataDesigners_Work_Profile[".googleLikeFields"][] = "rejected_customer";
$tdataDesigners_Work_Profile[".googleLikeFields"][] = "rejected_customer_eta";
$tdataDesigners_Work_Profile[".googleLikeFields"][] = "rejected_customer_time";
$tdataDesigners_Work_Profile[".googleLikeFields"][] = "total_eta";
$tdataDesigners_Work_Profile[".googleLikeFields"][] = "performance";
$tdataDesigners_Work_Profile[".googleLikeFields"][] = "comments";


$tdataDesigners_Work_Profile[".advSearchFields"] = array();
$tdataDesigners_Work_Profile[".advSearchFields"][] = "work_date";
$tdataDesigners_Work_Profile[".advSearchFields"][] = "designer_name";
$tdataDesigners_Work_Profile[".advSearchFields"][] = "team_id";
$tdataDesigners_Work_Profile[".advSearchFields"][] = "user_group";
$tdataDesigners_Work_Profile[".advSearchFields"][] = "designer_done";
$tdataDesigners_Work_Profile[".advSearchFields"][] = "designer_eta";
$tdataDesigners_Work_Profile[".advSearchFields"][] = "designer_time";
$tdataDesigners_Work_Profile[".advSearchFields"][] = "QC_done";
$tdataDesigners_Work_Profile[".advSearchFields"][] = "qc_eta";
$tdataDesigners_Work_Profile[".advSearchFields"][] = "qc_time";
$tdataDesigners_Work_Profile[".advSearchFields"][] = "rejected_by_qc";
$tdataDesigners_Work_Profile[".advSearchFields"][] = "rejected_designer_ETA";
$tdataDesigners_Work_Profile[".advSearchFields"][] = "rejected_designer_time";
$tdataDesigners_Work_Profile[".advSearchFields"][] = "rejected_customer";
$tdataDesigners_Work_Profile[".advSearchFields"][] = "rejected_customer_eta";
$tdataDesigners_Work_Profile[".advSearchFields"][] = "rejected_customer_time";
$tdataDesigners_Work_Profile[".advSearchFields"][] = "total_eta";
$tdataDesigners_Work_Profile[".advSearchFields"][] = "performance";
$tdataDesigners_Work_Profile[".advSearchFields"][] = "comments";

$tdataDesigners_Work_Profile[".tableType"] = "report";

$tdataDesigners_Work_Profile[".printerPageOrientation"] = 0;
$tdataDesigners_Work_Profile[".nPrinterPageScale"] = 100;

$tdataDesigners_Work_Profile[".nPrinterSplitRecords"] = 40;

$tdataDesigners_Work_Profile[".nPrinterPDFSplitRecords"] = 40;



$tdataDesigners_Work_Profile[".geocodingEnabled"] = false;

//report settings
$tdataDesigners_Work_Profile[".printReportLayout"] = 6;	

$tdataDesigners_Work_Profile[".reportPrintPartitionType"] = 1;	
$tdataDesigners_Work_Profile[".reportPrintGroupsPerPage"] = 40;	
	$tdataDesigners_Work_Profile[".reportPrintPDFGroupsPerPage"] = 40;
$tdataDesigners_Work_Profile[".lowGroup"] = 0;



$tdataDesigners_Work_Profile[".pageSize"] = 100;	






$tdataDesigners_Work_Profile[".repShowDet"] = true;

$tdataDesigners_Work_Profile[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDesigners_Work_Profile[".strOrderBy"] = $tstrOrderBy;

$tdataDesigners_Work_Profile[".orderindexes"] = array();
$tdataDesigners_Work_Profile[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "work_date");

$tdataDesigners_Work_Profile[".sqlHead"] = "SELECT work_date,  user_name AS designer_name,  team_id,  user_group,  SUM(IFNULL(total_images_counted_designer, 0)) AS designer_done,  SEC_TO_TIME(SUM(IFNULL(estimated_designer_time,0))) AS designer_eta,  SEC_TO_TIME(SUM(IFNULL(designer_time,0))) AS designer_time,  SUM(IFNULL(total_images_counted_qc, 0)) AS QC_done,  SEC_TO_TIME(SUM(IFNULL(estimated_qc_time,0))) AS qc_eta,  SEC_TO_TIME(SUM(IFNULL(qc_time,0))) AS qc_time,  SUM(IFNULL(total_rejected_by_qc, 0)) AS rejected_by_qc,  SEC_TO_TIME(SUM(IFNULL(total_rejected_by_qc_eta,0))) AS rejected_designer_ETA,  SEC_TO_TIME(SUM(IFNULL(total_rejected_by_qc_taken,0))) AS rejected_designer_time,  SUM(IFNULL(total_rejected_by_customer, 0)) AS rejected_customer,  SEC_TO_TIME(SUM(IFNULL(total_rejected_by_customer_eta,0))) AS rejected_customer_eta,  SEC_TO_TIME(SUM(IFNULL(total_rejected_by_customer_taken,0))) AS rejected_customer_time,  SEC_TO_TIME((SUM(IFNULL(estimated_designer_time,0))-SUM(IFNULL(total_rejected_by_qc_eta,0)))+(SUM(IFNULL(estimated_qc_time,0))-SUM(IFNULL(total_rejected_by_customer_eta,0)))) AS total_eta,  ((SUM(IFNULL(estimated_designer_time,0))-SUM(IFNULL(total_rejected_by_qc,0)))+(SUM(IFNULL(estimated_qc_time,0))-SUM(IFNULL(total_rejected_by_customer_eta,0))))/390 AS performance,  comments";
$tdataDesigners_Work_Profile[".sqlFrom"] = "FROM users_work_report";
$tdataDesigners_Work_Profile[".sqlWhereExpr"] = "";
$tdataDesigners_Work_Profile[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDesigners_Work_Profile[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDesigners_Work_Profile[".arrGroupsPerPage"] = $arrGPP;

$tdataDesigners_Work_Profile[".highlightSearchResults"] = true;

$tableKeysDesigners_Work_Profile = array();
$tdataDesigners_Work_Profile[".Keys"] = $tableKeysDesigners_Work_Profile;

$tdataDesigners_Work_Profile[".listFields"] = array();
$tdataDesigners_Work_Profile[".listFields"][] = "work_date";
$tdataDesigners_Work_Profile[".listFields"][] = "designer_name";
$tdataDesigners_Work_Profile[".listFields"][] = "team_id";
$tdataDesigners_Work_Profile[".listFields"][] = "user_group";
$tdataDesigners_Work_Profile[".listFields"][] = "designer_done";
$tdataDesigners_Work_Profile[".listFields"][] = "designer_eta";
$tdataDesigners_Work_Profile[".listFields"][] = "designer_time";
$tdataDesigners_Work_Profile[".listFields"][] = "QC_done";
$tdataDesigners_Work_Profile[".listFields"][] = "qc_eta";
$tdataDesigners_Work_Profile[".listFields"][] = "qc_time";
$tdataDesigners_Work_Profile[".listFields"][] = "rejected_by_qc";
$tdataDesigners_Work_Profile[".listFields"][] = "rejected_designer_ETA";
$tdataDesigners_Work_Profile[".listFields"][] = "rejected_designer_time";
$tdataDesigners_Work_Profile[".listFields"][] = "rejected_customer";
$tdataDesigners_Work_Profile[".listFields"][] = "rejected_customer_eta";
$tdataDesigners_Work_Profile[".listFields"][] = "rejected_customer_time";
$tdataDesigners_Work_Profile[".listFields"][] = "total_eta";
$tdataDesigners_Work_Profile[".listFields"][] = "performance";
$tdataDesigners_Work_Profile[".listFields"][] = "comments";

$tdataDesigners_Work_Profile[".hideMobileList"] = array();


$tdataDesigners_Work_Profile[".viewFields"] = array();
$tdataDesigners_Work_Profile[".viewFields"][] = "work_date";
$tdataDesigners_Work_Profile[".viewFields"][] = "designer_name";
$tdataDesigners_Work_Profile[".viewFields"][] = "team_id";
$tdataDesigners_Work_Profile[".viewFields"][] = "user_group";
$tdataDesigners_Work_Profile[".viewFields"][] = "designer_done";
$tdataDesigners_Work_Profile[".viewFields"][] = "designer_eta";
$tdataDesigners_Work_Profile[".viewFields"][] = "designer_time";
$tdataDesigners_Work_Profile[".viewFields"][] = "QC_done";
$tdataDesigners_Work_Profile[".viewFields"][] = "qc_eta";
$tdataDesigners_Work_Profile[".viewFields"][] = "qc_time";
$tdataDesigners_Work_Profile[".viewFields"][] = "rejected_by_qc";
$tdataDesigners_Work_Profile[".viewFields"][] = "rejected_designer_ETA";
$tdataDesigners_Work_Profile[".viewFields"][] = "rejected_designer_time";
$tdataDesigners_Work_Profile[".viewFields"][] = "rejected_customer";
$tdataDesigners_Work_Profile[".viewFields"][] = "rejected_customer_eta";
$tdataDesigners_Work_Profile[".viewFields"][] = "rejected_customer_time";
$tdataDesigners_Work_Profile[".viewFields"][] = "total_eta";
$tdataDesigners_Work_Profile[".viewFields"][] = "performance";
$tdataDesigners_Work_Profile[".viewFields"][] = "comments";

$tdataDesigners_Work_Profile[".addFields"] = array();
$tdataDesigners_Work_Profile[".addFields"][] = "designer_time";
$tdataDesigners_Work_Profile[".addFields"][] = "qc_time";

$tdataDesigners_Work_Profile[".masterListFields"] = array();
$tdataDesigners_Work_Profile[".masterListFields"][] = "work_date";
$tdataDesigners_Work_Profile[".masterListFields"][] = "designer_name";
$tdataDesigners_Work_Profile[".masterListFields"][] = "team_id";
$tdataDesigners_Work_Profile[".masterListFields"][] = "user_group";
$tdataDesigners_Work_Profile[".masterListFields"][] = "designer_done";
$tdataDesigners_Work_Profile[".masterListFields"][] = "designer_eta";
$tdataDesigners_Work_Profile[".masterListFields"][] = "designer_time";
$tdataDesigners_Work_Profile[".masterListFields"][] = "QC_done";
$tdataDesigners_Work_Profile[".masterListFields"][] = "qc_eta";
$tdataDesigners_Work_Profile[".masterListFields"][] = "qc_time";
$tdataDesigners_Work_Profile[".masterListFields"][] = "rejected_by_qc";
$tdataDesigners_Work_Profile[".masterListFields"][] = "rejected_designer_ETA";
$tdataDesigners_Work_Profile[".masterListFields"][] = "rejected_designer_time";
$tdataDesigners_Work_Profile[".masterListFields"][] = "rejected_customer";
$tdataDesigners_Work_Profile[".masterListFields"][] = "rejected_customer_eta";
$tdataDesigners_Work_Profile[".masterListFields"][] = "rejected_customer_time";
$tdataDesigners_Work_Profile[".masterListFields"][] = "total_eta";
$tdataDesigners_Work_Profile[".masterListFields"][] = "performance";
$tdataDesigners_Work_Profile[".masterListFields"][] = "comments";

$tdataDesigners_Work_Profile[".inlineAddFields"] = array();
$tdataDesigners_Work_Profile[".inlineAddFields"][] = "designer_time";
$tdataDesigners_Work_Profile[".inlineAddFields"][] = "qc_time";

$tdataDesigners_Work_Profile[".editFields"] = array();
$tdataDesigners_Work_Profile[".editFields"][] = "designer_time";
$tdataDesigners_Work_Profile[".editFields"][] = "qc_time";

$tdataDesigners_Work_Profile[".inlineEditFields"] = array();
$tdataDesigners_Work_Profile[".inlineEditFields"][] = "designer_time";
$tdataDesigners_Work_Profile[".inlineEditFields"][] = "qc_time";

$tdataDesigners_Work_Profile[".exportFields"] = array();
$tdataDesigners_Work_Profile[".exportFields"][] = "work_date";
$tdataDesigners_Work_Profile[".exportFields"][] = "designer_name";
$tdataDesigners_Work_Profile[".exportFields"][] = "team_id";
$tdataDesigners_Work_Profile[".exportFields"][] = "user_group";
$tdataDesigners_Work_Profile[".exportFields"][] = "designer_done";
$tdataDesigners_Work_Profile[".exportFields"][] = "designer_eta";
$tdataDesigners_Work_Profile[".exportFields"][] = "designer_time";
$tdataDesigners_Work_Profile[".exportFields"][] = "QC_done";
$tdataDesigners_Work_Profile[".exportFields"][] = "qc_eta";
$tdataDesigners_Work_Profile[".exportFields"][] = "qc_time";
$tdataDesigners_Work_Profile[".exportFields"][] = "rejected_by_qc";
$tdataDesigners_Work_Profile[".exportFields"][] = "rejected_designer_ETA";
$tdataDesigners_Work_Profile[".exportFields"][] = "rejected_designer_time";
$tdataDesigners_Work_Profile[".exportFields"][] = "rejected_customer";
$tdataDesigners_Work_Profile[".exportFields"][] = "rejected_customer_eta";
$tdataDesigners_Work_Profile[".exportFields"][] = "rejected_customer_time";
$tdataDesigners_Work_Profile[".exportFields"][] = "total_eta";
$tdataDesigners_Work_Profile[".exportFields"][] = "performance";
$tdataDesigners_Work_Profile[".exportFields"][] = "comments";

$tdataDesigners_Work_Profile[".importFields"] = array();
$tdataDesigners_Work_Profile[".importFields"][] = "work_date";
$tdataDesigners_Work_Profile[".importFields"][] = "designer_name";
$tdataDesigners_Work_Profile[".importFields"][] = "team_id";
$tdataDesigners_Work_Profile[".importFields"][] = "user_group";
$tdataDesigners_Work_Profile[".importFields"][] = "designer_done";
$tdataDesigners_Work_Profile[".importFields"][] = "designer_eta";
$tdataDesigners_Work_Profile[".importFields"][] = "designer_time";
$tdataDesigners_Work_Profile[".importFields"][] = "QC_done";
$tdataDesigners_Work_Profile[".importFields"][] = "qc_eta";
$tdataDesigners_Work_Profile[".importFields"][] = "qc_time";
$tdataDesigners_Work_Profile[".importFields"][] = "rejected_by_qc";
$tdataDesigners_Work_Profile[".importFields"][] = "rejected_designer_ETA";
$tdataDesigners_Work_Profile[".importFields"][] = "rejected_designer_time";
$tdataDesigners_Work_Profile[".importFields"][] = "rejected_customer";
$tdataDesigners_Work_Profile[".importFields"][] = "rejected_customer_eta";
$tdataDesigners_Work_Profile[".importFields"][] = "rejected_customer_time";
$tdataDesigners_Work_Profile[".importFields"][] = "total_eta";
$tdataDesigners_Work_Profile[".importFields"][] = "performance";
$tdataDesigners_Work_Profile[".importFields"][] = "comments";

$tdataDesigners_Work_Profile[".printFields"] = array();
$tdataDesigners_Work_Profile[".printFields"][] = "work_date";
$tdataDesigners_Work_Profile[".printFields"][] = "designer_name";
$tdataDesigners_Work_Profile[".printFields"][] = "team_id";
$tdataDesigners_Work_Profile[".printFields"][] = "user_group";
$tdataDesigners_Work_Profile[".printFields"][] = "designer_done";
$tdataDesigners_Work_Profile[".printFields"][] = "designer_eta";
$tdataDesigners_Work_Profile[".printFields"][] = "designer_time";
$tdataDesigners_Work_Profile[".printFields"][] = "QC_done";
$tdataDesigners_Work_Profile[".printFields"][] = "qc_eta";
$tdataDesigners_Work_Profile[".printFields"][] = "qc_time";
$tdataDesigners_Work_Profile[".printFields"][] = "rejected_by_qc";
$tdataDesigners_Work_Profile[".printFields"][] = "rejected_designer_ETA";
$tdataDesigners_Work_Profile[".printFields"][] = "rejected_designer_time";
$tdataDesigners_Work_Profile[".printFields"][] = "rejected_customer";
$tdataDesigners_Work_Profile[".printFields"][] = "rejected_customer_eta";
$tdataDesigners_Work_Profile[".printFields"][] = "rejected_customer_time";
$tdataDesigners_Work_Profile[".printFields"][] = "total_eta";
$tdataDesigners_Work_Profile[".printFields"][] = "performance";
$tdataDesigners_Work_Profile[".printFields"][] = "comments";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Designers_Work_Profile","work_date"); 
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

	

	
	$tdataDesigners_Work_Profile["work_date"] = $fdata;
//	designer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "designer_name";
	$fdata["GoodName"] = "designer_name";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Designers_Work_Profile","designer_name"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdataDesigners_Work_Profile["designer_name"] = $fdata;
//	team_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "team_id";
	$fdata["GoodName"] = "team_id";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Designers_Work_Profile","team_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdataDesigners_Work_Profile["team_id"] = $fdata;
//	user_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user_group";
	$fdata["GoodName"] = "user_group";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Designers_Work_Profile","user_group"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "user_group"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_group";
	
		
		
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
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigners_Work_Profile["user_group"] = $fdata;
//	designer_done
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "designer_done";
	$fdata["GoodName"] = "designer_done";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Work_Profile","designer_done"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_done"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(IFNULL(total_images_counted_designer, 0))";
	
		
		
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

	

	
	$tdataDesigners_Work_Profile["designer_done"] = $fdata;
//	designer_eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "designer_eta";
	$fdata["GoodName"] = "designer_eta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Work_Profile","designer_eta"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_eta"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(IFNULL(estimated_designer_time,0)))";
	
		
		
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

	

	
	$tdataDesigners_Work_Profile["designer_eta"] = $fdata;
//	designer_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "designer_time";
	$fdata["GoodName"] = "designer_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Work_Profile","designer_time"); 
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
	
		$fdata["strField"] = "designer_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(IFNULL(designer_time,0)))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigners_Work_Profile["designer_time"] = $fdata;
//	QC_done
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "QC_done";
	$fdata["GoodName"] = "QC_done";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Work_Profile","QC_done"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
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

	

	
	$tdataDesigners_Work_Profile["QC_done"] = $fdata;
//	qc_eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "qc_eta";
	$fdata["GoodName"] = "qc_eta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Work_Profile","qc_eta"); 
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

	

	
	$tdataDesigners_Work_Profile["qc_eta"] = $fdata;
//	qc_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "qc_time";
	$fdata["GoodName"] = "qc_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Work_Profile","qc_time"); 
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

	

	
	$tdataDesigners_Work_Profile["qc_time"] = $fdata;
//	rejected_by_qc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "rejected_by_qc";
	$fdata["GoodName"] = "rejected_by_qc";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Work_Profile","rejected_by_qc"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rejected_by_qc"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(IFNULL(total_rejected_by_qc, 0))";
	
		
		
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

	

	
	$tdataDesigners_Work_Profile["rejected_by_qc"] = $fdata;
//	rejected_designer_ETA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "rejected_designer_ETA";
	$fdata["GoodName"] = "rejected_designer_ETA";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Work_Profile","rejected_designer_ETA"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rejected_designer_ETA"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(IFNULL(total_rejected_by_qc_eta,0)))";
	
		
		
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

	

	
	$tdataDesigners_Work_Profile["rejected_designer_ETA"] = $fdata;
//	rejected_designer_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "rejected_designer_time";
	$fdata["GoodName"] = "rejected_designer_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Work_Profile","rejected_designer_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rejected_designer_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(IFNULL(total_rejected_by_qc_taken,0)))";
	
		
		
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

	

	
	$tdataDesigners_Work_Profile["rejected_designer_time"] = $fdata;
//	rejected_customer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "rejected_customer";
	$fdata["GoodName"] = "rejected_customer";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Work_Profile","rejected_customer"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
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

	

	
	$tdataDesigners_Work_Profile["rejected_customer"] = $fdata;
//	rejected_customer_eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "rejected_customer_eta";
	$fdata["GoodName"] = "rejected_customer_eta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Work_Profile","rejected_customer_eta"); 
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

	

	
	$tdataDesigners_Work_Profile["rejected_customer_eta"] = $fdata;
//	rejected_customer_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "rejected_customer_time";
	$fdata["GoodName"] = "rejected_customer_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Work_Profile","rejected_customer_time"); 
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

	

	
	$tdataDesigners_Work_Profile["rejected_customer_time"] = $fdata;
//	total_eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "total_eta";
	$fdata["GoodName"] = "total_eta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Work_Profile","total_eta"); 
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

	

	
	$tdataDesigners_Work_Profile["total_eta"] = $fdata;
//	performance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "performance";
	$fdata["GoodName"] = "performance";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Work_Profile","performance"); 
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

	

	
	$tdataDesigners_Work_Profile["performance"] = $fdata;
//	comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "comments";
	$fdata["GoodName"] = "comments";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Designers_Work_Profile","comments"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdataDesigners_Work_Profile["comments"] = $fdata;

	
$tables_data["Designers Work Profile"]=&$tdataDesigners_Work_Profile;
$field_labels["Designers_Work_Profile"] = &$fieldLabelsDesigners_Work_Profile;
$fieldToolTips["Designers Work Profile"] = &$fieldToolTipsDesigners_Work_Profile;
$page_titles["Designers_Work_Profile"] = &$pageTitlesDesigners_Work_Profile;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Designers Work Profile"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Designers Work Profile"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Designers_Work_Profile()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_date,  user_name AS designer_name,  team_id,  user_group,  SUM(IFNULL(total_images_counted_designer, 0)) AS designer_done,  SEC_TO_TIME(SUM(IFNULL(estimated_designer_time,0))) AS designer_eta,  SEC_TO_TIME(SUM(IFNULL(designer_time,0))) AS designer_time,  SUM(IFNULL(total_images_counted_qc, 0)) AS QC_done,  SEC_TO_TIME(SUM(IFNULL(estimated_qc_time,0))) AS qc_eta,  SEC_TO_TIME(SUM(IFNULL(qc_time,0))) AS qc_time,  SUM(IFNULL(total_rejected_by_qc, 0)) AS rejected_by_qc,  SEC_TO_TIME(SUM(IFNULL(total_rejected_by_qc_eta,0))) AS rejected_designer_ETA,  SEC_TO_TIME(SUM(IFNULL(total_rejected_by_qc_taken,0))) AS rejected_designer_time,  SUM(IFNULL(total_rejected_by_customer, 0)) AS rejected_customer,  SEC_TO_TIME(SUM(IFNULL(total_rejected_by_customer_eta,0))) AS rejected_customer_eta,  SEC_TO_TIME(SUM(IFNULL(total_rejected_by_customer_taken,0))) AS rejected_customer_time,  SEC_TO_TIME((SUM(IFNULL(estimated_designer_time,0))-SUM(IFNULL(total_rejected_by_qc_eta,0)))+(SUM(IFNULL(estimated_qc_time,0))-SUM(IFNULL(total_rejected_by_customer_eta,0)))) AS total_eta,  ((SUM(IFNULL(estimated_designer_time,0))-SUM(IFNULL(total_rejected_by_qc,0)))+(SUM(IFNULL(estimated_qc_time,0))-SUM(IFNULL(total_rejected_by_customer_eta,0))))/390 AS performance,  comments";
$proto0["m_strFrom"] = "FROM users_work_report";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY work_date DESC";
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
			$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Designers Work Profile"
));

$proto5["m_sql"] = "work_date";
$proto5["m_srcTableName"] = "Designers Work Profile";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Designers Work Profile"
));

$proto7["m_sql"] = "user_name";
$proto7["m_srcTableName"] = "Designers Work Profile";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "designer_name";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Designers Work Profile"
));

$proto9["m_sql"] = "team_id";
$proto9["m_srcTableName"] = "Designers Work Profile";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "user_group",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Designers Work Profile"
));

$proto11["m_sql"] = "user_group";
$proto11["m_srcTableName"] = "Designers Work Profile";
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
$proto13["m_srcTableName"] = "Designers Work Profile";
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
$proto18["m_srcTableName"] = "Designers Work Profile";
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
$proto21["m_srcTableName"] = "Designers Work Profile";
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
$proto24["m_srcTableName"] = "Designers Work Profile";
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
$proto29["m_srcTableName"] = "Designers Work Profile";
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
$proto32["m_srcTableName"] = "Designers Work Profile";
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
$proto35["m_srcTableName"] = "Designers Work Profile";
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
$proto40["m_srcTableName"] = "Designers Work Profile";
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
$proto43["m_srcTableName"] = "Designers Work Profile";
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
$proto46["m_srcTableName"] = "Designers Work Profile";
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
$proto51["m_srcTableName"] = "Designers Work Profile";
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
$proto54["m_srcTableName"] = "Designers Work Profile";
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
$proto57["m_srcTableName"] = "Designers Work Profile";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "total_eta";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((SUM(IFNULL(estimated_designer_time,0))-SUM(IFNULL(total_rejected_by_qc,0)))+(SUM(IFNULL(estimated_qc_time,0))-SUM(IFNULL(total_rejected_by_customer_eta,0))))/390"
));

$proto60["m_sql"] = "((SUM(IFNULL(estimated_designer_time,0))-SUM(IFNULL(total_rejected_by_qc,0)))+(SUM(IFNULL(estimated_qc_time,0))-SUM(IFNULL(total_rejected_by_customer_eta,0))))/390";
$proto60["m_srcTableName"] = "Designers Work Profile";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "performance";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "comments",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Designers Work Profile"
));

$proto62["m_sql"] = "comments";
$proto62["m_srcTableName"] = "Designers Work Profile";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto64=array();
$proto64["m_link"] = "SQLL_MAIN";
			$proto65=array();
$proto65["m_strName"] = "users_work_report";
$proto65["m_srcTableName"] = "Designers Work Profile";
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
$proto64["m_srcTableName"] = "Designers Work Profile";
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
	"m_srcTableName" => "Designers Work Profile"
));

$proto68["m_column"]=$obj;
$obj = new SQLGroupByItem($proto68);

$proto0["m_groupby"][]=$obj;
												$proto70=array();
						$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Designers Work Profile"
));

$proto70["m_column"]=$obj;
$obj = new SQLGroupByItem($proto70);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto72=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Designers Work Profile"
));

$proto72["m_column"]=$obj;
$proto72["m_bAsc"] = 0;
$proto72["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto72);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Designers Work Profile";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Designers_Work_Profile = createSqlQuery_Designers_Work_Profile();


	
																			
	
$tdataDesigners_Work_Profile[".sqlquery"] = $queryData_Designers_Work_Profile;

$tableEvents["Designers Work Profile"] = new eventsBase;
$tdataDesigners_Work_Profile[".hasEvents"] = false;

?>