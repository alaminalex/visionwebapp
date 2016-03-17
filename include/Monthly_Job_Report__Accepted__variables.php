<?php
$strTableName="Monthly Job Report (Accepted)";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="job";

$gstrOrderBy="ORDER BY MONTH(job.accepted_date) DESC, pdf.pdf_name";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Monthly Job Report (Accepted)");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Monthly Job Report (Accepted)"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>