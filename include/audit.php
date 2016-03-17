<?php
class AuditTrailTable
{
	var $logTableName="data_audit";
	var $params;
	
	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $attLogin=0;
	var $timeLogin=0;
	var $maxFieldLength = 300;

	/**
	 * @type Connection
	 */
	protected $connection;
	
	function AuditTrailTable()
	{
		global $cman;
		
		$this->connection = $cman->getForAudit();		
		$userid="";
		if(@$_SESSION["UserID"])
			$userid=$_SESSION["UserID"];
			
		$this->params=array($_SERVER["REMOTE_ADDR"],$userid);
	}
	
    function LogLogin($pUsername)
    {
		global $globalEvents;
		$retval=true;
		$table="user";
		$this->params[1]=$pUsername;
		$arr=array();
		$this->params=array($_SERVER["REMOTE_ADDR"],$_SESSION["UserID"]);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $table, $this->strLogin, "");
		}
		return $retval;
    }
	
    function LogLoginFailed($pUsername)
    {
		global $globalEvents;
		$retval=true;
		$table="user";
		$this->params[1]=$pUsername;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strFailLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $table, $this->strFailLogin, "");
		}
		$this->params=array($_SERVER["REMOTE_ADDR"],"");
		return $retval;
    }
	
    function LogLogout()
    {
	global $globalEvents;
	if($_SESSION["UserID"]!="")
	{
		$retval=true;
		$table="user";
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strLogout, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $table, $this->strLogout, "");
		}
		return $retval;
	}
    }
	
    function LogChPassword()
    {
		global $globalEvents;
		$retval=true;
		$table="user";
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strChPass, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $table, $this->strChPass, "");
		}
		return $retval;
    }
	
    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [new]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$val);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($val,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			
			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strAdd, $str);
		}
		return $retval;
    }
	
    function LogEdit($str_table,$newvalues,$oldvalues,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($newvalues as $idx=>$val)
				{
					if(array_key_exists($idx,$keys))
					{
						if($val!=$oldvalues[$idx])
						{
							$str.=$idx." [old]: ".$oldvalues[$idx]."\r\n";
							$str.=$idx." [new]: ".$val."\r\n";
						}
						else
							$str.=$idx." : ".$val."\r\n";
					}
				}
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
												
						$strFields.=$idx." [new]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$newvalue);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
					}
				}
				$v="";
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			
			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strEdit, $str);
		}
		return $retval;
    }
	
    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{	
							$v=str_replace(array("\r\n","\n","\t")," ",$val);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			
			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strDelete, $str);
		}
		return $retval;
    }
    
    function LogAddEvent($message,$description="",$stable="")
    {
		global $globalEvents;
		$retval=true;
		$table=$stable;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $stable, $message, $description);
		}
		return $retval;
    }
	
    function LoginSuccessful()
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$where = $this->connection->addFieldWrappers("ip"). "=" .$this->connection->prepareString($_SERVER["REMOTE_ADDR"]). 
				" AND " .$this->connection->addFieldWrappers("action"). "=" .$this->connection->prepareString($this->strAccess);
			$sql = "DELETE FROM " .$this->connection->addTableWrappers( $this->logTableName ). " WHERE " .$where;
			
			$this->connection->exec( $sql );
		}
		
    }
	
    function LoginUnsuccessful($pUsername)
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$this->insert(now(), $_SERVER["REMOTE_ADDR"], $pUsername, "", $this->strAccess, "");
		}
    }
    
	function LoginAccess()
	{
		if( $this->attLogin > 0 && $this->timeLogin > 0 )
		{
			$where = $this->connection->addFieldWrappers("ip"). "=" .$this->connection->prepareString($_SERVER["REMOTE_ADDR"]). 
				" AND " .$this->connection->addFieldWrappers("action"). "=".$this->connection->prepareString("access");
			$orderBy = $this->connection->addFieldWrappers("id")." asc";
			$sql = "SELECT * FROM " .$this->connection->addTableWrappers( $this->logTableName ). " WHERE " .$where. " ORDER BY " .$orderBy;
			
			$qResult = $this->connection->query( $sql );
			
			$i = 0;
			while( $data = $qResult->fetchAssoc() )
			{
				if( secondsPassedFrom($data["datetime"]) / 60 <= $this->timeLogin )
				{
					if($i==0)
						$firstAccess=$data["datetime"];
					$i+=1;
				}
			}
			
			if( $i >= $this->attLogin )
				return ceil($this->timeLogin-secondsPassedFrom($firstAccess) / 60);
		}

		return false;
	}
	
	function logValueEnable($table)
	{
		if($table=="department")
		{
			return false;
		}
		if($table=="group")
		{
			return false;
		}
		if($table=="job")
		{
			return false;
		}
		if($table=="jobfile")
		{
			return false;
		}
		if($table=="jobstatus")
		{
			return false;
		}
		if($table=="notifyoption")
		{
			return false;
		}
		if($table=="subdivision")
		{
			return false;
		}
		if($table=="user")
		{
			return false;
		}
		if($table=="Dashboard")
		{
			return false;
		}
		if($table=="File Distribution")
		{
			return false;
		}
		if($table=="Download Job")
		{
			return false;
		}
		if($table=="Pending Jobs")
		{
			return false;
		}
		if($table=="pdf")
		{
			return false;
		}
		if($table=="project")
		{
			return false;
		}
		if($table=="Designer Worksheet")
		{
			return false;
		}
		if($table=="Designer Filesheet")
		{
			return false;
		}
		if($table=="team")
		{
			return false;
		}
		if($table=="QC Worksheet")
		{
			return false;
		}
		if($table=="QC Filesheet")
		{
			return false;
		}
		if($table=="All Jobs")
		{
			return false;
		}
		if($table=="Daily Job Report (Accepted)")
		{
			return false;
		}
		if($table=="Users")
		{
			return false;
		}
		if($table=="ad_uggroups")
		{
			return false;
		}
		if($table=="ad_ugmembers")
		{
			return false;
		}
		if($table=="Designer Level 2")
		{
			return false;
		}
		if($table=="Designer Level2 Filesheet")
		{
			return false;
		}
		if($table=="data_audit")
		{
			return false;
		}
		if($table=="Urgent Jobs")
		{
			return false;
		}
		if($table=="Deadline Missed")
		{
			return false;
		}
		if($table=="Need to Accept")
		{
			return false;
		}
		if($table=="Need Notify")
		{
			return false;
		}
		if($table=="Need Download")
		{
			return false;
		}
		if($table=="Need QC")
		{
			return false;
		}
		if($table=="Need Upload")
		{
			return false;
		}
		if($table=="Pending 14704")
		{
			return false;
		}
		if($table=="Daily Job Report (Notified)")
		{
			return false;
		}
		if($table=="14704 Need QC")
		{
			return false;
		}
		if($table=="14704 Need Upload")
		{
			return false;
		}
		if($table=="14704 Need Download")
		{
			return false;
		}
		if($table=="14704 Need Notify")
		{
			return false;
		}
		if($table=="14704 Need Accept")
		{
			return false;
		}
		if($table=="14704 Deadline Missed")
		{
			return false;
		}
		if($table=="14704 Urgent Jobs")
		{
			return false;
		}
		if($table=="File Reject")
		{
			return false;
		}
		if($table=="designer_report")
		{
			return false;
		}
		if($table=="Designer Report (All)")
		{
			return false;
		}
		if($table=="custompages")
		{
			return false;
		}
		if($table=="14704 Daily Report Full")
		{
			return false;
		}
		if($table=="rejected_jobfile")
		{
			return false;
		}
		if($table=="type_of_errors")
		{
			return false;
		}
		if($table=="14704 Designer Report")
		{
			return false;
		}
		if($table=="Team Report")
		{
			return false;
		}
		if($table=="status")
		{
			return false;
		}
		if($table=="designation")
		{
			return false;
		}
		if($table=="Correction Files")
		{
			return false;
		}
		if($table=="Client Instruction")
		{
			return false;
		}
		if($table=="14704 Monthly Report Full")
		{
			return false;
		}
		if($table=="14704 Daily Report Designers")
		{
			return false;
		}
		if($table=="14704 Monthly Report Designers")
		{
			return false;
		}
		if($table=="14704 Daily Report  Team")
		{
			return false;
		}
		if($table=="Delected Jobs")
		{
			return false;
		}
		if($table=="14704 Monthly Report Team")
		{
			return false;
		}
		if($table=="Daily Report Designers")
		{
			return false;
		}
		if($table=="Monthly Report Designers")
		{
			return false;
		}
		if($table=="Daily Report Team")
		{
			return false;
		}
		if($table=="Monthly Report Team")
		{
			return false;
		}
		if($table=="Daily Report Full")
		{
			return false;
		}
		if($table=="Monthly Report Full")
		{
			return false;
		}
		if($table=="Capacity - Night Shift")
		{
			return false;
		}
		if($table=="Capacity - Morning Shift")
		{
			return false;
		}
		if($table=="Capacity - Evening Shift")
		{
			return false;
		}
		if($table=="Pending 18442")
		{
			return false;
		}
		if($table=="18442 Deadline Missed")
		{
			return false;
		}
		if($table=="18442 Urgent Jobs")
		{
			return false;
		}
		if($table=="18442 Need Notify")
		{
			return false;
		}
		if($table=="18442 Need Upload")
		{
			return false;
		}
		if($table=="18442 Need QC")
		{
			return false;
		}
		if($table=="18442 Need Download")
		{
			return false;
		}
		if($table=="18442 Need Accept")
		{
			return false;
		}
		if($table=="Monthly PDF Avrage")
		{
			return false;
		}
		if($table=="Daily Report Designer PDF")
		{
			return false;
		}
		if($table=="Monthly Job Report (Accepted)")
		{
			return false;
		}
		if($table=="Monthly Report Designer PDF")
		{
			return false;
		}
		if($table=="Monthly Job Report (Notified)")
		{
			return false;
		}
		if($table=="14704 Week Report Team")
		{
			return false;
		}
		if($table=="14704 Monthly Designers Avrage")
		{
			return false;
		}
		if($table=="clients")
		{
			return false;
		}
		if($table=="admin_rights")
		{
			return false;
		}
		if($table=="admin_admembers")
		{
			return false;
		}
		if($table=="Designer files report")
		{
			return false;
		}
		if($table=="PDF Done - Evening Shift")
		{
			return false;
		}
		if($table=="PDF Done - Morning Shift")
		{
			return false;
		}
		if($table=="PDF Done - Night Shift")
		{
			return false;
		}
		if($table=="PDF Done - Today")
		{
			return false;
		}
		if($table=="Files Need to Work")
		{
			return false;
		}
		if($table=="Weekly Report Designers")
		{
			return false;
		}
		if($table=="Designers Work Profile")
		{
			return false;
		}
		if($table=="Designers Performance")
		{
			return false;
		}
		if($table=="Designers Performance Monthly")
		{
			return false;
		}
		if($table=="Display")
		{
			return false;
		}
		if($table=="Daily QC")
		{
			return false;
		}
		if($table=="Display Files Now Working")
		{
			return false;
		}
		if($table=="Display Files Need to Work QC")
		{
			return false;
		}
		if($table=="Display Files Done Today")
		{
			return false;
		}
		if($table=="Daily Report 33392")
		{
			return false;
		}
		if($table=="generator_rex")
		{
			return false;
		}
		if($table=="Display generator_top_images")
		{
			return false;
		}
		if($table=="Display_top_team_performance")
		{
			return false;
		}
		if($table=="Display_top_designer_performance")
		{
			return false;
		}
		if($table=="Daily PDF Avrage")
		{
			return false;
		}
		if($table=="Weekly PDF Avrage")
		{
			return false;
		}
		if($table=="pdf_report")
		{
			return false;
		}
		if($table=="Display Rejected today")
		{
			return false;
		}
		if($table=="Display QC Done Today")
		{
			return false;
		}
		if($table=="Display Files Notifyed Today")
		{
			return false;
		}
		if($table=="mail_messages")
		{
			return false;
		}
		if($table=="Emailer")
		{
			return false;
		}
		if($table=="Display Files Need to Download")
		{
			return false;
		}
		if($table=="Display Files Need to Distribute")
		{
			return false;
		}
		if($table=="Display ETA")
		{
			return false;
		}
		if($table=="Display_top_designer_Files")
		{
			return false;
		}
		if($table=="Display Files Need to Prosess")
		{
			return false;
		}
		if($table=="Daily Accepted Riajul")
		{
			return false;
		}
		if($table=="attendance_sheet")
		{
			return false;
		}
		if($table=="employee_present")
		{
			return false;
		}
		if($table=="ShiftType")
		{
			return false;
		}
		if($table=="UserShift")
		{
			return false;
		}
		if($table=="user1")
		{
			return false;
		}
		if($table=="Daily Designers and QC")
		{
			return false;
		}
		if($table=="work_type")
		{
			return false;
		}
		if($table=="rejected_job")
		{
			return false;
		}
		if($table=="Download Reject Job")
		{
			return false;
		}
		if($table=="rejected_jobfile2")
		{
			return false;
		}
		if($table=="File Distribution Rejected")
		{
			return false;
		}
		if($table=="Designer Level 2 for Correction")
		{
			return false;
		}
		if($table=="Designer Level2 Filesheet for Correction")
		{
			return false;
		}
		if($table=="QC Worksheet for Correction")
		{
			return false;
		}
		if($table=="QC Filesheet for Correction")
		{
			return false;
		}
		if($table=="External Rejection")
		{
			return false;
		}
		if($table=="files_menu_count")
		{
			return false;
		}
		if($table=="Display_Designer_Need")
		{
			return false;
		}
		if($table=="Internal Rejection")
		{
			return false;
		}
		if($table=="Daily Users Work")
		{
			return false;
		}
		if($table=="not for use")
		{
			return false;
		}
		if($table=="jobfile_type")
		{
			return false;
		}
		if($table=="users_work_report")
		{
			return false;
		}
		if($table=="Daily Users Work Summery")
		{
			return false;
		}
		if($table=="Daily PDF Work Summery")
		{
			return false;
		}
		if($table=="Backup Notified Jobs")
		{
			return false;
		}
		if($table=="Daily Users Work Summery QC")
		{
			return false;
		}
	}
	
	protected function insert($datetime, $ip, $user, $table, $action, $description)
	{
		$sql = "INSERT INTO " .$this->connection->addTableWrappers( $this->logTableName ).
			" (" .$this->connection->addFieldWrappers("datetime").
			"," .$this->connection->addFieldWrappers("ip").
			"," .$this->connection->addFieldWrappers("user").
			"," .$this->connection->addFieldWrappers("table"). 
			"," .$this->connection->addFieldWrappers("action").
			"," .$this->connection->addFieldWrappers("description").
			") VALUES (" .$this->connection->addDateQuotes($datetime).
			"," .$this->connection->prepareString($ip). 
			"," .$this->connection->prepareString($user).
			"," .$this->connection->prepareString($table).
			"," .$this->connection->prepareString($action). 
			"," .$this->connection->prepareString($description).
			")";
		
		return $this->connection->exec( $sql );
	}
}

class AuditTrailFile
{
	var $logfile="audit.log";
	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $params;
	var $maxFieldLength = 300;
	
	function AuditTrailFile()
	{
		$userid="";
		if(@$_SESSION["UserID"])
			$userid=$_SESSION["UserID"];
		$this->params=array($_SERVER["REMOTE_ADDR"],$userid);
	}
	
    function LogLogin($pUsername)
    {
				global $globalEvents;
		$retval=true;
		$table="user";
		$this->params[1]=$pUsername;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strLogin."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }
	
    function LogLoginFailed($pUsername)
    {
				global $globalEvents;
		$retval=true;
		$table="user";
		$this->params[1]=$pUsername;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strFailLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strFailLogin."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }
	
    function LogLogout()
    {
		global $globalEvents;
		if($_SESSION["UserID"]!="")
		{
			$retval=true;
			$table="user";
			$arr=array();
			if($globalEvents->exists("OnAuditLog"))
				$retval=$globalEvents->OnAuditLog($this->strLogout, $this->params, $table, $arr, $arr, $arr);
			if($retval)
			{
				$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strLogout."\r\n";
				$this->writeToLogFile( $str );
			}
			return $retval;
		}
    }
	
    function LogChPassword()
    {
		global $globalEvents;
		$retval=true;
		$table="user";
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strChPass, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strChPass."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }
	
    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strAdd.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$v="";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>"."\r\n";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$val);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$str_add.=$str.chr(9).$idx.chr(9).chr(9).$v."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";
			
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }
	
    function LogEdit($str_table,$newvalues,$oldvalues,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strEdit.chr(9).$key;
			$putsValue=true;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue)
					{
						$v1="";
						if(IsBinaryType($type))
							$v1="<binary value>";
						else
						{
							$v1=str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							if(strlen($v1)>$this->maxFieldLength)
								$v1=runner_substr($v1,0,$this->maxFieldLength);
						}
						
						$v2="";
						if(IsBinaryType($type))
							$v2="<binary value>";
						else
						{
							$v2=str_replace(array("\r\n","\n","\t")," ",$newvalue);
							if(strlen($v2)>$this->maxFieldLength)
								$v2=runner_substr($v2,0,$this->maxFieldLength);
						}
						$str_add.=$str.chr(9).$idx.chr(9).$v1.chr(9).$v2."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }
	
    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strDelete.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					$v="";
					if(IsBinaryType($pSet->getFieldType($idx)))
						$v="<binary value>";
					else
					{
						$v=str_replace(array("\r\n","\n","\t")," ",$val);
						if(strlen($v)>$this->maxFieldLength)
							$v=runner_substr($v,0,$this->maxFieldLength);
					}
					$str_add.=$str.chr(9).$idx.chr(9).$v."\r\n";
				}
			}
			else
				$str_add=$str."\r\n";
				
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }
	
	function writeToLogFile( $str )
	{
		$p=strrpos($this->logfile,".");
		$logfileName=runner_substr($this->logfile,0,$p);
		$logfileExt=runner_substr($this->logfile,$p+1, strlen($this->logfile)-1);
		$tn=$logfileName."_".format_datetime_custom(db2time(now()),"yyyyMMdd").".".$logfileExt;
		
		$fullname = getabspath($tn);
		$fsize = 0;
		if (file_exists($fullname)){
			$fsize = filesize($fullname);
		}
		$str_to_append = "";
		if( !$fsize )
		{
			$str_to_append = $this->columnDate.chr(9).$this->columnTime.chr(9).$this->columnIP.chr(9).$this->columnUser.chr(9).$this->columnTable.chr(9).$this->columnAction.chr(9).$this->columnKey.chr(9).$this->columnField.chr(9).$this->columnOldValue.chr(9).$this->columnNewValue."\r\n";
		}
		$str_to_append .= $str;
		append_to_file( $fullname, $str_to_append );
		
	}
	
	function LogAddEvent($message,$description="",$str_table="")
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$params[0].chr(9).$params[1].chr(9).$table.chr(9).$message.chr(9).$description."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }
    
    function LoginAccess()
	{
		return false;
	}
	
	function LoginSuccessful()
    {
		return true;
    }
	
    function LoginUnsuccessful($pUsername)
    {	
		return true;
	}
	
	function logValueEnable($table)
	{
		if($table=="department")
		{
			return false;
		}
		if($table=="group")
		{
			return false;
		}
		if($table=="job")
		{
			return false;
		}
		if($table=="jobfile")
		{
			return false;
		}
		if($table=="jobstatus")
		{
			return false;
		}
		if($table=="notifyoption")
		{
			return false;
		}
		if($table=="subdivision")
		{
			return false;
		}
		if($table=="user")
		{
			return false;
		}
		if($table=="Dashboard")
		{
			return false;
		}
		if($table=="File Distribution")
		{
			return false;
		}
		if($table=="Download Job")
		{
			return false;
		}
		if($table=="Pending Jobs")
		{
			return false;
		}
		if($table=="pdf")
		{
			return false;
		}
		if($table=="project")
		{
			return false;
		}
		if($table=="Designer Worksheet")
		{
			return false;
		}
		if($table=="Designer Filesheet")
		{
			return false;
		}
		if($table=="team")
		{
			return false;
		}
		if($table=="QC Worksheet")
		{
			return false;
		}
		if($table=="QC Filesheet")
		{
			return false;
		}
		if($table=="All Jobs")
		{
			return false;
		}
		if($table=="Daily Job Report (Accepted)")
		{
			return false;
		}
		if($table=="Users")
		{
			return false;
		}
		if($table=="ad_uggroups")
		{
			return false;
		}
		if($table=="ad_ugmembers")
		{
			return false;
		}
		if($table=="Designer Level 2")
		{
			return false;
		}
		if($table=="Designer Level2 Filesheet")
		{
			return false;
		}
		if($table=="data_audit")
		{
			return false;
		}
		if($table=="Urgent Jobs")
		{
			return false;
		}
		if($table=="Deadline Missed")
		{
			return false;
		}
		if($table=="Need to Accept")
		{
			return false;
		}
		if($table=="Need Notify")
		{
			return false;
		}
		if($table=="Need Download")
		{
			return false;
		}
		if($table=="Need QC")
		{
			return false;
		}
		if($table=="Need Upload")
		{
			return false;
		}
		if($table=="Pending 14704")
		{
			return false;
		}
		if($table=="Daily Job Report (Notified)")
		{
			return false;
		}
		if($table=="14704 Need QC")
		{
			return false;
		}
		if($table=="14704 Need Upload")
		{
			return false;
		}
		if($table=="14704 Need Download")
		{
			return false;
		}
		if($table=="14704 Need Notify")
		{
			return false;
		}
		if($table=="14704 Need Accept")
		{
			return false;
		}
		if($table=="14704 Deadline Missed")
		{
			return false;
		}
		if($table=="14704 Urgent Jobs")
		{
			return false;
		}
		if($table=="File Reject")
		{
			return false;
		}
		if($table=="designer_report")
		{
			return false;
		}
		if($table=="Designer Report (All)")
		{
			return false;
		}
		if($table=="custompages")
		{
			return false;
		}
		if($table=="14704 Daily Report Full")
		{
			return false;
		}
		if($table=="rejected_jobfile")
		{
			return false;
		}
		if($table=="type_of_errors")
		{
			return false;
		}
		if($table=="14704 Designer Report")
		{
			return false;
		}
		if($table=="Team Report")
		{
			return false;
		}
		if($table=="status")
		{
			return false;
		}
		if($table=="designation")
		{
			return false;
		}
		if($table=="Correction Files")
		{
			return false;
		}
		if($table=="Client Instruction")
		{
			return false;
		}
		if($table=="14704 Monthly Report Full")
		{
			return false;
		}
		if($table=="14704 Daily Report Designers")
		{
			return false;
		}
		if($table=="14704 Monthly Report Designers")
		{
			return false;
		}
		if($table=="14704 Daily Report  Team")
		{
			return false;
		}
		if($table=="Delected Jobs")
		{
			return false;
		}
		if($table=="14704 Monthly Report Team")
		{
			return false;
		}
		if($table=="Daily Report Designers")
		{
			return false;
		}
		if($table=="Monthly Report Designers")
		{
			return false;
		}
		if($table=="Daily Report Team")
		{
			return false;
		}
		if($table=="Monthly Report Team")
		{
			return false;
		}
		if($table=="Daily Report Full")
		{
			return false;
		}
		if($table=="Monthly Report Full")
		{
			return false;
		}
		if($table=="Capacity - Night Shift")
		{
			return false;
		}
		if($table=="Capacity - Morning Shift")
		{
			return false;
		}
		if($table=="Capacity - Evening Shift")
		{
			return false;
		}
		if($table=="Pending 18442")
		{
			return false;
		}
		if($table=="18442 Deadline Missed")
		{
			return false;
		}
		if($table=="18442 Urgent Jobs")
		{
			return false;
		}
		if($table=="18442 Need Notify")
		{
			return false;
		}
		if($table=="18442 Need Upload")
		{
			return false;
		}
		if($table=="18442 Need QC")
		{
			return false;
		}
		if($table=="18442 Need Download")
		{
			return false;
		}
		if($table=="18442 Need Accept")
		{
			return false;
		}
		if($table=="Monthly PDF Avrage")
		{
			return false;
		}
		if($table=="Daily Report Designer PDF")
		{
			return false;
		}
		if($table=="Monthly Job Report (Accepted)")
		{
			return false;
		}
		if($table=="Monthly Report Designer PDF")
		{
			return false;
		}
		if($table=="Monthly Job Report (Notified)")
		{
			return false;
		}
		if($table=="14704 Week Report Team")
		{
			return false;
		}
		if($table=="14704 Monthly Designers Avrage")
		{
			return false;
		}
		if($table=="clients")
		{
			return false;
		}
		if($table=="admin_rights")
		{
			return false;
		}
		if($table=="admin_admembers")
		{
			return false;
		}
		if($table=="Designer files report")
		{
			return false;
		}
		if($table=="PDF Done - Evening Shift")
		{
			return false;
		}
		if($table=="PDF Done - Morning Shift")
		{
			return false;
		}
		if($table=="PDF Done - Night Shift")
		{
			return false;
		}
		if($table=="PDF Done - Today")
		{
			return false;
		}
		if($table=="Files Need to Work")
		{
			return false;
		}
		if($table=="Weekly Report Designers")
		{
			return false;
		}
		if($table=="Designers Work Profile")
		{
			return false;
		}
		if($table=="Designers Performance")
		{
			return false;
		}
		if($table=="Designers Performance Monthly")
		{
			return false;
		}
		if($table=="Display")
		{
			return false;
		}
		if($table=="Daily QC")
		{
			return false;
		}
		if($table=="Display Files Now Working")
		{
			return false;
		}
		if($table=="Display Files Need to Work QC")
		{
			return false;
		}
		if($table=="Display Files Done Today")
		{
			return false;
		}
		if($table=="Daily Report 33392")
		{
			return false;
		}
		if($table=="generator_rex")
		{
			return false;
		}
		if($table=="Display generator_top_images")
		{
			return false;
		}
		if($table=="Display_top_team_performance")
		{
			return false;
		}
		if($table=="Display_top_designer_performance")
		{
			return false;
		}
		if($table=="Daily PDF Avrage")
		{
			return false;
		}
		if($table=="Weekly PDF Avrage")
		{
			return false;
		}
		if($table=="pdf_report")
		{
			return false;
		}
		if($table=="Display Rejected today")
		{
			return false;
		}
		if($table=="Display QC Done Today")
		{
			return false;
		}
		if($table=="Display Files Notifyed Today")
		{
			return false;
		}
		if($table=="mail_messages")
		{
			return false;
		}
		if($table=="Emailer")
		{
			return false;
		}
		if($table=="Display Files Need to Download")
		{
			return false;
		}
		if($table=="Display Files Need to Distribute")
		{
			return false;
		}
		if($table=="Display ETA")
		{
			return false;
		}
		if($table=="Display_top_designer_Files")
		{
			return false;
		}
		if($table=="Display Files Need to Prosess")
		{
			return false;
		}
		if($table=="Daily Accepted Riajul")
		{
			return false;
		}
		if($table=="attendance_sheet")
		{
			return false;
		}
		if($table=="employee_present")
		{
			return false;
		}
		if($table=="ShiftType")
		{
			return false;
		}
		if($table=="UserShift")
		{
			return false;
		}
		if($table=="user1")
		{
			return false;
		}
		if($table=="Daily Designers and QC")
		{
			return false;
		}
		if($table=="work_type")
		{
			return false;
		}
		if($table=="rejected_job")
		{
			return false;
		}
		if($table=="Download Reject Job")
		{
			return false;
		}
		if($table=="rejected_jobfile2")
		{
			return false;
		}
		if($table=="File Distribution Rejected")
		{
			return false;
		}
		if($table=="Designer Level 2 for Correction")
		{
			return false;
		}
		if($table=="Designer Level2 Filesheet for Correction")
		{
			return false;
		}
		if($table=="QC Worksheet for Correction")
		{
			return false;
		}
		if($table=="QC Filesheet for Correction")
		{
			return false;
		}
		if($table=="External Rejection")
		{
			return false;
		}
		if($table=="files_menu_count")
		{
			return false;
		}
		if($table=="Display_Designer_Need")
		{
			return false;
		}
		if($table=="Internal Rejection")
		{
			return false;
		}
		if($table=="Daily Users Work")
		{
			return false;
		}
		if($table=="not for use")
		{
			return false;
		}
		if($table=="jobfile_type")
		{
			return false;
		}
		if($table=="users_work_report")
		{
			return false;
		}
		if($table=="Daily Users Work Summery")
		{
			return false;
		}
		if($table=="Daily PDF Work Summery")
		{
			return false;
		}
		if($table=="Backup Notified Jobs")
		{
			return false;
		}
		if($table=="Daily Users Work Summery QC")
		{
			return false;
		}
	}
}
?>