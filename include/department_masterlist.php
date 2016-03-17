<?php
function DisplayMasterTableInfo_department($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	$tName = "department";
	$xt->eventsObject = getEventObject($tName);
	
	$settings = new ProjectSettings($tName, PAGE_LIST);
	$cipherer = new RunnerCipherer( $tName );
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";


	if($detailtable == "subdivision")
	{
		$keysAssoc["department_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("department_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("department_id", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("department_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("department","department_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "user")
	{
		$keysAssoc["department_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("department_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("department_id", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("department_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("department","department_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Users")
	{
		$keysAssoc["department_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("department_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("department_id", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("department_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("department","department_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Team Report")
	{
		$keysAssoc["department_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("department_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("department_id", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("department_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("department","department_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Top_Team")
	{
		$keysAssoc["department_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("department_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("department_id", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("department_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("department","department_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Top_Designer")
	{
		$keysAssoc["department_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("department_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("department_id", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("department_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("department","department_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "Top_Efficiency")
	{
		$keysAssoc["department_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("department_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("department_id", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("department_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("department","department_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}
	if( !$where )
		return;
	
	$str = SecuritySQL("Search", $tName);
	if( strlen($str) )
		$where.= " and ".$str;

	$strWhere = whereAdd( $masterQuery->WhereToSql(), $where );
	if( strlen($strWhere) )
		$strWhere = " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["department_id"]));
	
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
	$xt->assign("department_name_mastervalue", $viewControls->showDBValue("department_name", $data, $keylink));
	$format = $settings->getViewFormat("department_name");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("department_name")))
		$class = ' rnr-field-number';
		
	$xt->assign("department_name_class", $class); // add class for field header as field value
	$xt->assign("department_detail_mastervalue", $viewControls->showDBValue("department_detail", $data, $keylink));
	$format = $settings->getViewFormat("department_detail");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("department_detail")))
		$class = ' rnr-field-number';
		
	$xt->assign("department_detail_class", $class); // add class for field header as field value
	$xt->assign("total_subdiv_mastervalue", $viewControls->showDBValue("total_subdiv", $data, $keylink));
	$format = $settings->getViewFormat("total_subdiv");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("total_subdiv")))
		$class = ' rnr-field-number';
		
	$xt->assign("total_subdiv_class", $class); // add class for field header as field value
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

	$layout = GetPageLayout("department", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("department", "masterlist"));
}

?>