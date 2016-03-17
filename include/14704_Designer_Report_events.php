<?php 
class eventclass_14704_Designer_Report  extends eventsBase
{ 
	function eventclass_14704_Designer_Report()
	{
	// fill list of events
		$this->events["BeforeShowEdit"]=true;



//	onscreen events
		$this->events["File_Distribution_snippet311"] = true;

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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

		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events
function File_Distribution_snippet311(&$params)
{
$file_list_get = $_GET["file_list"];
$file_list_get = explode(",", $file_list_get);
echo COUNT($file_list_get)." Files are selected";
;
}

} 
?>
