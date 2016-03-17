<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDaily_PDF_Work_Summery = array();	
	$tdataDaily_PDF_Work_Summery[".truncateText"] = true;
	$tdataDaily_PDF_Work_Summery[".NumberOfChars"] = 256; 
	$tdataDaily_PDF_Work_Summery[".ShortName"] = "Daily_PDF_Work_Summery";
	$tdataDaily_PDF_Work_Summery[".OwnerID"] = "";
	$tdataDaily_PDF_Work_Summery[".OriginalTable"] = "users_work_report";

//	field labels
$fieldLabelsDaily_PDF_Work_Summery = array();
$fieldToolTipsDaily_PDF_Work_Summery = array();
$pageTitlesDaily_PDF_Work_Summery = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDaily_PDF_Work_Summery["English"] = array();
	$fieldToolTipsDaily_PDF_Work_Summery["English"] = array();
	$pageTitlesDaily_PDF_Work_Summery["English"] = array();
	$fieldLabelsDaily_PDF_Work_Summery["English"]["work_date"] = "Work Date";
	$fieldToolTipsDaily_PDF_Work_Summery["English"]["work_date"] = "";
	$fieldLabelsDaily_PDF_Work_Summery["English"]["pdf_name"] = "Pdf Name";
	$fieldToolTipsDaily_PDF_Work_Summery["English"]["pdf_name"] = "";
	$fieldLabelsDaily_PDF_Work_Summery["English"]["designer_done"] = "Designer Done";
	$fieldToolTipsDaily_PDF_Work_Summery["English"]["designer_done"] = "";
	$fieldLabelsDaily_PDF_Work_Summery["English"]["designer_eta"] = "Designer Eta";
	$fieldToolTipsDaily_PDF_Work_Summery["English"]["designer_eta"] = "";
	$fieldLabelsDaily_PDF_Work_Summery["English"]["designer_taken"] = "Designer Taken";
	$fieldToolTipsDaily_PDF_Work_Summery["English"]["designer_taken"] = "";
	$fieldLabelsDaily_PDF_Work_Summery["English"]["designe_performance"] = "Designe Performance";
	$fieldToolTipsDaily_PDF_Work_Summery["English"]["designe_performance"] = "";
	$fieldLabelsDaily_PDF_Work_Summery["English"]["qc_done"] = "Qc Done";
	$fieldToolTipsDaily_PDF_Work_Summery["English"]["qc_done"] = "";
	$fieldLabelsDaily_PDF_Work_Summery["English"]["qc_pdf_eta"] = "Qc Pdf Eta";
	$fieldToolTipsDaily_PDF_Work_Summery["English"]["qc_pdf_eta"] = "";
	$fieldLabelsDaily_PDF_Work_Summery["English"]["qc_taken"] = "Qc Taken";
	$fieldToolTipsDaily_PDF_Work_Summery["English"]["qc_taken"] = "";
	$fieldLabelsDaily_PDF_Work_Summery["English"]["qc_performance"] = "Qc Performance";
	$fieldToolTipsDaily_PDF_Work_Summery["English"]["qc_performance"] = "";
	$fieldLabelsDaily_PDF_Work_Summery["English"]["pdf__total_time"] = "Pdf  Total Time";
	$fieldToolTipsDaily_PDF_Work_Summery["English"]["pdf__total_time"] = "";
	$fieldLabelsDaily_PDF_Work_Summery["English"]["total_performance"] = "Total Performance";
	$fieldToolTipsDaily_PDF_Work_Summery["English"]["total_performance"] = "";
	if (count($fieldToolTipsDaily_PDF_Work_Summery["English"]))
		$tdataDaily_PDF_Work_Summery[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDaily_PDF_Work_Summery[""] = array();
	$fieldToolTipsDaily_PDF_Work_Summery[""] = array();
	$pageTitlesDaily_PDF_Work_Summery[""] = array();
	$fieldLabelsDaily_PDF_Work_Summery[""]["pdf_name"] = "Pdf Name";
	$fieldToolTipsDaily_PDF_Work_Summery[""]["pdf_name"] = "";
	$fieldLabelsDaily_PDF_Work_Summery[""]["designer_done"] = "Designer Done";
	$fieldToolTipsDaily_PDF_Work_Summery[""]["designer_done"] = "";
	$fieldLabelsDaily_PDF_Work_Summery[""]["designer_eta"] = "Designer Eta";
	$fieldToolTipsDaily_PDF_Work_Summery[""]["designer_eta"] = "";
	$fieldLabelsDaily_PDF_Work_Summery[""]["designer_taken"] = "Designer Taken";
	$fieldToolTipsDaily_PDF_Work_Summery[""]["designer_taken"] = "";
	$fieldLabelsDaily_PDF_Work_Summery[""]["designe_performance"] = "Designe Performance";
	$fieldToolTipsDaily_PDF_Work_Summery[""]["designe_performance"] = "";
	$fieldLabelsDaily_PDF_Work_Summery[""]["qc_done"] = "Qc Done";
	$fieldToolTipsDaily_PDF_Work_Summery[""]["qc_done"] = "";
	$fieldLabelsDaily_PDF_Work_Summery[""]["qc_pdf_eta"] = "Qc Pdf Eta";
	$fieldToolTipsDaily_PDF_Work_Summery[""]["qc_pdf_eta"] = "";
	$fieldLabelsDaily_PDF_Work_Summery[""]["qc_taken"] = "Qc Taken";
	$fieldToolTipsDaily_PDF_Work_Summery[""]["qc_taken"] = "";
	$fieldLabelsDaily_PDF_Work_Summery[""]["qc_performance"] = "Qc Performance";
	$fieldToolTipsDaily_PDF_Work_Summery[""]["qc_performance"] = "";
	$fieldLabelsDaily_PDF_Work_Summery[""]["pdf__total_time"] = "Pdf  Total Time";
	$fieldToolTipsDaily_PDF_Work_Summery[""]["pdf__total_time"] = "";
	$fieldLabelsDaily_PDF_Work_Summery[""]["total_performance"] = "Total Performance";
	$fieldToolTipsDaily_PDF_Work_Summery[""]["total_performance"] = "";
	if (count($fieldToolTipsDaily_PDF_Work_Summery[""]))
		$tdataDaily_PDF_Work_Summery[".isUseToolTips"] = true;
}
	
	
	$tdataDaily_PDF_Work_Summery[".NCSearch"] = true;



$tdataDaily_PDF_Work_Summery[".shortTableName"] = "Daily_PDF_Work_Summery";
$tdataDaily_PDF_Work_Summery[".nSecOptions"] = 0;
$tdataDaily_PDF_Work_Summery[".recsPerRowList"] = 1;
$tdataDaily_PDF_Work_Summery[".recsPerRowPrint"] = 1;
$tdataDaily_PDF_Work_Summery[".mainTableOwnerID"] = "";
$tdataDaily_PDF_Work_Summery[".moveNext"] = 1;
$tdataDaily_PDF_Work_Summery[".entityType"] = 2;

$tdataDaily_PDF_Work_Summery[".strOriginalTableName"] = "users_work_report";




$tdataDaily_PDF_Work_Summery[".showAddInPopup"] = false;

$tdataDaily_PDF_Work_Summery[".showEditInPopup"] = false;

$tdataDaily_PDF_Work_Summery[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDaily_PDF_Work_Summery[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDaily_PDF_Work_Summery[".fieldsForRegister"] = array();

$tdataDaily_PDF_Work_Summery[".listAjax"] = false;

	$tdataDaily_PDF_Work_Summery[".audit"] = false;

	$tdataDaily_PDF_Work_Summery[".locking"] = false;


$tdataDaily_PDF_Work_Summery[".add"] = true;
$tdataDaily_PDF_Work_Summery[".afterAddAction"] = 0;
$tdataDaily_PDF_Work_Summery[".closePopupAfterAdd"] = 1;
$tdataDaily_PDF_Work_Summery[".afterAddActionDetTable"] = "";

$tdataDaily_PDF_Work_Summery[".list"] = true;

$tdataDaily_PDF_Work_Summery[".inlineAdd"] = true;


$tdataDaily_PDF_Work_Summery[".exportTo"] = true;

$tdataDaily_PDF_Work_Summery[".printFriendly"] = true;


$tdataDaily_PDF_Work_Summery[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDaily_PDF_Work_Summery[".searchSaving"] = false;
//

$tdataDaily_PDF_Work_Summery[".showSearchPanel"] = true;
		$tdataDaily_PDF_Work_Summery[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDaily_PDF_Work_Summery[".isUseAjaxSuggest"] = false;
else 
	$tdataDaily_PDF_Work_Summery[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDaily_PDF_Work_Summery[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDaily_PDF_Work_Summery[".isUseTimeForSearch"] = false;





$tdataDaily_PDF_Work_Summery[".allSearchFields"] = array();
$tdataDaily_PDF_Work_Summery[".filterFields"] = array();
$tdataDaily_PDF_Work_Summery[".requiredSearchFields"] = array();

$tdataDaily_PDF_Work_Summery[".allSearchFields"][] = "work_date";
	$tdataDaily_PDF_Work_Summery[".allSearchFields"][] = "pdf_name";
	$tdataDaily_PDF_Work_Summery[".allSearchFields"][] = "designer_done";
	$tdataDaily_PDF_Work_Summery[".allSearchFields"][] = "designer_eta";
	$tdataDaily_PDF_Work_Summery[".allSearchFields"][] = "designer_taken";
	$tdataDaily_PDF_Work_Summery[".allSearchFields"][] = "designe_performance";
	$tdataDaily_PDF_Work_Summery[".allSearchFields"][] = "qc_done";
	$tdataDaily_PDF_Work_Summery[".allSearchFields"][] = "qc_pdf_eta";
	$tdataDaily_PDF_Work_Summery[".allSearchFields"][] = "qc_taken";
	$tdataDaily_PDF_Work_Summery[".allSearchFields"][] = "qc_performance";
	$tdataDaily_PDF_Work_Summery[".allSearchFields"][] = "pdf__total_time";
	$tdataDaily_PDF_Work_Summery[".allSearchFields"][] = "total_performance";
	

$tdataDaily_PDF_Work_Summery[".googleLikeFields"] = array();
$tdataDaily_PDF_Work_Summery[".googleLikeFields"][] = "work_date";
$tdataDaily_PDF_Work_Summery[".googleLikeFields"][] = "pdf_name";
$tdataDaily_PDF_Work_Summery[".googleLikeFields"][] = "designer_done";
$tdataDaily_PDF_Work_Summery[".googleLikeFields"][] = "designer_eta";
$tdataDaily_PDF_Work_Summery[".googleLikeFields"][] = "designer_taken";
$tdataDaily_PDF_Work_Summery[".googleLikeFields"][] = "designe_performance";
$tdataDaily_PDF_Work_Summery[".googleLikeFields"][] = "qc_done";
$tdataDaily_PDF_Work_Summery[".googleLikeFields"][] = "qc_pdf_eta";
$tdataDaily_PDF_Work_Summery[".googleLikeFields"][] = "qc_taken";
$tdataDaily_PDF_Work_Summery[".googleLikeFields"][] = "qc_performance";
$tdataDaily_PDF_Work_Summery[".googleLikeFields"][] = "pdf__total_time";
$tdataDaily_PDF_Work_Summery[".googleLikeFields"][] = "total_performance";


$tdataDaily_PDF_Work_Summery[".advSearchFields"] = array();
$tdataDaily_PDF_Work_Summery[".advSearchFields"][] = "work_date";
$tdataDaily_PDF_Work_Summery[".advSearchFields"][] = "pdf_name";
$tdataDaily_PDF_Work_Summery[".advSearchFields"][] = "designer_done";
$tdataDaily_PDF_Work_Summery[".advSearchFields"][] = "designer_eta";
$tdataDaily_PDF_Work_Summery[".advSearchFields"][] = "designer_taken";
$tdataDaily_PDF_Work_Summery[".advSearchFields"][] = "designe_performance";
$tdataDaily_PDF_Work_Summery[".advSearchFields"][] = "qc_done";
$tdataDaily_PDF_Work_Summery[".advSearchFields"][] = "qc_pdf_eta";
$tdataDaily_PDF_Work_Summery[".advSearchFields"][] = "qc_taken";
$tdataDaily_PDF_Work_Summery[".advSearchFields"][] = "qc_performance";
$tdataDaily_PDF_Work_Summery[".advSearchFields"][] = "pdf__total_time";
$tdataDaily_PDF_Work_Summery[".advSearchFields"][] = "total_performance";

$tdataDaily_PDF_Work_Summery[".tableType"] = "report";

$tdataDaily_PDF_Work_Summery[".printerPageOrientation"] = 0;
$tdataDaily_PDF_Work_Summery[".nPrinterPageScale"] = 100;

$tdataDaily_PDF_Work_Summery[".nPrinterSplitRecords"] = 40;

$tdataDaily_PDF_Work_Summery[".nPrinterPDFSplitRecords"] = 40;



$tdataDaily_PDF_Work_Summery[".geocodingEnabled"] = false;

//report settings
$tdataDaily_PDF_Work_Summery[".printReportLayout"] = 3;	

$tdataDaily_PDF_Work_Summery[".reportPrintPartitionType"] = 0;	
$tdataDaily_PDF_Work_Summery[".reportPrintGroupsPerPage"] = 3;	
	$tdataDaily_PDF_Work_Summery[".lowGroup"] = 1;



$tdataDaily_PDF_Work_Summery[".reportGroupFields"] = true;
$tdataDaily_PDF_Work_Summery[".pageSize"] = 1;
$tdataDaily_PDF_Work_Summery[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "work_date";
	$rgroupField['groupInterval'] = 5;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataDaily_PDF_Work_Summery[".reportGroupFieldsData"] = $reportGroupFields;


$tdataDaily_PDF_Work_Summery[".isExistTotalFields"] = true;




$tdataDaily_PDF_Work_Summery[".repShowDet"] = true;

$tdataDaily_PDF_Work_Summery[".reportLayout"] = 3;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDaily_PDF_Work_Summery[".strOrderBy"] = $tstrOrderBy;

$tdataDaily_PDF_Work_Summery[".orderindexes"] = array();
$tdataDaily_PDF_Work_Summery[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "work_date");

$tdataDaily_PDF_Work_Summery[".sqlHead"] = "SELECT work_date,  pdf_name,  SUM(IFNULL(total_images_counted_designer, 0)) AS designer_done,  SEC_TO_TIME((SUM(IFNULL(estimated_designer_time,0)))+(SUM(IFNULL(total_rejected_by_customer_eta,0)))) AS designer_eta,  SEC_TO_TIME((SUM(IFNULL(designer_time,0)))+(SUM(IFNULL(total_rejected_by_qc_taken,0)))) AS designer_taken,  ((SUM(IFNULL(estimated_designer_time,0)))+(SUM(IFNULL(total_rejected_by_customer_eta,0))))/((SUM(IFNULL(designer_time,0)))+(SUM(IFNULL(total_rejected_by_qc_taken,0))))*100 AS designe_performance,  SUM(IFNULL(total_images_counted_qc, 0)) AS qc_done,  SEC_TO_TIME(SUM(IFNULL(estimated_qc_time,0))+SUM(IFNULL(total_rejected_by_customer_taken,0))) AS qc_pdf_eta,  SEC_TO_TIME(SUM(IFNULL(qc_time,0))+SUM(IFNULL(total_rejected_by_customer_taken,0))) AS qc_taken,  (SUM(IFNULL(estimated_qc_time,0))+SUM(IFNULL(total_rejected_by_customer_taken,0)))/(SUM(IFNULL(qc_time,0))+SUM(IFNULL(total_rejected_by_customer_taken,0)))*100 AS qc_performance,  SEC_TO_TIME((SUM(IFNULL(designer_time,0)))+(SUM(IFNULL(total_rejected_by_qc_taken,0)))+(SUM(IFNULL(qc_time,0)))+(SUM(IFNULL(total_rejected_by_customer_taken,0)))) AS pdf__total_time,  ((SUM(IFNULL(estimated_designer_time,0)))+(SUM(IFNULL(estimated_qc_time,0)))+(SUM(IFNULL(total_rejected_by_customer_eta,0))))/(((SUM(IFNULL(designer_time,0))))+(SUM(IFNULL(total_rejected_by_qc_taken,0)))+(SUM(IFNULL(qc_time,0)))+(SUM(IFNULL(total_rejected_by_customer_taken,0))))*100 AS total_performance";
$tdataDaily_PDF_Work_Summery[".sqlFrom"] = "FROM users_work_report";
$tdataDaily_PDF_Work_Summery[".sqlWhereExpr"] = "";
$tdataDaily_PDF_Work_Summery[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDaily_PDF_Work_Summery[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDaily_PDF_Work_Summery[".arrGroupsPerPage"] = $arrGPP;

$tdataDaily_PDF_Work_Summery[".highlightSearchResults"] = true;

$tableKeysDaily_PDF_Work_Summery = array();
$tdataDaily_PDF_Work_Summery[".Keys"] = $tableKeysDaily_PDF_Work_Summery;

$tdataDaily_PDF_Work_Summery[".listFields"] = array();
$tdataDaily_PDF_Work_Summery[".listFields"][] = "work_date";
$tdataDaily_PDF_Work_Summery[".listFields"][] = "pdf_name";
$tdataDaily_PDF_Work_Summery[".listFields"][] = "designer_done";
$tdataDaily_PDF_Work_Summery[".listFields"][] = "designer_eta";
$tdataDaily_PDF_Work_Summery[".listFields"][] = "designer_taken";
$tdataDaily_PDF_Work_Summery[".listFields"][] = "designe_performance";
$tdataDaily_PDF_Work_Summery[".listFields"][] = "qc_done";
$tdataDaily_PDF_Work_Summery[".listFields"][] = "qc_pdf_eta";
$tdataDaily_PDF_Work_Summery[".listFields"][] = "qc_taken";
$tdataDaily_PDF_Work_Summery[".listFields"][] = "qc_performance";
$tdataDaily_PDF_Work_Summery[".listFields"][] = "pdf__total_time";
$tdataDaily_PDF_Work_Summery[".listFields"][] = "total_performance";

$tdataDaily_PDF_Work_Summery[".hideMobileList"] = array();


$tdataDaily_PDF_Work_Summery[".viewFields"] = array();
$tdataDaily_PDF_Work_Summery[".viewFields"][] = "work_date";
$tdataDaily_PDF_Work_Summery[".viewFields"][] = "pdf_name";
$tdataDaily_PDF_Work_Summery[".viewFields"][] = "designer_done";
$tdataDaily_PDF_Work_Summery[".viewFields"][] = "designer_eta";
$tdataDaily_PDF_Work_Summery[".viewFields"][] = "designer_taken";
$tdataDaily_PDF_Work_Summery[".viewFields"][] = "designe_performance";
$tdataDaily_PDF_Work_Summery[".viewFields"][] = "qc_done";
$tdataDaily_PDF_Work_Summery[".viewFields"][] = "qc_pdf_eta";
$tdataDaily_PDF_Work_Summery[".viewFields"][] = "qc_taken";
$tdataDaily_PDF_Work_Summery[".viewFields"][] = "qc_performance";
$tdataDaily_PDF_Work_Summery[".viewFields"][] = "pdf__total_time";
$tdataDaily_PDF_Work_Summery[".viewFields"][] = "total_performance";

$tdataDaily_PDF_Work_Summery[".addFields"] = array();
$tdataDaily_PDF_Work_Summery[".addFields"][] = "pdf_name";

$tdataDaily_PDF_Work_Summery[".masterListFields"] = array();
$tdataDaily_PDF_Work_Summery[".masterListFields"][] = "work_date";
$tdataDaily_PDF_Work_Summery[".masterListFields"][] = "pdf_name";
$tdataDaily_PDF_Work_Summery[".masterListFields"][] = "designer_done";
$tdataDaily_PDF_Work_Summery[".masterListFields"][] = "designer_eta";
$tdataDaily_PDF_Work_Summery[".masterListFields"][] = "designer_taken";
$tdataDaily_PDF_Work_Summery[".masterListFields"][] = "designe_performance";
$tdataDaily_PDF_Work_Summery[".masterListFields"][] = "qc_done";
$tdataDaily_PDF_Work_Summery[".masterListFields"][] = "qc_pdf_eta";
$tdataDaily_PDF_Work_Summery[".masterListFields"][] = "qc_taken";
$tdataDaily_PDF_Work_Summery[".masterListFields"][] = "qc_performance";
$tdataDaily_PDF_Work_Summery[".masterListFields"][] = "pdf__total_time";
$tdataDaily_PDF_Work_Summery[".masterListFields"][] = "total_performance";

$tdataDaily_PDF_Work_Summery[".inlineAddFields"] = array();
$tdataDaily_PDF_Work_Summery[".inlineAddFields"][] = "pdf_name";

$tdataDaily_PDF_Work_Summery[".editFields"] = array();
$tdataDaily_PDF_Work_Summery[".editFields"][] = "pdf_name";

$tdataDaily_PDF_Work_Summery[".inlineEditFields"] = array();
$tdataDaily_PDF_Work_Summery[".inlineEditFields"][] = "pdf_name";

$tdataDaily_PDF_Work_Summery[".exportFields"] = array();
$tdataDaily_PDF_Work_Summery[".exportFields"][] = "work_date";
$tdataDaily_PDF_Work_Summery[".exportFields"][] = "pdf_name";
$tdataDaily_PDF_Work_Summery[".exportFields"][] = "designer_done";
$tdataDaily_PDF_Work_Summery[".exportFields"][] = "designer_eta";
$tdataDaily_PDF_Work_Summery[".exportFields"][] = "designer_taken";
$tdataDaily_PDF_Work_Summery[".exportFields"][] = "designe_performance";
$tdataDaily_PDF_Work_Summery[".exportFields"][] = "qc_done";
$tdataDaily_PDF_Work_Summery[".exportFields"][] = "qc_pdf_eta";
$tdataDaily_PDF_Work_Summery[".exportFields"][] = "qc_taken";
$tdataDaily_PDF_Work_Summery[".exportFields"][] = "qc_performance";
$tdataDaily_PDF_Work_Summery[".exportFields"][] = "pdf__total_time";
$tdataDaily_PDF_Work_Summery[".exportFields"][] = "total_performance";

$tdataDaily_PDF_Work_Summery[".importFields"] = array();
$tdataDaily_PDF_Work_Summery[".importFields"][] = "work_date";
$tdataDaily_PDF_Work_Summery[".importFields"][] = "pdf_name";
$tdataDaily_PDF_Work_Summery[".importFields"][] = "designer_done";
$tdataDaily_PDF_Work_Summery[".importFields"][] = "designer_eta";
$tdataDaily_PDF_Work_Summery[".importFields"][] = "designer_taken";
$tdataDaily_PDF_Work_Summery[".importFields"][] = "designe_performance";
$tdataDaily_PDF_Work_Summery[".importFields"][] = "qc_done";
$tdataDaily_PDF_Work_Summery[".importFields"][] = "qc_pdf_eta";
$tdataDaily_PDF_Work_Summery[".importFields"][] = "qc_taken";
$tdataDaily_PDF_Work_Summery[".importFields"][] = "qc_performance";
$tdataDaily_PDF_Work_Summery[".importFields"][] = "pdf__total_time";
$tdataDaily_PDF_Work_Summery[".importFields"][] = "total_performance";

$tdataDaily_PDF_Work_Summery[".printFields"] = array();
$tdataDaily_PDF_Work_Summery[".printFields"][] = "work_date";
$tdataDaily_PDF_Work_Summery[".printFields"][] = "pdf_name";
$tdataDaily_PDF_Work_Summery[".printFields"][] = "designer_done";
$tdataDaily_PDF_Work_Summery[".printFields"][] = "designer_eta";
$tdataDaily_PDF_Work_Summery[".printFields"][] = "designer_taken";
$tdataDaily_PDF_Work_Summery[".printFields"][] = "designe_performance";
$tdataDaily_PDF_Work_Summery[".printFields"][] = "qc_done";
$tdataDaily_PDF_Work_Summery[".printFields"][] = "qc_pdf_eta";
$tdataDaily_PDF_Work_Summery[".printFields"][] = "qc_taken";
$tdataDaily_PDF_Work_Summery[".printFields"][] = "qc_performance";
$tdataDaily_PDF_Work_Summery[".printFields"][] = "pdf__total_time";
$tdataDaily_PDF_Work_Summery[".printFields"][] = "total_performance";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Work_Summery","work_date"); 
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

	

	
	$tdataDaily_PDF_Work_Summery["work_date"] = $fdata;
//	pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pdf_name";
	$fdata["GoodName"] = "pdf_name";
	$fdata["ownerTable"] = "users_work_report";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Work_Summery","pdf_name"); 
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

	

	
	$tdataDaily_PDF_Work_Summery["pdf_name"] = $fdata;
//	designer_done
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer_done";
	$fdata["GoodName"] = "designer_done";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Work_Summery","designer_done"); 
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

	

	
	$tdataDaily_PDF_Work_Summery["designer_done"] = $fdata;
//	designer_eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "designer_eta";
	$fdata["GoodName"] = "designer_eta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Work_Summery","designer_eta"); 
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
	$fdata["FullName"] = "SEC_TO_TIME((SUM(IFNULL(estimated_designer_time,0)))+(SUM(IFNULL(total_rejected_by_customer_eta,0))))";
	
		
		
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

	

	
	$tdataDaily_PDF_Work_Summery["designer_eta"] = $fdata;
//	designer_taken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "designer_taken";
	$fdata["GoodName"] = "designer_taken";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Work_Summery","designer_taken"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_taken"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME((SUM(IFNULL(designer_time,0)))+(SUM(IFNULL(total_rejected_by_qc_taken,0))))";
	
		
		
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

	

	
	$tdataDaily_PDF_Work_Summery["designer_taken"] = $fdata;
//	designe_performance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "designe_performance";
	$fdata["GoodName"] = "designe_performance";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Work_Summery","designe_performance"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designe_performance"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "((SUM(IFNULL(estimated_designer_time,0)))+(SUM(IFNULL(total_rejected_by_customer_eta,0))))/((SUM(IFNULL(designer_time,0)))+(SUM(IFNULL(total_rejected_by_qc_taken,0))))*100";
	
		
		
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

	

	
	$tdataDaily_PDF_Work_Summery["designe_performance"] = $fdata;
//	qc_done
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "qc_done";
	$fdata["GoodName"] = "qc_done";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Work_Summery","qc_done"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qc_done"; 
	
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

	

	
	$tdataDaily_PDF_Work_Summery["qc_done"] = $fdata;
//	qc_pdf_eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "qc_pdf_eta";
	$fdata["GoodName"] = "qc_pdf_eta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Work_Summery","qc_pdf_eta"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qc_pdf_eta"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(IFNULL(estimated_qc_time,0))+SUM(IFNULL(total_rejected_by_customer_taken,0)))";
	
		
		
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

	

	
	$tdataDaily_PDF_Work_Summery["qc_pdf_eta"] = $fdata;
//	qc_taken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "qc_taken";
	$fdata["GoodName"] = "qc_taken";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Work_Summery","qc_taken"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qc_taken"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(IFNULL(qc_time,0))+SUM(IFNULL(total_rejected_by_customer_taken,0)))";
	
		
		
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

	

	
	$tdataDaily_PDF_Work_Summery["qc_taken"] = $fdata;
//	qc_performance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "qc_performance";
	$fdata["GoodName"] = "qc_performance";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Work_Summery","qc_performance"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qc_performance"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(SUM(IFNULL(estimated_qc_time,0))+SUM(IFNULL(total_rejected_by_customer_taken,0)))/(SUM(IFNULL(qc_time,0))+SUM(IFNULL(total_rejected_by_customer_taken,0)))*100";
	
		
		
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

	

	
	$tdataDaily_PDF_Work_Summery["qc_performance"] = $fdata;
//	pdf__total_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "pdf__total_time";
	$fdata["GoodName"] = "pdf__total_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Work_Summery","pdf__total_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf__total_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME((SUM(IFNULL(designer_time,0)))+(SUM(IFNULL(total_rejected_by_qc_taken,0)))+(SUM(IFNULL(qc_time,0)))+(SUM(IFNULL(total_rejected_by_customer_taken,0))))";
	
		
		
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

	

	
	$tdataDaily_PDF_Work_Summery["pdf__total_time"] = $fdata;
//	total_performance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "total_performance";
	$fdata["GoodName"] = "total_performance";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Work_Summery","total_performance"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_performance"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "((SUM(IFNULL(estimated_designer_time,0)))+(SUM(IFNULL(estimated_qc_time,0)))+(SUM(IFNULL(total_rejected_by_customer_eta,0))))/(((SUM(IFNULL(designer_time,0))))+(SUM(IFNULL(total_rejected_by_qc_taken,0)))+(SUM(IFNULL(qc_time,0)))+(SUM(IFNULL(total_rejected_by_customer_taken,0))))*100";
	
		
		
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

	

	
	$tdataDaily_PDF_Work_Summery["total_performance"] = $fdata;

	
$tables_data["Daily PDF Work Summery"]=&$tdataDaily_PDF_Work_Summery;
$field_labels["Daily_PDF_Work_Summery"] = &$fieldLabelsDaily_PDF_Work_Summery;
$fieldToolTips["Daily PDF Work Summery"] = &$fieldToolTipsDaily_PDF_Work_Summery;
$page_titles["Daily_PDF_Work_Summery"] = &$pageTitlesDaily_PDF_Work_Summery;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Daily PDF Work Summery"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Daily PDF Work Summery"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Daily_PDF_Work_Summery()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_date,  pdf_name,  SUM(IFNULL(total_images_counted_designer, 0)) AS designer_done,  SEC_TO_TIME((SUM(IFNULL(estimated_designer_time,0)))+(SUM(IFNULL(total_rejected_by_customer_eta,0)))) AS designer_eta,  SEC_TO_TIME((SUM(IFNULL(designer_time,0)))+(SUM(IFNULL(total_rejected_by_qc_taken,0)))) AS designer_taken,  ((SUM(IFNULL(estimated_designer_time,0)))+(SUM(IFNULL(total_rejected_by_customer_eta,0))))/((SUM(IFNULL(designer_time,0)))+(SUM(IFNULL(total_rejected_by_qc_taken,0))))*100 AS designe_performance,  SUM(IFNULL(total_images_counted_qc, 0)) AS qc_done,  SEC_TO_TIME(SUM(IFNULL(estimated_qc_time,0))+SUM(IFNULL(total_rejected_by_customer_taken,0))) AS qc_pdf_eta,  SEC_TO_TIME(SUM(IFNULL(qc_time,0))+SUM(IFNULL(total_rejected_by_customer_taken,0))) AS qc_taken,  (SUM(IFNULL(estimated_qc_time,0))+SUM(IFNULL(total_rejected_by_customer_taken,0)))/(SUM(IFNULL(qc_time,0))+SUM(IFNULL(total_rejected_by_customer_taken,0)))*100 AS qc_performance,  SEC_TO_TIME((SUM(IFNULL(designer_time,0)))+(SUM(IFNULL(total_rejected_by_qc_taken,0)))+(SUM(IFNULL(qc_time,0)))+(SUM(IFNULL(total_rejected_by_customer_taken,0)))) AS pdf__total_time,  ((SUM(IFNULL(estimated_designer_time,0)))+(SUM(IFNULL(estimated_qc_time,0)))+(SUM(IFNULL(total_rejected_by_customer_eta,0))))/(((SUM(IFNULL(designer_time,0))))+(SUM(IFNULL(total_rejected_by_qc_taken,0)))+(SUM(IFNULL(qc_time,0)))+(SUM(IFNULL(total_rejected_by_customer_taken,0))))*100 AS total_performance";
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
	"m_srcTableName" => "Daily PDF Work Summery"
));

$proto5["m_sql"] = "work_date";
$proto5["m_srcTableName"] = "Daily PDF Work Summery";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily PDF Work Summery"
));

$proto7["m_sql"] = "pdf_name";
$proto7["m_srcTableName"] = "Daily PDF Work Summery";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$proto10=array();
$proto10["m_functiontype"] = "SQLF_SUM";
$proto10["m_arguments"] = array();
						$proto11=array();
$proto11["m_functiontype"] = "SQLF_CUSTOM";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "total_images_counted_designer"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto11);

$proto10["m_arguments"][]=$obj;
$proto10["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto10);

$proto9["m_sql"] = "SUM(IFNULL(total_images_counted_designer, 0))";
$proto9["m_srcTableName"] = "Daily PDF Work Summery";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "designer_done";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(SUM(IFNULL(estimated_designer_time,0)))+(SUM(IFNULL(total_rejected_by_customer_eta,0)))"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "SEC_TO_TIME((SUM(IFNULL(estimated_designer_time,0)))+(SUM(IFNULL(total_rejected_by_customer_eta,0))))";
$proto14["m_srcTableName"] = "Daily PDF Work Summery";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "designer_eta";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$proto18=array();
$proto18["m_functiontype"] = "SQLF_CUSTOM";
$proto18["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(SUM(IFNULL(designer_time,0)))+(SUM(IFNULL(total_rejected_by_qc_taken,0)))"
));

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto18);

$proto17["m_sql"] = "SEC_TO_TIME((SUM(IFNULL(designer_time,0)))+(SUM(IFNULL(total_rejected_by_qc_taken,0))))";
$proto17["m_srcTableName"] = "Daily PDF Work Summery";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "designer_taken";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((SUM(IFNULL(estimated_designer_time,0)))+(SUM(IFNULL(total_rejected_by_customer_eta,0))))/((SUM(IFNULL(designer_time,0)))+(SUM(IFNULL(total_rejected_by_qc_taken,0))))*100"
));

$proto20["m_sql"] = "((SUM(IFNULL(estimated_designer_time,0)))+(SUM(IFNULL(total_rejected_by_customer_eta,0))))/((SUM(IFNULL(designer_time,0)))+(SUM(IFNULL(total_rejected_by_qc_taken,0))))*100";
$proto20["m_srcTableName"] = "Daily PDF Work Summery";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "designe_performance";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$proto23=array();
$proto23["m_functiontype"] = "SQLF_SUM";
$proto23["m_arguments"] = array();
						$proto24=array();
$proto24["m_functiontype"] = "SQLF_CUSTOM";
$proto24["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "total_images_counted_qc"
));

$proto24["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto24["m_arguments"][]=$obj;
$proto24["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto24);

$proto23["m_arguments"][]=$obj;
$proto23["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto23);

$proto22["m_sql"] = "SUM(IFNULL(total_images_counted_qc, 0))";
$proto22["m_srcTableName"] = "Daily PDF Work Summery";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "qc_done";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$proto28=array();
$proto28["m_functiontype"] = "SQLF_CUSTOM";
$proto28["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(IFNULL(estimated_qc_time,0))+SUM(IFNULL(total_rejected_by_customer_taken,0))"
));

$proto28["m_arguments"][]=$obj;
$proto28["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto28);

$proto27["m_sql"] = "SEC_TO_TIME(SUM(IFNULL(estimated_qc_time,0))+SUM(IFNULL(total_rejected_by_customer_taken,0)))";
$proto27["m_srcTableName"] = "Daily PDF Work Summery";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "qc_pdf_eta";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$proto31=array();
$proto31["m_functiontype"] = "SQLF_CUSTOM";
$proto31["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(IFNULL(qc_time,0))+SUM(IFNULL(total_rejected_by_customer_taken,0))"
));

$proto31["m_arguments"][]=$obj;
$proto31["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto31);

$proto30["m_sql"] = "SEC_TO_TIME(SUM(IFNULL(qc_time,0))+SUM(IFNULL(total_rejected_by_customer_taken,0)))";
$proto30["m_srcTableName"] = "Daily PDF Work Summery";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "qc_taken";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(SUM(IFNULL(estimated_qc_time,0))+SUM(IFNULL(total_rejected_by_customer_taken,0)))/(SUM(IFNULL(qc_time,0))+SUM(IFNULL(total_rejected_by_customer_taken,0)))*100"
));

$proto33["m_sql"] = "(SUM(IFNULL(estimated_qc_time,0))+SUM(IFNULL(total_rejected_by_customer_taken,0)))/(SUM(IFNULL(qc_time,0))+SUM(IFNULL(total_rejected_by_customer_taken,0)))*100";
$proto33["m_srcTableName"] = "Daily PDF Work Summery";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "qc_performance";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$proto36=array();
$proto36["m_functiontype"] = "SQLF_CUSTOM";
$proto36["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(SUM(IFNULL(designer_time,0)))+(SUM(IFNULL(total_rejected_by_qc_taken,0)))+(SUM(IFNULL(qc_time,0)))+(SUM(IFNULL(total_rejected_by_customer_taken,0)))"
));

$proto36["m_arguments"][]=$obj;
$proto36["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto36);

$proto35["m_sql"] = "SEC_TO_TIME((SUM(IFNULL(designer_time,0)))+(SUM(IFNULL(total_rejected_by_qc_taken,0)))+(SUM(IFNULL(qc_time,0)))+(SUM(IFNULL(total_rejected_by_customer_taken,0))))";
$proto35["m_srcTableName"] = "Daily PDF Work Summery";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "pdf__total_time";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((SUM(IFNULL(estimated_designer_time,0)))+(SUM(IFNULL(estimated_qc_time,0)))+(SUM(IFNULL(total_rejected_by_customer_eta,0))))/(((SUM(IFNULL(designer_time,0))))+(SUM(IFNULL(total_rejected_by_qc_taken,0)))+(SUM(IFNULL(qc_time,0)))+(SUM(IFNULL(total_rejected_by_customer_taken,0))))*100"
));

$proto38["m_sql"] = "((SUM(IFNULL(estimated_designer_time,0)))+(SUM(IFNULL(estimated_qc_time,0)))+(SUM(IFNULL(total_rejected_by_customer_eta,0))))/(((SUM(IFNULL(designer_time,0))))+(SUM(IFNULL(total_rejected_by_qc_taken,0)))+(SUM(IFNULL(qc_time,0)))+(SUM(IFNULL(total_rejected_by_customer_taken,0))))*100";
$proto38["m_srcTableName"] = "Daily PDF Work Summery";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "total_performance";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "users_work_report";
$proto41["m_srcTableName"] = "Daily PDF Work Summery";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "report_id";
$proto41["m_columns"][] = "report_reference";
$proto41["m_columns"][] = "work_date";
$proto41["m_columns"][] = "user_name";
$proto41["m_columns"][] = "team_id";
$proto41["m_columns"][] = "subdiv_id";
$proto41["m_columns"][] = "user_group";
$proto41["m_columns"][] = "pdf_name";
$proto41["m_columns"][] = "total_images_counted_designer";
$proto41["m_columns"][] = "estimated_designer_time";
$proto41["m_columns"][] = "designer_time";
$proto41["m_columns"][] = "total_images_counted_qc";
$proto41["m_columns"][] = "estimated_qc_time";
$proto41["m_columns"][] = "qc_time";
$proto41["m_columns"][] = "total_rejected_by_qc";
$proto41["m_columns"][] = "total_rejected_by_qc_eta";
$proto41["m_columns"][] = "total_rejected_by_qc_taken";
$proto41["m_columns"][] = "total_rejected_by_customer";
$proto41["m_columns"][] = "total_rejected_by_customer_eta";
$proto41["m_columns"][] = "total_rejected_by_customer_taken";
$proto41["m_columns"][] = "efficiency";
$proto41["m_columns"][] = "work_type";
$proto41["m_columns"][] = "comments";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "users_work_report";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "Daily PDF Work Summery";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily PDF Work Summery"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily PDF Work Summery"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "users_work_report",
	"m_srcTableName" => "Daily PDF Work Summery"
));

$proto48["m_column"]=$obj;
$proto48["m_bAsc"] = 0;
$proto48["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto48);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Daily PDF Work Summery";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Daily_PDF_Work_Summery = createSqlQuery_Daily_PDF_Work_Summery();


	
												
	
$tdataDaily_PDF_Work_Summery[".sqlquery"] = $queryData_Daily_PDF_Work_Summery;

$tableEvents["Daily PDF Work Summery"] = new eventsBase;
$tdataDaily_PDF_Work_Summery[".hasEvents"] = false;

?>