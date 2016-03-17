<?php 
class eventclass_pdf  extends eventsBase
{ 
	function eventclass_pdf()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		$pdf_id = $values["pdf_id"];
$pdf_name = $values["pdf_name"];
$client_id = $values["client_id"];
$pdf_location = $values["pdf_location"];
$last_update = $values["last_update"];
$pdf_estimated_average = $values["pdf_estimated_average"];
$pdf_estimated_average1 = $values["pdf_estimated_average1"];
$pdf_estimated_average2 = $values["pdf_estimated_average2"];
$pdf_actual_average = NULL;
$price = $values["price"];

//**********  Insert a record into another table  ************

/*
$_SESSION["custom_db2_host"] = "58.147.172.156";
$_SESSION["custom_db2_user"] = "root";
$_SESSION["custom_db2_pass"] = "Ex1Animatrix1";
$_SESSION["custom_db2_dbname"] = "visionwebapp";
*/

$db2link = mysqli_connect($_SESSION["custom_db2_host"], $_SESSION["custom_db2_user"], $_SESSION["custom_db2_pass"], $_SESSION["custom_db2_dbname"]);

//$db2link = mysqli_connect("58.147.172.156", "root", "Ex1Animatrix1", "visionwebapp_for_up" );

//echo "<br>".mysqli_get_host_info($db2link);

//$insert_pdf_sync_sql = "INSERT INTO `pdf` (`pdf_id`, `pdf_name`, `client_id`, `pdf_location`, `last_update`, `pdf_estimated_average`, `pdf_estimated_average1`, `pdf_estimated_average2`, `pdf_actual_average`, `price`) VALUES (".$pdf_id.", '".$pdf_name."', '".$client_id."', '".$pdf_location."', '".$last_update."' , '".$pdf_estimated_average."', '".$pdf_estimated_average1."', '".$pdf_estimated_average2."', '".$pdf_actual_average."' , '".$price."')";
$insert_pdf_sync_sql = "INSERT INTO `pdf` (`pdf_id`, `pdf_name`, `client_id`, `pdf_location`, `last_update`, `pdf_estimated_average`, `pdf_estimated_average1`, `pdf_estimated_average2`, `pdf_actual_average`, `price`) VALUES (".$pdf_id.", '".$pdf_name."', ".$client_id.", '".$pdf_location."', '".$last_update."', '".$pdf_estimated_average."', '".$pdf_estimated_average1."', '".$pdf_estimated_average2."', NULL, NULL)";


if (!$db2link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}
else
{
	//echo "query made";
	//if(!mysqli_query($db2link, "INSERT INTO `pdf` (`pdf_id`, `pdf_name`, `client_id`, `pdf_location`, `last_update`, `pdf_estimated_average`, `pdf_estimated_average1`, `pdf_estimated_average2`, `pdf_actual_average`, `price`) VALUES (".$pdf_id.", NOW(), ".$client_id.", '".$pdf_location."', '".$last_update."', '".$pdf_estimated_average."', '".$pdf_estimated_average1."', '".$pdf_estimated_average2."', NULL, NULL)"))
	if(!mysqli_query($db2link, $insert_pdf_sync_sql))		
	{
		echo "<h1>ERROR IN QUERY</h1>";
	}
	
	//exit;	
}



//INSERT INTO THE SECOND TABLE

// Place event code here.
// Use 
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		/*
$pdf_id = $values["pdf_id"];
$pdf_name = $values["pdf_name"];
$client_id = $values["client_id"];
$pdf_location = $values["pdf_location"];
$last_update = $values["last_update"];
$pdf_estimated_average = $values["pdf_estimated_average"];
$pdf_estimated_average1 = $values["pdf_estimated_average1"];
$pdf_estimated_average2 = $values["pdf_estimated_average2"];
$pdf_actual_average = NULL;
$price = $values["price"];

$update_pdf_sync_sql = "INSERT INTO `pdf` (`pdf_id`, `pdf_name`, `client_id`, `pdf_location`, `last_update`, `pdf_estimated_average`, `pdf_estimated_average1`, `pdf_estimated_average2`, `pdf_actual_average`, `price`) VALUES (".$pdf_id.", '".$pdf_name."', ".$client_id.", '".$pdf_location."', '".$last_update."', '".$pdf_estimated_average."', '".$pdf_estimated_average1."', '".$pdf_estimated_average2."', NULL, NULL)";

//UPDATE `pdf` SET `pdf_estimated_average` = '00:00:01' WHERE `pdf`.`pdf_id` = 5868;

if (!$db2link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}
else
{
	//echo "query made";
	if(!mysqli_query($db2link, $update_pdf_sync_sql))		
	{
		echo "<h1>ERROR IN QUERY</h1>";
	}
	
	//exit;	
}

*/

// Place event code here.
// Use 
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
