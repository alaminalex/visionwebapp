<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTop_Designer = array();	
	$tdataTop_Designer[".truncateText"] = true;
	$tdataTop_Designer[".NumberOfChars"] = 80; 
	$tdataTop_Designer[".ShortName"] = "Top_Designer";
	$tdataTop_Designer[".OwnerID"] = "";
	$tdataTop_Designer[".OriginalTable"] = "user";

//	field labels
$fieldLabelsTop_Designer = array();
$fieldToolTipsTop_Designer = array();
$pageTitlesTop_Designer = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTop_Designer["English"] = array();
	$fieldToolTipsTop_Designer["English"] = array();
	$pageTitlesTop_Designer["English"] = array();
	$fieldLabelsTop_Designer["English"]["team"] = "Team";
	$fieldToolTipsTop_Designer["English"]["team"] = "";
	$fieldLabelsTop_Designer["English"]["end2_date"] = "End2 Date";
	$fieldToolTipsTop_Designer["English"]["end2_date"] = "";
	$fieldLabelsTop_Designer["English"]["files"] = "Files";
	$fieldToolTipsTop_Designer["English"]["files"] = "";
	$fieldLabelsTop_Designer["English"]["taken_time_avg"] = "Taken Time Avg";
	$fieldToolTipsTop_Designer["English"]["taken_time_avg"] = "";
	$fieldLabelsTop_Designer["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsTop_Designer["English"]["efficiency"] = "";
	$fieldLabelsTop_Designer["English"]["jobfile_designer2_id"] = "Jobfile.designer2 Id";
	$fieldToolTipsTop_Designer["English"]["jobfile.designer2_id"] = "";
	$fieldLabelsTop_Designer["English"]["DATE_jobfile_end2_date_"] = "DATE(jobfile.end2 Date)";
	$fieldToolTipsTop_Designer["English"]["DATE(jobfile.end2_date)"] = "";
	$fieldLabelsTop_Designer["English"]["designer2_id"] = "Designer2 Id";
	$fieldToolTipsTop_Designer["English"]["designer2_id"] = "";
	if (count($fieldToolTipsTop_Designer["English"]))
		$tdataTop_Designer[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTop_Designer[""] = array();
	$fieldToolTipsTop_Designer[""] = array();
	$pageTitlesTop_Designer[""] = array();
	$fieldLabelsTop_Designer[""]["end2_date"] = "End2 Date";
	$fieldToolTipsTop_Designer[""]["end2_date"] = "";
	$fieldLabelsTop_Designer[""]["files"] = "Files";
	$fieldToolTipsTop_Designer[""]["files"] = "";
	$fieldLabelsTop_Designer[""]["taken_time_avg"] = "Taken Time Avg";
	$fieldToolTipsTop_Designer[""]["taken_time_avg"] = "";
	$fieldLabelsTop_Designer[""]["efficiency"] = "Efficiency";
	$fieldToolTipsTop_Designer[""]["efficiency"] = "";
	$fieldLabelsTop_Designer[""]["jobfile_designer2_id"] = "Jobfile.designer2 Id";
	$fieldToolTipsTop_Designer[""]["jobfile.designer2_id"] = "";
	$fieldLabelsTop_Designer[""]["DATE_jobfile_end2_date_"] = "DATE(jobfile.end2 Date)";
	$fieldToolTipsTop_Designer[""]["DATE(jobfile.end2_date)"] = "";
	$fieldLabelsTop_Designer[""]["designer2_id"] = "Designer2 Id";
	$fieldToolTipsTop_Designer[""]["designer2_id"] = "";
	if (count($fieldToolTipsTop_Designer[""]))
		$tdataTop_Designer[".isUseToolTips"] = true;
}
	
	
	$tdataTop_Designer[".NCSearch"] = true;



$tdataTop_Designer[".shortTableName"] = "Top_Designer";
$tdataTop_Designer[".nSecOptions"] = 0;
$tdataTop_Designer[".recsPerRowList"] = 1;
$tdataTop_Designer[".mainTableOwnerID"] = "";
$tdataTop_Designer[".moveNext"] = 1;
$tdataTop_Designer[".nType"] = 2;

$tdataTop_Designer[".strOriginalTableName"] = "user";




$tdataTop_Designer[".showAddInPopup"] = false;

$tdataTop_Designer[".showEditInPopup"] = false;

$tdataTop_Designer[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTop_Designer[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTop_Designer[".fieldsForRegister"] = array();

$tdataTop_Designer[".listAjax"] = false;

	$tdataTop_Designer[".audit"] = false;

	$tdataTop_Designer[".locking"] = false;


$tdataTop_Designer[".list"] = true;

$tdataTop_Designer[".inlineAdd"] = true;


$tdataTop_Designer[".exportTo"] = true;

$tdataTop_Designer[".printFriendly"] = true;


$tdataTop_Designer[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataTop_Designer[".searchSaving"] = false;
//

$tdataTop_Designer[".showSearchPanel"] = true;
		$tdataTop_Designer[".flexibleSearch"] = true;		

if (isMobile())
	$tdataTop_Designer[".isUseAjaxSuggest"] = false;
else 
	$tdataTop_Designer[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																														
$tdataTop_Designer[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTop_Designer[".isUseTimeForSearch"] = false;



$tdataTop_Designer[".useDetailsPreview"] = true;


$tdataTop_Designer[".allSearchFields"] = array();
$tdataTop_Designer[".filterFields"] = array();
$tdataTop_Designer[".requiredSearchFields"] = array();



$tdataTop_Designer[".googleLikeFields"] = array();
$tdataTop_Designer[".googleLikeFields"][] = "end2_date";
$tdataTop_Designer[".googleLikeFields"][] = "designer2_id";
$tdataTop_Designer[".googleLikeFields"][] = "team";
$tdataTop_Designer[".googleLikeFields"][] = "files";
$tdataTop_Designer[".googleLikeFields"][] = "taken_time_avg";
$tdataTop_Designer[".googleLikeFields"][] = "efficiency";
$tdataTop_Designer[".googleLikeFields"][] = "jobfile.designer2_id";
$tdataTop_Designer[".googleLikeFields"][] = "DATE(jobfile.end2_date)";


$tdataTop_Designer[".advSearchFields"] = array();
$tdataTop_Designer[".advSearchFields"][] = "designer2_id";
$tdataTop_Designer[".advSearchFields"][] = "DATE(jobfile.end2_date)";
$tdataTop_Designer[".advSearchFields"][] = "files";
$tdataTop_Designer[".advSearchFields"][] = "taken_time_avg";
$tdataTop_Designer[".advSearchFields"][] = "efficiency";
$tdataTop_Designer[".advSearchFields"][] = "jobfile.designer2_id";
$tdataTop_Designer[".advSearchFields"][] = "end2_date";
$tdataTop_Designer[".advSearchFields"][] = "team";

$tdataTop_Designer[".tableType"] = "report";

$tdataTop_Designer[".printerPageOrientation"] = 0;
$tdataTop_Designer[".nPrinterPageScale"] = 100;

$tdataTop_Designer[".nPrinterSplitRecords"] = 40;

$tdataTop_Designer[".nPrinterPDFSplitRecords"] = 40;


//report settings
$tdataTop_Designer[".printReportLayout"] = 6;	

$tdataTop_Designer[".reportPrintPartitionType"] = 1;	
$tdataTop_Designer[".reportPrintGroupsPerPage"] = 40;	
	$tdataTop_Designer[".reportPrintPDFGroupsPerPage"] = 40;
$tdataTop_Designer[".lowGroup"] = 0;



$tdataTop_Designer[".pageSize"] = 3;	






$tdataTop_Designer[".repShowDet"] = true;

$tdataTop_Designer[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY DATE(jobfile.end2_date) DESC, files DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTop_Designer[".strOrderBy"] = $tstrOrderBy;

$tdataTop_Designer[".orderindexes"] = array();
$tdataTop_Designer[".orderindexes"][] = array(8, (0 ? "ASC" : "DESC"), "DATE(jobfile.end2_date)");
$tdataTop_Designer[".orderindexes"][] = array(0, (0 ? "ASC" : "DESC"), "files ");

$tdataTop_Designer[".sqlHead"] = "SELECT jobfile.end2_date,  jobfile.designer2_id,  `user`.team,  COUNT(*) AS files,  SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_avg,  (TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<60,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100 AS efficiency,  jobfile.designer2_id AS `jobfile.designer2_id`,  DATE(jobfile.end2_date) AS `DATE(jobfile.end2_date)`";
$tdataTop_Designer[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$tdataTop_Designer[".sqlWhereExpr"] = "jobfile.designer2_id IS NOT NULL OR jobfile.end2_date > '0000-00-00 00:00:00' OR ((jobfile.filename not like '%retouch%') OR (jobfile.filename not like '%detail_2%')) OR TIME_TO_SEC(jobfile.designer2_time) > '0'";
$tdataTop_Designer[".sqlTail"] = "GROUP BY DATE(jobfile.end2_date), jobfile.designer2_id";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTop_Designer[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTop_Designer[".arrGroupsPerPage"] = $arrGPP;

$tdataTop_Designer[".highlightSearchResults"] = true;

$tableKeysTop_Designer = array();
$tdataTop_Designer[".Keys"] = $tableKeysTop_Designer;

$tdataTop_Designer[".listFields"] = array();
$tdataTop_Designer[".listFields"][] = "designer2_id";
$tdataTop_Designer[".listFields"][] = "DATE(jobfile.end2_date)";
$tdataTop_Designer[".listFields"][] = "files";
$tdataTop_Designer[".listFields"][] = "taken_time_avg";
$tdataTop_Designer[".listFields"][] = "efficiency";
$tdataTop_Designer[".listFields"][] = "jobfile.designer2_id";
$tdataTop_Designer[".listFields"][] = "end2_date";
$tdataTop_Designer[".listFields"][] = "team";

$tdataTop_Designer[".hideMobileList"] = array();


$tdataTop_Designer[".viewFields"] = array();
$tdataTop_Designer[".viewFields"][] = "designer2_id";
$tdataTop_Designer[".viewFields"][] = "DATE(jobfile.end2_date)";
$tdataTop_Designer[".viewFields"][] = "files";
$tdataTop_Designer[".viewFields"][] = "taken_time_avg";
$tdataTop_Designer[".viewFields"][] = "efficiency";
$tdataTop_Designer[".viewFields"][] = "jobfile.designer2_id";
$tdataTop_Designer[".viewFields"][] = "end2_date";
$tdataTop_Designer[".viewFields"][] = "team";

$tdataTop_Designer[".addFields"] = array();
$tdataTop_Designer[".addFields"][] = "team";

$tdataTop_Designer[".inlineAddFields"] = array();
$tdataTop_Designer[".inlineAddFields"][] = "team";

$tdataTop_Designer[".editFields"] = array();
$tdataTop_Designer[".editFields"][] = "team";

$tdataTop_Designer[".inlineEditFields"] = array();
$tdataTop_Designer[".inlineEditFields"][] = "team";

$tdataTop_Designer[".exportFields"] = array();
$tdataTop_Designer[".exportFields"][] = "designer2_id";
$tdataTop_Designer[".exportFields"][] = "DATE(jobfile.end2_date)";
$tdataTop_Designer[".exportFields"][] = "files";
$tdataTop_Designer[".exportFields"][] = "taken_time_avg";
$tdataTop_Designer[".exportFields"][] = "efficiency";
$tdataTop_Designer[".exportFields"][] = "jobfile.designer2_id";
$tdataTop_Designer[".exportFields"][] = "end2_date";
$tdataTop_Designer[".exportFields"][] = "team";

$tdataTop_Designer[".importFields"] = array();
$tdataTop_Designer[".importFields"][] = "end2_date";
$tdataTop_Designer[".importFields"][] = "designer2_id";
$tdataTop_Designer[".importFields"][] = "team";
$tdataTop_Designer[".importFields"][] = "files";
$tdataTop_Designer[".importFields"][] = "taken_time_avg";
$tdataTop_Designer[".importFields"][] = "efficiency";
$tdataTop_Designer[".importFields"][] = "jobfile.designer2_id";
$tdataTop_Designer[".importFields"][] = "DATE(jobfile.end2_date)";

$tdataTop_Designer[".printFields"] = array();
$tdataTop_Designer[".printFields"][] = "designer2_id";
$tdataTop_Designer[".printFields"][] = "DATE(jobfile.end2_date)";
$tdataTop_Designer[".printFields"][] = "files";
$tdataTop_Designer[".printFields"][] = "taken_time_avg";
$tdataTop_Designer[".printFields"][] = "efficiency";
$tdataTop_Designer[".printFields"][] = "jobfile.designer2_id";
$tdataTop_Designer[".printFields"][] = "end2_date";
$tdataTop_Designer[".printFields"][] = "team";

//	end2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "end2_date";
	$fdata["GoodName"] = "end2_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Top_Designer","end2_date"); 
	$fdata["FieldType"] = 135;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	
	
	

	

	
	$tdataTop_Designer["end2_date"] = $fdata;
//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Top_Designer","designer2_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
	
	
	
	

	

	
	$tdataTop_Designer["designer2_id"] = $fdata;
//	team
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "team";
	$fdata["GoodName"] = "team";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Top_Designer","team"); 
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
	
		$fdata["strField"] = "team"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.team";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
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
	
	
	$fdata["isSeparate"] = true;
	
	
	
	

	

	
	$tdataTop_Designer["team"] = $fdata;
//	files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "files";
	$fdata["GoodName"] = "files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Top_Designer","files"); 
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
	
	
	
	

	

	
	$tdataTop_Designer["files"] = $fdata;
//	taken_time_avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "taken_time_avg";
	$fdata["GoodName"] = "taken_time_avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Top_Designer","taken_time_avg"); 
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
	
	
	
	

	

	
	$tdataTop_Designer["taken_time_avg"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Top_Designer","efficiency"); 
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
	
	
	
	

	

	
	$tdataTop_Designer["efficiency"] = $fdata;
//	jobfile.designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "jobfile.designer2_id";
	$fdata["GoodName"] = "jobfile_designer2_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Top_Designer","jobfile_designer2_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	
	
	

	

	
	$tdataTop_Designer["jobfile.designer2_id"] = $fdata;
//	DATE(jobfile.end2_date)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DATE(jobfile.end2_date)";
	$fdata["GoodName"] = "DATE_jobfile_end2_date_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Top_Designer","DATE_jobfile_end2_date_"); 
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
	
	
	
	

	

	
	$tdataTop_Designer["DATE(jobfile.end2_date)"] = $fdata;

	
$tables_data["Top_Designer"]=&$tdataTop_Designer;
$field_labels["Top_Designer"] = &$fieldLabelsTop_Designer;
$fieldToolTips["Top_Designer"] = &$fieldToolTipsTop_Designer;
$page_titles["Top_Designer"] = &$pageTitlesTop_Designer;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Top_Designer"] = array();
//	job
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="job";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "job";
	$detailsParam["dCaptionTable"] = GetTableCaption("job");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["Top_Designer"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Top_Designer"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Top_Designer"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["Top_Designer"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Top_Designer"][$dIndex]["detailKeys"][]="notifer_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["Top_Designer"] = array();


	
				$strOriginalDetailsTable="group";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Top_Designer"][0] = $masterParams;	
				$masterTablesData["Top_Designer"][0]["masterKeys"] = array();
	$masterTablesData["Top_Designer"][0]["masterKeys"][]="group_id";
				$masterTablesData["Top_Designer"][0]["detailKeys"] = array();
	$masterTablesData["Top_Designer"][0]["detailKeys"][]="group_id";
		
	
				$strOriginalDetailsTable="department";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="department";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "department";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Top_Designer"][1] = $masterParams;	
				$masterTablesData["Top_Designer"][1]["masterKeys"] = array();
	$masterTablesData["Top_Designer"][1]["masterKeys"][]="department_id";
				$masterTablesData["Top_Designer"][1]["detailKeys"] = array();
	$masterTablesData["Top_Designer"][1]["detailKeys"][]="department_id";
		
	
				$strOriginalDetailsTable="subdivision";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="subdivision";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "subdivision";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Top_Designer"][2] = $masterParams;	
				$masterTablesData["Top_Designer"][2]["masterKeys"] = array();
	$masterTablesData["Top_Designer"][2]["masterKeys"][]="subdiv_id";
				$masterTablesData["Top_Designer"][2]["detailKeys"] = array();
	$masterTablesData["Top_Designer"][2]["detailKeys"][]="subdiv_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Top_Designer()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile.end2_date,  jobfile.designer2_id,  `user`.team,  COUNT(*) AS files,  SEC_TO_TIME(AVG(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_avg,  (TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<60,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100 AS efficiency,  jobfile.designer2_id AS `jobfile.designer2_id`,  DATE(jobfile.end2_date) AS `DATE(jobfile.end2_date)`";
$proto0["m_strFrom"] = "FROM jobfile  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto0["m_strWhere"] = "jobfile.designer2_id IS NOT NULL OR jobfile.end2_date > '0000-00-00 00:00:00' OR ((jobfile.filename not like '%retouch%') OR (jobfile.filename not like '%detail_2%')) OR TIME_TO_SEC(jobfile.designer2_time) > '0'";
$proto0["m_strOrderBy"] = "ORDER BY DATE(jobfile.end2_date) DESC, files DESC";
$proto0["m_strTail"] = "GROUP BY DATE(jobfile.end2_date), jobfile.designer2_id";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "jobfile.designer2_id IS NOT NULL OR jobfile.end2_date > '0000-00-00 00:00:00' OR ((jobfile.filename not like '%retouch%') OR (jobfile.filename not like '%detail_2%')) OR TIME_TO_SEC(jobfile.designer2_time) > '0'";
$proto1["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.designer2_id IS NOT NULL OR jobfile.end2_date > '0000-00-00 00:00:00' OR ((jobfile.filename not like '%retouch%') OR (jobfile.filename not like '%detail_2%')) OR TIME_TO_SEC(jobfile.designer2_time) > '0'"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.designer2_id IS NOT NULL";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Top_Designer"
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
	"m_srcTableName" => "Top_Designer"
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
$proto7["m_sql"] = "(jobfile.filename not like '%retouch%') OR (jobfile.filename not like '%detail_2%')";
$proto7["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.filename not like '%retouch%') OR (jobfile.filename not like '%detail_2%')"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
						$proto9=array();
$proto9["m_sql"] = "jobfile.filename not like '%retouch%'";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Top_Designer"
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "not like '%retouch%'";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = true;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

			$proto7["m_contained"][]=$obj;
						$proto11=array();
$proto11["m_sql"] = "jobfile.filename not like '%detail_2%'";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Top_Designer"
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
	"m_srcTableName" => "Top_Designer"
));

$proto18["m_sql"] = "jobfile.end2_date";
$proto18["m_srcTableName"] = "Top_Designer";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Top_Designer"
));

$proto20["m_sql"] = "jobfile.designer2_id";
$proto20["m_srcTableName"] = "Top_Designer";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Top_Designer"
));

$proto22["m_sql"] = "`user`.team";
$proto22["m_srcTableName"] = "Top_Designer";
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
$proto24["m_srcTableName"] = "Top_Designer";
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
$proto27["m_srcTableName"] = "Top_Designer";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "taken_time_avg";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<60,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100"
));

$proto30["m_sql"] = "(TIME_TO_SEC(SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))/(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<60,pdf.pdf_estimated_average,jobfile.designer2_time)))))* 100";
$proto30["m_srcTableName"] = "Top_Designer";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Top_Designer"
));

$proto32["m_sql"] = "jobfile.designer2_id";
$proto32["m_srcTableName"] = "Top_Designer";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "jobfile.designer2_id";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$proto35=array();
$proto35["m_functiontype"] = "SQLF_CUSTOM";
$proto35["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.end2_date"
));

$proto35["m_arguments"][]=$obj;
$proto35["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto35);

$proto34["m_sql"] = "DATE(jobfile.end2_date)";
$proto34["m_srcTableName"] = "Top_Designer";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "DATE(jobfile.end2_date)";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "jobfile";
$proto38["m_srcTableName"] = "Top_Designer";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "jobfile_id";
$proto38["m_columns"][] = "file_url";
$proto38["m_columns"][] = "client_id";
$proto38["m_columns"][] = "work_id";
$proto38["m_columns"][] = "job_id";
$proto38["m_columns"][] = "project_id";
$proto38["m_columns"][] = "folder_name";
$proto38["m_columns"][] = "filename";
$proto38["m_columns"][] = "jobfile_type";
$proto38["m_columns"][] = "jobfile_note";
$proto38["m_columns"][] = "jobfile_status_id";
$proto38["m_columns"][] = "downloader_id";
$proto38["m_columns"][] = "distributor_id";
$proto38["m_columns"][] = "designer_id";
$proto38["m_columns"][] = "qc_id";
$proto38["m_columns"][] = "uploader_id";
$proto38["m_columns"][] = "notifier_id";
$proto38["m_columns"][] = "rejector_id";
$proto38["m_columns"][] = "download_date";
$proto38["m_columns"][] = "distribute_date";
$proto38["m_columns"][] = "start_date";
$proto38["m_columns"][] = "end_date";
$proto38["m_columns"][] = "designer_time";
$proto38["m_columns"][] = "qcstart_date";
$proto38["m_columns"][] = "qcend_date";
$proto38["m_columns"][] = "qc_time";
$proto38["m_columns"][] = "upload_date";
$proto38["m_columns"][] = "notify_date";
$proto38["m_columns"][] = "reject_date";
$proto38["m_columns"][] = "reject_reason";
$proto38["m_columns"][] = "designer2_id";
$proto38["m_columns"][] = "start2_date";
$proto38["m_columns"][] = "end2_date";
$proto38["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "jobfile";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "Top_Designer";
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
												$proto41=array();
$proto41["m_link"] = "SQLL_LEFTJOIN";
			$proto42=array();
$proto42["m_strName"] = "user";
$proto42["m_srcTableName"] = "Top_Designer";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "user_id";
$proto42["m_columns"][] = "user_status";
$proto42["m_columns"][] = "username";
$proto42["m_columns"][] = "password";
$proto42["m_columns"][] = "department_id";
$proto42["m_columns"][] = "subdiv_id";
$proto42["m_columns"][] = "group_id";
$proto42["m_columns"][] = "designation";
$proto42["m_columns"][] = "employee_id";
$proto42["m_columns"][] = "fname";
$proto42["m_columns"][] = "lname";
$proto42["m_columns"][] = "nickname";
$proto42["m_columns"][] = "email";
$proto42["m_columns"][] = "phone";
$proto42["m_columns"][] = "mobile";
$proto42["m_columns"][] = "log";
$proto42["m_columns"][] = "images_assigned";
$proto42["m_columns"][] = "user_picture";
$proto42["m_columns"][] = "team";
$proto42["m_columns"][] = "ad_group_id";
$proto42["m_columns"][] = "lastaccess";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$proto41["m_alias"] = "";
$proto41["m_srcTableName"] = "Top_Designer";
$proto43=array();
$proto43["m_sql"] = "jobfile.designer2_id = `user`.user_id";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Top_Designer"
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "= `user`.user_id";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
												$proto45=array();
$proto45["m_link"] = "SQLL_LEFTJOIN";
			$proto46=array();
$proto46["m_strName"] = "pdf";
$proto46["m_srcTableName"] = "Top_Designer";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "pdf_id";
$proto46["m_columns"][] = "pdf_name";
$proto46["m_columns"][] = "client_id";
$proto46["m_columns"][] = "pdf_location";
$proto46["m_columns"][] = "last_update";
$proto46["m_columns"][] = "pdf_estimated_average";
$proto46["m_columns"][] = "pdf_estimated_average1";
$proto46["m_columns"][] = "pdf_estimated_average2";
$proto46["m_columns"][] = "pdf_actual_average";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "Top_Designer";
$proto47=array();
$proto47["m_sql"] = "jobfile.project_id = pdf.pdf_id";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Top_Designer"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "= pdf.pdf_id";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto49=array();
						$proto50=array();
$proto50["m_functiontype"] = "SQLF_CUSTOM";
$proto50["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.end2_date"
));

$proto50["m_arguments"][]=$obj;
$proto50["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto50);

$proto49["m_column"]=$obj;
$obj = new SQLGroupByItem($proto49);

$proto0["m_groupby"][]=$obj;
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Top_Designer"
));

$proto52["m_column"]=$obj;
$obj = new SQLGroupByItem($proto52);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto54=array();
						$proto55=array();
$proto55["m_functiontype"] = "SQLF_CUSTOM";
$proto55["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.end2_date"
));

$proto55["m_arguments"][]=$obj;
$proto55["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto55);

$proto54["m_column"]=$obj;
$proto54["m_bAsc"] = 0;
$proto54["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto54);

$proto0["m_orderby"][]=$obj;					
												$proto57=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "files "
));

$proto57["m_column"]=$obj;
$proto57["m_bAsc"] = 0;
$proto57["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto57);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Top_Designer";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Top_Designer = createSqlQuery_Top_Designer();


	
								
	
$tdataTop_Designer[".sqlquery"] = $queryData_Top_Designer;

$tableEvents["Top_Designer"] = new eventsBase;
$tdataTop_Designer[".hasEvents"] = false;

?>