<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 


if(!isLogged())
{ 
	return;
}
if(!IsAdmin())
{
	return;
}
$nonAdminTablesArr = array();
$nonAdminTablesArr[] = "department";
$nonAdminTablesArr[] = "group";
$nonAdminTablesArr[] = "job";
$nonAdminTablesArr[] = "jobfile";
$nonAdminTablesArr[] = "jobstatus";
$nonAdminTablesArr[] = "notifyoption";
$nonAdminTablesArr[] = "subdivision";
$nonAdminTablesArr[] = "user";
$nonAdminTablesArr[] = "Dashboard";
$nonAdminTablesArr[] = "File Distribution";
$nonAdminTablesArr[] = "Download Job";
$nonAdminTablesArr[] = "Pending Jobs";
$nonAdminTablesArr[] = "pdf";
$nonAdminTablesArr[] = "project";
$nonAdminTablesArr[] = "Designer Worksheet";
$nonAdminTablesArr[] = "Designer Filesheet";
$nonAdminTablesArr[] = "team";
$nonAdminTablesArr[] = "QC Worksheet";
$nonAdminTablesArr[] = "QC Filesheet";
$nonAdminTablesArr[] = "All Jobs";
$nonAdminTablesArr[] = "Daily Job Report (Accepted)";
$nonAdminTablesArr[] = "Users";
$nonAdminTablesArr[] = "ad_uggroups";
$nonAdminTablesArr[] = "ad_ugmembers";
$nonAdminTablesArr[] = "Designer Level 2";
$nonAdminTablesArr[] = "Designer Level2 Filesheet";
$nonAdminTablesArr[] = "data_audit";
$nonAdminTablesArr[] = "Urgent Jobs";
$nonAdminTablesArr[] = "Deadline Missed";
$nonAdminTablesArr[] = "Need to Accept";
$nonAdminTablesArr[] = "Need Notify";
$nonAdminTablesArr[] = "Need Download";
$nonAdminTablesArr[] = "Need QC";
$nonAdminTablesArr[] = "Need Upload";
$nonAdminTablesArr[] = "Pending 14704";
$nonAdminTablesArr[] = "Daily Job Report (Notified)";
$nonAdminTablesArr[] = "14704 Need QC";
$nonAdminTablesArr[] = "14704 Need Upload";
$nonAdminTablesArr[] = "14704 Need Download";
$nonAdminTablesArr[] = "14704 Need Notify";
$nonAdminTablesArr[] = "14704 Need Accept";
$nonAdminTablesArr[] = "14704 Deadline Missed";
$nonAdminTablesArr[] = "14704 Urgent Jobs";
$nonAdminTablesArr[] = "File Reject";
$nonAdminTablesArr[] = "designer_report";
$nonAdminTablesArr[] = "Designer Report (All)";
$nonAdminTablesArr[] = "custompages";
$nonAdminTablesArr[] = "14704 Daily Report Full";
$nonAdminTablesArr[] = "rejected_jobfile";
$nonAdminTablesArr[] = "type_of_errors";
$nonAdminTablesArr[] = "14704 Designer Report";
$nonAdminTablesArr[] = "Team Report";
$nonAdminTablesArr[] = "status";
$nonAdminTablesArr[] = "designation";
$nonAdminTablesArr[] = "Correction Files";
$nonAdminTablesArr[] = "Client Instruction";
$nonAdminTablesArr[] = "14704 Monthly Report Full";
$nonAdminTablesArr[] = "14704 Daily Report Designers";
$nonAdminTablesArr[] = "14704 Monthly Report Designers";
$nonAdminTablesArr[] = "14704 Daily Report  Team";
$nonAdminTablesArr[] = "Delected Jobs";
$nonAdminTablesArr[] = "14704 Monthly Report Team";
$nonAdminTablesArr[] = "Daily Report Designers";
$nonAdminTablesArr[] = "Monthly Report Designers";
$nonAdminTablesArr[] = "Daily Report Team";
$nonAdminTablesArr[] = "Monthly Report Team";
$nonAdminTablesArr[] = "Daily Report Full";
$nonAdminTablesArr[] = "Monthly Report Full";
$nonAdminTablesArr[] = "Capacity - Night Shift";
$nonAdminTablesArr[] = "Capacity - Morning Shift";
$nonAdminTablesArr[] = "Capacity - Evening Shift";
$nonAdminTablesArr[] = "Pending 18442";
$nonAdminTablesArr[] = "18442 Deadline Missed";
$nonAdminTablesArr[] = "18442 Urgent Jobs";
$nonAdminTablesArr[] = "18442 Need Notify";
$nonAdminTablesArr[] = "18442 Need Upload";
$nonAdminTablesArr[] = "18442 Need QC";
$nonAdminTablesArr[] = "18442 Need Download";
$nonAdminTablesArr[] = "18442 Need Accept";
$nonAdminTablesArr[] = "Monthly PDF Avrage";
$nonAdminTablesArr[] = "Daily Report Designer PDF";
$nonAdminTablesArr[] = "Monthly Job Report (Accepted)";
$nonAdminTablesArr[] = "Monthly Report Designer PDF";
$nonAdminTablesArr[] = "Monthly Job Report (Notified)";
$nonAdminTablesArr[] = "14704 Week Report Team";
$nonAdminTablesArr[] = "14704 Monthly Designers Avrage";
$nonAdminTablesArr[] = "clients";
$nonAdminTablesArr[] = "Designer files report";
$nonAdminTablesArr[] = "PDF Done - Evening Shift";
$nonAdminTablesArr[] = "PDF Done - Morning Shift";
$nonAdminTablesArr[] = "PDF Done - Night Shift";
$nonAdminTablesArr[] = "PDF Done - Today";
$nonAdminTablesArr[] = "Files Need to Work";
$nonAdminTablesArr[] = "Weekly Report Designers";
$nonAdminTablesArr[] = "Designers Work Profile";
$nonAdminTablesArr[] = "Designers Performance";
$nonAdminTablesArr[] = "Designers Performance Monthly";
$nonAdminTablesArr[] = "Display";
$nonAdminTablesArr[] = "Daily QC";
$nonAdminTablesArr[] = "Display Files Now Working";
$nonAdminTablesArr[] = "Display Files Need to Work QC";
$nonAdminTablesArr[] = "Display Files Done Today";
$nonAdminTablesArr[] = "Daily Report 33392";
$nonAdminTablesArr[] = "generator_rex";
$nonAdminTablesArr[] = "Display generator_top_images";
$nonAdminTablesArr[] = "Display_top_team_performance";
$nonAdminTablesArr[] = "Display_top_designer_performance";
$nonAdminTablesArr[] = "Daily PDF Avrage";
$nonAdminTablesArr[] = "Weekly PDF Avrage";
$nonAdminTablesArr[] = "pdf_report";
$nonAdminTablesArr[] = "Display Rejected today";
$nonAdminTablesArr[] = "Display QC Done Today";
$nonAdminTablesArr[] = "Display Files Notifyed Today";
$nonAdminTablesArr[] = "mail_messages";
$nonAdminTablesArr[] = "Emailer";
$nonAdminTablesArr[] = "Display Files Need to Download";
$nonAdminTablesArr[] = "Display Files Need to Distribute";
$nonAdminTablesArr[] = "Display ETA";
$nonAdminTablesArr[] = "Display_top_designer_Files";
$nonAdminTablesArr[] = "Display Files Need to Prosess";
$nonAdminTablesArr[] = "Daily Accepted Riajul";
$nonAdminTablesArr[] = "attendance_sheet";
$nonAdminTablesArr[] = "employee_present";
$nonAdminTablesArr[] = "ShiftType";
$nonAdminTablesArr[] = "UserShift";
$nonAdminTablesArr[] = "user1";
$nonAdminTablesArr[] = "Daily Designers and QC";
$nonAdminTablesArr[] = "work_type";
$nonAdminTablesArr[] = "rejected_job";
$nonAdminTablesArr[] = "Download Reject Job";
$nonAdminTablesArr[] = "rejected_jobfile2";
$nonAdminTablesArr[] = "File Distribution Rejected";
$nonAdminTablesArr[] = "Designer Level 2 for Correction";
$nonAdminTablesArr[] = "Designer Level2 Filesheet for Correction";
$nonAdminTablesArr[] = "QC Worksheet for Correction";
$nonAdminTablesArr[] = "QC Filesheet for Correction";
$nonAdminTablesArr[] = "External Rejection";
$nonAdminTablesArr[] = "files_menu_count";
$nonAdminTablesArr[] = "Display_Designer_Need";
$nonAdminTablesArr[] = "Internal Rejection";
$nonAdminTablesArr[] = "Daily Users Work";
$nonAdminTablesArr[] = "not for use";
$nonAdminTablesArr[] = "jobfile_type";
$nonAdminTablesArr[] = "users_work_report";
$nonAdminTablesArr[] = "Daily Users Work Summery";
$nonAdminTablesArr[] = "Daily PDF Work Summery";
$nonAdminTablesArr[] = "Backup Notified Jobs";
$nonAdminTablesArr[] = "Daily Users Work Summery QC";

$ug_connection = $cman->getForUserGroups();

$cbxNames = array('add' => array('mask' => 'A', 'rightName' => 'add')
	, 'edt' => array('mask' => 'E', 'rightName' => 'edit')
	, 'del' => array('mask' => 'D', 'rightName' => 'delete')
	, 'lst' => array('mask' => 'S', 'rightName' => 'list')
	, 'exp' => array('mask' => 'P', 'rightName' => 'export')
	, 'imp' => array('mask' => 'I', 'rightName' => 'import')
	, 'adm' => array('mask' => 'M'));

$wGroupTableName = $ug_connection->addTableWrappers( "ad_uggroups" );
	
switch(postvalue("a"))
{
	case "add":
		$sql = "insert into ". $wGroupTableName ." (". $ug_connection->addFieldWrappers( "Label" ) .")"
			." values (". $ug_connection->prepareString( postvalue("name") ). ")";		
		$ug_connection->exec( $sql );

		$sql = "select max(". $ug_connection->addFieldWrappers( "GroupID") .") from ". $wGroupTableName;
		$data = $ug_connection->query( $sql )->fetchNumeric();
		
		echo printJSON( array('success' => true, 'id' => $data[0]) );
		break;
		
	case "del":
		$sql = "delete from ". $wGroupTableName ." where ". $ug_connection->addFieldWrappers("GroupID") ."=".(postvalue("id")+0);
		$ug_connection->exec( $sql );
		
		$sql = "delete from ". $ug_connection->addTableWrappers( "ad_ugrights" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue("id")+0);
		$ug_connection->exec( $sql );
		
		$sql = "delete from ".$ug_connection->addTableWrappers( "ad_ugmembers" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue("id")+0);
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
		
	case "rename":
		$sql = "update ". $wGroupTableName  
			." set ". $ug_connection->addFieldWrappers( "Label" ) ."=". $ug_connection->prepareString( postvalue("name") )
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue("id")+0);
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
	
	case 'saveRights':
		$error = '';
		if( postvalue('state') )
		{	
			$allRights = array();
			$sql = "select ". $ug_connection->addFieldWrappers( "GroupID" ) 
				.", ". $ug_connection->addFieldWrappers( "TableName" ) 
				.", ". $ug_connection->addFieldWrappers( "AccessMask" ) ." from ". $wGroupTableName;
			
			$qResult = $ug_connection->query( $sql );
			// don't use fetchAssoc! because of ORACLE and PostgreSQL
			while( $rightsRow = $qResult->fetchNumeric() )
			{
				$allRights[] = $rightsRow;
			}
			
			$wRightsTableName = $ug_connection->addTableWrappers( "ad_ugrights" );
			
			$delGroupId = 0;
			$state = my_json_decode( postvalue('state') );
			// delete all extra permissions from db
			foreach($allRights as $i => $rightValue)
			{
				$groupIDInt = (int) $rightValue[0];
				
				if($groupIDInt == $delGroupId)
					continue;
					
				//delete all extra permissions for group
				if( !array_key_exists($groupIDInt, $state) )
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt;
					$ug_connection->exec( $sql );
				}
				//delete all extra permissions for table in group
				else if(!array_key_exists(GetTableId($data[1]), $state[$groupIDInt]))
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt 
						." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=".$ug_connection->prepareString( html_special_decode($data[1]) );				
					$ug_connection->exec( $sql );
				}
			}
			
			$realTables = GetRealValues();
			foreach ($state as $groupId => $groupRights)
			{
				foreach ($groupRights as $table => $mask)
				{
					if( !array_key_exists($table, $realTables) )
						continue;
					
					$ins = true;
					foreach($allRights as $i => $rightValue)
					{	
						if($rightValue[0] == $groupId && $rightValue[1] == $realTables[$table])	
						{
							$ins = false;
							if($data[2]!= $mask)
							{
								$sql ="update". $wRightsTableName 
									." set ". $ug_connection->addFieldWrappers( "AccessMask" ) ."=". $ug_connection->prepareString( $mask )
									." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupId 
									." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=". $ug_connection->prepareString( html_special_decode($realTables[$table]) );
								$ug_connection->exec( $sql );
							}
						}
					}
					if($ins)
					{
						$sql = "insert into ". $wRightsTableName
							." (". $ug_connection->addFieldWrappers( "TableName" ) 
							.", ". $ug_connection->addFieldWrappers( "GroupID" ) 
							.", ". $ug_connection->addFieldWrappers( "AccessMask" ) .") " 
							."values (". $ug_connection->prepareString(html_special_decode($realTables[$table])) .", ". $groupId .", ". $ug_connection->prepareString($mask)  .")";
						$ug_connection->exec( $sql );
					}
					
					$error = $ug_connection->lastError();
				}
			}
		}
		
		getJSONResult($error);
		break;
		
	case 'saveMembership':
		$error = '';
		$groupId = postvalue('group');
		$realUsers = GetRealValues();
		
		$wMemebersTableName = $ug_connection->addTableWrappers( "ad_ugmembers" );
		
		for($i = 0; $i < count($realUsers); $i++)
		{
			if( $realUsers[$i] != $_SESSION["UserID"] )
			{
				$sql = "delete from ". $wMemebersTableName ." where ". $ug_connection->addFieldWrappers( "UserName" )."=%s";
			}
			else
			{
				$sql = "delete from ". $wMemebersTableName ." where ". $ug_connection->addFieldWrappers( "UserName" ) ."=%s "
					."and ". $ug_connection->addFieldWrappers( "GroupID" ) ."<>-1";
			}
			
			$ug_connection->exec( mysprintf($sql, array( $ug_connection->prepareString( html_special_decode($realUsers[$i]) ) )) );	
		}
		
		if(postvalue('state'))
		{
			$state = my_json_decode( postvalue('state') );
			foreach ($state as $group => $users)
			{
				foreach ($users as $user)
				{
					if( !array_key_exists($user, $realUsers) )
						continue;
					
					$sql = "insert into ". $wMemebersTableName 
						." (". $ug_connection->addFieldWrappers( "UserName" ) 
						.", ". $ug_connection->addFieldWrappers( "GroupID" ) 
						.") values (". $ug_connection->prepareString( html_special_decode($realUsers[$user]) ) .", ". $group .")";
					
					$ug_connection->exec( $sql );
					
					$error = $ug_connection->lastError();
				}
			}
		}
		
		getJSONResult($error);
		break;
}

function GetTableId($name)
{
	$tbls = GetRealValues();
	for($i = 0;$i < count($tbls); $i++)
	{
		if($tbls[$i] == $name)
			return $i;
	}
	return -1;
}

/**
 * GetRealValues
 * Form array with real users or tables names
 * @return {array} array of reaf names
 */
function GetRealValues()
{
	$result = array();
	if(postvalue('realValues'))
		$realValues = my_json_decode(postvalue('realValues'));
		foreach ($realValues as $key =>$value)
			$result[$key] = $value;
	return $result;
}

/**
 * getJSONResult
 * Form result as a JSON object according of errors
 * @param {string} list of errors
 */
function getJSONResult($error)
{
	$result['success'] = $error == '';
	$result['error'] = $error;	
	echo printJSON($result);
}