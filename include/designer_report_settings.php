<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadesigner_report = array();	
	$tdatadesigner_report[".truncateText"] = true;
	$tdatadesigner_report[".NumberOfChars"] = 80; 
	$tdatadesigner_report[".ShortName"] = "designer_report";
	$tdatadesigner_report[".OwnerID"] = "";
	$tdatadesigner_report[".OriginalTable"] = "designer_report";

//	field labels
$fieldLabelsdesigner_report = array();
$fieldToolTipsdesigner_report = array();
$pageTitlesdesigner_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdesigner_report["English"] = array();
	$fieldToolTipsdesigner_report["English"] = array();
	$pageTitlesdesigner_report["English"] = array();
	$fieldLabelsdesigner_report["English"]["report_id"] = "Report Id";
	$fieldToolTipsdesigner_report["English"]["report_id"] = "";
	$fieldLabelsdesigner_report["English"]["report_reference"] = "Report Reference";
	$fieldToolTipsdesigner_report["English"]["report_reference"] = "";
	$fieldLabelsdesigner_report["English"]["work_date"] = "Work Date";
	$fieldToolTipsdesigner_report["English"]["work_date"] = "";
	$fieldLabelsdesigner_report["English"]["designer_name"] = "Designer Name";
	$fieldToolTipsdesigner_report["English"]["designer_name"] = "";
	$fieldLabelsdesigner_report["English"]["pdf_name"] = "Pdf Name";
	$fieldToolTipsdesigner_report["English"]["pdf_name"] = "";
	$fieldLabelsdesigner_report["English"]["estimated_time"] = "Estimated Time";
	$fieldToolTipsdesigner_report["English"]["estimated_time"] = "";
	$fieldLabelsdesigner_report["English"]["designer_time"] = "Designer Time";
	$fieldToolTipsdesigner_report["English"]["designer_time"] = "";
	$fieldLabelsdesigner_report["English"]["efficiency"] = "Efficiency";
	$fieldToolTipsdesigner_report["English"]["efficiency"] = "";
	$fieldLabelsdesigner_report["English"]["total_images_counted"] = "Total Images Counted";
	$fieldToolTipsdesigner_report["English"]["total_images_counted"] = "";
	$fieldLabelsdesigner_report["English"]["comments"] = "Comments";
	$fieldToolTipsdesigner_report["English"]["comments"] = "";
	$fieldLabelsdesigner_report["English"]["work_type"] = "Work Type";
	$fieldToolTipsdesigner_report["English"]["work_type"] = "";
	$fieldLabelsdesigner_report["English"]["team_id"] = "Team Id";
	$fieldToolTipsdesigner_report["English"]["team_id"] = "";
	$fieldLabelsdesigner_report["English"]["subdiv_id"] = "Subdiv Id";
	$fieldToolTipsdesigner_report["English"]["subdiv_id"] = "";
	$fieldLabelsdesigner_report["English"]["user_group"] = "User Group";
	$fieldToolTipsdesigner_report["English"]["user_group"] = "";
	$fieldLabelsdesigner_report["English"]["qc_time"] = "Qc Time";
	$fieldToolTipsdesigner_report["English"]["qc_time"] = "";
	if (count($fieldToolTipsdesigner_report["English"]))
		$tdatadesigner_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdesigner_report[""] = array();
	$fieldToolTipsdesigner_report[""] = array();
	$pageTitlesdesigner_report[""] = array();
	if (count($fieldToolTipsdesigner_report[""]))
		$tdatadesigner_report[".isUseToolTips"] = true;
}
	
	
	$tdatadesigner_report[".NCSearch"] = true;



$tdatadesigner_report[".shortTableName"] = "designer_report";
$tdatadesigner_report[".nSecOptions"] = 0;
$tdatadesigner_report[".recsPerRowList"] = 1;
$tdatadesigner_report[".recsPerRowPrint"] = 1;
$tdatadesigner_report[".mainTableOwnerID"] = "";
$tdatadesigner_report[".moveNext"] = 1;
$tdatadesigner_report[".entityType"] = 0;

$tdatadesigner_report[".strOriginalTableName"] = "designer_report";




$tdatadesigner_report[".showAddInPopup"] = false;

$tdatadesigner_report[".showEditInPopup"] = false;

$tdatadesigner_report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadesigner_report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadesigner_report[".fieldsForRegister"] = array();

$tdatadesigner_report[".listAjax"] = false;

	$tdatadesigner_report[".audit"] = false;

	$tdatadesigner_report[".locking"] = false;

$tdatadesigner_report[".edit"] = true;
$tdatadesigner_report[".afterEditAction"] = 1;
$tdatadesigner_report[".closePopupAfterEdit"] = 1;
$tdatadesigner_report[".afterEditActionDetTable"] = "";

$tdatadesigner_report[".add"] = true;
$tdatadesigner_report[".afterAddAction"] = 0;
$tdatadesigner_report[".closePopupAfterAdd"] = 1;
$tdatadesigner_report[".afterAddActionDetTable"] = "";

$tdatadesigner_report[".list"] = true;

$tdatadesigner_report[".inlineEdit"] = true;
$tdatadesigner_report[".inlineAdd"] = true;
$tdatadesigner_report[".view"] = true;

$tdatadesigner_report[".import"] = true;

$tdatadesigner_report[".exportTo"] = true;

$tdatadesigner_report[".printFriendly"] = true;

$tdatadesigner_report[".delete"] = true;

$tdatadesigner_report[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatadesigner_report[".searchSaving"] = false;
//

$tdatadesigner_report[".showSearchPanel"] = true;
		$tdatadesigner_report[".flexibleSearch"] = true;		

if (isMobile())
	$tdatadesigner_report[".isUseAjaxSuggest"] = false;
else 
	$tdatadesigner_report[".isUseAjaxSuggest"] = true;

$tdatadesigner_report[".rowHighlite"] = true;


																																																																																																																																															
$tdatadesigner_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadesigner_report[".isUseTimeForSearch"] = false;





$tdatadesigner_report[".allSearchFields"] = array();
$tdatadesigner_report[".filterFields"] = array();
$tdatadesigner_report[".requiredSearchFields"] = array();

$tdatadesigner_report[".allSearchFields"][] = "report_id";
	$tdatadesigner_report[".allSearchFields"][] = "report_reference";
	$tdatadesigner_report[".allSearchFields"][] = "work_date";
	$tdatadesigner_report[".allSearchFields"][] = "designer_name";
	$tdatadesigner_report[".allSearchFields"][] = "team_id";
	$tdatadesigner_report[".allSearchFields"][] = "subdiv_id";
	$tdatadesigner_report[".allSearchFields"][] = "user_group";
	$tdatadesigner_report[".allSearchFields"][] = "pdf_name";
	$tdatadesigner_report[".allSearchFields"][] = "estimated_time";
	$tdatadesigner_report[".allSearchFields"][] = "designer_time";
	$tdatadesigner_report[".allSearchFields"][] = "qc_time";
	$tdatadesigner_report[".allSearchFields"][] = "efficiency";
	$tdatadesigner_report[".allSearchFields"][] = "total_images_counted";
	$tdatadesigner_report[".allSearchFields"][] = "comments";
	$tdatadesigner_report[".allSearchFields"][] = "work_type";
	

$tdatadesigner_report[".googleLikeFields"] = array();
$tdatadesigner_report[".googleLikeFields"][] = "report_id";
$tdatadesigner_report[".googleLikeFields"][] = "report_reference";
$tdatadesigner_report[".googleLikeFields"][] = "work_date";
$tdatadesigner_report[".googleLikeFields"][] = "designer_name";
$tdatadesigner_report[".googleLikeFields"][] = "team_id";
$tdatadesigner_report[".googleLikeFields"][] = "subdiv_id";
$tdatadesigner_report[".googleLikeFields"][] = "user_group";
$tdatadesigner_report[".googleLikeFields"][] = "pdf_name";
$tdatadesigner_report[".googleLikeFields"][] = "estimated_time";
$tdatadesigner_report[".googleLikeFields"][] = "designer_time";
$tdatadesigner_report[".googleLikeFields"][] = "qc_time";
$tdatadesigner_report[".googleLikeFields"][] = "efficiency";
$tdatadesigner_report[".googleLikeFields"][] = "total_images_counted";
$tdatadesigner_report[".googleLikeFields"][] = "comments";
$tdatadesigner_report[".googleLikeFields"][] = "work_type";


$tdatadesigner_report[".advSearchFields"] = array();
$tdatadesigner_report[".advSearchFields"][] = "report_id";
$tdatadesigner_report[".advSearchFields"][] = "report_reference";
$tdatadesigner_report[".advSearchFields"][] = "work_date";
$tdatadesigner_report[".advSearchFields"][] = "designer_name";
$tdatadesigner_report[".advSearchFields"][] = "team_id";
$tdatadesigner_report[".advSearchFields"][] = "subdiv_id";
$tdatadesigner_report[".advSearchFields"][] = "user_group";
$tdatadesigner_report[".advSearchFields"][] = "pdf_name";
$tdatadesigner_report[".advSearchFields"][] = "estimated_time";
$tdatadesigner_report[".advSearchFields"][] = "designer_time";
$tdatadesigner_report[".advSearchFields"][] = "qc_time";
$tdatadesigner_report[".advSearchFields"][] = "efficiency";
$tdatadesigner_report[".advSearchFields"][] = "total_images_counted";
$tdatadesigner_report[".advSearchFields"][] = "comments";
$tdatadesigner_report[".advSearchFields"][] = "work_type";

$tdatadesigner_report[".tableType"] = "list";

$tdatadesigner_report[".printerPageOrientation"] = 0;
$tdatadesigner_report[".nPrinterPageScale"] = 100;

$tdatadesigner_report[".nPrinterSplitRecords"] = 40;

$tdatadesigner_report[".nPrinterPDFSplitRecords"] = 40;



$tdatadesigner_report[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatadesigner_report[".pageSize"] = 20;

$tdatadesigner_report[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadesigner_report[".strOrderBy"] = $tstrOrderBy;

$tdatadesigner_report[".orderindexes"] = array();

$tdatadesigner_report[".sqlHead"] = "SELECT report_id,  	report_reference,  	work_date,  	designer_name,  	team_id,  	subdiv_id,  	user_group,  	pdf_name,  	estimated_time,  	designer_time,  	qc_time,  	efficiency,  	total_images_counted,  	comments,  	work_type";
$tdatadesigner_report[".sqlFrom"] = "FROM designer_report";
$tdatadesigner_report[".sqlWhereExpr"] = "";
$tdatadesigner_report[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadesigner_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadesigner_report[".arrGroupsPerPage"] = $arrGPP;

$tdatadesigner_report[".highlightSearchResults"] = true;

$tableKeysdesigner_report = array();
$tableKeysdesigner_report[] = "report_id";
$tdatadesigner_report[".Keys"] = $tableKeysdesigner_report;

$tdatadesigner_report[".listFields"] = array();
$tdatadesigner_report[".listFields"][] = "report_id";
$tdatadesigner_report[".listFields"][] = "report_reference";
$tdatadesigner_report[".listFields"][] = "work_date";
$tdatadesigner_report[".listFields"][] = "designer_name";
$tdatadesigner_report[".listFields"][] = "team_id";
$tdatadesigner_report[".listFields"][] = "subdiv_id";
$tdatadesigner_report[".listFields"][] = "user_group";
$tdatadesigner_report[".listFields"][] = "pdf_name";
$tdatadesigner_report[".listFields"][] = "estimated_time";
$tdatadesigner_report[".listFields"][] = "designer_time";
$tdatadesigner_report[".listFields"][] = "qc_time";
$tdatadesigner_report[".listFields"][] = "efficiency";
$tdatadesigner_report[".listFields"][] = "total_images_counted";
$tdatadesigner_report[".listFields"][] = "comments";
$tdatadesigner_report[".listFields"][] = "work_type";

$tdatadesigner_report[".hideMobileList"] = array();


$tdatadesigner_report[".viewFields"] = array();
$tdatadesigner_report[".viewFields"][] = "report_id";
$tdatadesigner_report[".viewFields"][] = "report_reference";
$tdatadesigner_report[".viewFields"][] = "work_date";
$tdatadesigner_report[".viewFields"][] = "designer_name";
$tdatadesigner_report[".viewFields"][] = "team_id";
$tdatadesigner_report[".viewFields"][] = "subdiv_id";
$tdatadesigner_report[".viewFields"][] = "user_group";
$tdatadesigner_report[".viewFields"][] = "pdf_name";
$tdatadesigner_report[".viewFields"][] = "estimated_time";
$tdatadesigner_report[".viewFields"][] = "designer_time";
$tdatadesigner_report[".viewFields"][] = "qc_time";
$tdatadesigner_report[".viewFields"][] = "efficiency";
$tdatadesigner_report[".viewFields"][] = "total_images_counted";
$tdatadesigner_report[".viewFields"][] = "comments";
$tdatadesigner_report[".viewFields"][] = "work_type";

$tdatadesigner_report[".addFields"] = array();
$tdatadesigner_report[".addFields"][] = "report_reference";
$tdatadesigner_report[".addFields"][] = "work_date";
$tdatadesigner_report[".addFields"][] = "designer_name";
$tdatadesigner_report[".addFields"][] = "team_id";
$tdatadesigner_report[".addFields"][] = "subdiv_id";
$tdatadesigner_report[".addFields"][] = "user_group";
$tdatadesigner_report[".addFields"][] = "pdf_name";
$tdatadesigner_report[".addFields"][] = "estimated_time";
$tdatadesigner_report[".addFields"][] = "designer_time";
$tdatadesigner_report[".addFields"][] = "qc_time";
$tdatadesigner_report[".addFields"][] = "efficiency";
$tdatadesigner_report[".addFields"][] = "total_images_counted";
$tdatadesigner_report[".addFields"][] = "comments";
$tdatadesigner_report[".addFields"][] = "work_type";

$tdatadesigner_report[".masterListFields"] = array();
$tdatadesigner_report[".masterListFields"][] = "report_id";
$tdatadesigner_report[".masterListFields"][] = "report_reference";
$tdatadesigner_report[".masterListFields"][] = "work_date";
$tdatadesigner_report[".masterListFields"][] = "designer_name";
$tdatadesigner_report[".masterListFields"][] = "team_id";
$tdatadesigner_report[".masterListFields"][] = "subdiv_id";
$tdatadesigner_report[".masterListFields"][] = "user_group";
$tdatadesigner_report[".masterListFields"][] = "pdf_name";
$tdatadesigner_report[".masterListFields"][] = "estimated_time";
$tdatadesigner_report[".masterListFields"][] = "designer_time";
$tdatadesigner_report[".masterListFields"][] = "qc_time";
$tdatadesigner_report[".masterListFields"][] = "efficiency";
$tdatadesigner_report[".masterListFields"][] = "total_images_counted";
$tdatadesigner_report[".masterListFields"][] = "comments";
$tdatadesigner_report[".masterListFields"][] = "work_type";

$tdatadesigner_report[".inlineAddFields"] = array();
$tdatadesigner_report[".inlineAddFields"][] = "report_reference";
$tdatadesigner_report[".inlineAddFields"][] = "work_date";
$tdatadesigner_report[".inlineAddFields"][] = "designer_name";
$tdatadesigner_report[".inlineAddFields"][] = "team_id";
$tdatadesigner_report[".inlineAddFields"][] = "subdiv_id";
$tdatadesigner_report[".inlineAddFields"][] = "user_group";
$tdatadesigner_report[".inlineAddFields"][] = "pdf_name";
$tdatadesigner_report[".inlineAddFields"][] = "estimated_time";
$tdatadesigner_report[".inlineAddFields"][] = "designer_time";
$tdatadesigner_report[".inlineAddFields"][] = "qc_time";
$tdatadesigner_report[".inlineAddFields"][] = "efficiency";
$tdatadesigner_report[".inlineAddFields"][] = "total_images_counted";
$tdatadesigner_report[".inlineAddFields"][] = "comments";
$tdatadesigner_report[".inlineAddFields"][] = "work_type";

$tdatadesigner_report[".editFields"] = array();
$tdatadesigner_report[".editFields"][] = "report_reference";
$tdatadesigner_report[".editFields"][] = "work_date";
$tdatadesigner_report[".editFields"][] = "designer_name";
$tdatadesigner_report[".editFields"][] = "team_id";
$tdatadesigner_report[".editFields"][] = "subdiv_id";
$tdatadesigner_report[".editFields"][] = "user_group";
$tdatadesigner_report[".editFields"][] = "pdf_name";
$tdatadesigner_report[".editFields"][] = "estimated_time";
$tdatadesigner_report[".editFields"][] = "designer_time";
$tdatadesigner_report[".editFields"][] = "qc_time";
$tdatadesigner_report[".editFields"][] = "efficiency";
$tdatadesigner_report[".editFields"][] = "total_images_counted";
$tdatadesigner_report[".editFields"][] = "comments";
$tdatadesigner_report[".editFields"][] = "work_type";

$tdatadesigner_report[".inlineEditFields"] = array();
$tdatadesigner_report[".inlineEditFields"][] = "report_reference";
$tdatadesigner_report[".inlineEditFields"][] = "work_date";
$tdatadesigner_report[".inlineEditFields"][] = "designer_name";
$tdatadesigner_report[".inlineEditFields"][] = "team_id";
$tdatadesigner_report[".inlineEditFields"][] = "subdiv_id";
$tdatadesigner_report[".inlineEditFields"][] = "user_group";
$tdatadesigner_report[".inlineEditFields"][] = "pdf_name";
$tdatadesigner_report[".inlineEditFields"][] = "estimated_time";
$tdatadesigner_report[".inlineEditFields"][] = "designer_time";
$tdatadesigner_report[".inlineEditFields"][] = "qc_time";
$tdatadesigner_report[".inlineEditFields"][] = "efficiency";
$tdatadesigner_report[".inlineEditFields"][] = "total_images_counted";
$tdatadesigner_report[".inlineEditFields"][] = "comments";
$tdatadesigner_report[".inlineEditFields"][] = "work_type";

$tdatadesigner_report[".exportFields"] = array();
$tdatadesigner_report[".exportFields"][] = "report_id";
$tdatadesigner_report[".exportFields"][] = "report_reference";
$tdatadesigner_report[".exportFields"][] = "work_date";
$tdatadesigner_report[".exportFields"][] = "designer_name";
$tdatadesigner_report[".exportFields"][] = "team_id";
$tdatadesigner_report[".exportFields"][] = "subdiv_id";
$tdatadesigner_report[".exportFields"][] = "user_group";
$tdatadesigner_report[".exportFields"][] = "pdf_name";
$tdatadesigner_report[".exportFields"][] = "estimated_time";
$tdatadesigner_report[".exportFields"][] = "designer_time";
$tdatadesigner_report[".exportFields"][] = "qc_time";
$tdatadesigner_report[".exportFields"][] = "efficiency";
$tdatadesigner_report[".exportFields"][] = "total_images_counted";
$tdatadesigner_report[".exportFields"][] = "comments";
$tdatadesigner_report[".exportFields"][] = "work_type";

$tdatadesigner_report[".importFields"] = array();
$tdatadesigner_report[".importFields"][] = "report_id";
$tdatadesigner_report[".importFields"][] = "report_reference";
$tdatadesigner_report[".importFields"][] = "work_date";
$tdatadesigner_report[".importFields"][] = "designer_name";
$tdatadesigner_report[".importFields"][] = "team_id";
$tdatadesigner_report[".importFields"][] = "subdiv_id";
$tdatadesigner_report[".importFields"][] = "user_group";
$tdatadesigner_report[".importFields"][] = "pdf_name";
$tdatadesigner_report[".importFields"][] = "estimated_time";
$tdatadesigner_report[".importFields"][] = "designer_time";
$tdatadesigner_report[".importFields"][] = "qc_time";
$tdatadesigner_report[".importFields"][] = "efficiency";
$tdatadesigner_report[".importFields"][] = "total_images_counted";
$tdatadesigner_report[".importFields"][] = "comments";
$tdatadesigner_report[".importFields"][] = "work_type";

$tdatadesigner_report[".printFields"] = array();
$tdatadesigner_report[".printFields"][] = "report_id";
$tdatadesigner_report[".printFields"][] = "report_reference";
$tdatadesigner_report[".printFields"][] = "work_date";
$tdatadesigner_report[".printFields"][] = "designer_name";
$tdatadesigner_report[".printFields"][] = "team_id";
$tdatadesigner_report[".printFields"][] = "subdiv_id";
$tdatadesigner_report[".printFields"][] = "user_group";
$tdatadesigner_report[".printFields"][] = "pdf_name";
$tdatadesigner_report[".printFields"][] = "estimated_time";
$tdatadesigner_report[".printFields"][] = "designer_time";
$tdatadesigner_report[".printFields"][] = "qc_time";
$tdatadesigner_report[".printFields"][] = "efficiency";
$tdatadesigner_report[".printFields"][] = "total_images_counted";
$tdatadesigner_report[".printFields"][] = "comments";
$tdatadesigner_report[".printFields"][] = "work_type";

//	report_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "report_id";
	$fdata["GoodName"] = "report_id";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("designer_report","report_id"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "report_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "report_id";
	
		
		
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
			$edata["EditParams"].= " maxlength=25";
	
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdatadesigner_report["report_id"] = $fdata;
//	report_reference
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "report_reference";
	$fdata["GoodName"] = "report_reference";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("designer_report","report_reference"); 
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
	
		$fdata["strField"] = "report_reference"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "report_reference";
	
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdatadesigner_report["report_reference"] = $fdata;
//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("designer_report","work_date"); 
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
	
		$fdata["strField"] = "work_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "work_date";
	
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdatadesigner_report["work_date"] = $fdata;
//	designer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "designer_name";
	$fdata["GoodName"] = "designer_name";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("designer_report","designer_name"); 
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
	
		$fdata["strField"] = "designer_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designer_name";
	
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdatadesigner_report["designer_name"] = $fdata;
//	team_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "team_id";
	$fdata["GoodName"] = "team_id";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("designer_report","team_id"); 
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
	
		$fdata["strField"] = "team_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "team_id";
	
		
		
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
			$edata["EditParams"].= " maxlength=3";
	
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

	

	
	$tdatadesigner_report["team_id"] = $fdata;
//	subdiv_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "subdiv_id";
	$fdata["GoodName"] = "subdiv_id";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("designer_report","subdiv_id"); 
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

	

	
	$tdatadesigner_report["subdiv_id"] = $fdata;
//	user_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "user_group";
	$fdata["GoodName"] = "user_group";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("designer_report","user_group"); 
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
	
		$fdata["strField"] = "user_group"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_group";
	
		
		
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

	

	
	$tdatadesigner_report["user_group"] = $fdata;
//	pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "pdf_name";
	$fdata["GoodName"] = "pdf_name";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("designer_report","pdf_name"); 
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
	
		$fdata["strField"] = "pdf_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf_name";
	
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdatadesigner_report["pdf_name"] = $fdata;
//	estimated_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "estimated_time";
	$fdata["GoodName"] = "estimated_time";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("designer_report","estimated_time"); 
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
	
		$fdata["strField"] = "estimated_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estimated_time";
	
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdatadesigner_report["estimated_time"] = $fdata;
//	designer_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "designer_time";
	$fdata["GoodName"] = "designer_time";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("designer_report","designer_time"); 
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
	
		$fdata["strField"] = "designer_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designer_time";
	
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdatadesigner_report["designer_time"] = $fdata;
//	qc_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "qc_time";
	$fdata["GoodName"] = "qc_time";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("designer_report","qc_time"); 
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
	
		$fdata["strField"] = "qc_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qc_time";
	
		
		
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

	

	
	$tdatadesigner_report["qc_time"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("designer_report","efficiency"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "efficiency"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "efficiency";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdatadesigner_report["efficiency"] = $fdata;
//	total_images_counted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "total_images_counted";
	$fdata["GoodName"] = "total_images_counted";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("designer_report","total_images_counted"); 
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
	
		$fdata["strField"] = "total_images_counted"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_images_counted";
	
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdatadesigner_report["total_images_counted"] = $fdata;
//	comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "comments";
	$fdata["GoodName"] = "comments";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("designer_report","comments"); 
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
	
		$fdata["strField"] = "comments"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comments";
	
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdatadesigner_report["comments"] = $fdata;
//	work_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "work_type";
	$fdata["GoodName"] = "work_type";
	$fdata["ownerTable"] = "designer_report";
	$fdata["Label"] = GetFieldLabel("designer_report","work_type"); 
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
	
		$fdata["strField"] = "work_type"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "work_type";
	
		
		
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

	

	
	$tdatadesigner_report["work_type"] = $fdata;

	
$tables_data["designer_report"]=&$tdatadesigner_report;
$field_labels["designer_report"] = &$fieldLabelsdesigner_report;
$fieldToolTips["designer_report"] = &$fieldToolTipsdesigner_report;
$page_titles["designer_report"] = &$pageTitlesdesigner_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["designer_report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["designer_report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_designer_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "report_id,  	report_reference,  	work_date,  	designer_name,  	team_id,  	subdiv_id,  	user_group,  	pdf_name,  	estimated_time,  	designer_time,  	qc_time,  	efficiency,  	total_images_counted,  	comments,  	work_type";
$proto0["m_strFrom"] = "FROM designer_report";
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
	"m_strName" => "report_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "designer_report"
));

$proto5["m_sql"] = "report_id";
$proto5["m_srcTableName"] = "designer_report";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "report_reference",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "designer_report"
));

$proto7["m_sql"] = "report_reference";
$proto7["m_srcTableName"] = "designer_report";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "work_date",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "designer_report"
));

$proto9["m_sql"] = "work_date";
$proto9["m_srcTableName"] = "designer_report";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "designer_report"
));

$proto11["m_sql"] = "designer_name";
$proto11["m_srcTableName"] = "designer_report";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "team_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "designer_report"
));

$proto13["m_sql"] = "team_id";
$proto13["m_srcTableName"] = "designer_report";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "subdiv_id",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "designer_report"
));

$proto15["m_sql"] = "subdiv_id";
$proto15["m_srcTableName"] = "designer_report";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "user_group",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "designer_report"
));

$proto17["m_sql"] = "user_group";
$proto17["m_srcTableName"] = "designer_report";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "designer_report"
));

$proto19["m_sql"] = "pdf_name";
$proto19["m_srcTableName"] = "designer_report";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "estimated_time",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "designer_report"
));

$proto21["m_sql"] = "estimated_time";
$proto21["m_srcTableName"] = "designer_report";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_time",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "designer_report"
));

$proto23["m_sql"] = "designer_time";
$proto23["m_srcTableName"] = "designer_report";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "qc_time",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "designer_report"
));

$proto25["m_sql"] = "qc_time";
$proto25["m_srcTableName"] = "designer_report";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "efficiency",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "designer_report"
));

$proto27["m_sql"] = "efficiency";
$proto27["m_srcTableName"] = "designer_report";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "total_images_counted",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "designer_report"
));

$proto29["m_sql"] = "total_images_counted";
$proto29["m_srcTableName"] = "designer_report";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "comments",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "designer_report"
));

$proto31["m_sql"] = "comments";
$proto31["m_srcTableName"] = "designer_report";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "work_type",
	"m_strTable" => "designer_report",
	"m_srcTableName" => "designer_report"
));

$proto33["m_sql"] = "work_type";
$proto33["m_srcTableName"] = "designer_report";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "designer_report";
$proto36["m_srcTableName"] = "designer_report";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "report_id";
$proto36["m_columns"][] = "report_reference";
$proto36["m_columns"][] = "work_date";
$proto36["m_columns"][] = "designer_name";
$proto36["m_columns"][] = "team_id";
$proto36["m_columns"][] = "subdiv_id";
$proto36["m_columns"][] = "user_group";
$proto36["m_columns"][] = "pdf_name";
$proto36["m_columns"][] = "estimated_time";
$proto36["m_columns"][] = "designer_time";
$proto36["m_columns"][] = "qc_time";
$proto36["m_columns"][] = "efficiency";
$proto36["m_columns"][] = "total_images_counted";
$proto36["m_columns"][] = "comments";
$proto36["m_columns"][] = "work_type";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "designer_report";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "designer_report";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="designer_report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_designer_report = createSqlQuery_designer_report();


	
															
	
$tdatadesigner_report[".sqlquery"] = $queryData_designer_report;

$tableEvents["designer_report"] = new eventsBase;
$tdatadesigner_report[".hasEvents"] = false;

?>