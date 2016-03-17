<?php 
class eventclass_Correction_Files  extends eventsBase
{ 
	function eventclass_Correction_Files()
	{
	// fill list of events

		$this->events["BeforeShowAdd"]=true;

		$this->events["AfterAdd"]=true;

		$this->events["CustomAdd"]=true;

		$this->events["BeforeQueryList"]=true;


//	onscreen events
		$this->events["Designer_Filesheet_snippet2"] = true;

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, &$pageObject)
{

		$file_list_get = $_GET["file_list"];
$file_list_get = explode(",", $file_list_get);
$GLOBALS["file_list"] = $file_list_get;

$pageObject->setProxyValue("work_id", $_GET["work_id"]);
$pageObject->setProxyValue("job_id", $_GET["job_id"]);
$pageObject->setProxyValue("pdf_id", $_GET["pdf_id"]);
$pageObject->setProxyValue("designer_id", $_GET["designer_id"]);
$pageObject->setProxyValue("designer2_id", $_GET["designer2_id"]);
$pageObject->setProxyValue("qc_id", $_GET["qc_id"]);
$pageObject->setProxyValue("file_list", $file_list_get);
//echo COUNT($GLOBALS["all_file_list"])." Files are selected";

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		
$current_file = $values["rejected_jobfile_id"];
$jobfile_status_id = "10";

			$update_jobfile_sql = "

				UPDATE `jobfile`
				SET 
				`jobfile_status_id` =  $jobfile_status_id
				WHERE `jobfile_id` = '$current_file'
				";

customQuery($update_jobfile_sql);
/*
$update_rejected_jobfile_sql = "

				UPDATE `rejected_jobfile`
				SET 
				`file_url` =  '',
				`cr_pc_name` =  '',
				`cr_qc_pc_name` =  '',
				`cr_notifier_id` =  'NULL'
				WHERE `rejected_jobfile_id` = '$current_file'
				";

customQuery($update_rejected_jobfile_sql);
*/
// Place event code here.
// Use "Add Action" button to add code snippets.


;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Custom add
function CustomAdd(&$values, &$keys, &$error, $inline, &$pageObject)
{

		
// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function CustomAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before SQL query
function BeforeQueryList(&$strSQL, &$strWhereClause, &$strOrderBy, &$pageObject)
{

		$strWhereClause = whereAdd($strWhereClause, "rejected_jobfile.cr_designer_id = '".$_SESSION["user_id"]."'");

;		
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events
function Designer_Filesheet_snippet2(&$params)
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
