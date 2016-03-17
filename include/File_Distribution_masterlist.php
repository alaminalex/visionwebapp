<?php
function DisplayMasterTableInfo_File_Distribution($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "File Distribution";
	$xt->eventsObject = getEventObject($tName);
	
	include_once('classes/listpage.php');
	include_once('classes/listpage_simple.php');
	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["mode"] = LIST_MASTER;
	$mParams["pageType"] = PAGE_LIST;
	$mParams["flyId"] = $params["recId"];
	$masterPage = ListPage::createListPage($tName, $mParams);
	
	$settings = $masterPage->pSet;
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST, $masterPage);
	
	$keysAssoc = array();
	$showKeys = "";	

	if($detailtable == "jobfile")
	{
		$keysAssoc["jobfile_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("jobfile_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("File_Distribution","jobfile_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if( !$data || !count($data) )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["jobfile_id"]));
	
	$xt->assign("jobfile_id_mastervalue", $viewControls->showDBValue("jobfile_id", $data, $keylink));
	$format = $settings->getViewFormat("jobfile_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("jobfile_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("jobfile_id_class", $class); // add class for field header as field value
	$xt->assign("file_url_mastervalue", $viewControls->showDBValue("file_url", $data, $keylink));
	$format = $settings->getViewFormat("file_url");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("file_url")))
		$class = ' rnr-field-number';
		
	$xt->assign("file_url_class", $class); // add class for field header as field value
	$xt->assign("work_id_mastervalue", $viewControls->showDBValue("work_id", $data, $keylink));
	$format = $settings->getViewFormat("work_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("work_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("work_id_class", $class); // add class for field header as field value
	$xt->assign("job_id_mastervalue", $viewControls->showDBValue("job_id", $data, $keylink));
	$format = $settings->getViewFormat("job_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("job_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("job_id_class", $class); // add class for field header as field value
	$xt->assign("filename_mastervalue", $viewControls->showDBValue("filename", $data, $keylink));
	$format = $settings->getViewFormat("filename");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("filename")))
		$class = ' rnr-field-number';
		
	$xt->assign("filename_class", $class); // add class for field header as field value
	$xt->assign("designer_id_mastervalue", $viewControls->showDBValue("designer_id", $data, $keylink));
	$format = $settings->getViewFormat("designer_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("designer_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("designer_id_class", $class); // add class for field header as field value
	$xt->assign("qc_id_mastervalue", $viewControls->showDBValue("qc_id", $data, $keylink));
	$format = $settings->getViewFormat("qc_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("qc_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("qc_id_class", $class); // add class for field header as field value
	$xt->assign("jobfile_status_id_mastervalue", $viewControls->showDBValue("jobfile_status_id", $data, $keylink));
	$format = $settings->getViewFormat("jobfile_status_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("jobfile_status_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("jobfile_status_id_class", $class); // add class for field header as field value
	$xt->assign("designer2_id_mastervalue", $viewControls->showDBValue("designer2_id", $data, $keylink));
	$format = $settings->getViewFormat("designer2_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("designer2_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("designer2_id_class", $class); // add class for field header as field value
	$xt->assign("end_date_mastervalue", $viewControls->showDBValue("end_date", $data, $keylink));
	$format = $settings->getViewFormat("end_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("end_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("end_date_class", $class); // add class for field header as field value
	$xt->assign("end2_date_mastervalue", $viewControls->showDBValue("end2_date", $data, $keylink));
	$format = $settings->getViewFormat("end2_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("end2_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("end2_date_class", $class); // add class for field header as field value
	$xt->assign("qcend_date_mastervalue", $viewControls->showDBValue("qcend_date", $data, $keylink));
	$format = $settings->getViewFormat("qcend_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("qcend_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("qcend_date_class", $class); // add class for field header as field value
	$xt->assign("jobfile_type_mastervalue", $viewControls->showDBValue("jobfile_type", $data, $keylink));
	$format = $settings->getViewFormat("jobfile_type");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("jobfile_type")))
		$class = ' rnr-field-number';
		
	$xt->assign("jobfile_type_class", $class); // add class for field header as field value

	$layout = GetPageLayout("File_Distribution", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("File_Distribution", "masterlist"));
}

?>