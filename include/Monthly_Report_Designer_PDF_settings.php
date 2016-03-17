<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMonthly_Report_Designer_PDF = array();	
	$tdataMonthly_Report_Designer_PDF[".truncateText"] = true;
	$tdataMonthly_Report_Designer_PDF[".NumberOfChars"] = 256; 
	$tdataMonthly_Report_Designer_PDF[".ShortName"] = "Monthly_Report_Designer_PDF";
	$tdataMonthly_Report_Designer_PDF[".OwnerID"] = "";
	$tdataMonthly_Report_Designer_PDF[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsMonthly_Report_Designer_PDF = array();
$fieldToolTipsMonthly_Report_Designer_PDF = array();
$pageTitlesMonthly_Report_Designer_PDF = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMonthly_Report_Designer_PDF["English"] = array();
	$fieldToolTipsMonthly_Report_Designer_PDF["English"] = array();
	$pageTitlesMonthly_Report_Designer_PDF["English"] = array();
	$fieldLabelsMonthly_Report_Designer_PDF["English"]["project_id"] = "Project Id";
	$fieldToolTipsMonthly_Report_Designer_PDF["English"]["project_id"] = "";
	$fieldLabelsMonthly_Report_Designer_PDF["English"]["designer2_id"] = "Designer";
	$fieldToolTipsMonthly_Report_Designer_PDF["English"]["designer2_id"] = "";
	$fieldLabelsMonthly_Report_Designer_PDF["English"]["end2_date"] = "Date";
	$fieldToolTipsMonthly_Report_Designer_PDF["English"]["end2_date"] = "";
	$fieldLabelsMonthly_Report_Designer_PDF["English"]["team"] = "Team";
	$fieldToolTipsMonthly_Report_Designer_PDF["English"]["team"] = "";
	$fieldLabelsMonthly_Report_Designer_PDF["English"]["pdf_estimated_average"] = "ETA Average";
	$fieldToolTipsMonthly_Report_Designer_PDF["English"]["pdf_estimated_average"] = "";
	$fieldLabelsMonthly_Report_Designer_PDF["English"]["taken_time"] = "Taken Time";
	$fieldToolTipsMonthly_Report_Designer_PDF["English"]["taken_time"] = "";
	$fieldLabelsMonthly_Report_Designer_PDF["English"]["eta_total"] = "Eta Total";
	$fieldToolTipsMonthly_Report_Designer_PDF["English"]["eta_total"] = "";
	$fieldLabelsMonthly_Report_Designer_PDF["English"]["eta_avg"] = "Eta Avg";
	$fieldToolTipsMonthly_Report_Designer_PDF["English"]["eta_avg"] = "";
	$fieldLabelsMonthly_Report_Designer_PDF["English"]["taken_time_total"] = "Taken Time Total";
	$fieldToolTipsMonthly_Report_Designer_PDF["English"]["taken_time_total"] = "";
	$fieldLabelsMonthly_Report_Designer_PDF["English"]["taken_time_avg"] = "Taken Time Avg";
	$fieldToolTipsMonthly_Report_Designer_PDF["English"]["taken_time_avg"] = "";
	$fieldLabelsMonthly_Report_Designer_PDF["English"]["files"] = "Files";
	$fieldToolTipsMonthly_Report_Designer_PDF["English"]["files"] = "";
	$fieldLabelsMonthly_Report_Designer_PDF["English"]["efficiency_avg_CAL_1"] = "Efficiency Avg CAL 1";
	$fieldToolTipsMonthly_Report_Designer_PDF["English"]["efficiency_avg_CAL_1"] = "";
	if (count($fieldToolTipsMonthly_Report_Designer_PDF["English"]))
		$tdataMonthly_Report_Designer_PDF[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMonthly_Report_Designer_PDF[""] = array();
	$fieldToolTipsMonthly_Report_Designer_PDF[""] = array();
	$pageTitlesMonthly_Report_Designer_PDF[""] = array();
	if (count($fieldToolTipsMonthly_Report_Designer_PDF[""]))
		$tdataMonthly_Report_Designer_PDF[".isUseToolTips"] = true;
}
	
	
	$tdataMonthly_Report_Designer_PDF[".NCSearch"] = true;



$tdataMonthly_Report_Designer_PDF[".shortTableName"] = "Monthly_Report_Designer_PDF";
$tdataMonthly_Report_Designer_PDF[".nSecOptions"] = 0;
$tdataMonthly_Report_Designer_PDF[".recsPerRowList"] = 1;
$tdataMonthly_Report_Designer_PDF[".recsPerRowPrint"] = 1;
$tdataMonthly_Report_Designer_PDF[".mainTableOwnerID"] = "";
$tdataMonthly_Report_Designer_PDF[".moveNext"] = 1;
$tdataMonthly_Report_Designer_PDF[".entityType"] = 2;

$tdataMonthly_Report_Designer_PDF[".strOriginalTableName"] = "jobfile";




$tdataMonthly_Report_Designer_PDF[".showAddInPopup"] = false;

$tdataMonthly_Report_Designer_PDF[".showEditInPopup"] = false;

$tdataMonthly_Report_Designer_PDF[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMonthly_Report_Designer_PDF[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMonthly_Report_Designer_PDF[".fieldsForRegister"] = array();

$tdataMonthly_Report_Designer_PDF[".listAjax"] = false;

	$tdataMonthly_Report_Designer_PDF[".audit"] = false;

	$tdataMonthly_Report_Designer_PDF[".locking"] = false;


$tdataMonthly_Report_Designer_PDF[".add"] = true;
$tdataMonthly_Report_Designer_PDF[".afterAddAction"] = 0;
$tdataMonthly_Report_Designer_PDF[".closePopupAfterAdd"] = 1;
$tdataMonthly_Report_Designer_PDF[".afterAddActionDetTable"] = "";

$tdataMonthly_Report_Designer_PDF[".list"] = true;

$tdataMonthly_Report_Designer_PDF[".inlineAdd"] = true;


$tdataMonthly_Report_Designer_PDF[".exportTo"] = true;

$tdataMonthly_Report_Designer_PDF[".printFriendly"] = true;


$tdataMonthly_Report_Designer_PDF[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataMonthly_Report_Designer_PDF[".searchSaving"] = false;
//

$tdataMonthly_Report_Designer_PDF[".showSearchPanel"] = true;
		$tdataMonthly_Report_Designer_PDF[".flexibleSearch"] = true;		

if (isMobile())
	$tdataMonthly_Report_Designer_PDF[".isUseAjaxSuggest"] = false;
else 
	$tdataMonthly_Report_Designer_PDF[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataMonthly_Report_Designer_PDF[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMonthly_Report_Designer_PDF[".isUseTimeForSearch"] = false;





$tdataMonthly_Report_Designer_PDF[".allSearchFields"] = array();
$tdataMonthly_Report_Designer_PDF[".filterFields"] = array();
$tdataMonthly_Report_Designer_PDF[".requiredSearchFields"] = array();

$tdataMonthly_Report_Designer_PDF[".allSearchFields"][] = "end2_date";
	$tdataMonthly_Report_Designer_PDF[".allSearchFields"][] = "team";
	$tdataMonthly_Report_Designer_PDF[".allSearchFields"][] = "designer2_id";
	$tdataMonthly_Report_Designer_PDF[".allSearchFields"][] = "project_id";
	$tdataMonthly_Report_Designer_PDF[".allSearchFields"][] = "taken_time_avg";
	$tdataMonthly_Report_Designer_PDF[".allSearchFields"][] = "efficiency_avg_CAL_1";
	

$tdataMonthly_Report_Designer_PDF[".googleLikeFields"] = array();
$tdataMonthly_Report_Designer_PDF[".googleLikeFields"][] = "end2_date";
$tdataMonthly_Report_Designer_PDF[".googleLikeFields"][] = "team";
$tdataMonthly_Report_Designer_PDF[".googleLikeFields"][] = "designer2_id";
$tdataMonthly_Report_Designer_PDF[".googleLikeFields"][] = "project_id";
$tdataMonthly_Report_Designer_PDF[".googleLikeFields"][] = "files";
$tdataMonthly_Report_Designer_PDF[".googleLikeFields"][] = "pdf_estimated_average";
$tdataMonthly_Report_Designer_PDF[".googleLikeFields"][] = "eta_total";
$tdataMonthly_Report_Designer_PDF[".googleLikeFields"][] = "eta_avg";
$tdataMonthly_Report_Designer_PDF[".googleLikeFields"][] = "taken_time";
$tdataMonthly_Report_Designer_PDF[".googleLikeFields"][] = "taken_time_total";
$tdataMonthly_Report_Designer_PDF[".googleLikeFields"][] = "taken_time_avg";
$tdataMonthly_Report_Designer_PDF[".googleLikeFields"][] = "efficiency_avg_CAL_1";


$tdataMonthly_Report_Designer_PDF[".advSearchFields"] = array();
$tdataMonthly_Report_Designer_PDF[".advSearchFields"][] = "end2_date";
$tdataMonthly_Report_Designer_PDF[".advSearchFields"][] = "team";
$tdataMonthly_Report_Designer_PDF[".advSearchFields"][] = "designer2_id";
$tdataMonthly_Report_Designer_PDF[".advSearchFields"][] = "project_id";
$tdataMonthly_Report_Designer_PDF[".advSearchFields"][] = "files";
$tdataMonthly_Report_Designer_PDF[".advSearchFields"][] = "pdf_estimated_average";
$tdataMonthly_Report_Designer_PDF[".advSearchFields"][] = "eta_total";
$tdataMonthly_Report_Designer_PDF[".advSearchFields"][] = "eta_avg";
$tdataMonthly_Report_Designer_PDF[".advSearchFields"][] = "taken_time";
$tdataMonthly_Report_Designer_PDF[".advSearchFields"][] = "taken_time_total";
$tdataMonthly_Report_Designer_PDF[".advSearchFields"][] = "taken_time_avg";
$tdataMonthly_Report_Designer_PDF[".advSearchFields"][] = "efficiency_avg_CAL_1";

$tdataMonthly_Report_Designer_PDF[".tableType"] = "report";

$tdataMonthly_Report_Designer_PDF[".printerPageOrientation"] = 0;
$tdataMonthly_Report_Designer_PDF[".nPrinterPageScale"] = 100;

$tdataMonthly_Report_Designer_PDF[".nPrinterSplitRecords"] = 40;

$tdataMonthly_Report_Designer_PDF[".nPrinterPDFSplitRecords"] = 40;



$tdataMonthly_Report_Designer_PDF[".geocodingEnabled"] = false;

//report settings

$tdataMonthly_Report_Designer_PDF[".reportPrintPartitionType"] = 0;	
$tdataMonthly_Report_Designer_PDF[".reportPrintGroupsPerPage"] = 3;	
	$tdataMonthly_Report_Designer_PDF[".lowGroup"] = 3;



$tdataMonthly_Report_Designer_PDF[".reportGroupFields"] = true;
$tdataMonthly_Report_Designer_PDF[".pageSize"] = 1;
$tdataMonthly_Report_Designer_PDF[".showGroupSummaryCount"] = true;
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
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "designer2_id";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 3;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataMonthly_Report_Designer_PDF[".reportGroupFieldsData"] = $reportGroupFields;






$tdataMonthly_Report_Designer_PDF[".repShowDet"] = true;

$tdataMonthly_Report_Designer_PDF[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY jobfile.end2_date DESC, `user`.team, jobfile.designer2_id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMonthly_Report_Designer_PDF[".strOrderBy"] = $tstrOrderBy;

$tdataMonthly_Report_Designer_PDF[".orderindexes"] = array();
$tdataMonthly_Report_Designer_PDF[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "jobfile.end2_date");
$tdataMonthly_Report_Designer_PDF[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "`user`.team");
$tdataMonthly_Report_Designer_PDF[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "jobfile.designer2_id");

$tdataMonthly_Report_Designer_PDF[".sqlHead"] = "SELECT jobfile.end2_date,  `user`.team,  jobfile.designer2_id,  jobfile.project_id,  COUNT(*) AS files,  pdf.pdf_estimated_average,  SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))) AS eta_total,  SEC_TO_TIME(AVG(TIME_TO_SEC(pdf.pdf_estimated_average))) AS eta_avg,  jobfile.designer2_time AS taken_time,  SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_total,  SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_avg,  (TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(jobfile.designer2_time))))*100 AS efficiency_avg_CAL_1";
$tdataMonthly_Report_Designer_PDF[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$tdataMonthly_Report_Designer_PDF[".sqlWhereExpr"] = "jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.designer2_time) > '0'";
$tdataMonthly_Report_Designer_PDF[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMonthly_Report_Designer_PDF[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMonthly_Report_Designer_PDF[".arrGroupsPerPage"] = $arrGPP;

$tdataMonthly_Report_Designer_PDF[".highlightSearchResults"] = true;

$tableKeysMonthly_Report_Designer_PDF = array();
$tdataMonthly_Report_Designer_PDF[".Keys"] = $tableKeysMonthly_Report_Designer_PDF;

$tdataMonthly_Report_Designer_PDF[".listFields"] = array();
$tdataMonthly_Report_Designer_PDF[".listFields"][] = "end2_date";
$tdataMonthly_Report_Designer_PDF[".listFields"][] = "team";
$tdataMonthly_Report_Designer_PDF[".listFields"][] = "designer2_id";
$tdataMonthly_Report_Designer_PDF[".listFields"][] = "project_id";
$tdataMonthly_Report_Designer_PDF[".listFields"][] = "files";
$tdataMonthly_Report_Designer_PDF[".listFields"][] = "pdf_estimated_average";
$tdataMonthly_Report_Designer_PDF[".listFields"][] = "eta_total";
$tdataMonthly_Report_Designer_PDF[".listFields"][] = "eta_avg";
$tdataMonthly_Report_Designer_PDF[".listFields"][] = "taken_time";
$tdataMonthly_Report_Designer_PDF[".listFields"][] = "taken_time_total";
$tdataMonthly_Report_Designer_PDF[".listFields"][] = "taken_time_avg";
$tdataMonthly_Report_Designer_PDF[".listFields"][] = "efficiency_avg_CAL_1";

$tdataMonthly_Report_Designer_PDF[".hideMobileList"] = array();


$tdataMonthly_Report_Designer_PDF[".viewFields"] = array();
$tdataMonthly_Report_Designer_PDF[".viewFields"][] = "end2_date";
$tdataMonthly_Report_Designer_PDF[".viewFields"][] = "team";
$tdataMonthly_Report_Designer_PDF[".viewFields"][] = "designer2_id";
$tdataMonthly_Report_Designer_PDF[".viewFields"][] = "project_id";
$tdataMonthly_Report_Designer_PDF[".viewFields"][] = "files";
$tdataMonthly_Report_Designer_PDF[".viewFields"][] = "pdf_estimated_average";
$tdataMonthly_Report_Designer_PDF[".viewFields"][] = "eta_total";
$tdataMonthly_Report_Designer_PDF[".viewFields"][] = "eta_avg";
$tdataMonthly_Report_Designer_PDF[".viewFields"][] = "taken_time";
$tdataMonthly_Report_Designer_PDF[".viewFields"][] = "taken_time_total";
$tdataMonthly_Report_Designer_PDF[".viewFields"][] = "taken_time_avg";
$tdataMonthly_Report_Designer_PDF[".viewFields"][] = "efficiency_avg_CAL_1";

$tdataMonthly_Report_Designer_PDF[".addFields"] = array();
$tdataMonthly_Report_Designer_PDF[".addFields"][] = "end2_date";
$tdataMonthly_Report_Designer_PDF[".addFields"][] = "designer2_id";
$tdataMonthly_Report_Designer_PDF[".addFields"][] = "project_id";

$tdataMonthly_Report_Designer_PDF[".masterListFields"] = array();
$tdataMonthly_Report_Designer_PDF[".masterListFields"][] = "end2_date";
$tdataMonthly_Report_Designer_PDF[".masterListFields"][] = "team";
$tdataMonthly_Report_Designer_PDF[".masterListFields"][] = "designer2_id";
$tdataMonthly_Report_Designer_PDF[".masterListFields"][] = "project_id";
$tdataMonthly_Report_Designer_PDF[".masterListFields"][] = "files";
$tdataMonthly_Report_Designer_PDF[".masterListFields"][] = "pdf_estimated_average";
$tdataMonthly_Report_Designer_PDF[".masterListFields"][] = "eta_total";
$tdataMonthly_Report_Designer_PDF[".masterListFields"][] = "eta_avg";
$tdataMonthly_Report_Designer_PDF[".masterListFields"][] = "taken_time";
$tdataMonthly_Report_Designer_PDF[".masterListFields"][] = "taken_time_total";
$tdataMonthly_Report_Designer_PDF[".masterListFields"][] = "taken_time_avg";
$tdataMonthly_Report_Designer_PDF[".masterListFields"][] = "efficiency_avg_CAL_1";

$tdataMonthly_Report_Designer_PDF[".inlineAddFields"] = array();
$tdataMonthly_Report_Designer_PDF[".inlineAddFields"][] = "end2_date";
$tdataMonthly_Report_Designer_PDF[".inlineAddFields"][] = "designer2_id";
$tdataMonthly_Report_Designer_PDF[".inlineAddFields"][] = "project_id";

$tdataMonthly_Report_Designer_PDF[".editFields"] = array();
$tdataMonthly_Report_Designer_PDF[".editFields"][] = "end2_date";
$tdataMonthly_Report_Designer_PDF[".editFields"][] = "designer2_id";
$tdataMonthly_Report_Designer_PDF[".editFields"][] = "project_id";

$tdataMonthly_Report_Designer_PDF[".inlineEditFields"] = array();
$tdataMonthly_Report_Designer_PDF[".inlineEditFields"][] = "end2_date";
$tdataMonthly_Report_Designer_PDF[".inlineEditFields"][] = "designer2_id";
$tdataMonthly_Report_Designer_PDF[".inlineEditFields"][] = "project_id";

$tdataMonthly_Report_Designer_PDF[".exportFields"] = array();
$tdataMonthly_Report_Designer_PDF[".exportFields"][] = "end2_date";
$tdataMonthly_Report_Designer_PDF[".exportFields"][] = "team";
$tdataMonthly_Report_Designer_PDF[".exportFields"][] = "designer2_id";
$tdataMonthly_Report_Designer_PDF[".exportFields"][] = "project_id";
$tdataMonthly_Report_Designer_PDF[".exportFields"][] = "files";
$tdataMonthly_Report_Designer_PDF[".exportFields"][] = "pdf_estimated_average";
$tdataMonthly_Report_Designer_PDF[".exportFields"][] = "eta_total";
$tdataMonthly_Report_Designer_PDF[".exportFields"][] = "eta_avg";
$tdataMonthly_Report_Designer_PDF[".exportFields"][] = "taken_time";
$tdataMonthly_Report_Designer_PDF[".exportFields"][] = "taken_time_total";
$tdataMonthly_Report_Designer_PDF[".exportFields"][] = "taken_time_avg";
$tdataMonthly_Report_Designer_PDF[".exportFields"][] = "efficiency_avg_CAL_1";

$tdataMonthly_Report_Designer_PDF[".importFields"] = array();
$tdataMonthly_Report_Designer_PDF[".importFields"][] = "end2_date";
$tdataMonthly_Report_Designer_PDF[".importFields"][] = "team";
$tdataMonthly_Report_Designer_PDF[".importFields"][] = "designer2_id";
$tdataMonthly_Report_Designer_PDF[".importFields"][] = "project_id";
$tdataMonthly_Report_Designer_PDF[".importFields"][] = "files";
$tdataMonthly_Report_Designer_PDF[".importFields"][] = "pdf_estimated_average";
$tdataMonthly_Report_Designer_PDF[".importFields"][] = "eta_total";
$tdataMonthly_Report_Designer_PDF[".importFields"][] = "eta_avg";
$tdataMonthly_Report_Designer_PDF[".importFields"][] = "taken_time";
$tdataMonthly_Report_Designer_PDF[".importFields"][] = "taken_time_total";
$tdataMonthly_Report_Designer_PDF[".importFields"][] = "taken_time_avg";
$tdataMonthly_Report_Designer_PDF[".importFields"][] = "efficiency_avg_CAL_1";

$tdataMonthly_Report_Designer_PDF[".printFields"] = array();
$tdataMonthly_Report_Designer_PDF[".printFields"][] = "end2_date";
$tdataMonthly_Report_Designer_PDF[".printFields"][] = "team";
$tdataMonthly_Report_Designer_PDF[".printFields"][] = "designer2_id";
$tdataMonthly_Report_Designer_PDF[".printFields"][] = "project_id";
$tdataMonthly_Report_Designer_PDF[".printFields"][] = "files";
$tdataMonthly_Report_Designer_PDF[".printFields"][] = "pdf_estimated_average";
$tdataMonthly_Report_Designer_PDF[".printFields"][] = "eta_total";
$tdataMonthly_Report_Designer_PDF[".printFields"][] = "eta_avg";
$tdataMonthly_Report_Designer_PDF[".printFields"][] = "taken_time";
$tdataMonthly_Report_Designer_PDF[".printFields"][] = "taken_time_total";
$tdataMonthly_Report_Designer_PDF[".printFields"][] = "taken_time_avg";
$tdataMonthly_Report_Designer_PDF[".printFields"][] = "efficiency_avg_CAL_1";

//	end2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "end2_date";
	$fdata["GoodName"] = "end2_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designer_PDF","end2_date"); 
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

	

	
	$tdataMonthly_Report_Designer_PDF["end2_date"] = $fdata;
//	team
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team";
	$fdata["GoodName"] = "team";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designer_PDF","team"); 
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

	

	
	$tdataMonthly_Report_Designer_PDF["team"] = $fdata;
//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designer_PDF","designer2_id"); 
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

	

	
	$tdataMonthly_Report_Designer_PDF["designer2_id"] = $fdata;
//	project_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "project_id";
	$fdata["GoodName"] = "project_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designer_PDF","project_id"); 
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

	

	
	$tdataMonthly_Report_Designer_PDF["project_id"] = $fdata;
//	files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "files";
	$fdata["GoodName"] = "files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designer_PDF","files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
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
	
	
	
	

	

	
	$tdataMonthly_Report_Designer_PDF["files"] = $fdata;
//	pdf_estimated_average
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pdf_estimated_average";
	$fdata["GoodName"] = "pdf_estimated_average";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designer_PDF","pdf_estimated_average"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_estimated_average"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf.pdf_estimated_average";
	
		
		
				
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
	
	
	
	

	

	
	$tdataMonthly_Report_Designer_PDF["pdf_estimated_average"] = $fdata;
//	eta_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "eta_total";
	$fdata["GoodName"] = "eta_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designer_PDF","eta_total"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "eta_total"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average)))";
	
		
		
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
	
	
	
	

	

	
	$tdataMonthly_Report_Designer_PDF["eta_total"] = $fdata;
//	eta_avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "eta_avg";
	$fdata["GoodName"] = "eta_avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designer_PDF","eta_avg"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "eta_avg"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(AVG(TIME_TO_SEC(pdf.pdf_estimated_average)))";
	
		
		
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
	
	
	
	

	

	
	$tdataMonthly_Report_Designer_PDF["eta_avg"] = $fdata;
//	taken_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "taken_time";
	$fdata["GoodName"] = "taken_time";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designer_PDF","taken_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer2_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.designer2_time";
	
		
		
				
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
	
	
	
	

	

	
	$tdataMonthly_Report_Designer_PDF["taken_time"] = $fdata;
//	taken_time_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "taken_time_total";
	$fdata["GoodName"] = "taken_time_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designer_PDF","taken_time_total"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "taken_time_total"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time)))";
	
		
		
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
	
	
	
	

	

	
	$tdataMonthly_Report_Designer_PDF["taken_time_total"] = $fdata;
//	taken_time_avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "taken_time_avg";
	$fdata["GoodName"] = "taken_time_avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designer_PDF","taken_time_avg"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "taken_time_avg"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.designer2_time)))";
	
		
		
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

	

	
	$tdataMonthly_Report_Designer_PDF["taken_time_avg"] = $fdata;
//	efficiency_avg_CAL_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "efficiency_avg_CAL_1";
	$fdata["GoodName"] = "efficiency_avg_CAL_1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designer_PDF","efficiency_avg_CAL_1"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "efficiency_avg_CAL_1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(jobfile.designer2_time))))*100";
	
		
		
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

	

	
	$tdataMonthly_Report_Designer_PDF["efficiency_avg_CAL_1"] = $fdata;

	
$tables_data["Monthly Report Designer PDF"]=&$tdataMonthly_Report_Designer_PDF;
$field_labels["Monthly_Report_Designer_PDF"] = &$fieldLabelsMonthly_Report_Designer_PDF;
$fieldToolTips["Monthly Report Designer PDF"] = &$fieldToolTipsMonthly_Report_Designer_PDF;
$page_titles["Monthly_Report_Designer_PDF"] = &$pageTitlesMonthly_Report_Designer_PDF;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Monthly Report Designer PDF"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Monthly Report Designer PDF"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Monthly_Report_Designer_PDF()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile.end2_date,  `user`.team,  jobfile.designer2_id,  jobfile.project_id,  COUNT(*) AS files,  pdf.pdf_estimated_average,  SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))) AS eta_total,  SEC_TO_TIME(AVG(TIME_TO_SEC(pdf.pdf_estimated_average))) AS eta_avg,  jobfile.designer2_time AS taken_time,  SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_total,  SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_avg,  (TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(jobfile.designer2_time))))*100 AS efficiency_avg_CAL_1";
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
	"m_srcTableName" => "Monthly Report Designer PDF"
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
	"m_srcTableName" => "Monthly Report Designer PDF"
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
	"m_srcTableName" => "Monthly Report Designer PDF"
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
	"m_srcTableName" => "Monthly Report Designer PDF"
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
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Designer PDF"
));

$proto18["m_sql"] = "jobfile.end2_date";
$proto18["m_srcTableName"] = "Monthly Report Designer PDF";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Monthly Report Designer PDF"
));

$proto20["m_sql"] = "`user`.team";
$proto20["m_srcTableName"] = "Monthly Report Designer PDF";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Designer PDF"
));

$proto22["m_sql"] = "jobfile.designer2_id";
$proto22["m_srcTableName"] = "Monthly Report Designer PDF";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Designer PDF"
));

$proto24["m_sql"] = "jobfile.project_id";
$proto24["m_srcTableName"] = "Monthly Report Designer PDF";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_COUNT";
$proto27["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "COUNT(*)";
$proto26["m_srcTableName"] = "Monthly Report Designer PDF";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "files";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Monthly Report Designer PDF"
));

$proto29["m_sql"] = "pdf.pdf_estimated_average";
$proto29["m_srcTableName"] = "Monthly Report Designer PDF";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$proto32=array();
$proto32["m_functiontype"] = "SQLF_CUSTOM";
$proto32["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(TIME_TO_SEC(pdf.pdf_estimated_average))"
));

$proto32["m_arguments"][]=$obj;
$proto32["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto32);

$proto31["m_sql"] = "SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average)))";
$proto31["m_srcTableName"] = "Monthly Report Designer PDF";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "eta_total";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$proto35=array();
$proto35["m_functiontype"] = "SQLF_CUSTOM";
$proto35["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "AVG(TIME_TO_SEC(pdf.pdf_estimated_average))"
));

$proto35["m_arguments"][]=$obj;
$proto35["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto35);

$proto34["m_sql"] = "SEC_TO_TIME(AVG(TIME_TO_SEC(pdf.pdf_estimated_average)))";
$proto34["m_srcTableName"] = "Monthly Report Designer PDF";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "eta_avg";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_time",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Designer PDF"
));

$proto37["m_sql"] = "jobfile.designer2_time";
$proto37["m_srcTableName"] = "Monthly Report Designer PDF";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "taken_time";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$proto40=array();
$proto40["m_functiontype"] = "SQLF_CUSTOM";
$proto40["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(TIME_TO_SEC(jobfile.designer2_time))"
));

$proto40["m_arguments"][]=$obj;
$proto40["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto40);

$proto39["m_sql"] = "SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time)))";
$proto39["m_srcTableName"] = "Monthly Report Designer PDF";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "taken_time_total";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$proto43=array();
$proto43["m_functiontype"] = "SQLF_CUSTOM";
$proto43["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "AVG(TIME_TO_SEC(jobfile.designer2_time))"
));

$proto43["m_arguments"][]=$obj;
$proto43["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto43);

$proto42["m_sql"] = "SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.designer2_time)))";
$proto42["m_srcTableName"] = "Monthly Report Designer PDF";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "taken_time_avg";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(jobfile.designer2_time))))*100"
));

$proto45["m_sql"] = "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(jobfile.designer2_time))))*100";
$proto45["m_srcTableName"] = "Monthly Report Designer PDF";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "efficiency_avg_CAL_1";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto47=array();
$proto47["m_link"] = "SQLL_MAIN";
			$proto48=array();
$proto48["m_strName"] = "jobfile";
$proto48["m_srcTableName"] = "Monthly Report Designer PDF";
$proto48["m_columns"] = array();
$proto48["m_columns"][] = "jobfile_id";
$proto48["m_columns"][] = "file_url";
$proto48["m_columns"][] = "client_id";
$proto48["m_columns"][] = "work_id";
$proto48["m_columns"][] = "job_id";
$proto48["m_columns"][] = "project_id";
$proto48["m_columns"][] = "folder_name";
$proto48["m_columns"][] = "filename";
$proto48["m_columns"][] = "jobfile_type";
$proto48["m_columns"][] = "jobfile_note";
$proto48["m_columns"][] = "jobfile_status_id";
$proto48["m_columns"][] = "downloader_id";
$proto48["m_columns"][] = "distributor_id";
$proto48["m_columns"][] = "designer_id";
$proto48["m_columns"][] = "qc_id";
$proto48["m_columns"][] = "uploader_id";
$proto48["m_columns"][] = "notifier_id";
$proto48["m_columns"][] = "rejector_id";
$proto48["m_columns"][] = "download_date";
$proto48["m_columns"][] = "distribute_date";
$proto48["m_columns"][] = "start_date";
$proto48["m_columns"][] = "end_date";
$proto48["m_columns"][] = "designer_time";
$proto48["m_columns"][] = "qcstart_date";
$proto48["m_columns"][] = "qcend_date";
$proto48["m_columns"][] = "qc_time";
$proto48["m_columns"][] = "upload_date";
$proto48["m_columns"][] = "notify_date";
$proto48["m_columns"][] = "reject_date";
$proto48["m_columns"][] = "reject_reason";
$proto48["m_columns"][] = "designer2_id";
$proto48["m_columns"][] = "start2_date";
$proto48["m_columns"][] = "end2_date";
$proto48["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto48);

$proto47["m_table"] = $obj;
$proto47["m_sql"] = "jobfile";
$proto47["m_alias"] = "";
$proto47["m_srcTableName"] = "Monthly Report Designer PDF";
$proto49=array();
$proto49["m_sql"] = "";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

$proto47["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto47);

$proto0["m_fromlist"][]=$obj;
												$proto51=array();
$proto51["m_link"] = "SQLL_LEFTJOIN";
			$proto52=array();
$proto52["m_strName"] = "user";
$proto52["m_srcTableName"] = "Monthly Report Designer PDF";
$proto52["m_columns"] = array();
$proto52["m_columns"][] = "user_id";
$proto52["m_columns"][] = "user_status";
$proto52["m_columns"][] = "username";
$proto52["m_columns"][] = "password";
$proto52["m_columns"][] = "department_id";
$proto52["m_columns"][] = "subdiv_id";
$proto52["m_columns"][] = "group_id";
$proto52["m_columns"][] = "designation";
$proto52["m_columns"][] = "employee_id";
$proto52["m_columns"][] = "fname";
$proto52["m_columns"][] = "lname";
$proto52["m_columns"][] = "nickname";
$proto52["m_columns"][] = "email";
$proto52["m_columns"][] = "phone";
$proto52["m_columns"][] = "mobile";
$proto52["m_columns"][] = "log";
$proto52["m_columns"][] = "images_assigned";
$proto52["m_columns"][] = "user_picture";
$proto52["m_columns"][] = "team";
$proto52["m_columns"][] = "ad_group_id";
$proto52["m_columns"][] = "lastaccess";
$proto52["m_columns"][] = "joining_date";
$proto52["m_columns"][] = "emergency_contact1";
$proto52["m_columns"][] = "emergency_contact2";
$proto52["m_columns"][] = "permanent_address";
$proto52["m_columns"][] = "current_address";
$proto52["m_columns"][] = "date_of_birth";
$proto52["m_columns"][] = "male_female";
$obj = new SQLTable($proto52);

$proto51["m_table"] = $obj;
$proto51["m_sql"] = "LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$proto51["m_alias"] = "";
$proto51["m_srcTableName"] = "Monthly Report Designer PDF";
$proto53=array();
$proto53["m_sql"] = "jobfile.designer2_id = `user`.user_id";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Designer PDF"
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = "= `user`.user_id";
$proto53["m_havingmode"] = false;
$proto53["m_inBrackets"] = false;
$proto53["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto53);

$proto51["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto51);

$proto0["m_fromlist"][]=$obj;
												$proto55=array();
$proto55["m_link"] = "SQLL_LEFTJOIN";
			$proto56=array();
$proto56["m_strName"] = "pdf";
$proto56["m_srcTableName"] = "Monthly Report Designer PDF";
$proto56["m_columns"] = array();
$proto56["m_columns"][] = "pdf_id";
$proto56["m_columns"][] = "pdf_name";
$proto56["m_columns"][] = "client_id";
$proto56["m_columns"][] = "pdf_location";
$proto56["m_columns"][] = "last_update";
$proto56["m_columns"][] = "pdf_estimated_average";
$proto56["m_columns"][] = "pdf_estimated_average1";
$proto56["m_columns"][] = "pdf_estimated_average2";
$proto56["m_columns"][] = "pdf_actual_average";
$proto56["m_columns"][] = "price";
$obj = new SQLTable($proto56);

$proto55["m_table"] = $obj;
$proto55["m_sql"] = "LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto55["m_alias"] = "";
$proto55["m_srcTableName"] = "Monthly Report Designer PDF";
$proto57=array();
$proto57["m_sql"] = "jobfile.project_id = pdf.pdf_id";
$proto57["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Designer PDF"
));

$proto57["m_column"]=$obj;
$proto57["m_contained"] = array();
$proto57["m_strCase"] = "= pdf.pdf_id";
$proto57["m_havingmode"] = false;
$proto57["m_inBrackets"] = false;
$proto57["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto57);

$proto55["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto55);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto59=array();
						$proto60=array();
$proto60["m_functiontype"] = "SQLF_CUSTOM";
$proto60["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.end2_date"
));

$proto60["m_arguments"][]=$obj;
$proto60["m_strFunctionName"] = "MONTH";
$obj = new SQLFunctionCall($proto60);

$proto59["m_column"]=$obj;
$obj = new SQLGroupByItem($proto59);

$proto0["m_groupby"][]=$obj;
												$proto62=array();
						$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Monthly Report Designer PDF"
));

$proto62["m_column"]=$obj;
$obj = new SQLGroupByItem($proto62);

$proto0["m_groupby"][]=$obj;
												$proto64=array();
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Designer PDF"
));

$proto64["m_column"]=$obj;
$obj = new SQLGroupByItem($proto64);

$proto0["m_groupby"][]=$obj;
												$proto66=array();
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Designer PDF"
));

$proto66["m_column"]=$obj;
$obj = new SQLGroupByItem($proto66);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto68=array();
						$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Designer PDF"
));

$proto68["m_column"]=$obj;
$proto68["m_bAsc"] = 0;
$proto68["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto68);

$proto0["m_orderby"][]=$obj;					
												$proto70=array();
						$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Monthly Report Designer PDF"
));

$proto70["m_column"]=$obj;
$proto70["m_bAsc"] = 1;
$proto70["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto70);

$proto0["m_orderby"][]=$obj;					
												$proto72=array();
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Monthly Report Designer PDF"
));

$proto72["m_column"]=$obj;
$proto72["m_bAsc"] = 0;
$proto72["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto72);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Monthly Report Designer PDF";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Monthly_Report_Designer_PDF = createSqlQuery_Monthly_Report_Designer_PDF();


	
												
	
$tdataMonthly_Report_Designer_PDF[".sqlquery"] = $queryData_Monthly_Report_Designer_PDF;

$tableEvents["Monthly Report Designer PDF"] = new eventsBase;
$tdataMonthly_Report_Designer_PDF[".hasEvents"] = false;

?>