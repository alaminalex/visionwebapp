<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDaily_Report_Full = array();	
	$tdataDaily_Report_Full[".truncateText"] = true;
	$tdataDaily_Report_Full[".NumberOfChars"] = 256; 
	$tdataDaily_Report_Full[".ShortName"] = "Daily_Report_Full";
	$tdataDaily_Report_Full[".OwnerID"] = "";
	$tdataDaily_Report_Full[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsDaily_Report_Full = array();
$fieldToolTipsDaily_Report_Full = array();
$pageTitlesDaily_Report_Full = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDaily_Report_Full["English"] = array();
	$fieldToolTipsDaily_Report_Full["English"] = array();
	$pageTitlesDaily_Report_Full["English"] = array();
	$fieldLabelsDaily_Report_Full["English"]["job_id"] = "Job Id";
	$fieldToolTipsDaily_Report_Full["English"]["job_id"] = "";
	$fieldLabelsDaily_Report_Full["English"]["project_id"] = "Project Id";
	$fieldToolTipsDaily_Report_Full["English"]["project_id"] = "";
	$fieldLabelsDaily_Report_Full["English"]["filename"] = "Filename";
	$fieldToolTipsDaily_Report_Full["English"]["filename"] = "";
	$fieldLabelsDaily_Report_Full["English"]["designer2_id"] = "Designer2 Id";
	$fieldToolTipsDaily_Report_Full["English"]["designer2_id"] = "";
	$fieldLabelsDaily_Report_Full["English"]["end2_date"] = "End2 Date";
	$fieldToolTipsDaily_Report_Full["English"]["end2_date"] = "";
	$fieldLabelsDaily_Report_Full["English"]["team"] = "Team";
	$fieldToolTipsDaily_Report_Full["English"]["team"] = "";
	$fieldLabelsDaily_Report_Full["English"]["pdf_estimated_average"] = "Pdf Estimated Average";
	$fieldToolTipsDaily_Report_Full["English"]["pdf_estimated_average"] = "";
	$fieldLabelsDaily_Report_Full["English"]["taken_time"] = "Taken Time";
	$fieldToolTipsDaily_Report_Full["English"]["taken_time"] = "";
	$fieldLabelsDaily_Report_Full["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsDaily_Report_Full["English"]["efficiency"] = "";
	$fieldLabelsDaily_Report_Full["English"]["idle_time"] = "Idle Time";
	$fieldToolTipsDaily_Report_Full["English"]["idle_time"] = "";
	$fieldLabelsDaily_Report_Full["English"]["end2_date_shift"] = "End2 Date Shift";
	$fieldToolTipsDaily_Report_Full["English"]["end2_date_shift"] = "";
	if (count($fieldToolTipsDaily_Report_Full["English"]))
		$tdataDaily_Report_Full[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDaily_Report_Full[""] = array();
	$fieldToolTipsDaily_Report_Full[""] = array();
	$pageTitlesDaily_Report_Full[""] = array();
	if (count($fieldToolTipsDaily_Report_Full[""]))
		$tdataDaily_Report_Full[".isUseToolTips"] = true;
}
	
	
	$tdataDaily_Report_Full[".NCSearch"] = true;



$tdataDaily_Report_Full[".shortTableName"] = "Daily_Report_Full";
$tdataDaily_Report_Full[".nSecOptions"] = 0;
$tdataDaily_Report_Full[".recsPerRowList"] = 1;
$tdataDaily_Report_Full[".recsPerRowPrint"] = 1;
$tdataDaily_Report_Full[".mainTableOwnerID"] = "";
$tdataDaily_Report_Full[".moveNext"] = 1;
$tdataDaily_Report_Full[".entityType"] = 2;

$tdataDaily_Report_Full[".strOriginalTableName"] = "jobfile";




$tdataDaily_Report_Full[".showAddInPopup"] = false;

$tdataDaily_Report_Full[".showEditInPopup"] = false;

$tdataDaily_Report_Full[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDaily_Report_Full[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDaily_Report_Full[".fieldsForRegister"] = array();

$tdataDaily_Report_Full[".listAjax"] = false;

	$tdataDaily_Report_Full[".audit"] = false;

	$tdataDaily_Report_Full[".locking"] = false;


$tdataDaily_Report_Full[".add"] = true;
$tdataDaily_Report_Full[".afterAddAction"] = 0;
$tdataDaily_Report_Full[".closePopupAfterAdd"] = 1;
$tdataDaily_Report_Full[".afterAddActionDetTable"] = "";

$tdataDaily_Report_Full[".list"] = true;

$tdataDaily_Report_Full[".inlineAdd"] = true;


$tdataDaily_Report_Full[".exportTo"] = true;

$tdataDaily_Report_Full[".printFriendly"] = true;


$tdataDaily_Report_Full[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDaily_Report_Full[".searchSaving"] = false;
//

$tdataDaily_Report_Full[".showSearchPanel"] = true;
		$tdataDaily_Report_Full[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDaily_Report_Full[".isUseAjaxSuggest"] = false;
else 
	$tdataDaily_Report_Full[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDaily_Report_Full[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDaily_Report_Full[".isUseTimeForSearch"] = false;





$tdataDaily_Report_Full[".allSearchFields"] = array();
$tdataDaily_Report_Full[".filterFields"] = array();
$tdataDaily_Report_Full[".requiredSearchFields"] = array();

$tdataDaily_Report_Full[".allSearchFields"][] = "job_id";
	$tdataDaily_Report_Full[".allSearchFields"][] = "filename";
	$tdataDaily_Report_Full[".allSearchFields"][] = "end2_date";
	$tdataDaily_Report_Full[".allSearchFields"][] = "end2_date_shift";
	$tdataDaily_Report_Full[".allSearchFields"][] = "designer2_id";
	$tdataDaily_Report_Full[".allSearchFields"][] = "project_id";
	$tdataDaily_Report_Full[".allSearchFields"][] = "team";
	$tdataDaily_Report_Full[".allSearchFields"][] = "pdf_estimated_average";
	$tdataDaily_Report_Full[".allSearchFields"][] = "taken_time";
	$tdataDaily_Report_Full[".allSearchFields"][] = "efficiency";
	$tdataDaily_Report_Full[".allSearchFields"][] = "idle_time";
	

$tdataDaily_Report_Full[".googleLikeFields"] = array();
$tdataDaily_Report_Full[".googleLikeFields"][] = "job_id";
$tdataDaily_Report_Full[".googleLikeFields"][] = "filename";
$tdataDaily_Report_Full[".googleLikeFields"][] = "end2_date";
$tdataDaily_Report_Full[".googleLikeFields"][] = "end2_date_shift";
$tdataDaily_Report_Full[".googleLikeFields"][] = "designer2_id";
$tdataDaily_Report_Full[".googleLikeFields"][] = "project_id";
$tdataDaily_Report_Full[".googleLikeFields"][] = "team";
$tdataDaily_Report_Full[".googleLikeFields"][] = "pdf_estimated_average";
$tdataDaily_Report_Full[".googleLikeFields"][] = "taken_time";
$tdataDaily_Report_Full[".googleLikeFields"][] = "efficiency";
$tdataDaily_Report_Full[".googleLikeFields"][] = "idle_time";


$tdataDaily_Report_Full[".advSearchFields"] = array();
$tdataDaily_Report_Full[".advSearchFields"][] = "job_id";
$tdataDaily_Report_Full[".advSearchFields"][] = "filename";
$tdataDaily_Report_Full[".advSearchFields"][] = "end2_date";
$tdataDaily_Report_Full[".advSearchFields"][] = "end2_date_shift";
$tdataDaily_Report_Full[".advSearchFields"][] = "designer2_id";
$tdataDaily_Report_Full[".advSearchFields"][] = "project_id";
$tdataDaily_Report_Full[".advSearchFields"][] = "team";
$tdataDaily_Report_Full[".advSearchFields"][] = "pdf_estimated_average";
$tdataDaily_Report_Full[".advSearchFields"][] = "taken_time";
$tdataDaily_Report_Full[".advSearchFields"][] = "efficiency";
$tdataDaily_Report_Full[".advSearchFields"][] = "idle_time";

$tdataDaily_Report_Full[".tableType"] = "report";

$tdataDaily_Report_Full[".printerPageOrientation"] = 0;
$tdataDaily_Report_Full[".nPrinterPageScale"] = 100;

$tdataDaily_Report_Full[".nPrinterSplitRecords"] = 40;

$tdataDaily_Report_Full[".nPrinterPDFSplitRecords"] = 40;



$tdataDaily_Report_Full[".geocodingEnabled"] = false;

//report settings

$tdataDaily_Report_Full[".reportPrintPartitionType"] = 0;	
$tdataDaily_Report_Full[".reportPrintGroupsPerPage"] = 3;	
	$tdataDaily_Report_Full[".lowGroup"] = 4;



$tdataDaily_Report_Full[".reportGroupFields"] = true;
$tdataDaily_Report_Full[".pageSize"] = 1;
$tdataDaily_Report_Full[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "end2_date_shift";
	$rgroupField['groupInterval'] = 5;
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
$tdataDaily_Report_Full[".reportGroupFieldsData"] = $reportGroupFields;


$tdataDaily_Report_Full[".isExistTotalFields"] = true;


$tdataDaily_Report_Full[".reportPageSummary"] = true;


$tdataDaily_Report_Full[".repShowDet"] = true;

$tdataDaily_Report_Full[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY jobfile.end2_date DESC, `user`.team, jobfile.designer2_id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDaily_Report_Full[".strOrderBy"] = $tstrOrderBy;

$tdataDaily_Report_Full[".orderindexes"] = array();
$tdataDaily_Report_Full[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "jobfile.end2_date");
$tdataDaily_Report_Full[".orderindexes"][] = array(7, (1 ? "ASC" : "DESC"), "`user`.team");
$tdataDaily_Report_Full[".orderindexes"][] = array(5, (0 ? "ASC" : "DESC"), "jobfile.designer2_id");

$tdataDaily_Report_Full[".sqlHead"] = "SELECT jobfile.job_id,  jobfile.filename,  jobfile.end2_date,  (TIMESTAMPADD(MINUTE,105,`end2_date`)) AS end2_date_shift,  jobfile.designer2_id,  jobfile.project_id,  `user`.team,  pdf.pdf_estimated_average,  jobfile.designer2_time AS taken_time,  (TIME_TO_SEC(pdf.pdf_estimated_average)/IF(TIME_TO_SEC(jobfile.designer2_time) > '60', TIME_TO_SEC(jobfile.designer2_time), TIME_TO_SEC(pdf.pdf_estimated_average)))*100 AS efficiency,  SEC_TO_TIME((pdf.pdf_estimated_average)-(jobfile.designer2_time)) AS idle_time";
$tdataDaily_Report_Full[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$tdataDaily_Report_Full[".sqlWhereExpr"] = "jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%'))";
$tdataDaily_Report_Full[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDaily_Report_Full[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDaily_Report_Full[".arrGroupsPerPage"] = $arrGPP;

$tdataDaily_Report_Full[".highlightSearchResults"] = true;

$tableKeysDaily_Report_Full = array();
$tdataDaily_Report_Full[".Keys"] = $tableKeysDaily_Report_Full;

$tdataDaily_Report_Full[".listFields"] = array();
$tdataDaily_Report_Full[".listFields"][] = "job_id";
$tdataDaily_Report_Full[".listFields"][] = "filename";
$tdataDaily_Report_Full[".listFields"][] = "end2_date";
$tdataDaily_Report_Full[".listFields"][] = "end2_date_shift";
$tdataDaily_Report_Full[".listFields"][] = "designer2_id";
$tdataDaily_Report_Full[".listFields"][] = "project_id";
$tdataDaily_Report_Full[".listFields"][] = "team";
$tdataDaily_Report_Full[".listFields"][] = "pdf_estimated_average";
$tdataDaily_Report_Full[".listFields"][] = "taken_time";
$tdataDaily_Report_Full[".listFields"][] = "efficiency";
$tdataDaily_Report_Full[".listFields"][] = "idle_time";

$tdataDaily_Report_Full[".hideMobileList"] = array();


$tdataDaily_Report_Full[".viewFields"] = array();
$tdataDaily_Report_Full[".viewFields"][] = "job_id";
$tdataDaily_Report_Full[".viewFields"][] = "filename";
$tdataDaily_Report_Full[".viewFields"][] = "end2_date";
$tdataDaily_Report_Full[".viewFields"][] = "end2_date_shift";
$tdataDaily_Report_Full[".viewFields"][] = "designer2_id";
$tdataDaily_Report_Full[".viewFields"][] = "project_id";
$tdataDaily_Report_Full[".viewFields"][] = "team";
$tdataDaily_Report_Full[".viewFields"][] = "pdf_estimated_average";
$tdataDaily_Report_Full[".viewFields"][] = "taken_time";
$tdataDaily_Report_Full[".viewFields"][] = "efficiency";
$tdataDaily_Report_Full[".viewFields"][] = "idle_time";

$tdataDaily_Report_Full[".addFields"] = array();
$tdataDaily_Report_Full[".addFields"][] = "job_id";
$tdataDaily_Report_Full[".addFields"][] = "filename";
$tdataDaily_Report_Full[".addFields"][] = "end2_date";
$tdataDaily_Report_Full[".addFields"][] = "designer2_id";
$tdataDaily_Report_Full[".addFields"][] = "project_id";

$tdataDaily_Report_Full[".masterListFields"] = array();
$tdataDaily_Report_Full[".masterListFields"][] = "job_id";
$tdataDaily_Report_Full[".masterListFields"][] = "filename";
$tdataDaily_Report_Full[".masterListFields"][] = "end2_date";
$tdataDaily_Report_Full[".masterListFields"][] = "end2_date_shift";
$tdataDaily_Report_Full[".masterListFields"][] = "designer2_id";
$tdataDaily_Report_Full[".masterListFields"][] = "project_id";
$tdataDaily_Report_Full[".masterListFields"][] = "team";
$tdataDaily_Report_Full[".masterListFields"][] = "pdf_estimated_average";
$tdataDaily_Report_Full[".masterListFields"][] = "taken_time";
$tdataDaily_Report_Full[".masterListFields"][] = "efficiency";
$tdataDaily_Report_Full[".masterListFields"][] = "idle_time";

$tdataDaily_Report_Full[".inlineAddFields"] = array();
$tdataDaily_Report_Full[".inlineAddFields"][] = "job_id";
$tdataDaily_Report_Full[".inlineAddFields"][] = "filename";
$tdataDaily_Report_Full[".inlineAddFields"][] = "end2_date";
$tdataDaily_Report_Full[".inlineAddFields"][] = "designer2_id";
$tdataDaily_Report_Full[".inlineAddFields"][] = "project_id";

$tdataDaily_Report_Full[".editFields"] = array();
$tdataDaily_Report_Full[".editFields"][] = "job_id";
$tdataDaily_Report_Full[".editFields"][] = "filename";
$tdataDaily_Report_Full[".editFields"][] = "end2_date";
$tdataDaily_Report_Full[".editFields"][] = "designer2_id";
$tdataDaily_Report_Full[".editFields"][] = "project_id";

$tdataDaily_Report_Full[".inlineEditFields"] = array();
$tdataDaily_Report_Full[".inlineEditFields"][] = "job_id";
$tdataDaily_Report_Full[".inlineEditFields"][] = "filename";
$tdataDaily_Report_Full[".inlineEditFields"][] = "end2_date";
$tdataDaily_Report_Full[".inlineEditFields"][] = "designer2_id";
$tdataDaily_Report_Full[".inlineEditFields"][] = "project_id";

$tdataDaily_Report_Full[".exportFields"] = array();
$tdataDaily_Report_Full[".exportFields"][] = "job_id";
$tdataDaily_Report_Full[".exportFields"][] = "filename";
$tdataDaily_Report_Full[".exportFields"][] = "end2_date";
$tdataDaily_Report_Full[".exportFields"][] = "end2_date_shift";
$tdataDaily_Report_Full[".exportFields"][] = "designer2_id";
$tdataDaily_Report_Full[".exportFields"][] = "project_id";
$tdataDaily_Report_Full[".exportFields"][] = "team";
$tdataDaily_Report_Full[".exportFields"][] = "pdf_estimated_average";
$tdataDaily_Report_Full[".exportFields"][] = "taken_time";
$tdataDaily_Report_Full[".exportFields"][] = "efficiency";
$tdataDaily_Report_Full[".exportFields"][] = "idle_time";

$tdataDaily_Report_Full[".importFields"] = array();
$tdataDaily_Report_Full[".importFields"][] = "job_id";
$tdataDaily_Report_Full[".importFields"][] = "filename";
$tdataDaily_Report_Full[".importFields"][] = "end2_date";
$tdataDaily_Report_Full[".importFields"][] = "end2_date_shift";
$tdataDaily_Report_Full[".importFields"][] = "designer2_id";
$tdataDaily_Report_Full[".importFields"][] = "project_id";
$tdataDaily_Report_Full[".importFields"][] = "team";
$tdataDaily_Report_Full[".importFields"][] = "pdf_estimated_average";
$tdataDaily_Report_Full[".importFields"][] = "taken_time";
$tdataDaily_Report_Full[".importFields"][] = "efficiency";
$tdataDaily_Report_Full[".importFields"][] = "idle_time";

$tdataDaily_Report_Full[".printFields"] = array();
$tdataDaily_Report_Full[".printFields"][] = "job_id";
$tdataDaily_Report_Full[".printFields"][] = "filename";
$tdataDaily_Report_Full[".printFields"][] = "end2_date";
$tdataDaily_Report_Full[".printFields"][] = "end2_date_shift";
$tdataDaily_Report_Full[".printFields"][] = "designer2_id";
$tdataDaily_Report_Full[".printFields"][] = "project_id";
$tdataDaily_Report_Full[".printFields"][] = "team";
$tdataDaily_Report_Full[".printFields"][] = "pdf_estimated_average";
$tdataDaily_Report_Full[".printFields"][] = "taken_time";
$tdataDaily_Report_Full[".printFields"][] = "efficiency";
$tdataDaily_Report_Full[".printFields"][] = "idle_time";

//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Full","job_id"); 
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

	

	
	$tdataDaily_Report_Full["job_id"] = $fdata;
//	filename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "filename";
	$fdata["GoodName"] = "filename";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Full","filename"); 
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

	

	
	$tdataDaily_Report_Full["filename"] = $fdata;
//	end2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "end2_date";
	$fdata["GoodName"] = "end2_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Full","end2_date"); 
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

	

	
	$tdataDaily_Report_Full["end2_date"] = $fdata;
//	end2_date_shift
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "end2_date_shift";
	$fdata["GoodName"] = "end2_date_shift";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Full","end2_date_shift"); 
	$fdata["FieldType"] = 135;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "end2_date_shift"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(TIMESTAMPADD(MINUTE,105,`end2_date`))";
	
		
		
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

	

	
	$tdataDaily_Report_Full["end2_date_shift"] = $fdata;
//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Full","designer2_id"); 
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

	

	
	$tdataDaily_Report_Full["designer2_id"] = $fdata;
//	project_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "project_id";
	$fdata["GoodName"] = "project_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Full","project_id"); 
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

	

	
	$tdataDaily_Report_Full["project_id"] = $fdata;
//	team
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "team";
	$fdata["GoodName"] = "team";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Full","team"); 
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

	

	
	$tdataDaily_Report_Full["team"] = $fdata;
//	pdf_estimated_average
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "pdf_estimated_average";
	$fdata["GoodName"] = "pdf_estimated_average";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Full","pdf_estimated_average"); 
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

	

	
	$tdataDaily_Report_Full["pdf_estimated_average"] = $fdata;
//	taken_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "taken_time";
	$fdata["GoodName"] = "taken_time";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Full","taken_time"); 
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

	

	
	$tdataDaily_Report_Full["taken_time"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Full","efficiency"); 
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
	$fdata["FullName"] = "(TIME_TO_SEC(pdf.pdf_estimated_average)/IF(TIME_TO_SEC(jobfile.designer2_time) > '60', TIME_TO_SEC(jobfile.designer2_time), TIME_TO_SEC(pdf.pdf_estimated_average)))*100";
	
		
		
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

	

	
	$tdataDaily_Report_Full["efficiency"] = $fdata;
//	idle_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "idle_time";
	$fdata["GoodName"] = "idle_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Full","idle_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idle_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME((pdf.pdf_estimated_average)-(jobfile.designer2_time))";
	
		
		
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

	

	
	$tdataDaily_Report_Full["idle_time"] = $fdata;

	
$tables_data["Daily Report Full"]=&$tdataDaily_Report_Full;
$field_labels["Daily_Report_Full"] = &$fieldLabelsDaily_Report_Full;
$fieldToolTips["Daily Report Full"] = &$fieldToolTipsDaily_Report_Full;
$page_titles["Daily_Report_Full"] = &$pageTitlesDaily_Report_Full;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Daily Report Full"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Daily Report Full"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Daily_Report_Full()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile.job_id,  jobfile.filename,  jobfile.end2_date,  (TIMESTAMPADD(MINUTE,105,`end2_date`)) AS end2_date_shift,  jobfile.designer2_id,  jobfile.project_id,  `user`.team,  pdf.pdf_estimated_average,  jobfile.designer2_time AS taken_time,  (TIME_TO_SEC(pdf.pdf_estimated_average)/IF(TIME_TO_SEC(jobfile.designer2_time) > '60', TIME_TO_SEC(jobfile.designer2_time), TIME_TO_SEC(pdf.pdf_estimated_average)))*100 AS efficiency,  SEC_TO_TIME((pdf.pdf_estimated_average)-(jobfile.designer2_time)) AS idle_time";
$proto0["m_strFrom"] = "FROM jobfile  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto0["m_strWhere"] = "jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%'))";
$proto0["m_strOrderBy"] = "ORDER BY jobfile.end2_date DESC, `user`.team, jobfile.designer2_id DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%'))";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%'))"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.designer2_id IS NOT NULL";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report Full"
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
	"m_srcTableName" => "Daily Report Full"
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
	"m_srcTableName" => "Daily Report Full"
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
	"m_srcTableName" => "Daily Report Full"
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
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report Full"
));

$proto15["m_sql"] = "jobfile.job_id";
$proto15["m_srcTableName"] = "Daily Report Full";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report Full"
));

$proto17["m_sql"] = "jobfile.filename";
$proto17["m_srcTableName"] = "Daily Report Full";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report Full"
));

$proto19["m_sql"] = "jobfile.end2_date";
$proto19["m_srcTableName"] = "Daily Report Full";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(TIMESTAMPADD(MINUTE,105,`end2_date`))"
));

$proto21["m_sql"] = "(TIMESTAMPADD(MINUTE,105,`end2_date`))";
$proto21["m_srcTableName"] = "Daily Report Full";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "end2_date_shift";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report Full"
));

$proto23["m_sql"] = "jobfile.designer2_id";
$proto23["m_srcTableName"] = "Daily Report Full";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report Full"
));

$proto25["m_sql"] = "jobfile.project_id";
$proto25["m_srcTableName"] = "Daily Report Full";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Daily Report Full"
));

$proto27["m_sql"] = "`user`.team";
$proto27["m_srcTableName"] = "Daily Report Full";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Daily Report Full"
));

$proto29["m_sql"] = "pdf.pdf_estimated_average";
$proto29["m_srcTableName"] = "Daily Report Full";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_time",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report Full"
));

$proto31["m_sql"] = "jobfile.designer2_time";
$proto31["m_srcTableName"] = "Daily Report Full";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "taken_time";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(TIME_TO_SEC(pdf.pdf_estimated_average)/IF(TIME_TO_SEC(jobfile.designer2_time) > '60', TIME_TO_SEC(jobfile.designer2_time), TIME_TO_SEC(pdf.pdf_estimated_average)))*100"
));

$proto33["m_sql"] = "(TIME_TO_SEC(pdf.pdf_estimated_average)/IF(TIME_TO_SEC(jobfile.designer2_time) > '60', TIME_TO_SEC(jobfile.designer2_time), TIME_TO_SEC(pdf.pdf_estimated_average)))*100";
$proto33["m_srcTableName"] = "Daily Report Full";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$proto36=array();
$proto36["m_functiontype"] = "SQLF_CUSTOM";
$proto36["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(pdf.pdf_estimated_average)-(jobfile.designer2_time)"
));

$proto36["m_arguments"][]=$obj;
$proto36["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto36);

$proto35["m_sql"] = "SEC_TO_TIME((pdf.pdf_estimated_average)-(jobfile.designer2_time))";
$proto35["m_srcTableName"] = "Daily Report Full";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "idle_time";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "jobfile";
$proto39["m_srcTableName"] = "Daily Report Full";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "jobfile_id";
$proto39["m_columns"][] = "file_url";
$proto39["m_columns"][] = "client_id";
$proto39["m_columns"][] = "work_id";
$proto39["m_columns"][] = "job_id";
$proto39["m_columns"][] = "project_id";
$proto39["m_columns"][] = "folder_name";
$proto39["m_columns"][] = "filename";
$proto39["m_columns"][] = "jobfile_type";
$proto39["m_columns"][] = "jobfile_note";
$proto39["m_columns"][] = "jobfile_status_id";
$proto39["m_columns"][] = "downloader_id";
$proto39["m_columns"][] = "distributor_id";
$proto39["m_columns"][] = "designer_id";
$proto39["m_columns"][] = "qc_id";
$proto39["m_columns"][] = "uploader_id";
$proto39["m_columns"][] = "notifier_id";
$proto39["m_columns"][] = "rejector_id";
$proto39["m_columns"][] = "download_date";
$proto39["m_columns"][] = "distribute_date";
$proto39["m_columns"][] = "start_date";
$proto39["m_columns"][] = "end_date";
$proto39["m_columns"][] = "designer_time";
$proto39["m_columns"][] = "qcstart_date";
$proto39["m_columns"][] = "qcend_date";
$proto39["m_columns"][] = "qc_time";
$proto39["m_columns"][] = "upload_date";
$proto39["m_columns"][] = "notify_date";
$proto39["m_columns"][] = "reject_date";
$proto39["m_columns"][] = "reject_reason";
$proto39["m_columns"][] = "designer2_id";
$proto39["m_columns"][] = "start2_date";
$proto39["m_columns"][] = "end2_date";
$proto39["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "jobfile";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "Daily Report Full";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
												$proto42=array();
$proto42["m_link"] = "SQLL_LEFTJOIN";
			$proto43=array();
$proto43["m_strName"] = "user";
$proto43["m_srcTableName"] = "Daily Report Full";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "user_id";
$proto43["m_columns"][] = "user_status";
$proto43["m_columns"][] = "username";
$proto43["m_columns"][] = "password";
$proto43["m_columns"][] = "department_id";
$proto43["m_columns"][] = "subdiv_id";
$proto43["m_columns"][] = "group_id";
$proto43["m_columns"][] = "designation";
$proto43["m_columns"][] = "employee_id";
$proto43["m_columns"][] = "fname";
$proto43["m_columns"][] = "lname";
$proto43["m_columns"][] = "nickname";
$proto43["m_columns"][] = "email";
$proto43["m_columns"][] = "phone";
$proto43["m_columns"][] = "mobile";
$proto43["m_columns"][] = "log";
$proto43["m_columns"][] = "images_assigned";
$proto43["m_columns"][] = "user_picture";
$proto43["m_columns"][] = "team";
$proto43["m_columns"][] = "ad_group_id";
$proto43["m_columns"][] = "lastaccess";
$proto43["m_columns"][] = "joining_date";
$proto43["m_columns"][] = "emergency_contact1";
$proto43["m_columns"][] = "emergency_contact2";
$proto43["m_columns"][] = "permanent_address";
$proto43["m_columns"][] = "current_address";
$proto43["m_columns"][] = "date_of_birth";
$proto43["m_columns"][] = "male_female";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "Daily Report Full";
$proto44=array();
$proto44["m_sql"] = "jobfile.designer2_id = `user`.user_id";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report Full"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= `user`.user_id";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
												$proto46=array();
$proto46["m_link"] = "SQLL_LEFTJOIN";
			$proto47=array();
$proto47["m_strName"] = "pdf";
$proto47["m_srcTableName"] = "Daily Report Full";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "pdf_id";
$proto47["m_columns"][] = "pdf_name";
$proto47["m_columns"][] = "client_id";
$proto47["m_columns"][] = "pdf_location";
$proto47["m_columns"][] = "last_update";
$proto47["m_columns"][] = "pdf_estimated_average";
$proto47["m_columns"][] = "pdf_estimated_average1";
$proto47["m_columns"][] = "pdf_estimated_average2";
$proto47["m_columns"][] = "pdf_actual_average";
$proto47["m_columns"][] = "price";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "Daily Report Full";
$proto48=array();
$proto48["m_sql"] = "jobfile.project_id = pdf.pdf_id";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report Full"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "= pdf.pdf_id";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report Full"
));

$proto50["m_column"]=$obj;
$proto50["m_bAsc"] = 0;
$proto50["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto50);

$proto0["m_orderby"][]=$obj;					
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Daily Report Full"
));

$proto52["m_column"]=$obj;
$proto52["m_bAsc"] = 1;
$proto52["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto52);

$proto0["m_orderby"][]=$obj;					
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report Full"
));

$proto54["m_column"]=$obj;
$proto54["m_bAsc"] = 0;
$proto54["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto54);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Daily Report Full";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Daily_Report_Full = createSqlQuery_Daily_Report_Full();


	
											
	
$tdataDaily_Report_Full[".sqlquery"] = $queryData_Daily_Report_Full;

$tableEvents["Daily Report Full"] = new eventsBase;
$tdataDaily_Report_Full[".hasEvents"] = false;

?>