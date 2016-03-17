<?php
include_once(getabspath("classes/printpage.php"));

function DisplayMasterTableInfoForPrint_group($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "group";
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
		$keysAssoc["group_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("group_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("group_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("group_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("group","group_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Users" )
	{
		$keysAssoc["group_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("group_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("group_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("group_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("group","group_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Team Report" )
	{
		$keysAssoc["group_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("group_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("group_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("group_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("group","group_id").": ".$keyValue;
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
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["group_id"]));
	
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
	$xt->assign("groupname_mastervalue", $viewControls->showDBValue("groupname", $data, $keylink));
	$format = $settings->getViewFormat("groupname");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("groupname")))
		$class = ' rnr-field-number';
		
	$xt->assign("groupname_class", $class); // add class for field header as field value
	$xt->assign("groupname_display_mastervalue", $viewControls->showDBValue("groupname_display", $data, $keylink));
	$format = $settings->getViewFormat("groupname_display");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("groupname_display")))
		$class = ' rnr-field-number';
		
	$xt->assign("groupname_display_class", $class); // add class for field header as field value
	$xt->assign("description_mastervalue", $viewControls->showDBValue("description", $data, $keylink));
	$format = $settings->getViewFormat("description");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("description")))
		$class = ' rnr-field-number';
		
	$xt->assign("description_class", $class); // add class for field header as field value
	$xt->assign("privileges_mastervalue", $viewControls->showDBValue("privileges", $data, $keylink));
	$format = $settings->getViewFormat("privileges");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("privileges")))
		$class = ' rnr-field-number';
		
	$xt->assign("privileges_class", $class); // add class for field header as field value

	$layout = GetPageLayout("group", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("group", "masterprint"));
}

?>