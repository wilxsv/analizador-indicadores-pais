<?php
require_once(getabspath("classes/cipherer.php"));




$tdatames_corregido_retornado = array();
	$tdatames_corregido_retornado[".truncateText"] = true;
	$tdatames_corregido_retornado[".NumberOfChars"] = 80;
	$tdatames_corregido_retornado[".ShortName"] = "mes_corregido_retornado";
	$tdatames_corregido_retornado[".OwnerID"] = "";
	$tdatames_corregido_retornado[".OriginalTable"] = "hechos_delictivos1";

//	field labels
$fieldLabelsmes_corregido_retornado = array();
$fieldToolTipsmes_corregido_retornado = array();
$pageTitlesmes_corregido_retornado = array();
$placeHoldersmes_corregido_retornado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmes_corregido_retornado["Spanish"] = array();
	$fieldToolTipsmes_corregido_retornado["Spanish"] = array();
	$placeHoldersmes_corregido_retornado["Spanish"] = array();
	$pageTitlesmes_corregido_retornado["Spanish"] = array();
	if (count($fieldToolTipsmes_corregido_retornado["Spanish"]))
		$tdatames_corregido_retornado[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmes_corregido_retornado["English"] = array();
	$fieldToolTipsmes_corregido_retornado["English"] = array();
	$placeHoldersmes_corregido_retornado["English"] = array();
	$pageTitlesmes_corregido_retornado["English"] = array();
	if (count($fieldToolTipsmes_corregido_retornado["English"]))
		$tdatames_corregido_retornado[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmes_corregido_retornado[""] = array();
	$fieldToolTipsmes_corregido_retornado[""] = array();
	$placeHoldersmes_corregido_retornado[""] = array();
	$pageTitlesmes_corregido_retornado[""] = array();
	if (count($fieldToolTipsmes_corregido_retornado[""]))
		$tdatames_corregido_retornado[".isUseToolTips"] = true;
}





$tdatames_corregido_retornado[".shortTableName"] = "mes_corregido_retornado";
$tdatames_corregido_retornado[".nSecOptions"] = 0;
$tdatames_corregido_retornado[".recsPerRowPrint"] = 1;
$tdatames_corregido_retornado[".mainTableOwnerID"] = "";
$tdatames_corregido_retornado[".moveNext"] = 1;
$tdatames_corregido_retornado[".entityType"] = 1;

$tdatames_corregido_retornado[".strOriginalTableName"] = "hechos_delictivos1";

	



$tdatames_corregido_retornado[".showAddInPopup"] = false;

$tdatames_corregido_retornado[".showEditInPopup"] = false;

$tdatames_corregido_retornado[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatames_corregido_retornado[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatames_corregido_retornado[".fieldsForRegister"] = array();

	$tdatames_corregido_retornado[".listAjax"] = true;

	$tdatames_corregido_retornado[".audit"] = false;

	$tdatames_corregido_retornado[".locking"] = false;



$tdatames_corregido_retornado[".list"] = true;



$tdatames_corregido_retornado[".reorderRecordsByHeader"] = true;
$tdatames_corregido_retornado[".createSortByDropdown"] = true;
$tdatames_corregido_retornado[".strSortControlSettingsJSON"] = "";




$tdatames_corregido_retornado[".import"] = true;

$tdatames_corregido_retornado[".exportTo"] = true;

$tdatames_corregido_retornado[".printFriendly"] = true;


$tdatames_corregido_retornado[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatames_corregido_retornado[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatames_corregido_retornado[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatames_corregido_retornado[".searchSaving"] = false;
//

$tdatames_corregido_retornado[".showSearchPanel"] = true;
		$tdatames_corregido_retornado[".flexibleSearch"] = true;

$tdatames_corregido_retornado[".isUseAjaxSuggest"] = true;

$tdatames_corregido_retornado[".rowHighlite"] = true;





$tdatames_corregido_retornado[".ajaxCodeSnippetAdded"] = false;

$tdatames_corregido_retornado[".buttonsAdded"] = false;

$tdatames_corregido_retornado[".addPageEvents"] = false;

// use timepicker for search panel
$tdatames_corregido_retornado[".isUseTimeForSearch"] = false;





$tdatames_corregido_retornado[".allSearchFields"] = array();
$tdatames_corregido_retornado[".filterFields"] = array();
$tdatames_corregido_retornado[".requiredSearchFields"] = array();






$tdatames_corregido_retornado[".tableType"] = "list";

$tdatames_corregido_retornado[".printerPageOrientation"] = 0;
$tdatames_corregido_retornado[".nPrinterPageScale"] = 100;

$tdatames_corregido_retornado[".nPrinterSplitRecords"] = 40;

$tdatames_corregido_retornado[".nPrinterPDFSplitRecords"] = 40;



$tdatames_corregido_retornado[".geocodingEnabled"] = false;





$tdatames_corregido_retornado[".listGridLayout"] = 3;

$tdatames_corregido_retornado[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatames_corregido_retornado[".pageSize"] = 10;

$tdatames_corregido_retornado[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatames_corregido_retornado[".strOrderBy"] = $tstrOrderBy;

$tdatames_corregido_retornado[".orderindexes"] = array();

$tdatames_corregido_retornado[".sqlHead"] = " ";
$tdatames_corregido_retornado[".sqlFrom"] = "";
$tdatames_corregido_retornado[".sqlWhereExpr"] = "";
$tdatames_corregido_retornado[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatames_corregido_retornado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatames_corregido_retornado[".arrGroupsPerPage"] = $arrGPP;

$tdatames_corregido_retornado[".highlightSearchResults"] = true;

$tableKeysmes_corregido_retornado = array();
$tdatames_corregido_retornado[".Keys"] = $tableKeysmes_corregido_retornado;

$tdatames_corregido_retornado[".listFields"] = array();

$tdatames_corregido_retornado[".hideMobileList"] = array();


$tdatames_corregido_retornado[".viewFields"] = array();

$tdatames_corregido_retornado[".addFields"] = array();

$tdatames_corregido_retornado[".masterListFields"] = array();

$tdatames_corregido_retornado[".inlineAddFields"] = array();

$tdatames_corregido_retornado[".editFields"] = array();

$tdatames_corregido_retornado[".inlineEditFields"] = array();

$tdatames_corregido_retornado[".updateSelectedFields"] = array();


$tdatames_corregido_retornado[".exportFields"] = array();

$tdatames_corregido_retornado[".importFields"] = array();

$tdatames_corregido_retornado[".printFields"] = array();



$tables_data["mes corregido retornado"]=&$tdatames_corregido_retornado;
$field_labels["mes_corregido_retornado"] = &$fieldLabelsmes_corregido_retornado;
$fieldToolTips["mes_corregido_retornado"] = &$fieldToolTipsmes_corregido_retornado;
$placeHolders["mes_corregido_retornado"] = &$placeHoldersmes_corregido_retornado;
$page_titles["mes_corregido_retornado"] = &$pageTitlesmes_corregido_retornado;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mes corregido retornado"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mes corregido retornado"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mes_corregido_retornado()
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
$proto0["m_srcTableName"]="mes corregido retornado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mes_corregido_retornado = createSqlQuery_mes_corregido_retornado();


	
		;



$tdatames_corregido_retornado[".sqlquery"] = $queryData_mes_corregido_retornado;

$tableEvents["mes corregido retornado"] = new eventsBase;
$tdatames_corregido_retornado[".hasEvents"] = false;

?>