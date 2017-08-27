<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTransito_arreglar_guiones = array();
	$tdataTransito_arreglar_guiones[".truncateText"] = true;
	$tdataTransito_arreglar_guiones[".NumberOfChars"] = 80;
	$tdataTransito_arreglar_guiones[".ShortName"] = "Transito_arreglar_guiones";
	$tdataTransito_arreglar_guiones[".OwnerID"] = "";
	$tdataTransito_arreglar_guiones[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsTransito_arreglar_guiones = array();
$fieldToolTipsTransito_arreglar_guiones = array();
$pageTitlesTransito_arreglar_guiones = array();
$placeHoldersTransito_arreglar_guiones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsTransito_arreglar_guiones["Spanish"] = array();
	$fieldToolTipsTransito_arreglar_guiones["Spanish"] = array();
	$placeHoldersTransito_arreglar_guiones["Spanish"] = array();
	$pageTitlesTransito_arreglar_guiones["Spanish"] = array();
	if (count($fieldToolTipsTransito_arreglar_guiones["Spanish"]))
		$tdataTransito_arreglar_guiones[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTransito_arreglar_guiones["English"] = array();
	$fieldToolTipsTransito_arreglar_guiones["English"] = array();
	$placeHoldersTransito_arreglar_guiones["English"] = array();
	$pageTitlesTransito_arreglar_guiones["English"] = array();
	if (count($fieldToolTipsTransito_arreglar_guiones["English"]))
		$tdataTransito_arreglar_guiones[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTransito_arreglar_guiones[""] = array();
	$fieldToolTipsTransito_arreglar_guiones[""] = array();
	$placeHoldersTransito_arreglar_guiones[""] = array();
	$pageTitlesTransito_arreglar_guiones[""] = array();
	if (count($fieldToolTipsTransito_arreglar_guiones[""]))
		$tdataTransito_arreglar_guiones[".isUseToolTips"] = true;
}





$tdataTransito_arreglar_guiones[".shortTableName"] = "Transito_arreglar_guiones";
$tdataTransito_arreglar_guiones[".nSecOptions"] = 0;
$tdataTransito_arreglar_guiones[".recsPerRowPrint"] = 1;
$tdataTransito_arreglar_guiones[".mainTableOwnerID"] = "";
$tdataTransito_arreglar_guiones[".moveNext"] = 1;
$tdataTransito_arreglar_guiones[".entityType"] = 1;

$tdataTransito_arreglar_guiones[".strOriginalTableName"] = "carcel";

	



$tdataTransito_arreglar_guiones[".showAddInPopup"] = false;

$tdataTransito_arreglar_guiones[".showEditInPopup"] = false;

$tdataTransito_arreglar_guiones[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTransito_arreglar_guiones[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTransito_arreglar_guiones[".fieldsForRegister"] = array();

	$tdataTransito_arreglar_guiones[".listAjax"] = true;

	$tdataTransito_arreglar_guiones[".audit"] = false;

	$tdataTransito_arreglar_guiones[".locking"] = false;



$tdataTransito_arreglar_guiones[".list"] = true;



$tdataTransito_arreglar_guiones[".reorderRecordsByHeader"] = true;
$tdataTransito_arreglar_guiones[".createSortByDropdown"] = true;
$tdataTransito_arreglar_guiones[".strSortControlSettingsJSON"] = "";




$tdataTransito_arreglar_guiones[".import"] = true;

$tdataTransito_arreglar_guiones[".exportTo"] = true;

$tdataTransito_arreglar_guiones[".printFriendly"] = true;


$tdataTransito_arreglar_guiones[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataTransito_arreglar_guiones[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataTransito_arreglar_guiones[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataTransito_arreglar_guiones[".searchSaving"] = false;
//

$tdataTransito_arreglar_guiones[".showSearchPanel"] = true;
		$tdataTransito_arreglar_guiones[".flexibleSearch"] = true;

$tdataTransito_arreglar_guiones[".isUseAjaxSuggest"] = true;

$tdataTransito_arreglar_guiones[".rowHighlite"] = true;





$tdataTransito_arreglar_guiones[".ajaxCodeSnippetAdded"] = false;

$tdataTransito_arreglar_guiones[".buttonsAdded"] = false;

$tdataTransito_arreglar_guiones[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTransito_arreglar_guiones[".isUseTimeForSearch"] = false;





$tdataTransito_arreglar_guiones[".allSearchFields"] = array();
$tdataTransito_arreglar_guiones[".filterFields"] = array();
$tdataTransito_arreglar_guiones[".requiredSearchFields"] = array();






$tdataTransito_arreglar_guiones[".tableType"] = "list";

$tdataTransito_arreglar_guiones[".printerPageOrientation"] = 0;
$tdataTransito_arreglar_guiones[".nPrinterPageScale"] = 100;

$tdataTransito_arreglar_guiones[".nPrinterSplitRecords"] = 40;

$tdataTransito_arreglar_guiones[".nPrinterPDFSplitRecords"] = 40;



$tdataTransito_arreglar_guiones[".geocodingEnabled"] = false;





$tdataTransito_arreglar_guiones[".listGridLayout"] = 3;

$tdataTransito_arreglar_guiones[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdataTransito_arreglar_guiones[".pageSize"] = 10;

$tdataTransito_arreglar_guiones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTransito_arreglar_guiones[".strOrderBy"] = $tstrOrderBy;

$tdataTransito_arreglar_guiones[".orderindexes"] = array();

$tdataTransito_arreglar_guiones[".sqlHead"] = "";
$tdataTransito_arreglar_guiones[".sqlFrom"] = "";
$tdataTransito_arreglar_guiones[".sqlWhereExpr"] = "";
$tdataTransito_arreglar_guiones[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTransito_arreglar_guiones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTransito_arreglar_guiones[".arrGroupsPerPage"] = $arrGPP;

$tdataTransito_arreglar_guiones[".highlightSearchResults"] = true;

$tableKeysTransito_arreglar_guiones = array();
$tdataTransito_arreglar_guiones[".Keys"] = $tableKeysTransito_arreglar_guiones;

$tdataTransito_arreglar_guiones[".listFields"] = array();

$tdataTransito_arreglar_guiones[".hideMobileList"] = array();


$tdataTransito_arreglar_guiones[".viewFields"] = array();

$tdataTransito_arreglar_guiones[".addFields"] = array();

$tdataTransito_arreglar_guiones[".masterListFields"] = array();

$tdataTransito_arreglar_guiones[".inlineAddFields"] = array();

$tdataTransito_arreglar_guiones[".editFields"] = array();

$tdataTransito_arreglar_guiones[".inlineEditFields"] = array();

$tdataTransito_arreglar_guiones[".updateSelectedFields"] = array();


$tdataTransito_arreglar_guiones[".exportFields"] = array();

$tdataTransito_arreglar_guiones[".importFields"] = array();

$tdataTransito_arreglar_guiones[".printFields"] = array();



$tables_data["Transito arreglar guiones"]=&$tdataTransito_arreglar_guiones;
$field_labels["Transito_arreglar_guiones"] = &$fieldLabelsTransito_arreglar_guiones;
$fieldToolTips["Transito_arreglar_guiones"] = &$fieldToolTipsTransito_arreglar_guiones;
$placeHolders["Transito_arreglar_guiones"] = &$placeHoldersTransito_arreglar_guiones;
$page_titles["Transito_arreglar_guiones"] = &$pageTitlesTransito_arreglar_guiones;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Transito arreglar guiones"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Transito arreglar guiones"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Transito_arreglar_guiones()
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
$proto0["m_srcTableName"]="Transito arreglar guiones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Transito_arreglar_guiones = createSqlQuery_Transito_arreglar_guiones();


	
		;



$tdataTransito_arreglar_guiones[".sqlquery"] = $queryData_Transito_arreglar_guiones;

$tableEvents["Transito arreglar guiones"] = new eventsBase;
$tdataTransito_arreglar_guiones[".hasEvents"] = false;

?>