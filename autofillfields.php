<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 


$mainTable = postvalue('mainTable');
$pageType = postvalue('pageType');

if (!checkTableName($mainTable))
	exit(0);
require_once("include/".$mainTable."_variables.php");

$gSettings = new ProjectSettings($strTableName, $pageType);

$mainField = postvalue('mainField');
$linkFieldName = postvalue('linkField');

if( $strTableName != "" )
{
	if(!isLogged())  
		return;	
	
	if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")) 
		return;
}
else 
{
	$checkResult = true;
	if($checkResult)
	{
		if(!isLogged()) 
			return;
			
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
			return;
	}
}
$autoCompleteFields = array();

if($strTableName == "Pending Jobs" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Pending Jobs" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Designer Worksheet" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "QC Worksheet" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "All Jobs" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Designer Level 2" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Urgent Jobs" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Urgent Jobs" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Deadline Missed" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Deadline Missed" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Need to Accept" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Need to Accept" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Need Notify" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Need Notify" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Need Download" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Need Download" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Need QC" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Need QC" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Need Upload" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Need Upload" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Pending 14704" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Pending 14704" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "14704 Need QC" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "14704 Need QC" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "14704 Need Upload" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "14704 Need Upload" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "14704 Need Download" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "14704 Need Download" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "14704 Need Notify" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "14704 Need Notify" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "14704 Need Accept" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "14704 Need Accept" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "14704 Deadline Missed" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "14704 Deadline Missed" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "14704 Urgent Jobs" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "14704 Urgent Jobs" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "rejected_jobfile" && $mainField == "jobfile_id")
{
	$autoCompleteFields[] = array('masterF'=>"job_id", 'lookupF'=>"job_id");
	$autoCompleteFields[] = array('masterF'=>"pdf_id", 'lookupF'=>"project_id");
	$autoCompleteFields[] = array('masterF'=>"original_designer", 'lookupF'=>"designer_id");
	$autoCompleteFields[] = array('masterF'=>"original_designer2", 'lookupF'=>"designer2_id");
	$autoCompleteFields[] = array('masterF'=>"original_qc", 'lookupF'=>"qc_id");
	$lookupTable = "jobfile";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "rejected_jobfile" && $mainField == "original_designer")
{
	$autoCompleteFields[] = array('masterF'=>"jobfile_note", 'lookupF'=>"username");
	$lookupTable = "user";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "rejected_jobfile" && $mainField == "cr_designer_id")
{
	$autoCompleteFields[] = array('masterF'=>"username", 'lookupF'=>"username");
	$lookupTable = "user";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Correction Files" && $mainField == "jobfile_id")
{
	$autoCompleteFields[] = array('masterF'=>"job_id", 'lookupF'=>"job_id");
	$autoCompleteFields[] = array('masterF'=>"pdf_id", 'lookupF'=>"project_id");
	$autoCompleteFields[] = array('masterF'=>"jobfile_note", 'lookupF'=>"jobfile_note");
	$autoCompleteFields[] = array('masterF'=>"original_designer", 'lookupF'=>"designer_id");
	$autoCompleteFields[] = array('masterF'=>"original_designer2", 'lookupF'=>"designer2_id");
	$autoCompleteFields[] = array('masterF'=>"original_qc", 'lookupF'=>"qc_id");
	$lookupTable = "jobfile";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Pending 18442" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Pending 18442" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "18442 Deadline Missed" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "18442 Deadline Missed" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "18442 Urgent Jobs" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "18442 Urgent Jobs" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "18442 Need Notify" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "18442 Need Notify" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "18442 Need Upload" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "18442 Need Upload" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "18442 Need QC" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "18442 Need QC" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "18442 Need Download" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "18442 Need Download" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "18442 Need Accept" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "18442 Need Accept" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "UserShift" && $mainField == "User_ID")
{
	$autoCompleteFields[] = array('masterF'=>"Shift_Type_Id", 'lookupF'=>"ShiftTypeId");
	$lookupTable = "user1";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "rejected_job" && $mainField == "previous_job_id")
{
	$autoCompleteFields[] = array('masterF'=>"web_note", 'lookupF'=>"web_note");
	$autoCompleteFields[] = array('masterF'=>"pdf_id", 'lookupF'=>"pdf_id");
	$lookupTable = "job";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "rejected_job" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_name", 'lookupF'=>"pdf_name");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "Designer Level 2 for Correction" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "QC Worksheet for Correction" && $mainField == "pdf_id")
{
	$autoCompleteFields[] = array('masterF'=>"pdf_location", 'lookupF'=>"pdf_location");
	$lookupTable = "pdf";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}

$nLookupType = $gSettings->getLookupType($mainField);
$cipherer = new RunnerCipherer($nLookupType == LT_QUERY ? $lookupTable : $strTableName);
$linkFieldVal = postvalue('linkFieldVal');
$linkFieldVal = $cipherer->MakeDBValue($nLookupType == LT_QUERY ? $linkFieldName : $mainField, $linkFieldVal, "", true);
$strLookupWhere = GetLWWhere($mainField, $pageType, $strTableName);

if($nLookupType == LT_QUERY)
{
	$lookupSettings = new ProjectSettings($lookupTable, $pageType);
	$lookupQueryObj = $lookupSettings->getSQLQuery();
	$lookupQueryObj->ReplaceFieldsWithDummies($lookupSettings->getBinaryFieldsIndices());
	$strWhere = whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), 
		RunnerPage::_getFieldSQLDecrypt( $linkFieldName, $lookupConnection, $lookupSettings, $cipherer ).'='.$linkFieldVal);
	$strWhere = whereAdd($strWhere, $strLookupWhere);
	$strSQL = $lookupQueryObj->toSql(whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), $strWhere));
}
else
{
	$strSQL = 'SELECT ';
	for($i=0; $i<count($autoCompleteFields); $i++)
	{
		$strSQL .= $lookupConnection->addFieldWrappers( $autoCompleteFields[$i]['lookupF'] ).', ';
	}
	$strSQL = substr($strSQL, 0, strlen($strSQL)-2);
	
	$strSQL .= " FROM ".$lookupConnection->addTableWrappers($lookupTable);
	$linkFieldName = $cipherer->GetLookupFieldName( $lookupConnection->addFieldWrappers($linkFieldName), $mainField );
	$strWhere = $linkFieldName.'='.$linkFieldVal;
	$strWhere = whereAdd($strWhere, $strLookupWhere);
	$strSQL .= " WHERE ".$strWhere;
}

$row = $lookupConnection->query( $strSQL )->fetchAssoc();
if($nLookupType == LT_QUERY)
	$row =  $cipherer->DecryptFetchedArray( $row );

$lookupConnection->close();	
	
if( !$row )
	$row = array($mainField=>'');
	
echo printJSON(array('success'=>true, 'data'=>$row));
exit();
?>