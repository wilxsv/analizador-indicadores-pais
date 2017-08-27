<?php
require_once(getabspath("classes/cipherer.php"));




$tdatareemplazar_sectores = array();
	$tdatareemplazar_sectores[".truncateText"] = true;
	$tdatareemplazar_sectores[".NumberOfChars"] = 80;
	$tdatareemplazar_sectores[".ShortName"] = "reemplazar_sectores";
	$tdatareemplazar_sectores[".OwnerID"] = "";
	$tdatareemplazar_sectores[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsreemplazar_sectores = array();
$fieldToolTipsreemplazar_sectores = array();
$pageTitlesreemplazar_sectores = array();
$placeHoldersreemplazar_sectores = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsreemplazar_sectores["Spanish"] = array();
	$fieldToolTipsreemplazar_sectores["Spanish"] = array();
	$placeHoldersreemplazar_sectores["Spanish"] = array();
	$pageTitlesreemplazar_sectores["Spanish"] = array();
	if (count($fieldToolTipsreemplazar_sectores["Spanish"]))
		$tdatareemplazar_sectores[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreemplazar_sectores["English"] = array();
	$fieldToolTipsreemplazar_sectores["English"] = array();
	$placeHoldersreemplazar_sectores["English"] = array();
	$pageTitlesreemplazar_sectores["English"] = array();
	if (count($fieldToolTipsreemplazar_sectores["English"]))
		$tdatareemplazar_sectores[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsreemplazar_sectores[""] = array();
	$fieldToolTipsreemplazar_sectores[""] = array();
	$placeHoldersreemplazar_sectores[""] = array();
	$pageTitlesreemplazar_sectores[""] = array();
	if (count($fieldToolTipsreemplazar_sectores[""]))
		$tdatareemplazar_sectores[".isUseToolTips"] = true;
}





$tdatareemplazar_sectores[".shortTableName"] = "reemplazar_sectores";
$tdatareemplazar_sectores[".nSecOptions"] = 0;
$tdatareemplazar_sectores[".recsPerRowPrint"] = 1;
$tdatareemplazar_sectores[".mainTableOwnerID"] = "";
$tdatareemplazar_sectores[".moveNext"] = 1;
$tdatareemplazar_sectores[".entityType"] = 1;

$tdatareemplazar_sectores[".strOriginalTableName"] = "hechosdelictivos";

	



$tdatareemplazar_sectores[".showAddInPopup"] = false;

$tdatareemplazar_sectores[".showEditInPopup"] = false;

$tdatareemplazar_sectores[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatareemplazar_sectores[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatareemplazar_sectores[".fieldsForRegister"] = array();

	$tdatareemplazar_sectores[".listAjax"] = true;

	$tdatareemplazar_sectores[".audit"] = false;

	$tdatareemplazar_sectores[".locking"] = false;


$tdatareemplazar_sectores[".add"] = true;
$tdatareemplazar_sectores[".afterAddAction"] = 1;
$tdatareemplazar_sectores[".closePopupAfterAdd"] = 1;
$tdatareemplazar_sectores[".afterAddActionDetTable"] = "";

$tdatareemplazar_sectores[".list"] = true;



$tdatareemplazar_sectores[".reorderRecordsByHeader"] = true;
$tdatareemplazar_sectores[".createSortByDropdown"] = true;
$tdatareemplazar_sectores[".strSortControlSettingsJSON"] = "";



$tdatareemplazar_sectores[".inlineAdd"] = true;

$tdatareemplazar_sectores[".import"] = true;

$tdatareemplazar_sectores[".exportTo"] = true;

$tdatareemplazar_sectores[".printFriendly"] = true;


$tdatareemplazar_sectores[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatareemplazar_sectores[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatareemplazar_sectores[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatareemplazar_sectores[".searchSaving"] = false;
//

$tdatareemplazar_sectores[".showSearchPanel"] = true;
		$tdatareemplazar_sectores[".flexibleSearch"] = true;

$tdatareemplazar_sectores[".isUseAjaxSuggest"] = true;

$tdatareemplazar_sectores[".rowHighlite"] = true;





$tdatareemplazar_sectores[".ajaxCodeSnippetAdded"] = false;

$tdatareemplazar_sectores[".buttonsAdded"] = false;

$tdatareemplazar_sectores[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareemplazar_sectores[".isUseTimeForSearch"] = false;





$tdatareemplazar_sectores[".allSearchFields"] = array();
$tdatareemplazar_sectores[".filterFields"] = array();
$tdatareemplazar_sectores[".requiredSearchFields"] = array();






$tdatareemplazar_sectores[".tableType"] = "list";

$tdatareemplazar_sectores[".printerPageOrientation"] = 0;
$tdatareemplazar_sectores[".nPrinterPageScale"] = 100;

$tdatareemplazar_sectores[".nPrinterSplitRecords"] = 40;

$tdatareemplazar_sectores[".nPrinterPDFSplitRecords"] = 40;



$tdatareemplazar_sectores[".geocodingEnabled"] = false;





$tdatareemplazar_sectores[".listGridLayout"] = 3;

$tdatareemplazar_sectores[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatareemplazar_sectores[".pageSize"] = 10;

$tdatareemplazar_sectores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatareemplazar_sectores[".strOrderBy"] = $tstrOrderBy;

$tdatareemplazar_sectores[".orderindexes"] = array();

$tdatareemplazar_sectores[".sqlHead"] = " ";
$tdatareemplazar_sectores[".sqlFrom"] = "";
$tdatareemplazar_sectores[".sqlWhereExpr"] = "";
$tdatareemplazar_sectores[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareemplazar_sectores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareemplazar_sectores[".arrGroupsPerPage"] = $arrGPP;

$tdatareemplazar_sectores[".highlightSearchResults"] = true;

$tableKeysreemplazar_sectores = array();
$tdatareemplazar_sectores[".Keys"] = $tableKeysreemplazar_sectores;

$tdatareemplazar_sectores[".listFields"] = array();

$tdatareemplazar_sectores[".hideMobileList"] = array();


$tdatareemplazar_sectores[".viewFields"] = array();

$tdatareemplazar_sectores[".addFields"] = array();

$tdatareemplazar_sectores[".masterListFields"] = array();

$tdatareemplazar_sectores[".inlineAddFields"] = array();

$tdatareemplazar_sectores[".editFields"] = array();

$tdatareemplazar_sectores[".inlineEditFields"] = array();

$tdatareemplazar_sectores[".updateSelectedFields"] = array();


$tdatareemplazar_sectores[".exportFields"] = array();

$tdatareemplazar_sectores[".importFields"] = array();

$tdatareemplazar_sectores[".printFields"] = array();



$tables_data["reemplazar sectores"]=&$tdatareemplazar_sectores;
$field_labels["reemplazar_sectores"] = &$fieldLabelsreemplazar_sectores;
$fieldToolTips["reemplazar_sectores"] = &$fieldToolTipsreemplazar_sectores;
$placeHolders["reemplazar_sectores"] = &$placeHoldersreemplazar_sectores;
$page_titles["reemplazar_sectores"] = &$pageTitlesreemplazar_sectores;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["reemplazar sectores"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["reemplazar sectores"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_reemplazar_sectores()
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
$proto0["m_srcTableName"]="reemplazar sectores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reemplazar_sectores = createSqlQuery_reemplazar_sectores();


	
		;



$tdatareemplazar_sectores[".sqlquery"] = $queryData_reemplazar_sectores;

$tableEvents["reemplazar sectores"] = new eventsBase;
$tdatareemplazar_sectores[".hasEvents"] = false;

?>