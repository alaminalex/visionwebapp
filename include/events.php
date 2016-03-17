<?php 
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "") 
	{ 
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else 
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{ 
	function class_GlobalEvents()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;

		$this->events["BeforeLogin"]=true;

		$this->events["BeforeProcessMenu"]=true;

		$this->events["ModifyMenuItem"]=true;



//	onscreen events


	
	
		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, &$pageObject)
{

		//COMMENT

include("server_configurations.php");

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

$session_username = $_SESSION["UserID"];
$select_user_sql = "SELECT `user_id`, `username` from `user` WHERE username='".$session_username."'";

$select_user_query = mysqli_query($mysqlilink, $select_user_sql);

while ($select_user = mysqli_fetch_array($select_user_query, MYSQLI_BOTH))
	{
	$_SESSION["user_id"] = $select_user["user_id"];
	}
// Place event code here.
// Use "Add Action" button to add code snippets.

//$check_extensions = array("jpg","jpeg", "psd", "tif", "tiff",  "png", "eps", "gif");
$_SESSION["check_extensions"] = array("jpg","jpeg", "psd", "tif", "tiff",  "png", "eps", "gif", "bmp", "cr2", "raw", "cr2");

//DEFINE SESSION VARIABLES RELEVANT TO USERS
$_SESSION["user_dir_server"] = "users\\".$_SESSION["UserID"]."\\";
$_SESSION["user_dir_local"] = "\\\\".$_SERVER['REMOTE_ADDR']."\\D$\\".$_SESSION["UserID"]."\\";
$_SESSION["user_ip"] = $_SERVER['REMOTE_ADDR'];
$_SESSION["user_pc_name"] = gethostbyaddr($_SESSION["user_ip"]);




/*

//DEFINE SESSION VARIABLES
//$_SESSION[""] = ""
$_SESSION["my_server_ip"] = "192.168.2.1";
$_SESSION["my_server_share"] = "visionwebapp_alex";
$_SESSION["my_server_url"] = "http://".$_SESSION["my_server_ip"]."/".$_SESSION["my_server_share"]."/";
$_SESSION["my_server_name"] = "\\\\".$_SESSION["my_server_ip"]."\\".$_SESSION["my_server_share"]."\\";

$_SESSION["my_hosted_location"] = "\\\\".$_SESSION["my_server_ip"]."\\visionwebapp_alex\\";
$_SESSION["my_server_name_with_port"] = "//192.168.2.1:4021/";

$_SESSION["my_downloadserver_ip"] = "192.168.2.1";
$_SESSION["download_dir"] = "\\\\".$_SESSION["my_downloadserver_ip"]."\\downloadapp\\";

$_SESSION["my_outputserver_ip"] = "192.168.2.1";
$_SESSION["output_dir"] = "\\\\".$_SESSION["my_outputserver_ip"]."\\outputapp\\";

$_SESSION["my_uploadserver_ip"] = "192.168.2.1";
$_SESSION["upload_dir"] = "\\\\".$_SESSION["my_uploadserver_ip"]."\\uploadapp\\";

$_SESSION["my_thumbnailserver_ip"] = "192.168.2.1";
$_SESSION["thumbnail_dir"] = "\\\\".$_SESSION["my_thumbnailserver_ip"]."\\thumbnail\\";
$_SESSION["thumbnail_url"] = "http://".$_SESSION["my_thumbnailserver_ip"].":4022/";

$_SESSION["my_instructionserver_ip"] = "192.168.2.1";
$_SESSION["instruction_dir"] = "\\\\".$_SESSION["my_instructionserver_ip"]."\\Work Instructions\\";

$_SESSION["custom_db_host"] = "localhost";
$_SESSION["custom_db_user"] = "root";
$_SESSION["custom_db_pass"] = "Ex1Animatrix1";
$_SESSION["custom_db_dbname"] = "visionwebapp";
$_SESSION["null_date"] = "0000-00-00 00:00:00";


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

$session_username = $_SESSION["UserID"];
$select_user_sql = "SELECT `user_id`, `username` from `user` WHERE username='".$session_username."'";

$select_user_query = mysqli_query($mysqlilink, $select_user_sql);

while ($select_user = mysqli_fetch_array($select_user_query, MYSQLI_BOTH))
	{
	$_SESSION["user_id"] = $select_user["user_id"];
	}
// Place event code here.
// Use "Add Action" button to add code snippets.

//$check_extensions = array("jpg","jpeg", "psd", "tif", "tiff",  "png", "eps", "gif");
$_SESSION["check_extensions"] = array("jpg","jpeg", "psd", "tif", "tiff",  "png", "eps", "gif", "bmp", "cr2", "raw", "cr2");

//DEFINE SESSION VARIABLES RELEVANT TO USERS
$_SESSION["user_dir_server"] = "users\\".$_SESSION["UserID"]."\\";
$_SESSION["user_dir_local"] = "\\\\".$_SERVER['REMOTE_ADDR']."\\D$\\".$_SESSION["UserID"]."\\";
$_SESSION["user_ip"] = $_SERVER['REMOTE_ADDR'];
$_SESSION["user_pc_name"] = gethostbyaddr($_SESSION["user_ip"]);

*/
;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
				// Before login
function BeforeLogin(&$username, &$password, &$message, &$pageObject)
{

		$username = mb_strtolower($username);

// Place event code here.
// Use "Add Action" button to add code snippets.

//COMMENT

return true;
;		
} // function BeforeLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
				// Menu page: Before process
function BeforeProcessMenu(&$pageObject)
{

		
//COMMENT

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessMenu

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Menu item: Modify
function ModifyMenuItem(&$menuItem)
{

		if ($menuItem->getTitle()=="My Profile") {
$menuItem->setUrl("Users_view.php?editid1=".$_SESSION["user_id"]."&editid2=".$_SESSION["UserID"]);}

//-----------------------------------Hide Menue--------------------------------------------------//
if ($menuItem->getTitle()=="Settings")
{
	return false;
	}

if ($menuItem->getTitle()=="Others")
{
	return false;
	}

if ($menuItem->getTitle()=="18442 Files")
{
	return false;
	}
if ($menuItem->getTitle()=="14704 Files")
{
	return false;
	}
//-----------------------------------Hide Menue--------------------------------------------------//


//14704 BLOCK --------------------------------------------------------------------------------------------------------------------------------------#################################################################
// AND pdf_id !=5001








if($menuItem->getTitle() == "Pending 14704")
{
$rs=CustomQuery('
								select accepted_date, count(*) as c1 from job 
								WHERE accepted_date !="0000-00-00 00:00:00"  
								AND 
										(
										jobstatus_id != 0 
										AND jobstatus_id != 1 
										AND jobstatus_id != 9 
										AND jobstatus_id != 12
										) 
								AND (pdf_id =5001 OR pdf_id =5879 OR pdf_id =5880)
								');
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
//$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
//$menuItem->setTitle("Pending (". $data["c1"] . ")");
$menuItem->setTitle("Pending 14704 (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}


if($menuItem->getTitle() == "14704 Deadline Missed")
{
$rs=CustomQuery('
									select accepted_date, delivery_date, count(*) as c1 from job 
									WHERE accepted_date !="0000-00-00 00:00:00" 
									AND TIMEDIFF(delivery_date, NOW()) < "0" 
									AND
											(
											jobstatus_id != 0 
											AND jobstatus_id != 9 
											AND jobstatus_id != 12  
											AND (pdf_id =5001 OR pdf_id =5879 OR pdf_id =5880)
											)
								');
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}




if($menuItem->getTitle() == "14704 Urgent Jobs")
{
$rs=CustomQuery('
								select accepted_date, is_urgent, count(*) as c1 from job 
								WHERE accepted_date !="0000-00-00 00:00:00" 
								AND is_urgent = "1"  
								AND
										(jobstatus_id != 0 
										AND jobstatus_id != 9 
										AND jobstatus_id != 12  
										AND (pdf_id =5001 OR pdf_id =5879 OR pdf_id =5880)
										)
								');
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
//$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
$menuItem->setTitle("Urgent (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}
if($menuItem->getTitle() == "14704 Need Download")
{
$rs=CustomQuery('select accepted_date, jobstatus_id, count(*) as c1 from job 
									WHERE accepted_date !="0000-00-00 00:00:00" 
									AND 
											(
											jobstatus_id = "2" 
											OR jobstatus_id = "20"
											) 
									AND (pdf_id =5001 OR pdf_id =5879 OR pdf_id =5880)
									');
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
//$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
$menuItem->setTitle("Download (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}

if($menuItem->getTitle() == "14704 Need Accept")
{
$rs=CustomQuery('select accepted_date, jobstatus_id, count(*) as c1 from job 
									WHERE jobstatus_id = "1"  
									AND (pdf_id =5001 OR pdf_id =5879 OR pdf_id =5880)'
									);
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
//$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
$menuItem->setTitle("Accept (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}

if($menuItem->getTitle() == "14704 Need QC")
{
$rs=CustomQuery('select accepted_date, jobstatus_id, count(*) as c1 from job 
									WHERE accepted_date !="0000-00-00 00:00:00" 
									AND jobstatus_id = "14"  
									AND (jobstatus_id != 0 
									AND jobstatus_id != 9 
									AND jobstatus_id != 12 
									AND (pdf_id =5001 OR pdf_id =5879 OR pdf_id =5880))'
								);
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
//$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
$menuItem->setTitle("QC (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}

if($menuItem->getTitle() == "14704 Need Upload")
{
$rs=CustomQuery('SELECT
											  accepted_date,
											  jobstatus_id,
											  COUNT(*) AS c1
											FROM
											  job
											WHERE
											  accepted_date != "0000-00-00 00:00:00" AND jobstatus_id = "7" AND(
												 jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12
											  ) AND(
												 pdf_id = 5001 OR pdf_id = 5879 OR pdf_id = 5880
											  )'
									);
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
//$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
$menuItem->setTitle("Upload (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}

if($menuItem->getTitle() == "14704 Need Notify")
{
$rs=CustomQuery('
									select accepted_date, jobstatus_id, count(*) as c1 from job 
									WHERE accepted_date !="0000-00-00 00:00:00" 
									AND jobstatus_id = "8"  
									AND 
											(
											jobstatus_id != 0 
											AND jobstatus_id != 9 
											AND jobstatus_id != 12  
											AND (pdf_id =5001 OR pdf_id =5879 OR pdf_id =5880)
											)
									');
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
//$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
$menuItem->setTitle("Notify (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}

///-----files
/*
if($menuItem->getTitle() == "14704 Files")
{
	$rs=CustomQuery('select count(*) as c1 from jobfile WHERE (jobfile_status_id = "3" ) AND project_id =5001');
	$data = db_fetch_array($rs);
	if($data["c1"] > 0)
	{
	$rs2=CustomQuery('select count(*) as c1 from jobfile WHERE (jobfile_status_id != "7" ) AND project_id =5001');
	$data2 = db_fetch_array($rs2);
	if($data2["c1"] > 0)
	{
		$rs3=CustomQuery('select count(*) as c1 from jobfile WHERE (jobfile_status_id = "14" ) AND project_id =5001');
			$data3 = db_fetch_array($rs3);
			if($data3["c1"] > 0)
			{
			$menuItem->setTitle($menuItem->getTitle() . " [D ". $data["c1"] . " / QC ".$data3["c1"]." of ".$data2["c1"].")]");
			}
			else
			{
			$menuItem->setTitle($menuItem->getTitle() . " [". $data["c1"] . " of ".$data2["c1"]."]");
			}
	}
	else
		{
		$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
		}
}
else
	{
	//$menuItem->setTitle($menuItem->getTitle());
	return false;
	}
}
*/
///-----files

//14704 BLOCK --------------------------------------------------------------------------------------------------------------------------------------#################################################################


//18442 BLOCK --------------------------------------------------------------------------------------------------------------------------------------#################################################################
// AND pdf_id !=5001
if($menuItem->getTitle() == "Pending 18442")
{
$rs=CustomQuery('
									select accepted_date, count(*) as c1 from job 
									WHERE accepted_date !="0000-00-00 00:00:00"  
									AND (jobstatus_id != 0 AND jobstatus_id != 1 AND jobstatus_id != 9 AND jobstatus_id != 12) 
											AND (
														pdf_id =5002 OR 
														pdf_id =5027 OR 
														pdf_id =5028 OR 
														pdf_id =5029 OR 
														pdf_id =5030 OR 
														pdf_id =5370 OR 
														pdf_id =5371 OR 
														pdf_id =5031
														)
									');
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
//$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
//$menuItem->setTitle("Pending (". $data["c1"] . ")");
$menuItem->setTitle("Pending 18442 (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}

if($menuItem->getTitle() == "18442 Deadline Missed")
{
$rs=CustomQuery('select accepted_date, delivery_date, count(*) as c1 from job 
									WHERE accepted_date !="0000-00-00 00:00:00" 
									AND (TIMEDIFF(delivery_date, NOW()) < "0" )
									AND (jobstatus_id != 0 AND jobstatus_id != 9 AND jobstatus_id != 12 ) 
											AND (
														pdf_id =5002 OR 
														pdf_id =5027 OR 
														pdf_id =5028 OR 
														pdf_id =5029 OR 
														pdf_id =5030 OR 
														pdf_id =5370 OR 
														pdf_id =5371 OR 
														pdf_id =5031
														)
									');
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}

if($menuItem->getTitle() == "18442 Urgent Jobs")
{
$rs=CustomQuery('select accepted_date, is_urgent, count(*) as c1 from job 
									WHERE accepted_date !="0000-00-00 00:00:00" 
									AND (is_urgent = "1")  
									AND (
												jobstatus_id != 0 
												AND jobstatus_id != 9 
												AND jobstatus_id != 12)  
											AND (
														pdf_id =5002 OR 
														pdf_id =5027 OR 
														pdf_id =5028 OR 
														pdf_id =5029 OR 
														pdf_id =5030 OR 
														pdf_id =5370 OR 
														pdf_id =5371 OR 
														pdf_id =5031
														)
												
									');
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
//$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
$menuItem->setTitle("Urgent (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}
if($menuItem->getTitle() == "18442 Need Download")
{
$rs=CustomQuery('
									select accepted_date, jobstatus_id, count(*) as c1 from job 
									WHERE (accepted_date !="0000-00-00 00:00:00") 
									AND 
											(
											jobstatus_id = "2" 
											OR jobstatus_id = "20")
											AND (
														pdf_id =5002 OR 
														pdf_id =5027 OR 
														pdf_id =5028 OR 
														pdf_id =5029 OR 
														pdf_id =5030 OR 
														pdf_id =5370 OR 
														pdf_id =5371 OR 
														pdf_id =5031
														)
									');
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
//$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
$menuItem->setTitle("Download (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}

if($menuItem->getTitle() == "18442 Need Accept")
{
$rs=CustomQuery('
									select accepted_date, jobstatus_id, count(*) as c1 from job 
									WHERE jobstatus_id = "1"  
											AND (
														pdf_id =5002 OR 
														pdf_id =5027 OR 
														pdf_id =5028 OR 
														pdf_id =5029 OR 
														pdf_id =5030 OR 
														pdf_id =5370 OR 
														pdf_id =5371 OR 
														pdf_id =5031
														)
									');
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
//$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
$menuItem->setTitle("Accept (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}

if($menuItem->getTitle() == "18442 Need QC")
{
$rs=CustomQuery('
								select accepted_date, jobstatus_id, count(*) as c1 from job 
								WHERE accepted_date !="0000-00-00 00:00:00" 
								AND jobstatus_id = "14"  
								AND 
									(jobstatus_id != 0 
									AND jobstatus_id != 9 
									AND jobstatus_id != 12 )
											AND (
														pdf_id =5002 OR 
														pdf_id =5027 OR 
														pdf_id =5028 OR 
														pdf_id =5029 OR 
														pdf_id =5030 OR 
														pdf_id =5370 OR 
														pdf_id =5371 OR 
														pdf_id =5031
														)
									
								');
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
//$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
$menuItem->setTitle("QC (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}

if($menuItem->getTitle() == "18442 Need Upload")
{
$rs=CustomQuery('
									select accepted_date, jobstatus_id, count(*) as c1 from job 
									WHERE accepted_date !="0000-00-00 00:00:00" 
									AND jobstatus_id = "7"  
									AND 
										(
										jobstatus_id != 0 
										AND jobstatus_id != 9 
										AND jobstatus_id != 12  )
											AND (
														pdf_id =5002 OR 
														pdf_id =5027 OR 
														pdf_id =5028 OR 
														pdf_id =5029 OR 
														pdf_id =5030 OR 
														pdf_id =5370 OR 
														pdf_id =5371 OR 
														pdf_id =5031
														)
										
									');
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
//$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
$menuItem->setTitle("Upload (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}

if($menuItem->getTitle() == "18442 Need Notify")
{
$rs=CustomQuery('
									select accepted_date, jobstatus_id, count(*) as c1 from job 
									WHERE accepted_date !="0000-00-00 00:00:00" 
									AND jobstatus_id = "8"  
									AND 
										(
										jobstatus_id != 0 
										AND jobstatus_id != 9 
										AND jobstatus_id != 12)  
											AND (
														pdf_id =5002 OR 
														pdf_id =5027 OR 
														pdf_id =5028 OR 
														pdf_id =5029 OR 
														pdf_id =5030 OR 
														pdf_id =5370 OR 
														pdf_id =5371 OR 
														pdf_id =5031
														)
										
									');
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
//$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
$menuItem->setTitle("Notify (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}

///-----18442 Files
/*
if($menuItem->getTitle() == "18442 Files")
{
	$rs=CustomQuery('select count(*) as c1 from jobfile 
										WHERE jobfile_status_id = "3"  
											AND (
														project_id =5002 OR 
														project_id =5027 OR 
														project_id =5028 OR 
														project_id =5029 OR 
														project_id =5030 OR 
														project_id =5370 OR 
														project_id =5371 OR 
														project_id =5031
														)
');
	$data = db_fetch_array($rs);
	if($data["c1"] > 0)
	{
	$rs2=CustomQuery('select count(*) as c1 from jobfile 
											WHERE (jobfile_status_id != "7" ) 
											AND (
														project_id =5002 OR 
														project_id =5027 OR 
														project_id =5028 OR 
														project_id =5029 OR 
														project_id =5030 OR 
														project_id =5370 OR 
														project_id =5371 OR 
														project_id =5031
														)');
	$data2 = db_fetch_array($rs2);
	if($data2["c1"] > 0)
	{
		$rs3=CustomQuery('select count(*) as c1 from jobfile 
		WHERE (jobfile_status_id = "14" ) 
											AND (
														project_id =5002 OR 
														project_id =5027 OR 
														project_id =5028 OR 
														project_id =5029 OR 
														project_id =5030 OR 
														project_id =5370 OR 
														project_id =5371 OR 
														project_id =5031
														)');
			$data3 = db_fetch_array($rs3);
			if($data3["c1"] > 0)
			{
			$menuItem->setTitle($menuItem->getTitle() . " [D ". $data["c1"] . " / QC ".$data3["c1"]." of ".$data2["c1"].")]");
			}
			else
			{
			$menuItem->setTitle($menuItem->getTitle() . " [". $data["c1"] . " of ".$data2["c1"]."]");
			}
	}
	else
		{
		$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
		}
}
else
	{
	//$menuItem->setTitle($menuItem->getTitle());
	return false;
	}
}
*/


//18442 BLOCK --------------------------------------------------------------------------------------------------------------------------------------#################################################################



if($menuItem->getTitle() == "Deadline Missed")
{
$rs=CustomQuery('
									select accepted_date, delivery_date, count(*) as c1 from job 
									WHERE (accepted_date !="0000-00-00 00:00:00") 
									AND 
										(
										jobstatus_id != 0 
										AND jobstatus_id != 1 
										AND jobstatus_id != 9 
										AND jobstatus_id != 12
										) 
									 AND
((pdf_id != 5001 AND pdf_id !=5879 AND pdf_id !=5880) AND pdf_id != 5002 AND pdf_id != 5027 AND pdf_id != 5028 AND pdf_id != 5029 AND pdf_id != 5030 AND pdf_id != 5370 AND pdf_id != 5371 AND pdf_id != 5031)
									
									AND (TIMEDIFF(delivery_date, NOW()) <"01:00:00")
									');
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}
if($menuItem->getTitle() == "Pending Jobs")
{
$rs=CustomQuery('
									select accepted_date, count(*) as c1 from job 
									WHERE accepted_date !="0000-00-00 00:00:00"  
									AND 
										(
										jobstatus_id != 0 
										AND jobstatus_id != 1 
										AND jobstatus_id != 9 
										AND jobstatus_id != 12
										) AND
((pdf_id != 5001 OR pdf_id !=5879 OR pdf_id !=5880) AND pdf_id != 5002 AND pdf_id != 5027 AND pdf_id != 5028 AND pdf_id != 5029 AND pdf_id != 5030 AND pdf_id != 5370 AND pdf_id != 5371 AND pdf_id != 5031)
									');
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
//$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
//$menuItem->setTitle("Pending (". $data["c1"] . ")");
$menuItem->setTitle("Pending (". $data["c1"] . ")");
}
else
	{
	//return false;
	}
}

if($menuItem->getTitle() == "Urgent Jobs")
{
$rs=CustomQuery('
									select accepted_date, is_urgent, count(*) as c1 from job 
									WHERE accepted_date !="0000-00-00 00:00:00" 
									AND is_urgent = "1"  
									AND 
											(
											jobstatus_id != 0 
											AND jobstatus_id != 9 
											AND jobstatus_id != 12  
											AND pdf_id !=5001
											) AND
((pdf_id != 5001 AND pdf_id !=5879 AND pdf_id !=5880) AND pdf_id != 5002 AND pdf_id != 5027 AND pdf_id != 5028 AND pdf_id != 5029 AND pdf_id != 5030 AND pdf_id != 5370 AND pdf_id != 5371 AND pdf_id != 5031)
									
									');
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
//$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
$menuItem->setTitle("Urgent (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}
if($menuItem->getTitle() == "Need Download")
{
$rs=CustomQuery('
									select accepted_date, jobstatus_id, count(*) as c1 from job 
									WHERE accepted_date !="0000-00-00 00:00:00" 
									AND 
											(
											jobstatus_id = "2" 
											OR jobstatus_id = "20"
											) AND
((pdf_id != 5001 AND pdf_id !=5879 AND pdf_id !=5880) AND pdf_id != 5002 AND pdf_id != 5027 AND pdf_id != 5028 AND pdf_id != 5029 AND pdf_id != 5030 AND pdf_id != 5370 AND pdf_id != 5371 AND pdf_id != 5031)
									');
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
//$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
$menuItem->setTitle("Download (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}

if($menuItem->getTitle() == "Need Accept")
{
$rs=CustomQuery('select accepted_date, jobstatus_id, count(*) as c1 from job WHERE jobstatus_id = "1"   AND
((pdf_id != 5001 AND pdf_id !=5879 AND pdf_id !=5880) AND pdf_id != 5002 AND pdf_id != 5027 AND pdf_id != 5028 AND pdf_id != 5029 AND pdf_id != 5030 AND pdf_id != 5370 AND pdf_id != 5371 AND pdf_id != 5031)
									');
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
//$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
$menuItem->setTitle("Accept (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}

if($menuItem->getTitle() == "Need Upload")
{
$rs=CustomQuery('select accepted_date, jobstatus_id, count(*) as c1 from job 
WHERE accepted_date !="0000-00-00 00:00:00" 
AND jobstatus_id = "7"  
 AND
((pdf_id != 5001 AND pdf_id !=5879 AND pdf_id !=5880) AND pdf_id != 5002 AND pdf_id != 5027 AND pdf_id != 5028 AND pdf_id != 5029 AND pdf_id != 5030 AND pdf_id != 5370 AND pdf_id != 5371 AND pdf_id != 5031)
									
');
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
//$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
$menuItem->setTitle("Upload (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}

if($menuItem->getTitle() == "Need QC")
{
$rs=CustomQuery('
									select accepted_date, jobstatus_id, count(*) as c1 from job 
									WHERE accepted_date !="0000-00-00 00:00:00" 
									AND jobstatus_id = "14"  
									AND 
											(
											jobstatus_id != 0 
											AND jobstatus_id != 9 
											AND jobstatus_id != 12  
											 AND
((pdf_id != 5001 AND pdf_id !=5879 AND pdf_id !=5880) AND pdf_id != 5002 AND pdf_id != 5027 AND pdf_id != 5028 AND pdf_id != 5029 AND pdf_id != 5030 AND pdf_id != 5370 AND pdf_id != 5371 AND pdf_id != 5031)
									
											)
									');
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
//$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
$menuItem->setTitle("QC (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}

if($menuItem->getTitle() == "Need Notify")
{
$rs=CustomQuery('
									select accepted_date, jobstatus_id, count(*) as c1 from job 
									WHERE accepted_date !="0000-00-00 00:00:00" 
									AND jobstatus_id = "8"  
									AND (
											jobstatus_id != 0 
											AND jobstatus_id != 9 
											AND jobstatus_id != 12  
											 AND
((pdf_id != 5001 AND pdf_id !=5879 AND pdf_id !=5880) AND pdf_id != 5002 AND pdf_id != 5027 AND pdf_id != 5028 AND pdf_id != 5029 AND pdf_id != 5030 AND pdf_id != 5370 AND pdf_id != 5371 AND pdf_id != 5031)
									
											)
									');
$data = db_fetch_array($rs);
if($data["c1"] > 0)
{
//$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
$menuItem->setTitle("Notify (". $data["c1"] . ")");
}
else
	{
	return false;
	}
}


// ------- other files
/*
if($menuItem->getTitle() == "Files")
{
	$rs=CustomQuery('select count(*) as c1 from jobfile WHERE (jobfile_status_id = "3") AND project_id !=5001 AND project_id !=5879 AND project_id !=5880');
	$data = db_fetch_array($rs);
	if($data["c1"] > 0)
	{
	$rs2=CustomQuery('select count(*) as c1 from jobfile WHERE (jobfile_status_id != "7") AND project_id !=5001 AND project_id !=5879 AND project_id !=5880');
	$data2 = db_fetch_array($rs2);
	if($data2["c1"] > 0)
	{
		$rs3=CustomQuery('select count(*) as c1 from jobfile WHERE (jobfile_status_id = "14") AND project_id !=5001 AND project_id !=5879 AND project_id !=5880');
			$data3 = db_fetch_array($rs3);
			if($data3["c1"] > 0)
			{
			$menuItem->setTitle($menuItem->getTitle() . " [D ". $data["c1"] . " / QC ".$data3["c1"]." of ".$data2["c1"].")]");
			}
			else
			{
			$menuItem->setTitle($menuItem->getTitle() . " [". $data["c1"] . " of ".$data2["c1"]."]");
			}
	}
	else
		{
		$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
		}
}
else
	{
	$menuItem->setTitle($menuItem->getTitle());
	//return false;
	}
}
// ------- other files

// ----------------- FILES
if($menuItem->getTitle() == "All Files")
{
	$rs=CustomQuery('select count(*) as c1 from jobfile WHERE (jobfile_status_id = "3" )');
	$data = db_fetch_array($rs);
	if($data["c1"] > 0)
	{
	$rs2=CustomQuery('select count(*) as c1 from jobfile WHERE (jobfile_status_id != "7" )');
	$data2 = db_fetch_array($rs2);
	if($data2["c1"] > 0)
	{
		$rs3=CustomQuery('select count(*) as c1 from jobfile WHERE (jobfile_status_id = "14" )');
			$data3 = db_fetch_array($rs3);
			if($data3["c1"] > 0)
			{
			$menuItem->setTitle($menuItem->getTitle() . " [D ". $data["c1"] . " / QC ".$data3["c1"]." of ".$data2["c1"].")]");
			}
			else
			{
			$menuItem->setTitle($menuItem->getTitle() . " [". $data["c1"] . " of ".$data2["c1"]."]");
			}
	}
	else
		{
		$menuItem->setTitle($menuItem->getTitle() . " (". $data["c1"] . ")");
		}
}
else
	{
	$menuItem->setTitle($menuItem->getTitle());
	//return false;
	}
}
// -------------Files
*/


//Modify Above this Line
return true;

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function ModifyMenuItem

		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events

} 
?>
