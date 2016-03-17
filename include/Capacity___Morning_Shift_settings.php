<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCapacity___Morning_Shift = array();	
	$tdataCapacity___Morning_Shift[".truncateText"] = true;
	$tdataCapacity___Morning_Shift[".NumberOfChars"] = 80; 
	$tdataCapacity___Morning_Shift[".ShortName"] = "Capacity___Morning_Shift";
	$tdataCapacity___Morning_Shift[".OwnerID"] = "";
	$tdataCapacity___Morning_Shift[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsCapacity___Morning_Shift = array();
$fieldToolTipsCapacity___Morning_Shift = array();
$pageTitlesCapacity___Morning_Shift = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCapacity___Morning_Shift["English"] = array();
	$fieldToolTipsCapacity___Morning_Shift["English"] = array();
	$pageTitlesCapacity___Morning_Shift["English"] = array();
	$fieldLabelsCapacity___Morning_Shift["English"]["distribute_date"] = "Distribute Date";
	$fieldToolTipsCapacity___Morning_Shift["English"]["distribute_date"] = "";
	$fieldLabelsCapacity___Morning_Shift["English"]["designer2_id"] = "Designer2 Id";
	$fieldToolTipsCapacity___Morning_Shift["English"]["designer2_id"] = "";
	$fieldLabelsCapacity___Morning_Shift["English"]["team"] = "Team";
	$fieldToolTipsCapacity___Morning_Shift["English"]["team"] = "";
	$fieldLabelsCapacity___Morning_Shift["English"]["files_remaining_to_deliver"] = "Files Remaining To Deliver";
	$fieldToolTipsCapacity___Morning_Shift["English"]["files_remaining_to_deliver"] = "";
	$fieldLabelsCapacity___Morning_Shift["English"]["total_estimated"] = "Total Estimated";
	$fieldToolTipsCapacity___Morning_Shift["English"]["total_estimated"] = "";
	$fieldLabelsCapacity___Morning_Shift["English"]["remaining_this_shift"] = "Remaining This Shift";
	$fieldToolTipsCapacity___Morning_Shift["English"]["remaining_this_shift"] = "";
	$fieldLabelsCapacity___Morning_Shift["English"]["remaining_capacity"] = "Remaining Capacity";
	$fieldToolTipsCapacity___Morning_Shift["English"]["remaining_capacity"] = "";
	$fieldLabelsCapacity___Morning_Shift["English"]["shift_start"] = "Shift Start";
	$fieldToolTipsCapacity___Morning_Shift["English"]["shift_start"] = "";
	$fieldLabelsCapacity___Morning_Shift["English"]["shift_end"] = "Shift End";
	$fieldToolTipsCapacity___Morning_Shift["English"]["shift_end"] = "";
	if (count($fieldToolTipsCapacity___Morning_Shift["English"]))
		$tdataCapacity___Morning_Shift[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCapacity___Morning_Shift[""] = array();
	$fieldToolTipsCapacity___Morning_Shift[""] = array();
	$pageTitlesCapacity___Morning_Shift[""] = array();
	if (count($fieldToolTipsCapacity___Morning_Shift[""]))
		$tdataCapacity___Morning_Shift[".isUseToolTips"] = true;
}
	
	
	$tdataCapacity___Morning_Shift[".NCSearch"] = true;



$tdataCapacity___Morning_Shift[".shortTableName"] = "Capacity___Morning_Shift";
$tdataCapacity___Morning_Shift[".nSecOptions"] = 0;
$tdataCapacity___Morning_Shift[".recsPerRowList"] = 1;
$tdataCapacity___Morning_Shift[".recsPerRowPrint"] = 1;
$tdataCapacity___Morning_Shift[".mainTableOwnerID"] = "";
$tdataCapacity___Morning_Shift[".moveNext"] = 1;
$tdataCapacity___Morning_Shift[".entityType"] = 2;

$tdataCapacity___Morning_Shift[".strOriginalTableName"] = "jobfile";




$tdataCapacity___Morning_Shift[".showAddInPopup"] = false;

$tdataCapacity___Morning_Shift[".showEditInPopup"] = false;

$tdataCapacity___Morning_Shift[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCapacity___Morning_Shift[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCapacity___Morning_Shift[".fieldsForRegister"] = array();

$tdataCapacity___Morning_Shift[".listAjax"] = false;

	$tdataCapacity___Morning_Shift[".audit"] = false;

	$tdataCapacity___Morning_Shift[".locking"] = false;


$tdataCapacity___Morning_Shift[".add"] = true;
$tdataCapacity___Morning_Shift[".afterAddAction"] = 0;
$tdataCapacity___Morning_Shift[".closePopupAfterAdd"] = 1;
$tdataCapacity___Morning_Shift[".afterAddActionDetTable"] = "";

$tdataCapacity___Morning_Shift[".list"] = true;

$tdataCapacity___Morning_Shift[".inlineAdd"] = true;


$tdataCapacity___Morning_Shift[".exportTo"] = true;

$tdataCapacity___Morning_Shift[".printFriendly"] = true;


$tdataCapacity___Morning_Shift[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataCapacity___Morning_Shift[".searchSaving"] = false;
//

$tdataCapacity___Morning_Shift[".showSearchPanel"] = true;
		$tdataCapacity___Morning_Shift[".flexibleSearch"] = true;		

if (isMobile())
	$tdataCapacity___Morning_Shift[".isUseAjaxSuggest"] = false;
else 
	$tdataCapacity___Morning_Shift[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataCapacity___Morning_Shift[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCapacity___Morning_Shift[".isUseTimeForSearch"] = false;





$tdataCapacity___Morning_Shift[".allSearchFields"] = array();
$tdataCapacity___Morning_Shift[".filterFields"] = array();
$tdataCapacity___Morning_Shift[".requiredSearchFields"] = array();

$tdataCapacity___Morning_Shift[".allSearchFields"][] = "designer2_id";
	$tdataCapacity___Morning_Shift[".allSearchFields"][] = "team";
	$tdataCapacity___Morning_Shift[".allSearchFields"][] = "distribute_date";
	$tdataCapacity___Morning_Shift[".allSearchFields"][] = "files_remaining_to_deliver";
	$tdataCapacity___Morning_Shift[".allSearchFields"][] = "total_estimated";
	$tdataCapacity___Morning_Shift[".allSearchFields"][] = "remaining_this_shift";
	$tdataCapacity___Morning_Shift[".allSearchFields"][] = "remaining_capacity";
	

$tdataCapacity___Morning_Shift[".googleLikeFields"] = array();
$tdataCapacity___Morning_Shift[".googleLikeFields"][] = "designer2_id";
$tdataCapacity___Morning_Shift[".googleLikeFields"][] = "team";
$tdataCapacity___Morning_Shift[".googleLikeFields"][] = "distribute_date";
$tdataCapacity___Morning_Shift[".googleLikeFields"][] = "files_remaining_to_deliver";
$tdataCapacity___Morning_Shift[".googleLikeFields"][] = "total_estimated";
$tdataCapacity___Morning_Shift[".googleLikeFields"][] = "remaining_this_shift";
$tdataCapacity___Morning_Shift[".googleLikeFields"][] = "remaining_capacity";
$tdataCapacity___Morning_Shift[".googleLikeFields"][] = "shift_start";
$tdataCapacity___Morning_Shift[".googleLikeFields"][] = "shift_end";


$tdataCapacity___Morning_Shift[".advSearchFields"] = array();
$tdataCapacity___Morning_Shift[".advSearchFields"][] = "designer2_id";
$tdataCapacity___Morning_Shift[".advSearchFields"][] = "team";
$tdataCapacity___Morning_Shift[".advSearchFields"][] = "distribute_date";
$tdataCapacity___Morning_Shift[".advSearchFields"][] = "files_remaining_to_deliver";
$tdataCapacity___Morning_Shift[".advSearchFields"][] = "total_estimated";
$tdataCapacity___Morning_Shift[".advSearchFields"][] = "remaining_this_shift";
$tdataCapacity___Morning_Shift[".advSearchFields"][] = "remaining_capacity";
$tdataCapacity___Morning_Shift[".advSearchFields"][] = "shift_start";
$tdataCapacity___Morning_Shift[".advSearchFields"][] = "shift_end";

$tdataCapacity___Morning_Shift[".tableType"] = "report";

$tdataCapacity___Morning_Shift[".printerPageOrientation"] = 0;
$tdataCapacity___Morning_Shift[".nPrinterPageScale"] = 100;

$tdataCapacity___Morning_Shift[".nPrinterSplitRecords"] = 40;

$tdataCapacity___Morning_Shift[".nPrinterPDFSplitRecords"] = 40;



$tdataCapacity___Morning_Shift[".geocodingEnabled"] = false;

//report settings

$tdataCapacity___Morning_Shift[".reportPrintPartitionType"] = 0;	
$tdataCapacity___Morning_Shift[".reportPrintGroupsPerPage"] = 3;	
	$tdataCapacity___Morning_Shift[".lowGroup"] = 1;



$tdataCapacity___Morning_Shift[".reportGroupFields"] = true;
$tdataCapacity___Morning_Shift[".pageSize"] = 20;
$tdataCapacity___Morning_Shift[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "team";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataCapacity___Morning_Shift[".reportGroupFieldsData"] = $reportGroupFields;


$tdataCapacity___Morning_Shift[".isExistTotalFields"] = true;




$tdataCapacity___Morning_Shift[".repShowDet"] = true;

$tdataCapacity___Morning_Shift[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCapacity___Morning_Shift[".strOrderBy"] = $tstrOrderBy;

$tdataCapacity___Morning_Shift[".orderindexes"] = array();

$tdataCapacity___Morning_Shift[".sqlHead"] = "SELECT jobfile.designer2_id,  `user`.team,  DATE(jobfile.distribute_date) AS distribute_date,  COUNT(*) AS files_remaining_to_deliver,  SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))) AS total_estimated,  TIMEDIFF(DATE_ADD(DATE(NOW()), INTERVAL 14 HOUR), NOW()) AS remaining_this_shift,  SEC_TO_TIME(TIME_TO_SEC(TIMEDIFF(DATE_ADD(DATE(NOW()), INTERVAL 14 HOUR), NOW())) - (SUM(TIME_TO_SEC(pdf.pdf_estimated_average)))) AS remaining_capacity,  DATE_ADD(DATE(NOW()), INTERVAL 7 HOUR) AS shift_start,  DATE_ADD(DATE(NOW()), INTERVAL 14 HOUR) AS shift_end";
$tdataCapacity___Morning_Shift[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN job ON jobfile.job_id = job.job_id  LEFT OUTER JOIN pdf ON job.pdf_id = pdf.pdf_id  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$tdataCapacity___Morning_Shift[".sqlWhereExpr"] = "(jobfile.distribute_date BETWEEN DATE_ADD(DATE(NOW()), INTERVAL 7 HOUR) AND DATE_ADD(DATE(NOW()), INTERVAL 14 HOUR)) AND (jobfile.designer2_time IS NULL)";
$tdataCapacity___Morning_Shift[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCapacity___Morning_Shift[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCapacity___Morning_Shift[".arrGroupsPerPage"] = $arrGPP;

$tdataCapacity___Morning_Shift[".highlightSearchResults"] = true;

$tableKeysCapacity___Morning_Shift = array();
$tdataCapacity___Morning_Shift[".Keys"] = $tableKeysCapacity___Morning_Shift;

$tdataCapacity___Morning_Shift[".listFields"] = array();
$tdataCapacity___Morning_Shift[".listFields"][] = "designer2_id";
$tdataCapacity___Morning_Shift[".listFields"][] = "team";
$tdataCapacity___Morning_Shift[".listFields"][] = "distribute_date";
$tdataCapacity___Morning_Shift[".listFields"][] = "files_remaining_to_deliver";
$tdataCapacity___Morning_Shift[".listFields"][] = "total_estimated";
$tdataCapacity___Morning_Shift[".listFields"][] = "remaining_this_shift";
$tdataCapacity___Morning_Shift[".listFields"][] = "remaining_capacity";
$tdataCapacity___Morning_Shift[".listFields"][] = "shift_start";
$tdataCapacity___Morning_Shift[".listFields"][] = "shift_end";

$tdataCapacity___Morning_Shift[".hideMobileList"] = array();


$tdataCapacity___Morning_Shift[".viewFields"] = array();
$tdataCapacity___Morning_Shift[".viewFields"][] = "designer2_id";
$tdataCapacity___Morning_Shift[".viewFields"][] = "team";
$tdataCapacity___Morning_Shift[".viewFields"][] = "distribute_date";
$tdataCapacity___Morning_Shift[".viewFields"][] = "files_remaining_to_deliver";
$tdataCapacity___Morning_Shift[".viewFields"][] = "total_estimated";
$tdataCapacity___Morning_Shift[".viewFields"][] = "remaining_this_shift";
$tdataCapacity___Morning_Shift[".viewFields"][] = "remaining_capacity";
$tdataCapacity___Morning_Shift[".viewFields"][] = "shift_start";
$tdataCapacity___Morning_Shift[".viewFields"][] = "shift_end";

$tdataCapacity___Morning_Shift[".addFields"] = array();
$tdataCapacity___Morning_Shift[".addFields"][] = "designer2_id";
$tdataCapacity___Morning_Shift[".addFields"][] = "distribute_date";

$tdataCapacity___Morning_Shift[".masterListFields"] = array();
$tdataCapacity___Morning_Shift[".masterListFields"][] = "designer2_id";
$tdataCapacity___Morning_Shift[".masterListFields"][] = "team";
$tdataCapacity___Morning_Shift[".masterListFields"][] = "distribute_date";
$tdataCapacity___Morning_Shift[".masterListFields"][] = "files_remaining_to_deliver";
$tdataCapacity___Morning_Shift[".masterListFields"][] = "total_estimated";
$tdataCapacity___Morning_Shift[".masterListFields"][] = "remaining_this_shift";
$tdataCapacity___Morning_Shift[".masterListFields"][] = "remaining_capacity";
$tdataCapacity___Morning_Shift[".masterListFields"][] = "shift_start";
$tdataCapacity___Morning_Shift[".masterListFields"][] = "shift_end";

$tdataCapacity___Morning_Shift[".inlineAddFields"] = array();
$tdataCapacity___Morning_Shift[".inlineAddFields"][] = "designer2_id";
$tdataCapacity___Morning_Shift[".inlineAddFields"][] = "distribute_date";

$tdataCapacity___Morning_Shift[".editFields"] = array();
$tdataCapacity___Morning_Shift[".editFields"][] = "designer2_id";
$tdataCapacity___Morning_Shift[".editFields"][] = "distribute_date";

$tdataCapacity___Morning_Shift[".inlineEditFields"] = array();
$tdataCapacity___Morning_Shift[".inlineEditFields"][] = "designer2_id";
$tdataCapacity___Morning_Shift[".inlineEditFields"][] = "distribute_date";

$tdataCapacity___Morning_Shift[".exportFields"] = array();
$tdataCapacity___Morning_Shift[".exportFields"][] = "designer2_id";
$tdataCapacity___Morning_Shift[".exportFields"][] = "team";
$tdataCapacity___Morning_Shift[".exportFields"][] = "distribute_date";
$tdataCapacity___Morning_Shift[".exportFields"][] = "files_remaining_to_deliver";
$tdataCapacity___Morning_Shift[".exportFields"][] = "total_estimated";
$tdataCapacity___Morning_Shift[".exportFields"][] = "remaining_this_shift";
$tdataCapacity___Morning_Shift[".exportFields"][] = "remaining_capacity";
$tdataCapacity___Morning_Shift[".exportFields"][] = "shift_start";
$tdataCapacity___Morning_Shift[".exportFields"][] = "shift_end";

$tdataCapacity___Morning_Shift[".importFields"] = array();
$tdataCapacity___Morning_Shift[".importFields"][] = "designer2_id";
$tdataCapacity___Morning_Shift[".importFields"][] = "team";
$tdataCapacity___Morning_Shift[".importFields"][] = "distribute_date";
$tdataCapacity___Morning_Shift[".importFields"][] = "files_remaining_to_deliver";
$tdataCapacity___Morning_Shift[".importFields"][] = "total_estimated";
$tdataCapacity___Morning_Shift[".importFields"][] = "remaining_this_shift";
$tdataCapacity___Morning_Shift[".importFields"][] = "remaining_capacity";
$tdataCapacity___Morning_Shift[".importFields"][] = "shift_start";
$tdataCapacity___Morning_Shift[".importFields"][] = "shift_end";

$tdataCapacity___Morning_Shift[".printFields"] = array();
$tdataCapacity___Morning_Shift[".printFields"][] = "designer2_id";
$tdataCapacity___Morning_Shift[".printFields"][] = "team";
$tdataCapacity___Morning_Shift[".printFields"][] = "distribute_date";
$tdataCapacity___Morning_Shift[".printFields"][] = "files_remaining_to_deliver";
$tdataCapacity___Morning_Shift[".printFields"][] = "total_estimated";
$tdataCapacity___Morning_Shift[".printFields"][] = "remaining_this_shift";
$tdataCapacity___Morning_Shift[".printFields"][] = "remaining_capacity";
$tdataCapacity___Morning_Shift[".printFields"][] = "shift_start";
$tdataCapacity___Morning_Shift[".printFields"][] = "shift_end";

//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Capacity___Morning_Shift","designer2_id"); 
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

	

	
	$tdataCapacity___Morning_Shift["designer2_id"] = $fdata;
//	team
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team";
	$fdata["GoodName"] = "team";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Capacity___Morning_Shift","team"); 
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

	

	
	$tdataCapacity___Morning_Shift["team"] = $fdata;
//	distribute_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "distribute_date";
	$fdata["GoodName"] = "distribute_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Capacity___Morning_Shift","distribute_date"); 
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
	
		$fdata["strField"] = "distribute_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE(jobfile.distribute_date)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataCapacity___Morning_Shift["distribute_date"] = $fdata;
//	files_remaining_to_deliver
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "files_remaining_to_deliver";
	$fdata["GoodName"] = "files_remaining_to_deliver";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Capacity___Morning_Shift","files_remaining_to_deliver"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
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

	

	
	$tdataCapacity___Morning_Shift["files_remaining_to_deliver"] = $fdata;
//	total_estimated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total_estimated";
	$fdata["GoodName"] = "total_estimated";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Capacity___Morning_Shift","total_estimated"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_estimated"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average)))";
	
		
		
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

	

	
	$tdataCapacity___Morning_Shift["total_estimated"] = $fdata;
//	remaining_this_shift
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "remaining_this_shift";
	$fdata["GoodName"] = "remaining_this_shift";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Capacity___Morning_Shift","remaining_this_shift"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "remaining_this_shift"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIMEDIFF(DATE_ADD(DATE(NOW()), INTERVAL 14 HOUR), NOW())";
	
		
		
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

	

	
	$tdataCapacity___Morning_Shift["remaining_this_shift"] = $fdata;
//	remaining_capacity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "remaining_capacity";
	$fdata["GoodName"] = "remaining_capacity";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Capacity___Morning_Shift","remaining_capacity"); 
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
	$fdata["FullName"] = "SEC_TO_TIME(TIME_TO_SEC(TIMEDIFF(DATE_ADD(DATE(NOW()), INTERVAL 14 HOUR), NOW())) - (SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))";
	
		
		
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

	

	
	$tdataCapacity___Morning_Shift["remaining_capacity"] = $fdata;
//	shift_start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "shift_start";
	$fdata["GoodName"] = "shift_start";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Capacity___Morning_Shift","shift_start"); 
	$fdata["FieldType"] = 135;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "shift_start"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE_ADD(DATE(NOW()), INTERVAL 7 HOUR)";
	
		
		
				
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
	
	
	
	

	

	
	$tdataCapacity___Morning_Shift["shift_start"] = $fdata;
//	shift_end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "shift_end";
	$fdata["GoodName"] = "shift_end";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Capacity___Morning_Shift","shift_end"); 
	$fdata["FieldType"] = 135;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "shift_end"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE_ADD(DATE(NOW()), INTERVAL 14 HOUR)";
	
		
		
				
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
	
	
	
	

	

	
	$tdataCapacity___Morning_Shift["shift_end"] = $fdata;

	
$tables_data["Capacity - Morning Shift"]=&$tdataCapacity___Morning_Shift;
$field_labels["Capacity___Morning_Shift"] = &$fieldLabelsCapacity___Morning_Shift;
$fieldToolTips["Capacity - Morning Shift"] = &$fieldToolTipsCapacity___Morning_Shift;
$page_titles["Capacity___Morning_Shift"] = &$pageTitlesCapacity___Morning_Shift;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Capacity - Morning Shift"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Capacity - Morning Shift"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Capacity___Morning_Shift()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile.designer2_id,  `user`.team,  DATE(jobfile.distribute_date) AS distribute_date,  COUNT(*) AS files_remaining_to_deliver,  SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))) AS total_estimated,  TIMEDIFF(DATE_ADD(DATE(NOW()), INTERVAL 14 HOUR), NOW()) AS remaining_this_shift,  SEC_TO_TIME(TIME_TO_SEC(TIMEDIFF(DATE_ADD(DATE(NOW()), INTERVAL 14 HOUR), NOW())) - (SUM(TIME_TO_SEC(pdf.pdf_estimated_average)))) AS remaining_capacity,  DATE_ADD(DATE(NOW()), INTERVAL 7 HOUR) AS shift_start,  DATE_ADD(DATE(NOW()), INTERVAL 14 HOUR) AS shift_end";
$proto0["m_strFrom"] = "FROM jobfile  LEFT OUTER JOIN job ON jobfile.job_id = job.job_id  LEFT OUTER JOIN pdf ON job.pdf_id = pdf.pdf_id  LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$proto0["m_strWhere"] = "(jobfile.distribute_date BETWEEN DATE_ADD(DATE(NOW()), INTERVAL 7 HOUR) AND DATE_ADD(DATE(NOW()), INTERVAL 14 HOUR)) AND (jobfile.designer2_time IS NULL)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(jobfile.distribute_date BETWEEN DATE_ADD(DATE(NOW()), INTERVAL 7 HOUR) AND DATE_ADD(DATE(NOW()), INTERVAL 14 HOUR)) AND (jobfile.designer2_time IS NULL)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.distribute_date BETWEEN DATE_ADD(DATE(NOW()), INTERVAL 7 HOUR) AND DATE_ADD(DATE(NOW()), INTERVAL 14 HOUR)) AND (jobfile.designer2_time IS NULL)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.distribute_date BETWEEN DATE_ADD(DATE(NOW()), INTERVAL 7 HOUR) AND DATE_ADD(DATE(NOW()), INTERVAL 14 HOUR)";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "distribute_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Capacity - Morning Shift"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "BETWEEN DATE_ADD(DATE(NOW()), INTERVAL 7 HOUR) AND DATE_ADD(DATE(NOW()), INTERVAL 14 HOUR)";
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
	"m_srcTableName" => "Capacity - Morning Shift"
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
	"m_srcTableName" => "Capacity - Morning Shift"
));

$proto9["m_sql"] = "jobfile.designer2_id";
$proto9["m_srcTableName"] = "Capacity - Morning Shift";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Capacity - Morning Shift"
));

$proto11["m_sql"] = "`user`.team";
$proto11["m_srcTableName"] = "Capacity - Morning Shift";
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
$proto13["m_srcTableName"] = "Capacity - Morning Shift";
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
$proto16["m_srcTableName"] = "Capacity - Morning Shift";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "files_remaining_to_deliver";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$proto20=array();
$proto20["m_functiontype"] = "SQLF_CUSTOM";
$proto20["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(TIME_TO_SEC(pdf.pdf_estimated_average))"
));

$proto20["m_arguments"][]=$obj;
$proto20["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto20);

$proto19["m_sql"] = "SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average)))";
$proto19["m_srcTableName"] = "Capacity - Morning Shift";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "total_estimated";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$proto23=array();
$proto23["m_functiontype"] = "SQLF_CUSTOM";
$proto23["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "DATE_ADD(DATE(NOW()), INTERVAL 14 HOUR)"
));

$proto23["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NOW()"
));

$proto23["m_arguments"][]=$obj;
$proto23["m_strFunctionName"] = "TIMEDIFF";
$obj = new SQLFunctionCall($proto23);

$proto22["m_sql"] = "TIMEDIFF(DATE_ADD(DATE(NOW()), INTERVAL 14 HOUR), NOW())";
$proto22["m_srcTableName"] = "Capacity - Morning Shift";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "remaining_this_shift";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_CUSTOM";
$proto27["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "TIME_TO_SEC(TIMEDIFF(DATE_ADD(DATE(NOW()), INTERVAL 14 HOUR), NOW())) - (SUM(TIME_TO_SEC(pdf.pdf_estimated_average)))"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "SEC_TO_TIME(TIME_TO_SEC(TIMEDIFF(DATE_ADD(DATE(NOW()), INTERVAL 14 HOUR), NOW())) - (SUM(TIME_TO_SEC(pdf.pdf_estimated_average))))";
$proto26["m_srcTableName"] = "Capacity - Morning Shift";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "remaining_capacity";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$proto30=array();
$proto30["m_functiontype"] = "SQLF_CUSTOM";
$proto30["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "DATE(NOW())"
));

$proto30["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "INTERVAL 7 HOUR"
));

$proto30["m_arguments"][]=$obj;
$proto30["m_strFunctionName"] = "DATE_ADD";
$obj = new SQLFunctionCall($proto30);

$proto29["m_sql"] = "DATE_ADD(DATE(NOW()), INTERVAL 7 HOUR)";
$proto29["m_srcTableName"] = "Capacity - Morning Shift";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "shift_start";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$proto34=array();
$proto34["m_functiontype"] = "SQLF_CUSTOM";
$proto34["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "DATE(NOW())"
));

$proto34["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "INTERVAL 14 HOUR"
));

$proto34["m_arguments"][]=$obj;
$proto34["m_strFunctionName"] = "DATE_ADD";
$obj = new SQLFunctionCall($proto34);

$proto33["m_sql"] = "DATE_ADD(DATE(NOW()), INTERVAL 14 HOUR)";
$proto33["m_srcTableName"] = "Capacity - Morning Shift";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "shift_end";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "jobfile";
$proto38["m_srcTableName"] = "Capacity - Morning Shift";
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
$proto37["m_srcTableName"] = "Capacity - Morning Shift";
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
$proto42["m_strName"] = "job";
$proto42["m_srcTableName"] = "Capacity - Morning Shift";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "work_id";
$proto42["m_columns"][] = "job_id";
$proto42["m_columns"][] = "client_id";
$proto42["m_columns"][] = "project_id";
$proto42["m_columns"][] = "job_directory";
$proto42["m_columns"][] = "complexity1";
$proto42["m_columns"][] = "complexity2";
$proto42["m_columns"][] = "complexity3";
$proto42["m_columns"][] = "complexity4";
$proto42["m_columns"][] = "complexity5";
$proto42["m_columns"][] = "complexity0";
$proto42["m_columns"][] = "complexityNP";
$proto42["m_columns"][] = "custom_complexity";
$proto42["m_columns"][] = "total_images";
$proto42["m_columns"][] = "is_urgent";
$proto42["m_columns"][] = "urgent_instruction";
$proto42["m_columns"][] = "delivery_duration";
$proto42["m_columns"][] = "delivery_date";
$proto42["m_columns"][] = "notify_options";
$proto42["m_columns"][] = "notes";
$proto42["m_columns"][] = "web_note";
$proto42["m_columns"][] = "comments";
$proto42["m_columns"][] = "pdf_id";
$proto42["m_columns"][] = "pdf_location";
$proto42["m_columns"][] = "allow_batch_process";
$proto42["m_columns"][] = "jobstatus_id";
$proto42["m_columns"][] = "reviewer_id";
$proto42["m_columns"][] = "reviewed_date";
$proto42["m_columns"][] = "accept_id";
$proto42["m_columns"][] = "accepted_date";
$proto42["m_columns"][] = "downloader_id";
$proto42["m_columns"][] = "download_date";
$proto42["m_columns"][] = "distributor_id";
$proto42["m_columns"][] = "distribute_date";
$proto42["m_columns"][] = "designer_list";
$proto42["m_columns"][] = "qcs_list";
$proto42["m_columns"][] = "finish_date";
$proto42["m_columns"][] = "uploader_id";
$proto42["m_columns"][] = "upload_date";
$proto42["m_columns"][] = "notifer_id";
$proto42["m_columns"][] = "notify_date";
$proto42["m_columns"][] = "rejector_id";
$proto42["m_columns"][] = "reject_date";
$proto42["m_columns"][] = "reject_reason";
$proto42["m_columns"][] = "activity_log";
$proto42["m_columns"][] = "time_remaining";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "LEFT OUTER JOIN job ON jobfile.job_id = job.job_id";
$proto41["m_alias"] = "";
$proto41["m_srcTableName"] = "Capacity - Morning Shift";
$proto43=array();
$proto43["m_sql"] = "jobfile.job_id = job.job_id";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Capacity - Morning Shift"
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "= job.job_id";
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
$proto46["m_srcTableName"] = "Capacity - Morning Shift";
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
$proto46["m_columns"][] = "price";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "LEFT OUTER JOIN pdf ON job.pdf_id = pdf.pdf_id";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "Capacity - Morning Shift";
$proto47=array();
$proto47["m_sql"] = "job.pdf_id = pdf.pdf_id";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Capacity - Morning Shift"
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
												$proto49=array();
$proto49["m_link"] = "SQLL_LEFTJOIN";
			$proto50=array();
$proto50["m_strName"] = "user";
$proto50["m_srcTableName"] = "Capacity - Morning Shift";
$proto50["m_columns"] = array();
$proto50["m_columns"][] = "user_id";
$proto50["m_columns"][] = "user_status";
$proto50["m_columns"][] = "username";
$proto50["m_columns"][] = "password";
$proto50["m_columns"][] = "department_id";
$proto50["m_columns"][] = "subdiv_id";
$proto50["m_columns"][] = "group_id";
$proto50["m_columns"][] = "designation";
$proto50["m_columns"][] = "employee_id";
$proto50["m_columns"][] = "fname";
$proto50["m_columns"][] = "lname";
$proto50["m_columns"][] = "nickname";
$proto50["m_columns"][] = "email";
$proto50["m_columns"][] = "phone";
$proto50["m_columns"][] = "mobile";
$proto50["m_columns"][] = "log";
$proto50["m_columns"][] = "images_assigned";
$proto50["m_columns"][] = "user_picture";
$proto50["m_columns"][] = "team";
$proto50["m_columns"][] = "ad_group_id";
$proto50["m_columns"][] = "lastaccess";
$proto50["m_columns"][] = "joining_date";
$proto50["m_columns"][] = "emergency_contact1";
$proto50["m_columns"][] = "emergency_contact2";
$proto50["m_columns"][] = "permanent_address";
$proto50["m_columns"][] = "current_address";
$proto50["m_columns"][] = "date_of_birth";
$proto50["m_columns"][] = "male_female";
$obj = new SQLTable($proto50);

$proto49["m_table"] = $obj;
$proto49["m_sql"] = "LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$proto49["m_alias"] = "";
$proto49["m_srcTableName"] = "Capacity - Morning Shift";
$proto51=array();
$proto51["m_sql"] = "jobfile.designer2_id = `user`.user_id";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Capacity - Morning Shift"
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "= `user`.user_id";
$proto51["m_havingmode"] = false;
$proto51["m_inBrackets"] = false;
$proto51["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto51);

$proto49["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto49);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Capacity - Morning Shift"
));

$proto53["m_column"]=$obj;
$obj = new SQLGroupByItem($proto53);

$proto0["m_groupby"][]=$obj;
												$proto55=array();
						$proto56=array();
$proto56["m_functiontype"] = "SQLF_CUSTOM";
$proto56["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.distribute_date"
));

$proto56["m_arguments"][]=$obj;
$proto56["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto56);

$proto55["m_column"]=$obj;
$obj = new SQLGroupByItem($proto55);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Capacity - Morning Shift";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Capacity___Morning_Shift = createSqlQuery_Capacity___Morning_Shift();


	
									
	
$tdataCapacity___Morning_Shift[".sqlquery"] = $queryData_Capacity___Morning_Shift;

$tableEvents["Capacity - Morning Shift"] = new eventsBase;
$tdataCapacity___Morning_Shift[".hasEvents"] = false;

?>