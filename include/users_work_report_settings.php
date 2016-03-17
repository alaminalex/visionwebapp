<?php
require_once(getabspath("classes/cipherer.php"));




$tdatausers_work_report = array();	
	$tdatausers_work_report[".truncateText"] = true;
	$tdatausers_work_report[".NumberOfChars"] = 80; 
	$tdatausers_work_report[".ShortName"] = "users_work_report";
	$tdatausers_work_report[".OwnerID"] = "";
	$tdatausers_work_report[".OriginalTable"] = "users_work_report";

//	field labels
$fieldLabelsusers_work_report = array();
$fieldToolTipsusers_work_report = array();
$pageTitlesusers_work_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsusers_work_report["English"] = array();
	$fieldToolTipsusers_work_report["English"] = array();
	$pageTitlesusers_work_report["English"] = array();
	$fieldLabelsusers_work_report["English"]["report_id"] = "Report Id";
	$fieldToolTipsusers_work_report["English"]["report_id"] = "";
	$fieldLabelsusers_work_report["English"]["report_reference"] = "Report Reference";
	$fieldToolTipsusers_work_report["English"]["report_reference"] = "";
	$fieldLabelsusers_work_report["English"]["work_date"] = "Work Date";
	$fieldToolTipsusers_work_report["English"]["work_date"] = "";
	$fieldLabelsusers_work_report["English"]["team_id"] = "Team Id";
	$fieldToolTipsusers_work_report["English"]["team_id"] = "";
	$fieldLabelsusers_work_report["English"]["subdiv_id"] = "Subdiv Id";
	$fieldToolTipsusers_work_report["English"]["subdiv_id"] = "";
	$fieldLabelsusers_work_report["English"]["user_group"] = "User Group";
	$fieldToolTipsusers_work_report["English"]["user_group"] = "";
	$fieldLabelsusers_work_report["English"]["pdf_name"] = "Pdf Name";
	$fieldToolTipsusers_work_report["English"]["pdf_name"] = "";
	$fieldLabelsusers_work_report["English"]["total_images_counted_designer"] = "Total Images Counted Designer";
	$fieldToolTipsusers_work_report["English"]["total_images_counted_designer"] = "";
	$fieldLabelsusers_work_report["English"]["estimated_designer_time"] = "Estimated Designer Time";
	$fieldToolTipsusers_work_report["English"]["estimated_designer_time"] = "";
	$fieldLabelsusers_work_report["English"]["designer_time"] = "Designer Time";
	$fieldToolTipsusers_work_report["English"]["designer_time"] = "";
	$fieldLabelsusers_work_report["English"]["total_images_counted_qc"] = "Total Images Counted Qc";
	$fieldToolTipsusers_work_report["English"]["total_images_counted_qc"] = "";
	$fieldLabelsusers_work_report["English"]["estimated_qc_time"] = "Estimated Qc Time";
	$fieldToolTipsusers_work_report["English"]["estimated_qc_time"] = "";
	$fieldLabelsusers_work_report["English"]["qc_time"] = "Qc Time";
	$fieldToolTipsusers_work_report["English"]["qc_time"] = "";
	$fieldLabelsusers_work_report["English"]["total_rejected_by_qc"] = "Total Rejected By Qc";
	$fieldToolTipsusers_work_report["English"]["total_rejected_by_qc"] = "";
	$fieldLabelsusers_work_report["English"]["total_rejected_by_qc_eta"] = "Total Rejected By Qc Eta";
	$fieldToolTipsusers_work_report["English"]["total_rejected_by_qc_eta"] = "";
	$fieldLabelsusers_work_report["English"]["total_rejected_by_qc_taken"] = "Total Rejected By Qc Taken";
	$fieldToolTipsusers_work_report["English"]["total_rejected_by_qc_taken"] = "";
	$fieldLabelsusers_work_report["English"]["total_rejected_by_customer"] = "Total Rejected By Customer";
	$fieldToolTipsusers_work_report["English"]["total_rejected_by_customer"] = "";
	$fieldLabelsusers_work_report["English"]["total_rejected_by_customer_eta"] = "Total Rejected By Customer Eta";
	$fieldToolTipsusers_work_report["English"]["total_rejected_by_customer_eta"] = "";
	$fieldLabelsusers_work_report["English"]["total_rejected_by_customer_taken"] = "Total Rejected By Customer Taken";
	$fieldToolTipsusers_work_report["English"]["total_rejected_by_customer_taken"] = "";
	$fieldLabelsusers_work_report["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsusers_work_report["English"]["efficiency"] = "";
	$fieldLabelsusers_work_report["English"]["work_type"] = "Work Type";
	$fieldToolTipsusers_work_report["English"]["work_type"] = "";
	$fieldLabelsusers_work_report["English"]["comments"] = "Comments";
	$fieldToolTipsusers_work_report["English"]["comments"] = "";
	$fieldLabelsusers_work_report["English"]["user_name"] = "User Name";
	$fieldToolTipsusers_work_report["English"]["user_name"] = "";
	if (count($fieldToolTipsusers_work_report["English"]))
		$tdatausers_work_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsusers_work_report[""] = array();
	$fieldToolTipsusers_work_report[""] = array();
	$pageTitlesusers_work_report[""] = array();
	$fieldLabelsusers_work_report[""]["report_id"] = "Report Id";
	$fieldToolTipsusers_work_report[""]["report_id"] = "";
	$fieldLabelsusers_work_report[""]["report_reference"] = "Report Reference";
	$fieldToolTipsusers_work_report[""]["report_reference"] = "";
	$fieldLabelsusers_work_report[""]["work_date"] = "Work Date";
	$fieldToolTipsusers_work_report[""]["work_date"] = "";
	$fieldLabelsusers_work_report[""]["team_id"] = "Team Id";
	$fieldToolTipsusers_work_report[""]["team_id"] = "";
	$fieldLabelsusers_work_report[""]["subdiv_id"] = "Subdiv Id";
	$fieldToolTipsusers_work_report[""]["subdiv_id"] = "";
	$fieldLabelsusers_work_report[""]["user_group"] = "User Group";
	$fieldToolTipsusers_work_report[""]["user_group"] = "";
	$fieldLabelsusers_work_report[""]["pdf_name"] = "Pdf Name";
	$fieldToolTipsusers_work_report[""]["pdf_name"] = "";
	$fieldLabelsusers_work_report[""]["total_images_counted_designer"] = "Total Images Counted Designer";
	$fieldToolTipsusers_work_report[""]["total_images_counted_designer"] = "";
	$fieldLabelsusers_work_report[""]["estimated_designer_time"] = "Estimated Designer Time";
	$fieldToolTipsusers_work_report[""]["estimated_designer_time"] = "";
	$fieldLabelsusers_work_report[""]["designer_time"] = "Designer Time";
	$fieldToolTipsusers_work_report[""]["designer_time"] = "";
	$fieldLabelsusers_work_report[""]["total_images_counted_qc"] = "Total Images Counted Qc";
	$fieldToolTipsusers_work_report[""]["total_images_counted_qc"] = "";
	$fieldLabelsusers_work_report[""]["estimated_qc_time"] = "Estimated Qc Time";
	$fieldToolTipsusers_work_report[""]["estimated_qc_time"] = "";
	$fieldLabelsusers_work_report[""]["qc_time"] = "Qc Time";
	$fieldToolTipsusers_work_report[""]["qc_time"] = "";
	$fieldLabelsusers_work_report[""]["total_rejected_by_qc"] = "Total Rejected By Qc";
	$fieldToolTipsusers_work_report[""]["total_rejected_by_qc"] = "";
	$fieldLabelsusers_work_report[""]["total_rejected_by_qc_eta"] = "Total Rejected By Qc Eta";
	$fieldToolTipsusers_work_report[""]["total_rejected_by_qc_eta"] = "";
	$fieldLabelsusers_work_report[""]["total_rejected_by_qc_taken"] = "Total Rejected By Qc Taken";
	$fieldToolTipsusers_work_report[""]["total_rejected_by_qc_taken"] = "";
	$fieldLabelsusers_work_report[""]["total_rejected_by_customer"] = "Total Rejected By Customer";
	$fieldToolTipsusers_work_report[""]["total_rejected_by_customer"] = "";
	$fieldLabelsusers_work_report[""]["total_rejected_by_customer_eta"] = "Total Rejected By Customer Eta";
	$fieldToolTipsusers_work_report[""]["total_rejected_by_customer_eta"] = "";
	$fieldLabelsusers_work_report[""]["total_rejected_by_customer_taken"] = "Total Rejected By Customer Taken";
	$fieldToolTipsusers_work_report[""]["total_rejected_by_customer_taken"] = "";
	$fieldLabelsusers_work_report[""]["efficiency"] = "Efficiency";
	$fieldToolTipsusers_work_report[""]["efficiency"] = "";
	$fieldLabelsusers_work_report[""]["work_type"] = "Work Type";
	$fieldToolTipsusers_work_report[""]["work_type"] = "";
	$fieldLabelsusers_work_report[""]["comments"] = "Comments";
	$fieldToolTipsusers_work_report[""]["comments"] = "";
	$fieldLabelsusers_work_report[""]["user_name"] = "User Name";
	$fieldToolTipsusers_work_report[""]["user_name"] = "";
	if (count($fieldToolTipsusers_work_report[""]))
		$tdatausers_work_report[".isUseToolTips"] = true;
}
	
	
	$tdatausers_work_report[".NCSearch"] = true;



$tdatausers_work_report[".shortTableName"] = "users_work_report";
$tdatausers_work_report[".nSecOptions"] = 0;
$tdatausers_work_report[".recsPerRowList"] = 1;
$tdatausers_work_report[".recsPerRowPrint"] = 1;
$tdatausers_work_report[".mainTableOwnerID"] = "";
$tdatausers_work_report[".moveNext"] = 1;
$tdatausers_work_report[".entityType"] = 0;

$tdatausers_work_report[".strOriginalTableName"] = "users_work_report";




$tdatausers_work_report[".showAddInPopup"] = false;

$tdatausers_work_report[".showEditInPopup"] = false;

$tdatausers_work_report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausers_work_report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatausers_work_report[".fieldsForRegister"] = array();

$tdatausers_work_report[".listAjax"] = false;

	$tdatausers_work_report[".audit"] = false;

	$tdatausers_work_report[".locking"] = false;

$tdatausers_work_report[".edit"] = true;
$tdatausers_work_report[".afterEditAction"] = 1;
$tdatausers_work_report[".closePopupAfterEdit"] = 1;
$tdatausers_work_report[".afterEditActionDetTable"] = "";

$tdatausers_work_report[".add"] = true;
$tdatausers_work_report[".afterAddAction"] = 1;
$tdatausers_work_report[".closePopupAfterAdd"] = 1;
$tdatausers_work_report[".afterAddActionDetTable"] = "";

$tdatausers_work_report[".list"] = true;

$tdatausers_work_report[".inlineEdit"] = true;
$tdatausers_work_report[".inlineAdd"] = true;
$tdatausers_work_report[".view"] = true;

$tdatausers_work_report[".import"] = true;

$tdatausers_work_report[".exportTo"] = true;

$tdatausers_work_report[".printFriendly"] = true;

$tdatausers_work_report[".delete"] = true;

$tdatausers_work_report[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatausers_work_report[".searchSaving"] = false;
//

$tdatausers_work_report[".showSearchPanel"] = true;
		$tdatausers_work_report[".flexibleSearch"] = true;		

if (isMobile())
	$tdatausers_work_report[".isUseAjaxSuggest"] = false;
else 
	$tdatausers_work_report[".isUseAjaxSuggest"] = true;

$tdatausers_work_report[".rowHighlite"] = true;


																																																																																																																																															
$tdatausers_work_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausers_work_report[".isUseTimeForSearch"] = false;





$tdatausers_work_report[".allSearchFields"] = array();
$tdatausers_work_report[".filterFields"] = array();
$tdatausers_work_report[".requiredSearchFields"] = array();

$tdatausers_work_report[".allSearchFields"][] = "report_id";
	$tdatausers_work_report[".allSearchFields"][] = "report_reference";
	$tdatausers_work_report[".allSearchFields"][] = "work_date";
	$tdatausers_work_report[".allSearchFields"][] = "user_name";
	$tdatausers_work_report[".allSearchFields"][] = "team_id";
	$tdatausers_work_report[".allSearchFields"][] = "subdiv_id";
	$tdatausers_work_report[".allSearchFields"][] = "user_group";
	$tdatausers_work_report[".allSearchFields"][] = "pdf_name";
	$tdatausers_work_report[".allSearchFields"][] = "total_images_counted_designer";
	$tdatausers_work_report[".allSearchFields"][] = "estimated_designer_time";
	$tdatausers_work_report[".allSearchFields"][] = "designer_time";
	$tdatausers_work_report[".allSearchFields"][] = "total_images_counted_qc";
	$tdatausers_work_report[".allSearchFields"][] = "estimated_qc_time";
	$tdatausers_work_report[".allSearchFields"][] = "qc_time";
	$tdatausers_work_report[".allSearchFields"][] = "total_rejected_by_qc";
	$tdatausers_work_report[".allSearchFields"][] = "total_rejected_by_qc_eta";
	$tdatausers_work_report[".allSearchFields"][] = "total_rejected_by_qc_taken";
	$tdatausers_work_report[".allSearchFields"][] = "total_rejected_by_customer";
	$tdatausers_work_report[".allSearchFields"][] = "total_rejected_by_customer_eta";
	$tdatausers_work_report[".allSearchFields"][] = "total_rejected_by_customer_taken";
	$tdatausers_work_report[".allSearchFields"][] = "efficiency";
	$tdatausers_work_report[".allSearchFields"][] = "work_type";
	$tdatausers_work_report[".allSearchFields"][] = "comments";
	

$tdatausers_work_report[".googleLikeFields"] = array();
$tdatausers_work_report[".googleLikeFields"][] = "report_id";
$tdatausers_work_report[".googleLikeFields"][] = "report_reference";
$tdatausers_work_report[".googleLikeFields"][] = "work_date";
$tdatausers_work_report[".googleLikeFields"][] = "user_name";
$tdatausers_work_report[".googleLikeFields"][] = "team_id";
$tdatausers_work_report[".googleLikeFields"][] = "subdiv_id";
$tdatausers_work_report[".googleLikeFields"][] = "user_group";
$tdatausers_work_report[".googleLikeFields"][] = "pdf_name";
$tdatausers_work_report[".googleLikeFields"][] = "total_images_counted_designer";
$tdatausers_work_report[".googleLikeFields"][] = "estimated_designer_time";
$tdatausers_work_report[".googleLikeFields"][] = "designer_time";
$tdatausers_work_report[".googleLikeFields"][] = "total_images_counted_qc";
$tdatausers_work_report[".googleLikeFields"][] = "estimated_qc_time";
$tdatausers_work_report[".googleLikeFields"][] = "qc_time";
$tdatausers_work_report[".googleLikeFields"][] = "total_rejected_by_qc";
$tdatausers_work_report[".googleLikeFields"][] = "total_rejected_by_qc_eta";
$tdatausers_work_report[".googleLikeFields"][] = "total_rejected_by_qc_taken";
$tdatausers_work_report[".googleLikeFields"][] = "total_rejected_by_customer";
$tdatausers_work_report[".googleLikeFields"][] = "total_rejected_by_customer_eta";
$tdatausers_work_report[".googleLikeFields"][] = "total_rejected_by_customer_taken";
$tdatausers_work_report[".googleLikeFields"][] = "efficiency";
$tdatausers_work_report[".googleLikeFields"][] = "work_type";
$tdatausers_work_report[".googleLikeFields"][] = "comments";


$tdatausers_work_report[".advSearchFields"] = array();
$tdatausers_work_report[".advSearchFields"][] = "report_id";
$tdatausers_work_report[".advSearchFields"][] = "report_reference";
$tdatausers_work_report[".advSearchFields"][] = "work_date";
$tdatausers_work_report[".advSearchFields"][] = "user_name";
$tdatausers_work_report[".advSearchFields"][] = "team_id";
$tdatausers_work_report[".advSearchFields"][] = "subdiv_id";
$tdatausers_work_report[".advSearchFields"][] = "user_group";
$tdatausers_work_report[".advSearchFields"][] = "pdf_name";
$tdatausers_work_report[".advSearchFields"][] = "total_images_counted_designer";
$tdatausers_work_report[".advSearchFields"][] = "estimated_designer_time";
$tdatausers_work_report[".advSearchFields"][] = "designer_time";
$tdatausers_work_report[".advSearchFields"][] = "total_images_counted_qc";
$tdatausers_work_report[".advSearchFields"][] = "estimated_qc_time";
$tdatausers_work_report[".advSearchFields"][] = "qc_time";
$tdatausers_work_report[".advSearchFields"][] = "total_rejected_by_qc";
$tdatausers_work_report[".advSearchFields"][] = "total_rejected_by_qc_eta";
$tdatausers_work_report[".advSearchFields"][] = "total_rejected_by_qc_taken";
$tdatausers_work_report[".advSearchFields"][] = "total_rejected_by_customer";
$tdatausers_work_report[".advSearchFields"][] = "total_rejected_by_customer_eta";
$tdatausers_work_report[".advSearchFields"][] = "total_rejected_by_customer_taken";
$tdatausers_work_report[".advSearchFields"][] = "efficiency";
$tdatausers_work_report[".advSearchFields"][] = "work_type";
$tdatausers_work_report[".advSearchFields"][] = "comments";

$tdatausers_work_report[".tableType"] = "list";

$tdatausers_work_report[".printerPageOrientation"] = 0;
$tdatausers_work_report[".nPrinterPageScale"] = 100;

$tdatausers_work_report[".nPrinterSplitRecords"] = 40;

$tdatausers_work_report[".nPrinterPDFSplitRecords"] = 40;



$tdatausers_work_report[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatausers_work_report[".pageSize"] = 20;

$tdatausers_work_report[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausers_work_report[".strOrderBy"] = $tstrOrderBy;

$tdatausers_work_report[".orderindexes"] = array();

$tdatausers_work_report[".sqlHead"] = "SELECT report_id,  	report_reference,  	work_date,  	user_name,  	team_id,  	subdiv_id,  	user_group,  	pdf_name,  	total_images_counted_designer,  	estimated_designer_time,  	designer_time,  	total_images_counted_qc,  	estimated_qc_time,  	qc_time,  	total_rejected_by_qc,  	total_rejected_by_qc_eta,  	total_rejected_by_qc_taken,  	total_rejected_by_customer,  	total_rejected_by_customer_eta,  	total_rejected_by_customer_taken,  	efficiency,  	work_type,  	comments";
$tdatausers_work_report[".sqlFrom"] = "FROM users_work_report";
$tdatausers_work_report[".sqlWhereExpr"] = "";
$tdatausers_work_report[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausers_work_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausers_work_report[".arrGroupsPerPage"] = $arrGPP;

$tdatausers_work_report[".highlightSearchResults"] = true;

$tableKeysusers_work_report = array();
$tableKeysusers_work_report[] = "report_id";
$tdatausers_work_report[".Keys"] = $tableKeysusers_work_report;

$tdatausers_work_report[".listFields"] = array();
$tdatausers_work_report[".listFields"][] = "report_id";
$tdatausers_work_report[".listFields"][] = "report_reference";
$tdatausers_work_report[".listFields"][] = "work_date";
$tdatausers_work_report[".listFields"][] = "user_name";
$tdatausers_work_report[".listFields"][] = "team_id";
$tdatausers_work_report[".listFields"][] = "subdiv_id";
$tdatausers_work_report[".listFields"][] = "user_group";
$tdatausers_work_report[".listFields"][] = "pdf_name";
$tdatausers_work_report[".listFields"][] = "total_images_counted_designer";
$tdatausers_work_report[".listFields"][] = "estimated_designer_time";
$tdatausers_work_report[".listFields"][] = "designer_time";
$tdatausers_work_report[".listFields"][] = "total_images_counted_qc";
$tdatausers_work_report[".listFields"][] = "estimated_qc_time";
$tdatausers_work_report[".listFields"][] = "qc_time";
$tdatausers_work_report[".listFields"][] = "total_rejected_by_qc";
$tdatausers_work_report[".listFields"][] = "total_rejected_by_qc_eta";
$tdatausers_work_report[".listFields"][] = "total_rejected_by_qc_taken";
$tdatausers_work_report[".listFields"][] = "total_rejected_by_customer";
$tdatausers_work_report[".listFields"][] = "total_rejected_by_customer_eta";
$tdatausers_work_report[".listFields"][] = "total_rejected_by_customer_taken";
$tdatausers_work_report[".listFields"][] = "efficiency";
$tdatausers_work_report[".listFields"][] = "work_type";
$tdatausers_work_report[".listFields"][] = "comments";

$tdatausers_work_report[".hideMobileList"] = array();


$tdatausers_work_report[".viewFields"] = array();
$tdatausers_work_report[".viewFields"][] = "report_id";
$tdatausers_work_report[".viewFields"][] = "report_reference";
$tdatausers_work_report[".viewFields"][] = "work_date";
$tdatausers_work_report[".viewFields"][] = "user_name";
$tdatausers_work_report[".viewFields"][] = "team_id";
$tdatausers_work_report[".viewFields"][] = "subdiv_id";
$tdatausers_work_report[".viewFields"][] = "user_group";
$tdatausers_work_report[".viewFields"][] = "pdf_name";
$tdatausers_work_report[".viewFields"][] = "total_images_counted_designer";
$tdatausers_work_report[".viewFields"][] = "estimated_designer_time";
$tdatausers_work_report[".viewFields"][] = "designer_time";
$tdatausers_work_report[".viewFields"][] = "total_images_counted_qc";
$tdatausers_work_report[".viewFields"][] = "estimated_qc_time";
$tdatausers_work_report[".viewFields"][] = "qc_time";
$tdatausers_work_report[".viewFields"][] = "total_rejected_by_qc";
$tdatausers_work_report[".viewFields"][] = "total_rejected_by_qc_eta";
$tdatausers_work_report[".viewFields"][] = "total_rejected_by_qc_taken";
$tdatausers_work_report[".viewFields"][] = "total_rejected_by_customer";
$tdatausers_work_report[".viewFields"][] = "total_rejected_by_customer_eta";
$tdatausers_work_report[".viewFields"][] = "total_rejected_by_customer_taken";
$tdatausers_work_report[".viewFields"][] = "efficiency";
$tdatausers_work_report[".viewFields"][] = "work_type";
$tdatausers_work_report[".viewFields"][] = "comments";

$tdatausers_work_report[".addFields"] = array();
$tdatausers_work_report[".addFields"][] = "report_reference";
$tdatausers_work_report[".addFields"][] = "work_date";
$tdatausers_work_report[".addFields"][] = "user_name";
$tdatausers_work_report[".addFields"][] = "team_id";
$tdatausers_work_report[".addFields"][] = "subdiv_id";
$tdatausers_work_report[".addFields"][] = "user_group";
$tdatausers_work_report[".addFields"][] = "pdf_name";
$tdatausers_work_report[".addFields"][] = "total_images_counted_designer";
$tdatausers_work_report[".addFields"][] = "estimated_designer_time";
$tdatausers_work_report[".addFields"][] = "designer_time";
$tdatausers_work_report[".addFields"][] = "total_images_counted_qc";
$tdatausers_work_report[".addFields"][] = "estimated_qc_time";
$tdatausers_work_report[".addFields"][] = "qc_time";
$tdatausers_work_report[".addFields"][] = "total_rejected_by_qc";
$tdatausers_work_report[".addFields"][] = "total_rejected_by_qc_eta";
$tdatausers_work_report[".addFields"][] = "total_rejected_by_qc_taken";
$tdatausers_work_report[".addFields"][] = "total_rejected_by_customer";
$tdatausers_work_report[".addFields"][] = "total_rejected_by_customer_eta";
$tdatausers_work_report[".addFields"][] = "total_rejected_by_customer_taken";
$tdatausers_work_report[".addFields"][] = "efficiency";
$tdatausers_work_report[".addFields"][] = "work_type";
$tdatausers_work_report[".addFields"][] = "comments";

$tdatausers_work_report[".masterListFields"] = array();
$tdatausers_work_report[".masterListFields"][] = "report_id";
$tdatausers_work_report[".masterListFields"][] = "report_reference";
$tdatausers_work_report[".masterListFields"][] = "work_date";
$tdatausers_work_report[".masterListFields"][] = "user_name";
$tdatausers_work_report[".masterListFields"][] = "team_id";
$tdatausers_work_report[".masterListFields"][] = "subdiv_id";
$tdatausers_work_report[".masterListFields"][] = "user_group";
$tdatausers_work_report[".masterListFields"][] = "pdf_name";
$tdatausers_work_report[".masterListFields"][] = "total_images_counted_designer";
$tdatausers_work_report[".masterListFields"][] = "estimated_designer_time";
$tdatausers_work_report[".masterListFields"][] = "designer_time";
$tdatausers_work_report[".masterListFields"][] = "total_images_counted_qc";
$tdatausers_work_report[".masterListFields"][] = "estimated_qc_time";
$tdatausers_work_report[".masterListFields"][] = "qc_time";
$tdatausers_work_report[".masterListFields"][] = "total_rejected_by_qc";
$tdatausers_work_report[".masterListFields"][] = "total_rejected_by_qc_eta";
$tdatausers_work_report[".masterListFields"][] = "total_rejected_by_qc_taken";
$tdatausers_work_report[".masterListFields"][] = "total_rejected_by_customer";
$tdatausers_work_report[".masterListFields"][] = "total_rejected_by_customer_eta";
$tdatausers_work_report[".masterListFields"][] = "total_rejected_by_customer_taken";
$tdatausers_work_report[".masterListFields"][] = "efficiency";
$tdatausers_work_report[".masterListFields"][] = "work_type";
$tdatausers_work_report[".masterListFields"][] = "comments";

$tdatausers_work_report[".inlineAddFields"] = array();
$tdatausers_work_report[".inlineAddFields"][] = "report_reference";
$tdatausers_work_report[".inlineAddFields"][] = "work_date";
$tdatausers_work_report[".inlineAddFields"][] = "user_name";
$tdatausers_work_report[".inlineAddFields"][] = "team_id";
$tdatausers_work_report[".inlineAddFields"][] = "subdiv_id";
$tdatausers_work_report[".inlineAddFields"][] = "user_group";
$tdatausers_work_report[".inlineAddFields"][] = "pdf_name";
$tdatausers_work_report[".inlineAddFields"][] = "total_images_counted_designer";
$tdatausers_work_report[".inlineAddFields"][] = "estimated_designer_time";
$tdatausers_work_report[".inlineAddFields"][] = "designer_time";
$tdatausers_work_report[".inlineAddFields"][] = "total_images_counted_qc";
$tdatausers_work_report[".inlineAddFields"][] = "estimated_qc_time";
$tdatausers_work_report[".inlineAddFields"][] = "qc_time";
$tdatausers_work_report[".inlineAddFields"][] = "total_rejected_by_qc";
$tdatausers_work_report[".inlineAddFields"][] = "total_rejected_by_qc_eta";
$tdatausers_work_report[".inlineAddFields"][] = "total_rejected_by_qc_taken";
$tdatausers_work_report[".inlineAddFields"][] = "total_rejected_by_customer";
$tdatausers_work_report[".inlineAddFields"][] = "total_rejected_by_customer_eta";
$tdatausers_work_report[".inlineAddFields"][] = "total_rejected_by_customer_taken";
$tdatausers_work_report[".inlineAddFields"][] = "efficiency";
$tdatausers_work_report[".inlineAddFields"][] = "work_type";
$tdatausers_work_report[".inlineAddFields"][] = "comments";

$tdatausers_work_report[".editFields"] = array();
$tdatausers_work_report[".editFields"][] = "report_reference";
$tdatausers_work_report[".editFields"][] = "work_date";
$tdatausers_work_report[".editFields"][] = "user_name";
$tdatausers_work_report[".editFields"][] = "team_id";
$tdatausers_work_report[".editFields"][] = "subdiv_id";
$tdatausers_work_report[".editFields"][] = "user_group";
$tdatausers_work_report[".editFields"][] = "pdf_name";
$tdatausers_work_report[".editFields"][] = "total_images_counted_designer";
$tdatausers_work_report[".editFields"][] = "estimated_designer_time";
$tdatausers_work_report[".editFields"][] = "designer_time";
$tdatausers_work_report[".editFields"][] = "total_images_counted_qc";
$tdatausers_work_report[".editFields"][] = "estimated_qc_time";
$tdatausers_work_report[".editFields"][] = "qc_time";
$tdatausers_work_report[".editFields"][] = "total_rejected_by_qc";
$tdatausers_work_report[".editFields"][] = "total_rejected_by_qc_eta";
$tdatausers_work_report[".editFields"][] = "total_rejected_by_qc_taken";
$tdatausers_work_report[".editFields"][] = "total_rejected_by_customer";
$tdatausers_work_report[".editFields"][] = "total_rejected_by_customer_eta";
$tdatausers_work_report[".editFields"][] = "total_rejected_by_customer_taken";
$tdatausers_work_report[".editFields"][] = "efficiency";
$tdatausers_work_report[".editFields"][] = "work_type";
$tdatausers_work_report[".editFields"][] = "comments";

$tdatausers_work_report[".inlineEditFields"] = array();
$tdatausers_work_report[".inlineEditFields"][] = "report_reference";
$tdatausers_work_report[".inlineEditFields"][] = "work_date";
$tdatausers_work_report[".inlineEditFields"][] = "user_name";
$tdatausers_work_report[".inlineEditFields"][] = "team_id";
$tdatausers_work_report[".inlineEditFields"][] = "subdiv_id";
$tdatausers_work_report[".inlineEditFields"][] = "user_group";
$tdatausers_work_report[".inlineEditFields"][] = "pdf_name";
$tdatausers_work_report[".inlineEditFields"][] = "total_images_counted_designer";
$tdatausers_work_report[".inlineEditFields"][] = "estimated_designer_time";
$tdatausers_work_report[".inlineEditFields"][] = "designer_time";
$tdatausers_work_report[".inlineEditFields"][] = "total_images_counted_qc";
$tdatausers_work_report[".inlineEditFields"][] = "estimated_qc_time";
$tdatausers_work_report[".inlineEditFields"][] = "qc_time";
$tdatausers_work_report[".inlineEditFields"][] = "total_rejected_by_qc";
$tdatausers_work_report[".inlineEditFields"][] = "total_rejected_by_qc_eta";
$tdatausers_work_report[".inlineEditFields"][] = "total_rejected_by_qc_taken";
$tdatausers_work_report[".inlineEditFields"][] = "total_rejected_by_customer";
$tdatausers_work_report[".inlineEditFields"][] = "total_rejected_by_customer_eta";
$tdatausers_work_report[".inlineEditFields"][] = "total_rejected_by_customer_taken";
$tdatausers_work_report[".inlineEditFields"][] = "efficiency";
$tdatausers_work_report[".inlineEditFields"][] = "work_type";
$tdatausers_work_report[".inlineEditFields"][] = "comments";

$tdatausers_work_report[".exportFields"] = array();
$tdatausers_work_report[".exportFields"][] = "report_id";
$tdatausers_work_report[".exportFields"][] = "report_reference";
$tdatausers_work_report[".exportFields"][] = "work_date";
$tdatausers_work_report[".exportFields"][] = "user_name";
$tdatausers_work_report[".exportFields"][] = "team_id";
$tdatausers_work_report[".exportFields"][] = "subdiv_id";
$tdatausers_work_report[".exportFields"][] = "user_group";
$tdatausers_work_report[".exportFields"][] = "pdf_name";
$tdatausers_work_report[".exportFields"][] = "total_images_counted_designer";
$tdatausers_work_report[".exportFields"][] = "estimated_designer_time";
$tdatausers_work_report[".exportFields"][] = "designer_time";
$tdatausers_work_report[".exportFields"][] = "total_images_counted_qc";
$tdatausers_work_report[".exportFields"][] = "estimated_qc_time";
$tdatausers_work_report[".exportFields"][] = "qc_time";
$tdatausers_work_report[".exportFields"][] = "total_rejected_by_qc";
$tdatausers_work_report[".exportFields"][] = "total_rejected_by_qc_eta";
$tdatausers_work_report[".exportFields"][] = "total_rejected_by_qc_taken";
$tdatausers_work_report[".exportFields"][] = "total_rejected_by_customer";
$tdatausers_work_report[".exportFields"][] = "total_rejected_by_customer_eta";
$tdatausers_work_report[".exportFields"][] = "total_rejected_by_customer_taken";
$tdatausers_work_report[".exportFields"][] = "efficiency";
$tdatausers_work_report[".exportFields"][] = "work_type";
$tdatausers_work_report[".exportFields"][] = "comments";

$tdatausers_work_report[".importFields"] = array();
$tdatausers_work_report[".importFields"][] = "report_id";
$tdatausers_work_report[".importFields"][] = "report_reference";
$tdatausers_work_report[".importFields"][] = "work_date";
$tdatausers_work_report[".importFields"][] = "user_name";
$tdatausers_work_report[".importFields"][] = "team_id";
$tdatausers_work_report[".importFields"][] = "subdiv_id";
$tdatausers_work_report[".importFields"][] = "user_group";
$tdatausers_work_report[".importFields"][] = "pdf_name";
$tdatausers_work_report[".importFields"][] = "total_images_counted_designer";
$tdatausers_work_report[".importFields"][] = "estimated_designer_time";
$tdatausers_work_report[".importFields"][] = "designer_time";
$tdatausers_work_report[".importFields"][] = "total_images_counted_qc";
$tdatausers_work_report[".importFields"][] = "estimated_qc_time";
$tdatausers_work_report[".importFields"][] = "qc_time";
$tdatausers_work_report[".importFields"][] = "total_rejected_by_qc";
$tdatausers_work_report[".importFields"][] = "total_rejected_by_qc_eta";
$tdatausers_work_report[".importFields"][] = "total_rejected_by_qc_taken";
$tdatausers_work_report[".importFields"][] = "total_rejected_by_customer";
$tdatausers_work_report[".importFields"][] = "total_rejected_by_customer_eta";
$tdatausers_work_report[".importFields"][] = "total_rejected_by_customer_taken";
$tdatausers_work_report[".importFields"][] = "efficiency";
$tdatausers_work_report[".importFields"][] = "work_type";
$tdatausers_work_report[".importFields"][] = "comments";

$tdatausers_work_report[".printFields"] = array();
$tdatausers_work_report[".printFields"][] = "report_id";
$tdatausers_work_report[".printFields"][] = "report_reference";
$tdatausers_work_report[".printFields"][] = "work_date";
$tdatausers_work_report[".printFields"][] = "user_name";
$tdatausers_work_report[".printFields"][] = "team_id";
$tdatausers_work_report[".printFields"][] = "subdiv_id";
$tdatausers_work_report[".printFields"][] = "user_group";
$tdatausers_work_report[".printFields"][] = "pdf_name";
$tdatausers_work_report[".printFields"][] = "total_images_counted_designer";
$tdatausers_work_report[".printFields"][] = "estimated_designer_time";
$tdatausers_work_report[".printFields"][] = "designer_time";
$tdatausers_work_report[".printFields"][] = "total_images_counted_qc";
$tdatausers_work_report[".printFields"][] = "estimated_qc_time";
$tdatausers_work_report[".printFields"][] = "qc_time";
$tdatausers_work_report[".printFields"][] = "total_rejected_by_qc";
$tdatausers_work_report[".printFields"][] = "total_rejected_by_qc_eta";
$tdatausers_work_report[".printFields"][] = "total_rejected_by_qc_taken";
$tdatausers_work_report[".printFields"][] = "total_rejected_by_customer";
$tdatausers_work_report[".printFields"][] = "total_rejected_by_customer_eta";
$tdatausers_work_report[".printFields"][] = "total_rejected_by_customer_taken";
$tdatausers_work_report[".printFields"][] = "efficiency";
$tdatausers_work_report[".printFields"][] = "work_type";
$tdatausers_work_report[".printFields"][] = "comments";

//	report_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "report_id";
	$fdata["GoodName"] = "report_id";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","report_id"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "report_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "report_id";
	
		
		
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

	

	
	$tdatausers_work_report["report_id"] = $fdata;
//	report_reference
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "report_reference";
	$fdata["GoodName"] = "report_reference";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","report_reference"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "report_reference"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "report_reference";
	
		
		
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

	

	
	$tdatausers_work_report["report_reference"] = $fdata;
//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","work_date"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatausers_work_report["work_date"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","user_name"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
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

	

	
	$tdatausers_work_report["user_name"] = $fdata;
//	team_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "team_id";
	$fdata["GoodName"] = "team_id";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","team_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
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

	

	
	$tdatausers_work_report["team_id"] = $fdata;
//	subdiv_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "subdiv_id";
	$fdata["GoodName"] = "subdiv_id";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","subdiv_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
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

	

	
	$tdatausers_work_report["subdiv_id"] = $fdata;
//	user_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "user_group";
	$fdata["GoodName"] = "user_group";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","user_group"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
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

	

	
	$tdatausers_work_report["user_group"] = $fdata;
//	pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "pdf_name";
	$fdata["GoodName"] = "pdf_name";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","pdf_name"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
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

	

	
	$tdatausers_work_report["pdf_name"] = $fdata;
//	total_images_counted_designer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "total_images_counted_designer";
	$fdata["GoodName"] = "total_images_counted_designer";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","total_images_counted_designer"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_images_counted_designer"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_images_counted_designer";
	
		
		
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

	

	
	$tdatausers_work_report["total_images_counted_designer"] = $fdata;
//	estimated_designer_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "estimated_designer_time";
	$fdata["GoodName"] = "estimated_designer_time";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","estimated_designer_time"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "estimated_designer_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estimated_designer_time";
	
		
		
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

	

	
	$tdatausers_work_report["estimated_designer_time"] = $fdata;
//	designer_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "designer_time";
	$fdata["GoodName"] = "designer_time";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","designer_time"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
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
	$fdata["FullName"] = "designer_time";
	
		
		
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

	

	
	$tdatausers_work_report["designer_time"] = $fdata;
//	total_images_counted_qc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "total_images_counted_qc";
	$fdata["GoodName"] = "total_images_counted_qc";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","total_images_counted_qc"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_images_counted_qc"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_images_counted_qc";
	
		
		
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

	

	
	$tdatausers_work_report["total_images_counted_qc"] = $fdata;
//	estimated_qc_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "estimated_qc_time";
	$fdata["GoodName"] = "estimated_qc_time";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","estimated_qc_time"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "estimated_qc_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estimated_qc_time";
	
		
		
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

	

	
	$tdatausers_work_report["estimated_qc_time"] = $fdata;
//	qc_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "qc_time";
	$fdata["GoodName"] = "qc_time";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","qc_time"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
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
	$fdata["FullName"] = "qc_time";
	
		
		
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

	

	
	$tdatausers_work_report["qc_time"] = $fdata;
//	total_rejected_by_qc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "total_rejected_by_qc";
	$fdata["GoodName"] = "total_rejected_by_qc";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","total_rejected_by_qc"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_rejected_by_qc"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_rejected_by_qc";
	
		
		
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

	

	
	$tdatausers_work_report["total_rejected_by_qc"] = $fdata;
//	total_rejected_by_qc_eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "total_rejected_by_qc_eta";
	$fdata["GoodName"] = "total_rejected_by_qc_eta";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","total_rejected_by_qc_eta"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_rejected_by_qc_eta"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_rejected_by_qc_eta";
	
		
		
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

	

	
	$tdatausers_work_report["total_rejected_by_qc_eta"] = $fdata;
//	total_rejected_by_qc_taken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "total_rejected_by_qc_taken";
	$fdata["GoodName"] = "total_rejected_by_qc_taken";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","total_rejected_by_qc_taken"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_rejected_by_qc_taken"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_rejected_by_qc_taken";
	
		
		
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

	

	
	$tdatausers_work_report["total_rejected_by_qc_taken"] = $fdata;
//	total_rejected_by_customer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "total_rejected_by_customer";
	$fdata["GoodName"] = "total_rejected_by_customer";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","total_rejected_by_customer"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_rejected_by_customer"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_rejected_by_customer";
	
		
		
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

	

	
	$tdatausers_work_report["total_rejected_by_customer"] = $fdata;
//	total_rejected_by_customer_eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "total_rejected_by_customer_eta";
	$fdata["GoodName"] = "total_rejected_by_customer_eta";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","total_rejected_by_customer_eta"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_rejected_by_customer_eta"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_rejected_by_customer_eta";
	
		
		
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

	

	
	$tdatausers_work_report["total_rejected_by_customer_eta"] = $fdata;
//	total_rejected_by_customer_taken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "total_rejected_by_customer_taken";
	$fdata["GoodName"] = "total_rejected_by_customer_taken";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","total_rejected_by_customer_taken"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_rejected_by_customer_taken"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_rejected_by_customer_taken";
	
		
		
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

	

	
	$tdatausers_work_report["total_rejected_by_customer_taken"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","efficiency"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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

	

	
	$tdatausers_work_report["efficiency"] = $fdata;
//	work_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "work_type";
	$fdata["GoodName"] = "work_type";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","work_type"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
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

	

	
	$tdatausers_work_report["work_type"] = $fdata;
//	comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "comments";
	$fdata["GoodName"] = "comments";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("users_work_report","comments"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
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

	

	
	$tdatausers_work_report["comments"] = $fdata;

	
$tables_data["users_work_report"]=&$tdatausers_work_report;
$field_labels["users_work_report"] = &$fieldLabelsusers_work_report;
$fieldToolTips["users_work_report"] = &$fieldToolTipsusers_work_report;
$page_titles["users_work_report"] = &$pageTitlesusers_work_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["users_work_report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["users_work_report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_users_work_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "report_id,  	report_reference,  	work_date,  	user_name,  	team_id,  	subdiv_id,  	user_group,  	pdf_name,  	total_images_counted_designer,  	estimated_designer_time,  	designer_time,  	total_images_counted_qc,  	estimated_qc_time,  	qc_time,  	total_rejected_by_qc,  	total_rejected_by_qc_eta,  	total_rejected_by_qc_taken,  	total_rejected_by_customer,  	total_rejected_by_customer_eta,  	total_rejected_by_customer_taken,  	efficiency,  	work_type,  	comments";
$proto0["m_strFrom"] = "FROM users_work_report";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
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
	"m_srcTableName" => "users_work_report"
));

$proto5["m_sql"] = "report_id";
$proto5["m_srcTableName"] = "users_work_report";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "report_reference",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto7["m_sql"] = "report_reference";
$proto7["m_srcTableName"] = "users_work_report";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto9["m_sql"] = "work_date";
$proto9["m_srcTableName"] = "users_work_report";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto11["m_sql"] = "user_name";
$proto11["m_srcTableName"] = "users_work_report";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto13["m_sql"] = "team_id";
$proto13["m_srcTableName"] = "users_work_report";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "subdiv_id",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto15["m_sql"] = "subdiv_id";
$proto15["m_srcTableName"] = "users_work_report";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "user_group",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto17["m_sql"] = "user_group";
$proto17["m_srcTableName"] = "users_work_report";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto19["m_sql"] = "pdf_name";
$proto19["m_srcTableName"] = "users_work_report";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "total_images_counted_designer",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto21["m_sql"] = "total_images_counted_designer";
$proto21["m_srcTableName"] = "users_work_report";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "estimated_designer_time",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto23["m_sql"] = "estimated_designer_time";
$proto23["m_srcTableName"] = "users_work_report";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_time",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto25["m_sql"] = "designer_time";
$proto25["m_srcTableName"] = "users_work_report";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "total_images_counted_qc",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto27["m_sql"] = "total_images_counted_qc";
$proto27["m_srcTableName"] = "users_work_report";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "estimated_qc_time",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto29["m_sql"] = "estimated_qc_time";
$proto29["m_srcTableName"] = "users_work_report";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "qc_time",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto31["m_sql"] = "qc_time";
$proto31["m_srcTableName"] = "users_work_report";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "total_rejected_by_qc",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto33["m_sql"] = "total_rejected_by_qc";
$proto33["m_srcTableName"] = "users_work_report";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "total_rejected_by_qc_eta",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto35["m_sql"] = "total_rejected_by_qc_eta";
$proto35["m_srcTableName"] = "users_work_report";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "total_rejected_by_qc_taken",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto37["m_sql"] = "total_rejected_by_qc_taken";
$proto37["m_srcTableName"] = "users_work_report";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "total_rejected_by_customer",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto39["m_sql"] = "total_rejected_by_customer";
$proto39["m_srcTableName"] = "users_work_report";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "total_rejected_by_customer_eta",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto41["m_sql"] = "total_rejected_by_customer_eta";
$proto41["m_srcTableName"] = "users_work_report";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "total_rejected_by_customer_taken",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto43["m_sql"] = "total_rejected_by_customer_taken";
$proto43["m_srcTableName"] = "users_work_report";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "efficiency",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto45["m_sql"] = "efficiency";
$proto45["m_srcTableName"] = "users_work_report";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto47["m_sql"] = "work_type";
$proto47["m_srcTableName"] = "users_work_report";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "comments",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "users_work_report"
));

$proto49["m_sql"] = "comments";
$proto49["m_srcTableName"] = "users_work_report";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto51=array();
$proto51["m_link"] = "SQLL_MAIN";
			$proto52=array();
$proto52["m_strName"] = "users_work_report";
$proto52["m_srcTableName"] = "users_work_report";
$proto52["m_columns"] = array();
$proto52["m_columns"][] = "report_id";
$proto52["m_columns"][] = "report_reference";
$proto52["m_columns"][] = "work_date";
$proto52["m_columns"][] = "user_name";
$proto52["m_columns"][] = "team_id";
$proto52["m_columns"][] = "subdiv_id";
$proto52["m_columns"][] = "user_group";
$proto52["m_columns"][] = "pdf_name";
$proto52["m_columns"][] = "total_images_counted_designer";
$proto52["m_columns"][] = "estimated_designer_time";
$proto52["m_columns"][] = "designer_time";
$proto52["m_columns"][] = "total_images_counted_qc";
$proto52["m_columns"][] = "estimated_qc_time";
$proto52["m_columns"][] = "qc_time";
$proto52["m_columns"][] = "total_rejected_by_qc";
$proto52["m_columns"][] = "total_rejected_by_qc_eta";
$proto52["m_columns"][] = "total_rejected_by_qc_taken";
$proto52["m_columns"][] = "total_rejected_by_customer";
$proto52["m_columns"][] = "total_rejected_by_customer_eta";
$proto52["m_columns"][] = "total_rejected_by_customer_taken";
$proto52["m_columns"][] = "efficiency";
$proto52["m_columns"][] = "work_type";
$proto52["m_columns"][] = "comments";
$obj = new SQLTable($proto52);

$proto51["m_table"] = $obj;
$proto51["m_sql"] = "users_work_report";
$proto51["m_alias"] = "";
$proto51["m_srcTableName"] = "users_work_report";
$proto53=array();
$proto53["m_sql"] = "";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = "";
$proto53["m_havingmode"] = false;
$proto53["m_inBrackets"] = false;
$proto53["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto53);

$proto51["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto51);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="users_work_report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_users_work_report = createSqlQuery_users_work_report();


	
																							
	
$tdatausers_work_report[".sqlquery"] = $queryData_users_work_report;

$tableEvents["users_work_report"] = new eventsBase;
$tdatausers_work_report[".hasEvents"] = false;

?>