<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMonthly_Job_Report__Notified_ = array();	
	$tdataMonthly_Job_Report__Notified_[".truncateText"] = true;
	$tdataMonthly_Job_Report__Notified_[".NumberOfChars"] = 80; 
	$tdataMonthly_Job_Report__Notified_[".ShortName"] = "Monthly_Job_Report__Notified_";
	$tdataMonthly_Job_Report__Notified_[".OwnerID"] = "";
	$tdataMonthly_Job_Report__Notified_[".OriginalTable"] = "job";

//	field labels
$fieldLabelsMonthly_Job_Report__Notified_ = array();
$fieldToolTipsMonthly_Job_Report__Notified_ = array();
$pageTitlesMonthly_Job_Report__Notified_ = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMonthly_Job_Report__Notified_["English"] = array();
	$fieldToolTipsMonthly_Job_Report__Notified_["English"] = array();
	$pageTitlesMonthly_Job_Report__Notified_["English"] = array();
	$fieldLabelsMonthly_Job_Report__Notified_["English"]["total_images"] = "Total Images";
	$fieldToolTipsMonthly_Job_Report__Notified_["English"]["total_images"] = "";
	$fieldLabelsMonthly_Job_Report__Notified_["English"]["pdf_id"] = "Pdf Id";
	$fieldToolTipsMonthly_Job_Report__Notified_["English"]["pdf_id"] = "";
	$fieldLabelsMonthly_Job_Report__Notified_["English"]["notified_day"] = "Notified Day";
	$fieldToolTipsMonthly_Job_Report__Notified_["English"]["notified_day"] = "";
	if (count($fieldToolTipsMonthly_Job_Report__Notified_["English"]))
		$tdataMonthly_Job_Report__Notified_[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMonthly_Job_Report__Notified_[""] = array();
	$fieldToolTipsMonthly_Job_Report__Notified_[""] = array();
	$pageTitlesMonthly_Job_Report__Notified_[""] = array();
	if (count($fieldToolTipsMonthly_Job_Report__Notified_[""]))
		$tdataMonthly_Job_Report__Notified_[".isUseToolTips"] = true;
}
	
	
	$tdataMonthly_Job_Report__Notified_[".NCSearch"] = true;



$tdataMonthly_Job_Report__Notified_[".shortTableName"] = "Monthly_Job_Report__Notified_";
$tdataMonthly_Job_Report__Notified_[".nSecOptions"] = 0;
$tdataMonthly_Job_Report__Notified_[".recsPerRowList"] = 1;
$tdataMonthly_Job_Report__Notified_[".recsPerRowPrint"] = 1;
$tdataMonthly_Job_Report__Notified_[".mainTableOwnerID"] = "";
$tdataMonthly_Job_Report__Notified_[".moveNext"] = 1;
$tdataMonthly_Job_Report__Notified_[".entityType"] = 2;

$tdataMonthly_Job_Report__Notified_[".strOriginalTableName"] = "job";




$tdataMonthly_Job_Report__Notified_[".showAddInPopup"] = false;

$tdataMonthly_Job_Report__Notified_[".showEditInPopup"] = false;

$tdataMonthly_Job_Report__Notified_[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMonthly_Job_Report__Notified_[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMonthly_Job_Report__Notified_[".fieldsForRegister"] = array();

$tdataMonthly_Job_Report__Notified_[".listAjax"] = false;

	$tdataMonthly_Job_Report__Notified_[".audit"] = false;

	$tdataMonthly_Job_Report__Notified_[".locking"] = false;


$tdataMonthly_Job_Report__Notified_[".add"] = true;
$tdataMonthly_Job_Report__Notified_[".afterAddAction"] = 0;
$tdataMonthly_Job_Report__Notified_[".closePopupAfterAdd"] = 1;
$tdataMonthly_Job_Report__Notified_[".afterAddActionDetTable"] = "";

$tdataMonthly_Job_Report__Notified_[".list"] = true;

$tdataMonthly_Job_Report__Notified_[".inlineAdd"] = true;


$tdataMonthly_Job_Report__Notified_[".exportTo"] = true;

$tdataMonthly_Job_Report__Notified_[".printFriendly"] = true;


$tdataMonthly_Job_Report__Notified_[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataMonthly_Job_Report__Notified_[".searchSaving"] = false;
//

$tdataMonthly_Job_Report__Notified_[".showSearchPanel"] = true;
		$tdataMonthly_Job_Report__Notified_[".flexibleSearch"] = true;		

if (isMobile())
	$tdataMonthly_Job_Report__Notified_[".isUseAjaxSuggest"] = false;
else 
	$tdataMonthly_Job_Report__Notified_[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																
$tdataMonthly_Job_Report__Notified_[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMonthly_Job_Report__Notified_[".isUseTimeForSearch"] = false;





$tdataMonthly_Job_Report__Notified_[".allSearchFields"] = array();
$tdataMonthly_Job_Report__Notified_[".filterFields"] = array();
$tdataMonthly_Job_Report__Notified_[".requiredSearchFields"] = array();

$tdataMonthly_Job_Report__Notified_[".allSearchFields"][] = "notified_day";
	$tdataMonthly_Job_Report__Notified_[".allSearchFields"][] = "pdf_id";
	

$tdataMonthly_Job_Report__Notified_[".googleLikeFields"] = array();
$tdataMonthly_Job_Report__Notified_[".googleLikeFields"][] = "notified_day";
$tdataMonthly_Job_Report__Notified_[".googleLikeFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Notified_[".googleLikeFields"][] = "total_images";


$tdataMonthly_Job_Report__Notified_[".advSearchFields"] = array();
$tdataMonthly_Job_Report__Notified_[".advSearchFields"][] = "notified_day";
$tdataMonthly_Job_Report__Notified_[".advSearchFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Notified_[".advSearchFields"][] = "total_images";

$tdataMonthly_Job_Report__Notified_[".tableType"] = "report";

$tdataMonthly_Job_Report__Notified_[".printerPageOrientation"] = 0;
$tdataMonthly_Job_Report__Notified_[".nPrinterPageScale"] = 100;

$tdataMonthly_Job_Report__Notified_[".nPrinterSplitRecords"] = 40;

$tdataMonthly_Job_Report__Notified_[".nPrinterPDFSplitRecords"] = 40;



$tdataMonthly_Job_Report__Notified_[".geocodingEnabled"] = false;

//report settings

$tdataMonthly_Job_Report__Notified_[".reportPrintPartitionType"] = 0;	
$tdataMonthly_Job_Report__Notified_[".reportPrintGroupsPerPage"] = 3;	
	$tdataMonthly_Job_Report__Notified_[".lowGroup"] = 1;



$tdataMonthly_Job_Report__Notified_[".reportGroupFields"] = true;
$tdataMonthly_Job_Report__Notified_[".pageSize"] = 1;
$tdataMonthly_Job_Report__Notified_[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "notified_day";
	$rgroupField['groupInterval'] = 3;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataMonthly_Job_Report__Notified_[".reportGroupFieldsData"] = $reportGroupFields;


$tdataMonthly_Job_Report__Notified_[".isExistTotalFields"] = true;





$tdataMonthly_Job_Report__Notified_[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY job.notify_date DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMonthly_Job_Report__Notified_[".strOrderBy"] = $tstrOrderBy;

$tdataMonthly_Job_Report__Notified_[".orderindexes"] = array();
$tdataMonthly_Job_Report__Notified_[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "job.notify_date");

$tdataMonthly_Job_Report__Notified_[".sqlHead"] = "SELECT job.notify_date AS notified_day,  job.pdf_id,  SUM(job.total_images) AS total_images";
$tdataMonthly_Job_Report__Notified_[".sqlFrom"] = "FROM job  INNER JOIN pdf ON job.pdf_id = pdf.pdf_id";
$tdataMonthly_Job_Report__Notified_[".sqlWhereExpr"] = "";
$tdataMonthly_Job_Report__Notified_[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMonthly_Job_Report__Notified_[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMonthly_Job_Report__Notified_[".arrGroupsPerPage"] = $arrGPP;

$tdataMonthly_Job_Report__Notified_[".highlightSearchResults"] = true;

$tableKeysMonthly_Job_Report__Notified_ = array();
$tdataMonthly_Job_Report__Notified_[".Keys"] = $tableKeysMonthly_Job_Report__Notified_;

$tdataMonthly_Job_Report__Notified_[".listFields"] = array();
$tdataMonthly_Job_Report__Notified_[".listFields"][] = "notified_day";
$tdataMonthly_Job_Report__Notified_[".listFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Notified_[".listFields"][] = "total_images";

$tdataMonthly_Job_Report__Notified_[".hideMobileList"] = array();


$tdataMonthly_Job_Report__Notified_[".viewFields"] = array();
$tdataMonthly_Job_Report__Notified_[".viewFields"][] = "notified_day";
$tdataMonthly_Job_Report__Notified_[".viewFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Notified_[".viewFields"][] = "total_images";

$tdataMonthly_Job_Report__Notified_[".addFields"] = array();
$tdataMonthly_Job_Report__Notified_[".addFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Notified_[".addFields"][] = "total_images";

$tdataMonthly_Job_Report__Notified_[".masterListFields"] = array();
$tdataMonthly_Job_Report__Notified_[".masterListFields"][] = "notified_day";
$tdataMonthly_Job_Report__Notified_[".masterListFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Notified_[".masterListFields"][] = "total_images";

$tdataMonthly_Job_Report__Notified_[".inlineAddFields"] = array();
$tdataMonthly_Job_Report__Notified_[".inlineAddFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Notified_[".inlineAddFields"][] = "total_images";

$tdataMonthly_Job_Report__Notified_[".editFields"] = array();
$tdataMonthly_Job_Report__Notified_[".editFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Notified_[".editFields"][] = "total_images";

$tdataMonthly_Job_Report__Notified_[".inlineEditFields"] = array();
$tdataMonthly_Job_Report__Notified_[".inlineEditFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Notified_[".inlineEditFields"][] = "total_images";

$tdataMonthly_Job_Report__Notified_[".exportFields"] = array();
$tdataMonthly_Job_Report__Notified_[".exportFields"][] = "notified_day";
$tdataMonthly_Job_Report__Notified_[".exportFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Notified_[".exportFields"][] = "total_images";

$tdataMonthly_Job_Report__Notified_[".importFields"] = array();
$tdataMonthly_Job_Report__Notified_[".importFields"][] = "notified_day";
$tdataMonthly_Job_Report__Notified_[".importFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Notified_[".importFields"][] = "total_images";

$tdataMonthly_Job_Report__Notified_[".printFields"] = array();
$tdataMonthly_Job_Report__Notified_[".printFields"][] = "notified_day";
$tdataMonthly_Job_Report__Notified_[".printFields"][] = "pdf_id";
$tdataMonthly_Job_Report__Notified_[".printFields"][] = "total_images";

//	notified_day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "notified_day";
	$fdata["GoodName"] = "notified_day";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Monthly_Job_Report__Notified_","notified_day"); 
	$fdata["FieldType"] = 135;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "notify_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.notify_date";
	
		
		
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

	

	
	$tdataMonthly_Job_Report__Notified_["notified_day"] = $fdata;
//	pdf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pdf_id";
	$fdata["GoodName"] = "pdf_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Monthly_Job_Report__Notified_","pdf_id"); 
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

	

	
	$tdataMonthly_Job_Report__Notified_["pdf_id"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Job_Report__Notified_","total_images"); 
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
	
	
	
	

	

	
	$tdataMonthly_Job_Report__Notified_["total_images"] = $fdata;

	
$tables_data["Monthly Job Report (Notified)"]=&$tdataMonthly_Job_Report__Notified_;
$field_labels["Monthly_Job_Report__Notified_"] = &$fieldLabelsMonthly_Job_Report__Notified_;
$fieldToolTips["Monthly Job Report (Notified)"] = &$fieldToolTipsMonthly_Job_Report__Notified_;
$page_titles["Monthly_Job_Report__Notified_"] = &$pageTitlesMonthly_Job_Report__Notified_;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Monthly Job Report (Notified)"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Monthly Job Report (Notified)"] = array();


	
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
					$masterTablesData["Monthly Job Report (Notified)"][0] = $masterParams;	
				$masterTablesData["Monthly Job Report (Notified)"][0]["masterKeys"] = array();
	$masterTablesData["Monthly Job Report (Notified)"][0]["masterKeys"][]="user_id";
				$masterTablesData["Monthly Job Report (Notified)"][0]["detailKeys"] = array();
	$masterTablesData["Monthly Job Report (Notified)"][0]["detailKeys"][]="notifer_id";
		
	
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
					$masterTablesData["Monthly Job Report (Notified)"][1] = $masterParams;	
				$masterTablesData["Monthly Job Report (Notified)"][1]["masterKeys"] = array();
	$masterTablesData["Monthly Job Report (Notified)"][1]["masterKeys"][]="notify_option_id";
				$masterTablesData["Monthly Job Report (Notified)"][1]["detailKeys"] = array();
	$masterTablesData["Monthly Job Report (Notified)"][1]["detailKeys"][]="notify_options";
		
	
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
					$masterTablesData["Monthly Job Report (Notified)"][2] = $masterParams;	
				$masterTablesData["Monthly Job Report (Notified)"][2]["masterKeys"] = array();
	$masterTablesData["Monthly Job Report (Notified)"][2]["masterKeys"][]="pdf_id";
				$masterTablesData["Monthly Job Report (Notified)"][2]["detailKeys"] = array();
	$masterTablesData["Monthly Job Report (Notified)"][2]["detailKeys"][]="pdf_id";
		
	
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
					$masterTablesData["Monthly Job Report (Notified)"][3] = $masterParams;	
				$masterTablesData["Monthly Job Report (Notified)"][3]["masterKeys"] = array();
	$masterTablesData["Monthly Job Report (Notified)"][3]["masterKeys"][]="jobstatus_id";
				$masterTablesData["Monthly Job Report (Notified)"][3]["detailKeys"] = array();
	$masterTablesData["Monthly Job Report (Notified)"][3]["detailKeys"][]="jobstatus_id";
		
	
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
					$masterTablesData["Monthly Job Report (Notified)"][4] = $masterParams;	
				$masterTablesData["Monthly Job Report (Notified)"][4]["masterKeys"] = array();
	$masterTablesData["Monthly Job Report (Notified)"][4]["masterKeys"][]="project_id";
				$masterTablesData["Monthly Job Report (Notified)"][4]["detailKeys"] = array();
	$masterTablesData["Monthly Job Report (Notified)"][4]["detailKeys"][]="project_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Monthly_Job_Report__Notified_()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "job.notify_date AS notified_day,  job.pdf_id,  SUM(job.total_images) AS total_images";
$proto0["m_strFrom"] = "FROM job  INNER JOIN pdf ON job.pdf_id = pdf.pdf_id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY job.notify_date DESC";
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
	"m_strName" => "notify_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Monthly Job Report (Notified)"
));

$proto5["m_sql"] = "job.notify_date";
$proto5["m_srcTableName"] = "Monthly Job Report (Notified)";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "notified_day";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Monthly Job Report (Notified)"
));

$proto7["m_sql"] = "job.pdf_id";
$proto7["m_srcTableName"] = "Monthly Job Report (Notified)";
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
	"m_srcTableName" => "Monthly Job Report (Notified)"
));

$proto10["m_arguments"][]=$obj;
$proto10["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto10);

$proto9["m_sql"] = "SUM(job.total_images)";
$proto9["m_srcTableName"] = "Monthly Job Report (Notified)";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "total_images";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "job";
$proto13["m_srcTableName"] = "Monthly Job Report (Notified)";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "work_id";
$proto13["m_columns"][] = "job_id";
$proto13["m_columns"][] = "client_id";
$proto13["m_columns"][] = "project_id";
$proto13["m_columns"][] = "job_directory";
$proto13["m_columns"][] = "complexity1";
$proto13["m_columns"][] = "complexity2";
$proto13["m_columns"][] = "complexity3";
$proto13["m_columns"][] = "complexity4";
$proto13["m_columns"][] = "complexity5";
$proto13["m_columns"][] = "complexity0";
$proto13["m_columns"][] = "complexityNP";
$proto13["m_columns"][] = "custom_complexity";
$proto13["m_columns"][] = "total_images";
$proto13["m_columns"][] = "is_urgent";
$proto13["m_columns"][] = "urgent_instruction";
$proto13["m_columns"][] = "delivery_duration";
$proto13["m_columns"][] = "delivery_date";
$proto13["m_columns"][] = "notify_options";
$proto13["m_columns"][] = "notes";
$proto13["m_columns"][] = "web_note";
$proto13["m_columns"][] = "comments";
$proto13["m_columns"][] = "pdf_id";
$proto13["m_columns"][] = "pdf_location";
$proto13["m_columns"][] = "allow_batch_process";
$proto13["m_columns"][] = "jobstatus_id";
$proto13["m_columns"][] = "reviewer_id";
$proto13["m_columns"][] = "reviewed_date";
$proto13["m_columns"][] = "accept_id";
$proto13["m_columns"][] = "accepted_date";
$proto13["m_columns"][] = "downloader_id";
$proto13["m_columns"][] = "download_date";
$proto13["m_columns"][] = "distributor_id";
$proto13["m_columns"][] = "distribute_date";
$proto13["m_columns"][] = "designer_list";
$proto13["m_columns"][] = "qcs_list";
$proto13["m_columns"][] = "finish_date";
$proto13["m_columns"][] = "uploader_id";
$proto13["m_columns"][] = "upload_date";
$proto13["m_columns"][] = "notifer_id";
$proto13["m_columns"][] = "notify_date";
$proto13["m_columns"][] = "rejector_id";
$proto13["m_columns"][] = "reject_date";
$proto13["m_columns"][] = "reject_reason";
$proto13["m_columns"][] = "activity_log";
$proto13["m_columns"][] = "time_remaining";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "job";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "Monthly Job Report (Notified)";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
												$proto16=array();
$proto16["m_link"] = "SQLL_INNERJOIN";
			$proto17=array();
$proto17["m_strName"] = "pdf";
$proto17["m_srcTableName"] = "Monthly Job Report (Notified)";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "pdf_id";
$proto17["m_columns"][] = "pdf_name";
$proto17["m_columns"][] = "client_id";
$proto17["m_columns"][] = "pdf_location";
$proto17["m_columns"][] = "last_update";
$proto17["m_columns"][] = "pdf_estimated_average";
$proto17["m_columns"][] = "pdf_estimated_average1";
$proto17["m_columns"][] = "pdf_estimated_average2";
$proto17["m_columns"][] = "pdf_actual_average";
$proto17["m_columns"][] = "price";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "INNER JOIN pdf ON job.pdf_id = pdf.pdf_id";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Monthly Job Report (Notified)";
$proto18=array();
$proto18["m_sql"] = "job.pdf_id = pdf.pdf_id";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Monthly Job Report (Notified)"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "= pdf.pdf_id";
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
	"m_sql" => "job.notify_date"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "MONTH";
$obj = new SQLFunctionCall($proto21);

$proto20["m_column"]=$obj;
$obj = new SQLGroupByItem($proto20);

$proto0["m_groupby"][]=$obj;
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Monthly Job Report (Notified)"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "notify_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Monthly Job Report (Notified)"
));

$proto25["m_column"]=$obj;
$proto25["m_bAsc"] = 0;
$proto25["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto25);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Monthly Job Report (Notified)";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Monthly_Job_Report__Notified_ = createSqlQuery_Monthly_Job_Report__Notified_();


	
			
	
$tdataMonthly_Job_Report__Notified_[".sqlquery"] = $queryData_Monthly_Job_Report__Notified_;

$tableEvents["Monthly Job Report (Notified)"] = new eventsBase;
$tdataMonthly_Job_Report__Notified_[".hasEvents"] = false;

?>