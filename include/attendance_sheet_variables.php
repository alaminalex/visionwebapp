<?php
$strTableName="attendance_sheet";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="attendance_sheet";

$gstrOrderBy="ORDER BY DATE(data_audit.`datetime`) DESC, `user`.employee_id, data_audit.`action`";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("attendance_sheet");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["attendance_sheet"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>