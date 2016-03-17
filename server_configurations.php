<?PHP
//DEFINE SESSION VARIABLES
//$_SESSION[""] = "
$server_ip = $_SERVER['HTTP_HOST'];

if($server_ip == "192.168.3.1")
{
// MSBD SERVER CONFIG
$_SESSION["my_server_ip"] = "192.168.3.1";
//$_SESSION["my_server_share"] = "visionwebapp";
$_SESSION["my_server_share"] = "visionwebapp_alex";
$_SESSION["my_server_url"] = "http://".$_SESSION["my_server_ip"]."/".$_SESSION["my_server_share"]."/";
$_SESSION["my_server_name"] = "\\\\".$_SESSION["my_server_ip"]."\\".$_SESSION["my_server_share"]."\\";

//$_SESSION["my_hosted_location"] = "\\\\".$_SESSION["my_server_ip"]."\\visionwebapp\\";
$_SESSION["my_hosted_location"] = "\\\\".$_SESSION["my_server_ip"]."\\visionwebapp_alex\\";
$_SESSION["my_server_name_with_port"] = "//192.168.3.1:4021/";

$_SESSION["my_downloadserver_ip"] = "192.168.3.1";
$_SESSION["download_dir"] = "\\\\".$_SESSION["my_downloadserver_ip"]."\\downloadapp\\";

$_SESSION["my_outputserver_ip"] = "192.168.3.1";
$_SESSION["output_dir"] = "\\\\".$_SESSION["my_outputserver_ip"]."\\outputapp\\";

$_SESSION["my_uploadserver_ip"] = "192.168.3.1";
$_SESSION["upload_dir"] = "\\\\".$_SESSION["my_uploadserver_ip"]."\\uploadapp\\";

$_SESSION["my_thumbnailserver_ip"] = "192.168.3.1";
$_SESSION["thumbnail_dir"] = "\\\\".$_SESSION["my_thumbnailserver_ip"]."\\thumbnail\\";
$_SESSION["thumbnail_url"] = "http://".$_SESSION["my_thumbnailserver_ip"].":4022/";

$_SESSION["my_screenshotserver_ip"] = "192.168.3.1";
$_SESSION["screenshot_dir"] = "\\\\".$_SESSION["my_screenshotserver_ip"]."\\screenshots\\";
$_SESSION["screenshot_url"] = "http://".$_SESSION["my_screenshotserver_ip"].":4023/";

$_SESSION["my_instructionserver_ip"] = "192.168.3.1";
$_SESSION["instruction_dir"] = "\\\\".$_SESSION["my_instructionserver_ip"]."\\Work Instructions\\";


$_SESSION["upload_backup_ip"] = "192.168.3.24";
$_SESSION["upload_backup_dir"] = "\\\\".$_SESSION["upload_backup_ip"]."\\E$\\Share Folders\\_upload backup";

$_SESSION["custom_db_host"] = "localhost";
$_SESSION["custom_db_user"] = "root";
$_SESSION["custom_db_pass"] = "Ex1Animatrix7";
$_SESSION["custom_db_dbname"] = "visionwebapp";
$_SESSION["null_date"] = "0000-00-00 00:00:00";

$_SESSION["custom_db2_host"] = "58.147.172.156";
$_SESSION["custom_db2_user"] = "root";
$_SESSION["custom_db2_pass"] = "Ex1Animatrix1";
$_SESSION["custom_db2_dbname"] = "visionwebapp";

// MSBD SERVER CONFIG
}
else if($server_ip == "192.168.2.1")
{//VISION SERVER CONFIG
//$_SESSION[""] = ""
$_SESSION["my_server_ip"] = "192.168.2.1";
$_SESSION["my_server_share"] = "visionwebapp";
$_SESSION["my_server_url"] = "http://".$_SESSION["my_server_ip"]."/".$_SESSION["my_server_share"]."/";
$_SESSION["my_server_name"] = "\\\\".$_SESSION["my_server_ip"]."\\".$_SESSION["my_server_share"]."\\";

$_SESSION["my_hosted_location"] = "\\\\".$_SESSION["my_server_ip"]."\\visionwebapp\\";
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

$_SESSION["my_screenshotserver_ip"] = "192.168.2.1";
$_SESSION["screenshot_dir"] = "\\\\".$_SESSION["my_screenshotserver_ip"]."\\screenshots\\";
$_SESSION["screenshot_url"] = "http://".$_SESSION["my_screenshotserver_ip"].":4023/";

$_SESSION["my_instructionserver_ip"] = "192.168.2.1";
$_SESSION["instruction_dir"] = "\\\\".$_SESSION["my_instructionserver_ip"]."\\Work Instructions\\";

$_SESSION["custom_db_host"] = "localhost";
$_SESSION["custom_db_user"] = "root";
$_SESSION["custom_db_pass"] = "Ex1Animatrix1";
$_SESSION["custom_db_dbname"] = "visionwebapp";
$_SESSION["null_date"] = "0000-00-00 00:00:00";

$_SESSION["custom_db2_host"] = "58.147.172.158";
$_SESSION["custom_db2_user"] = "root";
$_SESSION["custom_db2_pass"] = "Ex1Animatrix7";
$_SESSION["custom_db2_dbname"] = "visionwebapp";

}//VISION SERVER CONFIG
else
{//COMMON CONFIG
//$_SESSION[""] = ""
$_SESSION["my_server_ip"] = $server_ip;
$_SESSION["my_server_share"] = "visionwebapp";
$_SESSION["my_server_url"] = "http://".$_SESSION["my_server_ip"]."/".$_SESSION["my_server_share"]."/";
$_SESSION["my_server_name"] = "\\\\".$_SESSION["my_server_ip"]."\\".$_SESSION["my_server_share"]."\\";

$_SESSION["my_hosted_location"] = "\\\\".$_SESSION["my_server_ip"]."\\visionwebapp\\";
$_SESSION["my_server_name_with_port"] = "//".$server_ip.":4021/";

$_SESSION["my_downloadserver_ip"] = $server_ip;
$_SESSION["download_dir"] = "\\\\".$_SESSION["my_downloadserver_ip"]."\\downloadapp\\";

$_SESSION["my_outputserver_ip"] = $server_ip;
$_SESSION["output_dir"] = "\\\\".$_SESSION["my_outputserver_ip"]."\\outputapp\\";

$_SESSION["my_uploadserver_ip"] = $server_ip;
$_SESSION["upload_dir"] = "\\\\".$_SESSION["my_uploadserver_ip"]."\\uploadapp\\";

$_SESSION["my_thumbnailserver_ip"] = $server_ip;
$_SESSION["thumbnail_dir"] = "\\\\".$_SESSION["my_thumbnailserver_ip"]."\\thumbnail\\";
$_SESSION["thumbnail_url"] = "http://".$_SESSION["my_thumbnailserver_ip"].":4022/";

$_SESSION["my_screenshotserver_ip"] = $server_ip;
$_SESSION["screenshot_dir"] = "\\\\".$_SESSION["my_screenshotserver_ip"]."\\screenshots\\";
$_SESSION["screenshot_url"] = "http://".$_SESSION["my_screenshotserver_ip"].":4023/";

$_SESSION["my_instructionserver_ip"] = $server_ip;
$_SESSION["instruction_dir"] = "\\\\".$_SESSION["my_instructionserver_ip"]."\\Work Instructions\\";

//CUSTOM CONFIGURATION
if($server_ip == "58.147.172.156")
{
$_SESSION["custom_db_host"] = "localhost";
$_SESSION["custom_db_user"] = "root";
$_SESSION["custom_db_pass"] = "Ex1Animatrix1";
$_SESSION["custom_db_dbname"] = "visionwebapp";
$_SESSION["null_date"] = "0000-00-00 00:00:00";

$_SESSION["custom_db2_host"] = "58.147.172.158";
$_SESSION["custom_db2_user"] = "root";
$_SESSION["custom_db2_pass"] = "Ex1Animatrix7";
$_SESSION["custom_db2_dbname"] = "visionwebapp";
}
else if($server_ip == "58.147.172.158")
{
$_SESSION["custom_db_host"] = "localhost";
$_SESSION["custom_db_user"] = "root";
$_SESSION["custom_db_pass"] = "Ex1Animatrix7";
$_SESSION["custom_db_dbname"] = "visionwebapp";
$_SESSION["null_date"] = "0000-00-00 00:00:00";

$_SESSION["custom_db2_host"] = "58.147.172.156";
$_SESSION["custom_db2_user"] = "root";
$_SESSION["custom_db2_pass"] = "Ex1Animatrix1";
$_SESSION["custom_db2_dbname"] = "visionwebapp";
}
//CUSTOM CONFIGURATION

}//COMMON CONFIG
?>
