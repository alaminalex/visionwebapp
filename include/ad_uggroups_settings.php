<?php
require_once(getabspath("classes/cipherer.php"));




$tdataad_uggroups = array();	
	$tdataad_uggroups[".truncateText"] = true;
	$tdataad_uggroups[".NumberOfChars"] = 80; 
	$tdataad_uggroups[".ShortName"] = "ad_uggroups";
	$tdataad_uggroups[".OwnerID"] = "";
	$tdataad_uggroups[".OriginalTable"] = "ad_uggroups";

//	field labels
$fieldLabelsad_uggroups = array();
$fieldToolTipsad_uggroups = array();
$pageTitlesad_uggroups = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsad_uggroups["English"] = array();
	$fieldToolTipsad_uggroups["English"] = array();
	$pageTitlesad_uggroups["English"] = array();
	$fieldLabelsad_uggroups["English"]["GroupID"] = "Group ID";
	$fieldToolTipsad_uggroups["English"]["GroupID"] = "";
	$fieldLabelsad_uggroups["English"]["Label"] = "Label";
	$fieldToolTipsad_uggroups["English"]["Label"] = "";
	if (count($fieldToolTipsad_uggroups["English"]))
		$tdataad_uggroups[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsad_uggroups[""] = array();
	$fieldToolTipsad_uggroups[""] = array();
	$pageTitlesad_uggroups[""] = array();
	if (count($fieldToolTipsad_uggroups[""]))
		$tdataad_uggroups[".isUseToolTips"] = true;
}
	
	
	$tdataad_uggroups[".NCSearch"] = true;



$tdataad_uggroups[".shortTableName"] = "ad_uggroups";
$tdataad_uggroups[".nSecOptions"] = 0;
$tdataad_uggroups[".recsPerRowList"] = 1;
$tdataad_uggroups[".recsPerRowPrint"] = 1;
$tdataad_uggroups[".mainTableOwnerID"] = "";
$tdataad_uggroups[".moveNext"] = 1;
$tdataad_uggroups[".entityType"] = 0;

$tdataad_uggroups[".strOriginalTableName"] = "ad_uggroups";




$tdataad_uggroups[".showAddInPopup"] = false;

$tdataad_uggroups[".showEditInPopup"] = false;

$tdataad_uggroups[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataad_uggroups[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataad_uggroups[".fieldsForRegister"] = array();

$tdataad_uggroups[".listAjax"] = false;

	$tdataad_uggroups[".audit"] = false;

	$tdataad_uggroups[".locking"] = false;

$tdataad_uggroups[".edit"] = true;
$tdataad_uggroups[".afterEditAction"] = 1;
$tdataad_uggroups[".closePopupAfterEdit"] = 1;
$tdataad_uggroups[".afterEditActionDetTable"] = "";

$tdataad_uggroups[".add"] = true;
$tdataad_uggroups[".afterAddAction"] = 0;
$tdataad_uggroups[".closePopupAfterAdd"] = 1;
$tdataad_uggroups[".afterAddActionDetTable"] = "";

$tdataad_uggroups[".list"] = true;

$tdataad_uggroups[".inlineEdit"] = true;
$tdataad_uggroups[".inlineAdd"] = true;
$tdataad_uggroups[".view"] = true;

$tdataad_uggroups[".import"] = true;

$tdataad_uggroups[".exportTo"] = true;

$tdataad_uggroups[".printFriendly"] = true;

$tdataad_uggroups[".delete"] = true;

$tdataad_uggroups[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataad_uggroups[".searchSaving"] = false;
//

$tdataad_uggroups[".showSearchPanel"] = true;
		$tdataad_uggroups[".flexibleSearch"] = true;		

if (isMobile())
	$tdataad_uggroups[".isUseAjaxSuggest"] = false;
else 
	$tdataad_uggroups[".isUseAjaxSuggest"] = true;

$tdataad_uggroups[".rowHighlite"] = true;


																																																																																																																																															
$tdataad_uggroups[".addPageEvents"] = false;

// use timepicker for search panel
$tdataad_uggroups[".isUseTimeForSearch"] = false;





$tdataad_uggroups[".allSearchFields"] = array();
$tdataad_uggroups[".filterFields"] = array();
$tdataad_uggroups[".requiredSearchFields"] = array();

$tdataad_uggroups[".allSearchFields"][] = "GroupID";
	$tdataad_uggroups[".allSearchFields"][] = "Label";
	

$tdataad_uggroups[".googleLikeFields"] = array();
$tdataad_uggroups[".googleLikeFields"][] = "GroupID";
$tdataad_uggroups[".googleLikeFields"][] = "Label";


$tdataad_uggroups[".advSearchFields"] = array();
$tdataad_uggroups[".advSearchFields"][] = "GroupID";
$tdataad_uggroups[".advSearchFields"][] = "Label";

$tdataad_uggroups[".tableType"] = "list";

$tdataad_uggroups[".printerPageOrientation"] = 0;
$tdataad_uggroups[".nPrinterPageScale"] = 100;

$tdataad_uggroups[".nPrinterSplitRecords"] = 40;

$tdataad_uggroups[".nPrinterPDFSplitRecords"] = 40;



$tdataad_uggroups[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataad_uggroups[".pageSize"] = 20;

$tdataad_uggroups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataad_uggroups[".strOrderBy"] = $tstrOrderBy;

$tdataad_uggroups[".orderindexes"] = array();

$tdataad_uggroups[".sqlHead"] = "SELECT GroupID,  	`Label`";
$tdataad_uggroups[".sqlFrom"] = "FROM ad_uggroups";
$tdataad_uggroups[".sqlWhereExpr"] = "";
$tdataad_uggroups[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataad_uggroups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataad_uggroups[".arrGroupsPerPage"] = $arrGPP;

$tdataad_uggroups[".highlightSearchResults"] = true;

$tableKeysad_uggroups = array();
$tableKeysad_uggroups[] = "GroupID";
$tdataad_uggroups[".Keys"] = $tableKeysad_uggroups;

$tdataad_uggroups[".listFields"] = array();
$tdataad_uggroups[".listFields"][] = "GroupID";
$tdataad_uggroups[".listFields"][] = "Label";

$tdataad_uggroups[".hideMobileList"] = array();


$tdataad_uggroups[".viewFields"] = array();
$tdataad_uggroups[".viewFields"][] = "GroupID";
$tdataad_uggroups[".viewFields"][] = "Label";

$tdataad_uggroups[".addFields"] = array();
$tdataad_uggroups[".addFields"][] = "Label";

$tdataad_uggroups[".masterListFields"] = array();
$tdataad_uggroups[".masterListFields"][] = "GroupID";
$tdataad_uggroups[".masterListFields"][] = "Label";

$tdataad_uggroups[".inlineAddFields"] = array();
$tdataad_uggroups[".inlineAddFields"][] = "Label";

$tdataad_uggroups[".editFields"] = array();
$tdataad_uggroups[".editFields"][] = "Label";

$tdataad_uggroups[".inlineEditFields"] = array();
$tdataad_uggroups[".inlineEditFields"][] = "Label";

$tdataad_uggroups[".exportFields"] = array();
$tdataad_uggroups[".exportFields"][] = "GroupID";
$tdataad_uggroups[".exportFields"][] = "Label";

$tdataad_uggroups[".importFields"] = array();
$tdataad_uggroups[".importFields"][] = "GroupID";
$tdataad_uggroups[".importFields"][] = "Label";

$tdataad_uggroups[".printFields"] = array();
$tdataad_uggroups[".printFields"][] = "GroupID";
$tdataad_uggroups[".printFields"][] = "Label";

//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "ad_uggroups";
	$fdata["Label"] = GetFieldLabel("ad_uggroups","GroupID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "GroupID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GroupID";
	
		
		
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

	

	
	$tdataad_uggroups["GroupID"] = $fdata;
//	Label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Label";
	$fdata["GoodName"] = "Label";
	$fdata["ownerTable"] = "ad_uggroups";
	$fdata["Label"] = GetFieldLabel("ad_uggroups","Label"); 
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
	
		$fdata["strField"] = "Label"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Label`";
	
		
		
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

	

	
	$tdataad_uggroups["Label"] = $fdata;

	
$tables_data["ad_uggroups"]=&$tdataad_uggroups;
$field_labels["ad_uggroups"] = &$fieldLabelsad_uggroups;
$fieldToolTips["ad_uggroups"] = &$fieldToolTipsad_uggroups;
$page_titles["ad_uggroups"] = &$pageTitlesad_uggroups;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ad_uggroups"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["ad_uggroups"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ad_uggroups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "GroupID,  	`Label`";
$proto0["m_strFrom"] = "FROM ad_uggroups";
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
	"m_strName" => "GroupID",
	"m_strTable" => "ad_uggroups",
	"m_srcTableName" => "ad_uggroups"
));

$proto5["m_sql"] = "GroupID";
$proto5["m_srcTableName"] = "ad_uggroups";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Label",
	"m_strTable" => "ad_uggroups",
	"m_srcTableName" => "ad_uggroups"
));

$proto7["m_sql"] = "`Label`";
$proto7["m_srcTableName"] = "ad_uggroups";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "ad_uggroups";
$proto10["m_srcTableName"] = "ad_uggroups";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "GroupID";
$proto10["m_columns"][] = "Label";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "ad_uggroups";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "ad_uggroups";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ad_uggroups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ad_uggroups = createSqlQuery_ad_uggroups();


	
		
	
$tdataad_uggroups[".sqlquery"] = $queryData_ad_uggroups;

$tableEvents["ad_uggroups"] = new eventsBase;
$tdataad_uggroups[".hasEvents"] = false;

?>