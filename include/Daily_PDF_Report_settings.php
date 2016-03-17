<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDaily_PDF_Report = array();	
	$tdataDaily_PDF_Report[".truncateText"] = true;
	$tdataDaily_PDF_Report[".NumberOfChars"] = 80; 
	$tdataDaily_PDF_Report[".ShortName"] = "Daily_PDF_Report";
	$tdataDaily_PDF_Report[".OwnerID"] = "";
	$tdataDaily_PDF_Report[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsDaily_PDF_Report = array();
$fieldToolTipsDaily_PDF_Report = array();
$pageTitlesDaily_PDF_Report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDaily_PDF_Report["English"] = array();
	$fieldToolTipsDaily_PDF_Report["English"] = array();
	$pageTitlesDaily_PDF_Report["English"] = array();
	$fieldLabelsDaily_PDF_Report["English"]["pdf_name"] = "Pdf Name";
	$fieldToolTipsDaily_PDF_Report["English"]["pdf_name"] = "";
	$fieldLabelsDaily_PDF_Report["English"]["totals"] = "Totals";
	$fieldToolTipsDaily_PDF_Report["English"]["totals"] = "";
	if (count($fieldToolTipsDaily_PDF_Report["English"]))
		$tdataDaily_PDF_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDaily_PDF_Report[""] = array();
	$fieldToolTipsDaily_PDF_Report[""] = array();
	$pageTitlesDaily_PDF_Report[""] = array();
	$fieldLabelsDaily_PDF_Report[""]["pdf_name"] = "Pdf Name";
	$fieldToolTipsDaily_PDF_Report[""]["pdf_name"] = "";
	$fieldLabelsDaily_PDF_Report[""]["totals"] = "Totals";
	$fieldToolTipsDaily_PDF_Report[""]["totals"] = "";
	if (count($fieldToolTipsDaily_PDF_Report[""]))
		$tdataDaily_PDF_Report[".isUseToolTips"] = true;
}
	
	
	$tdataDaily_PDF_Report[".NCSearch"] = true;



$tdataDaily_PDF_Report[".shortTableName"] = "Daily_PDF_Report";
$tdataDaily_PDF_Report[".nSecOptions"] = 0;
$tdataDaily_PDF_Report[".recsPerRowList"] = 1;
$tdataDaily_PDF_Report[".mainTableOwnerID"] = "";
$tdataDaily_PDF_Report[".moveNext"] = 1;
$tdataDaily_PDF_Report[".nType"] = 2;

$tdataDaily_PDF_Report[".strOriginalTableName"] = "jobfile";




$tdataDaily_PDF_Report[".showAddInPopup"] = false;

$tdataDaily_PDF_Report[".showEditInPopup"] = false;

$tdataDaily_PDF_Report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDaily_PDF_Report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDaily_PDF_Report[".fieldsForRegister"] = array();

$tdataDaily_PDF_Report[".listAjax"] = false;

	$tdataDaily_PDF_Report[".audit"] = false;

	$tdataDaily_PDF_Report[".locking"] = false;


$tdataDaily_PDF_Report[".list"] = true;

$tdataDaily_PDF_Report[".inlineAdd"] = true;


$tdataDaily_PDF_Report[".exportTo"] = true;

$tdataDaily_PDF_Report[".printFriendly"] = true;


$tdataDaily_PDF_Report[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDaily_PDF_Report[".searchSaving"] = false;
//

$tdataDaily_PDF_Report[".showSearchPanel"] = true;
		$tdataDaily_PDF_Report[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDaily_PDF_Report[".isUseAjaxSuggest"] = false;
else 
	$tdataDaily_PDF_Report[".isUseAjaxSuggest"] = true;



																																																																																																																																			
$tdataDaily_PDF_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDaily_PDF_Report[".isUseTimeForSearch"] = false;





$tdataDaily_PDF_Report[".allSearchFields"] = array();
$tdataDaily_PDF_Report[".filterFields"] = array();
$tdataDaily_PDF_Report[".requiredSearchFields"] = array();

$tdataDaily_PDF_Report[".allSearchFields"][] = "pdf_name";
	$tdataDaily_PDF_Report[".allSearchFields"][] = "totals";
	

$tdataDaily_PDF_Report[".googleLikeFields"] = array();
$tdataDaily_PDF_Report[".googleLikeFields"][] = "pdf_name";
$tdataDaily_PDF_Report[".googleLikeFields"][] = "totals";


$tdataDaily_PDF_Report[".advSearchFields"] = array();
$tdataDaily_PDF_Report[".advSearchFields"][] = "pdf_name";
$tdataDaily_PDF_Report[".advSearchFields"][] = "totals";

$tdataDaily_PDF_Report[".tableType"] = "report";

$tdataDaily_PDF_Report[".printerPageOrientation"] = 0;
$tdataDaily_PDF_Report[".nPrinterPageScale"] = 100;

$tdataDaily_PDF_Report[".nPrinterSplitRecords"] = 40;

$tdataDaily_PDF_Report[".nPrinterPDFSplitRecords"] = 40;


//report settings
$tdataDaily_PDF_Report[".printReportLayout"] = 6;	

$tdataDaily_PDF_Report[".reportPrintPartitionType"] = 1;	
$tdataDaily_PDF_Report[".reportPrintGroupsPerPage"] = 40;	
	$tdataDaily_PDF_Report[".reportPrintPDFGroupsPerPage"] = 40;
$tdataDaily_PDF_Report[".lowGroup"] = 0;



$tdataDaily_PDF_Report[".pageSize"] = 20;	


$tdataDaily_PDF_Report[".isExistTotalFields"] = true;




$tdataDaily_PDF_Report[".repShowDet"] = true;

$tdataDaily_PDF_Report[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDaily_PDF_Report[".strOrderBy"] = $tstrOrderBy;

$tdataDaily_PDF_Report[".orderindexes"] = array();

$tdataDaily_PDF_Report[".sqlHead"] = "SELECT pdf.pdf_name, count(*) as totals";
$tdataDaily_PDF_Report[".sqlFrom"] = "FROM `jobfile`  LEFT JOIN pdf ON pdf.pdf_id = jobfile.project_id";
$tdataDaily_PDF_Report[".sqlWhereExpr"] = "`start2_date` BETWEEN '2015-09-26 22:00:00.000000' AND '2015-09-27 10:00:00.000000'";
$tdataDaily_PDF_Report[".sqlTail"] = "GROUP BY project_id";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDaily_PDF_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDaily_PDF_Report[".arrGroupsPerPage"] = $arrGPP;

$tdataDaily_PDF_Report[".highlightSearchResults"] = true;

$tableKeysDaily_PDF_Report = array();
$tdataDaily_PDF_Report[".Keys"] = $tableKeysDaily_PDF_Report;

$tdataDaily_PDF_Report[".listFields"] = array();
$tdataDaily_PDF_Report[".listFields"][] = "pdf_name";
$tdataDaily_PDF_Report[".listFields"][] = "totals";

$tdataDaily_PDF_Report[".hideMobileList"] = array();


$tdataDaily_PDF_Report[".viewFields"] = array();
$tdataDaily_PDF_Report[".viewFields"][] = "pdf_name";
$tdataDaily_PDF_Report[".viewFields"][] = "totals";

$tdataDaily_PDF_Report[".addFields"] = array();

$tdataDaily_PDF_Report[".inlineAddFields"] = array();

$tdataDaily_PDF_Report[".editFields"] = array();

$tdataDaily_PDF_Report[".inlineEditFields"] = array();

$tdataDaily_PDF_Report[".exportFields"] = array();
$tdataDaily_PDF_Report[".exportFields"][] = "pdf_name";
$tdataDaily_PDF_Report[".exportFields"][] = "totals";

$tdataDaily_PDF_Report[".importFields"] = array();
$tdataDaily_PDF_Report[".importFields"][] = "pdf_name";
$tdataDaily_PDF_Report[".importFields"][] = "totals";

$tdataDaily_PDF_Report[".printFields"] = array();
$tdataDaily_PDF_Report[".printFields"][] = "pdf_name";
$tdataDaily_PDF_Report[".printFields"][] = "totals";

//	pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pdf_name";
	$fdata["GoodName"] = "pdf_name";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Report","pdf_name"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf.pdf_name";
	
		
		
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

	

	
	$tdataDaily_PDF_Report["pdf_name"] = $fdata;
//	totals
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "totals";
	$fdata["GoodName"] = "totals";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_PDF_Report","totals"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "totals"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "count(*)";
	
		
		
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

	

	
	$tdataDaily_PDF_Report["totals"] = $fdata;

	
$tables_data["Daily PDF Report"]=&$tdataDaily_PDF_Report;
$field_labels["Daily_PDF_Report"] = &$fieldLabelsDaily_PDF_Report;
$fieldToolTips["Daily PDF Report"] = &$fieldToolTipsDaily_PDF_Report;
$page_titles["Daily_PDF_Report"] = &$pageTitlesDaily_PDF_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Daily PDF Report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Daily PDF Report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Daily_PDF_Report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pdf.pdf_name, count(*) as totals";
$proto0["m_strFrom"] = "FROM `jobfile`  LEFT JOIN pdf ON pdf.pdf_id = jobfile.project_id";
$proto0["m_strWhere"] = "`start2_date` BETWEEN '2015-09-26 22:00:00.000000' AND '2015-09-27 10:00:00.000000'";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY project_id";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "`start2_date` BETWEEN '2015-09-26 22:00:00.000000' AND '2015-09-27 10:00:00.000000'";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "start2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily PDF Report"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "BETWEEN '2015-09-26 22:00:00.000000' AND '2015-09-27 10:00:00.000000'";
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
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Daily PDF Report"
));

$proto5["m_sql"] = "pdf.pdf_name";
$proto5["m_srcTableName"] = "Daily PDF Report";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$proto8=array();
$proto8["m_functiontype"] = "SQLF_COUNT";
$proto8["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto8["m_arguments"][]=$obj;
$proto8["m_strFunctionName"] = "count";
$obj = new SQLFunctionCall($proto8);

$proto7["m_sql"] = "count(*)";
$proto7["m_srcTableName"] = "Daily PDF Report";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "totals";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "jobfile";
$proto11["m_srcTableName"] = "Daily PDF Report";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "jobfile_id";
$proto11["m_columns"][] = "file_url";
$proto11["m_columns"][] = "client_id";
$proto11["m_columns"][] = "work_id";
$proto11["m_columns"][] = "job_id";
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
$proto11["m_columns"][] = "designer2_id";
$proto11["m_columns"][] = "start2_date";
$proto11["m_columns"][] = "end2_date";
$proto11["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "`jobfile`";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "Daily PDF Report";
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
												$proto14=array();
$proto14["m_link"] = "SQLL_LEFTJOIN";
			$proto15=array();
$proto15["m_strName"] = "pdf";
$proto15["m_srcTableName"] = "Daily PDF Report";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "pdf_id";
$proto15["m_columns"][] = "pdf_name";
$proto15["m_columns"][] = "client_id";
$proto15["m_columns"][] = "pdf_location";
$proto15["m_columns"][] = "last_update";
$proto15["m_columns"][] = "pdf_estimated_average";
$proto15["m_columns"][] = "pdf_estimated_average1";
$proto15["m_columns"][] = "pdf_estimated_average2";
$proto15["m_columns"][] = "pdf_actual_average";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "LEFT JOIN pdf ON pdf.pdf_id = jobfile.project_id";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "Daily PDF Report";
$proto16=array();
$proto16["m_sql"] = "pdf.pdf_id = jobfile.project_id";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Daily PDF Report"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "= jobfile.project_id";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily PDF Report"
));

$proto18["m_column"]=$obj;
$obj = new SQLGroupByItem($proto18);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Daily PDF Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Daily_PDF_Report = createSqlQuery_Daily_PDF_Report();


	
		
	
$tdataDaily_PDF_Report[".sqlquery"] = $queryData_Daily_PDF_Report;

$tableEvents["Daily PDF Report"] = new eventsBase;
$tdataDaily_PDF_Report[".hasEvents"] = false;

?>