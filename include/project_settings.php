<?php
require_once(getabspath("classes/cipherer.php"));




$tdataproject = array();	
	$tdataproject[".truncateText"] = true;
	$tdataproject[".NumberOfChars"] = 80; 
	$tdataproject[".ShortName"] = "project";
	$tdataproject[".OwnerID"] = "";
	$tdataproject[".OriginalTable"] = "project";

//	field labels
$fieldLabelsproject = array();
$fieldToolTipsproject = array();
$pageTitlesproject = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproject["English"] = array();
	$fieldToolTipsproject["English"] = array();
	$pageTitlesproject["English"] = array();
	$fieldLabelsproject["English"]["project_id"] = "Project Id";
	$fieldToolTipsproject["English"]["project_id"] = "";
	$fieldLabelsproject["English"]["project_name"] = "Project Name";
	$fieldToolTipsproject["English"]["project_name"] = "";
	$fieldLabelsproject["English"]["client_id"] = "Client Id";
	$fieldToolTipsproject["English"]["client_id"] = "";
	$fieldLabelsproject["English"]["pdf_id"] = "Pdf Id";
	$fieldToolTipsproject["English"]["pdf_id"] = "";
	$fieldLabelsproject["English"]["instructions"] = "Instructions";
	$fieldToolTipsproject["English"]["instructions"] = "";
	$fieldLabelsproject["English"]["extra_instructions"] = "Extra Instructions";
	$fieldToolTipsproject["English"]["extra_instructions"] = "";
	$fieldLabelsproject["English"]["ftphost"] = "Ftphost";
	$fieldToolTipsproject["English"]["ftphost"] = "";
	$fieldLabelsproject["English"]["ftpusername"] = "Ftpusername";
	$fieldToolTipsproject["English"]["ftpusername"] = "";
	$fieldLabelsproject["English"]["ftppassword"] = "Ftppassword";
	$fieldToolTipsproject["English"]["ftppassword"] = "";
	if (count($fieldToolTipsproject["English"]))
		$tdataproject[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsproject[""] = array();
	$fieldToolTipsproject[""] = array();
	$pageTitlesproject[""] = array();
	if (count($fieldToolTipsproject[""]))
		$tdataproject[".isUseToolTips"] = true;
}
	
	
	$tdataproject[".NCSearch"] = true;



$tdataproject[".shortTableName"] = "project";
$tdataproject[".nSecOptions"] = 0;
$tdataproject[".recsPerRowList"] = 1;
$tdataproject[".recsPerRowPrint"] = 1;
$tdataproject[".mainTableOwnerID"] = "";
$tdataproject[".moveNext"] = 1;
$tdataproject[".entityType"] = 0;

$tdataproject[".strOriginalTableName"] = "project";




$tdataproject[".showAddInPopup"] = false;

$tdataproject[".showEditInPopup"] = false;

$tdataproject[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproject[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataproject[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataproject[".listAjax"] = true;
else 
	$tdataproject[".listAjax"] = false;

	$tdataproject[".audit"] = false;

	$tdataproject[".locking"] = false;

$tdataproject[".edit"] = true;
$tdataproject[".afterEditAction"] = 1;
$tdataproject[".closePopupAfterEdit"] = 1;
$tdataproject[".afterEditActionDetTable"] = "";

$tdataproject[".add"] = true;
$tdataproject[".afterAddAction"] = 0;
$tdataproject[".closePopupAfterAdd"] = 1;
$tdataproject[".afterAddActionDetTable"] = "";

$tdataproject[".list"] = true;

$tdataproject[".view"] = true;

$tdataproject[".import"] = true;

$tdataproject[".exportTo"] = true;

$tdataproject[".printFriendly"] = true;

$tdataproject[".delete"] = true;

$tdataproject[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataproject[".searchSaving"] = false;
//

$tdataproject[".showSearchPanel"] = true;
		$tdataproject[".flexibleSearch"] = true;		

if (isMobile())
	$tdataproject[".isUseAjaxSuggest"] = false;
else 
	$tdataproject[".isUseAjaxSuggest"] = true;

$tdataproject[".rowHighlite"] = true;


																																																																																																																																															
$tdataproject[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproject[".isUseTimeForSearch"] = false;




$tdataproject[".detailsLinksOnList"] = "1";

$tdataproject[".allSearchFields"] = array();
$tdataproject[".filterFields"] = array();
$tdataproject[".requiredSearchFields"] = array();

$tdataproject[".allSearchFields"][] = "project_id";
	$tdataproject[".allSearchFields"][] = "project_name";
	$tdataproject[".allSearchFields"][] = "client_id";
	$tdataproject[".allSearchFields"][] = "pdf_id";
	$tdataproject[".allSearchFields"][] = "instructions";
	$tdataproject[".allSearchFields"][] = "extra_instructions";
	$tdataproject[".allSearchFields"][] = "ftphost";
	$tdataproject[".allSearchFields"][] = "ftpusername";
	$tdataproject[".allSearchFields"][] = "ftppassword";
	

$tdataproject[".googleLikeFields"] = array();
$tdataproject[".googleLikeFields"][] = "project_id";
$tdataproject[".googleLikeFields"][] = "project_name";
$tdataproject[".googleLikeFields"][] = "client_id";
$tdataproject[".googleLikeFields"][] = "pdf_id";
$tdataproject[".googleLikeFields"][] = "instructions";
$tdataproject[".googleLikeFields"][] = "extra_instructions";
$tdataproject[".googleLikeFields"][] = "ftphost";
$tdataproject[".googleLikeFields"][] = "ftpusername";
$tdataproject[".googleLikeFields"][] = "ftppassword";


$tdataproject[".advSearchFields"] = array();
$tdataproject[".advSearchFields"][] = "project_id";
$tdataproject[".advSearchFields"][] = "project_name";
$tdataproject[".advSearchFields"][] = "client_id";
$tdataproject[".advSearchFields"][] = "pdf_id";
$tdataproject[".advSearchFields"][] = "instructions";
$tdataproject[".advSearchFields"][] = "extra_instructions";
$tdataproject[".advSearchFields"][] = "ftphost";
$tdataproject[".advSearchFields"][] = "ftpusername";
$tdataproject[".advSearchFields"][] = "ftppassword";

$tdataproject[".tableType"] = "list";

$tdataproject[".printerPageOrientation"] = 0;
$tdataproject[".nPrinterPageScale"] = 100;

$tdataproject[".nPrinterSplitRecords"] = 40;

$tdataproject[".nPrinterPDFSplitRecords"] = 40;



$tdataproject[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataproject[".pageSize"] = 20;

$tdataproject[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproject[".strOrderBy"] = $tstrOrderBy;

$tdataproject[".orderindexes"] = array();

$tdataproject[".sqlHead"] = "SELECT project_id,  	project_name,  	client_id,  	pdf_id,  	instructions,  	extra_instructions,  	ftphost,  	ftpusername,  	ftppassword";
$tdataproject[".sqlFrom"] = "FROM project";
$tdataproject[".sqlWhereExpr"] = "";
$tdataproject[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproject[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproject[".arrGroupsPerPage"] = $arrGPP;

$tdataproject[".highlightSearchResults"] = true;

$tableKeysproject = array();
$tableKeysproject[] = "project_id";
$tdataproject[".Keys"] = $tableKeysproject;

$tdataproject[".listFields"] = array();
$tdataproject[".listFields"][] = "project_id";
$tdataproject[".listFields"][] = "project_name";
$tdataproject[".listFields"][] = "client_id";
$tdataproject[".listFields"][] = "pdf_id";
$tdataproject[".listFields"][] = "instructions";
$tdataproject[".listFields"][] = "extra_instructions";
$tdataproject[".listFields"][] = "ftphost";
$tdataproject[".listFields"][] = "ftpusername";
$tdataproject[".listFields"][] = "ftppassword";

$tdataproject[".hideMobileList"] = array();


$tdataproject[".viewFields"] = array();
$tdataproject[".viewFields"][] = "project_id";
$tdataproject[".viewFields"][] = "project_name";
$tdataproject[".viewFields"][] = "client_id";
$tdataproject[".viewFields"][] = "pdf_id";
$tdataproject[".viewFields"][] = "instructions";
$tdataproject[".viewFields"][] = "extra_instructions";
$tdataproject[".viewFields"][] = "ftphost";
$tdataproject[".viewFields"][] = "ftpusername";
$tdataproject[".viewFields"][] = "ftppassword";

$tdataproject[".addFields"] = array();
$tdataproject[".addFields"][] = "project_name";
$tdataproject[".addFields"][] = "client_id";
$tdataproject[".addFields"][] = "pdf_id";
$tdataproject[".addFields"][] = "instructions";
$tdataproject[".addFields"][] = "extra_instructions";
$tdataproject[".addFields"][] = "ftphost";
$tdataproject[".addFields"][] = "ftpusername";
$tdataproject[".addFields"][] = "ftppassword";

$tdataproject[".masterListFields"] = array();
$tdataproject[".masterListFields"][] = "project_id";
$tdataproject[".masterListFields"][] = "project_name";
$tdataproject[".masterListFields"][] = "client_id";
$tdataproject[".masterListFields"][] = "pdf_id";
$tdataproject[".masterListFields"][] = "instructions";
$tdataproject[".masterListFields"][] = "extra_instructions";
$tdataproject[".masterListFields"][] = "ftphost";
$tdataproject[".masterListFields"][] = "ftpusername";
$tdataproject[".masterListFields"][] = "ftppassword";

$tdataproject[".inlineAddFields"] = array();
$tdataproject[".inlineAddFields"][] = "project_name";
$tdataproject[".inlineAddFields"][] = "client_id";
$tdataproject[".inlineAddFields"][] = "pdf_id";
$tdataproject[".inlineAddFields"][] = "instructions";
$tdataproject[".inlineAddFields"][] = "extra_instructions";
$tdataproject[".inlineAddFields"][] = "ftphost";
$tdataproject[".inlineAddFields"][] = "ftpusername";
$tdataproject[".inlineAddFields"][] = "ftppassword";

$tdataproject[".editFields"] = array();
$tdataproject[".editFields"][] = "project_name";
$tdataproject[".editFields"][] = "client_id";
$tdataproject[".editFields"][] = "pdf_id";
$tdataproject[".editFields"][] = "instructions";
$tdataproject[".editFields"][] = "extra_instructions";
$tdataproject[".editFields"][] = "ftphost";
$tdataproject[".editFields"][] = "ftpusername";
$tdataproject[".editFields"][] = "ftppassword";

$tdataproject[".inlineEditFields"] = array();
$tdataproject[".inlineEditFields"][] = "project_name";
$tdataproject[".inlineEditFields"][] = "client_id";
$tdataproject[".inlineEditFields"][] = "pdf_id";
$tdataproject[".inlineEditFields"][] = "instructions";
$tdataproject[".inlineEditFields"][] = "extra_instructions";
$tdataproject[".inlineEditFields"][] = "ftphost";
$tdataproject[".inlineEditFields"][] = "ftpusername";
$tdataproject[".inlineEditFields"][] = "ftppassword";

$tdataproject[".exportFields"] = array();
$tdataproject[".exportFields"][] = "project_id";
$tdataproject[".exportFields"][] = "project_name";
$tdataproject[".exportFields"][] = "client_id";
$tdataproject[".exportFields"][] = "pdf_id";
$tdataproject[".exportFields"][] = "instructions";
$tdataproject[".exportFields"][] = "extra_instructions";
$tdataproject[".exportFields"][] = "ftphost";
$tdataproject[".exportFields"][] = "ftpusername";
$tdataproject[".exportFields"][] = "ftppassword";

$tdataproject[".importFields"] = array();
$tdataproject[".importFields"][] = "project_id";
$tdataproject[".importFields"][] = "project_name";
$tdataproject[".importFields"][] = "client_id";
$tdataproject[".importFields"][] = "pdf_id";
$tdataproject[".importFields"][] = "instructions";
$tdataproject[".importFields"][] = "extra_instructions";
$tdataproject[".importFields"][] = "ftphost";
$tdataproject[".importFields"][] = "ftpusername";
$tdataproject[".importFields"][] = "ftppassword";

$tdataproject[".printFields"] = array();
$tdataproject[".printFields"][] = "project_id";
$tdataproject[".printFields"][] = "project_name";
$tdataproject[".printFields"][] = "client_id";
$tdataproject[".printFields"][] = "pdf_id";
$tdataproject[".printFields"][] = "instructions";
$tdataproject[".printFields"][] = "extra_instructions";
$tdataproject[".printFields"][] = "ftphost";
$tdataproject[".printFields"][] = "ftpusername";
$tdataproject[".printFields"][] = "ftppassword";

//	project_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "project_id";
	$fdata["GoodName"] = "project_id";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("project","project_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "project_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project_id";
	
		
		
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

	

	
	$tdataproject["project_id"] = $fdata;
//	project_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "project_name";
	$fdata["GoodName"] = "project_name";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("project","project_name"); 
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
	
		$fdata["strField"] = "project_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project_name";
	
		
		
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

	

	
	$tdataproject["project_name"] = $fdata;
//	client_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "client_id";
	$fdata["GoodName"] = "client_id";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("project","client_id"); 
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

	

	
	$tdataproject["client_id"] = $fdata;
//	pdf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pdf_id";
	$fdata["GoodName"] = "pdf_id";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("project","pdf_id"); 
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

	

	
	$tdataproject["pdf_id"] = $fdata;
//	instructions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "instructions";
	$fdata["GoodName"] = "instructions";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("project","instructions"); 
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
	
		$fdata["strField"] = "instructions"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "instructions";
	
		
		
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

	

	
	$tdataproject["instructions"] = $fdata;
//	extra_instructions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "extra_instructions";
	$fdata["GoodName"] = "extra_instructions";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("project","extra_instructions"); 
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
	
		$fdata["strField"] = "extra_instructions"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "extra_instructions";
	
		
		
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

	

	
	$tdataproject["extra_instructions"] = $fdata;
//	ftphost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ftphost";
	$fdata["GoodName"] = "ftphost";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("project","ftphost"); 
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
	
		$fdata["strField"] = "ftphost"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ftphost";
	
		
		
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

	

	
	$tdataproject["ftphost"] = $fdata;
//	ftpusername
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ftpusername";
	$fdata["GoodName"] = "ftpusername";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("project","ftpusername"); 
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
	
		$fdata["strField"] = "ftpusername"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ftpusername";
	
		
		
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

	

	
	$tdataproject["ftpusername"] = $fdata;
//	ftppassword
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ftppassword";
	$fdata["GoodName"] = "ftppassword";
	$fdata["ownerTable"] = "project";
	$fdata["Label"] = GetFieldLabel("project","ftppassword"); 
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
	
		$fdata["strField"] = "ftppassword"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ftppassword";
	
		
		
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

	

	
	$tdataproject["ftppassword"] = $fdata;

	
$tables_data["project"]=&$tdataproject;
$field_labels["project"] = &$fieldLabelsproject;
$fieldToolTips["project"] = &$fieldToolTipsproject;
$page_titles["project"] = &$pageTitlesproject;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["project"] = array();
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
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
			
	$detailsTablesData["project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["project"][$dIndex]["masterKeys"][]="project_id";

				$detailsTablesData["project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["project"][$dIndex]["detailKeys"][]="project_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["project"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_project()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "project_id,  	project_name,  	client_id,  	pdf_id,  	instructions,  	extra_instructions,  	ftphost,  	ftpusername,  	ftppassword";
$proto0["m_strFrom"] = "FROM project";
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
	"m_strName" => "project_id",
	"m_strTable" => "project",
	"m_srcTableName" => "project"
));

$proto5["m_sql"] = "project_id";
$proto5["m_srcTableName"] = "project";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "project_name",
	"m_strTable" => "project",
	"m_srcTableName" => "project"
));

$proto7["m_sql"] = "project_name";
$proto7["m_srcTableName"] = "project";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "client_id",
	"m_strTable" => "project",
	"m_srcTableName" => "project"
));

$proto9["m_sql"] = "client_id";
$proto9["m_srcTableName"] = "project";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "project",
	"m_srcTableName" => "project"
));

$proto11["m_sql"] = "pdf_id";
$proto11["m_srcTableName"] = "project";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "instructions",
	"m_strTable" => "project",
	"m_srcTableName" => "project"
));

$proto13["m_sql"] = "instructions";
$proto13["m_srcTableName"] = "project";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "extra_instructions",
	"m_strTable" => "project",
	"m_srcTableName" => "project"
));

$proto15["m_sql"] = "extra_instructions";
$proto15["m_srcTableName"] = "project";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "ftphost",
	"m_strTable" => "project",
	"m_srcTableName" => "project"
));

$proto17["m_sql"] = "ftphost";
$proto17["m_srcTableName"] = "project";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "ftpusername",
	"m_strTable" => "project",
	"m_srcTableName" => "project"
));

$proto19["m_sql"] = "ftpusername";
$proto19["m_srcTableName"] = "project";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "ftppassword",
	"m_strTable" => "project",
	"m_srcTableName" => "project"
));

$proto21["m_sql"] = "ftppassword";
$proto21["m_srcTableName"] = "project";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "project";
$proto24["m_srcTableName"] = "project";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "project_id";
$proto24["m_columns"][] = "project_name";
$proto24["m_columns"][] = "client_id";
$proto24["m_columns"][] = "pdf_id";
$proto24["m_columns"][] = "instructions";
$proto24["m_columns"][] = "extra_instructions";
$proto24["m_columns"][] = "ftphost";
$proto24["m_columns"][] = "ftpusername";
$proto24["m_columns"][] = "ftppassword";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "project";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "project";
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
$proto0["m_srcTableName"]="project";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_project = createSqlQuery_project();


	
									
	
$tdataproject[".sqlquery"] = $queryData_project;

$tableEvents["project"] = new eventsBase;
$tdataproject[".hasEvents"] = false;

?>