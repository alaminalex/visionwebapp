<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDisplay_Files_Need_to_Prosess = array();	
	$tdataDisplay_Files_Need_to_Prosess[".truncateText"] = true;
	$tdataDisplay_Files_Need_to_Prosess[".NumberOfChars"] = 80; 
	$tdataDisplay_Files_Need_to_Prosess[".ShortName"] = "Display_Files_Need_to_Prosess";
	$tdataDisplay_Files_Need_to_Prosess[".OwnerID"] = "";
	$tdataDisplay_Files_Need_to_Prosess[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsDisplay_Files_Need_to_Prosess = array();
$fieldToolTipsDisplay_Files_Need_to_Prosess = array();
$pageTitlesDisplay_Files_Need_to_Prosess = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDisplay_Files_Need_to_Prosess["English"] = array();
	$fieldToolTipsDisplay_Files_Need_to_Prosess["English"] = array();
	$pageTitlesDisplay_Files_Need_to_Prosess["English"] = array();
	$fieldLabelsDisplay_Files_Need_to_Prosess["English"]["total"] = "Total";
	$fieldToolTipsDisplay_Files_Need_to_Prosess["English"]["total"] = "";
	$fieldLabelsDisplay_Files_Need_to_Prosess["English"]["Files"] = "Files";
	$fieldToolTipsDisplay_Files_Need_to_Prosess["English"]["Files"] = "";
	$fieldLabelsDisplay_Files_Need_to_Prosess["English"]["jobfile_status_id"] = "Jobfile Status Id";
	$fieldToolTipsDisplay_Files_Need_to_Prosess["English"]["jobfile_status_id"] = "";
	if (count($fieldToolTipsDisplay_Files_Need_to_Prosess["English"]))
		$tdataDisplay_Files_Need_to_Prosess[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDisplay_Files_Need_to_Prosess[""] = array();
	$fieldToolTipsDisplay_Files_Need_to_Prosess[""] = array();
	$pageTitlesDisplay_Files_Need_to_Prosess[""] = array();
	$fieldLabelsDisplay_Files_Need_to_Prosess[""]["jobfile_status_id"] = "Jobfile Status Id";
	$fieldToolTipsDisplay_Files_Need_to_Prosess[""]["jobfile_status_id"] = "";
	if (count($fieldToolTipsDisplay_Files_Need_to_Prosess[""]))
		$tdataDisplay_Files_Need_to_Prosess[".isUseToolTips"] = true;
}
	
	
	$tdataDisplay_Files_Need_to_Prosess[".NCSearch"] = true;



$tdataDisplay_Files_Need_to_Prosess[".shortTableName"] = "Display_Files_Need_to_Prosess";
$tdataDisplay_Files_Need_to_Prosess[".nSecOptions"] = 0;
$tdataDisplay_Files_Need_to_Prosess[".recsPerRowList"] = 1;
$tdataDisplay_Files_Need_to_Prosess[".recsPerRowPrint"] = 1;
$tdataDisplay_Files_Need_to_Prosess[".mainTableOwnerID"] = "";
$tdataDisplay_Files_Need_to_Prosess[".moveNext"] = 1;
$tdataDisplay_Files_Need_to_Prosess[".entityType"] = 2;

$tdataDisplay_Files_Need_to_Prosess[".strOriginalTableName"] = "jobfile";




$tdataDisplay_Files_Need_to_Prosess[".showAddInPopup"] = false;

$tdataDisplay_Files_Need_to_Prosess[".showEditInPopup"] = false;

$tdataDisplay_Files_Need_to_Prosess[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDisplay_Files_Need_to_Prosess[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDisplay_Files_Need_to_Prosess[".fieldsForRegister"] = array();

$tdataDisplay_Files_Need_to_Prosess[".listAjax"] = false;

	$tdataDisplay_Files_Need_to_Prosess[".audit"] = false;

	$tdataDisplay_Files_Need_to_Prosess[".locking"] = false;


$tdataDisplay_Files_Need_to_Prosess[".add"] = true;
$tdataDisplay_Files_Need_to_Prosess[".afterAddAction"] = 0;
$tdataDisplay_Files_Need_to_Prosess[".closePopupAfterAdd"] = 1;
$tdataDisplay_Files_Need_to_Prosess[".afterAddActionDetTable"] = "";

$tdataDisplay_Files_Need_to_Prosess[".list"] = true;

$tdataDisplay_Files_Need_to_Prosess[".inlineAdd"] = true;


$tdataDisplay_Files_Need_to_Prosess[".exportTo"] = true;

$tdataDisplay_Files_Need_to_Prosess[".printFriendly"] = true;


$tdataDisplay_Files_Need_to_Prosess[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDisplay_Files_Need_to_Prosess[".searchSaving"] = false;
//

$tdataDisplay_Files_Need_to_Prosess[".showSearchPanel"] = true;
		$tdataDisplay_Files_Need_to_Prosess[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDisplay_Files_Need_to_Prosess[".isUseAjaxSuggest"] = false;
else 
	$tdataDisplay_Files_Need_to_Prosess[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDisplay_Files_Need_to_Prosess[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDisplay_Files_Need_to_Prosess[".isUseTimeForSearch"] = false;





$tdataDisplay_Files_Need_to_Prosess[".allSearchFields"] = array();
$tdataDisplay_Files_Need_to_Prosess[".filterFields"] = array();
$tdataDisplay_Files_Need_to_Prosess[".requiredSearchFields"] = array();

$tdataDisplay_Files_Need_to_Prosess[".allSearchFields"][] = "total";
	$tdataDisplay_Files_Need_to_Prosess[".allSearchFields"][] = "Files";
	$tdataDisplay_Files_Need_to_Prosess[".allSearchFields"][] = "jobfile_status_id";
	

$tdataDisplay_Files_Need_to_Prosess[".googleLikeFields"] = array();
$tdataDisplay_Files_Need_to_Prosess[".googleLikeFields"][] = "total";
$tdataDisplay_Files_Need_to_Prosess[".googleLikeFields"][] = "Files";
$tdataDisplay_Files_Need_to_Prosess[".googleLikeFields"][] = "jobfile_status_id";


$tdataDisplay_Files_Need_to_Prosess[".advSearchFields"] = array();
$tdataDisplay_Files_Need_to_Prosess[".advSearchFields"][] = "total";
$tdataDisplay_Files_Need_to_Prosess[".advSearchFields"][] = "Files";
$tdataDisplay_Files_Need_to_Prosess[".advSearchFields"][] = "jobfile_status_id";

$tdataDisplay_Files_Need_to_Prosess[".tableType"] = "report";

$tdataDisplay_Files_Need_to_Prosess[".printerPageOrientation"] = 0;
$tdataDisplay_Files_Need_to_Prosess[".nPrinterPageScale"] = 100;

$tdataDisplay_Files_Need_to_Prosess[".nPrinterSplitRecords"] = 40;

$tdataDisplay_Files_Need_to_Prosess[".nPrinterPDFSplitRecords"] = 40;



$tdataDisplay_Files_Need_to_Prosess[".geocodingEnabled"] = false;

//report settings
$tdataDisplay_Files_Need_to_Prosess[".printReportLayout"] = 6;	

$tdataDisplay_Files_Need_to_Prosess[".reportPrintPartitionType"] = 1;	
$tdataDisplay_Files_Need_to_Prosess[".reportPrintGroupsPerPage"] = 40;	
	$tdataDisplay_Files_Need_to_Prosess[".reportPrintPDFGroupsPerPage"] = 40;
$tdataDisplay_Files_Need_to_Prosess[".lowGroup"] = 0;



$tdataDisplay_Files_Need_to_Prosess[".pageSize"] = 1;	






$tdataDisplay_Files_Need_to_Prosess[".repShowDet"] = true;

$tdataDisplay_Files_Need_to_Prosess[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDisplay_Files_Need_to_Prosess[".strOrderBy"] = $tstrOrderBy;

$tdataDisplay_Files_Need_to_Prosess[".orderindexes"] = array();

$tdataDisplay_Files_Need_to_Prosess[".sqlHead"] = "SELECT 'Total' AS total,  COUNT(*) AS Files,  jobfile.jobfile_status_id";
$tdataDisplay_Files_Need_to_Prosess[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN job ON jobfile.job_id = job.job_id";
$tdataDisplay_Files_Need_to_Prosess[".sqlWhereExpr"] = "(jobfile.jobfile_status_id !=9) AND (job.jobstatus_id NOT IN (0,1,9,12))";
$tdataDisplay_Files_Need_to_Prosess[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDisplay_Files_Need_to_Prosess[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDisplay_Files_Need_to_Prosess[".arrGroupsPerPage"] = $arrGPP;

$tdataDisplay_Files_Need_to_Prosess[".highlightSearchResults"] = true;

$tableKeysDisplay_Files_Need_to_Prosess = array();
$tdataDisplay_Files_Need_to_Prosess[".Keys"] = $tableKeysDisplay_Files_Need_to_Prosess;

$tdataDisplay_Files_Need_to_Prosess[".listFields"] = array();
$tdataDisplay_Files_Need_to_Prosess[".listFields"][] = "total";
$tdataDisplay_Files_Need_to_Prosess[".listFields"][] = "Files";
$tdataDisplay_Files_Need_to_Prosess[".listFields"][] = "jobfile_status_id";

$tdataDisplay_Files_Need_to_Prosess[".hideMobileList"] = array();


$tdataDisplay_Files_Need_to_Prosess[".viewFields"] = array();
$tdataDisplay_Files_Need_to_Prosess[".viewFields"][] = "total";
$tdataDisplay_Files_Need_to_Prosess[".viewFields"][] = "Files";
$tdataDisplay_Files_Need_to_Prosess[".viewFields"][] = "jobfile_status_id";

$tdataDisplay_Files_Need_to_Prosess[".addFields"] = array();
$tdataDisplay_Files_Need_to_Prosess[".addFields"][] = "jobfile_status_id";

$tdataDisplay_Files_Need_to_Prosess[".masterListFields"] = array();
$tdataDisplay_Files_Need_to_Prosess[".masterListFields"][] = "total";
$tdataDisplay_Files_Need_to_Prosess[".masterListFields"][] = "Files";
$tdataDisplay_Files_Need_to_Prosess[".masterListFields"][] = "jobfile_status_id";

$tdataDisplay_Files_Need_to_Prosess[".inlineAddFields"] = array();
$tdataDisplay_Files_Need_to_Prosess[".inlineAddFields"][] = "jobfile_status_id";

$tdataDisplay_Files_Need_to_Prosess[".editFields"] = array();
$tdataDisplay_Files_Need_to_Prosess[".editFields"][] = "jobfile_status_id";

$tdataDisplay_Files_Need_to_Prosess[".inlineEditFields"] = array();
$tdataDisplay_Files_Need_to_Prosess[".inlineEditFields"][] = "jobfile_status_id";

$tdataDisplay_Files_Need_to_Prosess[".exportFields"] = array();
$tdataDisplay_Files_Need_to_Prosess[".exportFields"][] = "total";
$tdataDisplay_Files_Need_to_Prosess[".exportFields"][] = "Files";
$tdataDisplay_Files_Need_to_Prosess[".exportFields"][] = "jobfile_status_id";

$tdataDisplay_Files_Need_to_Prosess[".importFields"] = array();
$tdataDisplay_Files_Need_to_Prosess[".importFields"][] = "total";
$tdataDisplay_Files_Need_to_Prosess[".importFields"][] = "Files";
$tdataDisplay_Files_Need_to_Prosess[".importFields"][] = "jobfile_status_id";

$tdataDisplay_Files_Need_to_Prosess[".printFields"] = array();
$tdataDisplay_Files_Need_to_Prosess[".printFields"][] = "total";
$tdataDisplay_Files_Need_to_Prosess[".printFields"][] = "Files";
$tdataDisplay_Files_Need_to_Prosess[".printFields"][] = "jobfile_status_id";

//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_Files_Need_to_Prosess","total"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "'Total'";
	
		
		
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
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
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

	

	
	$tdataDisplay_Files_Need_to_Prosess["total"] = $fdata;
//	Files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Files";
	$fdata["GoodName"] = "Files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_Files_Need_to_Prosess","Files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Files"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(*)";
	
		
		
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
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDisplay_Files_Need_to_Prosess["Files"] = $fdata;
//	jobfile_status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "jobfile_status_id";
	$fdata["GoodName"] = "jobfile_status_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Display_Files_Need_to_Prosess","jobfile_status_id"); 
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
	
		$fdata["strField"] = "jobfile_status_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.jobfile_status_id";
	
		
		
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDisplay_Files_Need_to_Prosess["jobfile_status_id"] = $fdata;

	
$tables_data["Display Files Need to Prosess"]=&$tdataDisplay_Files_Need_to_Prosess;
$field_labels["Display_Files_Need_to_Prosess"] = &$fieldLabelsDisplay_Files_Need_to_Prosess;
$fieldToolTips["Display Files Need to Prosess"] = &$fieldToolTipsDisplay_Files_Need_to_Prosess;
$page_titles["Display_Files_Need_to_Prosess"] = &$pageTitlesDisplay_Files_Need_to_Prosess;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Display Files Need to Prosess"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Display Files Need to Prosess"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Display_Files_Need_to_Prosess()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "'Total' AS total,  COUNT(*) AS Files,  jobfile.jobfile_status_id";
$proto0["m_strFrom"] = "FROM jobfile  LEFT OUTER JOIN job ON jobfile.job_id = job.job_id";
$proto0["m_strWhere"] = "(jobfile.jobfile_status_id !=9) AND (job.jobstatus_id NOT IN (0,1,9,12))";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(jobfile.jobfile_status_id !=9) AND (job.jobstatus_id NOT IN (0,1,9,12))";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.jobfile_status_id !=9) AND (job.jobstatus_id NOT IN (0,1,9,12))"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.jobfile_status_id !=9";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Display Files Need to Prosess"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "!=9";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "job.jobstatus_id NOT IN (0,1,9,12)";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Display Files Need to Prosess"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "NOT IN (0,1,9,12)";
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
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto9=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'Total'"
));

$proto9["m_sql"] = "'Total'";
$proto9["m_srcTableName"] = "Display Files Need to Prosess";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "total";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_COUNT";
$proto12["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto12);

$proto11["m_sql"] = "COUNT(*)";
$proto11["m_srcTableName"] = "Display Files Need to Prosess";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "Files";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Display Files Need to Prosess"
));

$proto14["m_sql"] = "jobfile.jobfile_status_id";
$proto14["m_srcTableName"] = "Display Files Need to Prosess";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "jobfile";
$proto17["m_srcTableName"] = "Display Files Need to Prosess";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "jobfile_id";
$proto17["m_columns"][] = "file_url";
$proto17["m_columns"][] = "client_id";
$proto17["m_columns"][] = "work_id";
$proto17["m_columns"][] = "job_id";
$proto17["m_columns"][] = "project_id";
$proto17["m_columns"][] = "folder_name";
$proto17["m_columns"][] = "filename";
$proto17["m_columns"][] = "jobfile_type";
$proto17["m_columns"][] = "jobfile_note";
$proto17["m_columns"][] = "jobfile_status_id";
$proto17["m_columns"][] = "downloader_id";
$proto17["m_columns"][] = "distributor_id";
$proto17["m_columns"][] = "designer_id";
$proto17["m_columns"][] = "qc_id";
$proto17["m_columns"][] = "uploader_id";
$proto17["m_columns"][] = "notifier_id";
$proto17["m_columns"][] = "rejector_id";
$proto17["m_columns"][] = "download_date";
$proto17["m_columns"][] = "distribute_date";
$proto17["m_columns"][] = "start_date";
$proto17["m_columns"][] = "end_date";
$proto17["m_columns"][] = "designer_time";
$proto17["m_columns"][] = "qcstart_date";
$proto17["m_columns"][] = "qcend_date";
$proto17["m_columns"][] = "qc_time";
$proto17["m_columns"][] = "upload_date";
$proto17["m_columns"][] = "notify_date";
$proto17["m_columns"][] = "reject_date";
$proto17["m_columns"][] = "reject_reason";
$proto17["m_columns"][] = "designer2_id";
$proto17["m_columns"][] = "start2_date";
$proto17["m_columns"][] = "end2_date";
$proto17["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "jobfile";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Display Files Need to Prosess";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
												$proto20=array();
$proto20["m_link"] = "SQLL_LEFTJOIN";
			$proto21=array();
$proto21["m_strName"] = "job";
$proto21["m_srcTableName"] = "Display Files Need to Prosess";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "work_id";
$proto21["m_columns"][] = "job_id";
$proto21["m_columns"][] = "client_id";
$proto21["m_columns"][] = "project_id";
$proto21["m_columns"][] = "job_directory";
$proto21["m_columns"][] = "complexity1";
$proto21["m_columns"][] = "complexity2";
$proto21["m_columns"][] = "complexity3";
$proto21["m_columns"][] = "complexity4";
$proto21["m_columns"][] = "complexity5";
$proto21["m_columns"][] = "complexity0";
$proto21["m_columns"][] = "complexityNP";
$proto21["m_columns"][] = "custom_complexity";
$proto21["m_columns"][] = "total_images";
$proto21["m_columns"][] = "is_urgent";
$proto21["m_columns"][] = "urgent_instruction";
$proto21["m_columns"][] = "delivery_duration";
$proto21["m_columns"][] = "delivery_date";
$proto21["m_columns"][] = "notify_options";
$proto21["m_columns"][] = "notes";
$proto21["m_columns"][] = "web_note";
$proto21["m_columns"][] = "comments";
$proto21["m_columns"][] = "pdf_id";
$proto21["m_columns"][] = "pdf_location";
$proto21["m_columns"][] = "allow_batch_process";
$proto21["m_columns"][] = "jobstatus_id";
$proto21["m_columns"][] = "reviewer_id";
$proto21["m_columns"][] = "reviewed_date";
$proto21["m_columns"][] = "accept_id";
$proto21["m_columns"][] = "accepted_date";
$proto21["m_columns"][] = "downloader_id";
$proto21["m_columns"][] = "download_date";
$proto21["m_columns"][] = "distributor_id";
$proto21["m_columns"][] = "distribute_date";
$proto21["m_columns"][] = "designer_list";
$proto21["m_columns"][] = "qcs_list";
$proto21["m_columns"][] = "finish_date";
$proto21["m_columns"][] = "uploader_id";
$proto21["m_columns"][] = "upload_date";
$proto21["m_columns"][] = "notifer_id";
$proto21["m_columns"][] = "notify_date";
$proto21["m_columns"][] = "rejector_id";
$proto21["m_columns"][] = "reject_date";
$proto21["m_columns"][] = "reject_reason";
$proto21["m_columns"][] = "activity_log";
$proto21["m_columns"][] = "time_remaining";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "LEFT OUTER JOIN job ON jobfile.job_id = job.job_id";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "Display Files Need to Prosess";
$proto22=array();
$proto22["m_sql"] = "jobfile.job_id = job.job_id";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Display Files Need to Prosess"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= job.job_id";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Display Files Need to Prosess";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Display_Files_Need_to_Prosess = createSqlQuery_Display_Files_Need_to_Prosess();


	
			
	
$tdataDisplay_Files_Need_to_Prosess[".sqlquery"] = $queryData_Display_Files_Need_to_Prosess;

$tableEvents["Display Files Need to Prosess"] = new eventsBase;
$tdataDisplay_Files_Need_to_Prosess[".hasEvents"] = false;

?>