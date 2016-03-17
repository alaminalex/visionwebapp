<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/admin_rights_variables.php");

if( !Security::processAdminPageSecurity( false ) )
	return;


$tables = array();
$pageMask = array();
$table = "department";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("department", " " . "Department");
$table = "group";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("group", " " . "Group");
$table = "job";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("job", " " . "Job");
$table = "jobfile";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("jobfile", " " . "Jobfile");
$table = "jobstatus";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("jobstatus", " " . "Jobstatus");
$table = "notifyoption";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("notifyoption", " " . "Notifyoption");
$table = "subdivision";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("subdivision", " " . "Subdivision");
$table = "user";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("user", " " . "User");
$table = "Dashboard";
$mask="";
				$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("Dashboard", " " . "Dashboard");
$table = "File Distribution";
$mask="";
	$mask .= "A";
	$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("File_Distribution", " " . "File Distribution");
$table = "Download Job";
$mask="";
	$mask .= "A";
		$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("Download_Job", " " . "Download Job");
$table = "Pending Jobs";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("Pending_Jobs", " " . "Pending Jobs");
$table = "pdf";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("pdf", " " . "Pdf");
$table = "project";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("project", " " . "Project");
$table = "Designer Worksheet";
$mask="";
		$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("Designer_Worksheet", " " . "Designer Worksheet");
$table = "Designer Filesheet";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("Designer_Filesheet", " " . "Designer Filesheet");
$table = "team";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("team", " " . "Team");
$table = "QC Worksheet";
$mask="";
		$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("QC_Worksheet", " " . "QC Worksheet");
$table = "QC Filesheet";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("QC_Filesheet", " " . "QC Filesheet");
$table = "All Jobs";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("All_Jobs", " " . "All Jobs");
$table = "Daily Job Report (Accepted)";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Daily_Job_Report__Accepted_", " " . "Daily Job Report (Accepted)");
$table = "Users";
$mask="";
		$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("Users", " " . "Users");
$table = "ad_uggroups";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("ad_uggroups", " " . "Ad Uggroups");
$table = "ad_ugmembers";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("ad_ugmembers", " " . "Ad Ugmembers");
$table = "Designer Level 2";
$mask="";
		$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("Designer_Level_2", " " . "Designer Level 2");
$table = "Designer Level2 Filesheet";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("Designer_Level2_Filesheet", " " . "Designer Level2 Filesheet");
$table = "data_audit";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("data_audit", " " . "Data Audit");
$table = "Urgent Jobs";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("Urgent_Jobs", " " . "Urgent Jobs");
$table = "Deadline Missed";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("Deadline_Missed", " " . "Deadline Missed");
$table = "Need to Accept";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("Need_to_Accept", " " . "Need to Accept");
$table = "Need Notify";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("Need_Notify", " " . "Need Notify");
$table = "Need Download";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("Need_Download", " " . "Need Download");
$table = "Need QC";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("Need_QC", " " . "Need QC");
$table = "Need Upload";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("Need_Upload", " " . "Need Upload");
$table = "Pending 14704";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("Pending_14704", " " . "Pending 14704");
$table = "Daily Job Report (Notified)";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Daily_Job_Report__Notified_", " " . "Daily Job Report (Notified)");
$table = "14704 Need QC";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("14704_Need_QC", " " . "14704 Need QC");
$table = "14704 Need Upload";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("14704_Need_Upload", " " . "14704 Need Upload");
$table = "14704 Need Download";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("14704_Need_Download", " " . "14704 Need Download");
$table = "14704 Need Notify";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("14704_Need_Notify", " " . "14704 Need Notify");
$table = "14704 Need Accept";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("14704_Need_Accept", " " . "14704 Need Accept");
$table = "14704 Deadline Missed";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("14704_Deadline_Missed", " " . "14704 Deadline Missed");
$table = "14704 Urgent Jobs";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("14704_Urgent_Jobs", " " . "14704 Urgent Jobs");
$table = "File Reject";
$mask="";
	$mask .= "A";
	$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("File_Reject", " " . "File Reject");
$table = "designer_report";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("designer_report", " " . "Designer Report");
$table = "Designer Report (All)";
$mask="";
	$mask .= "A";
			$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("Designer_Report__All_", " " . "Designer Report (All)");
$table = "custompages";
$mask="";
				$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("custompages", " " . "Custompages");
$table = "14704 Daily Report Full";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("14704_Daily_Report_Full", " " . "14704 Daily Report Full");
$table = "rejected_jobfile";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("rejected_jobfile", " " . "Rejected Jobfile");
$table = "type_of_errors";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("type_of_errors", " " . "Type Of Errors");
$table = "14704 Designer Report";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("14704_Designer_Report", " " . "14704 Designer Report");
$table = "Team Report";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Team_Report", " " . "Team Report");
$table = "status";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("status", " " . "Status");
$table = "designation";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("designation", " " . "Designation");
$table = "Correction Files";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("Correction_Files", " " . "Correction Files");
$table = "Client Instruction";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Client_Instruction", " " . "Client Instruction");
$table = "14704 Monthly Report Full";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("14704_Monthly_Report_Full", " " . "14704 Monthly Report Full");
$table = "14704 Daily Report Designers";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("14704_Daily_Report_Designers", " " . "14704 Daily Report Designers");
$table = "14704 Monthly Report Designers";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("14704_Monthly_Report_Designers", " " . "14704 Monthly Report Designers");
$table = "14704 Daily Report  Team";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("14704_Daily_Report__Team", " " . "14704 Daily Report  Team");
$table = "Delected Jobs";
$mask="";
			$mask .= "D";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Delected_Jobs", " " . "Delected Jobs");
$table = "14704 Monthly Report Team";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("14704_Monthly_Report_Team", " " . "14704 Monthly Report Team");
$table = "Daily Report Designers";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Daily_Report_Designers", " " . "Daily Report Designers");
$table = "Monthly Report Designers";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Monthly_Report_Designers", " " . "Monthly Report Designers");
$table = "Daily Report Team";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Daily_Report_Team", " " . "Daily Report Team");
$table = "Monthly Report Team";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Monthly_Report_Team", " " . "Monthly Report Team");
$table = "Daily Report Full";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Daily_Report_Full", " " . "Daily Report Full");
$table = "Monthly Report Full";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Monthly_Report_Full", " " . "Monthly Report Full");
$table = "Capacity - Night Shift";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Capacity___Night_Shift", " " . "Capacity - Night Shift");
$table = "Capacity - Morning Shift";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Capacity___Morning_Shift", " " . "Capacity - Morning Shift");
$table = "Capacity - Evening Shift";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Capacity___Evening_Shift", " " . "Capacity - Evening Shift");
$table = "Pending 18442";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("Pending_18442", " " . "Pending 18442");
$table = "18442 Deadline Missed";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("18442_Deadline_Missed", " " . "18442 Deadline Missed");
$table = "18442 Urgent Jobs";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("18442_Urgent_Jobs", " " . "18442 Urgent Jobs");
$table = "18442 Need Notify";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("18442_Need_Notify", " " . "18442 Need Notify");
$table = "18442 Need Upload";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("18442_Need_Upload", " " . "18442 Need Upload");
$table = "18442 Need QC";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("18442_Need_QC", " " . "18442 Need QC");
$table = "18442 Need Download";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("18442_Need_Download", " " . "18442 Need Download");
$table = "18442 Need Accept";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("18442_Need_Accept", " " . "18442 Need Accept");
$table = "Monthly PDF Avrage";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Monthly_PDF_Avrage", " " . "Monthly PDF Avrage");
$table = "Daily Report Designer PDF";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Daily_Report_Designer_PDF", " " . "Daily Report Designer PDF");
$table = "Monthly Job Report (Accepted)";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Monthly_Job_Report__Accepted_", " " . "Monthly Job Report (Accepted)");
$table = "Monthly Report Designer PDF";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Monthly_Report_Designer_PDF", " " . "Monthly Report Designer PDF");
$table = "Monthly Job Report (Notified)";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Monthly_Job_Report__Notified_", " " . "Monthly Job Report (Notified)");
$table = "14704 Week Report Team";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("14704_Week_Report_Team", " " . "14704 Week Report Team");
$table = "14704 Monthly Designers Avrage";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("14704_Monthly_Designers_Avrage", " " . "14704 Monthly Designers Avrage");
$table = "clients";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("clients", " " . "Clients");
$table = "Designer files report";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Designer_files_report", " " . "Designer files report");
$table = "PDF Done - Evening Shift";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("PDF_Done___Evening_Shift", " " . "PDF Done - Evening Shift");
$table = "PDF Done - Morning Shift";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("PDF_Done___Morning_Shift", " " . "PDF Done - Morning Shift");
$table = "PDF Done - Night Shift";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("PDF_Done___Night_Shift", " " . "PDF Done - Night Shift");
$table = "PDF Done - Today";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("PDF_Done___Today", " " . "PDF Done - Today");
$table = "Files Need to Work";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Files_Need_to_Work", " " . "Files Need to Work");
$table = "Weekly Report Designers";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Weekly_Report_Designers", " " . "Weekly Report Designers");
$table = "Designers Work Profile";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Designers_Work_Profile", " " . "Designers Work Profile");
$table = "Designers Performance";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Designers_Performance", " " . "Designers Performance");
$table = "Designers Performance Monthly";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Designers_Performance_Monthly", " " . "Designers Performance Monthly");
$table = "Display";
$mask="";
				$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("Display", " " . "Display");
$table = "Daily QC";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Daily_QC", " " . "Daily QC");
$table = "Display Files Now Working";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Display_Files_Now_Working", " " . "Display Files Now Working");
$table = "Display Files Need to Work QC";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Display_Files_Need_to_Work_QC", " " . "Display Files Need to Work QC");
$table = "Display Files Done Today";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Display_Files_Done_Today", " " . "Display Files Done Today");
$table = "Daily Report 33392";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Daily_Report_33392", " " . "Daily Report 33392");
$table = "generator_rex";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("generator_rex", " " . "Generator Rex");
$table = "Display generator_top_images";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Display_generator_top_images", " " . "Display Generator Top Images");
$table = "Display_top_team_performance";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Display_top_team_performance", " " . "Display Top Team Performance");
$table = "Display_top_designer_performance";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Display_top_designer_performance", " " . "Display Top Designer Performance");
$table = "Daily PDF Avrage";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Daily_PDF_Avrage", " " . "Daily PDF Avrage");
$table = "Weekly PDF Avrage";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Weekly_PDF_Avrage", " " . "Weekly PDF Avrage");
$table = "pdf_report";
$mask="";
	$mask .= "A";
			$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("pdf_report", " " . "Pdf Report");
$table = "Display Rejected today";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Display_Rejected_today", " " . "Display Rejected today");
$table = "Display QC Done Today";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Display_QC_Done_Today", " " . "Display QC Done Today");
$table = "Display Files Notifyed Today";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Display_Files_Notifyed_Today", " " . "Display Files Notifyed Today");
$table = "mail_messages";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("mail_messages", " " . "Mail Messages");
$table = "Emailer";
$mask="";
				$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("Emailer", " " . "Emailer");
$table = "Display Files Need to Download";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Display_Files_Need_to_Download", " " . "Display Files Need to Download");
$table = "Display Files Need to Distribute";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Display_Files_Need_to_Distribute", " " . "Display Files Need to Distribute");
$table = "Display ETA";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Display_ETA", " " . "Display ETA");
$table = "Display_top_designer_Files";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Display_top_designer_Files", " " . "Display Top Designer Files");
$table = "Display Files Need to Prosess";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Display_Files_Need_to_Prosess", " " . "Display Files Need to Prosess");
$table = "Daily Accepted Riajul";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Daily_Accepted_Riajul", " " . "Daily Accepted Riajul");
$table = "attendance_sheet";
$mask="";
	$mask .= "A";
			$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("attendance_sheet", " " . "Attendance Sheet");
$table = "employee_present";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("employee_present", " " . "Employee Present");
$table = "ShiftType";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("ShiftType", " " . "Shift Type");
$table = "UserShift";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("UserShift", " " . "User Shift");
$table = "user1";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("user1", " " . "User1");
$table = "Daily Designers and QC";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Daily_Designers_and_QC", " " . "Daily Designers and QC");
$table = "work_type";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("work_type", " " . "Work Type");
$table = "rejected_job";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("rejected_job", " " . "Rejected Job");
$table = "Download Reject Job";
$mask="";
	$mask .= "A";
		$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("Download_Reject_Job", " " . "Download Reject Job");
$table = "rejected_jobfile2";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("rejected_jobfile2", " " . "Rejected Jobfile2");
$table = "File Distribution Rejected";
$mask="";
	$mask .= "A";
	$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("File_Distribution_Rejected", " " . "File Distribution Rejected");
$table = "Designer Level 2 for Correction";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("Designer_Level_2_for_Correction", " " . "Designer Level 2 for Correction");
$table = "Designer Level2 Filesheet for Correction";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("Designer_Level2_Filesheet_for_Correction", " " . "Designer Level2 Filesheet for Correction");
$table = "QC Worksheet for Correction";
$mask="";
		$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("QC_Worksheet_for_Correction", " " . "QC Worksheet for Correction");
$table = "QC Filesheet for Correction";
$mask="";
		$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("QC_Filesheet_for_Correction", " " . "QC Filesheet for Correction");
$table = "External Rejection";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("External_Rejection", " " . "External Rejection");
$table = "files_menu_count";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("files_menu_count", " " . "Files Menu Count");
$table = "Display_Designer_Need";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Display_Designer_Need", " " . "Display Designer Need");
$table = "Internal Rejection";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Internal_Rejection", " " . "Internal Rejection");
$table = "Daily Users Work";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Daily_Users_Work", " " . "Daily Users Work");
$table = "not for use";
$mask="";
	$mask .= "A";
			$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("not_for_use", " " . "not for use");
$table = "jobfile_type";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("jobfile_type", " " . "Jobfile Type");
$table = "users_work_report";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("users_work_report", " " . "Users Work Report");
$table = "Daily Users Work Summery";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Daily_Users_Work_Summery", " " . "Daily Users Work Summery");
$table = "Daily PDF Work Summery";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Daily_PDF_Work_Summery", " " . "Daily PDF Work Summery");
$table = "Backup Notified Jobs";
$mask="";
				$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("Backup_Notified_Jobs", " " . "Backup Notified Jobs");
$table = "Daily Users Work Summery QC";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Daily_Users_Work_Summery_QC", " " . "Daily Users Work Summery QC");




$layout = new TLayout("ug_rights", "Coral1vApplication", "MobilevApplication");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["ugcontrols"] = array();
$layout->container_properties["ugcontrols"] = array(  );
$layout->containers["ugcontrols"][] = array("name"=>"ugbuttons", 
	"block"=>"savebuttons_block", "substyle"=>1  );

$layout->containers["ugcontrols"][] = array("name"=>"ugrightbuttons", 
	"block"=>"savebuttons_block", "substyle"=>1  );

$layout->skins["ugcontrols"] = "1";

$layout->blocks["center"][] = "ugcontrols";
$layout->containers["message"] = array();
$layout->container_properties["message"] = array(  );
$layout->containers["message"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "1";

$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();
$layout->container_properties["grid"] = array(  );
$layout->containers["grid"][] = array("name"=>"ugrightsblock", 
	"block"=>"rights_block", "substyle"=>1  );

$layout->skins["grid"] = "grid";

$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();
$layout->container_properties["pagination"] = array(  );
$layout->containers["pagination"][] = array("name"=>"pagination", 
	"block"=>"pagination_block", "substyle"=>1  );

$layout->skins["pagination"] = "2";

$layout->blocks["center"][] = "pagination";
$layout->blocks["left"] = array();
$layout->containers["left"] = array();
$layout->container_properties["left"] = array(  );
$layout->containers["left"][] = array("name"=>"loggedas", 
	"block"=>"security_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"vmenu", 
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["left"] = "menu";

$layout->blocks["left"][] = "left";
$layout->containers["uggroup"] = array();
$layout->container_properties["uggroup"] = array(  );
$layout->containers["uggroup"][] = array("name"=>"ugrightsgroup", 
	"block"=>"", "substyle"=>1  );

$layout->skins["uggroup"] = "1";

$layout->blocks["left"][] = "uggroup";
$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";

$layout->blocks["top"][] = "master";
$layout->skins["toplinks"] = "2";

$layout->blocks["top"][] = "toplinks";
$page_layouts["admin_rights_list"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button1");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



require_once('include/xtempl.php');
require_once('classes/listpage.php');
require_once('classes/rightspage.php');
require_once('classes/rightspage_ad.php');

$xt = new Xtempl();

$options = array();
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;


$options["tables"] = $tables;
$options["pageMasks"] = $pageMask;

$pageObject = ListPage::createListPage($strTableName, $options);

if( postvalue("a") == "saveRights" )
{
	$modifiedRights = my_json_decode(postvalue('values'));
	$pageObject->saveRights($modifiedRights);
	return;
}

 
// add buttons if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();
	


?>
