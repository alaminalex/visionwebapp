<?php 
class eventclass_Emailer  extends eventsBase
{ 
	function eventclass_Emailer()
	{
	// fill list of events
		$this->events["BeforeShowDashboard"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowDashboard(&$xt, &$templatefile, &$pageObject)
{

				//READ MAIL FROM TABLE
$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];

$current_time = date("Y-m-d H:i:s");
//$delivery_date_calc = new DateTime("now"); // NOW = ACCEPT TIME
$server_name = $_SESSION["my_server_name"];
$result["my_server_share"] = $_SESSION["my_server_share"];

ini_set('error_reporting', E_ALL);

if(!$mysqlilink = mysqli_connect($hostname, $username, $password, $dbname))
	{
	echo "Could not connect to Database. <br>
		  CONTACT YOUR ADMINISTRATOR.";
	}
	else
		{
		//echo mysqli_get_host_info($mysqlilink);
		}
		
		$mysqlilink->set_charset("utf8");
		mb_internal_encoding('UTF-8');

	
$read_mail_sql = "SELECT * FROM mail_messages where subject LIKE '%job offer has been accepted for job%'";
$mail_records = mysqli_query($mysqlilink, $read_mail_sql);
$number_of_email_to_process = mysqli_num_rows($mail_records);

echo "Number of record: " . $number_of_email_to_process."<br><br>";
		while($mail_to_process = mysqli_fetch_array($mail_records, MYSQLI_BOTH))
		{
		//GET JOB INFORMATION FROM DATA ROWS
		
		//JOB ID
		$job_id = array();
		preg_match("/\d{5}\d/", $mail_to_process["subject"], $job_id);
		$job_id = $job_id[0];
		echo "<br>Job ID: ".$job_id."";

		$mail_date = $mail_to_process["maildate"];
		echo "<br>Mail Date: ".$mail_date."";

		$delivery_date_calc = new DateTime($mail_date); // NOW = ACCEPT TIME
	
		
		//FTP SERVER NAME			i.e: ftp03
		$ftp_server_name = array();
		preg_match("/\bftp([0-9].)\b/", $mail_to_process["body"], $ftp_server_name);
		$ftp_server_name = $ftp_server_name[1];
		echo "<br>FTP NUMBER: ".$ftp_server_name."";
		
		//FTP SERVER LOCATION		i.e: /20151028/885599/
		$ftp_server_location = array();
		preg_match("/\/\d{7}\d\/\d{5}\d\//", $mail_to_process["body"], $ftp_server_location);
		$ftp_server_location = $ftp_server_location[0];
		echo "<br>FTP FOLDER: ".$ftp_server_location."";

		//JOB DATE ACCEPTED FROM EMAIL
		
		//ACCESS TYPE> ACCEPT OR DOWNLOAD OR UPLOAD
		//Accept =1, download = 2
		$access_type = 1;
		echo "<br>";
		
		if ($access_type == 1)
		{
			//check if the job is valid and reviewed in the system
			$check_job = "SELECT * FROM job where work_id = '".$job_id."' LIMIT 1";
			//$check_job = "SELECT * FROM job where work_id = '1112455'";
			$job_records = mysqli_query($mysqlilink, $check_job);
			$number_of_jobs = mysqli_num_rows($job_records);
			$processed = false;
			
			while($job_to_process = mysqli_fetch_array($job_records, MYSQLI_BOTH))
			{	//PROCESS THE JOB IF VALID
			//echo $job_to_process["jobstatus_id"];
			if ($number_of_jobs > 0 && $job_to_process["jobstatus_id"] == "1" )
				{	//IF JOB EXISTS IN SYSTEM PROCESS THE JOB
					echo "<h1>JOB $job_id EXIST AND IS REVIEWED</h1>";
					
					//UPDATE THE STATUS TO ACCEPTED
					$delivery_duration = $job_to_process["delivery_duration"];
					$client_dir = $job_to_process["client_id"];
					$work_dir = $job_to_process["work_id"]."\\".$job_to_process["job_id"];
					
					echo "Work DIR: $work_dir";
					
					$add_to_date = $delivery_duration; // hours
					$delivery_date_calc->add(new DateInterval('PT'.$add_to_date.'H0M0S'));
					$delivery_date = $delivery_date_calc->format("Y-m-d H:i:s");

					$accepted_by = "2045";
					$accepted_date = $mail_date;
					$sql = "update job set `jobstatus_id`='2', `accept_id`='".$accepted_by."', `delivery_date`='".$delivery_date."', `accepted_date`='".$accepted_date."' where work_id=" .$job_to_process["work_id"];
					CustomQuery($sql);

					//, `activity_log`='".$make_dir."'
					$make_dir = $_SESSION["download_dir"].$job_to_process["work_id"]."\\".$job_to_process["job_id"];

					if(file_exists($make_dir))
					{
					//FOLDER EXISTS
					}
					else
					{
						if (!mkdir($make_dir, 0, true))
						{
						//FAILED
						}
					}

					//UPDATE THE STATUS TO ACCEPTED
					
					//COMMAND #2: Download The files from FTP					
					
					
					//COMMAND #2: Download The files from FTP					
					
				
				}	//IF JOB EXISTS IN SYSTEM PROCESS THE JOB
			else if ($number_of_jobs > 0 && $job_to_process["jobstatus_id"] > "2" )
				{	//IF JOB EXISTS IN SYSTEM PROCESS THE JOB
				echo "<h1>JOB $job_id EXIST AND IS ALDEARY ACCEPTED</h1>";
				}	//IF JOB EXISTS IN SYSTEM PROCESS THE JOB
			
			$processed = true;

			}  //PROCESS THE JOB IF VALID
			
			if ($processed == false)
			{
				echo "<h1>JOB $job_id DOES NOT EXIST.</h1>";
			}
			
			
			//echo "<h1>$number_of_jobs</h1>";
			//check if the job is valid and reviewed in the system
		}
		//echo "<h3>".$mail_to_process["body"]."</h3><hr>";
		}


// Place event code here.
// Use 
;		
} // function BeforeShowDashboard

		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
