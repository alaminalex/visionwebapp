<?php
require_once(getabspath("classes/cipherer.php"));




$tdatastatus = array();	
	$tdatastatus[".truncateText"] = true;
	$tdatastatus[".NumberOfChars"] = 80; 
	$tdatastatus[".ShortName"] = "status";
	$tdatastatus[".OwnerID"] = "";
	$tdatastatus[".OriginalTable"] = "status";

//	field labels
$fieldLabelsstatus = array();
$fieldToolTipsstatus = array();
$pageTitlesstatus = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstatus["English"] = array();
	$fieldToolTipsstatus["English"] = array();
	$pageTitlesstatus["English"] = array();
	$fieldLabelsstatus["English"]["id"] = "Id";
	$fieldToolTipsstatus["English"]["id"] = "";
	$fieldLabelsstatus["English"]["status_name"] = "Status Name";
	$fieldToolTipsstatus["English"]["status_name"] = "";
	$fieldLabelsstatus["English"]["status__discription"] = "Status  Discription";
	$fieldToolTipsstatus["English"]["status _discription"] = "";
	if (count($fieldToolTipsstatus["English"]))
		$tdatastatus[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsstatus[""] = array();
	$fieldToolTipsstatus[""] = array();
	$pageTitlesstatus[""] = array();
	if (count($fieldToolTipsstatus[""]))
		$tdatastatus[".isUseToolTips"] = true;
}
	
	
	$tdatastatus[".NCSearch"] = true;



$tdatastatus[".shortTableName"] = "status";
$tdatastatus[".nSecOptions"] = 0;
$tdatastatus[".recsPerRowList"] = 1;
$tdatastatus[".recsPerRowPrint"] = 1;
$tdatastatus[".mainTableOwnerID"] = "";
$tdatastatus[".moveNext"] = 1;
$tdatastatus[".entityType"] = 0;

$tdatastatus[".strOriginalTableName"] = "status";




$tdatastatus[".showAddInPopup"] = false;

$tdatastatus[".showEditInPopup"] = false;

$tdatastatus[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatastatus[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatastatus[".fieldsForRegister"] = array();

$tdatastatus[".listAjax"] = false;

	$tdatastatus[".audit"] = false;

	$tdatastatus[".locking"] = false;

$tdatastatus[".edit"] = true;
$tdatastatus[".afterEditAction"] = 1;
$tdatastatus[".closePopupAfterEdit"] = 1;
$tdatastatus[".afterEditActionDetTable"] = "";

$tdatastatus[".add"] = true;
$tdatastatus[".afterAddAction"] = 0;
$tdatastatus[".closePopupAfterAdd"] = 1;
$tdatastatus[".afterAddActionDetTable"] = "";

$tdatastatus[".list"] = true;

$tdatastatus[".inlineEdit"] = true;
$tdatastatus[".inlineAdd"] = true;
$tdatastatus[".view"] = true;

$tdatastatus[".import"] = true;

$tdatastatus[".exportTo"] = true;

$tdatastatus[".printFriendly"] = true;

$tdatastatus[".delete"] = true;

$tdatastatus[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatastatus[".searchSaving"] = false;
//

$tdatastatus[".showSearchPanel"] = true;
		$tdatastatus[".flexibleSearch"] = true;		

if (isMobile())
	$tdatastatus[".isUseAjaxSuggest"] = false;
else 
	$tdatastatus[".isUseAjaxSuggest"] = true;

$tdatastatus[".rowHighlite"] = true;


																																																																																																																																															
$tdatastatus[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastatus[".isUseTimeForSearch"] = false;





$tdatastatus[".allSearchFields"] = array();
$tdatastatus[".filterFields"] = array();
$tdatastatus[".requiredSearchFields"] = array();

$tdatastatus[".allSearchFields"][] = "id";
	$tdatastatus[".allSearchFields"][] = "status_name";
	$tdatastatus[".allSearchFields"][] = "status _discription";
	

$tdatastatus[".googleLikeFields"] = array();
$tdatastatus[".googleLikeFields"][] = "id";
$tdatastatus[".googleLikeFields"][] = "status_name";
$tdatastatus[".googleLikeFields"][] = "status _discription";


$tdatastatus[".advSearchFields"] = array();
$tdatastatus[".advSearchFields"][] = "id";
$tdatastatus[".advSearchFields"][] = "status_name";
$tdatastatus[".advSearchFields"][] = "status _discription";

$tdatastatus[".tableType"] = "list";

$tdatastatus[".printerPageOrientation"] = 0;
$tdatastatus[".nPrinterPageScale"] = 100;

$tdatastatus[".nPrinterSplitRecords"] = 40;

$tdatastatus[".nPrinterPDFSplitRecords"] = 40;



$tdatastatus[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatastatus[".pageSize"] = 20;

$tdatastatus[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastatus[".strOrderBy"] = $tstrOrderBy;

$tdatastatus[".orderindexes"] = array();

$tdatastatus[".sqlHead"] = "SELECT id,  	status_name,  	`status _discription`";
$tdatastatus[".sqlFrom"] = "FROM status";
$tdatastatus[".sqlWhereExpr"] = "";
$tdatastatus[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastatus[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastatus[".arrGroupsPerPage"] = $arrGPP;

$tdatastatus[".highlightSearchResults"] = true;

$tableKeysstatus = array();
$tableKeysstatus[] = "id";
$tdatastatus[".Keys"] = $tableKeysstatus;

$tdatastatus[".listFields"] = array();
$tdatastatus[".listFields"][] = "id";
$tdatastatus[".listFields"][] = "status_name";
$tdatastatus[".listFields"][] = "status _discription";

$tdatastatus[".hideMobileList"] = array();


$tdatastatus[".viewFields"] = array();
$tdatastatus[".viewFields"][] = "id";
$tdatastatus[".viewFields"][] = "status_name";
$tdatastatus[".viewFields"][] = "status _discription";

$tdatastatus[".addFields"] = array();
$tdatastatus[".addFields"][] = "status_name";
$tdatastatus[".addFields"][] = "status _discription";

$tdatastatus[".masterListFields"] = array();
$tdatastatus[".masterListFields"][] = "id";
$tdatastatus[".masterListFields"][] = "status_name";
$tdatastatus[".masterListFields"][] = "status _discription";

$tdatastatus[".inlineAddFields"] = array();
$tdatastatus[".inlineAddFields"][] = "status_name";
$tdatastatus[".inlineAddFields"][] = "status _discription";

$tdatastatus[".editFields"] = array();
$tdatastatus[".editFields"][] = "status_name";
$tdatastatus[".editFields"][] = "status _discription";

$tdatastatus[".inlineEditFields"] = array();
$tdatastatus[".inlineEditFields"][] = "status_name";
$tdatastatus[".inlineEditFields"][] = "status _discription";

$tdatastatus[".exportFields"] = array();
$tdatastatus[".exportFields"][] = "id";
$tdatastatus[".exportFields"][] = "status_name";
$tdatastatus[".exportFields"][] = "status _discription";

$tdatastatus[".importFields"] = array();
$tdatastatus[".importFields"][] = "id";
$tdatastatus[".importFields"][] = "status_name";
$tdatastatus[".importFields"][] = "status _discription";

$tdatastatus[".printFields"] = array();
$tdatastatus[".printFields"][] = "id";
$tdatastatus[".printFields"][] = "status_name";
$tdatastatus[".printFields"][] = "status _discription";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "status";
	$fdata["Label"] = GetFieldLabel("status","id"); 
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

	

	
	$tdatastatus["id"] = $fdata;
//	status_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status_name";
	$fdata["GoodName"] = "status_name";
	$fdata["ownerTable"] = "status";
	$fdata["Label"] = GetFieldLabel("status","status_name"); 
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
	
		$fdata["strField"] = "status_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_name";
	
		
		
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

	

	
	$tdatastatus["status_name"] = $fdata;
//	status _discription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "status _discription";
	$fdata["GoodName"] = "status__discription";
	$fdata["ownerTable"] = "status";
	$fdata["Label"] = GetFieldLabel("status","status__discription"); 
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
	
		$fdata["strField"] = "status _discription"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`status _discription`";
	
		
		
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

	

	
	$tdatastatus["status _discription"] = $fdata;

	
$tables_data["status"]=&$tdatastatus;
$field_labels["status"] = &$fieldLabelsstatus;
$fieldToolTips["status"] = &$fieldToolTipsstatus;
$page_titles["status"] = &$pageTitlesstatus;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["status"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["status"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	status_name,  	`status _discription`";
$proto0["m_strFrom"] = "FROM status";
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
	"m_strTable" => "status",
	"m_srcTableName" => "status"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "status";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "status_name",
	"m_strTable" => "status",
	"m_srcTableName" => "status"
));

$proto7["m_sql"] = "status_name";
$proto7["m_srcTableName"] = "status";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "status _discription",
	"m_strTable" => "status",
	"m_srcTableName" => "status"
));

$proto9["m_sql"] = "`status _discription`";
$proto9["m_srcTableName"] = "status";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "status";
$proto12["m_srcTableName"] = "status";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "status_name";
$proto12["m_columns"][] = "status _discription";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "status";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "status";
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
$proto0["m_srcTableName"]="status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_status = createSqlQuery_status();


	
			
	
$tdatastatus[".sqlquery"] = $queryData_status;

$tableEvents["status"] = new eventsBase;
$tdatastatus[".hasEvents"] = false;

?>