<?php
require_once(getabspath("classes/cipherer.php"));




$tdatarejected_jobfile = array();	
	$tdatarejected_jobfile[".truncateText"] = true;
	$tdatarejected_jobfile[".NumberOfChars"] = 80; 
	$tdatarejected_jobfile[".ShortName"] = "rejected_jobfile";
	$tdatarejected_jobfile[".OwnerID"] = "";
	$tdatarejected_jobfile[".OriginalTable"] = "rejected_jobfile";

//	field labels
$fieldLabelsrejected_jobfile = array();
$fieldToolTipsrejected_jobfile = array();
$pageTitlesrejected_jobfile = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsrejected_jobfile["English"] = array();
	$fieldToolTipsrejected_jobfile["English"] = array();
	$pageTitlesrejected_jobfile["English"] = array();
	$fieldLabelsrejected_jobfile["English"]["jobfile_id"] = "Jobfile Id";
	$fieldToolTipsrejected_jobfile["English"]["jobfile_id"] = "";
	$fieldLabelsrejected_jobfile["English"]["file_url"] = "File Url";
	$fieldToolTipsrejected_jobfile["English"]["file_url"] = "";
	$fieldLabelsrejected_jobfile["English"]["job_id"] = "Job Id";
	$fieldToolTipsrejected_jobfile["English"]["job_id"] = "";
	$fieldLabelsrejected_jobfile["English"]["jobfile_note"] = "Jobfile Note";
	$fieldToolTipsrejected_jobfile["English"]["jobfile_note"] = "";
	$fieldLabelsrejected_jobfile["English"]["rejector_id"] = "Rejector Id";
	$fieldToolTipsrejected_jobfile["English"]["rejector_id"] = "";
	$fieldLabelsrejected_jobfile["English"]["reject_date"] = "Reject Date";
	$fieldToolTipsrejected_jobfile["English"]["reject_date"] = "";
	$fieldLabelsrejected_jobfile["English"]["reject_reason"] = "Reject Reason";
	$fieldToolTipsrejected_jobfile["English"]["reject_reason"] = "";
	$fieldLabelsrejected_jobfile["English"]["pdf_id"] = "Pdf Id";
	$fieldToolTipsrejected_jobfile["English"]["pdf_id"] = "";
	$fieldLabelsrejected_jobfile["English"]["cr_pc_name"] = "Correction Pc Name";
	$fieldToolTipsrejected_jobfile["English"]["cr_pc_name"] = "";
	$fieldLabelsrejected_jobfile["English"]["cr_designer_id"] = "Distribute to Designer";
	$fieldToolTipsrejected_jobfile["English"]["cr_designer_id"] = "";
	$fieldLabelsrejected_jobfile["English"]["cr_qc_id"] = "Correction Qc Id";
	$fieldToolTipsrejected_jobfile["English"]["cr_qc_id"] = "";
	$fieldLabelsrejected_jobfile["English"]["cr_notifier_id"] = "Correction Notifier Id";
	$fieldToolTipsrejected_jobfile["English"]["cr_notifier_id"] = "";
	$fieldLabelsrejected_jobfile["English"]["cr_start_date"] = "Correction Start Date";
	$fieldToolTipsrejected_jobfile["English"]["cr_start_date"] = "";
	$fieldLabelsrejected_jobfile["English"]["cr_end_date"] = "Correction End Date";
	$fieldToolTipsrejected_jobfile["English"]["cr_end_date"] = "";
	$fieldLabelsrejected_jobfile["English"]["cr_designer_time"] = "Correction Designer Time";
	$fieldToolTipsrejected_jobfile["English"]["cr_designer_time"] = "";
	$fieldLabelsrejected_jobfile["English"]["cr_qcstart_date"] = "Correction Qcstart Date";
	$fieldToolTipsrejected_jobfile["English"]["cr_qcstart_date"] = "";
	$fieldLabelsrejected_jobfile["English"]["cr_qcend_date"] = "Correction Qcend Date";
	$fieldToolTipsrejected_jobfile["English"]["cr_qcend_date"] = "";
	$fieldLabelsrejected_jobfile["English"]["cr_qc_time"] = "Correction Qc Time";
	$fieldToolTipsrejected_jobfile["English"]["cr_qc_time"] = "";
	$fieldLabelsrejected_jobfile["English"]["cr_notify_date"] = "Correction Notify Date";
	$fieldToolTipsrejected_jobfile["English"]["cr_notify_date"] = "";
	$fieldLabelsrejected_jobfile["English"]["type_of_error"] = "Type Of Error";
	$fieldToolTipsrejected_jobfile["English"]["type_of_error"] = "";
	$fieldLabelsrejected_jobfile["English"]["cr_comment"] = "Correction Comment";
	$fieldToolTipsrejected_jobfile["English"]["cr_comment"] = "";
	$fieldLabelsrejected_jobfile["English"]["screencap"] = "Screencap";
	$fieldToolTipsrejected_jobfile["English"]["screencap"] = "";
	$fieldLabelsrejected_jobfile["English"]["rejected_jobfile_id"] = "Rejected Jobfile Id";
	$fieldToolTipsrejected_jobfile["English"]["rejected_jobfile_id"] = "";
	$fieldLabelsrejected_jobfile["English"]["cr_distribute_date"] = "Correction Distribute Date";
	$fieldToolTipsrejected_jobfile["English"]["cr_distribute_date"] = "";
	$fieldLabelsrejected_jobfile["English"]["cr_qc_pc_name"] = "Correction Qc Pc Name";
	$fieldToolTipsrejected_jobfile["English"]["cr_qc_pc_name"] = "";
	$fieldLabelsrejected_jobfile["English"]["rejected_jobfile_status_id"] = "Rejected Jobfile Status Id";
	$fieldToolTipsrejected_jobfile["English"]["rejected_jobfile_status_id"] = "";
	$fieldLabelsrejected_jobfile["English"]["original_designer"] = "Original Designer";
	$fieldToolTipsrejected_jobfile["English"]["original_designer"] = "";
	$fieldLabelsrejected_jobfile["English"]["original_designer2"] = "Original Designer2";
	$fieldToolTipsrejected_jobfile["English"]["original_designer2"] = "";
	$fieldLabelsrejected_jobfile["English"]["original_qc"] = "Original Qc";
	$fieldToolTipsrejected_jobfile["English"]["original_qc"] = "";
	$fieldLabelsrejected_jobfile["English"]["original_jobfile_id"] = "Original Jobfile Id";
	$fieldToolTipsrejected_jobfile["English"]["original_jobfile_id"] = "";
	if (count($fieldToolTipsrejected_jobfile["English"]))
		$tdatarejected_jobfile[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsrejected_jobfile[""] = array();
	$fieldToolTipsrejected_jobfile[""] = array();
	$pageTitlesrejected_jobfile[""] = array();
	$fieldLabelsrejected_jobfile[""]["jobfile_id"] = "Jobfile Id";
	$fieldToolTipsrejected_jobfile[""]["jobfile_id"] = "";
	if (count($fieldToolTipsrejected_jobfile[""]))
		$tdatarejected_jobfile[".isUseToolTips"] = true;
}
	
	
	$tdatarejected_jobfile[".NCSearch"] = true;



$tdatarejected_jobfile[".shortTableName"] = "rejected_jobfile";
$tdatarejected_jobfile[".nSecOptions"] = 0;
$tdatarejected_jobfile[".recsPerRowList"] = 1;
$tdatarejected_jobfile[".recsPerRowPrint"] = 1;
$tdatarejected_jobfile[".mainTableOwnerID"] = "";
$tdatarejected_jobfile[".moveNext"] = 1;
$tdatarejected_jobfile[".entityType"] = 0;

$tdatarejected_jobfile[".strOriginalTableName"] = "rejected_jobfile";




$tdatarejected_jobfile[".showAddInPopup"] = false;

$tdatarejected_jobfile[".showEditInPopup"] = false;

$tdatarejected_jobfile[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarejected_jobfile[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarejected_jobfile[".fieldsForRegister"] = array();

$tdatarejected_jobfile[".listAjax"] = false;

	$tdatarejected_jobfile[".audit"] = false;

	$tdatarejected_jobfile[".locking"] = false;

$tdatarejected_jobfile[".edit"] = true;
$tdatarejected_jobfile[".afterEditAction"] = 1;
$tdatarejected_jobfile[".closePopupAfterEdit"] = 1;
$tdatarejected_jobfile[".afterEditActionDetTable"] = "";

$tdatarejected_jobfile[".add"] = true;
$tdatarejected_jobfile[".afterAddAction"] = 0;
$tdatarejected_jobfile[".closePopupAfterAdd"] = 1;
$tdatarejected_jobfile[".afterAddActionDetTable"] = "";

$tdatarejected_jobfile[".list"] = true;

$tdatarejected_jobfile[".view"] = true;

$tdatarejected_jobfile[".import"] = true;

$tdatarejected_jobfile[".exportTo"] = true;

$tdatarejected_jobfile[".printFriendly"] = true;

$tdatarejected_jobfile[".delete"] = true;

$tdatarejected_jobfile[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatarejected_jobfile[".searchSaving"] = false;
//

$tdatarejected_jobfile[".showSearchPanel"] = true;
		$tdatarejected_jobfile[".flexibleSearch"] = true;		

if (isMobile())
	$tdatarejected_jobfile[".isUseAjaxSuggest"] = false;
else 
	$tdatarejected_jobfile[".isUseAjaxSuggest"] = true;

$tdatarejected_jobfile[".rowHighlite"] = true;


																																																																																																																																															
$tdatarejected_jobfile[".addPageEvents"] = true;

// use timepicker for search panel
$tdatarejected_jobfile[".isUseTimeForSearch"] = false;





$tdatarejected_jobfile[".allSearchFields"] = array();
$tdatarejected_jobfile[".filterFields"] = array();
$tdatarejected_jobfile[".requiredSearchFields"] = array();

$tdatarejected_jobfile[".allSearchFields"][] = "rejected_jobfile_id";
	$tdatarejected_jobfile[".allSearchFields"][] = "original_jobfile_id";
	$tdatarejected_jobfile[".allSearchFields"][] = "jobfile_id";
	$tdatarejected_jobfile[".allSearchFields"][] = "rejected_jobfile_status_id";
	$tdatarejected_jobfile[".allSearchFields"][] = "file_url";
	$tdatarejected_jobfile[".allSearchFields"][] = "job_id";
	$tdatarejected_jobfile[".allSearchFields"][] = "pdf_id";
	$tdatarejected_jobfile[".allSearchFields"][] = "jobfile_note";
	$tdatarejected_jobfile[".allSearchFields"][] = "rejector_id";
	$tdatarejected_jobfile[".allSearchFields"][] = "reject_date";
	$tdatarejected_jobfile[".allSearchFields"][] = "reject_reason";
	$tdatarejected_jobfile[".allSearchFields"][] = "original_designer2";
	$tdatarejected_jobfile[".allSearchFields"][] = "original_qc";
	$tdatarejected_jobfile[".allSearchFields"][] = "cr_designer_id";
	$tdatarejected_jobfile[".allSearchFields"][] = "cr_start_date";
	$tdatarejected_jobfile[".allSearchFields"][] = "cr_end_date";
	$tdatarejected_jobfile[".allSearchFields"][] = "cr_designer_time";
	$tdatarejected_jobfile[".allSearchFields"][] = "cr_pc_name";
	$tdatarejected_jobfile[".allSearchFields"][] = "cr_qc_id";
	$tdatarejected_jobfile[".allSearchFields"][] = "cr_qcstart_date";
	$tdatarejected_jobfile[".allSearchFields"][] = "cr_qcend_date";
	$tdatarejected_jobfile[".allSearchFields"][] = "cr_qc_time";
	$tdatarejected_jobfile[".allSearchFields"][] = "cr_qc_pc_name";
	$tdatarejected_jobfile[".allSearchFields"][] = "cr_distribute_date";
	$tdatarejected_jobfile[".allSearchFields"][] = "cr_notifier_id";
	$tdatarejected_jobfile[".allSearchFields"][] = "cr_notify_date";
	$tdatarejected_jobfile[".allSearchFields"][] = "type_of_error";
	$tdatarejected_jobfile[".allSearchFields"][] = "cr_comment";
	$tdatarejected_jobfile[".allSearchFields"][] = "screencap";
	

$tdatarejected_jobfile[".googleLikeFields"] = array();
$tdatarejected_jobfile[".googleLikeFields"][] = "rejected_jobfile_id";
$tdatarejected_jobfile[".googleLikeFields"][] = "original_jobfile_id";
$tdatarejected_jobfile[".googleLikeFields"][] = "jobfile_id";
$tdatarejected_jobfile[".googleLikeFields"][] = "rejected_jobfile_status_id";
$tdatarejected_jobfile[".googleLikeFields"][] = "file_url";
$tdatarejected_jobfile[".googleLikeFields"][] = "job_id";
$tdatarejected_jobfile[".googleLikeFields"][] = "pdf_id";
$tdatarejected_jobfile[".googleLikeFields"][] = "jobfile_note";
$tdatarejected_jobfile[".googleLikeFields"][] = "rejector_id";
$tdatarejected_jobfile[".googleLikeFields"][] = "reject_date";
$tdatarejected_jobfile[".googleLikeFields"][] = "reject_reason";
$tdatarejected_jobfile[".googleLikeFields"][] = "original_designer";
$tdatarejected_jobfile[".googleLikeFields"][] = "original_designer2";
$tdatarejected_jobfile[".googleLikeFields"][] = "original_qc";
$tdatarejected_jobfile[".googleLikeFields"][] = "cr_designer_id";
$tdatarejected_jobfile[".googleLikeFields"][] = "cr_start_date";
$tdatarejected_jobfile[".googleLikeFields"][] = "cr_end_date";
$tdatarejected_jobfile[".googleLikeFields"][] = "cr_designer_time";
$tdatarejected_jobfile[".googleLikeFields"][] = "cr_pc_name";
$tdatarejected_jobfile[".googleLikeFields"][] = "cr_qc_id";
$tdatarejected_jobfile[".googleLikeFields"][] = "cr_qcstart_date";
$tdatarejected_jobfile[".googleLikeFields"][] = "cr_qcend_date";
$tdatarejected_jobfile[".googleLikeFields"][] = "cr_qc_time";
$tdatarejected_jobfile[".googleLikeFields"][] = "cr_qc_pc_name";
$tdatarejected_jobfile[".googleLikeFields"][] = "cr_distribute_date";
$tdatarejected_jobfile[".googleLikeFields"][] = "cr_notifier_id";
$tdatarejected_jobfile[".googleLikeFields"][] = "cr_notify_date";
$tdatarejected_jobfile[".googleLikeFields"][] = "type_of_error";
$tdatarejected_jobfile[".googleLikeFields"][] = "cr_comment";
$tdatarejected_jobfile[".googleLikeFields"][] = "screencap";


$tdatarejected_jobfile[".advSearchFields"] = array();
$tdatarejected_jobfile[".advSearchFields"][] = "rejected_jobfile_id";
$tdatarejected_jobfile[".advSearchFields"][] = "original_jobfile_id";
$tdatarejected_jobfile[".advSearchFields"][] = "jobfile_id";
$tdatarejected_jobfile[".advSearchFields"][] = "rejected_jobfile_status_id";
$tdatarejected_jobfile[".advSearchFields"][] = "file_url";
$tdatarejected_jobfile[".advSearchFields"][] = "job_id";
$tdatarejected_jobfile[".advSearchFields"][] = "pdf_id";
$tdatarejected_jobfile[".advSearchFields"][] = "jobfile_note";
$tdatarejected_jobfile[".advSearchFields"][] = "rejector_id";
$tdatarejected_jobfile[".advSearchFields"][] = "reject_date";
$tdatarejected_jobfile[".advSearchFields"][] = "reject_reason";
$tdatarejected_jobfile[".advSearchFields"][] = "original_designer2";
$tdatarejected_jobfile[".advSearchFields"][] = "original_qc";
$tdatarejected_jobfile[".advSearchFields"][] = "cr_designer_id";
$tdatarejected_jobfile[".advSearchFields"][] = "cr_start_date";
$tdatarejected_jobfile[".advSearchFields"][] = "cr_end_date";
$tdatarejected_jobfile[".advSearchFields"][] = "cr_designer_time";
$tdatarejected_jobfile[".advSearchFields"][] = "cr_pc_name";
$tdatarejected_jobfile[".advSearchFields"][] = "cr_qc_id";
$tdatarejected_jobfile[".advSearchFields"][] = "cr_qcstart_date";
$tdatarejected_jobfile[".advSearchFields"][] = "cr_qcend_date";
$tdatarejected_jobfile[".advSearchFields"][] = "cr_qc_time";
$tdatarejected_jobfile[".advSearchFields"][] = "cr_qc_pc_name";
$tdatarejected_jobfile[".advSearchFields"][] = "cr_distribute_date";
$tdatarejected_jobfile[".advSearchFields"][] = "cr_notifier_id";
$tdatarejected_jobfile[".advSearchFields"][] = "cr_notify_date";
$tdatarejected_jobfile[".advSearchFields"][] = "type_of_error";
$tdatarejected_jobfile[".advSearchFields"][] = "cr_comment";
$tdatarejected_jobfile[".advSearchFields"][] = "screencap";

$tdatarejected_jobfile[".tableType"] = "list";

$tdatarejected_jobfile[".printerPageOrientation"] = 0;
$tdatarejected_jobfile[".nPrinterPageScale"] = 100;

$tdatarejected_jobfile[".nPrinterSplitRecords"] = 40;

$tdatarejected_jobfile[".nPrinterPDFSplitRecords"] = 40;



$tdatarejected_jobfile[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatarejected_jobfile[".pageSize"] = 20;

$tdatarejected_jobfile[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarejected_jobfile[".strOrderBy"] = $tstrOrderBy;

$tdatarejected_jobfile[".orderindexes"] = array();

$tdatarejected_jobfile[".sqlHead"] = "SELECT rejected_jobfile_id,  file_url AS original_jobfile_id,  jobfile_id,  rejected_jobfile_status_id,  file_url,  job_id,  pdf_id,  jobfile_note,  rejector_id,  reject_date,  reject_reason,  cr_notifier_id AS original_designer,  cr_pc_name AS original_designer2,  cr_qc_pc_name AS original_qc,  cr_designer_id,  cr_start_date,  cr_end_date,  cr_designer_time,  cr_pc_name,  cr_qc_id,  cr_qcstart_date,  cr_qcend_date,  cr_qc_time,  cr_qc_pc_name,  cr_distribute_date,  cr_notifier_id,  cr_notify_date,  type_of_error,  cr_comment,  screencap";
$tdatarejected_jobfile[".sqlFrom"] = "FROM rejected_jobfile";
$tdatarejected_jobfile[".sqlWhereExpr"] = "";
$tdatarejected_jobfile[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarejected_jobfile[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarejected_jobfile[".arrGroupsPerPage"] = $arrGPP;

$tdatarejected_jobfile[".highlightSearchResults"] = true;

$tableKeysrejected_jobfile = array();
$tableKeysrejected_jobfile[] = "jobfile_id";
$tdatarejected_jobfile[".Keys"] = $tableKeysrejected_jobfile;

$tdatarejected_jobfile[".listFields"] = array();
$tdatarejected_jobfile[".listFields"][] = "screencap";
$tdatarejected_jobfile[".listFields"][] = "rejected_jobfile_id";
$tdatarejected_jobfile[".listFields"][] = "jobfile_id";
$tdatarejected_jobfile[".listFields"][] = "rejected_jobfile_status_id";
$tdatarejected_jobfile[".listFields"][] = "file_url";
$tdatarejected_jobfile[".listFields"][] = "job_id";
$tdatarejected_jobfile[".listFields"][] = "pdf_id";
$tdatarejected_jobfile[".listFields"][] = "jobfile_note";
$tdatarejected_jobfile[".listFields"][] = "rejector_id";
$tdatarejected_jobfile[".listFields"][] = "reject_date";
$tdatarejected_jobfile[".listFields"][] = "reject_reason";
$tdatarejected_jobfile[".listFields"][] = "cr_designer_id";
$tdatarejected_jobfile[".listFields"][] = "cr_start_date";
$tdatarejected_jobfile[".listFields"][] = "cr_end_date";
$tdatarejected_jobfile[".listFields"][] = "cr_designer_time";
$tdatarejected_jobfile[".listFields"][] = "cr_pc_name";
$tdatarejected_jobfile[".listFields"][] = "cr_qc_id";
$tdatarejected_jobfile[".listFields"][] = "cr_qcstart_date";
$tdatarejected_jobfile[".listFields"][] = "cr_qcend_date";
$tdatarejected_jobfile[".listFields"][] = "cr_qc_time";
$tdatarejected_jobfile[".listFields"][] = "cr_qc_pc_name";
$tdatarejected_jobfile[".listFields"][] = "cr_distribute_date";
$tdatarejected_jobfile[".listFields"][] = "cr_notifier_id";
$tdatarejected_jobfile[".listFields"][] = "cr_notify_date";
$tdatarejected_jobfile[".listFields"][] = "type_of_error";
$tdatarejected_jobfile[".listFields"][] = "cr_comment";

$tdatarejected_jobfile[".hideMobileList"] = array();


$tdatarejected_jobfile[".viewFields"] = array();
$tdatarejected_jobfile[".viewFields"][] = "original_jobfile_id";
$tdatarejected_jobfile[".viewFields"][] = "original_designer2";
$tdatarejected_jobfile[".viewFields"][] = "original_qc";
$tdatarejected_jobfile[".viewFields"][] = "rejected_jobfile_id";
$tdatarejected_jobfile[".viewFields"][] = "rejected_jobfile_status_id";
$tdatarejected_jobfile[".viewFields"][] = "jobfile_id";
$tdatarejected_jobfile[".viewFields"][] = "file_url";
$tdatarejected_jobfile[".viewFields"][] = "job_id";
$tdatarejected_jobfile[".viewFields"][] = "pdf_id";
$tdatarejected_jobfile[".viewFields"][] = "jobfile_note";
$tdatarejected_jobfile[".viewFields"][] = "rejector_id";
$tdatarejected_jobfile[".viewFields"][] = "reject_date";
$tdatarejected_jobfile[".viewFields"][] = "reject_reason";
$tdatarejected_jobfile[".viewFields"][] = "cr_designer_id";
$tdatarejected_jobfile[".viewFields"][] = "cr_start_date";
$tdatarejected_jobfile[".viewFields"][] = "cr_end_date";
$tdatarejected_jobfile[".viewFields"][] = "cr_designer_time";
$tdatarejected_jobfile[".viewFields"][] = "cr_pc_name";
$tdatarejected_jobfile[".viewFields"][] = "cr_qc_id";
$tdatarejected_jobfile[".viewFields"][] = "cr_qcstart_date";
$tdatarejected_jobfile[".viewFields"][] = "cr_qcend_date";
$tdatarejected_jobfile[".viewFields"][] = "cr_qc_time";
$tdatarejected_jobfile[".viewFields"][] = "cr_qc_pc_name";
$tdatarejected_jobfile[".viewFields"][] = "cr_distribute_date";
$tdatarejected_jobfile[".viewFields"][] = "cr_notifier_id";
$tdatarejected_jobfile[".viewFields"][] = "cr_notify_date";
$tdatarejected_jobfile[".viewFields"][] = "type_of_error";
$tdatarejected_jobfile[".viewFields"][] = "cr_comment";
$tdatarejected_jobfile[".viewFields"][] = "screencap";

$tdatarejected_jobfile[".addFields"] = array();
$tdatarejected_jobfile[".addFields"][] = "rejected_jobfile_status_id";
$tdatarejected_jobfile[".addFields"][] = "job_id";
$tdatarejected_jobfile[".addFields"][] = "pdf_id";
$tdatarejected_jobfile[".addFields"][] = "rejector_id";
$tdatarejected_jobfile[".addFields"][] = "reject_date";
$tdatarejected_jobfile[".addFields"][] = "original_designer2";
$tdatarejected_jobfile[".addFields"][] = "original_qc";
$tdatarejected_jobfile[".addFields"][] = "original_jobfile_id";
$tdatarejected_jobfile[".addFields"][] = "jobfile_id";
$tdatarejected_jobfile[".addFields"][] = "type_of_error";
$tdatarejected_jobfile[".addFields"][] = "reject_reason";
$tdatarejected_jobfile[".addFields"][] = "screencap";
$tdatarejected_jobfile[".addFields"][] = "cr_designer_id";
$tdatarejected_jobfile[".addFields"][] = "cr_comment";

$tdatarejected_jobfile[".masterListFields"] = array();
$tdatarejected_jobfile[".masterListFields"][] = "rejected_jobfile_id";
$tdatarejected_jobfile[".masterListFields"][] = "original_jobfile_id";
$tdatarejected_jobfile[".masterListFields"][] = "jobfile_id";
$tdatarejected_jobfile[".masterListFields"][] = "rejected_jobfile_status_id";
$tdatarejected_jobfile[".masterListFields"][] = "file_url";
$tdatarejected_jobfile[".masterListFields"][] = "job_id";
$tdatarejected_jobfile[".masterListFields"][] = "pdf_id";
$tdatarejected_jobfile[".masterListFields"][] = "jobfile_note";
$tdatarejected_jobfile[".masterListFields"][] = "rejector_id";
$tdatarejected_jobfile[".masterListFields"][] = "reject_date";
$tdatarejected_jobfile[".masterListFields"][] = "reject_reason";
$tdatarejected_jobfile[".masterListFields"][] = "original_designer";
$tdatarejected_jobfile[".masterListFields"][] = "original_designer2";
$tdatarejected_jobfile[".masterListFields"][] = "original_qc";
$tdatarejected_jobfile[".masterListFields"][] = "cr_designer_id";
$tdatarejected_jobfile[".masterListFields"][] = "cr_start_date";
$tdatarejected_jobfile[".masterListFields"][] = "cr_end_date";
$tdatarejected_jobfile[".masterListFields"][] = "cr_designer_time";
$tdatarejected_jobfile[".masterListFields"][] = "cr_pc_name";
$tdatarejected_jobfile[".masterListFields"][] = "cr_qc_id";
$tdatarejected_jobfile[".masterListFields"][] = "cr_qcstart_date";
$tdatarejected_jobfile[".masterListFields"][] = "cr_qcend_date";
$tdatarejected_jobfile[".masterListFields"][] = "cr_qc_time";
$tdatarejected_jobfile[".masterListFields"][] = "cr_qc_pc_name";
$tdatarejected_jobfile[".masterListFields"][] = "cr_distribute_date";
$tdatarejected_jobfile[".masterListFields"][] = "cr_notifier_id";
$tdatarejected_jobfile[".masterListFields"][] = "cr_notify_date";
$tdatarejected_jobfile[".masterListFields"][] = "type_of_error";
$tdatarejected_jobfile[".masterListFields"][] = "cr_comment";
$tdatarejected_jobfile[".masterListFields"][] = "screencap";

$tdatarejected_jobfile[".inlineAddFields"] = array();

$tdatarejected_jobfile[".editFields"] = array();
$tdatarejected_jobfile[".editFields"][] = "rejected_jobfile_status_id";
$tdatarejected_jobfile[".editFields"][] = "jobfile_id";
$tdatarejected_jobfile[".editFields"][] = "file_url";
$tdatarejected_jobfile[".editFields"][] = "job_id";
$tdatarejected_jobfile[".editFields"][] = "pdf_id";
$tdatarejected_jobfile[".editFields"][] = "jobfile_note";
$tdatarejected_jobfile[".editFields"][] = "rejector_id";
$tdatarejected_jobfile[".editFields"][] = "reject_date";
$tdatarejected_jobfile[".editFields"][] = "reject_reason";
$tdatarejected_jobfile[".editFields"][] = "cr_designer_id";
$tdatarejected_jobfile[".editFields"][] = "cr_start_date";
$tdatarejected_jobfile[".editFields"][] = "cr_end_date";
$tdatarejected_jobfile[".editFields"][] = "cr_designer_time";
$tdatarejected_jobfile[".editFields"][] = "cr_pc_name";
$tdatarejected_jobfile[".editFields"][] = "cr_qc_id";
$tdatarejected_jobfile[".editFields"][] = "cr_qcstart_date";
$tdatarejected_jobfile[".editFields"][] = "cr_qcend_date";
$tdatarejected_jobfile[".editFields"][] = "cr_qc_time";
$tdatarejected_jobfile[".editFields"][] = "cr_qc_pc_name";
$tdatarejected_jobfile[".editFields"][] = "cr_distribute_date";
$tdatarejected_jobfile[".editFields"][] = "cr_notifier_id";
$tdatarejected_jobfile[".editFields"][] = "cr_notify_date";
$tdatarejected_jobfile[".editFields"][] = "type_of_error";
$tdatarejected_jobfile[".editFields"][] = "cr_comment";
$tdatarejected_jobfile[".editFields"][] = "screencap";

$tdatarejected_jobfile[".inlineEditFields"] = array();

$tdatarejected_jobfile[".exportFields"] = array();
$tdatarejected_jobfile[".exportFields"][] = "rejected_jobfile_id";
$tdatarejected_jobfile[".exportFields"][] = "original_jobfile_id";
$tdatarejected_jobfile[".exportFields"][] = "jobfile_id";
$tdatarejected_jobfile[".exportFields"][] = "rejected_jobfile_status_id";
$tdatarejected_jobfile[".exportFields"][] = "file_url";
$tdatarejected_jobfile[".exportFields"][] = "job_id";
$tdatarejected_jobfile[".exportFields"][] = "pdf_id";
$tdatarejected_jobfile[".exportFields"][] = "jobfile_note";
$tdatarejected_jobfile[".exportFields"][] = "rejector_id";
$tdatarejected_jobfile[".exportFields"][] = "reject_date";
$tdatarejected_jobfile[".exportFields"][] = "reject_reason";
$tdatarejected_jobfile[".exportFields"][] = "original_designer2";
$tdatarejected_jobfile[".exportFields"][] = "original_qc";
$tdatarejected_jobfile[".exportFields"][] = "cr_designer_id";
$tdatarejected_jobfile[".exportFields"][] = "cr_start_date";
$tdatarejected_jobfile[".exportFields"][] = "cr_end_date";
$tdatarejected_jobfile[".exportFields"][] = "cr_designer_time";
$tdatarejected_jobfile[".exportFields"][] = "cr_pc_name";
$tdatarejected_jobfile[".exportFields"][] = "cr_qc_id";
$tdatarejected_jobfile[".exportFields"][] = "cr_qcstart_date";
$tdatarejected_jobfile[".exportFields"][] = "cr_qcend_date";
$tdatarejected_jobfile[".exportFields"][] = "cr_qc_time";
$tdatarejected_jobfile[".exportFields"][] = "cr_qc_pc_name";
$tdatarejected_jobfile[".exportFields"][] = "cr_distribute_date";
$tdatarejected_jobfile[".exportFields"][] = "cr_notifier_id";
$tdatarejected_jobfile[".exportFields"][] = "cr_notify_date";
$tdatarejected_jobfile[".exportFields"][] = "type_of_error";
$tdatarejected_jobfile[".exportFields"][] = "cr_comment";
$tdatarejected_jobfile[".exportFields"][] = "screencap";

$tdatarejected_jobfile[".importFields"] = array();
$tdatarejected_jobfile[".importFields"][] = "rejected_jobfile_id";
$tdatarejected_jobfile[".importFields"][] = "original_jobfile_id";
$tdatarejected_jobfile[".importFields"][] = "jobfile_id";
$tdatarejected_jobfile[".importFields"][] = "rejected_jobfile_status_id";
$tdatarejected_jobfile[".importFields"][] = "file_url";
$tdatarejected_jobfile[".importFields"][] = "job_id";
$tdatarejected_jobfile[".importFields"][] = "pdf_id";
$tdatarejected_jobfile[".importFields"][] = "jobfile_note";
$tdatarejected_jobfile[".importFields"][] = "rejector_id";
$tdatarejected_jobfile[".importFields"][] = "reject_date";
$tdatarejected_jobfile[".importFields"][] = "reject_reason";
$tdatarejected_jobfile[".importFields"][] = "original_designer2";
$tdatarejected_jobfile[".importFields"][] = "original_qc";
$tdatarejected_jobfile[".importFields"][] = "cr_designer_id";
$tdatarejected_jobfile[".importFields"][] = "cr_start_date";
$tdatarejected_jobfile[".importFields"][] = "cr_end_date";
$tdatarejected_jobfile[".importFields"][] = "cr_designer_time";
$tdatarejected_jobfile[".importFields"][] = "cr_pc_name";
$tdatarejected_jobfile[".importFields"][] = "cr_qc_id";
$tdatarejected_jobfile[".importFields"][] = "cr_qcstart_date";
$tdatarejected_jobfile[".importFields"][] = "cr_qcend_date";
$tdatarejected_jobfile[".importFields"][] = "cr_qc_time";
$tdatarejected_jobfile[".importFields"][] = "cr_qc_pc_name";
$tdatarejected_jobfile[".importFields"][] = "cr_distribute_date";
$tdatarejected_jobfile[".importFields"][] = "cr_notifier_id";
$tdatarejected_jobfile[".importFields"][] = "cr_notify_date";
$tdatarejected_jobfile[".importFields"][] = "type_of_error";
$tdatarejected_jobfile[".importFields"][] = "cr_comment";
$tdatarejected_jobfile[".importFields"][] = "screencap";

$tdatarejected_jobfile[".printFields"] = array();
$tdatarejected_jobfile[".printFields"][] = "rejected_jobfile_id";
$tdatarejected_jobfile[".printFields"][] = "original_jobfile_id";
$tdatarejected_jobfile[".printFields"][] = "jobfile_id";
$tdatarejected_jobfile[".printFields"][] = "rejected_jobfile_status_id";
$tdatarejected_jobfile[".printFields"][] = "file_url";
$tdatarejected_jobfile[".printFields"][] = "job_id";
$tdatarejected_jobfile[".printFields"][] = "pdf_id";
$tdatarejected_jobfile[".printFields"][] = "jobfile_note";
$tdatarejected_jobfile[".printFields"][] = "rejector_id";
$tdatarejected_jobfile[".printFields"][] = "reject_date";
$tdatarejected_jobfile[".printFields"][] = "reject_reason";
$tdatarejected_jobfile[".printFields"][] = "original_designer2";
$tdatarejected_jobfile[".printFields"][] = "original_qc";
$tdatarejected_jobfile[".printFields"][] = "cr_designer_id";
$tdatarejected_jobfile[".printFields"][] = "cr_start_date";
$tdatarejected_jobfile[".printFields"][] = "cr_end_date";
$tdatarejected_jobfile[".printFields"][] = "cr_designer_time";
$tdatarejected_jobfile[".printFields"][] = "cr_pc_name";
$tdatarejected_jobfile[".printFields"][] = "cr_qc_id";
$tdatarejected_jobfile[".printFields"][] = "cr_qcstart_date";
$tdatarejected_jobfile[".printFields"][] = "cr_qcend_date";
$tdatarejected_jobfile[".printFields"][] = "cr_qc_time";
$tdatarejected_jobfile[".printFields"][] = "cr_qc_pc_name";
$tdatarejected_jobfile[".printFields"][] = "cr_distribute_date";
$tdatarejected_jobfile[".printFields"][] = "cr_notifier_id";
$tdatarejected_jobfile[".printFields"][] = "cr_notify_date";
$tdatarejected_jobfile[".printFields"][] = "type_of_error";
$tdatarejected_jobfile[".printFields"][] = "cr_comment";
$tdatarejected_jobfile[".printFields"][] = "screencap";

//	rejected_jobfile_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rejected_jobfile_id";
	$fdata["GoodName"] = "rejected_jobfile_id";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","rejected_jobfile_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rejected_jobfile_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile_id";
	
		
		
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

	

	
	$tdatarejected_jobfile["rejected_jobfile_id"] = $fdata;
//	original_jobfile_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "original_jobfile_id";
	$fdata["GoodName"] = "original_jobfile_id";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","original_jobfile_id"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "file_url"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "file_url";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatarejected_jobfile["original_jobfile_id"] = $fdata;
//	jobfile_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "jobfile_id";
	$fdata["GoodName"] = "jobfile_id";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","jobfile_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobfile_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile_id";
	
		
		
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
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "jobfile";
		$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"job_id", 'lookupF'=>"job_id");
	$edata["autoCompleteFields"][] = array('masterF'=>"pdf_id", 'lookupF'=>"project_id");
	$edata["autoCompleteFields"][] = array('masterF'=>"original_designer", 'lookupF'=>"designer_id");
	$edata["autoCompleteFields"][] = array('masterF'=>"original_designer2", 'lookupF'=>"designer2_id");
	$edata["autoCompleteFields"][] = array('masterF'=>"original_qc", 'lookupF'=>"qc_id");
	$edata["LCType"] = 1;
		
		
			
	$edata["LinkField"] = "jobfile_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "jobfile_id";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatarejected_jobfile["jobfile_id"] = $fdata;
//	rejected_jobfile_status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "rejected_jobfile_status_id";
	$fdata["GoodName"] = "rejected_jobfile_status_id";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","rejected_jobfile_status_id"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rejected_jobfile_status_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile_status_id";
	
		
		
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
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "jobstatus";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "jobstatus_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "job_status";
	
		
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
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
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

	

	
	$tdatarejected_jobfile["rejected_jobfile_status_id"] = $fdata;
//	file_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "file_url";
	$fdata["GoodName"] = "file_url";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","file_url"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "file_url"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "file_url";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
								$vdata["ShowIcon"] = true; 
			
		
		
		
		
		
		
		
		
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

	

	
	$tdatarejected_jobfile["file_url"] = $fdata;
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","job_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "job_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "job_id";
	
		
		
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

	

	
	$tdatarejected_jobfile["job_id"] = $fdata;
//	pdf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pdf_id";
	$fdata["GoodName"] = "pdf_id";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","pdf_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf_id";
	
		
		
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
	$edata["LookupTable"] = "pdf";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "pdf_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "pdf_name";
	
		
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

	

	
	$tdatarejected_jobfile["pdf_id"] = $fdata;
//	jobfile_note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "jobfile_note";
	$fdata["GoodName"] = "jobfile_note";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","jobfile_note"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobfile_note"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile_note";
	
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatarejected_jobfile["jobfile_note"] = $fdata;
//	rejector_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "rejector_id";
	$fdata["GoodName"] = "rejector_id";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","rejector_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rejector_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejector_id";
	
		
		
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
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;
		
		
			
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		
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

	

	
	$tdatarejected_jobfile["rejector_id"] = $fdata;
//	reject_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "reject_date";
	$fdata["GoodName"] = "reject_date";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","reject_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reject_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reject_date";
	
		
		
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

	

	
	$tdatarejected_jobfile["reject_date"] = $fdata;
//	reject_reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "reject_reason";
	$fdata["GoodName"] = "reject_reason";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","reject_reason"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reject_reason"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reject_reason";
	
		
		
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

	

	
	$tdatarejected_jobfile["reject_reason"] = $fdata;
//	original_designer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "original_designer";
	$fdata["GoodName"] = "original_designer";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","original_designer"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "cr_notifier_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cr_notifier_id";
	
		
		
				
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
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;
		
		
			
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		
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
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"jobfile_note", 'lookupF'=>"username");
	$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";
	
		
	$edata["LookupOrderBy"] = "username";
	
		
			
		
				
	
	
		
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
	
	
	
	

	

	
	$tdatarejected_jobfile["original_designer"] = $fdata;
//	original_designer2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "original_designer2";
	$fdata["GoodName"] = "original_designer2";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","original_designer2"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_pc_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cr_pc_name";
	
		
		
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
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";
	
		
	$edata["LookupOrderBy"] = "username";
	
		
			
		
				
	
	
		
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

	

	
	$tdatarejected_jobfile["original_designer2"] = $fdata;
//	original_qc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "original_qc";
	$fdata["GoodName"] = "original_qc";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","original_qc"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_qc_pc_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cr_qc_pc_name";
	
		
		
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
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";
	
		
	$edata["LookupOrderBy"] = "username";
	
		
			
		
				
	
	
		
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

	

	
	$tdatarejected_jobfile["original_qc"] = $fdata;
//	cr_designer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "cr_designer_id";
	$fdata["GoodName"] = "cr_designer_id";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","cr_designer_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_designer_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cr_designer_id";
	
		
		
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
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;
		
		
			
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		
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
		$edata["autoCompleteFields"][] = array('masterF'=>"username", 'lookupF'=>"username");
	$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";
	
		
	$edata["LookupOrderBy"] = "username";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 10;
		
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
		$edata["LCType"] = 1;
		
		
			
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		
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

	

	
	$tdatarejected_jobfile["cr_designer_id"] = $fdata;
//	cr_start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "cr_start_date";
	$fdata["GoodName"] = "cr_start_date";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","cr_start_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_start_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cr_start_date";
	
		
		
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

	

	
	$tdatarejected_jobfile["cr_start_date"] = $fdata;
//	cr_end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "cr_end_date";
	$fdata["GoodName"] = "cr_end_date";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","cr_end_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_end_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cr_end_date";
	
		
		
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

	

	
	$tdatarejected_jobfile["cr_end_date"] = $fdata;
//	cr_designer_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "cr_designer_time";
	$fdata["GoodName"] = "cr_designer_time";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","cr_designer_time"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_designer_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cr_designer_time";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);
	
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatarejected_jobfile["cr_designer_time"] = $fdata;
//	cr_pc_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "cr_pc_name";
	$fdata["GoodName"] = "cr_pc_name";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","cr_pc_name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_pc_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cr_pc_name";
	
		
		
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
			$edata["EditParams"].= " maxlength=256";
	
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

	

	
	$tdatarejected_jobfile["cr_pc_name"] = $fdata;
//	cr_qc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "cr_qc_id";
	$fdata["GoodName"] = "cr_qc_id";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","cr_qc_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_qc_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cr_qc_id";
	
		
		
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
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;
		
		
			
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatarejected_jobfile["cr_qc_id"] = $fdata;
//	cr_qcstart_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "cr_qcstart_date";
	$fdata["GoodName"] = "cr_qcstart_date";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","cr_qcstart_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_qcstart_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cr_qcstart_date";
	
		
		
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

	

	
	$tdatarejected_jobfile["cr_qcstart_date"] = $fdata;
//	cr_qcend_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "cr_qcend_date";
	$fdata["GoodName"] = "cr_qcend_date";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","cr_qcend_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_qcend_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cr_qcend_date";
	
		
		
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

	

	
	$tdatarejected_jobfile["cr_qcend_date"] = $fdata;
//	cr_qc_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "cr_qc_time";
	$fdata["GoodName"] = "cr_qc_time";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","cr_qc_time"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_qc_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cr_qc_time";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);
	
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatarejected_jobfile["cr_qc_time"] = $fdata;
//	cr_qc_pc_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "cr_qc_pc_name";
	$fdata["GoodName"] = "cr_qc_pc_name";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","cr_qc_pc_name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_qc_pc_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cr_qc_pc_name";
	
		
		
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

	

	
	$tdatarejected_jobfile["cr_qc_pc_name"] = $fdata;
//	cr_distribute_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "cr_distribute_date";
	$fdata["GoodName"] = "cr_distribute_date";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","cr_distribute_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_distribute_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cr_distribute_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


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

	

	
	$tdatarejected_jobfile["cr_distribute_date"] = $fdata;
//	cr_notifier_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "cr_notifier_id";
	$fdata["GoodName"] = "cr_notifier_id";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","cr_notifier_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_notifier_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cr_notifier_id";
	
		
		
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

	

	
	$tdatarejected_jobfile["cr_notifier_id"] = $fdata;
//	cr_notify_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "cr_notify_date";
	$fdata["GoodName"] = "cr_notify_date";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","cr_notify_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_notify_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cr_notify_date";
	
		
		
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

	

	
	$tdatarejected_jobfile["cr_notify_date"] = $fdata;
//	type_of_error
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "type_of_error";
	$fdata["GoodName"] = "type_of_error";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","type_of_error"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "type_of_error"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "type_of_error";
	
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatarejected_jobfile["type_of_error"] = $fdata;
//	cr_comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "cr_comment";
	$fdata["GoodName"] = "cr_comment";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","cr_comment"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_comment"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cr_comment";
	
		
		
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

	

	
	$tdatarejected_jobfile["cr_comment"] = $fdata;
//	screencap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "screencap";
	$fdata["GoodName"] = "screencap";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile","screencap"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "screencap"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "screencap";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "\\\\192.168.3.1\\screenshots";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "File-based Image");
	
		
		
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 200;
	$vdata["ThumbHeight"] = 200;	
			$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 600;
	
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 2;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 100;
	
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	$fdata["Absolute"] = true;
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatarejected_jobfile["screencap"] = $fdata;

	
$tables_data["rejected_jobfile"]=&$tdatarejected_jobfile;
$field_labels["rejected_jobfile"] = &$fieldLabelsrejected_jobfile;
$fieldToolTips["rejected_jobfile"] = &$fieldToolTipsrejected_jobfile;
$page_titles["rejected_jobfile"] = &$pageTitlesrejected_jobfile;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["rejected_jobfile"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["rejected_jobfile"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_rejected_jobfile()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rejected_jobfile_id,  file_url AS original_jobfile_id,  jobfile_id,  rejected_jobfile_status_id,  file_url,  job_id,  pdf_id,  jobfile_note,  rejector_id,  reject_date,  reject_reason,  cr_notifier_id AS original_designer,  cr_pc_name AS original_designer2,  cr_qc_pc_name AS original_qc,  cr_designer_id,  cr_start_date,  cr_end_date,  cr_designer_time,  cr_pc_name,  cr_qc_id,  cr_qcstart_date,  cr_qcend_date,  cr_qc_time,  cr_qc_pc_name,  cr_distribute_date,  cr_notifier_id,  cr_notify_date,  type_of_error,  cr_comment,  screencap";
$proto0["m_strFrom"] = "FROM rejected_jobfile";
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
	"m_strName" => "rejected_jobfile_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto5["m_sql"] = "rejected_jobfile_id";
$proto5["m_srcTableName"] = "rejected_jobfile";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "file_url",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto7["m_sql"] = "file_url";
$proto7["m_srcTableName"] = "rejected_jobfile";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "original_jobfile_id";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto9["m_sql"] = "jobfile_id";
$proto9["m_srcTableName"] = "rejected_jobfile";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "rejected_jobfile_status_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto11["m_sql"] = "rejected_jobfile_status_id";
$proto11["m_srcTableName"] = "rejected_jobfile";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "file_url",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto13["m_sql"] = "file_url";
$proto13["m_srcTableName"] = "rejected_jobfile";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto15["m_sql"] = "job_id";
$proto15["m_srcTableName"] = "rejected_jobfile";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto17["m_sql"] = "pdf_id";
$proto17["m_srcTableName"] = "rejected_jobfile";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_note",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto19["m_sql"] = "jobfile_note";
$proto19["m_srcTableName"] = "rejected_jobfile";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "rejector_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto21["m_sql"] = "rejector_id";
$proto21["m_srcTableName"] = "rejected_jobfile";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "reject_date",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto23["m_sql"] = "reject_date";
$proto23["m_srcTableName"] = "rejected_jobfile";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "reject_reason",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto25["m_sql"] = "reject_reason";
$proto25["m_srcTableName"] = "rejected_jobfile";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_notifier_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto27["m_sql"] = "cr_notifier_id";
$proto27["m_srcTableName"] = "rejected_jobfile";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "original_designer";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_pc_name",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto29["m_sql"] = "cr_pc_name";
$proto29["m_srcTableName"] = "rejected_jobfile";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "original_designer2";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_qc_pc_name",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto31["m_sql"] = "cr_qc_pc_name";
$proto31["m_srcTableName"] = "rejected_jobfile";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "original_qc";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_designer_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto33["m_sql"] = "cr_designer_id";
$proto33["m_srcTableName"] = "rejected_jobfile";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_start_date",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto35["m_sql"] = "cr_start_date";
$proto35["m_srcTableName"] = "rejected_jobfile";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_end_date",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto37["m_sql"] = "cr_end_date";
$proto37["m_srcTableName"] = "rejected_jobfile";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_designer_time",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto39["m_sql"] = "cr_designer_time";
$proto39["m_srcTableName"] = "rejected_jobfile";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_pc_name",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto41["m_sql"] = "cr_pc_name";
$proto41["m_srcTableName"] = "rejected_jobfile";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_qc_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto43["m_sql"] = "cr_qc_id";
$proto43["m_srcTableName"] = "rejected_jobfile";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_qcstart_date",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto45["m_sql"] = "cr_qcstart_date";
$proto45["m_srcTableName"] = "rejected_jobfile";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_qcend_date",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto47["m_sql"] = "cr_qcend_date";
$proto47["m_srcTableName"] = "rejected_jobfile";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_qc_time",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto49["m_sql"] = "cr_qc_time";
$proto49["m_srcTableName"] = "rejected_jobfile";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_qc_pc_name",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto51["m_sql"] = "cr_qc_pc_name";
$proto51["m_srcTableName"] = "rejected_jobfile";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_distribute_date",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto53["m_sql"] = "cr_distribute_date";
$proto53["m_srcTableName"] = "rejected_jobfile";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_notifier_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto55["m_sql"] = "cr_notifier_id";
$proto55["m_srcTableName"] = "rejected_jobfile";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_notify_date",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto57["m_sql"] = "cr_notify_date";
$proto57["m_srcTableName"] = "rejected_jobfile";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "type_of_error",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto59["m_sql"] = "type_of_error";
$proto59["m_srcTableName"] = "rejected_jobfile";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_comment",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto61["m_sql"] = "cr_comment";
$proto61["m_srcTableName"] = "rejected_jobfile";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "screencap",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "rejected_jobfile"
));

$proto63["m_sql"] = "screencap";
$proto63["m_srcTableName"] = "rejected_jobfile";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto65=array();
$proto65["m_link"] = "SQLL_MAIN";
			$proto66=array();
$proto66["m_strName"] = "rejected_jobfile";
$proto66["m_srcTableName"] = "rejected_jobfile";
$proto66["m_columns"] = array();
$proto66["m_columns"][] = "rejected_jobfile_id";
$proto66["m_columns"][] = "jobfile_id";
$proto66["m_columns"][] = "rejected_jobfile_status_id";
$proto66["m_columns"][] = "file_url";
$proto66["m_columns"][] = "job_id";
$proto66["m_columns"][] = "pdf_id";
$proto66["m_columns"][] = "jobfile_note";
$proto66["m_columns"][] = "rejector_id";
$proto66["m_columns"][] = "reject_date";
$proto66["m_columns"][] = "reject_reason";
$proto66["m_columns"][] = "cr_designer_id";
$proto66["m_columns"][] = "cr_start_date";
$proto66["m_columns"][] = "cr_end_date";
$proto66["m_columns"][] = "cr_designer_time";
$proto66["m_columns"][] = "cr_pc_name";
$proto66["m_columns"][] = "cr_qc_id";
$proto66["m_columns"][] = "cr_qcstart_date";
$proto66["m_columns"][] = "cr_qcend_date";
$proto66["m_columns"][] = "cr_qc_time";
$proto66["m_columns"][] = "cr_qc_pc_name";
$proto66["m_columns"][] = "cr_distribute_date";
$proto66["m_columns"][] = "cr_notifier_id";
$proto66["m_columns"][] = "cr_notify_date";
$proto66["m_columns"][] = "type_of_error";
$proto66["m_columns"][] = "cr_comment";
$proto66["m_columns"][] = "screencap";
$obj = new SQLTable($proto66);

$proto65["m_table"] = $obj;
$proto65["m_sql"] = "rejected_jobfile";
$proto65["m_alias"] = "";
$proto65["m_srcTableName"] = "rejected_jobfile";
$proto67=array();
$proto67["m_sql"] = "";
$proto67["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto67["m_column"]=$obj;
$proto67["m_contained"] = array();
$proto67["m_strCase"] = "";
$proto67["m_havingmode"] = false;
$proto67["m_inBrackets"] = false;
$proto67["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto67);

$proto65["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto65);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="rejected_jobfile";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_rejected_jobfile = createSqlQuery_rejected_jobfile();


	
																														
	
$tdatarejected_jobfile[".sqlquery"] = $queryData_rejected_jobfile;

include_once(getabspath("include/rejected_jobfile_events.php"));
$tableEvents["rejected_jobfile"] = new eventclass_rejected_jobfile;
$tdatarejected_jobfile[".hasEvents"] = true;

?>