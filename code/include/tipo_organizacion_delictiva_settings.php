<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatipo_organizacion_delictiva = array();
	$tdatatipo_organizacion_delictiva[".truncateText"] = true;
	$tdatatipo_organizacion_delictiva[".NumberOfChars"] = 80;
	$tdatatipo_organizacion_delictiva[".ShortName"] = "tipo_organizacion_delictiva";
	$tdatatipo_organizacion_delictiva[".OwnerID"] = "";
	$tdatatipo_organizacion_delictiva[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelstipo_organizacion_delictiva = array();
$fieldToolTipstipo_organizacion_delictiva = array();
$pageTitlestipo_organizacion_delictiva = array();
$placeHolderstipo_organizacion_delictiva = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipo_organizacion_delictiva["Spanish"] = array();
	$fieldToolTipstipo_organizacion_delictiva["Spanish"] = array();
	$placeHolderstipo_organizacion_delictiva["Spanish"] = array();
	$pageTitlestipo_organizacion_delictiva["Spanish"] = array();
	if (count($fieldToolTipstipo_organizacion_delictiva["Spanish"]))
		$tdatatipo_organizacion_delictiva[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstipo_organizacion_delictiva["English"] = array();
	$fieldToolTipstipo_organizacion_delictiva["English"] = array();
	$placeHolderstipo_organizacion_delictiva["English"] = array();
	$pageTitlestipo_organizacion_delictiva["English"] = array();
	if (count($fieldToolTipstipo_organizacion_delictiva["English"]))
		$tdatatipo_organizacion_delictiva[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstipo_organizacion_delictiva[""] = array();
	$fieldToolTipstipo_organizacion_delictiva[""] = array();
	$placeHolderstipo_organizacion_delictiva[""] = array();
	$pageTitlestipo_organizacion_delictiva[""] = array();
	if (count($fieldToolTipstipo_organizacion_delictiva[""]))
		$tdatatipo_organizacion_delictiva[".isUseToolTips"] = true;
}





$tdatatipo_organizacion_delictiva[".shortTableName"] = "tipo_organizacion_delictiva";
$tdatatipo_organizacion_delictiva[".nSecOptions"] = 0;
$tdatatipo_organizacion_delictiva[".recsPerRowPrint"] = 1;
$tdatatipo_organizacion_delictiva[".mainTableOwnerID"] = "";
$tdatatipo_organizacion_delictiva[".moveNext"] = 1;
$tdatatipo_organizacion_delictiva[".entityType"] = 1;

$tdatatipo_organizacion_delictiva[".strOriginalTableName"] = "carcel";

	



$tdatatipo_organizacion_delictiva[".showAddInPopup"] = false;

$tdatatipo_organizacion_delictiva[".showEditInPopup"] = false;

$tdatatipo_organizacion_delictiva[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatipo_organizacion_delictiva[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatipo_organizacion_delictiva[".fieldsForRegister"] = array();

	$tdatatipo_organizacion_delictiva[".listAjax"] = true;

	$tdatatipo_organizacion_delictiva[".audit"] = false;

	$tdatatipo_organizacion_delictiva[".locking"] = false;



$tdatatipo_organizacion_delictiva[".list"] = true;



$tdatatipo_organizacion_delictiva[".reorderRecordsByHeader"] = true;
$tdatatipo_organizacion_delictiva[".createSortByDropdown"] = true;
$tdatatipo_organizacion_delictiva[".strSortControlSettingsJSON"] = "";




$tdatatipo_organizacion_delictiva[".import"] = true;

$tdatatipo_organizacion_delictiva[".exportTo"] = true;

$tdatatipo_organizacion_delictiva[".printFriendly"] = true;


$tdatatipo_organizacion_delictiva[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatatipo_organizacion_delictiva[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatatipo_organizacion_delictiva[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatatipo_organizacion_delictiva[".searchSaving"] = false;
//

$tdatatipo_organizacion_delictiva[".showSearchPanel"] = true;
		$tdatatipo_organizacion_delictiva[".flexibleSearch"] = true;

$tdatatipo_organizacion_delictiva[".isUseAjaxSuggest"] = true;

$tdatatipo_organizacion_delictiva[".rowHighlite"] = true;





$tdatatipo_organizacion_delictiva[".ajaxCodeSnippetAdded"] = false;

$tdatatipo_organizacion_delictiva[".buttonsAdded"] = false;

$tdatatipo_organizacion_delictiva[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipo_organizacion_delictiva[".isUseTimeForSearch"] = false;





$tdatatipo_organizacion_delictiva[".allSearchFields"] = array();
$tdatatipo_organizacion_delictiva[".filterFields"] = array();
$tdatatipo_organizacion_delictiva[".requiredSearchFields"] = array();






$tdatatipo_organizacion_delictiva[".tableType"] = "list";

$tdatatipo_organizacion_delictiva[".printerPageOrientation"] = 0;
$tdatatipo_organizacion_delictiva[".nPrinterPageScale"] = 100;

$tdatatipo_organizacion_delictiva[".nPrinterSplitRecords"] = 40;

$tdatatipo_organizacion_delictiva[".nPrinterPDFSplitRecords"] = 40;



$tdatatipo_organizacion_delictiva[".geocodingEnabled"] = false;





$tdatatipo_organizacion_delictiva[".listGridLayout"] = 3;

$tdatatipo_organizacion_delictiva[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatatipo_organizacion_delictiva[".pageSize"] = 10;

$tdatatipo_organizacion_delictiva[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatipo_organizacion_delictiva[".strOrderBy"] = $tstrOrderBy;

$tdatatipo_organizacion_delictiva[".orderindexes"] = array();

$tdatatipo_organizacion_delictiva[".sqlHead"] = " ";
$tdatatipo_organizacion_delictiva[".sqlFrom"] = "";
$tdatatipo_organizacion_delictiva[".sqlWhereExpr"] = "";
$tdatatipo_organizacion_delictiva[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipo_organizacion_delictiva[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipo_organizacion_delictiva[".arrGroupsPerPage"] = $arrGPP;

$tdatatipo_organizacion_delictiva[".highlightSearchResults"] = true;

$tableKeystipo_organizacion_delictiva = array();
$tdatatipo_organizacion_delictiva[".Keys"] = $tableKeystipo_organizacion_delictiva;

$tdatatipo_organizacion_delictiva[".listFields"] = array();

$tdatatipo_organizacion_delictiva[".hideMobileList"] = array();


$tdatatipo_organizacion_delictiva[".viewFields"] = array();

$tdatatipo_organizacion_delictiva[".addFields"] = array();

$tdatatipo_organizacion_delictiva[".masterListFields"] = array();

$tdatatipo_organizacion_delictiva[".inlineAddFields"] = array();

$tdatatipo_organizacion_delictiva[".editFields"] = array();

$tdatatipo_organizacion_delictiva[".inlineEditFields"] = array();

$tdatatipo_organizacion_delictiva[".updateSelectedFields"] = array();


$tdatatipo_organizacion_delictiva[".exportFields"] = array();

$tdatatipo_organizacion_delictiva[".importFields"] = array();

$tdatatipo_organizacion_delictiva[".printFields"] = array();



$tables_data["tipo organizacion delictiva"]=&$tdatatipo_organizacion_delictiva;
$field_labels["tipo_organizacion_delictiva"] = &$fieldLabelstipo_organizacion_delictiva;
$fieldToolTips["tipo_organizacion_delictiva"] = &$fieldToolTipstipo_organizacion_delictiva;
$placeHolders["tipo_organizacion_delictiva"] = &$placeHolderstipo_organizacion_delictiva;
$page_titles["tipo_organizacion_delictiva"] = &$pageTitlestipo_organizacion_delictiva;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tipo organizacion delictiva"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tipo organizacion delictiva"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tipo_organizacion_delictiva()
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
$proto0["m_srcTableName"]="tipo organizacion delictiva";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipo_organizacion_delictiva = createSqlQuery_tipo_organizacion_delictiva();


	
		;



$tdatatipo_organizacion_delictiva[".sqlquery"] = $queryData_tipo_organizacion_delictiva;

$tableEvents["tipo organizacion delictiva"] = new eventsBase;
$tdatatipo_organizacion_delictiva[".hasEvents"] = false;

?>