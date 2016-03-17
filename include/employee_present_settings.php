<?php
require_once(getabspath("classes/cipherer.php"));




$tdataemployee_present = array();	
	$tdataemployee_present[".truncateText"] = true;
	$tdataemployee_present[".NumberOfChars"] = 80; 
	$tdataemployee_present[".ShortName"] = "employee_present";
	$tdataemployee_present[".OwnerID"] = "";
	$tdataemployee_present[".OriginalTable"] = "data_audit";

//	field labels
$fieldLabelsemployee_present = array();
$fieldToolTipsemployee_present = array();
$pageTitlesemployee_present = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsemployee_present["English"] = array();
	$fieldToolTipsemployee_present["English"] = array();
	$pageTitlesemployee_present["English"] = array();
	$fieldLabelsemployee_present["English"]["ip"] = "Ip";
	$fieldToolTipsemployee_present["English"]["ip"] = "";
	$fieldLabelsemployee_present["English"]["action"] = "Action";
	$fieldToolTipsemployee_present["English"]["action"] = "";
	$fieldLabelsemployee_present["English"]["employee_id"] = "Employee Id";
	$fieldToolTipsemployee_present["English"]["employee_id"] = "";
	$fieldLabelsemployee_present["English"]["username"] = "Username";
	$fieldToolTipsemployee_present["English"]["username"] = "";
	$fieldLabelsemployee_present["English"]["group_id"] = "Group Id";
	$fieldToolTipsemployee_present["English"]["group_id"] = "";
	$fieldLabelsemployee_present["English"]["team"] = "Team";
	$fieldToolTipsemployee_present["English"]["team"] = "";
	$fieldLabelsemployee_present["English"]["login_time"] = "Login Time";
	$fieldToolTipsemployee_present["English"]["login_time"] = "";
	$fieldLabelsemployee_present["English"]["ShiftTypeId"] = "Shift Type Id";
	$fieldToolTipsemployee_present["English"]["ShiftTypeId"] = "";
	$fieldLabelsemployee_present["English"]["date_time"] = "Date Time";
	$fieldToolTipsemployee_present["English"]["date_time"] = "";
	if (count($fieldToolTipsemployee_present["English"]))
		$tdataemployee_present[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsemployee_present[""] = array();
	$fieldToolTipsemployee_present[""] = array();
	$pageTitlesemployee_present[""] = array();
	$fieldLabelsemployee_present[""]["ip"] = "Ip";
	$fieldToolTipsemployee_present[""]["ip"] = "";
	$fieldLabelsemployee_present[""]["action"] = "Action";
	$fieldToolTipsemployee_present[""]["action"] = "";
	$fieldLabelsemployee_present[""]["employee_id"] = "Employee Id";
	$fieldToolTipsemployee_present[""]["employee_id"] = "";
	$fieldLabelsemployee_present[""]["username"] = "Username";
	$fieldToolTipsemployee_present[""]["username"] = "";
	$fieldLabelsemployee_present[""]["group_id"] = "Group Id";
	$fieldToolTipsemployee_present[""]["group_id"] = "";
	$fieldLabelsemployee_present[""]["team"] = "Team";
	$fieldToolTipsemployee_present[""]["team"] = "";
	$fieldLabelsemployee_present[""]["login_time"] = "Login Time";
	$fieldToolTipsemployee_present[""]["login_time"] = "";
	$fieldLabelsemployee_present[""]["ShiftTypeId"] = "Shift Type Id";
	$fieldToolTipsemployee_present[""]["ShiftTypeId"] = "";
	$fieldLabelsemployee_present[""]["date_time"] = "Date Time";
	$fieldToolTipsemployee_present[""]["date_time"] = "";
	if (count($fieldToolTipsemployee_present[""]))
		$tdataemployee_present[".isUseToolTips"] = true;
}
	
	
	$tdataemployee_present[".NCSearch"] = true;



$tdataemployee_present[".shortTableName"] = "employee_present";
$tdataemployee_present[".nSecOptions"] = 0;
$tdataemployee_present[".recsPerRowList"] = 1;
$tdataemployee_present[".recsPerRowPrint"] = 1;
$tdataemployee_present[".mainTableOwnerID"] = "";
$tdataemployee_present[".moveNext"] = 1;
$tdataemployee_present[".entityType"] = 2;

$tdataemployee_present[".strOriginalTableName"] = "data_audit";




$tdataemployee_present[".showAddInPopup"] = false;

$tdataemployee_present[".showEditInPopup"] = false;

$tdataemployee_present[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataemployee_present[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataemployee_present[".fieldsForRegister"] = array();

$tdataemployee_present[".listAjax"] = false;

	$tdataemployee_present[".audit"] = false;

	$tdataemployee_present[".locking"] = false;


$tdataemployee_present[".add"] = true;
$tdataemployee_present[".afterAddAction"] = 0;
$tdataemployee_present[".closePopupAfterAdd"] = 1;
$tdataemployee_present[".afterAddActionDetTable"] = "";

$tdataemployee_present[".list"] = true;

$tdataemployee_present[".inlineAdd"] = true;


$tdataemployee_present[".exportTo"] = true;

$tdataemployee_present[".printFriendly"] = true;


$tdataemployee_present[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataemployee_present[".searchSaving"] = false;
//

$tdataemployee_present[".showSearchPanel"] = true;
		$tdataemployee_present[".flexibleSearch"] = true;		

if (isMobile())
	$tdataemployee_present[".isUseAjaxSuggest"] = false;
else 
	$tdataemployee_present[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdataemployee_present[".addPageEvents"] = false;

// use timepicker for search panel
$tdataemployee_present[".isUseTimeForSearch"] = false;





$tdataemployee_present[".allSearchFields"] = array();
$tdataemployee_present[".filterFields"] = array();
$tdataemployee_present[".requiredSearchFields"] = array();

$tdataemployee_present[".allSearchFields"][] = "date_time";
	$tdataemployee_present[".allSearchFields"][] = "employee_id";
	$tdataemployee_present[".allSearchFields"][] = "username";
	$tdataemployee_present[".allSearchFields"][] = "group_id";
	$tdataemployee_present[".allSearchFields"][] = "team";
	$tdataemployee_present[".allSearchFields"][] = "action";
	$tdataemployee_present[".allSearchFields"][] = "login_time";
	$tdataemployee_present[".allSearchFields"][] = "ShiftTypeId";
	

$tdataemployee_present[".googleLikeFields"] = array();
$tdataemployee_present[".googleLikeFields"][] = "date_time";
$tdataemployee_present[".googleLikeFields"][] = "employee_id";
$tdataemployee_present[".googleLikeFields"][] = "username";
$tdataemployee_present[".googleLikeFields"][] = "group_id";
$tdataemployee_present[".googleLikeFields"][] = "team";
$tdataemployee_present[".googleLikeFields"][] = "ip";
$tdataemployee_present[".googleLikeFields"][] = "action";
$tdataemployee_present[".googleLikeFields"][] = "login_time";
$tdataemployee_present[".googleLikeFields"][] = "ShiftTypeId";


$tdataemployee_present[".advSearchFields"] = array();
$tdataemployee_present[".advSearchFields"][] = "date_time";
$tdataemployee_present[".advSearchFields"][] = "employee_id";
$tdataemployee_present[".advSearchFields"][] = "username";
$tdataemployee_present[".advSearchFields"][] = "group_id";
$tdataemployee_present[".advSearchFields"][] = "team";
$tdataemployee_present[".advSearchFields"][] = "ip";
$tdataemployee_present[".advSearchFields"][] = "action";
$tdataemployee_present[".advSearchFields"][] = "login_time";
$tdataemployee_present[".advSearchFields"][] = "ShiftTypeId";

$tdataemployee_present[".tableType"] = "report";

$tdataemployee_present[".printerPageOrientation"] = 0;
$tdataemployee_present[".nPrinterPageScale"] = 100;

$tdataemployee_present[".nPrinterSplitRecords"] = 40;

$tdataemployee_present[".nPrinterPDFSplitRecords"] = 40;



$tdataemployee_present[".geocodingEnabled"] = false;

//report settings
$tdataemployee_present[".printReportLayout"] = 2;	

$tdataemployee_present[".reportPrintPartitionType"] = 1;	
$tdataemployee_present[".reportPrintGroupsPerPage"] = 3;	
	$tdataemployee_present[".reportPrintPDFGroupsPerPage"] = 3;	
$tdataemployee_present[".lowGroup"] = 2;



$tdataemployee_present[".reportGroupFields"] = true;
$tdataemployee_present[".pageSize"] = 1;
$tdataemployee_present[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "date_time";
	$rgroupField['groupInterval'] = 5;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "ShiftTypeId";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataemployee_present[".reportGroupFieldsData"] = $reportGroupFields;






$tdataemployee_present[".repShowDet"] = true;

$tdataemployee_present[".reportLayout"] = 2;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY DATE(data_audit.`datetime`) DESC, `user`.username";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataemployee_present[".strOrderBy"] = $tstrOrderBy;

$tdataemployee_present[".orderindexes"] = array();
$tdataemployee_present[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "DATE(data_audit.`datetime`)");
$tdataemployee_present[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "`user`.username");

$tdataemployee_present[".sqlHead"] = "SELECT DATE(data_audit.`datetime`) AS date_time,  `user`.employee_id,  `user`.username,  `user`.group_id,  `user`.team,  data_audit.ip,  data_audit.`action`,  MAX(data_audit.`datetime`) AS login_time,  shifttype.ShiftTypeId";
$tdataemployee_present[".sqlFrom"] = "FROM data_audit  LEFT OUTER JOIN `user` ON data_audit.`user` = `user`.username  LEFT OUTER JOIN usershift ON `user`.employee_id = usershift.User_ID  LEFT OUTER JOIN shifttype ON usershift.Shift_Type_Id = shifttype.ShiftTypeId";
$tdataemployee_present[".sqlWhereExpr"] = "(`user`.group_id =5 OR `user`.group_id =6 OR `user`.group_id =7 OR `user`.group_id =8) AND (data_audit.`action` =\"login\")";
$tdataemployee_present[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataemployee_present[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataemployee_present[".arrGroupsPerPage"] = $arrGPP;

$tdataemployee_present[".highlightSearchResults"] = true;

$tableKeysemployee_present = array();
$tdataemployee_present[".Keys"] = $tableKeysemployee_present;

$tdataemployee_present[".listFields"] = array();
$tdataemployee_present[".listFields"][] = "date_time";
$tdataemployee_present[".listFields"][] = "employee_id";
$tdataemployee_present[".listFields"][] = "username";
$tdataemployee_present[".listFields"][] = "group_id";
$tdataemployee_present[".listFields"][] = "team";
$tdataemployee_present[".listFields"][] = "ip";
$tdataemployee_present[".listFields"][] = "action";
$tdataemployee_present[".listFields"][] = "login_time";
$tdataemployee_present[".listFields"][] = "ShiftTypeId";

$tdataemployee_present[".hideMobileList"] = array();


$tdataemployee_present[".viewFields"] = array();
$tdataemployee_present[".viewFields"][] = "date_time";
$tdataemployee_present[".viewFields"][] = "employee_id";
$tdataemployee_present[".viewFields"][] = "username";
$tdataemployee_present[".viewFields"][] = "group_id";
$tdataemployee_present[".viewFields"][] = "team";
$tdataemployee_present[".viewFields"][] = "ip";
$tdataemployee_present[".viewFields"][] = "action";
$tdataemployee_present[".viewFields"][] = "login_time";
$tdataemployee_present[".viewFields"][] = "ShiftTypeId";

$tdataemployee_present[".addFields"] = array();
$tdataemployee_present[".addFields"][] = "ip";
$tdataemployee_present[".addFields"][] = "action";

$tdataemployee_present[".masterListFields"] = array();
$tdataemployee_present[".masterListFields"][] = "date_time";
$tdataemployee_present[".masterListFields"][] = "employee_id";
$tdataemployee_present[".masterListFields"][] = "username";
$tdataemployee_present[".masterListFields"][] = "group_id";
$tdataemployee_present[".masterListFields"][] = "team";
$tdataemployee_present[".masterListFields"][] = "ip";
$tdataemployee_present[".masterListFields"][] = "action";
$tdataemployee_present[".masterListFields"][] = "login_time";
$tdataemployee_present[".masterListFields"][] = "ShiftTypeId";

$tdataemployee_present[".inlineAddFields"] = array();
$tdataemployee_present[".inlineAddFields"][] = "ip";
$tdataemployee_present[".inlineAddFields"][] = "action";

$tdataemployee_present[".editFields"] = array();
$tdataemployee_present[".editFields"][] = "ip";
$tdataemployee_present[".editFields"][] = "action";

$tdataemployee_present[".inlineEditFields"] = array();
$tdataemployee_present[".inlineEditFields"][] = "ip";
$tdataemployee_present[".inlineEditFields"][] = "action";

$tdataemployee_present[".exportFields"] = array();
$tdataemployee_present[".exportFields"][] = "date_time";
$tdataemployee_present[".exportFields"][] = "employee_id";
$tdataemployee_present[".exportFields"][] = "username";
$tdataemployee_present[".exportFields"][] = "group_id";
$tdataemployee_present[".exportFields"][] = "team";
$tdataemployee_present[".exportFields"][] = "ip";
$tdataemployee_present[".exportFields"][] = "action";
$tdataemployee_present[".exportFields"][] = "login_time";
$tdataemployee_present[".exportFields"][] = "ShiftTypeId";

$tdataemployee_present[".importFields"] = array();
$tdataemployee_present[".importFields"][] = "date_time";
$tdataemployee_present[".importFields"][] = "employee_id";
$tdataemployee_present[".importFields"][] = "username";
$tdataemployee_present[".importFields"][] = "group_id";
$tdataemployee_present[".importFields"][] = "team";
$tdataemployee_present[".importFields"][] = "ip";
$tdataemployee_present[".importFields"][] = "action";
$tdataemployee_present[".importFields"][] = "login_time";
$tdataemployee_present[".importFields"][] = "ShiftTypeId";

$tdataemployee_present[".printFields"] = array();
$tdataemployee_present[".printFields"][] = "date_time";
$tdataemployee_present[".printFields"][] = "employee_id";
$tdataemployee_present[".printFields"][] = "username";
$tdataemployee_present[".printFields"][] = "group_id";
$tdataemployee_present[".printFields"][] = "team";
$tdataemployee_present[".printFields"][] = "ip";
$tdataemployee_present[".printFields"][] = "action";
$tdataemployee_present[".printFields"][] = "login_time";
$tdataemployee_present[".printFields"][] = "ShiftTypeId";

//	date_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "date_time";
	$fdata["GoodName"] = "date_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("employee_present","date_time"); 
	$fdata["FieldType"] = 135;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "date_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE(data_audit.`datetime`)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataemployee_present["date_time"] = $fdata;
//	employee_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "employee_id";
	$fdata["GoodName"] = "employee_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("employee_present","employee_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataemployee_present["employee_id"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("employee_present","username"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataemployee_present["username"] = $fdata;
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("employee_present","group_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
	$edata["LookupOrderBy"] = "groupname";
	
		
			
		
				
	
	
		
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataemployee_present["group_id"] = $fdata;
//	team
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "team";
	$fdata["GoodName"] = "team";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("employee_present","team"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
	$edata["LookupOrderBy"] = "team_name";
	
		
			
		
				
	
	
		
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataemployee_present["team"] = $fdata;
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "data_audit";
	$fdata["Label"] = GetFieldLabel("employee_present","ip"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ip"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_audit.ip";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=40";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataemployee_present["ip"] = $fdata;
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "data_audit";
	$fdata["Label"] = GetFieldLabel("employee_present","action"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=250";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataemployee_present["action"] = $fdata;
//	login_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "login_time";
	$fdata["GoodName"] = "login_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("employee_present","login_time"); 
	$fdata["FieldType"] = 135;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "login_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(data_audit.`datetime`)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataemployee_present["login_time"] = $fdata;
//	ShiftTypeId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ShiftTypeId";
	$fdata["GoodName"] = "ShiftTypeId";
	$fdata["ownerTable"] = "shifttype";
	$fdata["Label"] = GetFieldLabel("employee_present","ShiftTypeId"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ShiftTypeId"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shifttype.ShiftTypeId";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataemployee_present["ShiftTypeId"] = $fdata;

	
$tables_data["employee_present"]=&$tdataemployee_present;
$field_labels["employee_present"] = &$fieldLabelsemployee_present;
$fieldToolTips["employee_present"] = &$fieldToolTipsemployee_present;
$page_titles["employee_present"] = &$pageTitlesemployee_present;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["employee_present"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["employee_present"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_employee_present()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DATE(data_audit.`datetime`) AS date_time,  `user`.employee_id,  `user`.username,  `user`.group_id,  `user`.team,  data_audit.ip,  data_audit.`action`,  MAX(data_audit.`datetime`) AS login_time,  shifttype.ShiftTypeId";
$proto0["m_strFrom"] = "FROM data_audit  LEFT OUTER JOIN `user` ON data_audit.`user` = `user`.username  LEFT OUTER JOIN usershift ON `user`.employee_id = usershift.User_ID  LEFT OUTER JOIN shifttype ON usershift.Shift_Type_Id = shifttype.ShiftTypeId";
$proto0["m_strWhere"] = "(`user`.group_id =5 OR `user`.group_id =6 OR `user`.group_id =7 OR `user`.group_id =8) AND (data_audit.`action` =\"login\")";
$proto0["m_strOrderBy"] = "ORDER BY DATE(data_audit.`datetime`) DESC, `user`.username";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(`user`.group_id =5 OR `user`.group_id =6 OR `user`.group_id =7 OR `user`.group_id =8) AND (data_audit.`action` =\"login\")";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(`user`.group_id =5 OR `user`.group_id =6 OR `user`.group_id =7 OR `user`.group_id =8) AND (data_audit.`action` =\"login\")"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "`user`.group_id =5 OR `user`.group_id =6 OR `user`.group_id =7 OR `user`.group_id =8";
$proto3["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`user`.group_id =5 OR `user`.group_id =6 OR `user`.group_id =7 OR `user`.group_id =8"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
						$proto5=array();
$proto5["m_sql"] = "`user`.group_id =5";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "user",
	"m_srcTableName" => "employee_present"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "=5";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto3["m_contained"][]=$obj;
						$proto7=array();
$proto7["m_sql"] = "`user`.group_id =6";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "user",
	"m_srcTableName" => "employee_present"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "=6";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

			$proto3["m_contained"][]=$obj;
						$proto9=array();
$proto9["m_sql"] = "`user`.group_id =7";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "user",
	"m_srcTableName" => "employee_present"
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "=7";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

			$proto3["m_contained"][]=$obj;
						$proto11=array();
$proto11["m_sql"] = "`user`.group_id =8";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "user",
	"m_srcTableName" => "employee_present"
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "=8";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

			$proto3["m_contained"][]=$obj;
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto13=array();
$proto13["m_sql"] = "data_audit.`action` =\"login\"";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "data_audit",
	"m_srcTableName" => "employee_present"
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "=\"login\"";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = true;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
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

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto17=array();
			$proto18=array();
$proto18["m_functiontype"] = "SQLF_CUSTOM";
$proto18["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "data_audit.`datetime`"
));

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto18);

$proto17["m_sql"] = "DATE(data_audit.`datetime`)";
$proto17["m_srcTableName"] = "employee_present";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "date_time";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "employee_id",
	"m_strTable" => "user",
	"m_srcTableName" => "employee_present"
));

$proto20["m_sql"] = "`user`.employee_id";
$proto20["m_srcTableName"] = "employee_present";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "user",
	"m_srcTableName" => "employee_present"
));

$proto22["m_sql"] = "`user`.username";
$proto22["m_srcTableName"] = "employee_present";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "user",
	"m_srcTableName" => "employee_present"
));

$proto24["m_sql"] = "`user`.group_id";
$proto24["m_srcTableName"] = "employee_present";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "employee_present"
));

$proto26["m_sql"] = "`user`.team";
$proto26["m_srcTableName"] = "employee_present";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "data_audit",
	"m_srcTableName" => "employee_present"
));

$proto28["m_sql"] = "data_audit.ip";
$proto28["m_srcTableName"] = "employee_present";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "data_audit",
	"m_srcTableName" => "employee_present"
));

$proto30["m_sql"] = "data_audit.`action`";
$proto30["m_srcTableName"] = "employee_present";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$proto33=array();
$proto33["m_functiontype"] = "SQLF_MAX";
$proto33["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "data_audit",
	"m_srcTableName" => "employee_present"
));

$proto33["m_arguments"][]=$obj;
$proto33["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto33);

$proto32["m_sql"] = "MAX(data_audit.`datetime`)";
$proto32["m_srcTableName"] = "employee_present";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "login_time";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "ShiftTypeId",
	"m_strTable" => "shifttype",
	"m_srcTableName" => "employee_present"
));

$proto35["m_sql"] = "shifttype.ShiftTypeId";
$proto35["m_srcTableName"] = "employee_present";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "data_audit";
$proto38["m_srcTableName"] = "employee_present";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "id";
$proto38["m_columns"][] = "datetime";
$proto38["m_columns"][] = "ip";
$proto38["m_columns"][] = "user";
$proto38["m_columns"][] = "table";
$proto38["m_columns"][] = "action";
$proto38["m_columns"][] = "description";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "data_audit";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "employee_present";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
												$proto41=array();
$proto41["m_link"] = "SQLL_LEFTJOIN";
			$proto42=array();
$proto42["m_strName"] = "user";
$proto42["m_srcTableName"] = "employee_present";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "user_id";
$proto42["m_columns"][] = "user_status";
$proto42["m_columns"][] = "username";
$proto42["m_columns"][] = "password";
$proto42["m_columns"][] = "department_id";
$proto42["m_columns"][] = "subdiv_id";
$proto42["m_columns"][] = "group_id";
$proto42["m_columns"][] = "designation";
$proto42["m_columns"][] = "employee_id";
$proto42["m_columns"][] = "fname";
$proto42["m_columns"][] = "lname";
$proto42["m_columns"][] = "nickname";
$proto42["m_columns"][] = "email";
$proto42["m_columns"][] = "phone";
$proto42["m_columns"][] = "mobile";
$proto42["m_columns"][] = "log";
$proto42["m_columns"][] = "images_assigned";
$proto42["m_columns"][] = "user_picture";
$proto42["m_columns"][] = "team";
$proto42["m_columns"][] = "ad_group_id";
$proto42["m_columns"][] = "lastaccess";
$proto42["m_columns"][] = "joining_date";
$proto42["m_columns"][] = "emergency_contact1";
$proto42["m_columns"][] = "emergency_contact2";
$proto42["m_columns"][] = "permanent_address";
$proto42["m_columns"][] = "current_address";
$proto42["m_columns"][] = "date_of_birth";
$proto42["m_columns"][] = "male_female";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "LEFT OUTER JOIN `user` ON data_audit.`user` = `user`.username";
$proto41["m_alias"] = "";
$proto41["m_srcTableName"] = "employee_present";
$proto43=array();
$proto43["m_sql"] = "data_audit.`user` = `user`.username";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "data_audit",
	"m_srcTableName" => "employee_present"
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "= `user`.username";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
												$proto45=array();
$proto45["m_link"] = "SQLL_LEFTJOIN";
			$proto46=array();
$proto46["m_strName"] = "usershift";
$proto46["m_srcTableName"] = "employee_present";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "id";
$proto46["m_columns"][] = "User_ID";
$proto46["m_columns"][] = "Start_Date";
$proto46["m_columns"][] = "Shift_Type_Id";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "LEFT OUTER JOIN usershift ON `user`.employee_id = usershift.User_ID";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "employee_present";
$proto47=array();
$proto47["m_sql"] = "`user`.employee_id = usershift.User_ID";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "employee_id",
	"m_strTable" => "user",
	"m_srcTableName" => "employee_present"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "= usershift.User_ID";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
												$proto49=array();
$proto49["m_link"] = "SQLL_LEFTJOIN";
			$proto50=array();
$proto50["m_strName"] = "shifttype";
$proto50["m_srcTableName"] = "employee_present";
$proto50["m_columns"] = array();
$proto50["m_columns"][] = "ShiftTypeId";
$proto50["m_columns"][] = "Description";
$proto50["m_columns"][] = "StartTime";
$proto50["m_columns"][] = "EndTime";
$proto50["m_columns"][] = "DayInterval";
$obj = new SQLTable($proto50);

$proto49["m_table"] = $obj;
$proto49["m_sql"] = "LEFT OUTER JOIN shifttype ON usershift.Shift_Type_Id = shifttype.ShiftTypeId";
$proto49["m_alias"] = "";
$proto49["m_srcTableName"] = "employee_present";
$proto51=array();
$proto51["m_sql"] = "usershift.Shift_Type_Id = shifttype.ShiftTypeId";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Shift_Type_Id",
	"m_strTable" => "usershift",
	"m_srcTableName" => "employee_present"
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "= shifttype.ShiftTypeId";
$proto51["m_havingmode"] = false;
$proto51["m_inBrackets"] = false;
$proto51["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto51);

$proto49["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto49);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto53=array();
						$proto54=array();
$proto54["m_functiontype"] = "SQLF_CUSTOM";
$proto54["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "data_audit.`datetime`"
));

$proto54["m_arguments"][]=$obj;
$proto54["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto54);

$proto53["m_column"]=$obj;
$obj = new SQLGroupByItem($proto53);

$proto0["m_groupby"][]=$obj;
												$proto56=array();
						$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "user",
	"m_srcTableName" => "employee_present"
));

$proto56["m_column"]=$obj;
$obj = new SQLGroupByItem($proto56);

$proto0["m_groupby"][]=$obj;
												$proto58=array();
						$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "data_audit",
	"m_srcTableName" => "employee_present"
));

$proto58["m_column"]=$obj;
$obj = new SQLGroupByItem($proto58);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto60=array();
						$proto61=array();
$proto61["m_functiontype"] = "SQLF_CUSTOM";
$proto61["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "data_audit.`datetime`"
));

$proto61["m_arguments"][]=$obj;
$proto61["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto61);

$proto60["m_column"]=$obj;
$proto60["m_bAsc"] = 0;
$proto60["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto60);

$proto0["m_orderby"][]=$obj;					
												$proto63=array();
						$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "user",
	"m_srcTableName" => "employee_present"
));

$proto63["m_column"]=$obj;
$proto63["m_bAsc"] = 1;
$proto63["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto63);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="employee_present";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_employee_present = createSqlQuery_employee_present();


	
									
	
$tdataemployee_present[".sqlquery"] = $queryData_employee_present;

$tableEvents["employee_present"] = new eventsBase;
$tdataemployee_present[".hasEvents"] = false;

?>