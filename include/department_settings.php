<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadepartment = array();	
	$tdatadepartment[".truncateText"] = true;
	$tdatadepartment[".NumberOfChars"] = 80; 
	$tdatadepartment[".ShortName"] = "department";
	$tdatadepartment[".OwnerID"] = "";
	$tdatadepartment[".OriginalTable"] = "department";

//	field labels
$fieldLabelsdepartment = array();
$fieldToolTipsdepartment = array();
$pageTitlesdepartment = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdepartment["English"] = array();
	$fieldToolTipsdepartment["English"] = array();
	$pageTitlesdepartment["English"] = array();
	$fieldLabelsdepartment["English"]["department_id"] = "Department Id";
	$fieldToolTipsdepartment["English"]["department_id"] = "";
	$fieldLabelsdepartment["English"]["department_name"] = "Department Name";
	$fieldToolTipsdepartment["English"]["department_name"] = "";
	$fieldLabelsdepartment["English"]["department_detail"] = "Department Detail";
	$fieldToolTipsdepartment["English"]["department_detail"] = "";
	$fieldLabelsdepartment["English"]["total_subdiv"] = "Total Subdiv";
	$fieldToolTipsdepartment["English"]["total_subdiv"] = "";
	$fieldLabelsdepartment["English"]["total_resources"] = "Total Resources";
	$fieldToolTipsdepartment["English"]["total_resources"] = "";
	if (count($fieldToolTipsdepartment["English"]))
		$tdatadepartment[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdepartment[""] = array();
	$fieldToolTipsdepartment[""] = array();
	$pageTitlesdepartment[""] = array();
	if (count($fieldToolTipsdepartment[""]))
		$tdatadepartment[".isUseToolTips"] = true;
}
	
	
	$tdatadepartment[".NCSearch"] = true;



$tdatadepartment[".shortTableName"] = "department";
$tdatadepartment[".nSecOptions"] = 0;
$tdatadepartment[".recsPerRowList"] = 1;
$tdatadepartment[".recsPerRowPrint"] = 1;
$tdatadepartment[".mainTableOwnerID"] = "";
$tdatadepartment[".moveNext"] = 1;
$tdatadepartment[".entityType"] = 0;

$tdatadepartment[".strOriginalTableName"] = "department";




$tdatadepartment[".showAddInPopup"] = false;

$tdatadepartment[".showEditInPopup"] = false;

$tdatadepartment[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadepartment[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadepartment[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatadepartment[".listAjax"] = true;
else 
	$tdatadepartment[".listAjax"] = false;

	$tdatadepartment[".audit"] = false;

	$tdatadepartment[".locking"] = false;

$tdatadepartment[".edit"] = true;
$tdatadepartment[".afterEditAction"] = 1;
$tdatadepartment[".closePopupAfterEdit"] = 1;
$tdatadepartment[".afterEditActionDetTable"] = "";

$tdatadepartment[".add"] = true;
$tdatadepartment[".afterAddAction"] = 0;
$tdatadepartment[".closePopupAfterAdd"] = 1;
$tdatadepartment[".afterAddActionDetTable"] = "";

$tdatadepartment[".list"] = true;

$tdatadepartment[".view"] = true;

$tdatadepartment[".import"] = true;

$tdatadepartment[".exportTo"] = true;

$tdatadepartment[".printFriendly"] = true;

$tdatadepartment[".delete"] = true;

$tdatadepartment[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatadepartment[".searchSaving"] = false;
//

$tdatadepartment[".showSearchPanel"] = true;
		$tdatadepartment[".flexibleSearch"] = true;		

if (isMobile())
	$tdatadepartment[".isUseAjaxSuggest"] = false;
else 
	$tdatadepartment[".isUseAjaxSuggest"] = true;

$tdatadepartment[".rowHighlite"] = true;


																																																																																																																																															
$tdatadepartment[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadepartment[".isUseTimeForSearch"] = false;




$tdatadepartment[".detailsLinksOnList"] = "1";

$tdatadepartment[".allSearchFields"] = array();
$tdatadepartment[".filterFields"] = array();
$tdatadepartment[".requiredSearchFields"] = array();

$tdatadepartment[".allSearchFields"][] = "department_id";
	$tdatadepartment[".allSearchFields"][] = "department_name";
	$tdatadepartment[".allSearchFields"][] = "department_detail";
	$tdatadepartment[".allSearchFields"][] = "total_subdiv";
	$tdatadepartment[".allSearchFields"][] = "total_resources";
	

$tdatadepartment[".googleLikeFields"] = array();
$tdatadepartment[".googleLikeFields"][] = "department_id";
$tdatadepartment[".googleLikeFields"][] = "department_name";
$tdatadepartment[".googleLikeFields"][] = "department_detail";
$tdatadepartment[".googleLikeFields"][] = "total_subdiv";
$tdatadepartment[".googleLikeFields"][] = "total_resources";


$tdatadepartment[".advSearchFields"] = array();
$tdatadepartment[".advSearchFields"][] = "department_id";
$tdatadepartment[".advSearchFields"][] = "department_name";
$tdatadepartment[".advSearchFields"][] = "department_detail";
$tdatadepartment[".advSearchFields"][] = "total_subdiv";
$tdatadepartment[".advSearchFields"][] = "total_resources";

$tdatadepartment[".tableType"] = "list";

$tdatadepartment[".printerPageOrientation"] = 0;
$tdatadepartment[".nPrinterPageScale"] = 100;

$tdatadepartment[".nPrinterSplitRecords"] = 40;

$tdatadepartment[".nPrinterPDFSplitRecords"] = 40;



$tdatadepartment[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatadepartment[".pageSize"] = 20;

$tdatadepartment[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadepartment[".strOrderBy"] = $tstrOrderBy;

$tdatadepartment[".orderindexes"] = array();

$tdatadepartment[".sqlHead"] = "SELECT department_id,  	department_name,  	department_detail,  	total_subdiv,  	total_resources";
$tdatadepartment[".sqlFrom"] = "FROM department";
$tdatadepartment[".sqlWhereExpr"] = "";
$tdatadepartment[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadepartment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadepartment[".arrGroupsPerPage"] = $arrGPP;

$tdatadepartment[".highlightSearchResults"] = true;

$tableKeysdepartment = array();
$tableKeysdepartment[] = "department_id";
$tdatadepartment[".Keys"] = $tableKeysdepartment;

$tdatadepartment[".listFields"] = array();
$tdatadepartment[".listFields"][] = "department_id";
$tdatadepartment[".listFields"][] = "department_name";
$tdatadepartment[".listFields"][] = "department_detail";
$tdatadepartment[".listFields"][] = "total_subdiv";
$tdatadepartment[".listFields"][] = "total_resources";

$tdatadepartment[".hideMobileList"] = array();


$tdatadepartment[".viewFields"] = array();
$tdatadepartment[".viewFields"][] = "department_id";
$tdatadepartment[".viewFields"][] = "department_name";
$tdatadepartment[".viewFields"][] = "department_detail";
$tdatadepartment[".viewFields"][] = "total_subdiv";
$tdatadepartment[".viewFields"][] = "total_resources";

$tdatadepartment[".addFields"] = array();
$tdatadepartment[".addFields"][] = "department_name";
$tdatadepartment[".addFields"][] = "department_detail";
$tdatadepartment[".addFields"][] = "total_subdiv";
$tdatadepartment[".addFields"][] = "total_resources";

$tdatadepartment[".masterListFields"] = array();
$tdatadepartment[".masterListFields"][] = "department_id";
$tdatadepartment[".masterListFields"][] = "department_name";
$tdatadepartment[".masterListFields"][] = "department_detail";
$tdatadepartment[".masterListFields"][] = "total_subdiv";
$tdatadepartment[".masterListFields"][] = "total_resources";

$tdatadepartment[".inlineAddFields"] = array();

$tdatadepartment[".editFields"] = array();
$tdatadepartment[".editFields"][] = "department_name";
$tdatadepartment[".editFields"][] = "department_detail";
$tdatadepartment[".editFields"][] = "total_subdiv";
$tdatadepartment[".editFields"][] = "total_resources";

$tdatadepartment[".inlineEditFields"] = array();

$tdatadepartment[".exportFields"] = array();
$tdatadepartment[".exportFields"][] = "department_id";
$tdatadepartment[".exportFields"][] = "department_name";
$tdatadepartment[".exportFields"][] = "department_detail";
$tdatadepartment[".exportFields"][] = "total_subdiv";
$tdatadepartment[".exportFields"][] = "total_resources";

$tdatadepartment[".importFields"] = array();
$tdatadepartment[".importFields"][] = "department_id";
$tdatadepartment[".importFields"][] = "department_name";
$tdatadepartment[".importFields"][] = "department_detail";
$tdatadepartment[".importFields"][] = "total_subdiv";
$tdatadepartment[".importFields"][] = "total_resources";

$tdatadepartment[".printFields"] = array();
$tdatadepartment[".printFields"][] = "department_id";
$tdatadepartment[".printFields"][] = "department_name";
$tdatadepartment[".printFields"][] = "department_detail";
$tdatadepartment[".printFields"][] = "total_subdiv";
$tdatadepartment[".printFields"][] = "total_resources";

//	department_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "department_id";
	$fdata["GoodName"] = "department_id";
	$fdata["ownerTable"] = "department";
	$fdata["Label"] = GetFieldLabel("department","department_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatadepartment["department_id"] = $fdata;
//	department_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "department_name";
	$fdata["GoodName"] = "department_name";
	$fdata["ownerTable"] = "department";
	$fdata["Label"] = GetFieldLabel("department","department_name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "department_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "department_name";
	
		
		
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

	

	
	$tdatadepartment["department_name"] = $fdata;
//	department_detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "department_detail";
	$fdata["GoodName"] = "department_detail";
	$fdata["ownerTable"] = "department";
	$fdata["Label"] = GetFieldLabel("department","department_detail"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "department_detail"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "department_detail";
	
		
		
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

	

	
	$tdatadepartment["department_detail"] = $fdata;
//	total_subdiv
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_subdiv";
	$fdata["GoodName"] = "total_subdiv";
	$fdata["ownerTable"] = "department";
	$fdata["Label"] = GetFieldLabel("department","total_subdiv"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_subdiv"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_subdiv";
	
		
		
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

	

	
	$tdatadepartment["total_subdiv"] = $fdata;
//	total_resources
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total_resources";
	$fdata["GoodName"] = "total_resources";
	$fdata["ownerTable"] = "department";
	$fdata["Label"] = GetFieldLabel("department","total_resources"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatadepartment["total_resources"] = $fdata;

	
$tables_data["department"]=&$tdatadepartment;
$field_labels["department"] = &$fieldLabelsdepartment;
$fieldToolTips["department"] = &$fieldToolTipsdepartment;
$page_titles["department"] = &$pageTitlesdepartment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["department"] = array();
//	subdivision
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="subdivision";
		$detailsParam["dOriginalTable"] = "subdivision";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "subdivision";
	$detailsParam["dCaptionTable"] = GetTableCaption("subdivision");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["department"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["department"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["department"][$dIndex]["masterKeys"][]="department_id";

				$detailsTablesData["department"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["department"][$dIndex]["detailKeys"][]="department_id";
//	user
	
	

		$dIndex = 1;
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
			
	$detailsTablesData["department"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["department"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["department"][$dIndex]["masterKeys"][]="department_id";

				$detailsTablesData["department"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["department"][$dIndex]["detailKeys"][]="department_id";
//	Users
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Users";
		$detailsParam["dOriginalTable"] = "user";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Users";
	$detailsParam["dCaptionTable"] = GetTableCaption("Users");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["department"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["department"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["department"][$dIndex]["masterKeys"][]="department_id";

				$detailsTablesData["department"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["department"][$dIndex]["detailKeys"][]="department_id";
//	Team Report
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Team Report";
		$detailsParam["dOriginalTable"] = "user";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "Team_Report";
	$detailsParam["dCaptionTable"] = GetTableCaption("Team_Report");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["department"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["department"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["department"][$dIndex]["masterKeys"][]="department_id";

				$detailsTablesData["department"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["department"][$dIndex]["detailKeys"][]="department_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["department"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_department()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "department_id,  	department_name,  	department_detail,  	total_subdiv,  	total_resources";
$proto0["m_strFrom"] = "FROM department";
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
	"m_strName" => "department_id",
	"m_strTable" => "department",
	"m_srcTableName" => "department"
));

$proto5["m_sql"] = "department_id";
$proto5["m_srcTableName"] = "department";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "department_name",
	"m_strTable" => "department",
	"m_srcTableName" => "department"
));

$proto7["m_sql"] = "department_name";
$proto7["m_srcTableName"] = "department";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "department_detail",
	"m_strTable" => "department",
	"m_srcTableName" => "department"
));

$proto9["m_sql"] = "department_detail";
$proto9["m_srcTableName"] = "department";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "total_subdiv",
	"m_strTable" => "department",
	"m_srcTableName" => "department"
));

$proto11["m_sql"] = "total_subdiv";
$proto11["m_srcTableName"] = "department";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "total_resources",
	"m_strTable" => "department",
	"m_srcTableName" => "department"
));

$proto13["m_sql"] = "total_resources";
$proto13["m_srcTableName"] = "department";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "department";
$proto16["m_srcTableName"] = "department";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "department_id";
$proto16["m_columns"][] = "department_name";
$proto16["m_columns"][] = "department_detail";
$proto16["m_columns"][] = "total_subdiv";
$proto16["m_columns"][] = "total_resources";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "department";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "department";
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
$proto0["m_srcTableName"]="department";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_department = createSqlQuery_department();


	
					
	
$tdatadepartment[".sqlquery"] = $queryData_department;

$tableEvents["department"] = new eventsBase;
$tdatadepartment[".hasEvents"] = false;

?>