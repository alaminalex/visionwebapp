<?php
$strTableName="QC Done Today";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="jobfile";

$gstrOrderBy="ORDER BY pdf.pdf_name";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("QC Done Today");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["QC Done Today"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>