<?php
$strTableName="QC Worksheet for Correction";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="rejected_job";

$gstrOrderBy="ORDER BY designer_time_left DESC, rejected_job.delivery_date, rejected_job.jobstatus_id";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("QC Worksheet for Correction");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["QC Worksheet for Correction"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>