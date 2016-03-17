<?php
require_once(getabspath("classes/cipherer.php"));




$tdatarejected_jobfile2 = array();	
	$tdatarejected_jobfile2[".truncateText"] = true;
	$tdatarejected_jobfile2[".NumberOfChars"] = 80; 
	$tdatarejected_jobfile2[".ShortName"] = "rejected_jobfile2";
	$tdatarejected_jobfile2[".OwnerID"] = "";
	$tdatarejected_jobfile2[".OriginalTable"] = "rejected_jobfile2";

//	field labels
$fieldLabelsrejected_jobfile2 = array();
$fieldToolTipsrejected_jobfile2 = array();
$pageTitlesrejected_jobfile2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsrejected_jobfile2["English"] = array();
	$fieldToolTipsrejected_jobfile2["English"] = array();
	$pageTitlesrejected_jobfile2["English"] = array();
	$fieldLabelsrejected_jobfile2["English"]["jobfile_id"] = "Jobfile Id";
	$fieldToolTipsrejected_jobfile2["English"]["jobfile_id"] = "";
	$fieldLabelsrejected_jobfile2["English"]["file_url"] = "File Url";
	$fieldToolTipsrejected_jobfile2["English"]["file_url"] = "";
	$fieldLabelsrejected_jobfile2["English"]["client_id"] = "Client Id";
	$fieldToolTipsrejected_jobfile2["English"]["client_id"] = "";
	$fieldLabelsrejected_jobfile2["English"]["work_id"] = "Work Id";
	$fieldToolTipsrejected_jobfile2["English"]["work_id"] = "";
	$fieldLabelsrejected_jobfile2["English"]["job_id"] = "Job Id";
	$fieldToolTipsrejected_jobfile2["English"]["job_id"] = "";
	$fieldLabelsrejected_jobfile2["English"]["previous_job_id"] = "Previous Job Id";
	$fieldToolTipsrejected_jobfile2["English"]["previous_job_id"] = "";
	$fieldLabelsrejected_jobfile2["English"]["project_id"] = "Project Id";
	$fieldToolTipsrejected_jobfile2["English"]["project_id"] = "";
	$fieldLabelsrejected_jobfile2["English"]["folder_name"] = "Folder Name";
	$fieldToolTipsrejected_jobfile2["English"]["folder_name"] = "";
	$fieldLabelsrejected_jobfile2["English"]["filename"] = "Filename";
	$fieldToolTipsrejected_jobfile2["English"]["filename"] = "";
	$fieldLabelsrejected_jobfile2["English"]["jobfile_type"] = "Jobfile Type";
	$fieldToolTipsrejected_jobfile2["English"]["jobfile_type"] = "";
	$fieldLabelsrejected_jobfile2["English"]["jobfile_note"] = "Jobfile Note";
	$fieldToolTipsrejected_jobfile2["English"]["jobfile_note"] = "";
	$fieldLabelsrejected_jobfile2["English"]["jobfile_status_id"] = "Jobfile Status Id";
	$fieldToolTipsrejected_jobfile2["English"]["jobfile_status_id"] = "";
	$fieldLabelsrejected_jobfile2["English"]["downloader_id"] = "Downloader Id";
	$fieldToolTipsrejected_jobfile2["English"]["downloader_id"] = "";
	$fieldLabelsrejected_jobfile2["English"]["distributor_id"] = "Distributor Id";
	$fieldToolTipsrejected_jobfile2["English"]["distributor_id"] = "";
	$fieldLabelsrejected_jobfile2["English"]["designer_id"] = "Designer Id";
	$fieldToolTipsrejected_jobfile2["English"]["designer_id"] = "";
	$fieldLabelsrejected_jobfile2["English"]["qc_id"] = "Qc Id";
	$fieldToolTipsrejected_jobfile2["English"]["qc_id"] = "";
	$fieldLabelsrejected_jobfile2["English"]["uploader_id"] = "Uploader Id";
	$fieldToolTipsrejected_jobfile2["English"]["uploader_id"] = "";
	$fieldLabelsrejected_jobfile2["English"]["notifier_id"] = "Notifier Id";
	$fieldToolTipsrejected_jobfile2["English"]["notifier_id"] = "";
	$fieldLabelsrejected_jobfile2["English"]["rejector_id"] = "Rejector Id";
	$fieldToolTipsrejected_jobfile2["English"]["rejector_id"] = "";
	$fieldLabelsrejected_jobfile2["English"]["download_date"] = "Download Date";
	$fieldToolTipsrejected_jobfile2["English"]["download_date"] = "";
	$fieldLabelsrejected_jobfile2["English"]["distribute_date"] = "Distribute Date";
	$fieldToolTipsrejected_jobfile2["English"]["distribute_date"] = "";
	$fieldLabelsrejected_jobfile2["English"]["start_date"] = "Start Date";
	$fieldToolTipsrejected_jobfile2["English"]["start_date"] = "";
	$fieldLabelsrejected_jobfile2["English"]["end_date"] = "End Date";
	$fieldToolTipsrejected_jobfile2["English"]["end_date"] = "";
	$fieldLabelsrejected_jobfile2["English"]["designer_time"] = "Designer Time";
	$fieldToolTipsrejected_jobfile2["English"]["designer_time"] = "";
	$fieldLabelsrejected_jobfile2["English"]["qcstart_date"] = "Qcstart Date";
	$fieldToolTipsrejected_jobfile2["English"]["qcstart_date"] = "";
	$fieldLabelsrejected_jobfile2["English"]["qcend_date"] = "Qcend Date";
	$fieldToolTipsrejected_jobfile2["English"]["qcend_date"] = "";
	$fieldLabelsrejected_jobfile2["English"]["qc_time"] = "Qc Time";
	$fieldToolTipsrejected_jobfile2["English"]["qc_time"] = "";
	$fieldLabelsrejected_jobfile2["English"]["upload_date"] = "Upload Date";
	$fieldToolTipsrejected_jobfile2["English"]["upload_date"] = "";
	$fieldLabelsrejected_jobfile2["English"]["notify_date"] = "Notify Date";
	$fieldToolTipsrejected_jobfile2["English"]["notify_date"] = "";
	$fieldLabelsrejected_jobfile2["English"]["reject_date"] = "Reject Date";
	$fieldToolTipsrejected_jobfile2["English"]["reject_date"] = "";
	$fieldLabelsrejected_jobfile2["English"]["reject_reason"] = "Reject Reason";
	$fieldToolTipsrejected_jobfile2["English"]["reject_reason"] = "";
	$fieldLabelsrejected_jobfile2["English"]["designer2_id"] = "Designer2 Id";
	$fieldToolTipsrejected_jobfile2["English"]["designer2_id"] = "";
	$fieldLabelsrejected_jobfile2["English"]["start2_date"] = "Start2 Date";
	$fieldToolTipsrejected_jobfile2["English"]["start2_date"] = "";
	$fieldLabelsrejected_jobfile2["English"]["end2_date"] = "End2 Date";
	$fieldToolTipsrejected_jobfile2["English"]["end2_date"] = "";
	$fieldLabelsrejected_jobfile2["English"]["designer2_time"] = "Designer2 Time";
	$fieldToolTipsrejected_jobfile2["English"]["designer2_time"] = "";
	$fieldLabelsrejected_jobfile2["English"]["previous_jobfile_id"] = "Previous Jobfile Id";
	$fieldToolTipsrejected_jobfile2["English"]["previous_jobfile_id"] = "";
	$fieldLabelsrejected_jobfile2["English"]["file_list"] = "File List";
	$fieldToolTipsrejected_jobfile2["English"]["file_list"] = "";
	$fieldLabelsrejected_jobfile2["English"]["reject_reason_others"] = "Reject Reason Others";
	$fieldToolTipsrejected_jobfile2["English"]["reject_reason_others"] = "";
	$fieldLabelsrejected_jobfile2["English"]["screenshots"] = "Screenshots";
	$fieldToolTipsrejected_jobfile2["English"]["screenshots"] = "";
	if (count($fieldToolTipsrejected_jobfile2["English"]))
		$tdatarejected_jobfile2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsrejected_jobfile2[""] = array();
	$fieldToolTipsrejected_jobfile2[""] = array();
	$pageTitlesrejected_jobfile2[""] = array();
	$fieldLabelsrejected_jobfile2[""]["jobfile_id"] = "Jobfile Id";
	$fieldToolTipsrejected_jobfile2[""]["jobfile_id"] = "";
	$fieldLabelsrejected_jobfile2[""]["file_url"] = "File Url";
	$fieldToolTipsrejected_jobfile2[""]["file_url"] = "";
	$fieldLabelsrejected_jobfile2[""]["client_id"] = "Client Id";
	$fieldToolTipsrejected_jobfile2[""]["client_id"] = "";
	$fieldLabelsrejected_jobfile2[""]["work_id"] = "Work Id";
	$fieldToolTipsrejected_jobfile2[""]["work_id"] = "";
	$fieldLabelsrejected_jobfile2[""]["job_id"] = "Job Id";
	$fieldToolTipsrejected_jobfile2[""]["job_id"] = "";
	$fieldLabelsrejected_jobfile2[""]["previous_job_id"] = "Previous Job Id";
	$fieldToolTipsrejected_jobfile2[""]["previous_job_id"] = "";
	$fieldLabelsrejected_jobfile2[""]["project_id"] = "Project Id";
	$fieldToolTipsrejected_jobfile2[""]["project_id"] = "";
	$fieldLabelsrejected_jobfile2[""]["folder_name"] = "Folder Name";
	$fieldToolTipsrejected_jobfile2[""]["folder_name"] = "";
	$fieldLabelsrejected_jobfile2[""]["filename"] = "Filename";
	$fieldToolTipsrejected_jobfile2[""]["filename"] = "";
	$fieldLabelsrejected_jobfile2[""]["jobfile_type"] = "Jobfile Type";
	$fieldToolTipsrejected_jobfile2[""]["jobfile_type"] = "";
	$fieldLabelsrejected_jobfile2[""]["jobfile_note"] = "Jobfile Note";
	$fieldToolTipsrejected_jobfile2[""]["jobfile_note"] = "";
	$fieldLabelsrejected_jobfile2[""]["jobfile_status_id"] = "Jobfile Status Id";
	$fieldToolTipsrejected_jobfile2[""]["jobfile_status_id"] = "";
	$fieldLabelsrejected_jobfile2[""]["downloader_id"] = "Downloader Id";
	$fieldToolTipsrejected_jobfile2[""]["downloader_id"] = "";
	$fieldLabelsrejected_jobfile2[""]["distributor_id"] = "Distributor Id";
	$fieldToolTipsrejected_jobfile2[""]["distributor_id"] = "";
	$fieldLabelsrejected_jobfile2[""]["designer_id"] = "Designer Id";
	$fieldToolTipsrejected_jobfile2[""]["designer_id"] = "";
	$fieldLabelsrejected_jobfile2[""]["qc_id"] = "Qc Id";
	$fieldToolTipsrejected_jobfile2[""]["qc_id"] = "";
	$fieldLabelsrejected_jobfile2[""]["uploader_id"] = "Uploader Id";
	$fieldToolTipsrejected_jobfile2[""]["uploader_id"] = "";
	$fieldLabelsrejected_jobfile2[""]["notifier_id"] = "Notifier Id";
	$fieldToolTipsrejected_jobfile2[""]["notifier_id"] = "";
	$fieldLabelsrejected_jobfile2[""]["rejector_id"] = "Rejector Id";
	$fieldToolTipsrejected_jobfile2[""]["rejector_id"] = "";
	$fieldLabelsrejected_jobfile2[""]["download_date"] = "Download Date";
	$fieldToolTipsrejected_jobfile2[""]["download_date"] = "";
	$fieldLabelsrejected_jobfile2[""]["distribute_date"] = "Distribute Date";
	$fieldToolTipsrejected_jobfile2[""]["distribute_date"] = "";
	$fieldLabelsrejected_jobfile2[""]["start_date"] = "Start Date";
	$fieldToolTipsrejected_jobfile2[""]["start_date"] = "";
	$fieldLabelsrejected_jobfile2[""]["end_date"] = "End Date";
	$fieldToolTipsrejected_jobfile2[""]["end_date"] = "";
	$fieldLabelsrejected_jobfile2[""]["designer_time"] = "Designer Time";
	$fieldToolTipsrejected_jobfile2[""]["designer_time"] = "";
	$fieldLabelsrejected_jobfile2[""]["qcstart_date"] = "Qcstart Date";
	$fieldToolTipsrejected_jobfile2[""]["qcstart_date"] = "";
	$fieldLabelsrejected_jobfile2[""]["qcend_date"] = "Qcend Date";
	$fieldToolTipsrejected_jobfile2[""]["qcend_date"] = "";
	$fieldLabelsrejected_jobfile2[""]["qc_time"] = "Qc Time";
	$fieldToolTipsrejected_jobfile2[""]["qc_time"] = "";
	$fieldLabelsrejected_jobfile2[""]["upload_date"] = "Upload Date";
	$fieldToolTipsrejected_jobfile2[""]["upload_date"] = "";
	$fieldLabelsrejected_jobfile2[""]["notify_date"] = "Notify Date";
	$fieldToolTipsrejected_jobfile2[""]["notify_date"] = "";
	$fieldLabelsrejected_jobfile2[""]["reject_date"] = "Reject Date";
	$fieldToolTipsrejected_jobfile2[""]["reject_date"] = "";
	$fieldLabelsrejected_jobfile2[""]["reject_reason"] = "Reject Reason";
	$fieldToolTipsrejected_jobfile2[""]["reject_reason"] = "";
	$fieldLabelsrejected_jobfile2[""]["designer2_id"] = "Designer2 Id";
	$fieldToolTipsrejected_jobfile2[""]["designer2_id"] = "";
	$fieldLabelsrejected_jobfile2[""]["start2_date"] = "Start2 Date";
	$fieldToolTipsrejected_jobfile2[""]["start2_date"] = "";
	$fieldLabelsrejected_jobfile2[""]["end2_date"] = "End2 Date";
	$fieldToolTipsrejected_jobfile2[""]["end2_date"] = "";
	$fieldLabelsrejected_jobfile2[""]["designer2_time"] = "Designer2 Time";
	$fieldToolTipsrejected_jobfile2[""]["designer2_time"] = "";
	$fieldLabelsrejected_jobfile2[""]["previous_jobfile_id"] = "Previous Jobfile Id";
	$fieldToolTipsrejected_jobfile2[""]["previous_jobfile_id"] = "";
	$fieldLabelsrejected_jobfile2[""]["file_list"] = "File List";
	$fieldToolTipsrejected_jobfile2[""]["file_list"] = "";
	$fieldLabelsrejected_jobfile2[""]["reject_reason_others"] = "Reject Reason Others";
	$fieldToolTipsrejected_jobfile2[""]["reject_reason_others"] = "";
	$fieldLabelsrejected_jobfile2[""]["screenshots"] = "Screenshots";
	$fieldToolTipsrejected_jobfile2[""]["screenshots"] = "";
	if (count($fieldToolTipsrejected_jobfile2[""]))
		$tdatarejected_jobfile2[".isUseToolTips"] = true;
}
	
	
	$tdatarejected_jobfile2[".NCSearch"] = true;



$tdatarejected_jobfile2[".shortTableName"] = "rejected_jobfile2";
$tdatarejected_jobfile2[".nSecOptions"] = 0;
$tdatarejected_jobfile2[".recsPerRowList"] = 1;
$tdatarejected_jobfile2[".recsPerRowPrint"] = 1;
$tdatarejected_jobfile2[".mainTableOwnerID"] = "";
$tdatarejected_jobfile2[".moveNext"] = 1;
$tdatarejected_jobfile2[".entityType"] = 0;

$tdatarejected_jobfile2[".strOriginalTableName"] = "rejected_jobfile2";




$tdatarejected_jobfile2[".showAddInPopup"] = false;

$tdatarejected_jobfile2[".showEditInPopup"] = false;

$tdatarejected_jobfile2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarejected_jobfile2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarejected_jobfile2[".fieldsForRegister"] = array();

$tdatarejected_jobfile2[".listAjax"] = false;

	$tdatarejected_jobfile2[".audit"] = false;

	$tdatarejected_jobfile2[".locking"] = false;

$tdatarejected_jobfile2[".edit"] = true;
$tdatarejected_jobfile2[".afterEditAction"] = 1;
$tdatarejected_jobfile2[".closePopupAfterEdit"] = 1;
$tdatarejected_jobfile2[".afterEditActionDetTable"] = "";

$tdatarejected_jobfile2[".add"] = true;
$tdatarejected_jobfile2[".afterAddAction"] = 0;
$tdatarejected_jobfile2[".closePopupAfterAdd"] = 1;
$tdatarejected_jobfile2[".afterAddActionDetTable"] = "";

$tdatarejected_jobfile2[".list"] = true;

$tdatarejected_jobfile2[".inlineEdit"] = true;
$tdatarejected_jobfile2[".inlineAdd"] = true;
$tdatarejected_jobfile2[".view"] = true;

$tdatarejected_jobfile2[".import"] = true;

$tdatarejected_jobfile2[".exportTo"] = true;

$tdatarejected_jobfile2[".printFriendly"] = true;

$tdatarejected_jobfile2[".delete"] = true;

$tdatarejected_jobfile2[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatarejected_jobfile2[".searchSaving"] = false;
//

$tdatarejected_jobfile2[".showSearchPanel"] = true;
		$tdatarejected_jobfile2[".flexibleSearch"] = true;		

if (isMobile())
	$tdatarejected_jobfile2[".isUseAjaxSuggest"] = false;
else 
	$tdatarejected_jobfile2[".isUseAjaxSuggest"] = true;

$tdatarejected_jobfile2[".rowHighlite"] = true;


																																																																																																																																															
$tdatarejected_jobfile2[".addPageEvents"] = true;

// use timepicker for search panel
$tdatarejected_jobfile2[".isUseTimeForSearch"] = false;





$tdatarejected_jobfile2[".allSearchFields"] = array();
$tdatarejected_jobfile2[".filterFields"] = array();
$tdatarejected_jobfile2[".requiredSearchFields"] = array();

$tdatarejected_jobfile2[".allSearchFields"][] = "jobfile_id";
	$tdatarejected_jobfile2[".allSearchFields"][] = "previous_jobfile_id";
	$tdatarejected_jobfile2[".allSearchFields"][] = "file_url";
	$tdatarejected_jobfile2[".allSearchFields"][] = "client_id";
	$tdatarejected_jobfile2[".allSearchFields"][] = "work_id";
	$tdatarejected_jobfile2[".allSearchFields"][] = "job_id";
	$tdatarejected_jobfile2[".allSearchFields"][] = "previous_job_id";
	$tdatarejected_jobfile2[".allSearchFields"][] = "project_id";
	$tdatarejected_jobfile2[".allSearchFields"][] = "folder_name";
	$tdatarejected_jobfile2[".allSearchFields"][] = "filename";
	$tdatarejected_jobfile2[".allSearchFields"][] = "file_list";
	$tdatarejected_jobfile2[".allSearchFields"][] = "jobfile_type";
	$tdatarejected_jobfile2[".allSearchFields"][] = "jobfile_note";
	$tdatarejected_jobfile2[".allSearchFields"][] = "jobfile_status_id";
	$tdatarejected_jobfile2[".allSearchFields"][] = "downloader_id";
	$tdatarejected_jobfile2[".allSearchFields"][] = "distributor_id";
	$tdatarejected_jobfile2[".allSearchFields"][] = "designer_id";
	$tdatarejected_jobfile2[".allSearchFields"][] = "qc_id";
	$tdatarejected_jobfile2[".allSearchFields"][] = "uploader_id";
	$tdatarejected_jobfile2[".allSearchFields"][] = "notifier_id";
	$tdatarejected_jobfile2[".allSearchFields"][] = "rejector_id";
	$tdatarejected_jobfile2[".allSearchFields"][] = "download_date";
	$tdatarejected_jobfile2[".allSearchFields"][] = "distribute_date";
	$tdatarejected_jobfile2[".allSearchFields"][] = "start_date";
	$tdatarejected_jobfile2[".allSearchFields"][] = "end_date";
	$tdatarejected_jobfile2[".allSearchFields"][] = "designer_time";
	$tdatarejected_jobfile2[".allSearchFields"][] = "qcstart_date";
	$tdatarejected_jobfile2[".allSearchFields"][] = "qcend_date";
	$tdatarejected_jobfile2[".allSearchFields"][] = "qc_time";
	$tdatarejected_jobfile2[".allSearchFields"][] = "upload_date";
	$tdatarejected_jobfile2[".allSearchFields"][] = "notify_date";
	$tdatarejected_jobfile2[".allSearchFields"][] = "reject_date";
	$tdatarejected_jobfile2[".allSearchFields"][] = "reject_reason";
	$tdatarejected_jobfile2[".allSearchFields"][] = "designer2_id";
	$tdatarejected_jobfile2[".allSearchFields"][] = "start2_date";
	$tdatarejected_jobfile2[".allSearchFields"][] = "end2_date";
	$tdatarejected_jobfile2[".allSearchFields"][] = "designer2_time";
	$tdatarejected_jobfile2[".allSearchFields"][] = "reject_reason_others";
	

$tdatarejected_jobfile2[".googleLikeFields"] = array();
$tdatarejected_jobfile2[".googleLikeFields"][] = "jobfile_id";
$tdatarejected_jobfile2[".googleLikeFields"][] = "previous_jobfile_id";
$tdatarejected_jobfile2[".googleLikeFields"][] = "file_url";
$tdatarejected_jobfile2[".googleLikeFields"][] = "client_id";
$tdatarejected_jobfile2[".googleLikeFields"][] = "work_id";
$tdatarejected_jobfile2[".googleLikeFields"][] = "job_id";
$tdatarejected_jobfile2[".googleLikeFields"][] = "previous_job_id";
$tdatarejected_jobfile2[".googleLikeFields"][] = "project_id";
$tdatarejected_jobfile2[".googleLikeFields"][] = "folder_name";
$tdatarejected_jobfile2[".googleLikeFields"][] = "filename";
$tdatarejected_jobfile2[".googleLikeFields"][] = "file_list";
$tdatarejected_jobfile2[".googleLikeFields"][] = "jobfile_type";
$tdatarejected_jobfile2[".googleLikeFields"][] = "jobfile_note";
$tdatarejected_jobfile2[".googleLikeFields"][] = "jobfile_status_id";
$tdatarejected_jobfile2[".googleLikeFields"][] = "downloader_id";
$tdatarejected_jobfile2[".googleLikeFields"][] = "distributor_id";
$tdatarejected_jobfile2[".googleLikeFields"][] = "designer_id";
$tdatarejected_jobfile2[".googleLikeFields"][] = "qc_id";
$tdatarejected_jobfile2[".googleLikeFields"][] = "uploader_id";
$tdatarejected_jobfile2[".googleLikeFields"][] = "notifier_id";
$tdatarejected_jobfile2[".googleLikeFields"][] = "rejector_id";
$tdatarejected_jobfile2[".googleLikeFields"][] = "download_date";
$tdatarejected_jobfile2[".googleLikeFields"][] = "distribute_date";
$tdatarejected_jobfile2[".googleLikeFields"][] = "start_date";
$tdatarejected_jobfile2[".googleLikeFields"][] = "end_date";
$tdatarejected_jobfile2[".googleLikeFields"][] = "designer_time";
$tdatarejected_jobfile2[".googleLikeFields"][] = "qcstart_date";
$tdatarejected_jobfile2[".googleLikeFields"][] = "qcend_date";
$tdatarejected_jobfile2[".googleLikeFields"][] = "qc_time";
$tdatarejected_jobfile2[".googleLikeFields"][] = "upload_date";
$tdatarejected_jobfile2[".googleLikeFields"][] = "notify_date";
$tdatarejected_jobfile2[".googleLikeFields"][] = "reject_date";
$tdatarejected_jobfile2[".googleLikeFields"][] = "reject_reason";
$tdatarejected_jobfile2[".googleLikeFields"][] = "designer2_id";
$tdatarejected_jobfile2[".googleLikeFields"][] = "start2_date";
$tdatarejected_jobfile2[".googleLikeFields"][] = "end2_date";
$tdatarejected_jobfile2[".googleLikeFields"][] = "designer2_time";
$tdatarejected_jobfile2[".googleLikeFields"][] = "reject_reason_others";
$tdatarejected_jobfile2[".googleLikeFields"][] = "screenshots";


$tdatarejected_jobfile2[".advSearchFields"] = array();
$tdatarejected_jobfile2[".advSearchFields"][] = "jobfile_id";
$tdatarejected_jobfile2[".advSearchFields"][] = "previous_jobfile_id";
$tdatarejected_jobfile2[".advSearchFields"][] = "file_url";
$tdatarejected_jobfile2[".advSearchFields"][] = "client_id";
$tdatarejected_jobfile2[".advSearchFields"][] = "work_id";
$tdatarejected_jobfile2[".advSearchFields"][] = "job_id";
$tdatarejected_jobfile2[".advSearchFields"][] = "previous_job_id";
$tdatarejected_jobfile2[".advSearchFields"][] = "project_id";
$tdatarejected_jobfile2[".advSearchFields"][] = "folder_name";
$tdatarejected_jobfile2[".advSearchFields"][] = "filename";
$tdatarejected_jobfile2[".advSearchFields"][] = "file_list";
$tdatarejected_jobfile2[".advSearchFields"][] = "jobfile_type";
$tdatarejected_jobfile2[".advSearchFields"][] = "jobfile_note";
$tdatarejected_jobfile2[".advSearchFields"][] = "jobfile_status_id";
$tdatarejected_jobfile2[".advSearchFields"][] = "downloader_id";
$tdatarejected_jobfile2[".advSearchFields"][] = "distributor_id";
$tdatarejected_jobfile2[".advSearchFields"][] = "designer_id";
$tdatarejected_jobfile2[".advSearchFields"][] = "qc_id";
$tdatarejected_jobfile2[".advSearchFields"][] = "uploader_id";
$tdatarejected_jobfile2[".advSearchFields"][] = "notifier_id";
$tdatarejected_jobfile2[".advSearchFields"][] = "rejector_id";
$tdatarejected_jobfile2[".advSearchFields"][] = "download_date";
$tdatarejected_jobfile2[".advSearchFields"][] = "distribute_date";
$tdatarejected_jobfile2[".advSearchFields"][] = "start_date";
$tdatarejected_jobfile2[".advSearchFields"][] = "end_date";
$tdatarejected_jobfile2[".advSearchFields"][] = "designer_time";
$tdatarejected_jobfile2[".advSearchFields"][] = "qcstart_date";
$tdatarejected_jobfile2[".advSearchFields"][] = "qcend_date";
$tdatarejected_jobfile2[".advSearchFields"][] = "qc_time";
$tdatarejected_jobfile2[".advSearchFields"][] = "upload_date";
$tdatarejected_jobfile2[".advSearchFields"][] = "notify_date";
$tdatarejected_jobfile2[".advSearchFields"][] = "reject_date";
$tdatarejected_jobfile2[".advSearchFields"][] = "reject_reason";
$tdatarejected_jobfile2[".advSearchFields"][] = "designer2_id";
$tdatarejected_jobfile2[".advSearchFields"][] = "start2_date";
$tdatarejected_jobfile2[".advSearchFields"][] = "end2_date";
$tdatarejected_jobfile2[".advSearchFields"][] = "designer2_time";
$tdatarejected_jobfile2[".advSearchFields"][] = "reject_reason_others";

$tdatarejected_jobfile2[".tableType"] = "list";

$tdatarejected_jobfile2[".printerPageOrientation"] = 0;
$tdatarejected_jobfile2[".nPrinterPageScale"] = 100;

$tdatarejected_jobfile2[".nPrinterSplitRecords"] = 40;

$tdatarejected_jobfile2[".nPrinterPDFSplitRecords"] = 40;



$tdatarejected_jobfile2[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatarejected_jobfile2[".pageSize"] = 20;

$tdatarejected_jobfile2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarejected_jobfile2[".strOrderBy"] = $tstrOrderBy;

$tdatarejected_jobfile2[".orderindexes"] = array();

$tdatarejected_jobfile2[".sqlHead"] = "SELECT jobfile_id,  previous_jobfile_id,  file_url,  client_id,  work_id,  job_id,  previous_job_id,  project_id,  folder_name,  filename,  filename AS file_list,  jobfile_type,  jobfile_note,  jobfile_status_id,  downloader_id,  distributor_id,  designer_id,  qc_id,  uploader_id,  notifier_id,  rejector_id,  download_date,  distribute_date,  start_date,  end_date,  designer_time,  qcstart_date,  qcend_date,  qc_time,  upload_date,  notify_date,  reject_date,  reject_reason,  designer2_id,  start2_date,  end2_date,  designer2_time,  reject_reason_others,  screenshots";
$tdatarejected_jobfile2[".sqlFrom"] = "FROM rejected_jobfile2";
$tdatarejected_jobfile2[".sqlWhereExpr"] = "";
$tdatarejected_jobfile2[".sqlTail"] = "";




//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "jobfile_status_id";
	$tabFields[] = "client_id";
	$tabFields[] = "folder_name";
	$tabFields[] = "distribute_date";
	$tabFields[] = "qcstart_date";
	$tabFields[] = "qcend_date";
	$tabFields[] = "end_date";
	$tabFields[] = "start_date";
	$tabFields[] = "distributor_id";
	$tabFields[] = "notify_date";
	$tabFields[] = "download_date";
	$tabFields[] = "end2_date";
	$tabFields[] = "start2_date";
	$tabFields[] = "uploader_id";
	$tabFields[] = "downloader_id";
	$tabFields[] = "notifier_id";
	$tabFields[] = "file_list";
	$tabFields[] = "jobfile_type";
	$tabFields[] = "upload_date";
	$tabFields[] = "work_id";
$arrViewTabs[] = array('tabId'=>'Others1',
					   'tabName'=>"Others",
					   'nType'=>'1',
					   'nOrder'=>20,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatarejected_jobfile2[".arrViewTabs"] = $arrViewTabs;





//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarejected_jobfile2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarejected_jobfile2[".arrGroupsPerPage"] = $arrGPP;

$tdatarejected_jobfile2[".highlightSearchResults"] = true;

$tableKeysrejected_jobfile2 = array();
$tableKeysrejected_jobfile2[] = "jobfile_id";
$tdatarejected_jobfile2[".Keys"] = $tableKeysrejected_jobfile2;

$tdatarejected_jobfile2[".listFields"] = array();
$tdatarejected_jobfile2[".listFields"][] = "reject_reason_others";
$tdatarejected_jobfile2[".listFields"][] = "screenshots";
$tdatarejected_jobfile2[".listFields"][] = "file_list";
$tdatarejected_jobfile2[".listFields"][] = "previous_jobfile_id";
$tdatarejected_jobfile2[".listFields"][] = "jobfile_id";
$tdatarejected_jobfile2[".listFields"][] = "client_id";
$tdatarejected_jobfile2[".listFields"][] = "work_id";
$tdatarejected_jobfile2[".listFields"][] = "job_id";
$tdatarejected_jobfile2[".listFields"][] = "previous_job_id";
$tdatarejected_jobfile2[".listFields"][] = "project_id";
$tdatarejected_jobfile2[".listFields"][] = "folder_name";
$tdatarejected_jobfile2[".listFields"][] = "file_url";
$tdatarejected_jobfile2[".listFields"][] = "filename";
$tdatarejected_jobfile2[".listFields"][] = "jobfile_type";
$tdatarejected_jobfile2[".listFields"][] = "jobfile_note";
$tdatarejected_jobfile2[".listFields"][] = "jobfile_status_id";
$tdatarejected_jobfile2[".listFields"][] = "designer_id";
$tdatarejected_jobfile2[".listFields"][] = "start_date";
$tdatarejected_jobfile2[".listFields"][] = "end_date";
$tdatarejected_jobfile2[".listFields"][] = "designer_time";
$tdatarejected_jobfile2[".listFields"][] = "designer2_id";
$tdatarejected_jobfile2[".listFields"][] = "start2_date";
$tdatarejected_jobfile2[".listFields"][] = "end2_date";
$tdatarejected_jobfile2[".listFields"][] = "designer2_time";
$tdatarejected_jobfile2[".listFields"][] = "qc_id";
$tdatarejected_jobfile2[".listFields"][] = "qcstart_date";
$tdatarejected_jobfile2[".listFields"][] = "qcend_date";
$tdatarejected_jobfile2[".listFields"][] = "qc_time";
$tdatarejected_jobfile2[".listFields"][] = "rejector_id";
$tdatarejected_jobfile2[".listFields"][] = "reject_date";
$tdatarejected_jobfile2[".listFields"][] = "reject_reason";
$tdatarejected_jobfile2[".listFields"][] = "downloader_id";
$tdatarejected_jobfile2[".listFields"][] = "download_date";
$tdatarejected_jobfile2[".listFields"][] = "distributor_id";
$tdatarejected_jobfile2[".listFields"][] = "distribute_date";
$tdatarejected_jobfile2[".listFields"][] = "uploader_id";
$tdatarejected_jobfile2[".listFields"][] = "upload_date";
$tdatarejected_jobfile2[".listFields"][] = "notifier_id";
$tdatarejected_jobfile2[".listFields"][] = "notify_date";

$tdatarejected_jobfile2[".hideMobileList"] = array();


$tdatarejected_jobfile2[".viewFields"] = array();
$tdatarejected_jobfile2[".viewFields"][] = "job_id";
$tdatarejected_jobfile2[".viewFields"][] = "previous_job_id";
$tdatarejected_jobfile2[".viewFields"][] = "jobfile_id";
$tdatarejected_jobfile2[".viewFields"][] = "previous_jobfile_id";
$tdatarejected_jobfile2[".viewFields"][] = "filename";
$tdatarejected_jobfile2[".viewFields"][] = "project_id";
$tdatarejected_jobfile2[".viewFields"][] = "jobfile_note";
$tdatarejected_jobfile2[".viewFields"][] = "designer_id";
$tdatarejected_jobfile2[".viewFields"][] = "designer_time";
$tdatarejected_jobfile2[".viewFields"][] = "designer2_id";
$tdatarejected_jobfile2[".viewFields"][] = "designer2_time";
$tdatarejected_jobfile2[".viewFields"][] = "qc_id";
$tdatarejected_jobfile2[".viewFields"][] = "qc_time";
$tdatarejected_jobfile2[".viewFields"][] = "rejector_id";
$tdatarejected_jobfile2[".viewFields"][] = "reject_date";
$tdatarejected_jobfile2[".viewFields"][] = "reject_reason";
$tdatarejected_jobfile2[".viewFields"][] = "reject_reason_others";
$tdatarejected_jobfile2[".viewFields"][] = "file_url";
$tdatarejected_jobfile2[".viewFields"][] = "screenshots";
$tdatarejected_jobfile2[".viewFields"][] = "jobfile_status_id";
$tdatarejected_jobfile2[".viewFields"][] = "client_id";
$tdatarejected_jobfile2[".viewFields"][] = "folder_name";
$tdatarejected_jobfile2[".viewFields"][] = "distribute_date";
$tdatarejected_jobfile2[".viewFields"][] = "qcstart_date";
$tdatarejected_jobfile2[".viewFields"][] = "qcend_date";
$tdatarejected_jobfile2[".viewFields"][] = "end_date";
$tdatarejected_jobfile2[".viewFields"][] = "start_date";
$tdatarejected_jobfile2[".viewFields"][] = "distributor_id";
$tdatarejected_jobfile2[".viewFields"][] = "notify_date";
$tdatarejected_jobfile2[".viewFields"][] = "download_date";
$tdatarejected_jobfile2[".viewFields"][] = "end2_date";
$tdatarejected_jobfile2[".viewFields"][] = "start2_date";
$tdatarejected_jobfile2[".viewFields"][] = "uploader_id";
$tdatarejected_jobfile2[".viewFields"][] = "downloader_id";
$tdatarejected_jobfile2[".viewFields"][] = "notifier_id";
$tdatarejected_jobfile2[".viewFields"][] = "file_list";
$tdatarejected_jobfile2[".viewFields"][] = "jobfile_type";
$tdatarejected_jobfile2[".viewFields"][] = "upload_date";
$tdatarejected_jobfile2[".viewFields"][] = "work_id";

$tdatarejected_jobfile2[".addFields"] = array();
$tdatarejected_jobfile2[".addFields"][] = "reject_reason_others";
$tdatarejected_jobfile2[".addFields"][] = "screenshots";
$tdatarejected_jobfile2[".addFields"][] = "jobfile_id";
$tdatarejected_jobfile2[".addFields"][] = "previous_jobfile_id";
$tdatarejected_jobfile2[".addFields"][] = "file_list";
$tdatarejected_jobfile2[".addFields"][] = "file_url";
$tdatarejected_jobfile2[".addFields"][] = "filename";
$tdatarejected_jobfile2[".addFields"][] = "jobfile_status_id";
$tdatarejected_jobfile2[".addFields"][] = "job_id";
$tdatarejected_jobfile2[".addFields"][] = "project_id";
$tdatarejected_jobfile2[".addFields"][] = "work_id";
$tdatarejected_jobfile2[".addFields"][] = "previous_job_id";
$tdatarejected_jobfile2[".addFields"][] = "designer2_id";
$tdatarejected_jobfile2[".addFields"][] = "designer2_time";
$tdatarejected_jobfile2[".addFields"][] = "qc_id";
$tdatarejected_jobfile2[".addFields"][] = "jobfile_note";
$tdatarejected_jobfile2[".addFields"][] = "rejector_id";
$tdatarejected_jobfile2[".addFields"][] = "reject_date";
$tdatarejected_jobfile2[".addFields"][] = "reject_reason";
$tdatarejected_jobfile2[".addFields"][] = "designer_id";
$tdatarejected_jobfile2[".addFields"][] = "notify_date";
$tdatarejected_jobfile2[".addFields"][] = "start2_date";
$tdatarejected_jobfile2[".addFields"][] = "end2_date";
$tdatarejected_jobfile2[".addFields"][] = "upload_date";
$tdatarejected_jobfile2[".addFields"][] = "qc_time";
$tdatarejected_jobfile2[".addFields"][] = "qcend_date";
$tdatarejected_jobfile2[".addFields"][] = "qcstart_date";
$tdatarejected_jobfile2[".addFields"][] = "designer_time";
$tdatarejected_jobfile2[".addFields"][] = "end_date";
$tdatarejected_jobfile2[".addFields"][] = "distribute_date";
$tdatarejected_jobfile2[".addFields"][] = "start_date";
$tdatarejected_jobfile2[".addFields"][] = "download_date";
$tdatarejected_jobfile2[".addFields"][] = "notifier_id";
$tdatarejected_jobfile2[".addFields"][] = "uploader_id";
$tdatarejected_jobfile2[".addFields"][] = "client_id";
$tdatarejected_jobfile2[".addFields"][] = "folder_name";
$tdatarejected_jobfile2[".addFields"][] = "jobfile_type";
$tdatarejected_jobfile2[".addFields"][] = "downloader_id";
$tdatarejected_jobfile2[".addFields"][] = "distributor_id";

$tdatarejected_jobfile2[".masterListFields"] = array();
$tdatarejected_jobfile2[".masterListFields"][] = "jobfile_id";
$tdatarejected_jobfile2[".masterListFields"][] = "previous_jobfile_id";
$tdatarejected_jobfile2[".masterListFields"][] = "file_url";
$tdatarejected_jobfile2[".masterListFields"][] = "client_id";
$tdatarejected_jobfile2[".masterListFields"][] = "work_id";
$tdatarejected_jobfile2[".masterListFields"][] = "job_id";
$tdatarejected_jobfile2[".masterListFields"][] = "previous_job_id";
$tdatarejected_jobfile2[".masterListFields"][] = "project_id";
$tdatarejected_jobfile2[".masterListFields"][] = "folder_name";
$tdatarejected_jobfile2[".masterListFields"][] = "filename";
$tdatarejected_jobfile2[".masterListFields"][] = "file_list";
$tdatarejected_jobfile2[".masterListFields"][] = "jobfile_type";
$tdatarejected_jobfile2[".masterListFields"][] = "jobfile_note";
$tdatarejected_jobfile2[".masterListFields"][] = "jobfile_status_id";
$tdatarejected_jobfile2[".masterListFields"][] = "downloader_id";
$tdatarejected_jobfile2[".masterListFields"][] = "distributor_id";
$tdatarejected_jobfile2[".masterListFields"][] = "designer_id";
$tdatarejected_jobfile2[".masterListFields"][] = "qc_id";
$tdatarejected_jobfile2[".masterListFields"][] = "uploader_id";
$tdatarejected_jobfile2[".masterListFields"][] = "notifier_id";
$tdatarejected_jobfile2[".masterListFields"][] = "rejector_id";
$tdatarejected_jobfile2[".masterListFields"][] = "download_date";
$tdatarejected_jobfile2[".masterListFields"][] = "distribute_date";
$tdatarejected_jobfile2[".masterListFields"][] = "start_date";
$tdatarejected_jobfile2[".masterListFields"][] = "end_date";
$tdatarejected_jobfile2[".masterListFields"][] = "designer_time";
$tdatarejected_jobfile2[".masterListFields"][] = "qcstart_date";
$tdatarejected_jobfile2[".masterListFields"][] = "qcend_date";
$tdatarejected_jobfile2[".masterListFields"][] = "qc_time";
$tdatarejected_jobfile2[".masterListFields"][] = "upload_date";
$tdatarejected_jobfile2[".masterListFields"][] = "notify_date";
$tdatarejected_jobfile2[".masterListFields"][] = "reject_date";
$tdatarejected_jobfile2[".masterListFields"][] = "reject_reason";
$tdatarejected_jobfile2[".masterListFields"][] = "designer2_id";
$tdatarejected_jobfile2[".masterListFields"][] = "start2_date";
$tdatarejected_jobfile2[".masterListFields"][] = "end2_date";
$tdatarejected_jobfile2[".masterListFields"][] = "designer2_time";
$tdatarejected_jobfile2[".masterListFields"][] = "reject_reason_others";
$tdatarejected_jobfile2[".masterListFields"][] = "screenshots";

$tdatarejected_jobfile2[".inlineAddFields"] = array();
$tdatarejected_jobfile2[".inlineAddFields"][] = "reject_reason_others";
$tdatarejected_jobfile2[".inlineAddFields"][] = "screenshots";
$tdatarejected_jobfile2[".inlineAddFields"][] = "file_list";
$tdatarejected_jobfile2[".inlineAddFields"][] = "previous_jobfile_id";
$tdatarejected_jobfile2[".inlineAddFields"][] = "client_id";
$tdatarejected_jobfile2[".inlineAddFields"][] = "work_id";
$tdatarejected_jobfile2[".inlineAddFields"][] = "job_id";
$tdatarejected_jobfile2[".inlineAddFields"][] = "previous_job_id";
$tdatarejected_jobfile2[".inlineAddFields"][] = "project_id";
$tdatarejected_jobfile2[".inlineAddFields"][] = "folder_name";
$tdatarejected_jobfile2[".inlineAddFields"][] = "file_url";
$tdatarejected_jobfile2[".inlineAddFields"][] = "filename";
$tdatarejected_jobfile2[".inlineAddFields"][] = "jobfile_type";
$tdatarejected_jobfile2[".inlineAddFields"][] = "jobfile_note";
$tdatarejected_jobfile2[".inlineAddFields"][] = "jobfile_status_id";
$tdatarejected_jobfile2[".inlineAddFields"][] = "designer_id";
$tdatarejected_jobfile2[".inlineAddFields"][] = "start_date";
$tdatarejected_jobfile2[".inlineAddFields"][] = "end_date";
$tdatarejected_jobfile2[".inlineAddFields"][] = "designer_time";
$tdatarejected_jobfile2[".inlineAddFields"][] = "designer2_id";
$tdatarejected_jobfile2[".inlineAddFields"][] = "start2_date";
$tdatarejected_jobfile2[".inlineAddFields"][] = "end2_date";
$tdatarejected_jobfile2[".inlineAddFields"][] = "designer2_time";
$tdatarejected_jobfile2[".inlineAddFields"][] = "qc_id";
$tdatarejected_jobfile2[".inlineAddFields"][] = "qcstart_date";
$tdatarejected_jobfile2[".inlineAddFields"][] = "qcend_date";
$tdatarejected_jobfile2[".inlineAddFields"][] = "qc_time";
$tdatarejected_jobfile2[".inlineAddFields"][] = "rejector_id";
$tdatarejected_jobfile2[".inlineAddFields"][] = "reject_date";
$tdatarejected_jobfile2[".inlineAddFields"][] = "reject_reason";
$tdatarejected_jobfile2[".inlineAddFields"][] = "downloader_id";
$tdatarejected_jobfile2[".inlineAddFields"][] = "download_date";
$tdatarejected_jobfile2[".inlineAddFields"][] = "distributor_id";
$tdatarejected_jobfile2[".inlineAddFields"][] = "distribute_date";
$tdatarejected_jobfile2[".inlineAddFields"][] = "uploader_id";
$tdatarejected_jobfile2[".inlineAddFields"][] = "upload_date";
$tdatarejected_jobfile2[".inlineAddFields"][] = "notifier_id";
$tdatarejected_jobfile2[".inlineAddFields"][] = "notify_date";

$tdatarejected_jobfile2[".editFields"] = array();
$tdatarejected_jobfile2[".editFields"][] = "previous_jobfile_id";
$tdatarejected_jobfile2[".editFields"][] = "reject_reason_others";
$tdatarejected_jobfile2[".editFields"][] = "screenshots";
$tdatarejected_jobfile2[".editFields"][] = "file_list";
$tdatarejected_jobfile2[".editFields"][] = "file_url";
$tdatarejected_jobfile2[".editFields"][] = "client_id";
$tdatarejected_jobfile2[".editFields"][] = "work_id";
$tdatarejected_jobfile2[".editFields"][] = "job_id";
$tdatarejected_jobfile2[".editFields"][] = "previous_job_id";
$tdatarejected_jobfile2[".editFields"][] = "project_id";
$tdatarejected_jobfile2[".editFields"][] = "folder_name";
$tdatarejected_jobfile2[".editFields"][] = "filename";
$tdatarejected_jobfile2[".editFields"][] = "jobfile_type";
$tdatarejected_jobfile2[".editFields"][] = "jobfile_note";
$tdatarejected_jobfile2[".editFields"][] = "jobfile_status_id";
$tdatarejected_jobfile2[".editFields"][] = "downloader_id";
$tdatarejected_jobfile2[".editFields"][] = "distributor_id";
$tdatarejected_jobfile2[".editFields"][] = "designer_id";
$tdatarejected_jobfile2[".editFields"][] = "qc_id";
$tdatarejected_jobfile2[".editFields"][] = "uploader_id";
$tdatarejected_jobfile2[".editFields"][] = "notifier_id";
$tdatarejected_jobfile2[".editFields"][] = "rejector_id";
$tdatarejected_jobfile2[".editFields"][] = "download_date";
$tdatarejected_jobfile2[".editFields"][] = "distribute_date";
$tdatarejected_jobfile2[".editFields"][] = "start_date";
$tdatarejected_jobfile2[".editFields"][] = "end_date";
$tdatarejected_jobfile2[".editFields"][] = "designer_time";
$tdatarejected_jobfile2[".editFields"][] = "qcstart_date";
$tdatarejected_jobfile2[".editFields"][] = "qcend_date";
$tdatarejected_jobfile2[".editFields"][] = "qc_time";
$tdatarejected_jobfile2[".editFields"][] = "upload_date";
$tdatarejected_jobfile2[".editFields"][] = "notify_date";
$tdatarejected_jobfile2[".editFields"][] = "reject_date";
$tdatarejected_jobfile2[".editFields"][] = "reject_reason";
$tdatarejected_jobfile2[".editFields"][] = "designer2_id";
$tdatarejected_jobfile2[".editFields"][] = "start2_date";
$tdatarejected_jobfile2[".editFields"][] = "end2_date";
$tdatarejected_jobfile2[".editFields"][] = "designer2_time";

$tdatarejected_jobfile2[".inlineEditFields"] = array();
$tdatarejected_jobfile2[".inlineEditFields"][] = "reject_reason_others";
$tdatarejected_jobfile2[".inlineEditFields"][] = "screenshots";
$tdatarejected_jobfile2[".inlineEditFields"][] = "file_list";
$tdatarejected_jobfile2[".inlineEditFields"][] = "previous_jobfile_id";
$tdatarejected_jobfile2[".inlineEditFields"][] = "client_id";
$tdatarejected_jobfile2[".inlineEditFields"][] = "work_id";
$tdatarejected_jobfile2[".inlineEditFields"][] = "job_id";
$tdatarejected_jobfile2[".inlineEditFields"][] = "previous_job_id";
$tdatarejected_jobfile2[".inlineEditFields"][] = "project_id";
$tdatarejected_jobfile2[".inlineEditFields"][] = "folder_name";
$tdatarejected_jobfile2[".inlineEditFields"][] = "file_url";
$tdatarejected_jobfile2[".inlineEditFields"][] = "filename";
$tdatarejected_jobfile2[".inlineEditFields"][] = "jobfile_type";
$tdatarejected_jobfile2[".inlineEditFields"][] = "jobfile_note";
$tdatarejected_jobfile2[".inlineEditFields"][] = "jobfile_status_id";
$tdatarejected_jobfile2[".inlineEditFields"][] = "designer_id";
$tdatarejected_jobfile2[".inlineEditFields"][] = "start_date";
$tdatarejected_jobfile2[".inlineEditFields"][] = "end_date";
$tdatarejected_jobfile2[".inlineEditFields"][] = "designer_time";
$tdatarejected_jobfile2[".inlineEditFields"][] = "designer2_id";
$tdatarejected_jobfile2[".inlineEditFields"][] = "start2_date";
$tdatarejected_jobfile2[".inlineEditFields"][] = "end2_date";
$tdatarejected_jobfile2[".inlineEditFields"][] = "designer2_time";
$tdatarejected_jobfile2[".inlineEditFields"][] = "qc_id";
$tdatarejected_jobfile2[".inlineEditFields"][] = "qcstart_date";
$tdatarejected_jobfile2[".inlineEditFields"][] = "qcend_date";
$tdatarejected_jobfile2[".inlineEditFields"][] = "qc_time";
$tdatarejected_jobfile2[".inlineEditFields"][] = "rejector_id";
$tdatarejected_jobfile2[".inlineEditFields"][] = "reject_date";
$tdatarejected_jobfile2[".inlineEditFields"][] = "reject_reason";
$tdatarejected_jobfile2[".inlineEditFields"][] = "downloader_id";
$tdatarejected_jobfile2[".inlineEditFields"][] = "download_date";
$tdatarejected_jobfile2[".inlineEditFields"][] = "distributor_id";
$tdatarejected_jobfile2[".inlineEditFields"][] = "distribute_date";
$tdatarejected_jobfile2[".inlineEditFields"][] = "uploader_id";
$tdatarejected_jobfile2[".inlineEditFields"][] = "upload_date";
$tdatarejected_jobfile2[".inlineEditFields"][] = "notifier_id";
$tdatarejected_jobfile2[".inlineEditFields"][] = "notify_date";

$tdatarejected_jobfile2[".exportFields"] = array();
$tdatarejected_jobfile2[".exportFields"][] = "jobfile_id";
$tdatarejected_jobfile2[".exportFields"][] = "previous_jobfile_id";
$tdatarejected_jobfile2[".exportFields"][] = "file_url";
$tdatarejected_jobfile2[".exportFields"][] = "client_id";
$tdatarejected_jobfile2[".exportFields"][] = "work_id";
$tdatarejected_jobfile2[".exportFields"][] = "job_id";
$tdatarejected_jobfile2[".exportFields"][] = "previous_job_id";
$tdatarejected_jobfile2[".exportFields"][] = "project_id";
$tdatarejected_jobfile2[".exportFields"][] = "folder_name";
$tdatarejected_jobfile2[".exportFields"][] = "filename";
$tdatarejected_jobfile2[".exportFields"][] = "file_list";
$tdatarejected_jobfile2[".exportFields"][] = "jobfile_type";
$tdatarejected_jobfile2[".exportFields"][] = "jobfile_note";
$tdatarejected_jobfile2[".exportFields"][] = "jobfile_status_id";
$tdatarejected_jobfile2[".exportFields"][] = "downloader_id";
$tdatarejected_jobfile2[".exportFields"][] = "distributor_id";
$tdatarejected_jobfile2[".exportFields"][] = "designer_id";
$tdatarejected_jobfile2[".exportFields"][] = "qc_id";
$tdatarejected_jobfile2[".exportFields"][] = "uploader_id";
$tdatarejected_jobfile2[".exportFields"][] = "notifier_id";
$tdatarejected_jobfile2[".exportFields"][] = "rejector_id";
$tdatarejected_jobfile2[".exportFields"][] = "download_date";
$tdatarejected_jobfile2[".exportFields"][] = "distribute_date";
$tdatarejected_jobfile2[".exportFields"][] = "start_date";
$tdatarejected_jobfile2[".exportFields"][] = "end_date";
$tdatarejected_jobfile2[".exportFields"][] = "designer_time";
$tdatarejected_jobfile2[".exportFields"][] = "qcstart_date";
$tdatarejected_jobfile2[".exportFields"][] = "qcend_date";
$tdatarejected_jobfile2[".exportFields"][] = "qc_time";
$tdatarejected_jobfile2[".exportFields"][] = "upload_date";
$tdatarejected_jobfile2[".exportFields"][] = "notify_date";
$tdatarejected_jobfile2[".exportFields"][] = "reject_date";
$tdatarejected_jobfile2[".exportFields"][] = "reject_reason";
$tdatarejected_jobfile2[".exportFields"][] = "designer2_id";
$tdatarejected_jobfile2[".exportFields"][] = "start2_date";
$tdatarejected_jobfile2[".exportFields"][] = "end2_date";
$tdatarejected_jobfile2[".exportFields"][] = "designer2_time";
$tdatarejected_jobfile2[".exportFields"][] = "reject_reason_others";

$tdatarejected_jobfile2[".importFields"] = array();
$tdatarejected_jobfile2[".importFields"][] = "jobfile_id";
$tdatarejected_jobfile2[".importFields"][] = "previous_jobfile_id";
$tdatarejected_jobfile2[".importFields"][] = "file_url";
$tdatarejected_jobfile2[".importFields"][] = "client_id";
$tdatarejected_jobfile2[".importFields"][] = "work_id";
$tdatarejected_jobfile2[".importFields"][] = "job_id";
$tdatarejected_jobfile2[".importFields"][] = "previous_job_id";
$tdatarejected_jobfile2[".importFields"][] = "project_id";
$tdatarejected_jobfile2[".importFields"][] = "folder_name";
$tdatarejected_jobfile2[".importFields"][] = "filename";
$tdatarejected_jobfile2[".importFields"][] = "file_list";
$tdatarejected_jobfile2[".importFields"][] = "jobfile_type";
$tdatarejected_jobfile2[".importFields"][] = "jobfile_note";
$tdatarejected_jobfile2[".importFields"][] = "jobfile_status_id";
$tdatarejected_jobfile2[".importFields"][] = "downloader_id";
$tdatarejected_jobfile2[".importFields"][] = "distributor_id";
$tdatarejected_jobfile2[".importFields"][] = "designer_id";
$tdatarejected_jobfile2[".importFields"][] = "qc_id";
$tdatarejected_jobfile2[".importFields"][] = "uploader_id";
$tdatarejected_jobfile2[".importFields"][] = "notifier_id";
$tdatarejected_jobfile2[".importFields"][] = "rejector_id";
$tdatarejected_jobfile2[".importFields"][] = "download_date";
$tdatarejected_jobfile2[".importFields"][] = "distribute_date";
$tdatarejected_jobfile2[".importFields"][] = "start_date";
$tdatarejected_jobfile2[".importFields"][] = "end_date";
$tdatarejected_jobfile2[".importFields"][] = "designer_time";
$tdatarejected_jobfile2[".importFields"][] = "qcstart_date";
$tdatarejected_jobfile2[".importFields"][] = "qcend_date";
$tdatarejected_jobfile2[".importFields"][] = "qc_time";
$tdatarejected_jobfile2[".importFields"][] = "upload_date";
$tdatarejected_jobfile2[".importFields"][] = "notify_date";
$tdatarejected_jobfile2[".importFields"][] = "reject_date";
$tdatarejected_jobfile2[".importFields"][] = "reject_reason";
$tdatarejected_jobfile2[".importFields"][] = "designer2_id";
$tdatarejected_jobfile2[".importFields"][] = "start2_date";
$tdatarejected_jobfile2[".importFields"][] = "end2_date";
$tdatarejected_jobfile2[".importFields"][] = "designer2_time";
$tdatarejected_jobfile2[".importFields"][] = "reject_reason_others";

$tdatarejected_jobfile2[".printFields"] = array();
$tdatarejected_jobfile2[".printFields"][] = "jobfile_id";
$tdatarejected_jobfile2[".printFields"][] = "previous_jobfile_id";
$tdatarejected_jobfile2[".printFields"][] = "file_url";
$tdatarejected_jobfile2[".printFields"][] = "client_id";
$tdatarejected_jobfile2[".printFields"][] = "work_id";
$tdatarejected_jobfile2[".printFields"][] = "job_id";
$tdatarejected_jobfile2[".printFields"][] = "previous_job_id";
$tdatarejected_jobfile2[".printFields"][] = "project_id";
$tdatarejected_jobfile2[".printFields"][] = "folder_name";
$tdatarejected_jobfile2[".printFields"][] = "filename";
$tdatarejected_jobfile2[".printFields"][] = "file_list";
$tdatarejected_jobfile2[".printFields"][] = "jobfile_type";
$tdatarejected_jobfile2[".printFields"][] = "jobfile_note";
$tdatarejected_jobfile2[".printFields"][] = "jobfile_status_id";
$tdatarejected_jobfile2[".printFields"][] = "downloader_id";
$tdatarejected_jobfile2[".printFields"][] = "distributor_id";
$tdatarejected_jobfile2[".printFields"][] = "designer_id";
$tdatarejected_jobfile2[".printFields"][] = "qc_id";
$tdatarejected_jobfile2[".printFields"][] = "uploader_id";
$tdatarejected_jobfile2[".printFields"][] = "notifier_id";
$tdatarejected_jobfile2[".printFields"][] = "rejector_id";
$tdatarejected_jobfile2[".printFields"][] = "download_date";
$tdatarejected_jobfile2[".printFields"][] = "distribute_date";
$tdatarejected_jobfile2[".printFields"][] = "start_date";
$tdatarejected_jobfile2[".printFields"][] = "end_date";
$tdatarejected_jobfile2[".printFields"][] = "designer_time";
$tdatarejected_jobfile2[".printFields"][] = "qcstart_date";
$tdatarejected_jobfile2[".printFields"][] = "qcend_date";
$tdatarejected_jobfile2[".printFields"][] = "qc_time";
$tdatarejected_jobfile2[".printFields"][] = "upload_date";
$tdatarejected_jobfile2[".printFields"][] = "notify_date";
$tdatarejected_jobfile2[".printFields"][] = "reject_date";
$tdatarejected_jobfile2[".printFields"][] = "reject_reason";
$tdatarejected_jobfile2[".printFields"][] = "designer2_id";
$tdatarejected_jobfile2[".printFields"][] = "start2_date";
$tdatarejected_jobfile2[".printFields"][] = "end2_date";
$tdatarejected_jobfile2[".printFields"][] = "designer2_time";
$tdatarejected_jobfile2[".printFields"][] = "reject_reason_others";
$tdatarejected_jobfile2[".printFields"][] = "screenshots";

//	jobfile_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "jobfile_id";
	$fdata["GoodName"] = "jobfile_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","jobfile_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
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
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "jobfile";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
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
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatarejected_jobfile2["jobfile_id"] = $fdata;
//	previous_jobfile_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "previous_jobfile_id";
	$fdata["GoodName"] = "previous_jobfile_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","previous_jobfile_id"); 
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
	
		$fdata["strField"] = "previous_jobfile_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "previous_jobfile_id";
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatarejected_jobfile2["previous_jobfile_id"] = $fdata;
//	file_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "file_url";
	$fdata["GoodName"] = "file_url";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","file_url"); 
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
	
		$fdata["strField"] = "file_url"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "file_url";
	
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatarejected_jobfile2["file_url"] = $fdata;
//	client_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "client_id";
	$fdata["GoodName"] = "client_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","client_id"); 
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
	
		$fdata["strField"] = "client_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "client_id";
	
		
		
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

	

	
	$tdatarejected_jobfile2["client_id"] = $fdata;
//	work_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "work_id";
	$fdata["GoodName"] = "work_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","work_id"); 
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
	
		$fdata["strField"] = "work_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "work_id";
	
		
		
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

	

	
	$tdatarejected_jobfile2["work_id"] = $fdata;
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","job_id"); 
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

	

	
	$tdatarejected_jobfile2["job_id"] = $fdata;
//	previous_job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "previous_job_id";
	$fdata["GoodName"] = "previous_job_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","previous_job_id"); 
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
	
		$fdata["strField"] = "previous_job_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "previous_job_id";
	
		
		
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

	

	
	$tdatarejected_jobfile2["previous_job_id"] = $fdata;
//	project_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "project_id";
	$fdata["GoodName"] = "project_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","project_id"); 
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
	
		$fdata["strField"] = "project_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project_id";
	
		
		
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
	$edata["LookupTable"] = "pdf";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;
		
		
			
	$edata["LinkField"] = "pdf_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "pdf_name";
	
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatarejected_jobfile2["project_id"] = $fdata;
//	folder_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "folder_name";
	$fdata["GoodName"] = "folder_name";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","folder_name"); 
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
	
		$fdata["strField"] = "folder_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "folder_name";
	
		
		
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

	

	
	$tdatarejected_jobfile2["folder_name"] = $fdata;
//	filename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "filename";
	$fdata["GoodName"] = "filename";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","filename"); 
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
	
		$fdata["strField"] = "filename"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "filename";
	
		
		
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

	

	
	$tdatarejected_jobfile2["filename"] = $fdata;
//	file_list
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "file_list";
	$fdata["GoodName"] = "file_list";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","file_list"); 
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
	
		$fdata["strField"] = "filename"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "filename";
	
		
		
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 420;
			
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatarejected_jobfile2["file_list"] = $fdata;
//	jobfile_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "jobfile_type";
	$fdata["GoodName"] = "jobfile_type";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","jobfile_type"); 
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
	
		$fdata["strField"] = "jobfile_type"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile_type";
	
		
		
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
	$edata["LookupTable"] = "work_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "type";
	
		
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

	

	
	$tdatarejected_jobfile2["jobfile_type"] = $fdata;
//	jobfile_note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "jobfile_note";
	$fdata["GoodName"] = "jobfile_note";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","jobfile_note"); 
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
	
		$fdata["strField"] = "jobfile_note"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile_note";
	
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatarejected_jobfile2["jobfile_note"] = $fdata;
//	jobfile_status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "jobfile_status_id";
	$fdata["GoodName"] = "jobfile_status_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","jobfile_status_id"); 
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
	
		$fdata["strField"] = "jobfile_status_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile_status_id";
	
		
		
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

	

	
	$tdatarejected_jobfile2["jobfile_status_id"] = $fdata;
//	downloader_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "downloader_id";
	$fdata["GoodName"] = "downloader_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","downloader_id"); 
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
	
		$fdata["strField"] = "downloader_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "downloader_id";
	
		
		
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

	

	
	$tdatarejected_jobfile2["downloader_id"] = $fdata;
//	distributor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "distributor_id";
	$fdata["GoodName"] = "distributor_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","distributor_id"); 
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
	
		$fdata["strField"] = "distributor_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "distributor_id";
	
		
		
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

	

	
	$tdatarejected_jobfile2["distributor_id"] = $fdata;
//	designer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "designer_id";
	$fdata["GoodName"] = "designer_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","designer_id"); 
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
	
		$fdata["strField"] = "designer_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designer_id";
	
		
		
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

	

	
	$tdatarejected_jobfile2["designer_id"] = $fdata;
//	qc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "qc_id";
	$fdata["GoodName"] = "qc_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","qc_id"); 
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
	
		$fdata["strField"] = "qc_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qc_id";
	
		
		
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

	

	
	$tdatarejected_jobfile2["qc_id"] = $fdata;
//	uploader_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "uploader_id";
	$fdata["GoodName"] = "uploader_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","uploader_id"); 
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
	
		$fdata["strField"] = "uploader_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uploader_id";
	
		
		
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

	

	
	$tdatarejected_jobfile2["uploader_id"] = $fdata;
//	notifier_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "notifier_id";
	$fdata["GoodName"] = "notifier_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","notifier_id"); 
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
	
		$fdata["strField"] = "notifier_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notifier_id";
	
		
		
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

	

	
	$tdatarejected_jobfile2["notifier_id"] = $fdata;
//	rejector_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "rejector_id";
	$fdata["GoodName"] = "rejector_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","rejector_id"); 
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

	

	
	$tdatarejected_jobfile2["rejector_id"] = $fdata;
//	download_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "download_date";
	$fdata["GoodName"] = "download_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","download_date"); 
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
	
		$fdata["strField"] = "download_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "download_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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

	

	
	$tdatarejected_jobfile2["download_date"] = $fdata;
//	distribute_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "distribute_date";
	$fdata["GoodName"] = "distribute_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","distribute_date"); 
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
	
		$fdata["strField"] = "distribute_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "distribute_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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

	

	
	$tdatarejected_jobfile2["distribute_date"] = $fdata;
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","start_date"); 
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
	
		$fdata["strField"] = "start_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "start_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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

	

	
	$tdatarejected_jobfile2["start_date"] = $fdata;
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","end_date"); 
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
	
		$fdata["strField"] = "end_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "end_date";
	
		
		
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

	

	
	$tdatarejected_jobfile2["end_date"] = $fdata;
//	designer_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "designer_time";
	$fdata["GoodName"] = "designer_time";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","designer_time"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
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

	

	
	$tdatarejected_jobfile2["designer_time"] = $fdata;
//	qcstart_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "qcstart_date";
	$fdata["GoodName"] = "qcstart_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","qcstart_date"); 
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
	
		$fdata["strField"] = "qcstart_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qcstart_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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

	

	
	$tdatarejected_jobfile2["qcstart_date"] = $fdata;
//	qcend_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "qcend_date";
	$fdata["GoodName"] = "qcend_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","qcend_date"); 
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
	
		$fdata["strField"] = "qcend_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qcend_date";
	
		
		
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

	

	
	$tdatarejected_jobfile2["qcend_date"] = $fdata;
//	qc_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "qc_time";
	$fdata["GoodName"] = "qc_time";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","qc_time"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
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

	

	
	$tdatarejected_jobfile2["qc_time"] = $fdata;
//	upload_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "upload_date";
	$fdata["GoodName"] = "upload_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","upload_date"); 
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
	
		$fdata["strField"] = "upload_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "upload_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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

	

	
	$tdatarejected_jobfile2["upload_date"] = $fdata;
//	notify_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "notify_date";
	$fdata["GoodName"] = "notify_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","notify_date"); 
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
	
		$fdata["strField"] = "notify_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notify_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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

	

	
	$tdatarejected_jobfile2["notify_date"] = $fdata;
//	reject_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "reject_date";
	$fdata["GoodName"] = "reject_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","reject_date"); 
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
	
		$fdata["strField"] = "reject_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reject_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatarejected_jobfile2["reject_date"] = $fdata;
//	reject_reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "reject_reason";
	$fdata["GoodName"] = "reject_reason";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","reject_reason"); 
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


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatarejected_jobfile2["reject_reason"] = $fdata;
//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","designer2_id"); 
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
	
		$fdata["strField"] = "designer2_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designer2_id";
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatarejected_jobfile2["designer2_id"] = $fdata;
//	start2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "start2_date";
	$fdata["GoodName"] = "start2_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","start2_date"); 
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
	
		$fdata["strField"] = "start2_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "start2_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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

	

	
	$tdatarejected_jobfile2["start2_date"] = $fdata;
//	end2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "end2_date";
	$fdata["GoodName"] = "end2_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","end2_date"); 
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
	
		$fdata["strField"] = "end2_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "end2_date";
	
		
		
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

	

	
	$tdatarejected_jobfile2["end2_date"] = $fdata;
//	designer2_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "designer2_time";
	$fdata["GoodName"] = "designer2_time";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","designer2_time"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer2_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designer2_time";
	
		
		
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

	

	
	$tdatarejected_jobfile2["designer2_time"] = $fdata;
//	reject_reason_others
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "reject_reason_others";
	$fdata["GoodName"] = "reject_reason_others";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","reject_reason_others"); 
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
	
		$fdata["strField"] = "reject_reason_others"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reject_reason_others";
	
		
		
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
	
		
		
		
				$edata["nRows"] = 170;
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

	

	
	$tdatarejected_jobfile2["reject_reason_others"] = $fdata;
//	screenshots
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "screenshots";
	$fdata["GoodName"] = "screenshots";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("rejected_jobfile2","screenshots"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "screenshots"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "screenshots";
	
		
		
				$fdata["FieldPermissions"] = true;
	
		$fdata["UploadCodeExpression"] = true;
		
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
	
		$edata["maxNumberOfFiles"] = 0;
	
		
		
		
		
		
		
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
	
	
	$fdata["Absolute"] = true;
	
	

	

	
	$tdatarejected_jobfile2["screenshots"] = $fdata;

	
$tables_data["rejected_jobfile2"]=&$tdatarejected_jobfile2;
$field_labels["rejected_jobfile2"] = &$fieldLabelsrejected_jobfile2;
$fieldToolTips["rejected_jobfile2"] = &$fieldToolTipsrejected_jobfile2;
$page_titles["rejected_jobfile2"] = &$pageTitlesrejected_jobfile2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["rejected_jobfile2"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["rejected_jobfile2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_rejected_jobfile2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile_id,  previous_jobfile_id,  file_url,  client_id,  work_id,  job_id,  previous_job_id,  project_id,  folder_name,  filename,  filename AS file_list,  jobfile_type,  jobfile_note,  jobfile_status_id,  downloader_id,  distributor_id,  designer_id,  qc_id,  uploader_id,  notifier_id,  rejector_id,  download_date,  distribute_date,  start_date,  end_date,  designer_time,  qcstart_date,  qcend_date,  qc_time,  upload_date,  notify_date,  reject_date,  reject_reason,  designer2_id,  start2_date,  end2_date,  designer2_time,  reject_reason_others,  screenshots";
$proto0["m_strFrom"] = "FROM rejected_jobfile2";
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
	"m_strName" => "jobfile_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto5["m_sql"] = "jobfile_id";
$proto5["m_srcTableName"] = "rejected_jobfile2";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "previous_jobfile_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto7["m_sql"] = "previous_jobfile_id";
$proto7["m_srcTableName"] = "rejected_jobfile2";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "file_url",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto9["m_sql"] = "file_url";
$proto9["m_srcTableName"] = "rejected_jobfile2";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "client_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto11["m_sql"] = "client_id";
$proto11["m_srcTableName"] = "rejected_jobfile2";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto13["m_sql"] = "work_id";
$proto13["m_srcTableName"] = "rejected_jobfile2";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto15["m_sql"] = "job_id";
$proto15["m_srcTableName"] = "rejected_jobfile2";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "previous_job_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto17["m_sql"] = "previous_job_id";
$proto17["m_srcTableName"] = "rejected_jobfile2";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto19["m_sql"] = "project_id";
$proto19["m_srcTableName"] = "rejected_jobfile2";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "folder_name",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto21["m_sql"] = "folder_name";
$proto21["m_srcTableName"] = "rejected_jobfile2";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto23["m_sql"] = "filename";
$proto23["m_srcTableName"] = "rejected_jobfile2";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto25["m_sql"] = "filename";
$proto25["m_srcTableName"] = "rejected_jobfile2";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "file_list";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_type",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto27["m_sql"] = "jobfile_type";
$proto27["m_srcTableName"] = "rejected_jobfile2";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_note",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto29["m_sql"] = "jobfile_note";
$proto29["m_srcTableName"] = "rejected_jobfile2";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto31["m_sql"] = "jobfile_status_id";
$proto31["m_srcTableName"] = "rejected_jobfile2";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "downloader_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto33["m_sql"] = "downloader_id";
$proto33["m_srcTableName"] = "rejected_jobfile2";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "distributor_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto35["m_sql"] = "distributor_id";
$proto35["m_srcTableName"] = "rejected_jobfile2";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto37["m_sql"] = "designer_id";
$proto37["m_srcTableName"] = "rejected_jobfile2";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "qc_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto39["m_sql"] = "qc_id";
$proto39["m_srcTableName"] = "rejected_jobfile2";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "uploader_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto41["m_sql"] = "uploader_id";
$proto41["m_srcTableName"] = "rejected_jobfile2";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "notifier_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto43["m_sql"] = "notifier_id";
$proto43["m_srcTableName"] = "rejected_jobfile2";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "rejector_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto45["m_sql"] = "rejector_id";
$proto45["m_srcTableName"] = "rejected_jobfile2";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "download_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto47["m_sql"] = "download_date";
$proto47["m_srcTableName"] = "rejected_jobfile2";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "distribute_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto49["m_sql"] = "distribute_date";
$proto49["m_srcTableName"] = "rejected_jobfile2";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto51["m_sql"] = "start_date";
$proto51["m_srcTableName"] = "rejected_jobfile2";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto53["m_sql"] = "end_date";
$proto53["m_srcTableName"] = "rejected_jobfile2";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_time",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto55["m_sql"] = "designer_time";
$proto55["m_srcTableName"] = "rejected_jobfile2";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "qcstart_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto57["m_sql"] = "qcstart_date";
$proto57["m_srcTableName"] = "rejected_jobfile2";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "qcend_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto59["m_sql"] = "qcend_date";
$proto59["m_srcTableName"] = "rejected_jobfile2";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "qc_time",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto61["m_sql"] = "qc_time";
$proto61["m_srcTableName"] = "rejected_jobfile2";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "upload_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto63["m_sql"] = "upload_date";
$proto63["m_srcTableName"] = "rejected_jobfile2";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "notify_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto65["m_sql"] = "notify_date";
$proto65["m_srcTableName"] = "rejected_jobfile2";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "reject_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto67["m_sql"] = "reject_date";
$proto67["m_srcTableName"] = "rejected_jobfile2";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "reject_reason",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto69["m_sql"] = "reject_reason";
$proto69["m_srcTableName"] = "rejected_jobfile2";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto71["m_sql"] = "designer2_id";
$proto71["m_srcTableName"] = "rejected_jobfile2";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "start2_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto73["m_sql"] = "start2_date";
$proto73["m_srcTableName"] = "rejected_jobfile2";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto75["m_sql"] = "end2_date";
$proto75["m_srcTableName"] = "rejected_jobfile2";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_time",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto77["m_sql"] = "designer2_time";
$proto77["m_srcTableName"] = "rejected_jobfile2";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "reject_reason_others",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto79["m_sql"] = "reject_reason_others";
$proto79["m_srcTableName"] = "rejected_jobfile2";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "screenshots",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "rejected_jobfile2"
));

$proto81["m_sql"] = "screenshots";
$proto81["m_srcTableName"] = "rejected_jobfile2";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto83=array();
$proto83["m_link"] = "SQLL_MAIN";
			$proto84=array();
$proto84["m_strName"] = "rejected_jobfile2";
$proto84["m_srcTableName"] = "rejected_jobfile2";
$proto84["m_columns"] = array();
$proto84["m_columns"][] = "jobfile_id";
$proto84["m_columns"][] = "previous_jobfile_id";
$proto84["m_columns"][] = "file_url";
$proto84["m_columns"][] = "client_id";
$proto84["m_columns"][] = "work_id";
$proto84["m_columns"][] = "job_id";
$proto84["m_columns"][] = "previous_job_id";
$proto84["m_columns"][] = "project_id";
$proto84["m_columns"][] = "folder_name";
$proto84["m_columns"][] = "filename";
$proto84["m_columns"][] = "jobfile_type";
$proto84["m_columns"][] = "jobfile_note";
$proto84["m_columns"][] = "jobfile_status_id";
$proto84["m_columns"][] = "downloader_id";
$proto84["m_columns"][] = "distributor_id";
$proto84["m_columns"][] = "designer_id";
$proto84["m_columns"][] = "qc_id";
$proto84["m_columns"][] = "uploader_id";
$proto84["m_columns"][] = "notifier_id";
$proto84["m_columns"][] = "rejector_id";
$proto84["m_columns"][] = "download_date";
$proto84["m_columns"][] = "distribute_date";
$proto84["m_columns"][] = "start_date";
$proto84["m_columns"][] = "end_date";
$proto84["m_columns"][] = "designer_time";
$proto84["m_columns"][] = "qcstart_date";
$proto84["m_columns"][] = "qcend_date";
$proto84["m_columns"][] = "qc_time";
$proto84["m_columns"][] = "upload_date";
$proto84["m_columns"][] = "notify_date";
$proto84["m_columns"][] = "reject_date";
$proto84["m_columns"][] = "reject_reason";
$proto84["m_columns"][] = "reject_reason_others";
$proto84["m_columns"][] = "screenshots";
$proto84["m_columns"][] = "designer2_id";
$proto84["m_columns"][] = "start2_date";
$proto84["m_columns"][] = "end2_date";
$proto84["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto84);

$proto83["m_table"] = $obj;
$proto83["m_sql"] = "rejected_jobfile2";
$proto83["m_alias"] = "";
$proto83["m_srcTableName"] = "rejected_jobfile2";
$proto85=array();
$proto85["m_sql"] = "";
$proto85["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto85["m_column"]=$obj;
$proto85["m_contained"] = array();
$proto85["m_strCase"] = "";
$proto85["m_havingmode"] = false;
$proto85["m_inBrackets"] = false;
$proto85["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto85);

$proto83["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto83);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="rejected_jobfile2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_rejected_jobfile2 = createSqlQuery_rejected_jobfile2();


	
																																							
	
$tdatarejected_jobfile2[".sqlquery"] = $queryData_rejected_jobfile2;

include_once(getabspath("include/rejected_jobfile2_events.php"));
$tableEvents["rejected_jobfile2"] = new eventclass_rejected_jobfile2;
$tdatarejected_jobfile2[".hasEvents"] = true;

?>