<?php
function DisplayMasterTableInfo_clients($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "clients";
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
		$keysAssoc["client_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("client_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("clients","client_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "pdf")
	{
		$keysAssoc["client_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("client_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("clients","client_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Daily Accepted Riajul")
	{
		$keysAssoc["client_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("client_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("clients","client_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Download Reject Job")
	{
		$keysAssoc["client_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("client_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("clients","client_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if( !$data || !count($data) )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["client_id"]));
	
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
	$xt->assign("client_name_mastervalue", $viewControls->showDBValue("client_name", $data, $keylink));
	$format = $settings->getViewFormat("client_name");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("client_name")))
		$class = ' rnr-field-number';
		
	$xt->assign("client_name_class", $class); // add class for field header as field value
	$xt->assign("priority_mastervalue", $viewControls->showDBValue("priority", $data, $keylink));
	$format = $settings->getViewFormat("priority");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("priority")))
		$class = ' rnr-field-number';
		
	$xt->assign("priority_class", $class); // add class for field header as field value
	$xt->assign("client_group_mastervalue", $viewControls->showDBValue("client_group", $data, $keylink));
	$format = $settings->getViewFormat("client_group");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("client_group")))
		$class = ' rnr-field-number';
		
	$xt->assign("client_group_class", $class); // add class for field header as field value
	$xt->assign("client_username_mastervalue", $viewControls->showDBValue("client_username", $data, $keylink));
	$format = $settings->getViewFormat("client_username");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("client_username")))
		$class = ' rnr-field-number';
		
	$xt->assign("client_username_class", $class); // add class for field header as field value
	$xt->assign("client_password_mastervalue", $viewControls->showDBValue("client_password", $data, $keylink));
	$format = $settings->getViewFormat("client_password");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("client_password")))
		$class = ' rnr-field-number';
		
	$xt->assign("client_password_class", $class); // add class for field header as field value
	$xt->assign("contact_fname_mastervalue", $viewControls->showDBValue("contact_fname", $data, $keylink));
	$format = $settings->getViewFormat("contact_fname");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("contact_fname")))
		$class = ' rnr-field-number';
		
	$xt->assign("contact_fname_class", $class); // add class for field header as field value
	$xt->assign("contact_lname_mastervalue", $viewControls->showDBValue("contact_lname", $data, $keylink));
	$format = $settings->getViewFormat("contact_lname");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("contact_lname")))
		$class = ' rnr-field-number';
		
	$xt->assign("contact_lname_class", $class); // add class for field header as field value
	$xt->assign("email_mastervalue", $viewControls->showDBValue("email", $data, $keylink));
	$format = $settings->getViewFormat("email");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("email")))
		$class = ' rnr-field-number';
		
	$xt->assign("email_class", $class); // add class for field header as field value
	$xt->assign("phone_mastervalue", $viewControls->showDBValue("phone", $data, $keylink));
	$format = $settings->getViewFormat("phone");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("phone")))
		$class = ' rnr-field-number';
		
	$xt->assign("phone_class", $class); // add class for field header as field value
	$xt->assign("mobile_mastervalue", $viewControls->showDBValue("mobile", $data, $keylink));
	$format = $settings->getViewFormat("mobile");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("mobile")))
		$class = ' rnr-field-number';
		
	$xt->assign("mobile_class", $class); // add class for field header as field value
	$xt->assign("address_mastervalue", $viewControls->showDBValue("address", $data, $keylink));
	$format = $settings->getViewFormat("address");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("address")))
		$class = ' rnr-field-number';
		
	$xt->assign("address_class", $class); // add class for field header as field value
	$xt->assign("country_mastervalue", $viewControls->showDBValue("country", $data, $keylink));
	$format = $settings->getViewFormat("country");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("country")))
		$class = ' rnr-field-number';
		
	$xt->assign("country_class", $class); // add class for field header as field value
	$xt->assign("preferred_currency_mastervalue", $viewControls->showDBValue("preferred_currency", $data, $keylink));
	$format = $settings->getViewFormat("preferred_currency");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("preferred_currency")))
		$class = ' rnr-field-number';
		
	$xt->assign("preferred_currency_class", $class); // add class for field header as field value

	$layout = GetPageLayout("clients", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("clients", "masterlist"));
}

?>