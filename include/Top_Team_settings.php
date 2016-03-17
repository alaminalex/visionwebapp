<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTop_Team = array();	
	$tdataTop_Team[".truncateText"] = true;
	$tdataTop_Team[".NumberOfChars"] = 256; 
	$tdataTop_Team[".ShortName"] = "Top_Team";
	$tdataTop_Team[".OwnerID"] = "";
	$tdataTop_Team[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsTop_Team = array();
$fieldToolTipsTop_Team = array();
$pageTitlesTop_Team = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTop_Team["English"] = array();
	$fieldToolTipsTop_Team["English"] = array();
	$pageTitlesTop_Team["English"] = array();
	$fieldLabelsTop_Team["English"]["designer2_id"] = "Designer";
	$fieldToolTipsTop_Team["English"]["designer2_id"] = "";
	$fieldLabelsTop_Team["English"]["end2_date"] = "Date";
	$fieldToolTipsTop_Team["English"]["end2_date"] = "";
	$fieldLabelsTop_Team["English"]["team"] = "Team";
	$fieldToolTipsTop_Team["English"]["team"] = "";
	$fieldLabelsTop_Team["English"]["files"] = "Files";
	$fieldToolTipsTop_Team["English"]["files"] = "";
	$fieldLabelsTop_Team["English"]["taken_time_avg"] = "Taken Avg";
	$fieldToolTipsTop_Team["English"]["taken_time_avg"] = "";
	$fieldLabelsTop_Team["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsTop_Team["English"]["efficiency"] = "";
	$fieldLabelsTop_Team["English"]["DATE_jobfile_end2_date_"] = "DATE(jobfile.end2 Date)";
	$fieldToolTipsTop_Team["English"]["DATE(jobfile.end2_date)"] = "";
	if (count($fieldToolTipsTop_Team["English"]))
		$tdataTop_Team[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTop_Team[""] = array();
	$fieldToolTipsTop_Team[""] = array();
	$pageTitlesTop_Team[""] = array();
	if (count($fieldToolTipsTop_Team[""]))
		$tdataTop_Team[".isUseToolTips"] = true;
}
	
	
	$tdataTop_Team[".NCSearch"] = true;



$tdataTop_Team[".shortTableName"] = "Top_Team";
$tdataTop_Team[".nSecOptions"] = 0;
$tdataTop_Team[".recsPerRowList"] = 1;
$tdataTop_Team[".recsPerRowPrint"] = 1;
$tdataTop_Team[".mainTableOwnerID"] = "";
$tdataTop_Team[".moveNext"] = 1;
$tdataTop_Team[".entityType"] = 2;

$tdataTop_Team[".strOriginalTableName"] = "jobfile";




$tdataTop_Team[".showAddInPopup"] = false;

$tdataTop_Team[".showEditInPopup"] = false;

$tdataTop_Team[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTop_Team[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTop_Team[".fieldsForRegister"] = array();

$tdataTop_Team[".listAjax"] = false;

	$tdataTop_Team[".audit"] = false;

	$tdataTop_Team[".locking"] = false;


$tdataTop_Team[".add"] = true;
$tdataTop_Team[".afterAddAction"] = 1;
$tdataTop_Team[".closePopupAfterAdd"] = 1;
$tdataTop_Team[".afterAddActionDetTable"] = "";

$tdataTop_Team[".list"] = true;

$tdataTop_Team[".inlineAdd"] = true;


$tdataTop_Team[".exportTo"] = true;

$tdataTop_Team[".printFriendly"] = true;


$tdataTop_Team[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataTop_Team[".searchSaving"] = false;
//

$tdataTop_Team[".showSearchPanel"] = true;
		$tdataTop_Team[".flexibleSearch"] = true;		

if (isMobile())
	$tdataTop_Team[".isUseAjaxSuggest"] = false;
else 
	$tdataTop_Team[".isUseAjaxSuggest"] = true;



																																																																																																																																			
$tdataTop_Team[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTop_Team[".isUseTimeForSearch"] = false;





$tdataTop_Team[".allSearchFields"] = array();
$tdataTop_Team[".filterFields"] = array();
$tdataTop_Team[".requiredSearchFields"] = array();



$tdataTop_Team[".googleLikeFields"] = array();
$tdataTop_Team[".googleLikeFields"][] = "end2_date";
$tdataTop_Team[".googleLikeFields"][] = "team";
$tdataTop_Team[".googleLikeFields"][] = "designer2_id";
$tdataTop_Team[".googleLikeFields"][] = "files";
$tdataTop_Team[".googleLikeFields"][] = "taken_time_avg";
$tdataTop_Team[".googleLikeFields"][] = "efficiency";
$tdataTop_Team[".googleLikeFields"][] = "DATE(jobfile.end2_date)";


$tdataTop_Team[".advSearchFields"] = array();
$tdataTop_Team[".advSearchFields"][] = "end2_date";
$tdataTop_Team[".advSearchFields"][] = "team";
$tdataTop_Team[".advSearchFields"][] = "designer2_id";
$tdataTop_Team[".advSearchFields"][] = "files";
$tdataTop_Team[".advSearchFields"][] = "taken_time_avg";
$tdataTop_Team[".advSearchFields"][] = "efficiency";
$tdataTop_Team[".advSearchFields"][] = "DATE(jobfile.end2_date)";

$tdataTop_Team[".tableType"] = "report";

$tdataTop_Team[".printerPageOrientation"] = 0;
$tdataTop_Team[".nPrinterPageScale"] = 100;

$tdataTop_Team[".nPrinterSplitRecords"] = 40;

$tdataTop_Team[".nPrinterPDFSplitRecords"] = 40;



$tdataTop_Team[".geocodingEnabled"] = false;

//report settings
$tdataTop_Team[".printReportLayout"] = 6;	

$tdataTop_Team[".reportPrintPartitionType"] = 1;	
$tdataTop_Team[".reportPrintGroupsPerPage"] = 40;	
	$tdataTop_Team[".reportPrintPDFGroupsPerPage"] = 40;
$tdataTop_Team[".lowGroup"] = 0;



$tdataTop_Team[".pageSize"] = 1;	






$tdataTop_Team[".repShowDet"] = true;

$tdataTop_Team[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY DATE(jobfile.end2_date) DESC, efficiency   DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTop_Team[".strOrderBy"] = $tstrOrderBy;

$tdataTop_Team[".orderindexes"] = array();
$tdataTop_Team[".orderindexes"][] = array(7, (0 ? "ASC" : "DESC"), "DATE(jobfile.end2_date)");
$tdataTop_Team[".orderindexes"][] = array(0, (0 ? "ASC" : "DESC"), "efficiency   ");

$tdataTop_Team[".sqlHead"] = "SELECT jobfile.end2_date,  `user`.team,  jobfile.designer2_id,  COUNT(*) AS files,  SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_avg,  (TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<60,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100 AS efficiency,  DATE(jobfile.end2_date) AS `DATE(jobfile.end2_date)`";
$tdataTop_Team[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$tdataTop_Team[".sqlWhereExpr"] = "jobfile.designer2_id IS NOT NULL OR jobfile.end2_date > '0000-00-00 00:00:00' OR (jobfile.filename not like '%retouch%' OR (jobfile.filename not like '%detail_2%')) OR TIME_TO_SEC(jobfile.designer2_time) > '0'";
$tdataTop_Team[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTop_Team[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTop_Team[".arrGroupsPerPage"] = $arrGPP;

$tdataTop_Team[".highlightSearchResults"] = true;

$tableKeysTop_Team = array();
$tdataTop_Team[".Keys"] = $tableKeysTop_Team;

$tdataTop_Team[".listFields"] = array();
$tdataTop_Team[".listFields"][] = "end2_date";
$tdataTop_Team[".listFields"][] = "team";
$tdataTop_Team[".listFields"][] = "designer2_id";
$tdataTop_Team[".listFields"][] = "files";
$tdataTop_Team[".listFields"][] = "taken_time_avg";
$tdataTop_Team[".listFields"][] = "efficiency";
$tdataTop_Team[".listFields"][] = "DATE(jobfile.end2_date)";

$tdataTop_Team[".hideMobileList"] = array();


$tdataTop_Team[".viewFields"] = array();
$tdataTop_Team[".viewFields"][] = "end2_date";
$tdataTop_Team[".viewFields"][] = "team";
$tdataTop_Team[".viewFields"][] = "designer2_id";
$tdataTop_Team[".viewFields"][] = "files";
$tdataTop_Team[".viewFields"][] = "taken_time_avg";
$tdataTop_Team[".viewFields"][] = "efficiency";
$tdataTop_Team[".viewFields"][] = "DATE(jobfile.end2_date)";

$tdataTop_Team[".addFields"] = array();
$tdataTop_Team[".addFields"][] = "end2_date";
$tdataTop_Team[".addFields"][] = "designer2_id";

$tdataTop_Team[".masterListFields"] = array();
$tdataTop_Team[".masterListFields"][] = "end2_date";
$tdataTop_Team[".masterListFields"][] = "team";
$tdataTop_Team[".masterListFields"][] = "designer2_id";
$tdataTop_Team[".masterListFields"][] = "files";
$tdataTop_Team[".masterListFields"][] = "taken_time_avg";
$tdataTop_Team[".masterListFields"][] = "efficiency";
$tdataTop_Team[".masterListFields"][] = "DATE(jobfile.end2_date)";

$tdataTop_Team[".inlineAddFields"] = array();
$tdataTop_Team[".inlineAddFields"][] = "end2_date";
$tdataTop_Team[".inlineAddFields"][] = "designer2_id";

$tdataTop_Team[".editFields"] = array();
$tdataTop_Team[".editFields"][] = "end2_date";
$tdataTop_Team[".editFields"][] = "designer2_id";

$tdataTop_Team[".inlineEditFields"] = array();
$tdataTop_Team[".inlineEditFields"][] = "end2_date";
$tdataTop_Team[".inlineEditFields"][] = "designer2_id";

$tdataTop_Team[".exportFields"] = array();
$tdataTop_Team[".exportFields"][] = "end2_date";
$tdataTop_Team[".exportFields"][] = "team";
$tdataTop_Team[".exportFields"][] = "designer2_id";
$tdataTop_Team[".exportFields"][] = "files";
$tdataTop_Team[".exportFields"][] = "taken_time_avg";
$tdataTop_Team[".exportFields"][] = "efficiency";
$tdataTop_Team[".exportFields"][] = "DATE(jobfile.end2_date)";

$tdataTop_Team[".importFields"] = array();
$tdataTop_Team[".importFields"][] = "end2_date";
$tdataTop_Team[".importFields"][] = "team";
$tdataTop_Team[".importFields"][] = "designer2_id";
$tdataTop_Team[".importFields"][] = "files";
$tdataTop_Team[".importFields"][] = "taken_time_avg";
$tdataTop_Team[".importFields"][] = "efficiency";
$tdataTop_Team[".importFields"][] = "DATE(jobfile.end2_date)";

$tdataTop_Team[".printFields"] = array();
$tdataTop_Team[".printFields"][] = "end2_date";
$tdataTop_Team[".printFields"][] = "team";
$tdataTop_Team[".printFields"][] = "designer2_id";
$tdataTop_Team[".printFields"][] = "files";
$tdataTop_Team[".printFields"][] = "taken_time_avg";
$tdataTop_Team[".printFields"][] = "efficiency";
$tdataTop_Team[".printFields"][] = "DATE(jobfile.end2_date)";

//	end2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "end2_date";
	$fdata["GoodName"] = "end2_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Top_Team","end2_date"); 
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
	
	
	
	

	

	
	$tdataTop_Team["end2_date"] = $fdata;
//	team
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team";
	$fdata["GoodName"] = "team";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Top_Team","team"); 
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
	
	
	
	

	

	
	$tdataTop_Team["team"] = $fdata;
//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Top_Team","designer2_id"); 
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
	
	
	
	

	

	
	$tdataTop_Team["designer2_id"] = $fdata;
//	files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "files";
	$fdata["GoodName"] = "files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Top_Team","files"); 
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
	
	
	
	

	

	
	$tdataTop_Team["files"] = $fdata;
//	taken_time_avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "taken_time_avg";
	$fdata["GoodName"] = "taken_time_avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Top_Team","taken_time_avg"); 
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
	
	
	
	

	

	
	$tdataTop_Team["taken_time_avg"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Top_Team","efficiency"); 
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
	
	
	
	

	

	
	$tdataTop_Team["efficiency"] = $fdata;
//	DATE(jobfile.end2_date)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DATE(jobfile.end2_date)";
	$fdata["GoodName"] = "DATE_jobfile_end2_date_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Top_Team","DATE_jobfile_end2_date_"); 
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
	
	
	
	

	

	
	$tdataTop_Team["DATE(jobfile.end2_date)"] = $fdata;

	
$tables_data["Top_Team"]=&$tdataTop_Team;
$field_labels["Top_Team"] = &$fieldLabelsTop_Team;
$fieldToolTips["Top_Team"] = &$fieldToolTipsTop_Team;
$page_titles["Top_Team"] = &$pageTitlesTop_Team;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Top_Team"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Top_Team"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Top_Team()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile.end2_date,  `user`.team,  jobfile.designer2_id,  COUNT(*) AS files,  SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_avg,  (TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<60,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100 AS efficiency,  DATE(jobfile.end2_date) AS `DATE(jobfile.end2_date)`";
$proto0["m_strFrom"] = "FROM jobfile  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto0["m_strWhere"] = "jobfile.designer2_id IS NOT NULL OR jobfile.end2_date > '0000-00-00 00:00:00' OR (jobfile.filename not like '%retouch%' OR (jobfile.filename not like '%detail_2%')) OR TIME_TO_SEC(jobfile.designer2_time) > '0'";
$proto0["m_strOrderBy"] = "ORDER BY DATE(jobfile.end2_date) DESC, efficiency   DESC";
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
	"m_srcTableName" => "Top_Team"
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
	"m_srcTableName" => "Top_Team"
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
	"m_srcTableName" => "Top_Team"
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
	"m_srcTableName" => "Top_Team"
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
	"m_srcTableName" => "Top_Team"
));

$proto18["m_sql"] = "jobfile.end2_date";
$proto18["m_srcTableName"] = "Top_Team";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Top_Team"
));

$proto20["m_sql"] = "`user`.team";
$proto20["m_srcTableName"] = "Top_Team";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Top_Team"
));

$proto22["m_sql"] = "jobfile.designer2_id";
$proto22["m_srcTableName"] = "Top_Team";
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
$proto24["m_srcTableName"] = "Top_Team";
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
$proto27["m_srcTableName"] = "Top_Team";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "taken_time_avg";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<60,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100"
));

$proto30["m_sql"] = "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<60,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100";
$proto30["m_srcTableName"] = "Top_Team";
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
$proto32["m_srcTableName"] = "Top_Team";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "DATE(jobfile.end2_date)";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "jobfile";
$proto36["m_srcTableName"] = "Top_Team";
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
$proto35["m_srcTableName"] = "Top_Team";
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
$proto40["m_srcTableName"] = "Top_Team";
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
$proto39["m_srcTableName"] = "Top_Team";
$proto41=array();
$proto41["m_sql"] = "jobfile.designer2_id = `user`.user_id";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Top_Team"
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
$proto44["m_srcTableName"] = "Top_Team";
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
$proto43["m_srcTableName"] = "Top_Team";
$proto45=array();
$proto45["m_sql"] = "jobfile.project_id = pdf.pdf_id";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Top_Team"
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
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Top_Team"
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
	"m_sql" => "efficiency   "
));

$proto55["m_column"]=$obj;
$proto55["m_bAsc"] = 0;
$proto55["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto55);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Top_Team";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Top_Team = createSqlQuery_Top_Team();


	
							
	
$tdataTop_Team[".sqlquery"] = $queryData_Top_Team;

$tableEvents["Top_Team"] = new eventsBase;
$tdataTop_Team[".hasEvents"] = false;

?>