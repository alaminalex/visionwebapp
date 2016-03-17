<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDisplay_ETA = array();	
	$tdataDisplay_ETA[".truncateText"] = true;
	$tdataDisplay_ETA[".NumberOfChars"] = 80; 
	$tdataDisplay_ETA[".ShortName"] = "Display_ETA";
	$tdataDisplay_ETA[".OwnerID"] = "";
	$tdataDisplay_ETA[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsDisplay_ETA = array();
$fieldToolTipsDisplay_ETA = array();
$pageTitlesDisplay_ETA = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDisplay_ETA["English"] = array();
	$fieldToolTipsDisplay_ETA["English"] = array();
	$pageTitlesDisplay_ETA["English"] = array();
	$fieldLabelsDisplay_ETA["English"]["Files"] = "Files";
	$fieldToolTipsDisplay_ETA["English"]["Files"] = "";
	$fieldLabelsDisplay_ETA["English"]["need_eta"] = "Need Eta";
	$fieldToolTipsDisplay_ETA["English"]["need_eta"] = "";
	$fieldLabelsDisplay_ETA["English"]["text"] = "Text";
	$fieldToolTipsDisplay_ETA["English"]["text"] = "";
	if (count($fieldToolTipsDisplay_ETA["English"]))
		$tdataDisplay_ETA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDisplay_ETA[""] = array();
	$fieldToolTipsDisplay_ETA[""] = array();
	$pageTitlesDisplay_ETA[""] = array();
	$fieldLabelsDisplay_ETA[""]["need_eta"] = "Need Eta";
	$fieldToolTipsDisplay_ETA[""]["need_eta"] = "";
	$fieldLabelsDisplay_ETA[""]["text"] = "Text";
	$fieldToolTipsDisplay_ETA[""]["text"] = "";
	if (count($fieldToolTipsDisplay_ETA[""]))
		$tdataDisplay_ETA[".isUseToolTips"] = true;
}
	
	
	$tdataDisplay_ETA[".NCSearch"] = true;



$tdataDisplay_ETA[".shortTableName"] = "Display_ETA";
$tdataDisplay_ETA[".nSecOptions"] = 0;
$tdataDisplay_ETA[".recsPerRowList"] = 1;
$tdataDisplay_ETA[".recsPerRowPrint"] = 1;
$tdataDisplay_ETA[".mainTableOwnerID"] = "";
$tdataDisplay_ETA[".moveNext"] = 1;
$tdataDisplay_ETA[".entityType"] = 2;

$tdataDisplay_ETA[".strOriginalTableName"] = "jobfile";




$tdataDisplay_ETA[".showAddInPopup"] = false;

$tdataDisplay_ETA[".showEditInPopup"] = false;

$tdataDisplay_ETA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDisplay_ETA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDisplay_ETA[".fieldsForRegister"] = array();

$tdataDisplay_ETA[".listAjax"] = false;

	$tdataDisplay_ETA[".audit"] = false;

	$tdataDisplay_ETA[".locking"] = false;


$tdataDisplay_ETA[".add"] = true;
$tdataDisplay_ETA[".afterAddAction"] = 0;
$tdataDisplay_ETA[".closePopupAfterAdd"] = 1;
$tdataDisplay_ETA[".afterAddActionDetTable"] = "";

$tdataDisplay_ETA[".list"] = true;

$tdataDisplay_ETA[".inlineAdd"] = true;


$tdataDisplay_ETA[".exportTo"] = true;

$tdataDisplay_ETA[".printFriendly"] = true;


$tdataDisplay_ETA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDisplay_ETA[".searchSaving"] = false;
//

$tdataDisplay_ETA[".showSearchPanel"] = true;
		$tdataDisplay_ETA[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDisplay_ETA[".isUseAjaxSuggest"] = false;
else 
	$tdataDisplay_ETA[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataDisplay_ETA[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDisplay_ETA[".isUseTimeForSearch"] = false;





$tdataDisplay_ETA[".allSearchFields"] = array();
$tdataDisplay_ETA[".filterFields"] = array();
$tdataDisplay_ETA[".requiredSearchFields"] = array();

$tdataDisplay_ETA[".allSearchFields"][] = "text";
	$tdataDisplay_ETA[".allSearchFields"][] = "Files";
	$tdataDisplay_ETA[".allSearchFields"][] = "need_eta";
	

$tdataDisplay_ETA[".googleLikeFields"] = array();
$tdataDisplay_ETA[".googleLikeFields"][] = "text";
$tdataDisplay_ETA[".googleLikeFields"][] = "Files";
$tdataDisplay_ETA[".googleLikeFields"][] = "need_eta";


$tdataDisplay_ETA[".advSearchFields"] = array();
$tdataDisplay_ETA[".advSearchFields"][] = "text";
$tdataDisplay_ETA[".advSearchFields"][] = "Files";
$tdataDisplay_ETA[".advSearchFields"][] = "need_eta";

$tdataDisplay_ETA[".tableType"] = "report";

$tdataDisplay_ETA[".printerPageOrientation"] = 0;
$tdataDisplay_ETA[".nPrinterPageScale"] = 100;

$tdataDisplay_ETA[".nPrinterSplitRecords"] = 40;

$tdataDisplay_ETA[".nPrinterPDFSplitRecords"] = 40;



$tdataDisplay_ETA[".geocodingEnabled"] = false;

//report settings
$tdataDisplay_ETA[".printReportLayout"] = 6;	

$tdataDisplay_ETA[".reportPrintPartitionType"] = 1;	
$tdataDisplay_ETA[".reportPrintGroupsPerPage"] = 40;	
	$tdataDisplay_ETA[".reportPrintPDFGroupsPerPage"] = 40;
$tdataDisplay_ETA[".lowGroup"] = 0;



$tdataDisplay_ETA[".pageSize"] = 1;	






$tdataDisplay_ETA[".repShowDet"] = true;

$tdataDisplay_ETA[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDisplay_ETA[".strOrderBy"] = $tstrOrderBy;

$tdataDisplay_ETA[".orderindexes"] = array();

$tdataDisplay_ETA[".sqlHead"] = "SELECT 'Text' AS text,  COUNT(*) AS Files,  SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))) AS need_eta";
$tdataDisplay_ETA[".sqlFrom"] = "FROM jobfile  LEFT OUTER JOIN job ON jobfile.job_id = job.job_id  INNER JOIN pdf ON pdf.pdf_id = job.pdf_id";
$tdataDisplay_ETA[".sqlWhereExpr"] = "(jobfile.download_date > \"0000-00-00 00:00:00\" OR jobfile.download_date =NULL) AND (jobfile.distribute_date = \"0000-00-00 00:00:00\" OR jobfile.distribute_date = NULL) AND (jobfile.designer2_id IS NULL) AND (jobfile.start2_date = \"0000-00-00 00:00:00\" OR jobfile.start2_date = NULL) AND (job.jobstatus_id != 9)";
$tdataDisplay_ETA[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDisplay_ETA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDisplay_ETA[".arrGroupsPerPage"] = $arrGPP;

$tdataDisplay_ETA[".highlightSearchResults"] = true;

$tableKeysDisplay_ETA = array();
$tdataDisplay_ETA[".Keys"] = $tableKeysDisplay_ETA;

$tdataDisplay_ETA[".listFields"] = array();
$tdataDisplay_ETA[".listFields"][] = "text";
$tdataDisplay_ETA[".listFields"][] = "Files";
$tdataDisplay_ETA[".listFields"][] = "need_eta";

$tdataDisplay_ETA[".hideMobileList"] = array();


$tdataDisplay_ETA[".viewFields"] = array();
$tdataDisplay_ETA[".viewFields"][] = "text";
$tdataDisplay_ETA[".viewFields"][] = "Files";
$tdataDisplay_ETA[".viewFields"][] = "need_eta";

$tdataDisplay_ETA[".addFields"] = array();

$tdataDisplay_ETA[".masterListFields"] = array();
$tdataDisplay_ETA[".masterListFields"][] = "text";
$tdataDisplay_ETA[".masterListFields"][] = "Files";
$tdataDisplay_ETA[".masterListFields"][] = "need_eta";

$tdataDisplay_ETA[".inlineAddFields"] = array();

$tdataDisplay_ETA[".editFields"] = array();

$tdataDisplay_ETA[".inlineEditFields"] = array();

$tdataDisplay_ETA[".exportFields"] = array();
$tdataDisplay_ETA[".exportFields"][] = "text";
$tdataDisplay_ETA[".exportFields"][] = "Files";
$tdataDisplay_ETA[".exportFields"][] = "need_eta";

$tdataDisplay_ETA[".importFields"] = array();
$tdataDisplay_ETA[".importFields"][] = "text";
$tdataDisplay_ETA[".importFields"][] = "Files";
$tdataDisplay_ETA[".importFields"][] = "need_eta";

$tdataDisplay_ETA[".printFields"] = array();
$tdataDisplay_ETA[".printFields"][] = "text";
$tdataDisplay_ETA[".printFields"][] = "Files";
$tdataDisplay_ETA[".printFields"][] = "need_eta";

//	text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "text";
	$fdata["GoodName"] = "text";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_ETA","text"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "text"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "'Text'";
	
		
		
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

	

	
	$tdataDisplay_ETA["text"] = $fdata;
//	Files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Files";
	$fdata["GoodName"] = "Files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_ETA","Files"); 
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

	

	
	$tdataDisplay_ETA["Files"] = $fdata;
//	need_eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "need_eta";
	$fdata["GoodName"] = "need_eta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Display_ETA","need_eta"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "need_eta"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average)))";
	
		
		
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

	

	
	$tdataDisplay_ETA["need_eta"] = $fdata;

	
$tables_data["Display ETA"]=&$tdataDisplay_ETA;
$field_labels["Display_ETA"] = &$fieldLabelsDisplay_ETA;
$fieldToolTips["Display ETA"] = &$fieldToolTipsDisplay_ETA;
$page_titles["Display_ETA"] = &$pageTitlesDisplay_ETA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Display ETA"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Display ETA"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Display_ETA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "'Text' AS text,  COUNT(*) AS Files,  SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average))) AS need_eta";
$proto0["m_strFrom"] = "FROM jobfile  LEFT OUTER JOIN job ON jobfile.job_id = job.job_id  INNER JOIN pdf ON pdf.pdf_id = job.pdf_id";
$proto0["m_strWhere"] = "(jobfile.download_date > \"0000-00-00 00:00:00\" OR jobfile.download_date =NULL) AND (jobfile.distribute_date = \"0000-00-00 00:00:00\" OR jobfile.distribute_date = NULL) AND (jobfile.designer2_id IS NULL) AND (jobfile.start2_date = \"0000-00-00 00:00:00\" OR jobfile.start2_date = NULL) AND (job.jobstatus_id != 9)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(jobfile.download_date > \"0000-00-00 00:00:00\" OR jobfile.download_date =NULL) AND (jobfile.distribute_date = \"0000-00-00 00:00:00\" OR jobfile.distribute_date = NULL) AND (jobfile.designer2_id IS NULL) AND (jobfile.start2_date = \"0000-00-00 00:00:00\" OR jobfile.start2_date = NULL) AND (job.jobstatus_id != 9)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.download_date > \"0000-00-00 00:00:00\" OR jobfile.download_date =NULL) AND (jobfile.distribute_date = \"0000-00-00 00:00:00\" OR jobfile.distribute_date = NULL) AND (jobfile.designer2_id IS NULL) AND (jobfile.start2_date = \"0000-00-00 00:00:00\" OR jobfile.start2_date = NULL) AND (job.jobstatus_id != 9)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.download_date > \"0000-00-00 00:00:00\" OR jobfile.download_date =NULL";
$proto3["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.download_date > \"0000-00-00 00:00:00\" OR jobfile.download_date =NULL"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
						$proto5=array();
$proto5["m_sql"] = "jobfile.download_date > \"0000-00-00 00:00:00\"";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "download_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Display ETA"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "> \"0000-00-00 00:00:00\"";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto3["m_contained"][]=$obj;
						$proto7=array();
$proto7["m_sql"] = "jobfile.download_date =NULL";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "download_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Display ETA"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "=NULL";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

			$proto3["m_contained"][]=$obj;
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto9=array();
$proto9["m_sql"] = "jobfile.distribute_date = \"0000-00-00 00:00:00\" OR jobfile.distribute_date = NULL";
$proto9["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.distribute_date = \"0000-00-00 00:00:00\" OR jobfile.distribute_date = NULL"
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
						$proto11=array();
$proto11["m_sql"] = "jobfile.distribute_date = \"0000-00-00 00:00:00\"";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "distribute_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Display ETA"
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "= \"0000-00-00 00:00:00\"";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

			$proto9["m_contained"][]=$obj;
						$proto13=array();
$proto13["m_sql"] = "jobfile.distribute_date = NULL";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "distribute_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Display ETA"
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "= NULL";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

			$proto9["m_contained"][]=$obj;
$proto9["m_strCase"] = "";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = true;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

			$proto1["m_contained"][]=$obj;
						$proto15=array();
$proto15["m_sql"] = "jobfile.designer2_id IS NULL";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Display ETA"
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "IS NULL";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = true;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

			$proto1["m_contained"][]=$obj;
						$proto17=array();
$proto17["m_sql"] = "jobfile.start2_date = \"0000-00-00 00:00:00\" OR jobfile.start2_date = NULL";
$proto17["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.start2_date = \"0000-00-00 00:00:00\" OR jobfile.start2_date = NULL"
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
						$proto19=array();
$proto19["m_sql"] = "jobfile.start2_date = \"0000-00-00 00:00:00\"";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "start2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Display ETA"
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "= \"0000-00-00 00:00:00\"";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

			$proto17["m_contained"][]=$obj;
						$proto21=array();
$proto21["m_sql"] = "jobfile.start2_date = NULL";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "start2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Display ETA"
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "= NULL";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

			$proto17["m_contained"][]=$obj;
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = true;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

			$proto1["m_contained"][]=$obj;
						$proto23=array();
$proto23["m_sql"] = "job.jobstatus_id != 9";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Display ETA"
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "!= 9";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = true;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto27=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'Text'"
));

$proto27["m_sql"] = "'Text'";
$proto27["m_srcTableName"] = "Display ETA";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "text";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$proto30=array();
$proto30["m_functiontype"] = "SQLF_COUNT";
$proto30["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto30["m_arguments"][]=$obj;
$proto30["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto30);

$proto29["m_sql"] = "COUNT(*)";
$proto29["m_srcTableName"] = "Display ETA";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "Files";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$proto33=array();
$proto33["m_functiontype"] = "SQLF_CUSTOM";
$proto33["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(TIME_TO_SEC(pdf.pdf_estimated_average))"
));

$proto33["m_arguments"][]=$obj;
$proto33["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto33);

$proto32["m_sql"] = "SEC_TO_TIME(SUM(TIME_TO_SEC(pdf.pdf_estimated_average)))";
$proto32["m_srcTableName"] = "Display ETA";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "need_eta";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "jobfile";
$proto36["m_srcTableName"] = "Display ETA";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "jobfile_id";
$proto36["m_columns"][] = "file_url";
$proto36["m_columns"][] = "client_id";
$proto36["m_columns"][] = "work_id";
$proto36["m_columns"][] = "job_id";
$proto36["m_columns"][] = "project_id";
$proto36["m_columns"][] = "folder_name";
$proto36["m_columns"][] = "filename";
$proto36["m_columns"][] = "jobfile_type";
$proto36["m_columns"][] = "jobfile_note";
$proto36["m_columns"][] = "jobfile_status_id";
$proto36["m_columns"][] = "downloader_id";
$proto36["m_columns"][] = "distributor_id";
$proto36["m_columns"][] = "designer_id";
$proto36["m_columns"][] = "qc_id";
$proto36["m_columns"][] = "uploader_id";
$proto36["m_columns"][] = "notifier_id";
$proto36["m_columns"][] = "rejector_id";
$proto36["m_columns"][] = "download_date";
$proto36["m_columns"][] = "distribute_date";
$proto36["m_columns"][] = "start_date";
$proto36["m_columns"][] = "end_date";
$proto36["m_columns"][] = "designer_time";
$proto36["m_columns"][] = "qcstart_date";
$proto36["m_columns"][] = "qcend_date";
$proto36["m_columns"][] = "qc_time";
$proto36["m_columns"][] = "upload_date";
$proto36["m_columns"][] = "notify_date";
$proto36["m_columns"][] = "reject_date";
$proto36["m_columns"][] = "reject_reason";
$proto36["m_columns"][] = "designer2_id";
$proto36["m_columns"][] = "start2_date";
$proto36["m_columns"][] = "end2_date";
$proto36["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "jobfile";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "Display ETA";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
												$proto39=array();
$proto39["m_link"] = "SQLL_LEFTJOIN";
			$proto40=array();
$proto40["m_strName"] = "job";
$proto40["m_srcTableName"] = "Display ETA";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "work_id";
$proto40["m_columns"][] = "job_id";
$proto40["m_columns"][] = "client_id";
$proto40["m_columns"][] = "project_id";
$proto40["m_columns"][] = "job_directory";
$proto40["m_columns"][] = "complexity1";
$proto40["m_columns"][] = "complexity2";
$proto40["m_columns"][] = "complexity3";
$proto40["m_columns"][] = "complexity4";
$proto40["m_columns"][] = "complexity5";
$proto40["m_columns"][] = "complexity0";
$proto40["m_columns"][] = "complexityNP";
$proto40["m_columns"][] = "custom_complexity";
$proto40["m_columns"][] = "total_images";
$proto40["m_columns"][] = "is_urgent";
$proto40["m_columns"][] = "urgent_instruction";
$proto40["m_columns"][] = "delivery_duration";
$proto40["m_columns"][] = "delivery_date";
$proto40["m_columns"][] = "notify_options";
$proto40["m_columns"][] = "notes";
$proto40["m_columns"][] = "web_note";
$proto40["m_columns"][] = "comments";
$proto40["m_columns"][] = "pdf_id";
$proto40["m_columns"][] = "pdf_location";
$proto40["m_columns"][] = "allow_batch_process";
$proto40["m_columns"][] = "jobstatus_id";
$proto40["m_columns"][] = "reviewer_id";
$proto40["m_columns"][] = "reviewed_date";
$proto40["m_columns"][] = "accept_id";
$proto40["m_columns"][] = "accepted_date";
$proto40["m_columns"][] = "downloader_id";
$proto40["m_columns"][] = "download_date";
$proto40["m_columns"][] = "distributor_id";
$proto40["m_columns"][] = "distribute_date";
$proto40["m_columns"][] = "designer_list";
$proto40["m_columns"][] = "qcs_list";
$proto40["m_columns"][] = "finish_date";
$proto40["m_columns"][] = "uploader_id";
$proto40["m_columns"][] = "upload_date";
$proto40["m_columns"][] = "notifer_id";
$proto40["m_columns"][] = "notify_date";
$proto40["m_columns"][] = "rejector_id";
$proto40["m_columns"][] = "reject_date";
$proto40["m_columns"][] = "reject_reason";
$proto40["m_columns"][] = "activity_log";
$proto40["m_columns"][] = "time_remaining";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "LEFT OUTER JOIN job ON jobfile.job_id = job.job_id";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "Display ETA";
$proto41=array();
$proto41["m_sql"] = "jobfile.job_id = job.job_id";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Display ETA"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "= job.job_id";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
												$proto43=array();
$proto43["m_link"] = "SQLL_INNERJOIN";
			$proto44=array();
$proto44["m_strName"] = "pdf";
$proto44["m_srcTableName"] = "Display ETA";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "pdf_id";
$proto44["m_columns"][] = "pdf_name";
$proto44["m_columns"][] = "client_id";
$proto44["m_columns"][] = "pdf_location";
$proto44["m_columns"][] = "last_update";
$proto44["m_columns"][] = "pdf_estimated_average";
$proto44["m_columns"][] = "pdf_estimated_average1";
$proto44["m_columns"][] = "pdf_estimated_average2";
$proto44["m_columns"][] = "pdf_actual_average";
$proto44["m_columns"][] = "price";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "INNER JOIN pdf ON pdf.pdf_id = job.pdf_id";
$proto43["m_alias"] = "";
$proto43["m_srcTableName"] = "Display ETA";
$proto45=array();
$proto45["m_sql"] = "pdf.pdf_id = job.pdf_id";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Display ETA"
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "= job.pdf_id";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Display ETA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Display_ETA = createSqlQuery_Display_ETA();


	
			
	
$tdataDisplay_ETA[".sqlquery"] = $queryData_Display_ETA;

$tableEvents["Display ETA"] = new eventsBase;
$tdataDisplay_ETA[".hasEvents"] = false;

?>