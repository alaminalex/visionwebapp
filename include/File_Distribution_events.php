<?php 
class eventclass_File_Distribution  extends eventsBase
{ 
	function eventclass_File_Distribution()
	{
	// fill list of events
		$this->events["BeforeShowAdd"]=true;



		$this->events["BeforeMoveNextList"]=true;

		$this->events["BeforeShowEdit"]=true;


		$this->events["BeforeProcessList"]=true;


//	onscreen events
		$this->events["File_Distribution_snippet"] = true;
		$this->events["File_Distribution_snippet3"] = true;
		$this->events["File_Distribution_snippet2"] = true;

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, &$pageObject)
{

		$file_list_get = $_GET["file_list"];
$file_list_get = explode(",", $file_list_get);
$GLOBALS["file_list"] = $file_list_get;
$designer_level = $_GET["designer_level"];
$pageObject->setProxyValue("work_id", $_GET["work_id"]);
$pageObject->setProxyValue("job_id", $_GET["job_id"]);
$pageObject->setProxyValue("designer_level", $designer_level);
$pageObject->setProxyValue("file_list", $file_list_get);
//echo COUNT($GLOBALS["all_file_list"])." Files are selected";

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject)
{

		
$GLOBALS["work_id"] = $data["work_id"];
$GLOBALS["job_id"] = $data["job_id"];
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, &$pageObject)
{

		$file_list_get = $_GET["file_list"];
$file_list_get = explode(",", $file_list_get);
$GLOBALS["file_list"] = $file_list_get;

$pageObject->setProxyValue("work_id", $_GET["work_id"]);
$pageObject->setProxyValue("job_id", $_GET["job_id"]);
$pageObject->setProxyValue("file_list", $file_list_get);
//echo COUNT($GLOBALS["all_file_list"])." Files are selected";

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

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

//MODIFY ABOBE THIS LINE
;		
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events
function File_Distribution_snippet(&$params)
{
$file_list_get = $_GET["file_list"];
$file_list_get = explode(",", $file_list_get);
echo COUNT($file_list_get)." Files are selected";
;
}
function File_Distribution_snippet3(&$params)
{
$file_list_get = $_GET["file_list"];
$file_list_get = explode(",", $file_list_get);
echo COUNT($file_list_get)." Files are selected";
;
}
function File_Distribution_snippet2(&$params)
{
echo '<span style="font-size:12px; font-weight:bold; color: blue;">WORK ID: '.$GLOBALS["work_id"].' | JOB ID: '.$GLOBALS["job_id"].'</span> | ';
echo '<a href="file_distribution_list.php?q=(work_id~equals~'.$GLOBALS["work_id"].')(job_id~equals~'.$GLOBALS["job_id"].')">Show All Files</a> | ';
echo '<a href="file_distribution_list.php?q=(jobfile_status_id~equals~3)(work_id~equals~'.$GLOBALS["work_id"].')(job_id~equals~'.$GLOBALS["job_id"].')">Need Distribute Files</a> | ';
echo '<a href="file_distribution_list.php?q=(jobfile_status_id~equals~14)(work_id~equals~'.$GLOBALS["work_id"].')(job_id~equals~'.$GLOBALS["job_id"].')">Need to QC</a> | ';
echo '<span style="font-size:12px; font-weight:bold; color: red;"><a href="file_distribution_list.php?q=(jobfile_status_id~equals~10)(work_id~equals~'.$GLOBALS["work_id"].')(job_id~equals~'.$GLOBALS["job_id"].')">Rejected Files</a></span>';
;
}

} 
?>
