<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMonthly_Report_Designers = array();	
	$tdataMonthly_Report_Designers[".truncateText"] = true;
	$tdataMonthly_Report_Designers[".NumberOfChars"] = 256; 
	$tdataMonthly_Report_Designers[".ShortName"] = "Monthly_Report_Designers";
	$tdataMonthly_Report_Designers[".OwnerID"] = "";
	$tdataMonthly_Report_Designers[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsMonthly_Report_Designers = array();
$fieldToolTipsMonthly_Report_Designers = array();
$pageTitlesMonthly_Report_Designers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMonthly_Report_Designers["English"] = array();
	$fieldToolTipsMonthly_Report_Designers["English"] = array();
	$pageTitlesMonthly_Report_Designers["English"] = array();
	$fieldLabelsMonthly_Report_Designers["English"]["eta_total"] = "Eta Total";
	$fieldToolTipsMonthly_Report_Designers["English"]["eta_total"] = "";
	$fieldLabelsMonthly_Report_Designers["English"]["idle_time"] = "Idle Time";
	$fieldToolTipsMonthly_Report_Designers["English"]["idle_time"] = "";
	$fieldLabelsMonthly_Report_Designers["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsMonthly_Report_Designers["English"]["efficiency"] = "";
	$fieldLabelsMonthly_Report_Designers["English"]["work_date"] = "Work Date";
	$fieldToolTipsMonthly_Report_Designers["English"]["work_date"] = "";
	$fieldLabelsMonthly_Report_Designers["English"]["team_id"] = "Team Id";
	$fieldToolTipsMonthly_Report_Designers["English"]["team_id"] = "";
	$fieldLabelsMonthly_Report_Designers["English"]["designer_name"] = "Designer Name";
	$fieldToolTipsMonthly_Report_Designers["English"]["designer_name"] = "";
	$fieldLabelsMonthly_Report_Designers["English"]["total_images"] = "Total Images";
	$fieldToolTipsMonthly_Report_Designers["English"]["total_images"] = "";
	$fieldLabelsMonthly_Report_Designers["English"]["Total_time"] = "Total Time";
	$fieldToolTipsMonthly_Report_Designers["English"]["Total_time"] = "";
	$fieldLabelsMonthly_Report_Designers["English"]["idle_p"] = "Idle P";
	$fieldToolTipsMonthly_Report_Designers["English"]["idle_p"] = "";
	$fieldLabelsMonthly_Report_Designers["English"]["work_type"] = "Work Type";
	$fieldToolTipsMonthly_Report_Designers["English"]["work_type"] = "";
	$fieldLabelsMonthly_Report_Designers["English"]["dayes"] = "Dayes";
	$fieldToolTipsMonthly_Report_Designers["English"]["dayes"] = "";
	$fieldLabelsMonthly_Report_Designers["English"]["performance"] = "Performance";
	$fieldToolTipsMonthly_Report_Designers["English"]["performance"] = "";
	if (count($fieldToolTipsMonthly_Report_Designers["English"]))
		$tdataMonthly_Report_Designers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMonthly_Report_Designers[""] = array();
	$fieldToolTipsMonthly_Report_Designers[""] = array();
	$pageTitlesMonthly_Report_Designers[""] = array();
	if (count($fieldToolTipsMonthly_Report_Designers[""]))
		$tdataMonthly_Report_Designers[".isUseToolTips"] = true;
}
	
	
	$tdataMonthly_Report_Designers[".NCSearch"] = true;



$tdataMonthly_Report_Designers[".shortTableName"] = "Monthly_Report_Designers";
$tdataMonthly_Report_Designers[".nSecOptions"] = 0;
$tdataMonthly_Report_Designers[".recsPerRowList"] = 1;
$tdataMonthly_Report_Designers[".recsPerRowPrint"] = 1;
$tdataMonthly_Report_Designers[".mainTableOwnerID"] = "";
$tdataMonthly_Report_Designers[".moveNext"] = 1;
$tdataMonthly_Report_Designers[".entityType"] = 2;

$tdataMonthly_Report_Designers[".strOriginalTableName"] = "jobfile";




$tdataMonthly_Report_Designers[".showAddInPopup"] = false;

$tdataMonthly_Report_Designers[".showEditInPopup"] = false;

$tdataMonthly_Report_Designers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMonthly_Report_Designers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMonthly_Report_Designers[".fieldsForRegister"] = array();

$tdataMonthly_Report_Designers[".listAjax"] = false;

	$tdataMonthly_Report_Designers[".audit"] = false;

	$tdataMonthly_Report_Designers[".locking"] = false;


$tdataMonthly_Report_Designers[".add"] = true;
$tdataMonthly_Report_Designers[".afterAddAction"] = 0;
$tdataMonthly_Report_Designers[".closePopupAfterAdd"] = 1;
$tdataMonthly_Report_Designers[".afterAddActionDetTable"] = "";

$tdataMonthly_Report_Designers[".list"] = true;

$tdataMonthly_Report_Designers[".inlineAdd"] = true;


$tdataMonthly_Report_Designers[".exportTo"] = true;

$tdataMonthly_Report_Designers[".printFriendly"] = true;


$tdataMonthly_Report_Designers[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataMonthly_Report_Designers[".searchSaving"] = false;
//

$tdataMonthly_Report_Designers[".showSearchPanel"] = true;
		$tdataMonthly_Report_Designers[".flexibleSearch"] = true;		

if (isMobile())
	$tdataMonthly_Report_Designers[".isUseAjaxSuggest"] = false;
else 
	$tdataMonthly_Report_Designers[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataMonthly_Report_Designers[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMonthly_Report_Designers[".isUseTimeForSearch"] = false;





$tdataMonthly_Report_Designers[".allSearchFields"] = array();
$tdataMonthly_Report_Designers[".filterFields"] = array();
$tdataMonthly_Report_Designers[".requiredSearchFields"] = array();

$tdataMonthly_Report_Designers[".allSearchFields"][] = "work_date";
	$tdataMonthly_Report_Designers[".allSearchFields"][] = "team_id";
	$tdataMonthly_Report_Designers[".allSearchFields"][] = "designer_name";
	$tdataMonthly_Report_Designers[".allSearchFields"][] = "dayes";
	$tdataMonthly_Report_Designers[".allSearchFields"][] = "total_images";
	$tdataMonthly_Report_Designers[".allSearchFields"][] = "Total_time";
	$tdataMonthly_Report_Designers[".allSearchFields"][] = "idle_time";
	$tdataMonthly_Report_Designers[".allSearchFields"][] = "idle_p";
	$tdataMonthly_Report_Designers[".allSearchFields"][] = "efficiency";
	$tdataMonthly_Report_Designers[".allSearchFields"][] = "performance";
	$tdataMonthly_Report_Designers[".allSearchFields"][] = "work_type";
	

$tdataMonthly_Report_Designers[".googleLikeFields"] = array();
$tdataMonthly_Report_Designers[".googleLikeFields"][] = "work_date";
$tdataMonthly_Report_Designers[".googleLikeFields"][] = "team_id";
$tdataMonthly_Report_Designers[".googleLikeFields"][] = "designer_name";
$tdataMonthly_Report_Designers[".googleLikeFields"][] = "dayes";
$tdataMonthly_Report_Designers[".googleLikeFields"][] = "total_images";
$tdataMonthly_Report_Designers[".googleLikeFields"][] = "eta_total";
$tdataMonthly_Report_Designers[".googleLikeFields"][] = "Total_time";
$tdataMonthly_Report_Designers[".googleLikeFields"][] = "idle_time";
$tdataMonthly_Report_Designers[".googleLikeFields"][] = "idle_p";
$tdataMonthly_Report_Designers[".googleLikeFields"][] = "efficiency";
$tdataMonthly_Report_Designers[".googleLikeFields"][] = "performance";
$tdataMonthly_Report_Designers[".googleLikeFields"][] = "work_type";


$tdataMonthly_Report_Designers[".advSearchFields"] = array();
$tdataMonthly_Report_Designers[".advSearchFields"][] = "work_date";
$tdataMonthly_Report_Designers[".advSearchFields"][] = "team_id";
$tdataMonthly_Report_Designers[".advSearchFields"][] = "designer_name";
$tdataMonthly_Report_Designers[".advSearchFields"][] = "dayes";
$tdataMonthly_Report_Designers[".advSearchFields"][] = "total_images";
$tdataMonthly_Report_Designers[".advSearchFields"][] = "eta_total";
$tdataMonthly_Report_Designers[".advSearchFields"][] = "Total_time";
$tdataMonthly_Report_Designers[".advSearchFields"][] = "idle_time";
$tdataMonthly_Report_Designers[".advSearchFields"][] = "idle_p";
$tdataMonthly_Report_Designers[".advSearchFields"][] = "efficiency";
$tdataMonthly_Report_Designers[".advSearchFields"][] = "performance";
$tdataMonthly_Report_Designers[".advSearchFields"][] = "work_type";

$tdataMonthly_Report_Designers[".tableType"] = "report";

$tdataMonthly_Report_Designers[".printerPageOrientation"] = 0;
$tdataMonthly_Report_Designers[".nPrinterPageScale"] = 100;

$tdataMonthly_Report_Designers[".nPrinterSplitRecords"] = 40;

$tdataMonthly_Report_Designers[".nPrinterPDFSplitRecords"] = 40;



$tdataMonthly_Report_Designers[".geocodingEnabled"] = false;

//report settings

$tdataMonthly_Report_Designers[".reportPrintPartitionType"] = 0;	
$tdataMonthly_Report_Designers[".reportPrintGroupsPerPage"] = 3;	
	$tdataMonthly_Report_Designers[".lowGroup"] = 3;



$tdataMonthly_Report_Designers[".reportGroupFields"] = true;
$tdataMonthly_Report_Designers[".pageSize"] = 1;
$tdataMonthly_Report_Designers[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "end2_date";
	$rgroupField['groupInterval'] = 3;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "team";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "group_id";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 3;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataMonthly_Report_Designers[".reportGroupFieldsData"] = $reportGroupFields;






$tdataMonthly_Report_Designers[".repShowDet"] = true;

$tdataMonthly_Report_Designers[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMonthly_Report_Designers[".strOrderBy"] = $tstrOrderBy;

$tdataMonthly_Report_Designers[".orderindexes"] = array();
$tdataMonthly_Report_Designers[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "work_date");

$tdataMonthly_Report_Designers[".sqlHead"] = "SELECT work_date,  team_id,  designer_name,  COUNT(DISTINCT `work_date`) AS dayes,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  SEC_TO_TIME((27000*(COUNT(DISTINCT `work_date`)))-SUM(designer_time)) AS idle_time,  (((27000*(COUNT(DISTINCT `work_date`)))-(SUM(designer_time)))/(27000*(COUNT(DISTINCT `work_date`))))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  (1-(((27000*(COUNT(DISTINCT `work_date`)))-(SUM(designer_time)))/(27000*(COUNT(DISTINCT `work_date`)))))*(((SUM(estimated_time))/(SUM(designer_time))))*100 AS performance,  work_type";
$tdataMonthly_Report_Designers[".sqlFrom"] = "FROM designer_report";
$tdataMonthly_Report_Designers[".sqlWhereExpr"] = "user_group =7";
$tdataMonthly_Report_Designers[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMonthly_Report_Designers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMonthly_Report_Designers[".arrGroupsPerPage"] = $arrGPP;

$tdataMonthly_Report_Designers[".highlightSearchResults"] = true;

$tableKeysMonthly_Report_Designers = array();
$tdataMonthly_Report_Designers[".Keys"] = $tableKeysMonthly_Report_Designers;

$tdataMonthly_Report_Designers[".listFields"] = array();
$tdataMonthly_Report_Designers[".listFields"][] = "work_date";
$tdataMonthly_Report_Designers[".listFields"][] = "team_id";
$tdataMonthly_Report_Designers[".listFields"][] = "designer_name";
$tdataMonthly_Report_Designers[".listFields"][] = "dayes";
$tdataMonthly_Report_Designers[".listFields"][] = "total_images";
$tdataMonthly_Report_Designers[".listFields"][] = "eta_total";
$tdataMonthly_Report_Designers[".listFields"][] = "Total_time";
$tdataMonthly_Report_Designers[".listFields"][] = "idle_time";
$tdataMonthly_Report_Designers[".listFields"][] = "idle_p";
$tdataMonthly_Report_Designers[".listFields"][] = "efficiency";
$tdataMonthly_Report_Designers[".listFields"][] = "performance";
$tdataMonthly_Report_Designers[".listFields"][] = "work_type";

$tdataMonthly_Report_Designers[".hideMobileList"] = array();


$tdataMonthly_Report_Designers[".viewFields"] = array();
$tdataMonthly_Report_Designers[".viewFields"][] = "work_date";
$tdataMonthly_Report_Designers[".viewFields"][] = "team_id";
$tdataMonthly_Report_Designers[".viewFields"][] = "designer_name";
$tdataMonthly_Report_Designers[".viewFields"][] = "dayes";
$tdataMonthly_Report_Designers[".viewFields"][] = "total_images";
$tdataMonthly_Report_Designers[".viewFields"][] = "eta_total";
$tdataMonthly_Report_Designers[".viewFields"][] = "Total_time";
$tdataMonthly_Report_Designers[".viewFields"][] = "idle_time";
$tdataMonthly_Report_Designers[".viewFields"][] = "idle_p";
$tdataMonthly_Report_Designers[".viewFields"][] = "efficiency";
$tdataMonthly_Report_Designers[".viewFields"][] = "performance";
$tdataMonthly_Report_Designers[".viewFields"][] = "work_type";

$tdataMonthly_Report_Designers[".addFields"] = array();

$tdataMonthly_Report_Designers[".masterListFields"] = array();
$tdataMonthly_Report_Designers[".masterListFields"][] = "work_date";
$tdataMonthly_Report_Designers[".masterListFields"][] = "team_id";
$tdataMonthly_Report_Designers[".masterListFields"][] = "designer_name";
$tdataMonthly_Report_Designers[".masterListFields"][] = "dayes";
$tdataMonthly_Report_Designers[".masterListFields"][] = "total_images";
$tdataMonthly_Report_Designers[".masterListFields"][] = "eta_total";
$tdataMonthly_Report_Designers[".masterListFields"][] = "Total_time";
$tdataMonthly_Report_Designers[".masterListFields"][] = "idle_time";
$tdataMonthly_Report_Designers[".masterListFields"][] = "idle_p";
$tdataMonthly_Report_Designers[".masterListFields"][] = "efficiency";
$tdataMonthly_Report_Designers[".masterListFields"][] = "performance";
$tdataMonthly_Report_Designers[".masterListFields"][] = "work_type";

$tdataMonthly_Report_Designers[".inlineAddFields"] = array();

$tdataMonthly_Report_Designers[".editFields"] = array();

$tdataMonthly_Report_Designers[".inlineEditFields"] = array();

$tdataMonthly_Report_Designers[".exportFields"] = array();
$tdataMonthly_Report_Designers[".exportFields"][] = "work_date";
$tdataMonthly_Report_Designers[".exportFields"][] = "team_id";
$tdataMonthly_Report_Designers[".exportFields"][] = "designer_name";
$tdataMonthly_Report_Designers[".exportFields"][] = "dayes";
$tdataMonthly_Report_Designers[".exportFields"][] = "total_images";
$tdataMonthly_Report_Designers[".exportFields"][] = "eta_total";
$tdataMonthly_Report_Designers[".exportFields"][] = "Total_time";
$tdataMonthly_Report_Designers[".exportFields"][] = "idle_time";
$tdataMonthly_Report_Designers[".exportFields"][] = "idle_p";
$tdataMonthly_Report_Designers[".exportFields"][] = "efficiency";
$tdataMonthly_Report_Designers[".exportFields"][] = "performance";
$tdataMonthly_Report_Designers[".exportFields"][] = "work_type";

$tdataMonthly_Report_Designers[".importFields"] = array();
$tdataMonthly_Report_Designers[".importFields"][] = "work_date";
$tdataMonthly_Report_Designers[".importFields"][] = "team_id";
$tdataMonthly_Report_Designers[".importFields"][] = "designer_name";
$tdataMonthly_Report_Designers[".importFields"][] = "dayes";
$tdataMonthly_Report_Designers[".importFields"][] = "total_images";
$tdataMonthly_Report_Designers[".importFields"][] = "eta_total";
$tdataMonthly_Report_Designers[".importFields"][] = "Total_time";
$tdataMonthly_Report_Designers[".importFields"][] = "idle_time";
$tdataMonthly_Report_Designers[".importFields"][] = "idle_p";
$tdataMonthly_Report_Designers[".importFields"][] = "efficiency";
$tdataMonthly_Report_Designers[".importFields"][] = "performance";
$tdataMonthly_Report_Designers[".importFields"][] = "work_type";

$tdataMonthly_Report_Designers[".printFields"] = array();
$tdataMonthly_Report_Designers[".printFields"][] = "work_date";
$tdataMonthly_Report_Designers[".printFields"][] = "team_id";
$tdataMonthly_Report_Designers[".printFields"][] = "designer_name";
$tdataMonthly_Report_Designers[".printFields"][] = "dayes";
$tdataMonthly_Report_Designers[".printFields"][] = "total_images";
$tdataMonthly_Report_Designers[".printFields"][] = "eta_total";
$tdataMonthly_Report_Designers[".printFields"][] = "Total_time";
$tdataMonthly_Report_Designers[".printFields"][] = "idle_time";
$tdataMonthly_Report_Designers[".printFields"][] = "idle_p";
$tdataMonthly_Report_Designers[".printFields"][] = "efficiency";
$tdataMonthly_Report_Designers[".printFields"][] = "performance";
$tdataMonthly_Report_Designers[".printFields"][] = "work_type";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designers","work_date"); 
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

	

	
	$tdataMonthly_Report_Designers["work_date"] = $fdata;
//	team_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team_id";
	$fdata["GoodName"] = "team_id";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designers","team_id"); 
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

	

	
	$tdataMonthly_Report_Designers["team_id"] = $fdata;
//	designer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer_name";
	$fdata["GoodName"] = "designer_name";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designers","designer_name"); 
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

	

	
	$tdataMonthly_Report_Designers["designer_name"] = $fdata;
//	dayes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dayes";
	$fdata["GoodName"] = "dayes";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designers","dayes"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "dayes"; 
	
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

	

	
	$tdataMonthly_Report_Designers["dayes"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designers","total_images"); 
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

	

	
	$tdataMonthly_Report_Designers["total_images"] = $fdata;
//	eta_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "eta_total";
	$fdata["GoodName"] = "eta_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designers","eta_total"); 
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
	
	
	
	

	

	
	$tdataMonthly_Report_Designers["eta_total"] = $fdata;
//	Total_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Total_time";
	$fdata["GoodName"] = "Total_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designers","Total_time"); 
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

	

	
	$tdataMonthly_Report_Designers["Total_time"] = $fdata;
//	idle_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idle_time";
	$fdata["GoodName"] = "idle_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designers","idle_time"); 
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
	$fdata["FullName"] = "SEC_TO_TIME((27000*(COUNT(DISTINCT `work_date`)))-SUM(designer_time))";
	
		
		
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

	

	
	$tdataMonthly_Report_Designers["idle_time"] = $fdata;
//	idle_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "idle_p";
	$fdata["GoodName"] = "idle_p";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designers","idle_p"); 
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
	$fdata["FullName"] = "(((27000*(COUNT(DISTINCT `work_date`)))-(SUM(designer_time)))/(27000*(COUNT(DISTINCT `work_date`))))*100";
	
		
		
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

	

	
	$tdataMonthly_Report_Designers["idle_p"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designers","efficiency"); 
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

	

	
	$tdataMonthly_Report_Designers["efficiency"] = $fdata;
//	performance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "performance";
	$fdata["GoodName"] = "performance";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designers","performance"); 
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
	$fdata["FullName"] = "(1-(((27000*(COUNT(DISTINCT `work_date`)))-(SUM(designer_time)))/(27000*(COUNT(DISTINCT `work_date`)))))*(((SUM(estimated_time))/(SUM(designer_time))))*100";
	
		
		
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

	

	
	$tdataMonthly_Report_Designers["performance"] = $fdata;
//	work_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "work_type";
	$fdata["GoodName"] = "work_type";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Monthly_Report_Designers","work_type"); 
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

	

	
	$tdataMonthly_Report_Designers["work_type"] = $fdata;

	
$tables_data["Monthly Report Designers"]=&$tdataMonthly_Report_Designers;
$field_labels["Monthly_Report_Designers"] = &$fieldLabelsMonthly_Report_Designers;
$fieldToolTips["Monthly Report Designers"] = &$fieldToolTipsMonthly_Report_Designers;
$page_titles["Monthly_Report_Designers"] = &$pageTitlesMonthly_Report_Designers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Monthly Report Designers"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Monthly Report Designers"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Monthly_Report_Designers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_date,  team_id,  designer_name,  COUNT(DISTINCT `work_date`) AS dayes,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  SEC_TO_TIME((27000*(COUNT(DISTINCT `work_date`)))-SUM(designer_time)) AS idle_time,  (((27000*(COUNT(DISTINCT `work_date`)))-(SUM(designer_time)))/(27000*(COUNT(DISTINCT `work_date`))))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  (1-(((27000*(COUNT(DISTINCT `work_date`)))-(SUM(designer_time)))/(27000*(COUNT(DISTINCT `work_date`)))))*(((SUM(estimated_time))/(SUM(designer_time))))*100 AS performance,  work_type";
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
	"m_srcTableName" => "Monthly Report Designers"
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
	"m_srcTableName" => "Monthly Report Designers"
));

$proto5["m_sql"] = "work_date";
$proto5["m_srcTableName"] = "Monthly Report Designers";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Monthly Report Designers"
));

$proto7["m_sql"] = "team_id";
$proto7["m_srcTableName"] = "Monthly Report Designers";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Monthly Report Designers"
));

$proto9["m_sql"] = "designer_name";
$proto9["m_srcTableName"] = "Monthly Report Designers";
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
$proto11["m_srcTableName"] = "Monthly Report Designers";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "dayes";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_SUM";
$proto15["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total_images_counted",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Monthly Report Designers"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "SUM(total_images_counted)";
$proto14["m_srcTableName"] = "Monthly Report Designers";
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
$proto17["m_srcTableName"] = "Monthly Report Designers";
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
$proto20["m_srcTableName"] = "Monthly Report Designers";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "Total_time";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$proto24=array();
$proto24["m_functiontype"] = "SQLF_CUSTOM";
$proto24["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(27000*(COUNT(DISTINCT `work_date`)))-SUM(designer_time)"
));

$proto24["m_arguments"][]=$obj;
$proto24["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto24);

$proto23["m_sql"] = "SEC_TO_TIME((27000*(COUNT(DISTINCT `work_date`)))-SUM(designer_time))";
$proto23["m_srcTableName"] = "Monthly Report Designers";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "idle_time";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(((27000*(COUNT(DISTINCT `work_date`)))-(SUM(designer_time)))/(27000*(COUNT(DISTINCT `work_date`))))*100"
));

$proto26["m_sql"] = "(((27000*(COUNT(DISTINCT `work_date`)))-(SUM(designer_time)))/(27000*(COUNT(DISTINCT `work_date`))))*100";
$proto26["m_srcTableName"] = "Monthly Report Designers";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "idle_p";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((SUM(estimated_time))/(SUM(designer_time)))*100"
));

$proto28["m_sql"] = "((SUM(estimated_time))/(SUM(designer_time)))*100";
$proto28["m_srcTableName"] = "Monthly Report Designers";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(1-(((27000*(COUNT(DISTINCT `work_date`)))-(SUM(designer_time)))/(27000*(COUNT(DISTINCT `work_date`)))))*(((SUM(estimated_time))/(SUM(designer_time))))*100"
));

$proto30["m_sql"] = "(1-(((27000*(COUNT(DISTINCT `work_date`)))-(SUM(designer_time)))/(27000*(COUNT(DISTINCT `work_date`)))))*(((SUM(estimated_time))/(SUM(designer_time))))*100";
$proto30["m_srcTableName"] = "Monthly Report Designers";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "performance";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Monthly Report Designers"
));

$proto32["m_sql"] = "work_type";
$proto32["m_srcTableName"] = "Monthly Report Designers";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "designer_report";
$proto35["m_srcTableName"] = "Monthly Report Designers";
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
$proto34["m_srcTableName"] = "Monthly Report Designers";
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
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Monthly Report Designers"
));

$proto41["m_column"]=$obj;
$obj = new SQLGroupByItem($proto41);

$proto0["m_groupby"][]=$obj;
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Monthly Report Designers"
));

$proto43["m_column"]=$obj;
$obj = new SQLGroupByItem($proto43);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto45=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Monthly Report Designers"
));

$proto45["m_column"]=$obj;
$proto45["m_bAsc"] = 0;
$proto45["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto45);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Monthly Report Designers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Monthly_Report_Designers = createSqlQuery_Monthly_Report_Designers();


	
												
	
$tdataMonthly_Report_Designers[".sqlquery"] = $queryData_Monthly_Report_Designers;

$tableEvents["Monthly Report Designers"] = new eventsBase;
$tdataMonthly_Report_Designers[".hasEvents"] = false;

?>