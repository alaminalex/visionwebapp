<?php
require_once(getabspath("classes/cipherer.php"));



$tdataDashboard = array();	
$tdataDashboard[".ShortName"] = "Dashboard";

//	field labels
$fieldLabelsDashboard = array();
$pageTitlesDashboard = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDashboard["English"] = array();
	$fieldLabelsDashboard["English"]["Daily_Job_Report__Accepted__accepted_date"] = "Accepted Date";
	$fieldLabelsDashboard["English"]["Daily_Job_Report__Accepted__pdf_id"] = "Pdf Id";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDashboard[""] = array();
}

//	search fields
$tdataDashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"Daily Job Report (Accepted)", "field"=>"accepted_date" );
$tdataDashboard[".searchFields"]["Daily_Job_Report__Accepted__accepted_date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Daily Job Report (Accepted)", "field"=>"pdf_id" );
$tdataDashboard[".searchFields"]["Daily_Job_Report__Accepted__pdf_id"] = $dashField;

// all search fields
$tdataDashboard[".allSearchFields"] = array();
$tdataDashboard[".allSearchFields"][] = "Daily_Job_Report__Accepted__accepted_date";
$tdataDashboard[".allSearchFields"][] = "Daily_Job_Report__Accepted__pdf_id";

// good like search fields
$tdataDashboard[".googleLikeFields"] = array();
$tdataDashboard[".googleLikeFields"][] = "Daily_Job_Report__Accepted__accepted_date";
$tdataDashboard[".googleLikeFields"][] = "Daily_Job_Report__Accepted__pdf_id";

$tdataDashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "Daily_Job_Report__Accepted__report", "table" => "Daily Job Report (Accepted)", "type" => 2);
	$dbelement["cellName"] = "cell_0_0";
	
			

	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Daily_Job_Report__Notified__report", "table" => "Daily Job Report (Notified)", "type" => 2);
	$dbelement["cellName"] = "cell_0_1";
	
			

	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Files_Done_Today_report", "table" => "Display Files Done Today", "type" => 2);
	$dbelement["cellName"] = "cell_0_2";
	
			

	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Files_Need_to_Work_report", "table" => "Files Need to Work", "type" => 2);
	$dbelement["cellName"] = "cell_3_0";
	
			

	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Files_Need_to_Work_Designer_report", "table" => "Display Files Now Working", "type" => 2);
	$dbelement["cellName"] = "cell_1_2";
	
			

	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Files_Need_to_Work_QC_report", "table" => "Display Files Need to Work QC", "type" => 2);
	$dbelement["cellName"] = "cell_2_2";
	
			

	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Files_Notifyed_Today_report", "table" => "Display Files Notifyed Today", "type" => 2);
	$dbelement["cellName"] = "cell_3_2";
	
			

	$tdataDashboard[".dashElements"][] = $dbelement;

$tdataDashboard[".shortTableName"] = "Dashboard";
$tdataDashboard[".entityType"] = 4;


$tableEvents["Dashboard"] = new eventsBase;
$tdataDashboard[".hasEvents"] = false;


$tdataDashboard[".tableType"] = "dashboard";


																																																																																																																																															
$tdataDashboard[".addPageEvents"] = false;

$tables_data["Dashboard"]=&$tdataDashboard;
$field_labels["Dashboard"] = &$fieldLabelsDashboard;
$page_titles["Dashboard"] = &$pageTitlesDashboard;

?>