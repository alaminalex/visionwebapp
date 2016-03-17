<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasubdivision = array();	
	$tdatasubdivision[".truncateText"] = true;
	$tdatasubdivision[".NumberOfChars"] = 80; 
	$tdatasubdivision[".ShortName"] = "subdivision";
	$tdatasubdivision[".OwnerID"] = "";
	$tdatasubdivision[".OriginalTable"] = "subdivision";

//	field labels
$fieldLabelssubdivision = array();
$fieldToolTipssubdivision = array();
$pageTitlessubdivision = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssubdivision["English"] = array();
	$fieldToolTipssubdivision["English"] = array();
	$pageTitlessubdivision["English"] = array();
	$fieldLabelssubdivision["English"]["subdiv_id"] = "Subdiv Id";
	$fieldToolTipssubdivision["English"]["subdiv_id"] = "";
	$fieldLabelssubdivision["English"]["subdiv_name"] = "Subdiv Name";
	$fieldToolTipssubdivision["English"]["subdiv_name"] = "";
	$fieldLabelssubdivision["English"]["department_id"] = "Department Id";
	$fieldToolTipssubdivision["English"]["department_id"] = "";
	$fieldLabelssubdivision["English"]["total_resources"] = "Total Resources";
	$fieldToolTipssubdivision["English"]["total_resources"] = "";
	if (count($fieldToolTipssubdivision["English"]))
		$tdatasubdivision[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssubdivision[""] = array();
	$fieldToolTipssubdivision[""] = array();
	$pageTitlessubdivision[""] = array();
	if (count($fieldToolTipssubdivision[""]))
		$tdatasubdivision[".isUseToolTips"] = true;
}
	
	
	$tdatasubdivision[".NCSearch"] = true;



$tdatasubdivision[".shortTableName"] = "subdivision";
$tdatasubdivision[".nSecOptions"] = 0;
$tdatasubdivision[".recsPerRowList"] = 1;
$tdatasubdivision[".recsPerRowPrint"] = 1;
$tdatasubdivision[".mainTableOwnerID"] = "";
$tdatasubdivision[".moveNext"] = 1;
$tdatasubdivision[".entityType"] = 0;

$tdatasubdivision[".strOriginalTableName"] = "subdivision";




$tdatasubdivision[".showAddInPopup"] = false;

$tdatasubdivision[".showEditInPopup"] = false;

$tdatasubdivision[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasubdivision[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasubdivision[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatasubdivision[".listAjax"] = true;
else 
	$tdatasubdivision[".listAjax"] = false;

	$tdatasubdivision[".audit"] = false;

	$tdatasubdivision[".locking"] = false;

$tdatasubdivision[".edit"] = true;
$tdatasubdivision[".afterEditAction"] = 1;
$tdatasubdivision[".closePopupAfterEdit"] = 1;
$tdatasubdivision[".afterEditActionDetTable"] = "";

$tdatasubdivision[".add"] = true;
$tdatasubdivision[".afterAddAction"] = 0;
$tdatasubdivision[".closePopupAfterAdd"] = 1;
$tdatasubdivision[".afterAddActionDetTable"] = "";

$tdatasubdivision[".list"] = true;

$tdatasubdivision[".view"] = true;

$tdatasubdivision[".import"] = true;

$tdatasubdivision[".exportTo"] = true;

$tdatasubdivision[".printFriendly"] = true;

$tdatasubdivision[".delete"] = true;

$tdatasubdivision[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasubdivision[".searchSaving"] = false;
//

$tdatasubdivision[".showSearchPanel"] = true;
		$tdatasubdivision[".flexibleSearch"] = true;		

if (isMobile())
	$tdatasubdivision[".isUseAjaxSuggest"] = false;
else 
	$tdatasubdivision[".isUseAjaxSuggest"] = true;

$tdatasubdivision[".rowHighlite"] = true;


																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												
$tdatasubdivision[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasubdivision[".isUseTimeForSearch"] = false;




$tdatasubdivision[".detailsLinksOnList"] = "1";

$tdatasubdivision[".allSearchFields"] = array();
$tdatasubdivision[".filterFields"] = array();
$tdatasubdivision[".requiredSearchFields"] = array();

$tdatasubdivision[".allSearchFields"][] = "subdiv_id";
	$tdatasubdivision[".allSearchFields"][] = "subdiv_name";
	$tdatasubdivision[".allSearchFields"][] = "department_id";
	$tdatasubdivision[".allSearchFields"][] = "total_resources";
	

$tdatasubdivision[".googleLikeFields"] = array();
$tdatasubdivision[".googleLikeFields"][] = "subdiv_id";
$tdatasubdivision[".googleLikeFields"][] = "subdiv_name";
$tdatasubdivision[".googleLikeFields"][] = "department_id";
$tdatasubdivision[".googleLikeFields"][] = "total_resources";


$tdatasubdivision[".advSearchFields"] = array();
$tdatasubdivision[".advSearchFields"][] = "subdiv_id";
$tdatasubdivision[".advSearchFields"][] = "subdiv_name";
$tdatasubdivision[".advSearchFields"][] = "department_id";
$tdatasubdivision[".advSearchFields"][] = "total_resources";

$tdatasubdivision[".tableType"] = "list";

$tdatasubdivision[".printerPageOrientation"] = 0;
$tdatasubdivision[".nPrinterPageScale"] = 100;

$tdatasubdivision[".nPrinterSplitRecords"] = 40;

$tdatasubdivision[".nPrinterPDFSplitRecords"] = 40;



$tdatasubdivision[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatasubdivision[".pageSize"] = 20;

$tdatasubdivision[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasubdivision[".strOrderBy"] = $tstrOrderBy;

$tdatasubdivision[".orderindexes"] = array();

$tdatasubdivision[".sqlHead"] = "SELECT subdiv_id,  	subdiv_name,  	department_id,  	total_resources";
$tdatasubdivision[".sqlFrom"] = "FROM subdivision";
$tdatasubdivision[".sqlWhereExpr"] = "";
$tdatasubdivision[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasubdivision[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasubdivision[".arrGroupsPerPage"] = $arrGPP;

$tdatasubdivision[".highlightSearchResults"] = true;

$tableKeyssubdivision = array();
$tableKeyssubdivision[] = "subdiv_id";
$tdatasubdivision[".Keys"] = $tableKeyssubdivision;

$tdatasubdivision[".listFields"] = array();
$tdatasubdivision[".listFields"][] = "subdiv_id";
$tdatasubdivision[".listFields"][] = "subdiv_name";
$tdatasubdivision[".listFields"][] = "department_id";
$tdatasubdivision[".listFields"][] = "total_resources";

$tdatasubdivision[".hideMobileList"] = array();


$tdatasubdivision[".viewFields"] = array();
$tdatasubdivision[".viewFields"][] = "subdiv_id";
$tdatasubdivision[".viewFields"][] = "subdiv_name";
$tdatasubdivision[".viewFields"][] = "department_id";
$tdatasubdivision[".viewFields"][] = "total_resources";

$tdatasubdivision[".addFields"] = array();
$tdatasubdivision[".addFields"][] = "subdiv_name";
$tdatasubdivision[".addFields"][] = "department_id";
$tdatasubdivision[".addFields"][] = "total_resources";

$tdatasubdivision[".masterListFields"] = array();
$tdatasubdivision[".masterListFields"][] = "subdiv_id";
$tdatasubdivision[".masterListFields"][] = "subdiv_name";
$tdatasubdivision[".masterListFields"][] = "department_id";
$tdatasubdivision[".masterListFields"][] = "total_resources";

$tdatasubdivision[".inlineAddFields"] = array();
$tdatasubdivision[".inlineAddFields"][] = "subdiv_name";
$tdatasubdivision[".inlineAddFields"][] = "department_id";
$tdatasubdivision[".inlineAddFields"][] = "total_resources";

$tdatasubdivision[".editFields"] = array();
$tdatasubdivision[".editFields"][] = "subdiv_name";
$tdatasubdivision[".editFields"][] = "department_id";
$tdatasubdivision[".editFields"][] = "total_resources";

$tdatasubdivision[".inlineEditFields"] = array();
$tdatasubdivision[".inlineEditFields"][] = "subdiv_name";
$tdatasubdivision[".inlineEditFields"][] = "department_id";
$tdatasubdivision[".inlineEditFields"][] = "total_resources";

$tdatasubdivision[".exportFields"] = array();
$tdatasubdivision[".exportFields"][] = "subdiv_id";
$tdatasubdivision[".exportFields"][] = "subdiv_name";
$tdatasubdivision[".exportFields"][] = "department_id";
$tdatasubdivision[".exportFields"][] = "total_resources";

$tdatasubdivision[".importFields"] = array();
$tdatasubdivision[".importFields"][] = "subdiv_id";
$tdatasubdivision[".importFields"][] = "subdiv_name";
$tdatasubdivision[".importFields"][] = "department_id";
$tdatasubdivision[".importFields"][] = "total_resources";

$tdatasubdivision[".printFields"] = array();
$tdatasubdivision[".printFields"][] = "subdiv_id";
$tdatasubdivision[".printFields"][] = "subdiv_name";
$tdatasubdivision[".printFields"][] = "department_id";
$tdatasubdivision[".printFields"][] = "total_resources";

//	subdiv_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "subdiv_id";
	$fdata["GoodName"] = "subdiv_id";
	$fdata["ownerTable"] = "subdivision";
	$fdata["Label"] = GetFieldLabel("subdivision","subdiv_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "subdiv_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subdiv_id";
	
		
		
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

	

	
	$tdatasubdivision["subdiv_id"] = $fdata;
//	subdiv_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "subdiv_name";
	$fdata["GoodName"] = "subdiv_name";
	$fdata["ownerTable"] = "subdivision";
	$fdata["Label"] = GetFieldLabel("subdivision","subdiv_name"); 
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
	
		$fdata["strField"] = "subdiv_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subdiv_name";
	
		
		
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

	

	
	$tdatasubdivision["subdiv_name"] = $fdata;
//	department_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "department_id";
	$fdata["GoodName"] = "department_id";
	$fdata["ownerTable"] = "subdivision";
	$fdata["Label"] = GetFieldLabel("subdivision","department_id"); 
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
	
		$fdata["strField"] = "department_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "department_id";
	
		
		
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
	$edata["LookupTable"] = "department";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "department_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "department_name";
	
		
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

	

	
	$tdatasubdivision["department_id"] = $fdata;
//	total_resources
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_resources";
	$fdata["GoodName"] = "total_resources";
	$fdata["ownerTable"] = "subdivision";
	$fdata["Label"] = GetFieldLabel("subdivision","total_resources"); 
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
	
		$fdata["strField"] = "total_resources"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_resources";
	
		
		
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

	

	
	$tdatasubdivision["total_resources"] = $fdata;

	
$tables_data["subdivision"]=&$tdatasubdivision;
$field_labels["subdivision"] = &$fieldLabelssubdivision;
$fieldToolTips["subdivision"] = &$fieldToolTipssubdivision;
$page_titles["subdivision"] = &$pageTitlessubdivision;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["subdivision"] = array();
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
			
	$detailsTablesData["subdivision"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["subdivision"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["subdivision"][$dIndex]["masterKeys"][]="subdiv_id";

				$detailsTablesData["subdivision"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["subdivision"][$dIndex]["detailKeys"][]="subdiv_id";
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
			
	$detailsTablesData["subdivision"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["subdivision"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["subdivision"][$dIndex]["masterKeys"][]="subdiv_id";

				$detailsTablesData["subdivision"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["subdivision"][$dIndex]["detailKeys"][]="subdiv_id";
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
			
	$detailsTablesData["subdivision"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["subdivision"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["subdivision"][$dIndex]["masterKeys"][]="subdiv_id";

				$detailsTablesData["subdivision"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["subdivision"][$dIndex]["detailKeys"][]="subdiv_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["subdivision"] = array();


	
				$strOriginalDetailsTable="department";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="department";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "department";
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
					$masterTablesData["subdivision"][0] = $masterParams;	
				$masterTablesData["subdivision"][0]["masterKeys"] = array();
	$masterTablesData["subdivision"][0]["masterKeys"][]="department_id";
				$masterTablesData["subdivision"][0]["detailKeys"] = array();
	$masterTablesData["subdivision"][0]["detailKeys"][]="department_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_subdivision()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "subdiv_id,  	subdiv_name,  	department_id,  	total_resources";
$proto0["m_strFrom"] = "FROM subdivision";
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
	"m_strName" => "subdiv_id",
	"m_strTable" => "subdivision",
	"m_srcTableName" => "subdivision"
));

$proto5["m_sql"] = "subdiv_id";
$proto5["m_srcTableName"] = "subdivision";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "subdiv_name",
	"m_strTable" => "subdivision",
	"m_srcTableName" => "subdivision"
));

$proto7["m_sql"] = "subdiv_name";
$proto7["m_srcTableName"] = "subdivision";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "department_id",
	"m_strTable" => "subdivision",
	"m_srcTableName" => "subdivision"
));

$proto9["m_sql"] = "department_id";
$proto9["m_srcTableName"] = "subdivision";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "total_resources",
	"m_strTable" => "subdivision",
	"m_srcTableName" => "subdivision"
));

$proto11["m_sql"] = "total_resources";
$proto11["m_srcTableName"] = "subdivision";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "subdivision";
$proto14["m_srcTableName"] = "subdivision";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "subdiv_id";
$proto14["m_columns"][] = "subdiv_name";
$proto14["m_columns"][] = "department_id";
$proto14["m_columns"][] = "total_resources";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "subdivision";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "subdivision";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="subdivision";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_subdivision = createSqlQuery_subdivision();


	
				
	
$tdatasubdivision[".sqlquery"] = $queryData_subdivision;

$tableEvents["subdivision"] = new eventsBase;
$tdatasubdivision[".hasEvents"] = false;

?>