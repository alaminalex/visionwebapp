<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafiles_menu_count = array();	
	$tdatafiles_menu_count[".truncateText"] = true;
	$tdatafiles_menu_count[".NumberOfChars"] = 80; 
	$tdatafiles_menu_count[".ShortName"] = "files_menu_count";
	$tdatafiles_menu_count[".OwnerID"] = "";
	$tdatafiles_menu_count[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsfiles_menu_count = array();
$fieldToolTipsfiles_menu_count = array();
$pageTitlesfiles_menu_count = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfiles_menu_count["English"] = array();
	$fieldToolTipsfiles_menu_count["English"] = array();
	$pageTitlesfiles_menu_count["English"] = array();
	$fieldLabelsfiles_menu_count["English"]["Need_to__Designer_Work_All_Files"] = "Designer";
	$fieldToolTipsfiles_menu_count["English"]["Need_to__Designer_Work_All_Files"] = "";
	$fieldLabelsfiles_menu_count["English"]["Need_to_Work_All_Files"] = "Need To Work";
	$fieldToolTipsfiles_menu_count["English"]["Need_to_Work_All_Files"] = "";
	$fieldLabelsfiles_menu_count["English"]["Need_to_QC_All_Files"] = "QC";
	$fieldToolTipsfiles_menu_count["English"]["Need_to_QC_All_Files"] = "";
	$fieldLabelsfiles_menu_count["English"]["Need_to__Designer_Work_14704_Files"] = "Designer";
	$fieldToolTipsfiles_menu_count["English"]["Need_to__Designer_Work_14704_Files"] = "";
	$fieldLabelsfiles_menu_count["English"]["Need_to_Work_14704_Files"] = "Need To Work";
	$fieldToolTipsfiles_menu_count["English"]["Need_to_Work_14704_Files"] = "";
	$fieldLabelsfiles_menu_count["English"]["Need_to_QC_14704_Files"] = "QC";
	$fieldToolTipsfiles_menu_count["English"]["Need_to_QC_14704_Files"] = "";
	$fieldLabelsfiles_menu_count["English"]["Need_to__Designer_Work_18442_Files"] = "Designer";
	$fieldToolTipsfiles_menu_count["English"]["Need_to__Designer_Work_18442_Files"] = "";
	$fieldLabelsfiles_menu_count["English"]["Need_to_Work_18442_Files"] = "Need To Work";
	$fieldToolTipsfiles_menu_count["English"]["Need_to_Work_18442_Files"] = "";
	$fieldLabelsfiles_menu_count["English"]["Need_to_QC_18442_Files"] = "QC";
	$fieldToolTipsfiles_menu_count["English"]["Need_to_QC_18442_Files"] = "";
	$fieldLabelsfiles_menu_count["English"]["Need_to_Work_Others_Files"] = "Need To Work";
	$fieldToolTipsfiles_menu_count["English"]["Need_to_Work_Others_Files"] = "";
	$fieldLabelsfiles_menu_count["English"]["Need_to_QC_Others_Files"] = "QC";
	$fieldToolTipsfiles_menu_count["English"]["Need_to_QC_Others_Files"] = "";
	$fieldLabelsfiles_menu_count["English"]["Need_to_Designer_Work_Others_Files"] = "Need To Designer Work Others Files";
	$fieldToolTipsfiles_menu_count["English"]["Need_to_Designer_Work_Others_Files"] = "";
	if (count($fieldToolTipsfiles_menu_count["English"]))
		$tdatafiles_menu_count[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfiles_menu_count[""] = array();
	$fieldToolTipsfiles_menu_count[""] = array();
	$pageTitlesfiles_menu_count[""] = array();
	$fieldLabelsfiles_menu_count[""]["Need_to__Designer_Work_All_Files"] = "Need To  Designer Work All Files";
	$fieldToolTipsfiles_menu_count[""]["Need_to__Designer_Work_All_Files"] = "";
	$fieldLabelsfiles_menu_count[""]["Need_to_Work_All_Files"] = "Need To Work All Files";
	$fieldToolTipsfiles_menu_count[""]["Need_to_Work_All_Files"] = "";
	$fieldLabelsfiles_menu_count[""]["Need_to_QC_All_Files"] = "Need To QC All Files";
	$fieldToolTipsfiles_menu_count[""]["Need_to_QC_All_Files"] = "";
	$fieldLabelsfiles_menu_count[""]["Need_to__Designer_Work_14704_Files"] = "Need To  Designer Work 14704 Files";
	$fieldToolTipsfiles_menu_count[""]["Need_to__Designer_Work_14704_Files"] = "";
	$fieldLabelsfiles_menu_count[""]["Need_to_Work_14704_Files"] = "Need To Work 14704 Files";
	$fieldToolTipsfiles_menu_count[""]["Need_to_Work_14704_Files"] = "";
	$fieldLabelsfiles_menu_count[""]["Need_to_QC_14704_Files"] = "Need To QC 14704 Files";
	$fieldToolTipsfiles_menu_count[""]["Need_to_QC_14704_Files"] = "";
	$fieldLabelsfiles_menu_count[""]["Need_to__Designer_Work_18442_Files"] = "Need To  Designer Work 18442 Files";
	$fieldToolTipsfiles_menu_count[""]["Need_to__Designer_Work_18442_Files"] = "";
	$fieldLabelsfiles_menu_count[""]["Need_to_Work_18442_Files"] = "Need To Work 18442 Files";
	$fieldToolTipsfiles_menu_count[""]["Need_to_Work_18442_Files"] = "";
	$fieldLabelsfiles_menu_count[""]["Need_to_QC_18442_Files"] = "Need To QC 18442 Files";
	$fieldToolTipsfiles_menu_count[""]["Need_to_QC_18442_Files"] = "";
	$fieldLabelsfiles_menu_count[""]["Need_to_Work_Others_Files"] = "Need To Work Others Files";
	$fieldToolTipsfiles_menu_count[""]["Need_to_Work_Others_Files"] = "";
	$fieldLabelsfiles_menu_count[""]["Need_to_QC_Others_Files"] = "Need To QC Others Files";
	$fieldToolTipsfiles_menu_count[""]["Need_to_QC_Others_Files"] = "";
	$fieldLabelsfiles_menu_count[""]["Need_to_Designer_Work_Others_Files"] = "Need To Designer Work Others Files";
	$fieldToolTipsfiles_menu_count[""]["Need_to_Designer_Work_Others_Files"] = "";
	if (count($fieldToolTipsfiles_menu_count[""]))
		$tdatafiles_menu_count[".isUseToolTips"] = true;
}
	
	
	$tdatafiles_menu_count[".NCSearch"] = true;



$tdatafiles_menu_count[".shortTableName"] = "files_menu_count";
$tdatafiles_menu_count[".nSecOptions"] = 0;
$tdatafiles_menu_count[".recsPerRowList"] = 1;
$tdatafiles_menu_count[".recsPerRowPrint"] = 1;
$tdatafiles_menu_count[".mainTableOwnerID"] = "";
$tdatafiles_menu_count[".moveNext"] = 1;
$tdatafiles_menu_count[".entityType"] = 2;

$tdatafiles_menu_count[".strOriginalTableName"] = "jobfile";




$tdatafiles_menu_count[".showAddInPopup"] = false;

$tdatafiles_menu_count[".showEditInPopup"] = false;

$tdatafiles_menu_count[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafiles_menu_count[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafiles_menu_count[".fieldsForRegister"] = array();

$tdatafiles_menu_count[".listAjax"] = false;

	$tdatafiles_menu_count[".audit"] = false;

	$tdatafiles_menu_count[".locking"] = false;


$tdatafiles_menu_count[".add"] = true;
$tdatafiles_menu_count[".afterAddAction"] = 1;
$tdatafiles_menu_count[".closePopupAfterAdd"] = 1;
$tdatafiles_menu_count[".afterAddActionDetTable"] = "";

$tdatafiles_menu_count[".list"] = true;

$tdatafiles_menu_count[".inlineAdd"] = true;


$tdatafiles_menu_count[".exportTo"] = true;

$tdatafiles_menu_count[".printFriendly"] = true;


$tdatafiles_menu_count[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafiles_menu_count[".searchSaving"] = false;
//

$tdatafiles_menu_count[".showSearchPanel"] = true;
		$tdatafiles_menu_count[".flexibleSearch"] = true;		

if (isMobile())
	$tdatafiles_menu_count[".isUseAjaxSuggest"] = false;
else 
	$tdatafiles_menu_count[".isUseAjaxSuggest"] = true;



																																																																																																																																															
$tdatafiles_menu_count[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafiles_menu_count[".isUseTimeForSearch"] = false;





$tdatafiles_menu_count[".allSearchFields"] = array();
$tdatafiles_menu_count[".filterFields"] = array();
$tdatafiles_menu_count[".requiredSearchFields"] = array();

$tdatafiles_menu_count[".allSearchFields"][] = "Need_to__Designer_Work_All_Files";
	$tdatafiles_menu_count[".allSearchFields"][] = "Need_to_Work_All_Files";
	$tdatafiles_menu_count[".allSearchFields"][] = "Need_to_QC_All_Files";
	$tdatafiles_menu_count[".allSearchFields"][] = "Need_to__Designer_Work_14704_Files";
	$tdatafiles_menu_count[".allSearchFields"][] = "Need_to_Work_14704_Files";
	$tdatafiles_menu_count[".allSearchFields"][] = "Need_to_QC_14704_Files";
	$tdatafiles_menu_count[".allSearchFields"][] = "Need_to__Designer_Work_18442_Files";
	$tdatafiles_menu_count[".allSearchFields"][] = "Need_to_Work_18442_Files";
	$tdatafiles_menu_count[".allSearchFields"][] = "Need_to_QC_18442_Files";
	$tdatafiles_menu_count[".allSearchFields"][] = "Need_to_Designer_Work_Others_Files";
	$tdatafiles_menu_count[".allSearchFields"][] = "Need_to_Work_Others_Files";
	$tdatafiles_menu_count[".allSearchFields"][] = "Need_to_QC_Others_Files";
	

$tdatafiles_menu_count[".googleLikeFields"] = array();
$tdatafiles_menu_count[".googleLikeFields"][] = "Need_to__Designer_Work_All_Files";
$tdatafiles_menu_count[".googleLikeFields"][] = "Need_to_Work_All_Files";
$tdatafiles_menu_count[".googleLikeFields"][] = "Need_to_QC_All_Files";
$tdatafiles_menu_count[".googleLikeFields"][] = "Need_to__Designer_Work_14704_Files";
$tdatafiles_menu_count[".googleLikeFields"][] = "Need_to_Work_14704_Files";
$tdatafiles_menu_count[".googleLikeFields"][] = "Need_to_QC_14704_Files";
$tdatafiles_menu_count[".googleLikeFields"][] = "Need_to__Designer_Work_18442_Files";
$tdatafiles_menu_count[".googleLikeFields"][] = "Need_to_Work_18442_Files";
$tdatafiles_menu_count[".googleLikeFields"][] = "Need_to_QC_18442_Files";
$tdatafiles_menu_count[".googleLikeFields"][] = "Need_to_Designer_Work_Others_Files";
$tdatafiles_menu_count[".googleLikeFields"][] = "Need_to_Work_Others_Files";
$tdatafiles_menu_count[".googleLikeFields"][] = "Need_to_QC_Others_Files";


$tdatafiles_menu_count[".advSearchFields"] = array();
$tdatafiles_menu_count[".advSearchFields"][] = "Need_to__Designer_Work_All_Files";
$tdatafiles_menu_count[".advSearchFields"][] = "Need_to_Work_All_Files";
$tdatafiles_menu_count[".advSearchFields"][] = "Need_to_QC_All_Files";
$tdatafiles_menu_count[".advSearchFields"][] = "Need_to__Designer_Work_14704_Files";
$tdatafiles_menu_count[".advSearchFields"][] = "Need_to_Work_14704_Files";
$tdatafiles_menu_count[".advSearchFields"][] = "Need_to_QC_14704_Files";
$tdatafiles_menu_count[".advSearchFields"][] = "Need_to__Designer_Work_18442_Files";
$tdatafiles_menu_count[".advSearchFields"][] = "Need_to_Work_18442_Files";
$tdatafiles_menu_count[".advSearchFields"][] = "Need_to_QC_18442_Files";
$tdatafiles_menu_count[".advSearchFields"][] = "Need_to_Designer_Work_Others_Files";
$tdatafiles_menu_count[".advSearchFields"][] = "Need_to_Work_Others_Files";
$tdatafiles_menu_count[".advSearchFields"][] = "Need_to_QC_Others_Files";

$tdatafiles_menu_count[".tableType"] = "report";

$tdatafiles_menu_count[".printerPageOrientation"] = 0;
$tdatafiles_menu_count[".nPrinterPageScale"] = 100;

$tdatafiles_menu_count[".nPrinterSplitRecords"] = 40;

$tdatafiles_menu_count[".nPrinterPDFSplitRecords"] = 40;



$tdatafiles_menu_count[".geocodingEnabled"] = false;

//report settings
$tdatafiles_menu_count[".printReportLayout"] = 6;	

$tdatafiles_menu_count[".reportPrintPartitionType"] = 1;	
$tdatafiles_menu_count[".reportPrintGroupsPerPage"] = 40;	
	$tdatafiles_menu_count[".reportPrintPDFGroupsPerPage"] = 40;
$tdatafiles_menu_count[".lowGroup"] = 0;



$tdatafiles_menu_count[".pageSize"] = 20;	






$tdatafiles_menu_count[".repShowDet"] = true;

$tdatafiles_menu_count[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafiles_menu_count[".strOrderBy"] = $tstrOrderBy;

$tdatafiles_menu_count[".orderindexes"] = array();

$tdatafiles_menu_count[".sqlHead"] = "SELECT (select  COUNT(*) AS c1  FROM jobfile  WHERE jobfile.jobfile_status_id = \"3\"  ) AS Need_to__Designer_Work_All_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE jobfile.jobfile_status_id != \"7\"  ) AS Need_to_Work_All_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE jobfile.jobfile_status_id = \"14\"  ) AS Need_to_QC_All_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id = \"3\") AND (jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880)  ) AS Need_to__Designer_Work_14704_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id != \"7\") AND (jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880)  ) AS Need_to_Work_14704_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id = \"14\") AND (jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880)  ) AS Need_to_QC_14704_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE jobfile.jobfile_status_id = \"3\" AND (jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031)  ) AS Need_to__Designer_Work_18442_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id != \"7\") AND (jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031)  ) AS Need_to_Work_18442_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id = \"14\") AND (jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031)  ) AS Need_to_QC_18442_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id = \"3\") AND (jobfile.project_id !=5002 AND jobfile.project_id !=5027 AND jobfile.project_id !=5028 AND jobfile.project_id !=5029 AND jobfile.project_id !=5030 AND jobfile.project_id !=5370 AND jobfile.project_id !=5371 AND jobfile.project_id !=5031 AND jobfile.project_id !=5001 AND jobfile.project_id !=5879 AND jobfile.project_id !=5880 = True)  ) AS Need_to_Designer_Work_Others_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id != \"7\") AND ((project_id !=5002 AND project_id !=5027 AND project_id !=5028 AND project_id !=5029 AND project_id !=5030 AND project_id !=5370 AND project_id !=5371 AND project_id !=5031 AND project_id !=5001 AND project_id !=5879 AND project_id !=5880) = True)  ) AS Need_to_Work_Others_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id = \"14\") AND (jobfile.project_id !=5002 AND jobfile.project_id !=5027 AND jobfile.project_id !=5028 AND jobfile.project_id !=5029 AND jobfile.project_id !=5030 AND jobfile.project_id !=5370 AND jobfile.project_id !=5371 AND jobfile.project_id !=5031 AND jobfile.project_id !=5001 AND jobfile.project_id !=5879 AND jobfile.project_id !=5880 = True)  ) AS Need_to_QC_Others_Files";
$tdatafiles_menu_count[".sqlFrom"] = "";
$tdatafiles_menu_count[".sqlWhereExpr"] = "";
$tdatafiles_menu_count[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafiles_menu_count[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafiles_menu_count[".arrGroupsPerPage"] = $arrGPP;

$tdatafiles_menu_count[".highlightSearchResults"] = true;

$tableKeysfiles_menu_count = array();
$tdatafiles_menu_count[".Keys"] = $tableKeysfiles_menu_count;

$tdatafiles_menu_count[".listFields"] = array();
$tdatafiles_menu_count[".listFields"][] = "Need_to__Designer_Work_All_Files";
$tdatafiles_menu_count[".listFields"][] = "Need_to_Work_All_Files";
$tdatafiles_menu_count[".listFields"][] = "Need_to_QC_All_Files";
$tdatafiles_menu_count[".listFields"][] = "Need_to__Designer_Work_14704_Files";
$tdatafiles_menu_count[".listFields"][] = "Need_to_Work_14704_Files";
$tdatafiles_menu_count[".listFields"][] = "Need_to_QC_14704_Files";
$tdatafiles_menu_count[".listFields"][] = "Need_to__Designer_Work_18442_Files";
$tdatafiles_menu_count[".listFields"][] = "Need_to_Work_18442_Files";
$tdatafiles_menu_count[".listFields"][] = "Need_to_QC_18442_Files";
$tdatafiles_menu_count[".listFields"][] = "Need_to_Designer_Work_Others_Files";
$tdatafiles_menu_count[".listFields"][] = "Need_to_Work_Others_Files";
$tdatafiles_menu_count[".listFields"][] = "Need_to_QC_Others_Files";

$tdatafiles_menu_count[".hideMobileList"] = array();


$tdatafiles_menu_count[".viewFields"] = array();
$tdatafiles_menu_count[".viewFields"][] = "Need_to__Designer_Work_All_Files";
$tdatafiles_menu_count[".viewFields"][] = "Need_to_Work_All_Files";
$tdatafiles_menu_count[".viewFields"][] = "Need_to_QC_All_Files";
$tdatafiles_menu_count[".viewFields"][] = "Need_to__Designer_Work_14704_Files";
$tdatafiles_menu_count[".viewFields"][] = "Need_to_Work_14704_Files";
$tdatafiles_menu_count[".viewFields"][] = "Need_to_QC_14704_Files";
$tdatafiles_menu_count[".viewFields"][] = "Need_to__Designer_Work_18442_Files";
$tdatafiles_menu_count[".viewFields"][] = "Need_to_Work_18442_Files";
$tdatafiles_menu_count[".viewFields"][] = "Need_to_QC_18442_Files";
$tdatafiles_menu_count[".viewFields"][] = "Need_to_Designer_Work_Others_Files";
$tdatafiles_menu_count[".viewFields"][] = "Need_to_Work_Others_Files";
$tdatafiles_menu_count[".viewFields"][] = "Need_to_QC_Others_Files";

$tdatafiles_menu_count[".addFields"] = array();

$tdatafiles_menu_count[".masterListFields"] = array();
$tdatafiles_menu_count[".masterListFields"][] = "Need_to__Designer_Work_All_Files";
$tdatafiles_menu_count[".masterListFields"][] = "Need_to_Work_All_Files";
$tdatafiles_menu_count[".masterListFields"][] = "Need_to_QC_All_Files";
$tdatafiles_menu_count[".masterListFields"][] = "Need_to__Designer_Work_14704_Files";
$tdatafiles_menu_count[".masterListFields"][] = "Need_to_Work_14704_Files";
$tdatafiles_menu_count[".masterListFields"][] = "Need_to_QC_14704_Files";
$tdatafiles_menu_count[".masterListFields"][] = "Need_to__Designer_Work_18442_Files";
$tdatafiles_menu_count[".masterListFields"][] = "Need_to_Work_18442_Files";
$tdatafiles_menu_count[".masterListFields"][] = "Need_to_QC_18442_Files";
$tdatafiles_menu_count[".masterListFields"][] = "Need_to_Designer_Work_Others_Files";
$tdatafiles_menu_count[".masterListFields"][] = "Need_to_Work_Others_Files";
$tdatafiles_menu_count[".masterListFields"][] = "Need_to_QC_Others_Files";

$tdatafiles_menu_count[".inlineAddFields"] = array();

$tdatafiles_menu_count[".editFields"] = array();

$tdatafiles_menu_count[".inlineEditFields"] = array();

$tdatafiles_menu_count[".exportFields"] = array();
$tdatafiles_menu_count[".exportFields"][] = "Need_to__Designer_Work_All_Files";
$tdatafiles_menu_count[".exportFields"][] = "Need_to_Work_All_Files";
$tdatafiles_menu_count[".exportFields"][] = "Need_to_QC_All_Files";
$tdatafiles_menu_count[".exportFields"][] = "Need_to__Designer_Work_14704_Files";
$tdatafiles_menu_count[".exportFields"][] = "Need_to_Work_14704_Files";
$tdatafiles_menu_count[".exportFields"][] = "Need_to_QC_14704_Files";
$tdatafiles_menu_count[".exportFields"][] = "Need_to__Designer_Work_18442_Files";
$tdatafiles_menu_count[".exportFields"][] = "Need_to_Work_18442_Files";
$tdatafiles_menu_count[".exportFields"][] = "Need_to_QC_18442_Files";
$tdatafiles_menu_count[".exportFields"][] = "Need_to_Designer_Work_Others_Files";
$tdatafiles_menu_count[".exportFields"][] = "Need_to_Work_Others_Files";
$tdatafiles_menu_count[".exportFields"][] = "Need_to_QC_Others_Files";

$tdatafiles_menu_count[".importFields"] = array();
$tdatafiles_menu_count[".importFields"][] = "Need_to__Designer_Work_All_Files";
$tdatafiles_menu_count[".importFields"][] = "Need_to_Work_All_Files";
$tdatafiles_menu_count[".importFields"][] = "Need_to_QC_All_Files";
$tdatafiles_menu_count[".importFields"][] = "Need_to__Designer_Work_14704_Files";
$tdatafiles_menu_count[".importFields"][] = "Need_to_Work_14704_Files";
$tdatafiles_menu_count[".importFields"][] = "Need_to_QC_14704_Files";
$tdatafiles_menu_count[".importFields"][] = "Need_to__Designer_Work_18442_Files";
$tdatafiles_menu_count[".importFields"][] = "Need_to_Work_18442_Files";
$tdatafiles_menu_count[".importFields"][] = "Need_to_QC_18442_Files";
$tdatafiles_menu_count[".importFields"][] = "Need_to_Designer_Work_Others_Files";
$tdatafiles_menu_count[".importFields"][] = "Need_to_Work_Others_Files";
$tdatafiles_menu_count[".importFields"][] = "Need_to_QC_Others_Files";

$tdatafiles_menu_count[".printFields"] = array();
$tdatafiles_menu_count[".printFields"][] = "Need_to__Designer_Work_All_Files";
$tdatafiles_menu_count[".printFields"][] = "Need_to_Work_All_Files";
$tdatafiles_menu_count[".printFields"][] = "Need_to_QC_All_Files";
$tdatafiles_menu_count[".printFields"][] = "Need_to__Designer_Work_14704_Files";
$tdatafiles_menu_count[".printFields"][] = "Need_to_Work_14704_Files";
$tdatafiles_menu_count[".printFields"][] = "Need_to_QC_14704_Files";
$tdatafiles_menu_count[".printFields"][] = "Need_to__Designer_Work_18442_Files";
$tdatafiles_menu_count[".printFields"][] = "Need_to_Work_18442_Files";
$tdatafiles_menu_count[".printFields"][] = "Need_to_QC_18442_Files";
$tdatafiles_menu_count[".printFields"][] = "Need_to_Designer_Work_Others_Files";
$tdatafiles_menu_count[".printFields"][] = "Need_to_Work_Others_Files";
$tdatafiles_menu_count[".printFields"][] = "Need_to_QC_Others_Files";

//	Need_to__Designer_Work_All_Files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Need_to__Designer_Work_All_Files";
	$fdata["GoodName"] = "Need_to__Designer_Work_All_Files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("files_menu_count","Need_to__Designer_Work_All_Files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Need_to__Designer_Work_All_Files"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE jobfile.jobfile_status_id = \"3\"  )";
	
		
		
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

	

	
	$tdatafiles_menu_count["Need_to__Designer_Work_All_Files"] = $fdata;
//	Need_to_Work_All_Files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Need_to_Work_All_Files";
	$fdata["GoodName"] = "Need_to_Work_All_Files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("files_menu_count","Need_to_Work_All_Files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Need_to_Work_All_Files"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE jobfile.jobfile_status_id != \"7\"  )";
	
		
		
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

	

	
	$tdatafiles_menu_count["Need_to_Work_All_Files"] = $fdata;
//	Need_to_QC_All_Files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Need_to_QC_All_Files";
	$fdata["GoodName"] = "Need_to_QC_All_Files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("files_menu_count","Need_to_QC_All_Files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Need_to_QC_All_Files"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE jobfile.jobfile_status_id = \"14\"  )";
	
		
		
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

	

	
	$tdatafiles_menu_count["Need_to_QC_All_Files"] = $fdata;
//	Need_to__Designer_Work_14704_Files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Need_to__Designer_Work_14704_Files";
	$fdata["GoodName"] = "Need_to__Designer_Work_14704_Files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("files_menu_count","Need_to__Designer_Work_14704_Files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Need_to__Designer_Work_14704_Files"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id = \"3\") AND (jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880)  )";
	
		
		
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

	

	
	$tdatafiles_menu_count["Need_to__Designer_Work_14704_Files"] = $fdata;
//	Need_to_Work_14704_Files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Need_to_Work_14704_Files";
	$fdata["GoodName"] = "Need_to_Work_14704_Files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("files_menu_count","Need_to_Work_14704_Files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Need_to_Work_14704_Files"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id != \"7\") AND (jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880)  )";
	
		
		
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

	

	
	$tdatafiles_menu_count["Need_to_Work_14704_Files"] = $fdata;
//	Need_to_QC_14704_Files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Need_to_QC_14704_Files";
	$fdata["GoodName"] = "Need_to_QC_14704_Files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("files_menu_count","Need_to_QC_14704_Files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Need_to_QC_14704_Files"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id = \"14\") AND (jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880)  )";
	
		
		
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

	

	
	$tdatafiles_menu_count["Need_to_QC_14704_Files"] = $fdata;
//	Need_to__Designer_Work_18442_Files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Need_to__Designer_Work_18442_Files";
	$fdata["GoodName"] = "Need_to__Designer_Work_18442_Files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("files_menu_count","Need_to__Designer_Work_18442_Files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Need_to__Designer_Work_18442_Files"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE jobfile.jobfile_status_id = \"3\" AND (jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031)  )";
	
		
		
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

	

	
	$tdatafiles_menu_count["Need_to__Designer_Work_18442_Files"] = $fdata;
//	Need_to_Work_18442_Files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Need_to_Work_18442_Files";
	$fdata["GoodName"] = "Need_to_Work_18442_Files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("files_menu_count","Need_to_Work_18442_Files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Need_to_Work_18442_Files"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id != \"7\") AND (jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031)  )";
	
		
		
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

	

	
	$tdatafiles_menu_count["Need_to_Work_18442_Files"] = $fdata;
//	Need_to_QC_18442_Files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Need_to_QC_18442_Files";
	$fdata["GoodName"] = "Need_to_QC_18442_Files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("files_menu_count","Need_to_QC_18442_Files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Need_to_QC_18442_Files"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id = \"14\") AND (jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031)  )";
	
		
		
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

	

	
	$tdatafiles_menu_count["Need_to_QC_18442_Files"] = $fdata;
//	Need_to_Designer_Work_Others_Files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Need_to_Designer_Work_Others_Files";
	$fdata["GoodName"] = "Need_to_Designer_Work_Others_Files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("files_menu_count","Need_to_Designer_Work_Others_Files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Need_to_Designer_Work_Others_Files"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id = \"3\") AND (jobfile.project_id !=5002 AND jobfile.project_id !=5027 AND jobfile.project_id !=5028 AND jobfile.project_id !=5029 AND jobfile.project_id !=5030 AND jobfile.project_id !=5370 AND jobfile.project_id !=5371 AND jobfile.project_id !=5031 AND jobfile.project_id !=5001 AND jobfile.project_id !=5879 AND jobfile.project_id !=5880 = True)  )";
	
		
		
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

	

	
	$tdatafiles_menu_count["Need_to_Designer_Work_Others_Files"] = $fdata;
//	Need_to_Work_Others_Files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Need_to_Work_Others_Files";
	$fdata["GoodName"] = "Need_to_Work_Others_Files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("files_menu_count","Need_to_Work_Others_Files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Need_to_Work_Others_Files"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id != \"7\") AND ((project_id !=5002 AND project_id !=5027 AND project_id !=5028 AND project_id !=5029 AND project_id !=5030 AND project_id !=5370 AND project_id !=5371 AND project_id !=5031 AND project_id !=5001 AND project_id !=5879 AND project_id !=5880) = True)  )";
	
		
		
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

	

	
	$tdatafiles_menu_count["Need_to_Work_Others_Files"] = $fdata;
//	Need_to_QC_Others_Files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Need_to_QC_Others_Files";
	$fdata["GoodName"] = "Need_to_QC_Others_Files";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("files_menu_count","Need_to_QC_Others_Files"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Need_to_QC_Others_Files"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id = \"14\") AND (jobfile.project_id !=5002 AND jobfile.project_id !=5027 AND jobfile.project_id !=5028 AND jobfile.project_id !=5029 AND jobfile.project_id !=5030 AND jobfile.project_id !=5370 AND jobfile.project_id !=5371 AND jobfile.project_id !=5031 AND jobfile.project_id !=5001 AND jobfile.project_id !=5879 AND jobfile.project_id !=5880 = True)  )";
	
		
		
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

	

	
	$tdatafiles_menu_count["Need_to_QC_Others_Files"] = $fdata;

	
$tables_data["files_menu_count"]=&$tdatafiles_menu_count;
$field_labels["files_menu_count"] = &$fieldLabelsfiles_menu_count;
$fieldToolTips["files_menu_count"] = &$fieldToolTipsfiles_menu_count;
$page_titles["files_menu_count"] = &$pageTitlesfiles_menu_count;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["files_menu_count"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["files_menu_count"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_files_menu_count()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE jobfile.jobfile_status_id = \"3\"  ) AS Need_to__Designer_Work_All_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE jobfile.jobfile_status_id != \"7\"  ) AS Need_to_Work_All_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE jobfile.jobfile_status_id = \"14\"  ) AS Need_to_QC_All_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id = \"3\") AND (jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880)  ) AS Need_to__Designer_Work_14704_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id != \"7\") AND (jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880)  ) AS Need_to_Work_14704_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id = \"14\") AND (jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880)  ) AS Need_to_QC_14704_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE jobfile.jobfile_status_id = \"3\" AND (jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031)  ) AS Need_to__Designer_Work_18442_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id != \"7\") AND (jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031)  ) AS Need_to_Work_18442_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id = \"14\") AND (jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031)  ) AS Need_to_QC_18442_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id = \"3\") AND (jobfile.project_id !=5002 AND jobfile.project_id !=5027 AND jobfile.project_id !=5028 AND jobfile.project_id !=5029 AND jobfile.project_id !=5030 AND jobfile.project_id !=5370 AND jobfile.project_id !=5371 AND jobfile.project_id !=5031 AND jobfile.project_id !=5001 AND jobfile.project_id !=5879 AND jobfile.project_id !=5880 = True)  ) AS Need_to_Designer_Work_Others_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id != \"7\") AND ((project_id !=5002 AND project_id !=5027 AND project_id !=5028 AND project_id !=5029 AND project_id !=5030 AND project_id !=5370 AND project_id !=5371 AND project_id !=5031 AND project_id !=5001 AND project_id !=5879 AND project_id !=5880) = True)  ) AS Need_to_Work_Others_Files,  (select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id = \"14\") AND (jobfile.project_id !=5002 AND jobfile.project_id !=5027 AND jobfile.project_id !=5028 AND jobfile.project_id !=5029 AND jobfile.project_id !=5030 AND jobfile.project_id !=5370 AND jobfile.project_id !=5371 AND jobfile.project_id !=5031 AND jobfile.project_id !=5001 AND jobfile.project_id !=5879 AND jobfile.project_id !=5880 = True)  ) AS Need_to_QC_Others_Files";
$proto0["m_strFrom"] = "";
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
			$proto6=array();
$proto6["m_strHead"] = "select";
$proto6["m_strFieldList"] = "COUNT(*) AS c1";
$proto6["m_strFrom"] = "FROM jobfile";
$proto6["m_strWhere"] = "jobfile.jobfile_status_id = \"3\"";
$proto6["m_strOrderBy"] = "";
$proto6["m_strTail"] = "";
			$proto6["cipherer"] = null;
$proto7=array();
$proto7["m_sql"] = "jobfile.jobfile_status_id = \"3\"";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "= \"3\"";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

$proto6["m_where"] = $obj;
$proto9=array();
$proto9["m_sql"] = "";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

$proto6["m_having"] = $obj;
$proto6["m_fieldlist"] = array();
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_COUNT";
$proto12["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto12);

$proto11["m_sql"] = "COUNT(*)";
$proto11["m_srcTableName"] = "files_menu_count";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "c1";
$obj = new SQLFieldListItem($proto11);

$proto6["m_fieldlist"][]=$obj;
$proto6["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "jobfile";
$proto15["m_srcTableName"] = "files_menu_count";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "jobfile_id";
$proto15["m_columns"][] = "file_url";
$proto15["m_columns"][] = "client_id";
$proto15["m_columns"][] = "work_id";
$proto15["m_columns"][] = "job_id";
$proto15["m_columns"][] = "project_id";
$proto15["m_columns"][] = "folder_name";
$proto15["m_columns"][] = "filename";
$proto15["m_columns"][] = "jobfile_type";
$proto15["m_columns"][] = "jobfile_note";
$proto15["m_columns"][] = "jobfile_status_id";
$proto15["m_columns"][] = "downloader_id";
$proto15["m_columns"][] = "distributor_id";
$proto15["m_columns"][] = "designer_id";
$proto15["m_columns"][] = "qc_id";
$proto15["m_columns"][] = "uploader_id";
$proto15["m_columns"][] = "notifier_id";
$proto15["m_columns"][] = "rejector_id";
$proto15["m_columns"][] = "download_date";
$proto15["m_columns"][] = "distribute_date";
$proto15["m_columns"][] = "start_date";
$proto15["m_columns"][] = "end_date";
$proto15["m_columns"][] = "designer_time";
$proto15["m_columns"][] = "qcstart_date";
$proto15["m_columns"][] = "qcend_date";
$proto15["m_columns"][] = "qc_time";
$proto15["m_columns"][] = "upload_date";
$proto15["m_columns"][] = "notify_date";
$proto15["m_columns"][] = "reject_date";
$proto15["m_columns"][] = "reject_reason";
$proto15["m_columns"][] = "designer2_id";
$proto15["m_columns"][] = "start2_date";
$proto15["m_columns"][] = "end2_date";
$proto15["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "jobfile";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "files_menu_count";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto6["m_fromlist"][]=$obj;
$proto6["m_groupby"] = array();
$proto6["m_orderby"] = array();
$proto6["m_srcTableName"]="files_menu_count";		
$obj = new SQLQuery($proto6);

$proto5["m_sql"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE jobfile.jobfile_status_id = \"3\"  )";
$proto5["m_srcTableName"] = "files_menu_count";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "Need_to__Designer_Work_All_Files";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_strHead"] = "select";
$proto19["m_strFieldList"] = "COUNT(*) AS c1";
$proto19["m_strFrom"] = "FROM jobfile";
$proto19["m_strWhere"] = "jobfile.jobfile_status_id != \"7\"";
$proto19["m_strOrderBy"] = "";
$proto19["m_strTail"] = "";
			$proto19["cipherer"] = null;
$proto20=array();
$proto20["m_sql"] = "jobfile.jobfile_status_id != \"7\"";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "!= \"7\"";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto19["m_where"] = $obj;
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto19["m_having"] = $obj;
$proto19["m_fieldlist"] = array();
						$proto24=array();
			$proto25=array();
$proto25["m_functiontype"] = "SQLF_COUNT";
$proto25["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto25["m_arguments"][]=$obj;
$proto25["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto25);

$proto24["m_sql"] = "COUNT(*)";
$proto24["m_srcTableName"] = "files_menu_count";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "c1";
$obj = new SQLFieldListItem($proto24);

$proto19["m_fieldlist"][]=$obj;
$proto19["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "jobfile";
$proto28["m_srcTableName"] = "files_menu_count";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "jobfile_id";
$proto28["m_columns"][] = "file_url";
$proto28["m_columns"][] = "client_id";
$proto28["m_columns"][] = "work_id";
$proto28["m_columns"][] = "job_id";
$proto28["m_columns"][] = "project_id";
$proto28["m_columns"][] = "folder_name";
$proto28["m_columns"][] = "filename";
$proto28["m_columns"][] = "jobfile_type";
$proto28["m_columns"][] = "jobfile_note";
$proto28["m_columns"][] = "jobfile_status_id";
$proto28["m_columns"][] = "downloader_id";
$proto28["m_columns"][] = "distributor_id";
$proto28["m_columns"][] = "designer_id";
$proto28["m_columns"][] = "qc_id";
$proto28["m_columns"][] = "uploader_id";
$proto28["m_columns"][] = "notifier_id";
$proto28["m_columns"][] = "rejector_id";
$proto28["m_columns"][] = "download_date";
$proto28["m_columns"][] = "distribute_date";
$proto28["m_columns"][] = "start_date";
$proto28["m_columns"][] = "end_date";
$proto28["m_columns"][] = "designer_time";
$proto28["m_columns"][] = "qcstart_date";
$proto28["m_columns"][] = "qcend_date";
$proto28["m_columns"][] = "qc_time";
$proto28["m_columns"][] = "upload_date";
$proto28["m_columns"][] = "notify_date";
$proto28["m_columns"][] = "reject_date";
$proto28["m_columns"][] = "reject_reason";
$proto28["m_columns"][] = "designer2_id";
$proto28["m_columns"][] = "start2_date";
$proto28["m_columns"][] = "end2_date";
$proto28["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "jobfile";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "files_menu_count";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto19["m_fromlist"][]=$obj;
$proto19["m_groupby"] = array();
$proto19["m_orderby"] = array();
$proto19["m_srcTableName"]="files_menu_count";		
$obj = new SQLQuery($proto19);

$proto18["m_sql"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE jobfile.jobfile_status_id != \"7\"  )";
$proto18["m_srcTableName"] = "files_menu_count";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "Need_to_Work_All_Files";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$proto32=array();
$proto32["m_strHead"] = "select";
$proto32["m_strFieldList"] = "COUNT(*) AS c1";
$proto32["m_strFrom"] = "FROM jobfile";
$proto32["m_strWhere"] = "jobfile.jobfile_status_id = \"14\"";
$proto32["m_strOrderBy"] = "";
$proto32["m_strTail"] = "";
			$proto32["cipherer"] = null;
$proto33=array();
$proto33["m_sql"] = "jobfile.jobfile_status_id = \"14\"";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "= \"14\"";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto32["m_where"] = $obj;
$proto35=array();
$proto35["m_sql"] = "";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto32["m_having"] = $obj;
$proto32["m_fieldlist"] = array();
						$proto37=array();
			$proto38=array();
$proto38["m_functiontype"] = "SQLF_COUNT";
$proto38["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto38["m_arguments"][]=$obj;
$proto38["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto38);

$proto37["m_sql"] = "COUNT(*)";
$proto37["m_srcTableName"] = "files_menu_count";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "c1";
$obj = new SQLFieldListItem($proto37);

$proto32["m_fieldlist"][]=$obj;
$proto32["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "jobfile";
$proto41["m_srcTableName"] = "files_menu_count";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "jobfile_id";
$proto41["m_columns"][] = "file_url";
$proto41["m_columns"][] = "client_id";
$proto41["m_columns"][] = "work_id";
$proto41["m_columns"][] = "job_id";
$proto41["m_columns"][] = "project_id";
$proto41["m_columns"][] = "folder_name";
$proto41["m_columns"][] = "filename";
$proto41["m_columns"][] = "jobfile_type";
$proto41["m_columns"][] = "jobfile_note";
$proto41["m_columns"][] = "jobfile_status_id";
$proto41["m_columns"][] = "downloader_id";
$proto41["m_columns"][] = "distributor_id";
$proto41["m_columns"][] = "designer_id";
$proto41["m_columns"][] = "qc_id";
$proto41["m_columns"][] = "uploader_id";
$proto41["m_columns"][] = "notifier_id";
$proto41["m_columns"][] = "rejector_id";
$proto41["m_columns"][] = "download_date";
$proto41["m_columns"][] = "distribute_date";
$proto41["m_columns"][] = "start_date";
$proto41["m_columns"][] = "end_date";
$proto41["m_columns"][] = "designer_time";
$proto41["m_columns"][] = "qcstart_date";
$proto41["m_columns"][] = "qcend_date";
$proto41["m_columns"][] = "qc_time";
$proto41["m_columns"][] = "upload_date";
$proto41["m_columns"][] = "notify_date";
$proto41["m_columns"][] = "reject_date";
$proto41["m_columns"][] = "reject_reason";
$proto41["m_columns"][] = "designer2_id";
$proto41["m_columns"][] = "start2_date";
$proto41["m_columns"][] = "end2_date";
$proto41["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "jobfile";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "files_menu_count";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto32["m_fromlist"][]=$obj;
$proto32["m_groupby"] = array();
$proto32["m_orderby"] = array();
$proto32["m_srcTableName"]="files_menu_count";		
$obj = new SQLQuery($proto32);

$proto31["m_sql"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE jobfile.jobfile_status_id = \"14\"  )";
$proto31["m_srcTableName"] = "files_menu_count";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "Need_to_QC_All_Files";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$proto45=array();
$proto45["m_strHead"] = "select";
$proto45["m_strFieldList"] = "COUNT(*) AS c1";
$proto45["m_strFrom"] = "FROM jobfile";
$proto45["m_strWhere"] = "(jobfile.jobfile_status_id = \"3\") AND (jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880)";
$proto45["m_strOrderBy"] = "";
$proto45["m_strTail"] = "";
			$proto45["cipherer"] = null;
$proto46=array();
$proto46["m_sql"] = "(jobfile.jobfile_status_id = \"3\") AND (jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880)";
$proto46["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.jobfile_status_id = \"3\") AND (jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880)"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
						$proto48=array();
$proto48["m_sql"] = "jobfile.jobfile_status_id = \"3\"";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "= \"3\"";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = true;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

			$proto46["m_contained"][]=$obj;
						$proto50=array();
$proto50["m_sql"] = "jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880";
$proto50["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880"
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
						$proto52=array();
$proto52["m_sql"] = "jobfile.project_id =5001";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "=5001";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

			$proto50["m_contained"][]=$obj;
						$proto54=array();
$proto54["m_sql"] = "jobfile.project_id =5879";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "=5879";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

			$proto50["m_contained"][]=$obj;
						$proto56=array();
$proto56["m_sql"] = "jobfile.project_id =5880";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "=5880";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

			$proto50["m_contained"][]=$obj;
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = true;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

			$proto46["m_contained"][]=$obj;
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto45["m_where"] = $obj;
$proto58=array();
$proto58["m_sql"] = "";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto45["m_having"] = $obj;
$proto45["m_fieldlist"] = array();
						$proto60=array();
			$proto61=array();
$proto61["m_functiontype"] = "SQLF_COUNT";
$proto61["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto61["m_arguments"][]=$obj;
$proto61["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto61);

$proto60["m_sql"] = "COUNT(*)";
$proto60["m_srcTableName"] = "files_menu_count";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "c1";
$obj = new SQLFieldListItem($proto60);

$proto45["m_fieldlist"][]=$obj;
$proto45["m_fromlist"] = array();
												$proto63=array();
$proto63["m_link"] = "SQLL_MAIN";
			$proto64=array();
$proto64["m_strName"] = "jobfile";
$proto64["m_srcTableName"] = "files_menu_count";
$proto64["m_columns"] = array();
$proto64["m_columns"][] = "jobfile_id";
$proto64["m_columns"][] = "file_url";
$proto64["m_columns"][] = "client_id";
$proto64["m_columns"][] = "work_id";
$proto64["m_columns"][] = "job_id";
$proto64["m_columns"][] = "project_id";
$proto64["m_columns"][] = "folder_name";
$proto64["m_columns"][] = "filename";
$proto64["m_columns"][] = "jobfile_type";
$proto64["m_columns"][] = "jobfile_note";
$proto64["m_columns"][] = "jobfile_status_id";
$proto64["m_columns"][] = "downloader_id";
$proto64["m_columns"][] = "distributor_id";
$proto64["m_columns"][] = "designer_id";
$proto64["m_columns"][] = "qc_id";
$proto64["m_columns"][] = "uploader_id";
$proto64["m_columns"][] = "notifier_id";
$proto64["m_columns"][] = "rejector_id";
$proto64["m_columns"][] = "download_date";
$proto64["m_columns"][] = "distribute_date";
$proto64["m_columns"][] = "start_date";
$proto64["m_columns"][] = "end_date";
$proto64["m_columns"][] = "designer_time";
$proto64["m_columns"][] = "qcstart_date";
$proto64["m_columns"][] = "qcend_date";
$proto64["m_columns"][] = "qc_time";
$proto64["m_columns"][] = "upload_date";
$proto64["m_columns"][] = "notify_date";
$proto64["m_columns"][] = "reject_date";
$proto64["m_columns"][] = "reject_reason";
$proto64["m_columns"][] = "designer2_id";
$proto64["m_columns"][] = "start2_date";
$proto64["m_columns"][] = "end2_date";
$proto64["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto64);

$proto63["m_table"] = $obj;
$proto63["m_sql"] = "jobfile";
$proto63["m_alias"] = "";
$proto63["m_srcTableName"] = "files_menu_count";
$proto65=array();
$proto65["m_sql"] = "";
$proto65["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto65["m_column"]=$obj;
$proto65["m_contained"] = array();
$proto65["m_strCase"] = "";
$proto65["m_havingmode"] = false;
$proto65["m_inBrackets"] = false;
$proto65["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto65);

$proto63["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto63);

$proto45["m_fromlist"][]=$obj;
$proto45["m_groupby"] = array();
$proto45["m_orderby"] = array();
$proto45["m_srcTableName"]="files_menu_count";		
$obj = new SQLQuery($proto45);

$proto44["m_sql"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id = \"3\") AND (jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880)  )";
$proto44["m_srcTableName"] = "files_menu_count";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "Need_to__Designer_Work_14704_Files";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$proto68=array();
$proto68["m_strHead"] = "select";
$proto68["m_strFieldList"] = "COUNT(*) AS c1";
$proto68["m_strFrom"] = "FROM jobfile";
$proto68["m_strWhere"] = "(jobfile.jobfile_status_id != \"7\") AND (jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880)";
$proto68["m_strOrderBy"] = "";
$proto68["m_strTail"] = "";
			$proto68["cipherer"] = null;
$proto69=array();
$proto69["m_sql"] = "(jobfile.jobfile_status_id != \"7\") AND (jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880)";
$proto69["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.jobfile_status_id != \"7\") AND (jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880)"
));

$proto69["m_column"]=$obj;
$proto69["m_contained"] = array();
						$proto71=array();
$proto71["m_sql"] = "jobfile.jobfile_status_id != \"7\"";
$proto71["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto71["m_column"]=$obj;
$proto71["m_contained"] = array();
$proto71["m_strCase"] = "!= \"7\"";
$proto71["m_havingmode"] = false;
$proto71["m_inBrackets"] = true;
$proto71["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto71);

			$proto69["m_contained"][]=$obj;
						$proto73=array();
$proto73["m_sql"] = "jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880";
$proto73["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880"
));

$proto73["m_column"]=$obj;
$proto73["m_contained"] = array();
						$proto75=array();
$proto75["m_sql"] = "jobfile.project_id =5001";
$proto75["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto75["m_column"]=$obj;
$proto75["m_contained"] = array();
$proto75["m_strCase"] = "=5001";
$proto75["m_havingmode"] = false;
$proto75["m_inBrackets"] = false;
$proto75["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto75);

			$proto73["m_contained"][]=$obj;
						$proto77=array();
$proto77["m_sql"] = "jobfile.project_id =5879";
$proto77["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto77["m_column"]=$obj;
$proto77["m_contained"] = array();
$proto77["m_strCase"] = "=5879";
$proto77["m_havingmode"] = false;
$proto77["m_inBrackets"] = false;
$proto77["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto77);

			$proto73["m_contained"][]=$obj;
						$proto79=array();
$proto79["m_sql"] = "jobfile.project_id =5880";
$proto79["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto79["m_column"]=$obj;
$proto79["m_contained"] = array();
$proto79["m_strCase"] = "=5880";
$proto79["m_havingmode"] = false;
$proto79["m_inBrackets"] = false;
$proto79["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto79);

			$proto73["m_contained"][]=$obj;
$proto73["m_strCase"] = "";
$proto73["m_havingmode"] = false;
$proto73["m_inBrackets"] = true;
$proto73["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto73);

			$proto69["m_contained"][]=$obj;
$proto69["m_strCase"] = "";
$proto69["m_havingmode"] = false;
$proto69["m_inBrackets"] = false;
$proto69["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto69);

$proto68["m_where"] = $obj;
$proto81=array();
$proto81["m_sql"] = "";
$proto81["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto81["m_column"]=$obj;
$proto81["m_contained"] = array();
$proto81["m_strCase"] = "";
$proto81["m_havingmode"] = false;
$proto81["m_inBrackets"] = false;
$proto81["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto81);

$proto68["m_having"] = $obj;
$proto68["m_fieldlist"] = array();
						$proto83=array();
			$proto84=array();
$proto84["m_functiontype"] = "SQLF_COUNT";
$proto84["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto84["m_arguments"][]=$obj;
$proto84["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto84);

$proto83["m_sql"] = "COUNT(*)";
$proto83["m_srcTableName"] = "files_menu_count";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "c1";
$obj = new SQLFieldListItem($proto83);

$proto68["m_fieldlist"][]=$obj;
$proto68["m_fromlist"] = array();
												$proto86=array();
$proto86["m_link"] = "SQLL_MAIN";
			$proto87=array();
$proto87["m_strName"] = "jobfile";
$proto87["m_srcTableName"] = "files_menu_count";
$proto87["m_columns"] = array();
$proto87["m_columns"][] = "jobfile_id";
$proto87["m_columns"][] = "file_url";
$proto87["m_columns"][] = "client_id";
$proto87["m_columns"][] = "work_id";
$proto87["m_columns"][] = "job_id";
$proto87["m_columns"][] = "project_id";
$proto87["m_columns"][] = "folder_name";
$proto87["m_columns"][] = "filename";
$proto87["m_columns"][] = "jobfile_type";
$proto87["m_columns"][] = "jobfile_note";
$proto87["m_columns"][] = "jobfile_status_id";
$proto87["m_columns"][] = "downloader_id";
$proto87["m_columns"][] = "distributor_id";
$proto87["m_columns"][] = "designer_id";
$proto87["m_columns"][] = "qc_id";
$proto87["m_columns"][] = "uploader_id";
$proto87["m_columns"][] = "notifier_id";
$proto87["m_columns"][] = "rejector_id";
$proto87["m_columns"][] = "download_date";
$proto87["m_columns"][] = "distribute_date";
$proto87["m_columns"][] = "start_date";
$proto87["m_columns"][] = "end_date";
$proto87["m_columns"][] = "designer_time";
$proto87["m_columns"][] = "qcstart_date";
$proto87["m_columns"][] = "qcend_date";
$proto87["m_columns"][] = "qc_time";
$proto87["m_columns"][] = "upload_date";
$proto87["m_columns"][] = "notify_date";
$proto87["m_columns"][] = "reject_date";
$proto87["m_columns"][] = "reject_reason";
$proto87["m_columns"][] = "designer2_id";
$proto87["m_columns"][] = "start2_date";
$proto87["m_columns"][] = "end2_date";
$proto87["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto87);

$proto86["m_table"] = $obj;
$proto86["m_sql"] = "jobfile";
$proto86["m_alias"] = "";
$proto86["m_srcTableName"] = "files_menu_count";
$proto88=array();
$proto88["m_sql"] = "";
$proto88["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto88["m_column"]=$obj;
$proto88["m_contained"] = array();
$proto88["m_strCase"] = "";
$proto88["m_havingmode"] = false;
$proto88["m_inBrackets"] = false;
$proto88["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto88);

$proto86["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto86);

$proto68["m_fromlist"][]=$obj;
$proto68["m_groupby"] = array();
$proto68["m_orderby"] = array();
$proto68["m_srcTableName"]="files_menu_count";		
$obj = new SQLQuery($proto68);

$proto67["m_sql"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id != \"7\") AND (jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880)  )";
$proto67["m_srcTableName"] = "files_menu_count";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "Need_to_Work_14704_Files";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$proto91=array();
$proto91["m_strHead"] = "select";
$proto91["m_strFieldList"] = "COUNT(*) AS c1";
$proto91["m_strFrom"] = "FROM jobfile";
$proto91["m_strWhere"] = "(jobfile.jobfile_status_id = \"14\") AND (jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880)";
$proto91["m_strOrderBy"] = "";
$proto91["m_strTail"] = "";
			$proto91["cipherer"] = null;
$proto92=array();
$proto92["m_sql"] = "(jobfile.jobfile_status_id = \"14\") AND (jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880)";
$proto92["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.jobfile_status_id = \"14\") AND (jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880)"
));

$proto92["m_column"]=$obj;
$proto92["m_contained"] = array();
						$proto94=array();
$proto94["m_sql"] = "jobfile.jobfile_status_id = \"14\"";
$proto94["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto94["m_column"]=$obj;
$proto94["m_contained"] = array();
$proto94["m_strCase"] = "= \"14\"";
$proto94["m_havingmode"] = false;
$proto94["m_inBrackets"] = true;
$proto94["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto94);

			$proto92["m_contained"][]=$obj;
						$proto96=array();
$proto96["m_sql"] = "jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880";
$proto96["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880"
));

$proto96["m_column"]=$obj;
$proto96["m_contained"] = array();
						$proto98=array();
$proto98["m_sql"] = "jobfile.project_id =5001";
$proto98["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto98["m_column"]=$obj;
$proto98["m_contained"] = array();
$proto98["m_strCase"] = "=5001";
$proto98["m_havingmode"] = false;
$proto98["m_inBrackets"] = false;
$proto98["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto98);

			$proto96["m_contained"][]=$obj;
						$proto100=array();
$proto100["m_sql"] = "jobfile.project_id =5879";
$proto100["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto100["m_column"]=$obj;
$proto100["m_contained"] = array();
$proto100["m_strCase"] = "=5879";
$proto100["m_havingmode"] = false;
$proto100["m_inBrackets"] = false;
$proto100["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto100);

			$proto96["m_contained"][]=$obj;
						$proto102=array();
$proto102["m_sql"] = "jobfile.project_id =5880";
$proto102["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto102["m_column"]=$obj;
$proto102["m_contained"] = array();
$proto102["m_strCase"] = "=5880";
$proto102["m_havingmode"] = false;
$proto102["m_inBrackets"] = false;
$proto102["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto102);

			$proto96["m_contained"][]=$obj;
$proto96["m_strCase"] = "";
$proto96["m_havingmode"] = false;
$proto96["m_inBrackets"] = true;
$proto96["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto96);

			$proto92["m_contained"][]=$obj;
$proto92["m_strCase"] = "";
$proto92["m_havingmode"] = false;
$proto92["m_inBrackets"] = false;
$proto92["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto92);

$proto91["m_where"] = $obj;
$proto104=array();
$proto104["m_sql"] = "";
$proto104["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto104["m_column"]=$obj;
$proto104["m_contained"] = array();
$proto104["m_strCase"] = "";
$proto104["m_havingmode"] = false;
$proto104["m_inBrackets"] = false;
$proto104["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto104);

$proto91["m_having"] = $obj;
$proto91["m_fieldlist"] = array();
						$proto106=array();
			$proto107=array();
$proto107["m_functiontype"] = "SQLF_COUNT";
$proto107["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto107["m_arguments"][]=$obj;
$proto107["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto107);

$proto106["m_sql"] = "COUNT(*)";
$proto106["m_srcTableName"] = "files_menu_count";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "c1";
$obj = new SQLFieldListItem($proto106);

$proto91["m_fieldlist"][]=$obj;
$proto91["m_fromlist"] = array();
												$proto109=array();
$proto109["m_link"] = "SQLL_MAIN";
			$proto110=array();
$proto110["m_strName"] = "jobfile";
$proto110["m_srcTableName"] = "files_menu_count";
$proto110["m_columns"] = array();
$proto110["m_columns"][] = "jobfile_id";
$proto110["m_columns"][] = "file_url";
$proto110["m_columns"][] = "client_id";
$proto110["m_columns"][] = "work_id";
$proto110["m_columns"][] = "job_id";
$proto110["m_columns"][] = "project_id";
$proto110["m_columns"][] = "folder_name";
$proto110["m_columns"][] = "filename";
$proto110["m_columns"][] = "jobfile_type";
$proto110["m_columns"][] = "jobfile_note";
$proto110["m_columns"][] = "jobfile_status_id";
$proto110["m_columns"][] = "downloader_id";
$proto110["m_columns"][] = "distributor_id";
$proto110["m_columns"][] = "designer_id";
$proto110["m_columns"][] = "qc_id";
$proto110["m_columns"][] = "uploader_id";
$proto110["m_columns"][] = "notifier_id";
$proto110["m_columns"][] = "rejector_id";
$proto110["m_columns"][] = "download_date";
$proto110["m_columns"][] = "distribute_date";
$proto110["m_columns"][] = "start_date";
$proto110["m_columns"][] = "end_date";
$proto110["m_columns"][] = "designer_time";
$proto110["m_columns"][] = "qcstart_date";
$proto110["m_columns"][] = "qcend_date";
$proto110["m_columns"][] = "qc_time";
$proto110["m_columns"][] = "upload_date";
$proto110["m_columns"][] = "notify_date";
$proto110["m_columns"][] = "reject_date";
$proto110["m_columns"][] = "reject_reason";
$proto110["m_columns"][] = "designer2_id";
$proto110["m_columns"][] = "start2_date";
$proto110["m_columns"][] = "end2_date";
$proto110["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto110);

$proto109["m_table"] = $obj;
$proto109["m_sql"] = "jobfile";
$proto109["m_alias"] = "";
$proto109["m_srcTableName"] = "files_menu_count";
$proto111=array();
$proto111["m_sql"] = "";
$proto111["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto111["m_column"]=$obj;
$proto111["m_contained"] = array();
$proto111["m_strCase"] = "";
$proto111["m_havingmode"] = false;
$proto111["m_inBrackets"] = false;
$proto111["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto111);

$proto109["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto109);

$proto91["m_fromlist"][]=$obj;
$proto91["m_groupby"] = array();
$proto91["m_orderby"] = array();
$proto91["m_srcTableName"]="files_menu_count";		
$obj = new SQLQuery($proto91);

$proto90["m_sql"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id = \"14\") AND (jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880)  )";
$proto90["m_srcTableName"] = "files_menu_count";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "Need_to_QC_14704_Files";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto113=array();
			$proto114=array();
$proto114["m_strHead"] = "select";
$proto114["m_strFieldList"] = "COUNT(*) AS c1";
$proto114["m_strFrom"] = "FROM jobfile";
$proto114["m_strWhere"] = "jobfile.jobfile_status_id = \"3\" AND (jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031)";
$proto114["m_strOrderBy"] = "";
$proto114["m_strTail"] = "";
			$proto114["cipherer"] = null;
$proto115=array();
$proto115["m_sql"] = "jobfile.jobfile_status_id = \"3\" AND (jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031)";
$proto115["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.jobfile_status_id = \"3\" AND (jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031)"
));

$proto115["m_column"]=$obj;
$proto115["m_contained"] = array();
						$proto117=array();
$proto117["m_sql"] = "jobfile.jobfile_status_id = \"3\"";
$proto117["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto117["m_column"]=$obj;
$proto117["m_contained"] = array();
$proto117["m_strCase"] = "= \"3\"";
$proto117["m_havingmode"] = false;
$proto117["m_inBrackets"] = false;
$proto117["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto117);

			$proto115["m_contained"][]=$obj;
						$proto119=array();
$proto119["m_sql"] = "jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031";
$proto119["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031"
));

$proto119["m_column"]=$obj;
$proto119["m_contained"] = array();
						$proto121=array();
$proto121["m_sql"] = "jobfile.project_id =5002";
$proto121["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto121["m_column"]=$obj;
$proto121["m_contained"] = array();
$proto121["m_strCase"] = "=5002";
$proto121["m_havingmode"] = false;
$proto121["m_inBrackets"] = false;
$proto121["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto121);

			$proto119["m_contained"][]=$obj;
						$proto123=array();
$proto123["m_sql"] = "jobfile.project_id =5027";
$proto123["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto123["m_column"]=$obj;
$proto123["m_contained"] = array();
$proto123["m_strCase"] = "=5027";
$proto123["m_havingmode"] = false;
$proto123["m_inBrackets"] = false;
$proto123["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto123);

			$proto119["m_contained"][]=$obj;
						$proto125=array();
$proto125["m_sql"] = "jobfile.project_id =5028";
$proto125["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto125["m_column"]=$obj;
$proto125["m_contained"] = array();
$proto125["m_strCase"] = "=5028";
$proto125["m_havingmode"] = false;
$proto125["m_inBrackets"] = false;
$proto125["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto125);

			$proto119["m_contained"][]=$obj;
						$proto127=array();
$proto127["m_sql"] = "jobfile.project_id =5029";
$proto127["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto127["m_column"]=$obj;
$proto127["m_contained"] = array();
$proto127["m_strCase"] = "=5029";
$proto127["m_havingmode"] = false;
$proto127["m_inBrackets"] = false;
$proto127["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto127);

			$proto119["m_contained"][]=$obj;
						$proto129=array();
$proto129["m_sql"] = "jobfile.project_id =5030";
$proto129["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto129["m_column"]=$obj;
$proto129["m_contained"] = array();
$proto129["m_strCase"] = "=5030";
$proto129["m_havingmode"] = false;
$proto129["m_inBrackets"] = false;
$proto129["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto129);

			$proto119["m_contained"][]=$obj;
						$proto131=array();
$proto131["m_sql"] = "jobfile.project_id =5370";
$proto131["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto131["m_column"]=$obj;
$proto131["m_contained"] = array();
$proto131["m_strCase"] = "=5370";
$proto131["m_havingmode"] = false;
$proto131["m_inBrackets"] = false;
$proto131["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto131);

			$proto119["m_contained"][]=$obj;
						$proto133=array();
$proto133["m_sql"] = "jobfile.project_id =5371";
$proto133["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto133["m_column"]=$obj;
$proto133["m_contained"] = array();
$proto133["m_strCase"] = "=5371";
$proto133["m_havingmode"] = false;
$proto133["m_inBrackets"] = false;
$proto133["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto133);

			$proto119["m_contained"][]=$obj;
						$proto135=array();
$proto135["m_sql"] = "jobfile.project_id =5031";
$proto135["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto135["m_column"]=$obj;
$proto135["m_contained"] = array();
$proto135["m_strCase"] = "=5031";
$proto135["m_havingmode"] = false;
$proto135["m_inBrackets"] = false;
$proto135["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto135);

			$proto119["m_contained"][]=$obj;
$proto119["m_strCase"] = "";
$proto119["m_havingmode"] = false;
$proto119["m_inBrackets"] = true;
$proto119["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto119);

			$proto115["m_contained"][]=$obj;
$proto115["m_strCase"] = "";
$proto115["m_havingmode"] = false;
$proto115["m_inBrackets"] = false;
$proto115["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto115);

$proto114["m_where"] = $obj;
$proto137=array();
$proto137["m_sql"] = "";
$proto137["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto137["m_column"]=$obj;
$proto137["m_contained"] = array();
$proto137["m_strCase"] = "";
$proto137["m_havingmode"] = false;
$proto137["m_inBrackets"] = false;
$proto137["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto137);

$proto114["m_having"] = $obj;
$proto114["m_fieldlist"] = array();
						$proto139=array();
			$proto140=array();
$proto140["m_functiontype"] = "SQLF_COUNT";
$proto140["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto140["m_arguments"][]=$obj;
$proto140["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto140);

$proto139["m_sql"] = "COUNT(*)";
$proto139["m_srcTableName"] = "files_menu_count";
$proto139["m_expr"]=$obj;
$proto139["m_alias"] = "c1";
$obj = new SQLFieldListItem($proto139);

$proto114["m_fieldlist"][]=$obj;
$proto114["m_fromlist"] = array();
												$proto142=array();
$proto142["m_link"] = "SQLL_MAIN";
			$proto143=array();
$proto143["m_strName"] = "jobfile";
$proto143["m_srcTableName"] = "files_menu_count";
$proto143["m_columns"] = array();
$proto143["m_columns"][] = "jobfile_id";
$proto143["m_columns"][] = "file_url";
$proto143["m_columns"][] = "client_id";
$proto143["m_columns"][] = "work_id";
$proto143["m_columns"][] = "job_id";
$proto143["m_columns"][] = "project_id";
$proto143["m_columns"][] = "folder_name";
$proto143["m_columns"][] = "filename";
$proto143["m_columns"][] = "jobfile_type";
$proto143["m_columns"][] = "jobfile_note";
$proto143["m_columns"][] = "jobfile_status_id";
$proto143["m_columns"][] = "downloader_id";
$proto143["m_columns"][] = "distributor_id";
$proto143["m_columns"][] = "designer_id";
$proto143["m_columns"][] = "qc_id";
$proto143["m_columns"][] = "uploader_id";
$proto143["m_columns"][] = "notifier_id";
$proto143["m_columns"][] = "rejector_id";
$proto143["m_columns"][] = "download_date";
$proto143["m_columns"][] = "distribute_date";
$proto143["m_columns"][] = "start_date";
$proto143["m_columns"][] = "end_date";
$proto143["m_columns"][] = "designer_time";
$proto143["m_columns"][] = "qcstart_date";
$proto143["m_columns"][] = "qcend_date";
$proto143["m_columns"][] = "qc_time";
$proto143["m_columns"][] = "upload_date";
$proto143["m_columns"][] = "notify_date";
$proto143["m_columns"][] = "reject_date";
$proto143["m_columns"][] = "reject_reason";
$proto143["m_columns"][] = "designer2_id";
$proto143["m_columns"][] = "start2_date";
$proto143["m_columns"][] = "end2_date";
$proto143["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto143);

$proto142["m_table"] = $obj;
$proto142["m_sql"] = "jobfile";
$proto142["m_alias"] = "";
$proto142["m_srcTableName"] = "files_menu_count";
$proto144=array();
$proto144["m_sql"] = "";
$proto144["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto144["m_column"]=$obj;
$proto144["m_contained"] = array();
$proto144["m_strCase"] = "";
$proto144["m_havingmode"] = false;
$proto144["m_inBrackets"] = false;
$proto144["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto144);

$proto142["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto142);

$proto114["m_fromlist"][]=$obj;
$proto114["m_groupby"] = array();
$proto114["m_orderby"] = array();
$proto114["m_srcTableName"]="files_menu_count";		
$obj = new SQLQuery($proto114);

$proto113["m_sql"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE jobfile.jobfile_status_id = \"3\" AND (jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031)  )";
$proto113["m_srcTableName"] = "files_menu_count";
$proto113["m_expr"]=$obj;
$proto113["m_alias"] = "Need_to__Designer_Work_18442_Files";
$obj = new SQLFieldListItem($proto113);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$proto147=array();
$proto147["m_strHead"] = "select";
$proto147["m_strFieldList"] = "COUNT(*) AS c1";
$proto147["m_strFrom"] = "FROM jobfile";
$proto147["m_strWhere"] = "(jobfile.jobfile_status_id != \"7\") AND (jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031)";
$proto147["m_strOrderBy"] = "";
$proto147["m_strTail"] = "";
			$proto147["cipherer"] = null;
$proto148=array();
$proto148["m_sql"] = "(jobfile.jobfile_status_id != \"7\") AND (jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031)";
$proto148["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.jobfile_status_id != \"7\") AND (jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031)"
));

$proto148["m_column"]=$obj;
$proto148["m_contained"] = array();
						$proto150=array();
$proto150["m_sql"] = "jobfile.jobfile_status_id != \"7\"";
$proto150["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto150["m_column"]=$obj;
$proto150["m_contained"] = array();
$proto150["m_strCase"] = "!= \"7\"";
$proto150["m_havingmode"] = false;
$proto150["m_inBrackets"] = true;
$proto150["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto150);

			$proto148["m_contained"][]=$obj;
						$proto152=array();
$proto152["m_sql"] = "jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031";
$proto152["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031"
));

$proto152["m_column"]=$obj;
$proto152["m_contained"] = array();
						$proto154=array();
$proto154["m_sql"] = "jobfile.project_id =5002";
$proto154["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto154["m_column"]=$obj;
$proto154["m_contained"] = array();
$proto154["m_strCase"] = "=5002";
$proto154["m_havingmode"] = false;
$proto154["m_inBrackets"] = false;
$proto154["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto154);

			$proto152["m_contained"][]=$obj;
						$proto156=array();
$proto156["m_sql"] = "jobfile.project_id =5027";
$proto156["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto156["m_column"]=$obj;
$proto156["m_contained"] = array();
$proto156["m_strCase"] = "=5027";
$proto156["m_havingmode"] = false;
$proto156["m_inBrackets"] = false;
$proto156["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto156);

			$proto152["m_contained"][]=$obj;
						$proto158=array();
$proto158["m_sql"] = "jobfile.project_id =5028";
$proto158["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto158["m_column"]=$obj;
$proto158["m_contained"] = array();
$proto158["m_strCase"] = "=5028";
$proto158["m_havingmode"] = false;
$proto158["m_inBrackets"] = false;
$proto158["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto158);

			$proto152["m_contained"][]=$obj;
						$proto160=array();
$proto160["m_sql"] = "jobfile.project_id =5029";
$proto160["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto160["m_column"]=$obj;
$proto160["m_contained"] = array();
$proto160["m_strCase"] = "=5029";
$proto160["m_havingmode"] = false;
$proto160["m_inBrackets"] = false;
$proto160["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto160);

			$proto152["m_contained"][]=$obj;
						$proto162=array();
$proto162["m_sql"] = "jobfile.project_id =5030";
$proto162["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto162["m_column"]=$obj;
$proto162["m_contained"] = array();
$proto162["m_strCase"] = "=5030";
$proto162["m_havingmode"] = false;
$proto162["m_inBrackets"] = false;
$proto162["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto162);

			$proto152["m_contained"][]=$obj;
						$proto164=array();
$proto164["m_sql"] = "jobfile.project_id =5370";
$proto164["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto164["m_column"]=$obj;
$proto164["m_contained"] = array();
$proto164["m_strCase"] = "=5370";
$proto164["m_havingmode"] = false;
$proto164["m_inBrackets"] = false;
$proto164["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto164);

			$proto152["m_contained"][]=$obj;
						$proto166=array();
$proto166["m_sql"] = "jobfile.project_id =5371";
$proto166["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto166["m_column"]=$obj;
$proto166["m_contained"] = array();
$proto166["m_strCase"] = "=5371";
$proto166["m_havingmode"] = false;
$proto166["m_inBrackets"] = false;
$proto166["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto166);

			$proto152["m_contained"][]=$obj;
						$proto168=array();
$proto168["m_sql"] = "jobfile.project_id =5031";
$proto168["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto168["m_column"]=$obj;
$proto168["m_contained"] = array();
$proto168["m_strCase"] = "=5031";
$proto168["m_havingmode"] = false;
$proto168["m_inBrackets"] = false;
$proto168["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto168);

			$proto152["m_contained"][]=$obj;
$proto152["m_strCase"] = "";
$proto152["m_havingmode"] = false;
$proto152["m_inBrackets"] = true;
$proto152["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto152);

			$proto148["m_contained"][]=$obj;
$proto148["m_strCase"] = "";
$proto148["m_havingmode"] = false;
$proto148["m_inBrackets"] = false;
$proto148["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto148);

$proto147["m_where"] = $obj;
$proto170=array();
$proto170["m_sql"] = "";
$proto170["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto170["m_column"]=$obj;
$proto170["m_contained"] = array();
$proto170["m_strCase"] = "";
$proto170["m_havingmode"] = false;
$proto170["m_inBrackets"] = false;
$proto170["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto170);

$proto147["m_having"] = $obj;
$proto147["m_fieldlist"] = array();
						$proto172=array();
			$proto173=array();
$proto173["m_functiontype"] = "SQLF_COUNT";
$proto173["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto173["m_arguments"][]=$obj;
$proto173["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto173);

$proto172["m_sql"] = "COUNT(*)";
$proto172["m_srcTableName"] = "files_menu_count";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "c1";
$obj = new SQLFieldListItem($proto172);

$proto147["m_fieldlist"][]=$obj;
$proto147["m_fromlist"] = array();
												$proto175=array();
$proto175["m_link"] = "SQLL_MAIN";
			$proto176=array();
$proto176["m_strName"] = "jobfile";
$proto176["m_srcTableName"] = "files_menu_count";
$proto176["m_columns"] = array();
$proto176["m_columns"][] = "jobfile_id";
$proto176["m_columns"][] = "file_url";
$proto176["m_columns"][] = "client_id";
$proto176["m_columns"][] = "work_id";
$proto176["m_columns"][] = "job_id";
$proto176["m_columns"][] = "project_id";
$proto176["m_columns"][] = "folder_name";
$proto176["m_columns"][] = "filename";
$proto176["m_columns"][] = "jobfile_type";
$proto176["m_columns"][] = "jobfile_note";
$proto176["m_columns"][] = "jobfile_status_id";
$proto176["m_columns"][] = "downloader_id";
$proto176["m_columns"][] = "distributor_id";
$proto176["m_columns"][] = "designer_id";
$proto176["m_columns"][] = "qc_id";
$proto176["m_columns"][] = "uploader_id";
$proto176["m_columns"][] = "notifier_id";
$proto176["m_columns"][] = "rejector_id";
$proto176["m_columns"][] = "download_date";
$proto176["m_columns"][] = "distribute_date";
$proto176["m_columns"][] = "start_date";
$proto176["m_columns"][] = "end_date";
$proto176["m_columns"][] = "designer_time";
$proto176["m_columns"][] = "qcstart_date";
$proto176["m_columns"][] = "qcend_date";
$proto176["m_columns"][] = "qc_time";
$proto176["m_columns"][] = "upload_date";
$proto176["m_columns"][] = "notify_date";
$proto176["m_columns"][] = "reject_date";
$proto176["m_columns"][] = "reject_reason";
$proto176["m_columns"][] = "designer2_id";
$proto176["m_columns"][] = "start2_date";
$proto176["m_columns"][] = "end2_date";
$proto176["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto176);

$proto175["m_table"] = $obj;
$proto175["m_sql"] = "jobfile";
$proto175["m_alias"] = "";
$proto175["m_srcTableName"] = "files_menu_count";
$proto177=array();
$proto177["m_sql"] = "";
$proto177["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto177["m_column"]=$obj;
$proto177["m_contained"] = array();
$proto177["m_strCase"] = "";
$proto177["m_havingmode"] = false;
$proto177["m_inBrackets"] = false;
$proto177["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto177);

$proto175["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto175);

$proto147["m_fromlist"][]=$obj;
$proto147["m_groupby"] = array();
$proto147["m_orderby"] = array();
$proto147["m_srcTableName"]="files_menu_count";		
$obj = new SQLQuery($proto147);

$proto146["m_sql"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id != \"7\") AND (jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031)  )";
$proto146["m_srcTableName"] = "files_menu_count";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "Need_to_Work_18442_Files";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto179=array();
			$proto180=array();
$proto180["m_strHead"] = "select";
$proto180["m_strFieldList"] = "COUNT(*) AS c1";
$proto180["m_strFrom"] = "FROM jobfile";
$proto180["m_strWhere"] = "(jobfile.jobfile_status_id = \"14\") AND (jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031)";
$proto180["m_strOrderBy"] = "";
$proto180["m_strTail"] = "";
			$proto180["cipherer"] = null;
$proto181=array();
$proto181["m_sql"] = "(jobfile.jobfile_status_id = \"14\") AND (jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031)";
$proto181["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.jobfile_status_id = \"14\") AND (jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031)"
));

$proto181["m_column"]=$obj;
$proto181["m_contained"] = array();
						$proto183=array();
$proto183["m_sql"] = "jobfile.jobfile_status_id = \"14\"";
$proto183["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto183["m_column"]=$obj;
$proto183["m_contained"] = array();
$proto183["m_strCase"] = "= \"14\"";
$proto183["m_havingmode"] = false;
$proto183["m_inBrackets"] = true;
$proto183["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto183);

			$proto181["m_contained"][]=$obj;
						$proto185=array();
$proto185["m_sql"] = "jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031";
$proto185["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031"
));

$proto185["m_column"]=$obj;
$proto185["m_contained"] = array();
						$proto187=array();
$proto187["m_sql"] = "jobfile.project_id =5002";
$proto187["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto187["m_column"]=$obj;
$proto187["m_contained"] = array();
$proto187["m_strCase"] = "=5002";
$proto187["m_havingmode"] = false;
$proto187["m_inBrackets"] = false;
$proto187["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto187);

			$proto185["m_contained"][]=$obj;
						$proto189=array();
$proto189["m_sql"] = "jobfile.project_id =5027";
$proto189["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto189["m_column"]=$obj;
$proto189["m_contained"] = array();
$proto189["m_strCase"] = "=5027";
$proto189["m_havingmode"] = false;
$proto189["m_inBrackets"] = false;
$proto189["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto189);

			$proto185["m_contained"][]=$obj;
						$proto191=array();
$proto191["m_sql"] = "jobfile.project_id =5028";
$proto191["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto191["m_column"]=$obj;
$proto191["m_contained"] = array();
$proto191["m_strCase"] = "=5028";
$proto191["m_havingmode"] = false;
$proto191["m_inBrackets"] = false;
$proto191["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto191);

			$proto185["m_contained"][]=$obj;
						$proto193=array();
$proto193["m_sql"] = "jobfile.project_id =5029";
$proto193["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto193["m_column"]=$obj;
$proto193["m_contained"] = array();
$proto193["m_strCase"] = "=5029";
$proto193["m_havingmode"] = false;
$proto193["m_inBrackets"] = false;
$proto193["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto193);

			$proto185["m_contained"][]=$obj;
						$proto195=array();
$proto195["m_sql"] = "jobfile.project_id =5030";
$proto195["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto195["m_column"]=$obj;
$proto195["m_contained"] = array();
$proto195["m_strCase"] = "=5030";
$proto195["m_havingmode"] = false;
$proto195["m_inBrackets"] = false;
$proto195["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto195);

			$proto185["m_contained"][]=$obj;
						$proto197=array();
$proto197["m_sql"] = "jobfile.project_id =5370";
$proto197["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto197["m_column"]=$obj;
$proto197["m_contained"] = array();
$proto197["m_strCase"] = "=5370";
$proto197["m_havingmode"] = false;
$proto197["m_inBrackets"] = false;
$proto197["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto197);

			$proto185["m_contained"][]=$obj;
						$proto199=array();
$proto199["m_sql"] = "jobfile.project_id =5371";
$proto199["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto199["m_column"]=$obj;
$proto199["m_contained"] = array();
$proto199["m_strCase"] = "=5371";
$proto199["m_havingmode"] = false;
$proto199["m_inBrackets"] = false;
$proto199["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto199);

			$proto185["m_contained"][]=$obj;
						$proto201=array();
$proto201["m_sql"] = "jobfile.project_id =5031";
$proto201["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto201["m_column"]=$obj;
$proto201["m_contained"] = array();
$proto201["m_strCase"] = "=5031";
$proto201["m_havingmode"] = false;
$proto201["m_inBrackets"] = false;
$proto201["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto201);

			$proto185["m_contained"][]=$obj;
$proto185["m_strCase"] = "";
$proto185["m_havingmode"] = false;
$proto185["m_inBrackets"] = true;
$proto185["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto185);

			$proto181["m_contained"][]=$obj;
$proto181["m_strCase"] = "";
$proto181["m_havingmode"] = false;
$proto181["m_inBrackets"] = false;
$proto181["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto181);

$proto180["m_where"] = $obj;
$proto203=array();
$proto203["m_sql"] = "";
$proto203["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto203["m_column"]=$obj;
$proto203["m_contained"] = array();
$proto203["m_strCase"] = "";
$proto203["m_havingmode"] = false;
$proto203["m_inBrackets"] = false;
$proto203["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto203);

$proto180["m_having"] = $obj;
$proto180["m_fieldlist"] = array();
						$proto205=array();
			$proto206=array();
$proto206["m_functiontype"] = "SQLF_COUNT";
$proto206["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto206["m_arguments"][]=$obj;
$proto206["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto206);

$proto205["m_sql"] = "COUNT(*)";
$proto205["m_srcTableName"] = "files_menu_count";
$proto205["m_expr"]=$obj;
$proto205["m_alias"] = "c1";
$obj = new SQLFieldListItem($proto205);

$proto180["m_fieldlist"][]=$obj;
$proto180["m_fromlist"] = array();
												$proto208=array();
$proto208["m_link"] = "SQLL_MAIN";
			$proto209=array();
$proto209["m_strName"] = "jobfile";
$proto209["m_srcTableName"] = "files_menu_count";
$proto209["m_columns"] = array();
$proto209["m_columns"][] = "jobfile_id";
$proto209["m_columns"][] = "file_url";
$proto209["m_columns"][] = "client_id";
$proto209["m_columns"][] = "work_id";
$proto209["m_columns"][] = "job_id";
$proto209["m_columns"][] = "project_id";
$proto209["m_columns"][] = "folder_name";
$proto209["m_columns"][] = "filename";
$proto209["m_columns"][] = "jobfile_type";
$proto209["m_columns"][] = "jobfile_note";
$proto209["m_columns"][] = "jobfile_status_id";
$proto209["m_columns"][] = "downloader_id";
$proto209["m_columns"][] = "distributor_id";
$proto209["m_columns"][] = "designer_id";
$proto209["m_columns"][] = "qc_id";
$proto209["m_columns"][] = "uploader_id";
$proto209["m_columns"][] = "notifier_id";
$proto209["m_columns"][] = "rejector_id";
$proto209["m_columns"][] = "download_date";
$proto209["m_columns"][] = "distribute_date";
$proto209["m_columns"][] = "start_date";
$proto209["m_columns"][] = "end_date";
$proto209["m_columns"][] = "designer_time";
$proto209["m_columns"][] = "qcstart_date";
$proto209["m_columns"][] = "qcend_date";
$proto209["m_columns"][] = "qc_time";
$proto209["m_columns"][] = "upload_date";
$proto209["m_columns"][] = "notify_date";
$proto209["m_columns"][] = "reject_date";
$proto209["m_columns"][] = "reject_reason";
$proto209["m_columns"][] = "designer2_id";
$proto209["m_columns"][] = "start2_date";
$proto209["m_columns"][] = "end2_date";
$proto209["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto209);

$proto208["m_table"] = $obj;
$proto208["m_sql"] = "jobfile";
$proto208["m_alias"] = "";
$proto208["m_srcTableName"] = "files_menu_count";
$proto210=array();
$proto210["m_sql"] = "";
$proto210["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto210["m_column"]=$obj;
$proto210["m_contained"] = array();
$proto210["m_strCase"] = "";
$proto210["m_havingmode"] = false;
$proto210["m_inBrackets"] = false;
$proto210["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto210);

$proto208["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto208);

$proto180["m_fromlist"][]=$obj;
$proto180["m_groupby"] = array();
$proto180["m_orderby"] = array();
$proto180["m_srcTableName"]="files_menu_count";		
$obj = new SQLQuery($proto180);

$proto179["m_sql"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id = \"14\") AND (jobfile.project_id =5002 OR jobfile.project_id =5027 OR jobfile.project_id =5028 OR jobfile.project_id =5029 OR jobfile.project_id =5030 OR jobfile.project_id =5370 OR jobfile.project_id =5371 OR jobfile.project_id =5031)  )";
$proto179["m_srcTableName"] = "files_menu_count";
$proto179["m_expr"]=$obj;
$proto179["m_alias"] = "Need_to_QC_18442_Files";
$obj = new SQLFieldListItem($proto179);

$proto0["m_fieldlist"][]=$obj;
						$proto212=array();
			$proto213=array();
$proto213["m_strHead"] = "select";
$proto213["m_strFieldList"] = "COUNT(*) AS c1";
$proto213["m_strFrom"] = "FROM jobfile";
$proto213["m_strWhere"] = "(jobfile.jobfile_status_id = \"3\") AND (jobfile.project_id !=5002 AND jobfile.project_id !=5027 AND jobfile.project_id !=5028 AND jobfile.project_id !=5029 AND jobfile.project_id !=5030 AND jobfile.project_id !=5370 AND jobfile.project_id !=5371 AND jobfile.project_id !=5031 AND jobfile.project_id !=5001 AND jobfile.project_id !=5879 AND jobfile.project_id !=5880 = True)";
$proto213["m_strOrderBy"] = "";
$proto213["m_strTail"] = "";
			$proto213["cipherer"] = null;
$proto214=array();
$proto214["m_sql"] = "(jobfile.jobfile_status_id = \"3\") AND (jobfile.project_id !=5002 AND jobfile.project_id !=5027 AND jobfile.project_id !=5028 AND jobfile.project_id !=5029 AND jobfile.project_id !=5030 AND jobfile.project_id !=5370 AND jobfile.project_id !=5371 AND jobfile.project_id !=5031 AND jobfile.project_id !=5001 AND jobfile.project_id !=5879 AND jobfile.project_id !=5880 = True)";
$proto214["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.jobfile_status_id = \"3\") AND (jobfile.project_id !=5002 AND jobfile.project_id !=5027 AND jobfile.project_id !=5028 AND jobfile.project_id !=5029 AND jobfile.project_id !=5030 AND jobfile.project_id !=5370 AND jobfile.project_id !=5371 AND jobfile.project_id !=5031 AND jobfile.project_id !=5001 AND jobfile.project_id !=5879 AND jobfile.project_id !=5880 = True)"
));

$proto214["m_column"]=$obj;
$proto214["m_contained"] = array();
						$proto216=array();
$proto216["m_sql"] = "jobfile.jobfile_status_id = \"3\"";
$proto216["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto216["m_column"]=$obj;
$proto216["m_contained"] = array();
$proto216["m_strCase"] = "= \"3\"";
$proto216["m_havingmode"] = false;
$proto216["m_inBrackets"] = true;
$proto216["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto216);

			$proto214["m_contained"][]=$obj;
						$proto218=array();
$proto218["m_sql"] = "jobfile.project_id !=5002 AND jobfile.project_id !=5027 AND jobfile.project_id !=5028 AND jobfile.project_id !=5029 AND jobfile.project_id !=5030 AND jobfile.project_id !=5370 AND jobfile.project_id !=5371 AND jobfile.project_id !=5031 AND jobfile.project_id !=5001 AND jobfile.project_id !=5879 AND jobfile.project_id !=5880 = True";
$proto218["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.project_id !=5002 AND jobfile.project_id !=5027 AND jobfile.project_id !=5028 AND jobfile.project_id !=5029 AND jobfile.project_id !=5030 AND jobfile.project_id !=5370 AND jobfile.project_id !=5371 AND jobfile.project_id !=5031 AND jobfile.project_id !=5001 AND jobfile.project_id !=5879 AND jobfile.project_id !=5880 = True"
));

$proto218["m_column"]=$obj;
$proto218["m_contained"] = array();
						$proto220=array();
$proto220["m_sql"] = "jobfile.project_id !=5002";
$proto220["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto220["m_column"]=$obj;
$proto220["m_contained"] = array();
$proto220["m_strCase"] = "!=5002";
$proto220["m_havingmode"] = false;
$proto220["m_inBrackets"] = false;
$proto220["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto220);

			$proto218["m_contained"][]=$obj;
						$proto222=array();
$proto222["m_sql"] = "jobfile.project_id !=5027";
$proto222["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto222["m_column"]=$obj;
$proto222["m_contained"] = array();
$proto222["m_strCase"] = "!=5027";
$proto222["m_havingmode"] = false;
$proto222["m_inBrackets"] = false;
$proto222["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto222);

			$proto218["m_contained"][]=$obj;
						$proto224=array();
$proto224["m_sql"] = "jobfile.project_id !=5028";
$proto224["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto224["m_column"]=$obj;
$proto224["m_contained"] = array();
$proto224["m_strCase"] = "!=5028";
$proto224["m_havingmode"] = false;
$proto224["m_inBrackets"] = false;
$proto224["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto224);

			$proto218["m_contained"][]=$obj;
						$proto226=array();
$proto226["m_sql"] = "jobfile.project_id !=5029";
$proto226["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto226["m_column"]=$obj;
$proto226["m_contained"] = array();
$proto226["m_strCase"] = "!=5029";
$proto226["m_havingmode"] = false;
$proto226["m_inBrackets"] = false;
$proto226["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto226);

			$proto218["m_contained"][]=$obj;
						$proto228=array();
$proto228["m_sql"] = "jobfile.project_id !=5030";
$proto228["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto228["m_column"]=$obj;
$proto228["m_contained"] = array();
$proto228["m_strCase"] = "!=5030";
$proto228["m_havingmode"] = false;
$proto228["m_inBrackets"] = false;
$proto228["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto228);

			$proto218["m_contained"][]=$obj;
						$proto230=array();
$proto230["m_sql"] = "jobfile.project_id !=5370";
$proto230["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto230["m_column"]=$obj;
$proto230["m_contained"] = array();
$proto230["m_strCase"] = "!=5370";
$proto230["m_havingmode"] = false;
$proto230["m_inBrackets"] = false;
$proto230["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto230);

			$proto218["m_contained"][]=$obj;
						$proto232=array();
$proto232["m_sql"] = "jobfile.project_id !=5371";
$proto232["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto232["m_column"]=$obj;
$proto232["m_contained"] = array();
$proto232["m_strCase"] = "!=5371";
$proto232["m_havingmode"] = false;
$proto232["m_inBrackets"] = false;
$proto232["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto232);

			$proto218["m_contained"][]=$obj;
						$proto234=array();
$proto234["m_sql"] = "jobfile.project_id !=5031";
$proto234["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto234["m_column"]=$obj;
$proto234["m_contained"] = array();
$proto234["m_strCase"] = "!=5031";
$proto234["m_havingmode"] = false;
$proto234["m_inBrackets"] = false;
$proto234["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto234);

			$proto218["m_contained"][]=$obj;
						$proto236=array();
$proto236["m_sql"] = "jobfile.project_id !=5001";
$proto236["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto236["m_column"]=$obj;
$proto236["m_contained"] = array();
$proto236["m_strCase"] = "!=5001";
$proto236["m_havingmode"] = false;
$proto236["m_inBrackets"] = false;
$proto236["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto236);

			$proto218["m_contained"][]=$obj;
						$proto238=array();
$proto238["m_sql"] = "jobfile.project_id !=5879";
$proto238["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto238["m_column"]=$obj;
$proto238["m_contained"] = array();
$proto238["m_strCase"] = "!=5879";
$proto238["m_havingmode"] = false;
$proto238["m_inBrackets"] = false;
$proto238["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto238);

			$proto218["m_contained"][]=$obj;
						$proto240=array();
$proto240["m_sql"] = "jobfile.project_id !=5880 = True";
$proto240["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto240["m_column"]=$obj;
$proto240["m_contained"] = array();
$proto240["m_strCase"] = "!=5880 = True";
$proto240["m_havingmode"] = false;
$proto240["m_inBrackets"] = false;
$proto240["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto240);

			$proto218["m_contained"][]=$obj;
$proto218["m_strCase"] = "";
$proto218["m_havingmode"] = false;
$proto218["m_inBrackets"] = true;
$proto218["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto218);

			$proto214["m_contained"][]=$obj;
$proto214["m_strCase"] = "";
$proto214["m_havingmode"] = false;
$proto214["m_inBrackets"] = false;
$proto214["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto214);

$proto213["m_where"] = $obj;
$proto242=array();
$proto242["m_sql"] = "";
$proto242["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto242["m_column"]=$obj;
$proto242["m_contained"] = array();
$proto242["m_strCase"] = "";
$proto242["m_havingmode"] = false;
$proto242["m_inBrackets"] = false;
$proto242["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto242);

$proto213["m_having"] = $obj;
$proto213["m_fieldlist"] = array();
						$proto244=array();
			$proto245=array();
$proto245["m_functiontype"] = "SQLF_COUNT";
$proto245["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto245["m_arguments"][]=$obj;
$proto245["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto245);

$proto244["m_sql"] = "COUNT(*)";
$proto244["m_srcTableName"] = "files_menu_count";
$proto244["m_expr"]=$obj;
$proto244["m_alias"] = "c1";
$obj = new SQLFieldListItem($proto244);

$proto213["m_fieldlist"][]=$obj;
$proto213["m_fromlist"] = array();
												$proto247=array();
$proto247["m_link"] = "SQLL_MAIN";
			$proto248=array();
$proto248["m_strName"] = "jobfile";
$proto248["m_srcTableName"] = "files_menu_count";
$proto248["m_columns"] = array();
$proto248["m_columns"][] = "jobfile_id";
$proto248["m_columns"][] = "file_url";
$proto248["m_columns"][] = "client_id";
$proto248["m_columns"][] = "work_id";
$proto248["m_columns"][] = "job_id";
$proto248["m_columns"][] = "project_id";
$proto248["m_columns"][] = "folder_name";
$proto248["m_columns"][] = "filename";
$proto248["m_columns"][] = "jobfile_type";
$proto248["m_columns"][] = "jobfile_note";
$proto248["m_columns"][] = "jobfile_status_id";
$proto248["m_columns"][] = "downloader_id";
$proto248["m_columns"][] = "distributor_id";
$proto248["m_columns"][] = "designer_id";
$proto248["m_columns"][] = "qc_id";
$proto248["m_columns"][] = "uploader_id";
$proto248["m_columns"][] = "notifier_id";
$proto248["m_columns"][] = "rejector_id";
$proto248["m_columns"][] = "download_date";
$proto248["m_columns"][] = "distribute_date";
$proto248["m_columns"][] = "start_date";
$proto248["m_columns"][] = "end_date";
$proto248["m_columns"][] = "designer_time";
$proto248["m_columns"][] = "qcstart_date";
$proto248["m_columns"][] = "qcend_date";
$proto248["m_columns"][] = "qc_time";
$proto248["m_columns"][] = "upload_date";
$proto248["m_columns"][] = "notify_date";
$proto248["m_columns"][] = "reject_date";
$proto248["m_columns"][] = "reject_reason";
$proto248["m_columns"][] = "designer2_id";
$proto248["m_columns"][] = "start2_date";
$proto248["m_columns"][] = "end2_date";
$proto248["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto248);

$proto247["m_table"] = $obj;
$proto247["m_sql"] = "jobfile";
$proto247["m_alias"] = "";
$proto247["m_srcTableName"] = "files_menu_count";
$proto249=array();
$proto249["m_sql"] = "";
$proto249["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto249["m_column"]=$obj;
$proto249["m_contained"] = array();
$proto249["m_strCase"] = "";
$proto249["m_havingmode"] = false;
$proto249["m_inBrackets"] = false;
$proto249["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto249);

$proto247["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto247);

$proto213["m_fromlist"][]=$obj;
$proto213["m_groupby"] = array();
$proto213["m_orderby"] = array();
$proto213["m_srcTableName"]="files_menu_count";		
$obj = new SQLQuery($proto213);

$proto212["m_sql"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id = \"3\") AND (jobfile.project_id !=5002 AND jobfile.project_id !=5027 AND jobfile.project_id !=5028 AND jobfile.project_id !=5029 AND jobfile.project_id !=5030 AND jobfile.project_id !=5370 AND jobfile.project_id !=5371 AND jobfile.project_id !=5031 AND jobfile.project_id !=5001 AND jobfile.project_id !=5879 AND jobfile.project_id !=5880 = True)  )";
$proto212["m_srcTableName"] = "files_menu_count";
$proto212["m_expr"]=$obj;
$proto212["m_alias"] = "Need_to_Designer_Work_Others_Files";
$obj = new SQLFieldListItem($proto212);

$proto0["m_fieldlist"][]=$obj;
						$proto251=array();
			$proto252=array();
$proto252["m_strHead"] = "select";
$proto252["m_strFieldList"] = "COUNT(*) AS c1";
$proto252["m_strFrom"] = "FROM jobfile";
$proto252["m_strWhere"] = "(jobfile.jobfile_status_id != \"7\") AND ((project_id !=5002 AND project_id !=5027 AND project_id !=5028 AND project_id !=5029 AND project_id !=5030 AND project_id !=5370 AND project_id !=5371 AND project_id !=5031 AND project_id !=5001 AND project_id !=5879 AND project_id !=5880) = True)";
$proto252["m_strOrderBy"] = "";
$proto252["m_strTail"] = "";
			$proto252["cipherer"] = null;
$proto253=array();
$proto253["m_sql"] = "(jobfile.jobfile_status_id != \"7\") AND ((project_id !=5002 AND project_id !=5027 AND project_id !=5028 AND project_id !=5029 AND project_id !=5030 AND project_id !=5370 AND project_id !=5371 AND project_id !=5031 AND project_id !=5001 AND project_id !=5879 AND project_id !=5880) = True)";
$proto253["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.jobfile_status_id != \"7\") AND ((project_id !=5002 AND project_id !=5027 AND project_id !=5028 AND project_id !=5029 AND project_id !=5030 AND project_id !=5370 AND project_id !=5371 AND project_id !=5031 AND project_id !=5001 AND project_id !=5879 AND project_id !=5880) = True)"
));

$proto253["m_column"]=$obj;
$proto253["m_contained"] = array();
						$proto255=array();
$proto255["m_sql"] = "jobfile.jobfile_status_id != \"7\"";
$proto255["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto255["m_column"]=$obj;
$proto255["m_contained"] = array();
$proto255["m_strCase"] = "!= \"7\"";
$proto255["m_havingmode"] = false;
$proto255["m_inBrackets"] = true;
$proto255["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto255);

			$proto253["m_contained"][]=$obj;
						$proto257=array();
$proto257["m_sql"] = "(project_id !=5002 AND project_id !=5027 AND project_id !=5028 AND project_id !=5029 AND project_id !=5030 AND project_id !=5370 AND project_id !=5371 AND project_id !=5031 AND project_id !=5001 AND project_id !=5879 AND project_id !=5880) = True";
$proto257["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "(project_id !=5002 AND project_id !=5027 AND project_id !=5028 AND project_id !=5029 AND project_id !=5030 AND project_id !=5370 AND project_id !=5371 AND project_id !=5031 AND project_id !=5001 AND project_id !=5879 AND project_id !=5880)"
));

$proto257["m_column"]=$obj;
$proto257["m_contained"] = array();
$proto257["m_strCase"] = "= True";
$proto257["m_havingmode"] = false;
$proto257["m_inBrackets"] = true;
$proto257["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto257);

			$proto253["m_contained"][]=$obj;
$proto253["m_strCase"] = "";
$proto253["m_havingmode"] = false;
$proto253["m_inBrackets"] = false;
$proto253["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto253);

$proto252["m_where"] = $obj;
$proto259=array();
$proto259["m_sql"] = "";
$proto259["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto259["m_column"]=$obj;
$proto259["m_contained"] = array();
$proto259["m_strCase"] = "";
$proto259["m_havingmode"] = false;
$proto259["m_inBrackets"] = false;
$proto259["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto259);

$proto252["m_having"] = $obj;
$proto252["m_fieldlist"] = array();
						$proto261=array();
			$proto262=array();
$proto262["m_functiontype"] = "SQLF_COUNT";
$proto262["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto262["m_arguments"][]=$obj;
$proto262["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto262);

$proto261["m_sql"] = "COUNT(*)";
$proto261["m_srcTableName"] = "files_menu_count";
$proto261["m_expr"]=$obj;
$proto261["m_alias"] = "c1";
$obj = new SQLFieldListItem($proto261);

$proto252["m_fieldlist"][]=$obj;
$proto252["m_fromlist"] = array();
												$proto264=array();
$proto264["m_link"] = "SQLL_MAIN";
			$proto265=array();
$proto265["m_strName"] = "jobfile";
$proto265["m_srcTableName"] = "files_menu_count";
$proto265["m_columns"] = array();
$proto265["m_columns"][] = "jobfile_id";
$proto265["m_columns"][] = "file_url";
$proto265["m_columns"][] = "client_id";
$proto265["m_columns"][] = "work_id";
$proto265["m_columns"][] = "job_id";
$proto265["m_columns"][] = "project_id";
$proto265["m_columns"][] = "folder_name";
$proto265["m_columns"][] = "filename";
$proto265["m_columns"][] = "jobfile_type";
$proto265["m_columns"][] = "jobfile_note";
$proto265["m_columns"][] = "jobfile_status_id";
$proto265["m_columns"][] = "downloader_id";
$proto265["m_columns"][] = "distributor_id";
$proto265["m_columns"][] = "designer_id";
$proto265["m_columns"][] = "qc_id";
$proto265["m_columns"][] = "uploader_id";
$proto265["m_columns"][] = "notifier_id";
$proto265["m_columns"][] = "rejector_id";
$proto265["m_columns"][] = "download_date";
$proto265["m_columns"][] = "distribute_date";
$proto265["m_columns"][] = "start_date";
$proto265["m_columns"][] = "end_date";
$proto265["m_columns"][] = "designer_time";
$proto265["m_columns"][] = "qcstart_date";
$proto265["m_columns"][] = "qcend_date";
$proto265["m_columns"][] = "qc_time";
$proto265["m_columns"][] = "upload_date";
$proto265["m_columns"][] = "notify_date";
$proto265["m_columns"][] = "reject_date";
$proto265["m_columns"][] = "reject_reason";
$proto265["m_columns"][] = "designer2_id";
$proto265["m_columns"][] = "start2_date";
$proto265["m_columns"][] = "end2_date";
$proto265["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto265);

$proto264["m_table"] = $obj;
$proto264["m_sql"] = "jobfile";
$proto264["m_alias"] = "";
$proto264["m_srcTableName"] = "files_menu_count";
$proto266=array();
$proto266["m_sql"] = "";
$proto266["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto266["m_column"]=$obj;
$proto266["m_contained"] = array();
$proto266["m_strCase"] = "";
$proto266["m_havingmode"] = false;
$proto266["m_inBrackets"] = false;
$proto266["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto266);

$proto264["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto264);

$proto252["m_fromlist"][]=$obj;
$proto252["m_groupby"] = array();
$proto252["m_orderby"] = array();
$proto252["m_srcTableName"]="files_menu_count";		
$obj = new SQLQuery($proto252);

$proto251["m_sql"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id != \"7\") AND ((project_id !=5002 AND project_id !=5027 AND project_id !=5028 AND project_id !=5029 AND project_id !=5030 AND project_id !=5370 AND project_id !=5371 AND project_id !=5031 AND project_id !=5001 AND project_id !=5879 AND project_id !=5880) = True)  )";
$proto251["m_srcTableName"] = "files_menu_count";
$proto251["m_expr"]=$obj;
$proto251["m_alias"] = "Need_to_Work_Others_Files";
$obj = new SQLFieldListItem($proto251);

$proto0["m_fieldlist"][]=$obj;
						$proto268=array();
			$proto269=array();
$proto269["m_strHead"] = "select";
$proto269["m_strFieldList"] = "COUNT(*) AS c1";
$proto269["m_strFrom"] = "FROM jobfile";
$proto269["m_strWhere"] = "(jobfile.jobfile_status_id = \"14\") AND (jobfile.project_id !=5002 AND jobfile.project_id !=5027 AND jobfile.project_id !=5028 AND jobfile.project_id !=5029 AND jobfile.project_id !=5030 AND jobfile.project_id !=5370 AND jobfile.project_id !=5371 AND jobfile.project_id !=5031 AND jobfile.project_id !=5001 AND jobfile.project_id !=5879 AND jobfile.project_id !=5880 = True)";
$proto269["m_strOrderBy"] = "";
$proto269["m_strTail"] = "";
			$proto269["cipherer"] = null;
$proto270=array();
$proto270["m_sql"] = "(jobfile.jobfile_status_id = \"14\") AND (jobfile.project_id !=5002 AND jobfile.project_id !=5027 AND jobfile.project_id !=5028 AND jobfile.project_id !=5029 AND jobfile.project_id !=5030 AND jobfile.project_id !=5370 AND jobfile.project_id !=5371 AND jobfile.project_id !=5031 AND jobfile.project_id !=5001 AND jobfile.project_id !=5879 AND jobfile.project_id !=5880 = True)";
$proto270["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.jobfile_status_id = \"14\") AND (jobfile.project_id !=5002 AND jobfile.project_id !=5027 AND jobfile.project_id !=5028 AND jobfile.project_id !=5029 AND jobfile.project_id !=5030 AND jobfile.project_id !=5370 AND jobfile.project_id !=5371 AND jobfile.project_id !=5031 AND jobfile.project_id !=5001 AND jobfile.project_id !=5879 AND jobfile.project_id !=5880 = True)"
));

$proto270["m_column"]=$obj;
$proto270["m_contained"] = array();
						$proto272=array();
$proto272["m_sql"] = "jobfile.jobfile_status_id = \"14\"";
$proto272["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "jobfile_status_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto272["m_column"]=$obj;
$proto272["m_contained"] = array();
$proto272["m_strCase"] = "= \"14\"";
$proto272["m_havingmode"] = false;
$proto272["m_inBrackets"] = true;
$proto272["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto272);

			$proto270["m_contained"][]=$obj;
						$proto274=array();
$proto274["m_sql"] = "jobfile.project_id !=5002 AND jobfile.project_id !=5027 AND jobfile.project_id !=5028 AND jobfile.project_id !=5029 AND jobfile.project_id !=5030 AND jobfile.project_id !=5370 AND jobfile.project_id !=5371 AND jobfile.project_id !=5031 AND jobfile.project_id !=5001 AND jobfile.project_id !=5879 AND jobfile.project_id !=5880 = True";
$proto274["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.project_id !=5002 AND jobfile.project_id !=5027 AND jobfile.project_id !=5028 AND jobfile.project_id !=5029 AND jobfile.project_id !=5030 AND jobfile.project_id !=5370 AND jobfile.project_id !=5371 AND jobfile.project_id !=5031 AND jobfile.project_id !=5001 AND jobfile.project_id !=5879 AND jobfile.project_id !=5880 = True"
));

$proto274["m_column"]=$obj;
$proto274["m_contained"] = array();
						$proto276=array();
$proto276["m_sql"] = "jobfile.project_id !=5002";
$proto276["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto276["m_column"]=$obj;
$proto276["m_contained"] = array();
$proto276["m_strCase"] = "!=5002";
$proto276["m_havingmode"] = false;
$proto276["m_inBrackets"] = false;
$proto276["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto276);

			$proto274["m_contained"][]=$obj;
						$proto278=array();
$proto278["m_sql"] = "jobfile.project_id !=5027";
$proto278["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto278["m_column"]=$obj;
$proto278["m_contained"] = array();
$proto278["m_strCase"] = "!=5027";
$proto278["m_havingmode"] = false;
$proto278["m_inBrackets"] = false;
$proto278["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto278);

			$proto274["m_contained"][]=$obj;
						$proto280=array();
$proto280["m_sql"] = "jobfile.project_id !=5028";
$proto280["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto280["m_column"]=$obj;
$proto280["m_contained"] = array();
$proto280["m_strCase"] = "!=5028";
$proto280["m_havingmode"] = false;
$proto280["m_inBrackets"] = false;
$proto280["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto280);

			$proto274["m_contained"][]=$obj;
						$proto282=array();
$proto282["m_sql"] = "jobfile.project_id !=5029";
$proto282["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto282["m_column"]=$obj;
$proto282["m_contained"] = array();
$proto282["m_strCase"] = "!=5029";
$proto282["m_havingmode"] = false;
$proto282["m_inBrackets"] = false;
$proto282["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto282);

			$proto274["m_contained"][]=$obj;
						$proto284=array();
$proto284["m_sql"] = "jobfile.project_id !=5030";
$proto284["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto284["m_column"]=$obj;
$proto284["m_contained"] = array();
$proto284["m_strCase"] = "!=5030";
$proto284["m_havingmode"] = false;
$proto284["m_inBrackets"] = false;
$proto284["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto284);

			$proto274["m_contained"][]=$obj;
						$proto286=array();
$proto286["m_sql"] = "jobfile.project_id !=5370";
$proto286["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto286["m_column"]=$obj;
$proto286["m_contained"] = array();
$proto286["m_strCase"] = "!=5370";
$proto286["m_havingmode"] = false;
$proto286["m_inBrackets"] = false;
$proto286["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto286);

			$proto274["m_contained"][]=$obj;
						$proto288=array();
$proto288["m_sql"] = "jobfile.project_id !=5371";
$proto288["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto288["m_column"]=$obj;
$proto288["m_contained"] = array();
$proto288["m_strCase"] = "!=5371";
$proto288["m_havingmode"] = false;
$proto288["m_inBrackets"] = false;
$proto288["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto288);

			$proto274["m_contained"][]=$obj;
						$proto290=array();
$proto290["m_sql"] = "jobfile.project_id !=5031";
$proto290["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto290["m_column"]=$obj;
$proto290["m_contained"] = array();
$proto290["m_strCase"] = "!=5031";
$proto290["m_havingmode"] = false;
$proto290["m_inBrackets"] = false;
$proto290["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto290);

			$proto274["m_contained"][]=$obj;
						$proto292=array();
$proto292["m_sql"] = "jobfile.project_id !=5001";
$proto292["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto292["m_column"]=$obj;
$proto292["m_contained"] = array();
$proto292["m_strCase"] = "!=5001";
$proto292["m_havingmode"] = false;
$proto292["m_inBrackets"] = false;
$proto292["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto292);

			$proto274["m_contained"][]=$obj;
						$proto294=array();
$proto294["m_sql"] = "jobfile.project_id !=5879";
$proto294["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto294["m_column"]=$obj;
$proto294["m_contained"] = array();
$proto294["m_strCase"] = "!=5879";
$proto294["m_havingmode"] = false;
$proto294["m_inBrackets"] = false;
$proto294["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto294);

			$proto274["m_contained"][]=$obj;
						$proto296=array();
$proto296["m_sql"] = "jobfile.project_id !=5880 = True";
$proto296["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "files_menu_count"
));

$proto296["m_column"]=$obj;
$proto296["m_contained"] = array();
$proto296["m_strCase"] = "!=5880 = True";
$proto296["m_havingmode"] = false;
$proto296["m_inBrackets"] = false;
$proto296["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto296);

			$proto274["m_contained"][]=$obj;
$proto274["m_strCase"] = "";
$proto274["m_havingmode"] = false;
$proto274["m_inBrackets"] = true;
$proto274["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto274);

			$proto270["m_contained"][]=$obj;
$proto270["m_strCase"] = "";
$proto270["m_havingmode"] = false;
$proto270["m_inBrackets"] = false;
$proto270["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto270);

$proto269["m_where"] = $obj;
$proto298=array();
$proto298["m_sql"] = "";
$proto298["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto298["m_column"]=$obj;
$proto298["m_contained"] = array();
$proto298["m_strCase"] = "";
$proto298["m_havingmode"] = false;
$proto298["m_inBrackets"] = false;
$proto298["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto298);

$proto269["m_having"] = $obj;
$proto269["m_fieldlist"] = array();
						$proto300=array();
			$proto301=array();
$proto301["m_functiontype"] = "SQLF_COUNT";
$proto301["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto301["m_arguments"][]=$obj;
$proto301["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto301);

$proto300["m_sql"] = "COUNT(*)";
$proto300["m_srcTableName"] = "files_menu_count";
$proto300["m_expr"]=$obj;
$proto300["m_alias"] = "c1";
$obj = new SQLFieldListItem($proto300);

$proto269["m_fieldlist"][]=$obj;
$proto269["m_fromlist"] = array();
												$proto303=array();
$proto303["m_link"] = "SQLL_MAIN";
			$proto304=array();
$proto304["m_strName"] = "jobfile";
$proto304["m_srcTableName"] = "files_menu_count";
$proto304["m_columns"] = array();
$proto304["m_columns"][] = "jobfile_id";
$proto304["m_columns"][] = "file_url";
$proto304["m_columns"][] = "client_id";
$proto304["m_columns"][] = "work_id";
$proto304["m_columns"][] = "job_id";
$proto304["m_columns"][] = "project_id";
$proto304["m_columns"][] = "folder_name";
$proto304["m_columns"][] = "filename";
$proto304["m_columns"][] = "jobfile_type";
$proto304["m_columns"][] = "jobfile_note";
$proto304["m_columns"][] = "jobfile_status_id";
$proto304["m_columns"][] = "downloader_id";
$proto304["m_columns"][] = "distributor_id";
$proto304["m_columns"][] = "designer_id";
$proto304["m_columns"][] = "qc_id";
$proto304["m_columns"][] = "uploader_id";
$proto304["m_columns"][] = "notifier_id";
$proto304["m_columns"][] = "rejector_id";
$proto304["m_columns"][] = "download_date";
$proto304["m_columns"][] = "distribute_date";
$proto304["m_columns"][] = "start_date";
$proto304["m_columns"][] = "end_date";
$proto304["m_columns"][] = "designer_time";
$proto304["m_columns"][] = "qcstart_date";
$proto304["m_columns"][] = "qcend_date";
$proto304["m_columns"][] = "qc_time";
$proto304["m_columns"][] = "upload_date";
$proto304["m_columns"][] = "notify_date";
$proto304["m_columns"][] = "reject_date";
$proto304["m_columns"][] = "reject_reason";
$proto304["m_columns"][] = "designer2_id";
$proto304["m_columns"][] = "start2_date";
$proto304["m_columns"][] = "end2_date";
$proto304["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto304);

$proto303["m_table"] = $obj;
$proto303["m_sql"] = "jobfile";
$proto303["m_alias"] = "";
$proto303["m_srcTableName"] = "files_menu_count";
$proto305=array();
$proto305["m_sql"] = "";
$proto305["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto305["m_column"]=$obj;
$proto305["m_contained"] = array();
$proto305["m_strCase"] = "";
$proto305["m_havingmode"] = false;
$proto305["m_inBrackets"] = false;
$proto305["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto305);

$proto303["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto303);

$proto269["m_fromlist"][]=$obj;
$proto269["m_groupby"] = array();
$proto269["m_orderby"] = array();
$proto269["m_srcTableName"]="files_menu_count";		
$obj = new SQLQuery($proto269);

$proto268["m_sql"] = "(select  COUNT(*) AS c1  FROM jobfile  WHERE (jobfile.jobfile_status_id = \"14\") AND (jobfile.project_id !=5002 AND jobfile.project_id !=5027 AND jobfile.project_id !=5028 AND jobfile.project_id !=5029 AND jobfile.project_id !=5030 AND jobfile.project_id !=5370 AND jobfile.project_id !=5371 AND jobfile.project_id !=5031 AND jobfile.project_id !=5001 AND jobfile.project_id !=5879 AND jobfile.project_id !=5880 = True)  )";
$proto268["m_srcTableName"] = "files_menu_count";
$proto268["m_expr"]=$obj;
$proto268["m_alias"] = "Need_to_QC_Others_Files";
$obj = new SQLFieldListItem($proto268);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="files_menu_count";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_files_menu_count = createSqlQuery_files_menu_count();


	
												
	
$tdatafiles_menu_count[".sqlquery"] = $queryData_files_menu_count;

$tableEvents["files_menu_count"] = new eventsBase;
$tdatafiles_menu_count[".hasEvents"] = false;

?>