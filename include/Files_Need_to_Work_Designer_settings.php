<?php
require_once(getabspath("classes/cipherer.php"));




$tdataFiles_Need_to_Work_Designer = array();	
	$tdataFiles_Need_to_Work_Designer[".truncateText"] = true;
	$tdataFiles_Need_to_Work_Designer[".NumberOfChars"] = 80; 
	$tdataFiles_Need_to_Work_Designer[".ShortName"] = "Files_Need_to_Work_Designer";
	$tdataFiles_Need_to_Work_Designer[".OwnerID"] = "";
	$tdataFiles_Need_to_Work_Designer[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsFiles_Need_to_Work_Designer = array();
$fieldToolTipsFiles_Need_to_Work_Designer = array();
$pageTitlesFiles_Need_to_Work_Designer = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsFiles_Need_to_Work_Designer["English"] = array();
	$fieldToolTipsFiles_Need_to_Work_Designer["English"] = array();
	$pageTitlesFiles_Need_to_Work_Designer["English"] = array();
	$fieldLabelsFiles_Need_to_Work_Designer["English"]["files"] = "Files";
	$fieldToolTipsFiles_Need_to_Work_Designer["English"]["files"] = "";
	$fieldLabelsFiles_Need_to_Work_Designer["English"]["total"] = "Total";
	$fieldToolTipsFiles_Need_to_Work_Designer["English"]["total"] = "";
	$fieldLabelsFiles_Need_to_Work_Designer["English"]["pdf_pdf_name"] = "Pdf.pdf Name";
	$fieldToolTipsFiles_Need_to_Work_Designer["English"]["pdf.pdf_name"] = "";
	if (count($fieldToolTipsFiles_Need_to_Work_Designer["English"]))
		$tdataFiles_Need_to_Work_Designer[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsFiles_Need_to_Work_Designer[""] = array();
	$fieldToolTipsFiles_Need_to_Work_Designer[""] = array();
	$pageTitlesFiles_Need_to_Work_Designer[""] = array();
	if (count($fieldToolTipsFiles_Need_to_Work_Designer[""]))
		$tdataFiles_Need_to_Work_Designer[".isUseToolTips"] = true;
}
	
	
	$tdataFiles_Need_to_Work_Designer[".NCSearch"] = true;



$tdataFiles_Need_to_Work_Designer[".shortTableName"] = "Files_Need_to_Work_Designer";
$tdataFiles_Need_to_Work_Designer[".nSecOptions"] = 0;
$tdataFiles_Need_to_Work_Designer[".recsPerRowList"] = 1;
$tdataFiles_Need_to_Work_Designer[".recsPerRowPrint"] = 1;
$tdataFiles_Need_to_Work_Designer[".mainTableOwnerID"] = "";
$tdataFiles_Need_to_Work_Designer[".moveNext"] = 1;
$tdataFiles_Need_to_Work_Designer[".entityType"] = 2;

$tdataFiles_Need_to_Work_Designer[".strOriginalTableName"] = "jobfile";




$tdataFiles_Need_to_Work_Designer[".showAddInPopup"] = false;

$tdataFiles_Need_to_Work_Designer[".showEditInPopup"] = false;

$tdataFiles_Need_to_Work_Designer[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataFiles_Need_to_Work_Designer[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataFiles_Need_to_Work_Designer[".fieldsForRegister"] = array();

$tdataFiles_Need_to_Work_Designer[".listAjax"] = false;

	$tdataFiles_Need_to_Work_Designer[".audit"] = false;

	$tdataFiles_Need_to_Work_Designer[".locking"] = false;


$tdataFiles_Need_to_Work_Designer[".add"] = true;
$tdataFiles_Need_to_Work_Designer[".afterAddAction"] = 1;
$tdataFiles_Need_to_Work_Designer[".closePopupAfterAdd"] = 1;
$tdataFiles_Need_to_Work_Designer[".afterAddActionDetTable"] = "";

$tdataFiles_Need_to_Work_Designer[".list"] = true;

$tdataFiles_Need_to_Work_Designer[".inlineAdd"] = true;


$tdataFiles_Need_to_Work_Designer[".exportTo"] = true;

$tdataFiles_Need_to_Work_Designer[".printFriendly"] = true;


$tdataFiles_Need_to_Work_Designer[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataFiles_Need_to_Work_Designer[".searchSaving"] = false;
//

$tdataFiles_Need_to_Work_Designer[".showSearchPanel"] = true;
		$tdataFiles_Need_to_Work_Designer[".flexibleSearch"] = true;		

if (isMobile())
	$tdataFiles_Need_to_Work_Designer[".isUseAjaxSuggest"] = false;
else 
	$tdataFiles_Need_to_Work_Designer[".isUseAjaxSuggest"] = true;



																																																																																																																																			
$tdataFiles_Need_to_Work_Designer[".addPageEvents"] = false;

// use timepicker for search panel
$tdataFiles_Need_to_Work_Designer[".isUseTimeForSearch"] = false;





$tdataFiles_Need_to_Work_Designer[".allSearchFields"] = array();
$tdataFiles_Need_to_Work_Designer[".filterFields"] = array();
$tdataFiles_Need_to_Work_Designer[".requiredSearchFields"] = array();

$tdataFiles_Need_to_Work_Designer[".allSearchFields"][] = "files";
	$tdataFiles_Need_to_Work_Designer[".allSearchFields"][] = "total";
	

$tdataFiles_Need_to_Work_Designer[".googleLikeFields"] = array();
$tdataFiles_Need_to_Work_Designer[".googleLikeFields"][] = "files";
$tdataFiles_Need_to_Work_Designer[".googleLikeFields"][] = "total";
$tdataFiles_Need_to_Work_Designer[".googleLikeFields"][] = "pdf.pdf_name";


$tdataFiles_Need_to_Work_Designer[".advSearchFields"] = array();
$tdataFiles_Need_to_Work_Designer[".advSearchFields"][] = "files";
$tdataFiles_Need_to_Work_Designer[".advSearchFields"][] = "total";
$tdataFiles_Need_to_Work_Designer[".advSearchFields"][] = "pdf.pdf_name";

$tdataFiles_Need_to_Work_Designer[".tableType"] = "report";

$tdataFiles_Need_to_Work_Designer[".printerPageOrientation"] = 0;
$tdataFiles_Need_to_Work_Designer[".nPrinterPageScale"] = 100;

$tdataFiles_Need_to_Work_Designer[".nPrinterSplitRecords"] = 40;

$tdataFiles_Need_to_Work_Designer[".nPrinterPDFSplitRecords"] = 40;



$tdataFiles_Need_to_Work_Designer[".geocodingEnabled"] = false;

//report settings
$tdataFiles_Need_to_Work_Designer[".printReportLayout"] = 6;	

$tdataFiles_Need_to_Work_Designer[".reportPrintPartitionType"] = 1;	
$tdataFiles_Need_to_Work_Designer[".reportPrintGroupsPerPage"] = 40;	
	$tdataFiles_Need_to_Work_Designer[".reportPrintPDFGroupsPerPage"] = 40;
$tdataFiles_Need_to_Work_Designer[".lowGroup"] = 0;



$tdataFiles_Need_to_Work_Designer[".pageSize"] = 20;	


$tdataFiles_Need_to_Work_Designer[".isExistTotalFields"] = true;




$tdataFiles_Need_to_Work_Designer[".repShowDet"] = true;

$tdataFiles_Need_to_Work_Designer[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY pdf.pdf_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataFiles_Need_to_Work_Designer[".strOrderBy"] = $tstrOrderBy;

$tdataFiles_Need_to_Work_Designer[".orderindexes"] = array();
$tdataFiles_Need_to_Work_Designer[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "pdf.pdf_name");

$tdataFiles_Need_to_Work_Designer[".sqlHead"] = "SELECT COUNT(*) AS files,  'Total' AS total,  pdf.pdf_name AS `pdf.pdf_name`";
$tdataFiles_Need_to_Work_Designer[".sqlFrom"] = "FROM jobfile  INNER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$tdataFiles_Need_to_Work_Designer[".sqlWhereExpr"] = "(jobfile.jobfile_status_id =3) AND (jobfile.end2_date = '0000-00-00 00:00:00')";
$tdataFiles_Need_to_Work_Designer[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataFiles_Need_to_Work_Designer[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataFiles_Need_to_Work_Designer[".arrGroupsPerPage"] = $arrGPP;

$tdataFiles_Need_to_Work_Designer[".highlightSearchResults"] = true;

$tableKeysFiles_Need_to_Work_Designer = array();
$tdataFiles_Need_to_Work_Designer[".Keys"] = $tableKeysFiles_Need_to_Work_Designer;

$tdataFiles_Need_to_Work_Designer[".listFields"] = array();
$tdataFiles_Need_to_Work_Designer[".listFields"][] = "files";
$tdataFiles_Need_to_Work_Designer[".listFields"][] = "total";
$tdataFiles_Need_to_Work_Designer[".listFields"][] = "pdf.pdf_name";

$tdataFiles_Need_to_Work_Designer[".hideMobileList"] = array();


$tdataFiles_Need_to_Work_Designer[".viewFields"] = array();
$tdataFiles_Need_to_Work_Designer[".viewFields"][] = "files";
$tdataFiles_Need_to_Work_Designer[".viewFields"][] = "total";
$tdataFiles_Need_to_Work_Designer[".viewFields"][] = "pdf.pdf_name";

$tdataFiles_Need_to_Work_Designer[".addFields"] = array();

$tdataFiles_Need_to_Work_Designer[".masterListFields"] = array();
$tdataFiles_Need_to_Work_Designer[".masterListFields"][] = "files";
$tdataFiles_Need_to_Work_Designer[".masterListFields"][] = "total";
$tdataFiles_Need_to_Work_Designer[".masterListFields"][] = "pdf.pdf_name";

$tdataFiles_Need_to_Work_Designer[".inlineAddFields"] = array();

$tdataFiles_Need_to_Work_Designer[".editFields"] = array();

$tdataFiles_Need_to_Work_Designer[".inlineEditFields"] = array();

$tdataFiles_Need_to_Work_Designer[".exportFields"] = array();
$tdataFiles_Need_to_Work_Designer[".exportFields"][] = "files";
$tdataFiles_Need_to_Work_Designer[".exportFields"][] = "total";
$tdataFiles_Need_to_Work_Designer[".exportFields"][] = "pdf.pdf_name";

$tdataFiles_Need_to_Work_Designer[".importFields"] = array();
$tdataFiles_Need_to_Work_Designer[".importFields"][] = "files";
$tdataFiles_Need_to_Work_Designer[".importFields"][] = "total";
$tdataFiles_Need_to_Work_Designer[".importFields"][] = "pdf.pdf_name";

$tdataFiles_Need_to_Work_Designer[".printFields"] = array();
$tdataFiles_Need_to_Work_Designer[".printFields"][] = "files";
$tdataFiles_Need_to_Work_Designer[".printFields"][] = "total";
$tdataFiles_Need_to_Work_Designer[".printFields"][] = "pdf.pdf_name";

//	files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "files";
	$fdata["GoodName"] = "files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Files_Need_to_Work_Designer","files"); 
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

	

	
	$tdataFiles_Need_to_Work_Designer["files"] = $fdata;
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Files_Need_to_Work_Designer","total"); 
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

	

	
	$tdataFiles_Need_to_Work_Designer["total"] = $fdata;
//	pdf.pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pdf.pdf_name";
	$fdata["GoodName"] = "pdf_pdf_name";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Files_Need_to_Work_Designer","pdf_pdf_name"); 
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
	
	
	
	

	

	
	$tdataFiles_Need_to_Work_Designer["pdf.pdf_name"] = $fdata;

	
$tables_data["Files Need to Work Designer"]=&$tdataFiles_Need_to_Work_Designer;
$field_labels["Files_Need_to_Work_Designer"] = &$fieldLabelsFiles_Need_to_Work_Designer;
$fieldToolTips["Files Need to Work Designer"] = &$fieldToolTipsFiles_Need_to_Work_Designer;
$page_titles["Files_Need_to_Work_Designer"] = &$pageTitlesFiles_Need_to_Work_Designer;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Files Need to Work Designer"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Files Need to Work Designer"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Files_Need_to_Work_Designer()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COUNT(*) AS files,  'Total' AS total,  pdf.pdf_name AS `pdf.pdf_name`";
$proto0["m_strFrom"] = "FROM jobfile  INNER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto0["m_strWhere"] = "(jobfile.jobfile_status_id =3) AND (jobfile.end2_date = '0000-00-00 00:00:00')";
$proto0["m_strOrderBy"] = "ORDER BY pdf.pdf_name";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(jobfile.jobfile_status_id =3) AND (jobfile.end2_date = '0000-00-00 00:00:00')";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.jobfile_status_id =3) AND (jobfile.end2_date = '0000-00-00 00:00:00')"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.jobfile_status_id =3";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Files Need to Work Designer"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "=3";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "jobfile.end2_date = '0000-00-00 00:00:00'";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Files Need to Work Designer"
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
$proto9["m_srcTableName"] = "Files Need to Work Designer";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "files";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'Total'"
));

$proto12["m_sql"] = "'Total'";
$proto12["m_srcTableName"] = "Files Need to Work Designer";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "total";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Files Need to Work Designer"
));

$proto14["m_sql"] = "pdf.pdf_name";
$proto14["m_srcTableName"] = "Files Need to Work Designer";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "pdf.pdf_name";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "jobfile";
$proto17["m_srcTableName"] = "Files Need to Work Designer";
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
$proto16["m_srcTableName"] = "Files Need to Work Designer";
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
$proto21["m_srcTableName"] = "Files Need to Work Designer";
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
$proto20["m_srcTableName"] = "Files Need to Work Designer";
$proto22=array();
$proto22["m_sql"] = "jobfile.project_id = pdf.pdf_id";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Files Need to Work Designer"
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
	"m_srcTableName" => "Files Need to Work Designer"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Files Need to Work Designer";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Files_Need_to_Work_Designer = createSqlQuery_Files_Need_to_Work_Designer();


	
			
	
$tdataFiles_Need_to_Work_Designer[".sqlquery"] = $queryData_Files_Need_to_Work_Designer;

$tableEvents["Files Need to Work Designer"] = new eventsBase;
$tdataFiles_Need_to_Work_Designer[".hasEvents"] = false;

?>