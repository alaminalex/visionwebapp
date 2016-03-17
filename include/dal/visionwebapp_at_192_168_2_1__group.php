<?php
$dalTablegroup = array();
$dalTablegroup["group_id"] = array("type"=>3,"varname"=>"group_id");
$dalTablegroup["groupname"] = array("type"=>200,"varname"=>"groupname");
$dalTablegroup["groupname_display"] = array("type"=>200,"varname"=>"groupname_display");
$dalTablegroup["description"] = array("type"=>201,"varname"=>"description");
$dalTablegroup["privileges"] = array("type"=>201,"varname"=>"privileges");
	$dalTablegroup["group_id"]["key"]=true;

$dal_info["visionwebapp_at_192_168_2_1__group"] = &$dalTablegroup;
?>