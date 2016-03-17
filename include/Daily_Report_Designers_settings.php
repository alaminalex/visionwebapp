<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDaily_Report_Designers = array();	
	$tdataDaily_Report_Designers[".truncateText"] = true;
	$tdataDaily_Report_Designers[".NumberOfChars"] = 256; 
	$tdataDaily_Report_Designers[".ShortName"] = "Daily_Report_Designers";
	$tdataDaily_Report_Designers[".OwnerID"] = "";
	$tdataDaily_Report_Designers[".OriginalTable"] = "designer_report";

//	field labels
$fieldLabelsDaily_Report_Designers = array();
$fieldToolTipsDaily_Report_Designers = array();
$pageTitlesDaily_Report_Designers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDaily_Report_Designers["English"] = array();
	$fieldToolTipsDaily_Report_Designers["English"] = array();
	$pageTitlesDaily_Report_Designers["English"] = array();
	$fieldLabelsDaily_Report_Designers["English"]["eta_total"] = "Eta Total";
	$fieldToolTipsDaily_Report_Designers["English"]["eta_total"] = "";
	$fieldLabelsDaily_Report_Designers["English"]["idle_time"] = "Idle Time";
	$fieldToolTipsDaily_Report_Designers["English"]["idle_time"] = "";
	$fieldLabelsDaily_Report_Designers["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsDaily_Report_Designers["English"]["efficiency"] = "";
	$fieldLabelsDaily_Report_Designers["English"]["work_date"] = "Work Date";
	$fieldToolTipsDaily_Report_Designers["English"]["work_date"] = "";
	$fieldLabelsDaily_Report_Designers["English"]["team_id"] = "Team Id";
	$fieldToolTipsDaily_Report_Designers["English"]["team_id"] = "";
	$fieldLabelsDaily_Report_Designers["English"]["designer_name"] = "Designer Name";
	$fieldToolTipsDaily_Report_Designers["English"]["designer_name"] = "";
	$fieldLabelsDaily_Report_Designers["English"]["total_images"] = "Total Images";
	$fieldToolTipsDaily_Report_Designers["English"]["total_images"] = "";
	$fieldLabelsDaily_Report_Designers["English"]["Total_time"] = "Total Time";
	$fieldToolTipsDaily_Report_Designers["English"]["Total_time"] = "";
	$fieldLabelsDaily_Report_Designers["English"]["idle_p"] = "Idle %";
	$fieldToolTipsDaily_Report_Designers["English"]["idle_p"] = "";
	$fieldLabelsDaily_Report_Designers["English"]["performence"] = "Performence";
	$fieldToolTipsDaily_Report_Designers["English"]["performence"] = "";
	$fieldLabelsDaily_Report_Designers["English"]["work_type"] = "Work Type";
	$fieldToolTipsDaily_Report_Designers["English"]["work_type"] = "";
	$fieldLabelsDaily_Report_Designers["English"]["eta_Avg"] = "Eta Avg";
	$fieldToolTipsDaily_Report_Designers["English"]["eta_Avg"] = "";
	$fieldLabelsDaily_Report_Designers["English"]["Taken_Avg"] = "Taken Avg";
	$fieldToolTipsDaily_Report_Designers["English"]["Taken_Avg"] = "";
	$fieldLabelsDaily_Report_Designers["English"]["done_date"] = "Done Date";
	$fieldToolTipsDaily_Report_Designers["English"]["done_date"] = "";
	$fieldLabelsDaily_Report_Designers["English"]["done_Week"] = "Done Week";
	$fieldToolTipsDaily_Report_Designers["English"]["done_Week"] = "";
	if (count($fieldToolTipsDaily_Report_Designers["English"]))
		$tdataDaily_Report_Designers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDaily_Report_Designers[""] = array();
	$fieldToolTipsDaily_Report_Designers[""] = array();
	$pageTitlesDaily_Report_Designers[""] = array();
	if (count($fieldToolTipsDaily_Report_Designers[""]))
		$tdataDaily_Report_Designers[".isUseToolTips"] = true;
}
	
	
	$tdataDaily_Report_Designers[".NCSearch"] = true;



$tdataDaily_Report_Designers[".shortTableName"] = "Daily_Report_Designers";
$tdataDaily_Report_Designers[".nSecOptions"] = 0;
$tdataDaily_Report_Designers[".recsPerRowList"] = 1;
$tdataDaily_Report_Designers[".recsPerRowPrint"] = 1;
$tdataDaily_Report_Designers[".mainTableOwnerID"] = "";
$tdataDaily_Report_Designers[".moveNext"] = 1;
$tdataDaily_Report_Designers[".entityType"] = 2;

$tdataDaily_Report_Designers[".strOriginalTableName"] = "designer_report";




$tdataDaily_Report_Designers[".showAddInPopup"] = false;

$tdataDaily_Report_Designers[".showEditInPopup"] = false;

$tdataDaily_Report_Designers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDaily_Report_Designers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDaily_Report_Designers[".fieldsForRegister"] = array();

$tdataDaily_Report_Designers[".listAjax"] = false;

	$tdataDaily_Report_Designers[".audit"] = false;

	$tdataDaily_Report_Designers[".locking"] = false;


$tdataDaily_Report_Designers[".add"] = true;
$tdataDaily_Report_Designers[".afterAddAction"] = 0;
$tdataDaily_Report_Designers[".closePopupAfterAdd"] = 1;
$tdataDaily_Report_Designers[".afterAddActionDetTable"] = "";

$tdataDaily_Report_Designers[".list"] = true;

$tdataDaily_Report_Designers[".inlineAdd"] = true;


$tdataDaily_Report_Designers[".exportTo"] = true;

$tdataDaily_Report_Designers[".printFriendly"] = true;


$tdataDaily_Report_Designers[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDaily_Report_Designers[".searchSaving"] = false;
//

$tdataDaily_Report_Designers[".showSearchPanel"] = true;
		$tdataDaily_Report_Designers[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDaily_Report_Designers[".isUseAjaxSuggest"] = false;
else 
	$tdataDaily_Report_Designers[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDaily_Report_Designers[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDaily_Report_Designers[".isUseTimeForSearch"] = false;





$tdataDaily_Report_Designers[".allSearchFields"] = array();
$tdataDaily_Report_Designers[".filterFields"] = array();
$tdataDaily_Report_Designers[".requiredSearchFields"] = array();

$tdataDaily_Report_Designers[".allSearchFields"][] = "work_date";
	$tdataDaily_Report_Designers[".allSearchFields"][] = "team_id";
	$tdataDaily_Report_Designers[".allSearchFields"][] = "designer_name";
	$tdataDaily_Report_Designers[".allSearchFields"][] = "total_images";
	$tdataDaily_Report_Designers[".allSearchFields"][] = "eta_total";
	$tdataDaily_Report_Designers[".allSearchFields"][] = "Total_time";
	$tdataDaily_Report_Designers[".allSearchFields"][] = "eta_Avg";
	$tdataDaily_Report_Designers[".allSearchFields"][] = "Taken_Avg";
	$tdataDaily_Report_Designers[".allSearchFields"][] = "efficiency";
	$tdataDaily_Report_Designers[".allSearchFields"][] = "idle_time";
	$tdataDaily_Report_Designers[".allSearchFields"][] = "idle_p";
	$tdataDaily_Report_Designers[".allSearchFields"][] = "done_date";
	$tdataDaily_Report_Designers[".allSearchFields"][] = "done_Week";
	$tdataDaily_Report_Designers[".allSearchFields"][] = "performence";
	

$tdataDaily_Report_Designers[".googleLikeFields"] = array();
$tdataDaily_Report_Designers[".googleLikeFields"][] = "work_date";
$tdataDaily_Report_Designers[".googleLikeFields"][] = "team_id";
$tdataDaily_Report_Designers[".googleLikeFields"][] = "designer_name";
$tdataDaily_Report_Designers[".googleLikeFields"][] = "total_images";
$tdataDaily_Report_Designers[".googleLikeFields"][] = "eta_total";
$tdataDaily_Report_Designers[".googleLikeFields"][] = "Total_time";
$tdataDaily_Report_Designers[".googleLikeFields"][] = "eta_Avg";
$tdataDaily_Report_Designers[".googleLikeFields"][] = "Taken_Avg";
$tdataDaily_Report_Designers[".googleLikeFields"][] = "efficiency";
$tdataDaily_Report_Designers[".googleLikeFields"][] = "idle_time";
$tdataDaily_Report_Designers[".googleLikeFields"][] = "idle_p";
$tdataDaily_Report_Designers[".googleLikeFields"][] = "done_date";
$tdataDaily_Report_Designers[".googleLikeFields"][] = "done_Week";
$tdataDaily_Report_Designers[".googleLikeFields"][] = "performence";
$tdataDaily_Report_Designers[".googleLikeFields"][] = "work_type";


$tdataDaily_Report_Designers[".advSearchFields"] = array();
$tdataDaily_Report_Designers[".advSearchFields"][] = "work_date";
$tdataDaily_Report_Designers[".advSearchFields"][] = "team_id";
$tdataDaily_Report_Designers[".advSearchFields"][] = "designer_name";
$tdataDaily_Report_Designers[".advSearchFields"][] = "total_images";
$tdataDaily_Report_Designers[".advSearchFields"][] = "eta_total";
$tdataDaily_Report_Designers[".advSearchFields"][] = "Total_time";
$tdataDaily_Report_Designers[".advSearchFields"][] = "eta_Avg";
$tdataDaily_Report_Designers[".advSearchFields"][] = "Taken_Avg";
$tdataDaily_Report_Designers[".advSearchFields"][] = "efficiency";
$tdataDaily_Report_Designers[".advSearchFields"][] = "idle_time";
$tdataDaily_Report_Designers[".advSearchFields"][] = "idle_p";
$tdataDaily_Report_Designers[".advSearchFields"][] = "done_date";
$tdataDaily_Report_Designers[".advSearchFields"][] = "done_Week";
$tdataDaily_Report_Designers[".advSearchFields"][] = "performence";
$tdataDaily_Report_Designers[".advSearchFields"][] = "work_type";

$tdataDaily_Report_Designers[".tableType"] = "report";

$tdataDaily_Report_Designers[".printerPageOrientation"] = 0;
$tdataDaily_Report_Designers[".nPrinterPageScale"] = 100;

$tdataDaily_Report_Designers[".nPrinterSplitRecords"] = 40;

$tdataDaily_Report_Designers[".nPrinterPDFSplitRecords"] = 40;



$tdataDaily_Report_Designers[".geocodingEnabled"] = false;

//report settings
$tdataDaily_Report_Designers[".printReportLayout"] = 3;	

$tdataDaily_Report_Designers[".reportPrintPartitionType"] = 0;	
$tdataDaily_Report_Designers[".reportPrintGroupsPerPage"] = 3;	
	$tdataDaily_Report_Designers[".lowGroup"] = 1;



$tdataDaily_Report_Designers[".reportGroupFields"] = true;
$tdataDaily_Report_Designers[".pageSize"] = 1;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "work_date";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataDaily_Report_Designers[".reportGroupFieldsData"] = $reportGroupFields;


$tdataDaily_Report_Designers[".isExistTotalFields"] = true;




$tdataDaily_Report_Designers[".repShowDet"] = true;

$tdataDaily_Report_Designers[".reportLayout"] = 3;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC, ((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100      DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDaily_Report_Designers[".strOrderBy"] = $tstrOrderBy;

$tdataDaily_Report_Designers[".orderindexes"] = array();
$tdataDaily_Report_Designers[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "work_date");
$tdataDaily_Report_Designers[".orderindexes"][] = array(14, (0 ? "ASC" : "DESC"), "((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100      ");

$tdataDaily_Report_Designers[".sqlHead"] = "SELECT work_date,  team_id,  designer_name,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  SEC_TO_TIME(SUM(estimated_time)/SUM(total_images_counted)) AS eta_Avg,  SEC_TO_TIME(SUM(designer_time)/SUM(total_images_counted)) AS Taken_Avg,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  (IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time)))) AS idle_time,  (IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100 AS idle_p,  Date(work_date) AS done_date,  (WEEK(work_date)+1) AS done_Week,  ((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS performence,  work_type";
$tdataDaily_Report_Designers[".sqlFrom"] = "FROM designer_report";
$tdataDaily_Report_Designers[".sqlWhereExpr"] = "(work_type =1) AND (user_group =7)";
$tdataDaily_Report_Designers[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDaily_Report_Designers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDaily_Report_Designers[".arrGroupsPerPage"] = $arrGPP;

$tdataDaily_Report_Designers[".highlightSearchResults"] = true;

$tableKeysDaily_Report_Designers = array();
$tdataDaily_Report_Designers[".Keys"] = $tableKeysDaily_Report_Designers;

$tdataDaily_Report_Designers[".listFields"] = array();
$tdataDaily_Report_Designers[".listFields"][] = "work_date";
$tdataDaily_Report_Designers[".listFields"][] = "team_id";
$tdataDaily_Report_Designers[".listFields"][] = "designer_name";
$tdataDaily_Report_Designers[".listFields"][] = "total_images";
$tdataDaily_Report_Designers[".listFields"][] = "eta_total";
$tdataDaily_Report_Designers[".listFields"][] = "Total_time";
$tdataDaily_Report_Designers[".listFields"][] = "eta_Avg";
$tdataDaily_Report_Designers[".listFields"][] = "Taken_Avg";
$tdataDaily_Report_Designers[".listFields"][] = "efficiency";
$tdataDaily_Report_Designers[".listFields"][] = "idle_time";
$tdataDaily_Report_Designers[".listFields"][] = "idle_p";
$tdataDaily_Report_Designers[".listFields"][] = "done_date";
$tdataDaily_Report_Designers[".listFields"][] = "done_Week";
$tdataDaily_Report_Designers[".listFields"][] = "performence";
$tdataDaily_Report_Designers[".listFields"][] = "work_type";

$tdataDaily_Report_Designers[".hideMobileList"] = array();


$tdataDaily_Report_Designers[".viewFields"] = array();
$tdataDaily_Report_Designers[".viewFields"][] = "work_date";
$tdataDaily_Report_Designers[".viewFields"][] = "team_id";
$tdataDaily_Report_Designers[".viewFields"][] = "designer_name";
$tdataDaily_Report_Designers[".viewFields"][] = "total_images";
$tdataDaily_Report_Designers[".viewFields"][] = "eta_total";
$tdataDaily_Report_Designers[".viewFields"][] = "Total_time";
$tdataDaily_Report_Designers[".viewFields"][] = "eta_Avg";
$tdataDaily_Report_Designers[".viewFields"][] = "Taken_Avg";
$tdataDaily_Report_Designers[".viewFields"][] = "efficiency";
$tdataDaily_Report_Designers[".viewFields"][] = "idle_time";
$tdataDaily_Report_Designers[".viewFields"][] = "idle_p";
$tdataDaily_Report_Designers[".viewFields"][] = "done_date";
$tdataDaily_Report_Designers[".viewFields"][] = "done_Week";
$tdataDaily_Report_Designers[".viewFields"][] = "performence";
$tdataDaily_Report_Designers[".viewFields"][] = "work_type";

$tdataDaily_Report_Designers[".addFields"] = array();

$tdataDaily_Report_Designers[".masterListFields"] = array();
$tdataDaily_Report_Designers[".masterListFields"][] = "work_date";
$tdataDaily_Report_Designers[".masterListFields"][] = "team_id";
$tdataDaily_Report_Designers[".masterListFields"][] = "designer_name";
$tdataDaily_Report_Designers[".masterListFields"][] = "total_images";
$tdataDaily_Report_Designers[".masterListFields"][] = "eta_total";
$tdataDaily_Report_Designers[".masterListFields"][] = "Total_time";
$tdataDaily_Report_Designers[".masterListFields"][] = "eta_Avg";
$tdataDaily_Report_Designers[".masterListFields"][] = "Taken_Avg";
$tdataDaily_Report_Designers[".masterListFields"][] = "efficiency";
$tdataDaily_Report_Designers[".masterListFields"][] = "idle_time";
$tdataDaily_Report_Designers[".masterListFields"][] = "idle_p";
$tdataDaily_Report_Designers[".masterListFields"][] = "done_date";
$tdataDaily_Report_Designers[".masterListFields"][] = "done_Week";
$tdataDaily_Report_Designers[".masterListFields"][] = "performence";
$tdataDaily_Report_Designers[".masterListFields"][] = "work_type";

$tdataDaily_Report_Designers[".inlineAddFields"] = array();

$tdataDaily_Report_Designers[".editFields"] = array();

$tdataDaily_Report_Designers[".inlineEditFields"] = array();

$tdataDaily_Report_Designers[".exportFields"] = array();
$tdataDaily_Report_Designers[".exportFields"][] = "work_date";
$tdataDaily_Report_Designers[".exportFields"][] = "team_id";
$tdataDaily_Report_Designers[".exportFields"][] = "designer_name";
$tdataDaily_Report_Designers[".exportFields"][] = "total_images";
$tdataDaily_Report_Designers[".exportFields"][] = "eta_total";
$tdataDaily_Report_Designers[".exportFields"][] = "Total_time";
$tdataDaily_Report_Designers[".exportFields"][] = "eta_Avg";
$tdataDaily_Report_Designers[".exportFields"][] = "Taken_Avg";
$tdataDaily_Report_Designers[".exportFields"][] = "efficiency";
$tdataDaily_Report_Designers[".exportFields"][] = "idle_time";
$tdataDaily_Report_Designers[".exportFields"][] = "idle_p";
$tdataDaily_Report_Designers[".exportFields"][] = "done_date";
$tdataDaily_Report_Designers[".exportFields"][] = "done_Week";
$tdataDaily_Report_Designers[".exportFields"][] = "performence";
$tdataDaily_Report_Designers[".exportFields"][] = "work_type";

$tdataDaily_Report_Designers[".importFields"] = array();
$tdataDaily_Report_Designers[".importFields"][] = "work_date";
$tdataDaily_Report_Designers[".importFields"][] = "team_id";
$tdataDaily_Report_Designers[".importFields"][] = "designer_name";
$tdataDaily_Report_Designers[".importFields"][] = "total_images";
$tdataDaily_Report_Designers[".importFields"][] = "eta_total";
$tdataDaily_Report_Designers[".importFields"][] = "Total_time";
$tdataDaily_Report_Designers[".importFields"][] = "eta_Avg";
$tdataDaily_Report_Designers[".importFields"][] = "Taken_Avg";
$tdataDaily_Report_Designers[".importFields"][] = "efficiency";
$tdataDaily_Report_Designers[".importFields"][] = "idle_time";
$tdataDaily_Report_Designers[".importFields"][] = "idle_p";
$tdataDaily_Report_Designers[".importFields"][] = "done_date";
$tdataDaily_Report_Designers[".importFields"][] = "done_Week";
$tdataDaily_Report_Designers[".importFields"][] = "performence";
$tdataDaily_Report_Designers[".importFields"][] = "work_type";

$tdataDaily_Report_Designers[".printFields"] = array();
$tdataDaily_Report_Designers[".printFields"][] = "work_date";
$tdataDaily_Report_Designers[".printFields"][] = "team_id";
$tdataDaily_Report_Designers[".printFields"][] = "designer_name";
$tdataDaily_Report_Designers[".printFields"][] = "total_images";
$tdataDaily_Report_Designers[".printFields"][] = "eta_total";
$tdataDaily_Report_Designers[".printFields"][] = "Total_time";
$tdataDaily_Report_Designers[".printFields"][] = "eta_Avg";
$tdataDaily_Report_Designers[".printFields"][] = "Taken_Avg";
$tdataDaily_Report_Designers[".printFields"][] = "efficiency";
$tdataDaily_Report_Designers[".printFields"][] = "idle_time";
$tdataDaily_Report_Designers[".printFields"][] = "idle_p";
$tdataDaily_Report_Designers[".printFields"][] = "done_date";
$tdataDaily_Report_Designers[".printFields"][] = "done_Week";
$tdataDaily_Report_Designers[".printFields"][] = "performence";
$tdataDaily_Report_Designers[".printFields"][] = "work_type";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designers","work_date"); 
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

	

	
	$tdataDaily_Report_Designers["work_date"] = $fdata;
//	team_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team_id";
	$fdata["GoodName"] = "team_id";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designers","team_id"); 
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

	

	
	$tdataDaily_Report_Designers["team_id"] = $fdata;
//	designer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer_name";
	$fdata["GoodName"] = "designer_name";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designers","designer_name"); 
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

	

	
	$tdataDaily_Report_Designers["designer_name"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designers","total_images"); 
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

	

	
	$tdataDaily_Report_Designers["total_images"] = $fdata;
//	eta_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "eta_total";
	$fdata["GoodName"] = "eta_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designers","eta_total"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
			$fdata["isTotalAvg"] = true;	
			$fdata["isTotalSum"] = true;	
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

	

	
	$tdataDaily_Report_Designers["eta_total"] = $fdata;
//	Total_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Total_time";
	$fdata["GoodName"] = "Total_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designers","Total_time"); 
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

	

	
	$tdataDaily_Report_Designers["Total_time"] = $fdata;
//	eta_Avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "eta_Avg";
	$fdata["GoodName"] = "eta_Avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designers","eta_Avg"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "eta_Avg"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(estimated_time)/SUM(total_images_counted))";
	
		
		
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

	

	
	$tdataDaily_Report_Designers["eta_Avg"] = $fdata;
//	Taken_Avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Taken_Avg";
	$fdata["GoodName"] = "Taken_Avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designers","Taken_Avg"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Taken_Avg"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(designer_time)/SUM(total_images_counted))";
	
		
		
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

	

	
	$tdataDaily_Report_Designers["Taken_Avg"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designers","efficiency"); 
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
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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

	

	
	$tdataDaily_Report_Designers["efficiency"] = $fdata;
//	idle_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "idle_time";
	$fdata["GoodName"] = "idle_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designers","idle_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
			$fdata["isTotalAvg"] = true;	
			// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idle_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time))))";
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDaily_Report_Designers["idle_time"] = $fdata;
//	idle_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "idle_p";
	$fdata["GoodName"] = "idle_p";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designers","idle_p"); 
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDaily_Report_Designers["idle_p"] = $fdata;
//	done_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "done_date";
	$fdata["GoodName"] = "done_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designers","done_date"); 
	$fdata["FieldType"] = 7;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "done_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Date(work_date)";
	
		
		
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

	

	
	$tdataDaily_Report_Designers["done_date"] = $fdata;
//	done_Week
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "done_Week";
	$fdata["GoodName"] = "done_Week";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designers","done_Week"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "done_Week"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(WEEK(work_date)+1)";
	
		
		
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

	

	
	$tdataDaily_Report_Designers["done_Week"] = $fdata;
//	performence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "performence";
	$fdata["GoodName"] = "performence";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designers","performence"); 
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

	

	
	$tdataDaily_Report_Designers["performence"] = $fdata;
//	work_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "work_type";
	$fdata["GoodName"] = "work_type";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_Report_Designers","work_type"); 
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
	
	
	
	

	

	
	$tdataDaily_Report_Designers["work_type"] = $fdata;

	
$tables_data["Daily Report Designers"]=&$tdataDaily_Report_Designers;
$field_labels["Daily_Report_Designers"] = &$fieldLabelsDaily_Report_Designers;
$fieldToolTips["Daily Report Designers"] = &$fieldToolTipsDaily_Report_Designers;
$page_titles["Daily_Report_Designers"] = &$pageTitlesDaily_Report_Designers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Daily Report Designers"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Daily Report Designers"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Daily_Report_Designers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_date,  team_id,  designer_name,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  SEC_TO_TIME(SUM(estimated_time)/SUM(total_images_counted)) AS eta_Avg,  SEC_TO_TIME(SUM(designer_time)/SUM(total_images_counted)) AS Taken_Avg,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  (IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time)))) AS idle_time,  (IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100 AS idle_p,  Date(work_date) AS done_date,  (WEEK(work_date)+1) AS done_Week,  ((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS performence,  work_type";
$proto0["m_strFrom"] = "FROM designer_report";
$proto0["m_strWhere"] = "(work_type =1) AND (user_group =7)";
$proto0["m_strOrderBy"] = "ORDER BY work_date DESC, ((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100      DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(work_type =1) AND (user_group =7)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(work_type =1) AND (user_group =7)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "work_type =1";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Designers"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "=1";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "user_group =7";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "user_group",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Designers"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "=7";
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
	"m_srcTableName" => "Daily Report Designers"
));

$proto9["m_sql"] = "work_date";
$proto9["m_srcTableName"] = "Daily Report Designers";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Designers"
));

$proto11["m_sql"] = "team_id";
$proto11["m_srcTableName"] = "Daily Report Designers";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Designers"
));

$proto13["m_sql"] = "designer_name";
$proto13["m_srcTableName"] = "Daily Report Designers";
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
	"m_srcTableName" => "Daily Report Designers"
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "SUM(total_images_counted)";
$proto15["m_srcTableName"] = "Daily Report Designers";
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
$proto18["m_srcTableName"] = "Daily Report Designers";
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
$proto21["m_srcTableName"] = "Daily Report Designers";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "Total_time";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$proto25=array();
$proto25["m_functiontype"] = "SQLF_CUSTOM";
$proto25["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(estimated_time)/SUM(total_images_counted)"
));

$proto25["m_arguments"][]=$obj;
$proto25["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto25);

$proto24["m_sql"] = "SEC_TO_TIME(SUM(estimated_time)/SUM(total_images_counted))";
$proto24["m_srcTableName"] = "Daily Report Designers";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "eta_Avg";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$proto28=array();
$proto28["m_functiontype"] = "SQLF_CUSTOM";
$proto28["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(designer_time)/SUM(total_images_counted)"
));

$proto28["m_arguments"][]=$obj;
$proto28["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto28);

$proto27["m_sql"] = "SEC_TO_TIME(SUM(designer_time)/SUM(total_images_counted))";
$proto27["m_srcTableName"] = "Daily Report Designers";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "Taken_Avg";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((SUM(estimated_time))/(SUM(designer_time)))*100"
));

$proto30["m_sql"] = "((SUM(estimated_time))/(SUM(designer_time)))*100";
$proto30["m_srcTableName"] = "Daily Report Designers";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time))))"
));

$proto32["m_sql"] = "(IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time))))";
$proto32["m_srcTableName"] = "Daily Report Designers";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "idle_time";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100"
));

$proto34["m_sql"] = "(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100";
$proto34["m_srcTableName"] = "Daily Report Designers";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "idle_p";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$proto37=array();
$proto37["m_functiontype"] = "SQLF_CUSTOM";
$proto37["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "work_date"
));

$proto37["m_arguments"][]=$obj;
$proto37["m_strFunctionName"] = "Date";
$obj = new SQLFunctionCall($proto37);

$proto36["m_sql"] = "Date(work_date)";
$proto36["m_srcTableName"] = "Daily Report Designers";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "done_date";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(WEEK(work_date)+1)"
));

$proto39["m_sql"] = "(WEEK(work_date)+1)";
$proto39["m_srcTableName"] = "Daily Report Designers";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "done_Week";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100"
));

$proto41["m_sql"] = "((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100";
$proto41["m_srcTableName"] = "Daily Report Designers";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "performence";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Designers"
));

$proto43["m_sql"] = "work_type";
$proto43["m_srcTableName"] = "Daily Report Designers";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto45=array();
$proto45["m_link"] = "SQLL_MAIN";
			$proto46=array();
$proto46["m_strName"] = "designer_report";
$proto46["m_srcTableName"] = "Daily Report Designers";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "report_id";
$proto46["m_columns"][] = "report_reference";
$proto46["m_columns"][] = "work_date";
$proto46["m_columns"][] = "designer_name";
$proto46["m_columns"][] = "team_id";
$proto46["m_columns"][] = "subdiv_id";
$proto46["m_columns"][] = "user_group";
$proto46["m_columns"][] = "pdf_name";
$proto46["m_columns"][] = "estimated_time";
$proto46["m_columns"][] = "designer_time";
$proto46["m_columns"][] = "qc_time";
$proto46["m_columns"][] = "efficiency";
$proto46["m_columns"][] = "total_images_counted";
$proto46["m_columns"][] = "comments";
$proto46["m_columns"][] = "work_type";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "designer_report";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "Daily Report Designers";
$proto47=array();
$proto47["m_sql"] = "";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto49=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Designers"
));

$proto49["m_column"]=$obj;
$obj = new SQLGroupByItem($proto49);

$proto0["m_groupby"][]=$obj;
												$proto51=array();
						$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Designers"
));

$proto51["m_column"]=$obj;
$obj = new SQLGroupByItem($proto51);

$proto0["m_groupby"][]=$obj;
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Designers"
));

$proto53["m_column"]=$obj;
$obj = new SQLGroupByItem($proto53);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto55=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report Designers"
));

$proto55["m_column"]=$obj;
$proto55["m_bAsc"] = 0;
$proto55["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto55);

$proto0["m_orderby"][]=$obj;					
												$proto57=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100      "
));

$proto57["m_column"]=$obj;
$proto57["m_bAsc"] = 0;
$proto57["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto57);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Daily Report Designers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Daily_Report_Designers = createSqlQuery_Daily_Report_Designers();


	
															
	
$tdataDaily_Report_Designers[".sqlquery"] = $queryData_Daily_Report_Designers;

$tableEvents["Daily Report Designers"] = new eventsBase;
$tdataDaily_Report_Designers[".hasEvents"] = false;

?>