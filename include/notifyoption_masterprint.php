<?php
include_once(getabspath("classes/printpage.php"));

function DisplayMasterTableInfoForPrint_notifyoption($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "notifyoption";
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
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Download Job" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Pending Jobs" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Designer Worksheet" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "QC Worksheet" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "All Jobs" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Daily Job Report (Accepted)" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Designer Level 2" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Urgent Jobs" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Deadline Missed" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Need to Accept" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Need Notify" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Need Download" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Need QC" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Need Upload" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Pending 14704" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Daily Job Report (Notified)" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "14704 Need QC" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "14704 Need Upload" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "14704 Need Download" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "14704 Need Notify" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "14704 Need Accept" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "14704 Deadline Missed" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "14704 Urgent Jobs" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Delected Jobs" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Pending 18442" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "18442 Deadline Missed" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "18442 Urgent Jobs" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "18442 Need Notify" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "18442 Need Upload" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "18442 Need QC" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "18442 Need Download" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "18442 Need Accept" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Monthly Job Report (Accepted)" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Monthly Job Report (Notified)" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Daily Accepted Riajul" )
	{
		$keysAssoc["notify_option_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("notify_option_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("notify_option_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("notify_option_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("notifyoption","notify_option_id").": ".$keyValue;
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
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["notify_option_id"]));
	
	$xt->assign("notify_option_id_mastervalue", $viewControls->showDBValue("notify_option_id", $data, $keylink));
	$format = $settings->getViewFormat("notify_option_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("notify_option_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("notify_option_id_class", $class); // add class for field header as field value
	$xt->assign("notify_option_mastervalue", $viewControls->showDBValue("notify_option", $data, $keylink));
	$format = $settings->getViewFormat("notify_option");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("notify_option")))
		$class = ' rnr-field-number';
		
	$xt->assign("notify_option_class", $class); // add class for field header as field value
	$xt->assign("notify_detail_mastervalue", $viewControls->showDBValue("notify_detail", $data, $keylink));
	$format = $settings->getViewFormat("notify_detail");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("notify_detail")))
		$class = ' rnr-field-number';
		
	$xt->assign("notify_detail_class", $class); // add class for field header as field value
	$xt->assign("notify_comments_mastervalue", $viewControls->showDBValue("notify_comments", $data, $keylink));
	$format = $settings->getViewFormat("notify_comments");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("notify_comments")))
		$class = ' rnr-field-number';
		
	$xt->assign("notify_comments_class", $class); // add class for field header as field value

	$layout = GetPageLayout("notifyoption", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("notifyoption", "masterprint"));
}

?>