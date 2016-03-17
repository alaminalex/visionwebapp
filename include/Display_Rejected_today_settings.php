<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDisplay_Rejected_today = array();	
	$tdataDisplay_Rejected_today[".truncateText"] = true;
	$tdataDisplay_Rejected_today[".NumberOfChars"] = 80; 
	$tdataDisplay_Rejected_today[".ShortName"] = "Display_Rejected_today";
	$tdataDisplay_Rejected_today[".OwnerID"] = "";
	$tdataDisplay_Rejected_today[".OriginalTable"] = "rejected_jobfile";

//	field labels
$fieldLabelsDisplay_Rejected_today = array();
$fieldToolTipsDisplay_Rejected_today = array();
$pageTitlesDisplay_Rejected_today = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDisplay_Rejected_today["English"] = array();
	$fieldToolTipsDisplay_Rejected_today["English"] = array();
	$pageTitlesDisplay_Rejected_today["English"] = array();
	$fieldLabelsDisplay_Rejected_today["English"]["reject_date"] = "Reject Date";
	$fieldToolTipsDisplay_Rejected_today["English"]["reject_date"] = "";
	$fieldLabelsDisplay_Rejected_today["English"]["files"] = "Files";
	$fieldToolTipsDisplay_Rejected_today["English"]["files"] = "";
	if (count($fieldToolTipsDisplay_Rejected_today["English"]))
		$tdataDisplay_Rejected_today[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDisplay_Rejected_today[""] = array();
	$fieldToolTipsDisplay_Rejected_today[""] = array();
	$pageTitlesDisplay_Rejected_today[""] = array();
	if (count($fieldToolTipsDisplay_Rejected_today[""]))
		$tdataDisplay_Rejected_today[".isUseToolTips"] = true;
}
	
	
	$tdataDisplay_Rejected_today[".NCSearch"] = true;



$tdataDisplay_Rejected_today[".shortTableName"] = "Display_Rejected_today";
$tdataDisplay_Rejected_today[".nSecOptions"] = 0;
$tdataDisplay_Rejected_today[".recsPerRowList"] = 1;
$tdataDisplay_Rejected_today[".recsPerRowPrint"] = 1;
$tdataDisplay_Rejected_today[".mainTableOwnerID"] = "";
$tdataDisplay_Rejected_today[".moveNext"] = 1;
$tdataDisplay_Rejected_today[".entityType"] = 2;

$tdataDisplay_Rejected_today[".strOriginalTableName"] = "rejected_jobfile";




$tdataDisplay_Rejected_today[".showAddInPopup"] = false;

$tdataDisplay_Rejected_today[".showEditInPopup"] = false;

$tdataDisplay_Rejected_today[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDisplay_Rejected_today[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDisplay_Rejected_today[".fieldsForRegister"] = array();

$tdataDisplay_Rejected_today[".listAjax"] = false;

	$tdataDisplay_Rejected_today[".audit"] = false;

	$tdataDisplay_Rejected_today[".locking"] = false;


$tdataDisplay_Rejected_today[".add"] = true;
$tdataDisplay_Rejected_today[".afterAddAction"] = 0;
$tdataDisplay_Rejected_today[".closePopupAfterAdd"] = 1;
$tdataDisplay_Rejected_today[".afterAddActionDetTable"] = "";

$tdataDisplay_Rejected_today[".list"] = true;

$tdataDisplay_Rejected_today[".inlineAdd"] = true;


$tdataDisplay_Rejected_today[".exportTo"] = true;

$tdataDisplay_Rejected_today[".printFriendly"] = true;


$tdataDisplay_Rejected_today[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDisplay_Rejected_today[".searchSaving"] = false;
//

$tdataDisplay_Rejected_today[".showSearchPanel"] = true;
		$tdataDisplay_Rejected_today[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDisplay_Rejected_today[".isUseAjaxSuggest"] = false;
else 
	$tdataDisplay_Rejected_today[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDisplay_Rejected_today[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDisplay_Rejected_today[".isUseTimeForSearch"] = false;





$tdataDisplay_Rejected_today[".allSearchFields"] = array();
$tdataDisplay_Rejected_today[".filterFields"] = array();
$tdataDisplay_Rejected_today[".requiredSearchFields"] = array();

$tdataDisplay_Rejected_today[".allSearchFields"][] = "files";
	

$tdataDisplay_Rejected_today[".googleLikeFields"] = array();
$tdataDisplay_Rejected_today[".googleLikeFields"][] = "files";
$tdataDisplay_Rejected_today[".googleLikeFields"][] = "reject_date";


$tdataDisplay_Rejected_today[".advSearchFields"] = array();
$tdataDisplay_Rejected_today[".advSearchFields"][] = "files";
$tdataDisplay_Rejected_today[".advSearchFields"][] = "reject_date";

$tdataDisplay_Rejected_today[".tableType"] = "report";

$tdataDisplay_Rejected_today[".printerPageOrientation"] = 0;
$tdataDisplay_Rejected_today[".nPrinterPageScale"] = 100;

$tdataDisplay_Rejected_today[".nPrinterSplitRecords"] = 40;

$tdataDisplay_Rejected_today[".nPrinterPDFSplitRecords"] = 40;



$tdataDisplay_Rejected_today[".geocodingEnabled"] = false;

//report settings
$tdataDisplay_Rejected_today[".printReportLayout"] = 6;	

$tdataDisplay_Rejected_today[".reportPrintPartitionType"] = 1;	
$tdataDisplay_Rejected_today[".reportPrintGroupsPerPage"] = 40;	
	$tdataDisplay_Rejected_today[".reportPrintPDFGroupsPerPage"] = 40;
$tdataDisplay_Rejected_today[".lowGroup"] = 0;



$tdataDisplay_Rejected_today[".pageSize"] = 1;	






$tdataDisplay_Rejected_today[".repShowDet"] = true;

$tdataDisplay_Rejected_today[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDisplay_Rejected_today[".strOrderBy"] = $tstrOrderBy;

$tdataDisplay_Rejected_today[".orderindexes"] = array();

$tdataDisplay_Rejected_today[".sqlHead"] = "SELECT COUNT(*) AS files,  reject_date";
$tdataDisplay_Rejected_today[".sqlFrom"] = "FROM rejected_jobfile2";
$tdataDisplay_Rejected_today[".sqlWhereExpr"] = "reject_date > (TIMESTAMPADD(MINUTE,105,DATE(NOW())))";
$tdataDisplay_Rejected_today[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDisplay_Rejected_today[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDisplay_Rejected_today[".arrGroupsPerPage"] = $arrGPP;

$tdataDisplay_Rejected_today[".highlightSearchResults"] = true;

$tableKeysDisplay_Rejected_today = array();
$tdataDisplay_Rejected_today[".Keys"] = $tableKeysDisplay_Rejected_today;

$tdataDisplay_Rejected_today[".listFields"] = array();
$tdataDisplay_Rejected_today[".listFields"][] = "files";
$tdataDisplay_Rejected_today[".listFields"][] = "reject_date";

$tdataDisplay_Rejected_today[".hideMobileList"] = array();


$tdataDisplay_Rejected_today[".viewFields"] = array();
$tdataDisplay_Rejected_today[".viewFields"][] = "files";
$tdataDisplay_Rejected_today[".viewFields"][] = "reject_date";

$tdataDisplay_Rejected_today[".addFields"] = array();
$tdataDisplay_Rejected_today[".addFields"][] = "reject_date";

$tdataDisplay_Rejected_today[".masterListFields"] = array();
$tdataDisplay_Rejected_today[".masterListFields"][] = "files";
$tdataDisplay_Rejected_today[".masterListFields"][] = "reject_date";

$tdataDisplay_Rejected_today[".inlineAddFields"] = array();
$tdataDisplay_Rejected_today[".inlineAddFields"][] = "reject_date";

$tdataDisplay_Rejected_today[".editFields"] = array();
$tdataDisplay_Rejected_today[".editFields"][] = "reject_date";

$tdataDisplay_Rejected_today[".inlineEditFields"] = array();
$tdataDisplay_Rejected_today[".inlineEditFields"][] = "reject_date";

$tdataDisplay_Rejected_today[".exportFields"] = array();
$tdataDisplay_Rejected_today[".exportFields"][] = "files";
$tdataDisplay_Rejected_today[".exportFields"][] = "reject_date";

$tdataDisplay_Rejected_today[".importFields"] = array();
$tdataDisplay_Rejected_today[".importFields"][] = "files";
$tdataDisplay_Rejected_today[".importFields"][] = "reject_date";

$tdataDisplay_Rejected_today[".printFields"] = array();
$tdataDisplay_Rejected_today[".printFields"][] = "files";
$tdataDisplay_Rejected_today[".printFields"][] = "reject_date";

//	files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "files";
	$fdata["GoodName"] = "files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_Rejected_today","files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "files"; 
	
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

	

	
	$tdataDisplay_Rejected_today["files"] = $fdata;
//	reject_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "reject_date";
	$fdata["GoodName"] = "reject_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Display_Rejected_today","reject_date"); 
	$fdata["FieldType"] = 201;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reject_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reject_date";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataDisplay_Rejected_today["reject_date"] = $fdata;

	
$tables_data["Display Rejected today"]=&$tdataDisplay_Rejected_today;
$field_labels["Display_Rejected_today"] = &$fieldLabelsDisplay_Rejected_today;
$fieldToolTips["Display Rejected today"] = &$fieldToolTipsDisplay_Rejected_today;
$page_titles["Display_Rejected_today"] = &$pageTitlesDisplay_Rejected_today;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Display Rejected today"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Display Rejected today"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Display_Rejected_today()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COUNT(*) AS files,  reject_date";
$proto0["m_strFrom"] = "FROM rejected_jobfile2";
$proto0["m_strWhere"] = "reject_date > (TIMESTAMPADD(MINUTE,105,DATE(NOW())))";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "reject_date > (TIMESTAMPADD(MINUTE,105,DATE(NOW())))";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "reject_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Display Rejected today"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "> (TIMESTAMPADD(MINUTE,105,DATE(NOW())))";
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
			$proto6=array();
$proto6["m_functiontype"] = "SQLF_COUNT";
$proto6["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto6["m_arguments"][]=$obj;
$proto6["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto6);

$proto5["m_sql"] = "COUNT(*)";
$proto5["m_srcTableName"] = "Display Rejected today";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "files";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "reject_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Display Rejected today"
));

$proto8["m_sql"] = "reject_date";
$proto8["m_srcTableName"] = "Display Rejected today";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "rejected_jobfile2";
$proto11["m_srcTableName"] = "Display Rejected today";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "jobfile_id";
$proto11["m_columns"][] = "previous_jobfile_id";
$proto11["m_columns"][] = "file_url";
$proto11["m_columns"][] = "client_id";
$proto11["m_columns"][] = "work_id";
$proto11["m_columns"][] = "job_id";
$proto11["m_columns"][] = "previous_job_id";
$proto11["m_columns"][] = "project_id";
$proto11["m_columns"][] = "folder_name";
$proto11["m_columns"][] = "filename";
$proto11["m_columns"][] = "jobfile_type";
$proto11["m_columns"][] = "jobfile_note";
$proto11["m_columns"][] = "jobfile_status_id";
$proto11["m_columns"][] = "downloader_id";
$proto11["m_columns"][] = "distributor_id";
$proto11["m_columns"][] = "designer_id";
$proto11["m_columns"][] = "qc_id";
$proto11["m_columns"][] = "uploader_id";
$proto11["m_columns"][] = "notifier_id";
$proto11["m_columns"][] = "rejector_id";
$proto11["m_columns"][] = "download_date";
$proto11["m_columns"][] = "distribute_date";
$proto11["m_columns"][] = "start_date";
$proto11["m_columns"][] = "end_date";
$proto11["m_columns"][] = "designer_time";
$proto11["m_columns"][] = "qcstart_date";
$proto11["m_columns"][] = "qcend_date";
$proto11["m_columns"][] = "qc_time";
$proto11["m_columns"][] = "upload_date";
$proto11["m_columns"][] = "notify_date";
$proto11["m_columns"][] = "reject_date";
$proto11["m_columns"][] = "reject_reason";
$proto11["m_columns"][] = "reject_reason_others";
$proto11["m_columns"][] = "screenshots";
$proto11["m_columns"][] = "designer2_id";
$proto11["m_columns"][] = "start2_date";
$proto11["m_columns"][] = "end2_date";
$proto11["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "rejected_jobfile2";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "Display Rejected today";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Display Rejected today";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Display_Rejected_today = createSqlQuery_Display_Rejected_today();


	
		
	
$tdataDisplay_Rejected_today[".sqlquery"] = $queryData_Display_Rejected_today;

$tableEvents["Display Rejected today"] = new eventsBase;
$tdataDisplay_Rejected_today[".hasEvents"] = false;

?>