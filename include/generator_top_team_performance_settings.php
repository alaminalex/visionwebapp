<?php
require_once(getabspath("classes/cipherer.php"));




$tdatagenerator_top_team_performance = array();	
	$tdatagenerator_top_team_performance[".truncateText"] = true;
	$tdatagenerator_top_team_performance[".NumberOfChars"] = 256; 
	$tdatagenerator_top_team_performance[".ShortName"] = "generator_top_team_performance";
	$tdatagenerator_top_team_performance[".OwnerID"] = "";
	$tdatagenerator_top_team_performance[".OriginalTable"] = "designer_report";

//	field labels
$fieldLabelsgenerator_top_team_performance = array();
$fieldToolTipsgenerator_top_team_performance = array();
$pageTitlesgenerator_top_team_performance = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgenerator_top_team_performance["English"] = array();
	$fieldToolTipsgenerator_top_team_performance["English"] = array();
	$pageTitlesgenerator_top_team_performance["English"] = array();
	$fieldLabelsgenerator_top_team_performance["English"]["work_date"] = "Work Date";
	$fieldToolTipsgenerator_top_team_performance["English"]["work_date"] = "";
	$fieldLabelsgenerator_top_team_performance["English"]["work_type"] = "Work Type";
	$fieldToolTipsgenerator_top_team_performance["English"]["work_type"] = "";
	$fieldLabelsgenerator_top_team_performance["English"]["Total_time"] = "Total Time";
	$fieldToolTipsgenerator_top_team_performance["English"]["Total_time"] = "";
	$fieldLabelsgenerator_top_team_performance["English"]["total_images"] = "Total Images";
	$fieldToolTipsgenerator_top_team_performance["English"]["total_images"] = "";
	$fieldLabelsgenerator_top_team_performance["English"]["idle_time"] = "Idle Time";
	$fieldToolTipsgenerator_top_team_performance["English"]["idle_time"] = "";
	$fieldLabelsgenerator_top_team_performance["English"]["idle_p"] = "Idle P";
	$fieldToolTipsgenerator_top_team_performance["English"]["idle_p"] = "";
	$fieldLabelsgenerator_top_team_performance["English"]["eta_total"] = "Eta Total";
	$fieldToolTipsgenerator_top_team_performance["English"]["eta_total"] = "";
	$fieldLabelsgenerator_top_team_performance["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsgenerator_top_team_performance["English"]["efficiency"] = "";
	$fieldLabelsgenerator_top_team_performance["English"]["team_id"] = "Team Id";
	$fieldToolTipsgenerator_top_team_performance["English"]["team_id"] = "";
	$fieldLabelsgenerator_top_team_performance["English"]["designer_present"] = "Designer Present";
	$fieldToolTipsgenerator_top_team_performance["English"]["designer_present"] = "";
	$fieldLabelsgenerator_top_team_performance["English"]["performance"] = "Performance";
	$fieldToolTipsgenerator_top_team_performance["English"]["performance"] = "";
	if (count($fieldToolTipsgenerator_top_team_performance["English"]))
		$tdatagenerator_top_team_performance[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsgenerator_top_team_performance[""] = array();
	$fieldToolTipsgenerator_top_team_performance[""] = array();
	$pageTitlesgenerator_top_team_performance[""] = array();
	if (count($fieldToolTipsgenerator_top_team_performance[""]))
		$tdatagenerator_top_team_performance[".isUseToolTips"] = true;
}
	
	
	$tdatagenerator_top_team_performance[".NCSearch"] = true;



$tdatagenerator_top_team_performance[".shortTableName"] = "generator_top_team_performance";
$tdatagenerator_top_team_performance[".nSecOptions"] = 0;
$tdatagenerator_top_team_performance[".recsPerRowList"] = 1;
$tdatagenerator_top_team_performance[".recsPerRowPrint"] = 1;
$tdatagenerator_top_team_performance[".mainTableOwnerID"] = "";
$tdatagenerator_top_team_performance[".moveNext"] = 1;
$tdatagenerator_top_team_performance[".entityType"] = 2;

$tdatagenerator_top_team_performance[".strOriginalTableName"] = "designer_report";




$tdatagenerator_top_team_performance[".showAddInPopup"] = false;

$tdatagenerator_top_team_performance[".showEditInPopup"] = false;

$tdatagenerator_top_team_performance[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagenerator_top_team_performance[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagenerator_top_team_performance[".fieldsForRegister"] = array();

$tdatagenerator_top_team_performance[".listAjax"] = false;

	$tdatagenerator_top_team_performance[".audit"] = false;

	$tdatagenerator_top_team_performance[".locking"] = false;


$tdatagenerator_top_team_performance[".add"] = true;
$tdatagenerator_top_team_performance[".afterAddAction"] = 1;
$tdatagenerator_top_team_performance[".closePopupAfterAdd"] = 1;
$tdatagenerator_top_team_performance[".afterAddActionDetTable"] = "";

$tdatagenerator_top_team_performance[".list"] = true;

$tdatagenerator_top_team_performance[".inlineAdd"] = true;


$tdatagenerator_top_team_performance[".exportTo"] = true;

$tdatagenerator_top_team_performance[".printFriendly"] = true;


$tdatagenerator_top_team_performance[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatagenerator_top_team_performance[".searchSaving"] = false;
//

$tdatagenerator_top_team_performance[".showSearchPanel"] = true;
		$tdatagenerator_top_team_performance[".flexibleSearch"] = true;		

if (isMobile())
	$tdatagenerator_top_team_performance[".isUseAjaxSuggest"] = false;
else 
	$tdatagenerator_top_team_performance[".isUseAjaxSuggest"] = true;



																																																																																																																																			
$tdatagenerator_top_team_performance[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagenerator_top_team_performance[".isUseTimeForSearch"] = false;





$tdatagenerator_top_team_performance[".allSearchFields"] = array();
$tdatagenerator_top_team_performance[".filterFields"] = array();
$tdatagenerator_top_team_performance[".requiredSearchFields"] = array();

$tdatagenerator_top_team_performance[".allSearchFields"][] = "performance";
	

$tdatagenerator_top_team_performance[".googleLikeFields"] = array();
$tdatagenerator_top_team_performance[".googleLikeFields"][] = "work_date";
$tdatagenerator_top_team_performance[".googleLikeFields"][] = "team_id";
$tdatagenerator_top_team_performance[".googleLikeFields"][] = "designer_present";
$tdatagenerator_top_team_performance[".googleLikeFields"][] = "total_images";
$tdatagenerator_top_team_performance[".googleLikeFields"][] = "eta_total";
$tdatagenerator_top_team_performance[".googleLikeFields"][] = "Total_time";
$tdatagenerator_top_team_performance[".googleLikeFields"][] = "idle_time";
$tdatagenerator_top_team_performance[".googleLikeFields"][] = "idle_p";
$tdatagenerator_top_team_performance[".googleLikeFields"][] = "efficiency";
$tdatagenerator_top_team_performance[".googleLikeFields"][] = "performance";
$tdatagenerator_top_team_performance[".googleLikeFields"][] = "work_type";


$tdatagenerator_top_team_performance[".advSearchFields"] = array();
$tdatagenerator_top_team_performance[".advSearchFields"][] = "work_date";
$tdatagenerator_top_team_performance[".advSearchFields"][] = "team_id";
$tdatagenerator_top_team_performance[".advSearchFields"][] = "designer_present";
$tdatagenerator_top_team_performance[".advSearchFields"][] = "total_images";
$tdatagenerator_top_team_performance[".advSearchFields"][] = "eta_total";
$tdatagenerator_top_team_performance[".advSearchFields"][] = "Total_time";
$tdatagenerator_top_team_performance[".advSearchFields"][] = "idle_time";
$tdatagenerator_top_team_performance[".advSearchFields"][] = "idle_p";
$tdatagenerator_top_team_performance[".advSearchFields"][] = "efficiency";
$tdatagenerator_top_team_performance[".advSearchFields"][] = "performance";
$tdatagenerator_top_team_performance[".advSearchFields"][] = "work_type";

$tdatagenerator_top_team_performance[".tableType"] = "report";

$tdatagenerator_top_team_performance[".printerPageOrientation"] = 0;
$tdatagenerator_top_team_performance[".nPrinterPageScale"] = 100;

$tdatagenerator_top_team_performance[".nPrinterSplitRecords"] = 40;

$tdatagenerator_top_team_performance[".nPrinterPDFSplitRecords"] = 40;



$tdatagenerator_top_team_performance[".geocodingEnabled"] = false;

//report settings
$tdatagenerator_top_team_performance[".printReportLayout"] = 6;	

$tdatagenerator_top_team_performance[".reportPrintPartitionType"] = 1;	
$tdatagenerator_top_team_performance[".reportPrintGroupsPerPage"] = 40;	
	$tdatagenerator_top_team_performance[".reportPrintPDFGroupsPerPage"] = 40;
$tdatagenerator_top_team_performance[".lowGroup"] = 0;



$tdatagenerator_top_team_performance[".pageSize"] = 3;	






$tdatagenerator_top_team_performance[".repShowDet"] = true;

$tdatagenerator_top_team_performance[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC, ((1-(IF(((25200*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((25200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(25200*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100      DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagenerator_top_team_performance[".strOrderBy"] = $tstrOrderBy;

$tdatagenerator_top_team_performance[".orderindexes"] = array();
$tdatagenerator_top_team_performance[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "work_date");
$tdatagenerator_top_team_performance[".orderindexes"][] = array(10, (0 ? "ASC" : "DESC"), "((1-(IF(((25200*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((25200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(25200*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100      ");

$tdatagenerator_top_team_performance[".sqlHead"] = "SELECT work_date,  team_id,  COUNT(DISTINCT `designer_name`) AS designer_present,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  (IF (((25200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,SEC_TO_TIME((43200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time)),SEC_TO_TIME((25200*COUNT(DISTINCT `designer_name`))-SUM(designer_time)))) AS idle_time,  (IF(((25200*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((25200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(25200*COUNT(DISTINCT `designer_name`))))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  ((1-(IF(((25200*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((25200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(25200*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS performance,  work_type";
$tdatagenerator_top_team_performance[".sqlFrom"] = "FROM designer_report";
$tdatagenerator_top_team_performance[".sqlWhereExpr"] = "user_group =7";
$tdatagenerator_top_team_performance[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagenerator_top_team_performance[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagenerator_top_team_performance[".arrGroupsPerPage"] = $arrGPP;

$tdatagenerator_top_team_performance[".highlightSearchResults"] = true;

$tableKeysgenerator_top_team_performance = array();
$tdatagenerator_top_team_performance[".Keys"] = $tableKeysgenerator_top_team_performance;

$tdatagenerator_top_team_performance[".listFields"] = array();
$tdatagenerator_top_team_performance[".listFields"][] = "work_date";
$tdatagenerator_top_team_performance[".listFields"][] = "team_id";
$tdatagenerator_top_team_performance[".listFields"][] = "designer_present";
$tdatagenerator_top_team_performance[".listFields"][] = "total_images";
$tdatagenerator_top_team_performance[".listFields"][] = "eta_total";
$tdatagenerator_top_team_performance[".listFields"][] = "Total_time";
$tdatagenerator_top_team_performance[".listFields"][] = "idle_time";
$tdatagenerator_top_team_performance[".listFields"][] = "idle_p";
$tdatagenerator_top_team_performance[".listFields"][] = "efficiency";
$tdatagenerator_top_team_performance[".listFields"][] = "performance";
$tdatagenerator_top_team_performance[".listFields"][] = "work_type";

$tdatagenerator_top_team_performance[".hideMobileList"] = array();


$tdatagenerator_top_team_performance[".viewFields"] = array();
$tdatagenerator_top_team_performance[".viewFields"][] = "work_date";
$tdatagenerator_top_team_performance[".viewFields"][] = "team_id";
$tdatagenerator_top_team_performance[".viewFields"][] = "designer_present";
$tdatagenerator_top_team_performance[".viewFields"][] = "total_images";
$tdatagenerator_top_team_performance[".viewFields"][] = "eta_total";
$tdatagenerator_top_team_performance[".viewFields"][] = "Total_time";
$tdatagenerator_top_team_performance[".viewFields"][] = "idle_time";
$tdatagenerator_top_team_performance[".viewFields"][] = "idle_p";
$tdatagenerator_top_team_performance[".viewFields"][] = "efficiency";
$tdatagenerator_top_team_performance[".viewFields"][] = "performance";
$tdatagenerator_top_team_performance[".viewFields"][] = "work_type";

$tdatagenerator_top_team_performance[".addFields"] = array();
$tdatagenerator_top_team_performance[".addFields"][] = "work_date";
$tdatagenerator_top_team_performance[".addFields"][] = "team_id";
$tdatagenerator_top_team_performance[".addFields"][] = "efficiency";
$tdatagenerator_top_team_performance[".addFields"][] = "work_type";

$tdatagenerator_top_team_performance[".masterListFields"] = array();
$tdatagenerator_top_team_performance[".masterListFields"][] = "work_date";
$tdatagenerator_top_team_performance[".masterListFields"][] = "team_id";
$tdatagenerator_top_team_performance[".masterListFields"][] = "designer_present";
$tdatagenerator_top_team_performance[".masterListFields"][] = "total_images";
$tdatagenerator_top_team_performance[".masterListFields"][] = "eta_total";
$tdatagenerator_top_team_performance[".masterListFields"][] = "Total_time";
$tdatagenerator_top_team_performance[".masterListFields"][] = "idle_time";
$tdatagenerator_top_team_performance[".masterListFields"][] = "idle_p";
$tdatagenerator_top_team_performance[".masterListFields"][] = "efficiency";
$tdatagenerator_top_team_performance[".masterListFields"][] = "performance";
$tdatagenerator_top_team_performance[".masterListFields"][] = "work_type";

$tdatagenerator_top_team_performance[".inlineAddFields"] = array();
$tdatagenerator_top_team_performance[".inlineAddFields"][] = "work_date";
$tdatagenerator_top_team_performance[".inlineAddFields"][] = "team_id";
$tdatagenerator_top_team_performance[".inlineAddFields"][] = "efficiency";
$tdatagenerator_top_team_performance[".inlineAddFields"][] = "work_type";

$tdatagenerator_top_team_performance[".editFields"] = array();
$tdatagenerator_top_team_performance[".editFields"][] = "work_date";
$tdatagenerator_top_team_performance[".editFields"][] = "team_id";
$tdatagenerator_top_team_performance[".editFields"][] = "efficiency";
$tdatagenerator_top_team_performance[".editFields"][] = "work_type";

$tdatagenerator_top_team_performance[".inlineEditFields"] = array();
$tdatagenerator_top_team_performance[".inlineEditFields"][] = "work_date";
$tdatagenerator_top_team_performance[".inlineEditFields"][] = "team_id";
$tdatagenerator_top_team_performance[".inlineEditFields"][] = "efficiency";
$tdatagenerator_top_team_performance[".inlineEditFields"][] = "work_type";

$tdatagenerator_top_team_performance[".exportFields"] = array();
$tdatagenerator_top_team_performance[".exportFields"][] = "work_date";
$tdatagenerator_top_team_performance[".exportFields"][] = "team_id";
$tdatagenerator_top_team_performance[".exportFields"][] = "designer_present";
$tdatagenerator_top_team_performance[".exportFields"][] = "total_images";
$tdatagenerator_top_team_performance[".exportFields"][] = "eta_total";
$tdatagenerator_top_team_performance[".exportFields"][] = "Total_time";
$tdatagenerator_top_team_performance[".exportFields"][] = "idle_time";
$tdatagenerator_top_team_performance[".exportFields"][] = "idle_p";
$tdatagenerator_top_team_performance[".exportFields"][] = "efficiency";
$tdatagenerator_top_team_performance[".exportFields"][] = "performance";
$tdatagenerator_top_team_performance[".exportFields"][] = "work_type";

$tdatagenerator_top_team_performance[".importFields"] = array();
$tdatagenerator_top_team_performance[".importFields"][] = "work_date";
$tdatagenerator_top_team_performance[".importFields"][] = "team_id";
$tdatagenerator_top_team_performance[".importFields"][] = "designer_present";
$tdatagenerator_top_team_performance[".importFields"][] = "total_images";
$tdatagenerator_top_team_performance[".importFields"][] = "eta_total";
$tdatagenerator_top_team_performance[".importFields"][] = "Total_time";
$tdatagenerator_top_team_performance[".importFields"][] = "idle_time";
$tdatagenerator_top_team_performance[".importFields"][] = "idle_p";
$tdatagenerator_top_team_performance[".importFields"][] = "efficiency";
$tdatagenerator_top_team_performance[".importFields"][] = "performance";
$tdatagenerator_top_team_performance[".importFields"][] = "work_type";

$tdatagenerator_top_team_performance[".printFields"] = array();
$tdatagenerator_top_team_performance[".printFields"][] = "work_date";
$tdatagenerator_top_team_performance[".printFields"][] = "team_id";
$tdatagenerator_top_team_performance[".printFields"][] = "designer_present";
$tdatagenerator_top_team_performance[".printFields"][] = "total_images";
$tdatagenerator_top_team_performance[".printFields"][] = "eta_total";
$tdatagenerator_top_team_performance[".printFields"][] = "Total_time";
$tdatagenerator_top_team_performance[".printFields"][] = "idle_time";
$tdatagenerator_top_team_performance[".printFields"][] = "idle_p";
$tdatagenerator_top_team_performance[".printFields"][] = "efficiency";
$tdatagenerator_top_team_performance[".printFields"][] = "performance";
$tdatagenerator_top_team_performance[".printFields"][] = "work_type";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("generator_top_team_performance","work_date"); 
	$fdata["FieldType"] = 135;
	
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
	
		$fdata["strField"] = "work_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "work_date";
	
		
		
				
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
	
	
	
	

	

	
	$tdatagenerator_top_team_performance["work_date"] = $fdata;
//	team_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team_id";
	$fdata["GoodName"] = "team_id";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("generator_top_team_performance","team_id"); 
	$fdata["FieldType"] = 200;
	
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
	
	
	
	

	

	
	$tdatagenerator_top_team_performance["team_id"] = $fdata;
//	designer_present
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer_present";
	$fdata["GoodName"] = "designer_present";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_top_team_performance","designer_present"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_present"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(DISTINCT `designer_name`)";
	
		
		
				
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
	
	
	
	

	

	
	$tdatagenerator_top_team_performance["designer_present"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_top_team_performance","total_images"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_images"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(total_images_counted)";
	
		
		
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
	
	
	
	

	

	
	$tdatagenerator_top_team_performance["total_images"] = $fdata;
//	eta_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "eta_total";
	$fdata["GoodName"] = "eta_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_top_team_performance","eta_total"); 
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
	
	
	
	

	

	
	$tdatagenerator_top_team_performance["eta_total"] = $fdata;
//	Total_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Total_time";
	$fdata["GoodName"] = "Total_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_top_team_performance","Total_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Total_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(designer_time))";
	
		
		
				
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
	
	
	
	

	

	
	$tdatagenerator_top_team_performance["Total_time"] = $fdata;
//	idle_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "idle_time";
	$fdata["GoodName"] = "idle_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_top_team_performance","idle_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idle_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(IF (((25200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,SEC_TO_TIME((43200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time)),SEC_TO_TIME((25200*COUNT(DISTINCT `designer_name`))-SUM(designer_time))))";
	
		
		
				
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
	
	
	
	

	

	
	$tdatagenerator_top_team_performance["idle_time"] = $fdata;
//	idle_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idle_p";
	$fdata["GoodName"] = "idle_p";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_top_team_performance","idle_p"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idle_p"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(IF(((25200*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((25200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(25200*COUNT(DISTINCT `designer_name`))))*100";
	
		
		
				
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
	
	
	
	

	

	
	$tdatagenerator_top_team_performance["idle_p"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_top_team_performance","efficiency"); 
	$fdata["FieldType"] = 14;
	
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
	
		$fdata["strField"] = "efficiency"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "((SUM(estimated_time))/(SUM(designer_time)))*100";
	
		
		
				
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
	
	
	
	

	

	
	$tdatagenerator_top_team_performance["efficiency"] = $fdata;
//	performance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "performance";
	$fdata["GoodName"] = "performance";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_top_team_performance","performance"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "performance"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "((1-(IF(((25200*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((25200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(25200*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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

	

	
	$tdatagenerator_top_team_performance["performance"] = $fdata;
//	work_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "work_type";
	$fdata["GoodName"] = "work_type";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("generator_top_team_performance","work_type"); 
	$fdata["FieldType"] = 200;
	
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
	
		$fdata["strField"] = "work_type"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "work_type";
	
		
		
				
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
			$edata["EditParams"].= " maxlength=50";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdatagenerator_top_team_performance["work_type"] = $fdata;

	
$tables_data["generator_top_team_performance"]=&$tdatagenerator_top_team_performance;
$field_labels["generator_top_team_performance"] = &$fieldLabelsgenerator_top_team_performance;
$fieldToolTips["generator_top_team_performance"] = &$fieldToolTipsgenerator_top_team_performance;
$page_titles["generator_top_team_performance"] = &$pageTitlesgenerator_top_team_performance;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["generator_top_team_performance"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["generator_top_team_performance"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_generator_top_team_performance()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_date,  team_id,  COUNT(DISTINCT `designer_name`) AS designer_present,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  (IF (((25200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,SEC_TO_TIME((43200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time)),SEC_TO_TIME((25200*COUNT(DISTINCT `designer_name`))-SUM(designer_time)))) AS idle_time,  (IF(((25200*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((25200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(25200*COUNT(DISTINCT `designer_name`))))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  ((1-(IF(((25200*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((25200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(25200*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS performance,  work_type";
$proto0["m_strFrom"] = "FROM designer_report";
$proto0["m_strWhere"] = "user_group =7";
$proto0["m_strOrderBy"] = "ORDER BY work_date DESC, ((1-(IF(((25200*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((25200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(25200*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100      DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "user_group =7";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "user_group",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "generator_top_team_performance"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=7";
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
	"m_srcTableName" => "generator_top_team_performance"
));

$proto5["m_sql"] = "work_date";
$proto5["m_srcTableName"] = "generator_top_team_performance";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "generator_top_team_performance"
));

$proto7["m_sql"] = "team_id";
$proto7["m_srcTableName"] = "generator_top_team_performance";
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
$proto9["m_srcTableName"] = "generator_top_team_performance";
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
	"m_srcTableName" => "generator_top_team_performance"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "SUM(total_images_counted)";
$proto12["m_srcTableName"] = "generator_top_team_performance";
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
$proto15["m_srcTableName"] = "generator_top_team_performance";
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
$proto18["m_srcTableName"] = "generator_top_team_performance";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "Total_time";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF (((25200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,SEC_TO_TIME((43200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time)),SEC_TO_TIME((25200*COUNT(DISTINCT `designer_name`))-SUM(designer_time))))"
));

$proto21["m_sql"] = "(IF (((25200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,SEC_TO_TIME((43200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time)),SEC_TO_TIME((25200*COUNT(DISTINCT `designer_name`))-SUM(designer_time))))";
$proto21["m_srcTableName"] = "generator_top_team_performance";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "idle_time";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF(((25200*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((25200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(25200*COUNT(DISTINCT `designer_name`))))*100"
));

$proto23["m_sql"] = "(IF(((25200*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((25200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(25200*COUNT(DISTINCT `designer_name`))))*100";
$proto23["m_srcTableName"] = "generator_top_team_performance";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "idle_p";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((SUM(estimated_time))/(SUM(designer_time)))*100"
));

$proto25["m_sql"] = "((SUM(estimated_time))/(SUM(designer_time)))*100";
$proto25["m_srcTableName"] = "generator_top_team_performance";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((1-(IF(((25200*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((25200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(25200*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100"
));

$proto27["m_sql"] = "((1-(IF(((25200*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((25200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(25200*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100";
$proto27["m_srcTableName"] = "generator_top_team_performance";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "performance";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "generator_top_team_performance"
));

$proto29["m_sql"] = "work_type";
$proto29["m_srcTableName"] = "generator_top_team_performance";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "designer_report";
$proto32["m_srcTableName"] = "generator_top_team_performance";
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
$proto32["m_columns"][] = "efficiency";
$proto32["m_columns"][] = "total_images_counted";
$proto32["m_columns"][] = "comments";
$proto32["m_columns"][] = "work_type";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "designer_report";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "generator_top_team_performance";
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
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "generator_top_team_performance"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "generator_top_team_performance"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "generator_top_team_performance"
));

$proto39["m_column"]=$obj;
$proto39["m_bAsc"] = 0;
$proto39["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto39);

$proto0["m_orderby"][]=$obj;					
												$proto41=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "((1-(IF(((25200*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((25200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(25200*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100      "
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 0;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="generator_top_team_performance";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_generator_top_team_performance = createSqlQuery_generator_top_team_performance();


	
											
	
$tdatagenerator_top_team_performance[".sqlquery"] = $queryData_generator_top_team_performance;

$tableEvents["generator_top_team_performance"] = new eventsBase;
$tdatagenerator_top_team_performance[".hasEvents"] = false;

?>