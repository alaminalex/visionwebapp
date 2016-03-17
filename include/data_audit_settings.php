<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadata_audit = array();	
	$tdatadata_audit[".truncateText"] = true;
	$tdatadata_audit[".NumberOfChars"] = 80; 
	$tdatadata_audit[".ShortName"] = "data_audit";
	$tdatadata_audit[".OwnerID"] = "";
	$tdatadata_audit[".OriginalTable"] = "data_audit";

//	field labels
$fieldLabelsdata_audit = array();
$fieldToolTipsdata_audit = array();
$pageTitlesdata_audit = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdata_audit["English"] = array();
	$fieldToolTipsdata_audit["English"] = array();
	$pageTitlesdata_audit["English"] = array();
	$fieldLabelsdata_audit["English"]["id"] = "Id";
	$fieldToolTipsdata_audit["English"]["id"] = "";
	$fieldLabelsdata_audit["English"]["datetime"] = "Datetime";
	$fieldToolTipsdata_audit["English"]["datetime"] = "";
	$fieldLabelsdata_audit["English"]["ip"] = "Ip";
	$fieldToolTipsdata_audit["English"]["ip"] = "";
	$fieldLabelsdata_audit["English"]["user"] = "User";
	$fieldToolTipsdata_audit["English"]["user"] = "";
	$fieldLabelsdata_audit["English"]["table"] = "Table";
	$fieldToolTipsdata_audit["English"]["table"] = "";
	$fieldLabelsdata_audit["English"]["action"] = "Action";
	$fieldToolTipsdata_audit["English"]["action"] = "";
	$fieldLabelsdata_audit["English"]["description"] = "Description";
	$fieldToolTipsdata_audit["English"]["description"] = "";
	if (count($fieldToolTipsdata_audit["English"]))
		$tdatadata_audit[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdata_audit[""] = array();
	$fieldToolTipsdata_audit[""] = array();
	$pageTitlesdata_audit[""] = array();
	if (count($fieldToolTipsdata_audit[""]))
		$tdatadata_audit[".isUseToolTips"] = true;
}
	
	
	$tdatadata_audit[".NCSearch"] = true;



$tdatadata_audit[".shortTableName"] = "data_audit";
$tdatadata_audit[".nSecOptions"] = 0;
$tdatadata_audit[".recsPerRowList"] = 1;
$tdatadata_audit[".recsPerRowPrint"] = 1;
$tdatadata_audit[".mainTableOwnerID"] = "";
$tdatadata_audit[".moveNext"] = 1;
$tdatadata_audit[".entityType"] = 0;

$tdatadata_audit[".strOriginalTableName"] = "data_audit";




$tdatadata_audit[".showAddInPopup"] = false;

$tdatadata_audit[".showEditInPopup"] = false;

$tdatadata_audit[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadata_audit[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadata_audit[".fieldsForRegister"] = array();

$tdatadata_audit[".listAjax"] = false;

	$tdatadata_audit[".audit"] = false;

	$tdatadata_audit[".locking"] = false;

$tdatadata_audit[".edit"] = true;
$tdatadata_audit[".afterEditAction"] = 1;
$tdatadata_audit[".closePopupAfterEdit"] = 1;
$tdatadata_audit[".afterEditActionDetTable"] = "";

$tdatadata_audit[".add"] = true;
$tdatadata_audit[".afterAddAction"] = 0;
$tdatadata_audit[".closePopupAfterAdd"] = 1;
$tdatadata_audit[".afterAddActionDetTable"] = "";

$tdatadata_audit[".list"] = true;

$tdatadata_audit[".inlineEdit"] = true;
$tdatadata_audit[".inlineAdd"] = true;
$tdatadata_audit[".view"] = true;

$tdatadata_audit[".import"] = true;

$tdatadata_audit[".exportTo"] = true;

$tdatadata_audit[".printFriendly"] = true;

$tdatadata_audit[".delete"] = true;

$tdatadata_audit[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatadata_audit[".searchSaving"] = false;
//

$tdatadata_audit[".showSearchPanel"] = true;
		$tdatadata_audit[".flexibleSearch"] = true;		

if (isMobile())
	$tdatadata_audit[".isUseAjaxSuggest"] = false;
else 
	$tdatadata_audit[".isUseAjaxSuggest"] = true;

$tdatadata_audit[".rowHighlite"] = true;


																																																																																																																																															
$tdatadata_audit[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadata_audit[".isUseTimeForSearch"] = false;





$tdatadata_audit[".allSearchFields"] = array();
$tdatadata_audit[".filterFields"] = array();
$tdatadata_audit[".requiredSearchFields"] = array();

$tdatadata_audit[".allSearchFields"][] = "id";
	$tdatadata_audit[".allSearchFields"][] = "datetime";
	$tdatadata_audit[".allSearchFields"][] = "ip";
	$tdatadata_audit[".allSearchFields"][] = "user";
	$tdatadata_audit[".allSearchFields"][] = "table";
	$tdatadata_audit[".allSearchFields"][] = "action";
	$tdatadata_audit[".allSearchFields"][] = "description";
	

$tdatadata_audit[".googleLikeFields"] = array();
$tdatadata_audit[".googleLikeFields"][] = "id";
$tdatadata_audit[".googleLikeFields"][] = "datetime";
$tdatadata_audit[".googleLikeFields"][] = "ip";
$tdatadata_audit[".googleLikeFields"][] = "user";
$tdatadata_audit[".googleLikeFields"][] = "table";
$tdatadata_audit[".googleLikeFields"][] = "action";
$tdatadata_audit[".googleLikeFields"][] = "description";


$tdatadata_audit[".advSearchFields"] = array();
$tdatadata_audit[".advSearchFields"][] = "id";
$tdatadata_audit[".advSearchFields"][] = "datetime";
$tdatadata_audit[".advSearchFields"][] = "ip";
$tdatadata_audit[".advSearchFields"][] = "user";
$tdatadata_audit[".advSearchFields"][] = "table";
$tdatadata_audit[".advSearchFields"][] = "action";
$tdatadata_audit[".advSearchFields"][] = "description";

$tdatadata_audit[".tableType"] = "list";

$tdatadata_audit[".printerPageOrientation"] = 0;
$tdatadata_audit[".nPrinterPageScale"] = 100;

$tdatadata_audit[".nPrinterSplitRecords"] = 40;

$tdatadata_audit[".nPrinterPDFSplitRecords"] = 40;



$tdatadata_audit[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatadata_audit[".pageSize"] = 20;

$tdatadata_audit[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadata_audit[".strOrderBy"] = $tstrOrderBy;

$tdatadata_audit[".orderindexes"] = array();

$tdatadata_audit[".sqlHead"] = "SELECT id,  	`datetime`,  	ip,  	`user`,  	`table`,  	`action`,  	description";
$tdatadata_audit[".sqlFrom"] = "FROM data_audit";
$tdatadata_audit[".sqlWhereExpr"] = "";
$tdatadata_audit[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadata_audit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadata_audit[".arrGroupsPerPage"] = $arrGPP;

$tdatadata_audit[".highlightSearchResults"] = true;

$tableKeysdata_audit = array();
$tableKeysdata_audit[] = "id";
$tdatadata_audit[".Keys"] = $tableKeysdata_audit;

$tdatadata_audit[".listFields"] = array();
$tdatadata_audit[".listFields"][] = "id";
$tdatadata_audit[".listFields"][] = "datetime";
$tdatadata_audit[".listFields"][] = "ip";
$tdatadata_audit[".listFields"][] = "user";
$tdatadata_audit[".listFields"][] = "table";
$tdatadata_audit[".listFields"][] = "action";
$tdatadata_audit[".listFields"][] = "description";

$tdatadata_audit[".hideMobileList"] = array();


$tdatadata_audit[".viewFields"] = array();
$tdatadata_audit[".viewFields"][] = "id";
$tdatadata_audit[".viewFields"][] = "datetime";
$tdatadata_audit[".viewFields"][] = "ip";
$tdatadata_audit[".viewFields"][] = "user";
$tdatadata_audit[".viewFields"][] = "table";
$tdatadata_audit[".viewFields"][] = "action";
$tdatadata_audit[".viewFields"][] = "description";

$tdatadata_audit[".addFields"] = array();
$tdatadata_audit[".addFields"][] = "datetime";
$tdatadata_audit[".addFields"][] = "ip";
$tdatadata_audit[".addFields"][] = "user";
$tdatadata_audit[".addFields"][] = "table";
$tdatadata_audit[".addFields"][] = "action";
$tdatadata_audit[".addFields"][] = "description";

$tdatadata_audit[".masterListFields"] = array();
$tdatadata_audit[".masterListFields"][] = "id";
$tdatadata_audit[".masterListFields"][] = "datetime";
$tdatadata_audit[".masterListFields"][] = "ip";
$tdatadata_audit[".masterListFields"][] = "user";
$tdatadata_audit[".masterListFields"][] = "table";
$tdatadata_audit[".masterListFields"][] = "action";
$tdatadata_audit[".masterListFields"][] = "description";

$tdatadata_audit[".inlineAddFields"] = array();
$tdatadata_audit[".inlineAddFields"][] = "datetime";
$tdatadata_audit[".inlineAddFields"][] = "ip";
$tdatadata_audit[".inlineAddFields"][] = "user";
$tdatadata_audit[".inlineAddFields"][] = "table";
$tdatadata_audit[".inlineAddFields"][] = "action";
$tdatadata_audit[".inlineAddFields"][] = "description";

$tdatadata_audit[".editFields"] = array();
$tdatadata_audit[".editFields"][] = "datetime";
$tdatadata_audit[".editFields"][] = "ip";
$tdatadata_audit[".editFields"][] = "user";
$tdatadata_audit[".editFields"][] = "table";
$tdatadata_audit[".editFields"][] = "action";
$tdatadata_audit[".editFields"][] = "description";

$tdatadata_audit[".inlineEditFields"] = array();
$tdatadata_audit[".inlineEditFields"][] = "datetime";
$tdatadata_audit[".inlineEditFields"][] = "ip";
$tdatadata_audit[".inlineEditFields"][] = "user";
$tdatadata_audit[".inlineEditFields"][] = "table";
$tdatadata_audit[".inlineEditFields"][] = "action";
$tdatadata_audit[".inlineEditFields"][] = "description";

$tdatadata_audit[".exportFields"] = array();
$tdatadata_audit[".exportFields"][] = "id";
$tdatadata_audit[".exportFields"][] = "datetime";
$tdatadata_audit[".exportFields"][] = "ip";
$tdatadata_audit[".exportFields"][] = "user";
$tdatadata_audit[".exportFields"][] = "table";
$tdatadata_audit[".exportFields"][] = "action";
$tdatadata_audit[".exportFields"][] = "description";

$tdatadata_audit[".importFields"] = array();
$tdatadata_audit[".importFields"][] = "id";
$tdatadata_audit[".importFields"][] = "datetime";
$tdatadata_audit[".importFields"][] = "ip";
$tdatadata_audit[".importFields"][] = "user";
$tdatadata_audit[".importFields"][] = "table";
$tdatadata_audit[".importFields"][] = "action";
$tdatadata_audit[".importFields"][] = "description";

$tdatadata_audit[".printFields"] = array();
$tdatadata_audit[".printFields"][] = "id";
$tdatadata_audit[".printFields"][] = "datetime";
$tdatadata_audit[".printFields"][] = "ip";
$tdatadata_audit[".printFields"][] = "user";
$tdatadata_audit[".printFields"][] = "table";
$tdatadata_audit[".printFields"][] = "action";
$tdatadata_audit[".printFields"][] = "description";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "data_audit";
	$fdata["Label"] = GetFieldLabel("data_audit","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";
	
		
		
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

	

	
	$tdatadata_audit["id"] = $fdata;
//	datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "datetime";
	$fdata["GoodName"] = "datetime";
	$fdata["ownerTable"] = "data_audit";
	$fdata["Label"] = GetFieldLabel("data_audit","datetime"); 
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
	
		$fdata["strField"] = "datetime"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`datetime`";
	
		
		
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
		
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatadata_audit["datetime"] = $fdata;
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "data_audit";
	$fdata["Label"] = GetFieldLabel("data_audit","ip"); 
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
	
		$fdata["strField"] = "ip"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip";
	
		
		
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
			$edata["EditParams"].= " maxlength=40";
	
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

	

	
	$tdatadata_audit["ip"] = $fdata;
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "data_audit";
	$fdata["Label"] = GetFieldLabel("data_audit","user"); 
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
	
		$fdata["strField"] = "user"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`";
	
		
		
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
			$edata["EditParams"].= " maxlength=300";
	
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

	

	
	$tdatadata_audit["user"] = $fdata;
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "data_audit";
	$fdata["Label"] = GetFieldLabel("data_audit","table"); 
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
	
		$fdata["strField"] = "table"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`table`";
	
		
		
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
			$edata["EditParams"].= " maxlength=300";
	
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

	

	
	$tdatadata_audit["table"] = $fdata;
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "data_audit";
	$fdata["Label"] = GetFieldLabel("data_audit","action"); 
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
	
		$fdata["strField"] = "action"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`action`";
	
		
		
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
			$edata["EditParams"].= " maxlength=250";
	
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

	

	
	$tdatadata_audit["action"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "data_audit";
	$fdata["Label"] = GetFieldLabel("data_audit","description"); 
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
	
		$fdata["strField"] = "description"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";
	
		
		
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

	

	
	$tdatadata_audit["description"] = $fdata;

	
$tables_data["data_audit"]=&$tdatadata_audit;
$field_labels["data_audit"] = &$fieldLabelsdata_audit;
$fieldToolTips["data_audit"] = &$fieldToolTipsdata_audit;
$page_titles["data_audit"] = &$pageTitlesdata_audit;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["data_audit"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["data_audit"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_data_audit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	`datetime`,  	ip,  	`user`,  	`table`,  	`action`,  	description";
$proto0["m_strFrom"] = "FROM data_audit";
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
	"m_strName" => "id",
	"m_strTable" => "data_audit",
	"m_srcTableName" => "data_audit"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "data_audit";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "data_audit",
	"m_srcTableName" => "data_audit"
));

$proto7["m_sql"] = "`datetime`";
$proto7["m_srcTableName"] = "data_audit";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "data_audit",
	"m_srcTableName" => "data_audit"
));

$proto9["m_sql"] = "ip";
$proto9["m_srcTableName"] = "data_audit";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "data_audit",
	"m_srcTableName" => "data_audit"
));

$proto11["m_sql"] = "`user`";
$proto11["m_srcTableName"] = "data_audit";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "data_audit",
	"m_srcTableName" => "data_audit"
));

$proto13["m_sql"] = "`table`";
$proto13["m_srcTableName"] = "data_audit";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "data_audit",
	"m_srcTableName" => "data_audit"
));

$proto15["m_sql"] = "`action`";
$proto15["m_srcTableName"] = "data_audit";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "data_audit",
	"m_srcTableName" => "data_audit"
));

$proto17["m_sql"] = "description";
$proto17["m_srcTableName"] = "data_audit";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "data_audit";
$proto20["m_srcTableName"] = "data_audit";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "datetime";
$proto20["m_columns"][] = "ip";
$proto20["m_columns"][] = "user";
$proto20["m_columns"][] = "table";
$proto20["m_columns"][] = "action";
$proto20["m_columns"][] = "description";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "data_audit";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "data_audit";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="data_audit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_data_audit = createSqlQuery_data_audit();


	
							
	
$tdatadata_audit[".sqlquery"] = $queryData_data_audit;

$tableEvents["data_audit"] = new eventsBase;
$tdatadata_audit[".hasEvents"] = false;

?>