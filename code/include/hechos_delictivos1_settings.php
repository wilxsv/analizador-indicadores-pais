<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahechos_delictivos1 = array();
	$tdatahechos_delictivos1[".truncateText"] = true;
	$tdatahechos_delictivos1[".NumberOfChars"] = 80;
	$tdatahechos_delictivos1[".ShortName"] = "hechos_delictivos1";
	$tdatahechos_delictivos1[".OwnerID"] = "";
	$tdatahechos_delictivos1[".OriginalTable"] = "hechos_delictivos1";

//	field labels
$fieldLabelshechos_delictivos1 = array();
$fieldToolTipshechos_delictivos1 = array();
$pageTitleshechos_delictivos1 = array();
$placeHoldershechos_delictivos1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshechos_delictivos1["Spanish"] = array();
	$fieldToolTipshechos_delictivos1["Spanish"] = array();
	$placeHoldershechos_delictivos1["Spanish"] = array();
	$pageTitleshechos_delictivos1["Spanish"] = array();
	if (count($fieldToolTipshechos_delictivos1["Spanish"]))
		$tdatahechos_delictivos1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshechos_delictivos1["English"] = array();
	$fieldToolTipshechos_delictivos1["English"] = array();
	$placeHoldershechos_delictivos1["English"] = array();
	$pageTitleshechos_delictivos1["English"] = array();
	if (count($fieldToolTipshechos_delictivos1["English"]))
		$tdatahechos_delictivos1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshechos_delictivos1[""] = array();
	$fieldToolTipshechos_delictivos1[""] = array();
	$placeHoldershechos_delictivos1[""] = array();
	$pageTitleshechos_delictivos1[""] = array();
	if (count($fieldToolTipshechos_delictivos1[""]))
		$tdatahechos_delictivos1[".isUseToolTips"] = true;
}





$tdatahechos_delictivos1[".shortTableName"] = "hechos_delictivos1";
$tdatahechos_delictivos1[".nSecOptions"] = 0;
$tdatahechos_delictivos1[".recsPerRowPrint"] = 1;
$tdatahechos_delictivos1[".mainTableOwnerID"] = "";
$tdatahechos_delictivos1[".moveNext"] = 1;
$tdatahechos_delictivos1[".entityType"] = 0;

$tdatahechos_delictivos1[".strOriginalTableName"] = "hechos_delictivos1";

	



$tdatahechos_delictivos1[".showAddInPopup"] = false;

$tdatahechos_delictivos1[".showEditInPopup"] = false;

$tdatahechos_delictivos1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahechos_delictivos1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahechos_delictivos1[".fieldsForRegister"] = array();

	$tdatahechos_delictivos1[".listAjax"] = true;

	$tdatahechos_delictivos1[".audit"] = false;

	$tdatahechos_delictivos1[".locking"] = false;



$tdatahechos_delictivos1[".list"] = true;



$tdatahechos_delictivos1[".reorderRecordsByHeader"] = true;
$tdatahechos_delictivos1[".createSortByDropdown"] = true;
$tdatahechos_delictivos1[".strSortControlSettingsJSON"] = "";




$tdatahechos_delictivos1[".import"] = true;

$tdatahechos_delictivos1[".exportTo"] = true;

$tdatahechos_delictivos1[".printFriendly"] = true;


$tdatahechos_delictivos1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatahechos_delictivos1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatahechos_delictivos1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatahechos_delictivos1[".searchSaving"] = false;
//

$tdatahechos_delictivos1[".showSearchPanel"] = true;
		$tdatahechos_delictivos1[".flexibleSearch"] = true;

$tdatahechos_delictivos1[".isUseAjaxSuggest"] = true;

$tdatahechos_delictivos1[".rowHighlite"] = true;





$tdatahechos_delictivos1[".ajaxCodeSnippetAdded"] = false;

$tdatahechos_delictivos1[".buttonsAdded"] = false;

$tdatahechos_delictivos1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahechos_delictivos1[".isUseTimeForSearch"] = false;





$tdatahechos_delictivos1[".allSearchFields"] = array();
$tdatahechos_delictivos1[".filterFields"] = array();
$tdatahechos_delictivos1[".requiredSearchFields"] = array();






$tdatahechos_delictivos1[".tableType"] = "list";

$tdatahechos_delictivos1[".printerPageOrientation"] = 0;
$tdatahechos_delictivos1[".nPrinterPageScale"] = 100;

$tdatahechos_delictivos1[".nPrinterSplitRecords"] = 40;

$tdatahechos_delictivos1[".nPrinterPDFSplitRecords"] = 40;



$tdatahechos_delictivos1[".geocodingEnabled"] = false;





$tdatahechos_delictivos1[".listGridLayout"] = 3;

$tdatahechos_delictivos1[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatahechos_delictivos1[".pageSize"] = 10;

$tdatahechos_delictivos1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahechos_delictivos1[".strOrderBy"] = $tstrOrderBy;

$tdatahechos_delictivos1[".orderindexes"] = array();

$tdatahechos_delictivos1[".sqlHead"] = " ";
$tdatahechos_delictivos1[".sqlFrom"] = "";
$tdatahechos_delictivos1[".sqlWhereExpr"] = "";
$tdatahechos_delictivos1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahechos_delictivos1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahechos_delictivos1[".arrGroupsPerPage"] = $arrGPP;

$tdatahechos_delictivos1[".highlightSearchResults"] = true;

$tableKeyshechos_delictivos1 = array();
$tdatahechos_delictivos1[".Keys"] = $tableKeyshechos_delictivos1;

$tdatahechos_delictivos1[".listFields"] = array();

$tdatahechos_delictivos1[".hideMobileList"] = array();


$tdatahechos_delictivos1[".viewFields"] = array();

$tdatahechos_delictivos1[".addFields"] = array();

$tdatahechos_delictivos1[".masterListFields"] = array();

$tdatahechos_delictivos1[".inlineAddFields"] = array();

$tdatahechos_delictivos1[".editFields"] = array();

$tdatahechos_delictivos1[".inlineEditFields"] = array();

$tdatahechos_delictivos1[".updateSelectedFields"] = array();


$tdatahechos_delictivos1[".exportFields"] = array();

$tdatahechos_delictivos1[".importFields"] = array();

$tdatahechos_delictivos1[".printFields"] = array();



$tables_data["hechos_delictivos1"]=&$tdatahechos_delictivos1;
$field_labels["hechos_delictivos1"] = &$fieldLabelshechos_delictivos1;
$fieldToolTips["hechos_delictivos1"] = &$fieldToolTipshechos_delictivos1;
$placeHolders["hechos_delictivos1"] = &$placeHoldershechos_delictivos1;
$page_titles["hechos_delictivos1"] = &$pageTitleshechos_delictivos1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hechos_delictivos1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hechos_delictivos1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hechos_delictivos1()
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
$proto0["m_srcTableName"]="hechos_delictivos1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hechos_delictivos1 = createSqlQuery_hechos_delictivos1();


	
		;



$tdatahechos_delictivos1[".sqlquery"] = $queryData_hechos_delictivos1;

$tableEvents["hechos_delictivos1"] = new eventsBase;
$tdatahechos_delictivos1[".hasEvents"] = false;

?>