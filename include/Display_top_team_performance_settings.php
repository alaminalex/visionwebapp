<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDisplay_top_team_performance = array();	
	$tdataDisplay_top_team_performance[".truncateText"] = true;
	$tdataDisplay_top_team_performance[".NumberOfChars"] = 256; 
	$tdataDisplay_top_team_performance[".ShortName"] = "Display_top_team_performance";
	$tdataDisplay_top_team_performance[".OwnerID"] = "";
	$tdataDisplay_top_team_performance[".OriginalTable"] = "designer_report";

//	field labels
$fieldLabelsDisplay_top_team_performance = array();
$fieldToolTipsDisplay_top_team_performance = array();
$pageTitlesDisplay_top_team_performance = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDisplay_top_team_performance["English"] = array();
	$fieldToolTipsDisplay_top_team_performance["English"] = array();
	$pageTitlesDisplay_top_team_performance["English"] = array();
	$fieldLabelsDisplay_top_team_performance["English"]["work_date"] = "Work Date";
	$fieldToolTipsDisplay_top_team_performance["English"]["work_date"] = "";
	$fieldLabelsDisplay_top_team_performance["English"]["work_type"] = "Work Type";
	$fieldToolTipsDisplay_top_team_performance["English"]["work_type"] = "";
	$fieldLabelsDisplay_top_team_performance["English"]["Total_time"] = "Total Time";
	$fieldToolTipsDisplay_top_team_performance["English"]["Total_time"] = "";
	$fieldLabelsDisplay_top_team_performance["English"]["total_images"] = "Total Images";
	$fieldToolTipsDisplay_top_team_performance["English"]["total_images"] = "";
	$fieldLabelsDisplay_top_team_performance["English"]["idle_time"] = "Idle Time";
	$fieldToolTipsDisplay_top_team_performance["English"]["idle_time"] = "";
	$fieldLabelsDisplay_top_team_performance["English"]["idle_p"] = "Idle P";
	$fieldToolTipsDisplay_top_team_performance["English"]["idle_p"] = "";
	$fieldLabelsDisplay_top_team_performance["English"]["eta_total"] = "Eta Total";
	$fieldToolTipsDisplay_top_team_performance["English"]["eta_total"] = "";
	$fieldLabelsDisplay_top_team_performance["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsDisplay_top_team_performance["English"]["efficiency"] = "";
	$fieldLabelsDisplay_top_team_performance["English"]["team_id"] = "Team Id";
	$fieldToolTipsDisplay_top_team_performance["English"]["team_id"] = "";
	$fieldLabelsDisplay_top_team_performance["English"]["designer_present"] = "Designer Present";
	$fieldToolTipsDisplay_top_team_performance["English"]["designer_present"] = "";
	$fieldLabelsDisplay_top_team_performance["English"]["performance"] = "Performance";
	$fieldToolTipsDisplay_top_team_performance["English"]["performance"] = "";
	if (count($fieldToolTipsDisplay_top_team_performance["English"]))
		$tdataDisplay_top_team_performance[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDisplay_top_team_performance[""] = array();
	$fieldToolTipsDisplay_top_team_performance[""] = array();
	$pageTitlesDisplay_top_team_performance[""] = array();
	if (count($fieldToolTipsDisplay_top_team_performance[""]))
		$tdataDisplay_top_team_performance[".isUseToolTips"] = true;
}
	
	
	$tdataDisplay_top_team_performance[".NCSearch"] = true;



$tdataDisplay_top_team_performance[".shortTableName"] = "Display_top_team_performance";
$tdataDisplay_top_team_performance[".nSecOptions"] = 0;
$tdataDisplay_top_team_performance[".recsPerRowList"] = 1;
$tdataDisplay_top_team_performance[".recsPerRowPrint"] = 1;
$tdataDisplay_top_team_performance[".mainTableOwnerID"] = "";
$tdataDisplay_top_team_performance[".moveNext"] = 1;
$tdataDisplay_top_team_performance[".entityType"] = 2;

$tdataDisplay_top_team_performance[".strOriginalTableName"] = "designer_report";




$tdataDisplay_top_team_performance[".showAddInPopup"] = false;

$tdataDisplay_top_team_performance[".showEditInPopup"] = false;

$tdataDisplay_top_team_performance[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDisplay_top_team_performance[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDisplay_top_team_performance[".fieldsForRegister"] = array();

$tdataDisplay_top_team_performance[".listAjax"] = false;

	$tdataDisplay_top_team_performance[".audit"] = false;

	$tdataDisplay_top_team_performance[".locking"] = false;


$tdataDisplay_top_team_performance[".add"] = true;
$tdataDisplay_top_team_performance[".afterAddAction"] = 0;
$tdataDisplay_top_team_performance[".closePopupAfterAdd"] = 1;
$tdataDisplay_top_team_performance[".afterAddActionDetTable"] = "";

$tdataDisplay_top_team_performance[".list"] = true;

$tdataDisplay_top_team_performance[".inlineAdd"] = true;


$tdataDisplay_top_team_performance[".exportTo"] = true;

$tdataDisplay_top_team_performance[".printFriendly"] = true;


$tdataDisplay_top_team_performance[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDisplay_top_team_performance[".searchSaving"] = false;
//

$tdataDisplay_top_team_performance[".showSearchPanel"] = true;
		$tdataDisplay_top_team_performance[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDisplay_top_team_performance[".isUseAjaxSuggest"] = false;
else 
	$tdataDisplay_top_team_performance[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDisplay_top_team_performance[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDisplay_top_team_performance[".isUseTimeForSearch"] = false;





$tdataDisplay_top_team_performance[".allSearchFields"] = array();
$tdataDisplay_top_team_performance[".filterFields"] = array();
$tdataDisplay_top_team_performance[".requiredSearchFields"] = array();

$tdataDisplay_top_team_performance[".allSearchFields"][] = "performance";
	

$tdataDisplay_top_team_performance[".googleLikeFields"] = array();
$tdataDisplay_top_team_performance[".googleLikeFields"][] = "work_date";
$tdataDisplay_top_team_performance[".googleLikeFields"][] = "team_id";
$tdataDisplay_top_team_performance[".googleLikeFields"][] = "designer_present";
$tdataDisplay_top_team_performance[".googleLikeFields"][] = "total_images";
$tdataDisplay_top_team_performance[".googleLikeFields"][] = "eta_total";
$tdataDisplay_top_team_performance[".googleLikeFields"][] = "Total_time";
$tdataDisplay_top_team_performance[".googleLikeFields"][] = "idle_time";
$tdataDisplay_top_team_performance[".googleLikeFields"][] = "idle_p";
$tdataDisplay_top_team_performance[".googleLikeFields"][] = "efficiency";
$tdataDisplay_top_team_performance[".googleLikeFields"][] = "performance";
$tdataDisplay_top_team_performance[".googleLikeFields"][] = "work_type";


$tdataDisplay_top_team_performance[".advSearchFields"] = array();
$tdataDisplay_top_team_performance[".advSearchFields"][] = "work_date";
$tdataDisplay_top_team_performance[".advSearchFields"][] = "team_id";
$tdataDisplay_top_team_performance[".advSearchFields"][] = "designer_present";
$tdataDisplay_top_team_performance[".advSearchFields"][] = "total_images";
$tdataDisplay_top_team_performance[".advSearchFields"][] = "eta_total";
$tdataDisplay_top_team_performance[".advSearchFields"][] = "Total_time";
$tdataDisplay_top_team_performance[".advSearchFields"][] = "idle_time";
$tdataDisplay_top_team_performance[".advSearchFields"][] = "idle_p";
$tdataDisplay_top_team_performance[".advSearchFields"][] = "efficiency";
$tdataDisplay_top_team_performance[".advSearchFields"][] = "performance";
$tdataDisplay_top_team_performance[".advSearchFields"][] = "work_type";

$tdataDisplay_top_team_performance[".tableType"] = "report";

$tdataDisplay_top_team_performance[".printerPageOrientation"] = 0;
$tdataDisplay_top_team_performance[".nPrinterPageScale"] = 100;

$tdataDisplay_top_team_performance[".nPrinterSplitRecords"] = 40;

$tdataDisplay_top_team_performance[".nPrinterPDFSplitRecords"] = 40;



$tdataDisplay_top_team_performance[".geocodingEnabled"] = false;

//report settings
$tdataDisplay_top_team_performance[".printReportLayout"] = 6;	

$tdataDisplay_top_team_performance[".reportPrintPartitionType"] = 1;	
$tdataDisplay_top_team_performance[".reportPrintGroupsPerPage"] = 40;	
	$tdataDisplay_top_team_performance[".reportPrintPDFGroupsPerPage"] = 40;
$tdataDisplay_top_team_performance[".lowGroup"] = 0;



$tdataDisplay_top_team_performance[".pageSize"] = 3;	






$tdataDisplay_top_team_performance[".repShowDet"] = true;

$tdataDisplay_top_team_performance[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC, ((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100                          DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDisplay_top_team_performance[".strOrderBy"] = $tstrOrderBy;

$tdataDisplay_top_team_performance[".orderindexes"] = array();
$tdataDisplay_top_team_performance[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "work_date");
$tdataDisplay_top_team_performance[".orderindexes"][] = array(10, (0 ? "ASC" : "DESC"), "((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100                          ");

$tdataDisplay_top_team_performance[".sqlHead"] = "SELECT work_date,  team_id,  COUNT(DISTINCT `designer_name`) AS designer_present,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  (IF (((27000 * COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,SEC_TO_TIME((43200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time)),SEC_TO_TIME((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time)))) AS idle_time,  (IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`))))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  ((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS performance,  work_type";
$tdataDisplay_top_team_performance[".sqlFrom"] = "FROM designer_report";
$tdataDisplay_top_team_performance[".sqlWhereExpr"] = "user_group =7 AND (work_type =1 OR work_type =3)";
$tdataDisplay_top_team_performance[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDisplay_top_team_performance[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDisplay_top_team_performance[".arrGroupsPerPage"] = $arrGPP;

$tdataDisplay_top_team_performance[".highlightSearchResults"] = true;

$tableKeysDisplay_top_team_performance = array();
$tdataDisplay_top_team_performance[".Keys"] = $tableKeysDisplay_top_team_performance;

$tdataDisplay_top_team_performance[".listFields"] = array();
$tdataDisplay_top_team_performance[".listFields"][] = "work_date";
$tdataDisplay_top_team_performance[".listFields"][] = "team_id";
$tdataDisplay_top_team_performance[".listFields"][] = "designer_present";
$tdataDisplay_top_team_performance[".listFields"][] = "total_images";
$tdataDisplay_top_team_performance[".listFields"][] = "eta_total";
$tdataDisplay_top_team_performance[".listFields"][] = "Total_time";
$tdataDisplay_top_team_performance[".listFields"][] = "idle_time";
$tdataDisplay_top_team_performance[".listFields"][] = "idle_p";
$tdataDisplay_top_team_performance[".listFields"][] = "efficiency";
$tdataDisplay_top_team_performance[".listFields"][] = "performance";
$tdataDisplay_top_team_performance[".listFields"][] = "work_type";

$tdataDisplay_top_team_performance[".hideMobileList"] = array();


$tdataDisplay_top_team_performance[".viewFields"] = array();
$tdataDisplay_top_team_performance[".viewFields"][] = "work_date";
$tdataDisplay_top_team_performance[".viewFields"][] = "team_id";
$tdataDisplay_top_team_performance[".viewFields"][] = "designer_present";
$tdataDisplay_top_team_performance[".viewFields"][] = "total_images";
$tdataDisplay_top_team_performance[".viewFields"][] = "eta_total";
$tdataDisplay_top_team_performance[".viewFields"][] = "Total_time";
$tdataDisplay_top_team_performance[".viewFields"][] = "idle_time";
$tdataDisplay_top_team_performance[".viewFields"][] = "idle_p";
$tdataDisplay_top_team_performance[".viewFields"][] = "efficiency";
$tdataDisplay_top_team_performance[".viewFields"][] = "performance";
$tdataDisplay_top_team_performance[".viewFields"][] = "work_type";

$tdataDisplay_top_team_performance[".addFields"] = array();
$tdataDisplay_top_team_performance[".addFields"][] = "work_date";
$tdataDisplay_top_team_performance[".addFields"][] = "team_id";
$tdataDisplay_top_team_performance[".addFields"][] = "efficiency";
$tdataDisplay_top_team_performance[".addFields"][] = "work_type";

$tdataDisplay_top_team_performance[".masterListFields"] = array();
$tdataDisplay_top_team_performance[".masterListFields"][] = "work_date";
$tdataDisplay_top_team_performance[".masterListFields"][] = "team_id";
$tdataDisplay_top_team_performance[".masterListFields"][] = "designer_present";
$tdataDisplay_top_team_performance[".masterListFields"][] = "total_images";
$tdataDisplay_top_team_performance[".masterListFields"][] = "eta_total";
$tdataDisplay_top_team_performance[".masterListFields"][] = "Total_time";
$tdataDisplay_top_team_performance[".masterListFields"][] = "idle_time";
$tdataDisplay_top_team_performance[".masterListFields"][] = "idle_p";
$tdataDisplay_top_team_performance[".masterListFields"][] = "efficiency";
$tdataDisplay_top_team_performance[".masterListFields"][] = "performance";
$tdataDisplay_top_team_performance[".masterListFields"][] = "work_type";

$tdataDisplay_top_team_performance[".inlineAddFields"] = array();
$tdataDisplay_top_team_performance[".inlineAddFields"][] = "work_date";
$tdataDisplay_top_team_performance[".inlineAddFields"][] = "team_id";
$tdataDisplay_top_team_performance[".inlineAddFields"][] = "efficiency";
$tdataDisplay_top_team_performance[".inlineAddFields"][] = "work_type";

$tdataDisplay_top_team_performance[".editFields"] = array();
$tdataDisplay_top_team_performance[".editFields"][] = "work_date";
$tdataDisplay_top_team_performance[".editFields"][] = "team_id";
$tdataDisplay_top_team_performance[".editFields"][] = "efficiency";
$tdataDisplay_top_team_performance[".editFields"][] = "work_type";

$tdataDisplay_top_team_performance[".inlineEditFields"] = array();
$tdataDisplay_top_team_performance[".inlineEditFields"][] = "work_date";
$tdataDisplay_top_team_performance[".inlineEditFields"][] = "team_id";
$tdataDisplay_top_team_performance[".inlineEditFields"][] = "efficiency";
$tdataDisplay_top_team_performance[".inlineEditFields"][] = "work_type";

$tdataDisplay_top_team_performance[".exportFields"] = array();
$tdataDisplay_top_team_performance[".exportFields"][] = "work_date";
$tdataDisplay_top_team_performance[".exportFields"][] = "team_id";
$tdataDisplay_top_team_performance[".exportFields"][] = "designer_present";
$tdataDisplay_top_team_performance[".exportFields"][] = "total_images";
$tdataDisplay_top_team_performance[".exportFields"][] = "eta_total";
$tdataDisplay_top_team_performance[".exportFields"][] = "Total_time";
$tdataDisplay_top_team_performance[".exportFields"][] = "idle_time";
$tdataDisplay_top_team_performance[".exportFields"][] = "idle_p";
$tdataDisplay_top_team_performance[".exportFields"][] = "efficiency";
$tdataDisplay_top_team_performance[".exportFields"][] = "performance";
$tdataDisplay_top_team_performance[".exportFields"][] = "work_type";

$tdataDisplay_top_team_performance[".importFields"] = array();
$tdataDisplay_top_team_performance[".importFields"][] = "work_date";
$tdataDisplay_top_team_performance[".importFields"][] = "team_id";
$tdataDisplay_top_team_performance[".importFields"][] = "designer_present";
$tdataDisplay_top_team_performance[".importFields"][] = "total_images";
$tdataDisplay_top_team_performance[".importFields"][] = "eta_total";
$tdataDisplay_top_team_performance[".importFields"][] = "Total_time";
$tdataDisplay_top_team_performance[".importFields"][] = "idle_time";
$tdataDisplay_top_team_performance[".importFields"][] = "idle_p";
$tdataDisplay_top_team_performance[".importFields"][] = "efficiency";
$tdataDisplay_top_team_performance[".importFields"][] = "performance";
$tdataDisplay_top_team_performance[".importFields"][] = "work_type";

$tdataDisplay_top_team_performance[".printFields"] = array();
$tdataDisplay_top_team_performance[".printFields"][] = "work_date";
$tdataDisplay_top_team_performance[".printFields"][] = "team_id";
$tdataDisplay_top_team_performance[".printFields"][] = "designer_present";
$tdataDisplay_top_team_performance[".printFields"][] = "total_images";
$tdataDisplay_top_team_performance[".printFields"][] = "eta_total";
$tdataDisplay_top_team_performance[".printFields"][] = "Total_time";
$tdataDisplay_top_team_performance[".printFields"][] = "idle_time";
$tdataDisplay_top_team_performance[".printFields"][] = "idle_p";
$tdataDisplay_top_team_performance[".printFields"][] = "efficiency";
$tdataDisplay_top_team_performance[".printFields"][] = "performance";
$tdataDisplay_top_team_performance[".printFields"][] = "work_type";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Display_top_team_performance","work_date"); 
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
	
	
	
	

	

	
	$tdataDisplay_top_team_performance["work_date"] = $fdata;
//	team_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team_id";
	$fdata["GoodName"] = "team_id";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Display_top_team_performance","team_id"); 
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
	
	
	
	

	

	
	$tdataDisplay_top_team_performance["team_id"] = $fdata;
//	designer_present
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer_present";
	$fdata["GoodName"] = "designer_present";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_top_team_performance","designer_present"); 
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
	
	
	
	

	

	
	$tdataDisplay_top_team_performance["designer_present"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_top_team_performance","total_images"); 
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
	
	
	
	

	

	
	$tdataDisplay_top_team_performance["total_images"] = $fdata;
//	eta_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "eta_total";
	$fdata["GoodName"] = "eta_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_top_team_performance","eta_total"); 
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
	
	
	
	

	

	
	$tdataDisplay_top_team_performance["eta_total"] = $fdata;
//	Total_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Total_time";
	$fdata["GoodName"] = "Total_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_top_team_performance","Total_time"); 
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
	
	
	
	

	

	
	$tdataDisplay_top_team_performance["Total_time"] = $fdata;
//	idle_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "idle_time";
	$fdata["GoodName"] = "idle_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_top_team_performance","idle_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idle_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(IF (((27000 * COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,SEC_TO_TIME((43200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time)),SEC_TO_TIME((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))))";
	
		
		
				
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
	
	
	
	

	

	
	$tdataDisplay_top_team_performance["idle_time"] = $fdata;
//	idle_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idle_p";
	$fdata["GoodName"] = "idle_p";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_top_team_performance","idle_p"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idle_p"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`))))*100";
	
		
		
				
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
	
	
	
	

	

	
	$tdataDisplay_top_team_performance["idle_p"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_top_team_performance","efficiency"); 
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
	
	
	
	

	

	
	$tdataDisplay_top_team_performance["efficiency"] = $fdata;
//	performance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "performance";
	$fdata["GoodName"] = "performance";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_top_team_performance","performance"); 
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
	$fdata["FullName"] = "((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100";
	
		
		
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

	

	
	$tdataDisplay_top_team_performance["performance"] = $fdata;
//	work_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "work_type";
	$fdata["GoodName"] = "work_type";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Display_top_team_performance","work_type"); 
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
	
	
	
	

	

	
	$tdataDisplay_top_team_performance["work_type"] = $fdata;

	
$tables_data["Display_top_team_performance"]=&$tdataDisplay_top_team_performance;
$field_labels["Display_top_team_performance"] = &$fieldLabelsDisplay_top_team_performance;
$fieldToolTips["Display_top_team_performance"] = &$fieldToolTipsDisplay_top_team_performance;
$page_titles["Display_top_team_performance"] = &$pageTitlesDisplay_top_team_performance;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Display_top_team_performance"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Display_top_team_performance"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Display_top_team_performance()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_date,  team_id,  COUNT(DISTINCT `designer_name`) AS designer_present,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  (IF (((27000 * COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,SEC_TO_TIME((43200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time)),SEC_TO_TIME((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time)))) AS idle_time,  (IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`))))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  ((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS performance,  work_type";
$proto0["m_strFrom"] = "FROM designer_report";
$proto0["m_strWhere"] = "user_group =7 AND (work_type =1 OR work_type =3)";
$proto0["m_strOrderBy"] = "ORDER BY work_date DESC, ((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100                          DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "user_group =7 AND (work_type =1 OR work_type =3)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "user_group =7 AND (work_type =1 OR work_type =3)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "user_group =7";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "user_group",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display_top_team_performance"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "=7";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "work_type =1 OR work_type =3";
$proto5["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "work_type =1 OR work_type =3"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
						$proto7=array();
$proto7["m_sql"] = "work_type =1";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display_top_team_performance"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "=1";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

			$proto5["m_contained"][]=$obj;
						$proto9=array();
$proto9["m_sql"] = "work_type =3";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display_top_team_performance"
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "=3";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

			$proto5["m_contained"][]=$obj;
$proto5["m_strCase"] = "";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = true;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display_top_team_performance"
));

$proto13["m_sql"] = "work_date";
$proto13["m_srcTableName"] = "Display_top_team_performance";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display_top_team_performance"
));

$proto15["m_sql"] = "team_id";
$proto15["m_srcTableName"] = "Display_top_team_performance";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$proto18=array();
$proto18["m_functiontype"] = "SQLF_COUNT";
$proto18["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "DISTINCT `designer_name`"
));

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto18);

$proto17["m_sql"] = "COUNT(DISTINCT `designer_name`)";
$proto17["m_srcTableName"] = "Display_top_team_performance";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "designer_present";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_SUM";
$proto21["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total_images_counted",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display_top_team_performance"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "SUM(total_images_counted)";
$proto20["m_srcTableName"] = "Display_top_team_performance";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "total_images";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$proto24=array();
$proto24["m_functiontype"] = "SQLF_CUSTOM";
$proto24["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(estimated_time)"
));

$proto24["m_arguments"][]=$obj;
$proto24["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto24);

$proto23["m_sql"] = "SEC_TO_TIME(SUM(estimated_time))";
$proto23["m_srcTableName"] = "Display_top_team_performance";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "eta_total";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_CUSTOM";
$proto27["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(designer_time)"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "SEC_TO_TIME(SUM(designer_time))";
$proto26["m_srcTableName"] = "Display_top_team_performance";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "Total_time";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF (((27000 * COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,SEC_TO_TIME((43200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time)),SEC_TO_TIME((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))))"
));

$proto29["m_sql"] = "(IF (((27000 * COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,SEC_TO_TIME((43200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time)),SEC_TO_TIME((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))))";
$proto29["m_srcTableName"] = "Display_top_team_performance";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "idle_time";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`))))*100"
));

$proto31["m_sql"] = "(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`))))*100";
$proto31["m_srcTableName"] = "Display_top_team_performance";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "idle_p";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((SUM(estimated_time))/(SUM(designer_time)))*100"
));

$proto33["m_sql"] = "((SUM(estimated_time))/(SUM(designer_time)))*100";
$proto33["m_srcTableName"] = "Display_top_team_performance";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100"
));

$proto35["m_sql"] = "((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100";
$proto35["m_srcTableName"] = "Display_top_team_performance";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "performance";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display_top_team_performance"
));

$proto37["m_sql"] = "work_type";
$proto37["m_srcTableName"] = "Display_top_team_performance";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto39=array();
$proto39["m_link"] = "SQLL_MAIN";
			$proto40=array();
$proto40["m_strName"] = "designer_report";
$proto40["m_srcTableName"] = "Display_top_team_performance";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "report_id";
$proto40["m_columns"][] = "report_reference";
$proto40["m_columns"][] = "work_date";
$proto40["m_columns"][] = "designer_name";
$proto40["m_columns"][] = "team_id";
$proto40["m_columns"][] = "subdiv_id";
$proto40["m_columns"][] = "user_group";
$proto40["m_columns"][] = "pdf_name";
$proto40["m_columns"][] = "estimated_time";
$proto40["m_columns"][] = "designer_time";
$proto40["m_columns"][] = "qc_time";
$proto40["m_columns"][] = "efficiency";
$proto40["m_columns"][] = "total_images_counted";
$proto40["m_columns"][] = "comments";
$proto40["m_columns"][] = "work_type";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "designer_report";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "Display_top_team_performance";
$proto41=array();
$proto41["m_sql"] = "";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display_top_team_performance"
));

$proto43["m_column"]=$obj;
$obj = new SQLGroupByItem($proto43);

$proto0["m_groupby"][]=$obj;
												$proto45=array();
						$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display_top_team_performance"
));

$proto45["m_column"]=$obj;
$obj = new SQLGroupByItem($proto45);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto47=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display_top_team_performance"
));

$proto47["m_column"]=$obj;
$proto47["m_bAsc"] = 0;
$proto47["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto47);

$proto0["m_orderby"][]=$obj;					
												$proto49=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100                          "
));

$proto49["m_column"]=$obj;
$proto49["m_bAsc"] = 0;
$proto49["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto49);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Display_top_team_performance";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Display_top_team_performance = createSqlQuery_Display_top_team_performance();


	
											
	
$tdataDisplay_top_team_performance[".sqlquery"] = $queryData_Display_top_team_performance;

$tableEvents["Display_top_team_performance"] = new eventsBase;
$tdataDisplay_top_team_performance[".hasEvents"] = false;

?>