<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapnc9111_class_delito = array();
	$tdatapnc9111_class_delito[".truncateText"] = true;
	$tdatapnc9111_class_delito[".NumberOfChars"] = 80;
	$tdatapnc9111_class_delito[".ShortName"] = "pnc9111_class_delito";
	$tdatapnc9111_class_delito[".OwnerID"] = "";
	$tdatapnc9111_class_delito[".OriginalTable"] = "pnc911";

//	field labels
$fieldLabelspnc9111_class_delito = array();
$fieldToolTipspnc9111_class_delito = array();
$pageTitlespnc9111_class_delito = array();
$placeHolderspnc9111_class_delito = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspnc9111_class_delito["Spanish"] = array();
	$fieldToolTipspnc9111_class_delito["Spanish"] = array();
	$placeHolderspnc9111_class_delito["Spanish"] = array();
	$pageTitlespnc9111_class_delito["Spanish"] = array();
	if (count($fieldToolTipspnc9111_class_delito["Spanish"]))
		$tdatapnc9111_class_delito[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspnc9111_class_delito["English"] = array();
	$fieldToolTipspnc9111_class_delito["English"] = array();
	$placeHolderspnc9111_class_delito["English"] = array();
	$pageTitlespnc9111_class_delito["English"] = array();
	if (count($fieldToolTipspnc9111_class_delito["English"]))
		$tdatapnc9111_class_delito[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspnc9111_class_delito[""] = array();
	$fieldToolTipspnc9111_class_delito[""] = array();
	$placeHolderspnc9111_class_delito[""] = array();
	$pageTitlespnc9111_class_delito[""] = array();
	if (count($fieldToolTipspnc9111_class_delito[""]))
		$tdatapnc9111_class_delito[".isUseToolTips"] = true;
}





$tdatapnc9111_class_delito[".shortTableName"] = "pnc9111_class_delito";
$tdatapnc9111_class_delito[".nSecOptions"] = 0;
$tdatapnc9111_class_delito[".recsPerRowPrint"] = 1;
$tdatapnc9111_class_delito[".mainTableOwnerID"] = "";
$tdatapnc9111_class_delito[".moveNext"] = 1;
$tdatapnc9111_class_delito[".entityType"] = 1;

$tdatapnc9111_class_delito[".strOriginalTableName"] = "pnc911";

	



$tdatapnc9111_class_delito[".showAddInPopup"] = false;

$tdatapnc9111_class_delito[".showEditInPopup"] = false;

$tdatapnc9111_class_delito[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapnc9111_class_delito[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapnc9111_class_delito[".fieldsForRegister"] = array();

	$tdatapnc9111_class_delito[".listAjax"] = true;

	$tdatapnc9111_class_delito[".audit"] = false;

	$tdatapnc9111_class_delito[".locking"] = false;



$tdatapnc9111_class_delito[".list"] = true;



$tdatapnc9111_class_delito[".reorderRecordsByHeader"] = true;
$tdatapnc9111_class_delito[".createSortByDropdown"] = true;
$tdatapnc9111_class_delito[".strSortControlSettingsJSON"] = "";




$tdatapnc9111_class_delito[".import"] = true;

$tdatapnc9111_class_delito[".exportTo"] = true;

$tdatapnc9111_class_delito[".printFriendly"] = true;


$tdatapnc9111_class_delito[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapnc9111_class_delito[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapnc9111_class_delito[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapnc9111_class_delito[".searchSaving"] = false;
//

$tdatapnc9111_class_delito[".showSearchPanel"] = true;
		$tdatapnc9111_class_delito[".flexibleSearch"] = true;

$tdatapnc9111_class_delito[".isUseAjaxSuggest"] = true;

$tdatapnc9111_class_delito[".rowHighlite"] = true;





$tdatapnc9111_class_delito[".ajaxCodeSnippetAdded"] = false;

$tdatapnc9111_class_delito[".buttonsAdded"] = false;

$tdatapnc9111_class_delito[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapnc9111_class_delito[".isUseTimeForSearch"] = false;





$tdatapnc9111_class_delito[".allSearchFields"] = array();
$tdatapnc9111_class_delito[".filterFields"] = array();
$tdatapnc9111_class_delito[".requiredSearchFields"] = array();






$tdatapnc9111_class_delito[".tableType"] = "list";

$tdatapnc9111_class_delito[".printerPageOrientation"] = 0;
$tdatapnc9111_class_delito[".nPrinterPageScale"] = 100;

$tdatapnc9111_class_delito[".nPrinterSplitRecords"] = 40;

$tdatapnc9111_class_delito[".nPrinterPDFSplitRecords"] = 40;



$tdatapnc9111_class_delito[".geocodingEnabled"] = false;





$tdatapnc9111_class_delito[".listGridLayout"] = 3;

$tdatapnc9111_class_delito[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatapnc9111_class_delito[".pageSize"] = 10;

$tdatapnc9111_class_delito[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapnc9111_class_delito[".strOrderBy"] = $tstrOrderBy;

$tdatapnc9111_class_delito[".orderindexes"] = array();

$tdatapnc9111_class_delito[".sqlHead"] = " ";
$tdatapnc9111_class_delito[".sqlFrom"] = "";
$tdatapnc9111_class_delito[".sqlWhereExpr"] = "";
$tdatapnc9111_class_delito[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapnc9111_class_delito[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapnc9111_class_delito[".arrGroupsPerPage"] = $arrGPP;

$tdatapnc9111_class_delito[".highlightSearchResults"] = true;

$tableKeyspnc9111_class_delito = array();
$tdatapnc9111_class_delito[".Keys"] = $tableKeyspnc9111_class_delito;

$tdatapnc9111_class_delito[".listFields"] = array();

$tdatapnc9111_class_delito[".hideMobileList"] = array();


$tdatapnc9111_class_delito[".viewFields"] = array();

$tdatapnc9111_class_delito[".addFields"] = array();

$tdatapnc9111_class_delito[".masterListFields"] = array();

$tdatapnc9111_class_delito[".inlineAddFields"] = array();

$tdatapnc9111_class_delito[".editFields"] = array();

$tdatapnc9111_class_delito[".inlineEditFields"] = array();

$tdatapnc9111_class_delito[".updateSelectedFields"] = array();


$tdatapnc9111_class_delito[".exportFields"] = array();

$tdatapnc9111_class_delito[".importFields"] = array();

$tdatapnc9111_class_delito[".printFields"] = array();



$tables_data["pnc9111 class delito"]=&$tdatapnc9111_class_delito;
$field_labels["pnc9111_class_delito"] = &$fieldLabelspnc9111_class_delito;
$fieldToolTips["pnc9111_class_delito"] = &$fieldToolTipspnc9111_class_delito;
$placeHolders["pnc9111_class_delito"] = &$placeHolderspnc9111_class_delito;
$page_titles["pnc9111_class_delito"] = &$pageTitlespnc9111_class_delito;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pnc9111 class delito"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["pnc9111 class delito"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pnc9111_class_delito()
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
$proto0["m_srcTableName"]="pnc9111 class delito";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pnc9111_class_delito = createSqlQuery_pnc9111_class_delito();


	
		;



$tdatapnc9111_class_delito[".sqlquery"] = $queryData_pnc9111_class_delito;

$tableEvents["pnc9111 class delito"] = new eventsBase;
$tdatapnc9111_class_delito[".hasEvents"] = false;

?>