<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRejection = array();	
	$tdataRejection[".truncateText"] = true;
	$tdataRejection[".NumberOfChars"] = 80; 
	$tdataRejection[".ShortName"] = "Rejection";
	$tdataRejection[".OwnerID"] = "";
	$tdataRejection[".OriginalTable"] = "rejected_jobfile2";

//	field labels
$fieldLabelsRejection = array();
$fieldToolTipsRejection = array();
$pageTitlesRejection = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRejection["English"] = array();
	$fieldToolTipsRejection["English"] = array();
	$pageTitlesRejection["English"] = array();
	$fieldLabelsRejection["English"]["jobfile_id"] = "Jobfile Id";
	$fieldToolTipsRejection["English"]["jobfile_id"] = "";
	$fieldLabelsRejection["English"]["previous_jobfile_id"] = "Previous Jobfile Id";
	$fieldToolTipsRejection["English"]["previous_jobfile_id"] = "";
	$fieldLabelsRejection["English"]["file_url"] = "File Url";
	$fieldToolTipsRejection["English"]["file_url"] = "";
	$fieldLabelsRejection["English"]["client_id"] = "Client Id";
	$fieldToolTipsRejection["English"]["client_id"] = "";
	$fieldLabelsRejection["English"]["work_id"] = "Work Id";
	$fieldToolTipsRejection["English"]["work_id"] = "";
	$fieldLabelsRejection["English"]["job_id"] = "Job Id";
	$fieldToolTipsRejection["English"]["job_id"] = "";
	$fieldLabelsRejection["English"]["previous_job_id"] = "Previous Job Id";
	$fieldToolTipsRejection["English"]["previous_job_id"] = "";
	$fieldLabelsRejection["English"]["project_id"] = "Project Id";
	$fieldToolTipsRejection["English"]["project_id"] = "";
	$fieldLabelsRejection["English"]["folder_name"] = "Folder Name";
	$fieldToolTipsRejection["English"]["folder_name"] = "";
	$fieldLabelsRejection["English"]["filename"] = "Filename";
	$fieldToolTipsRejection["English"]["filename"] = "";
	$fieldLabelsRejection["English"]["jobfile_type"] = "Jobfile Type";
	$fieldToolTipsRejection["English"]["jobfile_type"] = "";
	$fieldLabelsRejection["English"]["jobfile_note"] = "Jobfile Note";
	$fieldToolTipsRejection["English"]["jobfile_note"] = "";
	$fieldLabelsRejection["English"]["jobfile_status_id"] = "Jobfile Status Id";
	$fieldToolTipsRejection["English"]["jobfile_status_id"] = "";
	$fieldLabelsRejection["English"]["downloader_id"] = "Downloader Id";
	$fieldToolTipsRejection["English"]["downloader_id"] = "";
	$fieldLabelsRejection["English"]["distributor_id"] = "Distributor Id";
	$fieldToolTipsRejection["English"]["distributor_id"] = "";
	$fieldLabelsRejection["English"]["designer_id"] = "Designer Id";
	$fieldToolTipsRejection["English"]["designer_id"] = "";
	$fieldLabelsRejection["English"]["qc_id"] = "Qc Id";
	$fieldToolTipsRejection["English"]["qc_id"] = "";
	$fieldLabelsRejection["English"]["uploader_id"] = "Uploader Id";
	$fieldToolTipsRejection["English"]["uploader_id"] = "";
	$fieldLabelsRejection["English"]["notifier_id"] = "Notifier Id";
	$fieldToolTipsRejection["English"]["notifier_id"] = "";
	$fieldLabelsRejection["English"]["rejector_id"] = "Rejector Id";
	$fieldToolTipsRejection["English"]["rejector_id"] = "";
	$fieldLabelsRejection["English"]["download_date"] = "Download Date";
	$fieldToolTipsRejection["English"]["download_date"] = "";
	$fieldLabelsRejection["English"]["distribute_date"] = "Distribute Date";
	$fieldToolTipsRejection["English"]["distribute_date"] = "";
	$fieldLabelsRejection["English"]["start_date"] = "Start Date";
	$fieldToolTipsRejection["English"]["start_date"] = "";
	$fieldLabelsRejection["English"]["end_date"] = "End Date";
	$fieldToolTipsRejection["English"]["end_date"] = "";
	$fieldLabelsRejection["English"]["designer_time"] = "Designer Time";
	$fieldToolTipsRejection["English"]["designer_time"] = "";
	$fieldLabelsRejection["English"]["qcstart_date"] = "Qcstart Date";
	$fieldToolTipsRejection["English"]["qcstart_date"] = "";
	$fieldLabelsRejection["English"]["qcend_date"] = "Qcend Date";
	$fieldToolTipsRejection["English"]["qcend_date"] = "";
	$fieldLabelsRejection["English"]["qc_time"] = "Qc Time";
	$fieldToolTipsRejection["English"]["qc_time"] = "";
	$fieldLabelsRejection["English"]["upload_date"] = "Upload Date";
	$fieldToolTipsRejection["English"]["upload_date"] = "";
	$fieldLabelsRejection["English"]["notify_date"] = "Notify Date";
	$fieldToolTipsRejection["English"]["notify_date"] = "";
	$fieldLabelsRejection["English"]["reject_date"] = "Reject Date";
	$fieldToolTipsRejection["English"]["reject_date"] = "";
	$fieldLabelsRejection["English"]["reject_reason"] = "Reject Reason";
	$fieldToolTipsRejection["English"]["reject_reason"] = "";
	$fieldLabelsRejection["English"]["reject_reason_others"] = "Reject Reason Others";
	$fieldToolTipsRejection["English"]["reject_reason_others"] = "";
	$fieldLabelsRejection["English"]["screenshots"] = "Screenshots";
	$fieldToolTipsRejection["English"]["screenshots"] = "";
	$fieldLabelsRejection["English"]["designer2_id"] = "Designer2 Id";
	$fieldToolTipsRejection["English"]["designer2_id"] = "";
	$fieldLabelsRejection["English"]["start2_date"] = "Start2 Date";
	$fieldToolTipsRejection["English"]["start2_date"] = "";
	$fieldLabelsRejection["English"]["end2_date"] = "End2 Date";
	$fieldToolTipsRejection["English"]["end2_date"] = "";
	$fieldLabelsRejection["English"]["designer2_time"] = "Designer2 Time";
	$fieldToolTipsRejection["English"]["designer2_time"] = "";
	if (count($fieldToolTipsRejection["English"]))
		$tdataRejection[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRejection[""] = array();
	$fieldToolTipsRejection[""] = array();
	$pageTitlesRejection[""] = array();
	$fieldLabelsRejection[""]["jobfile_id"] = "Jobfile Id";
	$fieldToolTipsRejection[""]["jobfile_id"] = "";
	$fieldLabelsRejection[""]["previous_jobfile_id"] = "Previous Jobfile Id";
	$fieldToolTipsRejection[""]["previous_jobfile_id"] = "";
	$fieldLabelsRejection[""]["file_url"] = "File Url";
	$fieldToolTipsRejection[""]["file_url"] = "";
	$fieldLabelsRejection[""]["client_id"] = "Client Id";
	$fieldToolTipsRejection[""]["client_id"] = "";
	$fieldLabelsRejection[""]["work_id"] = "Work Id";
	$fieldToolTipsRejection[""]["work_id"] = "";
	$fieldLabelsRejection[""]["job_id"] = "Job Id";
	$fieldToolTipsRejection[""]["job_id"] = "";
	$fieldLabelsRejection[""]["previous_job_id"] = "Previous Job Id";
	$fieldToolTipsRejection[""]["previous_job_id"] = "";
	$fieldLabelsRejection[""]["project_id"] = "Project Id";
	$fieldToolTipsRejection[""]["project_id"] = "";
	$fieldLabelsRejection[""]["folder_name"] = "Folder Name";
	$fieldToolTipsRejection[""]["folder_name"] = "";
	$fieldLabelsRejection[""]["filename"] = "Filename";
	$fieldToolTipsRejection[""]["filename"] = "";
	$fieldLabelsRejection[""]["jobfile_type"] = "Jobfile Type";
	$fieldToolTipsRejection[""]["jobfile_type"] = "";
	$fieldLabelsRejection[""]["jobfile_note"] = "Jobfile Note";
	$fieldToolTipsRejection[""]["jobfile_note"] = "";
	$fieldLabelsRejection[""]["jobfile_status_id"] = "Jobfile Status Id";
	$fieldToolTipsRejection[""]["jobfile_status_id"] = "";
	$fieldLabelsRejection[""]["downloader_id"] = "Downloader Id";
	$fieldToolTipsRejection[""]["downloader_id"] = "";
	$fieldLabelsRejection[""]["distributor_id"] = "Distributor Id";
	$fieldToolTipsRejection[""]["distributor_id"] = "";
	$fieldLabelsRejection[""]["designer_id"] = "Designer Id";
	$fieldToolTipsRejection[""]["designer_id"] = "";
	$fieldLabelsRejection[""]["qc_id"] = "Qc Id";
	$fieldToolTipsRejection[""]["qc_id"] = "";
	$fieldLabelsRejection[""]["uploader_id"] = "Uploader Id";
	$fieldToolTipsRejection[""]["uploader_id"] = "";
	$fieldLabelsRejection[""]["notifier_id"] = "Notifier Id";
	$fieldToolTipsRejection[""]["notifier_id"] = "";
	$fieldLabelsRejection[""]["rejector_id"] = "Rejector Id";
	$fieldToolTipsRejection[""]["rejector_id"] = "";
	$fieldLabelsRejection[""]["download_date"] = "Download Date";
	$fieldToolTipsRejection[""]["download_date"] = "";
	$fieldLabelsRejection[""]["distribute_date"] = "Distribute Date";
	$fieldToolTipsRejection[""]["distribute_date"] = "";
	$fieldLabelsRejection[""]["start_date"] = "Start Date";
	$fieldToolTipsRejection[""]["start_date"] = "";
	$fieldLabelsRejection[""]["end_date"] = "End Date";
	$fieldToolTipsRejection[""]["end_date"] = "";
	$fieldLabelsRejection[""]["designer_time"] = "Designer Time";
	$fieldToolTipsRejection[""]["designer_time"] = "";
	$fieldLabelsRejection[""]["qcstart_date"] = "Qcstart Date";
	$fieldToolTipsRejection[""]["qcstart_date"] = "";
	$fieldLabelsRejection[""]["qcend_date"] = "Qcend Date";
	$fieldToolTipsRejection[""]["qcend_date"] = "";
	$fieldLabelsRejection[""]["qc_time"] = "Qc Time";
	$fieldToolTipsRejection[""]["qc_time"] = "";
	$fieldLabelsRejection[""]["upload_date"] = "Upload Date";
	$fieldToolTipsRejection[""]["upload_date"] = "";
	$fieldLabelsRejection[""]["notify_date"] = "Notify Date";
	$fieldToolTipsRejection[""]["notify_date"] = "";
	$fieldLabelsRejection[""]["reject_date"] = "Reject Date";
	$fieldToolTipsRejection[""]["reject_date"] = "";
	$fieldLabelsRejection[""]["reject_reason"] = "Reject Reason";
	$fieldToolTipsRejection[""]["reject_reason"] = "";
	$fieldLabelsRejection[""]["reject_reason_others"] = "Reject Reason Others";
	$fieldToolTipsRejection[""]["reject_reason_others"] = "";
	$fieldLabelsRejection[""]["screenshots"] = "Screenshots";
	$fieldToolTipsRejection[""]["screenshots"] = "";
	$fieldLabelsRejection[""]["designer2_id"] = "Designer2 Id";
	$fieldToolTipsRejection[""]["designer2_id"] = "";
	$fieldLabelsRejection[""]["start2_date"] = "Start2 Date";
	$fieldToolTipsRejection[""]["start2_date"] = "";
	$fieldLabelsRejection[""]["end2_date"] = "End2 Date";
	$fieldToolTipsRejection[""]["end2_date"] = "";
	$fieldLabelsRejection[""]["designer2_time"] = "Designer2 Time";
	$fieldToolTipsRejection[""]["designer2_time"] = "";
	if (count($fieldToolTipsRejection[""]))
		$tdataRejection[".isUseToolTips"] = true;
}
	
	
	$tdataRejection[".NCSearch"] = true;



$tdataRejection[".shortTableName"] = "Rejection";
$tdataRejection[".nSecOptions"] = 0;
$tdataRejection[".recsPerRowList"] = 1;
$tdataRejection[".recsPerRowPrint"] = 1;
$tdataRejection[".mainTableOwnerID"] = "";
$tdataRejection[".moveNext"] = 1;
$tdataRejection[".entityType"] = 2;

$tdataRejection[".strOriginalTableName"] = "rejected_jobfile2";




$tdataRejection[".showAddInPopup"] = false;

$tdataRejection[".showEditInPopup"] = false;

$tdataRejection[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRejection[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRejection[".fieldsForRegister"] = array();

$tdataRejection[".listAjax"] = false;

	$tdataRejection[".audit"] = false;

	$tdataRejection[".locking"] = false;

$tdataRejection[".edit"] = true;
$tdataRejection[".afterEditAction"] = 1;
$tdataRejection[".closePopupAfterEdit"] = 1;
$tdataRejection[".afterEditActionDetTable"] = "";

$tdataRejection[".add"] = true;
$tdataRejection[".afterAddAction"] = 1;
$tdataRejection[".closePopupAfterAdd"] = 1;
$tdataRejection[".afterAddActionDetTable"] = "";

$tdataRejection[".list"] = true;

$tdataRejection[".inlineEdit"] = true;
$tdataRejection[".inlineAdd"] = true;
$tdataRejection[".view"] = true;


$tdataRejection[".exportTo"] = true;

$tdataRejection[".printFriendly"] = true;

$tdataRejection[".delete"] = true;

$tdataRejection[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataRejection[".searchSaving"] = false;
//

$tdataRejection[".showSearchPanel"] = true;
		$tdataRejection[".flexibleSearch"] = true;		

if (isMobile())
	$tdataRejection[".isUseAjaxSuggest"] = false;
else 
	$tdataRejection[".isUseAjaxSuggest"] = true;



																																																																																																																																																
$tdataRejection[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRejection[".isUseTimeForSearch"] = false;





$tdataRejection[".allSearchFields"] = array();
$tdataRejection[".filterFields"] = array();
$tdataRejection[".requiredSearchFields"] = array();

$tdataRejection[".allSearchFields"][] = "jobfile_id";
	$tdataRejection[".allSearchFields"][] = "previous_jobfile_id";
	$tdataRejection[".allSearchFields"][] = "file_url";
	$tdataRejection[".allSearchFields"][] = "client_id";
	$tdataRejection[".allSearchFields"][] = "work_id";
	$tdataRejection[".allSearchFields"][] = "job_id";
	$tdataRejection[".allSearchFields"][] = "previous_job_id";
	$tdataRejection[".allSearchFields"][] = "project_id";
	$tdataRejection[".allSearchFields"][] = "folder_name";
	$tdataRejection[".allSearchFields"][] = "filename";
	$tdataRejection[".allSearchFields"][] = "jobfile_type";
	$tdataRejection[".allSearchFields"][] = "jobfile_note";
	$tdataRejection[".allSearchFields"][] = "jobfile_status_id";
	$tdataRejection[".allSearchFields"][] = "downloader_id";
	$tdataRejection[".allSearchFields"][] = "distributor_id";
	$tdataRejection[".allSearchFields"][] = "designer_id";
	$tdataRejection[".allSearchFields"][] = "qc_id";
	$tdataRejection[".allSearchFields"][] = "uploader_id";
	$tdataRejection[".allSearchFields"][] = "notifier_id";
	$tdataRejection[".allSearchFields"][] = "rejector_id";
	$tdataRejection[".allSearchFields"][] = "download_date";
	$tdataRejection[".allSearchFields"][] = "distribute_date";
	$tdataRejection[".allSearchFields"][] = "start_date";
	$tdataRejection[".allSearchFields"][] = "end_date";
	$tdataRejection[".allSearchFields"][] = "designer_time";
	$tdataRejection[".allSearchFields"][] = "qcstart_date";
	$tdataRejection[".allSearchFields"][] = "qcend_date";
	$tdataRejection[".allSearchFields"][] = "qc_time";
	$tdataRejection[".allSearchFields"][] = "upload_date";
	$tdataRejection[".allSearchFields"][] = "notify_date";
	$tdataRejection[".allSearchFields"][] = "reject_date";
	$tdataRejection[".allSearchFields"][] = "reject_reason";
	$tdataRejection[".allSearchFields"][] = "reject_reason_others";
	$tdataRejection[".allSearchFields"][] = "screenshots";
	$tdataRejection[".allSearchFields"][] = "designer2_id";
	$tdataRejection[".allSearchFields"][] = "start2_date";
	$tdataRejection[".allSearchFields"][] = "end2_date";
	$tdataRejection[".allSearchFields"][] = "designer2_time";
	
$tdataRejection[".filterFields"][] = "reject_reason";	
$tdataRejection[".filterFields"][] = "designer2_id";	

$tdataRejection[".googleLikeFields"] = array();
$tdataRejection[".googleLikeFields"][] = "jobfile_id";
$tdataRejection[".googleLikeFields"][] = "previous_jobfile_id";
$tdataRejection[".googleLikeFields"][] = "file_url";
$tdataRejection[".googleLikeFields"][] = "client_id";
$tdataRejection[".googleLikeFields"][] = "work_id";
$tdataRejection[".googleLikeFields"][] = "job_id";
$tdataRejection[".googleLikeFields"][] = "previous_job_id";
$tdataRejection[".googleLikeFields"][] = "project_id";
$tdataRejection[".googleLikeFields"][] = "folder_name";
$tdataRejection[".googleLikeFields"][] = "filename";
$tdataRejection[".googleLikeFields"][] = "jobfile_type";
$tdataRejection[".googleLikeFields"][] = "jobfile_note";
$tdataRejection[".googleLikeFields"][] = "jobfile_status_id";
$tdataRejection[".googleLikeFields"][] = "downloader_id";
$tdataRejection[".googleLikeFields"][] = "distributor_id";
$tdataRejection[".googleLikeFields"][] = "designer_id";
$tdataRejection[".googleLikeFields"][] = "qc_id";
$tdataRejection[".googleLikeFields"][] = "uploader_id";
$tdataRejection[".googleLikeFields"][] = "notifier_id";
$tdataRejection[".googleLikeFields"][] = "rejector_id";
$tdataRejection[".googleLikeFields"][] = "download_date";
$tdataRejection[".googleLikeFields"][] = "distribute_date";
$tdataRejection[".googleLikeFields"][] = "start_date";
$tdataRejection[".googleLikeFields"][] = "end_date";
$tdataRejection[".googleLikeFields"][] = "designer_time";
$tdataRejection[".googleLikeFields"][] = "qcstart_date";
$tdataRejection[".googleLikeFields"][] = "qcend_date";
$tdataRejection[".googleLikeFields"][] = "qc_time";
$tdataRejection[".googleLikeFields"][] = "upload_date";
$tdataRejection[".googleLikeFields"][] = "notify_date";
$tdataRejection[".googleLikeFields"][] = "reject_date";
$tdataRejection[".googleLikeFields"][] = "reject_reason";
$tdataRejection[".googleLikeFields"][] = "reject_reason_others";
$tdataRejection[".googleLikeFields"][] = "screenshots";
$tdataRejection[".googleLikeFields"][] = "designer2_id";
$tdataRejection[".googleLikeFields"][] = "start2_date";
$tdataRejection[".googleLikeFields"][] = "end2_date";
$tdataRejection[".googleLikeFields"][] = "designer2_time";


$tdataRejection[".advSearchFields"] = array();
$tdataRejection[".advSearchFields"][] = "jobfile_id";
$tdataRejection[".advSearchFields"][] = "previous_jobfile_id";
$tdataRejection[".advSearchFields"][] = "file_url";
$tdataRejection[".advSearchFields"][] = "client_id";
$tdataRejection[".advSearchFields"][] = "work_id";
$tdataRejection[".advSearchFields"][] = "job_id";
$tdataRejection[".advSearchFields"][] = "previous_job_id";
$tdataRejection[".advSearchFields"][] = "project_id";
$tdataRejection[".advSearchFields"][] = "folder_name";
$tdataRejection[".advSearchFields"][] = "filename";
$tdataRejection[".advSearchFields"][] = "jobfile_type";
$tdataRejection[".advSearchFields"][] = "jobfile_note";
$tdataRejection[".advSearchFields"][] = "jobfile_status_id";
$tdataRejection[".advSearchFields"][] = "downloader_id";
$tdataRejection[".advSearchFields"][] = "distributor_id";
$tdataRejection[".advSearchFields"][] = "designer_id";
$tdataRejection[".advSearchFields"][] = "qc_id";
$tdataRejection[".advSearchFields"][] = "uploader_id";
$tdataRejection[".advSearchFields"][] = "notifier_id";
$tdataRejection[".advSearchFields"][] = "rejector_id";
$tdataRejection[".advSearchFields"][] = "download_date";
$tdataRejection[".advSearchFields"][] = "distribute_date";
$tdataRejection[".advSearchFields"][] = "start_date";
$tdataRejection[".advSearchFields"][] = "end_date";
$tdataRejection[".advSearchFields"][] = "designer_time";
$tdataRejection[".advSearchFields"][] = "qcstart_date";
$tdataRejection[".advSearchFields"][] = "qcend_date";
$tdataRejection[".advSearchFields"][] = "qc_time";
$tdataRejection[".advSearchFields"][] = "upload_date";
$tdataRejection[".advSearchFields"][] = "notify_date";
$tdataRejection[".advSearchFields"][] = "reject_date";
$tdataRejection[".advSearchFields"][] = "reject_reason";
$tdataRejection[".advSearchFields"][] = "reject_reason_others";
$tdataRejection[".advSearchFields"][] = "screenshots";
$tdataRejection[".advSearchFields"][] = "designer2_id";
$tdataRejection[".advSearchFields"][] = "start2_date";
$tdataRejection[".advSearchFields"][] = "end2_date";
$tdataRejection[".advSearchFields"][] = "designer2_time";

$tdataRejection[".tableType"] = "report";

$tdataRejection[".printerPageOrientation"] = 0;
$tdataRejection[".nPrinterPageScale"] = 100;

$tdataRejection[".nPrinterSplitRecords"] = 40;

$tdataRejection[".nPrinterPDFSplitRecords"] = 40;



$tdataRejection[".geocodingEnabled"] = false;

//report settings

$tdataRejection[".reportPrintPartitionType"] = 1;	
$tdataRejection[".reportPrintGroupsPerPage"] = 3;	
	$tdataRejection[".reportPrintPDFGroupsPerPage"] = 3;	
$tdataRejection[".lowGroup"] = 2;



$tdataRejection[".reportGroupFields"] = true;
$tdataRejection[".pageSize"] = 5;
$tdataRejection[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "designer2_id";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "job_id";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataRejection[".reportGroupFieldsData"] = $reportGroupFields;






$tdataRejection[".repShowDet"] = true;

$tdataRejection[".reportLayout"] = 0;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRejection[".strOrderBy"] = $tstrOrderBy;

$tdataRejection[".orderindexes"] = array();

$tdataRejection[".sqlHead"] = "SELECT jobfile_id,  previous_jobfile_id,  file_url,  client_id,  work_id,  job_id,  previous_job_id,  project_id,  folder_name,  filename,  jobfile_type,  jobfile_note,  jobfile_status_id,  downloader_id,  distributor_id,  designer_id,  qc_id,  uploader_id,  notifier_id,  rejector_id,  download_date,  distribute_date,  start_date,  end_date,  designer_time,  qcstart_date,  qcend_date,  qc_time,  upload_date,  notify_date,  reject_date,  reject_reason,  reject_reason_others,  screenshots,  designer2_id,  start2_date,  end2_date,  designer2_time";
$tdataRejection[".sqlFrom"] = "FROM rejected_jobfile2";
$tdataRejection[".sqlWhereExpr"] = "(jobfile_status_id =10 OR jobfile_status_id =11)";
$tdataRejection[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRejection[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRejection[".arrGroupsPerPage"] = $arrGPP;

$tdataRejection[".highlightSearchResults"] = true;

$tableKeysRejection = array();
$tableKeysRejection[] = "jobfile_id";
$tdataRejection[".Keys"] = $tableKeysRejection;

$tdataRejection[".listFields"] = array();
$tdataRejection[".listFields"][] = "jobfile_id";
$tdataRejection[".listFields"][] = "previous_jobfile_id";
$tdataRejection[".listFields"][] = "file_url";
$tdataRejection[".listFields"][] = "client_id";
$tdataRejection[".listFields"][] = "work_id";
$tdataRejection[".listFields"][] = "job_id";
$tdataRejection[".listFields"][] = "previous_job_id";
$tdataRejection[".listFields"][] = "project_id";
$tdataRejection[".listFields"][] = "folder_name";
$tdataRejection[".listFields"][] = "filename";
$tdataRejection[".listFields"][] = "jobfile_type";
$tdataRejection[".listFields"][] = "jobfile_note";
$tdataRejection[".listFields"][] = "jobfile_status_id";
$tdataRejection[".listFields"][] = "downloader_id";
$tdataRejection[".listFields"][] = "distributor_id";
$tdataRejection[".listFields"][] = "designer_id";
$tdataRejection[".listFields"][] = "qc_id";
$tdataRejection[".listFields"][] = "uploader_id";
$tdataRejection[".listFields"][] = "notifier_id";
$tdataRejection[".listFields"][] = "rejector_id";
$tdataRejection[".listFields"][] = "download_date";
$tdataRejection[".listFields"][] = "distribute_date";
$tdataRejection[".listFields"][] = "start_date";
$tdataRejection[".listFields"][] = "end_date";
$tdataRejection[".listFields"][] = "designer_time";
$tdataRejection[".listFields"][] = "qcstart_date";
$tdataRejection[".listFields"][] = "qcend_date";
$tdataRejection[".listFields"][] = "qc_time";
$tdataRejection[".listFields"][] = "upload_date";
$tdataRejection[".listFields"][] = "notify_date";
$tdataRejection[".listFields"][] = "reject_date";
$tdataRejection[".listFields"][] = "reject_reason";
$tdataRejection[".listFields"][] = "reject_reason_others";
$tdataRejection[".listFields"][] = "screenshots";
$tdataRejection[".listFields"][] = "designer2_id";
$tdataRejection[".listFields"][] = "start2_date";
$tdataRejection[".listFields"][] = "end2_date";
$tdataRejection[".listFields"][] = "designer2_time";

$tdataRejection[".hideMobileList"] = array();


$tdataRejection[".viewFields"] = array();
$tdataRejection[".viewFields"][] = "jobfile_id";
$tdataRejection[".viewFields"][] = "previous_jobfile_id";
$tdataRejection[".viewFields"][] = "file_url";
$tdataRejection[".viewFields"][] = "client_id";
$tdataRejection[".viewFields"][] = "work_id";
$tdataRejection[".viewFields"][] = "job_id";
$tdataRejection[".viewFields"][] = "previous_job_id";
$tdataRejection[".viewFields"][] = "project_id";
$tdataRejection[".viewFields"][] = "folder_name";
$tdataRejection[".viewFields"][] = "filename";
$tdataRejection[".viewFields"][] = "jobfile_type";
$tdataRejection[".viewFields"][] = "jobfile_note";
$tdataRejection[".viewFields"][] = "jobfile_status_id";
$tdataRejection[".viewFields"][] = "downloader_id";
$tdataRejection[".viewFields"][] = "distributor_id";
$tdataRejection[".viewFields"][] = "designer_id";
$tdataRejection[".viewFields"][] = "qc_id";
$tdataRejection[".viewFields"][] = "uploader_id";
$tdataRejection[".viewFields"][] = "notifier_id";
$tdataRejection[".viewFields"][] = "rejector_id";
$tdataRejection[".viewFields"][] = "download_date";
$tdataRejection[".viewFields"][] = "distribute_date";
$tdataRejection[".viewFields"][] = "start_date";
$tdataRejection[".viewFields"][] = "end_date";
$tdataRejection[".viewFields"][] = "designer_time";
$tdataRejection[".viewFields"][] = "qcstart_date";
$tdataRejection[".viewFields"][] = "qcend_date";
$tdataRejection[".viewFields"][] = "qc_time";
$tdataRejection[".viewFields"][] = "upload_date";
$tdataRejection[".viewFields"][] = "notify_date";
$tdataRejection[".viewFields"][] = "reject_date";
$tdataRejection[".viewFields"][] = "reject_reason";
$tdataRejection[".viewFields"][] = "reject_reason_others";
$tdataRejection[".viewFields"][] = "screenshots";
$tdataRejection[".viewFields"][] = "designer2_id";
$tdataRejection[".viewFields"][] = "start2_date";
$tdataRejection[".viewFields"][] = "end2_date";
$tdataRejection[".viewFields"][] = "designer2_time";

$tdataRejection[".addFields"] = array();
$tdataRejection[".addFields"][] = "previous_jobfile_id";
$tdataRejection[".addFields"][] = "file_url";
$tdataRejection[".addFields"][] = "client_id";
$tdataRejection[".addFields"][] = "work_id";
$tdataRejection[".addFields"][] = "job_id";
$tdataRejection[".addFields"][] = "previous_job_id";
$tdataRejection[".addFields"][] = "project_id";
$tdataRejection[".addFields"][] = "folder_name";
$tdataRejection[".addFields"][] = "filename";
$tdataRejection[".addFields"][] = "jobfile_type";
$tdataRejection[".addFields"][] = "jobfile_note";
$tdataRejection[".addFields"][] = "jobfile_status_id";
$tdataRejection[".addFields"][] = "downloader_id";
$tdataRejection[".addFields"][] = "distributor_id";
$tdataRejection[".addFields"][] = "designer_id";
$tdataRejection[".addFields"][] = "qc_id";
$tdataRejection[".addFields"][] = "uploader_id";
$tdataRejection[".addFields"][] = "notifier_id";
$tdataRejection[".addFields"][] = "rejector_id";
$tdataRejection[".addFields"][] = "download_date";
$tdataRejection[".addFields"][] = "distribute_date";
$tdataRejection[".addFields"][] = "start_date";
$tdataRejection[".addFields"][] = "end_date";
$tdataRejection[".addFields"][] = "designer_time";
$tdataRejection[".addFields"][] = "qcstart_date";
$tdataRejection[".addFields"][] = "qcend_date";
$tdataRejection[".addFields"][] = "qc_time";
$tdataRejection[".addFields"][] = "upload_date";
$tdataRejection[".addFields"][] = "notify_date";
$tdataRejection[".addFields"][] = "reject_date";
$tdataRejection[".addFields"][] = "reject_reason";
$tdataRejection[".addFields"][] = "reject_reason_others";
$tdataRejection[".addFields"][] = "screenshots";
$tdataRejection[".addFields"][] = "designer2_id";
$tdataRejection[".addFields"][] = "start2_date";
$tdataRejection[".addFields"][] = "end2_date";
$tdataRejection[".addFields"][] = "designer2_time";

$tdataRejection[".masterListFields"] = array();
$tdataRejection[".masterListFields"][] = "jobfile_id";
$tdataRejection[".masterListFields"][] = "previous_jobfile_id";
$tdataRejection[".masterListFields"][] = "file_url";
$tdataRejection[".masterListFields"][] = "client_id";
$tdataRejection[".masterListFields"][] = "work_id";
$tdataRejection[".masterListFields"][] = "job_id";
$tdataRejection[".masterListFields"][] = "previous_job_id";
$tdataRejection[".masterListFields"][] = "project_id";
$tdataRejection[".masterListFields"][] = "folder_name";
$tdataRejection[".masterListFields"][] = "filename";
$tdataRejection[".masterListFields"][] = "jobfile_type";
$tdataRejection[".masterListFields"][] = "jobfile_note";
$tdataRejection[".masterListFields"][] = "jobfile_status_id";
$tdataRejection[".masterListFields"][] = "downloader_id";
$tdataRejection[".masterListFields"][] = "distributor_id";
$tdataRejection[".masterListFields"][] = "designer_id";
$tdataRejection[".masterListFields"][] = "qc_id";
$tdataRejection[".masterListFields"][] = "uploader_id";
$tdataRejection[".masterListFields"][] = "notifier_id";
$tdataRejection[".masterListFields"][] = "rejector_id";
$tdataRejection[".masterListFields"][] = "download_date";
$tdataRejection[".masterListFields"][] = "distribute_date";
$tdataRejection[".masterListFields"][] = "start_date";
$tdataRejection[".masterListFields"][] = "end_date";
$tdataRejection[".masterListFields"][] = "designer_time";
$tdataRejection[".masterListFields"][] = "qcstart_date";
$tdataRejection[".masterListFields"][] = "qcend_date";
$tdataRejection[".masterListFields"][] = "qc_time";
$tdataRejection[".masterListFields"][] = "upload_date";
$tdataRejection[".masterListFields"][] = "notify_date";
$tdataRejection[".masterListFields"][] = "reject_date";
$tdataRejection[".masterListFields"][] = "reject_reason";
$tdataRejection[".masterListFields"][] = "reject_reason_others";
$tdataRejection[".masterListFields"][] = "screenshots";
$tdataRejection[".masterListFields"][] = "designer2_id";
$tdataRejection[".masterListFields"][] = "start2_date";
$tdataRejection[".masterListFields"][] = "end2_date";
$tdataRejection[".masterListFields"][] = "designer2_time";

$tdataRejection[".inlineAddFields"] = array();
$tdataRejection[".inlineAddFields"][] = "previous_jobfile_id";
$tdataRejection[".inlineAddFields"][] = "file_url";
$tdataRejection[".inlineAddFields"][] = "client_id";
$tdataRejection[".inlineAddFields"][] = "work_id";
$tdataRejection[".inlineAddFields"][] = "job_id";
$tdataRejection[".inlineAddFields"][] = "previous_job_id";
$tdataRejection[".inlineAddFields"][] = "project_id";
$tdataRejection[".inlineAddFields"][] = "folder_name";
$tdataRejection[".inlineAddFields"][] = "filename";
$tdataRejection[".inlineAddFields"][] = "jobfile_type";
$tdataRejection[".inlineAddFields"][] = "jobfile_note";
$tdataRejection[".inlineAddFields"][] = "jobfile_status_id";
$tdataRejection[".inlineAddFields"][] = "downloader_id";
$tdataRejection[".inlineAddFields"][] = "distributor_id";
$tdataRejection[".inlineAddFields"][] = "designer_id";
$tdataRejection[".inlineAddFields"][] = "qc_id";
$tdataRejection[".inlineAddFields"][] = "uploader_id";
$tdataRejection[".inlineAddFields"][] = "notifier_id";
$tdataRejection[".inlineAddFields"][] = "rejector_id";
$tdataRejection[".inlineAddFields"][] = "download_date";
$tdataRejection[".inlineAddFields"][] = "distribute_date";
$tdataRejection[".inlineAddFields"][] = "start_date";
$tdataRejection[".inlineAddFields"][] = "end_date";
$tdataRejection[".inlineAddFields"][] = "designer_time";
$tdataRejection[".inlineAddFields"][] = "qcstart_date";
$tdataRejection[".inlineAddFields"][] = "qcend_date";
$tdataRejection[".inlineAddFields"][] = "qc_time";
$tdataRejection[".inlineAddFields"][] = "upload_date";
$tdataRejection[".inlineAddFields"][] = "notify_date";
$tdataRejection[".inlineAddFields"][] = "reject_date";
$tdataRejection[".inlineAddFields"][] = "reject_reason";
$tdataRejection[".inlineAddFields"][] = "reject_reason_others";
$tdataRejection[".inlineAddFields"][] = "screenshots";
$tdataRejection[".inlineAddFields"][] = "designer2_id";
$tdataRejection[".inlineAddFields"][] = "start2_date";
$tdataRejection[".inlineAddFields"][] = "end2_date";
$tdataRejection[".inlineAddFields"][] = "designer2_time";

$tdataRejection[".editFields"] = array();
$tdataRejection[".editFields"][] = "previous_jobfile_id";
$tdataRejection[".editFields"][] = "file_url";
$tdataRejection[".editFields"][] = "client_id";
$tdataRejection[".editFields"][] = "work_id";
$tdataRejection[".editFields"][] = "job_id";
$tdataRejection[".editFields"][] = "previous_job_id";
$tdataRejection[".editFields"][] = "project_id";
$tdataRejection[".editFields"][] = "folder_name";
$tdataRejection[".editFields"][] = "filename";
$tdataRejection[".editFields"][] = "jobfile_type";
$tdataRejection[".editFields"][] = "jobfile_note";
$tdataRejection[".editFields"][] = "jobfile_status_id";
$tdataRejection[".editFields"][] = "downloader_id";
$tdataRejection[".editFields"][] = "distributor_id";
$tdataRejection[".editFields"][] = "designer_id";
$tdataRejection[".editFields"][] = "qc_id";
$tdataRejection[".editFields"][] = "uploader_id";
$tdataRejection[".editFields"][] = "notifier_id";
$tdataRejection[".editFields"][] = "rejector_id";
$tdataRejection[".editFields"][] = "download_date";
$tdataRejection[".editFields"][] = "distribute_date";
$tdataRejection[".editFields"][] = "start_date";
$tdataRejection[".editFields"][] = "end_date";
$tdataRejection[".editFields"][] = "designer_time";
$tdataRejection[".editFields"][] = "qcstart_date";
$tdataRejection[".editFields"][] = "qcend_date";
$tdataRejection[".editFields"][] = "qc_time";
$tdataRejection[".editFields"][] = "upload_date";
$tdataRejection[".editFields"][] = "notify_date";
$tdataRejection[".editFields"][] = "reject_date";
$tdataRejection[".editFields"][] = "reject_reason";
$tdataRejection[".editFields"][] = "reject_reason_others";
$tdataRejection[".editFields"][] = "screenshots";
$tdataRejection[".editFields"][] = "designer2_id";
$tdataRejection[".editFields"][] = "start2_date";
$tdataRejection[".editFields"][] = "end2_date";
$tdataRejection[".editFields"][] = "designer2_time";

$tdataRejection[".inlineEditFields"] = array();
$tdataRejection[".inlineEditFields"][] = "previous_jobfile_id";
$tdataRejection[".inlineEditFields"][] = "file_url";
$tdataRejection[".inlineEditFields"][] = "client_id";
$tdataRejection[".inlineEditFields"][] = "work_id";
$tdataRejection[".inlineEditFields"][] = "job_id";
$tdataRejection[".inlineEditFields"][] = "previous_job_id";
$tdataRejection[".inlineEditFields"][] = "project_id";
$tdataRejection[".inlineEditFields"][] = "folder_name";
$tdataRejection[".inlineEditFields"][] = "filename";
$tdataRejection[".inlineEditFields"][] = "jobfile_type";
$tdataRejection[".inlineEditFields"][] = "jobfile_note";
$tdataRejection[".inlineEditFields"][] = "jobfile_status_id";
$tdataRejection[".inlineEditFields"][] = "downloader_id";
$tdataRejection[".inlineEditFields"][] = "distributor_id";
$tdataRejection[".inlineEditFields"][] = "designer_id";
$tdataRejection[".inlineEditFields"][] = "qc_id";
$tdataRejection[".inlineEditFields"][] = "uploader_id";
$tdataRejection[".inlineEditFields"][] = "notifier_id";
$tdataRejection[".inlineEditFields"][] = "rejector_id";
$tdataRejection[".inlineEditFields"][] = "download_date";
$tdataRejection[".inlineEditFields"][] = "distribute_date";
$tdataRejection[".inlineEditFields"][] = "start_date";
$tdataRejection[".inlineEditFields"][] = "end_date";
$tdataRejection[".inlineEditFields"][] = "designer_time";
$tdataRejection[".inlineEditFields"][] = "qcstart_date";
$tdataRejection[".inlineEditFields"][] = "qcend_date";
$tdataRejection[".inlineEditFields"][] = "qc_time";
$tdataRejection[".inlineEditFields"][] = "upload_date";
$tdataRejection[".inlineEditFields"][] = "notify_date";
$tdataRejection[".inlineEditFields"][] = "reject_date";
$tdataRejection[".inlineEditFields"][] = "reject_reason";
$tdataRejection[".inlineEditFields"][] = "reject_reason_others";
$tdataRejection[".inlineEditFields"][] = "screenshots";
$tdataRejection[".inlineEditFields"][] = "designer2_id";
$tdataRejection[".inlineEditFields"][] = "start2_date";
$tdataRejection[".inlineEditFields"][] = "end2_date";
$tdataRejection[".inlineEditFields"][] = "designer2_time";

$tdataRejection[".exportFields"] = array();
$tdataRejection[".exportFields"][] = "jobfile_id";
$tdataRejection[".exportFields"][] = "previous_jobfile_id";
$tdataRejection[".exportFields"][] = "file_url";
$tdataRejection[".exportFields"][] = "client_id";
$tdataRejection[".exportFields"][] = "work_id";
$tdataRejection[".exportFields"][] = "job_id";
$tdataRejection[".exportFields"][] = "previous_job_id";
$tdataRejection[".exportFields"][] = "project_id";
$tdataRejection[".exportFields"][] = "folder_name";
$tdataRejection[".exportFields"][] = "filename";
$tdataRejection[".exportFields"][] = "jobfile_type";
$tdataRejection[".exportFields"][] = "jobfile_note";
$tdataRejection[".exportFields"][] = "jobfile_status_id";
$tdataRejection[".exportFields"][] = "downloader_id";
$tdataRejection[".exportFields"][] = "distributor_id";
$tdataRejection[".exportFields"][] = "designer_id";
$tdataRejection[".exportFields"][] = "qc_id";
$tdataRejection[".exportFields"][] = "uploader_id";
$tdataRejection[".exportFields"][] = "notifier_id";
$tdataRejection[".exportFields"][] = "rejector_id";
$tdataRejection[".exportFields"][] = "download_date";
$tdataRejection[".exportFields"][] = "distribute_date";
$tdataRejection[".exportFields"][] = "start_date";
$tdataRejection[".exportFields"][] = "end_date";
$tdataRejection[".exportFields"][] = "designer_time";
$tdataRejection[".exportFields"][] = "qcstart_date";
$tdataRejection[".exportFields"][] = "qcend_date";
$tdataRejection[".exportFields"][] = "qc_time";
$tdataRejection[".exportFields"][] = "upload_date";
$tdataRejection[".exportFields"][] = "notify_date";
$tdataRejection[".exportFields"][] = "reject_date";
$tdataRejection[".exportFields"][] = "reject_reason";
$tdataRejection[".exportFields"][] = "reject_reason_others";
$tdataRejection[".exportFields"][] = "screenshots";
$tdataRejection[".exportFields"][] = "designer2_id";
$tdataRejection[".exportFields"][] = "start2_date";
$tdataRejection[".exportFields"][] = "end2_date";
$tdataRejection[".exportFields"][] = "designer2_time";

$tdataRejection[".importFields"] = array();
$tdataRejection[".importFields"][] = "jobfile_id";
$tdataRejection[".importFields"][] = "previous_jobfile_id";
$tdataRejection[".importFields"][] = "file_url";
$tdataRejection[".importFields"][] = "client_id";
$tdataRejection[".importFields"][] = "work_id";
$tdataRejection[".importFields"][] = "job_id";
$tdataRejection[".importFields"][] = "previous_job_id";
$tdataRejection[".importFields"][] = "project_id";
$tdataRejection[".importFields"][] = "folder_name";
$tdataRejection[".importFields"][] = "filename";
$tdataRejection[".importFields"][] = "jobfile_type";
$tdataRejection[".importFields"][] = "jobfile_note";
$tdataRejection[".importFields"][] = "jobfile_status_id";
$tdataRejection[".importFields"][] = "downloader_id";
$tdataRejection[".importFields"][] = "distributor_id";
$tdataRejection[".importFields"][] = "designer_id";
$tdataRejection[".importFields"][] = "qc_id";
$tdataRejection[".importFields"][] = "uploader_id";
$tdataRejection[".importFields"][] = "notifier_id";
$tdataRejection[".importFields"][] = "rejector_id";
$tdataRejection[".importFields"][] = "download_date";
$tdataRejection[".importFields"][] = "distribute_date";
$tdataRejection[".importFields"][] = "start_date";
$tdataRejection[".importFields"][] = "end_date";
$tdataRejection[".importFields"][] = "designer_time";
$tdataRejection[".importFields"][] = "qcstart_date";
$tdataRejection[".importFields"][] = "qcend_date";
$tdataRejection[".importFields"][] = "qc_time";
$tdataRejection[".importFields"][] = "upload_date";
$tdataRejection[".importFields"][] = "notify_date";
$tdataRejection[".importFields"][] = "reject_date";
$tdataRejection[".importFields"][] = "reject_reason";
$tdataRejection[".importFields"][] = "reject_reason_others";
$tdataRejection[".importFields"][] = "screenshots";
$tdataRejection[".importFields"][] = "designer2_id";
$tdataRejection[".importFields"][] = "start2_date";
$tdataRejection[".importFields"][] = "end2_date";
$tdataRejection[".importFields"][] = "designer2_time";

$tdataRejection[".printFields"] = array();
$tdataRejection[".printFields"][] = "jobfile_id";
$tdataRejection[".printFields"][] = "previous_jobfile_id";
$tdataRejection[".printFields"][] = "file_url";
$tdataRejection[".printFields"][] = "client_id";
$tdataRejection[".printFields"][] = "work_id";
$tdataRejection[".printFields"][] = "job_id";
$tdataRejection[".printFields"][] = "previous_job_id";
$tdataRejection[".printFields"][] = "project_id";
$tdataRejection[".printFields"][] = "folder_name";
$tdataRejection[".printFields"][] = "filename";
$tdataRejection[".printFields"][] = "jobfile_type";
$tdataRejection[".printFields"][] = "jobfile_note";
$tdataRejection[".printFields"][] = "jobfile_status_id";
$tdataRejection[".printFields"][] = "downloader_id";
$tdataRejection[".printFields"][] = "distributor_id";
$tdataRejection[".printFields"][] = "designer_id";
$tdataRejection[".printFields"][] = "qc_id";
$tdataRejection[".printFields"][] = "uploader_id";
$tdataRejection[".printFields"][] = "notifier_id";
$tdataRejection[".printFields"][] = "rejector_id";
$tdataRejection[".printFields"][] = "download_date";
$tdataRejection[".printFields"][] = "distribute_date";
$tdataRejection[".printFields"][] = "start_date";
$tdataRejection[".printFields"][] = "end_date";
$tdataRejection[".printFields"][] = "designer_time";
$tdataRejection[".printFields"][] = "qcstart_date";
$tdataRejection[".printFields"][] = "qcend_date";
$tdataRejection[".printFields"][] = "qc_time";
$tdataRejection[".printFields"][] = "upload_date";
$tdataRejection[".printFields"][] = "notify_date";
$tdataRejection[".printFields"][] = "reject_date";
$tdataRejection[".printFields"][] = "reject_reason";
$tdataRejection[".printFields"][] = "reject_reason_others";
$tdataRejection[".printFields"][] = "screenshots";
$tdataRejection[".printFields"][] = "designer2_id";
$tdataRejection[".printFields"][] = "start2_date";
$tdataRejection[".printFields"][] = "end2_date";
$tdataRejection[".printFields"][] = "designer2_time";

//	jobfile_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "jobfile_id";
	$fdata["GoodName"] = "jobfile_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","jobfile_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobfile_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile_id";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
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

	

	
	$tdataRejection["jobfile_id"] = $fdata;
//	previous_jobfile_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "previous_jobfile_id";
	$fdata["GoodName"] = "previous_jobfile_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","previous_jobfile_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["previous_jobfile_id"] = $fdata;
//	file_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "file_url";
	$fdata["GoodName"] = "file_url";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","file_url"); 
	$fdata["FieldType"] = 201;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataRejection["file_url"] = $fdata;
//	client_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "client_id";
	$fdata["GoodName"] = "client_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","client_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["client_id"] = $fdata;
//	work_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "work_id";
	$fdata["GoodName"] = "work_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","work_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["work_id"] = $fdata;
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","job_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["job_id"] = $fdata;
//	previous_job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "previous_job_id";
	$fdata["GoodName"] = "previous_job_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","previous_job_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["rprint"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["previous_job_id"] = $fdata;
//	project_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "project_id";
	$fdata["GoodName"] = "project_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","project_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["project_id"] = $fdata;
//	folder_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "folder_name";
	$fdata["GoodName"] = "folder_name";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","folder_name"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataRejection["folder_name"] = $fdata;
//	filename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "filename";
	$fdata["GoodName"] = "filename";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","filename"); 
	$fdata["FieldType"] = 201;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataRejection["filename"] = $fdata;
//	jobfile_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "jobfile_type";
	$fdata["GoodName"] = "jobfile_type";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","jobfile_type"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	$edata["DisplayField"] = "status_detail";
	
		
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
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataRejection["jobfile_type"] = $fdata;
//	jobfile_note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "jobfile_note";
	$fdata["GoodName"] = "jobfile_note";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","jobfile_note"); 
	$fdata["FieldType"] = 201;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataRejection["jobfile_note"] = $fdata;
//	jobfile_status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "jobfile_status_id";
	$fdata["GoodName"] = "jobfile_status_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","jobfile_status_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["jobfile_status_id"] = $fdata;
//	downloader_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "downloader_id";
	$fdata["GoodName"] = "downloader_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","downloader_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["downloader_id"] = $fdata;
//	distributor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "distributor_id";
	$fdata["GoodName"] = "distributor_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","distributor_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["distributor_id"] = $fdata;
//	designer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "designer_id";
	$fdata["GoodName"] = "designer_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","designer_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["designer_id"] = $fdata;
//	qc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "qc_id";
	$fdata["GoodName"] = "qc_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","qc_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["qc_id"] = $fdata;
//	uploader_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "uploader_id";
	$fdata["GoodName"] = "uploader_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","uploader_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["uploader_id"] = $fdata;
//	notifier_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "notifier_id";
	$fdata["GoodName"] = "notifier_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","notifier_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["notifier_id"] = $fdata;
//	rejector_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "rejector_id";
	$fdata["GoodName"] = "rejector_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","rejector_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["rejector_id"] = $fdata;
//	download_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "download_date";
	$fdata["GoodName"] = "download_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","download_date"); 
	$fdata["FieldType"] = 135;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["download_date"] = $fdata;
//	distribute_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "distribute_date";
	$fdata["GoodName"] = "distribute_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","distribute_date"); 
	$fdata["FieldType"] = 135;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["distribute_date"] = $fdata;
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","start_date"); 
	$fdata["FieldType"] = 135;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["start_date"] = $fdata;
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","end_date"); 
	$fdata["FieldType"] = 135;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["end_date"] = $fdata;
//	designer_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "designer_time";
	$fdata["GoodName"] = "designer_time";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","designer_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["designer_time"] = $fdata;
//	qcstart_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "qcstart_date";
	$fdata["GoodName"] = "qcstart_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","qcstart_date"); 
	$fdata["FieldType"] = 135;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["qcstart_date"] = $fdata;
//	qcend_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "qcend_date";
	$fdata["GoodName"] = "qcend_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","qcend_date"); 
	$fdata["FieldType"] = 135;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["qcend_date"] = $fdata;
//	qc_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "qc_time";
	$fdata["GoodName"] = "qc_time";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","qc_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["qc_time"] = $fdata;
//	upload_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "upload_date";
	$fdata["GoodName"] = "upload_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","upload_date"); 
	$fdata["FieldType"] = 135;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["upload_date"] = $fdata;
//	notify_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "notify_date";
	$fdata["GoodName"] = "notify_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","notify_date"); 
	$fdata["FieldType"] = 135;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["notify_date"] = $fdata;
//	reject_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "reject_date";
	$fdata["GoodName"] = "reject_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","reject_date"); 
	$fdata["FieldType"] = 201;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataRejection["reject_date"] = $fdata;
//	reject_reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "reject_reason";
	$fdata["GoodName"] = "reject_reason";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","reject_reason"); 
	$fdata["FieldType"] = 201;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "type_of_errors";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "type_of_error";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		$edata["Multiselect"] = true; 
	
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	
//Filters settings
	$fdata["filterTotals"] = 1;	
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "jobfile_id";	
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;	
	
		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;
	
					$fdata["dependentFilterName"] = "designer2_id";
	$fdata["dependentFilters"] = array();
					$fdata["dependentFilters"][] = "designer2_id";
				;
;
	
		
	
//end of Filters settings	

	
	$tdataRejection["reject_reason"] = $fdata;
//	reject_reason_others
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "reject_reason_others";
	$fdata["GoodName"] = "reject_reason_others";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","reject_reason_others"); 
	$fdata["FieldType"] = 201;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataRejection["reject_reason_others"] = $fdata;
//	screenshots
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "screenshots";
	$fdata["GoodName"] = "screenshots";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","screenshots"); 
	$fdata["FieldType"] = 201;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "screenshots"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "screenshots";
	
		
		
				$fdata["FieldPermissions"] = true;
	
		$fdata["UploadCodeExpression"] = true;
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "File-based Image");
	
		
		
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 80;
	$vdata["ThumbHeight"] = 80;	
			$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 600;
	
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	$fdata["Absolute"] = true;
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "NOT Empty";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataRejection["screenshots"] = $fdata;
//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","designer2_id"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["rprint"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	
//Filters settings
	$fdata["filterTotals"] = 1;	
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "jobfile_id";	
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;	
	
		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;
	
			$fdata["parentFilterField"] = "reject_reason";	
	$fdata["parentFilters"] = array();
					$fdata["parentFilters"][] = "reject_reason";
				;
;
		
		
	
//end of Filters settings	

	
	$tdataRejection["designer2_id"] = $fdata;
//	start2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "start2_date";
	$fdata["GoodName"] = "start2_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","start2_date"); 
	$fdata["FieldType"] = 135;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["start2_date"] = $fdata;
//	end2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "end2_date";
	$fdata["GoodName"] = "end2_date";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","end2_date"); 
	$fdata["FieldType"] = 135;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["end2_date"] = $fdata;
//	designer2_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "designer2_time";
	$fdata["GoodName"] = "designer2_time";
	$fdata["ownerTable"] = "rejected_jobfile2";
	$fdata["Label"] = GetFieldLabel("Rejection","designer2_time"); 
	$fdata["FieldType"] = 134;
	
		// report field settings
					// end of report field settings
	
		
		
				
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRejection["designer2_time"] = $fdata;

	
$tables_data["Rejection"]=&$tdataRejection;
$field_labels["Rejection"] = &$fieldLabelsRejection;
$fieldToolTips["Rejection"] = &$fieldToolTipsRejection;
$page_titles["Rejection"] = &$pageTitlesRejection;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Rejection"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Rejection"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Rejection()
{
$proto4=array();
$proto4["m_strHead"] = "SELECT";
$proto4["m_strFieldList"] = "jobfile_id,  previous_jobfile_id,  file_url,  client_id,  work_id,  job_id,  previous_job_id,  project_id,  folder_name,  filename,  jobfile_type,  jobfile_note,  jobfile_status_id,  downloader_id,  distributor_id,  designer_id,  qc_id,  uploader_id,  notifier_id,  rejector_id,  download_date,  distribute_date,  start_date,  end_date,  designer_time,  qcstart_date,  qcend_date,  qc_time,  upload_date,  notify_date,  reject_date,  reject_reason,  reject_reason_others,  screenshots,  designer2_id,  start2_date,  end2_date,  designer2_time";
$proto4["m_strFrom"] = "FROM rejected_jobfile2";
$proto4["m_strWhere"] = "(jobfile_status_id =10 OR jobfile_status_id =11)";
$proto4["m_strOrderBy"] = "";
$proto4["m_strTail"] = "";
			$proto4["cipherer"] = null;
$proto5=array();
$proto5["m_sql"] = "jobfile_status_id =10 OR jobfile_status_id =11";
$proto5["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile_status_id =10 OR jobfile_status_id =11"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
						$proto7=array();
$proto7["m_sql"] = "jobfile_status_id =10";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "=10";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

			$proto5["m_contained"][]=$obj;
						$proto9=array();
$proto9["m_sql"] = "jobfile_status_id =11";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "=11";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

			$proto5["m_contained"][]=$obj;
$proto5["m_strCase"] = "";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

$proto4["m_where"] = $obj;
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto4["m_having"] = $obj;
$proto4["m_fieldlist"] = array();
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto13["m_sql"] = "jobfile_id";
$proto13["m_srcTableName"] = "Rejection";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto4["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "previous_jobfile_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto15["m_sql"] = "previous_jobfile_id";
$proto15["m_srcTableName"] = "Rejection";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto4["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "file_url",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto17["m_sql"] = "file_url";
$proto17["m_srcTableName"] = "Rejection";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto4["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "client_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto19["m_sql"] = "client_id";
$proto19["m_srcTableName"] = "Rejection";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto4["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "work_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto21["m_sql"] = "work_id";
$proto21["m_srcTableName"] = "Rejection";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto4["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto23["m_sql"] = "job_id";
$proto23["m_srcTableName"] = "Rejection";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto4["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "previous_job_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto25["m_sql"] = "previous_job_id";
$proto25["m_srcTableName"] = "Rejection";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto4["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto27["m_sql"] = "project_id";
$proto27["m_srcTableName"] = "Rejection";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto4["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "folder_name",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto29["m_sql"] = "folder_name";
$proto29["m_srcTableName"] = "Rejection";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto4["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto31["m_sql"] = "filename";
$proto31["m_srcTableName"] = "Rejection";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto4["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_type",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto33["m_sql"] = "jobfile_type";
$proto33["m_srcTableName"] = "Rejection";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto4["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_note",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto35["m_sql"] = "jobfile_note";
$proto35["m_srcTableName"] = "Rejection";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto4["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto37["m_sql"] = "jobfile_status_id";
$proto37["m_srcTableName"] = "Rejection";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto4["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "downloader_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto39["m_sql"] = "downloader_id";
$proto39["m_srcTableName"] = "Rejection";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto4["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "distributor_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto41["m_sql"] = "distributor_id";
$proto41["m_srcTableName"] = "Rejection";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto4["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto43["m_sql"] = "designer_id";
$proto43["m_srcTableName"] = "Rejection";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto4["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "qc_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto45["m_sql"] = "qc_id";
$proto45["m_srcTableName"] = "Rejection";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto4["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "uploader_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto47["m_sql"] = "uploader_id";
$proto47["m_srcTableName"] = "Rejection";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto4["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "notifier_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto49["m_sql"] = "notifier_id";
$proto49["m_srcTableName"] = "Rejection";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto4["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "rejector_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto51["m_sql"] = "rejector_id";
$proto51["m_srcTableName"] = "Rejection";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto4["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "download_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto53["m_sql"] = "download_date";
$proto53["m_srcTableName"] = "Rejection";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto4["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "distribute_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto55["m_sql"] = "distribute_date";
$proto55["m_srcTableName"] = "Rejection";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto4["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto57["m_sql"] = "start_date";
$proto57["m_srcTableName"] = "Rejection";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto4["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto59["m_sql"] = "end_date";
$proto59["m_srcTableName"] = "Rejection";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto4["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_time",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto61["m_sql"] = "designer_time";
$proto61["m_srcTableName"] = "Rejection";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto4["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "qcstart_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto63["m_sql"] = "qcstart_date";
$proto63["m_srcTableName"] = "Rejection";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto4["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "qcend_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto65["m_sql"] = "qcend_date";
$proto65["m_srcTableName"] = "Rejection";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto4["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "qc_time",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto67["m_sql"] = "qc_time";
$proto67["m_srcTableName"] = "Rejection";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto4["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "upload_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto69["m_sql"] = "upload_date";
$proto69["m_srcTableName"] = "Rejection";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto4["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "notify_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto71["m_sql"] = "notify_date";
$proto71["m_srcTableName"] = "Rejection";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto4["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "reject_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto73["m_sql"] = "reject_date";
$proto73["m_srcTableName"] = "Rejection";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto4["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "reject_reason",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto75["m_sql"] = "reject_reason";
$proto75["m_srcTableName"] = "Rejection";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto4["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "reject_reason_others",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto77["m_sql"] = "reject_reason_others";
$proto77["m_srcTableName"] = "Rejection";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto4["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "screenshots",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto79["m_sql"] = "screenshots";
$proto79["m_srcTableName"] = "Rejection";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto4["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto81["m_sql"] = "designer2_id";
$proto81["m_srcTableName"] = "Rejection";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto4["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "start2_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto83["m_sql"] = "start2_date";
$proto83["m_srcTableName"] = "Rejection";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto4["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto85["m_sql"] = "end2_date";
$proto85["m_srcTableName"] = "Rejection";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto4["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_time",
	"m_strTable" => "rejected_jobfile2",
	"m_srcTableName" => "Rejection"
));

$proto87["m_sql"] = "designer2_time";
$proto87["m_srcTableName"] = "Rejection";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto4["m_fieldlist"][]=$obj;
$proto4["m_fromlist"] = array();
												$proto89=array();
$proto89["m_link"] = "SQLL_MAIN";
			$proto90=array();
$proto90["m_strName"] = "rejected_jobfile2";
$proto90["m_srcTableName"] = "Rejection";
$proto90["m_columns"] = array();
$proto90["m_columns"][] = "jobfile_id";
$proto90["m_columns"][] = "previous_jobfile_id";
$proto90["m_columns"][] = "file_url";
$proto90["m_columns"][] = "client_id";
$proto90["m_columns"][] = "work_id";
$proto90["m_columns"][] = "job_id";
$proto90["m_columns"][] = "previous_job_id";
$proto90["m_columns"][] = "project_id";
$proto90["m_columns"][] = "folder_name";
$proto90["m_columns"][] = "filename";
$proto90["m_columns"][] = "jobfile_type";
$proto90["m_columns"][] = "jobfile_note";
$proto90["m_columns"][] = "jobfile_status_id";
$proto90["m_columns"][] = "downloader_id";
$proto90["m_columns"][] = "distributor_id";
$proto90["m_columns"][] = "designer_id";
$proto90["m_columns"][] = "qc_id";
$proto90["m_columns"][] = "uploader_id";
$proto90["m_columns"][] = "notifier_id";
$proto90["m_columns"][] = "rejector_id";
$proto90["m_columns"][] = "download_date";
$proto90["m_columns"][] = "distribute_date";
$proto90["m_columns"][] = "start_date";
$proto90["m_columns"][] = "end_date";
$proto90["m_columns"][] = "designer_time";
$proto90["m_columns"][] = "qcstart_date";
$proto90["m_columns"][] = "qcend_date";
$proto90["m_columns"][] = "qc_time";
$proto90["m_columns"][] = "upload_date";
$proto90["m_columns"][] = "notify_date";
$proto90["m_columns"][] = "reject_date";
$proto90["m_columns"][] = "reject_reason";
$proto90["m_columns"][] = "reject_reason_others";
$proto90["m_columns"][] = "screenshots";
$proto90["m_columns"][] = "designer2_id";
$proto90["m_columns"][] = "start2_date";
$proto90["m_columns"][] = "end2_date";
$proto90["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto90);

$proto89["m_table"] = $obj;
$proto89["m_sql"] = "rejected_jobfile2";
$proto89["m_alias"] = "";
$proto89["m_srcTableName"] = "Rejection";
$proto91=array();
$proto91["m_sql"] = "";
$proto91["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto91["m_column"]=$obj;
$proto91["m_contained"] = array();
$proto91["m_strCase"] = "";
$proto91["m_havingmode"] = false;
$proto91["m_inBrackets"] = false;
$proto91["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto91);

$proto89["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto89);

$proto4["m_fromlist"][]=$obj;
$proto4["m_groupby"] = array();
$proto4["m_orderby"] = array();
$proto4["m_srcTableName"]="Rejection";		
$obj = new SQLQuery($proto4);

	return $obj;
}
$queryData_Rejection = createSqlQuery_Rejection();


	
																																						
	
$tdataRejection[".sqlquery"] = $queryData_Rejection;

$tableEvents["Rejection"] = new eventsBase;
$tdataRejection[".hasEvents"] = false;

?>