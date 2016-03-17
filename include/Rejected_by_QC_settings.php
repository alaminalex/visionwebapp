<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRejected_by_QC = array();	
	$tdataRejected_by_QC[".truncateText"] = true;
	$tdataRejected_by_QC[".NumberOfChars"] = 80; 
	$tdataRejected_by_QC[".ShortName"] = "Rejected_by_QC";
	$tdataRejected_by_QC[".OwnerID"] = "";
	$tdataRejected_by_QC[".OriginalTable"] = "rejected_jobfile2";

//	field labels
$fieldLabelsRejected_by_QC = array();
$fieldToolTipsRejected_by_QC = array();
$pageTitlesRejected_by_QC = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRejected_by_QC["English"] = array();
	$fieldToolTipsRejected_by_QC["English"] = array();
	$pageTitlesRejected_by_QC["English"] = array();
	$fieldLabelsRejected_by_QC["English"]["start_date_only"] = "Start Date Only";
	$fieldToolTipsRejected_by_QC["English"]["start_date_only"] = "";
	$fieldLabelsRejected_by_QC["English"]["designer_name"] = "Designer Name";
	$fieldToolTipsRejected_by_QC["English"]["designer_name"] = "";
	$fieldLabelsRejected_by_QC["English"]["group_id"] = "Group Id";
	$fieldToolTipsRejected_by_QC["English"]["group_id"] = "";
	$fieldLabelsRejected_by_QC["English"]["total_estimated_time"] = "Total Estimated Time";
	$fieldToolTipsRejected_by_QC["English"]["total_estimated_time"] = "";
	$fieldLabelsRejected_by_QC["English"]["total_designer_time"] = "Total Designer Time";
	$fieldToolTipsRejected_by_QC["English"]["total_designer_time"] = "";
	$fieldLabelsRejected_by_QC["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsRejected_by_QC["English"]["efficiency"] = "";
	$fieldLabelsRejected_by_QC["English"]["work_type"] = "Work Type";
	$fieldToolTipsRejected_by_QC["English"]["work_type"] = "";
	$fieldLabelsRejected_by_QC["English"]["rejected_jobfile2_designer2_id"] = "Rejected Jobfile2.designer2 Id";
	$fieldToolTipsRejected_by_QC["English"]["rejected_jobfile2.designer2_id"] = "";
	$fieldLabelsRejected_by_QC["English"]["rejected_files"] = "Rejected Files";
	$fieldToolTipsRejected_by_QC["English"]["rejected_files"] = "";
	if (count($fieldToolTipsRejected_by_QC["English"]))
		$tdataRejected_by_QC[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRejected_by_QC[""] = array();
	$fieldToolTipsRejected_by_QC[""] = array();
	$pageTitlesRejected_by_QC[""] = array();
	$fieldLabelsRejected_by_QC[""]["start_date_only"] = "Start Date Only";
	$fieldToolTipsRejected_by_QC[""]["start_date_only"] = "";
	$fieldLabelsRejected_by_QC[""]["designer_name"] = "Designer Name";
	$fieldToolTipsRejected_by_QC[""]["designer_name"] = "";
	$fieldLabelsRejected_by_QC[""]["group_id"] = "Group Id";
	$fieldToolTipsRejected_by_QC[""]["group_id"] = "";
	$fieldLabelsRejected_by_QC[""]["total_estimated_time"] = "Total Estimated Time";
	$fieldToolTipsRejected_by_QC[""]["total_estimated_time"] = "";
	$fieldLabelsRejected_by_QC[""]["total_designer_time"] = "Total Designer Time";
	$fieldToolTipsRejected_by_QC[""]["total_designer_time"] = "";
	$fieldLabelsRejected_by_QC[""]["efficiency"] = "Efficiency";
	$fieldToolTipsRejected_by_QC[""]["efficiency"] = "";
	$fieldLabelsRejected_by_QC[""]["work_type"] = "Work Type";
	$fieldToolTipsRejected_by_QC[""]["work_type"] = "";
	$fieldLabelsRejected_by_QC[""]["rejected_jobfile2_designer2_id"] = "Rejected Jobfile2.designer2 Id";
	$fieldToolTipsRejected_by_QC[""]["rejected_jobfile2.designer2_id"] = "";
	$fieldLabelsRejected_by_QC[""]["rejected_files"] = "Rejected Files";
	$fieldToolTipsRejected_by_QC[""]["rejected_files"] = "";
	if (count($fieldToolTipsRejected_by_QC[""]))
		$tdataRejected_by_QC[".isUseToolTips"] = true;
}
	
	
	$tdataRejected_by_QC[".NCSearch"] = true;



$tdataRejected_by_QC[".shortTableName"] = "Rejected_by_QC";
$tdataRejected_by_QC[".nSecOptions"] = 0;
$tdataRejected_by_QC[".recsPerRowList"] = 1;
$tdataRejected_by_QC[".recsPerRowPrint"] = 1;
$tdataRejected_by_QC[".mainTableOwnerID"] = "";
$tdataRejected_by_QC[".moveNext"] = 1;
$tdataRejected_by_QC[".entityType"] = 2;

$tdataRejected_by_QC[".strOriginalTableName"] = "rejected_jobfile2";




$tdataRejected_by_QC[".showAddInPopup"] = false;

$tdataRejected_by_QC[".showEditInPopup"] = false;

$tdataRejected_by_QC[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRejected_by_QC[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRejected_by_QC[".fieldsForRegister"] = array();

$tdataRejected_by_QC[".listAjax"] = false;

	$tdataRejected_by_QC[".audit"] = false;

	$tdataRejected_by_QC[".locking"] = false;


$tdataRejected_by_QC[".add"] = true;
$tdataRejected_by_QC[".afterAddAction"] = 1;
$tdataRejected_by_QC[".closePopupAfterAdd"] = 1;
$tdataRejected_by_QC[".afterAddActionDetTable"] = "";

$tdataRejected_by_QC[".list"] = true;

$tdataRejected_by_QC[".inlineAdd"] = true;


$tdataRejected_by_QC[".exportTo"] = true;

$tdataRejected_by_QC[".printFriendly"] = true;


$tdataRejected_by_QC[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataRejected_by_QC[".searchSaving"] = false;
//

$tdataRejected_by_QC[".showSearchPanel"] = true;
		$tdataRejected_by_QC[".flexibleSearch"] = true;		

if (isMobile())
	$tdataRejected_by_QC[".isUseAjaxSuggest"] = false;
else 
	$tdataRejected_by_QC[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataRejected_by_QC[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRejected_by_QC[".isUseTimeForSearch"] = false;





$tdataRejected_by_QC[".allSearchFields"] = array();
$tdataRejected_by_QC[".filterFields"] = array();
$tdataRejected_by_QC[".requiredSearchFields"] = array();

$tdataRejected_by_QC[".allSearchFields"][] = "start_date_only";
	$tdataRejected_by_QC[".allSearchFields"][] = "designer_name";
	$tdataRejected_by_QC[".allSearchFields"][] = "group_id";
	$tdataRejected_by_QC[".allSearchFields"][] = "total_estimated_time";
	$tdataRejected_by_QC[".allSearchFields"][] = "total_designer_time";
	$tdataRejected_by_QC[".allSearchFields"][] = "efficiency";
	$tdataRejected_by_QC[".allSearchFields"][] = "rejected_files";
	

$tdataRejected_by_QC[".googleLikeFields"] = array();
$tdataRejected_by_QC[".googleLikeFields"][] = "start_date_only";
$tdataRejected_by_QC[".googleLikeFields"][] = "designer_name";
$tdataRejected_by_QC[".googleLikeFields"][] = "group_id";
$tdataRejected_by_QC[".googleLikeFields"][] = "total_estimated_time";
$tdataRejected_by_QC[".googleLikeFields"][] = "total_designer_time";
$tdataRejected_by_QC[".googleLikeFields"][] = "efficiency";
$tdataRejected_by_QC[".googleLikeFields"][] = "rejected_files";
$tdataRejected_by_QC[".googleLikeFields"][] = "work_type";
$tdataRejected_by_QC[".googleLikeFields"][] = "rejected_jobfile2.designer2_id";


$tdataRejected_by_QC[".advSearchFields"] = array();
$tdataRejected_by_QC[".advSearchFields"][] = "start_date_only";
$tdataRejected_by_QC[".advSearchFields"][] = "designer_name";
$tdataRejected_by_QC[".advSearchFields"][] = "group_id";
$tdataRejected_by_QC[".advSearchFields"][] = "total_estimated_time";
$tdataRejected_by_QC[".advSearchFields"][] = "total_designer_time";
$tdataRejected_by_QC[".advSearchFields"][] = "efficiency";
$tdataRejected_by_QC[".advSearchFields"][] = "rejected_files";
$tdataRejected_by_QC[".advSearchFields"][] = "work_type";
$tdataRejected_by_QC[".advSearchFields"][] = "rejected_jobfile2.designer2_id";

$tdataRejected_by_QC[".tableType"] = "report";

$tdataRejected_by_QC[".printerPageOrientation"] = 0;
$tdataRejected_by_QC[".nPrinterPageScale"] = 100;

$tdataRejected_by_QC[".nPrinterSplitRecords"] = 40;

$tdataRejected_by_QC[".nPrinterPDFSplitRecords"] = 40;



$tdataRejected_by_QC[".geocodingEnabled"] = false;

//report settings
$tdataRejected_by_QC[".printReportLayout"] = 3;	

$tdataRejected_by_QC[".reportPrintPartitionType"] = 1;	
$tdataRejected_by_QC[".reportPrintGroupsPerPage"] = 3;	
	$tdataRejected_by_QC[".reportPrintPDFGroupsPerPage"] = 3;	
$tdataRejected_by_QC[".lowGroup"] = 1;



$tdataRejected_by_QC[".reportGroupFields"] = true;
$tdataRejected_by_QC[".pageSize"] = 1;
$tdataRejected_by_QC[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "start_date_only";
	$rgroupField['groupInterval'] = 5;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataRejected_by_QC[".reportGroupFieldsData"] = $reportGroupFields;


$tdataRejected_by_QC[".isExistTotalFields"] = true;




$tdataRejected_by_QC[".repShowDet"] = true;

$tdataRejected_by_QC[".reportLayout"] = 3;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY DATE(SUBSTRING((TIMESTAMPADD(MINUTE,105,`end2_date`)), 1, 10)) DESC, rejected_jobfile2.designer2_id";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRejected_by_QC[".strOrderBy"] = $tstrOrderBy;

$tdataRejected_by_QC[".orderindexes"] = array();
$tdataRejected_by_QC[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "DATE(SUBSTRING((TIMESTAMPADD(MINUTE,105,`end2_date`)), 1, 10))");
$tdataRejected_by_QC[".orderindexes"][] = array(9, (1 ? "ASC" : "DESC"), "rejected_jobfile2.designer2_id");

$tdataRejected_by_QC[".sqlHead"] = "SELECT DATE(SUBSTRING((TIMESTAMPADD(MINUTE,105,`end2_date`)), 1, 10)) AS start_date_only,  `user`.user_id AS designer_name,  `user`.group_id,  SEC_TO_TIME(IFNULL(SUM(TIME_TO_SEC(IF(rejected_jobfile2.jobfile_type=2,(pdf.pdf_estimated_average/3.5), pdf.pdf_estimated_average))), 0)) AS total_estimated_time,  SEC_TO_TIME(IFNULL(SUM(TIME_TO_SEC(IF(rejected_jobfile2.designer2_time<60,pdf.pdf_estimated_average,rejected_jobfile2.designer2_time))), 0)) AS total_designer_time,  IFNULL((SUM(TIME_TO_SEC(IF(rejected_jobfile2.jobfile_type=2,(pdf.pdf_estimated_average/3.5), pdf.pdf_estimated_average))) * 100) / SUM(TIME_TO_SEC(IF(rejected_jobfile2.designer2_time<10,IF(rejected_jobfile2.jobfile_type=2,(pdf.pdf_estimated_average/3.5), pdf.pdf_estimated_average),rejected_jobfile2.designer2_time))), 0) AS efficiency,  COUNT(*) AS rejected_files,  '10' AS work_type,  rejected_jobfile2.designer2_id AS `rejected_jobfile2.designer2_id`";
$tdataRejected_by_QC[".sqlFrom"] = "FROM rejected_jobfile2  LEFT OUTER JOIN `user` ON rejected_jobfile2.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON rejected_jobfile2.project_id = pdf.pdf_id";
$tdataRejected_by_QC[".sqlWhereExpr"] = "rejected_jobfile2.designer2_id IS NOT NULL OR (TIMESTAMPADD(MINUTE,105,rejected_jobfile2.`end2_date`)) > '0000-00-00 00:00:00' OR (rejected_jobfile2.filename not like '%retouch%') OR TIME_TO_SEC(rejected_jobfile2.designer2_time) > '1'";
$tdataRejected_by_QC[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRejected_by_QC[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRejected_by_QC[".arrGroupsPerPage"] = $arrGPP;

$tdataRejected_by_QC[".highlightSearchResults"] = true;

$tableKeysRejected_by_QC = array();
$tdataRejected_by_QC[".Keys"] = $tableKeysRejected_by_QC;

$tdataRejected_by_QC[".listFields"] = array();
$tdataRejected_by_QC[".listFields"][] = "start_date_only";
$tdataRejected_by_QC[".listFields"][] = "designer_name";
$tdataRejected_by_QC[".listFields"][] = "group_id";
$tdataRejected_by_QC[".listFields"][] = "total_estimated_time";
$tdataRejected_by_QC[".listFields"][] = "total_designer_time";
$tdataRejected_by_QC[".listFields"][] = "efficiency";
$tdataRejected_by_QC[".listFields"][] = "rejected_files";
$tdataRejected_by_QC[".listFields"][] = "work_type";
$tdataRejected_by_QC[".listFields"][] = "rejected_jobfile2.designer2_id";

$tdataRejected_by_QC[".hideMobileList"] = array();


$tdataRejected_by_QC[".viewFields"] = array();
$tdataRejected_by_QC[".viewFields"][] = "start_date_only";
$tdataRejected_by_QC[".viewFields"][] = "designer_name";
$tdataRejected_by_QC[".viewFields"][] = "group_id";
$tdataRejected_by_QC[".viewFields"][] = "total_estimated_time";
$tdataRejected_by_QC[".viewFields"][] = "total_designer_time";
$tdataRejected_by_QC[".viewFields"][] = "efficiency";
$tdataRejected_by_QC[".viewFields"][] = "rejected_files";
$tdataRejected_by_QC[".viewFields"][] = "work_type";
$tdataRejected_by_QC[".viewFields"][] = "rejected_jobfile2.designer2_id";

$tdataRejected_by_QC[".addFields"] = array();

$tdataRejected_by_QC[".masterListFields"] = array();
$tdataRejected_by_QC[".masterListFields"][] = "start_date_only";
$tdataRejected_by_QC[".masterListFields"][] = "designer_name";
$tdataRejected_by_QC[".masterListFields"][] = "group_id";
$tdataRejected_by_QC[".masterListFields"][] = "total_estimated_time";
$tdataRejected_by_QC[".masterListFields"][] = "total_designer_time";
$tdataRejected_by_QC[".masterListFields"][] = "efficiency";
$tdataRejected_by_QC[".masterListFields"][] = "rejected_files";
$tdataRejected_by_QC[".masterListFields"][] = "work_type";
$tdataRejected_by_QC[".masterListFields"][] = "rejected_jobfile2.designer2_id";

$tdataRejected_by_QC[".inlineAddFields"] = array();

$tdataRejected_by_QC[".editFields"] = array();

$tdataRejected_by_QC[".inlineEditFields"] = array();

$tdataRejected_by_QC[".exportFields"] = array();
$tdataRejected_by_QC[".exportFields"][] = "start_date_only";
$tdataRejected_by_QC[".exportFields"][] = "designer_name";
$tdataRejected_by_QC[".exportFields"][] = "group_id";
$tdataRejected_by_QC[".exportFields"][] = "total_estimated_time";
$tdataRejected_by_QC[".exportFields"][] = "total_designer_time";
$tdataRejected_by_QC[".exportFields"][] = "efficiency";
$tdataRejected_by_QC[".exportFields"][] = "rejected_files";
$tdataRejected_by_QC[".exportFields"][] = "work_type";
$tdataRejected_by_QC[".exportFields"][] = "rejected_jobfile2.designer2_id";

$tdataRejected_by_QC[".importFields"] = array();
$tdataRejected_by_QC[".importFields"][] = "start_date_only";
$tdataRejected_by_QC[".importFields"][] = "designer_name";
$tdataRejected_by_QC[".importFields"][] = "group_id";
$tdataRejected_by_QC[".importFields"][] = "total_estimated_time";
$tdataRejected_by_QC[".importFields"][] = "total_designer_time";
$tdataRejected_by_QC[".importFields"][] = "efficiency";
$tdataRejected_by_QC[".importFields"][] = "rejected_files";
$tdataRejected_by_QC[".importFields"][] = "work_type";
$tdataRejected_by_QC[".importFields"][] = "rejected_jobfile2.designer2_id";

$tdataRejected_by_QC[".printFields"] = array();
$tdataRejected_by_QC[".printFields"][] = "start_date_only";
$tdataRejected_by_QC[".printFields"][] = "designer_name";
$tdataRejected_by_QC[".printFields"][] = "group_id";
$tdataRejected_by_QC[".printFields"][] = "total_estimated_time";
$tdataRejected_by_QC[".printFields"][] = "total_designer_time";
$tdataRejected_by_QC[".printFields"][] = "efficiency";
$tdataRejected_by_QC[".printFields"][] = "rejected_files";
$tdataRejected_by_QC[".printFields"][] = "work_type";
$tdataRejected_by_QC[".printFields"][] = "rejected_jobfile2.designer2_id";

//	start_date_only
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "start_date_only";
	$fdata["GoodName"] = "start_date_only";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Rejected_by_QC","start_date_only"); 
	$fdata["FieldType"] = 7;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "start_date_only"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE(SUBSTRING((TIMESTAMPADD(MINUTE,105,`end2_date`)), 1, 10))";
	
		
		
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

	

	
	$tdataRejected_by_QC["start_date_only"] = $fdata;
//	designer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "designer_name";
	$fdata["GoodName"] = "designer_name";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Rejected_by_QC","designer_name"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "user_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.user_id";
	
		
		
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejected_by_QC["designer_name"] = $fdata;
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Rejected_by_QC","group_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "group_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.group_id";
	
		
		
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
	$edata["LookupTable"] = "group";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "group_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "groupname_display";
	
		
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejected_by_QC["group_id"] = $fdata;
//	total_estimated_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_estimated_time";
	$fdata["GoodName"] = "total_estimated_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Rejected_by_QC","total_estimated_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_estimated_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(IFNULL(SUM(TIME_TO_SEC(IF(rejected_jobfile2.jobfile_type=2,(pdf.pdf_estimated_average/3.5), pdf.pdf_estimated_average))), 0))";
	
		
		
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

	

	
	$tdataRejected_by_QC["total_estimated_time"] = $fdata;
//	total_designer_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total_designer_time";
	$fdata["GoodName"] = "total_designer_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Rejected_by_QC","total_designer_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_designer_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(IFNULL(SUM(TIME_TO_SEC(IF(rejected_jobfile2.designer2_time<60,pdf.pdf_estimated_average,rejected_jobfile2.designer2_time))), 0))";
	
		
		
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

	

	
	$tdataRejected_by_QC["total_designer_time"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Rejected_by_QC","efficiency"); 
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
	$fdata["FullName"] = "IFNULL((SUM(TIME_TO_SEC(IF(rejected_jobfile2.jobfile_type=2,(pdf.pdf_estimated_average/3.5), pdf.pdf_estimated_average))) * 100) / SUM(TIME_TO_SEC(IF(rejected_jobfile2.designer2_time<10,IF(rejected_jobfile2.jobfile_type=2,(pdf.pdf_estimated_average/3.5), pdf.pdf_estimated_average),rejected_jobfile2.designer2_time))), 0)";
	
		
		
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

	

	
	$tdataRejected_by_QC["efficiency"] = $fdata;
//	rejected_files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "rejected_files";
	$fdata["GoodName"] = "rejected_files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Rejected_by_QC","rejected_files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rejected_files"; 
	
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

	

	
	$tdataRejected_by_QC["rejected_files"] = $fdata;
//	work_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "work_type";
	$fdata["GoodName"] = "work_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Rejected_by_QC","work_type"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "work_type"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "'10'";
	
		
		
				
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
	$edata["LookupTable"] = "jobstatus";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "jobstatus_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "job_status";
	
		
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
	
	
	
	

	

	
	$tdataRejected_by_QC["work_type"] = $fdata;
//	rejected_jobfile2.designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "rejected_jobfile2.designer2_id";
	$fdata["GoodName"] = "rejected_jobfile2_designer2_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejected_by_QC","rejected_jobfile2_designer2_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer2_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.designer2_id";
	
		
		
				
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
	
	
	
	

	

	
	$tdataRejected_by_QC["rejected_jobfile2.designer2_id"] = $fdata;

	
$tables_data["Rejected by QC"]=&$tdataRejected_by_QC;
$field_labels["Rejected_by_QC"] = &$fieldLabelsRejected_by_QC;
$fieldToolTips["Rejected by QC"] = &$fieldToolTipsRejected_by_QC;
$page_titles["Rejected_by_QC"] = &$pageTitlesRejected_by_QC;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Rejected by QC"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Rejected by QC"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Rejected_by_QC()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DATE(SUBSTRING((TIMESTAMPADD(MINUTE,105,`end2_date`)), 1, 10)) AS start_date_only,  `user`.user_id AS designer_name,  `user`.group_id,  SEC_TO_TIME(IFNULL(SUM(TIME_TO_SEC(IF(rejected_jobfile2.jobfile_type=2,(pdf.pdf_estimated_average/3.5), pdf.pdf_estimated_average))), 0)) AS total_estimated_time,  SEC_TO_TIME(IFNULL(SUM(TIME_TO_SEC(IF(rejected_jobfile2.designer2_time<60,pdf.pdf_estimated_average,rejected_jobfile2.designer2_time))), 0)) AS total_designer_time,  IFNULL((SUM(TIME_TO_SEC(IF(rejected_jobfile2.jobfile_type=2,(pdf.pdf_estimated_average/3.5), pdf.pdf_estimated_average))) * 100) / SUM(TIME_TO_SEC(IF(rejected_jobfile2.designer2_time<10,IF(rejected_jobfile2.jobfile_type=2,(pdf.pdf_estimated_average/3.5), pdf.pdf_estimated_average),rejected_jobfile2.designer2_time))), 0) AS efficiency,  COUNT(*) AS rejected_files,  '10' AS work_type,  rejected_jobfile2.designer2_id AS `rejected_jobfile2.designer2_id`";
$proto0["m_strFrom"] = "FROM rejected_jobfile2  LEFT OUTER JOIN `user` ON rejected_jobfile2.designer2_id = `user`.user_id  LEFT OUTER JOIN pdf ON rejected_jobfile2.project_id = pdf.pdf_id";
$proto0["m_strWhere"] = "rejected_jobfile2.designer2_id IS NOT NULL OR (TIMESTAMPADD(MINUTE,105,rejected_jobfile2.`end2_date`)) > '0000-00-00 00:00:00' OR (rejected_jobfile2.filename not like '%retouch%') OR TIME_TO_SEC(rejected_jobfile2.designer2_time) > '1'";
$proto0["m_strOrderBy"] = "ORDER BY DATE(SUBSTRING((TIMESTAMPADD(MINUTE,105,`end2_date`)), 1, 10)) DESC, rejected_jobfile2.designer2_id";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "rejected_jobfile2.designer2_id IS NOT NULL OR (TIMESTAMPADD(MINUTE,105,rejected_jobfile2.`end2_date`)) > '0000-00-00 00:00:00' OR (rejected_jobfile2.filename not like '%retouch%') OR TIME_TO_SEC(rejected_jobfile2.designer2_time) > '1'";
$proto1["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "rejected_jobfile2.designer2_id IS NOT NULL OR (TIMESTAMPADD(MINUTE,105,rejected_jobfile2.`end2_date`)) > '0000-00-00 00:00:00' OR (rejected_jobfile2.filename not like '%retouch%') OR TIME_TO_SEC(rejected_jobfile2.designer2_time) > '1'"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "rejected_jobfile2.designer2_id IS NOT NULL";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejected by QC"
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
$proto5["m_sql"] = "(TIMESTAMPADD(MINUTE,105,rejected_jobfile2.`end2_date`)) > '0000-00-00 00:00:00'";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "(TIMESTAMPADD(MINUTE,105,rejected_jobfile2.`end2_date`))"
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
$proto7["m_sql"] = "rejected_jobfile2.filename not like '%retouch%'";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejected by QC"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "not like '%retouch%'";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = true;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

			$proto1["m_contained"][]=$obj;
						$proto9=array();
$proto9["m_sql"] = "TIME_TO_SEC(rejected_jobfile2.designer2_time) > '1'";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$proto10=array();
$proto10["m_functiontype"] = "SQLF_CUSTOM";
$proto10["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "rejected_jobfile2.designer2_time"
));

$proto10["m_arguments"][]=$obj;
$proto10["m_strFunctionName"] = "TIME_TO_SEC";
$obj = new SQLFunctionCall($proto10);

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "> '1'";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUBSTRING((TIMESTAMPADD(MINUTE,105,`end2_date`)), 1, 10)"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "DATE(SUBSTRING((TIMESTAMPADD(MINUTE,105,`end2_date`)), 1, 10))";
$proto14["m_srcTableName"] = "Rejected by QC";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "start_date_only";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "user",
	"m_srcTableName" => "Rejected by QC"
));

$proto17["m_sql"] = "`user`.user_id";
$proto17["m_srcTableName"] = "Rejected by QC";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "designer_name";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "user",
	"m_srcTableName" => "Rejected by QC"
));

$proto19["m_sql"] = "`user`.group_id";
$proto19["m_srcTableName"] = "Rejected by QC";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_CUSTOM";
$proto22["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(SUM(TIME_TO_SEC(IF(rejected_jobfile2.jobfile_type=2,(pdf.pdf_estimated_average/3.5), pdf.pdf_estimated_average))), 0)"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "SEC_TO_TIME(IFNULL(SUM(TIME_TO_SEC(IF(rejected_jobfile2.jobfile_type=2,(pdf.pdf_estimated_average/3.5), pdf.pdf_estimated_average))), 0))";
$proto21["m_srcTableName"] = "Rejected by QC";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "total_estimated_time";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$proto25=array();
$proto25["m_functiontype"] = "SQLF_CUSTOM";
$proto25["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(SUM(TIME_TO_SEC(IF(rejected_jobfile2.designer2_time<60,pdf.pdf_estimated_average,rejected_jobfile2.designer2_time))), 0)"
));

$proto25["m_arguments"][]=$obj;
$proto25["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto25);

$proto24["m_sql"] = "SEC_TO_TIME(IFNULL(SUM(TIME_TO_SEC(IF(rejected_jobfile2.designer2_time<60,pdf.pdf_estimated_average,rejected_jobfile2.designer2_time))), 0))";
$proto24["m_srcTableName"] = "Rejected by QC";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "total_designer_time";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$proto28=array();
$proto28["m_functiontype"] = "SQLF_CUSTOM";
$proto28["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(SUM(TIME_TO_SEC(IF(rejected_jobfile2.jobfile_type=2,(pdf.pdf_estimated_average/3.5), pdf.pdf_estimated_average))) * 100) / SUM(TIME_TO_SEC(IF(rejected_jobfile2.designer2_time<10,IF(rejected_jobfile2.jobfile_type=2,(pdf.pdf_estimated_average/3.5), pdf.pdf_estimated_average),rejected_jobfile2.designer2_time)))"
));

$proto28["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto28["m_arguments"][]=$obj;
$proto28["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto28);

$proto27["m_sql"] = "IFNULL((SUM(TIME_TO_SEC(IF(rejected_jobfile2.jobfile_type=2,(pdf.pdf_estimated_average/3.5), pdf.pdf_estimated_average))) * 100) / SUM(TIME_TO_SEC(IF(rejected_jobfile2.designer2_time<10,IF(rejected_jobfile2.jobfile_type=2,(pdf.pdf_estimated_average/3.5), pdf.pdf_estimated_average),rejected_jobfile2.designer2_time))), 0)";
$proto27["m_srcTableName"] = "Rejected by QC";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$proto32=array();
$proto32["m_functiontype"] = "SQLF_COUNT";
$proto32["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto32["m_arguments"][]=$obj;
$proto32["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto32);

$proto31["m_sql"] = "COUNT(*)";
$proto31["m_srcTableName"] = "Rejected by QC";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "rejected_files";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'10'"
));

$proto34["m_sql"] = "'10'";
$proto34["m_srcTableName"] = "Rejected by QC";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "work_type";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejected by QC"
));

$proto36["m_sql"] = "rejected_jobfile2.designer2_id";
$proto36["m_srcTableName"] = "Rejected by QC";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "rejected_jobfile2.designer2_id";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "rejected_jobfile2";
$proto39["m_srcTableName"] = "Rejected by QC";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "jobfile_id";
$proto39["m_columns"][] = "previous_jobfile_id";
$proto39["m_columns"][] = "file_url";
$proto39["m_columns"][] = "client_id";
$proto39["m_columns"][] = "work_id";
$proto39["m_columns"][] = "job_id";
$proto39["m_columns"][] = "previous_job_id";
$proto39["m_columns"][] = "project_id";
$proto39["m_columns"][] = "folder_name";
$proto39["m_columns"][] = "filename";
$proto39["m_columns"][] = "jobfile_type";
$proto39["m_columns"][] = "jobfile_note";
$proto39["m_columns"][] = "jobfile_status_id";
$proto39["m_columns"][] = "downloader_id";
$proto39["m_columns"][] = "distributor_id";
$proto39["m_columns"][] = "designer_id";
$proto39["m_columns"][] = "qc_id";
$proto39["m_columns"][] = "uploader_id";
$proto39["m_columns"][] = "notifier_id";
$proto39["m_columns"][] = "rejector_id";
$proto39["m_columns"][] = "download_date";
$proto39["m_columns"][] = "distribute_date";
$proto39["m_columns"][] = "start_date";
$proto39["m_columns"][] = "end_date";
$proto39["m_columns"][] = "designer_time";
$proto39["m_columns"][] = "qcstart_date";
$proto39["m_columns"][] = "qcend_date";
$proto39["m_columns"][] = "qc_time";
$proto39["m_columns"][] = "upload_date";
$proto39["m_columns"][] = "notify_date";
$proto39["m_columns"][] = "reject_date";
$proto39["m_columns"][] = "reject_reason";
$proto39["m_columns"][] = "reject_reason_others";
$proto39["m_columns"][] = "screenshots";
$proto39["m_columns"][] = "designer2_id";
$proto39["m_columns"][] = "start2_date";
$proto39["m_columns"][] = "end2_date";
$proto39["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "rejected_jobfile2";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "Rejected by QC";
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
												$proto42=array();
$proto42["m_link"] = "SQLL_LEFTJOIN";
			$proto43=array();
$proto43["m_strName"] = "user";
$proto43["m_srcTableName"] = "Rejected by QC";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "user_id";
$proto43["m_columns"][] = "user_status";
$proto43["m_columns"][] = "username";
$proto43["m_columns"][] = "password";
$proto43["m_columns"][] = "department_id";
$proto43["m_columns"][] = "subdiv_id";
$proto43["m_columns"][] = "group_id";
$proto43["m_columns"][] = "designation";
$proto43["m_columns"][] = "employee_id";
$proto43["m_columns"][] = "fname";
$proto43["m_columns"][] = "lname";
$proto43["m_columns"][] = "nickname";
$proto43["m_columns"][] = "email";
$proto43["m_columns"][] = "phone";
$proto43["m_columns"][] = "mobile";
$proto43["m_columns"][] = "log";
$proto43["m_columns"][] = "images_assigned";
$proto43["m_columns"][] = "user_picture";
$proto43["m_columns"][] = "team";
$proto43["m_columns"][] = "ad_group_id";
$proto43["m_columns"][] = "lastaccess";
$proto43["m_columns"][] = "joining_date";
$proto43["m_columns"][] = "emergency_contact1";
$proto43["m_columns"][] = "emergency_contact2";
$proto43["m_columns"][] = "permanent_address";
$proto43["m_columns"][] = "current_address";
$proto43["m_columns"][] = "date_of_birth";
$proto43["m_columns"][] = "male_female";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "LEFT OUTER JOIN `user` ON rejected_jobfile2.designer2_id = `user`.user_id";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "Rejected by QC";
$proto44=array();
$proto44["m_sql"] = "rejected_jobfile2.designer2_id = `user`.user_id";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejected by QC"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= `user`.user_id";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
												$proto46=array();
$proto46["m_link"] = "SQLL_LEFTJOIN";
			$proto47=array();
$proto47["m_strName"] = "pdf";
$proto47["m_srcTableName"] = "Rejected by QC";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "pdf_id";
$proto47["m_columns"][] = "pdf_name";
$proto47["m_columns"][] = "client_id";
$proto47["m_columns"][] = "pdf_location";
$proto47["m_columns"][] = "last_update";
$proto47["m_columns"][] = "pdf_estimated_average";
$proto47["m_columns"][] = "pdf_estimated_average1";
$proto47["m_columns"][] = "pdf_estimated_average2";
$proto47["m_columns"][] = "pdf_actual_average";
$proto47["m_columns"][] = "price";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "LEFT OUTER JOIN pdf ON rejected_jobfile2.project_id = pdf.pdf_id";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "Rejected by QC";
$proto48=array();
$proto48["m_sql"] = "rejected_jobfile2.project_id = pdf.pdf_id";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejected by QC"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "= pdf.pdf_id";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto50=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "start_date_only"
));

$proto50["m_column"]=$obj;
$obj = new SQLGroupByItem($proto50);

$proto0["m_groupby"][]=$obj;
												$proto52=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "designer_name"
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
	"m_sql" => "SUBSTRING((TIMESTAMPADD(MINUTE,105,`end2_date`)), 1, 10)"
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
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejected by QC"
));

$proto57["m_column"]=$obj;
$proto57["m_bAsc"] = 1;
$proto57["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto57);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Rejected by QC";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Rejected_by_QC = createSqlQuery_Rejected_by_QC();


	
									
	
$tdataRejected_by_QC[".sqlquery"] = $queryData_Rejected_by_QC;

$tableEvents["Rejected by QC"] = new eventsBase;
$tdataRejected_by_QC[".hasEvents"] = false;

?>