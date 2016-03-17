<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapdf_report = array();	
	$tdatapdf_report[".truncateText"] = true;
	$tdatapdf_report[".NumberOfChars"] = 80; 
	$tdatapdf_report[".ShortName"] = "pdf_report";
	$tdatapdf_report[".OwnerID"] = "";
	$tdatapdf_report[".OriginalTable"] = "pdf_report";

//	field labels
$fieldLabelspdf_report = array();
$fieldToolTipspdf_report = array();
$pageTitlespdf_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspdf_report["English"] = array();
	$fieldToolTipspdf_report["English"] = array();
	$pageTitlespdf_report["English"] = array();
	$fieldLabelspdf_report["English"]["pdf_name"] = "Pdf Name";
	$fieldToolTipspdf_report["English"]["pdf_name"] = "";
	$fieldLabelspdf_report["English"]["pdf_eta"] = "Pdf Eta";
	$fieldToolTipspdf_report["English"]["pdf_eta"] = "";
	$fieldLabelspdf_report["English"]["designer_time"] = "Designer Time";
	$fieldToolTipspdf_report["English"]["designer_time"] = "";
	$fieldLabelspdf_report["English"]["qc_time"] = "Qc Time";
	$fieldToolTipspdf_report["English"]["qc_time"] = "";
	$fieldLabelspdf_report["English"]["pdf_date"] = "Pdf Date";
	$fieldToolTipspdf_report["English"]["pdf_date"] = "";
	$fieldLabelspdf_report["English"]["efficiency"] = "Efficiency";
	$fieldToolTipspdf_report["English"]["efficiency"] = "";
	$fieldLabelspdf_report["English"]["files"] = "Files";
	$fieldToolTipspdf_report["English"]["files"] = "";
	$fieldLabelspdf_report["English"]["report_id"] = "Report Id";
	$fieldToolTipspdf_report["English"]["report_id"] = "";
	$fieldLabelspdf_report["English"]["pdf_id"] = "Pdf Id";
	$fieldToolTipspdf_report["English"]["pdf_id"] = "";
	if (count($fieldToolTipspdf_report["English"]))
		$tdatapdf_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspdf_report[""] = array();
	$fieldToolTipspdf_report[""] = array();
	$pageTitlespdf_report[""] = array();
	if (count($fieldToolTipspdf_report[""]))
		$tdatapdf_report[".isUseToolTips"] = true;
}
	
	
	$tdatapdf_report[".NCSearch"] = true;



$tdatapdf_report[".shortTableName"] = "pdf_report";
$tdatapdf_report[".nSecOptions"] = 0;
$tdatapdf_report[".recsPerRowList"] = 1;
$tdatapdf_report[".recsPerRowPrint"] = 1;
$tdatapdf_report[".mainTableOwnerID"] = "";
$tdatapdf_report[".moveNext"] = 1;
$tdatapdf_report[".entityType"] = 0;

$tdatapdf_report[".strOriginalTableName"] = "pdf_report";




$tdatapdf_report[".showAddInPopup"] = false;

$tdatapdf_report[".showEditInPopup"] = false;

$tdatapdf_report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapdf_report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapdf_report[".fieldsForRegister"] = array();

$tdatapdf_report[".listAjax"] = false;

	$tdatapdf_report[".audit"] = false;

	$tdatapdf_report[".locking"] = false;


$tdatapdf_report[".add"] = true;
$tdatapdf_report[".afterAddAction"] = 0;
$tdatapdf_report[".closePopupAfterAdd"] = 1;
$tdatapdf_report[".afterAddActionDetTable"] = "";

$tdatapdf_report[".list"] = true;

$tdatapdf_report[".inlineAdd"] = true;

$tdatapdf_report[".import"] = true;

$tdatapdf_report[".exportTo"] = true;

$tdatapdf_report[".printFriendly"] = true;


$tdatapdf_report[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapdf_report[".searchSaving"] = false;
//

$tdatapdf_report[".showSearchPanel"] = true;
		$tdatapdf_report[".flexibleSearch"] = true;		

if (isMobile())
	$tdatapdf_report[".isUseAjaxSuggest"] = false;
else 
	$tdatapdf_report[".isUseAjaxSuggest"] = true;

$tdatapdf_report[".rowHighlite"] = true;


																																																																																																																																															
$tdatapdf_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapdf_report[".isUseTimeForSearch"] = false;





$tdatapdf_report[".allSearchFields"] = array();
$tdatapdf_report[".filterFields"] = array();
$tdatapdf_report[".requiredSearchFields"] = array();

$tdatapdf_report[".allSearchFields"][] = "report_id";
	$tdatapdf_report[".allSearchFields"][] = "pdf_date";
	$tdatapdf_report[".allSearchFields"][] = "pdf_id";
	$tdatapdf_report[".allSearchFields"][] = "pdf_name";
	$tdatapdf_report[".allSearchFields"][] = "pdf_eta";
	$tdatapdf_report[".allSearchFields"][] = "designer_time";
	$tdatapdf_report[".allSearchFields"][] = "qc_time";
	$tdatapdf_report[".allSearchFields"][] = "efficiency";
	$tdatapdf_report[".allSearchFields"][] = "files";
	

$tdatapdf_report[".googleLikeFields"] = array();
$tdatapdf_report[".googleLikeFields"][] = "report_id";
$tdatapdf_report[".googleLikeFields"][] = "pdf_date";
$tdatapdf_report[".googleLikeFields"][] = "pdf_id";
$tdatapdf_report[".googleLikeFields"][] = "pdf_name";
$tdatapdf_report[".googleLikeFields"][] = "pdf_eta";
$tdatapdf_report[".googleLikeFields"][] = "designer_time";
$tdatapdf_report[".googleLikeFields"][] = "qc_time";
$tdatapdf_report[".googleLikeFields"][] = "efficiency";
$tdatapdf_report[".googleLikeFields"][] = "files";


$tdatapdf_report[".advSearchFields"] = array();
$tdatapdf_report[".advSearchFields"][] = "report_id";
$tdatapdf_report[".advSearchFields"][] = "pdf_date";
$tdatapdf_report[".advSearchFields"][] = "pdf_id";
$tdatapdf_report[".advSearchFields"][] = "pdf_name";
$tdatapdf_report[".advSearchFields"][] = "pdf_eta";
$tdatapdf_report[".advSearchFields"][] = "designer_time";
$tdatapdf_report[".advSearchFields"][] = "qc_time";
$tdatapdf_report[".advSearchFields"][] = "efficiency";
$tdatapdf_report[".advSearchFields"][] = "files";

$tdatapdf_report[".tableType"] = "list";

$tdatapdf_report[".printerPageOrientation"] = 0;
$tdatapdf_report[".nPrinterPageScale"] = 100;

$tdatapdf_report[".nPrinterSplitRecords"] = 40;

$tdatapdf_report[".nPrinterPDFSplitRecords"] = 40;



$tdatapdf_report[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatapdf_report[".pageSize"] = 20;

$tdatapdf_report[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapdf_report[".strOrderBy"] = $tstrOrderBy;

$tdatapdf_report[".orderindexes"] = array();

$tdatapdf_report[".sqlHead"] = "SELECT report_id,  	pdf_date,  	pdf_id,  	pdf_name,  	pdf_eta,  	designer_time,  	qc_time,  	efficiency,  	files";
$tdatapdf_report[".sqlFrom"] = "FROM pdf_report";
$tdatapdf_report[".sqlWhereExpr"] = "";
$tdatapdf_report[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapdf_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapdf_report[".arrGroupsPerPage"] = $arrGPP;

$tdatapdf_report[".highlightSearchResults"] = true;

$tableKeyspdf_report = array();
$tdatapdf_report[".Keys"] = $tableKeyspdf_report;

$tdatapdf_report[".listFields"] = array();
$tdatapdf_report[".listFields"][] = "report_id";
$tdatapdf_report[".listFields"][] = "pdf_date";
$tdatapdf_report[".listFields"][] = "pdf_id";
$tdatapdf_report[".listFields"][] = "pdf_name";
$tdatapdf_report[".listFields"][] = "pdf_eta";
$tdatapdf_report[".listFields"][] = "designer_time";
$tdatapdf_report[".listFields"][] = "qc_time";
$tdatapdf_report[".listFields"][] = "efficiency";
$tdatapdf_report[".listFields"][] = "files";

$tdatapdf_report[".hideMobileList"] = array();


$tdatapdf_report[".viewFields"] = array();
$tdatapdf_report[".viewFields"][] = "report_id";
$tdatapdf_report[".viewFields"][] = "pdf_date";
$tdatapdf_report[".viewFields"][] = "pdf_id";
$tdatapdf_report[".viewFields"][] = "pdf_name";
$tdatapdf_report[".viewFields"][] = "pdf_eta";
$tdatapdf_report[".viewFields"][] = "designer_time";
$tdatapdf_report[".viewFields"][] = "qc_time";
$tdatapdf_report[".viewFields"][] = "efficiency";
$tdatapdf_report[".viewFields"][] = "files";

$tdatapdf_report[".addFields"] = array();
$tdatapdf_report[".addFields"][] = "report_id";
$tdatapdf_report[".addFields"][] = "pdf_date";
$tdatapdf_report[".addFields"][] = "pdf_id";
$tdatapdf_report[".addFields"][] = "pdf_name";
$tdatapdf_report[".addFields"][] = "pdf_eta";
$tdatapdf_report[".addFields"][] = "designer_time";
$tdatapdf_report[".addFields"][] = "qc_time";
$tdatapdf_report[".addFields"][] = "efficiency";
$tdatapdf_report[".addFields"][] = "files";

$tdatapdf_report[".masterListFields"] = array();
$tdatapdf_report[".masterListFields"][] = "report_id";
$tdatapdf_report[".masterListFields"][] = "pdf_date";
$tdatapdf_report[".masterListFields"][] = "pdf_id";
$tdatapdf_report[".masterListFields"][] = "pdf_name";
$tdatapdf_report[".masterListFields"][] = "pdf_eta";
$tdatapdf_report[".masterListFields"][] = "designer_time";
$tdatapdf_report[".masterListFields"][] = "qc_time";
$tdatapdf_report[".masterListFields"][] = "efficiency";
$tdatapdf_report[".masterListFields"][] = "files";

$tdatapdf_report[".inlineAddFields"] = array();
$tdatapdf_report[".inlineAddFields"][] = "report_id";
$tdatapdf_report[".inlineAddFields"][] = "pdf_date";
$tdatapdf_report[".inlineAddFields"][] = "pdf_id";
$tdatapdf_report[".inlineAddFields"][] = "pdf_name";
$tdatapdf_report[".inlineAddFields"][] = "pdf_eta";
$tdatapdf_report[".inlineAddFields"][] = "designer_time";
$tdatapdf_report[".inlineAddFields"][] = "qc_time";
$tdatapdf_report[".inlineAddFields"][] = "efficiency";
$tdatapdf_report[".inlineAddFields"][] = "files";

$tdatapdf_report[".editFields"] = array();
$tdatapdf_report[".editFields"][] = "report_id";
$tdatapdf_report[".editFields"][] = "pdf_date";
$tdatapdf_report[".editFields"][] = "pdf_id";
$tdatapdf_report[".editFields"][] = "pdf_name";
$tdatapdf_report[".editFields"][] = "pdf_eta";
$tdatapdf_report[".editFields"][] = "designer_time";
$tdatapdf_report[".editFields"][] = "qc_time";
$tdatapdf_report[".editFields"][] = "efficiency";
$tdatapdf_report[".editFields"][] = "files";

$tdatapdf_report[".inlineEditFields"] = array();
$tdatapdf_report[".inlineEditFields"][] = "report_id";
$tdatapdf_report[".inlineEditFields"][] = "pdf_date";
$tdatapdf_report[".inlineEditFields"][] = "pdf_id";
$tdatapdf_report[".inlineEditFields"][] = "pdf_name";
$tdatapdf_report[".inlineEditFields"][] = "pdf_eta";
$tdatapdf_report[".inlineEditFields"][] = "designer_time";
$tdatapdf_report[".inlineEditFields"][] = "qc_time";
$tdatapdf_report[".inlineEditFields"][] = "efficiency";
$tdatapdf_report[".inlineEditFields"][] = "files";

$tdatapdf_report[".exportFields"] = array();
$tdatapdf_report[".exportFields"][] = "report_id";
$tdatapdf_report[".exportFields"][] = "pdf_date";
$tdatapdf_report[".exportFields"][] = "pdf_id";
$tdatapdf_report[".exportFields"][] = "pdf_name";
$tdatapdf_report[".exportFields"][] = "pdf_eta";
$tdatapdf_report[".exportFields"][] = "designer_time";
$tdatapdf_report[".exportFields"][] = "qc_time";
$tdatapdf_report[".exportFields"][] = "efficiency";
$tdatapdf_report[".exportFields"][] = "files";

$tdatapdf_report[".importFields"] = array();
$tdatapdf_report[".importFields"][] = "report_id";
$tdatapdf_report[".importFields"][] = "pdf_date";
$tdatapdf_report[".importFields"][] = "pdf_id";
$tdatapdf_report[".importFields"][] = "pdf_name";
$tdatapdf_report[".importFields"][] = "pdf_eta";
$tdatapdf_report[".importFields"][] = "designer_time";
$tdatapdf_report[".importFields"][] = "qc_time";
$tdatapdf_report[".importFields"][] = "efficiency";
$tdatapdf_report[".importFields"][] = "files";

$tdatapdf_report[".printFields"] = array();
$tdatapdf_report[".printFields"][] = "report_id";
$tdatapdf_report[".printFields"][] = "pdf_date";
$tdatapdf_report[".printFields"][] = "pdf_id";
$tdatapdf_report[".printFields"][] = "pdf_name";
$tdatapdf_report[".printFields"][] = "pdf_eta";
$tdatapdf_report[".printFields"][] = "designer_time";
$tdatapdf_report[".printFields"][] = "qc_time";
$tdatapdf_report[".printFields"][] = "efficiency";
$tdatapdf_report[".printFields"][] = "files";

//	report_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "report_id";
	$fdata["GoodName"] = "report_id";
	$fdata["ownerTable"] = "pdf_report";
	$fdata["Label"] = GetFieldLabel("pdf_report","report_id"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "report_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "report_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=25";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapdf_report["report_id"] = $fdata;
//	pdf_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pdf_date";
	$fdata["GoodName"] = "pdf_date";
	$fdata["ownerTable"] = "pdf_report";
	$fdata["Label"] = GetFieldLabel("pdf_report","pdf_date"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapdf_report["pdf_date"] = $fdata;
//	pdf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pdf_id";
	$fdata["GoodName"] = "pdf_id";
	$fdata["ownerTable"] = "pdf_report";
	$fdata["Label"] = GetFieldLabel("pdf_report","pdf_id"); 
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
	$fdata["FullName"] = "pdf_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapdf_report["pdf_id"] = $fdata;
//	pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pdf_name";
	$fdata["GoodName"] = "pdf_name";
	$fdata["ownerTable"] = "pdf_report";
	$fdata["Label"] = GetFieldLabel("pdf_report","pdf_name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf_name";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapdf_report["pdf_name"] = $fdata;
//	pdf_eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "pdf_eta";
	$fdata["GoodName"] = "pdf_eta";
	$fdata["ownerTable"] = "pdf_report";
	$fdata["Label"] = GetFieldLabel("pdf_report","pdf_eta"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_eta"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf_eta";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapdf_report["pdf_eta"] = $fdata;
//	designer_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "designer_time";
	$fdata["GoodName"] = "designer_time";
	$fdata["ownerTable"] = "pdf_report";
	$fdata["Label"] = GetFieldLabel("pdf_report","designer_time"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designer_time";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapdf_report["designer_time"] = $fdata;
//	qc_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "qc_time";
	$fdata["GoodName"] = "qc_time";
	$fdata["ownerTable"] = "pdf_report";
	$fdata["Label"] = GetFieldLabel("pdf_report","qc_time"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qc_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qc_time";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapdf_report["qc_time"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "pdf_report";
	$fdata["Label"] = GetFieldLabel("pdf_report","efficiency"); 
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
	
		$fdata["strField"] = "efficiency"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "efficiency";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapdf_report["efficiency"] = $fdata;
//	files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "files";
	$fdata["GoodName"] = "files";
	$fdata["ownerTable"] = "pdf_report";
	$fdata["Label"] = GetFieldLabel("pdf_report","files"); 
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
	
		$fdata["strField"] = "files"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "files";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapdf_report["files"] = $fdata;

	
$tables_data["pdf_report"]=&$tdatapdf_report;
$field_labels["pdf_report"] = &$fieldLabelspdf_report;
$fieldToolTips["pdf_report"] = &$fieldToolTipspdf_report;
$page_titles["pdf_report"] = &$pageTitlespdf_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pdf_report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["pdf_report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pdf_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "report_id,  	pdf_date,  	pdf_id,  	pdf_name,  	pdf_eta,  	designer_time,  	qc_time,  	efficiency,  	files";
$proto0["m_strFrom"] = "FROM pdf_report";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
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
	"m_strName" => "report_id",
	"m_strTable" => "pdf_report",
	"m_srcTableName" => "pdf_report"
));

$proto5["m_sql"] = "report_id";
$proto5["m_srcTableName"] = "pdf_report";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_date",
	"m_strTable" => "pdf_report",
	"m_srcTableName" => "pdf_report"
));

$proto7["m_sql"] = "pdf_date";
$proto7["m_srcTableName"] = "pdf_report";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "pdf_report",
	"m_srcTableName" => "pdf_report"
));

$proto9["m_sql"] = "pdf_id";
$proto9["m_srcTableName"] = "pdf_report";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf_report",
	"m_srcTableName" => "pdf_report"
));

$proto11["m_sql"] = "pdf_name";
$proto11["m_srcTableName"] = "pdf_report";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_eta",
	"m_strTable" => "pdf_report",
	"m_srcTableName" => "pdf_report"
));

$proto13["m_sql"] = "pdf_eta";
$proto13["m_srcTableName"] = "pdf_report";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_time",
	"m_strTable" => "pdf_report",
	"m_srcTableName" => "pdf_report"
));

$proto15["m_sql"] = "designer_time";
$proto15["m_srcTableName"] = "pdf_report";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "qc_time",
	"m_strTable" => "pdf_report",
	"m_srcTableName" => "pdf_report"
));

$proto17["m_sql"] = "qc_time";
$proto17["m_srcTableName"] = "pdf_report";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "efficiency",
	"m_strTable" => "pdf_report",
	"m_srcTableName" => "pdf_report"
));

$proto19["m_sql"] = "efficiency";
$proto19["m_srcTableName"] = "pdf_report";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "files",
	"m_strTable" => "pdf_report",
	"m_srcTableName" => "pdf_report"
));

$proto21["m_sql"] = "files";
$proto21["m_srcTableName"] = "pdf_report";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "pdf_report";
$proto24["m_srcTableName"] = "pdf_report";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "report_id";
$proto24["m_columns"][] = "pdf_date";
$proto24["m_columns"][] = "pdf_id";
$proto24["m_columns"][] = "pdf_name";
$proto24["m_columns"][] = "pdf_eta";
$proto24["m_columns"][] = "designer_time";
$proto24["m_columns"][] = "qc_time";
$proto24["m_columns"][] = "efficiency";
$proto24["m_columns"][] = "files";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "pdf_report";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "pdf_report";
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

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pdf_report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pdf_report = createSqlQuery_pdf_report();


	
									
	
$tdatapdf_report[".sqlquery"] = $queryData_pdf_report;

$tableEvents["pdf_report"] = new eventsBase;
$tdatapdf_report[".hasEvents"] = false;

?>