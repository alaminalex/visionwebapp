<?php
require_once(getabspath("classes/cipherer.php"));




$tdatagenerator_top_images = array();	
	$tdatagenerator_top_images[".truncateText"] = true;
	$tdatagenerator_top_images[".NumberOfChars"] = 256; 
	$tdatagenerator_top_images[".ShortName"] = "generator_top_images";
	$tdatagenerator_top_images[".OwnerID"] = "";
	$tdatagenerator_top_images[".OriginalTable"] = "designer_report";

//	field labels
$fieldLabelsgenerator_top_images = array();
$fieldToolTipsgenerator_top_images = array();
$pageTitlesgenerator_top_images = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgenerator_top_images["English"] = array();
	$fieldToolTipsgenerator_top_images["English"] = array();
	$pageTitlesgenerator_top_images["English"] = array();
	$fieldLabelsgenerator_top_images["English"]["work_date"] = "Work Date";
	$fieldToolTipsgenerator_top_images["English"]["work_date"] = "";
	$fieldLabelsgenerator_top_images["English"]["designer_name"] = "Designer Name";
	$fieldToolTipsgenerator_top_images["English"]["designer_name"] = "";
	$fieldLabelsgenerator_top_images["English"]["work_type"] = "Work Type";
	$fieldToolTipsgenerator_top_images["English"]["work_type"] = "";
	$fieldLabelsgenerator_top_images["English"]["Total_time"] = "Total Time";
	$fieldToolTipsgenerator_top_images["English"]["Total_time"] = "";
	$fieldLabelsgenerator_top_images["English"]["total_images"] = "Total Images";
	$fieldToolTipsgenerator_top_images["English"]["total_images"] = "";
	$fieldLabelsgenerator_top_images["English"]["idle_time"] = "Idle Time";
	$fieldToolTipsgenerator_top_images["English"]["idle_time"] = "";
	$fieldLabelsgenerator_top_images["English"]["idle_p"] = "Idle P";
	$fieldToolTipsgenerator_top_images["English"]["idle_p"] = "";
	$fieldLabelsgenerator_top_images["English"]["eta_total"] = "Eta Total";
	$fieldToolTipsgenerator_top_images["English"]["eta_total"] = "";
	$fieldLabelsgenerator_top_images["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsgenerator_top_images["English"]["efficiency"] = "";
	$fieldLabelsgenerator_top_images["English"]["team_id"] = "Team Id";
	$fieldToolTipsgenerator_top_images["English"]["team_id"] = "";
	$fieldLabelsgenerator_top_images["English"]["performance"] = "Performance";
	$fieldToolTipsgenerator_top_images["English"]["performance"] = "";
	if (count($fieldToolTipsgenerator_top_images["English"]))
		$tdatagenerator_top_images[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsgenerator_top_images[""] = array();
	$fieldToolTipsgenerator_top_images[""] = array();
	$pageTitlesgenerator_top_images[""] = array();
	if (count($fieldToolTipsgenerator_top_images[""]))
		$tdatagenerator_top_images[".isUseToolTips"] = true;
}
	
	
	$tdatagenerator_top_images[".NCSearch"] = true;



$tdatagenerator_top_images[".shortTableName"] = "generator_top_images";
$tdatagenerator_top_images[".nSecOptions"] = 0;
$tdatagenerator_top_images[".recsPerRowList"] = 1;
$tdatagenerator_top_images[".recsPerRowPrint"] = 1;
$tdatagenerator_top_images[".mainTableOwnerID"] = "";
$tdatagenerator_top_images[".moveNext"] = 1;
$tdatagenerator_top_images[".entityType"] = 2;

$tdatagenerator_top_images[".strOriginalTableName"] = "designer_report";




$tdatagenerator_top_images[".showAddInPopup"] = false;

$tdatagenerator_top_images[".showEditInPopup"] = false;

$tdatagenerator_top_images[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagenerator_top_images[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagenerator_top_images[".fieldsForRegister"] = array();

$tdatagenerator_top_images[".listAjax"] = false;

	$tdatagenerator_top_images[".audit"] = false;

	$tdatagenerator_top_images[".locking"] = false;


$tdatagenerator_top_images[".add"] = true;
$tdatagenerator_top_images[".afterAddAction"] = 1;
$tdatagenerator_top_images[".closePopupAfterAdd"] = 1;
$tdatagenerator_top_images[".afterAddActionDetTable"] = "";

$tdatagenerator_top_images[".list"] = true;

$tdatagenerator_top_images[".inlineAdd"] = true;


$tdatagenerator_top_images[".exportTo"] = true;

$tdatagenerator_top_images[".printFriendly"] = true;


$tdatagenerator_top_images[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatagenerator_top_images[".searchSaving"] = false;
//

$tdatagenerator_top_images[".showSearchPanel"] = true;
		$tdatagenerator_top_images[".flexibleSearch"] = true;		

if (isMobile())
	$tdatagenerator_top_images[".isUseAjaxSuggest"] = false;
else 
	$tdatagenerator_top_images[".isUseAjaxSuggest"] = true;



																																																																																																																																			
$tdatagenerator_top_images[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagenerator_top_images[".isUseTimeForSearch"] = false;





$tdatagenerator_top_images[".allSearchFields"] = array();
$tdatagenerator_top_images[".filterFields"] = array();
$tdatagenerator_top_images[".requiredSearchFields"] = array();

$tdatagenerator_top_images[".allSearchFields"][] = "performance";
	

$tdatagenerator_top_images[".googleLikeFields"] = array();
$tdatagenerator_top_images[".googleLikeFields"][] = "work_date";
$tdatagenerator_top_images[".googleLikeFields"][] = "team_id";
$tdatagenerator_top_images[".googleLikeFields"][] = "designer_name";
$tdatagenerator_top_images[".googleLikeFields"][] = "total_images";
$tdatagenerator_top_images[".googleLikeFields"][] = "eta_total";
$tdatagenerator_top_images[".googleLikeFields"][] = "Total_time";
$tdatagenerator_top_images[".googleLikeFields"][] = "idle_time";
$tdatagenerator_top_images[".googleLikeFields"][] = "idle_p";
$tdatagenerator_top_images[".googleLikeFields"][] = "efficiency";
$tdatagenerator_top_images[".googleLikeFields"][] = "performance";
$tdatagenerator_top_images[".googleLikeFields"][] = "work_type";


$tdatagenerator_top_images[".advSearchFields"] = array();
$tdatagenerator_top_images[".advSearchFields"][] = "work_date";
$tdatagenerator_top_images[".advSearchFields"][] = "team_id";
$tdatagenerator_top_images[".advSearchFields"][] = "designer_name";
$tdatagenerator_top_images[".advSearchFields"][] = "total_images";
$tdatagenerator_top_images[".advSearchFields"][] = "eta_total";
$tdatagenerator_top_images[".advSearchFields"][] = "Total_time";
$tdatagenerator_top_images[".advSearchFields"][] = "idle_time";
$tdatagenerator_top_images[".advSearchFields"][] = "idle_p";
$tdatagenerator_top_images[".advSearchFields"][] = "efficiency";
$tdatagenerator_top_images[".advSearchFields"][] = "performance";
$tdatagenerator_top_images[".advSearchFields"][] = "work_type";

$tdatagenerator_top_images[".tableType"] = "report";

$tdatagenerator_top_images[".printerPageOrientation"] = 0;
$tdatagenerator_top_images[".nPrinterPageScale"] = 100;

$tdatagenerator_top_images[".nPrinterSplitRecords"] = 40;

$tdatagenerator_top_images[".nPrinterPDFSplitRecords"] = 40;



$tdatagenerator_top_images[".geocodingEnabled"] = false;

//report settings
$tdatagenerator_top_images[".printReportLayout"] = 6;	

$tdatagenerator_top_images[".reportPrintPartitionType"] = 1;	
$tdatagenerator_top_images[".reportPrintGroupsPerPage"] = 40;	
	$tdatagenerator_top_images[".reportPrintPDFGroupsPerPage"] = 40;
$tdatagenerator_top_images[".lowGroup"] = 0;



$tdatagenerator_top_images[".pageSize"] = 3;	






$tdatagenerator_top_images[".repShowDet"] = true;

$tdatagenerator_top_images[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC, SUM(total_images_counted) DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagenerator_top_images[".strOrderBy"] = $tstrOrderBy;

$tdatagenerator_top_images[".orderindexes"] = array();
$tdatagenerator_top_images[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "work_date");
$tdatagenerator_top_images[".orderindexes"][] = array(0, (0 ? "ASC" : "DESC"), "SUM(total_images_counted)");

$tdatagenerator_top_images[".sqlHead"] = "SELECT work_date,  team_id,  designer_name,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  (IF ((25200-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(25200-SUM(designer_time)))) AS idle_time,  (IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  ((1-(IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200)))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS performance,  work_type";
$tdatagenerator_top_images[".sqlFrom"] = "FROM designer_report";
$tdatagenerator_top_images[".sqlWhereExpr"] = "user_group =7";
$tdatagenerator_top_images[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagenerator_top_images[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagenerator_top_images[".arrGroupsPerPage"] = $arrGPP;

$tdatagenerator_top_images[".highlightSearchResults"] = true;

$tableKeysgenerator_top_images = array();
$tdatagenerator_top_images[".Keys"] = $tableKeysgenerator_top_images;

$tdatagenerator_top_images[".listFields"] = array();
$tdatagenerator_top_images[".listFields"][] = "work_date";
$tdatagenerator_top_images[".listFields"][] = "team_id";
$tdatagenerator_top_images[".listFields"][] = "designer_name";
$tdatagenerator_top_images[".listFields"][] = "total_images";
$tdatagenerator_top_images[".listFields"][] = "eta_total";
$tdatagenerator_top_images[".listFields"][] = "Total_time";
$tdatagenerator_top_images[".listFields"][] = "idle_time";
$tdatagenerator_top_images[".listFields"][] = "idle_p";
$tdatagenerator_top_images[".listFields"][] = "efficiency";
$tdatagenerator_top_images[".listFields"][] = "performance";
$tdatagenerator_top_images[".listFields"][] = "work_type";

$tdatagenerator_top_images[".hideMobileList"] = array();


$tdatagenerator_top_images[".viewFields"] = array();
$tdatagenerator_top_images[".viewFields"][] = "work_date";
$tdatagenerator_top_images[".viewFields"][] = "team_id";
$tdatagenerator_top_images[".viewFields"][] = "designer_name";
$tdatagenerator_top_images[".viewFields"][] = "total_images";
$tdatagenerator_top_images[".viewFields"][] = "eta_total";
$tdatagenerator_top_images[".viewFields"][] = "Total_time";
$tdatagenerator_top_images[".viewFields"][] = "idle_time";
$tdatagenerator_top_images[".viewFields"][] = "idle_p";
$tdatagenerator_top_images[".viewFields"][] = "efficiency";
$tdatagenerator_top_images[".viewFields"][] = "performance";
$tdatagenerator_top_images[".viewFields"][] = "work_type";

$tdatagenerator_top_images[".addFields"] = array();
$tdatagenerator_top_images[".addFields"][] = "work_date";
$tdatagenerator_top_images[".addFields"][] = "team_id";
$tdatagenerator_top_images[".addFields"][] = "designer_name";
$tdatagenerator_top_images[".addFields"][] = "efficiency";
$tdatagenerator_top_images[".addFields"][] = "work_type";

$tdatagenerator_top_images[".masterListFields"] = array();
$tdatagenerator_top_images[".masterListFields"][] = "work_date";
$tdatagenerator_top_images[".masterListFields"][] = "team_id";
$tdatagenerator_top_images[".masterListFields"][] = "designer_name";
$tdatagenerator_top_images[".masterListFields"][] = "total_images";
$tdatagenerator_top_images[".masterListFields"][] = "eta_total";
$tdatagenerator_top_images[".masterListFields"][] = "Total_time";
$tdatagenerator_top_images[".masterListFields"][] = "idle_time";
$tdatagenerator_top_images[".masterListFields"][] = "idle_p";
$tdatagenerator_top_images[".masterListFields"][] = "efficiency";
$tdatagenerator_top_images[".masterListFields"][] = "performance";
$tdatagenerator_top_images[".masterListFields"][] = "work_type";

$tdatagenerator_top_images[".inlineAddFields"] = array();
$tdatagenerator_top_images[".inlineAddFields"][] = "work_date";
$tdatagenerator_top_images[".inlineAddFields"][] = "team_id";
$tdatagenerator_top_images[".inlineAddFields"][] = "designer_name";
$tdatagenerator_top_images[".inlineAddFields"][] = "efficiency";
$tdatagenerator_top_images[".inlineAddFields"][] = "work_type";

$tdatagenerator_top_images[".editFields"] = array();
$tdatagenerator_top_images[".editFields"][] = "work_date";
$tdatagenerator_top_images[".editFields"][] = "team_id";
$tdatagenerator_top_images[".editFields"][] = "designer_name";
$tdatagenerator_top_images[".editFields"][] = "efficiency";
$tdatagenerator_top_images[".editFields"][] = "work_type";

$tdatagenerator_top_images[".inlineEditFields"] = array();
$tdatagenerator_top_images[".inlineEditFields"][] = "work_date";
$tdatagenerator_top_images[".inlineEditFields"][] = "team_id";
$tdatagenerator_top_images[".inlineEditFields"][] = "designer_name";
$tdatagenerator_top_images[".inlineEditFields"][] = "efficiency";
$tdatagenerator_top_images[".inlineEditFields"][] = "work_type";

$tdatagenerator_top_images[".exportFields"] = array();
$tdatagenerator_top_images[".exportFields"][] = "work_date";
$tdatagenerator_top_images[".exportFields"][] = "team_id";
$tdatagenerator_top_images[".exportFields"][] = "designer_name";
$tdatagenerator_top_images[".exportFields"][] = "total_images";
$tdatagenerator_top_images[".exportFields"][] = "eta_total";
$tdatagenerator_top_images[".exportFields"][] = "Total_time";
$tdatagenerator_top_images[".exportFields"][] = "idle_time";
$tdatagenerator_top_images[".exportFields"][] = "idle_p";
$tdatagenerator_top_images[".exportFields"][] = "efficiency";
$tdatagenerator_top_images[".exportFields"][] = "performance";
$tdatagenerator_top_images[".exportFields"][] = "work_type";

$tdatagenerator_top_images[".importFields"] = array();
$tdatagenerator_top_images[".importFields"][] = "work_date";
$tdatagenerator_top_images[".importFields"][] = "team_id";
$tdatagenerator_top_images[".importFields"][] = "designer_name";
$tdatagenerator_top_images[".importFields"][] = "total_images";
$tdatagenerator_top_images[".importFields"][] = "eta_total";
$tdatagenerator_top_images[".importFields"][] = "Total_time";
$tdatagenerator_top_images[".importFields"][] = "idle_time";
$tdatagenerator_top_images[".importFields"][] = "idle_p";
$tdatagenerator_top_images[".importFields"][] = "efficiency";
$tdatagenerator_top_images[".importFields"][] = "performance";
$tdatagenerator_top_images[".importFields"][] = "work_type";

$tdatagenerator_top_images[".printFields"] = array();
$tdatagenerator_top_images[".printFields"][] = "work_date";
$tdatagenerator_top_images[".printFields"][] = "team_id";
$tdatagenerator_top_images[".printFields"][] = "designer_name";
$tdatagenerator_top_images[".printFields"][] = "total_images";
$tdatagenerator_top_images[".printFields"][] = "eta_total";
$tdatagenerator_top_images[".printFields"][] = "Total_time";
$tdatagenerator_top_images[".printFields"][] = "idle_time";
$tdatagenerator_top_images[".printFields"][] = "idle_p";
$tdatagenerator_top_images[".printFields"][] = "efficiency";
$tdatagenerator_top_images[".printFields"][] = "performance";
$tdatagenerator_top_images[".printFields"][] = "work_type";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("generator_top_images","work_date"); 
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
	
	
	
	

	

	
	$tdatagenerator_top_images["work_date"] = $fdata;
//	team_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team_id";
	$fdata["GoodName"] = "team_id";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("generator_top_images","team_id"); 
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
	
	
	
	

	

	
	$tdatagenerator_top_images["team_id"] = $fdata;
//	designer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer_name";
	$fdata["GoodName"] = "designer_name";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("generator_top_images","designer_name"); 
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
	
	
	
	

	

	
	$tdatagenerator_top_images["designer_name"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_top_images","total_images"); 
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
	
	
	
	

	

	
	$tdatagenerator_top_images["total_images"] = $fdata;
//	eta_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "eta_total";
	$fdata["GoodName"] = "eta_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_top_images","eta_total"); 
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
	
	
	
	

	

	
	$tdatagenerator_top_images["eta_total"] = $fdata;
//	Total_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Total_time";
	$fdata["GoodName"] = "Total_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_top_images","Total_time"); 
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
	
	
	
	

	

	
	$tdatagenerator_top_images["Total_time"] = $fdata;
//	idle_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "idle_time";
	$fdata["GoodName"] = "idle_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_top_images","idle_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idle_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(IF ((25200-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(25200-SUM(designer_time))))";
	
		
		
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
	
	
	
	

	

	
	$tdatagenerator_top_images["idle_time"] = $fdata;
//	idle_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idle_p";
	$fdata["GoodName"] = "idle_p";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_top_images","idle_p"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idle_p"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200))*100";
	
		
		
				
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
	
	
	
	

	

	
	$tdatagenerator_top_images["idle_p"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_top_images","efficiency"); 
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
	
	
	
	

	

	
	$tdatagenerator_top_images["efficiency"] = $fdata;
//	performance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "performance";
	$fdata["GoodName"] = "performance";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_top_images","performance"); 
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
	$fdata["FullName"] = "((1-(IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200)))*((SUM(estimated_time))/(SUM(designer_time))))*100";
	
		
		
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

	

	
	$tdatagenerator_top_images["performance"] = $fdata;
//	work_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "work_type";
	$fdata["GoodName"] = "work_type";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("generator_top_images","work_type"); 
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
	
	
	
	

	

	
	$tdatagenerator_top_images["work_type"] = $fdata;

	
$tables_data["generator_top_images"]=&$tdatagenerator_top_images;
$field_labels["generator_top_images"] = &$fieldLabelsgenerator_top_images;
$fieldToolTips["generator_top_images"] = &$fieldToolTipsgenerator_top_images;
$page_titles["generator_top_images"] = &$pageTitlesgenerator_top_images;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["generator_top_images"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["generator_top_images"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_generator_top_images()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_date,  team_id,  designer_name,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  (IF ((25200-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(25200-SUM(designer_time)))) AS idle_time,  (IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  ((1-(IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200)))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS performance,  work_type";
$proto0["m_strFrom"] = "FROM designer_report";
$proto0["m_strWhere"] = "user_group =7";
$proto0["m_strOrderBy"] = "ORDER BY work_date DESC, SUM(total_images_counted) DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "user_group =7";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "user_group",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "generator_top_images"
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
	"m_srcTableName" => "generator_top_images"
));

$proto5["m_sql"] = "work_date";
$proto5["m_srcTableName"] = "generator_top_images";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "generator_top_images"
));

$proto7["m_sql"] = "team_id";
$proto7["m_srcTableName"] = "generator_top_images";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "generator_top_images"
));

$proto9["m_sql"] = "designer_name";
$proto9["m_srcTableName"] = "generator_top_images";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_SUM";
$proto12["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total_images_counted",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "generator_top_images"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto12);

$proto11["m_sql"] = "SUM(total_images_counted)";
$proto11["m_srcTableName"] = "generator_top_images";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "total_images";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(estimated_time)"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "SEC_TO_TIME(SUM(estimated_time))";
$proto14["m_srcTableName"] = "generator_top_images";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "eta_total";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$proto18=array();
$proto18["m_functiontype"] = "SQLF_CUSTOM";
$proto18["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(designer_time)"
));

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto18);

$proto17["m_sql"] = "SEC_TO_TIME(SUM(designer_time))";
$proto17["m_srcTableName"] = "generator_top_images";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Total_time";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF ((25200-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(25200-SUM(designer_time))))"
));

$proto20["m_sql"] = "(IF ((25200-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(25200-SUM(designer_time))))";
$proto20["m_srcTableName"] = "generator_top_images";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "idle_time";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200))*100"
));

$proto22["m_sql"] = "(IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200))*100";
$proto22["m_srcTableName"] = "generator_top_images";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "idle_p";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((SUM(estimated_time))/(SUM(designer_time)))*100"
));

$proto24["m_sql"] = "((SUM(estimated_time))/(SUM(designer_time)))*100";
$proto24["m_srcTableName"] = "generator_top_images";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((1-(IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200)))*((SUM(estimated_time))/(SUM(designer_time))))*100"
));

$proto26["m_sql"] = "((1-(IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200)))*((SUM(estimated_time))/(SUM(designer_time))))*100";
$proto26["m_srcTableName"] = "generator_top_images";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "performance";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "generator_top_images"
));

$proto28["m_sql"] = "work_type";
$proto28["m_srcTableName"] = "generator_top_images";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "designer_report";
$proto31["m_srcTableName"] = "generator_top_images";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "report_id";
$proto31["m_columns"][] = "report_reference";
$proto31["m_columns"][] = "work_date";
$proto31["m_columns"][] = "designer_name";
$proto31["m_columns"][] = "team_id";
$proto31["m_columns"][] = "subdiv_id";
$proto31["m_columns"][] = "user_group";
$proto31["m_columns"][] = "pdf_name";
$proto31["m_columns"][] = "estimated_time";
$proto31["m_columns"][] = "designer_time";
$proto31["m_columns"][] = "efficiency";
$proto31["m_columns"][] = "total_images_counted";
$proto31["m_columns"][] = "comments";
$proto31["m_columns"][] = "work_type";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "designer_report";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "generator_top_images";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "generator_top_images"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "generator_top_images"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "generator_top_images"
));

$proto38["m_column"]=$obj;
$proto38["m_bAsc"] = 0;
$proto38["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto38);

$proto0["m_orderby"][]=$obj;					
												$proto40=array();
						$proto41=array();
$proto41["m_functiontype"] = "SQLF_SUM";
$proto41["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total_images_counted",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "generator_top_images"
));

$proto41["m_arguments"][]=$obj;
$proto41["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto41);

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 0;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="generator_top_images";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_generator_top_images = createSqlQuery_generator_top_images();


	
											
	
$tdatagenerator_top_images[".sqlquery"] = $queryData_generator_top_images;

$tableEvents["generator_top_images"] = new eventsBase;
$tdatagenerator_top_images[".hasEvents"] = false;

?>