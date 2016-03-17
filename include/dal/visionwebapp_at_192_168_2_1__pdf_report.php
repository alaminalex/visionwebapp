<?php
$dalTablepdf_report = array();
$dalTablepdf_report["report_id"] = array("type"=>200,"varname"=>"report_id");
$dalTablepdf_report["pdf_date"] = array("type"=>200,"varname"=>"pdf_date");
$dalTablepdf_report["pdf_id"] = array("type"=>3,"varname"=>"pdf_id");
$dalTablepdf_report["pdf_name"] = array("type"=>200,"varname"=>"pdf_name");
$dalTablepdf_report["pdf_eta"] = array("type"=>200,"varname"=>"pdf_eta");
$dalTablepdf_report["designer_time"] = array("type"=>200,"varname"=>"designer_time");
$dalTablepdf_report["qc_time"] = array("type"=>200,"varname"=>"qc_time");
$dalTablepdf_report["efficiency"] = array("type"=>3,"varname"=>"efficiency");
$dalTablepdf_report["files"] = array("type"=>3,"varname"=>"files");
	$dalTablepdf_report["report_id"]["key"]=true;

$dal_info["visionwebapp_at_192_168_2_1__pdf_report"] = &$dalTablepdf_report;
?>