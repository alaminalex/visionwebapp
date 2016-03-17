<?php
$dalTableuser = array();
$dalTableuser["user_id"] = array("type"=>3,"varname"=>"user_id");
$dalTableuser["user_status"] = array("type"=>3,"varname"=>"user_status");
$dalTableuser["username"] = array("type"=>200,"varname"=>"username");
$dalTableuser["password"] = array("type"=>200,"varname"=>"password");
$dalTableuser["department_id"] = array("type"=>3,"varname"=>"department_id");
$dalTableuser["subdiv_id"] = array("type"=>3,"varname"=>"subdiv_id");
$dalTableuser["group_id"] = array("type"=>3,"varname"=>"group_id");
$dalTableuser["designation"] = array("type"=>200,"varname"=>"designation");
$dalTableuser["employee_id"] = array("type"=>3,"varname"=>"employee_id");
$dalTableuser["fname"] = array("type"=>200,"varname"=>"fname");
$dalTableuser["lname"] = array("type"=>200,"varname"=>"lname");
$dalTableuser["nickname"] = array("type"=>200,"varname"=>"nickname");
$dalTableuser["email"] = array("type"=>200,"varname"=>"email");
$dalTableuser["phone"] = array("type"=>200,"varname"=>"phone");
$dalTableuser["mobile"] = array("type"=>200,"varname"=>"mobile");
$dalTableuser["log"] = array("type"=>201,"varname"=>"log");
$dalTableuser["images_assigned"] = array("type"=>3,"varname"=>"images_assigned");
$dalTableuser["user_picture"] = array("type"=>200,"varname"=>"user_picture");
$dalTableuser["team"] = array("type"=>200,"varname"=>"team");
$dalTableuser["ad_group_id"] = array("type"=>200,"varname"=>"ad_group_id");
$dalTableuser["lastaccess"] = array("type"=>135,"varname"=>"lastaccess");
$dalTableuser["joining_date"] = array("type"=>7,"varname"=>"joining_date");
$dalTableuser["emergency_contact1"] = array("type"=>200,"varname"=>"emergency_contact1");
$dalTableuser["emergency_contact2"] = array("type"=>200,"varname"=>"emergency_contact2");
$dalTableuser["permanent_address"] = array("type"=>201,"varname"=>"permanent_address");
$dalTableuser["current_address"] = array("type"=>201,"varname"=>"current_address");
$dalTableuser["date_of_birth"] = array("type"=>7,"varname"=>"date_of_birth");
$dalTableuser["male_female"] = array("type"=>200,"varname"=>"male_female");
	$dalTableuser["user_id"]["key"]=true;
	$dalTableuser["username"]["key"]=true;

$dal_info["visionwebapp_at_192_168_2_1__user"] = &$dalTableuser;
?>