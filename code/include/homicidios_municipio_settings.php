<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahomicidios_municipio = array();
	$tdatahomicidios_municipio[".truncateText"] = true;
	$tdatahomicidios_municipio[".NumberOfChars"] = 80;
	$tdatahomicidios_municipio[".ShortName"] = "homicidios_municipio";
	$tdatahomicidios_municipio[".OwnerID"] = "";
	$tdatahomicidios_municipio[".OriginalTable"] = "homicidios_sv_2016";

//	field labels
$fieldLabelshomicidios_municipio = array();
$fieldToolTipshomicidios_municipio = array();
$pageTitleshomicidios_municipio = array();
$placeHoldershomicidios_municipio = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshomicidios_municipio["Spanish"] = array();
	$fieldToolTipshomicidios_municipio["Spanish"] = array();
	$placeHoldershomicidios_municipio["Spanish"] = array();
	$pageTitleshomicidios_municipio["Spanish"] = array();
	$fieldLabelshomicidios_municipio["Spanish"]["__municipio_"] = "Municipio";
	$fieldToolTipshomicidios_municipio["Spanish"]["__municipio_"] = "";
	$placeHoldershomicidios_municipio["Spanish"]["__municipio_"] = "";
	$fieldLabelshomicidios_municipio["Spanish"]["COUNT___homicidios_"] = "COUNT(  Homicidios)";
	$fieldToolTipshomicidios_municipio["Spanish"]["COUNT___homicidios_"] = "";
	$placeHoldershomicidios_municipio["Spanish"]["COUNT___homicidios_"] = "";
	$fieldLabelshomicidios_municipio["Spanish"]["__municipi_1"] = "Municipi 1";
	$fieldToolTipshomicidios_municipio["Spanish"]["__municipi_1"] = "";
	$placeHoldershomicidios_municipio["Spanish"]["__municipi_1"] = "";
	if (count($fieldToolTipshomicidios_municipio["Spanish"]))
		$tdatahomicidios_municipio[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshomicidios_municipio["English"] = array();
	$fieldToolTipshomicidios_municipio["English"] = array();
	$placeHoldershomicidios_municipio["English"] = array();
	$pageTitleshomicidios_municipio["English"] = array();
	$fieldLabelshomicidios_municipio["English"]["__municipio_"] = "Municipio";
	$fieldToolTipshomicidios_municipio["English"]["__municipio_"] = "";
	$placeHoldershomicidios_municipio["English"]["__municipio_"] = "";
	$fieldLabelshomicidios_municipio["English"]["COUNT___homicidios_"] = "COUNT(  Homicidios)";
	$fieldToolTipshomicidios_municipio["English"]["COUNT___homicidios_"] = "";
	$placeHoldershomicidios_municipio["English"]["COUNT___homicidios_"] = "";
	$fieldLabelshomicidios_municipio["English"]["__municipi_1"] = "Municipi 1";
	$fieldToolTipshomicidios_municipio["English"]["__municipi_1"] = "";
	$placeHoldershomicidios_municipio["English"]["__municipi_1"] = "";
	if (count($fieldToolTipshomicidios_municipio["English"]))
		$tdatahomicidios_municipio[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshomicidios_municipio[""] = array();
	$fieldToolTipshomicidios_municipio[""] = array();
	$placeHoldershomicidios_municipio[""] = array();
	$pageTitleshomicidios_municipio[""] = array();
	if (count($fieldToolTipshomicidios_municipio[""]))
		$tdatahomicidios_municipio[".isUseToolTips"] = true;
}





$tdatahomicidios_municipio[".shortTableName"] = "homicidios_municipio";
$tdatahomicidios_municipio[".nSecOptions"] = 0;
$tdatahomicidios_municipio[".recsPerRowPrint"] = 1;
$tdatahomicidios_municipio[".mainTableOwnerID"] = "";
$tdatahomicidios_municipio[".moveNext"] = 1;
$tdatahomicidios_municipio[".entityType"] = 2;

$tdatahomicidios_municipio[".strOriginalTableName"] = "homicidios_sv_2016";

	



$tdatahomicidios_municipio[".showAddInPopup"] = false;

$tdatahomicidios_municipio[".showEditInPopup"] = false;

$tdatahomicidios_municipio[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahomicidios_municipio[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahomicidios_municipio[".fieldsForRegister"] = array();

$tdatahomicidios_municipio[".listAjax"] = false;

	$tdatahomicidios_municipio[".audit"] = false;

	$tdatahomicidios_municipio[".locking"] = false;



$tdatahomicidios_municipio[".list"] = true;



$tdatahomicidios_municipio[".reorderRecordsByHeader"] = true;





$tdatahomicidios_municipio[".exportTo"] = true;

$tdatahomicidios_municipio[".printFriendly"] = true;


$tdatahomicidios_municipio[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatahomicidios_municipio[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatahomicidios_municipio[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatahomicidios_municipio[".searchSaving"] = false;
//

$tdatahomicidios_municipio[".showSearchPanel"] = true;
		$tdatahomicidios_municipio[".flexibleSearch"] = true;

$tdatahomicidios_municipio[".isUseAjaxSuggest"] = true;






$tdatahomicidios_municipio[".ajaxCodeSnippetAdded"] = false;

$tdatahomicidios_municipio[".buttonsAdded"] = false;

$tdatahomicidios_municipio[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahomicidios_municipio[".isUseTimeForSearch"] = false;





$tdatahomicidios_municipio[".allSearchFields"] = array();
$tdatahomicidios_municipio[".filterFields"] = array();
$tdatahomicidios_municipio[".requiredSearchFields"] = array();

$tdatahomicidios_municipio[".allSearchFields"][] = "__municipio_";
	$tdatahomicidios_municipio[".allSearchFields"][] = "COUNT(__homicidios)";
	$tdatahomicidios_municipio[".allSearchFields"][] = "__municipi_1";
	

$tdatahomicidios_municipio[".googleLikeFields"] = array();
$tdatahomicidios_municipio[".googleLikeFields"][] = "__municipio_";
$tdatahomicidios_municipio[".googleLikeFields"][] = "COUNT(__homicidios)";
$tdatahomicidios_municipio[".googleLikeFields"][] = "__municipi_1";


$tdatahomicidios_municipio[".advSearchFields"] = array();
$tdatahomicidios_municipio[".advSearchFields"][] = "__municipio_";
$tdatahomicidios_municipio[".advSearchFields"][] = "COUNT(__homicidios)";
$tdatahomicidios_municipio[".advSearchFields"][] = "__municipi_1";

$tdatahomicidios_municipio[".tableType"] = "report";

$tdatahomicidios_municipio[".printerPageOrientation"] = 0;
$tdatahomicidios_municipio[".nPrinterPageScale"] = 100;

$tdatahomicidios_municipio[".nPrinterSplitRecords"] = 40;

$tdatahomicidios_municipio[".nPrinterPDFSplitRecords"] = 40;



$tdatahomicidios_municipio[".geocodingEnabled"] = false;

//report settings

$tdatahomicidios_municipio[".reportPrintPartitionType"] = 1;
$tdatahomicidios_municipio[".reportPrintGroupsPerPage"] = 3;
$tdatahomicidios_municipio[".reportPrintPDFGroupsPerPage"] = 3;
$tdatahomicidios_municipio[".lowGroup"] = 1;



$tdatahomicidios_municipio[".reportGroupFields"] = true;
$tdatahomicidios_municipio[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "__municipio_";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdatahomicidios_municipio[".reportGroupFieldsData"] = $reportGroupFields;

$tdatahomicidios_municipio[".reportHorizontalSummary"] = true;

$tdatahomicidios_municipio[".isExistTotalFields"] = true;

$tdatahomicidios_municipio[".reportVerticalSummary"] = true;



$tdatahomicidios_municipio[".repShowDet"] = true;

$tdatahomicidios_municipio[".reportLayout"] = 0;

//end of report settings




$tdatahomicidios_municipio[".listGridLayout"] = 3;

$tdatahomicidios_municipio[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahomicidios_municipio[".strOrderBy"] = $tstrOrderBy;

$tdatahomicidios_municipio[".orderindexes"] = array();

$tdatahomicidios_municipio[".sqlHead"] = "SELECT `__municipio_`,  COUNT(`__homicidios`) AS `COUNT(__homicidios)`,  `__municipi_1`";
$tdatahomicidios_municipio[".sqlFrom"] = "FROM homicidios_sv_2016";
$tdatahomicidios_municipio[".sqlWhereExpr"] = "`__ocupacion_` ='PNC' OR `__ocupacion_` ='MILITAR'";
$tdatahomicidios_municipio[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahomicidios_municipio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahomicidios_municipio[".arrGroupsPerPage"] = $arrGPP;

$tdatahomicidios_municipio[".highlightSearchResults"] = true;

$tableKeyshomicidios_municipio = array();
$tdatahomicidios_municipio[".Keys"] = $tableKeyshomicidios_municipio;

$tdatahomicidios_municipio[".listFields"] = array();
$tdatahomicidios_municipio[".listFields"][] = "__municipio_";
$tdatahomicidios_municipio[".listFields"][] = "COUNT(__homicidios)";
$tdatahomicidios_municipio[".listFields"][] = "__municipi_1";

$tdatahomicidios_municipio[".hideMobileList"] = array();


$tdatahomicidios_municipio[".viewFields"] = array();
$tdatahomicidios_municipio[".viewFields"][] = "__municipio_";
$tdatahomicidios_municipio[".viewFields"][] = "COUNT(__homicidios)";
$tdatahomicidios_municipio[".viewFields"][] = "__municipi_1";

$tdatahomicidios_municipio[".addFields"] = array();
$tdatahomicidios_municipio[".addFields"][] = "__municipio_";
$tdatahomicidios_municipio[".addFields"][] = "__municipi_1";

$tdatahomicidios_municipio[".masterListFields"] = array();
$tdatahomicidios_municipio[".masterListFields"][] = "__municipio_";
$tdatahomicidios_municipio[".masterListFields"][] = "COUNT(__homicidios)";
$tdatahomicidios_municipio[".masterListFields"][] = "__municipi_1";

$tdatahomicidios_municipio[".inlineAddFields"] = array();
$tdatahomicidios_municipio[".inlineAddFields"][] = "__municipio_";
$tdatahomicidios_municipio[".inlineAddFields"][] = "__municipi_1";

$tdatahomicidios_municipio[".editFields"] = array();
$tdatahomicidios_municipio[".editFields"][] = "__municipio_";
$tdatahomicidios_municipio[".editFields"][] = "__municipi_1";

$tdatahomicidios_municipio[".inlineEditFields"] = array();
$tdatahomicidios_municipio[".inlineEditFields"][] = "__municipio_";
$tdatahomicidios_municipio[".inlineEditFields"][] = "__municipi_1";

$tdatahomicidios_municipio[".updateSelectedFields"] = array();
$tdatahomicidios_municipio[".updateSelectedFields"][] = "__municipio_";
$tdatahomicidios_municipio[".updateSelectedFields"][] = "__municipi_1";


$tdatahomicidios_municipio[".exportFields"] = array();
$tdatahomicidios_municipio[".exportFields"][] = "__municipio_";
$tdatahomicidios_municipio[".exportFields"][] = "COUNT(__homicidios)";
$tdatahomicidios_municipio[".exportFields"][] = "__municipi_1";

$tdatahomicidios_municipio[".importFields"] = array();
$tdatahomicidios_municipio[".importFields"][] = "__municipio_";
$tdatahomicidios_municipio[".importFields"][] = "COUNT(__homicidios)";
$tdatahomicidios_municipio[".importFields"][] = "__municipi_1";

$tdatahomicidios_municipio[".printFields"] = array();
$tdatahomicidios_municipio[".printFields"][] = "__municipio_";
$tdatahomicidios_municipio[".printFields"][] = "COUNT(__homicidios)";
$tdatahomicidios_municipio[".printFields"][] = "__municipi_1";

//	__municipio_
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "__municipio_";
	$fdata["GoodName"] = "__municipio_";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_municipio","__municipio_");
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

		$fdata["strField"] = "__municipio_";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__municipio_`";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_municipio["__municipio_"] = $fdata;
//	COUNT(__homicidios)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "COUNT(__homicidios)";
	$fdata["GoodName"] = "COUNT___homicidios_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("homicidios_municipio","COUNT___homicidios_");
	$fdata["FieldType"] = 3;

		// report field settings
		$fdata["isTotalMin"] = true;
				// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(__homicidios)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(`__homicidios`)";

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_municipio["COUNT(__homicidios)"] = $fdata;
//	__municipi_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "__municipi_1";
	$fdata["GoodName"] = "__municipi_1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_municipio","__municipi_1");
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

		$fdata["strField"] = "__municipi_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__municipi_1`";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_municipio["__municipi_1"] = $fdata;


$tables_data["homicidios_municipio"]=&$tdatahomicidios_municipio;
$field_labels["homicidios_municipio"] = &$fieldLabelshomicidios_municipio;
$fieldToolTips["homicidios_municipio"] = &$fieldToolTipshomicidios_municipio;
$placeHolders["homicidios_municipio"] = &$placeHoldershomicidios_municipio;
$page_titles["homicidios_municipio"] = &$pageTitleshomicidios_municipio;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["homicidios_municipio"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["homicidios_municipio"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_homicidios_municipio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`__municipio_`,  COUNT(`__homicidios`) AS `COUNT(__homicidios)`,  `__municipi_1`";
$proto0["m_strFrom"] = "FROM homicidios_sv_2016";
$proto0["m_strWhere"] = "`__ocupacion_` ='PNC' OR `__ocupacion_` ='MILITAR'";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`__ocupacion_` ='PNC' OR `__ocupacion_` ='MILITAR'";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`__ocupacion_` ='PNC' OR `__ocupacion_` ='MILITAR'"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "`__ocupacion_` ='PNC'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "__ocupacion_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_municipio"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "='PNC'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "`__ocupacion_` ='MILITAR'";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "__ocupacion_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_municipio"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "='MILITAR'";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "__municipio_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_municipio"
));

$proto10["m_sql"] = "`__municipio_`";
$proto10["m_srcTableName"] = "homicidios_municipio";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_COUNT";
$proto13["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "__homicidios",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_municipio"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "COUNT(`__homicidios`)";
$proto12["m_srcTableName"] = "homicidios_municipio";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "COUNT(__homicidios)";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "__municipi_1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_municipio"
));

$proto15["m_sql"] = "`__municipi_1`";
$proto15["m_srcTableName"] = "homicidios_municipio";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "homicidios_sv_2016";
$proto18["m_srcTableName"] = "homicidios_municipio";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "situacion";
$proto18["m_columns"][] = "hoja";
$proto18["m_columns"][] = "__homicidios";
$proto18["m_columns"][] = "__edad";
$proto18["m_columns"][] = "__relacion_e";
$proto18["m_columns"][] = "__sexo";
$proto18["m_columns"][] = "__relacionad";
$proto18["m_columns"][] = "__causa_prel";
$proto18["m_columns"][] = "__circunstan";
$proto18["m_columns"][] = "__movil";
$proto18["m_columns"][] = "__tipo_viole";
$proto18["m_columns"][] = "__relac_vict";
$proto18["m_columns"][] = "__victima_pa";
$proto18["m_columns"][] = "__segun";
$proto18["m_columns"][] = "__pandilla";
$proto18["m_columns"][] = "__ocupacion_";
$proto18["m_columns"][] = "__nacionalid";
$proto18["m_columns"][] = "__depto";
$proto18["m_columns"][] = "__municipio";
$proto18["m_columns"][] = "__canton";
$proto18["m_columns"][] = "__caserio";
$proto18["m_columns"][] = "__barrio";
$proto18["m_columns"][] = "__comunidad";
$proto18["m_columns"][] = "__reparto";
$proto18["m_columns"][] = "__colonia";
$proto18["m_columns"][] = "__no";
$proto18["m_columns"][] = "__calle";
$proto18["m_columns"][] = "__avenida";
$proto18["m_columns"][] = "__alameda";
$proto18["m_columns"][] = "__boulevard";
$proto18["m_columns"][] = "__pasaje";
$proto18["m_columns"][] = "__sector_spd";
$proto18["m_columns"][] = "__tipo_lugar";
$proto18["m_columns"][] = "__area";
$proto18["m_columns"][] = "__x";
$proto18["m_columns"][] = "__y";
$proto18["m_columns"][] = "__fecha_hech";
$proto18["m_columns"][] = "__dia";
$proto18["m_columns"][] = "__mes";
$proto18["m_columns"][] = "__hora_hecho";
$proto18["m_columns"][] = "__periodo";
$proto18["m_columns"][] = "__tipo_arma";
$proto18["m_columns"][] = "__especifica";
$proto18["m_columns"][] = "__calibre";
$proto18["m_columns"][] = "__tipo_delit";
$proto18["m_columns"][] = "__muertos";
$proto18["m_columns"][] = "__fecha_leva";
$proto18["m_columns"][] = "__hora_de_le";
$proto18["m_columns"][] = "__observacio";
$proto18["m_columns"][] = "__f50";
$proto18["m_columns"][] = "__numforma";
$proto18["m_columns"][] = "__edad1";
$proto18["m_columns"][] = "__sexo1";
$proto18["m_columns"][] = "__departamen";
$proto18["m_columns"][] = "__municipio_";
$proto18["m_columns"][] = "__canton1";
$proto18["m_columns"][] = "__caserio1";
$proto18["m_columns"][] = "__colonia1";
$proto18["m_columns"][] = "__fechahecho";
$proto18["m_columns"][] = "__hora";
$proto18["m_columns"][] = "__minutos";
$proto18["m_columns"][] = "__tipoarma";
$proto18["m_columns"][] = "__especifiqu";
$proto18["m_columns"][] = "__calificaci";
$proto18["m_columns"][] = "__fecha_de_l";
$proto18["m_columns"][] = "__departam_1";
$proto18["m_columns"][] = "__municipi_1";
$proto18["m_columns"][] = "__conciliaci";
$proto18["m_columns"][] = "__levantamie";
$proto18["m_columns"][] = "__profesión";
$proto18["m_columns"][] = "__tipo_halla";
$proto18["m_columns"][] = "__victimario";
$proto18["m_columns"][] = "__causa_pr_1";
$proto18["m_columns"][] = "__dpto";
$proto18["m_columns"][] = "__munic";
$proto18["m_columns"][] = "__cdpto_cmun";
$proto18["m_columns"][] = "__cab_dpto";
$proto18["m_columns"][] = "__cdpto";
$proto18["m_columns"][] = "__fid";
$proto18["m_columns"][] = "__area1";
$proto18["m_columns"][] = "__munic25k_";
$proto18["m_columns"][] = "__munic25k_i";
$proto18["m_columns"][] = "__poly_";
$proto18["m_columns"][] = "__subclass";
$proto18["m_columns"][] = "__subclass_";
$proto18["m_columns"][] = "__rings_ok";
$proto18["m_columns"][] = "__rings_nok";
$proto18["m_columns"][] = "__dpto1";
$proto18["m_columns"][] = "__munic1";
$proto18["m_columns"][] = "__cdpto_cmun1";
$proto18["m_columns"][] = "__cab_dpto1";
$proto18["m_columns"][] = "__cdpto1";
$proto18["m_columns"][] = "__acres";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "homicidios_sv_2016";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "homicidios_municipio";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto21=array();
						$obj = new SQLField(array(
	"m_strName" => "__municipio_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_municipio"
));

$proto21["m_column"]=$obj;
$obj = new SQLGroupByItem($proto21);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="homicidios_municipio";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_homicidios_municipio = createSqlQuery_homicidios_municipio();


	
		;

			

$tdatahomicidios_municipio[".sqlquery"] = $queryData_homicidios_municipio;

$tableEvents["homicidios_municipio"] = new eventsBase;
$tdatahomicidios_municipio[".hasEvents"] = false;

?>