<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDaily_PDF_Avrage = array();	
	$tdataDaily_PDF_Avrage[".truncateText"] = true;
	$tdataDaily_PDF_Avrage[".NumberOfChars"] = 256; 
	$tdataDaily_PDF_Avrage[".ShortName"] = "Daily_PDF_Avrage";
	$tdataDaily_PDF_Avrage[".OwnerID"] = "";
	$tdataDaily_PDF_Avrage[".OriginalTable"] = "designer_report";

//	field labels
$fieldLabelsDaily_PDF_Avrage = array();
$fieldToolTipsDaily_PDF_Avrage = array();
$pageTitlesDaily_PDF_Avrage = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDaily_PDF_Avrage["English"] = array();
	$fieldToolTipsDaily_PDF_Avrage["English"] = array();
	$pageTitlesDaily_PDF_Avrage["English"] = array();
	$fieldLabelsDaily_PDF_Avrage["English"]["pdf_name"] = "Pdf Name";
	$fieldToolTipsDaily_PDF_Avrage["English"]["pdf_name"] = "";
	$fieldLabelsDaily_PDF_Avrage["English"]["work_date"] = "Work Date";
	$fieldToolTipsDaily_PDF_Avrage["English"]["work_date"] = "";
	$fieldLabelsDaily_PDF_Avrage["English"]["done_date"] = "Done Date";
	$fieldToolTipsDaily_PDF_Avrage["English"]["done_date"] = "";
	$fieldLabelsDaily_PDF_Avrage["English"]["designer_name"] = "Designer Name";
	$fieldToolTipsDaily_PDF_Avrage["English"]["designer_name"] = "";
	$fieldLabelsDaily_PDF_Avrage["English"]["total_images"] = "Total Images";
	$fieldToolTipsDaily_PDF_Avrage["English"]["total_images"] = "";
	$fieldLabelsDaily_PDF_Avrage["English"]["Taken_Avg"] = "Taken Avg";
	$fieldToolTipsDaily_PDF_Avrage["English"]["Taken_Avg"] = "";
	$fieldLabelsDaily_PDF_Avrage["English"]["work_week"] = "Work Week";
	$fieldToolTipsDaily_PDF_Avrage["English"]["work_week"] = "";
	$fieldLabelsDaily_PDF_Avrage["English"]["work_month"] = "Work Month";
	$fieldToolTipsDaily_PDF_Avrage["English"]["work_month"] = "";
	if (count($fieldToolTipsDaily_PDF_Avrage["English"]))
		$tdataDaily_PDF_Avrage[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDaily_PDF_Avrage[""] = array();
	$fieldToolTipsDaily_PDF_Avrage[""] = array();
	$pageTitlesDaily_PDF_Avrage[""] = array();
	$fieldLabelsDaily_PDF_Avrage[""]["work_date"] = "Work Date";
	$fieldToolTipsDaily_PDF_Avrage[""]["work_date"] = "";
	$fieldLabelsDaily_PDF_Avrage[""]["done_date"] = "Done Date";
	$fieldToolTipsDaily_PDF_Avrage[""]["done_date"] = "";
	$fieldLabelsDaily_PDF_Avrage[""]["designer_name"] = "Designer Name";
	$fieldToolTipsDaily_PDF_Avrage[""]["designer_name"] = "";
	$fieldLabelsDaily_PDF_Avrage[""]["total_images"] = "Total Images";
	$fieldToolTipsDaily_PDF_Avrage[""]["total_images"] = "";
	$fieldLabelsDaily_PDF_Avrage[""]["Taken_Avg"] = "Taken Avg";
	$fieldToolTipsDaily_PDF_Avrage[""]["Taken_Avg"] = "";
	$fieldLabelsDaily_PDF_Avrage[""]["work_week"] = "Work Week";
	$fieldToolTipsDaily_PDF_Avrage[""]["work_week"] = "";
	$fieldLabelsDaily_PDF_Avrage[""]["work_month"] = "Work Month";
	$fieldToolTipsDaily_PDF_Avrage[""]["work_month"] = "";
	if (count($fieldToolTipsDaily_PDF_Avrage[""]))
		$tdataDaily_PDF_Avrage[".isUseToolTips"] = true;
}
	
	
	$tdataDaily_PDF_Avrage[".NCSearch"] = true;



$tdataDaily_PDF_Avrage[".shortTableName"] = "Daily_PDF_Avrage";
$tdataDaily_PDF_Avrage[".nSecOptions"] = 0;
$tdataDaily_PDF_Avrage[".recsPerRowList"] = 1;
$tdataDaily_PDF_Avrage[".recsPerRowPrint"] = 1;
$tdataDaily_PDF_Avrage[".mainTableOwnerID"] = "";
$tdataDaily_PDF_Avrage[".moveNext"] = 1;
$tdataDaily_PDF_Avrage[".entityType"] = 2;

$tdataDaily_PDF_Avrage[".strOriginalTableName"] = "designer_report";




$tdataDaily_PDF_Avrage[".showAddInPopup"] = false;

$tdataDaily_PDF_Avrage[".showEditInPopup"] = false;

$tdataDaily_PDF_Avrage[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDaily_PDF_Avrage[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDaily_PDF_Avrage[".fieldsForRegister"] = array();

$tdataDaily_PDF_Avrage[".listAjax"] = false;

	$tdataDaily_PDF_Avrage[".audit"] = false;

	$tdataDaily_PDF_Avrage[".locking"] = false;


$tdataDaily_PDF_Avrage[".add"] = true;
$tdataDaily_PDF_Avrage[".afterAddAction"] = 0;
$tdataDaily_PDF_Avrage[".closePopupAfterAdd"] = 1;
$tdataDaily_PDF_Avrage[".afterAddActionDetTable"] = "";

$tdataDaily_PDF_Avrage[".list"] = true;

$tdataDaily_PDF_Avrage[".inlineAdd"] = true;


$tdataDaily_PDF_Avrage[".exportTo"] = true;

$tdataDaily_PDF_Avrage[".printFriendly"] = true;


$tdataDaily_PDF_Avrage[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDaily_PDF_Avrage[".searchSaving"] = false;
//

$tdataDaily_PDF_Avrage[".showSearchPanel"] = true;
		$tdataDaily_PDF_Avrage[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDaily_PDF_Avrage[".isUseAjaxSuggest"] = false;
else 
	$tdataDaily_PDF_Avrage[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDaily_PDF_Avrage[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDaily_PDF_Avrage[".isUseTimeForSearch"] = false;





$tdataDaily_PDF_Avrage[".allSearchFields"] = array();
$tdataDaily_PDF_Avrage[".filterFields"] = array();
$tdataDaily_PDF_Avrage[".requiredSearchFields"] = array();

$tdataDaily_PDF_Avrage[".allSearchFields"][] = "work_date";
	$tdataDaily_PDF_Avrage[".allSearchFields"][] = "done_date";
	$tdataDaily_PDF_Avrage[".allSearchFields"][] = "pdf_name";
	$tdataDaily_PDF_Avrage[".allSearchFields"][] = "total_images";
	$tdataDaily_PDF_Avrage[".allSearchFields"][] = "Taken_Avg";
	$tdataDaily_PDF_Avrage[".allSearchFields"][] = "work_week";
	$tdataDaily_PDF_Avrage[".allSearchFields"][] = "work_month";
	

$tdataDaily_PDF_Avrage[".googleLikeFields"] = array();
$tdataDaily_PDF_Avrage[".googleLikeFields"][] = "work_date";
$tdataDaily_PDF_Avrage[".googleLikeFields"][] = "done_date";
$tdataDaily_PDF_Avrage[".googleLikeFields"][] = "designer_name";
$tdataDaily_PDF_Avrage[".googleLikeFields"][] = "pdf_name";
$tdataDaily_PDF_Avrage[".googleLikeFields"][] = "total_images";
$tdataDaily_PDF_Avrage[".googleLikeFields"][] = "Taken_Avg";
$tdataDaily_PDF_Avrage[".googleLikeFields"][] = "work_week";
$tdataDaily_PDF_Avrage[".googleLikeFields"][] = "work_month";


$tdataDaily_PDF_Avrage[".advSearchFields"] = array();
$tdataDaily_PDF_Avrage[".advSearchFields"][] = "work_date";
$tdataDaily_PDF_Avrage[".advSearchFields"][] = "done_date";
$tdataDaily_PDF_Avrage[".advSearchFields"][] = "designer_name";
$tdataDaily_PDF_Avrage[".advSearchFields"][] = "pdf_name";
$tdataDaily_PDF_Avrage[".advSearchFields"][] = "total_images";
$tdataDaily_PDF_Avrage[".advSearchFields"][] = "Taken_Avg";
$tdataDaily_PDF_Avrage[".advSearchFields"][] = "work_week";
$tdataDaily_PDF_Avrage[".advSearchFields"][] = "work_month";

$tdataDaily_PDF_Avrage[".tableType"] = "report";

$tdataDaily_PDF_Avrage[".printerPageOrientation"] = 0;
$tdataDaily_PDF_Avrage[".nPrinterPageScale"] = 100;

$tdataDaily_PDF_Avrage[".nPrinterSplitRecords"] = 40;

$tdataDaily_PDF_Avrage[".nPrinterPDFSplitRecords"] = 40;



$tdataDaily_PDF_Avrage[".geocodingEnabled"] = false;

//report settings
$tdataDaily_PDF_Avrage[".printReportLayout"] = 3;	

$tdataDaily_PDF_Avrage[".reportPrintPartitionType"] = 0;	
$tdataDaily_PDF_Avrage[".reportPrintGroupsPerPage"] = 3;	
	$tdataDaily_PDF_Avrage[".lowGroup"] = 1;



$tdataDaily_PDF_Avrage[".reportGroupFields"] = true;
$tdataDaily_PDF_Avrage[".pageSize"] = 1;
$tdataDaily_PDF_Avrage[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "done_date";
	$rgroupField['groupInterval'] = 5;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataDaily_PDF_Avrage[".reportGroupFieldsData"] = $reportGroupFields;






$tdataDaily_PDF_Avrage[".repShowDet"] = true;

$tdataDaily_PDF_Avrage[".reportLayout"] = 3;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY Date(work_date) DESC, SUM(total_images_counted) DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDaily_PDF_Avrage[".strOrderBy"] = $tstrOrderBy;

$tdataDaily_PDF_Avrage[".orderindexes"] = array();
$tdataDaily_PDF_Avrage[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "Date(work_date)");
$tdataDaily_PDF_Avrage[".orderindexes"][] = array(0, (0 ? "ASC" : "DESC"), "SUM(total_images_counted)");

$tdataDaily_PDF_Avrage[".sqlHead"] = "SELECT work_date,  Date(work_date) AS done_date,  designer_name,  pdf_name,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(designer_time)/SUM(total_images_counted)) AS Taken_Avg,  WEEK(work_date)+1 AS work_week,  MONTH(work_date) AS work_month";
$tdataDaily_PDF_Avrage[".sqlFrom"] = "FROM designer_report";
$tdataDaily_PDF_Avrage[".sqlWhereExpr"] = "(work_type !=2) AND (user_group =7)";
$tdataDaily_PDF_Avrage[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDaily_PDF_Avrage[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDaily_PDF_Avrage[".arrGroupsPerPage"] = $arrGPP;

$tdataDaily_PDF_Avrage[".highlightSearchResults"] = true;

$tableKeysDaily_PDF_Avrage = array();
$tdataDaily_PDF_Avrage[".Keys"] = $tableKeysDaily_PDF_Avrage;

$tdataDaily_PDF_Avrage[".listFields"] = array();
$tdataDaily_PDF_Avrage[".listFields"][] = "work_date";
$tdataDaily_PDF_Avrage[".listFields"][] = "done_date";
$tdataDaily_PDF_Avrage[".listFields"][] = "designer_name";
$tdataDaily_PDF_Avrage[".listFields"][] = "pdf_name";
$tdataDaily_PDF_Avrage[".listFields"][] = "total_images";
$tdataDaily_PDF_Avrage[".listFields"][] = "Taken_Avg";
$tdataDaily_PDF_Avrage[".listFields"][] = "work_week";
$tdataDaily_PDF_Avrage[".listFields"][] = "work_month";

$tdataDaily_PDF_Avrage[".hideMobileList"] = array();


$tdataDaily_PDF_Avrage[".viewFields"] = array();
$tdataDaily_PDF_Avrage[".viewFields"][] = "work_date";
$tdataDaily_PDF_Avrage[".viewFields"][] = "done_date";
$tdataDaily_PDF_Avrage[".viewFields"][] = "designer_name";
$tdataDaily_PDF_Avrage[".viewFields"][] = "pdf_name";
$tdataDaily_PDF_Avrage[".viewFields"][] = "total_images";
$tdataDaily_PDF_Avrage[".viewFields"][] = "Taken_Avg";
$tdataDaily_PDF_Avrage[".viewFields"][] = "work_week";
$tdataDaily_PDF_Avrage[".viewFields"][] = "work_month";

$tdataDaily_PDF_Avrage[".addFields"] = array();
$tdataDaily_PDF_Avrage[".addFields"][] = "work_date";
$tdataDaily_PDF_Avrage[".addFields"][] = "designer_name";
$tdataDaily_PDF_Avrage[".addFields"][] = "pdf_name";

$tdataDaily_PDF_Avrage[".masterListFields"] = array();
$tdataDaily_PDF_Avrage[".masterListFields"][] = "work_date";
$tdataDaily_PDF_Avrage[".masterListFields"][] = "done_date";
$tdataDaily_PDF_Avrage[".masterListFields"][] = "designer_name";
$tdataDaily_PDF_Avrage[".masterListFields"][] = "pdf_name";
$tdataDaily_PDF_Avrage[".masterListFields"][] = "total_images";
$tdataDaily_PDF_Avrage[".masterListFields"][] = "Taken_Avg";
$tdataDaily_PDF_Avrage[".masterListFields"][] = "work_week";
$tdataDaily_PDF_Avrage[".masterListFields"][] = "work_month";

$tdataDaily_PDF_Avrage[".inlineAddFields"] = array();
$tdataDaily_PDF_Avrage[".inlineAddFields"][] = "work_date";
$tdataDaily_PDF_Avrage[".inlineAddFields"][] = "designer_name";
$tdataDaily_PDF_Avrage[".inlineAddFields"][] = "pdf_name";

$tdataDaily_PDF_Avrage[".editFields"] = array();
$tdataDaily_PDF_Avrage[".editFields"][] = "work_date";
$tdataDaily_PDF_Avrage[".editFields"][] = "designer_name";
$tdataDaily_PDF_Avrage[".editFields"][] = "pdf_name";

$tdataDaily_PDF_Avrage[".inlineEditFields"] = array();
$tdataDaily_PDF_Avrage[".inlineEditFields"][] = "work_date";
$tdataDaily_PDF_Avrage[".inlineEditFields"][] = "designer_name";
$tdataDaily_PDF_Avrage[".inlineEditFields"][] = "pdf_name";

$tdataDaily_PDF_Avrage[".exportFields"] = array();
$tdataDaily_PDF_Avrage[".exportFields"][] = "work_date";
$tdataDaily_PDF_Avrage[".exportFields"][] = "done_date";
$tdataDaily_PDF_Avrage[".exportFields"][] = "designer_name";
$tdataDaily_PDF_Avrage[".exportFields"][] = "pdf_name";
$tdataDaily_PDF_Avrage[".exportFields"][] = "total_images";
$tdataDaily_PDF_Avrage[".exportFields"][] = "Taken_Avg";
$tdataDaily_PDF_Avrage[".exportFields"][] = "work_week";
$tdataDaily_PDF_Avrage[".exportFields"][] = "work_month";

$tdataDaily_PDF_Avrage[".importFields"] = array();
$tdataDaily_PDF_Avrage[".importFields"][] = "work_date";
$tdataDaily_PDF_Avrage[".importFields"][] = "done_date";
$tdataDaily_PDF_Avrage[".importFields"][] = "designer_name";
$tdataDaily_PDF_Avrage[".importFields"][] = "pdf_name";
$tdataDaily_PDF_Avrage[".importFields"][] = "total_images";
$tdataDaily_PDF_Avrage[".importFields"][] = "Taken_Avg";
$tdataDaily_PDF_Avrage[".importFields"][] = "work_week";
$tdataDaily_PDF_Avrage[".importFields"][] = "work_month";

$tdataDaily_PDF_Avrage[".printFields"] = array();
$tdataDaily_PDF_Avrage[".printFields"][] = "work_date";
$tdataDaily_PDF_Avrage[".printFields"][] = "done_date";
$tdataDaily_PDF_Avrage[".printFields"][] = "designer_name";
$tdataDaily_PDF_Avrage[".printFields"][] = "pdf_name";
$tdataDaily_PDF_Avrage[".printFields"][] = "total_images";
$tdataDaily_PDF_Avrage[".printFields"][] = "Taken_Avg";
$tdataDaily_PDF_Avrage[".printFields"][] = "work_week";
$tdataDaily_PDF_Avrage[".printFields"][] = "work_month";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Avrage","work_date"); 
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDaily_PDF_Avrage["work_date"] = $fdata;
//	done_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "done_date";
	$fdata["GoodName"] = "done_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Avrage","done_date"); 
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

	

	
	$tdataDaily_PDF_Avrage["done_date"] = $fdata;
//	designer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer_name";
	$fdata["GoodName"] = "designer_name";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Avrage","designer_name"); 
	$fdata["FieldType"] = 201;
	
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
	
		$fdata["strField"] = "designer_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designer_name";
	
		
		
				
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
	
	
	
	

	

	
	$tdataDaily_PDF_Avrage["designer_name"] = $fdata;
//	pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pdf_name";
	$fdata["GoodName"] = "pdf_name";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Avrage","pdf_name"); 
	$fdata["FieldType"] = 201;
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataDaily_PDF_Avrage["pdf_name"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Avrage","total_images"); 
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

	

	
	$tdataDaily_PDF_Avrage["total_images"] = $fdata;
//	Taken_Avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Taken_Avg";
	$fdata["GoodName"] = "Taken_Avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Avrage","Taken_Avg"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Taken_Avg"; 
	
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

	

	
	$tdataDaily_PDF_Avrage["Taken_Avg"] = $fdata;
//	work_week
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "work_week";
	$fdata["GoodName"] = "work_week";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Avrage","work_week"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "work_week"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WEEK(work_date)+1";
	
		
		
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

	

	
	$tdataDaily_PDF_Avrage["work_week"] = $fdata;
//	work_month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "work_month";
	$fdata["GoodName"] = "work_month";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Avrage","work_month"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "work_month"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MONTH(work_date)";
	
		
		
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

	

	
	$tdataDaily_PDF_Avrage["work_month"] = $fdata;

	
$tables_data["Daily PDF Avrage"]=&$tdataDaily_PDF_Avrage;
$field_labels["Daily_PDF_Avrage"] = &$fieldLabelsDaily_PDF_Avrage;
$fieldToolTips["Daily PDF Avrage"] = &$fieldToolTipsDaily_PDF_Avrage;
$page_titles["Daily_PDF_Avrage"] = &$pageTitlesDaily_PDF_Avrage;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Daily PDF Avrage"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Daily PDF Avrage"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Daily_PDF_Avrage()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_date,  Date(work_date) AS done_date,  designer_name,  pdf_name,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(designer_time)/SUM(total_images_counted)) AS Taken_Avg,  WEEK(work_date)+1 AS work_week,  MONTH(work_date) AS work_month";
$proto0["m_strFrom"] = "FROM designer_report";
$proto0["m_strWhere"] = "(work_type !=2) AND (user_group =7)";
$proto0["m_strOrderBy"] = "ORDER BY Date(work_date) DESC, SUM(total_images_counted) DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(work_type !=2) AND (user_group =7)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(work_type !=2) AND (user_group =7)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "work_type !=2";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily PDF Avrage"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "!=2";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "user_group =7";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "user_group",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily PDF Avrage"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "=7";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = true;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily PDF Avrage"
));

$proto9["m_sql"] = "work_date";
$proto9["m_srcTableName"] = "Daily PDF Avrage";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_CUSTOM";
$proto12["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "work_date"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "Date";
$obj = new SQLFunctionCall($proto12);

$proto11["m_sql"] = "Date(work_date)";
$proto11["m_srcTableName"] = "Daily PDF Avrage";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "done_date";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily PDF Avrage"
));

$proto14["m_sql"] = "designer_name";
$proto14["m_srcTableName"] = "Daily PDF Avrage";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily PDF Avrage"
));

$proto16["m_sql"] = "pdf_name";
$proto16["m_srcTableName"] = "Daily PDF Avrage";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_SUM";
$proto19["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total_images_counted",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily PDF Avrage"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "SUM(total_images_counted)";
$proto18["m_srcTableName"] = "Daily PDF Avrage";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "total_images";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_CUSTOM";
$proto22["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(designer_time)/SUM(total_images_counted)"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "SEC_TO_TIME(SUM(designer_time)/SUM(total_images_counted))";
$proto21["m_srcTableName"] = "Daily PDF Avrage";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "Taken_Avg";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "WEEK(work_date)+1"
));

$proto24["m_sql"] = "WEEK(work_date)+1";
$proto24["m_srcTableName"] = "Daily PDF Avrage";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "work_week";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_CUSTOM";
$proto27["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "work_date"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "MONTH";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "MONTH(work_date)";
$proto26["m_srcTableName"] = "Daily PDF Avrage";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "work_month";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "designer_report";
$proto30["m_srcTableName"] = "Daily PDF Avrage";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "report_id";
$proto30["m_columns"][] = "report_reference";
$proto30["m_columns"][] = "work_date";
$proto30["m_columns"][] = "designer_name";
$proto30["m_columns"][] = "team_id";
$proto30["m_columns"][] = "subdiv_id";
$proto30["m_columns"][] = "user_group";
$proto30["m_columns"][] = "pdf_name";
$proto30["m_columns"][] = "estimated_time";
$proto30["m_columns"][] = "designer_time";
$proto30["m_columns"][] = "qc_time";
$proto30["m_columns"][] = "efficiency";
$proto30["m_columns"][] = "total_images_counted";
$proto30["m_columns"][] = "comments";
$proto30["m_columns"][] = "work_type";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "designer_report";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "Daily PDF Avrage";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily PDF Avrage"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily PDF Avrage"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto37=array();
						$proto38=array();
$proto38["m_functiontype"] = "SQLF_CUSTOM";
$proto38["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "work_date"
));

$proto38["m_arguments"][]=$obj;
$proto38["m_strFunctionName"] = "Date";
$obj = new SQLFunctionCall($proto38);

$proto37["m_column"]=$obj;
$proto37["m_bAsc"] = 0;
$proto37["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto37);

$proto0["m_orderby"][]=$obj;					
												$proto40=array();
						$proto41=array();
$proto41["m_functiontype"] = "SQLF_SUM";
$proto41["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total_images_counted",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily PDF Avrage"
));

$proto41["m_arguments"][]=$obj;
$proto41["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto41);

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 0;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Daily PDF Avrage";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Daily_PDF_Avrage = createSqlQuery_Daily_PDF_Avrage();


	
								
	
$tdataDaily_PDF_Avrage[".sqlquery"] = $queryData_Daily_PDF_Avrage;

$tableEvents["Daily PDF Avrage"] = new eventsBase;
$tdataDaily_PDF_Avrage[".hasEvents"] = false;

?>