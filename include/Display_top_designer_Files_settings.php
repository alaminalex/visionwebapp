<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDisplay_top_designer_Files = array();	
	$tdataDisplay_top_designer_Files[".truncateText"] = true;
	$tdataDisplay_top_designer_Files[".NumberOfChars"] = 256; 
	$tdataDisplay_top_designer_Files[".ShortName"] = "Display_top_designer_Files";
	$tdataDisplay_top_designer_Files[".OwnerID"] = "";
	$tdataDisplay_top_designer_Files[".OriginalTable"] = "designer_report";

//	field labels
$fieldLabelsDisplay_top_designer_Files = array();
$fieldToolTipsDisplay_top_designer_Files = array();
$pageTitlesDisplay_top_designer_Files = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDisplay_top_designer_Files["English"] = array();
	$fieldToolTipsDisplay_top_designer_Files["English"] = array();
	$pageTitlesDisplay_top_designer_Files["English"] = array();
	$fieldLabelsDisplay_top_designer_Files["English"]["work_date"] = "Work Date";
	$fieldToolTipsDisplay_top_designer_Files["English"]["work_date"] = "";
	$fieldLabelsDisplay_top_designer_Files["English"]["designer_name"] = "Designer Name";
	$fieldToolTipsDisplay_top_designer_Files["English"]["designer_name"] = "";
	$fieldLabelsDisplay_top_designer_Files["English"]["work_type"] = "Work Type";
	$fieldToolTipsDisplay_top_designer_Files["English"]["work_type"] = "";
	$fieldLabelsDisplay_top_designer_Files["English"]["Total_time"] = "Total Time";
	$fieldToolTipsDisplay_top_designer_Files["English"]["Total_time"] = "";
	$fieldLabelsDisplay_top_designer_Files["English"]["total_images"] = "Total Images";
	$fieldToolTipsDisplay_top_designer_Files["English"]["total_images"] = "";
	$fieldLabelsDisplay_top_designer_Files["English"]["idle_time"] = "Idle Time";
	$fieldToolTipsDisplay_top_designer_Files["English"]["idle_time"] = "";
	$fieldLabelsDisplay_top_designer_Files["English"]["idle_p"] = "Idle P";
	$fieldToolTipsDisplay_top_designer_Files["English"]["idle_p"] = "";
	$fieldLabelsDisplay_top_designer_Files["English"]["eta_total"] = "Eta Total";
	$fieldToolTipsDisplay_top_designer_Files["English"]["eta_total"] = "";
	$fieldLabelsDisplay_top_designer_Files["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsDisplay_top_designer_Files["English"]["efficiency"] = "";
	$fieldLabelsDisplay_top_designer_Files["English"]["team_id"] = "Team Id";
	$fieldToolTipsDisplay_top_designer_Files["English"]["team_id"] = "";
	$fieldLabelsDisplay_top_designer_Files["English"]["performance"] = "Performance";
	$fieldToolTipsDisplay_top_designer_Files["English"]["performance"] = "";
	if (count($fieldToolTipsDisplay_top_designer_Files["English"]))
		$tdataDisplay_top_designer_Files[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDisplay_top_designer_Files[""] = array();
	$fieldToolTipsDisplay_top_designer_Files[""] = array();
	$pageTitlesDisplay_top_designer_Files[""] = array();
	if (count($fieldToolTipsDisplay_top_designer_Files[""]))
		$tdataDisplay_top_designer_Files[".isUseToolTips"] = true;
}
	
	
	$tdataDisplay_top_designer_Files[".NCSearch"] = true;



$tdataDisplay_top_designer_Files[".shortTableName"] = "Display_top_designer_Files";
$tdataDisplay_top_designer_Files[".nSecOptions"] = 0;
$tdataDisplay_top_designer_Files[".recsPerRowList"] = 1;
$tdataDisplay_top_designer_Files[".recsPerRowPrint"] = 1;
$tdataDisplay_top_designer_Files[".mainTableOwnerID"] = "";
$tdataDisplay_top_designer_Files[".moveNext"] = 1;
$tdataDisplay_top_designer_Files[".entityType"] = 2;

$tdataDisplay_top_designer_Files[".strOriginalTableName"] = "designer_report";




$tdataDisplay_top_designer_Files[".showAddInPopup"] = false;

$tdataDisplay_top_designer_Files[".showEditInPopup"] = false;

$tdataDisplay_top_designer_Files[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDisplay_top_designer_Files[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDisplay_top_designer_Files[".fieldsForRegister"] = array();

$tdataDisplay_top_designer_Files[".listAjax"] = false;

	$tdataDisplay_top_designer_Files[".audit"] = false;

	$tdataDisplay_top_designer_Files[".locking"] = false;


$tdataDisplay_top_designer_Files[".add"] = true;
$tdataDisplay_top_designer_Files[".afterAddAction"] = 0;
$tdataDisplay_top_designer_Files[".closePopupAfterAdd"] = 1;
$tdataDisplay_top_designer_Files[".afterAddActionDetTable"] = "";

$tdataDisplay_top_designer_Files[".list"] = true;

$tdataDisplay_top_designer_Files[".inlineAdd"] = true;


$tdataDisplay_top_designer_Files[".exportTo"] = true;

$tdataDisplay_top_designer_Files[".printFriendly"] = true;


$tdataDisplay_top_designer_Files[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDisplay_top_designer_Files[".searchSaving"] = false;
//

$tdataDisplay_top_designer_Files[".showSearchPanel"] = true;
		$tdataDisplay_top_designer_Files[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDisplay_top_designer_Files[".isUseAjaxSuggest"] = false;
else 
	$tdataDisplay_top_designer_Files[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDisplay_top_designer_Files[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDisplay_top_designer_Files[".isUseTimeForSearch"] = false;





$tdataDisplay_top_designer_Files[".allSearchFields"] = array();
$tdataDisplay_top_designer_Files[".filterFields"] = array();
$tdataDisplay_top_designer_Files[".requiredSearchFields"] = array();

$tdataDisplay_top_designer_Files[".allSearchFields"][] = "performance";
	

$tdataDisplay_top_designer_Files[".googleLikeFields"] = array();
$tdataDisplay_top_designer_Files[".googleLikeFields"][] = "work_date";
$tdataDisplay_top_designer_Files[".googleLikeFields"][] = "team_id";
$tdataDisplay_top_designer_Files[".googleLikeFields"][] = "designer_name";
$tdataDisplay_top_designer_Files[".googleLikeFields"][] = "total_images";
$tdataDisplay_top_designer_Files[".googleLikeFields"][] = "eta_total";
$tdataDisplay_top_designer_Files[".googleLikeFields"][] = "Total_time";
$tdataDisplay_top_designer_Files[".googleLikeFields"][] = "idle_time";
$tdataDisplay_top_designer_Files[".googleLikeFields"][] = "idle_p";
$tdataDisplay_top_designer_Files[".googleLikeFields"][] = "efficiency";
$tdataDisplay_top_designer_Files[".googleLikeFields"][] = "performance";
$tdataDisplay_top_designer_Files[".googleLikeFields"][] = "work_type";


$tdataDisplay_top_designer_Files[".advSearchFields"] = array();
$tdataDisplay_top_designer_Files[".advSearchFields"][] = "work_date";
$tdataDisplay_top_designer_Files[".advSearchFields"][] = "team_id";
$tdataDisplay_top_designer_Files[".advSearchFields"][] = "designer_name";
$tdataDisplay_top_designer_Files[".advSearchFields"][] = "total_images";
$tdataDisplay_top_designer_Files[".advSearchFields"][] = "eta_total";
$tdataDisplay_top_designer_Files[".advSearchFields"][] = "Total_time";
$tdataDisplay_top_designer_Files[".advSearchFields"][] = "idle_time";
$tdataDisplay_top_designer_Files[".advSearchFields"][] = "idle_p";
$tdataDisplay_top_designer_Files[".advSearchFields"][] = "efficiency";
$tdataDisplay_top_designer_Files[".advSearchFields"][] = "performance";
$tdataDisplay_top_designer_Files[".advSearchFields"][] = "work_type";

$tdataDisplay_top_designer_Files[".tableType"] = "report";

$tdataDisplay_top_designer_Files[".printerPageOrientation"] = 0;
$tdataDisplay_top_designer_Files[".nPrinterPageScale"] = 100;

$tdataDisplay_top_designer_Files[".nPrinterSplitRecords"] = 40;

$tdataDisplay_top_designer_Files[".nPrinterPDFSplitRecords"] = 40;



$tdataDisplay_top_designer_Files[".geocodingEnabled"] = false;

//report settings
$tdataDisplay_top_designer_Files[".printReportLayout"] = 6;	

$tdataDisplay_top_designer_Files[".reportPrintPartitionType"] = 1;	
$tdataDisplay_top_designer_Files[".reportPrintGroupsPerPage"] = 40;	
	$tdataDisplay_top_designer_Files[".reportPrintPDFGroupsPerPage"] = 40;
$tdataDisplay_top_designer_Files[".lowGroup"] = 0;



$tdataDisplay_top_designer_Files[".pageSize"] = 3;	






$tdataDisplay_top_designer_Files[".repShowDet"] = true;

$tdataDisplay_top_designer_Files[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC, total_images                     DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDisplay_top_designer_Files[".strOrderBy"] = $tstrOrderBy;

$tdataDisplay_top_designer_Files[".orderindexes"] = array();
$tdataDisplay_top_designer_Files[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "work_date");
$tdataDisplay_top_designer_Files[".orderindexes"][] = array(0, (0 ? "ASC" : "DESC"), "total_images                     ");

$tdataDisplay_top_designer_Files[".sqlHead"] = "SELECT work_date,  team_id,  designer_name,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  (IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time)))) AS idle_time,  (IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  ((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS performance,  work_type";
$tdataDisplay_top_designer_Files[".sqlFrom"] = "FROM designer_report";
$tdataDisplay_top_designer_Files[".sqlWhereExpr"] = "user_group =7 AND (work_type =1 OR work_type =3)";
$tdataDisplay_top_designer_Files[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDisplay_top_designer_Files[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDisplay_top_designer_Files[".arrGroupsPerPage"] = $arrGPP;

$tdataDisplay_top_designer_Files[".highlightSearchResults"] = true;

$tableKeysDisplay_top_designer_Files = array();
$tdataDisplay_top_designer_Files[".Keys"] = $tableKeysDisplay_top_designer_Files;

$tdataDisplay_top_designer_Files[".listFields"] = array();
$tdataDisplay_top_designer_Files[".listFields"][] = "work_date";
$tdataDisplay_top_designer_Files[".listFields"][] = "team_id";
$tdataDisplay_top_designer_Files[".listFields"][] = "designer_name";
$tdataDisplay_top_designer_Files[".listFields"][] = "total_images";
$tdataDisplay_top_designer_Files[".listFields"][] = "eta_total";
$tdataDisplay_top_designer_Files[".listFields"][] = "Total_time";
$tdataDisplay_top_designer_Files[".listFields"][] = "idle_time";
$tdataDisplay_top_designer_Files[".listFields"][] = "idle_p";
$tdataDisplay_top_designer_Files[".listFields"][] = "efficiency";
$tdataDisplay_top_designer_Files[".listFields"][] = "performance";
$tdataDisplay_top_designer_Files[".listFields"][] = "work_type";

$tdataDisplay_top_designer_Files[".hideMobileList"] = array();


$tdataDisplay_top_designer_Files[".viewFields"] = array();
$tdataDisplay_top_designer_Files[".viewFields"][] = "work_date";
$tdataDisplay_top_designer_Files[".viewFields"][] = "team_id";
$tdataDisplay_top_designer_Files[".viewFields"][] = "designer_name";
$tdataDisplay_top_designer_Files[".viewFields"][] = "total_images";
$tdataDisplay_top_designer_Files[".viewFields"][] = "eta_total";
$tdataDisplay_top_designer_Files[".viewFields"][] = "Total_time";
$tdataDisplay_top_designer_Files[".viewFields"][] = "idle_time";
$tdataDisplay_top_designer_Files[".viewFields"][] = "idle_p";
$tdataDisplay_top_designer_Files[".viewFields"][] = "efficiency";
$tdataDisplay_top_designer_Files[".viewFields"][] = "performance";
$tdataDisplay_top_designer_Files[".viewFields"][] = "work_type";

$tdataDisplay_top_designer_Files[".addFields"] = array();
$tdataDisplay_top_designer_Files[".addFields"][] = "work_date";
$tdataDisplay_top_designer_Files[".addFields"][] = "team_id";
$tdataDisplay_top_designer_Files[".addFields"][] = "designer_name";
$tdataDisplay_top_designer_Files[".addFields"][] = "efficiency";
$tdataDisplay_top_designer_Files[".addFields"][] = "work_type";

$tdataDisplay_top_designer_Files[".masterListFields"] = array();
$tdataDisplay_top_designer_Files[".masterListFields"][] = "work_date";
$tdataDisplay_top_designer_Files[".masterListFields"][] = "team_id";
$tdataDisplay_top_designer_Files[".masterListFields"][] = "designer_name";
$tdataDisplay_top_designer_Files[".masterListFields"][] = "total_images";
$tdataDisplay_top_designer_Files[".masterListFields"][] = "eta_total";
$tdataDisplay_top_designer_Files[".masterListFields"][] = "Total_time";
$tdataDisplay_top_designer_Files[".masterListFields"][] = "idle_time";
$tdataDisplay_top_designer_Files[".masterListFields"][] = "idle_p";
$tdataDisplay_top_designer_Files[".masterListFields"][] = "efficiency";
$tdataDisplay_top_designer_Files[".masterListFields"][] = "performance";
$tdataDisplay_top_designer_Files[".masterListFields"][] = "work_type";

$tdataDisplay_top_designer_Files[".inlineAddFields"] = array();
$tdataDisplay_top_designer_Files[".inlineAddFields"][] = "work_date";
$tdataDisplay_top_designer_Files[".inlineAddFields"][] = "team_id";
$tdataDisplay_top_designer_Files[".inlineAddFields"][] = "designer_name";
$tdataDisplay_top_designer_Files[".inlineAddFields"][] = "efficiency";
$tdataDisplay_top_designer_Files[".inlineAddFields"][] = "work_type";

$tdataDisplay_top_designer_Files[".editFields"] = array();
$tdataDisplay_top_designer_Files[".editFields"][] = "work_date";
$tdataDisplay_top_designer_Files[".editFields"][] = "team_id";
$tdataDisplay_top_designer_Files[".editFields"][] = "designer_name";
$tdataDisplay_top_designer_Files[".editFields"][] = "efficiency";
$tdataDisplay_top_designer_Files[".editFields"][] = "work_type";

$tdataDisplay_top_designer_Files[".inlineEditFields"] = array();
$tdataDisplay_top_designer_Files[".inlineEditFields"][] = "work_date";
$tdataDisplay_top_designer_Files[".inlineEditFields"][] = "team_id";
$tdataDisplay_top_designer_Files[".inlineEditFields"][] = "designer_name";
$tdataDisplay_top_designer_Files[".inlineEditFields"][] = "efficiency";
$tdataDisplay_top_designer_Files[".inlineEditFields"][] = "work_type";

$tdataDisplay_top_designer_Files[".exportFields"] = array();
$tdataDisplay_top_designer_Files[".exportFields"][] = "work_date";
$tdataDisplay_top_designer_Files[".exportFields"][] = "team_id";
$tdataDisplay_top_designer_Files[".exportFields"][] = "designer_name";
$tdataDisplay_top_designer_Files[".exportFields"][] = "total_images";
$tdataDisplay_top_designer_Files[".exportFields"][] = "eta_total";
$tdataDisplay_top_designer_Files[".exportFields"][] = "Total_time";
$tdataDisplay_top_designer_Files[".exportFields"][] = "idle_time";
$tdataDisplay_top_designer_Files[".exportFields"][] = "idle_p";
$tdataDisplay_top_designer_Files[".exportFields"][] = "efficiency";
$tdataDisplay_top_designer_Files[".exportFields"][] = "performance";
$tdataDisplay_top_designer_Files[".exportFields"][] = "work_type";

$tdataDisplay_top_designer_Files[".importFields"] = array();
$tdataDisplay_top_designer_Files[".importFields"][] = "work_date";
$tdataDisplay_top_designer_Files[".importFields"][] = "team_id";
$tdataDisplay_top_designer_Files[".importFields"][] = "designer_name";
$tdataDisplay_top_designer_Files[".importFields"][] = "total_images";
$tdataDisplay_top_designer_Files[".importFields"][] = "eta_total";
$tdataDisplay_top_designer_Files[".importFields"][] = "Total_time";
$tdataDisplay_top_designer_Files[".importFields"][] = "idle_time";
$tdataDisplay_top_designer_Files[".importFields"][] = "idle_p";
$tdataDisplay_top_designer_Files[".importFields"][] = "efficiency";
$tdataDisplay_top_designer_Files[".importFields"][] = "performance";
$tdataDisplay_top_designer_Files[".importFields"][] = "work_type";

$tdataDisplay_top_designer_Files[".printFields"] = array();
$tdataDisplay_top_designer_Files[".printFields"][] = "work_date";
$tdataDisplay_top_designer_Files[".printFields"][] = "team_id";
$tdataDisplay_top_designer_Files[".printFields"][] = "designer_name";
$tdataDisplay_top_designer_Files[".printFields"][] = "total_images";
$tdataDisplay_top_designer_Files[".printFields"][] = "eta_total";
$tdataDisplay_top_designer_Files[".printFields"][] = "Total_time";
$tdataDisplay_top_designer_Files[".printFields"][] = "idle_time";
$tdataDisplay_top_designer_Files[".printFields"][] = "idle_p";
$tdataDisplay_top_designer_Files[".printFields"][] = "efficiency";
$tdataDisplay_top_designer_Files[".printFields"][] = "performance";
$tdataDisplay_top_designer_Files[".printFields"][] = "work_type";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Display_top_designer_Files","work_date"); 
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
	
	
	
	

	

	
	$tdataDisplay_top_designer_Files["work_date"] = $fdata;
//	team_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team_id";
	$fdata["GoodName"] = "team_id";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Display_top_designer_Files","team_id"); 
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
	
	
	
	

	

	
	$tdataDisplay_top_designer_Files["team_id"] = $fdata;
//	designer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer_name";
	$fdata["GoodName"] = "designer_name";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Display_top_designer_Files","designer_name"); 
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
	
	
	
	

	

	
	$tdataDisplay_top_designer_Files["designer_name"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_top_designer_Files","total_images"); 
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
	
	
	
	

	

	
	$tdataDisplay_top_designer_Files["total_images"] = $fdata;
//	eta_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "eta_total";
	$fdata["GoodName"] = "eta_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_top_designer_Files","eta_total"); 
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
	
	
	
	

	

	
	$tdataDisplay_top_designer_Files["eta_total"] = $fdata;
//	Total_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Total_time";
	$fdata["GoodName"] = "Total_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_top_designer_Files","Total_time"); 
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
	
	
	
	

	

	
	$tdataDisplay_top_designer_Files["Total_time"] = $fdata;
//	idle_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "idle_time";
	$fdata["GoodName"] = "idle_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_top_designer_Files","idle_time"); 
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
	
	
	
	

	

	
	$tdataDisplay_top_designer_Files["idle_time"] = $fdata;
//	idle_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idle_p";
	$fdata["GoodName"] = "idle_p";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_top_designer_Files","idle_p"); 
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
	
	
	
	

	

	
	$tdataDisplay_top_designer_Files["idle_p"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_top_designer_Files","efficiency"); 
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
	
	
	
	

	

	
	$tdataDisplay_top_designer_Files["efficiency"] = $fdata;
//	performance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "performance";
	$fdata["GoodName"] = "performance";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_top_designer_Files","performance"); 
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

	

	
	$tdataDisplay_top_designer_Files["performance"] = $fdata;
//	work_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "work_type";
	$fdata["GoodName"] = "work_type";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Display_top_designer_Files","work_type"); 
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
	
	
	
	

	

	
	$tdataDisplay_top_designer_Files["work_type"] = $fdata;

	
$tables_data["Display_top_designer_Files"]=&$tdataDisplay_top_designer_Files;
$field_labels["Display_top_designer_Files"] = &$fieldLabelsDisplay_top_designer_Files;
$fieldToolTips["Display_top_designer_Files"] = &$fieldToolTipsDisplay_top_designer_Files;
$page_titles["Display_top_designer_Files"] = &$pageTitlesDisplay_top_designer_Files;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Display_top_designer_Files"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Display_top_designer_Files"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Display_top_designer_Files()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_date,  team_id,  designer_name,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  (IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time)))) AS idle_time,  (IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  ((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS performance,  work_type";
$proto0["m_strFrom"] = "FROM designer_report";
$proto0["m_strWhere"] = "user_group =7 AND (work_type =1 OR work_type =3)";
$proto0["m_strOrderBy"] = "ORDER BY work_date DESC, total_images                     DESC";
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
	"m_srcTableName" => "Display_top_designer_Files"
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
	"m_srcTableName" => "Display_top_designer_Files"
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
	"m_srcTableName" => "Display_top_designer_Files"
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
	"m_srcTableName" => "Display_top_designer_Files"
));

$proto13["m_sql"] = "work_date";
$proto13["m_srcTableName"] = "Display_top_designer_Files";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display_top_designer_Files"
));

$proto15["m_sql"] = "team_id";
$proto15["m_srcTableName"] = "Display_top_designer_Files";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display_top_designer_Files"
));

$proto17["m_sql"] = "designer_name";
$proto17["m_srcTableName"] = "Display_top_designer_Files";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$proto20=array();
$proto20["m_functiontype"] = "SQLF_SUM";
$proto20["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total_images_counted",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display_top_designer_Files"
));

$proto20["m_arguments"][]=$obj;
$proto20["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto20);

$proto19["m_sql"] = "SUM(total_images_counted)";
$proto19["m_srcTableName"] = "Display_top_designer_Files";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "total_images";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$proto23=array();
$proto23["m_functiontype"] = "SQLF_CUSTOM";
$proto23["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(estimated_time)"
));

$proto23["m_arguments"][]=$obj;
$proto23["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto23);

$proto22["m_sql"] = "SEC_TO_TIME(SUM(estimated_time))";
$proto22["m_srcTableName"] = "Display_top_designer_Files";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "eta_total";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$proto26=array();
$proto26["m_functiontype"] = "SQLF_CUSTOM";
$proto26["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(designer_time)"
));

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto26);

$proto25["m_sql"] = "SEC_TO_TIME(SUM(designer_time))";
$proto25["m_srcTableName"] = "Display_top_designer_Files";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "Total_time";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time))))"
));

$proto28["m_sql"] = "(IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time))))";
$proto28["m_srcTableName"] = "Display_top_designer_Files";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "idle_time";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100"
));

$proto30["m_sql"] = "(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100";
$proto30["m_srcTableName"] = "Display_top_designer_Files";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "idle_p";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((SUM(estimated_time))/(SUM(designer_time)))*100"
));

$proto32["m_sql"] = "((SUM(estimated_time))/(SUM(designer_time)))*100";
$proto32["m_srcTableName"] = "Display_top_designer_Files";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100"
));

$proto34["m_sql"] = "((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100";
$proto34["m_srcTableName"] = "Display_top_designer_Files";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "performance";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display_top_designer_Files"
));

$proto36["m_sql"] = "work_type";
$proto36["m_srcTableName"] = "Display_top_designer_Files";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "designer_report";
$proto39["m_srcTableName"] = "Display_top_designer_Files";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "report_id";
$proto39["m_columns"][] = "report_reference";
$proto39["m_columns"][] = "work_date";
$proto39["m_columns"][] = "designer_name";
$proto39["m_columns"][] = "team_id";
$proto39["m_columns"][] = "subdiv_id";
$proto39["m_columns"][] = "user_group";
$proto39["m_columns"][] = "pdf_name";
$proto39["m_columns"][] = "estimated_time";
$proto39["m_columns"][] = "designer_time";
$proto39["m_columns"][] = "qc_time";
$proto39["m_columns"][] = "efficiency";
$proto39["m_columns"][] = "total_images_counted";
$proto39["m_columns"][] = "comments";
$proto39["m_columns"][] = "work_type";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "designer_report";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "Display_top_designer_Files";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display_top_designer_Files"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display_top_designer_Files"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Display_top_designer_Files"
));

$proto46["m_column"]=$obj;
$proto46["m_bAsc"] = 0;
$proto46["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto46);

$proto0["m_orderby"][]=$obj;					
												$proto48=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "total_images                     "
));

$proto48["m_column"]=$obj;
$proto48["m_bAsc"] = 0;
$proto48["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto48);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Display_top_designer_Files";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Display_top_designer_Files = createSqlQuery_Display_top_designer_Files();


	
											
	
$tdataDisplay_top_designer_Files[".sqlquery"] = $queryData_Display_top_designer_Files;

$tableEvents["Display_top_designer_Files"] = new eventsBase;
$tdataDisplay_top_designer_Files[".hasEvents"] = false;

?>