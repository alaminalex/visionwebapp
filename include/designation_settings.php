<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadesignation = array();	
	$tdatadesignation[".truncateText"] = true;
	$tdatadesignation[".NumberOfChars"] = 80; 
	$tdatadesignation[".ShortName"] = "designation";
	$tdatadesignation[".OwnerID"] = "";
	$tdatadesignation[".OriginalTable"] = "designation";

//	field labels
$fieldLabelsdesignation = array();
$fieldToolTipsdesignation = array();
$pageTitlesdesignation = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdesignation["English"] = array();
	$fieldToolTipsdesignation["English"] = array();
	$pageTitlesdesignation["English"] = array();
	$fieldLabelsdesignation["English"]["id"] = "Id";
	$fieldToolTipsdesignation["English"]["id"] = "";
	$fieldLabelsdesignation["English"]["Designation"] = "Designation";
	$fieldToolTipsdesignation["English"]["Designation"] = "";
	$fieldLabelsdesignation["English"]["Discription"] = "Discription";
	$fieldToolTipsdesignation["English"]["Discription"] = "";
	if (count($fieldToolTipsdesignation["English"]))
		$tdatadesignation[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdesignation[""] = array();
	$fieldToolTipsdesignation[""] = array();
	$pageTitlesdesignation[""] = array();
	if (count($fieldToolTipsdesignation[""]))
		$tdatadesignation[".isUseToolTips"] = true;
}
	
	
	$tdatadesignation[".NCSearch"] = true;



$tdatadesignation[".shortTableName"] = "designation";
$tdatadesignation[".nSecOptions"] = 0;
$tdatadesignation[".recsPerRowList"] = 1;
$tdatadesignation[".recsPerRowPrint"] = 1;
$tdatadesignation[".mainTableOwnerID"] = "";
$tdatadesignation[".moveNext"] = 1;
$tdatadesignation[".entityType"] = 0;

$tdatadesignation[".strOriginalTableName"] = "designation";




$tdatadesignation[".showAddInPopup"] = false;

$tdatadesignation[".showEditInPopup"] = false;

$tdatadesignation[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadesignation[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadesignation[".fieldsForRegister"] = array();

$tdatadesignation[".listAjax"] = false;

	$tdatadesignation[".audit"] = false;

	$tdatadesignation[".locking"] = false;

$tdatadesignation[".edit"] = true;
$tdatadesignation[".afterEditAction"] = 1;
$tdatadesignation[".closePopupAfterEdit"] = 1;
$tdatadesignation[".afterEditActionDetTable"] = "";

$tdatadesignation[".add"] = true;
$tdatadesignation[".afterAddAction"] = 0;
$tdatadesignation[".closePopupAfterAdd"] = 1;
$tdatadesignation[".afterAddActionDetTable"] = "";

$tdatadesignation[".list"] = true;

$tdatadesignation[".inlineEdit"] = true;
$tdatadesignation[".view"] = true;

$tdatadesignation[".import"] = true;

$tdatadesignation[".exportTo"] = true;

$tdatadesignation[".printFriendly"] = true;

$tdatadesignation[".delete"] = true;

$tdatadesignation[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatadesignation[".searchSaving"] = false;
//

$tdatadesignation[".showSearchPanel"] = true;
		$tdatadesignation[".flexibleSearch"] = true;		

if (isMobile())
	$tdatadesignation[".isUseAjaxSuggest"] = false;
else 
	$tdatadesignation[".isUseAjaxSuggest"] = true;

$tdatadesignation[".rowHighlite"] = true;


																																																																																																																																															
$tdatadesignation[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadesignation[".isUseTimeForSearch"] = false;





$tdatadesignation[".allSearchFields"] = array();
$tdatadesignation[".filterFields"] = array();
$tdatadesignation[".requiredSearchFields"] = array();

$tdatadesignation[".allSearchFields"][] = "id";
	$tdatadesignation[".allSearchFields"][] = "Designation";
	$tdatadesignation[".allSearchFields"][] = "Discription";
	

$tdatadesignation[".googleLikeFields"] = array();
$tdatadesignation[".googleLikeFields"][] = "id";
$tdatadesignation[".googleLikeFields"][] = "Designation";
$tdatadesignation[".googleLikeFields"][] = "Discription";


$tdatadesignation[".advSearchFields"] = array();
$tdatadesignation[".advSearchFields"][] = "id";
$tdatadesignation[".advSearchFields"][] = "Designation";
$tdatadesignation[".advSearchFields"][] = "Discription";

$tdatadesignation[".tableType"] = "list";

$tdatadesignation[".printerPageOrientation"] = 0;
$tdatadesignation[".nPrinterPageScale"] = 100;

$tdatadesignation[".nPrinterSplitRecords"] = 40;

$tdatadesignation[".nPrinterPDFSplitRecords"] = 40;



$tdatadesignation[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatadesignation[".pageSize"] = 20;

$tdatadesignation[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadesignation[".strOrderBy"] = $tstrOrderBy;

$tdatadesignation[".orderindexes"] = array();

$tdatadesignation[".sqlHead"] = "SELECT id,  	Designation,  	Discription";
$tdatadesignation[".sqlFrom"] = "FROM designation";
$tdatadesignation[".sqlWhereExpr"] = "";
$tdatadesignation[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadesignation[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadesignation[".arrGroupsPerPage"] = $arrGPP;

$tdatadesignation[".highlightSearchResults"] = true;

$tableKeysdesignation = array();
$tableKeysdesignation[] = "id";
$tdatadesignation[".Keys"] = $tableKeysdesignation;

$tdatadesignation[".listFields"] = array();
$tdatadesignation[".listFields"][] = "id";
$tdatadesignation[".listFields"][] = "Designation";
$tdatadesignation[".listFields"][] = "Discription";

$tdatadesignation[".hideMobileList"] = array();


$tdatadesignation[".viewFields"] = array();
$tdatadesignation[".viewFields"][] = "id";
$tdatadesignation[".viewFields"][] = "Designation";
$tdatadesignation[".viewFields"][] = "Discription";

$tdatadesignation[".addFields"] = array();
$tdatadesignation[".addFields"][] = "Designation";
$tdatadesignation[".addFields"][] = "Discription";

$tdatadesignation[".masterListFields"] = array();
$tdatadesignation[".masterListFields"][] = "id";
$tdatadesignation[".masterListFields"][] = "Designation";
$tdatadesignation[".masterListFields"][] = "Discription";

$tdatadesignation[".inlineAddFields"] = array();

$tdatadesignation[".editFields"] = array();
$tdatadesignation[".editFields"][] = "Designation";
$tdatadesignation[".editFields"][] = "Discription";

$tdatadesignation[".inlineEditFields"] = array();
$tdatadesignation[".inlineEditFields"][] = "Designation";
$tdatadesignation[".inlineEditFields"][] = "Discription";

$tdatadesignation[".exportFields"] = array();
$tdatadesignation[".exportFields"][] = "id";
$tdatadesignation[".exportFields"][] = "Designation";
$tdatadesignation[".exportFields"][] = "Discription";

$tdatadesignation[".importFields"] = array();
$tdatadesignation[".importFields"][] = "id";
$tdatadesignation[".importFields"][] = "Designation";
$tdatadesignation[".importFields"][] = "Discription";

$tdatadesignation[".printFields"] = array();
$tdatadesignation[".printFields"][] = "id";
$tdatadesignation[".printFields"][] = "Designation";
$tdatadesignation[".printFields"][] = "Discription";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "designation";
	$fdata["Label"] = GetFieldLabel("designation","id"); 
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

	

	
	$tdatadesignation["id"] = $fdata;
//	Designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Designation";
	$fdata["GoodName"] = "Designation";
	$fdata["ownerTable"] = "designation";
	$fdata["Label"] = GetFieldLabel("designation","Designation"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Designation"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Designation";
	
		
		
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

	

	
	$tdatadesignation["Designation"] = $fdata;
//	Discription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Discription";
	$fdata["GoodName"] = "Discription";
	$fdata["ownerTable"] = "designation";
	$fdata["Label"] = GetFieldLabel("designation","Discription"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Discription"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Discription";
	
		
		
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

	

	
	$tdatadesignation["Discription"] = $fdata;

	
$tables_data["designation"]=&$tdatadesignation;
$field_labels["designation"] = &$fieldLabelsdesignation;
$fieldToolTips["designation"] = &$fieldToolTipsdesignation;
$page_titles["designation"] = &$pageTitlesdesignation;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["designation"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["designation"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_designation()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	Designation,  	Discription";
$proto0["m_strFrom"] = "FROM designation";
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
	"m_strTable" => "designation",
	"m_srcTableName" => "designation"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "designation";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Designation",
	"m_strTable" => "designation",
	"m_srcTableName" => "designation"
));

$proto7["m_sql"] = "Designation";
$proto7["m_srcTableName"] = "designation";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Discription",
	"m_strTable" => "designation",
	"m_srcTableName" => "designation"
));

$proto9["m_sql"] = "Discription";
$proto9["m_srcTableName"] = "designation";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "designation";
$proto12["m_srcTableName"] = "designation";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "Designation";
$proto12["m_columns"][] = "Discription";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "designation";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "designation";
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
$proto0["m_srcTableName"]="designation";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_designation = createSqlQuery_designation();


	
			
	
$tdatadesignation[".sqlquery"] = $queryData_designation;

$tableEvents["designation"] = new eventsBase;
$tdatadesignation[".hasEvents"] = false;

?>