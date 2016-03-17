<?php
$strTableName="XX";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="designer_report";

$gstrOrderBy="ORDER BY work_date DESC, (SUM(efficiency)/SUM(total_images_counted))*(1-
(
(IF((25200-SUM(designer_time))<0,((43200-(SUM(designer_time)))/43200),(25200-(SUM(designer_time)))/25200))
)) DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("XX");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["XX"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>