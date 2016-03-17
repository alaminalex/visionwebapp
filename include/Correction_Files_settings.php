<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCorrection_Files = array();	
	$tdataCorrection_Files[".truncateText"] = true;
	$tdataCorrection_Files[".NumberOfChars"] = 80; 
	$tdataCorrection_Files[".ShortName"] = "Correction_Files";
	$tdataCorrection_Files[".OwnerID"] = "";
	$tdataCorrection_Files[".OriginalTable"] = "rejected_jobfile";

//	field labels
$fieldLabelsCorrection_Files = array();
$fieldToolTipsCorrection_Files = array();
$pageTitlesCorrection_Files = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCorrection_Files["English"] = array();
	$fieldToolTipsCorrection_Files["English"] = array();
	$pageTitlesCorrection_Files["English"] = array();
	$fieldLabelsCorrection_Files["English"]["jobfile_id"] = "Jobfile Id";
	$fieldToolTipsCorrection_Files["English"]["jobfile_id"] = "";
	$fieldLabelsCorrection_Files["English"]["job_id"] = "Job Id";
	$fieldToolTipsCorrection_Files["English"]["job_id"] = "";
	$fieldLabelsCorrection_Files["English"]["jobfile_note"] = "Jobfile Note";
	$fieldToolTipsCorrection_Files["English"]["jobfile_note"] = "";
	$fieldLabelsCorrection_Files["English"]["rejector_id"] = "Rejector Id";
	$fieldToolTipsCorrection_Files["English"]["rejector_id"] = "";
	$fieldLabelsCorrection_Files["English"]["reject_date"] = "Reject Date";
	$fieldToolTipsCorrection_Files["English"]["reject_date"] = "";
	$fieldLabelsCorrection_Files["English"]["reject_reason"] = "Reject Reason";
	$fieldToolTipsCorrection_Files["English"]["reject_reason"] = "";
	$fieldLabelsCorrection_Files["English"]["pdf_id"] = "Pdf Id";
	$fieldToolTipsCorrection_Files["English"]["pdf_id"] = "";
	$fieldLabelsCorrection_Files["English"]["cr_pc_name"] = "Correction Pc Name";
	$fieldToolTipsCorrection_Files["English"]["cr_pc_name"] = "";
	$fieldLabelsCorrection_Files["English"]["cr_designer_id"] = "Distribute to Designer";
	$fieldToolTipsCorrection_Files["English"]["cr_designer_id"] = "";
	$fieldLabelsCorrection_Files["English"]["cr_qc_id"] = "QC Id";
	$fieldToolTipsCorrection_Files["English"]["cr_qc_id"] = "";
	$fieldLabelsCorrection_Files["English"]["cr_notifier_id"] = "Correction Notifier Id";
	$fieldToolTipsCorrection_Files["English"]["cr_notifier_id"] = "";
	$fieldLabelsCorrection_Files["English"]["cr_start_date"] = "Start Date";
	$fieldToolTipsCorrection_Files["English"]["cr_start_date"] = "";
	$fieldLabelsCorrection_Files["English"]["cr_end_date"] = "End Date";
	$fieldToolTipsCorrection_Files["English"]["cr_end_date"] = "";
	$fieldLabelsCorrection_Files["English"]["cr_designer_time"] = "Designer Time";
	$fieldToolTipsCorrection_Files["English"]["cr_designer_time"] = "";
	$fieldLabelsCorrection_Files["English"]["cr_qcstart_date"] = "QC Start Date";
	$fieldToolTipsCorrection_Files["English"]["cr_qcstart_date"] = "";
	$fieldLabelsCorrection_Files["English"]["cr_qcend_date"] = "QC Send Date";
	$fieldToolTipsCorrection_Files["English"]["cr_qcend_date"] = "";
	$fieldLabelsCorrection_Files["English"]["cr_qc_time"] = "Qc Time";
	$fieldToolTipsCorrection_Files["English"]["cr_qc_time"] = "";
	$fieldLabelsCorrection_Files["English"]["cr_notify_date"] = "Correction Notify Date";
	$fieldToolTipsCorrection_Files["English"]["cr_notify_date"] = "";
	$fieldLabelsCorrection_Files["English"]["type_of_error"] = "Type Of Error";
	$fieldToolTipsCorrection_Files["English"]["type_of_error"] = "";
	$fieldLabelsCorrection_Files["English"]["cr_comment"] = "Correction Comment";
	$fieldToolTipsCorrection_Files["English"]["cr_comment"] = "";
	$fieldLabelsCorrection_Files["English"]["screencap"] = "Screencap";
	$fieldToolTipsCorrection_Files["English"]["screencap"] = "";
	$fieldLabelsCorrection_Files["English"]["rejected_jobfile_id"] = "Rejected Jobfile Id";
	$fieldToolTipsCorrection_Files["English"]["rejected_jobfile_id"] = "";
	$fieldLabelsCorrection_Files["English"]["cr_distribute_date"] = "Correction Distribute Date";
	$fieldToolTipsCorrection_Files["English"]["cr_distribute_date"] = "";
	$fieldLabelsCorrection_Files["English"]["cr_qc_pc_name"] = "Correction Qc Pc Name";
	$fieldToolTipsCorrection_Files["English"]["cr_qc_pc_name"] = "";
	$fieldLabelsCorrection_Files["English"]["rejected_jobfile_status_id"] = "Jobfile Status";
	$fieldToolTipsCorrection_Files["English"]["rejected_jobfile_status_id"] = "";
	$fieldLabelsCorrection_Files["English"]["original_designer"] = "Original Designer";
	$fieldToolTipsCorrection_Files["English"]["original_designer"] = "";
	$fieldLabelsCorrection_Files["English"]["original_designer2"] = "Original Designer2";
	$fieldToolTipsCorrection_Files["English"]["original_designer2"] = "";
	$fieldLabelsCorrection_Files["English"]["original_qc"] = "Original Qc";
	$fieldToolTipsCorrection_Files["English"]["original_qc"] = "";
	$fieldLabelsCorrection_Files["English"]["original_jobfile_id"] = "Original Jobfile Id";
	$fieldToolTipsCorrection_Files["English"]["original_jobfile_id"] = "";
	$fieldLabelsCorrection_Files["English"]["jobfile_file_url"] = "Jobfile File Url";
	$fieldToolTipsCorrection_Files["English"]["jobfile_file_url"] = "";
	$fieldLabelsCorrection_Files["English"]["jobfile_filename"] = "File Name";
	$fieldToolTipsCorrection_Files["English"]["jobfile_filename"] = "";
	if (count($fieldToolTipsCorrection_Files["English"]))
		$tdataCorrection_Files[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCorrection_Files[""] = array();
	$fieldToolTipsCorrection_Files[""] = array();
	$pageTitlesCorrection_Files[""] = array();
	if (count($fieldToolTipsCorrection_Files[""]))
		$tdataCorrection_Files[".isUseToolTips"] = true;
}
	
	
	$tdataCorrection_Files[".NCSearch"] = true;



$tdataCorrection_Files[".shortTableName"] = "Correction_Files";
$tdataCorrection_Files[".nSecOptions"] = 0;
$tdataCorrection_Files[".recsPerRowList"] = 1;
$tdataCorrection_Files[".recsPerRowPrint"] = 1;
$tdataCorrection_Files[".mainTableOwnerID"] = "";
$tdataCorrection_Files[".moveNext"] = 1;
$tdataCorrection_Files[".entityType"] = 1;

$tdataCorrection_Files[".strOriginalTableName"] = "rejected_jobfile";




$tdataCorrection_Files[".showAddInPopup"] = false;

$tdataCorrection_Files[".showEditInPopup"] = false;

$tdataCorrection_Files[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCorrection_Files[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCorrection_Files[".fieldsForRegister"] = array();

$tdataCorrection_Files[".listAjax"] = false;

	$tdataCorrection_Files[".audit"] = false;

	$tdataCorrection_Files[".locking"] = false;

$tdataCorrection_Files[".edit"] = true;
$tdataCorrection_Files[".afterEditAction"] = 1;
$tdataCorrection_Files[".closePopupAfterEdit"] = 1;
$tdataCorrection_Files[".afterEditActionDetTable"] = "";

$tdataCorrection_Files[".add"] = true;
$tdataCorrection_Files[".afterAddAction"] = 0;
$tdataCorrection_Files[".closePopupAfterAdd"] = 1;
$tdataCorrection_Files[".afterAddActionDetTable"] = "";

$tdataCorrection_Files[".list"] = true;

$tdataCorrection_Files[".view"] = true;

$tdataCorrection_Files[".import"] = true;

$tdataCorrection_Files[".exportTo"] = true;

$tdataCorrection_Files[".printFriendly"] = true;

$tdataCorrection_Files[".delete"] = true;

$tdataCorrection_Files[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataCorrection_Files[".searchSaving"] = false;
//

$tdataCorrection_Files[".showSearchPanel"] = true;
		$tdataCorrection_Files[".flexibleSearch"] = true;		

if (isMobile())
	$tdataCorrection_Files[".isUseAjaxSuggest"] = false;
else 
	$tdataCorrection_Files[".isUseAjaxSuggest"] = true;

$tdataCorrection_Files[".rowHighlite"] = true;


																																																																																															
			
																																																	$tdataCorrection_Files[".isUsebuttonHandlers"] = true;

$tdataCorrection_Files[".addPageEvents"] = true;

// use timepicker for search panel
$tdataCorrection_Files[".isUseTimeForSearch"] = false;





$tdataCorrection_Files[".allSearchFields"] = array();
$tdataCorrection_Files[".filterFields"] = array();
$tdataCorrection_Files[".requiredSearchFields"] = array();

$tdataCorrection_Files[".allSearchFields"][] = "rejected_jobfile_id";
	$tdataCorrection_Files[".allSearchFields"][] = "original_jobfile_id";
	$tdataCorrection_Files[".allSearchFields"][] = "jobfile_id";
	$tdataCorrection_Files[".allSearchFields"][] = "rejected_jobfile_status_id";
	$tdataCorrection_Files[".allSearchFields"][] = "job_id";
	$tdataCorrection_Files[".allSearchFields"][] = "pdf_id";
	$tdataCorrection_Files[".allSearchFields"][] = "jobfile_note";
	$tdataCorrection_Files[".allSearchFields"][] = "rejector_id";
	$tdataCorrection_Files[".allSearchFields"][] = "reject_date";
	$tdataCorrection_Files[".allSearchFields"][] = "reject_reason";
	$tdataCorrection_Files[".allSearchFields"][] = "original_designer2";
	$tdataCorrection_Files[".allSearchFields"][] = "original_qc";
	$tdataCorrection_Files[".allSearchFields"][] = "cr_designer_id";
	$tdataCorrection_Files[".allSearchFields"][] = "cr_start_date";
	$tdataCorrection_Files[".allSearchFields"][] = "cr_end_date";
	$tdataCorrection_Files[".allSearchFields"][] = "cr_designer_time";
	$tdataCorrection_Files[".allSearchFields"][] = "cr_pc_name";
	$tdataCorrection_Files[".allSearchFields"][] = "cr_qc_id";
	$tdataCorrection_Files[".allSearchFields"][] = "cr_qcstart_date";
	$tdataCorrection_Files[".allSearchFields"][] = "cr_qcend_date";
	$tdataCorrection_Files[".allSearchFields"][] = "cr_qc_time";
	$tdataCorrection_Files[".allSearchFields"][] = "cr_qc_pc_name";
	$tdataCorrection_Files[".allSearchFields"][] = "cr_distribute_date";
	$tdataCorrection_Files[".allSearchFields"][] = "cr_notifier_id";
	$tdataCorrection_Files[".allSearchFields"][] = "cr_notify_date";
	$tdataCorrection_Files[".allSearchFields"][] = "type_of_error";
	$tdataCorrection_Files[".allSearchFields"][] = "cr_comment";
	$tdataCorrection_Files[".allSearchFields"][] = "screencap";
	$tdataCorrection_Files[".allSearchFields"][] = "jobfile_file_url";
	$tdataCorrection_Files[".allSearchFields"][] = "jobfile_filename";
	

$tdataCorrection_Files[".googleLikeFields"] = array();
$tdataCorrection_Files[".googleLikeFields"][] = "rejected_jobfile_id";
$tdataCorrection_Files[".googleLikeFields"][] = "original_jobfile_id";
$tdataCorrection_Files[".googleLikeFields"][] = "jobfile_id";
$tdataCorrection_Files[".googleLikeFields"][] = "rejected_jobfile_status_id";
$tdataCorrection_Files[".googleLikeFields"][] = "job_id";
$tdataCorrection_Files[".googleLikeFields"][] = "pdf_id";
$tdataCorrection_Files[".googleLikeFields"][] = "jobfile_note";
$tdataCorrection_Files[".googleLikeFields"][] = "rejector_id";
$tdataCorrection_Files[".googleLikeFields"][] = "reject_date";
$tdataCorrection_Files[".googleLikeFields"][] = "reject_reason";
$tdataCorrection_Files[".googleLikeFields"][] = "original_designer";
$tdataCorrection_Files[".googleLikeFields"][] = "original_designer2";
$tdataCorrection_Files[".googleLikeFields"][] = "original_qc";
$tdataCorrection_Files[".googleLikeFields"][] = "cr_designer_id";
$tdataCorrection_Files[".googleLikeFields"][] = "cr_start_date";
$tdataCorrection_Files[".googleLikeFields"][] = "cr_end_date";
$tdataCorrection_Files[".googleLikeFields"][] = "cr_designer_time";
$tdataCorrection_Files[".googleLikeFields"][] = "cr_pc_name";
$tdataCorrection_Files[".googleLikeFields"][] = "cr_qc_id";
$tdataCorrection_Files[".googleLikeFields"][] = "cr_qcstart_date";
$tdataCorrection_Files[".googleLikeFields"][] = "cr_qcend_date";
$tdataCorrection_Files[".googleLikeFields"][] = "cr_qc_time";
$tdataCorrection_Files[".googleLikeFields"][] = "cr_qc_pc_name";
$tdataCorrection_Files[".googleLikeFields"][] = "cr_distribute_date";
$tdataCorrection_Files[".googleLikeFields"][] = "cr_notifier_id";
$tdataCorrection_Files[".googleLikeFields"][] = "cr_notify_date";
$tdataCorrection_Files[".googleLikeFields"][] = "type_of_error";
$tdataCorrection_Files[".googleLikeFields"][] = "cr_comment";
$tdataCorrection_Files[".googleLikeFields"][] = "screencap";
$tdataCorrection_Files[".googleLikeFields"][] = "jobfile_file_url";
$tdataCorrection_Files[".googleLikeFields"][] = "jobfile_filename";


$tdataCorrection_Files[".advSearchFields"] = array();
$tdataCorrection_Files[".advSearchFields"][] = "rejected_jobfile_id";
$tdataCorrection_Files[".advSearchFields"][] = "original_jobfile_id";
$tdataCorrection_Files[".advSearchFields"][] = "jobfile_id";
$tdataCorrection_Files[".advSearchFields"][] = "rejected_jobfile_status_id";
$tdataCorrection_Files[".advSearchFields"][] = "job_id";
$tdataCorrection_Files[".advSearchFields"][] = "pdf_id";
$tdataCorrection_Files[".advSearchFields"][] = "jobfile_note";
$tdataCorrection_Files[".advSearchFields"][] = "rejector_id";
$tdataCorrection_Files[".advSearchFields"][] = "reject_date";
$tdataCorrection_Files[".advSearchFields"][] = "reject_reason";
$tdataCorrection_Files[".advSearchFields"][] = "original_designer2";
$tdataCorrection_Files[".advSearchFields"][] = "original_qc";
$tdataCorrection_Files[".advSearchFields"][] = "cr_designer_id";
$tdataCorrection_Files[".advSearchFields"][] = "cr_start_date";
$tdataCorrection_Files[".advSearchFields"][] = "cr_end_date";
$tdataCorrection_Files[".advSearchFields"][] = "cr_designer_time";
$tdataCorrection_Files[".advSearchFields"][] = "cr_pc_name";
$tdataCorrection_Files[".advSearchFields"][] = "cr_qc_id";
$tdataCorrection_Files[".advSearchFields"][] = "cr_qcstart_date";
$tdataCorrection_Files[".advSearchFields"][] = "cr_qcend_date";
$tdataCorrection_Files[".advSearchFields"][] = "cr_qc_time";
$tdataCorrection_Files[".advSearchFields"][] = "cr_qc_pc_name";
$tdataCorrection_Files[".advSearchFields"][] = "cr_distribute_date";
$tdataCorrection_Files[".advSearchFields"][] = "cr_notifier_id";
$tdataCorrection_Files[".advSearchFields"][] = "cr_notify_date";
$tdataCorrection_Files[".advSearchFields"][] = "type_of_error";
$tdataCorrection_Files[".advSearchFields"][] = "cr_comment";
$tdataCorrection_Files[".advSearchFields"][] = "screencap";
$tdataCorrection_Files[".advSearchFields"][] = "jobfile_file_url";
$tdataCorrection_Files[".advSearchFields"][] = "jobfile_filename";

$tdataCorrection_Files[".tableType"] = "list";

$tdataCorrection_Files[".printerPageOrientation"] = 0;
$tdataCorrection_Files[".nPrinterPageScale"] = 100;

$tdataCorrection_Files[".nPrinterSplitRecords"] = 40;

$tdataCorrection_Files[".nPrinterPDFSplitRecords"] = 40;



$tdataCorrection_Files[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataCorrection_Files[".pageSize"] = 20;

$tdataCorrection_Files[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY rejected_jobfile.reject_date DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCorrection_Files[".strOrderBy"] = $tstrOrderBy;

$tdataCorrection_Files[".orderindexes"] = array();
$tdataCorrection_Files[".orderindexes"][] = array(9, (0 ? "ASC" : "DESC"), "rejected_jobfile.reject_date");

$tdataCorrection_Files[".sqlHead"] = "SELECT rejected_jobfile.rejected_jobfile_id,  rejected_jobfile.file_url AS original_jobfile_id,  rejected_jobfile.jobfile_id,  rejected_jobfile.rejected_jobfile_status_id,  rejected_jobfile.job_id,  rejected_jobfile.pdf_id,  rejected_jobfile.jobfile_note,  rejected_jobfile.rejector_id,  rejected_jobfile.reject_date,  rejected_jobfile.reject_reason,  rejected_jobfile.cr_notifier_id AS original_designer,  rejected_jobfile.cr_pc_name AS original_designer2,  rejected_jobfile.cr_qc_pc_name AS original_qc,  rejected_jobfile.cr_designer_id,  rejected_jobfile.cr_start_date,  rejected_jobfile.cr_end_date,  rejected_jobfile.cr_designer_time,  rejected_jobfile.cr_pc_name,  rejected_jobfile.cr_qc_id,  rejected_jobfile.cr_qcstart_date,  rejected_jobfile.cr_qcend_date,  rejected_jobfile.cr_qc_time,  rejected_jobfile.cr_qc_pc_name,  rejected_jobfile.cr_distribute_date,  rejected_jobfile.cr_notifier_id,  rejected_jobfile.cr_notify_date,  rejected_jobfile.type_of_error,  rejected_jobfile.cr_comment,  rejected_jobfile.screencap,  jobfile.file_url AS jobfile_file_url,  jobfile.filename AS jobfile_filename";
$tdataCorrection_Files[".sqlFrom"] = "FROM rejected_jobfile  LEFT OUTER JOIN jobfile ON rejected_jobfile.jobfile_id = jobfile.jobfile_id";
$tdataCorrection_Files[".sqlWhereExpr"] = "";
$tdataCorrection_Files[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCorrection_Files[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCorrection_Files[".arrGroupsPerPage"] = $arrGPP;

$tdataCorrection_Files[".highlightSearchResults"] = true;

$tableKeysCorrection_Files = array();
$tableKeysCorrection_Files[] = "jobfile_id";
$tdataCorrection_Files[".Keys"] = $tableKeysCorrection_Files;

$tdataCorrection_Files[".listFields"] = array();
$tdataCorrection_Files[".listFields"][] = "job_id";
$tdataCorrection_Files[".listFields"][] = "jobfile_file_url";
$tdataCorrection_Files[".listFields"][] = "jobfile_filename";
$tdataCorrection_Files[".listFields"][] = "screencap";
$tdataCorrection_Files[".listFields"][] = "rejected_jobfile_id";
$tdataCorrection_Files[".listFields"][] = "jobfile_id";
$tdataCorrection_Files[".listFields"][] = "rejected_jobfile_status_id";
$tdataCorrection_Files[".listFields"][] = "pdf_id";
$tdataCorrection_Files[".listFields"][] = "jobfile_note";
$tdataCorrection_Files[".listFields"][] = "rejector_id";
$tdataCorrection_Files[".listFields"][] = "reject_date";
$tdataCorrection_Files[".listFields"][] = "reject_reason";
$tdataCorrection_Files[".listFields"][] = "cr_designer_id";
$tdataCorrection_Files[".listFields"][] = "cr_start_date";
$tdataCorrection_Files[".listFields"][] = "cr_end_date";
$tdataCorrection_Files[".listFields"][] = "cr_designer_time";
$tdataCorrection_Files[".listFields"][] = "cr_pc_name";
$tdataCorrection_Files[".listFields"][] = "cr_qc_id";
$tdataCorrection_Files[".listFields"][] = "cr_qcstart_date";
$tdataCorrection_Files[".listFields"][] = "cr_qcend_date";
$tdataCorrection_Files[".listFields"][] = "cr_qc_time";
$tdataCorrection_Files[".listFields"][] = "cr_qc_pc_name";
$tdataCorrection_Files[".listFields"][] = "cr_distribute_date";
$tdataCorrection_Files[".listFields"][] = "cr_notifier_id";
$tdataCorrection_Files[".listFields"][] = "cr_notify_date";
$tdataCorrection_Files[".listFields"][] = "type_of_error";
$tdataCorrection_Files[".listFields"][] = "cr_comment";

$tdataCorrection_Files[".hideMobileList"] = array();


$tdataCorrection_Files[".viewFields"] = array();
$tdataCorrection_Files[".viewFields"][] = "original_jobfile_id";
$tdataCorrection_Files[".viewFields"][] = "jobfile_file_url";
$tdataCorrection_Files[".viewFields"][] = "jobfile_filename";
$tdataCorrection_Files[".viewFields"][] = "original_designer2";
$tdataCorrection_Files[".viewFields"][] = "original_qc";
$tdataCorrection_Files[".viewFields"][] = "rejected_jobfile_id";
$tdataCorrection_Files[".viewFields"][] = "rejected_jobfile_status_id";
$tdataCorrection_Files[".viewFields"][] = "jobfile_id";
$tdataCorrection_Files[".viewFields"][] = "job_id";
$tdataCorrection_Files[".viewFields"][] = "pdf_id";
$tdataCorrection_Files[".viewFields"][] = "jobfile_note";
$tdataCorrection_Files[".viewFields"][] = "rejector_id";
$tdataCorrection_Files[".viewFields"][] = "reject_date";
$tdataCorrection_Files[".viewFields"][] = "reject_reason";
$tdataCorrection_Files[".viewFields"][] = "cr_designer_id";
$tdataCorrection_Files[".viewFields"][] = "cr_start_date";
$tdataCorrection_Files[".viewFields"][] = "cr_end_date";
$tdataCorrection_Files[".viewFields"][] = "cr_designer_time";
$tdataCorrection_Files[".viewFields"][] = "cr_pc_name";
$tdataCorrection_Files[".viewFields"][] = "cr_qc_id";
$tdataCorrection_Files[".viewFields"][] = "cr_qcstart_date";
$tdataCorrection_Files[".viewFields"][] = "cr_qcend_date";
$tdataCorrection_Files[".viewFields"][] = "cr_qc_time";
$tdataCorrection_Files[".viewFields"][] = "cr_qc_pc_name";
$tdataCorrection_Files[".viewFields"][] = "cr_distribute_date";
$tdataCorrection_Files[".viewFields"][] = "cr_notifier_id";
$tdataCorrection_Files[".viewFields"][] = "cr_notify_date";
$tdataCorrection_Files[".viewFields"][] = "type_of_error";
$tdataCorrection_Files[".viewFields"][] = "cr_comment";
$tdataCorrection_Files[".viewFields"][] = "screencap";

$tdataCorrection_Files[".addFields"] = array();
$tdataCorrection_Files[".addFields"][] = "rejected_jobfile_status_id";
$tdataCorrection_Files[".addFields"][] = "job_id";
$tdataCorrection_Files[".addFields"][] = "pdf_id";
$tdataCorrection_Files[".addFields"][] = "rejector_id";
$tdataCorrection_Files[".addFields"][] = "reject_date";
$tdataCorrection_Files[".addFields"][] = "original_designer";
$tdataCorrection_Files[".addFields"][] = "original_designer2";
$tdataCorrection_Files[".addFields"][] = "original_qc";
$tdataCorrection_Files[".addFields"][] = "original_jobfile_id";
$tdataCorrection_Files[".addFields"][] = "jobfile_id";
$tdataCorrection_Files[".addFields"][] = "type_of_error";
$tdataCorrection_Files[".addFields"][] = "reject_reason";
$tdataCorrection_Files[".addFields"][] = "screencap";
$tdataCorrection_Files[".addFields"][] = "cr_designer_id";
$tdataCorrection_Files[".addFields"][] = "cr_comment";

$tdataCorrection_Files[".masterListFields"] = array();
$tdataCorrection_Files[".masterListFields"][] = "rejected_jobfile_id";
$tdataCorrection_Files[".masterListFields"][] = "original_jobfile_id";
$tdataCorrection_Files[".masterListFields"][] = "jobfile_id";
$tdataCorrection_Files[".masterListFields"][] = "rejected_jobfile_status_id";
$tdataCorrection_Files[".masterListFields"][] = "job_id";
$tdataCorrection_Files[".masterListFields"][] = "pdf_id";
$tdataCorrection_Files[".masterListFields"][] = "jobfile_note";
$tdataCorrection_Files[".masterListFields"][] = "rejector_id";
$tdataCorrection_Files[".masterListFields"][] = "reject_date";
$tdataCorrection_Files[".masterListFields"][] = "reject_reason";
$tdataCorrection_Files[".masterListFields"][] = "original_designer";
$tdataCorrection_Files[".masterListFields"][] = "original_designer2";
$tdataCorrection_Files[".masterListFields"][] = "original_qc";
$tdataCorrection_Files[".masterListFields"][] = "cr_designer_id";
$tdataCorrection_Files[".masterListFields"][] = "cr_start_date";
$tdataCorrection_Files[".masterListFields"][] = "cr_end_date";
$tdataCorrection_Files[".masterListFields"][] = "cr_designer_time";
$tdataCorrection_Files[".masterListFields"][] = "cr_pc_name";
$tdataCorrection_Files[".masterListFields"][] = "cr_qc_id";
$tdataCorrection_Files[".masterListFields"][] = "cr_qcstart_date";
$tdataCorrection_Files[".masterListFields"][] = "cr_qcend_date";
$tdataCorrection_Files[".masterListFields"][] = "cr_qc_time";
$tdataCorrection_Files[".masterListFields"][] = "cr_qc_pc_name";
$tdataCorrection_Files[".masterListFields"][] = "cr_distribute_date";
$tdataCorrection_Files[".masterListFields"][] = "cr_notifier_id";
$tdataCorrection_Files[".masterListFields"][] = "cr_notify_date";
$tdataCorrection_Files[".masterListFields"][] = "type_of_error";
$tdataCorrection_Files[".masterListFields"][] = "cr_comment";
$tdataCorrection_Files[".masterListFields"][] = "screencap";
$tdataCorrection_Files[".masterListFields"][] = "jobfile_file_url";
$tdataCorrection_Files[".masterListFields"][] = "jobfile_filename";

$tdataCorrection_Files[".inlineAddFields"] = array();

$tdataCorrection_Files[".editFields"] = array();
$tdataCorrection_Files[".editFields"][] = "rejected_jobfile_status_id";
$tdataCorrection_Files[".editFields"][] = "jobfile_id";
$tdataCorrection_Files[".editFields"][] = "job_id";
$tdataCorrection_Files[".editFields"][] = "pdf_id";
$tdataCorrection_Files[".editFields"][] = "jobfile_note";
$tdataCorrection_Files[".editFields"][] = "rejector_id";
$tdataCorrection_Files[".editFields"][] = "reject_date";
$tdataCorrection_Files[".editFields"][] = "reject_reason";
$tdataCorrection_Files[".editFields"][] = "cr_designer_id";
$tdataCorrection_Files[".editFields"][] = "cr_start_date";
$tdataCorrection_Files[".editFields"][] = "cr_end_date";
$tdataCorrection_Files[".editFields"][] = "cr_designer_time";
$tdataCorrection_Files[".editFields"][] = "cr_pc_name";
$tdataCorrection_Files[".editFields"][] = "cr_qc_id";
$tdataCorrection_Files[".editFields"][] = "cr_qcstart_date";
$tdataCorrection_Files[".editFields"][] = "cr_qcend_date";
$tdataCorrection_Files[".editFields"][] = "cr_qc_time";
$tdataCorrection_Files[".editFields"][] = "cr_qc_pc_name";
$tdataCorrection_Files[".editFields"][] = "cr_distribute_date";
$tdataCorrection_Files[".editFields"][] = "cr_notifier_id";
$tdataCorrection_Files[".editFields"][] = "cr_notify_date";
$tdataCorrection_Files[".editFields"][] = "type_of_error";
$tdataCorrection_Files[".editFields"][] = "cr_comment";
$tdataCorrection_Files[".editFields"][] = "screencap";

$tdataCorrection_Files[".inlineEditFields"] = array();

$tdataCorrection_Files[".exportFields"] = array();
$tdataCorrection_Files[".exportFields"][] = "rejected_jobfile_id";
$tdataCorrection_Files[".exportFields"][] = "original_jobfile_id";
$tdataCorrection_Files[".exportFields"][] = "jobfile_id";
$tdataCorrection_Files[".exportFields"][] = "rejected_jobfile_status_id";
$tdataCorrection_Files[".exportFields"][] = "job_id";
$tdataCorrection_Files[".exportFields"][] = "pdf_id";
$tdataCorrection_Files[".exportFields"][] = "jobfile_note";
$tdataCorrection_Files[".exportFields"][] = "rejector_id";
$tdataCorrection_Files[".exportFields"][] = "reject_date";
$tdataCorrection_Files[".exportFields"][] = "reject_reason";
$tdataCorrection_Files[".exportFields"][] = "original_designer2";
$tdataCorrection_Files[".exportFields"][] = "original_qc";
$tdataCorrection_Files[".exportFields"][] = "cr_designer_id";
$tdataCorrection_Files[".exportFields"][] = "cr_start_date";
$tdataCorrection_Files[".exportFields"][] = "cr_end_date";
$tdataCorrection_Files[".exportFields"][] = "cr_designer_time";
$tdataCorrection_Files[".exportFields"][] = "cr_pc_name";
$tdataCorrection_Files[".exportFields"][] = "cr_qc_id";
$tdataCorrection_Files[".exportFields"][] = "cr_qcstart_date";
$tdataCorrection_Files[".exportFields"][] = "cr_qcend_date";
$tdataCorrection_Files[".exportFields"][] = "cr_qc_time";
$tdataCorrection_Files[".exportFields"][] = "cr_qc_pc_name";
$tdataCorrection_Files[".exportFields"][] = "cr_distribute_date";
$tdataCorrection_Files[".exportFields"][] = "cr_notifier_id";
$tdataCorrection_Files[".exportFields"][] = "cr_notify_date";
$tdataCorrection_Files[".exportFields"][] = "type_of_error";
$tdataCorrection_Files[".exportFields"][] = "cr_comment";
$tdataCorrection_Files[".exportFields"][] = "screencap";
$tdataCorrection_Files[".exportFields"][] = "jobfile_file_url";
$tdataCorrection_Files[".exportFields"][] = "jobfile_filename";

$tdataCorrection_Files[".importFields"] = array();
$tdataCorrection_Files[".importFields"][] = "rejected_jobfile_id";
$tdataCorrection_Files[".importFields"][] = "original_jobfile_id";
$tdataCorrection_Files[".importFields"][] = "jobfile_id";
$tdataCorrection_Files[".importFields"][] = "rejected_jobfile_status_id";
$tdataCorrection_Files[".importFields"][] = "job_id";
$tdataCorrection_Files[".importFields"][] = "pdf_id";
$tdataCorrection_Files[".importFields"][] = "jobfile_note";
$tdataCorrection_Files[".importFields"][] = "rejector_id";
$tdataCorrection_Files[".importFields"][] = "reject_date";
$tdataCorrection_Files[".importFields"][] = "reject_reason";
$tdataCorrection_Files[".importFields"][] = "original_designer2";
$tdataCorrection_Files[".importFields"][] = "original_qc";
$tdataCorrection_Files[".importFields"][] = "cr_designer_id";
$tdataCorrection_Files[".importFields"][] = "cr_start_date";
$tdataCorrection_Files[".importFields"][] = "cr_end_date";
$tdataCorrection_Files[".importFields"][] = "cr_designer_time";
$tdataCorrection_Files[".importFields"][] = "cr_pc_name";
$tdataCorrection_Files[".importFields"][] = "cr_qc_id";
$tdataCorrection_Files[".importFields"][] = "cr_qcstart_date";
$tdataCorrection_Files[".importFields"][] = "cr_qcend_date";
$tdataCorrection_Files[".importFields"][] = "cr_qc_time";
$tdataCorrection_Files[".importFields"][] = "cr_qc_pc_name";
$tdataCorrection_Files[".importFields"][] = "cr_distribute_date";
$tdataCorrection_Files[".importFields"][] = "cr_notifier_id";
$tdataCorrection_Files[".importFields"][] = "cr_notify_date";
$tdataCorrection_Files[".importFields"][] = "type_of_error";
$tdataCorrection_Files[".importFields"][] = "cr_comment";
$tdataCorrection_Files[".importFields"][] = "screencap";
$tdataCorrection_Files[".importFields"][] = "jobfile_file_url";
$tdataCorrection_Files[".importFields"][] = "jobfile_filename";

$tdataCorrection_Files[".printFields"] = array();
$tdataCorrection_Files[".printFields"][] = "rejected_jobfile_id";
$tdataCorrection_Files[".printFields"][] = "original_jobfile_id";
$tdataCorrection_Files[".printFields"][] = "jobfile_id";
$tdataCorrection_Files[".printFields"][] = "rejected_jobfile_status_id";
$tdataCorrection_Files[".printFields"][] = "job_id";
$tdataCorrection_Files[".printFields"][] = "pdf_id";
$tdataCorrection_Files[".printFields"][] = "jobfile_note";
$tdataCorrection_Files[".printFields"][] = "rejector_id";
$tdataCorrection_Files[".printFields"][] = "reject_date";
$tdataCorrection_Files[".printFields"][] = "reject_reason";
$tdataCorrection_Files[".printFields"][] = "original_designer2";
$tdataCorrection_Files[".printFields"][] = "original_qc";
$tdataCorrection_Files[".printFields"][] = "cr_designer_id";
$tdataCorrection_Files[".printFields"][] = "cr_start_date";
$tdataCorrection_Files[".printFields"][] = "cr_end_date";
$tdataCorrection_Files[".printFields"][] = "cr_designer_time";
$tdataCorrection_Files[".printFields"][] = "cr_pc_name";
$tdataCorrection_Files[".printFields"][] = "cr_qc_id";
$tdataCorrection_Files[".printFields"][] = "cr_qcstart_date";
$tdataCorrection_Files[".printFields"][] = "cr_qcend_date";
$tdataCorrection_Files[".printFields"][] = "cr_qc_time";
$tdataCorrection_Files[".printFields"][] = "cr_qc_pc_name";
$tdataCorrection_Files[".printFields"][] = "cr_distribute_date";
$tdataCorrection_Files[".printFields"][] = "cr_notifier_id";
$tdataCorrection_Files[".printFields"][] = "cr_notify_date";
$tdataCorrection_Files[".printFields"][] = "type_of_error";
$tdataCorrection_Files[".printFields"][] = "cr_comment";
$tdataCorrection_Files[".printFields"][] = "screencap";
$tdataCorrection_Files[".printFields"][] = "jobfile_file_url";
$tdataCorrection_Files[".printFields"][] = "jobfile_filename";

//	rejected_jobfile_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rejected_jobfile_id";
	$fdata["GoodName"] = "rejected_jobfile_id";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","rejected_jobfile_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rejected_jobfile_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile.rejected_jobfile_id";
	
		
		
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

	

	
	$tdataCorrection_Files["rejected_jobfile_id"] = $fdata;
//	original_jobfile_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "original_jobfile_id";
	$fdata["GoodName"] = "original_jobfile_id";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","original_jobfile_id"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "file_url"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile.file_url";
	
		
		
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

	

	
	$tdataCorrection_Files["original_jobfile_id"] = $fdata;
//	jobfile_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "jobfile_id";
	$fdata["GoodName"] = "jobfile_id";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","jobfile_id"); 
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
	$fdata["FullName"] = "rejected_jobfile.jobfile_id";
	
		
		
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
	$edata["autoCompleteFields"][] = array('masterF'=>"jobfile_note", 'lookupF'=>"jobfile_note");
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

	

	
	$tdataCorrection_Files["jobfile_id"] = $fdata;
//	rejected_jobfile_status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "rejected_jobfile_status_id";
	$fdata["GoodName"] = "rejected_jobfile_status_id";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","rejected_jobfile_status_id"); 
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
	$fdata["FullName"] = "rejected_jobfile.rejected_jobfile_status_id";
	
		
		
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

	

	
	$tdataCorrection_Files["rejected_jobfile_status_id"] = $fdata;
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","job_id"); 
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
	$fdata["FullName"] = "rejected_jobfile.job_id";
	
		
		
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

	

	
	$tdataCorrection_Files["job_id"] = $fdata;
//	pdf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pdf_id";
	$fdata["GoodName"] = "pdf_id";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","pdf_id"); 
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
	$fdata["FullName"] = "rejected_jobfile.pdf_id";
	
		
		
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

	

	
	$tdataCorrection_Files["pdf_id"] = $fdata;
//	jobfile_note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "jobfile_note";
	$fdata["GoodName"] = "jobfile_note";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","jobfile_note"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobfile_note"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile.jobfile_note";
	
		
		
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

	

	
	$tdataCorrection_Files["jobfile_note"] = $fdata;
//	rejector_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "rejector_id";
	$fdata["GoodName"] = "rejector_id";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","rejector_id"); 
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
	$fdata["FullName"] = "rejected_jobfile.rejector_id";
	
		
		
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

	

	
	$tdataCorrection_Files["rejector_id"] = $fdata;
//	reject_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "reject_date";
	$fdata["GoodName"] = "reject_date";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","reject_date"); 
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
	$fdata["FullName"] = "rejected_jobfile.reject_date";
	
		
		
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

	

	
	$tdataCorrection_Files["reject_date"] = $fdata;
//	reject_reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "reject_reason";
	$fdata["GoodName"] = "reject_reason";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","reject_reason"); 
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
	$fdata["FullName"] = "rejected_jobfile.reject_reason";
	
		
		
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

	

	
	$tdataCorrection_Files["reject_reason"] = $fdata;
//	original_designer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "original_designer";
	$fdata["GoodName"] = "original_designer";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","original_designer"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "cr_notifier_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile.cr_notifier_id";
	
		
		
				
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
	
	
	
	

	

	
	$tdataCorrection_Files["original_designer"] = $fdata;
//	original_designer2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "original_designer2";
	$fdata["GoodName"] = "original_designer2";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","original_designer2"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_pc_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile.cr_pc_name";
	
		
		
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

	

	
	$tdataCorrection_Files["original_designer2"] = $fdata;
//	original_qc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "original_qc";
	$fdata["GoodName"] = "original_qc";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","original_qc"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_qc_pc_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile.cr_qc_pc_name";
	
		
		
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

	

	
	$tdataCorrection_Files["original_qc"] = $fdata;
//	cr_designer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "cr_designer_id";
	$fdata["GoodName"] = "cr_designer_id";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","cr_designer_id"); 
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
	$fdata["FullName"] = "rejected_jobfile.cr_designer_id";
	
		
		
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
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
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

	

	
	$tdataCorrection_Files["cr_designer_id"] = $fdata;
//	cr_start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "cr_start_date";
	$fdata["GoodName"] = "cr_start_date";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","cr_start_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_start_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile.cr_start_date";
	
		
		
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

	

	
	$tdataCorrection_Files["cr_start_date"] = $fdata;
//	cr_end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "cr_end_date";
	$fdata["GoodName"] = "cr_end_date";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","cr_end_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_end_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile.cr_end_date";
	
		
		
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

	

	
	$tdataCorrection_Files["cr_end_date"] = $fdata;
//	cr_designer_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "cr_designer_time";
	$fdata["GoodName"] = "cr_designer_time";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","cr_designer_time"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_designer_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile.cr_designer_time";
	
		
		
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

	

	
	$tdataCorrection_Files["cr_designer_time"] = $fdata;
//	cr_pc_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "cr_pc_name";
	$fdata["GoodName"] = "cr_pc_name";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","cr_pc_name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_pc_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile.cr_pc_name";
	
		
		
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

	

	
	$tdataCorrection_Files["cr_pc_name"] = $fdata;
//	cr_qc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "cr_qc_id";
	$fdata["GoodName"] = "cr_qc_id";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","cr_qc_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_qc_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile.cr_qc_id";
	
		
		
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

	

	
	$tdataCorrection_Files["cr_qc_id"] = $fdata;
//	cr_qcstart_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "cr_qcstart_date";
	$fdata["GoodName"] = "cr_qcstart_date";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","cr_qcstart_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_qcstart_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile.cr_qcstart_date";
	
		
		
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

	

	
	$tdataCorrection_Files["cr_qcstart_date"] = $fdata;
//	cr_qcend_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "cr_qcend_date";
	$fdata["GoodName"] = "cr_qcend_date";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","cr_qcend_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_qcend_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile.cr_qcend_date";
	
		
		
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

	

	
	$tdataCorrection_Files["cr_qcend_date"] = $fdata;
//	cr_qc_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "cr_qc_time";
	$fdata["GoodName"] = "cr_qc_time";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","cr_qc_time"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_qc_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile.cr_qc_time";
	
		
		
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

	

	
	$tdataCorrection_Files["cr_qc_time"] = $fdata;
//	cr_qc_pc_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "cr_qc_pc_name";
	$fdata["GoodName"] = "cr_qc_pc_name";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","cr_qc_pc_name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_qc_pc_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile.cr_qc_pc_name";
	
		
		
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

	

	
	$tdataCorrection_Files["cr_qc_pc_name"] = $fdata;
//	cr_distribute_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "cr_distribute_date";
	$fdata["GoodName"] = "cr_distribute_date";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","cr_distribute_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_distribute_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile.cr_distribute_date";
	
		
		
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

	

	
	$tdataCorrection_Files["cr_distribute_date"] = $fdata;
//	cr_notifier_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "cr_notifier_id";
	$fdata["GoodName"] = "cr_notifier_id";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","cr_notifier_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_notifier_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile.cr_notifier_id";
	
		
		
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

	

	
	$tdataCorrection_Files["cr_notifier_id"] = $fdata;
//	cr_notify_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "cr_notify_date";
	$fdata["GoodName"] = "cr_notify_date";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","cr_notify_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cr_notify_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile.cr_notify_date";
	
		
		
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

	

	
	$tdataCorrection_Files["cr_notify_date"] = $fdata;
//	type_of_error
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "type_of_error";
	$fdata["GoodName"] = "type_of_error";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","type_of_error"); 
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
	$fdata["FullName"] = "rejected_jobfile.type_of_error";
	
		
		
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

	

	
	$tdataCorrection_Files["type_of_error"] = $fdata;
//	cr_comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "cr_comment";
	$fdata["GoodName"] = "cr_comment";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","cr_comment"); 
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
	$fdata["FullName"] = "rejected_jobfile.cr_comment";
	
		
		
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

	

	
	$tdataCorrection_Files["cr_comment"] = $fdata;
//	screencap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "screencap";
	$fdata["GoodName"] = "screencap";
	$fdata["ownerTable"] = "rejected_jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","screencap"); 
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
	$fdata["FullName"] = "rejected_jobfile.screencap";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "D:\\_ShareFolders\\_screenshots";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "File-based Image");
	
		
		
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 150;
	$vdata["ThumbHeight"] = 150;	
			$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 600;
	
		
		
		
		
		
		
		
		
		
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
			$edata["ThumbnailSize"] = 200;
	
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	$fdata["Absolute"] = true;
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataCorrection_Files["screencap"] = $fdata;
//	jobfile_file_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "jobfile_file_url";
	$fdata["GoodName"] = "jobfile_file_url";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","jobfile_file_url"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "file_url"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.file_url";
	
		
		
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

	

	
	$tdataCorrection_Files["jobfile_file_url"] = $fdata;
//	jobfile_filename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "jobfile_filename";
	$fdata["GoodName"] = "jobfile_filename";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Correction_Files","jobfile_filename"); 
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

	

	
	$tdataCorrection_Files["jobfile_filename"] = $fdata;

	
$tables_data["Correction Files"]=&$tdataCorrection_Files;
$field_labels["Correction_Files"] = &$fieldLabelsCorrection_Files;
$fieldToolTips["Correction Files"] = &$fieldToolTipsCorrection_Files;
$page_titles["Correction_Files"] = &$pageTitlesCorrection_Files;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Correction Files"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Correction Files"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Correction_Files()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rejected_jobfile.rejected_jobfile_id,  rejected_jobfile.file_url AS original_jobfile_id,  rejected_jobfile.jobfile_id,  rejected_jobfile.rejected_jobfile_status_id,  rejected_jobfile.job_id,  rejected_jobfile.pdf_id,  rejected_jobfile.jobfile_note,  rejected_jobfile.rejector_id,  rejected_jobfile.reject_date,  rejected_jobfile.reject_reason,  rejected_jobfile.cr_notifier_id AS original_designer,  rejected_jobfile.cr_pc_name AS original_designer2,  rejected_jobfile.cr_qc_pc_name AS original_qc,  rejected_jobfile.cr_designer_id,  rejected_jobfile.cr_start_date,  rejected_jobfile.cr_end_date,  rejected_jobfile.cr_designer_time,  rejected_jobfile.cr_pc_name,  rejected_jobfile.cr_qc_id,  rejected_jobfile.cr_qcstart_date,  rejected_jobfile.cr_qcend_date,  rejected_jobfile.cr_qc_time,  rejected_jobfile.cr_qc_pc_name,  rejected_jobfile.cr_distribute_date,  rejected_jobfile.cr_notifier_id,  rejected_jobfile.cr_notify_date,  rejected_jobfile.type_of_error,  rejected_jobfile.cr_comment,  rejected_jobfile.screencap,  jobfile.file_url AS jobfile_file_url,  jobfile.filename AS jobfile_filename";
$proto0["m_strFrom"] = "FROM rejected_jobfile  LEFT OUTER JOIN jobfile ON rejected_jobfile.jobfile_id = jobfile.jobfile_id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY rejected_jobfile.reject_date DESC";
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
	"m_srcTableName" => "Correction Files"
));

$proto5["m_sql"] = "rejected_jobfile.rejected_jobfile_id";
$proto5["m_srcTableName"] = "Correction Files";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "file_url",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto7["m_sql"] = "rejected_jobfile.file_url";
$proto7["m_srcTableName"] = "Correction Files";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "original_jobfile_id";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto9["m_sql"] = "rejected_jobfile.jobfile_id";
$proto9["m_srcTableName"] = "Correction Files";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "rejected_jobfile_status_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto11["m_sql"] = "rejected_jobfile.rejected_jobfile_status_id";
$proto11["m_srcTableName"] = "Correction Files";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto13["m_sql"] = "rejected_jobfile.job_id";
$proto13["m_srcTableName"] = "Correction Files";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto15["m_sql"] = "rejected_jobfile.pdf_id";
$proto15["m_srcTableName"] = "Correction Files";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_note",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto17["m_sql"] = "rejected_jobfile.jobfile_note";
$proto17["m_srcTableName"] = "Correction Files";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "rejector_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto19["m_sql"] = "rejected_jobfile.rejector_id";
$proto19["m_srcTableName"] = "Correction Files";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "reject_date",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto21["m_sql"] = "rejected_jobfile.reject_date";
$proto21["m_srcTableName"] = "Correction Files";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "reject_reason",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto23["m_sql"] = "rejected_jobfile.reject_reason";
$proto23["m_srcTableName"] = "Correction Files";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_notifier_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto25["m_sql"] = "rejected_jobfile.cr_notifier_id";
$proto25["m_srcTableName"] = "Correction Files";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "original_designer";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_pc_name",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto27["m_sql"] = "rejected_jobfile.cr_pc_name";
$proto27["m_srcTableName"] = "Correction Files";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "original_designer2";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_qc_pc_name",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto29["m_sql"] = "rejected_jobfile.cr_qc_pc_name";
$proto29["m_srcTableName"] = "Correction Files";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "original_qc";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_designer_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto31["m_sql"] = "rejected_jobfile.cr_designer_id";
$proto31["m_srcTableName"] = "Correction Files";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_start_date",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto33["m_sql"] = "rejected_jobfile.cr_start_date";
$proto33["m_srcTableName"] = "Correction Files";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_end_date",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto35["m_sql"] = "rejected_jobfile.cr_end_date";
$proto35["m_srcTableName"] = "Correction Files";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_designer_time",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto37["m_sql"] = "rejected_jobfile.cr_designer_time";
$proto37["m_srcTableName"] = "Correction Files";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_pc_name",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto39["m_sql"] = "rejected_jobfile.cr_pc_name";
$proto39["m_srcTableName"] = "Correction Files";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_qc_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto41["m_sql"] = "rejected_jobfile.cr_qc_id";
$proto41["m_srcTableName"] = "Correction Files";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_qcstart_date",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto43["m_sql"] = "rejected_jobfile.cr_qcstart_date";
$proto43["m_srcTableName"] = "Correction Files";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_qcend_date",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto45["m_sql"] = "rejected_jobfile.cr_qcend_date";
$proto45["m_srcTableName"] = "Correction Files";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_qc_time",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto47["m_sql"] = "rejected_jobfile.cr_qc_time";
$proto47["m_srcTableName"] = "Correction Files";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_qc_pc_name",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto49["m_sql"] = "rejected_jobfile.cr_qc_pc_name";
$proto49["m_srcTableName"] = "Correction Files";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_distribute_date",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto51["m_sql"] = "rejected_jobfile.cr_distribute_date";
$proto51["m_srcTableName"] = "Correction Files";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_notifier_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto53["m_sql"] = "rejected_jobfile.cr_notifier_id";
$proto53["m_srcTableName"] = "Correction Files";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_notify_date",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto55["m_sql"] = "rejected_jobfile.cr_notify_date";
$proto55["m_srcTableName"] = "Correction Files";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "type_of_error",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto57["m_sql"] = "rejected_jobfile.type_of_error";
$proto57["m_srcTableName"] = "Correction Files";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "cr_comment",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto59["m_sql"] = "rejected_jobfile.cr_comment";
$proto59["m_srcTableName"] = "Correction Files";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "screencap",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto61["m_sql"] = "rejected_jobfile.screencap";
$proto61["m_srcTableName"] = "Correction Files";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "file_url",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto63["m_sql"] = "jobfile.file_url";
$proto63["m_srcTableName"] = "Correction Files";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "jobfile_file_url";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto65["m_sql"] = "jobfile.filename";
$proto65["m_srcTableName"] = "Correction Files";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "jobfile_filename";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto67=array();
$proto67["m_link"] = "SQLL_MAIN";
			$proto68=array();
$proto68["m_strName"] = "rejected_jobfile";
$proto68["m_srcTableName"] = "Correction Files";
$proto68["m_columns"] = array();
$proto68["m_columns"][] = "rejected_jobfile_id";
$proto68["m_columns"][] = "jobfile_id";
$proto68["m_columns"][] = "rejected_jobfile_status_id";
$proto68["m_columns"][] = "file_url";
$proto68["m_columns"][] = "job_id";
$proto68["m_columns"][] = "pdf_id";
$proto68["m_columns"][] = "jobfile_note";
$proto68["m_columns"][] = "rejector_id";
$proto68["m_columns"][] = "reject_date";
$proto68["m_columns"][] = "reject_reason";
$proto68["m_columns"][] = "cr_designer_id";
$proto68["m_columns"][] = "cr_start_date";
$proto68["m_columns"][] = "cr_end_date";
$proto68["m_columns"][] = "cr_designer_time";
$proto68["m_columns"][] = "cr_pc_name";
$proto68["m_columns"][] = "cr_qc_id";
$proto68["m_columns"][] = "cr_qcstart_date";
$proto68["m_columns"][] = "cr_qcend_date";
$proto68["m_columns"][] = "cr_qc_time";
$proto68["m_columns"][] = "cr_qc_pc_name";
$proto68["m_columns"][] = "cr_distribute_date";
$proto68["m_columns"][] = "cr_notifier_id";
$proto68["m_columns"][] = "cr_notify_date";
$proto68["m_columns"][] = "type_of_error";
$proto68["m_columns"][] = "cr_comment";
$proto68["m_columns"][] = "screencap";
$obj = new SQLTable($proto68);

$proto67["m_table"] = $obj;
$proto67["m_sql"] = "rejected_jobfile";
$proto67["m_alias"] = "";
$proto67["m_srcTableName"] = "Correction Files";
$proto69=array();
$proto69["m_sql"] = "";
$proto69["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto69["m_column"]=$obj;
$proto69["m_contained"] = array();
$proto69["m_strCase"] = "";
$proto69["m_havingmode"] = false;
$proto69["m_inBrackets"] = false;
$proto69["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto69);

$proto67["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto67);

$proto0["m_fromlist"][]=$obj;
												$proto71=array();
$proto71["m_link"] = "SQLL_LEFTJOIN";
			$proto72=array();
$proto72["m_strName"] = "jobfile";
$proto72["m_srcTableName"] = "Correction Files";
$proto72["m_columns"] = array();
$proto72["m_columns"][] = "jobfile_id";
$proto72["m_columns"][] = "file_url";
$proto72["m_columns"][] = "client_id";
$proto72["m_columns"][] = "work_id";
$proto72["m_columns"][] = "job_id";
$proto72["m_columns"][] = "project_id";
$proto72["m_columns"][] = "folder_name";
$proto72["m_columns"][] = "filename";
$proto72["m_columns"][] = "jobfile_type";
$proto72["m_columns"][] = "jobfile_note";
$proto72["m_columns"][] = "jobfile_status_id";
$proto72["m_columns"][] = "downloader_id";
$proto72["m_columns"][] = "distributor_id";
$proto72["m_columns"][] = "designer_id";
$proto72["m_columns"][] = "qc_id";
$proto72["m_columns"][] = "uploader_id";
$proto72["m_columns"][] = "notifier_id";
$proto72["m_columns"][] = "rejector_id";
$proto72["m_columns"][] = "download_date";
$proto72["m_columns"][] = "distribute_date";
$proto72["m_columns"][] = "start_date";
$proto72["m_columns"][] = "end_date";
$proto72["m_columns"][] = "designer_time";
$proto72["m_columns"][] = "qcstart_date";
$proto72["m_columns"][] = "qcend_date";
$proto72["m_columns"][] = "qc_time";
$proto72["m_columns"][] = "upload_date";
$proto72["m_columns"][] = "notify_date";
$proto72["m_columns"][] = "reject_date";
$proto72["m_columns"][] = "reject_reason";
$proto72["m_columns"][] = "designer2_id";
$proto72["m_columns"][] = "start2_date";
$proto72["m_columns"][] = "end2_date";
$proto72["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto72);

$proto71["m_table"] = $obj;
$proto71["m_sql"] = "LEFT OUTER JOIN jobfile ON rejected_jobfile.jobfile_id = jobfile.jobfile_id";
$proto71["m_alias"] = "";
$proto71["m_srcTableName"] = "Correction Files";
$proto73=array();
$proto73["m_sql"] = "rejected_jobfile.jobfile_id = jobfile.jobfile_id";
$proto73["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_id",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto73["m_column"]=$obj;
$proto73["m_contained"] = array();
$proto73["m_strCase"] = "= jobfile.jobfile_id";
$proto73["m_havingmode"] = false;
$proto73["m_inBrackets"] = false;
$proto73["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto73);

$proto71["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto71);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto75=array();
						$obj = new SQLField(array(
	"m_strName" => "reject_date",
	"m_strTable" => "rejected_jobfile",
	"m_srcTableName" => "Correction Files"
));

$proto75["m_column"]=$obj;
$proto75["m_bAsc"] = 0;
$proto75["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto75);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Correction Files";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Correction_Files = createSqlQuery_Correction_Files();


	
																															
	
$tdataCorrection_Files[".sqlquery"] = $queryData_Correction_Files;

include_once(getabspath("include/Correction_Files_events.php"));
$tableEvents["Correction Files"] = new eventclass_Correction_Files;
$tdataCorrection_Files[".hasEvents"] = true;

?>