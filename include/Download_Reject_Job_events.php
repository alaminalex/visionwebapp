<?php 
class eventclass_Download_Reject_Job  extends eventsBase
{ 
	function eventclass_Download_Reject_Job()
	{
	// fill list of events

//	onscreen events
		$this->events["Download_Job_snippet1"] = true;

	}

//	handlers
//	onscreen events
function Download_Job_snippet1(&$params)
{
echo '<div id="download_page" style="color:blue; text-align:left ">';
//print_r($_SESSION);

$server_name = $_SESSION["my_server_name"];

$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];

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

//$check_extensions = array("jpg","jpeg", "psd", "tif", "tiff",  "png", "eps", "gif");
$check_extensions = $_SESSION["check_extensions"];
$current_date = date("Y-m-d H:i:s");
$null_date = $_SESSION["null_date"];

//FUNCTIONS -----------------------------------------------------------------------------------------------------------------------------------------------

function get_files ($scandir, $previous_array)
	{
	$file_list = array();	
	$file_path_list = array();
	$file_info_array = array();
	$check_extensions = $_SESSION["check_extensions"];
	
	$set_directory = new DirectoryIterator($scandir);
	$get_folder_list = new IteratorIterator($set_directory);

	foreach ($get_folder_list as $file_info)
	{
	//make sure it's not dot
		if (!$file_info->isDot())
		{
			if ($file_info->isDir())
				{

/*				if(is_dir_empty($file_info->getPathName()))
					{
					echo "Folder: ";
					echo $file_info->getFileName()."<br>";
					}
*/					
					$file_path_list = array_merge_recursive($file_path_list, get_files($file_info->getPathName(), $file_path_list));
					
				}
				
			else if ($file_info->isFile())
				{
					$base_folder = explode("\\", $file_info->getPath());
					$base_folder = $base_folder[count($base_folder)-1];


					$extension_matches = false;
					
					for($i = 0; $i<count($check_extensions); $i++)
						{
						if (strtolower($file_info->getExtension()) == $check_extensions[$i])
							{
								//echo $check_extensions[$i]."<br>";
								$extension_matches = true;
							}
						}
					
					if ($extension_matches == true)
					{
					//echo $file_info->getPathName()."<br>";
					//insert FILE LIST INTO DATABASE / ARRAY
					array_push($file_path_list, $file_info->getPathName());
					$extension_matches = false;
					}
				}
				
		} // not dot
	}
	//RETURN THE ARRAY
	return $file_path_list;

	}



//FUNCTION 3: GET FILE

//FUNCTION 4: GET PERCENTAGE
function get_percent($num_amount, $num_total) {
$count1 = $num_amount / $num_total;
$count2 = $count1 * 100;
$count = number_format($count2, 0);
return $count;
}
//FUNCTION 4: GET PERCENTAGE

//FUNCTION 5: GET SQL VALUE STRING
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }
  
$hostname = $_SESSION["custom_db_host"];
$username = $_SESSION["custom_db_user"];
$password = $_SESSION["custom_db_pass"];
$dbname = $_SESSION["custom_db_dbname"];

ini_set('error_reporting', E_ALL);

if(!$mysqlilink = mysqli_connect($hostname, $username, $password, $dbname))
	{
	echo "Could not connect to Database. <br>
		  CONTACT YOUR ADMINISTRATOR. Failed MYSQL Connection";
	}
	else
		{
		//echo mysqli_get_host_info($mysqlilink);
		}

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($mysqlilink, $theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

//FUNCTION 5: GET SQL VALUE STRING

//FUNCTION 6 : FUSION_THUMBS
/*
function fusion_thumb($isource, $idest, $maxhw, $iaspect, $jpeg_quality)
	{	
											// Max vert or horiz resolution
											$maxsize= $maxhw;
											$image_src = $isource;
											$image_dest = $idest;
											// create new Imagick object
											$thumb = new Imagick();
											$thumb->readImage($image_src);
											$imgwidth = $thumb->getImageWIdth();
											$imgheight = $thumb->getImageHeight();
											if ( $imgwidth > $imgheight)
											{
											$thumb->resizeImage($maxsize+20,0, Imagick::FILTER_LANCZOS ,$iaspect);
											}
											else
											{
											$thumb->resizeImage(0,$maxsize, Imagick::FILTER_LANCZOS ,$iaspect);
											}
											//SET COMPRESSION
											$thumb->setImageCompression(Imagick::COMPRESSION_JPEG);
											$thumb->setImageCompressionQuality($jpeg_quality);

											if($thumb->writeImage($image_dest));
											
											$thumb->destroy();
	}
	//FUNCTION 6: FUSION_THUMBS
*/

//FUNCTION 6 : FUSION_THUMBS
function fusion_thumb($isource, $idest, $maxhw, $iaspect, $jpeg_quality)
	{	
											// Max vert or horiz resolution
											$maxsize= $maxhw;
											$image_src = $isource;
											$image_dest = $idest;
											// create new Imagick object
											$thumb = new Imagick();
											$thumb->readImage($image_src."[0]");
											$thumb->stripImage();	//ADDED BY MOINUL // REMOVES ALL EXIF AND METADATA
											$imgwidth = $thumb->getImageWIdth();
											$imgheight = $thumb->getImageHeight();
											if ( $imgwidth > $imgheight)
											{
											$thumb->thumbnailImage($maxsize+30,0,false); //Alex
											}
											else
											{
											$thumb->thumbnailImage(0,$maxsize,false);//Alex
											}

											$thumb->mergeImageLayers(Imagick::LAYERMETHOD_FLATTEN);
											$thumb->setImageBackgroundColor('white');
											$thumb->setImageAlphaChannel(11);
											$thumb->mergeImageLayers(Imagick::LAYERMETHOD_FLATTEN); //MERGES LAYERS


											if($thumb->writeImage($image_dest));
											
											$thumb->destroy();
											
	}	
	//FUNCTION 6: FUSION_THUMBS

//FUNCTIONS -----------------------------------------------------------------------------------------------------------------------------------------------

	//FUNCITON 7: GET FILE SIZE

	function remote_filesize($url) {
		static $regex = '/^Content-Length: *+\K\d++$/im';
		if (!$fp = @fopen($url, 'rb')) {
			return false;
		}
		if (
			isset($http_response_header) &&
			preg_match($regex, implode("\n", $http_response_header), $matches)
		) {
			return (int)$matches[0];
		}
		return strlen(stream_get_contents($fp));
	}

	//FUNCTION 7: GET FILE SIZE

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

$current_date = date("Y-m-d H:i:s");
$null_date = "0000-00-00 00:00:00";

if (isset($_GET["work_id"]) && isset($_GET["job_id"]) && $_GET["work_id"] != "" && $_GET["job_id"] != "")
	{
	$selected_work_id = $_GET["work_id"];
	$selected_job_id = $_GET["job_id"];
	$list_of_files = array();


//test echo "<h1>$selected_job_id</h1>";

	//verify the job exist in database and match total number of files in the job folder
	$select_job_sql = "
			Select *, 
			jobstatus.job_status,
			pdf.pdf_name
			
			from rejected_job
			INNER JOIN jobstatus ON 
			rejected_job.jobstatus_id = jobstatus.jobstatus_id AND `work_id`=$selected_work_id
			INNER JOIN pdf ON
			rejected_job.pdf_id = pdf.pdf_id
			";

	$select_job_result = mysqli_query($mysqlilink, $select_job_sql);
	$number_of_jobs = mysqli_num_rows($select_job_result);
	//$list_job_result = mysqli_fetch_array($select_job_result, MYSQLI_BOTH);

//test echo "<h1>$number_of_jobs</h1>";


	if ($number_of_jobs == 1)
		{
		while($list_job_result = mysqli_fetch_array($select_job_result, MYSQLI_BOTH))
			{
			$work_id = $list_job_result["work_id"];
			$job_id = $list_job_result["job_id"];
			$previous_job_id = $list_job_result["previous_job_id"];
			$client_id = $list_job_result["client_id"];
			$project_id = $list_job_result["project_id"];
			$job_directory = $list_job_result["job_directory"];
			$total_images = $list_job_result["total_images"];
			$is_urgent = (int) $list_job_result["is_urgent"];
			$pdf_id = $list_job_result["pdf_id"];
			$pdf_name = $list_job_result["pdf_name"];
			$project_name = $list_job_result["project_name"];
			$jobstatus_id = $list_job_result["jobstatus_id"];
			$job_status = $list_job_result["job_status"];
			$reviewer_id = $list_job_result["reviewer_id"];
			$delivery_date = $list_job_result["delivery_date"];


			//JOB DETAIL TO DOWNLOAD THE JOB FILES INTO DATABASE
			
			$load_urloptions = "?work_id=".$work_id."&job_id=".$job_id."";
			
			
     echo '<form id="files" method="post" action="/'.$_SESSION["my_server_share"].'/download_reject_job_list.php'.$load_urloptions.'">';
          
			if ($jobstatus_id == 2)
				{ // IF JOBSTATUS IS ACCEPTED, SET STATUS TO DOWNLOADING ELSE MOVE TO DOWNLOAD PROCESS
				  //SET JOBSTATUS TO DOWNLOADING
				echo "SET STATUS TO DOWNLOADING";
				$current_date = date("Y-m-d H:i:s");
				$update_job_sql = "
					UPDATE `rejected_job`
					SET
					`jobstatus_id` =  '20'
					WHERE  `work_id` = '$selected_work_id'
					;";

					/* ORIGINALLY THIS WAS USED IN NORMAL JOB PAGES. 
					$update_job_sql = "
										UPDATE `rejected_job`
										SET
										`jobstatus_id` =  '20',
										`notifer_id` =  '$current_user_id',
										`notify_date` = '$current_date'
										WHERE  `work_id` = '$selected_work_id'
										;";
					*/					
				
				echo $update_job_sql; 
					
		
		
		
		if(!$update_job_query = mysqli_query($mysqlilink, $update_job_sql))
			{
				echo "<h2>Errors Found. Cannot Update Job Information</h2>";
				}
					else
					{
						}
				header("location: /".$_SESSION["my_server_share"]."/rejected_job_list.php?action=downloaded");
				} // IF JOBSTATUS IS ACCEPTED, SET STATUS TO DOWNLOADING ELSE MOVE TO DOWNLOAD PROCESS

			//exit;

 //JOB DETAIL TO DOWNLOAD THE JOB FILS INTO DATABSE
			//echo "<h4>Download the Job</h4>";
			//echo "You Selected Job : <b>$selected_job_id</b> and Work ID is $selected_work_id<br>";
			//if ($is_urgent == 1){ echo "<font style='color:red;'> The Job is marked for Urgent Delivery </font> <br>"; } else { echo ""; }

			//echo "Client ID: ".$client_id."<br>";
			$project_id = $list_job_result["project_id"];
			$job_directory = $list_job_result["job_directory"];
			$total_images = $list_job_result["total_images"];
			$is_urgent = (int) $list_job_result["is_urgent"];
			$pdf_id = $list_job_result["pdf_id"];
			$jobstatus_id = $list_job_result["jobstatus_id"];
			$reviewer_id = $list_job_result["reviewer_id"];
			$previous_job_id = $list_job_result["previous_job_id"];

			//get LIST of files
			
			//check if directory is empty

			$client_dir = $client_id."\\";
			$work_dir = $work_id."\\";
			$job_dir = $job_id."\\";
			$thumbs_dir = $_SESSION["thumbs_dir"];
			
			$target_work_folder = $_SESSION["download_dir"].$work_dir.$job_dir;

			echo "<span style='font-size:14px; color: green'>Job ID: $job_id | Work ID: $work_id</span><br>";
			echo "<span>Make Sure you have downloaded all (".$total_images.") the files to:</span><br><br>";
			echo '<span style="font-size:14px; color: red!important"><a href="file:'.$target_work_folder.'" target="_blank" >'.$target_work_folder.'</a></span>';

			if (!is_readable($target_work_folder))
				{
					echo "&nbsp;|| $target_work_folder || Directory Does not Exist or You do not have permission to access<br>";
				}			
				
				//$set_directory = new DirectoryIterator($target_work_folder);
				else
				{	//PROCESS JOB FILES HERE
					
					//GET FILES FROM FUNCTION
					$previous_data = array();
					
					//echo "<h3>$target_work_folder</h3>";
					$list_files = get_files($target_work_folder, $previous_data);
					//GET FILES FROM FUNCTION
					
					echo "<h1> Total Files Found in the Download: ".count($list_files)." </h1>";
					$total_files = count($list_files);
					echo "<h1> Total Files Found in the Review: ".$total_images." </h1>";
					
					if ($total_files!=$total_images)
						{
						echo " <h2> <font style='color:red;'>Total Number of images does not match with Download and Review. </font> <br>
						<font style='color:gray;'>Please check number of files with Downloaded Folder & Review </h2></font>";
						echo "<a href='http://".$_SESSION["my_server_ip"]."/".$_SESSION["my_server_share"]."/download_job_list.php?work_id=".$selected_work_id."&job_id=".$selected_job_id."'><img src='../images/refresh.png' width='24' height='24' style='vertical-align:middle; alt='Edit' title='Download this job' />RELOAD JOB INFORMATION</a>";
						$incomplete_download = "true";
						}
					
					//IF USER APPROVED THE PROCESS, INSERT THE LIST OF FILES INTO DATABASE
					if (isset($_POST["user_input_ok"]))
						{
							$duplicate_entries = array();
							
							for($i = 0; $i<$total_files; $i++)
							{
								
							
							//CHECK FOR DUPLICATE ENTRY
							$selected_file_uri = $list_files[$i];
							$selected_file = str_replace($_SESSION["download_dir"]."", "", $selected_file_uri);
							//echo "$selected_file"; 
							
							$safe_selected_file = $mysqlilink->real_escape_string($selected_file);

							$select_file_sql = "SELECT `file_url`, `work_id` from rejected_jobfile2 WHERE `file_url`='$safe_selected_file' AND `work_id`='$selected_work_id' ";
							
							
							$select_file_result = mysqli_query($mysqlilink, $select_file_sql);
							
							if (strpos($safe_selected_file, "\\additional_file\\"))
							{
							$file_type = "0";
							}
							else
								{
								$file_type = "3";
								}
							
							$is_duplicate = mysqli_num_rows($select_file_result);
							
							//DISBALE DUPLICATE FILE CHECK
							//$is_duplicate = 0;
							//DISBALE DUPLICATE FILE CHECK
							
							//IF DUPLICATE IS FOUND, DO NOT PROCESS THE FILE and WARN THE USER
							if ($is_duplicate > 0)
								{
								array_push($duplicate_entries, $selected_file);
								}
								
								//PROCESS THE JOB INSERT THE INFORMATION INTO THE DATABASE
								else
									{
									//INSERT INTO DATABASE
									$client_dir = "clients\\".$client_id."\\";
									$work_dir = $work_id."\\";
									$job_dir = $job_id."\\";
									
									$exclude_file_root = $_SESSION["download_dir"];
									//echo "$exclude_file_root";
			
									$client_id = (int) $client_id;
									$work_id = (int) $work_id;
									$job_id =  (int) $job_id;
									$previous_job_id = (int) $previous_job_id;
									$project_id = (int) $pdf_id;
									$folder_name = "";
									$file_url = $mysqlilink->real_escape_string($selected_file);
									$file_url = utf8_encode($file_url);
									$filename_extract = explode("\\", $file_url);
									$filename = $mysqlilink->real_escape_string($filename_extract[count($filename_extract)-1]); 
									$jobfile_type = $mysqlilink->real_escape_string($file_type);
									$jobfile_note = $mysqlilink->real_escape_string("");
									$downloader_id = (int) $_SESSION["user_id"];
									$jobfile_status_id = (int) "3";
									$download_date = date("Y-m-d H:i:s");
									$distribute_date = $null_date;
									$start_date = $null_date; 
									 $end_date = $null_date;
									 $qcstart_date = $null_date;
									 $qcend_date = $null_date; 
									 $upload_date = $null_date; 
									 $notify_date = $null_date; 
									 $reject_date = $null_date; 
									 $reject_reason = ""; 
									$screenshots = NULL; 
									
									//
									
									
									$insert_new_file_sql = "
									INSERT INTO `visionwebapp`.`rejected_jobfile2` (
									`jobfile_id`, `previous_jobfile_id`,`file_url`, `client_id`, `work_id`, `job_id`, `previous_job_id`, `project_id`, `folder_name`, `filename`, `jobfile_type`, `jobfile_note`, `jobfile_status_id`, `downloader_id`,  `download_date`, `distribute_date`, 	`start_date`, `end_date`, `qcstart_date`, 	`qcend_date`, `upload_date`, `notify_date`, `reject_date`, `reject_reason`, `screenshots`) VALUES (
									NULL,	 NULL,	 '$file_url', '$client_id', '$work_id', '$job_id', '$previous_job_id', '$project_id', '$folder_name', '$filename', '$jobfile_type', '$jobfile_note', '$jobfile_status_id', '$downloader_id', '$download_date', '$distribute_date', '$start_date', '$end_date', '$qcstart_date', '$qcend_date', '$upload_date', '$notify_date', '$reject_date', '$reject_reason', '$screenshots');";
									
									if(!$insert_file_result = mysqli_query($mysqlilink, $insert_new_file_sql))
										{
										echo "<h2>Errors Found. Cannot Continue Inserting data</h2>";
										}
										else
											{	// DOWNLOAD PROCESS COMPLETED
											$process_sucess = true;
											echo ($i+1).". $selected_file <br>";
											
											//GENERATE THUMBNAIL
											$thumb_src = $_SESSION["download_dir"].stripslashes($file_url);
											
											//CREATE THUMBNAIL DESTINATION
											$exclude_from_current_file = $exclude_file_root;
											$include_to_current_file = $_SESSION["thumbnail_dir"];
											
											//$thumb_dest = str_replace($exclude_from_current_file, $include_to_current_file, $thumb_src);
											$thumb_dest = str_replace($exclude_from_current_file, $include_to_current_file, $thumb_src);;

											$current_file_name_find = explode("\\", $thumb_dest);
											$current_file_name = $current_file_name_find[count($current_file_name_find)-1];
											
											$thumb_dest_url = str_replace($current_file_name, "", $thumb_dest."");
											$thumb_dest_url = str_replace("\\", "/", $thumb_dest_url);
											
											if (!file_exists($thumb_dest_url)) {
											if(!mkdir($thumb_dest_url, 0, true))
												{
												//echo "could not make directory tree";
												}
											}
											
											
											//echo "<h5> $thumb_dest_url </h5>";

											$thumb_dest	= $thumb_dest.".jpg";			//FINAL DESTINATION .".jpg"
											$thumb_maxwh = 400;
											$thumb_aspect = 1;
											$thumb_jpeg_quality = 80;
											
											fusion_thumb($thumb_src, $thumb_dest, $thumb_maxwh, $thumb_aspect, $thumb_jpeg_quality);

											//MATCH WITH ORIGINAL JOBFILE AND CHECK ORIGINAL JOB FILE STATUS
											
											

											$safe_selected_file = $mysqlilink->real_escape_string($selected_file);
											$update_jobfile_sql = "UPDATE jobfile
											SET `jobfile`.`jobfile_status_id` = '11'
											WHERE jobfile.job_id = '".$previous_job_id."'
											AND jobfile.filename = '".$current_file_name."'";
											
											//echo $update_jobfile_sql;
											//exit;
											
											
											if(!mysqli_query($mysqlilink, $update_jobfile_sql))
												{
												echo "ERROR UPDATING ORIGINAL JOBFILE INFORMATION ";
												}
											
											if (strpos($safe_selected_file, "\\additional_file\\"))
											{
											$file_type = "0";
											}
											else
												{
												$file_type = "1";
												}
											
											$is_duplicate = mysqli_num_rows($select_file_result);
											//MATCH WITH ORIGINAL JOBFILE AND CHECK ORIGINAL JOB FILE STATUS
											
											}	// DOWNLOAD PROCESS COMPLETED
									}

							
							}
							

							if (count($duplicate_entries) > 0)
								{
									echo "Duplicate Entries Found: ".count($duplicate_entries);
									echo "<br> List of Duplicate Files<br>";
								foreach ($duplicate_entries as $dup_key => $dup_file)
									{
									echo ($dup_key+1).". $dup_file<br>";
									}
								}

							if (isset($process_sucess) && $process_sucess == true)
								{
								//MATCH FILES WITH ORIGINAL JOB AND UPDATE THOSE AS REJECTED

								//MATCH FILES WITH ORIGINAL JOB AND UPDATE THOSE AS REJECTED
								echo "<h3>DOWNLOAD COMPLETED</h3>";
								}
							
							$downloader_id = (int) $_SESSION["user_id"];
							$download_date = date("Y-m-d H:i:s");
							
							if($incomplete_download == "true")
								{
								$update_job_sql = "
								UPDATE  `visionwebapp`.`rejected_job`
								SET  `jobstatus_id` =  '3',
								`downloader_id` = '$downloader_id',
								`download_date` = '$download_date'
								WHERE  `rejected_job`.`work_id` = $work_id
								;";								
								}
								
								else
									{
									$update_job_sql = "
									UPDATE  `visionwebapp`.`rejected_job`
									SET  `jobstatus_id` =  '3',
									`downloader_id` = '$downloader_id',
									`download_date` = '$download_date'
									WHERE  `rejected_job`.`work_id` = $work_id
									;";
									}
							
							if(!$update_job_query = mysqli_query($mysqlilink, $update_job_sql))
								{
								echo "<h2>Errors Found. Cannot Update Job Information</h2>";
								}
								else
									{
									//header("location: /dashboard.php?action=downloaded");
								
									}
								
							exit;				
						}
					//END IF USER APPROVED THE PROCESS, INSERT THE LIST OF FILES INTO DATABASE
					
				} //END PROCESS JOB FILES HERE
			}
		}
	else
		{
		echo "Multiple Jobs Found matching the same work ID! This cannot be. Please contact System Administrator";
		}
	}
else
	{
	echo "please select a valid Work ID and Job ID and come back later. Contact your administrator";
	exit;
	}

echo '<input type="hidden" name="user_input_ok"  id="user_input_ok" value="1"/><br><br>
      <input name="distribute" type="submit" id="distribute" value="Complete Download" /> <br><br>';

echo '
This Process may take some time depending on the number of Jobs.<br />
Please be patient
while the process complete. <br />
Do not Close the window or stop the Process. ';

echo '</form>';
echo '</div>';
;
}

} 
?>
