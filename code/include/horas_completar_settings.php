<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahoras_completar = array();
	$tdatahoras_completar[".truncateText"] = true;
	$tdatahoras_completar[".NumberOfChars"] = 80;
	$tdatahoras_completar[".ShortName"] = "horas_completar";
	$tdatahoras_completar[".OwnerID"] = "";
	$tdatahoras_completar[".OriginalTable"] = "horas_completar";

//	field labels
$fieldLabelshoras_completar = array();
$fieldToolTipshoras_completar = array();
$pageTitleshoras_completar = array();
$placeHoldershoras_completar = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshoras_completar["Spanish"] = array();
	$fieldToolTipshoras_completar["Spanish"] = array();
	$placeHoldershoras_completar["Spanish"] = array();
	$pageTitleshoras_completar["Spanish"] = array();
	$fieldLabelshoras_completar["Spanish"]["correlativo"] = "Correlativo";
	$fieldToolTipshoras_completar["Spanish"]["correlativo"] = "";
	$placeHoldershoras_completar["Spanish"]["correlativo"] = "";
	$fieldLabelshoras_completar["Spanish"]["hora_hecho"] = "Hora Hecho";
	$fieldToolTipshoras_completar["Spanish"]["hora_hecho"] = "";
	$placeHoldershoras_completar["Spanish"]["hora_hecho"] = "";
	$fieldLabelshoras_completar["Spanish"]["rango_hoa"] = "Rango Hoa";
	$fieldToolTipshoras_completar["Spanish"]["rango_hoa"] = "";
	$placeHoldershoras_completar["Spanish"]["rango_hoa"] = "";
	if (count($fieldToolTipshoras_completar["Spanish"]))
		$tdatahoras_completar[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshoras_completar["English"] = array();
	$fieldToolTipshoras_completar["English"] = array();
	$placeHoldershoras_completar["English"] = array();
	$pageTitleshoras_completar["English"] = array();
	$fieldLabelshoras_completar["English"]["correlativo"] = "Correlativo";
	$fieldToolTipshoras_completar["English"]["correlativo"] = "";
	$placeHoldershoras_completar["English"]["correlativo"] = "";
	$fieldLabelshoras_completar["English"]["hora_hecho"] = "Hora Hecho";
	$fieldToolTipshoras_completar["English"]["hora_hecho"] = "";
	$placeHoldershoras_completar["English"]["hora_hecho"] = "";
	$fieldLabelshoras_completar["English"]["rango_hoa"] = "Rango Hoa";
	$fieldToolTipshoras_completar["English"]["rango_hoa"] = "";
	$placeHoldershoras_completar["English"]["rango_hoa"] = "";
	if (count($fieldToolTipshoras_completar["English"]))
		$tdatahoras_completar[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshoras_completar[""] = array();
	$fieldToolTipshoras_completar[""] = array();
	$placeHoldershoras_completar[""] = array();
	$pageTitleshoras_completar[""] = array();
	if (count($fieldToolTipshoras_completar[""]))
		$tdatahoras_completar[".isUseToolTips"] = true;
}





$tdatahoras_completar[".shortTableName"] = "horas_completar";
$tdatahoras_completar[".nSecOptions"] = 0;
$tdatahoras_completar[".recsPerRowPrint"] = 1;
$tdatahoras_completar[".mainTableOwnerID"] = "";
$tdatahoras_completar[".moveNext"] = 1;
$tdatahoras_completar[".entityType"] = 1;

$tdatahoras_completar[".strOriginalTableName"] = "horas_completar";

	



$tdatahoras_completar[".showAddInPopup"] = false;

$tdatahoras_completar[".showEditInPopup"] = false;

$tdatahoras_completar[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahoras_completar[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahoras_completar[".fieldsForRegister"] = array();

	$tdatahoras_completar[".listAjax"] = true;

	$tdatahoras_completar[".audit"] = false;

	$tdatahoras_completar[".locking"] = false;



$tdatahoras_completar[".list"] = true;



$tdatahoras_completar[".reorderRecordsByHeader"] = true;
$tdatahoras_completar[".createSortByDropdown"] = true;
$tdatahoras_completar[".strSortControlSettingsJSON"] = "";




$tdatahoras_completar[".import"] = true;

$tdatahoras_completar[".exportTo"] = true;

$tdatahoras_completar[".printFriendly"] = true;


$tdatahoras_completar[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatahoras_completar[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatahoras_completar[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatahoras_completar[".searchSaving"] = false;
//

$tdatahoras_completar[".showSearchPanel"] = true;
		$tdatahoras_completar[".flexibleSearch"] = true;

$tdatahoras_completar[".isUseAjaxSuggest"] = true;

$tdatahoras_completar[".rowHighlite"] = true;





$tdatahoras_completar[".ajaxCodeSnippetAdded"] = false;

$tdatahoras_completar[".buttonsAdded"] = false;

$tdatahoras_completar[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahoras_completar[".isUseTimeForSearch"] = false;





$tdatahoras_completar[".allSearchFields"] = array();
$tdatahoras_completar[".filterFields"] = array();
$tdatahoras_completar[".requiredSearchFields"] = array();

$tdatahoras_completar[".allSearchFields"][] = "correlativo";
	$tdatahoras_completar[".allSearchFields"][] = "hora_hecho";
	$tdatahoras_completar[".allSearchFields"][] = "rango_hoa";
	

$tdatahoras_completar[".googleLikeFields"] = array();
$tdatahoras_completar[".googleLikeFields"][] = "correlativo";
$tdatahoras_completar[".googleLikeFields"][] = "hora_hecho";
$tdatahoras_completar[".googleLikeFields"][] = "rango_hoa";


$tdatahoras_completar[".advSearchFields"] = array();
$tdatahoras_completar[".advSearchFields"][] = "correlativo";
$tdatahoras_completar[".advSearchFields"][] = "hora_hecho";
$tdatahoras_completar[".advSearchFields"][] = "rango_hoa";

$tdatahoras_completar[".tableType"] = "list";

$tdatahoras_completar[".printerPageOrientation"] = 0;
$tdatahoras_completar[".nPrinterPageScale"] = 100;

$tdatahoras_completar[".nPrinterSplitRecords"] = 40;

$tdatahoras_completar[".nPrinterPDFSplitRecords"] = 40;



$tdatahoras_completar[".geocodingEnabled"] = false;





$tdatahoras_completar[".listGridLayout"] = 3;

$tdatahoras_completar[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatahoras_completar[".pageSize"] = 10;

$tdatahoras_completar[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahoras_completar[".strOrderBy"] = $tstrOrderBy;

$tdatahoras_completar[".orderindexes"] = array();

$tdatahoras_completar[".sqlHead"] = "SELECT correlativo,  	hora_hecho,  	rango_hoa";
$tdatahoras_completar[".sqlFrom"] = "FROM horas_completar";
$tdatahoras_completar[".sqlWhereExpr"] = "";
$tdatahoras_completar[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahoras_completar[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahoras_completar[".arrGroupsPerPage"] = $arrGPP;

$tdatahoras_completar[".highlightSearchResults"] = true;

$tableKeyshoras_completar = array();
$tdatahoras_completar[".Keys"] = $tableKeyshoras_completar;

$tdatahoras_completar[".listFields"] = array();
$tdatahoras_completar[".listFields"][] = "correlativo";
$tdatahoras_completar[".listFields"][] = "hora_hecho";
$tdatahoras_completar[".listFields"][] = "rango_hoa";

$tdatahoras_completar[".hideMobileList"] = array();


$tdatahoras_completar[".viewFields"] = array();
$tdatahoras_completar[".viewFields"][] = "correlativo";
$tdatahoras_completar[".viewFields"][] = "hora_hecho";
$tdatahoras_completar[".viewFields"][] = "rango_hoa";

$tdatahoras_completar[".addFields"] = array();
$tdatahoras_completar[".addFields"][] = "correlativo";
$tdatahoras_completar[".addFields"][] = "hora_hecho";
$tdatahoras_completar[".addFields"][] = "rango_hoa";

$tdatahoras_completar[".masterListFields"] = array();
$tdatahoras_completar[".masterListFields"][] = "correlativo";
$tdatahoras_completar[".masterListFields"][] = "hora_hecho";
$tdatahoras_completar[".masterListFields"][] = "rango_hoa";

$tdatahoras_completar[".inlineAddFields"] = array();
$tdatahoras_completar[".inlineAddFields"][] = "correlativo";
$tdatahoras_completar[".inlineAddFields"][] = "hora_hecho";
$tdatahoras_completar[".inlineAddFields"][] = "rango_hoa";

$tdatahoras_completar[".editFields"] = array();
$tdatahoras_completar[".editFields"][] = "correlativo";
$tdatahoras_completar[".editFields"][] = "hora_hecho";
$tdatahoras_completar[".editFields"][] = "rango_hoa";

$tdatahoras_completar[".inlineEditFields"] = array();
$tdatahoras_completar[".inlineEditFields"][] = "correlativo";
$tdatahoras_completar[".inlineEditFields"][] = "hora_hecho";
$tdatahoras_completar[".inlineEditFields"][] = "rango_hoa";

$tdatahoras_completar[".updateSelectedFields"] = array();
$tdatahoras_completar[".updateSelectedFields"][] = "correlativo";
$tdatahoras_completar[".updateSelectedFields"][] = "hora_hecho";
$tdatahoras_completar[".updateSelectedFields"][] = "rango_hoa";


$tdatahoras_completar[".exportFields"] = array();
$tdatahoras_completar[".exportFields"][] = "correlativo";
$tdatahoras_completar[".exportFields"][] = "hora_hecho";
$tdatahoras_completar[".exportFields"][] = "rango_hoa";

$tdatahoras_completar[".importFields"] = array();
$tdatahoras_completar[".importFields"][] = "correlativo";
$tdatahoras_completar[".importFields"][] = "hora_hecho";
$tdatahoras_completar[".importFields"][] = "rango_hoa";

$tdatahoras_completar[".printFields"] = array();
$tdatahoras_completar[".printFields"][] = "correlativo";
$tdatahoras_completar[".printFields"][] = "hora_hecho";
$tdatahoras_completar[".printFields"][] = "rango_hoa";

//	correlativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "correlativo";
	$fdata["GoodName"] = "correlativo";
	$fdata["ownerTable"] = "horas_completar";
	$fdata["Label"] = GetFieldLabel("horas_completar","correlativo");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "correlativo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "correlativo";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahoras_completar["correlativo"] = $fdata;
//	hora_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "hora_hecho";
	$fdata["GoodName"] = "hora_hecho";
	$fdata["ownerTable"] = "horas_completar";
	$fdata["Label"] = GetFieldLabel("horas_completar","hora_hecho");
	$fdata["FieldType"] = 7;

	
	
	
			
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

		$fdata["strField"] = "hora_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hora_hecho";

	
	
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

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatahoras_completar["hora_hecho"] = $fdata;
//	rango_hoa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "rango_hoa";
	$fdata["GoodName"] = "rango_hoa";
	$fdata["ownerTable"] = "horas_completar";
	$fdata["Label"] = GetFieldLabel("horas_completar","rango_hoa");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "rango_hoa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rango_hoa";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahoras_completar["rango_hoa"] = $fdata;


$tables_data["horas_completar"]=&$tdatahoras_completar;
$field_labels["horas_completar"] = &$fieldLabelshoras_completar;
$fieldToolTips["horas_completar"] = &$fieldToolTipshoras_completar;
$placeHolders["horas_completar"] = &$placeHoldershoras_completar;
$page_titles["horas_completar"] = &$pageTitleshoras_completar;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["horas_completar"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["horas_completar"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_horas_completar()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "correlativo,  	hora_hecho,  	rango_hoa";
$proto0["m_strFrom"] = "FROM horas_completar";
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
	"m_strName" => "correlativo",
	"m_strTable" => "horas_completar",
	"m_srcTableName" => "horas_completar"
));

$proto6["m_sql"] = "correlativo";
$proto6["m_srcTableName"] = "horas_completar";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_hecho",
	"m_strTable" => "horas_completar",
	"m_srcTableName" => "horas_completar"
));

$proto8["m_sql"] = "hora_hecho";
$proto8["m_srcTableName"] = "horas_completar";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "rango_hoa",
	"m_strTable" => "horas_completar",
	"m_srcTableName" => "horas_completar"
));

$proto10["m_sql"] = "rango_hoa";
$proto10["m_srcTableName"] = "horas_completar";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "horas_completar";
$proto13["m_srcTableName"] = "horas_completar";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "correlativo";
$proto13["m_columns"][] = "hora_hecho";
$proto13["m_columns"][] = "rango_hoa";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "horas_completar";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "horas_completar";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="horas_completar";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_horas_completar = createSqlQuery_horas_completar();


	
		;

			

$tdatahoras_completar[".sqlquery"] = $queryData_horas_completar;

$tableEvents["horas_completar"] = new eventsBase;
$tdatahoras_completar[".hasEvents"] = false;

?>