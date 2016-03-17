<?php
$strTableName="employee_present";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="data_audit";

$gstrOrderBy="ORDER BY DATE(data_audit.`datetime`) DESC, `user`.username";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("employee_present");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["employee_present"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>