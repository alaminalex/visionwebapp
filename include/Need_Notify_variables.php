<?php
$strTableName="Need Notify";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="job";

$gstrOrderBy="ORDER BY delivery_date, is_urgent DESC, accepted_date, jobstatus_id";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Need Notify");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Need Notify"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>