<?php
require_once(getabspath("classes/cipherer.php"));




$tdatagroup = array();	
	$tdatagroup[".truncateText"] = true;
	$tdatagroup[".NumberOfChars"] = 80; 
	$tdatagroup[".ShortName"] = "group";
	$tdatagroup[".OwnerID"] = "";
	$tdatagroup[".OriginalTable"] = "group";

//	field labels
$fieldLabelsgroup = array();
$fieldToolTipsgroup = array();
$pageTitlesgroup = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup["English"] = array();
	$fieldToolTipsgroup["English"] = array();
	$pageTitlesgroup["English"] = array();
	$fieldLabelsgroup["English"]["group_id"] = "Group Id";
	$fieldToolTipsgroup["English"]["group_id"] = "";
	$fieldLabelsgroup["English"]["groupname"] = "Groupname";
	$fieldToolTipsgroup["English"]["groupname"] = "";
	$fieldLabelsgroup["English"]["groupname_display"] = "Groupname Display";
	$fieldToolTipsgroup["English"]["groupname_display"] = "";
	$fieldLabelsgroup["English"]["description"] = "Description";
	$fieldToolTipsgroup["English"]["description"] = "";
	$fieldLabelsgroup["English"]["privileges"] = "Privileges";
	$fieldToolTipsgroup["English"]["privileges"] = "";
	if (count($fieldToolTipsgroup["English"]))
		$tdatagroup[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsgroup[""] = array();
	$fieldToolTipsgroup[""] = array();
	$pageTitlesgroup[""] = array();
	if (count($fieldToolTipsgroup[""]))
		$tdatagroup[".isUseToolTips"] = true;
}
	
	
	$tdatagroup[".NCSearch"] = true;



$tdatagroup[".shortTableName"] = "group";
$tdatagroup[".nSecOptions"] = 0;
$tdatagroup[".recsPerRowList"] = 1;
$tdatagroup[".recsPerRowPrint"] = 1;
$tdatagroup[".mainTableOwnerID"] = "";
$tdatagroup[".moveNext"] = 1;
$tdatagroup[".entityType"] = 0;

$tdatagroup[".strOriginalTableName"] = "group";




$tdatagroup[".showAddInPopup"] = false;

$tdatagroup[".showEditInPopup"] = false;

$tdatagroup[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatagroup[".listAjax"] = true;
else 
	$tdatagroup[".listAjax"] = false;

	$tdatagroup[".audit"] = false;

	$tdatagroup[".locking"] = false;

$tdatagroup[".edit"] = true;
$tdatagroup[".afterEditAction"] = 1;
$tdatagroup[".closePopupAfterEdit"] = 1;
$tdatagroup[".afterEditActionDetTable"] = "";

$tdatagroup[".add"] = true;
$tdatagroup[".afterAddAction"] = 0;
$tdatagroup[".closePopupAfterAdd"] = 1;
$tdatagroup[".afterAddActionDetTable"] = "";

$tdatagroup[".list"] = true;

$tdatagroup[".view"] = true;

$tdatagroup[".import"] = true;

$tdatagroup[".exportTo"] = true;

$tdatagroup[".printFriendly"] = true;

$tdatagroup[".delete"] = true;

$tdatagroup[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatagroup[".searchSaving"] = false;
//

$tdatagroup[".showSearchPanel"] = true;
		$tdatagroup[".flexibleSearch"] = true;		

if (isMobile())
	$tdatagroup[".isUseAjaxSuggest"] = false;
else 
	$tdatagroup[".isUseAjaxSuggest"] = true;

$tdatagroup[".rowHighlite"] = true;


																																																																																																																																															
$tdatagroup[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroup[".isUseTimeForSearch"] = false;




$tdatagroup[".detailsLinksOnList"] = "1";

$tdatagroup[".allSearchFields"] = array();
$tdatagroup[".filterFields"] = array();
$tdatagroup[".requiredSearchFields"] = array();

$tdatagroup[".allSearchFields"][] = "group_id";
	$tdatagroup[".allSearchFields"][] = "groupname";
	$tdatagroup[".allSearchFields"][] = "groupname_display";
	$tdatagroup[".allSearchFields"][] = "description";
	$tdatagroup[".allSearchFields"][] = "privileges";
	

$tdatagroup[".googleLikeFields"] = array();
$tdatagroup[".googleLikeFields"][] = "group_id";
$tdatagroup[".googleLikeFields"][] = "groupname";
$tdatagroup[".googleLikeFields"][] = "groupname_display";
$tdatagroup[".googleLikeFields"][] = "description";
$tdatagroup[".googleLikeFields"][] = "privileges";


$tdatagroup[".advSearchFields"] = array();
$tdatagroup[".advSearchFields"][] = "group_id";
$tdatagroup[".advSearchFields"][] = "groupname";
$tdatagroup[".advSearchFields"][] = "groupname_display";
$tdatagroup[".advSearchFields"][] = "description";
$tdatagroup[".advSearchFields"][] = "privileges";

$tdatagroup[".tableType"] = "list";

$tdatagroup[".printerPageOrientation"] = 0;
$tdatagroup[".nPrinterPageScale"] = 100;

$tdatagroup[".nPrinterSplitRecords"] = 40;

$tdatagroup[".nPrinterPDFSplitRecords"] = 40;



$tdatagroup[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatagroup[".pageSize"] = 20;

$tdatagroup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup[".strOrderBy"] = $tstrOrderBy;

$tdatagroup[".orderindexes"] = array();

$tdatagroup[".sqlHead"] = "SELECT group_id,  	groupname,  	groupname_display,  	description,  	`privileges`";
$tdatagroup[".sqlFrom"] = "FROM `group`";
$tdatagroup[".sqlWhereExpr"] = "";
$tdatagroup[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup[".highlightSearchResults"] = true;

$tableKeysgroup = array();
$tableKeysgroup[] = "group_id";
$tdatagroup[".Keys"] = $tableKeysgroup;

$tdatagroup[".listFields"] = array();
$tdatagroup[".listFields"][] = "group_id";
$tdatagroup[".listFields"][] = "groupname";
$tdatagroup[".listFields"][] = "groupname_display";
$tdatagroup[".listFields"][] = "description";
$tdatagroup[".listFields"][] = "privileges";

$tdatagroup[".hideMobileList"] = array();


$tdatagroup[".viewFields"] = array();
$tdatagroup[".viewFields"][] = "group_id";
$tdatagroup[".viewFields"][] = "groupname";
$tdatagroup[".viewFields"][] = "groupname_display";
$tdatagroup[".viewFields"][] = "description";
$tdatagroup[".viewFields"][] = "privileges";

$tdatagroup[".addFields"] = array();
$tdatagroup[".addFields"][] = "groupname";
$tdatagroup[".addFields"][] = "groupname_display";
$tdatagroup[".addFields"][] = "description";
$tdatagroup[".addFields"][] = "privileges";

$tdatagroup[".masterListFields"] = array();
$tdatagroup[".masterListFields"][] = "group_id";
$tdatagroup[".masterListFields"][] = "groupname";
$tdatagroup[".masterListFields"][] = "groupname_display";
$tdatagroup[".masterListFields"][] = "description";
$tdatagroup[".masterListFields"][] = "privileges";

$tdatagroup[".inlineAddFields"] = array();
$tdatagroup[".inlineAddFields"][] = "groupname";
$tdatagroup[".inlineAddFields"][] = "groupname_display";
$tdatagroup[".inlineAddFields"][] = "description";
$tdatagroup[".inlineAddFields"][] = "privileges";

$tdatagroup[".editFields"] = array();
$tdatagroup[".editFields"][] = "groupname";
$tdatagroup[".editFields"][] = "groupname_display";
$tdatagroup[".editFields"][] = "description";
$tdatagroup[".editFields"][] = "privileges";

$tdatagroup[".inlineEditFields"] = array();
$tdatagroup[".inlineEditFields"][] = "groupname";
$tdatagroup[".inlineEditFields"][] = "groupname_display";
$tdatagroup[".inlineEditFields"][] = "description";
$tdatagroup[".inlineEditFields"][] = "privileges";

$tdatagroup[".exportFields"] = array();
$tdatagroup[".exportFields"][] = "group_id";
$tdatagroup[".exportFields"][] = "groupname";
$tdatagroup[".exportFields"][] = "groupname_display";
$tdatagroup[".exportFields"][] = "description";
$tdatagroup[".exportFields"][] = "privileges";

$tdatagroup[".importFields"] = array();
$tdatagroup[".importFields"][] = "group_id";
$tdatagroup[".importFields"][] = "groupname";
$tdatagroup[".importFields"][] = "groupname_display";
$tdatagroup[".importFields"][] = "description";
$tdatagroup[".importFields"][] = "privileges";

$tdatagroup[".printFields"] = array();
$tdatagroup[".printFields"][] = "group_id";
$tdatagroup[".printFields"][] = "groupname";
$tdatagroup[".printFields"][] = "groupname_display";
$tdatagroup[".printFields"][] = "description";
$tdatagroup[".printFields"][] = "privileges";

//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group","group_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "group_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_id";
	
		
		
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

	

	
	$tdatagroup["group_id"] = $fdata;
//	groupname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "groupname";
	$fdata["GoodName"] = "groupname";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group","groupname"); 
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
	
		$fdata["strField"] = "groupname"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupname";
	
		
		
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

	

	
	$tdatagroup["groupname"] = $fdata;
//	groupname_display
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "groupname_display";
	$fdata["GoodName"] = "groupname_display";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group","groupname_display"); 
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
	
		$fdata["strField"] = "groupname_display"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupname_display";
	
		
		
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

	

	
	$tdatagroup["groupname_display"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group","description"); 
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

	

	
	$tdatagroup["description"] = $fdata;
//	privileges
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "privileges";
	$fdata["GoodName"] = "privileges";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group","privileges"); 
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
	
		$fdata["strField"] = "privileges"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`privileges`";
	
		
		
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

	

	
	$tdatagroup["privileges"] = $fdata;

	
$tables_data["group"]=&$tdatagroup;
$field_labels["group"] = &$fieldLabelsgroup;
$fieldToolTips["group"] = &$fieldToolTipsgroup;
$page_titles["group"] = &$pageTitlesgroup;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group"] = array();
//	user
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="user";
		$detailsParam["dOriginalTable"] = "user";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "user";
	$detailsParam["dCaptionTable"] = GetTableCaption("user");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["group"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group"][$dIndex]["detailKeys"][]="group_id";
//	Users
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Users";
		$detailsParam["dOriginalTable"] = "user";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Users";
	$detailsParam["dCaptionTable"] = GetTableCaption("Users");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["group"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group"][$dIndex]["detailKeys"][]="group_id";
//	Team Report
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Team Report";
		$detailsParam["dOriginalTable"] = "user";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "Team_Report";
	$detailsParam["dCaptionTable"] = GetTableCaption("Team_Report");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["group"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group"][$dIndex]["detailKeys"][]="group_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["group"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_group()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "group_id,  	groupname,  	groupname_display,  	description,  	`privileges`";
$proto0["m_strFrom"] = "FROM `group`";
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
	"m_strName" => "group_id",
	"m_strTable" => "group",
	"m_srcTableName" => "group"
));

$proto5["m_sql"] = "group_id";
$proto5["m_srcTableName"] = "group";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "groupname",
	"m_strTable" => "group",
	"m_srcTableName" => "group"
));

$proto7["m_sql"] = "groupname";
$proto7["m_srcTableName"] = "group";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "groupname_display",
	"m_strTable" => "group",
	"m_srcTableName" => "group"
));

$proto9["m_sql"] = "groupname_display";
$proto9["m_srcTableName"] = "group";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "group",
	"m_srcTableName" => "group"
));

$proto11["m_sql"] = "description";
$proto11["m_srcTableName"] = "group";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "privileges",
	"m_strTable" => "group",
	"m_srcTableName" => "group"
));

$proto13["m_sql"] = "`privileges`";
$proto13["m_srcTableName"] = "group";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "group";
$proto16["m_srcTableName"] = "group";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "group_id";
$proto16["m_columns"][] = "groupname";
$proto16["m_columns"][] = "groupname_display";
$proto16["m_columns"][] = "description";
$proto16["m_columns"][] = "privileges";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "`group`";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "group";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="group";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_group = createSqlQuery_group();


	
					
	
$tdatagroup[".sqlquery"] = $queryData_group;

$tableEvents["group"] = new eventsBase;
$tdatagroup[".hasEvents"] = false;

?>