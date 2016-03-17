<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCapacity___Night_Shift_display = array();	
	$tdataCapacity___Night_Shift_display[".truncateText"] = true;
	$tdataCapacity___Night_Shift_display[".NumberOfChars"] = 80; 
	$tdataCapacity___Night_Shift_display[".ShortName"] = "Capacity___Night_Shift_display";
	$tdataCapacity___Night_Shift_display[".OwnerID"] = "";
	$tdataCapacity___Night_Shift_display[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsCapacity___Night_Shift_display = array();
$fieldToolTipsCapacity___Night_Shift_display = array();
$pageTitlesCapacity___Night_Shift_display = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCapacity___Night_Shift_display["English"] = array();
	$fieldToolTipsCapacity___Night_Shift_display["English"] = array();
	$pageTitlesCapacity___Night_Shift_display["English"] = array();
	$fieldLabelsCapacity___Night_Shift_display["English"]["distribute_date"] = "Distribute Date";
	$fieldToolTipsCapacity___Night_Shift_display["English"]["distribute_date"] = "";
	$fieldLabelsCapacity___Night_Shift_display["English"]["designer2_id"] = "Designer2 Id";
	$fieldToolTipsCapacity___Night_Shift_display["English"]["designer2_id"] = "";
	$fieldLabelsCapacity___Night_Shift_display["English"]["files_remaining_to_deliver"] = "Files Remaining To Deliver";
	$fieldToolTipsCapacity___Night_Shift_display["English"]["files_remaining_to_deliver"] = "";
	$fieldLabelsCapacity___Night_Shift_display["English"]["remaining_capacity"] = "Remaining Capacity";
	$fieldToolTipsCapacity___Night_Shift_display["English"]["remaining_capacity"] = "";
	$fieldLabelsCapacity___Night_Shift_display["English"]["team"] = "Team";
	$fieldToolTipsCapacity___Night_Shift_display["English"]["team"] = "";
	if (count($fieldToolTipsCapacity___Night_Shift_display["English"]))
		$tdataCapacity___Night_Shift_display[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCapacity___Night_Shift_display[""] = array();
	$fieldToolTipsCapacity___Night_Shift_display[""] = array();
	$pageTitlesCapacity___Night_Shift_display[""] = array();
	$fieldLabelsCapacity___Night_Shift_display[""]["team"] = "Team";
	$fieldToolTipsCapacity___Night_Shift_display[""]["team"] = "";
	if (count($fieldToolTipsCapacity___Night_Shift_display[""]))
		$tdataCapacity___Night_Shift_display[".isUseToolTips"] = true;
}
	
	
	$tdataCapacity___Night_Shift_display[".NCSearch"] = true;



$tdataCapacity___Night_Shift_display[".shortTableName"] = "Capacity___Night_Shift_display";
$tdataCapacity___Night_Shift_display[".nSecOptions"] = 0;
$tdataCapacity___Night_Shift_display[".recsPerRowList"] = 1;
$tdataCapacity___Night_Shift_display[".mainTableOwnerID"] = "";
$tdataCapacity___Night_Shift_display[".moveNext"] = 1;
$tdataCapacity___Night_Shift_display[".nType"] = 2;

$tdataCapacity___Night_Shift_display[".strOriginalTableName"] = "jobfile";




$tdataCapacity___Night_Shift_display[".showAddInPopup"] = false;

$tdataCapacity___Night_Shift_display[".showEditInPopup"] = false;

$tdataCapacity___Night_Shift_display[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCapacity___Night_Shift_display[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCapacity___Night_Shift_display[".fieldsForRegister"] = array();

$tdataCapacity___Night_Shift_display[".listAjax"] = false;

	$tdataCapacity___Night_Shift_display[".audit"] = false;

	$tdataCapacity___Night_Shift_display[".locking"] = false;


$tdataCapacity___Night_Shift_display[".list"] = true;

$tdataCapacity___Night_Shift_display[".inlineAdd"] = true;


$tdataCapacity___Night_Shift_display[".exportTo"] = true;

$tdataCapacity___Night_Shift_display[".printFriendly"] = true;


$tdataCapacity___Night_Shift_display[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataCapacity___Night_Shift_display[".searchSaving"] = false;
//

$tdataCapacity___Night_Shift_display[".showSearchPanel"] = true;
		$tdataCapacity___Night_Shift_display[".flexibleSearch"] = true;		

if (isMobile())
	$tdataCapacity___Night_Shift_display[".isUseAjaxSuggest"] = false;
else 
	$tdataCapacity___Night_Shift_display[".isUseAjaxSuggest"] = true;



																																																																																																																																			
$tdataCapacity___Night_Shift_display[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCapacity___Night_Shift_display[".isUseTimeForSearch"] = false;





$tdataCapacity___Night_Shift_display[".allSearchFields"] = array();
$tdataCapacity___Night_Shift_display[".filterFields"] = array();
$tdataCapacity___Night_Shift_display[".requiredSearchFields"] = array();

$tdataCapacity___Night_Shift_display[".allSearchFields"][] = "designer2_id";
	$tdataCapacity___Night_Shift_display[".allSearchFields"][] = "team";
	$tdataCapacity___Night_Shift_display[".allSearchFields"][] = "files_remaining_to_deliver";
	$tdataCapacity___Night_Shift_display[".allSearchFields"][] = "remaining_capacity";
	

$tdataCapacity___Night_Shift_display[".googleLikeFields"] = array();
$tdataCapacity___Night_Shift_display[".googleLikeFields"][] = "designer2_id";
$tdataCapacity___Night_Shift_display[".googleLikeFields"][] = "team";
$tdataCapacity___Night_Shift_display[".googleLikeFields"][] = "distribute_date";
$tdataCapacity___Night_Shift_display[".googleLikeFields"][] = "files_remaining_to_deliver";
$tdataCapacity___Night_Shift_display[".googleLikeFields"][] = "remaining_capacity";


$tdataCapacity___Night_Shift_display[".advSearchFields"] = array();
$tdataCapacity___Night_Shift_display[".advSearchFields"][] = "designer2_id";
$tdataCapacity___Night_Shift_display[".advSearchFields"][] = "team";
$tdataCapacity___Night_Shift_display[".advSearchFields"][] = "distribute_date";
$tdataCapacity___Night_Shift_display[".advSearchFields"][] = "files_remaining_to_deliver";
$tdataCapacity___Night_Shift_display[".advSearchFields"][] = "remaining_capacity";

$tdataCapacity___Night_Shift_display[".tableType"] = "report";

$tdataCapacity___Night_Shift_display[".printerPageOrientation"] = 0;
$tdataCapacity___Night_Shift_display[".nPrinterPageScale"] = 100;

$tdataCapacity___Night_Shift_display[".nPrinterSplitRecords"] = 40;

$tdataCapacity___Night_Shift_display[".nPrinterPDFSplitRecords"] = 40;


//report settings
$tdataCapacity___Night_Shift_display[".printReportLayout"] = 3;	

$tdataCapacity___Night_Shift_display[".reportPrintPartitionType"] = 0;	
$tdataCapacity___Night_Shift_display[".reportPrintGroupsPerPage"] = 3;	
	$tdataCapacity___Night_Shift_display[".lowGroup"] = 1;



$tdataCapacity___Night_Shift_display[".reportGroupFields"] = true;
$tdataCapacity___Night_Shift_display[".pageSize"] = 20;
$tdataCapacity___Night_Shift_display[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "team";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataCapacity___Night_Shift_display[".reportGroupFieldsData"] = $reportGroupFields;


$tdataCapacity___Night_Shift_display[".isExistTotalFields"] = true;




$tdataCapacity___Night_Shift_display[".repShowDet"] = true;

$tdataCapacity___Night_Shift_display[".reportLayout"] = 3;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCapacity___Night_Shift_display[".strOrderBy"] = $tstrOrderBy;

$tdataCapacity___Night_Shift_display[".orderindexes"] = array();

$tdataCapacity___Night_Shift_display[".sqlHead"] = "SELECT jobfile.designer2_id,  `user`.team,  DATE(jobfile.distribute_date) AS distribute_date,  COUNT(*) AS files_remaining_to_deliver,  SEC_TO_TIME(TIME_TO_SEC(TIMEDIFF(DATE_ADD(DATE(NOW()), INTERVAL 7 HOUR), NOW())) - (SUM(TIME_TO_SEC(pdf.pdf_estimated_average)))) AS remaining_capacity";
$tdataCapacity___Night_Shift_display[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN job ON jobfile.job_id = job.job_id  LEFT OUTER JOIN pdf ON job.pdf_id = pdf.pdf_id  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$tdataCapacity___Night_Shift_display[".sqlWhereExpr"] = "(jobfile.distribute_date BETWEEN DATE_ADD(DATE(NOW()), INTERVAL -2 HOUR) AND DATE_ADD(DATE(NOW()), INTERVAL 7 HOUR)) AND (jobfile.designer2_time IS NULL)";
$tdataCapacity___Night_Shift_display[".sqlTail"] = "GROUP BY jobfile.designer2_id, DATE(jobfile.distribute_date)";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCapacity___Night_Shift_display[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCapacity___Night_Shift_display[".arrGroupsPerPage"] = $arrGPP;

$tdataCapacity___Night_Shift_display[".highlightSearchResults"] = true;

$tableKeysCapacity___Night_Shift_display = array();
$tdataCapacity___Night_Shift_display[".Keys"] = $tableKeysCapacity___Night_Shift_display;

$tdataCapacity___Night_Shift_display[".listFields"] = array();
$tdataCapacity___Night_Shift_display[".listFields"][] = "designer2_id";
$tdataCapacity___Night_Shift_display[".listFields"][] = "team";
$tdataCapacity___Night_Shift_display[".listFields"][] = "distribute_date";
$tdataCapacity___Night_Shift_display[".listFields"][] = "files_remaining_to_deliver";
$tdataCapacity___Night_Shift_display[".listFields"][] = "remaining_capacity";

$tdataCapacity___Night_Shift_display[".hideMobileList"] = array();


$tdataCapacity___Night_Shift_display[".viewFields"] = array();
$tdataCapacity___Night_Shift_display[".viewFields"][] = "designer2_id";
$tdataCapacity___Night_Shift_display[".viewFields"][] = "team";
$tdataCapacity___Night_Shift_display[".viewFields"][] = "distribute_date";
$tdataCapacity___Night_Shift_display[".viewFields"][] = "files_remaining_to_deliver";
$tdataCapacity___Night_Shift_display[".viewFields"][] = "remaining_capacity";

$tdataCapacity___Night_Shift_display[".addFields"] = array();
$tdataCapacity___Night_Shift_display[".addFields"][] = "designer2_id";
$tdataCapacity___Night_Shift_display[".addFields"][] = "distribute_date";

$tdataCapacity___Night_Shift_display[".inlineAddFields"] = array();
$tdataCapacity___Night_Shift_display[".inlineAddFields"][] = "designer2_id";
$tdataCapacity___Night_Shift_display[".inlineAddFields"][] = "distribute_date";

$tdataCapacity___Night_Shift_display[".editFields"] = array();
$tdataCapacity___Night_Shift_display[".editFields"][] = "designer2_id";
$tdataCapacity___Night_Shift_display[".editFields"][] = "distribute_date";

$tdataCapacity___Night_Shift_display[".inlineEditFields"] = array();
$tdataCapacity___Night_Shift_display[".inlineEditFields"][] = "designer2_id";
$tdataCapacity___Night_Shift_display[".inlineEditFields"][] = "distribute_date";

$tdataCapacity___Night_Shift_display[".exportFields"] = array();
$tdataCapacity___Night_Shift_display[".exportFields"][] = "designer2_id";
$tdataCapacity___Night_Shift_display[".exportFields"][] = "team";
$tdataCapacity___Night_Shift_display[".exportFields"][] = "distribute_date";
$tdataCapacity___Night_Shift_display[".exportFields"][] = "files_remaining_to_deliver";
$tdataCapacity___Night_Shift_display[".exportFields"][] = "remaining_capacity";

$tdataCapacity___Night_Shift_display[".importFields"] = array();
$tdataCapacity___Night_Shift_display[".importFields"][] = "designer2_id";
$tdataCapacity___Night_Shift_display[".importFields"][] = "team";
$tdataCapacity___Night_Shift_display[".importFields"][] = "distribute_date";
$tdataCapacity___Night_Shift_display[".importFields"][] = "files_remaining_to_deliver";
$tdataCapacity___Night_Shift_display[".importFields"][] = "remaining_capacity";

$tdataCapacity___Night_Shift_display[".printFields"] = array();
$tdataCapacity___Night_Shift_display[".printFields"][] = "designer2_id";
$tdataCapacity___Night_Shift_display[".printFields"][] = "team";
$tdataCapacity___Night_Shift_display[".printFields"][] = "distribute_date";
$tdataCapacity___Night_Shift_display[".printFields"][] = "files_remaining_to_deliver";
$tdataCapacity___Night_Shift_display[".printFields"][] = "remaining_capacity";

//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Capacity___Night_Shift_display","designer2_id"); 
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataCapacity___Night_Shift_display["designer2_id"] = $fdata;
//	team
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team";
	$fdata["GoodName"] = "team";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Capacity___Night_Shift_display","team"); 
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
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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

	

	
	$tdataCapacity___Night_Shift_display["team"] = $fdata;
//	distribute_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "distribute_date";
	$fdata["GoodName"] = "distribute_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Capacity___Night_Shift_display","distribute_date"); 
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
	
		$fdata["strField"] = "distribute_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE(jobfile.distribute_date)";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
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
	
	
	$fdata["isSeparate"] = true;
	
	
	
	

	

	
	$tdataCapacity___Night_Shift_display["distribute_date"] = $fdata;
//	files_remaining_to_deliver
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "files_remaining_to_deliver";
	$fdata["GoodName"] = "files_remaining_to_deliver";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Capacity___Night_Shift_display","files_remaining_to_deliver"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "files_remaining_to_deliver"; 
	
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataCapacity___Night_Shift_display["files_remaining_to_deliver"] = $fdata;
//	remaining_capacity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "remaining_capacity";
	$fdata["GoodName"] = "remaining_capacity";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Capacity___Night_Shift_display","remaining_capacity"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "remaining_capacity"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(TIME_TO_SEC(TIMEDIFF(DATE_ADD(DATE(NOW()), INTERVAL 7 HOUR), NOW())) - (SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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

	

	
	$tdataCapacity___Night_Shift_display["remaining_capacity"] = $fdata;

	
$tables_data["Capacity - Night Shift_display"]=&$tdataCapacity___Night_Shift_display;
$field_labels["Capacity___Night_Shift_display"] = &$fieldLabelsCapacity___Night_Shift_display;
$fieldToolTips["Capacity - Night Shift_display"] = &$fieldToolTipsCapacity___Night_Shift_display;
$page_titles["Capacity___Night_Shift_display"] = &$pageTitlesCapacity___Night_Shift_display;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Capacity - Night Shift_display"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Capacity - Night Shift_display"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Capacity___Night_Shift_display()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile.designer2_id,  `user`.team,  DATE(jobfile.distribute_date) AS distribute_date,  COUNT(*) AS files_remaining_to_deliver,  SEC_TO_TIME(TIME_TO_SEC(TIMEDIFF(DATE_ADD(DATE(NOW()), INTERVAL 7 HOUR), NOW())) - (SUM(TIME_TO_SEC(pdf.pdf_estimated_average)))) AS remaining_capacity";
$proto0["m_strFrom"] = "FROM jobfile  LEFT OUTER JOIN job ON jobfile.job_id = job.job_id  LEFT OUTER JOIN pdf ON job.pdf_id = pdf.pdf_id  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$proto0["m_strWhere"] = "(jobfile.distribute_date BETWEEN DATE_ADD(DATE(NOW()), INTERVAL -2 HOUR) AND DATE_ADD(DATE(NOW()), INTERVAL 7 HOUR)) AND (jobfile.designer2_time IS NULL)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY jobfile.designer2_id, DATE(jobfile.distribute_date)";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(jobfile.distribute_date BETWEEN DATE_ADD(DATE(NOW()), INTERVAL -2 HOUR) AND DATE_ADD(DATE(NOW()), INTERVAL 7 HOUR)) AND (jobfile.designer2_time IS NULL)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.distribute_date BETWEEN DATE_ADD(DATE(NOW()), INTERVAL -2 HOUR) AND DATE_ADD(DATE(NOW()), INTERVAL 7 HOUR)) AND (jobfile.designer2_time IS NULL)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.distribute_date BETWEEN DATE_ADD(DATE(NOW()), INTERVAL -2 HOUR) AND DATE_ADD(DATE(NOW()), INTERVAL 7 HOUR)";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "distribute_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Capacity - Night Shift_display"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "BETWEEN DATE_ADD(DATE(NOW()), INTERVAL -2 HOUR) AND DATE_ADD(DATE(NOW()), INTERVAL 7 HOUR)";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "jobfile.designer2_time IS NULL";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_time",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Capacity - Night Shift_display"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "IS NULL";
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
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Capacity - Night Shift_display"
));

$proto9["m_sql"] = "jobfile.designer2_id";
$proto9["m_srcTableName"] = "Capacity - Night Shift_display";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Capacity - Night Shift_display"
));

$proto11["m_sql"] = "`user`.team";
$proto11["m_srcTableName"] = "Capacity - Night Shift_display";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_CUSTOM";
$proto14["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.distribute_date"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "DATE(jobfile.distribute_date)";
$proto13["m_srcTableName"] = "Capacity - Night Shift_display";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "distribute_date";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_COUNT";
$proto17["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "COUNT(*)";
$proto16["m_srcTableName"] = "Capacity - Night Shift_display";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "files_remaining_to_deliver";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$proto20=array();
$proto20["m_functiontype"] = "SQLF_CUSTOM";
$proto20["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "TIME_TO_SEC(TIMEDIFF(DATE_ADD(DATE(NOW()), INTERVAL 7 HOUR), NOW())) - (SUM(TIME_TO_SEC(pdf.pdf_estimated_average)))"
));

$proto20["m_arguments"][]=$obj;
$proto20["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto20);

$proto19["m_sql"] = "SEC_TO_TIME(TIME_TO_SEC(TIMEDIFF(DATE_ADD(DATE(NOW()), INTERVAL 7 HOUR), NOW())) - (SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))";
$proto19["m_srcTableName"] = "Capacity - Night Shift_display";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "remaining_capacity";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "jobfile";
$proto23["m_srcTableName"] = "Capacity - Night Shift_display";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "jobfile_id";
$proto23["m_columns"][] = "file_url";
$proto23["m_columns"][] = "client_id";
$proto23["m_columns"][] = "work_id";
$proto23["m_columns"][] = "job_id";
$proto23["m_columns"][] = "project_id";
$proto23["m_columns"][] = "folder_name";
$proto23["m_columns"][] = "filename";
$proto23["m_columns"][] = "jobfile_type";
$proto23["m_columns"][] = "jobfile_note";
$proto23["m_columns"][] = "jobfile_status_id";
$proto23["m_columns"][] = "downloader_id";
$proto23["m_columns"][] = "distributor_id";
$proto23["m_columns"][] = "designer_id";
$proto23["m_columns"][] = "qc_id";
$proto23["m_columns"][] = "uploader_id";
$proto23["m_columns"][] = "notifier_id";
$proto23["m_columns"][] = "rejector_id";
$proto23["m_columns"][] = "download_date";
$proto23["m_columns"][] = "distribute_date";
$proto23["m_columns"][] = "start_date";
$proto23["m_columns"][] = "end_date";
$proto23["m_columns"][] = "designer_time";
$proto23["m_columns"][] = "qcstart_date";
$proto23["m_columns"][] = "qcend_date";
$proto23["m_columns"][] = "qc_time";
$proto23["m_columns"][] = "upload_date";
$proto23["m_columns"][] = "notify_date";
$proto23["m_columns"][] = "reject_date";
$proto23["m_columns"][] = "reject_reason";
$proto23["m_columns"][] = "designer2_id";
$proto23["m_columns"][] = "start2_date";
$proto23["m_columns"][] = "end2_date";
$proto23["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "jobfile";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "Capacity - Night Shift_display";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
												$proto26=array();
$proto26["m_link"] = "SQLL_LEFTJOIN";
			$proto27=array();
$proto27["m_strName"] = "job";
$proto27["m_srcTableName"] = "Capacity - Night Shift_display";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "work_id";
$proto27["m_columns"][] = "job_id";
$proto27["m_columns"][] = "client_id";
$proto27["m_columns"][] = "project_id";
$proto27["m_columns"][] = "job_directory";
$proto27["m_columns"][] = "complexity1";
$proto27["m_columns"][] = "complexity2";
$proto27["m_columns"][] = "complexity3";
$proto27["m_columns"][] = "complexity4";
$proto27["m_columns"][] = "complexity5";
$proto27["m_columns"][] = "complexity0";
$proto27["m_columns"][] = "complexityNP";
$proto27["m_columns"][] = "custom_complexity";
$proto27["m_columns"][] = "total_images";
$proto27["m_columns"][] = "is_urgent";
$proto27["m_columns"][] = "urgent_instruction";
$proto27["m_columns"][] = "delivery_duration";
$proto27["m_columns"][] = "delivery_date";
$proto27["m_columns"][] = "notify_options";
$proto27["m_columns"][] = "notes";
$proto27["m_columns"][] = "web_note";
$proto27["m_columns"][] = "comments";
$proto27["m_columns"][] = "pdf_id";
$proto27["m_columns"][] = "pdf_location";
$proto27["m_columns"][] = "allow_batch_process";
$proto27["m_columns"][] = "jobstatus_id";
$proto27["m_columns"][] = "reviewer_id";
$proto27["m_columns"][] = "reviewed_date";
$proto27["m_columns"][] = "accept_id";
$proto27["m_columns"][] = "accepted_date";
$proto27["m_columns"][] = "downloader_id";
$proto27["m_columns"][] = "download_date";
$proto27["m_columns"][] = "distributor_id";
$proto27["m_columns"][] = "distribute_date";
$proto27["m_columns"][] = "designer_list";
$proto27["m_columns"][] = "qcs_list";
$proto27["m_columns"][] = "finish_date";
$proto27["m_columns"][] = "uploader_id";
$proto27["m_columns"][] = "upload_date";
$proto27["m_columns"][] = "notifer_id";
$proto27["m_columns"][] = "notify_date";
$proto27["m_columns"][] = "rejector_id";
$proto27["m_columns"][] = "reject_date";
$proto27["m_columns"][] = "reject_reason";
$proto27["m_columns"][] = "activity_log";
$proto27["m_columns"][] = "time_remaining";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "LEFT OUTER JOIN job ON jobfile.job_id = job.job_id";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "Capacity - Night Shift_display";
$proto28=array();
$proto28["m_sql"] = "jobfile.job_id = job.job_id";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Capacity - Night Shift_display"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "= job.job_id";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
												$proto30=array();
$proto30["m_link"] = "SQLL_LEFTJOIN";
			$proto31=array();
$proto31["m_strName"] = "pdf";
$proto31["m_srcTableName"] = "Capacity - Night Shift_display";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "pdf_id";
$proto31["m_columns"][] = "pdf_name";
$proto31["m_columns"][] = "client_id";
$proto31["m_columns"][] = "pdf_location";
$proto31["m_columns"][] = "last_update";
$proto31["m_columns"][] = "pdf_estimated_average";
$proto31["m_columns"][] = "pdf_estimated_average1";
$proto31["m_columns"][] = "pdf_estimated_average2";
$proto31["m_columns"][] = "pdf_actual_average";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "LEFT OUTER JOIN pdf ON job.pdf_id = pdf.pdf_id";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "Capacity - Night Shift_display";
$proto32=array();
$proto32["m_sql"] = "job.pdf_id = pdf.pdf_id";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Capacity - Night Shift_display"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= pdf.pdf_id";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
												$proto34=array();
$proto34["m_link"] = "SQLL_LEFTJOIN";
			$proto35=array();
$proto35["m_strName"] = "user";
$proto35["m_srcTableName"] = "Capacity - Night Shift_display";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "user_id";
$proto35["m_columns"][] = "user_status";
$proto35["m_columns"][] = "username";
$proto35["m_columns"][] = "password";
$proto35["m_columns"][] = "department_id";
$proto35["m_columns"][] = "subdiv_id";
$proto35["m_columns"][] = "group_id";
$proto35["m_columns"][] = "designation";
$proto35["m_columns"][] = "employee_id";
$proto35["m_columns"][] = "fname";
$proto35["m_columns"][] = "lname";
$proto35["m_columns"][] = "nickname";
$proto35["m_columns"][] = "email";
$proto35["m_columns"][] = "phone";
$proto35["m_columns"][] = "mobile";
$proto35["m_columns"][] = "log";
$proto35["m_columns"][] = "images_assigned";
$proto35["m_columns"][] = "user_picture";
$proto35["m_columns"][] = "team";
$proto35["m_columns"][] = "ad_group_id";
$proto35["m_columns"][] = "lastaccess";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "Capacity - Night Shift_display";
$proto36=array();
$proto36["m_sql"] = "jobfile.designer2_id = `user`.user_id";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Capacity - Night Shift_display"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= `user`.user_id";
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
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Capacity - Night Shift_display"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$proto41=array();
$proto41["m_functiontype"] = "SQLF_CUSTOM";
$proto41["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.distribute_date"
));

$proto41["m_arguments"][]=$obj;
$proto41["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto41);

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Capacity - Night Shift_display";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Capacity___Night_Shift_display = createSqlQuery_Capacity___Night_Shift_display();


	
					
	
$tdataCapacity___Night_Shift_display[".sqlquery"] = $queryData_Capacity___Night_Shift_display;

$tableEvents["Capacity - Night Shift_display"] = new eventsBase;
$tdataCapacity___Night_Shift_display[".hasEvents"] = false;

?>