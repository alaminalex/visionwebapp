<?php
require_once(getabspath("classes/cipherer.php"));




$tdataUserShift = array();	
	$tdataUserShift[".truncateText"] = true;
	$tdataUserShift[".NumberOfChars"] = 80; 
	$tdataUserShift[".ShortName"] = "UserShift";
	$tdataUserShift[".OwnerID"] = "";
	$tdataUserShift[".OriginalTable"] = "UserShift";

//	field labels
$fieldLabelsUserShift = array();
$fieldToolTipsUserShift = array();
$pageTitlesUserShift = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsUserShift["English"] = array();
	$fieldToolTipsUserShift["English"] = array();
	$pageTitlesUserShift["English"] = array();
	$fieldLabelsUserShift["English"]["id"] = "Id";
	$fieldToolTipsUserShift["English"]["id"] = "";
	$fieldLabelsUserShift["English"]["User_ID"] = "User ID";
	$fieldToolTipsUserShift["English"]["User_ID"] = "";
	$fieldLabelsUserShift["English"]["Start_Date"] = "Start Date";
	$fieldToolTipsUserShift["English"]["Start_Date"] = "";
	$fieldLabelsUserShift["English"]["Shift_Type_Id"] = "Shift Type Id";
	$fieldToolTipsUserShift["English"]["Shift_Type_Id"] = "";
	if (count($fieldToolTipsUserShift["English"]))
		$tdataUserShift[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsUserShift[""] = array();
	$fieldToolTipsUserShift[""] = array();
	$pageTitlesUserShift[""] = array();
	$fieldLabelsUserShift[""]["id"] = "Id";
	$fieldToolTipsUserShift[""]["id"] = "";
	$fieldLabelsUserShift[""]["User_ID"] = "User ID";
	$fieldToolTipsUserShift[""]["User_ID"] = "";
	$fieldLabelsUserShift[""]["Start_Date"] = "Start Date";
	$fieldToolTipsUserShift[""]["Start_Date"] = "";
	$fieldLabelsUserShift[""]["Shift_Type_Id"] = "Shift Type Id";
	$fieldToolTipsUserShift[""]["Shift_Type_Id"] = "";
	if (count($fieldToolTipsUserShift[""]))
		$tdataUserShift[".isUseToolTips"] = true;
}
	
	
	$tdataUserShift[".NCSearch"] = true;



$tdataUserShift[".shortTableName"] = "UserShift";
$tdataUserShift[".nSecOptions"] = 0;
$tdataUserShift[".recsPerRowList"] = 1;
$tdataUserShift[".recsPerRowPrint"] = 1;
$tdataUserShift[".mainTableOwnerID"] = "";
$tdataUserShift[".moveNext"] = 1;
$tdataUserShift[".entityType"] = 0;

$tdataUserShift[".strOriginalTableName"] = "UserShift";




$tdataUserShift[".showAddInPopup"] = false;

$tdataUserShift[".showEditInPopup"] = false;

$tdataUserShift[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataUserShift[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataUserShift[".fieldsForRegister"] = array();

$tdataUserShift[".listAjax"] = false;

	$tdataUserShift[".audit"] = false;

	$tdataUserShift[".locking"] = false;

$tdataUserShift[".edit"] = true;
$tdataUserShift[".afterEditAction"] = 1;
$tdataUserShift[".closePopupAfterEdit"] = 1;
$tdataUserShift[".afterEditActionDetTable"] = "";

$tdataUserShift[".add"] = true;
$tdataUserShift[".afterAddAction"] = 0;
$tdataUserShift[".closePopupAfterAdd"] = 1;
$tdataUserShift[".afterAddActionDetTable"] = "";

$tdataUserShift[".list"] = true;

$tdataUserShift[".inlineEdit"] = true;
$tdataUserShift[".inlineAdd"] = true;
$tdataUserShift[".view"] = true;

$tdataUserShift[".import"] = true;

$tdataUserShift[".exportTo"] = true;

$tdataUserShift[".printFriendly"] = true;

$tdataUserShift[".delete"] = true;

$tdataUserShift[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataUserShift[".searchSaving"] = false;
//

$tdataUserShift[".showSearchPanel"] = true;
		$tdataUserShift[".flexibleSearch"] = true;		

if (isMobile())
	$tdataUserShift[".isUseAjaxSuggest"] = false;
else 
	$tdataUserShift[".isUseAjaxSuggest"] = true;

$tdataUserShift[".rowHighlite"] = true;


																																																																																																																																															
$tdataUserShift[".addPageEvents"] = false;

// use timepicker for search panel
$tdataUserShift[".isUseTimeForSearch"] = false;





$tdataUserShift[".allSearchFields"] = array();
$tdataUserShift[".filterFields"] = array();
$tdataUserShift[".requiredSearchFields"] = array();

$tdataUserShift[".allSearchFields"][] = "id";
	$tdataUserShift[".allSearchFields"][] = "User_ID";
	$tdataUserShift[".allSearchFields"][] = "Start_Date";
	$tdataUserShift[".allSearchFields"][] = "Shift_Type_Id";
	

$tdataUserShift[".googleLikeFields"] = array();
$tdataUserShift[".googleLikeFields"][] = "id";
$tdataUserShift[".googleLikeFields"][] = "User_ID";
$tdataUserShift[".googleLikeFields"][] = "Start_Date";
$tdataUserShift[".googleLikeFields"][] = "Shift_Type_Id";


$tdataUserShift[".advSearchFields"] = array();
$tdataUserShift[".advSearchFields"][] = "id";
$tdataUserShift[".advSearchFields"][] = "User_ID";
$tdataUserShift[".advSearchFields"][] = "Start_Date";
$tdataUserShift[".advSearchFields"][] = "Shift_Type_Id";

$tdataUserShift[".tableType"] = "list";

$tdataUserShift[".printerPageOrientation"] = 0;
$tdataUserShift[".nPrinterPageScale"] = 100;

$tdataUserShift[".nPrinterSplitRecords"] = 40;

$tdataUserShift[".nPrinterPDFSplitRecords"] = 40;



$tdataUserShift[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataUserShift[".pageSize"] = 20;

$tdataUserShift[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataUserShift[".strOrderBy"] = $tstrOrderBy;

$tdataUserShift[".orderindexes"] = array();

$tdataUserShift[".sqlHead"] = "SELECT id,  	User_ID,  	Start_Date,  	Shift_Type_Id";
$tdataUserShift[".sqlFrom"] = "FROM usershift";
$tdataUserShift[".sqlWhereExpr"] = "";
$tdataUserShift[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataUserShift[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataUserShift[".arrGroupsPerPage"] = $arrGPP;

$tdataUserShift[".highlightSearchResults"] = true;

$tableKeysUserShift = array();
$tableKeysUserShift[] = "id";
$tdataUserShift[".Keys"] = $tableKeysUserShift;

$tdataUserShift[".listFields"] = array();
$tdataUserShift[".listFields"][] = "id";
$tdataUserShift[".listFields"][] = "User_ID";
$tdataUserShift[".listFields"][] = "Start_Date";
$tdataUserShift[".listFields"][] = "Shift_Type_Id";

$tdataUserShift[".hideMobileList"] = array();


$tdataUserShift[".viewFields"] = array();
$tdataUserShift[".viewFields"][] = "id";
$tdataUserShift[".viewFields"][] = "User_ID";
$tdataUserShift[".viewFields"][] = "Start_Date";
$tdataUserShift[".viewFields"][] = "Shift_Type_Id";

$tdataUserShift[".addFields"] = array();
$tdataUserShift[".addFields"][] = "User_ID";
$tdataUserShift[".addFields"][] = "Start_Date";
$tdataUserShift[".addFields"][] = "Shift_Type_Id";

$tdataUserShift[".masterListFields"] = array();
$tdataUserShift[".masterListFields"][] = "id";
$tdataUserShift[".masterListFields"][] = "User_ID";
$tdataUserShift[".masterListFields"][] = "Start_Date";
$tdataUserShift[".masterListFields"][] = "Shift_Type_Id";

$tdataUserShift[".inlineAddFields"] = array();
$tdataUserShift[".inlineAddFields"][] = "User_ID";
$tdataUserShift[".inlineAddFields"][] = "Start_Date";
$tdataUserShift[".inlineAddFields"][] = "Shift_Type_Id";

$tdataUserShift[".editFields"] = array();
$tdataUserShift[".editFields"][] = "User_ID";
$tdataUserShift[".editFields"][] = "Start_Date";
$tdataUserShift[".editFields"][] = "Shift_Type_Id";

$tdataUserShift[".inlineEditFields"] = array();
$tdataUserShift[".inlineEditFields"][] = "User_ID";
$tdataUserShift[".inlineEditFields"][] = "Start_Date";
$tdataUserShift[".inlineEditFields"][] = "Shift_Type_Id";

$tdataUserShift[".exportFields"] = array();
$tdataUserShift[".exportFields"][] = "id";
$tdataUserShift[".exportFields"][] = "User_ID";
$tdataUserShift[".exportFields"][] = "Start_Date";
$tdataUserShift[".exportFields"][] = "Shift_Type_Id";

$tdataUserShift[".importFields"] = array();
$tdataUserShift[".importFields"][] = "id";
$tdataUserShift[".importFields"][] = "User_ID";
$tdataUserShift[".importFields"][] = "Start_Date";
$tdataUserShift[".importFields"][] = "Shift_Type_Id";

$tdataUserShift[".printFields"] = array();
$tdataUserShift[".printFields"][] = "id";
$tdataUserShift[".printFields"][] = "User_ID";
$tdataUserShift[".printFields"][] = "Start_Date";
$tdataUserShift[".printFields"][] = "Shift_Type_Id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "usershift";
	$fdata["Label"] = GetFieldLabel("UserShift","id"); 
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

	

	
	$tdataUserShift["id"] = $fdata;
//	User_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "User_ID";
	$fdata["GoodName"] = "User_ID";
	$fdata["ownerTable"] = "usershift";
	$fdata["Label"] = GetFieldLabel("UserShift","User_ID"); 
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
	
		$fdata["strField"] = "User_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "User_ID";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "user1";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Shift_Type_Id", 'lookupF'=>"ShiftTypeId");
	$edata["LCType"] = 1;
		
		
			
	$edata["LinkField"] = "employee_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataUserShift["User_ID"] = $fdata;
//	Start_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Start_Date";
	$fdata["GoodName"] = "Start_Date";
	$fdata["ownerTable"] = "usershift";
	$fdata["Label"] = GetFieldLabel("UserShift","Start_Date"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Start_Date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Start_Date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 10; 
	$edata["LastYearFactor"] = 100; 
	
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataUserShift["Start_Date"] = $fdata;
//	Shift_Type_Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Shift_Type_Id";
	$fdata["GoodName"] = "Shift_Type_Id";
	$fdata["ownerTable"] = "usershift";
	$fdata["Label"] = GetFieldLabel("UserShift","Shift_Type_Id"); 
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
	
		$fdata["strField"] = "Shift_Type_Id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Shift_Type_Id";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ShiftType";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "ShiftTypeId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Description";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataUserShift["Shift_Type_Id"] = $fdata;

	
$tables_data["UserShift"]=&$tdataUserShift;
$field_labels["UserShift"] = &$fieldLabelsUserShift;
$fieldToolTips["UserShift"] = &$fieldToolTipsUserShift;
$page_titles["UserShift"] = &$pageTitlesUserShift;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["UserShift"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["UserShift"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_UserShift()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	User_ID,  	Start_Date,  	Shift_Type_Id";
$proto0["m_strFrom"] = "FROM usershift";
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
	"m_strTable" => "usershift",
	"m_srcTableName" => "UserShift"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "UserShift";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "User_ID",
	"m_strTable" => "usershift",
	"m_srcTableName" => "UserShift"
));

$proto7["m_sql"] = "User_ID";
$proto7["m_srcTableName"] = "UserShift";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Start_Date",
	"m_strTable" => "usershift",
	"m_srcTableName" => "UserShift"
));

$proto9["m_sql"] = "Start_Date";
$proto9["m_srcTableName"] = "UserShift";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Shift_Type_Id",
	"m_strTable" => "usershift",
	"m_srcTableName" => "UserShift"
));

$proto11["m_sql"] = "Shift_Type_Id";
$proto11["m_srcTableName"] = "UserShift";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "usershift";
$proto14["m_srcTableName"] = "UserShift";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "User_ID";
$proto14["m_columns"][] = "Start_Date";
$proto14["m_columns"][] = "Shift_Type_Id";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "usershift";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "UserShift";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="UserShift";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_UserShift = createSqlQuery_UserShift();


	
				
	
$tdataUserShift[".sqlquery"] = $queryData_UserShift;

$tableEvents["UserShift"] = new eventsBase;
$tdataUserShift[".hasEvents"] = false;

?>