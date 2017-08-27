<?php
require_once(getabspath("classes/cipherer.php"));




$tdatareemplazar_sectores_PPL = array();
	$tdatareemplazar_sectores_PPL[".truncateText"] = true;
	$tdatareemplazar_sectores_PPL[".NumberOfChars"] = 80;
	$tdatareemplazar_sectores_PPL[".ShortName"] = "reemplazar_sectores_PPL";
	$tdatareemplazar_sectores_PPL[".OwnerID"] = "";
	$tdatareemplazar_sectores_PPL[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsreemplazar_sectores_PPL = array();
$fieldToolTipsreemplazar_sectores_PPL = array();
$pageTitlesreemplazar_sectores_PPL = array();
$placeHoldersreemplazar_sectores_PPL = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsreemplazar_sectores_PPL["Spanish"] = array();
	$fieldToolTipsreemplazar_sectores_PPL["Spanish"] = array();
	$placeHoldersreemplazar_sectores_PPL["Spanish"] = array();
	$pageTitlesreemplazar_sectores_PPL["Spanish"] = array();
	if (count($fieldToolTipsreemplazar_sectores_PPL["Spanish"]))
		$tdatareemplazar_sectores_PPL[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreemplazar_sectores_PPL["English"] = array();
	$fieldToolTipsreemplazar_sectores_PPL["English"] = array();
	$placeHoldersreemplazar_sectores_PPL["English"] = array();
	$pageTitlesreemplazar_sectores_PPL["English"] = array();
	if (count($fieldToolTipsreemplazar_sectores_PPL["English"]))
		$tdatareemplazar_sectores_PPL[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsreemplazar_sectores_PPL[""] = array();
	$fieldToolTipsreemplazar_sectores_PPL[""] = array();
	$placeHoldersreemplazar_sectores_PPL[""] = array();
	$pageTitlesreemplazar_sectores_PPL[""] = array();
	if (count($fieldToolTipsreemplazar_sectores_PPL[""]))
		$tdatareemplazar_sectores_PPL[".isUseToolTips"] = true;
}





$tdatareemplazar_sectores_PPL[".shortTableName"] = "reemplazar_sectores_PPL";
$tdatareemplazar_sectores_PPL[".nSecOptions"] = 0;
$tdatareemplazar_sectores_PPL[".recsPerRowPrint"] = 1;
$tdatareemplazar_sectores_PPL[".mainTableOwnerID"] = "";
$tdatareemplazar_sectores_PPL[".moveNext"] = 1;
$tdatareemplazar_sectores_PPL[".entityType"] = 1;

$tdatareemplazar_sectores_PPL[".strOriginalTableName"] = "hechosdelictivos";

	



$tdatareemplazar_sectores_PPL[".showAddInPopup"] = false;

$tdatareemplazar_sectores_PPL[".showEditInPopup"] = false;

$tdatareemplazar_sectores_PPL[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatareemplazar_sectores_PPL[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatareemplazar_sectores_PPL[".fieldsForRegister"] = array();

	$tdatareemplazar_sectores_PPL[".listAjax"] = true;

	$tdatareemplazar_sectores_PPL[".audit"] = false;

	$tdatareemplazar_sectores_PPL[".locking"] = false;


$tdatareemplazar_sectores_PPL[".add"] = true;
$tdatareemplazar_sectores_PPL[".afterAddAction"] = 1;
$tdatareemplazar_sectores_PPL[".closePopupAfterAdd"] = 1;
$tdatareemplazar_sectores_PPL[".afterAddActionDetTable"] = "";

$tdatareemplazar_sectores_PPL[".list"] = true;



$tdatareemplazar_sectores_PPL[".reorderRecordsByHeader"] = true;
$tdatareemplazar_sectores_PPL[".createSortByDropdown"] = true;
$tdatareemplazar_sectores_PPL[".strSortControlSettingsJSON"] = "";



$tdatareemplazar_sectores_PPL[".inlineAdd"] = true;

$tdatareemplazar_sectores_PPL[".import"] = true;

$tdatareemplazar_sectores_PPL[".exportTo"] = true;

$tdatareemplazar_sectores_PPL[".printFriendly"] = true;


$tdatareemplazar_sectores_PPL[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatareemplazar_sectores_PPL[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatareemplazar_sectores_PPL[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatareemplazar_sectores_PPL[".searchSaving"] = false;
//

$tdatareemplazar_sectores_PPL[".showSearchPanel"] = true;
		$tdatareemplazar_sectores_PPL[".flexibleSearch"] = true;

$tdatareemplazar_sectores_PPL[".isUseAjaxSuggest"] = true;

$tdatareemplazar_sectores_PPL[".rowHighlite"] = true;





$tdatareemplazar_sectores_PPL[".ajaxCodeSnippetAdded"] = false;

$tdatareemplazar_sectores_PPL[".buttonsAdded"] = false;

$tdatareemplazar_sectores_PPL[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareemplazar_sectores_PPL[".isUseTimeForSearch"] = false;





$tdatareemplazar_sectores_PPL[".allSearchFields"] = array();
$tdatareemplazar_sectores_PPL[".filterFields"] = array();
$tdatareemplazar_sectores_PPL[".requiredSearchFields"] = array();






$tdatareemplazar_sectores_PPL[".tableType"] = "list";

$tdatareemplazar_sectores_PPL[".printerPageOrientation"] = 0;
$tdatareemplazar_sectores_PPL[".nPrinterPageScale"] = 100;

$tdatareemplazar_sectores_PPL[".nPrinterSplitRecords"] = 40;

$tdatareemplazar_sectores_PPL[".nPrinterPDFSplitRecords"] = 40;



$tdatareemplazar_sectores_PPL[".geocodingEnabled"] = false;





$tdatareemplazar_sectores_PPL[".listGridLayout"] = 3;

$tdatareemplazar_sectores_PPL[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatareemplazar_sectores_PPL[".pageSize"] = 10;

$tdatareemplazar_sectores_PPL[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatareemplazar_sectores_PPL[".strOrderBy"] = $tstrOrderBy;

$tdatareemplazar_sectores_PPL[".orderindexes"] = array();

$tdatareemplazar_sectores_PPL[".sqlHead"] = " ";
$tdatareemplazar_sectores_PPL[".sqlFrom"] = "";
$tdatareemplazar_sectores_PPL[".sqlWhereExpr"] = "";
$tdatareemplazar_sectores_PPL[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareemplazar_sectores_PPL[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareemplazar_sectores_PPL[".arrGroupsPerPage"] = $arrGPP;

$tdatareemplazar_sectores_PPL[".highlightSearchResults"] = true;

$tableKeysreemplazar_sectores_PPL = array();
$tdatareemplazar_sectores_PPL[".Keys"] = $tableKeysreemplazar_sectores_PPL;

$tdatareemplazar_sectores_PPL[".listFields"] = array();

$tdatareemplazar_sectores_PPL[".hideMobileList"] = array();


$tdatareemplazar_sectores_PPL[".viewFields"] = array();

$tdatareemplazar_sectores_PPL[".addFields"] = array();

$tdatareemplazar_sectores_PPL[".masterListFields"] = array();

$tdatareemplazar_sectores_PPL[".inlineAddFields"] = array();

$tdatareemplazar_sectores_PPL[".editFields"] = array();

$tdatareemplazar_sectores_PPL[".inlineEditFields"] = array();

$tdatareemplazar_sectores_PPL[".updateSelectedFields"] = array();


$tdatareemplazar_sectores_PPL[".exportFields"] = array();

$tdatareemplazar_sectores_PPL[".importFields"] = array();

$tdatareemplazar_sectores_PPL[".printFields"] = array();



$tables_data["reemplazar sectores PPL"]=&$tdatareemplazar_sectores_PPL;
$field_labels["reemplazar_sectores_PPL"] = &$fieldLabelsreemplazar_sectores_PPL;
$fieldToolTips["reemplazar_sectores_PPL"] = &$fieldToolTipsreemplazar_sectores_PPL;
$placeHolders["reemplazar_sectores_PPL"] = &$placeHoldersreemplazar_sectores_PPL;
$page_titles["reemplazar_sectores_PPL"] = &$pageTitlesreemplazar_sectores_PPL;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["reemplazar sectores PPL"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["reemplazar sectores PPL"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_reemplazar_sectores_PPL()
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
$proto0["m_srcTableName"]="reemplazar sectores PPL";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reemplazar_sectores_PPL = createSqlQuery_reemplazar_sectores_PPL();


	
		;



$tdatareemplazar_sectores_PPL[".sqlquery"] = $queryData_reemplazar_sectores_PPL;

$tableEvents["reemplazar sectores PPL"] = new eventsBase;
$tdatareemplazar_sectores_PPL[".hasEvents"] = false;

?>