<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDesigner_files_report = array();	
	$tdataDesigner_files_report[".truncateText"] = true;
	$tdataDesigner_files_report[".NumberOfChars"] = 80; 
	$tdataDesigner_files_report[".ShortName"] = "Designer_files_report";
	$tdataDesigner_files_report[".OwnerID"] = "";
	$tdataDesigner_files_report[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsDesigner_files_report = array();
$fieldToolTipsDesigner_files_report = array();
$pageTitlesDesigner_files_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDesigner_files_report["English"] = array();
	$fieldToolTipsDesigner_files_report["English"] = array();
	$pageTitlesDesigner_files_report["English"] = array();
	$fieldLabelsDesigner_files_report["English"]["job_id"] = "Job Id";
	$fieldToolTipsDesigner_files_report["English"]["job_id"] = "";
	$fieldLabelsDesigner_files_report["English"]["filename"] = "Filename";
	$fieldToolTipsDesigner_files_report["English"]["filename"] = "";
	$fieldLabelsDesigner_files_report["English"]["designer2_time"] = "Designer Time";
	$fieldToolTipsDesigner_files_report["English"]["designer2_time"] = "";
	$fieldLabelsDesigner_files_report["English"]["pdf_name"] = "Pdf Name";
	$fieldToolTipsDesigner_files_report["English"]["pdf_name"] = "";
	$fieldLabelsDesigner_files_report["English"]["username"] = "Designer Name";
	$fieldToolTipsDesigner_files_report["English"]["username"] = "";
	$fieldLabelsDesigner_files_report["English"]["pdf_id"] = "Pdf Id";
	$fieldToolTipsDesigner_files_report["English"]["pdf_id"] = "";
	$fieldLabelsDesigner_files_report["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsDesigner_files_report["English"]["efficiency"] = "";
	$fieldLabelsDesigner_files_report["English"]["done_date"] = "Done Date";
	$fieldToolTipsDesigner_files_report["English"]["done_date"] = "";
	if (count($fieldToolTipsDesigner_files_report["English"]))
		$tdataDesigner_files_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDesigner_files_report[""] = array();
	$fieldToolTipsDesigner_files_report[""] = array();
	$pageTitlesDesigner_files_report[""] = array();
	if (count($fieldToolTipsDesigner_files_report[""]))
		$tdataDesigner_files_report[".isUseToolTips"] = true;
}
	
	
	$tdataDesigner_files_report[".NCSearch"] = true;



$tdataDesigner_files_report[".shortTableName"] = "Designer_files_report";
$tdataDesigner_files_report[".nSecOptions"] = 0;
$tdataDesigner_files_report[".recsPerRowList"] = 1;
$tdataDesigner_files_report[".recsPerRowPrint"] = 1;
$tdataDesigner_files_report[".mainTableOwnerID"] = "";
$tdataDesigner_files_report[".moveNext"] = 1;
$tdataDesigner_files_report[".entityType"] = 2;

$tdataDesigner_files_report[".strOriginalTableName"] = "jobfile";




$tdataDesigner_files_report[".showAddInPopup"] = false;

$tdataDesigner_files_report[".showEditInPopup"] = false;

$tdataDesigner_files_report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDesigner_files_report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDesigner_files_report[".fieldsForRegister"] = array();

$tdataDesigner_files_report[".listAjax"] = false;

	$tdataDesigner_files_report[".audit"] = false;

	$tdataDesigner_files_report[".locking"] = false;


$tdataDesigner_files_report[".add"] = true;
$tdataDesigner_files_report[".afterAddAction"] = 0;
$tdataDesigner_files_report[".closePopupAfterAdd"] = 1;
$tdataDesigner_files_report[".afterAddActionDetTable"] = "";

$tdataDesigner_files_report[".list"] = true;

$tdataDesigner_files_report[".inlineAdd"] = true;


$tdataDesigner_files_report[".exportTo"] = true;

$tdataDesigner_files_report[".printFriendly"] = true;


$tdataDesigner_files_report[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDesigner_files_report[".searchSaving"] = false;
//

$tdataDesigner_files_report[".showSearchPanel"] = true;
		$tdataDesigner_files_report[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDesigner_files_report[".isUseAjaxSuggest"] = false;
else 
	$tdataDesigner_files_report[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDesigner_files_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDesigner_files_report[".isUseTimeForSearch"] = false;





$tdataDesigner_files_report[".allSearchFields"] = array();
$tdataDesigner_files_report[".filterFields"] = array();
$tdataDesigner_files_report[".requiredSearchFields"] = array();

$tdataDesigner_files_report[".allSearchFields"][] = "done_date";
	$tdataDesigner_files_report[".allSearchFields"][] = "job_id";
	$tdataDesigner_files_report[".allSearchFields"][] = "pdf_id";
	$tdataDesigner_files_report[".allSearchFields"][] = "filename";
	$tdataDesigner_files_report[".allSearchFields"][] = "username";
	$tdataDesigner_files_report[".allSearchFields"][] = "designer2_time";
	$tdataDesigner_files_report[".allSearchFields"][] = "efficiency";
	

$tdataDesigner_files_report[".googleLikeFields"] = array();
$tdataDesigner_files_report[".googleLikeFields"][] = "done_date";
$tdataDesigner_files_report[".googleLikeFields"][] = "job_id";
$tdataDesigner_files_report[".googleLikeFields"][] = "pdf_id";
$tdataDesigner_files_report[".googleLikeFields"][] = "filename";
$tdataDesigner_files_report[".googleLikeFields"][] = "username";
$tdataDesigner_files_report[".googleLikeFields"][] = "designer2_time";
$tdataDesigner_files_report[".googleLikeFields"][] = "efficiency";


$tdataDesigner_files_report[".advSearchFields"] = array();
$tdataDesigner_files_report[".advSearchFields"][] = "done_date";
$tdataDesigner_files_report[".advSearchFields"][] = "job_id";
$tdataDesigner_files_report[".advSearchFields"][] = "pdf_id";
$tdataDesigner_files_report[".advSearchFields"][] = "filename";
$tdataDesigner_files_report[".advSearchFields"][] = "username";
$tdataDesigner_files_report[".advSearchFields"][] = "designer2_time";
$tdataDesigner_files_report[".advSearchFields"][] = "efficiency";

$tdataDesigner_files_report[".tableType"] = "report";

$tdataDesigner_files_report[".printerPageOrientation"] = 0;
$tdataDesigner_files_report[".nPrinterPageScale"] = 100;

$tdataDesigner_files_report[".nPrinterSplitRecords"] = 40;

$tdataDesigner_files_report[".nPrinterPDFSplitRecords"] = 40;



$tdataDesigner_files_report[".geocodingEnabled"] = false;

//report settings

$tdataDesigner_files_report[".reportPrintPartitionType"] = 0;	
$tdataDesigner_files_report[".reportPrintGroupsPerPage"] = 3;	
	$tdataDesigner_files_report[".lowGroup"] = 1;



$tdataDesigner_files_report[".reportGroupFields"] = true;
$tdataDesigner_files_report[".pageSize"] = 1;
$tdataDesigner_files_report[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "done_date";
	$rgroupField['groupInterval'] = 5;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataDesigner_files_report[".reportGroupFieldsData"] = $reportGroupFields;


$tdataDesigner_files_report[".isExistTotalFields"] = true;




$tdataDesigner_files_report[".repShowDet"] = true;

$tdataDesigner_files_report[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY DATE(jobfile.end2_date) DESC, `user`.username";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDesigner_files_report[".strOrderBy"] = $tstrOrderBy;

$tdataDesigner_files_report[".orderindexes"] = array();
$tdataDesigner_files_report[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "DATE(jobfile.end2_date)");
$tdataDesigner_files_report[".orderindexes"][] = array(6, (1 ? "ASC" : "DESC"), "`user`.username");

$tdataDesigner_files_report[".sqlHead"] = "SELECT DATE(jobfile.end2_date) AS done_date,  jobfile.job_id,  pdf.pdf_id,  pdf.pdf_name,  jobfile.filename,  `user`.username,  jobfile.designer2_time,  (TIME_TO_SEC(SEC_TO_TIME(TIME_TO_SEC(pdf.pdf_estimated_average)))/(TIME_TO_SEC(jobfile.designer2_time)))*100 AS efficiency";
$tdataDesigner_files_report[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$tdataDesigner_files_report[".sqlWhereExpr"] = "(`user`.username IS NOT NULL) AND (jobfile.designer2_time IS NOT NULL) AND (jobfile.start2_date !='0000-00-00 00:00:00')";
$tdataDesigner_files_report[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDesigner_files_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDesigner_files_report[".arrGroupsPerPage"] = $arrGPP;

$tdataDesigner_files_report[".highlightSearchResults"] = true;

$tableKeysDesigner_files_report = array();
$tdataDesigner_files_report[".Keys"] = $tableKeysDesigner_files_report;

$tdataDesigner_files_report[".listFields"] = array();
$tdataDesigner_files_report[".listFields"][] = "done_date";
$tdataDesigner_files_report[".listFields"][] = "job_id";
$tdataDesigner_files_report[".listFields"][] = "pdf_id";
$tdataDesigner_files_report[".listFields"][] = "pdf_name";
$tdataDesigner_files_report[".listFields"][] = "filename";
$tdataDesigner_files_report[".listFields"][] = "username";
$tdataDesigner_files_report[".listFields"][] = "designer2_time";
$tdataDesigner_files_report[".listFields"][] = "efficiency";

$tdataDesigner_files_report[".hideMobileList"] = array();


$tdataDesigner_files_report[".viewFields"] = array();
$tdataDesigner_files_report[".viewFields"][] = "done_date";
$tdataDesigner_files_report[".viewFields"][] = "job_id";
$tdataDesigner_files_report[".viewFields"][] = "pdf_id";
$tdataDesigner_files_report[".viewFields"][] = "pdf_name";
$tdataDesigner_files_report[".viewFields"][] = "filename";
$tdataDesigner_files_report[".viewFields"][] = "username";
$tdataDesigner_files_report[".viewFields"][] = "designer2_time";
$tdataDesigner_files_report[".viewFields"][] = "efficiency";

$tdataDesigner_files_report[".addFields"] = array();
$tdataDesigner_files_report[".addFields"][] = "job_id";
$tdataDesigner_files_report[".addFields"][] = "filename";
$tdataDesigner_files_report[".addFields"][] = "designer2_time";

$tdataDesigner_files_report[".masterListFields"] = array();
$tdataDesigner_files_report[".masterListFields"][] = "done_date";
$tdataDesigner_files_report[".masterListFields"][] = "job_id";
$tdataDesigner_files_report[".masterListFields"][] = "pdf_id";
$tdataDesigner_files_report[".masterListFields"][] = "pdf_name";
$tdataDesigner_files_report[".masterListFields"][] = "filename";
$tdataDesigner_files_report[".masterListFields"][] = "username";
$tdataDesigner_files_report[".masterListFields"][] = "designer2_time";
$tdataDesigner_files_report[".masterListFields"][] = "efficiency";

$tdataDesigner_files_report[".inlineAddFields"] = array();
$tdataDesigner_files_report[".inlineAddFields"][] = "job_id";
$tdataDesigner_files_report[".inlineAddFields"][] = "filename";
$tdataDesigner_files_report[".inlineAddFields"][] = "designer2_time";

$tdataDesigner_files_report[".editFields"] = array();
$tdataDesigner_files_report[".editFields"][] = "job_id";
$tdataDesigner_files_report[".editFields"][] = "filename";
$tdataDesigner_files_report[".editFields"][] = "designer2_time";

$tdataDesigner_files_report[".inlineEditFields"] = array();
$tdataDesigner_files_report[".inlineEditFields"][] = "job_id";
$tdataDesigner_files_report[".inlineEditFields"][] = "filename";
$tdataDesigner_files_report[".inlineEditFields"][] = "designer2_time";

$tdataDesigner_files_report[".exportFields"] = array();
$tdataDesigner_files_report[".exportFields"][] = "done_date";
$tdataDesigner_files_report[".exportFields"][] = "job_id";
$tdataDesigner_files_report[".exportFields"][] = "pdf_id";
$tdataDesigner_files_report[".exportFields"][] = "pdf_name";
$tdataDesigner_files_report[".exportFields"][] = "filename";
$tdataDesigner_files_report[".exportFields"][] = "username";
$tdataDesigner_files_report[".exportFields"][] = "designer2_time";
$tdataDesigner_files_report[".exportFields"][] = "efficiency";

$tdataDesigner_files_report[".importFields"] = array();
$tdataDesigner_files_report[".importFields"][] = "done_date";
$tdataDesigner_files_report[".importFields"][] = "job_id";
$tdataDesigner_files_report[".importFields"][] = "pdf_id";
$tdataDesigner_files_report[".importFields"][] = "pdf_name";
$tdataDesigner_files_report[".importFields"][] = "filename";
$tdataDesigner_files_report[".importFields"][] = "username";
$tdataDesigner_files_report[".importFields"][] = "designer2_time";
$tdataDesigner_files_report[".importFields"][] = "efficiency";

$tdataDesigner_files_report[".printFields"] = array();
$tdataDesigner_files_report[".printFields"][] = "done_date";
$tdataDesigner_files_report[".printFields"][] = "job_id";
$tdataDesigner_files_report[".printFields"][] = "pdf_id";
$tdataDesigner_files_report[".printFields"][] = "pdf_name";
$tdataDesigner_files_report[".printFields"][] = "filename";
$tdataDesigner_files_report[".printFields"][] = "username";
$tdataDesigner_files_report[".printFields"][] = "designer2_time";
$tdataDesigner_files_report[".printFields"][] = "efficiency";

//	done_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "done_date";
	$fdata["GoodName"] = "done_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designer_files_report","done_date"); 
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
	$fdata["FullName"] = "DATE(jobfile.end2_date)";
	
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_files_report["done_date"] = $fdata;
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Designer_files_report","job_id"); 
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
	
		$fdata["strField"] = "job_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.job_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
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
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
	// the end of search options settings	

	

	
	$tdataDesigner_files_report["job_id"] = $fdata;
//	pdf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pdf_id";
	$fdata["GoodName"] = "pdf_id";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Designer_files_report","pdf_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf.pdf_id";
	
		
		
				
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
		$edata["LCType"] = 1;
		
		
			
	$edata["LinkField"] = "pdf_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "pdf_name";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdataDesigner_files_report["pdf_id"] = $fdata;
//	pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pdf_name";
	$fdata["GoodName"] = "pdf_name";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Designer_files_report","pdf_name"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "pdf";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;
		
		
			
	$edata["LinkField"] = "pdf_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "pdf_name";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		
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
	
	
	
	

	

	
	$tdataDesigner_files_report["pdf_name"] = $fdata;
//	filename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "filename";
	$fdata["GoodName"] = "filename";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Designer_files_report","filename"); 
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
	
		$fdata["strField"] = "filename"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.filename";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=256";
	
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
		
	// the end of search options settings	

	

	
	$tdataDesigner_files_report["filename"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Designer_files_report","username"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "username"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.username";
	
		
		
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
		
	// the end of search options settings	

	

	
	$tdataDesigner_files_report["username"] = $fdata;
//	designer2_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "designer2_time";
	$fdata["GoodName"] = "designer2_time";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Designer_files_report","designer2_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
			$fdata["isTotalAvg"] = true;	
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
	
		$fdata["strField"] = "designer2_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.designer2_time";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
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
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdataDesigner_files_report["designer2_time"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designer_files_report","efficiency"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
			$fdata["isTotalAvg"] = true;	
			// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "efficiency"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(TIME_TO_SEC(SEC_TO_TIME(TIME_TO_SEC(pdf.pdf_estimated_average)))/(TIME_TO_SEC(jobfile.designer2_time)))*100";
	
		
		
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
		
	// the end of search options settings	

	

	
	$tdataDesigner_files_report["efficiency"] = $fdata;

	
$tables_data["Designer files report"]=&$tdataDesigner_files_report;
$field_labels["Designer_files_report"] = &$fieldLabelsDesigner_files_report;
$fieldToolTips["Designer files report"] = &$fieldToolTipsDesigner_files_report;
$page_titles["Designer_files_report"] = &$pageTitlesDesigner_files_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Designer files report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Designer files report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Designer_files_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DATE(jobfile.end2_date) AS done_date,  jobfile.job_id,  pdf.pdf_id,  pdf.pdf_name,  jobfile.filename,  `user`.username,  jobfile.designer2_time,  (TIME_TO_SEC(SEC_TO_TIME(TIME_TO_SEC(pdf.pdf_estimated_average)))/(TIME_TO_SEC(jobfile.designer2_time)))*100 AS efficiency";
$proto0["m_strFrom"] = "FROM jobfile  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$proto0["m_strWhere"] = "(`user`.username IS NOT NULL) AND (jobfile.designer2_time IS NOT NULL) AND (jobfile.start2_date !='0000-00-00 00:00:00')";
$proto0["m_strOrderBy"] = "ORDER BY DATE(jobfile.end2_date) DESC, `user`.username";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(`user`.username IS NOT NULL) AND (jobfile.designer2_time IS NOT NULL) AND (jobfile.start2_date !='0000-00-00 00:00:00')";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(`user`.username IS NOT NULL) AND (jobfile.designer2_time IS NOT NULL) AND (jobfile.start2_date !='0000-00-00 00:00:00')"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "`user`.username IS NOT NULL";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "user",
	"m_srcTableName" => "Designer files report"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "IS NOT NULL";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "jobfile.designer2_time IS NOT NULL";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_time",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designer files report"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "IS NOT NULL";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = true;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
						$proto7=array();
$proto7["m_sql"] = "jobfile.start2_date !='0000-00-00 00:00:00'";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "start2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designer files report"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "!='0000-00-00 00:00:00'";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = true;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto9=array();
$proto9["m_sql"] = "";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_CUSTOM";
$proto12["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.end2_date"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto12);

$proto11["m_sql"] = "DATE(jobfile.end2_date)";
$proto11["m_srcTableName"] = "Designer files report";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "done_date";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designer files report"
));

$proto14["m_sql"] = "jobfile.job_id";
$proto14["m_srcTableName"] = "Designer files report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Designer files report"
));

$proto16["m_sql"] = "pdf.pdf_id";
$proto16["m_srcTableName"] = "Designer files report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Designer files report"
));

$proto18["m_sql"] = "pdf.pdf_name";
$proto18["m_srcTableName"] = "Designer files report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designer files report"
));

$proto20["m_sql"] = "jobfile.filename";
$proto20["m_srcTableName"] = "Designer files report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "user",
	"m_srcTableName" => "Designer files report"
));

$proto22["m_sql"] = "`user`.username";
$proto22["m_srcTableName"] = "Designer files report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_time",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designer files report"
));

$proto24["m_sql"] = "jobfile.designer2_time";
$proto24["m_srcTableName"] = "Designer files report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(TIME_TO_SEC(SEC_TO_TIME(TIME_TO_SEC(pdf.pdf_estimated_average)))/(TIME_TO_SEC(jobfile.designer2_time)))*100"
));

$proto26["m_sql"] = "(TIME_TO_SEC(SEC_TO_TIME(TIME_TO_SEC(pdf.pdf_estimated_average)))/(TIME_TO_SEC(jobfile.designer2_time)))*100";
$proto26["m_srcTableName"] = "Designer files report";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "jobfile";
$proto29["m_srcTableName"] = "Designer files report";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "jobfile_id";
$proto29["m_columns"][] = "file_url";
$proto29["m_columns"][] = "client_id";
$proto29["m_columns"][] = "work_id";
$proto29["m_columns"][] = "job_id";
$proto29["m_columns"][] = "project_id";
$proto29["m_columns"][] = "folder_name";
$proto29["m_columns"][] = "filename";
$proto29["m_columns"][] = "jobfile_type";
$proto29["m_columns"][] = "jobfile_note";
$proto29["m_columns"][] = "jobfile_status_id";
$proto29["m_columns"][] = "downloader_id";
$proto29["m_columns"][] = "distributor_id";
$proto29["m_columns"][] = "designer_id";
$proto29["m_columns"][] = "qc_id";
$proto29["m_columns"][] = "uploader_id";
$proto29["m_columns"][] = "notifier_id";
$proto29["m_columns"][] = "rejector_id";
$proto29["m_columns"][] = "download_date";
$proto29["m_columns"][] = "distribute_date";
$proto29["m_columns"][] = "start_date";
$proto29["m_columns"][] = "end_date";
$proto29["m_columns"][] = "designer_time";
$proto29["m_columns"][] = "qcstart_date";
$proto29["m_columns"][] = "qcend_date";
$proto29["m_columns"][] = "qc_time";
$proto29["m_columns"][] = "upload_date";
$proto29["m_columns"][] = "notify_date";
$proto29["m_columns"][] = "reject_date";
$proto29["m_columns"][] = "reject_reason";
$proto29["m_columns"][] = "designer2_id";
$proto29["m_columns"][] = "start2_date";
$proto29["m_columns"][] = "end2_date";
$proto29["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "jobfile";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "Designer files report";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
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
$proto33["m_srcTableName"] = "Designer files report";
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
$proto32["m_srcTableName"] = "Designer files report";
$proto34=array();
$proto34["m_sql"] = "jobfile.project_id = pdf.pdf_id";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designer files report"
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
												$proto36=array();
$proto36["m_link"] = "SQLL_LEFTJOIN";
			$proto37=array();
$proto37["m_strName"] = "user";
$proto37["m_srcTableName"] = "Designer files report";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "user_id";
$proto37["m_columns"][] = "user_status";
$proto37["m_columns"][] = "username";
$proto37["m_columns"][] = "password";
$proto37["m_columns"][] = "department_id";
$proto37["m_columns"][] = "subdiv_id";
$proto37["m_columns"][] = "group_id";
$proto37["m_columns"][] = "designation";
$proto37["m_columns"][] = "employee_id";
$proto37["m_columns"][] = "fname";
$proto37["m_columns"][] = "lname";
$proto37["m_columns"][] = "nickname";
$proto37["m_columns"][] = "email";
$proto37["m_columns"][] = "phone";
$proto37["m_columns"][] = "mobile";
$proto37["m_columns"][] = "log";
$proto37["m_columns"][] = "images_assigned";
$proto37["m_columns"][] = "user_picture";
$proto37["m_columns"][] = "team";
$proto37["m_columns"][] = "ad_group_id";
$proto37["m_columns"][] = "lastaccess";
$proto37["m_columns"][] = "joining_date";
$proto37["m_columns"][] = "emergency_contact1";
$proto37["m_columns"][] = "emergency_contact2";
$proto37["m_columns"][] = "permanent_address";
$proto37["m_columns"][] = "current_address";
$proto37["m_columns"][] = "date_of_birth";
$proto37["m_columns"][] = "male_female";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "Designer files report";
$proto38=array();
$proto38["m_sql"] = "jobfile.designer2_id = `user`.user_id";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designer files report"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= `user`.user_id";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto40=array();
						$proto41=array();
$proto41["m_functiontype"] = "SQLF_CUSTOM";
$proto41["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.end2_date"
));

$proto41["m_arguments"][]=$obj;
$proto41["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto41);

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 0;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "user",
	"m_srcTableName" => "Designer files report"
));

$proto43["m_column"]=$obj;
$proto43["m_bAsc"] = 1;
$proto43["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto43);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Designer files report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Designer_files_report = createSqlQuery_Designer_files_report();


	
								
	
$tdataDesigner_files_report[".sqlquery"] = $queryData_Designer_files_report;

$tableEvents["Designer files report"] = new eventsBase;
$tdataDesigner_files_report[".hasEvents"] = false;

?>