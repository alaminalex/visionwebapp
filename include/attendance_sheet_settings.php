<?php
require_once(getabspath("classes/cipherer.php"));




$tdataattendance_sheet = array();	
	$tdataattendance_sheet[".truncateText"] = true;
	$tdataattendance_sheet[".NumberOfChars"] = 80; 
	$tdataattendance_sheet[".ShortName"] = "attendance_sheet";
	$tdataattendance_sheet[".OwnerID"] = "";
	$tdataattendance_sheet[".OriginalTable"] = "attendance_sheet";

//	field labels
$fieldLabelsattendance_sheet = array();
$fieldToolTipsattendance_sheet = array();
$pageTitlesattendance_sheet = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsattendance_sheet["English"] = array();
	$fieldToolTipsattendance_sheet["English"] = array();
	$pageTitlesattendance_sheet["English"] = array();
	$fieldLabelsattendance_sheet["English"]["datetime"] = "Datetime";
	$fieldToolTipsattendance_sheet["English"]["datetime"] = "";
	$fieldLabelsattendance_sheet["English"]["employee_id"] = "Employee Id";
	$fieldToolTipsattendance_sheet["English"]["employee_id"] = "";
	$fieldLabelsattendance_sheet["English"]["username"] = "Username";
	$fieldToolTipsattendance_sheet["English"]["username"] = "";
	$fieldLabelsattendance_sheet["English"]["group_id"] = "Group Id";
	$fieldToolTipsattendance_sheet["English"]["group_id"] = "";
	$fieldLabelsattendance_sheet["English"]["team"] = "Team";
	$fieldToolTipsattendance_sheet["English"]["team"] = "";
	$fieldLabelsattendance_sheet["English"]["ip"] = "Ip";
	$fieldToolTipsattendance_sheet["English"]["ip"] = "";
	$fieldLabelsattendance_sheet["English"]["action"] = "Action";
	$fieldToolTipsattendance_sheet["English"]["action"] = "";
	if (count($fieldToolTipsattendance_sheet["English"]))
		$tdataattendance_sheet[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsattendance_sheet[""] = array();
	$fieldToolTipsattendance_sheet[""] = array();
	$pageTitlesattendance_sheet[""] = array();
	$fieldLabelsattendance_sheet[""]["datetime"] = "Datetime";
	$fieldToolTipsattendance_sheet[""]["datetime"] = "";
	$fieldLabelsattendance_sheet[""]["employee_id"] = "Employee Id";
	$fieldToolTipsattendance_sheet[""]["employee_id"] = "";
	$fieldLabelsattendance_sheet[""]["username"] = "Username";
	$fieldToolTipsattendance_sheet[""]["username"] = "";
	$fieldLabelsattendance_sheet[""]["group_id"] = "Group Id";
	$fieldToolTipsattendance_sheet[""]["group_id"] = "";
	$fieldLabelsattendance_sheet[""]["team"] = "Team";
	$fieldToolTipsattendance_sheet[""]["team"] = "";
	$fieldLabelsattendance_sheet[""]["ip"] = "Ip";
	$fieldToolTipsattendance_sheet[""]["ip"] = "";
	$fieldLabelsattendance_sheet[""]["action"] = "Action";
	$fieldToolTipsattendance_sheet[""]["action"] = "";
	if (count($fieldToolTipsattendance_sheet[""]))
		$tdataattendance_sheet[".isUseToolTips"] = true;
}
	
	
	$tdataattendance_sheet[".NCSearch"] = true;



$tdataattendance_sheet[".shortTableName"] = "attendance_sheet";
$tdataattendance_sheet[".nSecOptions"] = 0;
$tdataattendance_sheet[".recsPerRowList"] = 1;
$tdataattendance_sheet[".recsPerRowPrint"] = 1;
$tdataattendance_sheet[".mainTableOwnerID"] = "";
$tdataattendance_sheet[".moveNext"] = 1;
$tdataattendance_sheet[".entityType"] = 0;

$tdataattendance_sheet[".strOriginalTableName"] = "attendance_sheet";




$tdataattendance_sheet[".showAddInPopup"] = false;

$tdataattendance_sheet[".showEditInPopup"] = false;

$tdataattendance_sheet[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataattendance_sheet[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataattendance_sheet[".fieldsForRegister"] = array();

$tdataattendance_sheet[".listAjax"] = false;

	$tdataattendance_sheet[".audit"] = false;

	$tdataattendance_sheet[".locking"] = false;


$tdataattendance_sheet[".add"] = true;
$tdataattendance_sheet[".afterAddAction"] = 0;
$tdataattendance_sheet[".closePopupAfterAdd"] = 1;
$tdataattendance_sheet[".afterAddActionDetTable"] = "";

$tdataattendance_sheet[".list"] = true;

$tdataattendance_sheet[".inlineAdd"] = true;

$tdataattendance_sheet[".import"] = true;

$tdataattendance_sheet[".exportTo"] = true;

$tdataattendance_sheet[".printFriendly"] = true;


$tdataattendance_sheet[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataattendance_sheet[".searchSaving"] = false;
//

$tdataattendance_sheet[".showSearchPanel"] = true;
		$tdataattendance_sheet[".flexibleSearch"] = true;		

if (isMobile())
	$tdataattendance_sheet[".isUseAjaxSuggest"] = false;
else 
	$tdataattendance_sheet[".isUseAjaxSuggest"] = true;

$tdataattendance_sheet[".rowHighlite"] = true;


																																																																																																																																															
$tdataattendance_sheet[".addPageEvents"] = false;

// use timepicker for search panel
$tdataattendance_sheet[".isUseTimeForSearch"] = false;





$tdataattendance_sheet[".allSearchFields"] = array();
$tdataattendance_sheet[".filterFields"] = array();
$tdataattendance_sheet[".requiredSearchFields"] = array();

$tdataattendance_sheet[".allSearchFields"][] = "datetime";
	$tdataattendance_sheet[".allSearchFields"][] = "employee_id";
	$tdataattendance_sheet[".allSearchFields"][] = "username";
	$tdataattendance_sheet[".allSearchFields"][] = "group_id";
	$tdataattendance_sheet[".allSearchFields"][] = "team";
	$tdataattendance_sheet[".allSearchFields"][] = "ip";
	$tdataattendance_sheet[".allSearchFields"][] = "action";
	

$tdataattendance_sheet[".googleLikeFields"] = array();
$tdataattendance_sheet[".googleLikeFields"][] = "datetime";
$tdataattendance_sheet[".googleLikeFields"][] = "employee_id";
$tdataattendance_sheet[".googleLikeFields"][] = "username";
$tdataattendance_sheet[".googleLikeFields"][] = "group_id";
$tdataattendance_sheet[".googleLikeFields"][] = "team";
$tdataattendance_sheet[".googleLikeFields"][] = "ip";
$tdataattendance_sheet[".googleLikeFields"][] = "action";


$tdataattendance_sheet[".advSearchFields"] = array();
$tdataattendance_sheet[".advSearchFields"][] = "datetime";
$tdataattendance_sheet[".advSearchFields"][] = "employee_id";
$tdataattendance_sheet[".advSearchFields"][] = "username";
$tdataattendance_sheet[".advSearchFields"][] = "group_id";
$tdataattendance_sheet[".advSearchFields"][] = "team";
$tdataattendance_sheet[".advSearchFields"][] = "ip";
$tdataattendance_sheet[".advSearchFields"][] = "action";

$tdataattendance_sheet[".tableType"] = "list";

$tdataattendance_sheet[".printerPageOrientation"] = 0;
$tdataattendance_sheet[".nPrinterPageScale"] = 100;

$tdataattendance_sheet[".nPrinterSplitRecords"] = 40;

$tdataattendance_sheet[".nPrinterPDFSplitRecords"] = 40;



$tdataattendance_sheet[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataattendance_sheet[".pageSize"] = 20;

$tdataattendance_sheet[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY DATE(data_audit.`datetime`) DESC, `user`.employee_id, data_audit.`action`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataattendance_sheet[".strOrderBy"] = $tstrOrderBy;

$tdataattendance_sheet[".orderindexes"] = array();

$tdataattendance_sheet[".sqlHead"] = "SELECT MAX(data_audit.`datetime`) AS `datetime`,  `user`.employee_id,  `user`.username,  `user`.group_id,  `user`.team,  data_audit.ip,  data_audit.`action`";
$tdataattendance_sheet[".sqlFrom"] = "FROM data_audit  INNER JOIN `user` ON data_audit.`user` = `user`.username";
$tdataattendance_sheet[".sqlWhereExpr"] = "";
$tdataattendance_sheet[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataattendance_sheet[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataattendance_sheet[".arrGroupsPerPage"] = $arrGPP;

$tdataattendance_sheet[".highlightSearchResults"] = true;

$tableKeysattendance_sheet = array();
$tdataattendance_sheet[".Keys"] = $tableKeysattendance_sheet;

$tdataattendance_sheet[".listFields"] = array();
$tdataattendance_sheet[".listFields"][] = "datetime";
$tdataattendance_sheet[".listFields"][] = "employee_id";
$tdataattendance_sheet[".listFields"][] = "username";
$tdataattendance_sheet[".listFields"][] = "group_id";
$tdataattendance_sheet[".listFields"][] = "team";
$tdataattendance_sheet[".listFields"][] = "ip";
$tdataattendance_sheet[".listFields"][] = "action";

$tdataattendance_sheet[".hideMobileList"] = array();


$tdataattendance_sheet[".viewFields"] = array();
$tdataattendance_sheet[".viewFields"][] = "datetime";
$tdataattendance_sheet[".viewFields"][] = "employee_id";
$tdataattendance_sheet[".viewFields"][] = "username";
$tdataattendance_sheet[".viewFields"][] = "group_id";
$tdataattendance_sheet[".viewFields"][] = "team";
$tdataattendance_sheet[".viewFields"][] = "ip";
$tdataattendance_sheet[".viewFields"][] = "action";

$tdataattendance_sheet[".addFields"] = array();

$tdataattendance_sheet[".masterListFields"] = array();
$tdataattendance_sheet[".masterListFields"][] = "datetime";
$tdataattendance_sheet[".masterListFields"][] = "employee_id";
$tdataattendance_sheet[".masterListFields"][] = "username";
$tdataattendance_sheet[".masterListFields"][] = "group_id";
$tdataattendance_sheet[".masterListFields"][] = "team";
$tdataattendance_sheet[".masterListFields"][] = "ip";
$tdataattendance_sheet[".masterListFields"][] = "action";

$tdataattendance_sheet[".inlineAddFields"] = array();

$tdataattendance_sheet[".editFields"] = array();

$tdataattendance_sheet[".inlineEditFields"] = array();

$tdataattendance_sheet[".exportFields"] = array();
$tdataattendance_sheet[".exportFields"][] = "datetime";
$tdataattendance_sheet[".exportFields"][] = "employee_id";
$tdataattendance_sheet[".exportFields"][] = "username";
$tdataattendance_sheet[".exportFields"][] = "group_id";
$tdataattendance_sheet[".exportFields"][] = "team";
$tdataattendance_sheet[".exportFields"][] = "ip";
$tdataattendance_sheet[".exportFields"][] = "action";

$tdataattendance_sheet[".importFields"] = array();
$tdataattendance_sheet[".importFields"][] = "datetime";
$tdataattendance_sheet[".importFields"][] = "employee_id";
$tdataattendance_sheet[".importFields"][] = "username";
$tdataattendance_sheet[".importFields"][] = "group_id";
$tdataattendance_sheet[".importFields"][] = "team";
$tdataattendance_sheet[".importFields"][] = "ip";
$tdataattendance_sheet[".importFields"][] = "action";

$tdataattendance_sheet[".printFields"] = array();
$tdataattendance_sheet[".printFields"][] = "datetime";
$tdataattendance_sheet[".printFields"][] = "employee_id";
$tdataattendance_sheet[".printFields"][] = "username";
$tdataattendance_sheet[".printFields"][] = "group_id";
$tdataattendance_sheet[".printFields"][] = "team";
$tdataattendance_sheet[".printFields"][] = "ip";
$tdataattendance_sheet[".printFields"][] = "action";

//	datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "datetime";
	$fdata["GoodName"] = "datetime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("attendance_sheet","datetime"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "datetime"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(data_audit.`datetime`)";
	
		
		
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
	
		$edata["ShowTime"] = true; 
		
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataattendance_sheet["datetime"] = $fdata;
//	employee_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "employee_id";
	$fdata["GoodName"] = "employee_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("attendance_sheet","employee_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "employee_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.employee_id";
	
		
		
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

	

	
	$tdataattendance_sheet["employee_id"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("attendance_sheet","username"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "username"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.username";
	
		
		
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

	

	
	$tdataattendance_sheet["username"] = $fdata;
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("attendance_sheet","group_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "group_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.group_id";
	
		
		
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
	$edata["LookupTable"] = "group";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "group_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "groupname";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataattendance_sheet["group_id"] = $fdata;
//	team
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "team";
	$fdata["GoodName"] = "team";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("attendance_sheet","team"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "team"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.team";
	
		
		
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
	$edata["LookupTable"] = "team";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "team_name";
	
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataattendance_sheet["team"] = $fdata;
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "data_audit";
	$fdata["Label"] = GetFieldLabel("attendance_sheet","ip"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ip"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_audit.ip";
	
		
		
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

	

	
	$tdataattendance_sheet["ip"] = $fdata;
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "data_audit";
	$fdata["Label"] = GetFieldLabel("attendance_sheet","action"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "action"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_audit.`action`";
	
		
		
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

	

	
	$tdataattendance_sheet["action"] = $fdata;

	
$tables_data["attendance_sheet"]=&$tdataattendance_sheet;
$field_labels["attendance_sheet"] = &$fieldLabelsattendance_sheet;
$fieldToolTips["attendance_sheet"] = &$fieldToolTipsattendance_sheet;
$page_titles["attendance_sheet"] = &$pageTitlesattendance_sheet;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["attendance_sheet"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["attendance_sheet"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_attendance_sheet()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MAX(data_audit.`datetime`) AS `datetime`,  `user`.employee_id,  `user`.username,  `user`.group_id,  `user`.team,  data_audit.ip,  data_audit.`action`";
$proto0["m_strFrom"] = "FROM data_audit  INNER JOIN `user` ON data_audit.`user` = `user`.username";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY DATE(data_audit.`datetime`) DESC, `user`.employee_id, data_audit.`action`";
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
			$proto6=array();
$proto6["m_functiontype"] = "SQLF_MAX";
$proto6["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "data_audit",
	"m_srcTableName" => "attendance_sheet"
));

$proto6["m_arguments"][]=$obj;
$proto6["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto6);

$proto5["m_sql"] = "MAX(data_audit.`datetime`)";
$proto5["m_srcTableName"] = "attendance_sheet";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "datetime";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "employee_id",
	"m_strTable" => "user",
	"m_srcTableName" => "attendance_sheet"
));

$proto8["m_sql"] = "`user`.employee_id";
$proto8["m_srcTableName"] = "attendance_sheet";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "user",
	"m_srcTableName" => "attendance_sheet"
));

$proto10["m_sql"] = "`user`.username";
$proto10["m_srcTableName"] = "attendance_sheet";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "user",
	"m_srcTableName" => "attendance_sheet"
));

$proto12["m_sql"] = "`user`.group_id";
$proto12["m_srcTableName"] = "attendance_sheet";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "attendance_sheet"
));

$proto14["m_sql"] = "`user`.team";
$proto14["m_srcTableName"] = "attendance_sheet";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "data_audit",
	"m_srcTableName" => "attendance_sheet"
));

$proto16["m_sql"] = "data_audit.ip";
$proto16["m_srcTableName"] = "attendance_sheet";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "data_audit",
	"m_srcTableName" => "attendance_sheet"
));

$proto18["m_sql"] = "data_audit.`action`";
$proto18["m_srcTableName"] = "attendance_sheet";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "data_audit";
$proto21["m_srcTableName"] = "attendance_sheet";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "datetime";
$proto21["m_columns"][] = "ip";
$proto21["m_columns"][] = "user";
$proto21["m_columns"][] = "table";
$proto21["m_columns"][] = "action";
$proto21["m_columns"][] = "description";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "data_audit";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "attendance_sheet";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
												$proto24=array();
$proto24["m_link"] = "SQLL_INNERJOIN";
			$proto25=array();
$proto25["m_strName"] = "user";
$proto25["m_srcTableName"] = "attendance_sheet";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "user_id";
$proto25["m_columns"][] = "user_status";
$proto25["m_columns"][] = "username";
$proto25["m_columns"][] = "password";
$proto25["m_columns"][] = "department_id";
$proto25["m_columns"][] = "subdiv_id";
$proto25["m_columns"][] = "group_id";
$proto25["m_columns"][] = "designation";
$proto25["m_columns"][] = "employee_id";
$proto25["m_columns"][] = "fname";
$proto25["m_columns"][] = "lname";
$proto25["m_columns"][] = "nickname";
$proto25["m_columns"][] = "email";
$proto25["m_columns"][] = "phone";
$proto25["m_columns"][] = "mobile";
$proto25["m_columns"][] = "log";
$proto25["m_columns"][] = "images_assigned";
$proto25["m_columns"][] = "user_picture";
$proto25["m_columns"][] = "team";
$proto25["m_columns"][] = "ad_group_id";
$proto25["m_columns"][] = "lastaccess";
$proto25["m_columns"][] = "joining_date";
$proto25["m_columns"][] = "emergency_contact1";
$proto25["m_columns"][] = "emergency_contact2";
$proto25["m_columns"][] = "permanent_address";
$proto25["m_columns"][] = "current_address";
$proto25["m_columns"][] = "date_of_birth";
$proto25["m_columns"][] = "male_female";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "INNER JOIN `user` ON data_audit.`user` = `user`.username";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "attendance_sheet";
$proto26=array();
$proto26["m_sql"] = "data_audit.`user` = `user`.username";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "data_audit",
	"m_srcTableName" => "attendance_sheet"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= `user`.username";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto28=array();
						$proto29=array();
$proto29["m_functiontype"] = "SQLF_CUSTOM";
$proto29["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "data_audit.`datetime`"
));

$proto29["m_arguments"][]=$obj;
$proto29["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto29);

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "employee_id",
	"m_strTable" => "user",
	"m_srcTableName" => "attendance_sheet"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "data_audit",
	"m_srcTableName" => "attendance_sheet"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto35=array();
						$proto36=array();
$proto36["m_functiontype"] = "SQLF_CUSTOM";
$proto36["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "data_audit.`datetime`"
));

$proto36["m_arguments"][]=$obj;
$proto36["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto36);

$proto35["m_column"]=$obj;
$proto35["m_bAsc"] = 0;
$proto35["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto35);

$proto0["m_orderby"][]=$obj;					
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "employee_id",
	"m_strTable" => "user",
	"m_srcTableName" => "attendance_sheet"
));

$proto38["m_column"]=$obj;
$proto38["m_bAsc"] = 1;
$proto38["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto38);

$proto0["m_orderby"][]=$obj;					
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "data_audit",
	"m_srcTableName" => "attendance_sheet"
));

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 1;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="attendance_sheet";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_attendance_sheet = createSqlQuery_attendance_sheet();


	
							
	
$tdataattendance_sheet[".sqlquery"] = $queryData_attendance_sheet;

$tableEvents["attendance_sheet"] = new eventsBase;
$tdataattendance_sheet[".hasEvents"] = false;

?>