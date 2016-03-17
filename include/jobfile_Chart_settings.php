<?php
require_once(getabspath("classes/cipherer.php"));




$tdatajobfile_Chart = array();	
	$tdatajobfile_Chart[".ShortName"] = "jobfile_Chart";
	$tdatajobfile_Chart[".OwnerID"] = "";
	$tdatajobfile_Chart[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsjobfile_Chart = array();
$fieldToolTipsjobfile_Chart = array();
$pageTitlesjobfile_Chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsjobfile_Chart["English"] = array();
	$fieldToolTipsjobfile_Chart["English"] = array();
	$pageTitlesjobfile_Chart["English"] = array();
	$fieldLabelsjobfile_Chart["English"]["team_id"] = "Team Id";
	$fieldToolTipsjobfile_Chart["English"]["team_id"] = "";
	$fieldLabelsjobfile_Chart["English"]["designer_name"] = "Designer Name";
	$fieldToolTipsjobfile_Chart["English"]["designer_name"] = "";
	$fieldLabelsjobfile_Chart["English"]["days"] = "Days";
	$fieldToolTipsjobfile_Chart["English"]["days"] = "";
	$fieldLabelsjobfile_Chart["English"]["total_images"] = "Total Images";
	$fieldToolTipsjobfile_Chart["English"]["total_images"] = "";
	$fieldLabelsjobfile_Chart["English"]["eta_total"] = "Eta Total";
	$fieldToolTipsjobfile_Chart["English"]["eta_total"] = "";
	$fieldLabelsjobfile_Chart["English"]["Total_time"] = "Total Time";
	$fieldToolTipsjobfile_Chart["English"]["Total_time"] = "";
	$fieldLabelsjobfile_Chart["English"]["idle_time"] = "Idle Time";
	$fieldToolTipsjobfile_Chart["English"]["idle_time"] = "";
	$fieldLabelsjobfile_Chart["English"]["idle_p"] = "Idle P";
	$fieldToolTipsjobfile_Chart["English"]["idle_p"] = "";
	$fieldLabelsjobfile_Chart["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsjobfile_Chart["English"]["efficiency"] = "";
	$fieldLabelsjobfile_Chart["English"]["performence"] = "Performence";
	$fieldToolTipsjobfile_Chart["English"]["performence"] = "";
	$fieldLabelsjobfile_Chart["English"]["work_type"] = "Work Type";
	$fieldToolTipsjobfile_Chart["English"]["work_type"] = "";
	$fieldLabelsjobfile_Chart["English"]["DATE_work_date_"] = "DATE(work Date)";
	$fieldToolTipsjobfile_Chart["English"]["DATE(work_date)"] = "";
	$fieldLabelsjobfile_Chart["English"]["work_date"] = "Work Date";
	$fieldToolTipsjobfile_Chart["English"]["work_date"] = "";
	if (count($fieldToolTipsjobfile_Chart["English"]))
		$tdatajobfile_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsjobfile_Chart[""] = array();
	$fieldToolTipsjobfile_Chart[""] = array();
	$pageTitlesjobfile_Chart[""] = array();
	$fieldLabelsjobfile_Chart[""]["team_id"] = "Team Id";
	$fieldToolTipsjobfile_Chart[""]["team_id"] = "";
	$fieldLabelsjobfile_Chart[""]["designer_name"] = "Designer Name";
	$fieldToolTipsjobfile_Chart[""]["designer_name"] = "";
	$fieldLabelsjobfile_Chart[""]["days"] = "Days";
	$fieldToolTipsjobfile_Chart[""]["days"] = "";
	$fieldLabelsjobfile_Chart[""]["total_images"] = "Total Images";
	$fieldToolTipsjobfile_Chart[""]["total_images"] = "";
	$fieldLabelsjobfile_Chart[""]["eta_total"] = "Eta Total";
	$fieldToolTipsjobfile_Chart[""]["eta_total"] = "";
	$fieldLabelsjobfile_Chart[""]["Total_time"] = "Total Time";
	$fieldToolTipsjobfile_Chart[""]["Total_time"] = "";
	$fieldLabelsjobfile_Chart[""]["idle_time"] = "Idle Time";
	$fieldToolTipsjobfile_Chart[""]["idle_time"] = "";
	$fieldLabelsjobfile_Chart[""]["idle_p"] = "Idle P";
	$fieldToolTipsjobfile_Chart[""]["idle_p"] = "";
	$fieldLabelsjobfile_Chart[""]["efficiency"] = "Efficiency";
	$fieldToolTipsjobfile_Chart[""]["efficiency"] = "";
	$fieldLabelsjobfile_Chart[""]["performence"] = "Performence";
	$fieldToolTipsjobfile_Chart[""]["performence"] = "";
	$fieldLabelsjobfile_Chart[""]["work_type"] = "Work Type";
	$fieldToolTipsjobfile_Chart[""]["work_type"] = "";
	$fieldLabelsjobfile_Chart[""]["DATE_work_date_"] = "DATE(work Date)";
	$fieldToolTipsjobfile_Chart[""]["DATE(work_date)"] = "";
	$fieldLabelsjobfile_Chart[""]["work_date"] = "Work Date";
	$fieldToolTipsjobfile_Chart[""]["work_date"] = "";
	if (count($fieldToolTipsjobfile_Chart[""]))
		$tdatajobfile_Chart[".isUseToolTips"] = true;
}
	
	
	$tdatajobfile_Chart[".NCSearch"] = true;

	$tdatajobfile_Chart[".ChartRefreshTime"] = 0;


$tdatajobfile_Chart[".shortTableName"] = "jobfile_Chart";
$tdatajobfile_Chart[".nSecOptions"] = 0;
$tdatajobfile_Chart[".recsPerRowList"] = 1;
$tdatajobfile_Chart[".recsPerRowPrint"] = 1;
$tdatajobfile_Chart[".mainTableOwnerID"] = "";
$tdatajobfile_Chart[".moveNext"] = 1;
$tdatajobfile_Chart[".entityType"] = 3;

$tdatajobfile_Chart[".strOriginalTableName"] = "jobfile";




$tdatajobfile_Chart[".showAddInPopup"] = false;

$tdatajobfile_Chart[".showEditInPopup"] = false;

$tdatajobfile_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatajobfile_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatajobfile_Chart[".fieldsForRegister"] = array();

$tdatajobfile_Chart[".listAjax"] = false;

	$tdatajobfile_Chart[".audit"] = false;

	$tdatajobfile_Chart[".locking"] = false;


$tdatajobfile_Chart[".add"] = true;
$tdatajobfile_Chart[".afterAddAction"] = 1;
$tdatajobfile_Chart[".closePopupAfterAdd"] = 1;
$tdatajobfile_Chart[".afterAddActionDetTable"] = "";

$tdatajobfile_Chart[".list"] = true;

$tdatajobfile_Chart[".inlineAdd"] = true;





$tdatajobfile_Chart[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatajobfile_Chart[".searchSaving"] = false;
//

$tdatajobfile_Chart[".showSearchPanel"] = true;
		$tdatajobfile_Chart[".flexibleSearch"] = true;		

if (isMobile())
	$tdatajobfile_Chart[".isUseAjaxSuggest"] = false;
else 
	$tdatajobfile_Chart[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdatajobfile_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajobfile_Chart[".isUseTimeForSearch"] = false;





$tdatajobfile_Chart[".allSearchFields"] = array();
$tdatajobfile_Chart[".filterFields"] = array();
$tdatajobfile_Chart[".requiredSearchFields"] = array();

$tdatajobfile_Chart[".allSearchFields"][] = "DATE(work_date)";
	$tdatajobfile_Chart[".allSearchFields"][] = "team_id";
	$tdatajobfile_Chart[".allSearchFields"][] = "designer_name";
	$tdatajobfile_Chart[".allSearchFields"][] = "work_date";
	
$tdatajobfile_Chart[".filterFields"][] = "designer_name";	

$tdatajobfile_Chart[".googleLikeFields"] = array();
$tdatajobfile_Chart[".googleLikeFields"][] = "DATE(work_date)";
$tdatajobfile_Chart[".googleLikeFields"][] = "team_id";
$tdatajobfile_Chart[".googleLikeFields"][] = "designer_name";
$tdatajobfile_Chart[".googleLikeFields"][] = "days";
$tdatajobfile_Chart[".googleLikeFields"][] = "total_images";
$tdatajobfile_Chart[".googleLikeFields"][] = "eta_total";
$tdatajobfile_Chart[".googleLikeFields"][] = "Total_time";
$tdatajobfile_Chart[".googleLikeFields"][] = "idle_time";
$tdatajobfile_Chart[".googleLikeFields"][] = "idle_p";
$tdatajobfile_Chart[".googleLikeFields"][] = "efficiency";
$tdatajobfile_Chart[".googleLikeFields"][] = "performence";
$tdatajobfile_Chart[".googleLikeFields"][] = "work_type";
$tdatajobfile_Chart[".googleLikeFields"][] = "work_date";


$tdatajobfile_Chart[".advSearchFields"] = array();
$tdatajobfile_Chart[".advSearchFields"][] = "DATE(work_date)";
$tdatajobfile_Chart[".advSearchFields"][] = "team_id";
$tdatajobfile_Chart[".advSearchFields"][] = "designer_name";
$tdatajobfile_Chart[".advSearchFields"][] = "work_date";

$tdatajobfile_Chart[".tableType"] = "chart";

$tdatajobfile_Chart[".printerPageOrientation"] = 0;
$tdatajobfile_Chart[".nPrinterPageScale"] = 100;

$tdatajobfile_Chart[".nPrinterSplitRecords"] = 40;

$tdatajobfile_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdatajobfile_Chart[".geocodingEnabled"] = false;



// chart settings
$tdatajobfile_Chart[".chartType"] = "2DBar";
// end of chart settings

	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatajobfile_Chart[".strOrderBy"] = $tstrOrderBy;

$tdatajobfile_Chart[".orderindexes"] = array();
$tdatajobfile_Chart[".orderindexes"][] = array(13, (0 ? "ASC" : "DESC"), "work_date");

$tdatajobfile_Chart[".sqlHead"] = "SELECT DATE(work_date),  team_id,  designer_name,  COUNT(DISTINCT `work_date`) AS days,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  SEC_TO_TIME((27000*COUNT(DISTINCT `work_date`))-SUM((designer_time))) AS idle_time,  (((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`)))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  (1-(((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`))))*((SUM(estimated_time))/(SUM(designer_time))) * 100 AS performence,  work_type,  work_date AS work_date";
$tdatajobfile_Chart[".sqlFrom"] = "FROM designer_report";
$tdatajobfile_Chart[".sqlWhereExpr"] = "user_group =7";
$tdatajobfile_Chart[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajobfile_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajobfile_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdatajobfile_Chart[".highlightSearchResults"] = true;

$tableKeysjobfile_Chart = array();
$tdatajobfile_Chart[".Keys"] = $tableKeysjobfile_Chart;

$tdatajobfile_Chart[".listFields"] = array();
$tdatajobfile_Chart[".listFields"][] = "DATE(work_date)";
$tdatajobfile_Chart[".listFields"][] = "team_id";
$tdatajobfile_Chart[".listFields"][] = "designer_name";
$tdatajobfile_Chart[".listFields"][] = "days";
$tdatajobfile_Chart[".listFields"][] = "total_images";
$tdatajobfile_Chart[".listFields"][] = "eta_total";
$tdatajobfile_Chart[".listFields"][] = "Total_time";
$tdatajobfile_Chart[".listFields"][] = "idle_time";
$tdatajobfile_Chart[".listFields"][] = "idle_p";
$tdatajobfile_Chart[".listFields"][] = "efficiency";
$tdatajobfile_Chart[".listFields"][] = "performence";
$tdatajobfile_Chart[".listFields"][] = "work_type";
$tdatajobfile_Chart[".listFields"][] = "work_date";

$tdatajobfile_Chart[".hideMobileList"] = array();


$tdatajobfile_Chart[".viewFields"] = array();
$tdatajobfile_Chart[".viewFields"][] = "DATE(work_date)";
$tdatajobfile_Chart[".viewFields"][] = "team_id";
$tdatajobfile_Chart[".viewFields"][] = "designer_name";
$tdatajobfile_Chart[".viewFields"][] = "days";
$tdatajobfile_Chart[".viewFields"][] = "total_images";
$tdatajobfile_Chart[".viewFields"][] = "eta_total";
$tdatajobfile_Chart[".viewFields"][] = "Total_time";
$tdatajobfile_Chart[".viewFields"][] = "idle_time";
$tdatajobfile_Chart[".viewFields"][] = "idle_p";
$tdatajobfile_Chart[".viewFields"][] = "efficiency";
$tdatajobfile_Chart[".viewFields"][] = "performence";
$tdatajobfile_Chart[".viewFields"][] = "work_type";
$tdatajobfile_Chart[".viewFields"][] = "work_date";

$tdatajobfile_Chart[".addFields"] = array();

$tdatajobfile_Chart[".masterListFields"] = array();
$tdatajobfile_Chart[".masterListFields"][] = "DATE(work_date)";
$tdatajobfile_Chart[".masterListFields"][] = "team_id";
$tdatajobfile_Chart[".masterListFields"][] = "designer_name";
$tdatajobfile_Chart[".masterListFields"][] = "days";
$tdatajobfile_Chart[".masterListFields"][] = "total_images";
$tdatajobfile_Chart[".masterListFields"][] = "eta_total";
$tdatajobfile_Chart[".masterListFields"][] = "Total_time";
$tdatajobfile_Chart[".masterListFields"][] = "idle_time";
$tdatajobfile_Chart[".masterListFields"][] = "idle_p";
$tdatajobfile_Chart[".masterListFields"][] = "efficiency";
$tdatajobfile_Chart[".masterListFields"][] = "performence";
$tdatajobfile_Chart[".masterListFields"][] = "work_type";
$tdatajobfile_Chart[".masterListFields"][] = "work_date";

$tdatajobfile_Chart[".inlineAddFields"] = array();

$tdatajobfile_Chart[".editFields"] = array();

$tdatajobfile_Chart[".inlineEditFields"] = array();

$tdatajobfile_Chart[".exportFields"] = array();
$tdatajobfile_Chart[".exportFields"][] = "DATE(work_date)";
$tdatajobfile_Chart[".exportFields"][] = "team_id";
$tdatajobfile_Chart[".exportFields"][] = "designer_name";
$tdatajobfile_Chart[".exportFields"][] = "days";
$tdatajobfile_Chart[".exportFields"][] = "total_images";
$tdatajobfile_Chart[".exportFields"][] = "eta_total";
$tdatajobfile_Chart[".exportFields"][] = "Total_time";
$tdatajobfile_Chart[".exportFields"][] = "idle_time";
$tdatajobfile_Chart[".exportFields"][] = "idle_p";
$tdatajobfile_Chart[".exportFields"][] = "efficiency";
$tdatajobfile_Chart[".exportFields"][] = "performence";
$tdatajobfile_Chart[".exportFields"][] = "work_type";
$tdatajobfile_Chart[".exportFields"][] = "work_date";

$tdatajobfile_Chart[".importFields"] = array();
$tdatajobfile_Chart[".importFields"][] = "DATE(work_date)";
$tdatajobfile_Chart[".importFields"][] = "team_id";
$tdatajobfile_Chart[".importFields"][] = "designer_name";
$tdatajobfile_Chart[".importFields"][] = "days";
$tdatajobfile_Chart[".importFields"][] = "total_images";
$tdatajobfile_Chart[".importFields"][] = "eta_total";
$tdatajobfile_Chart[".importFields"][] = "Total_time";
$tdatajobfile_Chart[".importFields"][] = "idle_time";
$tdatajobfile_Chart[".importFields"][] = "idle_p";
$tdatajobfile_Chart[".importFields"][] = "efficiency";
$tdatajobfile_Chart[".importFields"][] = "performence";
$tdatajobfile_Chart[".importFields"][] = "work_type";
$tdatajobfile_Chart[".importFields"][] = "work_date";

$tdatajobfile_Chart[".printFields"] = array();
$tdatajobfile_Chart[".printFields"][] = "DATE(work_date)";
$tdatajobfile_Chart[".printFields"][] = "team_id";
$tdatajobfile_Chart[".printFields"][] = "designer_name";
$tdatajobfile_Chart[".printFields"][] = "days";
$tdatajobfile_Chart[".printFields"][] = "total_images";
$tdatajobfile_Chart[".printFields"][] = "eta_total";
$tdatajobfile_Chart[".printFields"][] = "Total_time";
$tdatajobfile_Chart[".printFields"][] = "idle_time";
$tdatajobfile_Chart[".printFields"][] = "idle_p";
$tdatajobfile_Chart[".printFields"][] = "efficiency";
$tdatajobfile_Chart[".printFields"][] = "performence";
$tdatajobfile_Chart[".printFields"][] = "work_type";
$tdatajobfile_Chart[".printFields"][] = "work_date";

//	DATE(work_date)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DATE(work_date)";
	$fdata["GoodName"] = "DATE_work_date_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("jobfile_Chart","DATE_work_date_"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DATE(work_date)"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE(work_date)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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

	

	
	$tdatajobfile_Chart["DATE(work_date)"] = $fdata;
//	team_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team_id";
	$fdata["GoodName"] = "team_id";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("jobfile_Chart","team_id"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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

	

	
	$tdatajobfile_Chart["team_id"] = $fdata;
//	designer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer_name";
	$fdata["GoodName"] = "designer_name";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("jobfile_Chart","designer_name"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
//Filters settings
	$fdata["filterTotals"] = 0;	
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "days";	
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;
	
		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;
	
				
		
	
//end of Filters settings	

	
	$tdatajobfile_Chart["designer_name"] = $fdata;
//	days
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "days";
	$fdata["GoodName"] = "days";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("jobfile_Chart","days"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
	
	
	

	

	
	$tdatajobfile_Chart["days"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("jobfile_Chart","total_images"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_images"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(total_images_counted)";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
	
	
	

	

	
	$tdatajobfile_Chart["total_images"] = $fdata;
//	eta_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "eta_total";
	$fdata["GoodName"] = "eta_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("jobfile_Chart","eta_total"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
	
	
	

	

	
	$tdatajobfile_Chart["eta_total"] = $fdata;
//	Total_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Total_time";
	$fdata["GoodName"] = "Total_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("jobfile_Chart","Total_time"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
	
	
	

	

	
	$tdatajobfile_Chart["Total_time"] = $fdata;
//	idle_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idle_time";
	$fdata["GoodName"] = "idle_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("jobfile_Chart","idle_time"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idle_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME((27000*COUNT(DISTINCT `work_date`))-SUM((designer_time)))";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
	
	
	

	

	
	$tdatajobfile_Chart["idle_time"] = $fdata;
//	idle_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "idle_p";
	$fdata["GoodName"] = "idle_p";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("jobfile_Chart","idle_p"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idle_p"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`)))*100";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
	
	
	

	

	
	$tdatajobfile_Chart["idle_p"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("jobfile_Chart","efficiency"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
	
	
	

	

	
	$tdatajobfile_Chart["efficiency"] = $fdata;
//	performence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "performence";
	$fdata["GoodName"] = "performence";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("jobfile_Chart","performence"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "performence"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(1-(((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`))))*((SUM(estimated_time))/(SUM(designer_time))) * 100";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
	
	
	

	

	
	$tdatajobfile_Chart["performence"] = $fdata;
//	work_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "work_type";
	$fdata["GoodName"] = "work_type";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("jobfile_Chart","work_type"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
	
	
	

	

	
	$tdatajobfile_Chart["work_type"] = $fdata;
//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("jobfile_Chart","work_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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

	

	
	$tdatajobfile_Chart["work_date"] = $fdata;

	$tdatajobfile_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">jobfile Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_bar</attr>
		</attr>
		
		<attr value="parameters">';
	$tdatajobfile_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">performence</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdatajobfile_Chart[".chartXml"] .= '</attr>';
	$tdatajobfile_Chart[".chartXml"] .= '<attr value="1">
			<attr value="name">total_images</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdatajobfile_Chart[".chartXml"] .= '</attr>';
	$tdatajobfile_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">designer_name</attr>
	</attr>';
	$tdatajobfile_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';
	$tdatajobfile_Chart[".chartXml"] .= '<attr value="scolor11">FF0000</attr>
			<attr value="scolor12">FF0000</attr>';
	$tdatajobfile_Chart[".chartXml"] .= '<attr value="scolor21">008000</attr>
			<attr value="scolor22">008000</attr>';

	$tdatajobfile_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("jobfile Chart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("client_id").'</attr>

<attr value="color51">49563A</attr>
<attr value="color52">49563A</attr>
<attr value="color61">49563A</attr>
<attr value="color62">49563A</attr>
<attr value="color71">C7CDC1</attr>
<attr value="color72">C7CDC1</attr>
<attr value="color81">ECF0E8</attr>
<attr value="color82">ECF0E8</attr>
<attr value="color91">68838B</attr>
<attr value="color92">68838B</attr>
<attr value="color101">48505A</attr>
<attr value="color102">48505A</attr>
<attr value="color111">45595F</attr>
<attr value="color112">45595F</attr>
<attr value="color121"></attr>
<attr value="color122"></attr>
<attr value="color131">000000</attr>
<attr value="color132">000000</attr>
<attr value="color141">000000</attr>
<attr value="color142">000000</attr>

<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="saxes">true</attr>
<attr value="slog">true</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>
<attr value="cscroll">true</attr>
<attr value="maxbarscroll">10</attr>';
$tdatajobfile_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatajobfile_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">DATE(work_date)</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("jobfile_Chart","DATE_work_date_")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajobfile_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">team_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("jobfile_Chart","team_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajobfile_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">designer_name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("jobfile_Chart","designer_name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajobfile_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">days</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("jobfile_Chart","days")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajobfile_Chart[".chartXml"] .= '<attr value="4">
		<attr value="name">total_images</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("jobfile_Chart","total_images")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajobfile_Chart[".chartXml"] .= '<attr value="5">
		<attr value="name">eta_total</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("jobfile_Chart","eta_total")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajobfile_Chart[".chartXml"] .= '<attr value="6">
		<attr value="name">Total_time</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("jobfile_Chart","Total_time")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajobfile_Chart[".chartXml"] .= '<attr value="7">
		<attr value="name">idle_time</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("jobfile_Chart","idle_time")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajobfile_Chart[".chartXml"] .= '<attr value="8">
		<attr value="name">idle_p</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("jobfile_Chart","idle_p")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajobfile_Chart[".chartXml"] .= '<attr value="9">
		<attr value="name">efficiency</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("jobfile_Chart","efficiency")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajobfile_Chart[".chartXml"] .= '<attr value="10">
		<attr value="name">performence</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("jobfile_Chart","performence")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajobfile_Chart[".chartXml"] .= '<attr value="11">
		<attr value="name">work_type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("jobfile_Chart","work_type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajobfile_Chart[".chartXml"] .= '<attr value="12">
		<attr value="name">work_date</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("jobfile_Chart","work_date")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatajobfile_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">jobfile Chart</attr>
<attr value="short_table_name">jobfile_Chart</attr>
</attr>

</chart>';
	
$tables_data["jobfile Chart"]=&$tdatajobfile_Chart;
$field_labels["jobfile_Chart"] = &$fieldLabelsjobfile_Chart;
$fieldToolTips["jobfile Chart"] = &$fieldToolTipsjobfile_Chart;
$page_titles["jobfile_Chart"] = &$pageTitlesjobfile_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["jobfile Chart"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["jobfile Chart"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_jobfile_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DATE(work_date),  team_id,  designer_name,  COUNT(DISTINCT `work_date`) AS days,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  SEC_TO_TIME((27000*COUNT(DISTINCT `work_date`))-SUM((designer_time))) AS idle_time,  (((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`)))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  (1-(((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`))))*((SUM(estimated_time))/(SUM(designer_time))) * 100 AS performence,  work_type,  work_date AS work_date";
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
	"m_srcTableName" => "jobfile Chart"
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
			$proto6=array();
$proto6["m_functiontype"] = "SQLF_CUSTOM";
$proto6["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "work_date"
));

$proto6["m_arguments"][]=$obj;
$proto6["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto6);

$proto5["m_sql"] = "DATE(work_date)";
$proto5["m_srcTableName"] = "jobfile Chart";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "jobfile Chart"
));

$proto8["m_sql"] = "team_id";
$proto8["m_srcTableName"] = "jobfile Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "jobfile Chart"
));

$proto10["m_sql"] = "designer_name";
$proto10["m_srcTableName"] = "jobfile Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_COUNT";
$proto13["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "DISTINCT `work_date`"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "COUNT(DISTINCT `work_date`)";
$proto12["m_srcTableName"] = "jobfile Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "days";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$proto16=array();
$proto16["m_functiontype"] = "SQLF_SUM";
$proto16["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total_images_counted",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "jobfile Chart"
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "SUM(total_images_counted)";
$proto15["m_srcTableName"] = "jobfile Chart";
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
$proto18["m_srcTableName"] = "jobfile Chart";
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
$proto21["m_srcTableName"] = "jobfile Chart";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "Total_time";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$proto25=array();
$proto25["m_functiontype"] = "SQLF_CUSTOM";
$proto25["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(27000*COUNT(DISTINCT `work_date`))-SUM((designer_time))"
));

$proto25["m_arguments"][]=$obj;
$proto25["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto25);

$proto24["m_sql"] = "SEC_TO_TIME((27000*COUNT(DISTINCT `work_date`))-SUM((designer_time)))";
$proto24["m_srcTableName"] = "jobfile Chart";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "idle_time";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`)))*100"
));

$proto27["m_sql"] = "(((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`)))*100";
$proto27["m_srcTableName"] = "jobfile Chart";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "idle_p";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((SUM(estimated_time))/(SUM(designer_time)))*100"
));

$proto29["m_sql"] = "((SUM(estimated_time))/(SUM(designer_time)))*100";
$proto29["m_srcTableName"] = "jobfile Chart";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(1-(((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`))))*((SUM(estimated_time))/(SUM(designer_time))) * 100"
));

$proto31["m_sql"] = "(1-(((27000*COUNT(DISTINCT `work_date`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `work_date`))))*((SUM(estimated_time))/(SUM(designer_time))) * 100";
$proto31["m_srcTableName"] = "jobfile Chart";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "performence";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "jobfile Chart"
));

$proto33["m_sql"] = "work_type";
$proto33["m_srcTableName"] = "jobfile Chart";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "jobfile Chart"
));

$proto35["m_sql"] = "work_date";
$proto35["m_srcTableName"] = "jobfile Chart";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "work_date";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "designer_report";
$proto38["m_srcTableName"] = "jobfile Chart";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "report_id";
$proto38["m_columns"][] = "report_reference";
$proto38["m_columns"][] = "work_date";
$proto38["m_columns"][] = "designer_name";
$proto38["m_columns"][] = "team_id";
$proto38["m_columns"][] = "subdiv_id";
$proto38["m_columns"][] = "user_group";
$proto38["m_columns"][] = "pdf_name";
$proto38["m_columns"][] = "estimated_time";
$proto38["m_columns"][] = "designer_time";
$proto38["m_columns"][] = "qc_time";
$proto38["m_columns"][] = "efficiency";
$proto38["m_columns"][] = "total_images_counted";
$proto38["m_columns"][] = "comments";
$proto38["m_columns"][] = "work_type";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "designer_report";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "jobfile Chart";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto41=array();
						$proto42=array();
$proto42["m_functiontype"] = "SQLF_CUSTOM";
$proto42["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "work_date"
));

$proto42["m_arguments"][]=$obj;
$proto42["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto42);

$proto41["m_column"]=$obj;
$obj = new SQLGroupByItem($proto41);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "jobfile Chart"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "jobfile Chart"
));

$proto46["m_column"]=$obj;
$proto46["m_bAsc"] = 0;
$proto46["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto46);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="jobfile Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_jobfile_Chart = createSqlQuery_jobfile_Chart();


	
													
	
$tdatajobfile_Chart[".sqlquery"] = $queryData_jobfile_Chart;

$tableEvents["jobfile Chart"] = new eventsBase;
$tdatajobfile_Chart[".hasEvents"] = false;

?>