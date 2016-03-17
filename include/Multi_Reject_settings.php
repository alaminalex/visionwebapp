<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMulti_Reject = array();	
	$tdataMulti_Reject[".truncateText"] = true;
	$tdataMulti_Reject[".NumberOfChars"] = 40; 
	$tdataMulti_Reject[".ShortName"] = "Multi_Reject";
	$tdataMulti_Reject[".OwnerID"] = "";
	$tdataMulti_Reject[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsMulti_Reject = array();
$fieldToolTipsMulti_Reject = array();
$pageTitlesMulti_Reject = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMulti_Reject["English"] = array();
	$fieldToolTipsMulti_Reject["English"] = array();
	$pageTitlesMulti_Reject["English"] = array();
	$fieldLabelsMulti_Reject["English"]["jobfile_id"] = "Jobfile Id";
	$fieldToolTipsMulti_Reject["English"]["jobfile_id"] = "";
	$fieldLabelsMulti_Reject["English"]["file_url"] = "File Url";
	$fieldToolTipsMulti_Reject["English"]["file_url"] = "";
	$fieldLabelsMulti_Reject["English"]["work_id"] = "Work Id";
	$fieldToolTipsMulti_Reject["English"]["work_id"] = "";
	$fieldLabelsMulti_Reject["English"]["job_id"] = "Job Id";
	$fieldToolTipsMulti_Reject["English"]["job_id"] = "";
	$fieldLabelsMulti_Reject["English"]["filename"] = "Filename";
	$fieldToolTipsMulti_Reject["English"]["filename"] = "";
	$fieldLabelsMulti_Reject["English"]["designer_id"] = "Designer Id";
	$fieldToolTipsMulti_Reject["English"]["designer_id"] = "";
	$fieldLabelsMulti_Reject["English"]["qc_id"] = "Qc Id";
	$fieldToolTipsMulti_Reject["English"]["qc_id"] = "";
	$fieldLabelsMulti_Reject["English"]["jobfile_status_id"] = "Jobfile Status Id";
	$fieldToolTipsMulti_Reject["English"]["jobfile_status_id"] = "";
	$fieldLabelsMulti_Reject["English"]["designer2_id"] = "Designer2 Id";
	$fieldToolTipsMulti_Reject["English"]["designer2_id"] = "";
	$fieldLabelsMulti_Reject["English"]["end_date"] = "End Date";
	$fieldToolTipsMulti_Reject["English"]["end_date"] = "";
	$fieldLabelsMulti_Reject["English"]["end2_date"] = "End2 Date";
	$fieldToolTipsMulti_Reject["English"]["end2_date"] = "";
	$fieldLabelsMulti_Reject["English"]["qcend_date"] = "Qcend Date";
	$fieldToolTipsMulti_Reject["English"]["qcend_date"] = "";
	if (count($fieldToolTipsMulti_Reject["English"]))
		$tdataMulti_Reject[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMulti_Reject[""] = array();
	$fieldToolTipsMulti_Reject[""] = array();
	$pageTitlesMulti_Reject[""] = array();
	if (count($fieldToolTipsMulti_Reject[""]))
		$tdataMulti_Reject[".isUseToolTips"] = true;
}
	
	
	$tdataMulti_Reject[".NCSearch"] = true;



$tdataMulti_Reject[".shortTableName"] = "Multi_Reject";
$tdataMulti_Reject[".nSecOptions"] = 0;
$tdataMulti_Reject[".recsPerRowList"] = 6;
$tdataMulti_Reject[".recsPerRowPrint"] = 1;
$tdataMulti_Reject[".mainTableOwnerID"] = "";
$tdataMulti_Reject[".moveNext"] = 1;
$tdataMulti_Reject[".entityType"] = 1;

$tdataMulti_Reject[".strOriginalTableName"] = "jobfile";




$tdataMulti_Reject[".showAddInPopup"] = false;

$tdataMulti_Reject[".showEditInPopup"] = false;

$tdataMulti_Reject[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMulti_Reject[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMulti_Reject[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataMulti_Reject[".listAjax"] = true;
else 
	$tdataMulti_Reject[".listAjax"] = false;

	$tdataMulti_Reject[".audit"] = false;

	$tdataMulti_Reject[".locking"] = false;

$tdataMulti_Reject[".edit"] = true;
$tdataMulti_Reject[".afterEditAction"] = 1;
$tdataMulti_Reject[".closePopupAfterEdit"] = 1;
$tdataMulti_Reject[".afterEditActionDetTable"] = "";

$tdataMulti_Reject[".add"] = true;
$tdataMulti_Reject[".afterAddAction"] = 1;
$tdataMulti_Reject[".closePopupAfterAdd"] = 1;
$tdataMulti_Reject[".afterAddActionDetTable"] = "";

$tdataMulti_Reject[".list"] = true;

$tdataMulti_Reject[".view"] = true;

$tdataMulti_Reject[".import"] = true;

$tdataMulti_Reject[".exportTo"] = true;

$tdataMulti_Reject[".printFriendly"] = true;


$tdataMulti_Reject[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataMulti_Reject[".searchSaving"] = false;
//

$tdataMulti_Reject[".showSearchPanel"] = true;
		$tdataMulti_Reject[".flexibleSearch"] = true;		

if (isMobile())
	$tdataMulti_Reject[".isUseAjaxSuggest"] = false;
else 
	$tdataMulti_Reject[".isUseAjaxSuggest"] = true;

$tdataMulti_Reject[".rowHighlite"] = true;


																																																																																																																													
			
			
			
			$tdataMulti_Reject[".isUsebuttonHandlers"] = true;

$tdataMulti_Reject[".addPageEvents"] = true;

// use timepicker for search panel
$tdataMulti_Reject[".isUseTimeForSearch"] = false;




$tdataMulti_Reject[".detailsLinksOnList"] = "1";

$tdataMulti_Reject[".allSearchFields"] = array();
$tdataMulti_Reject[".filterFields"] = array();
$tdataMulti_Reject[".requiredSearchFields"] = array();

$tdataMulti_Reject[".allSearchFields"][] = "end2_date";
	$tdataMulti_Reject[".allSearchFields"][] = "end_date";
	$tdataMulti_Reject[".allSearchFields"][] = "designer2_id";
	$tdataMulti_Reject[".allSearchFields"][] = "jobfile_status_id";
	$tdataMulti_Reject[".allSearchFields"][] = "qcend_date";
	$tdataMulti_Reject[".allSearchFields"][] = "jobfile_id";
	$tdataMulti_Reject[".allSearchFields"][] = "file_url";
	$tdataMulti_Reject[".allSearchFields"][] = "work_id";
	$tdataMulti_Reject[".allSearchFields"][] = "job_id";
	$tdataMulti_Reject[".allSearchFields"][] = "filename";
	$tdataMulti_Reject[".allSearchFields"][] = "designer_id";
	$tdataMulti_Reject[".allSearchFields"][] = "qc_id";
	

$tdataMulti_Reject[".googleLikeFields"] = array();
$tdataMulti_Reject[".googleLikeFields"][] = "jobfile_id";
$tdataMulti_Reject[".googleLikeFields"][] = "file_url";
$tdataMulti_Reject[".googleLikeFields"][] = "work_id";
$tdataMulti_Reject[".googleLikeFields"][] = "job_id";
$tdataMulti_Reject[".googleLikeFields"][] = "filename";
$tdataMulti_Reject[".googleLikeFields"][] = "designer_id";
$tdataMulti_Reject[".googleLikeFields"][] = "qc_id";
$tdataMulti_Reject[".googleLikeFields"][] = "jobfile_status_id";
$tdataMulti_Reject[".googleLikeFields"][] = "designer2_id";
$tdataMulti_Reject[".googleLikeFields"][] = "end_date";
$tdataMulti_Reject[".googleLikeFields"][] = "end2_date";
$tdataMulti_Reject[".googleLikeFields"][] = "qcend_date";


$tdataMulti_Reject[".advSearchFields"] = array();
$tdataMulti_Reject[".advSearchFields"][] = "end2_date";
$tdataMulti_Reject[".advSearchFields"][] = "end_date";
$tdataMulti_Reject[".advSearchFields"][] = "designer2_id";
$tdataMulti_Reject[".advSearchFields"][] = "jobfile_status_id";
$tdataMulti_Reject[".advSearchFields"][] = "qcend_date";
$tdataMulti_Reject[".advSearchFields"][] = "jobfile_id";
$tdataMulti_Reject[".advSearchFields"][] = "file_url";
$tdataMulti_Reject[".advSearchFields"][] = "work_id";
$tdataMulti_Reject[".advSearchFields"][] = "job_id";
$tdataMulti_Reject[".advSearchFields"][] = "filename";
$tdataMulti_Reject[".advSearchFields"][] = "designer_id";
$tdataMulti_Reject[".advSearchFields"][] = "qc_id";

$tdataMulti_Reject[".tableType"] = "list";

$tdataMulti_Reject[".printerPageOrientation"] = 0;
$tdataMulti_Reject[".nPrinterPageScale"] = 100;

$tdataMulti_Reject[".nPrinterSplitRecords"] = 40;

$tdataMulti_Reject[".nPrinterPDFSplitRecords"] = 40;



$tdataMulti_Reject[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataMulti_Reject[".pageSize"] = 24;

$tdataMulti_Reject[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY file_url";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMulti_Reject[".strOrderBy"] = $tstrOrderBy;

$tdataMulti_Reject[".orderindexes"] = array();
$tdataMulti_Reject[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "file_url");

$tdataMulti_Reject[".sqlHead"] = "SELECT jobfile_id,  file_url,  work_id,  job_id,  filename,  designer_id,  qc_id,  jobfile_status_id,  designer2_id,  end_date,  end2_date,  qcend_date";
$tdataMulti_Reject[".sqlFrom"] = "FROM jobfile";
$tdataMulti_Reject[".sqlWhereExpr"] = "";
$tdataMulti_Reject[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMulti_Reject[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMulti_Reject[".arrGroupsPerPage"] = $arrGPP;

$tdataMulti_Reject[".highlightSearchResults"] = true;

$tableKeysMulti_Reject = array();
$tableKeysMulti_Reject[] = "jobfile_id";
$tdataMulti_Reject[".Keys"] = $tableKeysMulti_Reject;

$tdataMulti_Reject[".listFields"] = array();
$tdataMulti_Reject[".listFields"][] = "end2_date";
$tdataMulti_Reject[".listFields"][] = "end_date";
$tdataMulti_Reject[".listFields"][] = "designer2_id";
$tdataMulti_Reject[".listFields"][] = "qcend_date";
$tdataMulti_Reject[".listFields"][] = "jobfile_status_id";
$tdataMulti_Reject[".listFields"][] = "jobfile_id";
$tdataMulti_Reject[".listFields"][] = "file_url";
$tdataMulti_Reject[".listFields"][] = "work_id";
$tdataMulti_Reject[".listFields"][] = "job_id";
$tdataMulti_Reject[".listFields"][] = "filename";
$tdataMulti_Reject[".listFields"][] = "designer_id";
$tdataMulti_Reject[".listFields"][] = "qc_id";

$tdataMulti_Reject[".hideMobileList"] = array();


$tdataMulti_Reject[".viewFields"] = array();
$tdataMulti_Reject[".viewFields"][] = "jobfile_status_id";
$tdataMulti_Reject[".viewFields"][] = "designer2_id";
$tdataMulti_Reject[".viewFields"][] = "end_date";
$tdataMulti_Reject[".viewFields"][] = "end2_date";
$tdataMulti_Reject[".viewFields"][] = "qcend_date";
$tdataMulti_Reject[".viewFields"][] = "jobfile_id";
$tdataMulti_Reject[".viewFields"][] = "file_url";
$tdataMulti_Reject[".viewFields"][] = "work_id";
$tdataMulti_Reject[".viewFields"][] = "job_id";
$tdataMulti_Reject[".viewFields"][] = "filename";
$tdataMulti_Reject[".viewFields"][] = "designer_id";
$tdataMulti_Reject[".viewFields"][] = "qc_id";

$tdataMulti_Reject[".addFields"] = array();
$tdataMulti_Reject[".addFields"][] = "end2_date";
$tdataMulti_Reject[".addFields"][] = "end_date";
$tdataMulti_Reject[".addFields"][] = "designer2_id";
$tdataMulti_Reject[".addFields"][] = "qcend_date";
$tdataMulti_Reject[".addFields"][] = "jobfile_id";
$tdataMulti_Reject[".addFields"][] = "file_url";
$tdataMulti_Reject[".addFields"][] = "work_id";
$tdataMulti_Reject[".addFields"][] = "job_id";
$tdataMulti_Reject[".addFields"][] = "filename";
$tdataMulti_Reject[".addFields"][] = "designer_id";
$tdataMulti_Reject[".addFields"][] = "qc_id";

$tdataMulti_Reject[".masterListFields"] = array();
$tdataMulti_Reject[".masterListFields"][] = "jobfile_id";
$tdataMulti_Reject[".masterListFields"][] = "file_url";
$tdataMulti_Reject[".masterListFields"][] = "work_id";
$tdataMulti_Reject[".masterListFields"][] = "job_id";
$tdataMulti_Reject[".masterListFields"][] = "filename";
$tdataMulti_Reject[".masterListFields"][] = "designer_id";
$tdataMulti_Reject[".masterListFields"][] = "qc_id";
$tdataMulti_Reject[".masterListFields"][] = "jobfile_status_id";
$tdataMulti_Reject[".masterListFields"][] = "designer2_id";
$tdataMulti_Reject[".masterListFields"][] = "end_date";
$tdataMulti_Reject[".masterListFields"][] = "end2_date";
$tdataMulti_Reject[".masterListFields"][] = "qcend_date";

$tdataMulti_Reject[".inlineAddFields"] = array();

$tdataMulti_Reject[".editFields"] = array();
$tdataMulti_Reject[".editFields"][] = "end2_date";
$tdataMulti_Reject[".editFields"][] = "end_date";
$tdataMulti_Reject[".editFields"][] = "designer2_id";
$tdataMulti_Reject[".editFields"][] = "qcend_date";
$tdataMulti_Reject[".editFields"][] = "jobfile_id";
$tdataMulti_Reject[".editFields"][] = "file_url";
$tdataMulti_Reject[".editFields"][] = "work_id";
$tdataMulti_Reject[".editFields"][] = "job_id";
$tdataMulti_Reject[".editFields"][] = "filename";
$tdataMulti_Reject[".editFields"][] = "designer_id";
$tdataMulti_Reject[".editFields"][] = "qc_id";

$tdataMulti_Reject[".inlineEditFields"] = array();

$tdataMulti_Reject[".exportFields"] = array();
$tdataMulti_Reject[".exportFields"][] = "jobfile_id";
$tdataMulti_Reject[".exportFields"][] = "file_url";
$tdataMulti_Reject[".exportFields"][] = "work_id";
$tdataMulti_Reject[".exportFields"][] = "job_id";
$tdataMulti_Reject[".exportFields"][] = "filename";
$tdataMulti_Reject[".exportFields"][] = "designer_id";
$tdataMulti_Reject[".exportFields"][] = "qc_id";
$tdataMulti_Reject[".exportFields"][] = "jobfile_status_id";
$tdataMulti_Reject[".exportFields"][] = "designer2_id";
$tdataMulti_Reject[".exportFields"][] = "end_date";
$tdataMulti_Reject[".exportFields"][] = "end2_date";
$tdataMulti_Reject[".exportFields"][] = "qcend_date";

$tdataMulti_Reject[".importFields"] = array();
$tdataMulti_Reject[".importFields"][] = "jobfile_id";
$tdataMulti_Reject[".importFields"][] = "file_url";
$tdataMulti_Reject[".importFields"][] = "work_id";
$tdataMulti_Reject[".importFields"][] = "job_id";
$tdataMulti_Reject[".importFields"][] = "filename";
$tdataMulti_Reject[".importFields"][] = "designer_id";
$tdataMulti_Reject[".importFields"][] = "qc_id";
$tdataMulti_Reject[".importFields"][] = "jobfile_status_id";
$tdataMulti_Reject[".importFields"][] = "designer2_id";
$tdataMulti_Reject[".importFields"][] = "end_date";
$tdataMulti_Reject[".importFields"][] = "end2_date";
$tdataMulti_Reject[".importFields"][] = "qcend_date";

$tdataMulti_Reject[".printFields"] = array();
$tdataMulti_Reject[".printFields"][] = "end2_date";
$tdataMulti_Reject[".printFields"][] = "end_date";
$tdataMulti_Reject[".printFields"][] = "designer2_id";
$tdataMulti_Reject[".printFields"][] = "jobfile_status_id";
$tdataMulti_Reject[".printFields"][] = "qcend_date";
$tdataMulti_Reject[".printFields"][] = "jobfile_id";
$tdataMulti_Reject[".printFields"][] = "file_url";
$tdataMulti_Reject[".printFields"][] = "work_id";
$tdataMulti_Reject[".printFields"][] = "job_id";
$tdataMulti_Reject[".printFields"][] = "filename";
$tdataMulti_Reject[".printFields"][] = "designer_id";
$tdataMulti_Reject[".printFields"][] = "qc_id";

//	jobfile_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "jobfile_id";
	$fdata["GoodName"] = "jobfile_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Multi_Reject","jobfile_id"); 
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

	

	
	$tdataMulti_Reject["jobfile_id"] = $fdata;
//	file_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "file_url";
	$fdata["GoodName"] = "file_url";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Multi_Reject","file_url"); 
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

	

	
	$tdataMulti_Reject["file_url"] = $fdata;
//	work_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "work_id";
	$fdata["GoodName"] = "work_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Multi_Reject","work_id"); 
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

	

	
	$tdataMulti_Reject["work_id"] = $fdata;
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Multi_Reject","job_id"); 
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

	

	
	$tdataMulti_Reject["job_id"] = $fdata;
//	filename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "filename";
	$fdata["GoodName"] = "filename";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Multi_Reject","filename"); 
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

	

	
	$tdataMulti_Reject["filename"] = $fdata;
//	designer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "designer_id";
	$fdata["GoodName"] = "designer_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Multi_Reject","designer_id"); 
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

	

	
	$tdataMulti_Reject["designer_id"] = $fdata;
//	qc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "qc_id";
	$fdata["GoodName"] = "qc_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Multi_Reject","qc_id"); 
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

	

	
	$tdataMulti_Reject["qc_id"] = $fdata;
//	jobfile_status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "jobfile_status_id";
	$fdata["GoodName"] = "jobfile_status_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Multi_Reject","jobfile_status_id"); 
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

	

	
	$tdataMulti_Reject["jobfile_status_id"] = $fdata;
//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Multi_Reject","designer2_id"); 
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

	

	
	$tdataMulti_Reject["designer2_id"] = $fdata;
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Multi_Reject","end_date"); 
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

	

	
	$tdataMulti_Reject["end_date"] = $fdata;
//	end2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "end2_date";
	$fdata["GoodName"] = "end2_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Multi_Reject","end2_date"); 
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

	

	
	$tdataMulti_Reject["end2_date"] = $fdata;
//	qcend_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "qcend_date";
	$fdata["GoodName"] = "qcend_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Multi_Reject","qcend_date"); 
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

	

	
	$tdataMulti_Reject["qcend_date"] = $fdata;

	
$tables_data["Multi Reject"]=&$tdataMulti_Reject;
$field_labels["Multi_Reject"] = &$fieldLabelsMulti_Reject;
$fieldToolTips["Multi Reject"] = &$fieldToolTipsMulti_Reject;
$page_titles["Multi_Reject"] = &$pageTitlesMulti_Reject;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Multi Reject"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Multi Reject"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Multi_Reject()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile_id,  file_url,  work_id,  job_id,  filename,  designer_id,  qc_id,  jobfile_status_id,  designer2_id,  end_date,  end2_date,  qcend_date";
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
	"m_srcTableName" => "Multi Reject"
));

$proto5["m_sql"] = "jobfile_id";
$proto5["m_srcTableName"] = "Multi Reject";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "file_url",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Multi Reject"
));

$proto7["m_sql"] = "file_url";
$proto7["m_srcTableName"] = "Multi Reject";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Multi Reject"
));

$proto9["m_sql"] = "work_id";
$proto9["m_srcTableName"] = "Multi Reject";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Multi Reject"
));

$proto11["m_sql"] = "job_id";
$proto11["m_srcTableName"] = "Multi Reject";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Multi Reject"
));

$proto13["m_sql"] = "filename";
$proto13["m_srcTableName"] = "Multi Reject";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Multi Reject"
));

$proto15["m_sql"] = "designer_id";
$proto15["m_srcTableName"] = "Multi Reject";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "qc_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Multi Reject"
));

$proto17["m_sql"] = "qc_id";
$proto17["m_srcTableName"] = "Multi Reject";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Multi Reject"
));

$proto19["m_sql"] = "jobfile_status_id";
$proto19["m_srcTableName"] = "Multi Reject";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Multi Reject"
));

$proto21["m_sql"] = "designer2_id";
$proto21["m_srcTableName"] = "Multi Reject";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Multi Reject"
));

$proto23["m_sql"] = "end_date";
$proto23["m_srcTableName"] = "Multi Reject";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Multi Reject"
));

$proto25["m_sql"] = "end2_date";
$proto25["m_srcTableName"] = "Multi Reject";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "qcend_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Multi Reject"
));

$proto27["m_sql"] = "qcend_date";
$proto27["m_srcTableName"] = "Multi Reject";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "jobfile";
$proto30["m_srcTableName"] = "Multi Reject";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "jobfile_id";
$proto30["m_columns"][] = "file_url";
$proto30["m_columns"][] = "client_id";
$proto30["m_columns"][] = "work_id";
$proto30["m_columns"][] = "job_id";
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
$proto30["m_columns"][] = "designer2_id";
$proto30["m_columns"][] = "start2_date";
$proto30["m_columns"][] = "end2_date";
$proto30["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "jobfile";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "Multi Reject";
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
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Multi Reject"
));

$proto33["m_column"]=$obj;
$proto33["m_bAsc"] = 1;
$proto33["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto33);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Multi Reject";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Multi_Reject = createSqlQuery_Multi_Reject();


	
												
	
$tdataMulti_Reject[".sqlquery"] = $queryData_Multi_Reject;

include_once(getabspath("include/Multi_Reject_events.php"));
$tableEvents["Multi Reject"] = new eventclass_Multi_Reject;
$tdataMulti_Reject[".hasEvents"] = true;

?>