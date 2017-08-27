<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMaxima_Matricula_Mined = array();
	$tdataMaxima_Matricula_Mined[".truncateText"] = true;
	$tdataMaxima_Matricula_Mined[".NumberOfChars"] = 80;
	$tdataMaxima_Matricula_Mined[".ShortName"] = "Maxima_Matricula_Mined";
	$tdataMaxima_Matricula_Mined[".OwnerID"] = "";
	$tdataMaxima_Matricula_Mined[".OriginalTable"] = "mined";

//	field labels
$fieldLabelsMaxima_Matricula_Mined = array();
$fieldToolTipsMaxima_Matricula_Mined = array();
$pageTitlesMaxima_Matricula_Mined = array();
$placeHoldersMaxima_Matricula_Mined = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsMaxima_Matricula_Mined["Spanish"] = array();
	$fieldToolTipsMaxima_Matricula_Mined["Spanish"] = array();
	$placeHoldersMaxima_Matricula_Mined["Spanish"] = array();
	$pageTitlesMaxima_Matricula_Mined["Spanish"] = array();
	if (count($fieldToolTipsMaxima_Matricula_Mined["Spanish"]))
		$tdataMaxima_Matricula_Mined[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMaxima_Matricula_Mined["English"] = array();
	$fieldToolTipsMaxima_Matricula_Mined["English"] = array();
	$placeHoldersMaxima_Matricula_Mined["English"] = array();
	$pageTitlesMaxima_Matricula_Mined["English"] = array();
	if (count($fieldToolTipsMaxima_Matricula_Mined["English"]))
		$tdataMaxima_Matricula_Mined[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMaxima_Matricula_Mined[""] = array();
	$fieldToolTipsMaxima_Matricula_Mined[""] = array();
	$placeHoldersMaxima_Matricula_Mined[""] = array();
	$pageTitlesMaxima_Matricula_Mined[""] = array();
	if (count($fieldToolTipsMaxima_Matricula_Mined[""]))
		$tdataMaxima_Matricula_Mined[".isUseToolTips"] = true;
}


	$tdataMaxima_Matricula_Mined[".NCSearch"] = true;



$tdataMaxima_Matricula_Mined[".shortTableName"] = "Maxima_Matricula_Mined";
$tdataMaxima_Matricula_Mined[".nSecOptions"] = 0;
$tdataMaxima_Matricula_Mined[".recsPerRowPrint"] = 1;
$tdataMaxima_Matricula_Mined[".mainTableOwnerID"] = "";
$tdataMaxima_Matricula_Mined[".moveNext"] = 1;
$tdataMaxima_Matricula_Mined[".entityType"] = 1;

$tdataMaxima_Matricula_Mined[".strOriginalTableName"] = "mined";

	



$tdataMaxima_Matricula_Mined[".showAddInPopup"] = false;

$tdataMaxima_Matricula_Mined[".showEditInPopup"] = false;

$tdataMaxima_Matricula_Mined[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMaxima_Matricula_Mined[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMaxima_Matricula_Mined[".fieldsForRegister"] = array();

	$tdataMaxima_Matricula_Mined[".listAjax"] = true;

	$tdataMaxima_Matricula_Mined[".audit"] = false;

	$tdataMaxima_Matricula_Mined[".locking"] = false;



$tdataMaxima_Matricula_Mined[".list"] = true;



$tdataMaxima_Matricula_Mined[".reorderRecordsByHeader"] = true;
$tdataMaxima_Matricula_Mined[".createSortByDropdown"] = true;
$tdataMaxima_Matricula_Mined[".strSortControlSettingsJSON"] = "[]";




$tdataMaxima_Matricula_Mined[".import"] = true;

$tdataMaxima_Matricula_Mined[".exportTo"] = true;

$tdataMaxima_Matricula_Mined[".printFriendly"] = true;


$tdataMaxima_Matricula_Mined[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataMaxima_Matricula_Mined[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataMaxima_Matricula_Mined[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataMaxima_Matricula_Mined[".searchSaving"] = false;
//

$tdataMaxima_Matricula_Mined[".showSearchPanel"] = true;
		$tdataMaxima_Matricula_Mined[".flexibleSearch"] = true;

$tdataMaxima_Matricula_Mined[".isUseAjaxSuggest"] = true;

$tdataMaxima_Matricula_Mined[".rowHighlite"] = true;





$tdataMaxima_Matricula_Mined[".ajaxCodeSnippetAdded"] = false;

$tdataMaxima_Matricula_Mined[".buttonsAdded"] = false;

$tdataMaxima_Matricula_Mined[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMaxima_Matricula_Mined[".isUseTimeForSearch"] = false;



$tdataMaxima_Matricula_Mined[".badgeColor"] = "00C2C5";


$tdataMaxima_Matricula_Mined[".allSearchFields"] = array();
$tdataMaxima_Matricula_Mined[".filterFields"] = array();
$tdataMaxima_Matricula_Mined[".requiredSearchFields"] = array();






$tdataMaxima_Matricula_Mined[".tableType"] = "list";

$tdataMaxima_Matricula_Mined[".printerPageOrientation"] = 0;
$tdataMaxima_Matricula_Mined[".nPrinterPageScale"] = 100;

$tdataMaxima_Matricula_Mined[".nPrinterSplitRecords"] = 40;

$tdataMaxima_Matricula_Mined[".nPrinterPDFSplitRecords"] = 40;



$tdataMaxima_Matricula_Mined[".geocodingEnabled"] = true;
$tdataMaxima_Matricula_Mined[".geocodingData"] = array();
$tdataMaxima_Matricula_Mined[".geocodingData"]["latField"] = "y";
$tdataMaxima_Matricula_Mined[".geocodingData"]["lngField"] = "x";
$tdataMaxima_Matricula_Mined[".geocodingData"]["addressFields"] = array();
	$tdataMaxima_Matricula_Mined[".geocodingData"]["addressFields"][] = "departamento";
	$tdataMaxima_Matricula_Mined[".geocodingData"]["addressFields"][] = "dep_mun";





$tdataMaxima_Matricula_Mined[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataMaxima_Matricula_Mined[".pageSize"] = 20;

$tdataMaxima_Matricula_Mined[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMaxima_Matricula_Mined[".strOrderBy"] = $tstrOrderBy;

$tdataMaxima_Matricula_Mined[".orderindexes"] = array();

$tdataMaxima_Matricula_Mined[".sqlHead"] = " ";
$tdataMaxima_Matricula_Mined[".sqlFrom"] = "";
$tdataMaxima_Matricula_Mined[".sqlWhereExpr"] = "";
$tdataMaxima_Matricula_Mined[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMaxima_Matricula_Mined[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMaxima_Matricula_Mined[".arrGroupsPerPage"] = $arrGPP;

$tdataMaxima_Matricula_Mined[".highlightSearchResults"] = true;

$tableKeysMaxima_Matricula_Mined = array();
$tdataMaxima_Matricula_Mined[".Keys"] = $tableKeysMaxima_Matricula_Mined;

$tdataMaxima_Matricula_Mined[".listFields"] = array();

$tdataMaxima_Matricula_Mined[".hideMobileList"] = array();


$tdataMaxima_Matricula_Mined[".viewFields"] = array();

$tdataMaxima_Matricula_Mined[".addFields"] = array();

$tdataMaxima_Matricula_Mined[".masterListFields"] = array();

$tdataMaxima_Matricula_Mined[".inlineAddFields"] = array();

$tdataMaxima_Matricula_Mined[".editFields"] = array();

$tdataMaxima_Matricula_Mined[".inlineEditFields"] = array();

$tdataMaxima_Matricula_Mined[".updateSelectedFields"] = array();


$tdataMaxima_Matricula_Mined[".exportFields"] = array();

$tdataMaxima_Matricula_Mined[".importFields"] = array();

$tdataMaxima_Matricula_Mined[".printFields"] = array();



$tables_data["Maxima Matricula Mined"]=&$tdataMaxima_Matricula_Mined;
$field_labels["Maxima_Matricula_Mined"] = &$fieldLabelsMaxima_Matricula_Mined;
$fieldToolTips["Maxima_Matricula_Mined"] = &$fieldToolTipsMaxima_Matricula_Mined;
$placeHolders["Maxima_Matricula_Mined"] = &$placeHoldersMaxima_Matricula_Mined;
$page_titles["Maxima_Matricula_Mined"] = &$pageTitlesMaxima_Matricula_Mined;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Maxima Matricula Mined"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Maxima Matricula Mined"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Maxima_Matricula_Mined()
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
$proto0["m_srcTableName"]="Maxima Matricula Mined";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Maxima_Matricula_Mined = createSqlQuery_Maxima_Matricula_Mined();


	
		;



$tdataMaxima_Matricula_Mined[".sqlquery"] = $queryData_Maxima_Matricula_Mined;

$tableEvents["Maxima Matricula Mined"] = new eventsBase;
$tdataMaxima_Matricula_Mined[".hasEvents"] = false;

?>