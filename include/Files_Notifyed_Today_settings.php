<?php
require_once(getabspath("classes/cipherer.php"));




$tdataFiles_Notifyed_Today = array();	
	$tdataFiles_Notifyed_Today[".truncateText"] = true;
	$tdataFiles_Notifyed_Today[".NumberOfChars"] = 80; 
	$tdataFiles_Notifyed_Today[".ShortName"] = "Files_Notifyed_Today";
	$tdataFiles_Notifyed_Today[".OwnerID"] = "";
	$tdataFiles_Notifyed_Today[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsFiles_Notifyed_Today = array();
$fieldToolTipsFiles_Notifyed_Today = array();
$pageTitlesFiles_Notifyed_Today = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsFiles_Notifyed_Today["English"] = array();
	$fieldToolTipsFiles_Notifyed_Today["English"] = array();
	$pageTitlesFiles_Notifyed_Today["English"] = array();
	$fieldLabelsFiles_Notifyed_Today["English"]["total"] = "Total";
	$fieldToolTipsFiles_Notifyed_Today["English"]["total"] = "";
	$fieldLabelsFiles_Notifyed_Today["English"]["Files"] = "Files";
	$fieldToolTipsFiles_Notifyed_Today["English"]["Files"] = "";
	if (count($fieldToolTipsFiles_Notifyed_Today["English"]))
		$tdataFiles_Notifyed_Today[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsFiles_Notifyed_Today[""] = array();
	$fieldToolTipsFiles_Notifyed_Today[""] = array();
	$pageTitlesFiles_Notifyed_Today[""] = array();
	if (count($fieldToolTipsFiles_Notifyed_Today[""]))
		$tdataFiles_Notifyed_Today[".isUseToolTips"] = true;
}
	
	
	$tdataFiles_Notifyed_Today[".NCSearch"] = true;



$tdataFiles_Notifyed_Today[".shortTableName"] = "Files_Notifyed_Today";
$tdataFiles_Notifyed_Today[".nSecOptions"] = 0;
$tdataFiles_Notifyed_Today[".recsPerRowList"] = 1;
$tdataFiles_Notifyed_Today[".recsPerRowPrint"] = 1;
$tdataFiles_Notifyed_Today[".mainTableOwnerID"] = "";
$tdataFiles_Notifyed_Today[".moveNext"] = 1;
$tdataFiles_Notifyed_Today[".entityType"] = 2;

$tdataFiles_Notifyed_Today[".strOriginalTableName"] = "jobfile";




$tdataFiles_Notifyed_Today[".showAddInPopup"] = false;

$tdataFiles_Notifyed_Today[".showEditInPopup"] = false;

$tdataFiles_Notifyed_Today[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataFiles_Notifyed_Today[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataFiles_Notifyed_Today[".fieldsForRegister"] = array();

$tdataFiles_Notifyed_Today[".listAjax"] = false;

	$tdataFiles_Notifyed_Today[".audit"] = false;

	$tdataFiles_Notifyed_Today[".locking"] = false;


$tdataFiles_Notifyed_Today[".add"] = true;
$tdataFiles_Notifyed_Today[".afterAddAction"] = 1;
$tdataFiles_Notifyed_Today[".closePopupAfterAdd"] = 1;
$tdataFiles_Notifyed_Today[".afterAddActionDetTable"] = "";

$tdataFiles_Notifyed_Today[".list"] = true;

$tdataFiles_Notifyed_Today[".inlineAdd"] = true;


$tdataFiles_Notifyed_Today[".exportTo"] = true;

$tdataFiles_Notifyed_Today[".printFriendly"] = true;


$tdataFiles_Notifyed_Today[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataFiles_Notifyed_Today[".searchSaving"] = false;
//

$tdataFiles_Notifyed_Today[".showSearchPanel"] = true;
		$tdataFiles_Notifyed_Today[".flexibleSearch"] = true;		

if (isMobile())
	$tdataFiles_Notifyed_Today[".isUseAjaxSuggest"] = false;
else 
	$tdataFiles_Notifyed_Today[".isUseAjaxSuggest"] = true;



																																																																																																																																			
$tdataFiles_Notifyed_Today[".addPageEvents"] = false;

// use timepicker for search panel
$tdataFiles_Notifyed_Today[".isUseTimeForSearch"] = false;





$tdataFiles_Notifyed_Today[".allSearchFields"] = array();
$tdataFiles_Notifyed_Today[".filterFields"] = array();
$tdataFiles_Notifyed_Today[".requiredSearchFields"] = array();

$tdataFiles_Notifyed_Today[".allSearchFields"][] = "total";
	$tdataFiles_Notifyed_Today[".allSearchFields"][] = "Files";
	

$tdataFiles_Notifyed_Today[".googleLikeFields"] = array();
$tdataFiles_Notifyed_Today[".googleLikeFields"][] = "total";
$tdataFiles_Notifyed_Today[".googleLikeFields"][] = "Files";


$tdataFiles_Notifyed_Today[".advSearchFields"] = array();
$tdataFiles_Notifyed_Today[".advSearchFields"][] = "total";
$tdataFiles_Notifyed_Today[".advSearchFields"][] = "Files";

$tdataFiles_Notifyed_Today[".tableType"] = "report";

$tdataFiles_Notifyed_Today[".printerPageOrientation"] = 0;
$tdataFiles_Notifyed_Today[".nPrinterPageScale"] = 100;

$tdataFiles_Notifyed_Today[".nPrinterSplitRecords"] = 40;

$tdataFiles_Notifyed_Today[".nPrinterPDFSplitRecords"] = 40;



$tdataFiles_Notifyed_Today[".geocodingEnabled"] = false;

//report settings
$tdataFiles_Notifyed_Today[".printReportLayout"] = 6;	

$tdataFiles_Notifyed_Today[".reportPrintPartitionType"] = 1;	
$tdataFiles_Notifyed_Today[".reportPrintGroupsPerPage"] = 40;	
	$tdataFiles_Notifyed_Today[".reportPrintPDFGroupsPerPage"] = 40;
$tdataFiles_Notifyed_Today[".lowGroup"] = 0;



$tdataFiles_Notifyed_Today[".pageSize"] = 1;	






$tdataFiles_Notifyed_Today[".repShowDet"] = true;

$tdataFiles_Notifyed_Today[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataFiles_Notifyed_Today[".strOrderBy"] = $tstrOrderBy;

$tdataFiles_Notifyed_Today[".orderindexes"] = array();

$tdataFiles_Notifyed_Today[".sqlHead"] = "SELECT 'Total' AS total,  COUNT(*) AS Files";
$tdataFiles_Notifyed_Today[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN job ON jobfile.job_id = job.job_id";
$tdataFiles_Notifyed_Today[".sqlWhereExpr"] = "(jobfile.end2_date > date(now())) AND (job.jobstatus_id = 9) AND (jobfile.jobfile_status_id = 7)";
$tdataFiles_Notifyed_Today[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataFiles_Notifyed_Today[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataFiles_Notifyed_Today[".arrGroupsPerPage"] = $arrGPP;

$tdataFiles_Notifyed_Today[".highlightSearchResults"] = true;

$tableKeysFiles_Notifyed_Today = array();
$tdataFiles_Notifyed_Today[".Keys"] = $tableKeysFiles_Notifyed_Today;

$tdataFiles_Notifyed_Today[".listFields"] = array();
$tdataFiles_Notifyed_Today[".listFields"][] = "total";
$tdataFiles_Notifyed_Today[".listFields"][] = "Files";

$tdataFiles_Notifyed_Today[".hideMobileList"] = array();


$tdataFiles_Notifyed_Today[".viewFields"] = array();
$tdataFiles_Notifyed_Today[".viewFields"][] = "total";
$tdataFiles_Notifyed_Today[".viewFields"][] = "Files";

$tdataFiles_Notifyed_Today[".addFields"] = array();

$tdataFiles_Notifyed_Today[".masterListFields"] = array();
$tdataFiles_Notifyed_Today[".masterListFields"][] = "total";
$tdataFiles_Notifyed_Today[".masterListFields"][] = "Files";

$tdataFiles_Notifyed_Today[".inlineAddFields"] = array();

$tdataFiles_Notifyed_Today[".editFields"] = array();

$tdataFiles_Notifyed_Today[".inlineEditFields"] = array();

$tdataFiles_Notifyed_Today[".exportFields"] = array();
$tdataFiles_Notifyed_Today[".exportFields"][] = "total";
$tdataFiles_Notifyed_Today[".exportFields"][] = "Files";

$tdataFiles_Notifyed_Today[".importFields"] = array();
$tdataFiles_Notifyed_Today[".importFields"][] = "total";
$tdataFiles_Notifyed_Today[".importFields"][] = "Files";

$tdataFiles_Notifyed_Today[".printFields"] = array();
$tdataFiles_Notifyed_Today[".printFields"][] = "total";
$tdataFiles_Notifyed_Today[".printFields"][] = "Files";

//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Files_Notifyed_Today","total"); 
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

	

	
	$tdataFiles_Notifyed_Today["total"] = $fdata;
//	Files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Files";
	$fdata["GoodName"] = "Files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Files_Notifyed_Today","Files"); 
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

	

	
	$tdataFiles_Notifyed_Today["Files"] = $fdata;

	
$tables_data["Files Notifyed Today"]=&$tdataFiles_Notifyed_Today;
$field_labels["Files_Notifyed_Today"] = &$fieldLabelsFiles_Notifyed_Today;
$fieldToolTips["Files Notifyed Today"] = &$fieldToolTipsFiles_Notifyed_Today;
$page_titles["Files_Notifyed_Today"] = &$pageTitlesFiles_Notifyed_Today;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Files Notifyed Today"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Files Notifyed Today"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Files_Notifyed_Today()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "'Total' AS total,  COUNT(*) AS Files";
$proto0["m_strFrom"] = "FROM jobfile  LEFT OUTER JOIN job ON jobfile.job_id = job.job_id";
$proto0["m_strWhere"] = "(jobfile.end2_date > date(now())) AND (job.jobstatus_id = 9) AND (jobfile.jobfile_status_id = 7)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(jobfile.end2_date > date(now())) AND (job.jobstatus_id = 9) AND (jobfile.jobfile_status_id = 7)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.end2_date > date(now())) AND (job.jobstatus_id = 9) AND (jobfile.jobfile_status_id = 7)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.end2_date > date(now())";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Files Notifyed Today"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "> date(now())";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "job.jobstatus_id = 9";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Files Notifyed Today"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "= 9";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = true;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
						$proto7=array();
$proto7["m_sql"] = "jobfile.jobfile_status_id = 7";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Files Notifyed Today"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "= 7";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = true;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto9=array();
$proto9["m_sql"] = "";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto11=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'Total'"
));

$proto11["m_sql"] = "'Total'";
$proto11["m_srcTableName"] = "Files Notifyed Today";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "total";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_COUNT";
$proto14["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "COUNT(*)";
$proto13["m_srcTableName"] = "Files Notifyed Today";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "Files";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "jobfile";
$proto17["m_srcTableName"] = "Files Notifyed Today";
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
$proto16["m_srcTableName"] = "Files Notifyed Today";
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
$proto21["m_srcTableName"] = "Files Notifyed Today";
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
$proto20["m_srcTableName"] = "Files Notifyed Today";
$proto22=array();
$proto22["m_sql"] = "jobfile.job_id = job.job_id";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Files Notifyed Today"
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
$proto0["m_srcTableName"]="Files Notifyed Today";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Files_Notifyed_Today = createSqlQuery_Files_Notifyed_Today();


	
		
	
$tdataFiles_Notifyed_Today[".sqlquery"] = $queryData_Files_Notifyed_Today;

$tableEvents["Files Notifyed Today"] = new eventsBase;
$tdataFiles_Notifyed_Today[".hasEvents"] = false;

?>