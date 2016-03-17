<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDownload_Rejected_Job = array();	
	$tdataDownload_Rejected_Job[".truncateText"] = true;
	$tdataDownload_Rejected_Job[".NumberOfChars"] = 80; 
	$tdataDownload_Rejected_Job[".ShortName"] = "Download_Rejected_Job";
	$tdataDownload_Rejected_Job[".OwnerID"] = "";
	$tdataDownload_Rejected_Job[".OriginalTable"] = "job";

//	field labels
$fieldLabelsDownload_Rejected_Job = array();
$fieldToolTipsDownload_Rejected_Job = array();
$pageTitlesDownload_Rejected_Job = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDownload_Rejected_Job["English"] = array();
	$fieldToolTipsDownload_Rejected_Job["English"] = array();
	$pageTitlesDownload_Rejected_Job["English"] = array();
	$fieldLabelsDownload_Rejected_Job["English"]["work_id"] = "Work Id";
	$fieldToolTipsDownload_Rejected_Job["English"]["work_id"] = "";
	$fieldLabelsDownload_Rejected_Job["English"]["job_id"] = "Job Id";
	$fieldToolTipsDownload_Rejected_Job["English"]["job_id"] = "";
	$fieldLabelsDownload_Rejected_Job["English"]["client_id"] = "Client Id";
	$fieldToolTipsDownload_Rejected_Job["English"]["client_id"] = "";
	$fieldLabelsDownload_Rejected_Job["English"]["jobstatus_id"] = "Jobstatus Id";
	$fieldToolTipsDownload_Rejected_Job["English"]["jobstatus_id"] = "";
	if (count($fieldToolTipsDownload_Rejected_Job["English"]))
		$tdataDownload_Rejected_Job[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDownload_Rejected_Job[""] = array();
	$fieldToolTipsDownload_Rejected_Job[""] = array();
	$pageTitlesDownload_Rejected_Job[""] = array();
	if (count($fieldToolTipsDownload_Rejected_Job[""]))
		$tdataDownload_Rejected_Job[".isUseToolTips"] = true;
}
	
	
	$tdataDownload_Rejected_Job[".NCSearch"] = true;



$tdataDownload_Rejected_Job[".shortTableName"] = "Download_Rejected_Job";
$tdataDownload_Rejected_Job[".nSecOptions"] = 0;
$tdataDownload_Rejected_Job[".recsPerRowList"] = 1;
$tdataDownload_Rejected_Job[".recsPerRowPrint"] = 1;
$tdataDownload_Rejected_Job[".mainTableOwnerID"] = "";
$tdataDownload_Rejected_Job[".moveNext"] = 1;
$tdataDownload_Rejected_Job[".entityType"] = 1;

$tdataDownload_Rejected_Job[".strOriginalTableName"] = "job";




$tdataDownload_Rejected_Job[".showAddInPopup"] = false;

$tdataDownload_Rejected_Job[".showEditInPopup"] = false;

$tdataDownload_Rejected_Job[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDownload_Rejected_Job[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDownload_Rejected_Job[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataDownload_Rejected_Job[".listAjax"] = true;
else 
	$tdataDownload_Rejected_Job[".listAjax"] = false;

	$tdataDownload_Rejected_Job[".audit"] = false;

	$tdataDownload_Rejected_Job[".locking"] = false;



$tdataDownload_Rejected_Job[".list"] = true;

$tdataDownload_Rejected_Job[".view"] = true;

$tdataDownload_Rejected_Job[".import"] = true;

$tdataDownload_Rejected_Job[".exportTo"] = true;

$tdataDownload_Rejected_Job[".printFriendly"] = true;

$tdataDownload_Rejected_Job[".delete"] = true;

$tdataDownload_Rejected_Job[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDownload_Rejected_Job[".searchSaving"] = false;
//

$tdataDownload_Rejected_Job[".showSearchPanel"] = true;
		$tdataDownload_Rejected_Job[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDownload_Rejected_Job[".isUseAjaxSuggest"] = false;
else 
	$tdataDownload_Rejected_Job[".isUseAjaxSuggest"] = true;

$tdataDownload_Rejected_Job[".rowHighlite"] = true;


																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				
			
$tdataDownload_Rejected_Job[".isUsebuttonHandlers"] = true;

$tdataDownload_Rejected_Job[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDownload_Rejected_Job[".isUseTimeForSearch"] = false;





$tdataDownload_Rejected_Job[".allSearchFields"] = array();
$tdataDownload_Rejected_Job[".filterFields"] = array();
$tdataDownload_Rejected_Job[".requiredSearchFields"] = array();

$tdataDownload_Rejected_Job[".allSearchFields"][] = "work_id";
	$tdataDownload_Rejected_Job[".allSearchFields"][] = "job_id";
	$tdataDownload_Rejected_Job[".allSearchFields"][] = "client_id";
	$tdataDownload_Rejected_Job[".allSearchFields"][] = "jobstatus_id";
	

$tdataDownload_Rejected_Job[".googleLikeFields"] = array();
$tdataDownload_Rejected_Job[".googleLikeFields"][] = "work_id";
$tdataDownload_Rejected_Job[".googleLikeFields"][] = "job_id";
$tdataDownload_Rejected_Job[".googleLikeFields"][] = "client_id";
$tdataDownload_Rejected_Job[".googleLikeFields"][] = "jobstatus_id";


$tdataDownload_Rejected_Job[".advSearchFields"] = array();
$tdataDownload_Rejected_Job[".advSearchFields"][] = "work_id";
$tdataDownload_Rejected_Job[".advSearchFields"][] = "job_id";
$tdataDownload_Rejected_Job[".advSearchFields"][] = "client_id";
$tdataDownload_Rejected_Job[".advSearchFields"][] = "jobstatus_id";

$tdataDownload_Rejected_Job[".tableType"] = "list";

$tdataDownload_Rejected_Job[".printerPageOrientation"] = 0;
$tdataDownload_Rejected_Job[".nPrinterPageScale"] = 100;

$tdataDownload_Rejected_Job[".nPrinterSplitRecords"] = 40;

$tdataDownload_Rejected_Job[".nPrinterPDFSplitRecords"] = 40;



$tdataDownload_Rejected_Job[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataDownload_Rejected_Job[".pageSize"] = 20;

$tdataDownload_Rejected_Job[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDownload_Rejected_Job[".strOrderBy"] = $tstrOrderBy;

$tdataDownload_Rejected_Job[".orderindexes"] = array();

$tdataDownload_Rejected_Job[".sqlHead"] = "SELECT work_id,  job_id,  client_id,  jobstatus_id";
$tdataDownload_Rejected_Job[".sqlFrom"] = "FROM job";
$tdataDownload_Rejected_Job[".sqlWhereExpr"] = "";
$tdataDownload_Rejected_Job[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDownload_Rejected_Job[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDownload_Rejected_Job[".arrGroupsPerPage"] = $arrGPP;

$tdataDownload_Rejected_Job[".highlightSearchResults"] = true;

$tableKeysDownload_Rejected_Job = array();
$tableKeysDownload_Rejected_Job[] = "work_id";
$tdataDownload_Rejected_Job[".Keys"] = $tableKeysDownload_Rejected_Job;

$tdataDownload_Rejected_Job[".listFields"] = array();
$tdataDownload_Rejected_Job[".listFields"][] = "work_id";
$tdataDownload_Rejected_Job[".listFields"][] = "job_id";
$tdataDownload_Rejected_Job[".listFields"][] = "jobstatus_id";

$tdataDownload_Rejected_Job[".hideMobileList"] = array();


$tdataDownload_Rejected_Job[".viewFields"] = array();
$tdataDownload_Rejected_Job[".viewFields"][] = "work_id";
$tdataDownload_Rejected_Job[".viewFields"][] = "job_id";
$tdataDownload_Rejected_Job[".viewFields"][] = "client_id";
$tdataDownload_Rejected_Job[".viewFields"][] = "jobstatus_id";

$tdataDownload_Rejected_Job[".addFields"] = array();

$tdataDownload_Rejected_Job[".masterListFields"] = array();
$tdataDownload_Rejected_Job[".masterListFields"][] = "work_id";
$tdataDownload_Rejected_Job[".masterListFields"][] = "job_id";
$tdataDownload_Rejected_Job[".masterListFields"][] = "client_id";
$tdataDownload_Rejected_Job[".masterListFields"][] = "jobstatus_id";

$tdataDownload_Rejected_Job[".inlineAddFields"] = array();

$tdataDownload_Rejected_Job[".editFields"] = array();

$tdataDownload_Rejected_Job[".inlineEditFields"] = array();

$tdataDownload_Rejected_Job[".exportFields"] = array();
$tdataDownload_Rejected_Job[".exportFields"][] = "work_id";
$tdataDownload_Rejected_Job[".exportFields"][] = "job_id";
$tdataDownload_Rejected_Job[".exportFields"][] = "client_id";
$tdataDownload_Rejected_Job[".exportFields"][] = "jobstatus_id";

$tdataDownload_Rejected_Job[".importFields"] = array();
$tdataDownload_Rejected_Job[".importFields"][] = "work_id";
$tdataDownload_Rejected_Job[".importFields"][] = "job_id";
$tdataDownload_Rejected_Job[".importFields"][] = "client_id";
$tdataDownload_Rejected_Job[".importFields"][] = "jobstatus_id";

$tdataDownload_Rejected_Job[".printFields"] = array();
$tdataDownload_Rejected_Job[".printFields"][] = "work_id";
$tdataDownload_Rejected_Job[".printFields"][] = "job_id";
$tdataDownload_Rejected_Job[".printFields"][] = "client_id";
$tdataDownload_Rejected_Job[".printFields"][] = "jobstatus_id";

//	work_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_id";
	$fdata["GoodName"] = "work_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Download_Rejected_Job","work_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdataDownload_Rejected_Job["work_id"] = $fdata;
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Download_Rejected_Job","job_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdataDownload_Rejected_Job["job_id"] = $fdata;
//	client_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "client_id";
	$fdata["GoodName"] = "client_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Download_Rejected_Job","client_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
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

	

	
	$tdataDownload_Rejected_Job["client_id"] = $fdata;
//	jobstatus_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "jobstatus_id";
	$fdata["GoodName"] = "jobstatus_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Download_Rejected_Job","jobstatus_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
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

	

	
	$tdataDownload_Rejected_Job["jobstatus_id"] = $fdata;

	
$tables_data["Download Rejected Job"]=&$tdataDownload_Rejected_Job;
$field_labels["Download_Rejected_Job"] = &$fieldLabelsDownload_Rejected_Job;
$fieldToolTips["Download Rejected Job"] = &$fieldToolTipsDownload_Rejected_Job;
$page_titles["Download_Rejected_Job"] = &$pageTitlesDownload_Rejected_Job;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Download Rejected Job"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Download Rejected Job"] = array();


	
				$strOriginalDetailsTable="clients";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="clients";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "clients";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Download Rejected Job"][0] = $masterParams;	
				$masterTablesData["Download Rejected Job"][0]["masterKeys"] = array();
	$masterTablesData["Download Rejected Job"][0]["masterKeys"][]="client_id";
				$masterTablesData["Download Rejected Job"][0]["detailKeys"] = array();
	$masterTablesData["Download Rejected Job"][0]["detailKeys"][]="client_id";
		
	
				$strOriginalDetailsTable="jobstatus";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="jobstatus";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "jobstatus";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Download Rejected Job"][1] = $masterParams;	
				$masterTablesData["Download Rejected Job"][1]["masterKeys"] = array();
	$masterTablesData["Download Rejected Job"][1]["masterKeys"][]="jobstatus_id";
				$masterTablesData["Download Rejected Job"][1]["detailKeys"] = array();
	$masterTablesData["Download Rejected Job"][1]["detailKeys"][]="jobstatus_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Download_Rejected_Job()
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
	"m_srcTableName" => "Download Rejected Job"
));

$proto5["m_sql"] = "work_id";
$proto5["m_srcTableName"] = "Download Rejected Job";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Download Rejected Job"
));

$proto7["m_sql"] = "job_id";
$proto7["m_srcTableName"] = "Download Rejected Job";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "client_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Download Rejected Job"
));

$proto9["m_sql"] = "client_id";
$proto9["m_srcTableName"] = "Download Rejected Job";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Download Rejected Job"
));

$proto11["m_sql"] = "jobstatus_id";
$proto11["m_srcTableName"] = "Download Rejected Job";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "job";
$proto14["m_srcTableName"] = "Download Rejected Job";
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
$proto13["m_srcTableName"] = "Download Rejected Job";
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
$proto0["m_srcTableName"]="Download Rejected Job";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Download_Rejected_Job = createSqlQuery_Download_Rejected_Job();


	
				
	
$tdataDownload_Rejected_Job[".sqlquery"] = $queryData_Download_Rejected_Job;

include_once(getabspath("include/Download_Rejected_Job_events.php"));
$tableEvents["Download Rejected Job"] = new eventclass_Download_Rejected_Job;
$tdataDownload_Rejected_Job[".hasEvents"] = true;

?>