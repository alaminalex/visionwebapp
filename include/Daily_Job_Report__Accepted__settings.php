<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDaily_Job_Report__Accepted_ = array();	
	$tdataDaily_Job_Report__Accepted_[".truncateText"] = true;
	$tdataDaily_Job_Report__Accepted_[".NumberOfChars"] = 80; 
	$tdataDaily_Job_Report__Accepted_[".ShortName"] = "Daily_Job_Report__Accepted_";
	$tdataDaily_Job_Report__Accepted_[".OwnerID"] = "";
	$tdataDaily_Job_Report__Accepted_[".OriginalTable"] = "job";

//	field labels
$fieldLabelsDaily_Job_Report__Accepted_ = array();
$fieldToolTipsDaily_Job_Report__Accepted_ = array();
$pageTitlesDaily_Job_Report__Accepted_ = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDaily_Job_Report__Accepted_["English"] = array();
	$fieldToolTipsDaily_Job_Report__Accepted_["English"] = array();
	$pageTitlesDaily_Job_Report__Accepted_["English"] = array();
	$fieldLabelsDaily_Job_Report__Accepted_["English"]["total_images"] = "Total Images";
	$fieldToolTipsDaily_Job_Report__Accepted_["English"]["total_images"] = "";
	$fieldLabelsDaily_Job_Report__Accepted_["English"]["pdf_id"] = "Pdf Id";
	$fieldToolTipsDaily_Job_Report__Accepted_["English"]["pdf_id"] = "";
	$fieldLabelsDaily_Job_Report__Accepted_["English"]["accepted_date"] = "Accepted Date";
	$fieldToolTipsDaily_Job_Report__Accepted_["English"]["accepted_date"] = "";
	$fieldLabelsDaily_Job_Report__Accepted_["English"]["eta_need"] = "Eta Need";
	$fieldToolTipsDaily_Job_Report__Accepted_["English"]["eta_need"] = "";
	$fieldLabelsDaily_Job_Report__Accepted_["English"]["fte"] = "FTE";
	$fieldToolTipsDaily_Job_Report__Accepted_["English"]["fte"] = "";
	$fieldLabelsDaily_Job_Report__Accepted_["English"]["pdf_estimated_average"] = "Pdf ETA";
	$fieldToolTipsDaily_Job_Report__Accepted_["English"]["pdf_estimated_average"] = "";
	if (count($fieldToolTipsDaily_Job_Report__Accepted_["English"]))
		$tdataDaily_Job_Report__Accepted_[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDaily_Job_Report__Accepted_[""] = array();
	$fieldToolTipsDaily_Job_Report__Accepted_[""] = array();
	$pageTitlesDaily_Job_Report__Accepted_[""] = array();
	$fieldLabelsDaily_Job_Report__Accepted_[""]["eta_need"] = "Eta Need";
	$fieldToolTipsDaily_Job_Report__Accepted_[""]["eta_need"] = "";
	$fieldLabelsDaily_Job_Report__Accepted_[""]["fte"] = "Fte";
	$fieldToolTipsDaily_Job_Report__Accepted_[""]["fte"] = "";
	$fieldLabelsDaily_Job_Report__Accepted_[""]["pdf_estimated_average"] = "Pdf Estimated Average";
	$fieldToolTipsDaily_Job_Report__Accepted_[""]["pdf_estimated_average"] = "";
	if (count($fieldToolTipsDaily_Job_Report__Accepted_[""]))
		$tdataDaily_Job_Report__Accepted_[".isUseToolTips"] = true;
}
	
	
	$tdataDaily_Job_Report__Accepted_[".NCSearch"] = true;



$tdataDaily_Job_Report__Accepted_[".shortTableName"] = "Daily_Job_Report__Accepted_";
$tdataDaily_Job_Report__Accepted_[".nSecOptions"] = 0;
$tdataDaily_Job_Report__Accepted_[".recsPerRowList"] = 1;
$tdataDaily_Job_Report__Accepted_[".recsPerRowPrint"] = 1;
$tdataDaily_Job_Report__Accepted_[".mainTableOwnerID"] = "";
$tdataDaily_Job_Report__Accepted_[".moveNext"] = 1;
$tdataDaily_Job_Report__Accepted_[".entityType"] = 2;

$tdataDaily_Job_Report__Accepted_[".strOriginalTableName"] = "job";




$tdataDaily_Job_Report__Accepted_[".showAddInPopup"] = false;

$tdataDaily_Job_Report__Accepted_[".showEditInPopup"] = false;

$tdataDaily_Job_Report__Accepted_[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDaily_Job_Report__Accepted_[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDaily_Job_Report__Accepted_[".fieldsForRegister"] = array();

$tdataDaily_Job_Report__Accepted_[".listAjax"] = false;

	$tdataDaily_Job_Report__Accepted_[".audit"] = false;

	$tdataDaily_Job_Report__Accepted_[".locking"] = false;


$tdataDaily_Job_Report__Accepted_[".add"] = true;
$tdataDaily_Job_Report__Accepted_[".afterAddAction"] = 0;
$tdataDaily_Job_Report__Accepted_[".closePopupAfterAdd"] = 1;
$tdataDaily_Job_Report__Accepted_[".afterAddActionDetTable"] = "";

$tdataDaily_Job_Report__Accepted_[".list"] = true;

$tdataDaily_Job_Report__Accepted_[".inlineAdd"] = true;


$tdataDaily_Job_Report__Accepted_[".exportTo"] = true;

$tdataDaily_Job_Report__Accepted_[".printFriendly"] = true;


$tdataDaily_Job_Report__Accepted_[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDaily_Job_Report__Accepted_[".searchSaving"] = false;
//

$tdataDaily_Job_Report__Accepted_[".showSearchPanel"] = true;
		$tdataDaily_Job_Report__Accepted_[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDaily_Job_Report__Accepted_[".isUseAjaxSuggest"] = false;
else 
	$tdataDaily_Job_Report__Accepted_[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																
$tdataDaily_Job_Report__Accepted_[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDaily_Job_Report__Accepted_[".isUseTimeForSearch"] = false;





$tdataDaily_Job_Report__Accepted_[".allSearchFields"] = array();
$tdataDaily_Job_Report__Accepted_[".filterFields"] = array();
$tdataDaily_Job_Report__Accepted_[".requiredSearchFields"] = array();

$tdataDaily_Job_Report__Accepted_[".allSearchFields"][] = "accepted_date";
	$tdataDaily_Job_Report__Accepted_[".allSearchFields"][] = "pdf_id";
	$tdataDaily_Job_Report__Accepted_[".allSearchFields"][] = "pdf_estimated_average";
	$tdataDaily_Job_Report__Accepted_[".allSearchFields"][] = "eta_need";
	$tdataDaily_Job_Report__Accepted_[".allSearchFields"][] = "fte";
	

$tdataDaily_Job_Report__Accepted_[".googleLikeFields"] = array();
$tdataDaily_Job_Report__Accepted_[".googleLikeFields"][] = "accepted_date";
$tdataDaily_Job_Report__Accepted_[".googleLikeFields"][] = "pdf_id";
$tdataDaily_Job_Report__Accepted_[".googleLikeFields"][] = "pdf_estimated_average";
$tdataDaily_Job_Report__Accepted_[".googleLikeFields"][] = "total_images";
$tdataDaily_Job_Report__Accepted_[".googleLikeFields"][] = "eta_need";
$tdataDaily_Job_Report__Accepted_[".googleLikeFields"][] = "fte";


$tdataDaily_Job_Report__Accepted_[".advSearchFields"] = array();
$tdataDaily_Job_Report__Accepted_[".advSearchFields"][] = "accepted_date";
$tdataDaily_Job_Report__Accepted_[".advSearchFields"][] = "pdf_id";
$tdataDaily_Job_Report__Accepted_[".advSearchFields"][] = "pdf_estimated_average";
$tdataDaily_Job_Report__Accepted_[".advSearchFields"][] = "total_images";
$tdataDaily_Job_Report__Accepted_[".advSearchFields"][] = "eta_need";
$tdataDaily_Job_Report__Accepted_[".advSearchFields"][] = "fte";

$tdataDaily_Job_Report__Accepted_[".tableType"] = "report";

$tdataDaily_Job_Report__Accepted_[".printerPageOrientation"] = 0;
$tdataDaily_Job_Report__Accepted_[".nPrinterPageScale"] = 100;

$tdataDaily_Job_Report__Accepted_[".nPrinterSplitRecords"] = 40;

$tdataDaily_Job_Report__Accepted_[".nPrinterPDFSplitRecords"] = 40;



$tdataDaily_Job_Report__Accepted_[".geocodingEnabled"] = false;

//report settings
$tdataDaily_Job_Report__Accepted_[".printReportLayout"] = 3;	

$tdataDaily_Job_Report__Accepted_[".reportPrintPartitionType"] = 0;	
$tdataDaily_Job_Report__Accepted_[".reportPrintGroupsPerPage"] = 3;	
	$tdataDaily_Job_Report__Accepted_[".lowGroup"] = 1;



$tdataDaily_Job_Report__Accepted_[".reportGroupFields"] = true;
$tdataDaily_Job_Report__Accepted_[".pageSize"] = 1;
$tdataDaily_Job_Report__Accepted_[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "accepted_date";
	$rgroupField['groupInterval'] = 5;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataDaily_Job_Report__Accepted_[".reportGroupFieldsData"] = $reportGroupFields;


$tdataDaily_Job_Report__Accepted_[".isExistTotalFields"] = true;




$tdataDaily_Job_Report__Accepted_[".repShowDet"] = true;

$tdataDaily_Job_Report__Accepted_[".reportLayout"] = 3;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY job.accepted_date DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDaily_Job_Report__Accepted_[".strOrderBy"] = $tstrOrderBy;

$tdataDaily_Job_Report__Accepted_[".orderindexes"] = array();
$tdataDaily_Job_Report__Accepted_[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "job.accepted_date");

$tdataDaily_Job_Report__Accepted_[".sqlHead"] = "SELECT job.accepted_date,  job.pdf_id,  pdf.pdf_estimated_average,  SUM(job.total_images) AS total_images,  SEC_TO_TIME((SUM((TIME_TO_SEC(pdf.pdf_estimated_average)*job.total_images)))) AS eta_need,  (SUM((TIME_TO_SEC(pdf.pdf_estimated_average)*job.total_images))/21600) AS fte";
$tdataDaily_Job_Report__Accepted_[".sqlFrom"] = "FROM job  LEFT OUTER JOIN pdf ON job.pdf_id = pdf.pdf_id";
$tdataDaily_Job_Report__Accepted_[".sqlWhereExpr"] = "job.accepted_date != \"0000-00-00 00:00:00\"";
$tdataDaily_Job_Report__Accepted_[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDaily_Job_Report__Accepted_[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDaily_Job_Report__Accepted_[".arrGroupsPerPage"] = $arrGPP;

$tdataDaily_Job_Report__Accepted_[".highlightSearchResults"] = true;

$tableKeysDaily_Job_Report__Accepted_ = array();
$tdataDaily_Job_Report__Accepted_[".Keys"] = $tableKeysDaily_Job_Report__Accepted_;

$tdataDaily_Job_Report__Accepted_[".listFields"] = array();
$tdataDaily_Job_Report__Accepted_[".listFields"][] = "accepted_date";
$tdataDaily_Job_Report__Accepted_[".listFields"][] = "pdf_id";
$tdataDaily_Job_Report__Accepted_[".listFields"][] = "pdf_estimated_average";
$tdataDaily_Job_Report__Accepted_[".listFields"][] = "total_images";
$tdataDaily_Job_Report__Accepted_[".listFields"][] = "eta_need";
$tdataDaily_Job_Report__Accepted_[".listFields"][] = "fte";

$tdataDaily_Job_Report__Accepted_[".hideMobileList"] = array();


$tdataDaily_Job_Report__Accepted_[".viewFields"] = array();
$tdataDaily_Job_Report__Accepted_[".viewFields"][] = "accepted_date";
$tdataDaily_Job_Report__Accepted_[".viewFields"][] = "pdf_id";
$tdataDaily_Job_Report__Accepted_[".viewFields"][] = "pdf_estimated_average";
$tdataDaily_Job_Report__Accepted_[".viewFields"][] = "total_images";
$tdataDaily_Job_Report__Accepted_[".viewFields"][] = "eta_need";
$tdataDaily_Job_Report__Accepted_[".viewFields"][] = "fte";

$tdataDaily_Job_Report__Accepted_[".addFields"] = array();
$tdataDaily_Job_Report__Accepted_[".addFields"][] = "accepted_date";
$tdataDaily_Job_Report__Accepted_[".addFields"][] = "pdf_id";
$tdataDaily_Job_Report__Accepted_[".addFields"][] = "total_images";

$tdataDaily_Job_Report__Accepted_[".masterListFields"] = array();
$tdataDaily_Job_Report__Accepted_[".masterListFields"][] = "accepted_date";
$tdataDaily_Job_Report__Accepted_[".masterListFields"][] = "pdf_id";
$tdataDaily_Job_Report__Accepted_[".masterListFields"][] = "pdf_estimated_average";
$tdataDaily_Job_Report__Accepted_[".masterListFields"][] = "total_images";
$tdataDaily_Job_Report__Accepted_[".masterListFields"][] = "eta_need";
$tdataDaily_Job_Report__Accepted_[".masterListFields"][] = "fte";

$tdataDaily_Job_Report__Accepted_[".inlineAddFields"] = array();
$tdataDaily_Job_Report__Accepted_[".inlineAddFields"][] = "accepted_date";
$tdataDaily_Job_Report__Accepted_[".inlineAddFields"][] = "pdf_id";
$tdataDaily_Job_Report__Accepted_[".inlineAddFields"][] = "total_images";

$tdataDaily_Job_Report__Accepted_[".editFields"] = array();
$tdataDaily_Job_Report__Accepted_[".editFields"][] = "accepted_date";
$tdataDaily_Job_Report__Accepted_[".editFields"][] = "pdf_id";
$tdataDaily_Job_Report__Accepted_[".editFields"][] = "total_images";

$tdataDaily_Job_Report__Accepted_[".inlineEditFields"] = array();
$tdataDaily_Job_Report__Accepted_[".inlineEditFields"][] = "accepted_date";
$tdataDaily_Job_Report__Accepted_[".inlineEditFields"][] = "pdf_id";
$tdataDaily_Job_Report__Accepted_[".inlineEditFields"][] = "total_images";

$tdataDaily_Job_Report__Accepted_[".exportFields"] = array();
$tdataDaily_Job_Report__Accepted_[".exportFields"][] = "accepted_date";
$tdataDaily_Job_Report__Accepted_[".exportFields"][] = "pdf_id";
$tdataDaily_Job_Report__Accepted_[".exportFields"][] = "pdf_estimated_average";
$tdataDaily_Job_Report__Accepted_[".exportFields"][] = "total_images";
$tdataDaily_Job_Report__Accepted_[".exportFields"][] = "eta_need";
$tdataDaily_Job_Report__Accepted_[".exportFields"][] = "fte";

$tdataDaily_Job_Report__Accepted_[".importFields"] = array();
$tdataDaily_Job_Report__Accepted_[".importFields"][] = "accepted_date";
$tdataDaily_Job_Report__Accepted_[".importFields"][] = "pdf_id";
$tdataDaily_Job_Report__Accepted_[".importFields"][] = "pdf_estimated_average";
$tdataDaily_Job_Report__Accepted_[".importFields"][] = "total_images";
$tdataDaily_Job_Report__Accepted_[".importFields"][] = "eta_need";
$tdataDaily_Job_Report__Accepted_[".importFields"][] = "fte";

$tdataDaily_Job_Report__Accepted_[".printFields"] = array();
$tdataDaily_Job_Report__Accepted_[".printFields"][] = "accepted_date";
$tdataDaily_Job_Report__Accepted_[".printFields"][] = "pdf_id";
$tdataDaily_Job_Report__Accepted_[".printFields"][] = "pdf_estimated_average";
$tdataDaily_Job_Report__Accepted_[".printFields"][] = "total_images";
$tdataDaily_Job_Report__Accepted_[".printFields"][] = "eta_need";
$tdataDaily_Job_Report__Accepted_[".printFields"][] = "fte";

//	accepted_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "accepted_date";
	$fdata["GoodName"] = "accepted_date";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Daily_Job_Report__Accepted_","accepted_date"); 
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
	$fdata["FullName"] = "job.accepted_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
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

	

	
	$tdataDaily_Job_Report__Accepted_["accepted_date"] = $fdata;
//	pdf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pdf_id";
	$fdata["GoodName"] = "pdf_id";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = GetFieldLabel("Daily_Job_Report__Accepted_","pdf_id"); 
	$fdata["FieldType"] = 3;
	
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
	
		$fdata["strField"] = "pdf_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job.pdf_id";
	
		
		
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

	

	
	$tdataDaily_Job_Report__Accepted_["pdf_id"] = $fdata;
//	pdf_estimated_average
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pdf_estimated_average";
	$fdata["GoodName"] = "pdf_estimated_average";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Daily_Job_Report__Accepted_","pdf_estimated_average"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_estimated_average"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf.pdf_estimated_average";
	
		
		
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

	

	
	$tdataDaily_Job_Report__Accepted_["pdf_estimated_average"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Job_Report__Accepted_","total_images"); 
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
	
	
	
	

	

	
	$tdataDaily_Job_Report__Accepted_["total_images"] = $fdata;
//	eta_need
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "eta_need";
	$fdata["GoodName"] = "eta_need";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Job_Report__Accepted_","eta_need"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "eta_need"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME((SUM((TIME_TO_SEC(pdf.pdf_estimated_average)*job.total_images))))";
	
		
		
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

	

	
	$tdataDaily_Job_Report__Accepted_["eta_need"] = $fdata;
//	fte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fte";
	$fdata["GoodName"] = "fte";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Daily_Job_Report__Accepted_","fte"); 
	$fdata["FieldType"] = 14;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fte"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(SUM((TIME_TO_SEC(pdf.pdf_estimated_average)*job.total_images))/21600)";
	
		
		
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

	

	
	$tdataDaily_Job_Report__Accepted_["fte"] = $fdata;

	
$tables_data["Daily Job Report (Accepted)"]=&$tdataDaily_Job_Report__Accepted_;
$field_labels["Daily_Job_Report__Accepted_"] = &$fieldLabelsDaily_Job_Report__Accepted_;
$fieldToolTips["Daily Job Report (Accepted)"] = &$fieldToolTipsDaily_Job_Report__Accepted_;
$page_titles["Daily_Job_Report__Accepted_"] = &$pageTitlesDaily_Job_Report__Accepted_;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Daily Job Report (Accepted)"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Daily Job Report (Accepted)"] = array();


	
				$strOriginalDetailsTable="user";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="user";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "user";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "1";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Daily Job Report (Accepted)"][0] = $masterParams;	
				$masterTablesData["Daily Job Report (Accepted)"][0]["masterKeys"] = array();
	$masterTablesData["Daily Job Report (Accepted)"][0]["masterKeys"][]="user_id";
				$masterTablesData["Daily Job Report (Accepted)"][0]["detailKeys"] = array();
	$masterTablesData["Daily Job Report (Accepted)"][0]["detailKeys"][]="notifer_id";
		
	
				$strOriginalDetailsTable="notifyoption";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="notifyoption";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "notifyoption";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Daily Job Report (Accepted)"][1] = $masterParams;	
				$masterTablesData["Daily Job Report (Accepted)"][1]["masterKeys"] = array();
	$masterTablesData["Daily Job Report (Accepted)"][1]["masterKeys"][]="notify_option_id";
				$masterTablesData["Daily Job Report (Accepted)"][1]["detailKeys"] = array();
	$masterTablesData["Daily Job Report (Accepted)"][1]["detailKeys"][]="notify_options";
		
	
				$strOriginalDetailsTable="pdf";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pdf";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pdf";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Daily Job Report (Accepted)"][2] = $masterParams;	
				$masterTablesData["Daily Job Report (Accepted)"][2]["masterKeys"] = array();
	$masterTablesData["Daily Job Report (Accepted)"][2]["masterKeys"][]="pdf_id";
				$masterTablesData["Daily Job Report (Accepted)"][2]["detailKeys"] = array();
	$masterTablesData["Daily Job Report (Accepted)"][2]["detailKeys"][]="pdf_id";
		
	
				$strOriginalDetailsTable="jobstatus";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="jobstatus";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "jobstatus";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Daily Job Report (Accepted)"][3] = $masterParams;	
				$masterTablesData["Daily Job Report (Accepted)"][3]["masterKeys"] = array();
	$masterTablesData["Daily Job Report (Accepted)"][3]["masterKeys"][]="jobstatus_id";
				$masterTablesData["Daily Job Report (Accepted)"][3]["detailKeys"] = array();
	$masterTablesData["Daily Job Report (Accepted)"][3]["detailKeys"][]="jobstatus_id";
		
	
				$strOriginalDetailsTable="project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="project";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "project";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Daily Job Report (Accepted)"][4] = $masterParams;	
				$masterTablesData["Daily Job Report (Accepted)"][4]["masterKeys"] = array();
	$masterTablesData["Daily Job Report (Accepted)"][4]["masterKeys"][]="project_id";
				$masterTablesData["Daily Job Report (Accepted)"][4]["detailKeys"] = array();
	$masterTablesData["Daily Job Report (Accepted)"][4]["detailKeys"][]="project_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Daily_Job_Report__Accepted_()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "job.accepted_date,  job.pdf_id,  pdf.pdf_estimated_average,  SUM(job.total_images) AS total_images,  SEC_TO_TIME((SUM((TIME_TO_SEC(pdf.pdf_estimated_average)*job.total_images)))) AS eta_need,  (SUM((TIME_TO_SEC(pdf.pdf_estimated_average)*job.total_images))/21600) AS fte";
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
	"m_srcTableName" => "Daily Job Report (Accepted)"
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
	"m_strName" => "accepted_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Daily Job Report (Accepted)"
));

$proto5["m_sql"] = "job.accepted_date";
$proto5["m_srcTableName"] = "Daily Job Report (Accepted)";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Daily Job Report (Accepted)"
));

$proto7["m_sql"] = "job.pdf_id";
$proto7["m_srcTableName"] = "Daily Job Report (Accepted)";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Daily Job Report (Accepted)"
));

$proto9["m_sql"] = "pdf.pdf_estimated_average";
$proto9["m_srcTableName"] = "Daily Job Report (Accepted)";
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
	"m_srcTableName" => "Daily Job Report (Accepted)"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto12);

$proto11["m_sql"] = "SUM(job.total_images)";
$proto11["m_srcTableName"] = "Daily Job Report (Accepted)";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "total_images";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(SUM((TIME_TO_SEC(pdf.pdf_estimated_average)*job.total_images)))"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "SEC_TO_TIME((SUM((TIME_TO_SEC(pdf.pdf_estimated_average)*job.total_images))))";
$proto14["m_srcTableName"] = "Daily Job Report (Accepted)";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "eta_need";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(SUM((TIME_TO_SEC(pdf.pdf_estimated_average)*job.total_images))/21600)"
));

$proto17["m_sql"] = "(SUM((TIME_TO_SEC(pdf.pdf_estimated_average)*job.total_images))/21600)";
$proto17["m_srcTableName"] = "Daily Job Report (Accepted)";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "fte";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "job";
$proto20["m_srcTableName"] = "Daily Job Report (Accepted)";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "work_id";
$proto20["m_columns"][] = "job_id";
$proto20["m_columns"][] = "client_id";
$proto20["m_columns"][] = "project_id";
$proto20["m_columns"][] = "job_directory";
$proto20["m_columns"][] = "complexity1";
$proto20["m_columns"][] = "complexity2";
$proto20["m_columns"][] = "complexity3";
$proto20["m_columns"][] = "complexity4";
$proto20["m_columns"][] = "complexity5";
$proto20["m_columns"][] = "complexity0";
$proto20["m_columns"][] = "complexityNP";
$proto20["m_columns"][] = "custom_complexity";
$proto20["m_columns"][] = "total_images";
$proto20["m_columns"][] = "is_urgent";
$proto20["m_columns"][] = "urgent_instruction";
$proto20["m_columns"][] = "delivery_duration";
$proto20["m_columns"][] = "delivery_date";
$proto20["m_columns"][] = "notify_options";
$proto20["m_columns"][] = "notes";
$proto20["m_columns"][] = "web_note";
$proto20["m_columns"][] = "comments";
$proto20["m_columns"][] = "pdf_id";
$proto20["m_columns"][] = "pdf_location";
$proto20["m_columns"][] = "allow_batch_process";
$proto20["m_columns"][] = "jobstatus_id";
$proto20["m_columns"][] = "reviewer_id";
$proto20["m_columns"][] = "reviewed_date";
$proto20["m_columns"][] = "accept_id";
$proto20["m_columns"][] = "accepted_date";
$proto20["m_columns"][] = "downloader_id";
$proto20["m_columns"][] = "download_date";
$proto20["m_columns"][] = "distributor_id";
$proto20["m_columns"][] = "distribute_date";
$proto20["m_columns"][] = "designer_list";
$proto20["m_columns"][] = "qcs_list";
$proto20["m_columns"][] = "finish_date";
$proto20["m_columns"][] = "uploader_id";
$proto20["m_columns"][] = "upload_date";
$proto20["m_columns"][] = "notifer_id";
$proto20["m_columns"][] = "notify_date";
$proto20["m_columns"][] = "rejector_id";
$proto20["m_columns"][] = "reject_date";
$proto20["m_columns"][] = "reject_reason";
$proto20["m_columns"][] = "activity_log";
$proto20["m_columns"][] = "time_remaining";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "job";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "Daily Job Report (Accepted)";
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
$proto24["m_srcTableName"] = "Daily Job Report (Accepted)";
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
$proto23["m_sql"] = "LEFT OUTER JOIN pdf ON job.pdf_id = pdf.pdf_id";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "Daily Job Report (Accepted)";
$proto25=array();
$proto25["m_sql"] = "job.pdf_id = pdf.pdf_id";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "job",
	"m_srcTableName" => "Daily Job Report (Accepted)"
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "= pdf.pdf_id";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto27=array();
						$proto28=array();
$proto28["m_functiontype"] = "SQLF_CUSTOM";
$proto28["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "job.accepted_date"
));

$proto28["m_arguments"][]=$obj;
$proto28["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto28);

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Daily Job Report (Accepted)"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "accepted_date",
	"m_strTable" => "job",
	"m_srcTableName" => "Daily Job Report (Accepted)"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 0;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Daily Job Report (Accepted)";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Daily_Job_Report__Accepted_ = createSqlQuery_Daily_Job_Report__Accepted_();


	
						
	
$tdataDaily_Job_Report__Accepted_[".sqlquery"] = $queryData_Daily_Job_Report__Accepted_;

$tableEvents["Daily Job Report (Accepted)"] = new eventsBase;
$tdataDaily_Job_Report__Accepted_[".hasEvents"] = false;

?>