<?php
require_once(getabspath("classes/cipherer.php"));




$tdata14704_Daily_Report__Team = array();	
	$tdata14704_Daily_Report__Team[".truncateText"] = true;
	$tdata14704_Daily_Report__Team[".NumberOfChars"] = 256; 
	$tdata14704_Daily_Report__Team[".ShortName"] = "14704_Daily_Report__Team";
	$tdata14704_Daily_Report__Team[".OwnerID"] = "";
	$tdata14704_Daily_Report__Team[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabels14704_Daily_Report__Team = array();
$fieldToolTips14704_Daily_Report__Team = array();
$pageTitles14704_Daily_Report__Team = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabels14704_Daily_Report__Team["English"] = array();
	$fieldToolTips14704_Daily_Report__Team["English"] = array();
	$pageTitles14704_Daily_Report__Team["English"] = array();
	$fieldLabels14704_Daily_Report__Team["English"]["designer2_id"] = "Designer";
	$fieldToolTips14704_Daily_Report__Team["English"]["designer2_id"] = "";
	$fieldLabels14704_Daily_Report__Team["English"]["end2_date"] = "Date";
	$fieldToolTips14704_Daily_Report__Team["English"]["end2_date"] = "";
	$fieldLabels14704_Daily_Report__Team["English"]["team"] = "Team";
	$fieldToolTips14704_Daily_Report__Team["English"]["team"] = "";
	$fieldLabels14704_Daily_Report__Team["English"]["pdf_estimated_average"] = "ETA Average";
	$fieldToolTips14704_Daily_Report__Team["English"]["pdf_estimated_average"] = "";
	$fieldLabels14704_Daily_Report__Team["English"]["taken_time"] = "Taken Time";
	$fieldToolTips14704_Daily_Report__Team["English"]["taken_time"] = "";
	$fieldLabels14704_Daily_Report__Team["English"]["files"] = "Files";
	$fieldToolTips14704_Daily_Report__Team["English"]["files"] = "";
	$fieldLabels14704_Daily_Report__Team["English"]["eta_total"] = "ETA Total";
	$fieldToolTips14704_Daily_Report__Team["English"]["eta_total"] = "";
	$fieldLabels14704_Daily_Report__Team["English"]["eta_avg"] = "ETA Avg";
	$fieldToolTips14704_Daily_Report__Team["English"]["eta_avg"] = "";
	$fieldLabels14704_Daily_Report__Team["English"]["taken_time_total"] = "Taken Time Total";
	$fieldToolTips14704_Daily_Report__Team["English"]["taken_time_total"] = "";
	$fieldLabels14704_Daily_Report__Team["English"]["taken_time_avg"] = "Taken Avg";
	$fieldToolTips14704_Daily_Report__Team["English"]["taken_time_avg"] = "";
	$fieldLabels14704_Daily_Report__Team["English"]["efficiency_avg_CAL_1"] = "Efficiency";
	$fieldToolTips14704_Daily_Report__Team["English"]["efficiency_avg_CAL_1"] = "";
	$fieldLabels14704_Daily_Report__Team["English"]["project_id"] = "Project Id";
	$fieldToolTips14704_Daily_Report__Team["English"]["project_id"] = "";
	if (count($fieldToolTips14704_Daily_Report__Team["English"]))
		$tdata14704_Daily_Report__Team[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels14704_Daily_Report__Team[""] = array();
	$fieldToolTips14704_Daily_Report__Team[""] = array();
	$pageTitles14704_Daily_Report__Team[""] = array();
	if (count($fieldToolTips14704_Daily_Report__Team[""]))
		$tdata14704_Daily_Report__Team[".isUseToolTips"] = true;
}
	
	
	$tdata14704_Daily_Report__Team[".NCSearch"] = true;



$tdata14704_Daily_Report__Team[".shortTableName"] = "14704_Daily_Report__Team";
$tdata14704_Daily_Report__Team[".nSecOptions"] = 0;
$tdata14704_Daily_Report__Team[".recsPerRowList"] = 1;
$tdata14704_Daily_Report__Team[".recsPerRowPrint"] = 1;
$tdata14704_Daily_Report__Team[".mainTableOwnerID"] = "";
$tdata14704_Daily_Report__Team[".moveNext"] = 1;
$tdata14704_Daily_Report__Team[".entityType"] = 2;

$tdata14704_Daily_Report__Team[".strOriginalTableName"] = "jobfile";




$tdata14704_Daily_Report__Team[".showAddInPopup"] = false;

$tdata14704_Daily_Report__Team[".showEditInPopup"] = false;

$tdata14704_Daily_Report__Team[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata14704_Daily_Report__Team[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata14704_Daily_Report__Team[".fieldsForRegister"] = array();

$tdata14704_Daily_Report__Team[".listAjax"] = false;

	$tdata14704_Daily_Report__Team[".audit"] = false;

	$tdata14704_Daily_Report__Team[".locking"] = false;


$tdata14704_Daily_Report__Team[".add"] = true;
$tdata14704_Daily_Report__Team[".afterAddAction"] = 0;
$tdata14704_Daily_Report__Team[".closePopupAfterAdd"] = 1;
$tdata14704_Daily_Report__Team[".afterAddActionDetTable"] = "";

$tdata14704_Daily_Report__Team[".list"] = true;

$tdata14704_Daily_Report__Team[".inlineAdd"] = true;


$tdata14704_Daily_Report__Team[".exportTo"] = true;

$tdata14704_Daily_Report__Team[".printFriendly"] = true;


$tdata14704_Daily_Report__Team[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdata14704_Daily_Report__Team[".searchSaving"] = false;
//

$tdata14704_Daily_Report__Team[".showSearchPanel"] = true;
		$tdata14704_Daily_Report__Team[".flexibleSearch"] = true;		

if (isMobile())
	$tdata14704_Daily_Report__Team[".isUseAjaxSuggest"] = false;
else 
	$tdata14704_Daily_Report__Team[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdata14704_Daily_Report__Team[".addPageEvents"] = false;

// use timepicker for search panel
$tdata14704_Daily_Report__Team[".isUseTimeForSearch"] = false;





$tdata14704_Daily_Report__Team[".allSearchFields"] = array();
$tdata14704_Daily_Report__Team[".filterFields"] = array();
$tdata14704_Daily_Report__Team[".requiredSearchFields"] = array();

$tdata14704_Daily_Report__Team[".allSearchFields"][] = "end2_date";
	$tdata14704_Daily_Report__Team[".allSearchFields"][] = "team";
	$tdata14704_Daily_Report__Team[".allSearchFields"][] = "designer2_id";
	$tdata14704_Daily_Report__Team[".allSearchFields"][] = "project_id";
	$tdata14704_Daily_Report__Team[".allSearchFields"][] = "files";
	$tdata14704_Daily_Report__Team[".allSearchFields"][] = "pdf_estimated_average";
	$tdata14704_Daily_Report__Team[".allSearchFields"][] = "eta_total";
	$tdata14704_Daily_Report__Team[".allSearchFields"][] = "eta_avg";
	$tdata14704_Daily_Report__Team[".allSearchFields"][] = "taken_time";
	$tdata14704_Daily_Report__Team[".allSearchFields"][] = "taken_time_total";
	$tdata14704_Daily_Report__Team[".allSearchFields"][] = "taken_time_avg";
	$tdata14704_Daily_Report__Team[".allSearchFields"][] = "efficiency_avg_CAL_1";
	

$tdata14704_Daily_Report__Team[".googleLikeFields"] = array();
$tdata14704_Daily_Report__Team[".googleLikeFields"][] = "end2_date";
$tdata14704_Daily_Report__Team[".googleLikeFields"][] = "team";
$tdata14704_Daily_Report__Team[".googleLikeFields"][] = "designer2_id";
$tdata14704_Daily_Report__Team[".googleLikeFields"][] = "project_id";
$tdata14704_Daily_Report__Team[".googleLikeFields"][] = "files";
$tdata14704_Daily_Report__Team[".googleLikeFields"][] = "pdf_estimated_average";
$tdata14704_Daily_Report__Team[".googleLikeFields"][] = "eta_total";
$tdata14704_Daily_Report__Team[".googleLikeFields"][] = "eta_avg";
$tdata14704_Daily_Report__Team[".googleLikeFields"][] = "taken_time";
$tdata14704_Daily_Report__Team[".googleLikeFields"][] = "taken_time_total";
$tdata14704_Daily_Report__Team[".googleLikeFields"][] = "taken_time_avg";
$tdata14704_Daily_Report__Team[".googleLikeFields"][] = "efficiency_avg_CAL_1";


$tdata14704_Daily_Report__Team[".advSearchFields"] = array();
$tdata14704_Daily_Report__Team[".advSearchFields"][] = "end2_date";
$tdata14704_Daily_Report__Team[".advSearchFields"][] = "team";
$tdata14704_Daily_Report__Team[".advSearchFields"][] = "designer2_id";
$tdata14704_Daily_Report__Team[".advSearchFields"][] = "project_id";
$tdata14704_Daily_Report__Team[".advSearchFields"][] = "files";
$tdata14704_Daily_Report__Team[".advSearchFields"][] = "pdf_estimated_average";
$tdata14704_Daily_Report__Team[".advSearchFields"][] = "eta_total";
$tdata14704_Daily_Report__Team[".advSearchFields"][] = "eta_avg";
$tdata14704_Daily_Report__Team[".advSearchFields"][] = "taken_time";
$tdata14704_Daily_Report__Team[".advSearchFields"][] = "taken_time_total";
$tdata14704_Daily_Report__Team[".advSearchFields"][] = "taken_time_avg";
$tdata14704_Daily_Report__Team[".advSearchFields"][] = "efficiency_avg_CAL_1";

$tdata14704_Daily_Report__Team[".tableType"] = "report";

$tdata14704_Daily_Report__Team[".printerPageOrientation"] = 0;
$tdata14704_Daily_Report__Team[".nPrinterPageScale"] = 100;

$tdata14704_Daily_Report__Team[".nPrinterSplitRecords"] = 40;

$tdata14704_Daily_Report__Team[".nPrinterPDFSplitRecords"] = 40;



$tdata14704_Daily_Report__Team[".geocodingEnabled"] = false;

//report settings

$tdata14704_Daily_Report__Team[".reportPrintPartitionType"] = 0;	
$tdata14704_Daily_Report__Team[".reportPrintGroupsPerPage"] = 3;	
	$tdata14704_Daily_Report__Team[".lowGroup"] = 1;



$tdata14704_Daily_Report__Team[".reportGroupFields"] = true;
$tdata14704_Daily_Report__Team[".pageSize"] = 1;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "end2_date";
	$rgroupField['groupInterval'] = 5;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdata14704_Daily_Report__Team[".reportGroupFieldsData"] = $reportGroupFields;


$tdata14704_Daily_Report__Team[".isExistTotalFields"] = true;


$tdata14704_Daily_Report__Team[".reportPageSummary"] = true;


$tdata14704_Daily_Report__Team[".repShowDet"] = true;

$tdata14704_Daily_Report__Team[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY jobfile.end2_date DESC, `user`.team, jobfile.designer2_id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata14704_Daily_Report__Team[".strOrderBy"] = $tstrOrderBy;

$tdata14704_Daily_Report__Team[".orderindexes"] = array();
$tdata14704_Daily_Report__Team[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "jobfile.end2_date");
$tdata14704_Daily_Report__Team[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "`user`.team");
$tdata14704_Daily_Report__Team[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "jobfile.designer2_id");

$tdata14704_Daily_Report__Team[".sqlHead"] = "SELECT jobfile.end2_date,  `user`.team,  jobfile.designer2_id,  jobfile.project_id,  COUNT(*) AS files,  pdf.pdf_estimated_average,  SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))) AS eta_total,  SEC_TO_TIME(AVG(TIME_TO_SEC(pdf.pdf_estimated_average))) AS eta_avg,  jobfile.designer2_time AS taken_time,  SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_total,  SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_avg,  (TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(jobfile.designer2_time))))*100 AS efficiency_avg_CAL_1";
$tdata14704_Daily_Report__Team[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$tdata14704_Daily_Report__Team[".sqlWhereExpr"] = "jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.designer2_time) > '60' AND (jobfile.project_id = 5001)";
$tdata14704_Daily_Report__Team[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata14704_Daily_Report__Team[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata14704_Daily_Report__Team[".arrGroupsPerPage"] = $arrGPP;

$tdata14704_Daily_Report__Team[".highlightSearchResults"] = true;

$tableKeys14704_Daily_Report__Team = array();
$tdata14704_Daily_Report__Team[".Keys"] = $tableKeys14704_Daily_Report__Team;

$tdata14704_Daily_Report__Team[".listFields"] = array();
$tdata14704_Daily_Report__Team[".listFields"][] = "end2_date";
$tdata14704_Daily_Report__Team[".listFields"][] = "team";
$tdata14704_Daily_Report__Team[".listFields"][] = "designer2_id";
$tdata14704_Daily_Report__Team[".listFields"][] = "project_id";
$tdata14704_Daily_Report__Team[".listFields"][] = "files";
$tdata14704_Daily_Report__Team[".listFields"][] = "pdf_estimated_average";
$tdata14704_Daily_Report__Team[".listFields"][] = "eta_total";
$tdata14704_Daily_Report__Team[".listFields"][] = "eta_avg";
$tdata14704_Daily_Report__Team[".listFields"][] = "taken_time";
$tdata14704_Daily_Report__Team[".listFields"][] = "taken_time_total";
$tdata14704_Daily_Report__Team[".listFields"][] = "taken_time_avg";
$tdata14704_Daily_Report__Team[".listFields"][] = "efficiency_avg_CAL_1";

$tdata14704_Daily_Report__Team[".hideMobileList"] = array();


$tdata14704_Daily_Report__Team[".viewFields"] = array();
$tdata14704_Daily_Report__Team[".viewFields"][] = "end2_date";
$tdata14704_Daily_Report__Team[".viewFields"][] = "team";
$tdata14704_Daily_Report__Team[".viewFields"][] = "designer2_id";
$tdata14704_Daily_Report__Team[".viewFields"][] = "project_id";
$tdata14704_Daily_Report__Team[".viewFields"][] = "files";
$tdata14704_Daily_Report__Team[".viewFields"][] = "pdf_estimated_average";
$tdata14704_Daily_Report__Team[".viewFields"][] = "eta_total";
$tdata14704_Daily_Report__Team[".viewFields"][] = "eta_avg";
$tdata14704_Daily_Report__Team[".viewFields"][] = "taken_time";
$tdata14704_Daily_Report__Team[".viewFields"][] = "taken_time_total";
$tdata14704_Daily_Report__Team[".viewFields"][] = "taken_time_avg";
$tdata14704_Daily_Report__Team[".viewFields"][] = "efficiency_avg_CAL_1";

$tdata14704_Daily_Report__Team[".addFields"] = array();
$tdata14704_Daily_Report__Team[".addFields"][] = "end2_date";
$tdata14704_Daily_Report__Team[".addFields"][] = "designer2_id";
$tdata14704_Daily_Report__Team[".addFields"][] = "project_id";

$tdata14704_Daily_Report__Team[".masterListFields"] = array();
$tdata14704_Daily_Report__Team[".masterListFields"][] = "end2_date";
$tdata14704_Daily_Report__Team[".masterListFields"][] = "team";
$tdata14704_Daily_Report__Team[".masterListFields"][] = "designer2_id";
$tdata14704_Daily_Report__Team[".masterListFields"][] = "project_id";
$tdata14704_Daily_Report__Team[".masterListFields"][] = "files";
$tdata14704_Daily_Report__Team[".masterListFields"][] = "pdf_estimated_average";
$tdata14704_Daily_Report__Team[".masterListFields"][] = "eta_total";
$tdata14704_Daily_Report__Team[".masterListFields"][] = "eta_avg";
$tdata14704_Daily_Report__Team[".masterListFields"][] = "taken_time";
$tdata14704_Daily_Report__Team[".masterListFields"][] = "taken_time_total";
$tdata14704_Daily_Report__Team[".masterListFields"][] = "taken_time_avg";
$tdata14704_Daily_Report__Team[".masterListFields"][] = "efficiency_avg_CAL_1";

$tdata14704_Daily_Report__Team[".inlineAddFields"] = array();
$tdata14704_Daily_Report__Team[".inlineAddFields"][] = "end2_date";
$tdata14704_Daily_Report__Team[".inlineAddFields"][] = "designer2_id";
$tdata14704_Daily_Report__Team[".inlineAddFields"][] = "project_id";

$tdata14704_Daily_Report__Team[".editFields"] = array();
$tdata14704_Daily_Report__Team[".editFields"][] = "end2_date";
$tdata14704_Daily_Report__Team[".editFields"][] = "designer2_id";
$tdata14704_Daily_Report__Team[".editFields"][] = "project_id";

$tdata14704_Daily_Report__Team[".inlineEditFields"] = array();
$tdata14704_Daily_Report__Team[".inlineEditFields"][] = "end2_date";
$tdata14704_Daily_Report__Team[".inlineEditFields"][] = "designer2_id";
$tdata14704_Daily_Report__Team[".inlineEditFields"][] = "project_id";

$tdata14704_Daily_Report__Team[".exportFields"] = array();
$tdata14704_Daily_Report__Team[".exportFields"][] = "end2_date";
$tdata14704_Daily_Report__Team[".exportFields"][] = "team";
$tdata14704_Daily_Report__Team[".exportFields"][] = "designer2_id";
$tdata14704_Daily_Report__Team[".exportFields"][] = "project_id";
$tdata14704_Daily_Report__Team[".exportFields"][] = "files";
$tdata14704_Daily_Report__Team[".exportFields"][] = "pdf_estimated_average";
$tdata14704_Daily_Report__Team[".exportFields"][] = "eta_total";
$tdata14704_Daily_Report__Team[".exportFields"][] = "eta_avg";
$tdata14704_Daily_Report__Team[".exportFields"][] = "taken_time";
$tdata14704_Daily_Report__Team[".exportFields"][] = "taken_time_total";
$tdata14704_Daily_Report__Team[".exportFields"][] = "taken_time_avg";
$tdata14704_Daily_Report__Team[".exportFields"][] = "efficiency_avg_CAL_1";

$tdata14704_Daily_Report__Team[".importFields"] = array();
$tdata14704_Daily_Report__Team[".importFields"][] = "end2_date";
$tdata14704_Daily_Report__Team[".importFields"][] = "team";
$tdata14704_Daily_Report__Team[".importFields"][] = "designer2_id";
$tdata14704_Daily_Report__Team[".importFields"][] = "project_id";
$tdata14704_Daily_Report__Team[".importFields"][] = "files";
$tdata14704_Daily_Report__Team[".importFields"][] = "pdf_estimated_average";
$tdata14704_Daily_Report__Team[".importFields"][] = "eta_total";
$tdata14704_Daily_Report__Team[".importFields"][] = "eta_avg";
$tdata14704_Daily_Report__Team[".importFields"][] = "taken_time";
$tdata14704_Daily_Report__Team[".importFields"][] = "taken_time_total";
$tdata14704_Daily_Report__Team[".importFields"][] = "taken_time_avg";
$tdata14704_Daily_Report__Team[".importFields"][] = "efficiency_avg_CAL_1";

$tdata14704_Daily_Report__Team[".printFields"] = array();
$tdata14704_Daily_Report__Team[".printFields"][] = "end2_date";
$tdata14704_Daily_Report__Team[".printFields"][] = "team";
$tdata14704_Daily_Report__Team[".printFields"][] = "designer2_id";
$tdata14704_Daily_Report__Team[".printFields"][] = "project_id";
$tdata14704_Daily_Report__Team[".printFields"][] = "files";
$tdata14704_Daily_Report__Team[".printFields"][] = "pdf_estimated_average";
$tdata14704_Daily_Report__Team[".printFields"][] = "eta_total";
$tdata14704_Daily_Report__Team[".printFields"][] = "eta_avg";
$tdata14704_Daily_Report__Team[".printFields"][] = "taken_time";
$tdata14704_Daily_Report__Team[".printFields"][] = "taken_time_total";
$tdata14704_Daily_Report__Team[".printFields"][] = "taken_time_avg";
$tdata14704_Daily_Report__Team[".printFields"][] = "efficiency_avg_CAL_1";

//	end2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "end2_date";
	$fdata["GoodName"] = "end2_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("14704_Daily_Report__Team","end2_date"); 
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

	

	
	$tdata14704_Daily_Report__Team["end2_date"] = $fdata;
//	team
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team";
	$fdata["GoodName"] = "team";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("14704_Daily_Report__Team","team"); 
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

	

	
	$tdata14704_Daily_Report__Team["team"] = $fdata;
//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("14704_Daily_Report__Team","designer2_id"); 
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

	

	
	$tdata14704_Daily_Report__Team["designer2_id"] = $fdata;
//	project_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "project_id";
	$fdata["GoodName"] = "project_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("14704_Daily_Report__Team","project_id"); 
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

	

	
	$tdata14704_Daily_Report__Team["project_id"] = $fdata;
//	files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "files";
	$fdata["GoodName"] = "files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("14704_Daily_Report__Team","files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
			$fdata["isTotalAvg"] = true;	
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

	

	
	$tdata14704_Daily_Report__Team["files"] = $fdata;
//	pdf_estimated_average
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pdf_estimated_average";
	$fdata["GoodName"] = "pdf_estimated_average";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("14704_Daily_Report__Team","pdf_estimated_average"); 
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

	

	
	$tdata14704_Daily_Report__Team["pdf_estimated_average"] = $fdata;
//	eta_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "eta_total";
	$fdata["GoodName"] = "eta_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("14704_Daily_Report__Team","eta_total"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
			$fdata["isTotalAvg"] = true;	
			// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdata14704_Daily_Report__Team["eta_total"] = $fdata;
//	eta_avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "eta_avg";
	$fdata["GoodName"] = "eta_avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("14704_Daily_Report__Team","eta_avg"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
			$fdata["isTotalAvg"] = true;	
			// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdata14704_Daily_Report__Team["eta_avg"] = $fdata;
//	taken_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "taken_time";
	$fdata["GoodName"] = "taken_time";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("14704_Daily_Report__Team","taken_time"); 
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

	

	
	$tdata14704_Daily_Report__Team["taken_time"] = $fdata;
//	taken_time_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "taken_time_total";
	$fdata["GoodName"] = "taken_time_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("14704_Daily_Report__Team","taken_time_total"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
			$fdata["isTotalAvg"] = true;	
			// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdata14704_Daily_Report__Team["taken_time_total"] = $fdata;
//	taken_time_avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "taken_time_avg";
	$fdata["GoodName"] = "taken_time_avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("14704_Daily_Report__Team","taken_time_avg"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
			$fdata["isTotalAvg"] = true;	
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

	

	
	$tdata14704_Daily_Report__Team["taken_time_avg"] = $fdata;
//	efficiency_avg_CAL_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "efficiency_avg_CAL_1";
	$fdata["GoodName"] = "efficiency_avg_CAL_1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("14704_Daily_Report__Team","efficiency_avg_CAL_1"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
			$fdata["isTotalAvg"] = true;	
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

	

	
	$tdata14704_Daily_Report__Team["efficiency_avg_CAL_1"] = $fdata;

	
$tables_data["14704 Daily Report  Team"]=&$tdata14704_Daily_Report__Team;
$field_labels["14704_Daily_Report__Team"] = &$fieldLabels14704_Daily_Report__Team;
$fieldToolTips["14704 Daily Report  Team"] = &$fieldToolTips14704_Daily_Report__Team;
$page_titles["14704_Daily_Report__Team"] = &$pageTitles14704_Daily_Report__Team;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["14704 Daily Report  Team"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["14704 Daily Report  Team"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_14704_Daily_Report__Team()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile.end2_date,  `user`.team,  jobfile.designer2_id,  jobfile.project_id,  COUNT(*) AS files,  pdf.pdf_estimated_average,  SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))) AS eta_total,  SEC_TO_TIME(AVG(TIME_TO_SEC(pdf.pdf_estimated_average))) AS eta_avg,  jobfile.designer2_time AS taken_time,  SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_total,  SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_avg,  (TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(jobfile.designer2_time))))*100 AS efficiency_avg_CAL_1";
$proto0["m_strFrom"] = "FROM jobfile  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto0["m_strWhere"] = "jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.designer2_time) > '60' AND (jobfile.project_id = 5001)";
$proto0["m_strOrderBy"] = "ORDER BY jobfile.end2_date DESC, `user`.team, jobfile.designer2_id DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.designer2_time) > '60' AND (jobfile.project_id = 5001)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.designer2_time) > '60' AND (jobfile.project_id = 5001)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.designer2_id IS NOT NULL";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report  Team"
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
	"m_srcTableName" => "14704 Daily Report  Team"
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
	"m_srcTableName" => "14704 Daily Report  Team"
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
	"m_srcTableName" => "14704 Daily Report  Team"
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
$proto13["m_sql"] = "TIME_TO_SEC(jobfile.designer2_time) > '60'";
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
$proto13["m_strCase"] = "> '60'";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

			$proto1["m_contained"][]=$obj;
						$proto16=array();
$proto16["m_sql"] = "jobfile.project_id = 5001";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report  Team"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "= 5001";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = true;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
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

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report  Team"
));

$proto20["m_sql"] = "jobfile.end2_date";
$proto20["m_srcTableName"] = "14704 Daily Report  Team";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "14704 Daily Report  Team"
));

$proto22["m_sql"] = "`user`.team";
$proto22["m_srcTableName"] = "14704 Daily Report  Team";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report  Team"
));

$proto24["m_sql"] = "jobfile.designer2_id";
$proto24["m_srcTableName"] = "14704 Daily Report  Team";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report  Team"
));

$proto26["m_sql"] = "jobfile.project_id";
$proto26["m_srcTableName"] = "14704 Daily Report  Team";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$proto29=array();
$proto29["m_functiontype"] = "SQLF_COUNT";
$proto29["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto29["m_arguments"][]=$obj;
$proto29["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto29);

$proto28["m_sql"] = "COUNT(*)";
$proto28["m_srcTableName"] = "14704 Daily Report  Team";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "files";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average",
	"m_strTable" => "pdf",
	"m_srcTableName" => "14704 Daily Report  Team"
));

$proto31["m_sql"] = "pdf.pdf_estimated_average";
$proto31["m_srcTableName"] = "14704 Daily Report  Team";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$proto34=array();
$proto34["m_functiontype"] = "SQLF_CUSTOM";
$proto34["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(TIME_TO_SEC(pdf.pdf_estimated_average))"
));

$proto34["m_arguments"][]=$obj;
$proto34["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto34);

$proto33["m_sql"] = "SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average)))";
$proto33["m_srcTableName"] = "14704 Daily Report  Team";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "eta_total";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$proto37=array();
$proto37["m_functiontype"] = "SQLF_CUSTOM";
$proto37["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "AVG(TIME_TO_SEC(pdf.pdf_estimated_average))"
));

$proto37["m_arguments"][]=$obj;
$proto37["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto37);

$proto36["m_sql"] = "SEC_TO_TIME(AVG(TIME_TO_SEC(pdf.pdf_estimated_average)))";
$proto36["m_srcTableName"] = "14704 Daily Report  Team";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "eta_avg";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_time",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report  Team"
));

$proto39["m_sql"] = "jobfile.designer2_time";
$proto39["m_srcTableName"] = "14704 Daily Report  Team";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "taken_time";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$proto42=array();
$proto42["m_functiontype"] = "SQLF_CUSTOM";
$proto42["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(TIME_TO_SEC(jobfile.designer2_time))"
));

$proto42["m_arguments"][]=$obj;
$proto42["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto42);

$proto41["m_sql"] = "SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time)))";
$proto41["m_srcTableName"] = "14704 Daily Report  Team";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "taken_time_total";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$proto45=array();
$proto45["m_functiontype"] = "SQLF_CUSTOM";
$proto45["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "AVG(TIME_TO_SEC(jobfile.designer2_time))"
));

$proto45["m_arguments"][]=$obj;
$proto45["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto45);

$proto44["m_sql"] = "SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.designer2_time)))";
$proto44["m_srcTableName"] = "14704 Daily Report  Team";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "taken_time_avg";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(jobfile.designer2_time))))*100"
));

$proto47["m_sql"] = "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(jobfile.designer2_time))))*100";
$proto47["m_srcTableName"] = "14704 Daily Report  Team";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "efficiency_avg_CAL_1";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto49=array();
$proto49["m_link"] = "SQLL_MAIN";
			$proto50=array();
$proto50["m_strName"] = "jobfile";
$proto50["m_srcTableName"] = "14704 Daily Report  Team";
$proto50["m_columns"] = array();
$proto50["m_columns"][] = "jobfile_id";
$proto50["m_columns"][] = "file_url";
$proto50["m_columns"][] = "client_id";
$proto50["m_columns"][] = "work_id";
$proto50["m_columns"][] = "job_id";
$proto50["m_columns"][] = "project_id";
$proto50["m_columns"][] = "folder_name";
$proto50["m_columns"][] = "filename";
$proto50["m_columns"][] = "jobfile_type";
$proto50["m_columns"][] = "jobfile_note";
$proto50["m_columns"][] = "jobfile_status_id";
$proto50["m_columns"][] = "downloader_id";
$proto50["m_columns"][] = "distributor_id";
$proto50["m_columns"][] = "designer_id";
$proto50["m_columns"][] = "qc_id";
$proto50["m_columns"][] = "uploader_id";
$proto50["m_columns"][] = "notifier_id";
$proto50["m_columns"][] = "rejector_id";
$proto50["m_columns"][] = "download_date";
$proto50["m_columns"][] = "distribute_date";
$proto50["m_columns"][] = "start_date";
$proto50["m_columns"][] = "end_date";
$proto50["m_columns"][] = "designer_time";
$proto50["m_columns"][] = "qcstart_date";
$proto50["m_columns"][] = "qcend_date";
$proto50["m_columns"][] = "qc_time";
$proto50["m_columns"][] = "upload_date";
$proto50["m_columns"][] = "notify_date";
$proto50["m_columns"][] = "reject_date";
$proto50["m_columns"][] = "reject_reason";
$proto50["m_columns"][] = "designer2_id";
$proto50["m_columns"][] = "start2_date";
$proto50["m_columns"][] = "end2_date";
$proto50["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto50);

$proto49["m_table"] = $obj;
$proto49["m_sql"] = "jobfile";
$proto49["m_alias"] = "";
$proto49["m_srcTableName"] = "14704 Daily Report  Team";
$proto51=array();
$proto51["m_sql"] = "";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "";
$proto51["m_havingmode"] = false;
$proto51["m_inBrackets"] = false;
$proto51["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto51);

$proto49["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto49);

$proto0["m_fromlist"][]=$obj;
												$proto53=array();
$proto53["m_link"] = "SQLL_LEFTJOIN";
			$proto54=array();
$proto54["m_strName"] = "user";
$proto54["m_srcTableName"] = "14704 Daily Report  Team";
$proto54["m_columns"] = array();
$proto54["m_columns"][] = "user_id";
$proto54["m_columns"][] = "user_status";
$proto54["m_columns"][] = "username";
$proto54["m_columns"][] = "password";
$proto54["m_columns"][] = "department_id";
$proto54["m_columns"][] = "subdiv_id";
$proto54["m_columns"][] = "group_id";
$proto54["m_columns"][] = "designation";
$proto54["m_columns"][] = "employee_id";
$proto54["m_columns"][] = "fname";
$proto54["m_columns"][] = "lname";
$proto54["m_columns"][] = "nickname";
$proto54["m_columns"][] = "email";
$proto54["m_columns"][] = "phone";
$proto54["m_columns"][] = "mobile";
$proto54["m_columns"][] = "log";
$proto54["m_columns"][] = "images_assigned";
$proto54["m_columns"][] = "user_picture";
$proto54["m_columns"][] = "team";
$proto54["m_columns"][] = "ad_group_id";
$proto54["m_columns"][] = "lastaccess";
$proto54["m_columns"][] = "joining_date";
$proto54["m_columns"][] = "emergency_contact1";
$proto54["m_columns"][] = "emergency_contact2";
$proto54["m_columns"][] = "permanent_address";
$proto54["m_columns"][] = "current_address";
$proto54["m_columns"][] = "date_of_birth";
$proto54["m_columns"][] = "male_female";
$obj = new SQLTable($proto54);

$proto53["m_table"] = $obj;
$proto53["m_sql"] = "LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$proto53["m_alias"] = "";
$proto53["m_srcTableName"] = "14704 Daily Report  Team";
$proto55=array();
$proto55["m_sql"] = "jobfile.designer2_id = `user`.user_id";
$proto55["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report  Team"
));

$proto55["m_column"]=$obj;
$proto55["m_contained"] = array();
$proto55["m_strCase"] = "= `user`.user_id";
$proto55["m_havingmode"] = false;
$proto55["m_inBrackets"] = false;
$proto55["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto55);

$proto53["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto53);

$proto0["m_fromlist"][]=$obj;
												$proto57=array();
$proto57["m_link"] = "SQLL_LEFTJOIN";
			$proto58=array();
$proto58["m_strName"] = "pdf";
$proto58["m_srcTableName"] = "14704 Daily Report  Team";
$proto58["m_columns"] = array();
$proto58["m_columns"][] = "pdf_id";
$proto58["m_columns"][] = "pdf_name";
$proto58["m_columns"][] = "client_id";
$proto58["m_columns"][] = "pdf_location";
$proto58["m_columns"][] = "last_update";
$proto58["m_columns"][] = "pdf_estimated_average";
$proto58["m_columns"][] = "pdf_estimated_average1";
$proto58["m_columns"][] = "pdf_estimated_average2";
$proto58["m_columns"][] = "pdf_actual_average";
$proto58["m_columns"][] = "price";
$obj = new SQLTable($proto58);

$proto57["m_table"] = $obj;
$proto57["m_sql"] = "LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto57["m_alias"] = "";
$proto57["m_srcTableName"] = "14704 Daily Report  Team";
$proto59=array();
$proto59["m_sql"] = "jobfile.project_id = pdf.pdf_id";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report  Team"
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "= pdf.pdf_id";
$proto59["m_havingmode"] = false;
$proto59["m_inBrackets"] = false;
$proto59["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto59);

$proto57["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto57);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto61=array();
						$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "14704 Daily Report  Team"
));

$proto61["m_column"]=$obj;
$obj = new SQLGroupByItem($proto61);

$proto0["m_groupby"][]=$obj;
												$proto63=array();
						$proto64=array();
$proto64["m_functiontype"] = "SQLF_CUSTOM";
$proto64["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.end2_date"
));

$proto64["m_arguments"][]=$obj;
$proto64["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto64);

$proto63["m_column"]=$obj;
$obj = new SQLGroupByItem($proto63);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto66=array();
						$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report  Team"
));

$proto66["m_column"]=$obj;
$proto66["m_bAsc"] = 0;
$proto66["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto66);

$proto0["m_orderby"][]=$obj;					
												$proto68=array();
						$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "14704 Daily Report  Team"
));

$proto68["m_column"]=$obj;
$proto68["m_bAsc"] = 1;
$proto68["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto68);

$proto0["m_orderby"][]=$obj;					
												$proto70=array();
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report  Team"
));

$proto70["m_column"]=$obj;
$proto70["m_bAsc"] = 0;
$proto70["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto70);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="14704 Daily Report  Team";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_14704_Daily_Report__Team = createSqlQuery_14704_Daily_Report__Team();


	
												
	
$tdata14704_Daily_Report__Team[".sqlquery"] = $queryData_14704_Daily_Report__Team;

include_once(getabspath("include/14704_Daily_Report__Team_events.php"));
$tableEvents["14704 Daily Report  Team"] = new eventclass_14704_Daily_Report__Team;
$tdata14704_Daily_Report__Team[".hasEvents"] = true;

?>