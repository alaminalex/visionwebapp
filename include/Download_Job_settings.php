<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDownload_Job = array();	
	$tdataDownload_Job[".truncateText"] = true;
	$tdataDownload_Job[".NumberOfChars"] = 80; 
	$tdataDownload_Job[".ShortName"] = "Download_Job";
	$tdataDownload_Job[".OwnerID"] = "";
	$tdataDownload_Job[".OriginalTable"] = "job";

//	field labels
$fieldLabelsDownload_Job = array();
$fieldToolTipsDownload_Job = array();
$pageTitlesDownload_Job = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDownload_Job["English"] = array();
	$fieldToolTipsDownload_Job["English"] = array();
	$pageTitlesDownload_Job["English"] = array();
	$fieldLabelsDownload_Job["English"]["work_id"] = "Work Id";
	$fieldToolTipsDownload_Job["English"]["work_id"] = "";
	$fieldLabelsDownload_Job["English"]["job_id"] = "Job Id";
	$fieldToolTipsDownload_Job["English"]["job_id"] = "";
	$fieldLabelsDownload_Job["English"]["client_id"] = "Client Id";
	$fieldToolTipsDownload_Job["English"]["client_id"] = "";
	$fieldLabelsDownload_Job["English"]["jobstatus_id"] = "Jobstatus Id";
	$fieldToolTipsDownload_Job["English"]["jobstatus_id"] = "";
	if (count($fieldToolTipsDownload_Job["English"]))
		$tdataDownload_Job[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDownload_Job[""] = array();
	$fieldToolTipsDownload_Job[""] = array();
	$pageTitlesDownload_Job[""] = array();
	if (count($fieldToolTipsDownload_Job[""]))
		$tdataDownload_Job[".isUseToolTips"] = true;
}
	
	
	$tdataDownload_Job[".NCSearch"] = true;



$tdataDownload_Job[".shortTableName"] = "Download_Job";
$tdataDownload_Job[".nSecOptions"] = 0;
$tdataDownload_Job[".recsPerRowList"] = 1;
$tdataDownload_Job[".recsPerRowPrint"] = 1;
$tdataDownload_Job[".mainTableOwnerID"] = "";
$tdataDownload_Job[".moveNext"] = 1;
$tdataDownload_Job[".entityType"] = 1;

$tdataDownload_Job[".strOriginalTableName"] = "job";




$tdataDownload_Job[".showAddInPopup"] = false;

$tdataDownload_Job[".showEditInPopup"] = false;

$tdataDownload_Job[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDownload_Job[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDownload_Job[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataDownload_Job[".listAjax"] = true;
else 
	$tdataDownload_Job[".listAjax"] = false;

	$tdataDownload_Job[".audit"] = false;

	$tdataDownload_Job[".locking"] = false;


$tdataDownload_Job[".add"] = true;
$tdataDownload_Job[".afterAddAction"] = 0;
$tdataDownload_Job[".closePopupAfterAdd"] = 1;
$tdataDownload_Job[".afterAddActionDetTable"] = "";

$tdataDownload_Job[".list"] = true;

$tdataDownload_Job[".view"] = true;

$tdataDownload_Job[".import"] = true;

$tdataDownload_Job[".exportTo"] = true;

$tdataDownload_Job[".printFriendly"] = true;

$tdataDownload_Job[".delete"] = true;

$tdataDownload_Job[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDownload_Job[".searchSaving"] = false;
//

$tdataDownload_Job[".showSearchPanel"] = true;
		$tdataDownload_Job[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDownload_Job[".isUseAjaxSuggest"] = false;
else 
	$tdataDownload_Job[".isUseAjaxSuggest"] = true;

$tdataDownload_Job[".rowHighlite"] = true;


																																																																																																																																																																													
			
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								$tdataDownload_Job[".isUsebuttonHandlers"] = true;

$tdataDownload_Job[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDownload_Job[".isUseTimeForSearch"] = false;





$tdataDownload_Job[".allSearchFields"] = array();
$tdataDownload_Job[".filterFields"] = array();
$tdataDownload_Job[".requiredSearchFields"] = array();

$tdataDownload_Job[".allSearchFields"][] = "work_id";
	$tdataDownload_Job[".allSearchFields"][] = "job_id";
	$tdataDownload_Job[".allSearchFields"][] = "client_id";
	$tdataDownload_Job[".allSearchFields"][] = "jobstatus_id";
	

$tdataDownload_Job[".googleLikeFields"] = array();
$tdataDownload_Job[".googleLikeFields"][] = "work_id";
$tdataDownload_Job[".googleLikeFields"][] = "job_id";
$tdataDownload_Job[".googleLikeFields"][] = "client_id";
$tdataDownload_Job[".googleLikeFields"][] = "jobstatus_id";


$tdataDownload_Job[".advSearchFields"] = array();
$tdataDownload_Job[".advSearchFields"][] = "work_id";
$tdataDownload_Job[".advSearchFields"][] = "job_id";
$tdataDownload_Job[".advSearchFields"][] = "client_id";
$tdataDownload_Job[".advSearchFields"][] = "jobstatus_id";

$tdataDownload_Job[".tableType"] = "list";

$tdataDownload_Job[".printerPageOrientation"] = 0;
$tdataDownload_Job[".nPrinterPageScale"] = 100;

$tdataDownload_Job[".nPrinterSplitRecords"] = 40;

$tdataDownload_Job[".nPrinterPDFSplitRecords"] = 40;



$tdataDownload_Job[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataDownload_Job[".pageSize"] = 20;

$tdataDownload_Job[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDownload_Job[".strOrderBy"] = $tstrOrderBy;

$tdataDownload_Job[".orderindexes"] = array();

$tdataDownload_Job[".sqlHead"] = "SELECT work_id,  job_id,  client_id,  jobstatus_id";
$tdataDownload_Job[".sqlFrom"] = "FROM job";
$tdataDownload_Job[".sqlWhereExpr"] = "";
$tdataDownload_Job[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDownload_Job[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDownload_Job[".arrGroupsPerPage"] = $arrGPP;

$tdataDownload_Job[".highlightSearchResults"] = true;

$tableKeysDownload_Job = array();
$tableKeysDownload_Job[] = "work_id";
$tdataDownload_Job[".Keys"] = $tableKeysDownload_Job;

$tdataDownload_Job[".listFields"] = array();
$tdataDownload_Job[".listFields"][] = "work_id";
$tdataDownload_Job[".listFields"][] = "job_id";
$tdataDownload_Job[".listFields"][] = "jobstatus_id";

$tdataDownload_Job[".hideMobileList"] = array();


$tdataDownload_Job[".viewFields"] = array();
$tdataDownload_Job[".viewFields"][] = "work_id";
$tdataDownload_Job[".viewFields"][] = "job_id";
$tdataDownload_Job[".viewFields"][] = "client_id";
$tdataDownload_Job[".viewFields"][] = "jobstatus_id";

$tdataDownload_Job[".addFields"] = array();
$tdataDownload_Job[".addFields"][] = "work_id";
$tdataDownload_Job[".addFields"][] = "job_id";
$tdataDownload_Job[".addFields"][] = "client_id";
$tdataDownload_Job[".addFields"][] = "jobstatus_id";

$tdataDownload_Job[".masterListFields"] = array();
$tdataDownload_Job[".masterListFields"][] = "work_id";
$tdataDownload_Job[".masterListFields"][] = "job_id";
$tdataDownload_Job[".masterListFields"][] = "client_id";
$tdataDownload_Job[".masterListFields"][] = "jobstatus_id";

$tdataDownload_Job[".inlineAddFields"] = array();

$tdataDownload_Job[".editFields"] = array();

$tdataDownload_Job[".inlineEditFields"] = array();

$tdataDownload_Job[".exportFields"] = array();
$tdataDownload_Job[".exportFields"][] = "work_id";
$tdataDownload_Job[".exportFields"][] = "job_id";
$tdataDownload_Job[".exportFields"][] = "client_id";
$tdataDownload_Job[".exportFields"][] = "jobstatus_id";

$tdataDownload_Job[".importFields"] = array();
$tdataDownload_Job[".importFields"][] = "work_id";
$tdataDownload_Job[".importFields"][] = "job_id";
$tdataDownload_Job[".importFields"][] = "client_id";
$tdataDownload_Job[".importFields"][] = "jobstatus_id";

$tdataDownload_Job[".printFields"] = array();
$tdataDownload_Job[".printFields"][] = "work_id";
$tdataDownload_Job[".printFields"][] = "job_id";
$tdataDownload_Job[".printFields"][] = "client_id";
$tdataDownload_Job[".printFields"][] = "jobstatus_id";

//	work_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_id";
	$fdata["GoodName"] = "work_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Download_Job","work_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
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
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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

	

	
	$tdataDownload_Job["work_id"] = $fdata;
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Download_Job","job_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
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
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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

	

	
	$tdataDownload_Job["job_id"] = $fdata;
//	client_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "client_id";
	$fdata["GoodName"] = "client_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Download_Job","client_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "client_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "client_id";
	
		
		
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
	$edata["LookupTable"] = "clients";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "client_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "client_name";
	
		
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

	

	
	$tdataDownload_Job["client_id"] = $fdata;
//	jobstatus_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "jobstatus_id";
	$fdata["GoodName"] = "jobstatus_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Download_Job","jobstatus_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
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

	

	
	$tdataDownload_Job["jobstatus_id"] = $fdata;

	
$tables_data["Download Job"]=&$tdataDownload_Job;
$field_labels["Download_Job"] = &$fieldLabelsDownload_Job;
$fieldToolTips["Download Job"] = &$fieldToolTipsDownload_Job;
$page_titles["Download_Job"] = &$pageTitlesDownload_Job;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Download Job"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Download Job"] = array();


	
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
					$masterTablesData["Download Job"][0] = $masterParams;	
				$masterTablesData["Download Job"][0]["masterKeys"] = array();
	$masterTablesData["Download Job"][0]["masterKeys"][]="user_id";
				$masterTablesData["Download Job"][0]["detailKeys"] = array();
	$masterTablesData["Download Job"][0]["detailKeys"][]="notifer_id";
		
	
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
					$masterTablesData["Download Job"][1] = $masterParams;	
				$masterTablesData["Download Job"][1]["masterKeys"] = array();
	$masterTablesData["Download Job"][1]["masterKeys"][]="notify_option_id";
				$masterTablesData["Download Job"][1]["detailKeys"] = array();
	$masterTablesData["Download Job"][1]["detailKeys"][]="notify_options";
		
	
				$strOriginalDetailsTable="jobstatus";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="jobstatus";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "jobstatus";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "1";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Download Job"][2] = $masterParams;	
				$masterTablesData["Download Job"][2]["masterKeys"] = array();
	$masterTablesData["Download Job"][2]["masterKeys"][]="jobstatus_id";
				$masterTablesData["Download Job"][2]["detailKeys"] = array();
	$masterTablesData["Download Job"][2]["detailKeys"][]="jobstatus_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Download_Job()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_id,  job_id,  client_id,  jobstatus_id";
$proto0["m_strFrom"] = "FROM job";
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
	"m_strName" => "work_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Download Job"
));

$proto5["m_sql"] = "work_id";
$proto5["m_srcTableName"] = "Download Job";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Download Job"
));

$proto7["m_sql"] = "job_id";
$proto7["m_srcTableName"] = "Download Job";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "client_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Download Job"
));

$proto9["m_sql"] = "client_id";
$proto9["m_srcTableName"] = "Download Job";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Download Job"
));

$proto11["m_sql"] = "jobstatus_id";
$proto11["m_srcTableName"] = "Download Job";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "job";
$proto14["m_srcTableName"] = "Download Job";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "work_id";
$proto14["m_columns"][] = "job_id";
$proto14["m_columns"][] = "client_id";
$proto14["m_columns"][] = "project_id";
$proto14["m_columns"][] = "job_directory";
$proto14["m_columns"][] = "complexity1";
$proto14["m_columns"][] = "complexity2";
$proto14["m_columns"][] = "complexity3";
$proto14["m_columns"][] = "complexity4";
$proto14["m_columns"][] = "complexity5";
$proto14["m_columns"][] = "complexity0";
$proto14["m_columns"][] = "complexityNP";
$proto14["m_columns"][] = "custom_complexity";
$proto14["m_columns"][] = "total_images";
$proto14["m_columns"][] = "is_urgent";
$proto14["m_columns"][] = "urgent_instruction";
$proto14["m_columns"][] = "delivery_duration";
$proto14["m_columns"][] = "delivery_date";
$proto14["m_columns"][] = "notify_options";
$proto14["m_columns"][] = "notes";
$proto14["m_columns"][] = "web_note";
$proto14["m_columns"][] = "comments";
$proto14["m_columns"][] = "pdf_id";
$proto14["m_columns"][] = "pdf_location";
$proto14["m_columns"][] = "allow_batch_process";
$proto14["m_columns"][] = "jobstatus_id";
$proto14["m_columns"][] = "reviewer_id";
$proto14["m_columns"][] = "reviewed_date";
$proto14["m_columns"][] = "accept_id";
$proto14["m_columns"][] = "accepted_date";
$proto14["m_columns"][] = "downloader_id";
$proto14["m_columns"][] = "download_date";
$proto14["m_columns"][] = "distributor_id";
$proto14["m_columns"][] = "distribute_date";
$proto14["m_columns"][] = "designer_list";
$proto14["m_columns"][] = "qcs_list";
$proto14["m_columns"][] = "finish_date";
$proto14["m_columns"][] = "uploader_id";
$proto14["m_columns"][] = "upload_date";
$proto14["m_columns"][] = "notifer_id";
$proto14["m_columns"][] = "notify_date";
$proto14["m_columns"][] = "rejector_id";
$proto14["m_columns"][] = "reject_date";
$proto14["m_columns"][] = "reject_reason";
$proto14["m_columns"][] = "activity_log";
$proto14["m_columns"][] = "time_remaining";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "job";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "Download Job";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Download Job";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Download_Job = createSqlQuery_Download_Job();


	
				
	
$tdataDownload_Job[".sqlquery"] = $queryData_Download_Job;

include_once(getabspath("include/Download_Job_events.php"));
$tableEvents["Download Job"] = new eventclass_Download_Job;
$tdataDownload_Job[".hasEvents"] = true;

?>