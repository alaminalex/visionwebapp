<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBackup_Notified_Jobs = array();	
	$tdataBackup_Notified_Jobs[".truncateText"] = true;
	$tdataBackup_Notified_Jobs[".NumberOfChars"] = 80; 
	$tdataBackup_Notified_Jobs[".ShortName"] = "Backup_Notified_Jobs";
	$tdataBackup_Notified_Jobs[".OwnerID"] = "";
	$tdataBackup_Notified_Jobs[".OriginalTable"] = "custompages";

//	field labels
$fieldLabelsBackup_Notified_Jobs = array();
$fieldToolTipsBackup_Notified_Jobs = array();
$pageTitlesBackup_Notified_Jobs = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBackup_Notified_Jobs["English"] = array();
	$fieldToolTipsBackup_Notified_Jobs["English"] = array();
	$pageTitlesBackup_Notified_Jobs["English"] = array();
	$fieldLabelsBackup_Notified_Jobs["English"]["ID"] = "ID";
	$fieldToolTipsBackup_Notified_Jobs["English"]["ID"] = "";
	$fieldLabelsBackup_Notified_Jobs["English"]["button_name"] = "Button Name";
	$fieldToolTipsBackup_Notified_Jobs["English"]["button_name"] = "";
	$fieldLabelsBackup_Notified_Jobs["English"]["button_disctiption"] = "Button Disctiption";
	$fieldToolTipsBackup_Notified_Jobs["English"]["button_disctiption"] = "";
	if (count($fieldToolTipsBackup_Notified_Jobs["English"]))
		$tdataBackup_Notified_Jobs[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBackup_Notified_Jobs[""] = array();
	$fieldToolTipsBackup_Notified_Jobs[""] = array();
	$pageTitlesBackup_Notified_Jobs[""] = array();
	if (count($fieldToolTipsBackup_Notified_Jobs[""]))
		$tdataBackup_Notified_Jobs[".isUseToolTips"] = true;
}
	
	
	$tdataBackup_Notified_Jobs[".NCSearch"] = true;



$tdataBackup_Notified_Jobs[".shortTableName"] = "Backup_Notified_Jobs";
$tdataBackup_Notified_Jobs[".nSecOptions"] = 0;
$tdataBackup_Notified_Jobs[".recsPerRowList"] = 1;
$tdataBackup_Notified_Jobs[".recsPerRowPrint"] = 1;
$tdataBackup_Notified_Jobs[".mainTableOwnerID"] = "";
$tdataBackup_Notified_Jobs[".moveNext"] = 1;
$tdataBackup_Notified_Jobs[".entityType"] = 1;

$tdataBackup_Notified_Jobs[".strOriginalTableName"] = "custompages";




$tdataBackup_Notified_Jobs[".showAddInPopup"] = false;

$tdataBackup_Notified_Jobs[".showEditInPopup"] = false;

$tdataBackup_Notified_Jobs[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBackup_Notified_Jobs[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBackup_Notified_Jobs[".fieldsForRegister"] = array();

$tdataBackup_Notified_Jobs[".listAjax"] = false;

	$tdataBackup_Notified_Jobs[".audit"] = false;

	$tdataBackup_Notified_Jobs[".locking"] = false;



$tdataBackup_Notified_Jobs[".list"] = true;






$tdataBackup_Notified_Jobs[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataBackup_Notified_Jobs[".searchSaving"] = false;
//

$tdataBackup_Notified_Jobs[".showSearchPanel"] = true;
		$tdataBackup_Notified_Jobs[".flexibleSearch"] = true;		

if (isMobile())
	$tdataBackup_Notified_Jobs[".isUseAjaxSuggest"] = false;
else 
	$tdataBackup_Notified_Jobs[".isUseAjaxSuggest"] = true;

$tdataBackup_Notified_Jobs[".rowHighlite"] = true;


																																																																																																																																															
$tdataBackup_Notified_Jobs[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBackup_Notified_Jobs[".isUseTimeForSearch"] = false;





$tdataBackup_Notified_Jobs[".allSearchFields"] = array();
$tdataBackup_Notified_Jobs[".filterFields"] = array();
$tdataBackup_Notified_Jobs[".requiredSearchFields"] = array();

$tdataBackup_Notified_Jobs[".allSearchFields"][] = "ID";
	$tdataBackup_Notified_Jobs[".allSearchFields"][] = "button_name";
	$tdataBackup_Notified_Jobs[".allSearchFields"][] = "button_disctiption";
	

$tdataBackup_Notified_Jobs[".googleLikeFields"] = array();
$tdataBackup_Notified_Jobs[".googleLikeFields"][] = "ID";
$tdataBackup_Notified_Jobs[".googleLikeFields"][] = "button_name";
$tdataBackup_Notified_Jobs[".googleLikeFields"][] = "button_disctiption";


$tdataBackup_Notified_Jobs[".advSearchFields"] = array();
$tdataBackup_Notified_Jobs[".advSearchFields"][] = "ID";
$tdataBackup_Notified_Jobs[".advSearchFields"][] = "button_name";
$tdataBackup_Notified_Jobs[".advSearchFields"][] = "button_disctiption";

$tdataBackup_Notified_Jobs[".tableType"] = "list";

$tdataBackup_Notified_Jobs[".printerPageOrientation"] = 0;
$tdataBackup_Notified_Jobs[".nPrinterPageScale"] = 100;

$tdataBackup_Notified_Jobs[".nPrinterSplitRecords"] = 40;

$tdataBackup_Notified_Jobs[".nPrinterPDFSplitRecords"] = 40;



$tdataBackup_Notified_Jobs[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataBackup_Notified_Jobs[".pageSize"] = 20;

$tdataBackup_Notified_Jobs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBackup_Notified_Jobs[".strOrderBy"] = $tstrOrderBy;

$tdataBackup_Notified_Jobs[".orderindexes"] = array();

$tdataBackup_Notified_Jobs[".sqlHead"] = "SELECT ID,  	button_name,  	button_disctiption";
$tdataBackup_Notified_Jobs[".sqlFrom"] = "FROM custompages";
$tdataBackup_Notified_Jobs[".sqlWhereExpr"] = "";
$tdataBackup_Notified_Jobs[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBackup_Notified_Jobs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBackup_Notified_Jobs[".arrGroupsPerPage"] = $arrGPP;

$tdataBackup_Notified_Jobs[".highlightSearchResults"] = true;

$tableKeysBackup_Notified_Jobs = array();
$tableKeysBackup_Notified_Jobs[] = "ID";
$tdataBackup_Notified_Jobs[".Keys"] = $tableKeysBackup_Notified_Jobs;

$tdataBackup_Notified_Jobs[".listFields"] = array();
$tdataBackup_Notified_Jobs[".listFields"][] = "ID";
$tdataBackup_Notified_Jobs[".listFields"][] = "button_name";
$tdataBackup_Notified_Jobs[".listFields"][] = "button_disctiption";

$tdataBackup_Notified_Jobs[".hideMobileList"] = array();


$tdataBackup_Notified_Jobs[".viewFields"] = array();

$tdataBackup_Notified_Jobs[".addFields"] = array();

$tdataBackup_Notified_Jobs[".masterListFields"] = array();
$tdataBackup_Notified_Jobs[".masterListFields"][] = "ID";
$tdataBackup_Notified_Jobs[".masterListFields"][] = "button_name";
$tdataBackup_Notified_Jobs[".masterListFields"][] = "button_disctiption";

$tdataBackup_Notified_Jobs[".inlineAddFields"] = array();

$tdataBackup_Notified_Jobs[".editFields"] = array();

$tdataBackup_Notified_Jobs[".inlineEditFields"] = array();

$tdataBackup_Notified_Jobs[".exportFields"] = array();

$tdataBackup_Notified_Jobs[".importFields"] = array();

$tdataBackup_Notified_Jobs[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "custompages";
	$fdata["Label"] = GetFieldLabel("Backup_Notified_Jobs","ID"); 
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

	

	
	$tdataBackup_Notified_Jobs["ID"] = $fdata;
//	button_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "button_name";
	$fdata["GoodName"] = "button_name";
	$fdata["ownerTable"] = "custompages";
	$fdata["Label"] = GetFieldLabel("Backup_Notified_Jobs","button_name"); 
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

	

	
	$tdataBackup_Notified_Jobs["button_name"] = $fdata;
//	button_disctiption
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "button_disctiption";
	$fdata["GoodName"] = "button_disctiption";
	$fdata["ownerTable"] = "custompages";
	$fdata["Label"] = GetFieldLabel("Backup_Notified_Jobs","button_disctiption"); 
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

	

	
	$tdataBackup_Notified_Jobs["button_disctiption"] = $fdata;

	
$tables_data["Backup Notified Jobs"]=&$tdataBackup_Notified_Jobs;
$field_labels["Backup_Notified_Jobs"] = &$fieldLabelsBackup_Notified_Jobs;
$fieldToolTips["Backup Notified Jobs"] = &$fieldToolTipsBackup_Notified_Jobs;
$page_titles["Backup_Notified_Jobs"] = &$pageTitlesBackup_Notified_Jobs;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Backup Notified Jobs"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Backup Notified Jobs"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Backup_Notified_Jobs()
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
	"m_srcTableName" => "Backup Notified Jobs"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "Backup Notified Jobs";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "button_name",
	"m_strTable" => "custompages",
	"m_srcTableName" => "Backup Notified Jobs"
));

$proto7["m_sql"] = "button_name";
$proto7["m_srcTableName"] = "Backup Notified Jobs";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "button_disctiption",
	"m_strTable" => "custompages",
	"m_srcTableName" => "Backup Notified Jobs"
));

$proto9["m_sql"] = "button_disctiption";
$proto9["m_srcTableName"] = "Backup Notified Jobs";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "custompages";
$proto12["m_srcTableName"] = "Backup Notified Jobs";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "ID";
$proto12["m_columns"][] = "button_name";
$proto12["m_columns"][] = "button_disctiption";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "custompages";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "Backup Notified Jobs";
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
$proto0["m_srcTableName"]="Backup Notified Jobs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Backup_Notified_Jobs = createSqlQuery_Backup_Notified_Jobs();


	
			
	
$tdataBackup_Notified_Jobs[".sqlquery"] = $queryData_Backup_Notified_Jobs;

include_once(getabspath("include/Backup_Notified_Jobs_events.php"));
$tableEvents["Backup Notified Jobs"] = new eventclass_Backup_Notified_Jobs;
$tdataBackup_Notified_Jobs[".hasEvents"] = true;

?>