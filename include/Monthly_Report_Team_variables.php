<?php
$strTableName="Monthly Report Team";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="jobfile";

$gstrOrderBy="ORDER BY work_date DESC, team_id, ((1-(IF(((27000*COUNT(DISTINCT `designer_name`))-SUM(designer_time))<0,(((43200*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(43200*COUNT(DISTINCT `designer_name`))),((27000*COUNT(DISTINCT `designer_name`))-(SUM(designer_time)))/(27000*COUNT(DISTINCT `designer_name`)))))*((SUM(estimated_time))/(SUM(designer_time))))*100                          DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Monthly Report Team");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Monthly Report Team"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>