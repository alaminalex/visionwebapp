<?php
$strTableName="Daily QC";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="jobfile";

$gstrOrderBy="ORDER BY work_date DESC, ((1-(IF((27000-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(27000-(SUM(designer_time)))/27000)))*((SUM(estimated_time))/(SUM(designer_time))))*100                  DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Daily QC");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Daily QC"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>