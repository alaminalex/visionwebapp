<?php
function DisplayMasterTableInfo_user($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "user";
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
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Download Job")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Pending Jobs")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Designer Worksheet")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "QC Worksheet")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "All Jobs")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Daily Job Report (Accepted)")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Designer Level 2")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Urgent Jobs")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Deadline Missed")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Need to Accept")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Need Notify")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Need Download")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Need QC")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Need Upload")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Pending 14704")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Daily Job Report (Notified)")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "14704 Need QC")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "14704 Need Upload")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "14704 Need Download")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "14704 Need Notify")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "14704 Need Accept")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "14704 Deadline Missed")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "14704 Urgent Jobs")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Delected Jobs")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Pending 18442")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "18442 Deadline Missed")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "18442 Urgent Jobs")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "18442 Need Notify")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "18442 Need Upload")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "18442 Need QC")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "18442 Need Download")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "18442 Need Accept")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Monthly Job Report (Accepted)")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Monthly Job Report (Notified)")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Daily Accepted Riajul")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "QC Worksheet for Correction")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("user","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if( !$data || !count($data) )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["user_id"]));
	$keylink.= "&key2=".runner_htmlspecialchars(rawurlencode(@$data["username"]));
	
	$xt->assign("user_id_mastervalue", $viewControls->showDBValue("user_id", $data, $keylink));
	$format = $settings->getViewFormat("user_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("user_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("user_id_class", $class); // add class for field header as field value
	$xt->assign("user_status_mastervalue", $viewControls->showDBValue("user_status", $data, $keylink));
	$format = $settings->getViewFormat("user_status");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("user_status")))
		$class = ' rnr-field-number';
		
	$xt->assign("user_status_class", $class); // add class for field header as field value
	$xt->assign("username_mastervalue", $viewControls->showDBValue("username", $data, $keylink));
	$format = $settings->getViewFormat("username");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("username")))
		$class = ' rnr-field-number';
		
	$xt->assign("username_class", $class); // add class for field header as field value
	$xt->assign("department_id_mastervalue", $viewControls->showDBValue("department_id", $data, $keylink));
	$format = $settings->getViewFormat("department_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("department_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("department_id_class", $class); // add class for field header as field value
	$xt->assign("subdiv_id_mastervalue", $viewControls->showDBValue("subdiv_id", $data, $keylink));
	$format = $settings->getViewFormat("subdiv_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("subdiv_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("subdiv_id_class", $class); // add class for field header as field value
	$xt->assign("group_id_mastervalue", $viewControls->showDBValue("group_id", $data, $keylink));
	$format = $settings->getViewFormat("group_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("group_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("group_id_class", $class); // add class for field header as field value
	$xt->assign("employee_id_mastervalue", $viewControls->showDBValue("employee_id", $data, $keylink));
	$format = $settings->getViewFormat("employee_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("employee_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("employee_id_class", $class); // add class for field header as field value
	$xt->assign("fname_mastervalue", $viewControls->showDBValue("fname", $data, $keylink));
	$format = $settings->getViewFormat("fname");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("fname")))
		$class = ' rnr-field-number';
		
	$xt->assign("fname_class", $class); // add class for field header as field value
	$xt->assign("lname_mastervalue", $viewControls->showDBValue("lname", $data, $keylink));
	$format = $settings->getViewFormat("lname");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("lname")))
		$class = ' rnr-field-number';
		
	$xt->assign("lname_class", $class); // add class for field header as field value
	$xt->assign("nickname_mastervalue", $viewControls->showDBValue("nickname", $data, $keylink));
	$format = $settings->getViewFormat("nickname");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("nickname")))
		$class = ' rnr-field-number';
		
	$xt->assign("nickname_class", $class); // add class for field header as field value
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
	$xt->assign("log_mastervalue", $viewControls->showDBValue("log", $data, $keylink));
	$format = $settings->getViewFormat("log");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("log")))
		$class = ' rnr-field-number';
		
	$xt->assign("log_class", $class); // add class for field header as field value
	$xt->assign("images_assigned_mastervalue", $viewControls->showDBValue("images_assigned", $data, $keylink));
	$format = $settings->getViewFormat("images_assigned");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("images_assigned")))
		$class = ' rnr-field-number';
		
	$xt->assign("images_assigned_class", $class); // add class for field header as field value
	$xt->assign("user_picture_mastervalue", $viewControls->showDBValue("user_picture", $data, $keylink));
	$format = $settings->getViewFormat("user_picture");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("user_picture")))
		$class = ' rnr-field-number';
		
	$xt->assign("user_picture_class", $class); // add class for field header as field value
	$xt->assign("team_mastervalue", $viewControls->showDBValue("team", $data, $keylink));
	$format = $settings->getViewFormat("team");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("team")))
		$class = ' rnr-field-number';
		
	$xt->assign("team_class", $class); // add class for field header as field value
	$xt->assign("ad_group_id_mastervalue", $viewControls->showDBValue("ad_group_id", $data, $keylink));
	$format = $settings->getViewFormat("ad_group_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ad_group_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("ad_group_id_class", $class); // add class for field header as field value
	$xt->assign("designation_mastervalue", $viewControls->showDBValue("designation", $data, $keylink));
	$format = $settings->getViewFormat("designation");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("designation")))
		$class = ' rnr-field-number';
		
	$xt->assign("designation_class", $class); // add class for field header as field value
	$xt->assign("joining_date_mastervalue", $viewControls->showDBValue("joining_date", $data, $keylink));
	$format = $settings->getViewFormat("joining_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("joining_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("joining_date_class", $class); // add class for field header as field value
	$xt->assign("emergency_contact1_mastervalue", $viewControls->showDBValue("emergency_contact1", $data, $keylink));
	$format = $settings->getViewFormat("emergency_contact1");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("emergency_contact1")))
		$class = ' rnr-field-number';
		
	$xt->assign("emergency_contact1_class", $class); // add class for field header as field value
	$xt->assign("emergency_contact2_mastervalue", $viewControls->showDBValue("emergency_contact2", $data, $keylink));
	$format = $settings->getViewFormat("emergency_contact2");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("emergency_contact2")))
		$class = ' rnr-field-number';
		
	$xt->assign("emergency_contact2_class", $class); // add class for field header as field value
	$xt->assign("permanent_address_mastervalue", $viewControls->showDBValue("permanent_address", $data, $keylink));
	$format = $settings->getViewFormat("permanent_address");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("permanent_address")))
		$class = ' rnr-field-number';
		
	$xt->assign("permanent_address_class", $class); // add class for field header as field value
	$xt->assign("current_address_mastervalue", $viewControls->showDBValue("current_address", $data, $keylink));
	$format = $settings->getViewFormat("current_address");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("current_address")))
		$class = ' rnr-field-number';
		
	$xt->assign("current_address_class", $class); // add class for field header as field value
	$xt->assign("date_of_birth_mastervalue", $viewControls->showDBValue("date_of_birth", $data, $keylink));
	$format = $settings->getViewFormat("date_of_birth");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("date_of_birth")))
		$class = ' rnr-field-number';
		
	$xt->assign("date_of_birth_class", $class); // add class for field header as field value
	$xt->assign("male_female_mastervalue", $viewControls->showDBValue("male_female", $data, $keylink));
	$format = $settings->getViewFormat("male_female");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("male_female")))
		$class = ' rnr-field-number';
		
	$xt->assign("male_female_class", $class); // add class for field header as field value

	$layout = GetPageLayout("user", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("user", "masterlist"));
}

?>