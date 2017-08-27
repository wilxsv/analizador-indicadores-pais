<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTransito_class_causas = array();
	$tdataTransito_class_causas[".truncateText"] = true;
	$tdataTransito_class_causas[".NumberOfChars"] = 80;
	$tdataTransito_class_causas[".ShortName"] = "Transito_class_causas";
	$tdataTransito_class_causas[".OwnerID"] = "";
	$tdataTransito_class_causas[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsTransito_class_causas = array();
$fieldToolTipsTransito_class_causas = array();
$pageTitlesTransito_class_causas = array();
$placeHoldersTransito_class_causas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsTransito_class_causas["Spanish"] = array();
	$fieldToolTipsTransito_class_causas["Spanish"] = array();
	$placeHoldersTransito_class_causas["Spanish"] = array();
	$pageTitlesTransito_class_causas["Spanish"] = array();
	if (count($fieldToolTipsTransito_class_causas["Spanish"]))
		$tdataTransito_class_causas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTransito_class_causas["English"] = array();
	$fieldToolTipsTransito_class_causas["English"] = array();
	$placeHoldersTransito_class_causas["English"] = array();
	$pageTitlesTransito_class_causas["English"] = array();
	if (count($fieldToolTipsTransito_class_causas["English"]))
		$tdataTransito_class_causas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTransito_class_causas[""] = array();
	$fieldToolTipsTransito_class_causas[""] = array();
	$placeHoldersTransito_class_causas[""] = array();
	$pageTitlesTransito_class_causas[""] = array();
	if (count($fieldToolTipsTransito_class_causas[""]))
		$tdataTransito_class_causas[".isUseToolTips"] = true;
}





$tdataTransito_class_causas[".shortTableName"] = "Transito_class_causas";
$tdataTransito_class_causas[".nSecOptions"] = 0;
$tdataTransito_class_causas[".recsPerRowPrint"] = 1;
$tdataTransito_class_causas[".mainTableOwnerID"] = "";
$tdataTransito_class_causas[".moveNext"] = 1;
$tdataTransito_class_causas[".entityType"] = 1;

$tdataTransito_class_causas[".strOriginalTableName"] = "carcel";

	



$tdataTransito_class_causas[".showAddInPopup"] = false;

$tdataTransito_class_causas[".showEditInPopup"] = false;

$tdataTransito_class_causas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTransito_class_causas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTransito_class_causas[".fieldsForRegister"] = array();

	$tdataTransito_class_causas[".listAjax"] = true;

	$tdataTransito_class_causas[".audit"] = false;

	$tdataTransito_class_causas[".locking"] = false;



$tdataTransito_class_causas[".list"] = true;



$tdataTransito_class_causas[".reorderRecordsByHeader"] = true;
$tdataTransito_class_causas[".createSortByDropdown"] = true;
$tdataTransito_class_causas[".strSortControlSettingsJSON"] = "";




$tdataTransito_class_causas[".import"] = true;

$tdataTransito_class_causas[".exportTo"] = true;

$tdataTransito_class_causas[".printFriendly"] = true;


$tdataTransito_class_causas[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataTransito_class_causas[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataTransito_class_causas[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataTransito_class_causas[".searchSaving"] = false;
//

$tdataTransito_class_causas[".showSearchPanel"] = true;
		$tdataTransito_class_causas[".flexibleSearch"] = true;

$tdataTransito_class_causas[".isUseAjaxSuggest"] = true;

$tdataTransito_class_causas[".rowHighlite"] = true;





$tdataTransito_class_causas[".ajaxCodeSnippetAdded"] = false;

$tdataTransito_class_causas[".buttonsAdded"] = false;

$tdataTransito_class_causas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTransito_class_causas[".isUseTimeForSearch"] = false;





$tdataTransito_class_causas[".allSearchFields"] = array();
$tdataTransito_class_causas[".filterFields"] = array();
$tdataTransito_class_causas[".requiredSearchFields"] = array();






$tdataTransito_class_causas[".tableType"] = "list";

$tdataTransito_class_causas[".printerPageOrientation"] = 0;
$tdataTransito_class_causas[".nPrinterPageScale"] = 100;

$tdataTransito_class_causas[".nPrinterSplitRecords"] = 40;

$tdataTransito_class_causas[".nPrinterPDFSplitRecords"] = 40;



$tdataTransito_class_causas[".geocodingEnabled"] = false;





$tdataTransito_class_causas[".listGridLayout"] = 3;

$tdataTransito_class_causas[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdataTransito_class_causas[".pageSize"] = 10;

$tdataTransito_class_causas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTransito_class_causas[".strOrderBy"] = $tstrOrderBy;

$tdataTransito_class_causas[".orderindexes"] = array();

$tdataTransito_class_causas[".sqlHead"] = " ";
$tdataTransito_class_causas[".sqlFrom"] = "";
$tdataTransito_class_causas[".sqlWhereExpr"] = "";
$tdataTransito_class_causas[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTransito_class_causas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTransito_class_causas[".arrGroupsPerPage"] = $arrGPP;

$tdataTransito_class_causas[".highlightSearchResults"] = true;

$tableKeysTransito_class_causas = array();
$tdataTransito_class_causas[".Keys"] = $tableKeysTransito_class_causas;

$tdataTransito_class_causas[".listFields"] = array();

$tdataTransito_class_causas[".hideMobileList"] = array();


$tdataTransito_class_causas[".viewFields"] = array();

$tdataTransito_class_causas[".addFields"] = array();

$tdataTransito_class_causas[".masterListFields"] = array();

$tdataTransito_class_causas[".inlineAddFields"] = array();

$tdataTransito_class_causas[".editFields"] = array();

$tdataTransito_class_causas[".inlineEditFields"] = array();

$tdataTransito_class_causas[".updateSelectedFields"] = array();


$tdataTransito_class_causas[".exportFields"] = array();

$tdataTransito_class_causas[".importFields"] = array();

$tdataTransito_class_causas[".printFields"] = array();



$tables_data["Transito class causas"]=&$tdataTransito_class_causas;
$field_labels["Transito_class_causas"] = &$fieldLabelsTransito_class_causas;
$fieldToolTips["Transito_class_causas"] = &$fieldToolTipsTransito_class_causas;
$placeHolders["Transito_class_causas"] = &$placeHoldersTransito_class_causas;
$page_titles["Transito_class_causas"] = &$pageTitlesTransito_class_causas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Transito class causas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Transito class causas"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Transito_class_causas()
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
$proto0["m_srcTableName"]="Transito class causas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Transito_class_causas = createSqlQuery_Transito_class_causas();


	
		;



$tdataTransito_class_causas[".sqlquery"] = $queryData_Transito_class_causas;

$tableEvents["Transito class causas"] = new eventsBase;
$tdataTransito_class_causas[".hasEvents"] = false;

?>