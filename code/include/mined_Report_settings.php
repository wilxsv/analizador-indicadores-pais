<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamined_Report = array();
	$tdatamined_Report[".truncateText"] = true;
	$tdatamined_Report[".NumberOfChars"] = 80;
	$tdatamined_Report[".ShortName"] = "mined_Report";
	$tdatamined_Report[".OwnerID"] = "";
	$tdatamined_Report[".OriginalTable"] = "mined";

//	field labels
$fieldLabelsmined_Report = array();
$fieldToolTipsmined_Report = array();
$pageTitlesmined_Report = array();
$placeHoldersmined_Report = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmined_Report["Spanish"] = array();
	$fieldToolTipsmined_Report["Spanish"] = array();
	$placeHoldersmined_Report["Spanish"] = array();
	$pageTitlesmined_Report["Spanish"] = array();
	$fieldLabelsmined_Report["Spanish"]["MAX_matricula_final_"] = "MAX(matricula Final)";
	$fieldToolTipsmined_Report["Spanish"]["MAX_matricula_final_"] = "";
	$placeHoldersmined_Report["Spanish"]["MAX_matricula_final_"] = "";
	$fieldLabelsmined_Report["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsmined_Report["Spanish"]["departamento"] = "";
	$placeHoldersmined_Report["Spanish"]["departamento"] = "";
	$fieldLabelsmined_Report["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsmined_Report["Spanish"]["municipio"] = "";
	$placeHoldersmined_Report["Spanish"]["municipio"] = "";
	$fieldLabelsmined_Report["Spanish"]["mun3"] = "Mun3";
	$fieldToolTipsmined_Report["Spanish"]["mun3"] = "";
	$placeHoldersmined_Report["Spanish"]["mun3"] = "";
	if (count($fieldToolTipsmined_Report["Spanish"]))
		$tdatamined_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmined_Report["English"] = array();
	$fieldToolTipsmined_Report["English"] = array();
	$placeHoldersmined_Report["English"] = array();
	$pageTitlesmined_Report["English"] = array();
	$fieldLabelsmined_Report["English"]["MAX_matricula_final_"] = "MAX(matricula Final)";
	$fieldToolTipsmined_Report["English"]["MAX_matricula_final_"] = "";
	$placeHoldersmined_Report["English"]["MAX_matricula_final_"] = "";
	$fieldLabelsmined_Report["English"]["departamento"] = "Departamento";
	$fieldToolTipsmined_Report["English"]["departamento"] = "";
	$placeHoldersmined_Report["English"]["departamento"] = "";
	$fieldLabelsmined_Report["English"]["municipio"] = "Municipio";
	$fieldToolTipsmined_Report["English"]["municipio"] = "";
	$placeHoldersmined_Report["English"]["municipio"] = "";
	$fieldLabelsmined_Report["English"]["mun3"] = "Mun3";
	$fieldToolTipsmined_Report["English"]["mun3"] = "";
	$placeHoldersmined_Report["English"]["mun3"] = "";
	if (count($fieldToolTipsmined_Report["English"]))
		$tdatamined_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmined_Report[""] = array();
	$fieldToolTipsmined_Report[""] = array();
	$placeHoldersmined_Report[""] = array();
	$pageTitlesmined_Report[""] = array();
	$fieldLabelsmined_Report[""]["MAX_matricula_final_"] = "MAX(matricula Final)";
	$fieldToolTipsmined_Report[""]["MAX_matricula_final_"] = "";
	$placeHoldersmined_Report[""]["MAX_matricula_final_"] = "";
	$fieldLabelsmined_Report[""]["departamento"] = "Departamento";
	$fieldToolTipsmined_Report[""]["departamento"] = "";
	$placeHoldersmined_Report[""]["departamento"] = "";
	$fieldLabelsmined_Report[""]["municipio"] = "Municipio";
	$fieldToolTipsmined_Report[""]["municipio"] = "";
	$placeHoldersmined_Report[""]["municipio"] = "";
	$fieldLabelsmined_Report[""]["mun3"] = "Mun3";
	$fieldToolTipsmined_Report[""]["mun3"] = "";
	$placeHoldersmined_Report[""]["mun3"] = "";
	if (count($fieldToolTipsmined_Report[""]))
		$tdatamined_Report[".isUseToolTips"] = true;
}


	$tdatamined_Report[".NCSearch"] = true;



$tdatamined_Report[".shortTableName"] = "mined_Report";
$tdatamined_Report[".nSecOptions"] = 0;
$tdatamined_Report[".recsPerRowPrint"] = 1;
$tdatamined_Report[".mainTableOwnerID"] = "";
$tdatamined_Report[".moveNext"] = 1;
$tdatamined_Report[".entityType"] = 2;

$tdatamined_Report[".strOriginalTableName"] = "mined";

	



$tdatamined_Report[".showAddInPopup"] = false;

$tdatamined_Report[".showEditInPopup"] = false;

$tdatamined_Report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamined_Report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamined_Report[".fieldsForRegister"] = array();

$tdatamined_Report[".listAjax"] = false;

	$tdatamined_Report[".audit"] = false;

	$tdatamined_Report[".locking"] = false;



$tdatamined_Report[".list"] = true;



$tdatamined_Report[".reorderRecordsByHeader"] = true;





$tdatamined_Report[".exportTo"] = true;

$tdatamined_Report[".printFriendly"] = true;


$tdatamined_Report[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamined_Report[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamined_Report[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamined_Report[".searchSaving"] = false;
//

$tdatamined_Report[".showSearchPanel"] = true;
		$tdatamined_Report[".flexibleSearch"] = true;

$tdatamined_Report[".isUseAjaxSuggest"] = true;






$tdatamined_Report[".ajaxCodeSnippetAdded"] = false;

$tdatamined_Report[".buttonsAdded"] = false;

$tdatamined_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamined_Report[".isUseTimeForSearch"] = false;





$tdatamined_Report[".allSearchFields"] = array();
$tdatamined_Report[".filterFields"] = array();
$tdatamined_Report[".requiredSearchFields"] = array();

$tdatamined_Report[".allSearchFields"][] = "departamento";
	$tdatamined_Report[".allSearchFields"][] = "municipio";
	$tdatamined_Report[".allSearchFields"][] = "MAX(matricula_final)";
	$tdatamined_Report[".allSearchFields"][] = "mun3";
	

$tdatamined_Report[".googleLikeFields"] = array();
$tdatamined_Report[".googleLikeFields"][] = "departamento";
$tdatamined_Report[".googleLikeFields"][] = "municipio";
$tdatamined_Report[".googleLikeFields"][] = "MAX(matricula_final)";
$tdatamined_Report[".googleLikeFields"][] = "mun3";


$tdatamined_Report[".advSearchFields"] = array();
$tdatamined_Report[".advSearchFields"][] = "departamento";
$tdatamined_Report[".advSearchFields"][] = "municipio";
$tdatamined_Report[".advSearchFields"][] = "MAX(matricula_final)";
$tdatamined_Report[".advSearchFields"][] = "mun3";

$tdatamined_Report[".tableType"] = "report";

$tdatamined_Report[".printerPageOrientation"] = 0;
$tdatamined_Report[".nPrinterPageScale"] = 100;

$tdatamined_Report[".nPrinterSplitRecords"] = 40;

$tdatamined_Report[".nPrinterPDFSplitRecords"] = 40;



$tdatamined_Report[".geocodingEnabled"] = false;

//report settings
$tdatamined_Report[".printReportLayout"] = 6;

$tdatamined_Report[".reportPrintPartitionType"] = 1;
$tdatamined_Report[".reportPrintGroupsPerPage"] = 40;
$tdatamined_Report[".reportPrintPDFGroupsPerPage"] = 40;
$tdatamined_Report[".lowGroup"] = 0;



$tdatamined_Report[".pageSize"] = 20;






$tdatamined_Report[".repShowDet"] = true;

$tdatamined_Report[".reportLayout"] = 6;

//end of report settings




$tdatamined_Report[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamined_Report[".strOrderBy"] = $tstrOrderBy;

$tdatamined_Report[".orderindexes"] = array();

$tdatamined_Report[".sqlHead"] = "SELECT departamento,  municipio,  MAX(matricula_final) AS `MAX(matricula_final)`,  mun AS mun3";
$tdatamined_Report[".sqlFrom"] = "FROM mined";
$tdatamined_Report[".sqlWhereExpr"] = "";
$tdatamined_Report[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamined_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamined_Report[".arrGroupsPerPage"] = $arrGPP;

$tdatamined_Report[".highlightSearchResults"] = true;

$tableKeysmined_Report = array();
$tdatamined_Report[".Keys"] = $tableKeysmined_Report;

$tdatamined_Report[".listFields"] = array();
$tdatamined_Report[".listFields"][] = "departamento";
$tdatamined_Report[".listFields"][] = "municipio";
$tdatamined_Report[".listFields"][] = "MAX(matricula_final)";
$tdatamined_Report[".listFields"][] = "mun3";

$tdatamined_Report[".hideMobileList"] = array();


$tdatamined_Report[".viewFields"] = array();
$tdatamined_Report[".viewFields"][] = "departamento";
$tdatamined_Report[".viewFields"][] = "municipio";
$tdatamined_Report[".viewFields"][] = "MAX(matricula_final)";
$tdatamined_Report[".viewFields"][] = "mun3";

$tdatamined_Report[".addFields"] = array();
$tdatamined_Report[".addFields"][] = "departamento";
$tdatamined_Report[".addFields"][] = "municipio";

$tdatamined_Report[".masterListFields"] = array();
$tdatamined_Report[".masterListFields"][] = "departamento";
$tdatamined_Report[".masterListFields"][] = "municipio";
$tdatamined_Report[".masterListFields"][] = "MAX(matricula_final)";
$tdatamined_Report[".masterListFields"][] = "mun3";

$tdatamined_Report[".inlineAddFields"] = array();
$tdatamined_Report[".inlineAddFields"][] = "departamento";
$tdatamined_Report[".inlineAddFields"][] = "municipio";

$tdatamined_Report[".editFields"] = array();
$tdatamined_Report[".editFields"][] = "departamento";
$tdatamined_Report[".editFields"][] = "municipio";

$tdatamined_Report[".inlineEditFields"] = array();
$tdatamined_Report[".inlineEditFields"][] = "departamento";
$tdatamined_Report[".inlineEditFields"][] = "municipio";

$tdatamined_Report[".updateSelectedFields"] = array();
$tdatamined_Report[".updateSelectedFields"][] = "departamento";
$tdatamined_Report[".updateSelectedFields"][] = "municipio";


$tdatamined_Report[".exportFields"] = array();
$tdatamined_Report[".exportFields"][] = "departamento";
$tdatamined_Report[".exportFields"][] = "municipio";
$tdatamined_Report[".exportFields"][] = "MAX(matricula_final)";
$tdatamined_Report[".exportFields"][] = "mun3";

$tdatamined_Report[".importFields"] = array();
$tdatamined_Report[".importFields"][] = "departamento";
$tdatamined_Report[".importFields"][] = "municipio";
$tdatamined_Report[".importFields"][] = "MAX(matricula_final)";
$tdatamined_Report[".importFields"][] = "mun3";

$tdatamined_Report[".printFields"] = array();
$tdatamined_Report[".printFields"][] = "departamento";
$tdatamined_Report[".printFields"][] = "municipio";
$tdatamined_Report[".printFields"][] = "MAX(matricula_final)";
$tdatamined_Report[".printFields"][] = "mun3";

//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined_Report","departamento");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "departamento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "departamento";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined_Report["departamento"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined_Report","municipio");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "municipio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "municipio";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined_Report["municipio"] = $fdata;
//	MAX(matricula_final)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MAX(matricula_final)";
	$fdata["GoodName"] = "MAX_matricula_final_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("mined_Report","MAX_matricula_final_");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MAX(matricula_final)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(matricula_final)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined_Report["MAX(matricula_final)"] = $fdata;
//	mun3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mun3";
	$fdata["GoodName"] = "mun3";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined_Report","mun3");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mun";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mun";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined_Report["mun3"] = $fdata;


$tables_data["mined Report"]=&$tdatamined_Report;
$field_labels["mined_Report"] = &$fieldLabelsmined_Report;
$fieldToolTips["mined_Report"] = &$fieldToolTipsmined_Report;
$placeHolders["mined_Report"] = &$placeHoldersmined_Report;
$page_titles["mined_Report"] = &$pageTitlesmined_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mined Report"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mined Report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mined_Report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "departamento,  municipio,  MAX(matricula_final) AS `MAX(matricula_final)`,  mun AS mun3";
$proto0["m_strFrom"] = "FROM mined";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
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

$proto0["m_where"] = $obj;
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

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined Report"
));

$proto6["m_sql"] = "departamento";
$proto6["m_srcTableName"] = "mined Report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined Report"
));

$proto8["m_sql"] = "municipio";
$proto8["m_srcTableName"] = "mined Report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_MAX";
$proto11["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "matricula_final",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined Report"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "MAX(matricula_final)";
$proto10["m_srcTableName"] = "mined Report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "MAX(matricula_final)";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "mun",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined Report"
));

$proto13["m_sql"] = "mun";
$proto13["m_srcTableName"] = "mined Report";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "mun3";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "mined";
$proto16["m_srcTableName"] = "mined Report";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "idderespuesta";
$proto16["m_columns"][] = "codigo";
$proto16["m_columns"][] = "depto";
$proto16["m_columns"][] = "departamento";
$proto16["m_columns"][] = "mun";
$proto16["m_columns"][] = "municipio";
$proto16["m_columns"][] = "nombre_c_e";
$proto16["m_columns"][] = "x";
$proto16["m_columns"][] = "y";
$proto16["m_columns"][] = "sector_ppd";
$proto16["m_columns"][] = "matricula_inicial";
$proto16["m_columns"][] = "matricula_final";
$proto16["m_columns"][] = "maras";
$proto16["m_columns"][] = "robos";
$proto16["m_columns"][] = "hurtos";
$proto16["m_columns"][] = "drogas";
$proto16["m_columns"][] = "violaciones";
$proto16["m_columns"][] = "pab";
$proto16["m_columns"][] = "paf";
$proto16["m_columns"][] = "escasos_recursos";
$proto16["m_columns"][] = "incorpo_actividades_prod";
$proto16["m_columns"][] = "lejania_ce";
$proto16["m_columns"][] = "violencia_pandilleril";
$proto16["m_columns"][] = "embarazo";
$proto16["m_columns"][] = "acoso";
$proto16["m_columns"][] = "violacion_sexual";
$proto16["m_columns"][] = "cambio_domicilio";
$proto16["m_columns"][] = "migracion";
$proto16["m_columns"][] = "bajo_rendimiento";
$proto16["m_columns"][] = "enfermedad";
$proto16["m_columns"][] = "prostitucion";
$proto16["m_columns"][] = "dep_mun";
$proto16["m_columns"][] = "max_matric2016";
$proto16["m_columns"][] = "mrf2016";
$proto16["m_columns"][] = "pab_af";
$proto16["m_columns"][] = "r_h";
$proto16["m_columns"][] = "ipce_naive";
$proto16["m_columns"][] = "ipce_0_1";
$proto16["m_columns"][] = "aÑo";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "mined";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "mined Report";
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

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined Report"
));

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto0["m_groupby"][]=$obj;
												$proto21=array();
						$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined Report"
));

$proto21["m_column"]=$obj;
$obj = new SQLGroupByItem($proto21);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mined Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mined_Report = createSqlQuery_mined_Report();


	
		;

				

$tdatamined_Report[".sqlquery"] = $queryData_mined_Report;

$tableEvents["mined Report"] = new eventsBase;
$tdatamined_Report[".hasEvents"] = false;

?>