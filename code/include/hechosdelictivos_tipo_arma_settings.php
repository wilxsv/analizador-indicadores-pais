<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahechosdelictivos_tipo_arma = array();
	$tdatahechosdelictivos_tipo_arma[".truncateText"] = true;
	$tdatahechosdelictivos_tipo_arma[".NumberOfChars"] = 80;
	$tdatahechosdelictivos_tipo_arma[".ShortName"] = "hechosdelictivos_tipo_arma";
	$tdatahechosdelictivos_tipo_arma[".OwnerID"] = "";
	$tdatahechosdelictivos_tipo_arma[".OriginalTable"] = "hechos_delictivos1";

//	field labels
$fieldLabelshechosdelictivos_tipo_arma = array();
$fieldToolTipshechosdelictivos_tipo_arma = array();
$pageTitleshechosdelictivos_tipo_arma = array();
$placeHoldershechosdelictivos_tipo_arma = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshechosdelictivos_tipo_arma["Spanish"] = array();
	$fieldToolTipshechosdelictivos_tipo_arma["Spanish"] = array();
	$placeHoldershechosdelictivos_tipo_arma["Spanish"] = array();
	$pageTitleshechosdelictivos_tipo_arma["Spanish"] = array();
	if (count($fieldToolTipshechosdelictivos_tipo_arma["Spanish"]))
		$tdatahechosdelictivos_tipo_arma[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshechosdelictivos_tipo_arma["English"] = array();
	$fieldToolTipshechosdelictivos_tipo_arma["English"] = array();
	$placeHoldershechosdelictivos_tipo_arma["English"] = array();
	$pageTitleshechosdelictivos_tipo_arma["English"] = array();
	if (count($fieldToolTipshechosdelictivos_tipo_arma["English"]))
		$tdatahechosdelictivos_tipo_arma[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshechosdelictivos_tipo_arma[""] = array();
	$fieldToolTipshechosdelictivos_tipo_arma[""] = array();
	$placeHoldershechosdelictivos_tipo_arma[""] = array();
	$pageTitleshechosdelictivos_tipo_arma[""] = array();
	if (count($fieldToolTipshechosdelictivos_tipo_arma[""]))
		$tdatahechosdelictivos_tipo_arma[".isUseToolTips"] = true;
}





$tdatahechosdelictivos_tipo_arma[".shortTableName"] = "hechosdelictivos_tipo_arma";
$tdatahechosdelictivos_tipo_arma[".nSecOptions"] = 0;
$tdatahechosdelictivos_tipo_arma[".recsPerRowPrint"] = 1;
$tdatahechosdelictivos_tipo_arma[".mainTableOwnerID"] = "";
$tdatahechosdelictivos_tipo_arma[".moveNext"] = 1;
$tdatahechosdelictivos_tipo_arma[".entityType"] = 1;

$tdatahechosdelictivos_tipo_arma[".strOriginalTableName"] = "hechos_delictivos1";

	



$tdatahechosdelictivos_tipo_arma[".showAddInPopup"] = false;

$tdatahechosdelictivos_tipo_arma[".showEditInPopup"] = false;

$tdatahechosdelictivos_tipo_arma[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahechosdelictivos_tipo_arma[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahechosdelictivos_tipo_arma[".fieldsForRegister"] = array();

	$tdatahechosdelictivos_tipo_arma[".listAjax"] = true;

	$tdatahechosdelictivos_tipo_arma[".audit"] = false;

	$tdatahechosdelictivos_tipo_arma[".locking"] = false;



$tdatahechosdelictivos_tipo_arma[".list"] = true;



$tdatahechosdelictivos_tipo_arma[".reorderRecordsByHeader"] = true;
$tdatahechosdelictivos_tipo_arma[".createSortByDropdown"] = true;
$tdatahechosdelictivos_tipo_arma[".strSortControlSettingsJSON"] = "";




$tdatahechosdelictivos_tipo_arma[".import"] = true;

$tdatahechosdelictivos_tipo_arma[".exportTo"] = true;

$tdatahechosdelictivos_tipo_arma[".printFriendly"] = true;


$tdatahechosdelictivos_tipo_arma[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatahechosdelictivos_tipo_arma[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatahechosdelictivos_tipo_arma[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatahechosdelictivos_tipo_arma[".searchSaving"] = false;
//

$tdatahechosdelictivos_tipo_arma[".showSearchPanel"] = true;
		$tdatahechosdelictivos_tipo_arma[".flexibleSearch"] = true;

$tdatahechosdelictivos_tipo_arma[".isUseAjaxSuggest"] = true;

$tdatahechosdelictivos_tipo_arma[".rowHighlite"] = true;





$tdatahechosdelictivos_tipo_arma[".ajaxCodeSnippetAdded"] = false;

$tdatahechosdelictivos_tipo_arma[".buttonsAdded"] = false;

$tdatahechosdelictivos_tipo_arma[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahechosdelictivos_tipo_arma[".isUseTimeForSearch"] = false;





$tdatahechosdelictivos_tipo_arma[".allSearchFields"] = array();
$tdatahechosdelictivos_tipo_arma[".filterFields"] = array();
$tdatahechosdelictivos_tipo_arma[".requiredSearchFields"] = array();






$tdatahechosdelictivos_tipo_arma[".tableType"] = "list";

$tdatahechosdelictivos_tipo_arma[".printerPageOrientation"] = 0;
$tdatahechosdelictivos_tipo_arma[".nPrinterPageScale"] = 100;

$tdatahechosdelictivos_tipo_arma[".nPrinterSplitRecords"] = 40;

$tdatahechosdelictivos_tipo_arma[".nPrinterPDFSplitRecords"] = 40;



$tdatahechosdelictivos_tipo_arma[".geocodingEnabled"] = false;





$tdatahechosdelictivos_tipo_arma[".listGridLayout"] = 3;

$tdatahechosdelictivos_tipo_arma[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatahechosdelictivos_tipo_arma[".pageSize"] = 10;

$tdatahechosdelictivos_tipo_arma[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahechosdelictivos_tipo_arma[".strOrderBy"] = $tstrOrderBy;

$tdatahechosdelictivos_tipo_arma[".orderindexes"] = array();

$tdatahechosdelictivos_tipo_arma[".sqlHead"] = " ";
$tdatahechosdelictivos_tipo_arma[".sqlFrom"] = "";
$tdatahechosdelictivos_tipo_arma[".sqlWhereExpr"] = "";
$tdatahechosdelictivos_tipo_arma[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahechosdelictivos_tipo_arma[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahechosdelictivos_tipo_arma[".arrGroupsPerPage"] = $arrGPP;

$tdatahechosdelictivos_tipo_arma[".highlightSearchResults"] = true;

$tableKeyshechosdelictivos_tipo_arma = array();
$tdatahechosdelictivos_tipo_arma[".Keys"] = $tableKeyshechosdelictivos_tipo_arma;

$tdatahechosdelictivos_tipo_arma[".listFields"] = array();

$tdatahechosdelictivos_tipo_arma[".hideMobileList"] = array();


$tdatahechosdelictivos_tipo_arma[".viewFields"] = array();

$tdatahechosdelictivos_tipo_arma[".addFields"] = array();

$tdatahechosdelictivos_tipo_arma[".masterListFields"] = array();

$tdatahechosdelictivos_tipo_arma[".inlineAddFields"] = array();

$tdatahechosdelictivos_tipo_arma[".editFields"] = array();

$tdatahechosdelictivos_tipo_arma[".inlineEditFields"] = array();

$tdatahechosdelictivos_tipo_arma[".updateSelectedFields"] = array();


$tdatahechosdelictivos_tipo_arma[".exportFields"] = array();

$tdatahechosdelictivos_tipo_arma[".importFields"] = array();

$tdatahechosdelictivos_tipo_arma[".printFields"] = array();



$tables_data["hechosdelictivos_tipo_arma"]=&$tdatahechosdelictivos_tipo_arma;
$field_labels["hechosdelictivos_tipo_arma"] = &$fieldLabelshechosdelictivos_tipo_arma;
$fieldToolTips["hechosdelictivos_tipo_arma"] = &$fieldToolTipshechosdelictivos_tipo_arma;
$placeHolders["hechosdelictivos_tipo_arma"] = &$placeHoldershechosdelictivos_tipo_arma;
$page_titles["hechosdelictivos_tipo_arma"] = &$pageTitleshechosdelictivos_tipo_arma;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hechosdelictivos_tipo_arma"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hechosdelictivos_tipo_arma"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hechosdelictivos_tipo_arma()
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
$proto0["m_srcTableName"]="hechosdelictivos_tipo_arma";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hechosdelictivos_tipo_arma = createSqlQuery_hechosdelictivos_tipo_arma();


	
		;



$tdatahechosdelictivos_tipo_arma[".sqlquery"] = $queryData_hechosdelictivos_tipo_arma;

$tableEvents["hechosdelictivos_tipo_arma"] = new eventsBase;
$tdatahechosdelictivos_tipo_arma[".hasEvents"] = false;

?>