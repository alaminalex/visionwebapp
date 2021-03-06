<?php
include_once(getabspath("classes/printpage.php"));

function DisplayMasterTableInfoForPrint_jobstatus($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "jobstatus";
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

	if( $detailtable == "job" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Download Job" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Pending Jobs" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Designer Worksheet" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "QC Worksheet" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "All Jobs" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Daily Job Report (Accepted)" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Designer Level 2" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Urgent Jobs" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Deadline Missed" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Need to Accept" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Need Notify" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Need Download" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Need QC" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Need Upload" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Pending 14704" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Daily Job Report (Notified)" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "14704 Need QC" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "14704 Need Upload" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "14704 Need Download" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "14704 Need Notify" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "14704 Need Accept" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "14704 Deadline Missed" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "14704 Urgent Jobs" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Delected Jobs" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Pending 18442" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "18442 Deadline Missed" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "18442 Urgent Jobs" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "18442 Need Notify" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "18442 Need Upload" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "18442 Need QC" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "18442 Need Download" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "18442 Need Accept" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Monthly Job Report (Accepted)" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Monthly Job Report (Notified)" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Daily Accepted Riajul" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Download Reject Job" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "QC Worksheet for Correction" )
	{
		$keysAssoc["jobstatus_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("jobstatus_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("jobstatus_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("jobstatus_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("jobstatus","jobstatus_id").": ".$keyValue;
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
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["jobstatus_id"]));
	
	$xt->assign("jobstatus_id_mastervalue", $viewControls->showDBValue("jobstatus_id", $data, $keylink));
	$format = $settings->getViewFormat("jobstatus_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("jobstatus_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("jobstatus_id_class", $class); // add class for field header as field value
	$xt->assign("job_status_mastervalue", $viewControls->showDBValue("job_status", $data, $keylink));
	$format = $settings->getViewFormat("job_status");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("job_status")))
		$class = ' rnr-field-number';
		
	$xt->assign("job_status_class", $class); // add class for field header as field value
	$xt->assign("status_detail_mastervalue", $viewControls->showDBValue("status_detail", $data, $keylink));
	$format = $settings->getViewFormat("status_detail");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("status_detail")))
		$class = ' rnr-field-number';
		
	$xt->assign("status_detail_class", $class); // add class for field header as field value
	$xt->assign("applicable_to_mastervalue", $viewControls->showDBValue("applicable_to", $data, $keylink));
	$format = $settings->getViewFormat("applicable_to");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("applicable_to")))
		$class = ' rnr-field-number';
		
	$xt->assign("applicable_to_class", $class); // add class for field header as field value
	$xt->assign("actions_mastervalue", $viewControls->showDBValue("actions", $data, $keylink));
	$format = $settings->getViewFormat("actions");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("actions")))
		$class = ' rnr-field-number';
		
	$xt->assign("actions_class", $class); // add class for field header as field value

	$layout = GetPageLayout("jobstatus", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("jobstatus", "masterprint"));
}

?>