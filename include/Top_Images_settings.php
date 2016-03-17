<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTop_Images = array();	
	$tdataTop_Images[".truncateText"] = true;
	$tdataTop_Images[".NumberOfChars"] = 256; 
	$tdataTop_Images[".ShortName"] = "Top_Images";
	$tdataTop_Images[".OwnerID"] = "";
	$tdataTop_Images[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsTop_Images = array();
$fieldToolTipsTop_Images = array();
$pageTitlesTop_Images = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTop_Images["English"] = array();
	$fieldToolTipsTop_Images["English"] = array();
	$pageTitlesTop_Images["English"] = array();
	$fieldLabelsTop_Images["English"]["designer2_id"] = "Designer";
	$fieldToolTipsTop_Images["English"]["designer2_id"] = "";
	$fieldLabelsTop_Images["English"]["end2_date"] = "Date";
	$fieldToolTipsTop_Images["English"]["end2_date"] = "";
	$fieldLabelsTop_Images["English"]["team"] = "Team";
	$fieldToolTipsTop_Images["English"]["team"] = "";
	$fieldLabelsTop_Images["English"]["files"] = "Files";
	$fieldToolTipsTop_Images["English"]["files"] = "";
	$fieldLabelsTop_Images["English"]["taken_time_avg"] = "Taken Avg";
	$fieldToolTipsTop_Images["English"]["taken_time_avg"] = "";
	$fieldLabelsTop_Images["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsTop_Images["English"]["efficiency"] = "";
	$fieldLabelsTop_Images["English"]["DATE_jobfile_end2_date_"] = "DATE(jobfile.end2 Date)";
	$fieldToolTipsTop_Images["English"]["DATE(jobfile.end2_date)"] = "";
	if (count($fieldToolTipsTop_Images["English"]))
		$tdataTop_Images[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTop_Images[""] = array();
	$fieldToolTipsTop_Images[""] = array();
	$pageTitlesTop_Images[""] = array();
	if (count($fieldToolTipsTop_Images[""]))
		$tdataTop_Images[".isUseToolTips"] = true;
}
	
	
	$tdataTop_Images[".NCSearch"] = true;



$tdataTop_Images[".shortTableName"] = "Top_Images";
$tdataTop_Images[".nSecOptions"] = 0;
$tdataTop_Images[".recsPerRowList"] = 1;
$tdataTop_Images[".recsPerRowPrint"] = 1;
$tdataTop_Images[".mainTableOwnerID"] = "";
$tdataTop_Images[".moveNext"] = 1;
$tdataTop_Images[".entityType"] = 2;

$tdataTop_Images[".strOriginalTableName"] = "jobfile";




$tdataTop_Images[".showAddInPopup"] = false;

$tdataTop_Images[".showEditInPopup"] = false;

$tdataTop_Images[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTop_Images[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTop_Images[".fieldsForRegister"] = array();

$tdataTop_Images[".listAjax"] = false;

	$tdataTop_Images[".audit"] = false;

	$tdataTop_Images[".locking"] = false;


$tdataTop_Images[".add"] = true;
$tdataTop_Images[".afterAddAction"] = 1;
$tdataTop_Images[".closePopupAfterAdd"] = 1;
$tdataTop_Images[".afterAddActionDetTable"] = "";

$tdataTop_Images[".list"] = true;

$tdataTop_Images[".inlineAdd"] = true;


$tdataTop_Images[".exportTo"] = true;

$tdataTop_Images[".printFriendly"] = true;


$tdataTop_Images[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataTop_Images[".searchSaving"] = false;
//

$tdataTop_Images[".showSearchPanel"] = true;
		$tdataTop_Images[".flexibleSearch"] = true;		

if (isMobile())
	$tdataTop_Images[".isUseAjaxSuggest"] = false;
else 
	$tdataTop_Images[".isUseAjaxSuggest"] = true;



																																																																																																																																			
$tdataTop_Images[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTop_Images[".isUseTimeForSearch"] = false;





$tdataTop_Images[".allSearchFields"] = array();
$tdataTop_Images[".filterFields"] = array();
$tdataTop_Images[".requiredSearchFields"] = array();



$tdataTop_Images[".googleLikeFields"] = array();
$tdataTop_Images[".googleLikeFields"][] = "end2_date";
$tdataTop_Images[".googleLikeFields"][] = "team";
$tdataTop_Images[".googleLikeFields"][] = "designer2_id";
$tdataTop_Images[".googleLikeFields"][] = "files";
$tdataTop_Images[".googleLikeFields"][] = "taken_time_avg";
$tdataTop_Images[".googleLikeFields"][] = "efficiency";
$tdataTop_Images[".googleLikeFields"][] = "DATE(jobfile.end2_date)";


$tdataTop_Images[".advSearchFields"] = array();
$tdataTop_Images[".advSearchFields"][] = "end2_date";
$tdataTop_Images[".advSearchFields"][] = "team";
$tdataTop_Images[".advSearchFields"][] = "designer2_id";
$tdataTop_Images[".advSearchFields"][] = "files";
$tdataTop_Images[".advSearchFields"][] = "taken_time_avg";
$tdataTop_Images[".advSearchFields"][] = "efficiency";
$tdataTop_Images[".advSearchFields"][] = "DATE(jobfile.end2_date)";

$tdataTop_Images[".tableType"] = "report";

$tdataTop_Images[".printerPageOrientation"] = 0;
$tdataTop_Images[".nPrinterPageScale"] = 100;

$tdataTop_Images[".nPrinterSplitRecords"] = 40;

$tdataTop_Images[".nPrinterPDFSplitRecords"] = 40;



$tdataTop_Images[".geocodingEnabled"] = false;

//report settings
$tdataTop_Images[".printReportLayout"] = 6;	

$tdataTop_Images[".reportPrintPartitionType"] = 1;	
$tdataTop_Images[".reportPrintGroupsPerPage"] = 40;	
	$tdataTop_Images[".reportPrintPDFGroupsPerPage"] = 40;
$tdataTop_Images[".lowGroup"] = 0;



$tdataTop_Images[".pageSize"] = 1;	






$tdataTop_Images[".repShowDet"] = true;

$tdataTop_Images[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY DATE(jobfile.end2_date) DESC, files    DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTop_Images[".strOrderBy"] = $tstrOrderBy;

$tdataTop_Images[".orderindexes"] = array();
$tdataTop_Images[".orderindexes"][] = array(7, (0 ? "ASC" : "DESC"), "DATE(jobfile.end2_date)");
$tdataTop_Images[".orderindexes"][] = array(0, (0 ? "ASC" : "DESC"), "files    ");

$tdataTop_Images[".sqlHead"] = "SELECT jobfile.end2_date,  `user`.team,  jobfile.designer2_id,  COUNT(*) AS files,  SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_avg,  (TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<60,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100 AS efficiency,  DATE(jobfile.end2_date) AS `DATE(jobfile.end2_date)`";
$tdataTop_Images[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$tdataTop_Images[".sqlWhereExpr"] = "jobfile.designer2_id IS NOT NULL OR jobfile.end2_date > '0000-00-00 00:00:00' OR (jobfile.filename not like '%retouch%' OR (jobfile.filename not like '%detail_2%')) OR TIME_TO_SEC(jobfile.designer2_time) > '0'";
$tdataTop_Images[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTop_Images[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTop_Images[".arrGroupsPerPage"] = $arrGPP;

$tdataTop_Images[".highlightSearchResults"] = true;

$tableKeysTop_Images = array();
$tdataTop_Images[".Keys"] = $tableKeysTop_Images;

$tdataTop_Images[".listFields"] = array();
$tdataTop_Images[".listFields"][] = "end2_date";
$tdataTop_Images[".listFields"][] = "team";
$tdataTop_Images[".listFields"][] = "designer2_id";
$tdataTop_Images[".listFields"][] = "files";
$tdataTop_Images[".listFields"][] = "taken_time_avg";
$tdataTop_Images[".listFields"][] = "efficiency";
$tdataTop_Images[".listFields"][] = "DATE(jobfile.end2_date)";

$tdataTop_Images[".hideMobileList"] = array();


$tdataTop_Images[".viewFields"] = array();
$tdataTop_Images[".viewFields"][] = "end2_date";
$tdataTop_Images[".viewFields"][] = "team";
$tdataTop_Images[".viewFields"][] = "designer2_id";
$tdataTop_Images[".viewFields"][] = "files";
$tdataTop_Images[".viewFields"][] = "taken_time_avg";
$tdataTop_Images[".viewFields"][] = "efficiency";
$tdataTop_Images[".viewFields"][] = "DATE(jobfile.end2_date)";

$tdataTop_Images[".addFields"] = array();
$tdataTop_Images[".addFields"][] = "end2_date";
$tdataTop_Images[".addFields"][] = "designer2_id";

$tdataTop_Images[".masterListFields"] = array();
$tdataTop_Images[".masterListFields"][] = "end2_date";
$tdataTop_Images[".masterListFields"][] = "team";
$tdataTop_Images[".masterListFields"][] = "designer2_id";
$tdataTop_Images[".masterListFields"][] = "files";
$tdataTop_Images[".masterListFields"][] = "taken_time_avg";
$tdataTop_Images[".masterListFields"][] = "efficiency";
$tdataTop_Images[".masterListFields"][] = "DATE(jobfile.end2_date)";

$tdataTop_Images[".inlineAddFields"] = array();
$tdataTop_Images[".inlineAddFields"][] = "end2_date";
$tdataTop_Images[".inlineAddFields"][] = "designer2_id";

$tdataTop_Images[".editFields"] = array();
$tdataTop_Images[".editFields"][] = "end2_date";
$tdataTop_Images[".editFields"][] = "designer2_id";

$tdataTop_Images[".inlineEditFields"] = array();
$tdataTop_Images[".inlineEditFields"][] = "end2_date";
$tdataTop_Images[".inlineEditFields"][] = "designer2_id";

$tdataTop_Images[".exportFields"] = array();
$tdataTop_Images[".exportFields"][] = "end2_date";
$tdataTop_Images[".exportFields"][] = "team";
$tdataTop_Images[".exportFields"][] = "designer2_id";
$tdataTop_Images[".exportFields"][] = "files";
$tdataTop_Images[".exportFields"][] = "taken_time_avg";
$tdataTop_Images[".exportFields"][] = "efficiency";
$tdataTop_Images[".exportFields"][] = "DATE(jobfile.end2_date)";

$tdataTop_Images[".importFields"] = array();
$tdataTop_Images[".importFields"][] = "end2_date";
$tdataTop_Images[".importFields"][] = "team";
$tdataTop_Images[".importFields"][] = "designer2_id";
$tdataTop_Images[".importFields"][] = "files";
$tdataTop_Images[".importFields"][] = "taken_time_avg";
$tdataTop_Images[".importFields"][] = "efficiency";
$tdataTop_Images[".importFields"][] = "DATE(jobfile.end2_date)";

$tdataTop_Images[".printFields"] = array();
$tdataTop_Images[".printFields"][] = "end2_date";
$tdataTop_Images[".printFields"][] = "team";
$tdataTop_Images[".printFields"][] = "designer2_id";
$tdataTop_Images[".printFields"][] = "files";
$tdataTop_Images[".printFields"][] = "taken_time_avg";
$tdataTop_Images[".printFields"][] = "efficiency";
$tdataTop_Images[".printFields"][] = "DATE(jobfile.end2_date)";

//	end2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "end2_date";
	$fdata["GoodName"] = "end2_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Top_Images","end2_date"); 
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
	
		$fdata["strField"] = "end2_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.end2_date";
	
		
		
				
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
	
	
	
	

	

	
	$tdataTop_Images["end2_date"] = $fdata;
//	team
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team";
	$fdata["GoodName"] = "team";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Top_Images","team"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "team"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.team";
	
		
		
				
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
	
	
	
	

	

	
	$tdataTop_Images["team"] = $fdata;
//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Top_Images","designer2_id"); 
	$fdata["FieldType"] = 3;
	
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
	
		$fdata["strField"] = "designer2_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.designer2_id";
	
		
		
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
	
	
	
	

	

	
	$tdataTop_Images["designer2_id"] = $fdata;
//	files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "files";
	$fdata["GoodName"] = "files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Top_Images","files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "files"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(*)";
	
		
		
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
	
	
	
	

	

	
	$tdataTop_Images["files"] = $fdata;
//	taken_time_avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "taken_time_avg";
	$fdata["GoodName"] = "taken_time_avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Top_Images","taken_time_avg"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "taken_time_avg"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.designer2_time)))";
	
		
		
				
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
	
	
	
	

	

	
	$tdataTop_Images["taken_time_avg"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Top_Images","efficiency"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "efficiency"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<60,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100";
	
		
		
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
	
	
	
	

	

	
	$tdataTop_Images["efficiency"] = $fdata;
//	DATE(jobfile.end2_date)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DATE(jobfile.end2_date)";
	$fdata["GoodName"] = "DATE_jobfile_end2_date_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Top_Images","DATE_jobfile_end2_date_"); 
	$fdata["FieldType"] = 7;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DATE(jobfile.end2_date)"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE(jobfile.end2_date)";
	
		
		
				
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
	
	
	
	

	

	
	$tdataTop_Images["DATE(jobfile.end2_date)"] = $fdata;

	
$tables_data["Top_Images"]=&$tdataTop_Images;
$field_labels["Top_Images"] = &$fieldLabelsTop_Images;
$fieldToolTips["Top_Images"] = &$fieldToolTipsTop_Images;
$page_titles["Top_Images"] = &$pageTitlesTop_Images;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Top_Images"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Top_Images"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Top_Images()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile.end2_date,  `user`.team,  jobfile.designer2_id,  COUNT(*) AS files,  SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_avg,  (TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<60,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100 AS efficiency,  DATE(jobfile.end2_date) AS `DATE(jobfile.end2_date)`";
$proto0["m_strFrom"] = "FROM jobfile  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto0["m_strWhere"] = "jobfile.designer2_id IS NOT NULL OR jobfile.end2_date > '0000-00-00 00:00:00' OR (jobfile.filename not like '%retouch%' OR (jobfile.filename not like '%detail_2%')) OR TIME_TO_SEC(jobfile.designer2_time) > '0'";
$proto0["m_strOrderBy"] = "ORDER BY DATE(jobfile.end2_date) DESC, files    DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "jobfile.designer2_id IS NOT NULL OR jobfile.end2_date > '0000-00-00 00:00:00' OR (jobfile.filename not like '%retouch%' OR (jobfile.filename not like '%detail_2%')) OR TIME_TO_SEC(jobfile.designer2_time) > '0'";
$proto1["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.designer2_id IS NOT NULL OR jobfile.end2_date > '0000-00-00 00:00:00' OR (jobfile.filename not like '%retouch%' OR (jobfile.filename not like '%detail_2%')) OR TIME_TO_SEC(jobfile.designer2_time) > '0'"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.designer2_id IS NOT NULL";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Top_Images"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "IS NOT NULL";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "jobfile.end2_date > '0000-00-00 00:00:00'";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Top_Images"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "> '0000-00-00 00:00:00'";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
						$proto7=array();
$proto7["m_sql"] = "jobfile.filename not like '%retouch%' OR (jobfile.filename not like '%detail_2%')";
$proto7["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.filename not like '%retouch%' OR (jobfile.filename not like '%detail_2%')"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
						$proto9=array();
$proto9["m_sql"] = "jobfile.filename not like '%retouch%'";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Top_Images"
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "not like '%retouch%'";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

			$proto7["m_contained"][]=$obj;
						$proto11=array();
$proto11["m_sql"] = "jobfile.filename not like '%detail_2%'";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Top_Images"
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "not like '%detail_2%'";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = true;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

			$proto7["m_contained"][]=$obj;
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = true;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

			$proto1["m_contained"][]=$obj;
						$proto13=array();
$proto13["m_sql"] = "TIME_TO_SEC(jobfile.designer2_time) > '0'";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
						$proto14=array();
$proto14["m_functiontype"] = "SQLF_CUSTOM";
$proto14["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.designer2_time"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "TIME_TO_SEC";
$obj = new SQLFunctionCall($proto14);

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "> '0'";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Top_Images"
));

$proto18["m_sql"] = "jobfile.end2_date";
$proto18["m_srcTableName"] = "Top_Images";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Top_Images"
));

$proto20["m_sql"] = "`user`.team";
$proto20["m_srcTableName"] = "Top_Images";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Top_Images"
));

$proto22["m_sql"] = "jobfile.designer2_id";
$proto22["m_srcTableName"] = "Top_Images";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$proto25=array();
$proto25["m_functiontype"] = "SQLF_COUNT";
$proto25["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto25["m_arguments"][]=$obj;
$proto25["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto25);

$proto24["m_sql"] = "COUNT(*)";
$proto24["m_srcTableName"] = "Top_Images";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "files";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$proto28=array();
$proto28["m_functiontype"] = "SQLF_CUSTOM";
$proto28["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "AVG(TIME_TO_SEC(jobfile.designer2_time))"
));

$proto28["m_arguments"][]=$obj;
$proto28["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto28);

$proto27["m_sql"] = "SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.designer2_time)))";
$proto27["m_srcTableName"] = "Top_Images";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "taken_time_avg";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<60,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100"
));

$proto30["m_sql"] = "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<60,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100";
$proto30["m_srcTableName"] = "Top_Images";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$proto33=array();
$proto33["m_functiontype"] = "SQLF_CUSTOM";
$proto33["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.end2_date"
));

$proto33["m_arguments"][]=$obj;
$proto33["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto33);

$proto32["m_sql"] = "DATE(jobfile.end2_date)";
$proto32["m_srcTableName"] = "Top_Images";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "DATE(jobfile.end2_date)";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "jobfile";
$proto36["m_srcTableName"] = "Top_Images";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "jobfile_id";
$proto36["m_columns"][] = "file_url";
$proto36["m_columns"][] = "client_id";
$proto36["m_columns"][] = "work_id";
$proto36["m_columns"][] = "job_id";
$proto36["m_columns"][] = "project_id";
$proto36["m_columns"][] = "folder_name";
$proto36["m_columns"][] = "filename";
$proto36["m_columns"][] = "jobfile_type";
$proto36["m_columns"][] = "jobfile_note";
$proto36["m_columns"][] = "jobfile_status_id";
$proto36["m_columns"][] = "downloader_id";
$proto36["m_columns"][] = "distributor_id";
$proto36["m_columns"][] = "designer_id";
$proto36["m_columns"][] = "qc_id";
$proto36["m_columns"][] = "uploader_id";
$proto36["m_columns"][] = "notifier_id";
$proto36["m_columns"][] = "rejector_id";
$proto36["m_columns"][] = "download_date";
$proto36["m_columns"][] = "distribute_date";
$proto36["m_columns"][] = "start_date";
$proto36["m_columns"][] = "end_date";
$proto36["m_columns"][] = "designer_time";
$proto36["m_columns"][] = "qcstart_date";
$proto36["m_columns"][] = "qcend_date";
$proto36["m_columns"][] = "qc_time";
$proto36["m_columns"][] = "upload_date";
$proto36["m_columns"][] = "notify_date";
$proto36["m_columns"][] = "reject_date";
$proto36["m_columns"][] = "reject_reason";
$proto36["m_columns"][] = "designer2_id";
$proto36["m_columns"][] = "start2_date";
$proto36["m_columns"][] = "end2_date";
$proto36["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "jobfile";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "Top_Images";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
												$proto39=array();
$proto39["m_link"] = "SQLL_LEFTJOIN";
			$proto40=array();
$proto40["m_strName"] = "user";
$proto40["m_srcTableName"] = "Top_Images";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "user_id";
$proto40["m_columns"][] = "user_status";
$proto40["m_columns"][] = "username";
$proto40["m_columns"][] = "password";
$proto40["m_columns"][] = "department_id";
$proto40["m_columns"][] = "subdiv_id";
$proto40["m_columns"][] = "group_id";
$proto40["m_columns"][] = "designation";
$proto40["m_columns"][] = "employee_id";
$proto40["m_columns"][] = "fname";
$proto40["m_columns"][] = "lname";
$proto40["m_columns"][] = "nickname";
$proto40["m_columns"][] = "email";
$proto40["m_columns"][] = "phone";
$proto40["m_columns"][] = "mobile";
$proto40["m_columns"][] = "log";
$proto40["m_columns"][] = "images_assigned";
$proto40["m_columns"][] = "user_picture";
$proto40["m_columns"][] = "team";
$proto40["m_columns"][] = "ad_group_id";
$proto40["m_columns"][] = "lastaccess";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "Top_Images";
$proto41=array();
$proto41["m_sql"] = "jobfile.designer2_id = `user`.user_id";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Top_Images"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "= `user`.user_id";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
												$proto43=array();
$proto43["m_link"] = "SQLL_LEFTJOIN";
			$proto44=array();
$proto44["m_strName"] = "pdf";
$proto44["m_srcTableName"] = "Top_Images";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "pdf_id";
$proto44["m_columns"][] = "pdf_name";
$proto44["m_columns"][] = "client_id";
$proto44["m_columns"][] = "pdf_location";
$proto44["m_columns"][] = "last_update";
$proto44["m_columns"][] = "pdf_estimated_average";
$proto44["m_columns"][] = "pdf_estimated_average1";
$proto44["m_columns"][] = "pdf_estimated_average2";
$proto44["m_columns"][] = "pdf_actual_average";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto43["m_alias"] = "";
$proto43["m_srcTableName"] = "Top_Images";
$proto45=array();
$proto45["m_sql"] = "jobfile.project_id = pdf.pdf_id";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Top_Images"
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "= pdf.pdf_id";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto47=array();
						$proto48=array();
$proto48["m_functiontype"] = "SQLF_CUSTOM";
$proto48["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.end2_date"
));

$proto48["m_arguments"][]=$obj;
$proto48["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto48);

$proto47["m_column"]=$obj;
$obj = new SQLGroupByItem($proto47);

$proto0["m_groupby"][]=$obj;
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Top_Images"
));

$proto50["m_column"]=$obj;
$obj = new SQLGroupByItem($proto50);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto52=array();
						$proto53=array();
$proto53["m_functiontype"] = "SQLF_CUSTOM";
$proto53["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.end2_date"
));

$proto53["m_arguments"][]=$obj;
$proto53["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto53);

$proto52["m_column"]=$obj;
$proto52["m_bAsc"] = 0;
$proto52["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto52);

$proto0["m_orderby"][]=$obj;					
												$proto55=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "files    "
));

$proto55["m_column"]=$obj;
$proto55["m_bAsc"] = 0;
$proto55["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto55);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Top_Images";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Top_Images = createSqlQuery_Top_Images();


	
							
	
$tdataTop_Images[".sqlquery"] = $queryData_Top_Images;

$tableEvents["Top_Images"] = new eventsBase;
$tdataTop_Images[".hasEvents"] = false;

?>