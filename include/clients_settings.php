<?php
require_once(getabspath("classes/cipherer.php"));




$tdataclients = array();	
	$tdataclients[".truncateText"] = true;
	$tdataclients[".NumberOfChars"] = 80; 
	$tdataclients[".ShortName"] = "clients";
	$tdataclients[".OwnerID"] = "";
	$tdataclients[".OriginalTable"] = "clients";

//	field labels
$fieldLabelsclients = array();
$fieldToolTipsclients = array();
$pageTitlesclients = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsclients["English"] = array();
	$fieldToolTipsclients["English"] = array();
	$pageTitlesclients["English"] = array();
	$fieldLabelsclients["English"]["client_id"] = "Client Id";
	$fieldToolTipsclients["English"]["client_id"] = "";
	$fieldLabelsclients["English"]["client_name"] = "Client Name";
	$fieldToolTipsclients["English"]["client_name"] = "";
	$fieldLabelsclients["English"]["priority"] = "Priority";
	$fieldToolTipsclients["English"]["priority"] = "";
	$fieldLabelsclients["English"]["client_group"] = "Client Group";
	$fieldToolTipsclients["English"]["client_group"] = "";
	$fieldLabelsclients["English"]["client_username"] = "Client Username";
	$fieldToolTipsclients["English"]["client_username"] = "";
	$fieldLabelsclients["English"]["client_password"] = "Client Password";
	$fieldToolTipsclients["English"]["client_password"] = "";
	$fieldLabelsclients["English"]["contact_fname"] = "Contact Fname";
	$fieldToolTipsclients["English"]["contact_fname"] = "";
	$fieldLabelsclients["English"]["contact_lname"] = "Contact Lname";
	$fieldToolTipsclients["English"]["contact_lname"] = "";
	$fieldLabelsclients["English"]["email"] = "Email";
	$fieldToolTipsclients["English"]["email"] = "";
	$fieldLabelsclients["English"]["phone"] = "Phone";
	$fieldToolTipsclients["English"]["phone"] = "";
	$fieldLabelsclients["English"]["mobile"] = "Mobile";
	$fieldToolTipsclients["English"]["mobile"] = "";
	$fieldLabelsclients["English"]["address"] = "Address";
	$fieldToolTipsclients["English"]["address"] = "";
	$fieldLabelsclients["English"]["country"] = "Country";
	$fieldToolTipsclients["English"]["country"] = "";
	$fieldLabelsclients["English"]["preferred_currency"] = "Preferred Currency";
	$fieldToolTipsclients["English"]["preferred_currency"] = "";
	if (count($fieldToolTipsclients["English"]))
		$tdataclients[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsclients[""] = array();
	$fieldToolTipsclients[""] = array();
	$pageTitlesclients[""] = array();
	if (count($fieldToolTipsclients[""]))
		$tdataclients[".isUseToolTips"] = true;
}
	
	
	$tdataclients[".NCSearch"] = true;



$tdataclients[".shortTableName"] = "clients";
$tdataclients[".nSecOptions"] = 0;
$tdataclients[".recsPerRowList"] = 1;
$tdataclients[".recsPerRowPrint"] = 1;
$tdataclients[".mainTableOwnerID"] = "";
$tdataclients[".moveNext"] = 1;
$tdataclients[".entityType"] = 0;

$tdataclients[".strOriginalTableName"] = "clients";




$tdataclients[".showAddInPopup"] = false;

$tdataclients[".showEditInPopup"] = false;

$tdataclients[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataclients[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataclients[".fieldsForRegister"] = array();

$tdataclients[".listAjax"] = false;

	$tdataclients[".audit"] = false;

	$tdataclients[".locking"] = false;

$tdataclients[".edit"] = true;
$tdataclients[".afterEditAction"] = 1;
$tdataclients[".closePopupAfterEdit"] = 1;
$tdataclients[".afterEditActionDetTable"] = "";

$tdataclients[".add"] = true;
$tdataclients[".afterAddAction"] = 0;
$tdataclients[".closePopupAfterAdd"] = 1;
$tdataclients[".afterAddActionDetTable"] = "";

$tdataclients[".list"] = true;

$tdataclients[".inlineEdit"] = true;
$tdataclients[".inlineAdd"] = true;
$tdataclients[".view"] = true;

$tdataclients[".import"] = true;

$tdataclients[".exportTo"] = true;

$tdataclients[".printFriendly"] = true;

$tdataclients[".delete"] = true;

$tdataclients[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataclients[".searchSaving"] = false;
//

$tdataclients[".showSearchPanel"] = true;
		$tdataclients[".flexibleSearch"] = true;		

if (isMobile())
	$tdataclients[".isUseAjaxSuggest"] = false;
else 
	$tdataclients[".isUseAjaxSuggest"] = true;

$tdataclients[".rowHighlite"] = true;


																																																																																																																																															
$tdataclients[".addPageEvents"] = false;

// use timepicker for search panel
$tdataclients[".isUseTimeForSearch"] = false;




$tdataclients[".detailsLinksOnList"] = "1";

$tdataclients[".allSearchFields"] = array();
$tdataclients[".filterFields"] = array();
$tdataclients[".requiredSearchFields"] = array();

$tdataclients[".allSearchFields"][] = "client_id";
	$tdataclients[".allSearchFields"][] = "client_name";
	$tdataclients[".allSearchFields"][] = "priority";
	$tdataclients[".allSearchFields"][] = "client_group";
	$tdataclients[".allSearchFields"][] = "client_username";
	$tdataclients[".allSearchFields"][] = "client_password";
	$tdataclients[".allSearchFields"][] = "contact_fname";
	$tdataclients[".allSearchFields"][] = "contact_lname";
	$tdataclients[".allSearchFields"][] = "email";
	$tdataclients[".allSearchFields"][] = "phone";
	$tdataclients[".allSearchFields"][] = "mobile";
	$tdataclients[".allSearchFields"][] = "address";
	$tdataclients[".allSearchFields"][] = "country";
	$tdataclients[".allSearchFields"][] = "preferred_currency";
	

$tdataclients[".googleLikeFields"] = array();
$tdataclients[".googleLikeFields"][] = "client_id";
$tdataclients[".googleLikeFields"][] = "client_name";
$tdataclients[".googleLikeFields"][] = "priority";
$tdataclients[".googleLikeFields"][] = "client_group";
$tdataclients[".googleLikeFields"][] = "client_username";
$tdataclients[".googleLikeFields"][] = "client_password";
$tdataclients[".googleLikeFields"][] = "contact_fname";
$tdataclients[".googleLikeFields"][] = "contact_lname";
$tdataclients[".googleLikeFields"][] = "email";
$tdataclients[".googleLikeFields"][] = "phone";
$tdataclients[".googleLikeFields"][] = "mobile";
$tdataclients[".googleLikeFields"][] = "address";
$tdataclients[".googleLikeFields"][] = "country";
$tdataclients[".googleLikeFields"][] = "preferred_currency";


$tdataclients[".advSearchFields"] = array();
$tdataclients[".advSearchFields"][] = "client_id";
$tdataclients[".advSearchFields"][] = "client_name";
$tdataclients[".advSearchFields"][] = "priority";
$tdataclients[".advSearchFields"][] = "client_group";
$tdataclients[".advSearchFields"][] = "client_username";
$tdataclients[".advSearchFields"][] = "client_password";
$tdataclients[".advSearchFields"][] = "contact_fname";
$tdataclients[".advSearchFields"][] = "contact_lname";
$tdataclients[".advSearchFields"][] = "email";
$tdataclients[".advSearchFields"][] = "phone";
$tdataclients[".advSearchFields"][] = "mobile";
$tdataclients[".advSearchFields"][] = "address";
$tdataclients[".advSearchFields"][] = "country";
$tdataclients[".advSearchFields"][] = "preferred_currency";

$tdataclients[".tableType"] = "list";

$tdataclients[".printerPageOrientation"] = 0;
$tdataclients[".nPrinterPageScale"] = 100;

$tdataclients[".nPrinterSplitRecords"] = 40;

$tdataclients[".nPrinterPDFSplitRecords"] = 40;



$tdataclients[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataclients[".pageSize"] = 20;

$tdataclients[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataclients[".strOrderBy"] = $tstrOrderBy;

$tdataclients[".orderindexes"] = array();

$tdataclients[".sqlHead"] = "SELECT client_id,  	client_name,  	priority,  	client_group,  	client_username,  	client_password,  	contact_fname,  	contact_lname,  	email,  	phone,  	mobile,  	address,  	country,  	preferred_currency";
$tdataclients[".sqlFrom"] = "FROM clients";
$tdataclients[".sqlWhereExpr"] = "";
$tdataclients[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataclients[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataclients[".arrGroupsPerPage"] = $arrGPP;

$tdataclients[".highlightSearchResults"] = true;

$tableKeysclients = array();
$tableKeysclients[] = "client_id";
$tdataclients[".Keys"] = $tableKeysclients;

$tdataclients[".listFields"] = array();
$tdataclients[".listFields"][] = "client_id";
$tdataclients[".listFields"][] = "client_name";
$tdataclients[".listFields"][] = "priority";
$tdataclients[".listFields"][] = "client_group";
$tdataclients[".listFields"][] = "client_username";
$tdataclients[".listFields"][] = "client_password";
$tdataclients[".listFields"][] = "contact_fname";
$tdataclients[".listFields"][] = "contact_lname";
$tdataclients[".listFields"][] = "email";
$tdataclients[".listFields"][] = "phone";
$tdataclients[".listFields"][] = "mobile";
$tdataclients[".listFields"][] = "address";
$tdataclients[".listFields"][] = "country";
$tdataclients[".listFields"][] = "preferred_currency";

$tdataclients[".hideMobileList"] = array();


$tdataclients[".viewFields"] = array();
$tdataclients[".viewFields"][] = "client_id";
$tdataclients[".viewFields"][] = "client_name";
$tdataclients[".viewFields"][] = "priority";
$tdataclients[".viewFields"][] = "client_group";
$tdataclients[".viewFields"][] = "client_username";
$tdataclients[".viewFields"][] = "client_password";
$tdataclients[".viewFields"][] = "contact_fname";
$tdataclients[".viewFields"][] = "contact_lname";
$tdataclients[".viewFields"][] = "email";
$tdataclients[".viewFields"][] = "phone";
$tdataclients[".viewFields"][] = "mobile";
$tdataclients[".viewFields"][] = "address";
$tdataclients[".viewFields"][] = "country";
$tdataclients[".viewFields"][] = "preferred_currency";

$tdataclients[".addFields"] = array();
$tdataclients[".addFields"][] = "client_name";
$tdataclients[".addFields"][] = "priority";
$tdataclients[".addFields"][] = "client_group";
$tdataclients[".addFields"][] = "client_username";
$tdataclients[".addFields"][] = "client_password";
$tdataclients[".addFields"][] = "contact_fname";
$tdataclients[".addFields"][] = "contact_lname";
$tdataclients[".addFields"][] = "email";
$tdataclients[".addFields"][] = "phone";
$tdataclients[".addFields"][] = "mobile";
$tdataclients[".addFields"][] = "address";
$tdataclients[".addFields"][] = "country";
$tdataclients[".addFields"][] = "preferred_currency";

$tdataclients[".masterListFields"] = array();
$tdataclients[".masterListFields"][] = "client_id";
$tdataclients[".masterListFields"][] = "client_name";
$tdataclients[".masterListFields"][] = "priority";
$tdataclients[".masterListFields"][] = "client_group";
$tdataclients[".masterListFields"][] = "client_username";
$tdataclients[".masterListFields"][] = "client_password";
$tdataclients[".masterListFields"][] = "contact_fname";
$tdataclients[".masterListFields"][] = "contact_lname";
$tdataclients[".masterListFields"][] = "email";
$tdataclients[".masterListFields"][] = "phone";
$tdataclients[".masterListFields"][] = "mobile";
$tdataclients[".masterListFields"][] = "address";
$tdataclients[".masterListFields"][] = "country";
$tdataclients[".masterListFields"][] = "preferred_currency";

$tdataclients[".inlineAddFields"] = array();
$tdataclients[".inlineAddFields"][] = "client_name";
$tdataclients[".inlineAddFields"][] = "priority";
$tdataclients[".inlineAddFields"][] = "client_group";
$tdataclients[".inlineAddFields"][] = "client_username";
$tdataclients[".inlineAddFields"][] = "client_password";
$tdataclients[".inlineAddFields"][] = "contact_fname";
$tdataclients[".inlineAddFields"][] = "contact_lname";
$tdataclients[".inlineAddFields"][] = "email";
$tdataclients[".inlineAddFields"][] = "phone";
$tdataclients[".inlineAddFields"][] = "mobile";
$tdataclients[".inlineAddFields"][] = "address";
$tdataclients[".inlineAddFields"][] = "country";
$tdataclients[".inlineAddFields"][] = "preferred_currency";

$tdataclients[".editFields"] = array();
$tdataclients[".editFields"][] = "client_name";
$tdataclients[".editFields"][] = "priority";
$tdataclients[".editFields"][] = "client_group";
$tdataclients[".editFields"][] = "client_username";
$tdataclients[".editFields"][] = "client_password";
$tdataclients[".editFields"][] = "contact_fname";
$tdataclients[".editFields"][] = "contact_lname";
$tdataclients[".editFields"][] = "email";
$tdataclients[".editFields"][] = "phone";
$tdataclients[".editFields"][] = "mobile";
$tdataclients[".editFields"][] = "address";
$tdataclients[".editFields"][] = "country";
$tdataclients[".editFields"][] = "preferred_currency";

$tdataclients[".inlineEditFields"] = array();
$tdataclients[".inlineEditFields"][] = "client_name";
$tdataclients[".inlineEditFields"][] = "priority";
$tdataclients[".inlineEditFields"][] = "client_group";
$tdataclients[".inlineEditFields"][] = "client_username";
$tdataclients[".inlineEditFields"][] = "client_password";
$tdataclients[".inlineEditFields"][] = "contact_fname";
$tdataclients[".inlineEditFields"][] = "contact_lname";
$tdataclients[".inlineEditFields"][] = "email";
$tdataclients[".inlineEditFields"][] = "phone";
$tdataclients[".inlineEditFields"][] = "mobile";
$tdataclients[".inlineEditFields"][] = "address";
$tdataclients[".inlineEditFields"][] = "country";
$tdataclients[".inlineEditFields"][] = "preferred_currency";

$tdataclients[".exportFields"] = array();
$tdataclients[".exportFields"][] = "client_id";
$tdataclients[".exportFields"][] = "client_name";
$tdataclients[".exportFields"][] = "priority";
$tdataclients[".exportFields"][] = "client_group";
$tdataclients[".exportFields"][] = "client_username";
$tdataclients[".exportFields"][] = "client_password";
$tdataclients[".exportFields"][] = "contact_fname";
$tdataclients[".exportFields"][] = "contact_lname";
$tdataclients[".exportFields"][] = "email";
$tdataclients[".exportFields"][] = "phone";
$tdataclients[".exportFields"][] = "mobile";
$tdataclients[".exportFields"][] = "address";
$tdataclients[".exportFields"][] = "country";
$tdataclients[".exportFields"][] = "preferred_currency";

$tdataclients[".importFields"] = array();
$tdataclients[".importFields"][] = "client_id";
$tdataclients[".importFields"][] = "client_name";
$tdataclients[".importFields"][] = "priority";
$tdataclients[".importFields"][] = "client_group";
$tdataclients[".importFields"][] = "client_username";
$tdataclients[".importFields"][] = "client_password";
$tdataclients[".importFields"][] = "contact_fname";
$tdataclients[".importFields"][] = "contact_lname";
$tdataclients[".importFields"][] = "email";
$tdataclients[".importFields"][] = "phone";
$tdataclients[".importFields"][] = "mobile";
$tdataclients[".importFields"][] = "address";
$tdataclients[".importFields"][] = "country";
$tdataclients[".importFields"][] = "preferred_currency";

$tdataclients[".printFields"] = array();
$tdataclients[".printFields"][] = "client_id";
$tdataclients[".printFields"][] = "client_name";
$tdataclients[".printFields"][] = "priority";
$tdataclients[".printFields"][] = "client_group";
$tdataclients[".printFields"][] = "client_username";
$tdataclients[".printFields"][] = "client_password";
$tdataclients[".printFields"][] = "contact_fname";
$tdataclients[".printFields"][] = "contact_lname";
$tdataclients[".printFields"][] = "email";
$tdataclients[".printFields"][] = "phone";
$tdataclients[".printFields"][] = "mobile";
$tdataclients[".printFields"][] = "address";
$tdataclients[".printFields"][] = "country";
$tdataclients[".printFields"][] = "preferred_currency";

//	client_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "client_id";
	$fdata["GoodName"] = "client_id";
	$fdata["ownerTable"] = "clients";
	$fdata["Label"] = GetFieldLabel("clients","client_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdataclients["client_id"] = $fdata;
//	client_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "client_name";
	$fdata["GoodName"] = "client_name";
	$fdata["ownerTable"] = "clients";
	$fdata["Label"] = GetFieldLabel("clients","client_name"); 
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
	
		$fdata["strField"] = "client_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "client_name";
	
		
		
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

	

	
	$tdataclients["client_name"] = $fdata;
//	priority
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "priority";
	$fdata["GoodName"] = "priority";
	$fdata["ownerTable"] = "clients";
	$fdata["Label"] = GetFieldLabel("clients","priority"); 
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
	
		$fdata["strField"] = "priority"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "priority";
	
		
		
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

	

	
	$tdataclients["priority"] = $fdata;
//	client_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "client_group";
	$fdata["GoodName"] = "client_group";
	$fdata["ownerTable"] = "clients";
	$fdata["Label"] = GetFieldLabel("clients","client_group"); 
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
	
		$fdata["strField"] = "client_group"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "client_group";
	
		
		
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

	

	
	$tdataclients["client_group"] = $fdata;
//	client_username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "client_username";
	$fdata["GoodName"] = "client_username";
	$fdata["ownerTable"] = "clients";
	$fdata["Label"] = GetFieldLabel("clients","client_username"); 
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
	
		$fdata["strField"] = "client_username"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "client_username";
	
		
		
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

	

	
	$tdataclients["client_username"] = $fdata;
//	client_password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "client_password";
	$fdata["GoodName"] = "client_password";
	$fdata["ownerTable"] = "clients";
	$fdata["Label"] = GetFieldLabel("clients","client_password"); 
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
	
		$fdata["strField"] = "client_password"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "client_password";
	
		
		
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

	

	
	$tdataclients["client_password"] = $fdata;
//	contact_fname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "contact_fname";
	$fdata["GoodName"] = "contact_fname";
	$fdata["ownerTable"] = "clients";
	$fdata["Label"] = GetFieldLabel("clients","contact_fname"); 
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
	
		$fdata["strField"] = "contact_fname"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contact_fname";
	
		
		
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

	

	
	$tdataclients["contact_fname"] = $fdata;
//	contact_lname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "contact_lname";
	$fdata["GoodName"] = "contact_lname";
	$fdata["ownerTable"] = "clients";
	$fdata["Label"] = GetFieldLabel("clients","contact_lname"); 
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
	
		$fdata["strField"] = "contact_lname"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contact_lname";
	
		
		
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

	

	
	$tdataclients["contact_lname"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "clients";
	$fdata["Label"] = GetFieldLabel("clients","email"); 
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
	
		$fdata["strField"] = "email"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "email";
	
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

	

	
	$tdataclients["email"] = $fdata;
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "clients";
	$fdata["Label"] = GetFieldLabel("clients","phone"); 
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
	
		$fdata["strField"] = "phone"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone";
	
		
		
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

	

	
	$tdataclients["phone"] = $fdata;
//	mobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "mobile";
	$fdata["GoodName"] = "mobile";
	$fdata["ownerTable"] = "clients";
	$fdata["Label"] = GetFieldLabel("clients","mobile"); 
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
	
		$fdata["strField"] = "mobile"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mobile";
	
		
		
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

	

	
	$tdataclients["mobile"] = $fdata;
//	address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "address";
	$fdata["GoodName"] = "address";
	$fdata["ownerTable"] = "clients";
	$fdata["Label"] = GetFieldLabel("clients","address"); 
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
	
		$fdata["strField"] = "address"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address";
	
		
		
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

	

	
	$tdataclients["address"] = $fdata;
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "clients";
	$fdata["Label"] = GetFieldLabel("clients","country"); 
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
	
		$fdata["strField"] = "country"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country";
	
		
		
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

	

	
	$tdataclients["country"] = $fdata;
//	preferred_currency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "preferred_currency";
	$fdata["GoodName"] = "preferred_currency";
	$fdata["ownerTable"] = "clients";
	$fdata["Label"] = GetFieldLabel("clients","preferred_currency"); 
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
	
		$fdata["strField"] = "preferred_currency"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preferred_currency";
	
		
		
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

	

	
	$tdataclients["preferred_currency"] = $fdata;

	
$tables_data["clients"]=&$tdataclients;
$field_labels["clients"] = &$fieldLabelsclients;
$fieldToolTips["clients"] = &$fieldToolTipsclients;
$page_titles["clients"] = &$pageTitlesclients;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["clients"] = array();
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
			
	$detailsTablesData["clients"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["clients"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["clients"][$dIndex]["masterKeys"][]="client_id";

				$detailsTablesData["clients"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["clients"][$dIndex]["detailKeys"][]="client_id";
//	pdf
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="pdf";
		$detailsParam["dOriginalTable"] = "pdf";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "pdf";
	$detailsParam["dCaptionTable"] = GetTableCaption("pdf");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["clients"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["clients"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["clients"][$dIndex]["masterKeys"][]="client_id";

				$detailsTablesData["clients"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["clients"][$dIndex]["detailKeys"][]="client_id";
//	Daily Accepted Riajul
	
	

		$dIndex = 2;
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
			
	$detailsTablesData["clients"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["clients"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["clients"][$dIndex]["masterKeys"][]="client_id";

				$detailsTablesData["clients"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["clients"][$dIndex]["detailKeys"][]="client_id";
//	Download Reject Job
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Download Reject Job";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Download_Reject_Job";
	$detailsParam["dCaptionTable"] = GetTableCaption("Download_Reject_Job");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["clients"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["clients"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["clients"][$dIndex]["masterKeys"][]="client_id";

				$detailsTablesData["clients"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["clients"][$dIndex]["detailKeys"][]="client_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["clients"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_clients()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "client_id,  	client_name,  	priority,  	client_group,  	client_username,  	client_password,  	contact_fname,  	contact_lname,  	email,  	phone,  	mobile,  	address,  	country,  	preferred_currency";
$proto0["m_strFrom"] = "FROM clients";
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
	"m_strName" => "client_id",
	"m_strTable" => "clients",
	"m_srcTableName" => "clients"
));

$proto5["m_sql"] = "client_id";
$proto5["m_srcTableName"] = "clients";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "client_name",
	"m_strTable" => "clients",
	"m_srcTableName" => "clients"
));

$proto7["m_sql"] = "client_name";
$proto7["m_srcTableName"] = "clients";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "priority",
	"m_strTable" => "clients",
	"m_srcTableName" => "clients"
));

$proto9["m_sql"] = "priority";
$proto9["m_srcTableName"] = "clients";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "client_group",
	"m_strTable" => "clients",
	"m_srcTableName" => "clients"
));

$proto11["m_sql"] = "client_group";
$proto11["m_srcTableName"] = "clients";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "client_username",
	"m_strTable" => "clients",
	"m_srcTableName" => "clients"
));

$proto13["m_sql"] = "client_username";
$proto13["m_srcTableName"] = "clients";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "client_password",
	"m_strTable" => "clients",
	"m_srcTableName" => "clients"
));

$proto15["m_sql"] = "client_password";
$proto15["m_srcTableName"] = "clients";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_fname",
	"m_strTable" => "clients",
	"m_srcTableName" => "clients"
));

$proto17["m_sql"] = "contact_fname";
$proto17["m_srcTableName"] = "clients";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_lname",
	"m_strTable" => "clients",
	"m_srcTableName" => "clients"
));

$proto19["m_sql"] = "contact_lname";
$proto19["m_srcTableName"] = "clients";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "clients",
	"m_srcTableName" => "clients"
));

$proto21["m_sql"] = "email";
$proto21["m_srcTableName"] = "clients";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "clients",
	"m_srcTableName" => "clients"
));

$proto23["m_sql"] = "phone";
$proto23["m_srcTableName"] = "clients";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "mobile",
	"m_strTable" => "clients",
	"m_srcTableName" => "clients"
));

$proto25["m_sql"] = "mobile";
$proto25["m_srcTableName"] = "clients";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "address",
	"m_strTable" => "clients",
	"m_srcTableName" => "clients"
));

$proto27["m_sql"] = "address";
$proto27["m_srcTableName"] = "clients";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "clients",
	"m_srcTableName" => "clients"
));

$proto29["m_sql"] = "country";
$proto29["m_srcTableName"] = "clients";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "preferred_currency",
	"m_strTable" => "clients",
	"m_srcTableName" => "clients"
));

$proto31["m_sql"] = "preferred_currency";
$proto31["m_srcTableName"] = "clients";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto33=array();
$proto33["m_link"] = "SQLL_MAIN";
			$proto34=array();
$proto34["m_strName"] = "clients";
$proto34["m_srcTableName"] = "clients";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "client_id";
$proto34["m_columns"][] = "client_name";
$proto34["m_columns"][] = "priority";
$proto34["m_columns"][] = "client_group";
$proto34["m_columns"][] = "client_username";
$proto34["m_columns"][] = "client_password";
$proto34["m_columns"][] = "contact_fname";
$proto34["m_columns"][] = "contact_lname";
$proto34["m_columns"][] = "email";
$proto34["m_columns"][] = "phone";
$proto34["m_columns"][] = "mobile";
$proto34["m_columns"][] = "address";
$proto34["m_columns"][] = "country";
$proto34["m_columns"][] = "preferred_currency";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "clients";
$proto33["m_alias"] = "";
$proto33["m_srcTableName"] = "clients";
$proto35=array();
$proto35["m_sql"] = "";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="clients";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_clients = createSqlQuery_clients();


	
														
	
$tdataclients[".sqlquery"] = $queryData_clients;

$tableEvents["clients"] = new eventsBase;
$tdataclients[".hasEvents"] = false;

?>