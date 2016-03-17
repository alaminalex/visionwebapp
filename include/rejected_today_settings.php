<?php
require_once(getabspath("classes/cipherer.php"));




$tdatarejected_today = array();	
	$tdatarejected_today[".truncateText"] = true;
	$tdatarejected_today[".NumberOfChars"] = 80; 
	$tdatarejected_today[".ShortName"] = "rejected_today";
	$tdatarejected_today[".OwnerID"] = "";
	$tdatarejected_today[".OriginalTable"] = "rejected_jobfile";

//	field labels
$fieldLabelsrejected_today = array();
$fieldToolTipsrejected_today = array();
$pageTitlesrejected_today = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsrejected_today["English"] = array();
	$fieldToolTipsrejected_today["English"] = array();
	$pageTitlesrejected_today["English"] = array();
	$fieldLabelsrejected_today["English"]["reject_date"] = "Reject Date";
	$fieldToolTipsrejected_today["English"]["reject_date"] = "";
	$fieldLabelsrejected_today["English"]["files"] = "Files";
	$fieldToolTipsrejected_today["English"]["files"] = "";
	if (count($fieldToolTipsrejected_today["English"]))
		$tdatarejected_today[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsrejected_today[""] = array();
	$fieldToolTipsrejected_today[""] = array();
	$pageTitlesrejected_today[""] = array();
	if (count($fieldToolTipsrejected_today[""]))
		$tdatarejected_today[".isUseToolTips"] = true;
}
	
	
	$tdatarejected_today[".NCSearch"] = true;



$tdatarejected_today[".shortTableName"] = "rejected_today";
$tdatarejected_today[".nSecOptions"] = 0;
$tdatarejected_today[".recsPerRowList"] = 1;
$tdatarejected_today[".recsPerRowPrint"] = 1;
$tdatarejected_today[".mainTableOwnerID"] = "";
$tdatarejected_today[".moveNext"] = 1;
$tdatarejected_today[".entityType"] = 2;

$tdatarejected_today[".strOriginalTableName"] = "rejected_jobfile";




$tdatarejected_today[".showAddInPopup"] = false;

$tdatarejected_today[".showEditInPopup"] = false;

$tdatarejected_today[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarejected_today[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarejected_today[".fieldsForRegister"] = array();

$tdatarejected_today[".listAjax"] = false;

	$tdatarejected_today[".audit"] = false;

	$tdatarejected_today[".locking"] = false;


$tdatarejected_today[".add"] = true;
$tdatarejected_today[".afterAddAction"] = 1;
$tdatarejected_today[".closePopupAfterAdd"] = 1;
$tdatarejected_today[".afterAddActionDetTable"] = "";

$tdatarejected_today[".list"] = true;

$tdatarejected_today[".inlineAdd"] = true;


$tdatarejected_today[".exportTo"] = true;

$tdatarejected_today[".printFriendly"] = true;


$tdatarejected_today[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatarejected_today[".searchSaving"] = false;
//

$tdatarejected_today[".showSearchPanel"] = true;
		$tdatarejected_today[".flexibleSearch"] = true;		

if (isMobile())
	$tdatarejected_today[".isUseAjaxSuggest"] = false;
else 
	$tdatarejected_today[".isUseAjaxSuggest"] = true;



																																																																																																																																			
$tdatarejected_today[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarejected_today[".isUseTimeForSearch"] = false;





$tdatarejected_today[".allSearchFields"] = array();
$tdatarejected_today[".filterFields"] = array();
$tdatarejected_today[".requiredSearchFields"] = array();

$tdatarejected_today[".allSearchFields"][] = "files";
	

$tdatarejected_today[".googleLikeFields"] = array();
$tdatarejected_today[".googleLikeFields"][] = "files";
$tdatarejected_today[".googleLikeFields"][] = "reject_date";


$tdatarejected_today[".advSearchFields"] = array();
$tdatarejected_today[".advSearchFields"][] = "files";
$tdatarejected_today[".advSearchFields"][] = "reject_date";

$tdatarejected_today[".tableType"] = "report";

$tdatarejected_today[".printerPageOrientation"] = 0;
$tdatarejected_today[".nPrinterPageScale"] = 100;

$tdatarejected_today[".nPrinterSplitRecords"] = 40;

$tdatarejected_today[".nPrinterPDFSplitRecords"] = 40;



$tdatarejected_today[".geocodingEnabled"] = false;

//report settings
$tdatarejected_today[".printReportLayout"] = 6;	

$tdatarejected_today[".reportPrintPartitionType"] = 1;	
$tdatarejected_today[".reportPrintGroupsPerPage"] = 40;	
	$tdatarejected_today[".reportPrintPDFGroupsPerPage"] = 40;
$tdatarejected_today[".lowGroup"] = 0;



$tdatarejected_today[".pageSize"] = 1;	






$tdatarejected_today[".repShowDet"] = true;

$tdatarejected_today[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarejected_today[".strOrderBy"] = $tstrOrderBy;

$tdatarejected_today[".orderindexes"] = array();

$tdatarejected_today[".sqlHead"] = "SELECT COUNT(*) AS files,  reject_date";
$tdatarejected_today[".sqlFrom"] = "FROM rejected_jobfile";
$tdatarejected_today[".sqlWhereExpr"] = "reject_date =DATE(NOW())";
$tdatarejected_today[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarejected_today[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarejected_today[".arrGroupsPerPage"] = $arrGPP;

$tdatarejected_today[".highlightSearchResults"] = true;

$tableKeysrejected_today = array();
$tdatarejected_today[".Keys"] = $tableKeysrejected_today;

$tdatarejected_today[".listFields"] = array();
$tdatarejected_today[".listFields"][] = "files";
$tdatarejected_today[".listFields"][] = "reject_date";

$tdatarejected_today[".hideMobileList"] = array();


$tdatarejected_today[".viewFields"] = array();
$tdatarejected_today[".viewFields"][] = "files";
$tdatarejected_today[".viewFields"][] = "reject_date";

$tdatarejected_today[".addFields"] = array();
$tdatarejected_today[".addFields"][] = "reject_date";

$tdatarejected_today[".masterListFields"] = array();
$tdatarejected_today[".masterListFields"][] = "files";
$tdatarejected_today[".masterListFields"][] = "reject_date";

$tdatarejected_today[".inlineAddFields"] = array();
$tdatarejected_today[".inlineAddFields"][] = "reject_date";

$tdatarejected_today[".editFields"] = array();
$tdatarejected_today[".editFields"][] = "reject_date";

$tdatarejected_today[".inlineEditFields"] = array();
$tdatarejected_today[".inlineEditFields"][] = "reject_date";

$tdatarejected_today[".exportFields"] = array();
$tdatarejected_today[".exportFields"][] = "files";
$tdatarejected_today[".exportFields"][] = "reject_date";

$tdatarejected_today[".importFields"] = array();
$tdatarejected_today[".importFields"][] = "files";
$tdatarejected_today[".importFields"][] = "reject_date";

$tdatarejected_today[".printFields"] = array();
$tdatarejected_today[".printFields"][] = "files";
$tdatarejected_today[".printFields"][] = "reject_date";

//	files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "files";
	$fdata["GoodName"] = "files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("rejected_today","files"); 
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

	

	
	$tdatarejected_today["files"] = $fdata;
//	reject_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "reject_date";
	$fdata["GoodName"] = "reject_date";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_today","reject_date"); 
	$fdata["FieldType"] = 135;
	
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
	
	
	
	

	

	
	$tdatarejected_today["reject_date"] = $fdata;

	
$tables_data["rejected today"]=&$tdatarejected_today;
$field_labels["rejected_today"] = &$fieldLabelsrejected_today;
$fieldToolTips["rejected today"] = &$fieldToolTipsrejected_today;
$page_titles["rejected_today"] = &$pageTitlesrejected_today;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["rejected today"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["rejected today"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_rejected_today()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COUNT(*) AS files,  reject_date";
$proto0["m_strFrom"] = "FROM rejected_jobfile";
$proto0["m_strWhere"] = "reject_date =DATE(NOW())";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "reject_date =DATE(NOW())";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "reject_date",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected today"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=DATE(NOW())";
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
$proto5["m_srcTableName"] = "rejected today";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "files";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "reject_date",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected today"
));

$proto8["m_sql"] = "reject_date";
$proto8["m_srcTableName"] = "rejected today";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "rejected_jobfile";
$proto11["m_srcTableName"] = "rejected today";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "rejected_jobfile_id";
$proto11["m_columns"][] = "jobfile_id";
$proto11["m_columns"][] = "rejected_jobfile_status_id";
$proto11["m_columns"][] = "file_url";
$proto11["m_columns"][] = "job_id";
$proto11["m_columns"][] = "pdf_id";
$proto11["m_columns"][] = "jobfile_note";
$proto11["m_columns"][] = "rejector_id";
$proto11["m_columns"][] = "reject_date";
$proto11["m_columns"][] = "reject_reason";
$proto11["m_columns"][] = "cr_designer_id";
$proto11["m_columns"][] = "cr_start_date";
$proto11["m_columns"][] = "cr_end_date";
$proto11["m_columns"][] = "cr_designer_time";
$proto11["m_columns"][] = "cr_pc_name";
$proto11["m_columns"][] = "cr_qc_id";
$proto11["m_columns"][] = "cr_qcstart_date";
$proto11["m_columns"][] = "cr_qcend_date";
$proto11["m_columns"][] = "cr_qc_time";
$proto11["m_columns"][] = "cr_qc_pc_name";
$proto11["m_columns"][] = "cr_distribute_date";
$proto11["m_columns"][] = "cr_notifier_id";
$proto11["m_columns"][] = "cr_notify_date";
$proto11["m_columns"][] = "type_of_error";
$proto11["m_columns"][] = "cr_comment";
$proto11["m_columns"][] = "screencap";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "rejected_jobfile";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "rejected today";
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
$proto0["m_srcTableName"]="rejected today";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_rejected_today = createSqlQuery_rejected_today();


	
		
	
$tdatarejected_today[".sqlquery"] = $queryData_rejected_today;

$tableEvents["rejected today"] = new eventsBase;
$tdatarejected_today[".hasEvents"] = false;

?>