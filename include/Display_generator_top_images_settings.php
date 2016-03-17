<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDisplay_generator_top_images = array();	
	$tdataDisplay_generator_top_images[".truncateText"] = true;
	$tdataDisplay_generator_top_images[".NumberOfChars"] = 256; 
	$tdataDisplay_generator_top_images[".ShortName"] = "Display_generator_top_images";
	$tdataDisplay_generator_top_images[".OwnerID"] = "";
	$tdataDisplay_generator_top_images[".OriginalTable"] = "designer_report";

//	field labels
$fieldLabelsDisplay_generator_top_images = array();
$fieldToolTipsDisplay_generator_top_images = array();
$pageTitlesDisplay_generator_top_images = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDisplay_generator_top_images["English"] = array();
	$fieldToolTipsDisplay_generator_top_images["English"] = array();
	$pageTitlesDisplay_generator_top_images["English"] = array();
	$fieldLabelsDisplay_generator_top_images["English"]["work_date"] = "Work Date";
	$fieldToolTipsDisplay_generator_top_images["English"]["work_date"] = "";
	$fieldLabelsDisplay_generator_top_images["English"]["designer_name"] = "Designer Name";
	$fieldToolTipsDisplay_generator_top_images["English"]["designer_name"] = "";
	$fieldLabelsDisplay_generator_top_images["English"]["work_type"] = "Work Type";
	$fieldToolTipsDisplay_generator_top_images["English"]["work_type"] = "";
	$fieldLabelsDisplay_generator_top_images["English"]["Total_time"] = "Total Time";
	$fieldToolTipsDisplay_generator_top_images["English"]["Total_time"] = "";
	$fieldLabelsDisplay_generator_top_images["English"]["total_images"] = "Total Images";
	$fieldToolTipsDisplay_generator_top_images["English"]["total_images"] = "";
	$fieldLabelsDisplay_generator_top_images["English"]["idle_time"] = "Idle Time";
	$fieldToolTipsDisplay_generator_top_images["English"]["idle_time"] = "";
	$fieldLabelsDisplay_generator_top_images["English"]["idle_p"] = "Idle P";
	$fieldToolTipsDisplay_generator_top_images["English"]["idle_p"] = "";
	$fieldLabelsDisplay_generator_top_images["English"]["eta_total"] = "Eta Total";
	$fieldToolTipsDisplay_generator_top_images["English"]["eta_total"] = "";
	$fieldLabelsDisplay_generator_top_images["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsDisplay_generator_top_images["English"]["efficiency"] = "";
	$fieldLabelsDisplay_generator_top_images["English"]["team_id"] = "Team Id";
	$fieldToolTipsDisplay_generator_top_images["English"]["team_id"] = "";
	$fieldLabelsDisplay_generator_top_images["English"]["performance"] = "Performance";
	$fieldToolTipsDisplay_generator_top_images["English"]["performance"] = "";
	if (count($fieldToolTipsDisplay_generator_top_images["English"]))
		$tdataDisplay_generator_top_images[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDisplay_generator_top_images[""] = array();
	$fieldToolTipsDisplay_generator_top_images[""] = array();
	$pageTitlesDisplay_generator_top_images[""] = array();
	if (count($fieldToolTipsDisplay_generator_top_images[""]))
		$tdataDisplay_generator_top_images[".isUseToolTips"] = true;
}
	
	
	$tdataDisplay_generator_top_images[".NCSearch"] = true;



$tdataDisplay_generator_top_images[".shortTableName"] = "Display_generator_top_images";
$tdataDisplay_generator_top_images[".nSecOptions"] = 0;
$tdataDisplay_generator_top_images[".recsPerRowList"] = 1;
$tdataDisplay_generator_top_images[".recsPerRowPrint"] = 1;
$tdataDisplay_generator_top_images[".mainTableOwnerID"] = "";
$tdataDisplay_generator_top_images[".moveNext"] = 1;
$tdataDisplay_generator_top_images[".entityType"] = 2;

$tdataDisplay_generator_top_images[".strOriginalTableName"] = "designer_report";




$tdataDisplay_generator_top_images[".showAddInPopup"] = false;

$tdataDisplay_generator_top_images[".showEditInPopup"] = false;

$tdataDisplay_generator_top_images[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDisplay_generator_top_images[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDisplay_generator_top_images[".fieldsForRegister"] = array();

$tdataDisplay_generator_top_images[".listAjax"] = false;

	$tdataDisplay_generator_top_images[".audit"] = false;

	$tdataDisplay_generator_top_images[".locking"] = false;


$tdataDisplay_generator_top_images[".add"] = true;
$tdataDisplay_generator_top_images[".afterAddAction"] = 0;
$tdataDisplay_generator_top_images[".closePopupAfterAdd"] = 1;
$tdataDisplay_generator_top_images[".afterAddActionDetTable"] = "";

$tdataDisplay_generator_top_images[".list"] = true;

$tdataDisplay_generator_top_images[".inlineAdd"] = true;


$tdataDisplay_generator_top_images[".exportTo"] = true;

$tdataDisplay_generator_top_images[".printFriendly"] = true;


$tdataDisplay_generator_top_images[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDisplay_generator_top_images[".searchSaving"] = false;
//

$tdataDisplay_generator_top_images[".showSearchPanel"] = true;
		$tdataDisplay_generator_top_images[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDisplay_generator_top_images[".isUseAjaxSuggest"] = false;
else 
	$tdataDisplay_generator_top_images[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDisplay_generator_top_images[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDisplay_generator_top_images[".isUseTimeForSearch"] = false;





$tdataDisplay_generator_top_images[".allSearchFields"] = array();
$tdataDisplay_generator_top_images[".filterFields"] = array();
$tdataDisplay_generator_top_images[".requiredSearchFields"] = array();

$tdataDisplay_generator_top_images[".allSearchFields"][] = "performance";
	

$tdataDisplay_generator_top_images[".googleLikeFields"] = array();
$tdataDisplay_generator_top_images[".googleLikeFields"][] = "work_date";
$tdataDisplay_generator_top_images[".googleLikeFields"][] = "team_id";
$tdataDisplay_generator_top_images[".googleLikeFields"][] = "designer_name";
$tdataDisplay_generator_top_images[".googleLikeFields"][] = "total_images";
$tdataDisplay_generator_top_images[".googleLikeFields"][] = "eta_total";
$tdataDisplay_generator_top_images[".googleLikeFields"][] = "Total_time";
$tdataDisplay_generator_top_images[".googleLikeFields"][] = "idle_time";
$tdataDisplay_generator_top_images[".googleLikeFields"][] = "idle_p";
$tdataDisplay_generator_top_images[".googleLikeFields"][] = "efficiency";
$tdataDisplay_generator_top_images[".googleLikeFields"][] = "performance";
$tdataDisplay_generator_top_images[".googleLikeFields"][] = "work_type";


$tdataDisplay_generator_top_images[".advSearchFields"] = array();
$tdataDisplay_generator_top_images[".advSearchFields"][] = "work_date";
$tdataDisplay_generator_top_images[".advSearchFields"][] = "team_id";
$tdataDisplay_generator_top_images[".advSearchFields"][] = "designer_name";
$tdataDisplay_generator_top_images[".advSearchFields"][] = "total_images";
$tdataDisplay_generator_top_images[".advSearchFields"][] = "eta_total";
$tdataDisplay_generator_top_images[".advSearchFields"][] = "Total_time";
$tdataDisplay_generator_top_images[".advSearchFields"][] = "idle_time";
$tdataDisplay_generator_top_images[".advSearchFields"][] = "idle_p";
$tdataDisplay_generator_top_images[".advSearchFields"][] = "efficiency";
$tdataDisplay_generator_top_images[".advSearchFields"][] = "performance";
$tdataDisplay_generator_top_images[".advSearchFields"][] = "work_type";

$tdataDisplay_generator_top_images[".tableType"] = "report";

$tdataDisplay_generator_top_images[".printerPageOrientation"] = 0;
$tdataDisplay_generator_top_images[".nPrinterPageScale"] = 100;

$tdataDisplay_generator_top_images[".nPrinterSplitRecords"] = 40;

$tdataDisplay_generator_top_images[".nPrinterPDFSplitRecords"] = 40;



$tdataDisplay_generator_top_images[".geocodingEnabled"] = false;

//report settings
$tdataDisplay_generator_top_images[".printReportLayout"] = 6;	

$tdataDisplay_generator_top_images[".reportPrintPartitionType"] = 1;	
$tdataDisplay_generator_top_images[".reportPrintGroupsPerPage"] = 40;	
	$tdataDisplay_generator_top_images[".reportPrintPDFGroupsPerPage"] = 40;
$tdataDisplay_generator_top_images[".lowGroup"] = 0;



$tdataDisplay_generator_top_images[".pageSize"] = 3;	






$tdataDisplay_generator_top_images[".repShowDet"] = true;

$tdataDisplay_generator_top_images[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC, SUM(total_images_counted) DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDisplay_generator_top_images[".strOrderBy"] = $tstrOrderBy;

$tdataDisplay_generator_top_images[".orderindexes"] = array();
$tdataDisplay_generator_top_images[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "work_date");
$tdataDisplay_generator_top_images[".orderindexes"][] = array(0, (0 ? "ASC" : "DESC"), "SUM(total_images_counted)");

$tdataDisplay_generator_top_images[".sqlHead"] = "SELECT work_date,  team_id,  designer_name,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  (IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time)))) AS idle_time,  (IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  ((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS performance,  work_type";
$tdataDisplay_generator_top_images[".sqlFrom"] = "FROM designer_report";
$tdataDisplay_generator_top_images[".sqlWhereExpr"] = "user_group =7 AND work_type =1";
$tdataDisplay_generator_top_images[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDisplay_generator_top_images[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDisplay_generator_top_images[".arrGroupsPerPage"] = $arrGPP;

$tdataDisplay_generator_top_images[".highlightSearchResults"] = true;

$tableKeysDisplay_generator_top_images = array();
$tdataDisplay_generator_top_images[".Keys"] = $tableKeysDisplay_generator_top_images;

$tdataDisplay_generator_top_images[".listFields"] = array();
$tdataDisplay_generator_top_images[".listFields"][] = "work_date";
$tdataDisplay_generator_top_images[".listFields"][] = "team_id";
$tdataDisplay_generator_top_images[".listFields"][] = "designer_name";
$tdataDisplay_generator_top_images[".listFields"][] = "total_images";
$tdataDisplay_generator_top_images[".listFields"][] = "eta_total";
$tdataDisplay_generator_top_images[".listFields"][] = "Total_time";
$tdataDisplay_generator_top_images[".listFields"][] = "idle_time";
$tdataDisplay_generator_top_images[".listFields"][] = "idle_p";
$tdataDisplay_generator_top_images[".listFields"][] = "efficiency";
$tdataDisplay_generator_top_images[".listFields"][] = "performance";
$tdataDisplay_generator_top_images[".listFields"][] = "work_type";

$tdataDisplay_generator_top_images[".hideMobileList"] = array();


$tdataDisplay_generator_top_images[".viewFields"] = array();
$tdataDisplay_generator_top_images[".viewFields"][] = "work_date";
$tdataDisplay_generator_top_images[".viewFields"][] = "team_id";
$tdataDisplay_generator_top_images[".viewFields"][] = "designer_name";
$tdataDisplay_generator_top_images[".viewFields"][] = "total_images";
$tdataDisplay_generator_top_images[".viewFields"][] = "eta_total";
$tdataDisplay_generator_top_images[".viewFields"][] = "Total_time";
$tdataDisplay_generator_top_images[".viewFields"][] = "idle_time";
$tdataDisplay_generator_top_images[".viewFields"][] = "idle_p";
$tdataDisplay_generator_top_images[".viewFields"][] = "efficiency";
$tdataDisplay_generator_top_images[".viewFields"][] = "performance";
$tdataDisplay_generator_top_images[".viewFields"][] = "work_type";

$tdataDisplay_generator_top_images[".addFields"] = array();
$tdataDisplay_generator_top_images[".addFields"][] = "work_date";
$tdataDisplay_generator_top_images[".addFields"][] = "team_id";
$tdataDisplay_generator_top_images[".addFields"][] = "designer_name";
$tdataDisplay_generator_top_images[".addFields"][] = "efficiency";
$tdataDisplay_generator_top_images[".addFields"][] = "work_type";

$tdataDisplay_generator_top_images[".masterListFields"] = array();
$tdataDisplay_generator_top_images[".masterListFields"][] = "work_date";
$tdataDisplay_generator_top_images[".masterListFields"][] = "team_id";
$tdataDisplay_generator_top_images[".masterListFields"][] = "designer_name";
$tdataDisplay_generator_top_images[".masterListFields"][] = "total_images";
$tdataDisplay_generator_top_images[".masterListFields"][] = "eta_total";
$tdataDisplay_generator_top_images[".masterListFields"][] = "Total_time";
$tdataDisplay_generator_top_images[".masterListFields"][] = "idle_time";
$tdataDisplay_generator_top_images[".masterListFields"][] = "idle_p";
$tdataDisplay_generator_top_images[".masterListFields"][] = "efficiency";
$tdataDisplay_generator_top_images[".masterListFields"][] = "performance";
$tdataDisplay_generator_top_images[".masterListFields"][] = "work_type";

$tdataDisplay_generator_top_images[".inlineAddFields"] = array();
$tdataDisplay_generator_top_images[".inlineAddFields"][] = "work_date";
$tdataDisplay_generator_top_images[".inlineAddFields"][] = "team_id";
$tdataDisplay_generator_top_images[".inlineAddFields"][] = "designer_name";
$tdataDisplay_generator_top_images[".inlineAddFields"][] = "efficiency";
$tdataDisplay_generator_top_images[".inlineAddFields"][] = "work_type";

$tdataDisplay_generator_top_images[".editFields"] = array();
$tdataDisplay_generator_top_images[".editFields"][] = "work_date";
$tdataDisplay_generator_top_images[".editFields"][] = "team_id";
$tdataDisplay_generator_top_images[".editFields"][] = "designer_name";
$tdataDisplay_generator_top_images[".editFields"][] = "efficiency";
$tdataDisplay_generator_top_images[".editFields"][] = "work_type";

$tdataDisplay_generator_top_images[".inlineEditFields"] = array();
$tdataDisplay_generator_top_images[".inlineEditFields"][] = "work_date";
$tdataDisplay_generator_top_images[".inlineEditFields"][] = "team_id";
$tdataDisplay_generator_top_images[".inlineEditFields"][] = "designer_name";
$tdataDisplay_generator_top_images[".inlineEditFields"][] = "efficiency";
$tdataDisplay_generator_top_images[".inlineEditFields"][] = "work_type";

$tdataDisplay_generator_top_images[".exportFields"] = array();
$tdataDisplay_generator_top_images[".exportFields"][] = "work_date";
$tdataDisplay_generator_top_images[".exportFields"][] = "team_id";
$tdataDisplay_generator_top_images[".exportFields"][] = "designer_name";
$tdataDisplay_generator_top_images[".exportFields"][] = "total_images";
$tdataDisplay_generator_top_images[".exportFields"][] = "eta_total";
$tdataDisplay_generator_top_images[".exportFields"][] = "Total_time";
$tdataDisplay_generator_top_images[".exportFields"][] = "idle_time";
$tdataDisplay_generator_top_images[".exportFields"][] = "idle_p";
$tdataDisplay_generator_top_images[".exportFields"][] = "efficiency";
$tdataDisplay_generator_top_images[".exportFields"][] = "performance";
$tdataDisplay_generator_top_images[".exportFields"][] = "work_type";

$tdataDisplay_generator_top_images[".importFields"] = array();
$tdataDisplay_generator_top_images[".importFields"][] = "work_date";
$tdataDisplay_generator_top_images[".importFields"][] = "team_id";
$tdataDisplay_generator_top_images[".importFields"][] = "designer_name";
$tdataDisplay_generator_top_images[".importFields"][] = "total_images";
$tdataDisplay_generator_top_images[".importFields"][] = "eta_total";
$tdataDisplay_generator_top_images[".importFields"][] = "Total_time";
$tdataDisplay_generator_top_images[".importFields"][] = "idle_time";
$tdataDisplay_generator_top_images[".importFields"][] = "idle_p";
$tdataDisplay_generator_top_images[".importFields"][] = "efficiency";
$tdataDisplay_generator_top_images[".importFields"][] = "performance";
$tdataDisplay_generator_top_images[".importFields"][] = "work_type";

$tdataDisplay_generator_top_images[".printFields"] = array();
$tdataDisplay_generator_top_images[".printFields"][] = "work_date";
$tdataDisplay_generator_top_images[".printFields"][] = "team_id";
$tdataDisplay_generator_top_images[".printFields"][] = "designer_name";
$tdataDisplay_generator_top_images[".printFields"][] = "total_images";
$tdataDisplay_generator_top_images[".printFields"][] = "eta_total";
$tdataDisplay_generator_top_images[".printFields"][] = "Total_time";
$tdataDisplay_generator_top_images[".printFields"][] = "idle_time";
$tdataDisplay_generator_top_images[".printFields"][] = "idle_p";
$tdataDisplay_generator_top_images[".printFields"][] = "efficiency";
$tdataDisplay_generator_top_images[".printFields"][] = "performance";
$tdataDisplay_generator_top_images[".printFields"][] = "work_type";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Display_generator_top_images","work_date"); 
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
	
	
	
	

	

	
	$tdataDisplay_generator_top_images["work_date"] = $fdata;
//	team_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team_id";
	$fdata["GoodName"] = "team_id";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Display_generator_top_images","team_id"); 
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
			$edata["EditParams"].= " maxlength=3";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataDisplay_generator_top_images["team_id"] = $fdata;
//	designer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer_name";
	$fdata["GoodName"] = "designer_name";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Display_generator_top_images","designer_name"); 
	$fdata["FieldType"] = 201;
	
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
	
		$fdata["strField"] = "designer_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designer_name";
	
		
		
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
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataDisplay_generator_top_images["designer_name"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_generator_top_images","total_images"); 
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
	
	
	
	

	

	
	$tdataDisplay_generator_top_images["total_images"] = $fdata;
//	eta_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "eta_total";
	$fdata["GoodName"] = "eta_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_generator_top_images","eta_total"); 
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
	
	
	
	

	

	
	$tdataDisplay_generator_top_images["eta_total"] = $fdata;
//	Total_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Total_time";
	$fdata["GoodName"] = "Total_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_generator_top_images","Total_time"); 
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
	
	
	
	

	

	
	$tdataDisplay_generator_top_images["Total_time"] = $fdata;
//	idle_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "idle_time";
	$fdata["GoodName"] = "idle_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_generator_top_images","idle_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idle_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time))))";
	
		
		
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
	
	
	
	

	

	
	$tdataDisplay_generator_top_images["idle_time"] = $fdata;
//	idle_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idle_p";
	$fdata["GoodName"] = "idle_p";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_generator_top_images","idle_p"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idle_p"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100";
	
		
		
				
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
	
	
	
	

	

	
	$tdataDisplay_generator_top_images["idle_p"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_generator_top_images","efficiency"); 
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
	
	
	
	

	

	
	$tdataDisplay_generator_top_images["efficiency"] = $fdata;
//	performance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "performance";
	$fdata["GoodName"] = "performance";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_generator_top_images","performance"); 
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
	$fdata["FullName"] = "((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100";
	
		
		
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

	

	
	$tdataDisplay_generator_top_images["performance"] = $fdata;
//	work_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "work_type";
	$fdata["GoodName"] = "work_type";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Display_generator_top_images","work_type"); 
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
	
	
	
	

	

	
	$tdataDisplay_generator_top_images["work_type"] = $fdata;

	
$tables_data["Display generator_top_images"]=&$tdataDisplay_generator_top_images;
$field_labels["Display_generator_top_images"] = &$fieldLabelsDisplay_generator_top_images;
$fieldToolTips["Display generator_top_images"] = &$fieldToolTipsDisplay_generator_top_images;
$page_titles["Display_generator_top_images"] = &$pageTitlesDisplay_generator_top_images;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Display generator_top_images"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Display generator_top_images"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Display_generator_top_images()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_date,  team_id,  designer_name,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  (IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time)))) AS idle_time,  (IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  ((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS performance,  work_type";
$proto0["m_strFrom"] = "FROM designer_report";
$proto0["m_strWhere"] = "user_group =7 AND work_type =1";
$proto0["m_strOrderBy"] = "ORDER BY work_date DESC, SUM(total_images_counted) DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "user_group =7 AND work_type =1";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "user_group =7 AND work_type =1"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "user_group =7";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "user_group",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display generator_top_images"
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
$proto5["m_sql"] = "work_type =1";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display generator_top_images"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "=1";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display generator_top_images"
));

$proto9["m_sql"] = "work_date";
$proto9["m_srcTableName"] = "Display generator_top_images";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display generator_top_images"
));

$proto11["m_sql"] = "team_id";
$proto11["m_srcTableName"] = "Display generator_top_images";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display generator_top_images"
));

$proto13["m_sql"] = "designer_name";
$proto13["m_srcTableName"] = "Display generator_top_images";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$proto16=array();
$proto16["m_functiontype"] = "SQLF_SUM";
$proto16["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total_images_counted",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display generator_top_images"
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "SUM(total_images_counted)";
$proto15["m_srcTableName"] = "Display generator_top_images";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "total_images";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_CUSTOM";
$proto19["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(estimated_time)"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "SEC_TO_TIME(SUM(estimated_time))";
$proto18["m_srcTableName"] = "Display generator_top_images";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "eta_total";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_CUSTOM";
$proto22["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(designer_time)"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "SEC_TO_TIME(SUM(designer_time))";
$proto21["m_srcTableName"] = "Display generator_top_images";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "Total_time";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time))))"
));

$proto24["m_sql"] = "(IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time))))";
$proto24["m_srcTableName"] = "Display generator_top_images";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "idle_time";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100"
));

$proto26["m_sql"] = "(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100";
$proto26["m_srcTableName"] = "Display generator_top_images";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "idle_p";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((SUM(estimated_time))/(SUM(designer_time)))*100"
));

$proto28["m_sql"] = "((SUM(estimated_time))/(SUM(designer_time)))*100";
$proto28["m_srcTableName"] = "Display generator_top_images";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100"
));

$proto30["m_sql"] = "((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100";
$proto30["m_srcTableName"] = "Display generator_top_images";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "performance";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display generator_top_images"
));

$proto32["m_sql"] = "work_type";
$proto32["m_srcTableName"] = "Display generator_top_images";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "designer_report";
$proto35["m_srcTableName"] = "Display generator_top_images";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "report_id";
$proto35["m_columns"][] = "report_reference";
$proto35["m_columns"][] = "work_date";
$proto35["m_columns"][] = "designer_name";
$proto35["m_columns"][] = "team_id";
$proto35["m_columns"][] = "subdiv_id";
$proto35["m_columns"][] = "user_group";
$proto35["m_columns"][] = "pdf_name";
$proto35["m_columns"][] = "estimated_time";
$proto35["m_columns"][] = "designer_time";
$proto35["m_columns"][] = "qc_time";
$proto35["m_columns"][] = "efficiency";
$proto35["m_columns"][] = "total_images_counted";
$proto35["m_columns"][] = "comments";
$proto35["m_columns"][] = "work_type";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "designer_report";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "Display generator_top_images";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display generator_top_images"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display generator_top_images"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display generator_top_images"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
												$proto44=array();
						$proto45=array();
$proto45["m_functiontype"] = "SQLF_SUM";
$proto45["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total_images_counted",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display generator_top_images"
));

$proto45["m_arguments"][]=$obj;
$proto45["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto45);

$proto44["m_column"]=$obj;
$proto44["m_bAsc"] = 0;
$proto44["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto44);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Display generator_top_images";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Display_generator_top_images = createSqlQuery_Display_generator_top_images();


	
											
	
$tdataDisplay_generator_top_images[".sqlquery"] = $queryData_Display_generator_top_images;

$tableEvents["Display generator_top_images"] = new eventsBase;
$tdataDisplay_generator_top_images[".hasEvents"] = false;

?>