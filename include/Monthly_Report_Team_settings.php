<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMonthly_Report_Team = array();	
	$tdataMonthly_Report_Team[".truncateText"] = true;
	$tdataMonthly_Report_Team[".NumberOfChars"] = 256; 
	$tdataMonthly_Report_Team[".ShortName"] = "Monthly_Report_Team";
	$tdataMonthly_Report_Team[".OwnerID"] = "";
	$tdataMonthly_Report_Team[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsMonthly_Report_Team = array();
$fieldToolTipsMonthly_Report_Team = array();
$pageTitlesMonthly_Report_Team = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMonthly_Report_Team["English"] = array();
	$fieldToolTipsMonthly_Report_Team["English"] = array();
	$pageTitlesMonthly_Report_Team["English"] = array();
	$fieldLabelsMonthly_Report_Team["English"]["eta_total"] = "Eta Total";
	$fieldToolTipsMonthly_Report_Team["English"]["eta_total"] = "";
	$fieldLabelsMonthly_Report_Team["English"]["work_date"] = "Work Date";
	$fieldToolTipsMonthly_Report_Team["English"]["work_date"] = "";
	$fieldLabelsMonthly_Report_Team["English"]["team_id"] = "Team Id";
	$fieldToolTipsMonthly_Report_Team["English"]["team_id"] = "";
	$fieldLabelsMonthly_Report_Team["English"]["designer_present"] = "Designer Present";
	$fieldToolTipsMonthly_Report_Team["English"]["designer_present"] = "";
	$fieldLabelsMonthly_Report_Team["English"]["total_images"] = "Total Images";
	$fieldToolTipsMonthly_Report_Team["English"]["total_images"] = "";
	$fieldLabelsMonthly_Report_Team["English"]["Total_time"] = "Total Time";
	$fieldToolTipsMonthly_Report_Team["English"]["Total_time"] = "";
	$fieldLabelsMonthly_Report_Team["English"]["idle_time"] = "Idle Time";
	$fieldToolTipsMonthly_Report_Team["English"]["idle_time"] = "";
	$fieldLabelsMonthly_Report_Team["English"]["idle_p"] = "Idle P";
	$fieldToolTipsMonthly_Report_Team["English"]["idle_p"] = "";
	$fieldLabelsMonthly_Report_Team["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsMonthly_Report_Team["English"]["efficiency"] = "";
	$fieldLabelsMonthly_Report_Team["English"]["performence"] = "Performence";
	$fieldToolTipsMonthly_Report_Team["English"]["performence"] = "";
	$fieldLabelsMonthly_Report_Team["English"]["work_type"] = "Work Type";
	$fieldToolTipsMonthly_Report_Team["English"]["work_type"] = "";
	if (count($fieldToolTipsMonthly_Report_Team["English"]))
		$tdataMonthly_Report_Team[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMonthly_Report_Team[""] = array();
	$fieldToolTipsMonthly_Report_Team[""] = array();
	$pageTitlesMonthly_Report_Team[""] = array();
	if (count($fieldToolTipsMonthly_Report_Team[""]))
		$tdataMonthly_Report_Team[".isUseToolTips"] = true;
}
	
	
	$tdataMonthly_Report_Team[".NCSearch"] = true;



$tdataMonthly_Report_Team[".shortTableName"] = "Monthly_Report_Team";
$tdataMonthly_Report_Team[".nSecOptions"] = 0;
$tdataMonthly_Report_Team[".recsPerRowList"] = 1;
$tdataMonthly_Report_Team[".recsPerRowPrint"] = 1;
$tdataMonthly_Report_Team[".mainTableOwnerID"] = "";
$tdataMonthly_Report_Team[".moveNext"] = 1;
$tdataMonthly_Report_Team[".entityType"] = 2;

$tdataMonthly_Report_Team[".strOriginalTableName"] = "jobfile";




$tdataMonthly_Report_Team[".showAddInPopup"] = false;

$tdataMonthly_Report_Team[".showEditInPopup"] = false;

$tdataMonthly_Report_Team[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMonthly_Report_Team[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMonthly_Report_Team[".fieldsForRegister"] = array();

$tdataMonthly_Report_Team[".listAjax"] = false;

	$tdataMonthly_Report_Team[".audit"] = false;

	$tdataMonthly_Report_Team[".locking"] = false;


$tdataMonthly_Report_Team[".add"] = true;
$tdataMonthly_Report_Team[".afterAddAction"] = 0;
$tdataMonthly_Report_Team[".closePopupAfterAdd"] = 1;
$tdataMonthly_Report_Team[".afterAddActionDetTable"] = "";

$tdataMonthly_Report_Team[".list"] = true;

$tdataMonthly_Report_Team[".inlineAdd"] = true;


$tdataMonthly_Report_Team[".exportTo"] = true;

$tdataMonthly_Report_Team[".printFriendly"] = true;


$tdataMonthly_Report_Team[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataMonthly_Report_Team[".searchSaving"] = false;
//

$tdataMonthly_Report_Team[".showSearchPanel"] = true;
		$tdataMonthly_Report_Team[".flexibleSearch"] = true;		

if (isMobile())
	$tdataMonthly_Report_Team[".isUseAjaxSuggest"] = false;
else 
	$tdataMonthly_Report_Team[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataMonthly_Report_Team[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMonthly_Report_Team[".isUseTimeForSearch"] = false;





$tdataMonthly_Report_Team[".allSearchFields"] = array();
$tdataMonthly_Report_Team[".filterFields"] = array();
$tdataMonthly_Report_Team[".requiredSearchFields"] = array();

$tdataMonthly_Report_Team[".allSearchFields"][] = "work_date";
	$tdataMonthly_Report_Team[".allSearchFields"][] = "team_id";
	$tdataMonthly_Report_Team[".allSearchFields"][] = "designer_present";
	$tdataMonthly_Report_Team[".allSearchFields"][] = "total_images";
	$tdataMonthly_Report_Team[".allSearchFields"][] = "Total_time";
	$tdataMonthly_Report_Team[".allSearchFields"][] = "idle_time";
	$tdataMonthly_Report_Team[".allSearchFields"][] = "idle_p";
	$tdataMonthly_Report_Team[".allSearchFields"][] = "efficiency";
	$tdataMonthly_Report_Team[".allSearchFields"][] = "performence";
	$tdataMonthly_Report_Team[".allSearchFields"][] = "work_type";
	

$tdataMonthly_Report_Team[".googleLikeFields"] = array();
$tdataMonthly_Report_Team[".googleLikeFields"][] = "work_date";
$tdataMonthly_Report_Team[".googleLikeFields"][] = "team_id";
$tdataMonthly_Report_Team[".googleLikeFields"][] = "designer_present";
$tdataMonthly_Report_Team[".googleLikeFields"][] = "total_images";
$tdataMonthly_Report_Team[".googleLikeFields"][] = "eta_total";
$tdataMonthly_Report_Team[".googleLikeFields"][] = "Total_time";
$tdataMonthly_Report_Team[".googleLikeFields"][] = "idle_time";
$tdataMonthly_Report_Team[".googleLikeFields"][] = "idle_p";
$tdataMonthly_Report_Team[".googleLikeFields"][] = "efficiency";
$tdataMonthly_Report_Team[".googleLikeFields"][] = "performence";
$tdataMonthly_Report_Team[".googleLikeFields"][] = "work_type";


$tdataMonthly_Report_Team[".advSearchFields"] = array();
$tdataMonthly_Report_Team[".advSearchFields"][] = "work_date";
$tdataMonthly_Report_Team[".advSearchFields"][] = "team_id";
$tdataMonthly_Report_Team[".advSearchFields"][] = "designer_present";
$tdataMonthly_Report_Team[".advSearchFields"][] = "total_images";
$tdataMonthly_Report_Team[".advSearchFields"][] = "eta_total";
$tdataMonthly_Report_Team[".advSearchFields"][] = "Total_time";
$tdataMonthly_Report_Team[".advSearchFields"][] = "idle_time";
$tdataMonthly_Report_Team[".advSearchFields"][] = "idle_p";
$tdataMonthly_Report_Team[".advSearchFields"][] = "efficiency";
$tdataMonthly_Report_Team[".advSearchFields"][] = "performence";
$tdataMonthly_Report_Team[".advSearchFields"][] = "work_type";

$tdataMonthly_Report_Team[".tableType"] = "report";

$tdataMonthly_Report_Team[".printerPageOrientation"] = 0;
$tdataMonthly_Report_Team[".nPrinterPageScale"] = 100;

$tdataMonthly_Report_Team[".nPrinterSplitRecords"] = 40;

$tdataMonthly_Report_Team[".nPrinterPDFSplitRecords"] = 40;



$tdataMonthly_Report_Team[".geocodingEnabled"] = false;

//report settings

$tdataMonthly_Report_Team[".reportPrintPartitionType"] = 0;	
$tdataMonthly_Report_Team[".reportPrintGroupsPerPage"] = 3;	
	$tdataMonthly_Report_Team[".lowGroup"] = 1;



$tdataMonthly_Report_Team[".reportGroupFields"] = true;
$tdataMonthly_Report_Team[".pageSize"] = 1;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "end2_date";
	$rgroupField['groupInterval'] = 3;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataMonthly_Report_Team[".reportGroupFieldsData"] = $reportGroupFields;




$tdataMonthly_Report_Team[".reportPageSummary"] = true;


$tdataMonthly_Report_Team[".repShowDet"] = true;

$tdataMonthly_Report_Team[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC, team_id, ((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100                          DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMonthly_Report_Team[".strOrderBy"] = $tstrOrderBy;

$tdataMonthly_Report_Team[".orderindexes"] = array();
$tdataMonthly_Report_Team[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "work_date");
$tdataMonthly_Report_Team[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "team_id");
$tdataMonthly_Report_Team[".orderindexes"][] = array(10, (0 ? "ASC" : "DESC"), "((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100                          ");

$tdataMonthly_Report_Team[".sqlHead"] = "SELECT work_date,  team_id,  COUNT(DISTINCT `designer_name`) AS designer_present,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  (IF (((27000 * COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,SEC_TO_TIME((43200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time)),SEC_TO_TIME((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time)))) AS idle_time,  (IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`))))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  ((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS performence,  work_type";
$tdataMonthly_Report_Team[".sqlFrom"] = "FROM designer_report";
$tdataMonthly_Report_Team[".sqlWhereExpr"] = "";
$tdataMonthly_Report_Team[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMonthly_Report_Team[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMonthly_Report_Team[".arrGroupsPerPage"] = $arrGPP;

$tdataMonthly_Report_Team[".highlightSearchResults"] = true;

$tableKeysMonthly_Report_Team = array();
$tdataMonthly_Report_Team[".Keys"] = $tableKeysMonthly_Report_Team;

$tdataMonthly_Report_Team[".listFields"] = array();
$tdataMonthly_Report_Team[".listFields"][] = "work_date";
$tdataMonthly_Report_Team[".listFields"][] = "team_id";
$tdataMonthly_Report_Team[".listFields"][] = "designer_present";
$tdataMonthly_Report_Team[".listFields"][] = "total_images";
$tdataMonthly_Report_Team[".listFields"][] = "eta_total";
$tdataMonthly_Report_Team[".listFields"][] = "Total_time";
$tdataMonthly_Report_Team[".listFields"][] = "idle_time";
$tdataMonthly_Report_Team[".listFields"][] = "idle_p";
$tdataMonthly_Report_Team[".listFields"][] = "efficiency";
$tdataMonthly_Report_Team[".listFields"][] = "performence";
$tdataMonthly_Report_Team[".listFields"][] = "work_type";

$tdataMonthly_Report_Team[".hideMobileList"] = array();


$tdataMonthly_Report_Team[".viewFields"] = array();
$tdataMonthly_Report_Team[".viewFields"][] = "work_date";
$tdataMonthly_Report_Team[".viewFields"][] = "team_id";
$tdataMonthly_Report_Team[".viewFields"][] = "designer_present";
$tdataMonthly_Report_Team[".viewFields"][] = "total_images";
$tdataMonthly_Report_Team[".viewFields"][] = "eta_total";
$tdataMonthly_Report_Team[".viewFields"][] = "Total_time";
$tdataMonthly_Report_Team[".viewFields"][] = "idle_time";
$tdataMonthly_Report_Team[".viewFields"][] = "idle_p";
$tdataMonthly_Report_Team[".viewFields"][] = "efficiency";
$tdataMonthly_Report_Team[".viewFields"][] = "performence";
$tdataMonthly_Report_Team[".viewFields"][] = "work_type";

$tdataMonthly_Report_Team[".addFields"] = array();

$tdataMonthly_Report_Team[".masterListFields"] = array();
$tdataMonthly_Report_Team[".masterListFields"][] = "work_date";
$tdataMonthly_Report_Team[".masterListFields"][] = "team_id";
$tdataMonthly_Report_Team[".masterListFields"][] = "designer_present";
$tdataMonthly_Report_Team[".masterListFields"][] = "total_images";
$tdataMonthly_Report_Team[".masterListFields"][] = "eta_total";
$tdataMonthly_Report_Team[".masterListFields"][] = "Total_time";
$tdataMonthly_Report_Team[".masterListFields"][] = "idle_time";
$tdataMonthly_Report_Team[".masterListFields"][] = "idle_p";
$tdataMonthly_Report_Team[".masterListFields"][] = "efficiency";
$tdataMonthly_Report_Team[".masterListFields"][] = "performence";
$tdataMonthly_Report_Team[".masterListFields"][] = "work_type";

$tdataMonthly_Report_Team[".inlineAddFields"] = array();

$tdataMonthly_Report_Team[".editFields"] = array();

$tdataMonthly_Report_Team[".inlineEditFields"] = array();

$tdataMonthly_Report_Team[".exportFields"] = array();
$tdataMonthly_Report_Team[".exportFields"][] = "work_date";
$tdataMonthly_Report_Team[".exportFields"][] = "team_id";
$tdataMonthly_Report_Team[".exportFields"][] = "designer_present";
$tdataMonthly_Report_Team[".exportFields"][] = "total_images";
$tdataMonthly_Report_Team[".exportFields"][] = "eta_total";
$tdataMonthly_Report_Team[".exportFields"][] = "Total_time";
$tdataMonthly_Report_Team[".exportFields"][] = "idle_time";
$tdataMonthly_Report_Team[".exportFields"][] = "idle_p";
$tdataMonthly_Report_Team[".exportFields"][] = "efficiency";
$tdataMonthly_Report_Team[".exportFields"][] = "performence";
$tdataMonthly_Report_Team[".exportFields"][] = "work_type";

$tdataMonthly_Report_Team[".importFields"] = array();
$tdataMonthly_Report_Team[".importFields"][] = "work_date";
$tdataMonthly_Report_Team[".importFields"][] = "team_id";
$tdataMonthly_Report_Team[".importFields"][] = "designer_present";
$tdataMonthly_Report_Team[".importFields"][] = "total_images";
$tdataMonthly_Report_Team[".importFields"][] = "eta_total";
$tdataMonthly_Report_Team[".importFields"][] = "Total_time";
$tdataMonthly_Report_Team[".importFields"][] = "idle_time";
$tdataMonthly_Report_Team[".importFields"][] = "idle_p";
$tdataMonthly_Report_Team[".importFields"][] = "efficiency";
$tdataMonthly_Report_Team[".importFields"][] = "performence";
$tdataMonthly_Report_Team[".importFields"][] = "work_type";

$tdataMonthly_Report_Team[".printFields"] = array();
$tdataMonthly_Report_Team[".printFields"][] = "work_date";
$tdataMonthly_Report_Team[".printFields"][] = "team_id";
$tdataMonthly_Report_Team[".printFields"][] = "designer_present";
$tdataMonthly_Report_Team[".printFields"][] = "total_images";
$tdataMonthly_Report_Team[".printFields"][] = "eta_total";
$tdataMonthly_Report_Team[".printFields"][] = "Total_time";
$tdataMonthly_Report_Team[".printFields"][] = "idle_time";
$tdataMonthly_Report_Team[".printFields"][] = "idle_p";
$tdataMonthly_Report_Team[".printFields"][] = "efficiency";
$tdataMonthly_Report_Team[".printFields"][] = "performence";
$tdataMonthly_Report_Team[".printFields"][] = "work_type";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Team","work_date"); 
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

	

	
	$tdataMonthly_Report_Team["work_date"] = $fdata;
//	team_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team_id";
	$fdata["GoodName"] = "team_id";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Team","team_id"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "team_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "team_id";
	
		
		
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

	

	
	$tdataMonthly_Report_Team["team_id"] = $fdata;
//	designer_present
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer_present";
	$fdata["GoodName"] = "designer_present";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Team","designer_present"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_present"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(DISTINCT `designer_name`)";
	
		
		
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

	

	
	$tdataMonthly_Report_Team["designer_present"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Team","total_images"); 
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

	

	
	$tdataMonthly_Report_Team["total_images"] = $fdata;
//	eta_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "eta_total";
	$fdata["GoodName"] = "eta_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Team","eta_total"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "eta_total"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(estimated_time))";
	
		
		
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
	
	
	
	

	

	
	$tdataMonthly_Report_Team["eta_total"] = $fdata;
//	Total_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Total_time";
	$fdata["GoodName"] = "Total_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Team","Total_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Total_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(designer_time))";
	
		
		
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

	

	
	$tdataMonthly_Report_Team["Total_time"] = $fdata;
//	idle_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "idle_time";
	$fdata["GoodName"] = "idle_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Team","idle_time"); 
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
	$fdata["FullName"] = "(IF (((27000 * COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,SEC_TO_TIME((43200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time)),SEC_TO_TIME((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))))";
	
		
		
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

	

	
	$tdataMonthly_Report_Team["idle_time"] = $fdata;
//	idle_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idle_p";
	$fdata["GoodName"] = "idle_p";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Team","idle_p"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idle_p"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`))))*100";
	
		
		
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

	

	
	$tdataMonthly_Report_Team["idle_p"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Team","efficiency"); 
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
	$fdata["FullName"] = "((SUM(estimated_time))/(SUM(designer_time)))*100";
	
		
		
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

	

	
	$tdataMonthly_Report_Team["efficiency"] = $fdata;
//	performence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "performence";
	$fdata["GoodName"] = "performence";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Team","performence"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "performence"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100";
	
		
		
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

	

	
	$tdataMonthly_Report_Team["performence"] = $fdata;
//	work_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "work_type";
	$fdata["GoodName"] = "work_type";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Team","work_type"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "work_type"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "work_type";
	
		
		
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

	

	
	$tdataMonthly_Report_Team["work_type"] = $fdata;

	
$tables_data["Monthly Report Team"]=&$tdataMonthly_Report_Team;
$field_labels["Monthly_Report_Team"] = &$fieldLabelsMonthly_Report_Team;
$fieldToolTips["Monthly Report Team"] = &$fieldToolTipsMonthly_Report_Team;
$page_titles["Monthly_Report_Team"] = &$pageTitlesMonthly_Report_Team;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Monthly Report Team"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Monthly Report Team"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Monthly_Report_Team()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_date,  team_id,  COUNT(DISTINCT `designer_name`) AS designer_present,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  (IF (((27000 * COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,SEC_TO_TIME((43200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time)),SEC_TO_TIME((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time)))) AS idle_time,  (IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`))))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  ((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS performence,  work_type";
$proto0["m_strFrom"] = "FROM designer_report";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY work_date DESC, team_id, ((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100                          DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Monthly Report Team"
));

$proto5["m_sql"] = "work_date";
$proto5["m_srcTableName"] = "Monthly Report Team";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Monthly Report Team"
));

$proto7["m_sql"] = "team_id";
$proto7["m_srcTableName"] = "Monthly Report Team";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$proto10=array();
$proto10["m_functiontype"] = "SQLF_COUNT";
$proto10["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "DISTINCT `designer_name`"
));

$proto10["m_arguments"][]=$obj;
$proto10["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto10);

$proto9["m_sql"] = "COUNT(DISTINCT `designer_name`)";
$proto9["m_srcTableName"] = "Monthly Report Team";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "designer_present";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_SUM";
$proto13["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total_images_counted",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Monthly Report Team"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "SUM(total_images_counted)";
$proto12["m_srcTableName"] = "Monthly Report Team";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "total_images";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$proto16=array();
$proto16["m_functiontype"] = "SQLF_CUSTOM";
$proto16["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(estimated_time)"
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "SEC_TO_TIME(SUM(estimated_time))";
$proto15["m_srcTableName"] = "Monthly Report Team";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "eta_total";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_CUSTOM";
$proto19["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(designer_time)"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "SEC_TO_TIME(SUM(designer_time))";
$proto18["m_srcTableName"] = "Monthly Report Team";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "Total_time";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF (((27000 * COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,SEC_TO_TIME((43200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time)),SEC_TO_TIME((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))))"
));

$proto21["m_sql"] = "(IF (((27000 * COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,SEC_TO_TIME((43200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time)),SEC_TO_TIME((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))))";
$proto21["m_srcTableName"] = "Monthly Report Team";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "idle_time";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`))))*100"
));

$proto23["m_sql"] = "(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`))))*100";
$proto23["m_srcTableName"] = "Monthly Report Team";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "idle_p";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((SUM(estimated_time))/(SUM(designer_time)))*100"
));

$proto25["m_sql"] = "((SUM(estimated_time))/(SUM(designer_time)))*100";
$proto25["m_srcTableName"] = "Monthly Report Team";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100"
));

$proto27["m_sql"] = "((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100";
$proto27["m_srcTableName"] = "Monthly Report Team";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "performence";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Monthly Report Team"
));

$proto29["m_sql"] = "work_type";
$proto29["m_srcTableName"] = "Monthly Report Team";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "designer_report";
$proto32["m_srcTableName"] = "Monthly Report Team";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "report_id";
$proto32["m_columns"][] = "report_reference";
$proto32["m_columns"][] = "work_date";
$proto32["m_columns"][] = "designer_name";
$proto32["m_columns"][] = "team_id";
$proto32["m_columns"][] = "subdiv_id";
$proto32["m_columns"][] = "user_group";
$proto32["m_columns"][] = "pdf_name";
$proto32["m_columns"][] = "estimated_time";
$proto32["m_columns"][] = "designer_time";
$proto32["m_columns"][] = "qc_time";
$proto32["m_columns"][] = "efficiency";
$proto32["m_columns"][] = "total_images_counted";
$proto32["m_columns"][] = "comments";
$proto32["m_columns"][] = "work_type";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "designer_report";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "Monthly Report Team";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto35=array();
						$proto36=array();
$proto36["m_functiontype"] = "SQLF_CUSTOM";
$proto36["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "work_date"
));

$proto36["m_arguments"][]=$obj;
$proto36["m_strFunctionName"] = "MONTH";
$obj = new SQLFunctionCall($proto36);

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Monthly Report Team"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Monthly Report Team"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Monthly Report Team"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Monthly Report Team"
));

$proto44["m_column"]=$obj;
$proto44["m_bAsc"] = 1;
$proto44["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto44);

$proto0["m_orderby"][]=$obj;					
												$proto46=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100                          "
));

$proto46["m_column"]=$obj;
$proto46["m_bAsc"] = 0;
$proto46["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto46);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Monthly Report Team";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Monthly_Report_Team = createSqlQuery_Monthly_Report_Team();


	
											
	
$tdataMonthly_Report_Team[".sqlquery"] = $queryData_Monthly_Report_Team;

$tableEvents["Monthly Report Team"] = new eventsBase;
$tdataMonthly_Report_Team[".hasEvents"] = false;

?>