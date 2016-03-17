<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/searchclause.php");
require_once('include/xtempl.php');
require_once('classes/dashboardpage.php');

add_nocache_headers();

require_once("include/Dashboard_variables.php");

if( !Security::processPageSecurity( $strtablename, 'S' ) )
	return;




$layout = new TLayout("dashboard1", "Coral1vApplication", "MobilevApplication");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["dash"] = array();
$layout->container_properties["dash"] = array(  );
$layout->containers["dash"][] = array("name"=>"dashboard", 
	"block"=>"", "substyle"=>1  );

$layout->skins["dash"] = "";

$layout->blocks["center"][] = "dash";
$page_layouts["Dashboard_dashboard"] = $layout;

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



$xt = new Xtempl();
$id = postvalue("id");
$mode = postvalue("mode");
$id = $id != "" ? $id : 1;

//array of params for classes
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["tName"] = $strTableName;
$params["mode"] = $mode;
$params["pageType"] = PAGE_DASHBOARD;
$params["templatefile"] = GetTemplateName("Dashboard", "dashboard");
				
$pageObject = new DashboardPage($params);
$pageObject->init();

$pageObject->process();
?>