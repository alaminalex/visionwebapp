<?php
$strTableName="Daily Users Work";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="users_work_report";

$gstrOrderBy="ORDER BY work_date DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Daily Users Work");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Daily Users Work"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>