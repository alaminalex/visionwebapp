<?php
require_once(getabspath("classes/cipherer.php"));




$tdata14704_Daily_Report_Full = array();	
	$tdata14704_Daily_Report_Full[".truncateText"] = true;
	$tdata14704_Daily_Report_Full[".NumberOfChars"] = 256; 
	$tdata14704_Daily_Report_Full[".ShortName"] = "14704_Daily_Report_Full";
	$tdata14704_Daily_Report_Full[".OwnerID"] = "";
	$tdata14704_Daily_Report_Full[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabels14704_Daily_Report_Full = array();
$fieldToolTips14704_Daily_Report_Full = array();
$pageTitles14704_Daily_Report_Full = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabels14704_Daily_Report_Full["English"] = array();
	$fieldToolTips14704_Daily_Report_Full["English"] = array();
	$pageTitles14704_Daily_Report_Full["English"] = array();
	$fieldLabels14704_Daily_Report_Full["English"]["job_id"] = "Job Id";
	$fieldToolTips14704_Daily_Report_Full["English"]["job_id"] = "";
	$fieldLabels14704_Daily_Report_Full["English"]["project_id"] = "Project Id";
	$fieldToolTips14704_Daily_Report_Full["English"]["project_id"] = "";
	$fieldLabels14704_Daily_Report_Full["English"]["filename"] = "Filename";
	$fieldToolTips14704_Daily_Report_Full["English"]["filename"] = "";
	$fieldLabels14704_Daily_Report_Full["English"]["designer2_id"] = "Designer2 Id";
	$fieldToolTips14704_Daily_Report_Full["English"]["designer2_id"] = "";
	$fieldLabels14704_Daily_Report_Full["English"]["end2_date"] = "End2 Date";
	$fieldToolTips14704_Daily_Report_Full["English"]["end2_date"] = "";
	$fieldLabels14704_Daily_Report_Full["English"]["team"] = "Team";
	$fieldToolTips14704_Daily_Report_Full["English"]["team"] = "";
	$fieldLabels14704_Daily_Report_Full["English"]["pdf_estimated_average"] = "Pdf Estimated Average";
	$fieldToolTips14704_Daily_Report_Full["English"]["pdf_estimated_average"] = "";
	$fieldLabels14704_Daily_Report_Full["English"]["taken_time"] = "Taken Time";
	$fieldToolTips14704_Daily_Report_Full["English"]["taken_time"] = "";
	$fieldLabels14704_Daily_Report_Full["English"]["efficiency"] = "Efficiency";
	$fieldToolTips14704_Daily_Report_Full["English"]["efficiency"] = "";
	if (count($fieldToolTips14704_Daily_Report_Full["English"]))
		$tdata14704_Daily_Report_Full[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels14704_Daily_Report_Full[""] = array();
	$fieldToolTips14704_Daily_Report_Full[""] = array();
	$pageTitles14704_Daily_Report_Full[""] = array();
	if (count($fieldToolTips14704_Daily_Report_Full[""]))
		$tdata14704_Daily_Report_Full[".isUseToolTips"] = true;
}
	
	
	$tdata14704_Daily_Report_Full[".NCSearch"] = true;



$tdata14704_Daily_Report_Full[".shortTableName"] = "14704_Daily_Report_Full";
$tdata14704_Daily_Report_Full[".nSecOptions"] = 0;
$tdata14704_Daily_Report_Full[".recsPerRowList"] = 1;
$tdata14704_Daily_Report_Full[".recsPerRowPrint"] = 1;
$tdata14704_Daily_Report_Full[".mainTableOwnerID"] = "";
$tdata14704_Daily_Report_Full[".moveNext"] = 1;
$tdata14704_Daily_Report_Full[".entityType"] = 2;

$tdata14704_Daily_Report_Full[".strOriginalTableName"] = "jobfile";




$tdata14704_Daily_Report_Full[".showAddInPopup"] = false;

$tdata14704_Daily_Report_Full[".showEditInPopup"] = false;

$tdata14704_Daily_Report_Full[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata14704_Daily_Report_Full[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata14704_Daily_Report_Full[".fieldsForRegister"] = array();

$tdata14704_Daily_Report_Full[".listAjax"] = false;

	$tdata14704_Daily_Report_Full[".audit"] = false;

	$tdata14704_Daily_Report_Full[".locking"] = false;


$tdata14704_Daily_Report_Full[".add"] = true;
$tdata14704_Daily_Report_Full[".afterAddAction"] = 0;
$tdata14704_Daily_Report_Full[".closePopupAfterAdd"] = 1;
$tdata14704_Daily_Report_Full[".afterAddActionDetTable"] = "";

$tdata14704_Daily_Report_Full[".list"] = true;

$tdata14704_Daily_Report_Full[".inlineAdd"] = true;


$tdata14704_Daily_Report_Full[".exportTo"] = true;

$tdata14704_Daily_Report_Full[".printFriendly"] = true;


$tdata14704_Daily_Report_Full[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdata14704_Daily_Report_Full[".searchSaving"] = false;
//

$tdata14704_Daily_Report_Full[".showSearchPanel"] = true;
		$tdata14704_Daily_Report_Full[".flexibleSearch"] = true;		

if (isMobile())
	$tdata14704_Daily_Report_Full[".isUseAjaxSuggest"] = false;
else 
	$tdata14704_Daily_Report_Full[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdata14704_Daily_Report_Full[".addPageEvents"] = false;

// use timepicker for search panel
$tdata14704_Daily_Report_Full[".isUseTimeForSearch"] = false;





$tdata14704_Daily_Report_Full[".allSearchFields"] = array();
$tdata14704_Daily_Report_Full[".filterFields"] = array();
$tdata14704_Daily_Report_Full[".requiredSearchFields"] = array();

$tdata14704_Daily_Report_Full[".allSearchFields"][] = "job_id";
	$tdata14704_Daily_Report_Full[".allSearchFields"][] = "filename";
	$tdata14704_Daily_Report_Full[".allSearchFields"][] = "end2_date";
	$tdata14704_Daily_Report_Full[".allSearchFields"][] = "designer2_id";
	$tdata14704_Daily_Report_Full[".allSearchFields"][] = "project_id";
	$tdata14704_Daily_Report_Full[".allSearchFields"][] = "team";
	$tdata14704_Daily_Report_Full[".allSearchFields"][] = "pdf_estimated_average";
	$tdata14704_Daily_Report_Full[".allSearchFields"][] = "taken_time";
	$tdata14704_Daily_Report_Full[".allSearchFields"][] = "efficiency";
	

$tdata14704_Daily_Report_Full[".googleLikeFields"] = array();
$tdata14704_Daily_Report_Full[".googleLikeFields"][] = "job_id";
$tdata14704_Daily_Report_Full[".googleLikeFields"][] = "filename";
$tdata14704_Daily_Report_Full[".googleLikeFields"][] = "end2_date";
$tdata14704_Daily_Report_Full[".googleLikeFields"][] = "designer2_id";
$tdata14704_Daily_Report_Full[".googleLikeFields"][] = "project_id";
$tdata14704_Daily_Report_Full[".googleLikeFields"][] = "team";
$tdata14704_Daily_Report_Full[".googleLikeFields"][] = "pdf_estimated_average";
$tdata14704_Daily_Report_Full[".googleLikeFields"][] = "taken_time";
$tdata14704_Daily_Report_Full[".googleLikeFields"][] = "efficiency";


$tdata14704_Daily_Report_Full[".advSearchFields"] = array();
$tdata14704_Daily_Report_Full[".advSearchFields"][] = "job_id";
$tdata14704_Daily_Report_Full[".advSearchFields"][] = "filename";
$tdata14704_Daily_Report_Full[".advSearchFields"][] = "end2_date";
$tdata14704_Daily_Report_Full[".advSearchFields"][] = "designer2_id";
$tdata14704_Daily_Report_Full[".advSearchFields"][] = "project_id";
$tdata14704_Daily_Report_Full[".advSearchFields"][] = "team";
$tdata14704_Daily_Report_Full[".advSearchFields"][] = "pdf_estimated_average";
$tdata14704_Daily_Report_Full[".advSearchFields"][] = "taken_time";
$tdata14704_Daily_Report_Full[".advSearchFields"][] = "efficiency";

$tdata14704_Daily_Report_Full[".tableType"] = "report";

$tdata14704_Daily_Report_Full[".printerPageOrientation"] = 0;
$tdata14704_Daily_Report_Full[".nPrinterPageScale"] = 100;

$tdata14704_Daily_Report_Full[".nPrinterSplitRecords"] = 40;

$tdata14704_Daily_Report_Full[".nPrinterPDFSplitRecords"] = 40;



$tdata14704_Daily_Report_Full[".geocodingEnabled"] = false;

//report settings

$tdata14704_Daily_Report_Full[".reportPrintPartitionType"] = 0;	
$tdata14704_Daily_Report_Full[".reportPrintGroupsPerPage"] = 3;	
	$tdata14704_Daily_Report_Full[".lowGroup"] = 4;



$tdata14704_Daily_Report_Full[".reportGroupFields"] = true;
$tdata14704_Daily_Report_Full[".pageSize"] = 1;
$tdata14704_Daily_Report_Full[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "end2_date";
	$rgroupField['groupInterval'] = 5;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "team";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "designer2_id";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 3;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "job_id";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 4;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdata14704_Daily_Report_Full[".reportGroupFieldsData"] = $reportGroupFields;


$tdata14704_Daily_Report_Full[".isExistTotalFields"] = true;




$tdata14704_Daily_Report_Full[".repShowDet"] = true;

$tdata14704_Daily_Report_Full[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY jobfile.end2_date DESC, `user`.team, jobfile.designer2_id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata14704_Daily_Report_Full[".strOrderBy"] = $tstrOrderBy;

$tdata14704_Daily_Report_Full[".orderindexes"] = array();
$tdata14704_Daily_Report_Full[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "jobfile.end2_date");
$tdata14704_Daily_Report_Full[".orderindexes"][] = array(6, (1 ? "ASC" : "DESC"), "`user`.team");
$tdata14704_Daily_Report_Full[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "jobfile.designer2_id");

$tdata14704_Daily_Report_Full[".sqlHead"] = "SELECT jobfile.job_id,  jobfile.filename,  jobfile.end2_date,  jobfile.designer2_id,  jobfile.project_id,  `user`.team,  pdf.pdf_estimated_average,  jobfile.designer2_time AS taken_time,  (TIME_TO_SEC(pdf.pdf_estimated_average)/IF(TIME_TO_SEC(jobfile.designer2_time) > '60', TIME_TO_SEC(jobfile.designer2_time), TIME_TO_SEC(pdf.pdf_estimated_average)))*100 AS efficiency";
$tdata14704_Daily_Report_Full[".sqlFrom"] = "FROM jobfile  INNER JOIN `user` ON jobfile.designer2_id = `user`.user_id  INNER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$tdata14704_Daily_Report_Full[".sqlWhereExpr"] = "(jobfile.project_id = 5001) AND ((jobfile.filename not like '%retouch%') AND (jobfile.filename not like '%detail_2%'))";
$tdata14704_Daily_Report_Full[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata14704_Daily_Report_Full[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata14704_Daily_Report_Full[".arrGroupsPerPage"] = $arrGPP;

$tdata14704_Daily_Report_Full[".highlightSearchResults"] = true;

$tableKeys14704_Daily_Report_Full = array();
$tdata14704_Daily_Report_Full[".Keys"] = $tableKeys14704_Daily_Report_Full;

$tdata14704_Daily_Report_Full[".listFields"] = array();
$tdata14704_Daily_Report_Full[".listFields"][] = "job_id";
$tdata14704_Daily_Report_Full[".listFields"][] = "filename";
$tdata14704_Daily_Report_Full[".listFields"][] = "end2_date";
$tdata14704_Daily_Report_Full[".listFields"][] = "designer2_id";
$tdata14704_Daily_Report_Full[".listFields"][] = "project_id";
$tdata14704_Daily_Report_Full[".listFields"][] = "team";
$tdata14704_Daily_Report_Full[".listFields"][] = "pdf_estimated_average";
$tdata14704_Daily_Report_Full[".listFields"][] = "taken_time";
$tdata14704_Daily_Report_Full[".listFields"][] = "efficiency";

$tdata14704_Daily_Report_Full[".hideMobileList"] = array();


$tdata14704_Daily_Report_Full[".viewFields"] = array();
$tdata14704_Daily_Report_Full[".viewFields"][] = "job_id";
$tdata14704_Daily_Report_Full[".viewFields"][] = "filename";
$tdata14704_Daily_Report_Full[".viewFields"][] = "end2_date";
$tdata14704_Daily_Report_Full[".viewFields"][] = "designer2_id";
$tdata14704_Daily_Report_Full[".viewFields"][] = "project_id";
$tdata14704_Daily_Report_Full[".viewFields"][] = "team";
$tdata14704_Daily_Report_Full[".viewFields"][] = "pdf_estimated_average";
$tdata14704_Daily_Report_Full[".viewFields"][] = "taken_time";
$tdata14704_Daily_Report_Full[".viewFields"][] = "efficiency";

$tdata14704_Daily_Report_Full[".addFields"] = array();
$tdata14704_Daily_Report_Full[".addFields"][] = "job_id";
$tdata14704_Daily_Report_Full[".addFields"][] = "filename";
$tdata14704_Daily_Report_Full[".addFields"][] = "end2_date";
$tdata14704_Daily_Report_Full[".addFields"][] = "designer2_id";
$tdata14704_Daily_Report_Full[".addFields"][] = "project_id";

$tdata14704_Daily_Report_Full[".masterListFields"] = array();
$tdata14704_Daily_Report_Full[".masterListFields"][] = "job_id";
$tdata14704_Daily_Report_Full[".masterListFields"][] = "filename";
$tdata14704_Daily_Report_Full[".masterListFields"][] = "end2_date";
$tdata14704_Daily_Report_Full[".masterListFields"][] = "designer2_id";
$tdata14704_Daily_Report_Full[".masterListFields"][] = "project_id";
$tdata14704_Daily_Report_Full[".masterListFields"][] = "team";
$tdata14704_Daily_Report_Full[".masterListFields"][] = "pdf_estimated_average";
$tdata14704_Daily_Report_Full[".masterListFields"][] = "taken_time";
$tdata14704_Daily_Report_Full[".masterListFields"][] = "efficiency";

$tdata14704_Daily_Report_Full[".inlineAddFields"] = array();
$tdata14704_Daily_Report_Full[".inlineAddFields"][] = "job_id";
$tdata14704_Daily_Report_Full[".inlineAddFields"][] = "filename";
$tdata14704_Daily_Report_Full[".inlineAddFields"][] = "end2_date";
$tdata14704_Daily_Report_Full[".inlineAddFields"][] = "designer2_id";
$tdata14704_Daily_Report_Full[".inlineAddFields"][] = "project_id";

$tdata14704_Daily_Report_Full[".editFields"] = array();
$tdata14704_Daily_Report_Full[".editFields"][] = "job_id";
$tdata14704_Daily_Report_Full[".editFields"][] = "filename";
$tdata14704_Daily_Report_Full[".editFields"][] = "end2_date";
$tdata14704_Daily_Report_Full[".editFields"][] = "designer2_id";
$tdata14704_Daily_Report_Full[".editFields"][] = "project_id";

$tdata14704_Daily_Report_Full[".inlineEditFields"] = array();
$tdata14704_Daily_Report_Full[".inlineEditFields"][] = "job_id";
$tdata14704_Daily_Report_Full[".inlineEditFields"][] = "filename";
$tdata14704_Daily_Report_Full[".inlineEditFields"][] = "end2_date";
$tdata14704_Daily_Report_Full[".inlineEditFields"][] = "designer2_id";
$tdata14704_Daily_Report_Full[".inlineEditFields"][] = "project_id";

$tdata14704_Daily_Report_Full[".exportFields"] = array();
$tdata14704_Daily_Report_Full[".exportFields"][] = "job_id";
$tdata14704_Daily_Report_Full[".exportFields"][] = "filename";
$tdata14704_Daily_Report_Full[".exportFields"][] = "end2_date";
$tdata14704_Daily_Report_Full[".exportFields"][] = "designer2_id";
$tdata14704_Daily_Report_Full[".exportFields"][] = "project_id";
$tdata14704_Daily_Report_Full[".exportFields"][] = "team";
$tdata14704_Daily_Report_Full[".exportFields"][] = "pdf_estimated_average";
$tdata14704_Daily_Report_Full[".exportFields"][] = "taken_time";
$tdata14704_Daily_Report_Full[".exportFields"][] = "efficiency";

$tdata14704_Daily_Report_Full[".importFields"] = array();
$tdata14704_Daily_Report_Full[".importFields"][] = "job_id";
$tdata14704_Daily_Report_Full[".importFields"][] = "filename";
$tdata14704_Daily_Report_Full[".importFields"][] = "end2_date";
$tdata14704_Daily_Report_Full[".importFields"][] = "designer2_id";
$tdata14704_Daily_Report_Full[".importFields"][] = "project_id";
$tdata14704_Daily_Report_Full[".importFields"][] = "team";
$tdata14704_Daily_Report_Full[".importFields"][] = "pdf_estimated_average";
$tdata14704_Daily_Report_Full[".importFields"][] = "taken_time";
$tdata14704_Daily_Report_Full[".importFields"][] = "efficiency";

$tdata14704_Daily_Report_Full[".printFields"] = array();
$tdata14704_Daily_Report_Full[".printFields"][] = "job_id";
$tdata14704_Daily_Report_Full[".printFields"][] = "filename";
$tdata14704_Daily_Report_Full[".printFields"][] = "end2_date";
$tdata14704_Daily_Report_Full[".printFields"][] = "designer2_id";
$tdata14704_Daily_Report_Full[".printFields"][] = "project_id";
$tdata14704_Daily_Report_Full[".printFields"][] = "team";
$tdata14704_Daily_Report_Full[".printFields"][] = "pdf_estimated_average";
$tdata14704_Daily_Report_Full[".printFields"][] = "taken_time";
$tdata14704_Daily_Report_Full[".printFields"][] = "efficiency";

//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("14704_Daily_Report_Full","job_id"); 
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
	
		$fdata["strField"] = "job_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.job_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
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
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdata14704_Daily_Report_Full["job_id"] = $fdata;
//	filename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "filename";
	$fdata["GoodName"] = "filename";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("14704_Daily_Report_Full","filename"); 
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
	
		$fdata["strField"] = "filename"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.filename";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["rprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=256";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdata14704_Daily_Report_Full["filename"] = $fdata;
//	end2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "end2_date";
	$fdata["GoodName"] = "end2_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("14704_Daily_Report_Full","end2_date"); 
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

	

	
	$tdata14704_Daily_Report_Full["end2_date"] = $fdata;
//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("14704_Daily_Report_Full","designer2_id"); 
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
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
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
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdata14704_Daily_Report_Full["designer2_id"] = $fdata;
//	project_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "project_id";
	$fdata["GoodName"] = "project_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("14704_Daily_Report_Full","project_id"); 
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
	
		$fdata["strField"] = "project_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.project_id";
	
		
		
				
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
	$edata["LookupTable"] = "pdf";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "pdf_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "pdf_name";
	
		
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

	

	
	$tdata14704_Daily_Report_Full["project_id"] = $fdata;
//	team
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "team";
	$fdata["GoodName"] = "team";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("14704_Daily_Report_Full","team"); 
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

	

	
	$tdata14704_Daily_Report_Full["team"] = $fdata;
//	pdf_estimated_average
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pdf_estimated_average";
	$fdata["GoodName"] = "pdf_estimated_average";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("14704_Daily_Report_Full","pdf_estimated_average"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
			$fdata["isTotalAvg"] = true;	
			// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_estimated_average"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf.pdf_estimated_average";
	
		
		
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

	

	
	$tdata14704_Daily_Report_Full["pdf_estimated_average"] = $fdata;
//	taken_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "taken_time";
	$fdata["GoodName"] = "taken_time";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("14704_Daily_Report_Full","taken_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
			$fdata["isTotalAvg"] = true;	
			// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer2_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.designer2_time";
	
		
		
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

	

	
	$tdata14704_Daily_Report_Full["taken_time"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("14704_Daily_Report_Full","efficiency"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
			$fdata["isTotalAvg"] = true;	
			// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "efficiency"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(TIME_TO_SEC(pdf.pdf_estimated_average)/IF(TIME_TO_SEC(jobfile.designer2_time) > '60', TIME_TO_SEC(jobfile.designer2_time), TIME_TO_SEC(pdf.pdf_estimated_average)))*100";
	
		
		
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

	

	
	$tdata14704_Daily_Report_Full["efficiency"] = $fdata;

	
$tables_data["14704 Daily Report Full"]=&$tdata14704_Daily_Report_Full;
$field_labels["14704_Daily_Report_Full"] = &$fieldLabels14704_Daily_Report_Full;
$fieldToolTips["14704 Daily Report Full"] = &$fieldToolTips14704_Daily_Report_Full;
$page_titles["14704_Daily_Report_Full"] = &$pageTitles14704_Daily_Report_Full;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["14704 Daily Report Full"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["14704 Daily Report Full"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_14704_Daily_Report_Full()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile.job_id,  jobfile.filename,  jobfile.end2_date,  jobfile.designer2_id,  jobfile.project_id,  `user`.team,  pdf.pdf_estimated_average,  jobfile.designer2_time AS taken_time,  (TIME_TO_SEC(pdf.pdf_estimated_average)/IF(TIME_TO_SEC(jobfile.designer2_time) > '60', TIME_TO_SEC(jobfile.designer2_time), TIME_TO_SEC(pdf.pdf_estimated_average)))*100 AS efficiency";
$proto0["m_strFrom"] = "FROM jobfile  INNER JOIN `user` ON jobfile.designer2_id = `user`.user_id  INNER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto0["m_strWhere"] = "(jobfile.project_id = 5001) AND ((jobfile.filename not like '%retouch%') AND (jobfile.filename not like '%detail_2%'))";
$proto0["m_strOrderBy"] = "ORDER BY jobfile.end2_date DESC, `user`.team, jobfile.designer2_id DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(jobfile.project_id = 5001) AND ((jobfile.filename not like '%retouch%') AND (jobfile.filename not like '%detail_2%'))";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.project_id = 5001) AND ((jobfile.filename not like '%retouch%') AND (jobfile.filename not like '%detail_2%'))"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.project_id = 5001";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report Full"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "= 5001";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "(jobfile.filename not like '%retouch%') AND (jobfile.filename not like '%detail_2%')";
$proto5["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.filename not like '%retouch%') AND (jobfile.filename not like '%detail_2%')"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
						$proto7=array();
$proto7["m_sql"] = "jobfile.filename not like '%retouch%'";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report Full"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "not like '%retouch%'";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = true;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

			$proto5["m_contained"][]=$obj;
						$proto9=array();
$proto9["m_sql"] = "jobfile.filename not like '%detail_2%'";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report Full"
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "not like '%detail_2%'";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = true;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

			$proto5["m_contained"][]=$obj;
$proto5["m_strCase"] = "";
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
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report Full"
));

$proto13["m_sql"] = "jobfile.job_id";
$proto13["m_srcTableName"] = "14704 Daily Report Full";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report Full"
));

$proto15["m_sql"] = "jobfile.filename";
$proto15["m_srcTableName"] = "14704 Daily Report Full";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report Full"
));

$proto17["m_sql"] = "jobfile.end2_date";
$proto17["m_srcTableName"] = "14704 Daily Report Full";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report Full"
));

$proto19["m_sql"] = "jobfile.designer2_id";
$proto19["m_srcTableName"] = "14704 Daily Report Full";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report Full"
));

$proto21["m_sql"] = "jobfile.project_id";
$proto21["m_srcTableName"] = "14704 Daily Report Full";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "14704 Daily Report Full"
));

$proto23["m_sql"] = "`user`.team";
$proto23["m_srcTableName"] = "14704 Daily Report Full";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average",
	"m_strTable" => "pdf",
	"m_srcTableName" => "14704 Daily Report Full"
));

$proto25["m_sql"] = "pdf.pdf_estimated_average";
$proto25["m_srcTableName"] = "14704 Daily Report Full";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_time",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report Full"
));

$proto27["m_sql"] = "jobfile.designer2_time";
$proto27["m_srcTableName"] = "14704 Daily Report Full";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "taken_time";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(TIME_TO_SEC(pdf.pdf_estimated_average)/IF(TIME_TO_SEC(jobfile.designer2_time) > '60', TIME_TO_SEC(jobfile.designer2_time), TIME_TO_SEC(pdf.pdf_estimated_average)))*100"
));

$proto29["m_sql"] = "(TIME_TO_SEC(pdf.pdf_estimated_average)/IF(TIME_TO_SEC(jobfile.designer2_time) > '60', TIME_TO_SEC(jobfile.designer2_time), TIME_TO_SEC(pdf.pdf_estimated_average)))*100";
$proto29["m_srcTableName"] = "14704 Daily Report Full";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "jobfile";
$proto32["m_srcTableName"] = "14704 Daily Report Full";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "jobfile_id";
$proto32["m_columns"][] = "file_url";
$proto32["m_columns"][] = "client_id";
$proto32["m_columns"][] = "work_id";
$proto32["m_columns"][] = "job_id";
$proto32["m_columns"][] = "project_id";
$proto32["m_columns"][] = "folder_name";
$proto32["m_columns"][] = "filename";
$proto32["m_columns"][] = "jobfile_type";
$proto32["m_columns"][] = "jobfile_note";
$proto32["m_columns"][] = "jobfile_status_id";
$proto32["m_columns"][] = "downloader_id";
$proto32["m_columns"][] = "distributor_id";
$proto32["m_columns"][] = "designer_id";
$proto32["m_columns"][] = "qc_id";
$proto32["m_columns"][] = "uploader_id";
$proto32["m_columns"][] = "notifier_id";
$proto32["m_columns"][] = "rejector_id";
$proto32["m_columns"][] = "download_date";
$proto32["m_columns"][] = "distribute_date";
$proto32["m_columns"][] = "start_date";
$proto32["m_columns"][] = "end_date";
$proto32["m_columns"][] = "designer_time";
$proto32["m_columns"][] = "qcstart_date";
$proto32["m_columns"][] = "qcend_date";
$proto32["m_columns"][] = "qc_time";
$proto32["m_columns"][] = "upload_date";
$proto32["m_columns"][] = "notify_date";
$proto32["m_columns"][] = "reject_date";
$proto32["m_columns"][] = "reject_reason";
$proto32["m_columns"][] = "designer2_id";
$proto32["m_columns"][] = "start2_date";
$proto32["m_columns"][] = "end2_date";
$proto32["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "jobfile";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "14704 Daily Report Full";
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
												$proto35=array();
$proto35["m_link"] = "SQLL_INNERJOIN";
			$proto36=array();
$proto36["m_strName"] = "user";
$proto36["m_srcTableName"] = "14704 Daily Report Full";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "user_id";
$proto36["m_columns"][] = "user_status";
$proto36["m_columns"][] = "username";
$proto36["m_columns"][] = "password";
$proto36["m_columns"][] = "department_id";
$proto36["m_columns"][] = "subdiv_id";
$proto36["m_columns"][] = "group_id";
$proto36["m_columns"][] = "designation";
$proto36["m_columns"][] = "employee_id";
$proto36["m_columns"][] = "fname";
$proto36["m_columns"][] = "lname";
$proto36["m_columns"][] = "nickname";
$proto36["m_columns"][] = "email";
$proto36["m_columns"][] = "phone";
$proto36["m_columns"][] = "mobile";
$proto36["m_columns"][] = "log";
$proto36["m_columns"][] = "images_assigned";
$proto36["m_columns"][] = "user_picture";
$proto36["m_columns"][] = "team";
$proto36["m_columns"][] = "ad_group_id";
$proto36["m_columns"][] = "lastaccess";
$proto36["m_columns"][] = "joining_date";
$proto36["m_columns"][] = "emergency_contact1";
$proto36["m_columns"][] = "emergency_contact2";
$proto36["m_columns"][] = "permanent_address";
$proto36["m_columns"][] = "current_address";
$proto36["m_columns"][] = "date_of_birth";
$proto36["m_columns"][] = "male_female";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "INNER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "14704 Daily Report Full";
$proto37=array();
$proto37["m_sql"] = "jobfile.designer2_id = `user`.user_id";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report Full"
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "= `user`.user_id";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
												$proto39=array();
$proto39["m_link"] = "SQLL_INNERJOIN";
			$proto40=array();
$proto40["m_strName"] = "pdf";
$proto40["m_srcTableName"] = "14704 Daily Report Full";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "pdf_id";
$proto40["m_columns"][] = "pdf_name";
$proto40["m_columns"][] = "client_id";
$proto40["m_columns"][] = "pdf_location";
$proto40["m_columns"][] = "last_update";
$proto40["m_columns"][] = "pdf_estimated_average";
$proto40["m_columns"][] = "pdf_estimated_average1";
$proto40["m_columns"][] = "pdf_estimated_average2";
$proto40["m_columns"][] = "pdf_actual_average";
$proto40["m_columns"][] = "price";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "INNER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "14704 Daily Report Full";
$proto41=array();
$proto41["m_sql"] = "jobfile.project_id = pdf.pdf_id";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report Full"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "= pdf.pdf_id";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report Full"
));

$proto43["m_column"]=$obj;
$proto43["m_bAsc"] = 0;
$proto43["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto43);

$proto0["m_orderby"][]=$obj;					
												$proto45=array();
						$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "14704 Daily Report Full"
));

$proto45["m_column"]=$obj;
$proto45["m_bAsc"] = 1;
$proto45["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto45);

$proto0["m_orderby"][]=$obj;					
												$proto47=array();
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Daily Report Full"
));

$proto47["m_column"]=$obj;
$proto47["m_bAsc"] = 0;
$proto47["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto47);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="14704 Daily Report Full";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_14704_Daily_Report_Full = createSqlQuery_14704_Daily_Report_Full();


	
									
	
$tdata14704_Daily_Report_Full[".sqlquery"] = $queryData_14704_Daily_Report_Full;

include_once(getabspath("include/14704_Daily_Report_Full_events.php"));
$tableEvents["14704 Daily Report Full"] = new eventclass_14704_Daily_Report_Full;
$tdata14704_Daily_Report_Full[".hasEvents"] = true;

?>