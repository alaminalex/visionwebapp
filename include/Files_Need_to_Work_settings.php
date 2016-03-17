<?php
require_once(getabspath("classes/cipherer.php"));




$tdataFiles_Need_to_Work = array();	
	$tdataFiles_Need_to_Work[".truncateText"] = true;
	$tdataFiles_Need_to_Work[".NumberOfChars"] = 80; 
	$tdataFiles_Need_to_Work[".ShortName"] = "Files_Need_to_Work";
	$tdataFiles_Need_to_Work[".OwnerID"] = "";
	$tdataFiles_Need_to_Work[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsFiles_Need_to_Work = array();
$fieldToolTipsFiles_Need_to_Work = array();
$pageTitlesFiles_Need_to_Work = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsFiles_Need_to_Work["English"] = array();
	$fieldToolTipsFiles_Need_to_Work["English"] = array();
	$pageTitlesFiles_Need_to_Work["English"] = array();
	$fieldLabelsFiles_Need_to_Work["English"]["files"] = "Files";
	$fieldToolTipsFiles_Need_to_Work["English"]["files"] = "";
	$fieldLabelsFiles_Need_to_Work["English"]["pdf_name"] = "Pdf Name";
	$fieldToolTipsFiles_Need_to_Work["English"]["pdf_name"] = "";
	$fieldLabelsFiles_Need_to_Work["English"]["pdf_estimated_average"] = "Pdf Estimated Average";
	$fieldToolTipsFiles_Need_to_Work["English"]["pdf_estimated_average"] = "";
	$fieldLabelsFiles_Need_to_Work["English"]["eta_need"] = "Eta Need";
	$fieldToolTipsFiles_Need_to_Work["English"]["eta_need"] = "";
	$fieldLabelsFiles_Need_to_Work["English"]["fte"] = "Fte";
	$fieldToolTipsFiles_Need_to_Work["English"]["fte"] = "";
	if (count($fieldToolTipsFiles_Need_to_Work["English"]))
		$tdataFiles_Need_to_Work[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsFiles_Need_to_Work[""] = array();
	$fieldToolTipsFiles_Need_to_Work[""] = array();
	$pageTitlesFiles_Need_to_Work[""] = array();
	$fieldLabelsFiles_Need_to_Work[""]["fte"] = "Fte";
	$fieldToolTipsFiles_Need_to_Work[""]["fte"] = "";
	if (count($fieldToolTipsFiles_Need_to_Work[""]))
		$tdataFiles_Need_to_Work[".isUseToolTips"] = true;
}
	
	
	$tdataFiles_Need_to_Work[".NCSearch"] = true;



$tdataFiles_Need_to_Work[".shortTableName"] = "Files_Need_to_Work";
$tdataFiles_Need_to_Work[".nSecOptions"] = 0;
$tdataFiles_Need_to_Work[".recsPerRowList"] = 1;
$tdataFiles_Need_to_Work[".recsPerRowPrint"] = 1;
$tdataFiles_Need_to_Work[".mainTableOwnerID"] = "";
$tdataFiles_Need_to_Work[".moveNext"] = 1;
$tdataFiles_Need_to_Work[".entityType"] = 2;

$tdataFiles_Need_to_Work[".strOriginalTableName"] = "jobfile";




$tdataFiles_Need_to_Work[".showAddInPopup"] = false;

$tdataFiles_Need_to_Work[".showEditInPopup"] = false;

$tdataFiles_Need_to_Work[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataFiles_Need_to_Work[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataFiles_Need_to_Work[".fieldsForRegister"] = array();

$tdataFiles_Need_to_Work[".listAjax"] = false;

	$tdataFiles_Need_to_Work[".audit"] = false;

	$tdataFiles_Need_to_Work[".locking"] = false;


$tdataFiles_Need_to_Work[".add"] = true;
$tdataFiles_Need_to_Work[".afterAddAction"] = 0;
$tdataFiles_Need_to_Work[".closePopupAfterAdd"] = 1;
$tdataFiles_Need_to_Work[".afterAddActionDetTable"] = "";

$tdataFiles_Need_to_Work[".list"] = true;

$tdataFiles_Need_to_Work[".inlineAdd"] = true;


$tdataFiles_Need_to_Work[".exportTo"] = true;

$tdataFiles_Need_to_Work[".printFriendly"] = true;


$tdataFiles_Need_to_Work[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataFiles_Need_to_Work[".searchSaving"] = false;
//

$tdataFiles_Need_to_Work[".showSearchPanel"] = true;
		$tdataFiles_Need_to_Work[".flexibleSearch"] = true;		

if (isMobile())
	$tdataFiles_Need_to_Work[".isUseAjaxSuggest"] = false;
else 
	$tdataFiles_Need_to_Work[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataFiles_Need_to_Work[".addPageEvents"] = false;

// use timepicker for search panel
$tdataFiles_Need_to_Work[".isUseTimeForSearch"] = false;





$tdataFiles_Need_to_Work[".allSearchFields"] = array();
$tdataFiles_Need_to_Work[".filterFields"] = array();
$tdataFiles_Need_to_Work[".requiredSearchFields"] = array();

$tdataFiles_Need_to_Work[".allSearchFields"][] = "files";
	$tdataFiles_Need_to_Work[".allSearchFields"][] = "pdf_name";
	$tdataFiles_Need_to_Work[".allSearchFields"][] = "pdf_estimated_average";
	$tdataFiles_Need_to_Work[".allSearchFields"][] = "eta_need";
	$tdataFiles_Need_to_Work[".allSearchFields"][] = "fte";
	

$tdataFiles_Need_to_Work[".googleLikeFields"] = array();
$tdataFiles_Need_to_Work[".googleLikeFields"][] = "files";
$tdataFiles_Need_to_Work[".googleLikeFields"][] = "pdf_name";
$tdataFiles_Need_to_Work[".googleLikeFields"][] = "pdf_estimated_average";
$tdataFiles_Need_to_Work[".googleLikeFields"][] = "eta_need";
$tdataFiles_Need_to_Work[".googleLikeFields"][] = "fte";


$tdataFiles_Need_to_Work[".advSearchFields"] = array();
$tdataFiles_Need_to_Work[".advSearchFields"][] = "files";
$tdataFiles_Need_to_Work[".advSearchFields"][] = "pdf_name";
$tdataFiles_Need_to_Work[".advSearchFields"][] = "pdf_estimated_average";
$tdataFiles_Need_to_Work[".advSearchFields"][] = "eta_need";
$tdataFiles_Need_to_Work[".advSearchFields"][] = "fte";

$tdataFiles_Need_to_Work[".tableType"] = "report";

$tdataFiles_Need_to_Work[".printerPageOrientation"] = 0;
$tdataFiles_Need_to_Work[".nPrinterPageScale"] = 100;

$tdataFiles_Need_to_Work[".nPrinterSplitRecords"] = 40;

$tdataFiles_Need_to_Work[".nPrinterPDFSplitRecords"] = 40;



$tdataFiles_Need_to_Work[".geocodingEnabled"] = false;

//report settings
$tdataFiles_Need_to_Work[".printReportLayout"] = 6;	

$tdataFiles_Need_to_Work[".reportPrintPartitionType"] = 1;	
$tdataFiles_Need_to_Work[".reportPrintGroupsPerPage"] = 40;	
	$tdataFiles_Need_to_Work[".reportPrintPDFGroupsPerPage"] = 40;
$tdataFiles_Need_to_Work[".lowGroup"] = 0;



$tdataFiles_Need_to_Work[".pageSize"] = 20;	


$tdataFiles_Need_to_Work[".isExistTotalFields"] = true;



$tdataFiles_Need_to_Work[".reportGlobalSummary"] = true;

$tdataFiles_Need_to_Work[".repShowDet"] = true;

$tdataFiles_Need_to_Work[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY pdf.pdf_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataFiles_Need_to_Work[".strOrderBy"] = $tstrOrderBy;

$tdataFiles_Need_to_Work[".orderindexes"] = array();
$tdataFiles_Need_to_Work[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "pdf.pdf_name");

$tdataFiles_Need_to_Work[".sqlHead"] = "SELECT COUNT(*) AS files,  pdf.pdf_name,  pdf.pdf_estimated_average,  (SUM(TIME_TO_SEC(pdf.pdf_estimated_average)))/60 AS eta_need,  (SUM(TIME_TO_SEC(pdf.pdf_estimated_average))/21600) AS fte";
$tdataFiles_Need_to_Work[".sqlFrom"] = "FROM jobfile  INNER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$tdataFiles_Need_to_Work[".sqlWhereExpr"] = "jobfile.jobfile_status_id =3";
$tdataFiles_Need_to_Work[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataFiles_Need_to_Work[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataFiles_Need_to_Work[".arrGroupsPerPage"] = $arrGPP;

$tdataFiles_Need_to_Work[".highlightSearchResults"] = true;

$tableKeysFiles_Need_to_Work = array();
$tdataFiles_Need_to_Work[".Keys"] = $tableKeysFiles_Need_to_Work;

$tdataFiles_Need_to_Work[".listFields"] = array();
$tdataFiles_Need_to_Work[".listFields"][] = "files";
$tdataFiles_Need_to_Work[".listFields"][] = "pdf_name";
$tdataFiles_Need_to_Work[".listFields"][] = "pdf_estimated_average";
$tdataFiles_Need_to_Work[".listFields"][] = "eta_need";
$tdataFiles_Need_to_Work[".listFields"][] = "fte";

$tdataFiles_Need_to_Work[".hideMobileList"] = array();


$tdataFiles_Need_to_Work[".viewFields"] = array();
$tdataFiles_Need_to_Work[".viewFields"][] = "files";
$tdataFiles_Need_to_Work[".viewFields"][] = "pdf_name";
$tdataFiles_Need_to_Work[".viewFields"][] = "pdf_estimated_average";
$tdataFiles_Need_to_Work[".viewFields"][] = "eta_need";
$tdataFiles_Need_to_Work[".viewFields"][] = "fte";

$tdataFiles_Need_to_Work[".addFields"] = array();

$tdataFiles_Need_to_Work[".masterListFields"] = array();
$tdataFiles_Need_to_Work[".masterListFields"][] = "files";
$tdataFiles_Need_to_Work[".masterListFields"][] = "pdf_name";
$tdataFiles_Need_to_Work[".masterListFields"][] = "pdf_estimated_average";
$tdataFiles_Need_to_Work[".masterListFields"][] = "eta_need";
$tdataFiles_Need_to_Work[".masterListFields"][] = "fte";

$tdataFiles_Need_to_Work[".inlineAddFields"] = array();

$tdataFiles_Need_to_Work[".editFields"] = array();

$tdataFiles_Need_to_Work[".inlineEditFields"] = array();

$tdataFiles_Need_to_Work[".exportFields"] = array();
$tdataFiles_Need_to_Work[".exportFields"][] = "files";
$tdataFiles_Need_to_Work[".exportFields"][] = "pdf_name";
$tdataFiles_Need_to_Work[".exportFields"][] = "pdf_estimated_average";
$tdataFiles_Need_to_Work[".exportFields"][] = "eta_need";
$tdataFiles_Need_to_Work[".exportFields"][] = "fte";

$tdataFiles_Need_to_Work[".importFields"] = array();
$tdataFiles_Need_to_Work[".importFields"][] = "files";
$tdataFiles_Need_to_Work[".importFields"][] = "pdf_name";
$tdataFiles_Need_to_Work[".importFields"][] = "pdf_estimated_average";
$tdataFiles_Need_to_Work[".importFields"][] = "eta_need";
$tdataFiles_Need_to_Work[".importFields"][] = "fte";

$tdataFiles_Need_to_Work[".printFields"] = array();
$tdataFiles_Need_to_Work[".printFields"][] = "files";
$tdataFiles_Need_to_Work[".printFields"][] = "pdf_name";
$tdataFiles_Need_to_Work[".printFields"][] = "pdf_estimated_average";
$tdataFiles_Need_to_Work[".printFields"][] = "eta_need";
$tdataFiles_Need_to_Work[".printFields"][] = "fte";

//	files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "files";
	$fdata["GoodName"] = "files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Files_Need_to_Work","files"); 
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

	

	
	$tdataFiles_Need_to_Work["files"] = $fdata;
//	pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pdf_name";
	$fdata["GoodName"] = "pdf_name";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Files_Need_to_Work","pdf_name"); 
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

	

	
	$tdataFiles_Need_to_Work["pdf_name"] = $fdata;
//	pdf_estimated_average
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pdf_estimated_average";
	$fdata["GoodName"] = "pdf_estimated_average";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Files_Need_to_Work","pdf_estimated_average"); 
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

	

	
	$tdataFiles_Need_to_Work["pdf_estimated_average"] = $fdata;
//	eta_need
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "eta_need";
	$fdata["GoodName"] = "eta_need";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Files_Need_to_Work","eta_need"); 
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

	

	
	$tdataFiles_Need_to_Work["eta_need"] = $fdata;
//	fte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fte";
	$fdata["GoodName"] = "fte";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Files_Need_to_Work","fte"); 
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

	

	
	$tdataFiles_Need_to_Work["fte"] = $fdata;

	
$tables_data["Files Need to Work"]=&$tdataFiles_Need_to_Work;
$field_labels["Files_Need_to_Work"] = &$fieldLabelsFiles_Need_to_Work;
$fieldToolTips["Files Need to Work"] = &$fieldToolTipsFiles_Need_to_Work;
$page_titles["Files_Need_to_Work"] = &$pageTitlesFiles_Need_to_Work;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Files Need to Work"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Files Need to Work"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Files_Need_to_Work()
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
	"m_srcTableName" => "Files Need to Work"
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
$proto5["m_srcTableName"] = "Files Need to Work";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "files";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Files Need to Work"
));

$proto8["m_sql"] = "pdf.pdf_name";
$proto8["m_srcTableName"] = "Files Need to Work";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Files Need to Work"
));

$proto10["m_sql"] = "pdf.pdf_estimated_average";
$proto10["m_srcTableName"] = "Files Need to Work";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(SUM(TIME_TO_SEC(pdf.pdf_estimated_average)))/60"
));

$proto12["m_sql"] = "(SUM(TIME_TO_SEC(pdf.pdf_estimated_average)))/60";
$proto12["m_srcTableName"] = "Files Need to Work";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "eta_need";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))/21600)"
));

$proto14["m_sql"] = "(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))/21600)";
$proto14["m_srcTableName"] = "Files Need to Work";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "fte";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "jobfile";
$proto17["m_srcTableName"] = "Files Need to Work";
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
$proto16["m_srcTableName"] = "Files Need to Work";
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
$proto21["m_srcTableName"] = "Files Need to Work";
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
$proto20["m_srcTableName"] = "Files Need to Work";
$proto22=array();
$proto22["m_sql"] = "jobfile.project_id = pdf.pdf_id";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Files Need to Work"
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
	"m_srcTableName" => "Files Need to Work"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Files Need to Work"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 1;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Files Need to Work";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Files_Need_to_Work = createSqlQuery_Files_Need_to_Work();


	
					
	
$tdataFiles_Need_to_Work[".sqlquery"] = $queryData_Files_Need_to_Work;

$tableEvents["Files Need to Work"] = new eventsBase;
$tdataFiles_Need_to_Work[".hasEvents"] = false;

?>