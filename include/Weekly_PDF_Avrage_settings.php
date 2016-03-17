<?php
require_once(getabspath("classes/cipherer.php"));




$tdataWeekly_PDF_Avrage = array();	
	$tdataWeekly_PDF_Avrage[".truncateText"] = true;
	$tdataWeekly_PDF_Avrage[".NumberOfChars"] = 256; 
	$tdataWeekly_PDF_Avrage[".ShortName"] = "Weekly_PDF_Avrage";
	$tdataWeekly_PDF_Avrage[".OwnerID"] = "";
	$tdataWeekly_PDF_Avrage[".OriginalTable"] = "designer_report";

//	field labels
$fieldLabelsWeekly_PDF_Avrage = array();
$fieldToolTipsWeekly_PDF_Avrage = array();
$pageTitlesWeekly_PDF_Avrage = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsWeekly_PDF_Avrage["English"] = array();
	$fieldToolTipsWeekly_PDF_Avrage["English"] = array();
	$pageTitlesWeekly_PDF_Avrage["English"] = array();
	$fieldLabelsWeekly_PDF_Avrage["English"]["pdf_name"] = "Pdf Name";
	$fieldToolTipsWeekly_PDF_Avrage["English"]["pdf_name"] = "";
	$fieldLabelsWeekly_PDF_Avrage["English"]["files"] = "Files";
	$fieldToolTipsWeekly_PDF_Avrage["English"]["files"] = "";
	$fieldLabelsWeekly_PDF_Avrage["English"]["project_id"] = "Project Id";
	$fieldToolTipsWeekly_PDF_Avrage["English"]["project_id"] = "";
	$fieldLabelsWeekly_PDF_Avrage["English"]["eta_average"] = "Eta Average";
	$fieldToolTipsWeekly_PDF_Avrage["English"]["eta_average"] = "";
	$fieldLabelsWeekly_PDF_Avrage["English"]["current_avg"] = "Current Avg";
	$fieldToolTipsWeekly_PDF_Avrage["English"]["current_avg"] = "";
	$fieldLabelsWeekly_PDF_Avrage["English"]["end2_date"] = "End2 Date";
	$fieldToolTipsWeekly_PDF_Avrage["English"]["end2_date"] = "";
	if (count($fieldToolTipsWeekly_PDF_Avrage["English"]))
		$tdataWeekly_PDF_Avrage[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsWeekly_PDF_Avrage[""] = array();
	$fieldToolTipsWeekly_PDF_Avrage[""] = array();
	$pageTitlesWeekly_PDF_Avrage[""] = array();
	if (count($fieldToolTipsWeekly_PDF_Avrage[""]))
		$tdataWeekly_PDF_Avrage[".isUseToolTips"] = true;
}
	
	
	$tdataWeekly_PDF_Avrage[".NCSearch"] = true;



$tdataWeekly_PDF_Avrage[".shortTableName"] = "Weekly_PDF_Avrage";
$tdataWeekly_PDF_Avrage[".nSecOptions"] = 0;
$tdataWeekly_PDF_Avrage[".recsPerRowList"] = 1;
$tdataWeekly_PDF_Avrage[".recsPerRowPrint"] = 1;
$tdataWeekly_PDF_Avrage[".mainTableOwnerID"] = "";
$tdataWeekly_PDF_Avrage[".moveNext"] = 1;
$tdataWeekly_PDF_Avrage[".entityType"] = 2;

$tdataWeekly_PDF_Avrage[".strOriginalTableName"] = "designer_report";




$tdataWeekly_PDF_Avrage[".showAddInPopup"] = false;

$tdataWeekly_PDF_Avrage[".showEditInPopup"] = false;

$tdataWeekly_PDF_Avrage[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataWeekly_PDF_Avrage[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataWeekly_PDF_Avrage[".fieldsForRegister"] = array();

$tdataWeekly_PDF_Avrage[".listAjax"] = false;

	$tdataWeekly_PDF_Avrage[".audit"] = false;

	$tdataWeekly_PDF_Avrage[".locking"] = false;


$tdataWeekly_PDF_Avrage[".add"] = true;
$tdataWeekly_PDF_Avrage[".afterAddAction"] = 0;
$tdataWeekly_PDF_Avrage[".closePopupAfterAdd"] = 1;
$tdataWeekly_PDF_Avrage[".afterAddActionDetTable"] = "";

$tdataWeekly_PDF_Avrage[".list"] = true;

$tdataWeekly_PDF_Avrage[".inlineAdd"] = true;


$tdataWeekly_PDF_Avrage[".exportTo"] = true;

$tdataWeekly_PDF_Avrage[".printFriendly"] = true;


$tdataWeekly_PDF_Avrage[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataWeekly_PDF_Avrage[".searchSaving"] = false;
//

$tdataWeekly_PDF_Avrage[".showSearchPanel"] = true;
		$tdataWeekly_PDF_Avrage[".flexibleSearch"] = true;		

if (isMobile())
	$tdataWeekly_PDF_Avrage[".isUseAjaxSuggest"] = false;
else 
	$tdataWeekly_PDF_Avrage[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataWeekly_PDF_Avrage[".addPageEvents"] = false;

// use timepicker for search panel
$tdataWeekly_PDF_Avrage[".isUseTimeForSearch"] = false;





$tdataWeekly_PDF_Avrage[".allSearchFields"] = array();
$tdataWeekly_PDF_Avrage[".filterFields"] = array();
$tdataWeekly_PDF_Avrage[".requiredSearchFields"] = array();

$tdataWeekly_PDF_Avrage[".allSearchFields"][] = "end2_date";
	$tdataWeekly_PDF_Avrage[".allSearchFields"][] = "files";
	$tdataWeekly_PDF_Avrage[".allSearchFields"][] = "project_id";
	$tdataWeekly_PDF_Avrage[".allSearchFields"][] = "pdf_name";
	$tdataWeekly_PDF_Avrage[".allSearchFields"][] = "eta_average";
	$tdataWeekly_PDF_Avrage[".allSearchFields"][] = "current_avg";
	

$tdataWeekly_PDF_Avrage[".googleLikeFields"] = array();
$tdataWeekly_PDF_Avrage[".googleLikeFields"][] = "end2_date";
$tdataWeekly_PDF_Avrage[".googleLikeFields"][] = "files";
$tdataWeekly_PDF_Avrage[".googleLikeFields"][] = "project_id";
$tdataWeekly_PDF_Avrage[".googleLikeFields"][] = "pdf_name";
$tdataWeekly_PDF_Avrage[".googleLikeFields"][] = "eta_average";
$tdataWeekly_PDF_Avrage[".googleLikeFields"][] = "current_avg";


$tdataWeekly_PDF_Avrage[".advSearchFields"] = array();
$tdataWeekly_PDF_Avrage[".advSearchFields"][] = "end2_date";
$tdataWeekly_PDF_Avrage[".advSearchFields"][] = "files";
$tdataWeekly_PDF_Avrage[".advSearchFields"][] = "project_id";
$tdataWeekly_PDF_Avrage[".advSearchFields"][] = "pdf_name";
$tdataWeekly_PDF_Avrage[".advSearchFields"][] = "eta_average";
$tdataWeekly_PDF_Avrage[".advSearchFields"][] = "current_avg";

$tdataWeekly_PDF_Avrage[".tableType"] = "report";

$tdataWeekly_PDF_Avrage[".printerPageOrientation"] = 0;
$tdataWeekly_PDF_Avrage[".nPrinterPageScale"] = 100;

$tdataWeekly_PDF_Avrage[".nPrinterSplitRecords"] = 40;

$tdataWeekly_PDF_Avrage[".nPrinterPDFSplitRecords"] = 40;



$tdataWeekly_PDF_Avrage[".geocodingEnabled"] = false;

//report settings
$tdataWeekly_PDF_Avrage[".printReportLayout"] = 3;	

$tdataWeekly_PDF_Avrage[".reportPrintPartitionType"] = 0;	
$tdataWeekly_PDF_Avrage[".reportPrintGroupsPerPage"] = 3;	
	$tdataWeekly_PDF_Avrage[".lowGroup"] = 1;



$tdataWeekly_PDF_Avrage[".reportGroupFields"] = true;
$tdataWeekly_PDF_Avrage[".pageSize"] = 1;
$tdataWeekly_PDF_Avrage[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "end2_date";
	$rgroupField['groupInterval'] = 4;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataWeekly_PDF_Avrage[".reportGroupFieldsData"] = $reportGroupFields;






$tdataWeekly_PDF_Avrage[".repShowDet"] = true;

$tdataWeekly_PDF_Avrage[".reportLayout"] = 3;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY pdf.pdf_name, jobfile.end2_date DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataWeekly_PDF_Avrage[".strOrderBy"] = $tstrOrderBy;

$tdataWeekly_PDF_Avrage[".orderindexes"] = array();
$tdataWeekly_PDF_Avrage[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "pdf.pdf_name");
$tdataWeekly_PDF_Avrage[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "jobfile.end2_date");

$tdataWeekly_PDF_Avrage[".sqlHead"] = "SELECT jobfile.end2_date,  COUNT(jobfile.designer2_id) AS files,  jobfile.project_id,  pdf.pdf_name,  SEC_TO_TIME(AVG(IFNULL(TIME_TO_SEC(pdf.pdf_estimated_average),0))) AS eta_average,  SEC_TO_TIME(AVG(IFNULL(TIME_TO_SEC(jobfile.designer2_time),0))+(IFNULL(TIME_TO_SEC(jobfile.qc_time),0))) AS current_avg";
$tdataWeekly_PDF_Avrage[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$tdataWeekly_PDF_Avrage[".sqlWhereExpr"] = "(jobfile.end2_date !='0000-00-00 00:00:00') AND (jobfile.filename not like '%retouch%')";
$tdataWeekly_PDF_Avrage[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataWeekly_PDF_Avrage[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataWeekly_PDF_Avrage[".arrGroupsPerPage"] = $arrGPP;

$tdataWeekly_PDF_Avrage[".highlightSearchResults"] = true;

$tableKeysWeekly_PDF_Avrage = array();
$tdataWeekly_PDF_Avrage[".Keys"] = $tableKeysWeekly_PDF_Avrage;

$tdataWeekly_PDF_Avrage[".listFields"] = array();
$tdataWeekly_PDF_Avrage[".listFields"][] = "end2_date";
$tdataWeekly_PDF_Avrage[".listFields"][] = "files";
$tdataWeekly_PDF_Avrage[".listFields"][] = "project_id";
$tdataWeekly_PDF_Avrage[".listFields"][] = "pdf_name";
$tdataWeekly_PDF_Avrage[".listFields"][] = "eta_average";
$tdataWeekly_PDF_Avrage[".listFields"][] = "current_avg";

$tdataWeekly_PDF_Avrage[".hideMobileList"] = array();


$tdataWeekly_PDF_Avrage[".viewFields"] = array();
$tdataWeekly_PDF_Avrage[".viewFields"][] = "end2_date";
$tdataWeekly_PDF_Avrage[".viewFields"][] = "files";
$tdataWeekly_PDF_Avrage[".viewFields"][] = "project_id";
$tdataWeekly_PDF_Avrage[".viewFields"][] = "pdf_name";
$tdataWeekly_PDF_Avrage[".viewFields"][] = "eta_average";
$tdataWeekly_PDF_Avrage[".viewFields"][] = "current_avg";

$tdataWeekly_PDF_Avrage[".addFields"] = array();
$tdataWeekly_PDF_Avrage[".addFields"][] = "pdf_name";

$tdataWeekly_PDF_Avrage[".masterListFields"] = array();
$tdataWeekly_PDF_Avrage[".masterListFields"][] = "end2_date";
$tdataWeekly_PDF_Avrage[".masterListFields"][] = "files";
$tdataWeekly_PDF_Avrage[".masterListFields"][] = "project_id";
$tdataWeekly_PDF_Avrage[".masterListFields"][] = "pdf_name";
$tdataWeekly_PDF_Avrage[".masterListFields"][] = "eta_average";
$tdataWeekly_PDF_Avrage[".masterListFields"][] = "current_avg";

$tdataWeekly_PDF_Avrage[".inlineAddFields"] = array();
$tdataWeekly_PDF_Avrage[".inlineAddFields"][] = "pdf_name";

$tdataWeekly_PDF_Avrage[".editFields"] = array();
$tdataWeekly_PDF_Avrage[".editFields"][] = "pdf_name";

$tdataWeekly_PDF_Avrage[".inlineEditFields"] = array();
$tdataWeekly_PDF_Avrage[".inlineEditFields"][] = "pdf_name";

$tdataWeekly_PDF_Avrage[".exportFields"] = array();
$tdataWeekly_PDF_Avrage[".exportFields"][] = "end2_date";
$tdataWeekly_PDF_Avrage[".exportFields"][] = "files";
$tdataWeekly_PDF_Avrage[".exportFields"][] = "project_id";
$tdataWeekly_PDF_Avrage[".exportFields"][] = "pdf_name";
$tdataWeekly_PDF_Avrage[".exportFields"][] = "eta_average";
$tdataWeekly_PDF_Avrage[".exportFields"][] = "current_avg";

$tdataWeekly_PDF_Avrage[".importFields"] = array();
$tdataWeekly_PDF_Avrage[".importFields"][] = "end2_date";
$tdataWeekly_PDF_Avrage[".importFields"][] = "files";
$tdataWeekly_PDF_Avrage[".importFields"][] = "project_id";
$tdataWeekly_PDF_Avrage[".importFields"][] = "pdf_name";
$tdataWeekly_PDF_Avrage[".importFields"][] = "eta_average";
$tdataWeekly_PDF_Avrage[".importFields"][] = "current_avg";

$tdataWeekly_PDF_Avrage[".printFields"] = array();
$tdataWeekly_PDF_Avrage[".printFields"][] = "end2_date";
$tdataWeekly_PDF_Avrage[".printFields"][] = "files";
$tdataWeekly_PDF_Avrage[".printFields"][] = "project_id";
$tdataWeekly_PDF_Avrage[".printFields"][] = "pdf_name";
$tdataWeekly_PDF_Avrage[".printFields"][] = "eta_average";
$tdataWeekly_PDF_Avrage[".printFields"][] = "current_avg";

//	end2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "end2_date";
	$fdata["GoodName"] = "end2_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Weekly_PDF_Avrage","end2_date"); 
	$fdata["FieldType"] = 135;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "end2_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.end2_date";
	
		
		
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

	

	
	$tdataWeekly_PDF_Avrage["end2_date"] = $fdata;
//	files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "files";
	$fdata["GoodName"] = "files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Weekly_PDF_Avrage","files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "files"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(jobfile.designer2_id)";
	
		
		
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

	

	
	$tdataWeekly_PDF_Avrage["files"] = $fdata;
//	project_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "project_id";
	$fdata["GoodName"] = "project_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Weekly_PDF_Avrage","project_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "project_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.project_id";
	
		
		
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

	

	
	$tdataWeekly_PDF_Avrage["project_id"] = $fdata;
//	pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pdf_name";
	$fdata["GoodName"] = "pdf_name";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Weekly_PDF_Avrage","pdf_name"); 
	$fdata["FieldType"] = 200;
	
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

	

	
	$tdataWeekly_PDF_Avrage["pdf_name"] = $fdata;
//	eta_average
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "eta_average";
	$fdata["GoodName"] = "eta_average";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Weekly_PDF_Avrage","eta_average"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "eta_average"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(AVG(IFNULL(TIME_TO_SEC(pdf.pdf_estimated_average),0)))";
	
		
		
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

	

	
	$tdataWeekly_PDF_Avrage["eta_average"] = $fdata;
//	current_avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "current_avg";
	$fdata["GoodName"] = "current_avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Weekly_PDF_Avrage","current_avg"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "current_avg"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(AVG(IFNULL(TIME_TO_SEC(jobfile.designer2_time),0))+(IFNULL(TIME_TO_SEC(jobfile.qc_time),0)))";
	
		
		
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

	

	
	$tdataWeekly_PDF_Avrage["current_avg"] = $fdata;

	
$tables_data["Weekly PDF Avrage"]=&$tdataWeekly_PDF_Avrage;
$field_labels["Weekly_PDF_Avrage"] = &$fieldLabelsWeekly_PDF_Avrage;
$fieldToolTips["Weekly PDF Avrage"] = &$fieldToolTipsWeekly_PDF_Avrage;
$page_titles["Weekly_PDF_Avrage"] = &$pageTitlesWeekly_PDF_Avrage;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Weekly PDF Avrage"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Weekly PDF Avrage"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Weekly_PDF_Avrage()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile.end2_date,  COUNT(jobfile.designer2_id) AS files,  jobfile.project_id,  pdf.pdf_name,  SEC_TO_TIME(AVG(IFNULL(TIME_TO_SEC(pdf.pdf_estimated_average),0))) AS eta_average,  SEC_TO_TIME(AVG(IFNULL(TIME_TO_SEC(jobfile.designer2_time),0))+(IFNULL(TIME_TO_SEC(jobfile.qc_time),0))) AS current_avg";
$proto0["m_strFrom"] = "FROM jobfile  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto0["m_strWhere"] = "(jobfile.end2_date !='0000-00-00 00:00:00') AND (jobfile.filename not like '%retouch%')";
$proto0["m_strOrderBy"] = "ORDER BY pdf.pdf_name, jobfile.end2_date DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(jobfile.end2_date !='0000-00-00 00:00:00') AND (jobfile.filename not like '%retouch%')";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.end2_date !='0000-00-00 00:00:00') AND (jobfile.filename not like '%retouch%')"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.end2_date !='0000-00-00 00:00:00'";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Weekly PDF Avrage"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "!='0000-00-00 00:00:00'";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "jobfile.filename not like '%retouch%'";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Weekly PDF Avrage"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "not like '%retouch%'";
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
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Weekly PDF Avrage"
));

$proto9["m_sql"] = "jobfile.end2_date";
$proto9["m_srcTableName"] = "Weekly PDF Avrage";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_COUNT";
$proto12["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Weekly PDF Avrage"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto12);

$proto11["m_sql"] = "COUNT(jobfile.designer2_id)";
$proto11["m_srcTableName"] = "Weekly PDF Avrage";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "files";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Weekly PDF Avrage"
));

$proto14["m_sql"] = "jobfile.project_id";
$proto14["m_srcTableName"] = "Weekly PDF Avrage";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Weekly PDF Avrage"
));

$proto16["m_sql"] = "pdf.pdf_name";
$proto16["m_srcTableName"] = "Weekly PDF Avrage";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_CUSTOM";
$proto19["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "AVG(IFNULL(TIME_TO_SEC(pdf.pdf_estimated_average),0))"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "SEC_TO_TIME(AVG(IFNULL(TIME_TO_SEC(pdf.pdf_estimated_average),0)))";
$proto18["m_srcTableName"] = "Weekly PDF Avrage";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "eta_average";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_CUSTOM";
$proto22["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "AVG(IFNULL(TIME_TO_SEC(jobfile.designer2_time),0))+(IFNULL(TIME_TO_SEC(jobfile.qc_time),0))"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "SEC_TO_TIME(AVG(IFNULL(TIME_TO_SEC(jobfile.designer2_time),0))+(IFNULL(TIME_TO_SEC(jobfile.qc_time),0)))";
$proto21["m_srcTableName"] = "Weekly PDF Avrage";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "current_avg";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "jobfile";
$proto25["m_srcTableName"] = "Weekly PDF Avrage";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "jobfile_id";
$proto25["m_columns"][] = "file_url";
$proto25["m_columns"][] = "client_id";
$proto25["m_columns"][] = "work_id";
$proto25["m_columns"][] = "job_id";
$proto25["m_columns"][] = "project_id";
$proto25["m_columns"][] = "folder_name";
$proto25["m_columns"][] = "filename";
$proto25["m_columns"][] = "jobfile_type";
$proto25["m_columns"][] = "jobfile_note";
$proto25["m_columns"][] = "jobfile_status_id";
$proto25["m_columns"][] = "downloader_id";
$proto25["m_columns"][] = "distributor_id";
$proto25["m_columns"][] = "designer_id";
$proto25["m_columns"][] = "qc_id";
$proto25["m_columns"][] = "uploader_id";
$proto25["m_columns"][] = "notifier_id";
$proto25["m_columns"][] = "rejector_id";
$proto25["m_columns"][] = "download_date";
$proto25["m_columns"][] = "distribute_date";
$proto25["m_columns"][] = "start_date";
$proto25["m_columns"][] = "end_date";
$proto25["m_columns"][] = "designer_time";
$proto25["m_columns"][] = "qcstart_date";
$proto25["m_columns"][] = "qcend_date";
$proto25["m_columns"][] = "qc_time";
$proto25["m_columns"][] = "upload_date";
$proto25["m_columns"][] = "notify_date";
$proto25["m_columns"][] = "reject_date";
$proto25["m_columns"][] = "reject_reason";
$proto25["m_columns"][] = "designer2_id";
$proto25["m_columns"][] = "start2_date";
$proto25["m_columns"][] = "end2_date";
$proto25["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "jobfile";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "Weekly PDF Avrage";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_LEFTJOIN";
			$proto29=array();
$proto29["m_strName"] = "user";
$proto29["m_srcTableName"] = "Weekly PDF Avrage";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "user_id";
$proto29["m_columns"][] = "user_status";
$proto29["m_columns"][] = "username";
$proto29["m_columns"][] = "password";
$proto29["m_columns"][] = "department_id";
$proto29["m_columns"][] = "subdiv_id";
$proto29["m_columns"][] = "group_id";
$proto29["m_columns"][] = "designation";
$proto29["m_columns"][] = "employee_id";
$proto29["m_columns"][] = "fname";
$proto29["m_columns"][] = "lname";
$proto29["m_columns"][] = "nickname";
$proto29["m_columns"][] = "email";
$proto29["m_columns"][] = "phone";
$proto29["m_columns"][] = "mobile";
$proto29["m_columns"][] = "log";
$proto29["m_columns"][] = "images_assigned";
$proto29["m_columns"][] = "user_picture";
$proto29["m_columns"][] = "team";
$proto29["m_columns"][] = "ad_group_id";
$proto29["m_columns"][] = "lastaccess";
$proto29["m_columns"][] = "joining_date";
$proto29["m_columns"][] = "emergency_contact1";
$proto29["m_columns"][] = "emergency_contact2";
$proto29["m_columns"][] = "permanent_address";
$proto29["m_columns"][] = "current_address";
$proto29["m_columns"][] = "date_of_birth";
$proto29["m_columns"][] = "male_female";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "Weekly PDF Avrage";
$proto30=array();
$proto30["m_sql"] = "jobfile.designer2_id = `user`.user_id";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Weekly PDF Avrage"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= `user`.user_id";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_LEFTJOIN";
			$proto33=array();
$proto33["m_strName"] = "pdf";
$proto33["m_srcTableName"] = "Weekly PDF Avrage";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "pdf_id";
$proto33["m_columns"][] = "pdf_name";
$proto33["m_columns"][] = "client_id";
$proto33["m_columns"][] = "pdf_location";
$proto33["m_columns"][] = "last_update";
$proto33["m_columns"][] = "pdf_estimated_average";
$proto33["m_columns"][] = "pdf_estimated_average1";
$proto33["m_columns"][] = "pdf_estimated_average2";
$proto33["m_columns"][] = "pdf_actual_average";
$proto33["m_columns"][] = "price";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "Weekly PDF Avrage";
$proto34=array();
$proto34["m_sql"] = "jobfile.project_id = pdf.pdf_id";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Weekly PDF Avrage"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= pdf.pdf_id";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Weekly PDF Avrage"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$proto39=array();
$proto39["m_functiontype"] = "SQLF_CUSTOM";
$proto39["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.end2_date"
));

$proto39["m_arguments"][]=$obj;
$proto39["m_strFunctionName"] = "WEEK";
$obj = new SQLFunctionCall($proto39);

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Weekly PDF Avrage"
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 1;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto0["m_orderby"][]=$obj;					
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Weekly PDF Avrage"
));

$proto43["m_column"]=$obj;
$proto43["m_bAsc"] = 0;
$proto43["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto43);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Weekly PDF Avrage";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Weekly_PDF_Avrage = createSqlQuery_Weekly_PDF_Avrage();


	
						
	
$tdataWeekly_PDF_Avrage[".sqlquery"] = $queryData_Weekly_PDF_Avrage;

$tableEvents["Weekly PDF Avrage"] = new eventsBase;
$tdataWeekly_PDF_Avrage[".hasEvents"] = false;

?>