<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapdf = array();	
	$tdatapdf[".truncateText"] = true;
	$tdatapdf[".NumberOfChars"] = 80; 
	$tdatapdf[".ShortName"] = "pdf";
	$tdatapdf[".OwnerID"] = "";
	$tdatapdf[".OriginalTable"] = "pdf";

//	field labels
$fieldLabelspdf = array();
$fieldToolTipspdf = array();
$pageTitlespdf = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspdf["English"] = array();
	$fieldToolTipspdf["English"] = array();
	$pageTitlespdf["English"] = array();
	$fieldLabelspdf["English"]["pdf_id"] = "Pdf Id";
	$fieldToolTipspdf["English"]["pdf_id"] = "";
	$fieldLabelspdf["English"]["pdf_name"] = "Pdf Name";
	$fieldToolTipspdf["English"]["pdf_name"] = "";
	$fieldLabelspdf["English"]["client_id"] = "Client Id";
	$fieldToolTipspdf["English"]["client_id"] = "";
	$fieldLabelspdf["English"]["pdf_location"] = "Pdf Location";
	$fieldToolTipspdf["English"]["pdf_location"] = "";
	$fieldLabelspdf["English"]["last_update"] = "Last Update";
	$fieldToolTipspdf["English"]["last_update"] = "";
	$fieldLabelspdf["English"]["pdf_estimated_average"] = "Pdf Estimated Average";
	$fieldToolTipspdf["English"]["pdf_estimated_average"] = "";
	$fieldLabelspdf["English"]["pdf_actual_average"] = "Pdf Actual Average";
	$fieldToolTipspdf["English"]["pdf_actual_average"] = "";
	$fieldLabelspdf["English"]["pdf_estimated_average1"] = "Pdf Estimated Average1";
	$fieldToolTipspdf["English"]["pdf_estimated_average1"] = "";
	$fieldLabelspdf["English"]["pdf_estimated_average2"] = "Pdf Estimated Average2";
	$fieldToolTipspdf["English"]["pdf_estimated_average2"] = "";
	$fieldLabelspdf["English"]["price"] = "Price";
	$fieldToolTipspdf["English"]["price"] = "";
	if (count($fieldToolTipspdf["English"]))
		$tdatapdf[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspdf[""] = array();
	$fieldToolTipspdf[""] = array();
	$pageTitlespdf[""] = array();
	if (count($fieldToolTipspdf[""]))
		$tdatapdf[".isUseToolTips"] = true;
}
	
	
	$tdatapdf[".NCSearch"] = true;



$tdatapdf[".shortTableName"] = "pdf";
$tdatapdf[".nSecOptions"] = 0;
$tdatapdf[".recsPerRowList"] = 1;
$tdatapdf[".recsPerRowPrint"] = 1;
$tdatapdf[".mainTableOwnerID"] = "";
$tdatapdf[".moveNext"] = 1;
$tdatapdf[".entityType"] = 0;

$tdatapdf[".strOriginalTableName"] = "pdf";




$tdatapdf[".showAddInPopup"] = false;

$tdatapdf[".showEditInPopup"] = false;

$tdatapdf[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapdf[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapdf[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatapdf[".listAjax"] = true;
else 
	$tdatapdf[".listAjax"] = false;

	$tdatapdf[".audit"] = false;

	$tdatapdf[".locking"] = false;

$tdatapdf[".edit"] = true;
$tdatapdf[".afterEditAction"] = 1;
$tdatapdf[".closePopupAfterEdit"] = 1;
$tdatapdf[".afterEditActionDetTable"] = "";

$tdatapdf[".add"] = true;
$tdatapdf[".afterAddAction"] = 0;
$tdatapdf[".closePopupAfterAdd"] = 1;
$tdatapdf[".afterAddActionDetTable"] = "";

$tdatapdf[".list"] = true;

$tdatapdf[".inlineEdit"] = true;
$tdatapdf[".view"] = true;

$tdatapdf[".import"] = true;

$tdatapdf[".exportTo"] = true;

$tdatapdf[".printFriendly"] = true;

$tdatapdf[".delete"] = true;

$tdatapdf[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapdf[".searchSaving"] = false;
//

$tdatapdf[".showSearchPanel"] = true;
		$tdatapdf[".flexibleSearch"] = true;		

if (isMobile())
	$tdatapdf[".isUseAjaxSuggest"] = false;
else 
	$tdatapdf[".isUseAjaxSuggest"] = true;

$tdatapdf[".rowHighlite"] = true;


																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												
$tdatapdf[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapdf[".isUseTimeForSearch"] = false;




$tdatapdf[".detailsLinksOnList"] = "1";

$tdatapdf[".allSearchFields"] = array();
$tdatapdf[".filterFields"] = array();
$tdatapdf[".requiredSearchFields"] = array();

$tdatapdf[".allSearchFields"][] = "pdf_estimated_average2";
	$tdatapdf[".allSearchFields"][] = "pdf_estimated_average1";
	$tdatapdf[".allSearchFields"][] = "price";
	$tdatapdf[".allSearchFields"][] = "pdf_id";
	$tdatapdf[".allSearchFields"][] = "client_id";
	$tdatapdf[".allSearchFields"][] = "pdf_name";
	$tdatapdf[".allSearchFields"][] = "pdf_location";
	$tdatapdf[".allSearchFields"][] = "last_update";
	$tdatapdf[".allSearchFields"][] = "pdf_estimated_average";
	$tdatapdf[".allSearchFields"][] = "pdf_actual_average";
	

$tdatapdf[".googleLikeFields"] = array();
$tdatapdf[".googleLikeFields"][] = "pdf_id";
$tdatapdf[".googleLikeFields"][] = "pdf_name";
$tdatapdf[".googleLikeFields"][] = "client_id";
$tdatapdf[".googleLikeFields"][] = "pdf_location";
$tdatapdf[".googleLikeFields"][] = "last_update";
$tdatapdf[".googleLikeFields"][] = "pdf_estimated_average";
$tdatapdf[".googleLikeFields"][] = "pdf_estimated_average1";
$tdatapdf[".googleLikeFields"][] = "pdf_estimated_average2";
$tdatapdf[".googleLikeFields"][] = "pdf_actual_average";
$tdatapdf[".googleLikeFields"][] = "price";


$tdatapdf[".advSearchFields"] = array();
$tdatapdf[".advSearchFields"][] = "pdf_estimated_average2";
$tdatapdf[".advSearchFields"][] = "pdf_estimated_average1";
$tdatapdf[".advSearchFields"][] = "price";
$tdatapdf[".advSearchFields"][] = "pdf_id";
$tdatapdf[".advSearchFields"][] = "client_id";
$tdatapdf[".advSearchFields"][] = "pdf_name";
$tdatapdf[".advSearchFields"][] = "pdf_location";
$tdatapdf[".advSearchFields"][] = "last_update";
$tdatapdf[".advSearchFields"][] = "pdf_estimated_average";
$tdatapdf[".advSearchFields"][] = "pdf_actual_average";

$tdatapdf[".tableType"] = "list";

$tdatapdf[".printerPageOrientation"] = 0;
$tdatapdf[".nPrinterPageScale"] = 100;

$tdatapdf[".nPrinterSplitRecords"] = 40;

$tdatapdf[".nPrinterPDFSplitRecords"] = 40;



$tdatapdf[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatapdf[".pageSize"] = 20;

$tdatapdf[".warnLeavingPages"] = true;

$tdatapdf[".hideEmptyFieldsOnView"] = true;


$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapdf[".strOrderBy"] = $tstrOrderBy;

$tdatapdf[".orderindexes"] = array();

$tdatapdf[".sqlHead"] = "SELECT pdf_id,  	pdf_name,  	client_id,  	pdf_location,  	last_update,  	pdf_estimated_average,  	pdf_estimated_average1,  	pdf_estimated_average2,  	pdf_actual_average,  	price";
$tdatapdf[".sqlFrom"] = "FROM pdf";
$tdatapdf[".sqlWhereExpr"] = "";
$tdatapdf[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapdf[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapdf[".arrGroupsPerPage"] = $arrGPP;

$tdatapdf[".highlightSearchResults"] = true;

$tableKeyspdf = array();
$tableKeyspdf[] = "pdf_id";
$tdatapdf[".Keys"] = $tableKeyspdf;

$tdatapdf[".listFields"] = array();
$tdatapdf[".listFields"][] = "price";
$tdatapdf[".listFields"][] = "client_id";
$tdatapdf[".listFields"][] = "pdf_id";
$tdatapdf[".listFields"][] = "pdf_name";
$tdatapdf[".listFields"][] = "pdf_location";
$tdatapdf[".listFields"][] = "pdf_estimated_average";
$tdatapdf[".listFields"][] = "pdf_estimated_average1";
$tdatapdf[".listFields"][] = "pdf_estimated_average2";
$tdatapdf[".listFields"][] = "pdf_actual_average";
$tdatapdf[".listFields"][] = "last_update";

$tdatapdf[".hideMobileList"] = array();


$tdatapdf[".viewFields"] = array();
$tdatapdf[".viewFields"][] = "price";
$tdatapdf[".viewFields"][] = "pdf_id";
$tdatapdf[".viewFields"][] = "client_id";
$tdatapdf[".viewFields"][] = "pdf_name";
$tdatapdf[".viewFields"][] = "pdf_location";
$tdatapdf[".viewFields"][] = "last_update";
$tdatapdf[".viewFields"][] = "pdf_estimated_average";
$tdatapdf[".viewFields"][] = "pdf_actual_average";

$tdatapdf[".addFields"] = array();
$tdatapdf[".addFields"][] = "price";
$tdatapdf[".addFields"][] = "client_id";
$tdatapdf[".addFields"][] = "pdf_name";
$tdatapdf[".addFields"][] = "pdf_location";
$tdatapdf[".addFields"][] = "pdf_estimated_average";

$tdatapdf[".masterListFields"] = array();
$tdatapdf[".masterListFields"][] = "pdf_estimated_average2";
$tdatapdf[".masterListFields"][] = "pdf_estimated_average1";
$tdatapdf[".masterListFields"][] = "price";
$tdatapdf[".masterListFields"][] = "pdf_id";
$tdatapdf[".masterListFields"][] = "client_id";
$tdatapdf[".masterListFields"][] = "pdf_name";
$tdatapdf[".masterListFields"][] = "pdf_location";
$tdatapdf[".masterListFields"][] = "last_update";
$tdatapdf[".masterListFields"][] = "pdf_estimated_average";
$tdatapdf[".masterListFields"][] = "pdf_actual_average";

$tdatapdf[".inlineAddFields"] = array();
$tdatapdf[".inlineAddFields"][] = "price";

$tdatapdf[".editFields"] = array();
$tdatapdf[".editFields"][] = "price";
$tdatapdf[".editFields"][] = "pdf_id";
$tdatapdf[".editFields"][] = "client_id";
$tdatapdf[".editFields"][] = "pdf_name";
$tdatapdf[".editFields"][] = "pdf_location";
$tdatapdf[".editFields"][] = "last_update";
$tdatapdf[".editFields"][] = "pdf_estimated_average";

$tdatapdf[".inlineEditFields"] = array();
$tdatapdf[".inlineEditFields"][] = "price";
$tdatapdf[".inlineEditFields"][] = "pdf_name";
$tdatapdf[".inlineEditFields"][] = "pdf_estimated_average";
$tdatapdf[".inlineEditFields"][] = "pdf_estimated_average1";
$tdatapdf[".inlineEditFields"][] = "pdf_estimated_average2";
$tdatapdf[".inlineEditFields"][] = "pdf_actual_average";

$tdatapdf[".exportFields"] = array();
$tdatapdf[".exportFields"][] = "pdf_estimated_average2";
$tdatapdf[".exportFields"][] = "pdf_estimated_average1";
$tdatapdf[".exportFields"][] = "price";
$tdatapdf[".exportFields"][] = "pdf_id";
$tdatapdf[".exportFields"][] = "client_id";
$tdatapdf[".exportFields"][] = "pdf_name";
$tdatapdf[".exportFields"][] = "pdf_location";
$tdatapdf[".exportFields"][] = "last_update";
$tdatapdf[".exportFields"][] = "pdf_estimated_average";
$tdatapdf[".exportFields"][] = "pdf_actual_average";

$tdatapdf[".importFields"] = array();
$tdatapdf[".importFields"][] = "pdf_id";
$tdatapdf[".importFields"][] = "pdf_name";
$tdatapdf[".importFields"][] = "client_id";
$tdatapdf[".importFields"][] = "pdf_location";
$tdatapdf[".importFields"][] = "last_update";
$tdatapdf[".importFields"][] = "pdf_estimated_average";
$tdatapdf[".importFields"][] = "pdf_estimated_average1";
$tdatapdf[".importFields"][] = "pdf_estimated_average2";
$tdatapdf[".importFields"][] = "pdf_actual_average";
$tdatapdf[".importFields"][] = "price";

$tdatapdf[".printFields"] = array();
$tdatapdf[".printFields"][] = "pdf_estimated_average2";
$tdatapdf[".printFields"][] = "pdf_estimated_average1";
$tdatapdf[".printFields"][] = "price";
$tdatapdf[".printFields"][] = "pdf_id";
$tdatapdf[".printFields"][] = "client_id";
$tdatapdf[".printFields"][] = "pdf_name";
$tdatapdf[".printFields"][] = "pdf_location";
$tdatapdf[".printFields"][] = "last_update";
$tdatapdf[".printFields"][] = "pdf_estimated_average";
$tdatapdf[".printFields"][] = "pdf_actual_average";

//	pdf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pdf_id";
	$fdata["GoodName"] = "pdf_id";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("pdf","pdf_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdatapdf["pdf_id"] = $fdata;
//	pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pdf_name";
	$fdata["GoodName"] = "pdf_name";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("pdf","pdf_name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
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
			$edata["EditParams"].= " maxlength=200";
	
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

	

	
	$tdatapdf["pdf_name"] = $fdata;
//	client_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "client_id";
	$fdata["GoodName"] = "client_id";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("pdf","client_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "client_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "client_id";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "clients";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "client_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "client_name";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapdf["client_id"] = $fdata;
//	pdf_location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pdf_location";
	$fdata["GoodName"] = "pdf_location";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("pdf","pdf_location"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_location"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf_location";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";
	
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

	

	
	$tdatapdf["pdf_location"] = $fdata;
//	last_update
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "last_update";
	$fdata["GoodName"] = "last_update";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("pdf","last_update"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "last_update"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_update";
	
		
		
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
			$edata["EditParams"].= " maxlength=200";
	
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

	

	
	$tdatapdf["last_update"] = $fdata;
//	pdf_estimated_average
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pdf_estimated_average";
	$fdata["GoodName"] = "pdf_estimated_average";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("pdf","pdf_estimated_average"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_estimated_average"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf_estimated_average";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["masterprint"] = $vdata;
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Time");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");	
								
		
	//	End validation
	
		
				
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);
	
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Time");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);
	
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapdf["pdf_estimated_average"] = $fdata;
//	pdf_estimated_average1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pdf_estimated_average1";
	$fdata["GoodName"] = "pdf_estimated_average1";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("pdf","pdf_estimated_average1"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_estimated_average1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf_estimated_average1";
	
		
		
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

	

	
	$tdatapdf["pdf_estimated_average1"] = $fdata;
//	pdf_estimated_average2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "pdf_estimated_average2";
	$fdata["GoodName"] = "pdf_estimated_average2";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("pdf","pdf_estimated_average2"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_estimated_average2"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf_estimated_average2";
	
		
		
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

	

	
	$tdatapdf["pdf_estimated_average2"] = $fdata;
//	pdf_actual_average
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "pdf_actual_average";
	$fdata["GoodName"] = "pdf_actual_average";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("pdf","pdf_actual_average"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_actual_average"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf_actual_average";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);
	
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapdf["pdf_actual_average"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("pdf","price"); 
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
	
		$fdata["strField"] = "price"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "price";
	
		
		
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
			$edata["EditParams"].= " maxlength=11";
	
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

	

	
	$tdatapdf["price"] = $fdata;

	
$tables_data["pdf"]=&$tdatapdf;
$field_labels["pdf"] = &$fieldLabelspdf;
$fieldToolTips["pdf"] = &$fieldToolTipspdf;
$page_titles["pdf"] = &$pageTitlespdf;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pdf"] = array();
//	job
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="job";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "job";
	$detailsParam["dCaptionTable"] = GetTableCaption("job");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	Designer Worksheet
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Designer Worksheet";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Designer_Worksheet";
	$detailsParam["dCaptionTable"] = GetTableCaption("Designer_Worksheet");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	QC Worksheet
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="QC Worksheet";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "QC_Worksheet";
	$detailsParam["dCaptionTable"] = GetTableCaption("QC_Worksheet");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	All Jobs
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="All Jobs";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "All_Jobs";
	$detailsParam["dCaptionTable"] = GetTableCaption("All_Jobs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	Daily Job Report (Accepted)
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Daily Job Report (Accepted)";
		$detailsParam["dOriginalTable"] = "job";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "Daily_Job_Report__Accepted_";
	$detailsParam["dCaptionTable"] = GetTableCaption("Daily_Job_Report__Accepted_");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	Designer Level 2
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Designer Level 2";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Designer_Level_2";
	$detailsParam["dCaptionTable"] = GetTableCaption("Designer_Level_2");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	Urgent Jobs
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Urgent Jobs";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Urgent_Jobs";
	$detailsParam["dCaptionTable"] = GetTableCaption("Urgent_Jobs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	Deadline Missed
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Deadline Missed";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Deadline_Missed";
	$detailsParam["dCaptionTable"] = GetTableCaption("Deadline_Missed");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	Need to Accept
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Need to Accept";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Need_to_Accept";
	$detailsParam["dCaptionTable"] = GetTableCaption("Need_to_Accept");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	Need Notify
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Need Notify";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Need_Notify";
	$detailsParam["dCaptionTable"] = GetTableCaption("Need_Notify");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	Need Download
	
	

		$dIndex = 10;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Need Download";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Need_Download";
	$detailsParam["dCaptionTable"] = GetTableCaption("Need_Download");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	Need QC
	
	

		$dIndex = 11;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Need QC";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Need_QC";
	$detailsParam["dCaptionTable"] = GetTableCaption("Need_QC");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	Need Upload
	
	

		$dIndex = 12;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Need Upload";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Need_Upload";
	$detailsParam["dCaptionTable"] = GetTableCaption("Need_Upload");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	Pending 14704
	
	

		$dIndex = 13;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Pending 14704";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Pending_14704";
	$detailsParam["dCaptionTable"] = GetTableCaption("Pending_14704");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	Daily Job Report (Notified)
	
	

		$dIndex = 14;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Daily Job Report (Notified)";
		$detailsParam["dOriginalTable"] = "job";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "Daily_Job_Report__Notified_";
	$detailsParam["dCaptionTable"] = GetTableCaption("Daily_Job_Report__Notified_");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	14704 Need QC
	
	

		$dIndex = 15;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="14704 Need QC";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "14704_Need_QC";
	$detailsParam["dCaptionTable"] = GetTableCaption("14704_Need_QC");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	14704 Need Upload
	
	

		$dIndex = 16;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="14704 Need Upload";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "14704_Need_Upload";
	$detailsParam["dCaptionTable"] = GetTableCaption("14704_Need_Upload");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	14704 Need Download
	
	

		$dIndex = 17;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="14704 Need Download";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "14704_Need_Download";
	$detailsParam["dCaptionTable"] = GetTableCaption("14704_Need_Download");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	14704 Need Notify
	
	

		$dIndex = 18;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="14704 Need Notify";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "14704_Need_Notify";
	$detailsParam["dCaptionTable"] = GetTableCaption("14704_Need_Notify");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	14704 Need Accept
	
	

		$dIndex = 19;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="14704 Need Accept";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "14704_Need_Accept";
	$detailsParam["dCaptionTable"] = GetTableCaption("14704_Need_Accept");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	14704 Deadline Missed
	
	

		$dIndex = 20;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="14704 Deadline Missed";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "14704_Deadline_Missed";
	$detailsParam["dCaptionTable"] = GetTableCaption("14704_Deadline_Missed");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	14704 Urgent Jobs
	
	

		$dIndex = 21;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="14704 Urgent Jobs";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "14704_Urgent_Jobs";
	$detailsParam["dCaptionTable"] = GetTableCaption("14704_Urgent_Jobs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	Delected Jobs
	
	

		$dIndex = 22;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Delected Jobs";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Delected_Jobs";
	$detailsParam["dCaptionTable"] = GetTableCaption("Delected_Jobs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	Pending 18442
	
	

		$dIndex = 23;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Pending 18442";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Pending_18442";
	$detailsParam["dCaptionTable"] = GetTableCaption("Pending_18442");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	18442 Deadline Missed
	
	

		$dIndex = 24;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="18442 Deadline Missed";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "18442_Deadline_Missed";
	$detailsParam["dCaptionTable"] = GetTableCaption("18442_Deadline_Missed");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	18442 Urgent Jobs
	
	

		$dIndex = 25;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="18442 Urgent Jobs";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "18442_Urgent_Jobs";
	$detailsParam["dCaptionTable"] = GetTableCaption("18442_Urgent_Jobs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	18442 Need Notify
	
	

		$dIndex = 26;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="18442 Need Notify";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "18442_Need_Notify";
	$detailsParam["dCaptionTable"] = GetTableCaption("18442_Need_Notify");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	18442 Need Upload
	
	

		$dIndex = 27;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="18442 Need Upload";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "18442_Need_Upload";
	$detailsParam["dCaptionTable"] = GetTableCaption("18442_Need_Upload");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	18442 Need QC
	
	

		$dIndex = 28;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="18442 Need QC";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "18442_Need_QC";
	$detailsParam["dCaptionTable"] = GetTableCaption("18442_Need_QC");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	18442 Need Download
	
	

		$dIndex = 29;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="18442 Need Download";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "18442_Need_Download";
	$detailsParam["dCaptionTable"] = GetTableCaption("18442_Need_Download");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	18442 Need Accept
	
	

		$dIndex = 30;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="18442 Need Accept";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "18442_Need_Accept";
	$detailsParam["dCaptionTable"] = GetTableCaption("18442_Need_Accept");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	Monthly Job Report (Accepted)
	
	

		$dIndex = 31;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Monthly Job Report (Accepted)";
		$detailsParam["dOriginalTable"] = "job";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "Monthly_Job_Report__Accepted_";
	$detailsParam["dCaptionTable"] = GetTableCaption("Monthly_Job_Report__Accepted_");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	Monthly Job Report (Notified)
	
	

		$dIndex = 32;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Monthly Job Report (Notified)";
		$detailsParam["dOriginalTable"] = "job";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "Monthly_Job_Report__Notified_";
	$detailsParam["dCaptionTable"] = GetTableCaption("Monthly_Job_Report__Notified_");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	Daily Accepted Riajul
	
	

		$dIndex = 33;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Daily Accepted Riajul";
		$detailsParam["dOriginalTable"] = "job";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "Daily_Accepted_Riajul";
	$detailsParam["dCaptionTable"] = GetTableCaption("Daily_Accepted_Riajul");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
//	QC Worksheet for Correction
	
	

		$dIndex = 34;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="QC Worksheet for Correction";
		$detailsParam["dOriginalTable"] = "rejected_job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "QC_Worksheet_for_Correction";
	$detailsParam["dCaptionTable"] = GetTableCaption("QC_Worksheet_for_Correction");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf"][$dIndex]["detailKeys"][]="pdf_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["pdf"] = array();


	
				$strOriginalDetailsTable="clients";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="clients";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "clients";
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
					$masterTablesData["pdf"][0] = $masterParams;	
				$masterTablesData["pdf"][0]["masterKeys"] = array();
	$masterTablesData["pdf"][0]["masterKeys"][]="client_id";
				$masterTablesData["pdf"][0]["detailKeys"] = array();
	$masterTablesData["pdf"][0]["detailKeys"][]="client_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pdf()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pdf_id,  	pdf_name,  	client_id,  	pdf_location,  	last_update,  	pdf_estimated_average,  	pdf_estimated_average1,  	pdf_estimated_average2,  	pdf_actual_average,  	price";
$proto0["m_strFrom"] = "FROM pdf";
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
	"m_strName" => "pdf_id",
	"m_strTable" => "pdf",
	"m_srcTableName" => "pdf"
));

$proto5["m_sql"] = "pdf_id";
$proto5["m_srcTableName"] = "pdf";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "pdf"
));

$proto7["m_sql"] = "pdf_name";
$proto7["m_srcTableName"] = "pdf";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "client_id",
	"m_strTable" => "pdf",
	"m_srcTableName" => "pdf"
));

$proto9["m_sql"] = "client_id";
$proto9["m_srcTableName"] = "pdf";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_location",
	"m_strTable" => "pdf",
	"m_srcTableName" => "pdf"
));

$proto11["m_sql"] = "pdf_location";
$proto11["m_srcTableName"] = "pdf";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update",
	"m_strTable" => "pdf",
	"m_srcTableName" => "pdf"
));

$proto13["m_sql"] = "last_update";
$proto13["m_srcTableName"] = "pdf";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average",
	"m_strTable" => "pdf",
	"m_srcTableName" => "pdf"
));

$proto15["m_sql"] = "pdf_estimated_average";
$proto15["m_srcTableName"] = "pdf";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average1",
	"m_strTable" => "pdf",
	"m_srcTableName" => "pdf"
));

$proto17["m_sql"] = "pdf_estimated_average1";
$proto17["m_srcTableName"] = "pdf";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average2",
	"m_strTable" => "pdf",
	"m_srcTableName" => "pdf"
));

$proto19["m_sql"] = "pdf_estimated_average2";
$proto19["m_srcTableName"] = "pdf";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_actual_average",
	"m_strTable" => "pdf",
	"m_srcTableName" => "pdf"
));

$proto21["m_sql"] = "pdf_actual_average";
$proto21["m_srcTableName"] = "pdf";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "pdf",
	"m_srcTableName" => "pdf"
));

$proto23["m_sql"] = "price";
$proto23["m_srcTableName"] = "pdf";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "pdf";
$proto26["m_srcTableName"] = "pdf";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "pdf_id";
$proto26["m_columns"][] = "pdf_name";
$proto26["m_columns"][] = "client_id";
$proto26["m_columns"][] = "pdf_location";
$proto26["m_columns"][] = "last_update";
$proto26["m_columns"][] = "pdf_estimated_average";
$proto26["m_columns"][] = "pdf_estimated_average1";
$proto26["m_columns"][] = "pdf_estimated_average2";
$proto26["m_columns"][] = "pdf_actual_average";
$proto26["m_columns"][] = "price";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "pdf";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "pdf";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pdf";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pdf = createSqlQuery_pdf();


	
										
	
$tdatapdf[".sqlquery"] = $queryData_pdf;

include_once(getabspath("include/pdf_events.php"));
$tableEvents["pdf"] = new eventclass_pdf;
$tdatapdf[".hasEvents"] = true;

?>