<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL = array();
	$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".truncateText"] = true;
	$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".NumberOfChars"] = 80;
	$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".ShortName"] = "SUPRIMIR_REGISTROS_ANEXO_CARCEL";
	$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".OwnerID"] = "";
	$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".OriginalTable"] = "anexar_carcel";

//	field labels
$fieldLabelsSUPRIMIR_REGISTROS_ANEXO_CARCEL = array();
$fieldToolTipsSUPRIMIR_REGISTROS_ANEXO_CARCEL = array();
$pageTitlesSUPRIMIR_REGISTROS_ANEXO_CARCEL = array();
$placeHoldersSUPRIMIR_REGISTROS_ANEXO_CARCEL = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsSUPRIMIR_REGISTROS_ANEXO_CARCEL["Spanish"] = array();
	$fieldToolTipsSUPRIMIR_REGISTROS_ANEXO_CARCEL["Spanish"] = array();
	$placeHoldersSUPRIMIR_REGISTROS_ANEXO_CARCEL["Spanish"] = array();
	$pageTitlesSUPRIMIR_REGISTROS_ANEXO_CARCEL["Spanish"] = array();
	if (count($fieldToolTipsSUPRIMIR_REGISTROS_ANEXO_CARCEL["Spanish"]))
		$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSUPRIMIR_REGISTROS_ANEXO_CARCEL["English"] = array();
	$fieldToolTipsSUPRIMIR_REGISTROS_ANEXO_CARCEL["English"] = array();
	$placeHoldersSUPRIMIR_REGISTROS_ANEXO_CARCEL["English"] = array();
	$pageTitlesSUPRIMIR_REGISTROS_ANEXO_CARCEL["English"] = array();
	if (count($fieldToolTipsSUPRIMIR_REGISTROS_ANEXO_CARCEL["English"]))
		$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSUPRIMIR_REGISTROS_ANEXO_CARCEL[""] = array();
	$fieldToolTipsSUPRIMIR_REGISTROS_ANEXO_CARCEL[""] = array();
	$placeHoldersSUPRIMIR_REGISTROS_ANEXO_CARCEL[""] = array();
	$pageTitlesSUPRIMIR_REGISTROS_ANEXO_CARCEL[""] = array();
	if (count($fieldToolTipsSUPRIMIR_REGISTROS_ANEXO_CARCEL[""]))
		$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".isUseToolTips"] = true;
}


	$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".NCSearch"] = true;



$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".shortTableName"] = "SUPRIMIR_REGISTROS_ANEXO_CARCEL";
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".nSecOptions"] = 0;
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".recsPerRowPrint"] = 1;
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".mainTableOwnerID"] = "";
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".moveNext"] = 1;
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".entityType"] = 1;

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".strOriginalTableName"] = "anexar_carcel";

	



$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".showAddInPopup"] = false;

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".showEditInPopup"] = false;

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".fieldsForRegister"] = array();

	$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".listAjax"] = true;

	$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".audit"] = false;

	$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".locking"] = false;



$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".list"] = true;



$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".reorderRecordsByHeader"] = true;
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".createSortByDropdown"] = true;
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".strSortControlSettingsJSON"] = "";




$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".import"] = true;

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".exportTo"] = true;

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".printFriendly"] = true;


$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".searchSaving"] = false;
//

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".showSearchPanel"] = true;
		$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".flexibleSearch"] = true;

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".isUseAjaxSuggest"] = true;

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".rowHighlite"] = true;





$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".ajaxCodeSnippetAdded"] = false;

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".buttonsAdded"] = false;

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".isUseTimeForSearch"] = false;





$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".allSearchFields"] = array();
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".filterFields"] = array();
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".requiredSearchFields"] = array();






$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".tableType"] = "list";

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".printerPageOrientation"] = 0;
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".nPrinterPageScale"] = 100;

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".nPrinterSplitRecords"] = 40;

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".nPrinterPDFSplitRecords"] = 40;



$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".geocodingEnabled"] = false;





$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".pageSize"] = 20;

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".strOrderBy"] = $tstrOrderBy;

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".orderindexes"] = array();

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".sqlHead"] = " ";
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".sqlFrom"] = "";
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".sqlWhereExpr"] = "";
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".arrGroupsPerPage"] = $arrGPP;

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".highlightSearchResults"] = true;

$tableKeysSUPRIMIR_REGISTROS_ANEXO_CARCEL = array();
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".Keys"] = $tableKeysSUPRIMIR_REGISTROS_ANEXO_CARCEL;

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".listFields"] = array();

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".hideMobileList"] = array();


$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".viewFields"] = array();

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".addFields"] = array();

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".masterListFields"] = array();

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".inlineAddFields"] = array();

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".editFields"] = array();

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".inlineEditFields"] = array();

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".updateSelectedFields"] = array();


$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".exportFields"] = array();

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".importFields"] = array();

$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".printFields"] = array();



$tables_data["SUPRIMIR REGISTROS ANEXO CARCEL"]=&$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL;
$field_labels["SUPRIMIR_REGISTROS_ANEXO_CARCEL"] = &$fieldLabelsSUPRIMIR_REGISTROS_ANEXO_CARCEL;
$fieldToolTips["SUPRIMIR_REGISTROS_ANEXO_CARCEL"] = &$fieldToolTipsSUPRIMIR_REGISTROS_ANEXO_CARCEL;
$placeHolders["SUPRIMIR_REGISTROS_ANEXO_CARCEL"] = &$placeHoldersSUPRIMIR_REGISTROS_ANEXO_CARCEL;
$page_titles["SUPRIMIR_REGISTROS_ANEXO_CARCEL"] = &$pageTitlesSUPRIMIR_REGISTROS_ANEXO_CARCEL;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["SUPRIMIR REGISTROS ANEXO CARCEL"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["SUPRIMIR REGISTROS ANEXO CARCEL"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_SUPRIMIR_REGISTROS_ANEXO_CARCEL()
{
$proto0=array();
$proto0["m_strHead"] = "";
$proto0["m_strFieldList"] = "";
$proto0["m_strFrom"] = "";
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
$proto0["m_fromlist"] = array();
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="SUPRIMIR REGISTROS ANEXO CARCEL";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_SUPRIMIR_REGISTROS_ANEXO_CARCEL = createSqlQuery_SUPRIMIR_REGISTROS_ANEXO_CARCEL();


	
		;



$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".sqlquery"] = $queryData_SUPRIMIR_REGISTROS_ANEXO_CARCEL;

$tableEvents["SUPRIMIR REGISTROS ANEXO CARCEL"] = new eventsBase;
$tdataSUPRIMIR_REGISTROS_ANEXO_CARCEL[".hasEvents"] = false;

?>