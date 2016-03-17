<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDaily_Report_Team = array();	
	$tdataDaily_Report_Team[".truncateText"] = true;
	$tdataDaily_Report_Team[".NumberOfChars"] = 256; 
	$tdataDaily_Report_Team[".ShortName"] = "Daily_Report_Team";
	$tdataDaily_Report_Team[".OwnerID"] = "";
	$tdataDaily_Report_Team[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsDaily_Report_Team = array();
$fieldToolTipsDaily_Report_Team = array();
$pageTitlesDaily_Report_Team = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDaily_Report_Team["English"] = array();
	$fieldToolTipsDaily_Report_Team["English"] = array();
	$pageTitlesDaily_Report_Team["English"] = array();
	$fieldLabelsDaily_Report_Team["English"]["eta_total"] = "ETA Total";
	$fieldToolTipsDaily_Report_Team["English"]["eta_total"] = "";
	$fieldLabelsDaily_Report_Team["English"]["idle_time"] = "Idle Time";
	$fieldToolTipsDaily_Report_Team["English"]["idle_time"] = "";
	$fieldLabelsDaily_Report_Team["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsDaily_Report_Team["English"]["efficiency"] = "";
	$fieldLabelsDaily_Report_Team["English"]["work_date"] = "Work Date";
	$fieldToolTipsDaily_Report_Team["English"]["work_date"] = "";
	$fieldLabelsDaily_Report_Team["English"]["team_id"] = "Team Id";
	$fieldToolTipsDaily_Report_Team["English"]["team_id"] = "";
	$fieldLabelsDaily_Report_Team["English"]["designer_present"] = "Designer Present";
	$fieldToolTipsDaily_Report_Team["English"]["designer_present"] = "";
	$fieldLabelsDaily_Report_Team["English"]["total_images"] = "Total Images";
	$fieldToolTipsDaily_Report_Team["English"]["total_images"] = "";
	$fieldLabelsDaily_Report_Team["English"]["Total_time"] = "Total Time";
	$fieldToolTipsDaily_Report_Team["English"]["Total_time"] = "";
	$fieldLabelsDaily_Report_Team["English"]["idle_p"] = "Idle P";
	$fieldToolTipsDaily_Report_Team["English"]["idle_p"] = "";
	$fieldLabelsDaily_Report_Team["English"]["performence"] = "Performence";
	$fieldToolTipsDaily_Report_Team["English"]["performence"] = "";
	$fieldLabelsDaily_Report_Team["English"]["work_type"] = "Work Type";
	$fieldToolTipsDaily_Report_Team["English"]["work_type"] = "";
	if (count($fieldToolTipsDaily_Report_Team["English"]))
		$tdataDaily_Report_Team[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDaily_Report_Team[""] = array();
	$fieldToolTipsDaily_Report_Team[""] = array();
	$pageTitlesDaily_Report_Team[""] = array();
	if (count($fieldToolTipsDaily_Report_Team[""]))
		$tdataDaily_Report_Team[".isUseToolTips"] = true;
}
	
	
	$tdataDaily_Report_Team[".NCSearch"] = true;



$tdataDaily_Report_Team[".shortTableName"] = "Daily_Report_Team";
$tdataDaily_Report_Team[".nSecOptions"] = 0;
$tdataDaily_Report_Team[".recsPerRowList"] = 1;
$tdataDaily_Report_Team[".recsPerRowPrint"] = 1;
$tdataDaily_Report_Team[".mainTableOwnerID"] = "";
$tdataDaily_Report_Team[".moveNext"] = 1;
$tdataDaily_Report_Team[".entityType"] = 2;

$tdataDaily_Report_Team[".strOriginalTableName"] = "jobfile";




$tdataDaily_Report_Team[".showAddInPopup"] = false;

$tdataDaily_Report_Team[".showEditInPopup"] = false;

$tdataDaily_Report_Team[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDaily_Report_Team[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDaily_Report_Team[".fieldsForRegister"] = array();

$tdataDaily_Report_Team[".listAjax"] = false;

	$tdataDaily_Report_Team[".audit"] = false;

	$tdataDaily_Report_Team[".locking"] = false;


$tdataDaily_Report_Team[".add"] = true;
$tdataDaily_Report_Team[".afterAddAction"] = 0;
$tdataDaily_Report_Team[".closePopupAfterAdd"] = 1;
$tdataDaily_Report_Team[".afterAddActionDetTable"] = "";

$tdataDaily_Report_Team[".list"] = true;

$tdataDaily_Report_Team[".inlineAdd"] = true;


$tdataDaily_Report_Team[".exportTo"] = true;

$tdataDaily_Report_Team[".printFriendly"] = true;


$tdataDaily_Report_Team[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDaily_Report_Team[".searchSaving"] = false;
//

$tdataDaily_Report_Team[".showSearchPanel"] = true;
		$tdataDaily_Report_Team[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDaily_Report_Team[".isUseAjaxSuggest"] = false;
else 
	$tdataDaily_Report_Team[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDaily_Report_Team[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDaily_Report_Team[".isUseTimeForSearch"] = false;





$tdataDaily_Report_Team[".allSearchFields"] = array();
$tdataDaily_Report_Team[".filterFields"] = array();
$tdataDaily_Report_Team[".requiredSearchFields"] = array();

$tdataDaily_Report_Team[".allSearchFields"][] = "work_date";
	$tdataDaily_Report_Team[".allSearchFields"][] = "team_id";
	$tdataDaily_Report_Team[".allSearchFields"][] = "designer_present";
	$tdataDaily_Report_Team[".allSearchFields"][] = "total_images";
	$tdataDaily_Report_Team[".allSearchFields"][] = "eta_total";
	$tdataDaily_Report_Team[".allSearchFields"][] = "Total_time";
	$tdataDaily_Report_Team[".allSearchFields"][] = "idle_time";
	$tdataDaily_Report_Team[".allSearchFields"][] = "idle_p";
	$tdataDaily_Report_Team[".allSearchFields"][] = "efficiency";
	$tdataDaily_Report_Team[".allSearchFields"][] = "performence";
	$tdataDaily_Report_Team[".allSearchFields"][] = "work_type";
	

$tdataDaily_Report_Team[".googleLikeFields"] = array();
$tdataDaily_Report_Team[".googleLikeFields"][] = "work_date";
$tdataDaily_Report_Team[".googleLikeFields"][] = "team_id";
$tdataDaily_Report_Team[".googleLikeFields"][] = "designer_present";
$tdataDaily_Report_Team[".googleLikeFields"][] = "total_images";
$tdataDaily_Report_Team[".googleLikeFields"][] = "eta_total";
$tdataDaily_Report_Team[".googleLikeFields"][] = "Total_time";
$tdataDaily_Report_Team[".googleLikeFields"][] = "idle_time";
$tdataDaily_Report_Team[".googleLikeFields"][] = "idle_p";
$tdataDaily_Report_Team[".googleLikeFields"][] = "efficiency";
$tdataDaily_Report_Team[".googleLikeFields"][] = "performence";
$tdataDaily_Report_Team[".googleLikeFields"][] = "work_type";


$tdataDaily_Report_Team[".advSearchFields"] = array();
$tdataDaily_Report_Team[".advSearchFields"][] = "work_date";
$tdataDaily_Report_Team[".advSearchFields"][] = "team_id";
$tdataDaily_Report_Team[".advSearchFields"][] = "designer_present";
$tdataDaily_Report_Team[".advSearchFields"][] = "total_images";
$tdataDaily_Report_Team[".advSearchFields"][] = "eta_total";
$tdataDaily_Report_Team[".advSearchFields"][] = "Total_time";
$tdataDaily_Report_Team[".advSearchFields"][] = "idle_time";
$tdataDaily_Report_Team[".advSearchFields"][] = "idle_p";
$tdataDaily_Report_Team[".advSearchFields"][] = "efficiency";
$tdataDaily_Report_Team[".advSearchFields"][] = "performence";
$tdataDaily_Report_Team[".advSearchFields"][] = "work_type";

$tdataDaily_Report_Team[".tableType"] = "report";

$tdataDaily_Report_Team[".printerPageOrientation"] = 0;
$tdataDaily_Report_Team[".nPrinterPageScale"] = 100;

$tdataDaily_Report_Team[".nPrinterSplitRecords"] = 40;

$tdataDaily_Report_Team[".nPrinterPDFSplitRecords"] = 40;



$tdataDaily_Report_Team[".geocodingEnabled"] = false;

//report settings

$tdataDaily_Report_Team[".reportPrintPartitionType"] = 0;	
$tdataDaily_Report_Team[".reportPrintGroupsPerPage"] = 3;	
	$tdataDaily_Report_Team[".lowGroup"] = 2;



$tdataDaily_Report_Team[".reportGroupFields"] = true;
$tdataDaily_Report_Team[".pageSize"] = 1;
$tdataDaily_Report_Team[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "work_date";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "team_id";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataDaily_Report_Team[".reportGroupFieldsData"] = $reportGroupFields;




$tdataDaily_Report_Team[".reportPageSummary"] = true;


$tdataDaily_Report_Team[".repShowDet"] = true;

$tdataDaily_Report_Team[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC, team_id, ((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100                    DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDaily_Report_Team[".strOrderBy"] = $tstrOrderBy;

$tdataDaily_Report_Team[".orderindexes"] = array();
$tdataDaily_Report_Team[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "work_date");
$tdataDaily_Report_Team[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "team_id");
$tdataDaily_Report_Team[".orderindexes"][] = array(10, (0 ? "ASC" : "DESC"), "((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100                    ");

$tdataDaily_Report_Team[".sqlHead"] = "SELECT work_date,  team_id,  COUNT(DISTINCT `designer_name`) AS designer_present,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  (IF (((27000 * COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,SEC_TO_TIME((43200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time)),SEC_TO_TIME((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time)))) AS idle_time,  (IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`))))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  ((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS performence,  work_type";
$tdataDaily_Report_Team[".sqlFrom"] = "FROM designer_report";
$tdataDaily_Report_Team[".sqlWhereExpr"] = "";
$tdataDaily_Report_Team[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDaily_Report_Team[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDaily_Report_Team[".arrGroupsPerPage"] = $arrGPP;

$tdataDaily_Report_Team[".highlightSearchResults"] = true;

$tableKeysDaily_Report_Team = array();
$tdataDaily_Report_Team[".Keys"] = $tableKeysDaily_Report_Team;

$tdataDaily_Report_Team[".listFields"] = array();
$tdataDaily_Report_Team[".listFields"][] = "work_date";
$tdataDaily_Report_Team[".listFields"][] = "team_id";
$tdataDaily_Report_Team[".listFields"][] = "designer_present";
$tdataDaily_Report_Team[".listFields"][] = "total_images";
$tdataDaily_Report_Team[".listFields"][] = "eta_total";
$tdataDaily_Report_Team[".listFields"][] = "Total_time";
$tdataDaily_Report_Team[".listFields"][] = "idle_time";
$tdataDaily_Report_Team[".listFields"][] = "idle_p";
$tdataDaily_Report_Team[".listFields"][] = "efficiency";
$tdataDaily_Report_Team[".listFields"][] = "performence";
$tdataDaily_Report_Team[".listFields"][] = "work_type";

$tdataDaily_Report_Team[".hideMobileList"] = array();


$tdataDaily_Report_Team[".viewFields"] = array();
$tdataDaily_Report_Team[".viewFields"][] = "work_date";
$tdataDaily_Report_Team[".viewFields"][] = "team_id";
$tdataDaily_Report_Team[".viewFields"][] = "designer_present";
$tdataDaily_Report_Team[".viewFields"][] = "total_images";
$tdataDaily_Report_Team[".viewFields"][] = "eta_total";
$tdataDaily_Report_Team[".viewFields"][] = "Total_time";
$tdataDaily_Report_Team[".viewFields"][] = "idle_time";
$tdataDaily_Report_Team[".viewFields"][] = "idle_p";
$tdataDaily_Report_Team[".viewFields"][] = "efficiency";
$tdataDaily_Report_Team[".viewFields"][] = "performence";
$tdataDaily_Report_Team[".viewFields"][] = "work_type";

$tdataDaily_Report_Team[".addFields"] = array();

$tdataDaily_Report_Team[".masterListFields"] = array();
$tdataDaily_Report_Team[".masterListFields"][] = "work_date";
$tdataDaily_Report_Team[".masterListFields"][] = "team_id";
$tdataDaily_Report_Team[".masterListFields"][] = "designer_present";
$tdataDaily_Report_Team[".masterListFields"][] = "total_images";
$tdataDaily_Report_Team[".masterListFields"][] = "eta_total";
$tdataDaily_Report_Team[".masterListFields"][] = "Total_time";
$tdataDaily_Report_Team[".masterListFields"][] = "idle_time";
$tdataDaily_Report_Team[".masterListFields"][] = "idle_p";
$tdataDaily_Report_Team[".masterListFields"][] = "efficiency";
$tdataDaily_Report_Team[".masterListFields"][] = "performence";
$tdataDaily_Report_Team[".masterListFields"][] = "work_type";

$tdataDaily_Report_Team[".inlineAddFields"] = array();

$tdataDaily_Report_Team[".editFields"] = array();

$tdataDaily_Report_Team[".inlineEditFields"] = array();

$tdataDaily_Report_Team[".exportFields"] = array();
$tdataDaily_Report_Team[".exportFields"][] = "work_date";
$tdataDaily_Report_Team[".exportFields"][] = "team_id";
$tdataDaily_Report_Team[".exportFields"][] = "designer_present";
$tdataDaily_Report_Team[".exportFields"][] = "total_images";
$tdataDaily_Report_Team[".exportFields"][] = "eta_total";
$tdataDaily_Report_Team[".exportFields"][] = "Total_time";
$tdataDaily_Report_Team[".exportFields"][] = "idle_time";
$tdataDaily_Report_Team[".exportFields"][] = "idle_p";
$tdataDaily_Report_Team[".exportFields"][] = "efficiency";
$tdataDaily_Report_Team[".exportFields"][] = "performence";
$tdataDaily_Report_Team[".exportFields"][] = "work_type";

$tdataDaily_Report_Team[".importFields"] = array();
$tdataDaily_Report_Team[".importFields"][] = "work_date";
$tdataDaily_Report_Team[".importFields"][] = "team_id";
$tdataDaily_Report_Team[".importFields"][] = "designer_present";
$tdataDaily_Report_Team[".importFields"][] = "total_images";
$tdataDaily_Report_Team[".importFields"][] = "eta_total";
$tdataDaily_Report_Team[".importFields"][] = "Total_time";
$tdataDaily_Report_Team[".importFields"][] = "idle_time";
$tdataDaily_Report_Team[".importFields"][] = "idle_p";
$tdataDaily_Report_Team[".importFields"][] = "efficiency";
$tdataDaily_Report_Team[".importFields"][] = "performence";
$tdataDaily_Report_Team[".importFields"][] = "work_type";

$tdataDaily_Report_Team[".printFields"] = array();
$tdataDaily_Report_Team[".printFields"][] = "work_date";
$tdataDaily_Report_Team[".printFields"][] = "team_id";
$tdataDaily_Report_Team[".printFields"][] = "designer_present";
$tdataDaily_Report_Team[".printFields"][] = "total_images";
$tdataDaily_Report_Team[".printFields"][] = "eta_total";
$tdataDaily_Report_Team[".printFields"][] = "Total_time";
$tdataDaily_Report_Team[".printFields"][] = "idle_time";
$tdataDaily_Report_Team[".printFields"][] = "idle_p";
$tdataDaily_Report_Team[".printFields"][] = "efficiency";
$tdataDaily_Report_Team[".printFields"][] = "performence";
$tdataDaily_Report_Team[".printFields"][] = "work_type";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Team","work_date"); 
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

	

	
	$tdataDaily_Report_Team["work_date"] = $fdata;
//	team_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team_id";
	$fdata["GoodName"] = "team_id";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Team","team_id"); 
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

	

	
	$tdataDaily_Report_Team["team_id"] = $fdata;
//	designer_present
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer_present";
	$fdata["GoodName"] = "designer_present";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Team","designer_present"); 
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

	

	
	$tdataDaily_Report_Team["designer_present"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Team","total_images"); 
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

	

	
	$tdataDaily_Report_Team["total_images"] = $fdata;
//	eta_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "eta_total";
	$fdata["GoodName"] = "eta_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Team","eta_total"); 
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDaily_Report_Team["eta_total"] = $fdata;
//	Total_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Total_time";
	$fdata["GoodName"] = "Total_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Team","Total_time"); 
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

	

	
	$tdataDaily_Report_Team["Total_time"] = $fdata;
//	idle_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "idle_time";
	$fdata["GoodName"] = "idle_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Team","idle_time"); 
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

	

	
	$tdataDaily_Report_Team["idle_time"] = $fdata;
//	idle_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idle_p";
	$fdata["GoodName"] = "idle_p";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Team","idle_p"); 
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

	

	
	$tdataDaily_Report_Team["idle_p"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Team","efficiency"); 
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

	

	
	$tdataDaily_Report_Team["efficiency"] = $fdata;
//	performence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "performence";
	$fdata["GoodName"] = "performence";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Team","performence"); 
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

	

	
	$tdataDaily_Report_Team["performence"] = $fdata;
//	work_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "work_type";
	$fdata["GoodName"] = "work_type";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Team","work_type"); 
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
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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

	

	
	$tdataDaily_Report_Team["work_type"] = $fdata;

	
$tables_data["Daily Report Team"]=&$tdataDaily_Report_Team;
$field_labels["Daily_Report_Team"] = &$fieldLabelsDaily_Report_Team;
$fieldToolTips["Daily Report Team"] = &$fieldToolTipsDaily_Report_Team;
$page_titles["Daily_Report_Team"] = &$pageTitlesDaily_Report_Team;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Daily Report Team"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Daily Report Team"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Daily_Report_Team()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_date,  team_id,  COUNT(DISTINCT `designer_name`) AS designer_present,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  (IF (((27000 * COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,SEC_TO_TIME((43200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time)),SEC_TO_TIME((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time)))) AS idle_time,  (IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`))))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  ((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS performence,  work_type";
$proto0["m_strFrom"] = "FROM designer_report";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY work_date DESC, team_id, ((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100                    DESC";
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
	"m_srcTableName" => "Daily Report Team"
));

$proto5["m_sql"] = "work_date";
$proto5["m_srcTableName"] = "Daily Report Team";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Team"
));

$proto7["m_sql"] = "team_id";
$proto7["m_srcTableName"] = "Daily Report Team";
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
$proto9["m_srcTableName"] = "Daily Report Team";
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
	"m_srcTableName" => "Daily Report Team"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "SUM(total_images_counted)";
$proto12["m_srcTableName"] = "Daily Report Team";
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
$proto15["m_srcTableName"] = "Daily Report Team";
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
$proto18["m_srcTableName"] = "Daily Report Team";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "Total_time";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF (((27000 * COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,SEC_TO_TIME((43200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time)),SEC_TO_TIME((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))))"
));

$proto21["m_sql"] = "(IF (((27000 * COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,SEC_TO_TIME((43200 * COUNT(DISTINCT `designer_name`))-SUM(designer_time)),SEC_TO_TIME((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))))";
$proto21["m_srcTableName"] = "Daily Report Team";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "idle_time";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`))))*100"
));

$proto23["m_sql"] = "(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`))))*100";
$proto23["m_srcTableName"] = "Daily Report Team";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "idle_p";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((SUM(estimated_time))/(SUM(designer_time)))*100"
));

$proto25["m_sql"] = "((SUM(estimated_time))/(SUM(designer_time)))*100";
$proto25["m_srcTableName"] = "Daily Report Team";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100"
));

$proto27["m_sql"] = "((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100";
$proto27["m_srcTableName"] = "Daily Report Team";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "performence";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Team"
));

$proto29["m_sql"] = "work_type";
$proto29["m_srcTableName"] = "Daily Report Team";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "designer_report";
$proto32["m_srcTableName"] = "Daily Report Team";
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
$proto31["m_srcTableName"] = "Daily Report Team";
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
	"m_srcTableName" => "Daily Report Team"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Team"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Team"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Team"
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 0;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto0["m_orderby"][]=$obj;					
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Team"
));

$proto43["m_column"]=$obj;
$proto43["m_bAsc"] = 1;
$proto43["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto43);

$proto0["m_orderby"][]=$obj;					
												$proto45=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100                    "
));

$proto45["m_column"]=$obj;
$proto45["m_bAsc"] = 0;
$proto45["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto45);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Daily Report Team";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Daily_Report_Team = createSqlQuery_Daily_Report_Team();


	
											
	
$tdataDaily_Report_Team[".sqlquery"] = $queryData_Daily_Report_Team;

$tableEvents["Daily Report Team"] = new eventsBase;
$tdataDaily_Report_Team[".hasEvents"] = false;

?>