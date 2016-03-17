<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDaily_Designers_New = array();	
	$tdataDaily_Designers_New[".truncateText"] = true;
	$tdataDaily_Designers_New[".NumberOfChars"] = 256; 
	$tdataDaily_Designers_New[".ShortName"] = "Daily_Designers_New";
	$tdataDaily_Designers_New[".OwnerID"] = "";
	$tdataDaily_Designers_New[".OriginalTable"] = "users_work_report";

//	field labels
$fieldLabelsDaily_Designers_New = array();
$fieldToolTipsDaily_Designers_New = array();
$pageTitlesDaily_Designers_New = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDaily_Designers_New["English"] = array();
	$fieldToolTipsDaily_Designers_New["English"] = array();
	$pageTitlesDaily_Designers_New["English"] = array();
	$fieldLabelsDaily_Designers_New["English"]["work_date"] = "Work Date";
	$fieldToolTipsDaily_Designers_New["English"]["work_date"] = "";
	$fieldLabelsDaily_Designers_New["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsDaily_Designers_New["English"]["efficiency"] = "";
	$fieldLabelsDaily_Designers_New["English"]["work_type"] = "Work Type";
	$fieldToolTipsDaily_Designers_New["English"]["work_type"] = "";
	$fieldLabelsDaily_Designers_New["English"]["report_id"] = "Report Id";
	$fieldToolTipsDaily_Designers_New["English"]["report_id"] = "";
	$fieldLabelsDaily_Designers_New["English"]["report_reference"] = "Report Reference";
	$fieldToolTipsDaily_Designers_New["English"]["report_reference"] = "";
	$fieldLabelsDaily_Designers_New["English"]["user_name"] = "User Name";
	$fieldToolTipsDaily_Designers_New["English"]["user_name"] = "";
	$fieldLabelsDaily_Designers_New["English"]["team_id"] = "Team Id";
	$fieldToolTipsDaily_Designers_New["English"]["team_id"] = "";
	$fieldLabelsDaily_Designers_New["English"]["subdiv_id"] = "Subdiv Id";
	$fieldToolTipsDaily_Designers_New["English"]["subdiv_id"] = "";
	$fieldLabelsDaily_Designers_New["English"]["user_group"] = "User Group";
	$fieldToolTipsDaily_Designers_New["English"]["user_group"] = "";
	$fieldLabelsDaily_Designers_New["English"]["pdf_name"] = "Pdf Name";
	$fieldToolTipsDaily_Designers_New["English"]["pdf_name"] = "";
	$fieldLabelsDaily_Designers_New["English"]["designer_time"] = "Designer Time";
	$fieldToolTipsDaily_Designers_New["English"]["designer_time"] = "";
	$fieldLabelsDaily_Designers_New["English"]["qc_time"] = "Qc Time";
	$fieldToolTipsDaily_Designers_New["English"]["qc_time"] = "";
	$fieldLabelsDaily_Designers_New["English"]["comments"] = "Comments";
	$fieldToolTipsDaily_Designers_New["English"]["comments"] = "";
	$fieldLabelsDaily_Designers_New["English"]["designer_done"] = "Designer Done";
	$fieldToolTipsDaily_Designers_New["English"]["designer_done"] = "";
	$fieldLabelsDaily_Designers_New["English"]["designer_eta"] = "Designer Eta";
	$fieldToolTipsDaily_Designers_New["English"]["designer_eta"] = "";
	$fieldLabelsDaily_Designers_New["English"]["QC_done"] = "QC Done";
	$fieldToolTipsDaily_Designers_New["English"]["QC_done"] = "";
	$fieldLabelsDaily_Designers_New["English"]["qc_eta"] = "Qc Eta";
	$fieldToolTipsDaily_Designers_New["English"]["qc_eta"] = "";
	$fieldLabelsDaily_Designers_New["English"]["rejected_by_qc"] = "Rejected By Qc";
	$fieldToolTipsDaily_Designers_New["English"]["rejected_by_qc"] = "";
	$fieldLabelsDaily_Designers_New["English"]["rejected_designer_ETA"] = "Rejected Designer ETA";
	$fieldToolTipsDaily_Designers_New["English"]["rejected_designer_ETA"] = "";
	$fieldLabelsDaily_Designers_New["English"]["rejected_designer_time"] = "Rejected Designer Time";
	$fieldToolTipsDaily_Designers_New["English"]["rejected_designer_time"] = "";
	$fieldLabelsDaily_Designers_New["English"]["rejected_customer"] = "Rejected Customer";
	$fieldToolTipsDaily_Designers_New["English"]["rejected_customer"] = "";
	$fieldLabelsDaily_Designers_New["English"]["rejected_customer_eta"] = "Rejected Customer Eta";
	$fieldToolTipsDaily_Designers_New["English"]["rejected_customer_eta"] = "";
	$fieldLabelsDaily_Designers_New["English"]["rejected_customer_time"] = "Rejected Customer Time";
	$fieldToolTipsDaily_Designers_New["English"]["rejected_customer_time"] = "";
	if (count($fieldToolTipsDaily_Designers_New["English"]))
		$tdataDaily_Designers_New[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDaily_Designers_New[""] = array();
	$fieldToolTipsDaily_Designers_New[""] = array();
	$pageTitlesDaily_Designers_New[""] = array();
	$fieldLabelsDaily_Designers_New[""]["efficiency"] = "Efficiency";
	$fieldToolTipsDaily_Designers_New[""]["efficiency"] = "";
	$fieldLabelsDaily_Designers_New[""]["work_type"] = "Work Type";
	$fieldToolTipsDaily_Designers_New[""]["work_type"] = "";
	$fieldLabelsDaily_Designers_New[""]["report_id"] = "Report Id";
	$fieldToolTipsDaily_Designers_New[""]["report_id"] = "";
	$fieldLabelsDaily_Designers_New[""]["report_reference"] = "Report Reference";
	$fieldToolTipsDaily_Designers_New[""]["report_reference"] = "";
	$fieldLabelsDaily_Designers_New[""]["user_name"] = "User Name";
	$fieldToolTipsDaily_Designers_New[""]["user_name"] = "";
	$fieldLabelsDaily_Designers_New[""]["team_id"] = "Team Id";
	$fieldToolTipsDaily_Designers_New[""]["team_id"] = "";
	$fieldLabelsDaily_Designers_New[""]["subdiv_id"] = "Subdiv Id";
	$fieldToolTipsDaily_Designers_New[""]["subdiv_id"] = "";
	$fieldLabelsDaily_Designers_New[""]["user_group"] = "User Group";
	$fieldToolTipsDaily_Designers_New[""]["user_group"] = "";
	$fieldLabelsDaily_Designers_New[""]["pdf_name"] = "Pdf Name";
	$fieldToolTipsDaily_Designers_New[""]["pdf_name"] = "";
	$fieldLabelsDaily_Designers_New[""]["designer_time"] = "Designer Time";
	$fieldToolTipsDaily_Designers_New[""]["designer_time"] = "";
	$fieldLabelsDaily_Designers_New[""]["qc_time"] = "Qc Time";
	$fieldToolTipsDaily_Designers_New[""]["qc_time"] = "";
	$fieldLabelsDaily_Designers_New[""]["comments"] = "Comments";
	$fieldToolTipsDaily_Designers_New[""]["comments"] = "";
	$fieldLabelsDaily_Designers_New[""]["designer_done"] = "Designer Done";
	$fieldToolTipsDaily_Designers_New[""]["designer_done"] = "";
	$fieldLabelsDaily_Designers_New[""]["designer_eta"] = "Designer Eta";
	$fieldToolTipsDaily_Designers_New[""]["designer_eta"] = "";
	$fieldLabelsDaily_Designers_New[""]["QC_done"] = "QC Done";
	$fieldToolTipsDaily_Designers_New[""]["QC_done"] = "";
	$fieldLabelsDaily_Designers_New[""]["qc_eta"] = "Qc Eta";
	$fieldToolTipsDaily_Designers_New[""]["qc_eta"] = "";
	$fieldLabelsDaily_Designers_New[""]["rejected_by_qc"] = "Rejected By Qc";
	$fieldToolTipsDaily_Designers_New[""]["rejected_by_qc"] = "";
	$fieldLabelsDaily_Designers_New[""]["rejected_designer_ETA"] = "Rejected Designer ETA";
	$fieldToolTipsDaily_Designers_New[""]["rejected_designer_ETA"] = "";
	$fieldLabelsDaily_Designers_New[""]["rejected_designer_time"] = "Rejected Designer Time";
	$fieldToolTipsDaily_Designers_New[""]["rejected_designer_time"] = "";
	$fieldLabelsDaily_Designers_New[""]["rejected_customer"] = "Rejected Customer";
	$fieldToolTipsDaily_Designers_New[""]["rejected_customer"] = "";
	$fieldLabelsDaily_Designers_New[""]["rejected_customer_eta"] = "Rejected Customer Eta";
	$fieldToolTipsDaily_Designers_New[""]["rejected_customer_eta"] = "";
	$fieldLabelsDaily_Designers_New[""]["rejected_customer_time"] = "Rejected Customer Time";
	$fieldToolTipsDaily_Designers_New[""]["rejected_customer_time"] = "";
	if (count($fieldToolTipsDaily_Designers_New[""]))
		$tdataDaily_Designers_New[".isUseToolTips"] = true;
}
	
	
	$tdataDaily_Designers_New[".NCSearch"] = true;



$tdataDaily_Designers_New[".shortTableName"] = "Daily_Designers_New";
$tdataDaily_Designers_New[".nSecOptions"] = 0;
$tdataDaily_Designers_New[".recsPerRowList"] = 1;
$tdataDaily_Designers_New[".recsPerRowPrint"] = 1;
$tdataDaily_Designers_New[".mainTableOwnerID"] = "";
$tdataDaily_Designers_New[".moveNext"] = 1;
$tdataDaily_Designers_New[".entityType"] = 2;

$tdataDaily_Designers_New[".strOriginalTableName"] = "users_work_report";




$tdataDaily_Designers_New[".showAddInPopup"] = false;

$tdataDaily_Designers_New[".showEditInPopup"] = false;

$tdataDaily_Designers_New[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDaily_Designers_New[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDaily_Designers_New[".fieldsForRegister"] = array();

$tdataDaily_Designers_New[".listAjax"] = false;

	$tdataDaily_Designers_New[".audit"] = false;

	$tdataDaily_Designers_New[".locking"] = false;


$tdataDaily_Designers_New[".add"] = true;
$tdataDaily_Designers_New[".afterAddAction"] = 0;
$tdataDaily_Designers_New[".closePopupAfterAdd"] = 1;
$tdataDaily_Designers_New[".afterAddActionDetTable"] = "";

$tdataDaily_Designers_New[".list"] = true;

$tdataDaily_Designers_New[".inlineAdd"] = true;


$tdataDaily_Designers_New[".exportTo"] = true;

$tdataDaily_Designers_New[".printFriendly"] = true;


$tdataDaily_Designers_New[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDaily_Designers_New[".searchSaving"] = false;
//

$tdataDaily_Designers_New[".showSearchPanel"] = true;
		$tdataDaily_Designers_New[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDaily_Designers_New[".isUseAjaxSuggest"] = false;
else 
	$tdataDaily_Designers_New[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDaily_Designers_New[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDaily_Designers_New[".isUseTimeForSearch"] = false;





$tdataDaily_Designers_New[".allSearchFields"] = array();
$tdataDaily_Designers_New[".filterFields"] = array();
$tdataDaily_Designers_New[".requiredSearchFields"] = array();

$tdataDaily_Designers_New[".allSearchFields"][] = "work_date";
	$tdataDaily_Designers_New[".allSearchFields"][] = "user_name";
	$tdataDaily_Designers_New[".allSearchFields"][] = "team_id";
	$tdataDaily_Designers_New[".allSearchFields"][] = "subdiv_id";
	$tdataDaily_Designers_New[".allSearchFields"][] = "user_group";
	$tdataDaily_Designers_New[".allSearchFields"][] = "pdf_name";
	$tdataDaily_Designers_New[".allSearchFields"][] = "designer_done";
	$tdataDaily_Designers_New[".allSearchFields"][] = "designer_eta";
	$tdataDaily_Designers_New[".allSearchFields"][] = "designer_time";
	$tdataDaily_Designers_New[".allSearchFields"][] = "QC_done";
	$tdataDaily_Designers_New[".allSearchFields"][] = "qc_eta";
	$tdataDaily_Designers_New[".allSearchFields"][] = "qc_time";
	$tdataDaily_Designers_New[".allSearchFields"][] = "rejected_by_qc";
	$tdataDaily_Designers_New[".allSearchFields"][] = "rejected_designer_ETA";
	$tdataDaily_Designers_New[".allSearchFields"][] = "rejected_designer_time";
	$tdataDaily_Designers_New[".allSearchFields"][] = "rejected_customer";
	$tdataDaily_Designers_New[".allSearchFields"][] = "rejected_customer_eta";
	$tdataDaily_Designers_New[".allSearchFields"][] = "rejected_customer_time";
	$tdataDaily_Designers_New[".allSearchFields"][] = "efficiency";
	$tdataDaily_Designers_New[".allSearchFields"][] = "work_type";
	$tdataDaily_Designers_New[".allSearchFields"][] = "comments";
	

$tdataDaily_Designers_New[".googleLikeFields"] = array();
$tdataDaily_Designers_New[".googleLikeFields"][] = "report_id";
$tdataDaily_Designers_New[".googleLikeFields"][] = "report_reference";
$tdataDaily_Designers_New[".googleLikeFields"][] = "work_date";
$tdataDaily_Designers_New[".googleLikeFields"][] = "user_name";
$tdataDaily_Designers_New[".googleLikeFields"][] = "team_id";
$tdataDaily_Designers_New[".googleLikeFields"][] = "subdiv_id";
$tdataDaily_Designers_New[".googleLikeFields"][] = "user_group";
$tdataDaily_Designers_New[".googleLikeFields"][] = "pdf_name";
$tdataDaily_Designers_New[".googleLikeFields"][] = "designer_done";
$tdataDaily_Designers_New[".googleLikeFields"][] = "designer_eta";
$tdataDaily_Designers_New[".googleLikeFields"][] = "designer_time";
$tdataDaily_Designers_New[".googleLikeFields"][] = "QC_done";
$tdataDaily_Designers_New[".googleLikeFields"][] = "qc_eta";
$tdataDaily_Designers_New[".googleLikeFields"][] = "qc_time";
$tdataDaily_Designers_New[".googleLikeFields"][] = "rejected_by_qc";
$tdataDaily_Designers_New[".googleLikeFields"][] = "rejected_designer_ETA";
$tdataDaily_Designers_New[".googleLikeFields"][] = "rejected_designer_time";
$tdataDaily_Designers_New[".googleLikeFields"][] = "rejected_customer";
$tdataDaily_Designers_New[".googleLikeFields"][] = "rejected_customer_eta";
$tdataDaily_Designers_New[".googleLikeFields"][] = "rejected_customer_time";
$tdataDaily_Designers_New[".googleLikeFields"][] = "efficiency";
$tdataDaily_Designers_New[".googleLikeFields"][] = "work_type";
$tdataDaily_Designers_New[".googleLikeFields"][] = "comments";


$tdataDaily_Designers_New[".advSearchFields"] = array();
$tdataDaily_Designers_New[".advSearchFields"][] = "report_id";
$tdataDaily_Designers_New[".advSearchFields"][] = "report_reference";
$tdataDaily_Designers_New[".advSearchFields"][] = "work_date";
$tdataDaily_Designers_New[".advSearchFields"][] = "user_name";
$tdataDaily_Designers_New[".advSearchFields"][] = "team_id";
$tdataDaily_Designers_New[".advSearchFields"][] = "subdiv_id";
$tdataDaily_Designers_New[".advSearchFields"][] = "user_group";
$tdataDaily_Designers_New[".advSearchFields"][] = "pdf_name";
$tdataDaily_Designers_New[".advSearchFields"][] = "designer_done";
$tdataDaily_Designers_New[".advSearchFields"][] = "designer_eta";
$tdataDaily_Designers_New[".advSearchFields"][] = "designer_time";
$tdataDaily_Designers_New[".advSearchFields"][] = "QC_done";
$tdataDaily_Designers_New[".advSearchFields"][] = "qc_eta";
$tdataDaily_Designers_New[".advSearchFields"][] = "qc_time";
$tdataDaily_Designers_New[".advSearchFields"][] = "rejected_by_qc";
$tdataDaily_Designers_New[".advSearchFields"][] = "rejected_designer_ETA";
$tdataDaily_Designers_New[".advSearchFields"][] = "rejected_designer_time";
$tdataDaily_Designers_New[".advSearchFields"][] = "rejected_customer";
$tdataDaily_Designers_New[".advSearchFields"][] = "rejected_customer_eta";
$tdataDaily_Designers_New[".advSearchFields"][] = "rejected_customer_time";
$tdataDaily_Designers_New[".advSearchFields"][] = "efficiency";
$tdataDaily_Designers_New[".advSearchFields"][] = "work_type";
$tdataDaily_Designers_New[".advSearchFields"][] = "comments";

$tdataDaily_Designers_New[".tableType"] = "report";

$tdataDaily_Designers_New[".printerPageOrientation"] = 0;
$tdataDaily_Designers_New[".nPrinterPageScale"] = 100;

$tdataDaily_Designers_New[".nPrinterSplitRecords"] = 40;

$tdataDaily_Designers_New[".nPrinterPDFSplitRecords"] = 40;



$tdataDaily_Designers_New[".geocodingEnabled"] = false;

//report settings
$tdataDaily_Designers_New[".printReportLayout"] = 3;	

$tdataDaily_Designers_New[".reportPrintPartitionType"] = 0;	
$tdataDaily_Designers_New[".reportPrintGroupsPerPage"] = 3;	
	$tdataDaily_Designers_New[".lowGroup"] = 2;



$tdataDaily_Designers_New[".reportGroupFields"] = true;
$tdataDaily_Designers_New[".pageSize"] = 1;
$tdataDaily_Designers_New[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "work_date";
	$rgroupField['groupInterval'] = 5;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "team_id";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataDaily_Designers_New[".reportGroupFieldsData"] = $reportGroupFields;


$tdataDaily_Designers_New[".isExistTotalFields"] = true;


$tdataDaily_Designers_New[".reportPageSummary"] = true;


$tdataDaily_Designers_New[".repShowDet"] = true;

$tdataDaily_Designers_New[".reportLayout"] = 3;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDaily_Designers_New[".strOrderBy"] = $tstrOrderBy;

$tdataDaily_Designers_New[".orderindexes"] = array();
$tdataDaily_Designers_New[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "work_date");

$tdataDaily_Designers_New[".sqlHead"] = "SELECT report_id,  report_reference,  work_date,  user_name,  team_id,  subdiv_id,  user_group,  pdf_name,  SUM(IFNULL(total_images_counted_designer,0)) as designer_done,  SUM(IFNULL(estimated_designer_time,0)) AS designer_eta,  SUM(IFNULL(designer_time,0)) AS designer_time,  SUM(IFNULL(total_images_counted_qc,0)) As QC_done,  SUM(IFNULL(estimated_qc_time,0)) AS qc_eta,  SUM(IFNULL(qc_time,0)) AS qc_time,  SUM(IFNULL(total_rejected_by_qc,0)) AS rejected_by_qc,  SUM(IFNULL(total_rejected_by_qc_eta,0)) AS rejected_designer_ETA,  SUM(IFNULL(total_rejected_by_qc_taken,0))AS rejected_designer_time,  SUM(IFNULL(total_rejected_by_customer,0))AS rejected_customer,  SUM(IFNULL(total_rejected_by_customer_eta,0))AS rejected_customer_eta,  SUM(IFNULL(total_rejected_by_customer_taken,0))AS rejected_customer_time,  efficiency,  work_type,  comments";
$tdataDaily_Designers_New[".sqlFrom"] = "FROM users_work_report";
$tdataDaily_Designers_New[".sqlWhereExpr"] = "";
$tdataDaily_Designers_New[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDaily_Designers_New[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDaily_Designers_New[".arrGroupsPerPage"] = $arrGPP;

$tdataDaily_Designers_New[".highlightSearchResults"] = true;

$tableKeysDaily_Designers_New = array();
$tdataDaily_Designers_New[".Keys"] = $tableKeysDaily_Designers_New;

$tdataDaily_Designers_New[".listFields"] = array();
$tdataDaily_Designers_New[".listFields"][] = "report_id";
$tdataDaily_Designers_New[".listFields"][] = "report_reference";
$tdataDaily_Designers_New[".listFields"][] = "work_date";
$tdataDaily_Designers_New[".listFields"][] = "user_name";
$tdataDaily_Designers_New[".listFields"][] = "team_id";
$tdataDaily_Designers_New[".listFields"][] = "subdiv_id";
$tdataDaily_Designers_New[".listFields"][] = "user_group";
$tdataDaily_Designers_New[".listFields"][] = "pdf_name";
$tdataDaily_Designers_New[".listFields"][] = "designer_done";
$tdataDaily_Designers_New[".listFields"][] = "designer_eta";
$tdataDaily_Designers_New[".listFields"][] = "designer_time";
$tdataDaily_Designers_New[".listFields"][] = "QC_done";
$tdataDaily_Designers_New[".listFields"][] = "qc_eta";
$tdataDaily_Designers_New[".listFields"][] = "qc_time";
$tdataDaily_Designers_New[".listFields"][] = "rejected_by_qc";
$tdataDaily_Designers_New[".listFields"][] = "rejected_designer_ETA";
$tdataDaily_Designers_New[".listFields"][] = "rejected_designer_time";
$tdataDaily_Designers_New[".listFields"][] = "rejected_customer";
$tdataDaily_Designers_New[".listFields"][] = "rejected_customer_eta";
$tdataDaily_Designers_New[".listFields"][] = "rejected_customer_time";
$tdataDaily_Designers_New[".listFields"][] = "efficiency";
$tdataDaily_Designers_New[".listFields"][] = "work_type";
$tdataDaily_Designers_New[".listFields"][] = "comments";

$tdataDaily_Designers_New[".hideMobileList"] = array();


$tdataDaily_Designers_New[".viewFields"] = array();
$tdataDaily_Designers_New[".viewFields"][] = "report_id";
$tdataDaily_Designers_New[".viewFields"][] = "report_reference";
$tdataDaily_Designers_New[".viewFields"][] = "work_date";
$tdataDaily_Designers_New[".viewFields"][] = "user_name";
$tdataDaily_Designers_New[".viewFields"][] = "team_id";
$tdataDaily_Designers_New[".viewFields"][] = "subdiv_id";
$tdataDaily_Designers_New[".viewFields"][] = "user_group";
$tdataDaily_Designers_New[".viewFields"][] = "pdf_name";
$tdataDaily_Designers_New[".viewFields"][] = "designer_done";
$tdataDaily_Designers_New[".viewFields"][] = "designer_eta";
$tdataDaily_Designers_New[".viewFields"][] = "designer_time";
$tdataDaily_Designers_New[".viewFields"][] = "QC_done";
$tdataDaily_Designers_New[".viewFields"][] = "qc_eta";
$tdataDaily_Designers_New[".viewFields"][] = "qc_time";
$tdataDaily_Designers_New[".viewFields"][] = "rejected_by_qc";
$tdataDaily_Designers_New[".viewFields"][] = "rejected_designer_ETA";
$tdataDaily_Designers_New[".viewFields"][] = "rejected_designer_time";
$tdataDaily_Designers_New[".viewFields"][] = "rejected_customer";
$tdataDaily_Designers_New[".viewFields"][] = "rejected_customer_eta";
$tdataDaily_Designers_New[".viewFields"][] = "rejected_customer_time";
$tdataDaily_Designers_New[".viewFields"][] = "efficiency";
$tdataDaily_Designers_New[".viewFields"][] = "work_type";
$tdataDaily_Designers_New[".viewFields"][] = "comments";

$tdataDaily_Designers_New[".addFields"] = array();
$tdataDaily_Designers_New[".addFields"][] = "report_id";
$tdataDaily_Designers_New[".addFields"][] = "report_reference";
$tdataDaily_Designers_New[".addFields"][] = "user_name";
$tdataDaily_Designers_New[".addFields"][] = "team_id";
$tdataDaily_Designers_New[".addFields"][] = "subdiv_id";
$tdataDaily_Designers_New[".addFields"][] = "user_group";
$tdataDaily_Designers_New[".addFields"][] = "pdf_name";
$tdataDaily_Designers_New[".addFields"][] = "designer_time";
$tdataDaily_Designers_New[".addFields"][] = "qc_time";
$tdataDaily_Designers_New[".addFields"][] = "work_type";
$tdataDaily_Designers_New[".addFields"][] = "comments";

$tdataDaily_Designers_New[".masterListFields"] = array();
$tdataDaily_Designers_New[".masterListFields"][] = "report_id";
$tdataDaily_Designers_New[".masterListFields"][] = "report_reference";
$tdataDaily_Designers_New[".masterListFields"][] = "work_date";
$tdataDaily_Designers_New[".masterListFields"][] = "user_name";
$tdataDaily_Designers_New[".masterListFields"][] = "team_id";
$tdataDaily_Designers_New[".masterListFields"][] = "subdiv_id";
$tdataDaily_Designers_New[".masterListFields"][] = "user_group";
$tdataDaily_Designers_New[".masterListFields"][] = "pdf_name";
$tdataDaily_Designers_New[".masterListFields"][] = "designer_done";
$tdataDaily_Designers_New[".masterListFields"][] = "designer_eta";
$tdataDaily_Designers_New[".masterListFields"][] = "designer_time";
$tdataDaily_Designers_New[".masterListFields"][] = "QC_done";
$tdataDaily_Designers_New[".masterListFields"][] = "qc_eta";
$tdataDaily_Designers_New[".masterListFields"][] = "qc_time";
$tdataDaily_Designers_New[".masterListFields"][] = "rejected_by_qc";
$tdataDaily_Designers_New[".masterListFields"][] = "rejected_designer_ETA";
$tdataDaily_Designers_New[".masterListFields"][] = "rejected_designer_time";
$tdataDaily_Designers_New[".masterListFields"][] = "rejected_customer";
$tdataDaily_Designers_New[".masterListFields"][] = "rejected_customer_eta";
$tdataDaily_Designers_New[".masterListFields"][] = "rejected_customer_time";
$tdataDaily_Designers_New[".masterListFields"][] = "efficiency";
$tdataDaily_Designers_New[".masterListFields"][] = "work_type";
$tdataDaily_Designers_New[".masterListFields"][] = "comments";

$tdataDaily_Designers_New[".inlineAddFields"] = array();
$tdataDaily_Designers_New[".inlineAddFields"][] = "report_id";
$tdataDaily_Designers_New[".inlineAddFields"][] = "report_reference";
$tdataDaily_Designers_New[".inlineAddFields"][] = "user_name";
$tdataDaily_Designers_New[".inlineAddFields"][] = "team_id";
$tdataDaily_Designers_New[".inlineAddFields"][] = "subdiv_id";
$tdataDaily_Designers_New[".inlineAddFields"][] = "user_group";
$tdataDaily_Designers_New[".inlineAddFields"][] = "pdf_name";
$tdataDaily_Designers_New[".inlineAddFields"][] = "designer_time";
$tdataDaily_Designers_New[".inlineAddFields"][] = "qc_time";
$tdataDaily_Designers_New[".inlineAddFields"][] = "work_type";
$tdataDaily_Designers_New[".inlineAddFields"][] = "comments";

$tdataDaily_Designers_New[".editFields"] = array();
$tdataDaily_Designers_New[".editFields"][] = "report_id";
$tdataDaily_Designers_New[".editFields"][] = "report_reference";
$tdataDaily_Designers_New[".editFields"][] = "user_name";
$tdataDaily_Designers_New[".editFields"][] = "team_id";
$tdataDaily_Designers_New[".editFields"][] = "subdiv_id";
$tdataDaily_Designers_New[".editFields"][] = "user_group";
$tdataDaily_Designers_New[".editFields"][] = "pdf_name";
$tdataDaily_Designers_New[".editFields"][] = "designer_time";
$tdataDaily_Designers_New[".editFields"][] = "qc_time";
$tdataDaily_Designers_New[".editFields"][] = "work_type";
$tdataDaily_Designers_New[".editFields"][] = "comments";

$tdataDaily_Designers_New[".inlineEditFields"] = array();
$tdataDaily_Designers_New[".inlineEditFields"][] = "report_id";
$tdataDaily_Designers_New[".inlineEditFields"][] = "report_reference";
$tdataDaily_Designers_New[".inlineEditFields"][] = "user_name";
$tdataDaily_Designers_New[".inlineEditFields"][] = "team_id";
$tdataDaily_Designers_New[".inlineEditFields"][] = "subdiv_id";
$tdataDaily_Designers_New[".inlineEditFields"][] = "user_group";
$tdataDaily_Designers_New[".inlineEditFields"][] = "pdf_name";
$tdataDaily_Designers_New[".inlineEditFields"][] = "designer_time";
$tdataDaily_Designers_New[".inlineEditFields"][] = "qc_time";
$tdataDaily_Designers_New[".inlineEditFields"][] = "work_type";
$tdataDaily_Designers_New[".inlineEditFields"][] = "comments";

$tdataDaily_Designers_New[".exportFields"] = array();
$tdataDaily_Designers_New[".exportFields"][] = "report_id";
$tdataDaily_Designers_New[".exportFields"][] = "report_reference";
$tdataDaily_Designers_New[".exportFields"][] = "work_date";
$tdataDaily_Designers_New[".exportFields"][] = "user_name";
$tdataDaily_Designers_New[".exportFields"][] = "team_id";
$tdataDaily_Designers_New[".exportFields"][] = "subdiv_id";
$tdataDaily_Designers_New[".exportFields"][] = "user_group";
$tdataDaily_Designers_New[".exportFields"][] = "pdf_name";
$tdataDaily_Designers_New[".exportFields"][] = "designer_done";
$tdataDaily_Designers_New[".exportFields"][] = "designer_eta";
$tdataDaily_Designers_New[".exportFields"][] = "designer_time";
$tdataDaily_Designers_New[".exportFields"][] = "QC_done";
$tdataDaily_Designers_New[".exportFields"][] = "qc_eta";
$tdataDaily_Designers_New[".exportFields"][] = "qc_time";
$tdataDaily_Designers_New[".exportFields"][] = "rejected_by_qc";
$tdataDaily_Designers_New[".exportFields"][] = "rejected_designer_ETA";
$tdataDaily_Designers_New[".exportFields"][] = "rejected_designer_time";
$tdataDaily_Designers_New[".exportFields"][] = "rejected_customer";
$tdataDaily_Designers_New[".exportFields"][] = "rejected_customer_eta";
$tdataDaily_Designers_New[".exportFields"][] = "rejected_customer_time";
$tdataDaily_Designers_New[".exportFields"][] = "efficiency";
$tdataDaily_Designers_New[".exportFields"][] = "work_type";
$tdataDaily_Designers_New[".exportFields"][] = "comments";

$tdataDaily_Designers_New[".importFields"] = array();
$tdataDaily_Designers_New[".importFields"][] = "report_id";
$tdataDaily_Designers_New[".importFields"][] = "report_reference";
$tdataDaily_Designers_New[".importFields"][] = "work_date";
$tdataDaily_Designers_New[".importFields"][] = "user_name";
$tdataDaily_Designers_New[".importFields"][] = "team_id";
$tdataDaily_Designers_New[".importFields"][] = "subdiv_id";
$tdataDaily_Designers_New[".importFields"][] = "user_group";
$tdataDaily_Designers_New[".importFields"][] = "pdf_name";
$tdataDaily_Designers_New[".importFields"][] = "designer_done";
$tdataDaily_Designers_New[".importFields"][] = "designer_eta";
$tdataDaily_Designers_New[".importFields"][] = "designer_time";
$tdataDaily_Designers_New[".importFields"][] = "QC_done";
$tdataDaily_Designers_New[".importFields"][] = "qc_eta";
$tdataDaily_Designers_New[".importFields"][] = "qc_time";
$tdataDaily_Designers_New[".importFields"][] = "rejected_by_qc";
$tdataDaily_Designers_New[".importFields"][] = "rejected_designer_ETA";
$tdataDaily_Designers_New[".importFields"][] = "rejected_designer_time";
$tdataDaily_Designers_New[".importFields"][] = "rejected_customer";
$tdataDaily_Designers_New[".importFields"][] = "rejected_customer_eta";
$tdataDaily_Designers_New[".importFields"][] = "rejected_customer_time";
$tdataDaily_Designers_New[".importFields"][] = "efficiency";
$tdataDaily_Designers_New[".importFields"][] = "work_type";
$tdataDaily_Designers_New[".importFields"][] = "comments";

$tdataDaily_Designers_New[".printFields"] = array();
$tdataDaily_Designers_New[".printFields"][] = "report_id";
$tdataDaily_Designers_New[".printFields"][] = "report_reference";
$tdataDaily_Designers_New[".printFields"][] = "work_date";
$tdataDaily_Designers_New[".printFields"][] = "user_name";
$tdataDaily_Designers_New[".printFields"][] = "team_id";
$tdataDaily_Designers_New[".printFields"][] = "subdiv_id";
$tdataDaily_Designers_New[".printFields"][] = "user_group";
$tdataDaily_Designers_New[".printFields"][] = "pdf_name";
$tdataDaily_Designers_New[".printFields"][] = "designer_done";
$tdataDaily_Designers_New[".printFields"][] = "designer_eta";
$tdataDaily_Designers_New[".printFields"][] = "designer_time";
$tdataDaily_Designers_New[".printFields"][] = "QC_done";
$tdataDaily_Designers_New[".printFields"][] = "qc_eta";
$tdataDaily_Designers_New[".printFields"][] = "qc_time";
$tdataDaily_Designers_New[".printFields"][] = "rejected_by_qc";
$tdataDaily_Designers_New[".printFields"][] = "rejected_designer_ETA";
$tdataDaily_Designers_New[".printFields"][] = "rejected_designer_time";
$tdataDaily_Designers_New[".printFields"][] = "rejected_customer";
$tdataDaily_Designers_New[".printFields"][] = "rejected_customer_eta";
$tdataDaily_Designers_New[".printFields"][] = "rejected_customer_time";
$tdataDaily_Designers_New[".printFields"][] = "efficiency";
$tdataDaily_Designers_New[".printFields"][] = "work_type";
$tdataDaily_Designers_New[".printFields"][] = "comments";

//	report_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "report_id";
	$fdata["GoodName"] = "report_id";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","report_id"); 
	$fdata["FieldType"] = 200;
	
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
	
		$fdata["strField"] = "report_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "report_id";
	
		
		
				
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
	
	
	
	

	

	
	$tdataDaily_Designers_New["report_id"] = $fdata;
//	report_reference
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "report_reference";
	$fdata["GoodName"] = "report_reference";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","report_reference"); 
	$fdata["FieldType"] = 200;
	
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
	
		$fdata["strField"] = "report_reference"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "report_reference";
	
		
		
				
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
	
	
	
	

	

	
	$tdataDaily_Designers_New["report_reference"] = $fdata;
//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","work_date"); 
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

	

	
	$tdataDaily_Designers_New["work_date"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","user_name"); 
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

	

	
	$tdataDaily_Designers_New["user_name"] = $fdata;
//	team_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "team_id";
	$fdata["GoodName"] = "team_id";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","team_id"); 
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

	

	
	$tdataDaily_Designers_New["team_id"] = $fdata;
//	subdiv_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "subdiv_id";
	$fdata["GoodName"] = "subdiv_id";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","subdiv_id"); 
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
	
		$fdata["strField"] = "subdiv_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subdiv_id";
	
		
		
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
	$edata["LookupTable"] = "subdivision";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "subdiv_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "subdiv_name";
	
		
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

	

	
	$tdataDaily_Designers_New["subdiv_id"] = $fdata;
//	user_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "user_group";
	$fdata["GoodName"] = "user_group";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","user_group"); 
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

	

	
	$tdataDaily_Designers_New["user_group"] = $fdata;
//	pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "pdf_name";
	$fdata["GoodName"] = "pdf_name";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","pdf_name"); 
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
	
		$fdata["strField"] = "pdf_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf_name";
	
		
		
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
	$edata["LookupTable"] = "pdf";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "pdf_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "pdf_name";
	
		
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

	

	
	$tdataDaily_Designers_New["pdf_name"] = $fdata;
//	designer_done
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "designer_done";
	$fdata["GoodName"] = "designer_done";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","designer_done"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_done"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(IFNULL(total_images_counted_designer,0))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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

	

	
	$tdataDaily_Designers_New["designer_done"] = $fdata;
//	designer_eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "designer_eta";
	$fdata["GoodName"] = "designer_eta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","designer_eta"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_eta"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(IFNULL(estimated_designer_time,0))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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

	

	
	$tdataDaily_Designers_New["designer_eta"] = $fdata;
//	designer_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "designer_time";
	$fdata["GoodName"] = "designer_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","designer_time"); 
	$fdata["FieldType"] = 14;
	
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
	$fdata["FullName"] = "SUM(IFNULL(designer_time,0))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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

	

	
	$tdataDaily_Designers_New["designer_time"] = $fdata;
//	QC_done
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "QC_done";
	$fdata["GoodName"] = "QC_done";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","QC_done"); 
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
	$fdata["FullName"] = "SUM(IFNULL(total_images_counted_qc,0))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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

	

	
	$tdataDaily_Designers_New["QC_done"] = $fdata;
//	qc_eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "qc_eta";
	$fdata["GoodName"] = "qc_eta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","qc_eta"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qc_eta"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(IFNULL(estimated_qc_time,0))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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

	

	
	$tdataDaily_Designers_New["qc_eta"] = $fdata;
//	qc_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "qc_time";
	$fdata["GoodName"] = "qc_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","qc_time"); 
	$fdata["FieldType"] = 14;
	
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
	$fdata["FullName"] = "SUM(IFNULL(qc_time,0))";
	
		
		
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

	

	
	$tdataDaily_Designers_New["qc_time"] = $fdata;
//	rejected_by_qc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "rejected_by_qc";
	$fdata["GoodName"] = "rejected_by_qc";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","rejected_by_qc"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rejected_by_qc"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(IFNULL(total_rejected_by_qc,0))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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

	

	
	$tdataDaily_Designers_New["rejected_by_qc"] = $fdata;
//	rejected_designer_ETA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "rejected_designer_ETA";
	$fdata["GoodName"] = "rejected_designer_ETA";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","rejected_designer_ETA"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rejected_designer_ETA"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(IFNULL(total_rejected_by_qc_eta,0))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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

	

	
	$tdataDaily_Designers_New["rejected_designer_ETA"] = $fdata;
//	rejected_designer_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "rejected_designer_time";
	$fdata["GoodName"] = "rejected_designer_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","rejected_designer_time"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rejected_designer_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(IFNULL(total_rejected_by_qc_taken,0))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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

	

	
	$tdataDaily_Designers_New["rejected_designer_time"] = $fdata;
//	rejected_customer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "rejected_customer";
	$fdata["GoodName"] = "rejected_customer";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","rejected_customer"); 
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
	$fdata["FullName"] = "SUM(IFNULL(total_rejected_by_customer,0))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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

	

	
	$tdataDaily_Designers_New["rejected_customer"] = $fdata;
//	rejected_customer_eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "rejected_customer_eta";
	$fdata["GoodName"] = "rejected_customer_eta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","rejected_customer_eta"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rejected_customer_eta"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(IFNULL(total_rejected_by_customer_eta,0))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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

	

	
	$tdataDaily_Designers_New["rejected_customer_eta"] = $fdata;
//	rejected_customer_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "rejected_customer_time";
	$fdata["GoodName"] = "rejected_customer_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","rejected_customer_time"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rejected_customer_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(IFNULL(total_rejected_by_customer_taken,0))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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

	

	
	$tdataDaily_Designers_New["rejected_customer_time"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","efficiency"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "efficiency"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "efficiency";
	
		
		
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
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDaily_Designers_New["efficiency"] = $fdata;
//	work_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "work_type";
	$fdata["GoodName"] = "work_type";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","work_type"); 
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
	
		$fdata["strField"] = "work_type"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "work_type";
	
		
		
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
	$edata["LookupTable"] = "work_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "type";
	
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataDaily_Designers_New["work_type"] = $fdata;
//	comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "comments";
	$fdata["GoodName"] = "comments";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_New","comments"); 
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

	

	
	$tdataDaily_Designers_New["comments"] = $fdata;

	
$tables_data["Daily Designers New"]=&$tdataDaily_Designers_New;
$field_labels["Daily_Designers_New"] = &$fieldLabelsDaily_Designers_New;
$fieldToolTips["Daily Designers New"] = &$fieldToolTipsDaily_Designers_New;
$page_titles["Daily_Designers_New"] = &$pageTitlesDaily_Designers_New;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Daily Designers New"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Daily Designers New"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Daily_Designers_New()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "report_id,  report_reference,  work_date,  user_name,  team_id,  subdiv_id,  user_group,  pdf_name,  SUM(IFNULL(total_images_counted_designer,0)) as designer_done,  SUM(IFNULL(estimated_designer_time,0)) AS designer_eta,  SUM(IFNULL(designer_time,0)) AS designer_time,  SUM(IFNULL(total_images_counted_qc,0)) As QC_done,  SUM(IFNULL(estimated_qc_time,0)) AS qc_eta,  SUM(IFNULL(qc_time,0)) AS qc_time,  SUM(IFNULL(total_rejected_by_qc,0)) AS rejected_by_qc,  SUM(IFNULL(total_rejected_by_qc_eta,0)) AS rejected_designer_ETA,  SUM(IFNULL(total_rejected_by_qc_taken,0))AS rejected_designer_time,  SUM(IFNULL(total_rejected_by_customer,0))AS rejected_customer,  SUM(IFNULL(total_rejected_by_customer_eta,0))AS rejected_customer_eta,  SUM(IFNULL(total_rejected_by_customer_taken,0))AS rejected_customer_time,  efficiency,  work_type,  comments";
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
	"m_strName" => "report_id",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Designers New"
));

$proto5["m_sql"] = "report_id";
$proto5["m_srcTableName"] = "Daily Designers New";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "report_reference",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Designers New"
));

$proto7["m_sql"] = "report_reference";
$proto7["m_srcTableName"] = "Daily Designers New";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Designers New"
));

$proto9["m_sql"] = "work_date";
$proto9["m_srcTableName"] = "Daily Designers New";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Designers New"
));

$proto11["m_sql"] = "user_name";
$proto11["m_srcTableName"] = "Daily Designers New";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Designers New"
));

$proto13["m_sql"] = "team_id";
$proto13["m_srcTableName"] = "Daily Designers New";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "subdiv_id",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Designers New"
));

$proto15["m_sql"] = "subdiv_id";
$proto15["m_srcTableName"] = "Daily Designers New";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "user_group",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Designers New"
));

$proto17["m_sql"] = "user_group";
$proto17["m_srcTableName"] = "Daily Designers New";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Designers New"
));

$proto19["m_sql"] = "pdf_name";
$proto19["m_srcTableName"] = "Daily Designers New";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_SUM";
$proto22["m_arguments"] = array();
						$proto23=array();
$proto23["m_functiontype"] = "SQLF_CUSTOM";
$proto23["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "total_images_counted_designer"
));

$proto23["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto23["m_arguments"][]=$obj;
$proto23["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto23);

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "SUM(IFNULL(total_images_counted_designer,0))";
$proto21["m_srcTableName"] = "Daily Designers New";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "designer_done";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_SUM";
$proto27["m_arguments"] = array();
						$proto28=array();
$proto28["m_functiontype"] = "SQLF_CUSTOM";
$proto28["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "estimated_designer_time"
));

$proto28["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto28["m_arguments"][]=$obj;
$proto28["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto28);

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "SUM(IFNULL(estimated_designer_time,0))";
$proto26["m_srcTableName"] = "Daily Designers New";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "designer_eta";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$proto32=array();
$proto32["m_functiontype"] = "SQLF_SUM";
$proto32["m_arguments"] = array();
						$proto33=array();
$proto33["m_functiontype"] = "SQLF_CUSTOM";
$proto33["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "designer_time"
));

$proto33["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto33["m_arguments"][]=$obj;
$proto33["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto33);

$proto32["m_arguments"][]=$obj;
$proto32["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto32);

$proto31["m_sql"] = "SUM(IFNULL(designer_time,0))";
$proto31["m_srcTableName"] = "Daily Designers New";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "designer_time";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$proto37=array();
$proto37["m_functiontype"] = "SQLF_SUM";
$proto37["m_arguments"] = array();
						$proto38=array();
$proto38["m_functiontype"] = "SQLF_CUSTOM";
$proto38["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "total_images_counted_qc"
));

$proto38["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto38["m_arguments"][]=$obj;
$proto38["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto38);

$proto37["m_arguments"][]=$obj;
$proto37["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto37);

$proto36["m_sql"] = "SUM(IFNULL(total_images_counted_qc,0))";
$proto36["m_srcTableName"] = "Daily Designers New";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "QC_done";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$proto42=array();
$proto42["m_functiontype"] = "SQLF_SUM";
$proto42["m_arguments"] = array();
						$proto43=array();
$proto43["m_functiontype"] = "SQLF_CUSTOM";
$proto43["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "estimated_qc_time"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto43["m_arguments"][]=$obj;
$proto43["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto43);

$proto42["m_arguments"][]=$obj;
$proto42["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto42);

$proto41["m_sql"] = "SUM(IFNULL(estimated_qc_time,0))";
$proto41["m_srcTableName"] = "Daily Designers New";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "qc_eta";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$proto47=array();
$proto47["m_functiontype"] = "SQLF_SUM";
$proto47["m_arguments"] = array();
						$proto48=array();
$proto48["m_functiontype"] = "SQLF_CUSTOM";
$proto48["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "qc_time"
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

$proto46["m_sql"] = "SUM(IFNULL(qc_time,0))";
$proto46["m_srcTableName"] = "Daily Designers New";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "qc_time";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$proto52=array();
$proto52["m_functiontype"] = "SQLF_SUM";
$proto52["m_arguments"] = array();
						$proto53=array();
$proto53["m_functiontype"] = "SQLF_CUSTOM";
$proto53["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "total_rejected_by_qc"
));

$proto53["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto53["m_arguments"][]=$obj;
$proto53["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto53);

$proto52["m_arguments"][]=$obj;
$proto52["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto52);

$proto51["m_sql"] = "SUM(IFNULL(total_rejected_by_qc,0))";
$proto51["m_srcTableName"] = "Daily Designers New";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "rejected_by_qc";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$proto57=array();
$proto57["m_functiontype"] = "SQLF_SUM";
$proto57["m_arguments"] = array();
						$proto58=array();
$proto58["m_functiontype"] = "SQLF_CUSTOM";
$proto58["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "total_rejected_by_qc_eta"
));

$proto58["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto58["m_arguments"][]=$obj;
$proto58["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto58);

$proto57["m_arguments"][]=$obj;
$proto57["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto57);

$proto56["m_sql"] = "SUM(IFNULL(total_rejected_by_qc_eta,0))";
$proto56["m_srcTableName"] = "Daily Designers New";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "rejected_designer_ETA";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$proto62=array();
$proto62["m_functiontype"] = "SQLF_SUM";
$proto62["m_arguments"] = array();
						$proto63=array();
$proto63["m_functiontype"] = "SQLF_CUSTOM";
$proto63["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "total_rejected_by_qc_taken"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto63["m_arguments"][]=$obj;
$proto63["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto63);

$proto62["m_arguments"][]=$obj;
$proto62["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto62);

$proto61["m_sql"] = "SUM(IFNULL(total_rejected_by_qc_taken,0))";
$proto61["m_srcTableName"] = "Daily Designers New";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "rejected_designer_time";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$proto67=array();
$proto67["m_functiontype"] = "SQLF_SUM";
$proto67["m_arguments"] = array();
						$proto68=array();
$proto68["m_functiontype"] = "SQLF_CUSTOM";
$proto68["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "total_rejected_by_customer"
));

$proto68["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto68["m_arguments"][]=$obj;
$proto68["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto68);

$proto67["m_arguments"][]=$obj;
$proto67["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto67);

$proto66["m_sql"] = "SUM(IFNULL(total_rejected_by_customer,0))";
$proto66["m_srcTableName"] = "Daily Designers New";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "rejected_customer";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$proto72=array();
$proto72["m_functiontype"] = "SQLF_SUM";
$proto72["m_arguments"] = array();
						$proto73=array();
$proto73["m_functiontype"] = "SQLF_CUSTOM";
$proto73["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "total_rejected_by_customer_eta"
));

$proto73["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto73["m_arguments"][]=$obj;
$proto73["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto73);

$proto72["m_arguments"][]=$obj;
$proto72["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto72);

$proto71["m_sql"] = "SUM(IFNULL(total_rejected_by_customer_eta,0))";
$proto71["m_srcTableName"] = "Daily Designers New";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "rejected_customer_eta";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$proto77=array();
$proto77["m_functiontype"] = "SQLF_SUM";
$proto77["m_arguments"] = array();
						$proto78=array();
$proto78["m_functiontype"] = "SQLF_CUSTOM";
$proto78["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "total_rejected_by_customer_taken"
));

$proto78["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto78["m_arguments"][]=$obj;
$proto78["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto78);

$proto77["m_arguments"][]=$obj;
$proto77["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto77);

$proto76["m_sql"] = "SUM(IFNULL(total_rejected_by_customer_taken,0))";
$proto76["m_srcTableName"] = "Daily Designers New";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "rejected_customer_time";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "efficiency",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Designers New"
));

$proto81["m_sql"] = "efficiency";
$proto81["m_srcTableName"] = "Daily Designers New";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Designers New"
));

$proto83["m_sql"] = "work_type";
$proto83["m_srcTableName"] = "Daily Designers New";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "comments",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Designers New"
));

$proto85["m_sql"] = "comments";
$proto85["m_srcTableName"] = "Daily Designers New";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto87=array();
$proto87["m_link"] = "SQLL_MAIN";
			$proto88=array();
$proto88["m_strName"] = "users_work_report";
$proto88["m_srcTableName"] = "Daily Designers New";
$proto88["m_columns"] = array();
$proto88["m_columns"][] = "report_id";
$proto88["m_columns"][] = "report_reference";
$proto88["m_columns"][] = "work_date";
$proto88["m_columns"][] = "user_name";
$proto88["m_columns"][] = "team_id";
$proto88["m_columns"][] = "subdiv_id";
$proto88["m_columns"][] = "user_group";
$proto88["m_columns"][] = "pdf_name";
$proto88["m_columns"][] = "total_images_counted_designer";
$proto88["m_columns"][] = "estimated_designer_time";
$proto88["m_columns"][] = "designer_time";
$proto88["m_columns"][] = "total_images_counted_qc";
$proto88["m_columns"][] = "estimated_qc_time";
$proto88["m_columns"][] = "qc_time";
$proto88["m_columns"][] = "total_rejected_by_qc";
$proto88["m_columns"][] = "total_rejected_by_qc_eta";
$proto88["m_columns"][] = "total_rejected_by_qc_taken";
$proto88["m_columns"][] = "total_rejected_by_customer";
$proto88["m_columns"][] = "total_rejected_by_customer_eta";
$proto88["m_columns"][] = "total_rejected_by_customer_taken";
$proto88["m_columns"][] = "efficiency";
$proto88["m_columns"][] = "work_type";
$proto88["m_columns"][] = "comments";
$obj = new SQLTable($proto88);

$proto87["m_table"] = $obj;
$proto87["m_sql"] = "users_work_report";
$proto87["m_alias"] = "";
$proto87["m_srcTableName"] = "Daily Designers New";
$proto89=array();
$proto89["m_sql"] = "";
$proto89["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto89["m_column"]=$obj;
$proto89["m_contained"] = array();
$proto89["m_strCase"] = "";
$proto89["m_havingmode"] = false;
$proto89["m_inBrackets"] = false;
$proto89["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto89);

$proto87["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto87);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto91=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Designers New"
));

$proto91["m_column"]=$obj;
$obj = new SQLGroupByItem($proto91);

$proto0["m_groupby"][]=$obj;
												$proto93=array();
						$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Designers New"
));

$proto93["m_column"]=$obj;
$obj = new SQLGroupByItem($proto93);

$proto0["m_groupby"][]=$obj;
												$proto95=array();
						$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Designers New"
));

$proto95["m_column"]=$obj;
$obj = new SQLGroupByItem($proto95);

$proto0["m_groupby"][]=$obj;
												$proto97=array();
						$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Designers New"
));

$proto97["m_column"]=$obj;
$obj = new SQLGroupByItem($proto97);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto99=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily Designers New"
));

$proto99["m_column"]=$obj;
$proto99["m_bAsc"] = 0;
$proto99["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto99);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Daily Designers New";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Daily_Designers_New = createSqlQuery_Daily_Designers_New();


	
																							
	
$tdataDaily_Designers_New[".sqlquery"] = $queryData_Daily_Designers_New;

$tableEvents["Daily Designers New"] = new eventsBase;
$tdataDaily_Designers_New[".hasEvents"] = false;

?>