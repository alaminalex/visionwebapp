<?php
include_once(getabspath("classes/printpage.php"));

function DisplayMasterTableInfoForPrint_subdivision($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "subdivision";
	$xt->eventsObject = getEventObject($tName);
	
	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["pageType"] = PAGE_PRINT;
	$mParams["tName"] = $tName;
	$masterPage = new PrintPage($mParams);
	
	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, PAGE_PRINT);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT, $masterPage);
	
	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "user" )
	{
		$keysAssoc["subdiv_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("subdiv_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("subdiv_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("subdiv_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("subdivision","subdiv_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Users" )
	{
		$keysAssoc["subdiv_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("subdiv_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("subdiv_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("subdiv_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("subdivision","subdiv_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Team Report" )
	{
		$keysAssoc["subdiv_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("subdiv_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("subdiv_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("subdiv_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("subdivision","subdiv_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}
	
	if( !$where )
		return;
	
	$str = SecuritySQL("Export", $tName );
	if( strlen($str) )
		$where.= " and ".$str;
	
	$strWhere = whereAdd( $masterQuery->m_where->toSql($masterQuery), $where );
	if( strlen($strWhere) )
		$strWhere= " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
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

	$layout = GetPageLayout("subdivision", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("subdivision", "masterprint"));
}

?>