<?php
$strTableName="Top_Designer";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="user";

$gstrOrderBy="ORDER BY DATE(jobfile.end2_date) DESC, files DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Top_Designer");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Top_Designer"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>