<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDaily_Report_qc = array();	
	$tdataDaily_Report_qc[".truncateText"] = true;
	$tdataDaily_Report_qc[".NumberOfChars"] = 256; 
	$tdataDaily_Report_qc[".ShortName"] = "Daily_Report_qc";
	$tdataDaily_Report_qc[".OwnerID"] = "";
	$tdataDaily_Report_qc[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsDaily_Report_qc = array();
$fieldToolTipsDaily_Report_qc = array();
$pageTitlesDaily_Report_qc = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDaily_Report_qc["English"] = array();
	$fieldToolTipsDaily_Report_qc["English"] = array();
	$pageTitlesDaily_Report_qc["English"] = array();
	$fieldLabelsDaily_Report_qc["English"]["project_id"] = "Project Id";
	$fieldToolTipsDaily_Report_qc["English"]["project_id"] = "";
	$fieldLabelsDaily_Report_qc["English"]["team"] = "Team";
	$fieldToolTipsDaily_Report_qc["English"]["team"] = "";
	$fieldLabelsDaily_Report_qc["English"]["files"] = "Files";
	$fieldToolTipsDaily_Report_qc["English"]["files"] = "";
	$fieldLabelsDaily_Report_qc["English"]["taken_time_total"] = "Taken Total";
	$fieldToolTipsDaily_Report_qc["English"]["taken_time_total"] = "";
	$fieldLabelsDaily_Report_qc["English"]["taken_time_avg"] = "Taken Avg";
	$fieldToolTipsDaily_Report_qc["English"]["taken_time_avg"] = "";
	$fieldLabelsDaily_Report_qc["English"]["idle_time"] = "Idle Time";
	$fieldToolTipsDaily_Report_qc["English"]["idle_time"] = "";
	$fieldLabelsDaily_Report_qc["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsDaily_Report_qc["English"]["efficiency"] = "";
	$fieldLabelsDaily_Report_qc["English"]["idle_percentage"] = "Idle %";
	$fieldToolTipsDaily_Report_qc["English"]["idle_percentage"] = "";
	$fieldLabelsDaily_Report_qc["English"]["qcend_date"] = "Qcend Date";
	$fieldToolTipsDaily_Report_qc["English"]["qcend_date"] = "";
	$fieldLabelsDaily_Report_qc["English"]["qc_id"] = "Qc Id";
	$fieldToolTipsDaily_Report_qc["English"]["qc_id"] = "";
	if (count($fieldToolTipsDaily_Report_qc["English"]))
		$tdataDaily_Report_qc[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDaily_Report_qc[""] = array();
	$fieldToolTipsDaily_Report_qc[""] = array();
	$pageTitlesDaily_Report_qc[""] = array();
	$fieldLabelsDaily_Report_qc[""]["qc_id"] = "Qc Id";
	$fieldToolTipsDaily_Report_qc[""]["qc_id"] = "";
	if (count($fieldToolTipsDaily_Report_qc[""]))
		$tdataDaily_Report_qc[".isUseToolTips"] = true;
}
	
	
	$tdataDaily_Report_qc[".NCSearch"] = true;



$tdataDaily_Report_qc[".shortTableName"] = "Daily_Report_qc";
$tdataDaily_Report_qc[".nSecOptions"] = 0;
$tdataDaily_Report_qc[".recsPerRowList"] = 1;
$tdataDaily_Report_qc[".recsPerRowPrint"] = 1;
$tdataDaily_Report_qc[".mainTableOwnerID"] = "";
$tdataDaily_Report_qc[".moveNext"] = 1;
$tdataDaily_Report_qc[".entityType"] = 2;

$tdataDaily_Report_qc[".strOriginalTableName"] = "jobfile";




$tdataDaily_Report_qc[".showAddInPopup"] = false;

$tdataDaily_Report_qc[".showEditInPopup"] = false;

$tdataDaily_Report_qc[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDaily_Report_qc[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDaily_Report_qc[".fieldsForRegister"] = array();

$tdataDaily_Report_qc[".listAjax"] = false;

	$tdataDaily_Report_qc[".audit"] = false;

	$tdataDaily_Report_qc[".locking"] = false;


$tdataDaily_Report_qc[".add"] = true;
$tdataDaily_Report_qc[".afterAddAction"] = 1;
$tdataDaily_Report_qc[".closePopupAfterAdd"] = 1;
$tdataDaily_Report_qc[".afterAddActionDetTable"] = "";

$tdataDaily_Report_qc[".list"] = true;

$tdataDaily_Report_qc[".inlineAdd"] = true;


$tdataDaily_Report_qc[".exportTo"] = true;

$tdataDaily_Report_qc[".printFriendly"] = true;


$tdataDaily_Report_qc[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDaily_Report_qc[".searchSaving"] = false;
//

$tdataDaily_Report_qc[".showSearchPanel"] = true;
		$tdataDaily_Report_qc[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDaily_Report_qc[".isUseAjaxSuggest"] = false;
else 
	$tdataDaily_Report_qc[".isUseAjaxSuggest"] = true;



																																																																																																																																			
$tdataDaily_Report_qc[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDaily_Report_qc[".isUseTimeForSearch"] = false;





$tdataDaily_Report_qc[".allSearchFields"] = array();
$tdataDaily_Report_qc[".filterFields"] = array();
$tdataDaily_Report_qc[".requiredSearchFields"] = array();

$tdataDaily_Report_qc[".allSearchFields"][] = "qcend_date";
	$tdataDaily_Report_qc[".allSearchFields"][] = "team";
	$tdataDaily_Report_qc[".allSearchFields"][] = "qc_id";
	$tdataDaily_Report_qc[".allSearchFields"][] = "project_id";
	$tdataDaily_Report_qc[".allSearchFields"][] = "files";
	$tdataDaily_Report_qc[".allSearchFields"][] = "taken_time_total";
	$tdataDaily_Report_qc[".allSearchFields"][] = "taken_time_avg";
	$tdataDaily_Report_qc[".allSearchFields"][] = "efficiency";
	$tdataDaily_Report_qc[".allSearchFields"][] = "idle_time";
	$tdataDaily_Report_qc[".allSearchFields"][] = "idle_percentage";
	

$tdataDaily_Report_qc[".googleLikeFields"] = array();
$tdataDaily_Report_qc[".googleLikeFields"][] = "qcend_date";
$tdataDaily_Report_qc[".googleLikeFields"][] = "team";
$tdataDaily_Report_qc[".googleLikeFields"][] = "qc_id";
$tdataDaily_Report_qc[".googleLikeFields"][] = "project_id";
$tdataDaily_Report_qc[".googleLikeFields"][] = "files";
$tdataDaily_Report_qc[".googleLikeFields"][] = "taken_time_total";
$tdataDaily_Report_qc[".googleLikeFields"][] = "taken_time_avg";
$tdataDaily_Report_qc[".googleLikeFields"][] = "efficiency";
$tdataDaily_Report_qc[".googleLikeFields"][] = "idle_time";
$tdataDaily_Report_qc[".googleLikeFields"][] = "idle_percentage";


$tdataDaily_Report_qc[".advSearchFields"] = array();
$tdataDaily_Report_qc[".advSearchFields"][] = "qcend_date";
$tdataDaily_Report_qc[".advSearchFields"][] = "team";
$tdataDaily_Report_qc[".advSearchFields"][] = "qc_id";
$tdataDaily_Report_qc[".advSearchFields"][] = "project_id";
$tdataDaily_Report_qc[".advSearchFields"][] = "files";
$tdataDaily_Report_qc[".advSearchFields"][] = "taken_time_total";
$tdataDaily_Report_qc[".advSearchFields"][] = "taken_time_avg";
$tdataDaily_Report_qc[".advSearchFields"][] = "efficiency";
$tdataDaily_Report_qc[".advSearchFields"][] = "idle_time";
$tdataDaily_Report_qc[".advSearchFields"][] = "idle_percentage";

$tdataDaily_Report_qc[".tableType"] = "report";

$tdataDaily_Report_qc[".printerPageOrientation"] = 0;
$tdataDaily_Report_qc[".nPrinterPageScale"] = 100;

$tdataDaily_Report_qc[".nPrinterSplitRecords"] = 40;

$tdataDaily_Report_qc[".nPrinterPDFSplitRecords"] = 40;



$tdataDaily_Report_qc[".geocodingEnabled"] = false;

//report settings
$tdataDaily_Report_qc[".printReportLayout"] = 3;	

$tdataDaily_Report_qc[".reportPrintPartitionType"] = 0;	
$tdataDaily_Report_qc[".reportPrintGroupsPerPage"] = 3;	
	$tdataDaily_Report_qc[".lowGroup"] = 2;



$tdataDaily_Report_qc[".reportGroupFields"] = true;
$tdataDaily_Report_qc[".pageSize"] = 1;
$tdataDaily_Report_qc[".showGroupSummaryCount"] = true;
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
$tdataDaily_Report_qc[".reportGroupFieldsData"] = $reportGroupFields;


$tdataDaily_Report_qc[".isExistTotalFields"] = true;




$tdataDaily_Report_qc[".repShowDet"] = true;

$tdataDaily_Report_qc[".reportLayout"] = 3;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY jobfile.qcend_date DESC, `user`.team, jobfile.qc_id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDaily_Report_qc[".strOrderBy"] = $tstrOrderBy;

$tdataDaily_Report_qc[".orderindexes"] = array();
$tdataDaily_Report_qc[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "jobfile.qcend_date");
$tdataDaily_Report_qc[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "`user`.team");
$tdataDaily_Report_qc[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "jobfile.qc_id");

$tdataDaily_Report_qc[".sqlHead"] = "SELECT jobfile.qcend_date,  `user`.team,  jobfile.qc_id,  jobfile.project_id,  COUNT(*) AS files,  SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.qc_time))) AS taken_time_total,  SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.qc_time))) AS taken_time_avg,  (TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC('00:02:00'))))/(SUM(TIME_TO_SEC(IF(jobfile.qc_time<60,'00:02:00',jobfile.qc_time)))))* 100 AS efficiency,  IF(SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.qc_time)))<0, IF((SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.qc_time)))) < 0, '00:00:00', (SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.qc_time))))), (SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.qc_time))))) AS idle_time,  IF((((25200 - SUM(TIME_TO_SEC(jobfile.qc_time)))* 100)/(25200)) < 0, (IF((((43200 - SUM(TIME_TO_SEC(jobfile.qc_time)))* 100)/(43200)) < 0, 0, (((43200 - SUM(TIME_TO_SEC(jobfile.qc_time)))* 100)/(43200)))), (((25200 - SUM(TIME_TO_SEC(jobfile.qc_time)))* 100)/(25200))) AS idle_percentage";
$tdataDaily_Report_qc[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN `user` ON jobfile.qc_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$tdataDaily_Report_qc[".sqlWhereExpr"] = "jobfile.qc_id IS NOT NULL AND jobfile.qcend_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.qc_time) > '0'";
$tdataDaily_Report_qc[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDaily_Report_qc[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDaily_Report_qc[".arrGroupsPerPage"] = $arrGPP;

$tdataDaily_Report_qc[".highlightSearchResults"] = true;

$tableKeysDaily_Report_qc = array();
$tdataDaily_Report_qc[".Keys"] = $tableKeysDaily_Report_qc;

$tdataDaily_Report_qc[".listFields"] = array();
$tdataDaily_Report_qc[".listFields"][] = "qcend_date";
$tdataDaily_Report_qc[".listFields"][] = "team";
$tdataDaily_Report_qc[".listFields"][] = "qc_id";
$tdataDaily_Report_qc[".listFields"][] = "project_id";
$tdataDaily_Report_qc[".listFields"][] = "files";
$tdataDaily_Report_qc[".listFields"][] = "taken_time_total";
$tdataDaily_Report_qc[".listFields"][] = "taken_time_avg";
$tdataDaily_Report_qc[".listFields"][] = "efficiency";
$tdataDaily_Report_qc[".listFields"][] = "idle_time";
$tdataDaily_Report_qc[".listFields"][] = "idle_percentage";

$tdataDaily_Report_qc[".hideMobileList"] = array();


$tdataDaily_Report_qc[".viewFields"] = array();
$tdataDaily_Report_qc[".viewFields"][] = "qcend_date";
$tdataDaily_Report_qc[".viewFields"][] = "team";
$tdataDaily_Report_qc[".viewFields"][] = "qc_id";
$tdataDaily_Report_qc[".viewFields"][] = "project_id";
$tdataDaily_Report_qc[".viewFields"][] = "files";
$tdataDaily_Report_qc[".viewFields"][] = "taken_time_total";
$tdataDaily_Report_qc[".viewFields"][] = "taken_time_avg";
$tdataDaily_Report_qc[".viewFields"][] = "efficiency";
$tdataDaily_Report_qc[".viewFields"][] = "idle_time";
$tdataDaily_Report_qc[".viewFields"][] = "idle_percentage";

$tdataDaily_Report_qc[".addFields"] = array();
$tdataDaily_Report_qc[".addFields"][] = "qcend_date";
$tdataDaily_Report_qc[".addFields"][] = "qc_id";
$tdataDaily_Report_qc[".addFields"][] = "project_id";

$tdataDaily_Report_qc[".masterListFields"] = array();
$tdataDaily_Report_qc[".masterListFields"][] = "qcend_date";
$tdataDaily_Report_qc[".masterListFields"][] = "team";
$tdataDaily_Report_qc[".masterListFields"][] = "qc_id";
$tdataDaily_Report_qc[".masterListFields"][] = "project_id";
$tdataDaily_Report_qc[".masterListFields"][] = "files";
$tdataDaily_Report_qc[".masterListFields"][] = "taken_time_total";
$tdataDaily_Report_qc[".masterListFields"][] = "taken_time_avg";
$tdataDaily_Report_qc[".masterListFields"][] = "efficiency";
$tdataDaily_Report_qc[".masterListFields"][] = "idle_time";
$tdataDaily_Report_qc[".masterListFields"][] = "idle_percentage";

$tdataDaily_Report_qc[".inlineAddFields"] = array();
$tdataDaily_Report_qc[".inlineAddFields"][] = "qcend_date";
$tdataDaily_Report_qc[".inlineAddFields"][] = "qc_id";
$tdataDaily_Report_qc[".inlineAddFields"][] = "project_id";

$tdataDaily_Report_qc[".editFields"] = array();
$tdataDaily_Report_qc[".editFields"][] = "qcend_date";
$tdataDaily_Report_qc[".editFields"][] = "qc_id";
$tdataDaily_Report_qc[".editFields"][] = "project_id";

$tdataDaily_Report_qc[".inlineEditFields"] = array();
$tdataDaily_Report_qc[".inlineEditFields"][] = "qcend_date";
$tdataDaily_Report_qc[".inlineEditFields"][] = "qc_id";
$tdataDaily_Report_qc[".inlineEditFields"][] = "project_id";

$tdataDaily_Report_qc[".exportFields"] = array();
$tdataDaily_Report_qc[".exportFields"][] = "qcend_date";
$tdataDaily_Report_qc[".exportFields"][] = "team";
$tdataDaily_Report_qc[".exportFields"][] = "qc_id";
$tdataDaily_Report_qc[".exportFields"][] = "project_id";
$tdataDaily_Report_qc[".exportFields"][] = "files";
$tdataDaily_Report_qc[".exportFields"][] = "taken_time_total";
$tdataDaily_Report_qc[".exportFields"][] = "taken_time_avg";
$tdataDaily_Report_qc[".exportFields"][] = "efficiency";
$tdataDaily_Report_qc[".exportFields"][] = "idle_time";
$tdataDaily_Report_qc[".exportFields"][] = "idle_percentage";

$tdataDaily_Report_qc[".importFields"] = array();
$tdataDaily_Report_qc[".importFields"][] = "qcend_date";
$tdataDaily_Report_qc[".importFields"][] = "team";
$tdataDaily_Report_qc[".importFields"][] = "qc_id";
$tdataDaily_Report_qc[".importFields"][] = "project_id";
$tdataDaily_Report_qc[".importFields"][] = "files";
$tdataDaily_Report_qc[".importFields"][] = "taken_time_total";
$tdataDaily_Report_qc[".importFields"][] = "taken_time_avg";
$tdataDaily_Report_qc[".importFields"][] = "efficiency";
$tdataDaily_Report_qc[".importFields"][] = "idle_time";
$tdataDaily_Report_qc[".importFields"][] = "idle_percentage";

$tdataDaily_Report_qc[".printFields"] = array();
$tdataDaily_Report_qc[".printFields"][] = "qcend_date";
$tdataDaily_Report_qc[".printFields"][] = "team";
$tdataDaily_Report_qc[".printFields"][] = "qc_id";
$tdataDaily_Report_qc[".printFields"][] = "project_id";
$tdataDaily_Report_qc[".printFields"][] = "files";
$tdataDaily_Report_qc[".printFields"][] = "taken_time_total";
$tdataDaily_Report_qc[".printFields"][] = "taken_time_avg";
$tdataDaily_Report_qc[".printFields"][] = "efficiency";
$tdataDaily_Report_qc[".printFields"][] = "idle_time";
$tdataDaily_Report_qc[".printFields"][] = "idle_percentage";

//	qcend_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "qcend_date";
	$fdata["GoodName"] = "qcend_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Daily_Report_qc","qcend_date"); 
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
	
		$fdata["strField"] = "qcend_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.qcend_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
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
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDaily_Report_qc["qcend_date"] = $fdata;
//	team
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team";
	$fdata["GoodName"] = "team";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Daily_Report_qc","team"); 
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

	

	
	$tdataDaily_Report_qc["team"] = $fdata;
//	qc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "qc_id";
	$fdata["GoodName"] = "qc_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Daily_Report_qc","qc_id"); 
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
	
		$fdata["strField"] = "qc_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.qc_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDaily_Report_qc["qc_id"] = $fdata;
//	project_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "project_id";
	$fdata["GoodName"] = "project_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Daily_Report_qc","project_id"); 
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

	

	
	$tdataDaily_Report_qc["project_id"] = $fdata;
//	files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "files";
	$fdata["GoodName"] = "files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_qc","files"); 
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

	

	
	$tdataDaily_Report_qc["files"] = $fdata;
//	taken_time_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "taken_time_total";
	$fdata["GoodName"] = "taken_time_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_qc","taken_time_total"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
			$fdata["isTotalAvg"] = true;	
			$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "taken_time_total"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.qc_time)))";
	
		
		
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

	

	
	$tdataDaily_Report_qc["taken_time_total"] = $fdata;
//	taken_time_avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "taken_time_avg";
	$fdata["GoodName"] = "taken_time_avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_qc","taken_time_avg"); 
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
	$fdata["FullName"] = "SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.qc_time)))";
	
		
		
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

	

	
	$tdataDaily_Report_qc["taken_time_avg"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_qc","efficiency"); 
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
	$fdata["FullName"] = "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC('00:02:00'))))/(SUM(TIME_TO_SEC(IF(jobfile.qc_time<60,'00:02:00',jobfile.qc_time)))))* 100";
	
		
		
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

	

	
	$tdataDaily_Report_qc["efficiency"] = $fdata;
//	idle_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "idle_time";
	$fdata["GoodName"] = "idle_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_qc","idle_time"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
			$fdata["isTotalAvg"] = true;	
			// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idle_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IF(SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.qc_time)))<0, IF((SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.qc_time)))) < 0, '00:00:00', (SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.qc_time))))), (SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.qc_time)))))";
	
		
		
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

	

	
	$tdataDaily_Report_qc["idle_time"] = $fdata;
//	idle_percentage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "idle_percentage";
	$fdata["GoodName"] = "idle_percentage";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_qc","idle_percentage"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
			$fdata["isTotalAvg"] = true;	
			// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idle_percentage"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IF((((25200 - SUM(TIME_TO_SEC(jobfile.qc_time)))* 100)/(25200)) < 0, (IF((((43200 - SUM(TIME_TO_SEC(jobfile.qc_time)))* 100)/(43200)) < 0, 0, (((43200 - SUM(TIME_TO_SEC(jobfile.qc_time)))* 100)/(43200)))), (((25200 - SUM(TIME_TO_SEC(jobfile.qc_time)))* 100)/(25200)))";
	
		
		
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

	

	
	$tdataDaily_Report_qc["idle_percentage"] = $fdata;

	
$tables_data["Daily Report qc"]=&$tdataDaily_Report_qc;
$field_labels["Daily_Report_qc"] = &$fieldLabelsDaily_Report_qc;
$fieldToolTips["Daily Report qc"] = &$fieldToolTipsDaily_Report_qc;
$page_titles["Daily_Report_qc"] = &$pageTitlesDaily_Report_qc;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Daily Report qc"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Daily Report qc"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Daily_Report_qc()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile.qcend_date,  `user`.team,  jobfile.qc_id,  jobfile.project_id,  COUNT(*) AS files,  SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.qc_time))) AS taken_time_total,  SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.qc_time))) AS taken_time_avg,  (TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC('00:02:00'))))/(SUM(TIME_TO_SEC(IF(jobfile.qc_time<60,'00:02:00',jobfile.qc_time)))))* 100 AS efficiency,  IF(SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.qc_time)))<0, IF((SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.qc_time)))) < 0, '00:00:00', (SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.qc_time))))), (SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.qc_time))))) AS idle_time,  IF((((25200 - SUM(TIME_TO_SEC(jobfile.qc_time)))* 100)/(25200)) < 0, (IF((((43200 - SUM(TIME_TO_SEC(jobfile.qc_time)))* 100)/(43200)) < 0, 0, (((43200 - SUM(TIME_TO_SEC(jobfile.qc_time)))* 100)/(43200)))), (((25200 - SUM(TIME_TO_SEC(jobfile.qc_time)))* 100)/(25200))) AS idle_percentage";
$proto0["m_strFrom"] = "FROM jobfile  LEFT OUTER JOIN `user` ON jobfile.qc_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto0["m_strWhere"] = "jobfile.qc_id IS NOT NULL AND jobfile.qcend_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.qc_time) > '0'";
$proto0["m_strOrderBy"] = "ORDER BY jobfile.qcend_date DESC, `user`.team, jobfile.qc_id DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "jobfile.qc_id IS NOT NULL AND jobfile.qcend_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.qc_time) > '0'";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.qc_id IS NOT NULL AND jobfile.qcend_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.qc_time) > '0'"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.qc_id IS NOT NULL";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "qc_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report qc"
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
$proto5["m_sql"] = "jobfile.qcend_date > '0000-00-00 00:00:00'";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "qcend_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report qc"
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
	"m_srcTableName" => "Daily Report qc"
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
	"m_srcTableName" => "Daily Report qc"
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
$proto13["m_sql"] = "TIME_TO_SEC(jobfile.qc_time) > '0'";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
						$proto14=array();
$proto14["m_functiontype"] = "SQLF_CUSTOM";
$proto14["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.qc_time"
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
	"m_strName" => "qcend_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report qc"
));

$proto18["m_sql"] = "jobfile.qcend_date";
$proto18["m_srcTableName"] = "Daily Report qc";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Daily Report qc"
));

$proto20["m_sql"] = "`user`.team";
$proto20["m_srcTableName"] = "Daily Report qc";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "qc_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report qc"
));

$proto22["m_sql"] = "jobfile.qc_id";
$proto22["m_srcTableName"] = "Daily Report qc";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report qc"
));

$proto24["m_sql"] = "jobfile.project_id";
$proto24["m_srcTableName"] = "Daily Report qc";
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
$proto26["m_srcTableName"] = "Daily Report qc";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "files";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$proto30=array();
$proto30["m_functiontype"] = "SQLF_CUSTOM";
$proto30["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(TIME_TO_SEC(jobfile.qc_time))"
));

$proto30["m_arguments"][]=$obj;
$proto30["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto30);

$proto29["m_sql"] = "SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.qc_time)))";
$proto29["m_srcTableName"] = "Daily Report qc";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "taken_time_total";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$proto33=array();
$proto33["m_functiontype"] = "SQLF_CUSTOM";
$proto33["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "AVG(TIME_TO_SEC(jobfile.qc_time))"
));

$proto33["m_arguments"][]=$obj;
$proto33["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto33);

$proto32["m_sql"] = "SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.qc_time)))";
$proto32["m_srcTableName"] = "Daily Report qc";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "taken_time_avg";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC('00:02:00'))))/(SUM(TIME_TO_SEC(IF(jobfile.qc_time<60,'00:02:00',jobfile.qc_time)))))* 100"
));

$proto35["m_sql"] = "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC('00:02:00'))))/(SUM(TIME_TO_SEC(IF(jobfile.qc_time<60,'00:02:00',jobfile.qc_time)))))* 100";
$proto35["m_srcTableName"] = "Daily Report qc";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$proto38=array();
$proto38["m_functiontype"] = "SQLF_CUSTOM";
$proto38["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.qc_time)))<0"
));

$proto38["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IF((SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.qc_time)))) < 0, '00:00:00', (SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.qc_time)))))"
));

$proto38["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "(SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.qc_time))))"
));

$proto38["m_arguments"][]=$obj;
$proto38["m_strFunctionName"] = "IF";
$obj = new SQLFunctionCall($proto38);

$proto37["m_sql"] = "IF(SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.qc_time)))<0, IF((SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.qc_time)))) < 0, '00:00:00', (SEC_TO_TIME(43200-SUM(TIME_TO_SEC(jobfile.qc_time))))), (SEC_TO_TIME(25200-SUM(TIME_TO_SEC(jobfile.qc_time)))))";
$proto37["m_srcTableName"] = "Daily Report qc";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "idle_time";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$proto43=array();
$proto43["m_functiontype"] = "SQLF_CUSTOM";
$proto43["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(((25200 - SUM(TIME_TO_SEC(jobfile.qc_time)))* 100)/(25200)) < 0"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "(IF((((43200 - SUM(TIME_TO_SEC(jobfile.qc_time)))* 100)/(43200)) < 0, 0, (((43200 - SUM(TIME_TO_SEC(jobfile.qc_time)))* 100)/(43200))))"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "(((25200 - SUM(TIME_TO_SEC(jobfile.qc_time)))* 100)/(25200))"
));

$proto43["m_arguments"][]=$obj;
$proto43["m_strFunctionName"] = "IF";
$obj = new SQLFunctionCall($proto43);

$proto42["m_sql"] = "IF((((25200 - SUM(TIME_TO_SEC(jobfile.qc_time)))* 100)/(25200)) < 0, (IF((((43200 - SUM(TIME_TO_SEC(jobfile.qc_time)))* 100)/(43200)) < 0, 0, (((43200 - SUM(TIME_TO_SEC(jobfile.qc_time)))* 100)/(43200)))), (((25200 - SUM(TIME_TO_SEC(jobfile.qc_time)))* 100)/(25200)))";
$proto42["m_srcTableName"] = "Daily Report qc";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "idle_percentage";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto47=array();
$proto47["m_link"] = "SQLL_MAIN";
			$proto48=array();
$proto48["m_strName"] = "jobfile";
$proto48["m_srcTableName"] = "Daily Report qc";
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
$proto47["m_srcTableName"] = "Daily Report qc";
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
$proto52["m_srcTableName"] = "Daily Report qc";
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
$obj = new SQLTable($proto52);

$proto51["m_table"] = $obj;
$proto51["m_sql"] = "LEFT OUTER JOIN `user` ON jobfile.qc_id = `user`.user_id";
$proto51["m_alias"] = "";
$proto51["m_srcTableName"] = "Daily Report qc";
$proto53=array();
$proto53["m_sql"] = "jobfile.qc_id = `user`.user_id";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "qc_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report qc"
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
$proto56["m_srcTableName"] = "Daily Report qc";
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
$obj = new SQLTable($proto56);

$proto55["m_table"] = $obj;
$proto55["m_sql"] = "LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto55["m_alias"] = "";
$proto55["m_srcTableName"] = "Daily Report qc";
$proto57=array();
$proto57["m_sql"] = "jobfile.project_id = pdf.pdf_id";
$proto57["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report qc"
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
	"m_sql" => "jobfile.qcend_date"
));

$proto60["m_arguments"][]=$obj;
$proto60["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto60);

$proto59["m_column"]=$obj;
$obj = new SQLGroupByItem($proto59);

$proto0["m_groupby"][]=$obj;
												$proto62=array();
						$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Daily Report qc"
));

$proto62["m_column"]=$obj;
$obj = new SQLGroupByItem($proto62);

$proto0["m_groupby"][]=$obj;
												$proto64=array();
						$obj = new SQLField(array(
	"m_strName" => "qc_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report qc"
));

$proto64["m_column"]=$obj;
$obj = new SQLGroupByItem($proto64);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto66=array();
						$obj = new SQLField(array(
	"m_strName" => "qcend_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report qc"
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
	"m_srcTableName" => "Daily Report qc"
));

$proto68["m_column"]=$obj;
$proto68["m_bAsc"] = 1;
$proto68["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto68);

$proto0["m_orderby"][]=$obj;					
												$proto70=array();
						$obj = new SQLField(array(
	"m_strName" => "qc_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Report qc"
));

$proto70["m_column"]=$obj;
$proto70["m_bAsc"] = 0;
$proto70["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto70);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Daily Report qc";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Daily_Report_qc = createSqlQuery_Daily_Report_qc();


	
										
	
$tdataDaily_Report_qc[".sqlquery"] = $queryData_Daily_Report_qc;

$tableEvents["Daily Report qc"] = new eventsBase;
$tdataDaily_Report_qc[".hasEvents"] = false;

?>