<?php
require_once(getabspath("classes/cipherer.php"));




$tdataFile_Distribution = array();	
	$tdataFile_Distribution[".truncateText"] = true;
	$tdataFile_Distribution[".NumberOfChars"] = 40; 
	$tdataFile_Distribution[".ShortName"] = "File_Distribution";
	$tdataFile_Distribution[".OwnerID"] = "";
	$tdataFile_Distribution[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsFile_Distribution = array();
$fieldToolTipsFile_Distribution = array();
$pageTitlesFile_Distribution = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsFile_Distribution["English"] = array();
	$fieldToolTipsFile_Distribution["English"] = array();
	$pageTitlesFile_Distribution["English"] = array();
	$fieldLabelsFile_Distribution["English"]["jobfile_id"] = "Jobfile Id";
	$fieldToolTipsFile_Distribution["English"]["jobfile_id"] = "";
	$fieldLabelsFile_Distribution["English"]["file_url"] = "File Url";
	$fieldToolTipsFile_Distribution["English"]["file_url"] = "";
	$fieldLabelsFile_Distribution["English"]["work_id"] = "Work Id";
	$fieldToolTipsFile_Distribution["English"]["work_id"] = "";
	$fieldLabelsFile_Distribution["English"]["job_id"] = "Job Id";
	$fieldToolTipsFile_Distribution["English"]["job_id"] = "";
	$fieldLabelsFile_Distribution["English"]["filename"] = "Filename";
	$fieldToolTipsFile_Distribution["English"]["filename"] = "";
	$fieldLabelsFile_Distribution["English"]["designer_id"] = "Designer Id";
	$fieldToolTipsFile_Distribution["English"]["designer_id"] = "";
	$fieldLabelsFile_Distribution["English"]["qc_id"] = "Qc Id";
	$fieldToolTipsFile_Distribution["English"]["qc_id"] = "";
	$fieldLabelsFile_Distribution["English"]["jobfile_status_id"] = "Jobfile Status Id";
	$fieldToolTipsFile_Distribution["English"]["jobfile_status_id"] = "";
	$fieldLabelsFile_Distribution["English"]["designer2_id"] = "Designer2 Id";
	$fieldToolTipsFile_Distribution["English"]["designer2_id"] = "";
	$fieldLabelsFile_Distribution["English"]["end_date"] = "End Date";
	$fieldToolTipsFile_Distribution["English"]["end_date"] = "";
	$fieldLabelsFile_Distribution["English"]["end2_date"] = "End2 Date";
	$fieldToolTipsFile_Distribution["English"]["end2_date"] = "";
	$fieldLabelsFile_Distribution["English"]["qcend_date"] = "Qcend Date";
	$fieldToolTipsFile_Distribution["English"]["qcend_date"] = "";
	$fieldLabelsFile_Distribution["English"]["jobfile_type"] = "Jobfile Type";
	$fieldToolTipsFile_Distribution["English"]["jobfile_type"] = "";
	$pageTitlesFile_Distribution["English"]["add"] = "Select Designer for the Files";
	$pageTitlesFile_Distribution["English"]["edit"] = "Select QC to Distribute Job";
	if (count($fieldToolTipsFile_Distribution["English"]))
		$tdataFile_Distribution[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsFile_Distribution[""] = array();
	$fieldToolTipsFile_Distribution[""] = array();
	$pageTitlesFile_Distribution[""] = array();
	$fieldLabelsFile_Distribution[""]["jobfile_type"] = "Jobfile Type";
	$fieldToolTipsFile_Distribution[""]["jobfile_type"] = "";
	if (count($fieldToolTipsFile_Distribution[""]))
		$tdataFile_Distribution[".isUseToolTips"] = true;
}
	
	
	$tdataFile_Distribution[".NCSearch"] = true;



$tdataFile_Distribution[".shortTableName"] = "File_Distribution";
$tdataFile_Distribution[".nSecOptions"] = 0;
$tdataFile_Distribution[".recsPerRowList"] = 6;
$tdataFile_Distribution[".recsPerRowPrint"] = 1;
$tdataFile_Distribution[".mainTableOwnerID"] = "";
$tdataFile_Distribution[".moveNext"] = 1;
$tdataFile_Distribution[".entityType"] = 1;

$tdataFile_Distribution[".strOriginalTableName"] = "jobfile";




$tdataFile_Distribution[".showAddInPopup"] = false;

$tdataFile_Distribution[".showEditInPopup"] = false;

$tdataFile_Distribution[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataFile_Distribution[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataFile_Distribution[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataFile_Distribution[".listAjax"] = true;
else 
	$tdataFile_Distribution[".listAjax"] = false;

	$tdataFile_Distribution[".audit"] = false;

	$tdataFile_Distribution[".locking"] = false;

$tdataFile_Distribution[".edit"] = true;
$tdataFile_Distribution[".afterEditAction"] = 1;
$tdataFile_Distribution[".closePopupAfterEdit"] = 1;
$tdataFile_Distribution[".afterEditActionDetTable"] = "";

$tdataFile_Distribution[".add"] = true;
$tdataFile_Distribution[".afterAddAction"] = 0;
$tdataFile_Distribution[".closePopupAfterAdd"] = 1;
$tdataFile_Distribution[".afterAddActionDetTable"] = "";

$tdataFile_Distribution[".list"] = true;

$tdataFile_Distribution[".view"] = true;

$tdataFile_Distribution[".import"] = true;

$tdataFile_Distribution[".exportTo"] = true;

$tdataFile_Distribution[".printFriendly"] = true;


$tdataFile_Distribution[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataFile_Distribution[".searchSaving"] = false;
//

$tdataFile_Distribution[".showSearchPanel"] = true;
		$tdataFile_Distribution[".flexibleSearch"] = true;		

if (isMobile())
	$tdataFile_Distribution[".isUseAjaxSuggest"] = false;
else 
	$tdataFile_Distribution[".isUseAjaxSuggest"] = true;

$tdataFile_Distribution[".rowHighlite"] = true;


											
							
			
																		
																																																																																																																$tdataFile_Distribution[".isUsebuttonHandlers"] = true;

$tdataFile_Distribution[".addPageEvents"] = true;

// use timepicker for search panel
$tdataFile_Distribution[".isUseTimeForSearch"] = false;




$tdataFile_Distribution[".detailsLinksOnList"] = "1";

$tdataFile_Distribution[".allSearchFields"] = array();
$tdataFile_Distribution[".filterFields"] = array();
$tdataFile_Distribution[".requiredSearchFields"] = array();

$tdataFile_Distribution[".allSearchFields"][] = "qcend_date";
	$tdataFile_Distribution[".allSearchFields"][] = "end2_date";
	$tdataFile_Distribution[".allSearchFields"][] = "end_date";
	$tdataFile_Distribution[".allSearchFields"][] = "designer2_id";
	$tdataFile_Distribution[".allSearchFields"][] = "jobfile_status_id";
	$tdataFile_Distribution[".allSearchFields"][] = "jobfile_type";
	$tdataFile_Distribution[".allSearchFields"][] = "jobfile_id";
	$tdataFile_Distribution[".allSearchFields"][] = "file_url";
	$tdataFile_Distribution[".allSearchFields"][] = "work_id";
	$tdataFile_Distribution[".allSearchFields"][] = "job_id";
	$tdataFile_Distribution[".allSearchFields"][] = "filename";
	$tdataFile_Distribution[".allSearchFields"][] = "designer_id";
	$tdataFile_Distribution[".allSearchFields"][] = "qc_id";
	

$tdataFile_Distribution[".googleLikeFields"] = array();
$tdataFile_Distribution[".googleLikeFields"][] = "jobfile_id";
$tdataFile_Distribution[".googleLikeFields"][] = "file_url";
$tdataFile_Distribution[".googleLikeFields"][] = "work_id";
$tdataFile_Distribution[".googleLikeFields"][] = "job_id";
$tdataFile_Distribution[".googleLikeFields"][] = "filename";
$tdataFile_Distribution[".googleLikeFields"][] = "designer_id";
$tdataFile_Distribution[".googleLikeFields"][] = "qc_id";
$tdataFile_Distribution[".googleLikeFields"][] = "jobfile_status_id";
$tdataFile_Distribution[".googleLikeFields"][] = "designer2_id";
$tdataFile_Distribution[".googleLikeFields"][] = "end_date";
$tdataFile_Distribution[".googleLikeFields"][] = "end2_date";
$tdataFile_Distribution[".googleLikeFields"][] = "qcend_date";
$tdataFile_Distribution[".googleLikeFields"][] = "jobfile_type";


$tdataFile_Distribution[".advSearchFields"] = array();
$tdataFile_Distribution[".advSearchFields"][] = "qcend_date";
$tdataFile_Distribution[".advSearchFields"][] = "end2_date";
$tdataFile_Distribution[".advSearchFields"][] = "end_date";
$tdataFile_Distribution[".advSearchFields"][] = "designer2_id";
$tdataFile_Distribution[".advSearchFields"][] = "jobfile_status_id";
$tdataFile_Distribution[".advSearchFields"][] = "jobfile_type";
$tdataFile_Distribution[".advSearchFields"][] = "jobfile_id";
$tdataFile_Distribution[".advSearchFields"][] = "file_url";
$tdataFile_Distribution[".advSearchFields"][] = "work_id";
$tdataFile_Distribution[".advSearchFields"][] = "job_id";
$tdataFile_Distribution[".advSearchFields"][] = "filename";
$tdataFile_Distribution[".advSearchFields"][] = "designer_id";
$tdataFile_Distribution[".advSearchFields"][] = "qc_id";

$tdataFile_Distribution[".tableType"] = "list";

$tdataFile_Distribution[".printerPageOrientation"] = 0;
$tdataFile_Distribution[".nPrinterPageScale"] = 100;

$tdataFile_Distribution[".nPrinterSplitRecords"] = 40;

$tdataFile_Distribution[".nPrinterPDFSplitRecords"] = 40;



$tdataFile_Distribution[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataFile_Distribution[".pageSize"] = 24;

$tdataFile_Distribution[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY file_url";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataFile_Distribution[".strOrderBy"] = $tstrOrderBy;

$tdataFile_Distribution[".orderindexes"] = array();
$tdataFile_Distribution[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "file_url");

$tdataFile_Distribution[".sqlHead"] = "SELECT jobfile_id,  file_url,  work_id,  job_id,  filename,  designer_id,  qc_id,  jobfile_status_id,  designer2_id,  end_date,  end2_date,  qcend_date,  jobfile_type";
$tdataFile_Distribution[".sqlFrom"] = "FROM jobfile";
$tdataFile_Distribution[".sqlWhereExpr"] = "";
$tdataFile_Distribution[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataFile_Distribution[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataFile_Distribution[".arrGroupsPerPage"] = $arrGPP;

$tdataFile_Distribution[".highlightSearchResults"] = true;

$tableKeysFile_Distribution = array();
$tableKeysFile_Distribution[] = "jobfile_id";
$tdataFile_Distribution[".Keys"] = $tableKeysFile_Distribution;

$tdataFile_Distribution[".listFields"] = array();
$tdataFile_Distribution[".listFields"][] = "qcend_date";
$tdataFile_Distribution[".listFields"][] = "end2_date";
$tdataFile_Distribution[".listFields"][] = "end_date";
$tdataFile_Distribution[".listFields"][] = "designer2_id";
$tdataFile_Distribution[".listFields"][] = "jobfile_type";
$tdataFile_Distribution[".listFields"][] = "jobfile_status_id";
$tdataFile_Distribution[".listFields"][] = "jobfile_id";
$tdataFile_Distribution[".listFields"][] = "file_url";
$tdataFile_Distribution[".listFields"][] = "work_id";
$tdataFile_Distribution[".listFields"][] = "job_id";
$tdataFile_Distribution[".listFields"][] = "filename";
$tdataFile_Distribution[".listFields"][] = "designer_id";
$tdataFile_Distribution[".listFields"][] = "qc_id";

$tdataFile_Distribution[".hideMobileList"] = array();


$tdataFile_Distribution[".viewFields"] = array();
$tdataFile_Distribution[".viewFields"][] = "qcend_date";
$tdataFile_Distribution[".viewFields"][] = "end2_date";
$tdataFile_Distribution[".viewFields"][] = "end_date";
$tdataFile_Distribution[".viewFields"][] = "designer2_id";
$tdataFile_Distribution[".viewFields"][] = "jobfile_status_id";
$tdataFile_Distribution[".viewFields"][] = "jobfile_type";
$tdataFile_Distribution[".viewFields"][] = "jobfile_id";
$tdataFile_Distribution[".viewFields"][] = "file_url";
$tdataFile_Distribution[".viewFields"][] = "work_id";
$tdataFile_Distribution[".viewFields"][] = "job_id";
$tdataFile_Distribution[".viewFields"][] = "filename";
$tdataFile_Distribution[".viewFields"][] = "designer_id";
$tdataFile_Distribution[".viewFields"][] = "qc_id";

$tdataFile_Distribution[".addFields"] = array();
$tdataFile_Distribution[".addFields"][] = "end2_date";
$tdataFile_Distribution[".addFields"][] = "end_date";
$tdataFile_Distribution[".addFields"][] = "designer2_id";
$tdataFile_Distribution[".addFields"][] = "qcend_date";
$tdataFile_Distribution[".addFields"][] = "jobfile_id";
$tdataFile_Distribution[".addFields"][] = "file_url";
$tdataFile_Distribution[".addFields"][] = "work_id";
$tdataFile_Distribution[".addFields"][] = "job_id";
$tdataFile_Distribution[".addFields"][] = "filename";
$tdataFile_Distribution[".addFields"][] = "designer_id";
$tdataFile_Distribution[".addFields"][] = "qc_id";

$tdataFile_Distribution[".masterListFields"] = array();
$tdataFile_Distribution[".masterListFields"][] = "jobfile_id";
$tdataFile_Distribution[".masterListFields"][] = "file_url";
$tdataFile_Distribution[".masterListFields"][] = "work_id";
$tdataFile_Distribution[".masterListFields"][] = "job_id";
$tdataFile_Distribution[".masterListFields"][] = "filename";
$tdataFile_Distribution[".masterListFields"][] = "designer_id";
$tdataFile_Distribution[".masterListFields"][] = "qc_id";
$tdataFile_Distribution[".masterListFields"][] = "jobfile_status_id";
$tdataFile_Distribution[".masterListFields"][] = "designer2_id";
$tdataFile_Distribution[".masterListFields"][] = "end_date";
$tdataFile_Distribution[".masterListFields"][] = "end2_date";
$tdataFile_Distribution[".masterListFields"][] = "qcend_date";
$tdataFile_Distribution[".masterListFields"][] = "jobfile_type";

$tdataFile_Distribution[".inlineAddFields"] = array();

$tdataFile_Distribution[".editFields"] = array();
$tdataFile_Distribution[".editFields"][] = "end2_date";
$tdataFile_Distribution[".editFields"][] = "end_date";
$tdataFile_Distribution[".editFields"][] = "designer2_id";
$tdataFile_Distribution[".editFields"][] = "qcend_date";
$tdataFile_Distribution[".editFields"][] = "jobfile_id";
$tdataFile_Distribution[".editFields"][] = "file_url";
$tdataFile_Distribution[".editFields"][] = "work_id";
$tdataFile_Distribution[".editFields"][] = "job_id";
$tdataFile_Distribution[".editFields"][] = "filename";
$tdataFile_Distribution[".editFields"][] = "designer_id";
$tdataFile_Distribution[".editFields"][] = "qc_id";

$tdataFile_Distribution[".inlineEditFields"] = array();

$tdataFile_Distribution[".exportFields"] = array();
$tdataFile_Distribution[".exportFields"][] = "jobfile_id";
$tdataFile_Distribution[".exportFields"][] = "file_url";
$tdataFile_Distribution[".exportFields"][] = "work_id";
$tdataFile_Distribution[".exportFields"][] = "job_id";
$tdataFile_Distribution[".exportFields"][] = "filename";
$tdataFile_Distribution[".exportFields"][] = "designer_id";
$tdataFile_Distribution[".exportFields"][] = "qc_id";
$tdataFile_Distribution[".exportFields"][] = "jobfile_status_id";
$tdataFile_Distribution[".exportFields"][] = "designer2_id";
$tdataFile_Distribution[".exportFields"][] = "end_date";
$tdataFile_Distribution[".exportFields"][] = "end2_date";
$tdataFile_Distribution[".exportFields"][] = "qcend_date";
$tdataFile_Distribution[".exportFields"][] = "jobfile_type";

$tdataFile_Distribution[".importFields"] = array();
$tdataFile_Distribution[".importFields"][] = "jobfile_id";
$tdataFile_Distribution[".importFields"][] = "file_url";
$tdataFile_Distribution[".importFields"][] = "work_id";
$tdataFile_Distribution[".importFields"][] = "job_id";
$tdataFile_Distribution[".importFields"][] = "filename";
$tdataFile_Distribution[".importFields"][] = "designer_id";
$tdataFile_Distribution[".importFields"][] = "qc_id";
$tdataFile_Distribution[".importFields"][] = "jobfile_status_id";
$tdataFile_Distribution[".importFields"][] = "designer2_id";
$tdataFile_Distribution[".importFields"][] = "end_date";
$tdataFile_Distribution[".importFields"][] = "end2_date";
$tdataFile_Distribution[".importFields"][] = "qcend_date";
$tdataFile_Distribution[".importFields"][] = "jobfile_type";

$tdataFile_Distribution[".printFields"] = array();
$tdataFile_Distribution[".printFields"][] = "qcend_date";
$tdataFile_Distribution[".printFields"][] = "end2_date";
$tdataFile_Distribution[".printFields"][] = "end_date";
$tdataFile_Distribution[".printFields"][] = "designer2_id";
$tdataFile_Distribution[".printFields"][] = "jobfile_status_id";
$tdataFile_Distribution[".printFields"][] = "jobfile_type";
$tdataFile_Distribution[".printFields"][] = "jobfile_id";
$tdataFile_Distribution[".printFields"][] = "file_url";
$tdataFile_Distribution[".printFields"][] = "work_id";
$tdataFile_Distribution[".printFields"][] = "job_id";
$tdataFile_Distribution[".printFields"][] = "filename";
$tdataFile_Distribution[".printFields"][] = "designer_id";
$tdataFile_Distribution[".printFields"][] = "qc_id";

//	jobfile_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "jobfile_id";
	$fdata["GoodName"] = "jobfile_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Distribution","jobfile_id"); 
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

	

	
	$tdataFile_Distribution["jobfile_id"] = $fdata;
//	file_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "file_url";
	$fdata["GoodName"] = "file_url";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Distribution","file_url"); 
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

	

	
	$tdataFile_Distribution["file_url"] = $fdata;
//	work_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "work_id";
	$fdata["GoodName"] = "work_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Distribution","work_id"); 
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

	

	
	$tdataFile_Distribution["work_id"] = $fdata;
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Distribution","job_id"); 
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

	

	
	$tdataFile_Distribution["job_id"] = $fdata;
//	filename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "filename";
	$fdata["GoodName"] = "filename";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Distribution","filename"); 
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

	

	
	$tdataFile_Distribution["filename"] = $fdata;
//	designer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "designer_id";
	$fdata["GoodName"] = "designer_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Distribution","designer_id"); 
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

	

	
	$tdataFile_Distribution["designer_id"] = $fdata;
//	qc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "qc_id";
	$fdata["GoodName"] = "qc_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Distribution","qc_id"); 
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

	

	
	$tdataFile_Distribution["qc_id"] = $fdata;
//	jobfile_status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "jobfile_status_id";
	$fdata["GoodName"] = "jobfile_status_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Distribution","jobfile_status_id"); 
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

	

	
	$tdataFile_Distribution["jobfile_status_id"] = $fdata;
//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Distribution","designer2_id"); 
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

	

	
	$tdataFile_Distribution["designer2_id"] = $fdata;
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Distribution","end_date"); 
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

	

	
	$tdataFile_Distribution["end_date"] = $fdata;
//	end2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "end2_date";
	$fdata["GoodName"] = "end2_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Distribution","end2_date"); 
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

	

	
	$tdataFile_Distribution["end2_date"] = $fdata;
//	qcend_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "qcend_date";
	$fdata["GoodName"] = "qcend_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Distribution","qcend_date"); 
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

	

	
	$tdataFile_Distribution["qcend_date"] = $fdata;
//	jobfile_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "jobfile_type";
	$fdata["GoodName"] = "jobfile_type";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Distribution","jobfile_type"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobfile_type"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile_type";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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
	$edata["LookupTable"] = "jobfile_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "description";
	
		
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
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "jobfile_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "description";
	
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "jobfile_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "description";
	
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataFile_Distribution["jobfile_type"] = $fdata;

	
$tables_data["File Distribution"]=&$tdataFile_Distribution;
$field_labels["File_Distribution"] = &$fieldLabelsFile_Distribution;
$fieldToolTips["File Distribution"] = &$fieldToolTipsFile_Distribution;
$page_titles["File_Distribution"] = &$pageTitlesFile_Distribution;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["File Distribution"] = array();
//	jobfile
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="jobfile";
		$detailsParam["dOriginalTable"] = "jobfile";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "jobfile";
	$detailsParam["dCaptionTable"] = GetTableCaption("jobfile");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["File Distribution"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["File Distribution"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["File Distribution"][$dIndex]["masterKeys"][]="jobfile_id";

				$detailsTablesData["File Distribution"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["File Distribution"][$dIndex]["detailKeys"][]="jobfile_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["File Distribution"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_File_Distribution()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile_id,  file_url,  work_id,  job_id,  filename,  designer_id,  qc_id,  jobfile_status_id,  designer2_id,  end_date,  end2_date,  qcend_date,  jobfile_type";
$proto0["m_strFrom"] = "FROM jobfile";
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
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Distribution"
));

$proto5["m_sql"] = "jobfile_id";
$proto5["m_srcTableName"] = "File Distribution";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "file_url",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Distribution"
));

$proto7["m_sql"] = "file_url";
$proto7["m_srcTableName"] = "File Distribution";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Distribution"
));

$proto9["m_sql"] = "work_id";
$proto9["m_srcTableName"] = "File Distribution";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Distribution"
));

$proto11["m_sql"] = "job_id";
$proto11["m_srcTableName"] = "File Distribution";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Distribution"
));

$proto13["m_sql"] = "filename";
$proto13["m_srcTableName"] = "File Distribution";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Distribution"
));

$proto15["m_sql"] = "designer_id";
$proto15["m_srcTableName"] = "File Distribution";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "qc_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Distribution"
));

$proto17["m_sql"] = "qc_id";
$proto17["m_srcTableName"] = "File Distribution";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Distribution"
));

$proto19["m_sql"] = "jobfile_status_id";
$proto19["m_srcTableName"] = "File Distribution";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Distribution"
));

$proto21["m_sql"] = "designer2_id";
$proto21["m_srcTableName"] = "File Distribution";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Distribution"
));

$proto23["m_sql"] = "end_date";
$proto23["m_srcTableName"] = "File Distribution";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Distribution"
));

$proto25["m_sql"] = "end2_date";
$proto25["m_srcTableName"] = "File Distribution";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "qcend_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Distribution"
));

$proto27["m_sql"] = "qcend_date";
$proto27["m_srcTableName"] = "File Distribution";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_type",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Distribution"
));

$proto29["m_sql"] = "jobfile_type";
$proto29["m_srcTableName"] = "File Distribution";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "jobfile";
$proto32["m_srcTableName"] = "File Distribution";
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
$proto31["m_srcTableName"] = "File Distribution";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "file_url",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Distribution"
));

$proto35["m_column"]=$obj;
$proto35["m_bAsc"] = 1;
$proto35["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto35);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="File Distribution";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_File_Distribution = createSqlQuery_File_Distribution();


	
													
	
$tdataFile_Distribution[".sqlquery"] = $queryData_File_Distribution;

include_once(getabspath("include/File_Distribution_events.php"));
$tableEvents["File Distribution"] = new eventclass_File_Distribution;
$tdataFile_Distribution[".hasEvents"] = true;

?>