<?php
require_once(getabspath("classes/cipherer.php"));




$tdataFile_Distribution_Rejected = array();	
	$tdataFile_Distribution_Rejected[".truncateText"] = true;
	$tdataFile_Distribution_Rejected[".NumberOfChars"] = 40; 
	$tdataFile_Distribution_Rejected[".ShortName"] = "File_Distribution_Rejected";
	$tdataFile_Distribution_Rejected[".OwnerID"] = "";
	$tdataFile_Distribution_Rejected[".OriginalTable"] = "rejected_jobfile2";

//	field labels
$fieldLabelsFile_Distribution_Rejected = array();
$fieldToolTipsFile_Distribution_Rejected = array();
$pageTitlesFile_Distribution_Rejected = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsFile_Distribution_Rejected["English"] = array();
	$fieldToolTipsFile_Distribution_Rejected["English"] = array();
	$pageTitlesFile_Distribution_Rejected["English"] = array();
	$fieldLabelsFile_Distribution_Rejected["English"]["jobfile_id"] = "Jobfile Id";
	$fieldToolTipsFile_Distribution_Rejected["English"]["jobfile_id"] = "";
	$fieldLabelsFile_Distribution_Rejected["English"]["file_url"] = "File Url";
	$fieldToolTipsFile_Distribution_Rejected["English"]["file_url"] = "";
	$fieldLabelsFile_Distribution_Rejected["English"]["work_id"] = "Work Id";
	$fieldToolTipsFile_Distribution_Rejected["English"]["work_id"] = "";
	$fieldLabelsFile_Distribution_Rejected["English"]["job_id"] = "Job Id";
	$fieldToolTipsFile_Distribution_Rejected["English"]["job_id"] = "";
	$fieldLabelsFile_Distribution_Rejected["English"]["filename"] = "Filename";
	$fieldToolTipsFile_Distribution_Rejected["English"]["filename"] = "";
	$fieldLabelsFile_Distribution_Rejected["English"]["designer_id"] = "Designer Id";
	$fieldToolTipsFile_Distribution_Rejected["English"]["designer_id"] = "";
	$fieldLabelsFile_Distribution_Rejected["English"]["qc_id"] = "Qc Id";
	$fieldToolTipsFile_Distribution_Rejected["English"]["qc_id"] = "";
	$fieldLabelsFile_Distribution_Rejected["English"]["jobfile_status_id"] = "Jobfile Status Id";
	$fieldToolTipsFile_Distribution_Rejected["English"]["jobfile_status_id"] = "";
	$fieldLabelsFile_Distribution_Rejected["English"]["designer2_id"] = "Designer2 Id";
	$fieldToolTipsFile_Distribution_Rejected["English"]["designer2_id"] = "";
	$fieldLabelsFile_Distribution_Rejected["English"]["end_date"] = "End Date";
	$fieldToolTipsFile_Distribution_Rejected["English"]["end_date"] = "";
	$fieldLabelsFile_Distribution_Rejected["English"]["end2_date"] = "End2 Date";
	$fieldToolTipsFile_Distribution_Rejected["English"]["end2_date"] = "";
	$fieldLabelsFile_Distribution_Rejected["English"]["qcend_date"] = "Qcend Date";
	$fieldToolTipsFile_Distribution_Rejected["English"]["qcend_date"] = "";
	if (count($fieldToolTipsFile_Distribution_Rejected["English"]))
		$tdataFile_Distribution_Rejected[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsFile_Distribution_Rejected[""] = array();
	$fieldToolTipsFile_Distribution_Rejected[""] = array();
	$pageTitlesFile_Distribution_Rejected[""] = array();
	if (count($fieldToolTipsFile_Distribution_Rejected[""]))
		$tdataFile_Distribution_Rejected[".isUseToolTips"] = true;
}
	
	
	$tdataFile_Distribution_Rejected[".NCSearch"] = true;



$tdataFile_Distribution_Rejected[".shortTableName"] = "File_Distribution_Rejected";
$tdataFile_Distribution_Rejected[".nSecOptions"] = 0;
$tdataFile_Distribution_Rejected[".recsPerRowList"] = 6;
$tdataFile_Distribution_Rejected[".recsPerRowPrint"] = 1;
$tdataFile_Distribution_Rejected[".mainTableOwnerID"] = "";
$tdataFile_Distribution_Rejected[".moveNext"] = 1;
$tdataFile_Distribution_Rejected[".entityType"] = 1;

$tdataFile_Distribution_Rejected[".strOriginalTableName"] = "rejected_jobfile2";




$tdataFile_Distribution_Rejected[".showAddInPopup"] = false;

$tdataFile_Distribution_Rejected[".showEditInPopup"] = false;

$tdataFile_Distribution_Rejected[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataFile_Distribution_Rejected[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataFile_Distribution_Rejected[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataFile_Distribution_Rejected[".listAjax"] = true;
else 
	$tdataFile_Distribution_Rejected[".listAjax"] = false;

	$tdataFile_Distribution_Rejected[".audit"] = false;

	$tdataFile_Distribution_Rejected[".locking"] = false;

$tdataFile_Distribution_Rejected[".edit"] = true;
$tdataFile_Distribution_Rejected[".afterEditAction"] = 1;
$tdataFile_Distribution_Rejected[".closePopupAfterEdit"] = 1;
$tdataFile_Distribution_Rejected[".afterEditActionDetTable"] = "";

$tdataFile_Distribution_Rejected[".add"] = true;
$tdataFile_Distribution_Rejected[".afterAddAction"] = 0;
$tdataFile_Distribution_Rejected[".closePopupAfterAdd"] = 1;
$tdataFile_Distribution_Rejected[".afterAddActionDetTable"] = "";

$tdataFile_Distribution_Rejected[".list"] = true;

$tdataFile_Distribution_Rejected[".view"] = true;

$tdataFile_Distribution_Rejected[".import"] = true;

$tdataFile_Distribution_Rejected[".exportTo"] = true;

$tdataFile_Distribution_Rejected[".printFriendly"] = true;


$tdataFile_Distribution_Rejected[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataFile_Distribution_Rejected[".searchSaving"] = false;
//

$tdataFile_Distribution_Rejected[".showSearchPanel"] = true;
		$tdataFile_Distribution_Rejected[".flexibleSearch"] = true;		

if (isMobile())
	$tdataFile_Distribution_Rejected[".isUseAjaxSuggest"] = false;
else 
	$tdataFile_Distribution_Rejected[".isUseAjaxSuggest"] = true;

$tdataFile_Distribution_Rejected[".rowHighlite"] = true;


																																																																																																																																			
			
			
			
											$tdataFile_Distribution_Rejected[".isUsebuttonHandlers"] = true;

$tdataFile_Distribution_Rejected[".addPageEvents"] = true;

// use timepicker for search panel
$tdataFile_Distribution_Rejected[".isUseTimeForSearch"] = false;




$tdataFile_Distribution_Rejected[".detailsLinksOnList"] = "1";

$tdataFile_Distribution_Rejected[".allSearchFields"] = array();
$tdataFile_Distribution_Rejected[".filterFields"] = array();
$tdataFile_Distribution_Rejected[".requiredSearchFields"] = array();

$tdataFile_Distribution_Rejected[".allSearchFields"][] = "end2_date";
	$tdataFile_Distribution_Rejected[".allSearchFields"][] = "end_date";
	$tdataFile_Distribution_Rejected[".allSearchFields"][] = "designer2_id";
	$tdataFile_Distribution_Rejected[".allSearchFields"][] = "jobfile_status_id";
	$tdataFile_Distribution_Rejected[".allSearchFields"][] = "qcend_date";
	$tdataFile_Distribution_Rejected[".allSearchFields"][] = "jobfile_id";
	$tdataFile_Distribution_Rejected[".allSearchFields"][] = "file_url";
	$tdataFile_Distribution_Rejected[".allSearchFields"][] = "work_id";
	$tdataFile_Distribution_Rejected[".allSearchFields"][] = "job_id";
	$tdataFile_Distribution_Rejected[".allSearchFields"][] = "filename";
	$tdataFile_Distribution_Rejected[".allSearchFields"][] = "designer_id";
	$tdataFile_Distribution_Rejected[".allSearchFields"][] = "qc_id";
	

$tdataFile_Distribution_Rejected[".googleLikeFields"] = array();
$tdataFile_Distribution_Rejected[".googleLikeFields"][] = "jobfile_id";
$tdataFile_Distribution_Rejected[".googleLikeFields"][] = "file_url";
$tdataFile_Distribution_Rejected[".googleLikeFields"][] = "work_id";
$tdataFile_Distribution_Rejected[".googleLikeFields"][] = "job_id";
$tdataFile_Distribution_Rejected[".googleLikeFields"][] = "filename";
$tdataFile_Distribution_Rejected[".googleLikeFields"][] = "designer_id";
$tdataFile_Distribution_Rejected[".googleLikeFields"][] = "qc_id";
$tdataFile_Distribution_Rejected[".googleLikeFields"][] = "jobfile_status_id";
$tdataFile_Distribution_Rejected[".googleLikeFields"][] = "designer2_id";
$tdataFile_Distribution_Rejected[".googleLikeFields"][] = "end_date";
$tdataFile_Distribution_Rejected[".googleLikeFields"][] = "end2_date";
$tdataFile_Distribution_Rejected[".googleLikeFields"][] = "qcend_date";


$tdataFile_Distribution_Rejected[".advSearchFields"] = array();
$tdataFile_Distribution_Rejected[".advSearchFields"][] = "end2_date";
$tdataFile_Distribution_Rejected[".advSearchFields"][] = "end_date";
$tdataFile_Distribution_Rejected[".advSearchFields"][] = "designer2_id";
$tdataFile_Distribution_Rejected[".advSearchFields"][] = "jobfile_status_id";
$tdataFile_Distribution_Rejected[".advSearchFields"][] = "qcend_date";
$tdataFile_Distribution_Rejected[".advSearchFields"][] = "jobfile_id";
$tdataFile_Distribution_Rejected[".advSearchFields"][] = "file_url";
$tdataFile_Distribution_Rejected[".advSearchFields"][] = "work_id";
$tdataFile_Distribution_Rejected[".advSearchFields"][] = "job_id";
$tdataFile_Distribution_Rejected[".advSearchFields"][] = "filename";
$tdataFile_Distribution_Rejected[".advSearchFields"][] = "designer_id";
$tdataFile_Distribution_Rejected[".advSearchFields"][] = "qc_id";

$tdataFile_Distribution_Rejected[".tableType"] = "list";

$tdataFile_Distribution_Rejected[".printerPageOrientation"] = 0;
$tdataFile_Distribution_Rejected[".nPrinterPageScale"] = 100;

$tdataFile_Distribution_Rejected[".nPrinterSplitRecords"] = 40;

$tdataFile_Distribution_Rejected[".nPrinterPDFSplitRecords"] = 40;



$tdataFile_Distribution_Rejected[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataFile_Distribution_Rejected[".pageSize"] = 24;

$tdataFile_Distribution_Rejected[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY file_url";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataFile_Distribution_Rejected[".strOrderBy"] = $tstrOrderBy;

$tdataFile_Distribution_Rejected[".orderindexes"] = array();
$tdataFile_Distribution_Rejected[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "file_url");

$tdataFile_Distribution_Rejected[".sqlHead"] = "SELECT jobfile_id,  file_url,  work_id,  job_id,  filename,  designer_id,  qc_id,  jobfile_status_id,  designer2_id,  end_date,  end2_date,  qcend_date";
$tdataFile_Distribution_Rejected[".sqlFrom"] = "FROM rejected_jobfile2";
$tdataFile_Distribution_Rejected[".sqlWhereExpr"] = "";
$tdataFile_Distribution_Rejected[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataFile_Distribution_Rejected[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataFile_Distribution_Rejected[".arrGroupsPerPage"] = $arrGPP;

$tdataFile_Distribution_Rejected[".highlightSearchResults"] = true;

$tableKeysFile_Distribution_Rejected = array();
$tableKeysFile_Distribution_Rejected[] = "jobfile_id";
$tdataFile_Distribution_Rejected[".Keys"] = $tableKeysFile_Distribution_Rejected;

$tdataFile_Distribution_Rejected[".listFields"] = array();
$tdataFile_Distribution_Rejected[".listFields"][] = "end2_date";
$tdataFile_Distribution_Rejected[".listFields"][] = "end_date";
$tdataFile_Distribution_Rejected[".listFields"][] = "designer2_id";
$tdataFile_Distribution_Rejected[".listFields"][] = "qcend_date";
$tdataFile_Distribution_Rejected[".listFields"][] = "jobfile_status_id";
$tdataFile_Distribution_Rejected[".listFields"][] = "jobfile_id";
$tdataFile_Distribution_Rejected[".listFields"][] = "file_url";
$tdataFile_Distribution_Rejected[".listFields"][] = "work_id";
$tdataFile_Distribution_Rejected[".listFields"][] = "job_id";
$tdataFile_Distribution_Rejected[".listFields"][] = "filename";
$tdataFile_Distribution_Rejected[".listFields"][] = "designer_id";
$tdataFile_Distribution_Rejected[".listFields"][] = "qc_id";

$tdataFile_Distribution_Rejected[".hideMobileList"] = array();


$tdataFile_Distribution_Rejected[".viewFields"] = array();
$tdataFile_Distribution_Rejected[".viewFields"][] = "end2_date";
$tdataFile_Distribution_Rejected[".viewFields"][] = "end_date";
$tdataFile_Distribution_Rejected[".viewFields"][] = "designer2_id";
$tdataFile_Distribution_Rejected[".viewFields"][] = "jobfile_status_id";
$tdataFile_Distribution_Rejected[".viewFields"][] = "qcend_date";
$tdataFile_Distribution_Rejected[".viewFields"][] = "jobfile_id";
$tdataFile_Distribution_Rejected[".viewFields"][] = "file_url";
$tdataFile_Distribution_Rejected[".viewFields"][] = "work_id";
$tdataFile_Distribution_Rejected[".viewFields"][] = "job_id";
$tdataFile_Distribution_Rejected[".viewFields"][] = "filename";
$tdataFile_Distribution_Rejected[".viewFields"][] = "designer_id";
$tdataFile_Distribution_Rejected[".viewFields"][] = "qc_id";

$tdataFile_Distribution_Rejected[".addFields"] = array();
$tdataFile_Distribution_Rejected[".addFields"][] = "end2_date";
$tdataFile_Distribution_Rejected[".addFields"][] = "end_date";
$tdataFile_Distribution_Rejected[".addFields"][] = "designer2_id";
$tdataFile_Distribution_Rejected[".addFields"][] = "qcend_date";
$tdataFile_Distribution_Rejected[".addFields"][] = "jobfile_id";
$tdataFile_Distribution_Rejected[".addFields"][] = "file_url";
$tdataFile_Distribution_Rejected[".addFields"][] = "work_id";
$tdataFile_Distribution_Rejected[".addFields"][] = "job_id";
$tdataFile_Distribution_Rejected[".addFields"][] = "filename";
$tdataFile_Distribution_Rejected[".addFields"][] = "designer_id";
$tdataFile_Distribution_Rejected[".addFields"][] = "qc_id";

$tdataFile_Distribution_Rejected[".masterListFields"] = array();
$tdataFile_Distribution_Rejected[".masterListFields"][] = "jobfile_id";
$tdataFile_Distribution_Rejected[".masterListFields"][] = "file_url";
$tdataFile_Distribution_Rejected[".masterListFields"][] = "work_id";
$tdataFile_Distribution_Rejected[".masterListFields"][] = "job_id";
$tdataFile_Distribution_Rejected[".masterListFields"][] = "filename";
$tdataFile_Distribution_Rejected[".masterListFields"][] = "designer_id";
$tdataFile_Distribution_Rejected[".masterListFields"][] = "qc_id";
$tdataFile_Distribution_Rejected[".masterListFields"][] = "jobfile_status_id";
$tdataFile_Distribution_Rejected[".masterListFields"][] = "designer2_id";
$tdataFile_Distribution_Rejected[".masterListFields"][] = "end_date";
$tdataFile_Distribution_Rejected[".masterListFields"][] = "end2_date";
$tdataFile_Distribution_Rejected[".masterListFields"][] = "qcend_date";

$tdataFile_Distribution_Rejected[".inlineAddFields"] = array();

$tdataFile_Distribution_Rejected[".editFields"] = array();
$tdataFile_Distribution_Rejected[".editFields"][] = "end2_date";
$tdataFile_Distribution_Rejected[".editFields"][] = "end_date";
$tdataFile_Distribution_Rejected[".editFields"][] = "designer2_id";
$tdataFile_Distribution_Rejected[".editFields"][] = "qcend_date";
$tdataFile_Distribution_Rejected[".editFields"][] = "jobfile_id";
$tdataFile_Distribution_Rejected[".editFields"][] = "file_url";
$tdataFile_Distribution_Rejected[".editFields"][] = "work_id";
$tdataFile_Distribution_Rejected[".editFields"][] = "job_id";
$tdataFile_Distribution_Rejected[".editFields"][] = "filename";
$tdataFile_Distribution_Rejected[".editFields"][] = "designer_id";
$tdataFile_Distribution_Rejected[".editFields"][] = "qc_id";

$tdataFile_Distribution_Rejected[".inlineEditFields"] = array();

$tdataFile_Distribution_Rejected[".exportFields"] = array();
$tdataFile_Distribution_Rejected[".exportFields"][] = "jobfile_id";
$tdataFile_Distribution_Rejected[".exportFields"][] = "file_url";
$tdataFile_Distribution_Rejected[".exportFields"][] = "work_id";
$tdataFile_Distribution_Rejected[".exportFields"][] = "job_id";
$tdataFile_Distribution_Rejected[".exportFields"][] = "filename";
$tdataFile_Distribution_Rejected[".exportFields"][] = "designer_id";
$tdataFile_Distribution_Rejected[".exportFields"][] = "qc_id";
$tdataFile_Distribution_Rejected[".exportFields"][] = "jobfile_status_id";
$tdataFile_Distribution_Rejected[".exportFields"][] = "designer2_id";
$tdataFile_Distribution_Rejected[".exportFields"][] = "end_date";
$tdataFile_Distribution_Rejected[".exportFields"][] = "end2_date";
$tdataFile_Distribution_Rejected[".exportFields"][] = "qcend_date";

$tdataFile_Distribution_Rejected[".importFields"] = array();
$tdataFile_Distribution_Rejected[".importFields"][] = "jobfile_id";
$tdataFile_Distribution_Rejected[".importFields"][] = "file_url";
$tdataFile_Distribution_Rejected[".importFields"][] = "work_id";
$tdataFile_Distribution_Rejected[".importFields"][] = "job_id";
$tdataFile_Distribution_Rejected[".importFields"][] = "filename";
$tdataFile_Distribution_Rejected[".importFields"][] = "designer_id";
$tdataFile_Distribution_Rejected[".importFields"][] = "qc_id";
$tdataFile_Distribution_Rejected[".importFields"][] = "jobfile_status_id";
$tdataFile_Distribution_Rejected[".importFields"][] = "designer2_id";
$tdataFile_Distribution_Rejected[".importFields"][] = "end_date";
$tdataFile_Distribution_Rejected[".importFields"][] = "end2_date";
$tdataFile_Distribution_Rejected[".importFields"][] = "qcend_date";

$tdataFile_Distribution_Rejected[".printFields"] = array();
$tdataFile_Distribution_Rejected[".printFields"][] = "end2_date";
$tdataFile_Distribution_Rejected[".printFields"][] = "end_date";
$tdataFile_Distribution_Rejected[".printFields"][] = "designer2_id";
$tdataFile_Distribution_Rejected[".printFields"][] = "jobfile_status_id";
$tdataFile_Distribution_Rejected[".printFields"][] = "qcend_date";
$tdataFile_Distribution_Rejected[".printFields"][] = "jobfile_id";
$tdataFile_Distribution_Rejected[".printFields"][] = "file_url";
$tdataFile_Distribution_Rejected[".printFields"][] = "work_id";
$tdataFile_Distribution_Rejected[".printFields"][] = "job_id";
$tdataFile_Distribution_Rejected[".printFields"][] = "filename";
$tdataFile_Distribution_Rejected[".printFields"][] = "designer_id";
$tdataFile_Distribution_Rejected[".printFields"][] = "qc_id";

//	jobfile_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "jobfile_id";
	$fdata["GoodName"] = "jobfile_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("File_Distribution_Rejected","jobfile_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobfile_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataFile_Distribution_Rejected["jobfile_id"] = $fdata;
//	file_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "file_url";
	$fdata["GoodName"] = "file_url";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("File_Distribution_Rejected","file_url"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "file_url"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "file_url";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;
	
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	$fdata["Absolute"] = true;
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataFile_Distribution_Rejected["file_url"] = $fdata;
//	work_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "work_id";
	$fdata["GoodName"] = "work_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("File_Distribution_Rejected","work_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "work_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "work_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataFile_Distribution_Rejected["work_id"] = $fdata;
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("File_Distribution_Rejected","job_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "job_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataFile_Distribution_Rejected["job_id"] = $fdata;
//	filename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "filename";
	$fdata["GoodName"] = "filename";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("File_Distribution_Rejected","filename"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "filename"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "filename";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["masterprint"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
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

	

	
	$tdataFile_Distribution_Rejected["filename"] = $fdata;
//	designer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "designer_id";
	$fdata["GoodName"] = "designer_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("File_Distribution_Rejected","designer_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designer_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["masterprint"] = $vdata;
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
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 10;
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
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
	
		
	$edata["LookupOrderBy"] = "username";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 10;
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
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
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 10;
		
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
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataFile_Distribution_Rejected["designer_id"] = $fdata;
//	qc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "qc_id";
	$fdata["GoodName"] = "qc_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("File_Distribution_Rejected","qc_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qc_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qc_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["masterprint"] = $vdata;
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
	
		
	$edata["LookupOrderBy"] = "username";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 10;
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
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
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 10;
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
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
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 10;
		
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
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataFile_Distribution_Rejected["qc_id"] = $fdata;
//	jobfile_status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "jobfile_status_id";
	$fdata["GoodName"] = "jobfile_status_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("File_Distribution_Rejected","jobfile_status_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobfile_status_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile_status_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataFile_Distribution_Rejected["jobfile_status_id"] = $fdata;
//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("File_Distribution_Rejected","designer2_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer2_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designer2_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["masterprint"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
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
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
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
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataFile_Distribution_Rejected["designer2_id"] = $fdata;
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("File_Distribution_Rejected","end_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "end_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "end_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataFile_Distribution_Rejected["end_date"] = $fdata;
//	end2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "end2_date";
	$fdata["GoodName"] = "end2_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("File_Distribution_Rejected","end2_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "end2_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "end2_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataFile_Distribution_Rejected["end2_date"] = $fdata;
//	qcend_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "qcend_date";
	$fdata["GoodName"] = "qcend_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("File_Distribution_Rejected","qcend_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qcend_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qcend_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataFile_Distribution_Rejected["qcend_date"] = $fdata;

	
$tables_data["File Distribution Rejected"]=&$tdataFile_Distribution_Rejected;
$field_labels["File_Distribution_Rejected"] = &$fieldLabelsFile_Distribution_Rejected;
$fieldToolTips["File Distribution Rejected"] = &$fieldToolTipsFile_Distribution_Rejected;
$page_titles["File_Distribution_Rejected"] = &$pageTitlesFile_Distribution_Rejected;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["File Distribution Rejected"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["File Distribution Rejected"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_File_Distribution_Rejected()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile_id,  file_url,  work_id,  job_id,  filename,  designer_id,  qc_id,  jobfile_status_id,  designer2_id,  end_date,  end2_date,  qcend_date";
$proto0["m_strFrom"] = "FROM rejected_jobfile2";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY file_url";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
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
			$obj = new SQLField(array(
	"m_strName" => "jobfile_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "File Distribution Rejected"
));

$proto5["m_sql"] = "jobfile_id";
$proto5["m_srcTableName"] = "File Distribution Rejected";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "file_url",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "File Distribution Rejected"
));

$proto7["m_sql"] = "file_url";
$proto7["m_srcTableName"] = "File Distribution Rejected";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "File Distribution Rejected"
));

$proto9["m_sql"] = "work_id";
$proto9["m_srcTableName"] = "File Distribution Rejected";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "File Distribution Rejected"
));

$proto11["m_sql"] = "job_id";
$proto11["m_srcTableName"] = "File Distribution Rejected";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "File Distribution Rejected"
));

$proto13["m_sql"] = "filename";
$proto13["m_srcTableName"] = "File Distribution Rejected";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "File Distribution Rejected"
));

$proto15["m_sql"] = "designer_id";
$proto15["m_srcTableName"] = "File Distribution Rejected";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "qc_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "File Distribution Rejected"
));

$proto17["m_sql"] = "qc_id";
$proto17["m_srcTableName"] = "File Distribution Rejected";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "File Distribution Rejected"
));

$proto19["m_sql"] = "jobfile_status_id";
$proto19["m_srcTableName"] = "File Distribution Rejected";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "File Distribution Rejected"
));

$proto21["m_sql"] = "designer2_id";
$proto21["m_srcTableName"] = "File Distribution Rejected";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "File Distribution Rejected"
));

$proto23["m_sql"] = "end_date";
$proto23["m_srcTableName"] = "File Distribution Rejected";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "File Distribution Rejected"
));

$proto25["m_sql"] = "end2_date";
$proto25["m_srcTableName"] = "File Distribution Rejected";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "qcend_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "File Distribution Rejected"
));

$proto27["m_sql"] = "qcend_date";
$proto27["m_srcTableName"] = "File Distribution Rejected";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "rejected_jobfile2";
$proto30["m_srcTableName"] = "File Distribution Rejected";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "jobfile_id";
$proto30["m_columns"][] = "previous_jobfile_id";
$proto30["m_columns"][] = "file_url";
$proto30["m_columns"][] = "client_id";
$proto30["m_columns"][] = "work_id";
$proto30["m_columns"][] = "job_id";
$proto30["m_columns"][] = "previous_job_id";
$proto30["m_columns"][] = "project_id";
$proto30["m_columns"][] = "folder_name";
$proto30["m_columns"][] = "filename";
$proto30["m_columns"][] = "jobfile_type";
$proto30["m_columns"][] = "jobfile_note";
$proto30["m_columns"][] = "jobfile_status_id";
$proto30["m_columns"][] = "downloader_id";
$proto30["m_columns"][] = "distributor_id";
$proto30["m_columns"][] = "designer_id";
$proto30["m_columns"][] = "qc_id";
$proto30["m_columns"][] = "uploader_id";
$proto30["m_columns"][] = "notifier_id";
$proto30["m_columns"][] = "rejector_id";
$proto30["m_columns"][] = "download_date";
$proto30["m_columns"][] = "distribute_date";
$proto30["m_columns"][] = "start_date";
$proto30["m_columns"][] = "end_date";
$proto30["m_columns"][] = "designer_time";
$proto30["m_columns"][] = "qcstart_date";
$proto30["m_columns"][] = "qcend_date";
$proto30["m_columns"][] = "qc_time";
$proto30["m_columns"][] = "upload_date";
$proto30["m_columns"][] = "notify_date";
$proto30["m_columns"][] = "reject_date";
$proto30["m_columns"][] = "reject_reason";
$proto30["m_columns"][] = "reject_reason_others";
$proto30["m_columns"][] = "screenshots";
$proto30["m_columns"][] = "designer2_id";
$proto30["m_columns"][] = "start2_date";
$proto30["m_columns"][] = "end2_date";
$proto30["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "rejected_jobfile2";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "File Distribution Rejected";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "file_url",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "File Distribution Rejected"
));

$proto33["m_column"]=$obj;
$proto33["m_bAsc"] = 1;
$proto33["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto33);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="File Distribution Rejected";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_File_Distribution_Rejected = createSqlQuery_File_Distribution_Rejected();


	
												
	
$tdataFile_Distribution_Rejected[".sqlquery"] = $queryData_File_Distribution_Rejected;

include_once(getabspath("include/File_Distribution_Rejected_events.php"));
$tableEvents["File Distribution Rejected"] = new eventclass_File_Distribution_Rejected;
$tdataFile_Distribution_Rejected[".hasEvents"] = true;

?>