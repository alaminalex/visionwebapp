<?php
function DisplayMasterTableInfo_Team_Report($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "Team Report";
	$xt->eventsObject = getEventObject($tName);
	
	include_once('classes/listpage.php');
	include_once('classes/listpage_simple.php');
	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["mode"] = LIST_SIMPLE;
	$mParams["pageType"] = PAGE_LIST;
	$mParams["flyId"] = $params["recId"];
	$masterPage = ListPage::createListPage($tName, $mParams);
	
	$settings = $masterPage->pSet;
	$viewControls = new ViewControlsContainer($settings, PAGE_REPORT, $masterPage);
	
	$keysAssoc = array();
	$showKeys = "";
	

	if($detailtable == "job")
	{
		$keysAssoc["user_id"] = $keys[1-1];
						$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Team_Report","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}
	
	if( !$data || !count($data) )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));		
	
	$keylink = "";
	$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["username"]));
	
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
	
	$layout = GetPageLayout("Team_Report", "masterreport");
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("Team_Report", "masterreport"));
}
?>