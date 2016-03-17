<?php
include_once(getabspath("classes/printpage.php"));

function DisplayMasterTableInfoForPrint_pdf_admin($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "pdf_admin";
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
		$keysAssoc["pdf_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("pdf_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("pdf_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("pdf_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("pdf_admin","pdf_id").": ".$keyValue;
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
	$xt->assign("current_price_mastervalue", $viewControls->showDBValue("current_price", $data, $keylink));
	$format = $settings->getViewFormat("current_price");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("current_price")))
		$class = ' rnr-field-number';
		
	$xt->assign("current_price_class", $class); // add class for field header as field value
	$xt->assign("price_base_on_eta_mastervalue", $viewControls->showDBValue("price_base_on_eta", $data, $keylink));
	$format = $settings->getViewFormat("price_base_on_eta");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("price_base_on_eta")))
		$class = ' rnr-field-number';
		
	$xt->assign("price_base_on_eta_class", $class); // add class for field header as field value
	$xt->assign("price_should_be_mastervalue", $viewControls->showDBValue("price_should_be", $data, $keylink));
	$format = $settings->getViewFormat("price_should_be");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("price_should_be")))
		$class = ' rnr-field-number';
		
	$xt->assign("price_should_be_class", $class); // add class for field header as field value

	$layout = GetPageLayout("pdf_admin", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("pdf_admin", "masterprint"));
}

?>