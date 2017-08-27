<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTransito_class_tipo_veh_culo = array();
	$tdataTransito_class_tipo_veh_culo[".truncateText"] = true;
	$tdataTransito_class_tipo_veh_culo[".NumberOfChars"] = 80;
	$tdataTransito_class_tipo_veh_culo[".ShortName"] = "Transito_class_tipo_veh_culo";
	$tdataTransito_class_tipo_veh_culo[".OwnerID"] = "";
	$tdataTransito_class_tipo_veh_culo[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsTransito_class_tipo_veh_culo = array();
$fieldToolTipsTransito_class_tipo_veh_culo = array();
$pageTitlesTransito_class_tipo_veh_culo = array();
$placeHoldersTransito_class_tipo_veh_culo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsTransito_class_tipo_veh_culo["Spanish"] = array();
	$fieldToolTipsTransito_class_tipo_veh_culo["Spanish"] = array();
	$placeHoldersTransito_class_tipo_veh_culo["Spanish"] = array();
	$pageTitlesTransito_class_tipo_veh_culo["Spanish"] = array();
	if (count($fieldToolTipsTransito_class_tipo_veh_culo["Spanish"]))
		$tdataTransito_class_tipo_veh_culo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTransito_class_tipo_veh_culo["English"] = array();
	$fieldToolTipsTransito_class_tipo_veh_culo["English"] = array();
	$placeHoldersTransito_class_tipo_veh_culo["English"] = array();
	$pageTitlesTransito_class_tipo_veh_culo["English"] = array();
	if (count($fieldToolTipsTransito_class_tipo_veh_culo["English"]))
		$tdataTransito_class_tipo_veh_culo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTransito_class_tipo_veh_culo[""] = array();
	$fieldToolTipsTransito_class_tipo_veh_culo[""] = array();
	$placeHoldersTransito_class_tipo_veh_culo[""] = array();
	$pageTitlesTransito_class_tipo_veh_culo[""] = array();
	if (count($fieldToolTipsTransito_class_tipo_veh_culo[""]))
		$tdataTransito_class_tipo_veh_culo[".isUseToolTips"] = true;
}





$tdataTransito_class_tipo_veh_culo[".shortTableName"] = "Transito_class_tipo_veh_culo";
$tdataTransito_class_tipo_veh_culo[".nSecOptions"] = 0;
$tdataTransito_class_tipo_veh_culo[".recsPerRowPrint"] = 1;
$tdataTransito_class_tipo_veh_culo[".mainTableOwnerID"] = "";
$tdataTransito_class_tipo_veh_culo[".moveNext"] = 1;
$tdataTransito_class_tipo_veh_culo[".entityType"] = 1;

$tdataTransito_class_tipo_veh_culo[".strOriginalTableName"] = "carcel";

	



$tdataTransito_class_tipo_veh_culo[".showAddInPopup"] = false;

$tdataTransito_class_tipo_veh_culo[".showEditInPopup"] = false;

$tdataTransito_class_tipo_veh_culo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTransito_class_tipo_veh_culo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTransito_class_tipo_veh_culo[".fieldsForRegister"] = array();

	$tdataTransito_class_tipo_veh_culo[".listAjax"] = true;

	$tdataTransito_class_tipo_veh_culo[".audit"] = false;

	$tdataTransito_class_tipo_veh_culo[".locking"] = false;



$tdataTransito_class_tipo_veh_culo[".list"] = true;



$tdataTransito_class_tipo_veh_culo[".reorderRecordsByHeader"] = true;
$tdataTransito_class_tipo_veh_culo[".createSortByDropdown"] = true;
$tdataTransito_class_tipo_veh_culo[".strSortControlSettingsJSON"] = "";




$tdataTransito_class_tipo_veh_culo[".import"] = true;

$tdataTransito_class_tipo_veh_culo[".exportTo"] = true;

$tdataTransito_class_tipo_veh_culo[".printFriendly"] = true;


$tdataTransito_class_tipo_veh_culo[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataTransito_class_tipo_veh_culo[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataTransito_class_tipo_veh_culo[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataTransito_class_tipo_veh_culo[".searchSaving"] = false;
//

$tdataTransito_class_tipo_veh_culo[".showSearchPanel"] = true;
		$tdataTransito_class_tipo_veh_culo[".flexibleSearch"] = true;

$tdataTransito_class_tipo_veh_culo[".isUseAjaxSuggest"] = true;

$tdataTransito_class_tipo_veh_culo[".rowHighlite"] = true;





$tdataTransito_class_tipo_veh_culo[".ajaxCodeSnippetAdded"] = false;

$tdataTransito_class_tipo_veh_culo[".buttonsAdded"] = false;

$tdataTransito_class_tipo_veh_culo[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTransito_class_tipo_veh_culo[".isUseTimeForSearch"] = false;





$tdataTransito_class_tipo_veh_culo[".allSearchFields"] = array();
$tdataTransito_class_tipo_veh_culo[".filterFields"] = array();
$tdataTransito_class_tipo_veh_culo[".requiredSearchFields"] = array();






$tdataTransito_class_tipo_veh_culo[".tableType"] = "list";

$tdataTransito_class_tipo_veh_culo[".printerPageOrientation"] = 0;
$tdataTransito_class_tipo_veh_culo[".nPrinterPageScale"] = 100;

$tdataTransito_class_tipo_veh_culo[".nPrinterSplitRecords"] = 40;

$tdataTransito_class_tipo_veh_culo[".nPrinterPDFSplitRecords"] = 40;



$tdataTransito_class_tipo_veh_culo[".geocodingEnabled"] = false;





$tdataTransito_class_tipo_veh_culo[".listGridLayout"] = 3;

$tdataTransito_class_tipo_veh_culo[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdataTransito_class_tipo_veh_culo[".pageSize"] = 10;

$tdataTransito_class_tipo_veh_culo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTransito_class_tipo_veh_culo[".strOrderBy"] = $tstrOrderBy;

$tdataTransito_class_tipo_veh_culo[".orderindexes"] = array();

$tdataTransito_class_tipo_veh_culo[".sqlHead"] = " ";
$tdataTransito_class_tipo_veh_culo[".sqlFrom"] = "";
$tdataTransito_class_tipo_veh_culo[".sqlWhereExpr"] = "";
$tdataTransito_class_tipo_veh_culo[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTransito_class_tipo_veh_culo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTransito_class_tipo_veh_culo[".arrGroupsPerPage"] = $arrGPP;

$tdataTransito_class_tipo_veh_culo[".highlightSearchResults"] = true;

$tableKeysTransito_class_tipo_veh_culo = array();
$tdataTransito_class_tipo_veh_culo[".Keys"] = $tableKeysTransito_class_tipo_veh_culo;

$tdataTransito_class_tipo_veh_culo[".listFields"] = array();

$tdataTransito_class_tipo_veh_culo[".hideMobileList"] = array();


$tdataTransito_class_tipo_veh_culo[".viewFields"] = array();

$tdataTransito_class_tipo_veh_culo[".addFields"] = array();

$tdataTransito_class_tipo_veh_culo[".masterListFields"] = array();

$tdataTransito_class_tipo_veh_culo[".inlineAddFields"] = array();

$tdataTransito_class_tipo_veh_culo[".editFields"] = array();

$tdataTransito_class_tipo_veh_culo[".inlineEditFields"] = array();

$tdataTransito_class_tipo_veh_culo[".updateSelectedFields"] = array();


$tdataTransito_class_tipo_veh_culo[".exportFields"] = array();

$tdataTransito_class_tipo_veh_culo[".importFields"] = array();

$tdataTransito_class_tipo_veh_culo[".printFields"] = array();



$tables_data["Transito class tipo vehículo"]=&$tdataTransito_class_tipo_veh_culo;
$field_labels["Transito_class_tipo_veh_culo"] = &$fieldLabelsTransito_class_tipo_veh_culo;
$fieldToolTips["Transito_class_tipo_veh_culo"] = &$fieldToolTipsTransito_class_tipo_veh_culo;
$placeHolders["Transito_class_tipo_veh_culo"] = &$placeHoldersTransito_class_tipo_veh_culo;
$page_titles["Transito_class_tipo_veh_culo"] = &$pageTitlesTransito_class_tipo_veh_culo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Transito class tipo vehículo"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Transito class tipo vehículo"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Transito_class_tipo_veh_culo()
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
$proto0["m_srcTableName"]="Transito class tipo vehículo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Transito_class_tipo_veh_culo = createSqlQuery_Transito_class_tipo_veh_culo();


	
		;



$tdataTransito_class_tipo_veh_culo[".sqlquery"] = $queryData_Transito_class_tipo_veh_culo;

$tableEvents["Transito class tipo vehículo"] = new eventsBase;
$tdataTransito_class_tipo_veh_culo[".hasEvents"] = false;

?>