<?php
require_once(getabspath("classes/cipherer.php"));




$tdataIPCE_NAIVE = array();
	$tdataIPCE_NAIVE[".truncateText"] = true;
	$tdataIPCE_NAIVE[".NumberOfChars"] = 80;
	$tdataIPCE_NAIVE[".ShortName"] = "IPCE_NAIVE";
	$tdataIPCE_NAIVE[".OwnerID"] = "";
	$tdataIPCE_NAIVE[".OriginalTable"] = "mined";

//	field labels
$fieldLabelsIPCE_NAIVE = array();
$fieldToolTipsIPCE_NAIVE = array();
$pageTitlesIPCE_NAIVE = array();
$placeHoldersIPCE_NAIVE = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsIPCE_NAIVE["Spanish"] = array();
	$fieldToolTipsIPCE_NAIVE["Spanish"] = array();
	$placeHoldersIPCE_NAIVE["Spanish"] = array();
	$pageTitlesIPCE_NAIVE["Spanish"] = array();
	if (count($fieldToolTipsIPCE_NAIVE["Spanish"]))
		$tdataIPCE_NAIVE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsIPCE_NAIVE["English"] = array();
	$fieldToolTipsIPCE_NAIVE["English"] = array();
	$placeHoldersIPCE_NAIVE["English"] = array();
	$pageTitlesIPCE_NAIVE["English"] = array();
	if (count($fieldToolTipsIPCE_NAIVE["English"]))
		$tdataIPCE_NAIVE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsIPCE_NAIVE[""] = array();
	$fieldToolTipsIPCE_NAIVE[""] = array();
	$placeHoldersIPCE_NAIVE[""] = array();
	$pageTitlesIPCE_NAIVE[""] = array();
	if (count($fieldToolTipsIPCE_NAIVE[""]))
		$tdataIPCE_NAIVE[".isUseToolTips"] = true;
}


	$tdataIPCE_NAIVE[".NCSearch"] = true;



$tdataIPCE_NAIVE[".shortTableName"] = "IPCE_NAIVE";
$tdataIPCE_NAIVE[".nSecOptions"] = 0;
$tdataIPCE_NAIVE[".recsPerRowPrint"] = 1;
$tdataIPCE_NAIVE[".mainTableOwnerID"] = "";
$tdataIPCE_NAIVE[".moveNext"] = 1;
$tdataIPCE_NAIVE[".entityType"] = 1;

$tdataIPCE_NAIVE[".strOriginalTableName"] = "mined";

	



$tdataIPCE_NAIVE[".showAddInPopup"] = false;

$tdataIPCE_NAIVE[".showEditInPopup"] = false;

$tdataIPCE_NAIVE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataIPCE_NAIVE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataIPCE_NAIVE[".fieldsForRegister"] = array();

	$tdataIPCE_NAIVE[".listAjax"] = true;

	$tdataIPCE_NAIVE[".audit"] = false;

	$tdataIPCE_NAIVE[".locking"] = false;



$tdataIPCE_NAIVE[".list"] = true;



$tdataIPCE_NAIVE[".reorderRecordsByHeader"] = true;
$tdataIPCE_NAIVE[".createSortByDropdown"] = true;
$tdataIPCE_NAIVE[".strSortControlSettingsJSON"] = "[]";




$tdataIPCE_NAIVE[".import"] = true;

$tdataIPCE_NAIVE[".exportTo"] = true;

$tdataIPCE_NAIVE[".printFriendly"] = true;


$tdataIPCE_NAIVE[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataIPCE_NAIVE[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataIPCE_NAIVE[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataIPCE_NAIVE[".searchSaving"] = false;
//

$tdataIPCE_NAIVE[".showSearchPanel"] = true;
		$tdataIPCE_NAIVE[".flexibleSearch"] = true;

$tdataIPCE_NAIVE[".isUseAjaxSuggest"] = true;

$tdataIPCE_NAIVE[".rowHighlite"] = true;





$tdataIPCE_NAIVE[".ajaxCodeSnippetAdded"] = false;

$tdataIPCE_NAIVE[".buttonsAdded"] = false;

$tdataIPCE_NAIVE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataIPCE_NAIVE[".isUseTimeForSearch"] = false;



$tdataIPCE_NAIVE[".badgeColor"] = "00C2C5";


$tdataIPCE_NAIVE[".allSearchFields"] = array();
$tdataIPCE_NAIVE[".filterFields"] = array();
$tdataIPCE_NAIVE[".requiredSearchFields"] = array();






$tdataIPCE_NAIVE[".tableType"] = "list";

$tdataIPCE_NAIVE[".printerPageOrientation"] = 0;
$tdataIPCE_NAIVE[".nPrinterPageScale"] = 100;

$tdataIPCE_NAIVE[".nPrinterSplitRecords"] = 40;

$tdataIPCE_NAIVE[".nPrinterPDFSplitRecords"] = 40;



$tdataIPCE_NAIVE[".geocodingEnabled"] = true;
$tdataIPCE_NAIVE[".geocodingData"] = array();
$tdataIPCE_NAIVE[".geocodingData"]["latField"] = "y";
$tdataIPCE_NAIVE[".geocodingData"]["lngField"] = "x";
$tdataIPCE_NAIVE[".geocodingData"]["addressFields"] = array();
	$tdataIPCE_NAIVE[".geocodingData"]["addressFields"][] = "departamento";
	$tdataIPCE_NAIVE[".geocodingData"]["addressFields"][] = "dep_mun";





$tdataIPCE_NAIVE[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataIPCE_NAIVE[".pageSize"] = 20;

$tdataIPCE_NAIVE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataIPCE_NAIVE[".strOrderBy"] = $tstrOrderBy;

$tdataIPCE_NAIVE[".orderindexes"] = array();

$tdataIPCE_NAIVE[".sqlHead"] = " ";
$tdataIPCE_NAIVE[".sqlFrom"] = "";
$tdataIPCE_NAIVE[".sqlWhereExpr"] = "";
$tdataIPCE_NAIVE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataIPCE_NAIVE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataIPCE_NAIVE[".arrGroupsPerPage"] = $arrGPP;

$tdataIPCE_NAIVE[".highlightSearchResults"] = true;

$tableKeysIPCE_NAIVE = array();
$tdataIPCE_NAIVE[".Keys"] = $tableKeysIPCE_NAIVE;

$tdataIPCE_NAIVE[".listFields"] = array();

$tdataIPCE_NAIVE[".hideMobileList"] = array();


$tdataIPCE_NAIVE[".viewFields"] = array();

$tdataIPCE_NAIVE[".addFields"] = array();

$tdataIPCE_NAIVE[".masterListFields"] = array();

$tdataIPCE_NAIVE[".inlineAddFields"] = array();

$tdataIPCE_NAIVE[".editFields"] = array();

$tdataIPCE_NAIVE[".inlineEditFields"] = array();

$tdataIPCE_NAIVE[".updateSelectedFields"] = array();


$tdataIPCE_NAIVE[".exportFields"] = array();

$tdataIPCE_NAIVE[".importFields"] = array();

$tdataIPCE_NAIVE[".printFields"] = array();



$tables_data["IPCE_NAIVE"]=&$tdataIPCE_NAIVE;
$field_labels["IPCE_NAIVE"] = &$fieldLabelsIPCE_NAIVE;
$fieldToolTips["IPCE_NAIVE"] = &$fieldToolTipsIPCE_NAIVE;
$placeHolders["IPCE_NAIVE"] = &$placeHoldersIPCE_NAIVE;
$page_titles["IPCE_NAIVE"] = &$pageTitlesIPCE_NAIVE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["IPCE_NAIVE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["IPCE_NAIVE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_IPCE_NAIVE()
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
$proto0["m_srcTableName"]="IPCE_NAIVE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_IPCE_NAIVE = createSqlQuery_IPCE_NAIVE();


	
		;



$tdataIPCE_NAIVE[".sqlquery"] = $queryData_IPCE_NAIVE;

$tableEvents["IPCE_NAIVE"] = new eventsBase;
$tdataIPCE_NAIVE[".hasEvents"] = false;

?>