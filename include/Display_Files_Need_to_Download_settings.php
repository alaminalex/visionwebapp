<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDisplay_Files_Need_to_Download = array();	
	$tdataDisplay_Files_Need_to_Download[".truncateText"] = true;
	$tdataDisplay_Files_Need_to_Download[".NumberOfChars"] = 80; 
	$tdataDisplay_Files_Need_to_Download[".ShortName"] = "Display_Files_Need_to_Download";
	$tdataDisplay_Files_Need_to_Download[".OwnerID"] = "";
	$tdataDisplay_Files_Need_to_Download[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsDisplay_Files_Need_to_Download = array();
$fieldToolTipsDisplay_Files_Need_to_Download = array();
$pageTitlesDisplay_Files_Need_to_Download = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDisplay_Files_Need_to_Download["English"] = array();
	$fieldToolTipsDisplay_Files_Need_to_Download["English"] = array();
	$pageTitlesDisplay_Files_Need_to_Download["English"] = array();
	$fieldLabelsDisplay_Files_Need_to_Download["English"]["Total"] = "Total";
	$fieldToolTipsDisplay_Files_Need_to_Download["English"]["Total"] = "";
	$fieldLabelsDisplay_Files_Need_to_Download["English"]["jobstatus_id"] = "Need Download";
	$fieldToolTipsDisplay_Files_Need_to_Download["English"]["jobstatus_id"] = "";
	if (count($fieldToolTipsDisplay_Files_Need_to_Download["English"]))
		$tdataDisplay_Files_Need_to_Download[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDisplay_Files_Need_to_Download[""] = array();
	$fieldToolTipsDisplay_Files_Need_to_Download[""] = array();
	$pageTitlesDisplay_Files_Need_to_Download[""] = array();
	$fieldLabelsDisplay_Files_Need_to_Download[""]["jobstatus_id"] = "Jobstatus Id";
	$fieldToolTipsDisplay_Files_Need_to_Download[""]["jobstatus_id"] = "";
	if (count($fieldToolTipsDisplay_Files_Need_to_Download[""]))
		$tdataDisplay_Files_Need_to_Download[".isUseToolTips"] = true;
}
	
	
	$tdataDisplay_Files_Need_to_Download[".NCSearch"] = true;



$tdataDisplay_Files_Need_to_Download[".shortTableName"] = "Display_Files_Need_to_Download";
$tdataDisplay_Files_Need_to_Download[".nSecOptions"] = 0;
$tdataDisplay_Files_Need_to_Download[".recsPerRowList"] = 1;
$tdataDisplay_Files_Need_to_Download[".recsPerRowPrint"] = 1;
$tdataDisplay_Files_Need_to_Download[".mainTableOwnerID"] = "";
$tdataDisplay_Files_Need_to_Download[".moveNext"] = 1;
$tdataDisplay_Files_Need_to_Download[".entityType"] = 2;

$tdataDisplay_Files_Need_to_Download[".strOriginalTableName"] = "jobfile";




$tdataDisplay_Files_Need_to_Download[".showAddInPopup"] = false;

$tdataDisplay_Files_Need_to_Download[".showEditInPopup"] = false;

$tdataDisplay_Files_Need_to_Download[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDisplay_Files_Need_to_Download[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDisplay_Files_Need_to_Download[".fieldsForRegister"] = array();

$tdataDisplay_Files_Need_to_Download[".listAjax"] = false;

	$tdataDisplay_Files_Need_to_Download[".audit"] = false;

	$tdataDisplay_Files_Need_to_Download[".locking"] = false;


$tdataDisplay_Files_Need_to_Download[".add"] = true;
$tdataDisplay_Files_Need_to_Download[".afterAddAction"] = 0;
$tdataDisplay_Files_Need_to_Download[".closePopupAfterAdd"] = 1;
$tdataDisplay_Files_Need_to_Download[".afterAddActionDetTable"] = "";

$tdataDisplay_Files_Need_to_Download[".list"] = true;

$tdataDisplay_Files_Need_to_Download[".inlineAdd"] = true;


$tdataDisplay_Files_Need_to_Download[".exportTo"] = true;

$tdataDisplay_Files_Need_to_Download[".printFriendly"] = true;


$tdataDisplay_Files_Need_to_Download[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDisplay_Files_Need_to_Download[".searchSaving"] = false;
//

$tdataDisplay_Files_Need_to_Download[".showSearchPanel"] = true;
		$tdataDisplay_Files_Need_to_Download[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDisplay_Files_Need_to_Download[".isUseAjaxSuggest"] = false;
else 
	$tdataDisplay_Files_Need_to_Download[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDisplay_Files_Need_to_Download[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDisplay_Files_Need_to_Download[".isUseTimeForSearch"] = false;





$tdataDisplay_Files_Need_to_Download[".allSearchFields"] = array();
$tdataDisplay_Files_Need_to_Download[".filterFields"] = array();
$tdataDisplay_Files_Need_to_Download[".requiredSearchFields"] = array();

$tdataDisplay_Files_Need_to_Download[".allSearchFields"][] = "jobstatus_id";
	$tdataDisplay_Files_Need_to_Download[".allSearchFields"][] = "Total";
	

$tdataDisplay_Files_Need_to_Download[".googleLikeFields"] = array();
$tdataDisplay_Files_Need_to_Download[".googleLikeFields"][] = "jobstatus_id";
$tdataDisplay_Files_Need_to_Download[".googleLikeFields"][] = "Total";


$tdataDisplay_Files_Need_to_Download[".advSearchFields"] = array();
$tdataDisplay_Files_Need_to_Download[".advSearchFields"][] = "jobstatus_id";
$tdataDisplay_Files_Need_to_Download[".advSearchFields"][] = "Total";

$tdataDisplay_Files_Need_to_Download[".tableType"] = "report";

$tdataDisplay_Files_Need_to_Download[".printerPageOrientation"] = 0;
$tdataDisplay_Files_Need_to_Download[".nPrinterPageScale"] = 100;

$tdataDisplay_Files_Need_to_Download[".nPrinterSplitRecords"] = 40;

$tdataDisplay_Files_Need_to_Download[".nPrinterPDFSplitRecords"] = 40;



$tdataDisplay_Files_Need_to_Download[".geocodingEnabled"] = false;

//report settings
$tdataDisplay_Files_Need_to_Download[".printReportLayout"] = 6;	

$tdataDisplay_Files_Need_to_Download[".reportPrintPartitionType"] = 1;	
$tdataDisplay_Files_Need_to_Download[".reportPrintGroupsPerPage"] = 40;	
	$tdataDisplay_Files_Need_to_Download[".reportPrintPDFGroupsPerPage"] = 40;
$tdataDisplay_Files_Need_to_Download[".lowGroup"] = 0;



$tdataDisplay_Files_Need_to_Download[".pageSize"] = 1;	






$tdataDisplay_Files_Need_to_Download[".repShowDet"] = true;

$tdataDisplay_Files_Need_to_Download[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDisplay_Files_Need_to_Download[".strOrderBy"] = $tstrOrderBy;

$tdataDisplay_Files_Need_to_Download[".orderindexes"] = array();

$tdataDisplay_Files_Need_to_Download[".sqlHead"] = "SELECT jobstatus_id,  SUM(total_images) AS Total";
$tdataDisplay_Files_Need_to_Download[".sqlFrom"] = "FROM job";
$tdataDisplay_Files_Need_to_Download[".sqlWhereExpr"] = "jobstatus_id =20 OR jobstatus_id =2";
$tdataDisplay_Files_Need_to_Download[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDisplay_Files_Need_to_Download[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDisplay_Files_Need_to_Download[".arrGroupsPerPage"] = $arrGPP;

$tdataDisplay_Files_Need_to_Download[".highlightSearchResults"] = true;

$tableKeysDisplay_Files_Need_to_Download = array();
$tdataDisplay_Files_Need_to_Download[".Keys"] = $tableKeysDisplay_Files_Need_to_Download;

$tdataDisplay_Files_Need_to_Download[".listFields"] = array();
$tdataDisplay_Files_Need_to_Download[".listFields"][] = "jobstatus_id";
$tdataDisplay_Files_Need_to_Download[".listFields"][] = "Total";

$tdataDisplay_Files_Need_to_Download[".hideMobileList"] = array();


$tdataDisplay_Files_Need_to_Download[".viewFields"] = array();
$tdataDisplay_Files_Need_to_Download[".viewFields"][] = "jobstatus_id";
$tdataDisplay_Files_Need_to_Download[".viewFields"][] = "Total";

$tdataDisplay_Files_Need_to_Download[".addFields"] = array();

$tdataDisplay_Files_Need_to_Download[".masterListFields"] = array();
$tdataDisplay_Files_Need_to_Download[".masterListFields"][] = "jobstatus_id";
$tdataDisplay_Files_Need_to_Download[".masterListFields"][] = "Total";

$tdataDisplay_Files_Need_to_Download[".inlineAddFields"] = array();

$tdataDisplay_Files_Need_to_Download[".editFields"] = array();

$tdataDisplay_Files_Need_to_Download[".inlineEditFields"] = array();

$tdataDisplay_Files_Need_to_Download[".exportFields"] = array();
$tdataDisplay_Files_Need_to_Download[".exportFields"][] = "jobstatus_id";
$tdataDisplay_Files_Need_to_Download[".exportFields"][] = "Total";

$tdataDisplay_Files_Need_to_Download[".importFields"] = array();
$tdataDisplay_Files_Need_to_Download[".importFields"][] = "jobstatus_id";
$tdataDisplay_Files_Need_to_Download[".importFields"][] = "Total";

$tdataDisplay_Files_Need_to_Download[".printFields"] = array();
$tdataDisplay_Files_Need_to_Download[".printFields"][] = "jobstatus_id";
$tdataDisplay_Files_Need_to_Download[".printFields"][] = "Total";

//	jobstatus_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "jobstatus_id";
	$fdata["GoodName"] = "jobstatus_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Display_Files_Need_to_Download","jobstatus_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobstatus_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobstatus_id";
	
		
		
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

	

	
	$tdataDisplay_Files_Need_to_Download["jobstatus_id"] = $fdata;
//	Total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Total";
	$fdata["GoodName"] = "Total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_Files_Need_to_Download","Total"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(total_images)";
	
		
		
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

	

	
	$tdataDisplay_Files_Need_to_Download["Total"] = $fdata;

	
$tables_data["Display Files Need to Download"]=&$tdataDisplay_Files_Need_to_Download;
$field_labels["Display_Files_Need_to_Download"] = &$fieldLabelsDisplay_Files_Need_to_Download;
$fieldToolTips["Display Files Need to Download"] = &$fieldToolTipsDisplay_Files_Need_to_Download;
$page_titles["Display_Files_Need_to_Download"] = &$pageTitlesDisplay_Files_Need_to_Download;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Display Files Need to Download"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Display Files Need to Download"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Display_Files_Need_to_Download()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobstatus_id,  SUM(total_images) AS Total";
$proto0["m_strFrom"] = "FROM job";
$proto0["m_strWhere"] = "jobstatus_id =20 OR jobstatus_id =2";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "jobstatus_id =20 OR jobstatus_id =2";
$proto1["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobstatus_id =20 OR jobstatus_id =2"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobstatus_id =20";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Display Files Need to Download"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "=20";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "jobstatus_id =2";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Display Files Need to Download"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "=2";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
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
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Display Files Need to Download"
));

$proto9["m_sql"] = "jobstatus_id";
$proto9["m_srcTableName"] = "Display Files Need to Download";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_SUM";
$proto12["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total_images",
	"m_strTable" => "job",
	"m_srcTableName" => "Display Files Need to Download"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto12);

$proto11["m_sql"] = "SUM(total_images)";
$proto11["m_srcTableName"] = "Display Files Need to Download";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "Total";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "job";
$proto15["m_srcTableName"] = "Display Files Need to Download";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "work_id";
$proto15["m_columns"][] = "job_id";
$proto15["m_columns"][] = "client_id";
$proto15["m_columns"][] = "project_id";
$proto15["m_columns"][] = "job_directory";
$proto15["m_columns"][] = "complexity1";
$proto15["m_columns"][] = "complexity2";
$proto15["m_columns"][] = "complexity3";
$proto15["m_columns"][] = "complexity4";
$proto15["m_columns"][] = "complexity5";
$proto15["m_columns"][] = "complexity0";
$proto15["m_columns"][] = "complexityNP";
$proto15["m_columns"][] = "custom_complexity";
$proto15["m_columns"][] = "total_images";
$proto15["m_columns"][] = "is_urgent";
$proto15["m_columns"][] = "urgent_instruction";
$proto15["m_columns"][] = "delivery_duration";
$proto15["m_columns"][] = "delivery_date";
$proto15["m_columns"][] = "notify_options";
$proto15["m_columns"][] = "notes";
$proto15["m_columns"][] = "web_note";
$proto15["m_columns"][] = "comments";
$proto15["m_columns"][] = "pdf_id";
$proto15["m_columns"][] = "pdf_location";
$proto15["m_columns"][] = "allow_batch_process";
$proto15["m_columns"][] = "jobstatus_id";
$proto15["m_columns"][] = "reviewer_id";
$proto15["m_columns"][] = "reviewed_date";
$proto15["m_columns"][] = "accept_id";
$proto15["m_columns"][] = "accepted_date";
$proto15["m_columns"][] = "downloader_id";
$proto15["m_columns"][] = "download_date";
$proto15["m_columns"][] = "distributor_id";
$proto15["m_columns"][] = "distribute_date";
$proto15["m_columns"][] = "designer_list";
$proto15["m_columns"][] = "qcs_list";
$proto15["m_columns"][] = "finish_date";
$proto15["m_columns"][] = "uploader_id";
$proto15["m_columns"][] = "upload_date";
$proto15["m_columns"][] = "notifer_id";
$proto15["m_columns"][] = "notify_date";
$proto15["m_columns"][] = "rejector_id";
$proto15["m_columns"][] = "reject_date";
$proto15["m_columns"][] = "reject_reason";
$proto15["m_columns"][] = "activity_log";
$proto15["m_columns"][] = "time_remaining";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "job";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "Display Files Need to Download";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Display Files Need to Download";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Display_Files_Need_to_Download = createSqlQuery_Display_Files_Need_to_Download();


	
		
	
$tdataDisplay_Files_Need_to_Download[".sqlquery"] = $queryData_Display_Files_Need_to_Download;

$tableEvents["Display Files Need to Download"] = new eventsBase;
$tdataDisplay_Files_Need_to_Download[".hasEvents"] = false;

?>