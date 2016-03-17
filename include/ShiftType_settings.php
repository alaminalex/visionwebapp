<?php
require_once(getabspath("classes/cipherer.php"));




$tdataShiftType = array();	
	$tdataShiftType[".truncateText"] = true;
	$tdataShiftType[".NumberOfChars"] = 80; 
	$tdataShiftType[".ShortName"] = "ShiftType";
	$tdataShiftType[".OwnerID"] = "";
	$tdataShiftType[".OriginalTable"] = "ShiftType";

//	field labels
$fieldLabelsShiftType = array();
$fieldToolTipsShiftType = array();
$pageTitlesShiftType = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsShiftType["English"] = array();
	$fieldToolTipsShiftType["English"] = array();
	$pageTitlesShiftType["English"] = array();
	$fieldLabelsShiftType["English"]["ShiftTypeId"] = "Shift Type Id";
	$fieldToolTipsShiftType["English"]["ShiftTypeId"] = "";
	$fieldLabelsShiftType["English"]["Description"] = "Description";
	$fieldToolTipsShiftType["English"]["Description"] = "";
	$fieldLabelsShiftType["English"]["StartTime"] = "Start Time";
	$fieldToolTipsShiftType["English"]["StartTime"] = "";
	$fieldLabelsShiftType["English"]["EndTime"] = "End Time";
	$fieldToolTipsShiftType["English"]["EndTime"] = "";
	$fieldLabelsShiftType["English"]["DayInterval"] = "Day Interval";
	$fieldToolTipsShiftType["English"]["DayInterval"] = "";
	if (count($fieldToolTipsShiftType["English"]))
		$tdataShiftType[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsShiftType[""] = array();
	$fieldToolTipsShiftType[""] = array();
	$pageTitlesShiftType[""] = array();
	$fieldLabelsShiftType[""]["ShiftTypeId"] = "Shift Type Id";
	$fieldToolTipsShiftType[""]["ShiftTypeId"] = "";
	$fieldLabelsShiftType[""]["Description"] = "Description";
	$fieldToolTipsShiftType[""]["Description"] = "";
	$fieldLabelsShiftType[""]["StartTime"] = "Start Time";
	$fieldToolTipsShiftType[""]["StartTime"] = "";
	$fieldLabelsShiftType[""]["EndTime"] = "End Time";
	$fieldToolTipsShiftType[""]["EndTime"] = "";
	$fieldLabelsShiftType[""]["DayInterval"] = "Day Interval";
	$fieldToolTipsShiftType[""]["DayInterval"] = "";
	if (count($fieldToolTipsShiftType[""]))
		$tdataShiftType[".isUseToolTips"] = true;
}
	
	
	$tdataShiftType[".NCSearch"] = true;



$tdataShiftType[".shortTableName"] = "ShiftType";
$tdataShiftType[".nSecOptions"] = 0;
$tdataShiftType[".recsPerRowList"] = 1;
$tdataShiftType[".recsPerRowPrint"] = 1;
$tdataShiftType[".mainTableOwnerID"] = "";
$tdataShiftType[".moveNext"] = 1;
$tdataShiftType[".entityType"] = 0;

$tdataShiftType[".strOriginalTableName"] = "ShiftType";




$tdataShiftType[".showAddInPopup"] = false;

$tdataShiftType[".showEditInPopup"] = false;

$tdataShiftType[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataShiftType[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataShiftType[".fieldsForRegister"] = array();

$tdataShiftType[".listAjax"] = false;

	$tdataShiftType[".audit"] = false;

	$tdataShiftType[".locking"] = false;

$tdataShiftType[".edit"] = true;
$tdataShiftType[".afterEditAction"] = 1;
$tdataShiftType[".closePopupAfterEdit"] = 1;
$tdataShiftType[".afterEditActionDetTable"] = "";

$tdataShiftType[".add"] = true;
$tdataShiftType[".afterAddAction"] = 0;
$tdataShiftType[".closePopupAfterAdd"] = 1;
$tdataShiftType[".afterAddActionDetTable"] = "";

$tdataShiftType[".list"] = true;

$tdataShiftType[".inlineEdit"] = true;
$tdataShiftType[".inlineAdd"] = true;
$tdataShiftType[".view"] = true;

$tdataShiftType[".import"] = true;

$tdataShiftType[".exportTo"] = true;

$tdataShiftType[".printFriendly"] = true;

$tdataShiftType[".delete"] = true;

$tdataShiftType[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataShiftType[".searchSaving"] = false;
//

$tdataShiftType[".showSearchPanel"] = true;
		$tdataShiftType[".flexibleSearch"] = true;		

if (isMobile())
	$tdataShiftType[".isUseAjaxSuggest"] = false;
else 
	$tdataShiftType[".isUseAjaxSuggest"] = true;

$tdataShiftType[".rowHighlite"] = true;


																																																																																																																																															
$tdataShiftType[".addPageEvents"] = false;

// use timepicker for search panel
$tdataShiftType[".isUseTimeForSearch"] = false;





$tdataShiftType[".allSearchFields"] = array();
$tdataShiftType[".filterFields"] = array();
$tdataShiftType[".requiredSearchFields"] = array();

$tdataShiftType[".allSearchFields"][] = "ShiftTypeId";
	$tdataShiftType[".allSearchFields"][] = "Description";
	$tdataShiftType[".allSearchFields"][] = "StartTime";
	$tdataShiftType[".allSearchFields"][] = "EndTime";
	$tdataShiftType[".allSearchFields"][] = "DayInterval";
	

$tdataShiftType[".googleLikeFields"] = array();
$tdataShiftType[".googleLikeFields"][] = "ShiftTypeId";
$tdataShiftType[".googleLikeFields"][] = "Description";
$tdataShiftType[".googleLikeFields"][] = "StartTime";
$tdataShiftType[".googleLikeFields"][] = "EndTime";
$tdataShiftType[".googleLikeFields"][] = "DayInterval";


$tdataShiftType[".advSearchFields"] = array();
$tdataShiftType[".advSearchFields"][] = "ShiftTypeId";
$tdataShiftType[".advSearchFields"][] = "Description";
$tdataShiftType[".advSearchFields"][] = "StartTime";
$tdataShiftType[".advSearchFields"][] = "EndTime";
$tdataShiftType[".advSearchFields"][] = "DayInterval";

$tdataShiftType[".tableType"] = "list";

$tdataShiftType[".printerPageOrientation"] = 0;
$tdataShiftType[".nPrinterPageScale"] = 100;

$tdataShiftType[".nPrinterSplitRecords"] = 40;

$tdataShiftType[".nPrinterPDFSplitRecords"] = 40;



$tdataShiftType[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataShiftType[".pageSize"] = 20;

$tdataShiftType[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataShiftType[".strOrderBy"] = $tstrOrderBy;

$tdataShiftType[".orderindexes"] = array();

$tdataShiftType[".sqlHead"] = "SELECT ShiftTypeId,  	Description,  	StartTime,  	EndTime,  	DayInterval";
$tdataShiftType[".sqlFrom"] = "FROM shifttype";
$tdataShiftType[".sqlWhereExpr"] = "";
$tdataShiftType[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataShiftType[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataShiftType[".arrGroupsPerPage"] = $arrGPP;

$tdataShiftType[".highlightSearchResults"] = true;

$tableKeysShiftType = array();
$tableKeysShiftType[] = "ShiftTypeId";
$tdataShiftType[".Keys"] = $tableKeysShiftType;

$tdataShiftType[".listFields"] = array();
$tdataShiftType[".listFields"][] = "ShiftTypeId";
$tdataShiftType[".listFields"][] = "Description";
$tdataShiftType[".listFields"][] = "StartTime";
$tdataShiftType[".listFields"][] = "EndTime";
$tdataShiftType[".listFields"][] = "DayInterval";

$tdataShiftType[".hideMobileList"] = array();


$tdataShiftType[".viewFields"] = array();
$tdataShiftType[".viewFields"][] = "ShiftTypeId";
$tdataShiftType[".viewFields"][] = "Description";
$tdataShiftType[".viewFields"][] = "StartTime";
$tdataShiftType[".viewFields"][] = "EndTime";
$tdataShiftType[".viewFields"][] = "DayInterval";

$tdataShiftType[".addFields"] = array();
$tdataShiftType[".addFields"][] = "Description";
$tdataShiftType[".addFields"][] = "StartTime";
$tdataShiftType[".addFields"][] = "EndTime";
$tdataShiftType[".addFields"][] = "DayInterval";

$tdataShiftType[".masterListFields"] = array();
$tdataShiftType[".masterListFields"][] = "ShiftTypeId";
$tdataShiftType[".masterListFields"][] = "Description";
$tdataShiftType[".masterListFields"][] = "StartTime";
$tdataShiftType[".masterListFields"][] = "EndTime";
$tdataShiftType[".masterListFields"][] = "DayInterval";

$tdataShiftType[".inlineAddFields"] = array();
$tdataShiftType[".inlineAddFields"][] = "Description";
$tdataShiftType[".inlineAddFields"][] = "StartTime";
$tdataShiftType[".inlineAddFields"][] = "EndTime";
$tdataShiftType[".inlineAddFields"][] = "DayInterval";

$tdataShiftType[".editFields"] = array();
$tdataShiftType[".editFields"][] = "Description";
$tdataShiftType[".editFields"][] = "StartTime";
$tdataShiftType[".editFields"][] = "EndTime";
$tdataShiftType[".editFields"][] = "DayInterval";

$tdataShiftType[".inlineEditFields"] = array();
$tdataShiftType[".inlineEditFields"][] = "Description";
$tdataShiftType[".inlineEditFields"][] = "StartTime";
$tdataShiftType[".inlineEditFields"][] = "EndTime";
$tdataShiftType[".inlineEditFields"][] = "DayInterval";

$tdataShiftType[".exportFields"] = array();
$tdataShiftType[".exportFields"][] = "ShiftTypeId";
$tdataShiftType[".exportFields"][] = "Description";
$tdataShiftType[".exportFields"][] = "StartTime";
$tdataShiftType[".exportFields"][] = "EndTime";
$tdataShiftType[".exportFields"][] = "DayInterval";

$tdataShiftType[".importFields"] = array();
$tdataShiftType[".importFields"][] = "ShiftTypeId";
$tdataShiftType[".importFields"][] = "Description";
$tdataShiftType[".importFields"][] = "StartTime";
$tdataShiftType[".importFields"][] = "EndTime";
$tdataShiftType[".importFields"][] = "DayInterval";

$tdataShiftType[".printFields"] = array();
$tdataShiftType[".printFields"][] = "ShiftTypeId";
$tdataShiftType[".printFields"][] = "Description";
$tdataShiftType[".printFields"][] = "StartTime";
$tdataShiftType[".printFields"][] = "EndTime";
$tdataShiftType[".printFields"][] = "DayInterval";

//	ShiftTypeId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ShiftTypeId";
	$fdata["GoodName"] = "ShiftTypeId";
	$fdata["ownerTable"] = "shifttype";
	$fdata["Label"] = GetFieldLabel("ShiftType","ShiftTypeId"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ShiftTypeId"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShiftTypeId";
	
		
		
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

	

	
	$tdataShiftType["ShiftTypeId"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "shifttype";
	$fdata["Label"] = GetFieldLabel("ShiftType","Description"); 
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
	
		$fdata["strField"] = "Description"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Description";
	
		
		
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

	

	
	$tdataShiftType["Description"] = $fdata;
//	StartTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "StartTime";
	$fdata["GoodName"] = "StartTime";
	$fdata["ownerTable"] = "shifttype";
	$fdata["Label"] = GetFieldLabel("ShiftType","StartTime"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "StartTime"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StartTime";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);
	
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataShiftType["StartTime"] = $fdata;
//	EndTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "EndTime";
	$fdata["GoodName"] = "EndTime";
	$fdata["ownerTable"] = "shifttype";
	$fdata["Label"] = GetFieldLabel("ShiftType","EndTime"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "EndTime"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EndTime";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);
	
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataShiftType["EndTime"] = $fdata;
//	DayInterval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DayInterval";
	$fdata["GoodName"] = "DayInterval";
	$fdata["ownerTable"] = "shifttype";
	$fdata["Label"] = GetFieldLabel("ShiftType","DayInterval"); 
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
	
		$fdata["strField"] = "DayInterval"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DayInterval";
	
		
		
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

	

	
	$tdataShiftType["DayInterval"] = $fdata;

	
$tables_data["ShiftType"]=&$tdataShiftType;
$field_labels["ShiftType"] = &$fieldLabelsShiftType;
$fieldToolTips["ShiftType"] = &$fieldToolTipsShiftType;
$page_titles["ShiftType"] = &$pageTitlesShiftType;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ShiftType"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["ShiftType"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ShiftType()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ShiftTypeId,  	Description,  	StartTime,  	EndTime,  	DayInterval";
$proto0["m_strFrom"] = "FROM shifttype";
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
	"m_strName" => "ShiftTypeId",
	"m_strTable" => "shifttype",
	"m_srcTableName" => "ShiftType"
));

$proto5["m_sql"] = "ShiftTypeId";
$proto5["m_srcTableName"] = "ShiftType";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "shifttype",
	"m_srcTableName" => "ShiftType"
));

$proto7["m_sql"] = "Description";
$proto7["m_srcTableName"] = "ShiftType";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "StartTime",
	"m_strTable" => "shifttype",
	"m_srcTableName" => "ShiftType"
));

$proto9["m_sql"] = "StartTime";
$proto9["m_srcTableName"] = "ShiftType";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "EndTime",
	"m_strTable" => "shifttype",
	"m_srcTableName" => "ShiftType"
));

$proto11["m_sql"] = "EndTime";
$proto11["m_srcTableName"] = "ShiftType";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "DayInterval",
	"m_strTable" => "shifttype",
	"m_srcTableName" => "ShiftType"
));

$proto13["m_sql"] = "DayInterval";
$proto13["m_srcTableName"] = "ShiftType";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "shifttype";
$proto16["m_srcTableName"] = "ShiftType";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "ShiftTypeId";
$proto16["m_columns"][] = "Description";
$proto16["m_columns"][] = "StartTime";
$proto16["m_columns"][] = "EndTime";
$proto16["m_columns"][] = "DayInterval";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "shifttype";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "ShiftType";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ShiftType";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ShiftType = createSqlQuery_ShiftType();


	
					
	
$tdataShiftType[".sqlquery"] = $queryData_ShiftType;

$tableEvents["ShiftType"] = new eventsBase;
$tdataShiftType[".hasEvents"] = false;

?>