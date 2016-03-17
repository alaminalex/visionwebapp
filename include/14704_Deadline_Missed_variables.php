<?php
$strTableName="14704 Deadline Missed";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="job";

$gstrOrderBy="ORDER BY TIMEDIFF(delivery_date, NOW()), delivery_date, is_urgent DESC, accepted_date, jobstatus_id";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("14704 Deadline Missed");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["14704 Deadline Missed"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>