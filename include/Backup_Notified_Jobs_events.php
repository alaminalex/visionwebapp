<?php 
class eventclass_Backup_Notified_Jobs  extends eventsBase
{ 
	function eventclass_Backup_Notified_Jobs()
	{
	// fill list of events

//	onscreen events
		$this->events["Backup_Notified_Jobs_snippet"] = true;

	}

//	handlers
//	onscreen events
function Backup_Notified_Jobs_snippet(&$params)
{
// Put your code here.
//BACKUP NOTIFIED JOBS //SNIPPET
$backup_src = $_SESSION["upload_dir"]."Notified Jobs\\";
$backup_dest = $_SESSION["upload_backup_dir"];

$current_date_only = DATE ("Y-m-d");

$backup_date_range_start = DATE ("Y-m-d");
$backup_date_range_end = new DateTime($current_date_only);
$date = new DateTime($current_date_only);
$backup_date_range_end->sub(new DateInterval('P01D'));
$print_selected_date = $backup_date_range_end->format('Y-m-d');


$backup_date_range_end = $backup_date_range_end->sub(new DateInterval('P06D'));

if(!exec("C:/xxcopy/xxcopy.exe \"".utf8_decode($backup_src)."\" \"".$backup_dest."\" /DB:".$print_selected_date." /RC /S /H /R /PD0 /ED0 /YY /WV0", $execoutput_done))
{
echo "<br>$backup_src<br>";
echo "$backup_dest<br>";
echo "$print_selected_date<br>";
echo "<h3 style='color:blue; font-weight:bold;'>BACKUP PROCESS COMPLETE</h3>";
	echo "<textarea style='width:800px; min-height:200px; max-height:640px'>";
	foreach($execoutput_done as $xxcopy_result) {
	   echo $xxcopy_result . "\n";
	}
	echo "</textarea>";

}
else
{
	echo "<h3 style='color:red; font-weight:bold;'>BACKUP PROCESS FAILED</h3>";
	echo "<br>$backup_src<br>";
	echo "$backup_dest<br>";
	echo "$print_selected_date<br>";

	echo "<textarea style='width:800px; min-height:200px; max-height:640px'>";
	foreach($execoutput_done as $xxcopy_result) {
	   echo $xxcopy_result . "\n";
	}
	echo "</textarea>";
}
;
}

} 
?>
