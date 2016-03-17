<?php
$dalTablemail_servers = array();
$dalTablemail_servers["id"] = array("type"=>3,"varname"=>"id");
$dalTablemail_servers["server"] = array("type"=>200,"varname"=>"server");
$dalTablemail_servers["user"] = array("type"=>200,"varname"=>"user");
$dalTablemail_servers["password"] = array("type"=>200,"varname"=>"password");
$dalTablemail_servers["interval"] = array("type"=>3,"varname"=>"interval");
$dalTablemail_servers["leave_copy"] = array("type"=>3,"varname"=>"leave_copy");
$dalTablemail_servers["lastconnect"] = array("type"=>135,"varname"=>"lastconnect");
$dalTablemail_servers["port"] = array("type"=>3,"varname"=>"port");
	$dalTablemail_servers["id"]["key"]=true;

$dal_info["visionwebapp_at_192_168_2_1__mail_servers"] = &$dalTablemail_servers;
?>