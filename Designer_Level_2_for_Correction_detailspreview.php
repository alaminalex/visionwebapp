<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/Designer_Level_2_for_Correction_variables.php");

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
$page_layouts["Designer_Level_2_for_Correction_detailspreview"] = $layout;

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

if($mastertable == "user")
{
	$where = "";
		$formattedValue = make_db_value("notifer_id",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("notifer_id") . "is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("notifer_id") . "=" . $formattedValue;
}
if($mastertable == "pdf")
{
	$where = "";
		$formattedValue = make_db_value("pdf_id",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("pdf_id") . "is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("pdf_id") . "=" . $formattedValue;
}
if($mastertable == "jobstatus")
{
	$where = "";
		$formattedValue = make_db_value("jobstatus_id",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("jobstatus_id") . "is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("jobstatus_id") . "=" . $formattedValue;
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
	
	
	//	designer_time_left - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("designer_time_left", $data, $keylink);
			$row["designer_time_left_value"] = $value;
			$format = $pSet->getViewFormat("designer_time_left");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("designer_time_left")))
				$class = ' rnr-field-number';
			$row["designer_time_left_class"] = $class;
	//	time_to_delivery - Time
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("time_to_delivery", $data, $keylink);
			$row["time_to_delivery_value"] = $value;
			$format = $pSet->getViewFormat("time_to_delivery");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("time_to_delivery")))
				$class = ' rnr-field-number';
			$row["time_to_delivery_class"] = $class;
	//	work_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("work_id", $data, $keylink);
			$row["work_id_value"] = $value;
			$format = $pSet->getViewFormat("work_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("work_id")))
				$class = ' rnr-field-number';
			$row["work_id_class"] = $class;
	//	job_id - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("job_id", $data, $keylink);
			$row["job_id_value"] = $value;
			$format = $pSet->getViewFormat("job_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("job_id")))
				$class = ' rnr-field-number';
			$row["job_id_class"] = $class;
	//	total_images - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("total_images", $data, $keylink);
			$row["total_images_value"] = $value;
			$format = $pSet->getViewFormat("total_images");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("total_images")))
				$class = ' rnr-field-number';
			$row["total_images_class"] = $class;
	//	delivery_duration - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("delivery_duration", $data, $keylink);
			$row["delivery_duration_value"] = $value;
			$format = $pSet->getViewFormat("delivery_duration");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("delivery_duration")))
				$class = ' rnr-field-number';
			$row["delivery_duration_class"] = $class;
	//	web_note - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("web_note", $data, $keylink);
			$row["web_note_value"] = $value;
			$format = $pSet->getViewFormat("web_note");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("web_note")))
				$class = ' rnr-field-number';
			$row["web_note_class"] = $class;
	//	comments - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("comments", $data, $keylink);
			$row["comments_value"] = $value;
			$format = $pSet->getViewFormat("comments");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("comments")))
				$class = ' rnr-field-number';
			$row["comments_class"] = $class;
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
	//	jobstatus_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("jobstatus_id", $data, $keylink);
			$row["jobstatus_id_value"] = $value;
			$format = $pSet->getViewFormat("jobstatus_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("jobstatus_id")))
				$class = ' rnr-field-number';
			$row["jobstatus_id_class"] = $class;
	//	delivery_date - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("delivery_date", $data, $keylink);
			$row["delivery_date_value"] = $value;
			$format = $pSet->getViewFormat("delivery_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("delivery_date")))
				$class = ' rnr-field-number';
			$row["delivery_date_class"] = $class;
	//	time_left - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("time_left", $data, $keylink);
			$row["time_left_value"] = $value;
			$format = $pSet->getViewFormat("time_left");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("time_left")))
				$class = ' rnr-field-number';
			$row["time_left_class"] = $class;
	//	reviewer_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("reviewer_id", $data, $keylink);
			$row["reviewer_id_value"] = $value;
			$format = $pSet->getViewFormat("reviewer_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("reviewer_id")))
				$class = ' rnr-field-number';
			$row["reviewer_id_class"] = $class;
	//	notifer_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("notifer_id", $data, $keylink);
			$row["notifer_id_value"] = $value;
			$format = $pSet->getViewFormat("notifer_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("notifer_id")))
				$class = ' rnr-field-number';
			$row["notifer_id_class"] = $class;
	//	notify_date - Datetime
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("notify_date", $data, $keylink);
			$row["notify_date_value"] = $value;
			$format = $pSet->getViewFormat("notify_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("notify_date")))
				$class = ' rnr-field-number';
			$row["notify_date_class"] = $class;
	//	designer_id - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("designer_id", $data, $keylink);
			$row["designer_id_value"] = $value;
			$format = $pSet->getViewFormat("designer_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("designer_id")))
				$class = ' rnr-field-number';
			$row["designer_id_class"] = $class;
	//	designer2_id - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("designer2_id", $data, $keylink);
			$row["designer2_id_value"] = $value;
			$format = $pSet->getViewFormat("designer2_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("designer2_id")))
				$class = ' rnr-field-number';
			$row["designer2_id_class"] = $class;
	//	distribute_date - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("distribute_date", $data, $keylink);
			$row["distribute_date_value"] = $value;
			$format = $pSet->getViewFormat("distribute_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("distribute_date")))
				$class = ' rnr-field-number';
			$row["distribute_date_class"] = $class;
	//	pdf_estimated_average - Time
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
	//	total_assigned_this_user - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("total_assigned_this_user", $data, $keylink);
			$row["total_assigned_this_user_value"] = $value;
			$format = $pSet->getViewFormat("total_assigned_this_user");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("total_assigned_this_user")))
				$class = ' rnr-field-number';
			$row["total_assigned_this_user_class"] = $class;
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
$xt->load_template(GetTemplateName("Designer_Level_2_for_Correction", "detailspreview"));
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