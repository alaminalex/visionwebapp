<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPDF_Done___Today = array();	
	$tdataPDF_Done___Today[".truncateText"] = true;
	$tdataPDF_Done___Today[".NumberOfChars"] = 80; 
	$tdataPDF_Done___Today[".ShortName"] = "PDF_Done___Today";
	$tdataPDF_Done___Today[".OwnerID"] = "";
	$tdataPDF_Done___Today[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsPDF_Done___Today = array();
$fieldToolTipsPDF_Done___Today = array();
$pageTitlesPDF_Done___Today = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPDF_Done___Today["English"] = array();
	$fieldToolTipsPDF_Done___Today["English"] = array();
	$pageTitlesPDF_Done___Today["English"] = array();
	$fieldLabelsPDF_Done___Today["English"]["pdf_name"] = "Pdf Name";
	$fieldToolTipsPDF_Done___Today["English"]["pdf_name"] = "";
	$fieldLabelsPDF_Done___Today["English"]["totals"] = "Totals";
	$fieldToolTipsPDF_Done___Today["English"]["totals"] = "";
	$fieldLabelsPDF_Done___Today["English"]["Taken_time"] = "Taken Time";
	$fieldToolTipsPDF_Done___Today["English"]["Taken_time"] = "";
	$fieldLabelsPDF_Done___Today["English"]["designers_used"] = "Designers Used";
	$fieldToolTipsPDF_Done___Today["English"]["designers_used"] = "";
	if (count($fieldToolTipsPDF_Done___Today["English"]))
		$tdataPDF_Done___Today[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPDF_Done___Today[""] = array();
	$fieldToolTipsPDF_Done___Today[""] = array();
	$pageTitlesPDF_Done___Today[""] = array();
	if (count($fieldToolTipsPDF_Done___Today[""]))
		$tdataPDF_Done___Today[".isUseToolTips"] = true;
}
	
	
	$tdataPDF_Done___Today[".NCSearch"] = true;



$tdataPDF_Done___Today[".shortTableName"] = "PDF_Done___Today";
$tdataPDF_Done___Today[".nSecOptions"] = 0;
$tdataPDF_Done___Today[".recsPerRowList"] = 1;
$tdataPDF_Done___Today[".recsPerRowPrint"] = 1;
$tdataPDF_Done___Today[".mainTableOwnerID"] = "";
$tdataPDF_Done___Today[".moveNext"] = 1;
$tdataPDF_Done___Today[".entityType"] = 2;

$tdataPDF_Done___Today[".strOriginalTableName"] = "jobfile";




$tdataPDF_Done___Today[".showAddInPopup"] = false;

$tdataPDF_Done___Today[".showEditInPopup"] = false;

$tdataPDF_Done___Today[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPDF_Done___Today[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPDF_Done___Today[".fieldsForRegister"] = array();

$tdataPDF_Done___Today[".listAjax"] = false;

	$tdataPDF_Done___Today[".audit"] = false;

	$tdataPDF_Done___Today[".locking"] = false;


$tdataPDF_Done___Today[".add"] = true;
$tdataPDF_Done___Today[".afterAddAction"] = 0;
$tdataPDF_Done___Today[".closePopupAfterAdd"] = 1;
$tdataPDF_Done___Today[".afterAddActionDetTable"] = "";

$tdataPDF_Done___Today[".list"] = true;

$tdataPDF_Done___Today[".inlineAdd"] = true;


$tdataPDF_Done___Today[".exportTo"] = true;

$tdataPDF_Done___Today[".printFriendly"] = true;


$tdataPDF_Done___Today[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataPDF_Done___Today[".searchSaving"] = false;
//

$tdataPDF_Done___Today[".showSearchPanel"] = true;
		$tdataPDF_Done___Today[".flexibleSearch"] = true;		

if (isMobile())
	$tdataPDF_Done___Today[".isUseAjaxSuggest"] = false;
else 
	$tdataPDF_Done___Today[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataPDF_Done___Today[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPDF_Done___Today[".isUseTimeForSearch"] = false;





$tdataPDF_Done___Today[".allSearchFields"] = array();
$tdataPDF_Done___Today[".filterFields"] = array();
$tdataPDF_Done___Today[".requiredSearchFields"] = array();

$tdataPDF_Done___Today[".allSearchFields"][] = "pdf_name";
	$tdataPDF_Done___Today[".allSearchFields"][] = "totals";
	$tdataPDF_Done___Today[".allSearchFields"][] = "Taken_time";
	$tdataPDF_Done___Today[".allSearchFields"][] = "designers_used";
	

$tdataPDF_Done___Today[".googleLikeFields"] = array();
$tdataPDF_Done___Today[".googleLikeFields"][] = "pdf_name";
$tdataPDF_Done___Today[".googleLikeFields"][] = "totals";
$tdataPDF_Done___Today[".googleLikeFields"][] = "Taken_time";
$tdataPDF_Done___Today[".googleLikeFields"][] = "designers_used";


$tdataPDF_Done___Today[".advSearchFields"] = array();
$tdataPDF_Done___Today[".advSearchFields"][] = "pdf_name";
$tdataPDF_Done___Today[".advSearchFields"][] = "totals";
$tdataPDF_Done___Today[".advSearchFields"][] = "Taken_time";
$tdataPDF_Done___Today[".advSearchFields"][] = "designers_used";

$tdataPDF_Done___Today[".tableType"] = "report";

$tdataPDF_Done___Today[".printerPageOrientation"] = 0;
$tdataPDF_Done___Today[".nPrinterPageScale"] = 100;

$tdataPDF_Done___Today[".nPrinterSplitRecords"] = 40;

$tdataPDF_Done___Today[".nPrinterPDFSplitRecords"] = 40;



$tdataPDF_Done___Today[".geocodingEnabled"] = false;

//report settings
$tdataPDF_Done___Today[".printReportLayout"] = 6;	

$tdataPDF_Done___Today[".reportPrintPartitionType"] = 1;	
$tdataPDF_Done___Today[".reportPrintGroupsPerPage"] = 40;	
	$tdataPDF_Done___Today[".reportPrintPDFGroupsPerPage"] = 40;
$tdataPDF_Done___Today[".lowGroup"] = 0;



$tdataPDF_Done___Today[".pageSize"] = 500;	


$tdataPDF_Done___Today[".isExistTotalFields"] = true;


$tdataPDF_Done___Today[".reportPageSummary"] = true;


$tdataPDF_Done___Today[".repShowDet"] = true;

$tdataPDF_Done___Today[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY pdf.pdf_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPDF_Done___Today[".strOrderBy"] = $tstrOrderBy;

$tdataPDF_Done___Today[".orderindexes"] = array();
$tdataPDF_Done___Today[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "pdf.pdf_name");

$tdataPDF_Done___Today[".sqlHead"] = "SELECT pdf.pdf_name,  COUNT(*) AS totals,  SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time))) AS Taken_time,  SUM(TIME_TO_SEC(jobfile.designer2_time))/23400 AS designers_used";
$tdataPDF_Done___Today[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN pdf ON pdf.pdf_id = jobfile.project_id";
$tdataPDF_Done___Today[".sqlWhereExpr"] = "(jobfile.end2_date BETWEEN DATE_ADD(DATE(NOW()), INTERVAL -75 MINUTE) AND DATE_ADD(DATE(NOW()), INTERVAL 1364 MINUTE)) AND (jobfile.designer2_time IS NOT NULL)";
$tdataPDF_Done___Today[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPDF_Done___Today[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPDF_Done___Today[".arrGroupsPerPage"] = $arrGPP;

$tdataPDF_Done___Today[".highlightSearchResults"] = true;

$tableKeysPDF_Done___Today = array();
$tdataPDF_Done___Today[".Keys"] = $tableKeysPDF_Done___Today;

$tdataPDF_Done___Today[".listFields"] = array();
$tdataPDF_Done___Today[".listFields"][] = "pdf_name";
$tdataPDF_Done___Today[".listFields"][] = "totals";
$tdataPDF_Done___Today[".listFields"][] = "Taken_time";
$tdataPDF_Done___Today[".listFields"][] = "designers_used";

$tdataPDF_Done___Today[".hideMobileList"] = array();


$tdataPDF_Done___Today[".viewFields"] = array();
$tdataPDF_Done___Today[".viewFields"][] = "pdf_name";
$tdataPDF_Done___Today[".viewFields"][] = "totals";
$tdataPDF_Done___Today[".viewFields"][] = "Taken_time";
$tdataPDF_Done___Today[".viewFields"][] = "designers_used";

$tdataPDF_Done___Today[".addFields"] = array();

$tdataPDF_Done___Today[".masterListFields"] = array();
$tdataPDF_Done___Today[".masterListFields"][] = "pdf_name";
$tdataPDF_Done___Today[".masterListFields"][] = "totals";
$tdataPDF_Done___Today[".masterListFields"][] = "Taken_time";
$tdataPDF_Done___Today[".masterListFields"][] = "designers_used";

$tdataPDF_Done___Today[".inlineAddFields"] = array();

$tdataPDF_Done___Today[".editFields"] = array();

$tdataPDF_Done___Today[".inlineEditFields"] = array();

$tdataPDF_Done___Today[".exportFields"] = array();
$tdataPDF_Done___Today[".exportFields"][] = "pdf_name";
$tdataPDF_Done___Today[".exportFields"][] = "totals";
$tdataPDF_Done___Today[".exportFields"][] = "Taken_time";
$tdataPDF_Done___Today[".exportFields"][] = "designers_used";

$tdataPDF_Done___Today[".importFields"] = array();
$tdataPDF_Done___Today[".importFields"][] = "pdf_name";
$tdataPDF_Done___Today[".importFields"][] = "totals";
$tdataPDF_Done___Today[".importFields"][] = "Taken_time";
$tdataPDF_Done___Today[".importFields"][] = "designers_used";

$tdataPDF_Done___Today[".printFields"] = array();
$tdataPDF_Done___Today[".printFields"][] = "pdf_name";
$tdataPDF_Done___Today[".printFields"][] = "totals";
$tdataPDF_Done___Today[".printFields"][] = "Taken_time";
$tdataPDF_Done___Today[".printFields"][] = "designers_used";

//	pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pdf_name";
	$fdata["GoodName"] = "pdf_name";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("PDF_Done___Today","pdf_name"); 
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

	

	
	$tdataPDF_Done___Today["pdf_name"] = $fdata;
//	totals
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "totals";
	$fdata["GoodName"] = "totals";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PDF_Done___Today","totals"); 
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

	

	
	$tdataPDF_Done___Today["totals"] = $fdata;
//	Taken_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Taken_time";
	$fdata["GoodName"] = "Taken_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PDF_Done___Today","Taken_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Taken_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time)))";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
		
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);
	
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataPDF_Done___Today["Taken_time"] = $fdata;
//	designers_used
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "designers_used";
	$fdata["GoodName"] = "designers_used";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PDF_Done___Today","designers_used"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designers_used"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(TIME_TO_SEC(jobfile.designer2_time))/23400";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
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

	

	
	$tdataPDF_Done___Today["designers_used"] = $fdata;

	
$tables_data["PDF Done - Today"]=&$tdataPDF_Done___Today;
$field_labels["PDF_Done___Today"] = &$fieldLabelsPDF_Done___Today;
$fieldToolTips["PDF Done - Today"] = &$fieldToolTipsPDF_Done___Today;
$page_titles["PDF_Done___Today"] = &$pageTitlesPDF_Done___Today;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PDF Done - Today"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["PDF Done - Today"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PDF_Done___Today()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pdf.pdf_name,  COUNT(*) AS totals,  SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time))) AS Taken_time,  SUM(TIME_TO_SEC(jobfile.designer2_time))/23400 AS designers_used";
$proto0["m_strFrom"] = "FROM jobfile  LEFT OUTER JOIN pdf ON pdf.pdf_id = jobfile.project_id";
$proto0["m_strWhere"] = "(jobfile.end2_date BETWEEN DATE_ADD(DATE(NOW()), INTERVAL -75 MINUTE) AND DATE_ADD(DATE(NOW()), INTERVAL 1364 MINUTE)) AND (jobfile.designer2_time IS NOT NULL)";
$proto0["m_strOrderBy"] = "ORDER BY pdf.pdf_name";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(jobfile.end2_date BETWEEN DATE_ADD(DATE(NOW()), INTERVAL -75 MINUTE) AND DATE_ADD(DATE(NOW()), INTERVAL 1364 MINUTE)) AND (jobfile.designer2_time IS NOT NULL)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.end2_date BETWEEN DATE_ADD(DATE(NOW()), INTERVAL -75 MINUTE) AND DATE_ADD(DATE(NOW()), INTERVAL 1364 MINUTE)) AND (jobfile.designer2_time IS NOT NULL)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.end2_date BETWEEN DATE_ADD(DATE(NOW()), INTERVAL -75 MINUTE) AND DATE_ADD(DATE(NOW()), INTERVAL 1364 MINUTE)";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "PDF Done - Today"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "BETWEEN DATE_ADD(DATE(NOW()), INTERVAL -75 MINUTE) AND DATE_ADD(DATE(NOW()), INTERVAL 1364 MINUTE)";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "jobfile.designer2_time IS NOT NULL";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_time",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "PDF Done - Today"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "IS NOT NULL";
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
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "PDF Done - Today"
));

$proto9["m_sql"] = "pdf.pdf_name";
$proto9["m_srcTableName"] = "PDF Done - Today";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
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
$proto11["m_srcTableName"] = "PDF Done - Today";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "totals";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(TIME_TO_SEC(jobfile.designer2_time))"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time)))";
$proto14["m_srcTableName"] = "PDF Done - Today";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Taken_time";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(TIME_TO_SEC(jobfile.designer2_time))/23400"
));

$proto17["m_sql"] = "SUM(TIME_TO_SEC(jobfile.designer2_time))/23400";
$proto17["m_srcTableName"] = "PDF Done - Today";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "designers_used";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "jobfile";
$proto20["m_srcTableName"] = "PDF Done - Today";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "jobfile_id";
$proto20["m_columns"][] = "file_url";
$proto20["m_columns"][] = "client_id";
$proto20["m_columns"][] = "work_id";
$proto20["m_columns"][] = "job_id";
$proto20["m_columns"][] = "project_id";
$proto20["m_columns"][] = "folder_name";
$proto20["m_columns"][] = "filename";
$proto20["m_columns"][] = "jobfile_type";
$proto20["m_columns"][] = "jobfile_note";
$proto20["m_columns"][] = "jobfile_status_id";
$proto20["m_columns"][] = "downloader_id";
$proto20["m_columns"][] = "distributor_id";
$proto20["m_columns"][] = "designer_id";
$proto20["m_columns"][] = "qc_id";
$proto20["m_columns"][] = "uploader_id";
$proto20["m_columns"][] = "notifier_id";
$proto20["m_columns"][] = "rejector_id";
$proto20["m_columns"][] = "download_date";
$proto20["m_columns"][] = "distribute_date";
$proto20["m_columns"][] = "start_date";
$proto20["m_columns"][] = "end_date";
$proto20["m_columns"][] = "designer_time";
$proto20["m_columns"][] = "qcstart_date";
$proto20["m_columns"][] = "qcend_date";
$proto20["m_columns"][] = "qc_time";
$proto20["m_columns"][] = "upload_date";
$proto20["m_columns"][] = "notify_date";
$proto20["m_columns"][] = "reject_date";
$proto20["m_columns"][] = "reject_reason";
$proto20["m_columns"][] = "designer2_id";
$proto20["m_columns"][] = "start2_date";
$proto20["m_columns"][] = "end2_date";
$proto20["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "jobfile";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "PDF Done - Today";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
												$proto23=array();
$proto23["m_link"] = "SQLL_LEFTJOIN";
			$proto24=array();
$proto24["m_strName"] = "pdf";
$proto24["m_srcTableName"] = "PDF Done - Today";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "pdf_id";
$proto24["m_columns"][] = "pdf_name";
$proto24["m_columns"][] = "client_id";
$proto24["m_columns"][] = "pdf_location";
$proto24["m_columns"][] = "last_update";
$proto24["m_columns"][] = "pdf_estimated_average";
$proto24["m_columns"][] = "pdf_estimated_average1";
$proto24["m_columns"][] = "pdf_estimated_average2";
$proto24["m_columns"][] = "pdf_actual_average";
$proto24["m_columns"][] = "price";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "LEFT OUTER JOIN pdf ON pdf.pdf_id = jobfile.project_id";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "PDF Done - Today";
$proto25=array();
$proto25["m_sql"] = "pdf.pdf_id = jobfile.project_id";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "pdf",
	"m_srcTableName" => "PDF Done - Today"
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "= jobfile.project_id";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "PDF Done - Today"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "PDF Done - Today"
));

$proto29["m_column"]=$obj;
$proto29["m_bAsc"] = 1;
$proto29["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto29);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="PDF Done - Today";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PDF_Done___Today = createSqlQuery_PDF_Done___Today();


	
				
	
$tdataPDF_Done___Today[".sqlquery"] = $queryData_PDF_Done___Today;

$tableEvents["PDF Done - Today"] = new eventsBase;
$tdataPDF_Done___Today[".hasEvents"] = false;

?>