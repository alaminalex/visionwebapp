<?php
require_once(getabspath("classes/cipherer.php"));




$tdataUsers = array();	
	$tdataUsers[".truncateText"] = true;
	$tdataUsers[".NumberOfChars"] = 80; 
	$tdataUsers[".ShortName"] = "Users";
	$tdataUsers[".OwnerID"] = "username";
	$tdataUsers[".OriginalTable"] = "user";

//	field labels
$fieldLabelsUsers = array();
$fieldToolTipsUsers = array();
$pageTitlesUsers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsUsers["English"] = array();
	$fieldToolTipsUsers["English"] = array();
	$pageTitlesUsers["English"] = array();
	$fieldLabelsUsers["English"]["user_id"] = "User Id";
	$fieldToolTipsUsers["English"]["user_id"] = "";
	$fieldLabelsUsers["English"]["user_status"] = "User Status";
	$fieldToolTipsUsers["English"]["user_status"] = "";
	$fieldLabelsUsers["English"]["username"] = "Username";
	$fieldToolTipsUsers["English"]["username"] = "";
	$fieldLabelsUsers["English"]["password"] = "Password";
	$fieldToolTipsUsers["English"]["password"] = "";
	$fieldLabelsUsers["English"]["department_id"] = "Department Id";
	$fieldToolTipsUsers["English"]["department_id"] = "";
	$fieldLabelsUsers["English"]["subdiv_id"] = "Subdiv Id";
	$fieldToolTipsUsers["English"]["subdiv_id"] = "";
	$fieldLabelsUsers["English"]["group_id"] = "Group Id";
	$fieldToolTipsUsers["English"]["group_id"] = "";
	$fieldLabelsUsers["English"]["employee_id"] = "Employee Id";
	$fieldToolTipsUsers["English"]["employee_id"] = "";
	$fieldLabelsUsers["English"]["fname"] = "Fast Name";
	$fieldToolTipsUsers["English"]["fname"] = "";
	$fieldLabelsUsers["English"]["lname"] = "Last Name";
	$fieldToolTipsUsers["English"]["lname"] = "";
	$fieldLabelsUsers["English"]["nickname"] = "Nickname";
	$fieldToolTipsUsers["English"]["nickname"] = "";
	$fieldLabelsUsers["English"]["email"] = "Email";
	$fieldToolTipsUsers["English"]["email"] = "";
	$fieldLabelsUsers["English"]["phone"] = "Phone";
	$fieldToolTipsUsers["English"]["phone"] = "";
	$fieldLabelsUsers["English"]["mobile"] = "Mobile";
	$fieldToolTipsUsers["English"]["mobile"] = "";
	$fieldLabelsUsers["English"]["log"] = "Log";
	$fieldToolTipsUsers["English"]["log"] = "";
	$fieldLabelsUsers["English"]["images_assigned"] = "Images Assigned";
	$fieldToolTipsUsers["English"]["images_assigned"] = "";
	$fieldLabelsUsers["English"]["user_picture"] = "User Picture";
	$fieldToolTipsUsers["English"]["user_picture"] = "";
	$fieldLabelsUsers["English"]["team"] = "Team";
	$fieldToolTipsUsers["English"]["team"] = "";
	$fieldLabelsUsers["English"]["ad_group_id"] = "Ad Group Id";
	$fieldToolTipsUsers["English"]["ad_group_id"] = "";
	$fieldLabelsUsers["English"]["lastaccess"] = "Lastaccess";
	$fieldToolTipsUsers["English"]["lastaccess"] = "";
	$fieldLabelsUsers["English"]["designation"] = "Designation";
	$fieldToolTipsUsers["English"]["designation"] = "";
	if (count($fieldToolTipsUsers["English"]))
		$tdataUsers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsUsers[""] = array();
	$fieldToolTipsUsers[""] = array();
	$pageTitlesUsers[""] = array();
	if (count($fieldToolTipsUsers[""]))
		$tdataUsers[".isUseToolTips"] = true;
}
	
	
	$tdataUsers[".NCSearch"] = true;



$tdataUsers[".shortTableName"] = "Users";
$tdataUsers[".nSecOptions"] = 2;
$tdataUsers[".recsPerRowList"] = 1;
$tdataUsers[".recsPerRowPrint"] = 1;
$tdataUsers[".mainTableOwnerID"] = "username";
$tdataUsers[".moveNext"] = 1;
$tdataUsers[".entityType"] = 1;

$tdataUsers[".strOriginalTableName"] = "user";




$tdataUsers[".showAddInPopup"] = false;

$tdataUsers[".showEditInPopup"] = false;

$tdataUsers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataUsers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataUsers[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataUsers[".listAjax"] = true;
else 
	$tdataUsers[".listAjax"] = false;

	$tdataUsers[".audit"] = false;

	$tdataUsers[".locking"] = false;

$tdataUsers[".edit"] = true;
$tdataUsers[".afterEditAction"] = 1;
$tdataUsers[".closePopupAfterEdit"] = 1;
$tdataUsers[".afterEditActionDetTable"] = "";


$tdataUsers[".list"] = true;

$tdataUsers[".view"] = true;


$tdataUsers[".exportTo"] = true;

$tdataUsers[".printFriendly"] = true;


$tdataUsers[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataUsers[".searchSaving"] = false;
//

$tdataUsers[".showSearchPanel"] = true;
		$tdataUsers[".flexibleSearch"] = true;		

if (isMobile())
	$tdataUsers[".isUseAjaxSuggest"] = false;
else 
	$tdataUsers[".isUseAjaxSuggest"] = true;

$tdataUsers[".rowHighlite"] = true;


																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																						
$tdataUsers[".addPageEvents"] = true;

// use timepicker for search panel
$tdataUsers[".isUseTimeForSearch"] = false;




$tdataUsers[".detailsLinksOnList"] = "1";

$tdataUsers[".allSearchFields"] = array();
$tdataUsers[".filterFields"] = array();
$tdataUsers[".requiredSearchFields"] = array();

$tdataUsers[".allSearchFields"][] = "user_id";
	$tdataUsers[".allSearchFields"][] = "employee_id";
	$tdataUsers[".allSearchFields"][] = "username";
	$tdataUsers[".allSearchFields"][] = "team";
	$tdataUsers[".allSearchFields"][] = "department_id";
	$tdataUsers[".allSearchFields"][] = "subdiv_id";
	$tdataUsers[".allSearchFields"][] = "designation";
	$tdataUsers[".allSearchFields"][] = "group_id";
	$tdataUsers[".allSearchFields"][] = "ad_group_id";
	$tdataUsers[".allSearchFields"][] = "fname";
	$tdataUsers[".allSearchFields"][] = "lname";
	$tdataUsers[".allSearchFields"][] = "nickname";
	$tdataUsers[".allSearchFields"][] = "email";
	$tdataUsers[".allSearchFields"][] = "phone";
	$tdataUsers[".allSearchFields"][] = "mobile";
	$tdataUsers[".allSearchFields"][] = "log";
	$tdataUsers[".allSearchFields"][] = "images_assigned";
	$tdataUsers[".allSearchFields"][] = "user_status";
	$tdataUsers[".allSearchFields"][] = "lastaccess";
	

$tdataUsers[".googleLikeFields"] = array();
$tdataUsers[".googleLikeFields"][] = "user_id";
$tdataUsers[".googleLikeFields"][] = "user_status";
$tdataUsers[".googleLikeFields"][] = "username";
$tdataUsers[".googleLikeFields"][] = "department_id";
$tdataUsers[".googleLikeFields"][] = "subdiv_id";
$tdataUsers[".googleLikeFields"][] = "group_id";
$tdataUsers[".googleLikeFields"][] = "employee_id";
$tdataUsers[".googleLikeFields"][] = "fname";
$tdataUsers[".googleLikeFields"][] = "lname";
$tdataUsers[".googleLikeFields"][] = "nickname";
$tdataUsers[".googleLikeFields"][] = "email";
$tdataUsers[".googleLikeFields"][] = "phone";
$tdataUsers[".googleLikeFields"][] = "mobile";
$tdataUsers[".googleLikeFields"][] = "log";
$tdataUsers[".googleLikeFields"][] = "images_assigned";
$tdataUsers[".googleLikeFields"][] = "user_picture";
$tdataUsers[".googleLikeFields"][] = "password";
$tdataUsers[".googleLikeFields"][] = "team";
$tdataUsers[".googleLikeFields"][] = "ad_group_id";
$tdataUsers[".googleLikeFields"][] = "lastaccess";
$tdataUsers[".googleLikeFields"][] = "designation";


$tdataUsers[".advSearchFields"] = array();
$tdataUsers[".advSearchFields"][] = "user_id";
$tdataUsers[".advSearchFields"][] = "employee_id";
$tdataUsers[".advSearchFields"][] = "username";
$tdataUsers[".advSearchFields"][] = "team";
$tdataUsers[".advSearchFields"][] = "department_id";
$tdataUsers[".advSearchFields"][] = "subdiv_id";
$tdataUsers[".advSearchFields"][] = "designation";
$tdataUsers[".advSearchFields"][] = "group_id";
$tdataUsers[".advSearchFields"][] = "ad_group_id";
$tdataUsers[".advSearchFields"][] = "fname";
$tdataUsers[".advSearchFields"][] = "lname";
$tdataUsers[".advSearchFields"][] = "nickname";
$tdataUsers[".advSearchFields"][] = "email";
$tdataUsers[".advSearchFields"][] = "phone";
$tdataUsers[".advSearchFields"][] = "mobile";
$tdataUsers[".advSearchFields"][] = "log";
$tdataUsers[".advSearchFields"][] = "images_assigned";
$tdataUsers[".advSearchFields"][] = "user_status";
$tdataUsers[".advSearchFields"][] = "lastaccess";

$tdataUsers[".tableType"] = "list";

$tdataUsers[".printerPageOrientation"] = 0;
$tdataUsers[".nPrinterPageScale"] = 100;

$tdataUsers[".nPrinterSplitRecords"] = 40;

$tdataUsers[".nPrinterPDFSplitRecords"] = 40;



$tdataUsers[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataUsers[".pageSize"] = 20;

$tdataUsers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataUsers[".strOrderBy"] = $tstrOrderBy;

$tdataUsers[".orderindexes"] = array();

$tdataUsers[".sqlHead"] = "SELECT user_id,  user_status,  username,  department_id,  subdiv_id,  group_id,  employee_id,  fname,  lname,  nickname,  email,  phone,  mobile,  log,  images_assigned,  user_picture,  password,  team,  ad_group_id,  lastaccess,  designation";
$tdataUsers[".sqlFrom"] = "FROM `user`";
$tdataUsers[".sqlWhereExpr"] = "user_status !=0";
$tdataUsers[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataUsers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataUsers[".arrGroupsPerPage"] = $arrGPP;

$tdataUsers[".highlightSearchResults"] = true;

$tableKeysUsers = array();
$tableKeysUsers[] = "user_id";
$tableKeysUsers[] = "username";
$tdataUsers[".Keys"] = $tableKeysUsers;

$tdataUsers[".listFields"] = array();
$tdataUsers[".listFields"][] = "user_id";
$tdataUsers[".listFields"][] = "user_picture";
$tdataUsers[".listFields"][] = "employee_id";
$tdataUsers[".listFields"][] = "username";
$tdataUsers[".listFields"][] = "team";
$tdataUsers[".listFields"][] = "department_id";
$tdataUsers[".listFields"][] = "subdiv_id";
$tdataUsers[".listFields"][] = "designation";
$tdataUsers[".listFields"][] = "group_id";
$tdataUsers[".listFields"][] = "ad_group_id";
$tdataUsers[".listFields"][] = "fname";
$tdataUsers[".listFields"][] = "lname";
$tdataUsers[".listFields"][] = "nickname";
$tdataUsers[".listFields"][] = "email";
$tdataUsers[".listFields"][] = "phone";
$tdataUsers[".listFields"][] = "mobile";
$tdataUsers[".listFields"][] = "log";
$tdataUsers[".listFields"][] = "images_assigned";
$tdataUsers[".listFields"][] = "user_status";
$tdataUsers[".listFields"][] = "lastaccess";

$tdataUsers[".hideMobileList"] = array();


$tdataUsers[".viewFields"] = array();
$tdataUsers[".viewFields"][] = "user_id";
$tdataUsers[".viewFields"][] = "user_picture";
$tdataUsers[".viewFields"][] = "employee_id";
$tdataUsers[".viewFields"][] = "username";
$tdataUsers[".viewFields"][] = "team";
$tdataUsers[".viewFields"][] = "department_id";
$tdataUsers[".viewFields"][] = "subdiv_id";
$tdataUsers[".viewFields"][] = "designation";
$tdataUsers[".viewFields"][] = "group_id";
$tdataUsers[".viewFields"][] = "ad_group_id";
$tdataUsers[".viewFields"][] = "fname";
$tdataUsers[".viewFields"][] = "lname";
$tdataUsers[".viewFields"][] = "nickname";
$tdataUsers[".viewFields"][] = "email";
$tdataUsers[".viewFields"][] = "phone";
$tdataUsers[".viewFields"][] = "mobile";
$tdataUsers[".viewFields"][] = "log";
$tdataUsers[".viewFields"][] = "images_assigned";
$tdataUsers[".viewFields"][] = "user_status";
$tdataUsers[".viewFields"][] = "lastaccess";

$tdataUsers[".addFields"] = array();
$tdataUsers[".addFields"][] = "user_picture";
$tdataUsers[".addFields"][] = "employee_id";
$tdataUsers[".addFields"][] = "username";
$tdataUsers[".addFields"][] = "team";
$tdataUsers[".addFields"][] = "department_id";
$tdataUsers[".addFields"][] = "subdiv_id";
$tdataUsers[".addFields"][] = "designation";
$tdataUsers[".addFields"][] = "group_id";
$tdataUsers[".addFields"][] = "ad_group_id";
$tdataUsers[".addFields"][] = "fname";
$tdataUsers[".addFields"][] = "lname";
$tdataUsers[".addFields"][] = "nickname";
$tdataUsers[".addFields"][] = "email";
$tdataUsers[".addFields"][] = "phone";
$tdataUsers[".addFields"][] = "mobile";
$tdataUsers[".addFields"][] = "log";
$tdataUsers[".addFields"][] = "images_assigned";
$tdataUsers[".addFields"][] = "user_status";
$tdataUsers[".addFields"][] = "lastaccess";

$tdataUsers[".masterListFields"] = array();
$tdataUsers[".masterListFields"][] = "user_id";
$tdataUsers[".masterListFields"][] = "user_picture";
$tdataUsers[".masterListFields"][] = "employee_id";
$tdataUsers[".masterListFields"][] = "username";
$tdataUsers[".masterListFields"][] = "team";
$tdataUsers[".masterListFields"][] = "department_id";
$tdataUsers[".masterListFields"][] = "subdiv_id";
$tdataUsers[".masterListFields"][] = "designation";
$tdataUsers[".masterListFields"][] = "group_id";
$tdataUsers[".masterListFields"][] = "ad_group_id";
$tdataUsers[".masterListFields"][] = "fname";
$tdataUsers[".masterListFields"][] = "lname";
$tdataUsers[".masterListFields"][] = "nickname";
$tdataUsers[".masterListFields"][] = "email";
$tdataUsers[".masterListFields"][] = "phone";
$tdataUsers[".masterListFields"][] = "mobile";
$tdataUsers[".masterListFields"][] = "log";
$tdataUsers[".masterListFields"][] = "images_assigned";
$tdataUsers[".masterListFields"][] = "user_status";
$tdataUsers[".masterListFields"][] = "lastaccess";

$tdataUsers[".inlineAddFields"] = array();

$tdataUsers[".editFields"] = array();
$tdataUsers[".editFields"][] = "user_picture";
$tdataUsers[".editFields"][] = "employee_id";
$tdataUsers[".editFields"][] = "username";
$tdataUsers[".editFields"][] = "team";
$tdataUsers[".editFields"][] = "department_id";
$tdataUsers[".editFields"][] = "subdiv_id";
$tdataUsers[".editFields"][] = "designation";
$tdataUsers[".editFields"][] = "group_id";
$tdataUsers[".editFields"][] = "ad_group_id";
$tdataUsers[".editFields"][] = "fname";
$tdataUsers[".editFields"][] = "lname";
$tdataUsers[".editFields"][] = "nickname";
$tdataUsers[".editFields"][] = "email";
$tdataUsers[".editFields"][] = "phone";
$tdataUsers[".editFields"][] = "mobile";
$tdataUsers[".editFields"][] = "log";
$tdataUsers[".editFields"][] = "images_assigned";
$tdataUsers[".editFields"][] = "user_status";
$tdataUsers[".editFields"][] = "lastaccess";

$tdataUsers[".inlineEditFields"] = array();

$tdataUsers[".exportFields"] = array();
$tdataUsers[".exportFields"][] = "user_id";
$tdataUsers[".exportFields"][] = "user_picture";
$tdataUsers[".exportFields"][] = "employee_id";
$tdataUsers[".exportFields"][] = "username";
$tdataUsers[".exportFields"][] = "team";
$tdataUsers[".exportFields"][] = "department_id";
$tdataUsers[".exportFields"][] = "subdiv_id";
$tdataUsers[".exportFields"][] = "designation";
$tdataUsers[".exportFields"][] = "group_id";
$tdataUsers[".exportFields"][] = "ad_group_id";
$tdataUsers[".exportFields"][] = "fname";
$tdataUsers[".exportFields"][] = "lname";
$tdataUsers[".exportFields"][] = "nickname";
$tdataUsers[".exportFields"][] = "email";
$tdataUsers[".exportFields"][] = "phone";
$tdataUsers[".exportFields"][] = "mobile";
$tdataUsers[".exportFields"][] = "log";
$tdataUsers[".exportFields"][] = "images_assigned";
$tdataUsers[".exportFields"][] = "user_status";
$tdataUsers[".exportFields"][] = "lastaccess";

$tdataUsers[".importFields"] = array();
$tdataUsers[".importFields"][] = "user_id";
$tdataUsers[".importFields"][] = "user_status";
$tdataUsers[".importFields"][] = "username";
$tdataUsers[".importFields"][] = "department_id";
$tdataUsers[".importFields"][] = "subdiv_id";
$tdataUsers[".importFields"][] = "group_id";
$tdataUsers[".importFields"][] = "employee_id";
$tdataUsers[".importFields"][] = "fname";
$tdataUsers[".importFields"][] = "lname";
$tdataUsers[".importFields"][] = "nickname";
$tdataUsers[".importFields"][] = "email";
$tdataUsers[".importFields"][] = "phone";
$tdataUsers[".importFields"][] = "mobile";
$tdataUsers[".importFields"][] = "log";
$tdataUsers[".importFields"][] = "images_assigned";
$tdataUsers[".importFields"][] = "user_picture";
$tdataUsers[".importFields"][] = "team";
$tdataUsers[".importFields"][] = "ad_group_id";
$tdataUsers[".importFields"][] = "lastaccess";
$tdataUsers[".importFields"][] = "designation";

$tdataUsers[".printFields"] = array();
$tdataUsers[".printFields"][] = "user_id";
$tdataUsers[".printFields"][] = "user_picture";
$tdataUsers[".printFields"][] = "employee_id";
$tdataUsers[".printFields"][] = "username";
$tdataUsers[".printFields"][] = "team";
$tdataUsers[".printFields"][] = "department_id";
$tdataUsers[".printFields"][] = "subdiv_id";
$tdataUsers[".printFields"][] = "designation";
$tdataUsers[".printFields"][] = "group_id";
$tdataUsers[".printFields"][] = "ad_group_id";
$tdataUsers[".printFields"][] = "fname";
$tdataUsers[".printFields"][] = "lname";
$tdataUsers[".printFields"][] = "nickname";
$tdataUsers[".printFields"][] = "email";
$tdataUsers[".printFields"][] = "phone";
$tdataUsers[".printFields"][] = "mobile";
$tdataUsers[".printFields"][] = "log";
$tdataUsers[".printFields"][] = "images_assigned";
$tdataUsers[".printFields"][] = "user_status";
$tdataUsers[".printFields"][] = "lastaccess";

//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Users","user_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "user_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_id";
	
		
		
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

	

	
	$tdataUsers["user_id"] = $fdata;
//	user_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_status";
	$fdata["GoodName"] = "user_status";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Users","user_status"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "status";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "status_name";
	
		
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

	

	
	$tdataUsers["user_status"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Users","username"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
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

	

	
	$tdataUsers["username"] = $fdata;
//	department_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "department_id";
	$fdata["GoodName"] = "department_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Users","department_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataUsers["department_id"] = $fdata;
//	subdiv_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "subdiv_id";
	$fdata["GoodName"] = "subdiv_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Users","subdiv_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataUsers["subdiv_id"] = $fdata;
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Users","group_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataUsers["group_id"] = $fdata;
//	employee_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "employee_id";
	$fdata["GoodName"] = "employee_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Users","employee_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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

	

	
	$tdataUsers["employee_id"] = $fdata;
//	fname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fname";
	$fdata["GoodName"] = "fname";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Users","fname"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataUsers["fname"] = $fdata;
//	lname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "lname";
	$fdata["GoodName"] = "lname";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Users","lname"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataUsers["lname"] = $fdata;
//	nickname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "nickname";
	$fdata["GoodName"] = "nickname";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Users","nickname"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataUsers["nickname"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Users","email"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataUsers["email"] = $fdata;
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Users","phone"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["masterprint"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
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
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataUsers["phone"] = $fdata;
//	mobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "mobile";
	$fdata["GoodName"] = "mobile";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Users","mobile"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataUsers["mobile"] = $fdata;
//	log
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "log";
	$fdata["GoodName"] = "log";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Users","log"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "log"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "log";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
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

	

	
	$tdataUsers["log"] = $fdata;
//	images_assigned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "images_assigned";
	$fdata["GoodName"] = "images_assigned";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Users","images_assigned"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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

	

	
	$tdataUsers["images_assigned"] = $fdata;
//	user_picture
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "user_picture";
	$fdata["GoodName"] = "user_picture";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Users","user_picture"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "user_picture"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_picture";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "/employees_profile/";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "File-based Image");
	
		
		
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 100;
	$vdata["ThumbHeight"] = 100;	
			$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;
	
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;
	
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataUsers["user_picture"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Users","password"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "password"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Password");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Password");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataUsers["password"] = $fdata;
//	team
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "team";
	$fdata["GoodName"] = "team";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Users","team"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdataUsers["team"] = $fdata;
//	ad_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "ad_group_id";
	$fdata["GoodName"] = "ad_group_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Users","ad_group_id"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ad_uggroups";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "GroupID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Label";
	
		
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

	

	
	$tdataUsers["ad_group_id"] = $fdata;
//	lastaccess
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "lastaccess";
	$fdata["GoodName"] = "lastaccess";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Users","lastaccess"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "lastaccess"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lastaccess";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
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

	

	
	$tdataUsers["lastaccess"] = $fdata;
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("Users","designation"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designation"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designation";
	
		
		
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
	$edata["LookupTable"] = "designation";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Designation";
	
		
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

	

	
	$tdataUsers["designation"] = $fdata;

	
$tables_data["Users"]=&$tdataUsers;
$field_labels["Users"] = &$fieldLabelsUsers;
$fieldToolTips["Users"] = &$fieldToolTipsUsers;
$page_titles["Users"] = &$pageTitlesUsers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Users"] = array();
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
			
	$detailsTablesData["Users"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Users"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["Users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Users"][$dIndex]["detailKeys"][]="notifer_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["Users"] = array();


	
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
					$masterTablesData["Users"][0] = $masterParams;	
				$masterTablesData["Users"][0]["masterKeys"] = array();
	$masterTablesData["Users"][0]["masterKeys"][]="group_id";
				$masterTablesData["Users"][0]["detailKeys"] = array();
	$masterTablesData["Users"][0]["detailKeys"][]="group_id";
		
	
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
					$masterTablesData["Users"][1] = $masterParams;	
				$masterTablesData["Users"][1]["masterKeys"] = array();
	$masterTablesData["Users"][1]["masterKeys"][]="department_id";
				$masterTablesData["Users"][1]["detailKeys"] = array();
	$masterTablesData["Users"][1]["detailKeys"][]="department_id";
		
	
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
					$masterTablesData["Users"][2] = $masterParams;	
				$masterTablesData["Users"][2]["masterKeys"] = array();
	$masterTablesData["Users"][2]["masterKeys"][]="subdiv_id";
				$masterTablesData["Users"][2]["detailKeys"] = array();
	$masterTablesData["Users"][2]["detailKeys"][]="subdiv_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "user_id,  user_status,  username,  department_id,  subdiv_id,  group_id,  employee_id,  fname,  lname,  nickname,  email,  phone,  mobile,  log,  images_assigned,  user_picture,  password,  team,  ad_group_id,  lastaccess,  designation";
$proto0["m_strFrom"] = "FROM `user`";
$proto0["m_strWhere"] = "user_status !=0";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "user_status !=0";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "user_status",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "!=0";
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
	"m_strName" => "user_id",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto5["m_sql"] = "user_id";
$proto5["m_srcTableName"] = "Users";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "user_status",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto7["m_sql"] = "user_status";
$proto7["m_srcTableName"] = "Users";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto9["m_sql"] = "username";
$proto9["m_srcTableName"] = "Users";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "department_id",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto11["m_sql"] = "department_id";
$proto11["m_srcTableName"] = "Users";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "subdiv_id",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto13["m_sql"] = "subdiv_id";
$proto13["m_srcTableName"] = "Users";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto15["m_sql"] = "group_id";
$proto15["m_srcTableName"] = "Users";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "employee_id",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto17["m_sql"] = "employee_id";
$proto17["m_srcTableName"] = "Users";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "fname",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto19["m_sql"] = "fname";
$proto19["m_srcTableName"] = "Users";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "lname",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto21["m_sql"] = "lname";
$proto21["m_srcTableName"] = "Users";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "nickname",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto23["m_sql"] = "nickname";
$proto23["m_srcTableName"] = "Users";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto25["m_sql"] = "email";
$proto25["m_srcTableName"] = "Users";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto27["m_sql"] = "phone";
$proto27["m_srcTableName"] = "Users";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "mobile",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto29["m_sql"] = "mobile";
$proto29["m_srcTableName"] = "Users";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "log",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto31["m_sql"] = "log";
$proto31["m_srcTableName"] = "Users";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "images_assigned",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto33["m_sql"] = "images_assigned";
$proto33["m_srcTableName"] = "Users";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "user_picture",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto35["m_sql"] = "user_picture";
$proto35["m_srcTableName"] = "Users";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto37["m_sql"] = "password";
$proto37["m_srcTableName"] = "Users";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto39["m_sql"] = "team";
$proto39["m_srcTableName"] = "Users";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "ad_group_id",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto41["m_sql"] = "ad_group_id";
$proto41["m_srcTableName"] = "Users";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "lastaccess",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto43["m_sql"] = "lastaccess";
$proto43["m_srcTableName"] = "Users";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "user",
	"m_srcTableName" => "Users"
));

$proto45["m_sql"] = "designation";
$proto45["m_srcTableName"] = "Users";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto47=array();
$proto47["m_link"] = "SQLL_MAIN";
			$proto48=array();
$proto48["m_strName"] = "user";
$proto48["m_srcTableName"] = "Users";
$proto48["m_columns"] = array();
$proto48["m_columns"][] = "user_id";
$proto48["m_columns"][] = "user_status";
$proto48["m_columns"][] = "username";
$proto48["m_columns"][] = "password";
$proto48["m_columns"][] = "department_id";
$proto48["m_columns"][] = "subdiv_id";
$proto48["m_columns"][] = "group_id";
$proto48["m_columns"][] = "designation";
$proto48["m_columns"][] = "employee_id";
$proto48["m_columns"][] = "fname";
$proto48["m_columns"][] = "lname";
$proto48["m_columns"][] = "nickname";
$proto48["m_columns"][] = "email";
$proto48["m_columns"][] = "phone";
$proto48["m_columns"][] = "mobile";
$proto48["m_columns"][] = "log";
$proto48["m_columns"][] = "images_assigned";
$proto48["m_columns"][] = "user_picture";
$proto48["m_columns"][] = "team";
$proto48["m_columns"][] = "ad_group_id";
$proto48["m_columns"][] = "lastaccess";
$proto48["m_columns"][] = "joining_date";
$proto48["m_columns"][] = "emergency_contact1";
$proto48["m_columns"][] = "emergency_contact2";
$proto48["m_columns"][] = "permanent_address";
$proto48["m_columns"][] = "current_address";
$proto48["m_columns"][] = "date_of_birth";
$proto48["m_columns"][] = "male_female";
$obj = new SQLTable($proto48);

$proto47["m_table"] = $obj;
$proto47["m_sql"] = "`user`";
$proto47["m_alias"] = "";
$proto47["m_srcTableName"] = "Users";
$proto49=array();
$proto49["m_sql"] = "";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

$proto47["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto47);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Users = createSqlQuery_Users();


	
																					
	
$tdataUsers[".sqlquery"] = $queryData_Users;

include_once(getabspath("include/Users_events.php"));
$tableEvents["Users"] = new eventclass_Users;
$tdataUsers[".hasEvents"] = true;

?>