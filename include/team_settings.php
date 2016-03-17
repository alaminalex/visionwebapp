<?php
require_once(getabspath("classes/cipherer.php"));




$tdatateam = array();	
	$tdatateam[".truncateText"] = true;
	$tdatateam[".NumberOfChars"] = 80; 
	$tdatateam[".ShortName"] = "team";
	$tdatateam[".OwnerID"] = "";
	$tdatateam[".OriginalTable"] = "team";

//	field labels
$fieldLabelsteam = array();
$fieldToolTipsteam = array();
$pageTitlesteam = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsteam["English"] = array();
	$fieldToolTipsteam["English"] = array();
	$pageTitlesteam["English"] = array();
	$fieldLabelsteam["English"]["ID"] = "ID";
	$fieldToolTipsteam["English"]["ID"] = "";
	$fieldLabelsteam["English"]["team_name"] = "Team Name";
	$fieldToolTipsteam["English"]["team_name"] = "";
	$fieldLabelsteam["English"]["team_discription"] = "Team Discription";
	$fieldToolTipsteam["English"]["team_discription"] = "";
	$fieldLabelsteam["English"]["team_leader_id"] = "Team Leader Id";
	$fieldToolTipsteam["English"]["team_leader_id"] = "";
	$fieldLabelsteam["English"]["team_shift"] = "Team Shift";
	$fieldToolTipsteam["English"]["team_shift"] = "";
	if (count($fieldToolTipsteam["English"]))
		$tdatateam[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsteam[""] = array();
	$fieldToolTipsteam[""] = array();
	$pageTitlesteam[""] = array();
	if (count($fieldToolTipsteam[""]))
		$tdatateam[".isUseToolTips"] = true;
}
	
	
	$tdatateam[".NCSearch"] = true;



$tdatateam[".shortTableName"] = "team";
$tdatateam[".nSecOptions"] = 0;
$tdatateam[".recsPerRowList"] = 1;
$tdatateam[".recsPerRowPrint"] = 1;
$tdatateam[".mainTableOwnerID"] = "";
$tdatateam[".moveNext"] = 1;
$tdatateam[".entityType"] = 0;

$tdatateam[".strOriginalTableName"] = "team";




$tdatateam[".showAddInPopup"] = true;

$tdatateam[".showEditInPopup"] = false;

$tdatateam[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_under_2col_center";
$tdatateam[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatateam[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatateam[".listAjax"] = true;
else 
	$tdatateam[".listAjax"] = false;

	$tdatateam[".audit"] = false;

	$tdatateam[".locking"] = false;

$tdatateam[".edit"] = true;
$tdatateam[".afterEditAction"] = 1;
$tdatateam[".closePopupAfterEdit"] = 1;
$tdatateam[".afterEditActionDetTable"] = "";

$tdatateam[".add"] = true;
$tdatateam[".afterAddAction"] = 0;
$tdatateam[".closePopupAfterAdd"] = 1;
$tdatateam[".afterAddActionDetTable"] = "";

$tdatateam[".list"] = true;

$tdatateam[".inlineEdit"] = true;
$tdatateam[".view"] = true;

$tdatateam[".import"] = true;

$tdatateam[".exportTo"] = true;

$tdatateam[".printFriendly"] = true;

$tdatateam[".delete"] = true;

$tdatateam[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatateam[".searchSaving"] = false;
//

$tdatateam[".showSearchPanel"] = true;
		$tdatateam[".flexibleSearch"] = true;		

if (isMobile())
	$tdatateam[".isUseAjaxSuggest"] = false;
else 
	$tdatateam[".isUseAjaxSuggest"] = true;

$tdatateam[".rowHighlite"] = true;


																																																																																																																																															
$tdatateam[".addPageEvents"] = false;

// use timepicker for search panel
$tdatateam[".isUseTimeForSearch"] = false;




$tdatateam[".detailsLinksOnList"] = "1";

$tdatateam[".allSearchFields"] = array();
$tdatateam[".filterFields"] = array();
$tdatateam[".requiredSearchFields"] = array();

$tdatateam[".allSearchFields"][] = "ID";
	$tdatateam[".allSearchFields"][] = "team_name";
	$tdatateam[".allSearchFields"][] = "team_discription";
	$tdatateam[".allSearchFields"][] = "team_leader_id";
	$tdatateam[".allSearchFields"][] = "team_shift";
	

$tdatateam[".googleLikeFields"] = array();
$tdatateam[".googleLikeFields"][] = "ID";
$tdatateam[".googleLikeFields"][] = "team_name";
$tdatateam[".googleLikeFields"][] = "team_discription";
$tdatateam[".googleLikeFields"][] = "team_leader_id";
$tdatateam[".googleLikeFields"][] = "team_shift";


$tdatateam[".advSearchFields"] = array();
$tdatateam[".advSearchFields"][] = "ID";
$tdatateam[".advSearchFields"][] = "team_name";
$tdatateam[".advSearchFields"][] = "team_discription";
$tdatateam[".advSearchFields"][] = "team_leader_id";
$tdatateam[".advSearchFields"][] = "team_shift";

$tdatateam[".tableType"] = "list";

$tdatateam[".printerPageOrientation"] = 0;
$tdatateam[".nPrinterPageScale"] = 100;

$tdatateam[".nPrinterSplitRecords"] = 40;

$tdatateam[".nPrinterPDFSplitRecords"] = 40;



$tdatateam[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatateam[".pageSize"] = 20;

$tdatateam[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatateam[".strOrderBy"] = $tstrOrderBy;

$tdatateam[".orderindexes"] = array();

$tdatateam[".sqlHead"] = "SELECT ID,  	team_name,  	team_discription,  	team_leader_id,  	team_shift";
$tdatateam[".sqlFrom"] = "FROM team";
$tdatateam[".sqlWhereExpr"] = "";
$tdatateam[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatateam[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatateam[".arrGroupsPerPage"] = $arrGPP;

$tdatateam[".highlightSearchResults"] = true;

$tableKeysteam = array();
$tableKeysteam[] = "ID";
$tdatateam[".Keys"] = $tableKeysteam;

$tdatateam[".listFields"] = array();
$tdatateam[".listFields"][] = "ID";
$tdatateam[".listFields"][] = "team_name";
$tdatateam[".listFields"][] = "team_discription";
$tdatateam[".listFields"][] = "team_leader_id";
$tdatateam[".listFields"][] = "team_shift";

$tdatateam[".hideMobileList"] = array();


$tdatateam[".viewFields"] = array();
$tdatateam[".viewFields"][] = "ID";
$tdatateam[".viewFields"][] = "team_name";
$tdatateam[".viewFields"][] = "team_discription";
$tdatateam[".viewFields"][] = "team_leader_id";
$tdatateam[".viewFields"][] = "team_shift";

$tdatateam[".addFields"] = array();
$tdatateam[".addFields"][] = "team_name";
$tdatateam[".addFields"][] = "team_discription";
$tdatateam[".addFields"][] = "team_leader_id";
$tdatateam[".addFields"][] = "team_shift";

$tdatateam[".masterListFields"] = array();
$tdatateam[".masterListFields"][] = "ID";
$tdatateam[".masterListFields"][] = "team_name";
$tdatateam[".masterListFields"][] = "team_discription";
$tdatateam[".masterListFields"][] = "team_leader_id";
$tdatateam[".masterListFields"][] = "team_shift";

$tdatateam[".inlineAddFields"] = array();

$tdatateam[".editFields"] = array();
$tdatateam[".editFields"][] = "ID";
$tdatateam[".editFields"][] = "team_name";
$tdatateam[".editFields"][] = "team_discription";
$tdatateam[".editFields"][] = "team_leader_id";
$tdatateam[".editFields"][] = "team_shift";

$tdatateam[".inlineEditFields"] = array();
$tdatateam[".inlineEditFields"][] = "ID";
$tdatateam[".inlineEditFields"][] = "team_name";
$tdatateam[".inlineEditFields"][] = "team_discription";
$tdatateam[".inlineEditFields"][] = "team_leader_id";
$tdatateam[".inlineEditFields"][] = "team_shift";

$tdatateam[".exportFields"] = array();
$tdatateam[".exportFields"][] = "ID";
$tdatateam[".exportFields"][] = "team_name";
$tdatateam[".exportFields"][] = "team_discription";
$tdatateam[".exportFields"][] = "team_leader_id";
$tdatateam[".exportFields"][] = "team_shift";

$tdatateam[".importFields"] = array();
$tdatateam[".importFields"][] = "ID";
$tdatateam[".importFields"][] = "team_name";
$tdatateam[".importFields"][] = "team_discription";
$tdatateam[".importFields"][] = "team_leader_id";
$tdatateam[".importFields"][] = "team_shift";

$tdatateam[".printFields"] = array();
$tdatateam[".printFields"][] = "ID";
$tdatateam[".printFields"][] = "team_name";
$tdatateam[".printFields"][] = "team_discription";
$tdatateam[".printFields"][] = "team_leader_id";
$tdatateam[".printFields"][] = "team_shift";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "team";
	$fdata["Label"] = GetFieldLabel("team","ID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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
			$edata["EditParams"].= " maxlength=50";
	
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

	

	
	$tdatateam["ID"] = $fdata;
//	team_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "team_name";
	$fdata["GoodName"] = "team_name";
	$fdata["ownerTable"] = "team";
	$fdata["Label"] = GetFieldLabel("team","team_name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "team_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "team_name";
	
		
		
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

	

	
	$tdatateam["team_name"] = $fdata;
//	team_discription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "team_discription";
	$fdata["GoodName"] = "team_discription";
	$fdata["ownerTable"] = "team";
	$fdata["Label"] = GetFieldLabel("team","team_discription"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "team_discription"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "team_discription";
	
		
		
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

	

	
	$tdatateam["team_discription"] = $fdata;
//	team_leader_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "team_leader_id";
	$fdata["GoodName"] = "team_leader_id";
	$fdata["ownerTable"] = "team";
	$fdata["Label"] = GetFieldLabel("team","team_leader_id"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "team_leader_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "team_leader_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";
	
		
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
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";
	
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";
	
		
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

	

	
	$tdatateam["team_leader_id"] = $fdata;
//	team_shift
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "team_shift";
	$fdata["GoodName"] = "team_shift";
	$fdata["ownerTable"] = "team";
	$fdata["Label"] = GetFieldLabel("team","team_shift"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "team_shift"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "team_shift";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatateam["team_shift"] = $fdata;

	
$tables_data["team"]=&$tdatateam;
$field_labels["team"] = &$fieldLabelsteam;
$fieldToolTips["team"] = &$fieldToolTipsteam;
$page_titles["team"] = &$pageTitlesteam;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["team"] = array();
//	user
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="user";
		$detailsParam["dOriginalTable"] = "user";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "user";
	$detailsParam["dCaptionTable"] = GetTableCaption("user");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = true;
			$detailsParam["previewOnList"] = "2";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["team"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["team"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["team"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["team"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["team"][$dIndex]["detailKeys"][]="team";
	
// tables which are master tables for current table (detail)
$masterTablesData["team"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_team()
{
$proto1=array();
$proto1["m_strHead"] = "SELECT";
$proto1["m_strFieldList"] = "ID,  	team_name,  	team_discription,  	team_leader_id,  	team_shift";
$proto1["m_strFrom"] = "FROM team";
$proto1["m_strWhere"] = "";
$proto1["m_strOrderBy"] = "";
$proto1["m_strTail"] = "";
			$proto1["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto1["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto1["m_having"] = $obj;
$proto1["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "team",
	"m_srcTableName" => "team"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "team";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto1["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "team_name",
	"m_strTable" => "team",
	"m_srcTableName" => "team"
));

$proto8["m_sql"] = "team_name";
$proto8["m_srcTableName"] = "team";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto1["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "team_discription",
	"m_strTable" => "team",
	"m_srcTableName" => "team"
));

$proto10["m_sql"] = "team_discription";
$proto10["m_srcTableName"] = "team";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto1["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "team_leader_id",
	"m_strTable" => "team",
	"m_srcTableName" => "team"
));

$proto12["m_sql"] = "team_leader_id";
$proto12["m_srcTableName"] = "team";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto1["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "team_shift",
	"m_strTable" => "team",
	"m_srcTableName" => "team"
));

$proto14["m_sql"] = "team_shift";
$proto14["m_srcTableName"] = "team";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto1["m_fieldlist"][]=$obj;
$proto1["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "team";
$proto17["m_srcTableName"] = "team";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ID";
$proto17["m_columns"][] = "team_name";
$proto17["m_columns"][] = "team_discription";
$proto17["m_columns"][] = "team_leader_id";
$proto17["m_columns"][] = "team_shift";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "team";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "team";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto1["m_fromlist"][]=$obj;
$proto1["m_groupby"] = array();
$proto1["m_orderby"] = array();
$proto1["m_srcTableName"]="team";		
$obj = new SQLQuery($proto1);

	return $obj;
}
$queryData_team = createSqlQuery_team();


	
					
	
$tdatateam[".sqlquery"] = $queryData_team;

$tableEvents["team"] = new eventsBase;
$tdatateam[".hasEvents"] = false;

?>