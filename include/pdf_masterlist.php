<?php
function DisplayMasterTableInfo_pdf($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "pdf";
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
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Designer Worksheet")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "QC Worksheet")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "All Jobs")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Daily Job Report (Accepted)")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Designer Level 2")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Urgent Jobs")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Deadline Missed")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Need to Accept")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Need Notify")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Need Download")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Need QC")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Need Upload")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Pending 14704")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Daily Job Report (Notified)")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "14704 Need QC")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "14704 Need Upload")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "14704 Need Download")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "14704 Need Notify")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "14704 Need Accept")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "14704 Deadline Missed")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "14704 Urgent Jobs")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Delected Jobs")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Pending 18442")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "18442 Deadline Missed")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "18442 Urgent Jobs")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "18442 Need Notify")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "18442 Need Upload")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "18442 Need QC")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "18442 Need Download")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "18442 Need Accept")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Monthly Job Report (Accepted)")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Monthly Job Report (Notified)")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Daily Accepted Riajul")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "QC Worksheet for Correction")
	{
		$keysAssoc["pdf_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf","pdf_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if( !$data || !count($data) )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["pdf_id"]));
	
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
	$xt->assign("pdf_name_mastervalue", $viewControls->showDBValue("pdf_name", $data, $keylink));
	$format = $settings->getViewFormat("pdf_name");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("pdf_name")))
		$class = ' rnr-field-number';
		
	$xt->assign("pdf_name_class", $class); // add class for field header as field value
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
	$xt->assign("pdf_location_mastervalue", $viewControls->showDBValue("pdf_location", $data, $keylink));
	$format = $settings->getViewFormat("pdf_location");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("pdf_location")))
		$class = ' rnr-field-number';
		
	$xt->assign("pdf_location_class", $class); // add class for field header as field value
	$xt->assign("last_update_mastervalue", $viewControls->showDBValue("last_update", $data, $keylink));
	$format = $settings->getViewFormat("last_update");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("last_update")))
		$class = ' rnr-field-number';
		
	$xt->assign("last_update_class", $class); // add class for field header as field value
	$xt->assign("pdf_estimated_average_mastervalue", $viewControls->showDBValue("pdf_estimated_average", $data, $keylink));
	$format = $settings->getViewFormat("pdf_estimated_average");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("pdf_estimated_average")))
		$class = ' rnr-field-number';
		
	$xt->assign("pdf_estimated_average_class", $class); // add class for field header as field value
	$xt->assign("pdf_estimated_average1_mastervalue", $viewControls->showDBValue("pdf_estimated_average1", $data, $keylink));
	$format = $settings->getViewFormat("pdf_estimated_average1");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("pdf_estimated_average1")))
		$class = ' rnr-field-number';
		
	$xt->assign("pdf_estimated_average1_class", $class); // add class for field header as field value
	$xt->assign("pdf_estimated_average2_mastervalue", $viewControls->showDBValue("pdf_estimated_average2", $data, $keylink));
	$format = $settings->getViewFormat("pdf_estimated_average2");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("pdf_estimated_average2")))
		$class = ' rnr-field-number';
		
	$xt->assign("pdf_estimated_average2_class", $class); // add class for field header as field value
	$xt->assign("pdf_actual_average_mastervalue", $viewControls->showDBValue("pdf_actual_average", $data, $keylink));
	$format = $settings->getViewFormat("pdf_actual_average");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("pdf_actual_average")))
		$class = ' rnr-field-number';
		
	$xt->assign("pdf_actual_average_class", $class); // add class for field header as field value
	$xt->assign("price_mastervalue", $viewControls->showDBValue("price", $data, $keylink));
	$format = $settings->getViewFormat("price");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("price")))
		$class = ' rnr-field-number';
		
	$xt->assign("price_class", $class); // add class for field header as field value

	$layout = GetPageLayout("pdf", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("pdf", "masterlist"));
}

?>