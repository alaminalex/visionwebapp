<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDaily_Report_Designer_PDF = array();	
	$tdataDaily_Report_Designer_PDF[".truncateText"] = true;
	$tdataDaily_Report_Designer_PDF[".NumberOfChars"] = 256; 
	$tdataDaily_Report_Designer_PDF[".ShortName"] = "Daily_Report_Designer_PDF";
	$tdataDaily_Report_Designer_PDF[".OwnerID"] = "";
	$tdataDaily_Report_Designer_PDF[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsDaily_Report_Designer_PDF = array();
$fieldToolTipsDaily_Report_Designer_PDF = array();
$pageTitlesDaily_Report_Designer_PDF = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDaily_Report_Designer_PDF["English"] = array();
	$fieldToolTipsDaily_Report_Designer_PDF["English"] = array();
	$pageTitlesDaily_Report_Designer_PDF["English"] = array();
	$fieldLabelsDaily_Report_Designer_PDF["English"]["pdf_name"] = "Pdf Name";
	$fieldToolTipsDaily_Report_Designer_PDF["English"]["pdf_name"] = "";
	$fieldLabelsDaily_Report_Designer_PDF["English"]["work_date"] = "Work Date";
	$fieldToolTipsDaily_Report_Designer_PDF["English"]["work_date"] = "";
	$fieldLabelsDaily_Report_Designer_PDF["English"]["designer_name"] = "Designer Name";
	$fieldToolTipsDaily_Report_Designer_PDF["English"]["designer_name"] = "";
	$fieldLabelsDaily_Report_Designer_PDF["English"]["total_images"] = "Total Images";
	$fieldToolTipsDaily_Report_Designer_PDF["English"]["total_images"] = "";
	$fieldLabelsDaily_Report_Designer_PDF["English"]["eta_Avg"] = "Eta Avg";
	$fieldToolTipsDaily_Report_Designer_PDF["English"]["eta_Avg"] = "";
	$fieldLabelsDaily_Report_Designer_PDF["English"]["Taken_Avg"] = "Taken Avg";
	$fieldToolTipsDaily_Report_Designer_PDF["English"]["Taken_Avg"] = "";
	$fieldLabelsDaily_Report_Designer_PDF["English"]["done_date"] = "Done Date";
	$fieldToolTipsDaily_Report_Designer_PDF["English"]["done_date"] = "";
	$fieldLabelsDaily_Report_Designer_PDF["English"]["work_week"] = "Work Week";
	$fieldToolTipsDaily_Report_Designer_PDF["English"]["work_week"] = "";
	$fieldLabelsDaily_Report_Designer_PDF["English"]["work_month"] = "Work Month";
	$fieldToolTipsDaily_Report_Designer_PDF["English"]["work_month"] = "";
	$fieldLabelsDaily_Report_Designer_PDF["English"]["qc_time"] = "Qc Time";
	$fieldToolTipsDaily_Report_Designer_PDF["English"]["qc_time"] = "";
	if (count($fieldToolTipsDaily_Report_Designer_PDF["English"]))
		$tdataDaily_Report_Designer_PDF[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDaily_Report_Designer_PDF[""] = array();
	$fieldToolTipsDaily_Report_Designer_PDF[""] = array();
	$pageTitlesDaily_Report_Designer_PDF[""] = array();
	$fieldLabelsDaily_Report_Designer_PDF[""]["work_date"] = "Work Date";
	$fieldToolTipsDaily_Report_Designer_PDF[""]["work_date"] = "";
	$fieldLabelsDaily_Report_Designer_PDF[""]["designer_name"] = "Designer Name";
	$fieldToolTipsDaily_Report_Designer_PDF[""]["designer_name"] = "";
	$fieldLabelsDaily_Report_Designer_PDF[""]["total_images"] = "Total Images";
	$fieldToolTipsDaily_Report_Designer_PDF[""]["total_images"] = "";
	$fieldLabelsDaily_Report_Designer_PDF[""]["eta_Avg"] = "Eta Avg";
	$fieldToolTipsDaily_Report_Designer_PDF[""]["eta_Avg"] = "";
	$fieldLabelsDaily_Report_Designer_PDF[""]["Taken_Avg"] = "Taken Avg";
	$fieldToolTipsDaily_Report_Designer_PDF[""]["Taken_Avg"] = "";
	$fieldLabelsDaily_Report_Designer_PDF[""]["done_date"] = "Done Date";
	$fieldToolTipsDaily_Report_Designer_PDF[""]["done_date"] = "";
	$fieldLabelsDaily_Report_Designer_PDF[""]["work_week"] = "Work Week";
	$fieldToolTipsDaily_Report_Designer_PDF[""]["work_week"] = "";
	$fieldLabelsDaily_Report_Designer_PDF[""]["work_month"] = "Work Month";
	$fieldToolTipsDaily_Report_Designer_PDF[""]["work_month"] = "";
	$fieldLabelsDaily_Report_Designer_PDF[""]["qc_time"] = "Qc Time";
	$fieldToolTipsDaily_Report_Designer_PDF[""]["qc_time"] = "";
	if (count($fieldToolTipsDaily_Report_Designer_PDF[""]))
		$tdataDaily_Report_Designer_PDF[".isUseToolTips"] = true;
}
	
	
	$tdataDaily_Report_Designer_PDF[".NCSearch"] = true;



$tdataDaily_Report_Designer_PDF[".shortTableName"] = "Daily_Report_Designer_PDF";
$tdataDaily_Report_Designer_PDF[".nSecOptions"] = 0;
$tdataDaily_Report_Designer_PDF[".recsPerRowList"] = 1;
$tdataDaily_Report_Designer_PDF[".recsPerRowPrint"] = 1;
$tdataDaily_Report_Designer_PDF[".mainTableOwnerID"] = "";
$tdataDaily_Report_Designer_PDF[".moveNext"] = 1;
$tdataDaily_Report_Designer_PDF[".entityType"] = 2;

$tdataDaily_Report_Designer_PDF[".strOriginalTableName"] = "jobfile";




$tdataDaily_Report_Designer_PDF[".showAddInPopup"] = false;

$tdataDaily_Report_Designer_PDF[".showEditInPopup"] = false;

$tdataDaily_Report_Designer_PDF[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDaily_Report_Designer_PDF[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDaily_Report_Designer_PDF[".fieldsForRegister"] = array();

$tdataDaily_Report_Designer_PDF[".listAjax"] = false;

	$tdataDaily_Report_Designer_PDF[".audit"] = false;

	$tdataDaily_Report_Designer_PDF[".locking"] = false;


$tdataDaily_Report_Designer_PDF[".add"] = true;
$tdataDaily_Report_Designer_PDF[".afterAddAction"] = 0;
$tdataDaily_Report_Designer_PDF[".closePopupAfterAdd"] = 1;
$tdataDaily_Report_Designer_PDF[".afterAddActionDetTable"] = "";

$tdataDaily_Report_Designer_PDF[".list"] = true;

$tdataDaily_Report_Designer_PDF[".inlineAdd"] = true;


$tdataDaily_Report_Designer_PDF[".exportTo"] = true;

$tdataDaily_Report_Designer_PDF[".printFriendly"] = true;


$tdataDaily_Report_Designer_PDF[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDaily_Report_Designer_PDF[".searchSaving"] = false;
//

$tdataDaily_Report_Designer_PDF[".showSearchPanel"] = true;
		$tdataDaily_Report_Designer_PDF[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDaily_Report_Designer_PDF[".isUseAjaxSuggest"] = false;
else 
	$tdataDaily_Report_Designer_PDF[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDaily_Report_Designer_PDF[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDaily_Report_Designer_PDF[".isUseTimeForSearch"] = false;





$tdataDaily_Report_Designer_PDF[".allSearchFields"] = array();
$tdataDaily_Report_Designer_PDF[".filterFields"] = array();
$tdataDaily_Report_Designer_PDF[".requiredSearchFields"] = array();

$tdataDaily_Report_Designer_PDF[".allSearchFields"][] = "work_date";
	$tdataDaily_Report_Designer_PDF[".allSearchFields"][] = "done_date";
	$tdataDaily_Report_Designer_PDF[".allSearchFields"][] = "designer_name";
	$tdataDaily_Report_Designer_PDF[".allSearchFields"][] = "pdf_name";
	$tdataDaily_Report_Designer_PDF[".allSearchFields"][] = "total_images";
	$tdataDaily_Report_Designer_PDF[".allSearchFields"][] = "Taken_Avg";
	$tdataDaily_Report_Designer_PDF[".allSearchFields"][] = "qc_time";
	$tdataDaily_Report_Designer_PDF[".allSearchFields"][] = "work_week";
	$tdataDaily_Report_Designer_PDF[".allSearchFields"][] = "work_month";
	

$tdataDaily_Report_Designer_PDF[".googleLikeFields"] = array();
$tdataDaily_Report_Designer_PDF[".googleLikeFields"][] = "work_date";
$tdataDaily_Report_Designer_PDF[".googleLikeFields"][] = "done_date";
$tdataDaily_Report_Designer_PDF[".googleLikeFields"][] = "designer_name";
$tdataDaily_Report_Designer_PDF[".googleLikeFields"][] = "pdf_name";
$tdataDaily_Report_Designer_PDF[".googleLikeFields"][] = "total_images";
$tdataDaily_Report_Designer_PDF[".googleLikeFields"][] = "eta_Avg";
$tdataDaily_Report_Designer_PDF[".googleLikeFields"][] = "Taken_Avg";
$tdataDaily_Report_Designer_PDF[".googleLikeFields"][] = "qc_time";
$tdataDaily_Report_Designer_PDF[".googleLikeFields"][] = "work_week";
$tdataDaily_Report_Designer_PDF[".googleLikeFields"][] = "work_month";


$tdataDaily_Report_Designer_PDF[".advSearchFields"] = array();
$tdataDaily_Report_Designer_PDF[".advSearchFields"][] = "work_date";
$tdataDaily_Report_Designer_PDF[".advSearchFields"][] = "done_date";
$tdataDaily_Report_Designer_PDF[".advSearchFields"][] = "designer_name";
$tdataDaily_Report_Designer_PDF[".advSearchFields"][] = "pdf_name";
$tdataDaily_Report_Designer_PDF[".advSearchFields"][] = "total_images";
$tdataDaily_Report_Designer_PDF[".advSearchFields"][] = "eta_Avg";
$tdataDaily_Report_Designer_PDF[".advSearchFields"][] = "Taken_Avg";
$tdataDaily_Report_Designer_PDF[".advSearchFields"][] = "qc_time";
$tdataDaily_Report_Designer_PDF[".advSearchFields"][] = "work_week";
$tdataDaily_Report_Designer_PDF[".advSearchFields"][] = "work_month";

$tdataDaily_Report_Designer_PDF[".tableType"] = "report";

$tdataDaily_Report_Designer_PDF[".printerPageOrientation"] = 0;
$tdataDaily_Report_Designer_PDF[".nPrinterPageScale"] = 100;

$tdataDaily_Report_Designer_PDF[".nPrinterSplitRecords"] = 40;

$tdataDaily_Report_Designer_PDF[".nPrinterPDFSplitRecords"] = 40;



$tdataDaily_Report_Designer_PDF[".geocodingEnabled"] = false;

//report settings
$tdataDaily_Report_Designer_PDF[".printReportLayout"] = 3;	

$tdataDaily_Report_Designer_PDF[".reportPrintPartitionType"] = 0;	
$tdataDaily_Report_Designer_PDF[".reportPrintGroupsPerPage"] = 3;	
	$tdataDaily_Report_Designer_PDF[".lowGroup"] = 1;



$tdataDaily_Report_Designer_PDF[".reportGroupFields"] = true;
$tdataDaily_Report_Designer_PDF[".pageSize"] = 1;
$tdataDaily_Report_Designer_PDF[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "work_date";
	$rgroupField['groupInterval'] = 5;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataDaily_Report_Designer_PDF[".reportGroupFieldsData"] = $reportGroupFields;






$tdataDaily_Report_Designer_PDF[".repShowDet"] = true;

$tdataDaily_Report_Designer_PDF[".reportLayout"] = 3;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC, SUM(total_images_counted) DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDaily_Report_Designer_PDF[".strOrderBy"] = $tstrOrderBy;

$tdataDaily_Report_Designer_PDF[".orderindexes"] = array();
$tdataDaily_Report_Designer_PDF[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "work_date");
$tdataDaily_Report_Designer_PDF[".orderindexes"][] = array(0, (0 ? "ASC" : "DESC"), "SUM(total_images_counted)");

$tdataDaily_Report_Designer_PDF[".sqlHead"] = "SELECT work_date,  Date(work_date) AS done_date,  designer_name,  pdf_name,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)/SUM(total_images_counted)) AS eta_Avg,  SEC_TO_TIME(SUM(designer_time)/SUM(total_images_counted)) AS Taken_Avg,  SEC_TO_TIME(SUM(qc_time)/SUM(total_images_counted)) AS qc_time,  WEEK(work_date)+1 AS work_week,  MONTH(work_date) AS work_month";
$tdataDaily_Report_Designer_PDF[".sqlFrom"] = "FROM designer_report";
$tdataDaily_Report_Designer_PDF[".sqlWhereExpr"] = "(work_type !=2) AND (user_group =7)";
$tdataDaily_Report_Designer_PDF[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDaily_Report_Designer_PDF[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDaily_Report_Designer_PDF[".arrGroupsPerPage"] = $arrGPP;

$tdataDaily_Report_Designer_PDF[".highlightSearchResults"] = true;

$tableKeysDaily_Report_Designer_PDF = array();
$tdataDaily_Report_Designer_PDF[".Keys"] = $tableKeysDaily_Report_Designer_PDF;

$tdataDaily_Report_Designer_PDF[".listFields"] = array();
$tdataDaily_Report_Designer_PDF[".listFields"][] = "work_date";
$tdataDaily_Report_Designer_PDF[".listFields"][] = "done_date";
$tdataDaily_Report_Designer_PDF[".listFields"][] = "designer_name";
$tdataDaily_Report_Designer_PDF[".listFields"][] = "pdf_name";
$tdataDaily_Report_Designer_PDF[".listFields"][] = "total_images";
$tdataDaily_Report_Designer_PDF[".listFields"][] = "eta_Avg";
$tdataDaily_Report_Designer_PDF[".listFields"][] = "Taken_Avg";
$tdataDaily_Report_Designer_PDF[".listFields"][] = "qc_time";
$tdataDaily_Report_Designer_PDF[".listFields"][] = "work_week";
$tdataDaily_Report_Designer_PDF[".listFields"][] = "work_month";

$tdataDaily_Report_Designer_PDF[".hideMobileList"] = array();


$tdataDaily_Report_Designer_PDF[".viewFields"] = array();
$tdataDaily_Report_Designer_PDF[".viewFields"][] = "work_date";
$tdataDaily_Report_Designer_PDF[".viewFields"][] = "done_date";
$tdataDaily_Report_Designer_PDF[".viewFields"][] = "designer_name";
$tdataDaily_Report_Designer_PDF[".viewFields"][] = "pdf_name";
$tdataDaily_Report_Designer_PDF[".viewFields"][] = "total_images";
$tdataDaily_Report_Designer_PDF[".viewFields"][] = "eta_Avg";
$tdataDaily_Report_Designer_PDF[".viewFields"][] = "Taken_Avg";
$tdataDaily_Report_Designer_PDF[".viewFields"][] = "qc_time";
$tdataDaily_Report_Designer_PDF[".viewFields"][] = "work_week";
$tdataDaily_Report_Designer_PDF[".viewFields"][] = "work_month";

$tdataDaily_Report_Designer_PDF[".addFields"] = array();
$tdataDaily_Report_Designer_PDF[".addFields"][] = "qc_time";

$tdataDaily_Report_Designer_PDF[".masterListFields"] = array();
$tdataDaily_Report_Designer_PDF[".masterListFields"][] = "work_date";
$tdataDaily_Report_Designer_PDF[".masterListFields"][] = "done_date";
$tdataDaily_Report_Designer_PDF[".masterListFields"][] = "designer_name";
$tdataDaily_Report_Designer_PDF[".masterListFields"][] = "pdf_name";
$tdataDaily_Report_Designer_PDF[".masterListFields"][] = "total_images";
$tdataDaily_Report_Designer_PDF[".masterListFields"][] = "eta_Avg";
$tdataDaily_Report_Designer_PDF[".masterListFields"][] = "Taken_Avg";
$tdataDaily_Report_Designer_PDF[".masterListFields"][] = "qc_time";
$tdataDaily_Report_Designer_PDF[".masterListFields"][] = "work_week";
$tdataDaily_Report_Designer_PDF[".masterListFields"][] = "work_month";

$tdataDaily_Report_Designer_PDF[".inlineAddFields"] = array();
$tdataDaily_Report_Designer_PDF[".inlineAddFields"][] = "qc_time";

$tdataDaily_Report_Designer_PDF[".editFields"] = array();
$tdataDaily_Report_Designer_PDF[".editFields"][] = "qc_time";

$tdataDaily_Report_Designer_PDF[".inlineEditFields"] = array();
$tdataDaily_Report_Designer_PDF[".inlineEditFields"][] = "qc_time";

$tdataDaily_Report_Designer_PDF[".exportFields"] = array();
$tdataDaily_Report_Designer_PDF[".exportFields"][] = "work_date";
$tdataDaily_Report_Designer_PDF[".exportFields"][] = "done_date";
$tdataDaily_Report_Designer_PDF[".exportFields"][] = "designer_name";
$tdataDaily_Report_Designer_PDF[".exportFields"][] = "pdf_name";
$tdataDaily_Report_Designer_PDF[".exportFields"][] = "total_images";
$tdataDaily_Report_Designer_PDF[".exportFields"][] = "eta_Avg";
$tdataDaily_Report_Designer_PDF[".exportFields"][] = "Taken_Avg";
$tdataDaily_Report_Designer_PDF[".exportFields"][] = "qc_time";
$tdataDaily_Report_Designer_PDF[".exportFields"][] = "work_week";
$tdataDaily_Report_Designer_PDF[".exportFields"][] = "work_month";

$tdataDaily_Report_Designer_PDF[".importFields"] = array();
$tdataDaily_Report_Designer_PDF[".importFields"][] = "work_date";
$tdataDaily_Report_Designer_PDF[".importFields"][] = "done_date";
$tdataDaily_Report_Designer_PDF[".importFields"][] = "designer_name";
$tdataDaily_Report_Designer_PDF[".importFields"][] = "pdf_name";
$tdataDaily_Report_Designer_PDF[".importFields"][] = "total_images";
$tdataDaily_Report_Designer_PDF[".importFields"][] = "eta_Avg";
$tdataDaily_Report_Designer_PDF[".importFields"][] = "Taken_Avg";
$tdataDaily_Report_Designer_PDF[".importFields"][] = "qc_time";
$tdataDaily_Report_Designer_PDF[".importFields"][] = "work_week";
$tdataDaily_Report_Designer_PDF[".importFields"][] = "work_month";

$tdataDaily_Report_Designer_PDF[".printFields"] = array();
$tdataDaily_Report_Designer_PDF[".printFields"][] = "work_date";
$tdataDaily_Report_Designer_PDF[".printFields"][] = "done_date";
$tdataDaily_Report_Designer_PDF[".printFields"][] = "designer_name";
$tdataDaily_Report_Designer_PDF[".printFields"][] = "pdf_name";
$tdataDaily_Report_Designer_PDF[".printFields"][] = "total_images";
$tdataDaily_Report_Designer_PDF[".printFields"][] = "eta_Avg";
$tdataDaily_Report_Designer_PDF[".printFields"][] = "Taken_Avg";
$tdataDaily_Report_Designer_PDF[".printFields"][] = "qc_time";
$tdataDaily_Report_Designer_PDF[".printFields"][] = "work_week";
$tdataDaily_Report_Designer_PDF[".printFields"][] = "work_month";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designer_PDF","work_date"); 
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

	

	
	$tdataDaily_Report_Designer_PDF["work_date"] = $fdata;
//	done_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "done_date";
	$fdata["GoodName"] = "done_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designer_PDF","done_date"); 
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

	

	
	$tdataDaily_Report_Designer_PDF["done_date"] = $fdata;
//	designer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer_name";
	$fdata["GoodName"] = "designer_name";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designer_PDF","designer_name"); 
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

	

	
	$tdataDaily_Report_Designer_PDF["designer_name"] = $fdata;
//	pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pdf_name";
	$fdata["GoodName"] = "pdf_name";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designer_PDF","pdf_name"); 
	$fdata["FieldType"] = 201;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdataDaily_Report_Designer_PDF["pdf_name"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designer_PDF","total_images"); 
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

	

	
	$tdataDaily_Report_Designer_PDF["total_images"] = $fdata;
//	eta_Avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "eta_Avg";
	$fdata["GoodName"] = "eta_Avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designer_PDF","eta_Avg"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "eta_Avg"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(estimated_time)/SUM(total_images_counted))";
	
		
		
				
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
	
	
	
	

	

	
	$tdataDaily_Report_Designer_PDF["eta_Avg"] = $fdata;
//	Taken_Avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Taken_Avg";
	$fdata["GoodName"] = "Taken_Avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designer_PDF","Taken_Avg"); 
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

	

	
	$tdataDaily_Report_Designer_PDF["Taken_Avg"] = $fdata;
//	qc_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "qc_time";
	$fdata["GoodName"] = "qc_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designer_PDF","qc_time"); 
	$fdata["FieldType"] = 134;
	
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
	$fdata["FullName"] = "SEC_TO_TIME(SUM(qc_time)/SUM(total_images_counted))";
	
		
		
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

	

	
	$tdataDaily_Report_Designer_PDF["qc_time"] = $fdata;
//	work_week
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "work_week";
	$fdata["GoodName"] = "work_week";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designer_PDF","work_week"); 
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

	

	
	$tdataDaily_Report_Designer_PDF["work_week"] = $fdata;
//	work_month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "work_month";
	$fdata["GoodName"] = "work_month";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designer_PDF","work_month"); 
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

	

	
	$tdataDaily_Report_Designer_PDF["work_month"] = $fdata;

	
$tables_data["Daily Report Designer PDF"]=&$tdataDaily_Report_Designer_PDF;
$field_labels["Daily_Report_Designer_PDF"] = &$fieldLabelsDaily_Report_Designer_PDF;
$fieldToolTips["Daily Report Designer PDF"] = &$fieldToolTipsDaily_Report_Designer_PDF;
$page_titles["Daily_Report_Designer_PDF"] = &$pageTitlesDaily_Report_Designer_PDF;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Daily Report Designer PDF"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Daily Report Designer PDF"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Daily_Report_Designer_PDF()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_date,  Date(work_date) AS done_date,  designer_name,  pdf_name,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)/SUM(total_images_counted)) AS eta_Avg,  SEC_TO_TIME(SUM(designer_time)/SUM(total_images_counted)) AS Taken_Avg,  SEC_TO_TIME(SUM(qc_time)/SUM(total_images_counted)) AS qc_time,  WEEK(work_date)+1 AS work_week,  MONTH(work_date) AS work_month";
$proto0["m_strFrom"] = "FROM designer_report";
$proto0["m_strWhere"] = "(work_type !=2) AND (user_group =7)";
$proto0["m_strOrderBy"] = "ORDER BY work_date DESC, SUM(total_images_counted) DESC";
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
	"m_srcTableName" => "Daily Report Designer PDF"
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
	"m_srcTableName" => "Daily Report Designer PDF"
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
	"m_srcTableName" => "Daily Report Designer PDF"
));

$proto9["m_sql"] = "work_date";
$proto9["m_srcTableName"] = "Daily Report Designer PDF";
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
$proto11["m_srcTableName"] = "Daily Report Designer PDF";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "done_date";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Designer PDF"
));

$proto14["m_sql"] = "designer_name";
$proto14["m_srcTableName"] = "Daily Report Designer PDF";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Designer PDF"
));

$proto16["m_sql"] = "pdf_name";
$proto16["m_srcTableName"] = "Daily Report Designer PDF";
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
	"m_srcTableName" => "Daily Report Designer PDF"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "SUM(total_images_counted)";
$proto18["m_srcTableName"] = "Daily Report Designer PDF";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "total_images";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_CUSTOM";
$proto22["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(estimated_time)/SUM(total_images_counted)"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "SEC_TO_TIME(SUM(estimated_time)/SUM(total_images_counted))";
$proto21["m_srcTableName"] = "Daily Report Designer PDF";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "eta_Avg";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$proto25=array();
$proto25["m_functiontype"] = "SQLF_CUSTOM";
$proto25["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(designer_time)/SUM(total_images_counted)"
));

$proto25["m_arguments"][]=$obj;
$proto25["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto25);

$proto24["m_sql"] = "SEC_TO_TIME(SUM(designer_time)/SUM(total_images_counted))";
$proto24["m_srcTableName"] = "Daily Report Designer PDF";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "Taken_Avg";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$proto28=array();
$proto28["m_functiontype"] = "SQLF_CUSTOM";
$proto28["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(qc_time)/SUM(total_images_counted)"
));

$proto28["m_arguments"][]=$obj;
$proto28["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto28);

$proto27["m_sql"] = "SEC_TO_TIME(SUM(qc_time)/SUM(total_images_counted))";
$proto27["m_srcTableName"] = "Daily Report Designer PDF";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "qc_time";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "WEEK(work_date)+1"
));

$proto30["m_sql"] = "WEEK(work_date)+1";
$proto30["m_srcTableName"] = "Daily Report Designer PDF";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "work_week";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$proto33=array();
$proto33["m_functiontype"] = "SQLF_CUSTOM";
$proto33["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "work_date"
));

$proto33["m_arguments"][]=$obj;
$proto33["m_strFunctionName"] = "MONTH";
$obj = new SQLFunctionCall($proto33);

$proto32["m_sql"] = "MONTH(work_date)";
$proto32["m_srcTableName"] = "Daily Report Designer PDF";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "work_month";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "designer_report";
$proto36["m_srcTableName"] = "Daily Report Designer PDF";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "report_id";
$proto36["m_columns"][] = "report_reference";
$proto36["m_columns"][] = "work_date";
$proto36["m_columns"][] = "designer_name";
$proto36["m_columns"][] = "team_id";
$proto36["m_columns"][] = "subdiv_id";
$proto36["m_columns"][] = "user_group";
$proto36["m_columns"][] = "pdf_name";
$proto36["m_columns"][] = "estimated_time";
$proto36["m_columns"][] = "designer_time";
$proto36["m_columns"][] = "qc_time";
$proto36["m_columns"][] = "efficiency";
$proto36["m_columns"][] = "total_images_counted";
$proto36["m_columns"][] = "comments";
$proto36["m_columns"][] = "work_type";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "designer_report";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "Daily Report Designer PDF";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Designer PDF"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Designer PDF"
));

$proto41["m_column"]=$obj;
$obj = new SQLGroupByItem($proto41);

$proto0["m_groupby"][]=$obj;
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Designer PDF"
));

$proto43["m_column"]=$obj;
$obj = new SQLGroupByItem($proto43);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto45=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Designer PDF"
));

$proto45["m_column"]=$obj;
$proto45["m_bAsc"] = 0;
$proto45["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto45);

$proto0["m_orderby"][]=$obj;					
												$proto47=array();
						$proto48=array();
$proto48["m_functiontype"] = "SQLF_SUM";
$proto48["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total_images_counted",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Designer PDF"
));

$proto48["m_arguments"][]=$obj;
$proto48["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto48);

$proto47["m_column"]=$obj;
$proto47["m_bAsc"] = 0;
$proto47["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto47);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Daily Report Designer PDF";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Daily_Report_Designer_PDF = createSqlQuery_Daily_Report_Designer_PDF();


	
										
	
$tdataDaily_Report_Designer_PDF[".sqlquery"] = $queryData_Daily_Report_Designer_PDF;

$tableEvents["Daily Report Designer PDF"] = new eventsBase;
$tdataDaily_Report_Designer_PDF[".hasEvents"] = false;

?>