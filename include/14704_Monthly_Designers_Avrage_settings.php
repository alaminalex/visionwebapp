<?php
require_once(getabspath("classes/cipherer.php"));




$tdata14704_Monthly_Designers_Avrage = array();	
	$tdata14704_Monthly_Designers_Avrage[".truncateText"] = true;
	$tdata14704_Monthly_Designers_Avrage[".NumberOfChars"] = 80; 
	$tdata14704_Monthly_Designers_Avrage[".ShortName"] = "14704_Monthly_Designers_Avrage";
	$tdata14704_Monthly_Designers_Avrage[".OwnerID"] = "";
	$tdata14704_Monthly_Designers_Avrage[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabels14704_Monthly_Designers_Avrage = array();
$fieldToolTips14704_Monthly_Designers_Avrage = array();
$pageTitles14704_Monthly_Designers_Avrage = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabels14704_Monthly_Designers_Avrage["English"] = array();
	$fieldToolTips14704_Monthly_Designers_Avrage["English"] = array();
	$pageTitles14704_Monthly_Designers_Avrage["English"] = array();
	$fieldLabels14704_Monthly_Designers_Avrage["English"]["end2_date"] = "End2 Date";
	$fieldToolTips14704_Monthly_Designers_Avrage["English"]["end2_date"] = "";
	$fieldLabels14704_Monthly_Designers_Avrage["English"]["files"] = "Files";
	$fieldToolTips14704_Monthly_Designers_Avrage["English"]["files"] = "";
	$fieldLabels14704_Monthly_Designers_Avrage["English"]["eta_average"] = "Eta Average";
	$fieldToolTips14704_Monthly_Designers_Avrage["English"]["eta_average"] = "";
	$fieldLabels14704_Monthly_Designers_Avrage["English"]["current_avg"] = "Current Avg";
	$fieldToolTips14704_Monthly_Designers_Avrage["English"]["current_avg"] = "";
	$fieldLabels14704_Monthly_Designers_Avrage["English"]["team"] = "Team";
	$fieldToolTips14704_Monthly_Designers_Avrage["English"]["team"] = "";
	$fieldLabels14704_Monthly_Designers_Avrage["English"]["designer2_id"] = "Designer2 Id";
	$fieldToolTips14704_Monthly_Designers_Avrage["English"]["designer2_id"] = "";
	if (count($fieldToolTips14704_Monthly_Designers_Avrage["English"]))
		$tdata14704_Monthly_Designers_Avrage[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels14704_Monthly_Designers_Avrage[""] = array();
	$fieldToolTips14704_Monthly_Designers_Avrage[""] = array();
	$pageTitles14704_Monthly_Designers_Avrage[""] = array();
	if (count($fieldToolTips14704_Monthly_Designers_Avrage[""]))
		$tdata14704_Monthly_Designers_Avrage[".isUseToolTips"] = true;
}
	
	
	$tdata14704_Monthly_Designers_Avrage[".NCSearch"] = true;



$tdata14704_Monthly_Designers_Avrage[".shortTableName"] = "14704_Monthly_Designers_Avrage";
$tdata14704_Monthly_Designers_Avrage[".nSecOptions"] = 0;
$tdata14704_Monthly_Designers_Avrage[".recsPerRowList"] = 1;
$tdata14704_Monthly_Designers_Avrage[".recsPerRowPrint"] = 1;
$tdata14704_Monthly_Designers_Avrage[".mainTableOwnerID"] = "";
$tdata14704_Monthly_Designers_Avrage[".moveNext"] = 1;
$tdata14704_Monthly_Designers_Avrage[".entityType"] = 2;

$tdata14704_Monthly_Designers_Avrage[".strOriginalTableName"] = "jobfile";




$tdata14704_Monthly_Designers_Avrage[".showAddInPopup"] = false;

$tdata14704_Monthly_Designers_Avrage[".showEditInPopup"] = false;

$tdata14704_Monthly_Designers_Avrage[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata14704_Monthly_Designers_Avrage[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata14704_Monthly_Designers_Avrage[".fieldsForRegister"] = array();

$tdata14704_Monthly_Designers_Avrage[".listAjax"] = false;

	$tdata14704_Monthly_Designers_Avrage[".audit"] = false;

	$tdata14704_Monthly_Designers_Avrage[".locking"] = false;


$tdata14704_Monthly_Designers_Avrage[".add"] = true;
$tdata14704_Monthly_Designers_Avrage[".afterAddAction"] = 0;
$tdata14704_Monthly_Designers_Avrage[".closePopupAfterAdd"] = 1;
$tdata14704_Monthly_Designers_Avrage[".afterAddActionDetTable"] = "";

$tdata14704_Monthly_Designers_Avrage[".list"] = true;

$tdata14704_Monthly_Designers_Avrage[".inlineAdd"] = true;


$tdata14704_Monthly_Designers_Avrage[".exportTo"] = true;

$tdata14704_Monthly_Designers_Avrage[".printFriendly"] = true;


$tdata14704_Monthly_Designers_Avrage[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdata14704_Monthly_Designers_Avrage[".searchSaving"] = false;
//

$tdata14704_Monthly_Designers_Avrage[".showSearchPanel"] = true;
		$tdata14704_Monthly_Designers_Avrage[".flexibleSearch"] = true;		

if (isMobile())
	$tdata14704_Monthly_Designers_Avrage[".isUseAjaxSuggest"] = false;
else 
	$tdata14704_Monthly_Designers_Avrage[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdata14704_Monthly_Designers_Avrage[".addPageEvents"] = false;

// use timepicker for search panel
$tdata14704_Monthly_Designers_Avrage[".isUseTimeForSearch"] = false;





$tdata14704_Monthly_Designers_Avrage[".allSearchFields"] = array();
$tdata14704_Monthly_Designers_Avrage[".filterFields"] = array();
$tdata14704_Monthly_Designers_Avrage[".requiredSearchFields"] = array();

$tdata14704_Monthly_Designers_Avrage[".allSearchFields"][] = "end2_date";
	$tdata14704_Monthly_Designers_Avrage[".allSearchFields"][] = "team";
	$tdata14704_Monthly_Designers_Avrage[".allSearchFields"][] = "designer2_id";
	$tdata14704_Monthly_Designers_Avrage[".allSearchFields"][] = "files";
	$tdata14704_Monthly_Designers_Avrage[".allSearchFields"][] = "eta_average";
	$tdata14704_Monthly_Designers_Avrage[".allSearchFields"][] = "current_avg";
	

$tdata14704_Monthly_Designers_Avrage[".googleLikeFields"] = array();
$tdata14704_Monthly_Designers_Avrage[".googleLikeFields"][] = "end2_date";
$tdata14704_Monthly_Designers_Avrage[".googleLikeFields"][] = "team";
$tdata14704_Monthly_Designers_Avrage[".googleLikeFields"][] = "designer2_id";
$tdata14704_Monthly_Designers_Avrage[".googleLikeFields"][] = "files";
$tdata14704_Monthly_Designers_Avrage[".googleLikeFields"][] = "eta_average";
$tdata14704_Monthly_Designers_Avrage[".googleLikeFields"][] = "current_avg";


$tdata14704_Monthly_Designers_Avrage[".advSearchFields"] = array();
$tdata14704_Monthly_Designers_Avrage[".advSearchFields"][] = "end2_date";
$tdata14704_Monthly_Designers_Avrage[".advSearchFields"][] = "team";
$tdata14704_Monthly_Designers_Avrage[".advSearchFields"][] = "designer2_id";
$tdata14704_Monthly_Designers_Avrage[".advSearchFields"][] = "files";
$tdata14704_Monthly_Designers_Avrage[".advSearchFields"][] = "eta_average";
$tdata14704_Monthly_Designers_Avrage[".advSearchFields"][] = "current_avg";

$tdata14704_Monthly_Designers_Avrage[".tableType"] = "report";

$tdata14704_Monthly_Designers_Avrage[".printerPageOrientation"] = 0;
$tdata14704_Monthly_Designers_Avrage[".nPrinterPageScale"] = 100;

$tdata14704_Monthly_Designers_Avrage[".nPrinterSplitRecords"] = 40;

$tdata14704_Monthly_Designers_Avrage[".nPrinterPDFSplitRecords"] = 40;



$tdata14704_Monthly_Designers_Avrage[".geocodingEnabled"] = false;

//report settings
$tdata14704_Monthly_Designers_Avrage[".printReportLayout"] = 3;	

$tdata14704_Monthly_Designers_Avrage[".reportPrintPartitionType"] = 0;	
$tdata14704_Monthly_Designers_Avrage[".reportPrintGroupsPerPage"] = 3;	
	$tdata14704_Monthly_Designers_Avrage[".lowGroup"] = 2;



$tdata14704_Monthly_Designers_Avrage[".reportGroupFields"] = true;
$tdata14704_Monthly_Designers_Avrage[".pageSize"] = 1;
$tdata14704_Monthly_Designers_Avrage[".showGroupSummaryCount"] = true;
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
$tdata14704_Monthly_Designers_Avrage[".reportGroupFieldsData"] = $reportGroupFields;


$tdata14704_Monthly_Designers_Avrage[".isExistTotalFields"] = true;




$tdata14704_Monthly_Designers_Avrage[".repShowDet"] = true;

$tdata14704_Monthly_Designers_Avrage[".reportLayout"] = 3;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY jobfile.end2_date DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata14704_Monthly_Designers_Avrage[".strOrderBy"] = $tstrOrderBy;

$tdata14704_Monthly_Designers_Avrage[".orderindexes"] = array();
$tdata14704_Monthly_Designers_Avrage[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "jobfile.end2_date");

$tdata14704_Monthly_Designers_Avrage[".sqlHead"] = "SELECT jobfile.end2_date,  `user`.team,  jobfile.designer2_id,  COUNT(jobfile.designer2_id) AS files,  SEC_TO_TIME(AVG(TIME_TO_SEC(pdf.pdf_estimated_average))) AS eta_average,  SEC_TO_TIME(AVG(IFNULL(TIME_TO_SEC(jobfile.designer_time),0)	+	IFNULL(TIME_TO_SEC(jobfile.designer2_time),0))) AS current_avg";
$tdata14704_Monthly_Designers_Avrage[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$tdata14704_Monthly_Designers_Avrage[".sqlWhereExpr"] = "jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.designer2_time) > '60' AND (jobfile.project_id = 5001)";
$tdata14704_Monthly_Designers_Avrage[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata14704_Monthly_Designers_Avrage[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata14704_Monthly_Designers_Avrage[".arrGroupsPerPage"] = $arrGPP;

$tdata14704_Monthly_Designers_Avrage[".highlightSearchResults"] = true;

$tableKeys14704_Monthly_Designers_Avrage = array();
$tdata14704_Monthly_Designers_Avrage[".Keys"] = $tableKeys14704_Monthly_Designers_Avrage;

$tdata14704_Monthly_Designers_Avrage[".listFields"] = array();
$tdata14704_Monthly_Designers_Avrage[".listFields"][] = "end2_date";
$tdata14704_Monthly_Designers_Avrage[".listFields"][] = "team";
$tdata14704_Monthly_Designers_Avrage[".listFields"][] = "designer2_id";
$tdata14704_Monthly_Designers_Avrage[".listFields"][] = "files";
$tdata14704_Monthly_Designers_Avrage[".listFields"][] = "eta_average";
$tdata14704_Monthly_Designers_Avrage[".listFields"][] = "current_avg";

$tdata14704_Monthly_Designers_Avrage[".hideMobileList"] = array();


$tdata14704_Monthly_Designers_Avrage[".viewFields"] = array();
$tdata14704_Monthly_Designers_Avrage[".viewFields"][] = "end2_date";
$tdata14704_Monthly_Designers_Avrage[".viewFields"][] = "team";
$tdata14704_Monthly_Designers_Avrage[".viewFields"][] = "designer2_id";
$tdata14704_Monthly_Designers_Avrage[".viewFields"][] = "files";
$tdata14704_Monthly_Designers_Avrage[".viewFields"][] = "eta_average";
$tdata14704_Monthly_Designers_Avrage[".viewFields"][] = "current_avg";

$tdata14704_Monthly_Designers_Avrage[".addFields"] = array();
$tdata14704_Monthly_Designers_Avrage[".addFields"][] = "end2_date";
$tdata14704_Monthly_Designers_Avrage[".addFields"][] = "designer2_id";

$tdata14704_Monthly_Designers_Avrage[".masterListFields"] = array();
$tdata14704_Monthly_Designers_Avrage[".masterListFields"][] = "end2_date";
$tdata14704_Monthly_Designers_Avrage[".masterListFields"][] = "team";
$tdata14704_Monthly_Designers_Avrage[".masterListFields"][] = "designer2_id";
$tdata14704_Monthly_Designers_Avrage[".masterListFields"][] = "files";
$tdata14704_Monthly_Designers_Avrage[".masterListFields"][] = "eta_average";
$tdata14704_Monthly_Designers_Avrage[".masterListFields"][] = "current_avg";

$tdata14704_Monthly_Designers_Avrage[".inlineAddFields"] = array();
$tdata14704_Monthly_Designers_Avrage[".inlineAddFields"][] = "end2_date";
$tdata14704_Monthly_Designers_Avrage[".inlineAddFields"][] = "designer2_id";

$tdata14704_Monthly_Designers_Avrage[".editFields"] = array();
$tdata14704_Monthly_Designers_Avrage[".editFields"][] = "end2_date";
$tdata14704_Monthly_Designers_Avrage[".editFields"][] = "designer2_id";

$tdata14704_Monthly_Designers_Avrage[".inlineEditFields"] = array();
$tdata14704_Monthly_Designers_Avrage[".inlineEditFields"][] = "end2_date";
$tdata14704_Monthly_Designers_Avrage[".inlineEditFields"][] = "designer2_id";

$tdata14704_Monthly_Designers_Avrage[".exportFields"] = array();
$tdata14704_Monthly_Designers_Avrage[".exportFields"][] = "end2_date";
$tdata14704_Monthly_Designers_Avrage[".exportFields"][] = "team";
$tdata14704_Monthly_Designers_Avrage[".exportFields"][] = "designer2_id";
$tdata14704_Monthly_Designers_Avrage[".exportFields"][] = "files";
$tdata14704_Monthly_Designers_Avrage[".exportFields"][] = "eta_average";
$tdata14704_Monthly_Designers_Avrage[".exportFields"][] = "current_avg";

$tdata14704_Monthly_Designers_Avrage[".importFields"] = array();
$tdata14704_Monthly_Designers_Avrage[".importFields"][] = "end2_date";
$tdata14704_Monthly_Designers_Avrage[".importFields"][] = "team";
$tdata14704_Monthly_Designers_Avrage[".importFields"][] = "designer2_id";
$tdata14704_Monthly_Designers_Avrage[".importFields"][] = "files";
$tdata14704_Monthly_Designers_Avrage[".importFields"][] = "eta_average";
$tdata14704_Monthly_Designers_Avrage[".importFields"][] = "current_avg";

$tdata14704_Monthly_Designers_Avrage[".printFields"] = array();
$tdata14704_Monthly_Designers_Avrage[".printFields"][] = "end2_date";
$tdata14704_Monthly_Designers_Avrage[".printFields"][] = "team";
$tdata14704_Monthly_Designers_Avrage[".printFields"][] = "designer2_id";
$tdata14704_Monthly_Designers_Avrage[".printFields"][] = "files";
$tdata14704_Monthly_Designers_Avrage[".printFields"][] = "eta_average";
$tdata14704_Monthly_Designers_Avrage[".printFields"][] = "current_avg";

//	end2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "end2_date";
	$fdata["GoodName"] = "end2_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("14704_Monthly_Designers_Avrage","end2_date"); 
	$fdata["FieldType"] = 135;
	
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
	
		$fdata["strField"] = "end2_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.end2_date";
	
		
		
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdata14704_Monthly_Designers_Avrage["end2_date"] = $fdata;
//	team
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team";
	$fdata["GoodName"] = "team";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("14704_Monthly_Designers_Avrage","team"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdata14704_Monthly_Designers_Avrage["team"] = $fdata;
//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("14704_Monthly_Designers_Avrage","designer2_id"); 
	$fdata["FieldType"] = 3;
	
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
	
		$fdata["strField"] = "designer2_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.designer2_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdata14704_Monthly_Designers_Avrage["designer2_id"] = $fdata;
//	files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "files";
	$fdata["GoodName"] = "files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("14704_Monthly_Designers_Avrage","files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "files"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(jobfile.designer2_id)";
	
		
		
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

	

	
	$tdata14704_Monthly_Designers_Avrage["files"] = $fdata;
//	eta_average
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "eta_average";
	$fdata["GoodName"] = "eta_average";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("14704_Monthly_Designers_Avrage","eta_average"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
			$fdata["isTotalAvg"] = true;	
			// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "eta_average"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(AVG(TIME_TO_SEC(pdf.pdf_estimated_average)))";
	
		
		
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

	

	
	$tdata14704_Monthly_Designers_Avrage["eta_average"] = $fdata;
//	current_avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "current_avg";
	$fdata["GoodName"] = "current_avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("14704_Monthly_Designers_Avrage","current_avg"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
			$fdata["isTotalAvg"] = true;	
			// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "current_avg"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(AVG(IFNULL(TIME_TO_SEC(jobfile.designer_time),0)	+	IFNULL(TIME_TO_SEC(jobfile.designer2_time),0)))";
	
		
		
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

	

	
	$tdata14704_Monthly_Designers_Avrage["current_avg"] = $fdata;

	
$tables_data["14704 Monthly Designers Avrage"]=&$tdata14704_Monthly_Designers_Avrage;
$field_labels["14704_Monthly_Designers_Avrage"] = &$fieldLabels14704_Monthly_Designers_Avrage;
$fieldToolTips["14704 Monthly Designers Avrage"] = &$fieldToolTips14704_Monthly_Designers_Avrage;
$page_titles["14704_Monthly_Designers_Avrage"] = &$pageTitles14704_Monthly_Designers_Avrage;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["14704 Monthly Designers Avrage"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["14704 Monthly Designers Avrage"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_14704_Monthly_Designers_Avrage()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile.end2_date,  `user`.team,  jobfile.designer2_id,  COUNT(jobfile.designer2_id) AS files,  SEC_TO_TIME(AVG(TIME_TO_SEC(pdf.pdf_estimated_average))) AS eta_average,  SEC_TO_TIME(AVG(IFNULL(TIME_TO_SEC(jobfile.designer_time),0)	+	IFNULL(TIME_TO_SEC(jobfile.designer2_time),0))) AS current_avg";
$proto0["m_strFrom"] = "FROM jobfile  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto0["m_strWhere"] = "jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.designer2_time) > '60' AND (jobfile.project_id = 5001)";
$proto0["m_strOrderBy"] = "ORDER BY jobfile.end2_date DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.designer2_time) > '60' AND (jobfile.project_id = 5001)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.designer2_id IS NOT NULL AND jobfile.end2_date > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')) AND TIME_TO_SEC(jobfile.designer2_time) > '60' AND (jobfile.project_id = 5001)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.designer2_id IS NOT NULL";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Monthly Designers Avrage"
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
	"m_srcTableName" => "14704 Monthly Designers Avrage"
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
$proto7["m_sql"] = "jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')";
$proto7["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.filename not like '%retouch%' AND (jobfile.filename not like '%detail_2%')"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
						$proto9=array();
$proto9["m_sql"] = "jobfile.filename not like '%retouch%'";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Monthly Designers Avrage"
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
	"m_srcTableName" => "14704 Monthly Designers Avrage"
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
$proto13["m_sql"] = "TIME_TO_SEC(jobfile.designer2_time) > '60'";
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
$proto13["m_strCase"] = "> '60'";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

			$proto1["m_contained"][]=$obj;
						$proto16=array();
$proto16["m_sql"] = "jobfile.project_id = 5001";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Monthly Designers Avrage"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "= 5001";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = true;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Monthly Designers Avrage"
));

$proto20["m_sql"] = "jobfile.end2_date";
$proto20["m_srcTableName"] = "14704 Monthly Designers Avrage";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "14704 Monthly Designers Avrage"
));

$proto22["m_sql"] = "`user`.team";
$proto22["m_srcTableName"] = "14704 Monthly Designers Avrage";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Monthly Designers Avrage"
));

$proto24["m_sql"] = "jobfile.designer2_id";
$proto24["m_srcTableName"] = "14704 Monthly Designers Avrage";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_COUNT";
$proto27["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Monthly Designers Avrage"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "COUNT(jobfile.designer2_id)";
$proto26["m_srcTableName"] = "14704 Monthly Designers Avrage";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "files";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$proto30=array();
$proto30["m_functiontype"] = "SQLF_CUSTOM";
$proto30["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "AVG(TIME_TO_SEC(pdf.pdf_estimated_average))"
));

$proto30["m_arguments"][]=$obj;
$proto30["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto30);

$proto29["m_sql"] = "SEC_TO_TIME(AVG(TIME_TO_SEC(pdf.pdf_estimated_average)))";
$proto29["m_srcTableName"] = "14704 Monthly Designers Avrage";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "eta_average";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$proto33=array();
$proto33["m_functiontype"] = "SQLF_CUSTOM";
$proto33["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "AVG(IFNULL(TIME_TO_SEC(jobfile.designer_time),0)	+	IFNULL(TIME_TO_SEC(jobfile.designer2_time),0))"
));

$proto33["m_arguments"][]=$obj;
$proto33["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto33);

$proto32["m_sql"] = "SEC_TO_TIME(AVG(IFNULL(TIME_TO_SEC(jobfile.designer_time),0)	+	IFNULL(TIME_TO_SEC(jobfile.designer2_time),0)))";
$proto32["m_srcTableName"] = "14704 Monthly Designers Avrage";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "current_avg";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "jobfile";
$proto36["m_srcTableName"] = "14704 Monthly Designers Avrage";
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
$proto35["m_srcTableName"] = "14704 Monthly Designers Avrage";
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
$proto40["m_srcTableName"] = "14704 Monthly Designers Avrage";
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
$proto40["m_columns"][] = "joining_date";
$proto40["m_columns"][] = "emergency_contact1";
$proto40["m_columns"][] = "emergency_contact2";
$proto40["m_columns"][] = "permanent_address";
$proto40["m_columns"][] = "current_address";
$proto40["m_columns"][] = "date_of_birth";
$proto40["m_columns"][] = "male_female";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "14704 Monthly Designers Avrage";
$proto41=array();
$proto41["m_sql"] = "jobfile.designer2_id = `user`.user_id";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Monthly Designers Avrage"
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
$proto44["m_srcTableName"] = "14704 Monthly Designers Avrage";
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
$proto44["m_columns"][] = "price";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto43["m_alias"] = "";
$proto43["m_srcTableName"] = "14704 Monthly Designers Avrage";
$proto45=array();
$proto45["m_sql"] = "jobfile.project_id = pdf.pdf_id";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Monthly Designers Avrage"
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
$proto48["m_strFunctionName"] = "MONTH";
$obj = new SQLFunctionCall($proto48);

$proto47["m_column"]=$obj;
$obj = new SQLGroupByItem($proto47);

$proto0["m_groupby"][]=$obj;
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "14704 Monthly Designers Avrage"
));

$proto50["m_column"]=$obj;
$obj = new SQLGroupByItem($proto50);

$proto0["m_groupby"][]=$obj;
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Monthly Designers Avrage"
));

$proto52["m_column"]=$obj;
$obj = new SQLGroupByItem($proto52);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Monthly Designers Avrage"
));

$proto54["m_column"]=$obj;
$proto54["m_bAsc"] = 0;
$proto54["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto54);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="14704 Monthly Designers Avrage";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_14704_Monthly_Designers_Avrage = createSqlQuery_14704_Monthly_Designers_Avrage();


	
						
	
$tdata14704_Monthly_Designers_Avrage[".sqlquery"] = $queryData_14704_Monthly_Designers_Avrage;

$tableEvents["14704 Monthly Designers Avrage"] = new eventsBase;
$tdata14704_Monthly_Designers_Avrage[".hasEvents"] = false;

?>