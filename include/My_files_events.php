<?php 
class eventclass_My_files  extends eventsBase
{ 
	function eventclass_My_files()
	{
	// fill list of events
		$this->events["BeforeProcessList"]=true;


		$this->events["BeforeQueryList"]=true;


//	onscreen events
		$this->events["jobfile_snippet1"] = true;


	}
// Captchas functions	

//	handlers

				// List page: Before process
function BeforeProcessList(&$pageObject)
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

;		
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before SQL query
function BeforeQueryList(&$strSQL, &$strWhereClause, &$strOrderBy, &$pageObject)
{

		
$strWhereClause = whereAdd($strWhereClause, "designer_id = '".$_SESSION["user_id"]."' OR `qc_id`='".$_SESSION["user_id"]."'");


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events
function jobfile_snippet1(&$params)
{
if($GLOBALS["work_id"] != "" && $GLOBALS["job_id"] != "")
{
echo '<span class="work_id_job_id_title"> WORK ID: '.$GLOBALS["work_id"].' | JOB ID: '.$GLOBALS["job_id"].'</span>';
}

;
}

} 
?>
