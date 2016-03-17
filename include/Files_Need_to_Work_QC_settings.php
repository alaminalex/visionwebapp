<?php
require_once(getabspath("classes/cipherer.php"));




$tdataFiles_Need_to_Work_QC = array();	
	$tdataFiles_Need_to_Work_QC[".truncateText"] = true;
	$tdataFiles_Need_to_Work_QC[".NumberOfChars"] = 80; 
	$tdataFiles_Need_to_Work_QC[".ShortName"] = "Files_Need_to_Work_QC";
	$tdataFiles_Need_to_Work_QC[".OwnerID"] = "";
	$tdataFiles_Need_to_Work_QC[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsFiles_Need_to_Work_QC = array();
$fieldToolTipsFiles_Need_to_Work_QC = array();
$pageTitlesFiles_Need_to_Work_QC = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsFiles_Need_to_Work_QC["English"] = array();
	$fieldToolTipsFiles_Need_to_Work_QC["English"] = array();
	$pageTitlesFiles_Need_to_Work_QC["English"] = array();
	$fieldLabelsFiles_Need_to_Work_QC["English"]["files"] = "Files";
	$fieldToolTipsFiles_Need_to_Work_QC["English"]["files"] = "";
	$fieldLabelsFiles_Need_to_Work_QC["English"]["pdf_pdf_name"] = "Pdf.pdf Name";
	$fieldToolTipsFiles_Need_to_Work_QC["English"]["pdf.pdf_name"] = "";
	$fieldLabelsFiles_Need_to_Work_QC["English"]["total"] = "Total";
	$fieldToolTipsFiles_Need_to_Work_QC["English"]["total"] = "";
	if (count($fieldToolTipsFiles_Need_to_Work_QC["English"]))
		$tdataFiles_Need_to_Work_QC[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsFiles_Need_to_Work_QC[""] = array();
	$fieldToolTipsFiles_Need_to_Work_QC[""] = array();
	$pageTitlesFiles_Need_to_Work_QC[""] = array();
	if (count($fieldToolTipsFiles_Need_to_Work_QC[""]))
		$tdataFiles_Need_to_Work_QC[".isUseToolTips"] = true;
}
	
	
	$tdataFiles_Need_to_Work_QC[".NCSearch"] = true;



$tdataFiles_Need_to_Work_QC[".shortTableName"] = "Files_Need_to_Work_QC";
$tdataFiles_Need_to_Work_QC[".nSecOptions"] = 0;
$tdataFiles_Need_to_Work_QC[".recsPerRowList"] = 1;
$tdataFiles_Need_to_Work_QC[".recsPerRowPrint"] = 1;
$tdataFiles_Need_to_Work_QC[".mainTableOwnerID"] = "";
$tdataFiles_Need_to_Work_QC[".moveNext"] = 1;
$tdataFiles_Need_to_Work_QC[".entityType"] = 2;

$tdataFiles_Need_to_Work_QC[".strOriginalTableName"] = "jobfile";




$tdataFiles_Need_to_Work_QC[".showAddInPopup"] = false;

$tdataFiles_Need_to_Work_QC[".showEditInPopup"] = false;

$tdataFiles_Need_to_Work_QC[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataFiles_Need_to_Work_QC[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataFiles_Need_to_Work_QC[".fieldsForRegister"] = array();

$tdataFiles_Need_to_Work_QC[".listAjax"] = false;

	$tdataFiles_Need_to_Work_QC[".audit"] = false;

	$tdataFiles_Need_to_Work_QC[".locking"] = false;


$tdataFiles_Need_to_Work_QC[".add"] = true;
$tdataFiles_Need_to_Work_QC[".afterAddAction"] = 1;
$tdataFiles_Need_to_Work_QC[".closePopupAfterAdd"] = 1;
$tdataFiles_Need_to_Work_QC[".afterAddActionDetTable"] = "";

$tdataFiles_Need_to_Work_QC[".list"] = true;

$tdataFiles_Need_to_Work_QC[".inlineAdd"] = true;


$tdataFiles_Need_to_Work_QC[".exportTo"] = true;

$tdataFiles_Need_to_Work_QC[".printFriendly"] = true;


$tdataFiles_Need_to_Work_QC[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataFiles_Need_to_Work_QC[".searchSaving"] = false;
//

$tdataFiles_Need_to_Work_QC[".showSearchPanel"] = true;
		$tdataFiles_Need_to_Work_QC[".flexibleSearch"] = true;		

if (isMobile())
	$tdataFiles_Need_to_Work_QC[".isUseAjaxSuggest"] = false;
else 
	$tdataFiles_Need_to_Work_QC[".isUseAjaxSuggest"] = true;



																																																																																																																																			
$tdataFiles_Need_to_Work_QC[".addPageEvents"] = false;

// use timepicker for search panel
$tdataFiles_Need_to_Work_QC[".isUseTimeForSearch"] = false;





$tdataFiles_Need_to_Work_QC[".allSearchFields"] = array();
$tdataFiles_Need_to_Work_QC[".filterFields"] = array();
$tdataFiles_Need_to_Work_QC[".requiredSearchFields"] = array();

$tdataFiles_Need_to_Work_QC[".allSearchFields"][] = "files";
	$tdataFiles_Need_to_Work_QC[".allSearchFields"][] = "total";
	

$tdataFiles_Need_to_Work_QC[".googleLikeFields"] = array();
$tdataFiles_Need_to_Work_QC[".googleLikeFields"][] = "files";
$tdataFiles_Need_to_Work_QC[".googleLikeFields"][] = "total";
$tdataFiles_Need_to_Work_QC[".googleLikeFields"][] = "pdf.pdf_name";


$tdataFiles_Need_to_Work_QC[".advSearchFields"] = array();
$tdataFiles_Need_to_Work_QC[".advSearchFields"][] = "files";
$tdataFiles_Need_to_Work_QC[".advSearchFields"][] = "total";
$tdataFiles_Need_to_Work_QC[".advSearchFields"][] = "pdf.pdf_name";

$tdataFiles_Need_to_Work_QC[".tableType"] = "report";

$tdataFiles_Need_to_Work_QC[".printerPageOrientation"] = 0;
$tdataFiles_Need_to_Work_QC[".nPrinterPageScale"] = 100;

$tdataFiles_Need_to_Work_QC[".nPrinterSplitRecords"] = 40;

$tdataFiles_Need_to_Work_QC[".nPrinterPDFSplitRecords"] = 40;



$tdataFiles_Need_to_Work_QC[".geocodingEnabled"] = false;

//report settings
$tdataFiles_Need_to_Work_QC[".printReportLayout"] = 6;	

$tdataFiles_Need_to_Work_QC[".reportPrintPartitionType"] = 1;	
$tdataFiles_Need_to_Work_QC[".reportPrintGroupsPerPage"] = 40;	
	$tdataFiles_Need_to_Work_QC[".reportPrintPDFGroupsPerPage"] = 40;
$tdataFiles_Need_to_Work_QC[".lowGroup"] = 0;



$tdataFiles_Need_to_Work_QC[".pageSize"] = 20;	


$tdataFiles_Need_to_Work_QC[".isExistTotalFields"] = true;




$tdataFiles_Need_to_Work_QC[".repShowDet"] = true;

$tdataFiles_Need_to_Work_QC[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY pdf.pdf_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataFiles_Need_to_Work_QC[".strOrderBy"] = $tstrOrderBy;

$tdataFiles_Need_to_Work_QC[".orderindexes"] = array();
$tdataFiles_Need_to_Work_QC[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "pdf.pdf_name");

$tdataFiles_Need_to_Work_QC[".sqlHead"] = "SELECT COUNT(*) AS files,  'Total' AS total,  pdf.pdf_name AS `pdf.pdf_name`";
$tdataFiles_Need_to_Work_QC[".sqlFrom"] = "FROM jobfile  INNER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$tdataFiles_Need_to_Work_QC[".sqlWhereExpr"] = "(jobfile.jobfile_status_id =14) AND (jobfile.qcend_date = '0000-00-00 00:00:00')";
$tdataFiles_Need_to_Work_QC[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataFiles_Need_to_Work_QC[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataFiles_Need_to_Work_QC[".arrGroupsPerPage"] = $arrGPP;

$tdataFiles_Need_to_Work_QC[".highlightSearchResults"] = true;

$tableKeysFiles_Need_to_Work_QC = array();
$tdataFiles_Need_to_Work_QC[".Keys"] = $tableKeysFiles_Need_to_Work_QC;

$tdataFiles_Need_to_Work_QC[".listFields"] = array();
$tdataFiles_Need_to_Work_QC[".listFields"][] = "files";
$tdataFiles_Need_to_Work_QC[".listFields"][] = "total";
$tdataFiles_Need_to_Work_QC[".listFields"][] = "pdf.pdf_name";

$tdataFiles_Need_to_Work_QC[".hideMobileList"] = array();


$tdataFiles_Need_to_Work_QC[".viewFields"] = array();
$tdataFiles_Need_to_Work_QC[".viewFields"][] = "files";
$tdataFiles_Need_to_Work_QC[".viewFields"][] = "total";
$tdataFiles_Need_to_Work_QC[".viewFields"][] = "pdf.pdf_name";

$tdataFiles_Need_to_Work_QC[".addFields"] = array();

$tdataFiles_Need_to_Work_QC[".masterListFields"] = array();
$tdataFiles_Need_to_Work_QC[".masterListFields"][] = "files";
$tdataFiles_Need_to_Work_QC[".masterListFields"][] = "total";
$tdataFiles_Need_to_Work_QC[".masterListFields"][] = "pdf.pdf_name";

$tdataFiles_Need_to_Work_QC[".inlineAddFields"] = array();

$tdataFiles_Need_to_Work_QC[".editFields"] = array();

$tdataFiles_Need_to_Work_QC[".inlineEditFields"] = array();

$tdataFiles_Need_to_Work_QC[".exportFields"] = array();
$tdataFiles_Need_to_Work_QC[".exportFields"][] = "files";
$tdataFiles_Need_to_Work_QC[".exportFields"][] = "total";
$tdataFiles_Need_to_Work_QC[".exportFields"][] = "pdf.pdf_name";

$tdataFiles_Need_to_Work_QC[".importFields"] = array();
$tdataFiles_Need_to_Work_QC[".importFields"][] = "files";
$tdataFiles_Need_to_Work_QC[".importFields"][] = "total";
$tdataFiles_Need_to_Work_QC[".importFields"][] = "pdf.pdf_name";

$tdataFiles_Need_to_Work_QC[".printFields"] = array();
$tdataFiles_Need_to_Work_QC[".printFields"][] = "files";
$tdataFiles_Need_to_Work_QC[".printFields"][] = "total";
$tdataFiles_Need_to_Work_QC[".printFields"][] = "pdf.pdf_name";

//	files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "files";
	$fdata["GoodName"] = "files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Files_Need_to_Work_QC","files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
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

	

	
	$tdataFiles_Need_to_Work_QC["files"] = $fdata;
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Files_Need_to_Work_QC","total"); 
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

	

	
	$tdataFiles_Need_to_Work_QC["total"] = $fdata;
//	pdf.pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pdf.pdf_name";
	$fdata["GoodName"] = "pdf_pdf_name";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Files_Need_to_Work_QC","pdf_pdf_name"); 
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
	
	
	
	

	

	
	$tdataFiles_Need_to_Work_QC["pdf.pdf_name"] = $fdata;

	
$tables_data["Files Need to Work QC"]=&$tdataFiles_Need_to_Work_QC;
$field_labels["Files_Need_to_Work_QC"] = &$fieldLabelsFiles_Need_to_Work_QC;
$fieldToolTips["Files Need to Work QC"] = &$fieldToolTipsFiles_Need_to_Work_QC;
$page_titles["Files_Need_to_Work_QC"] = &$pageTitlesFiles_Need_to_Work_QC;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Files Need to Work QC"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Files Need to Work QC"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Files_Need_to_Work_QC()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COUNT(*) AS files,  'Total' AS total,  pdf.pdf_name AS `pdf.pdf_name`";
$proto0["m_strFrom"] = "FROM jobfile  INNER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto0["m_strWhere"] = "(jobfile.jobfile_status_id =14) AND (jobfile.qcend_date = '0000-00-00 00:00:00')";
$proto0["m_strOrderBy"] = "ORDER BY pdf.pdf_name";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(jobfile.jobfile_status_id =14) AND (jobfile.qcend_date = '0000-00-00 00:00:00')";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.jobfile_status_id =14) AND (jobfile.qcend_date = '0000-00-00 00:00:00')"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.jobfile_status_id =14";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Files Need to Work QC"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "=14";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "jobfile.qcend_date = '0000-00-00 00:00:00'";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "qcend_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Files Need to Work QC"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "= '0000-00-00 00:00:00'";
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
			$proto10=array();
$proto10["m_functiontype"] = "SQLF_COUNT";
$proto10["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto10["m_arguments"][]=$obj;
$proto10["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto10);

$proto9["m_sql"] = "COUNT(*)";
$proto9["m_srcTableName"] = "Files Need to Work QC";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "files";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'Total'"
));

$proto12["m_sql"] = "'Total'";
$proto12["m_srcTableName"] = "Files Need to Work QC";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "total";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Files Need to Work QC"
));

$proto14["m_sql"] = "pdf.pdf_name";
$proto14["m_srcTableName"] = "Files Need to Work QC";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "pdf.pdf_name";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "jobfile";
$proto17["m_srcTableName"] = "Files Need to Work QC";
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
$proto16["m_srcTableName"] = "Files Need to Work QC";
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
$proto20["m_link"] = "SQLL_INNERJOIN";
			$proto21=array();
$proto21["m_strName"] = "pdf";
$proto21["m_srcTableName"] = "Files Need to Work QC";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "pdf_id";
$proto21["m_columns"][] = "pdf_name";
$proto21["m_columns"][] = "client_id";
$proto21["m_columns"][] = "pdf_location";
$proto21["m_columns"][] = "last_update";
$proto21["m_columns"][] = "pdf_estimated_average";
$proto21["m_columns"][] = "pdf_estimated_average1";
$proto21["m_columns"][] = "pdf_estimated_average2";
$proto21["m_columns"][] = "pdf_actual_average";
$proto21["m_columns"][] = "price";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "INNER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "Files Need to Work QC";
$proto22=array();
$proto22["m_sql"] = "jobfile.project_id = pdf.pdf_id";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Files Need to Work QC"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= pdf.pdf_id";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Files Need to Work QC"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Files Need to Work QC";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Files_Need_to_Work_QC = createSqlQuery_Files_Need_to_Work_QC();


	
			
	
$tdataFiles_Need_to_Work_QC[".sqlquery"] = $queryData_Files_Need_to_Work_QC;

$tableEvents["Files Need to Work QC"] = new eventsBase;
$tdataFiles_Need_to_Work_QC[".hasEvents"] = false;

?>