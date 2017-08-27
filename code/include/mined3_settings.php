<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamined3 = array();
	$tdatamined3[".truncateText"] = true;
	$tdatamined3[".NumberOfChars"] = 80;
	$tdatamined3[".ShortName"] = "mined3";
	$tdatamined3[".OwnerID"] = "";
	$tdatamined3[".OriginalTable"] = "mined";

//	field labels
$fieldLabelsmined3 = array();
$fieldToolTipsmined3 = array();
$pageTitlesmined3 = array();
$placeHoldersmined3 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmined3["Spanish"] = array();
	$fieldToolTipsmined3["Spanish"] = array();
	$placeHoldersmined3["Spanish"] = array();
	$pageTitlesmined3["Spanish"] = array();
	if (count($fieldToolTipsmined3["Spanish"]))
		$tdatamined3[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmined3["English"] = array();
	$fieldToolTipsmined3["English"] = array();
	$placeHoldersmined3["English"] = array();
	$pageTitlesmined3["English"] = array();
	if (count($fieldToolTipsmined3["English"]))
		$tdatamined3[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmined3[""] = array();
	$fieldToolTipsmined3[""] = array();
	$placeHoldersmined3[""] = array();
	$pageTitlesmined3[""] = array();
	if (count($fieldToolTipsmined3[""]))
		$tdatamined3[".isUseToolTips"] = true;
}


	$tdatamined3[".NCSearch"] = true;



$tdatamined3[".shortTableName"] = "mined3";
$tdatamined3[".nSecOptions"] = 0;
$tdatamined3[".recsPerRowPrint"] = 1;
$tdatamined3[".mainTableOwnerID"] = "";
$tdatamined3[".moveNext"] = 1;
$tdatamined3[".entityType"] = 1;

$tdatamined3[".strOriginalTableName"] = "mined";

	



$tdatamined3[".showAddInPopup"] = false;

$tdatamined3[".showEditInPopup"] = false;

$tdatamined3[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamined3[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamined3[".fieldsForRegister"] = array();

	$tdatamined3[".listAjax"] = true;

	$tdatamined3[".audit"] = false;

	$tdatamined3[".locking"] = false;



$tdatamined3[".list"] = true;



$tdatamined3[".reorderRecordsByHeader"] = true;
$tdatamined3[".createSortByDropdown"] = true;
$tdatamined3[".strSortControlSettingsJSON"] = "";




$tdatamined3[".import"] = true;

$tdatamined3[".exportTo"] = true;

$tdatamined3[".printFriendly"] = true;


$tdatamined3[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamined3[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamined3[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamined3[".searchSaving"] = false;
//

$tdatamined3[".showSearchPanel"] = true;
		$tdatamined3[".flexibleSearch"] = true;

$tdatamined3[".isUseAjaxSuggest"] = true;

$tdatamined3[".rowHighlite"] = true;





$tdatamined3[".ajaxCodeSnippetAdded"] = false;

$tdatamined3[".buttonsAdded"] = false;

$tdatamined3[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamined3[".isUseTimeForSearch"] = false;



$tdatamined3[".badgeColor"] = "6DA5C8";


$tdatamined3[".allSearchFields"] = array();
$tdatamined3[".filterFields"] = array();
$tdatamined3[".requiredSearchFields"] = array();






$tdatamined3[".tableType"] = "list";

$tdatamined3[".printerPageOrientation"] = 0;
$tdatamined3[".nPrinterPageScale"] = 100;

$tdatamined3[".nPrinterSplitRecords"] = 40;

$tdatamined3[".nPrinterPDFSplitRecords"] = 40;



$tdatamined3[".geocodingEnabled"] = false;





$tdatamined3[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamined3[".pageSize"] = 20;

$tdatamined3[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamined3[".strOrderBy"] = $tstrOrderBy;

$tdatamined3[".orderindexes"] = array();

$tdatamined3[".sqlHead"] = " ";
$tdatamined3[".sqlFrom"] = "";
$tdatamined3[".sqlWhereExpr"] = "";
$tdatamined3[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamined3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamined3[".arrGroupsPerPage"] = $arrGPP;

$tdatamined3[".highlightSearchResults"] = true;

$tableKeysmined3 = array();
$tdatamined3[".Keys"] = $tableKeysmined3;

$tdatamined3[".listFields"] = array();

$tdatamined3[".hideMobileList"] = array();


$tdatamined3[".viewFields"] = array();

$tdatamined3[".addFields"] = array();

$tdatamined3[".masterListFields"] = array();

$tdatamined3[".inlineAddFields"] = array();

$tdatamined3[".editFields"] = array();

$tdatamined3[".inlineEditFields"] = array();

$tdatamined3[".updateSelectedFields"] = array();


$tdatamined3[".exportFields"] = array();

$tdatamined3[".importFields"] = array();

$tdatamined3[".printFields"] = array();



$tables_data["mined3"]=&$tdatamined3;
$field_labels["mined3"] = &$fieldLabelsmined3;
$fieldToolTips["mined3"] = &$fieldToolTipsmined3;
$placeHolders["mined3"] = &$placeHoldersmined3;
$page_titles["mined3"] = &$pageTitlesmined3;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mined3"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mined3"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mined3()
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
$proto0["m_srcTableName"]="mined3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mined3 = createSqlQuery_mined3();


	
		;



$tdatamined3[".sqlquery"] = $queryData_mined3;

$tableEvents["mined3"] = new eventsBase;
$tdatamined3[".hasEvents"] = false;

?>