<?php
$strTableName="Designer Worksheet";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="job";

$gstrOrderBy="ORDER BY designer_time_left DESC, job.delivery_date, job.is_urgent DESC, job.accepted_date, job.jobstatus_id";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Designer Worksheet");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Designer Worksheet"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>