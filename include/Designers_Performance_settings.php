<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDesigners_Performance = array();	
	$tdataDesigners_Performance[".truncateText"] = true;
	$tdataDesigners_Performance[".NumberOfChars"] = 256; 
	$tdataDesigners_Performance[".ShortName"] = "Designers_Performance";
	$tdataDesigners_Performance[".OwnerID"] = "";
	$tdataDesigners_Performance[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsDesigners_Performance = array();
$fieldToolTipsDesigners_Performance = array();
$pageTitlesDesigners_Performance = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDesigners_Performance["English"] = array();
	$fieldToolTipsDesigners_Performance["English"] = array();
	$pageTitlesDesigners_Performance["English"] = array();
	$fieldLabelsDesigners_Performance["English"]["eta_total"] = "Eta Total";
	$fieldToolTipsDesigners_Performance["English"]["eta_total"] = "";
	$fieldLabelsDesigners_Performance["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsDesigners_Performance["English"]["efficiency"] = "";
	$fieldLabelsDesigners_Performance["English"]["work_date"] = "Work Date";
	$fieldToolTipsDesigners_Performance["English"]["work_date"] = "";
	$fieldLabelsDesigners_Performance["English"]["team_id"] = "Team Id";
	$fieldToolTipsDesigners_Performance["English"]["team_id"] = "";
	$fieldLabelsDesigners_Performance["English"]["designer_name"] = "Designer Name";
	$fieldToolTipsDesigners_Performance["English"]["designer_name"] = "";
	$fieldLabelsDesigners_Performance["English"]["days"] = "Days";
	$fieldToolTipsDesigners_Performance["English"]["days"] = "";
	$fieldLabelsDesigners_Performance["English"]["total_images"] = "Total Images";
	$fieldToolTipsDesigners_Performance["English"]["total_images"] = "";
	$fieldLabelsDesigners_Performance["English"]["Total_time"] = "Total Time";
	$fieldToolTipsDesigners_Performance["English"]["Total_time"] = "";
	$fieldLabelsDesigners_Performance["English"]["idle_time"] = "Idle Time";
	$fieldToolTipsDesigners_Performance["English"]["idle_time"] = "";
	$fieldLabelsDesigners_Performance["English"]["idle_p"] = "Idle P";
	$fieldToolTipsDesigners_Performance["English"]["idle_p"] = "";
	$fieldLabelsDesigners_Performance["English"]["performence"] = "Performence";
	$fieldToolTipsDesigners_Performance["English"]["performence"] = "";
	$fieldLabelsDesigners_Performance["English"]["work_type"] = "Work Type";
	$fieldToolTipsDesigners_Performance["English"]["work_type"] = "";
	if (count($fieldToolTipsDesigners_Performance["English"]))
		$tdataDesigners_Performance[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDesigners_Performance[""] = array();
	$fieldToolTipsDesigners_Performance[""] = array();
	$pageTitlesDesigners_Performance[""] = array();
	$fieldLabelsDesigners_Performance[""]["work_date"] = "Work Date";
	$fieldToolTipsDesigners_Performance[""]["work_date"] = "";
	$fieldLabelsDesigners_Performance[""]["team_id"] = "Team Id";
	$fieldToolTipsDesigners_Performance[""]["team_id"] = "";
	$fieldLabelsDesigners_Performance[""]["designer_name"] = "Designer Name";
	$fieldToolTipsDesigners_Performance[""]["designer_name"] = "";
	$fieldLabelsDesigners_Performance[""]["days"] = "Days";
	$fieldToolTipsDesigners_Performance[""]["days"] = "";
	$fieldLabelsDesigners_Performance[""]["total_images"] = "Total Images";
	$fieldToolTipsDesigners_Performance[""]["total_images"] = "";
	$fieldLabelsDesigners_Performance[""]["Total_time"] = "Total Time";
	$fieldToolTipsDesigners_Performance[""]["Total_time"] = "";
	$fieldLabelsDesigners_Performance[""]["idle_time"] = "Idle Time";
	$fieldToolTipsDesigners_Performance[""]["idle_time"] = "";
	$fieldLabelsDesigners_Performance[""]["idle_p"] = "Idle P";
	$fieldToolTipsDesigners_Performance[""]["idle_p"] = "";
	$fieldLabelsDesigners_Performance[""]["performence"] = "Performence";
	$fieldToolTipsDesigners_Performance[""]["performence"] = "";
	$fieldLabelsDesigners_Performance[""]["work_type"] = "Work Type";
	$fieldToolTipsDesigners_Performance[""]["work_type"] = "";
	if (count($fieldToolTipsDesigners_Performance[""]))
		$tdataDesigners_Performance[".isUseToolTips"] = true;
}
	
	
	$tdataDesigners_Performance[".NCSearch"] = true;



$tdataDesigners_Performance[".shortTableName"] = "Designers_Performance";
$tdataDesigners_Performance[".nSecOptions"] = 0;
$tdataDesigners_Performance[".recsPerRowList"] = 1;
$tdataDesigners_Performance[".recsPerRowPrint"] = 1;
$tdataDesigners_Performance[".mainTableOwnerID"] = "";
$tdataDesigners_Performance[".moveNext"] = 1;
$tdataDesigners_Performance[".entityType"] = 2;

$tdataDesigners_Performance[".strOriginalTableName"] = "jobfile";




$tdataDesigners_Performance[".showAddInPopup"] = false;

$tdataDesigners_Performance[".showEditInPopup"] = false;

$tdataDesigners_Performance[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDesigners_Performance[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDesigners_Performance[".fieldsForRegister"] = array();

$tdataDesigners_Performance[".listAjax"] = false;

	$tdataDesigners_Performance[".audit"] = false;

	$tdataDesigners_Performance[".locking"] = false;


$tdataDesigners_Performance[".add"] = true;
$tdataDesigners_Performance[".afterAddAction"] = 0;
$tdataDesigners_Performance[".closePopupAfterAdd"] = 1;
$tdataDesigners_Performance[".afterAddActionDetTable"] = "";

$tdataDesigners_Performance[".list"] = true;

$tdataDesigners_Performance[".inlineAdd"] = true;


$tdataDesigners_Performance[".exportTo"] = true;

$tdataDesigners_Performance[".printFriendly"] = true;


$tdataDesigners_Performance[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDesigners_Performance[".searchSaving"] = false;
//

$tdataDesigners_Performance[".showSearchPanel"] = true;
		$tdataDesigners_Performance[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDesigners_Performance[".isUseAjaxSuggest"] = false;
else 
	$tdataDesigners_Performance[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDesigners_Performance[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDesigners_Performance[".isUseTimeForSearch"] = false;





$tdataDesigners_Performance[".allSearchFields"] = array();
$tdataDesigners_Performance[".filterFields"] = array();
$tdataDesigners_Performance[".requiredSearchFields"] = array();

$tdataDesigners_Performance[".allSearchFields"][] = "work_date";
	$tdataDesigners_Performance[".allSearchFields"][] = "team_id";
	$tdataDesigners_Performance[".allSearchFields"][] = "designer_name";
	$tdataDesigners_Performance[".allSearchFields"][] = "days";
	$tdataDesigners_Performance[".allSearchFields"][] = "total_images";
	$tdataDesigners_Performance[".allSearchFields"][] = "Total_time";
	$tdataDesigners_Performance[".allSearchFields"][] = "idle_time";
	$tdataDesigners_Performance[".allSearchFields"][] = "idle_p";
	$tdataDesigners_Performance[".allSearchFields"][] = "efficiency";
	$tdataDesigners_Performance[".allSearchFields"][] = "performence";
	$tdataDesigners_Performance[".allSearchFields"][] = "work_type";
	

$tdataDesigners_Performance[".googleLikeFields"] = array();
$tdataDesigners_Performance[".googleLikeFields"][] = "work_date";
$tdataDesigners_Performance[".googleLikeFields"][] = "team_id";
$tdataDesigners_Performance[".googleLikeFields"][] = "designer_name";
$tdataDesigners_Performance[".googleLikeFields"][] = "days";
$tdataDesigners_Performance[".googleLikeFields"][] = "total_images";
$tdataDesigners_Performance[".googleLikeFields"][] = "eta_total";
$tdataDesigners_Performance[".googleLikeFields"][] = "Total_time";
$tdataDesigners_Performance[".googleLikeFields"][] = "idle_time";
$tdataDesigners_Performance[".googleLikeFields"][] = "idle_p";
$tdataDesigners_Performance[".googleLikeFields"][] = "efficiency";
$tdataDesigners_Performance[".googleLikeFields"][] = "performence";
$tdataDesigners_Performance[".googleLikeFields"][] = "work_type";


$tdataDesigners_Performance[".advSearchFields"] = array();
$tdataDesigners_Performance[".advSearchFields"][] = "work_date";
$tdataDesigners_Performance[".advSearchFields"][] = "team_id";
$tdataDesigners_Performance[".advSearchFields"][] = "designer_name";
$tdataDesigners_Performance[".advSearchFields"][] = "days";
$tdataDesigners_Performance[".advSearchFields"][] = "total_images";
$tdataDesigners_Performance[".advSearchFields"][] = "eta_total";
$tdataDesigners_Performance[".advSearchFields"][] = "Total_time";
$tdataDesigners_Performance[".advSearchFields"][] = "idle_time";
$tdataDesigners_Performance[".advSearchFields"][] = "idle_p";
$tdataDesigners_Performance[".advSearchFields"][] = "efficiency";
$tdataDesigners_Performance[".advSearchFields"][] = "performence";
$tdataDesigners_Performance[".advSearchFields"][] = "work_type";

$tdataDesigners_Performance[".tableType"] = "report";

$tdataDesigners_Performance[".printerPageOrientation"] = 0;
$tdataDesigners_Performance[".nPrinterPageScale"] = 100;

$tdataDesigners_Performance[".nPrinterSplitRecords"] = 40;

$tdataDesigners_Performance[".nPrinterPDFSplitRecords"] = 40;



$tdataDesigners_Performance[".geocodingEnabled"] = false;

//report settings
$tdataDesigners_Performance[".printReportLayout"] = 3;	

$tdataDesigners_Performance[".reportPrintPartitionType"] = 0;	
$tdataDesigners_Performance[".reportPrintGroupsPerPage"] = 3;	
	$tdataDesigners_Performance[".lowGroup"] = 1;



$tdataDesigners_Performance[".reportGroupFields"] = true;
$tdataDesigners_Performance[".pageSize"] = 1;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "work_date";
	$rgroupField['groupInterval'] = 5;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataDesigners_Performance[".reportGroupFieldsData"] = $reportGroupFields;


$tdataDesigners_Performance[".isExistTotalFields"] = true;




$tdataDesigners_Performance[".repShowDet"] = true;

$tdataDesigners_Performance[".reportLayout"] = 3;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDesigners_Performance[".strOrderBy"] = $tstrOrderBy;

$tdataDesigners_Performance[".orderindexes"] = array();
$tdataDesigners_Performance[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "work_date");

$tdataDesigners_Performance[".sqlHead"] = "SELECT work_date,  team_id,  designer_name,  COUNT(DISTINCT `work_date`) AS days,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  SEC_TO_TIME((27000*COUNT(DISTINCT `work_date`))-SUM((designer_time))) AS idle_time,  (((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`)))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  (1-(((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`))))*((SUM(estimated_time))/(SUM(designer_time))) * 100 AS performence,  work_type";
$tdataDesigners_Performance[".sqlFrom"] = "FROM designer_report";
$tdataDesigners_Performance[".sqlWhereExpr"] = "user_group =7";
$tdataDesigners_Performance[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDesigners_Performance[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDesigners_Performance[".arrGroupsPerPage"] = $arrGPP;

$tdataDesigners_Performance[".highlightSearchResults"] = true;

$tableKeysDesigners_Performance = array();
$tdataDesigners_Performance[".Keys"] = $tableKeysDesigners_Performance;

$tdataDesigners_Performance[".listFields"] = array();
$tdataDesigners_Performance[".listFields"][] = "work_date";
$tdataDesigners_Performance[".listFields"][] = "team_id";
$tdataDesigners_Performance[".listFields"][] = "designer_name";
$tdataDesigners_Performance[".listFields"][] = "days";
$tdataDesigners_Performance[".listFields"][] = "total_images";
$tdataDesigners_Performance[".listFields"][] = "eta_total";
$tdataDesigners_Performance[".listFields"][] = "Total_time";
$tdataDesigners_Performance[".listFields"][] = "idle_time";
$tdataDesigners_Performance[".listFields"][] = "idle_p";
$tdataDesigners_Performance[".listFields"][] = "efficiency";
$tdataDesigners_Performance[".listFields"][] = "performence";
$tdataDesigners_Performance[".listFields"][] = "work_type";

$tdataDesigners_Performance[".hideMobileList"] = array();


$tdataDesigners_Performance[".viewFields"] = array();
$tdataDesigners_Performance[".viewFields"][] = "work_date";
$tdataDesigners_Performance[".viewFields"][] = "team_id";
$tdataDesigners_Performance[".viewFields"][] = "designer_name";
$tdataDesigners_Performance[".viewFields"][] = "days";
$tdataDesigners_Performance[".viewFields"][] = "total_images";
$tdataDesigners_Performance[".viewFields"][] = "eta_total";
$tdataDesigners_Performance[".viewFields"][] = "Total_time";
$tdataDesigners_Performance[".viewFields"][] = "idle_time";
$tdataDesigners_Performance[".viewFields"][] = "idle_p";
$tdataDesigners_Performance[".viewFields"][] = "efficiency";
$tdataDesigners_Performance[".viewFields"][] = "performence";
$tdataDesigners_Performance[".viewFields"][] = "work_type";

$tdataDesigners_Performance[".addFields"] = array();

$tdataDesigners_Performance[".masterListFields"] = array();
$tdataDesigners_Performance[".masterListFields"][] = "work_date";
$tdataDesigners_Performance[".masterListFields"][] = "team_id";
$tdataDesigners_Performance[".masterListFields"][] = "designer_name";
$tdataDesigners_Performance[".masterListFields"][] = "days";
$tdataDesigners_Performance[".masterListFields"][] = "total_images";
$tdataDesigners_Performance[".masterListFields"][] = "eta_total";
$tdataDesigners_Performance[".masterListFields"][] = "Total_time";
$tdataDesigners_Performance[".masterListFields"][] = "idle_time";
$tdataDesigners_Performance[".masterListFields"][] = "idle_p";
$tdataDesigners_Performance[".masterListFields"][] = "efficiency";
$tdataDesigners_Performance[".masterListFields"][] = "performence";
$tdataDesigners_Performance[".masterListFields"][] = "work_type";

$tdataDesigners_Performance[".inlineAddFields"] = array();

$tdataDesigners_Performance[".editFields"] = array();

$tdataDesigners_Performance[".inlineEditFields"] = array();

$tdataDesigners_Performance[".exportFields"] = array();
$tdataDesigners_Performance[".exportFields"][] = "work_date";
$tdataDesigners_Performance[".exportFields"][] = "team_id";
$tdataDesigners_Performance[".exportFields"][] = "designer_name";
$tdataDesigners_Performance[".exportFields"][] = "days";
$tdataDesigners_Performance[".exportFields"][] = "total_images";
$tdataDesigners_Performance[".exportFields"][] = "eta_total";
$tdataDesigners_Performance[".exportFields"][] = "Total_time";
$tdataDesigners_Performance[".exportFields"][] = "idle_time";
$tdataDesigners_Performance[".exportFields"][] = "idle_p";
$tdataDesigners_Performance[".exportFields"][] = "efficiency";
$tdataDesigners_Performance[".exportFields"][] = "performence";
$tdataDesigners_Performance[".exportFields"][] = "work_type";

$tdataDesigners_Performance[".importFields"] = array();
$tdataDesigners_Performance[".importFields"][] = "work_date";
$tdataDesigners_Performance[".importFields"][] = "team_id";
$tdataDesigners_Performance[".importFields"][] = "designer_name";
$tdataDesigners_Performance[".importFields"][] = "days";
$tdataDesigners_Performance[".importFields"][] = "total_images";
$tdataDesigners_Performance[".importFields"][] = "eta_total";
$tdataDesigners_Performance[".importFields"][] = "Total_time";
$tdataDesigners_Performance[".importFields"][] = "idle_time";
$tdataDesigners_Performance[".importFields"][] = "idle_p";
$tdataDesigners_Performance[".importFields"][] = "efficiency";
$tdataDesigners_Performance[".importFields"][] = "performence";
$tdataDesigners_Performance[".importFields"][] = "work_type";

$tdataDesigners_Performance[".printFields"] = array();
$tdataDesigners_Performance[".printFields"][] = "work_date";
$tdataDesigners_Performance[".printFields"][] = "team_id";
$tdataDesigners_Performance[".printFields"][] = "designer_name";
$tdataDesigners_Performance[".printFields"][] = "days";
$tdataDesigners_Performance[".printFields"][] = "total_images";
$tdataDesigners_Performance[".printFields"][] = "eta_total";
$tdataDesigners_Performance[".printFields"][] = "Total_time";
$tdataDesigners_Performance[".printFields"][] = "idle_time";
$tdataDesigners_Performance[".printFields"][] = "idle_p";
$tdataDesigners_Performance[".printFields"][] = "efficiency";
$tdataDesigners_Performance[".printFields"][] = "performence";
$tdataDesigners_Performance[".printFields"][] = "work_type";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Designers_Performance","work_date"); 
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

	

	
	$tdataDesigners_Performance["work_date"] = $fdata;
//	team_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team_id";
	$fdata["GoodName"] = "team_id";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Designers_Performance","team_id"); 
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

	

	
	$tdataDesigners_Performance["team_id"] = $fdata;
//	designer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer_name";
	$fdata["GoodName"] = "designer_name";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Designers_Performance","designer_name"); 
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

	

	
	$tdataDesigners_Performance["designer_name"] = $fdata;
//	days
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "days";
	$fdata["GoodName"] = "days";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Performance","days"); 
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

	

	
	$tdataDesigners_Performance["days"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Performance","total_images"); 
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

	

	
	$tdataDesigners_Performance["total_images"] = $fdata;
//	eta_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "eta_total";
	$fdata["GoodName"] = "eta_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Performance","eta_total"); 
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
	
	
	
	

	

	
	$tdataDesigners_Performance["eta_total"] = $fdata;
//	Total_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Total_time";
	$fdata["GoodName"] = "Total_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Performance","Total_time"); 
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

	

	
	$tdataDesigners_Performance["Total_time"] = $fdata;
//	idle_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idle_time";
	$fdata["GoodName"] = "idle_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Performance","idle_time"); 
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

	

	
	$tdataDesigners_Performance["idle_time"] = $fdata;
//	idle_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "idle_p";
	$fdata["GoodName"] = "idle_p";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Performance","idle_p"); 
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

	

	
	$tdataDesigners_Performance["idle_p"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Performance","efficiency"); 
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

	

	
	$tdataDesigners_Performance["efficiency"] = $fdata;
//	performence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "performence";
	$fdata["GoodName"] = "performence";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designers_Performance","performence"); 
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

	

	
	$tdataDesigners_Performance["performence"] = $fdata;
//	work_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "work_type";
	$fdata["GoodName"] = "work_type";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Designers_Performance","work_type"); 
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

	

	
	$tdataDesigners_Performance["work_type"] = $fdata;

	
$tables_data["Designers Performance"]=&$tdataDesigners_Performance;
$field_labels["Designers_Performance"] = &$fieldLabelsDesigners_Performance;
$fieldToolTips["Designers Performance"] = &$fieldToolTipsDesigners_Performance;
$page_titles["Designers_Performance"] = &$pageTitlesDesigners_Performance;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Designers Performance"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Designers Performance"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Designers_Performance()
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
	"m_srcTableName" => "Designers Performance"
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
	"m_srcTableName" => "Designers Performance"
));

$proto5["m_sql"] = "work_date";
$proto5["m_srcTableName"] = "Designers Performance";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Designers Performance"
));

$proto7["m_sql"] = "team_id";
$proto7["m_srcTableName"] = "Designers Performance";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Designers Performance"
));

$proto9["m_sql"] = "designer_name";
$proto9["m_srcTableName"] = "Designers Performance";
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
$proto11["m_srcTableName"] = "Designers Performance";
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
	"m_srcTableName" => "Designers Performance"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "SUM(total_images_counted)";
$proto14["m_srcTableName"] = "Designers Performance";
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
$proto17["m_srcTableName"] = "Designers Performance";
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
$proto20["m_srcTableName"] = "Designers Performance";
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
$proto23["m_srcTableName"] = "Designers Performance";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "idle_time";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`)))*100"
));

$proto26["m_sql"] = "(((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`)))*100";
$proto26["m_srcTableName"] = "Designers Performance";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "idle_p";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((SUM(estimated_time))/(SUM(designer_time)))*100"
));

$proto28["m_sql"] = "((SUM(estimated_time))/(SUM(designer_time)))*100";
$proto28["m_srcTableName"] = "Designers Performance";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(1-(((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`))))*((SUM(estimated_time))/(SUM(designer_time))) * 100"
));

$proto30["m_sql"] = "(1-(((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`))))*((SUM(estimated_time))/(SUM(designer_time))) * 100";
$proto30["m_srcTableName"] = "Designers Performance";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "performence";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Designers Performance"
));

$proto32["m_sql"] = "work_type";
$proto32["m_srcTableName"] = "Designers Performance";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "designer_report";
$proto35["m_srcTableName"] = "Designers Performance";
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
$proto34["m_srcTableName"] = "Designers Performance";
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
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Designers Performance"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$proto41=array();
$proto41["m_functiontype"] = "SQLF_CUSTOM";
$proto41["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "work_date"
));

$proto41["m_arguments"][]=$obj;
$proto41["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto41);

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Designers Performance"
));

$proto43["m_column"]=$obj;
$proto43["m_bAsc"] = 0;
$proto43["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto43);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Designers Performance";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Designers_Performance = createSqlQuery_Designers_Performance();


	
												
	
$tdataDesigners_Performance[".sqlquery"] = $queryData_Designers_Performance;

$tableEvents["Designers Performance"] = new eventsBase;
$tdataDesigners_Performance[".hasEvents"] = false;

?>