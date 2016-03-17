<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDesigners_Performance_Monthly = array();	
	$tdataDesigners_Performance_Monthly[".truncateText"] = true;
	$tdataDesigners_Performance_Monthly[".NumberOfChars"] = 256; 
	$tdataDesigners_Performance_Monthly[".ShortName"] = "Designers_Performance_Monthly";
	$tdataDesigners_Performance_Monthly[".OwnerID"] = "";
	$tdataDesigners_Performance_Monthly[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsDesigners_Performance_Monthly = array();
$fieldToolTipsDesigners_Performance_Monthly = array();
$pageTitlesDesigners_Performance_Monthly = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDesigners_Performance_Monthly["English"] = array();
	$fieldToolTipsDesigners_Performance_Monthly["English"] = array();
	$pageTitlesDesigners_Performance_Monthly["English"] = array();
	$fieldLabelsDesigners_Performance_Monthly["English"]["work_date"] = "Work Date";
	$fieldToolTipsDesigners_Performance_Monthly["English"]["work_date"] = "";
	$fieldLabelsDesigners_Performance_Monthly["English"]["team_id"] = "Team Id";
	$fieldToolTipsDesigners_Performance_Monthly["English"]["team_id"] = "";
	$fieldLabelsDesigners_Performance_Monthly["English"]["designer_name"] = "Designer Name";
	$fieldToolTipsDesigners_Performance_Monthly["English"]["designer_name"] = "";
	$fieldLabelsDesigners_Performance_Monthly["English"]["total_images"] = "Total Images";
	$fieldToolTipsDesigners_Performance_Monthly["English"]["total_images"] = "";
	$fieldLabelsDesigners_Performance_Monthly["English"]["eta_total"] = "Eta Total";
	$fieldToolTipsDesigners_Performance_Monthly["English"]["eta_total"] = "";
	$fieldLabelsDesigners_Performance_Monthly["English"]["Total_time"] = "Total Time";
	$fieldToolTipsDesigners_Performance_Monthly["English"]["Total_time"] = "";
	$fieldLabelsDesigners_Performance_Monthly["English"]["idle_time"] = "Idle Time";
	$fieldToolTipsDesigners_Performance_Monthly["English"]["idle_time"] = "";
	$fieldLabelsDesigners_Performance_Monthly["English"]["idle_p"] = "Idle%";
	$fieldToolTipsDesigners_Performance_Monthly["English"]["idle_p"] = "";
	$fieldLabelsDesigners_Performance_Monthly["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsDesigners_Performance_Monthly["English"]["efficiency"] = "";
	$fieldLabelsDesigners_Performance_Monthly["English"]["performence"] = "Performence";
	$fieldToolTipsDesigners_Performance_Monthly["English"]["performence"] = "";
	$fieldLabelsDesigners_Performance_Monthly["English"]["work_type"] = "Work Type";
	$fieldToolTipsDesigners_Performance_Monthly["English"]["work_type"] = "";
	$fieldLabelsDesigners_Performance_Monthly["English"]["days"] = "Days";
	$fieldToolTipsDesigners_Performance_Monthly["English"]["days"] = "";
	if (count($fieldToolTipsDesigners_Performance_Monthly["English"]))
		$tdataDesigners_Performance_Monthly[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDesigners_Performance_Monthly[""] = array();
	$fieldToolTipsDesigners_Performance_Monthly[""] = array();
	$pageTitlesDesigners_Performance_Monthly[""] = array();
	if (count($fieldToolTipsDesigners_Performance_Monthly[""]))
		$tdataDesigners_Performance_Monthly[".isUseToolTips"] = true;
}
	
	
	$tdataDesigners_Performance_Monthly[".NCSearch"] = true;



$tdataDesigners_Performance_Monthly[".shortTableName"] = "Designers_Performance_Monthly";
$tdataDesigners_Performance_Monthly[".nSecOptions"] = 0;
$tdataDesigners_Performance_Monthly[".recsPerRowList"] = 1;
$tdataDesigners_Performance_Monthly[".recsPerRowPrint"] = 1;
$tdataDesigners_Performance_Monthly[".mainTableOwnerID"] = "";
$tdataDesigners_Performance_Monthly[".moveNext"] = 1;
$tdataDesigners_Performance_Monthly[".entityType"] = 2;

$tdataDesigners_Performance_Monthly[".strOriginalTableName"] = "jobfile";




$tdataDesigners_Performance_Monthly[".showAddInPopup"] = false;

$tdataDesigners_Performance_Monthly[".showEditInPopup"] = false;

$tdataDesigners_Performance_Monthly[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDesigners_Performance_Monthly[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDesigners_Performance_Monthly[".fieldsForRegister"] = array();

$tdataDesigners_Performance_Monthly[".listAjax"] = false;

	$tdataDesigners_Performance_Monthly[".audit"] = false;

	$tdataDesigners_Performance_Monthly[".locking"] = false;


$tdataDesigners_Performance_Monthly[".add"] = true;
$tdataDesigners_Performance_Monthly[".afterAddAction"] = 0;
$tdataDesigners_Performance_Monthly[".closePopupAfterAdd"] = 1;
$tdataDesigners_Performance_Monthly[".afterAddActionDetTable"] = "";

$tdataDesigners_Performance_Monthly[".list"] = true;

$tdataDesigners_Performance_Monthly[".inlineAdd"] = true;


$tdataDesigners_Performance_Monthly[".exportTo"] = true;

$tdataDesigners_Performance_Monthly[".printFriendly"] = true;


$tdataDesigners_Performance_Monthly[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDesigners_Performance_Monthly[".searchSaving"] = false;
//

$tdataDesigners_Performance_Monthly[".showSearchPanel"] = true;
		$tdataDesigners_Performance_Monthly[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDesigners_Performance_Monthly[".isUseAjaxSuggest"] = false;
else 
	$tdataDesigners_Performance_Monthly[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDesigners_Performance_Monthly[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDesigners_Performance_Monthly[".isUseTimeForSearch"] = false;





$tdataDesigners_Performance_Monthly[".allSearchFields"] = array();
$tdataDesigners_Performance_Monthly[".filterFields"] = array();
$tdataDesigners_Performance_Monthly[".requiredSearchFields"] = array();

$tdataDesigners_Performance_Monthly[".allSearchFields"][] = "work_date";
	$tdataDesigners_Performance_Monthly[".allSearchFields"][] = "team_id";
	$tdataDesigners_Performance_Monthly[".allSearchFields"][] = "designer_name";
	$tdataDesigners_Performance_Monthly[".allSearchFields"][] = "days";
	$tdataDesigners_Performance_Monthly[".allSearchFields"][] = "total_images";
	$tdataDesigners_Performance_Monthly[".allSearchFields"][] = "eta_total";
	$tdataDesigners_Performance_Monthly[".allSearchFields"][] = "Total_time";
	$tdataDesigners_Performance_Monthly[".allSearchFields"][] = "idle_time";
	$tdataDesigners_Performance_Monthly[".allSearchFields"][] = "idle_p";
	$tdataDesigners_Performance_Monthly[".allSearchFields"][] = "efficiency";
	$tdataDesigners_Performance_Monthly[".allSearchFields"][] = "performence";
	

$tdataDesigners_Performance_Monthly[".googleLikeFields"] = array();
$tdataDesigners_Performance_Monthly[".googleLikeFields"][] = "work_date";
$tdataDesigners_Performance_Monthly[".googleLikeFields"][] = "team_id";
$tdataDesigners_Performance_Monthly[".googleLikeFields"][] = "designer_name";
$tdataDesigners_Performance_Monthly[".googleLikeFields"][] = "days";
$tdataDesigners_Performance_Monthly[".googleLikeFields"][] = "total_images";
$tdataDesigners_Performance_Monthly[".googleLikeFields"][] = "eta_total";
$tdataDesigners_Performance_Monthly[".googleLikeFields"][] = "Total_time";
$tdataDesigners_Performance_Monthly[".googleLikeFields"][] = "idle_time";
$tdataDesigners_Performance_Monthly[".googleLikeFields"][] = "idle_p";
$tdataDesigners_Performance_Monthly[".googleLikeFields"][] = "efficiency";
$tdataDesigners_Performance_Monthly[".googleLikeFields"][] = "performence";
$tdataDesigners_Performance_Monthly[".googleLikeFields"][] = "work_type";


$tdataDesigners_Performance_Monthly[".advSearchFields"] = array();
$tdataDesigners_Performance_Monthly[".advSearchFields"][] = "work_date";
$tdataDesigners_Performance_Monthly[".advSearchFields"][] = "team_id";
$tdataDesigners_Performance_Monthly[".advSearchFields"][] = "designer_name";
$tdataDesigners_Performance_Monthly[".advSearchFields"][] = "days";
$tdataDesigners_Performance_Monthly[".advSearchFields"][] = "total_images";
$tdataDesigners_Performance_Monthly[".advSearchFields"][] = "eta_total";
$tdataDesigners_Performance_Monthly[".advSearchFields"][] = "Total_time";
$tdataDesigners_Performance_Monthly[".advSearchFields"][] = "idle_time";
$tdataDesigners_Performance_Monthly[".advSearchFields"][] = "idle_p";
$tdataDesigners_Performance_Monthly[".advSearchFields"][] = "efficiency";
$tdataDesigners_Performance_Monthly[".advSearchFields"][] = "performence";
$tdataDesigners_Performance_Monthly[".advSearchFields"][] = "work_type";

$tdataDesigners_Performance_Monthly[".tableType"] = "report";

$tdataDesigners_Performance_Monthly[".printerPageOrientation"] = 0;
$tdataDesigners_Performance_Monthly[".nPrinterPageScale"] = 100;

$tdataDesigners_Performance_Monthly[".nPrinterSplitRecords"] = 40;

$tdataDesigners_Performance_Monthly[".nPrinterPDFSplitRecords"] = 40;



$tdataDesigners_Performance_Monthly[".geocodingEnabled"] = false;

//report settings
$tdataDesigners_Performance_Monthly[".printReportLayout"] = 3;	

$tdataDesigners_Performance_Monthly[".reportPrintPartitionType"] = 0;	
$tdataDesigners_Performance_Monthly[".reportPrintGroupsPerPage"] = 3;	
	$tdataDesigners_Performance_Monthly[".lowGroup"] = 1;



$tdataDesigners_Performance_Monthly[".reportGroupFields"] = true;
$tdataDesigners_Performance_Monthly[".pageSize"] = 1;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "work_date";
	$rgroupField['groupInterval'] = 3;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataDesigners_Performance_Monthly[".reportGroupFieldsData"] = $reportGroupFields;






$tdataDesigners_Performance_Monthly[".repShowDet"] = true;

$tdataDesigners_Performance_Monthly[".reportLayout"] = 3;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDesigners_Performance_Monthly[".strOrderBy"] = $tstrOrderBy;

$tdataDesigners_Performance_Monthly[".orderindexes"] = array();
$tdataDesigners_Performance_Monthly[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "work_date");

$tdataDesigners_Performance_Monthly[".sqlHead"] = "SELECT work_date,  team_id,  designer_name,  COUNT(DISTINCT `work_date`) AS days,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  SEC_TO_TIME((27000*COUNT(DISTINCT `work_date`))-SUM((designer_time))) AS idle_time,  (((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`)))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  (1-(((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`))))*((SUM(estimated_time))/(SUM(designer_time))) * 100 AS performence,  work_type";
$tdataDesigners_Performance_Monthly[".sqlFrom"] = "FROM designer_report";
$tdataDesigners_Performance_Monthly[".sqlWhereExpr"] = "user_group =7";
$tdataDesigners_Performance_Monthly[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDesigners_Performance_Monthly[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDesigners_Performance_Monthly[".arrGroupsPerPage"] = $arrGPP;

$tdataDesigners_Performance_Monthly[".highlightSearchResults"] = true;

$tableKeysDesigners_Performance_Monthly = array();
$tdataDesigners_Performance_Monthly[".Keys"] = $tableKeysDesigners_Performance_Monthly;

$tdataDesigners_Performance_Monthly[".listFields"] = array();
$tdataDesigners_Performance_Monthly[".listFields"][] = "work_date";
$tdataDesigners_Performance_Monthly[".listFields"][] = "team_id";
$tdataDesigners_Performance_Monthly[".listFields"][] = "designer_name";
$tdataDesigners_Performance_Monthly[".listFields"][] = "days";
$tdataDesigners_Performance_Monthly[".listFields"][] = "total_images";
$tdataDesigners_Performance_Monthly[".listFields"][] = "eta_total";
$tdataDesigners_Performance_Monthly[".listFields"][] = "Total_time";
$tdataDesigners_Performance_Monthly[".listFields"][] = "idle_time";
$tdataDesigners_Performance_Monthly[".listFields"][] = "idle_p";
$tdataDesigners_Performance_Monthly[".listFields"][] = "efficiency";
$tdataDesigners_Performance_Monthly[".listFields"][] = "performence";
$tdataDesigners_Performance_Monthly[".listFields"][] = "work_type";

$tdataDesigners_Performance_Monthly[".hideMobileList"] = array();


$tdataDesigners_Performance_Monthly[".viewFields"] = array();
$tdataDesigners_Performance_Monthly[".viewFields"][] = "work_date";
$tdataDesigners_Performance_Monthly[".viewFields"][] = "team_id";
$tdataDesigners_Performance_Monthly[".viewFields"][] = "designer_name";
$tdataDesigners_Performance_Monthly[".viewFields"][] = "days";
$tdataDesigners_Performance_Monthly[".viewFields"][] = "total_images";
$tdataDesigners_Performance_Monthly[".viewFields"][] = "eta_total";
$tdataDesigners_Performance_Monthly[".viewFields"][] = "Total_time";
$tdataDesigners_Performance_Monthly[".viewFields"][] = "idle_time";
$tdataDesigners_Performance_Monthly[".viewFields"][] = "idle_p";
$tdataDesigners_Performance_Monthly[".viewFields"][] = "efficiency";
$tdataDesigners_Performance_Monthly[".viewFields"][] = "performence";
$tdataDesigners_Performance_Monthly[".viewFields"][] = "work_type";

$tdataDesigners_Performance_Monthly[".addFields"] = array();

$tdataDesigners_Performance_Monthly[".masterListFields"] = array();
$tdataDesigners_Performance_Monthly[".masterListFields"][] = "work_date";
$tdataDesigners_Performance_Monthly[".masterListFields"][] = "team_id";
$tdataDesigners_Performance_Monthly[".masterListFields"][] = "designer_name";
$tdataDesigners_Performance_Monthly[".masterListFields"][] = "days";
$tdataDesigners_Performance_Monthly[".masterListFields"][] = "total_images";
$tdataDesigners_Performance_Monthly[".masterListFields"][] = "eta_total";
$tdataDesigners_Performance_Monthly[".masterListFields"][] = "Total_time";
$tdataDesigners_Performance_Monthly[".masterListFields"][] = "idle_time";
$tdataDesigners_Performance_Monthly[".masterListFields"][] = "idle_p";
$tdataDesigners_Performance_Monthly[".masterListFields"][] = "efficiency";
$tdataDesigners_Performance_Monthly[".masterListFields"][] = "performence";
$tdataDesigners_Performance_Monthly[".masterListFields"][] = "work_type";

$tdataDesigners_Performance_Monthly[".inlineAddFields"] = array();

$tdataDesigners_Performance_Monthly[".editFields"] = array();

$tdataDesigners_Performance_Monthly[".inlineEditFields"] = array();

$tdataDesigners_Performance_Monthly[".exportFields"] = array();
$tdataDesigners_Performance_Monthly[".exportFields"][] = "work_date";
$tdataDesigners_Performance_Monthly[".exportFields"][] = "team_id";
$tdataDesigners_Performance_Monthly[".exportFields"][] = "designer_name";
$tdataDesigners_Performance_Monthly[".exportFields"][] = "days";
$tdataDesigners_Performance_Monthly[".exportFields"][] = "total_images";
$tdataDesigners_Performance_Monthly[".exportFields"][] = "eta_total";
$tdataDesigners_Performance_Monthly[".exportFields"][] = "Total_time";
$tdataDesigners_Performance_Monthly[".exportFields"][] = "idle_time";
$tdataDesigners_Performance_Monthly[".exportFields"][] = "idle_p";
$tdataDesigners_Performance_Monthly[".exportFields"][] = "efficiency";
$tdataDesigners_Performance_Monthly[".exportFields"][] = "performence";
$tdataDesigners_Performance_Monthly[".exportFields"][] = "work_type";

$tdataDesigners_Performance_Monthly[".importFields"] = array();
$tdataDesigners_Performance_Monthly[".importFields"][] = "work_date";
$tdataDesigners_Performance_Monthly[".importFields"][] = "team_id";
$tdataDesigners_Performance_Monthly[".importFields"][] = "designer_name";
$tdataDesigners_Performance_Monthly[".importFields"][] = "days";
$tdataDesigners_Performance_Monthly[".importFields"][] = "total_images";
$tdataDesigners_Performance_Monthly[".importFields"][] = "eta_total";
$tdataDesigners_Performance_Monthly[".importFields"][] = "Total_time";
$tdataDesigners_Performance_Monthly[".importFields"][] = "idle_time";
$tdataDesigners_Performance_Monthly[".importFields"][] = "idle_p";
$tdataDesigners_Performance_Monthly[".importFields"][] = "efficiency";
$tdataDesigners_Performance_Monthly[".importFields"][] = "performence";
$tdataDesigners_Performance_Monthly[".importFields"][] = "work_type";

$tdataDesigners_Performance_Monthly[".printFields"] = array();
$tdataDesigners_Performance_Monthly[".printFields"][] = "work_date";
$tdataDesigners_Performance_Monthly[".printFields"][] = "team_id";
$tdataDesigners_Performance_Monthly[".printFields"][] = "designer_name";
$tdataDesigners_Performance_Monthly[".printFields"][] = "days";
$tdataDesigners_Performance_Monthly[".printFields"][] = "total_images";
$tdataDesigners_Performance_Monthly[".printFields"][] = "eta_total";
$tdataDesigners_Performance_Monthly[".printFields"][] = "Total_time";
$tdataDesigners_Performance_Monthly[".printFields"][] = "idle_time";
$tdataDesigners_Performance_Monthly[".printFields"][] = "idle_p";
$tdataDesigners_Performance_Monthly[".printFields"][] = "efficiency";
$tdataDesigners_Performance_Monthly[".printFields"][] = "performence";
$tdataDesigners_Performance_Monthly[".printFields"][] = "work_type";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Designers_Performance_Monthly","work_date"); 
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

	

	
	$tdataDesigners_Performance_Monthly["work_date"] = $fdata;
//	team_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team_id";
	$fdata["GoodName"] = "team_id";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Designers_Performance_Monthly","team_id"); 
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

	

	
	$tdataDesigners_Performance_Monthly["team_id"] = $fdata;
//	designer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer_name";
	$fdata["GoodName"] = "designer_name";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Designers_Performance_Monthly","designer_name"); 
	$fdata["FieldType"] = 201;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataDesigners_Performance_Monthly["designer_name"] = $fdata;
//	days
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "days";
	$fdata["GoodName"] = "days";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Performance_Monthly","days"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "days"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(DISTINCT `work_date`)";
	
		
		
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

	

	
	$tdataDesigners_Performance_Monthly["days"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Performance_Monthly","total_images"); 
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

	

	
	$tdataDesigners_Performance_Monthly["total_images"] = $fdata;
//	eta_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "eta_total";
	$fdata["GoodName"] = "eta_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Performance_Monthly","eta_total"); 
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

	

	
	$tdataDesigners_Performance_Monthly["eta_total"] = $fdata;
//	Total_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Total_time";
	$fdata["GoodName"] = "Total_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Performance_Monthly","Total_time"); 
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

	

	
	$tdataDesigners_Performance_Monthly["Total_time"] = $fdata;
//	idle_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idle_time";
	$fdata["GoodName"] = "idle_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Performance_Monthly","idle_time"); 
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
	$fdata["FullName"] = "SEC_TO_TIME((27000*COUNT(DISTINCT `work_date`))-SUM((designer_time)))";
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigners_Performance_Monthly["idle_time"] = $fdata;
//	idle_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "idle_p";
	$fdata["GoodName"] = "idle_p";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Performance_Monthly","idle_p"); 
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
	$fdata["FullName"] = "(((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`)))*100";
	
		
		
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

	

	
	$tdataDesigners_Performance_Monthly["idle_p"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Performance_Monthly","efficiency"); 
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

	

	
	$tdataDesigners_Performance_Monthly["efficiency"] = $fdata;
//	performence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "performence";
	$fdata["GoodName"] = "performence";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Performance_Monthly","performence"); 
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
	$fdata["FullName"] = "(1-(((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`))))*((SUM(estimated_time))/(SUM(designer_time))) * 100";
	
		
		
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

	

	
	$tdataDesigners_Performance_Monthly["performence"] = $fdata;
//	work_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "work_type";
	$fdata["GoodName"] = "work_type";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Designers_Performance_Monthly","work_type"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataDesigners_Performance_Monthly["work_type"] = $fdata;

	
$tables_data["Designers Performance Monthly"]=&$tdataDesigners_Performance_Monthly;
$field_labels["Designers_Performance_Monthly"] = &$fieldLabelsDesigners_Performance_Monthly;
$fieldToolTips["Designers Performance Monthly"] = &$fieldToolTipsDesigners_Performance_Monthly;
$page_titles["Designers_Performance_Monthly"] = &$pageTitlesDesigners_Performance_Monthly;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Designers Performance Monthly"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Designers Performance Monthly"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Designers_Performance_Monthly()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_date,  team_id,  designer_name,  COUNT(DISTINCT `work_date`) AS days,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  SEC_TO_TIME((27000*COUNT(DISTINCT `work_date`))-SUM((designer_time))) AS idle_time,  (((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`)))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  (1-(((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`))))*((SUM(estimated_time))/(SUM(designer_time))) * 100 AS performence,  work_type";
$proto0["m_strFrom"] = "FROM designer_report";
$proto0["m_strWhere"] = "user_group =7";
$proto0["m_strOrderBy"] = "ORDER BY work_date DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "user_group =7";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "user_group",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Designers Performance Monthly"
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
	"m_srcTableName" => "Designers Performance Monthly"
));

$proto5["m_sql"] = "work_date";
$proto5["m_srcTableName"] = "Designers Performance Monthly";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Designers Performance Monthly"
));

$proto7["m_sql"] = "team_id";
$proto7["m_srcTableName"] = "Designers Performance Monthly";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Designers Performance Monthly"
));

$proto9["m_sql"] = "designer_name";
$proto9["m_srcTableName"] = "Designers Performance Monthly";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_COUNT";
$proto12["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "DISTINCT `work_date`"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto12);

$proto11["m_sql"] = "COUNT(DISTINCT `work_date`)";
$proto11["m_srcTableName"] = "Designers Performance Monthly";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "days";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_SUM";
$proto15["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total_images_counted",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Designers Performance Monthly"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "SUM(total_images_counted)";
$proto14["m_srcTableName"] = "Designers Performance Monthly";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "total_images";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$proto18=array();
$proto18["m_functiontype"] = "SQLF_CUSTOM";
$proto18["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(estimated_time)"
));

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto18);

$proto17["m_sql"] = "SEC_TO_TIME(SUM(estimated_time))";
$proto17["m_srcTableName"] = "Designers Performance Monthly";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "eta_total";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_CUSTOM";
$proto21["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(designer_time)"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "SEC_TO_TIME(SUM(designer_time))";
$proto20["m_srcTableName"] = "Designers Performance Monthly";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "Total_time";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$proto24=array();
$proto24["m_functiontype"] = "SQLF_CUSTOM";
$proto24["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(27000*COUNT(DISTINCT `work_date`))-SUM((designer_time))"
));

$proto24["m_arguments"][]=$obj;
$proto24["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto24);

$proto23["m_sql"] = "SEC_TO_TIME((27000*COUNT(DISTINCT `work_date`))-SUM((designer_time)))";
$proto23["m_srcTableName"] = "Designers Performance Monthly";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "idle_time";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`)))*100"
));

$proto26["m_sql"] = "(((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`)))*100";
$proto26["m_srcTableName"] = "Designers Performance Monthly";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "idle_p";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((SUM(estimated_time))/(SUM(designer_time)))*100"
));

$proto28["m_sql"] = "((SUM(estimated_time))/(SUM(designer_time)))*100";
$proto28["m_srcTableName"] = "Designers Performance Monthly";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(1-(((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`))))*((SUM(estimated_time))/(SUM(designer_time))) * 100"
));

$proto30["m_sql"] = "(1-(((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`))))*((SUM(estimated_time))/(SUM(designer_time))) * 100";
$proto30["m_srcTableName"] = "Designers Performance Monthly";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "performence";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Designers Performance Monthly"
));

$proto32["m_sql"] = "work_type";
$proto32["m_srcTableName"] = "Designers Performance Monthly";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "designer_report";
$proto35["m_srcTableName"] = "Designers Performance Monthly";
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
$proto34["m_srcTableName"] = "Designers Performance Monthly";
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
						$proto39=array();
$proto39["m_functiontype"] = "SQLF_CUSTOM";
$proto39["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "work_date"
));

$proto39["m_arguments"][]=$obj;
$proto39["m_strFunctionName"] = "MONTH";
$obj = new SQLFunctionCall($proto39);

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Designers Performance Monthly"
));

$proto41["m_column"]=$obj;
$obj = new SQLGroupByItem($proto41);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Designers Performance Monthly"
));

$proto43["m_column"]=$obj;
$proto43["m_bAsc"] = 0;
$proto43["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto43);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Designers Performance Monthly";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Designers_Performance_Monthly = createSqlQuery_Designers_Performance_Monthly();


	
												
	
$tdataDesigners_Performance_Monthly[".sqlquery"] = $queryData_Designers_Performance_Monthly;

$tableEvents["Designers Performance Monthly"] = new eventsBase;
$tdataDesigners_Performance_Monthly[".hasEvents"] = false;

?>