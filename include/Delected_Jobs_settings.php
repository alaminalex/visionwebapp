<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDelected_Jobs = array();	
	$tdataDelected_Jobs[".truncateText"] = true;
	$tdataDelected_Jobs[".NumberOfChars"] = 80; 
	$tdataDelected_Jobs[".ShortName"] = "Delected_Jobs";
	$tdataDelected_Jobs[".OwnerID"] = "";
	$tdataDelected_Jobs[".OriginalTable"] = "job";

//	field labels
$fieldLabelsDelected_Jobs = array();
$fieldToolTipsDelected_Jobs = array();
$pageTitlesDelected_Jobs = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDelected_Jobs["English"] = array();
	$fieldToolTipsDelected_Jobs["English"] = array();
	$pageTitlesDelected_Jobs["English"] = array();
	$fieldLabelsDelected_Jobs["English"]["work_id"] = "Work Id";
	$fieldToolTipsDelected_Jobs["English"]["work_id"] = "";
	$fieldLabelsDelected_Jobs["English"]["job_id"] = "Job Id";
	$fieldToolTipsDelected_Jobs["English"]["job_id"] = "";
	$fieldLabelsDelected_Jobs["English"]["total_images"] = "Total Images";
	$fieldToolTipsDelected_Jobs["English"]["total_images"] = "";
	$fieldLabelsDelected_Jobs["English"]["pdf_id"] = "Pdf Id";
	$fieldToolTipsDelected_Jobs["English"]["pdf_id"] = "";
	$fieldLabelsDelected_Jobs["English"]["jobstatus_id"] = "Jobstatus Id";
	$fieldToolTipsDelected_Jobs["English"]["jobstatus_id"] = "";
	if (count($fieldToolTipsDelected_Jobs["English"]))
		$tdataDelected_Jobs[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDelected_Jobs[""] = array();
	$fieldToolTipsDelected_Jobs[""] = array();
	$pageTitlesDelected_Jobs[""] = array();
	if (count($fieldToolTipsDelected_Jobs[""]))
		$tdataDelected_Jobs[".isUseToolTips"] = true;
}
	
	
	$tdataDelected_Jobs[".NCSearch"] = true;



$tdataDelected_Jobs[".shortTableName"] = "Delected_Jobs";
$tdataDelected_Jobs[".nSecOptions"] = 0;
$tdataDelected_Jobs[".recsPerRowList"] = 1;
$tdataDelected_Jobs[".recsPerRowPrint"] = 1;
$tdataDelected_Jobs[".mainTableOwnerID"] = "";
$tdataDelected_Jobs[".moveNext"] = 1;
$tdataDelected_Jobs[".entityType"] = 1;

$tdataDelected_Jobs[".strOriginalTableName"] = "job";




$tdataDelected_Jobs[".showAddInPopup"] = false;

$tdataDelected_Jobs[".showEditInPopup"] = false;

$tdataDelected_Jobs[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDelected_Jobs[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDelected_Jobs[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataDelected_Jobs[".listAjax"] = true;
else 
	$tdataDelected_Jobs[".listAjax"] = false;

	$tdataDelected_Jobs[".audit"] = false;

	$tdataDelected_Jobs[".locking"] = false;



$tdataDelected_Jobs[".list"] = true;



$tdataDelected_Jobs[".exportTo"] = true;

$tdataDelected_Jobs[".printFriendly"] = true;

$tdataDelected_Jobs[".delete"] = true;

$tdataDelected_Jobs[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDelected_Jobs[".searchSaving"] = false;
//

$tdataDelected_Jobs[".showSearchPanel"] = true;
		$tdataDelected_Jobs[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDelected_Jobs[".isUseAjaxSuggest"] = false;
else 
	$tdataDelected_Jobs[".isUseAjaxSuggest"] = true;

$tdataDelected_Jobs[".rowHighlite"] = true;


																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																			
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																$tdataDelected_Jobs[".isUsebuttonHandlers"] = true;

$tdataDelected_Jobs[".addPageEvents"] = true;

// use timepicker for search panel
$tdataDelected_Jobs[".isUseTimeForSearch"] = false;





$tdataDelected_Jobs[".allSearchFields"] = array();
$tdataDelected_Jobs[".filterFields"] = array();
$tdataDelected_Jobs[".requiredSearchFields"] = array();

$tdataDelected_Jobs[".allSearchFields"][] = "jobstatus_id";
	$tdataDelected_Jobs[".allSearchFields"][] = "job_id";
	$tdataDelected_Jobs[".allSearchFields"][] = "total_images";
	$tdataDelected_Jobs[".allSearchFields"][] = "pdf_id";
	

$tdataDelected_Jobs[".googleLikeFields"] = array();
$tdataDelected_Jobs[".googleLikeFields"][] = "work_id";
$tdataDelected_Jobs[".googleLikeFields"][] = "job_id";
$tdataDelected_Jobs[".googleLikeFields"][] = "total_images";
$tdataDelected_Jobs[".googleLikeFields"][] = "pdf_id";
$tdataDelected_Jobs[".googleLikeFields"][] = "jobstatus_id";


$tdataDelected_Jobs[".advSearchFields"] = array();
$tdataDelected_Jobs[".advSearchFields"][] = "jobstatus_id";
$tdataDelected_Jobs[".advSearchFields"][] = "job_id";
$tdataDelected_Jobs[".advSearchFields"][] = "total_images";
$tdataDelected_Jobs[".advSearchFields"][] = "pdf_id";

$tdataDelected_Jobs[".tableType"] = "list";

$tdataDelected_Jobs[".printerPageOrientation"] = 0;
$tdataDelected_Jobs[".nPrinterPageScale"] = 100;

$tdataDelected_Jobs[".nPrinterSplitRecords"] = 40;

$tdataDelected_Jobs[".nPrinterPDFSplitRecords"] = 40;



$tdataDelected_Jobs[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataDelected_Jobs[".pageSize"] = 20;

$tdataDelected_Jobs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDelected_Jobs[".strOrderBy"] = $tstrOrderBy;

$tdataDelected_Jobs[".orderindexes"] = array();

$tdataDelected_Jobs[".sqlHead"] = "SELECT work_id,  job_id,  total_images,  pdf_id,  jobstatus_id";
$tdataDelected_Jobs[".sqlFrom"] = "FROM job";
$tdataDelected_Jobs[".sqlWhereExpr"] = "jobstatus_id =12";
$tdataDelected_Jobs[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDelected_Jobs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDelected_Jobs[".arrGroupsPerPage"] = $arrGPP;

$tdataDelected_Jobs[".highlightSearchResults"] = true;

$tableKeysDelected_Jobs = array();
$tableKeysDelected_Jobs[] = "work_id";
$tdataDelected_Jobs[".Keys"] = $tableKeysDelected_Jobs;

$tdataDelected_Jobs[".listFields"] = array();
$tdataDelected_Jobs[".listFields"][] = "job_id";
$tdataDelected_Jobs[".listFields"][] = "total_images";
$tdataDelected_Jobs[".listFields"][] = "jobstatus_id";
$tdataDelected_Jobs[".listFields"][] = "pdf_id";

$tdataDelected_Jobs[".hideMobileList"] = array();


$tdataDelected_Jobs[".viewFields"] = array();

$tdataDelected_Jobs[".addFields"] = array();

$tdataDelected_Jobs[".masterListFields"] = array();
$tdataDelected_Jobs[".masterListFields"][] = "work_id";
$tdataDelected_Jobs[".masterListFields"][] = "jobstatus_id";
$tdataDelected_Jobs[".masterListFields"][] = "job_id";
$tdataDelected_Jobs[".masterListFields"][] = "total_images";
$tdataDelected_Jobs[".masterListFields"][] = "pdf_id";

$tdataDelected_Jobs[".inlineAddFields"] = array();

$tdataDelected_Jobs[".editFields"] = array();

$tdataDelected_Jobs[".inlineEditFields"] = array();

$tdataDelected_Jobs[".exportFields"] = array();
$tdataDelected_Jobs[".exportFields"][] = "work_id";
$tdataDelected_Jobs[".exportFields"][] = "jobstatus_id";
$tdataDelected_Jobs[".exportFields"][] = "job_id";
$tdataDelected_Jobs[".exportFields"][] = "total_images";
$tdataDelected_Jobs[".exportFields"][] = "pdf_id";

$tdataDelected_Jobs[".importFields"] = array();

$tdataDelected_Jobs[".printFields"] = array();
$tdataDelected_Jobs[".printFields"][] = "work_id";
$tdataDelected_Jobs[".printFields"][] = "jobstatus_id";
$tdataDelected_Jobs[".printFields"][] = "job_id";
$tdataDelected_Jobs[".printFields"][] = "total_images";
$tdataDelected_Jobs[".printFields"][] = "pdf_id";

//	work_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_id";
	$fdata["GoodName"] = "work_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Delected_Jobs","work_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		
		
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
	
	
	
	

	

	
	$tdataDelected_Jobs["work_id"] = $fdata;
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Delected_Jobs","job_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
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
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDelected_Jobs["job_id"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Delected_Jobs","total_images"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_images"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_images";
	
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDelected_Jobs["total_images"] = $fdata;
//	pdf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pdf_id";
	$fdata["GoodName"] = "pdf_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Delected_Jobs","pdf_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf_id";
	
		
		
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


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdataDelected_Jobs["pdf_id"] = $fdata;
//	jobstatus_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "jobstatus_id";
	$fdata["GoodName"] = "jobstatus_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Delected_Jobs","jobstatus_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobstatus_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobstatus_id";
	
		
		
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
	$edata["LinkFieldType"] = 3;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDelected_Jobs["jobstatus_id"] = $fdata;

	
$tables_data["Delected Jobs"]=&$tdataDelected_Jobs;
$field_labels["Delected_Jobs"] = &$fieldLabelsDelected_Jobs;
$fieldToolTips["Delected Jobs"] = &$fieldToolTipsDelected_Jobs;
$page_titles["Delected_Jobs"] = &$pageTitlesDelected_Jobs;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Delected Jobs"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Delected Jobs"] = array();


	
				$strOriginalDetailsTable="user";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="user";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "user";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Delected Jobs"][0] = $masterParams;	
				$masterTablesData["Delected Jobs"][0]["masterKeys"] = array();
	$masterTablesData["Delected Jobs"][0]["masterKeys"][]="user_id";
				$masterTablesData["Delected Jobs"][0]["detailKeys"] = array();
	$masterTablesData["Delected Jobs"][0]["detailKeys"][]="notifer_id";
		
	
				$strOriginalDetailsTable="notifyoption";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="notifyoption";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "notifyoption";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Delected Jobs"][1] = $masterParams;	
				$masterTablesData["Delected Jobs"][1]["masterKeys"] = array();
	$masterTablesData["Delected Jobs"][1]["masterKeys"][]="notify_option_id";
				$masterTablesData["Delected Jobs"][1]["detailKeys"] = array();
	$masterTablesData["Delected Jobs"][1]["detailKeys"][]="notify_options";
		
	
				$strOriginalDetailsTable="pdf";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pdf";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pdf";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Delected Jobs"][2] = $masterParams;	
				$masterTablesData["Delected Jobs"][2]["masterKeys"] = array();
	$masterTablesData["Delected Jobs"][2]["masterKeys"][]="pdf_id";
				$masterTablesData["Delected Jobs"][2]["detailKeys"] = array();
	$masterTablesData["Delected Jobs"][2]["detailKeys"][]="pdf_id";
		
	
				$strOriginalDetailsTable="jobstatus";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="jobstatus";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "jobstatus";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Delected Jobs"][3] = $masterParams;	
				$masterTablesData["Delected Jobs"][3]["masterKeys"] = array();
	$masterTablesData["Delected Jobs"][3]["masterKeys"][]="jobstatus_id";
				$masterTablesData["Delected Jobs"][3]["detailKeys"] = array();
	$masterTablesData["Delected Jobs"][3]["detailKeys"][]="jobstatus_id";
		
	
				$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="project";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "project";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Delected Jobs"][4] = $masterParams;	
				$masterTablesData["Delected Jobs"][4]["masterKeys"] = array();
	$masterTablesData["Delected Jobs"][4]["masterKeys"][]="project_id";
				$masterTablesData["Delected Jobs"][4]["detailKeys"] = array();
	$masterTablesData["Delected Jobs"][4]["detailKeys"][]="project_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Delected_Jobs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_id,  job_id,  total_images,  pdf_id,  jobstatus_id";
$proto0["m_strFrom"] = "FROM job";
$proto0["m_strWhere"] = "jobstatus_id =12";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "jobstatus_id =12";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Delected Jobs"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=12";
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
	"m_strName" => "work_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Delected Jobs"
));

$proto5["m_sql"] = "work_id";
$proto5["m_srcTableName"] = "Delected Jobs";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Delected Jobs"
));

$proto7["m_sql"] = "job_id";
$proto7["m_srcTableName"] = "Delected Jobs";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "total_images",
	"m_strTable" => "job",
	"m_srcTableName" => "Delected Jobs"
));

$proto9["m_sql"] = "total_images";
$proto9["m_srcTableName"] = "Delected Jobs";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Delected Jobs"
));

$proto11["m_sql"] = "pdf_id";
$proto11["m_srcTableName"] = "Delected Jobs";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Delected Jobs"
));

$proto13["m_sql"] = "jobstatus_id";
$proto13["m_srcTableName"] = "Delected Jobs";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "job";
$proto16["m_srcTableName"] = "Delected Jobs";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "work_id";
$proto16["m_columns"][] = "job_id";
$proto16["m_columns"][] = "client_id";
$proto16["m_columns"][] = "project_id";
$proto16["m_columns"][] = "job_directory";
$proto16["m_columns"][] = "complexity1";
$proto16["m_columns"][] = "complexity2";
$proto16["m_columns"][] = "complexity3";
$proto16["m_columns"][] = "complexity4";
$proto16["m_columns"][] = "complexity5";
$proto16["m_columns"][] = "complexity0";
$proto16["m_columns"][] = "complexityNP";
$proto16["m_columns"][] = "custom_complexity";
$proto16["m_columns"][] = "total_images";
$proto16["m_columns"][] = "is_urgent";
$proto16["m_columns"][] = "urgent_instruction";
$proto16["m_columns"][] = "delivery_duration";
$proto16["m_columns"][] = "delivery_date";
$proto16["m_columns"][] = "notify_options";
$proto16["m_columns"][] = "notes";
$proto16["m_columns"][] = "web_note";
$proto16["m_columns"][] = "comments";
$proto16["m_columns"][] = "pdf_id";
$proto16["m_columns"][] = "pdf_location";
$proto16["m_columns"][] = "allow_batch_process";
$proto16["m_columns"][] = "jobstatus_id";
$proto16["m_columns"][] = "reviewer_id";
$proto16["m_columns"][] = "reviewed_date";
$proto16["m_columns"][] = "accept_id";
$proto16["m_columns"][] = "accepted_date";
$proto16["m_columns"][] = "downloader_id";
$proto16["m_columns"][] = "download_date";
$proto16["m_columns"][] = "distributor_id";
$proto16["m_columns"][] = "distribute_date";
$proto16["m_columns"][] = "designer_list";
$proto16["m_columns"][] = "qcs_list";
$proto16["m_columns"][] = "finish_date";
$proto16["m_columns"][] = "uploader_id";
$proto16["m_columns"][] = "upload_date";
$proto16["m_columns"][] = "notifer_id";
$proto16["m_columns"][] = "notify_date";
$proto16["m_columns"][] = "rejector_id";
$proto16["m_columns"][] = "reject_date";
$proto16["m_columns"][] = "reject_reason";
$proto16["m_columns"][] = "activity_log";
$proto16["m_columns"][] = "time_remaining";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "job";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "Delected Jobs";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Delected Jobs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Delected_Jobs = createSqlQuery_Delected_Jobs();


	
					
	
$tdataDelected_Jobs[".sqlquery"] = $queryData_Delected_Jobs;

include_once(getabspath("include/Delected_Jobs_events.php"));
$tableEvents["Delected Jobs"] = new eventclass_Delected_Jobs;
$tdataDelected_Jobs[".hasEvents"] = true;

?>