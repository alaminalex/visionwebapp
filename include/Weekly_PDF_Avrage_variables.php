<?php
$strTableName="Weekly PDF Avrage";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="designer_report";

$gstrOrderBy="ORDER BY pdf.pdf_name, jobfile.end2_date DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Weekly PDF Avrage");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Weekly PDF Avrage"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>