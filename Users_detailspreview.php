<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/Users_variables.php");

$mode = postvalue("mode");

if(!isLogged())
{ 
	return;
}
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{
	return;
}

require_once("classes/searchclause.php");

$cipherer = new RunnerCipherer($strTableName);

require_once('include/xtempl.php');
$xt = new Xtempl();





$layout = new TLayout("detailspreview", "Coral1vApplication", "MobilevApplication");
$layout->version = 2;
$layout->blocks["bare"] = array();
$layout->containers["dcount"] = array();
$layout->container_properties["dcount"] = array(  );
$layout->containers["dcount"][] = array("name"=>"detailspreviewheader", 
	"block"=>"", "substyle"=>1  );

$layout->containers["dcount"][] = array("name"=>"detailspreviewdetailsfount", 
	"block"=>"", "substyle"=>1  );

$layout->containers["dcount"][] = array("name"=>"detailspreviewdispfirst", 
	"block"=>"display_first", "substyle"=>1  );

$layout->skins["dcount"] = "empty";

$layout->blocks["bare"][] = "dcount";
$layout->containers["detailspreviewgrid"] = array();
$layout->container_properties["detailspreviewgrid"] = array(  );
$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields", 
	"block"=>"details_data", "substyle"=>1  );

$layout->skins["detailspreviewgrid"] = "grid";

$layout->blocks["bare"][] = "detailspreviewgrid";
$page_layouts["Users_detailspreview"] = $layout;

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



$recordsCounter = 0;

//	process masterkey value
$mastertable = postvalue("mastertable");
$masterKeys = my_json_decode(postvalue("masterKeys"));
$sessionPrefix = "_detailsPreview";
if($mastertable != "")
{
	$_SESSION[$sessionPrefix."_mastertable"]=$mastertable;
//	copy keys to session
	$i = 1;
	if(is_array($masterKeys) && count($masterKeys) > 0)
	{
		while(array_key_exists ("masterkey".$i, $masterKeys))
		{
			$_SESSION[$sessionPrefix."_masterkey".$i] = $masterKeys["masterkey".$i];
			$i++;
		}
	}
	if(isset($_SESSION[$sessionPrefix."_masterkey".$i]))
		unset($_SESSION[$sessionPrefix."_masterkey".$i]);
}
else
	$mastertable = $_SESSION[$sessionPrefix."_mastertable"];

$params = array();
$params['id'] = 1;
$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['pageType'] = "detailspreview";
$pageObject = new DetailsPreview($params);

if($mastertable == "group")
{
	$where = "";
		$formattedValue = make_db_value("group_id",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("group_id") . "is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("group_id") . "=" . $formattedValue;
}
if($mastertable == "department")
{
	$where = "";
		$formattedValue = make_db_value("department_id",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("department_id") . "is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("department_id") . "=" . $formattedValue;
}
if($mastertable == "subdivision")
{
	$where = "";
		$formattedValue = make_db_value("subdiv_id",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("subdiv_id") . "is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("subdiv_id") . "=" . $formattedValue;
}

$str = SecuritySQL("Search", $strTableName);
if(strlen($str))
	$where.=" and ".$str;
$strSQL = $gQuery->gSQLWhere($where);

$strSQL.=" ".$gstrOrderBy;

$rowcount = $gQuery->gSQLRowCount($where, $pageObject->connection);
$xt->assign("row_count",$rowcount);
if($rowcount) 
{
	$xt->assign("details_data",true);

	$display_count = 5;
	if($mode == "inline")
		$display_count*=2;
		
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo = array();
	
	require_once getabspath('classes/controls/ViewControlsContainer.php');
	$pSet = new ProjectSettings($strTableName, PAGE_LIST);
	$viewContainer = new ViewControlsContainer($pSet, PAGE_LIST);
	$viewContainer->isDetailsPreview = true;

	$b = true;
	$qResult = $pageObject->connection->query( $strSQL );
	$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	while($data && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row = array();
		$keylink = "";
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["user_id"]));
		$keylink.="&key2=".runner_htmlspecialchars(rawurlencode(@$data["username"]));
	
	
	//	user_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("user_id", $data, $keylink);
			$row["user_id_value"] = $value;
			$format = $pSet->getViewFormat("user_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("user_id")))
				$class = ' rnr-field-number';
			$row["user_id_class"] = $class;
	//	user_status - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("user_status", $data, $keylink);
			$row["user_status_value"] = $value;
			$format = $pSet->getViewFormat("user_status");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("user_status")))
				$class = ' rnr-field-number';
			$row["user_status_class"] = $class;
	//	username - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("username", $data, $keylink);
			$row["username_value"] = $value;
			$format = $pSet->getViewFormat("username");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("username")))
				$class = ' rnr-field-number';
			$row["username_class"] = $class;
	//	department_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("department_id", $data, $keylink);
			$row["department_id_value"] = $value;
			$format = $pSet->getViewFormat("department_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("department_id")))
				$class = ' rnr-field-number';
			$row["department_id_class"] = $class;
	//	subdiv_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("subdiv_id", $data, $keylink);
			$row["subdiv_id_value"] = $value;
			$format = $pSet->getViewFormat("subdiv_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("subdiv_id")))
				$class = ' rnr-field-number';
			$row["subdiv_id_class"] = $class;
	//	group_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("group_id", $data, $keylink);
			$row["group_id_value"] = $value;
			$format = $pSet->getViewFormat("group_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("group_id")))
				$class = ' rnr-field-number';
			$row["group_id_class"] = $class;
	//	employee_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("employee_id", $data, $keylink);
			$row["employee_id_value"] = $value;
			$format = $pSet->getViewFormat("employee_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("employee_id")))
				$class = ' rnr-field-number';
			$row["employee_id_class"] = $class;
	//	fname - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("fname", $data, $keylink);
			$row["fname_value"] = $value;
			$format = $pSet->getViewFormat("fname");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("fname")))
				$class = ' rnr-field-number';
			$row["fname_class"] = $class;
	//	lname - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("lname", $data, $keylink);
			$row["lname_value"] = $value;
			$format = $pSet->getViewFormat("lname");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("lname")))
				$class = ' rnr-field-number';
			$row["lname_class"] = $class;
	//	nickname - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("nickname", $data, $keylink);
			$row["nickname_value"] = $value;
			$format = $pSet->getViewFormat("nickname");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("nickname")))
				$class = ' rnr-field-number';
			$row["nickname_class"] = $class;
	//	email - Email Hyperlink
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("email", $data, $keylink);
			$row["email_value"] = $value;
			$format = $pSet->getViewFormat("email");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("email")))
				$class = ' rnr-field-number';
			$row["email_class"] = $class;
	//	phone - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("phone", $data, $keylink);
			$row["phone_value"] = $value;
			$format = $pSet->getViewFormat("phone");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("phone")))
				$class = ' rnr-field-number';
			$row["phone_class"] = $class;
	//	mobile - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("mobile", $data, $keylink);
			$row["mobile_value"] = $value;
			$format = $pSet->getViewFormat("mobile");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("mobile")))
				$class = ' rnr-field-number';
			$row["mobile_class"] = $class;
	//	log - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("log", $data, $keylink);
			$row["log_value"] = $value;
			$format = $pSet->getViewFormat("log");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("log")))
				$class = ' rnr-field-number';
			$row["log_class"] = $class;
	//	images_assigned - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("images_assigned", $data, $keylink);
			$row["images_assigned_value"] = $value;
			$format = $pSet->getViewFormat("images_assigned");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("images_assigned")))
				$class = ' rnr-field-number';
			$row["images_assigned_class"] = $class;
	//	user_picture - File-based Image
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("user_picture", $data, $keylink);
			$row["user_picture_value"] = $value;
			$format = $pSet->getViewFormat("user_picture");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("user_picture")))
				$class = ' rnr-field-number';
			$row["user_picture_class"] = $class;
	//	team - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("team", $data, $keylink);
			$row["team_value"] = $value;
			$format = $pSet->getViewFormat("team");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("team")))
				$class = ' rnr-field-number';
			$row["team_class"] = $class;
	//	ad_group_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ad_group_id", $data, $keylink);
			$row["ad_group_id_value"] = $value;
			$format = $pSet->getViewFormat("ad_group_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ad_group_id")))
				$class = ' rnr-field-number';
			$row["ad_group_id_class"] = $class;
	//	lastaccess - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("lastaccess", $data, $keylink);
			$row["lastaccess_value"] = $value;
			$format = $pSet->getViewFormat("lastaccess");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("lastaccess")))
				$class = ' rnr-field-number';
			$row["lastaccess_class"] = $class;
	//	designation - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("designation", $data, $keylink);
			$row["designation_value"] = $value;
			$format = $pSet->getViewFormat("designation");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("designation")))
				$class = ' rnr-field-number';
			$row["designation_class"] = $class;
		$rowinfo[] = $row;
		if ($b) {
			$rowinfo2[] = $row;
			$b = false;
		}
		$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	}
	$xt->assign_loopsection("details_row",$rowinfo);
	$xt->assign_loopsection("details_row_header",$rowinfo2); // assign class for header
}
$returnJSON = array("success" => true);
$xt->load_template(GetTemplateName("Users", "detailspreview"));
$returnJSON["body"] = $xt->fetch_loaded();

if($mode!="inline")
{
	$returnJSON["counter"] = postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		foreach($layout->getCSSFiles(isRTL(), isMobile()) as $css)
		{
			$returnJSON['CSSFiles'][] = $css;
		}
	}	
}	

echo printJSON($returnJSON);
exit();
?>