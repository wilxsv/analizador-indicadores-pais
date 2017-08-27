<?php
require_once(getabspath("classes/cipherer.php"));




$tdatareemplazar_sectores_hechosdelictivos = array();
	$tdatareemplazar_sectores_hechosdelictivos[".truncateText"] = true;
	$tdatareemplazar_sectores_hechosdelictivos[".NumberOfChars"] = 80;
	$tdatareemplazar_sectores_hechosdelictivos[".ShortName"] = "reemplazar_sectores_hechosdelictivos";
	$tdatareemplazar_sectores_hechosdelictivos[".OwnerID"] = "";
	$tdatareemplazar_sectores_hechosdelictivos[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsreemplazar_sectores_hechosdelictivos = array();
$fieldToolTipsreemplazar_sectores_hechosdelictivos = array();
$pageTitlesreemplazar_sectores_hechosdelictivos = array();
$placeHoldersreemplazar_sectores_hechosdelictivos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsreemplazar_sectores_hechosdelictivos["Spanish"] = array();
	$fieldToolTipsreemplazar_sectores_hechosdelictivos["Spanish"] = array();
	$placeHoldersreemplazar_sectores_hechosdelictivos["Spanish"] = array();
	$pageTitlesreemplazar_sectores_hechosdelictivos["Spanish"] = array();
	if (count($fieldToolTipsreemplazar_sectores_hechosdelictivos["Spanish"]))
		$tdatareemplazar_sectores_hechosdelictivos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreemplazar_sectores_hechosdelictivos["English"] = array();
	$fieldToolTipsreemplazar_sectores_hechosdelictivos["English"] = array();
	$placeHoldersreemplazar_sectores_hechosdelictivos["English"] = array();
	$pageTitlesreemplazar_sectores_hechosdelictivos["English"] = array();
	if (count($fieldToolTipsreemplazar_sectores_hechosdelictivos["English"]))
		$tdatareemplazar_sectores_hechosdelictivos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsreemplazar_sectores_hechosdelictivos[""] = array();
	$fieldToolTipsreemplazar_sectores_hechosdelictivos[""] = array();
	$placeHoldersreemplazar_sectores_hechosdelictivos[""] = array();
	$pageTitlesreemplazar_sectores_hechosdelictivos[""] = array();
	if (count($fieldToolTipsreemplazar_sectores_hechosdelictivos[""]))
		$tdatareemplazar_sectores_hechosdelictivos[".isUseToolTips"] = true;
}





$tdatareemplazar_sectores_hechosdelictivos[".shortTableName"] = "reemplazar_sectores_hechosdelictivos";
$tdatareemplazar_sectores_hechosdelictivos[".nSecOptions"] = 0;
$tdatareemplazar_sectores_hechosdelictivos[".recsPerRowPrint"] = 1;
$tdatareemplazar_sectores_hechosdelictivos[".mainTableOwnerID"] = "";
$tdatareemplazar_sectores_hechosdelictivos[".moveNext"] = 1;
$tdatareemplazar_sectores_hechosdelictivos[".entityType"] = 1;

$tdatareemplazar_sectores_hechosdelictivos[".strOriginalTableName"] = "hechosdelictivos";

	



$tdatareemplazar_sectores_hechosdelictivos[".showAddInPopup"] = false;

$tdatareemplazar_sectores_hechosdelictivos[".showEditInPopup"] = false;

$tdatareemplazar_sectores_hechosdelictivos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatareemplazar_sectores_hechosdelictivos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatareemplazar_sectores_hechosdelictivos[".fieldsForRegister"] = array();

	$tdatareemplazar_sectores_hechosdelictivos[".listAjax"] = true;

	$tdatareemplazar_sectores_hechosdelictivos[".audit"] = false;

	$tdatareemplazar_sectores_hechosdelictivos[".locking"] = false;


$tdatareemplazar_sectores_hechosdelictivos[".add"] = true;
$tdatareemplazar_sectores_hechosdelictivos[".afterAddAction"] = 1;
$tdatareemplazar_sectores_hechosdelictivos[".closePopupAfterAdd"] = 1;
$tdatareemplazar_sectores_hechosdelictivos[".afterAddActionDetTable"] = "";

$tdatareemplazar_sectores_hechosdelictivos[".list"] = true;



$tdatareemplazar_sectores_hechosdelictivos[".reorderRecordsByHeader"] = true;
$tdatareemplazar_sectores_hechosdelictivos[".createSortByDropdown"] = true;
$tdatareemplazar_sectores_hechosdelictivos[".strSortControlSettingsJSON"] = "";



$tdatareemplazar_sectores_hechosdelictivos[".inlineAdd"] = true;

$tdatareemplazar_sectores_hechosdelictivos[".import"] = true;

$tdatareemplazar_sectores_hechosdelictivos[".exportTo"] = true;

$tdatareemplazar_sectores_hechosdelictivos[".printFriendly"] = true;


$tdatareemplazar_sectores_hechosdelictivos[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatareemplazar_sectores_hechosdelictivos[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatareemplazar_sectores_hechosdelictivos[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatareemplazar_sectores_hechosdelictivos[".searchSaving"] = false;
//

$tdatareemplazar_sectores_hechosdelictivos[".showSearchPanel"] = true;
		$tdatareemplazar_sectores_hechosdelictivos[".flexibleSearch"] = true;

$tdatareemplazar_sectores_hechosdelictivos[".isUseAjaxSuggest"] = true;

$tdatareemplazar_sectores_hechosdelictivos[".rowHighlite"] = true;





$tdatareemplazar_sectores_hechosdelictivos[".ajaxCodeSnippetAdded"] = false;

$tdatareemplazar_sectores_hechosdelictivos[".buttonsAdded"] = false;

$tdatareemplazar_sectores_hechosdelictivos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareemplazar_sectores_hechosdelictivos[".isUseTimeForSearch"] = false;





$tdatareemplazar_sectores_hechosdelictivos[".allSearchFields"] = array();
$tdatareemplazar_sectores_hechosdelictivos[".filterFields"] = array();
$tdatareemplazar_sectores_hechosdelictivos[".requiredSearchFields"] = array();






$tdatareemplazar_sectores_hechosdelictivos[".tableType"] = "list";

$tdatareemplazar_sectores_hechosdelictivos[".printerPageOrientation"] = 0;
$tdatareemplazar_sectores_hechosdelictivos[".nPrinterPageScale"] = 100;

$tdatareemplazar_sectores_hechosdelictivos[".nPrinterSplitRecords"] = 40;

$tdatareemplazar_sectores_hechosdelictivos[".nPrinterPDFSplitRecords"] = 40;



$tdatareemplazar_sectores_hechosdelictivos[".geocodingEnabled"] = false;





$tdatareemplazar_sectores_hechosdelictivos[".listGridLayout"] = 3;

$tdatareemplazar_sectores_hechosdelictivos[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatareemplazar_sectores_hechosdelictivos[".pageSize"] = 10;

$tdatareemplazar_sectores_hechosdelictivos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatareemplazar_sectores_hechosdelictivos[".strOrderBy"] = $tstrOrderBy;

$tdatareemplazar_sectores_hechosdelictivos[".orderindexes"] = array();

$tdatareemplazar_sectores_hechosdelictivos[".sqlHead"] = " ";
$tdatareemplazar_sectores_hechosdelictivos[".sqlFrom"] = "";
$tdatareemplazar_sectores_hechosdelictivos[".sqlWhereExpr"] = "";
$tdatareemplazar_sectores_hechosdelictivos[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareemplazar_sectores_hechosdelictivos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareemplazar_sectores_hechosdelictivos[".arrGroupsPerPage"] = $arrGPP;

$tdatareemplazar_sectores_hechosdelictivos[".highlightSearchResults"] = true;

$tableKeysreemplazar_sectores_hechosdelictivos = array();
$tdatareemplazar_sectores_hechosdelictivos[".Keys"] = $tableKeysreemplazar_sectores_hechosdelictivos;

$tdatareemplazar_sectores_hechosdelictivos[".listFields"] = array();

$tdatareemplazar_sectores_hechosdelictivos[".hideMobileList"] = array();


$tdatareemplazar_sectores_hechosdelictivos[".viewFields"] = array();

$tdatareemplazar_sectores_hechosdelictivos[".addFields"] = array();

$tdatareemplazar_sectores_hechosdelictivos[".masterListFields"] = array();

$tdatareemplazar_sectores_hechosdelictivos[".inlineAddFields"] = array();

$tdatareemplazar_sectores_hechosdelictivos[".editFields"] = array();

$tdatareemplazar_sectores_hechosdelictivos[".inlineEditFields"] = array();

$tdatareemplazar_sectores_hechosdelictivos[".updateSelectedFields"] = array();


$tdatareemplazar_sectores_hechosdelictivos[".exportFields"] = array();

$tdatareemplazar_sectores_hechosdelictivos[".importFields"] = array();

$tdatareemplazar_sectores_hechosdelictivos[".printFields"] = array();



$tables_data["reemplazar_sectores_hechosdelictivos"]=&$tdatareemplazar_sectores_hechosdelictivos;
$field_labels["reemplazar_sectores_hechosdelictivos"] = &$fieldLabelsreemplazar_sectores_hechosdelictivos;
$fieldToolTips["reemplazar_sectores_hechosdelictivos"] = &$fieldToolTipsreemplazar_sectores_hechosdelictivos;
$placeHolders["reemplazar_sectores_hechosdelictivos"] = &$placeHoldersreemplazar_sectores_hechosdelictivos;
$page_titles["reemplazar_sectores_hechosdelictivos"] = &$pageTitlesreemplazar_sectores_hechosdelictivos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["reemplazar_sectores_hechosdelictivos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["reemplazar_sectores_hechosdelictivos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_reemplazar_sectores_hechosdelictivos()
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
$proto0["m_srcTableName"]="reemplazar_sectores_hechosdelictivos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reemplazar_sectores_hechosdelictivos = createSqlQuery_reemplazar_sectores_hechosdelictivos();


	
		;



$tdatareemplazar_sectores_hechosdelictivos[".sqlquery"] = $queryData_reemplazar_sectores_hechosdelictivos;

$tableEvents["reemplazar_sectores_hechosdelictivos"] = new eventsBase;
$tdatareemplazar_sectores_hechosdelictivos[".hasEvents"] = false;

?>