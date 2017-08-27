<?php
require_once(getabspath("classes/cipherer.php"));




$tdatames_corregido = array();
	$tdatames_corregido[".truncateText"] = true;
	$tdatames_corregido[".NumberOfChars"] = 80;
	$tdatames_corregido[".ShortName"] = "mes_corregido";
	$tdatames_corregido[".OwnerID"] = "";
	$tdatames_corregido[".OriginalTable"] = "hechos_delictivos1";

//	field labels
$fieldLabelsmes_corregido = array();
$fieldToolTipsmes_corregido = array();
$pageTitlesmes_corregido = array();
$placeHoldersmes_corregido = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmes_corregido["Spanish"] = array();
	$fieldToolTipsmes_corregido["Spanish"] = array();
	$placeHoldersmes_corregido["Spanish"] = array();
	$pageTitlesmes_corregido["Spanish"] = array();
	if (count($fieldToolTipsmes_corregido["Spanish"]))
		$tdatames_corregido[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmes_corregido["English"] = array();
	$fieldToolTipsmes_corregido["English"] = array();
	$placeHoldersmes_corregido["English"] = array();
	$pageTitlesmes_corregido["English"] = array();
	if (count($fieldToolTipsmes_corregido["English"]))
		$tdatames_corregido[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmes_corregido[""] = array();
	$fieldToolTipsmes_corregido[""] = array();
	$placeHoldersmes_corregido[""] = array();
	$pageTitlesmes_corregido[""] = array();
	if (count($fieldToolTipsmes_corregido[""]))
		$tdatames_corregido[".isUseToolTips"] = true;
}





$tdatames_corregido[".shortTableName"] = "mes_corregido";
$tdatames_corregido[".nSecOptions"] = 0;
$tdatames_corregido[".recsPerRowPrint"] = 1;
$tdatames_corregido[".mainTableOwnerID"] = "";
$tdatames_corregido[".moveNext"] = 1;
$tdatames_corregido[".entityType"] = 1;

$tdatames_corregido[".strOriginalTableName"] = "hechos_delictivos1";

	



$tdatames_corregido[".showAddInPopup"] = false;

$tdatames_corregido[".showEditInPopup"] = false;

$tdatames_corregido[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatames_corregido[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatames_corregido[".fieldsForRegister"] = array();

	$tdatames_corregido[".listAjax"] = true;

	$tdatames_corregido[".audit"] = false;

	$tdatames_corregido[".locking"] = false;



$tdatames_corregido[".list"] = true;



$tdatames_corregido[".reorderRecordsByHeader"] = true;
$tdatames_corregido[".createSortByDropdown"] = true;
$tdatames_corregido[".strSortControlSettingsJSON"] = "";




$tdatames_corregido[".import"] = true;

$tdatames_corregido[".exportTo"] = true;

$tdatames_corregido[".printFriendly"] = true;


$tdatames_corregido[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatames_corregido[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatames_corregido[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatames_corregido[".searchSaving"] = false;
//

$tdatames_corregido[".showSearchPanel"] = true;
		$tdatames_corregido[".flexibleSearch"] = true;

$tdatames_corregido[".isUseAjaxSuggest"] = true;

$tdatames_corregido[".rowHighlite"] = true;





$tdatames_corregido[".ajaxCodeSnippetAdded"] = false;

$tdatames_corregido[".buttonsAdded"] = false;

$tdatames_corregido[".addPageEvents"] = false;

// use timepicker for search panel
$tdatames_corregido[".isUseTimeForSearch"] = false;





$tdatames_corregido[".allSearchFields"] = array();
$tdatames_corregido[".filterFields"] = array();
$tdatames_corregido[".requiredSearchFields"] = array();






$tdatames_corregido[".tableType"] = "list";

$tdatames_corregido[".printerPageOrientation"] = 0;
$tdatames_corregido[".nPrinterPageScale"] = 100;

$tdatames_corregido[".nPrinterSplitRecords"] = 40;

$tdatames_corregido[".nPrinterPDFSplitRecords"] = 40;



$tdatames_corregido[".geocodingEnabled"] = false;





$tdatames_corregido[".listGridLayout"] = 3;

$tdatames_corregido[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatames_corregido[".pageSize"] = 10;

$tdatames_corregido[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatames_corregido[".strOrderBy"] = $tstrOrderBy;

$tdatames_corregido[".orderindexes"] = array();

$tdatames_corregido[".sqlHead"] = " ";
$tdatames_corregido[".sqlFrom"] = "";
$tdatames_corregido[".sqlWhereExpr"] = "";
$tdatames_corregido[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatames_corregido[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatames_corregido[".arrGroupsPerPage"] = $arrGPP;

$tdatames_corregido[".highlightSearchResults"] = true;

$tableKeysmes_corregido = array();
$tdatames_corregido[".Keys"] = $tableKeysmes_corregido;

$tdatames_corregido[".listFields"] = array();

$tdatames_corregido[".hideMobileList"] = array();


$tdatames_corregido[".viewFields"] = array();

$tdatames_corregido[".addFields"] = array();

$tdatames_corregido[".masterListFields"] = array();

$tdatames_corregido[".inlineAddFields"] = array();

$tdatames_corregido[".editFields"] = array();

$tdatames_corregido[".inlineEditFields"] = array();

$tdatames_corregido[".updateSelectedFields"] = array();


$tdatames_corregido[".exportFields"] = array();

$tdatames_corregido[".importFields"] = array();

$tdatames_corregido[".printFields"] = array();



$tables_data["mes_corregido"]=&$tdatames_corregido;
$field_labels["mes_corregido"] = &$fieldLabelsmes_corregido;
$fieldToolTips["mes_corregido"] = &$fieldToolTipsmes_corregido;
$placeHolders["mes_corregido"] = &$placeHoldersmes_corregido;
$page_titles["mes_corregido"] = &$pageTitlesmes_corregido;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mes_corregido"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mes_corregido"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mes_corregido()
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
$proto0["m_srcTableName"]="mes_corregido";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mes_corregido = createSqlQuery_mes_corregido();


	
		;



$tdatames_corregido[".sqlquery"] = $queryData_mes_corregido;

$tableEvents["mes_corregido"] = new eventsBase;
$tdatames_corregido[".hasEvents"] = false;

?>