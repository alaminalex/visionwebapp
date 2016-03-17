<?php
require_once(getabspath("classes/cipherer.php"));




$tdatarejected_jobfile1 = array();	
	$tdatarejected_jobfile1[".truncateText"] = true;
	$tdatarejected_jobfile1[".NumberOfChars"] = 80; 
	$tdatarejected_jobfile1[".ShortName"] = "rejected_jobfile1";
	$tdatarejected_jobfile1[".OwnerID"] = "";
	$tdatarejected_jobfile1[".OriginalTable"] = "rejected_jobfile";

//	field labels
$fieldLabelsrejected_jobfile1 = array();
$fieldToolTipsrejected_jobfile1 = array();
$pageTitlesrejected_jobfile1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsrejected_jobfile1["English"] = array();
	$fieldToolTipsrejected_jobfile1["English"] = array();
	$pageTitlesrejected_jobfile1["English"] = array();
	$fieldLabelsrejected_jobfile1["English"]["jobfile_note"] = "Jobfile Note";
	$fieldToolTipsrejected_jobfile1["English"]["jobfile_note"] = "";
	$fieldLabelsrejected_jobfile1["English"]["reject_date"] = "Reject Date";
	$fieldToolTipsrejected_jobfile1["English"]["reject_date"] = "";
	$fieldLabelsrejected_jobfile1["English"]["reject_reason"] = "Reject Reason";
	$fieldToolTipsrejected_jobfile1["English"]["reject_reason"] = "";
	$fieldLabelsrejected_jobfile1["English"]["original_designer"] = "Original Designer";
	$fieldToolTipsrejected_jobfile1["English"]["original_designer"] = "";
	$fieldLabelsrejected_jobfile1["English"]["original_designer2"] = "Original Designer2";
	$fieldToolTipsrejected_jobfile1["English"]["original_designer2"] = "";
	$fieldLabelsrejected_jobfile1["English"]["cr_start_date"] = "Correction Start Date";
	$fieldToolTipsrejected_jobfile1["English"]["cr_start_date"] = "";
	$fieldLabelsrejected_jobfile1["English"]["cr_end_date"] = "Correction End Date";
	$fieldToolTipsrejected_jobfile1["English"]["cr_end_date"] = "";
	$fieldLabelsrejected_jobfile1["English"]["cr_designer_time"] = "Correction Designer Time";
	$fieldToolTipsrejected_jobfile1["English"]["cr_designer_time"] = "";
	$fieldLabelsrejected_jobfile1["English"]["cr_pc_name"] = "Correction Pc Name";
	$fieldToolTipsrejected_jobfile1["English"]["cr_pc_name"] = "";
	$fieldLabelsrejected_jobfile1["English"]["cr_qc_id"] = "Correction Qc Id";
	$fieldToolTipsrejected_jobfile1["English"]["cr_qc_id"] = "";
	$fieldLabelsrejected_jobfile1["English"]["cr_qcstart_date"] = "Correction Qcstart Date";
	$fieldToolTipsrejected_jobfile1["English"]["cr_qcstart_date"] = "";
	$fieldLabelsrejected_jobfile1["English"]["cr_qcend_date"] = "Correction Qcend Date";
	$fieldToolTipsrejected_jobfile1["English"]["cr_qcend_date"] = "";
	$fieldLabelsrejected_jobfile1["English"]["cr_qc_time"] = "Correction Qc Time";
	$fieldToolTipsrejected_jobfile1["English"]["cr_qc_time"] = "";
	$fieldLabelsrejected_jobfile1["English"]["cr_distribute_date"] = "Correction Distribute Date";
	$fieldToolTipsrejected_jobfile1["English"]["cr_distribute_date"] = "";
	$fieldLabelsrejected_jobfile1["English"]["cr_notifier_id"] = "Correction Notifier Id";
	$fieldToolTipsrejected_jobfile1["English"]["cr_notifier_id"] = "";
	$fieldLabelsrejected_jobfile1["English"]["cr_notify_date"] = "Correction Notify Date";
	$fieldToolTipsrejected_jobfile1["English"]["cr_notify_date"] = "";
	$fieldLabelsrejected_jobfile1["English"]["cr_comment"] = "Correction Comment";
	$fieldToolTipsrejected_jobfile1["English"]["cr_comment"] = "";
	$fieldLabelsrejected_jobfile1["English"]["screencap"] = "Screencap";
	$fieldToolTipsrejected_jobfile1["English"]["screencap"] = "";
	$fieldLabelsrejected_jobfile1["English"]["rejected_jobfile_id"] = "Rejected Jobfile Id";
	$fieldToolTipsrejected_jobfile1["English"]["rejected_jobfile_id"] = "";
	$fieldLabelsrejected_jobfile1["English"]["original_jobfile_id"] = "Original Jobfile Id";
	$fieldToolTipsrejected_jobfile1["English"]["original_jobfile_id"] = "";
	$fieldLabelsrejected_jobfile1["English"]["jobfile_id"] = "Jobfile Id";
	$fieldToolTipsrejected_jobfile1["English"]["jobfile_id"] = "";
	$fieldLabelsrejected_jobfile1["English"]["rejected_jobfile_status_id"] = "Rejected Jobfile Status Id";
	$fieldToolTipsrejected_jobfile1["English"]["rejected_jobfile_status_id"] = "";
	$fieldLabelsrejected_jobfile1["English"]["file_url"] = "File Url";
	$fieldToolTipsrejected_jobfile1["English"]["file_url"] = "";
	$fieldLabelsrejected_jobfile1["English"]["job_id"] = "Job Id";
	$fieldToolTipsrejected_jobfile1["English"]["job_id"] = "";
	$fieldLabelsrejected_jobfile1["English"]["pdf_id"] = "Pdf Id";
	$fieldToolTipsrejected_jobfile1["English"]["pdf_id"] = "";
	$fieldLabelsrejected_jobfile1["English"]["rejector_id"] = "Rejector Id";
	$fieldToolTipsrejected_jobfile1["English"]["rejector_id"] = "";
	$fieldLabelsrejected_jobfile1["English"]["original_qc"] = "Original Qc";
	$fieldToolTipsrejected_jobfile1["English"]["original_qc"] = "";
	$fieldLabelsrejected_jobfile1["English"]["cr_designer_id"] = "Distribute to Designer";
	$fieldToolTipsrejected_jobfile1["English"]["cr_designer_id"] = "";
	$fieldLabelsrejected_jobfile1["English"]["cr_qc_pc_name"] = "Correction Qc Pc Name";
	$fieldToolTipsrejected_jobfile1["English"]["cr_qc_pc_name"] = "";
	$fieldLabelsrejected_jobfile1["English"]["type_of_error1"] = "Type Of Error1";
	$fieldToolTipsrejected_jobfile1["English"]["type_of_error1"] = "";
	$fieldLabelsrejected_jobfile1["English"]["username1"] = "Username1";
	$fieldToolTipsrejected_jobfile1["English"]["username1"] = "";
	$fieldLabelsrejected_jobfile1["English"]["username2"] = "Username2";
	$fieldToolTipsrejected_jobfile1["English"]["username2"] = "";
	$fieldLabelsrejected_jobfile1["English"]["username"] = "Username";
	$fieldToolTipsrejected_jobfile1["English"]["username"] = "";
	$fieldLabelsrejected_jobfile1["English"]["filename"] = "Filename";
	$fieldToolTipsrejected_jobfile1["English"]["filename"] = "";
	$fieldLabelsrejected_jobfile1["English"]["type_of_error"] = "Type Of Error";
	$fieldToolTipsrejected_jobfile1["English"]["type_of_error"] = "";
	if (count($fieldToolTipsrejected_jobfile1["English"]))
		$tdatarejected_jobfile1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsrejected_jobfile1[""] = array();
	$fieldToolTipsrejected_jobfile1[""] = array();
	$pageTitlesrejected_jobfile1[""] = array();
	$fieldLabelsrejected_jobfile1[""]["jobfile_id"] = "Jobfile Id";
	$fieldToolTipsrejected_jobfile1[""]["jobfile_id"] = "";
	$fieldLabelsrejected_jobfile1[""]["type_of_error1"] = "Type Of Error1";
	$fieldToolTipsrejected_jobfile1[""]["type_of_error1"] = "";
	$fieldLabelsrejected_jobfile1[""]["username1"] = "Username1";
	$fieldToolTipsrejected_jobfile1[""]["username1"] = "";
	$fieldLabelsrejected_jobfile1[""]["username2"] = "Username2";
	$fieldToolTipsrejected_jobfile1[""]["username2"] = "";
	if (count($fieldToolTipsrejected_jobfile1[""]))
		$tdatarejected_jobfile1[".isUseToolTips"] = true;
}
	
	
	$tdatarejected_jobfile1[".NCSearch"] = true;



$tdatarejected_jobfile1[".shortTableName"] = "rejected_jobfile1";
$tdatarejected_jobfile1[".nSecOptions"] = 0;
$tdatarejected_jobfile1[".recsPerRowList"] = 1;
$tdatarejected_jobfile1[".recsPerRowPrint"] = 1;
$tdatarejected_jobfile1[".mainTableOwnerID"] = "";
$tdatarejected_jobfile1[".moveNext"] = 1;
$tdatarejected_jobfile1[".entityType"] = 1;

$tdatarejected_jobfile1[".strOriginalTableName"] = "rejected_jobfile";




$tdatarejected_jobfile1[".showAddInPopup"] = false;

$tdatarejected_jobfile1[".showEditInPopup"] = false;

$tdatarejected_jobfile1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarejected_jobfile1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarejected_jobfile1[".fieldsForRegister"] = array();

$tdatarejected_jobfile1[".listAjax"] = false;

	$tdatarejected_jobfile1[".audit"] = false;

	$tdatarejected_jobfile1[".locking"] = false;


$tdatarejected_jobfile1[".add"] = true;
$tdatarejected_jobfile1[".afterAddAction"] = 0;
$tdatarejected_jobfile1[".closePopupAfterAdd"] = 1;
$tdatarejected_jobfile1[".afterAddActionDetTable"] = "";

$tdatarejected_jobfile1[".list"] = true;


$tdatarejected_jobfile1[".import"] = true;

$tdatarejected_jobfile1[".exportTo"] = true;

$tdatarejected_jobfile1[".printFriendly"] = true;


$tdatarejected_jobfile1[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatarejected_jobfile1[".searchSaving"] = false;
//

$tdatarejected_jobfile1[".showSearchPanel"] = true;
		$tdatarejected_jobfile1[".flexibleSearch"] = true;		

if (isMobile())
	$tdatarejected_jobfile1[".isUseAjaxSuggest"] = false;
else 
	$tdatarejected_jobfile1[".isUseAjaxSuggest"] = true;

$tdatarejected_jobfile1[".rowHighlite"] = true;


																																																																																																																																															
$tdatarejected_jobfile1[".addPageEvents"] = true;

// use timepicker for search panel
$tdatarejected_jobfile1[".isUseTimeForSearch"] = false;





$tdatarejected_jobfile1[".allSearchFields"] = array();
$tdatarejected_jobfile1[".filterFields"] = array();
$tdatarejected_jobfile1[".requiredSearchFields"] = array();

$tdatarejected_jobfile1[".allSearchFields"][] = "username";
	$tdatarejected_jobfile1[".allSearchFields"][] = "filename";
	$tdatarejected_jobfile1[".allSearchFields"][] = "type_of_error";
	

$tdatarejected_jobfile1[".googleLikeFields"] = array();
$tdatarejected_jobfile1[".googleLikeFields"][] = "username";
$tdatarejected_jobfile1[".googleLikeFields"][] = "filename";
$tdatarejected_jobfile1[".googleLikeFields"][] = "type_of_error";


$tdatarejected_jobfile1[".advSearchFields"] = array();
$tdatarejected_jobfile1[".advSearchFields"][] = "username";
$tdatarejected_jobfile1[".advSearchFields"][] = "filename";
$tdatarejected_jobfile1[".advSearchFields"][] = "type_of_error";

$tdatarejected_jobfile1[".tableType"] = "list";

$tdatarejected_jobfile1[".printerPageOrientation"] = 0;
$tdatarejected_jobfile1[".nPrinterPageScale"] = 100;

$tdatarejected_jobfile1[".nPrinterSplitRecords"] = 40;

$tdatarejected_jobfile1[".nPrinterPDFSplitRecords"] = 40;



$tdatarejected_jobfile1[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatarejected_jobfile1[".pageSize"] = 20;

$tdatarejected_jobfile1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarejected_jobfile1[".strOrderBy"] = $tstrOrderBy;

$tdatarejected_jobfile1[".orderindexes"] = array();

$tdatarejected_jobfile1[".sqlHead"] = "SELECT `user`.username,  jobfile.filename,  type_of_errors.type_of_error";
$tdatarejected_jobfile1[".sqlFrom"] = "FROM rejected_jobfile  INNER JOIN jobfile ON rejected_jobfile.jobfile_id = jobfile.jobfile_id  INNER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN type_of_errors ON rejected_jobfile.type_of_error = type_of_errors.id";
$tdatarejected_jobfile1[".sqlWhereExpr"] = "";
$tdatarejected_jobfile1[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarejected_jobfile1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarejected_jobfile1[".arrGroupsPerPage"] = $arrGPP;

$tdatarejected_jobfile1[".highlightSearchResults"] = true;

$tableKeysrejected_jobfile1 = array();
$tdatarejected_jobfile1[".Keys"] = $tableKeysrejected_jobfile1;

$tdatarejected_jobfile1[".listFields"] = array();
$tdatarejected_jobfile1[".listFields"][] = "username";
$tdatarejected_jobfile1[".listFields"][] = "filename";
$tdatarejected_jobfile1[".listFields"][] = "type_of_error";

$tdatarejected_jobfile1[".hideMobileList"] = array();


$tdatarejected_jobfile1[".viewFields"] = array();
$tdatarejected_jobfile1[".viewFields"][] = "username";
$tdatarejected_jobfile1[".viewFields"][] = "filename";
$tdatarejected_jobfile1[".viewFields"][] = "type_of_error";

$tdatarejected_jobfile1[".addFields"] = array();
$tdatarejected_jobfile1[".addFields"][] = "type_of_error";

$tdatarejected_jobfile1[".masterListFields"] = array();
$tdatarejected_jobfile1[".masterListFields"][] = "username";
$tdatarejected_jobfile1[".masterListFields"][] = "filename";
$tdatarejected_jobfile1[".masterListFields"][] = "type_of_error";

$tdatarejected_jobfile1[".inlineAddFields"] = array();
$tdatarejected_jobfile1[".inlineAddFields"][] = "type_of_error";

$tdatarejected_jobfile1[".editFields"] = array();
$tdatarejected_jobfile1[".editFields"][] = "type_of_error";

$tdatarejected_jobfile1[".inlineEditFields"] = array();
$tdatarejected_jobfile1[".inlineEditFields"][] = "type_of_error";

$tdatarejected_jobfile1[".exportFields"] = array();
$tdatarejected_jobfile1[".exportFields"][] = "username";
$tdatarejected_jobfile1[".exportFields"][] = "filename";
$tdatarejected_jobfile1[".exportFields"][] = "type_of_error";

$tdatarejected_jobfile1[".importFields"] = array();
$tdatarejected_jobfile1[".importFields"][] = "username";
$tdatarejected_jobfile1[".importFields"][] = "filename";
$tdatarejected_jobfile1[".importFields"][] = "type_of_error";

$tdatarejected_jobfile1[".printFields"] = array();
$tdatarejected_jobfile1[".printFields"][] = "username";
$tdatarejected_jobfile1[".printFields"][] = "filename";
$tdatarejected_jobfile1[".printFields"][] = "type_of_error";

//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile1","username"); 
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

	

	
	$tdatarejected_jobfile1["username"] = $fdata;
//	filename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "filename";
	$fdata["GoodName"] = "filename";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile1","filename"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "filename"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.filename";
	
		
		
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

	

	
	$tdatarejected_jobfile1["filename"] = $fdata;
//	type_of_error
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "type_of_error";
	$fdata["GoodName"] = "type_of_error";
	$fdata["ownerTable"] = "type_of_errors";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile1","type_of_error"); 
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
	
		$fdata["strField"] = "type_of_error"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "type_of_errors.type_of_error";
	
		
		
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
	$edata["LookupTable"] = "type_of_errors";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "type_of_error";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		$edata["Multiselect"] = true; 
	
		
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

	

	
	$tdatarejected_jobfile1["type_of_error"] = $fdata;

	
$tables_data["rejected_jobfile1"]=&$tdatarejected_jobfile1;
$field_labels["rejected_jobfile1"] = &$fieldLabelsrejected_jobfile1;
$fieldToolTips["rejected_jobfile1"] = &$fieldToolTipsrejected_jobfile1;
$page_titles["rejected_jobfile1"] = &$pageTitlesrejected_jobfile1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["rejected_jobfile1"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["rejected_jobfile1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_rejected_jobfile1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`user`.username,  jobfile.filename,  type_of_errors.type_of_error";
$proto0["m_strFrom"] = "FROM rejected_jobfile  INNER JOIN jobfile ON rejected_jobfile.jobfile_id = jobfile.jobfile_id  INNER JOIN `user` ON jobfile.designer2_id = `user`.user_id  LEFT OUTER JOIN type_of_errors ON rejected_jobfile.type_of_error = type_of_errors.id";
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
	"m_strName" => "username",
	"m_strTable" => "user",
	"m_srcTableName" => "rejected_jobfile1"
));

$proto5["m_sql"] = "`user`.username";
$proto5["m_srcTableName"] = "rejected_jobfile1";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "rejected_jobfile1"
));

$proto7["m_sql"] = "jobfile.filename";
$proto7["m_srcTableName"] = "rejected_jobfile1";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "type_of_error",
	"m_strTable" => "type_of_errors",
	"m_srcTableName" => "rejected_jobfile1"
));

$proto9["m_sql"] = "type_of_errors.type_of_error";
$proto9["m_srcTableName"] = "rejected_jobfile1";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "rejected_jobfile";
$proto12["m_srcTableName"] = "rejected_jobfile1";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "rejected_jobfile_id";
$proto12["m_columns"][] = "jobfile_id";
$proto12["m_columns"][] = "rejected_jobfile_status_id";
$proto12["m_columns"][] = "file_url";
$proto12["m_columns"][] = "job_id";
$proto12["m_columns"][] = "pdf_id";
$proto12["m_columns"][] = "jobfile_note";
$proto12["m_columns"][] = "rejector_id";
$proto12["m_columns"][] = "reject_date";
$proto12["m_columns"][] = "reject_reason";
$proto12["m_columns"][] = "cr_designer_id";
$proto12["m_columns"][] = "cr_start_date";
$proto12["m_columns"][] = "cr_end_date";
$proto12["m_columns"][] = "cr_designer_time";
$proto12["m_columns"][] = "cr_pc_name";
$proto12["m_columns"][] = "cr_qc_id";
$proto12["m_columns"][] = "cr_qcstart_date";
$proto12["m_columns"][] = "cr_qcend_date";
$proto12["m_columns"][] = "cr_qc_time";
$proto12["m_columns"][] = "cr_qc_pc_name";
$proto12["m_columns"][] = "cr_distribute_date";
$proto12["m_columns"][] = "cr_notifier_id";
$proto12["m_columns"][] = "cr_notify_date";
$proto12["m_columns"][] = "type_of_error";
$proto12["m_columns"][] = "cr_comment";
$proto12["m_columns"][] = "screencap";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "rejected_jobfile";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "rejected_jobfile1";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
												$proto15=array();
$proto15["m_link"] = "SQLL_INNERJOIN";
			$proto16=array();
$proto16["m_strName"] = "jobfile";
$proto16["m_srcTableName"] = "rejected_jobfile1";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "jobfile_id";
$proto16["m_columns"][] = "file_url";
$proto16["m_columns"][] = "client_id";
$proto16["m_columns"][] = "work_id";
$proto16["m_columns"][] = "job_id";
$proto16["m_columns"][] = "project_id";
$proto16["m_columns"][] = "folder_name";
$proto16["m_columns"][] = "filename";
$proto16["m_columns"][] = "jobfile_type";
$proto16["m_columns"][] = "jobfile_note";
$proto16["m_columns"][] = "jobfile_status_id";
$proto16["m_columns"][] = "downloader_id";
$proto16["m_columns"][] = "distributor_id";
$proto16["m_columns"][] = "designer_id";
$proto16["m_columns"][] = "qc_id";
$proto16["m_columns"][] = "uploader_id";
$proto16["m_columns"][] = "notifier_id";
$proto16["m_columns"][] = "rejector_id";
$proto16["m_columns"][] = "download_date";
$proto16["m_columns"][] = "distribute_date";
$proto16["m_columns"][] = "start_date";
$proto16["m_columns"][] = "end_date";
$proto16["m_columns"][] = "designer_time";
$proto16["m_columns"][] = "qcstart_date";
$proto16["m_columns"][] = "qcend_date";
$proto16["m_columns"][] = "qc_time";
$proto16["m_columns"][] = "upload_date";
$proto16["m_columns"][] = "notify_date";
$proto16["m_columns"][] = "reject_date";
$proto16["m_columns"][] = "reject_reason";
$proto16["m_columns"][] = "designer2_id";
$proto16["m_columns"][] = "start2_date";
$proto16["m_columns"][] = "end2_date";
$proto16["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "INNER JOIN jobfile ON rejected_jobfile.jobfile_id = jobfile.jobfile_id";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "rejected_jobfile1";
$proto17=array();
$proto17["m_sql"] = "rejected_jobfile.jobfile_id = jobfile.jobfile_id";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile1"
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "= jobfile.jobfile_id";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
												$proto19=array();
$proto19["m_link"] = "SQLL_INNERJOIN";
			$proto20=array();
$proto20["m_strName"] = "user";
$proto20["m_srcTableName"] = "rejected_jobfile1";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "user_id";
$proto20["m_columns"][] = "user_status";
$proto20["m_columns"][] = "username";
$proto20["m_columns"][] = "password";
$proto20["m_columns"][] = "department_id";
$proto20["m_columns"][] = "subdiv_id";
$proto20["m_columns"][] = "group_id";
$proto20["m_columns"][] = "designation";
$proto20["m_columns"][] = "employee_id";
$proto20["m_columns"][] = "fname";
$proto20["m_columns"][] = "lname";
$proto20["m_columns"][] = "nickname";
$proto20["m_columns"][] = "email";
$proto20["m_columns"][] = "phone";
$proto20["m_columns"][] = "mobile";
$proto20["m_columns"][] = "log";
$proto20["m_columns"][] = "images_assigned";
$proto20["m_columns"][] = "user_picture";
$proto20["m_columns"][] = "team";
$proto20["m_columns"][] = "ad_group_id";
$proto20["m_columns"][] = "lastaccess";
$proto20["m_columns"][] = "joining_date";
$proto20["m_columns"][] = "emergency_contact1";
$proto20["m_columns"][] = "emergency_contact2";
$proto20["m_columns"][] = "permanent_address";
$proto20["m_columns"][] = "current_address";
$proto20["m_columns"][] = "date_of_birth";
$proto20["m_columns"][] = "male_female";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "INNER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "rejected_jobfile1";
$proto21=array();
$proto21["m_sql"] = "jobfile.designer2_id = `user`.user_id";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "rejected_jobfile1"
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "= `user`.user_id";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
												$proto23=array();
$proto23["m_link"] = "SQLL_LEFTJOIN";
			$proto24=array();
$proto24["m_strName"] = "type_of_errors";
$proto24["m_srcTableName"] = "rejected_jobfile1";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "id";
$proto24["m_columns"][] = "type_of_error";
$proto24["m_columns"][] = "discription";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "LEFT OUTER JOIN type_of_errors ON rejected_jobfile.type_of_error = type_of_errors.id";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "rejected_jobfile1";
$proto25=array();
$proto25["m_sql"] = "rejected_jobfile.type_of_error = type_of_errors.id";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "type_of_error",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile1"
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "= type_of_errors.id";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="rejected_jobfile1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_rejected_jobfile1 = createSqlQuery_rejected_jobfile1();


	
			
	
$tdatarejected_jobfile1[".sqlquery"] = $queryData_rejected_jobfile1;

include_once(getabspath("include/rejected_jobfile1_events.php"));
$tableEvents["rejected_jobfile1"] = new eventclass_rejected_jobfile1;
$tdatarejected_jobfile1[".hasEvents"] = true;

?>