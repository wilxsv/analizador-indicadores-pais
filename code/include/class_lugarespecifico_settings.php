<?php
require_once(getabspath("classes/cipherer.php"));




$tdataclass_lugarespecifico = array();
	$tdataclass_lugarespecifico[".truncateText"] = true;
	$tdataclass_lugarespecifico[".NumberOfChars"] = 80;
	$tdataclass_lugarespecifico[".ShortName"] = "class_lugarespecifico";
	$tdataclass_lugarespecifico[".OwnerID"] = "";
	$tdataclass_lugarespecifico[".OriginalTable"] = "class_lugarespecifico";

//	field labels
$fieldLabelsclass_lugarespecifico = array();
$fieldToolTipsclass_lugarespecifico = array();
$pageTitlesclass_lugarespecifico = array();
$placeHoldersclass_lugarespecifico = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsclass_lugarespecifico["Spanish"] = array();
	$fieldToolTipsclass_lugarespecifico["Spanish"] = array();
	$placeHoldersclass_lugarespecifico["Spanish"] = array();
	$pageTitlesclass_lugarespecifico["Spanish"] = array();
	if (count($fieldToolTipsclass_lugarespecifico["Spanish"]))
		$tdataclass_lugarespecifico[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsclass_lugarespecifico["English"] = array();
	$fieldToolTipsclass_lugarespecifico["English"] = array();
	$placeHoldersclass_lugarespecifico["English"] = array();
	$pageTitlesclass_lugarespecifico["English"] = array();
	if (count($fieldToolTipsclass_lugarespecifico["English"]))
		$tdataclass_lugarespecifico[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsclass_lugarespecifico[""] = array();
	$fieldToolTipsclass_lugarespecifico[""] = array();
	$placeHoldersclass_lugarespecifico[""] = array();
	$pageTitlesclass_lugarespecifico[""] = array();
	if (count($fieldToolTipsclass_lugarespecifico[""]))
		$tdataclass_lugarespecifico[".isUseToolTips"] = true;
}





$tdataclass_lugarespecifico[".shortTableName"] = "class_lugarespecifico";
$tdataclass_lugarespecifico[".nSecOptions"] = 0;
$tdataclass_lugarespecifico[".recsPerRowPrint"] = 1;
$tdataclass_lugarespecifico[".mainTableOwnerID"] = "";
$tdataclass_lugarespecifico[".moveNext"] = 1;
$tdataclass_lugarespecifico[".entityType"] = 0;

$tdataclass_lugarespecifico[".strOriginalTableName"] = "class_lugarespecifico";

	



$tdataclass_lugarespecifico[".showAddInPopup"] = false;

$tdataclass_lugarespecifico[".showEditInPopup"] = false;

$tdataclass_lugarespecifico[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataclass_lugarespecifico[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataclass_lugarespecifico[".fieldsForRegister"] = array();

	$tdataclass_lugarespecifico[".listAjax"] = true;

	$tdataclass_lugarespecifico[".audit"] = false;

	$tdataclass_lugarespecifico[".locking"] = false;



$tdataclass_lugarespecifico[".list"] = true;



$tdataclass_lugarespecifico[".reorderRecordsByHeader"] = true;
$tdataclass_lugarespecifico[".createSortByDropdown"] = true;
$tdataclass_lugarespecifico[".strSortControlSettingsJSON"] = "";




$tdataclass_lugarespecifico[".import"] = true;

$tdataclass_lugarespecifico[".exportTo"] = true;

$tdataclass_lugarespecifico[".printFriendly"] = true;


$tdataclass_lugarespecifico[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataclass_lugarespecifico[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataclass_lugarespecifico[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataclass_lugarespecifico[".searchSaving"] = false;
//

$tdataclass_lugarespecifico[".showSearchPanel"] = true;
		$tdataclass_lugarespecifico[".flexibleSearch"] = true;

$tdataclass_lugarespecifico[".isUseAjaxSuggest"] = true;

$tdataclass_lugarespecifico[".rowHighlite"] = true;





$tdataclass_lugarespecifico[".ajaxCodeSnippetAdded"] = false;

$tdataclass_lugarespecifico[".buttonsAdded"] = false;

$tdataclass_lugarespecifico[".addPageEvents"] = false;

// use timepicker for search panel
$tdataclass_lugarespecifico[".isUseTimeForSearch"] = false;



$tdataclass_lugarespecifico[".badgeColor"] = "00C2C5";


$tdataclass_lugarespecifico[".allSearchFields"] = array();
$tdataclass_lugarespecifico[".filterFields"] = array();
$tdataclass_lugarespecifico[".requiredSearchFields"] = array();






$tdataclass_lugarespecifico[".tableType"] = "list";

$tdataclass_lugarespecifico[".printerPageOrientation"] = 0;
$tdataclass_lugarespecifico[".nPrinterPageScale"] = 100;

$tdataclass_lugarespecifico[".nPrinterSplitRecords"] = 40;

$tdataclass_lugarespecifico[".nPrinterPDFSplitRecords"] = 40;



$tdataclass_lugarespecifico[".geocodingEnabled"] = false;





$tdataclass_lugarespecifico[".listGridLayout"] = 3;

$tdataclass_lugarespecifico[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdataclass_lugarespecifico[".pageSize"] = 10;

$tdataclass_lugarespecifico[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataclass_lugarespecifico[".strOrderBy"] = $tstrOrderBy;

$tdataclass_lugarespecifico[".orderindexes"] = array();

$tdataclass_lugarespecifico[".sqlHead"] = " ";
$tdataclass_lugarespecifico[".sqlFrom"] = "";
$tdataclass_lugarespecifico[".sqlWhereExpr"] = "";
$tdataclass_lugarespecifico[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataclass_lugarespecifico[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataclass_lugarespecifico[".arrGroupsPerPage"] = $arrGPP;

$tdataclass_lugarespecifico[".highlightSearchResults"] = true;

$tableKeysclass_lugarespecifico = array();
$tdataclass_lugarespecifico[".Keys"] = $tableKeysclass_lugarespecifico;

$tdataclass_lugarespecifico[".listFields"] = array();

$tdataclass_lugarespecifico[".hideMobileList"] = array();


$tdataclass_lugarespecifico[".viewFields"] = array();

$tdataclass_lugarespecifico[".addFields"] = array();

$tdataclass_lugarespecifico[".masterListFields"] = array();

$tdataclass_lugarespecifico[".inlineAddFields"] = array();

$tdataclass_lugarespecifico[".editFields"] = array();

$tdataclass_lugarespecifico[".inlineEditFields"] = array();

$tdataclass_lugarespecifico[".updateSelectedFields"] = array();


$tdataclass_lugarespecifico[".exportFields"] = array();

$tdataclass_lugarespecifico[".importFields"] = array();

$tdataclass_lugarespecifico[".printFields"] = array();



$tables_data["class_lugarespecifico"]=&$tdataclass_lugarespecifico;
$field_labels["class_lugarespecifico"] = &$fieldLabelsclass_lugarespecifico;
$fieldToolTips["class_lugarespecifico"] = &$fieldToolTipsclass_lugarespecifico;
$placeHolders["class_lugarespecifico"] = &$placeHoldersclass_lugarespecifico;
$page_titles["class_lugarespecifico"] = &$pageTitlesclass_lugarespecifico;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["class_lugarespecifico"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["class_lugarespecifico"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_class_lugarespecifico()
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
$proto0["m_srcTableName"]="class_lugarespecifico";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_class_lugarespecifico = createSqlQuery_class_lugarespecifico();


	
		;



$tdataclass_lugarespecifico[".sqlquery"] = $queryData_class_lugarespecifico;

$tableEvents["class_lugarespecifico"] = new eventsBase;
$tdataclass_lugarespecifico[".hasEvents"] = false;

?>