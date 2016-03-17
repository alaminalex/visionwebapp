<?php
require_once(getabspath("classes/cipherer.php"));




$tdataClient_Instruction = array();	
	$tdataClient_Instruction[".truncateText"] = true;
	$tdataClient_Instruction[".NumberOfChars"] = 80; 
	$tdataClient_Instruction[".ShortName"] = "Client_Instruction";
	$tdataClient_Instruction[".OwnerID"] = "";
	$tdataClient_Instruction[".OriginalTable"] = "pdf";

//	field labels
$fieldLabelsClient_Instruction = array();
$fieldToolTipsClient_Instruction = array();
$pageTitlesClient_Instruction = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsClient_Instruction["English"] = array();
	$fieldToolTipsClient_Instruction["English"] = array();
	$pageTitlesClient_Instruction["English"] = array();
	$fieldLabelsClient_Instruction["English"]["pdf_id"] = "Pdf Id";
	$fieldToolTipsClient_Instruction["English"]["pdf_id"] = "";
	$fieldLabelsClient_Instruction["English"]["pdf_name"] = "Pdf Name";
	$fieldToolTipsClient_Instruction["English"]["pdf_name"] = "";
	$fieldLabelsClient_Instruction["English"]["client_id"] = "Client Id";
	$fieldToolTipsClient_Instruction["English"]["client_id"] = "";
	$fieldLabelsClient_Instruction["English"]["pdf_location"] = "Pdf Location";
	$fieldToolTipsClient_Instruction["English"]["pdf_location"] = "";
	$fieldLabelsClient_Instruction["English"]["last_update"] = "Last Update";
	$fieldToolTipsClient_Instruction["English"]["last_update"] = "";
	$fieldLabelsClient_Instruction["English"]["pdf_estimated_average"] = "Pdf Estimated Average";
	$fieldToolTipsClient_Instruction["English"]["pdf_estimated_average"] = "";
	$fieldLabelsClient_Instruction["English"]["pdf_actual_average"] = "Pdf Actual Average";
	$fieldToolTipsClient_Instruction["English"]["pdf_actual_average"] = "";
	$fieldLabelsClient_Instruction["English"]["pdf_estimated_average1"] = "Pdf Estimated Average1";
	$fieldToolTipsClient_Instruction["English"]["pdf_estimated_average1"] = "";
	$fieldLabelsClient_Instruction["English"]["pdf_estimated_average2"] = "Pdf Estimated Average2";
	$fieldToolTipsClient_Instruction["English"]["pdf_estimated_average2"] = "";
	$fieldLabelsClient_Instruction["English"]["price"] = "Price";
	$fieldToolTipsClient_Instruction["English"]["price"] = "";
	if (count($fieldToolTipsClient_Instruction["English"]))
		$tdataClient_Instruction[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsClient_Instruction[""] = array();
	$fieldToolTipsClient_Instruction[""] = array();
	$pageTitlesClient_Instruction[""] = array();
	if (count($fieldToolTipsClient_Instruction[""]))
		$tdataClient_Instruction[".isUseToolTips"] = true;
}
	
	
	$tdataClient_Instruction[".NCSearch"] = true;



$tdataClient_Instruction[".shortTableName"] = "Client_Instruction";
$tdataClient_Instruction[".nSecOptions"] = 0;
$tdataClient_Instruction[".recsPerRowList"] = 1;
$tdataClient_Instruction[".recsPerRowPrint"] = 1;
$tdataClient_Instruction[".mainTableOwnerID"] = "";
$tdataClient_Instruction[".moveNext"] = 1;
$tdataClient_Instruction[".entityType"] = 1;

$tdataClient_Instruction[".strOriginalTableName"] = "pdf";




$tdataClient_Instruction[".showAddInPopup"] = false;

$tdataClient_Instruction[".showEditInPopup"] = false;

$tdataClient_Instruction[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataClient_Instruction[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataClient_Instruction[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataClient_Instruction[".listAjax"] = true;
else 
	$tdataClient_Instruction[".listAjax"] = false;

	$tdataClient_Instruction[".audit"] = false;

	$tdataClient_Instruction[".locking"] = false;



$tdataClient_Instruction[".list"] = true;

$tdataClient_Instruction[".view"] = true;


$tdataClient_Instruction[".exportTo"] = true;

$tdataClient_Instruction[".printFriendly"] = true;


$tdataClient_Instruction[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataClient_Instruction[".searchSaving"] = false;
//

$tdataClient_Instruction[".showSearchPanel"] = true;
		$tdataClient_Instruction[".flexibleSearch"] = true;		

if (isMobile())
	$tdataClient_Instruction[".isUseAjaxSuggest"] = false;
else 
	$tdataClient_Instruction[".isUseAjaxSuggest"] = true;

$tdataClient_Instruction[".rowHighlite"] = true;


																																																																																																																																															
$tdataClient_Instruction[".addPageEvents"] = false;

// use timepicker for search panel
$tdataClient_Instruction[".isUseTimeForSearch"] = false;




$tdataClient_Instruction[".detailsLinksOnList"] = "1";

$tdataClient_Instruction[".allSearchFields"] = array();
$tdataClient_Instruction[".filterFields"] = array();
$tdataClient_Instruction[".requiredSearchFields"] = array();

$tdataClient_Instruction[".allSearchFields"][] = "pdf_estimated_average2";
	$tdataClient_Instruction[".allSearchFields"][] = "pdf_estimated_average1";
	$tdataClient_Instruction[".allSearchFields"][] = "price";
	$tdataClient_Instruction[".allSearchFields"][] = "pdf_id";
	$tdataClient_Instruction[".allSearchFields"][] = "client_id";
	$tdataClient_Instruction[".allSearchFields"][] = "pdf_name";
	$tdataClient_Instruction[".allSearchFields"][] = "pdf_location";
	$tdataClient_Instruction[".allSearchFields"][] = "last_update";
	$tdataClient_Instruction[".allSearchFields"][] = "pdf_estimated_average";
	$tdataClient_Instruction[".allSearchFields"][] = "pdf_actual_average";
	

$tdataClient_Instruction[".googleLikeFields"] = array();
$tdataClient_Instruction[".googleLikeFields"][] = "pdf_id";
$tdataClient_Instruction[".googleLikeFields"][] = "pdf_name";
$tdataClient_Instruction[".googleLikeFields"][] = "client_id";
$tdataClient_Instruction[".googleLikeFields"][] = "pdf_location";
$tdataClient_Instruction[".googleLikeFields"][] = "last_update";
$tdataClient_Instruction[".googleLikeFields"][] = "pdf_estimated_average";
$tdataClient_Instruction[".googleLikeFields"][] = "pdf_estimated_average1";
$tdataClient_Instruction[".googleLikeFields"][] = "pdf_estimated_average2";
$tdataClient_Instruction[".googleLikeFields"][] = "pdf_actual_average";
$tdataClient_Instruction[".googleLikeFields"][] = "price";


$tdataClient_Instruction[".advSearchFields"] = array();
$tdataClient_Instruction[".advSearchFields"][] = "pdf_estimated_average2";
$tdataClient_Instruction[".advSearchFields"][] = "pdf_estimated_average1";
$tdataClient_Instruction[".advSearchFields"][] = "price";
$tdataClient_Instruction[".advSearchFields"][] = "pdf_id";
$tdataClient_Instruction[".advSearchFields"][] = "client_id";
$tdataClient_Instruction[".advSearchFields"][] = "pdf_name";
$tdataClient_Instruction[".advSearchFields"][] = "pdf_location";
$tdataClient_Instruction[".advSearchFields"][] = "last_update";
$tdataClient_Instruction[".advSearchFields"][] = "pdf_estimated_average";
$tdataClient_Instruction[".advSearchFields"][] = "pdf_actual_average";

$tdataClient_Instruction[".tableType"] = "list";

$tdataClient_Instruction[".printerPageOrientation"] = 0;
$tdataClient_Instruction[".nPrinterPageScale"] = 100;

$tdataClient_Instruction[".nPrinterSplitRecords"] = 40;

$tdataClient_Instruction[".nPrinterPDFSplitRecords"] = 40;



$tdataClient_Instruction[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataClient_Instruction[".pageSize"] = 20;

$tdataClient_Instruction[".warnLeavingPages"] = true;

$tdataClient_Instruction[".hideEmptyFieldsOnView"] = true;


$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataClient_Instruction[".strOrderBy"] = $tstrOrderBy;

$tdataClient_Instruction[".orderindexes"] = array();

$tdataClient_Instruction[".sqlHead"] = "SELECT pdf_id,  	pdf_name,  	client_id,  	pdf_location,  	last_update,  	pdf_estimated_average,  	pdf_estimated_average1,  	pdf_estimated_average2,  	pdf_actual_average,  	price";
$tdataClient_Instruction[".sqlFrom"] = "FROM pdf";
$tdataClient_Instruction[".sqlWhereExpr"] = "";
$tdataClient_Instruction[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataClient_Instruction[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataClient_Instruction[".arrGroupsPerPage"] = $arrGPP;

$tdataClient_Instruction[".highlightSearchResults"] = true;

$tableKeysClient_Instruction = array();
$tableKeysClient_Instruction[] = "pdf_id";
$tdataClient_Instruction[".Keys"] = $tableKeysClient_Instruction;

$tdataClient_Instruction[".listFields"] = array();
$tdataClient_Instruction[".listFields"][] = "pdf_estimated_average2";
$tdataClient_Instruction[".listFields"][] = "pdf_estimated_average1";
$tdataClient_Instruction[".listFields"][] = "price";
$tdataClient_Instruction[".listFields"][] = "pdf_id";
$tdataClient_Instruction[".listFields"][] = "client_id";
$tdataClient_Instruction[".listFields"][] = "pdf_name";
$tdataClient_Instruction[".listFields"][] = "pdf_location";
$tdataClient_Instruction[".listFields"][] = "last_update";
$tdataClient_Instruction[".listFields"][] = "pdf_estimated_average";
$tdataClient_Instruction[".listFields"][] = "pdf_actual_average";

$tdataClient_Instruction[".hideMobileList"] = array();


$tdataClient_Instruction[".viewFields"] = array();
$tdataClient_Instruction[".viewFields"][] = "pdf_estimated_average2";
$tdataClient_Instruction[".viewFields"][] = "pdf_estimated_average1";
$tdataClient_Instruction[".viewFields"][] = "price";
$tdataClient_Instruction[".viewFields"][] = "pdf_id";
$tdataClient_Instruction[".viewFields"][] = "client_id";
$tdataClient_Instruction[".viewFields"][] = "pdf_name";
$tdataClient_Instruction[".viewFields"][] = "pdf_location";
$tdataClient_Instruction[".viewFields"][] = "last_update";
$tdataClient_Instruction[".viewFields"][] = "pdf_estimated_average";
$tdataClient_Instruction[".viewFields"][] = "pdf_actual_average";

$tdataClient_Instruction[".addFields"] = array();
$tdataClient_Instruction[".addFields"][] = "pdf_estimated_average1";
$tdataClient_Instruction[".addFields"][] = "pdf_estimated_average2";
$tdataClient_Instruction[".addFields"][] = "price";
$tdataClient_Instruction[".addFields"][] = "client_id";
$tdataClient_Instruction[".addFields"][] = "pdf_name";
$tdataClient_Instruction[".addFields"][] = "pdf_location";
$tdataClient_Instruction[".addFields"][] = "last_update";
$tdataClient_Instruction[".addFields"][] = "pdf_estimated_average";
$tdataClient_Instruction[".addFields"][] = "pdf_actual_average";

$tdataClient_Instruction[".masterListFields"] = array();
$tdataClient_Instruction[".masterListFields"][] = "pdf_estimated_average2";
$tdataClient_Instruction[".masterListFields"][] = "pdf_estimated_average1";
$tdataClient_Instruction[".masterListFields"][] = "price";
$tdataClient_Instruction[".masterListFields"][] = "pdf_id";
$tdataClient_Instruction[".masterListFields"][] = "client_id";
$tdataClient_Instruction[".masterListFields"][] = "pdf_name";
$tdataClient_Instruction[".masterListFields"][] = "pdf_location";
$tdataClient_Instruction[".masterListFields"][] = "last_update";
$tdataClient_Instruction[".masterListFields"][] = "pdf_estimated_average";
$tdataClient_Instruction[".masterListFields"][] = "pdf_actual_average";

$tdataClient_Instruction[".inlineAddFields"] = array();
$tdataClient_Instruction[".inlineAddFields"][] = "pdf_estimated_average1";
$tdataClient_Instruction[".inlineAddFields"][] = "pdf_estimated_average2";
$tdataClient_Instruction[".inlineAddFields"][] = "price";

$tdataClient_Instruction[".editFields"] = array();
$tdataClient_Instruction[".editFields"][] = "pdf_estimated_average2";
$tdataClient_Instruction[".editFields"][] = "pdf_estimated_average1";
$tdataClient_Instruction[".editFields"][] = "price";
$tdataClient_Instruction[".editFields"][] = "pdf_id";
$tdataClient_Instruction[".editFields"][] = "client_id";
$tdataClient_Instruction[".editFields"][] = "pdf_name";
$tdataClient_Instruction[".editFields"][] = "pdf_location";
$tdataClient_Instruction[".editFields"][] = "last_update";
$tdataClient_Instruction[".editFields"][] = "pdf_estimated_average";
$tdataClient_Instruction[".editFields"][] = "pdf_actual_average";

$tdataClient_Instruction[".inlineEditFields"] = array();
$tdataClient_Instruction[".inlineEditFields"][] = "price";
$tdataClient_Instruction[".inlineEditFields"][] = "pdf_estimated_average1";
$tdataClient_Instruction[".inlineEditFields"][] = "pdf_estimated_average2";
$tdataClient_Instruction[".inlineEditFields"][] = "pdf_name";
$tdataClient_Instruction[".inlineEditFields"][] = "pdf_estimated_average";
$tdataClient_Instruction[".inlineEditFields"][] = "pdf_actual_average";

$tdataClient_Instruction[".exportFields"] = array();
$tdataClient_Instruction[".exportFields"][] = "pdf_estimated_average2";
$tdataClient_Instruction[".exportFields"][] = "pdf_estimated_average1";
$tdataClient_Instruction[".exportFields"][] = "price";
$tdataClient_Instruction[".exportFields"][] = "pdf_id";
$tdataClient_Instruction[".exportFields"][] = "client_id";
$tdataClient_Instruction[".exportFields"][] = "pdf_name";
$tdataClient_Instruction[".exportFields"][] = "pdf_location";
$tdataClient_Instruction[".exportFields"][] = "last_update";
$tdataClient_Instruction[".exportFields"][] = "pdf_estimated_average";
$tdataClient_Instruction[".exportFields"][] = "pdf_actual_average";

$tdataClient_Instruction[".importFields"] = array();
$tdataClient_Instruction[".importFields"][] = "pdf_id";
$tdataClient_Instruction[".importFields"][] = "pdf_name";
$tdataClient_Instruction[".importFields"][] = "client_id";
$tdataClient_Instruction[".importFields"][] = "pdf_location";
$tdataClient_Instruction[".importFields"][] = "last_update";
$tdataClient_Instruction[".importFields"][] = "pdf_estimated_average";
$tdataClient_Instruction[".importFields"][] = "pdf_estimated_average1";
$tdataClient_Instruction[".importFields"][] = "pdf_estimated_average2";
$tdataClient_Instruction[".importFields"][] = "pdf_actual_average";
$tdataClient_Instruction[".importFields"][] = "price";

$tdataClient_Instruction[".printFields"] = array();
$tdataClient_Instruction[".printFields"][] = "pdf_estimated_average2";
$tdataClient_Instruction[".printFields"][] = "pdf_estimated_average1";
$tdataClient_Instruction[".printFields"][] = "price";
$tdataClient_Instruction[".printFields"][] = "pdf_id";
$tdataClient_Instruction[".printFields"][] = "client_id";
$tdataClient_Instruction[".printFields"][] = "pdf_name";
$tdataClient_Instruction[".printFields"][] = "pdf_location";
$tdataClient_Instruction[".printFields"][] = "last_update";
$tdataClient_Instruction[".printFields"][] = "pdf_estimated_average";
$tdataClient_Instruction[".printFields"][] = "pdf_actual_average";

//	pdf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pdf_id";
	$fdata["GoodName"] = "pdf_id";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Client_Instruction","pdf_id"); 
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

	

	
	$tdataClient_Instruction["pdf_id"] = $fdata;
//	pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pdf_name";
	$fdata["GoodName"] = "pdf_name";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Client_Instruction","pdf_name"); 
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

	

	
	$tdataClient_Instruction["pdf_name"] = $fdata;
//	client_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "client_id";
	$fdata["GoodName"] = "client_id";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Client_Instruction","client_id"); 
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

	

	
	$tdataClient_Instruction["client_id"] = $fdata;
//	pdf_location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pdf_location";
	$fdata["GoodName"] = "pdf_location";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Client_Instruction","pdf_location"); 
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

	

	
	$tdataClient_Instruction["pdf_location"] = $fdata;
//	last_update
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "last_update";
	$fdata["GoodName"] = "last_update";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Client_Instruction","last_update"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
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

	

	
	$tdataClient_Instruction["last_update"] = $fdata;
//	pdf_estimated_average
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pdf_estimated_average";
	$fdata["GoodName"] = "pdf_estimated_average";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Client_Instruction","pdf_estimated_average"); 
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

	

	
	$tdataClient_Instruction["pdf_estimated_average"] = $fdata;
//	pdf_estimated_average1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pdf_estimated_average1";
	$fdata["GoodName"] = "pdf_estimated_average1";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Client_Instruction","pdf_estimated_average1"); 
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

	

	
	$tdataClient_Instruction["pdf_estimated_average1"] = $fdata;
//	pdf_estimated_average2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "pdf_estimated_average2";
	$fdata["GoodName"] = "pdf_estimated_average2";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Client_Instruction","pdf_estimated_average2"); 
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

	

	
	$tdataClient_Instruction["pdf_estimated_average2"] = $fdata;
//	pdf_actual_average
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "pdf_actual_average";
	$fdata["GoodName"] = "pdf_actual_average";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Client_Instruction","pdf_actual_average"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
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

	

	
	$tdataClient_Instruction["pdf_actual_average"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Client_Instruction","price"); 
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

	

	
	$tdataClient_Instruction["price"] = $fdata;

	
$tables_data["Client Instruction"]=&$tdataClient_Instruction;
$field_labels["Client_Instruction"] = &$fieldLabelsClient_Instruction;
$fieldToolTips["Client Instruction"] = &$fieldToolTipsClient_Instruction;
$page_titles["Client_Instruction"] = &$pageTitlesClient_Instruction;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Client Instruction"] = array();
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
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["Client Instruction"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Client Instruction"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Client Instruction"][$dIndex]["masterKeys"][]="pdf_id";

				$detailsTablesData["Client Instruction"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Client Instruction"][$dIndex]["detailKeys"][]="pdf_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["Client Instruction"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Client_Instruction()
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
	"m_srcTableName" => "Client Instruction"
));

$proto5["m_sql"] = "pdf_id";
$proto5["m_srcTableName"] = "Client Instruction";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Client Instruction"
));

$proto7["m_sql"] = "pdf_name";
$proto7["m_srcTableName"] = "Client Instruction";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "client_id",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Client Instruction"
));

$proto9["m_sql"] = "client_id";
$proto9["m_srcTableName"] = "Client Instruction";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_location",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Client Instruction"
));

$proto11["m_sql"] = "pdf_location";
$proto11["m_srcTableName"] = "Client Instruction";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Client Instruction"
));

$proto13["m_sql"] = "last_update";
$proto13["m_srcTableName"] = "Client Instruction";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Client Instruction"
));

$proto15["m_sql"] = "pdf_estimated_average";
$proto15["m_srcTableName"] = "Client Instruction";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average1",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Client Instruction"
));

$proto17["m_sql"] = "pdf_estimated_average1";
$proto17["m_srcTableName"] = "Client Instruction";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average2",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Client Instruction"
));

$proto19["m_sql"] = "pdf_estimated_average2";
$proto19["m_srcTableName"] = "Client Instruction";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_actual_average",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Client Instruction"
));

$proto21["m_sql"] = "pdf_actual_average";
$proto21["m_srcTableName"] = "Client Instruction";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Client Instruction"
));

$proto23["m_sql"] = "price";
$proto23["m_srcTableName"] = "Client Instruction";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "pdf";
$proto26["m_srcTableName"] = "Client Instruction";
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
$proto25["m_srcTableName"] = "Client Instruction";
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
$proto0["m_srcTableName"]="Client Instruction";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Client_Instruction = createSqlQuery_Client_Instruction();


	
										
	
$tdataClient_Instruction[".sqlquery"] = $queryData_Client_Instruction;

$tableEvents["Client Instruction"] = new eventsBase;
$tdataClient_Instruction[".hasEvents"] = false;

?>