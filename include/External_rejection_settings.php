<?php
require_once(getabspath("classes/cipherer.php"));




$tdataExternal_Rejection = array();	
	$tdataExternal_Rejection[".truncateText"] = true;
	$tdataExternal_Rejection[".NumberOfChars"] = 80; 
	$tdataExternal_Rejection[".ShortName"] = "External_Rejection";
	$tdataExternal_Rejection[".OwnerID"] = "";
	$tdataExternal_Rejection[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsExternal_Rejection = array();
$fieldToolTipsExternal_Rejection = array();
$pageTitlesExternal_Rejection = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsExternal_Rejection["English"] = array();
	$fieldToolTipsExternal_Rejection["English"] = array();
	$pageTitlesExternal_Rejection["English"] = array();
	$fieldLabelsExternal_Rejection["English"]["qc_id"] = "Qc Id";
	$fieldToolTipsExternal_Rejection["English"]["qc_id"] = "";
	$fieldLabelsExternal_Rejection["English"]["files_rejected"] = "Files Rejected";
	$fieldToolTipsExternal_Rejection["English"]["files_rejected"] = "";
	$fieldLabelsExternal_Rejection["English"]["DATE_qcend_date_"] = "Date";
	$fieldToolTipsExternal_Rejection["English"]["DATE(qcend_date)"] = "";
	$fieldLabelsExternal_Rejection["English"]["SEC_TO_TIME_sum_time_to_sec_qc_time___"] = "Taken Time";
	$fieldToolTipsExternal_Rejection["English"]["SEC_TO_TIME(sum(time_to_sec(qc_time)))"] = "";
	if (count($fieldToolTipsExternal_Rejection["English"]))
		$tdataExternal_Rejection[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsExternal_Rejection[""] = array();
	$fieldToolTipsExternal_Rejection[""] = array();
	$pageTitlesExternal_Rejection[""] = array();
	$fieldLabelsExternal_Rejection[""]["qc_id"] = "Qc Id";
	$fieldToolTipsExternal_Rejection[""]["qc_id"] = "";
	$fieldLabelsExternal_Rejection[""]["files_rejected"] = "Files Rejected";
	$fieldToolTipsExternal_Rejection[""]["files_rejected"] = "";
	$fieldLabelsExternal_Rejection[""]["DATE_qcend_date_"] = "DATE(qcend Date)";
	$fieldToolTipsExternal_Rejection[""]["DATE(qcend_date)"] = "";
	$fieldLabelsExternal_Rejection[""]["SEC_TO_TIME_sum_time_to_sec_qc_time___"] = "SEC TO TIME(sum(time To Sec(qc Time)))";
	$fieldToolTipsExternal_Rejection[""]["SEC_TO_TIME(sum(time_to_sec(qc_time)))"] = "";
	if (count($fieldToolTipsExternal_Rejection[""]))
		$tdataExternal_Rejection[".isUseToolTips"] = true;
}
	
	
	$tdataExternal_Rejection[".NCSearch"] = true;



$tdataExternal_Rejection[".shortTableName"] = "External_Rejection";
$tdataExternal_Rejection[".nSecOptions"] = 0;
$tdataExternal_Rejection[".recsPerRowList"] = 1;
$tdataExternal_Rejection[".recsPerRowPrint"] = 1;
$tdataExternal_Rejection[".mainTableOwnerID"] = "";
$tdataExternal_Rejection[".moveNext"] = 1;
$tdataExternal_Rejection[".entityType"] = 2;

$tdataExternal_Rejection[".strOriginalTableName"] = "jobfile";




$tdataExternal_Rejection[".showAddInPopup"] = false;

$tdataExternal_Rejection[".showEditInPopup"] = false;

$tdataExternal_Rejection[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataExternal_Rejection[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataExternal_Rejection[".fieldsForRegister"] = array();

$tdataExternal_Rejection[".listAjax"] = false;

	$tdataExternal_Rejection[".audit"] = false;

	$tdataExternal_Rejection[".locking"] = false;


$tdataExternal_Rejection[".add"] = true;
$tdataExternal_Rejection[".afterAddAction"] = 1;
$tdataExternal_Rejection[".closePopupAfterAdd"] = 1;
$tdataExternal_Rejection[".afterAddActionDetTable"] = "";

$tdataExternal_Rejection[".list"] = true;

$tdataExternal_Rejection[".inlineAdd"] = true;


$tdataExternal_Rejection[".exportTo"] = true;

$tdataExternal_Rejection[".printFriendly"] = true;


$tdataExternal_Rejection[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataExternal_Rejection[".searchSaving"] = false;
//

$tdataExternal_Rejection[".showSearchPanel"] = true;
		$tdataExternal_Rejection[".flexibleSearch"] = true;		

if (isMobile())
	$tdataExternal_Rejection[".isUseAjaxSuggest"] = false;
else 
	$tdataExternal_Rejection[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataExternal_Rejection[".addPageEvents"] = false;

// use timepicker for search panel
$tdataExternal_Rejection[".isUseTimeForSearch"] = false;





$tdataExternal_Rejection[".allSearchFields"] = array();
$tdataExternal_Rejection[".filterFields"] = array();
$tdataExternal_Rejection[".requiredSearchFields"] = array();

$tdataExternal_Rejection[".allSearchFields"][] = "DATE(qcend_date)";
	$tdataExternal_Rejection[".allSearchFields"][] = "qc_id";
	$tdataExternal_Rejection[".allSearchFields"][] = "files_rejected";
	$tdataExternal_Rejection[".allSearchFields"][] = "SEC_TO_TIME(sum(time_to_sec(qc_time)))";
	

$tdataExternal_Rejection[".googleLikeFields"] = array();
$tdataExternal_Rejection[".googleLikeFields"][] = "DATE(qcend_date)";
$tdataExternal_Rejection[".googleLikeFields"][] = "qc_id";
$tdataExternal_Rejection[".googleLikeFields"][] = "files_rejected";
$tdataExternal_Rejection[".googleLikeFields"][] = "SEC_TO_TIME(sum(time_to_sec(qc_time)))";


$tdataExternal_Rejection[".advSearchFields"] = array();
$tdataExternal_Rejection[".advSearchFields"][] = "DATE(qcend_date)";
$tdataExternal_Rejection[".advSearchFields"][] = "qc_id";
$tdataExternal_Rejection[".advSearchFields"][] = "files_rejected";
$tdataExternal_Rejection[".advSearchFields"][] = "SEC_TO_TIME(sum(time_to_sec(qc_time)))";

$tdataExternal_Rejection[".tableType"] = "report";

$tdataExternal_Rejection[".printerPageOrientation"] = 0;
$tdataExternal_Rejection[".nPrinterPageScale"] = 100;

$tdataExternal_Rejection[".nPrinterSplitRecords"] = 40;

$tdataExternal_Rejection[".nPrinterPDFSplitRecords"] = 40;



$tdataExternal_Rejection[".geocodingEnabled"] = false;

//report settings
$tdataExternal_Rejection[".printReportLayout"] = 3;	

$tdataExternal_Rejection[".reportPrintPartitionType"] = 1;	
$tdataExternal_Rejection[".reportPrintGroupsPerPage"] = 3;	
	$tdataExternal_Rejection[".reportPrintPDFGroupsPerPage"] = 3;	
$tdataExternal_Rejection[".lowGroup"] = 1;



$tdataExternal_Rejection[".reportGroupFields"] = true;
$tdataExternal_Rejection[".pageSize"] = 1;
$tdataExternal_Rejection[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "DATE(qcend_date)";
	$rgroupField['groupInterval'] = 5;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataExternal_Rejection[".reportGroupFieldsData"] = $reportGroupFields;


$tdataExternal_Rejection[".isExistTotalFields"] = true;




$tdataExternal_Rejection[".repShowDet"] = true;

$tdataExternal_Rejection[".reportLayout"] = 3;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY DATE(qcend_date) DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataExternal_Rejection[".strOrderBy"] = $tstrOrderBy;

$tdataExternal_Rejection[".orderindexes"] = array();
$tdataExternal_Rejection[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "DATE(qcend_date)");

$tdataExternal_Rejection[".sqlHead"] = "SELECT DATE(qcend_date),  qc_id,  COUNT(qc_id) AS files_rejected,  SEC_TO_TIME(sum(time_to_sec(qc_time)))";
$tdataExternal_Rejection[".sqlFrom"] = "FROM jobfile";
$tdataExternal_Rejection[".sqlWhereExpr"] = "jobfile_status_id =11";
$tdataExternal_Rejection[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataExternal_Rejection[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataExternal_Rejection[".arrGroupsPerPage"] = $arrGPP;

$tdataExternal_Rejection[".highlightSearchResults"] = true;

$tableKeysExternal_Rejection = array();
$tdataExternal_Rejection[".Keys"] = $tableKeysExternal_Rejection;

$tdataExternal_Rejection[".listFields"] = array();
$tdataExternal_Rejection[".listFields"][] = "DATE(qcend_date)";
$tdataExternal_Rejection[".listFields"][] = "qc_id";
$tdataExternal_Rejection[".listFields"][] = "files_rejected";
$tdataExternal_Rejection[".listFields"][] = "SEC_TO_TIME(sum(time_to_sec(qc_time)))";

$tdataExternal_Rejection[".hideMobileList"] = array();


$tdataExternal_Rejection[".viewFields"] = array();
$tdataExternal_Rejection[".viewFields"][] = "DATE(qcend_date)";
$tdataExternal_Rejection[".viewFields"][] = "qc_id";
$tdataExternal_Rejection[".viewFields"][] = "files_rejected";
$tdataExternal_Rejection[".viewFields"][] = "SEC_TO_TIME(sum(time_to_sec(qc_time)))";

$tdataExternal_Rejection[".addFields"] = array();
$tdataExternal_Rejection[".addFields"][] = "qc_id";

$tdataExternal_Rejection[".masterListFields"] = array();
$tdataExternal_Rejection[".masterListFields"][] = "DATE(qcend_date)";
$tdataExternal_Rejection[".masterListFields"][] = "qc_id";
$tdataExternal_Rejection[".masterListFields"][] = "files_rejected";
$tdataExternal_Rejection[".masterListFields"][] = "SEC_TO_TIME(sum(time_to_sec(qc_time)))";

$tdataExternal_Rejection[".inlineAddFields"] = array();
$tdataExternal_Rejection[".inlineAddFields"][] = "qc_id";

$tdataExternal_Rejection[".editFields"] = array();
$tdataExternal_Rejection[".editFields"][] = "qc_id";

$tdataExternal_Rejection[".inlineEditFields"] = array();
$tdataExternal_Rejection[".inlineEditFields"][] = "qc_id";

$tdataExternal_Rejection[".exportFields"] = array();
$tdataExternal_Rejection[".exportFields"][] = "DATE(qcend_date)";
$tdataExternal_Rejection[".exportFields"][] = "qc_id";
$tdataExternal_Rejection[".exportFields"][] = "files_rejected";
$tdataExternal_Rejection[".exportFields"][] = "SEC_TO_TIME(sum(time_to_sec(qc_time)))";

$tdataExternal_Rejection[".importFields"] = array();
$tdataExternal_Rejection[".importFields"][] = "DATE(qcend_date)";
$tdataExternal_Rejection[".importFields"][] = "qc_id";
$tdataExternal_Rejection[".importFields"][] = "files_rejected";
$tdataExternal_Rejection[".importFields"][] = "SEC_TO_TIME(sum(time_to_sec(qc_time)))";

$tdataExternal_Rejection[".printFields"] = array();
$tdataExternal_Rejection[".printFields"][] = "DATE(qcend_date)";
$tdataExternal_Rejection[".printFields"][] = "qc_id";
$tdataExternal_Rejection[".printFields"][] = "files_rejected";
$tdataExternal_Rejection[".printFields"][] = "SEC_TO_TIME(sum(time_to_sec(qc_time)))";

//	DATE(qcend_date)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DATE(qcend_date)";
	$fdata["GoodName"] = "DATE_qcend_date_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("External_Rejection","DATE_qcend_date_"); 
	$fdata["FieldType"] = 7;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DATE(qcend_date)"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE(qcend_date)";
	
		
		
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

	

	
	$tdataExternal_Rejection["DATE(qcend_date)"] = $fdata;
//	qc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "qc_id";
	$fdata["GoodName"] = "qc_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("External_Rejection","qc_id"); 
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
	
		$fdata["strField"] = "qc_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qc_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataExternal_Rejection["qc_id"] = $fdata;
//	files_rejected
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "files_rejected";
	$fdata["GoodName"] = "files_rejected";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("External_Rejection","files_rejected"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "files_rejected"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(qc_id)";
	
		
		
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

	

	
	$tdataExternal_Rejection["files_rejected"] = $fdata;
//	SEC_TO_TIME(sum(time_to_sec(qc_time)))
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SEC_TO_TIME(sum(time_to_sec(qc_time)))";
	$fdata["GoodName"] = "SEC_TO_TIME_sum_time_to_sec_qc_time___";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("External_Rejection","SEC_TO_TIME_sum_time_to_sec_qc_time___"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "SEC_TO_TIME(sum(time_to_sec(qc_time)))"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(sum(time_to_sec(qc_time)))";
	
		
		
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

	

	
	$tdataExternal_Rejection["SEC_TO_TIME(sum(time_to_sec(qc_time)))"] = $fdata;

	
$tables_data["External Rejection"]=&$tdataExternal_Rejection;
$field_labels["External_Rejection"] = &$fieldLabelsExternal_Rejection;
$fieldToolTips["External Rejection"] = &$fieldToolTipsExternal_Rejection;
$page_titles["External_Rejection"] = &$pageTitlesExternal_Rejection;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["External Rejection"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["External Rejection"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_External_Rejection()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DATE(qcend_date),  qc_id,  COUNT(qc_id) AS files_rejected,  SEC_TO_TIME(sum(time_to_sec(qc_time)))";
$proto0["m_strFrom"] = "FROM jobfile";
$proto0["m_strWhere"] = "jobfile_status_id =11";
$proto0["m_strOrderBy"] = "ORDER BY DATE(qcend_date) DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "jobfile_status_id =11";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "External Rejection"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=11";
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
	"m_sql" => "qcend_date"
));

$proto6["m_arguments"][]=$obj;
$proto6["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto6);

$proto5["m_sql"] = "DATE(qcend_date)";
$proto5["m_srcTableName"] = "External Rejection";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "qc_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "External Rejection"
));

$proto8["m_sql"] = "qc_id";
$proto8["m_srcTableName"] = "External Rejection";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_COUNT";
$proto11["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "qc_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "External Rejection"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "COUNT(qc_id)";
$proto10["m_srcTableName"] = "External Rejection";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "files_rejected";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_CUSTOM";
$proto14["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(time_to_sec(qc_time))"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "SEC_TO_TIME(sum(time_to_sec(qc_time)))";
$proto13["m_srcTableName"] = "External Rejection";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "jobfile";
$proto17["m_srcTableName"] = "External Rejection";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "jobfile_id";
$proto17["m_columns"][] = "file_url";
$proto17["m_columns"][] = "client_id";
$proto17["m_columns"][] = "work_id";
$proto17["m_columns"][] = "job_id";
$proto17["m_columns"][] = "project_id";
$proto17["m_columns"][] = "folder_name";
$proto17["m_columns"][] = "filename";
$proto17["m_columns"][] = "jobfile_type";
$proto17["m_columns"][] = "jobfile_note";
$proto17["m_columns"][] = "jobfile_status_id";
$proto17["m_columns"][] = "downloader_id";
$proto17["m_columns"][] = "distributor_id";
$proto17["m_columns"][] = "designer_id";
$proto17["m_columns"][] = "qc_id";
$proto17["m_columns"][] = "uploader_id";
$proto17["m_columns"][] = "notifier_id";
$proto17["m_columns"][] = "rejector_id";
$proto17["m_columns"][] = "download_date";
$proto17["m_columns"][] = "distribute_date";
$proto17["m_columns"][] = "start_date";
$proto17["m_columns"][] = "end_date";
$proto17["m_columns"][] = "designer_time";
$proto17["m_columns"][] = "qcstart_date";
$proto17["m_columns"][] = "qcend_date";
$proto17["m_columns"][] = "qc_time";
$proto17["m_columns"][] = "upload_date";
$proto17["m_columns"][] = "notify_date";
$proto17["m_columns"][] = "reject_date";
$proto17["m_columns"][] = "reject_reason";
$proto17["m_columns"][] = "designer2_id";
$proto17["m_columns"][] = "start2_date";
$proto17["m_columns"][] = "end2_date";
$proto17["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "jobfile";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "External Rejection";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto20=array();
						$proto21=array();
$proto21["m_functiontype"] = "SQLF_CUSTOM";
$proto21["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "qcend_date"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto21);

$proto20["m_column"]=$obj;
$obj = new SQLGroupByItem($proto20);

$proto0["m_groupby"][]=$obj;
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "qc_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "External Rejection"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto25=array();
						$proto26=array();
$proto26["m_functiontype"] = "SQLF_CUSTOM";
$proto26["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "qcend_date"
));

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto26);

$proto25["m_column"]=$obj;
$proto25["m_bAsc"] = 0;
$proto25["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto25);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="External Rejection";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_External_Rejection = createSqlQuery_External_Rejection();


	
				
	
$tdataExternal_Rejection[".sqlquery"] = $queryData_External_Rejection;

$tableEvents["External Rejection"] = new eventsBase;
$tdataExternal_Rejection[".hasEvents"] = false;

?>