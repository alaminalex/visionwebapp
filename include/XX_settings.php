<?php
require_once(getabspath("classes/cipherer.php"));




$tdataXX = array();	
	$tdataXX[".truncateText"] = true;
	$tdataXX[".NumberOfChars"] = 256; 
	$tdataXX[".ShortName"] = "XX";
	$tdataXX[".OwnerID"] = "";
	$tdataXX[".OriginalTable"] = "designer_report";

//	field labels
$fieldLabelsXX = array();
$fieldToolTipsXX = array();
$pageTitlesXX = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsXX["English"] = array();
	$fieldToolTipsXX["English"] = array();
	$pageTitlesXX["English"] = array();
	$fieldLabelsXX["English"]["work_date"] = "Work Date";
	$fieldToolTipsXX["English"]["work_date"] = "";
	$fieldLabelsXX["English"]["designer_name"] = "Designer Name";
	$fieldToolTipsXX["English"]["designer_name"] = "";
	$fieldLabelsXX["English"]["work_type"] = "Work Type";
	$fieldToolTipsXX["English"]["work_type"] = "";
	$fieldLabelsXX["English"]["Total_time"] = "Total Time";
	$fieldToolTipsXX["English"]["Total_time"] = "";
	$fieldLabelsXX["English"]["total_images"] = "Total Images";
	$fieldToolTipsXX["English"]["total_images"] = "";
	$fieldLabelsXX["English"]["idle_time"] = "Idle Time";
	$fieldToolTipsXX["English"]["idle_time"] = "";
	$fieldLabelsXX["English"]["avg_eta"] = "Avg Eta";
	$fieldToolTipsXX["English"]["avg_eta"] = "";
	$fieldLabelsXX["English"]["avg_time"] = "Avg Time";
	$fieldToolTipsXX["English"]["avg_time"] = "";
	$fieldLabelsXX["English"]["efficiency_avg"] = "Efficiency Avg";
	$fieldToolTipsXX["English"]["efficiency_avg"] = "";
	$fieldLabelsXX["English"]["idle_p"] = "Idle P";
	$fieldToolTipsXX["English"]["idle_p"] = "";
	$fieldLabelsXX["English"]["performence"] = "Performence";
	$fieldToolTipsXX["English"]["performence"] = "";
	if (count($fieldToolTipsXX["English"]))
		$tdataXX[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsXX[""] = array();
	$fieldToolTipsXX[""] = array();
	$pageTitlesXX[""] = array();
	$fieldLabelsXX[""]["work_date"] = "Work Date";
	$fieldToolTipsXX[""]["work_date"] = "";
	$fieldLabelsXX[""]["designer_name"] = "Designer Name";
	$fieldToolTipsXX[""]["designer_name"] = "";
	$fieldLabelsXX[""]["work_type"] = "Work Type";
	$fieldToolTipsXX[""]["work_type"] = "";
	$fieldLabelsXX[""]["Total_time"] = "Total Time";
	$fieldToolTipsXX[""]["Total_time"] = "";
	$fieldLabelsXX[""]["total_images"] = "Total Images";
	$fieldToolTipsXX[""]["total_images"] = "";
	$fieldLabelsXX[""]["idle_time"] = "Idle Time";
	$fieldToolTipsXX[""]["idle_time"] = "";
	$fieldLabelsXX[""]["avg_eta"] = "Avg Eta";
	$fieldToolTipsXX[""]["avg_eta"] = "";
	$fieldLabelsXX[""]["avg_time"] = "Avg Time";
	$fieldToolTipsXX[""]["avg_time"] = "";
	$fieldLabelsXX[""]["efficiency_avg"] = "Efficiency Avg";
	$fieldToolTipsXX[""]["efficiency_avg"] = "";
	$fieldLabelsXX[""]["idle_p"] = "Idle P";
	$fieldToolTipsXX[""]["idle_p"] = "";
	$fieldLabelsXX[""]["performence"] = "Performence";
	$fieldToolTipsXX[""]["performence"] = "";
	if (count($fieldToolTipsXX[""]))
		$tdataXX[".isUseToolTips"] = true;
}
	
	
	$tdataXX[".NCSearch"] = true;



$tdataXX[".shortTableName"] = "XX";
$tdataXX[".nSecOptions"] = 0;
$tdataXX[".recsPerRowList"] = 1;
$tdataXX[".recsPerRowPrint"] = 1;
$tdataXX[".mainTableOwnerID"] = "";
$tdataXX[".moveNext"] = 1;
$tdataXX[".entityType"] = 2;

$tdataXX[".strOriginalTableName"] = "designer_report";




$tdataXX[".showAddInPopup"] = false;

$tdataXX[".showEditInPopup"] = false;

$tdataXX[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataXX[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataXX[".fieldsForRegister"] = array();

$tdataXX[".listAjax"] = false;

	$tdataXX[".audit"] = false;

	$tdataXX[".locking"] = false;


$tdataXX[".add"] = true;
$tdataXX[".afterAddAction"] = 1;
$tdataXX[".closePopupAfterAdd"] = 1;
$tdataXX[".afterAddActionDetTable"] = "";

$tdataXX[".list"] = true;

$tdataXX[".inlineAdd"] = true;


$tdataXX[".exportTo"] = true;

$tdataXX[".printFriendly"] = true;


$tdataXX[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataXX[".searchSaving"] = false;
//

$tdataXX[".showSearchPanel"] = true;
		$tdataXX[".flexibleSearch"] = true;		

if (isMobile())
	$tdataXX[".isUseAjaxSuggest"] = false;
else 
	$tdataXX[".isUseAjaxSuggest"] = true;



																																																																																																																																			
$tdataXX[".addPageEvents"] = false;

// use timepicker for search panel
$tdataXX[".isUseTimeForSearch"] = false;





$tdataXX[".allSearchFields"] = array();
$tdataXX[".filterFields"] = array();
$tdataXX[".requiredSearchFields"] = array();

$tdataXX[".allSearchFields"][] = "designer_name";
	$tdataXX[".allSearchFields"][] = "avg_eta";
	$tdataXX[".allSearchFields"][] = "avg_time";
	$tdataXX[".allSearchFields"][] = "efficiency_avg";
	$tdataXX[".allSearchFields"][] = "total_images";
	$tdataXX[".allSearchFields"][] = "idle_time";
	$tdataXX[".allSearchFields"][] = "idle_p";
	$tdataXX[".allSearchFields"][] = "performence";
	

$tdataXX[".googleLikeFields"] = array();
$tdataXX[".googleLikeFields"][] = "work_date";
$tdataXX[".googleLikeFields"][] = "designer_name";
$tdataXX[".googleLikeFields"][] = "avg_eta";
$tdataXX[".googleLikeFields"][] = "Total_time";
$tdataXX[".googleLikeFields"][] = "avg_time";
$tdataXX[".googleLikeFields"][] = "efficiency_avg";
$tdataXX[".googleLikeFields"][] = "total_images";
$tdataXX[".googleLikeFields"][] = "idle_time";
$tdataXX[".googleLikeFields"][] = "idle_p";
$tdataXX[".googleLikeFields"][] = "performence";
$tdataXX[".googleLikeFields"][] = "work_type";


$tdataXX[".advSearchFields"] = array();
$tdataXX[".advSearchFields"][] = "work_date";
$tdataXX[".advSearchFields"][] = "designer_name";
$tdataXX[".advSearchFields"][] = "avg_eta";
$tdataXX[".advSearchFields"][] = "Total_time";
$tdataXX[".advSearchFields"][] = "avg_time";
$tdataXX[".advSearchFields"][] = "efficiency_avg";
$tdataXX[".advSearchFields"][] = "total_images";
$tdataXX[".advSearchFields"][] = "idle_time";
$tdataXX[".advSearchFields"][] = "idle_p";
$tdataXX[".advSearchFields"][] = "performence";
$tdataXX[".advSearchFields"][] = "work_type";

$tdataXX[".tableType"] = "report";

$tdataXX[".printerPageOrientation"] = 0;
$tdataXX[".nPrinterPageScale"] = 100;

$tdataXX[".nPrinterSplitRecords"] = 40;

$tdataXX[".nPrinterPDFSplitRecords"] = 40;



$tdataXX[".geocodingEnabled"] = false;

//report settings
$tdataXX[".printReportLayout"] = 3;	

$tdataXX[".reportPrintPartitionType"] = 0;	
$tdataXX[".reportPrintGroupsPerPage"] = 3;	
	$tdataXX[".lowGroup"] = 1;



$tdataXX[".reportGroupFields"] = true;
$tdataXX[".pageSize"] = 1;
$tdataXX[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "work_date";
	$rgroupField['groupInterval'] = 5;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataXX[".reportGroupFieldsData"] = $reportGroupFields;


$tdataXX[".isExistTotalFields"] = true;




$tdataXX[".repShowDet"] = true;

$tdataXX[".reportLayout"] = 3;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC, (SUM(efficiency)/SUM(total_images_counted))*(1-
(
(IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200))
)) DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataXX[".strOrderBy"] = $tstrOrderBy;

$tdataXX[".orderindexes"] = array();
$tdataXX[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "work_date");
$tdataXX[".orderindexes"][] = array(10, (0 ? "ASC" : "DESC"), "(SUM(efficiency)/SUM(total_images_counted))*(1-
(
(IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200))
)) ");

$tdataXX[".sqlHead"] = "SELECT work_date,  designer_name,  SEC_TO_TIME(SUM(estimated_time)/SUM(total_images_counted)) AS avg_eta,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  SEC_TO_TIME(SUM(designer_time)/SUM(total_images_counted)) AS avg_time,  SUM(efficiency)/SUM(total_images_counted) AS efficiency_avg,  SUM(total_images_counted) AS total_images,  (IF ((25200-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(25200-SUM(designer_time)))) AS idle_time,  (IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200))*100 AS idle_p,  (SUM(efficiency)/SUM(total_images_counted))*(1-  (  (IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200))  )) AS performence,  work_type";
$tdataXX[".sqlFrom"] = "FROM designer_report";
$tdataXX[".sqlWhereExpr"] = "";
$tdataXX[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataXX[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataXX[".arrGroupsPerPage"] = $arrGPP;

$tdataXX[".highlightSearchResults"] = true;

$tableKeysXX = array();
$tdataXX[".Keys"] = $tableKeysXX;

$tdataXX[".listFields"] = array();
$tdataXX[".listFields"][] = "work_date";
$tdataXX[".listFields"][] = "designer_name";
$tdataXX[".listFields"][] = "avg_eta";
$tdataXX[".listFields"][] = "Total_time";
$tdataXX[".listFields"][] = "avg_time";
$tdataXX[".listFields"][] = "efficiency_avg";
$tdataXX[".listFields"][] = "total_images";
$tdataXX[".listFields"][] = "idle_time";
$tdataXX[".listFields"][] = "idle_p";
$tdataXX[".listFields"][] = "performence";
$tdataXX[".listFields"][] = "work_type";

$tdataXX[".hideMobileList"] = array();


$tdataXX[".viewFields"] = array();
$tdataXX[".viewFields"][] = "work_date";
$tdataXX[".viewFields"][] = "designer_name";
$tdataXX[".viewFields"][] = "avg_eta";
$tdataXX[".viewFields"][] = "Total_time";
$tdataXX[".viewFields"][] = "avg_time";
$tdataXX[".viewFields"][] = "efficiency_avg";
$tdataXX[".viewFields"][] = "total_images";
$tdataXX[".viewFields"][] = "idle_time";
$tdataXX[".viewFields"][] = "idle_p";
$tdataXX[".viewFields"][] = "performence";
$tdataXX[".viewFields"][] = "work_type";

$tdataXX[".addFields"] = array();
$tdataXX[".addFields"][] = "work_date";
$tdataXX[".addFields"][] = "designer_name";
$tdataXX[".addFields"][] = "work_type";

$tdataXX[".masterListFields"] = array();
$tdataXX[".masterListFields"][] = "work_date";
$tdataXX[".masterListFields"][] = "designer_name";
$tdataXX[".masterListFields"][] = "avg_eta";
$tdataXX[".masterListFields"][] = "Total_time";
$tdataXX[".masterListFields"][] = "avg_time";
$tdataXX[".masterListFields"][] = "efficiency_avg";
$tdataXX[".masterListFields"][] = "total_images";
$tdataXX[".masterListFields"][] = "idle_time";
$tdataXX[".masterListFields"][] = "idle_p";
$tdataXX[".masterListFields"][] = "performence";
$tdataXX[".masterListFields"][] = "work_type";

$tdataXX[".inlineAddFields"] = array();
$tdataXX[".inlineAddFields"][] = "work_date";
$tdataXX[".inlineAddFields"][] = "designer_name";
$tdataXX[".inlineAddFields"][] = "work_type";

$tdataXX[".editFields"] = array();
$tdataXX[".editFields"][] = "work_date";
$tdataXX[".editFields"][] = "designer_name";
$tdataXX[".editFields"][] = "work_type";

$tdataXX[".inlineEditFields"] = array();
$tdataXX[".inlineEditFields"][] = "work_date";
$tdataXX[".inlineEditFields"][] = "designer_name";
$tdataXX[".inlineEditFields"][] = "work_type";

$tdataXX[".exportFields"] = array();
$tdataXX[".exportFields"][] = "work_date";
$tdataXX[".exportFields"][] = "designer_name";
$tdataXX[".exportFields"][] = "avg_eta";
$tdataXX[".exportFields"][] = "Total_time";
$tdataXX[".exportFields"][] = "avg_time";
$tdataXX[".exportFields"][] = "efficiency_avg";
$tdataXX[".exportFields"][] = "total_images";
$tdataXX[".exportFields"][] = "idle_time";
$tdataXX[".exportFields"][] = "idle_p";
$tdataXX[".exportFields"][] = "performence";
$tdataXX[".exportFields"][] = "work_type";

$tdataXX[".importFields"] = array();
$tdataXX[".importFields"][] = "work_date";
$tdataXX[".importFields"][] = "designer_name";
$tdataXX[".importFields"][] = "avg_eta";
$tdataXX[".importFields"][] = "Total_time";
$tdataXX[".importFields"][] = "avg_time";
$tdataXX[".importFields"][] = "efficiency_avg";
$tdataXX[".importFields"][] = "total_images";
$tdataXX[".importFields"][] = "idle_time";
$tdataXX[".importFields"][] = "idle_p";
$tdataXX[".importFields"][] = "performence";
$tdataXX[".importFields"][] = "work_type";

$tdataXX[".printFields"] = array();
$tdataXX[".printFields"][] = "work_date";
$tdataXX[".printFields"][] = "designer_name";
$tdataXX[".printFields"][] = "avg_eta";
$tdataXX[".printFields"][] = "Total_time";
$tdataXX[".printFields"][] = "avg_time";
$tdataXX[".printFields"][] = "efficiency_avg";
$tdataXX[".printFields"][] = "total_images";
$tdataXX[".printFields"][] = "idle_time";
$tdataXX[".printFields"][] = "idle_p";
$tdataXX[".printFields"][] = "performence";
$tdataXX[".printFields"][] = "work_type";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("XX","work_date"); 
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
	
	
	
	

	

	
	$tdataXX["work_date"] = $fdata;
//	designer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "designer_name";
	$fdata["GoodName"] = "designer_name";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("XX","designer_name"); 
	$fdata["FieldType"] = 201;
	
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

	

	
	$tdataXX["designer_name"] = $fdata;
//	avg_eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "avg_eta";
	$fdata["GoodName"] = "avg_eta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("XX","avg_eta"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "avg_eta"; 
	
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

	

	
	$tdataXX["avg_eta"] = $fdata;
//	Total_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Total_time";
	$fdata["GoodName"] = "Total_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("XX","Total_time"); 
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
	
	
	
	

	

	
	$tdataXX["Total_time"] = $fdata;
//	avg_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "avg_time";
	$fdata["GoodName"] = "avg_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("XX","avg_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
		$fdata["isTotalMin"] = true;
				// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "avg_time"; 
	
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

	

	
	$tdataXX["avg_time"] = $fdata;
//	efficiency_avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "efficiency_avg";
	$fdata["GoodName"] = "efficiency_avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("XX","efficiency_avg"); 
	$fdata["FieldType"] = 5;
	
		// report field settings
				$fdata["isTotalMax"] = true;	
		// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "efficiency_avg"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(efficiency)/SUM(total_images_counted)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataXX["efficiency_avg"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("XX","total_images"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
				$fdata["isTotalMax"] = true;	
		$fdata["isTotalSum"] = true;	
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

	

	
	$tdataXX["total_images"] = $fdata;
//	idle_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idle_time";
	$fdata["GoodName"] = "idle_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("XX","idle_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
		$fdata["isTotalMin"] = true;
				// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataXX["idle_time"] = $fdata;
//	idle_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "idle_p";
	$fdata["GoodName"] = "idle_p";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("XX","idle_p"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
		$fdata["isTotalMin"] = true;
				// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idle_p"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200))*100";
	
		
		
				$fdata["FieldPermissions"] = true;
	
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataXX["idle_p"] = $fdata;
//	performence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "performence";
	$fdata["GoodName"] = "performence";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("XX","performence"); 
	$fdata["FieldType"] = 5;
	
		// report field settings
				$fdata["isTotalMax"] = true;	
		// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "performence"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(SUM(efficiency)/SUM(total_images_counted))*(1-  (  (IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200))  ))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataXX["performence"] = $fdata;
//	work_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "work_type";
	$fdata["GoodName"] = "work_type";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("XX","work_type"); 
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
	
	
	
	

	

	
	$tdataXX["work_type"] = $fdata;

	
$tables_data["XX"]=&$tdataXX;
$field_labels["XX"] = &$fieldLabelsXX;
$fieldToolTips["XX"] = &$fieldToolTipsXX;
$page_titles["XX"] = &$pageTitlesXX;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["XX"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["XX"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_XX()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_date,  designer_name,  SEC_TO_TIME(SUM(estimated_time)/SUM(total_images_counted)) AS avg_eta,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  SEC_TO_TIME(SUM(designer_time)/SUM(total_images_counted)) AS avg_time,  SUM(efficiency)/SUM(total_images_counted) AS efficiency_avg,  SUM(total_images_counted) AS total_images,  (IF ((25200-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(25200-SUM(designer_time)))) AS idle_time,  (IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200))*100 AS idle_p,  (SUM(efficiency)/SUM(total_images_counted))*(1-  (  (IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200))  )) AS performence,  work_type";
$proto0["m_strFrom"] = "FROM designer_report";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY work_date DESC, (SUM(efficiency)/SUM(total_images_counted))*(1-  (  (IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200))  )) DESC";
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
	"m_srcTableName" => "XX"
));

$proto5["m_sql"] = "work_date";
$proto5["m_srcTableName"] = "XX";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "XX"
));

$proto7["m_sql"] = "designer_name";
$proto7["m_srcTableName"] = "XX";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$proto10=array();
$proto10["m_functiontype"] = "SQLF_CUSTOM";
$proto10["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(estimated_time)/SUM(total_images_counted)"
));

$proto10["m_arguments"][]=$obj;
$proto10["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto10);

$proto9["m_sql"] = "SEC_TO_TIME(SUM(estimated_time)/SUM(total_images_counted))";
$proto9["m_srcTableName"] = "XX";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "avg_eta";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_CUSTOM";
$proto13["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(designer_time)"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "SEC_TO_TIME(SUM(designer_time))";
$proto12["m_srcTableName"] = "XX";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "Total_time";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$proto16=array();
$proto16["m_functiontype"] = "SQLF_CUSTOM";
$proto16["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(designer_time)/SUM(total_images_counted)"
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "SEC_TO_TIME(SUM(designer_time)/SUM(total_images_counted))";
$proto15["m_srcTableName"] = "XX";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "avg_time";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(efficiency)/SUM(total_images_counted)"
));

$proto18["m_sql"] = "SUM(efficiency)/SUM(total_images_counted)";
$proto18["m_srcTableName"] = "XX";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "efficiency_avg";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_SUM";
$proto21["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total_images_counted",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "XX"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "SUM(total_images_counted)";
$proto20["m_srcTableName"] = "XX";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "total_images";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF ((25200-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(25200-SUM(designer_time))))"
));

$proto23["m_sql"] = "(IF ((25200-SUM(designer_time))<0,SEC_TO_TIME(43200-SUM(designer_time)),SEC_TO_TIME(25200-SUM(designer_time))))";
$proto23["m_srcTableName"] = "XX";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "idle_time";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200))*100"
));

$proto25["m_sql"] = "(IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200))*100";
$proto25["m_srcTableName"] = "XX";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "idle_p";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(SUM(efficiency)/SUM(total_images_counted))*(1-  (  (IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200))  ))"
));

$proto27["m_sql"] = "(SUM(efficiency)/SUM(total_images_counted))*(1-  (  (IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200))  ))";
$proto27["m_srcTableName"] = "XX";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "performence";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "XX"
));

$proto29["m_sql"] = "work_type";
$proto29["m_srcTableName"] = "XX";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "designer_report";
$proto32["m_srcTableName"] = "XX";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "report_id";
$proto32["m_columns"][] = "report_reference";
$proto32["m_columns"][] = "work_date";
$proto32["m_columns"][] = "designer_name";
$proto32["m_columns"][] = "pdf_name";
$proto32["m_columns"][] = "estimated_time";
$proto32["m_columns"][] = "designer_time";
$proto32["m_columns"][] = "efficiency";
$proto32["m_columns"][] = "total_images_counted";
$proto32["m_columns"][] = "comments";
$proto32["m_columns"][] = "work_type";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "designer_report";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "XX";
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
	"m_srcTableName" => "XX"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "XX"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "XX"
));

$proto39["m_column"]=$obj;
$proto39["m_bAsc"] = 0;
$proto39["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto39);

$proto0["m_orderby"][]=$obj;					
												$proto41=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(SUM(efficiency)/SUM(total_images_counted))*(1-  (  (IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200))  )) "
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 0;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="XX";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_XX = createSqlQuery_XX();


	
											
	
$tdataXX[".sqlquery"] = $queryData_XX;

$tableEvents["XX"] = new eventsBase;
$tdataXX[".hasEvents"] = false;

?>