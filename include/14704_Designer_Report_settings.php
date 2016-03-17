<?php
require_once(getabspath("classes/cipherer.php"));




$tdata14704_Designer_Report = array();	
	$tdata14704_Designer_Report[".truncateText"] = true;
	$tdata14704_Designer_Report[".NumberOfChars"] = 40; 
	$tdata14704_Designer_Report[".ShortName"] = "14704_Designer_Report";
	$tdata14704_Designer_Report[".OwnerID"] = "";
	$tdata14704_Designer_Report[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabels14704_Designer_Report = array();
$fieldToolTips14704_Designer_Report = array();
$pageTitles14704_Designer_Report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabels14704_Designer_Report["English"] = array();
	$fieldToolTips14704_Designer_Report["English"] = array();
	$pageTitles14704_Designer_Report["English"] = array();
	$fieldLabels14704_Designer_Report["English"]["job_id"] = "Job Id";
	$fieldToolTips14704_Designer_Report["English"]["job_id"] = "";
	$fieldLabels14704_Designer_Report["English"]["filename"] = "Filename";
	$fieldToolTips14704_Designer_Report["English"]["filename"] = "";
	$fieldLabels14704_Designer_Report["English"]["designer2_id"] = "Designer2 Id";
	$fieldToolTips14704_Designer_Report["English"]["designer2_id"] = "";
	$fieldLabels14704_Designer_Report["English"]["end2_date"] = "End2 Date";
	$fieldToolTips14704_Designer_Report["English"]["end2_date"] = "";
	$fieldLabels14704_Designer_Report["English"]["project_id"] = "Project Id";
	$fieldToolTips14704_Designer_Report["English"]["project_id"] = "";
	$fieldLabels14704_Designer_Report["English"]["team"] = "Team";
	$fieldToolTips14704_Designer_Report["English"]["team"] = "";
	$fieldLabels14704_Designer_Report["English"]["pdf_estimated_average"] = "Pdf Estimated Average";
	$fieldToolTips14704_Designer_Report["English"]["pdf_estimated_average"] = "";
	$fieldLabels14704_Designer_Report["English"]["designer2_time"] = "Designer2 Time";
	$fieldToolTips14704_Designer_Report["English"]["designer2_time"] = "";
	$fieldLabels14704_Designer_Report["English"]["efficiency"] = "Efficiency";
	$fieldToolTips14704_Designer_Report["English"]["efficiency"] = "";
	if (count($fieldToolTips14704_Designer_Report["English"]))
		$tdata14704_Designer_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels14704_Designer_Report[""] = array();
	$fieldToolTips14704_Designer_Report[""] = array();
	$pageTitles14704_Designer_Report[""] = array();
	if (count($fieldToolTips14704_Designer_Report[""]))
		$tdata14704_Designer_Report[".isUseToolTips"] = true;
}
	
	
	$tdata14704_Designer_Report[".NCSearch"] = true;



$tdata14704_Designer_Report[".shortTableName"] = "14704_Designer_Report";
$tdata14704_Designer_Report[".nSecOptions"] = 0;
$tdata14704_Designer_Report[".recsPerRowList"] = 1;
$tdata14704_Designer_Report[".recsPerRowPrint"] = 1;
$tdata14704_Designer_Report[".mainTableOwnerID"] = "";
$tdata14704_Designer_Report[".moveNext"] = 1;
$tdata14704_Designer_Report[".entityType"] = 1;

$tdata14704_Designer_Report[".strOriginalTableName"] = "jobfile";




$tdata14704_Designer_Report[".showAddInPopup"] = false;

$tdata14704_Designer_Report[".showEditInPopup"] = false;

$tdata14704_Designer_Report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata14704_Designer_Report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata14704_Designer_Report[".fieldsForRegister"] = array();

if (!isMobile())
	$tdata14704_Designer_Report[".listAjax"] = true;
else 
	$tdata14704_Designer_Report[".listAjax"] = false;

	$tdata14704_Designer_Report[".audit"] = false;

	$tdata14704_Designer_Report[".locking"] = false;



$tdata14704_Designer_Report[".list"] = true;



$tdata14704_Designer_Report[".exportTo"] = true;

$tdata14704_Designer_Report[".printFriendly"] = true;


$tdata14704_Designer_Report[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdata14704_Designer_Report[".searchSaving"] = false;
//

$tdata14704_Designer_Report[".showSearchPanel"] = true;
		$tdata14704_Designer_Report[".flexibleSearch"] = true;		

if (isMobile())
	$tdata14704_Designer_Report[".isUseAjaxSuggest"] = false;
else 
	$tdata14704_Designer_Report[".isUseAjaxSuggest"] = true;

$tdata14704_Designer_Report[".rowHighlite"] = true;


																																																																																											
																																																						$tdata14704_Designer_Report[".isUsebuttonHandlers"] = true;

$tdata14704_Designer_Report[".addPageEvents"] = true;

// use timepicker for search panel
$tdata14704_Designer_Report[".isUseTimeForSearch"] = false;





$tdata14704_Designer_Report[".allSearchFields"] = array();
$tdata14704_Designer_Report[".filterFields"] = array();
$tdata14704_Designer_Report[".requiredSearchFields"] = array();

$tdata14704_Designer_Report[".allSearchFields"][] = "project_id";
	$tdata14704_Designer_Report[".allSearchFields"][] = "team";
	$tdata14704_Designer_Report[".allSearchFields"][] = "designer2_id";
	$tdata14704_Designer_Report[".allSearchFields"][] = "end2_date";
	$tdata14704_Designer_Report[".allSearchFields"][] = "job_id";
	$tdata14704_Designer_Report[".allSearchFields"][] = "filename";
	$tdata14704_Designer_Report[".allSearchFields"][] = "pdf_estimated_average";
	$tdata14704_Designer_Report[".allSearchFields"][] = "designer2_time";
	$tdata14704_Designer_Report[".allSearchFields"][] = "efficiency";
	

$tdata14704_Designer_Report[".googleLikeFields"] = array();
$tdata14704_Designer_Report[".googleLikeFields"][] = "job_id";
$tdata14704_Designer_Report[".googleLikeFields"][] = "filename";
$tdata14704_Designer_Report[".googleLikeFields"][] = "end2_date";
$tdata14704_Designer_Report[".googleLikeFields"][] = "designer2_id";
$tdata14704_Designer_Report[".googleLikeFields"][] = "project_id";
$tdata14704_Designer_Report[".googleLikeFields"][] = "team";
$tdata14704_Designer_Report[".googleLikeFields"][] = "pdf_estimated_average";
$tdata14704_Designer_Report[".googleLikeFields"][] = "designer2_time";
$tdata14704_Designer_Report[".googleLikeFields"][] = "efficiency";


$tdata14704_Designer_Report[".advSearchFields"] = array();
$tdata14704_Designer_Report[".advSearchFields"][] = "project_id";
$tdata14704_Designer_Report[".advSearchFields"][] = "team";
$tdata14704_Designer_Report[".advSearchFields"][] = "designer2_id";
$tdata14704_Designer_Report[".advSearchFields"][] = "end2_date";
$tdata14704_Designer_Report[".advSearchFields"][] = "job_id";
$tdata14704_Designer_Report[".advSearchFields"][] = "filename";
$tdata14704_Designer_Report[".advSearchFields"][] = "pdf_estimated_average";
$tdata14704_Designer_Report[".advSearchFields"][] = "designer2_time";
$tdata14704_Designer_Report[".advSearchFields"][] = "efficiency";

$tdata14704_Designer_Report[".tableType"] = "list";

$tdata14704_Designer_Report[".printerPageOrientation"] = 0;
$tdata14704_Designer_Report[".nPrinterPageScale"] = 100;

$tdata14704_Designer_Report[".nPrinterSplitRecords"] = 40;

$tdata14704_Designer_Report[".nPrinterPDFSplitRecords"] = 40;



$tdata14704_Designer_Report[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdata14704_Designer_Report[".pageSize"] = 24;

$tdata14704_Designer_Report[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY jobfile.end2_date DESC, `user`.team, jobfile.designer2_id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata14704_Designer_Report[".strOrderBy"] = $tstrOrderBy;

$tdata14704_Designer_Report[".orderindexes"] = array();
$tdata14704_Designer_Report[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "jobfile.end2_date");
$tdata14704_Designer_Report[".orderindexes"][] = array(6, (1 ? "ASC" : "DESC"), "`user`.team");
$tdata14704_Designer_Report[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "jobfile.designer2_id");

$tdata14704_Designer_Report[".sqlHead"] = "SELECT jobfile.job_id,  jobfile.filename,  jobfile.end2_date,  jobfile.designer2_id,  jobfile.project_id,  `user`.team,  pdf.pdf_estimated_average,  jobfile.designer2_time,  (pdf.pdf_estimated_average/jobfile.designer2_time)*100 AS efficiency";
$tdata14704_Designer_Report[".sqlFrom"] = "FROM jobfile  INNER JOIN `user` ON jobfile.designer2_id = `user`.user_id  INNER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$tdata14704_Designer_Report[".sqlWhereExpr"] = "(jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880) AND ((jobfile.filename not like '%retouch%') AND (jobfile.filename not like '%detail_2%'))";
$tdata14704_Designer_Report[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata14704_Designer_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata14704_Designer_Report[".arrGroupsPerPage"] = $arrGPP;

$tdata14704_Designer_Report[".highlightSearchResults"] = true;

$tableKeys14704_Designer_Report = array();
$tableKeys14704_Designer_Report[] = "job_id";
$tdata14704_Designer_Report[".Keys"] = $tableKeys14704_Designer_Report;

$tdata14704_Designer_Report[".listFields"] = array();
$tdata14704_Designer_Report[".listFields"][] = "team";
$tdata14704_Designer_Report[".listFields"][] = "designer2_id";
$tdata14704_Designer_Report[".listFields"][] = "end2_date";
$tdata14704_Designer_Report[".listFields"][] = "job_id";
$tdata14704_Designer_Report[".listFields"][] = "filename";
$tdata14704_Designer_Report[".listFields"][] = "pdf_estimated_average";
$tdata14704_Designer_Report[".listFields"][] = "designer2_time";
$tdata14704_Designer_Report[".listFields"][] = "efficiency";

$tdata14704_Designer_Report[".hideMobileList"] = array();


$tdata14704_Designer_Report[".viewFields"] = array();

$tdata14704_Designer_Report[".addFields"] = array();

$tdata14704_Designer_Report[".masterListFields"] = array();
$tdata14704_Designer_Report[".masterListFields"][] = "project_id";
$tdata14704_Designer_Report[".masterListFields"][] = "team";
$tdata14704_Designer_Report[".masterListFields"][] = "designer2_id";
$tdata14704_Designer_Report[".masterListFields"][] = "end2_date";
$tdata14704_Designer_Report[".masterListFields"][] = "job_id";
$tdata14704_Designer_Report[".masterListFields"][] = "filename";
$tdata14704_Designer_Report[".masterListFields"][] = "pdf_estimated_average";
$tdata14704_Designer_Report[".masterListFields"][] = "designer2_time";
$tdata14704_Designer_Report[".masterListFields"][] = "efficiency";

$tdata14704_Designer_Report[".inlineAddFields"] = array();

$tdata14704_Designer_Report[".editFields"] = array();

$tdata14704_Designer_Report[".inlineEditFields"] = array();

$tdata14704_Designer_Report[".exportFields"] = array();
$tdata14704_Designer_Report[".exportFields"][] = "project_id";
$tdata14704_Designer_Report[".exportFields"][] = "team";
$tdata14704_Designer_Report[".exportFields"][] = "designer2_id";
$tdata14704_Designer_Report[".exportFields"][] = "end2_date";
$tdata14704_Designer_Report[".exportFields"][] = "job_id";
$tdata14704_Designer_Report[".exportFields"][] = "filename";
$tdata14704_Designer_Report[".exportFields"][] = "pdf_estimated_average";
$tdata14704_Designer_Report[".exportFields"][] = "designer2_time";
$tdata14704_Designer_Report[".exportFields"][] = "efficiency";

$tdata14704_Designer_Report[".importFields"] = array();

$tdata14704_Designer_Report[".printFields"] = array();
$tdata14704_Designer_Report[".printFields"][] = "project_id";
$tdata14704_Designer_Report[".printFields"][] = "team";
$tdata14704_Designer_Report[".printFields"][] = "designer2_id";
$tdata14704_Designer_Report[".printFields"][] = "end2_date";
$tdata14704_Designer_Report[".printFields"][] = "job_id";
$tdata14704_Designer_Report[".printFields"][] = "filename";
$tdata14704_Designer_Report[".printFields"][] = "pdf_estimated_average";
$tdata14704_Designer_Report[".printFields"][] = "designer2_time";
$tdata14704_Designer_Report[".printFields"][] = "efficiency";

//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("14704_Designer_Report","job_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "job_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.job_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdata14704_Designer_Report["job_id"] = $fdata;
//	filename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "filename";
	$fdata["GoodName"] = "filename";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("14704_Designer_Report","filename"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "filename"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.filename";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["masterprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=256";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=256";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=256";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdata14704_Designer_Report["filename"] = $fdata;
//	end2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "end2_date";
	$fdata["GoodName"] = "end2_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("14704_Designer_Report","end2_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "end2_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.end2_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 10; 
	$edata["LastYearFactor"] = 100; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdata14704_Designer_Report["end2_date"] = $fdata;
//	designer2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "designer2_id";
	$fdata["GoodName"] = "designer2_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("14704_Designer_Report","designer2_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer2_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.designer2_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["masterprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdata14704_Designer_Report["designer2_id"] = $fdata;
//	project_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "project_id";
	$fdata["GoodName"] = "project_id";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("14704_Designer_Report","project_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "project_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.project_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "pdf";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "pdf_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "pdf_name";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdata14704_Designer_Report["project_id"] = $fdata;
//	team
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "team";
	$fdata["GoodName"] = "team";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("14704_Designer_Report","team"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "team"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.team";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "team";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "team_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "team_name";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdata14704_Designer_Report["team"] = $fdata;
//	pdf_estimated_average
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pdf_estimated_average";
	$fdata["GoodName"] = "pdf_estimated_average";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("14704_Designer_Report","pdf_estimated_average"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_estimated_average"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf.pdf_estimated_average";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);
	
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdata14704_Designer_Report["pdf_estimated_average"] = $fdata;
//	designer2_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "designer2_time";
	$fdata["GoodName"] = "designer2_time";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("14704_Designer_Report","designer2_time"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "designer2_time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.designer2_time";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);
	
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdata14704_Designer_Report["designer2_time"] = $fdata;
//	efficiency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "efficiency";
	$fdata["GoodName"] = "efficiency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("14704_Designer_Report","efficiency"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "efficiency"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(pdf.pdf_estimated_average/jobfile.designer2_time)*100";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdata14704_Designer_Report["efficiency"] = $fdata;

	
$tables_data["14704 Designer Report"]=&$tdata14704_Designer_Report;
$field_labels["14704_Designer_Report"] = &$fieldLabels14704_Designer_Report;
$fieldToolTips["14704 Designer Report"] = &$fieldToolTips14704_Designer_Report;
$page_titles["14704_Designer_Report"] = &$pageTitles14704_Designer_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["14704 Designer Report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["14704 Designer Report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_14704_Designer_Report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "jobfile.job_id,  jobfile.filename,  jobfile.end2_date,  jobfile.designer2_id,  jobfile.project_id,  `user`.team,  pdf.pdf_estimated_average,  jobfile.designer2_time,  (pdf.pdf_estimated_average/jobfile.designer2_time)*100 AS efficiency";
$proto0["m_strFrom"] = "FROM jobfile  INNER JOIN `user` ON jobfile.designer2_id = `user`.user_id  INNER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto0["m_strWhere"] = "(jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880) AND ((jobfile.filename not like '%retouch%') AND (jobfile.filename not like '%detail_2%'))";
$proto0["m_strOrderBy"] = "ORDER BY jobfile.end2_date DESC, `user`.team, jobfile.designer2_id DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880) AND ((jobfile.filename not like '%retouch%') AND (jobfile.filename not like '%detail_2%'))";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880) AND ((jobfile.filename not like '%retouch%') AND (jobfile.filename not like '%detail_2%'))"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880";
$proto3["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.project_id =5001 OR jobfile.project_id =5879 OR jobfile.project_id =5880"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
						$proto5=array();
$proto5["m_sql"] = "jobfile.project_id =5001";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Designer Report"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "=5001";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto3["m_contained"][]=$obj;
						$proto7=array();
$proto7["m_sql"] = "jobfile.project_id =5879";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Designer Report"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "=5879";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

			$proto3["m_contained"][]=$obj;
						$proto9=array();
$proto9["m_sql"] = "jobfile.project_id =5880";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Designer Report"
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "=5880";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

			$proto3["m_contained"][]=$obj;
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto11=array();
$proto11["m_sql"] = "(jobfile.filename not like '%retouch%') AND (jobfile.filename not like '%detail_2%')";
$proto11["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(jobfile.filename not like '%retouch%') AND (jobfile.filename not like '%detail_2%')"
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
						$proto13=array();
$proto13["m_sql"] = "jobfile.filename not like '%retouch%'";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Designer Report"
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "not like '%retouch%'";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = true;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

			$proto11["m_contained"][]=$obj;
						$proto15=array();
$proto15["m_sql"] = "jobfile.filename not like '%detail_2%'";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Designer Report"
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "not like '%detail_2%'";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = true;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

			$proto11["m_contained"][]=$obj;
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = true;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Designer Report"
));

$proto19["m_sql"] = "jobfile.job_id";
$proto19["m_srcTableName"] = "14704 Designer Report";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "filename",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Designer Report"
));

$proto21["m_sql"] = "jobfile.filename";
$proto21["m_srcTableName"] = "14704 Designer Report";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Designer Report"
));

$proto23["m_sql"] = "jobfile.end2_date";
$proto23["m_srcTableName"] = "14704 Designer Report";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Designer Report"
));

$proto25["m_sql"] = "jobfile.designer2_id";
$proto25["m_srcTableName"] = "14704 Designer Report";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Designer Report"
));

$proto27["m_sql"] = "jobfile.project_id";
$proto27["m_srcTableName"] = "14704 Designer Report";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "14704 Designer Report"
));

$proto29["m_sql"] = "`user`.team";
$proto29["m_srcTableName"] = "14704 Designer Report";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_estimated_average",
	"m_strTable" => "pdf",
	"m_srcTableName" => "14704 Designer Report"
));

$proto31["m_sql"] = "pdf.pdf_estimated_average";
$proto31["m_srcTableName"] = "14704 Designer Report";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "designer2_time",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Designer Report"
));

$proto33["m_sql"] = "jobfile.designer2_time";
$proto33["m_srcTableName"] = "14704 Designer Report";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(pdf.pdf_estimated_average/jobfile.designer2_time)*100"
));

$proto35["m_sql"] = "(pdf.pdf_estimated_average/jobfile.designer2_time)*100";
$proto35["m_srcTableName"] = "14704 Designer Report";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "efficiency";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "jobfile";
$proto38["m_srcTableName"] = "14704 Designer Report";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "jobfile_id";
$proto38["m_columns"][] = "file_url";
$proto38["m_columns"][] = "client_id";
$proto38["m_columns"][] = "work_id";
$proto38["m_columns"][] = "job_id";
$proto38["m_columns"][] = "project_id";
$proto38["m_columns"][] = "folder_name";
$proto38["m_columns"][] = "filename";
$proto38["m_columns"][] = "jobfile_type";
$proto38["m_columns"][] = "jobfile_note";
$proto38["m_columns"][] = "jobfile_status_id";
$proto38["m_columns"][] = "downloader_id";
$proto38["m_columns"][] = "distributor_id";
$proto38["m_columns"][] = "designer_id";
$proto38["m_columns"][] = "qc_id";
$proto38["m_columns"][] = "uploader_id";
$proto38["m_columns"][] = "notifier_id";
$proto38["m_columns"][] = "rejector_id";
$proto38["m_columns"][] = "download_date";
$proto38["m_columns"][] = "distribute_date";
$proto38["m_columns"][] = "start_date";
$proto38["m_columns"][] = "end_date";
$proto38["m_columns"][] = "designer_time";
$proto38["m_columns"][] = "qcstart_date";
$proto38["m_columns"][] = "qcend_date";
$proto38["m_columns"][] = "qc_time";
$proto38["m_columns"][] = "upload_date";
$proto38["m_columns"][] = "notify_date";
$proto38["m_columns"][] = "reject_date";
$proto38["m_columns"][] = "reject_reason";
$proto38["m_columns"][] = "designer2_id";
$proto38["m_columns"][] = "start2_date";
$proto38["m_columns"][] = "end2_date";
$proto38["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "jobfile";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "14704 Designer Report";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
												$proto41=array();
$proto41["m_link"] = "SQLL_INNERJOIN";
			$proto42=array();
$proto42["m_strName"] = "user";
$proto42["m_srcTableName"] = "14704 Designer Report";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "user_id";
$proto42["m_columns"][] = "user_status";
$proto42["m_columns"][] = "username";
$proto42["m_columns"][] = "password";
$proto42["m_columns"][] = "department_id";
$proto42["m_columns"][] = "subdiv_id";
$proto42["m_columns"][] = "group_id";
$proto42["m_columns"][] = "designation";
$proto42["m_columns"][] = "employee_id";
$proto42["m_columns"][] = "fname";
$proto42["m_columns"][] = "lname";
$proto42["m_columns"][] = "nickname";
$proto42["m_columns"][] = "email";
$proto42["m_columns"][] = "phone";
$proto42["m_columns"][] = "mobile";
$proto42["m_columns"][] = "log";
$proto42["m_columns"][] = "images_assigned";
$proto42["m_columns"][] = "user_picture";
$proto42["m_columns"][] = "team";
$proto42["m_columns"][] = "ad_group_id";
$proto42["m_columns"][] = "lastaccess";
$proto42["m_columns"][] = "joining_date";
$proto42["m_columns"][] = "emergency_contact1";
$proto42["m_columns"][] = "emergency_contact2";
$proto42["m_columns"][] = "permanent_address";
$proto42["m_columns"][] = "current_address";
$proto42["m_columns"][] = "date_of_birth";
$proto42["m_columns"][] = "male_female";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "INNER JOIN `user` ON jobfile.designer2_id = `user`.user_id";
$proto41["m_alias"] = "";
$proto41["m_srcTableName"] = "14704 Designer Report";
$proto43=array();
$proto43["m_sql"] = "jobfile.designer2_id = `user`.user_id";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Designer Report"
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "= `user`.user_id";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
												$proto45=array();
$proto45["m_link"] = "SQLL_INNERJOIN";
			$proto46=array();
$proto46["m_strName"] = "pdf";
$proto46["m_srcTableName"] = "14704 Designer Report";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "pdf_id";
$proto46["m_columns"][] = "pdf_name";
$proto46["m_columns"][] = "client_id";
$proto46["m_columns"][] = "pdf_location";
$proto46["m_columns"][] = "last_update";
$proto46["m_columns"][] = "pdf_estimated_average";
$proto46["m_columns"][] = "pdf_estimated_average1";
$proto46["m_columns"][] = "pdf_estimated_average2";
$proto46["m_columns"][] = "pdf_actual_average";
$proto46["m_columns"][] = "price";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "INNER JOIN pdf ON jobfile.project_id = pdf.pdf_id";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "14704 Designer Report";
$proto47=array();
$proto47["m_sql"] = "jobfile.project_id = pdf.pdf_id";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "project_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Designer Report"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "= pdf.pdf_id";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto49=array();
						$obj = new SQLField(array(
	"m_strName" => "end2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Designer Report"
));

$proto49["m_column"]=$obj;
$proto49["m_bAsc"] = 0;
$proto49["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto49);

$proto0["m_orderby"][]=$obj;					
												$proto51=array();
						$obj = new SQLField(array(
	"m_strName" => "team",
	"m_strTable" => "user",
	"m_srcTableName" => "14704 Designer Report"
));

$proto51["m_column"]=$obj;
$proto51["m_bAsc"] = 1;
$proto51["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto51);

$proto0["m_orderby"][]=$obj;					
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "designer2_id",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "14704 Designer Report"
));

$proto53["m_column"]=$obj;
$proto53["m_bAsc"] = 0;
$proto53["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto53);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="14704 Designer Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_14704_Designer_Report = createSqlQuery_14704_Designer_Report();


	
									
	
$tdata14704_Designer_Report[".sqlquery"] = $queryData_14704_Designer_Report;

include_once(getabspath("include/14704_Designer_Report_events.php"));
$tableEvents["14704 Designer Report"] = new eventclass_14704_Designer_Report;
$tdata14704_Designer_Report[".hasEvents"] = true;

?>