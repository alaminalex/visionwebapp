<?php 
class eventclass_Need_Upload  extends eventsBase
{ 
	function eventclass_Need_Upload()
	{
	// fill list of events
		$this->events["BeforeMoveNextList"]=true;





//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject)
{

		if($data['jobstatus_id'] == "12")
{
$record["Action1_label"] = false;
}

if ($data['jobstatus_id'] == "1" )
{
$record["Action1_label"] = "Accept";
}
else if ($data['jobstatus_id'] == "2" || $data['jobstatus_id'] == "3" || $data['jobstatus_id'] == "4" || $data['jobstatus_id'] == "5" || $data['jobstatus_id'] == "6" || $data['jobstatus_id'] == "10" || $data['jobstatus_id'] == "13" || $data['jobstatus_id'] == "14" || $data['jobstatus_id'] == "17" || $data['jobstatus_id'] == "18" || $data['jobstatus_id'] == "20")
{
$record["Action1_label"] = "Download";
}

if($data['jobstatus_id'] != "0" || $data['jobstatus_id'] != "1" || $data['jobstatus_id'] != "2" || $data['jobstatus_id'] != "9" || $data['jobstatus_id'] != "12" || $data['jobstatus_id'] != "0" )
{
$record["Action2_label"] = "Distribute";
}
else 
{
$record["Action2_label"] = false;
}

if($data['jobstatus_id'] == "7")
{
$record["Action3_label"] = "Upload";
}
else if($data['jobstatus_id'] == "8")
{
$record["Action3_label"] = "Notify";
}
else 
{
$record["Action3_label"] = false;
}

if($data['jobstatus_id'] == "9" || $data['jobstatus_id'] == "20" || $data['jobstatus_id'] == "2" || $data['jobstatus_id'] == "1")
{
$record["Action2_label"] = false;
}
// Place event code here.
// Use "Add Action" button to add code snippets.


;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
