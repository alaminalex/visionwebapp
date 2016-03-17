<?php
require_once(getabspath("classes/cipherer.php"));




$tdatagenerator_rex = array();	
	$tdatagenerator_rex[".truncateText"] = true;
	$tdatagenerator_rex[".NumberOfChars"] = 256; 
	$tdatagenerator_rex[".ShortName"] = "generator_rex";
	$tdatagenerator_rex[".OwnerID"] = "";
	$tdatagenerator_rex[".OriginalTable"] = "designer_report";

//	field labels
$fieldLabelsgenerator_rex = array();
$fieldToolTipsgenerator_rex = array();
$pageTitlesgenerator_rex = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgenerator_rex["English"] = array();
	$fieldToolTipsgenerator_rex["English"] = array();
	$pageTitlesgenerator_rex["English"] = array();
	$fieldLabelsgenerator_rex["English"]["work_date"] = "Work Date";
	$fieldToolTipsgenerator_rex["English"]["work_date"] = "";
	$fieldLabelsgenerator_rex["English"]["designer_name"] = "Designer Name";
	$fieldToolTipsgenerator_rex["English"]["designer_name"] = "";
	$fieldLabelsgenerator_rex["English"]["work_type"] = "Work Type";
	$fieldToolTipsgenerator_rex["English"]["work_type"] = "";
	$fieldLabelsgenerator_rex["English"]["Total_time"] = "Total Time";
	$fieldToolTipsgenerator_rex["English"]["Total_time"] = "";
	$fieldLabelsgenerator_rex["English"]["total_images"] = "Total Images";
	$fieldToolTipsgenerator_rex["English"]["total_images"] = "";
	$fieldLabelsgenerator_rex["English"]["idle_time"] = "Idle Time";
	$fieldToolTipsgenerator_rex["English"]["idle_time"] = "";
	$fieldLabelsgenerator_rex["English"]["idle_p"] = "Idle P";
	$fieldToolTipsgenerator_rex["English"]["idle_p"] = "";
	$fieldLabelsgenerator_rex["English"]["performence"] = "Performence";
	$fieldToolTipsgenerator_rex["English"]["performence"] = "";
	$fieldLabelsgenerator_rex["English"]["eta_total"] = "Eta Total";
	$fieldToolTipsgenerator_rex["English"]["eta_total"] = "";
	$fieldLabelsgenerator_rex["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsgenerator_rex["English"]["efficiency"] = "";
	$fieldLabelsgenerator_rex["English"]["team_id"] = "Team Id";
	$fieldToolTipsgenerator_rex["English"]["team_id"] = "";
	if (count($fieldToolTipsgenerator_rex["English"]))
		$tdatagenerator_rex[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsgenerator_rex[""] = array();
	$fieldToolTipsgenerator_rex[""] = array();
	$pageTitlesgenerator_rex[""] = array();
	if (count($fieldToolTipsgenerator_rex[""]))
		$tdatagenerator_rex[".isUseToolTips"] = true;
}
	
	
	$tdatagenerator_rex[".NCSearch"] = true;



$tdatagenerator_rex[".shortTableName"] = "generator_rex";
$tdatagenerator_rex[".nSecOptions"] = 0;
$tdatagenerator_rex[".recsPerRowList"] = 1;
$tdatagenerator_rex[".recsPerRowPrint"] = 1;
$tdatagenerator_rex[".mainTableOwnerID"] = "";
$tdatagenerator_rex[".moveNext"] = 1;
$tdatagenerator_rex[".entityType"] = 2;

$tdatagenerator_rex[".strOriginalTableName"] = "designer_report";




$tdatagenerator_rex[".showAddInPopup"] = false;

$tdatagenerator_rex[".showEditInPopup"] = false;

$tdatagenerator_rex[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagenerator_rex[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagenerator_rex[".fieldsForRegister"] = array();

$tdatagenerator_rex[".listAjax"] = false;

	$tdatagenerator_rex[".audit"] = false;

	$tdatagenerator_rex[".locking"] = false;


$tdatagenerator_rex[".add"] = true;
$tdatagenerator_rex[".afterAddAction"] = 0;
$tdatagenerator_rex[".closePopupAfterAdd"] = 1;
$tdatagenerator_rex[".afterAddActionDetTable"] = "";

$tdatagenerator_rex[".list"] = true;

$tdatagenerator_rex[".inlineAdd"] = true;


$tdatagenerator_rex[".exportTo"] = true;

$tdatagenerator_rex[".printFriendly"] = true;


$tdatagenerator_rex[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatagenerator_rex[".searchSaving"] = false;
//

$tdatagenerator_rex[".showSearchPanel"] = true;
		$tdatagenerator_rex[".flexibleSearch"] = true;		

if (isMobile())
	$tdatagenerator_rex[".isUseAjaxSuggest"] = false;
else 
	$tdatagenerator_rex[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdatagenerator_rex[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagenerator_rex[".isUseTimeForSearch"] = false;





$tdatagenerator_rex[".allSearchFields"] = array();
$tdatagenerator_rex[".filterFields"] = array();
$tdatagenerator_rex[".requiredSearchFields"] = array();

$tdatagenerator_rex[".allSearchFields"][] = "team_id";
	

$tdatagenerator_rex[".googleLikeFields"] = array();
$tdatagenerator_rex[".googleLikeFields"][] = "work_date";
$tdatagenerator_rex[".googleLikeFields"][] = "team_id";
$tdatagenerator_rex[".googleLikeFields"][] = "designer_name";
$tdatagenerator_rex[".googleLikeFields"][] = "total_images";
$tdatagenerator_rex[".googleLikeFields"][] = "eta_total";
$tdatagenerator_rex[".googleLikeFields"][] = "Total_time";
$tdatagenerator_rex[".googleLikeFields"][] = "idle_time";
$tdatagenerator_rex[".googleLikeFields"][] = "idle_p";
$tdatagenerator_rex[".googleLikeFields"][] = "efficiency";
$tdatagenerator_rex[".googleLikeFields"][] = "performence";
$tdatagenerator_rex[".googleLikeFields"][] = "work_type";


$tdatagenerator_rex[".advSearchFields"] = array();
$tdatagenerator_rex[".advSearchFields"][] = "work_date";
$tdatagenerator_rex[".advSearchFields"][] = "team_id";
$tdatagenerator_rex[".advSearchFields"][] = "designer_name";
$tdatagenerator_rex[".advSearchFields"][] = "total_images";
$tdatagenerator_rex[".advSearchFields"][] = "eta_total";
$tdatagenerator_rex[".advSearchFields"][] = "Total_time";
$tdatagenerator_rex[".advSearchFields"][] = "idle_time";
$tdatagenerator_rex[".advSearchFields"][] = "idle_p";
$tdatagenerator_rex[".advSearchFields"][] = "efficiency";
$tdatagenerator_rex[".advSearchFields"][] = "performence";
$tdatagenerator_rex[".advSearchFields"][] = "work_type";

$tdatagenerator_rex[".tableType"] = "report";

$tdatagenerator_rex[".printerPageOrientation"] = 0;
$tdatagenerator_rex[".nPrinterPageScale"] = 100;

$tdatagenerator_rex[".nPrinterSplitRecords"] = 40;

$tdatagenerator_rex[".nPrinterPDFSplitRecords"] = 40;



$tdatagenerator_rex[".geocodingEnabled"] = false;

//report settings
$tdatagenerator_rex[".printReportLayout"] = 3;	

$tdatagenerator_rex[".reportPrintPartitionType"] = 0;	
$tdatagenerator_rex[".reportPrintGroupsPerPage"] = 3;	
	$tdatagenerator_rex[".lowGroup"] = 1;



$tdatagenerator_rex[".reportGroupFields"] = true;
$tdatagenerator_rex[".pageSize"] = 1;
$tdatagenerator_rex[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "work_date";
	$rgroupField['groupInterval'] = 5;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdatagenerator_rex[".reportGroupFieldsData"] = $reportGroupFields;


$tdatagenerator_rex[".isExistTotalFields"] = true;




$tdatagenerator_rex[".repShowDet"] = true;

$tdatagenerator_rex[".reportLayout"] = 3;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC, ((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100                            DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagenerator_rex[".strOrderBy"] = $tstrOrderBy;

$tdatagenerator_rex[".orderindexes"] = array();
$tdatagenerator_rex[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "work_date");
$tdatagenerator_rex[".orderindexes"][] = array(10, (0 ? "ASC" : "DESC"), "((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100                            ");

$tdatagenerator_rex[".sqlHead"] = "SELECT work_date,  team_id,  designer_name,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  (IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time)))) AS idle_time,  (IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  ((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS performence,  work_type";
$tdatagenerator_rex[".sqlFrom"] = "FROM designer_report";
$tdatagenerator_rex[".sqlWhereExpr"] = "";
$tdatagenerator_rex[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagenerator_rex[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagenerator_rex[".arrGroupsPerPage"] = $arrGPP;

$tdatagenerator_rex[".highlightSearchResults"] = true;

$tableKeysgenerator_rex = array();
$tdatagenerator_rex[".Keys"] = $tableKeysgenerator_rex;

$tdatagenerator_rex[".listFields"] = array();
$tdatagenerator_rex[".listFields"][] = "work_date";
$tdatagenerator_rex[".listFields"][] = "team_id";
$tdatagenerator_rex[".listFields"][] = "designer_name";
$tdatagenerator_rex[".listFields"][] = "total_images";
$tdatagenerator_rex[".listFields"][] = "eta_total";
$tdatagenerator_rex[".listFields"][] = "Total_time";
$tdatagenerator_rex[".listFields"][] = "idle_time";
$tdatagenerator_rex[".listFields"][] = "idle_p";
$tdatagenerator_rex[".listFields"][] = "efficiency";
$tdatagenerator_rex[".listFields"][] = "performence";
$tdatagenerator_rex[".listFields"][] = "work_type";

$tdatagenerator_rex[".hideMobileList"] = array();


$tdatagenerator_rex[".viewFields"] = array();
$tdatagenerator_rex[".viewFields"][] = "work_date";
$tdatagenerator_rex[".viewFields"][] = "team_id";
$tdatagenerator_rex[".viewFields"][] = "designer_name";
$tdatagenerator_rex[".viewFields"][] = "total_images";
$tdatagenerator_rex[".viewFields"][] = "eta_total";
$tdatagenerator_rex[".viewFields"][] = "Total_time";
$tdatagenerator_rex[".viewFields"][] = "idle_time";
$tdatagenerator_rex[".viewFields"][] = "idle_p";
$tdatagenerator_rex[".viewFields"][] = "efficiency";
$tdatagenerator_rex[".viewFields"][] = "performence";
$tdatagenerator_rex[".viewFields"][] = "work_type";

$tdatagenerator_rex[".addFields"] = array();
$tdatagenerator_rex[".addFields"][] = "work_date";
$tdatagenerator_rex[".addFields"][] = "team_id";
$tdatagenerator_rex[".addFields"][] = "designer_name";
$tdatagenerator_rex[".addFields"][] = "efficiency";
$tdatagenerator_rex[".addFields"][] = "work_type";

$tdatagenerator_rex[".masterListFields"] = array();
$tdatagenerator_rex[".masterListFields"][] = "work_date";
$tdatagenerator_rex[".masterListFields"][] = "team_id";
$tdatagenerator_rex[".masterListFields"][] = "designer_name";
$tdatagenerator_rex[".masterListFields"][] = "total_images";
$tdatagenerator_rex[".masterListFields"][] = "eta_total";
$tdatagenerator_rex[".masterListFields"][] = "Total_time";
$tdatagenerator_rex[".masterListFields"][] = "idle_time";
$tdatagenerator_rex[".masterListFields"][] = "idle_p";
$tdatagenerator_rex[".masterListFields"][] = "efficiency";
$tdatagenerator_rex[".masterListFields"][] = "performence";
$tdatagenerator_rex[".masterListFields"][] = "work_type";

$tdatagenerator_rex[".inlineAddFields"] = array();
$tdatagenerator_rex[".inlineAddFields"][] = "work_date";
$tdatagenerator_rex[".inlineAddFields"][] = "team_id";
$tdatagenerator_rex[".inlineAddFields"][] = "designer_name";
$tdatagenerator_rex[".inlineAddFields"][] = "efficiency";
$tdatagenerator_rex[".inlineAddFields"][] = "work_type";

$tdatagenerator_rex[".editFields"] = array();
$tdatagenerator_rex[".editFields"][] = "work_date";
$tdatagenerator_rex[".editFields"][] = "team_id";
$tdatagenerator_rex[".editFields"][] = "designer_name";
$tdatagenerator_rex[".editFields"][] = "efficiency";
$tdatagenerator_rex[".editFields"][] = "work_type";

$tdatagenerator_rex[".inlineEditFields"] = array();
$tdatagenerator_rex[".inlineEditFields"][] = "work_date";
$tdatagenerator_rex[".inlineEditFields"][] = "team_id";
$tdatagenerator_rex[".inlineEditFields"][] = "designer_name";
$tdatagenerator_rex[".inlineEditFields"][] = "efficiency";
$tdatagenerator_rex[".inlineEditFields"][] = "work_type";

$tdatagenerator_rex[".exportFields"] = array();
$tdatagenerator_rex[".exportFields"][] = "work_date";
$tdatagenerator_rex[".exportFields"][] = "team_id";
$tdatagenerator_rex[".exportFields"][] = "designer_name";
$tdatagenerator_rex[".exportFields"][] = "total_images";
$tdatagenerator_rex[".exportFields"][] = "eta_total";
$tdatagenerator_rex[".exportFields"][] = "Total_time";
$tdatagenerator_rex[".exportFields"][] = "idle_time";
$tdatagenerator_rex[".exportFields"][] = "idle_p";
$tdatagenerator_rex[".exportFields"][] = "efficiency";
$tdatagenerator_rex[".exportFields"][] = "performence";
$tdatagenerator_rex[".exportFields"][] = "work_type";

$tdatagenerator_rex[".importFields"] = array();
$tdatagenerator_rex[".importFields"][] = "work_date";
$tdatagenerator_rex[".importFields"][] = "team_id";
$tdatagenerator_rex[".importFields"][] = "designer_name";
$tdatagenerator_rex[".importFields"][] = "total_images";
$tdatagenerator_rex[".importFields"][] = "eta_total";
$tdatagenerator_rex[".importFields"][] = "Total_time";
$tdatagenerator_rex[".importFields"][] = "idle_time";
$tdatagenerator_rex[".importFields"][] = "idle_p";
$tdatagenerator_rex[".importFields"][] = "efficiency";
$tdatagenerator_rex[".importFields"][] = "performence";
$tdatagenerator_rex[".importFields"][] = "work_type";

$tdatagenerator_rex[".printFields"] = array();
$tdatagenerator_rex[".printFields"][] = "work_date";
$tdatagenerator_rex[".printFields"][] = "team_id";
$tdatagenerator_rex[".printFields"][] = "designer_name";
$tdatagenerator_rex[".printFields"][] = "total_images";
$tdatagenerator_rex[".printFields"][] = "eta_total";
$tdatagenerator_rex[".printFields"][] = "Total_time";
$tdatagenerator_rex[".printFields"][] = "idle_time";
$tdatagenerator_rex[".printFields"][] = "idle_p";
$tdatagenerator_rex[".printFields"][] = "efficiency";
$tdatagenerator_rex[".printFields"][] = "performence";
$tdatagenerator_rex[".printFields"][] = "work_type";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("generator_rex","work_date"); 
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
	
	
	
	

	

	
	$tdatagenerator_rex["work_date"] = $fdata;
//	team_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team_id";
	$fdata["GoodName"] = "team_id";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("generator_rex","team_id"); 
	$fdata["FieldType"] = 200;
	
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatagenerator_rex["team_id"] = $fdata;
//	designer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer_name";
	$fdata["GoodName"] = "designer_name";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("generator_rex","designer_name"); 
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
	
	
	
	

	

	
	$tdatagenerator_rex["designer_name"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_rex","total_images"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
				$fdata["isTotalMax"] = true;	
		$fdata["isTotalSum"] = true;	
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
	
	
	
	

	

	
	$tdatagenerator_rex["total_images"] = $fdata;
//	eta_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "eta_total";
	$fdata["GoodName"] = "eta_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_rex","eta_total"); 
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
	
	
	
	

	

	
	$tdatagenerator_rex["eta_total"] = $fdata;
//	Total_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Total_time";
	$fdata["GoodName"] = "Total_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_rex","Total_time"); 
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
	
	
	
	

	

	
	$tdatagenerator_rex["Total_time"] = $fdata;
//	idle_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "idle_time";
	$fdata["GoodName"] = "idle_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_rex","idle_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
		$fdata["isTotalMin"] = true;
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
	
	
	
	

	

	
	$tdatagenerator_rex["idle_time"] = $fdata;
//	idle_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idle_p";
	$fdata["GoodName"] = "idle_p";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_rex","idle_p"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
		$fdata["isTotalMin"] = true;
				// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idle_p"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100";
	
		
		
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
	
	
	
	

	

	
	$tdatagenerator_rex["idle_p"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_rex","efficiency"); 
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
	
	
	
	

	

	
	$tdatagenerator_rex["efficiency"] = $fdata;
//	performence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "performence";
	$fdata["GoodName"] = "performence";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("generator_rex","performence"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "performence"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100";
	
		
		
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
	
	
	
	

	

	
	$tdatagenerator_rex["performence"] = $fdata;
//	work_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "work_type";
	$fdata["GoodName"] = "work_type";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("generator_rex","work_type"); 
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
	
	
	
	

	

	
	$tdatagenerator_rex["work_type"] = $fdata;

	
$tables_data["generator_rex"]=&$tdatagenerator_rex;
$field_labels["generator_rex"] = &$fieldLabelsgenerator_rex;
$fieldToolTips["generator_rex"] = &$fieldToolTipsgenerator_rex;
$page_titles["generator_rex"] = &$pageTitlesgenerator_rex;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["generator_rex"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["generator_rex"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_generator_rex()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_date,  team_id,  designer_name,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  (IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time)))) AS idle_time,  (IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  ((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS performence,  work_type";
$proto0["m_strFrom"] = "FROM designer_report";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY work_date DESC, ((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100                            DESC";
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
	"m_srcTableName" => "generator_rex"
));

$proto5["m_sql"] = "work_date";
$proto5["m_srcTableName"] = "generator_rex";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "generator_rex"
));

$proto7["m_sql"] = "team_id";
$proto7["m_srcTableName"] = "generator_rex";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "generator_rex"
));

$proto9["m_sql"] = "designer_name";
$proto9["m_srcTableName"] = "generator_rex";
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
	"m_srcTableName" => "generator_rex"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto12);

$proto11["m_sql"] = "SUM(total_images_counted)";
$proto11["m_srcTableName"] = "generator_rex";
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
$proto14["m_srcTableName"] = "generator_rex";
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
$proto17["m_srcTableName"] = "generator_rex";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Total_time";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time))))"
));

$proto20["m_sql"] = "(IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time))))";
$proto20["m_srcTableName"] = "generator_rex";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "idle_time";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100"
));

$proto22["m_sql"] = "(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100";
$proto22["m_srcTableName"] = "generator_rex";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "idle_p";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((SUM(estimated_time))/(SUM(designer_time)))*100"
));

$proto24["m_sql"] = "((SUM(estimated_time))/(SUM(designer_time)))*100";
$proto24["m_srcTableName"] = "generator_rex";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100"
));

$proto26["m_sql"] = "((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100";
$proto26["m_srcTableName"] = "generator_rex";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "performence";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "generator_rex"
));

$proto28["m_sql"] = "work_type";
$proto28["m_srcTableName"] = "generator_rex";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "designer_report";
$proto31["m_srcTableName"] = "generator_rex";
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
$proto31["m_columns"][] = "qc_time";
$proto31["m_columns"][] = "efficiency";
$proto31["m_columns"][] = "total_images_counted";
$proto31["m_columns"][] = "comments";
$proto31["m_columns"][] = "work_type";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "designer_report";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "generator_rex";
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
	"m_srcTableName" => "generator_rex"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "generator_rex"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "generator_rex"
));

$proto38["m_column"]=$obj;
$proto38["m_bAsc"] = 0;
$proto38["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto38);

$proto0["m_orderby"][]=$obj;					
												$proto40=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100                            "
));

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 0;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="generator_rex";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_generator_rex = createSqlQuery_generator_rex();


	
											
	
$tdatagenerator_rex[".sqlquery"] = $queryData_generator_rex;

$tableEvents["generator_rex"] = new eventsBase;
$tdatagenerator_rex[".hasEvents"] = false;

?>