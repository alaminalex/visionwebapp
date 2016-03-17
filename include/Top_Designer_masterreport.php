<?php
function DisplayMasterTableInfo_Top_Designer($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	$tName = "Top_Designer";
	$xt->eventsObject = getEventObject($tName);
	
	$settings = new ProjectSettings($tName, PAGE_REPORT);
	$cipherer = new RunnerCipherer( $tName );
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_REPORT);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";


	if($detailtable == "job")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("user_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("user_id", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Top_Designer","user_id").": ".$keyValue;
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
	
		$xt->assign("end2_date_mastervalue", $viewControls->showDBValue("end2_date", $data, $keylink));
	$format = $settings->getViewFormat("end2_date");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("end2_date")))
		$class = ' rnr-field-number';
	
	$xt->assign("end2_date_class", $class); // add class for field header as field value
		$xt->assign("designer2_id_mastervalue", $viewControls->showDBValue("designer2_id", $data, $keylink));
	$format = $settings->getViewFormat("designer2_id");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("designer2_id")))
		$class = ' rnr-field-number';
	
	$xt->assign("designer2_id_class", $class); // add class for field header as field value
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
		$xt->assign("files_mastervalue", $viewControls->showDBValue("files", $data, $keylink));
	$format = $settings->getViewFormat("files");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("files")))
		$class = ' rnr-field-number';
	
	$xt->assign("files_class", $class); // add class for field header as field value
		$xt->assign("taken_time_avg_mastervalue", $viewControls->showDBValue("taken_time_avg", $data, $keylink));
	$format = $settings->getViewFormat("taken_time_avg");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("taken_time_avg")))
		$class = ' rnr-field-number';
	
	$xt->assign("taken_time_avg_class", $class); // add class for field header as field value
		$xt->assign("efficiency_mastervalue", $viewControls->showDBValue("efficiency", $data, $keylink));
	$format = $settings->getViewFormat("efficiency");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("efficiency")))
		$class = ' rnr-field-number';
	
	$xt->assign("efficiency_class", $class); // add class for field header as field value
		$xt->assign("jobfile_designer2_id_mastervalue", $viewControls->showDBValue("jobfile.designer2_id", $data, $keylink));
	$format = $settings->getViewFormat("jobfile.designer2_id");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("jobfile.designer2_id")))
		$class = ' rnr-field-number';
	
	$xt->assign("jobfile_designer2_id_class", $class); // add class for field header as field value
		$xt->assign("DATE_jobfile_end2_date__mastervalue", $viewControls->showDBValue("DATE(jobfile.end2_date)", $data, $keylink));
	$format = $settings->getViewFormat("DATE(jobfile.end2_date)");
	
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("DATE(jobfile.end2_date)")))
		$class = ' rnr-field-number';
	
	$xt->assign("DATE_jobfile_end2_date__class", $class); // add class for field header as field value

	$layout = GetPageLayout("Top_Designer", "masterreport");
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("Top_Designer", "masterreport"));
}
?>