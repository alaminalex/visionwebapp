<?php
require_once(getabspath("classes/cipherer.php"));




$tdata14704_Monthly_Report_Designers = array();	
	$tdata14704_Monthly_Report_Designers[".truncateText"] = true;
	$tdata14704_Monthly_Report_Designers[".NumberOfChars"] = 256; 
	$tdata14704_Monthly_Report_Designers[".ShortName"] = "14704_Monthly_Report_Designers";
	$tdata14704_Monthly_Report_Designers[".OwnerID"] = "";
	$tdata14704_Monthly_Report_Designers[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabels14704_Monthly_Report_Designers = array();
$fieldToolTips14704_Monthly_Report_Designers = array();
$pageTitles14704_Monthly_Report_Designers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabels14704_Monthly_Report_Designers["English"] = array();
	$fieldToolTips14704_Monthly_Report_Designers["English"] = array();
	$pageTitles14704_Monthly_Report_Designers["English"] = array();
	$fieldLabels14704_Monthly_Report_Designers["English"]["eta_total"] = "Eta Total";
	$fieldToolTips14704_Monthly_Report_Designers["English"]["eta_total"] = "";
	$fieldLabels14704_Monthly_Report_Designers["English"]["work_date"] = "Work Date";
	$fieldToolTips14704_Monthly_Report_Designers["English"]["work_date"] = "";
	$fieldLabels14704_Monthly_Report_Designers["English"]["team_id"] = "Team Id";
	$fieldToolTips14704_Monthly_Report_Designers["English"]["team_id"] = "";
	$fieldLabels14704_Monthly_Report_Designers["English"]["designer_name"] = "Designer Name";
	$fieldToolTips14704_Monthly_Report_Designers["English"]["designer_name"] = "";
	$fieldLabels14704_Monthly_Report_Designers["English"]["total_images"] = "Total Images";
	$fieldToolTips14704_Monthly_Report_Designers["English"]["total_images"] = "";
	$fieldLabels14704_Monthly_Report_Designers["English"]["Total_time"] = "Total Time";
	$fieldToolTips14704_Monthly_Report_Designers["English"]["Total_time"] = "";
	$fieldLabels14704_Monthly_Report_Designers["English"]["efficiency"] = "Efficiency";
	$fieldToolTips14704_Monthly_Report_Designers["English"]["efficiency"] = "";
	$fieldLabels14704_Monthly_Report_Designers["English"]["idle_time"] = "Idle Time";
	$fieldToolTips14704_Monthly_Report_Designers["English"]["idle_time"] = "";
	$fieldLabels14704_Monthly_Report_Designers["English"]["idle_p"] = "Idle P";
	$fieldToolTips14704_Monthly_Report_Designers["English"]["idle_p"] = "";
	$fieldLabels14704_Monthly_Report_Designers["English"]["work_type"] = "Work Type";
	$fieldToolTips14704_Monthly_Report_Designers["English"]["work_type"] = "";
	$fieldLabels14704_Monthly_Report_Designers["English"]["dayes"] = "Dayes";
	$fieldToolTips14704_Monthly_Report_Designers["English"]["dayes"] = "";
	$fieldLabels14704_Monthly_Report_Designers["English"]["performance"] = "Performance";
	$fieldToolTips14704_Monthly_Report_Designers["English"]["performance"] = "";
	if (count($fieldToolTips14704_Monthly_Report_Designers["English"]))
		$tdata14704_Monthly_Report_Designers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels14704_Monthly_Report_Designers[""] = array();
	$fieldToolTips14704_Monthly_Report_Designers[""] = array();
	$pageTitles14704_Monthly_Report_Designers[""] = array();
	if (count($fieldToolTips14704_Monthly_Report_Designers[""]))
		$tdata14704_Monthly_Report_Designers[".isUseToolTips"] = true;
}
	
	
	$tdata14704_Monthly_Report_Designers[".NCSearch"] = true;



$tdata14704_Monthly_Report_Designers[".shortTableName"] = "14704_Monthly_Report_Designers";
$tdata14704_Monthly_Report_Designers[".nSecOptions"] = 0;
$tdata14704_Monthly_Report_Designers[".recsPerRowList"] = 1;
$tdata14704_Monthly_Report_Designers[".recsPerRowPrint"] = 1;
$tdata14704_Monthly_Report_Designers[".mainTableOwnerID"] = "";
$tdata14704_Monthly_Report_Designers[".moveNext"] = 1;
$tdata14704_Monthly_Report_Designers[".entityType"] = 2;

$tdata14704_Monthly_Report_Designers[".strOriginalTableName"] = "jobfile";




$tdata14704_Monthly_Report_Designers[".showAddInPopup"] = false;

$tdata14704_Monthly_Report_Designers[".showEditInPopup"] = false;

$tdata14704_Monthly_Report_Designers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata14704_Monthly_Report_Designers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata14704_Monthly_Report_Designers[".fieldsForRegister"] = array();

$tdata14704_Monthly_Report_Designers[".listAjax"] = false;

	$tdata14704_Monthly_Report_Designers[".audit"] = false;

	$tdata14704_Monthly_Report_Designers[".locking"] = false;


$tdata14704_Monthly_Report_Designers[".add"] = true;
$tdata14704_Monthly_Report_Designers[".afterAddAction"] = 0;
$tdata14704_Monthly_Report_Designers[".closePopupAfterAdd"] = 1;
$tdata14704_Monthly_Report_Designers[".afterAddActionDetTable"] = "";

$tdata14704_Monthly_Report_Designers[".list"] = true;

$tdata14704_Monthly_Report_Designers[".inlineAdd"] = true;


$tdata14704_Monthly_Report_Designers[".exportTo"] = true;

$tdata14704_Monthly_Report_Designers[".printFriendly"] = true;


$tdata14704_Monthly_Report_Designers[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdata14704_Monthly_Report_Designers[".searchSaving"] = false;
//

$tdata14704_Monthly_Report_Designers[".showSearchPanel"] = true;
		$tdata14704_Monthly_Report_Designers[".flexibleSearch"] = true;		

if (isMobile())
	$tdata14704_Monthly_Report_Designers[".isUseAjaxSuggest"] = false;
else 
	$tdata14704_Monthly_Report_Designers[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdata14704_Monthly_Report_Designers[".addPageEvents"] = false;

// use timepicker for search panel
$tdata14704_Monthly_Report_Designers[".isUseTimeForSearch"] = false;





$tdata14704_Monthly_Report_Designers[".allSearchFields"] = array();
$tdata14704_Monthly_Report_Designers[".filterFields"] = array();
$tdata14704_Monthly_Report_Designers[".requiredSearchFields"] = array();

$tdata14704_Monthly_Report_Designers[".allSearchFields"][] = "work_date";
	$tdata14704_Monthly_Report_Designers[".allSearchFields"][] = "team_id";
	$tdata14704_Monthly_Report_Designers[".allSearchFields"][] = "designer_name";
	$tdata14704_Monthly_Report_Designers[".allSearchFields"][] = "dayes";
	$tdata14704_Monthly_Report_Designers[".allSearchFields"][] = "total_images";
	$tdata14704_Monthly_Report_Designers[".allSearchFields"][] = "eta_total";
	$tdata14704_Monthly_Report_Designers[".allSearchFields"][] = "Total_time";
	$tdata14704_Monthly_Report_Designers[".allSearchFields"][] = "idle_time";
	$tdata14704_Monthly_Report_Designers[".allSearchFields"][] = "idle_p";
	$tdata14704_Monthly_Report_Designers[".allSearchFields"][] = "efficiency";
	$tdata14704_Monthly_Report_Designers[".allSearchFields"][] = "performance";
	$tdata14704_Monthly_Report_Designers[".allSearchFields"][] = "work_type";
	

$tdata14704_Monthly_Report_Designers[".googleLikeFields"] = array();
$tdata14704_Monthly_Report_Designers[".googleLikeFields"][] = "work_date";
$tdata14704_Monthly_Report_Designers[".googleLikeFields"][] = "team_id";
$tdata14704_Monthly_Report_Designers[".googleLikeFields"][] = "designer_name";
$tdata14704_Monthly_Report_Designers[".googleLikeFields"][] = "dayes";
$tdata14704_Monthly_Report_Designers[".googleLikeFields"][] = "total_images";
$tdata14704_Monthly_Report_Designers[".googleLikeFields"][] = "eta_total";
$tdata14704_Monthly_Report_Designers[".googleLikeFields"][] = "Total_time";
$tdata14704_Monthly_Report_Designers[".googleLikeFields"][] = "idle_time";
$tdata14704_Monthly_Report_Designers[".googleLikeFields"][] = "idle_p";
$tdata14704_Monthly_Report_Designers[".googleLikeFields"][] = "efficiency";
$tdata14704_Monthly_Report_Designers[".googleLikeFields"][] = "performance";
$tdata14704_Monthly_Report_Designers[".googleLikeFields"][] = "work_type";


$tdata14704_Monthly_Report_Designers[".advSearchFields"] = array();
$tdata14704_Monthly_Report_Designers[".advSearchFields"][] = "work_date";
$tdata14704_Monthly_Report_Designers[".advSearchFields"][] = "team_id";
$tdata14704_Monthly_Report_Designers[".advSearchFields"][] = "designer_name";
$tdata14704_Monthly_Report_Designers[".advSearchFields"][] = "dayes";
$tdata14704_Monthly_Report_Designers[".advSearchFields"][] = "total_images";
$tdata14704_Monthly_Report_Designers[".advSearchFields"][] = "eta_total";
$tdata14704_Monthly_Report_Designers[".advSearchFields"][] = "Total_time";
$tdata14704_Monthly_Report_Designers[".advSearchFields"][] = "idle_time";
$tdata14704_Monthly_Report_Designers[".advSearchFields"][] = "idle_p";
$tdata14704_Monthly_Report_Designers[".advSearchFields"][] = "efficiency";
$tdata14704_Monthly_Report_Designers[".advSearchFields"][] = "performance";
$tdata14704_Monthly_Report_Designers[".advSearchFields"][] = "work_type";

$tdata14704_Monthly_Report_Designers[".tableType"] = "report";

$tdata14704_Monthly_Report_Designers[".printerPageOrientation"] = 0;
$tdata14704_Monthly_Report_Designers[".nPrinterPageScale"] = 100;

$tdata14704_Monthly_Report_Designers[".nPrinterSplitRecords"] = 40;

$tdata14704_Monthly_Report_Designers[".nPrinterPDFSplitRecords"] = 40;



$tdata14704_Monthly_Report_Designers[".geocodingEnabled"] = false;

//report settings

$tdata14704_Monthly_Report_Designers[".reportPrintPartitionType"] = 0;	
$tdata14704_Monthly_Report_Designers[".reportPrintGroupsPerPage"] = 3;	
	$tdata14704_Monthly_Report_Designers[".lowGroup"] = 2;



$tdata14704_Monthly_Report_Designers[".reportGroupFields"] = true;
$tdata14704_Monthly_Report_Designers[".pageSize"] = 1;
$tdata14704_Monthly_Report_Designers[".showGroupSummaryCount"] = true;
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
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdata14704_Monthly_Report_Designers[".reportGroupFieldsData"] = $reportGroupFields;


$tdata14704_Monthly_Report_Designers[".isExistTotalFields"] = true;




$tdata14704_Monthly_Report_Designers[".repShowDet"] = true;

$tdata14704_Monthly_Report_Designers[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY work_date DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata14704_Monthly_Report_Designers[".strOrderBy"] = $tstrOrderBy;

$tdata14704_Monthly_Report_Designers[".orderindexes"] = array();
$tdata14704_Monthly_Report_Designers[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "work_date");

$tdata14704_Monthly_Report_Designers[".sqlHead"] = "SELECT work_date,  team_id,  designer_name,  COUNT(DISTINCT `work_date`) AS dayes,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  SEC_TO_TIME((27000*(COUNT(DISTINCT `work_date`)))-SUM(designer_time)) AS idle_time,  (((27000*(COUNT(DISTINCT `work_date`)))-(SUM(designer_time)))/(27000*(COUNT(DISTINCT `work_date`))))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  (1-(((27000*(COUNT(DISTINCT `work_date`)))-(SUM(designer_time)))/(27000*(COUNT(DISTINCT `work_date`)))))*(((SUM(estimated_time))/(SUM(designer_time))))*100 AS performance,  work_type";
$tdata14704_Monthly_Report_Designers[".sqlFrom"] = "FROM designer_report";
$tdata14704_Monthly_Report_Designers[".sqlWhereExpr"] = "user_group =7 AND pdf_name =5001";
$tdata14704_Monthly_Report_Designers[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata14704_Monthly_Report_Designers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata14704_Monthly_Report_Designers[".arrGroupsPerPage"] = $arrGPP;

$tdata14704_Monthly_Report_Designers[".highlightSearchResults"] = true;

$tableKeys14704_Monthly_Report_Designers = array();
$tdata14704_Monthly_Report_Designers[".Keys"] = $tableKeys14704_Monthly_Report_Designers;

$tdata14704_Monthly_Report_Designers[".listFields"] = array();
$tdata14704_Monthly_Report_Designers[".listFields"][] = "work_date";
$tdata14704_Monthly_Report_Designers[".listFields"][] = "team_id";
$tdata14704_Monthly_Report_Designers[".listFields"][] = "designer_name";
$tdata14704_Monthly_Report_Designers[".listFields"][] = "dayes";
$tdata14704_Monthly_Report_Designers[".listFields"][] = "total_images";
$tdata14704_Monthly_Report_Designers[".listFields"][] = "eta_total";
$tdata14704_Monthly_Report_Designers[".listFields"][] = "Total_time";
$tdata14704_Monthly_Report_Designers[".listFields"][] = "idle_time";
$tdata14704_Monthly_Report_Designers[".listFields"][] = "idle_p";
$tdata14704_Monthly_Report_Designers[".listFields"][] = "efficiency";
$tdata14704_Monthly_Report_Designers[".listFields"][] = "performance";
$tdata14704_Monthly_Report_Designers[".listFields"][] = "work_type";

$tdata14704_Monthly_Report_Designers[".hideMobileList"] = array();


$tdata14704_Monthly_Report_Designers[".viewFields"] = array();
$tdata14704_Monthly_Report_Designers[".viewFields"][] = "work_date";
$tdata14704_Monthly_Report_Designers[".viewFields"][] = "team_id";
$tdata14704_Monthly_Report_Designers[".viewFields"][] = "designer_name";
$tdata14704_Monthly_Report_Designers[".viewFields"][] = "dayes";
$tdata14704_Monthly_Report_Designers[".viewFields"][] = "total_images";
$tdata14704_Monthly_Report_Designers[".viewFields"][] = "eta_total";
$tdata14704_Monthly_Report_Designers[".viewFields"][] = "Total_time";
$tdata14704_Monthly_Report_Designers[".viewFields"][] = "idle_time";
$tdata14704_Monthly_Report_Designers[".viewFields"][] = "idle_p";
$tdata14704_Monthly_Report_Designers[".viewFields"][] = "efficiency";
$tdata14704_Monthly_Report_Designers[".viewFields"][] = "performance";
$tdata14704_Monthly_Report_Designers[".viewFields"][] = "work_type";

$tdata14704_Monthly_Report_Designers[".addFields"] = array();

$tdata14704_Monthly_Report_Designers[".masterListFields"] = array();
$tdata14704_Monthly_Report_Designers[".masterListFields"][] = "work_date";
$tdata14704_Monthly_Report_Designers[".masterListFields"][] = "team_id";
$tdata14704_Monthly_Report_Designers[".masterListFields"][] = "designer_name";
$tdata14704_Monthly_Report_Designers[".masterListFields"][] = "dayes";
$tdata14704_Monthly_Report_Designers[".masterListFields"][] = "total_images";
$tdata14704_Monthly_Report_Designers[".masterListFields"][] = "eta_total";
$tdata14704_Monthly_Report_Designers[".masterListFields"][] = "Total_time";
$tdata14704_Monthly_Report_Designers[".masterListFields"][] = "idle_time";
$tdata14704_Monthly_Report_Designers[".masterListFields"][] = "idle_p";
$tdata14704_Monthly_Report_Designers[".masterListFields"][] = "efficiency";
$tdata14704_Monthly_Report_Designers[".masterListFields"][] = "performance";
$tdata14704_Monthly_Report_Designers[".masterListFields"][] = "work_type";

$tdata14704_Monthly_Report_Designers[".inlineAddFields"] = array();

$tdata14704_Monthly_Report_Designers[".editFields"] = array();

$tdata14704_Monthly_Report_Designers[".inlineEditFields"] = array();

$tdata14704_Monthly_Report_Designers[".exportFields"] = array();
$tdata14704_Monthly_Report_Designers[".exportFields"][] = "work_date";
$tdata14704_Monthly_Report_Designers[".exportFields"][] = "team_id";
$tdata14704_Monthly_Report_Designers[".exportFields"][] = "designer_name";
$tdata14704_Monthly_Report_Designers[".exportFields"][] = "dayes";
$tdata14704_Monthly_Report_Designers[".exportFields"][] = "total_images";
$tdata14704_Monthly_Report_Designers[".exportFields"][] = "eta_total";
$tdata14704_Monthly_Report_Designers[".exportFields"][] = "Total_time";
$tdata14704_Monthly_Report_Designers[".exportFields"][] = "idle_time";
$tdata14704_Monthly_Report_Designers[".exportFields"][] = "idle_p";
$tdata14704_Monthly_Report_Designers[".exportFields"][] = "efficiency";
$tdata14704_Monthly_Report_Designers[".exportFields"][] = "performance";
$tdata14704_Monthly_Report_Designers[".exportFields"][] = "work_type";

$tdata14704_Monthly_Report_Designers[".importFields"] = array();
$tdata14704_Monthly_Report_Designers[".importFields"][] = "work_date";
$tdata14704_Monthly_Report_Designers[".importFields"][] = "team_id";
$tdata14704_Monthly_Report_Designers[".importFields"][] = "designer_name";
$tdata14704_Monthly_Report_Designers[".importFields"][] = "dayes";
$tdata14704_Monthly_Report_Designers[".importFields"][] = "total_images";
$tdata14704_Monthly_Report_Designers[".importFields"][] = "eta_total";
$tdata14704_Monthly_Report_Designers[".importFields"][] = "Total_time";
$tdata14704_Monthly_Report_Designers[".importFields"][] = "idle_time";
$tdata14704_Monthly_Report_Designers[".importFields"][] = "idle_p";
$tdata14704_Monthly_Report_Designers[".importFields"][] = "efficiency";
$tdata14704_Monthly_Report_Designers[".importFields"][] = "performance";
$tdata14704_Monthly_Report_Designers[".importFields"][] = "work_type";

$tdata14704_Monthly_Report_Designers[".printFields"] = array();
$tdata14704_Monthly_Report_Designers[".printFields"][] = "work_date";
$tdata14704_Monthly_Report_Designers[".printFields"][] = "team_id";
$tdata14704_Monthly_Report_Designers[".printFields"][] = "designer_name";
$tdata14704_Monthly_Report_Designers[".printFields"][] = "dayes";
$tdata14704_Monthly_Report_Designers[".printFields"][] = "total_images";
$tdata14704_Monthly_Report_Designers[".printFields"][] = "eta_total";
$tdata14704_Monthly_Report_Designers[".printFields"][] = "Total_time";
$tdata14704_Monthly_Report_Designers[".printFields"][] = "idle_time";
$tdata14704_Monthly_Report_Designers[".printFields"][] = "idle_p";
$tdata14704_Monthly_Report_Designers[".printFields"][] = "efficiency";
$tdata14704_Monthly_Report_Designers[".printFields"][] = "performance";
$tdata14704_Monthly_Report_Designers[".printFields"][] = "work_type";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("14704_Monthly_Report_Designers","work_date"); 
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

	

	
	$tdata14704_Monthly_Report_Designers["work_date"] = $fdata;
//	team_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team_id";
	$fdata["GoodName"] = "team_id";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("14704_Monthly_Report_Designers","team_id"); 
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

	

	
	$tdata14704_Monthly_Report_Designers["team_id"] = $fdata;
//	designer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer_name";
	$fdata["GoodName"] = "designer_name";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("14704_Monthly_Report_Designers","designer_name"); 
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

	

	
	$tdata14704_Monthly_Report_Designers["designer_name"] = $fdata;
//	dayes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dayes";
	$fdata["GoodName"] = "dayes";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("14704_Monthly_Report_Designers","dayes"); 
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

	

	
	$tdata14704_Monthly_Report_Designers["dayes"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("14704_Monthly_Report_Designers","total_images"); 
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

	

	
	$tdata14704_Monthly_Report_Designers["total_images"] = $fdata;
//	eta_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "eta_total";
	$fdata["GoodName"] = "eta_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("14704_Monthly_Report_Designers","eta_total"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
			$fdata["isTotalAvg"] = true;	
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

	

	
	$tdata14704_Monthly_Report_Designers["eta_total"] = $fdata;
//	Total_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Total_time";
	$fdata["GoodName"] = "Total_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("14704_Monthly_Report_Designers","Total_time"); 
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

	

	
	$tdata14704_Monthly_Report_Designers["Total_time"] = $fdata;
//	idle_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idle_time";
	$fdata["GoodName"] = "idle_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("14704_Monthly_Report_Designers","idle_time"); 
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

	

	
	$tdata14704_Monthly_Report_Designers["idle_time"] = $fdata;
//	idle_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "idle_p";
	$fdata["GoodName"] = "idle_p";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("14704_Monthly_Report_Designers","idle_p"); 
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

	

	
	$tdata14704_Monthly_Report_Designers["idle_p"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("14704_Monthly_Report_Designers","efficiency"); 
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

	

	
	$tdata14704_Monthly_Report_Designers["efficiency"] = $fdata;
//	performance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "performance";
	$fdata["GoodName"] = "performance";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("14704_Monthly_Report_Designers","performance"); 
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

	

	
	$tdata14704_Monthly_Report_Designers["performance"] = $fdata;
//	work_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "work_type";
	$fdata["GoodName"] = "work_type";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("14704_Monthly_Report_Designers","work_type"); 
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

	

	
	$tdata14704_Monthly_Report_Designers["work_type"] = $fdata;

	
$tables_data["14704 Monthly Report Designers"]=&$tdata14704_Monthly_Report_Designers;
$field_labels["14704_Monthly_Report_Designers"] = &$fieldLabels14704_Monthly_Report_Designers;
$fieldToolTips["14704 Monthly Report Designers"] = &$fieldToolTips14704_Monthly_Report_Designers;
$page_titles["14704_Monthly_Report_Designers"] = &$pageTitles14704_Monthly_Report_Designers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["14704 Monthly Report Designers"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["14704 Monthly Report Designers"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_14704_Monthly_Report_Designers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_date,  team_id,  designer_name,  COUNT(DISTINCT `work_date`) AS dayes,  SUM(total_images_counted) AS total_images,  SEC_TO_TIME(SUM(estimated_time)) AS eta_total,  SEC_TO_TIME(SUM(designer_time)) AS Total_time,  SEC_TO_TIME((27000*(COUNT(DISTINCT `work_date`)))-SUM(designer_time)) AS idle_time,  (((27000*(COUNT(DISTINCT `work_date`)))-(SUM(designer_time)))/(27000*(COUNT(DISTINCT `work_date`))))*100 AS idle_p,  ((SUM(estimated_time))/(SUM(designer_time)))*100 AS efficiency,  (1-(((27000*(COUNT(DISTINCT `work_date`)))-(SUM(designer_time)))/(27000*(COUNT(DISTINCT `work_date`)))))*(((SUM(estimated_time))/(SUM(designer_time))))*100 AS performance,  work_type";
$proto0["m_strFrom"] = "FROM designer_report";
$proto0["m_strWhere"] = "user_group =7 AND pdf_name =5001";
$proto0["m_strOrderBy"] = "ORDER BY work_date DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "user_group =7 AND pdf_name =5001";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "user_group =7 AND pdf_name =5001"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "user_group =7";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "user_group",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "14704 Monthly Report Designers"
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
$proto5["m_sql"] = "pdf_name =5001";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "14704 Monthly Report Designers"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "=5001";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
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
	"m_srcTableName" => "14704 Monthly Report Designers"
));

$proto9["m_sql"] = "work_date";
$proto9["m_srcTableName"] = "14704 Monthly Report Designers";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "14704 Monthly Report Designers"
));

$proto11["m_sql"] = "team_id";
$proto11["m_srcTableName"] = "14704 Monthly Report Designers";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "14704 Monthly Report Designers"
));

$proto13["m_sql"] = "designer_name";
$proto13["m_srcTableName"] = "14704 Monthly Report Designers";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$proto16=array();
$proto16["m_functiontype"] = "SQLF_COUNT";
$proto16["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "DISTINCT `work_date`"
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "COUNT(DISTINCT `work_date`)";
$proto15["m_srcTableName"] = "14704 Monthly Report Designers";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "dayes";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_SUM";
$proto19["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total_images_counted",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "14704 Monthly Report Designers"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "SUM(total_images_counted)";
$proto18["m_srcTableName"] = "14704 Monthly Report Designers";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "total_images";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_CUSTOM";
$proto22["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(estimated_time)"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "SEC_TO_TIME(SUM(estimated_time))";
$proto21["m_srcTableName"] = "14704 Monthly Report Designers";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "eta_total";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$proto25=array();
$proto25["m_functiontype"] = "SQLF_CUSTOM";
$proto25["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(designer_time)"
));

$proto25["m_arguments"][]=$obj;
$proto25["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto25);

$proto24["m_sql"] = "SEC_TO_TIME(SUM(designer_time))";
$proto24["m_srcTableName"] = "14704 Monthly Report Designers";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "Total_time";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$proto28=array();
$proto28["m_functiontype"] = "SQLF_CUSTOM";
$proto28["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(27000*(COUNT(DISTINCT `work_date`)))-SUM(designer_time)"
));

$proto28["m_arguments"][]=$obj;
$proto28["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto28);

$proto27["m_sql"] = "SEC_TO_TIME((27000*(COUNT(DISTINCT `work_date`)))-SUM(designer_time))";
$proto27["m_srcTableName"] = "14704 Monthly Report Designers";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "idle_time";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(((27000*(COUNT(DISTINCT `work_date`)))-(SUM(designer_time)))/(27000*(COUNT(DISTINCT `work_date`))))*100"
));

$proto30["m_sql"] = "(((27000*(COUNT(DISTINCT `work_date`)))-(SUM(designer_time)))/(27000*(COUNT(DISTINCT `work_date`))))*100";
$proto30["m_srcTableName"] = "14704 Monthly Report Designers";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "idle_p";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "((SUM(estimated_time))/(SUM(designer_time)))*100"
));

$proto32["m_sql"] = "((SUM(estimated_time))/(SUM(designer_time)))*100";
$proto32["m_srcTableName"] = "14704 Monthly Report Designers";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(1-(((27000*(COUNT(DISTINCT `work_date`)))-(SUM(designer_time)))/(27000*(COUNT(DISTINCT `work_date`)))))*(((SUM(estimated_time))/(SUM(designer_time))))*100"
));

$proto34["m_sql"] = "(1-(((27000*(COUNT(DISTINCT `work_date`)))-(SUM(designer_time)))/(27000*(COUNT(DISTINCT `work_date`)))))*(((SUM(estimated_time))/(SUM(designer_time))))*100";
$proto34["m_srcTableName"] = "14704 Monthly Report Designers";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "performance";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "14704 Monthly Report Designers"
));

$proto36["m_sql"] = "work_type";
$proto36["m_srcTableName"] = "14704 Monthly Report Designers";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "designer_report";
$proto39["m_srcTableName"] = "14704 Monthly Report Designers";
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
$proto38["m_srcTableName"] = "14704 Monthly Report Designers";
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
						$proto43=array();
$proto43["m_functiontype"] = "SQLF_CUSTOM";
$proto43["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "work_date"
));

$proto43["m_arguments"][]=$obj;
$proto43["m_strFunctionName"] = "MONTH";
$obj = new SQLFunctionCall($proto43);

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto45=array();
						$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "14704 Monthly Report Designers"
));

$proto45["m_column"]=$obj;
$obj = new SQLGroupByItem($proto45);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto47=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "14704 Monthly Report Designers"
));

$proto47["m_column"]=$obj;
$proto47["m_bAsc"] = 0;
$proto47["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto47);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="14704 Monthly Report Designers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_14704_Monthly_Report_Designers = createSqlQuery_14704_Monthly_Report_Designers();


	
												
	
$tdata14704_Monthly_Report_Designers[".sqlquery"] = $queryData_14704_Monthly_Report_Designers;

$tableEvents["14704 Monthly Report Designers"] = new eventsBase;
$tdata14704_Monthly_Report_Designers[".hasEvents"] = false;

?>