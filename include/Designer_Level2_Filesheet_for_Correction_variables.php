<?php
$strTableName="Designer Level2 Filesheet for Correction";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="rejected_jobfile2";

$gstrOrderBy="ORDER BY rejected_jobfile2.end_date";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Designer Level2 Filesheet for Correction");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Designer Level2 Filesheet for Correction"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>