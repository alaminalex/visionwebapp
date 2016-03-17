<?php
require_once(getabspath("classes/cipherer.php"));




$tdatajobfile_type = array();	
	$tdatajobfile_type[".truncateText"] = true;
	$tdatajobfile_type[".NumberOfChars"] = 80; 
	$tdatajobfile_type[".ShortName"] = "jobfile_type";
	$tdatajobfile_type[".OwnerID"] = "";
	$tdatajobfile_type[".OriginalTable"] = "jobfile_type";

//	field labels
$fieldLabelsjobfile_type = array();
$fieldToolTipsjobfile_type = array();
$pageTitlesjobfile_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsjobfile_type["English"] = array();
	$fieldToolTipsjobfile_type["English"] = array();
	$pageTitlesjobfile_type["English"] = array();
	$fieldLabelsjobfile_type["English"]["ID"] = "ID";
	$fieldToolTipsjobfile_type["English"]["ID"] = "";
	$fieldLabelsjobfile_type["English"]["description"] = "Description";
	$fieldToolTipsjobfile_type["English"]["description"] = "";
	if (count($fieldToolTipsjobfile_type["English"]))
		$tdatajobfile_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsjobfile_type[""] = array();
	$fieldToolTipsjobfile_type[""] = array();
	$pageTitlesjobfile_type[""] = array();
	$fieldLabelsjobfile_type[""]["ID"] = "ID";
	$fieldToolTipsjobfile_type[""]["ID"] = "";
	$fieldLabelsjobfile_type[""]["description"] = "Description";
	$fieldToolTipsjobfile_type[""]["description"] = "";
	if (count($fieldToolTipsjobfile_type[""]))
		$tdatajobfile_type[".isUseToolTips"] = true;
}
	
	
	$tdatajobfile_type[".NCSearch"] = true;



$tdatajobfile_type[".shortTableName"] = "jobfile_type";
$tdatajobfile_type[".nSecOptions"] = 0;
$tdatajobfile_type[".recsPerRowList"] = 1;
$tdatajobfile_type[".recsPerRowPrint"] = 1;
$tdatajobfile_type[".mainTableOwnerID"] = "";
$tdatajobfile_type[".moveNext"] = 1;
$tdatajobfile_type[".entityType"] = 0;

$tdatajobfile_type[".strOriginalTableName"] = "jobfile_type";




$tdatajobfile_type[".showAddInPopup"] = false;

$tdatajobfile_type[".showEditInPopup"] = false;

$tdatajobfile_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatajobfile_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatajobfile_type[".fieldsForRegister"] = array();

$tdatajobfile_type[".listAjax"] = false;

	$tdatajobfile_type[".audit"] = false;

	$tdatajobfile_type[".locking"] = false;

$tdatajobfile_type[".edit"] = true;
$tdatajobfile_type[".afterEditAction"] = 1;
$tdatajobfile_type[".closePopupAfterEdit"] = 1;
$tdatajobfile_type[".afterEditActionDetTable"] = "";

$tdatajobfile_type[".add"] = true;
$tdatajobfile_type[".afterAddAction"] = 1;
$tdatajobfile_type[".closePopupAfterAdd"] = 1;
$tdatajobfile_type[".afterAddActionDetTable"] = "";

$tdatajobfile_type[".list"] = true;

$tdatajobfile_type[".inlineEdit"] = true;
$tdatajobfile_type[".inlineAdd"] = true;
$tdatajobfile_type[".view"] = true;

$tdatajobfile_type[".import"] = true;

$tdatajobfile_type[".exportTo"] = true;

$tdatajobfile_type[".printFriendly"] = true;

$tdatajobfile_type[".delete"] = true;

$tdatajobfile_type[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatajobfile_type[".searchSaving"] = false;
//

$tdatajobfile_type[".showSearchPanel"] = true;
		$tdatajobfile_type[".flexibleSearch"] = true;		

if (isMobile())
	$tdatajobfile_type[".isUseAjaxSuggest"] = false;
else 
	$tdatajobfile_type[".isUseAjaxSuggest"] = true;

$tdatajobfile_type[".rowHighlite"] = true;


																																																																																																																																															
$tdatajobfile_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajobfile_type[".isUseTimeForSearch"] = false;





$tdatajobfile_type[".allSearchFields"] = array();
$tdatajobfile_type[".filterFields"] = array();
$tdatajobfile_type[".requiredSearchFields"] = array();

$tdatajobfile_type[".allSearchFields"][] = "ID";
	$tdatajobfile_type[".allSearchFields"][] = "description";
	

$tdatajobfile_type[".googleLikeFields"] = array();
$tdatajobfile_type[".googleLikeFields"][] = "ID";
$tdatajobfile_type[".googleLikeFields"][] = "description";


$tdatajobfile_type[".advSearchFields"] = array();
$tdatajobfile_type[".advSearchFields"][] = "ID";
$tdatajobfile_type[".advSearchFields"][] = "description";

$tdatajobfile_type[".tableType"] = "list";

$tdatajobfile_type[".printerPageOrientation"] = 0;
$tdatajobfile_type[".nPrinterPageScale"] = 100;

$tdatajobfile_type[".nPrinterSplitRecords"] = 40;

$tdatajobfile_type[".nPrinterPDFSplitRecords"] = 40;



$tdatajobfile_type[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatajobfile_type[".pageSize"] = 20;

$tdatajobfile_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatajobfile_type[".strOrderBy"] = $tstrOrderBy;

$tdatajobfile_type[".orderindexes"] = array();

$tdatajobfile_type[".sqlHead"] = "SELECT ID,  	description";
$tdatajobfile_type[".sqlFrom"] = "FROM jobfile_type";
$tdatajobfile_type[".sqlWhereExpr"] = "";
$tdatajobfile_type[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajobfile_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajobfile_type[".arrGroupsPerPage"] = $arrGPP;

$tdatajobfile_type[".highlightSearchResults"] = true;

$tableKeysjobfile_type = array();
$tableKeysjobfile_type[] = "ID";
$tdatajobfile_type[".Keys"] = $tableKeysjobfile_type;

$tdatajobfile_type[".listFields"] = array();
$tdatajobfile_type[".listFields"][] = "ID";
$tdatajobfile_type[".listFields"][] = "description";

$tdatajobfile_type[".hideMobileList"] = array();


$tdatajobfile_type[".viewFields"] = array();
$tdatajobfile_type[".viewFields"][] = "ID";
$tdatajobfile_type[".viewFields"][] = "description";

$tdatajobfile_type[".addFields"] = array();
$tdatajobfile_type[".addFields"][] = "description";

$tdatajobfile_type[".masterListFields"] = array();
$tdatajobfile_type[".masterListFields"][] = "ID";
$tdatajobfile_type[".masterListFields"][] = "description";

$tdatajobfile_type[".inlineAddFields"] = array();
$tdatajobfile_type[".inlineAddFields"][] = "description";

$tdatajobfile_type[".editFields"] = array();
$tdatajobfile_type[".editFields"][] = "description";

$tdatajobfile_type[".inlineEditFields"] = array();
$tdatajobfile_type[".inlineEditFields"][] = "description";

$tdatajobfile_type[".exportFields"] = array();
$tdatajobfile_type[".exportFields"][] = "ID";
$tdatajobfile_type[".exportFields"][] = "description";

$tdatajobfile_type[".importFields"] = array();
$tdatajobfile_type[".importFields"][] = "ID";
$tdatajobfile_type[".importFields"][] = "description";

$tdatajobfile_type[".printFields"] = array();
$tdatajobfile_type[".printFields"][] = "ID";
$tdatajobfile_type[".printFields"][] = "description";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "jobfile_type";
	$fdata["Label"] = GetFieldLabel("jobfile_type","ID"); 
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

	

	
	$tdatajobfile_type["ID"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "jobfile_type";
	$fdata["Label"] = GetFieldLabel("jobfile_type","description"); 
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

	

	
	$tdatajobfile_type["description"] = $fdata;

	
$tables_data["jobfile_type"]=&$tdatajobfile_type;
$field_labels["jobfile_type"] = &$fieldLabelsjobfile_type;
$fieldToolTips["jobfile_type"] = &$fieldToolTipsjobfile_type;
$page_titles["jobfile_type"] = &$pageTitlesjobfile_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["jobfile_type"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["jobfile_type"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_jobfile_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	description";
$proto0["m_strFrom"] = "FROM jobfile_type";
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
	"m_strTable" => "jobfile_type",
	"m_srcTableName" => "jobfile_type"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "jobfile_type";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "jobfile_type",
	"m_srcTableName" => "jobfile_type"
));

$proto7["m_sql"] = "description";
$proto7["m_srcTableName"] = "jobfile_type";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "jobfile_type";
$proto10["m_srcTableName"] = "jobfile_type";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "ID";
$proto10["m_columns"][] = "description";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "jobfile_type";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "jobfile_type";
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
$proto0["m_srcTableName"]="jobfile_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_jobfile_type = createSqlQuery_jobfile_type();


	
		
	
$tdatajobfile_type[".sqlquery"] = $queryData_jobfile_type;

$tableEvents["jobfile_type"] = new eventsBase;
$tdatajobfile_type[".hasEvents"] = false;

?>