<?PHP
$backup_src = $_SESSION["upload_dir"]."Notified Jobs\\";
$backup_dest = $_SESSION["upload_backup_dir"];

if(!exec("C:/xxcopy/xxcopy.exe \"".utf8_decode($current_file_done_src)."\" \"".$current_file_done_dest_url."\" /DB:2016-03-01 /RC /S /H /R /PD0 /ED0 /YY /WV0", $execoutput_done))
{
echo "$execoutput_done";
}
else
{
	echo "BACKUP PROCESS FAILED";
echo ;
}
	
?>