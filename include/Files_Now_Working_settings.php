<?php
require_once(getabspath("classes/cipherer.php"));




$tdataFiles_Now_Working = array();	
	$tdataFiles_Now_Working[".truncateText"] = true;
	$tdataFiles_Now_Working[".NumberOfChars"] = 80; 
	$tdataFiles_Now_Working[".ShortName"] = "Files_Now_Working";
	$tdataFiles_Now_Working[".OwnerID"] = "";
	$tdataFiles_Now_Working[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsFiles_Now_Working = array();
$fieldToolTipsFiles_Now_Working = array();
$pageTitlesFiles_Now_Working = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsFiles_Now_Working["English"] = array();
	$fieldToolTipsFiles_Now_Working["English"] = array();
	$pageTitlesFiles_Now_Working["English"] = array();
	$fieldLabelsFiles_Now_Working["English"]["files"] = "Files";
	$fieldToolTipsFiles_Now_Working["English"]["files"] = "";
	$fieldLabelsFiles_Now_Working["English"]["total"] = "Total";
	$fieldToolTipsFiles_Now_Working["English"]["total"] = "";
	if (count($fieldToolTipsFiles_Now_Working["English"]))
		$tdataFiles_Now_Working[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsFiles_Now_Working[""] = array();
	$fieldToolTipsFiles_Now_Working[""] = array();
	$pageTitlesFiles_Now_Working[""] = array();
	if (count($fieldToolTipsFiles_Now_Working[""]))
		$tdataFiles_Now_Working[".isUseToolTips"] = true;
}
	
	
	$tdataFiles_Now_Working[".NCSearch"] = true;



$tdataFiles_Now_Working[".shortTableName"] = "Files_Now_Working";
$tdataFiles_Now_Working[".nSecOptions"] = 0;
$tdataFiles_Now_Working[".recsPerRowList"] = 1;
$tdataFiles_Now_Working[".recsPerRowPrint"] = 1;
$tdataFiles_Now_Working[".mainTableOwnerID"] = "";
$tdataFiles_Now_Working[".moveNext"] = 1;
$tdataFiles_Now_Working[".entityType"] = 2;

$tdataFiles_Now_Working[".strOriginalTableName"] = "jobfile";




$tdataFiles_Now_Working[".showAddInPopup"] = false;

$tdataFiles_Now_Working[".showEditInPopup"] = false;

$tdataFiles_Now_Working[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataFiles_Now_Working[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataFiles_Now_Working[".fieldsForRegister"] = array();

$tdataFiles_Now_Working[".listAjax"] = false;

	$tdataFiles_Now_Working[".audit"] = false;

	$tdataFiles_Now_Working[".locking"] = false;


$tdataFiles_Now_Working[".add"] = true;
$tdataFiles_Now_Working[".afterAddAction"] = 1;
$tdataFiles_Now_Working[".closePopupAfterAdd"] = 1;
$tdataFiles_Now_Working[".afterAddActionDetTable"] = "";

$tdataFiles_Now_Working[".list"] = true;

$tdataFiles_Now_Working[".inlineAdd"] = true;


$tdataFiles_Now_Working[".exportTo"] = true;

$tdataFiles_Now_Working[".printFriendly"] = true;


$tdataFiles_Now_Working[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataFiles_Now_Working[".searchSaving"] = false;
//

$tdataFiles_Now_Working[".showSearchPanel"] = true;
		$tdataFiles_Now_Working[".flexibleSearch"] = true;		

if (isMobile())
	$tdataFiles_Now_Working[".isUseAjaxSuggest"] = false;
else 
	$tdataFiles_Now_Working[".isUseAjaxSuggest"] = true;



																																																																																																																																			
$tdataFiles_Now_Working[".addPageEvents"] = false;

// use timepicker for search panel
$tdataFiles_Now_Working[".isUseTimeForSearch"] = false;





$tdataFiles_Now_Working[".allSearchFields"] = array();
$tdataFiles_Now_Working[".filterFields"] = array();
$tdataFiles_Now_Working[".requiredSearchFields"] = array();

$tdataFiles_Now_Working[".allSearchFields"][] = "total";
	$tdataFiles_Now_Working[".allSearchFields"][] = "files";
	

$tdataFiles_Now_Working[".googleLikeFields"] = array();
$tdataFiles_Now_Working[".googleLikeFields"][] = "total";
$tdataFiles_Now_Working[".googleLikeFields"][] = "files";


$tdataFiles_Now_Working[".advSearchFields"] = array();
$tdataFiles_Now_Working[".advSearchFields"][] = "total";
$tdataFiles_Now_Working[".advSearchFields"][] = "files";

$tdataFiles_Now_Working[".tableType"] = "report";

$tdataFiles_Now_Working[".printerPageOrientation"] = 0;
$tdataFiles_Now_Working[".nPrinterPageScale"] = 100;

$tdataFiles_Now_Working[".nPrinterSplitRecords"] = 40;

$tdataFiles_Now_Working[".nPrinterPDFSplitRecords"] = 40;



$tdataFiles_Now_Working[".geocodingEnabled"] = false;

//report settings
$tdataFiles_Now_Working[".printReportLayout"] = 6;	

$tdataFiles_Now_Working[".reportPrintPartitionType"] = 1;	
$tdataFiles_Now_Working[".reportPrintGroupsPerPage"] = 40;	
	$tdataFiles_Now_Working[".reportPrintPDFGroupsPerPage"] = 40;
$tdataFiles_Now_Working[".lowGroup"] = 0;



$tdataFiles_Now_Working[".pageSize"] = 20;	


$tdataFiles_Now_Working[".isExistTotalFields"] = true;




$tdataFiles_Now_Working[".repShowDet"] = true;

$tdataFiles_Now_Working[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataFiles_Now_Working[".strOrderBy"] = $tstrOrderBy;

$tdataFiles_Now_Working[".orderindexes"] = array();

$tdataFiles_Now_Working[".sqlHead"] = "SELECT 'Total' AS total,  COUNT(*) AS files";
$tdataFiles_Now_Working[".sqlFrom"] = "FROM jobfile  INNER JOIN job ON jobfile.job_id = job.job_id";
$tdataFiles_Now_Working[".sqlWhereExpr"] = "(jobfile.start2_date > '0000-00-00 00:00:00') AND (jobfile.end2_date = '0000-00-00 00:00:00') AND (job.jobstatus_id !=9)";
$tdataFiles_Now_Working[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataFiles_Now_Working[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataFiles_Now_Working[".arrGroupsPerPage"] = $arrGPP;

$tdataFiles_Now_Working[".highlightSearchResults"] = true;

$tableKeysFiles_Now_Working = array();
$tdataFiles_Now_Working[".Keys"] = $tableKeysFiles_Now_Working;

$tdataFiles_Now_Working[".listFields"] = array();
$tdataFiles_Now_Working[".listFields"][] = "total";
$tdataFiles_Now_Working[".listFields"][] = "files";

$tdataFiles_Now_Working[".hideMobileList"] = array();


$tdataFiles_Now_Working[".viewFields"] = array();
$tdataFiles_Now_Working[".viewFields"][] = "total";
$tdataFiles_Now_Working[".viewFields"][] = "files";

$tdataFiles_Now_Working[".addFields"] = array();

$tdataFiles_Now_Working[".masterListFields"] = array();
$tdataFiles_Now_Working[".masterListFields"][] = "total";
$tdataFiles_Now_Working[".masterListFields"][] = "files";

$tdataFiles_Now_Working[".inlineAddFields"] = array();

$tdataFiles_Now_Working[".editFields"] = array();

$tdataFiles_Now_Working[".inlineEditFields"] = array();

$tdataFiles_Now_Working[".exportFields"] = array();
$tdataFiles_Now_Working[".exportFields"][] = "total";
$tdataFiles_Now_Working[".exportFields"][] = "files";

$tdataFiles_Now_Working[".importFields"] = array();
$tdataFiles_Now_Working[".importFields"][] = "total";
$tdataFiles_Now_Working[".importFields"][] = "files";

$tdataFiles_Now_Working[".printFields"] = array();
$tdataFiles_Now_Working[".printFields"][] = "total";
$tdataFiles_Now_Working[".printFields"][] = "files";

//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Files_Now_Working","total"); 
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

	

	
	$tdataFiles_Now_Working["total"] = $fdata;
//	files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "files";
	$fdata["GoodName"] = "files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Files_Now_Working","files"); 
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

	

	
	$tdataFiles_Now_Working["files"] = $fdata;

	
$tables_data["Files Now Working"]=&$tdataFiles_Now_Working;
$field_labels["Files_Now_Working"] = &$fieldLabelsFiles_Now_Working;
$fieldToolTips["Files Now Working"] = &$fieldToolTipsFiles_Now_Working;
$page_titles["Files_Now_Working"] = &$pageTitlesFiles_Now_Working;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Files Now Working"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Files Now Working"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Files_Now_Working()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "'Total' AS total,  COUNT(*) AS files";
$proto0["m_strFrom"] = "FROM jobfile  INNER JOIN job ON jobfile.job_id = job.job_id";
$proto0["m_strWhere"] = "(jobfile.start2_date > '0000-00-00 00:00:00') AND (jobfile.end2_date = '0000-00-00 00:00:00') AND (job.jobstatus_id !=9)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(jobfile.start2_date > '0000-00-00 00:00:00') AND (jobfile.end2_date = '0000-00-00 00:00:00') AND (job.jobstatus_id !=9)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.start2_date > '0000-00-00 00:00:00') AND (jobfile.end2_date = '0000-00-00 00:00:00') AND (job.jobstatus_id !=9)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.start2_date > '0000-00-00 00:00:00'";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "start2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Files Now Working"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "> '0000-00-00 00:00:00'";
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
	"m_srcTableName" => "Files Now Working"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "= '0000-00-00 00:00:00'";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = true;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
						$proto7=array();
$proto7["m_sql"] = "job.jobstatus_id !=9";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Files Now Working"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "!=9";
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
$proto11["m_srcTableName"] = "Files Now Working";
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
$proto13["m_srcTableName"] = "Files Now Working";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "files";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "jobfile";
$proto17["m_srcTableName"] = "Files Now Working";
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
$proto16["m_srcTableName"] = "Files Now Working";
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
$proto21["m_strName"] = "job";
$proto21["m_srcTableName"] = "Files Now Working";
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
$proto20["m_sql"] = "INNER JOIN job ON jobfile.job_id = job.job_id";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "Files Now Working";
$proto22=array();
$proto22["m_sql"] = "jobfile.job_id = job.job_id";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Files Now Working"
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
$proto0["m_srcTableName"]="Files Now Working";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Files_Now_Working = createSqlQuery_Files_Now_Working();


	
		
	
$tdataFiles_Now_Working[".sqlquery"] = $queryData_Files_Now_Working;

$tableEvents["Files Now Working"] = new eventsBase;
$tdataFiles_Now_Working[".hasEvents"] = false;

?>