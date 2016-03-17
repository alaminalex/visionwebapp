<?php
$strTableName="Correction Files";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="rejected_jobfile";

$gstrOrderBy="ORDER BY rejected_jobfile.reject_date DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Correction Files");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Correction Files"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>