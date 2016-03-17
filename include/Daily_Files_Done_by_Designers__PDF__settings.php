<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDaily_Files_Done_by_Designers__PDF_ = array();	
	$tdataDaily_Files_Done_by_Designers__PDF_[".truncateText"] = true;
	$tdataDaily_Files_Done_by_Designers__PDF_[".NumberOfChars"] = 80; 
	$tdataDaily_Files_Done_by_Designers__PDF_[".ShortName"] = "Daily_Files_Done_by_Designers__PDF_";
	$tdataDaily_Files_Done_by_Designers__PDF_[".OwnerID"] = "";
	$tdataDaily_Files_Done_by_Designers__PDF_[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsDaily_Files_Done_by_Designers__PDF_ = array();
$fieldToolTipsDaily_Files_Done_by_Designers__PDF_ = array();
$pageTitlesDaily_Files_Done_by_Designers__PDF_ = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDaily_Files_Done_by_Designers__PDF_["English"] = array();
	$fieldToolTipsDaily_Files_Done_by_Designers__PDF_["English"] = array();
	$pageTitlesDaily_Files_Done_by_Designers__PDF_["English"] = array();
	$fieldLabelsDaily_Files_Done_by_Designers__PDF_["English"]["pdf_name"] = "Pdf Name";
	$fieldToolTipsDaily_Files_Done_by_Designers__PDF_["English"]["pdf_name"] = "";
	$fieldLabelsDaily_Files_Done_by_Designers__PDF_["English"]["totals"] = "Totals";
	$fieldToolTipsDaily_Files_Done_by_Designers__PDF_["English"]["totals"] = "";
	if (count($fieldToolTipsDaily_Files_Done_by_Designers__PDF_["English"]))
		$tdataDaily_Files_Done_by_Designers__PDF_[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDaily_Files_Done_by_Designers__PDF_[""] = array();
	$fieldToolTipsDaily_Files_Done_by_Designers__PDF_[""] = array();
	$pageTitlesDaily_Files_Done_by_Designers__PDF_[""] = array();
	$fieldLabelsDaily_Files_Done_by_Designers__PDF_[""]["pdf_name"] = "Pdf Name";
	$fieldToolTipsDaily_Files_Done_by_Designers__PDF_[""]["pdf_name"] = "";
	$fieldLabelsDaily_Files_Done_by_Designers__PDF_[""]["totals"] = "Totals";
	$fieldToolTipsDaily_Files_Done_by_Designers__PDF_[""]["totals"] = "";
	if (count($fieldToolTipsDaily_Files_Done_by_Designers__PDF_[""]))
		$tdataDaily_Files_Done_by_Designers__PDF_[".isUseToolTips"] = true;
}
	
	
	$tdataDaily_Files_Done_by_Designers__PDF_[".NCSearch"] = true;



$tdataDaily_Files_Done_by_Designers__PDF_[".shortTableName"] = "Daily_Files_Done_by_Designers__PDF_";
$tdataDaily_Files_Done_by_Designers__PDF_[".nSecOptions"] = 0;
$tdataDaily_Files_Done_by_Designers__PDF_[".recsPerRowList"] = 1;
$tdataDaily_Files_Done_by_Designers__PDF_[".mainTableOwnerID"] = "";
$tdataDaily_Files_Done_by_Designers__PDF_[".moveNext"] = 1;
$tdataDaily_Files_Done_by_Designers__PDF_[".nType"] = 2;

$tdataDaily_Files_Done_by_Designers__PDF_[".strOriginalTableName"] = "jobfile";




$tdataDaily_Files_Done_by_Designers__PDF_[".showAddInPopup"] = false;

$tdataDaily_Files_Done_by_Designers__PDF_[".showEditInPopup"] = false;

$tdataDaily_Files_Done_by_Designers__PDF_[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDaily_Files_Done_by_Designers__PDF_[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDaily_Files_Done_by_Designers__PDF_[".fieldsForRegister"] = array();

$tdataDaily_Files_Done_by_Designers__PDF_[".listAjax"] = false;

	$tdataDaily_Files_Done_by_Designers__PDF_[".audit"] = false;

	$tdataDaily_Files_Done_by_Designers__PDF_[".locking"] = false;


$tdataDaily_Files_Done_by_Designers__PDF_[".list"] = true;

$tdataDaily_Files_Done_by_Designers__PDF_[".inlineAdd"] = true;


$tdataDaily_Files_Done_by_Designers__PDF_[".exportTo"] = true;

$tdataDaily_Files_Done_by_Designers__PDF_[".printFriendly"] = true;


$tdataDaily_Files_Done_by_Designers__PDF_[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDaily_Files_Done_by_Designers__PDF_[".searchSaving"] = false;
//

$tdataDaily_Files_Done_by_Designers__PDF_[".showSearchPanel"] = true;
		$tdataDaily_Files_Done_by_Designers__PDF_[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDaily_Files_Done_by_Designers__PDF_[".isUseAjaxSuggest"] = false;
else 
	$tdataDaily_Files_Done_by_Designers__PDF_[".isUseAjaxSuggest"] = true;



																																																																																																																																				
$tdataDaily_Files_Done_by_Designers__PDF_[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDaily_Files_Done_by_Designers__PDF_[".isUseTimeForSearch"] = false;





$tdataDaily_Files_Done_by_Designers__PDF_[".allSearchFields"] = array();
$tdataDaily_Files_Done_by_Designers__PDF_[".filterFields"] = array();
$tdataDaily_Files_Done_by_Designers__PDF_[".requiredSearchFields"] = array();

$tdataDaily_Files_Done_by_Designers__PDF_[".allSearchFields"][] = "pdf_name";
	$tdataDaily_Files_Done_by_Designers__PDF_[".allSearchFields"][] = "totals";
	

$tdataDaily_Files_Done_by_Designers__PDF_[".googleLikeFields"] = array();
$tdataDaily_Files_Done_by_Designers__PDF_[".googleLikeFields"][] = "pdf_name";
$tdataDaily_Files_Done_by_Designers__PDF_[".googleLikeFields"][] = "totals";


$tdataDaily_Files_Done_by_Designers__PDF_[".advSearchFields"] = array();
$tdataDaily_Files_Done_by_Designers__PDF_[".advSearchFields"][] = "pdf_name";
$tdataDaily_Files_Done_by_Designers__PDF_[".advSearchFields"][] = "totals";

$tdataDaily_Files_Done_by_Designers__PDF_[".tableType"] = "report";

$tdataDaily_Files_Done_by_Designers__PDF_[".printerPageOrientation"] = 0;
$tdataDaily_Files_Done_by_Designers__PDF_[".nPrinterPageScale"] = 100;

$tdataDaily_Files_Done_by_Designers__PDF_[".nPrinterSplitRecords"] = 40;

$tdataDaily_Files_Done_by_Designers__PDF_[".nPrinterPDFSplitRecords"] = 40;


//report settings

$tdataDaily_Files_Done_by_Designers__PDF_[".reportPrintPartitionType"] = 0;	
$tdataDaily_Files_Done_by_Designers__PDF_[".reportPrintGroupsPerPage"] = 3;	
	$tdataDaily_Files_Done_by_Designers__PDF_[".lowGroup"] = 2;



$tdataDaily_Files_Done_by_Designers__PDF_[".reportGroupFields"] = true;
$tdataDaily_Files_Done_by_Designers__PDF_[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "pdf_name";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "totals";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdataDaily_Files_Done_by_Designers__PDF_[".reportGroupFieldsData"] = $reportGroupFields;


$tdataDaily_Files_Done_by_Designers__PDF_[".isExistTotalFields"] = true;




$tdataDaily_Files_Done_by_Designers__PDF_[".repShowDet"] = true;

$tdataDaily_Files_Done_by_Designers__PDF_[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDaily_Files_Done_by_Designers__PDF_[".strOrderBy"] = $tstrOrderBy;

$tdataDaily_Files_Done_by_Designers__PDF_[".orderindexes"] = array();

$tdataDaily_Files_Done_by_Designers__PDF_[".sqlHead"] = "SELECT pdf.pdf_name,  COUNT(*) AS totals";
$tdataDaily_Files_Done_by_Designers__PDF_[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$tdataDaily_Files_Done_by_Designers__PDF_[".sqlWhereExpr"] = "(jobfile.start2_date BETWEEN '2015-09-26 22:00:00.000000' AND '2015-09-27 10:00:00.000000')";
$tdataDaily_Files_Done_by_Designers__PDF_[".sqlTail"] = "GROUP BY jobfile.project_id";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDaily_Files_Done_by_Designers__PDF_[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDaily_Files_Done_by_Designers__PDF_[".arrGroupsPerPage"] = $arrGPP;

$tdataDaily_Files_Done_by_Designers__PDF_[".highlightSearchResults"] = true;

$tableKeysDaily_Files_Done_by_Designers__PDF_ = array();
$tdataDaily_Files_Done_by_Designers__PDF_[".Keys"] = $tableKeysDaily_Files_Done_by_Designers__PDF_;

$tdataDaily_Files_Done_by_Designers__PDF_[".listFields"] = array();
$tdataDaily_Files_Done_by_Designers__PDF_[".listFields"][] = "pdf_name";
$tdataDaily_Files_Done_by_Designers__PDF_[".listFields"][] = "totals";

$tdataDaily_Files_Done_by_Designers__PDF_[".hideMobileList"] = array();


$tdataDaily_Files_Done_by_Designers__PDF_[".viewFields"] = array();
$tdataDaily_Files_Done_by_Designers__PDF_[".viewFields"][] = "pdf_name";
$tdataDaily_Files_Done_by_Designers__PDF_[".viewFields"][] = "totals";

$tdataDaily_Files_Done_by_Designers__PDF_[".addFields"] = array();

$tdataDaily_Files_Done_by_Designers__PDF_[".inlineAddFields"] = array();

$tdataDaily_Files_Done_by_Designers__PDF_[".editFields"] = array();

$tdataDaily_Files_Done_by_Designers__PDF_[".inlineEditFields"] = array();

$tdataDaily_Files_Done_by_Designers__PDF_[".exportFields"] = array();
$tdataDaily_Files_Done_by_Designers__PDF_[".exportFields"][] = "pdf_name";
$tdataDaily_Files_Done_by_Designers__PDF_[".exportFields"][] = "totals";

$tdataDaily_Files_Done_by_Designers__PDF_[".importFields"] = array();
$tdataDaily_Files_Done_by_Designers__PDF_[".importFields"][] = "pdf_name";
$tdataDaily_Files_Done_by_Designers__PDF_[".importFields"][] = "totals";

$tdataDaily_Files_Done_by_Designers__PDF_[".printFields"] = array();
$tdataDaily_Files_Done_by_Designers__PDF_[".printFields"][] = "pdf_name";
$tdataDaily_Files_Done_by_Designers__PDF_[".printFields"][] = "totals";

//	pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pdf_name";
	$fdata["GoodName"] = "pdf_name";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Daily_Files_Done_by_Designers__PDF_","pdf_name"); 
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

	

	
	$tdataDaily_Files_Done_by_Designers__PDF_["pdf_name"] = $fdata;
//	totals
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "totals";
	$fdata["GoodName"] = "totals";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Files_Done_by_Designers__PDF_","totals"); 
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

	

	
	$tdataDaily_Files_Done_by_Designers__PDF_["totals"] = $fdata;

	
$tables_data["Daily Files Done by Designers (PDF)"]=&$tdataDaily_Files_Done_by_Designers__PDF_;
$field_labels["Daily_Files_Done_by_Designers__PDF_"] = &$fieldLabelsDaily_Files_Done_by_Designers__PDF_;
$fieldToolTips["Daily Files Done by Designers (PDF)"] = &$fieldToolTipsDaily_Files_Done_by_Designers__PDF_;
$page_titles["Daily_Files_Done_by_Designers__PDF_"] = &$pageTitlesDaily_Files_Done_by_Designers__PDF_;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Daily Files Done by Designers (PDF)"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Daily Files Done by Designers (PDF)"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Daily_Files_Done_by_Designers__PDF_()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pdf.pdf_name,  COUNT(*) AS totals";
$proto0["m_strFrom"] = "FROM jobfile  LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto0["m_strWhere"] = "(jobfile.start2_date BETWEEN '2015-09-26 22:00:00.000000' AND '2015-09-27 10:00:00.000000')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY jobfile.project_id";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "jobfile.start2_date BETWEEN '2015-09-26 22:00:00.000000' AND '2015-09-27 10:00:00.000000'";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "start2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Files Done by Designers (PDF)"
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
	"m_srcTableName" => "Daily Files Done by Designers (PDF)"
));

$proto5["m_sql"] = "pdf.pdf_name";
$proto5["m_srcTableName"] = "Daily Files Done by Designers (PDF)";
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
$proto8["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto8);

$proto7["m_sql"] = "COUNT(*)";
$proto7["m_srcTableName"] = "Daily Files Done by Designers (PDF)";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "totals";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "jobfile";
$proto11["m_srcTableName"] = "Daily Files Done by Designers (PDF)";
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
$proto10["m_sql"] = "jobfile";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "Daily Files Done by Designers (PDF)";
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
$proto15["m_srcTableName"] = "Daily Files Done by Designers (PDF)";
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
$proto14["m_sql"] = "LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "Daily Files Done by Designers (PDF)";
$proto16=array();
$proto16["m_sql"] = "jobfile.project_id = pdf.pdf_id";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Daily Files Done by Designers (PDF)"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "= pdf.pdf_id";
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
	"m_srcTableName" => "Daily Files Done by Designers (PDF)"
));

$proto18["m_column"]=$obj;
$obj = new SQLGroupByItem($proto18);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Daily Files Done by Designers (PDF)";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Daily_Files_Done_by_Designers__PDF_ = createSqlQuery_Daily_Files_Done_by_Designers__PDF_();


	
		
	
$tdataDaily_Files_Done_by_Designers__PDF_[".sqlquery"] = $queryData_Daily_Files_Done_by_Designers__PDF_;

$tableEvents["Daily Files Done by Designers (PDF)"] = new eventsBase;
$tdataDaily_Files_Done_by_Designers__PDF_[".hasEvents"] = false;

?>