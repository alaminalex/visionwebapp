<?php
$strTableName="Monthly PDF Avrage";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="jobfile";

$gstrOrderBy="ORDER BY pdf.pdf_name, jobfile.end2_date DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Monthly PDF Avrage");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Monthly PDF Avrage"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>