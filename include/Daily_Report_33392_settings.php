<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDaily_Report_33392 = array();	
	$tdataDaily_Report_33392[".truncateText"] = true;
	$tdataDaily_Report_33392[".NumberOfChars"] = 256; 
	$tdataDaily_Report_33392[".ShortName"] = "Daily_Report_33392";
	$tdataDaily_Report_33392[".OwnerID"] = "";
	$tdataDaily_Report_33392[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsDaily_Report_33392 = array();
$fieldToolTipsDaily_Report_33392 = array();
$pageTitlesDaily_Report_33392 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDaily_Report_33392["English"] = array();
	$fieldToolTipsDaily_Report_33392["English"] = array();
	$pageTitlesDaily_Report_33392["English"] = array();
	$fieldLabelsDaily_Report_33392["English"]["eta_total"] = "Eta Total";
	$fieldToolTipsDaily_Report_33392["English"]["eta_total"] = "";
	$fieldLabelsDaily_Report_33392["English"]["idle_time"] = "Idle Time";
	$fieldToolTipsDaily_Report_33392["English"]["idle_time"] = "";
	$fieldLabelsDaily_Report_33392["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsDaily_Report_33392["English"]["efficiency"] = "";
	$fieldLabelsDaily_Report_33392["English"]["work_date"] = "Work Date";
	$fieldToolTipsDaily_Report_33392["English"]["work_date"] = "";
	$fieldLabelsDaily_Report_33392["English"]["team_id"] = "Team Id";
	$fieldToolTipsDaily_Report_33392["English"]["team_id"] = "";
	$fieldLabelsDaily_Report_33392["English"]["designer_name"] = "Designer Name";
	$fieldToolTipsDaily_Report_33392["English"]["designer_name"] = "";
	$fieldLabelsDaily_Report_33392["English"]["total_images"] = "Total Images";
	$fieldToolTipsDaily_Report_33392["English"]["total_images"] = "";
	$fieldLabelsDaily_Report_33392["English"]["Total_time"] = "Total Time";
	$fieldToolTipsDaily_Report_33392["English"]["Total_time"] = "";
	$fieldLabelsDaily_Report_33392["English"]["idle_p"] = "Idle P";
	$fieldToolTipsDaily_Report_33392["English"]["idle_p"] = "";
	$fieldLabelsDaily_Report_33392["English"]["performence"] = "Performence";
	$fieldToolTipsDaily_Report_33392["English"]["performence"] = "";
	$fieldLabelsDaily_Report_33392["English"]["work_type"] = "Work Type";
	$fieldToolTipsDaily_Report_33392["English"]["work_type"] = "";
	if (count($fieldToolTipsDaily_Report_33392["English"]))
		$tdataDaily_Report_33392[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDaily_Report_33392[""] = array();
	$fieldToolTipsDaily_Report_33392[""] = array();
	$pageTitlesDaily_Report_33392[""] = array();
	if (count($fieldToolTipsDaily_Report_33392[""]))
		$tdataDaily_Report_33392[".isUseToolTips"] = true;
}
	
	
	$tdataDaily_Report_33392[".NCSearch"] = true;



$tdataDaily_Report_33392[".shortTableName"] = "Daily_Report_33392";
$tdataDaily_Report_33392[".nSecOptions"] = 0;
$tdataDaily_Report_33392[".recsPerRowList"] = 1;
$tdataDaily_Report_33392[".recsPerRowPrint"] = 1;
$tdataDaily_Report_33392[".mainTableOwnerID"] = "";
$tdataDaily_Report_33392[".moveNext"] = 1;
$tdataDaily_Report_33392[".entityType"] = 2;

$tdataDaily_Report_33392[".strOriginalTableName"] = "jobfile";




$tdataDaily_Report_33392[".showAddInPopup"] = false;

$tdataDaily_Report_33392[".showEditInPopup"] = false;

$tdataDaily_Report_33392[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDaily_Report_33392[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDaily_Report_33392[".fieldsForRegister"] = array();

$tdataDaily_Report_33392[".listAjax"] = false;

	$tdataDaily_Report_33392[".audit"] = false;

	$tdataDaily_Report_33392[".locking"] = false;


$tdataDaily_Report_33392[".add"] = true;
$tdataDaily_Report_33392[".afterAddAction"] = 0;
$tdataDaily_Report_33392[".closePopupAfterAdd"] = 1;
$tdataDaily_Report_33392[".afterAddActionDetTable"] = "";

$tdataDaily_Report_33392[".list"] = true;

$tdataDaily_Report_33392[".inlineAdd"] = true;


$tdataDaily_Report_33392[".exportTo"] = true;

$tdataDaily_Report_33392[".printFriendly"] = true;


$tdataDaily_Report_33392[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDaily_Report_33392[".searchSaving"] = false;
//

$tdataDaily_Report_33392[".showSearchPanel"] = true;
		$tdataDaily_Report_33392[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDaily_Report_33392[".isUseAjaxSuggest"] = false;
else 
	$tdataDaily_Report_33392[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDaily_Report_33392[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDaily_Report_33392[".isUseTimeForSearch"] = false;





$tdataDaily_Report_33392[".allSearchFields"] = array();
$tdataDaily_Report_33392[".filterFields"] = array();
$tdataDaily_Report_33392[".requiredSearchFields"] = array();

$tdataDaily_Report_33392[".allSearchFields"][] = "work_date";
	$tdataDaily_Report_33392[".allSearchFields"][] = "team_id";
	$tdataDaily_Report_33392[".allSearchFields"][] = "designer_name";
	$tdataDaily_Report_33392[".allSearchFields"][] = "total_images";
	$tdataDaily_Report_33392[".allSearchFields"][] = "eta_total";
	$tdataDaily_Report_33392[".allSearchFields"][] = "Total_time";
	$tdataDaily_Report_33392[".allSearchFields"][] = "idle_time";
	$tdataDaily_Report_33392[".allSearchFields"][] = "idle_p";
	$tdataDaily_Report_33392[".allSearchFields"][] = "efficiency";
	$tdataDaily_Report_33392[".allSearchFields"][] = "performence";
	$tdataDaily_Report_33392[".allSearchFields"][] = "work_type";
	

$tdataDaily_Report_33392[".googleLikeFields"] = array();
$tdataDaily_Report_33392[".googleLikeFields"][] = "work_date";
$tdataDaily_Report_33392[".googleLikeFields"][] = "team_id";
$tdataDaily_Report_33392[".googleLikeFields"][] = "designer_name";
$tdataDaily_Report_33392[".googleLikeFields"][] = "total_images";
$tdataDaily_Report_33392[".googleLikeFields"][] = "eta_total";
$tdataDaily_Report_33392[".googleLikeFields"][] = "Total_time";
$tdataDaily_Report_33392[".googleLikeFields"][] = "idle_time";
$tdataDaily_Report_33392[".googleLikeFields"][] = "idle_p";
$tdataDaily_Report_33392[".googleLikeFields"][] = "efficiency";
$tdataDaily_Report_33392[".googleLikeFields"][] = "performence";
$tdataDaily_Report_33392[".googleLikeFields"][] = "work_type";


$tdataDaily_Report_33392[".advSearchFields"] = array();
$tdataDaily_Report_33392[".advSearchFields"][] = "work_date";
$tdataDaily_Report_33392[".advSearchFields"][] = "team_id";
$tdataDaily_Report_33392[".advSearchFields"][] = "designer_name";
$tdataDaily_Report_33392[".advSearchFields"][] = "total_images";
$tdataDaily_Report_33392[".advSearchFields"][] = "eta_total";
$tdataDaily_Report_33392[".advSearchFields"][] = "Total_time";
$tdataDaily_Report_33392[".advSearchFields"][] = "idle_time";
$tdataDaily_Report_33392[".advSearchFields"][] = "idle_p";
$tdataDaily_Report_33392[".advSearchFields"][] = "efficiency";
$tdataDaily_Report_33392[".advSearchFields"][] = "performence";
$tdataDaily_Report_33392[".advSearchFields"][] = "work_type";

$tdataDaily_Report_33392[".tableType"] = "report";

$tdataDaily_Report_33392[".printerPageOrientation"] = 0;
$tdataDaily_Report_33392[".nPrinterPageScale"] = 100;

$tdataDaily_Report_33392[".nPrinterSplitRecords"] = 40;

$tdataDaily_Report_33392[".nPrinterPDFSplitRecords"] = 40;



$tdataDaily_Report_33392[".geocodingEnabled"] = false;

//report settings
$tdataDaily_Report_33392[".printReportLayout"] = 6;	

$tdataDaily_Report_33392[".reportPrintPartitionType"] = 1;	
$tdataDaily_Report_33392[".reportPrintGroupsPerPage"] = 40;	
	$tdataDaily_Report_33392[".reportPrintPDFGroupsPerPage"] = 40;
$tdataDaily_Report_33392[".lowGroup"] = 0;



$tdataDaily_Report_33392[".pageSize"] = 20;	






$tdataDaily_Report_33392[".repShowDet"] = true;

$tdataDaily_Report_33392[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC, ((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100                  DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDaily_Report_33392[".strOrderBy"] = $tstrOrderBy;

$tdataDaily_Report_33392[".orderindexes"] = array();
$tdataDaily_Report_33392[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "work_date");
$tdataDaily_Report_33392[".orderindexes"][] = array(10, (0 ? "ASC" : "DESC"), "((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100                  ");

$tdataDaily_Report_33392[".sqlHead"] = "SELECT work_date,  team_id,  designer_name,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  (IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time)))) AS idle_time,  (IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  ((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS performence,  work_type";
$tdataDaily_Report_33392[".sqlFrom"] = "FROM designer_report";
$tdataDaily_Report_33392[".sqlWhereExpr"] = "(user_group =7) AND (subdiv_id =12)";
$tdataDaily_Report_33392[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDaily_Report_33392[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDaily_Report_33392[".arrGroupsPerPage"] = $arrGPP;

$tdataDaily_Report_33392[".highlightSearchResults"] = true;

$tableKeysDaily_Report_33392 = array();
$tdataDaily_Report_33392[".Keys"] = $tableKeysDaily_Report_33392;

$tdataDaily_Report_33392[".listFields"] = array();
$tdataDaily_Report_33392[".listFields"][] = "work_date";
$tdataDaily_Report_33392[".listFields"][] = "team_id";
$tdataDaily_Report_33392[".listFields"][] = "designer_name";
$tdataDaily_Report_33392[".listFields"][] = "total_images";
$tdataDaily_Report_33392[".listFields"][] = "eta_total";
$tdataDaily_Report_33392[".listFields"][] = "Total_time";
$tdataDaily_Report_33392[".listFields"][] = "idle_time";
$tdataDaily_Report_33392[".listFields"][] = "idle_p";
$tdataDaily_Report_33392[".listFields"][] = "efficiency";
$tdataDaily_Report_33392[".listFields"][] = "performence";
$tdataDaily_Report_33392[".listFields"][] = "work_type";

$tdataDaily_Report_33392[".hideMobileList"] = array();


$tdataDaily_Report_33392[".viewFields"] = array();
$tdataDaily_Report_33392[".viewFields"][] = "work_date";
$tdataDaily_Report_33392[".viewFields"][] = "team_id";
$tdataDaily_Report_33392[".viewFields"][] = "designer_name";
$tdataDaily_Report_33392[".viewFields"][] = "total_images";
$tdataDaily_Report_33392[".viewFields"][] = "eta_total";
$tdataDaily_Report_33392[".viewFields"][] = "Total_time";
$tdataDaily_Report_33392[".viewFields"][] = "idle_time";
$tdataDaily_Report_33392[".viewFields"][] = "idle_p";
$tdataDaily_Report_33392[".viewFields"][] = "efficiency";
$tdataDaily_Report_33392[".viewFields"][] = "performence";
$tdataDaily_Report_33392[".viewFields"][] = "work_type";

$tdataDaily_Report_33392[".addFields"] = array();

$tdataDaily_Report_33392[".masterListFields"] = array();
$tdataDaily_Report_33392[".masterListFields"][] = "work_date";
$tdataDaily_Report_33392[".masterListFields"][] = "team_id";
$tdataDaily_Report_33392[".masterListFields"][] = "designer_name";
$tdataDaily_Report_33392[".masterListFields"][] = "total_images";
$tdataDaily_Report_33392[".masterListFields"][] = "eta_total";
$tdataDaily_Report_33392[".masterListFields"][] = "Total_time";
$tdataDaily_Report_33392[".masterListFields"][] = "idle_time";
$tdataDaily_Report_33392[".masterListFields"][] = "idle_p";
$tdataDaily_Report_33392[".masterListFields"][] = "efficiency";
$tdataDaily_Report_33392[".masterListFields"][] = "performence";
$tdataDaily_Report_33392[".masterListFields"][] = "work_type";

$tdataDaily_Report_33392[".inlineAddFields"] = array();

$tdataDaily_Report_33392[".editFields"] = array();

$tdataDaily_Report_33392[".inlineEditFields"] = array();

$tdataDaily_Report_33392[".exportFields"] = array();
$tdataDaily_Report_33392[".exportFields"][] = "work_date";
$tdataDaily_Report_33392[".exportFields"][] = "team_id";
$tdataDaily_Report_33392[".exportFields"][] = "designer_name";
$tdataDaily_Report_33392[".exportFields"][] = "total_images";
$tdataDaily_Report_33392[".exportFields"][] = "eta_total";
$tdataDaily_Report_33392[".exportFields"][] = "Total_time";
$tdataDaily_Report_33392[".exportFields"][] = "idle_time";
$tdataDaily_Report_33392[".exportFields"][] = "idle_p";
$tdataDaily_Report_33392[".exportFields"][] = "efficiency";
$tdataDaily_Report_33392[".exportFields"][] = "performence";
$tdataDaily_Report_33392[".exportFields"][] = "work_type";

$tdataDaily_Report_33392[".importFields"] = array();
$tdataDaily_Report_33392[".importFields"][] = "work_date";
$tdataDaily_Report_33392[".importFields"][] = "team_id";
$tdataDaily_Report_33392[".importFields"][] = "designer_name";
$tdataDaily_Report_33392[".importFields"][] = "total_images";
$tdataDaily_Report_33392[".importFields"][] = "eta_total";
$tdataDaily_Report_33392[".importFields"][] = "Total_time";
$tdataDaily_Report_33392[".importFields"][] = "idle_time";
$tdataDaily_Report_33392[".importFields"][] = "idle_p";
$tdataDaily_Report_33392[".importFields"][] = "efficiency";
$tdataDaily_Report_33392[".importFields"][] = "performence";
$tdataDaily_Report_33392[".importFields"][] = "work_type";

$tdataDaily_Report_33392[".printFields"] = array();
$tdataDaily_Report_33392[".printFields"][] = "work_date";
$tdataDaily_Report_33392[".printFields"][] = "team_id";
$tdataDaily_Report_33392[".printFields"][] = "designer_name";
$tdataDaily_Report_33392[".printFields"][] = "total_images";
$tdataDaily_Report_33392[".printFields"][] = "eta_total";
$tdataDaily_Report_33392[".printFields"][] = "Total_time";
$tdataDaily_Report_33392[".printFields"][] = "idle_time";
$tdataDaily_Report_33392[".printFields"][] = "idle_p";
$tdataDaily_Report_33392[".printFields"][] = "efficiency";
$tdataDaily_Report_33392[".printFields"][] = "performence";
$tdataDaily_Report_33392[".printFields"][] = "work_type";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_Report_33392","work_date"); 
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

	

	
	$tdataDaily_Report_33392["work_date"] = $fdata;
//	team_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team_id";
	$fdata["GoodName"] = "team_id";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_Report_33392","team_id"); 
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

	

	
	$tdataDaily_Report_33392["team_id"] = $fdata;
//	designer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer_name";
	$fdata["GoodName"] = "designer_name";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_Report_33392","designer_name"); 
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
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
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

	

	
	$tdataDaily_Report_33392["designer_name"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_33392","total_images"); 
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

	

	
	$tdataDaily_Report_33392["total_images"] = $fdata;
//	eta_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "eta_total";
	$fdata["GoodName"] = "eta_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_33392","eta_total"); 
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

	

	
	$tdataDaily_Report_33392["eta_total"] = $fdata;
//	Total_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Total_time";
	$fdata["GoodName"] = "Total_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_33392","Total_time"); 
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

	

	
	$tdataDaily_Report_33392["Total_time"] = $fdata;
//	idle_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "idle_time";
	$fdata["GoodName"] = "idle_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_33392","idle_time"); 
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDaily_Report_33392["idle_time"] = $fdata;
//	idle_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idle_p";
	$fdata["GoodName"] = "idle_p";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_33392","idle_p"); 
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

	

	
	$tdataDaily_Report_33392["idle_p"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_33392","efficiency"); 
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

	

	
	$tdataDaily_Report_33392["efficiency"] = $fdata;
//	performence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "performence";
	$fdata["GoodName"] = "performence";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Report_33392","performence"); 
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

	

	
	$tdataDaily_Report_33392["performence"] = $fdata;
//	work_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "work_type";
	$fdata["GoodName"] = "work_type";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Daily_Report_33392","work_type"); 
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

	

	
	$tdataDaily_Report_33392["work_type"] = $fdata;

	
$tables_data["Daily Report 33392"]=&$tdataDaily_Report_33392;
$field_labels["Daily_Report_33392"] = &$fieldLabelsDaily_Report_33392;
$fieldToolTips["Daily Report 33392"] = &$fieldToolTipsDaily_Report_33392;
$page_titles["Daily_Report_33392"] = &$pageTitlesDaily_Report_33392;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Daily Report 33392"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Daily Report 33392"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Daily_Report_33392()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_date,  team_id,  designer_name,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  (IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time)))) AS idle_time,  (IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  ((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100 AS performence,  work_type";
$proto0["m_strFrom"] = "FROM designer_report";
$proto0["m_strWhere"] = "(user_group =7) AND (subdiv_id =12)";
$proto0["m_strOrderBy"] = "ORDER BY work_date DESC, ((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100                  DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(user_group =7) AND (subdiv_id =12)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(user_group =7) AND (subdiv_id =12)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "user_group =7";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "user_group",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report 33392"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "=7";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "subdiv_id =12";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "subdiv_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report 33392"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "=12";
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
	"m_srcTableName" => "Daily Report 33392"
));

$proto9["m_sql"] = "work_date";
$proto9["m_srcTableName"] = "Daily Report 33392";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report 33392"
));

$proto11["m_sql"] = "team_id";
$proto11["m_srcTableName"] = "Daily Report 33392";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report 33392"
));

$proto13["m_sql"] = "designer_name";
$proto13["m_srcTableName"] = "Daily Report 33392";
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
	"m_srcTableName" => "Daily Report 33392"
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "SUM(total_images_counted)";
$proto15["m_srcTableName"] = "Daily Report 33392";
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
$proto18["m_srcTableName"] = "Daily Report 33392";
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
$proto21["m_srcTableName"] = "Daily Report 33392";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "Total_time";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time))))"
));

$proto24["m_sql"] = "(IF ((27000-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(27000-SUM(designer_time))))";
$proto24["m_srcTableName"] = "Daily Report 33392";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "idle_time";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100"
));

$proto26["m_sql"] = "(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000))*100";
$proto26["m_srcTableName"] = "Daily Report 33392";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "idle_p";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((SUM(estimated_time))/(SUM(designer_time)))*100"
));

$proto28["m_sql"] = "((SUM(estimated_time))/(SUM(designer_time)))*100";
$proto28["m_srcTableName"] = "Daily Report 33392";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100"
));

$proto30["m_sql"] = "((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100";
$proto30["m_srcTableName"] = "Daily Report 33392";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "performence";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report 33392"
));

$proto32["m_sql"] = "work_type";
$proto32["m_srcTableName"] = "Daily Report 33392";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "designer_report";
$proto35["m_srcTableName"] = "Daily Report 33392";
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
$proto34["m_srcTableName"] = "Daily Report 33392";
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
	"m_srcTableName" => "Daily Report 33392"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report 33392"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report 33392"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Daily Report 33392"
));

$proto44["m_column"]=$obj;
$proto44["m_bAsc"] = 0;
$proto44["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto44);

$proto0["m_orderby"][]=$obj;					
												$proto46=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100                  "
));

$proto46["m_column"]=$obj;
$proto46["m_bAsc"] = 0;
$proto46["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto46);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Daily Report 33392";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Daily_Report_33392 = createSqlQuery_Daily_Report_33392();


	
											
	
$tdataDaily_Report_33392[".sqlquery"] = $queryData_Daily_Report_33392;

$tableEvents["Daily Report 33392"] = new eventsBase;
$tdataDaily_Report_33392[".hasEvents"] = false;

?>