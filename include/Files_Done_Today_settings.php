<?php
require_once(getabspath("classes/cipherer.php"));




$tdataFiles_Done_Today = array();	
	$tdataFiles_Done_Today[".truncateText"] = true;
	$tdataFiles_Done_Today[".NumberOfChars"] = 80; 
	$tdataFiles_Done_Today[".ShortName"] = "Files_Done_Today";
	$tdataFiles_Done_Today[".OwnerID"] = "";
	$tdataFiles_Done_Today[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsFiles_Done_Today = array();
$fieldToolTipsFiles_Done_Today = array();
$pageTitlesFiles_Done_Today = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsFiles_Done_Today["English"] = array();
	$fieldToolTipsFiles_Done_Today["English"] = array();
	$pageTitlesFiles_Done_Today["English"] = array();
	$fieldLabelsFiles_Done_Today["English"]["total"] = "Total";
	$fieldToolTipsFiles_Done_Today["English"]["total"] = "";
	$fieldLabelsFiles_Done_Today["English"]["Files"] = "Files";
	$fieldToolTipsFiles_Done_Today["English"]["Files"] = "";
	$fieldLabelsFiles_Done_Today["English"]["pdf_pdf_name"] = "Pdf.pdf Name";
	$fieldToolTipsFiles_Done_Today["English"]["pdf.pdf_name"] = "";
	if (count($fieldToolTipsFiles_Done_Today["English"]))
		$tdataFiles_Done_Today[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsFiles_Done_Today[""] = array();
	$fieldToolTipsFiles_Done_Today[""] = array();
	$pageTitlesFiles_Done_Today[""] = array();
	if (count($fieldToolTipsFiles_Done_Today[""]))
		$tdataFiles_Done_Today[".isUseToolTips"] = true;
}
	
	
	$tdataFiles_Done_Today[".NCSearch"] = true;



$tdataFiles_Done_Today[".shortTableName"] = "Files_Done_Today";
$tdataFiles_Done_Today[".nSecOptions"] = 0;
$tdataFiles_Done_Today[".recsPerRowList"] = 1;
$tdataFiles_Done_Today[".recsPerRowPrint"] = 1;
$tdataFiles_Done_Today[".mainTableOwnerID"] = "";
$tdataFiles_Done_Today[".moveNext"] = 1;
$tdataFiles_Done_Today[".entityType"] = 2;

$tdataFiles_Done_Today[".strOriginalTableName"] = "jobfile";




$tdataFiles_Done_Today[".showAddInPopup"] = false;

$tdataFiles_Done_Today[".showEditInPopup"] = false;

$tdataFiles_Done_Today[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataFiles_Done_Today[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataFiles_Done_Today[".fieldsForRegister"] = array();

$tdataFiles_Done_Today[".listAjax"] = false;

	$tdataFiles_Done_Today[".audit"] = false;

	$tdataFiles_Done_Today[".locking"] = false;


$tdataFiles_Done_Today[".add"] = true;
$tdataFiles_Done_Today[".afterAddAction"] = 1;
$tdataFiles_Done_Today[".closePopupAfterAdd"] = 1;
$tdataFiles_Done_Today[".afterAddActionDetTable"] = "";

$tdataFiles_Done_Today[".list"] = true;

$tdataFiles_Done_Today[".inlineAdd"] = true;


$tdataFiles_Done_Today[".exportTo"] = true;

$tdataFiles_Done_Today[".printFriendly"] = true;


$tdataFiles_Done_Today[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataFiles_Done_Today[".searchSaving"] = false;
//

$tdataFiles_Done_Today[".showSearchPanel"] = true;
		$tdataFiles_Done_Today[".flexibleSearch"] = true;		

if (isMobile())
	$tdataFiles_Done_Today[".isUseAjaxSuggest"] = false;
else 
	$tdataFiles_Done_Today[".isUseAjaxSuggest"] = true;



																																																																																																																																			
$tdataFiles_Done_Today[".addPageEvents"] = false;

// use timepicker for search panel
$tdataFiles_Done_Today[".isUseTimeForSearch"] = false;





$tdataFiles_Done_Today[".allSearchFields"] = array();
$tdataFiles_Done_Today[".filterFields"] = array();
$tdataFiles_Done_Today[".requiredSearchFields"] = array();

$tdataFiles_Done_Today[".allSearchFields"][] = "total";
	$tdataFiles_Done_Today[".allSearchFields"][] = "Files";
	

$tdataFiles_Done_Today[".googleLikeFields"] = array();
$tdataFiles_Done_Today[".googleLikeFields"][] = "total";
$tdataFiles_Done_Today[".googleLikeFields"][] = "Files";
$tdataFiles_Done_Today[".googleLikeFields"][] = "pdf.pdf_name";


$tdataFiles_Done_Today[".advSearchFields"] = array();
$tdataFiles_Done_Today[".advSearchFields"][] = "total";
$tdataFiles_Done_Today[".advSearchFields"][] = "Files";
$tdataFiles_Done_Today[".advSearchFields"][] = "pdf.pdf_name";

$tdataFiles_Done_Today[".tableType"] = "report";

$tdataFiles_Done_Today[".printerPageOrientation"] = 0;
$tdataFiles_Done_Today[".nPrinterPageScale"] = 100;

$tdataFiles_Done_Today[".nPrinterSplitRecords"] = 40;

$tdataFiles_Done_Today[".nPrinterPDFSplitRecords"] = 40;



$tdataFiles_Done_Today[".geocodingEnabled"] = false;

//report settings
$tdataFiles_Done_Today[".printReportLayout"] = 6;	

$tdataFiles_Done_Today[".reportPrintPartitionType"] = 1;	
$tdataFiles_Done_Today[".reportPrintGroupsPerPage"] = 40;	
	$tdataFiles_Done_Today[".reportPrintPDFGroupsPerPage"] = 40;
$tdataFiles_Done_Today[".lowGroup"] = 0;



$tdataFiles_Done_Today[".pageSize"] = 500;	






$tdataFiles_Done_Today[".repShowDet"] = true;

$tdataFiles_Done_Today[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY pdf.pdf_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataFiles_Done_Today[".strOrderBy"] = $tstrOrderBy;

$tdataFiles_Done_Today[".orderindexes"] = array();
$tdataFiles_Done_Today[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "pdf.pdf_name");

$tdataFiles_Done_Today[".sqlHead"] = "SELECT 'Total' AS total,  COUNT(*) AS Files,  pdf.pdf_name AS `pdf.pdf_name`";
$tdataFiles_Done_Today[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN pdf ON pdf.pdf_id = jobfile.project_id";
$tdataFiles_Done_Today[".sqlWhereExpr"] = "jobfile.end2_date > date(now())";
$tdataFiles_Done_Today[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataFiles_Done_Today[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataFiles_Done_Today[".arrGroupsPerPage"] = $arrGPP;

$tdataFiles_Done_Today[".highlightSearchResults"] = true;

$tableKeysFiles_Done_Today = array();
$tdataFiles_Done_Today[".Keys"] = $tableKeysFiles_Done_Today;

$tdataFiles_Done_Today[".listFields"] = array();
$tdataFiles_Done_Today[".listFields"][] = "total";
$tdataFiles_Done_Today[".listFields"][] = "Files";
$tdataFiles_Done_Today[".listFields"][] = "pdf.pdf_name";

$tdataFiles_Done_Today[".hideMobileList"] = array();


$tdataFiles_Done_Today[".viewFields"] = array();
$tdataFiles_Done_Today[".viewFields"][] = "total";
$tdataFiles_Done_Today[".viewFields"][] = "Files";
$tdataFiles_Done_Today[".viewFields"][] = "pdf.pdf_name";

$tdataFiles_Done_Today[".addFields"] = array();

$tdataFiles_Done_Today[".masterListFields"] = array();
$tdataFiles_Done_Today[".masterListFields"][] = "total";
$tdataFiles_Done_Today[".masterListFields"][] = "Files";
$tdataFiles_Done_Today[".masterListFields"][] = "pdf.pdf_name";

$tdataFiles_Done_Today[".inlineAddFields"] = array();

$tdataFiles_Done_Today[".editFields"] = array();

$tdataFiles_Done_Today[".inlineEditFields"] = array();

$tdataFiles_Done_Today[".exportFields"] = array();
$tdataFiles_Done_Today[".exportFields"][] = "total";
$tdataFiles_Done_Today[".exportFields"][] = "Files";
$tdataFiles_Done_Today[".exportFields"][] = "pdf.pdf_name";

$tdataFiles_Done_Today[".importFields"] = array();
$tdataFiles_Done_Today[".importFields"][] = "total";
$tdataFiles_Done_Today[".importFields"][] = "Files";
$tdataFiles_Done_Today[".importFields"][] = "pdf.pdf_name";

$tdataFiles_Done_Today[".printFields"] = array();
$tdataFiles_Done_Today[".printFields"][] = "total";
$tdataFiles_Done_Today[".printFields"][] = "Files";
$tdataFiles_Done_Today[".printFields"][] = "pdf.pdf_name";

//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Files_Done_Today","total"); 
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

	

	
	$tdataFiles_Done_Today["total"] = $fdata;
//	Files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Files";
	$fdata["GoodName"] = "Files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Files_Done_Today","Files"); 
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

	

	
	$tdataFiles_Done_Today["Files"] = $fdata;
//	pdf.pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pdf.pdf_name";
	$fdata["GoodName"] = "pdf_pdf_name";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Files_Done_Today","pdf_pdf_name"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf.pdf_name";
	
		
		
				
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
	
	
	
	

	

	
	$tdataFiles_Done_Today["pdf.pdf_name"] = $fdata;

	
$tables_data["Files Done Today"]=&$tdataFiles_Done_Today;
$field_labels["Files_Done_Today"] = &$fieldLabelsFiles_Done_Today;
$fieldToolTips["Files Done Today"] = &$fieldToolTipsFiles_Done_Today;
$page_titles["Files_Done_Today"] = &$pageTitlesFiles_Done_Today;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Files Done Today"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Files Done Today"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Files_Done_Today()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "'Total' AS total,  COUNT(*) AS Files,  pdf.pdf_name AS `pdf.pdf_name`";
$proto0["m_strFrom"] = "FROM jobfile  LEFT OUTER JOIN pdf ON pdf.pdf_id = jobfile.project_id";
$proto0["m_strWhere"] = "jobfile.end2_date > date(now())";
$proto0["m_strOrderBy"] = "ORDER BY pdf.pdf_name";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "jobfile.end2_date > date(now())";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Files Done Today"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "> date(now())";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "'Total'"
));

$proto5["m_sql"] = "'Total'";
$proto5["m_srcTableName"] = "Files Done Today";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "total";
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
$proto8["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto8);

$proto7["m_sql"] = "COUNT(*)";
$proto7["m_srcTableName"] = "Files Done Today";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "Files";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Files Done Today"
));

$proto10["m_sql"] = "pdf.pdf_name";
$proto10["m_srcTableName"] = "Files Done Today";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "pdf.pdf_name";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "jobfile";
$proto13["m_srcTableName"] = "Files Done Today";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "jobfile_id";
$proto13["m_columns"][] = "file_url";
$proto13["m_columns"][] = "client_id";
$proto13["m_columns"][] = "work_id";
$proto13["m_columns"][] = "job_id";
$proto13["m_columns"][] = "project_id";
$proto13["m_columns"][] = "folder_name";
$proto13["m_columns"][] = "filename";
$proto13["m_columns"][] = "jobfile_type";
$proto13["m_columns"][] = "jobfile_note";
$proto13["m_columns"][] = "jobfile_status_id";
$proto13["m_columns"][] = "downloader_id";
$proto13["m_columns"][] = "distributor_id";
$proto13["m_columns"][] = "designer_id";
$proto13["m_columns"][] = "qc_id";
$proto13["m_columns"][] = "uploader_id";
$proto13["m_columns"][] = "notifier_id";
$proto13["m_columns"][] = "rejector_id";
$proto13["m_columns"][] = "download_date";
$proto13["m_columns"][] = "distribute_date";
$proto13["m_columns"][] = "start_date";
$proto13["m_columns"][] = "end_date";
$proto13["m_columns"][] = "designer_time";
$proto13["m_columns"][] = "qcstart_date";
$proto13["m_columns"][] = "qcend_date";
$proto13["m_columns"][] = "qc_time";
$proto13["m_columns"][] = "upload_date";
$proto13["m_columns"][] = "notify_date";
$proto13["m_columns"][] = "reject_date";
$proto13["m_columns"][] = "reject_reason";
$proto13["m_columns"][] = "designer2_id";
$proto13["m_columns"][] = "start2_date";
$proto13["m_columns"][] = "end2_date";
$proto13["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "jobfile";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "Files Done Today";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
												$proto16=array();
$proto16["m_link"] = "SQLL_LEFTJOIN";
			$proto17=array();
$proto17["m_strName"] = "pdf";
$proto17["m_srcTableName"] = "Files Done Today";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "pdf_id";
$proto17["m_columns"][] = "pdf_name";
$proto17["m_columns"][] = "client_id";
$proto17["m_columns"][] = "pdf_location";
$proto17["m_columns"][] = "last_update";
$proto17["m_columns"][] = "pdf_estimated_average";
$proto17["m_columns"][] = "pdf_estimated_average1";
$proto17["m_columns"][] = "pdf_estimated_average2";
$proto17["m_columns"][] = "pdf_actual_average";
$proto17["m_columns"][] = "price";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "LEFT OUTER JOIN pdf ON pdf.pdf_id = jobfile.project_id";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Files Done Today";
$proto18=array();
$proto18["m_sql"] = "pdf.pdf_id = jobfile.project_id";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Files Done Today"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "= jobfile.project_id";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Files Done Today"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 1;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Files Done Today";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Files_Done_Today = createSqlQuery_Files_Done_Today();


	
			
	
$tdataFiles_Done_Today[".sqlquery"] = $queryData_Files_Done_Today;

$tableEvents["Files Done Today"] = new eventsBase;
$tdataFiles_Done_Today[".hasEvents"] = false;

?>