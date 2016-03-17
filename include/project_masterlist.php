<?php
function DisplayMasterTableInfo_project($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "project";
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

	if($detailtable == "job")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Designer Worksheet")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "QC Worksheet")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "All Jobs")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Daily Job Report (Accepted)")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Designer Level 2")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Urgent Jobs")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Deadline Missed")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Need to Accept")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Need Notify")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Need Download")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Need QC")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Need Upload")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Pending 14704")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Daily Job Report (Notified)")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "14704 Need QC")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "14704 Need Upload")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "14704 Need Download")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "14704 Need Notify")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "14704 Need Accept")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "14704 Deadline Missed")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "14704 Urgent Jobs")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Delected Jobs")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Pending 18442")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "18442 Deadline Missed")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "18442 Urgent Jobs")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "18442 Need Notify")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "18442 Need Upload")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "18442 Need QC")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "18442 Need Download")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "18442 Need Accept")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Monthly Job Report (Accepted)")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Monthly Job Report (Notified)")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Daily Accepted Riajul")
	{
		$keysAssoc["project_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("project_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("project","project_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if( !$data || !count($data) )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["project_id"]));
	
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
	$xt->assign("project_name_mastervalue", $viewControls->showDBValue("project_name", $data, $keylink));
	$format = $settings->getViewFormat("project_name");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("project_name")))
		$class = ' rnr-field-number';
		
	$xt->assign("project_name_class", $class); // add class for field header as field value
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
	$xt->assign("pdf_id_mastervalue", $viewControls->showDBValue("pdf_id", $data, $keylink));
	$format = $settings->getViewFormat("pdf_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("pdf_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("pdf_id_class", $class); // add class for field header as field value
	$xt->assign("instructions_mastervalue", $viewControls->showDBValue("instructions", $data, $keylink));
	$format = $settings->getViewFormat("instructions");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("instructions")))
		$class = ' rnr-field-number';
		
	$xt->assign("instructions_class", $class); // add class for field header as field value
	$xt->assign("extra_instructions_mastervalue", $viewControls->showDBValue("extra_instructions", $data, $keylink));
	$format = $settings->getViewFormat("extra_instructions");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("extra_instructions")))
		$class = ' rnr-field-number';
		
	$xt->assign("extra_instructions_class", $class); // add class for field header as field value
	$xt->assign("ftphost_mastervalue", $viewControls->showDBValue("ftphost", $data, $keylink));
	$format = $settings->getViewFormat("ftphost");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ftphost")))
		$class = ' rnr-field-number';
		
	$xt->assign("ftphost_class", $class); // add class for field header as field value
	$xt->assign("ftpusername_mastervalue", $viewControls->showDBValue("ftpusername", $data, $keylink));
	$format = $settings->getViewFormat("ftpusername");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ftpusername")))
		$class = ' rnr-field-number';
		
	$xt->assign("ftpusername_class", $class); // add class for field header as field value
	$xt->assign("ftppassword_mastervalue", $viewControls->showDBValue("ftppassword", $data, $keylink));
	$format = $settings->getViewFormat("ftppassword");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ftppassword")))
		$class = ' rnr-field-number';
		
	$xt->assign("ftppassword_class", $class); // add class for field header as field value

	$layout = GetPageLayout("project", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("project", "masterlist"));
}

?>