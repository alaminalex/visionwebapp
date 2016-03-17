<?php
function DisplayMasterTableInfo_subdivision($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "subdivision";
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

	if($detailtable == "user")
	{
		$keysAssoc["subdiv_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("subdiv_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("subdivision","subdiv_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Users")
	{
		$keysAssoc["subdiv_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("subdiv_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("subdivision","subdiv_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Team Report")
	{
		$keysAssoc["subdiv_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("subdiv_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("subdivision","subdiv_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if( !$data || !count($data) )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["subdiv_id"]));
	
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
	$xt->assign("subdiv_name_mastervalue", $viewControls->showDBValue("subdiv_name", $data, $keylink));
	$format = $settings->getViewFormat("subdiv_name");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("subdiv_name")))
		$class = ' rnr-field-number';
		
	$xt->assign("subdiv_name_class", $class); // add class for field header as field value
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
	$xt->assign("total_resources_mastervalue", $viewControls->showDBValue("total_resources", $data, $keylink));
	$format = $settings->getViewFormat("total_resources");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("total_resources")))
		$class = ' rnr-field-number';
		
	$xt->assign("total_resources_class", $class); // add class for field header as field value

	$layout = GetPageLayout("subdivision", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("subdivision", "masterlist"));
}

?>