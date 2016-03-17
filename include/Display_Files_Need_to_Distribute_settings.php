<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDisplay_Files_Need_to_Distribute = array();	
	$tdataDisplay_Files_Need_to_Distribute[".truncateText"] = true;
	$tdataDisplay_Files_Need_to_Distribute[".NumberOfChars"] = 80; 
	$tdataDisplay_Files_Need_to_Distribute[".ShortName"] = "Display_Files_Need_to_Distribute";
	$tdataDisplay_Files_Need_to_Distribute[".OwnerID"] = "";
	$tdataDisplay_Files_Need_to_Distribute[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsDisplay_Files_Need_to_Distribute = array();
$fieldToolTipsDisplay_Files_Need_to_Distribute = array();
$pageTitlesDisplay_Files_Need_to_Distribute = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDisplay_Files_Need_to_Distribute["English"] = array();
	$fieldToolTipsDisplay_Files_Need_to_Distribute["English"] = array();
	$pageTitlesDisplay_Files_Need_to_Distribute["English"] = array();
	$fieldLabelsDisplay_Files_Need_to_Distribute["English"]["total"] = "Total";
	$fieldToolTipsDisplay_Files_Need_to_Distribute["English"]["total"] = "";
	$fieldLabelsDisplay_Files_Need_to_Distribute["English"]["Files"] = "Files";
	$fieldToolTipsDisplay_Files_Need_to_Distribute["English"]["Files"] = "";
	if (count($fieldToolTipsDisplay_Files_Need_to_Distribute["English"]))
		$tdataDisplay_Files_Need_to_Distribute[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDisplay_Files_Need_to_Distribute[""] = array();
	$fieldToolTipsDisplay_Files_Need_to_Distribute[""] = array();
	$pageTitlesDisplay_Files_Need_to_Distribute[""] = array();
	if (count($fieldToolTipsDisplay_Files_Need_to_Distribute[""]))
		$tdataDisplay_Files_Need_to_Distribute[".isUseToolTips"] = true;
}
	
	
	$tdataDisplay_Files_Need_to_Distribute[".NCSearch"] = true;



$tdataDisplay_Files_Need_to_Distribute[".shortTableName"] = "Display_Files_Need_to_Distribute";
$tdataDisplay_Files_Need_to_Distribute[".nSecOptions"] = 0;
$tdataDisplay_Files_Need_to_Distribute[".recsPerRowList"] = 1;
$tdataDisplay_Files_Need_to_Distribute[".recsPerRowPrint"] = 1;
$tdataDisplay_Files_Need_to_Distribute[".mainTableOwnerID"] = "";
$tdataDisplay_Files_Need_to_Distribute[".moveNext"] = 1;
$tdataDisplay_Files_Need_to_Distribute[".entityType"] = 2;

$tdataDisplay_Files_Need_to_Distribute[".strOriginalTableName"] = "jobfile";




$tdataDisplay_Files_Need_to_Distribute[".showAddInPopup"] = false;

$tdataDisplay_Files_Need_to_Distribute[".showEditInPopup"] = false;

$tdataDisplay_Files_Need_to_Distribute[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDisplay_Files_Need_to_Distribute[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDisplay_Files_Need_to_Distribute[".fieldsForRegister"] = array();

$tdataDisplay_Files_Need_to_Distribute[".listAjax"] = false;

	$tdataDisplay_Files_Need_to_Distribute[".audit"] = false;

	$tdataDisplay_Files_Need_to_Distribute[".locking"] = false;


$tdataDisplay_Files_Need_to_Distribute[".add"] = true;
$tdataDisplay_Files_Need_to_Distribute[".afterAddAction"] = 0;
$tdataDisplay_Files_Need_to_Distribute[".closePopupAfterAdd"] = 1;
$tdataDisplay_Files_Need_to_Distribute[".afterAddActionDetTable"] = "";

$tdataDisplay_Files_Need_to_Distribute[".list"] = true;

$tdataDisplay_Files_Need_to_Distribute[".inlineAdd"] = true;


$tdataDisplay_Files_Need_to_Distribute[".exportTo"] = true;

$tdataDisplay_Files_Need_to_Distribute[".printFriendly"] = true;


$tdataDisplay_Files_Need_to_Distribute[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDisplay_Files_Need_to_Distribute[".searchSaving"] = false;
//

$tdataDisplay_Files_Need_to_Distribute[".showSearchPanel"] = true;
		$tdataDisplay_Files_Need_to_Distribute[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDisplay_Files_Need_to_Distribute[".isUseAjaxSuggest"] = false;
else 
	$tdataDisplay_Files_Need_to_Distribute[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDisplay_Files_Need_to_Distribute[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDisplay_Files_Need_to_Distribute[".isUseTimeForSearch"] = false;





$tdataDisplay_Files_Need_to_Distribute[".allSearchFields"] = array();
$tdataDisplay_Files_Need_to_Distribute[".filterFields"] = array();
$tdataDisplay_Files_Need_to_Distribute[".requiredSearchFields"] = array();

$tdataDisplay_Files_Need_to_Distribute[".allSearchFields"][] = "total";
	$tdataDisplay_Files_Need_to_Distribute[".allSearchFields"][] = "Files";
	

$tdataDisplay_Files_Need_to_Distribute[".googleLikeFields"] = array();
$tdataDisplay_Files_Need_to_Distribute[".googleLikeFields"][] = "total";
$tdataDisplay_Files_Need_to_Distribute[".googleLikeFields"][] = "Files";


$tdataDisplay_Files_Need_to_Distribute[".advSearchFields"] = array();
$tdataDisplay_Files_Need_to_Distribute[".advSearchFields"][] = "total";
$tdataDisplay_Files_Need_to_Distribute[".advSearchFields"][] = "Files";

$tdataDisplay_Files_Need_to_Distribute[".tableType"] = "report";

$tdataDisplay_Files_Need_to_Distribute[".printerPageOrientation"] = 0;
$tdataDisplay_Files_Need_to_Distribute[".nPrinterPageScale"] = 100;

$tdataDisplay_Files_Need_to_Distribute[".nPrinterSplitRecords"] = 40;

$tdataDisplay_Files_Need_to_Distribute[".nPrinterPDFSplitRecords"] = 40;



$tdataDisplay_Files_Need_to_Distribute[".geocodingEnabled"] = false;

//report settings
$tdataDisplay_Files_Need_to_Distribute[".printReportLayout"] = 6;	

$tdataDisplay_Files_Need_to_Distribute[".reportPrintPartitionType"] = 1;	
$tdataDisplay_Files_Need_to_Distribute[".reportPrintGroupsPerPage"] = 40;	
	$tdataDisplay_Files_Need_to_Distribute[".reportPrintPDFGroupsPerPage"] = 40;
$tdataDisplay_Files_Need_to_Distribute[".lowGroup"] = 0;



$tdataDisplay_Files_Need_to_Distribute[".pageSize"] = 1;	






$tdataDisplay_Files_Need_to_Distribute[".repShowDet"] = true;

$tdataDisplay_Files_Need_to_Distribute[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDisplay_Files_Need_to_Distribute[".strOrderBy"] = $tstrOrderBy;

$tdataDisplay_Files_Need_to_Distribute[".orderindexes"] = array();

$tdataDisplay_Files_Need_to_Distribute[".sqlHead"] = "SELECT 'Total' AS total,  COUNT(*) AS Files";
$tdataDisplay_Files_Need_to_Distribute[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN job ON jobfile.job_id = job.job_id";
$tdataDisplay_Files_Need_to_Distribute[".sqlWhereExpr"] = "(jobfile.download_date > \"0000-00-00 00:00:00\") AND (jobfile.distribute_date = \"0000-00-00 00:00:00\") AND (jobfile.designer2_id IS NULL) AND (jobfile.start2_date = \"0000-00-00 00:00:00\") AND (jobfile.jobfile_status_id IN (3,10)) AND job.jobstatus_id IN (3,10) AND job.jobstatus_id !=12";
$tdataDisplay_Files_Need_to_Distribute[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDisplay_Files_Need_to_Distribute[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDisplay_Files_Need_to_Distribute[".arrGroupsPerPage"] = $arrGPP;

$tdataDisplay_Files_Need_to_Distribute[".highlightSearchResults"] = true;

$tableKeysDisplay_Files_Need_to_Distribute = array();
$tdataDisplay_Files_Need_to_Distribute[".Keys"] = $tableKeysDisplay_Files_Need_to_Distribute;

$tdataDisplay_Files_Need_to_Distribute[".listFields"] = array();
$tdataDisplay_Files_Need_to_Distribute[".listFields"][] = "total";
$tdataDisplay_Files_Need_to_Distribute[".listFields"][] = "Files";

$tdataDisplay_Files_Need_to_Distribute[".hideMobileList"] = array();


$tdataDisplay_Files_Need_to_Distribute[".viewFields"] = array();
$tdataDisplay_Files_Need_to_Distribute[".viewFields"][] = "total";
$tdataDisplay_Files_Need_to_Distribute[".viewFields"][] = "Files";

$tdataDisplay_Files_Need_to_Distribute[".addFields"] = array();

$tdataDisplay_Files_Need_to_Distribute[".masterListFields"] = array();
$tdataDisplay_Files_Need_to_Distribute[".masterListFields"][] = "total";
$tdataDisplay_Files_Need_to_Distribute[".masterListFields"][] = "Files";

$tdataDisplay_Files_Need_to_Distribute[".inlineAddFields"] = array();

$tdataDisplay_Files_Need_to_Distribute[".editFields"] = array();

$tdataDisplay_Files_Need_to_Distribute[".inlineEditFields"] = array();

$tdataDisplay_Files_Need_to_Distribute[".exportFields"] = array();
$tdataDisplay_Files_Need_to_Distribute[".exportFields"][] = "total";
$tdataDisplay_Files_Need_to_Distribute[".exportFields"][] = "Files";

$tdataDisplay_Files_Need_to_Distribute[".importFields"] = array();
$tdataDisplay_Files_Need_to_Distribute[".importFields"][] = "total";
$tdataDisplay_Files_Need_to_Distribute[".importFields"][] = "Files";

$tdataDisplay_Files_Need_to_Distribute[".printFields"] = array();
$tdataDisplay_Files_Need_to_Distribute[".printFields"][] = "total";
$tdataDisplay_Files_Need_to_Distribute[".printFields"][] = "Files";

//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_Files_Need_to_Distribute","total"); 
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

	

	
	$tdataDisplay_Files_Need_to_Distribute["total"] = $fdata;
//	Files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Files";
	$fdata["GoodName"] = "Files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_Files_Need_to_Distribute","Files"); 
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

	

	
	$tdataDisplay_Files_Need_to_Distribute["Files"] = $fdata;

	
$tables_data["Display Files Need to Distribute"]=&$tdataDisplay_Files_Need_to_Distribute;
$field_labels["Display_Files_Need_to_Distribute"] = &$fieldLabelsDisplay_Files_Need_to_Distribute;
$fieldToolTips["Display Files Need to Distribute"] = &$fieldToolTipsDisplay_Files_Need_to_Distribute;
$page_titles["Display_Files_Need_to_Distribute"] = &$pageTitlesDisplay_Files_Need_to_Distribute;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Display Files Need to Distribute"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Display Files Need to Distribute"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Display_Files_Need_to_Distribute()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "'Total' AS total,  COUNT(*) AS Files";
$proto0["m_strFrom"] = "FROM jobfile  LEFT OUTER JOIN job ON jobfile.job_id = job.job_id";
$proto0["m_strWhere"] = "(jobfile.download_date > \"0000-00-00 00:00:00\") AND (jobfile.distribute_date = \"0000-00-00 00:00:00\") AND (jobfile.designer2_id IS NULL) AND (jobfile.start2_date = \"0000-00-00 00:00:00\") AND (jobfile.jobfile_status_id IN (3,10)) AND job.jobstatus_id IN (3,10) AND job.jobstatus_id !=12";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(jobfile.download_date > \"0000-00-00 00:00:00\") AND (jobfile.distribute_date = \"0000-00-00 00:00:00\") AND (jobfile.designer2_id IS NULL) AND (jobfile.start2_date = \"0000-00-00 00:00:00\") AND (jobfile.jobfile_status_id IN (3,10)) AND job.jobstatus_id IN (3,10) AND job.jobstatus_id !=12";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.download_date > \"0000-00-00 00:00:00\") AND (jobfile.distribute_date = \"0000-00-00 00:00:00\") AND (jobfile.designer2_id IS NULL) AND (jobfile.start2_date = \"0000-00-00 00:00:00\") AND (jobfile.jobfile_status_id IN (3,10)) AND job.jobstatus_id IN (3,10) AND job.jobstatus_id !=12"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.download_date > \"0000-00-00 00:00:00\"";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "download_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Display Files Need to Distribute"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "> \"0000-00-00 00:00:00\"";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "jobfile.distribute_date = \"0000-00-00 00:00:00\"";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "distribute_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Display Files Need to Distribute"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "= \"0000-00-00 00:00:00\"";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = true;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
						$proto7=array();
$proto7["m_sql"] = "jobfile.designer2_id IS NULL";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Display Files Need to Distribute"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "IS NULL";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = true;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

			$proto1["m_contained"][]=$obj;
						$proto9=array();
$proto9["m_sql"] = "jobfile.start2_date = \"0000-00-00 00:00:00\"";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "start2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Display Files Need to Distribute"
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "= \"0000-00-00 00:00:00\"";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = true;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

			$proto1["m_contained"][]=$obj;
						$proto11=array();
$proto11["m_sql"] = "jobfile.jobfile_status_id IN (3,10)";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Display Files Need to Distribute"
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "IN (3,10)";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = true;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

			$proto1["m_contained"][]=$obj;
						$proto13=array();
$proto13["m_sql"] = "job.jobstatus_id IN (3,10)";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Display Files Need to Distribute"
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "IN (3,10)";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

			$proto1["m_contained"][]=$obj;
						$proto15=array();
$proto15["m_sql"] = "job.jobstatus_id !=12";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Display Files Need to Distribute"
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "!=12";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto19=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'Total'"
));

$proto19["m_sql"] = "'Total'";
$proto19["m_srcTableName"] = "Display Files Need to Distribute";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "total";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_COUNT";
$proto22["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "COUNT(*)";
$proto21["m_srcTableName"] = "Display Files Need to Distribute";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "Files";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "jobfile";
$proto25["m_srcTableName"] = "Display Files Need to Distribute";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "jobfile_id";
$proto25["m_columns"][] = "file_url";
$proto25["m_columns"][] = "client_id";
$proto25["m_columns"][] = "work_id";
$proto25["m_columns"][] = "job_id";
$proto25["m_columns"][] = "project_id";
$proto25["m_columns"][] = "folder_name";
$proto25["m_columns"][] = "filename";
$proto25["m_columns"][] = "jobfile_type";
$proto25["m_columns"][] = "jobfile_note";
$proto25["m_columns"][] = "jobfile_status_id";
$proto25["m_columns"][] = "downloader_id";
$proto25["m_columns"][] = "distributor_id";
$proto25["m_columns"][] = "designer_id";
$proto25["m_columns"][] = "qc_id";
$proto25["m_columns"][] = "uploader_id";
$proto25["m_columns"][] = "notifier_id";
$proto25["m_columns"][] = "rejector_id";
$proto25["m_columns"][] = "download_date";
$proto25["m_columns"][] = "distribute_date";
$proto25["m_columns"][] = "start_date";
$proto25["m_columns"][] = "end_date";
$proto25["m_columns"][] = "designer_time";
$proto25["m_columns"][] = "qcstart_date";
$proto25["m_columns"][] = "qcend_date";
$proto25["m_columns"][] = "qc_time";
$proto25["m_columns"][] = "upload_date";
$proto25["m_columns"][] = "notify_date";
$proto25["m_columns"][] = "reject_date";
$proto25["m_columns"][] = "reject_reason";
$proto25["m_columns"][] = "designer2_id";
$proto25["m_columns"][] = "start2_date";
$proto25["m_columns"][] = "end2_date";
$proto25["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "jobfile";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "Display Files Need to Distribute";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_LEFTJOIN";
			$proto29=array();
$proto29["m_strName"] = "job";
$proto29["m_srcTableName"] = "Display Files Need to Distribute";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "work_id";
$proto29["m_columns"][] = "job_id";
$proto29["m_columns"][] = "client_id";
$proto29["m_columns"][] = "project_id";
$proto29["m_columns"][] = "job_directory";
$proto29["m_columns"][] = "complexity1";
$proto29["m_columns"][] = "complexity2";
$proto29["m_columns"][] = "complexity3";
$proto29["m_columns"][] = "complexity4";
$proto29["m_columns"][] = "complexity5";
$proto29["m_columns"][] = "complexity0";
$proto29["m_columns"][] = "complexityNP";
$proto29["m_columns"][] = "custom_complexity";
$proto29["m_columns"][] = "total_images";
$proto29["m_columns"][] = "is_urgent";
$proto29["m_columns"][] = "urgent_instruction";
$proto29["m_columns"][] = "delivery_duration";
$proto29["m_columns"][] = "delivery_date";
$proto29["m_columns"][] = "notify_options";
$proto29["m_columns"][] = "notes";
$proto29["m_columns"][] = "web_note";
$proto29["m_columns"][] = "comments";
$proto29["m_columns"][] = "pdf_id";
$proto29["m_columns"][] = "pdf_location";
$proto29["m_columns"][] = "allow_batch_process";
$proto29["m_columns"][] = "jobstatus_id";
$proto29["m_columns"][] = "reviewer_id";
$proto29["m_columns"][] = "reviewed_date";
$proto29["m_columns"][] = "accept_id";
$proto29["m_columns"][] = "accepted_date";
$proto29["m_columns"][] = "downloader_id";
$proto29["m_columns"][] = "download_date";
$proto29["m_columns"][] = "distributor_id";
$proto29["m_columns"][] = "distribute_date";
$proto29["m_columns"][] = "designer_list";
$proto29["m_columns"][] = "qcs_list";
$proto29["m_columns"][] = "finish_date";
$proto29["m_columns"][] = "uploader_id";
$proto29["m_columns"][] = "upload_date";
$proto29["m_columns"][] = "notifer_id";
$proto29["m_columns"][] = "notify_date";
$proto29["m_columns"][] = "rejector_id";
$proto29["m_columns"][] = "reject_date";
$proto29["m_columns"][] = "reject_reason";
$proto29["m_columns"][] = "activity_log";
$proto29["m_columns"][] = "time_remaining";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "LEFT OUTER JOIN job ON jobfile.job_id = job.job_id";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "Display Files Need to Distribute";
$proto30=array();
$proto30["m_sql"] = "jobfile.job_id = job.job_id";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Display Files Need to Distribute"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= job.job_id";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Display Files Need to Distribute";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Display_Files_Need_to_Distribute = createSqlQuery_Display_Files_Need_to_Distribute();


	
		
	
$tdataDisplay_Files_Need_to_Distribute[".sqlquery"] = $queryData_Display_Files_Need_to_Distribute;

$tableEvents["Display Files Need to Distribute"] = new eventsBase;
$tdataDisplay_Files_Need_to_Distribute[".hasEvents"] = false;

?>