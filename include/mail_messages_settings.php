<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamail_messages = array();	
	$tdatamail_messages[".truncateText"] = true;
	$tdatamail_messages[".NumberOfChars"] = 80; 
	$tdatamail_messages[".ShortName"] = "mail_messages";
	$tdatamail_messages[".OwnerID"] = "";
	$tdatamail_messages[".OriginalTable"] = "mail_messages";

//	field labels
$fieldLabelsmail_messages = array();
$fieldToolTipsmail_messages = array();
$pageTitlesmail_messages = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmail_messages["English"] = array();
	$fieldToolTipsmail_messages["English"] = array();
	$pageTitlesmail_messages["English"] = array();
	$fieldLabelsmail_messages["English"]["id"] = "Id";
	$fieldToolTipsmail_messages["English"]["id"] = "";
	$fieldLabelsmail_messages["English"]["created"] = "Created";
	$fieldToolTipsmail_messages["English"]["created"] = "";
	$fieldLabelsmail_messages["English"]["body"] = "Body";
	$fieldToolTipsmail_messages["English"]["body"] = "";
	$fieldLabelsmail_messages["English"]["to_email"] = "To Email";
	$fieldToolTipsmail_messages["English"]["to_email"] = "";
	$fieldLabelsmail_messages["English"]["subject"] = "Subject";
	$fieldToolTipsmail_messages["English"]["subject"] = "";
	$fieldLabelsmail_messages["English"]["message_id"] = "Message Id";
	$fieldToolTipsmail_messages["English"]["message_id"] = "";
	$fieldLabelsmail_messages["English"]["maildate"] = "Maildate";
	$fieldToolTipsmail_messages["English"]["maildate"] = "";
	$fieldLabelsmail_messages["English"]["from_email"] = "From Email";
	$fieldToolTipsmail_messages["English"]["from_email"] = "";
	$fieldLabelsmail_messages["English"]["to_name"] = "To Name";
	$fieldToolTipsmail_messages["English"]["to_name"] = "";
	$fieldLabelsmail_messages["English"]["from_name"] = "From Name";
	$fieldToolTipsmail_messages["English"]["from_name"] = "";
	$fieldLabelsmail_messages["English"]["attachment"] = "Attachment";
	$fieldToolTipsmail_messages["English"]["attachment"] = "";
	$fieldLabelsmail_messages["English"]["cc"] = "Cc";
	$fieldToolTipsmail_messages["English"]["cc"] = "";
	$fieldLabelsmail_messages["English"]["bcc"] = "Bcc";
	$fieldToolTipsmail_messages["English"]["bcc"] = "";
	$fieldLabelsmail_messages["English"]["server_id"] = "Server Id";
	$fieldToolTipsmail_messages["English"]["server_id"] = "";
	if (count($fieldToolTipsmail_messages["English"]))
		$tdatamail_messages[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmail_messages[""] = array();
	$fieldToolTipsmail_messages[""] = array();
	$pageTitlesmail_messages[""] = array();
	if (count($fieldToolTipsmail_messages[""]))
		$tdatamail_messages[".isUseToolTips"] = true;
}
	
	
	$tdatamail_messages[".NCSearch"] = true;



$tdatamail_messages[".shortTableName"] = "mail_messages";
$tdatamail_messages[".nSecOptions"] = 0;
$tdatamail_messages[".recsPerRowList"] = 1;
$tdatamail_messages[".recsPerRowPrint"] = 1;
$tdatamail_messages[".mainTableOwnerID"] = "";
$tdatamail_messages[".moveNext"] = 1;
$tdatamail_messages[".entityType"] = 0;

$tdatamail_messages[".strOriginalTableName"] = "mail_messages";




$tdatamail_messages[".showAddInPopup"] = false;

$tdatamail_messages[".showEditInPopup"] = false;

$tdatamail_messages[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamail_messages[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamail_messages[".fieldsForRegister"] = array();

$tdatamail_messages[".listAjax"] = false;

	$tdatamail_messages[".audit"] = false;

	$tdatamail_messages[".locking"] = false;

$tdatamail_messages[".edit"] = true;
$tdatamail_messages[".afterEditAction"] = 1;
$tdatamail_messages[".closePopupAfterEdit"] = 1;
$tdatamail_messages[".afterEditActionDetTable"] = "";

$tdatamail_messages[".add"] = true;
$tdatamail_messages[".afterAddAction"] = 0;
$tdatamail_messages[".closePopupAfterAdd"] = 1;
$tdatamail_messages[".afterAddActionDetTable"] = "";

$tdatamail_messages[".list"] = true;

$tdatamail_messages[".inlineEdit"] = true;
$tdatamail_messages[".inlineAdd"] = true;
$tdatamail_messages[".view"] = true;

$tdatamail_messages[".import"] = true;

$tdatamail_messages[".exportTo"] = true;

$tdatamail_messages[".printFriendly"] = true;

$tdatamail_messages[".delete"] = true;

$tdatamail_messages[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatamail_messages[".searchSaving"] = false;
//

$tdatamail_messages[".showSearchPanel"] = true;
		$tdatamail_messages[".flexibleSearch"] = true;		

if (isMobile())
	$tdatamail_messages[".isUseAjaxSuggest"] = false;
else 
	$tdatamail_messages[".isUseAjaxSuggest"] = true;

$tdatamail_messages[".rowHighlite"] = true;


																																																																																																																																															
$tdatamail_messages[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamail_messages[".isUseTimeForSearch"] = false;





$tdatamail_messages[".allSearchFields"] = array();
$tdatamail_messages[".filterFields"] = array();
$tdatamail_messages[".requiredSearchFields"] = array();

$tdatamail_messages[".allSearchFields"][] = "id";
	$tdatamail_messages[".allSearchFields"][] = "created";
	$tdatamail_messages[".allSearchFields"][] = "body";
	$tdatamail_messages[".allSearchFields"][] = "to_email";
	$tdatamail_messages[".allSearchFields"][] = "subject";
	$tdatamail_messages[".allSearchFields"][] = "message_id";
	$tdatamail_messages[".allSearchFields"][] = "maildate";
	$tdatamail_messages[".allSearchFields"][] = "from_email";
	$tdatamail_messages[".allSearchFields"][] = "to_name";
	$tdatamail_messages[".allSearchFields"][] = "from_name";
	$tdatamail_messages[".allSearchFields"][] = "attachment";
	$tdatamail_messages[".allSearchFields"][] = "cc";
	$tdatamail_messages[".allSearchFields"][] = "bcc";
	$tdatamail_messages[".allSearchFields"][] = "server_id";
	

$tdatamail_messages[".googleLikeFields"] = array();
$tdatamail_messages[".googleLikeFields"][] = "id";
$tdatamail_messages[".googleLikeFields"][] = "created";
$tdatamail_messages[".googleLikeFields"][] = "body";
$tdatamail_messages[".googleLikeFields"][] = "to_email";
$tdatamail_messages[".googleLikeFields"][] = "subject";
$tdatamail_messages[".googleLikeFields"][] = "message_id";
$tdatamail_messages[".googleLikeFields"][] = "maildate";
$tdatamail_messages[".googleLikeFields"][] = "from_email";
$tdatamail_messages[".googleLikeFields"][] = "to_name";
$tdatamail_messages[".googleLikeFields"][] = "from_name";
$tdatamail_messages[".googleLikeFields"][] = "attachment";
$tdatamail_messages[".googleLikeFields"][] = "cc";
$tdatamail_messages[".googleLikeFields"][] = "bcc";
$tdatamail_messages[".googleLikeFields"][] = "server_id";


$tdatamail_messages[".advSearchFields"] = array();
$tdatamail_messages[".advSearchFields"][] = "id";
$tdatamail_messages[".advSearchFields"][] = "created";
$tdatamail_messages[".advSearchFields"][] = "body";
$tdatamail_messages[".advSearchFields"][] = "to_email";
$tdatamail_messages[".advSearchFields"][] = "subject";
$tdatamail_messages[".advSearchFields"][] = "message_id";
$tdatamail_messages[".advSearchFields"][] = "maildate";
$tdatamail_messages[".advSearchFields"][] = "from_email";
$tdatamail_messages[".advSearchFields"][] = "to_name";
$tdatamail_messages[".advSearchFields"][] = "from_name";
$tdatamail_messages[".advSearchFields"][] = "attachment";
$tdatamail_messages[".advSearchFields"][] = "cc";
$tdatamail_messages[".advSearchFields"][] = "bcc";
$tdatamail_messages[".advSearchFields"][] = "server_id";

$tdatamail_messages[".tableType"] = "list";

$tdatamail_messages[".printerPageOrientation"] = 0;
$tdatamail_messages[".nPrinterPageScale"] = 100;

$tdatamail_messages[".nPrinterSplitRecords"] = 40;

$tdatamail_messages[".nPrinterPDFSplitRecords"] = 40;



$tdatamail_messages[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatamail_messages[".pageSize"] = 20;

$tdatamail_messages[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamail_messages[".strOrderBy"] = $tstrOrderBy;

$tdatamail_messages[".orderindexes"] = array();

$tdatamail_messages[".sqlHead"] = "SELECT id,  	created,  	`body`,  	to_email,  	subject,  	message_id,  	maildate,  	from_email,  	to_name,  	from_name,  	attachment,  	cc,  	bcc,  	server_id";
$tdatamail_messages[".sqlFrom"] = "FROM mail_messages";
$tdatamail_messages[".sqlWhereExpr"] = "";
$tdatamail_messages[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamail_messages[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamail_messages[".arrGroupsPerPage"] = $arrGPP;

$tdatamail_messages[".highlightSearchResults"] = true;

$tableKeysmail_messages = array();
$tableKeysmail_messages[] = "id";
$tdatamail_messages[".Keys"] = $tableKeysmail_messages;

$tdatamail_messages[".listFields"] = array();
$tdatamail_messages[".listFields"][] = "id";
$tdatamail_messages[".listFields"][] = "created";
$tdatamail_messages[".listFields"][] = "body";
$tdatamail_messages[".listFields"][] = "to_email";
$tdatamail_messages[".listFields"][] = "subject";
$tdatamail_messages[".listFields"][] = "message_id";
$tdatamail_messages[".listFields"][] = "maildate";
$tdatamail_messages[".listFields"][] = "from_email";
$tdatamail_messages[".listFields"][] = "to_name";
$tdatamail_messages[".listFields"][] = "from_name";
$tdatamail_messages[".listFields"][] = "attachment";
$tdatamail_messages[".listFields"][] = "cc";
$tdatamail_messages[".listFields"][] = "bcc";
$tdatamail_messages[".listFields"][] = "server_id";

$tdatamail_messages[".hideMobileList"] = array();


$tdatamail_messages[".viewFields"] = array();
$tdatamail_messages[".viewFields"][] = "id";
$tdatamail_messages[".viewFields"][] = "created";
$tdatamail_messages[".viewFields"][] = "body";
$tdatamail_messages[".viewFields"][] = "to_email";
$tdatamail_messages[".viewFields"][] = "subject";
$tdatamail_messages[".viewFields"][] = "message_id";
$tdatamail_messages[".viewFields"][] = "maildate";
$tdatamail_messages[".viewFields"][] = "from_email";
$tdatamail_messages[".viewFields"][] = "to_name";
$tdatamail_messages[".viewFields"][] = "from_name";
$tdatamail_messages[".viewFields"][] = "attachment";
$tdatamail_messages[".viewFields"][] = "cc";
$tdatamail_messages[".viewFields"][] = "bcc";
$tdatamail_messages[".viewFields"][] = "server_id";

$tdatamail_messages[".addFields"] = array();
$tdatamail_messages[".addFields"][] = "created";
$tdatamail_messages[".addFields"][] = "body";
$tdatamail_messages[".addFields"][] = "to_email";
$tdatamail_messages[".addFields"][] = "subject";
$tdatamail_messages[".addFields"][] = "message_id";
$tdatamail_messages[".addFields"][] = "maildate";
$tdatamail_messages[".addFields"][] = "from_email";
$tdatamail_messages[".addFields"][] = "to_name";
$tdatamail_messages[".addFields"][] = "from_name";
$tdatamail_messages[".addFields"][] = "attachment";
$tdatamail_messages[".addFields"][] = "cc";
$tdatamail_messages[".addFields"][] = "bcc";
$tdatamail_messages[".addFields"][] = "server_id";

$tdatamail_messages[".masterListFields"] = array();
$tdatamail_messages[".masterListFields"][] = "id";
$tdatamail_messages[".masterListFields"][] = "created";
$tdatamail_messages[".masterListFields"][] = "body";
$tdatamail_messages[".masterListFields"][] = "to_email";
$tdatamail_messages[".masterListFields"][] = "subject";
$tdatamail_messages[".masterListFields"][] = "message_id";
$tdatamail_messages[".masterListFields"][] = "maildate";
$tdatamail_messages[".masterListFields"][] = "from_email";
$tdatamail_messages[".masterListFields"][] = "to_name";
$tdatamail_messages[".masterListFields"][] = "from_name";
$tdatamail_messages[".masterListFields"][] = "attachment";
$tdatamail_messages[".masterListFields"][] = "cc";
$tdatamail_messages[".masterListFields"][] = "bcc";
$tdatamail_messages[".masterListFields"][] = "server_id";

$tdatamail_messages[".inlineAddFields"] = array();
$tdatamail_messages[".inlineAddFields"][] = "created";
$tdatamail_messages[".inlineAddFields"][] = "body";
$tdatamail_messages[".inlineAddFields"][] = "to_email";
$tdatamail_messages[".inlineAddFields"][] = "subject";
$tdatamail_messages[".inlineAddFields"][] = "message_id";
$tdatamail_messages[".inlineAddFields"][] = "maildate";
$tdatamail_messages[".inlineAddFields"][] = "from_email";
$tdatamail_messages[".inlineAddFields"][] = "to_name";
$tdatamail_messages[".inlineAddFields"][] = "from_name";
$tdatamail_messages[".inlineAddFields"][] = "attachment";
$tdatamail_messages[".inlineAddFields"][] = "cc";
$tdatamail_messages[".inlineAddFields"][] = "bcc";
$tdatamail_messages[".inlineAddFields"][] = "server_id";

$tdatamail_messages[".editFields"] = array();
$tdatamail_messages[".editFields"][] = "created";
$tdatamail_messages[".editFields"][] = "body";
$tdatamail_messages[".editFields"][] = "to_email";
$tdatamail_messages[".editFields"][] = "subject";
$tdatamail_messages[".editFields"][] = "message_id";
$tdatamail_messages[".editFields"][] = "maildate";
$tdatamail_messages[".editFields"][] = "from_email";
$tdatamail_messages[".editFields"][] = "to_name";
$tdatamail_messages[".editFields"][] = "from_name";
$tdatamail_messages[".editFields"][] = "attachment";
$tdatamail_messages[".editFields"][] = "cc";
$tdatamail_messages[".editFields"][] = "bcc";
$tdatamail_messages[".editFields"][] = "server_id";

$tdatamail_messages[".inlineEditFields"] = array();
$tdatamail_messages[".inlineEditFields"][] = "created";
$tdatamail_messages[".inlineEditFields"][] = "body";
$tdatamail_messages[".inlineEditFields"][] = "to_email";
$tdatamail_messages[".inlineEditFields"][] = "subject";
$tdatamail_messages[".inlineEditFields"][] = "message_id";
$tdatamail_messages[".inlineEditFields"][] = "maildate";
$tdatamail_messages[".inlineEditFields"][] = "from_email";
$tdatamail_messages[".inlineEditFields"][] = "to_name";
$tdatamail_messages[".inlineEditFields"][] = "from_name";
$tdatamail_messages[".inlineEditFields"][] = "attachment";
$tdatamail_messages[".inlineEditFields"][] = "cc";
$tdatamail_messages[".inlineEditFields"][] = "bcc";
$tdatamail_messages[".inlineEditFields"][] = "server_id";

$tdatamail_messages[".exportFields"] = array();
$tdatamail_messages[".exportFields"][] = "id";
$tdatamail_messages[".exportFields"][] = "created";
$tdatamail_messages[".exportFields"][] = "body";
$tdatamail_messages[".exportFields"][] = "to_email";
$tdatamail_messages[".exportFields"][] = "subject";
$tdatamail_messages[".exportFields"][] = "message_id";
$tdatamail_messages[".exportFields"][] = "maildate";
$tdatamail_messages[".exportFields"][] = "from_email";
$tdatamail_messages[".exportFields"][] = "to_name";
$tdatamail_messages[".exportFields"][] = "from_name";
$tdatamail_messages[".exportFields"][] = "attachment";
$tdatamail_messages[".exportFields"][] = "cc";
$tdatamail_messages[".exportFields"][] = "bcc";
$tdatamail_messages[".exportFields"][] = "server_id";

$tdatamail_messages[".importFields"] = array();
$tdatamail_messages[".importFields"][] = "id";
$tdatamail_messages[".importFields"][] = "created";
$tdatamail_messages[".importFields"][] = "body";
$tdatamail_messages[".importFields"][] = "to_email";
$tdatamail_messages[".importFields"][] = "subject";
$tdatamail_messages[".importFields"][] = "message_id";
$tdatamail_messages[".importFields"][] = "maildate";
$tdatamail_messages[".importFields"][] = "from_email";
$tdatamail_messages[".importFields"][] = "to_name";
$tdatamail_messages[".importFields"][] = "from_name";
$tdatamail_messages[".importFields"][] = "attachment";
$tdatamail_messages[".importFields"][] = "cc";
$tdatamail_messages[".importFields"][] = "bcc";
$tdatamail_messages[".importFields"][] = "server_id";

$tdatamail_messages[".printFields"] = array();
$tdatamail_messages[".printFields"][] = "id";
$tdatamail_messages[".printFields"][] = "created";
$tdatamail_messages[".printFields"][] = "body";
$tdatamail_messages[".printFields"][] = "to_email";
$tdatamail_messages[".printFields"][] = "subject";
$tdatamail_messages[".printFields"][] = "message_id";
$tdatamail_messages[".printFields"][] = "maildate";
$tdatamail_messages[".printFields"][] = "from_email";
$tdatamail_messages[".printFields"][] = "to_name";
$tdatamail_messages[".printFields"][] = "from_name";
$tdatamail_messages[".printFields"][] = "attachment";
$tdatamail_messages[".printFields"][] = "cc";
$tdatamail_messages[".printFields"][] = "bcc";
$tdatamail_messages[".printFields"][] = "server_id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","id"); 
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

	

	
	$tdatamail_messages["id"] = $fdata;
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","created"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "created"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created";
	
		
		
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

	

	
	$tdatamail_messages["created"] = $fdata;
//	body
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "body";
	$fdata["GoodName"] = "body";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","body"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "body"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`body`";
	
		
		
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

	

	
	$tdatamail_messages["body"] = $fdata;
//	to_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "to_email";
	$fdata["GoodName"] = "to_email";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","to_email"); 
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
	
		$fdata["strField"] = "to_email"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "to_email";
	
		
		
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
			$edata["EditParams"].= " maxlength=1024";
	
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

	

	
	$tdatamail_messages["to_email"] = $fdata;
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","subject"); 
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
	
		$fdata["strField"] = "subject"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subject";
	
		
		
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
			$edata["EditParams"].= " maxlength=512";
	
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

	

	
	$tdatamail_messages["subject"] = $fdata;
//	message_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "message_id";
	$fdata["GoodName"] = "message_id";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","message_id"); 
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
	
		$fdata["strField"] = "message_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "message_id";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatamail_messages["message_id"] = $fdata;
//	maildate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "maildate";
	$fdata["GoodName"] = "maildate";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","maildate"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "maildate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "maildate";
	
		
		
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

	

	
	$tdatamail_messages["maildate"] = $fdata;
//	from_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "from_email";
	$fdata["GoodName"] = "from_email";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","from_email"); 
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
	
		$fdata["strField"] = "from_email"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "from_email";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatamail_messages["from_email"] = $fdata;
//	to_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "to_name";
	$fdata["GoodName"] = "to_name";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","to_name"); 
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
	
		$fdata["strField"] = "to_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "to_name";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatamail_messages["to_name"] = $fdata;
//	from_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "from_name";
	$fdata["GoodName"] = "from_name";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","from_name"); 
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
	
		$fdata["strField"] = "from_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "from_name";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdatamail_messages["from_name"] = $fdata;
//	attachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "attachment";
	$fdata["GoodName"] = "attachment";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","attachment"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "attachment"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "attachment";
	
		
		
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

	

	
	$tdatamail_messages["attachment"] = $fdata;
//	cc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cc";
	$fdata["GoodName"] = "cc";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","cc"); 
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
	
		$fdata["strField"] = "cc"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cc";
	
		
		
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
			$edata["EditParams"].= " maxlength=512";
	
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

	

	
	$tdatamail_messages["cc"] = $fdata;
//	bcc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "bcc";
	$fdata["GoodName"] = "bcc";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","bcc"); 
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
	
		$fdata["strField"] = "bcc"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bcc";
	
		
		
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
			$edata["EditParams"].= " maxlength=512";
	
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

	

	
	$tdatamail_messages["bcc"] = $fdata;
//	server_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "server_id";
	$fdata["GoodName"] = "server_id";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","server_id"); 
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
	
		$fdata["strField"] = "server_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "server_id";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatamail_messages["server_id"] = $fdata;

	
$tables_data["mail_messages"]=&$tdatamail_messages;
$field_labels["mail_messages"] = &$fieldLabelsmail_messages;
$fieldToolTips["mail_messages"] = &$fieldToolTipsmail_messages;
$page_titles["mail_messages"] = &$pageTitlesmail_messages;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mail_messages"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["mail_messages"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mail_messages()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	created,  	`body`,  	to_email,  	subject,  	message_id,  	maildate,  	from_email,  	to_name,  	from_name,  	attachment,  	cc,  	bcc,  	server_id";
$proto0["m_strFrom"] = "FROM mail_messages";
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
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "mail_messages";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto7["m_sql"] = "created";
$proto7["m_srcTableName"] = "mail_messages";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "body",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto9["m_sql"] = "`body`";
$proto9["m_srcTableName"] = "mail_messages";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "to_email",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto11["m_sql"] = "to_email";
$proto11["m_srcTableName"] = "mail_messages";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "subject",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto13["m_sql"] = "subject";
$proto13["m_srcTableName"] = "mail_messages";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "message_id",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto15["m_sql"] = "message_id";
$proto15["m_srcTableName"] = "mail_messages";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "maildate",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto17["m_sql"] = "maildate";
$proto17["m_srcTableName"] = "mail_messages";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "from_email",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto19["m_sql"] = "from_email";
$proto19["m_srcTableName"] = "mail_messages";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "to_name",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto21["m_sql"] = "to_name";
$proto21["m_srcTableName"] = "mail_messages";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "from_name",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto23["m_sql"] = "from_name";
$proto23["m_srcTableName"] = "mail_messages";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "attachment",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto25["m_sql"] = "attachment";
$proto25["m_srcTableName"] = "mail_messages";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "cc",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto27["m_sql"] = "cc";
$proto27["m_srcTableName"] = "mail_messages";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "bcc",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto29["m_sql"] = "bcc";
$proto29["m_srcTableName"] = "mail_messages";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "server_id",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto31["m_sql"] = "server_id";
$proto31["m_srcTableName"] = "mail_messages";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto33=array();
$proto33["m_link"] = "SQLL_MAIN";
			$proto34=array();
$proto34["m_strName"] = "mail_messages";
$proto34["m_srcTableName"] = "mail_messages";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "id";
$proto34["m_columns"][] = "created";
$proto34["m_columns"][] = "body";
$proto34["m_columns"][] = "to_email";
$proto34["m_columns"][] = "subject";
$proto34["m_columns"][] = "message_id";
$proto34["m_columns"][] = "maildate";
$proto34["m_columns"][] = "from_email";
$proto34["m_columns"][] = "to_name";
$proto34["m_columns"][] = "from_name";
$proto34["m_columns"][] = "attachment";
$proto34["m_columns"][] = "cc";
$proto34["m_columns"][] = "bcc";
$proto34["m_columns"][] = "server_id";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "mail_messages";
$proto33["m_alias"] = "";
$proto33["m_srcTableName"] = "mail_messages";
$proto35=array();
$proto35["m_sql"] = "";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mail_messages";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mail_messages = createSqlQuery_mail_messages();


	
														
	
$tdatamail_messages[".sqlquery"] = $queryData_mail_messages;

$tableEvents["mail_messages"] = new eventsBase;
$tdatamail_messages[".hasEvents"] = false;

?>