<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEspacios_abiertos = array();
	$tdataEspacios_abiertos[".truncateText"] = true;
	$tdataEspacios_abiertos[".NumberOfChars"] = 80;
	$tdataEspacios_abiertos[".ShortName"] = "Espacios_abiertos";
	$tdataEspacios_abiertos[".OwnerID"] = "";
	$tdataEspacios_abiertos[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsEspacios_abiertos = array();
$fieldToolTipsEspacios_abiertos = array();
$pageTitlesEspacios_abiertos = array();
$placeHoldersEspacios_abiertos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsEspacios_abiertos["Spanish"] = array();
	$fieldToolTipsEspacios_abiertos["Spanish"] = array();
	$placeHoldersEspacios_abiertos["Spanish"] = array();
	$pageTitlesEspacios_abiertos["Spanish"] = array();
	if (count($fieldToolTipsEspacios_abiertos["Spanish"]))
		$tdataEspacios_abiertos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEspacios_abiertos["English"] = array();
	$fieldToolTipsEspacios_abiertos["English"] = array();
	$placeHoldersEspacios_abiertos["English"] = array();
	$pageTitlesEspacios_abiertos["English"] = array();
	if (count($fieldToolTipsEspacios_abiertos["English"]))
		$tdataEspacios_abiertos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEspacios_abiertos[""] = array();
	$fieldToolTipsEspacios_abiertos[""] = array();
	$placeHoldersEspacios_abiertos[""] = array();
	$pageTitlesEspacios_abiertos[""] = array();
	if (count($fieldToolTipsEspacios_abiertos[""]))
		$tdataEspacios_abiertos[".isUseToolTips"] = true;
}





$tdataEspacios_abiertos[".shortTableName"] = "Espacios_abiertos";
$tdataEspacios_abiertos[".nSecOptions"] = 0;
$tdataEspacios_abiertos[".recsPerRowPrint"] = 1;
$tdataEspacios_abiertos[".mainTableOwnerID"] = "";
$tdataEspacios_abiertos[".moveNext"] = 1;
$tdataEspacios_abiertos[".entityType"] = 1;

$tdataEspacios_abiertos[".strOriginalTableName"] = "hechosdelictivos";

	



$tdataEspacios_abiertos[".showAddInPopup"] = false;

$tdataEspacios_abiertos[".showEditInPopup"] = false;

$tdataEspacios_abiertos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEspacios_abiertos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEspacios_abiertos[".fieldsForRegister"] = array();

	$tdataEspacios_abiertos[".listAjax"] = true;

	$tdataEspacios_abiertos[".audit"] = false;

	$tdataEspacios_abiertos[".locking"] = false;


$tdataEspacios_abiertos[".add"] = true;
$tdataEspacios_abiertos[".afterAddAction"] = 1;
$tdataEspacios_abiertos[".closePopupAfterAdd"] = 1;
$tdataEspacios_abiertos[".afterAddActionDetTable"] = "";

$tdataEspacios_abiertos[".list"] = true;



$tdataEspacios_abiertos[".reorderRecordsByHeader"] = true;
$tdataEspacios_abiertos[".createSortByDropdown"] = true;
$tdataEspacios_abiertos[".strSortControlSettingsJSON"] = "";



$tdataEspacios_abiertos[".inlineAdd"] = true;

$tdataEspacios_abiertos[".import"] = true;

$tdataEspacios_abiertos[".exportTo"] = true;

$tdataEspacios_abiertos[".printFriendly"] = true;


$tdataEspacios_abiertos[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEspacios_abiertos[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEspacios_abiertos[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEspacios_abiertos[".searchSaving"] = false;
//

$tdataEspacios_abiertos[".showSearchPanel"] = true;
		$tdataEspacios_abiertos[".flexibleSearch"] = true;

$tdataEspacios_abiertos[".isUseAjaxSuggest"] = true;

$tdataEspacios_abiertos[".rowHighlite"] = true;





$tdataEspacios_abiertos[".ajaxCodeSnippetAdded"] = false;

$tdataEspacios_abiertos[".buttonsAdded"] = false;

$tdataEspacios_abiertos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEspacios_abiertos[".isUseTimeForSearch"] = false;





$tdataEspacios_abiertos[".allSearchFields"] = array();
$tdataEspacios_abiertos[".filterFields"] = array();
$tdataEspacios_abiertos[".requiredSearchFields"] = array();






$tdataEspacios_abiertos[".tableType"] = "list";

$tdataEspacios_abiertos[".printerPageOrientation"] = 0;
$tdataEspacios_abiertos[".nPrinterPageScale"] = 100;

$tdataEspacios_abiertos[".nPrinterSplitRecords"] = 40;

$tdataEspacios_abiertos[".nPrinterPDFSplitRecords"] = 40;



$tdataEspacios_abiertos[".geocodingEnabled"] = false;





$tdataEspacios_abiertos[".listGridLayout"] = 3;

$tdataEspacios_abiertos[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdataEspacios_abiertos[".pageSize"] = 10;

$tdataEspacios_abiertos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEspacios_abiertos[".strOrderBy"] = $tstrOrderBy;

$tdataEspacios_abiertos[".orderindexes"] = array();

$tdataEspacios_abiertos[".sqlHead"] = " ";
$tdataEspacios_abiertos[".sqlFrom"] = "";
$tdataEspacios_abiertos[".sqlWhereExpr"] = "";
$tdataEspacios_abiertos[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEspacios_abiertos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEspacios_abiertos[".arrGroupsPerPage"] = $arrGPP;

$tdataEspacios_abiertos[".highlightSearchResults"] = true;

$tableKeysEspacios_abiertos = array();
$tdataEspacios_abiertos[".Keys"] = $tableKeysEspacios_abiertos;

$tdataEspacios_abiertos[".listFields"] = array();

$tdataEspacios_abiertos[".hideMobileList"] = array();


$tdataEspacios_abiertos[".viewFields"] = array();

$tdataEspacios_abiertos[".addFields"] = array();

$tdataEspacios_abiertos[".masterListFields"] = array();

$tdataEspacios_abiertos[".inlineAddFields"] = array();

$tdataEspacios_abiertos[".editFields"] = array();

$tdataEspacios_abiertos[".inlineEditFields"] = array();

$tdataEspacios_abiertos[".updateSelectedFields"] = array();


$tdataEspacios_abiertos[".exportFields"] = array();

$tdataEspacios_abiertos[".importFields"] = array();

$tdataEspacios_abiertos[".printFields"] = array();



$tables_data["Espacios abiertos"]=&$tdataEspacios_abiertos;
$field_labels["Espacios_abiertos"] = &$fieldLabelsEspacios_abiertos;
$fieldToolTips["Espacios_abiertos"] = &$fieldToolTipsEspacios_abiertos;
$placeHolders["Espacios_abiertos"] = &$placeHoldersEspacios_abiertos;
$page_titles["Espacios_abiertos"] = &$pageTitlesEspacios_abiertos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Espacios abiertos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Espacios abiertos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Espacios_abiertos()
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
$proto0["m_srcTableName"]="Espacios abiertos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Espacios_abiertos = createSqlQuery_Espacios_abiertos();


	
		;



$tdataEspacios_abiertos[".sqlquery"] = $queryData_Espacios_abiertos;

$tableEvents["Espacios abiertos"] = new eventsBase;
$tdataEspacios_abiertos[".hasEvents"] = false;

?>