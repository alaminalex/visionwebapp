<?php
require_once(getabspath("classes/cipherer.php"));



$tdataEmailer = array();	
$tdataEmailer[".ShortName"] = "Emailer";

//	field labels
$fieldLabelsEmailer = array();
$pageTitlesEmailer = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEmailer["English"] = array();
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEmailer[""] = array();
}

//	search fields
$tdataEmailer[".searchFields"] = array();

// all search fields
$tdataEmailer[".allSearchFields"] = array();

// good like search fields
$tdataEmailer[".googleLikeFields"] = array();

$tdataEmailer[".dashElements"] = array();


$tdataEmailer[".shortTableName"] = "Emailer";
$tdataEmailer[".entityType"] = 4;


include_once(getabspath("include/Emailer_events.php"));
$tableEvents["Emailer"] = new eventclass_Emailer;
$tdataEmailer[".hasEvents"] = true;


$tdataEmailer[".tableType"] = "dashboard";


																																																																																																																																															
$tdataEmailer[".addPageEvents"] = false;

$tables_data["Emailer"]=&$tdataEmailer;
$field_labels["Emailer"] = &$fieldLabelsEmailer;
$page_titles["Emailer"] = &$pageTitlesEmailer;

?>