<?php
function DisplayMasterTableInfo_Designer_Filesheet($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "Designer Filesheet";
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

	if($detailtable == "Pending Jobs")
	{
		$keysAssoc["work_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("work_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Designer_Filesheet","work_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if( !$data || !count($data) )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["jobfile_id"]));
	
	$xt->assign("job_pdf_name_mastervalue", $viewControls->showDBValue("job_pdf_name", $data, $keylink));
	$format = $settings->getViewFormat("job_pdf_name");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("job_pdf_name")))
		$class = ' rnr-field-number';
		
	$xt->assign("job_pdf_name_class", $class); // add class for field header as field value
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
	$xt->assign("client_id_mastervalue", $viewControls->showDBValue("client_id", $data, $keylink));
	$format = $settings->getViewFormat("client_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("client_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("client_id_class", $class); // add class for field header as field value
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
	$xt->assign("project_id_mastervalue", $viewControls->showDBValue("project_id", $data, $keylink));
	$format = $settings->getViewFormat("project_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("project_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("project_id_class", $class); // add class for field header as field value
	$xt->assign("folder_name_mastervalue", $viewControls->showDBValue("folder_name", $data, $keylink));
	$format = $settings->getViewFormat("folder_name");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("folder_name")))
		$class = ' rnr-field-number';
		
	$xt->assign("folder_name_class", $class); // add class for field header as field value
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
	$xt->assign("jobfile_note_mastervalue", $viewControls->showDBValue("jobfile_note", $data, $keylink));
	$format = $settings->getViewFormat("jobfile_note");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("jobfile_note")))
		$class = ' rnr-field-number';
		
	$xt->assign("jobfile_note_class", $class); // add class for field header as field value
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
	$xt->assign("downloader_id_mastervalue", $viewControls->showDBValue("downloader_id", $data, $keylink));
	$format = $settings->getViewFormat("downloader_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("downloader_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("downloader_id_class", $class); // add class for field header as field value
	$xt->assign("distributor_id_mastervalue", $viewControls->showDBValue("distributor_id", $data, $keylink));
	$format = $settings->getViewFormat("distributor_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("distributor_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("distributor_id_class", $class); // add class for field header as field value
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
	$xt->assign("uploader_id_mastervalue", $viewControls->showDBValue("uploader_id", $data, $keylink));
	$format = $settings->getViewFormat("uploader_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("uploader_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("uploader_id_class", $class); // add class for field header as field value
	$xt->assign("notifier_id_mastervalue", $viewControls->showDBValue("notifier_id", $data, $keylink));
	$format = $settings->getViewFormat("notifier_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("notifier_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("notifier_id_class", $class); // add class for field header as field value
	$xt->assign("rejector_id_mastervalue", $viewControls->showDBValue("rejector_id", $data, $keylink));
	$format = $settings->getViewFormat("rejector_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("rejector_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("rejector_id_class", $class); // add class for field header as field value
	$xt->assign("download_date_mastervalue", $viewControls->showDBValue("download_date", $data, $keylink));
	$format = $settings->getViewFormat("download_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("download_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("download_date_class", $class); // add class for field header as field value
	$xt->assign("distribute_date_mastervalue", $viewControls->showDBValue("distribute_date", $data, $keylink));
	$format = $settings->getViewFormat("distribute_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("distribute_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("distribute_date_class", $class); // add class for field header as field value
	$xt->assign("start_date_mastervalue", $viewControls->showDBValue("start_date", $data, $keylink));
	$format = $settings->getViewFormat("start_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("start_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("start_date_class", $class); // add class for field header as field value
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
	$xt->assign("designer_time_mastervalue", $viewControls->showDBValue("designer_time", $data, $keylink));
	$format = $settings->getViewFormat("designer_time");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("designer_time")))
		$class = ' rnr-field-number';
		
	$xt->assign("designer_time_class", $class); // add class for field header as field value
	$xt->assign("qcstart_date_mastervalue", $viewControls->showDBValue("qcstart_date", $data, $keylink));
	$format = $settings->getViewFormat("qcstart_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("qcstart_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("qcstart_date_class", $class); // add class for field header as field value
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
	$xt->assign("qc_time_mastervalue", $viewControls->showDBValue("qc_time", $data, $keylink));
	$format = $settings->getViewFormat("qc_time");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("qc_time")))
		$class = ' rnr-field-number';
		
	$xt->assign("qc_time_class", $class); // add class for field header as field value
	$xt->assign("total_time_taken_mastervalue", $viewControls->showDBValue("total_time_taken", $data, $keylink));
	$format = $settings->getViewFormat("total_time_taken");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("total_time_taken")))
		$class = ' rnr-field-number';
		
	$xt->assign("total_time_taken_class", $class); // add class for field header as field value
	$xt->assign("upload_date_mastervalue", $viewControls->showDBValue("upload_date", $data, $keylink));
	$format = $settings->getViewFormat("upload_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("upload_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("upload_date_class", $class); // add class for field header as field value
	$xt->assign("notify_date_mastervalue", $viewControls->showDBValue("notify_date", $data, $keylink));
	$format = $settings->getViewFormat("notify_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("notify_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("notify_date_class", $class); // add class for field header as field value
	$xt->assign("reject_date_mastervalue", $viewControls->showDBValue("reject_date", $data, $keylink));
	$format = $settings->getViewFormat("reject_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("reject_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("reject_date_class", $class); // add class for field header as field value
	$xt->assign("reject_reason_mastervalue", $viewControls->showDBValue("reject_reason", $data, $keylink));
	$format = $settings->getViewFormat("reject_reason");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("reject_reason")))
		$class = ' rnr-field-number';
		
	$xt->assign("reject_reason_class", $class); // add class for field header as field value

	$layout = GetPageLayout("Designer_Filesheet", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("Designer_Filesheet", "masterlist"));
}

?>