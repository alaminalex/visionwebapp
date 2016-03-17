<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDaily_Accepted_Riajul = array();	
	$tdataDaily_Accepted_Riajul[".truncateText"] = true;
	$tdataDaily_Accepted_Riajul[".NumberOfChars"] = 80; 
	$tdataDaily_Accepted_Riajul[".ShortName"] = "Daily_Accepted_Riajul";
	$tdataDaily_Accepted_Riajul[".OwnerID"] = "";
	$tdataDaily_Accepted_Riajul[".OriginalTable"] = "job";

//	field labels
$fieldLabelsDaily_Accepted_Riajul = array();
$fieldToolTipsDaily_Accepted_Riajul = array();
$pageTitlesDaily_Accepted_Riajul = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDaily_Accepted_Riajul["English"] = array();
	$fieldToolTipsDaily_Accepted_Riajul["English"] = array();
	$pageTitlesDaily_Accepted_Riajul["English"] = array();
	$fieldLabelsDaily_Accepted_Riajul["English"]["total_images"] = "Total Images";
	$fieldToolTipsDaily_Accepted_Riajul["English"]["total_images"] = "";
	$fieldLabelsDaily_Accepted_Riajul["English"]["accepted_date"] = "Accepted Date";
	$fieldToolTipsDaily_Accepted_Riajul["English"]["accepted_date"] = "";
	if (count($fieldToolTipsDaily_Accepted_Riajul["English"]))
		$tdataDaily_Accepted_Riajul[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDaily_Accepted_Riajul[""] = array();
	$fieldToolTipsDaily_Accepted_Riajul[""] = array();
	$pageTitlesDaily_Accepted_Riajul[""] = array();
	if (count($fieldToolTipsDaily_Accepted_Riajul[""]))
		$tdataDaily_Accepted_Riajul[".isUseToolTips"] = true;
}
	
	
	$tdataDaily_Accepted_Riajul[".NCSearch"] = true;



$tdataDaily_Accepted_Riajul[".shortTableName"] = "Daily_Accepted_Riajul";
$tdataDaily_Accepted_Riajul[".nSecOptions"] = 0;
$tdataDaily_Accepted_Riajul[".recsPerRowList"] = 1;
$tdataDaily_Accepted_Riajul[".recsPerRowPrint"] = 1;
$tdataDaily_Accepted_Riajul[".mainTableOwnerID"] = "";
$tdataDaily_Accepted_Riajul[".moveNext"] = 1;
$tdataDaily_Accepted_Riajul[".entityType"] = 2;

$tdataDaily_Accepted_Riajul[".strOriginalTableName"] = "job";




$tdataDaily_Accepted_Riajul[".showAddInPopup"] = false;

$tdataDaily_Accepted_Riajul[".showEditInPopup"] = false;

$tdataDaily_Accepted_Riajul[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDaily_Accepted_Riajul[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDaily_Accepted_Riajul[".fieldsForRegister"] = array();

$tdataDaily_Accepted_Riajul[".listAjax"] = false;

	$tdataDaily_Accepted_Riajul[".audit"] = false;

	$tdataDaily_Accepted_Riajul[".locking"] = false;


$tdataDaily_Accepted_Riajul[".add"] = true;
$tdataDaily_Accepted_Riajul[".afterAddAction"] = 0;
$tdataDaily_Accepted_Riajul[".closePopupAfterAdd"] = 1;
$tdataDaily_Accepted_Riajul[".afterAddActionDetTable"] = "";

$tdataDaily_Accepted_Riajul[".list"] = true;

$tdataDaily_Accepted_Riajul[".inlineAdd"] = true;


$tdataDaily_Accepted_Riajul[".exportTo"] = true;

$tdataDaily_Accepted_Riajul[".printFriendly"] = true;


$tdataDaily_Accepted_Riajul[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDaily_Accepted_Riajul[".searchSaving"] = false;
//

$tdataDaily_Accepted_Riajul[".showSearchPanel"] = true;
		$tdataDaily_Accepted_Riajul[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDaily_Accepted_Riajul[".isUseAjaxSuggest"] = false;
else 
	$tdataDaily_Accepted_Riajul[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																													
$tdataDaily_Accepted_Riajul[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDaily_Accepted_Riajul[".isUseTimeForSearch"] = false;





$tdataDaily_Accepted_Riajul[".allSearchFields"] = array();
$tdataDaily_Accepted_Riajul[".filterFields"] = array();
$tdataDaily_Accepted_Riajul[".requiredSearchFields"] = array();

$tdataDaily_Accepted_Riajul[".allSearchFields"][] = "accepted_date";
	

$tdataDaily_Accepted_Riajul[".googleLikeFields"] = array();
$tdataDaily_Accepted_Riajul[".googleLikeFields"][] = "accepted_date";
$tdataDaily_Accepted_Riajul[".googleLikeFields"][] = "total_images";


$tdataDaily_Accepted_Riajul[".advSearchFields"] = array();
$tdataDaily_Accepted_Riajul[".advSearchFields"][] = "accepted_date";
$tdataDaily_Accepted_Riajul[".advSearchFields"][] = "total_images";

$tdataDaily_Accepted_Riajul[".tableType"] = "report";

$tdataDaily_Accepted_Riajul[".printerPageOrientation"] = 0;
$tdataDaily_Accepted_Riajul[".nPrinterPageScale"] = 100;

$tdataDaily_Accepted_Riajul[".nPrinterSplitRecords"] = 40;

$tdataDaily_Accepted_Riajul[".nPrinterPDFSplitRecords"] = 40;



$tdataDaily_Accepted_Riajul[".geocodingEnabled"] = false;

//report settings
$tdataDaily_Accepted_Riajul[".printReportLayout"] = 6;	

$tdataDaily_Accepted_Riajul[".reportPrintPartitionType"] = 1;	
$tdataDaily_Accepted_Riajul[".reportPrintGroupsPerPage"] = 40;	
	$tdataDaily_Accepted_Riajul[".reportPrintPDFGroupsPerPage"] = 40;
$tdataDaily_Accepted_Riajul[".lowGroup"] = 0;



$tdataDaily_Accepted_Riajul[".pageSize"] = 20;	


$tdataDaily_Accepted_Riajul[".isExistTotalFields"] = true;




$tdataDaily_Accepted_Riajul[".repShowDet"] = true;

$tdataDaily_Accepted_Riajul[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY job.accepted_date DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDaily_Accepted_Riajul[".strOrderBy"] = $tstrOrderBy;

$tdataDaily_Accepted_Riajul[".orderindexes"] = array();
$tdataDaily_Accepted_Riajul[".orderindexes"][] = array(0, (0 ? "ASC" : "DESC"), "job.accepted_date");

$tdataDaily_Accepted_Riajul[".sqlHead"] = "SELECT DATE(job.accepted_date) AS accepted_date,  SUM(job.total_images) AS total_images";
$tdataDaily_Accepted_Riajul[".sqlFrom"] = "FROM job  LEFT OUTER JOIN pdf ON job.pdf_id = pdf.pdf_id";
$tdataDaily_Accepted_Riajul[".sqlWhereExpr"] = "job.accepted_date != \"0000-00-00 00:00:00\"";
$tdataDaily_Accepted_Riajul[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDaily_Accepted_Riajul[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDaily_Accepted_Riajul[".arrGroupsPerPage"] = $arrGPP;

$tdataDaily_Accepted_Riajul[".highlightSearchResults"] = true;

$tableKeysDaily_Accepted_Riajul = array();
$tdataDaily_Accepted_Riajul[".Keys"] = $tableKeysDaily_Accepted_Riajul;

$tdataDaily_Accepted_Riajul[".listFields"] = array();
$tdataDaily_Accepted_Riajul[".listFields"][] = "accepted_date";
$tdataDaily_Accepted_Riajul[".listFields"][] = "total_images";

$tdataDaily_Accepted_Riajul[".hideMobileList"] = array();


$tdataDaily_Accepted_Riajul[".viewFields"] = array();
$tdataDaily_Accepted_Riajul[".viewFields"][] = "accepted_date";
$tdataDaily_Accepted_Riajul[".viewFields"][] = "total_images";

$tdataDaily_Accepted_Riajul[".addFields"] = array();
$tdataDaily_Accepted_Riajul[".addFields"][] = "accepted_date";
$tdataDaily_Accepted_Riajul[".addFields"][] = "total_images";

$tdataDaily_Accepted_Riajul[".masterListFields"] = array();
$tdataDaily_Accepted_Riajul[".masterListFields"][] = "accepted_date";
$tdataDaily_Accepted_Riajul[".masterListFields"][] = "total_images";

$tdataDaily_Accepted_Riajul[".inlineAddFields"] = array();
$tdataDaily_Accepted_Riajul[".inlineAddFields"][] = "accepted_date";
$tdataDaily_Accepted_Riajul[".inlineAddFields"][] = "total_images";

$tdataDaily_Accepted_Riajul[".editFields"] = array();
$tdataDaily_Accepted_Riajul[".editFields"][] = "accepted_date";
$tdataDaily_Accepted_Riajul[".editFields"][] = "total_images";

$tdataDaily_Accepted_Riajul[".inlineEditFields"] = array();
$tdataDaily_Accepted_Riajul[".inlineEditFields"][] = "accepted_date";
$tdataDaily_Accepted_Riajul[".inlineEditFields"][] = "total_images";

$tdataDaily_Accepted_Riajul[".exportFields"] = array();
$tdataDaily_Accepted_Riajul[".exportFields"][] = "accepted_date";
$tdataDaily_Accepted_Riajul[".exportFields"][] = "total_images";

$tdataDaily_Accepted_Riajul[".importFields"] = array();
$tdataDaily_Accepted_Riajul[".importFields"][] = "accepted_date";
$tdataDaily_Accepted_Riajul[".importFields"][] = "total_images";

$tdataDaily_Accepted_Riajul[".printFields"] = array();
$tdataDaily_Accepted_Riajul[".printFields"][] = "accepted_date";
$tdataDaily_Accepted_Riajul[".printFields"][] = "total_images";

//	accepted_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "accepted_date";
	$fdata["GoodName"] = "accepted_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Accepted_Riajul","accepted_date"); 
	$fdata["FieldType"] = 135;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "accepted_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE(job.accepted_date)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 10; 
	$edata["LastYearFactor"] = 100; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDaily_Accepted_Riajul["accepted_date"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Accepted_Riajul","total_images"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_images"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(job.total_images)";
	
		
		
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
								
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataDaily_Accepted_Riajul["total_images"] = $fdata;

	
$tables_data["Daily Accepted Riajul"]=&$tdataDaily_Accepted_Riajul;
$field_labels["Daily_Accepted_Riajul"] = &$fieldLabelsDaily_Accepted_Riajul;
$fieldToolTips["Daily Accepted Riajul"] = &$fieldToolTipsDaily_Accepted_Riajul;
$page_titles["Daily_Accepted_Riajul"] = &$pageTitlesDaily_Accepted_Riajul;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Daily Accepted Riajul"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Daily Accepted Riajul"] = array();


	
				$strOriginalDetailsTable="clients";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="clients";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "clients";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Daily Accepted Riajul"][0] = $masterParams;	
				$masterTablesData["Daily Accepted Riajul"][0]["masterKeys"] = array();
	$masterTablesData["Daily Accepted Riajul"][0]["masterKeys"][]="client_id";
				$masterTablesData["Daily Accepted Riajul"][0]["detailKeys"] = array();
	$masterTablesData["Daily Accepted Riajul"][0]["detailKeys"][]="client_id";
		
	
				$strOriginalDetailsTable="user";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="user";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "user";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Daily Accepted Riajul"][1] = $masterParams;	
				$masterTablesData["Daily Accepted Riajul"][1]["masterKeys"] = array();
	$masterTablesData["Daily Accepted Riajul"][1]["masterKeys"][]="user_id";
				$masterTablesData["Daily Accepted Riajul"][1]["detailKeys"] = array();
	$masterTablesData["Daily Accepted Riajul"][1]["detailKeys"][]="notifer_id";
		
	
				$strOriginalDetailsTable="notifyoption";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="notifyoption";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "notifyoption";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Daily Accepted Riajul"][2] = $masterParams;	
				$masterTablesData["Daily Accepted Riajul"][2]["masterKeys"] = array();
	$masterTablesData["Daily Accepted Riajul"][2]["masterKeys"][]="notify_option_id";
				$masterTablesData["Daily Accepted Riajul"][2]["detailKeys"] = array();
	$masterTablesData["Daily Accepted Riajul"][2]["detailKeys"][]="notify_options";
		
	
				$strOriginalDetailsTable="pdf";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pdf";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pdf";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Daily Accepted Riajul"][3] = $masterParams;	
				$masterTablesData["Daily Accepted Riajul"][3]["masterKeys"] = array();
	$masterTablesData["Daily Accepted Riajul"][3]["masterKeys"][]="pdf_id";
				$masterTablesData["Daily Accepted Riajul"][3]["detailKeys"] = array();
	$masterTablesData["Daily Accepted Riajul"][3]["detailKeys"][]="pdf_id";
		
	
				$strOriginalDetailsTable="jobstatus";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="jobstatus";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "jobstatus";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Daily Accepted Riajul"][4] = $masterParams;	
				$masterTablesData["Daily Accepted Riajul"][4]["masterKeys"] = array();
	$masterTablesData["Daily Accepted Riajul"][4]["masterKeys"][]="jobstatus_id";
				$masterTablesData["Daily Accepted Riajul"][4]["detailKeys"] = array();
	$masterTablesData["Daily Accepted Riajul"][4]["detailKeys"][]="jobstatus_id";
		
	
				$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="project";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "project";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Daily Accepted Riajul"][5] = $masterParams;	
				$masterTablesData["Daily Accepted Riajul"][5]["masterKeys"] = array();
	$masterTablesData["Daily Accepted Riajul"][5]["masterKeys"][]="project_id";
				$masterTablesData["Daily Accepted Riajul"][5]["detailKeys"] = array();
	$masterTablesData["Daily Accepted Riajul"][5]["detailKeys"][]="project_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Daily_Accepted_Riajul()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DATE(job.accepted_date) AS accepted_date,  SUM(job.total_images) AS total_images";
$proto0["m_strFrom"] = "FROM job  LEFT OUTER JOIN pdf ON job.pdf_id = pdf.pdf_id";
$proto0["m_strWhere"] = "job.accepted_date != \"0000-00-00 00:00:00\"";
$proto0["m_strOrderBy"] = "ORDER BY job.accepted_date DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "job.accepted_date != \"0000-00-00 00:00:00\"";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "accepted_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Daily Accepted Riajul"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "!= \"0000-00-00 00:00:00\"";
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
			$proto6=array();
$proto6["m_functiontype"] = "SQLF_CUSTOM";
$proto6["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "job.accepted_date"
));

$proto6["m_arguments"][]=$obj;
$proto6["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto6);

$proto5["m_sql"] = "DATE(job.accepted_date)";
$proto5["m_srcTableName"] = "Daily Accepted Riajul";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "accepted_date";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_SUM";
$proto9["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total_images",
	"m_strTable" => "job",
	"m_srcTableName" => "Daily Accepted Riajul"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "SUM(job.total_images)";
$proto8["m_srcTableName"] = "Daily Accepted Riajul";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "total_images";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "job";
$proto12["m_srcTableName"] = "Daily Accepted Riajul";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "work_id";
$proto12["m_columns"][] = "job_id";
$proto12["m_columns"][] = "client_id";
$proto12["m_columns"][] = "project_id";
$proto12["m_columns"][] = "job_directory";
$proto12["m_columns"][] = "complexity1";
$proto12["m_columns"][] = "complexity2";
$proto12["m_columns"][] = "complexity3";
$proto12["m_columns"][] = "complexity4";
$proto12["m_columns"][] = "complexity5";
$proto12["m_columns"][] = "complexity0";
$proto12["m_columns"][] = "complexityNP";
$proto12["m_columns"][] = "custom_complexity";
$proto12["m_columns"][] = "total_images";
$proto12["m_columns"][] = "is_urgent";
$proto12["m_columns"][] = "urgent_instruction";
$proto12["m_columns"][] = "delivery_duration";
$proto12["m_columns"][] = "delivery_date";
$proto12["m_columns"][] = "notify_options";
$proto12["m_columns"][] = "notes";
$proto12["m_columns"][] = "web_note";
$proto12["m_columns"][] = "comments";
$proto12["m_columns"][] = "pdf_id";
$proto12["m_columns"][] = "pdf_location";
$proto12["m_columns"][] = "allow_batch_process";
$proto12["m_columns"][] = "jobstatus_id";
$proto12["m_columns"][] = "reviewer_id";
$proto12["m_columns"][] = "reviewed_date";
$proto12["m_columns"][] = "accept_id";
$proto12["m_columns"][] = "accepted_date";
$proto12["m_columns"][] = "downloader_id";
$proto12["m_columns"][] = "download_date";
$proto12["m_columns"][] = "distributor_id";
$proto12["m_columns"][] = "distribute_date";
$proto12["m_columns"][] = "designer_list";
$proto12["m_columns"][] = "qcs_list";
$proto12["m_columns"][] = "finish_date";
$proto12["m_columns"][] = "uploader_id";
$proto12["m_columns"][] = "upload_date";
$proto12["m_columns"][] = "notifer_id";
$proto12["m_columns"][] = "notify_date";
$proto12["m_columns"][] = "rejector_id";
$proto12["m_columns"][] = "reject_date";
$proto12["m_columns"][] = "reject_reason";
$proto12["m_columns"][] = "activity_log";
$proto12["m_columns"][] = "time_remaining";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "job";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "Daily Accepted Riajul";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
												$proto15=array();
$proto15["m_link"] = "SQLL_LEFTJOIN";
			$proto16=array();
$proto16["m_strName"] = "pdf";
$proto16["m_srcTableName"] = "Daily Accepted Riajul";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "pdf_id";
$proto16["m_columns"][] = "pdf_name";
$proto16["m_columns"][] = "client_id";
$proto16["m_columns"][] = "pdf_location";
$proto16["m_columns"][] = "last_update";
$proto16["m_columns"][] = "pdf_estimated_average";
$proto16["m_columns"][] = "pdf_estimated_average1";
$proto16["m_columns"][] = "pdf_estimated_average2";
$proto16["m_columns"][] = "pdf_actual_average";
$proto16["m_columns"][] = "price";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "LEFT OUTER JOIN pdf ON job.pdf_id = pdf.pdf_id";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "Daily Accepted Riajul";
$proto17=array();
$proto17["m_sql"] = "job.pdf_id = pdf.pdf_id";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Daily Accepted Riajul"
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "= pdf.pdf_id";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto19=array();
						$proto20=array();
$proto20["m_functiontype"] = "SQLF_CUSTOM";
$proto20["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "job.accepted_date"
));

$proto20["m_arguments"][]=$obj;
$proto20["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto20);

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "accepted_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Daily Accepted Riajul"
));

$proto22["m_column"]=$obj;
$proto22["m_bAsc"] = 0;
$proto22["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto22);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Daily Accepted Riajul";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Daily_Accepted_Riajul = createSqlQuery_Daily_Accepted_Riajul();


	
		
	
$tdataDaily_Accepted_Riajul[".sqlquery"] = $queryData_Daily_Accepted_Riajul;

$tableEvents["Daily Accepted Riajul"] = new eventsBase;
$tdataDaily_Accepted_Riajul[".hasEvents"] = false;

?>