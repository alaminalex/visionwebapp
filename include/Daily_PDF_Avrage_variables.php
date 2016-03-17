<?php
$strTableName="Daily PDF Avrage";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="designer_report";

$gstrOrderBy="ORDER BY Date(work_date) DESC, SUM(total_images_counted) DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Daily PDF Avrage");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Daily PDF Avrage"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>