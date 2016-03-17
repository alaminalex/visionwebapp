<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMonthly_Report_Full = array();	
	$tdataMonthly_Report_Full[".truncateText"] = true;
	$tdataMonthly_Report_Full[".NumberOfChars"] = 256; 
	$tdataMonthly_Report_Full[".ShortName"] = "Monthly_Report_Full";
	$tdataMonthly_Report_Full[".OwnerID"] = "";
	$tdataMonthly_Report_Full[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsMonthly_Report_Full = array();
$fieldToolTipsMonthly_Report_Full = array();
$pageTitlesMonthly_Report_Full = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMonthly_Report_Full["English"] = array();
	$fieldToolTipsMonthly_Report_Full["English"] = array();
	$pageTitlesMonthly_Report_Full["English"] = array();
	$fieldLabelsMonthly_Report_Full["English"]["job_id"] = "Job Id";
	$fieldToolTipsMonthly_Report_Full["English"]["job_id"] = "";
	$fieldLabelsMonthly_Report_Full["English"]["project_id"] = "Project Id";
	$fieldToolTipsMonthly_Report_Full["English"]["project_id"] = "";
	$fieldLabelsMonthly_Report_Full["English"]["filename"] = "Filename";
	$fieldToolTipsMonthly_Report_Full["English"]["filename"] = "";
	$fieldLabelsMonthly_Report_Full["English"]["designer2_id"] = "Designer2 Id";
	$fieldToolTipsMonthly_Report_Full["English"]["designer2_id"] = "";
	$fieldLabelsMonthly_Report_Full["English"]["end2_date"] = "End2 Date";
	$fieldToolTipsMonthly_Report_Full["English"]["end2_date"] = "";
	$fieldLabelsMonthly_Report_Full["English"]["team"] = "Team";
	$fieldToolTipsMonthly_Report_Full["English"]["team"] = "";
	$fieldLabelsMonthly_Report_Full["English"]["pdf_estimated_average"] = "Pdf Estimated Average";
	$fieldToolTipsMonthly_Report_Full["English"]["pdf_estimated_average"] = "";
	$fieldLabelsMonthly_Report_Full["English"]["taken_time"] = "Taken Time";
	$fieldToolTipsMonthly_Report_Full["English"]["taken_time"] = "";
	$fieldLabelsMonthly_Report_Full["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsMonthly_Report_Full["English"]["efficiency"] = "";
	if (count($fieldToolTipsMonthly_Report_Full["English"]))
		$tdataMonthly_Report_Full[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMonthly_Report_Full[""] = array();
	$fieldToolTipsMonthly_Report_Full[""] = array();
	$pageTitlesMonthly_Report_Full[""] = array();
	if (count($fieldToolTipsMonthly_Report_Full[""]))
		$tdataMonthly_Report_Full[".isUseToolTips"] = true;
}
	
	
	$tdataMonthly_Report_Full[".NCSearch"] = true;



$tdataMonthly_Report_Full[".shortTableName"] = "Monthly_Report_Full";
$tdataMonthly_Report_Full[".nSecOptions"] = 0;
$tdataMonthly_Report_Full[".recsPerRowList"] = 1;
$tdataMonthly_Report_Full[".recsPerRowPrint"] = 1;
$tdataMonthly_Report_Full[".mainTableOwnerID"] = "";
$tdataMonthly_Report_Full[".moveNext"] = 1;
$tdataMonthly_Report_Full[".entityType"] = 2;

$tdataMonthly_Report_Full[".strOriginalTableName"] = "jobfile";




$tdataMonthly_Report_Full[".showAddInPopup"] = false;

$tdataMonthly_Report_Full[".showEditInPopup"] = false;

$tdataMonthly_Report_Full[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMonthly_Report_Full[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMonthly_Report_Full[".fieldsForRegister"] = array();

$tdataMonthly_Report_Full[".listAjax"] = false;

	$tdataMonthly_Report_Full[".audit"] = false;

	$tdataMonthly_Report_Full[".locking"] = false;


$tdataMonthly_Report_Full[".add"] = true;
$tdataMonthly_Report_Full[".afterAddAction"] = 0;
$tdataMonthly_Report_Full[".closePopupAfterAdd"] = 1;
$tdataMonthly_Report_Full[".afterAddActionDetTable"] = "";

$tdataMonthly_Report_Full[".list"] = true;

$tdataMonthly_Report_Full[".inlineAdd"] = true;


$tdataMonthly_Report_Full[".exportTo"] = true;

$tdataMonthly_Report_Full[".printFriendly"] = true;


$tdataMonthly_Report_Full[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataMonthly_Report_Full[".searchSaving"] = false;
//

$tdataMonthly_Report_Full[".showSearchPanel"] = true;
		$tdataMonthly_Report_Full[".flexibleSearch"] = true;		

if (isMobile())
	$tdataMonthly_Report_Full[".isUseAjaxSuggest"] = false;
else 
	$tdataMonthly_Report_Full[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataMonthly_Report_Full[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMonthly_Report_Full[".isUseTimeForSearch"] = false;





$tdataMonthly_Report_Full[".allSearchFields"] = array();
$tdataMonthly_Report_Full[".filterFields"] = array();
$tdataMonthly_Report_Full[".requiredSearchFields"] = array();

$tdataMonthly_Report_Full[".allSearchFields"][] = "job_id";
	$tdataMonthly_Report_Full[".allSearchFields"][] = "filename";
	$tdataMonthly_Report_Full[".allSearchFields"][] = "end2_date";
	$tdataMonthly_Report_Full[".allSearchFields"][] = "designer2_id";
	$tdataMonthly_Report_Full[".allSearchFields"][] = "project_id";
	$tdataMonthly_Report_Full[".allSearchFields"][] = "team";
	$tdataMonthly_Report_Full[".allSearchFields"][] = "pdf_estimated_average";
	$tdataMonthly_Report_Full[".allSearchFields"][] = "taken_time";
	$tdataMonthly_Report_Full[".allSearchFields"][] = "efficiency";
	

$tdataMonthly_Report_Full[".googleLikeFields"] = array();
$tdataMonthly_Report_Full[".googleLikeFields"][] = "job_id";
$tdataMonthly_Report_Full[".googleLikeFields"][] = "filename";
$tdataMonthly_Report_Full[".googleLikeFields"][] = "end2_date";
$tdataMonthly_Report_Full[".googleLikeFields"][] = "designer2_id";
$tdataMonthly_Report_Full[".googleLikeFields"][] = "project_id";
$tdataMonthly_Report_Full[".googleLikeFields"][] = "team";
$tdataMonthly_Report_Full[".googleLikeFields"][] = "pdf_estimated_average";
$tdataMonthly_Report_Full[".googleLikeFields"][] = "taken_time";
$tdataMonthly_Report_Full[".googleLikeFields"][] = "efficiency";


$tdataMonthly_Report_Full[".advSearchFields"] = array();
$tdataMonthly_Report_Full[".advSearchFields"][] = "job_id";
$tdataMonthly_Report_Full[".advSearchFields"][] = "filename";
$tdataMonthly_Report_Full[".advSearchFields"][] = "end2_date";
$tdataMonthly_Report_Full[".advSearchFields"][] = "designer2_id";
$tdataMonthly_Report_Full[".advSearchFields"][] = "project_id";
$tdataMonthly_Report_Full[".advSearchFields"][] = "team";
$tdataMonthly_Report_Full[".advSearchFields"][] = "pdf_estimated_average";
$tdataMonthly_Report_Full[".advSearchFields"][] = "taken_time";
$tdataMonthly_Report_Full[".advSearchFields"][] = "efficiency";

$tdataMonthly_Report_Full[".tableType"] = "report";

$tdataMonthly_Report_Full[".printerPageOrientation"] = 0;
$tdataMonthly_Report_Full[".nPrinterPageScale"] = 100;

$tdataMonthly_Report_Full[".nPrinterSplitRecords"] = 40;

$tdataMonthly_Report_Full[".nPrinterPDFSplitRecords"] = 40;



$tdataMonthly_Report_Full[".geocodingEnabled"] = false;

//report settings

$tdataMonthly_Report_Full[".reportPrintPartitionType"] = 0;	
$tdataMonthly_Report_Full[".reportPrintGroupsPerPage"] = 3;	
	$tdataMonthly_Report_Full[".lowGroup"] = 4;



$tdataMonthly_Report_Full[".reportGroupFields"] = true;
$tdataMonthly_Report_Full[".pageSize"] = 1;
$tdataMonthly_Report_Full[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "end2_date";
	$rgroupField['groupInterval'] = 3;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "team";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "designer2_id";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 3;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "job_id";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 4;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataMonthly_Report_Full[".reportGroupFieldsData"] = $reportGroupFields;


$tdataMonthly_Report_Full[".isExistTotalFields"] = true;


$tdataMonthly_Report_Full[".reportPageSummary"] = true;


$tdataMonthly_Report_Full[".repShowDet"] = true;

$tdataMonthly_Report_Full[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY jobfile.end2_date DESC, `user`.team, jobfile.designer2_id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMonthly_Report_Full[".strOrderBy"] = $tstrOrderBy;

$tdataMonthly_Report_Full[".orderindexes"] = array();
$tdataMonthly_Report_Full[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "jobfile.end2_date");
$tdataMonthly_Report_Full[".orderindexes"][] = array(6, (1 ? "ASC" : "DESC"), "`user`.team");
$tdataMonthly_Report_Full[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "jobfile.designer2_id");

$tdataMonthly_Report_Full[".sqlHead"] = "SELECT jobfile.job_id,  jobfile.filename,  jobfile.end2_date,  jobfile.designer2_id,  jobfile.project_id,  `user`.team,  pdf.pdf_estimated_average,  jobfile.designer2_time AS taken_time,  (TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<30,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100 AS efficiency";
$tdataMonthly_Report_Full[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$tdataMonthly_Report_Full[".sqlWhereExpr"] = "jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.designer2_time) > '0'";
$tdataMonthly_Report_Full[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMonthly_Report_Full[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMonthly_Report_Full[".arrGroupsPerPage"] = $arrGPP;

$tdataMonthly_Report_Full[".highlightSearchResults"] = true;

$tableKeysMonthly_Report_Full = array();
$tdataMonthly_Report_Full[".Keys"] = $tableKeysMonthly_Report_Full;

$tdataMonthly_Report_Full[".listFields"] = array();
$tdataMonthly_Report_Full[".listFields"][] = "job_id";
$tdataMonthly_Report_Full[".listFields"][] = "filename";
$tdataMonthly_Report_Full[".listFields"][] = "end2_date";
$tdataMonthly_Report_Full[".listFields"][] = "designer2_id";
$tdataMonthly_Report_Full[".listFields"][] = "project_id";
$tdataMonthly_Report_Full[".listFields"][] = "team";
$tdataMonthly_Report_Full[".listFields"][] = "pdf_estimated_average";
$tdataMonthly_Report_Full[".listFields"][] = "taken_time";
$tdataMonthly_Report_Full[".listFields"][] = "efficiency";

$tdataMonthly_Report_Full[".hideMobileList"] = array();


$tdataMonthly_Report_Full[".viewFields"] = array();
$tdataMonthly_Report_Full[".viewFields"][] = "job_id";
$tdataMonthly_Report_Full[".viewFields"][] = "filename";
$tdataMonthly_Report_Full[".viewFields"][] = "end2_date";
$tdataMonthly_Report_Full[".viewFields"][] = "designer2_id";
$tdataMonthly_Report_Full[".viewFields"][] = "project_id";
$tdataMonthly_Report_Full[".viewFields"][] = "team";
$tdataMonthly_Report_Full[".viewFields"][] = "pdf_estimated_average";
$tdataMonthly_Report_Full[".viewFields"][] = "taken_time";
$tdataMonthly_Report_Full[".viewFields"][] = "efficiency";

$tdataMonthly_Report_Full[".addFields"] = array();
$tdataMonthly_Report_Full[".addFields"][] = "job_id";
$tdataMonthly_Report_Full[".addFields"][] = "filename";
$tdataMonthly_Report_Full[".addFields"][] = "end2_date";
$tdataMonthly_Report_Full[".addFields"][] = "designer2_id";
$tdataMonthly_Report_Full[".addFields"][] = "project_id";

$tdataMonthly_Report_Full[".masterListFields"] = array();
$tdataMonthly_Report_Full[".masterListFields"][] = "job_id";
$tdataMonthly_Report_Full[".masterListFields"][] = "filename";
$tdataMonthly_Report_Full[".masterListFields"][] = "end2_date";
$tdataMonthly_Report_Full[".masterListFields"][] = "designer2_id";
$tdataMonthly_Report_Full[".masterListFields"][] = "project_id";
$tdataMonthly_Report_Full[".masterListFields"][] = "team";
$tdataMonthly_Report_Full[".masterListFields"][] = "pdf_estimated_average";
$tdataMonthly_Report_Full[".masterListFields"][] = "taken_time";
$tdataMonthly_Report_Full[".masterListFields"][] = "efficiency";

$tdataMonthly_Report_Full[".inlineAddFields"] = array();
$tdataMonthly_Report_Full[".inlineAddFields"][] = "job_id";
$tdataMonthly_Report_Full[".inlineAddFields"][] = "filename";
$tdataMonthly_Report_Full[".inlineAddFields"][] = "end2_date";
$tdataMonthly_Report_Full[".inlineAddFields"][] = "designer2_id";
$tdataMonthly_Report_Full[".inlineAddFields"][] = "project_id";

$tdataMonthly_Report_Full[".editFields"] = array();
$tdataMonthly_Report_Full[".editFields"][] = "job_id";
$tdataMonthly_Report_Full[".editFields"][] = "filename";
$tdataMonthly_Report_Full[".editFields"][] = "end2_date";
$tdataMonthly_Report_Full[".editFields"][] = "designer2_id";
$tdataMonthly_Report_Full[".editFields"][] = "project_id";

$tdataMonthly_Report_Full[".inlineEditFields"] = array();
$tdataMonthly_Report_Full[".inlineEditFields"][] = "job_id";
$tdataMonthly_Report_Full[".inlineEditFields"][] = "filename";
$tdataMonthly_Report_Full[".inlineEditFields"][] = "end2_date";
$tdataMonthly_Report_Full[".inlineEditFields"][] = "designer2_id";
$tdataMonthly_Report_Full[".inlineEditFields"][] = "project_id";

$tdataMonthly_Report_Full[".exportFields"] = array();
$tdataMonthly_Report_Full[".exportFields"][] = "job_id";
$tdataMonthly_Report_Full[".exportFields"][] = "filename";
$tdataMonthly_Report_Full[".exportFields"][] = "end2_date";
$tdataMonthly_Report_Full[".exportFields"][] = "designer2_id";
$tdataMonthly_Report_Full[".exportFields"][] = "project_id";
$tdataMonthly_Report_Full[".exportFields"][] = "team";
$tdataMonthly_Report_Full[".exportFields"][] = "pdf_estimated_average";
$tdataMonthly_Report_Full[".exportFields"][] = "taken_time";
$tdataMonthly_Report_Full[".exportFields"][] = "efficiency";

$tdataMonthly_Report_Full[".importFields"] = array();
$tdataMonthly_Report_Full[".importFields"][] = "job_id";
$tdataMonthly_Report_Full[".importFields"][] = "filename";
$tdataMonthly_Report_Full[".importFields"][] = "end2_date";
$tdataMonthly_Report_Full[".importFields"][] = "designer2_id";
$tdataMonthly_Report_Full[".importFields"][] = "project_id";
$tdataMonthly_Report_Full[".importFields"][] = "team";
$tdataMonthly_Report_Full[".importFields"][] = "pdf_estimated_average";
$tdataMonthly_Report_Full[".importFields"][] = "taken_time";
$tdataMonthly_Report_Full[".importFields"][] = "efficiency";

$tdataMonthly_Report_Full[".printFields"] = array();
$tdataMonthly_Report_Full[".printFields"][] = "job_id";
$tdataMonthly_Report_Full[".printFields"][] = "filename";
$tdataMonthly_Report_Full[".printFields"][] = "end2_date";
$tdataMonthly_Report_Full[".printFields"][] = "designer2_id";
$tdataMonthly_Report_Full[".printFields"][] = "project_id";
$tdataMonthly_Report_Full[".printFields"][] = "team";
$tdataMonthly_Report_Full[".printFields"][] = "pdf_estimated_average";
$tdataMonthly_Report_Full[".printFields"][] = "taken_time";
$tdataMonthly_Report_Full[".printFields"][] = "efficiency";

//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Full","job_id"); 
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
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataMonthly_Report_Full["job_id"] = $fdata;
//	filename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "filename";
	$fdata["GoodName"] = "filename";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Full","filename"); 
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
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["rprint"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["rprint"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["rprint"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataMonthly_Report_Full["filename"] = $fdata;
//	end2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "end2_date";
	$fdata["GoodName"] = "end2_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Full","end2_date"); 
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

	

	
	$tdataMonthly_Report_Full["end2_date"] = $fdata;
//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Full","designer2_id"); 
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
	
		$fdata["strField"] = "designer2_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.designer2_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataMonthly_Report_Full["designer2_id"] = $fdata;
//	project_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "project_id";
	$fdata["GoodName"] = "project_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Full","project_id"); 
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
	
		$fdata["strField"] = "project_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.project_id";
	
		
		
				
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

	

	
	$tdataMonthly_Report_Full["project_id"] = $fdata;
//	team
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "team";
	$fdata["GoodName"] = "team";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Full","team"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "team"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.team";
	
		
		
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
	$edata["LookupTable"] = "team";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "team_name";
	
		
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

	

	
	$tdataMonthly_Report_Full["team"] = $fdata;
//	pdf_estimated_average
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pdf_estimated_average";
	$fdata["GoodName"] = "pdf_estimated_average";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Full","pdf_estimated_average"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
			$fdata["isTotalAvg"] = true;	
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

	

	
	$tdataMonthly_Report_Full["pdf_estimated_average"] = $fdata;
//	taken_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "taken_time";
	$fdata["GoodName"] = "taken_time";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Full","taken_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
			$fdata["isTotalAvg"] = true;	
			// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdataMonthly_Report_Full["taken_time"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Full","efficiency"); 
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
	$fdata["FullName"] = "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<30,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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

	

	
	$tdataMonthly_Report_Full["efficiency"] = $fdata;

	
$tables_data["Monthly Report Full"]=&$tdataMonthly_Report_Full;
$field_labels["Monthly_Report_Full"] = &$fieldLabelsMonthly_Report_Full;
$fieldToolTips["Monthly Report Full"] = &$fieldToolTipsMonthly_Report_Full;
$page_titles["Monthly_Report_Full"] = &$pageTitlesMonthly_Report_Full;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Monthly Report Full"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Monthly Report Full"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Monthly_Report_Full()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile.job_id,  jobfile.filename,  jobfile.end2_date,  jobfile.designer2_id,  jobfile.project_id,  `user`.team,  pdf.pdf_estimated_average,  jobfile.designer2_time AS taken_time,  (TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<30,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100 AS efficiency";
$proto0["m_strFrom"] = "FROM jobfile  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto0["m_strWhere"] = "jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.designer2_time) > '0'";
$proto0["m_strOrderBy"] = "ORDER BY jobfile.end2_date DESC, `user`.team, jobfile.designer2_id DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.designer2_time) > '0'";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.designer2_time) > '0'"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.designer2_id IS NOT NULL";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Full"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "IS NOT NULL";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "jobfile.end2_date > '0000-00-00 00:00:00'";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Full"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "> '0000-00-00 00:00:00'";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
						$proto7=array();
$proto7["m_sql"] = "jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')";
$proto7["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
						$proto9=array();
$proto9["m_sql"] = "jobfile.filename not like '%retouch%'";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Full"
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "not like '%retouch%'";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

			$proto7["m_contained"][]=$obj;
						$proto11=array();
$proto11["m_sql"] = "jobfile.filename not like '%detail_2%'";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Full"
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "not like '%detail_2%'";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = true;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

			$proto7["m_contained"][]=$obj;
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = true;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

			$proto1["m_contained"][]=$obj;
						$proto13=array();
$proto13["m_sql"] = "TIME_TO_SEC(jobfile.designer2_time) > '0'";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
						$proto14=array();
$proto14["m_functiontype"] = "SQLF_CUSTOM";
$proto14["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.designer2_time"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "TIME_TO_SEC";
$obj = new SQLFunctionCall($proto14);

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "> '0'";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Full"
));

$proto18["m_sql"] = "jobfile.job_id";
$proto18["m_srcTableName"] = "Monthly Report Full";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Full"
));

$proto20["m_sql"] = "jobfile.filename";
$proto20["m_srcTableName"] = "Monthly Report Full";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Full"
));

$proto22["m_sql"] = "jobfile.end2_date";
$proto22["m_srcTableName"] = "Monthly Report Full";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Full"
));

$proto24["m_sql"] = "jobfile.designer2_id";
$proto24["m_srcTableName"] = "Monthly Report Full";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Full"
));

$proto26["m_sql"] = "jobfile.project_id";
$proto26["m_srcTableName"] = "Monthly Report Full";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Monthly Report Full"
));

$proto28["m_sql"] = "`user`.team";
$proto28["m_srcTableName"] = "Monthly Report Full";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Monthly Report Full"
));

$proto30["m_sql"] = "pdf.pdf_estimated_average";
$proto30["m_srcTableName"] = "Monthly Report Full";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_time",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Full"
));

$proto32["m_sql"] = "jobfile.designer2_time";
$proto32["m_srcTableName"] = "Monthly Report Full";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "taken_time";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<30,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100"
));

$proto34["m_sql"] = "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<30,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100";
$proto34["m_srcTableName"] = "Monthly Report Full";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "jobfile";
$proto37["m_srcTableName"] = "Monthly Report Full";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "jobfile_id";
$proto37["m_columns"][] = "file_url";
$proto37["m_columns"][] = "client_id";
$proto37["m_columns"][] = "work_id";
$proto37["m_columns"][] = "job_id";
$proto37["m_columns"][] = "project_id";
$proto37["m_columns"][] = "folder_name";
$proto37["m_columns"][] = "filename";
$proto37["m_columns"][] = "jobfile_type";
$proto37["m_columns"][] = "jobfile_note";
$proto37["m_columns"][] = "jobfile_status_id";
$proto37["m_columns"][] = "downloader_id";
$proto37["m_columns"][] = "distributor_id";
$proto37["m_columns"][] = "designer_id";
$proto37["m_columns"][] = "qc_id";
$proto37["m_columns"][] = "uploader_id";
$proto37["m_columns"][] = "notifier_id";
$proto37["m_columns"][] = "rejector_id";
$proto37["m_columns"][] = "download_date";
$proto37["m_columns"][] = "distribute_date";
$proto37["m_columns"][] = "start_date";
$proto37["m_columns"][] = "end_date";
$proto37["m_columns"][] = "designer_time";
$proto37["m_columns"][] = "qcstart_date";
$proto37["m_columns"][] = "qcend_date";
$proto37["m_columns"][] = "qc_time";
$proto37["m_columns"][] = "upload_date";
$proto37["m_columns"][] = "notify_date";
$proto37["m_columns"][] = "reject_date";
$proto37["m_columns"][] = "reject_reason";
$proto37["m_columns"][] = "designer2_id";
$proto37["m_columns"][] = "start2_date";
$proto37["m_columns"][] = "end2_date";
$proto37["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "jobfile";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "Monthly Report Full";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
												$proto40=array();
$proto40["m_link"] = "SQLL_LEFTJOIN";
			$proto41=array();
$proto41["m_strName"] = "user";
$proto41["m_srcTableName"] = "Monthly Report Full";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "user_id";
$proto41["m_columns"][] = "user_status";
$proto41["m_columns"][] = "username";
$proto41["m_columns"][] = "password";
$proto41["m_columns"][] = "department_id";
$proto41["m_columns"][] = "subdiv_id";
$proto41["m_columns"][] = "group_id";
$proto41["m_columns"][] = "designation";
$proto41["m_columns"][] = "employee_id";
$proto41["m_columns"][] = "fname";
$proto41["m_columns"][] = "lname";
$proto41["m_columns"][] = "nickname";
$proto41["m_columns"][] = "email";
$proto41["m_columns"][] = "phone";
$proto41["m_columns"][] = "mobile";
$proto41["m_columns"][] = "log";
$proto41["m_columns"][] = "images_assigned";
$proto41["m_columns"][] = "user_picture";
$proto41["m_columns"][] = "team";
$proto41["m_columns"][] = "ad_group_id";
$proto41["m_columns"][] = "lastaccess";
$proto41["m_columns"][] = "joining_date";
$proto41["m_columns"][] = "emergency_contact1";
$proto41["m_columns"][] = "emergency_contact2";
$proto41["m_columns"][] = "permanent_address";
$proto41["m_columns"][] = "current_address";
$proto41["m_columns"][] = "date_of_birth";
$proto41["m_columns"][] = "male_female";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "Monthly Report Full";
$proto42=array();
$proto42["m_sql"] = "jobfile.designer2_id = `user`.user_id";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Full"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= `user`.user_id";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
												$proto44=array();
$proto44["m_link"] = "SQLL_LEFTJOIN";
			$proto45=array();
$proto45["m_strName"] = "pdf";
$proto45["m_srcTableName"] = "Monthly Report Full";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "pdf_id";
$proto45["m_columns"][] = "pdf_name";
$proto45["m_columns"][] = "client_id";
$proto45["m_columns"][] = "pdf_location";
$proto45["m_columns"][] = "last_update";
$proto45["m_columns"][] = "pdf_estimated_average";
$proto45["m_columns"][] = "pdf_estimated_average1";
$proto45["m_columns"][] = "pdf_estimated_average2";
$proto45["m_columns"][] = "pdf_actual_average";
$proto45["m_columns"][] = "price";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "Monthly Report Full";
$proto46=array();
$proto46["m_sql"] = "jobfile.project_id = pdf.pdf_id";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Full"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "= pdf.pdf_id";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto48=array();
						$proto49=array();
$proto49["m_functiontype"] = "SQLF_CUSTOM";
$proto49["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.end2_date"
));

$proto49["m_arguments"][]=$obj;
$proto49["m_strFunctionName"] = "MONTH";
$obj = new SQLFunctionCall($proto49);

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
												$proto51=array();
						$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Monthly Report Full"
));

$proto51["m_column"]=$obj;
$obj = new SQLGroupByItem($proto51);

$proto0["m_groupby"][]=$obj;
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Full"
));

$proto53["m_column"]=$obj;
$obj = new SQLGroupByItem($proto53);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto55=array();
						$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Full"
));

$proto55["m_column"]=$obj;
$proto55["m_bAsc"] = 0;
$proto55["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto55);

$proto0["m_orderby"][]=$obj;					
												$proto57=array();
						$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Monthly Report Full"
));

$proto57["m_column"]=$obj;
$proto57["m_bAsc"] = 1;
$proto57["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto57);

$proto0["m_orderby"][]=$obj;					
												$proto59=array();
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Full"
));

$proto59["m_column"]=$obj;
$proto59["m_bAsc"] = 0;
$proto59["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto59);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Monthly Report Full";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Monthly_Report_Full = createSqlQuery_Monthly_Report_Full();


	
									
	
$tdataMonthly_Report_Full[".sqlquery"] = $queryData_Monthly_Report_Full;

$tableEvents["Monthly Report Full"] = new eventsBase;
$tdataMonthly_Report_Full[".hasEvents"] = false;

?>