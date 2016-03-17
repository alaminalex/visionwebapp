<?php
$dalTableattendance_sheet = array();
$dalTableattendance_sheet["ID"] = array("type"=>3,"varname"=>"ID");
$dalTableattendance_sheet["date"] = array("type"=>135,"varname"=>"date");
$dalTableattendance_sheet["user_id"] = array("type"=>200,"varname"=>"user_id");
$dalTableattendance_sheet["login_time"] = array("type"=>135,"varname"=>"login_time");
$dalTableattendance_sheet["leave_type"] = array("type"=>200,"varname"=>"leave_type");
	$dalTableattendance_sheet["ID"]["key"]=true;

$dal_info["visionwebapp_at_192_168_2_1__attendance_sheet"] = &$dalTableattendance_sheet;
?>