<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/jobfile_variables.php");

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
$page_layouts["jobfile_detailspreview"] = $layout;

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

if($mastertable == "File Distribution")
{
	$where = "";
		$formattedValue = make_db_value("jobfile_id",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("jobfile_id") . "is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("jobfile_id") . "=" . $formattedValue;
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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["jobfile_id"]));
	
	
	//	job_pdf_name - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("job_pdf_name", $data, $keylink);
			$row["job_pdf_name_value"] = $value;
			$format = $pSet->getViewFormat("job_pdf_name");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("job_pdf_name")))
				$class = ' rnr-field-number';
			$row["job_pdf_name_class"] = $class;
	//	jobfile_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("jobfile_id", $data, $keylink);
			$row["jobfile_id_value"] = $value;
			$format = $pSet->getViewFormat("jobfile_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("jobfile_id")))
				$class = ' rnr-field-number';
			$row["jobfile_id_class"] = $class;
	//	file_url - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("file_url", $data, $keylink);
			$row["file_url_value"] = $value;
			$format = $pSet->getViewFormat("file_url");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("file_url")))
				$class = ' rnr-field-number';
			$row["file_url_class"] = $class;
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
	//	project_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("project_id", $data, $keylink);
			$row["project_id_value"] = $value;
			$format = $pSet->getViewFormat("project_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("project_id")))
				$class = ' rnr-field-number';
			$row["project_id_class"] = $class;
	//	folder_name - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("folder_name", $data, $keylink);
			$row["folder_name_value"] = $value;
			$format = $pSet->getViewFormat("folder_name");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("folder_name")))
				$class = ' rnr-field-number';
			$row["folder_name_class"] = $class;
	//	filename - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("filename", $data, $keylink);
			$row["filename_value"] = $value;
			$format = $pSet->getViewFormat("filename");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("filename")))
				$class = ' rnr-field-number';
			$row["filename_class"] = $class;
	//	jobfile_type - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("jobfile_type", $data, $keylink);
			$row["jobfile_type_value"] = $value;
			$format = $pSet->getViewFormat("jobfile_type");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("jobfile_type")))
				$class = ' rnr-field-number';
			$row["jobfile_type_class"] = $class;
	//	jobfile_note - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("jobfile_note", $data, $keylink);
			$row["jobfile_note_value"] = $value;
			$format = $pSet->getViewFormat("jobfile_note");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("jobfile_note")))
				$class = ' rnr-field-number';
			$row["jobfile_note_class"] = $class;
	//	jobfile_status_id - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("jobfile_status_id", $data, $keylink);
			$row["jobfile_status_id_value"] = $value;
			$format = $pSet->getViewFormat("jobfile_status_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("jobfile_status_id")))
				$class = ' rnr-field-number';
			$row["jobfile_status_id_class"] = $class;
	//	downloader_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("downloader_id", $data, $keylink);
			$row["downloader_id_value"] = $value;
			$format = $pSet->getViewFormat("downloader_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("downloader_id")))
				$class = ' rnr-field-number';
			$row["downloader_id_class"] = $class;
	//	distributor_id - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("distributor_id", $data, $keylink);
			$row["distributor_id_value"] = $value;
			$format = $pSet->getViewFormat("distributor_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("distributor_id")))
				$class = ' rnr-field-number';
			$row["distributor_id_class"] = $class;
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
	//	qc_id - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("qc_id", $data, $keylink);
			$row["qc_id_value"] = $value;
			$format = $pSet->getViewFormat("qc_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("qc_id")))
				$class = ' rnr-field-number';
			$row["qc_id_class"] = $class;
	//	uploader_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("uploader_id", $data, $keylink);
			$row["uploader_id_value"] = $value;
			$format = $pSet->getViewFormat("uploader_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("uploader_id")))
				$class = ' rnr-field-number';
			$row["uploader_id_class"] = $class;
	//	notifier_id - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("notifier_id", $data, $keylink);
			$row["notifier_id_value"] = $value;
			$format = $pSet->getViewFormat("notifier_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("notifier_id")))
				$class = ' rnr-field-number';
			$row["notifier_id_class"] = $class;
	//	rejector_id - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("rejector_id", $data, $keylink);
			$row["rejector_id_value"] = $value;
			$format = $pSet->getViewFormat("rejector_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("rejector_id")))
				$class = ' rnr-field-number';
			$row["rejector_id_class"] = $class;
	//	download_date - Datetime
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("download_date", $data, $keylink);
			$row["download_date_value"] = $value;
			$format = $pSet->getViewFormat("download_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("download_date")))
				$class = ' rnr-field-number';
			$row["download_date_class"] = $class;
	//	distribute_date - Custom
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
	//	start_date - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("start_date", $data, $keylink);
			$row["start_date_value"] = $value;
			$format = $pSet->getViewFormat("start_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("start_date")))
				$class = ' rnr-field-number';
			$row["start_date_class"] = $class;
	//	end_date - Datetime
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("end_date", $data, $keylink);
			$row["end_date_value"] = $value;
			$format = $pSet->getViewFormat("end_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("end_date")))
				$class = ' rnr-field-number';
			$row["end_date_class"] = $class;
	//	designer_time - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("designer_time", $data, $keylink);
			$row["designer_time_value"] = $value;
			$format = $pSet->getViewFormat("designer_time");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("designer_time")))
				$class = ' rnr-field-number';
			$row["designer_time_class"] = $class;
	//	qcstart_date - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("qcstart_date", $data, $keylink);
			$row["qcstart_date_value"] = $value;
			$format = $pSet->getViewFormat("qcstart_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("qcstart_date")))
				$class = ' rnr-field-number';
			$row["qcstart_date_class"] = $class;
	//	qcend_date - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("qcend_date", $data, $keylink);
			$row["qcend_date_value"] = $value;
			$format = $pSet->getViewFormat("qcend_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("qcend_date")))
				$class = ' rnr-field-number';
			$row["qcend_date_class"] = $class;
	//	qc_time - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("qc_time", $data, $keylink);
			$row["qc_time_value"] = $value;
			$format = $pSet->getViewFormat("qc_time");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("qc_time")))
				$class = ' rnr-field-number';
			$row["qc_time_class"] = $class;
	//	total_time_taken - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("total_time_taken", $data, $keylink);
			$row["total_time_taken_value"] = $value;
			$format = $pSet->getViewFormat("total_time_taken");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("total_time_taken")))
				$class = ' rnr-field-number';
			$row["total_time_taken_class"] = $class;
	//	upload_date - Datetime
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("upload_date", $data, $keylink);
			$row["upload_date_value"] = $value;
			$format = $pSet->getViewFormat("upload_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("upload_date")))
				$class = ' rnr-field-number';
			$row["upload_date_class"] = $class;
	//	notify_date - Custom
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
	//	reject_date - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("reject_date", $data, $keylink);
			$row["reject_date_value"] = $value;
			$format = $pSet->getViewFormat("reject_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("reject_date")))
				$class = ' rnr-field-number';
			$row["reject_date_class"] = $class;
	//	reject_reason - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("reject_reason", $data, $keylink);
			$row["reject_reason_value"] = $value;
			$format = $pSet->getViewFormat("reject_reason");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("reject_reason")))
				$class = ' rnr-field-number';
			$row["reject_reason_class"] = $class;
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
	//	start2_date - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("start2_date", $data, $keylink);
			$row["start2_date_value"] = $value;
			$format = $pSet->getViewFormat("start2_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("start2_date")))
				$class = ' rnr-field-number';
			$row["start2_date_class"] = $class;
	//	end2_date - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("end2_date", $data, $keylink);
			$row["end2_date_value"] = $value;
			$format = $pSet->getViewFormat("end2_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("end2_date")))
				$class = ' rnr-field-number';
			$row["end2_date_class"] = $class;
	//	designer2_time - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("designer2_time", $data, $keylink);
			$row["designer2_time_value"] = $value;
			$format = $pSet->getViewFormat("designer2_time");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("designer2_time")))
				$class = ' rnr-field-number';
			$row["designer2_time_class"] = $class;
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
$xt->load_template(GetTemplateName("jobfile", "detailspreview"));
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