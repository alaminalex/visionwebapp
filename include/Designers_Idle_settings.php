<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDesigners_Idle = array();	
	$tdataDesigners_Idle[".truncateText"] = true;
	$tdataDesigners_Idle[".NumberOfChars"] = 256; 
	$tdataDesigners_Idle[".ShortName"] = "Designers_Idle";
	$tdataDesigners_Idle[".OwnerID"] = "";
	$tdataDesigners_Idle[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsDesigners_Idle = array();
$fieldToolTipsDesigners_Idle = array();
$pageTitlesDesigners_Idle = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDesigners_Idle["English"] = array();
	$fieldToolTipsDesigners_Idle["English"] = array();
	$pageTitlesDesigners_Idle["English"] = array();
	$fieldLabelsDesigners_Idle["English"]["project_id"] = "Project Id";
	$fieldToolTipsDesigners_Idle["English"]["project_id"] = "";
	$fieldLabelsDesigners_Idle["English"]["designer2_id"] = "Designer";
	$fieldToolTipsDesigners_Idle["English"]["designer2_id"] = "";
	$fieldLabelsDesigners_Idle["English"]["team"] = "Team";
	$fieldToolTipsDesigners_Idle["English"]["team"] = "";
	$fieldLabelsDesigners_Idle["English"]["eta_total"] = "Eta Total";
	$fieldToolTipsDesigners_Idle["English"]["eta_total"] = "";
	$fieldLabelsDesigners_Idle["English"]["eta_avg"] = "Eta Avg";
	$fieldToolTipsDesigners_Idle["English"]["eta_avg"] = "";
	$fieldLabelsDesigners_Idle["English"]["taken_time_total"] = "Taken Total";
	$fieldToolTipsDesigners_Idle["English"]["taken_time_total"] = "";
	$fieldLabelsDesigners_Idle["English"]["taken_time_avg"] = "Taken Avg";
	$fieldToolTipsDesigners_Idle["English"]["taken_time_avg"] = "";
	$fieldLabelsDesigners_Idle["English"]["total_images"] = "Total Images";
	$fieldToolTipsDesigners_Idle["English"]["total_images"] = "";
	$fieldLabelsDesigners_Idle["English"]["idle_time"] = "Idle Time";
	$fieldToolTipsDesigners_Idle["English"]["idle_time"] = "";
	$fieldLabelsDesigners_Idle["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsDesigners_Idle["English"]["efficiency"] = "";
	$fieldLabelsDesigners_Idle["English"]["idle_percentage"] = "Idle %";
	$fieldToolTipsDesigners_Idle["English"]["idle_percentage"] = "";
	$fieldLabelsDesigners_Idle["English"]["rejected"] = "Rejected";
	$fieldToolTipsDesigners_Idle["English"]["rejected"] = "";
	$fieldLabelsDesigners_Idle["English"]["end2_date"] = "Date";
	$fieldToolTipsDesigners_Idle["English"]["end2_date"] = "";
	$fieldLabelsDesigners_Idle["English"]["taken_time_total_reject_qc"] = "Image Time";
	$fieldToolTipsDesigners_Idle["English"]["taken_time_total_reject_qc"] = "";
	$fieldLabelsDesigners_Idle["English"]["username"] = "Username";
	$fieldToolTipsDesigners_Idle["English"]["username"] = "";
	if (count($fieldToolTipsDesigners_Idle["English"]))
		$tdataDesigners_Idle[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDesigners_Idle[""] = array();
	$fieldToolTipsDesigners_Idle[""] = array();
	$pageTitlesDesigners_Idle[""] = array();
	if (count($fieldToolTipsDesigners_Idle[""]))
		$tdataDesigners_Idle[".isUseToolTips"] = true;
}
	
	
	$tdataDesigners_Idle[".NCSearch"] = true;



$tdataDesigners_Idle[".shortTableName"] = "Designers_Idle";
$tdataDesigners_Idle[".nSecOptions"] = 0;
$tdataDesigners_Idle[".recsPerRowList"] = 1;
$tdataDesigners_Idle[".recsPerRowPrint"] = 1;
$tdataDesigners_Idle[".mainTableOwnerID"] = "";
$tdataDesigners_Idle[".moveNext"] = 1;
$tdataDesigners_Idle[".entityType"] = 2;

$tdataDesigners_Idle[".strOriginalTableName"] = "jobfile";




$tdataDesigners_Idle[".showAddInPopup"] = false;

$tdataDesigners_Idle[".showEditInPopup"] = false;

$tdataDesigners_Idle[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDesigners_Idle[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDesigners_Idle[".fieldsForRegister"] = array();

$tdataDesigners_Idle[".listAjax"] = false;

	$tdataDesigners_Idle[".audit"] = false;

	$tdataDesigners_Idle[".locking"] = false;


$tdataDesigners_Idle[".add"] = true;
$tdataDesigners_Idle[".afterAddAction"] = 1;
$tdataDesigners_Idle[".closePopupAfterAdd"] = 1;
$tdataDesigners_Idle[".afterAddActionDetTable"] = "";

$tdataDesigners_Idle[".list"] = true;

$tdataDesigners_Idle[".inlineAdd"] = true;


$tdataDesigners_Idle[".exportTo"] = true;

$tdataDesigners_Idle[".printFriendly"] = true;


$tdataDesigners_Idle[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDesigners_Idle[".searchSaving"] = false;
//

$tdataDesigners_Idle[".showSearchPanel"] = true;
		$tdataDesigners_Idle[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDesigners_Idle[".isUseAjaxSuggest"] = false;
else 
	$tdataDesigners_Idle[".isUseAjaxSuggest"] = true;



																																																																																																																																			
$tdataDesigners_Idle[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDesigners_Idle[".isUseTimeForSearch"] = false;





$tdataDesigners_Idle[".allSearchFields"] = array();
$tdataDesigners_Idle[".filterFields"] = array();
$tdataDesigners_Idle[".requiredSearchFields"] = array();

$tdataDesigners_Idle[".allSearchFields"][] = "end2_date";
	$tdataDesigners_Idle[".allSearchFields"][] = "team";
	$tdataDesigners_Idle[".allSearchFields"][] = "username";
	$tdataDesigners_Idle[".allSearchFields"][] = "total_images";
	$tdataDesigners_Idle[".allSearchFields"][] = "eta_total";
	$tdataDesigners_Idle[".allSearchFields"][] = "eta_avg";
	$tdataDesigners_Idle[".allSearchFields"][] = "taken_time_total";
	$tdataDesigners_Idle[".allSearchFields"][] = "taken_time_total_reject_qc";
	$tdataDesigners_Idle[".allSearchFields"][] = "taken_time_avg";
	$tdataDesigners_Idle[".allSearchFields"][] = "efficiency";
	$tdataDesigners_Idle[".allSearchFields"][] = "idle_time";
	$tdataDesigners_Idle[".allSearchFields"][] = "idle_percentage";
	$tdataDesigners_Idle[".allSearchFields"][] = "rejected";
	

$tdataDesigners_Idle[".googleLikeFields"] = array();
$tdataDesigners_Idle[".googleLikeFields"][] = "end2_date";
$tdataDesigners_Idle[".googleLikeFields"][] = "team";
$tdataDesigners_Idle[".googleLikeFields"][] = "username";
$tdataDesigners_Idle[".googleLikeFields"][] = "designer2_id";
$tdataDesigners_Idle[".googleLikeFields"][] = "project_id";
$tdataDesigners_Idle[".googleLikeFields"][] = "total_images";
$tdataDesigners_Idle[".googleLikeFields"][] = "eta_total";
$tdataDesigners_Idle[".googleLikeFields"][] = "eta_avg";
$tdataDesigners_Idle[".googleLikeFields"][] = "taken_time_total";
$tdataDesigners_Idle[".googleLikeFields"][] = "taken_time_total_reject_qc";
$tdataDesigners_Idle[".googleLikeFields"][] = "taken_time_avg";
$tdataDesigners_Idle[".googleLikeFields"][] = "efficiency";
$tdataDesigners_Idle[".googleLikeFields"][] = "idle_time";
$tdataDesigners_Idle[".googleLikeFields"][] = "idle_percentage";
$tdataDesigners_Idle[".googleLikeFields"][] = "rejected";


$tdataDesigners_Idle[".advSearchFields"] = array();
$tdataDesigners_Idle[".advSearchFields"][] = "end2_date";
$tdataDesigners_Idle[".advSearchFields"][] = "team";
$tdataDesigners_Idle[".advSearchFields"][] = "username";
$tdataDesigners_Idle[".advSearchFields"][] = "designer2_id";
$tdataDesigners_Idle[".advSearchFields"][] = "project_id";
$tdataDesigners_Idle[".advSearchFields"][] = "total_images";
$tdataDesigners_Idle[".advSearchFields"][] = "eta_total";
$tdataDesigners_Idle[".advSearchFields"][] = "eta_avg";
$tdataDesigners_Idle[".advSearchFields"][] = "taken_time_total";
$tdataDesigners_Idle[".advSearchFields"][] = "taken_time_total_reject_qc";
$tdataDesigners_Idle[".advSearchFields"][] = "taken_time_avg";
$tdataDesigners_Idle[".advSearchFields"][] = "efficiency";
$tdataDesigners_Idle[".advSearchFields"][] = "idle_time";
$tdataDesigners_Idle[".advSearchFields"][] = "idle_percentage";
$tdataDesigners_Idle[".advSearchFields"][] = "rejected";

$tdataDesigners_Idle[".tableType"] = "report";

$tdataDesigners_Idle[".printerPageOrientation"] = 0;
$tdataDesigners_Idle[".nPrinterPageScale"] = 100;

$tdataDesigners_Idle[".nPrinterSplitRecords"] = 40;

$tdataDesigners_Idle[".nPrinterPDFSplitRecords"] = 40;



$tdataDesigners_Idle[".geocodingEnabled"] = false;

//report settings
$tdataDesigners_Idle[".printReportLayout"] = 2;	

$tdataDesigners_Idle[".reportPrintPartitionType"] = 0;	
$tdataDesigners_Idle[".reportPrintGroupsPerPage"] = 3;	
	$tdataDesigners_Idle[".lowGroup"] = 2;



$tdataDesigners_Idle[".reportGroupFields"] = true;
$tdataDesigners_Idle[".pageSize"] = 1;
$tdataDesigners_Idle[".showGroupSummaryCount"] = true;
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
$tdataDesigners_Idle[".reportGroupFieldsData"] = $reportGroupFields;






$tdataDesigners_Idle[".repShowDet"] = true;

$tdataDesigners_Idle[".reportLayout"] = 2;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY jobfile.end2_date DESC, `user`.team, `user`.username";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDesigners_Idle[".strOrderBy"] = $tstrOrderBy;

$tdataDesigners_Idle[".orderindexes"] = array();
$tdataDesigners_Idle[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "jobfile.end2_date");
$tdataDesigners_Idle[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "`user`.team");
$tdataDesigners_Idle[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "`user`.username");

$tdataDesigners_Idle[".sqlHead"] = "SELECT jobfile.end2_date,  `user`.team,  `user`.username,  jobfile.designer2_id,  jobfile.project_id,  COUNT(*) AS total_images,  SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))) AS eta_total,  SEC_TO_TIME(AVG(TIME_TO_SEC(pdf.pdf_estimated_average))) AS eta_avg,  SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_total,  SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time)+ (TIME_TO_SEC(IFNULL(rejected_jobfile.cr_designer_time, '00:00:00')))+ (TIME_TO_SEC(IFNULL(jobfile.qc_time, '00:00:00'))))) AS taken_time_total_reject_qc,  SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_avg,  (TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(jobfile.designer2_time))))* 100 AS efficiency,  IF(SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.designer2_time)))<0, IF((SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.designer2_time)))) < 0, '00:00:00', (SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.designer2_time))))), (SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.designer2_time))))) AS idle_time,  IF((((25200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(25200)) < 0, (IF((((43200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(43200)) < 0, 0, (((43200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(43200)))), (((25200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(25200))) AS idle_percentage,  COUNT(rejected_jobfile.jobfile_id) AS rejected";
$tdataDesigners_Idle[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN rejected_jobfile ON jobfile.jobfile_id = rejected_jobfile.jobfile_id  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$tdataDesigners_Idle[".sqlWhereExpr"] = "jobfile.designer2_id IS NOT NULL OR jobfile.end2_date > '0000-00-00 00:00:00' OR (jobfile.filename not like '%retouch%' OR (jobfile.filename not like '%detail_2%')) OR TIME_TO_SEC(jobfile.designer2_time) > '0'";
$tdataDesigners_Idle[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDesigners_Idle[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDesigners_Idle[".arrGroupsPerPage"] = $arrGPP;

$tdataDesigners_Idle[".highlightSearchResults"] = true;

$tableKeysDesigners_Idle = array();
$tdataDesigners_Idle[".Keys"] = $tableKeysDesigners_Idle;

$tdataDesigners_Idle[".listFields"] = array();
$tdataDesigners_Idle[".listFields"][] = "end2_date";
$tdataDesigners_Idle[".listFields"][] = "team";
$tdataDesigners_Idle[".listFields"][] = "username";
$tdataDesigners_Idle[".listFields"][] = "designer2_id";
$tdataDesigners_Idle[".listFields"][] = "project_id";
$tdataDesigners_Idle[".listFields"][] = "total_images";
$tdataDesigners_Idle[".listFields"][] = "eta_total";
$tdataDesigners_Idle[".listFields"][] = "eta_avg";
$tdataDesigners_Idle[".listFields"][] = "taken_time_total";
$tdataDesigners_Idle[".listFields"][] = "taken_time_total_reject_qc";
$tdataDesigners_Idle[".listFields"][] = "taken_time_avg";
$tdataDesigners_Idle[".listFields"][] = "efficiency";
$tdataDesigners_Idle[".listFields"][] = "idle_time";
$tdataDesigners_Idle[".listFields"][] = "idle_percentage";
$tdataDesigners_Idle[".listFields"][] = "rejected";

$tdataDesigners_Idle[".hideMobileList"] = array();


$tdataDesigners_Idle[".viewFields"] = array();
$tdataDesigners_Idle[".viewFields"][] = "end2_date";
$tdataDesigners_Idle[".viewFields"][] = "team";
$tdataDesigners_Idle[".viewFields"][] = "username";
$tdataDesigners_Idle[".viewFields"][] = "designer2_id";
$tdataDesigners_Idle[".viewFields"][] = "project_id";
$tdataDesigners_Idle[".viewFields"][] = "total_images";
$tdataDesigners_Idle[".viewFields"][] = "eta_total";
$tdataDesigners_Idle[".viewFields"][] = "eta_avg";
$tdataDesigners_Idle[".viewFields"][] = "taken_time_total";
$tdataDesigners_Idle[".viewFields"][] = "taken_time_total_reject_qc";
$tdataDesigners_Idle[".viewFields"][] = "taken_time_avg";
$tdataDesigners_Idle[".viewFields"][] = "efficiency";
$tdataDesigners_Idle[".viewFields"][] = "idle_time";
$tdataDesigners_Idle[".viewFields"][] = "idle_percentage";
$tdataDesigners_Idle[".viewFields"][] = "rejected";

$tdataDesigners_Idle[".addFields"] = array();
$tdataDesigners_Idle[".addFields"][] = "end2_date";
$tdataDesigners_Idle[".addFields"][] = "designer2_id";
$tdataDesigners_Idle[".addFields"][] = "project_id";

$tdataDesigners_Idle[".masterListFields"] = array();
$tdataDesigners_Idle[".masterListFields"][] = "end2_date";
$tdataDesigners_Idle[".masterListFields"][] = "team";
$tdataDesigners_Idle[".masterListFields"][] = "username";
$tdataDesigners_Idle[".masterListFields"][] = "designer2_id";
$tdataDesigners_Idle[".masterListFields"][] = "project_id";
$tdataDesigners_Idle[".masterListFields"][] = "total_images";
$tdataDesigners_Idle[".masterListFields"][] = "eta_total";
$tdataDesigners_Idle[".masterListFields"][] = "eta_avg";
$tdataDesigners_Idle[".masterListFields"][] = "taken_time_total";
$tdataDesigners_Idle[".masterListFields"][] = "taken_time_total_reject_qc";
$tdataDesigners_Idle[".masterListFields"][] = "taken_time_avg";
$tdataDesigners_Idle[".masterListFields"][] = "efficiency";
$tdataDesigners_Idle[".masterListFields"][] = "idle_time";
$tdataDesigners_Idle[".masterListFields"][] = "idle_percentage";
$tdataDesigners_Idle[".masterListFields"][] = "rejected";

$tdataDesigners_Idle[".inlineAddFields"] = array();
$tdataDesigners_Idle[".inlineAddFields"][] = "end2_date";
$tdataDesigners_Idle[".inlineAddFields"][] = "designer2_id";
$tdataDesigners_Idle[".inlineAddFields"][] = "project_id";

$tdataDesigners_Idle[".editFields"] = array();
$tdataDesigners_Idle[".editFields"][] = "end2_date";
$tdataDesigners_Idle[".editFields"][] = "designer2_id";
$tdataDesigners_Idle[".editFields"][] = "project_id";

$tdataDesigners_Idle[".inlineEditFields"] = array();
$tdataDesigners_Idle[".inlineEditFields"][] = "end2_date";
$tdataDesigners_Idle[".inlineEditFields"][] = "designer2_id";
$tdataDesigners_Idle[".inlineEditFields"][] = "project_id";

$tdataDesigners_Idle[".exportFields"] = array();
$tdataDesigners_Idle[".exportFields"][] = "end2_date";
$tdataDesigners_Idle[".exportFields"][] = "team";
$tdataDesigners_Idle[".exportFields"][] = "username";
$tdataDesigners_Idle[".exportFields"][] = "designer2_id";
$tdataDesigners_Idle[".exportFields"][] = "project_id";
$tdataDesigners_Idle[".exportFields"][] = "total_images";
$tdataDesigners_Idle[".exportFields"][] = "eta_total";
$tdataDesigners_Idle[".exportFields"][] = "eta_avg";
$tdataDesigners_Idle[".exportFields"][] = "taken_time_total";
$tdataDesigners_Idle[".exportFields"][] = "taken_time_total_reject_qc";
$tdataDesigners_Idle[".exportFields"][] = "taken_time_avg";
$tdataDesigners_Idle[".exportFields"][] = "efficiency";
$tdataDesigners_Idle[".exportFields"][] = "idle_time";
$tdataDesigners_Idle[".exportFields"][] = "idle_percentage";
$tdataDesigners_Idle[".exportFields"][] = "rejected";

$tdataDesigners_Idle[".importFields"] = array();
$tdataDesigners_Idle[".importFields"][] = "end2_date";
$tdataDesigners_Idle[".importFields"][] = "team";
$tdataDesigners_Idle[".importFields"][] = "username";
$tdataDesigners_Idle[".importFields"][] = "designer2_id";
$tdataDesigners_Idle[".importFields"][] = "project_id";
$tdataDesigners_Idle[".importFields"][] = "total_images";
$tdataDesigners_Idle[".importFields"][] = "eta_total";
$tdataDesigners_Idle[".importFields"][] = "eta_avg";
$tdataDesigners_Idle[".importFields"][] = "taken_time_total";
$tdataDesigners_Idle[".importFields"][] = "taken_time_total_reject_qc";
$tdataDesigners_Idle[".importFields"][] = "taken_time_avg";
$tdataDesigners_Idle[".importFields"][] = "efficiency";
$tdataDesigners_Idle[".importFields"][] = "idle_time";
$tdataDesigners_Idle[".importFields"][] = "idle_percentage";
$tdataDesigners_Idle[".importFields"][] = "rejected";

$tdataDesigners_Idle[".printFields"] = array();
$tdataDesigners_Idle[".printFields"][] = "end2_date";
$tdataDesigners_Idle[".printFields"][] = "team";
$tdataDesigners_Idle[".printFields"][] = "username";
$tdataDesigners_Idle[".printFields"][] = "designer2_id";
$tdataDesigners_Idle[".printFields"][] = "project_id";
$tdataDesigners_Idle[".printFields"][] = "total_images";
$tdataDesigners_Idle[".printFields"][] = "eta_total";
$tdataDesigners_Idle[".printFields"][] = "eta_avg";
$tdataDesigners_Idle[".printFields"][] = "taken_time_total";
$tdataDesigners_Idle[".printFields"][] = "taken_time_total_reject_qc";
$tdataDesigners_Idle[".printFields"][] = "taken_time_avg";
$tdataDesigners_Idle[".printFields"][] = "efficiency";
$tdataDesigners_Idle[".printFields"][] = "idle_time";
$tdataDesigners_Idle[".printFields"][] = "idle_percentage";
$tdataDesigners_Idle[".printFields"][] = "rejected";

//	end2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "end2_date";
	$fdata["GoodName"] = "end2_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Designers_Idle","end2_date"); 
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigners_Idle["end2_date"] = $fdata;
//	team
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team";
	$fdata["GoodName"] = "team";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Designers_Idle","team"); 
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigners_Idle["team"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Designers_Idle","username"); 
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataDesigners_Idle["username"] = $fdata;
//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Designers_Idle","designer2_id"); 
	$fdata["FieldType"] = 3;
	
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
	
	
	
	

	

	
	$tdataDesigners_Idle["designer2_id"] = $fdata;
//	project_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "project_id";
	$fdata["GoodName"] = "project_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Designers_Idle","project_id"); 
	$fdata["FieldType"] = 3;
	
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
	
	
	
	

	

	
	$tdataDesigners_Idle["project_id"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Idle","total_images"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_images"; 
	
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigners_Idle["total_images"] = $fdata;
//	eta_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "eta_total";
	$fdata["GoodName"] = "eta_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Idle","eta_total"); 
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigners_Idle["eta_total"] = $fdata;
//	eta_avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "eta_avg";
	$fdata["GoodName"] = "eta_avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Idle","eta_avg"); 
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigners_Idle["eta_avg"] = $fdata;
//	taken_time_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "taken_time_total";
	$fdata["GoodName"] = "taken_time_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Idle","taken_time_total"); 
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigners_Idle["taken_time_total"] = $fdata;
//	taken_time_total_reject_qc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "taken_time_total_reject_qc";
	$fdata["GoodName"] = "taken_time_total_reject_qc";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Idle","taken_time_total_reject_qc"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "taken_time_total_reject_qc"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time)+ (TIME_TO_SEC(IFNULL(rejected_jobfile.cr_designer_time, '00:00:00')))+ (TIME_TO_SEC(IFNULL(jobfile.qc_time, '00:00:00')))))";
	
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigners_Idle["taken_time_total_reject_qc"] = $fdata;
//	taken_time_avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "taken_time_avg";
	$fdata["GoodName"] = "taken_time_avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Idle","taken_time_avg"); 
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigners_Idle["taken_time_avg"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Idle","efficiency"); 
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
	$fdata["FullName"] = "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(jobfile.designer2_time))))* 100";
	
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigners_Idle["efficiency"] = $fdata;
//	idle_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "idle_time";
	$fdata["GoodName"] = "idle_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Idle","idle_time"); 
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigners_Idle["idle_time"] = $fdata;
//	idle_percentage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "idle_percentage";
	$fdata["GoodName"] = "idle_percentage";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Idle","idle_percentage"); 
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigners_Idle["idle_percentage"] = $fdata;
//	rejected
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "rejected";
	$fdata["GoodName"] = "rejected";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Idle","rejected"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rejected"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(rejected_jobfile.jobfile_id)";
	
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigners_Idle["rejected"] = $fdata;

	
$tables_data["Designers Idle"]=&$tdataDesigners_Idle;
$field_labels["Designers_Idle"] = &$fieldLabelsDesigners_Idle;
$fieldToolTips["Designers Idle"] = &$fieldToolTipsDesigners_Idle;
$page_titles["Designers_Idle"] = &$pageTitlesDesigners_Idle;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Designers Idle"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Designers Idle"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Designers_Idle()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile.end2_date,  `user`.team,  `user`.username,  jobfile.designer2_id,  jobfile.project_id,  COUNT(*) AS total_images,  SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))) AS eta_total,  SEC_TO_TIME(AVG(TIME_TO_SEC(pdf.pdf_estimated_average))) AS eta_avg,  SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_total,  SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time)+ (TIME_TO_SEC(IFNULL(rejected_jobfile.cr_designer_time, '00:00:00')))+ (TIME_TO_SEC(IFNULL(jobfile.qc_time, '00:00:00'))))) AS taken_time_total_reject_qc,  SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_avg,  (TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(jobfile.designer2_time))))* 100 AS efficiency,  IF(SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.designer2_time)))<0, IF((SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.designer2_time)))) < 0, '00:00:00', (SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.designer2_time))))), (SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.designer2_time))))) AS idle_time,  IF((((25200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(25200)) < 0, (IF((((43200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(43200)) < 0, 0, (((43200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(43200)))), (((25200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(25200))) AS idle_percentage,  COUNT(rejected_jobfile.jobfile_id) AS rejected";
$proto0["m_strFrom"] = "FROM jobfile  LEFT OUTER JOIN rejected_jobfile ON jobfile.jobfile_id = rejected_jobfile.jobfile_id  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto0["m_strWhere"] = "jobfile.designer2_id IS NOT NULL OR jobfile.end2_date > '0000-00-00 00:00:00' OR (jobfile.filename not like '%retouch%' OR (jobfile.filename not like '%detail_2%')) OR TIME_TO_SEC(jobfile.designer2_time) > '0'";
$proto0["m_strOrderBy"] = "ORDER BY jobfile.end2_date DESC, `user`.team, `user`.username";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "jobfile.designer2_id IS NOT NULL OR jobfile.end2_date > '0000-00-00 00:00:00' OR (jobfile.filename not like '%retouch%' OR (jobfile.filename not like '%detail_2%')) OR TIME_TO_SEC(jobfile.designer2_time) > '0'";
$proto1["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.designer2_id IS NOT NULL OR jobfile.end2_date > '0000-00-00 00:00:00' OR (jobfile.filename not like '%retouch%' OR (jobfile.filename not like '%detail_2%')) OR TIME_TO_SEC(jobfile.designer2_time) > '0'"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.designer2_id IS NOT NULL";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designers Idle"
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
	"m_srcTableName" => "Designers Idle"
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
$proto7["m_sql"] = "jobfile.filename not like '%retouch%' OR (jobfile.filename not like '%detail_2%')";
$proto7["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.filename not like '%retouch%' OR (jobfile.filename not like '%detail_2%')"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
						$proto9=array();
$proto9["m_sql"] = "jobfile.filename not like '%retouch%'";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designers Idle"
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
	"m_srcTableName" => "Designers Idle"
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
	"m_srcTableName" => "Designers Idle"
));

$proto18["m_sql"] = "jobfile.end2_date";
$proto18["m_srcTableName"] = "Designers Idle";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Designers Idle"
));

$proto20["m_sql"] = "`user`.team";
$proto20["m_srcTableName"] = "Designers Idle";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "user",
	"m_srcTableName" => "Designers Idle"
));

$proto22["m_sql"] = "`user`.username";
$proto22["m_srcTableName"] = "Designers Idle";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designers Idle"
));

$proto24["m_sql"] = "jobfile.designer2_id";
$proto24["m_srcTableName"] = "Designers Idle";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designers Idle"
));

$proto26["m_sql"] = "jobfile.project_id";
$proto26["m_srcTableName"] = "Designers Idle";
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
$proto28["m_srcTableName"] = "Designers Idle";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "total_images";
$obj = new SQLFieldListItem($proto28);

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
$proto31["m_srcTableName"] = "Designers Idle";
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
$proto34["m_srcTableName"] = "Designers Idle";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "eta_avg";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$proto38=array();
$proto38["m_functiontype"] = "SQLF_CUSTOM";
$proto38["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(TIME_TO_SEC(jobfile.designer2_time))"
));

$proto38["m_arguments"][]=$obj;
$proto38["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto38);

$proto37["m_sql"] = "SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time)))";
$proto37["m_srcTableName"] = "Designers Idle";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "taken_time_total";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$proto41=array();
$proto41["m_functiontype"] = "SQLF_CUSTOM";
$proto41["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(TIME_TO_SEC(jobfile.designer2_time)+ (TIME_TO_SEC(IFNULL(rejected_jobfile.cr_designer_time, '00:00:00')))+ (TIME_TO_SEC(IFNULL(jobfile.qc_time, '00:00:00'))))"
));

$proto41["m_arguments"][]=$obj;
$proto41["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto41);

$proto40["m_sql"] = "SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time)+ (TIME_TO_SEC(IFNULL(rejected_jobfile.cr_designer_time, '00:00:00')))+ (TIME_TO_SEC(IFNULL(jobfile.qc_time, '00:00:00')))))";
$proto40["m_srcTableName"] = "Designers Idle";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "taken_time_total_reject_qc";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$proto44=array();
$proto44["m_functiontype"] = "SQLF_CUSTOM";
$proto44["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "AVG(TIME_TO_SEC(jobfile.designer2_time))"
));

$proto44["m_arguments"][]=$obj;
$proto44["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto44);

$proto43["m_sql"] = "SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.designer2_time)))";
$proto43["m_srcTableName"] = "Designers Idle";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "taken_time_avg";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(jobfile.designer2_time))))* 100"
));

$proto46["m_sql"] = "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(jobfile.designer2_time))))* 100";
$proto46["m_srcTableName"] = "Designers Idle";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$proto49=array();
$proto49["m_functiontype"] = "SQLF_CUSTOM";
$proto49["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.designer2_time)))<0"
));

$proto49["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IF((SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.designer2_time)))) < 0, '00:00:00', (SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.designer2_time)))))"
));

$proto49["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "(SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.designer2_time))))"
));

$proto49["m_arguments"][]=$obj;
$proto49["m_strFunctionName"] = "IF";
$obj = new SQLFunctionCall($proto49);

$proto48["m_sql"] = "IF(SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.designer2_time)))<0, IF((SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.designer2_time)))) < 0, '00:00:00', (SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.designer2_time))))), (SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.designer2_time)))))";
$proto48["m_srcTableName"] = "Designers Idle";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "idle_time";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$proto54=array();
$proto54["m_functiontype"] = "SQLF_CUSTOM";
$proto54["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(((25200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(25200)) < 0"
));

$proto54["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "(IF((((43200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(43200)) < 0, 0, (((43200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(43200))))"
));

$proto54["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "(((25200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(25200))"
));

$proto54["m_arguments"][]=$obj;
$proto54["m_strFunctionName"] = "IF";
$obj = new SQLFunctionCall($proto54);

$proto53["m_sql"] = "IF((((25200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(25200)) < 0, (IF((((43200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(43200)) < 0, 0, (((43200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(43200)))), (((25200 - SUM(TIME_TO_SEC(jobfile.designer2_time)))* 100)/(25200)))";
$proto53["m_srcTableName"] = "Designers Idle";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "idle_percentage";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$proto59=array();
$proto59["m_functiontype"] = "SQLF_COUNT";
$proto59["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "jobfile_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Designers Idle"
));

$proto59["m_arguments"][]=$obj;
$proto59["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto59);

$proto58["m_sql"] = "COUNT(rejected_jobfile.jobfile_id)";
$proto58["m_srcTableName"] = "Designers Idle";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "rejected";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto61=array();
$proto61["m_link"] = "SQLL_MAIN";
			$proto62=array();
$proto62["m_strName"] = "jobfile";
$proto62["m_srcTableName"] = "Designers Idle";
$proto62["m_columns"] = array();
$proto62["m_columns"][] = "jobfile_id";
$proto62["m_columns"][] = "file_url";
$proto62["m_columns"][] = "client_id";
$proto62["m_columns"][] = "work_id";
$proto62["m_columns"][] = "job_id";
$proto62["m_columns"][] = "project_id";
$proto62["m_columns"][] = "folder_name";
$proto62["m_columns"][] = "filename";
$proto62["m_columns"][] = "jobfile_type";
$proto62["m_columns"][] = "jobfile_note";
$proto62["m_columns"][] = "jobfile_status_id";
$proto62["m_columns"][] = "downloader_id";
$proto62["m_columns"][] = "distributor_id";
$proto62["m_columns"][] = "designer_id";
$proto62["m_columns"][] = "qc_id";
$proto62["m_columns"][] = "uploader_id";
$proto62["m_columns"][] = "notifier_id";
$proto62["m_columns"][] = "rejector_id";
$proto62["m_columns"][] = "download_date";
$proto62["m_columns"][] = "distribute_date";
$proto62["m_columns"][] = "start_date";
$proto62["m_columns"][] = "end_date";
$proto62["m_columns"][] = "designer_time";
$proto62["m_columns"][] = "qcstart_date";
$proto62["m_columns"][] = "qcend_date";
$proto62["m_columns"][] = "qc_time";
$proto62["m_columns"][] = "upload_date";
$proto62["m_columns"][] = "notify_date";
$proto62["m_columns"][] = "reject_date";
$proto62["m_columns"][] = "reject_reason";
$proto62["m_columns"][] = "designer2_id";
$proto62["m_columns"][] = "start2_date";
$proto62["m_columns"][] = "end2_date";
$proto62["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto62);

$proto61["m_table"] = $obj;
$proto61["m_sql"] = "jobfile";
$proto61["m_alias"] = "";
$proto61["m_srcTableName"] = "Designers Idle";
$proto63=array();
$proto63["m_sql"] = "";
$proto63["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto63["m_column"]=$obj;
$proto63["m_contained"] = array();
$proto63["m_strCase"] = "";
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
$proto66["m_strName"] = "rejected_jobfile";
$proto66["m_srcTableName"] = "Designers Idle";
$proto66["m_columns"] = array();
$proto66["m_columns"][] = "rejected_jobfile_id";
$proto66["m_columns"][] = "jobfile_id";
$proto66["m_columns"][] = "rejected_jobfile_status_id";
$proto66["m_columns"][] = "file_url";
$proto66["m_columns"][] = "job_id";
$proto66["m_columns"][] = "pdf_id";
$proto66["m_columns"][] = "jobfile_note";
$proto66["m_columns"][] = "rejector_id";
$proto66["m_columns"][] = "reject_date";
$proto66["m_columns"][] = "reject_reason";
$proto66["m_columns"][] = "cr_designer_id";
$proto66["m_columns"][] = "cr_start_date";
$proto66["m_columns"][] = "cr_end_date";
$proto66["m_columns"][] = "cr_designer_time";
$proto66["m_columns"][] = "cr_pc_name";
$proto66["m_columns"][] = "cr_qc_id";
$proto66["m_columns"][] = "cr_qcstart_date";
$proto66["m_columns"][] = "cr_qcend_date";
$proto66["m_columns"][] = "cr_qc_time";
$proto66["m_columns"][] = "cr_qc_pc_name";
$proto66["m_columns"][] = "cr_distribute_date";
$proto66["m_columns"][] = "cr_notifier_id";
$proto66["m_columns"][] = "cr_notify_date";
$proto66["m_columns"][] = "type_of_error";
$proto66["m_columns"][] = "cr_comment";
$proto66["m_columns"][] = "screencap";
$obj = new SQLTable($proto66);

$proto65["m_table"] = $obj;
$proto65["m_sql"] = "LEFT OUTER JOIN rejected_jobfile ON jobfile.jobfile_id = rejected_jobfile.jobfile_id";
$proto65["m_alias"] = "";
$proto65["m_srcTableName"] = "Designers Idle";
$proto67=array();
$proto67["m_sql"] = "jobfile.jobfile_id = rejected_jobfile.jobfile_id";
$proto67["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designers Idle"
));

$proto67["m_column"]=$obj;
$proto67["m_contained"] = array();
$proto67["m_strCase"] = "= rejected_jobfile.jobfile_id";
$proto67["m_havingmode"] = false;
$proto67["m_inBrackets"] = false;
$proto67["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto67);

$proto65["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto65);

$proto0["m_fromlist"][]=$obj;
												$proto69=array();
$proto69["m_link"] = "SQLL_LEFTJOIN";
			$proto70=array();
$proto70["m_strName"] = "user";
$proto70["m_srcTableName"] = "Designers Idle";
$proto70["m_columns"] = array();
$proto70["m_columns"][] = "user_id";
$proto70["m_columns"][] = "user_status";
$proto70["m_columns"][] = "username";
$proto70["m_columns"][] = "password";
$proto70["m_columns"][] = "department_id";
$proto70["m_columns"][] = "subdiv_id";
$proto70["m_columns"][] = "group_id";
$proto70["m_columns"][] = "designation";
$proto70["m_columns"][] = "employee_id";
$proto70["m_columns"][] = "fname";
$proto70["m_columns"][] = "lname";
$proto70["m_columns"][] = "nickname";
$proto70["m_columns"][] = "email";
$proto70["m_columns"][] = "phone";
$proto70["m_columns"][] = "mobile";
$proto70["m_columns"][] = "log";
$proto70["m_columns"][] = "images_assigned";
$proto70["m_columns"][] = "user_picture";
$proto70["m_columns"][] = "team";
$proto70["m_columns"][] = "ad_group_id";
$proto70["m_columns"][] = "lastaccess";
$obj = new SQLTable($proto70);

$proto69["m_table"] = $obj;
$proto69["m_sql"] = "LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$proto69["m_alias"] = "";
$proto69["m_srcTableName"] = "Designers Idle";
$proto71=array();
$proto71["m_sql"] = "jobfile.designer2_id = `user`.user_id";
$proto71["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designers Idle"
));

$proto71["m_column"]=$obj;
$proto71["m_contained"] = array();
$proto71["m_strCase"] = "= `user`.user_id";
$proto71["m_havingmode"] = false;
$proto71["m_inBrackets"] = false;
$proto71["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto71);

$proto69["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto69);

$proto0["m_fromlist"][]=$obj;
												$proto73=array();
$proto73["m_link"] = "SQLL_LEFTJOIN";
			$proto74=array();
$proto74["m_strName"] = "pdf";
$proto74["m_srcTableName"] = "Designers Idle";
$proto74["m_columns"] = array();
$proto74["m_columns"][] = "pdf_id";
$proto74["m_columns"][] = "pdf_name";
$proto74["m_columns"][] = "client_id";
$proto74["m_columns"][] = "pdf_location";
$proto74["m_columns"][] = "last_update";
$proto74["m_columns"][] = "pdf_estimated_average";
$proto74["m_columns"][] = "pdf_estimated_average1";
$proto74["m_columns"][] = "pdf_estimated_average2";
$proto74["m_columns"][] = "pdf_actual_average";
$obj = new SQLTable($proto74);

$proto73["m_table"] = $obj;
$proto73["m_sql"] = "LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto73["m_alias"] = "";
$proto73["m_srcTableName"] = "Designers Idle";
$proto75=array();
$proto75["m_sql"] = "jobfile.project_id = pdf.pdf_id";
$proto75["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designers Idle"
));

$proto75["m_column"]=$obj;
$proto75["m_contained"] = array();
$proto75["m_strCase"] = "= pdf.pdf_id";
$proto75["m_havingmode"] = false;
$proto75["m_inBrackets"] = false;
$proto75["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto75);

$proto73["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto73);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto77=array();
						$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Designers Idle"
));

$proto77["m_column"]=$obj;
$obj = new SQLGroupByItem($proto77);

$proto0["m_groupby"][]=$obj;
												$proto79=array();
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designers Idle"
));

$proto79["m_column"]=$obj;
$obj = new SQLGroupByItem($proto79);

$proto0["m_groupby"][]=$obj;
												$proto81=array();
						$proto82=array();
$proto82["m_functiontype"] = "SQLF_CUSTOM";
$proto82["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.end2_date"
));

$proto82["m_arguments"][]=$obj;
$proto82["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto82);

$proto81["m_column"]=$obj;
$obj = new SQLGroupByItem($proto81);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto84=array();
						$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Designers Idle"
));

$proto84["m_column"]=$obj;
$proto84["m_bAsc"] = 0;
$proto84["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto84);

$proto0["m_orderby"][]=$obj;					
												$proto86=array();
						$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Designers Idle"
));

$proto86["m_column"]=$obj;
$proto86["m_bAsc"] = 1;
$proto86["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto86);

$proto0["m_orderby"][]=$obj;					
												$proto88=array();
						$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "user",
	"m_srcTableName" => "Designers Idle"
));

$proto88["m_column"]=$obj;
$proto88["m_bAsc"] = 1;
$proto88["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto88);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Designers Idle";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Designers_Idle = createSqlQuery_Designers_Idle();


	
															
	
$tdataDesigners_Idle[".sqlquery"] = $queryData_Designers_Idle;

$tableEvents["Designers Idle"] = new eventsBase;
$tdataDesigners_Idle[".hasEvents"] = false;

?>