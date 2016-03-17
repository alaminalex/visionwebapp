<?php
require_once(getabspath("classes/cipherer.php"));




$tdatauser = array();	
	$tdatauser[".truncateText"] = true;
	$tdatauser[".NumberOfChars"] = 80; 
	$tdatauser[".ShortName"] = "user";
	$tdatauser[".OwnerID"] = "";
	$tdatauser[".OriginalTable"] = "user";

//	field labels
$fieldLabelsuser = array();
$fieldToolTipsuser = array();
$pageTitlesuser = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuser["English"] = array();
	$fieldToolTipsuser["English"] = array();
	$pageTitlesuser["English"] = array();
	$fieldLabelsuser["English"]["user_id"] = "User Id";
	$fieldToolTipsuser["English"]["user_id"] = "";
	$fieldLabelsuser["English"]["user_status"] = "User Status";
	$fieldToolTipsuser["English"]["user_status"] = "";
	$fieldLabelsuser["English"]["username"] = "Username";
	$fieldToolTipsuser["English"]["username"] = "";
	$fieldLabelsuser["English"]["password"] = "Password";
	$fieldToolTipsuser["English"]["password"] = "";
	$fieldLabelsuser["English"]["department_id"] = "Department Id";
	$fieldToolTipsuser["English"]["department_id"] = "";
	$fieldLabelsuser["English"]["subdiv_id"] = "Subdiv Id";
	$fieldToolTipsuser["English"]["subdiv_id"] = "";
	$fieldLabelsuser["English"]["group_id"] = "Group Id";
	$fieldToolTipsuser["English"]["group_id"] = "";
	$fieldLabelsuser["English"]["employee_id"] = "Employee Id";
	$fieldToolTipsuser["English"]["employee_id"] = "";
	$fieldLabelsuser["English"]["fname"] = "Fast Name";
	$fieldToolTipsuser["English"]["fname"] = "";
	$fieldLabelsuser["English"]["lname"] = "Last Name";
	$fieldToolTipsuser["English"]["lname"] = "";
	$fieldLabelsuser["English"]["nickname"] = "Nickname";
	$fieldToolTipsuser["English"]["nickname"] = "";
	$fieldLabelsuser["English"]["email"] = "Email";
	$fieldToolTipsuser["English"]["email"] = "";
	$fieldLabelsuser["English"]["phone"] = "Phone";
	$fieldToolTipsuser["English"]["phone"] = "";
	$fieldLabelsuser["English"]["mobile"] = "Mobile";
	$fieldToolTipsuser["English"]["mobile"] = "";
	$fieldLabelsuser["English"]["log"] = "Log";
	$fieldToolTipsuser["English"]["log"] = "";
	$fieldLabelsuser["English"]["images_assigned"] = "Images Assigned";
	$fieldToolTipsuser["English"]["images_assigned"] = "";
	$fieldLabelsuser["English"]["user_picture"] = "User Picture";
	$fieldToolTipsuser["English"]["user_picture"] = "";
	$fieldLabelsuser["English"]["team"] = "Team";
	$fieldToolTipsuser["English"]["team"] = "";
	$fieldLabelsuser["English"]["ad_group_id"] = "Ad Group Id";
	$fieldToolTipsuser["English"]["ad_group_id"] = "";
	$fieldLabelsuser["English"]["designation"] = "Designation";
	$fieldToolTipsuser["English"]["designation"] = "";
	$fieldLabelsuser["English"]["joining_date"] = "Joining Date";
	$fieldToolTipsuser["English"]["joining_date"] = "";
	$fieldLabelsuser["English"]["emergency_contact1"] = "Emergency Contact1";
	$fieldToolTipsuser["English"]["emergency_contact1"] = "";
	$fieldLabelsuser["English"]["emergency_contact2"] = "Emergency Contact2";
	$fieldToolTipsuser["English"]["emergency_contact2"] = "";
	$fieldLabelsuser["English"]["permanent_address"] = "Permanent Address";
	$fieldToolTipsuser["English"]["permanent_address"] = "";
	$fieldLabelsuser["English"]["current_address"] = "Current Address";
	$fieldToolTipsuser["English"]["current_address"] = "";
	$fieldLabelsuser["English"]["date_of_birth"] = "Date Of Birth";
	$fieldToolTipsuser["English"]["date_of_birth"] = "";
	$fieldLabelsuser["English"]["male_female"] = "Male Female";
	$fieldToolTipsuser["English"]["male_female"] = "";
	if (count($fieldToolTipsuser["English"]))
		$tdatauser[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsuser[""] = array();
	$fieldToolTipsuser[""] = array();
	$pageTitlesuser[""] = array();
	$fieldLabelsuser[""]["user_id"] = "User Id";
	$fieldToolTipsuser[""]["user_id"] = "";
	$fieldLabelsuser[""]["username"] = "Username";
	$fieldToolTipsuser[""]["username"] = "";
	if (count($fieldToolTipsuser[""]))
		$tdatauser[".isUseToolTips"] = true;
}
	
	
	$tdatauser[".NCSearch"] = true;



$tdatauser[".shortTableName"] = "user";
$tdatauser[".nSecOptions"] = 0;
$tdatauser[".recsPerRowList"] = 1;
$tdatauser[".recsPerRowPrint"] = 1;
$tdatauser[".mainTableOwnerID"] = "";
$tdatauser[".moveNext"] = 1;
$tdatauser[".entityType"] = 0;

$tdatauser[".strOriginalTableName"] = "user";




$tdatauser[".showAddInPopup"] = false;

$tdatauser[".showEditInPopup"] = false;

$tdatauser[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatauser[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatauser[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatauser[".listAjax"] = true;
else 
	$tdatauser[".listAjax"] = false;

	$tdatauser[".audit"] = false;

	$tdatauser[".locking"] = false;

$tdatauser[".edit"] = true;
$tdatauser[".afterEditAction"] = 1;
$tdatauser[".closePopupAfterEdit"] = 1;
$tdatauser[".afterEditActionDetTable"] = "";

$tdatauser[".add"] = true;
$tdatauser[".afterAddAction"] = 0;
$tdatauser[".closePopupAfterAdd"] = 1;
$tdatauser[".afterAddActionDetTable"] = "";

$tdatauser[".list"] = true;

$tdatauser[".copy"] = true;
$tdatauser[".view"] = true;

$tdatauser[".import"] = true;

$tdatauser[".exportTo"] = true;

$tdatauser[".printFriendly"] = true;

$tdatauser[".delete"] = true;

$tdatauser[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatauser[".searchSaving"] = false;
//

$tdatauser[".showSearchPanel"] = true;
		$tdatauser[".flexibleSearch"] = true;		

if (isMobile())
	$tdatauser[".isUseAjaxSuggest"] = false;
else 
	$tdatauser[".isUseAjaxSuggest"] = true;

$tdatauser[".rowHighlite"] = true;


																																																																																																																																																																																																																																																																																																																																																																																												
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																													$tdatauser[".isUsebuttonHandlers"] = true;

$tdatauser[".addPageEvents"] = true;

// use timepicker for search panel
$tdatauser[".isUseTimeForSearch"] = false;




$tdatauser[".detailsLinksOnList"] = "1";

$tdatauser[".allSearchFields"] = array();
$tdatauser[".filterFields"] = array();
$tdatauser[".requiredSearchFields"] = array();

$tdatauser[".allSearchFields"][] = "user_id";
	$tdatauser[".allSearchFields"][] = "employee_id";
	$tdatauser[".allSearchFields"][] = "username";
	$tdatauser[".allSearchFields"][] = "team";
	$tdatauser[".allSearchFields"][] = "department_id";
	$tdatauser[".allSearchFields"][] = "subdiv_id";
	$tdatauser[".allSearchFields"][] = "group_id";
	$tdatauser[".allSearchFields"][] = "ad_group_id";
	$tdatauser[".allSearchFields"][] = "designation";
	$tdatauser[".allSearchFields"][] = "fname";
	$tdatauser[".allSearchFields"][] = "lname";
	$tdatauser[".allSearchFields"][] = "nickname";
	$tdatauser[".allSearchFields"][] = "email";
	$tdatauser[".allSearchFields"][] = "phone";
	$tdatauser[".allSearchFields"][] = "mobile";
	$tdatauser[".allSearchFields"][] = "emergency_contact1";
	$tdatauser[".allSearchFields"][] = "emergency_contact2";
	$tdatauser[".allSearchFields"][] = "permanent_address";
	$tdatauser[".allSearchFields"][] = "current_address";
	$tdatauser[".allSearchFields"][] = "date_of_birth";
	$tdatauser[".allSearchFields"][] = "male_female";
	$tdatauser[".allSearchFields"][] = "joining_date";
	$tdatauser[".allSearchFields"][] = "user_status";
	$tdatauser[".allSearchFields"][] = "images_assigned";
	$tdatauser[".allSearchFields"][] = "log";
	

$tdatauser[".googleLikeFields"] = array();
$tdatauser[".googleLikeFields"][] = "user_id";
$tdatauser[".googleLikeFields"][] = "user_status";
$tdatauser[".googleLikeFields"][] = "username";
$tdatauser[".googleLikeFields"][] = "department_id";
$tdatauser[".googleLikeFields"][] = "subdiv_id";
$tdatauser[".googleLikeFields"][] = "group_id";
$tdatauser[".googleLikeFields"][] = "employee_id";
$tdatauser[".googleLikeFields"][] = "fname";
$tdatauser[".googleLikeFields"][] = "lname";
$tdatauser[".googleLikeFields"][] = "nickname";
$tdatauser[".googleLikeFields"][] = "email";
$tdatauser[".googleLikeFields"][] = "phone";
$tdatauser[".googleLikeFields"][] = "mobile";
$tdatauser[".googleLikeFields"][] = "log";
$tdatauser[".googleLikeFields"][] = "images_assigned";
$tdatauser[".googleLikeFields"][] = "user_picture";
$tdatauser[".googleLikeFields"][] = "password";
$tdatauser[".googleLikeFields"][] = "team";
$tdatauser[".googleLikeFields"][] = "ad_group_id";
$tdatauser[".googleLikeFields"][] = "designation";
$tdatauser[".googleLikeFields"][] = "joining_date";
$tdatauser[".googleLikeFields"][] = "emergency_contact1";
$tdatauser[".googleLikeFields"][] = "emergency_contact2";
$tdatauser[".googleLikeFields"][] = "permanent_address";
$tdatauser[".googleLikeFields"][] = "current_address";
$tdatauser[".googleLikeFields"][] = "date_of_birth";
$tdatauser[".googleLikeFields"][] = "male_female";


$tdatauser[".advSearchFields"] = array();
$tdatauser[".advSearchFields"][] = "user_id";
$tdatauser[".advSearchFields"][] = "employee_id";
$tdatauser[".advSearchFields"][] = "username";
$tdatauser[".advSearchFields"][] = "team";
$tdatauser[".advSearchFields"][] = "department_id";
$tdatauser[".advSearchFields"][] = "subdiv_id";
$tdatauser[".advSearchFields"][] = "group_id";
$tdatauser[".advSearchFields"][] = "ad_group_id";
$tdatauser[".advSearchFields"][] = "designation";
$tdatauser[".advSearchFields"][] = "fname";
$tdatauser[".advSearchFields"][] = "lname";
$tdatauser[".advSearchFields"][] = "nickname";
$tdatauser[".advSearchFields"][] = "email";
$tdatauser[".advSearchFields"][] = "phone";
$tdatauser[".advSearchFields"][] = "mobile";
$tdatauser[".advSearchFields"][] = "emergency_contact1";
$tdatauser[".advSearchFields"][] = "emergency_contact2";
$tdatauser[".advSearchFields"][] = "permanent_address";
$tdatauser[".advSearchFields"][] = "current_address";
$tdatauser[".advSearchFields"][] = "date_of_birth";
$tdatauser[".advSearchFields"][] = "male_female";
$tdatauser[".advSearchFields"][] = "joining_date";
$tdatauser[".advSearchFields"][] = "user_status";
$tdatauser[".advSearchFields"][] = "images_assigned";
$tdatauser[".advSearchFields"][] = "log";

$tdatauser[".tableType"] = "list";

$tdatauser[".printerPageOrientation"] = 0;
$tdatauser[".nPrinterPageScale"] = 100;

$tdatauser[".nPrinterSplitRecords"] = 40;

$tdatauser[".nPrinterPDFSplitRecords"] = 40;



$tdatauser[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatauser[".pageSize"] = 20;

$tdatauser[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauser[".strOrderBy"] = $tstrOrderBy;

$tdatauser[".orderindexes"] = array();

$tdatauser[".sqlHead"] = "SELECT user_id,  user_status,  username,  department_id,  subdiv_id,  group_id,  employee_id,  fname,  lname,  nickname,  email,  phone,  mobile,  log,  images_assigned,  user_picture,  password,  team,  ad_group_id,  designation,  joining_date,  emergency_contact1,  emergency_contact2,  permanent_address,  current_address,  date_of_birth,  male_female";
$tdatauser[".sqlFrom"] = "FROM `user`";
$tdatauser[".sqlWhereExpr"] = "";
$tdatauser[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauser[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauser[".arrGroupsPerPage"] = $arrGPP;

$tdatauser[".highlightSearchResults"] = true;

$tableKeysuser = array();
$tableKeysuser[] = "user_id";
$tableKeysuser[] = "username";
$tdatauser[".Keys"] = $tableKeysuser;

$tdatauser[".listFields"] = array();
$tdatauser[".listFields"][] = "user_id";
$tdatauser[".listFields"][] = "user_picture";
$tdatauser[".listFields"][] = "employee_id";
$tdatauser[".listFields"][] = "username";
$tdatauser[".listFields"][] = "team";
$tdatauser[".listFields"][] = "department_id";
$tdatauser[".listFields"][] = "subdiv_id";
$tdatauser[".listFields"][] = "group_id";
$tdatauser[".listFields"][] = "ad_group_id";
$tdatauser[".listFields"][] = "designation";
$tdatauser[".listFields"][] = "fname";
$tdatauser[".listFields"][] = "lname";
$tdatauser[".listFields"][] = "nickname";
$tdatauser[".listFields"][] = "email";
$tdatauser[".listFields"][] = "phone";
$tdatauser[".listFields"][] = "mobile";
$tdatauser[".listFields"][] = "emergency_contact1";
$tdatauser[".listFields"][] = "emergency_contact2";
$tdatauser[".listFields"][] = "permanent_address";
$tdatauser[".listFields"][] = "current_address";
$tdatauser[".listFields"][] = "date_of_birth";
$tdatauser[".listFields"][] = "male_female";
$tdatauser[".listFields"][] = "joining_date";
$tdatauser[".listFields"][] = "user_status";
$tdatauser[".listFields"][] = "images_assigned";
$tdatauser[".listFields"][] = "log";

$tdatauser[".hideMobileList"] = array();


$tdatauser[".viewFields"] = array();
$tdatauser[".viewFields"][] = "user_id";
$tdatauser[".viewFields"][] = "user_picture";
$tdatauser[".viewFields"][] = "employee_id";
$tdatauser[".viewFields"][] = "username";
$tdatauser[".viewFields"][] = "team";
$tdatauser[".viewFields"][] = "department_id";
$tdatauser[".viewFields"][] = "subdiv_id";
$tdatauser[".viewFields"][] = "group_id";
$tdatauser[".viewFields"][] = "ad_group_id";
$tdatauser[".viewFields"][] = "designation";
$tdatauser[".viewFields"][] = "fname";
$tdatauser[".viewFields"][] = "lname";
$tdatauser[".viewFields"][] = "nickname";
$tdatauser[".viewFields"][] = "email";
$tdatauser[".viewFields"][] = "phone";
$tdatauser[".viewFields"][] = "mobile";
$tdatauser[".viewFields"][] = "emergency_contact1";
$tdatauser[".viewFields"][] = "emergency_contact2";
$tdatauser[".viewFields"][] = "permanent_address";
$tdatauser[".viewFields"][] = "current_address";
$tdatauser[".viewFields"][] = "date_of_birth";
$tdatauser[".viewFields"][] = "male_female";
$tdatauser[".viewFields"][] = "joining_date";
$tdatauser[".viewFields"][] = "user_status";
$tdatauser[".viewFields"][] = "images_assigned";
$tdatauser[".viewFields"][] = "log";

$tdatauser[".addFields"] = array();
$tdatauser[".addFields"][] = "user_picture";
$tdatauser[".addFields"][] = "employee_id";
$tdatauser[".addFields"][] = "username";
$tdatauser[".addFields"][] = "team";
$tdatauser[".addFields"][] = "department_id";
$tdatauser[".addFields"][] = "subdiv_id";
$tdatauser[".addFields"][] = "group_id";
$tdatauser[".addFields"][] = "ad_group_id";
$tdatauser[".addFields"][] = "designation";
$tdatauser[".addFields"][] = "fname";
$tdatauser[".addFields"][] = "lname";
$tdatauser[".addFields"][] = "nickname";
$tdatauser[".addFields"][] = "email";
$tdatauser[".addFields"][] = "phone";
$tdatauser[".addFields"][] = "mobile";
$tdatauser[".addFields"][] = "emergency_contact1";
$tdatauser[".addFields"][] = "emergency_contact2";
$tdatauser[".addFields"][] = "permanent_address";
$tdatauser[".addFields"][] = "current_address";
$tdatauser[".addFields"][] = "date_of_birth";
$tdatauser[".addFields"][] = "male_female";
$tdatauser[".addFields"][] = "joining_date";
$tdatauser[".addFields"][] = "user_status";
$tdatauser[".addFields"][] = "images_assigned";
$tdatauser[".addFields"][] = "log";

$tdatauser[".masterListFields"] = array();
$tdatauser[".masterListFields"][] = "user_id";
$tdatauser[".masterListFields"][] = "user_picture";
$tdatauser[".masterListFields"][] = "employee_id";
$tdatauser[".masterListFields"][] = "username";
$tdatauser[".masterListFields"][] = "team";
$tdatauser[".masterListFields"][] = "department_id";
$tdatauser[".masterListFields"][] = "subdiv_id";
$tdatauser[".masterListFields"][] = "group_id";
$tdatauser[".masterListFields"][] = "ad_group_id";
$tdatauser[".masterListFields"][] = "designation";
$tdatauser[".masterListFields"][] = "fname";
$tdatauser[".masterListFields"][] = "lname";
$tdatauser[".masterListFields"][] = "nickname";
$tdatauser[".masterListFields"][] = "email";
$tdatauser[".masterListFields"][] = "phone";
$tdatauser[".masterListFields"][] = "mobile";
$tdatauser[".masterListFields"][] = "emergency_contact1";
$tdatauser[".masterListFields"][] = "emergency_contact2";
$tdatauser[".masterListFields"][] = "permanent_address";
$tdatauser[".masterListFields"][] = "current_address";
$tdatauser[".masterListFields"][] = "date_of_birth";
$tdatauser[".masterListFields"][] = "male_female";
$tdatauser[".masterListFields"][] = "joining_date";
$tdatauser[".masterListFields"][] = "user_status";
$tdatauser[".masterListFields"][] = "images_assigned";
$tdatauser[".masterListFields"][] = "log";

$tdatauser[".inlineAddFields"] = array();

$tdatauser[".editFields"] = array();
$tdatauser[".editFields"][] = "user_picture";
$tdatauser[".editFields"][] = "employee_id";
$tdatauser[".editFields"][] = "username";
$tdatauser[".editFields"][] = "team";
$tdatauser[".editFields"][] = "department_id";
$tdatauser[".editFields"][] = "subdiv_id";
$tdatauser[".editFields"][] = "group_id";
$tdatauser[".editFields"][] = "ad_group_id";
$tdatauser[".editFields"][] = "designation";
$tdatauser[".editFields"][] = "fname";
$tdatauser[".editFields"][] = "lname";
$tdatauser[".editFields"][] = "nickname";
$tdatauser[".editFields"][] = "email";
$tdatauser[".editFields"][] = "phone";
$tdatauser[".editFields"][] = "mobile";
$tdatauser[".editFields"][] = "emergency_contact1";
$tdatauser[".editFields"][] = "emergency_contact2";
$tdatauser[".editFields"][] = "permanent_address";
$tdatauser[".editFields"][] = "current_address";
$tdatauser[".editFields"][] = "date_of_birth";
$tdatauser[".editFields"][] = "male_female";
$tdatauser[".editFields"][] = "joining_date";
$tdatauser[".editFields"][] = "user_status";
$tdatauser[".editFields"][] = "images_assigned";
$tdatauser[".editFields"][] = "log";

$tdatauser[".inlineEditFields"] = array();

$tdatauser[".exportFields"] = array();
$tdatauser[".exportFields"][] = "user_id";
$tdatauser[".exportFields"][] = "user_picture";
$tdatauser[".exportFields"][] = "employee_id";
$tdatauser[".exportFields"][] = "username";
$tdatauser[".exportFields"][] = "team";
$tdatauser[".exportFields"][] = "department_id";
$tdatauser[".exportFields"][] = "subdiv_id";
$tdatauser[".exportFields"][] = "group_id";
$tdatauser[".exportFields"][] = "ad_group_id";
$tdatauser[".exportFields"][] = "designation";
$tdatauser[".exportFields"][] = "fname";
$tdatauser[".exportFields"][] = "lname";
$tdatauser[".exportFields"][] = "nickname";
$tdatauser[".exportFields"][] = "email";
$tdatauser[".exportFields"][] = "phone";
$tdatauser[".exportFields"][] = "mobile";
$tdatauser[".exportFields"][] = "emergency_contact1";
$tdatauser[".exportFields"][] = "emergency_contact2";
$tdatauser[".exportFields"][] = "permanent_address";
$tdatauser[".exportFields"][] = "current_address";
$tdatauser[".exportFields"][] = "date_of_birth";
$tdatauser[".exportFields"][] = "male_female";
$tdatauser[".exportFields"][] = "joining_date";
$tdatauser[".exportFields"][] = "user_status";
$tdatauser[".exportFields"][] = "images_assigned";
$tdatauser[".exportFields"][] = "log";

$tdatauser[".importFields"] = array();
$tdatauser[".importFields"][] = "user_id";
$tdatauser[".importFields"][] = "user_status";
$tdatauser[".importFields"][] = "username";
$tdatauser[".importFields"][] = "department_id";
$tdatauser[".importFields"][] = "subdiv_id";
$tdatauser[".importFields"][] = "group_id";
$tdatauser[".importFields"][] = "employee_id";
$tdatauser[".importFields"][] = "fname";
$tdatauser[".importFields"][] = "lname";
$tdatauser[".importFields"][] = "nickname";
$tdatauser[".importFields"][] = "email";
$tdatauser[".importFields"][] = "phone";
$tdatauser[".importFields"][] = "mobile";
$tdatauser[".importFields"][] = "log";
$tdatauser[".importFields"][] = "images_assigned";
$tdatauser[".importFields"][] = "user_picture";
$tdatauser[".importFields"][] = "team";
$tdatauser[".importFields"][] = "ad_group_id";
$tdatauser[".importFields"][] = "designation";
$tdatauser[".importFields"][] = "joining_date";
$tdatauser[".importFields"][] = "emergency_contact1";
$tdatauser[".importFields"][] = "emergency_contact2";
$tdatauser[".importFields"][] = "permanent_address";
$tdatauser[".importFields"][] = "current_address";
$tdatauser[".importFields"][] = "date_of_birth";
$tdatauser[".importFields"][] = "male_female";

$tdatauser[".printFields"] = array();
$tdatauser[".printFields"][] = "user_id";
$tdatauser[".printFields"][] = "user_picture";
$tdatauser[".printFields"][] = "employee_id";
$tdatauser[".printFields"][] = "username";
$tdatauser[".printFields"][] = "team";
$tdatauser[".printFields"][] = "department_id";
$tdatauser[".printFields"][] = "subdiv_id";
$tdatauser[".printFields"][] = "group_id";
$tdatauser[".printFields"][] = "ad_group_id";
$tdatauser[".printFields"][] = "designation";
$tdatauser[".printFields"][] = "fname";
$tdatauser[".printFields"][] = "lname";
$tdatauser[".printFields"][] = "nickname";
$tdatauser[".printFields"][] = "email";
$tdatauser[".printFields"][] = "phone";
$tdatauser[".printFields"][] = "mobile";
$tdatauser[".printFields"][] = "emergency_contact1";
$tdatauser[".printFields"][] = "emergency_contact2";
$tdatauser[".printFields"][] = "permanent_address";
$tdatauser[".printFields"][] = "current_address";
$tdatauser[".printFields"][] = "date_of_birth";
$tdatauser[".printFields"][] = "male_female";
$tdatauser[".printFields"][] = "joining_date";
$tdatauser[".printFields"][] = "user_status";
$tdatauser[".printFields"][] = "images_assigned";
$tdatauser[".printFields"][] = "log";

//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","user_id"); 
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

	

	
	$tdatauser["user_id"] = $fdata;
//	user_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_status";
	$fdata["GoodName"] = "user_status";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","user_status"); 
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

	

	
	$tdatauser["user_status"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","username"); 
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
			$edata["EditParams"].= " maxlength=50";
	
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

	

	
	$tdatauser["username"] = $fdata;
//	department_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "department_id";
	$fdata["GoodName"] = "department_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","department_id"); 
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

	

	
	$tdatauser["department_id"] = $fdata;
//	subdiv_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "subdiv_id";
	$fdata["GoodName"] = "subdiv_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","subdiv_id"); 
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

	

	
	$tdatauser["subdiv_id"] = $fdata;
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","group_id"); 
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

	

	
	$tdatauser["group_id"] = $fdata;
//	employee_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "employee_id";
	$fdata["GoodName"] = "employee_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","employee_id"); 
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

	

	
	$tdatauser["employee_id"] = $fdata;
//	fname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fname";
	$fdata["GoodName"] = "fname";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","fname"); 
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

	

	
	$tdatauser["fname"] = $fdata;
//	lname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "lname";
	$fdata["GoodName"] = "lname";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","lname"); 
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

	

	
	$tdatauser["lname"] = $fdata;
//	nickname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "nickname";
	$fdata["GoodName"] = "nickname";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","nickname"); 
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

	

	
	$tdatauser["nickname"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","email"); 
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

	

	
	$tdatauser["email"] = $fdata;
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","phone"); 
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

	

	
	$tdatauser["phone"] = $fdata;
//	mobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "mobile";
	$fdata["GoodName"] = "mobile";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","mobile"); 
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

	

	
	$tdatauser["mobile"] = $fdata;
//	log
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "log";
	$fdata["GoodName"] = "log";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","log"); 
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
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
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

	

	
	$tdatauser["log"] = $fdata;
//	images_assigned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "images_assigned";
	$fdata["GoodName"] = "images_assigned";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","images_assigned"); 
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

	

	
	$tdatauser["images_assigned"] = $fdata;
//	user_picture
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "user_picture";
	$fdata["GoodName"] = "user_picture";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","user_picture"); 
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
	
	
	
	

	

	
	$tdatauser["user_picture"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","password"); 
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
	
	
	
	

	

	
	$tdatauser["password"] = $fdata;
//	team
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "team";
	$fdata["GoodName"] = "team";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","team"); 
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

	

	
	$tdatauser["team"] = $fdata;
//	ad_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "ad_group_id";
	$fdata["GoodName"] = "ad_group_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","ad_group_id"); 
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
	$edata["LinkFieldType"] = 0;
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

	

	
	$tdatauser["ad_group_id"] = $fdata;
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","designation"); 
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

	

	
	$tdatauser["designation"] = $fdata;
//	joining_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "joining_date";
	$fdata["GoodName"] = "joining_date";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","joining_date"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "joining_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "joining_date";
	
		
		
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

	

	
	$tdatauser["joining_date"] = $fdata;
//	emergency_contact1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "emergency_contact1";
	$fdata["GoodName"] = "emergency_contact1";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","emergency_contact1"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "emergency_contact1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "emergency_contact1";
	
		
		
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

	

	
	$tdatauser["emergency_contact1"] = $fdata;
//	emergency_contact2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "emergency_contact2";
	$fdata["GoodName"] = "emergency_contact2";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","emergency_contact2"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "emergency_contact2"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "emergency_contact2";
	
		
		
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

	

	
	$tdatauser["emergency_contact2"] = $fdata;
//	permanent_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "permanent_address";
	$fdata["GoodName"] = "permanent_address";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","permanent_address"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "permanent_address"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "permanent_address";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
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

	

	
	$tdatauser["permanent_address"] = $fdata;
//	current_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "current_address";
	$fdata["GoodName"] = "current_address";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","current_address"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "current_address"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "current_address";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
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

	

	
	$tdatauser["current_address"] = $fdata;
//	date_of_birth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "date_of_birth";
	$fdata["GoodName"] = "date_of_birth";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","date_of_birth"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "date_of_birth"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_of_birth";
	
		
		
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

	

	
	$tdatauser["date_of_birth"] = $fdata;
//	male_female
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "male_female";
	$fdata["GoodName"] = "male_female";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","male_female"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "male_female"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "male_female";
	
		
		
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

	

	
	$tdatauser["male_female"] = $fdata;

	
$tables_data["user"]=&$tdatauser;
$field_labels["user"] = &$fieldLabelsuser;
$fieldToolTips["user"] = &$fieldToolTipsuser;
$page_titles["user"] = &$pageTitlesuser;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["user"] = array();
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
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	Download Job
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Download Job";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Download_Job";
	$detailsParam["dCaptionTable"] = GetTableCaption("Download_Job");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	Pending Jobs
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Pending Jobs";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Pending_Jobs";
	$detailsParam["dCaptionTable"] = GetTableCaption("Pending_Jobs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	Designer Worksheet
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Designer Worksheet";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Designer_Worksheet";
	$detailsParam["dCaptionTable"] = GetTableCaption("Designer_Worksheet");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	QC Worksheet
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="QC Worksheet";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "QC_Worksheet";
	$detailsParam["dCaptionTable"] = GetTableCaption("QC_Worksheet");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	All Jobs
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="All Jobs";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "All_Jobs";
	$detailsParam["dCaptionTable"] = GetTableCaption("All_Jobs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	Daily Job Report (Accepted)
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Daily Job Report (Accepted)";
		$detailsParam["dOriginalTable"] = "job";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "Daily_Job_Report__Accepted_";
	$detailsParam["dCaptionTable"] = GetTableCaption("Daily_Job_Report__Accepted_");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	Designer Level 2
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Designer Level 2";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Designer_Level_2";
	$detailsParam["dCaptionTable"] = GetTableCaption("Designer_Level_2");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	Urgent Jobs
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Urgent Jobs";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Urgent_Jobs";
	$detailsParam["dCaptionTable"] = GetTableCaption("Urgent_Jobs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	Deadline Missed
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Deadline Missed";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Deadline_Missed";
	$detailsParam["dCaptionTable"] = GetTableCaption("Deadline_Missed");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	Need to Accept
	
	

		$dIndex = 10;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Need to Accept";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Need_to_Accept";
	$detailsParam["dCaptionTable"] = GetTableCaption("Need_to_Accept");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	Need Notify
	
	

		$dIndex = 11;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Need Notify";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Need_Notify";
	$detailsParam["dCaptionTable"] = GetTableCaption("Need_Notify");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	Need Download
	
	

		$dIndex = 12;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Need Download";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Need_Download";
	$detailsParam["dCaptionTable"] = GetTableCaption("Need_Download");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	Need QC
	
	

		$dIndex = 13;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Need QC";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Need_QC";
	$detailsParam["dCaptionTable"] = GetTableCaption("Need_QC");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	Need Upload
	
	

		$dIndex = 14;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Need Upload";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Need_Upload";
	$detailsParam["dCaptionTable"] = GetTableCaption("Need_Upload");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	Pending 14704
	
	

		$dIndex = 15;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Pending 14704";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Pending_14704";
	$detailsParam["dCaptionTable"] = GetTableCaption("Pending_14704");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	Daily Job Report (Notified)
	
	

		$dIndex = 16;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Daily Job Report (Notified)";
		$detailsParam["dOriginalTable"] = "job";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "Daily_Job_Report__Notified_";
	$detailsParam["dCaptionTable"] = GetTableCaption("Daily_Job_Report__Notified_");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	14704 Need QC
	
	

		$dIndex = 17;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="14704 Need QC";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "14704_Need_QC";
	$detailsParam["dCaptionTable"] = GetTableCaption("14704_Need_QC");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	14704 Need Upload
	
	

		$dIndex = 18;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="14704 Need Upload";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "14704_Need_Upload";
	$detailsParam["dCaptionTable"] = GetTableCaption("14704_Need_Upload");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	14704 Need Download
	
	

		$dIndex = 19;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="14704 Need Download";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "14704_Need_Download";
	$detailsParam["dCaptionTable"] = GetTableCaption("14704_Need_Download");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	14704 Need Notify
	
	

		$dIndex = 20;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="14704 Need Notify";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "14704_Need_Notify";
	$detailsParam["dCaptionTable"] = GetTableCaption("14704_Need_Notify");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	14704 Need Accept
	
	

		$dIndex = 21;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="14704 Need Accept";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "14704_Need_Accept";
	$detailsParam["dCaptionTable"] = GetTableCaption("14704_Need_Accept");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	14704 Deadline Missed
	
	

		$dIndex = 22;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="14704 Deadline Missed";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "14704_Deadline_Missed";
	$detailsParam["dCaptionTable"] = GetTableCaption("14704_Deadline_Missed");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	14704 Urgent Jobs
	
	

		$dIndex = 23;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="14704 Urgent Jobs";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "14704_Urgent_Jobs";
	$detailsParam["dCaptionTable"] = GetTableCaption("14704_Urgent_Jobs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	Delected Jobs
	
	

		$dIndex = 24;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Delected Jobs";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Delected_Jobs";
	$detailsParam["dCaptionTable"] = GetTableCaption("Delected_Jobs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	Pending 18442
	
	

		$dIndex = 25;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Pending 18442";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Pending_18442";
	$detailsParam["dCaptionTable"] = GetTableCaption("Pending_18442");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	18442 Deadline Missed
	
	

		$dIndex = 26;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="18442 Deadline Missed";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "18442_Deadline_Missed";
	$detailsParam["dCaptionTable"] = GetTableCaption("18442_Deadline_Missed");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	18442 Urgent Jobs
	
	

		$dIndex = 27;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="18442 Urgent Jobs";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "18442_Urgent_Jobs";
	$detailsParam["dCaptionTable"] = GetTableCaption("18442_Urgent_Jobs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	18442 Need Notify
	
	

		$dIndex = 28;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="18442 Need Notify";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "18442_Need_Notify";
	$detailsParam["dCaptionTable"] = GetTableCaption("18442_Need_Notify");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	18442 Need Upload
	
	

		$dIndex = 29;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="18442 Need Upload";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "18442_Need_Upload";
	$detailsParam["dCaptionTable"] = GetTableCaption("18442_Need_Upload");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	18442 Need QC
	
	

		$dIndex = 30;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="18442 Need QC";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "18442_Need_QC";
	$detailsParam["dCaptionTable"] = GetTableCaption("18442_Need_QC");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	18442 Need Download
	
	

		$dIndex = 31;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="18442 Need Download";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "18442_Need_Download";
	$detailsParam["dCaptionTable"] = GetTableCaption("18442_Need_Download");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	18442 Need Accept
	
	

		$dIndex = 32;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="18442 Need Accept";
		$detailsParam["dOriginalTable"] = "job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "18442_Need_Accept";
	$detailsParam["dCaptionTable"] = GetTableCaption("18442_Need_Accept");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	Monthly Job Report (Accepted)
	
	

		$dIndex = 33;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Monthly Job Report (Accepted)";
		$detailsParam["dOriginalTable"] = "job";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "Monthly_Job_Report__Accepted_";
	$detailsParam["dCaptionTable"] = GetTableCaption("Monthly_Job_Report__Accepted_");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	Monthly Job Report (Notified)
	
	

		$dIndex = 34;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Monthly Job Report (Notified)";
		$detailsParam["dOriginalTable"] = "job";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "Monthly_Job_Report__Notified_";
	$detailsParam["dCaptionTable"] = GetTableCaption("Monthly_Job_Report__Notified_");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	Daily Accepted Riajul
	
	

		$dIndex = 35;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Daily Accepted Riajul";
		$detailsParam["dOriginalTable"] = "job";
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "Daily_Accepted_Riajul";
	$detailsParam["dCaptionTable"] = GetTableCaption("Daily_Accepted_Riajul");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
//	QC Worksheet for Correction
	
	

		$dIndex = 36;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="QC Worksheet for Correction";
		$detailsParam["dOriginalTable"] = "rejected_job";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "QC_Worksheet_for_Correction";
	$detailsParam["dCaptionTable"] = GetTableCaption("QC_Worksheet_for_Correction");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "0";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["user"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["user"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["user"][$dIndex]["detailKeys"][]="notifer_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["user"] = array();


	
				$strOriginalDetailsTable="group";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group";
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
					$masterTablesData["user"][0] = $masterParams;	
				$masterTablesData["user"][0]["masterKeys"] = array();
	$masterTablesData["user"][0]["masterKeys"][]="group_id";
				$masterTablesData["user"][0]["detailKeys"] = array();
	$masterTablesData["user"][0]["detailKeys"][]="group_id";
		
	
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
					$masterTablesData["user"][1] = $masterParams;	
				$masterTablesData["user"][1]["masterKeys"] = array();
	$masterTablesData["user"][1]["masterKeys"][]="department_id";
				$masterTablesData["user"][1]["detailKeys"] = array();
	$masterTablesData["user"][1]["detailKeys"][]="department_id";
		
	
				$strOriginalDetailsTable="subdivision";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="subdivision";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "subdivision";
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
					$masterTablesData["user"][2] = $masterParams;	
				$masterTablesData["user"][2]["masterKeys"] = array();
	$masterTablesData["user"][2]["masterKeys"][]="subdiv_id";
				$masterTablesData["user"][2]["detailKeys"] = array();
	$masterTablesData["user"][2]["detailKeys"][]="subdiv_id";
		
	
				$strOriginalDetailsTable="team";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="team";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "team";
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
					$masterTablesData["user"][3] = $masterParams;	
				$masterTablesData["user"][3]["masterKeys"] = array();
	$masterTablesData["user"][3]["masterKeys"][]="ID";
				$masterTablesData["user"][3]["detailKeys"] = array();
	$masterTablesData["user"][3]["detailKeys"][]="team";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_user()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "user_id,  user_status,  username,  department_id,  subdiv_id,  group_id,  employee_id,  fname,  lname,  nickname,  email,  phone,  mobile,  log,  images_assigned,  user_picture,  password,  team,  ad_group_id,  designation,  joining_date,  emergency_contact1,  emergency_contact2,  permanent_address,  current_address,  date_of_birth,  male_female";
$proto0["m_strFrom"] = "FROM `user`";
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
	"m_strName" => "user_id",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto5["m_sql"] = "user_id";
$proto5["m_srcTableName"] = "user";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "user_status",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto7["m_sql"] = "user_status";
$proto7["m_srcTableName"] = "user";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto9["m_sql"] = "username";
$proto9["m_srcTableName"] = "user";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "department_id",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto11["m_sql"] = "department_id";
$proto11["m_srcTableName"] = "user";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "subdiv_id",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto13["m_sql"] = "subdiv_id";
$proto13["m_srcTableName"] = "user";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto15["m_sql"] = "group_id";
$proto15["m_srcTableName"] = "user";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "employee_id",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto17["m_sql"] = "employee_id";
$proto17["m_srcTableName"] = "user";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "fname",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto19["m_sql"] = "fname";
$proto19["m_srcTableName"] = "user";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "lname",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto21["m_sql"] = "lname";
$proto21["m_srcTableName"] = "user";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "nickname",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto23["m_sql"] = "nickname";
$proto23["m_srcTableName"] = "user";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto25["m_sql"] = "email";
$proto25["m_srcTableName"] = "user";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto27["m_sql"] = "phone";
$proto27["m_srcTableName"] = "user";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "mobile",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto29["m_sql"] = "mobile";
$proto29["m_srcTableName"] = "user";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "log",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto31["m_sql"] = "log";
$proto31["m_srcTableName"] = "user";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "images_assigned",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto33["m_sql"] = "images_assigned";
$proto33["m_srcTableName"] = "user";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "user_picture",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto35["m_sql"] = "user_picture";
$proto35["m_srcTableName"] = "user";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto37["m_sql"] = "password";
$proto37["m_srcTableName"] = "user";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto39["m_sql"] = "team";
$proto39["m_srcTableName"] = "user";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "ad_group_id",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto41["m_sql"] = "ad_group_id";
$proto41["m_srcTableName"] = "user";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto43["m_sql"] = "designation";
$proto43["m_srcTableName"] = "user";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "joining_date",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto45["m_sql"] = "joining_date";
$proto45["m_srcTableName"] = "user";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "emergency_contact1",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto47["m_sql"] = "emergency_contact1";
$proto47["m_srcTableName"] = "user";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "emergency_contact2",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto49["m_sql"] = "emergency_contact2";
$proto49["m_srcTableName"] = "user";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "permanent_address",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto51["m_sql"] = "permanent_address";
$proto51["m_srcTableName"] = "user";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "current_address",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto53["m_sql"] = "current_address";
$proto53["m_srcTableName"] = "user";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "date_of_birth",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto55["m_sql"] = "date_of_birth";
$proto55["m_srcTableName"] = "user";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "male_female",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto57["m_sql"] = "male_female";
$proto57["m_srcTableName"] = "user";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto59=array();
$proto59["m_link"] = "SQLL_MAIN";
			$proto60=array();
$proto60["m_strName"] = "user";
$proto60["m_srcTableName"] = "user";
$proto60["m_columns"] = array();
$proto60["m_columns"][] = "user_id";
$proto60["m_columns"][] = "user_status";
$proto60["m_columns"][] = "username";
$proto60["m_columns"][] = "password";
$proto60["m_columns"][] = "department_id";
$proto60["m_columns"][] = "subdiv_id";
$proto60["m_columns"][] = "group_id";
$proto60["m_columns"][] = "designation";
$proto60["m_columns"][] = "employee_id";
$proto60["m_columns"][] = "fname";
$proto60["m_columns"][] = "lname";
$proto60["m_columns"][] = "nickname";
$proto60["m_columns"][] = "email";
$proto60["m_columns"][] = "phone";
$proto60["m_columns"][] = "mobile";
$proto60["m_columns"][] = "log";
$proto60["m_columns"][] = "images_assigned";
$proto60["m_columns"][] = "user_picture";
$proto60["m_columns"][] = "team";
$proto60["m_columns"][] = "ad_group_id";
$proto60["m_columns"][] = "lastaccess";
$proto60["m_columns"][] = "joining_date";
$proto60["m_columns"][] = "emergency_contact1";
$proto60["m_columns"][] = "emergency_contact2";
$proto60["m_columns"][] = "permanent_address";
$proto60["m_columns"][] = "current_address";
$proto60["m_columns"][] = "date_of_birth";
$proto60["m_columns"][] = "male_female";
$obj = new SQLTable($proto60);

$proto59["m_table"] = $obj;
$proto59["m_sql"] = "`user`";
$proto59["m_alias"] = "";
$proto59["m_srcTableName"] = "user";
$proto61=array();
$proto61["m_sql"] = "";
$proto61["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto61["m_column"]=$obj;
$proto61["m_contained"] = array();
$proto61["m_strCase"] = "";
$proto61["m_havingmode"] = false;
$proto61["m_inBrackets"] = false;
$proto61["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto61);

$proto59["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto59);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="user";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_user = createSqlQuery_user();


	
																											
	
$tdatauser[".sqlquery"] = $queryData_user;

include_once(getabspath("include/user_events.php"));
$tableEvents["user"] = new eventclass_user;
$tdatauser[".hasEvents"] = true;

?>