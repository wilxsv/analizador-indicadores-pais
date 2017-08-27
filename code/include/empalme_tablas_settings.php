<?php
require_once(getabspath("classes/cipherer.php"));




$tdataempalme_tablas = array();
	$tdataempalme_tablas[".truncateText"] = true;
	$tdataempalme_tablas[".NumberOfChars"] = 80;
	$tdataempalme_tablas[".ShortName"] = "empalme_tablas";
	$tdataempalme_tablas[".OwnerID"] = "";
	$tdataempalme_tablas[".OriginalTable"] = "hechos_delictivos1";

//	field labels
$fieldLabelsempalme_tablas = array();
$fieldToolTipsempalme_tablas = array();
$pageTitlesempalme_tablas = array();
$placeHoldersempalme_tablas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsempalme_tablas["Spanish"] = array();
	$fieldToolTipsempalme_tablas["Spanish"] = array();
	$placeHoldersempalme_tablas["Spanish"] = array();
	$pageTitlesempalme_tablas["Spanish"] = array();
	if (count($fieldToolTipsempalme_tablas["Spanish"]))
		$tdataempalme_tablas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsempalme_tablas["English"] = array();
	$fieldToolTipsempalme_tablas["English"] = array();
	$placeHoldersempalme_tablas["English"] = array();
	$pageTitlesempalme_tablas["English"] = array();
	if (count($fieldToolTipsempalme_tablas["English"]))
		$tdataempalme_tablas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsempalme_tablas[""] = array();
	$fieldToolTipsempalme_tablas[""] = array();
	$placeHoldersempalme_tablas[""] = array();
	$pageTitlesempalme_tablas[""] = array();
	if (count($fieldToolTipsempalme_tablas[""]))
		$tdataempalme_tablas[".isUseToolTips"] = true;
}





$tdataempalme_tablas[".shortTableName"] = "empalme_tablas";
$tdataempalme_tablas[".nSecOptions"] = 0;
$tdataempalme_tablas[".recsPerRowPrint"] = 1;
$tdataempalme_tablas[".mainTableOwnerID"] = "";
$tdataempalme_tablas[".moveNext"] = 1;
$tdataempalme_tablas[".entityType"] = 1;

$tdataempalme_tablas[".strOriginalTableName"] = "hechos_delictivos1";

	



$tdataempalme_tablas[".showAddInPopup"] = false;

$tdataempalme_tablas[".showEditInPopup"] = false;

$tdataempalme_tablas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataempalme_tablas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataempalme_tablas[".fieldsForRegister"] = array();

	$tdataempalme_tablas[".listAjax"] = true;

	$tdataempalme_tablas[".audit"] = false;

	$tdataempalme_tablas[".locking"] = false;



$tdataempalme_tablas[".list"] = true;



$tdataempalme_tablas[".reorderRecordsByHeader"] = true;
$tdataempalme_tablas[".createSortByDropdown"] = true;
$tdataempalme_tablas[".strSortControlSettingsJSON"] = "";




$tdataempalme_tablas[".import"] = true;

$tdataempalme_tablas[".exportTo"] = true;

$tdataempalme_tablas[".printFriendly"] = true;


$tdataempalme_tablas[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataempalme_tablas[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataempalme_tablas[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataempalme_tablas[".searchSaving"] = false;
//

$tdataempalme_tablas[".showSearchPanel"] = true;
		$tdataempalme_tablas[".flexibleSearch"] = true;

$tdataempalme_tablas[".isUseAjaxSuggest"] = true;

$tdataempalme_tablas[".rowHighlite"] = true;





$tdataempalme_tablas[".ajaxCodeSnippetAdded"] = false;

$tdataempalme_tablas[".buttonsAdded"] = false;

$tdataempalme_tablas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempalme_tablas[".isUseTimeForSearch"] = false;





$tdataempalme_tablas[".allSearchFields"] = array();
$tdataempalme_tablas[".filterFields"] = array();
$tdataempalme_tablas[".requiredSearchFields"] = array();






$tdataempalme_tablas[".tableType"] = "list";

$tdataempalme_tablas[".printerPageOrientation"] = 0;
$tdataempalme_tablas[".nPrinterPageScale"] = 100;

$tdataempalme_tablas[".nPrinterSplitRecords"] = 40;

$tdataempalme_tablas[".nPrinterPDFSplitRecords"] = 40;



$tdataempalme_tablas[".geocodingEnabled"] = false;





$tdataempalme_tablas[".listGridLayout"] = 3;

$tdataempalme_tablas[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdataempalme_tablas[".pageSize"] = 10;

$tdataempalme_tablas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataempalme_tablas[".strOrderBy"] = $tstrOrderBy;

$tdataempalme_tablas[".orderindexes"] = array();

$tdataempalme_tablas[".sqlHead"] = " ";
$tdataempalme_tablas[".sqlFrom"] = "";
$tdataempalme_tablas[".sqlWhereExpr"] = "";
$tdataempalme_tablas[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempalme_tablas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempalme_tablas[".arrGroupsPerPage"] = $arrGPP;

$tdataempalme_tablas[".highlightSearchResults"] = true;

$tableKeysempalme_tablas = array();
$tdataempalme_tablas[".Keys"] = $tableKeysempalme_tablas;

$tdataempalme_tablas[".listFields"] = array();

$tdataempalme_tablas[".hideMobileList"] = array();


$tdataempalme_tablas[".viewFields"] = array();

$tdataempalme_tablas[".addFields"] = array();

$tdataempalme_tablas[".masterListFields"] = array();

$tdataempalme_tablas[".inlineAddFields"] = array();

$tdataempalme_tablas[".editFields"] = array();

$tdataempalme_tablas[".inlineEditFields"] = array();

$tdataempalme_tablas[".updateSelectedFields"] = array();


$tdataempalme_tablas[".exportFields"] = array();

$tdataempalme_tablas[".importFields"] = array();

$tdataempalme_tablas[".printFields"] = array();



$tables_data["empalme tablas"]=&$tdataempalme_tablas;
$field_labels["empalme_tablas"] = &$fieldLabelsempalme_tablas;
$fieldToolTips["empalme_tablas"] = &$fieldToolTipsempalme_tablas;
$placeHolders["empalme_tablas"] = &$placeHoldersempalme_tablas;
$page_titles["empalme_tablas"] = &$pageTitlesempalme_tablas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["empalme tablas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["empalme tablas"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_empalme_tablas()
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
$proto0["m_srcTableName"]="empalme tablas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empalme_tablas = createSqlQuery_empalme_tablas();


	
		;



$tdataempalme_tablas[".sqlquery"] = $queryData_empalme_tablas;

$tableEvents["empalme tablas"] = new eventsBase;
$tdataempalme_tablas[".hasEvents"] = false;

?>