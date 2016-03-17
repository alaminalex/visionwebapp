<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTeam_Report = array();	
	$tdataTeam_Report[".truncateText"] = true;
	$tdataTeam_Report[".NumberOfChars"] = 80; 
	$tdataTeam_Report[".ShortName"] = "Team_Report";
	$tdataTeam_Report[".OwnerID"] = "";
	$tdataTeam_Report[".OriginalTable"] = "user";

//	field labels
$fieldLabelsTeam_Report = array();
$fieldToolTipsTeam_Report = array();
$pageTitlesTeam_Report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTeam_Report["English"] = array();
	$fieldToolTipsTeam_Report["English"] = array();
	$pageTitlesTeam_Report["English"] = array();
	$fieldLabelsTeam_Report["English"]["user_status"] = "User Status";
	$fieldToolTipsTeam_Report["English"]["user_status"] = "";
	$fieldLabelsTeam_Report["English"]["username"] = "Username";
	$fieldToolTipsTeam_Report["English"]["username"] = "";
	$fieldLabelsTeam_Report["English"]["department_id"] = "Department Id";
	$fieldToolTipsTeam_Report["English"]["department_id"] = "";
	$fieldLabelsTeam_Report["English"]["subdiv_id"] = "Subdiv Id";
	$fieldToolTipsTeam_Report["English"]["subdiv_id"] = "";
	$fieldLabelsTeam_Report["English"]["group_id"] = "Group Id";
	$fieldToolTipsTeam_Report["English"]["group_id"] = "";
	$fieldLabelsTeam_Report["English"]["employee_id"] = "Employee Id";
	$fieldToolTipsTeam_Report["English"]["employee_id"] = "";
	$fieldLabelsTeam_Report["English"]["fname"] = "Fname";
	$fieldToolTipsTeam_Report["English"]["fname"] = "";
	$fieldLabelsTeam_Report["English"]["lname"] = "Lname";
	$fieldToolTipsTeam_Report["English"]["lname"] = "";
	$fieldLabelsTeam_Report["English"]["nickname"] = "Nickname";
	$fieldToolTipsTeam_Report["English"]["nickname"] = "";
	$fieldLabelsTeam_Report["English"]["email"] = "Email";
	$fieldToolTipsTeam_Report["English"]["email"] = "";
	$fieldLabelsTeam_Report["English"]["phone"] = "Phone";
	$fieldToolTipsTeam_Report["English"]["phone"] = "";
	$fieldLabelsTeam_Report["English"]["mobile"] = "Mobile";
	$fieldToolTipsTeam_Report["English"]["mobile"] = "";
	$fieldLabelsTeam_Report["English"]["images_assigned"] = "Images Assigned";
	$fieldToolTipsTeam_Report["English"]["images_assigned"] = "";
	$fieldLabelsTeam_Report["English"]["user_picture"] = "User Picture";
	$fieldToolTipsTeam_Report["English"]["user_picture"] = "";
	$fieldLabelsTeam_Report["English"]["team"] = "Team";
	$fieldToolTipsTeam_Report["English"]["team"] = "";
	$fieldLabelsTeam_Report["English"]["ad_group_id"] = "Ad Group Id";
	$fieldToolTipsTeam_Report["English"]["ad_group_id"] = "";
	if (count($fieldToolTipsTeam_Report["English"]))
		$tdataTeam_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTeam_Report[""] = array();
	$fieldToolTipsTeam_Report[""] = array();
	$pageTitlesTeam_Report[""] = array();
	if (count($fieldToolTipsTeam_Report[""]))
		$tdataTeam_Report[".isUseToolTips"] = true;
}
	
	
	$tdataTeam_Report[".NCSearch"] = true;



$tdataTeam_Report[".shortTableName"] = "Team_Report";
$tdataTeam_Report[".nSecOptions"] = 0;
$tdataTeam_Report[".recsPerRowList"] = 1;
$tdataTeam_Report[".recsPerRowPrint"] = 1;
$tdataTeam_Report[".mainTableOwnerID"] = "";
$tdataTeam_Report[".moveNext"] = 1;
$tdataTeam_Report[".entityType"] = 2;

$tdataTeam_Report[".strOriginalTableName"] = "user";




$tdataTeam_Report[".showAddInPopup"] = false;

$tdataTeam_Report[".showEditInPopup"] = false;

$tdataTeam_Report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTeam_Report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTeam_Report[".fieldsForRegister"] = array();

$tdataTeam_Report[".listAjax"] = false;

	$tdataTeam_Report[".audit"] = false;

	$tdataTeam_Report[".locking"] = false;

$tdataTeam_Report[".edit"] = true;
$tdataTeam_Report[".afterEditAction"] = 1;
$tdataTeam_Report[".closePopupAfterEdit"] = 1;
$tdataTeam_Report[".afterEditActionDetTable"] = "";

$tdataTeam_Report[".add"] = true;
$tdataTeam_Report[".afterAddAction"] = 0;
$tdataTeam_Report[".closePopupAfterAdd"] = 1;
$tdataTeam_Report[".afterAddActionDetTable"] = "";

$tdataTeam_Report[".list"] = true;

$tdataTeam_Report[".inlineEdit"] = true;
$tdataTeam_Report[".inlineAdd"] = true;
$tdataTeam_Report[".view"] = true;


$tdataTeam_Report[".exportTo"] = true;

$tdataTeam_Report[".printFriendly"] = true;

$tdataTeam_Report[".delete"] = true;

$tdataTeam_Report[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataTeam_Report[".searchSaving"] = false;
//

$tdataTeam_Report[".showSearchPanel"] = true;
		$tdataTeam_Report[".flexibleSearch"] = true;		

if (isMobile())
	$tdataTeam_Report[".isUseAjaxSuggest"] = false;
else 
	$tdataTeam_Report[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																						
$tdataTeam_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTeam_Report[".isUseTimeForSearch"] = false;




$tdataTeam_Report[".detailsLinksOnList"] = "1";

$tdataTeam_Report[".allSearchFields"] = array();
$tdataTeam_Report[".filterFields"] = array();
$tdataTeam_Report[".requiredSearchFields"] = array();

$tdataTeam_Report[".allSearchFields"][] = "team";
	$tdataTeam_Report[".allSearchFields"][] = "group_id";
	$tdataTeam_Report[".allSearchFields"][] = "user_picture";
	$tdataTeam_Report[".allSearchFields"][] = "username";
	$tdataTeam_Report[".allSearchFields"][] = "employee_id";
	$tdataTeam_Report[".allSearchFields"][] = "email";
	$tdataTeam_Report[".allSearchFields"][] = "phone";
	$tdataTeam_Report[".allSearchFields"][] = "mobile";
	$tdataTeam_Report[".allSearchFields"][] = "fname";
	$tdataTeam_Report[".allSearchFields"][] = "lname";
	$tdataTeam_Report[".allSearchFields"][] = "nickname";
	$tdataTeam_Report[".allSearchFields"][] = "user_status";
	$tdataTeam_Report[".allSearchFields"][] = "department_id";
	$tdataTeam_Report[".allSearchFields"][] = "subdiv_id";
	$tdataTeam_Report[".allSearchFields"][] = "images_assigned";
	$tdataTeam_Report[".allSearchFields"][] = "ad_group_id";
	

$tdataTeam_Report[".googleLikeFields"] = array();
$tdataTeam_Report[".googleLikeFields"][] = "user_status";
$tdataTeam_Report[".googleLikeFields"][] = "username";
$tdataTeam_Report[".googleLikeFields"][] = "department_id";
$tdataTeam_Report[".googleLikeFields"][] = "subdiv_id";
$tdataTeam_Report[".googleLikeFields"][] = "group_id";
$tdataTeam_Report[".googleLikeFields"][] = "employee_id";
$tdataTeam_Report[".googleLikeFields"][] = "fname";
$tdataTeam_Report[".googleLikeFields"][] = "lname";
$tdataTeam_Report[".googleLikeFields"][] = "nickname";
$tdataTeam_Report[".googleLikeFields"][] = "email";
$tdataTeam_Report[".googleLikeFields"][] = "phone";
$tdataTeam_Report[".googleLikeFields"][] = "mobile";
$tdataTeam_Report[".googleLikeFields"][] = "images_assigned";
$tdataTeam_Report[".googleLikeFields"][] = "user_picture";
$tdataTeam_Report[".googleLikeFields"][] = "team";
$tdataTeam_Report[".googleLikeFields"][] = "ad_group_id";


$tdataTeam_Report[".advSearchFields"] = array();
$tdataTeam_Report[".advSearchFields"][] = "team";
$tdataTeam_Report[".advSearchFields"][] = "group_id";
$tdataTeam_Report[".advSearchFields"][] = "user_picture";
$tdataTeam_Report[".advSearchFields"][] = "username";
$tdataTeam_Report[".advSearchFields"][] = "employee_id";
$tdataTeam_Report[".advSearchFields"][] = "email";
$tdataTeam_Report[".advSearchFields"][] = "phone";
$tdataTeam_Report[".advSearchFields"][] = "mobile";
$tdataTeam_Report[".advSearchFields"][] = "fname";
$tdataTeam_Report[".advSearchFields"][] = "lname";
$tdataTeam_Report[".advSearchFields"][] = "nickname";
$tdataTeam_Report[".advSearchFields"][] = "user_status";
$tdataTeam_Report[".advSearchFields"][] = "department_id";
$tdataTeam_Report[".advSearchFields"][] = "subdiv_id";
$tdataTeam_Report[".advSearchFields"][] = "images_assigned";
$tdataTeam_Report[".advSearchFields"][] = "ad_group_id";

$tdataTeam_Report[".tableType"] = "report";

$tdataTeam_Report[".printerPageOrientation"] = 0;
$tdataTeam_Report[".nPrinterPageScale"] = 100;

$tdataTeam_Report[".nPrinterSplitRecords"] = 40;

$tdataTeam_Report[".nPrinterPDFSplitRecords"] = 40;



$tdataTeam_Report[".geocodingEnabled"] = false;

//report settings

$tdataTeam_Report[".reportPrintPartitionType"] = 0;	
$tdataTeam_Report[".reportPrintGroupsPerPage"] = 3;	
	$tdataTeam_Report[".lowGroup"] = 2;



$tdataTeam_Report[".reportGroupFields"] = true;
$tdataTeam_Report[".pageSize"] = 5;
$tdataTeam_Report[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "team";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "group_id";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataTeam_Report[".reportGroupFieldsData"] = $reportGroupFields;






$tdataTeam_Report[".repShowDet"] = true;

$tdataTeam_Report[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTeam_Report[".strOrderBy"] = $tstrOrderBy;

$tdataTeam_Report[".orderindexes"] = array();

$tdataTeam_Report[".sqlHead"] = "SELECT user_status,  username,  department_id,  subdiv_id,  group_id,  employee_id,  fname,  lname,  nickname,  email,  phone,  mobile,  images_assigned,  user_picture,  team,  ad_group_id";
$tdataTeam_Report[".sqlFrom"] = "FROM `user`";
$tdataTeam_Report[".sqlWhereExpr"] = "user_status =1";
$tdataTeam_Report[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTeam_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTeam_Report[".arrGroupsPerPage"] = $arrGPP;

$tdataTeam_Report[".highlightSearchResults"] = true;

$tableKeysTeam_Report = array();
$tableKeysTeam_Report[] = "username";
$tdataTeam_Report[".Keys"] = $tableKeysTeam_Report;

$tdataTeam_Report[".listFields"] = array();
$tdataTeam_Report[".listFields"][] = "team";
$tdataTeam_Report[".listFields"][] = "group_id";
$tdataTeam_Report[".listFields"][] = "user_picture";
$tdataTeam_Report[".listFields"][] = "username";
$tdataTeam_Report[".listFields"][] = "employee_id";
$tdataTeam_Report[".listFields"][] = "email";
$tdataTeam_Report[".listFields"][] = "phone";
$tdataTeam_Report[".listFields"][] = "mobile";
$tdataTeam_Report[".listFields"][] = "fname";
$tdataTeam_Report[".listFields"][] = "lname";
$tdataTeam_Report[".listFields"][] = "nickname";
$tdataTeam_Report[".listFields"][] = "user_status";
$tdataTeam_Report[".listFields"][] = "department_id";
$tdataTeam_Report[".listFields"][] = "subdiv_id";
$tdataTeam_Report[".listFields"][] = "images_assigned";
$tdataTeam_Report[".listFields"][] = "ad_group_id";

$tdataTeam_Report[".hideMobileList"] = array();


$tdataTeam_Report[".viewFields"] = array();
$tdataTeam_Report[".viewFields"][] = "team";
$tdataTeam_Report[".viewFields"][] = "group_id";
$tdataTeam_Report[".viewFields"][] = "user_picture";
$tdataTeam_Report[".viewFields"][] = "username";
$tdataTeam_Report[".viewFields"][] = "employee_id";
$tdataTeam_Report[".viewFields"][] = "email";
$tdataTeam_Report[".viewFields"][] = "phone";
$tdataTeam_Report[".viewFields"][] = "mobile";
$tdataTeam_Report[".viewFields"][] = "fname";
$tdataTeam_Report[".viewFields"][] = "lname";
$tdataTeam_Report[".viewFields"][] = "nickname";
$tdataTeam_Report[".viewFields"][] = "user_status";
$tdataTeam_Report[".viewFields"][] = "department_id";
$tdataTeam_Report[".viewFields"][] = "subdiv_id";
$tdataTeam_Report[".viewFields"][] = "images_assigned";
$tdataTeam_Report[".viewFields"][] = "ad_group_id";

$tdataTeam_Report[".addFields"] = array();
$tdataTeam_Report[".addFields"][] = "team";
$tdataTeam_Report[".addFields"][] = "group_id";
$tdataTeam_Report[".addFields"][] = "user_picture";
$tdataTeam_Report[".addFields"][] = "username";
$tdataTeam_Report[".addFields"][] = "employee_id";
$tdataTeam_Report[".addFields"][] = "email";
$tdataTeam_Report[".addFields"][] = "phone";
$tdataTeam_Report[".addFields"][] = "mobile";
$tdataTeam_Report[".addFields"][] = "fname";
$tdataTeam_Report[".addFields"][] = "lname";
$tdataTeam_Report[".addFields"][] = "nickname";
$tdataTeam_Report[".addFields"][] = "user_status";
$tdataTeam_Report[".addFields"][] = "department_id";
$tdataTeam_Report[".addFields"][] = "subdiv_id";
$tdataTeam_Report[".addFields"][] = "images_assigned";
$tdataTeam_Report[".addFields"][] = "ad_group_id";

$tdataTeam_Report[".masterListFields"] = array();
$tdataTeam_Report[".masterListFields"][] = "team";
$tdataTeam_Report[".masterListFields"][] = "group_id";
$tdataTeam_Report[".masterListFields"][] = "user_picture";
$tdataTeam_Report[".masterListFields"][] = "username";
$tdataTeam_Report[".masterListFields"][] = "employee_id";
$tdataTeam_Report[".masterListFields"][] = "email";
$tdataTeam_Report[".masterListFields"][] = "phone";
$tdataTeam_Report[".masterListFields"][] = "mobile";
$tdataTeam_Report[".masterListFields"][] = "fname";
$tdataTeam_Report[".masterListFields"][] = "lname";
$tdataTeam_Report[".masterListFields"][] = "nickname";
$tdataTeam_Report[".masterListFields"][] = "user_status";
$tdataTeam_Report[".masterListFields"][] = "department_id";
$tdataTeam_Report[".masterListFields"][] = "subdiv_id";
$tdataTeam_Report[".masterListFields"][] = "images_assigned";
$tdataTeam_Report[".masterListFields"][] = "ad_group_id";

$tdataTeam_Report[".inlineAddFields"] = array();
$tdataTeam_Report[".inlineAddFields"][] = "team";
$tdataTeam_Report[".inlineAddFields"][] = "group_id";
$tdataTeam_Report[".inlineAddFields"][] = "user_picture";
$tdataTeam_Report[".inlineAddFields"][] = "username";
$tdataTeam_Report[".inlineAddFields"][] = "employee_id";
$tdataTeam_Report[".inlineAddFields"][] = "email";
$tdataTeam_Report[".inlineAddFields"][] = "phone";
$tdataTeam_Report[".inlineAddFields"][] = "mobile";
$tdataTeam_Report[".inlineAddFields"][] = "fname";
$tdataTeam_Report[".inlineAddFields"][] = "lname";
$tdataTeam_Report[".inlineAddFields"][] = "nickname";
$tdataTeam_Report[".inlineAddFields"][] = "user_status";
$tdataTeam_Report[".inlineAddFields"][] = "department_id";
$tdataTeam_Report[".inlineAddFields"][] = "subdiv_id";
$tdataTeam_Report[".inlineAddFields"][] = "images_assigned";
$tdataTeam_Report[".inlineAddFields"][] = "ad_group_id";

$tdataTeam_Report[".editFields"] = array();
$tdataTeam_Report[".editFields"][] = "team";
$tdataTeam_Report[".editFields"][] = "group_id";
$tdataTeam_Report[".editFields"][] = "user_picture";
$tdataTeam_Report[".editFields"][] = "username";
$tdataTeam_Report[".editFields"][] = "employee_id";
$tdataTeam_Report[".editFields"][] = "email";
$tdataTeam_Report[".editFields"][] = "phone";
$tdataTeam_Report[".editFields"][] = "mobile";
$tdataTeam_Report[".editFields"][] = "fname";
$tdataTeam_Report[".editFields"][] = "lname";
$tdataTeam_Report[".editFields"][] = "nickname";
$tdataTeam_Report[".editFields"][] = "user_status";
$tdataTeam_Report[".editFields"][] = "department_id";
$tdataTeam_Report[".editFields"][] = "subdiv_id";
$tdataTeam_Report[".editFields"][] = "images_assigned";
$tdataTeam_Report[".editFields"][] = "ad_group_id";

$tdataTeam_Report[".inlineEditFields"] = array();
$tdataTeam_Report[".inlineEditFields"][] = "team";
$tdataTeam_Report[".inlineEditFields"][] = "group_id";
$tdataTeam_Report[".inlineEditFields"][] = "user_picture";
$tdataTeam_Report[".inlineEditFields"][] = "username";
$tdataTeam_Report[".inlineEditFields"][] = "employee_id";
$tdataTeam_Report[".inlineEditFields"][] = "email";
$tdataTeam_Report[".inlineEditFields"][] = "phone";
$tdataTeam_Report[".inlineEditFields"][] = "mobile";
$tdataTeam_Report[".inlineEditFields"][] = "fname";
$tdataTeam_Report[".inlineEditFields"][] = "lname";
$tdataTeam_Report[".inlineEditFields"][] = "nickname";
$tdataTeam_Report[".inlineEditFields"][] = "user_status";
$tdataTeam_Report[".inlineEditFields"][] = "department_id";
$tdataTeam_Report[".inlineEditFields"][] = "subdiv_id";
$tdataTeam_Report[".inlineEditFields"][] = "images_assigned";
$tdataTeam_Report[".inlineEditFields"][] = "ad_group_id";

$tdataTeam_Report[".exportFields"] = array();
$tdataTeam_Report[".exportFields"][] = "team";
$tdataTeam_Report[".exportFields"][] = "group_id";
$tdataTeam_Report[".exportFields"][] = "user_picture";
$tdataTeam_Report[".exportFields"][] = "username";
$tdataTeam_Report[".exportFields"][] = "employee_id";
$tdataTeam_Report[".exportFields"][] = "email";
$tdataTeam_Report[".exportFields"][] = "phone";
$tdataTeam_Report[".exportFields"][] = "mobile";
$tdataTeam_Report[".exportFields"][] = "fname";
$tdataTeam_Report[".exportFields"][] = "lname";
$tdataTeam_Report[".exportFields"][] = "nickname";
$tdataTeam_Report[".exportFields"][] = "user_status";
$tdataTeam_Report[".exportFields"][] = "department_id";
$tdataTeam_Report[".exportFields"][] = "subdiv_id";
$tdataTeam_Report[".exportFields"][] = "images_assigned";
$tdataTeam_Report[".exportFields"][] = "ad_group_id";

$tdataTeam_Report[".importFields"] = array();
$tdataTeam_Report[".importFields"][] = "user_status";
$tdataTeam_Report[".importFields"][] = "username";
$tdataTeam_Report[".importFields"][] = "department_id";
$tdataTeam_Report[".importFields"][] = "subdiv_id";
$tdataTeam_Report[".importFields"][] = "group_id";
$tdataTeam_Report[".importFields"][] = "employee_id";
$tdataTeam_Report[".importFields"][] = "fname";
$tdataTeam_Report[".importFields"][] = "lname";
$tdataTeam_Report[".importFields"][] = "nickname";
$tdataTeam_Report[".importFields"][] = "email";
$tdataTeam_Report[".importFields"][] = "phone";
$tdataTeam_Report[".importFields"][] = "mobile";
$tdataTeam_Report[".importFields"][] = "images_assigned";
$tdataTeam_Report[".importFields"][] = "user_picture";
$tdataTeam_Report[".importFields"][] = "team";
$tdataTeam_Report[".importFields"][] = "ad_group_id";

$tdataTeam_Report[".printFields"] = array();
$tdataTeam_Report[".printFields"][] = "team";
$tdataTeam_Report[".printFields"][] = "group_id";
$tdataTeam_Report[".printFields"][] = "user_picture";
$tdataTeam_Report[".printFields"][] = "username";
$tdataTeam_Report[".printFields"][] = "employee_id";
$tdataTeam_Report[".printFields"][] = "email";
$tdataTeam_Report[".printFields"][] = "phone";
$tdataTeam_Report[".printFields"][] = "mobile";
$tdataTeam_Report[".printFields"][] = "fname";
$tdataTeam_Report[".printFields"][] = "lname";
$tdataTeam_Report[".printFields"][] = "nickname";
$tdataTeam_Report[".printFields"][] = "user_status";
$tdataTeam_Report[".printFields"][] = "department_id";
$tdataTeam_Report[".printFields"][] = "subdiv_id";
$tdataTeam_Report[".printFields"][] = "images_assigned";
$tdataTeam_Report[".printFields"][] = "ad_group_id";

//	user_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_status";
	$fdata["GoodName"] = "user_status";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Team_Report","user_status"); 
	$fdata["FieldType"] = 3;
	
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
	
		$fdata["strField"] = "user_status"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_status";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
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
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataTeam_Report["user_status"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Team_Report","username"); 
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
	
		$fdata["strField"] = "username"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataTeam_Report["username"] = $fdata;
//	department_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "department_id";
	$fdata["GoodName"] = "department_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Team_Report","department_id"); 
	$fdata["FieldType"] = 3;
	
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
	
		$fdata["strField"] = "department_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "department_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "department";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "department_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "department_name";
	
		
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
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataTeam_Report["department_id"] = $fdata;
//	subdiv_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "subdiv_id";
	$fdata["GoodName"] = "subdiv_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Team_Report","subdiv_id"); 
	$fdata["FieldType"] = 3;
	
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
	
		$fdata["strField"] = "subdiv_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subdiv_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "subdivision";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "subdiv_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "subdiv_name";
	
		
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataTeam_Report["subdiv_id"] = $fdata;
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Team_Report","group_id"); 
	$fdata["FieldType"] = 3;
	
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
	
		$fdata["strField"] = "group_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_id";
	
		
		
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
	$edata["LinkFieldType"] = 3;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataTeam_Report["group_id"] = $fdata;
//	employee_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "employee_id";
	$fdata["GoodName"] = "employee_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Team_Report","employee_id"); 
	$fdata["FieldType"] = 3;
	
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
	
		$fdata["strField"] = "employee_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "employee_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
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
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataTeam_Report["employee_id"] = $fdata;
//	fname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fname";
	$fdata["GoodName"] = "fname";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Team_Report","fname"); 
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
	
		$fdata["strField"] = "fname"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fname";
	
		
		
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
			$edata["EditParams"].= " maxlength=200";
	
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

	

	
	$tdataTeam_Report["fname"] = $fdata;
//	lname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "lname";
	$fdata["GoodName"] = "lname";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Team_Report","lname"); 
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
	
		$fdata["strField"] = "lname"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lname";
	
		
		
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
			$edata["EditParams"].= " maxlength=200";
	
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

	

	
	$tdataTeam_Report["lname"] = $fdata;
//	nickname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "nickname";
	$fdata["GoodName"] = "nickname";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Team_Report","nickname"); 
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
	
		$fdata["strField"] = "nickname"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nickname";
	
		
		
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
			$edata["EditParams"].= " maxlength=200";
	
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

	

	
	$tdataTeam_Report["nickname"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Team_Report","email"); 
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
	
		$fdata["strField"] = "email"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Email Hyperlink");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "email";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");	
								
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataTeam_Report["email"] = $fdata;
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Team_Report","phone"); 
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
	
		$fdata["strField"] = "phone"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataTeam_Report["phone"] = $fdata;
//	mobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "mobile";
	$fdata["GoodName"] = "mobile";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Team_Report","mobile"); 
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
	
		$fdata["strField"] = "mobile"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mobile";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "tel";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Regular expression");	
				$edata["validateAs"]["regExp"] = "[+]\\b\\d{2}[-.]?\\d{5}[-.]?\\d{6}\\b";	
	$edata["validateAs"]["customMessages"]["RegExp"] = array("message" => "The value is invalid", "messageType" => "Text");	
					
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataTeam_Report["mobile"] = $fdata;
//	images_assigned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "images_assigned";
	$fdata["GoodName"] = "images_assigned";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Team_Report","images_assigned"); 
	$fdata["FieldType"] = 3;
	
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
	
		$fdata["strField"] = "images_assigned"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "images_assigned";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
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
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataTeam_Report["images_assigned"] = $fdata;
//	user_picture
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "user_picture";
	$fdata["GoodName"] = "user_picture";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Team_Report","user_picture"); 
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
	
		$fdata["strField"] = "user_picture"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_picture";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "File-based Image");
	
		
		
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 100;
	$vdata["ThumbHeight"] = 100;	
			$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;
	
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 100;
	
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataTeam_Report["user_picture"] = $fdata;
//	team
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "team";
	$fdata["GoodName"] = "team";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Team_Report","team"); 
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
	
		$fdata["strField"] = "team"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "team";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataTeam_Report["team"] = $fdata;
//	ad_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ad_group_id";
	$fdata["GoodName"] = "ad_group_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Team_Report","ad_group_id"); 
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
	
		$fdata["strField"] = "ad_group_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ad_group_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataTeam_Report["ad_group_id"] = $fdata;

	
$tables_data["Team Report"]=&$tdataTeam_Report;
$field_labels["Team_Report"] = &$fieldLabelsTeam_Report;
$fieldToolTips["Team Report"] = &$fieldToolTipsTeam_Report;
$page_titles["Team_Report"] = &$pageTitlesTeam_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Team Report"] = array();
//	job
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="job";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "job";
	$detailsParam["dCaptionTable"] = GetTableCaption("job");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["Team Report"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Team Report"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Team Report"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["Team Report"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Team Report"][$dIndex]["detailKeys"][]="notifer_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["Team Report"] = array();


	
				$strOriginalDetailsTable="group";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Team Report"][0] = $masterParams;	
				$masterTablesData["Team Report"][0]["masterKeys"] = array();
	$masterTablesData["Team Report"][0]["masterKeys"][]="group_id";
				$masterTablesData["Team Report"][0]["detailKeys"] = array();
	$masterTablesData["Team Report"][0]["detailKeys"][]="group_id";
		
	
				$strOriginalDetailsTable="department";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="department";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "department";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "1";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Team Report"][1] = $masterParams;	
				$masterTablesData["Team Report"][1]["masterKeys"] = array();
	$masterTablesData["Team Report"][1]["masterKeys"][]="department_id";
				$masterTablesData["Team Report"][1]["detailKeys"] = array();
	$masterTablesData["Team Report"][1]["detailKeys"][]="department_id";
		
	
				$strOriginalDetailsTable="subdivision";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="subdivision";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "subdivision";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Team Report"][2] = $masterParams;	
				$masterTablesData["Team Report"][2]["masterKeys"] = array();
	$masterTablesData["Team Report"][2]["masterKeys"][]="subdiv_id";
				$masterTablesData["Team Report"][2]["detailKeys"] = array();
	$masterTablesData["Team Report"][2]["detailKeys"][]="subdiv_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Team_Report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "user_status,  username,  department_id,  subdiv_id,  group_id,  employee_id,  fname,  lname,  nickname,  email,  phone,  mobile,  images_assigned,  user_picture,  team,  ad_group_id";
$proto0["m_strFrom"] = "FROM `user`";
$proto0["m_strWhere"] = "user_status =1";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "user_status =1";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "user_status",
	"m_strTable" => "user",
	"m_srcTableName" => "Team Report"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=1";
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
	"m_strName" => "user_status",
	"m_strTable" => "user",
	"m_srcTableName" => "Team Report"
));

$proto5["m_sql"] = "user_status";
$proto5["m_srcTableName"] = "Team Report";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "user",
	"m_srcTableName" => "Team Report"
));

$proto7["m_sql"] = "username";
$proto7["m_srcTableName"] = "Team Report";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "department_id",
	"m_strTable" => "user",
	"m_srcTableName" => "Team Report"
));

$proto9["m_sql"] = "department_id";
$proto9["m_srcTableName"] = "Team Report";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "subdiv_id",
	"m_strTable" => "user",
	"m_srcTableName" => "Team Report"
));

$proto11["m_sql"] = "subdiv_id";
$proto11["m_srcTableName"] = "Team Report";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "user",
	"m_srcTableName" => "Team Report"
));

$proto13["m_sql"] = "group_id";
$proto13["m_srcTableName"] = "Team Report";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "employee_id",
	"m_strTable" => "user",
	"m_srcTableName" => "Team Report"
));

$proto15["m_sql"] = "employee_id";
$proto15["m_srcTableName"] = "Team Report";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "fname",
	"m_strTable" => "user",
	"m_srcTableName" => "Team Report"
));

$proto17["m_sql"] = "fname";
$proto17["m_srcTableName"] = "Team Report";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "lname",
	"m_strTable" => "user",
	"m_srcTableName" => "Team Report"
));

$proto19["m_sql"] = "lname";
$proto19["m_srcTableName"] = "Team Report";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "nickname",
	"m_strTable" => "user",
	"m_srcTableName" => "Team Report"
));

$proto21["m_sql"] = "nickname";
$proto21["m_srcTableName"] = "Team Report";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "user",
	"m_srcTableName" => "Team Report"
));

$proto23["m_sql"] = "email";
$proto23["m_srcTableName"] = "Team Report";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "user",
	"m_srcTableName" => "Team Report"
));

$proto25["m_sql"] = "phone";
$proto25["m_srcTableName"] = "Team Report";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "mobile",
	"m_strTable" => "user",
	"m_srcTableName" => "Team Report"
));

$proto27["m_sql"] = "mobile";
$proto27["m_srcTableName"] = "Team Report";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "images_assigned",
	"m_strTable" => "user",
	"m_srcTableName" => "Team Report"
));

$proto29["m_sql"] = "images_assigned";
$proto29["m_srcTableName"] = "Team Report";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "user_picture",
	"m_strTable" => "user",
	"m_srcTableName" => "Team Report"
));

$proto31["m_sql"] = "user_picture";
$proto31["m_srcTableName"] = "Team Report";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Team Report"
));

$proto33["m_sql"] = "team";
$proto33["m_srcTableName"] = "Team Report";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "ad_group_id",
	"m_strTable" => "user",
	"m_srcTableName" => "Team Report"
));

$proto35["m_sql"] = "ad_group_id";
$proto35["m_srcTableName"] = "Team Report";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "user";
$proto38["m_srcTableName"] = "Team Report";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "user_id";
$proto38["m_columns"][] = "user_status";
$proto38["m_columns"][] = "username";
$proto38["m_columns"][] = "password";
$proto38["m_columns"][] = "department_id";
$proto38["m_columns"][] = "subdiv_id";
$proto38["m_columns"][] = "group_id";
$proto38["m_columns"][] = "designation";
$proto38["m_columns"][] = "employee_id";
$proto38["m_columns"][] = "fname";
$proto38["m_columns"][] = "lname";
$proto38["m_columns"][] = "nickname";
$proto38["m_columns"][] = "email";
$proto38["m_columns"][] = "phone";
$proto38["m_columns"][] = "mobile";
$proto38["m_columns"][] = "log";
$proto38["m_columns"][] = "images_assigned";
$proto38["m_columns"][] = "user_picture";
$proto38["m_columns"][] = "team";
$proto38["m_columns"][] = "ad_group_id";
$proto38["m_columns"][] = "lastaccess";
$proto38["m_columns"][] = "joining_date";
$proto38["m_columns"][] = "emergency_contact1";
$proto38["m_columns"][] = "emergency_contact2";
$proto38["m_columns"][] = "permanent_address";
$proto38["m_columns"][] = "current_address";
$proto38["m_columns"][] = "date_of_birth";
$proto38["m_columns"][] = "male_female";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "`user`";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "Team Report";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Team Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Team_Report = createSqlQuery_Team_Report();


	
																
	
$tdataTeam_Report[".sqlquery"] = $queryData_Team_Report;

$tableEvents["Team Report"] = new eventsBase;
$tdataTeam_Report[".hasEvents"] = false;

?>