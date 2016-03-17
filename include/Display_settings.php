<?php
require_once(getabspath("classes/cipherer.php"));



$tdataDisplay = array();	
$tdataDisplay[".ShortName"] = "Display";

//	field labels
$fieldLabelsDisplay = array();
$pageTitlesDisplay = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDisplay["English"] = array();
	$fieldLabelsDisplay["English"]["Files_Need_to_Work_QC_files"] = "Files";
	$fieldLabelsDisplay["English"]["Files_Need_to_Work_QC_total"] = "Total";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDisplay[""] = array();
}

//	search fields
$tdataDisplay[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"Display Files Need to Work QC", "field"=>"files" );
$tdataDisplay[".searchFields"]["Files_Need_to_Work_QC_files"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Display Files Need to Work QC", "field"=>"total" );
$tdataDisplay[".searchFields"]["Files_Need_to_Work_QC_total"] = $dashField;

// all search fields
$tdataDisplay[".allSearchFields"] = array();
$tdataDisplay[".allSearchFields"][] = "Files_Need_to_Work_QC_files";
$tdataDisplay[".allSearchFields"][] = "Files_Need_to_Work_QC_total";

// good like search fields
$tdataDisplay[".googleLikeFields"] = array();
$tdataDisplay[".googleLikeFields"][] = "Files_Need_to_Work_QC_files";
$tdataDisplay[".googleLikeFields"][] = "Files_Need_to_Work_QC_total";

$tdataDisplay[".dashElements"] = array();

	$dbelement = array( "elementName" => "Files_Need_to_Work_QC_report", "table" => "Display Files Need to Work QC", "type" => 2);
	$dbelement["cellName"] = "cell_3_1";
	
		$dbelement["reload"] = 1800;
		

	$tdataDisplay[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Files_Done_Today_report", "table" => "Display Files Done Today", "type" => 2);
	$dbelement["cellName"] = "cell_4_1";
	
		$dbelement["reload"] = 1800;
		

	$tdataDisplay[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "generator_top_team_performance_report", "table" => "Display_top_team_performance", "type" => 2);
	$dbelement["cellName"] = "cell_0_0";
	
			

	$tdataDisplay[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "generator_top_designer_performance_report", "table" => "Display_top_designer_performance", "type" => 2);
	$dbelement["cellName"] = "cell_2_0";
	
			

	$tdataDisplay[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "generator_top_images_report", "table" => "Display generator_top_images", "type" => 2);
	$dbelement["cellName"] = "cell_4_0";
	
			

	$tdataDisplay[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "rejected_today_report", "table" => "Display Rejected today", "type" => 2);
	$dbelement["cellName"] = "cell_2_2";
	
		$dbelement["reload"] = 1800;
		

	$tdataDisplay[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "QC_Done_Today_report", "table" => "Display QC Done Today", "type" => 2);
	$dbelement["cellName"] = "cell_3_2";
	
			

	$tdataDisplay[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Files_Notifyed_Today_report", "table" => "Display Files Notifyed Today", "type" => 2);
	$dbelement["cellName"] = "cell_4_2";
	
			

	$tdataDisplay[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Files_Need_to_Download_report", "table" => "Display Files Need to Download", "type" => 2);
	$dbelement["cellName"] = "cell_1_1";
	
			

	$tdataDisplay[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Files_Need_to_Distribute_report", "table" => "Display Files Need to Distribute", "type" => 2);
	$dbelement["cellName"] = "cell_1_2";
	
			

	$tdataDisplay[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Files_Now_Working_report", "table" => "Display Files Now Working", "type" => 2);
	$dbelement["cellName"] = "cell_2_1";
	
			

	$tdataDisplay[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Display_ETA_report", "table" => "Display ETA", "type" => 2);
	$dbelement["cellName"] = "cell_0_1";
	
			

	$tdataDisplay[".dashElements"][] = $dbelement;

$tdataDisplay[".shortTableName"] = "Display";
$tdataDisplay[".entityType"] = 4;


include_once(getabspath("include/Display_events.php"));
$tableEvents["Display"] = new eventclass_Display;
$tdataDisplay[".hasEvents"] = true;


$tdataDisplay[".tableType"] = "dashboard";


																																																																																																																																															
$tdataDisplay[".addPageEvents"] = true;

$tables_data["Display"]=&$tdataDisplay;
$field_labels["Display"] = &$fieldLabelsDisplay;
$page_titles["Display"] = &$pageTitlesDisplay;

?>