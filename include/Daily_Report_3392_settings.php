<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDaily_Report_3392 = array();	
	$tdataDaily_Report_3392[".truncateText"] = true;
	$tdataDaily_Report_3392[".NumberOfChars"] = 256; 
	$tdataDaily_Report_3392[".ShortName"] = "Daily_Report_3392";
	$tdataDaily_Report_3392[".OwnerID"] = "";
	$tdataDaily_Report_3392[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsDaily_Report_3392 = array();
$fieldToolTipsDaily_Report_3392 = array();
$pageTitlesDaily_Report_3392 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDaily_Report_3392["English"] = array();
	$fieldToolTipsDaily_Report_3392["English"] = array();
	$pageTitlesDaily_Report_3392["English"] = array();
	$fieldLabelsDaily_Report_3392["English"]["project_id"] = "Project Id";
	$fieldToolTipsDaily_Report_3392["English"]["project_id"] = "";
	$fieldLabelsDaily_Report_3392["English"]["designer2_id"] = "Designer";
	$fieldToolTipsDaily_Report_3392["English"]["designer2_id"] = "";
	$fieldLabelsDaily_Report_3392["English"]["end2_date"] = "Date";
	$fieldToolTipsDaily_Report_3392["English"]["end2_date"] = "";
	$fieldLabelsDaily_Report_3392["English"]["team"] = "Team";
	$fieldToolTipsDaily_Report_3392["English"]["team"] = "";
	$fieldLabelsDaily_Report_3392["English"]["pdf_estimated_average"] = "Pdf ETA Average";
	$fieldToolTipsDaily_Report_3392["English"]["pdf_estimated_average"] = "";
	$fieldLabelsDaily_Report_3392["English"]["files"] = "Files";
	$fieldToolTipsDaily_Report_3392["English"]["files"] = "";
	$fieldLabelsDaily_Report_3392["English"]["eta_total"] = "Eta Total";
	$fieldToolTipsDaily_Report_3392["English"]["eta_total"] = "";
	$fieldLabelsDaily_Report_3392["English"]["eta_avg"] = "Eta Avg";
	$fieldToolTipsDaily_Report_3392["English"]["eta_avg"] = "";
	$fieldLabelsDaily_Report_3392["English"]["taken_time_total"] = "Taken Total";
	$fieldToolTipsDaily_Report_3392["English"]["taken_time_total"] = "";
	$fieldLabelsDaily_Report_3392["English"]["taken_time_avg"] = "Taken Avg";
	$fieldToolTipsDaily_Report_3392["English"]["taken_time_avg"] = "";
	$fieldLabelsDaily_Report_3392["English"]["idle_time"] = "Idle Time";
	$fieldToolTipsDaily_Report_3392["English"]["idle_time"] = "";
	$fieldLabelsDaily_Report_3392["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsDaily_Report_3392["English"]["efficiency"] = "";
	$fieldLabelsDaily_Report_3392["English"]["idle_percentage"] = "Idle %";
	$fieldToolTipsDaily_Report_3392["English"]["idle_percentage"] = "";
	if (count($fieldToolTipsDaily_Report_3392["English"]))
		$tdataDaily_Report_3392[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDaily_Report_3392[""] = array();
	$fieldToolTipsDaily_Report_3392[""] = array();
	$pageTitlesDaily_Report_3392[""] = array();
	if (count($fieldToolTipsDaily_Report_3392[""]))
		$tdataDaily_Report_3392[".isUseToolTips"] = true;
}
	
	
	$tdataDaily_Report_3392[".NCSearch"] = true;



$tdataDaily_Report_3392[".shortTableName"] = "Daily_Report_3392";
$tdataDaily_Report_3392[".nSecOptions"] = 0;
$tdataDaily_Report_3392[".recsPerRowList"] = 1;
$tdataDaily_Report_3392[".recsPerRowPrint"] = 1;
$tdataDaily_Report_3392[".mainTableOwnerID"] = "";
$tdataDaily_Report_3392[".moveNext"] = 1;
$tdataDaily_Report_3392[".entityType"] = 2;

$tdataDaily_Report_3392[".strOriginalTableName"] = "jobfile";




$tdataDaily_Report_3392[".showAddInPopup"] = false;

$tdataDaily_Report_3392[".showEditInPopup"] = false;

$tdataDaily_Report_3392[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDaily_Report_3392[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDaily_Report_3392[".fieldsForRegister"] = array();

$tdataDaily_Report_3392[".listAjax"] = false;

	$tdataDaily_Report_3392[".audit"] = false;

	$tdataDaily_Report_3392[".locking"] = false;


$tdataDaily_Report_3392[".add"] = true;
$tdataDaily_Report_3392[".afterAddAction"] = 1;
$tdataDaily_Report_3392[".closePopupAfterAdd"] = 1;
$tdataDaily_Report_3392[".afterAddActionDetTable"] = "";

$tdataDaily_Report_3392[".list"] = true;

$tdataDaily_Report_3392[".inlineAdd"] = true;


$tdataDaily_Report_3392[".exportTo"] = true;

$tdataDaily_Report_3392[".printFriendly"] = true;


$tdataDaily_Report_3392[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDaily_Report_3392[".searchSaving"] = false;
//

$tdataDaily_Report_3392[".showSearchPanel"] = true;
		$tdataDaily_Report_3392[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDaily_Report_3392[".isUseAjaxSuggest"] = false;
else 
	$tdataDaily_Report_3392[".isUseAjaxSuggest"] = true;



																																																																																																																																			
$tdataDaily_Report_3392[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDaily_Report_3392[".isUseTimeForSearch"] = false;





$tdataDaily_Report_3392[".allSearchFields"] = array();
$tdataDaily_Report_3392[".filterFields"] = array();
$tdataDaily_Report_3392[".requiredSearchFields"] = array();

$tdataDaily_Report_3392[".allSearchFields"][] = "end2_date";
	$tdataDaily_Report_3392[".allSearchFields"][] = "team";
	$tdataDaily_Report_3392[".allSearchFields"][] = "designer2_id";
	$tdataDaily_Report_3392[".allSearchFields"][] = "project_id";
	$tdataDaily_Report_3392[".allSearchFields"][] = "files";
	$tdataDaily_Report_3392[".allSearchFields"][] = "pdf_estimated_average";
	$tdataDaily_Report_3392[".allSearchFields"][] = "eta_total";
	$tdataDaily_Report_3392[".allSearchFields"][] = "eta_avg";
	$tdataDaily_Report_3392[".allSearchFields"][] = "taken_time_total";
	$tdataDaily_Report_3392[".allSearchFields"][] = "taken_time_avg";
	$tdataDaily_Report_3392[".allSearchFields"][] = "efficiency";
	$tdataDaily_Report_3392[".allSearchFields"][] = "idle_time";
	$tdataDaily_Report_3392[".allSearchFields"][] = "idle_percentage";
	

$tdataDaily_Report_3392[".googleLikeFields"] = array();
$tdataDaily_Report_3392[".googleLikeFields"][] = "end2_date";
$tdataDaily_Report_3392[".googleLikeFields"][] = "team";
$tdataDaily_Report_3392[".googleLikeFields"][] = "designer2_id";
$tdataDaily_Report_3392[".googleLikeFields"][] = "project_id";
$tdataDaily_Report_3392[".googleLikeFields"][] = "files";
$tdataDaily_Report_3392[".googleLikeFields"][] = "pdf_estimated_average";
$tdataDaily_Report_3392[".googleLikeFields"][] = "eta_total";
$tdataDaily_Report_3392[".googleLikeFields"][] = "eta_avg";
$tdataDaily_Report_3392[".googleLikeFields"][] = "taken_time_total";
$tdataDaily_Report_3392[".googleLikeFields"][] = "taken_time_avg";
$tdataDaily_Report_3392[".googleLikeFields"][] = "efficiency";
$tdataDaily_Report_3392[".googleLikeFields"][] = "idle_time";
$tdataDaily_Report_3392[".googleLikeFields"][] = "idle_percentage";


$tdataDaily_Report_3392[".advSearchFields"] = array();
$tdataDaily_Report_3392[".advSearchFields"][] = "end2_date";
$tdataDaily_Report_3392[".advSearchFields"][] = "team";
$tdataDaily_Report_3392[".advSearchFields"][] = "designer2_id";
$tdataDaily_Report_3392[".advSearchFields"][] = "project_id";
$tdataDaily_Report_3392[".advSearchFields"][] = "files";
$tdataDaily_Report_3392[".advSearchFields"][] = "pdf_estimated_average";
$tdataDaily_Report_3392[".advSearchFields"][] = "eta_total";
$tdataDaily_Report_3392[".advSearchFields"][] = "eta_avg";
$tdataDaily_Report_3392[".advSearchFields"][] = "taken_time_total";
$tdataDaily_Report_3392[".advSearchFields"][] = "taken_time_avg";
$tdataDaily_Report_3392[".advSearchFields"][] = "efficiency";
$tdataDaily_Report_3392[".advSearchFields"][] = "idle_time";
$tdataDaily_Report_3392[".advSearchFields"][] = "idle_percentage";

$tdataDaily_Report_3392[".tableType"] = "report";

$tdataDaily_Report_3392[".printerPageOrientation"] = 0;
$tdataDaily_Report_3392[".nPrinterPageScale"] = 100;

$tdataDaily_Report_3392[".nPrinterSplitRecords"] = 40;

$tdataDaily_Report_3392[".nPrinterPDFSplitRecords"] = 40;



$tdataDaily_Report_3392[".geocodingEnabled"] = false;

//report settings
$tdataDaily_Report_3392[".printReportLayout"] = 3;	

$tdataDaily_Report_3392[".reportPrintPartitionType"] = 0;	
$tdataDaily_Report_3392[".reportPrintGroupsPerPage"] = 3;	
	$tdataDaily_Report_3392[".lowGroup"] = 2;



$tdataDaily_Report_3392[".reportGroupFields"] = true;
$tdataDaily_Report_3392[".pageSize"] = 1;
$tdataDaily_Report_3392[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "end2_date";
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
$tdataDaily_Report_3392[".reportGroupFieldsData"] = $reportGroupFields;


$tdataDaily_Report_3392[".isExistTotalFields"] = true;




$tdataDaily_Report_3392[".repShowDet"] = true;

$tdataDaily_Report_3392[".reportLayout"] = 3;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY jobfile.end2_date DESC, `user`.team, jobfile.designer2_id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDaily_Report_3392[".strOrderBy"] = $tstrOrderBy;

$tdataDaily_Report_3392[".orderindexes"] = array();
$tdataDaily_Report_3392[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "jobfile.end2_date");
$tdataDaily_Report_3392[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "`user`.team");
$tdataDaily_Report_3392[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "jobfile.designer2_id");

$tdataDaily_Report_3392[".sqlHead"] = "SELECT jobfile.end2_date,  `user`.team,  jobfile.designer2_id,  jobfile.project_id,  COUNT(*) AS files,  pdf.pdf_estimated_average,  SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))) AS eta_total,  SEC_TO_TIME(AVG(TIME_TO_SEC(pdf.pdf_estimated_average))) AS eta_avg,  SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_total,  SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_avg,  (TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<60,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100 AS efficiency,  IF(SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.designer2_time)))<0, IF((SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.designer2_time)))) < 0, '00:00:00', (SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.designer2_time))))), (SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.designer2_time))))) AS idle_time,  IF((((25200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(25200)) < 0, (IF((((43200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(43200)) < 0, 0, (((43200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(43200)))), (((25200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(25200))) AS idle_percentage";
$tdataDaily_Report_3392[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$tdataDaily_Report_3392[".sqlWhereExpr"] = "jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.designer2_time) > '0' AND subdiv_id=12";
$tdataDaily_Report_3392[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDaily_Report_3392[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDaily_Report_3392[".arrGroupsPerPage"] = $arrGPP;

$tdataDaily_Report_3392[".highlightSearchResults"] = true;

$tableKeysDaily_Report_3392 = array();
$tdataDaily_Report_3392[".Keys"] = $tableKeysDaily_Report_3392;

$tdataDaily_Report_3392[".listFields"] = array();
$tdataDaily_Report_3392[".listFields"][] = "end2_date";
$tdataDaily_Report_3392[".listFields"][] = "team";
$tdataDaily_Report_3392[".listFields"][] = "designer2_id";
$tdataDaily_Report_3392[".listFields"][] = "project_id";
$tdataDaily_Report_3392[".listFields"][] = "files";
$tdataDaily_Report_3392[".listFields"][] = "pdf_estimated_average";
$tdataDaily_Report_3392[".listFields"][] = "eta_total";
$tdataDaily_Report_3392[".listFields"][] = "eta_avg";
$tdataDaily_Report_3392[".listFields"][] = "taken_time_total";
$tdataDaily_Report_3392[".listFields"][] = "taken_time_avg";
$tdataDaily_Report_3392[".listFields"][] = "efficiency";
$tdataDaily_Report_3392[".listFields"][] = "idle_time";
$tdataDaily_Report_3392[".listFields"][] = "idle_percentage";

$tdataDaily_Report_3392[".hideMobileList"] = array();


$tdataDaily_Report_3392[".viewFields"] = array();
$tdataDaily_Report_3392[".viewFields"][] = "end2_date";
$tdataDaily_Report_3392[".viewFields"][] = "team";
$tdataDaily_Report_3392[".viewFields"][] = "designer2_id";
$tdataDaily_Report_3392[".viewFields"][] = "project_id";
$tdataDaily_Report_3392[".viewFields"][] = "files";
$tdataDaily_Report_3392[".viewFields"][] = "pdf_estimated_average";
$tdataDaily_Report_3392[".viewFields"][] = "eta_total";
$tdataDaily_Report_3392[".viewFields"][] = "eta_avg";
$tdataDaily_Report_3392[".viewFields"][] = "taken_time_total";
$tdataDaily_Report_3392[".viewFields"][] = "taken_time_avg";
$tdataDaily_Report_3392[".viewFields"][] = "efficiency";
$tdataDaily_Report_3392[".viewFields"][] = "idle_time";
$tdataDaily_Report_3392[".viewFields"][] = "idle_percentage";

$tdataDaily_Report_3392[".addFields"] = array();
$tdataDaily_Report_3392[".addFields"][] = "end2_date";
$tdataDaily_Report_3392[".addFields"][] = "designer2_id";
$tdataDaily_Report_3392[".addFields"][] = "project_id";

$tdataDaily_Report_3392[".masterListFields"] = array();
$tdataDaily_Report_3392[".masterListFields"][] = "end2_date";
$tdataDaily_Report_3392[".masterListFields"][] = "team";
$tdataDaily_Report_3392[".masterListFields"][] = "designer2_id";
$tdataDaily_Report_3392[".masterListFields"][] = "project_id";
$tdataDaily_Report_3392[".masterListFields"][] = "files";
$tdataDaily_Report_3392[".masterListFields"][] = "pdf_estimated_average";
$tdataDaily_Report_3392[".masterListFields"][] = "eta_total";
$tdataDaily_Report_3392[".masterListFields"][] = "eta_avg";
$tdataDaily_Report_3392[".masterListFields"][] = "taken_time_total";
$tdataDaily_Report_3392[".masterListFields"][] = "taken_time_avg";
$tdataDaily_Report_3392[".masterListFields"][] = "efficiency";
$tdataDaily_Report_3392[".masterListFields"][] = "idle_time";
$tdataDaily_Report_3392[".masterListFields"][] = "idle_percentage";

$tdataDaily_Report_3392[".inlineAddFields"] = array();
$tdataDaily_Report_3392[".inlineAddFields"][] = "end2_date";
$tdataDaily_Report_3392[".inlineAddFields"][] = "designer2_id";
$tdataDaily_Report_3392[".inlineAddFields"][] = "project_id";

$tdataDaily_Report_3392[".editFields"] = array();
$tdataDaily_Report_3392[".editFields"][] = "end2_date";
$tdataDaily_Report_3392[".editFields"][] = "designer2_id";
$tdataDaily_Report_3392[".editFields"][] = "project_id";

$tdataDaily_Report_3392[".inlineEditFields"] = array();
$tdataDaily_Report_3392[".inlineEditFields"][] = "end2_date";
$tdataDaily_Report_3392[".inlineEditFields"][] = "designer2_id";
$tdataDaily_Report_3392[".inlineEditFields"][] = "project_id";

$tdataDaily_Report_3392[".exportFields"] = array();
$tdataDaily_Report_3392[".exportFields"][] = "end2_date";
$tdataDaily_Report_3392[".exportFields"][] = "team";
$tdataDaily_Report_3392[".exportFields"][] = "designer2_id";
$tdataDaily_Report_3392[".exportFields"][] = "project_id";
$tdataDaily_Report_3392[".exportFields"][] = "files";
$tdataDaily_Report_3392[".exportFields"][] = "pdf_estimated_average";
$tdataDaily_Report_3392[".exportFields"][] = "eta_total";
$tdataDaily_Report_3392[".exportFields"][] = "eta_avg";
$tdataDaily_Report_3392[".exportFields"][] = "taken_time_total";
$tdataDaily_Report_3392[".exportFields"][] = "taken_time_avg";
$tdataDaily_Report_3392[".exportFields"][] = "efficiency";
$tdataDaily_Report_3392[".exportFields"][] = "idle_time";
$tdataDaily_Report_3392[".exportFields"][] = "idle_percentage";

$tdataDaily_Report_3392[".importFields"] = array();
$tdataDaily_Report_3392[".importFields"][] = "end2_date";
$tdataDaily_Report_3392[".importFields"][] = "team";
$tdataDaily_Report_3392[".importFields"][] = "designer2_id";
$tdataDaily_Report_3392[".importFields"][] = "project_id";
$tdataDaily_Report_3392[".importFields"][] = "files";
$tdataDaily_Report_3392[".importFields"][] = "pdf_estimated_average";
$tdataDaily_Report_3392[".importFields"][] = "eta_total";
$tdataDaily_Report_3392[".importFields"][] = "eta_avg";
$tdataDaily_Report_3392[".importFields"][] = "taken_time_total";
$tdataDaily_Report_3392[".importFields"][] = "taken_time_avg";
$tdataDaily_Report_3392[".importFields"][] = "efficiency";
$tdataDaily_Report_3392[".importFields"][] = "idle_time";
$tdataDaily_Report_3392[".importFields"][] = "idle_percentage";

$tdataDaily_Report_3392[".printFields"] = array();
$tdataDaily_Report_3392[".printFields"][] = "end2_date";
$tdataDaily_Report_3392[".printFields"][] = "team";
$tdataDaily_Report_3392[".printFields"][] = "designer2_id";
$tdataDaily_Report_3392[".printFields"][] = "project_id";
$tdataDaily_Report_3392[".printFields"][] = "files";
$tdataDaily_Report_3392[".printFields"][] = "pdf_estimated_average";
$tdataDaily_Report_3392[".printFields"][] = "eta_total";
$tdataDaily_Report_3392[".printFields"][] = "eta_avg";
$tdataDaily_Report_3392[".printFields"][] = "taken_time_total";
$tdataDaily_Report_3392[".printFields"][] = "taken_time_avg";
$tdataDaily_Report_3392[".printFields"][] = "efficiency";
$tdataDaily_Report_3392[".printFields"][] = "idle_time";
$tdataDaily_Report_3392[".printFields"][] = "idle_percentage";

//	end2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "end2_date";
	$fdata["GoodName"] = "end2_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Daily_Report_3392","end2_date"); 
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

	

	
	$tdataDaily_Report_3392["end2_date"] = $fdata;
//	team
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team";
	$fdata["GoodName"] = "team";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Daily_Report_3392","team"); 
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

	

	
	$tdataDaily_Report_3392["team"] = $fdata;
//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Daily_Report_3392","designer2_id"); 
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

	

	
	$tdataDaily_Report_3392["designer2_id"] = $fdata;
//	project_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "project_id";
	$fdata["GoodName"] = "project_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Daily_Report_3392","project_id"); 
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

	

	
	$tdataDaily_Report_3392["project_id"] = $fdata;
//	files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "files";
	$fdata["GoodName"] = "files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_3392","files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
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

	

	
	$tdataDaily_Report_3392["files"] = $fdata;
//	pdf_estimated_average
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pdf_estimated_average";
	$fdata["GoodName"] = "pdf_estimated_average";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Daily_Report_3392","pdf_estimated_average"); 
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

	

	
	$tdataDaily_Report_3392["pdf_estimated_average"] = $fdata;
//	eta_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "eta_total";
	$fdata["GoodName"] = "eta_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_3392","eta_total"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
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

	

	
	$tdataDaily_Report_3392["eta_total"] = $fdata;
//	eta_avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "eta_avg";
	$fdata["GoodName"] = "eta_avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_3392","eta_avg"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
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

	

	
	$tdataDaily_Report_3392["eta_avg"] = $fdata;
//	taken_time_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "taken_time_total";
	$fdata["GoodName"] = "taken_time_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_3392","taken_time_total"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
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

	

	
	$tdataDaily_Report_3392["taken_time_total"] = $fdata;
//	taken_time_avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "taken_time_avg";
	$fdata["GoodName"] = "taken_time_avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_3392","taken_time_avg"); 
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

	

	
	$tdataDaily_Report_3392["taken_time_avg"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_3392","efficiency"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "efficiency"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<60,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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

	

	
	$tdataDaily_Report_3392["efficiency"] = $fdata;
//	idle_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "idle_time";
	$fdata["GoodName"] = "idle_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_3392","idle_time"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idle_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IF(SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.designer2_time)))<0, IF((SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.designer2_time)))) < 0, '00:00:00', (SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.designer2_time))))), (SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.designer2_time)))))";
	
		
		
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

	

	
	$tdataDaily_Report_3392["idle_time"] = $fdata;
//	idle_percentage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "idle_percentage";
	$fdata["GoodName"] = "idle_percentage";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_3392","idle_percentage"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idle_percentage"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IF((((25200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(25200)) < 0, (IF((((43200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(43200)) < 0, 0, (((43200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(43200)))), (((25200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(25200)))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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

	

	
	$tdataDaily_Report_3392["idle_percentage"] = $fdata;

	
$tables_data["Daily Report 3392"]=&$tdataDaily_Report_3392;
$field_labels["Daily_Report_3392"] = &$fieldLabelsDaily_Report_3392;
$fieldToolTips["Daily Report 3392"] = &$fieldToolTipsDaily_Report_3392;
$page_titles["Daily_Report_3392"] = &$pageTitlesDaily_Report_3392;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Daily Report 3392"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Daily Report 3392"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Daily_Report_3392()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile.end2_date,  `user`.team,  jobfile.designer2_id,  jobfile.project_id,  COUNT(*) AS files,  pdf.pdf_estimated_average,  SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))) AS eta_total,  SEC_TO_TIME(AVG(TIME_TO_SEC(pdf.pdf_estimated_average))) AS eta_avg,  SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_total,  SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_avg,  (TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<60,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100 AS efficiency,  IF(SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.designer2_time)))<0, IF((SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.designer2_time)))) < 0, '00:00:00', (SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.designer2_time))))), (SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.designer2_time))))) AS idle_time,  IF((((25200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(25200)) < 0, (IF((((43200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(43200)) < 0, 0, (((43200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(43200)))), (((25200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(25200))) AS idle_percentage";
$proto0["m_strFrom"] = "FROM jobfile  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto0["m_strWhere"] = "jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.designer2_time) > '0' AND subdiv_id=12";
$proto0["m_strOrderBy"] = "ORDER BY jobfile.end2_date DESC, `user`.team, jobfile.designer2_id DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.designer2_time) > '0' AND subdiv_id=12";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.designer2_time) > '0' AND subdiv_id=12"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.designer2_id IS NOT NULL";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report 3392"
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
	"m_srcTableName" => "Daily Report 3392"
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
	"m_srcTableName" => "Daily Report 3392"
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
	"m_srcTableName" => "Daily Report 3392"
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
						$proto16=array();
$proto16["m_sql"] = "subdiv_id=12";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "subdiv_id"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "=12";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
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
	"m_srcTableName" => "Daily Report 3392"
));

$proto20["m_sql"] = "jobfile.end2_date";
$proto20["m_srcTableName"] = "Daily Report 3392";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Daily Report 3392"
));

$proto22["m_sql"] = "`user`.team";
$proto22["m_srcTableName"] = "Daily Report 3392";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report 3392"
));

$proto24["m_sql"] = "jobfile.designer2_id";
$proto24["m_srcTableName"] = "Daily Report 3392";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report 3392"
));

$proto26["m_sql"] = "jobfile.project_id";
$proto26["m_srcTableName"] = "Daily Report 3392";
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
$proto28["m_srcTableName"] = "Daily Report 3392";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "files";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Daily Report 3392"
));

$proto31["m_sql"] = "pdf.pdf_estimated_average";
$proto31["m_srcTableName"] = "Daily Report 3392";
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
$proto33["m_srcTableName"] = "Daily Report 3392";
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
$proto36["m_srcTableName"] = "Daily Report 3392";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "eta_avg";
$obj = new SQLFieldListItem($proto36);

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
$proto39["m_srcTableName"] = "Daily Report 3392";
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
$proto42["m_srcTableName"] = "Daily Report 3392";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "taken_time_avg";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<60,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100"
));

$proto45["m_sql"] = "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<60,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100";
$proto45["m_srcTableName"] = "Daily Report 3392";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$proto48=array();
$proto48["m_functiontype"] = "SQLF_CUSTOM";
$proto48["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.designer2_time)))<0"
));

$proto48["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IF((SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.designer2_time)))) < 0, '00:00:00', (SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.designer2_time)))))"
));

$proto48["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "(SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.designer2_time))))"
));

$proto48["m_arguments"][]=$obj;
$proto48["m_strFunctionName"] = "IF";
$obj = new SQLFunctionCall($proto48);

$proto47["m_sql"] = "IF(SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.designer2_time)))<0, IF((SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.designer2_time)))) < 0, '00:00:00', (SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.designer2_time))))), (SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.designer2_time)))))";
$proto47["m_srcTableName"] = "Daily Report 3392";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "idle_time";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$proto53=array();
$proto53["m_functiontype"] = "SQLF_CUSTOM";
$proto53["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(((25200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(25200)) < 0"
));

$proto53["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "(IF((((43200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(43200)) < 0, 0, (((43200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(43200))))"
));

$proto53["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "(((25200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(25200))"
));

$proto53["m_arguments"][]=$obj;
$proto53["m_strFunctionName"] = "IF";
$obj = new SQLFunctionCall($proto53);

$proto52["m_sql"] = "IF((((25200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(25200)) < 0, (IF((((43200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(43200)) < 0, 0, (((43200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(43200)))), (((25200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(25200)))";
$proto52["m_srcTableName"] = "Daily Report 3392";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "idle_percentage";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto57=array();
$proto57["m_link"] = "SQLL_MAIN";
			$proto58=array();
$proto58["m_strName"] = "jobfile";
$proto58["m_srcTableName"] = "Daily Report 3392";
$proto58["m_columns"] = array();
$proto58["m_columns"][] = "jobfile_id";
$proto58["m_columns"][] = "file_url";
$proto58["m_columns"][] = "client_id";
$proto58["m_columns"][] = "work_id";
$proto58["m_columns"][] = "job_id";
$proto58["m_columns"][] = "project_id";
$proto58["m_columns"][] = "folder_name";
$proto58["m_columns"][] = "filename";
$proto58["m_columns"][] = "jobfile_type";
$proto58["m_columns"][] = "jobfile_note";
$proto58["m_columns"][] = "jobfile_status_id";
$proto58["m_columns"][] = "downloader_id";
$proto58["m_columns"][] = "distributor_id";
$proto58["m_columns"][] = "designer_id";
$proto58["m_columns"][] = "qc_id";
$proto58["m_columns"][] = "uploader_id";
$proto58["m_columns"][] = "notifier_id";
$proto58["m_columns"][] = "rejector_id";
$proto58["m_columns"][] = "download_date";
$proto58["m_columns"][] = "distribute_date";
$proto58["m_columns"][] = "start_date";
$proto58["m_columns"][] = "end_date";
$proto58["m_columns"][] = "designer_time";
$proto58["m_columns"][] = "qcstart_date";
$proto58["m_columns"][] = "qcend_date";
$proto58["m_columns"][] = "qc_time";
$proto58["m_columns"][] = "upload_date";
$proto58["m_columns"][] = "notify_date";
$proto58["m_columns"][] = "reject_date";
$proto58["m_columns"][] = "reject_reason";
$proto58["m_columns"][] = "designer2_id";
$proto58["m_columns"][] = "start2_date";
$proto58["m_columns"][] = "end2_date";
$proto58["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto58);

$proto57["m_table"] = $obj;
$proto57["m_sql"] = "jobfile";
$proto57["m_alias"] = "";
$proto57["m_srcTableName"] = "Daily Report 3392";
$proto59=array();
$proto59["m_sql"] = "";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "";
$proto59["m_havingmode"] = false;
$proto59["m_inBrackets"] = false;
$proto59["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto59);

$proto57["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto57);

$proto0["m_fromlist"][]=$obj;
												$proto61=array();
$proto61["m_link"] = "SQLL_LEFTJOIN";
			$proto62=array();
$proto62["m_strName"] = "user";
$proto62["m_srcTableName"] = "Daily Report 3392";
$proto62["m_columns"] = array();
$proto62["m_columns"][] = "user_id";
$proto62["m_columns"][] = "user_status";
$proto62["m_columns"][] = "username";
$proto62["m_columns"][] = "password";
$proto62["m_columns"][] = "department_id";
$proto62["m_columns"][] = "subdiv_id";
$proto62["m_columns"][] = "group_id";
$proto62["m_columns"][] = "designation";
$proto62["m_columns"][] = "employee_id";
$proto62["m_columns"][] = "fname";
$proto62["m_columns"][] = "lname";
$proto62["m_columns"][] = "nickname";
$proto62["m_columns"][] = "email";
$proto62["m_columns"][] = "phone";
$proto62["m_columns"][] = "mobile";
$proto62["m_columns"][] = "log";
$proto62["m_columns"][] = "images_assigned";
$proto62["m_columns"][] = "user_picture";
$proto62["m_columns"][] = "team";
$proto62["m_columns"][] = "ad_group_id";
$proto62["m_columns"][] = "lastaccess";
$obj = new SQLTable($proto62);

$proto61["m_table"] = $obj;
$proto61["m_sql"] = "LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$proto61["m_alias"] = "";
$proto61["m_srcTableName"] = "Daily Report 3392";
$proto63=array();
$proto63["m_sql"] = "jobfile.designer2_id = `user`.user_id";
$proto63["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report 3392"
));

$proto63["m_column"]=$obj;
$proto63["m_contained"] = array();
$proto63["m_strCase"] = "= `user`.user_id";
$proto63["m_havingmode"] = false;
$proto63["m_inBrackets"] = false;
$proto63["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto63);

$proto61["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto61);

$proto0["m_fromlist"][]=$obj;
												$proto65=array();
$proto65["m_link"] = "SQLL_LEFTJOIN";
			$proto66=array();
$proto66["m_strName"] = "pdf";
$proto66["m_srcTableName"] = "Daily Report 3392";
$proto66["m_columns"] = array();
$proto66["m_columns"][] = "pdf_id";
$proto66["m_columns"][] = "pdf_name";
$proto66["m_columns"][] = "client_id";
$proto66["m_columns"][] = "pdf_location";
$proto66["m_columns"][] = "last_update";
$proto66["m_columns"][] = "pdf_estimated_average";
$proto66["m_columns"][] = "pdf_estimated_average1";
$proto66["m_columns"][] = "pdf_estimated_average2";
$proto66["m_columns"][] = "pdf_actual_average";
$obj = new SQLTable($proto66);

$proto65["m_table"] = $obj;
$proto65["m_sql"] = "LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto65["m_alias"] = "";
$proto65["m_srcTableName"] = "Daily Report 3392";
$proto67=array();
$proto67["m_sql"] = "jobfile.project_id = pdf.pdf_id";
$proto67["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report 3392"
));

$proto67["m_column"]=$obj;
$proto67["m_contained"] = array();
$proto67["m_strCase"] = "= pdf.pdf_id";
$proto67["m_havingmode"] = false;
$proto67["m_inBrackets"] = false;
$proto67["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto67);

$proto65["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto65);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto69=array();
						$proto70=array();
$proto70["m_functiontype"] = "SQLF_CUSTOM";
$proto70["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.end2_date"
));

$proto70["m_arguments"][]=$obj;
$proto70["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto70);

$proto69["m_column"]=$obj;
$obj = new SQLGroupByItem($proto69);

$proto0["m_groupby"][]=$obj;
												$proto72=array();
						$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Daily Report 3392"
));

$proto72["m_column"]=$obj;
$obj = new SQLGroupByItem($proto72);

$proto0["m_groupby"][]=$obj;
												$proto74=array();
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report 3392"
));

$proto74["m_column"]=$obj;
$obj = new SQLGroupByItem($proto74);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto76=array();
						$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report 3392"
));

$proto76["m_column"]=$obj;
$proto76["m_bAsc"] = 0;
$proto76["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto76);

$proto0["m_orderby"][]=$obj;					
												$proto78=array();
						$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Daily Report 3392"
));

$proto78["m_column"]=$obj;
$proto78["m_bAsc"] = 1;
$proto78["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto78);

$proto0["m_orderby"][]=$obj;					
												$proto80=array();
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report 3392"
));

$proto80["m_column"]=$obj;
$proto80["m_bAsc"] = 0;
$proto80["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto80);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Daily Report 3392";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Daily_Report_3392 = createSqlQuery_Daily_Report_3392();


	
													
	
$tdataDaily_Report_3392[".sqlquery"] = $queryData_Daily_Report_3392;

$tableEvents["Daily Report 3392"] = new eventsBase;
$tdataDaily_Report_3392[".hasEvents"] = false;

?>