<?php
$strTableName="Designer Report (All)";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="designer_report";

$gstrOrderBy="ORDER BY work_date";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Designer Report (All)");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Designer Report (All)"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>