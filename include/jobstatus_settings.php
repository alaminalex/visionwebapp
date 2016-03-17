<?php
require_once(getabspath("classes/cipherer.php"));




$tdatajobstatus = array();	
	$tdatajobstatus[".truncateText"] = true;
	$tdatajobstatus[".NumberOfChars"] = 80; 
	$tdatajobstatus[".ShortName"] = "jobstatus";
	$tdatajobstatus[".OwnerID"] = "";
	$tdatajobstatus[".OriginalTable"] = "jobstatus";

//	field labels
$fieldLabelsjobstatus = array();
$fieldToolTipsjobstatus = array();
$pageTitlesjobstatus = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsjobstatus["English"] = array();
	$fieldToolTipsjobstatus["English"] = array();
	$pageTitlesjobstatus["English"] = array();
	$fieldLabelsjobstatus["English"]["jobstatus_id"] = "Jobstatus Id";
	$fieldToolTipsjobstatus["English"]["jobstatus_id"] = "";
	$fieldLabelsjobstatus["English"]["job_status"] = "Job Status";
	$fieldToolTipsjobstatus["English"]["job_status"] = "";
	$fieldLabelsjobstatus["English"]["status_detail"] = "Status Detail";
	$fieldToolTipsjobstatus["English"]["status_detail"] = "";
	$fieldLabelsjobstatus["English"]["applicable_to"] = "Applicable To";
	$fieldToolTipsjobstatus["English"]["applicable_to"] = "";
	$fieldLabelsjobstatus["English"]["actions"] = "Actions";
	$fieldToolTipsjobstatus["English"]["actions"] = "";
	if (count($fieldToolTipsjobstatus["English"]))
		$tdatajobstatus[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsjobstatus[""] = array();
	$fieldToolTipsjobstatus[""] = array();
	$pageTitlesjobstatus[""] = array();
	if (count($fieldToolTipsjobstatus[""]))
		$tdatajobstatus[".isUseToolTips"] = true;
}
	
	
	$tdatajobstatus[".NCSearch"] = true;



$tdatajobstatus[".shortTableName"] = "jobstatus";
$tdatajobstatus[".nSecOptions"] = 0;
$tdatajobstatus[".recsPerRowList"] = 1;
$tdatajobstatus[".recsPerRowPrint"] = 1;
$tdatajobstatus[".mainTableOwnerID"] = "";
$tdatajobstatus[".moveNext"] = 0;
$tdatajobstatus[".entityType"] = 0;

$tdatajobstatus[".strOriginalTableName"] = "jobstatus";




$tdatajobstatus[".showAddInPopup"] = false;

$tdatajobstatus[".showEditInPopup"] = false;

$tdatajobstatus[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatajobstatus[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatajobstatus[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatajobstatus[".listAjax"] = true;
else 
	$tdatajobstatus[".listAjax"] = false;

	$tdatajobstatus[".audit"] = false;

	$tdatajobstatus[".locking"] = false;

$tdatajobstatus[".edit"] = true;
$tdatajobstatus[".afterEditAction"] = 1;
$tdatajobstatus[".closePopupAfterEdit"] = 1;
$tdatajobstatus[".afterEditActionDetTable"] = "";

$tdatajobstatus[".add"] = true;
$tdatajobstatus[".afterAddAction"] = 0;
$tdatajobstatus[".closePopupAfterAdd"] = 1;
$tdatajobstatus[".afterAddActionDetTable"] = "";

$tdatajobstatus[".list"] = true;

$tdatajobstatus[".view"] = true;

$tdatajobstatus[".import"] = true;

$tdatajobstatus[".exportTo"] = true;

$tdatajobstatus[".printFriendly"] = true;

$tdatajobstatus[".delete"] = true;

$tdatajobstatus[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatajobstatus[".searchSaving"] = false;
//

$tdatajobstatus[".showSearchPanel"] = true;
		$tdatajobstatus[".flexibleSearch"] = true;		

if (isMobile())
	$tdatajobstatus[".isUseAjaxSuggest"] = false;
else 
	$tdatajobstatus[".isUseAjaxSuggest"] = true;

$tdatajobstatus[".rowHighlite"] = true;


																																																																																																																																															
$tdatajobstatus[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajobstatus[".isUseTimeForSearch"] = false;




$tdatajobstatus[".detailsLinksOnList"] = "1";

$tdatajobstatus[".allSearchFields"] = array();
$tdatajobstatus[".filterFields"] = array();
$tdatajobstatus[".requiredSearchFields"] = array();

$tdatajobstatus[".allSearchFields"][] = "jobstatus_id";
	$tdatajobstatus[".allSearchFields"][] = "job_status";
	$tdatajobstatus[".allSearchFields"][] = "status_detail";
	$tdatajobstatus[".allSearchFields"][] = "applicable_to";
	$tdatajobstatus[".allSearchFields"][] = "actions";
	

$tdatajobstatus[".googleLikeFields"] = array();
$tdatajobstatus[".googleLikeFields"][] = "jobstatus_id";
$tdatajobstatus[".googleLikeFields"][] = "job_status";
$tdatajobstatus[".googleLikeFields"][] = "status_detail";
$tdatajobstatus[".googleLikeFields"][] = "applicable_to";
$tdatajobstatus[".googleLikeFields"][] = "actions";


$tdatajobstatus[".advSearchFields"] = array();
$tdatajobstatus[".advSearchFields"][] = "jobstatus_id";
$tdatajobstatus[".advSearchFields"][] = "job_status";
$tdatajobstatus[".advSearchFields"][] = "status_detail";
$tdatajobstatus[".advSearchFields"][] = "applicable_to";
$tdatajobstatus[".advSearchFields"][] = "actions";

$tdatajobstatus[".tableType"] = "list";

$tdatajobstatus[".printerPageOrientation"] = 0;
$tdatajobstatus[".nPrinterPageScale"] = 100;

$tdatajobstatus[".nPrinterSplitRecords"] = 40;

$tdatajobstatus[".nPrinterPDFSplitRecords"] = 40;



$tdatajobstatus[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatajobstatus[".pageSize"] = 20;




$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatajobstatus[".strOrderBy"] = $tstrOrderBy;

$tdatajobstatus[".orderindexes"] = array();

$tdatajobstatus[".sqlHead"] = "SELECT jobstatus_id,  	job_status,  	status_detail,  	applicable_to,  	actions";
$tdatajobstatus[".sqlFrom"] = "FROM jobstatus";
$tdatajobstatus[".sqlWhereExpr"] = "";
$tdatajobstatus[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajobstatus[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajobstatus[".arrGroupsPerPage"] = $arrGPP;

$tdatajobstatus[".highlightSearchResults"] = true;

$tableKeysjobstatus = array();
$tableKeysjobstatus[] = "jobstatus_id";
$tdatajobstatus[".Keys"] = $tableKeysjobstatus;

$tdatajobstatus[".listFields"] = array();
$tdatajobstatus[".listFields"][] = "jobstatus_id";
$tdatajobstatus[".listFields"][] = "job_status";
$tdatajobstatus[".listFields"][] = "status_detail";
$tdatajobstatus[".listFields"][] = "applicable_to";
$tdatajobstatus[".listFields"][] = "actions";

$tdatajobstatus[".hideMobileList"] = array();


$tdatajobstatus[".viewFields"] = array();
$tdatajobstatus[".viewFields"][] = "jobstatus_id";
$tdatajobstatus[".viewFields"][] = "job_status";
$tdatajobstatus[".viewFields"][] = "status_detail";
$tdatajobstatus[".viewFields"][] = "applicable_to";
$tdatajobstatus[".viewFields"][] = "actions";

$tdatajobstatus[".addFields"] = array();
$tdatajobstatus[".addFields"][] = "job_status";
$tdatajobstatus[".addFields"][] = "status_detail";
$tdatajobstatus[".addFields"][] = "applicable_to";
$tdatajobstatus[".addFields"][] = "actions";

$tdatajobstatus[".masterListFields"] = array();
$tdatajobstatus[".masterListFields"][] = "jobstatus_id";
$tdatajobstatus[".masterListFields"][] = "job_status";
$tdatajobstatus[".masterListFields"][] = "status_detail";
$tdatajobstatus[".masterListFields"][] = "applicable_to";
$tdatajobstatus[".masterListFields"][] = "actions";

$tdatajobstatus[".inlineAddFields"] = array();

$tdatajobstatus[".editFields"] = array();
$tdatajobstatus[".editFields"][] = "job_status";
$tdatajobstatus[".editFields"][] = "status_detail";
$tdatajobstatus[".editFields"][] = "applicable_to";
$tdatajobstatus[".editFields"][] = "actions";

$tdatajobstatus[".inlineEditFields"] = array();

$tdatajobstatus[".exportFields"] = array();
$tdatajobstatus[".exportFields"][] = "jobstatus_id";
$tdatajobstatus[".exportFields"][] = "job_status";
$tdatajobstatus[".exportFields"][] = "status_detail";
$tdatajobstatus[".exportFields"][] = "applicable_to";
$tdatajobstatus[".exportFields"][] = "actions";

$tdatajobstatus[".importFields"] = array();
$tdatajobstatus[".importFields"][] = "jobstatus_id";
$tdatajobstatus[".importFields"][] = "job_status";
$tdatajobstatus[".importFields"][] = "status_detail";
$tdatajobstatus[".importFields"][] = "applicable_to";
$tdatajobstatus[".importFields"][] = "actions";

$tdatajobstatus[".printFields"] = array();
$tdatajobstatus[".printFields"][] = "jobstatus_id";
$tdatajobstatus[".printFields"][] = "job_status";
$tdatajobstatus[".printFields"][] = "status_detail";
$tdatajobstatus[".printFields"][] = "applicable_to";
$tdatajobstatus[".printFields"][] = "actions";

//	jobstatus_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "jobstatus_id";
	$fdata["GoodName"] = "jobstatus_id";
	$fdata["ownerTable"] = "jobstatus";
	$fdata["Label"] = GetFieldLabel("jobstatus","jobstatus_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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

	

	
	$tdatajobstatus["jobstatus_id"] = $fdata;
//	job_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "job_status";
	$fdata["GoodName"] = "job_status";
	$fdata["ownerTable"] = "jobstatus";
	$fdata["Label"] = GetFieldLabel("jobstatus","job_status"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "job_status"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job_status";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";
	
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

	

	
	$tdatajobstatus["job_status"] = $fdata;
//	status_detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "status_detail";
	$fdata["GoodName"] = "status_detail";
	$fdata["ownerTable"] = "jobstatus";
	$fdata["Label"] = GetFieldLabel("jobstatus","status_detail"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "status_detail"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_detail";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";
	
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

	

	
	$tdatajobstatus["status_detail"] = $fdata;
//	applicable_to
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "applicable_to";
	$fdata["GoodName"] = "applicable_to";
	$fdata["ownerTable"] = "jobstatus";
	$fdata["Label"] = GetFieldLabel("jobstatus","applicable_to"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "applicable_to"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "applicable_to";
	
		
		
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

	

	
	$tdatajobstatus["applicable_to"] = $fdata;
//	actions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "actions";
	$fdata["GoodName"] = "actions";
	$fdata["ownerTable"] = "jobstatus";
	$fdata["Label"] = GetFieldLabel("jobstatus","actions"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "actions"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "actions";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";
	
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

	

	
	$tdatajobstatus["actions"] = $fdata;

	
$tables_data["jobstatus"]=&$tdatajobstatus;
$field_labels["jobstatus"] = &$fieldLabelsjobstatus;
$fieldToolTips["jobstatus"] = &$fieldToolTipsjobstatus;
$page_titles["jobstatus"] = &$pageTitlesjobstatus;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["jobstatus"] = array();
//	job
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="job";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "job";
	$detailsParam["dCaptionTable"] = GetTableCaption("job");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	Download Job
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Download Job";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Download_Job";
	$detailsParam["dCaptionTable"] = GetTableCaption("Download_Job");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	Pending Jobs
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Pending Jobs";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Pending_Jobs";
	$detailsParam["dCaptionTable"] = GetTableCaption("Pending_Jobs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	Designer Worksheet
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Designer Worksheet";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Designer_Worksheet";
	$detailsParam["dCaptionTable"] = GetTableCaption("Designer_Worksheet");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	QC Worksheet
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="QC Worksheet";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "QC_Worksheet";
	$detailsParam["dCaptionTable"] = GetTableCaption("QC_Worksheet");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	All Jobs
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="All Jobs";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "All_Jobs";
	$detailsParam["dCaptionTable"] = GetTableCaption("All_Jobs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	Daily Job Report (Accepted)
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Daily Job Report (Accepted)";
		$detailsParam["dOriginalTable"] = "job";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "Daily_Job_Report__Accepted_";
	$detailsParam["dCaptionTable"] = GetTableCaption("Daily_Job_Report__Accepted_");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	Designer Level 2
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Designer Level 2";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Designer_Level_2";
	$detailsParam["dCaptionTable"] = GetTableCaption("Designer_Level_2");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	Urgent Jobs
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Urgent Jobs";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Urgent_Jobs";
	$detailsParam["dCaptionTable"] = GetTableCaption("Urgent_Jobs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	Deadline Missed
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Deadline Missed";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Deadline_Missed";
	$detailsParam["dCaptionTable"] = GetTableCaption("Deadline_Missed");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	Need to Accept
	
	

		$dIndex = 10;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Need to Accept";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Need_to_Accept";
	$detailsParam["dCaptionTable"] = GetTableCaption("Need_to_Accept");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	Need Notify
	
	

		$dIndex = 11;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Need Notify";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Need_Notify";
	$detailsParam["dCaptionTable"] = GetTableCaption("Need_Notify");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	Need Download
	
	

		$dIndex = 12;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Need Download";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Need_Download";
	$detailsParam["dCaptionTable"] = GetTableCaption("Need_Download");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	Need QC
	
	

		$dIndex = 13;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Need QC";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Need_QC";
	$detailsParam["dCaptionTable"] = GetTableCaption("Need_QC");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	Need Upload
	
	

		$dIndex = 14;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Need Upload";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Need_Upload";
	$detailsParam["dCaptionTable"] = GetTableCaption("Need_Upload");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	Pending 14704
	
	

		$dIndex = 15;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Pending 14704";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Pending_14704";
	$detailsParam["dCaptionTable"] = GetTableCaption("Pending_14704");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	Daily Job Report (Notified)
	
	

		$dIndex = 16;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Daily Job Report (Notified)";
		$detailsParam["dOriginalTable"] = "job";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "Daily_Job_Report__Notified_";
	$detailsParam["dCaptionTable"] = GetTableCaption("Daily_Job_Report__Notified_");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	14704 Need QC
	
	

		$dIndex = 17;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="14704 Need QC";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "14704_Need_QC";
	$detailsParam["dCaptionTable"] = GetTableCaption("14704_Need_QC");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	14704 Need Upload
	
	

		$dIndex = 18;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="14704 Need Upload";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "14704_Need_Upload";
	$detailsParam["dCaptionTable"] = GetTableCaption("14704_Need_Upload");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	14704 Need Download
	
	

		$dIndex = 19;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="14704 Need Download";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "14704_Need_Download";
	$detailsParam["dCaptionTable"] = GetTableCaption("14704_Need_Download");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	14704 Need Notify
	
	

		$dIndex = 20;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="14704 Need Notify";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "14704_Need_Notify";
	$detailsParam["dCaptionTable"] = GetTableCaption("14704_Need_Notify");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	14704 Need Accept
	
	

		$dIndex = 21;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="14704 Need Accept";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "14704_Need_Accept";
	$detailsParam["dCaptionTable"] = GetTableCaption("14704_Need_Accept");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	14704 Deadline Missed
	
	

		$dIndex = 22;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="14704 Deadline Missed";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "14704_Deadline_Missed";
	$detailsParam["dCaptionTable"] = GetTableCaption("14704_Deadline_Missed");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	14704 Urgent Jobs
	
	

		$dIndex = 23;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="14704 Urgent Jobs";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "14704_Urgent_Jobs";
	$detailsParam["dCaptionTable"] = GetTableCaption("14704_Urgent_Jobs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	Delected Jobs
	
	

		$dIndex = 24;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Delected Jobs";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Delected_Jobs";
	$detailsParam["dCaptionTable"] = GetTableCaption("Delected_Jobs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	Pending 18442
	
	

		$dIndex = 25;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Pending 18442";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Pending_18442";
	$detailsParam["dCaptionTable"] = GetTableCaption("Pending_18442");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	18442 Deadline Missed
	
	

		$dIndex = 26;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="18442 Deadline Missed";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "18442_Deadline_Missed";
	$detailsParam["dCaptionTable"] = GetTableCaption("18442_Deadline_Missed");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	18442 Urgent Jobs
	
	

		$dIndex = 27;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="18442 Urgent Jobs";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "18442_Urgent_Jobs";
	$detailsParam["dCaptionTable"] = GetTableCaption("18442_Urgent_Jobs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	18442 Need Notify
	
	

		$dIndex = 28;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="18442 Need Notify";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "18442_Need_Notify";
	$detailsParam["dCaptionTable"] = GetTableCaption("18442_Need_Notify");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	18442 Need Upload
	
	

		$dIndex = 29;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="18442 Need Upload";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "18442_Need_Upload";
	$detailsParam["dCaptionTable"] = GetTableCaption("18442_Need_Upload");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	18442 Need QC
	
	

		$dIndex = 30;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="18442 Need QC";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "18442_Need_QC";
	$detailsParam["dCaptionTable"] = GetTableCaption("18442_Need_QC");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	18442 Need Download
	
	

		$dIndex = 31;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="18442 Need Download";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "18442_Need_Download";
	$detailsParam["dCaptionTable"] = GetTableCaption("18442_Need_Download");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	18442 Need Accept
	
	

		$dIndex = 32;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="18442 Need Accept";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "18442_Need_Accept";
	$detailsParam["dCaptionTable"] = GetTableCaption("18442_Need_Accept");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	Monthly Job Report (Accepted)
	
	

		$dIndex = 33;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Monthly Job Report (Accepted)";
		$detailsParam["dOriginalTable"] = "job";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "Monthly_Job_Report__Accepted_";
	$detailsParam["dCaptionTable"] = GetTableCaption("Monthly_Job_Report__Accepted_");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	Monthly Job Report (Notified)
	
	

		$dIndex = 34;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Monthly Job Report (Notified)";
		$detailsParam["dOriginalTable"] = "job";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "Monthly_Job_Report__Notified_";
	$detailsParam["dCaptionTable"] = GetTableCaption("Monthly_Job_Report__Notified_");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	Daily Accepted Riajul
	
	

		$dIndex = 35;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Daily Accepted Riajul";
		$detailsParam["dOriginalTable"] = "job";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "Daily_Accepted_Riajul";
	$detailsParam["dCaptionTable"] = GetTableCaption("Daily_Accepted_Riajul");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	Download Reject Job
	
	

		$dIndex = 36;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Download Reject Job";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Download_Reject_Job";
	$detailsParam["dCaptionTable"] = GetTableCaption("Download_Reject_Job");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
//	QC Worksheet for Correction
	
	

		$dIndex = 37;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="QC Worksheet for Correction";
		$detailsParam["dOriginalTable"] = "rejected_job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "QC_Worksheet_for_Correction";
	$detailsParam["dCaptionTable"] = GetTableCaption("QC_Worksheet_for_Correction");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["jobstatus"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["jobstatus"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["masterKeys"][]="jobstatus_id";

				$detailsTablesData["jobstatus"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["jobstatus"][$dIndex]["detailKeys"][]="jobstatus_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["jobstatus"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_jobstatus()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobstatus_id,  	job_status,  	status_detail,  	applicable_to,  	actions";
$proto0["m_strFrom"] = "FROM jobstatus";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
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
	"m_strName" => "jobstatus_id",
	"m_strTable" => "jobstatus",
	"m_srcTableName" => "jobstatus"
));

$proto5["m_sql"] = "jobstatus_id";
$proto5["m_srcTableName"] = "jobstatus";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "job_status",
	"m_strTable" => "jobstatus",
	"m_srcTableName" => "jobstatus"
));

$proto7["m_sql"] = "job_status";
$proto7["m_srcTableName"] = "jobstatus";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "status_detail",
	"m_strTable" => "jobstatus",
	"m_srcTableName" => "jobstatus"
));

$proto9["m_sql"] = "status_detail";
$proto9["m_srcTableName"] = "jobstatus";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "applicable_to",
	"m_strTable" => "jobstatus",
	"m_srcTableName" => "jobstatus"
));

$proto11["m_sql"] = "applicable_to";
$proto11["m_srcTableName"] = "jobstatus";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "actions",
	"m_strTable" => "jobstatus",
	"m_srcTableName" => "jobstatus"
));

$proto13["m_sql"] = "actions";
$proto13["m_srcTableName"] = "jobstatus";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "jobstatus";
$proto16["m_srcTableName"] = "jobstatus";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "jobstatus_id";
$proto16["m_columns"][] = "job_status";
$proto16["m_columns"][] = "status_detail";
$proto16["m_columns"][] = "applicable_to";
$proto16["m_columns"][] = "actions";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "jobstatus";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "jobstatus";
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
$proto0["m_srcTableName"]="jobstatus";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_jobstatus = createSqlQuery_jobstatus();


	
					
	
$tdatajobstatus[".sqlquery"] = $queryData_jobstatus;

$tableEvents["jobstatus"] = new eventsBase;
$tdatajobstatus[".hasEvents"] = false;

?>