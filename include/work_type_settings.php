<?php
require_once(getabspath("classes/cipherer.php"));




$tdatawork_type = array();	
	$tdatawork_type[".truncateText"] = true;
	$tdatawork_type[".NumberOfChars"] = 80; 
	$tdatawork_type[".ShortName"] = "work_type";
	$tdatawork_type[".OwnerID"] = "";
	$tdatawork_type[".OriginalTable"] = "work_type";

//	field labels
$fieldLabelswork_type = array();
$fieldToolTipswork_type = array();
$pageTitleswork_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswork_type["English"] = array();
	$fieldToolTipswork_type["English"] = array();
	$pageTitleswork_type["English"] = array();
	$fieldLabelswork_type["English"]["ID"] = "ID";
	$fieldToolTipswork_type["English"]["ID"] = "";
	$fieldLabelswork_type["English"]["type"] = "Type";
	$fieldToolTipswork_type["English"]["type"] = "";
	$fieldLabelswork_type["English"]["discription"] = "Discription";
	$fieldToolTipswork_type["English"]["discription"] = "";
	if (count($fieldToolTipswork_type["English"]))
		$tdatawork_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelswork_type[""] = array();
	$fieldToolTipswork_type[""] = array();
	$pageTitleswork_type[""] = array();
	$fieldLabelswork_type[""]["ID"] = "ID";
	$fieldToolTipswork_type[""]["ID"] = "";
	$fieldLabelswork_type[""]["type"] = "Type";
	$fieldToolTipswork_type[""]["type"] = "";
	$fieldLabelswork_type[""]["discription"] = "Discription";
	$fieldToolTipswork_type[""]["discription"] = "";
	if (count($fieldToolTipswork_type[""]))
		$tdatawork_type[".isUseToolTips"] = true;
}
	
	
	$tdatawork_type[".NCSearch"] = true;



$tdatawork_type[".shortTableName"] = "work_type";
$tdatawork_type[".nSecOptions"] = 0;
$tdatawork_type[".recsPerRowList"] = 1;
$tdatawork_type[".recsPerRowPrint"] = 1;
$tdatawork_type[".mainTableOwnerID"] = "";
$tdatawork_type[".moveNext"] = 1;
$tdatawork_type[".entityType"] = 0;

$tdatawork_type[".strOriginalTableName"] = "work_type";




$tdatawork_type[".showAddInPopup"] = false;

$tdatawork_type[".showEditInPopup"] = false;

$tdatawork_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawork_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawork_type[".fieldsForRegister"] = array();

$tdatawork_type[".listAjax"] = false;

	$tdatawork_type[".audit"] = false;

	$tdatawork_type[".locking"] = false;

$tdatawork_type[".edit"] = true;
$tdatawork_type[".afterEditAction"] = 1;
$tdatawork_type[".closePopupAfterEdit"] = 1;
$tdatawork_type[".afterEditActionDetTable"] = "";

$tdatawork_type[".add"] = true;
$tdatawork_type[".afterAddAction"] = 0;
$tdatawork_type[".closePopupAfterAdd"] = 1;
$tdatawork_type[".afterAddActionDetTable"] = "";

$tdatawork_type[".list"] = true;

$tdatawork_type[".inlineEdit"] = true;
$tdatawork_type[".inlineAdd"] = true;
$tdatawork_type[".view"] = true;

$tdatawork_type[".import"] = true;

$tdatawork_type[".exportTo"] = true;

$tdatawork_type[".printFriendly"] = true;

$tdatawork_type[".delete"] = true;

$tdatawork_type[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatawork_type[".searchSaving"] = false;
//

$tdatawork_type[".showSearchPanel"] = true;
		$tdatawork_type[".flexibleSearch"] = true;		

if (isMobile())
	$tdatawork_type[".isUseAjaxSuggest"] = false;
else 
	$tdatawork_type[".isUseAjaxSuggest"] = true;

$tdatawork_type[".rowHighlite"] = true;


																																																																																																																																															
$tdatawork_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawork_type[".isUseTimeForSearch"] = false;





$tdatawork_type[".allSearchFields"] = array();
$tdatawork_type[".filterFields"] = array();
$tdatawork_type[".requiredSearchFields"] = array();

$tdatawork_type[".allSearchFields"][] = "ID";
	$tdatawork_type[".allSearchFields"][] = "type";
	$tdatawork_type[".allSearchFields"][] = "discription";
	

$tdatawork_type[".googleLikeFields"] = array();
$tdatawork_type[".googleLikeFields"][] = "ID";
$tdatawork_type[".googleLikeFields"][] = "type";
$tdatawork_type[".googleLikeFields"][] = "discription";


$tdatawork_type[".advSearchFields"] = array();
$tdatawork_type[".advSearchFields"][] = "ID";
$tdatawork_type[".advSearchFields"][] = "type";
$tdatawork_type[".advSearchFields"][] = "discription";

$tdatawork_type[".tableType"] = "list";

$tdatawork_type[".printerPageOrientation"] = 0;
$tdatawork_type[".nPrinterPageScale"] = 100;

$tdatawork_type[".nPrinterSplitRecords"] = 40;

$tdatawork_type[".nPrinterPDFSplitRecords"] = 40;



$tdatawork_type[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatawork_type[".pageSize"] = 20;

$tdatawork_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawork_type[".strOrderBy"] = $tstrOrderBy;

$tdatawork_type[".orderindexes"] = array();

$tdatawork_type[".sqlHead"] = "SELECT ID,  	`type`,  	discription";
$tdatawork_type[".sqlFrom"] = "FROM work_type";
$tdatawork_type[".sqlWhereExpr"] = "";
$tdatawork_type[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawork_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawork_type[".arrGroupsPerPage"] = $arrGPP;

$tdatawork_type[".highlightSearchResults"] = true;

$tableKeyswork_type = array();
$tableKeyswork_type[] = "ID";
$tdatawork_type[".Keys"] = $tableKeyswork_type;

$tdatawork_type[".listFields"] = array();
$tdatawork_type[".listFields"][] = "ID";
$tdatawork_type[".listFields"][] = "type";
$tdatawork_type[".listFields"][] = "discription";

$tdatawork_type[".hideMobileList"] = array();


$tdatawork_type[".viewFields"] = array();
$tdatawork_type[".viewFields"][] = "ID";
$tdatawork_type[".viewFields"][] = "type";
$tdatawork_type[".viewFields"][] = "discription";

$tdatawork_type[".addFields"] = array();
$tdatawork_type[".addFields"][] = "type";
$tdatawork_type[".addFields"][] = "discription";

$tdatawork_type[".masterListFields"] = array();
$tdatawork_type[".masterListFields"][] = "ID";
$tdatawork_type[".masterListFields"][] = "type";
$tdatawork_type[".masterListFields"][] = "discription";

$tdatawork_type[".inlineAddFields"] = array();
$tdatawork_type[".inlineAddFields"][] = "type";
$tdatawork_type[".inlineAddFields"][] = "discription";

$tdatawork_type[".editFields"] = array();
$tdatawork_type[".editFields"][] = "type";
$tdatawork_type[".editFields"][] = "discription";

$tdatawork_type[".inlineEditFields"] = array();
$tdatawork_type[".inlineEditFields"][] = "type";
$tdatawork_type[".inlineEditFields"][] = "discription";

$tdatawork_type[".exportFields"] = array();
$tdatawork_type[".exportFields"][] = "ID";
$tdatawork_type[".exportFields"][] = "type";
$tdatawork_type[".exportFields"][] = "discription";

$tdatawork_type[".importFields"] = array();
$tdatawork_type[".importFields"][] = "ID";
$tdatawork_type[".importFields"][] = "type";
$tdatawork_type[".importFields"][] = "discription";

$tdatawork_type[".printFields"] = array();
$tdatawork_type[".printFields"][] = "ID";
$tdatawork_type[".printFields"][] = "type";
$tdatawork_type[".printFields"][] = "discription";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "work_type";
	$fdata["Label"] = GetFieldLabel("work_type","ID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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

	

	
	$tdatawork_type["ID"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "work_type";
	$fdata["Label"] = GetFieldLabel("work_type","type"); 
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
	
		$fdata["strField"] = "type"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type`";
	
		
		
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

	

	
	$tdatawork_type["type"] = $fdata;
//	discription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "discription";
	$fdata["GoodName"] = "discription";
	$fdata["ownerTable"] = "work_type";
	$fdata["Label"] = GetFieldLabel("work_type","discription"); 
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

	

	
	$tdatawork_type["discription"] = $fdata;

	
$tables_data["work_type"]=&$tdatawork_type;
$field_labels["work_type"] = &$fieldLabelswork_type;
$fieldToolTips["work_type"] = &$fieldToolTipswork_type;
$page_titles["work_type"] = &$pageTitleswork_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["work_type"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["work_type"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_work_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	`type`,  	discription";
$proto0["m_strFrom"] = "FROM work_type";
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
	"m_strTable" => "work_type",
	"m_srcTableName" => "work_type"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "work_type";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "work_type",
	"m_srcTableName" => "work_type"
));

$proto7["m_sql"] = "`type`";
$proto7["m_srcTableName"] = "work_type";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "discription",
	"m_strTable" => "work_type",
	"m_srcTableName" => "work_type"
));

$proto9["m_sql"] = "discription";
$proto9["m_srcTableName"] = "work_type";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "work_type";
$proto12["m_srcTableName"] = "work_type";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "ID";
$proto12["m_columns"][] = "type";
$proto12["m_columns"][] = "discription";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "work_type";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "work_type";
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
$proto0["m_srcTableName"]="work_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_work_type = createSqlQuery_work_type();


	
			
	
$tdatawork_type[".sqlquery"] = $queryData_work_type;

$tableEvents["work_type"] = new eventsBase;
$tdatawork_type[".hasEvents"] = false;

?>