<?php
$strTableName="Daily Report Designer PDF";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="jobfile";

$gstrOrderBy="ORDER BY work_date DESC, SUM(total_images_counted) DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Daily Report Designer PDF");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Daily Report Designer PDF"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>