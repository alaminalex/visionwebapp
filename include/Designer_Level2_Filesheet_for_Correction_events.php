<?php 
class eventclass_Designer_Level2_Filesheet_for_Correction  extends eventsBase
{ 
	function eventclass_Designer_Level2_Filesheet_for_Correction()
	{
	// fill list of events
		$this->events["BeforeQueryList"]=true;


//	onscreen events
		$this->events["Designer_Filesheet_snippet11"] = true;

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before SQL query
function BeforeQueryList(&$strSQL, &$strWhereClause, &$strOrderBy, &$pageObject)
{

		$get_query_string = $_GET["q"];
$string = $get_query_string;
$patterns = array(); 		 $patterns[0] = '/\(/'; $patterns[1] = '/job_id/'; 	 $patterns[2] = '/~equals~/';   $patterns[3] = '/\)/';	$patterns[4] = '/work_id/';
$replacements = array(); $replacements[4] = ''; $replacements[3] = 'job_id'; $replacements[2] = '='; 		$replacements[1] = '&';	$replacements[0] = 'work_id';
$custom_query_string = preg_replace($patterns, $replacements, $string);
$query_strings = explode("&",$custom_query_string); 

$query_key = array();
$query_value = array();

for($i=0; $i<count($query_strings); $i++)
{
//echo $query_strings[$i]."<br>";
$query_key_value = explode("=",$query_strings[$i]);
$query_key[$i] = $query_key_value[0];
$query_value[$i] = $query_key_value[1];
}

$get_work_id = array_search("work_id", $query_key);
$GLOBALS["work_id"] = $query_value[$get_work_id];

$get_job_id = array_search("job_id", $query_key);
$GLOBALS["job_id"] = $query_value[$get_job_id];

if($_GET["q"] != "")
{
//$strWhereClause = "`designer2_id`='".$_SESSION["user_id"]."' AND `job_id`='".$GLOBALS["job_id"]."'";
$strWhereClause = whereAdd($strWhereClause, "rejected_jobfile2.designer2_id = '".$_SESSION["user_id"]."' AND `rejected_jobfile2`.`job_id`='".$GLOBALS["job_id"]."'");

}
else
{
//$strWhereClause = "`designer2_id`='".$_SESSION["user_id"]."'";
$strWhereClause = whereAdd($strWhereClause, "rejected_jobfile2.designer2_id = '".$_SESSION["user_id"]."'");

}

//MODIFY ABOBE THIS LINE

;		
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events
function Designer_Filesheet_snippet11(&$params)
{
/*
		$get_query_string = $_GET["q"];
$string = $get_query_string;
$patterns = array(); 		 $patterns[0] = '/\(/'; $patterns[1] = '/job_id/'; 	 $patterns[2] = '/~equals~/';   $patterns[3] = '/\)/';	$patterns[4] = '/work_id/';
$replacements = array(); $replacements[4] = ''; $replacements[3] = 'job_id'; $replacements[2] = '='; 		$replacements[1] = '&';	$replacements[0] = 'work_id';
$custom_query_string = preg_replace($patterns, $replacements, $string);
$query_strings = explode("&",$custom_query_string); 

$query_key = array();
$query_value = array();

for($i=0; $i<count($query_strings); $i++)
{
//echo $query_strings[$i]."<br>";
$query_key_value = explode("=",$query_strings[$i]);
$query_key[$i] = $query_key_value[0];
$query_value[$i] = $query_key_value[1];
}

$get_work_id = array_search("work_id", $query_key);
$GLOBALS["work_id"] = $query_value[$get_work_id];

$get_job_id = array_search("job_id", $query_key);
$GLOBALS["job_id"] = $query_value[$get_job_id];

$select_pdf_query = "SELECT job.pdf_id, pdf.pdf_name as this_pdf_name, job.notes, job.web_notes, job.comments
FROM job
INNER JOIN pdf on pdf.pdf_id = job.pdf_id
AND job.job_id = '".$GLOBALS["job_id"]."'
";

$pdf_name_record = CustomQuery($select_pdf_query);
$job_data = db_fetch_array($pdf_name_record);

$pdf_name_this_job = $job_data["this_pdf_name"];
echo "PDF ID:".$pdf_name_this_job."<br>";
echo $job_data["notes"];

*/
;
}

} 
?>
