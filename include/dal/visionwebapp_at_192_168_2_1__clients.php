<?php
$dalTableclients = array();
$dalTableclients["client_id"] = array("type"=>3,"varname"=>"client_id");
$dalTableclients["client_name"] = array("type"=>200,"varname"=>"client_name");
$dalTableclients["priority"] = array("type"=>3,"varname"=>"priority");
$dalTableclients["client_group"] = array("type"=>200,"varname"=>"client_group");
$dalTableclients["client_username"] = array("type"=>200,"varname"=>"client_username");
$dalTableclients["client_password"] = array("type"=>200,"varname"=>"client_password");
$dalTableclients["contact_fname"] = array("type"=>200,"varname"=>"contact_fname");
$dalTableclients["contact_lname"] = array("type"=>200,"varname"=>"contact_lname");
$dalTableclients["email"] = array("type"=>200,"varname"=>"email");
$dalTableclients["phone"] = array("type"=>200,"varname"=>"phone");
$dalTableclients["mobile"] = array("type"=>200,"varname"=>"mobile");
$dalTableclients["address"] = array("type"=>200,"varname"=>"address");
$dalTableclients["country"] = array("type"=>200,"varname"=>"country");
$dalTableclients["preferred_currency"] = array("type"=>200,"varname"=>"preferred_currency");
	$dalTableclients["client_id"]["key"]=true;

$dal_info["visionwebapp_at_192_168_2_1__clients"] = &$dalTableclients;
?>