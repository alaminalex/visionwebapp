<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacustompages = array();	
	$tdatacustompages[".truncateText"] = true;
	$tdatacustompages[".NumberOfChars"] = 80; 
	$tdatacustompages[".ShortName"] = "custompages";
	$tdatacustompages[".OwnerID"] = "";
	$tdatacustompages[".OriginalTable"] = "custompages";

//	field labels
$fieldLabelscustompages = array();
$fieldToolTipscustompages = array();
$pageTitlescustompages = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustompages["English"] = array();
	$fieldToolTipscustompages["English"] = array();
	$pageTitlescustompages["English"] = array();
	$fieldLabelscustompages["English"]["ID"] = "ID";
	$fieldToolTipscustompages["English"]["ID"] = "";
	$fieldLabelscustompages["English"]["button_name"] = "Button Name";
	$fieldToolTipscustompages["English"]["button_name"] = "";
	$fieldLabelscustompages["English"]["button_disctiption"] = "Button Disctiption";
	$fieldToolTipscustompages["English"]["button_disctiption"] = "";
	if (count($fieldToolTipscustompages["English"]))
		$tdatacustompages[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscustompages[""] = array();
	$fieldToolTipscustompages[""] = array();
	$pageTitlescustompages[""] = array();
	if (count($fieldToolTipscustompages[""]))
		$tdatacustompages[".isUseToolTips"] = true;
}
	
	
	$tdatacustompages[".NCSearch"] = true;



$tdatacustompages[".shortTableName"] = "custompages";
$tdatacustompages[".nSecOptions"] = 0;
$tdatacustompages[".recsPerRowList"] = 1;
$tdatacustompages[".recsPerRowPrint"] = 1;
$tdatacustompages[".mainTableOwnerID"] = "";
$tdatacustompages[".moveNext"] = 1;
$tdatacustompages[".entityType"] = 0;

$tdatacustompages[".strOriginalTableName"] = "custompages";




$tdatacustompages[".showAddInPopup"] = false;

$tdatacustompages[".showEditInPopup"] = false;

$tdatacustompages[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacustompages[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacustompages[".fieldsForRegister"] = array();

$tdatacustompages[".listAjax"] = false;

	$tdatacustompages[".audit"] = false;

	$tdatacustompages[".locking"] = false;



$tdatacustompages[".list"] = true;






$tdatacustompages[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacustompages[".searchSaving"] = false;
//

$tdatacustompages[".showSearchPanel"] = true;
		$tdatacustompages[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacustompages[".isUseAjaxSuggest"] = false;
else 
	$tdatacustompages[".isUseAjaxSuggest"] = true;

$tdatacustompages[".rowHighlite"] = true;


																																																																																				
			
			
			
																																							
																					$tdatacustompages[".isUsebuttonHandlers"] = true;

$tdatacustompages[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustompages[".isUseTimeForSearch"] = false;





$tdatacustompages[".allSearchFields"] = array();
$tdatacustompages[".filterFields"] = array();
$tdatacustompages[".requiredSearchFields"] = array();

$tdatacustompages[".allSearchFields"][] = "ID";
	$tdatacustompages[".allSearchFields"][] = "button_name";
	$tdatacustompages[".allSearchFields"][] = "button_disctiption";
	

$tdatacustompages[".googleLikeFields"] = array();
$tdatacustompages[".googleLikeFields"][] = "ID";
$tdatacustompages[".googleLikeFields"][] = "button_name";
$tdatacustompages[".googleLikeFields"][] = "button_disctiption";


$tdatacustompages[".advSearchFields"] = array();
$tdatacustompages[".advSearchFields"][] = "ID";
$tdatacustompages[".advSearchFields"][] = "button_name";
$tdatacustompages[".advSearchFields"][] = "button_disctiption";

$tdatacustompages[".tableType"] = "list";

$tdatacustompages[".printerPageOrientation"] = 0;
$tdatacustompages[".nPrinterPageScale"] = 100;

$tdatacustompages[".nPrinterSplitRecords"] = 40;

$tdatacustompages[".nPrinterPDFSplitRecords"] = 40;



$tdatacustompages[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatacustompages[".pageSize"] = 20;

$tdatacustompages[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacustompages[".strOrderBy"] = $tstrOrderBy;

$tdatacustompages[".orderindexes"] = array();

$tdatacustompages[".sqlHead"] = "SELECT ID,  	button_name,  	button_disctiption";
$tdatacustompages[".sqlFrom"] = "FROM custompages";
$tdatacustompages[".sqlWhereExpr"] = "";
$tdatacustompages[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustompages[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustompages[".arrGroupsPerPage"] = $arrGPP;

$tdatacustompages[".highlightSearchResults"] = true;

$tableKeyscustompages = array();
$tableKeyscustompages[] = "ID";
$tdatacustompages[".Keys"] = $tableKeyscustompages;

$tdatacustompages[".listFields"] = array();
$tdatacustompages[".listFields"][] = "ID";
$tdatacustompages[".listFields"][] = "button_name";
$tdatacustompages[".listFields"][] = "button_disctiption";

$tdatacustompages[".hideMobileList"] = array();


$tdatacustompages[".viewFields"] = array();

$tdatacustompages[".addFields"] = array();

$tdatacustompages[".masterListFields"] = array();
$tdatacustompages[".masterListFields"][] = "ID";
$tdatacustompages[".masterListFields"][] = "button_name";
$tdatacustompages[".masterListFields"][] = "button_disctiption";

$tdatacustompages[".inlineAddFields"] = array();

$tdatacustompages[".editFields"] = array();

$tdatacustompages[".inlineEditFields"] = array();

$tdatacustompages[".exportFields"] = array();

$tdatacustompages[".importFields"] = array();

$tdatacustompages[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "custompages";
	$fdata["Label"] = GetFieldLabel("custompages","ID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";
	
		
		
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

	

	
	$tdatacustompages["ID"] = $fdata;
//	button_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "button_name";
	$fdata["GoodName"] = "button_name";
	$fdata["ownerTable"] = "custompages";
	$fdata["Label"] = GetFieldLabel("custompages","button_name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "button_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "button_name";
	
		
		
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

	

	
	$tdatacustompages["button_name"] = $fdata;
//	button_disctiption
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "button_disctiption";
	$fdata["GoodName"] = "button_disctiption";
	$fdata["ownerTable"] = "custompages";
	$fdata["Label"] = GetFieldLabel("custompages","button_disctiption"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "button_disctiption"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "button_disctiption";
	
		
		
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

	

	
	$tdatacustompages["button_disctiption"] = $fdata;

	
$tables_data["custompages"]=&$tdatacustompages;
$field_labels["custompages"] = &$fieldLabelscustompages;
$fieldToolTips["custompages"] = &$fieldToolTipscustompages;
$page_titles["custompages"] = &$pageTitlescustompages;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["custompages"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["custompages"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_custompages()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	button_name,  	button_disctiption";
$proto0["m_strFrom"] = "FROM custompages";
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
	"m_strName" => "ID",
	"m_strTable" => "custompages",
	"m_srcTableName" => "custompages"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "custompages";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "button_name",
	"m_strTable" => "custompages",
	"m_srcTableName" => "custompages"
));

$proto7["m_sql"] = "button_name";
$proto7["m_srcTableName"] = "custompages";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "button_disctiption",
	"m_strTable" => "custompages",
	"m_srcTableName" => "custompages"
));

$proto9["m_sql"] = "button_disctiption";
$proto9["m_srcTableName"] = "custompages";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "custompages";
$proto12["m_srcTableName"] = "custompages";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "ID";
$proto12["m_columns"][] = "button_name";
$proto12["m_columns"][] = "button_disctiption";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "custompages";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "custompages";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="custompages";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_custompages = createSqlQuery_custompages();


	
			
	
$tdatacustompages[".sqlquery"] = $queryData_custompages;

include_once(getabspath("include/custompages_events.php"));
$tableEvents["custompages"] = new eventclass_custompages;
$tdatacustompages[".hasEvents"] = true;

?>