<?php
$strTableName="Internal Rejection";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="rejected_jobfile2";

$gstrOrderBy="ORDER BY DATE(SUBSTRING((TIMESTAMPADD(MINUTE,105,`end2_date`)), 1, 10)) DESC, rejected_jobfile2.designer2_id";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Internal Rejection");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Internal Rejection"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>