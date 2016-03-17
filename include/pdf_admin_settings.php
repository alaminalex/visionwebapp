<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapdf_admin = array();	
	$tdatapdf_admin[".truncateText"] = true;
	$tdatapdf_admin[".NumberOfChars"] = 80; 
	$tdatapdf_admin[".ShortName"] = "pdf_admin";
	$tdatapdf_admin[".OwnerID"] = "";
	$tdatapdf_admin[".OriginalTable"] = "pdf";

//	field labels
$fieldLabelspdf_admin = array();
$fieldToolTipspdf_admin = array();
$pageTitlespdf_admin = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspdf_admin["English"] = array();
	$fieldToolTipspdf_admin["English"] = array();
	$pageTitlespdf_admin["English"] = array();
	$fieldLabelspdf_admin["English"]["pdf_id"] = "Pdf Id";
	$fieldToolTipspdf_admin["English"]["pdf_id"] = "";
	$fieldLabelspdf_admin["English"]["pdf_name"] = "Pdf Name";
	$fieldToolTipspdf_admin["English"]["pdf_name"] = "";
	$fieldLabelspdf_admin["English"]["client_id"] = "Client Id";
	$fieldToolTipspdf_admin["English"]["client_id"] = "";
	$fieldLabelspdf_admin["English"]["pdf_location"] = "Pdf Location";
	$fieldToolTipspdf_admin["English"]["pdf_location"] = "";
	$fieldLabelspdf_admin["English"]["last_update"] = "Last Update";
	$fieldToolTipspdf_admin["English"]["last_update"] = "";
	$fieldLabelspdf_admin["English"]["pdf_estimated_average"] = "Pdf Estimated Average";
	$fieldToolTipspdf_admin["English"]["pdf_estimated_average"] = "";
	$fieldLabelspdf_admin["English"]["pdf_actual_average"] = "Pdf Actual Average";
	$fieldToolTipspdf_admin["English"]["pdf_actual_average"] = "";
	$fieldLabelspdf_admin["English"]["pdf_estimated_average1"] = "Pdf Estimated Average1";
	$fieldToolTipspdf_admin["English"]["pdf_estimated_average1"] = "";
	$fieldLabelspdf_admin["English"]["pdf_estimated_average2"] = "Pdf Estimated Average2";
	$fieldToolTipspdf_admin["English"]["pdf_estimated_average2"] = "";
	$fieldLabelspdf_admin["English"]["current_price"] = "Current Price";
	$fieldToolTipspdf_admin["English"]["current_price"] = "";
	$fieldLabelspdf_admin["English"]["price_base_on_eta"] = "Price Base On Eta";
	$fieldToolTipspdf_admin["English"]["price_base_on_eta"] = "";
	$fieldLabelspdf_admin["English"]["price_should_be"] = "Price Should Be";
	$fieldToolTipspdf_admin["English"]["price_should_be"] = "";
	if (count($fieldToolTipspdf_admin["English"]))
		$tdatapdf_admin[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspdf_admin[""] = array();
	$fieldToolTipspdf_admin[""] = array();
	$pageTitlespdf_admin[""] = array();
	$fieldLabelspdf_admin[""]["pdf_estimated_average1"] = "Pdf Estimated Average1";
	$fieldToolTipspdf_admin[""]["pdf_estimated_average1"] = "";
	$fieldLabelspdf_admin[""]["pdf_estimated_average2"] = "Pdf Estimated Average2";
	$fieldToolTipspdf_admin[""]["pdf_estimated_average2"] = "";
	$fieldLabelspdf_admin[""]["current_price"] = "Current Price";
	$fieldToolTipspdf_admin[""]["current_price"] = "";
	$fieldLabelspdf_admin[""]["price_base_on_eta"] = "Price Base On Eta";
	$fieldToolTipspdf_admin[""]["price_base_on_eta"] = "";
	$fieldLabelspdf_admin[""]["price_should_be"] = "Price Should Be";
	$fieldToolTipspdf_admin[""]["price_should_be"] = "";
	if (count($fieldToolTipspdf_admin[""]))
		$tdatapdf_admin[".isUseToolTips"] = true;
}
	
	
	$tdatapdf_admin[".NCSearch"] = true;



$tdatapdf_admin[".shortTableName"] = "pdf_admin";
$tdatapdf_admin[".nSecOptions"] = 0;
$tdatapdf_admin[".recsPerRowList"] = 1;
$tdatapdf_admin[".recsPerRowPrint"] = 1;
$tdatapdf_admin[".mainTableOwnerID"] = "";
$tdatapdf_admin[".moveNext"] = 1;
$tdatapdf_admin[".entityType"] = 1;

$tdatapdf_admin[".strOriginalTableName"] = "pdf";




$tdatapdf_admin[".showAddInPopup"] = false;

$tdatapdf_admin[".showEditInPopup"] = false;

$tdatapdf_admin[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapdf_admin[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapdf_admin[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatapdf_admin[".listAjax"] = true;
else 
	$tdatapdf_admin[".listAjax"] = false;

	$tdatapdf_admin[".audit"] = false;

	$tdatapdf_admin[".locking"] = false;

$tdatapdf_admin[".edit"] = true;
$tdatapdf_admin[".afterEditAction"] = 1;
$tdatapdf_admin[".closePopupAfterEdit"] = 1;
$tdatapdf_admin[".afterEditActionDetTable"] = "";

$tdatapdf_admin[".add"] = true;
$tdatapdf_admin[".afterAddAction"] = 1;
$tdatapdf_admin[".closePopupAfterAdd"] = 1;
$tdatapdf_admin[".afterAddActionDetTable"] = "";

$tdatapdf_admin[".list"] = true;

$tdatapdf_admin[".inlineEdit"] = true;
$tdatapdf_admin[".view"] = true;

$tdatapdf_admin[".import"] = true;

$tdatapdf_admin[".exportTo"] = true;

$tdatapdf_admin[".printFriendly"] = true;

$tdatapdf_admin[".delete"] = true;

$tdatapdf_admin[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapdf_admin[".searchSaving"] = false;
//

$tdatapdf_admin[".showSearchPanel"] = true;
		$tdatapdf_admin[".flexibleSearch"] = true;		

if (isMobile())
	$tdatapdf_admin[".isUseAjaxSuggest"] = false;
else 
	$tdatapdf_admin[".isUseAjaxSuggest"] = true;

$tdatapdf_admin[".rowHighlite"] = true;


																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												
$tdatapdf_admin[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapdf_admin[".isUseTimeForSearch"] = false;




$tdatapdf_admin[".detailsLinksOnList"] = "1";

$tdatapdf_admin[".allSearchFields"] = array();
$tdatapdf_admin[".filterFields"] = array();
$tdatapdf_admin[".requiredSearchFields"] = array();

$tdatapdf_admin[".allSearchFields"][] = "pdf_estimated_average1";
	$tdatapdf_admin[".allSearchFields"][] = "price_base_on_eta";
	$tdatapdf_admin[".allSearchFields"][] = "current_price";
	$tdatapdf_admin[".allSearchFields"][] = "pdf_estimated_average2";
	$tdatapdf_admin[".allSearchFields"][] = "price_should_be";
	$tdatapdf_admin[".allSearchFields"][] = "pdf_id";
	$tdatapdf_admin[".allSearchFields"][] = "client_id";
	$tdatapdf_admin[".allSearchFields"][] = "pdf_name";
	$tdatapdf_admin[".allSearchFields"][] = "pdf_actual_average";
	$tdatapdf_admin[".allSearchFields"][] = "pdf_estimated_average";
	$tdatapdf_admin[".allSearchFields"][] = "pdf_location";
	$tdatapdf_admin[".allSearchFields"][] = "last_update";
	

$tdatapdf_admin[".googleLikeFields"] = array();
$tdatapdf_admin[".googleLikeFields"][] = "pdf_id";
$tdatapdf_admin[".googleLikeFields"][] = "pdf_name";
$tdatapdf_admin[".googleLikeFields"][] = "client_id";
$tdatapdf_admin[".googleLikeFields"][] = "pdf_location";
$tdatapdf_admin[".googleLikeFields"][] = "last_update";
$tdatapdf_admin[".googleLikeFields"][] = "pdf_estimated_average";
$tdatapdf_admin[".googleLikeFields"][] = "pdf_estimated_average1";
$tdatapdf_admin[".googleLikeFields"][] = "pdf_estimated_average2";
$tdatapdf_admin[".googleLikeFields"][] = "pdf_actual_average";
$tdatapdf_admin[".googleLikeFields"][] = "current_price";
$tdatapdf_admin[".googleLikeFields"][] = "price_base_on_eta";
$tdatapdf_admin[".googleLikeFields"][] = "price_should_be";


$tdatapdf_admin[".advSearchFields"] = array();
$tdatapdf_admin[".advSearchFields"][] = "pdf_estimated_average1";
$tdatapdf_admin[".advSearchFields"][] = "price_base_on_eta";
$tdatapdf_admin[".advSearchFields"][] = "current_price";
$tdatapdf_admin[".advSearchFields"][] = "pdf_estimated_average2";
$tdatapdf_admin[".advSearchFields"][] = "price_should_be";
$tdatapdf_admin[".advSearchFields"][] = "pdf_id";
$tdatapdf_admin[".advSearchFields"][] = "client_id";
$tdatapdf_admin[".advSearchFields"][] = "pdf_name";
$tdatapdf_admin[".advSearchFields"][] = "pdf_actual_average";
$tdatapdf_admin[".advSearchFields"][] = "pdf_estimated_average";
$tdatapdf_admin[".advSearchFields"][] = "pdf_location";
$tdatapdf_admin[".advSearchFields"][] = "last_update";

$tdatapdf_admin[".tableType"] = "list";

$tdatapdf_admin[".printerPageOrientation"] = 0;
$tdatapdf_admin[".nPrinterPageScale"] = 100;

$tdatapdf_admin[".nPrinterSplitRecords"] = 40;

$tdatapdf_admin[".nPrinterPDFSplitRecords"] = 40;



$tdatapdf_admin[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatapdf_admin[".pageSize"] = 20;

$tdatapdf_admin[".warnLeavingPages"] = true;

$tdatapdf_admin[".hideEmptyFieldsOnView"] = true;


$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapdf_admin[".strOrderBy"] = $tstrOrderBy;

$tdatapdf_admin[".orderindexes"] = array();

$tdatapdf_admin[".sqlHead"] = "SELECT pdf_id,  	pdf_name,  	client_id,  	pdf_location,  	last_update,  	pdf_estimated_average,  	pdf_estimated_average1,  	pdf_estimated_average2,  	pdf_actual_average,  	price as current_price,  	price*MINUTE(pdf_estimated_average) as price_base_on_eta,  	price*MINUTE(pdf_actual_average) as price_should_be";
$tdatapdf_admin[".sqlFrom"] = "FROM pdf";
$tdatapdf_admin[".sqlWhereExpr"] = "";
$tdatapdf_admin[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapdf_admin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapdf_admin[".arrGroupsPerPage"] = $arrGPP;

$tdatapdf_admin[".highlightSearchResults"] = true;

$tableKeyspdf_admin = array();
$tableKeyspdf_admin[] = "pdf_id";
$tdatapdf_admin[".Keys"] = $tableKeyspdf_admin;

$tdatapdf_admin[".listFields"] = array();
$tdatapdf_admin[".listFields"][] = "pdf_estimated_average1";
$tdatapdf_admin[".listFields"][] = "price_base_on_eta";
$tdatapdf_admin[".listFields"][] = "current_price";
$tdatapdf_admin[".listFields"][] = "pdf_estimated_average2";
$tdatapdf_admin[".listFields"][] = "price_should_be";
$tdatapdf_admin[".listFields"][] = "pdf_id";
$tdatapdf_admin[".listFields"][] = "client_id";
$tdatapdf_admin[".listFields"][] = "pdf_name";
$tdatapdf_admin[".listFields"][] = "pdf_actual_average";
$tdatapdf_admin[".listFields"][] = "pdf_estimated_average";
$tdatapdf_admin[".listFields"][] = "pdf_location";
$tdatapdf_admin[".listFields"][] = "last_update";

$tdatapdf_admin[".hideMobileList"] = array();


$tdatapdf_admin[".viewFields"] = array();
$tdatapdf_admin[".viewFields"][] = "pdf_estimated_average1";
$tdatapdf_admin[".viewFields"][] = "price_base_on_eta";
$tdatapdf_admin[".viewFields"][] = "current_price";
$tdatapdf_admin[".viewFields"][] = "pdf_estimated_average2";
$tdatapdf_admin[".viewFields"][] = "price_should_be";
$tdatapdf_admin[".viewFields"][] = "pdf_id";
$tdatapdf_admin[".viewFields"][] = "client_id";
$tdatapdf_admin[".viewFields"][] = "pdf_name";
$tdatapdf_admin[".viewFields"][] = "pdf_actual_average";
$tdatapdf_admin[".viewFields"][] = "pdf_estimated_average";
$tdatapdf_admin[".viewFields"][] = "pdf_location";
$tdatapdf_admin[".viewFields"][] = "last_update";

$tdatapdf_admin[".addFields"] = array();
$tdatapdf_admin[".addFields"][] = "pdf_estimated_average1";
$tdatapdf_admin[".addFields"][] = "pdf_estimated_average2";
$tdatapdf_admin[".addFields"][] = "client_id";
$tdatapdf_admin[".addFields"][] = "pdf_id";
$tdatapdf_admin[".addFields"][] = "pdf_name";
$tdatapdf_admin[".addFields"][] = "pdf_estimated_average";
$tdatapdf_admin[".addFields"][] = "pdf_location";

$tdatapdf_admin[".masterListFields"] = array();
$tdatapdf_admin[".masterListFields"][] = "pdf_estimated_average1";
$tdatapdf_admin[".masterListFields"][] = "price_base_on_eta";
$tdatapdf_admin[".masterListFields"][] = "current_price";
$tdatapdf_admin[".masterListFields"][] = "pdf_estimated_average2";
$tdatapdf_admin[".masterListFields"][] = "price_should_be";
$tdatapdf_admin[".masterListFields"][] = "pdf_id";
$tdatapdf_admin[".masterListFields"][] = "client_id";
$tdatapdf_admin[".masterListFields"][] = "pdf_name";
$tdatapdf_admin[".masterListFields"][] = "pdf_actual_average";
$tdatapdf_admin[".masterListFields"][] = "pdf_estimated_average";
$tdatapdf_admin[".masterListFields"][] = "pdf_location";
$tdatapdf_admin[".masterListFields"][] = "last_update";

$tdatapdf_admin[".inlineAddFields"] = array();
$tdatapdf_admin[".inlineAddFields"][] = "pdf_estimated_average1";
$tdatapdf_admin[".inlineAddFields"][] = "pdf_estimated_average2";

$tdatapdf_admin[".editFields"] = array();
$tdatapdf_admin[".editFields"][] = "pdf_estimated_average2";
$tdatapdf_admin[".editFields"][] = "pdf_estimated_average1";
$tdatapdf_admin[".editFields"][] = "pdf_id";
$tdatapdf_admin[".editFields"][] = "client_id";
$tdatapdf_admin[".editFields"][] = "pdf_name";
$tdatapdf_admin[".editFields"][] = "pdf_estimated_average";
$tdatapdf_admin[".editFields"][] = "pdf_location";
$tdatapdf_admin[".editFields"][] = "last_update";

$tdatapdf_admin[".inlineEditFields"] = array();
$tdatapdf_admin[".inlineEditFields"][] = "pdf_estimated_average2";
$tdatapdf_admin[".inlineEditFields"][] = "pdf_estimated_average1";
$tdatapdf_admin[".inlineEditFields"][] = "pdf_name";
$tdatapdf_admin[".inlineEditFields"][] = "pdf_actual_average";
$tdatapdf_admin[".inlineEditFields"][] = "pdf_estimated_average";

$tdatapdf_admin[".exportFields"] = array();
$tdatapdf_admin[".exportFields"][] = "pdf_estimated_average1";
$tdatapdf_admin[".exportFields"][] = "price_base_on_eta";
$tdatapdf_admin[".exportFields"][] = "current_price";
$tdatapdf_admin[".exportFields"][] = "pdf_estimated_average2";
$tdatapdf_admin[".exportFields"][] = "price_should_be";
$tdatapdf_admin[".exportFields"][] = "pdf_id";
$tdatapdf_admin[".exportFields"][] = "client_id";
$tdatapdf_admin[".exportFields"][] = "pdf_name";
$tdatapdf_admin[".exportFields"][] = "pdf_actual_average";
$tdatapdf_admin[".exportFields"][] = "pdf_estimated_average";
$tdatapdf_admin[".exportFields"][] = "pdf_location";
$tdatapdf_admin[".exportFields"][] = "last_update";

$tdatapdf_admin[".importFields"] = array();
$tdatapdf_admin[".importFields"][] = "pdf_id";
$tdatapdf_admin[".importFields"][] = "pdf_name";
$tdatapdf_admin[".importFields"][] = "client_id";
$tdatapdf_admin[".importFields"][] = "pdf_location";
$tdatapdf_admin[".importFields"][] = "last_update";
$tdatapdf_admin[".importFields"][] = "pdf_estimated_average";
$tdatapdf_admin[".importFields"][] = "pdf_estimated_average1";
$tdatapdf_admin[".importFields"][] = "pdf_estimated_average2";
$tdatapdf_admin[".importFields"][] = "pdf_actual_average";
$tdatapdf_admin[".importFields"][] = "current_price";
$tdatapdf_admin[".importFields"][] = "price_base_on_eta";
$tdatapdf_admin[".importFields"][] = "price_should_be";

$tdatapdf_admin[".printFields"] = array();
$tdatapdf_admin[".printFields"][] = "pdf_estimated_average1";
$tdatapdf_admin[".printFields"][] = "price_base_on_eta";
$tdatapdf_admin[".printFields"][] = "current_price";
$tdatapdf_admin[".printFields"][] = "pdf_estimated_average2";
$tdatapdf_admin[".printFields"][] = "price_should_be";
$tdatapdf_admin[".printFields"][] = "pdf_id";
$tdatapdf_admin[".printFields"][] = "client_id";
$tdatapdf_admin[".printFields"][] = "pdf_name";
$tdatapdf_admin[".printFields"][] = "pdf_actual_average";
$tdatapdf_admin[".printFields"][] = "pdf_estimated_average";
$tdatapdf_admin[".printFields"][] = "pdf_location";
$tdatapdf_admin[".printFields"][] = "last_update";

//	pdf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pdf_id";
	$fdata["GoodName"] = "pdf_id";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("pdf_admin","pdf_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
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

	

	
	$tdatapdf_admin["pdf_id"] = $fdata;
//	pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pdf_name";
	$fdata["GoodName"] = "pdf_name";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("pdf_admin","pdf_name"); 
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

	

	
	$tdatapdf_admin["pdf_name"] = $fdata;
//	client_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "client_id";
	$fdata["GoodName"] = "client_id";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("pdf_admin","client_id"); 
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

	

	
	$tdatapdf_admin["client_id"] = $fdata;
//	pdf_location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pdf_location";
	$fdata["GoodName"] = "pdf_location";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("pdf_admin","pdf_location"); 
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

	

	
	$tdatapdf_admin["pdf_location"] = $fdata;
//	last_update
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "last_update";
	$fdata["GoodName"] = "last_update";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("pdf_admin","last_update"); 
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

	

	
	$tdatapdf_admin["last_update"] = $fdata;
//	pdf_estimated_average
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pdf_estimated_average";
	$fdata["GoodName"] = "pdf_estimated_average";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("pdf_admin","pdf_estimated_average"); 
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

	

	
	$tdatapdf_admin["pdf_estimated_average"] = $fdata;
//	pdf_estimated_average1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pdf_estimated_average1";
	$fdata["GoodName"] = "pdf_estimated_average1";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("pdf_admin","pdf_estimated_average1"); 
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
	
		$fdata["strField"] = "pdf_estimated_average1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf_estimated_average1";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapdf_admin["pdf_estimated_average1"] = $fdata;
//	pdf_estimated_average2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "pdf_estimated_average2";
	$fdata["GoodName"] = "pdf_estimated_average2";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("pdf_admin","pdf_estimated_average2"); 
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
	
		$fdata["strField"] = "pdf_estimated_average2"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf_estimated_average2";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapdf_admin["pdf_estimated_average2"] = $fdata;
//	pdf_actual_average
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "pdf_actual_average";
	$fdata["GoodName"] = "pdf_actual_average";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("pdf_admin","pdf_actual_average"); 
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

	

	
	$tdatapdf_admin["pdf_actual_average"] = $fdata;
//	current_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "current_price";
	$fdata["GoodName"] = "current_price";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("pdf_admin","current_price"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatapdf_admin["current_price"] = $fdata;
//	price_base_on_eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "price_base_on_eta";
	$fdata["GoodName"] = "price_base_on_eta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("pdf_admin","price_base_on_eta"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "price_base_on_eta"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "price*MINUTE(pdf_estimated_average)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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

	

	
	$tdatapdf_admin["price_base_on_eta"] = $fdata;
//	price_should_be
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "price_should_be";
	$fdata["GoodName"] = "price_should_be";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("pdf_admin","price_should_be"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "price_should_be"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "price*MINUTE(pdf_actual_average)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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

	

	
	$tdatapdf_admin["price_should_be"] = $fdata;

	
$tables_data["pdf_admin"]=&$tdatapdf_admin;
$field_labels["pdf_admin"] = &$fieldLabelspdf_admin;
$fieldToolTips["pdf_admin"] = &$fieldToolTipspdf_admin;
$page_titles["pdf_admin"] = &$pageTitlespdf_admin;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pdf_admin"] = array();
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
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["pdf_admin"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pdf_admin"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf_admin"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["pdf_admin"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf_admin"][$dIndex]["detailKeys"][]="pdf_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["pdf_admin"] = array();


	
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
					$masterTablesData["pdf_admin"][0] = $masterParams;	
				$masterTablesData["pdf_admin"][0]["masterKeys"] = array();
	$masterTablesData["pdf_admin"][0]["masterKeys"][]="client_id";
				$masterTablesData["pdf_admin"][0]["detailKeys"] = array();
	$masterTablesData["pdf_admin"][0]["detailKeys"][]="client_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pdf_admin()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pdf_id,  	pdf_name,  	client_id,  	pdf_location,  	last_update,  	pdf_estimated_average,  	pdf_estimated_average1,  	pdf_estimated_average2,  	pdf_actual_average,  	price as current_price,  	price*MINUTE(pdf_estimated_average) as price_base_on_eta,  	price*MINUTE(pdf_actual_average) as price_should_be";
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
	"m_srcTableName" => "pdf_admin"
));

$proto5["m_sql"] = "pdf_id";
$proto5["m_srcTableName"] = "pdf_admin";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "pdf_admin"
));

$proto7["m_sql"] = "pdf_name";
$proto7["m_srcTableName"] = "pdf_admin";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "client_id",
	"m_strTable" => "pdf",
	"m_srcTableName" => "pdf_admin"
));

$proto9["m_sql"] = "client_id";
$proto9["m_srcTableName"] = "pdf_admin";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_location",
	"m_strTable" => "pdf",
	"m_srcTableName" => "pdf_admin"
));

$proto11["m_sql"] = "pdf_location";
$proto11["m_srcTableName"] = "pdf_admin";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update",
	"m_strTable" => "pdf",
	"m_srcTableName" => "pdf_admin"
));

$proto13["m_sql"] = "last_update";
$proto13["m_srcTableName"] = "pdf_admin";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average",
	"m_strTable" => "pdf",
	"m_srcTableName" => "pdf_admin"
));

$proto15["m_sql"] = "pdf_estimated_average";
$proto15["m_srcTableName"] = "pdf_admin";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average1",
	"m_strTable" => "pdf",
	"m_srcTableName" => "pdf_admin"
));

$proto17["m_sql"] = "pdf_estimated_average1";
$proto17["m_srcTableName"] = "pdf_admin";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average2",
	"m_strTable" => "pdf",
	"m_srcTableName" => "pdf_admin"
));

$proto19["m_sql"] = "pdf_estimated_average2";
$proto19["m_srcTableName"] = "pdf_admin";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_actual_average",
	"m_strTable" => "pdf",
	"m_srcTableName" => "pdf_admin"
));

$proto21["m_sql"] = "pdf_actual_average";
$proto21["m_srcTableName"] = "pdf_admin";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "pdf",
	"m_srcTableName" => "pdf_admin"
));

$proto23["m_sql"] = "price";
$proto23["m_srcTableName"] = "pdf_admin";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "current_price";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "price*MINUTE(pdf_estimated_average)"
));

$proto25["m_sql"] = "price*MINUTE(pdf_estimated_average)";
$proto25["m_srcTableName"] = "pdf_admin";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "price_base_on_eta";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "price*MINUTE(pdf_actual_average)"
));

$proto27["m_sql"] = "price*MINUTE(pdf_actual_average)";
$proto27["m_srcTableName"] = "pdf_admin";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "price_should_be";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "pdf";
$proto30["m_srcTableName"] = "pdf_admin";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "pdf_id";
$proto30["m_columns"][] = "pdf_name";
$proto30["m_columns"][] = "client_id";
$proto30["m_columns"][] = "pdf_location";
$proto30["m_columns"][] = "last_update";
$proto30["m_columns"][] = "pdf_estimated_average";
$proto30["m_columns"][] = "pdf_estimated_average1";
$proto30["m_columns"][] = "pdf_estimated_average2";
$proto30["m_columns"][] = "pdf_actual_average";
$proto30["m_columns"][] = "price";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "pdf";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "pdf_admin";
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
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pdf_admin";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pdf_admin = createSqlQuery_pdf_admin();


	
												
	
$tdatapdf_admin[".sqlquery"] = $queryData_pdf_admin;

$tableEvents["pdf_admin"] = new eventsBase;
$tdatapdf_admin[".hasEvents"] = false;

?>