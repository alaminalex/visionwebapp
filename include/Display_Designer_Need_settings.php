<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDisplay_Designer_Need = array();	
	$tdataDisplay_Designer_Need[".truncateText"] = true;
	$tdataDisplay_Designer_Need[".NumberOfChars"] = 80; 
	$tdataDisplay_Designer_Need[".ShortName"] = "Display_Designer_Need";
	$tdataDisplay_Designer_Need[".OwnerID"] = "";
	$tdataDisplay_Designer_Need[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsDisplay_Designer_Need = array();
$fieldToolTipsDisplay_Designer_Need = array();
$pageTitlesDisplay_Designer_Need = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDisplay_Designer_Need["English"] = array();
	$fieldToolTipsDisplay_Designer_Need["English"] = array();
	$pageTitlesDisplay_Designer_Need["English"] = array();
	$fieldLabelsDisplay_Designer_Need["English"]["files"] = "Files";
	$fieldToolTipsDisplay_Designer_Need["English"]["files"] = "";
	$fieldLabelsDisplay_Designer_Need["English"]["pdf_name"] = "Pdf Name";
	$fieldToolTipsDisplay_Designer_Need["English"]["pdf_name"] = "";
	$fieldLabelsDisplay_Designer_Need["English"]["pdf_estimated_average"] = "Pdf Estimated Average";
	$fieldToolTipsDisplay_Designer_Need["English"]["pdf_estimated_average"] = "";
	$fieldLabelsDisplay_Designer_Need["English"]["eta_need"] = "Eta Need";
	$fieldToolTipsDisplay_Designer_Need["English"]["eta_need"] = "";
	$fieldLabelsDisplay_Designer_Need["English"]["fte"] = "Fte";
	$fieldToolTipsDisplay_Designer_Need["English"]["fte"] = "";
	if (count($fieldToolTipsDisplay_Designer_Need["English"]))
		$tdataDisplay_Designer_Need[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDisplay_Designer_Need[""] = array();
	$fieldToolTipsDisplay_Designer_Need[""] = array();
	$pageTitlesDisplay_Designer_Need[""] = array();
	$fieldLabelsDisplay_Designer_Need[""]["fte"] = "Fte";
	$fieldToolTipsDisplay_Designer_Need[""]["fte"] = "";
	if (count($fieldToolTipsDisplay_Designer_Need[""]))
		$tdataDisplay_Designer_Need[".isUseToolTips"] = true;
}
	
	
	$tdataDisplay_Designer_Need[".NCSearch"] = true;



$tdataDisplay_Designer_Need[".shortTableName"] = "Display_Designer_Need";
$tdataDisplay_Designer_Need[".nSecOptions"] = 0;
$tdataDisplay_Designer_Need[".recsPerRowList"] = 1;
$tdataDisplay_Designer_Need[".recsPerRowPrint"] = 1;
$tdataDisplay_Designer_Need[".mainTableOwnerID"] = "";
$tdataDisplay_Designer_Need[".moveNext"] = 1;
$tdataDisplay_Designer_Need[".entityType"] = 2;

$tdataDisplay_Designer_Need[".strOriginalTableName"] = "jobfile";




$tdataDisplay_Designer_Need[".showAddInPopup"] = false;

$tdataDisplay_Designer_Need[".showEditInPopup"] = false;

$tdataDisplay_Designer_Need[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDisplay_Designer_Need[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDisplay_Designer_Need[".fieldsForRegister"] = array();

$tdataDisplay_Designer_Need[".listAjax"] = false;

	$tdataDisplay_Designer_Need[".audit"] = false;

	$tdataDisplay_Designer_Need[".locking"] = false;


$tdataDisplay_Designer_Need[".add"] = true;
$tdataDisplay_Designer_Need[".afterAddAction"] = 0;
$tdataDisplay_Designer_Need[".closePopupAfterAdd"] = 1;
$tdataDisplay_Designer_Need[".afterAddActionDetTable"] = "";

$tdataDisplay_Designer_Need[".list"] = true;

$tdataDisplay_Designer_Need[".inlineAdd"] = true;


$tdataDisplay_Designer_Need[".exportTo"] = true;

$tdataDisplay_Designer_Need[".printFriendly"] = true;


$tdataDisplay_Designer_Need[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDisplay_Designer_Need[".searchSaving"] = false;
//

$tdataDisplay_Designer_Need[".showSearchPanel"] = true;
		$tdataDisplay_Designer_Need[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDisplay_Designer_Need[".isUseAjaxSuggest"] = false;
else 
	$tdataDisplay_Designer_Need[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDisplay_Designer_Need[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDisplay_Designer_Need[".isUseTimeForSearch"] = false;





$tdataDisplay_Designer_Need[".allSearchFields"] = array();
$tdataDisplay_Designer_Need[".filterFields"] = array();
$tdataDisplay_Designer_Need[".requiredSearchFields"] = array();

$tdataDisplay_Designer_Need[".allSearchFields"][] = "files";
	$tdataDisplay_Designer_Need[".allSearchFields"][] = "pdf_name";
	$tdataDisplay_Designer_Need[".allSearchFields"][] = "pdf_estimated_average";
	$tdataDisplay_Designer_Need[".allSearchFields"][] = "eta_need";
	$tdataDisplay_Designer_Need[".allSearchFields"][] = "fte";
	

$tdataDisplay_Designer_Need[".googleLikeFields"] = array();
$tdataDisplay_Designer_Need[".googleLikeFields"][] = "files";
$tdataDisplay_Designer_Need[".googleLikeFields"][] = "pdf_name";
$tdataDisplay_Designer_Need[".googleLikeFields"][] = "pdf_estimated_average";
$tdataDisplay_Designer_Need[".googleLikeFields"][] = "eta_need";
$tdataDisplay_Designer_Need[".googleLikeFields"][] = "fte";


$tdataDisplay_Designer_Need[".advSearchFields"] = array();
$tdataDisplay_Designer_Need[".advSearchFields"][] = "files";
$tdataDisplay_Designer_Need[".advSearchFields"][] = "pdf_name";
$tdataDisplay_Designer_Need[".advSearchFields"][] = "pdf_estimated_average";
$tdataDisplay_Designer_Need[".advSearchFields"][] = "eta_need";
$tdataDisplay_Designer_Need[".advSearchFields"][] = "fte";

$tdataDisplay_Designer_Need[".tableType"] = "report";

$tdataDisplay_Designer_Need[".printerPageOrientation"] = 0;
$tdataDisplay_Designer_Need[".nPrinterPageScale"] = 100;

$tdataDisplay_Designer_Need[".nPrinterSplitRecords"] = 40;

$tdataDisplay_Designer_Need[".nPrinterPDFSplitRecords"] = 40;



$tdataDisplay_Designer_Need[".geocodingEnabled"] = false;

//report settings
$tdataDisplay_Designer_Need[".printReportLayout"] = 6;	

$tdataDisplay_Designer_Need[".reportPrintPartitionType"] = 1;	
$tdataDisplay_Designer_Need[".reportPrintGroupsPerPage"] = 40;	
	$tdataDisplay_Designer_Need[".reportPrintPDFGroupsPerPage"] = 40;
$tdataDisplay_Designer_Need[".lowGroup"] = 0;



$tdataDisplay_Designer_Need[".pageSize"] = 20;	


$tdataDisplay_Designer_Need[".isExistTotalFields"] = true;



$tdataDisplay_Designer_Need[".reportGlobalSummary"] = true;

$tdataDisplay_Designer_Need[".repShowDet"] = true;

$tdataDisplay_Designer_Need[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY pdf.pdf_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDisplay_Designer_Need[".strOrderBy"] = $tstrOrderBy;

$tdataDisplay_Designer_Need[".orderindexes"] = array();
$tdataDisplay_Designer_Need[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "pdf.pdf_name");

$tdataDisplay_Designer_Need[".sqlHead"] = "SELECT COUNT(*) AS files,  pdf.pdf_name,  pdf.pdf_estimated_average,  (SUM(TIME_TO_SEC(pdf.pdf_estimated_average)))/60 AS eta_need,  (SUM(TIME_TO_SEC(pdf.pdf_estimated_average))/21600) AS fte";
$tdataDisplay_Designer_Need[".sqlFrom"] = "FROM jobfile  INNER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$tdataDisplay_Designer_Need[".sqlWhereExpr"] = "jobfile.jobfile_status_id =3";
$tdataDisplay_Designer_Need[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDisplay_Designer_Need[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDisplay_Designer_Need[".arrGroupsPerPage"] = $arrGPP;

$tdataDisplay_Designer_Need[".highlightSearchResults"] = true;

$tableKeysDisplay_Designer_Need = array();
$tdataDisplay_Designer_Need[".Keys"] = $tableKeysDisplay_Designer_Need;

$tdataDisplay_Designer_Need[".listFields"] = array();
$tdataDisplay_Designer_Need[".listFields"][] = "files";
$tdataDisplay_Designer_Need[".listFields"][] = "pdf_name";
$tdataDisplay_Designer_Need[".listFields"][] = "pdf_estimated_average";
$tdataDisplay_Designer_Need[".listFields"][] = "eta_need";
$tdataDisplay_Designer_Need[".listFields"][] = "fte";

$tdataDisplay_Designer_Need[".hideMobileList"] = array();


$tdataDisplay_Designer_Need[".viewFields"] = array();
$tdataDisplay_Designer_Need[".viewFields"][] = "files";
$tdataDisplay_Designer_Need[".viewFields"][] = "pdf_name";
$tdataDisplay_Designer_Need[".viewFields"][] = "pdf_estimated_average";
$tdataDisplay_Designer_Need[".viewFields"][] = "eta_need";
$tdataDisplay_Designer_Need[".viewFields"][] = "fte";

$tdataDisplay_Designer_Need[".addFields"] = array();

$tdataDisplay_Designer_Need[".masterListFields"] = array();
$tdataDisplay_Designer_Need[".masterListFields"][] = "files";
$tdataDisplay_Designer_Need[".masterListFields"][] = "pdf_name";
$tdataDisplay_Designer_Need[".masterListFields"][] = "pdf_estimated_average";
$tdataDisplay_Designer_Need[".masterListFields"][] = "eta_need";
$tdataDisplay_Designer_Need[".masterListFields"][] = "fte";

$tdataDisplay_Designer_Need[".inlineAddFields"] = array();

$tdataDisplay_Designer_Need[".editFields"] = array();

$tdataDisplay_Designer_Need[".inlineEditFields"] = array();

$tdataDisplay_Designer_Need[".exportFields"] = array();
$tdataDisplay_Designer_Need[".exportFields"][] = "files";
$tdataDisplay_Designer_Need[".exportFields"][] = "pdf_name";
$tdataDisplay_Designer_Need[".exportFields"][] = "pdf_estimated_average";
$tdataDisplay_Designer_Need[".exportFields"][] = "eta_need";
$tdataDisplay_Designer_Need[".exportFields"][] = "fte";

$tdataDisplay_Designer_Need[".importFields"] = array();
$tdataDisplay_Designer_Need[".importFields"][] = "files";
$tdataDisplay_Designer_Need[".importFields"][] = "pdf_name";
$tdataDisplay_Designer_Need[".importFields"][] = "pdf_estimated_average";
$tdataDisplay_Designer_Need[".importFields"][] = "eta_need";
$tdataDisplay_Designer_Need[".importFields"][] = "fte";

$tdataDisplay_Designer_Need[".printFields"] = array();
$tdataDisplay_Designer_Need[".printFields"][] = "files";
$tdataDisplay_Designer_Need[".printFields"][] = "pdf_name";
$tdataDisplay_Designer_Need[".printFields"][] = "pdf_estimated_average";
$tdataDisplay_Designer_Need[".printFields"][] = "eta_need";
$tdataDisplay_Designer_Need[".printFields"][] = "fte";

//	files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "files";
	$fdata["GoodName"] = "files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_Designer_Need","files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "files"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(*)";
	
		
		
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

	

	
	$tdataDisplay_Designer_Need["files"] = $fdata;
//	pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pdf_name";
	$fdata["GoodName"] = "pdf_name";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Display_Designer_Need","pdf_name"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf.pdf_name";
	
		
		
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

	

	
	$tdataDisplay_Designer_Need["pdf_name"] = $fdata;
//	pdf_estimated_average
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pdf_estimated_average";
	$fdata["GoodName"] = "pdf_estimated_average";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Display_Designer_Need","pdf_estimated_average"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_estimated_average"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf.pdf_estimated_average";
	
		
		
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

	

	
	$tdataDisplay_Designer_Need["pdf_estimated_average"] = $fdata;
//	eta_need
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "eta_need";
	$fdata["GoodName"] = "eta_need";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_Designer_Need","eta_need"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "eta_need"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(SUM(TIME_TO_SEC(pdf.pdf_estimated_average)))/60";
	
		
		
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

	

	
	$tdataDisplay_Designer_Need["eta_need"] = $fdata;
//	fte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fte";
	$fdata["GoodName"] = "fte";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_Designer_Need","fte"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fte"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))/21600)";
	
		
		
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

	

	
	$tdataDisplay_Designer_Need["fte"] = $fdata;

	
$tables_data["Display_Designer_Need"]=&$tdataDisplay_Designer_Need;
$field_labels["Display_Designer_Need"] = &$fieldLabelsDisplay_Designer_Need;
$fieldToolTips["Display_Designer_Need"] = &$fieldToolTipsDisplay_Designer_Need;
$page_titles["Display_Designer_Need"] = &$pageTitlesDisplay_Designer_Need;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Display_Designer_Need"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Display_Designer_Need"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Display_Designer_Need()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COUNT(*) AS files,  pdf.pdf_name,  pdf.pdf_estimated_average,  (SUM(TIME_TO_SEC(pdf.pdf_estimated_average)))/60 AS eta_need,  (SUM(TIME_TO_SEC(pdf.pdf_estimated_average))/21600) AS fte";
$proto0["m_strFrom"] = "FROM jobfile  INNER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto0["m_strWhere"] = "jobfile.jobfile_status_id =3";
$proto0["m_strOrderBy"] = "ORDER BY pdf.pdf_name";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "jobfile.jobfile_status_id =3";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Display_Designer_Need"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=3";
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
$proto6["m_functiontype"] = "SQLF_COUNT";
$proto6["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto6["m_arguments"][]=$obj;
$proto6["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto6);

$proto5["m_sql"] = "COUNT(*)";
$proto5["m_srcTableName"] = "Display_Designer_Need";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "files";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Display_Designer_Need"
));

$proto8["m_sql"] = "pdf.pdf_name";
$proto8["m_srcTableName"] = "Display_Designer_Need";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Display_Designer_Need"
));

$proto10["m_sql"] = "pdf.pdf_estimated_average";
$proto10["m_srcTableName"] = "Display_Designer_Need";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(SUM(TIME_TO_SEC(pdf.pdf_estimated_average)))/60"
));

$proto12["m_sql"] = "(SUM(TIME_TO_SEC(pdf.pdf_estimated_average)))/60";
$proto12["m_srcTableName"] = "Display_Designer_Need";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "eta_need";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))/21600)"
));

$proto14["m_sql"] = "(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))/21600)";
$proto14["m_srcTableName"] = "Display_Designer_Need";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "fte";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "jobfile";
$proto17["m_srcTableName"] = "Display_Designer_Need";
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
$proto16["m_srcTableName"] = "Display_Designer_Need";
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
												$proto20=array();
$proto20["m_link"] = "SQLL_INNERJOIN";
			$proto21=array();
$proto21["m_strName"] = "pdf";
$proto21["m_srcTableName"] = "Display_Designer_Need";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "pdf_id";
$proto21["m_columns"][] = "pdf_name";
$proto21["m_columns"][] = "client_id";
$proto21["m_columns"][] = "pdf_location";
$proto21["m_columns"][] = "last_update";
$proto21["m_columns"][] = "pdf_estimated_average";
$proto21["m_columns"][] = "pdf_estimated_average1";
$proto21["m_columns"][] = "pdf_estimated_average2";
$proto21["m_columns"][] = "pdf_actual_average";
$proto21["m_columns"][] = "price";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "INNER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "Display_Designer_Need";
$proto22=array();
$proto22["m_sql"] = "jobfile.project_id = pdf.pdf_id";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Display_Designer_Need"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= pdf.pdf_id";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Display_Designer_Need"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Display_Designer_Need"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 1;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Display_Designer_Need";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Display_Designer_Need = createSqlQuery_Display_Designer_Need();


	
					
	
$tdataDisplay_Designer_Need[".sqlquery"] = $queryData_Display_Designer_Need;

$tableEvents["Display_Designer_Need"] = new eventsBase;
$tdataDisplay_Designer_Need[".hasEvents"] = false;

?>