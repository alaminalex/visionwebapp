<?php
require_once(getabspath("classes/cipherer.php"));




$tdatanot_for_use = array();	
	$tdatanot_for_use[".truncateText"] = true;
	$tdatanot_for_use[".NumberOfChars"] = 80; 
	$tdatanot_for_use[".ShortName"] = "not_for_use";
	$tdatanot_for_use[".OwnerID"] = "";
	$tdatanot_for_use[".OriginalTable"] = "rejected_jobfile2";

//	field labels
$fieldLabelsnot_for_use = array();
$fieldToolTipsnot_for_use = array();
$pageTitlesnot_for_use = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnot_for_use["English"] = array();
	$fieldToolTipsnot_for_use["English"] = array();
	$pageTitlesnot_for_use["English"] = array();
	$fieldLabelsnot_for_use["English"]["jobfile_status_id"] = "Jobfile Status Id";
	$fieldToolTipsnot_for_use["English"]["jobfile_status_id"] = "";
	$fieldLabelsnot_for_use["English"]["job_id"] = "Job Id";
	$fieldToolTipsnot_for_use["English"]["job_id"] = "";
	$fieldLabelsnot_for_use["English"]["filename"] = "Filename";
	$fieldToolTipsnot_for_use["English"]["filename"] = "";
	$fieldLabelsnot_for_use["English"]["filename1"] = "Filename1";
	$fieldToolTipsnot_for_use["English"]["filename1"] = "";
	if (count($fieldToolTipsnot_for_use["English"]))
		$tdatanot_for_use[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsnot_for_use[""] = array();
	$fieldToolTipsnot_for_use[""] = array();
	$pageTitlesnot_for_use[""] = array();
	$fieldLabelsnot_for_use[""]["jobfile_status_id"] = "Jobfile Status Id";
	$fieldToolTipsnot_for_use[""]["jobfile_status_id"] = "";
	$fieldLabelsnot_for_use[""]["job_id"] = "Job Id";
	$fieldToolTipsnot_for_use[""]["job_id"] = "";
	$fieldLabelsnot_for_use[""]["filename"] = "Filename";
	$fieldToolTipsnot_for_use[""]["filename"] = "";
	$fieldLabelsnot_for_use[""]["filename1"] = "Filename1";
	$fieldToolTipsnot_for_use[""]["filename1"] = "";
	if (count($fieldToolTipsnot_for_use[""]))
		$tdatanot_for_use[".isUseToolTips"] = true;
}
	
	
	$tdatanot_for_use[".NCSearch"] = true;



$tdatanot_for_use[".shortTableName"] = "not_for_use";
$tdatanot_for_use[".nSecOptions"] = 0;
$tdatanot_for_use[".recsPerRowList"] = 1;
$tdatanot_for_use[".recsPerRowPrint"] = 1;
$tdatanot_for_use[".mainTableOwnerID"] = "";
$tdatanot_for_use[".moveNext"] = 1;
$tdatanot_for_use[".entityType"] = 1;

$tdatanot_for_use[".strOriginalTableName"] = "rejected_jobfile2";




$tdatanot_for_use[".showAddInPopup"] = false;

$tdatanot_for_use[".showEditInPopup"] = false;

$tdatanot_for_use[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanot_for_use[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanot_for_use[".fieldsForRegister"] = array();

$tdatanot_for_use[".listAjax"] = false;

	$tdatanot_for_use[".audit"] = false;

	$tdatanot_for_use[".locking"] = false;


$tdatanot_for_use[".add"] = true;
$tdatanot_for_use[".afterAddAction"] = 0;
$tdatanot_for_use[".closePopupAfterAdd"] = 1;
$tdatanot_for_use[".afterAddActionDetTable"] = "";

$tdatanot_for_use[".list"] = true;

$tdatanot_for_use[".inlineAdd"] = true;

$tdatanot_for_use[".import"] = true;

$tdatanot_for_use[".exportTo"] = true;

$tdatanot_for_use[".printFriendly"] = true;


$tdatanot_for_use[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatanot_for_use[".searchSaving"] = false;
//

$tdatanot_for_use[".showSearchPanel"] = true;
		$tdatanot_for_use[".flexibleSearch"] = true;		

if (isMobile())
	$tdatanot_for_use[".isUseAjaxSuggest"] = false;
else 
	$tdatanot_for_use[".isUseAjaxSuggest"] = true;

$tdatanot_for_use[".rowHighlite"] = true;


																																																																																																																																															
$tdatanot_for_use[".addPageEvents"] = true;

// use timepicker for search panel
$tdatanot_for_use[".isUseTimeForSearch"] = false;





$tdatanot_for_use[".allSearchFields"] = array();
$tdatanot_for_use[".filterFields"] = array();
$tdatanot_for_use[".requiredSearchFields"] = array();

$tdatanot_for_use[".allSearchFields"][] = "job_id";
	$tdatanot_for_use[".allSearchFields"][] = "jobfile_status_id";
	$tdatanot_for_use[".allSearchFields"][] = "filename";
	$tdatanot_for_use[".allSearchFields"][] = "filename1";
	

$tdatanot_for_use[".googleLikeFields"] = array();
$tdatanot_for_use[".googleLikeFields"][] = "job_id";
$tdatanot_for_use[".googleLikeFields"][] = "jobfile_status_id";
$tdatanot_for_use[".googleLikeFields"][] = "filename";
$tdatanot_for_use[".googleLikeFields"][] = "filename1";


$tdatanot_for_use[".advSearchFields"] = array();
$tdatanot_for_use[".advSearchFields"][] = "job_id";
$tdatanot_for_use[".advSearchFields"][] = "jobfile_status_id";
$tdatanot_for_use[".advSearchFields"][] = "filename";
$tdatanot_for_use[".advSearchFields"][] = "filename1";

$tdatanot_for_use[".tableType"] = "list";

$tdatanot_for_use[".printerPageOrientation"] = 0;
$tdatanot_for_use[".nPrinterPageScale"] = 100;

$tdatanot_for_use[".nPrinterSplitRecords"] = 40;

$tdatanot_for_use[".nPrinterPDFSplitRecords"] = 40;



$tdatanot_for_use[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatanot_for_use[".pageSize"] = 20;

$tdatanot_for_use[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanot_for_use[".strOrderBy"] = $tstrOrderBy;

$tdatanot_for_use[".orderindexes"] = array();

$tdatanot_for_use[".sqlHead"] = "SELECT jobfile.job_id,  jobfile.jobfile_status_id,  jobfile.filename,  rejected_jobfile2.filename AS filename1";
$tdatanot_for_use[".sqlFrom"] = "FROM jobfile  INNER JOIN rejected_jobfile2 ON jobfile.job_id = rejected_jobfile2.previous_job_id AND jobfile.filename = rejected_jobfile2.filename";
$tdatanot_for_use[".sqlWhereExpr"] = "rejected_jobfile2.jobfile_status_id !=10";
$tdatanot_for_use[".sqlTail"] = "";




//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "jobfile_status_id";
$arrViewTabs[] = array('tabId'=>'Others1',
					   'tabName'=>"Others",
					   'nType'=>'1',
					   'nOrder'=>20,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatanot_for_use[".arrViewTabs"] = $arrViewTabs;





//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanot_for_use[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanot_for_use[".arrGroupsPerPage"] = $arrGPP;

$tdatanot_for_use[".highlightSearchResults"] = true;

$tableKeysnot_for_use = array();
$tdatanot_for_use[".Keys"] = $tableKeysnot_for_use;

$tdatanot_for_use[".listFields"] = array();
$tdatanot_for_use[".listFields"][] = "filename1";
$tdatanot_for_use[".listFields"][] = "filename";
$tdatanot_for_use[".listFields"][] = "job_id";
$tdatanot_for_use[".listFields"][] = "jobfile_status_id";

$tdatanot_for_use[".hideMobileList"] = array();


$tdatanot_for_use[".viewFields"] = array();
$tdatanot_for_use[".viewFields"][] = "filename1";
$tdatanot_for_use[".viewFields"][] = "filename";
$tdatanot_for_use[".viewFields"][] = "job_id";
$tdatanot_for_use[".viewFields"][] = "jobfile_status_id";

$tdatanot_for_use[".addFields"] = array();
$tdatanot_for_use[".addFields"][] = "filename";
$tdatanot_for_use[".addFields"][] = "job_id";
$tdatanot_for_use[".addFields"][] = "jobfile_status_id";

$tdatanot_for_use[".masterListFields"] = array();
$tdatanot_for_use[".masterListFields"][] = "job_id";
$tdatanot_for_use[".masterListFields"][] = "jobfile_status_id";
$tdatanot_for_use[".masterListFields"][] = "filename";
$tdatanot_for_use[".masterListFields"][] = "filename1";

$tdatanot_for_use[".inlineAddFields"] = array();
$tdatanot_for_use[".inlineAddFields"][] = "filename";
$tdatanot_for_use[".inlineAddFields"][] = "job_id";
$tdatanot_for_use[".inlineAddFields"][] = "jobfile_status_id";

$tdatanot_for_use[".editFields"] = array();
$tdatanot_for_use[".editFields"][] = "filename";
$tdatanot_for_use[".editFields"][] = "job_id";
$tdatanot_for_use[".editFields"][] = "jobfile_status_id";

$tdatanot_for_use[".inlineEditFields"] = array();
$tdatanot_for_use[".inlineEditFields"][] = "filename";
$tdatanot_for_use[".inlineEditFields"][] = "job_id";
$tdatanot_for_use[".inlineEditFields"][] = "jobfile_status_id";

$tdatanot_for_use[".exportFields"] = array();
$tdatanot_for_use[".exportFields"][] = "job_id";
$tdatanot_for_use[".exportFields"][] = "jobfile_status_id";
$tdatanot_for_use[".exportFields"][] = "filename";
$tdatanot_for_use[".exportFields"][] = "filename1";

$tdatanot_for_use[".importFields"] = array();
$tdatanot_for_use[".importFields"][] = "job_id";
$tdatanot_for_use[".importFields"][] = "jobfile_status_id";
$tdatanot_for_use[".importFields"][] = "filename";
$tdatanot_for_use[".importFields"][] = "filename1";

$tdatanot_for_use[".printFields"] = array();
$tdatanot_for_use[".printFields"][] = "job_id";
$tdatanot_for_use[".printFields"][] = "jobfile_status_id";
$tdatanot_for_use[".printFields"][] = "filename";
$tdatanot_for_use[".printFields"][] = "filename1";

//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("not_for_use","job_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
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
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatanot_for_use["job_id"] = $fdata;
//	jobfile_status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "jobfile_status_id";
	$fdata["GoodName"] = "jobfile_status_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("not_for_use","jobfile_status_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobfile_status_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.jobfile_status_id";
	
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
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
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatanot_for_use["jobfile_status_id"] = $fdata;
//	filename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "filename";
	$fdata["GoodName"] = "filename";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("not_for_use","filename"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
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
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatanot_for_use["filename"] = $fdata;
//	filename1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "filename1";
	$fdata["GoodName"] = "filename1";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("not_for_use","filename1"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "filename"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.filename";
	
		
		
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

	

	
	$tdatanot_for_use["filename1"] = $fdata;

	
$tables_data["not for use"]=&$tdatanot_for_use;
$field_labels["not_for_use"] = &$fieldLabelsnot_for_use;
$fieldToolTips["not for use"] = &$fieldToolTipsnot_for_use;
$page_titles["not_for_use"] = &$pageTitlesnot_for_use;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["not for use"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["not for use"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_not_for_use()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile.job_id,  jobfile.jobfile_status_id,  jobfile.filename,  rejected_jobfile2.filename AS filename1";
$proto0["m_strFrom"] = "FROM jobfile  INNER JOIN rejected_jobfile2 ON jobfile.job_id = rejected_jobfile2.previous_job_id AND jobfile.filename = rejected_jobfile2.filename";
$proto0["m_strWhere"] = "rejected_jobfile2.jobfile_status_id !=10";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "rejected_jobfile2.jobfile_status_id !=10";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "not for use"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "!=10";
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
	"m_strName" => "job_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "not for use"
));

$proto5["m_sql"] = "jobfile.job_id";
$proto5["m_srcTableName"] = "not for use";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "not for use"
));

$proto7["m_sql"] = "jobfile.jobfile_status_id";
$proto7["m_srcTableName"] = "not for use";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "not for use"
));

$proto9["m_sql"] = "jobfile.filename";
$proto9["m_srcTableName"] = "not for use";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "not for use"
));

$proto11["m_sql"] = "rejected_jobfile2.filename";
$proto11["m_srcTableName"] = "not for use";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "filename1";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "jobfile";
$proto14["m_srcTableName"] = "not for use";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "jobfile_id";
$proto14["m_columns"][] = "file_url";
$proto14["m_columns"][] = "client_id";
$proto14["m_columns"][] = "work_id";
$proto14["m_columns"][] = "job_id";
$proto14["m_columns"][] = "project_id";
$proto14["m_columns"][] = "folder_name";
$proto14["m_columns"][] = "filename";
$proto14["m_columns"][] = "jobfile_type";
$proto14["m_columns"][] = "jobfile_note";
$proto14["m_columns"][] = "jobfile_status_id";
$proto14["m_columns"][] = "downloader_id";
$proto14["m_columns"][] = "distributor_id";
$proto14["m_columns"][] = "designer_id";
$proto14["m_columns"][] = "qc_id";
$proto14["m_columns"][] = "uploader_id";
$proto14["m_columns"][] = "notifier_id";
$proto14["m_columns"][] = "rejector_id";
$proto14["m_columns"][] = "download_date";
$proto14["m_columns"][] = "distribute_date";
$proto14["m_columns"][] = "start_date";
$proto14["m_columns"][] = "end_date";
$proto14["m_columns"][] = "designer_time";
$proto14["m_columns"][] = "qcstart_date";
$proto14["m_columns"][] = "qcend_date";
$proto14["m_columns"][] = "qc_time";
$proto14["m_columns"][] = "upload_date";
$proto14["m_columns"][] = "notify_date";
$proto14["m_columns"][] = "reject_date";
$proto14["m_columns"][] = "reject_reason";
$proto14["m_columns"][] = "designer2_id";
$proto14["m_columns"][] = "start2_date";
$proto14["m_columns"][] = "end2_date";
$proto14["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "jobfile";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "not for use";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
												$proto17=array();
$proto17["m_link"] = "SQLL_INNERJOIN";
			$proto18=array();
$proto18["m_strName"] = "rejected_jobfile2";
$proto18["m_srcTableName"] = "not for use";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "jobfile_id";
$proto18["m_columns"][] = "previous_jobfile_id";
$proto18["m_columns"][] = "file_url";
$proto18["m_columns"][] = "client_id";
$proto18["m_columns"][] = "work_id";
$proto18["m_columns"][] = "job_id";
$proto18["m_columns"][] = "previous_job_id";
$proto18["m_columns"][] = "project_id";
$proto18["m_columns"][] = "folder_name";
$proto18["m_columns"][] = "filename";
$proto18["m_columns"][] = "jobfile_type";
$proto18["m_columns"][] = "jobfile_note";
$proto18["m_columns"][] = "jobfile_status_id";
$proto18["m_columns"][] = "downloader_id";
$proto18["m_columns"][] = "distributor_id";
$proto18["m_columns"][] = "designer_id";
$proto18["m_columns"][] = "qc_id";
$proto18["m_columns"][] = "uploader_id";
$proto18["m_columns"][] = "notifier_id";
$proto18["m_columns"][] = "rejector_id";
$proto18["m_columns"][] = "download_date";
$proto18["m_columns"][] = "distribute_date";
$proto18["m_columns"][] = "start_date";
$proto18["m_columns"][] = "end_date";
$proto18["m_columns"][] = "designer_time";
$proto18["m_columns"][] = "qcstart_date";
$proto18["m_columns"][] = "qcend_date";
$proto18["m_columns"][] = "qc_time";
$proto18["m_columns"][] = "upload_date";
$proto18["m_columns"][] = "notify_date";
$proto18["m_columns"][] = "reject_date";
$proto18["m_columns"][] = "reject_reason";
$proto18["m_columns"][] = "reject_reason_others";
$proto18["m_columns"][] = "screenshots";
$proto18["m_columns"][] = "designer2_id";
$proto18["m_columns"][] = "start2_date";
$proto18["m_columns"][] = "end2_date";
$proto18["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "INNER JOIN rejected_jobfile2 ON jobfile.job_id = rejected_jobfile2.previous_job_id AND jobfile.filename = rejected_jobfile2.filename";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "not for use";
$proto19=array();
$proto19["m_sql"] = "jobfile.job_id = rejected_jobfile2.previous_job_id AND jobfile.filename = rejected_jobfile2.filename";
$proto19["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.job_id = rejected_jobfile2.previous_job_id AND jobfile.filename = rejected_jobfile2.filename"
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
						$proto21=array();
$proto21["m_sql"] = "jobfile.job_id = rejected_jobfile2.previous_job_id";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "not for use"
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "= rejected_jobfile2.previous_job_id";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

			$proto19["m_contained"][]=$obj;
						$proto23=array();
$proto23["m_sql"] = "jobfile.filename = rejected_jobfile2.filename";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "not for use"
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "= rejected_jobfile2.filename";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

			$proto19["m_contained"][]=$obj;
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="not for use";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_not_for_use = createSqlQuery_not_for_use();


	
				
	
$tdatanot_for_use[".sqlquery"] = $queryData_not_for_use;

include_once(getabspath("include/not_for_use_events.php"));
$tableEvents["not for use"] = new eventclass_not_for_use;
$tdatanot_for_use[".hasEvents"] = true;

?>