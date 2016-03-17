<?php 
class eventclass_user  extends eventsBase
{ 
	function eventclass_user()
	{
	// fill list of events
		$this->events["BeforeEdit"]=true;

		$this->events["BeforeMoveNextList"]=true;



//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		/*
// get information about uploaded files
$fileArray = my_json_decode($values["user_picture"]);
// rename files
for($i = 0; $i < count($fileArray); $i++)
{
  $fileName = $fileArray[$i]["name"];
  $newFileName = "employees_profile/".$values["username"].$i.".png";
   rename($fileName, getabspath($newFileName));
  $fileArray[$i]["name"] = $newFileName;
}
// update values of the field that stores file names
$values["user_picture"] = my_json_encode($fileArray);
*/

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject)
{

		if($data["user_status"]=="0")
{
$row["rowstyle"]="style=\"background:Red\"";
}



// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
