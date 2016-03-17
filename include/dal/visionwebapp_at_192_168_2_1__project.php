<?php
$dalTableproject = array();
$dalTableproject["project_id"] = array("type"=>3,"varname"=>"project_id");
$dalTableproject["project_name"] = array("type"=>200,"varname"=>"project_name");
$dalTableproject["client_id"] = array("type"=>3,"varname"=>"client_id");
$dalTableproject["pdf_id"] = array("type"=>3,"varname"=>"pdf_id");
$dalTableproject["instructions"] = array("type"=>201,"varname"=>"instructions");
$dalTableproject["extra_instructions"] = array("type"=>201,"varname"=>"extra_instructions");
$dalTableproject["ftphost"] = array("type"=>200,"varname"=>"ftphost");
$dalTableproject["ftpusername"] = array("type"=>200,"varname"=>"ftpusername");
$dalTableproject["ftppassword"] = array("type"=>200,"varname"=>"ftppassword");
	$dalTableproject["project_id"]["key"]=true;

$dal_info["visionwebapp_at_192_168_2_1__project"] = &$dalTableproject;
?>