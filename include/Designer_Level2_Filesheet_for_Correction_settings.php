<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDesigner_Level2_Filesheet_for_Correction = array();	
	$tdataDesigner_Level2_Filesheet_for_Correction[".truncateText"] = true;
	$tdataDesigner_Level2_Filesheet_for_Correction[".NumberOfChars"] = 80; 
	$tdataDesigner_Level2_Filesheet_for_Correction[".ShortName"] = "Designer_Level2_Filesheet_for_Correction";
	$tdataDesigner_Level2_Filesheet_for_Correction[".OwnerID"] = "";
	$tdataDesigner_Level2_Filesheet_for_Correction[".OriginalTable"] = "rejected_jobfile2";

//	field labels
$fieldLabelsDesigner_Level2_Filesheet_for_Correction = array();
$fieldToolTipsDesigner_Level2_Filesheet_for_Correction = array();
$pageTitlesDesigner_Level2_Filesheet_for_Correction = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"] = array();
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"] = array();
	$pageTitlesDesigner_Level2_Filesheet_for_Correction["English"] = array();
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["jobfile_id"] = "Jobfile Id";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["jobfile_id"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["file_url"] = "File Url";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["file_url"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["client_id"] = "Client Id";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["client_id"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["work_id"] = "Work Id";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["work_id"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["job_id"] = "Job Id";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["job_id"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["project_id"] = "Project Id";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["project_id"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["folder_name"] = "Folder Name";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["folder_name"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["filename"] = "Filename";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["filename"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["jobfile_type"] = "Jobfile Type";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["jobfile_type"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["jobfile_note"] = "Jobfile Note";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["jobfile_note"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["jobfile_status_id"] = "Jobfile Status Id";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["jobfile_status_id"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["downloader_id"] = "Downloader Id";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["downloader_id"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["distributor_id"] = "Distributor Id";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["distributor_id"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["designer_id"] = "Designer Id";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["designer_id"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["qc_id"] = "Qc Id";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["qc_id"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["uploader_id"] = "Uploader Id";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["uploader_id"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["notifier_id"] = "Notifier Id";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["notifier_id"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["rejector_id"] = "Rejector Id";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["rejector_id"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["download_date"] = "Download Date";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["download_date"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["distribute_date"] = "Distribute Date";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["distribute_date"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["start_date"] = "Start Date";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["start_date"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["end_date"] = "End Date";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["end_date"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["designer_time"] = "Designer Time";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["designer_time"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["qcstart_date"] = "Qcstart Date";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["qcstart_date"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["qcend_date"] = "Qcend Date";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["qcend_date"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["qc_time"] = "Qc Time";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["qc_time"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["upload_date"] = "Upload Date";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["upload_date"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["notify_date"] = "Notify Date";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["notify_date"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["reject_date"] = "Reject Date";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["reject_date"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["reject_reason"] = "Reject Reason";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["reject_reason"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["total_time_taken"] = "Total Time";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["total_time_taken"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["job_pdf_name"] = "Job Pdf Name";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["job_pdf_name"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["start2_date"] = "Start2 Date";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["start2_date"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["designer2_id"] = "Designer2 Id";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["designer2_id"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["end2_date"] = "End2 Date";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["end2_date"] = "";
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction["English"]["designer2_time"] = "Designer2 Time";
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]["designer2_time"] = "";
	if (count($fieldToolTipsDesigner_Level2_Filesheet_for_Correction["English"]))
		$tdataDesigner_Level2_Filesheet_for_Correction[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDesigner_Level2_Filesheet_for_Correction[""] = array();
	$fieldToolTipsDesigner_Level2_Filesheet_for_Correction[""] = array();
	$pageTitlesDesigner_Level2_Filesheet_for_Correction[""] = array();
	if (count($fieldToolTipsDesigner_Level2_Filesheet_for_Correction[""]))
		$tdataDesigner_Level2_Filesheet_for_Correction[".isUseToolTips"] = true;
}
	
	
	$tdataDesigner_Level2_Filesheet_for_Correction[".NCSearch"] = true;



$tdataDesigner_Level2_Filesheet_for_Correction[".shortTableName"] = "Designer_Level2_Filesheet_for_Correction";
$tdataDesigner_Level2_Filesheet_for_Correction[".nSecOptions"] = 0;
$tdataDesigner_Level2_Filesheet_for_Correction[".recsPerRowList"] = 1;
$tdataDesigner_Level2_Filesheet_for_Correction[".recsPerRowPrint"] = 1;
$tdataDesigner_Level2_Filesheet_for_Correction[".mainTableOwnerID"] = "";
$tdataDesigner_Level2_Filesheet_for_Correction[".moveNext"] = 1;
$tdataDesigner_Level2_Filesheet_for_Correction[".entityType"] = 1;

$tdataDesigner_Level2_Filesheet_for_Correction[".strOriginalTableName"] = "rejected_jobfile2";




$tdataDesigner_Level2_Filesheet_for_Correction[".showAddInPopup"] = false;

$tdataDesigner_Level2_Filesheet_for_Correction[".showEditInPopup"] = false;

$tdataDesigner_Level2_Filesheet_for_Correction[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDesigner_Level2_Filesheet_for_Correction[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDesigner_Level2_Filesheet_for_Correction[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataDesigner_Level2_Filesheet_for_Correction[".listAjax"] = true;
else 
	$tdataDesigner_Level2_Filesheet_for_Correction[".listAjax"] = false;

	$tdataDesigner_Level2_Filesheet_for_Correction[".audit"] = false;

	$tdataDesigner_Level2_Filesheet_for_Correction[".locking"] = false;

$tdataDesigner_Level2_Filesheet_for_Correction[".edit"] = true;
$tdataDesigner_Level2_Filesheet_for_Correction[".afterEditAction"] = 1;
$tdataDesigner_Level2_Filesheet_for_Correction[".closePopupAfterEdit"] = 1;
$tdataDesigner_Level2_Filesheet_for_Correction[".afterEditActionDetTable"] = "";


$tdataDesigner_Level2_Filesheet_for_Correction[".list"] = true;

$tdataDesigner_Level2_Filesheet_for_Correction[".view"] = true;

$tdataDesigner_Level2_Filesheet_for_Correction[".import"] = true;

$tdataDesigner_Level2_Filesheet_for_Correction[".exportTo"] = true;

$tdataDesigner_Level2_Filesheet_for_Correction[".printFriendly"] = true;

$tdataDesigner_Level2_Filesheet_for_Correction[".delete"] = true;

$tdataDesigner_Level2_Filesheet_for_Correction[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataDesigner_Level2_Filesheet_for_Correction[".searchSaving"] = false;
//

$tdataDesigner_Level2_Filesheet_for_Correction[".showSearchPanel"] = true;
		$tdataDesigner_Level2_Filesheet_for_Correction[".flexibleSearch"] = true;		

if (isMobile())
	$tdataDesigner_Level2_Filesheet_for_Correction[".isUseAjaxSuggest"] = false;
else 
	$tdataDesigner_Level2_Filesheet_for_Correction[".isUseAjaxSuggest"] = true;

$tdataDesigner_Level2_Filesheet_for_Correction[".rowHighlite"] = true;


																																																																																																																																								
			
								$tdataDesigner_Level2_Filesheet_for_Correction[".isUsebuttonHandlers"] = true;

$tdataDesigner_Level2_Filesheet_for_Correction[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDesigner_Level2_Filesheet_for_Correction[".isUseTimeForSearch"] = false;





$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"] = array();
$tdataDesigner_Level2_Filesheet_for_Correction[".filterFields"] = array();
$tdataDesigner_Level2_Filesheet_for_Correction[".requiredSearchFields"] = array();

$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "job_pdf_name";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "end2_date";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "designer2_id";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "start2_date";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "designer2_time";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "jobfile_id";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "client_id";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "work_id";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "job_id";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "project_id";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "filename";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "jobfile_type";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "jobfile_note";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "jobfile_status_id";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "downloader_id";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "distributor_id";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "designer_id";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "qc_id";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "uploader_id";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "notifier_id";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "rejector_id";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "download_date";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "distribute_date";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "start_date";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "end_date";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "designer_time";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "qcstart_date";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "qcend_date";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "qc_time";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "total_time_taken";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "upload_date";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "notify_date";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "reject_date";
	$tdataDesigner_Level2_Filesheet_for_Correction[".allSearchFields"][] = "reject_reason";
	

$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"] = array();
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "job_pdf_name";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "jobfile_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "client_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "work_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "job_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "project_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "filename";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "jobfile_type";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "jobfile_note";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "jobfile_status_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "downloader_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "distributor_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "designer_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "qc_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "uploader_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "notifier_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "rejector_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "download_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "distribute_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "start_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "end_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "designer_time";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "qcstart_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "qcend_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "qc_time";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "total_time_taken";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "upload_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "notify_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "reject_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "reject_reason";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "start2_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "designer2_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "end2_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".googleLikeFields"][] = "designer2_time";


$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"] = array();
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "job_pdf_name";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "end2_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "designer2_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "start2_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "designer2_time";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "jobfile_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "client_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "work_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "job_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "project_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "filename";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "jobfile_type";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "jobfile_note";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "jobfile_status_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "downloader_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "distributor_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "designer_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "qc_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "uploader_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "notifier_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "rejector_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "download_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "distribute_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "start_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "end_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "designer_time";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "qcstart_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "qcend_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "qc_time";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "total_time_taken";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "upload_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "notify_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "reject_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".advSearchFields"][] = "reject_reason";

$tdataDesigner_Level2_Filesheet_for_Correction[".tableType"] = "list";

$tdataDesigner_Level2_Filesheet_for_Correction[".printerPageOrientation"] = 0;
$tdataDesigner_Level2_Filesheet_for_Correction[".nPrinterPageScale"] = 100;

$tdataDesigner_Level2_Filesheet_for_Correction[".nPrinterSplitRecords"] = 40;

$tdataDesigner_Level2_Filesheet_for_Correction[".nPrinterPDFSplitRecords"] = 40;



$tdataDesigner_Level2_Filesheet_for_Correction[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataDesigner_Level2_Filesheet_for_Correction[".pageSize"] = 20;

$tdataDesigner_Level2_Filesheet_for_Correction[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY rejected_jobfile2.end_date";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDesigner_Level2_Filesheet_for_Correction[".strOrderBy"] = $tstrOrderBy;

$tdataDesigner_Level2_Filesheet_for_Correction[".orderindexes"] = array();
$tdataDesigner_Level2_Filesheet_for_Correction[".orderindexes"][] = array(23, (1 ? "ASC" : "DESC"), "rejected_jobfile2.end_date");

$tdataDesigner_Level2_Filesheet_for_Correction[".sqlHead"] = "SELECT pdf.pdf_name AS job_pdf_name,  rejected_jobfile2.jobfile_id,  rejected_jobfile2.file_url,  rejected_jobfile2.client_id,  rejected_jobfile2.work_id,  rejected_jobfile2.job_id,  rejected_jobfile2.project_id,  rejected_jobfile2.folder_name,  rejected_jobfile2.filename,  rejected_jobfile2.jobfile_type,  rejected_jobfile2.jobfile_note,  rejected_jobfile2.jobfile_status_id,  rejected_jobfile2.downloader_id,  rejected_jobfile2.distributor_id,  rejected_jobfile2.designer_id,  rejected_jobfile2.qc_id,  rejected_jobfile2.uploader_id,  rejected_jobfile2.notifier_id,  rejected_jobfile2.rejector_id,  rejected_jobfile2.download_date,  rejected_jobfile2.distribute_date,  rejected_jobfile2.start_date,  rejected_jobfile2.end_date,  rejected_jobfile2.designer_time,  rejected_jobfile2.qcstart_date,  rejected_jobfile2.qcend_date,  rejected_jobfile2.qc_time,  SEC_TO_TIME(TIME_TO_SEC(rejected_jobfile2.designer_time) +TIME_TO_SEC(rejected_jobfile2.designer2_time) + TIME_TO_SEC(rejected_jobfile2.qc_time)) AS total_time_taken,  rejected_jobfile2.upload_date,  rejected_jobfile2.notify_date,  rejected_jobfile2.reject_date,  rejected_jobfile2.reject_reason,  rejected_jobfile2.start2_date,  rejected_jobfile2.designer2_id,  rejected_jobfile2.end2_date,  rejected_jobfile2.designer2_time";
$tdataDesigner_Level2_Filesheet_for_Correction[".sqlFrom"] = "FROM rejected_jobfile2  INNER JOIN rejected_job ON rejected_jobfile2.job_id = rejected_job.job_id  INNER JOIN pdf ON rejected_job.pdf_id = pdf.pdf_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".sqlWhereExpr"] = "";
$tdataDesigner_Level2_Filesheet_for_Correction[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDesigner_Level2_Filesheet_for_Correction[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDesigner_Level2_Filesheet_for_Correction[".arrGroupsPerPage"] = $arrGPP;

$tdataDesigner_Level2_Filesheet_for_Correction[".highlightSearchResults"] = true;

$tableKeysDesigner_Level2_Filesheet_for_Correction = array();
$tableKeysDesigner_Level2_Filesheet_for_Correction[] = "jobfile_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".Keys"] = $tableKeysDesigner_Level2_Filesheet_for_Correction;

$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"] = array();
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "job_pdf_name";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "end2_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "designer2_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "start2_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "designer2_time";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "job_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "work_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "jobfile_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "file_url";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "filename";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "jobfile_note";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "jobfile_status_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "total_time_taken";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "designer_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "start_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "end_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "designer_time";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "qc_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "qcstart_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "qcend_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "qc_time";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "distribute_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "distributor_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "rejector_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "reject_reason";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "notify_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "jobfile_type";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "reject_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".listFields"][] = "notifier_id";

$tdataDesigner_Level2_Filesheet_for_Correction[".hideMobileList"] = array();


$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"] = array();
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "job_pdf_name";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "jobfile_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "file_url";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "client_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "work_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "job_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "project_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "folder_name";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "filename";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "jobfile_type";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "jobfile_note";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "jobfile_status_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "downloader_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "distributor_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "designer_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "qc_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "uploader_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "notifier_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "rejector_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "download_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "distribute_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "start_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "end_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "designer_time";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "qcstart_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "qcend_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "qc_time";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "total_time_taken";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "upload_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "notify_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "reject_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "reject_reason";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "start2_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "designer2_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "end2_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".viewFields"][] = "designer2_time";

$tdataDesigner_Level2_Filesheet_for_Correction[".addFields"] = array();

$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"] = array();
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "job_pdf_name";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "jobfile_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "file_url";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "client_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "work_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "job_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "project_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "folder_name";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "filename";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "jobfile_type";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "jobfile_note";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "jobfile_status_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "downloader_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "distributor_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "designer_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "qc_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "uploader_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "notifier_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "rejector_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "download_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "distribute_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "start_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "end_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "designer_time";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "qcstart_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "qcend_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "qc_time";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "total_time_taken";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "upload_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "notify_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "reject_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "reject_reason";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "start2_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "designer2_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "end2_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".masterListFields"][] = "designer2_time";

$tdataDesigner_Level2_Filesheet_for_Correction[".inlineAddFields"] = array();

$tdataDesigner_Level2_Filesheet_for_Correction[".editFields"] = array();
$tdataDesigner_Level2_Filesheet_for_Correction[".editFields"][] = "end2_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".editFields"][] = "designer2_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".editFields"][] = "start2_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".editFields"][] = "designer2_time";
$tdataDesigner_Level2_Filesheet_for_Correction[".editFields"][] = "jobfile_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".editFields"][] = "job_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".editFields"][] = "filename";
$tdataDesigner_Level2_Filesheet_for_Correction[".editFields"][] = "jobfile_type";
$tdataDesigner_Level2_Filesheet_for_Correction[".editFields"][] = "jobfile_note";
$tdataDesigner_Level2_Filesheet_for_Correction[".editFields"][] = "reject_reason";

$tdataDesigner_Level2_Filesheet_for_Correction[".inlineEditFields"] = array();

$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"] = array();
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "job_pdf_name";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "end2_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "designer2_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "start2_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "designer2_time";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "jobfile_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "file_url";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "client_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "work_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "job_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "project_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "folder_name";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "filename";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "jobfile_type";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "jobfile_note";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "jobfile_status_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "downloader_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "distributor_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "designer_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "qc_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "uploader_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "notifier_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "rejector_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "download_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "distribute_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "start_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "end_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "designer_time";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "qcstart_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "qcend_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "qc_time";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "total_time_taken";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "upload_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "notify_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "reject_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".exportFields"][] = "reject_reason";

$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"] = array();
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "job_pdf_name";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "jobfile_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "file_url";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "client_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "work_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "job_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "project_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "folder_name";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "filename";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "jobfile_type";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "jobfile_note";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "jobfile_status_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "downloader_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "distributor_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "designer_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "qc_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "uploader_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "notifier_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "rejector_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "download_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "distribute_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "start_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "end_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "designer_time";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "qcstart_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "qcend_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "qc_time";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "total_time_taken";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "upload_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "notify_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "reject_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "reject_reason";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "start2_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "designer2_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "end2_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".importFields"][] = "designer2_time";

$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"] = array();
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "job_pdf_name";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "jobfile_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "file_url";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "client_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "work_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "job_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "project_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "folder_name";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "filename";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "jobfile_type";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "jobfile_note";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "jobfile_status_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "downloader_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "distributor_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "designer_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "qc_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "uploader_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "notifier_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "rejector_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "download_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "distribute_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "start_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "end_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "designer_time";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "qcstart_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "qcend_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "qc_time";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "total_time_taken";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "upload_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "notify_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "reject_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "reject_reason";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "start2_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "designer2_id";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "end2_date";
$tdataDesigner_Level2_Filesheet_for_Correction[".printFields"][] = "designer2_time";

//	job_pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "job_pdf_name";
	$fdata["GoodName"] = "job_pdf_name";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","job_pdf_name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf.pdf_name";
	
		
		
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

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["job_pdf_name"] = $fdata;
//	jobfile_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "jobfile_id";
	$fdata["GoodName"] = "jobfile_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","jobfile_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobfile_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.jobfile_id";
	
		
		
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
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Starts with";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["jobfile_id"] = $fdata;
//	file_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "file_url";
	$fdata["GoodName"] = "file_url";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","file_url"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "file_url"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.file_url";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;
	
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	$fdata["Absolute"] = true;
	
	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["file_url"] = $fdata;
//	client_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "client_id";
	$fdata["GoodName"] = "client_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","client_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "client_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.client_id";
	
		
		
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
	$edata["LookupTable"] = "clients";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "client_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "client_name";
	
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["client_id"] = $fdata;
//	work_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "work_id";
	$fdata["GoodName"] = "work_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","work_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "work_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.work_id";
	
		
		
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
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Starts with";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["work_id"] = $fdata;
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","job_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "job_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.job_id";
	
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Starts with";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["job_id"] = $fdata;
//	project_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "project_id";
	$fdata["GoodName"] = "project_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","project_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "project_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.project_id";
	
		
		
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
	$edata["LookupTable"] = "project";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "project_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "project_name";
	
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["project_id"] = $fdata;
//	folder_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "folder_name";
	$fdata["GoodName"] = "folder_name";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","folder_name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "folder_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.folder_name";
	
		
		
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
	
	
	
	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["folder_name"] = $fdata;
//	filename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "filename";
	$fdata["GoodName"] = "filename";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","filename"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "filename"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.filename";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Starts with";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["filename"] = $fdata;
//	jobfile_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "jobfile_type";
	$fdata["GoodName"] = "jobfile_type";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","jobfile_type"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobfile_type"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.jobfile_type";
	
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Starts with";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["jobfile_type"] = $fdata;
//	jobfile_note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "jobfile_note";
	$fdata["GoodName"] = "jobfile_note";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","jobfile_note"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobfile_note"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.jobfile_note";
	
		
		
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
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Starts with";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["jobfile_note"] = $fdata;
//	jobfile_status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "jobfile_status_id";
	$fdata["GoodName"] = "jobfile_status_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","jobfile_status_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobfile_status_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.jobfile_status_id";
	
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["jobfile_status_id"] = $fdata;
//	downloader_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "downloader_id";
	$fdata["GoodName"] = "downloader_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","downloader_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "downloader_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.downloader_id";
	
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["downloader_id"] = $fdata;
//	distributor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "distributor_id";
	$fdata["GoodName"] = "distributor_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","distributor_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "distributor_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.distributor_id";
	
		
		
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
		$edata["autoCompleteFieldsOnEdit"] = 1;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 1;
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
		$edata["autoCompleteFieldsOnEdit"] = 1;
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
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["distributor_id"] = $fdata;
//	designer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "designer_id";
	$fdata["GoodName"] = "designer_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","designer_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.designer_id";
	
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["designer_id"] = $fdata;
//	qc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "qc_id";
	$fdata["GoodName"] = "qc_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","qc_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qc_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.qc_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["qc_id"] = $fdata;
//	uploader_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "uploader_id";
	$fdata["GoodName"] = "uploader_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","uploader_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "uploader_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.uploader_id";
	
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["uploader_id"] = $fdata;
//	notifier_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "notifier_id";
	$fdata["GoodName"] = "notifier_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","notifier_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "notifier_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.notifier_id";
	
		
		
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
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["notifier_id"] = $fdata;
//	rejector_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "rejector_id";
	$fdata["GoodName"] = "rejector_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","rejector_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rejector_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.rejector_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["rejector_id"] = $fdata;
//	download_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "download_date";
	$fdata["GoodName"] = "download_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","download_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "download_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.download_date";
	
		
		
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
	
		
		
		$edata["DateEditType"] = 11; 
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["download_date"] = $fdata;
//	distribute_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "distribute_date";
	$fdata["GoodName"] = "distribute_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","distribute_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "distribute_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.distribute_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 10; 
	$edata["LastYearFactor"] = 100; 
	
		
		
		
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
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["distribute_date"] = $fdata;
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","start_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "start_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.start_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 10; 
	$edata["LastYearFactor"] = 100; 
	
		
		
		
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
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["start_date"] = $fdata;
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","end_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "end_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.end_date";
	
		
		
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
	
		
		
		$edata["DateEditType"] = 11; 
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["end_date"] = $fdata;
//	designer_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "designer_time";
	$fdata["GoodName"] = "designer_time";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","designer_time"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.designer_time";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["export"] = $vdata;
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Starts with";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["designer_time"] = $fdata;
//	qcstart_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "qcstart_date";
	$fdata["GoodName"] = "qcstart_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","qcstart_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qcstart_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.qcstart_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 10; 
	$edata["LastYearFactor"] = 100; 
	
		
		
		
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
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["qcstart_date"] = $fdata;
//	qcend_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "qcend_date";
	$fdata["GoodName"] = "qcend_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","qcend_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qcend_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.qcend_date";
	
		
		
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
	
		
		
		$edata["DateEditType"] = 11; 
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["qcend_date"] = $fdata;
//	qc_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "qc_time";
	$fdata["GoodName"] = "qc_time";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","qc_time"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qc_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.qc_time";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=30";
	
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
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Starts with";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["qc_time"] = $fdata;
//	total_time_taken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "total_time_taken";
	$fdata["GoodName"] = "total_time_taken";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","total_time_taken"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_time_taken"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEC_TO_TIME(TIME_TO_SEC(rejected_jobfile2.designer_time) +TIME_TO_SEC(rejected_jobfile2.designer2_time) + TIME_TO_SEC(rejected_jobfile2.qc_time))";
	
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Starts with";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["total_time_taken"] = $fdata;
//	upload_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "upload_date";
	$fdata["GoodName"] = "upload_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","upload_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "upload_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.upload_date";
	
		
		
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
	
		
		
		$edata["DateEditType"] = 11; 
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["upload_date"] = $fdata;
//	notify_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "notify_date";
	$fdata["GoodName"] = "notify_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","notify_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "notify_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.notify_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["export"] = $vdata;
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
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 10; 
	$edata["LastYearFactor"] = 100; 
	
		
		
		
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
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["notify_date"] = $fdata;
//	reject_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "reject_date";
	$fdata["GoodName"] = "reject_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","reject_date"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reject_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.reject_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["masterprint"] = $vdata;
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
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 10; 
	$edata["LastYearFactor"] = 100; 
	
		
		
		
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
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["reject_date"] = $fdata;
//	reject_reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "reject_reason";
	$fdata["GoodName"] = "reject_reason";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","reject_reason"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reject_reason"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.reject_reason";
	
		
		
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
			$edata["EditParams"].= " maxlength=1000";
	
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
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Starts with";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["reject_reason"] = $fdata;
//	start2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "start2_date";
	$fdata["GoodName"] = "start2_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","start2_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "start2_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.start2_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["start2_date"] = $fdata;
//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","designer2_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer2_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.designer2_id";
	
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["designer2_id"] = $fdata;
//	end2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "end2_date";
	$fdata["GoodName"] = "end2_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","end2_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "end2_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.end2_date";
	
		
		
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

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["end2_date"] = $fdata;
//	designer2_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "designer2_time";
	$fdata["GoodName"] = "designer2_time";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Designer_Level2_Filesheet_for_Correction","designer2_time"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer2_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rejected_jobfile2.designer2_time";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
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
	
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataDesigner_Level2_Filesheet_for_Correction["designer2_time"] = $fdata;

	
$tables_data["Designer Level2 Filesheet for Correction"]=&$tdataDesigner_Level2_Filesheet_for_Correction;
$field_labels["Designer_Level2_Filesheet_for_Correction"] = &$fieldLabelsDesigner_Level2_Filesheet_for_Correction;
$fieldToolTips["Designer Level2 Filesheet for Correction"] = &$fieldToolTipsDesigner_Level2_Filesheet_for_Correction;
$page_titles["Designer_Level2_Filesheet_for_Correction"] = &$pageTitlesDesigner_Level2_Filesheet_for_Correction;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Designer Level2 Filesheet for Correction"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Designer Level2 Filesheet for Correction"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Designer_Level2_Filesheet_for_Correction()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pdf.pdf_name AS job_pdf_name,  rejected_jobfile2.jobfile_id,  rejected_jobfile2.file_url,  rejected_jobfile2.client_id,  rejected_jobfile2.work_id,  rejected_jobfile2.job_id,  rejected_jobfile2.project_id,  rejected_jobfile2.folder_name,  rejected_jobfile2.filename,  rejected_jobfile2.jobfile_type,  rejected_jobfile2.jobfile_note,  rejected_jobfile2.jobfile_status_id,  rejected_jobfile2.downloader_id,  rejected_jobfile2.distributor_id,  rejected_jobfile2.designer_id,  rejected_jobfile2.qc_id,  rejected_jobfile2.uploader_id,  rejected_jobfile2.notifier_id,  rejected_jobfile2.rejector_id,  rejected_jobfile2.download_date,  rejected_jobfile2.distribute_date,  rejected_jobfile2.start_date,  rejected_jobfile2.end_date,  rejected_jobfile2.designer_time,  rejected_jobfile2.qcstart_date,  rejected_jobfile2.qcend_date,  rejected_jobfile2.qc_time,  SEC_TO_TIME(TIME_TO_SEC(rejected_jobfile2.designer_time) +TIME_TO_SEC(rejected_jobfile2.designer2_time) + TIME_TO_SEC(rejected_jobfile2.qc_time)) AS total_time_taken,  rejected_jobfile2.upload_date,  rejected_jobfile2.notify_date,  rejected_jobfile2.reject_date,  rejected_jobfile2.reject_reason,  rejected_jobfile2.start2_date,  rejected_jobfile2.designer2_id,  rejected_jobfile2.end2_date,  rejected_jobfile2.designer2_time";
$proto0["m_strFrom"] = "FROM rejected_jobfile2  INNER JOIN rejected_job ON rejected_jobfile2.job_id = rejected_job.job_id  INNER JOIN pdf ON rejected_job.pdf_id = pdf.pdf_id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY rejected_jobfile2.end_date";
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
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto5["m_sql"] = "pdf.pdf_name";
$proto5["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "job_pdf_name";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto7["m_sql"] = "rejected_jobfile2.jobfile_id";
$proto7["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "file_url",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto9["m_sql"] = "rejected_jobfile2.file_url";
$proto9["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "client_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto11["m_sql"] = "rejected_jobfile2.client_id";
$proto11["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto13["m_sql"] = "rejected_jobfile2.work_id";
$proto13["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto15["m_sql"] = "rejected_jobfile2.job_id";
$proto15["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto17["m_sql"] = "rejected_jobfile2.project_id";
$proto17["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "folder_name",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto19["m_sql"] = "rejected_jobfile2.folder_name";
$proto19["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto21["m_sql"] = "rejected_jobfile2.filename";
$proto21["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_type",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto23["m_sql"] = "rejected_jobfile2.jobfile_type";
$proto23["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_note",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto25["m_sql"] = "rejected_jobfile2.jobfile_note";
$proto25["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto27["m_sql"] = "rejected_jobfile2.jobfile_status_id";
$proto27["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "downloader_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto29["m_sql"] = "rejected_jobfile2.downloader_id";
$proto29["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "distributor_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto31["m_sql"] = "rejected_jobfile2.distributor_id";
$proto31["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto33["m_sql"] = "rejected_jobfile2.designer_id";
$proto33["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "qc_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto35["m_sql"] = "rejected_jobfile2.qc_id";
$proto35["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "uploader_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto37["m_sql"] = "rejected_jobfile2.uploader_id";
$proto37["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "notifier_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto39["m_sql"] = "rejected_jobfile2.notifier_id";
$proto39["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "rejector_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto41["m_sql"] = "rejected_jobfile2.rejector_id";
$proto41["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "download_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto43["m_sql"] = "rejected_jobfile2.download_date";
$proto43["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "distribute_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto45["m_sql"] = "rejected_jobfile2.distribute_date";
$proto45["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto47["m_sql"] = "rejected_jobfile2.start_date";
$proto47["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto49["m_sql"] = "rejected_jobfile2.end_date";
$proto49["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_time",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto51["m_sql"] = "rejected_jobfile2.designer_time";
$proto51["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "qcstart_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto53["m_sql"] = "rejected_jobfile2.qcstart_date";
$proto53["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "qcend_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto55["m_sql"] = "rejected_jobfile2.qcend_date";
$proto55["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "qc_time",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto57["m_sql"] = "rejected_jobfile2.qc_time";
$proto57["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$proto60=array();
$proto60["m_functiontype"] = "SQLF_CUSTOM";
$proto60["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "TIME_TO_SEC(rejected_jobfile2.designer_time) +TIME_TO_SEC(rejected_jobfile2.designer2_time) + TIME_TO_SEC(rejected_jobfile2.qc_time)"
));

$proto60["m_arguments"][]=$obj;
$proto60["m_strFunctionName"] = "SEC_TO_TIME";
$obj = new SQLFunctionCall($proto60);

$proto59["m_sql"] = "SEC_TO_TIME(TIME_TO_SEC(rejected_jobfile2.designer_time) +TIME_TO_SEC(rejected_jobfile2.designer2_time) + TIME_TO_SEC(rejected_jobfile2.qc_time))";
$proto59["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "total_time_taken";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "upload_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto62["m_sql"] = "rejected_jobfile2.upload_date";
$proto62["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "notify_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto64["m_sql"] = "rejected_jobfile2.notify_date";
$proto64["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "reject_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto66["m_sql"] = "rejected_jobfile2.reject_date";
$proto66["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "reject_reason",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto68["m_sql"] = "rejected_jobfile2.reject_reason";
$proto68["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "start2_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto70["m_sql"] = "rejected_jobfile2.start2_date";
$proto70["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto72["m_sql"] = "rejected_jobfile2.designer2_id";
$proto72["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto74["m_sql"] = "rejected_jobfile2.end2_date";
$proto74["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_time",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto76["m_sql"] = "rejected_jobfile2.designer2_time";
$proto76["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto78=array();
$proto78["m_link"] = "SQLL_MAIN";
			$proto79=array();
$proto79["m_strName"] = "rejected_jobfile2";
$proto79["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto79["m_columns"] = array();
$proto79["m_columns"][] = "jobfile_id";
$proto79["m_columns"][] = "previous_jobfile_id";
$proto79["m_columns"][] = "file_url";
$proto79["m_columns"][] = "client_id";
$proto79["m_columns"][] = "work_id";
$proto79["m_columns"][] = "job_id";
$proto79["m_columns"][] = "previous_job_id";
$proto79["m_columns"][] = "project_id";
$proto79["m_columns"][] = "folder_name";
$proto79["m_columns"][] = "filename";
$proto79["m_columns"][] = "jobfile_type";
$proto79["m_columns"][] = "jobfile_note";
$proto79["m_columns"][] = "jobfile_status_id";
$proto79["m_columns"][] = "downloader_id";
$proto79["m_columns"][] = "distributor_id";
$proto79["m_columns"][] = "designer_id";
$proto79["m_columns"][] = "qc_id";
$proto79["m_columns"][] = "uploader_id";
$proto79["m_columns"][] = "notifier_id";
$proto79["m_columns"][] = "rejector_id";
$proto79["m_columns"][] = "download_date";
$proto79["m_columns"][] = "distribute_date";
$proto79["m_columns"][] = "start_date";
$proto79["m_columns"][] = "end_date";
$proto79["m_columns"][] = "designer_time";
$proto79["m_columns"][] = "qcstart_date";
$proto79["m_columns"][] = "qcend_date";
$proto79["m_columns"][] = "qc_time";
$proto79["m_columns"][] = "upload_date";
$proto79["m_columns"][] = "notify_date";
$proto79["m_columns"][] = "reject_date";
$proto79["m_columns"][] = "reject_reason";
$proto79["m_columns"][] = "reject_reason_others";
$proto79["m_columns"][] = "screenshots";
$proto79["m_columns"][] = "designer2_id";
$proto79["m_columns"][] = "start2_date";
$proto79["m_columns"][] = "end2_date";
$proto79["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto79);

$proto78["m_table"] = $obj;
$proto78["m_sql"] = "rejected_jobfile2";
$proto78["m_alias"] = "";
$proto78["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto80=array();
$proto80["m_sql"] = "";
$proto80["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
$proto80["m_strCase"] = "";
$proto80["m_havingmode"] = false;
$proto80["m_inBrackets"] = false;
$proto80["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto80);

$proto78["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto78);

$proto0["m_fromlist"][]=$obj;
												$proto82=array();
$proto82["m_link"] = "SQLL_INNERJOIN";
			$proto83=array();
$proto83["m_strName"] = "rejected_job";
$proto83["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto83["m_columns"] = array();
$proto83["m_columns"][] = "work_id";
$proto83["m_columns"][] = "job_id";
$proto83["m_columns"][] = "previous_job_id";
$proto83["m_columns"][] = "total_images";
$proto83["m_columns"][] = "reject_type";
$proto83["m_columns"][] = "reject_notes";
$proto83["m_columns"][] = "web_note";
$proto83["m_columns"][] = "comments";
$proto83["m_columns"][] = "jobstatus_id";
$proto83["m_columns"][] = "downloader_id";
$proto83["m_columns"][] = "download_date";
$proto83["m_columns"][] = "distributor_id";
$proto83["m_columns"][] = "distribute_date";
$proto83["m_columns"][] = "uploader_id";
$proto83["m_columns"][] = "upload_date";
$proto83["m_columns"][] = "notifer_id";
$proto83["m_columns"][] = "notify_date";
$proto83["m_columns"][] = "reviewer_id";
$proto83["m_columns"][] = "reject_date";
$proto83["m_columns"][] = "reject_reason";
$proto83["m_columns"][] = "delivery_date";
$proto83["m_columns"][] = "pdf_id";
$proto83["m_columns"][] = "pdf_name";
$proto83["m_columns"][] = "delivery_duration";
$proto83["m_columns"][] = "designer_list";
$proto83["m_columns"][] = "qcs_list";
$obj = new SQLTable($proto83);

$proto82["m_table"] = $obj;
$proto82["m_sql"] = "INNER JOIN rejected_job ON rejected_jobfile2.job_id = rejected_job.job_id";
$proto82["m_alias"] = "";
$proto82["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto84=array();
$proto84["m_sql"] = "rejected_jobfile2.job_id = rejected_job.job_id";
$proto84["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto84["m_column"]=$obj;
$proto84["m_contained"] = array();
$proto84["m_strCase"] = "= rejected_job.job_id";
$proto84["m_havingmode"] = false;
$proto84["m_inBrackets"] = false;
$proto84["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto84);

$proto82["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto82);

$proto0["m_fromlist"][]=$obj;
												$proto86=array();
$proto86["m_link"] = "SQLL_INNERJOIN";
			$proto87=array();
$proto87["m_strName"] = "pdf";
$proto87["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto87["m_columns"] = array();
$proto87["m_columns"][] = "pdf_id";
$proto87["m_columns"][] = "pdf_name";
$proto87["m_columns"][] = "client_id";
$proto87["m_columns"][] = "pdf_location";
$proto87["m_columns"][] = "last_update";
$proto87["m_columns"][] = "pdf_estimated_average";
$proto87["m_columns"][] = "pdf_estimated_average1";
$proto87["m_columns"][] = "pdf_estimated_average2";
$proto87["m_columns"][] = "pdf_actual_average";
$proto87["m_columns"][] = "price";
$obj = new SQLTable($proto87);

$proto86["m_table"] = $obj;
$proto86["m_sql"] = "INNER JOIN pdf ON rejected_job.pdf_id = pdf.pdf_id";
$proto86["m_alias"] = "";
$proto86["m_srcTableName"] = "Designer Level2 Filesheet for Correction";
$proto88=array();
$proto88["m_sql"] = "rejected_job.pdf_id = pdf.pdf_id";
$proto88["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto88["m_column"]=$obj;
$proto88["m_contained"] = array();
$proto88["m_strCase"] = "= pdf.pdf_id";
$proto88["m_havingmode"] = false;
$proto88["m_inBrackets"] = false;
$proto88["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto88);

$proto86["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto86);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto90=array();
						$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Designer Level2 Filesheet for Correction"
));

$proto90["m_column"]=$obj;
$proto90["m_bAsc"] = 1;
$proto90["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto90);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Designer Level2 Filesheet for Correction";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Designer_Level2_Filesheet_for_Correction = createSqlQuery_Designer_Level2_Filesheet_for_Correction();


	
																																				
	
$tdataDesigner_Level2_Filesheet_for_Correction[".sqlquery"] = $queryData_Designer_Level2_Filesheet_for_Correction;

include_once(getabspath("include/Designer_Level2_Filesheet_for_Correction_events.php"));
$tableEvents["Designer Level2 Filesheet for Correction"] = new eventclass_Designer_Level2_Filesheet_for_Correction;
$tdataDesigner_Level2_Filesheet_for_Correction[".hasEvents"] = true;

?>