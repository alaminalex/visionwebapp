<?php
$strTableName="generator_top_team_performance";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="designer_report";

$gstrOrderBy="ORDER BY work_date DESC, ((1-(IF(((25200*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((25200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(25200*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100      DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("generator_top_team_performance");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["generator_top_team_performance"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>