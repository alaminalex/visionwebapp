<?php
$strTableName="Pending Jobs";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="job";

$gstrOrderBy="ORDER BY TIMEDIFF(delivery_date, NOW()), delivery_date, is_urgent DESC, accepted_date, jobstatus_id";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Pending Jobs");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Pending Jobs"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>