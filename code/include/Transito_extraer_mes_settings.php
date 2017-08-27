<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTransito_extraer_mes = array();
	$tdataTransito_extraer_mes[".truncateText"] = true;
	$tdataTransito_extraer_mes[".NumberOfChars"] = 80;
	$tdataTransito_extraer_mes[".ShortName"] = "Transito_extraer_mes";
	$tdataTransito_extraer_mes[".OwnerID"] = "";
	$tdataTransito_extraer_mes[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsTransito_extraer_mes = array();
$fieldToolTipsTransito_extraer_mes = array();
$pageTitlesTransito_extraer_mes = array();
$placeHoldersTransito_extraer_mes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsTransito_extraer_mes["Spanish"] = array();
	$fieldToolTipsTransito_extraer_mes["Spanish"] = array();
	$placeHoldersTransito_extraer_mes["Spanish"] = array();
	$pageTitlesTransito_extraer_mes["Spanish"] = array();
	if (count($fieldToolTipsTransito_extraer_mes["Spanish"]))
		$tdataTransito_extraer_mes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTransito_extraer_mes["English"] = array();
	$fieldToolTipsTransito_extraer_mes["English"] = array();
	$placeHoldersTransito_extraer_mes["English"] = array();
	$pageTitlesTransito_extraer_mes["English"] = array();
	if (count($fieldToolTipsTransito_extraer_mes["English"]))
		$tdataTransito_extraer_mes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTransito_extraer_mes[""] = array();
	$fieldToolTipsTransito_extraer_mes[""] = array();
	$placeHoldersTransito_extraer_mes[""] = array();
	$pageTitlesTransito_extraer_mes[""] = array();
	if (count($fieldToolTipsTransito_extraer_mes[""]))
		$tdataTransito_extraer_mes[".isUseToolTips"] = true;
}





$tdataTransito_extraer_mes[".shortTableName"] = "Transito_extraer_mes";
$tdataTransito_extraer_mes[".nSecOptions"] = 0;
$tdataTransito_extraer_mes[".recsPerRowPrint"] = 1;
$tdataTransito_extraer_mes[".mainTableOwnerID"] = "";
$tdataTransito_extraer_mes[".moveNext"] = 1;
$tdataTransito_extraer_mes[".entityType"] = 1;

$tdataTransito_extraer_mes[".strOriginalTableName"] = "carcel";

	



$tdataTransito_extraer_mes[".showAddInPopup"] = false;

$tdataTransito_extraer_mes[".showEditInPopup"] = false;

$tdataTransito_extraer_mes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTransito_extraer_mes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTransito_extraer_mes[".fieldsForRegister"] = array();

	$tdataTransito_extraer_mes[".listAjax"] = true;

	$tdataTransito_extraer_mes[".audit"] = false;

	$tdataTransito_extraer_mes[".locking"] = false;



$tdataTransito_extraer_mes[".list"] = true;



$tdataTransito_extraer_mes[".reorderRecordsByHeader"] = true;
$tdataTransito_extraer_mes[".createSortByDropdown"] = true;
$tdataTransito_extraer_mes[".strSortControlSettingsJSON"] = "";




$tdataTransito_extraer_mes[".import"] = true;

$tdataTransito_extraer_mes[".exportTo"] = true;

$tdataTransito_extraer_mes[".printFriendly"] = true;


$tdataTransito_extraer_mes[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataTransito_extraer_mes[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataTransito_extraer_mes[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataTransito_extraer_mes[".searchSaving"] = false;
//

$tdataTransito_extraer_mes[".showSearchPanel"] = true;
		$tdataTransito_extraer_mes[".flexibleSearch"] = true;

$tdataTransito_extraer_mes[".isUseAjaxSuggest"] = true;

$tdataTransito_extraer_mes[".rowHighlite"] = true;





$tdataTransito_extraer_mes[".ajaxCodeSnippetAdded"] = false;

$tdataTransito_extraer_mes[".buttonsAdded"] = false;

$tdataTransito_extraer_mes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTransito_extraer_mes[".isUseTimeForSearch"] = false;





$tdataTransito_extraer_mes[".allSearchFields"] = array();
$tdataTransito_extraer_mes[".filterFields"] = array();
$tdataTransito_extraer_mes[".requiredSearchFields"] = array();






$tdataTransito_extraer_mes[".tableType"] = "list";

$tdataTransito_extraer_mes[".printerPageOrientation"] = 0;
$tdataTransito_extraer_mes[".nPrinterPageScale"] = 100;

$tdataTransito_extraer_mes[".nPrinterSplitRecords"] = 40;

$tdataTransito_extraer_mes[".nPrinterPDFSplitRecords"] = 40;



$tdataTransito_extraer_mes[".geocodingEnabled"] = false;





$tdataTransito_extraer_mes[".listGridLayout"] = 3;

$tdataTransito_extraer_mes[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdataTransito_extraer_mes[".pageSize"] = 10;

$tdataTransito_extraer_mes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTransito_extraer_mes[".strOrderBy"] = $tstrOrderBy;

$tdataTransito_extraer_mes[".orderindexes"] = array();

$tdataTransito_extraer_mes[".sqlHead"] = " ";
$tdataTransito_extraer_mes[".sqlFrom"] = "";
$tdataTransito_extraer_mes[".sqlWhereExpr"] = "";
$tdataTransito_extraer_mes[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTransito_extraer_mes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTransito_extraer_mes[".arrGroupsPerPage"] = $arrGPP;

$tdataTransito_extraer_mes[".highlightSearchResults"] = true;

$tableKeysTransito_extraer_mes = array();
$tdataTransito_extraer_mes[".Keys"] = $tableKeysTransito_extraer_mes;

$tdataTransito_extraer_mes[".listFields"] = array();

$tdataTransito_extraer_mes[".hideMobileList"] = array();


$tdataTransito_extraer_mes[".viewFields"] = array();

$tdataTransito_extraer_mes[".addFields"] = array();

$tdataTransito_extraer_mes[".masterListFields"] = array();

$tdataTransito_extraer_mes[".inlineAddFields"] = array();

$tdataTransito_extraer_mes[".editFields"] = array();

$tdataTransito_extraer_mes[".inlineEditFields"] = array();

$tdataTransito_extraer_mes[".updateSelectedFields"] = array();


$tdataTransito_extraer_mes[".exportFields"] = array();

$tdataTransito_extraer_mes[".importFields"] = array();

$tdataTransito_extraer_mes[".printFields"] = array();



$tables_data["Transito extraer mes"]=&$tdataTransito_extraer_mes;
$field_labels["Transito_extraer_mes"] = &$fieldLabelsTransito_extraer_mes;
$fieldToolTips["Transito_extraer_mes"] = &$fieldToolTipsTransito_extraer_mes;
$placeHolders["Transito_extraer_mes"] = &$placeHoldersTransito_extraer_mes;
$page_titles["Transito_extraer_mes"] = &$pageTitlesTransito_extraer_mes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Transito extraer mes"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Transito extraer mes"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Transito_extraer_mes()
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
$proto0["m_srcTableName"]="Transito extraer mes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Transito_extraer_mes = createSqlQuery_Transito_extraer_mes();


	
		;



$tdataTransito_extraer_mes[".sqlquery"] = $queryData_Transito_extraer_mes;

$tableEvents["Transito extraer mes"] = new eventsBase;
$tdataTransito_extraer_mes[".hasEvents"] = false;

?>