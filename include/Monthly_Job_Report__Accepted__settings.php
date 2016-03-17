<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMonthly_Job_Report__Accepted_ = array();	
	$tdataMonthly_Job_Report__Accepted_[".truncateText"] = true;
	$tdataMonthly_Job_Report__Accepted_[".NumberOfChars"] = 80; 
	$tdataMonthly_Job_Report__Accepted_[".ShortName"] = "Monthly_Job_Report__Accepted_";
	$tdataMonthly_Job_Report__Accepted_[".OwnerID"] = "";
	$tdataMonthly_Job_Report__Accepted_[".OriginalTable"] = "job";

//	field labels
$fieldLabelsMonthly_Job_Report__Accepted_ = array();
$fieldToolTipsMonthly_Job_Report__Accepted_ = array();
$pageTitlesMonthly_Job_Report__Accepted_ = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMonthly_Job_Report__Accepted_["English"] = array();
	$fieldToolTipsMonthly_Job_Report__Accepted_["English"] = array();
	$pageTitlesMonthly_Job_Report__Accepted_["English"] = array();
	$fieldLabelsMonthly_Job_Report__Accepted_["English"]["total_images"] = "Total Images";
	$fieldToolTipsMonthly_Job_Report__Accepted_["English"]["total_images"] = "";
	$fieldLabelsMonthly_Job_Report__Accepted_["English"]["accepted_date"] = "Accepted Date";
	$fieldToolTipsMonthly_Job_Report__Accepted_["English"]["accepted_date"] = "";
	$fieldLabelsMonthly_Job_Report__Accepted_["English"]["pdf_id"] = "Pdf Id";
	$fieldToolTipsMonthly_Job_Report__Accepted_["English"]["pdf_id"] = "";
	$fieldLabelsMonthly_Job_Report__Accepted_["English"]["pdf_name"] = "Pdf Name";
	$fieldToolTipsMonthly_Job_Report__Accepted_["English"]["pdf_name"] = "";
	$fieldLabelsMonthly_Job_Report__Accepted_["English"]["MONTH_job_accepted_date_"] = "MONTH(job.accepted Date)";
	$fieldToolTipsMonthly_Job_Report__Accepted_["English"]["MONTH(job.accepted_date)"] = "";
	if (count($fieldToolTipsMonthly_Job_Report__Accepted_["English"]))
		$tdataMonthly_Job_Report__Accepted_[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMonthly_Job_Report__Accepted_[""] = array();
	$fieldToolTipsMonthly_Job_Report__Accepted_[""] = array();
	$pageTitlesMonthly_Job_Report__Accepted_[""] = array();
	if (count($fieldToolTipsMonthly_Job_Report__Accepted_[""]))
		$tdataMonthly_Job_Report__Accepted_[".isUseToolTips"] = true;
}
	
	
	$tdataMonthly_Job_Report__Accepted_[".NCSearch"] = true;



$tdataMonthly_Job_Report__Accepted_[".shortTableName"] = "Monthly_Job_Report__Accepted_";
$tdataMonthly_Job_Report__Accepted_[".nSecOptions"] = 0;
$tdataMonthly_Job_Report__Accepted_[".recsPerRowList"] = 1;
$tdataMonthly_Job_Report__Accepted_[".recsPerRowPrint"] = 1;
$tdataMonthly_Job_Report__Accepted_[".mainTableOwnerID"] = "";
$tdataMonthly_Job_Report__Accepted_[".moveNext"] = 1;
$tdataMonthly_Job_Report__Accepted_[".entityType"] = 2;

$tdataMonthly_Job_Report__Accepted_[".strOriginalTableName"] = "job";




$tdataMonthly_Job_Report__Accepted_[".showAddInPopup"] = false;

$tdataMonthly_Job_Report__Accepted_[".showEditInPopup"] = false;

$tdataMonthly_Job_Report__Accepted_[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMonthly_Job_Report__Accepted_[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMonthly_Job_Report__Accepted_[".fieldsForRegister"] = array();

$tdataMonthly_Job_Report__Accepted_[".listAjax"] = false;

	$tdataMonthly_Job_Report__Accepted_[".audit"] = false;

	$tdataMonthly_Job_Report__Accepted_[".locking"] = false;


$tdataMonthly_Job_Report__Accepted_[".add"] = true;
$tdataMonthly_Job_Report__Accepted_[".afterAddAction"] = 0;
$tdataMonthly_Job_Report__Accepted_[".closePopupAfterAdd"] = 1;
$tdataMonthly_Job_Report__Accepted_[".afterAddActionDetTable"] = "";

$tdataMonthly_Job_Report__Accepted_[".list"] = true;

$tdataMonthly_Job_Report__Accepted_[".inlineAdd"] = true;


$tdataMonthly_Job_Report__Accepted_[".exportTo"] = true;

$tdataMonthly_Job_Report__Accepted_[".printFriendly"] = true;


$tdataMonthly_Job_Report__Accepted_[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataMonthly_Job_Report__Accepted_[".searchSaving"] = false;
//

$tdataMonthly_Job_Report__Accepted_[".showSearchPanel"] = true;
		$tdataMonthly_Job_Report__Accepted_[".flexibleSearch"] = true;		

if (isMobile())
	$tdataMonthly_Job_Report__Accepted_[".isUseAjaxSuggest"] = false;
else 
	$tdataMonthly_Job_Report__Accepted_[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																
$tdataMonthly_Job_Report__Accepted_[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMonthly_Job_Report__Accepted_[".isUseTimeForSearch"] = false;





$tdataMonthly_Job_Report__Accepted_[".allSearchFields"] = array();
$tdataMonthly_Job_Report__Accepted_[".filterFields"] = array();
$tdataMonthly_Job_Report__Accepted_[".requiredSearchFields"] = array();

$tdataMonthly_Job_Report__Accepted_[".allSearchFields"][] = "accepted_date";
	$tdataMonthly_Job_Report__Accepted_[".allSearchFields"][] = "pdf_id";
	$tdataMonthly_Job_Report__Accepted_[".allSearchFields"][] = "pdf_name";
	

$tdataMonthly_Job_Report__Accepted_[".googleLikeFields"] = array();
$tdataMonthly_Job_Report__Accepted_[".googleLikeFields"][] = "accepted_date";
$tdataMonthly_Job_Report__Accepted_[".googleLikeFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Accepted_[".googleLikeFields"][] = "total_images";
$tdataMonthly_Job_Report__Accepted_[".googleLikeFields"][] = "pdf_name";
$tdataMonthly_Job_Report__Accepted_[".googleLikeFields"][] = "MONTH(job.accepted_date)";


$tdataMonthly_Job_Report__Accepted_[".advSearchFields"] = array();
$tdataMonthly_Job_Report__Accepted_[".advSearchFields"][] = "accepted_date";
$tdataMonthly_Job_Report__Accepted_[".advSearchFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Accepted_[".advSearchFields"][] = "total_images";
$tdataMonthly_Job_Report__Accepted_[".advSearchFields"][] = "pdf_name";
$tdataMonthly_Job_Report__Accepted_[".advSearchFields"][] = "MONTH(job.accepted_date)";

$tdataMonthly_Job_Report__Accepted_[".tableType"] = "report";

$tdataMonthly_Job_Report__Accepted_[".printerPageOrientation"] = 0;
$tdataMonthly_Job_Report__Accepted_[".nPrinterPageScale"] = 100;

$tdataMonthly_Job_Report__Accepted_[".nPrinterSplitRecords"] = 40;

$tdataMonthly_Job_Report__Accepted_[".nPrinterPDFSplitRecords"] = 40;



$tdataMonthly_Job_Report__Accepted_[".geocodingEnabled"] = false;

//report settings
$tdataMonthly_Job_Report__Accepted_[".printReportLayout"] = 3;	

$tdataMonthly_Job_Report__Accepted_[".reportPrintPartitionType"] = 0;	
$tdataMonthly_Job_Report__Accepted_[".reportPrintGroupsPerPage"] = 3;	
	$tdataMonthly_Job_Report__Accepted_[".lowGroup"] = 1;



$tdataMonthly_Job_Report__Accepted_[".reportGroupFields"] = true;
$tdataMonthly_Job_Report__Accepted_[".pageSize"] = 1;
$tdataMonthly_Job_Report__Accepted_[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "accepted_date";
	$rgroupField['groupInterval'] = 3;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataMonthly_Job_Report__Accepted_[".reportGroupFieldsData"] = $reportGroupFields;


$tdataMonthly_Job_Report__Accepted_[".isExistTotalFields"] = true;




$tdataMonthly_Job_Report__Accepted_[".repShowDet"] = true;

$tdataMonthly_Job_Report__Accepted_[".reportLayout"] = 3;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY MONTH(job.accepted_date) DESC, pdf.pdf_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMonthly_Job_Report__Accepted_[".strOrderBy"] = $tstrOrderBy;

$tdataMonthly_Job_Report__Accepted_[".orderindexes"] = array();
$tdataMonthly_Job_Report__Accepted_[".orderindexes"][] = array(5, (0 ? "ASC" : "DESC"), "MONTH(job.accepted_date)");
$tdataMonthly_Job_Report__Accepted_[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "pdf.pdf_name");

$tdataMonthly_Job_Report__Accepted_[".sqlHead"] = "SELECT job.accepted_date,  job.pdf_id,  SUM(job.total_images) AS total_images,  pdf.pdf_name,  MONTH(job.accepted_date) AS `MONTH(job.accepted_date)`";
$tdataMonthly_Job_Report__Accepted_[".sqlFrom"] = "FROM job  LEFT OUTER JOIN pdf ON job.pdf_id = pdf.pdf_id";
$tdataMonthly_Job_Report__Accepted_[".sqlWhereExpr"] = "job.accepted_date != \"0000-00-00 00:00:00\"";
$tdataMonthly_Job_Report__Accepted_[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMonthly_Job_Report__Accepted_[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMonthly_Job_Report__Accepted_[".arrGroupsPerPage"] = $arrGPP;

$tdataMonthly_Job_Report__Accepted_[".highlightSearchResults"] = true;

$tableKeysMonthly_Job_Report__Accepted_ = array();
$tdataMonthly_Job_Report__Accepted_[".Keys"] = $tableKeysMonthly_Job_Report__Accepted_;

$tdataMonthly_Job_Report__Accepted_[".listFields"] = array();
$tdataMonthly_Job_Report__Accepted_[".listFields"][] = "accepted_date";
$tdataMonthly_Job_Report__Accepted_[".listFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Accepted_[".listFields"][] = "total_images";
$tdataMonthly_Job_Report__Accepted_[".listFields"][] = "pdf_name";
$tdataMonthly_Job_Report__Accepted_[".listFields"][] = "MONTH(job.accepted_date)";

$tdataMonthly_Job_Report__Accepted_[".hideMobileList"] = array();


$tdataMonthly_Job_Report__Accepted_[".viewFields"] = array();
$tdataMonthly_Job_Report__Accepted_[".viewFields"][] = "accepted_date";
$tdataMonthly_Job_Report__Accepted_[".viewFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Accepted_[".viewFields"][] = "total_images";
$tdataMonthly_Job_Report__Accepted_[".viewFields"][] = "pdf_name";
$tdataMonthly_Job_Report__Accepted_[".viewFields"][] = "MONTH(job.accepted_date)";

$tdataMonthly_Job_Report__Accepted_[".addFields"] = array();
$tdataMonthly_Job_Report__Accepted_[".addFields"][] = "accepted_date";
$tdataMonthly_Job_Report__Accepted_[".addFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Accepted_[".addFields"][] = "total_images";

$tdataMonthly_Job_Report__Accepted_[".masterListFields"] = array();
$tdataMonthly_Job_Report__Accepted_[".masterListFields"][] = "accepted_date";
$tdataMonthly_Job_Report__Accepted_[".masterListFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Accepted_[".masterListFields"][] = "total_images";
$tdataMonthly_Job_Report__Accepted_[".masterListFields"][] = "pdf_name";
$tdataMonthly_Job_Report__Accepted_[".masterListFields"][] = "MONTH(job.accepted_date)";

$tdataMonthly_Job_Report__Accepted_[".inlineAddFields"] = array();
$tdataMonthly_Job_Report__Accepted_[".inlineAddFields"][] = "accepted_date";
$tdataMonthly_Job_Report__Accepted_[".inlineAddFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Accepted_[".inlineAddFields"][] = "total_images";

$tdataMonthly_Job_Report__Accepted_[".editFields"] = array();
$tdataMonthly_Job_Report__Accepted_[".editFields"][] = "accepted_date";
$tdataMonthly_Job_Report__Accepted_[".editFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Accepted_[".editFields"][] = "total_images";

$tdataMonthly_Job_Report__Accepted_[".inlineEditFields"] = array();
$tdataMonthly_Job_Report__Accepted_[".inlineEditFields"][] = "accepted_date";
$tdataMonthly_Job_Report__Accepted_[".inlineEditFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Accepted_[".inlineEditFields"][] = "total_images";

$tdataMonthly_Job_Report__Accepted_[".exportFields"] = array();
$tdataMonthly_Job_Report__Accepted_[".exportFields"][] = "accepted_date";
$tdataMonthly_Job_Report__Accepted_[".exportFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Accepted_[".exportFields"][] = "total_images";
$tdataMonthly_Job_Report__Accepted_[".exportFields"][] = "pdf_name";
$tdataMonthly_Job_Report__Accepted_[".exportFields"][] = "MONTH(job.accepted_date)";

$tdataMonthly_Job_Report__Accepted_[".importFields"] = array();
$tdataMonthly_Job_Report__Accepted_[".importFields"][] = "accepted_date";
$tdataMonthly_Job_Report__Accepted_[".importFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Accepted_[".importFields"][] = "total_images";
$tdataMonthly_Job_Report__Accepted_[".importFields"][] = "pdf_name";
$tdataMonthly_Job_Report__Accepted_[".importFields"][] = "MONTH(job.accepted_date)";

$tdataMonthly_Job_Report__Accepted_[".printFields"] = array();
$tdataMonthly_Job_Report__Accepted_[".printFields"][] = "accepted_date";
$tdataMonthly_Job_Report__Accepted_[".printFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Accepted_[".printFields"][] = "total_images";
$tdataMonthly_Job_Report__Accepted_[".printFields"][] = "pdf_name";
$tdataMonthly_Job_Report__Accepted_[".printFields"][] = "MONTH(job.accepted_date)";

//	accepted_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "accepted_date";
	$fdata["GoodName"] = "accepted_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Monthly_Job_Report__Accepted_","accepted_date"); 
	$fdata["FieldType"] = 135;
	
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
	
		$fdata["strField"] = "accepted_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.accepted_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
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

	

	
	$tdataMonthly_Job_Report__Accepted_["accepted_date"] = $fdata;
//	pdf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pdf_id";
	$fdata["GoodName"] = "pdf_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Monthly_Job_Report__Accepted_","pdf_id"); 
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
	
		$fdata["strField"] = "pdf_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.pdf_id";
	
		
		
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
	$edata["LinkFieldType"] = 3;
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

	

	
	$tdataMonthly_Job_Report__Accepted_["pdf_id"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Job_Report__Accepted_","total_images"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_images"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(job.total_images)";
	
		
		
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
	
	
	
	

	

	
	$tdataMonthly_Job_Report__Accepted_["total_images"] = $fdata;
//	pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pdf_name";
	$fdata["GoodName"] = "pdf_name";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Monthly_Job_Report__Accepted_","pdf_name"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf.pdf_name";
	
		
		
				
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

	

	
	$tdataMonthly_Job_Report__Accepted_["pdf_name"] = $fdata;
//	MONTH(job.accepted_date)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MONTH(job.accepted_date)";
	$fdata["GoodName"] = "MONTH_job_accepted_date_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Job_Report__Accepted_","MONTH_job_accepted_date_"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MONTH(job.accepted_date)"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MONTH(job.accepted_date)";
	
		
		
				
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
	
	
	
	

	

	
	$tdataMonthly_Job_Report__Accepted_["MONTH(job.accepted_date)"] = $fdata;

	
$tables_data["Monthly Job Report (Accepted)"]=&$tdataMonthly_Job_Report__Accepted_;
$field_labels["Monthly_Job_Report__Accepted_"] = &$fieldLabelsMonthly_Job_Report__Accepted_;
$fieldToolTips["Monthly Job Report (Accepted)"] = &$fieldToolTipsMonthly_Job_Report__Accepted_;
$page_titles["Monthly_Job_Report__Accepted_"] = &$pageTitlesMonthly_Job_Report__Accepted_;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Monthly Job Report (Accepted)"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Monthly Job Report (Accepted)"] = array();


	
				$strOriginalDetailsTable="user";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="user";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "user";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Monthly Job Report (Accepted)"][0] = $masterParams;	
				$masterTablesData["Monthly Job Report (Accepted)"][0]["masterKeys"] = array();
	$masterTablesData["Monthly Job Report (Accepted)"][0]["masterKeys"][]="user_id";
				$masterTablesData["Monthly Job Report (Accepted)"][0]["detailKeys"] = array();
	$masterTablesData["Monthly Job Report (Accepted)"][0]["detailKeys"][]="notifer_id";
		
	
				$strOriginalDetailsTable="notifyoption";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="notifyoption";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "notifyoption";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Monthly Job Report (Accepted)"][1] = $masterParams;	
				$masterTablesData["Monthly Job Report (Accepted)"][1]["masterKeys"] = array();
	$masterTablesData["Monthly Job Report (Accepted)"][1]["masterKeys"][]="notify_option_id";
				$masterTablesData["Monthly Job Report (Accepted)"][1]["detailKeys"] = array();
	$masterTablesData["Monthly Job Report (Accepted)"][1]["detailKeys"][]="notify_options";
		
	
				$strOriginalDetailsTable="pdf";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pdf";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pdf";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Monthly Job Report (Accepted)"][2] = $masterParams;	
				$masterTablesData["Monthly Job Report (Accepted)"][2]["masterKeys"] = array();
	$masterTablesData["Monthly Job Report (Accepted)"][2]["masterKeys"][]="pdf_id";
				$masterTablesData["Monthly Job Report (Accepted)"][2]["detailKeys"] = array();
	$masterTablesData["Monthly Job Report (Accepted)"][2]["detailKeys"][]="pdf_id";
		
	
				$strOriginalDetailsTable="jobstatus";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="jobstatus";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "jobstatus";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Monthly Job Report (Accepted)"][3] = $masterParams;	
				$masterTablesData["Monthly Job Report (Accepted)"][3]["masterKeys"] = array();
	$masterTablesData["Monthly Job Report (Accepted)"][3]["masterKeys"][]="jobstatus_id";
				$masterTablesData["Monthly Job Report (Accepted)"][3]["detailKeys"] = array();
	$masterTablesData["Monthly Job Report (Accepted)"][3]["detailKeys"][]="jobstatus_id";
		
	
				$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="project";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "project";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Monthly Job Report (Accepted)"][4] = $masterParams;	
				$masterTablesData["Monthly Job Report (Accepted)"][4]["masterKeys"] = array();
	$masterTablesData["Monthly Job Report (Accepted)"][4]["masterKeys"][]="project_id";
				$masterTablesData["Monthly Job Report (Accepted)"][4]["detailKeys"] = array();
	$masterTablesData["Monthly Job Report (Accepted)"][4]["detailKeys"][]="project_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Monthly_Job_Report__Accepted_()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "job.accepted_date,  job.pdf_id,  SUM(job.total_images) AS total_images,  pdf.pdf_name,  MONTH(job.accepted_date) AS `MONTH(job.accepted_date)`";
$proto0["m_strFrom"] = "FROM job  LEFT OUTER JOIN pdf ON job.pdf_id = pdf.pdf_id";
$proto0["m_strWhere"] = "job.accepted_date != \"0000-00-00 00:00:00\"";
$proto0["m_strOrderBy"] = "ORDER BY MONTH(job.accepted_date) DESC, pdf.pdf_name";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "job.accepted_date != \"0000-00-00 00:00:00\"";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "accepted_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Monthly Job Report (Accepted)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "!= \"0000-00-00 00:00:00\"";
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
	"m_strName" => "accepted_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Monthly Job Report (Accepted)"
));

$proto5["m_sql"] = "job.accepted_date";
$proto5["m_srcTableName"] = "Monthly Job Report (Accepted)";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Monthly Job Report (Accepted)"
));

$proto7["m_sql"] = "job.pdf_id";
$proto7["m_srcTableName"] = "Monthly Job Report (Accepted)";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$proto10=array();
$proto10["m_functiontype"] = "SQLF_SUM";
$proto10["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total_images",
	"m_strTable" => "job",
	"m_srcTableName" => "Monthly Job Report (Accepted)"
));

$proto10["m_arguments"][]=$obj;
$proto10["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto10);

$proto9["m_sql"] = "SUM(job.total_images)";
$proto9["m_srcTableName"] = "Monthly Job Report (Accepted)";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "total_images";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Monthly Job Report (Accepted)"
));

$proto12["m_sql"] = "pdf.pdf_name";
$proto12["m_srcTableName"] = "Monthly Job Report (Accepted)";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "job.accepted_date"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "MONTH";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "MONTH(job.accepted_date)";
$proto14["m_srcTableName"] = "Monthly Job Report (Accepted)";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "MONTH(job.accepted_date)";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "job";
$proto18["m_srcTableName"] = "Monthly Job Report (Accepted)";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "work_id";
$proto18["m_columns"][] = "job_id";
$proto18["m_columns"][] = "client_id";
$proto18["m_columns"][] = "project_id";
$proto18["m_columns"][] = "job_directory";
$proto18["m_columns"][] = "complexity1";
$proto18["m_columns"][] = "complexity2";
$proto18["m_columns"][] = "complexity3";
$proto18["m_columns"][] = "complexity4";
$proto18["m_columns"][] = "complexity5";
$proto18["m_columns"][] = "complexity0";
$proto18["m_columns"][] = "complexityNP";
$proto18["m_columns"][] = "custom_complexity";
$proto18["m_columns"][] = "total_images";
$proto18["m_columns"][] = "is_urgent";
$proto18["m_columns"][] = "urgent_instruction";
$proto18["m_columns"][] = "delivery_duration";
$proto18["m_columns"][] = "delivery_date";
$proto18["m_columns"][] = "notify_options";
$proto18["m_columns"][] = "notes";
$proto18["m_columns"][] = "web_note";
$proto18["m_columns"][] = "comments";
$proto18["m_columns"][] = "pdf_id";
$proto18["m_columns"][] = "pdf_location";
$proto18["m_columns"][] = "allow_batch_process";
$proto18["m_columns"][] = "jobstatus_id";
$proto18["m_columns"][] = "reviewer_id";
$proto18["m_columns"][] = "reviewed_date";
$proto18["m_columns"][] = "accept_id";
$proto18["m_columns"][] = "accepted_date";
$proto18["m_columns"][] = "downloader_id";
$proto18["m_columns"][] = "download_date";
$proto18["m_columns"][] = "distributor_id";
$proto18["m_columns"][] = "distribute_date";
$proto18["m_columns"][] = "designer_list";
$proto18["m_columns"][] = "qcs_list";
$proto18["m_columns"][] = "finish_date";
$proto18["m_columns"][] = "uploader_id";
$proto18["m_columns"][] = "upload_date";
$proto18["m_columns"][] = "notifer_id";
$proto18["m_columns"][] = "notify_date";
$proto18["m_columns"][] = "rejector_id";
$proto18["m_columns"][] = "reject_date";
$proto18["m_columns"][] = "reject_reason";
$proto18["m_columns"][] = "activity_log";
$proto18["m_columns"][] = "time_remaining";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "job";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "Monthly Job Report (Accepted)";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
												$proto21=array();
$proto21["m_link"] = "SQLL_LEFTJOIN";
			$proto22=array();
$proto22["m_strName"] = "pdf";
$proto22["m_srcTableName"] = "Monthly Job Report (Accepted)";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "pdf_id";
$proto22["m_columns"][] = "pdf_name";
$proto22["m_columns"][] = "client_id";
$proto22["m_columns"][] = "pdf_location";
$proto22["m_columns"][] = "last_update";
$proto22["m_columns"][] = "pdf_estimated_average";
$proto22["m_columns"][] = "pdf_estimated_average1";
$proto22["m_columns"][] = "pdf_estimated_average2";
$proto22["m_columns"][] = "pdf_actual_average";
$proto22["m_columns"][] = "price";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "LEFT OUTER JOIN pdf ON job.pdf_id = pdf.pdf_id";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "Monthly Job Report (Accepted)";
$proto23=array();
$proto23["m_sql"] = "job.pdf_id = pdf.pdf_id";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Monthly Job Report (Accepted)"
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "= pdf.pdf_id";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto25=array();
						$proto26=array();
$proto26["m_functiontype"] = "SQLF_CUSTOM";
$proto26["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "job.accepted_date"
));

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "Month";
$obj = new SQLFunctionCall($proto26);

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Monthly Job Report (Accepted)"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto30=array();
						$proto31=array();
$proto31["m_functiontype"] = "SQLF_CUSTOM";
$proto31["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "job.accepted_date"
));

$proto31["m_arguments"][]=$obj;
$proto31["m_strFunctionName"] = "MONTH";
$obj = new SQLFunctionCall($proto31);

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 0;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Monthly Job Report (Accepted)"
));

$proto33["m_column"]=$obj;
$proto33["m_bAsc"] = 1;
$proto33["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto33);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Monthly Job Report (Accepted)";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Monthly_Job_Report__Accepted_ = createSqlQuery_Monthly_Job_Report__Accepted_();


	
					
	
$tdataMonthly_Job_Report__Accepted_[".sqlquery"] = $queryData_Monthly_Job_Report__Accepted_;

$tableEvents["Monthly Job Report (Accepted)"] = new eventsBase;
$tdataMonthly_Job_Report__Accepted_[".hasEvents"] = false;

?>