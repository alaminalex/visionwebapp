<?php
require_once(getabspath("classes/cipherer.php"));




$tdataFile_Reject = array();	
	$tdataFile_Reject[".truncateText"] = true;
	$tdataFile_Reject[".NumberOfChars"] = 40; 
	$tdataFile_Reject[".ShortName"] = "File_Reject";
	$tdataFile_Reject[".OwnerID"] = "";
	$tdataFile_Reject[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsFile_Reject = array();
$fieldToolTipsFile_Reject = array();
$pageTitlesFile_Reject = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsFile_Reject["English"] = array();
	$fieldToolTipsFile_Reject["English"] = array();
	$pageTitlesFile_Reject["English"] = array();
	$fieldLabelsFile_Reject["English"]["jobfile_id"] = "Jobfile Id";
	$fieldToolTipsFile_Reject["English"]["jobfile_id"] = "";
	$fieldLabelsFile_Reject["English"]["file_url"] = "File Url";
	$fieldToolTipsFile_Reject["English"]["file_url"] = "";
	$fieldLabelsFile_Reject["English"]["work_id"] = "Work Id";
	$fieldToolTipsFile_Reject["English"]["work_id"] = "";
	$fieldLabelsFile_Reject["English"]["job_id"] = "Job Id";
	$fieldToolTipsFile_Reject["English"]["job_id"] = "";
	$fieldLabelsFile_Reject["English"]["filename"] = "Filename";
	$fieldToolTipsFile_Reject["English"]["filename"] = "";
	$fieldLabelsFile_Reject["English"]["designer_id"] = "Designer Id";
	$fieldToolTipsFile_Reject["English"]["designer_id"] = "";
	$fieldLabelsFile_Reject["English"]["qc_id"] = "Qc Id";
	$fieldToolTipsFile_Reject["English"]["qc_id"] = "";
	$fieldLabelsFile_Reject["English"]["jobfile_status_id"] = "Jobfile Status Id";
	$fieldToolTipsFile_Reject["English"]["jobfile_status_id"] = "";
	$fieldLabelsFile_Reject["English"]["designer2_id"] = "Designer2 Id";
	$fieldToolTipsFile_Reject["English"]["designer2_id"] = "";
	$fieldLabelsFile_Reject["English"]["end_date"] = "End Date";
	$fieldToolTipsFile_Reject["English"]["end_date"] = "";
	$fieldLabelsFile_Reject["English"]["end2_date"] = "End2 Date";
	$fieldToolTipsFile_Reject["English"]["end2_date"] = "";
	$fieldLabelsFile_Reject["English"]["qcend_date"] = "Qcend Date";
	$fieldToolTipsFile_Reject["English"]["qcend_date"] = "";
	$fieldLabelsFile_Reject["English"]["jobfile_note"] = "Correction Instructions";
	$fieldToolTipsFile_Reject["English"]["jobfile_note"] = "";
	$pageTitlesFile_Reject["English"]["add"] = "Select Designer to Correct Rejected Files";
	if (count($fieldToolTipsFile_Reject["English"]))
		$tdataFile_Reject[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsFile_Reject[""] = array();
	$fieldToolTipsFile_Reject[""] = array();
	$pageTitlesFile_Reject[""] = array();
	if (count($fieldToolTipsFile_Reject[""]))
		$tdataFile_Reject[".isUseToolTips"] = true;
}
	
	
	$tdataFile_Reject[".NCSearch"] = true;



$tdataFile_Reject[".shortTableName"] = "File_Reject";
$tdataFile_Reject[".nSecOptions"] = 0;
$tdataFile_Reject[".recsPerRowList"] = 1;
$tdataFile_Reject[".recsPerRowPrint"] = 1;
$tdataFile_Reject[".mainTableOwnerID"] = "";
$tdataFile_Reject[".moveNext"] = 1;
$tdataFile_Reject[".entityType"] = 1;

$tdataFile_Reject[".strOriginalTableName"] = "jobfile";




$tdataFile_Reject[".showAddInPopup"] = false;

$tdataFile_Reject[".showEditInPopup"] = false;

$tdataFile_Reject[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataFile_Reject[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataFile_Reject[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataFile_Reject[".listAjax"] = true;
else 
	$tdataFile_Reject[".listAjax"] = false;

	$tdataFile_Reject[".audit"] = false;

	$tdataFile_Reject[".locking"] = false;

$tdataFile_Reject[".edit"] = true;
$tdataFile_Reject[".afterEditAction"] = 1;
$tdataFile_Reject[".closePopupAfterEdit"] = 1;
$tdataFile_Reject[".afterEditActionDetTable"] = "";

$tdataFile_Reject[".add"] = true;
$tdataFile_Reject[".afterAddAction"] = 0;
$tdataFile_Reject[".closePopupAfterAdd"] = 1;
$tdataFile_Reject[".afterAddActionDetTable"] = "";

$tdataFile_Reject[".list"] = true;

$tdataFile_Reject[".view"] = true;

$tdataFile_Reject[".import"] = true;

$tdataFile_Reject[".exportTo"] = true;

$tdataFile_Reject[".printFriendly"] = true;


$tdataFile_Reject[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataFile_Reject[".searchSaving"] = false;
//

$tdataFile_Reject[".showSearchPanel"] = true;
		$tdataFile_Reject[".flexibleSearch"] = true;		

if (isMobile())
	$tdataFile_Reject[".isUseAjaxSuggest"] = false;
else 
	$tdataFile_Reject[".isUseAjaxSuggest"] = true;

$tdataFile_Reject[".rowHighlite"] = true;


																																																																																																																																															
$tdataFile_Reject[".addPageEvents"] = true;

// use timepicker for search panel
$tdataFile_Reject[".isUseTimeForSearch"] = false;





$tdataFile_Reject[".allSearchFields"] = array();
$tdataFile_Reject[".filterFields"] = array();
$tdataFile_Reject[".requiredSearchFields"] = array();

$tdataFile_Reject[".allSearchFields"][] = "qcend_date";
	$tdataFile_Reject[".allSearchFields"][] = "end2_date";
	$tdataFile_Reject[".allSearchFields"][] = "end_date";
	$tdataFile_Reject[".allSearchFields"][] = "designer2_id";
	$tdataFile_Reject[".allSearchFields"][] = "jobfile_status_id";
	$tdataFile_Reject[".allSearchFields"][] = "jobfile_note";
	$tdataFile_Reject[".allSearchFields"][] = "jobfile_id";
	$tdataFile_Reject[".allSearchFields"][] = "file_url";
	$tdataFile_Reject[".allSearchFields"][] = "work_id";
	$tdataFile_Reject[".allSearchFields"][] = "job_id";
	$tdataFile_Reject[".allSearchFields"][] = "filename";
	$tdataFile_Reject[".allSearchFields"][] = "designer_id";
	$tdataFile_Reject[".allSearchFields"][] = "qc_id";
	

$tdataFile_Reject[".googleLikeFields"] = array();
$tdataFile_Reject[".googleLikeFields"][] = "jobfile_id";
$tdataFile_Reject[".googleLikeFields"][] = "file_url";
$tdataFile_Reject[".googleLikeFields"][] = "work_id";
$tdataFile_Reject[".googleLikeFields"][] = "job_id";
$tdataFile_Reject[".googleLikeFields"][] = "filename";
$tdataFile_Reject[".googleLikeFields"][] = "designer_id";
$tdataFile_Reject[".googleLikeFields"][] = "qc_id";
$tdataFile_Reject[".googleLikeFields"][] = "jobfile_status_id";
$tdataFile_Reject[".googleLikeFields"][] = "designer2_id";
$tdataFile_Reject[".googleLikeFields"][] = "end_date";
$tdataFile_Reject[".googleLikeFields"][] = "end2_date";
$tdataFile_Reject[".googleLikeFields"][] = "qcend_date";
$tdataFile_Reject[".googleLikeFields"][] = "jobfile_note";


$tdataFile_Reject[".advSearchFields"] = array();
$tdataFile_Reject[".advSearchFields"][] = "qcend_date";
$tdataFile_Reject[".advSearchFields"][] = "end2_date";
$tdataFile_Reject[".advSearchFields"][] = "end_date";
$tdataFile_Reject[".advSearchFields"][] = "designer2_id";
$tdataFile_Reject[".advSearchFields"][] = "jobfile_status_id";
$tdataFile_Reject[".advSearchFields"][] = "jobfile_note";
$tdataFile_Reject[".advSearchFields"][] = "jobfile_id";
$tdataFile_Reject[".advSearchFields"][] = "file_url";
$tdataFile_Reject[".advSearchFields"][] = "work_id";
$tdataFile_Reject[".advSearchFields"][] = "job_id";
$tdataFile_Reject[".advSearchFields"][] = "filename";
$tdataFile_Reject[".advSearchFields"][] = "designer_id";
$tdataFile_Reject[".advSearchFields"][] = "qc_id";

$tdataFile_Reject[".tableType"] = "list";

$tdataFile_Reject[".printerPageOrientation"] = 0;
$tdataFile_Reject[".nPrinterPageScale"] = 100;

$tdataFile_Reject[".nPrinterSplitRecords"] = 40;

$tdataFile_Reject[".nPrinterPDFSplitRecords"] = 40;



$tdataFile_Reject[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf

$tdataFile_Reject[".totalsFields"] = array();
$tdataFile_Reject[".totalsFields"][] = array(
	"fName" => "jobfile_id", 
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => '');

$tdataFile_Reject[".pageSize"] = 24;

$tdataFile_Reject[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY file_url";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataFile_Reject[".strOrderBy"] = $tstrOrderBy;

$tdataFile_Reject[".orderindexes"] = array();
$tdataFile_Reject[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "file_url");

$tdataFile_Reject[".sqlHead"] = "SELECT jobfile_id,  file_url,  work_id,  job_id,  filename,  designer_id,  qc_id,  jobfile_status_id,  designer2_id,  end_date,  end2_date,  qcend_date,  jobfile_note";
$tdataFile_Reject[".sqlFrom"] = "FROM jobfile";
$tdataFile_Reject[".sqlWhereExpr"] = "jobfile_status_id =10";
$tdataFile_Reject[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataFile_Reject[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataFile_Reject[".arrGroupsPerPage"] = $arrGPP;

$tdataFile_Reject[".highlightSearchResults"] = true;

$tableKeysFile_Reject = array();
$tableKeysFile_Reject[] = "jobfile_id";
$tdataFile_Reject[".Keys"] = $tableKeysFile_Reject;

$tdataFile_Reject[".listFields"] = array();
$tdataFile_Reject[".listFields"][] = "file_url";
$tdataFile_Reject[".listFields"][] = "jobfile_id";
$tdataFile_Reject[".listFields"][] = "work_id";
$tdataFile_Reject[".listFields"][] = "job_id";
$tdataFile_Reject[".listFields"][] = "jobfile_status_id";
$tdataFile_Reject[".listFields"][] = "filename";
$tdataFile_Reject[".listFields"][] = "designer_id";
$tdataFile_Reject[".listFields"][] = "end_date";
$tdataFile_Reject[".listFields"][] = "designer2_id";
$tdataFile_Reject[".listFields"][] = "end2_date";
$tdataFile_Reject[".listFields"][] = "qc_id";
$tdataFile_Reject[".listFields"][] = "qcend_date";
$tdataFile_Reject[".listFields"][] = "jobfile_note";

$tdataFile_Reject[".hideMobileList"] = array();


$tdataFile_Reject[".viewFields"] = array();
$tdataFile_Reject[".viewFields"][] = "qcend_date";
$tdataFile_Reject[".viewFields"][] = "end2_date";
$tdataFile_Reject[".viewFields"][] = "end_date";
$tdataFile_Reject[".viewFields"][] = "designer2_id";
$tdataFile_Reject[".viewFields"][] = "jobfile_status_id";
$tdataFile_Reject[".viewFields"][] = "jobfile_note";
$tdataFile_Reject[".viewFields"][] = "jobfile_id";
$tdataFile_Reject[".viewFields"][] = "file_url";
$tdataFile_Reject[".viewFields"][] = "work_id";
$tdataFile_Reject[".viewFields"][] = "job_id";
$tdataFile_Reject[".viewFields"][] = "filename";
$tdataFile_Reject[".viewFields"][] = "designer_id";
$tdataFile_Reject[".viewFields"][] = "qc_id";

$tdataFile_Reject[".addFields"] = array();
$tdataFile_Reject[".addFields"][] = "designer2_id";
$tdataFile_Reject[".addFields"][] = "end_date";
$tdataFile_Reject[".addFields"][] = "end2_date";
$tdataFile_Reject[".addFields"][] = "qcend_date";
$tdataFile_Reject[".addFields"][] = "jobfile_note";
$tdataFile_Reject[".addFields"][] = "jobfile_id";
$tdataFile_Reject[".addFields"][] = "file_url";
$tdataFile_Reject[".addFields"][] = "work_id";
$tdataFile_Reject[".addFields"][] = "job_id";
$tdataFile_Reject[".addFields"][] = "filename";
$tdataFile_Reject[".addFields"][] = "designer_id";
$tdataFile_Reject[".addFields"][] = "qc_id";

$tdataFile_Reject[".masterListFields"] = array();
$tdataFile_Reject[".masterListFields"][] = "jobfile_id";
$tdataFile_Reject[".masterListFields"][] = "file_url";
$tdataFile_Reject[".masterListFields"][] = "work_id";
$tdataFile_Reject[".masterListFields"][] = "job_id";
$tdataFile_Reject[".masterListFields"][] = "filename";
$tdataFile_Reject[".masterListFields"][] = "designer_id";
$tdataFile_Reject[".masterListFields"][] = "qc_id";
$tdataFile_Reject[".masterListFields"][] = "jobfile_status_id";
$tdataFile_Reject[".masterListFields"][] = "designer2_id";
$tdataFile_Reject[".masterListFields"][] = "end_date";
$tdataFile_Reject[".masterListFields"][] = "end2_date";
$tdataFile_Reject[".masterListFields"][] = "qcend_date";
$tdataFile_Reject[".masterListFields"][] = "jobfile_note";

$tdataFile_Reject[".inlineAddFields"] = array();

$tdataFile_Reject[".editFields"] = array();
$tdataFile_Reject[".editFields"][] = "designer2_id";
$tdataFile_Reject[".editFields"][] = "end_date";
$tdataFile_Reject[".editFields"][] = "end2_date";
$tdataFile_Reject[".editFields"][] = "qcend_date";
$tdataFile_Reject[".editFields"][] = "jobfile_note";
$tdataFile_Reject[".editFields"][] = "jobfile_id";
$tdataFile_Reject[".editFields"][] = "file_url";
$tdataFile_Reject[".editFields"][] = "work_id";
$tdataFile_Reject[".editFields"][] = "job_id";
$tdataFile_Reject[".editFields"][] = "filename";
$tdataFile_Reject[".editFields"][] = "designer_id";
$tdataFile_Reject[".editFields"][] = "qc_id";

$tdataFile_Reject[".inlineEditFields"] = array();

$tdataFile_Reject[".exportFields"] = array();
$tdataFile_Reject[".exportFields"][] = "jobfile_id";
$tdataFile_Reject[".exportFields"][] = "file_url";
$tdataFile_Reject[".exportFields"][] = "work_id";
$tdataFile_Reject[".exportFields"][] = "job_id";
$tdataFile_Reject[".exportFields"][] = "filename";
$tdataFile_Reject[".exportFields"][] = "designer_id";
$tdataFile_Reject[".exportFields"][] = "qc_id";
$tdataFile_Reject[".exportFields"][] = "jobfile_status_id";
$tdataFile_Reject[".exportFields"][] = "designer2_id";
$tdataFile_Reject[".exportFields"][] = "end_date";
$tdataFile_Reject[".exportFields"][] = "end2_date";
$tdataFile_Reject[".exportFields"][] = "qcend_date";
$tdataFile_Reject[".exportFields"][] = "jobfile_note";

$tdataFile_Reject[".importFields"] = array();
$tdataFile_Reject[".importFields"][] = "jobfile_id";
$tdataFile_Reject[".importFields"][] = "file_url";
$tdataFile_Reject[".importFields"][] = "work_id";
$tdataFile_Reject[".importFields"][] = "job_id";
$tdataFile_Reject[".importFields"][] = "filename";
$tdataFile_Reject[".importFields"][] = "designer_id";
$tdataFile_Reject[".importFields"][] = "qc_id";
$tdataFile_Reject[".importFields"][] = "jobfile_status_id";
$tdataFile_Reject[".importFields"][] = "designer2_id";
$tdataFile_Reject[".importFields"][] = "end_date";
$tdataFile_Reject[".importFields"][] = "end2_date";
$tdataFile_Reject[".importFields"][] = "qcend_date";
$tdataFile_Reject[".importFields"][] = "jobfile_note";

$tdataFile_Reject[".printFields"] = array();
$tdataFile_Reject[".printFields"][] = "qcend_date";
$tdataFile_Reject[".printFields"][] = "end2_date";
$tdataFile_Reject[".printFields"][] = "end_date";
$tdataFile_Reject[".printFields"][] = "designer2_id";
$tdataFile_Reject[".printFields"][] = "jobfile_status_id";
$tdataFile_Reject[".printFields"][] = "jobfile_note";
$tdataFile_Reject[".printFields"][] = "jobfile_id";
$tdataFile_Reject[".printFields"][] = "file_url";
$tdataFile_Reject[".printFields"][] = "work_id";
$tdataFile_Reject[".printFields"][] = "job_id";
$tdataFile_Reject[".printFields"][] = "filename";
$tdataFile_Reject[".printFields"][] = "designer_id";
$tdataFile_Reject[".printFields"][] = "qc_id";

//	jobfile_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "jobfile_id";
	$fdata["GoodName"] = "jobfile_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Reject","jobfile_id"); 
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

	

	
	$tdataFile_Reject["jobfile_id"] = $fdata;
//	file_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "file_url";
	$fdata["GoodName"] = "file_url";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Reject","file_url"); 
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

	

	
	$tdataFile_Reject["file_url"] = $fdata;
//	work_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "work_id";
	$fdata["GoodName"] = "work_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Reject","work_id"); 
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

	

	
	$tdataFile_Reject["work_id"] = $fdata;
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Reject","job_id"); 
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

	

	
	$tdataFile_Reject["job_id"] = $fdata;
//	filename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "filename";
	$fdata["GoodName"] = "filename";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Reject","filename"); 
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

	

	
	$tdataFile_Reject["filename"] = $fdata;
//	designer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "designer_id";
	$fdata["GoodName"] = "designer_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Reject","designer_id"); 
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

	

	
	$tdataFile_Reject["designer_id"] = $fdata;
//	qc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "qc_id";
	$fdata["GoodName"] = "qc_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Reject","qc_id"); 
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

	

	
	$tdataFile_Reject["qc_id"] = $fdata;
//	jobfile_status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "jobfile_status_id";
	$fdata["GoodName"] = "jobfile_status_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Reject","jobfile_status_id"); 
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

	

	
	$tdataFile_Reject["jobfile_status_id"] = $fdata;
//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Reject","designer2_id"); 
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

	

	
	$tdataFile_Reject["designer2_id"] = $fdata;
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Reject","end_date"); 
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

	

	
	$tdataFile_Reject["end_date"] = $fdata;
//	end2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "end2_date";
	$fdata["GoodName"] = "end2_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Reject","end2_date"); 
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

	

	
	$tdataFile_Reject["end2_date"] = $fdata;
//	qcend_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "qcend_date";
	$fdata["GoodName"] = "qcend_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Reject","qcend_date"); 
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

	

	
	$tdataFile_Reject["qcend_date"] = $fdata;
//	jobfile_note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "jobfile_note";
	$fdata["GoodName"] = "jobfile_note";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("File_Reject","jobfile_note"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobfile_note"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile_note";
	
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataFile_Reject["jobfile_note"] = $fdata;

	
$tables_data["File Reject"]=&$tdataFile_Reject;
$field_labels["File_Reject"] = &$fieldLabelsFile_Reject;
$fieldToolTips["File Reject"] = &$fieldToolTipsFile_Reject;
$page_titles["File_Reject"] = &$pageTitlesFile_Reject;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["File Reject"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["File Reject"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_File_Reject()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile_id,  file_url,  work_id,  job_id,  filename,  designer_id,  qc_id,  jobfile_status_id,  designer2_id,  end_date,  end2_date,  qcend_date,  jobfile_note";
$proto0["m_strFrom"] = "FROM jobfile";
$proto0["m_strWhere"] = "jobfile_status_id =10";
$proto0["m_strOrderBy"] = "ORDER BY file_url";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "jobfile_status_id =10";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Reject"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=10";
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
	"m_srcTableName" => "File Reject"
));

$proto5["m_sql"] = "jobfile_id";
$proto5["m_srcTableName"] = "File Reject";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "file_url",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Reject"
));

$proto7["m_sql"] = "file_url";
$proto7["m_srcTableName"] = "File Reject";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Reject"
));

$proto9["m_sql"] = "work_id";
$proto9["m_srcTableName"] = "File Reject";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Reject"
));

$proto11["m_sql"] = "job_id";
$proto11["m_srcTableName"] = "File Reject";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Reject"
));

$proto13["m_sql"] = "filename";
$proto13["m_srcTableName"] = "File Reject";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Reject"
));

$proto15["m_sql"] = "designer_id";
$proto15["m_srcTableName"] = "File Reject";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "qc_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Reject"
));

$proto17["m_sql"] = "qc_id";
$proto17["m_srcTableName"] = "File Reject";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Reject"
));

$proto19["m_sql"] = "jobfile_status_id";
$proto19["m_srcTableName"] = "File Reject";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Reject"
));

$proto21["m_sql"] = "designer2_id";
$proto21["m_srcTableName"] = "File Reject";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Reject"
));

$proto23["m_sql"] = "end_date";
$proto23["m_srcTableName"] = "File Reject";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Reject"
));

$proto25["m_sql"] = "end2_date";
$proto25["m_srcTableName"] = "File Reject";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "qcend_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Reject"
));

$proto27["m_sql"] = "qcend_date";
$proto27["m_srcTableName"] = "File Reject";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_note",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "File Reject"
));

$proto29["m_sql"] = "jobfile_note";
$proto29["m_srcTableName"] = "File Reject";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "jobfile";
$proto32["m_srcTableName"] = "File Reject";
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
$proto31["m_srcTableName"] = "File Reject";
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
	"m_srcTableName" => "File Reject"
));

$proto35["m_column"]=$obj;
$proto35["m_bAsc"] = 1;
$proto35["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto35);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="File Reject";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_File_Reject = createSqlQuery_File_Reject();


	
													
	
$tdataFile_Reject[".sqlquery"] = $queryData_File_Reject;

include_once(getabspath("include/File_Reject_events.php"));
$tableEvents["File Reject"] = new eventclass_File_Reject;
$tdataFile_Reject[".hasEvents"] = true;

?>