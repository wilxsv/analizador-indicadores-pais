<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamined1 = array();
	$tdatamined1[".truncateText"] = true;
	$tdatamined1[".NumberOfChars"] = 80;
	$tdatamined1[".ShortName"] = "mined1";
	$tdatamined1[".OwnerID"] = "";
	$tdatamined1[".OriginalTable"] = "mined";

//	field labels
$fieldLabelsmined1 = array();
$fieldToolTipsmined1 = array();
$pageTitlesmined1 = array();
$placeHoldersmined1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmined1["Spanish"] = array();
	$fieldToolTipsmined1["Spanish"] = array();
	$placeHoldersmined1["Spanish"] = array();
	$pageTitlesmined1["Spanish"] = array();
	if (count($fieldToolTipsmined1["Spanish"]))
		$tdatamined1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmined1["English"] = array();
	$fieldToolTipsmined1["English"] = array();
	$placeHoldersmined1["English"] = array();
	$pageTitlesmined1["English"] = array();
	if (count($fieldToolTipsmined1["English"]))
		$tdatamined1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmined1[""] = array();
	$fieldToolTipsmined1[""] = array();
	$placeHoldersmined1[""] = array();
	$pageTitlesmined1[""] = array();
	if (count($fieldToolTipsmined1[""]))
		$tdatamined1[".isUseToolTips"] = true;
}


	$tdatamined1[".NCSearch"] = true;



$tdatamined1[".shortTableName"] = "mined1";
$tdatamined1[".nSecOptions"] = 0;
$tdatamined1[".recsPerRowPrint"] = 1;
$tdatamined1[".mainTableOwnerID"] = "";
$tdatamined1[".moveNext"] = 1;
$tdatamined1[".entityType"] = 1;

$tdatamined1[".strOriginalTableName"] = "mined";

	



$tdatamined1[".showAddInPopup"] = false;

$tdatamined1[".showEditInPopup"] = false;

$tdatamined1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamined1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamined1[".fieldsForRegister"] = array();

	$tdatamined1[".listAjax"] = true;

	$tdatamined1[".audit"] = false;

	$tdatamined1[".locking"] = false;



$tdatamined1[".list"] = true;



$tdatamined1[".reorderRecordsByHeader"] = true;
$tdatamined1[".createSortByDropdown"] = true;
$tdatamined1[".strSortControlSettingsJSON"] = "";




$tdatamined1[".import"] = true;

$tdatamined1[".exportTo"] = true;

$tdatamined1[".printFriendly"] = true;


$tdatamined1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamined1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamined1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamined1[".searchSaving"] = false;
//

$tdatamined1[".showSearchPanel"] = true;
		$tdatamined1[".flexibleSearch"] = true;

$tdatamined1[".isUseAjaxSuggest"] = true;

$tdatamined1[".rowHighlite"] = true;





$tdatamined1[".ajaxCodeSnippetAdded"] = false;

$tdatamined1[".buttonsAdded"] = false;

$tdatamined1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamined1[".isUseTimeForSearch"] = false;



$tdatamined1[".badgeColor"] = "CD853F";


$tdatamined1[".allSearchFields"] = array();
$tdatamined1[".filterFields"] = array();
$tdatamined1[".requiredSearchFields"] = array();






$tdatamined1[".tableType"] = "list";

$tdatamined1[".printerPageOrientation"] = 0;
$tdatamined1[".nPrinterPageScale"] = 100;

$tdatamined1[".nPrinterSplitRecords"] = 40;

$tdatamined1[".nPrinterPDFSplitRecords"] = 40;



$tdatamined1[".geocodingEnabled"] = true;
$tdatamined1[".geocodingData"] = array();
$tdatamined1[".geocodingData"]["latField"] = "y";
$tdatamined1[".geocodingData"]["lngField"] = "x";
$tdatamined1[".geocodingData"]["addressFields"] = array();
	$tdatamined1[".geocodingData"]["addressFields"][] = "departamento";
	$tdatamined1[".geocodingData"]["addressFields"][] = "dep_mun";





$tdatamined1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamined1[".pageSize"] = 20;

$tdatamined1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamined1[".strOrderBy"] = $tstrOrderBy;

$tdatamined1[".orderindexes"] = array();

$tdatamined1[".sqlHead"] = " ";
$tdatamined1[".sqlFrom"] = "";
$tdatamined1[".sqlWhereExpr"] = "";
$tdatamined1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamined1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamined1[".arrGroupsPerPage"] = $arrGPP;

$tdatamined1[".highlightSearchResults"] = true;

$tableKeysmined1 = array();
$tdatamined1[".Keys"] = $tableKeysmined1;

$tdatamined1[".listFields"] = array();

$tdatamined1[".hideMobileList"] = array();


$tdatamined1[".viewFields"] = array();

$tdatamined1[".addFields"] = array();

$tdatamined1[".masterListFields"] = array();

$tdatamined1[".inlineAddFields"] = array();

$tdatamined1[".editFields"] = array();

$tdatamined1[".inlineEditFields"] = array();

$tdatamined1[".updateSelectedFields"] = array();


$tdatamined1[".exportFields"] = array();

$tdatamined1[".importFields"] = array();

$tdatamined1[".printFields"] = array();



$tables_data["mined1"]=&$tdatamined1;
$field_labels["mined1"] = &$fieldLabelsmined1;
$fieldToolTips["mined1"] = &$fieldToolTipsmined1;
$placeHolders["mined1"] = &$placeHoldersmined1;
$page_titles["mined1"] = &$pageTitlesmined1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mined1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mined1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mined1()
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
$proto0["m_srcTableName"]="mined1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mined1 = createSqlQuery_mined1();


	
		;



$tdatamined1[".sqlquery"] = $queryData_mined1;

$tableEvents["mined1"] = new eventsBase;
$tdatamined1[".hasEvents"] = false;

?>