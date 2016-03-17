<?php
class ConnectionManager
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();

	
	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */	
	protected $_tablesConnectionIds;
	
	
	/**
	 * @constructor
	 */
	function ConnectionManager()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}
	
	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */	
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}
	
	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */	
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}
	
	/**
	 * Get connection object by the connection id 
	 * @param String connId
	 * @return Connection
	 */	
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) )
			$this->cache[ $connId ] = $this->getConnection( $connId );

		return $this->cache[ $connId ];
	}
	
	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "visionwebapp_at_192_168_2_1" );
	}

	/**
	 * Get the users table db connection 
	 * @return Connection
	 */	
	public function getForLogin()
	{
		return $this->byId( "visionwebapp_at_192_168_2_1" );
	}
	
	/**
	 * Get the log table db connection 
	 * @return Connection
	 */	
	public function getForAudit()
	{
		return $this->getDefault();
	}
	
	/**
	 * Get the locking table db connection 
	 * @return Connection
	 */		
	public function getForLocking()
	{
		return $this->getDefault();
	}	
	
	/**
	 * Get the 'ug_groups' table db connection 
	 * @return Connection
	 */	
	public function getForUserGroups()
	{
		return $this->byId( "visionwebapp_at_192_168_2_1" );
	}		

	/**
	 * Get the saved searches table db connection 
	 * @return Connection
	 */	
	public function getForSavedSearches()
	{
		return $this->getDefault();
	}

	/**
	 * Get the webreports tables db connection 
	 * @return Connection
	 */		
	public function getForWebReports()
	{
		return $this->getDefault();
	}
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		include_once getabspath("connections/Connection.php");
		
		$data = $this->_connectionsData[ $connId ];	
		switch( $data["connStringType"] )
		{
			case "mysql":
				if( useMySQLiLib() )
				{
					include_once getabspath("connections/MySQLiConnection.php");
					return new MySQLiConnection( $data );
				}
				
				include_once getabspath("connections/MySQLConnection.php");	
				return new MySQLConnection( $data );	

			case "mssql":
			case "compact":
				if( useMSSQLWinConnect() )
				{
					include_once getabspath("connections/MSSQLWinConnection.php");
					return new MSSQLWinConnection( $data );
				}
				if( isSqlsrvExtLoaded() )
				{
					include_once getabspath("connections/MSSQLSrvConnection.php");	
					return new MSSQLSrvConnection( $data );
				}
				
				include_once getabspath("connections/MSSQLUnixConnection.php");
				return new MSSQLUnixConnection( $data );			

			case "msaccess":
			case "odbc":
			case "odbcdsn":
			case "custom":
			case "file":
				if( stripos($data["ODBCString"], 'Provider=') !== false )
				{
					include_once getabspath("connections/ADOConnection.php");
					return new ADOConnection( $data );
				}
				
				include_once getabspath("connections/ODBCConnection.php");
				return new ODBCConnection( $data );
			
			case "oracle":
				include_once getabspath("connections/OracleConnection.php");
				return new OracleConnection( $data );

			case "postgre":
				include_once getabspath("connections/PostgreConnection.php");
				return new PostgreConnection( $data );

			case "db2":
				include_once getabspath("connections/DB2Connection.php");
				return new DB2Connection( $data );

			case "informix":
				include_once getabspath("connections/InformixConnection.php");
				return new InformixConnection( $data );

			case "sqlite":
				include_once getabspath("connections/SQLite3Connection.php");
				return new SQLite3Connection( $data );
		}
	}
	
	/**
	 * Set the data representing the project's 
	 * db connection properties
	 */	 
	protected function _setConnectionsData()
	{
		// content of this function can be modified on demo account
		// variable names $data and $connectionsData are important

		$connectionsData = array();
		
		$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "visionwebapp_at_192_168_2_1";
		$data["connName"] = "visionwebapp at 192.168.3.1";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;192.168.3.1;alamin;Alex3d;;visionwebapp;;1"; //currently unused
		
		$this->_connectionsIdByName["visionwebapp at 192.168.3.1"] = "visionwebapp_at_192_168_2_1";
		
		$data["connInfo"] = array();
		$data["ODBCUID"] = "alamin";
		$data["ODBCPWD"] = "Alex3d";
		$data["leftWrap"] = "`";
		$data["rightWrap"] = "`";
		
		$data["DBPath"] = "db"; //currently unused	
		$data["useServerMapPath"] = 1; //currently unused
		
		$data["connInfo"][0] = "192.168.3.1";
		$data["connInfo"][1] = "alamin";
		$data["connInfo"][2] = "Alex3d";
		$data["connInfo"][3] = "";
		$data["connInfo"][4] = "visionwebapp";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = "1"; //currently unused
		$data["ODBCString"] = "DRIVER={MySQL ODBC 5.3 Unicode Driver};Server=192.168.3.1;Uid=alamin;Pwd=Alex3d;Database=visionwebapp;OPTION=3";
		$connectionsData["visionwebapp_at_192_168_2_1"] = $data;
		$this->_connectionsData = $connectionsData;
	}
	
	/**
	 * Set the data representing the correspondence between 
	 * the project's table names and db connections
	 */	 
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["department"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["group"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["job"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["jobfile"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["jobstatus"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["notifyoption"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["subdivision"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["user"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Dashboard"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["File Distribution"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Download Job"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Pending Jobs"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["pdf"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["project"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Designer Worksheet"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Designer Filesheet"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["team"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["QC Worksheet"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["QC Filesheet"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["All Jobs"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Daily Job Report (Accepted)"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Users"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["ad_uggroups"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["ad_ugmembers"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Designer Level 2"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Designer Level2 Filesheet"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["data_audit"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Urgent Jobs"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Deadline Missed"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Need to Accept"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Need Notify"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Need Download"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Need QC"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Need Upload"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Pending 14704"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Daily Job Report (Notified)"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["14704 Need QC"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["14704 Need Upload"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["14704 Need Download"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["14704 Need Notify"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["14704 Need Accept"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["14704 Deadline Missed"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["14704 Urgent Jobs"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["File Reject"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["designer_report"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Designer Report (All)"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["custompages"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["14704 Daily Report Full"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["rejected_jobfile"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["type_of_errors"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["14704 Designer Report"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Team Report"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["status"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["designation"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Correction Files"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Client Instruction"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["14704 Monthly Report Full"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["14704 Daily Report Designers"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["14704 Monthly Report Designers"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["14704 Daily Report  Team"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Delected Jobs"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["14704 Monthly Report Team"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Daily Report Designers"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Monthly Report Designers"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Daily Report Team"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Monthly Report Team"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Daily Report Full"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Monthly Report Full"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Capacity - Night Shift"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Capacity - Morning Shift"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Capacity - Evening Shift"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Pending 18442"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["18442 Deadline Missed"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["18442 Urgent Jobs"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["18442 Need Notify"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["18442 Need Upload"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["18442 Need QC"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["18442 Need Download"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["18442 Need Accept"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Monthly PDF Avrage"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Daily Report Designer PDF"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Monthly Job Report (Accepted)"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Monthly Report Designer PDF"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Monthly Job Report (Notified)"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["14704 Week Report Team"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["14704 Monthly Designers Avrage"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["clients"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["admin_rights"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["admin_admembers"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Designer files report"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["PDF Done - Evening Shift"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["PDF Done - Morning Shift"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["PDF Done - Night Shift"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["PDF Done - Today"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Files Need to Work"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Weekly Report Designers"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Designers Work Profile"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Designers Performance"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Designers Performance Monthly"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Daily QC"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Display Files Now Working"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Display Files Need to Work QC"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Display Files Done Today"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Daily Report 33392"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["generator_rex"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Display generator_top_images"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Display_top_team_performance"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Display_top_designer_performance"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Daily PDF Avrage"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Weekly PDF Avrage"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["pdf_report"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Display Rejected today"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Display QC Done Today"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Display Files Notifyed Today"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["mail_messages"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Display Files Need to Download"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Display Files Need to Distribute"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Display ETA"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Display_top_designer_Files"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Display Files Need to Prosess"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Daily Accepted Riajul"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["attendance_sheet"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["employee_present"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["ShiftType"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["UserShift"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["user1"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Daily Designers and QC"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["work_type"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["rejected_job"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Download Reject Job"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["rejected_jobfile2"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["File Distribution Rejected"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Designer Level 2 for Correction"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Designer Level2 Filesheet for Correction"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["QC Worksheet for Correction"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["QC Filesheet for Correction"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["External Rejection"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["files_menu_count"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Display_Designer_Need"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Internal Rejection"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Daily Users Work"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["not for use"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["jobfile_type"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["users_work_report"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Daily Users Work Summery"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Daily PDF Work Summery"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Backup Notified Jobs"] = "visionwebapp_at_192_168_2_1";
		$connectionsIds["Daily Users Work Summery QC"] = "visionwebapp_at_192_168_2_1";
		$this->_tablesConnectionIds = $connectionsIds;
	}
	
	/**
	 * Check if It's possible to add to one table's sql query 
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];
		
		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;
			
		return true;	
	}
	
	/**
	 * Close db connections
	 * @destructor
	 */
	function __desctruct() 
	{
		foreach( $this->cache as $connection )
		{
			$connection->close();
		}
	}
}
?>