<?php
require_once(getabspath("classes/cipherer.php"));




$tdatarejected_job = array();	
	$tdatarejected_job[".truncateText"] = true;
	$tdatarejected_job[".NumberOfChars"] = 80; 
	$tdatarejected_job[".ShortName"] = "rejected_job";
	$tdatarejected_job[".OwnerID"] = "";
	$tdatarejected_job[".OriginalTable"] = "rejected_job";

//	field labels
$fieldLabelsrejected_job = array();
$fieldToolTipsrejected_job = array();
$pageTitlesrejected_job = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsrejected_job["English"] = array();
	$fieldToolTipsrejected_job["English"] = array();
	$pageTitlesrejected_job["English"] = array();
	$fieldLabelsrejected_job["English"]["previous_job_id"] = "Previous Job Id";
	$fieldToolTipsrejected_job["English"]["previous_job_id"] = "";
	$fieldLabelsrejected_job["English"]["work_id"] = "Work Id";
	$fieldToolTipsrejected_job["English"]["work_id"] = "";
	$fieldLabelsrejected_job["English"]["job_id"] = "Job Id";
	$fieldToolTipsrejected_job["English"]["job_id"] = "";
	$fieldLabelsrejected_job["English"]["total_images"] = "Total Images";
	$fieldToolTipsrejected_job["English"]["total_images"] = "";
	$fieldLabelsrejected_job["English"]["reject_type"] = "Reject Type";
	$fieldToolTipsrejected_job["English"]["reject_type"] = "";
	$fieldLabelsrejected_job["English"]["reject_notes"] = "Reject Notes";
	$fieldToolTipsrejected_job["English"]["reject_notes"] = "";
	$fieldLabelsrejected_job["English"]["web_note"] = "Web Note";
	$fieldToolTipsrejected_job["English"]["web_note"] = "";
	$fieldLabelsrejected_job["English"]["comments"] = "Comments";
	$fieldToolTipsrejected_job["English"]["comments"] = "";
	$fieldLabelsrejected_job["English"]["jobstatus_id"] = "Jobstatus Id";
	$fieldToolTipsrejected_job["English"]["jobstatus_id"] = "";
	$fieldLabelsrejected_job["English"]["downloader_id"] = "Downloader Id";
	$fieldToolTipsrejected_job["English"]["downloader_id"] = "";
	$fieldLabelsrejected_job["English"]["download_date"] = "Download Date";
	$fieldToolTipsrejected_job["English"]["download_date"] = "";
	$fieldLabelsrejected_job["English"]["distributor_id"] = "Distributor Id";
	$fieldToolTipsrejected_job["English"]["distributor_id"] = "";
	$fieldLabelsrejected_job["English"]["distribute_date"] = "Distribute Date";
	$fieldToolTipsrejected_job["English"]["distribute_date"] = "";
	$fieldLabelsrejected_job["English"]["uploader_id"] = "Uploader Id";
	$fieldToolTipsrejected_job["English"]["uploader_id"] = "";
	$fieldLabelsrejected_job["English"]["upload_date"] = "Upload Date";
	$fieldToolTipsrejected_job["English"]["upload_date"] = "";
	$fieldLabelsrejected_job["English"]["notifer_id"] = "Notifer Id";
	$fieldToolTipsrejected_job["English"]["notifer_id"] = "";
	$fieldLabelsrejected_job["English"]["notify_date"] = "Notify Date";
	$fieldToolTipsrejected_job["English"]["notify_date"] = "";
	$fieldLabelsrejected_job["English"]["reviewer_id"] = "Reviewer Id";
	$fieldToolTipsrejected_job["English"]["reviewer_id"] = "";
	$fieldLabelsrejected_job["English"]["reject_date"] = "Reject Date";
	$fieldToolTipsrejected_job["English"]["reject_date"] = "";
	$fieldLabelsrejected_job["English"]["reject_reason"] = "Reject Reason";
	$fieldToolTipsrejected_job["English"]["reject_reason"] = "";
	$fieldLabelsrejected_job["English"]["pdf_id"] = "Pdf Id";
	$fieldToolTipsrejected_job["English"]["pdf_id"] = "";
	$fieldLabelsrejected_job["English"]["pdf_name"] = "Pdf Name";
	$fieldToolTipsrejected_job["English"]["pdf_name"] = "";
	$fieldLabelsrejected_job["English"]["delivery_duration"] = "Delivery Duration";
	$fieldToolTipsrejected_job["English"]["delivery_duration"] = "";
	$fieldLabelsrejected_job["English"]["delivery_date"] = "Delivery Date";
	$fieldToolTipsrejected_job["English"]["delivery_date"] = "";
	$fieldLabelsrejected_job["English"]["designer_list"] = "Designer List";
	$fieldToolTipsrejected_job["English"]["designer_list"] = "";
	$fieldLabelsrejected_job["English"]["qcs_list"] = "Qcs List";
	$fieldToolTipsrejected_job["English"]["qcs_list"] = "";
	if (count($fieldToolTipsrejected_job["English"]))
		$tdatarejected_job[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsrejected_job[""] = array();
	$fieldToolTipsrejected_job[""] = array();
	$pageTitlesrejected_job[""] = array();
	$fieldLabelsrejected_job[""]["previous_job_id"] = "Previous Job Id";
	$fieldToolTipsrejected_job[""]["previous_job_id"] = "";
	$fieldLabelsrejected_job[""]["work_id"] = "Work Id";
	$fieldToolTipsrejected_job[""]["work_id"] = "";
	$fieldLabelsrejected_job[""]["job_id"] = "Job Id";
	$fieldToolTipsrejected_job[""]["job_id"] = "";
	$fieldLabelsrejected_job[""]["total_images"] = "Total Images";
	$fieldToolTipsrejected_job[""]["total_images"] = "";
	$fieldLabelsrejected_job[""]["reject_type"] = "Reject Type";
	$fieldToolTipsrejected_job[""]["reject_type"] = "";
	$fieldLabelsrejected_job[""]["reject_notes"] = "Reject Notes";
	$fieldToolTipsrejected_job[""]["reject_notes"] = "";
	$fieldLabelsrejected_job[""]["web_note"] = "Web Note";
	$fieldToolTipsrejected_job[""]["web_note"] = "";
	$fieldLabelsrejected_job[""]["comments"] = "Comments";
	$fieldToolTipsrejected_job[""]["comments"] = "";
	$fieldLabelsrejected_job[""]["jobstatus_id"] = "Jobstatus Id";
	$fieldToolTipsrejected_job[""]["jobstatus_id"] = "";
	$fieldLabelsrejected_job[""]["downloader_id"] = "Downloader Id";
	$fieldToolTipsrejected_job[""]["downloader_id"] = "";
	$fieldLabelsrejected_job[""]["download_date"] = "Download Date";
	$fieldToolTipsrejected_job[""]["download_date"] = "";
	$fieldLabelsrejected_job[""]["distributor_id"] = "Distributor Id";
	$fieldToolTipsrejected_job[""]["distributor_id"] = "";
	$fieldLabelsrejected_job[""]["distribute_date"] = "Distribute Date";
	$fieldToolTipsrejected_job[""]["distribute_date"] = "";
	$fieldLabelsrejected_job[""]["uploader_id"] = "Uploader Id";
	$fieldToolTipsrejected_job[""]["uploader_id"] = "";
	$fieldLabelsrejected_job[""]["upload_date"] = "Upload Date";
	$fieldToolTipsrejected_job[""]["upload_date"] = "";
	$fieldLabelsrejected_job[""]["notifer_id"] = "Notifer Id";
	$fieldToolTipsrejected_job[""]["notifer_id"] = "";
	$fieldLabelsrejected_job[""]["notify_date"] = "Notify Date";
	$fieldToolTipsrejected_job[""]["notify_date"] = "";
	$fieldLabelsrejected_job[""]["reviewer_id"] = "Reviewer Id";
	$fieldToolTipsrejected_job[""]["reviewer_id"] = "";
	$fieldLabelsrejected_job[""]["reject_date"] = "Reject Date";
	$fieldToolTipsrejected_job[""]["reject_date"] = "";
	$fieldLabelsrejected_job[""]["reject_reason"] = "Reject Reason";
	$fieldToolTipsrejected_job[""]["reject_reason"] = "";
	$fieldLabelsrejected_job[""]["pdf_id"] = "Pdf Id";
	$fieldToolTipsrejected_job[""]["pdf_id"] = "";
	$fieldLabelsrejected_job[""]["pdf_name"] = "Pdf Name";
	$fieldToolTipsrejected_job[""]["pdf_name"] = "";
	$fieldLabelsrejected_job[""]["delivery_duration"] = "Delivery Duration";
	$fieldToolTipsrejected_job[""]["delivery_duration"] = "";
	$fieldLabelsrejected_job[""]["delivery_date"] = "Delivery Date";
	$fieldToolTipsrejected_job[""]["delivery_date"] = "";
	$fieldLabelsrejected_job[""]["designer_list"] = "Designer List";
	$fieldToolTipsrejected_job[""]["designer_list"] = "";
	$fieldLabelsrejected_job[""]["qcs_list"] = "Qcs List";
	$fieldToolTipsrejected_job[""]["qcs_list"] = "";
	if (count($fieldToolTipsrejected_job[""]))
		$tdatarejected_job[".isUseToolTips"] = true;
}
	
	
	$tdatarejected_job[".NCSearch"] = true;



$tdatarejected_job[".shortTableName"] = "rejected_job";
$tdatarejected_job[".nSecOptions"] = 0;
$tdatarejected_job[".recsPerRowList"] = 1;
$tdatarejected_job[".recsPerRowPrint"] = 1;
$tdatarejected_job[".mainTableOwnerID"] = "";
$tdatarejected_job[".moveNext"] = 1;
$tdatarejected_job[".entityType"] = 0;

$tdatarejected_job[".strOriginalTableName"] = "rejected_job";




$tdatarejected_job[".showAddInPopup"] = false;

$tdatarejected_job[".showEditInPopup"] = false;

$tdatarejected_job[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarejected_job[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarejected_job[".fieldsForRegister"] = array();

$tdatarejected_job[".listAjax"] = false;

	$tdatarejected_job[".audit"] = false;

	$tdatarejected_job[".locking"] = false;

$tdatarejected_job[".edit"] = true;
$tdatarejected_job[".afterEditAction"] = 1;
$tdatarejected_job[".closePopupAfterEdit"] = 1;
$tdatarejected_job[".afterEditActionDetTable"] = "";

$tdatarejected_job[".add"] = true;
$tdatarejected_job[".afterAddAction"] = 0;
$tdatarejected_job[".closePopupAfterAdd"] = 1;
$tdatarejected_job[".afterAddActionDetTable"] = "";

$tdatarejected_job[".list"] = true;

$tdatarejected_job[".view"] = true;

$tdatarejected_job[".import"] = true;

$tdatarejected_job[".exportTo"] = true;

$tdatarejected_job[".printFriendly"] = true;

$tdatarejected_job[".delete"] = true;

$tdatarejected_job[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatarejected_job[".searchSaving"] = false;
//

$tdatarejected_job[".showSearchPanel"] = true;
		$tdatarejected_job[".flexibleSearch"] = true;		

if (isMobile())
	$tdatarejected_job[".isUseAjaxSuggest"] = false;
else 
	$tdatarejected_job[".isUseAjaxSuggest"] = true;

$tdatarejected_job[".rowHighlite"] = true;


																																																																																																																															
			
																		
	$tdatarejected_job[".isUsebuttonHandlers"] = true;

$tdatarejected_job[".addPageEvents"] = true;

// use timepicker for search panel
$tdatarejected_job[".isUseTimeForSearch"] = false;





$tdatarejected_job[".allSearchFields"] = array();
$tdatarejected_job[".filterFields"] = array();
$tdatarejected_job[".requiredSearchFields"] = array();

$tdatarejected_job[".allSearchFields"][] = "designer_list";
	$tdatarejected_job[".allSearchFields"][] = "delivery_duration";
	$tdatarejected_job[".allSearchFields"][] = "pdf_name";
	$tdatarejected_job[".allSearchFields"][] = "pdf_id";
	$tdatarejected_job[".allSearchFields"][] = "delivery_date";
	$tdatarejected_job[".allSearchFields"][] = "qcs_list";
	$tdatarejected_job[".allSearchFields"][] = "work_id";
	$tdatarejected_job[".allSearchFields"][] = "job_id";
	$tdatarejected_job[".allSearchFields"][] = "previous_job_id";
	$tdatarejected_job[".allSearchFields"][] = "total_images";
	$tdatarejected_job[".allSearchFields"][] = "reject_type";
	$tdatarejected_job[".allSearchFields"][] = "reject_notes";
	$tdatarejected_job[".allSearchFields"][] = "web_note";
	$tdatarejected_job[".allSearchFields"][] = "comments";
	$tdatarejected_job[".allSearchFields"][] = "jobstatus_id";
	$tdatarejected_job[".allSearchFields"][] = "downloader_id";
	$tdatarejected_job[".allSearchFields"][] = "download_date";
	$tdatarejected_job[".allSearchFields"][] = "distributor_id";
	$tdatarejected_job[".allSearchFields"][] = "distribute_date";
	$tdatarejected_job[".allSearchFields"][] = "uploader_id";
	$tdatarejected_job[".allSearchFields"][] = "upload_date";
	$tdatarejected_job[".allSearchFields"][] = "notifer_id";
	$tdatarejected_job[".allSearchFields"][] = "notify_date";
	$tdatarejected_job[".allSearchFields"][] = "reviewer_id";
	$tdatarejected_job[".allSearchFields"][] = "reject_date";
	$tdatarejected_job[".allSearchFields"][] = "reject_reason";
	

$tdatarejected_job[".googleLikeFields"] = array();
$tdatarejected_job[".googleLikeFields"][] = "work_id";
$tdatarejected_job[".googleLikeFields"][] = "job_id";
$tdatarejected_job[".googleLikeFields"][] = "previous_job_id";
$tdatarejected_job[".googleLikeFields"][] = "total_images";
$tdatarejected_job[".googleLikeFields"][] = "reject_type";
$tdatarejected_job[".googleLikeFields"][] = "reject_notes";
$tdatarejected_job[".googleLikeFields"][] = "web_note";
$tdatarejected_job[".googleLikeFields"][] = "comments";
$tdatarejected_job[".googleLikeFields"][] = "jobstatus_id";
$tdatarejected_job[".googleLikeFields"][] = "downloader_id";
$tdatarejected_job[".googleLikeFields"][] = "download_date";
$tdatarejected_job[".googleLikeFields"][] = "distributor_id";
$tdatarejected_job[".googleLikeFields"][] = "distribute_date";
$tdatarejected_job[".googleLikeFields"][] = "uploader_id";
$tdatarejected_job[".googleLikeFields"][] = "upload_date";
$tdatarejected_job[".googleLikeFields"][] = "notifer_id";
$tdatarejected_job[".googleLikeFields"][] = "notify_date";
$tdatarejected_job[".googleLikeFields"][] = "reviewer_id";
$tdatarejected_job[".googleLikeFields"][] = "reject_date";
$tdatarejected_job[".googleLikeFields"][] = "reject_reason";
$tdatarejected_job[".googleLikeFields"][] = "delivery_date";
$tdatarejected_job[".googleLikeFields"][] = "pdf_id";
$tdatarejected_job[".googleLikeFields"][] = "pdf_name";
$tdatarejected_job[".googleLikeFields"][] = "delivery_duration";
$tdatarejected_job[".googleLikeFields"][] = "designer_list";
$tdatarejected_job[".googleLikeFields"][] = "qcs_list";


$tdatarejected_job[".advSearchFields"] = array();
$tdatarejected_job[".advSearchFields"][] = "designer_list";
$tdatarejected_job[".advSearchFields"][] = "delivery_duration";
$tdatarejected_job[".advSearchFields"][] = "pdf_name";
$tdatarejected_job[".advSearchFields"][] = "pdf_id";
$tdatarejected_job[".advSearchFields"][] = "delivery_date";
$tdatarejected_job[".advSearchFields"][] = "qcs_list";
$tdatarejected_job[".advSearchFields"][] = "work_id";
$tdatarejected_job[".advSearchFields"][] = "job_id";
$tdatarejected_job[".advSearchFields"][] = "previous_job_id";
$tdatarejected_job[".advSearchFields"][] = "total_images";
$tdatarejected_job[".advSearchFields"][] = "reject_type";
$tdatarejected_job[".advSearchFields"][] = "reject_notes";
$tdatarejected_job[".advSearchFields"][] = "web_note";
$tdatarejected_job[".advSearchFields"][] = "comments";
$tdatarejected_job[".advSearchFields"][] = "jobstatus_id";
$tdatarejected_job[".advSearchFields"][] = "downloader_id";
$tdatarejected_job[".advSearchFields"][] = "download_date";
$tdatarejected_job[".advSearchFields"][] = "distributor_id";
$tdatarejected_job[".advSearchFields"][] = "distribute_date";
$tdatarejected_job[".advSearchFields"][] = "uploader_id";
$tdatarejected_job[".advSearchFields"][] = "upload_date";
$tdatarejected_job[".advSearchFields"][] = "notifer_id";
$tdatarejected_job[".advSearchFields"][] = "notify_date";
$tdatarejected_job[".advSearchFields"][] = "reviewer_id";
$tdatarejected_job[".advSearchFields"][] = "reject_date";
$tdatarejected_job[".advSearchFields"][] = "reject_reason";

$tdatarejected_job[".tableType"] = "list";

$tdatarejected_job[".printerPageOrientation"] = 0;
$tdatarejected_job[".nPrinterPageScale"] = 100;

$tdatarejected_job[".nPrinterSplitRecords"] = 40;

$tdatarejected_job[".nPrinterPDFSplitRecords"] = 40;



$tdatarejected_job[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf

$tdatarejected_job[".totalsFields"] = array();
$tdatarejected_job[".totalsFields"][] = array(
	"fName" => "total_images", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');

$tdatarejected_job[".pageSize"] = 20;

$tdatarejected_job[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarejected_job[".strOrderBy"] = $tstrOrderBy;

$tdatarejected_job[".orderindexes"] = array();

$tdatarejected_job[".sqlHead"] = "SELECT work_id,  	job_id,  	previous_job_id,  	total_images,  	reject_type,  	reject_notes,  	web_note,  	comments,  	jobstatus_id,  	downloader_id,  	download_date,  	distributor_id,  	distribute_date,  	uploader_id,  	upload_date,  	notifer_id,  	notify_date,  	reviewer_id,  	reject_date,  	reject_reason,  	delivery_date,  	pdf_id,  	pdf_name,  	delivery_duration,  	designer_list,  	qcs_list";
$tdatarejected_job[".sqlFrom"] = "FROM rejected_job";
$tdatarejected_job[".sqlWhereExpr"] = "";
$tdatarejected_job[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "downloader_id";
	$tabFields[] = "download_date";
	$tabFields[] = "distributor_id";
	$tabFields[] = "distribute_date";
	$tabFields[] = "uploader_id";
	$tabFields[] = "upload_date";
	$tabFields[] = "notifer_id";
	$tabFields[] = "notify_date";
	$tabFields[] = "reviewer_id";
$arrEditTabs[] = array('tabId'=>'Information1',
					   'tabName'=>"Information",
					   'nType'=>'1',
					   'nOrder'=>15,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatarejected_job[".arrEditTabs"] = $arrEditTabs;








//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarejected_job[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarejected_job[".arrGroupsPerPage"] = $arrGPP;

$tdatarejected_job[".highlightSearchResults"] = true;

$tableKeysrejected_job = array();
$tableKeysrejected_job[] = "work_id";
$tdatarejected_job[".Keys"] = $tableKeysrejected_job;

$tdatarejected_job[".listFields"] = array();
$tdatarejected_job[".listFields"][] = "jobstatus_id";
$tdatarejected_job[".listFields"][] = "job_id";
$tdatarejected_job[".listFields"][] = "previous_job_id";
$tdatarejected_job[".listFields"][] = "pdf_name";
$tdatarejected_job[".listFields"][] = "total_images";
$tdatarejected_job[".listFields"][] = "pdf_id";
$tdatarejected_job[".listFields"][] = "reject_type";
$tdatarejected_job[".listFields"][] = "reject_reason";
$tdatarejected_job[".listFields"][] = "reject_notes";
$tdatarejected_job[".listFields"][] = "comments";
$tdatarejected_job[".listFields"][] = "web_note";
$tdatarejected_job[".listFields"][] = "designer_list";
$tdatarejected_job[".listFields"][] = "qcs_list";
$tdatarejected_job[".listFields"][] = "notifer_id";
$tdatarejected_job[".listFields"][] = "notify_date";
$tdatarejected_job[".listFields"][] = "reviewer_id";
$tdatarejected_job[".listFields"][] = "reject_date";
$tdatarejected_job[".listFields"][] = "delivery_date";
$tdatarejected_job[".listFields"][] = "delivery_duration";

$tdatarejected_job[".hideMobileList"] = array();


$tdatarejected_job[".viewFields"] = array();
$tdatarejected_job[".viewFields"][] = "designer_list";
$tdatarejected_job[".viewFields"][] = "delivery_duration";
$tdatarejected_job[".viewFields"][] = "pdf_name";
$tdatarejected_job[".viewFields"][] = "delivery_date";
$tdatarejected_job[".viewFields"][] = "qcs_list";
$tdatarejected_job[".viewFields"][] = "pdf_id";
$tdatarejected_job[".viewFields"][] = "work_id";
$tdatarejected_job[".viewFields"][] = "job_id";
$tdatarejected_job[".viewFields"][] = "previous_job_id";
$tdatarejected_job[".viewFields"][] = "total_images";
$tdatarejected_job[".viewFields"][] = "reject_type";
$tdatarejected_job[".viewFields"][] = "reject_notes";
$tdatarejected_job[".viewFields"][] = "web_note";
$tdatarejected_job[".viewFields"][] = "comments";
$tdatarejected_job[".viewFields"][] = "jobstatus_id";
$tdatarejected_job[".viewFields"][] = "downloader_id";
$tdatarejected_job[".viewFields"][] = "download_date";
$tdatarejected_job[".viewFields"][] = "distributor_id";
$tdatarejected_job[".viewFields"][] = "distribute_date";
$tdatarejected_job[".viewFields"][] = "uploader_id";
$tdatarejected_job[".viewFields"][] = "upload_date";
$tdatarejected_job[".viewFields"][] = "notifer_id";
$tdatarejected_job[".viewFields"][] = "notify_date";
$tdatarejected_job[".viewFields"][] = "reviewer_id";
$tdatarejected_job[".viewFields"][] = "reject_date";
$tdatarejected_job[".viewFields"][] = "reject_reason";

$tdatarejected_job[".addFields"] = array();
$tdatarejected_job[".addFields"][] = "work_id";
$tdatarejected_job[".addFields"][] = "job_id";
$tdatarejected_job[".addFields"][] = "previous_job_id";
$tdatarejected_job[".addFields"][] = "pdf_id";
$tdatarejected_job[".addFields"][] = "pdf_name";
$tdatarejected_job[".addFields"][] = "total_images";
$tdatarejected_job[".addFields"][] = "reject_reason";
$tdatarejected_job[".addFields"][] = "reject_notes";
$tdatarejected_job[".addFields"][] = "reject_type";
$tdatarejected_job[".addFields"][] = "jobstatus_id";
$tdatarejected_job[".addFields"][] = "delivery_duration";
$tdatarejected_job[".addFields"][] = "delivery_date";
$tdatarejected_job[".addFields"][] = "web_note";
$tdatarejected_job[".addFields"][] = "comments";
$tdatarejected_job[".addFields"][] = "reviewer_id";
$tdatarejected_job[".addFields"][] = "reject_date";

$tdatarejected_job[".masterListFields"] = array();
$tdatarejected_job[".masterListFields"][] = "designer_list";
$tdatarejected_job[".masterListFields"][] = "delivery_duration";
$tdatarejected_job[".masterListFields"][] = "pdf_name";
$tdatarejected_job[".masterListFields"][] = "pdf_id";
$tdatarejected_job[".masterListFields"][] = "delivery_date";
$tdatarejected_job[".masterListFields"][] = "qcs_list";
$tdatarejected_job[".masterListFields"][] = "work_id";
$tdatarejected_job[".masterListFields"][] = "job_id";
$tdatarejected_job[".masterListFields"][] = "previous_job_id";
$tdatarejected_job[".masterListFields"][] = "total_images";
$tdatarejected_job[".masterListFields"][] = "reject_type";
$tdatarejected_job[".masterListFields"][] = "reject_notes";
$tdatarejected_job[".masterListFields"][] = "web_note";
$tdatarejected_job[".masterListFields"][] = "comments";
$tdatarejected_job[".masterListFields"][] = "jobstatus_id";
$tdatarejected_job[".masterListFields"][] = "downloader_id";
$tdatarejected_job[".masterListFields"][] = "download_date";
$tdatarejected_job[".masterListFields"][] = "distributor_id";
$tdatarejected_job[".masterListFields"][] = "distribute_date";
$tdatarejected_job[".masterListFields"][] = "uploader_id";
$tdatarejected_job[".masterListFields"][] = "upload_date";
$tdatarejected_job[".masterListFields"][] = "notifer_id";
$tdatarejected_job[".masterListFields"][] = "notify_date";
$tdatarejected_job[".masterListFields"][] = "reviewer_id";
$tdatarejected_job[".masterListFields"][] = "reject_date";
$tdatarejected_job[".masterListFields"][] = "reject_reason";

$tdatarejected_job[".inlineAddFields"] = array();

$tdatarejected_job[".editFields"] = array();
$tdatarejected_job[".editFields"][] = "job_id";
$tdatarejected_job[".editFields"][] = "previous_job_id";
$tdatarejected_job[".editFields"][] = "jobstatus_id";
$tdatarejected_job[".editFields"][] = "total_images";
$tdatarejected_job[".editFields"][] = "pdf_id";
$tdatarejected_job[".editFields"][] = "pdf_name";
$tdatarejected_job[".editFields"][] = "delivery_date";
$tdatarejected_job[".editFields"][] = "delivery_duration";
$tdatarejected_job[".editFields"][] = "reject_type";
$tdatarejected_job[".editFields"][] = "reject_notes";
$tdatarejected_job[".editFields"][] = "web_note";
$tdatarejected_job[".editFields"][] = "comments";
$tdatarejected_job[".editFields"][] = "reject_date";
$tdatarejected_job[".editFields"][] = "reject_reason";
$tdatarejected_job[".editFields"][] = "downloader_id";
$tdatarejected_job[".editFields"][] = "download_date";
$tdatarejected_job[".editFields"][] = "distributor_id";
$tdatarejected_job[".editFields"][] = "distribute_date";
$tdatarejected_job[".editFields"][] = "uploader_id";
$tdatarejected_job[".editFields"][] = "upload_date";
$tdatarejected_job[".editFields"][] = "notifer_id";
$tdatarejected_job[".editFields"][] = "notify_date";
$tdatarejected_job[".editFields"][] = "reviewer_id";

$tdatarejected_job[".inlineEditFields"] = array();

$tdatarejected_job[".exportFields"] = array();
$tdatarejected_job[".exportFields"][] = "designer_list";
$tdatarejected_job[".exportFields"][] = "delivery_duration";
$tdatarejected_job[".exportFields"][] = "pdf_name";
$tdatarejected_job[".exportFields"][] = "pdf_id";
$tdatarejected_job[".exportFields"][] = "delivery_date";
$tdatarejected_job[".exportFields"][] = "qcs_list";
$tdatarejected_job[".exportFields"][] = "work_id";
$tdatarejected_job[".exportFields"][] = "job_id";
$tdatarejected_job[".exportFields"][] = "previous_job_id";
$tdatarejected_job[".exportFields"][] = "total_images";
$tdatarejected_job[".exportFields"][] = "reject_type";
$tdatarejected_job[".exportFields"][] = "reject_notes";
$tdatarejected_job[".exportFields"][] = "web_note";
$tdatarejected_job[".exportFields"][] = "comments";
$tdatarejected_job[".exportFields"][] = "jobstatus_id";
$tdatarejected_job[".exportFields"][] = "downloader_id";
$tdatarejected_job[".exportFields"][] = "download_date";
$tdatarejected_job[".exportFields"][] = "distributor_id";
$tdatarejected_job[".exportFields"][] = "distribute_date";
$tdatarejected_job[".exportFields"][] = "uploader_id";
$tdatarejected_job[".exportFields"][] = "upload_date";
$tdatarejected_job[".exportFields"][] = "notifer_id";
$tdatarejected_job[".exportFields"][] = "notify_date";
$tdatarejected_job[".exportFields"][] = "reviewer_id";
$tdatarejected_job[".exportFields"][] = "reject_date";
$tdatarejected_job[".exportFields"][] = "reject_reason";

$tdatarejected_job[".importFields"] = array();
$tdatarejected_job[".importFields"][] = "work_id";
$tdatarejected_job[".importFields"][] = "job_id";
$tdatarejected_job[".importFields"][] = "previous_job_id";
$tdatarejected_job[".importFields"][] = "total_images";
$tdatarejected_job[".importFields"][] = "reject_type";
$tdatarejected_job[".importFields"][] = "reject_notes";
$tdatarejected_job[".importFields"][] = "web_note";
$tdatarejected_job[".importFields"][] = "comments";
$tdatarejected_job[".importFields"][] = "jobstatus_id";
$tdatarejected_job[".importFields"][] = "downloader_id";
$tdatarejected_job[".importFields"][] = "download_date";
$tdatarejected_job[".importFields"][] = "distributor_id";
$tdatarejected_job[".importFields"][] = "distribute_date";
$tdatarejected_job[".importFields"][] = "uploader_id";
$tdatarejected_job[".importFields"][] = "upload_date";
$tdatarejected_job[".importFields"][] = "notifer_id";
$tdatarejected_job[".importFields"][] = "notify_date";
$tdatarejected_job[".importFields"][] = "reviewer_id";
$tdatarejected_job[".importFields"][] = "reject_date";
$tdatarejected_job[".importFields"][] = "reject_reason";
$tdatarejected_job[".importFields"][] = "delivery_date";
$tdatarejected_job[".importFields"][] = "pdf_id";
$tdatarejected_job[".importFields"][] = "pdf_name";
$tdatarejected_job[".importFields"][] = "delivery_duration";
$tdatarejected_job[".importFields"][] = "designer_list";
$tdatarejected_job[".importFields"][] = "qcs_list";

$tdatarejected_job[".printFields"] = array();
$tdatarejected_job[".printFields"][] = "pdf_name";
$tdatarejected_job[".printFields"][] = "pdf_id";
$tdatarejected_job[".printFields"][] = "delivery_date";
$tdatarejected_job[".printFields"][] = "delivery_duration";
$tdatarejected_job[".printFields"][] = "work_id";
$tdatarejected_job[".printFields"][] = "job_id";
$tdatarejected_job[".printFields"][] = "previous_job_id";
$tdatarejected_job[".printFields"][] = "total_images";
$tdatarejected_job[".printFields"][] = "reject_type";
$tdatarejected_job[".printFields"][] = "reject_notes";
$tdatarejected_job[".printFields"][] = "web_note";
$tdatarejected_job[".printFields"][] = "comments";
$tdatarejected_job[".printFields"][] = "jobstatus_id";
$tdatarejected_job[".printFields"][] = "downloader_id";
$tdatarejected_job[".printFields"][] = "download_date";
$tdatarejected_job[".printFields"][] = "distributor_id";
$tdatarejected_job[".printFields"][] = "distribute_date";
$tdatarejected_job[".printFields"][] = "uploader_id";
$tdatarejected_job[".printFields"][] = "upload_date";
$tdatarejected_job[".printFields"][] = "notifer_id";
$tdatarejected_job[".printFields"][] = "notify_date";
$tdatarejected_job[".printFields"][] = "reviewer_id";
$tdatarejected_job[".printFields"][] = "reject_date";
$tdatarejected_job[".printFields"][] = "reject_reason";

//	work_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_id";
	$fdata["GoodName"] = "work_id";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","work_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		
		
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

	

	
	$tdatarejected_job["work_id"] = $fdata;
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","job_id"); 
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

	

	
	$tdatarejected_job["job_id"] = $fdata;
//	previous_job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "previous_job_id";
	$fdata["GoodName"] = "previous_job_id";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","previous_job_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "job";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"web_note", 'lookupF'=>"web_note");
	$edata["autoCompleteFields"][] = array('masterF'=>"pdf_id", 'lookupF'=>"pdf_id");
	$edata["LCType"] = 1;
		
		
			
	$edata["LinkField"] = "job_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "job_id";
	
		
	$edata["LookupOrderBy"] = "job_id";
	
		
			
		
				
	
	
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatarejected_job["previous_job_id"] = $fdata;
//	total_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_images";
	$fdata["GoodName"] = "total_images";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","total_images"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_images"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_images";
	
		
		
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

	

	
	$tdatarejected_job["total_images"] = $fdata;
//	reject_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "reject_type";
	$fdata["GoodName"] = "reject_type";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","reject_type"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reject_type"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reject_type";
	
		
		
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

	

	
	$tdatarejected_job["reject_type"] = $fdata;
//	reject_notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "reject_notes";
	$fdata["GoodName"] = "reject_notes";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","reject_notes"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reject_notes"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reject_notes";
	
		
		
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

	

	
	$tdatarejected_job["reject_notes"] = $fdata;
//	web_note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "web_note";
	$fdata["GoodName"] = "web_note";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","web_note"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "web_note"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "web_note";
	
		
		
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

	

	
	$tdatarejected_job["web_note"] = $fdata;
//	comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "comments";
	$fdata["GoodName"] = "comments";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","comments"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatarejected_job["comments"] = $fdata;
//	jobstatus_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "jobstatus_id";
	$fdata["GoodName"] = "jobstatus_id";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","jobstatus_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jobstatus_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobstatus_id";
	
		
		
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
	
		
	$edata["LookupOrderBy"] = "job_status";
	
		
			
		
				
	
	
		
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

	

	
	$tdatarejected_job["jobstatus_id"] = $fdata;
//	downloader_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "downloader_id";
	$fdata["GoodName"] = "downloader_id";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","downloader_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatarejected_job["downloader_id"] = $fdata;
//	download_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "download_date";
	$fdata["GoodName"] = "download_date";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","download_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
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

	

	
	$tdatarejected_job["download_date"] = $fdata;
//	distributor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "distributor_id";
	$fdata["GoodName"] = "distributor_id";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","distributor_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatarejected_job["distributor_id"] = $fdata;
//	distribute_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "distribute_date";
	$fdata["GoodName"] = "distribute_date";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","distribute_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
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

	

	
	$tdatarejected_job["distribute_date"] = $fdata;
//	uploader_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "uploader_id";
	$fdata["GoodName"] = "uploader_id";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","uploader_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatarejected_job["uploader_id"] = $fdata;
//	upload_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "upload_date";
	$fdata["GoodName"] = "upload_date";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","upload_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
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

	

	
	$tdatarejected_job["upload_date"] = $fdata;
//	notifer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "notifer_id";
	$fdata["GoodName"] = "notifer_id";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","notifer_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "notifer_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notifer_id";
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatarejected_job["notifer_id"] = $fdata;
//	notify_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "notify_date";
	$fdata["GoodName"] = "notify_date";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","notify_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
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
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
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

	

	
	$tdatarejected_job["notify_date"] = $fdata;
//	reviewer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "reviewer_id";
	$fdata["GoodName"] = "reviewer_id";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","reviewer_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reviewer_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reviewer_id";
	
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatarejected_job["reviewer_id"] = $fdata;
//	reject_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "reject_date";
	$fdata["GoodName"] = "reject_date";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","reject_date"); 
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
	
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatarejected_job["reject_date"] = $fdata;
//	reject_reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "reject_reason";
	$fdata["GoodName"] = "reject_reason";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","reject_reason"); 
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
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 60;
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

	

	
	$tdatarejected_job["reject_reason"] = $fdata;
//	delivery_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "delivery_date";
	$fdata["GoodName"] = "delivery_date";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","delivery_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "delivery_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delivery_date";
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatarejected_job["delivery_date"] = $fdata;
//	pdf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "pdf_id";
	$fdata["GoodName"] = "pdf_id";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","pdf_id"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
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
		$edata["autoCompleteFields"][] = array('masterF'=>"pdf_name", 'lookupF'=>"pdf_name");
	$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "pdf_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "pdf_id";
	
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatarejected_job["pdf_id"] = $fdata;
//	pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "pdf_name";
	$fdata["GoodName"] = "pdf_name";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","pdf_name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatarejected_job["pdf_name"] = $fdata;
//	delivery_duration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "delivery_duration";
	$fdata["GoodName"] = "delivery_duration";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","delivery_duration"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "delivery_duration"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delivery_duration";
	
		
		
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "6";
	$edata["LookupValues"][] = "8";
	$edata["LookupValues"][] = "12";
	$edata["LookupValues"][] = "24";
	$edata["LookupValues"][] = "36";
	$edata["LookupValues"][] = "48";
	$edata["LookupValues"][] = "72";

		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatarejected_job["delivery_duration"] = $fdata;
//	designer_list
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "designer_list";
	$fdata["GoodName"] = "designer_list";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","designer_list"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer_list"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designer_list";
	
		
		
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

	

	
	$tdatarejected_job["designer_list"] = $fdata;
//	qcs_list
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "qcs_list";
	$fdata["GoodName"] = "qcs_list";
	$fdata["ownerTable"] = "rejected_job";
	$fdata["Label"] = GetFieldLabel("rejected_job","qcs_list"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qcs_list"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qcs_list";
	
		
		
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

	

	
	$tdatarejected_job["qcs_list"] = $fdata;

	
$tables_data["rejected_job"]=&$tdatarejected_job;
$field_labels["rejected_job"] = &$fieldLabelsrejected_job;
$fieldToolTips["rejected_job"] = &$fieldToolTipsrejected_job;
$page_titles["rejected_job"] = &$pageTitlesrejected_job;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["rejected_job"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["rejected_job"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_rejected_job()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "work_id,  	job_id,  	previous_job_id,  	total_images,  	reject_type,  	reject_notes,  	web_note,  	comments,  	jobstatus_id,  	downloader_id,  	download_date,  	distributor_id,  	distribute_date,  	uploader_id,  	upload_date,  	notifer_id,  	notify_date,  	reviewer_id,  	reject_date,  	reject_reason,  	delivery_date,  	pdf_id,  	pdf_name,  	delivery_duration,  	designer_list,  	qcs_list";
$proto0["m_strFrom"] = "FROM rejected_job";
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
	"m_strName" => "work_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto5["m_sql"] = "work_id";
$proto5["m_srcTableName"] = "rejected_job";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto7["m_sql"] = "job_id";
$proto7["m_srcTableName"] = "rejected_job";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "previous_job_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto9["m_sql"] = "previous_job_id";
$proto9["m_srcTableName"] = "rejected_job";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "total_images",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto11["m_sql"] = "total_images";
$proto11["m_srcTableName"] = "rejected_job";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "reject_type",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto13["m_sql"] = "reject_type";
$proto13["m_srcTableName"] = "rejected_job";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "reject_notes",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto15["m_sql"] = "reject_notes";
$proto15["m_srcTableName"] = "rejected_job";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "web_note",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto17["m_sql"] = "web_note";
$proto17["m_srcTableName"] = "rejected_job";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "comments",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto19["m_sql"] = "comments";
$proto19["m_srcTableName"] = "rejected_job";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "jobstatus_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto21["m_sql"] = "jobstatus_id";
$proto21["m_srcTableName"] = "rejected_job";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "downloader_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto23["m_sql"] = "downloader_id";
$proto23["m_srcTableName"] = "rejected_job";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "download_date",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto25["m_sql"] = "download_date";
$proto25["m_srcTableName"] = "rejected_job";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "distributor_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto27["m_sql"] = "distributor_id";
$proto27["m_srcTableName"] = "rejected_job";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "distribute_date",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto29["m_sql"] = "distribute_date";
$proto29["m_srcTableName"] = "rejected_job";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "uploader_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto31["m_sql"] = "uploader_id";
$proto31["m_srcTableName"] = "rejected_job";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "upload_date",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto33["m_sql"] = "upload_date";
$proto33["m_srcTableName"] = "rejected_job";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "notifer_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto35["m_sql"] = "notifer_id";
$proto35["m_srcTableName"] = "rejected_job";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "notify_date",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto37["m_sql"] = "notify_date";
$proto37["m_srcTableName"] = "rejected_job";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "reviewer_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto39["m_sql"] = "reviewer_id";
$proto39["m_srcTableName"] = "rejected_job";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "reject_date",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto41["m_sql"] = "reject_date";
$proto41["m_srcTableName"] = "rejected_job";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "reject_reason",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto43["m_sql"] = "reject_reason";
$proto43["m_srcTableName"] = "rejected_job";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "delivery_date",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto45["m_sql"] = "delivery_date";
$proto45["m_srcTableName"] = "rejected_job";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto47["m_sql"] = "pdf_id";
$proto47["m_srcTableName"] = "rejected_job";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto49["m_sql"] = "pdf_name";
$proto49["m_srcTableName"] = "rejected_job";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "delivery_duration",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto51["m_sql"] = "delivery_duration";
$proto51["m_srcTableName"] = "rejected_job";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "designer_list",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto53["m_sql"] = "designer_list";
$proto53["m_srcTableName"] = "rejected_job";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "qcs_list",
	"m_strTable" => "rejected_job",
	"m_srcTableName" => "rejected_job"
));

$proto55["m_sql"] = "qcs_list";
$proto55["m_srcTableName"] = "rejected_job";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto57=array();
$proto57["m_link"] = "SQLL_MAIN";
			$proto58=array();
$proto58["m_strName"] = "rejected_job";
$proto58["m_srcTableName"] = "rejected_job";
$proto58["m_columns"] = array();
$proto58["m_columns"][] = "work_id";
$proto58["m_columns"][] = "job_id";
$proto58["m_columns"][] = "previous_job_id";
$proto58["m_columns"][] = "total_images";
$proto58["m_columns"][] = "reject_type";
$proto58["m_columns"][] = "reject_notes";
$proto58["m_columns"][] = "web_note";
$proto58["m_columns"][] = "comments";
$proto58["m_columns"][] = "jobstatus_id";
$proto58["m_columns"][] = "downloader_id";
$proto58["m_columns"][] = "download_date";
$proto58["m_columns"][] = "distributor_id";
$proto58["m_columns"][] = "distribute_date";
$proto58["m_columns"][] = "uploader_id";
$proto58["m_columns"][] = "upload_date";
$proto58["m_columns"][] = "notifer_id";
$proto58["m_columns"][] = "notify_date";
$proto58["m_columns"][] = "reviewer_id";
$proto58["m_columns"][] = "reject_date";
$proto58["m_columns"][] = "reject_reason";
$proto58["m_columns"][] = "delivery_date";
$proto58["m_columns"][] = "pdf_id";
$proto58["m_columns"][] = "pdf_name";
$proto58["m_columns"][] = "delivery_duration";
$proto58["m_columns"][] = "designer_list";
$proto58["m_columns"][] = "qcs_list";
$obj = new SQLTable($proto58);

$proto57["m_table"] = $obj;
$proto57["m_sql"] = "rejected_job";
$proto57["m_alias"] = "";
$proto57["m_srcTableName"] = "rejected_job";
$proto59=array();
$proto59["m_sql"] = "";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "";
$proto59["m_havingmode"] = false;
$proto59["m_inBrackets"] = false;
$proto59["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto59);

$proto57["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto57);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="rejected_job";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_rejected_job = createSqlQuery_rejected_job();


	
																										
	
$tdatarejected_job[".sqlquery"] = $queryData_rejected_job;

include_once(getabspath("include/rejected_job_events.php"));
$tableEvents["rejected_job"] = new eventclass_rejected_job;
$tdatarejected_job[".hasEvents"] = true;

?>