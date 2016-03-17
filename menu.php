<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");


if(!isLogged())
{
	HeaderRedirect("login");
	return;
}

if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}




$layout = new TLayout("vApplication", "Coral1vApplication", "MobilevApplication");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["menu"] = array();
$layout->container_properties["menu"] = array(  );
$layout->containers["menu"][] = array("name"=>"login_menu", 
	"block"=>"loggedas_block", "substyle"=>2  );

$layout->skins["menu"] = "1";

$layout->blocks["top"][] = "menu";
$layout->containers["menu_1"] = array();
$layout->container_properties["menu_1"] = array(  );
$layout->containers["menu_1"][] = array("name"=>"hmenu", 
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["menu_1"] = "1";

$layout->blocks["top"][] = "menu_1";
$layout->containers["menu_2"] = array();
$layout->container_properties["menu_2"] = array(  );
$layout->containers["menu_2"][] = array("name"=>"hmenu", 
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["menu_2"] = "1";

$layout->blocks["top"][] = "menu_2";
$layout->containers["menu_3"] = array();
$layout->container_properties["menu_3"] = array(  );
$layout->containers["menu_3"][] = array("name"=>"hmenu", 
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["menu_3"] = "1";

$layout->blocks["top"][] = "menu_3";
$layout->containers["menu_4"] = array();
$layout->container_properties["menu_4"] = array(  );
$layout->containers["menu_4"][] = array("name"=>"hmenu", 
	"block"=>"menu_block", "substyle"=>1  );

$layout->containers["menu_4"][] = array("name"=>"hmenu", 
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["menu_4"] = "1";

$layout->blocks["top"][] = "menu_4";
$page_layouts["menu"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button1");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/job_events.php"));
$tableEvents["job"] = new eventclass_job;
include_once(getabspath("include/jobfile_events.php"));
$tableEvents["jobfile"] = new eventclass_jobfile;
include_once(getabspath("include/user_events.php"));
$tableEvents["user"] = new eventclass_user;
include_once(getabspath("include/File_Distribution_events.php"));
$tableEvents["File Distribution"] = new eventclass_File_Distribution;
include_once(getabspath("include/Download_Job_events.php"));
$tableEvents["Download Job"] = new eventclass_Download_Job;
include_once(getabspath("include/Pending_Jobs_events.php"));
$tableEvents["Pending Jobs"] = new eventclass_Pending_Jobs;
include_once(getabspath("include/pdf_events.php"));
$tableEvents["pdf"] = new eventclass_pdf;
include_once(getabspath("include/Designer_Worksheet_events.php"));
$tableEvents["Designer Worksheet"] = new eventclass_Designer_Worksheet;
include_once(getabspath("include/Designer_Filesheet_events.php"));
$tableEvents["Designer Filesheet"] = new eventclass_Designer_Filesheet;
include_once(getabspath("include/QC_Worksheet_events.php"));
$tableEvents["QC Worksheet"] = new eventclass_QC_Worksheet;
include_once(getabspath("include/QC_Filesheet_events.php"));
$tableEvents["QC Filesheet"] = new eventclass_QC_Filesheet;
include_once(getabspath("include/All_Jobs_events.php"));
$tableEvents["All Jobs"] = new eventclass_All_Jobs;
include_once(getabspath("include/Users_events.php"));
$tableEvents["Users"] = new eventclass_Users;
include_once(getabspath("include/Designer_Level_2_events.php"));
$tableEvents["Designer Level 2"] = new eventclass_Designer_Level_2;
include_once(getabspath("include/Designer_Level2_Filesheet_events.php"));
$tableEvents["Designer Level2 Filesheet"] = new eventclass_Designer_Level2_Filesheet;
include_once(getabspath("include/Urgent_Jobs_events.php"));
$tableEvents["Urgent Jobs"] = new eventclass_Urgent_Jobs;
include_once(getabspath("include/Deadline_Missed_events.php"));
$tableEvents["Deadline Missed"] = new eventclass_Deadline_Missed;
include_once(getabspath("include/Need_to_Accept_events.php"));
$tableEvents["Need to Accept"] = new eventclass_Need_to_Accept;
include_once(getabspath("include/Need_Notify_events.php"));
$tableEvents["Need Notify"] = new eventclass_Need_Notify;
include_once(getabspath("include/Need_Download_events.php"));
$tableEvents["Need Download"] = new eventclass_Need_Download;
include_once(getabspath("include/Need_QC_events.php"));
$tableEvents["Need QC"] = new eventclass_Need_QC;
include_once(getabspath("include/Need_Upload_events.php"));
$tableEvents["Need Upload"] = new eventclass_Need_Upload;
include_once(getabspath("include/Pending_14704_events.php"));
$tableEvents["Pending 14704"] = new eventclass_Pending_14704;
include_once(getabspath("include/14704_Need_QC_events.php"));
$tableEvents["14704 Need QC"] = new eventclass_14704_Need_QC;
include_once(getabspath("include/14704_Need_Upload_events.php"));
$tableEvents["14704 Need Upload"] = new eventclass_14704_Need_Upload;
include_once(getabspath("include/14704_Need_Download_events.php"));
$tableEvents["14704 Need Download"] = new eventclass_14704_Need_Download;
include_once(getabspath("include/14704_Need_Notify_events.php"));
$tableEvents["14704 Need Notify"] = new eventclass_14704_Need_Notify;
include_once(getabspath("include/14704_Need_Accept_events.php"));
$tableEvents["14704 Need Accept"] = new eventclass_14704_Need_Accept;
include_once(getabspath("include/14704_Deadline_Missed_events.php"));
$tableEvents["14704 Deadline Missed"] = new eventclass_14704_Deadline_Missed;
include_once(getabspath("include/14704_Urgent_Jobs_events.php"));
$tableEvents["14704 Urgent Jobs"] = new eventclass_14704_Urgent_Jobs;
include_once(getabspath("include/File_Reject_events.php"));
$tableEvents["File Reject"] = new eventclass_File_Reject;
include_once(getabspath("include/custompages_events.php"));
$tableEvents["custompages"] = new eventclass_custompages;
include_once(getabspath("include/14704_Daily_Report_Full_events.php"));
$tableEvents["14704 Daily Report Full"] = new eventclass_14704_Daily_Report_Full;
include_once(getabspath("include/rejected_jobfile_events.php"));
$tableEvents["rejected_jobfile"] = new eventclass_rejected_jobfile;
include_once(getabspath("include/14704_Designer_Report_events.php"));
$tableEvents["14704 Designer Report"] = new eventclass_14704_Designer_Report;
include_once(getabspath("include/Correction_Files_events.php"));
$tableEvents["Correction Files"] = new eventclass_Correction_Files;
include_once(getabspath("include/14704_Daily_Report_Designers_events.php"));
$tableEvents["14704 Daily Report Designers"] = new eventclass_14704_Daily_Report_Designers;
include_once(getabspath("include/14704_Daily_Report__Team_events.php"));
$tableEvents["14704 Daily Report  Team"] = new eventclass_14704_Daily_Report__Team;
include_once(getabspath("include/Delected_Jobs_events.php"));
$tableEvents["Delected Jobs"] = new eventclass_Delected_Jobs;
include_once(getabspath("include/Pending_18442_events.php"));
$tableEvents["Pending 18442"] = new eventclass_Pending_18442;
include_once(getabspath("include/18442_Deadline_Missed_events.php"));
$tableEvents["18442 Deadline Missed"] = new eventclass_18442_Deadline_Missed;
include_once(getabspath("include/18442_Urgent_Jobs_events.php"));
$tableEvents["18442 Urgent Jobs"] = new eventclass_18442_Urgent_Jobs;
include_once(getabspath("include/18442_Need_Notify_events.php"));
$tableEvents["18442 Need Notify"] = new eventclass_18442_Need_Notify;
include_once(getabspath("include/18442_Need_Upload_events.php"));
$tableEvents["18442 Need Upload"] = new eventclass_18442_Need_Upload;
include_once(getabspath("include/18442_Need_QC_events.php"));
$tableEvents["18442 Need QC"] = new eventclass_18442_Need_QC;
include_once(getabspath("include/18442_Need_Download_events.php"));
$tableEvents["18442 Need Download"] = new eventclass_18442_Need_Download;
include_once(getabspath("include/18442_Need_Accept_events.php"));
$tableEvents["18442 Need Accept"] = new eventclass_18442_Need_Accept;
include_once(getabspath("include/Display_events.php"));
$tableEvents["Display"] = new eventclass_Display;
include_once(getabspath("include/Emailer_events.php"));
$tableEvents["Emailer"] = new eventclass_Emailer;
include_once(getabspath("include/user1_events.php"));
$tableEvents["user1"] = new eventclass_user1;
include_once(getabspath("include/rejected_job_events.php"));
$tableEvents["rejected_job"] = new eventclass_rejected_job;
include_once(getabspath("include/Download_Reject_Job_events.php"));
$tableEvents["Download Reject Job"] = new eventclass_Download_Reject_Job;
include_once(getabspath("include/rejected_jobfile2_events.php"));
$tableEvents["rejected_jobfile2"] = new eventclass_rejected_jobfile2;
include_once(getabspath("include/File_Distribution_Rejected_events.php"));
$tableEvents["File Distribution Rejected"] = new eventclass_File_Distribution_Rejected;
include_once(getabspath("include/Designer_Level_2_for_Correction_events.php"));
$tableEvents["Designer Level 2 for Correction"] = new eventclass_Designer_Level_2_for_Correction;
include_once(getabspath("include/Designer_Level2_Filesheet_for_Correction_events.php"));
$tableEvents["Designer Level2 Filesheet for Correction"] = new eventclass_Designer_Level2_Filesheet_for_Correction;
include_once(getabspath("include/QC_Worksheet_for_Correction_events.php"));
$tableEvents["QC Worksheet for Correction"] = new eventclass_QC_Worksheet_for_Correction;
include_once(getabspath("include/QC_Filesheet_for_Correction_events.php"));
$tableEvents["QC Filesheet for Correction"] = new eventclass_QC_Filesheet_for_Correction;
include_once(getabspath("include/not_for_use_events.php"));
$tableEvents["not for use"] = new eventclass_not_for_use;
include_once(getabspath("include/Backup_Notified_Jobs_events.php"));
$tableEvents["Backup Notified Jobs"] = new eventclass_Backup_Notified_Jobs;

$xt = new Xtempl();

$id = postvalue("id")!=="" ? postvalue("id") : 1;

//array of params for classes
$params = array();
$params["id"] = $id; 
$params["xt"] = &$xt;
$params["tName"] = NOT_TABLE_BASED_TNAME;
$params["pageType"] = PAGE_MENU;
$params["templatefile"] = "menu.htm";
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);
$pageObject->init();

// button handlers file names

//	Before Process event
if($globalEvents->exists("BeforeProcessMenu"))
	$globalEvents->BeforeProcessMenu( $pageObject );

$pageObject->body["begin"] .= GetBaseScriptsForPage(false);

$pageObject->addCommonJs();

//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();
$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";</script>";
$pageObject->body["end"] .= "<script type=\"text/javascript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>";
$pageObject->body["end"] .= '<script>'.$pageObject->PrepareJS()."</script>";
$xt->assignbyref("body",$pageObject->body);

// The user might rewrite $_SESSION["UserName"] value with HTML code in an event, so no encoding will be performed while printing this value.
$xt->assign("username", $_SESSION["UserName"]);
$xt->assign("changepwd_link",$_SESSION["AccessLevel"] != ACCESS_LEVEL_GUEST && $_SESSION["fromFacebook"] == false);
$xt->assign("changepwdlink_attrs","onclick=\"window.location.href='".GetTableLink("changepwd")."';return false;\"");

$xt->assign("logoutlink_attrs","onclick=\"window.location.href='".GetTableLink("login", "", "a=logout")."';return false;\"");

$xt->assign("guestloginlink_attrs","onclick=\"window.location.href='".GetTableLink("login")."';return false;\"");

$xt->assign("loggedas_block", !isLoggedAsGuest());
$xt->assign("loggedas_message", !isLoggedAsGuest());

$xt->assign("logout_link", true);
$xt->assign("guestloginbutton", isLoggedAsGuest());
$xt->assign("logoutbutton", isSingleSign() && !isLoggedAsGuest());

if( IsAdmin() )
	$xt->assign("adminarea_link", true);

// get redirect location for menu page
$redirect = $pageObject->getRedirectForMenuPage();
if($redirect)
{
	header("Location: ".$redirect); 
	exit();
}

$xt->assign("menu_block",true);
if($globalEvents->exists("BeforeShowMenu"))
	$globalEvents->BeforeShowMenu($xt, $pageObject->templatefile, $pageObject);

$pageObject->display($pageObject->templatefile);
?>