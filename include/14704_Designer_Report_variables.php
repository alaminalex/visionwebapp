<?php
$strTableName="14704 Designer Report";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="jobfile";

$gstrOrderBy="ORDER BY jobfile.end2_date DESC, `user`.team, jobfile.designer2_id DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("14704 Designer Report");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["14704 Designer Report"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>