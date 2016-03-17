<?php
require_once(getabspath("classes/cipherer.php"));




$tdataFiles_Done__by_PDF_ = array();	
	$tdataFiles_Done__by_PDF_[".ShortName"] = "Files_Done__by_PDF_";
	$tdataFiles_Done__by_PDF_[".OwnerID"] = "";
	$tdataFiles_Done__by_PDF_[".OriginalTable"] = "jobfile";

//	field labels
$fieldLabelsFiles_Done__by_PDF_ = array();
$fieldToolTipsFiles_Done__by_PDF_ = array();
$pageTitlesFiles_Done__by_PDF_ = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsFiles_Done__by_PDF_["English"] = array();
	$fieldToolTipsFiles_Done__by_PDF_["English"] = array();
	$pageTitlesFiles_Done__by_PDF_["English"] = array();
	$fieldLabelsFiles_Done__by_PDF_["English"]["start2_date"] = "Start2 Date";
	$fieldToolTipsFiles_Done__by_PDF_["English"]["start2_date"] = "";
	$fieldLabelsFiles_Done__by_PDF_["English"]["pdf_name"] = "Pdf Name";
	$fieldToolTipsFiles_Done__by_PDF_["English"]["pdf_name"] = "";
	$fieldLabelsFiles_Done__by_PDF_["English"]["totals"] = "Totals";
	$fieldToolTipsFiles_Done__by_PDF_["English"]["totals"] = "";
	$fieldLabelsFiles_Done__by_PDF_["English"]["work_date"] = "Work Date";
	$fieldToolTipsFiles_Done__by_PDF_["English"]["work_date"] = "";
	if (count($fieldToolTipsFiles_Done__by_PDF_["English"]))
		$tdataFiles_Done__by_PDF_[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsFiles_Done__by_PDF_[""] = array();
	$fieldToolTipsFiles_Done__by_PDF_[""] = array();
	$pageTitlesFiles_Done__by_PDF_[""] = array();
	$fieldLabelsFiles_Done__by_PDF_[""]["pdf_name"] = "Pdf Name";
	$fieldToolTipsFiles_Done__by_PDF_[""]["pdf_name"] = "";
	$fieldLabelsFiles_Done__by_PDF_[""]["totals"] = "Totals";
	$fieldToolTipsFiles_Done__by_PDF_[""]["totals"] = "";
	$fieldLabelsFiles_Done__by_PDF_[""]["work_date"] = "Work Date";
	$fieldToolTipsFiles_Done__by_PDF_[""]["work_date"] = "";
	if (count($fieldToolTipsFiles_Done__by_PDF_[""]))
		$tdataFiles_Done__by_PDF_[".isUseToolTips"] = true;
}
	
	
	$tdataFiles_Done__by_PDF_[".NCSearch"] = true;



$tdataFiles_Done__by_PDF_[".shortTableName"] = "Files_Done__by_PDF_";
$tdataFiles_Done__by_PDF_[".nSecOptions"] = 0;
$tdataFiles_Done__by_PDF_[".recsPerRowList"] = 1;
$tdataFiles_Done__by_PDF_[".mainTableOwnerID"] = "";
$tdataFiles_Done__by_PDF_[".moveNext"] = 1;
$tdataFiles_Done__by_PDF_[".nType"] = 1;

$tdataFiles_Done__by_PDF_[".strOriginalTableName"] = "jobfile";




$tdataFiles_Done__by_PDF_[".showAddInPopup"] = false;

$tdataFiles_Done__by_PDF_[".showEditInPopup"] = false;

$tdataFiles_Done__by_PDF_[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
					
;
$popupPagesLayoutNames["view"] = "view";
$tdataFiles_Done__by_PDF_[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataFiles_Done__by_PDF_[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataFiles_Done__by_PDF_[".listAjax"] = true;
else 
	$tdataFiles_Done__by_PDF_[".listAjax"] = false;

	$tdataFiles_Done__by_PDF_[".audit"] = false;

	$tdataFiles_Done__by_PDF_[".locking"] = false;


$tdataFiles_Done__by_PDF_[".list"] = true;



$tdataFiles_Done__by_PDF_[".exportTo"] = true;



$tdataFiles_Done__by_PDF_[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataFiles_Done__by_PDF_[".searchSaving"] = false;
//

$tdataFiles_Done__by_PDF_[".showSearchPanel"] = true;
		$tdataFiles_Done__by_PDF_[".flexibleSearch"] = true;		

if (isMobile())
	$tdataFiles_Done__by_PDF_[".isUseAjaxSuggest"] = false;
else 
	$tdataFiles_Done__by_PDF_[".isUseAjaxSuggest"] = true;

$tdataFiles_Done__by_PDF_[".rowHighlite"] = true;


																																																																																																																																							
$tdataFiles_Done__by_PDF_[".isUsebuttonHandlers"] = true;

$tdataFiles_Done__by_PDF_[".addPageEvents"] = true;

// use timepicker for search panel
$tdataFiles_Done__by_PDF_[".isUseTimeForSearch"] = false;





$tdataFiles_Done__by_PDF_[".allSearchFields"] = array();
$tdataFiles_Done__by_PDF_[".filterFields"] = array();
$tdataFiles_Done__by_PDF_[".requiredSearchFields"] = array();

$tdataFiles_Done__by_PDF_[".allSearchFields"][] = "work_date";
	$tdataFiles_Done__by_PDF_[".allSearchFields"][] = "start2_date";
	$tdataFiles_Done__by_PDF_[".allSearchFields"][] = "pdf_name";
	$tdataFiles_Done__by_PDF_[".allSearchFields"][] = "totals";
	

$tdataFiles_Done__by_PDF_[".googleLikeFields"] = array();
$tdataFiles_Done__by_PDF_[".googleLikeFields"][] = "work_date";
$tdataFiles_Done__by_PDF_[".googleLikeFields"][] = "start2_date";
$tdataFiles_Done__by_PDF_[".googleLikeFields"][] = "pdf_name";
$tdataFiles_Done__by_PDF_[".googleLikeFields"][] = "totals";


$tdataFiles_Done__by_PDF_[".advSearchFields"] = array();
$tdataFiles_Done__by_PDF_[".advSearchFields"][] = "work_date";
$tdataFiles_Done__by_PDF_[".advSearchFields"][] = "start2_date";
$tdataFiles_Done__by_PDF_[".advSearchFields"][] = "pdf_name";
$tdataFiles_Done__by_PDF_[".advSearchFields"][] = "totals";

$tdataFiles_Done__by_PDF_[".tableType"] = "list";

$tdataFiles_Done__by_PDF_[".printerPageOrientation"] = 0;
$tdataFiles_Done__by_PDF_[".nPrinterPageScale"] = 100;

$tdataFiles_Done__by_PDF_[".nPrinterSplitRecords"] = 40;

$tdataFiles_Done__by_PDF_[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataFiles_Done__by_PDF_[".pageSize"] = 20;

$tdataFiles_Done__by_PDF_[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY DATE(jobfile.start2_date) DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataFiles_Done__by_PDF_[".strOrderBy"] = $tstrOrderBy;

$tdataFiles_Done__by_PDF_[".orderindexes"] = array();
$tdataFiles_Done__by_PDF_[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "DATE(jobfile.start2_date)");

$tdataFiles_Done__by_PDF_[".sqlHead"] = "SELECT DATE(jobfile.start2_date) as work_date, jobfile.start2_date, pdf.pdf_name, count(*) as totals";
$tdataFiles_Done__by_PDF_[".sqlFrom"] = "FROM `jobfile`  LEFT JOIN pdf ON pdf.pdf_id = jobfile.project_id";
$tdataFiles_Done__by_PDF_[".sqlWhereExpr"] = "";
$tdataFiles_Done__by_PDF_[".sqlTail"] = "GROUP BY DATE(jobfile.start2_date)";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataFiles_Done__by_PDF_[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataFiles_Done__by_PDF_[".arrGroupsPerPage"] = $arrGPP;

$tdataFiles_Done__by_PDF_[".highlightSearchResults"] = true;

$tableKeysFiles_Done__by_PDF_ = array();
$tdataFiles_Done__by_PDF_[".Keys"] = $tableKeysFiles_Done__by_PDF_;

$tdataFiles_Done__by_PDF_[".listFields"] = array();
$tdataFiles_Done__by_PDF_[".listFields"][] = "work_date";
$tdataFiles_Done__by_PDF_[".listFields"][] = "start2_date";
$tdataFiles_Done__by_PDF_[".listFields"][] = "pdf_name";
$tdataFiles_Done__by_PDF_[".listFields"][] = "totals";

$tdataFiles_Done__by_PDF_[".hideMobileList"] = array();


$tdataFiles_Done__by_PDF_[".viewFields"] = array();
$tdataFiles_Done__by_PDF_[".viewFields"][] = "work_date";

$tdataFiles_Done__by_PDF_[".addFields"] = array();

$tdataFiles_Done__by_PDF_[".inlineAddFields"] = array();

$tdataFiles_Done__by_PDF_[".editFields"] = array();

$tdataFiles_Done__by_PDF_[".inlineEditFields"] = array();

$tdataFiles_Done__by_PDF_[".exportFields"] = array();
$tdataFiles_Done__by_PDF_[".exportFields"][] = "work_date";
$tdataFiles_Done__by_PDF_[".exportFields"][] = "start2_date";
$tdataFiles_Done__by_PDF_[".exportFields"][] = "pdf_name";
$tdataFiles_Done__by_PDF_[".exportFields"][] = "totals";

$tdataFiles_Done__by_PDF_[".importFields"] = array();
$tdataFiles_Done__by_PDF_[".importFields"][] = "work_date";

$tdataFiles_Done__by_PDF_[".printFields"] = array();
$tdataFiles_Done__by_PDF_[".printFields"][] = "work_date";

//	work_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_date";
	$fdata["GoodName"] = "work_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Files_Done__by_PDF_","work_date"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "work_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE(jobfile.start2_date)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataFiles_Done__by_PDF_["work_date"] = $fdata;
//	start2_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "start2_date";
	$fdata["GoodName"] = "start2_date";
	$fdata["ownerTable"] = "jobfile";
	$fdata["Label"] = GetFieldLabel("Files_Done__by_PDF_","start2_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "start2_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobfile.start2_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
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
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataFiles_Done__by_PDF_["start2_date"] = $fdata;
//	pdf_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pdf_name";
	$fdata["GoodName"] = "pdf_name";
	$fdata["ownerTable"] = "pdf";
	$fdata["Label"] = GetFieldLabel("Files_Done__by_PDF_","pdf_name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pdf_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf.pdf_name";
	
		
		
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
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataFiles_Done__by_PDF_["pdf_name"] = $fdata;
//	totals
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "totals";
	$fdata["GoodName"] = "totals";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Files_Done__by_PDF_","totals"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "totals"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "count(*)";
	
		
		
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

	

	
	$tdataFiles_Done__by_PDF_["totals"] = $fdata;

	
$tables_data["Files Done (by PDF)"]=&$tdataFiles_Done__by_PDF_;
$field_labels["Files_Done__by_PDF_"] = &$fieldLabelsFiles_Done__by_PDF_;
$fieldToolTips["Files Done (by PDF)"] = &$fieldToolTipsFiles_Done__by_PDF_;
$page_titles["Files_Done__by_PDF_"] = &$pageTitlesFiles_Done__by_PDF_;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Files Done (by PDF)"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Files Done (by PDF)"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Files_Done__by_PDF_()
{
$proto1=array();
$proto1["m_strHead"] = "SELECT";
$proto1["m_strFieldList"] = "DATE(jobfile.start2_date) as work_date, jobfile.start2_date, pdf.pdf_name, count(*) as totals";
$proto1["m_strFrom"] = "FROM `jobfile`  LEFT JOIN pdf ON pdf.pdf_id = jobfile.project_id";
$proto1["m_strWhere"] = "";
$proto1["m_strOrderBy"] = "ORDER BY DATE(jobfile.start2_date) DESC";
$proto1["m_strTail"] = "GROUP BY DATE(jobfile.start2_date)";
			$proto1["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto1["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto1["m_having"] = $obj;
$proto1["m_fieldlist"] = array();
						$proto6=array();
			$proto7=array();
$proto7["m_functiontype"] = "SQLF_CUSTOM";
$proto7["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.start2_date"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "DATE(jobfile.start2_date)";
$proto6["m_srcTableName"] = "Files Done (by PDF)";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "work_date";
$obj = new SQLFieldListItem($proto6);

$proto1["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "start2_date",
	"m_strTable" => "jobfile",
	"m_srcTableName" => "Files Done (by PDF)"
));

$proto9["m_sql"] = "jobfile.start2_date";
$proto9["m_srcTableName"] = "Files Done (by PDF)";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto1["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_name",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Files Done (by PDF)"
));

$proto11["m_sql"] = "pdf.pdf_name";
$proto11["m_srcTableName"] = "Files Done (by PDF)";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto1["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_COUNT";
$proto14["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "count";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "count(*)";
$proto13["m_srcTableName"] = "Files Done (by PDF)";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "totals";
$obj = new SQLFieldListItem($proto13);

$proto1["m_fieldlist"][]=$obj;
$proto1["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "jobfile";
$proto17["m_srcTableName"] = "Files Done (by PDF)";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "jobfile_id";
$proto17["m_columns"][] = "file_url";
$proto17["m_columns"][] = "client_id";
$proto17["m_columns"][] = "work_id";
$proto17["m_columns"][] = "job_id";
$proto17["m_columns"][] = "project_id";
$proto17["m_columns"][] = "folder_name";
$proto17["m_columns"][] = "filename";
$proto17["m_columns"][] = "jobfile_type";
$proto17["m_columns"][] = "jobfile_note";
$proto17["m_columns"][] = "jobfile_status_id";
$proto17["m_columns"][] = "downloader_id";
$proto17["m_columns"][] = "distributor_id";
$proto17["m_columns"][] = "designer_id";
$proto17["m_columns"][] = "qc_id";
$proto17["m_columns"][] = "uploader_id";
$proto17["m_columns"][] = "notifier_id";
$proto17["m_columns"][] = "rejector_id";
$proto17["m_columns"][] = "download_date";
$proto17["m_columns"][] = "distribute_date";
$proto17["m_columns"][] = "start_date";
$proto17["m_columns"][] = "end_date";
$proto17["m_columns"][] = "designer_time";
$proto17["m_columns"][] = "qcstart_date";
$proto17["m_columns"][] = "qcend_date";
$proto17["m_columns"][] = "qc_time";
$proto17["m_columns"][] = "upload_date";
$proto17["m_columns"][] = "notify_date";
$proto17["m_columns"][] = "reject_date";
$proto17["m_columns"][] = "reject_reason";
$proto17["m_columns"][] = "designer2_id";
$proto17["m_columns"][] = "start2_date";
$proto17["m_columns"][] = "end2_date";
$proto17["m_columns"][] = "designer2_time";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "`jobfile`";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Files Done (by PDF)";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto1["m_fromlist"][]=$obj;
												$proto20=array();
$proto20["m_link"] = "SQLL_LEFTJOIN";
			$proto21=array();
$proto21["m_strName"] = "pdf";
$proto21["m_srcTableName"] = "Files Done (by PDF)";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "pdf_id";
$proto21["m_columns"][] = "pdf_name";
$proto21["m_columns"][] = "client_id";
$proto21["m_columns"][] = "pdf_location";
$proto21["m_columns"][] = "last_update";
$proto21["m_columns"][] = "pdf_estimated_average";
$proto21["m_columns"][] = "pdf_estimated_average1";
$proto21["m_columns"][] = "pdf_estimated_average2";
$proto21["m_columns"][] = "pdf_actual_average";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "LEFT JOIN pdf ON pdf.pdf_id = jobfile.project_id";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "Files Done (by PDF)";
$proto22=array();
$proto22["m_sql"] = "pdf.pdf_id = jobfile.project_id";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pdf_id",
	"m_strTable" => "pdf",
	"m_srcTableName" => "Files Done (by PDF)"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= jobfile.project_id";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto1["m_fromlist"][]=$obj;
$proto1["m_groupby"] = array();
												$proto24=array();
						$proto25=array();
$proto25["m_functiontype"] = "SQLF_CUSTOM";
$proto25["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.start2_date"
));

$proto25["m_arguments"][]=$obj;
$proto25["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto25);

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto1["m_groupby"][]=$obj;
$proto1["m_orderby"] = array();
												$proto27=array();
						$proto28=array();
$proto28["m_functiontype"] = "SQLF_CUSTOM";
$proto28["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "jobfile.start2_date"
));

$proto28["m_arguments"][]=$obj;
$proto28["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto28);

$proto27["m_column"]=$obj;
$proto27["m_bAsc"] = 0;
$proto27["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto27);

$proto1["m_orderby"][]=$obj;					
$proto1["m_srcTableName"]="Files Done (by PDF)";		
$obj = new SQLQuery($proto1);

	return $obj;
}
$queryData_Files_Done__by_PDF_ = createSqlQuery_Files_Done__by_PDF_();


	
				
	
$tdataFiles_Done__by_PDF_[".sqlquery"] = $queryData_Files_Done__by_PDF_;

include_once(getabspath("include/Files_Done__by_PDF__events.php"));
$tableEvents["Files Done (by PDF)"] = new eventclass_Files_Done__by_PDF_;
$tdataFiles_Done__by_PDF_[".hasEvents"] = true;

?>