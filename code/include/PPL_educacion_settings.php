<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPPL_educacion = array();
	$tdataPPL_educacion[".truncateText"] = true;
	$tdataPPL_educacion[".NumberOfChars"] = 80;
	$tdataPPL_educacion[".ShortName"] = "PPL_educacion";
	$tdataPPL_educacion[".OwnerID"] = "";
	$tdataPPL_educacion[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsPPL_educacion = array();
$fieldToolTipsPPL_educacion = array();
$pageTitlesPPL_educacion = array();
$placeHoldersPPL_educacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPPL_educacion["Spanish"] = array();
	$fieldToolTipsPPL_educacion["Spanish"] = array();
	$placeHoldersPPL_educacion["Spanish"] = array();
	$pageTitlesPPL_educacion["Spanish"] = array();
	if (count($fieldToolTipsPPL_educacion["Spanish"]))
		$tdataPPL_educacion[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPPL_educacion["English"] = array();
	$fieldToolTipsPPL_educacion["English"] = array();
	$placeHoldersPPL_educacion["English"] = array();
	$pageTitlesPPL_educacion["English"] = array();
	if (count($fieldToolTipsPPL_educacion["English"]))
		$tdataPPL_educacion[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPPL_educacion[""] = array();
	$fieldToolTipsPPL_educacion[""] = array();
	$placeHoldersPPL_educacion[""] = array();
	$pageTitlesPPL_educacion[""] = array();
	if (count($fieldToolTipsPPL_educacion[""]))
		$tdataPPL_educacion[".isUseToolTips"] = true;
}





$tdataPPL_educacion[".shortTableName"] = "PPL_educacion";
$tdataPPL_educacion[".nSecOptions"] = 0;
$tdataPPL_educacion[".recsPerRowPrint"] = 1;
$tdataPPL_educacion[".mainTableOwnerID"] = "";
$tdataPPL_educacion[".moveNext"] = 1;
$tdataPPL_educacion[".entityType"] = 1;

$tdataPPL_educacion[".strOriginalTableName"] = "carcel";

	



$tdataPPL_educacion[".showAddInPopup"] = false;

$tdataPPL_educacion[".showEditInPopup"] = false;

$tdataPPL_educacion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPPL_educacion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPPL_educacion[".fieldsForRegister"] = array();

	$tdataPPL_educacion[".listAjax"] = true;

	$tdataPPL_educacion[".audit"] = false;

	$tdataPPL_educacion[".locking"] = false;



$tdataPPL_educacion[".list"] = true;



$tdataPPL_educacion[".reorderRecordsByHeader"] = true;
$tdataPPL_educacion[".createSortByDropdown"] = true;
$tdataPPL_educacion[".strSortControlSettingsJSON"] = "";




$tdataPPL_educacion[".import"] = true;

$tdataPPL_educacion[".exportTo"] = true;

$tdataPPL_educacion[".printFriendly"] = true;


$tdataPPL_educacion[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPPL_educacion[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPPL_educacion[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPPL_educacion[".searchSaving"] = false;
//

$tdataPPL_educacion[".showSearchPanel"] = true;
		$tdataPPL_educacion[".flexibleSearch"] = true;

$tdataPPL_educacion[".isUseAjaxSuggest"] = true;

$tdataPPL_educacion[".rowHighlite"] = true;





$tdataPPL_educacion[".ajaxCodeSnippetAdded"] = false;

$tdataPPL_educacion[".buttonsAdded"] = false;

$tdataPPL_educacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPPL_educacion[".isUseTimeForSearch"] = false;





$tdataPPL_educacion[".allSearchFields"] = array();
$tdataPPL_educacion[".filterFields"] = array();
$tdataPPL_educacion[".requiredSearchFields"] = array();






$tdataPPL_educacion[".tableType"] = "list";

$tdataPPL_educacion[".printerPageOrientation"] = 0;
$tdataPPL_educacion[".nPrinterPageScale"] = 100;

$tdataPPL_educacion[".nPrinterSplitRecords"] = 40;

$tdataPPL_educacion[".nPrinterPDFSplitRecords"] = 40;



$tdataPPL_educacion[".geocodingEnabled"] = false;





$tdataPPL_educacion[".listGridLayout"] = 3;

$tdataPPL_educacion[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdataPPL_educacion[".pageSize"] = 10;

$tdataPPL_educacion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPPL_educacion[".strOrderBy"] = $tstrOrderBy;

$tdataPPL_educacion[".orderindexes"] = array();

$tdataPPL_educacion[".sqlHead"] = " ";
$tdataPPL_educacion[".sqlFrom"] = "";
$tdataPPL_educacion[".sqlWhereExpr"] = "";
$tdataPPL_educacion[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPPL_educacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPPL_educacion[".arrGroupsPerPage"] = $arrGPP;

$tdataPPL_educacion[".highlightSearchResults"] = true;

$tableKeysPPL_educacion = array();
$tdataPPL_educacion[".Keys"] = $tableKeysPPL_educacion;

$tdataPPL_educacion[".listFields"] = array();

$tdataPPL_educacion[".hideMobileList"] = array();


$tdataPPL_educacion[".viewFields"] = array();

$tdataPPL_educacion[".addFields"] = array();

$tdataPPL_educacion[".masterListFields"] = array();

$tdataPPL_educacion[".inlineAddFields"] = array();

$tdataPPL_educacion[".editFields"] = array();

$tdataPPL_educacion[".inlineEditFields"] = array();

$tdataPPL_educacion[".updateSelectedFields"] = array();


$tdataPPL_educacion[".exportFields"] = array();

$tdataPPL_educacion[".importFields"] = array();

$tdataPPL_educacion[".printFields"] = array();



$tables_data["PPL_educacion"]=&$tdataPPL_educacion;
$field_labels["PPL_educacion"] = &$fieldLabelsPPL_educacion;
$fieldToolTips["PPL_educacion"] = &$fieldToolTipsPPL_educacion;
$placeHolders["PPL_educacion"] = &$placeHoldersPPL_educacion;
$page_titles["PPL_educacion"] = &$pageTitlesPPL_educacion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PPL_educacion"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PPL_educacion"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PPL_educacion()
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
$proto0["m_srcTableName"]="PPL_educacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PPL_educacion = createSqlQuery_PPL_educacion();


	
		;



$tdataPPL_educacion[".sqlquery"] = $queryData_PPL_educacion;

$tableEvents["PPL_educacion"] = new eventsBase;
$tdataPPL_educacion[".hasEvents"] = false;

?>