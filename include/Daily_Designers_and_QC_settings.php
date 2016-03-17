<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDaily_Designers_and_QC = array();	
	$tdataDaily_Designers_and_QC[".truncateText"] = true;
	$tdataDaily_Designers_and_QC[".NumberOfChars"] = 256; 
	$tdataDaily_Designers_and_QC[".ShortName"] = "Daily_Designers_and_QC";
	$tdataDaily_Designers_and_QC[".OwnerID"] = "";
	$tdataDaily_Designers_and_QC[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsDaily_Designers_and_QC = array();
$fieldToolTipsDaily_Designers_and_QC = array();
$pageTitlesDaily_Designers_and_QC = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDaily_Designers_and_QC["English"] = array();
	$fieldToolTipsDaily_Designers_and_QC["English"] = array();
	$pageTitlesDaily_Designers_and_QC["English"] = array();
	$fieldLabelsDaily_Designers_and_QC["English"]["work_date"] = "Work Date";
	$fieldToolTipsDaily_Designers_and_QC["English"]["work_date"] = "";
	$fieldLabelsDaily_Designers_and_QC["English"]["team_id"] = "Team Id";
	$fieldToolTipsDaily_Designers_and_QC["English"]["team_id"] = "";
	$fieldLabelsDaily_Designers_and_QC["English"]["designer_name"] = "Designer Name";
	$fieldToolTipsDaily_Designers_and_QC["English"]["designer_name"] = "";
	$fieldLabelsDaily_Designers_and_QC["English"]["total_images"] = "Total Images";
	$fieldToolTipsDaily_Designers_and_QC["English"]["total_images"] = "";
	$fieldLabelsDaily_Designers_and_QC["English"]["work_type"] = "Work Type";
	$fieldToolTipsDaily_Designers_and_QC["English"]["work_type"] = "";
	$fieldLabelsDaily_Designers_and_QC["English"]["done_date"] = "Done Date";
	$fieldToolTipsDaily_Designers_and_QC["English"]["done_date"] = "";
	$fieldLabelsDaily_Designers_and_QC["English"]["done_Week"] = "Done Week";
	$fieldToolTipsDaily_Designers_and_QC["English"]["done_Week"] = "";
	$fieldLabelsDaily_Designers_and_QC["English"]["user_group"] = "User Group";
	$fieldToolTipsDaily_Designers_and_QC["English"]["user_group"] = "";
	$fieldLabelsDaily_Designers_and_QC["English"]["designer_Total_time"] = "Designer Total Time";
	$fieldToolTipsDaily_Designers_and_QC["English"]["designer_Total_time"] = "";
	$fieldLabelsDaily_Designers_and_QC["English"]["designer_Taken_Avg"] = "Designer Taken Avg";
	$fieldToolTipsDaily_Designers_and_QC["English"]["designer_Taken_Avg"] = "";
	$fieldLabelsDaily_Designers_and_QC["English"]["qc_Total_time"] = "Qc Total Time";
	$fieldToolTipsDaily_Designers_and_QC["English"]["qc_Total_time"] = "";
	$fieldLabelsDaily_Designers_and_QC["English"]["designer_eta_total"] = "Designer Eta Total";
	$fieldToolTipsDaily_Designers_and_QC["English"]["designer_eta_total"] = "";
	$fieldLabelsDaily_Designers_and_QC["English"]["designer_eta_Avg"] = "Designer Eta Avg";
	$fieldToolTipsDaily_Designers_and_QC["English"]["designer_eta_Avg"] = "";
	$fieldLabelsDaily_Designers_and_QC["English"]["designer_efficiency"] = "Designer Efficiency";
	$fieldToolTipsDaily_Designers_and_QC["English"]["designer_efficiency"] = "";
	$fieldLabelsDaily_Designers_and_QC["English"]["qc_Taken_Avg"] = "Qc Taken Avg";
	$fieldToolTipsDaily_Designers_and_QC["English"]["qc_Taken_Avg"] = "";
	$fieldLabelsDaily_Designers_and_QC["English"]["designer_performence"] = "Designer Performence";
	$fieldToolTipsDaily_Designers_and_QC["English"]["designer_performence"] = "";
	if (count($fieldToolTipsDaily_Designers_and_QC["English"]))
		$tdataDaily_Designers_and_QC[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDaily_Designers_and_QC[""] = array();
	$fieldToolTipsDaily_Designers_and_QC[""] = array();
	$pageTitlesDaily_Designers_and_QC[""] = array();
	$fieldLabelsDaily_Designers_and_QC[""]["user_group"] = "User Group";
	$fieldToolTipsDaily_Designers_and_QC[""]["user_group"] = "";
	$fieldLabelsDaily_Designers_and_QC[""]["designer_Total_time"] = "Designer Total Time";
	$fieldToolTipsDaily_Designers_and_QC[""]["designer_Total_time"] = "";
	$fieldLabelsDaily_Designers_and_QC[""]["designer_Taken_Avg"] = "Designer Taken Avg";
	$fieldToolTipsDaily_Designers_and_QC[""]["designer_Taken_Avg"] = "";
	$fieldLabelsDaily_Designers_and_QC[""]["qc_Total_time"] = "Qc Total Time";
	$fieldToolTipsDaily_Designers_and_QC[""]["qc_Total_time"] = "";
	$fieldLabelsDaily_Designers_and_QC[""]["designer_eta_total"] = "Designer Eta Total";
	$fieldToolTipsDaily_Designers_and_QC[""]["designer_eta_total"] = "";
	$fieldLabelsDaily_Designers_and_QC[""]["designer_eta_Avg"] = "Designer Eta Avg";
	$fieldToolTipsDaily_Designers_and_QC[""]["designer_eta_Avg"] = "";
	$fieldLabelsDaily_Designers_and_QC[""]["designer_efficiency"] = "Designer Efficiency";
	$fieldToolTipsDaily_Designers_and_QC[""]["designer_efficiency"] = "";
	$fieldLabelsDaily_Designers_and_QC[""]["qc_Taken_Avg"] = "Qc Taken Avg";
	$fieldToolTipsDaily_Designers_and_QC[""]["qc_Taken_Avg"] = "";
	$fieldLabelsDaily_Designers_and_QC[""]["designer_performence"] = "Designer Performence";
	$fieldToolTipsDaily_Designers_and_QC[""]["designer_performence"] = "";
	if (count($fieldToolTipsDaily_Designers_and_QC[""]))
		$tdataDaily_Designers_and_QC[".isUseToolTips"] = true;
}
	
	
	$tdataDaily_Designers_and_QC[".NCSearch"] = true;



$tdataDaily_Designers_and_QC[".shortTableName"] = "Daily_Designers_and_QC";
$tdataDaily_Designers_and_QC[".nSecOptions"] = 0;
$tdataDaily_Designers_and_QC[".recsPerRowList"] = 1;
$tdataDaily_Designers_and_QC[".recsPerRowPrint"] = 1;
$tdataDaily_Designers_and_QC[".mainTableOwnerID"] = "";
$tdataDaily_Designers_and_QC[".moveNext"] = 1;
$tdataDaily_Designers_and_QC[".entityType"] = 2;

$tdataDaily_Designers_and_QC[".strOriginalTableName"] = "jobfile";




$tdataDaily_Designers_and_QC[".showAddInPopup"] = false;

$tdataDaily_Designers_and_QC[".showEditInPopup"] = false;

$tdataDaily_Designers_and_QC[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDaily_Designers_and_QC[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDaily_Designers_and_QC[".fieldsForRegister"] = array();

$tdataDaily_Designers_and_QC[".listAjax"] = false;

	$tdataDaily_Designers_and_QC[".audit"] = false;

	$tdataDaily_Designers_and_QC[".locking"] = false;


$tdataDaily_Designers_and_QC[".add"] = true;
$tdataDaily_Designers_and_QC[".afterAddAction"] = 0;
$tdataDaily_Designers_and_QC[".closePopupAfterAdd"] = 1;
$tdataDaily_Designers_and_QC[".afterAddActionDetTable"] = "";

$tdataDaily_Designers_and_QC[".list"] = true;

$tdataDaily_Designers_and_QC[".inlineAdd"] = true;


$tdataDaily_Designers_and_QC[".exportTo"] = true;

$tdataDaily_Designers_and_QC[".printFriendly"] = true;


$tdataDaily_Designers_and_QC[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDaily_Designers_and_QC[".searchSaving"] = false;
//

$tdataDaily_Designers_and_QC[".showSearchPanel"] = true;
		$tdataDaily_Designers_and_QC[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDaily_Designers_and_QC[".isUseAjaxSuggest"] = false;
else 
	$tdataDaily_Designers_and_QC[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDaily_Designers_and_QC[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDaily_Designers_and_QC[".isUseTimeForSearch"] = false;





$tdataDaily_Designers_and_QC[".allSearchFields"] = array();
$tdataDaily_Designers_and_QC[".filterFields"] = array();
$tdataDaily_Designers_and_QC[".requiredSearchFields"] = array();

$tdataDaily_Designers_and_QC[".allSearchFields"][] = "work_date";
	$tdataDaily_Designers_and_QC[".allSearchFields"][] = "done_date";
	$tdataDaily_Designers_and_QC[".allSearchFields"][] = "done_Week";
	$tdataDaily_Designers_and_QC[".allSearchFields"][] = "team_id";
	$tdataDaily_Designers_and_QC[".allSearchFields"][] = "designer_name";
	$tdataDaily_Designers_and_QC[".allSearchFields"][] = "user_group";
	$tdataDaily_Designers_and_QC[".allSearchFields"][] = "total_images";
	$tdataDaily_Designers_and_QC[".allSearchFields"][] = "designer_eta_total";
	$tdataDaily_Designers_and_QC[".allSearchFields"][] = "designer_Total_time";
	$tdataDaily_Designers_and_QC[".allSearchFields"][] = "designer_eta_Avg";
	$tdataDaily_Designers_and_QC[".allSearchFields"][] = "designer_Taken_Avg";
	$tdataDaily_Designers_and_QC[".allSearchFields"][] = "designer_efficiency";
	$tdataDaily_Designers_and_QC[".allSearchFields"][] = "designer_performence";
	$tdataDaily_Designers_and_QC[".allSearchFields"][] = "qc_Total_time";
	$tdataDaily_Designers_and_QC[".allSearchFields"][] = "qc_Taken_Avg";
	
$tdataDaily_Designers_and_QC[".filterFields"][] = "work_type";	

$tdataDaily_Designers_and_QC[".googleLikeFields"] = array();
$tdataDaily_Designers_and_QC[".googleLikeFields"][] = "work_date";
$tdataDaily_Designers_and_QC[".googleLikeFields"][] = "done_date";
$tdataDaily_Designers_and_QC[".googleLikeFields"][] = "done_Week";
$tdataDaily_Designers_and_QC[".googleLikeFields"][] = "team_id";
$tdataDaily_Designers_and_QC[".googleLikeFields"][] = "designer_name";
$tdataDaily_Designers_and_QC[".googleLikeFields"][] = "user_group";
$tdataDaily_Designers_and_QC[".googleLikeFields"][] = "work_type";
$tdataDaily_Designers_and_QC[".googleLikeFields"][] = "total_images";
$tdataDaily_Designers_and_QC[".googleLikeFields"][] = "designer_eta_total";
$tdataDaily_Designers_and_QC[".googleLikeFields"][] = "designer_Total_time";
$tdataDaily_Designers_and_QC[".googleLikeFields"][] = "designer_eta_Avg";
$tdataDaily_Designers_and_QC[".googleLikeFields"][] = "designer_Taken_Avg";
$tdataDaily_Designers_and_QC[".googleLikeFields"][] = "designer_efficiency";
$tdataDaily_Designers_and_QC[".googleLikeFields"][] = "designer_performence";
$tdataDaily_Designers_and_QC[".googleLikeFields"][] = "qc_Total_time";
$tdataDaily_Designers_and_QC[".googleLikeFields"][] = "qc_Taken_Avg";


$tdataDaily_Designers_and_QC[".advSearchFields"] = array();
$tdataDaily_Designers_and_QC[".advSearchFields"][] = "work_date";
$tdataDaily_Designers_and_QC[".advSearchFields"][] = "done_date";
$tdataDaily_Designers_and_QC[".advSearchFields"][] = "done_Week";
$tdataDaily_Designers_and_QC[".advSearchFields"][] = "team_id";
$tdataDaily_Designers_and_QC[".advSearchFields"][] = "designer_name";
$tdataDaily_Designers_and_QC[".advSearchFields"][] = "user_group";
$tdataDaily_Designers_and_QC[".advSearchFields"][] = "work_type";
$tdataDaily_Designers_and_QC[".advSearchFields"][] = "total_images";
$tdataDaily_Designers_and_QC[".advSearchFields"][] = "designer_eta_total";
$tdataDaily_Designers_and_QC[".advSearchFields"][] = "designer_Total_time";
$tdataDaily_Designers_and_QC[".advSearchFields"][] = "designer_eta_Avg";
$tdataDaily_Designers_and_QC[".advSearchFields"][] = "designer_Taken_Avg";
$tdataDaily_Designers_and_QC[".advSearchFields"][] = "designer_efficiency";
$tdataDaily_Designers_and_QC[".advSearchFields"][] = "designer_performence";
$tdataDaily_Designers_and_QC[".advSearchFields"][] = "qc_Total_time";
$tdataDaily_Designers_and_QC[".advSearchFields"][] = "qc_Taken_Avg";

$tdataDaily_Designers_and_QC[".tableType"] = "report";

$tdataDaily_Designers_and_QC[".printerPageOrientation"] = 0;
$tdataDaily_Designers_and_QC[".nPrinterPageScale"] = 100;

$tdataDaily_Designers_and_QC[".nPrinterSplitRecords"] = 40;

$tdataDaily_Designers_and_QC[".nPrinterPDFSplitRecords"] = 40;



$tdataDaily_Designers_and_QC[".geocodingEnabled"] = false;

//report settings
$tdataDaily_Designers_and_QC[".printReportLayout"] = 3;	

$tdataDaily_Designers_and_QC[".reportPrintPartitionType"] = 0;	
$tdataDaily_Designers_and_QC[".reportPrintGroupsPerPage"] = 3;	
	$tdataDaily_Designers_and_QC[".lowGroup"] = 2;



$tdataDaily_Designers_and_QC[".reportGroupFields"] = true;
$tdataDaily_Designers_and_QC[".pageSize"] = 1;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "work_date";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "user_group";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataDaily_Designers_and_QC[".reportGroupFieldsData"] = $reportGroupFields;






$tdataDaily_Designers_and_QC[".repShowDet"] = true;

$tdataDaily_Designers_and_QC[".reportLayout"] = 3;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC, designer_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDaily_Designers_and_QC[".strOrderBy"] = $tstrOrderBy;

$tdataDaily_Designers_and_QC[".orderindexes"] = array();
$tdataDaily_Designers_and_QC[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "work_date");
$tdataDaily_Designers_and_QC[".orderindexes"][] = array(5, (1 ? "ASC" : "DESC"), "designer_name");

$tdataDaily_Designers_and_QC[".sqlHead"] = "SELECT work_date,  Date(work_date) AS done_date,  (WEEK(work_date)+1) AS done_Week,  team_id,  designer_name,  user_group,  work_type,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS designer_eta_total,  SEC_TO_TIME(SUM(designer_time)) AS designer_Total_time,  SEC_TO_TIME(SUM(estimated_time)/SUM(total_images_counted)) AS designer_eta_Avg,  SEC_TO_TIME(SUM(designer_time)/SUM(total_images_counted)) AS designer_Taken_Avg,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS designer_efficiency,  ((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS designer_performence,  SEC_TO_TIME(SUM(qc_time)) AS qc_Total_time,  SEC_TO_TIME(SUM(qc_time)/SUM(total_images_counted)) AS qc_Taken_Avg";
$tdataDaily_Designers_and_QC[".sqlFrom"] = "FROM designer_report";
$tdataDaily_Designers_and_QC[".sqlWhereExpr"] = "";
$tdataDaily_Designers_and_QC[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDaily_Designers_and_QC[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDaily_Designers_and_QC[".arrGroupsPerPage"] = $arrGPP;

$tdataDaily_Designers_and_QC[".highlightSearchResults"] = true;

$tableKeysDaily_Designers_and_QC = array();
$tdataDaily_Designers_and_QC[".Keys"] = $tableKeysDaily_Designers_and_QC;

$tdataDaily_Designers_and_QC[".listFields"] = array();
$tdataDaily_Designers_and_QC[".listFields"][] = "work_date";
$tdataDaily_Designers_and_QC[".listFields"][] = "done_date";
$tdataDaily_Designers_and_QC[".listFields"][] = "done_Week";
$tdataDaily_Designers_and_QC[".listFields"][] = "team_id";
$tdataDaily_Designers_and_QC[".listFields"][] = "designer_name";
$tdataDaily_Designers_and_QC[".listFields"][] = "user_group";
$tdataDaily_Designers_and_QC[".listFields"][] = "work_type";
$tdataDaily_Designers_and_QC[".listFields"][] = "total_images";
$tdataDaily_Designers_and_QC[".listFields"][] = "designer_eta_total";
$tdataDaily_Designers_and_QC[".listFields"][] = "designer_Total_time";
$tdataDaily_Designers_and_QC[".listFields"][] = "designer_eta_Avg";
$tdataDaily_Designers_and_QC[".listFields"][] = "designer_Taken_Avg";
$tdataDaily_Designers_and_QC[".listFields"][] = "designer_efficiency";
$tdataDaily_Designers_and_QC[".listFields"][] = "designer_performence";
$tdataDaily_Designers_and_QC[".listFields"][] = "qc_Total_time";
$tdataDaily_Designers_and_QC[".listFields"][] = "qc_Taken_Avg";

$tdataDaily_Designers_and_QC[".hideMobileList"] = array();


$tdataDaily_Designers_and_QC[".viewFields"] = array();
$tdataDaily_Designers_and_QC[".viewFields"][] = "work_date";
$tdataDaily_Designers_and_QC[".viewFields"][] = "done_date";
$tdataDaily_Designers_and_QC[".viewFields"][] = "done_Week";
$tdataDaily_Designers_and_QC[".viewFields"][] = "team_id";
$tdataDaily_Designers_and_QC[".viewFields"][] = "designer_name";
$tdataDaily_Designers_and_QC[".viewFields"][] = "user_group";
$tdataDaily_Designers_and_QC[".viewFields"][] = "work_type";
$tdataDaily_Designers_and_QC[".viewFields"][] = "total_images";
$tdataDaily_Designers_and_QC[".viewFields"][] = "designer_eta_total";
$tdataDaily_Designers_and_QC[".viewFields"][] = "designer_Total_time";
$tdataDaily_Designers_and_QC[".viewFields"][] = "designer_eta_Avg";
$tdataDaily_Designers_and_QC[".viewFields"][] = "designer_Taken_Avg";
$tdataDaily_Designers_and_QC[".viewFields"][] = "designer_efficiency";
$tdataDaily_Designers_and_QC[".viewFields"][] = "designer_performence";
$tdataDaily_Designers_and_QC[".viewFields"][] = "qc_Total_time";
$tdataDaily_Designers_and_QC[".viewFields"][] = "qc_Taken_Avg";

$tdataDaily_Designers_and_QC[".addFields"] = array();

$tdataDaily_Designers_and_QC[".masterListFields"] = array();
$tdataDaily_Designers_and_QC[".masterListFields"][] = "work_date";
$tdataDaily_Designers_and_QC[".masterListFields"][] = "done_date";
$tdataDaily_Designers_and_QC[".masterListFields"][] = "done_Week";
$tdataDaily_Designers_and_QC[".masterListFields"][] = "team_id";
$tdataDaily_Designers_and_QC[".masterListFields"][] = "designer_name";
$tdataDaily_Designers_and_QC[".masterListFields"][] = "user_group";
$tdataDaily_Designers_and_QC[".masterListFields"][] = "work_type";
$tdataDaily_Designers_and_QC[".masterListFields"][] = "total_images";
$tdataDaily_Designers_and_QC[".masterListFields"][] = "designer_eta_total";
$tdataDaily_Designers_and_QC[".masterListFields"][] = "designer_Total_time";
$tdataDaily_Designers_and_QC[".masterListFields"][] = "designer_eta_Avg";
$tdataDaily_Designers_and_QC[".masterListFields"][] = "designer_Taken_Avg";
$tdataDaily_Designers_and_QC[".masterListFields"][] = "designer_efficiency";
$tdataDaily_Designers_and_QC[".masterListFields"][] = "designer_performence";
$tdataDaily_Designers_and_QC[".masterListFields"][] = "qc_Total_time";
$tdataDaily_Designers_and_QC[".masterListFields"][] = "qc_Taken_Avg";

$tdataDaily_Designers_and_QC[".inlineAddFields"] = array();

$tdataDaily_Designers_and_QC[".editFields"] = array();

$tdataDaily_Designers_and_QC[".inlineEditFields"] = array();

$tdataDaily_Designers_and_QC[".exportFields"] = array();
$tdataDaily_Designers_and_QC[".exportFields"][] = "work_date";
$tdataDaily_Designers_and_QC[".exportFields"][] = "done_date";
$tdataDaily_Designers_and_QC[".exportFields"][] = "done_Week";
$tdataDaily_Designers_and_QC[".exportFields"][] = "team_id";
$tdataDaily_Designers_and_QC[".exportFields"][] = "designer_name";
$tdataDaily_Designers_and_QC[".exportFields"][] = "user_group";
$tdataDaily_Designers_and_QC[".exportFields"][] = "work_type";
$tdataDaily_Designers_and_QC[".exportFields"][] = "total_images";
$tdataDaily_Designers_and_QC[".exportFields"][] = "designer_eta_total";
$tdataDaily_Designers_and_QC[".exportFields"][] = "designer_Total_time";
$tdataDaily_Designers_and_QC[".exportFields"][] = "designer_eta_Avg";
$tdataDaily_Designers_and_QC[".exportFields"][] = "designer_Taken_Avg";
$tdataDaily_Designers_and_QC[".exportFields"][] = "designer_efficiency";
$tdataDaily_Designers_and_QC[".exportFields"][] = "designer_performence";
$tdataDaily_Designers_and_QC[".exportFields"][] = "qc_Total_time";
$tdataDaily_Designers_and_QC[".exportFields"][] = "qc_Taken_Avg";

$tdataDaily_Designers_and_QC[".importFields"] = array();
$tdataDaily_Designers_and_QC[".importFields"][] = "work_date";
$tdataDaily_Designers_and_QC[".importFields"][] = "done_date";
$tdataDaily_Designers_and_QC[".importFields"][] = "done_Week";
$tdataDaily_Designers_and_QC[".importFields"][] = "team_id";
$tdataDaily_Designers_and_QC[".importFields"][] = "designer_name";
$tdataDaily_Designers_and_QC[".importFields"][] = "user_group";
$tdataDaily_Designers_and_QC[".importFields"][] = "work_type";
$tdataDaily_Designers_and_QC[".importFields"][] = "total_images";
$tdataDaily_Designers_and_QC[".importFields"][] = "designer_eta_total";
$tdataDaily_Designers_and_QC[".importFields"][] = "designer_Total_time";
$tdataDaily_Designers_and_QC[".importFields"][] = "designer_eta_Avg";
$tdataDaily_Designers_and_QC[".importFields"][] = "designer_Taken_Avg";
$tdataDaily_Designers_and_QC[".importFields"][] = "designer_efficiency";
$tdataDaily_Designers_and_QC[".importFields"][] = "designer_performence";
$tdataDaily_Designers_and_QC[".importFields"][] = "qc_Total_time";
$tdataDaily_Designers_and_QC[".importFields"][] = "qc_Taken_Avg";

$tdataDaily_Designers_and_QC[".printFields"] = array();
$tdataDaily_Designers_and_QC[".printFields"][] = "work_date";
$tdataDaily_Designers_and_QC[".printFields"][] = "done_date";
$tdataDaily_Designers_and_QC[".printFields"][] = "done_Week";
$tdataDaily_Designers_and_QC[".printFields"][] = "team_id";
$tdataDaily_Designers_and_QC[".printFields"][] = "designer_name";
$tdataDaily_Designers_and_QC[".printFields"][] = "user_group";
$tdataDaily_Designers_and_QC[".printFields"][] = "work_type";
$tdataDaily_Designers_and_QC[".printFields"][] = "total_images";
$tdataDaily_Designers_and_QC[".printFields"][] = "designer_eta_total";
$tdataDaily_Designers_and_QC[".printFields"][] = "designer_Total_time";
$tdataDaily_Designers_and_QC[".printFields"][] = "designer_eta_Avg";
$tdataDaily_Designers_and_QC[".printFields"][] = "designer_Taken_Avg";
$tdataDaily_Designers_and_QC[".printFields"][] = "designer_efficiency";
$tdataDaily_Designers_and_QC[".printFields"][] = "designer_performence";
$tdataDaily_Designers_and_QC[".printFields"][] = "qc_Total_time";
$tdataDaily_Designers_and_QC[".printFields"][] = "qc_Taken_Avg";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_and_QC","work_date"); 
	$fdata["FieldType"] = 135;
	
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

	

	
	$tdataDaily_Designers_and_QC["work_date"] = $fdata;
//	done_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "done_date";
	$fdata["GoodName"] = "done_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_and_QC","done_date"); 
	$fdata["FieldType"] = 7;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "done_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Date(work_date)";
	
		
		
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

	

	
	$tdataDaily_Designers_and_QC["done_date"] = $fdata;
//	done_Week
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "done_Week";
	$fdata["GoodName"] = "done_Week";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_and_QC","done_Week"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "done_Week"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(WEEK(work_date)+1)";
	
		
		
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

	

	
	$tdataDaily_Designers_and_QC["done_Week"] = $fdata;
//	team_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "team_id";
	$fdata["GoodName"] = "team_id";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_and_QC","team_id"); 
	$fdata["FieldType"] = 200;
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataDaily_Designers_and_QC["team_id"] = $fdata;
//	designer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "designer_name";
	$fdata["GoodName"] = "designer_name";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_and_QC","designer_name"); 
	$fdata["FieldType"] = 201;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designer_name";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataDaily_Designers_and_QC["designer_name"] = $fdata;
//	user_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "user_group";
	$fdata["GoodName"] = "user_group";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_and_QC","user_group"); 
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
	$edata["DisplayField"] = "groupname";
	
		
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

	

	
	$tdataDaily_Designers_and_QC["user_group"] = $fdata;
//	work_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "work_type";
	$fdata["GoodName"] = "work_type";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_and_QC","work_type"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
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
	
	
	
	

	
//Filters settings
	$fdata["filterTotals"] = 0;	
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "done_Week";	
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;	
	
		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;
	
				
		
	
//end of Filters settings	

	
	$tdataDaily_Designers_and_QC["work_type"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_and_QC","total_images"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_images"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(total_images_counted)";
	
		
		
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

	

	
	$tdataDaily_Designers_and_QC["total_images"] = $fdata;
//	designer_eta_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "designer_eta_total";
	$fdata["GoodName"] = "designer_eta_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_and_QC","designer_eta_total"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_eta_total"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(estimated_time))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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

	

	
	$tdataDaily_Designers_and_QC["designer_eta_total"] = $fdata;
//	designer_Total_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "designer_Total_time";
	$fdata["GoodName"] = "designer_Total_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_and_QC","designer_Total_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_Total_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(designer_time))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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

	

	
	$tdataDaily_Designers_and_QC["designer_Total_time"] = $fdata;
//	designer_eta_Avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "designer_eta_Avg";
	$fdata["GoodName"] = "designer_eta_Avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_and_QC","designer_eta_Avg"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_eta_Avg"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(estimated_time)/SUM(total_images_counted))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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

	

	
	$tdataDaily_Designers_and_QC["designer_eta_Avg"] = $fdata;
//	designer_Taken_Avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "designer_Taken_Avg";
	$fdata["GoodName"] = "designer_Taken_Avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_and_QC","designer_Taken_Avg"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_Taken_Avg"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(designer_time)/SUM(total_images_counted))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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

	

	
	$tdataDaily_Designers_and_QC["designer_Taken_Avg"] = $fdata;
//	designer_efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "designer_efficiency";
	$fdata["GoodName"] = "designer_efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_and_QC","designer_efficiency"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_efficiency"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "((SUM(estimated_time))/(SUM(designer_time)))*100";
	
		
		
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

	

	
	$tdataDaily_Designers_and_QC["designer_efficiency"] = $fdata;
//	designer_performence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "designer_performence";
	$fdata["GoodName"] = "designer_performence";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_and_QC","designer_performence"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_performence"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100";
	
		
		
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

	

	
	$tdataDaily_Designers_and_QC["designer_performence"] = $fdata;
//	qc_Total_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "qc_Total_time";
	$fdata["GoodName"] = "qc_Total_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_and_QC","qc_Total_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qc_Total_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(qc_time))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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

	

	
	$tdataDaily_Designers_and_QC["qc_Total_time"] = $fdata;
//	qc_Taken_Avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "qc_Taken_Avg";
	$fdata["GoodName"] = "qc_Taken_Avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Designers_and_QC","qc_Taken_Avg"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qc_Taken_Avg"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(qc_time)/SUM(total_images_counted))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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

	

	
	$tdataDaily_Designers_and_QC["qc_Taken_Avg"] = $fdata;

	
$tables_data["Daily Designers and QC"]=&$tdataDaily_Designers_and_QC;
$field_labels["Daily_Designers_and_QC"] = &$fieldLabelsDaily_Designers_and_QC;
$fieldToolTips["Daily Designers and QC"] = &$fieldToolTipsDaily_Designers_and_QC;
$page_titles["Daily_Designers_and_QC"] = &$pageTitlesDaily_Designers_and_QC;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Daily Designers and QC"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Daily Designers and QC"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Daily_Designers_and_QC()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_date,  Date(work_date) AS done_date,  (WEEK(work_date)+1) AS done_Week,  team_id,  designer_name,  user_group,  work_type,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS designer_eta_total,  SEC_TO_TIME(SUM(designer_time)) AS designer_Total_time,  SEC_TO_TIME(SUM(estimated_time)/SUM(total_images_counted)) AS designer_eta_Avg,  SEC_TO_TIME(SUM(designer_time)/SUM(total_images_counted)) AS designer_Taken_Avg,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS designer_efficiency,  ((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS designer_performence,  SEC_TO_TIME(SUM(qc_time)) AS qc_Total_time,  SEC_TO_TIME(SUM(qc_time)/SUM(total_images_counted)) AS qc_Taken_Avg";
$proto0["m_strFrom"] = "FROM designer_report";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY work_date DESC, designer_name";
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
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Designers and QC"
));

$proto5["m_sql"] = "work_date";
$proto5["m_srcTableName"] = "Daily Designers and QC";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$proto8=array();
$proto8["m_functiontype"] = "SQLF_CUSTOM";
$proto8["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "work_date"
));

$proto8["m_arguments"][]=$obj;
$proto8["m_strFunctionName"] = "Date";
$obj = new SQLFunctionCall($proto8);

$proto7["m_sql"] = "Date(work_date)";
$proto7["m_srcTableName"] = "Daily Designers and QC";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "done_date";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(WEEK(work_date)+1)"
));

$proto10["m_sql"] = "(WEEK(work_date)+1)";
$proto10["m_srcTableName"] = "Daily Designers and QC";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "done_Week";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Designers and QC"
));

$proto12["m_sql"] = "team_id";
$proto12["m_srcTableName"] = "Daily Designers and QC";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Designers and QC"
));

$proto14["m_sql"] = "designer_name";
$proto14["m_srcTableName"] = "Daily Designers and QC";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "user_group",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Designers and QC"
));

$proto16["m_sql"] = "user_group";
$proto16["m_srcTableName"] = "Daily Designers and QC";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Designers and QC"
));

$proto18["m_sql"] = "work_type";
$proto18["m_srcTableName"] = "Daily Designers and QC";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_SUM";
$proto21["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total_images_counted",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Designers and QC"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "SUM(total_images_counted)";
$proto20["m_srcTableName"] = "Daily Designers and QC";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "total_images";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$proto24=array();
$proto24["m_functiontype"] = "SQLF_CUSTOM";
$proto24["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(estimated_time)"
));

$proto24["m_arguments"][]=$obj;
$proto24["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto24);

$proto23["m_sql"] = "SEC_TO_TIME(SUM(estimated_time))";
$proto23["m_srcTableName"] = "Daily Designers and QC";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "designer_eta_total";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_CUSTOM";
$proto27["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(designer_time)"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "SEC_TO_TIME(SUM(designer_time))";
$proto26["m_srcTableName"] = "Daily Designers and QC";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "designer_Total_time";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$proto30=array();
$proto30["m_functiontype"] = "SQLF_CUSTOM";
$proto30["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(estimated_time)/SUM(total_images_counted)"
));

$proto30["m_arguments"][]=$obj;
$proto30["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto30);

$proto29["m_sql"] = "SEC_TO_TIME(SUM(estimated_time)/SUM(total_images_counted))";
$proto29["m_srcTableName"] = "Daily Designers and QC";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "designer_eta_Avg";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$proto33=array();
$proto33["m_functiontype"] = "SQLF_CUSTOM";
$proto33["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(designer_time)/SUM(total_images_counted)"
));

$proto33["m_arguments"][]=$obj;
$proto33["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto33);

$proto32["m_sql"] = "SEC_TO_TIME(SUM(designer_time)/SUM(total_images_counted))";
$proto32["m_srcTableName"] = "Daily Designers and QC";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "designer_Taken_Avg";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((SUM(estimated_time))/(SUM(designer_time)))*100"
));

$proto35["m_sql"] = "((SUM(estimated_time))/(SUM(designer_time)))*100";
$proto35["m_srcTableName"] = "Daily Designers and QC";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "designer_efficiency";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100"
));

$proto37["m_sql"] = "((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100";
$proto37["m_srcTableName"] = "Daily Designers and QC";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "designer_performence";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$proto40=array();
$proto40["m_functiontype"] = "SQLF_CUSTOM";
$proto40["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(qc_time)"
));

$proto40["m_arguments"][]=$obj;
$proto40["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto40);

$proto39["m_sql"] = "SEC_TO_TIME(SUM(qc_time))";
$proto39["m_srcTableName"] = "Daily Designers and QC";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "qc_Total_time";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$proto43=array();
$proto43["m_functiontype"] = "SQLF_CUSTOM";
$proto43["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(qc_time)/SUM(total_images_counted)"
));

$proto43["m_arguments"][]=$obj;
$proto43["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto43);

$proto42["m_sql"] = "SEC_TO_TIME(SUM(qc_time)/SUM(total_images_counted))";
$proto42["m_srcTableName"] = "Daily Designers and QC";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "qc_Taken_Avg";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto45=array();
$proto45["m_link"] = "SQLL_MAIN";
			$proto46=array();
$proto46["m_strName"] = "designer_report";
$proto46["m_srcTableName"] = "Daily Designers and QC";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "report_id";
$proto46["m_columns"][] = "report_reference";
$proto46["m_columns"][] = "work_date";
$proto46["m_columns"][] = "designer_name";
$proto46["m_columns"][] = "team_id";
$proto46["m_columns"][] = "subdiv_id";
$proto46["m_columns"][] = "user_group";
$proto46["m_columns"][] = "pdf_name";
$proto46["m_columns"][] = "estimated_time";
$proto46["m_columns"][] = "designer_time";
$proto46["m_columns"][] = "qc_time";
$proto46["m_columns"][] = "efficiency";
$proto46["m_columns"][] = "total_images_counted";
$proto46["m_columns"][] = "comments";
$proto46["m_columns"][] = "work_type";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "designer_report";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "Daily Designers and QC";
$proto47=array();
$proto47["m_sql"] = "";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto49=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Designers and QC"
));

$proto49["m_column"]=$obj;
$obj = new SQLGroupByItem($proto49);

$proto0["m_groupby"][]=$obj;
												$proto51=array();
						$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Designers and QC"
));

$proto51["m_column"]=$obj;
$obj = new SQLGroupByItem($proto51);

$proto0["m_groupby"][]=$obj;
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Designers and QC"
));

$proto53["m_column"]=$obj;
$obj = new SQLGroupByItem($proto53);

$proto0["m_groupby"][]=$obj;
												$proto55=array();
						$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Designers and QC"
));

$proto55["m_column"]=$obj;
$obj = new SQLGroupByItem($proto55);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto57=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Designers and QC"
));

$proto57["m_column"]=$obj;
$proto57["m_bAsc"] = 0;
$proto57["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto57);

$proto0["m_orderby"][]=$obj;					
												$proto59=array();
						$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Designers and QC"
));

$proto59["m_column"]=$obj;
$proto59["m_bAsc"] = 1;
$proto59["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto59);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Daily Designers and QC";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Daily_Designers_and_QC = createSqlQuery_Daily_Designers_and_QC();


	
																
	
$tdataDaily_Designers_and_QC[".sqlquery"] = $queryData_Daily_Designers_and_QC;

$tableEvents["Daily Designers and QC"] = new eventsBase;
$tdataDaily_Designers_and_QC[".hasEvents"] = false;

?>