<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatype_of_errors = array();	
	$tdatatype_of_errors[".truncateText"] = true;
	$tdatatype_of_errors[".NumberOfChars"] = 80; 
	$tdatatype_of_errors[".ShortName"] = "type_of_errors";
	$tdatatype_of_errors[".OwnerID"] = "";
	$tdatatype_of_errors[".OriginalTable"] = "type_of_errors";

//	field labels
$fieldLabelstype_of_errors = array();
$fieldToolTipstype_of_errors = array();
$pageTitlestype_of_errors = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstype_of_errors["English"] = array();
	$fieldToolTipstype_of_errors["English"] = array();
	$pageTitlestype_of_errors["English"] = array();
	$fieldLabelstype_of_errors["English"]["id"] = "Id";
	$fieldToolTipstype_of_errors["English"]["id"] = "";
	$fieldLabelstype_of_errors["English"]["type_of_error"] = "Type Of Error";
	$fieldToolTipstype_of_errors["English"]["type_of_error"] = "";
	$fieldLabelstype_of_errors["English"]["discription"] = "Discription";
	$fieldToolTipstype_of_errors["English"]["discription"] = "";
	if (count($fieldToolTipstype_of_errors["English"]))
		$tdatatype_of_errors[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstype_of_errors[""] = array();
	$fieldToolTipstype_of_errors[""] = array();
	$pageTitlestype_of_errors[""] = array();
	if (count($fieldToolTipstype_of_errors[""]))
		$tdatatype_of_errors[".isUseToolTips"] = true;
}
	
	
	$tdatatype_of_errors[".NCSearch"] = true;



$tdatatype_of_errors[".shortTableName"] = "type_of_errors";
$tdatatype_of_errors[".nSecOptions"] = 0;
$tdatatype_of_errors[".recsPerRowList"] = 1;
$tdatatype_of_errors[".recsPerRowPrint"] = 1;
$tdatatype_of_errors[".mainTableOwnerID"] = "";
$tdatatype_of_errors[".moveNext"] = 1;
$tdatatype_of_errors[".entityType"] = 0;

$tdatatype_of_errors[".strOriginalTableName"] = "type_of_errors";




$tdatatype_of_errors[".showAddInPopup"] = false;

$tdatatype_of_errors[".showEditInPopup"] = false;

$tdatatype_of_errors[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatype_of_errors[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatype_of_errors[".fieldsForRegister"] = array();

$tdatatype_of_errors[".listAjax"] = false;

	$tdatatype_of_errors[".audit"] = false;

	$tdatatype_of_errors[".locking"] = false;

$tdatatype_of_errors[".edit"] = true;
$tdatatype_of_errors[".afterEditAction"] = 1;
$tdatatype_of_errors[".closePopupAfterEdit"] = 1;
$tdatatype_of_errors[".afterEditActionDetTable"] = "";

$tdatatype_of_errors[".add"] = true;
$tdatatype_of_errors[".afterAddAction"] = 0;
$tdatatype_of_errors[".closePopupAfterAdd"] = 1;
$tdatatype_of_errors[".afterAddActionDetTable"] = "";

$tdatatype_of_errors[".list"] = true;

$tdatatype_of_errors[".inlineEdit"] = true;
$tdatatype_of_errors[".inlineAdd"] = true;
$tdatatype_of_errors[".view"] = true;

$tdatatype_of_errors[".import"] = true;

$tdatatype_of_errors[".exportTo"] = true;

$tdatatype_of_errors[".printFriendly"] = true;

$tdatatype_of_errors[".delete"] = true;

$tdatatype_of_errors[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatype_of_errors[".searchSaving"] = false;
//

$tdatatype_of_errors[".showSearchPanel"] = true;
		$tdatatype_of_errors[".flexibleSearch"] = true;		

if (isMobile())
	$tdatatype_of_errors[".isUseAjaxSuggest"] = false;
else 
	$tdatatype_of_errors[".isUseAjaxSuggest"] = true;

$tdatatype_of_errors[".rowHighlite"] = true;


																																																																																																																																															
$tdatatype_of_errors[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatype_of_errors[".isUseTimeForSearch"] = false;





$tdatatype_of_errors[".allSearchFields"] = array();
$tdatatype_of_errors[".filterFields"] = array();
$tdatatype_of_errors[".requiredSearchFields"] = array();

$tdatatype_of_errors[".allSearchFields"][] = "id";
	$tdatatype_of_errors[".allSearchFields"][] = "type_of_error";
	

$tdatatype_of_errors[".googleLikeFields"] = array();
$tdatatype_of_errors[".googleLikeFields"][] = "id";
$tdatatype_of_errors[".googleLikeFields"][] = "type_of_error";
$tdatatype_of_errors[".googleLikeFields"][] = "discription";


$tdatatype_of_errors[".advSearchFields"] = array();
$tdatatype_of_errors[".advSearchFields"][] = "id";
$tdatatype_of_errors[".advSearchFields"][] = "type_of_error";

$tdatatype_of_errors[".tableType"] = "list";

$tdatatype_of_errors[".printerPageOrientation"] = 0;
$tdatatype_of_errors[".nPrinterPageScale"] = 100;

$tdatatype_of_errors[".nPrinterSplitRecords"] = 40;

$tdatatype_of_errors[".nPrinterPDFSplitRecords"] = 40;



$tdatatype_of_errors[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatatype_of_errors[".pageSize"] = 20;

$tdatatype_of_errors[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatype_of_errors[".strOrderBy"] = $tstrOrderBy;

$tdatatype_of_errors[".orderindexes"] = array();

$tdatatype_of_errors[".sqlHead"] = "SELECT id,  	type_of_error,  	discription";
$tdatatype_of_errors[".sqlFrom"] = "FROM type_of_errors";
$tdatatype_of_errors[".sqlWhereExpr"] = "";
$tdatatype_of_errors[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatype_of_errors[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatype_of_errors[".arrGroupsPerPage"] = $arrGPP;

$tdatatype_of_errors[".highlightSearchResults"] = true;

$tableKeystype_of_errors = array();
$tableKeystype_of_errors[] = "id";
$tdatatype_of_errors[".Keys"] = $tableKeystype_of_errors;

$tdatatype_of_errors[".listFields"] = array();
$tdatatype_of_errors[".listFields"][] = "id";
$tdatatype_of_errors[".listFields"][] = "type_of_error";
$tdatatype_of_errors[".listFields"][] = "discription";

$tdatatype_of_errors[".hideMobileList"] = array();


$tdatatype_of_errors[".viewFields"] = array();
$tdatatype_of_errors[".viewFields"][] = "id";
$tdatatype_of_errors[".viewFields"][] = "type_of_error";
$tdatatype_of_errors[".viewFields"][] = "discription";

$tdatatype_of_errors[".addFields"] = array();
$tdatatype_of_errors[".addFields"][] = "type_of_error";
$tdatatype_of_errors[".addFields"][] = "discription";

$tdatatype_of_errors[".masterListFields"] = array();
$tdatatype_of_errors[".masterListFields"][] = "id";
$tdatatype_of_errors[".masterListFields"][] = "type_of_error";
$tdatatype_of_errors[".masterListFields"][] = "discription";

$tdatatype_of_errors[".inlineAddFields"] = array();
$tdatatype_of_errors[".inlineAddFields"][] = "type_of_error";
$tdatatype_of_errors[".inlineAddFields"][] = "discription";

$tdatatype_of_errors[".editFields"] = array();
$tdatatype_of_errors[".editFields"][] = "type_of_error";
$tdatatype_of_errors[".editFields"][] = "discription";

$tdatatype_of_errors[".inlineEditFields"] = array();
$tdatatype_of_errors[".inlineEditFields"][] = "type_of_error";
$tdatatype_of_errors[".inlineEditFields"][] = "discription";

$tdatatype_of_errors[".exportFields"] = array();
$tdatatype_of_errors[".exportFields"][] = "id";
$tdatatype_of_errors[".exportFields"][] = "type_of_error";

$tdatatype_of_errors[".importFields"] = array();
$tdatatype_of_errors[".importFields"][] = "id";
$tdatatype_of_errors[".importFields"][] = "type_of_error";

$tdatatype_of_errors[".printFields"] = array();
$tdatatype_of_errors[".printFields"][] = "id";
$tdatatype_of_errors[".printFields"][] = "type_of_error";
$tdatatype_of_errors[".printFields"][] = "discription";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "type_of_errors";
	$fdata["Label"] = GetFieldLabel("type_of_errors","id"); 
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

	

	
	$tdatatype_of_errors["id"] = $fdata;
//	type_of_error
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "type_of_error";
	$fdata["GoodName"] = "type_of_error";
	$fdata["ownerTable"] = "type_of_errors";
	$fdata["Label"] = GetFieldLabel("type_of_errors","type_of_error"); 
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
	
		$fdata["strField"] = "type_of_error"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "type_of_error";
	
		
		
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
			$edata["EditParams"].= " maxlength=256";
	
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

	

	
	$tdatatype_of_errors["type_of_error"] = $fdata;
//	discription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "discription";
	$fdata["GoodName"] = "discription";
	$fdata["ownerTable"] = "type_of_errors";
	$fdata["Label"] = GetFieldLabel("type_of_errors","discription"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "discription"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "discription";
	
		
		
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
	
	
	
	

	

	
	$tdatatype_of_errors["discription"] = $fdata;

	
$tables_data["type_of_errors"]=&$tdatatype_of_errors;
$field_labels["type_of_errors"] = &$fieldLabelstype_of_errors;
$fieldToolTips["type_of_errors"] = &$fieldToolTipstype_of_errors;
$page_titles["type_of_errors"] = &$pageTitlestype_of_errors;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["type_of_errors"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["type_of_errors"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_type_of_errors()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	type_of_error,  	discription";
$proto0["m_strFrom"] = "FROM type_of_errors";
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
	"m_strTable" => "type_of_errors",
	"m_srcTableName" => "type_of_errors"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "type_of_errors";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "type_of_error",
	"m_strTable" => "type_of_errors",
	"m_srcTableName" => "type_of_errors"
));

$proto7["m_sql"] = "type_of_error";
$proto7["m_srcTableName"] = "type_of_errors";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "discription",
	"m_strTable" => "type_of_errors",
	"m_srcTableName" => "type_of_errors"
));

$proto9["m_sql"] = "discription";
$proto9["m_srcTableName"] = "type_of_errors";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "type_of_errors";
$proto12["m_srcTableName"] = "type_of_errors";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "type_of_error";
$proto12["m_columns"][] = "discription";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "type_of_errors";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "type_of_errors";
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
$proto0["m_srcTableName"]="type_of_errors";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_type_of_errors = createSqlQuery_type_of_errors();


	
			
	
$tdatatype_of_errors[".sqlquery"] = $queryData_type_of_errors;

$tableEvents["type_of_errors"] = new eventsBase;
$tdatatype_of_errors[".hasEvents"] = false;

?>