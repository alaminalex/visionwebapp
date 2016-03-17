<?php
require_once(getabspath("classes/cipherer.php"));




$tdatauser1 = array();	
	$tdatauser1[".truncateText"] = true;
	$tdatauser1[".NumberOfChars"] = 80; 
	$tdatauser1[".ShortName"] = "user1";
	$tdatauser1[".OwnerID"] = "";
	$tdatauser1[".OriginalTable"] = "user";

//	field labels
$fieldLabelsuser1 = array();
$fieldToolTipsuser1 = array();
$pageTitlesuser1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuser1["English"] = array();
	$fieldToolTipsuser1["English"] = array();
	$pageTitlesuser1["English"] = array();
	$fieldLabelsuser1["English"]["user_id"] = "User Id";
	$fieldToolTipsuser1["English"]["user_id"] = "";
	$fieldLabelsuser1["English"]["user_status"] = "User Status";
	$fieldToolTipsuser1["English"]["user_status"] = "";
	$fieldLabelsuser1["English"]["username"] = "Username";
	$fieldToolTipsuser1["English"]["username"] = "";
	$fieldLabelsuser1["English"]["department_id"] = "Department Id";
	$fieldToolTipsuser1["English"]["department_id"] = "";
	$fieldLabelsuser1["English"]["subdiv_id"] = "Subdiv Id";
	$fieldToolTipsuser1["English"]["subdiv_id"] = "";
	$fieldLabelsuser1["English"]["group_id"] = "Group Id";
	$fieldToolTipsuser1["English"]["group_id"] = "";
	$fieldLabelsuser1["English"]["employee_id"] = "Employee Id";
	$fieldToolTipsuser1["English"]["employee_id"] = "";
	$fieldLabelsuser1["English"]["fname"] = "Fname";
	$fieldToolTipsuser1["English"]["fname"] = "";
	$fieldLabelsuser1["English"]["lname"] = "Lname";
	$fieldToolTipsuser1["English"]["lname"] = "";
	$fieldLabelsuser1["English"]["nickname"] = "Nickname";
	$fieldToolTipsuser1["English"]["nickname"] = "";
	$fieldLabelsuser1["English"]["email"] = "Email";
	$fieldToolTipsuser1["English"]["email"] = "";
	$fieldLabelsuser1["English"]["phone"] = "Phone";
	$fieldToolTipsuser1["English"]["phone"] = "";
	$fieldLabelsuser1["English"]["mobile"] = "Mobile";
	$fieldToolTipsuser1["English"]["mobile"] = "";
	$fieldLabelsuser1["English"]["log"] = "Log";
	$fieldToolTipsuser1["English"]["log"] = "";
	$fieldLabelsuser1["English"]["images_assigned"] = "Images Assigned";
	$fieldToolTipsuser1["English"]["images_assigned"] = "";
	$fieldLabelsuser1["English"]["user_picture"] = "User Picture";
	$fieldToolTipsuser1["English"]["user_picture"] = "";
	$fieldLabelsuser1["English"]["password"] = "Password";
	$fieldToolTipsuser1["English"]["password"] = "";
	$fieldLabelsuser1["English"]["team"] = "Team";
	$fieldToolTipsuser1["English"]["team"] = "";
	$fieldLabelsuser1["English"]["ad_group_id"] = "Ad Group Id";
	$fieldToolTipsuser1["English"]["ad_group_id"] = "";
	$fieldLabelsuser1["English"]["designation"] = "Designation";
	$fieldToolTipsuser1["English"]["designation"] = "";
	$fieldLabelsuser1["English"]["joining_date"] = "Joining Date";
	$fieldToolTipsuser1["English"]["joining_date"] = "";
	$fieldLabelsuser1["English"]["emergency_contact1"] = "Emergency Contact1";
	$fieldToolTipsuser1["English"]["emergency_contact1"] = "";
	$fieldLabelsuser1["English"]["emergency_contact2"] = "Emergency Contact2";
	$fieldToolTipsuser1["English"]["emergency_contact2"] = "";
	$fieldLabelsuser1["English"]["permanent_address"] = "Permanent Address";
	$fieldToolTipsuser1["English"]["permanent_address"] = "";
	$fieldLabelsuser1["English"]["current_address"] = "Current Address";
	$fieldToolTipsuser1["English"]["current_address"] = "";
	$fieldLabelsuser1["English"]["date_of_birth"] = "Date Of Birth";
	$fieldToolTipsuser1["English"]["date_of_birth"] = "";
	$fieldLabelsuser1["English"]["male_female"] = "Male Female";
	$fieldToolTipsuser1["English"]["male_female"] = "";
	$fieldLabelsuser1["English"]["ShiftTypeId"] = "Shift Type Id";
	$fieldToolTipsuser1["English"]["ShiftTypeId"] = "";
	$fieldLabelsuser1["English"]["Description"] = "Description";
	$fieldToolTipsuser1["English"]["Description"] = "";
	if (count($fieldToolTipsuser1["English"]))
		$tdatauser1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsuser1[""] = array();
	$fieldToolTipsuser1[""] = array();
	$pageTitlesuser1[""] = array();
	if (count($fieldToolTipsuser1[""]))
		$tdatauser1[".isUseToolTips"] = true;
}
	
	
	$tdatauser1[".NCSearch"] = true;



$tdatauser1[".shortTableName"] = "user1";
$tdatauser1[".nSecOptions"] = 0;
$tdatauser1[".recsPerRowList"] = 1;
$tdatauser1[".recsPerRowPrint"] = 1;
$tdatauser1[".mainTableOwnerID"] = "";
$tdatauser1[".moveNext"] = 1;
$tdatauser1[".entityType"] = 1;

$tdatauser1[".strOriginalTableName"] = "user";




$tdatauser1[".showAddInPopup"] = false;

$tdatauser1[".showEditInPopup"] = false;

$tdatauser1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatauser1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatauser1[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatauser1[".listAjax"] = true;
else 
	$tdatauser1[".listAjax"] = false;

	$tdatauser1[".audit"] = false;

	$tdatauser1[".locking"] = false;

$tdatauser1[".edit"] = true;
$tdatauser1[".afterEditAction"] = 1;
$tdatauser1[".closePopupAfterEdit"] = 1;
$tdatauser1[".afterEditActionDetTable"] = "";

$tdatauser1[".add"] = true;
$tdatauser1[".afterAddAction"] = 0;
$tdatauser1[".closePopupAfterAdd"] = 1;
$tdatauser1[".afterAddActionDetTable"] = "";

$tdatauser1[".list"] = true;

$tdatauser1[".copy"] = true;
$tdatauser1[".view"] = true;

$tdatauser1[".import"] = true;

$tdatauser1[".exportTo"] = true;

$tdatauser1[".printFriendly"] = true;

$tdatauser1[".delete"] = true;

$tdatauser1[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatauser1[".searchSaving"] = false;
//

$tdatauser1[".showSearchPanel"] = true;
		$tdatauser1[".flexibleSearch"] = true;		

if (isMobile())
	$tdatauser1[".isUseAjaxSuggest"] = false;
else 
	$tdatauser1[".isUseAjaxSuggest"] = true;

$tdatauser1[".rowHighlite"] = true;


																																
																																																																																																																	$tdatauser1[".isUsebuttonHandlers"] = true;

$tdatauser1[".addPageEvents"] = true;

// use timepicker for search panel
$tdatauser1[".isUseTimeForSearch"] = false;




$tdatauser1[".detailsLinksOnList"] = "1";

$tdatauser1[".allSearchFields"] = array();
$tdatauser1[".filterFields"] = array();
$tdatauser1[".requiredSearchFields"] = array();

$tdatauser1[".allSearchFields"][] = "ShiftTypeId";
	$tdatauser1[".allSearchFields"][] = "Description";
	$tdatauser1[".allSearchFields"][] = "user_id";
	$tdatauser1[".allSearchFields"][] = "employee_id";
	$tdatauser1[".allSearchFields"][] = "username";
	$tdatauser1[".allSearchFields"][] = "team";
	$tdatauser1[".allSearchFields"][] = "department_id";
	$tdatauser1[".allSearchFields"][] = "subdiv_id";
	$tdatauser1[".allSearchFields"][] = "group_id";
	$tdatauser1[".allSearchFields"][] = "ad_group_id";
	$tdatauser1[".allSearchFields"][] = "designation";
	$tdatauser1[".allSearchFields"][] = "fname";
	$tdatauser1[".allSearchFields"][] = "lname";
	$tdatauser1[".allSearchFields"][] = "nickname";
	$tdatauser1[".allSearchFields"][] = "email";
	$tdatauser1[".allSearchFields"][] = "phone";
	$tdatauser1[".allSearchFields"][] = "mobile";
	$tdatauser1[".allSearchFields"][] = "emergency_contact1";
	$tdatauser1[".allSearchFields"][] = "emergency_contact2";
	$tdatauser1[".allSearchFields"][] = "permanent_address";
	$tdatauser1[".allSearchFields"][] = "current_address";
	$tdatauser1[".allSearchFields"][] = "date_of_birth";
	$tdatauser1[".allSearchFields"][] = "male_female";
	$tdatauser1[".allSearchFields"][] = "joining_date";
	$tdatauser1[".allSearchFields"][] = "user_status";
	$tdatauser1[".allSearchFields"][] = "images_assigned";
	$tdatauser1[".allSearchFields"][] = "log";
	

$tdatauser1[".googleLikeFields"] = array();
$tdatauser1[".googleLikeFields"][] = "user_id";
$tdatauser1[".googleLikeFields"][] = "user_status";
$tdatauser1[".googleLikeFields"][] = "username";
$tdatauser1[".googleLikeFields"][] = "department_id";
$tdatauser1[".googleLikeFields"][] = "subdiv_id";
$tdatauser1[".googleLikeFields"][] = "group_id";
$tdatauser1[".googleLikeFields"][] = "employee_id";
$tdatauser1[".googleLikeFields"][] = "fname";
$tdatauser1[".googleLikeFields"][] = "lname";
$tdatauser1[".googleLikeFields"][] = "nickname";
$tdatauser1[".googleLikeFields"][] = "email";
$tdatauser1[".googleLikeFields"][] = "phone";
$tdatauser1[".googleLikeFields"][] = "mobile";
$tdatauser1[".googleLikeFields"][] = "log";
$tdatauser1[".googleLikeFields"][] = "images_assigned";
$tdatauser1[".googleLikeFields"][] = "user_picture";
$tdatauser1[".googleLikeFields"][] = "password";
$tdatauser1[".googleLikeFields"][] = "team";
$tdatauser1[".googleLikeFields"][] = "ad_group_id";
$tdatauser1[".googleLikeFields"][] = "designation";
$tdatauser1[".googleLikeFields"][] = "joining_date";
$tdatauser1[".googleLikeFields"][] = "emergency_contact1";
$tdatauser1[".googleLikeFields"][] = "emergency_contact2";
$tdatauser1[".googleLikeFields"][] = "permanent_address";
$tdatauser1[".googleLikeFields"][] = "current_address";
$tdatauser1[".googleLikeFields"][] = "date_of_birth";
$tdatauser1[".googleLikeFields"][] = "male_female";
$tdatauser1[".googleLikeFields"][] = "ShiftTypeId";
$tdatauser1[".googleLikeFields"][] = "Description";


$tdatauser1[".advSearchFields"] = array();
$tdatauser1[".advSearchFields"][] = "ShiftTypeId";
$tdatauser1[".advSearchFields"][] = "Description";
$tdatauser1[".advSearchFields"][] = "user_id";
$tdatauser1[".advSearchFields"][] = "employee_id";
$tdatauser1[".advSearchFields"][] = "username";
$tdatauser1[".advSearchFields"][] = "team";
$tdatauser1[".advSearchFields"][] = "department_id";
$tdatauser1[".advSearchFields"][] = "subdiv_id";
$tdatauser1[".advSearchFields"][] = "group_id";
$tdatauser1[".advSearchFields"][] = "ad_group_id";
$tdatauser1[".advSearchFields"][] = "designation";
$tdatauser1[".advSearchFields"][] = "fname";
$tdatauser1[".advSearchFields"][] = "lname";
$tdatauser1[".advSearchFields"][] = "nickname";
$tdatauser1[".advSearchFields"][] = "email";
$tdatauser1[".advSearchFields"][] = "phone";
$tdatauser1[".advSearchFields"][] = "mobile";
$tdatauser1[".advSearchFields"][] = "emergency_contact1";
$tdatauser1[".advSearchFields"][] = "emergency_contact2";
$tdatauser1[".advSearchFields"][] = "permanent_address";
$tdatauser1[".advSearchFields"][] = "current_address";
$tdatauser1[".advSearchFields"][] = "date_of_birth";
$tdatauser1[".advSearchFields"][] = "male_female";
$tdatauser1[".advSearchFields"][] = "joining_date";
$tdatauser1[".advSearchFields"][] = "user_status";
$tdatauser1[".advSearchFields"][] = "images_assigned";
$tdatauser1[".advSearchFields"][] = "log";

$tdatauser1[".tableType"] = "list";

$tdatauser1[".printerPageOrientation"] = 0;
$tdatauser1[".nPrinterPageScale"] = 100;

$tdatauser1[".nPrinterSplitRecords"] = 40;

$tdatauser1[".nPrinterPDFSplitRecords"] = 40;



$tdatauser1[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatauser1[".pageSize"] = 20;

$tdatauser1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauser1[".strOrderBy"] = $tstrOrderBy;

$tdatauser1[".orderindexes"] = array();

$tdatauser1[".sqlHead"] = "SELECT `user`.user_id,  `user`.user_status,  `user`.username,  `user`.department_id,  `user`.subdiv_id,  `user`.group_id,  `user`.employee_id,  `user`.fname,  `user`.lname,  `user`.nickname,  `user`.email,  `user`.phone,  `user`.mobile,  `user`.log,  `user`.images_assigned,  `user`.user_picture,  `user`.password,  `user`.team,  `user`.ad_group_id,  `user`.designation,  `user`.joining_date,  `user`.emergency_contact1,  `user`.emergency_contact2,  `user`.permanent_address,  `user`.current_address,  `user`.date_of_birth,  `user`.male_female,  shifttype.ShiftTypeId,  shifttype.Description";
$tdatauser1[".sqlFrom"] = "FROM `user`  INNER JOIN team ON `user`.team = team.ID  INNER JOIN shifttype ON team.team_shift = shifttype.ShiftTypeId";
$tdatauser1[".sqlWhereExpr"] = "";
$tdatauser1[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauser1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauser1[".arrGroupsPerPage"] = $arrGPP;

$tdatauser1[".highlightSearchResults"] = true;

$tableKeysuser1 = array();
$tableKeysuser1[] = "user_id";
$tableKeysuser1[] = "username";
$tdatauser1[".Keys"] = $tableKeysuser1;

$tdatauser1[".listFields"] = array();
$tdatauser1[".listFields"][] = "ShiftTypeId";
$tdatauser1[".listFields"][] = "Description";
$tdatauser1[".listFields"][] = "user_id";
$tdatauser1[".listFields"][] = "user_picture";
$tdatauser1[".listFields"][] = "employee_id";
$tdatauser1[".listFields"][] = "username";
$tdatauser1[".listFields"][] = "team";
$tdatauser1[".listFields"][] = "department_id";
$tdatauser1[".listFields"][] = "subdiv_id";
$tdatauser1[".listFields"][] = "group_id";
$tdatauser1[".listFields"][] = "ad_group_id";
$tdatauser1[".listFields"][] = "designation";
$tdatauser1[".listFields"][] = "fname";
$tdatauser1[".listFields"][] = "lname";
$tdatauser1[".listFields"][] = "nickname";
$tdatauser1[".listFields"][] = "email";
$tdatauser1[".listFields"][] = "phone";
$tdatauser1[".listFields"][] = "mobile";
$tdatauser1[".listFields"][] = "emergency_contact1";
$tdatauser1[".listFields"][] = "emergency_contact2";
$tdatauser1[".listFields"][] = "permanent_address";
$tdatauser1[".listFields"][] = "current_address";
$tdatauser1[".listFields"][] = "date_of_birth";
$tdatauser1[".listFields"][] = "male_female";
$tdatauser1[".listFields"][] = "joining_date";
$tdatauser1[".listFields"][] = "user_status";
$tdatauser1[".listFields"][] = "images_assigned";
$tdatauser1[".listFields"][] = "log";

$tdatauser1[".hideMobileList"] = array();


$tdatauser1[".viewFields"] = array();
$tdatauser1[".viewFields"][] = "ShiftTypeId";
$tdatauser1[".viewFields"][] = "Description";
$tdatauser1[".viewFields"][] = "user_id";
$tdatauser1[".viewFields"][] = "user_picture";
$tdatauser1[".viewFields"][] = "employee_id";
$tdatauser1[".viewFields"][] = "username";
$tdatauser1[".viewFields"][] = "team";
$tdatauser1[".viewFields"][] = "department_id";
$tdatauser1[".viewFields"][] = "subdiv_id";
$tdatauser1[".viewFields"][] = "group_id";
$tdatauser1[".viewFields"][] = "ad_group_id";
$tdatauser1[".viewFields"][] = "designation";
$tdatauser1[".viewFields"][] = "fname";
$tdatauser1[".viewFields"][] = "lname";
$tdatauser1[".viewFields"][] = "nickname";
$tdatauser1[".viewFields"][] = "email";
$tdatauser1[".viewFields"][] = "phone";
$tdatauser1[".viewFields"][] = "mobile";
$tdatauser1[".viewFields"][] = "emergency_contact1";
$tdatauser1[".viewFields"][] = "emergency_contact2";
$tdatauser1[".viewFields"][] = "permanent_address";
$tdatauser1[".viewFields"][] = "current_address";
$tdatauser1[".viewFields"][] = "date_of_birth";
$tdatauser1[".viewFields"][] = "male_female";
$tdatauser1[".viewFields"][] = "joining_date";
$tdatauser1[".viewFields"][] = "user_status";
$tdatauser1[".viewFields"][] = "images_assigned";
$tdatauser1[".viewFields"][] = "log";

$tdatauser1[".addFields"] = array();
$tdatauser1[".addFields"][] = "user_picture";
$tdatauser1[".addFields"][] = "employee_id";
$tdatauser1[".addFields"][] = "username";
$tdatauser1[".addFields"][] = "team";
$tdatauser1[".addFields"][] = "department_id";
$tdatauser1[".addFields"][] = "subdiv_id";
$tdatauser1[".addFields"][] = "group_id";
$tdatauser1[".addFields"][] = "ad_group_id";
$tdatauser1[".addFields"][] = "designation";
$tdatauser1[".addFields"][] = "fname";
$tdatauser1[".addFields"][] = "lname";
$tdatauser1[".addFields"][] = "nickname";
$tdatauser1[".addFields"][] = "email";
$tdatauser1[".addFields"][] = "phone";
$tdatauser1[".addFields"][] = "mobile";
$tdatauser1[".addFields"][] = "emergency_contact1";
$tdatauser1[".addFields"][] = "emergency_contact2";
$tdatauser1[".addFields"][] = "permanent_address";
$tdatauser1[".addFields"][] = "current_address";
$tdatauser1[".addFields"][] = "date_of_birth";
$tdatauser1[".addFields"][] = "male_female";
$tdatauser1[".addFields"][] = "joining_date";
$tdatauser1[".addFields"][] = "user_status";
$tdatauser1[".addFields"][] = "images_assigned";
$tdatauser1[".addFields"][] = "log";

$tdatauser1[".masterListFields"] = array();
$tdatauser1[".masterListFields"][] = "ShiftTypeId";
$tdatauser1[".masterListFields"][] = "Description";
$tdatauser1[".masterListFields"][] = "user_picture";
$tdatauser1[".masterListFields"][] = "user_id";
$tdatauser1[".masterListFields"][] = "employee_id";
$tdatauser1[".masterListFields"][] = "username";
$tdatauser1[".masterListFields"][] = "team";
$tdatauser1[".masterListFields"][] = "department_id";
$tdatauser1[".masterListFields"][] = "subdiv_id";
$tdatauser1[".masterListFields"][] = "group_id";
$tdatauser1[".masterListFields"][] = "ad_group_id";
$tdatauser1[".masterListFields"][] = "designation";
$tdatauser1[".masterListFields"][] = "fname";
$tdatauser1[".masterListFields"][] = "lname";
$tdatauser1[".masterListFields"][] = "nickname";
$tdatauser1[".masterListFields"][] = "email";
$tdatauser1[".masterListFields"][] = "phone";
$tdatauser1[".masterListFields"][] = "mobile";
$tdatauser1[".masterListFields"][] = "emergency_contact1";
$tdatauser1[".masterListFields"][] = "emergency_contact2";
$tdatauser1[".masterListFields"][] = "permanent_address";
$tdatauser1[".masterListFields"][] = "current_address";
$tdatauser1[".masterListFields"][] = "date_of_birth";
$tdatauser1[".masterListFields"][] = "male_female";
$tdatauser1[".masterListFields"][] = "joining_date";
$tdatauser1[".masterListFields"][] = "user_status";
$tdatauser1[".masterListFields"][] = "images_assigned";
$tdatauser1[".masterListFields"][] = "log";

$tdatauser1[".inlineAddFields"] = array();

$tdatauser1[".editFields"] = array();
$tdatauser1[".editFields"][] = "user_picture";
$tdatauser1[".editFields"][] = "employee_id";
$tdatauser1[".editFields"][] = "username";
$tdatauser1[".editFields"][] = "team";
$tdatauser1[".editFields"][] = "department_id";
$tdatauser1[".editFields"][] = "subdiv_id";
$tdatauser1[".editFields"][] = "group_id";
$tdatauser1[".editFields"][] = "ad_group_id";
$tdatauser1[".editFields"][] = "designation";
$tdatauser1[".editFields"][] = "fname";
$tdatauser1[".editFields"][] = "lname";
$tdatauser1[".editFields"][] = "nickname";
$tdatauser1[".editFields"][] = "email";
$tdatauser1[".editFields"][] = "phone";
$tdatauser1[".editFields"][] = "mobile";
$tdatauser1[".editFields"][] = "emergency_contact1";
$tdatauser1[".editFields"][] = "emergency_contact2";
$tdatauser1[".editFields"][] = "permanent_address";
$tdatauser1[".editFields"][] = "current_address";
$tdatauser1[".editFields"][] = "date_of_birth";
$tdatauser1[".editFields"][] = "male_female";
$tdatauser1[".editFields"][] = "joining_date";
$tdatauser1[".editFields"][] = "user_status";
$tdatauser1[".editFields"][] = "images_assigned";
$tdatauser1[".editFields"][] = "log";

$tdatauser1[".inlineEditFields"] = array();

$tdatauser1[".exportFields"] = array();
$tdatauser1[".exportFields"][] = "ShiftTypeId";
$tdatauser1[".exportFields"][] = "Description";
$tdatauser1[".exportFields"][] = "user_picture";
$tdatauser1[".exportFields"][] = "user_id";
$tdatauser1[".exportFields"][] = "employee_id";
$tdatauser1[".exportFields"][] = "username";
$tdatauser1[".exportFields"][] = "team";
$tdatauser1[".exportFields"][] = "department_id";
$tdatauser1[".exportFields"][] = "subdiv_id";
$tdatauser1[".exportFields"][] = "group_id";
$tdatauser1[".exportFields"][] = "ad_group_id";
$tdatauser1[".exportFields"][] = "designation";
$tdatauser1[".exportFields"][] = "fname";
$tdatauser1[".exportFields"][] = "lname";
$tdatauser1[".exportFields"][] = "nickname";
$tdatauser1[".exportFields"][] = "email";
$tdatauser1[".exportFields"][] = "phone";
$tdatauser1[".exportFields"][] = "mobile";
$tdatauser1[".exportFields"][] = "emergency_contact1";
$tdatauser1[".exportFields"][] = "emergency_contact2";
$tdatauser1[".exportFields"][] = "permanent_address";
$tdatauser1[".exportFields"][] = "current_address";
$tdatauser1[".exportFields"][] = "date_of_birth";
$tdatauser1[".exportFields"][] = "male_female";
$tdatauser1[".exportFields"][] = "joining_date";
$tdatauser1[".exportFields"][] = "user_status";
$tdatauser1[".exportFields"][] = "images_assigned";
$tdatauser1[".exportFields"][] = "log";

$tdatauser1[".importFields"] = array();
$tdatauser1[".importFields"][] = "user_id";
$tdatauser1[".importFields"][] = "user_status";
$tdatauser1[".importFields"][] = "username";
$tdatauser1[".importFields"][] = "department_id";
$tdatauser1[".importFields"][] = "subdiv_id";
$tdatauser1[".importFields"][] = "group_id";
$tdatauser1[".importFields"][] = "employee_id";
$tdatauser1[".importFields"][] = "fname";
$tdatauser1[".importFields"][] = "lname";
$tdatauser1[".importFields"][] = "nickname";
$tdatauser1[".importFields"][] = "email";
$tdatauser1[".importFields"][] = "phone";
$tdatauser1[".importFields"][] = "mobile";
$tdatauser1[".importFields"][] = "log";
$tdatauser1[".importFields"][] = "images_assigned";
$tdatauser1[".importFields"][] = "user_picture";
$tdatauser1[".importFields"][] = "team";
$tdatauser1[".importFields"][] = "ad_group_id";
$tdatauser1[".importFields"][] = "designation";
$tdatauser1[".importFields"][] = "joining_date";
$tdatauser1[".importFields"][] = "emergency_contact1";
$tdatauser1[".importFields"][] = "emergency_contact2";
$tdatauser1[".importFields"][] = "permanent_address";
$tdatauser1[".importFields"][] = "current_address";
$tdatauser1[".importFields"][] = "date_of_birth";
$tdatauser1[".importFields"][] = "male_female";
$tdatauser1[".importFields"][] = "ShiftTypeId";
$tdatauser1[".importFields"][] = "Description";

$tdatauser1[".printFields"] = array();
$tdatauser1[".printFields"][] = "ShiftTypeId";
$tdatauser1[".printFields"][] = "Description";
$tdatauser1[".printFields"][] = "user_picture";
$tdatauser1[".printFields"][] = "user_id";
$tdatauser1[".printFields"][] = "employee_id";
$tdatauser1[".printFields"][] = "username";
$tdatauser1[".printFields"][] = "team";
$tdatauser1[".printFields"][] = "department_id";
$tdatauser1[".printFields"][] = "subdiv_id";
$tdatauser1[".printFields"][] = "group_id";
$tdatauser1[".printFields"][] = "ad_group_id";
$tdatauser1[".printFields"][] = "designation";
$tdatauser1[".printFields"][] = "fname";
$tdatauser1[".printFields"][] = "lname";
$tdatauser1[".printFields"][] = "nickname";
$tdatauser1[".printFields"][] = "email";
$tdatauser1[".printFields"][] = "phone";
$tdatauser1[".printFields"][] = "mobile";
$tdatauser1[".printFields"][] = "emergency_contact1";
$tdatauser1[".printFields"][] = "emergency_contact2";
$tdatauser1[".printFields"][] = "permanent_address";
$tdatauser1[".printFields"][] = "current_address";
$tdatauser1[".printFields"][] = "date_of_birth";
$tdatauser1[".printFields"][] = "male_female";
$tdatauser1[".printFields"][] = "joining_date";
$tdatauser1[".printFields"][] = "user_status";
$tdatauser1[".printFields"][] = "images_assigned";
$tdatauser1[".printFields"][] = "log";

//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","user_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "user_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.user_id";
	
		
		
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

	

	
	$tdatauser1["user_id"] = $fdata;
//	user_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_status";
	$fdata["GoodName"] = "user_status";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","user_status"); 
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
	$fdata["FullName"] = "`user`.user_status";
	
		
		
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

	

	
	$tdatauser1["user_status"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","username"); 
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
	$fdata["FullName"] = "`user`.username";
	
		
		
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

	

	
	$tdatauser1["username"] = $fdata;
//	department_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "department_id";
	$fdata["GoodName"] = "department_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","department_id"); 
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
	$fdata["FullName"] = "`user`.department_id";
	
		
		
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

	

	
	$tdatauser1["department_id"] = $fdata;
//	subdiv_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "subdiv_id";
	$fdata["GoodName"] = "subdiv_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","subdiv_id"); 
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
	$fdata["FullName"] = "`user`.subdiv_id";
	
		
		
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

	

	
	$tdatauser1["subdiv_id"] = $fdata;
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","group_id"); 
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

	

	
	$tdatauser1["group_id"] = $fdata;
//	employee_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "employee_id";
	$fdata["GoodName"] = "employee_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","employee_id"); 
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
	$fdata["FullName"] = "`user`.employee_id";
	
		
		
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

	

	
	$tdatauser1["employee_id"] = $fdata;
//	fname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fname";
	$fdata["GoodName"] = "fname";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","fname"); 
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
	$fdata["FullName"] = "`user`.fname";
	
		
		
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

	

	
	$tdatauser1["fname"] = $fdata;
//	lname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "lname";
	$fdata["GoodName"] = "lname";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","lname"); 
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
	$fdata["FullName"] = "`user`.lname";
	
		
		
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

	

	
	$tdatauser1["lname"] = $fdata;
//	nickname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "nickname";
	$fdata["GoodName"] = "nickname";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","nickname"); 
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
	$fdata["FullName"] = "`user`.nickname";
	
		
		
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

	

	
	$tdatauser1["nickname"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","email"); 
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
	$fdata["FullName"] = "`user`.email";
	
		
		
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

	

	
	$tdatauser1["email"] = $fdata;
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","phone"); 
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
	$fdata["FullName"] = "`user`.phone";
	
		
		
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

	

	
	$tdatauser1["phone"] = $fdata;
//	mobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "mobile";
	$fdata["GoodName"] = "mobile";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","mobile"); 
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
	$fdata["FullName"] = "`user`.mobile";
	
		
		
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

	

	
	$tdatauser1["mobile"] = $fdata;
//	log
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "log";
	$fdata["GoodName"] = "log";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","log"); 
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
	$fdata["FullName"] = "`user`.log";
	
		
		
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

	

	
	$tdatauser1["log"] = $fdata;
//	images_assigned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "images_assigned";
	$fdata["GoodName"] = "images_assigned";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","images_assigned"); 
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
	$fdata["FullName"] = "`user`.images_assigned";
	
		
		
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

	

	
	$tdatauser1["images_assigned"] = $fdata;
//	user_picture
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "user_picture";
	$fdata["GoodName"] = "user_picture";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","user_picture"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "user_picture"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.user_picture";
	
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
	
	
	
	

	

	
	$tdatauser1["user_picture"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","password"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "password"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.password";
	
		
		
				
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
	
	
	
	

	

	
	$tdatauser1["password"] = $fdata;
//	team
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "team";
	$fdata["GoodName"] = "team";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","team"); 
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

	

	
	$tdatauser1["team"] = $fdata;
//	ad_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "ad_group_id";
	$fdata["GoodName"] = "ad_group_id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","ad_group_id"); 
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
	$fdata["FullName"] = "`user`.ad_group_id";
	
		
		
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

	

	
	$tdatauser1["ad_group_id"] = $fdata;
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","designation"); 
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
	$fdata["FullName"] = "`user`.designation";
	
		
		
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

	

	
	$tdatauser1["designation"] = $fdata;
//	joining_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "joining_date";
	$fdata["GoodName"] = "joining_date";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","joining_date"); 
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
	$fdata["FullName"] = "`user`.joining_date";
	
		
		
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

	

	
	$tdatauser1["joining_date"] = $fdata;
//	emergency_contact1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "emergency_contact1";
	$fdata["GoodName"] = "emergency_contact1";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","emergency_contact1"); 
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
	$fdata["FullName"] = "`user`.emergency_contact1";
	
		
		
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

	

	
	$tdatauser1["emergency_contact1"] = $fdata;
//	emergency_contact2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "emergency_contact2";
	$fdata["GoodName"] = "emergency_contact2";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","emergency_contact2"); 
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
	$fdata["FullName"] = "`user`.emergency_contact2";
	
		
		
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

	

	
	$tdatauser1["emergency_contact2"] = $fdata;
//	permanent_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "permanent_address";
	$fdata["GoodName"] = "permanent_address";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","permanent_address"); 
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
	$fdata["FullName"] = "`user`.permanent_address";
	
		
		
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

	

	
	$tdatauser1["permanent_address"] = $fdata;
//	current_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "current_address";
	$fdata["GoodName"] = "current_address";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","current_address"); 
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
	$fdata["FullName"] = "`user`.current_address";
	
		
		
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

	

	
	$tdatauser1["current_address"] = $fdata;
//	date_of_birth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "date_of_birth";
	$fdata["GoodName"] = "date_of_birth";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","date_of_birth"); 
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
	$fdata["FullName"] = "`user`.date_of_birth";
	
		
		
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

	

	
	$tdatauser1["date_of_birth"] = $fdata;
//	male_female
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "male_female";
	$fdata["GoodName"] = "male_female";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user1","male_female"); 
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
	$fdata["FullName"] = "`user`.male_female";
	
		
		
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

	

	
	$tdatauser1["male_female"] = $fdata;
//	ShiftTypeId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "ShiftTypeId";
	$fdata["GoodName"] = "ShiftTypeId";
	$fdata["ownerTable"] = "shifttype";
	$fdata["Label"] = GetFieldLabel("user1","ShiftTypeId"); 
	$fdata["FieldType"] = 3;
	
		
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

	

	
	$tdatauser1["ShiftTypeId"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "shifttype";
	$fdata["Label"] = GetFieldLabel("user1","Description"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Description"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shifttype.Description";
	
		
		
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

	

	
	$tdatauser1["Description"] = $fdata;

	
$tables_data["user1"]=&$tdatauser1;
$field_labels["user1"] = &$fieldLabelsuser1;
$fieldToolTips["user1"] = &$fieldToolTipsuser1;
$page_titles["user1"] = &$pageTitlesuser1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["user1"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["user1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_user1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`user`.user_id,  `user`.user_status,  `user`.username,  `user`.department_id,  `user`.subdiv_id,  `user`.group_id,  `user`.employee_id,  `user`.fname,  `user`.lname,  `user`.nickname,  `user`.email,  `user`.phone,  `user`.mobile,  `user`.log,  `user`.images_assigned,  `user`.user_picture,  `user`.password,  `user`.team,  `user`.ad_group_id,  `user`.designation,  `user`.joining_date,  `user`.emergency_contact1,  `user`.emergency_contact2,  `user`.permanent_address,  `user`.current_address,  `user`.date_of_birth,  `user`.male_female,  shifttype.ShiftTypeId,  shifttype.Description";
$proto0["m_strFrom"] = "FROM `user`  INNER JOIN team ON `user`.team = team.ID  INNER JOIN shifttype ON team.team_shift = shifttype.ShiftTypeId";
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
	"m_srcTableName" => "user1"
));

$proto5["m_sql"] = "`user`.user_id";
$proto5["m_srcTableName"] = "user1";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "user_status",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto7["m_sql"] = "`user`.user_status";
$proto7["m_srcTableName"] = "user1";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto9["m_sql"] = "`user`.username";
$proto9["m_srcTableName"] = "user1";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "department_id",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto11["m_sql"] = "`user`.department_id";
$proto11["m_srcTableName"] = "user1";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "subdiv_id",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto13["m_sql"] = "`user`.subdiv_id";
$proto13["m_srcTableName"] = "user1";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto15["m_sql"] = "`user`.group_id";
$proto15["m_srcTableName"] = "user1";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "employee_id",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto17["m_sql"] = "`user`.employee_id";
$proto17["m_srcTableName"] = "user1";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "fname",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto19["m_sql"] = "`user`.fname";
$proto19["m_srcTableName"] = "user1";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "lname",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto21["m_sql"] = "`user`.lname";
$proto21["m_srcTableName"] = "user1";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "nickname",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto23["m_sql"] = "`user`.nickname";
$proto23["m_srcTableName"] = "user1";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto25["m_sql"] = "`user`.email";
$proto25["m_srcTableName"] = "user1";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto27["m_sql"] = "`user`.phone";
$proto27["m_srcTableName"] = "user1";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "mobile",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto29["m_sql"] = "`user`.mobile";
$proto29["m_srcTableName"] = "user1";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "log",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto31["m_sql"] = "`user`.log";
$proto31["m_srcTableName"] = "user1";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "images_assigned",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto33["m_sql"] = "`user`.images_assigned";
$proto33["m_srcTableName"] = "user1";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "user_picture",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto35["m_sql"] = "`user`.user_picture";
$proto35["m_srcTableName"] = "user1";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto37["m_sql"] = "`user`.password";
$proto37["m_srcTableName"] = "user1";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto39["m_sql"] = "`user`.team";
$proto39["m_srcTableName"] = "user1";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "ad_group_id",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto41["m_sql"] = "`user`.ad_group_id";
$proto41["m_srcTableName"] = "user1";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto43["m_sql"] = "`user`.designation";
$proto43["m_srcTableName"] = "user1";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "joining_date",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto45["m_sql"] = "`user`.joining_date";
$proto45["m_srcTableName"] = "user1";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "emergency_contact1",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto47["m_sql"] = "`user`.emergency_contact1";
$proto47["m_srcTableName"] = "user1";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "emergency_contact2",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto49["m_sql"] = "`user`.emergency_contact2";
$proto49["m_srcTableName"] = "user1";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "permanent_address",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto51["m_sql"] = "`user`.permanent_address";
$proto51["m_srcTableName"] = "user1";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "current_address",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto53["m_sql"] = "`user`.current_address";
$proto53["m_srcTableName"] = "user1";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "date_of_birth",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto55["m_sql"] = "`user`.date_of_birth";
$proto55["m_srcTableName"] = "user1";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "male_female",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto57["m_sql"] = "`user`.male_female";
$proto57["m_srcTableName"] = "user1";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "ShiftTypeId",
	"m_strTable" => "shifttype",
	"m_srcTableName" => "user1"
));

$proto59["m_sql"] = "shifttype.ShiftTypeId";
$proto59["m_srcTableName"] = "user1";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "shifttype",
	"m_srcTableName" => "user1"
));

$proto61["m_sql"] = "shifttype.Description";
$proto61["m_srcTableName"] = "user1";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto63=array();
$proto63["m_link"] = "SQLL_MAIN";
			$proto64=array();
$proto64["m_strName"] = "user";
$proto64["m_srcTableName"] = "user1";
$proto64["m_columns"] = array();
$proto64["m_columns"][] = "user_id";
$proto64["m_columns"][] = "user_status";
$proto64["m_columns"][] = "username";
$proto64["m_columns"][] = "password";
$proto64["m_columns"][] = "department_id";
$proto64["m_columns"][] = "subdiv_id";
$proto64["m_columns"][] = "group_id";
$proto64["m_columns"][] = "designation";
$proto64["m_columns"][] = "employee_id";
$proto64["m_columns"][] = "fname";
$proto64["m_columns"][] = "lname";
$proto64["m_columns"][] = "nickname";
$proto64["m_columns"][] = "email";
$proto64["m_columns"][] = "phone";
$proto64["m_columns"][] = "mobile";
$proto64["m_columns"][] = "log";
$proto64["m_columns"][] = "images_assigned";
$proto64["m_columns"][] = "user_picture";
$proto64["m_columns"][] = "team";
$proto64["m_columns"][] = "ad_group_id";
$proto64["m_columns"][] = "lastaccess";
$proto64["m_columns"][] = "joining_date";
$proto64["m_columns"][] = "emergency_contact1";
$proto64["m_columns"][] = "emergency_contact2";
$proto64["m_columns"][] = "permanent_address";
$proto64["m_columns"][] = "current_address";
$proto64["m_columns"][] = "date_of_birth";
$proto64["m_columns"][] = "male_female";
$obj = new SQLTable($proto64);

$proto63["m_table"] = $obj;
$proto63["m_sql"] = "`user`";
$proto63["m_alias"] = "";
$proto63["m_srcTableName"] = "user1";
$proto65=array();
$proto65["m_sql"] = "";
$proto65["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto65["m_column"]=$obj;
$proto65["m_contained"] = array();
$proto65["m_strCase"] = "";
$proto65["m_havingmode"] = false;
$proto65["m_inBrackets"] = false;
$proto65["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto65);

$proto63["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto63);

$proto0["m_fromlist"][]=$obj;
												$proto67=array();
$proto67["m_link"] = "SQLL_INNERJOIN";
			$proto68=array();
$proto68["m_strName"] = "team";
$proto68["m_srcTableName"] = "user1";
$proto68["m_columns"] = array();
$proto68["m_columns"][] = "ID";
$proto68["m_columns"][] = "team_name";
$proto68["m_columns"][] = "team_discription";
$proto68["m_columns"][] = "team_leader_id";
$proto68["m_columns"][] = "team_shift";
$obj = new SQLTable($proto68);

$proto67["m_table"] = $obj;
$proto67["m_sql"] = "INNER JOIN team ON `user`.team = team.ID";
$proto67["m_alias"] = "";
$proto67["m_srcTableName"] = "user1";
$proto69=array();
$proto69["m_sql"] = "`user`.team = team.ID";
$proto69["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "user1"
));

$proto69["m_column"]=$obj;
$proto69["m_contained"] = array();
$proto69["m_strCase"] = "= team.ID";
$proto69["m_havingmode"] = false;
$proto69["m_inBrackets"] = false;
$proto69["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto69);

$proto67["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto67);

$proto0["m_fromlist"][]=$obj;
												$proto71=array();
$proto71["m_link"] = "SQLL_INNERJOIN";
			$proto72=array();
$proto72["m_strName"] = "shifttype";
$proto72["m_srcTableName"] = "user1";
$proto72["m_columns"] = array();
$proto72["m_columns"][] = "ShiftTypeId";
$proto72["m_columns"][] = "Description";
$proto72["m_columns"][] = "StartTime";
$proto72["m_columns"][] = "EndTime";
$proto72["m_columns"][] = "DayInterval";
$obj = new SQLTable($proto72);

$proto71["m_table"] = $obj;
$proto71["m_sql"] = "INNER JOIN shifttype ON team.team_shift = shifttype.ShiftTypeId";
$proto71["m_alias"] = "";
$proto71["m_srcTableName"] = "user1";
$proto73=array();
$proto73["m_sql"] = "team.team_shift = shifttype.ShiftTypeId";
$proto73["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "team_shift",
	"m_strTable" => "team",
	"m_srcTableName" => "user1"
));

$proto73["m_column"]=$obj;
$proto73["m_contained"] = array();
$proto73["m_strCase"] = "= shifttype.ShiftTypeId";
$proto73["m_havingmode"] = false;
$proto73["m_inBrackets"] = false;
$proto73["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto73);

$proto71["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto71);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="user1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_user1 = createSqlQuery_user1();


	
																													
	
$tdatauser1[".sqlquery"] = $queryData_user1;

include_once(getabspath("include/user1_events.php"));
$tableEvents["user1"] = new eventclass_user1;
$tdatauser1[".hasEvents"] = true;

?>