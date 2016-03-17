<?php
require_once(getabspath("classes/cipherer.php"));




$tdataad_ugmembers = array();	
	$tdataad_ugmembers[".truncateText"] = true;
	$tdataad_ugmembers[".NumberOfChars"] = 80; 
	$tdataad_ugmembers[".ShortName"] = "ad_ugmembers";
	$tdataad_ugmembers[".OwnerID"] = "";
	$tdataad_ugmembers[".OriginalTable"] = "ad_ugmembers";

//	field labels
$fieldLabelsad_ugmembers = array();
$fieldToolTipsad_ugmembers = array();
$pageTitlesad_ugmembers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsad_ugmembers["English"] = array();
	$fieldToolTipsad_ugmembers["English"] = array();
	$pageTitlesad_ugmembers["English"] = array();
	$fieldLabelsad_ugmembers["English"]["UserName"] = "User Name";
	$fieldToolTipsad_ugmembers["English"]["UserName"] = "";
	$fieldLabelsad_ugmembers["English"]["GroupID"] = "Group ID";
	$fieldToolTipsad_ugmembers["English"]["GroupID"] = "";
	if (count($fieldToolTipsad_ugmembers["English"]))
		$tdataad_ugmembers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsad_ugmembers[""] = array();
	$fieldToolTipsad_ugmembers[""] = array();
	$pageTitlesad_ugmembers[""] = array();
	if (count($fieldToolTipsad_ugmembers[""]))
		$tdataad_ugmembers[".isUseToolTips"] = true;
}
	
	
	$tdataad_ugmembers[".NCSearch"] = true;



$tdataad_ugmembers[".shortTableName"] = "ad_ugmembers";
$tdataad_ugmembers[".nSecOptions"] = 0;
$tdataad_ugmembers[".recsPerRowList"] = 1;
$tdataad_ugmembers[".recsPerRowPrint"] = 1;
$tdataad_ugmembers[".mainTableOwnerID"] = "";
$tdataad_ugmembers[".moveNext"] = 1;
$tdataad_ugmembers[".entityType"] = 0;

$tdataad_ugmembers[".strOriginalTableName"] = "ad_ugmembers";




$tdataad_ugmembers[".showAddInPopup"] = false;

$tdataad_ugmembers[".showEditInPopup"] = false;

$tdataad_ugmembers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataad_ugmembers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataad_ugmembers[".fieldsForRegister"] = array();

$tdataad_ugmembers[".listAjax"] = false;

	$tdataad_ugmembers[".audit"] = false;

	$tdataad_ugmembers[".locking"] = false;

$tdataad_ugmembers[".edit"] = true;
$tdataad_ugmembers[".afterEditAction"] = 1;
$tdataad_ugmembers[".closePopupAfterEdit"] = 1;
$tdataad_ugmembers[".afterEditActionDetTable"] = "";

$tdataad_ugmembers[".add"] = true;
$tdataad_ugmembers[".afterAddAction"] = 0;
$tdataad_ugmembers[".closePopupAfterAdd"] = 1;
$tdataad_ugmembers[".afterAddActionDetTable"] = "";

$tdataad_ugmembers[".list"] = true;

$tdataad_ugmembers[".inlineEdit"] = true;
$tdataad_ugmembers[".inlineAdd"] = true;
$tdataad_ugmembers[".view"] = true;

$tdataad_ugmembers[".import"] = true;

$tdataad_ugmembers[".exportTo"] = true;

$tdataad_ugmembers[".printFriendly"] = true;

$tdataad_ugmembers[".delete"] = true;

$tdataad_ugmembers[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataad_ugmembers[".searchSaving"] = false;
//

$tdataad_ugmembers[".showSearchPanel"] = true;
		$tdataad_ugmembers[".flexibleSearch"] = true;		

if (isMobile())
	$tdataad_ugmembers[".isUseAjaxSuggest"] = false;
else 
	$tdataad_ugmembers[".isUseAjaxSuggest"] = true;

$tdataad_ugmembers[".rowHighlite"] = true;


																																																																																																																																															
$tdataad_ugmembers[".addPageEvents"] = false;

// use timepicker for search panel
$tdataad_ugmembers[".isUseTimeForSearch"] = false;





$tdataad_ugmembers[".allSearchFields"] = array();
$tdataad_ugmembers[".filterFields"] = array();
$tdataad_ugmembers[".requiredSearchFields"] = array();

$tdataad_ugmembers[".allSearchFields"][] = "UserName";
	$tdataad_ugmembers[".allSearchFields"][] = "GroupID";
	

$tdataad_ugmembers[".googleLikeFields"] = array();
$tdataad_ugmembers[".googleLikeFields"][] = "UserName";
$tdataad_ugmembers[".googleLikeFields"][] = "GroupID";


$tdataad_ugmembers[".advSearchFields"] = array();
$tdataad_ugmembers[".advSearchFields"][] = "UserName";
$tdataad_ugmembers[".advSearchFields"][] = "GroupID";

$tdataad_ugmembers[".tableType"] = "list";

$tdataad_ugmembers[".printerPageOrientation"] = 0;
$tdataad_ugmembers[".nPrinterPageScale"] = 100;

$tdataad_ugmembers[".nPrinterSplitRecords"] = 40;

$tdataad_ugmembers[".nPrinterPDFSplitRecords"] = 40;



$tdataad_ugmembers[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataad_ugmembers[".pageSize"] = 20;

$tdataad_ugmembers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataad_ugmembers[".strOrderBy"] = $tstrOrderBy;

$tdataad_ugmembers[".orderindexes"] = array();

$tdataad_ugmembers[".sqlHead"] = "SELECT UserName,  	GroupID";
$tdataad_ugmembers[".sqlFrom"] = "FROM ad_ugmembers";
$tdataad_ugmembers[".sqlWhereExpr"] = "";
$tdataad_ugmembers[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataad_ugmembers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataad_ugmembers[".arrGroupsPerPage"] = $arrGPP;

$tdataad_ugmembers[".highlightSearchResults"] = true;

$tableKeysad_ugmembers = array();
$tableKeysad_ugmembers[] = "UserName";
$tableKeysad_ugmembers[] = "GroupID";
$tdataad_ugmembers[".Keys"] = $tableKeysad_ugmembers;

$tdataad_ugmembers[".listFields"] = array();
$tdataad_ugmembers[".listFields"][] = "UserName";
$tdataad_ugmembers[".listFields"][] = "GroupID";

$tdataad_ugmembers[".hideMobileList"] = array();


$tdataad_ugmembers[".viewFields"] = array();
$tdataad_ugmembers[".viewFields"][] = "UserName";
$tdataad_ugmembers[".viewFields"][] = "GroupID";

$tdataad_ugmembers[".addFields"] = array();
$tdataad_ugmembers[".addFields"][] = "UserName";
$tdataad_ugmembers[".addFields"][] = "GroupID";

$tdataad_ugmembers[".masterListFields"] = array();
$tdataad_ugmembers[".masterListFields"][] = "UserName";
$tdataad_ugmembers[".masterListFields"][] = "GroupID";

$tdataad_ugmembers[".inlineAddFields"] = array();
$tdataad_ugmembers[".inlineAddFields"][] = "UserName";
$tdataad_ugmembers[".inlineAddFields"][] = "GroupID";

$tdataad_ugmembers[".editFields"] = array();
$tdataad_ugmembers[".editFields"][] = "UserName";
$tdataad_ugmembers[".editFields"][] = "GroupID";

$tdataad_ugmembers[".inlineEditFields"] = array();
$tdataad_ugmembers[".inlineEditFields"][] = "UserName";
$tdataad_ugmembers[".inlineEditFields"][] = "GroupID";

$tdataad_ugmembers[".exportFields"] = array();
$tdataad_ugmembers[".exportFields"][] = "UserName";
$tdataad_ugmembers[".exportFields"][] = "GroupID";

$tdataad_ugmembers[".importFields"] = array();
$tdataad_ugmembers[".importFields"][] = "UserName";
$tdataad_ugmembers[".importFields"][] = "GroupID";

$tdataad_ugmembers[".printFields"] = array();
$tdataad_ugmembers[".printFields"][] = "UserName";
$tdataad_ugmembers[".printFields"][] = "GroupID";

//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "ad_ugmembers";
	$fdata["Label"] = GetFieldLabel("ad_ugmembers","UserName"); 
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
	
		$fdata["strField"] = "UserName"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserName";
	
		
		
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

	

	
	$tdataad_ugmembers["UserName"] = $fdata;
//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "ad_ugmembers";
	$fdata["Label"] = GetFieldLabel("ad_ugmembers","GroupID"); 
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

	

	
	$tdataad_ugmembers["GroupID"] = $fdata;

	
$tables_data["ad_ugmembers"]=&$tdataad_ugmembers;
$field_labels["ad_ugmembers"] = &$fieldLabelsad_ugmembers;
$fieldToolTips["ad_ugmembers"] = &$fieldToolTipsad_ugmembers;
$page_titles["ad_ugmembers"] = &$pageTitlesad_ugmembers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ad_ugmembers"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["ad_ugmembers"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ad_ugmembers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UserName,  	GroupID";
$proto0["m_strFrom"] = "FROM ad_ugmembers";
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
	"m_strName" => "UserName",
	"m_strTable" => "ad_ugmembers",
	"m_srcTableName" => "ad_ugmembers"
));

$proto5["m_sql"] = "UserName";
$proto5["m_srcTableName"] = "ad_ugmembers";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "ad_ugmembers",
	"m_srcTableName" => "ad_ugmembers"
));

$proto7["m_sql"] = "GroupID";
$proto7["m_srcTableName"] = "ad_ugmembers";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "ad_ugmembers";
$proto10["m_srcTableName"] = "ad_ugmembers";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "UserName";
$proto10["m_columns"][] = "GroupID";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "ad_ugmembers";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "ad_ugmembers";
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
$proto0["m_srcTableName"]="ad_ugmembers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ad_ugmembers = createSqlQuery_ad_ugmembers();


	
		
	
$tdataad_ugmembers[".sqlquery"] = $queryData_ad_ugmembers;

$tableEvents["ad_ugmembers"] = new eventsBase;
$tdataad_ugmembers[".hasEvents"] = false;

?>