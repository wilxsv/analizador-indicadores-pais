<?php
require_once(getabspath("classes/cipherer.php"));




$tdatareemplazar_sectores_ppd_delitos = array();
	$tdatareemplazar_sectores_ppd_delitos[".truncateText"] = true;
	$tdatareemplazar_sectores_ppd_delitos[".NumberOfChars"] = 80;
	$tdatareemplazar_sectores_ppd_delitos[".ShortName"] = "reemplazar_sectores_ppd_delitos";
	$tdatareemplazar_sectores_ppd_delitos[".OwnerID"] = "";
	$tdatareemplazar_sectores_ppd_delitos[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsreemplazar_sectores_ppd_delitos = array();
$fieldToolTipsreemplazar_sectores_ppd_delitos = array();
$pageTitlesreemplazar_sectores_ppd_delitos = array();
$placeHoldersreemplazar_sectores_ppd_delitos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsreemplazar_sectores_ppd_delitos["Spanish"] = array();
	$fieldToolTipsreemplazar_sectores_ppd_delitos["Spanish"] = array();
	$placeHoldersreemplazar_sectores_ppd_delitos["Spanish"] = array();
	$pageTitlesreemplazar_sectores_ppd_delitos["Spanish"] = array();
	if (count($fieldToolTipsreemplazar_sectores_ppd_delitos["Spanish"]))
		$tdatareemplazar_sectores_ppd_delitos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreemplazar_sectores_ppd_delitos["English"] = array();
	$fieldToolTipsreemplazar_sectores_ppd_delitos["English"] = array();
	$placeHoldersreemplazar_sectores_ppd_delitos["English"] = array();
	$pageTitlesreemplazar_sectores_ppd_delitos["English"] = array();
	if (count($fieldToolTipsreemplazar_sectores_ppd_delitos["English"]))
		$tdatareemplazar_sectores_ppd_delitos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsreemplazar_sectores_ppd_delitos["French"] = array();
	$fieldToolTipsreemplazar_sectores_ppd_delitos["French"] = array();
	$placeHoldersreemplazar_sectores_ppd_delitos["French"] = array();
	$pageTitlesreemplazar_sectores_ppd_delitos["French"] = array();
	if (count($fieldToolTipsreemplazar_sectores_ppd_delitos["French"]))
		$tdatareemplazar_sectores_ppd_delitos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsreemplazar_sectores_ppd_delitos["German"] = array();
	$fieldToolTipsreemplazar_sectores_ppd_delitos["German"] = array();
	$placeHoldersreemplazar_sectores_ppd_delitos["German"] = array();
	$pageTitlesreemplazar_sectores_ppd_delitos["German"] = array();
	if (count($fieldToolTipsreemplazar_sectores_ppd_delitos["German"]))
		$tdatareemplazar_sectores_ppd_delitos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsreemplazar_sectores_ppd_delitos["Italian"] = array();
	$fieldToolTipsreemplazar_sectores_ppd_delitos["Italian"] = array();
	$placeHoldersreemplazar_sectores_ppd_delitos["Italian"] = array();
	$pageTitlesreemplazar_sectores_ppd_delitos["Italian"] = array();
	if (count($fieldToolTipsreemplazar_sectores_ppd_delitos["Italian"]))
		$tdatareemplazar_sectores_ppd_delitos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsreemplazar_sectores_ppd_delitos[""] = array();
	$fieldToolTipsreemplazar_sectores_ppd_delitos[""] = array();
	$placeHoldersreemplazar_sectores_ppd_delitos[""] = array();
	$pageTitlesreemplazar_sectores_ppd_delitos[""] = array();
	if (count($fieldToolTipsreemplazar_sectores_ppd_delitos[""]))
		$tdatareemplazar_sectores_ppd_delitos[".isUseToolTips"] = true;
}





$tdatareemplazar_sectores_ppd_delitos[".shortTableName"] = "reemplazar_sectores_ppd_delitos";
$tdatareemplazar_sectores_ppd_delitos[".nSecOptions"] = 0;
$tdatareemplazar_sectores_ppd_delitos[".recsPerRowPrint"] = 1;
$tdatareemplazar_sectores_ppd_delitos[".mainTableOwnerID"] = "";
$tdatareemplazar_sectores_ppd_delitos[".moveNext"] = 1;
$tdatareemplazar_sectores_ppd_delitos[".entityType"] = 1;

$tdatareemplazar_sectores_ppd_delitos[".strOriginalTableName"] = "hechosdelictivos";

	



$tdatareemplazar_sectores_ppd_delitos[".showAddInPopup"] = false;

$tdatareemplazar_sectores_ppd_delitos[".showEditInPopup"] = false;

$tdatareemplazar_sectores_ppd_delitos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatareemplazar_sectores_ppd_delitos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatareemplazar_sectores_ppd_delitos[".fieldsForRegister"] = array();

$tdatareemplazar_sectores_ppd_delitos[".listAjax"] = false;

	$tdatareemplazar_sectores_ppd_delitos[".audit"] = false;

	$tdatareemplazar_sectores_ppd_delitos[".locking"] = false;


$tdatareemplazar_sectores_ppd_delitos[".add"] = true;
$tdatareemplazar_sectores_ppd_delitos[".afterAddAction"] = 1;
$tdatareemplazar_sectores_ppd_delitos[".closePopupAfterAdd"] = 1;
$tdatareemplazar_sectores_ppd_delitos[".afterAddActionDetTable"] = "";

$tdatareemplazar_sectores_ppd_delitos[".list"] = true;



$tdatareemplazar_sectores_ppd_delitos[".reorderRecordsByHeader"] = true;



$tdatareemplazar_sectores_ppd_delitos[".inlineAdd"] = true;

$tdatareemplazar_sectores_ppd_delitos[".import"] = true;

$tdatareemplazar_sectores_ppd_delitos[".exportTo"] = true;

$tdatareemplazar_sectores_ppd_delitos[".printFriendly"] = true;


$tdatareemplazar_sectores_ppd_delitos[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatareemplazar_sectores_ppd_delitos[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatareemplazar_sectores_ppd_delitos[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatareemplazar_sectores_ppd_delitos[".searchSaving"] = false;
//

$tdatareemplazar_sectores_ppd_delitos[".showSearchPanel"] = true;
		$tdatareemplazar_sectores_ppd_delitos[".flexibleSearch"] = true;

$tdatareemplazar_sectores_ppd_delitos[".isUseAjaxSuggest"] = true;

$tdatareemplazar_sectores_ppd_delitos[".rowHighlite"] = true;





$tdatareemplazar_sectores_ppd_delitos[".ajaxCodeSnippetAdded"] = false;

$tdatareemplazar_sectores_ppd_delitos[".buttonsAdded"] = false;

$tdatareemplazar_sectores_ppd_delitos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareemplazar_sectores_ppd_delitos[".isUseTimeForSearch"] = false;





$tdatareemplazar_sectores_ppd_delitos[".allSearchFields"] = array();
$tdatareemplazar_sectores_ppd_delitos[".filterFields"] = array();
$tdatareemplazar_sectores_ppd_delitos[".requiredSearchFields"] = array();






$tdatareemplazar_sectores_ppd_delitos[".tableType"] = "list";

$tdatareemplazar_sectores_ppd_delitos[".printerPageOrientation"] = 0;
$tdatareemplazar_sectores_ppd_delitos[".nPrinterPageScale"] = 100;

$tdatareemplazar_sectores_ppd_delitos[".nPrinterSplitRecords"] = 40;

$tdatareemplazar_sectores_ppd_delitos[".nPrinterPDFSplitRecords"] = 40;



$tdatareemplazar_sectores_ppd_delitos[".geocodingEnabled"] = false;





$tdatareemplazar_sectores_ppd_delitos[".listGridLayout"] = 3;

$tdatareemplazar_sectores_ppd_delitos[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatareemplazar_sectores_ppd_delitos[".pageSize"] = 10;

$tdatareemplazar_sectores_ppd_delitos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatareemplazar_sectores_ppd_delitos[".strOrderBy"] = $tstrOrderBy;

$tdatareemplazar_sectores_ppd_delitos[".orderindexes"] = array();

$tdatareemplazar_sectores_ppd_delitos[".sqlHead"] = "";
$tdatareemplazar_sectores_ppd_delitos[".sqlFrom"] = "";
$tdatareemplazar_sectores_ppd_delitos[".sqlWhereExpr"] = "";
$tdatareemplazar_sectores_ppd_delitos[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareemplazar_sectores_ppd_delitos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareemplazar_sectores_ppd_delitos[".arrGroupsPerPage"] = $arrGPP;

$tdatareemplazar_sectores_ppd_delitos[".highlightSearchResults"] = true;

$tableKeysreemplazar_sectores_ppd_delitos = array();
$tdatareemplazar_sectores_ppd_delitos[".Keys"] = $tableKeysreemplazar_sectores_ppd_delitos;

$tdatareemplazar_sectores_ppd_delitos[".listFields"] = array();

$tdatareemplazar_sectores_ppd_delitos[".hideMobileList"] = array();


$tdatareemplazar_sectores_ppd_delitos[".viewFields"] = array();

$tdatareemplazar_sectores_ppd_delitos[".addFields"] = array();

$tdatareemplazar_sectores_ppd_delitos[".masterListFields"] = array();

$tdatareemplazar_sectores_ppd_delitos[".inlineAddFields"] = array();

$tdatareemplazar_sectores_ppd_delitos[".editFields"] = array();

$tdatareemplazar_sectores_ppd_delitos[".inlineEditFields"] = array();

$tdatareemplazar_sectores_ppd_delitos[".updateSelectedFields"] = array();


$tdatareemplazar_sectores_ppd_delitos[".exportFields"] = array();

$tdatareemplazar_sectores_ppd_delitos[".importFields"] = array();

$tdatareemplazar_sectores_ppd_delitos[".printFields"] = array();



$tables_data["reemplazar sectores ppd delitos"]=&$tdatareemplazar_sectores_ppd_delitos;
$field_labels["reemplazar_sectores_ppd_delitos"] = &$fieldLabelsreemplazar_sectores_ppd_delitos;
$fieldToolTips["reemplazar_sectores_ppd_delitos"] = &$fieldToolTipsreemplazar_sectores_ppd_delitos;
$placeHolders["reemplazar_sectores_ppd_delitos"] = &$placeHoldersreemplazar_sectores_ppd_delitos;
$page_titles["reemplazar_sectores_ppd_delitos"] = &$pageTitlesreemplazar_sectores_ppd_delitos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["reemplazar sectores ppd delitos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["reemplazar sectores ppd delitos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_reemplazar_sectores_ppd_delitos()
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
$proto0["m_srcTableName"]="reemplazar sectores ppd delitos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reemplazar_sectores_ppd_delitos = createSqlQuery_reemplazar_sectores_ppd_delitos();


	
		;



$tdatareemplazar_sectores_ppd_delitos[".sqlquery"] = $queryData_reemplazar_sectores_ppd_delitos;

$tableEvents["reemplazar sectores ppd delitos"] = new eventsBase;
$tdatareemplazar_sectores_ppd_delitos[".hasEvents"] = false;

?>