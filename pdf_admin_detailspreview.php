<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/pdf_admin_variables.php");

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
$page_layouts["pdf_admin_detailspreview"] = $layout;

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

if($mastertable == "clients")
{
	$where = "";
		$formattedValue = make_db_value("client_id",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("client_id") . "is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("client_id") . "=" . $formattedValue;
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

	$display_count = 10;
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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["pdf_id"]));
	
	
	//	pdf_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("pdf_id", $data, $keylink);
			$row["pdf_id_value"] = $value;
			$format = $pSet->getViewFormat("pdf_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("pdf_id")))
				$class = ' rnr-field-number';
			$row["pdf_id_class"] = $class;
	//	pdf_name - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("pdf_name", $data, $keylink);
			$row["pdf_name_value"] = $value;
			$format = $pSet->getViewFormat("pdf_name");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("pdf_name")))
				$class = ' rnr-field-number';
			$row["pdf_name_class"] = $class;
	//	client_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("client_id", $data, $keylink);
			$row["client_id_value"] = $value;
			$format = $pSet->getViewFormat("client_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("client_id")))
				$class = ' rnr-field-number';
			$row["client_id_class"] = $class;
	//	pdf_location - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("pdf_location", $data, $keylink);
			$row["pdf_location_value"] = $value;
			$format = $pSet->getViewFormat("pdf_location");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("pdf_location")))
				$class = ' rnr-field-number';
			$row["pdf_location_class"] = $class;
	//	last_update - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("last_update", $data, $keylink);
			$row["last_update_value"] = $value;
			$format = $pSet->getViewFormat("last_update");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("last_update")))
				$class = ' rnr-field-number';
			$row["last_update_class"] = $class;
	//	pdf_estimated_average - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("pdf_estimated_average", $data, $keylink);
			$row["pdf_estimated_average_value"] = $value;
			$format = $pSet->getViewFormat("pdf_estimated_average");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("pdf_estimated_average")))
				$class = ' rnr-field-number';
			$row["pdf_estimated_average_class"] = $class;
	//	pdf_estimated_average1 - Time
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("pdf_estimated_average1", $data, $keylink);
			$row["pdf_estimated_average1_value"] = $value;
			$format = $pSet->getViewFormat("pdf_estimated_average1");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("pdf_estimated_average1")))
				$class = ' rnr-field-number';
			$row["pdf_estimated_average1_class"] = $class;
	//	pdf_estimated_average2 - Time
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("pdf_estimated_average2", $data, $keylink);
			$row["pdf_estimated_average2_value"] = $value;
			$format = $pSet->getViewFormat("pdf_estimated_average2");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("pdf_estimated_average2")))
				$class = ' rnr-field-number';
			$row["pdf_estimated_average2_class"] = $class;
	//	pdf_actual_average - Time
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("pdf_actual_average", $data, $keylink);
			$row["pdf_actual_average_value"] = $value;
			$format = $pSet->getViewFormat("pdf_actual_average");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("pdf_actual_average")))
				$class = ' rnr-field-number';
			$row["pdf_actual_average_class"] = $class;
	//	current_price - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("current_price", $data, $keylink);
			$row["current_price_value"] = $value;
			$format = $pSet->getViewFormat("current_price");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("current_price")))
				$class = ' rnr-field-number';
			$row["current_price_class"] = $class;
	//	price_base_on_eta - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("price_base_on_eta", $data, $keylink);
			$row["price_base_on_eta_value"] = $value;
			$format = $pSet->getViewFormat("price_base_on_eta");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("price_base_on_eta")))
				$class = ' rnr-field-number';
			$row["price_base_on_eta_class"] = $class;
	//	price_should_be - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("price_should_be", $data, $keylink);
			$row["price_should_be_value"] = $value;
			$format = $pSet->getViewFormat("price_should_be");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("price_should_be")))
				$class = ' rnr-field-number';
			$row["price_should_be_class"] = $class;
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
$xt->load_template(GetTemplateName("pdf_admin", "detailspreview"));
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