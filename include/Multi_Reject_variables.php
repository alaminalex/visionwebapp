<?php
$strTableName="Multi Reject";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="jobfile";

$gstrOrderBy="ORDER BY file_url";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Multi Reject");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Multi Reject"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>