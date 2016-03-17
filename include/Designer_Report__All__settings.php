<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDesigner_Report__All_ = array();	
	$tdataDesigner_Report__All_[".truncateText"] = true;
	$tdataDesigner_Report__All_[".NumberOfChars"] = 80; 
	$tdataDesigner_Report__All_[".ShortName"] = "Designer_Report__All_";
	$tdataDesigner_Report__All_[".OwnerID"] = "";
	$tdataDesigner_Report__All_[".OriginalTable"] = "designer_report";

//	field labels
$fieldLabelsDesigner_Report__All_ = array();
$fieldToolTipsDesigner_Report__All_ = array();
$pageTitlesDesigner_Report__All_ = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDesigner_Report__All_["English"] = array();
	$fieldToolTipsDesigner_Report__All_["English"] = array();
	$pageTitlesDesigner_Report__All_["English"] = array();
	$fieldLabelsDesigner_Report__All_["English"]["work_date"] = "Work Date";
	$fieldToolTipsDesigner_Report__All_["English"]["work_date"] = "";
	$fieldLabelsDesigner_Report__All_["English"]["designer_name"] = "Designer Name";
	$fieldToolTipsDesigner_Report__All_["English"]["designer_name"] = "";
	$fieldLabelsDesigner_Report__All_["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsDesigner_Report__All_["English"]["efficiency"] = "";
	$fieldLabelsDesigner_Report__All_["English"]["total_estimated_time"] = "Total Estimated Time";
	$fieldToolTipsDesigner_Report__All_["English"]["total_estimated_time"] = "";
	$fieldLabelsDesigner_Report__All_["English"]["total_designer_time"] = "Total Designer Time";
	$fieldToolTipsDesigner_Report__All_["English"]["total_designer_time"] = "";
	$fieldLabelsDesigner_Report__All_["English"]["IFNULL_SUM_total_images_counted___0_"] = "IFNULL(SUM(total Images Counted),  0)";
	$fieldToolTipsDesigner_Report__All_["English"]["IFNULL(SUM(total_images_counted), 0)"] = "";
	if (count($fieldToolTipsDesigner_Report__All_["English"]))
		$tdataDesigner_Report__All_[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDesigner_Report__All_[""] = array();
	$fieldToolTipsDesigner_Report__All_[""] = array();
	$pageTitlesDesigner_Report__All_[""] = array();
	if (count($fieldToolTipsDesigner_Report__All_[""]))
		$tdataDesigner_Report__All_[".isUseToolTips"] = true;
}
	
	
	$tdataDesigner_Report__All_[".NCSearch"] = true;



$tdataDesigner_Report__All_[".shortTableName"] = "Designer_Report__All_";
$tdataDesigner_Report__All_[".nSecOptions"] = 0;
$tdataDesigner_Report__All_[".recsPerRowList"] = 1;
$tdataDesigner_Report__All_[".recsPerRowPrint"] = 1;
$tdataDesigner_Report__All_[".mainTableOwnerID"] = "";
$tdataDesigner_Report__All_[".moveNext"] = 1;
$tdataDesigner_Report__All_[".entityType"] = 1;

$tdataDesigner_Report__All_[".strOriginalTableName"] = "designer_report";




$tdataDesigner_Report__All_[".showAddInPopup"] = false;

$tdataDesigner_Report__All_[".showEditInPopup"] = false;

$tdataDesigner_Report__All_[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDesigner_Report__All_[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDesigner_Report__All_[".fieldsForRegister"] = array();

$tdataDesigner_Report__All_[".listAjax"] = false;

	$tdataDesigner_Report__All_[".audit"] = false;

	$tdataDesigner_Report__All_[".locking"] = false;


$tdataDesigner_Report__All_[".add"] = true;
$tdataDesigner_Report__All_[".afterAddAction"] = 0;
$tdataDesigner_Report__All_[".closePopupAfterAdd"] = 1;
$tdataDesigner_Report__All_[".afterAddActionDetTable"] = "";

$tdataDesigner_Report__All_[".list"] = true;

$tdataDesigner_Report__All_[".inlineAdd"] = true;

$tdataDesigner_Report__All_[".import"] = true;

$tdataDesigner_Report__All_[".exportTo"] = true;

$tdataDesigner_Report__All_[".printFriendly"] = true;


$tdataDesigner_Report__All_[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDesigner_Report__All_[".searchSaving"] = false;
//

$tdataDesigner_Report__All_[".showSearchPanel"] = true;
		$tdataDesigner_Report__All_[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDesigner_Report__All_[".isUseAjaxSuggest"] = false;
else 
	$tdataDesigner_Report__All_[".isUseAjaxSuggest"] = true;

$tdataDesigner_Report__All_[".rowHighlite"] = true;


																																																																																																																																															
$tdataDesigner_Report__All_[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDesigner_Report__All_[".isUseTimeForSearch"] = false;





$tdataDesigner_Report__All_[".allSearchFields"] = array();
$tdataDesigner_Report__All_[".filterFields"] = array();
$tdataDesigner_Report__All_[".requiredSearchFields"] = array();

$tdataDesigner_Report__All_[".allSearchFields"][] = "work_date";
	$tdataDesigner_Report__All_[".allSearchFields"][] = "designer_name";
	$tdataDesigner_Report__All_[".allSearchFields"][] = "total_estimated_time";
	$tdataDesigner_Report__All_[".allSearchFields"][] = "total_designer_time";
	$tdataDesigner_Report__All_[".allSearchFields"][] = "efficiency";
	$tdataDesigner_Report__All_[".allSearchFields"][] = "IFNULL(SUM(total_images_counted), 0)";
	

$tdataDesigner_Report__All_[".googleLikeFields"] = array();
$tdataDesigner_Report__All_[".googleLikeFields"][] = "work_date";
$tdataDesigner_Report__All_[".googleLikeFields"][] = "designer_name";
$tdataDesigner_Report__All_[".googleLikeFields"][] = "total_estimated_time";
$tdataDesigner_Report__All_[".googleLikeFields"][] = "total_designer_time";
$tdataDesigner_Report__All_[".googleLikeFields"][] = "efficiency";
$tdataDesigner_Report__All_[".googleLikeFields"][] = "IFNULL(SUM(total_images_counted), 0)";


$tdataDesigner_Report__All_[".advSearchFields"] = array();
$tdataDesigner_Report__All_[".advSearchFields"][] = "work_date";
$tdataDesigner_Report__All_[".advSearchFields"][] = "designer_name";
$tdataDesigner_Report__All_[".advSearchFields"][] = "total_estimated_time";
$tdataDesigner_Report__All_[".advSearchFields"][] = "total_designer_time";
$tdataDesigner_Report__All_[".advSearchFields"][] = "efficiency";
$tdataDesigner_Report__All_[".advSearchFields"][] = "IFNULL(SUM(total_images_counted), 0)";

$tdataDesigner_Report__All_[".tableType"] = "list";

$tdataDesigner_Report__All_[".printerPageOrientation"] = 0;
$tdataDesigner_Report__All_[".nPrinterPageScale"] = 100;

$tdataDesigner_Report__All_[".nPrinterSplitRecords"] = 40;

$tdataDesigner_Report__All_[".nPrinterPDFSplitRecords"] = 40;



$tdataDesigner_Report__All_[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataDesigner_Report__All_[".pageSize"] = 20;

$tdataDesigner_Report__All_[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY work_date";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDesigner_Report__All_[".strOrderBy"] = $tstrOrderBy;

$tdataDesigner_Report__All_[".orderindexes"] = array();
$tdataDesigner_Report__All_[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "work_date");

$tdataDesigner_Report__All_[".sqlHead"] = "SELECT work_date,  designer_name,  IFNULL(SUM(TIME_TO_SEC(estimated_time)), 0) AS total_estimated_time,  IFNULL(SUM(TIME_TO_SEC(designer_time)), 0) AS total_designer_time,  IFNULL((SUM(TIME_TO_SEC(estimated_time)) * 100) / SUM(TIME_TO_SEC(designer_time)), 0) AS efficiency,  IFNULL(SUM(total_images_counted), 0)";
$tdataDesigner_Report__All_[".sqlFrom"] = "FROM designer_report";
$tdataDesigner_Report__All_[".sqlWhereExpr"] = "(work_date != '0000-00-00 00:00:00') AND (designer_name IS NOT NULL)";
$tdataDesigner_Report__All_[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDesigner_Report__All_[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDesigner_Report__All_[".arrGroupsPerPage"] = $arrGPP;

$tdataDesigner_Report__All_[".highlightSearchResults"] = true;

$tableKeysDesigner_Report__All_ = array();
$tdataDesigner_Report__All_[".Keys"] = $tableKeysDesigner_Report__All_;

$tdataDesigner_Report__All_[".listFields"] = array();
$tdataDesigner_Report__All_[".listFields"][] = "work_date";
$tdataDesigner_Report__All_[".listFields"][] = "designer_name";
$tdataDesigner_Report__All_[".listFields"][] = "total_estimated_time";
$tdataDesigner_Report__All_[".listFields"][] = "total_designer_time";
$tdataDesigner_Report__All_[".listFields"][] = "efficiency";
$tdataDesigner_Report__All_[".listFields"][] = "IFNULL(SUM(total_images_counted), 0)";

$tdataDesigner_Report__All_[".hideMobileList"] = array();


$tdataDesigner_Report__All_[".viewFields"] = array();
$tdataDesigner_Report__All_[".viewFields"][] = "work_date";
$tdataDesigner_Report__All_[".viewFields"][] = "designer_name";
$tdataDesigner_Report__All_[".viewFields"][] = "total_estimated_time";
$tdataDesigner_Report__All_[".viewFields"][] = "total_designer_time";
$tdataDesigner_Report__All_[".viewFields"][] = "efficiency";
$tdataDesigner_Report__All_[".viewFields"][] = "IFNULL(SUM(total_images_counted), 0)";

$tdataDesigner_Report__All_[".addFields"] = array();
$tdataDesigner_Report__All_[".addFields"][] = "work_date";
$tdataDesigner_Report__All_[".addFields"][] = "designer_name";
$tdataDesigner_Report__All_[".addFields"][] = "efficiency";

$tdataDesigner_Report__All_[".masterListFields"] = array();
$tdataDesigner_Report__All_[".masterListFields"][] = "work_date";
$tdataDesigner_Report__All_[".masterListFields"][] = "designer_name";
$tdataDesigner_Report__All_[".masterListFields"][] = "total_estimated_time";
$tdataDesigner_Report__All_[".masterListFields"][] = "total_designer_time";
$tdataDesigner_Report__All_[".masterListFields"][] = "efficiency";
$tdataDesigner_Report__All_[".masterListFields"][] = "IFNULL(SUM(total_images_counted), 0)";

$tdataDesigner_Report__All_[".inlineAddFields"] = array();
$tdataDesigner_Report__All_[".inlineAddFields"][] = "work_date";
$tdataDesigner_Report__All_[".inlineAddFields"][] = "designer_name";
$tdataDesigner_Report__All_[".inlineAddFields"][] = "efficiency";

$tdataDesigner_Report__All_[".editFields"] = array();
$tdataDesigner_Report__All_[".editFields"][] = "work_date";
$tdataDesigner_Report__All_[".editFields"][] = "designer_name";
$tdataDesigner_Report__All_[".editFields"][] = "efficiency";

$tdataDesigner_Report__All_[".inlineEditFields"] = array();
$tdataDesigner_Report__All_[".inlineEditFields"][] = "work_date";
$tdataDesigner_Report__All_[".inlineEditFields"][] = "designer_name";
$tdataDesigner_Report__All_[".inlineEditFields"][] = "efficiency";

$tdataDesigner_Report__All_[".exportFields"] = array();
$tdataDesigner_Report__All_[".exportFields"][] = "work_date";
$tdataDesigner_Report__All_[".exportFields"][] = "designer_name";
$tdataDesigner_Report__All_[".exportFields"][] = "total_estimated_time";
$tdataDesigner_Report__All_[".exportFields"][] = "total_designer_time";
$tdataDesigner_Report__All_[".exportFields"][] = "efficiency";
$tdataDesigner_Report__All_[".exportFields"][] = "IFNULL(SUM(total_images_counted), 0)";

$tdataDesigner_Report__All_[".importFields"] = array();
$tdataDesigner_Report__All_[".importFields"][] = "work_date";
$tdataDesigner_Report__All_[".importFields"][] = "designer_name";
$tdataDesigner_Report__All_[".importFields"][] = "total_estimated_time";
$tdataDesigner_Report__All_[".importFields"][] = "total_designer_time";
$tdataDesigner_Report__All_[".importFields"][] = "efficiency";
$tdataDesigner_Report__All_[".importFields"][] = "IFNULL(SUM(total_images_counted), 0)";

$tdataDesigner_Report__All_[".printFields"] = array();
$tdataDesigner_Report__All_[".printFields"][] = "work_date";
$tdataDesigner_Report__All_[".printFields"][] = "designer_name";
$tdataDesigner_Report__All_[".printFields"][] = "total_estimated_time";
$tdataDesigner_Report__All_[".printFields"][] = "total_designer_time";
$tdataDesigner_Report__All_[".printFields"][] = "efficiency";
$tdataDesigner_Report__All_[".printFields"][] = "IFNULL(SUM(total_images_counted), 0)";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Designer_Report__All_","work_date"); 
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
	
		$fdata["strField"] = "work_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "work_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 10; 
	$edata["LastYearFactor"] = 100; 
	
		
		
		
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

	

	
	$tdataDesigner_Report__All_["work_date"] = $fdata;
//	designer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "designer_name";
	$fdata["GoodName"] = "designer_name";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("Designer_Report__All_","designer_name"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designer_name";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
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

	

	
	$tdataDesigner_Report__All_["designer_name"] = $fdata;
//	total_estimated_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "total_estimated_time";
	$fdata["GoodName"] = "total_estimated_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designer_Report__All_","total_estimated_time"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_estimated_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IFNULL(SUM(TIME_TO_SEC(estimated_time)), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
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

	

	
	$tdataDesigner_Report__All_["total_estimated_time"] = $fdata;
//	total_designer_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_designer_time";
	$fdata["GoodName"] = "total_designer_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designer_Report__All_","total_designer_time"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_designer_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IFNULL(SUM(TIME_TO_SEC(designer_time)), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
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

	

	
	$tdataDesigner_Report__All_["total_designer_time"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designer_Report__All_","efficiency"); 
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
	
		$fdata["strField"] = "efficiency"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IFNULL((SUM(TIME_TO_SEC(estimated_time)) * 100) / SUM(TIME_TO_SEC(designer_time)), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Report__All_["efficiency"] = $fdata;
//	IFNULL(SUM(total_images_counted), 0)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "IFNULL(SUM(total_images_counted), 0)";
	$fdata["GoodName"] = "IFNULL_SUM_total_images_counted___0_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designer_Report__All_","IFNULL_SUM_total_images_counted___0_"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "IFNULL(SUM(total_images_counted), 0)"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IFNULL(SUM(total_images_counted), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
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

	

	
	$tdataDesigner_Report__All_["IFNULL(SUM(total_images_counted), 0)"] = $fdata;

	
$tables_data["Designer Report (All)"]=&$tdataDesigner_Report__All_;
$field_labels["Designer_Report__All_"] = &$fieldLabelsDesigner_Report__All_;
$fieldToolTips["Designer Report (All)"] = &$fieldToolTipsDesigner_Report__All_;
$page_titles["Designer_Report__All_"] = &$pageTitlesDesigner_Report__All_;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Designer Report (All)"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Designer Report (All)"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Designer_Report__All_()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_date,  designer_name,  IFNULL(SUM(TIME_TO_SEC(estimated_time)), 0) AS total_estimated_time,  IFNULL(SUM(TIME_TO_SEC(designer_time)), 0) AS total_designer_time,  IFNULL((SUM(TIME_TO_SEC(estimated_time)) * 100) / SUM(TIME_TO_SEC(designer_time)), 0) AS efficiency,  IFNULL(SUM(total_images_counted), 0)";
$proto0["m_strFrom"] = "FROM designer_report";
$proto0["m_strWhere"] = "(work_date != '0000-00-00 00:00:00') AND (designer_name IS NOT NULL)";
$proto0["m_strOrderBy"] = "ORDER BY work_date";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(work_date != '0000-00-00 00:00:00') AND (designer_name IS NOT NULL)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(work_date != '0000-00-00 00:00:00') AND (designer_name IS NOT NULL)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "work_date != '0000-00-00 00:00:00'";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Designer Report (All)"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "!= '0000-00-00 00:00:00'";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "designer_name IS NOT NULL";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Designer Report (All)"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "IS NOT NULL";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = true;
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
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Designer Report (All)"
));

$proto9["m_sql"] = "work_date";
$proto9["m_srcTableName"] = "Designer Report (All)";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Designer Report (All)"
));

$proto11["m_sql"] = "designer_name";
$proto11["m_srcTableName"] = "Designer Report (All)";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_CUSTOM";
$proto14["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(TIME_TO_SEC(estimated_time))"
));

$proto14["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "IFNULL(SUM(TIME_TO_SEC(estimated_time)), 0)";
$proto13["m_srcTableName"] = "Designer Report (All)";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "total_estimated_time";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$proto18=array();
$proto18["m_functiontype"] = "SQLF_CUSTOM";
$proto18["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(TIME_TO_SEC(designer_time))"
));

$proto18["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto18);

$proto17["m_sql"] = "IFNULL(SUM(TIME_TO_SEC(designer_time)), 0)";
$proto17["m_srcTableName"] = "Designer Report (All)";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "total_designer_time";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_CUSTOM";
$proto22["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(SUM(TIME_TO_SEC(estimated_time)) * 100) / SUM(TIME_TO_SEC(designer_time))"
));

$proto22["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "IFNULL((SUM(TIME_TO_SEC(estimated_time)) * 100) / SUM(TIME_TO_SEC(designer_time)), 0)";
$proto21["m_srcTableName"] = "Designer Report (All)";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$proto26=array();
$proto26["m_functiontype"] = "SQLF_CUSTOM";
$proto26["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(total_images_counted)"
));

$proto26["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto26);

$proto25["m_sql"] = "IFNULL(SUM(total_images_counted), 0)";
$proto25["m_srcTableName"] = "Designer Report (All)";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "designer_report";
$proto30["m_srcTableName"] = "Designer Report (All)";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "report_id";
$proto30["m_columns"][] = "report_reference";
$proto30["m_columns"][] = "work_date";
$proto30["m_columns"][] = "designer_name";
$proto30["m_columns"][] = "team_id";
$proto30["m_columns"][] = "subdiv_id";
$proto30["m_columns"][] = "user_group";
$proto30["m_columns"][] = "pdf_name";
$proto30["m_columns"][] = "estimated_time";
$proto30["m_columns"][] = "designer_time";
$proto30["m_columns"][] = "qc_time";
$proto30["m_columns"][] = "efficiency";
$proto30["m_columns"][] = "total_images_counted";
$proto30["m_columns"][] = "comments";
$proto30["m_columns"][] = "work_type";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "designer_report";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "Designer Report (All)";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Designer Report (All)"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Designer Report (All)"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "Designer Report (All)"
));

$proto37["m_column"]=$obj;
$proto37["m_bAsc"] = 1;
$proto37["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto37);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Designer Report (All)";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Designer_Report__All_ = createSqlQuery_Designer_Report__All_();


	
						
	
$tdataDesigner_Report__All_[".sqlquery"] = $queryData_Designer_Report__All_;

$tableEvents["Designer Report (All)"] = new eventsBase;
$tdataDesigner_Report__All_[".hasEvents"] = false;

?>