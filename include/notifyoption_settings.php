<?php
require_once(getabspath("classes/cipherer.php"));




$tdatanotifyoption = array();	
	$tdatanotifyoption[".truncateText"] = true;
	$tdatanotifyoption[".NumberOfChars"] = 80; 
	$tdatanotifyoption[".ShortName"] = "notifyoption";
	$tdatanotifyoption[".OwnerID"] = "";
	$tdatanotifyoption[".OriginalTable"] = "notifyoption";

//	field labels
$fieldLabelsnotifyoption = array();
$fieldToolTipsnotifyoption = array();
$pageTitlesnotifyoption = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnotifyoption["English"] = array();
	$fieldToolTipsnotifyoption["English"] = array();
	$pageTitlesnotifyoption["English"] = array();
	$fieldLabelsnotifyoption["English"]["notify_option_id"] = "Notify Option Id";
	$fieldToolTipsnotifyoption["English"]["notify_option_id"] = "";
	$fieldLabelsnotifyoption["English"]["notify_option"] = "Notify Option";
	$fieldToolTipsnotifyoption["English"]["notify_option"] = "";
	$fieldLabelsnotifyoption["English"]["notify_detail"] = "Notify Detail";
	$fieldToolTipsnotifyoption["English"]["notify_detail"] = "";
	$fieldLabelsnotifyoption["English"]["notify_comments"] = "Notify Comments";
	$fieldToolTipsnotifyoption["English"]["notify_comments"] = "";
	if (count($fieldToolTipsnotifyoption["English"]))
		$tdatanotifyoption[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsnotifyoption[""] = array();
	$fieldToolTipsnotifyoption[""] = array();
	$pageTitlesnotifyoption[""] = array();
	if (count($fieldToolTipsnotifyoption[""]))
		$tdatanotifyoption[".isUseToolTips"] = true;
}
	
	
	$tdatanotifyoption[".NCSearch"] = true;



$tdatanotifyoption[".shortTableName"] = "notifyoption";
$tdatanotifyoption[".nSecOptions"] = 0;
$tdatanotifyoption[".recsPerRowList"] = 1;
$tdatanotifyoption[".recsPerRowPrint"] = 1;
$tdatanotifyoption[".mainTableOwnerID"] = "";
$tdatanotifyoption[".moveNext"] = 1;
$tdatanotifyoption[".entityType"] = 0;

$tdatanotifyoption[".strOriginalTableName"] = "notifyoption";




$tdatanotifyoption[".showAddInPopup"] = false;

$tdatanotifyoption[".showEditInPopup"] = false;

$tdatanotifyoption[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanotifyoption[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanotifyoption[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatanotifyoption[".listAjax"] = true;
else 
	$tdatanotifyoption[".listAjax"] = false;

	$tdatanotifyoption[".audit"] = false;

	$tdatanotifyoption[".locking"] = false;

$tdatanotifyoption[".edit"] = true;
$tdatanotifyoption[".afterEditAction"] = 1;
$tdatanotifyoption[".closePopupAfterEdit"] = 1;
$tdatanotifyoption[".afterEditActionDetTable"] = "";

$tdatanotifyoption[".add"] = true;
$tdatanotifyoption[".afterAddAction"] = 0;
$tdatanotifyoption[".closePopupAfterAdd"] = 1;
$tdatanotifyoption[".afterAddActionDetTable"] = "";

$tdatanotifyoption[".list"] = true;

$tdatanotifyoption[".view"] = true;

$tdatanotifyoption[".import"] = true;

$tdatanotifyoption[".exportTo"] = true;

$tdatanotifyoption[".printFriendly"] = true;

$tdatanotifyoption[".delete"] = true;

$tdatanotifyoption[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatanotifyoption[".searchSaving"] = false;
//

$tdatanotifyoption[".showSearchPanel"] = true;
		$tdatanotifyoption[".flexibleSearch"] = true;		

if (isMobile())
	$tdatanotifyoption[".isUseAjaxSuggest"] = false;
else 
	$tdatanotifyoption[".isUseAjaxSuggest"] = true;

$tdatanotifyoption[".rowHighlite"] = true;


																																																																																																																																															
$tdatanotifyoption[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanotifyoption[".isUseTimeForSearch"] = false;




$tdatanotifyoption[".detailsLinksOnList"] = "1";

$tdatanotifyoption[".allSearchFields"] = array();
$tdatanotifyoption[".filterFields"] = array();
$tdatanotifyoption[".requiredSearchFields"] = array();

$tdatanotifyoption[".allSearchFields"][] = "notify_option_id";
	$tdatanotifyoption[".allSearchFields"][] = "notify_option";
	$tdatanotifyoption[".allSearchFields"][] = "notify_detail";
	$tdatanotifyoption[".allSearchFields"][] = "notify_comments";
	

$tdatanotifyoption[".googleLikeFields"] = array();
$tdatanotifyoption[".googleLikeFields"][] = "notify_option_id";
$tdatanotifyoption[".googleLikeFields"][] = "notify_option";
$tdatanotifyoption[".googleLikeFields"][] = "notify_detail";
$tdatanotifyoption[".googleLikeFields"][] = "notify_comments";


$tdatanotifyoption[".advSearchFields"] = array();
$tdatanotifyoption[".advSearchFields"][] = "notify_option_id";
$tdatanotifyoption[".advSearchFields"][] = "notify_option";
$tdatanotifyoption[".advSearchFields"][] = "notify_detail";
$tdatanotifyoption[".advSearchFields"][] = "notify_comments";

$tdatanotifyoption[".tableType"] = "list";

$tdatanotifyoption[".printerPageOrientation"] = 0;
$tdatanotifyoption[".nPrinterPageScale"] = 100;

$tdatanotifyoption[".nPrinterSplitRecords"] = 40;

$tdatanotifyoption[".nPrinterPDFSplitRecords"] = 40;



$tdatanotifyoption[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatanotifyoption[".pageSize"] = 20;

$tdatanotifyoption[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanotifyoption[".strOrderBy"] = $tstrOrderBy;

$tdatanotifyoption[".orderindexes"] = array();

$tdatanotifyoption[".sqlHead"] = "SELECT notify_option_id,  	notify_option,  	notify_detail,  	notify_comments";
$tdatanotifyoption[".sqlFrom"] = "FROM notifyoption";
$tdatanotifyoption[".sqlWhereExpr"] = "";
$tdatanotifyoption[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanotifyoption[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanotifyoption[".arrGroupsPerPage"] = $arrGPP;

$tdatanotifyoption[".highlightSearchResults"] = true;

$tableKeysnotifyoption = array();
$tableKeysnotifyoption[] = "notify_option_id";
$tdatanotifyoption[".Keys"] = $tableKeysnotifyoption;

$tdatanotifyoption[".listFields"] = array();
$tdatanotifyoption[".listFields"][] = "notify_option_id";
$tdatanotifyoption[".listFields"][] = "notify_option";
$tdatanotifyoption[".listFields"][] = "notify_detail";
$tdatanotifyoption[".listFields"][] = "notify_comments";

$tdatanotifyoption[".hideMobileList"] = array();


$tdatanotifyoption[".viewFields"] = array();
$tdatanotifyoption[".viewFields"][] = "notify_option_id";
$tdatanotifyoption[".viewFields"][] = "notify_option";
$tdatanotifyoption[".viewFields"][] = "notify_detail";
$tdatanotifyoption[".viewFields"][] = "notify_comments";

$tdatanotifyoption[".addFields"] = array();
$tdatanotifyoption[".addFields"][] = "notify_option";
$tdatanotifyoption[".addFields"][] = "notify_detail";
$tdatanotifyoption[".addFields"][] = "notify_comments";

$tdatanotifyoption[".masterListFields"] = array();
$tdatanotifyoption[".masterListFields"][] = "notify_option_id";
$tdatanotifyoption[".masterListFields"][] = "notify_option";
$tdatanotifyoption[".masterListFields"][] = "notify_detail";
$tdatanotifyoption[".masterListFields"][] = "notify_comments";

$tdatanotifyoption[".inlineAddFields"] = array();
$tdatanotifyoption[".inlineAddFields"][] = "notify_option";
$tdatanotifyoption[".inlineAddFields"][] = "notify_detail";
$tdatanotifyoption[".inlineAddFields"][] = "notify_comments";

$tdatanotifyoption[".editFields"] = array();
$tdatanotifyoption[".editFields"][] = "notify_option";
$tdatanotifyoption[".editFields"][] = "notify_detail";
$tdatanotifyoption[".editFields"][] = "notify_comments";

$tdatanotifyoption[".inlineEditFields"] = array();
$tdatanotifyoption[".inlineEditFields"][] = "notify_option";
$tdatanotifyoption[".inlineEditFields"][] = "notify_detail";
$tdatanotifyoption[".inlineEditFields"][] = "notify_comments";

$tdatanotifyoption[".exportFields"] = array();
$tdatanotifyoption[".exportFields"][] = "notify_option_id";
$tdatanotifyoption[".exportFields"][] = "notify_option";
$tdatanotifyoption[".exportFields"][] = "notify_detail";
$tdatanotifyoption[".exportFields"][] = "notify_comments";

$tdatanotifyoption[".importFields"] = array();
$tdatanotifyoption[".importFields"][] = "notify_option_id";
$tdatanotifyoption[".importFields"][] = "notify_option";
$tdatanotifyoption[".importFields"][] = "notify_detail";
$tdatanotifyoption[".importFields"][] = "notify_comments";

$tdatanotifyoption[".printFields"] = array();
$tdatanotifyoption[".printFields"][] = "notify_option_id";
$tdatanotifyoption[".printFields"][] = "notify_option";
$tdatanotifyoption[".printFields"][] = "notify_detail";
$tdatanotifyoption[".printFields"][] = "notify_comments";

//	notify_option_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "notify_option_id";
	$fdata["GoodName"] = "notify_option_id";
	$fdata["ownerTable"] = "notifyoption";
	$fdata["Label"] = GetFieldLabel("notifyoption","notify_option_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "notify_option_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notify_option_id";
	
		
		
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

	

	
	$tdatanotifyoption["notify_option_id"] = $fdata;
//	notify_option
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "notify_option";
	$fdata["GoodName"] = "notify_option";
	$fdata["ownerTable"] = "notifyoption";
	$fdata["Label"] = GetFieldLabel("notifyoption","notify_option"); 
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
	
		$fdata["strField"] = "notify_option"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notify_option";
	
		
		
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

	

	
	$tdatanotifyoption["notify_option"] = $fdata;
//	notify_detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "notify_detail";
	$fdata["GoodName"] = "notify_detail";
	$fdata["ownerTable"] = "notifyoption";
	$fdata["Label"] = GetFieldLabel("notifyoption","notify_detail"); 
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
	
		$fdata["strField"] = "notify_detail"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notify_detail";
	
		
		
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

	

	
	$tdatanotifyoption["notify_detail"] = $fdata;
//	notify_comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "notify_comments";
	$fdata["GoodName"] = "notify_comments";
	$fdata["ownerTable"] = "notifyoption";
	$fdata["Label"] = GetFieldLabel("notifyoption","notify_comments"); 
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
	
		$fdata["strField"] = "notify_comments"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notify_comments";
	
		
		
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

	

	
	$tdatanotifyoption["notify_comments"] = $fdata;

	
$tables_data["notifyoption"]=&$tdatanotifyoption;
$field_labels["notifyoption"] = &$fieldLabelsnotifyoption;
$fieldToolTips["notifyoption"] = &$fieldToolTipsnotifyoption;
$page_titles["notifyoption"] = &$pageTitlesnotifyoption;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["notifyoption"] = array();
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
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
			$detailsParam["dispChildCount"] = "1";
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
				$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
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
			
	$detailsTablesData["notifyoption"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["notifyoption"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["masterKeys"][]="notify_option_id";

				$detailsTablesData["notifyoption"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["notifyoption"][$dIndex]["detailKeys"][]="notify_options";
	
// tables which are master tables for current table (detail)
$masterTablesData["notifyoption"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_notifyoption()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "notify_option_id,  	notify_option,  	notify_detail,  	notify_comments";
$proto0["m_strFrom"] = "FROM notifyoption";
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
	"m_strName" => "notify_option_id",
	"m_strTable" => "notifyoption",
	"m_srcTableName" => "notifyoption"
));

$proto5["m_sql"] = "notify_option_id";
$proto5["m_srcTableName"] = "notifyoption";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "notify_option",
	"m_strTable" => "notifyoption",
	"m_srcTableName" => "notifyoption"
));

$proto7["m_sql"] = "notify_option";
$proto7["m_srcTableName"] = "notifyoption";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "notify_detail",
	"m_strTable" => "notifyoption",
	"m_srcTableName" => "notifyoption"
));

$proto9["m_sql"] = "notify_detail";
$proto9["m_srcTableName"] = "notifyoption";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "notify_comments",
	"m_strTable" => "notifyoption",
	"m_srcTableName" => "notifyoption"
));

$proto11["m_sql"] = "notify_comments";
$proto11["m_srcTableName"] = "notifyoption";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "notifyoption";
$proto14["m_srcTableName"] = "notifyoption";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "notify_option_id";
$proto14["m_columns"][] = "notify_option";
$proto14["m_columns"][] = "notify_detail";
$proto14["m_columns"][] = "notify_comments";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "notifyoption";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "notifyoption";
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

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="notifyoption";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_notifyoption = createSqlQuery_notifyoption();


	
				
	
$tdatanotifyoption[".sqlquery"] = $queryData_notifyoption;

$tableEvents["notifyoption"] = new eventsBase;
$tdatanotifyoption[".hasEvents"] = false;

?>