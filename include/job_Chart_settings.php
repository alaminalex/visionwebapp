<?php
require_once(getabspath("classes/cipherer.php"));




$tdatajob_Chart = array();	
	$tdatajob_Chart[".ShortName"] = "job_Chart";
	$tdatajob_Chart[".OwnerID"] = "";
	$tdatajob_Chart[".OriginalTable"] = "job";

//	field labels
$fieldLabelsjob_Chart = array();
$fieldToolTipsjob_Chart = array();
$pageTitlesjob_Chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsjob_Chart["English"] = array();
	$fieldToolTipsjob_Chart["English"] = array();
	$pageTitlesjob_Chart["English"] = array();
	$fieldLabelsjob_Chart["English"]["total_images"] = "Total Images";
	$fieldToolTipsjob_Chart["English"]["total_images"] = "";
	$fieldLabelsjob_Chart["English"]["pdf_id"] = "Pdf Id";
	$fieldToolTipsjob_Chart["English"]["pdf_id"] = "";
	$fieldLabelsjob_Chart["English"]["notify_date"] = "Notify Date";
	$fieldToolTipsjob_Chart["English"]["notify_date"] = "";
	if (count($fieldToolTipsjob_Chart["English"]))
		$tdatajob_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsjob_Chart[""] = array();
	$fieldToolTipsjob_Chart[""] = array();
	$pageTitlesjob_Chart[""] = array();
	$fieldLabelsjob_Chart[""]["total_images"] = "Total Images";
	$fieldToolTipsjob_Chart[""]["total_images"] = "";
	$fieldLabelsjob_Chart[""]["pdf_id"] = "Pdf Id";
	$fieldToolTipsjob_Chart[""]["pdf_id"] = "";
	$fieldLabelsjob_Chart[""]["notify_date"] = "Notify Date";
	$fieldToolTipsjob_Chart[""]["notify_date"] = "";
	if (count($fieldToolTipsjob_Chart[""]))
		$tdatajob_Chart[".isUseToolTips"] = true;
}
	
	
	$tdatajob_Chart[".NCSearch"] = true;

	$tdatajob_Chart[".ChartRefreshTime"] = 0;


$tdatajob_Chart[".shortTableName"] = "job_Chart";
$tdatajob_Chart[".nSecOptions"] = 0;
$tdatajob_Chart[".recsPerRowList"] = 1;
$tdatajob_Chart[".recsPerRowPrint"] = 1;
$tdatajob_Chart[".mainTableOwnerID"] = "";
$tdatajob_Chart[".moveNext"] = 1;
$tdatajob_Chart[".entityType"] = 3;

$tdatajob_Chart[".strOriginalTableName"] = "job";




$tdatajob_Chart[".showAddInPopup"] = false;

$tdatajob_Chart[".showEditInPopup"] = false;

$tdatajob_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatajob_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatajob_Chart[".fieldsForRegister"] = array();

$tdatajob_Chart[".listAjax"] = false;

	$tdatajob_Chart[".audit"] = false;

	$tdatajob_Chart[".locking"] = false;


$tdatajob_Chart[".add"] = true;
$tdatajob_Chart[".afterAddAction"] = 1;
$tdatajob_Chart[".closePopupAfterAdd"] = 1;
$tdatajob_Chart[".afterAddActionDetTable"] = "";

$tdatajob_Chart[".list"] = true;

$tdatajob_Chart[".inlineAdd"] = true;





$tdatajob_Chart[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatajob_Chart[".searchSaving"] = false;
//

$tdatajob_Chart[".showSearchPanel"] = true;
		$tdatajob_Chart[".flexibleSearch"] = true;		

if (isMobile())
	$tdatajob_Chart[".isUseAjaxSuggest"] = false;
else 
	$tdatajob_Chart[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																													
$tdatajob_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajob_Chart[".isUseTimeForSearch"] = false;





$tdatajob_Chart[".allSearchFields"] = array();
$tdatajob_Chart[".filterFields"] = array();
$tdatajob_Chart[".requiredSearchFields"] = array();

$tdatajob_Chart[".allSearchFields"][] = "notify_date";
	$tdatajob_Chart[".allSearchFields"][] = "pdf_id";
	$tdatajob_Chart[".allSearchFields"][] = "total_images";
	
$tdatajob_Chart[".filterFields"][] = "notify_date";	

$tdatajob_Chart[".googleLikeFields"] = array();
$tdatajob_Chart[".googleLikeFields"][] = "notify_date";
$tdatajob_Chart[".googleLikeFields"][] = "pdf_id";
$tdatajob_Chart[".googleLikeFields"][] = "total_images";


$tdatajob_Chart[".advSearchFields"] = array();
$tdatajob_Chart[".advSearchFields"][] = "notify_date";
$tdatajob_Chart[".advSearchFields"][] = "pdf_id";
$tdatajob_Chart[".advSearchFields"][] = "total_images";

$tdatajob_Chart[".tableType"] = "chart";

$tdatajob_Chart[".printerPageOrientation"] = 0;
$tdatajob_Chart[".nPrinterPageScale"] = 100;

$tdatajob_Chart[".nPrinterSplitRecords"] = 40;

$tdatajob_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdatajob_Chart[".geocodingEnabled"] = false;



// chart settings
$tdatajob_Chart[".chartType"] = "Combined";
// end of chart settings

	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY job.notify_date DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatajob_Chart[".strOrderBy"] = $tstrOrderBy;

$tdatajob_Chart[".orderindexes"] = array();
$tdatajob_Chart[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "job.notify_date");

$tdatajob_Chart[".sqlHead"] = "SELECT job.notify_date,  job.pdf_id,  SUM(job.total_images) AS total_images";
$tdatajob_Chart[".sqlFrom"] = "FROM job  INNER JOIN pdf ON job.pdf_id = pdf.pdf_id";
$tdatajob_Chart[".sqlWhereExpr"] = "(job.notify_date != \"0000-00-00 00:00:00\")";
$tdatajob_Chart[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajob_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajob_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdatajob_Chart[".highlightSearchResults"] = true;

$tableKeysjob_Chart = array();
$tdatajob_Chart[".Keys"] = $tableKeysjob_Chart;

$tdatajob_Chart[".listFields"] = array();
$tdatajob_Chart[".listFields"][] = "notify_date";
$tdatajob_Chart[".listFields"][] = "pdf_id";
$tdatajob_Chart[".listFields"][] = "total_images";

$tdatajob_Chart[".hideMobileList"] = array();


$tdatajob_Chart[".viewFields"] = array();
$tdatajob_Chart[".viewFields"][] = "notify_date";
$tdatajob_Chart[".viewFields"][] = "pdf_id";
$tdatajob_Chart[".viewFields"][] = "total_images";

$tdatajob_Chart[".addFields"] = array();
$tdatajob_Chart[".addFields"][] = "notify_date";
$tdatajob_Chart[".addFields"][] = "pdf_id";
$tdatajob_Chart[".addFields"][] = "total_images";

$tdatajob_Chart[".masterListFields"] = array();
$tdatajob_Chart[".masterListFields"][] = "notify_date";
$tdatajob_Chart[".masterListFields"][] = "pdf_id";
$tdatajob_Chart[".masterListFields"][] = "total_images";

$tdatajob_Chart[".inlineAddFields"] = array();
$tdatajob_Chart[".inlineAddFields"][] = "notify_date";
$tdatajob_Chart[".inlineAddFields"][] = "pdf_id";
$tdatajob_Chart[".inlineAddFields"][] = "total_images";

$tdatajob_Chart[".editFields"] = array();
$tdatajob_Chart[".editFields"][] = "notify_date";
$tdatajob_Chart[".editFields"][] = "pdf_id";
$tdatajob_Chart[".editFields"][] = "total_images";

$tdatajob_Chart[".inlineEditFields"] = array();
$tdatajob_Chart[".inlineEditFields"][] = "notify_date";
$tdatajob_Chart[".inlineEditFields"][] = "pdf_id";
$tdatajob_Chart[".inlineEditFields"][] = "total_images";

$tdatajob_Chart[".exportFields"] = array();
$tdatajob_Chart[".exportFields"][] = "notify_date";
$tdatajob_Chart[".exportFields"][] = "pdf_id";
$tdatajob_Chart[".exportFields"][] = "total_images";

$tdatajob_Chart[".importFields"] = array();
$tdatajob_Chart[".importFields"][] = "notify_date";
$tdatajob_Chart[".importFields"][] = "pdf_id";
$tdatajob_Chart[".importFields"][] = "total_images";

$tdatajob_Chart[".printFields"] = array();
$tdatajob_Chart[".printFields"][] = "notify_date";
$tdatajob_Chart[".printFields"][] = "pdf_id";
$tdatajob_Chart[".printFields"][] = "total_images";

//	notify_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "notify_date";
	$fdata["GoodName"] = "notify_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("job_Chart","notify_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "notify_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.notify_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
//Filters settings
	$fdata["filterTotals"] = 0;	
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "pdf_id";	
		$fdata["filterFormat"] = "Interval list";
		$fdata["showCollapsed"] = false;	
	
		
		
		//intervals' settings
	$fdata["showWithNoRecords"] = 0;
	$fdata["filterIntervals"] =  array();
		
		//interval settings
		$intervalData = array();	
		$intervalData["lowerLimitType"] = 2;	
		$intervalData["upperLimitType"] = 1;
		
				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;
		
		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "today";
								$intervalData["lowerUsesExpression"] = true;
				$intervalData["upperUsesExpression"] = true;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 1;
		
		$fdata["filterIntervals"][] = $intervalData;
		
		//interval settings
		$intervalData = array();	
		$intervalData["lowerLimitType"] = 2;	
		$intervalData["upperLimitType"] = 1;
		
				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;
		
		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "yesterday";
								$intervalData["lowerUsesExpression"] = true;
				$intervalData["upperUsesExpression"] = true;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 2;
		
		$fdata["filterIntervals"][] = $intervalData;
		
		//interval settings
		$intervalData = array();	
		$intervalData["lowerLimitType"] = 2;	
		$intervalData["upperLimitType"] = 1;
		
				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;
		
		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "this month";
								$intervalData["lowerUsesExpression"] = true;
				$intervalData["upperUsesExpression"] = true;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 3;
		
		$fdata["filterIntervals"][] = $intervalData;
		
		//interval settings
		$intervalData = array();	
		$intervalData["lowerLimitType"] = 2;	
		$intervalData["upperLimitType"] = 1;
		
				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;
		
		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "last month";
								$intervalData["lowerUsesExpression"] = true;
				$intervalData["upperUsesExpression"] = true;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 4;
		
		$fdata["filterIntervals"][] = $intervalData;
		
		//interval settings
		$intervalData = array();	
		$intervalData["lowerLimitType"] = 2;	
		$intervalData["upperLimitType"] = 1;
		
				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;
		
		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "this year";
								$intervalData["lowerUsesExpression"] = true;
				$intervalData["upperUsesExpression"] = true;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 5;
		
		$fdata["filterIntervals"][] = $intervalData;
		
		//interval settings
		$intervalData = array();	
		$intervalData["lowerLimitType"] = 0;	
		$intervalData["upperLimitType"] = 1;
		
				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;
		
		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "past years";
				$intervalData["lowerLimit"] = "";
						$intervalData["lowerUsesExpression"] = false;
				$intervalData["upperUsesExpression"] = true;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 6;
		
		$fdata["filterIntervals"][] = $intervalData;
	
	
//end of Filters settings	

	
	$tdatajob_Chart["notify_date"] = $fdata;
//	pdf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pdf_id";
	$fdata["GoodName"] = "pdf_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("job_Chart","pdf_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.pdf_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "pdf";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "pdf_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "pdf_name";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatajob_Chart["pdf_id"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("job_Chart","total_images"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatajob_Chart["total_images"] = $fdata;

	$tdatajob_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">job Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">combined</attr>
		</attr>
		
		<attr value="parameters">';
	$tdatajob_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">pdf_id</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">2</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdatajob_Chart[".chartXml"] .= '</attr>';
	$tdatajob_Chart[".chartXml"] .= '<attr value="1">
			<attr value="name">total_images</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdatajob_Chart[".chartXml"] .= '</attr>';
	$tdatajob_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">notify_date</attr>
	</attr>';
	$tdatajob_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';
	$tdatajob_Chart[".chartXml"] .= '<attr value="scolor11">FF0000</attr>
			<attr value="scolor12">FF0000</attr>';
	$tdatajob_Chart[".chartXml"] .= '<attr value="scolor21">008000</attr>
			<attr value="scolor22">008000</attr>';

	$tdatajob_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("job Chart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("work_id").'</attr>

<attr value="color51">49563A</attr>
<attr value="color52">49563A</attr>
<attr value="color61">49563A</attr>
<attr value="color62">49563A</attr>
<attr value="color71">FFFFFF</attr>
<attr value="color72">FFFFFF</attr>
<attr value="color81">FEF7DB</attr>
<attr value="color82">FEF7DB</attr>
<attr value="color91">000000</attr>
<attr value="color92">000000</attr>
<attr value="color101">000000</attr>
<attr value="color102">000000</attr>
<attr value="color111">000000</attr>
<attr value="color112">000000</attr>
<attr value="color121"></attr>
<attr value="color122"></attr>
<attr value="color131">000000</attr>
<attr value="color132">000000</attr>
<attr value="color141">000000</attr>
<attr value="color142">000000</attr>

<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="saxes">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>
<attr value="cscroll">true</attr>
<attr value="maxbarscroll">10</attr>';
$tdatajob_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatajob_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">notify_date</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("job_Chart","notify_date")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajob_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">pdf_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("job_Chart","pdf_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajob_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">total_images</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("job_Chart","total_images")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatajob_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">job Chart</attr>
<attr value="short_table_name">job_Chart</attr>
</attr>

</chart>';
	
$tables_data["job Chart"]=&$tdatajob_Chart;
$field_labels["job_Chart"] = &$fieldLabelsjob_Chart;
$fieldToolTips["job Chart"] = &$fieldToolTipsjob_Chart;
$page_titles["job_Chart"] = &$pageTitlesjob_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["job Chart"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["job Chart"] = array();


	
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
					$masterTablesData["job Chart"][0] = $masterParams;	
				$masterTablesData["job Chart"][0]["masterKeys"] = array();
	$masterTablesData["job Chart"][0]["masterKeys"][]="client_id";
				$masterTablesData["job Chart"][0]["detailKeys"] = array();
	$masterTablesData["job Chart"][0]["detailKeys"][]="client_id";
		
	
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
					$masterTablesData["job Chart"][1] = $masterParams;	
				$masterTablesData["job Chart"][1]["masterKeys"] = array();
	$masterTablesData["job Chart"][1]["masterKeys"][]="user_id";
				$masterTablesData["job Chart"][1]["detailKeys"] = array();
	$masterTablesData["job Chart"][1]["detailKeys"][]="notifer_id";
		
	
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
					$masterTablesData["job Chart"][2] = $masterParams;	
				$masterTablesData["job Chart"][2]["masterKeys"] = array();
	$masterTablesData["job Chart"][2]["masterKeys"][]="notify_option_id";
				$masterTablesData["job Chart"][2]["detailKeys"] = array();
	$masterTablesData["job Chart"][2]["detailKeys"][]="notify_options";
		
	
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
					$masterTablesData["job Chart"][3] = $masterParams;	
				$masterTablesData["job Chart"][3]["masterKeys"] = array();
	$masterTablesData["job Chart"][3]["masterKeys"][]="pdf_id";
				$masterTablesData["job Chart"][3]["detailKeys"] = array();
	$masterTablesData["job Chart"][3]["detailKeys"][]="pdf_id";
		
	
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
					$masterTablesData["job Chart"][4] = $masterParams;	
				$masterTablesData["job Chart"][4]["masterKeys"] = array();
	$masterTablesData["job Chart"][4]["masterKeys"][]="jobstatus_id";
				$masterTablesData["job Chart"][4]["detailKeys"] = array();
	$masterTablesData["job Chart"][4]["detailKeys"][]="jobstatus_id";
		
	
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
					$masterTablesData["job Chart"][5] = $masterParams;	
				$masterTablesData["job Chart"][5]["masterKeys"] = array();
	$masterTablesData["job Chart"][5]["masterKeys"][]="project_id";
				$masterTablesData["job Chart"][5]["detailKeys"] = array();
	$masterTablesData["job Chart"][5]["detailKeys"][]="project_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_job_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "job.notify_date,  job.pdf_id,  SUM(job.total_images) AS total_images";
$proto0["m_strFrom"] = "FROM job  INNER JOIN pdf ON job.pdf_id = pdf.pdf_id";
$proto0["m_strWhere"] = "(job.notify_date != \"0000-00-00 00:00:00\")";
$proto0["m_strOrderBy"] = "ORDER BY job.notify_date DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "job.notify_date != \"0000-00-00 00:00:00\"";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "notify_date",
	"m_strTable" => "job",
	"m_srcTableName" => "job Chart"
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
			$obj = new SQLField(array(
	"m_strName" => "notify_date",
	"m_strTable" => "job",
	"m_srcTableName" => "job Chart"
));

$proto5["m_sql"] = "job.notify_date";
$proto5["m_srcTableName"] = "job Chart";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "job Chart"
));

$proto7["m_sql"] = "job.pdf_id";
$proto7["m_srcTableName"] = "job Chart";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$proto10=array();
$proto10["m_functiontype"] = "SQLF_SUM";
$proto10["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total_images",
	"m_strTable" => "job",
	"m_srcTableName" => "job Chart"
));

$proto10["m_arguments"][]=$obj;
$proto10["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto10);

$proto9["m_sql"] = "SUM(job.total_images)";
$proto9["m_srcTableName"] = "job Chart";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "total_images";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "job";
$proto13["m_srcTableName"] = "job Chart";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "work_id";
$proto13["m_columns"][] = "job_id";
$proto13["m_columns"][] = "client_id";
$proto13["m_columns"][] = "project_id";
$proto13["m_columns"][] = "job_directory";
$proto13["m_columns"][] = "complexity1";
$proto13["m_columns"][] = "complexity2";
$proto13["m_columns"][] = "complexity3";
$proto13["m_columns"][] = "complexity4";
$proto13["m_columns"][] = "complexity5";
$proto13["m_columns"][] = "complexity0";
$proto13["m_columns"][] = "complexityNP";
$proto13["m_columns"][] = "custom_complexity";
$proto13["m_columns"][] = "total_images";
$proto13["m_columns"][] = "is_urgent";
$proto13["m_columns"][] = "urgent_instruction";
$proto13["m_columns"][] = "delivery_duration";
$proto13["m_columns"][] = "delivery_date";
$proto13["m_columns"][] = "notify_options";
$proto13["m_columns"][] = "notes";
$proto13["m_columns"][] = "web_note";
$proto13["m_columns"][] = "comments";
$proto13["m_columns"][] = "pdf_id";
$proto13["m_columns"][] = "pdf_location";
$proto13["m_columns"][] = "allow_batch_process";
$proto13["m_columns"][] = "jobstatus_id";
$proto13["m_columns"][] = "reviewer_id";
$proto13["m_columns"][] = "reviewed_date";
$proto13["m_columns"][] = "accept_id";
$proto13["m_columns"][] = "accepted_date";
$proto13["m_columns"][] = "downloader_id";
$proto13["m_columns"][] = "download_date";
$proto13["m_columns"][] = "distributor_id";
$proto13["m_columns"][] = "distribute_date";
$proto13["m_columns"][] = "designer_list";
$proto13["m_columns"][] = "qcs_list";
$proto13["m_columns"][] = "finish_date";
$proto13["m_columns"][] = "uploader_id";
$proto13["m_columns"][] = "upload_date";
$proto13["m_columns"][] = "notifer_id";
$proto13["m_columns"][] = "notify_date";
$proto13["m_columns"][] = "rejector_id";
$proto13["m_columns"][] = "reject_date";
$proto13["m_columns"][] = "reject_reason";
$proto13["m_columns"][] = "activity_log";
$proto13["m_columns"][] = "time_remaining";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "job";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "job Chart";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
												$proto16=array();
$proto16["m_link"] = "SQLL_INNERJOIN";
			$proto17=array();
$proto17["m_strName"] = "pdf";
$proto17["m_srcTableName"] = "job Chart";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "pdf_id";
$proto17["m_columns"][] = "pdf_name";
$proto17["m_columns"][] = "client_id";
$proto17["m_columns"][] = "pdf_location";
$proto17["m_columns"][] = "last_update";
$proto17["m_columns"][] = "pdf_estimated_average";
$proto17["m_columns"][] = "pdf_estimated_average1";
$proto17["m_columns"][] = "pdf_estimated_average2";
$proto17["m_columns"][] = "pdf_actual_average";
$proto17["m_columns"][] = "price";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "INNER JOIN pdf ON job.pdf_id = pdf.pdf_id";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "job Chart";
$proto18=array();
$proto18["m_sql"] = "job.pdf_id = pdf.pdf_id";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "job Chart"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "= pdf.pdf_id";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto20=array();
						$proto21=array();
$proto21["m_functiontype"] = "SQLF_CUSTOM";
$proto21["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "job.notify_date"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto21);

$proto20["m_column"]=$obj;
$obj = new SQLGroupByItem($proto20);

$proto0["m_groupby"][]=$obj;
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "pdf",
	"m_srcTableName" => "job Chart"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "notify_date",
	"m_strTable" => "job",
	"m_srcTableName" => "job Chart"
));

$proto25["m_column"]=$obj;
$proto25["m_bAsc"] = 0;
$proto25["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto25);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="job Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_job_Chart = createSqlQuery_job_Chart();


	
			
	
$tdatajob_Chart[".sqlquery"] = $queryData_job_Chart;

$tableEvents["job Chart"] = new eventsBase;
$tdatajob_Chart[".hasEvents"] = false;

?>