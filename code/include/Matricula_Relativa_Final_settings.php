<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMatricula_Relativa_Final = array();
	$tdataMatricula_Relativa_Final[".truncateText"] = true;
	$tdataMatricula_Relativa_Final[".NumberOfChars"] = 80;
	$tdataMatricula_Relativa_Final[".ShortName"] = "Matricula_Relativa_Final";
	$tdataMatricula_Relativa_Final[".OwnerID"] = "";
	$tdataMatricula_Relativa_Final[".OriginalTable"] = "mined";

//	field labels
$fieldLabelsMatricula_Relativa_Final = array();
$fieldToolTipsMatricula_Relativa_Final = array();
$pageTitlesMatricula_Relativa_Final = array();
$placeHoldersMatricula_Relativa_Final = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsMatricula_Relativa_Final["Spanish"] = array();
	$fieldToolTipsMatricula_Relativa_Final["Spanish"] = array();
	$placeHoldersMatricula_Relativa_Final["Spanish"] = array();
	$pageTitlesMatricula_Relativa_Final["Spanish"] = array();
	if (count($fieldToolTipsMatricula_Relativa_Final["Spanish"]))
		$tdataMatricula_Relativa_Final[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMatricula_Relativa_Final["English"] = array();
	$fieldToolTipsMatricula_Relativa_Final["English"] = array();
	$placeHoldersMatricula_Relativa_Final["English"] = array();
	$pageTitlesMatricula_Relativa_Final["English"] = array();
	if (count($fieldToolTipsMatricula_Relativa_Final["English"]))
		$tdataMatricula_Relativa_Final[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMatricula_Relativa_Final[""] = array();
	$fieldToolTipsMatricula_Relativa_Final[""] = array();
	$placeHoldersMatricula_Relativa_Final[""] = array();
	$pageTitlesMatricula_Relativa_Final[""] = array();
	if (count($fieldToolTipsMatricula_Relativa_Final[""]))
		$tdataMatricula_Relativa_Final[".isUseToolTips"] = true;
}


	$tdataMatricula_Relativa_Final[".NCSearch"] = true;



$tdataMatricula_Relativa_Final[".shortTableName"] = "Matricula_Relativa_Final";
$tdataMatricula_Relativa_Final[".nSecOptions"] = 0;
$tdataMatricula_Relativa_Final[".recsPerRowPrint"] = 1;
$tdataMatricula_Relativa_Final[".mainTableOwnerID"] = "";
$tdataMatricula_Relativa_Final[".moveNext"] = 1;
$tdataMatricula_Relativa_Final[".entityType"] = 1;

$tdataMatricula_Relativa_Final[".strOriginalTableName"] = "mined";

	



$tdataMatricula_Relativa_Final[".showAddInPopup"] = false;

$tdataMatricula_Relativa_Final[".showEditInPopup"] = false;

$tdataMatricula_Relativa_Final[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMatricula_Relativa_Final[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMatricula_Relativa_Final[".fieldsForRegister"] = array();

	$tdataMatricula_Relativa_Final[".listAjax"] = true;

	$tdataMatricula_Relativa_Final[".audit"] = false;

	$tdataMatricula_Relativa_Final[".locking"] = false;



$tdataMatricula_Relativa_Final[".list"] = true;



$tdataMatricula_Relativa_Final[".reorderRecordsByHeader"] = true;
$tdataMatricula_Relativa_Final[".createSortByDropdown"] = true;
$tdataMatricula_Relativa_Final[".strSortControlSettingsJSON"] = "[]";




$tdataMatricula_Relativa_Final[".import"] = true;

$tdataMatricula_Relativa_Final[".exportTo"] = true;

$tdataMatricula_Relativa_Final[".printFriendly"] = true;


$tdataMatricula_Relativa_Final[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataMatricula_Relativa_Final[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataMatricula_Relativa_Final[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataMatricula_Relativa_Final[".searchSaving"] = false;
//

$tdataMatricula_Relativa_Final[".showSearchPanel"] = true;
		$tdataMatricula_Relativa_Final[".flexibleSearch"] = true;

$tdataMatricula_Relativa_Final[".isUseAjaxSuggest"] = true;

$tdataMatricula_Relativa_Final[".rowHighlite"] = true;





$tdataMatricula_Relativa_Final[".ajaxCodeSnippetAdded"] = false;

$tdataMatricula_Relativa_Final[".buttonsAdded"] = false;

$tdataMatricula_Relativa_Final[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMatricula_Relativa_Final[".isUseTimeForSearch"] = false;



$tdataMatricula_Relativa_Final[".badgeColor"] = "00C2C5";


$tdataMatricula_Relativa_Final[".allSearchFields"] = array();
$tdataMatricula_Relativa_Final[".filterFields"] = array();
$tdataMatricula_Relativa_Final[".requiredSearchFields"] = array();






$tdataMatricula_Relativa_Final[".tableType"] = "list";

$tdataMatricula_Relativa_Final[".printerPageOrientation"] = 0;
$tdataMatricula_Relativa_Final[".nPrinterPageScale"] = 100;

$tdataMatricula_Relativa_Final[".nPrinterSplitRecords"] = 40;

$tdataMatricula_Relativa_Final[".nPrinterPDFSplitRecords"] = 40;



$tdataMatricula_Relativa_Final[".geocodingEnabled"] = true;
$tdataMatricula_Relativa_Final[".geocodingData"] = array();
$tdataMatricula_Relativa_Final[".geocodingData"]["latField"] = "y";
$tdataMatricula_Relativa_Final[".geocodingData"]["lngField"] = "x";
$tdataMatricula_Relativa_Final[".geocodingData"]["addressFields"] = array();
	$tdataMatricula_Relativa_Final[".geocodingData"]["addressFields"][] = "departamento";
	$tdataMatricula_Relativa_Final[".geocodingData"]["addressFields"][] = "dep_mun";





$tdataMatricula_Relativa_Final[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataMatricula_Relativa_Final[".pageSize"] = 20;

$tdataMatricula_Relativa_Final[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMatricula_Relativa_Final[".strOrderBy"] = $tstrOrderBy;

$tdataMatricula_Relativa_Final[".orderindexes"] = array();

$tdataMatricula_Relativa_Final[".sqlHead"] = " ";
$tdataMatricula_Relativa_Final[".sqlFrom"] = "";
$tdataMatricula_Relativa_Final[".sqlWhereExpr"] = "";
$tdataMatricula_Relativa_Final[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMatricula_Relativa_Final[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMatricula_Relativa_Final[".arrGroupsPerPage"] = $arrGPP;

$tdataMatricula_Relativa_Final[".highlightSearchResults"] = true;

$tableKeysMatricula_Relativa_Final = array();
$tdataMatricula_Relativa_Final[".Keys"] = $tableKeysMatricula_Relativa_Final;

$tdataMatricula_Relativa_Final[".listFields"] = array();

$tdataMatricula_Relativa_Final[".hideMobileList"] = array();


$tdataMatricula_Relativa_Final[".viewFields"] = array();

$tdataMatricula_Relativa_Final[".addFields"] = array();

$tdataMatricula_Relativa_Final[".masterListFields"] = array();

$tdataMatricula_Relativa_Final[".inlineAddFields"] = array();

$tdataMatricula_Relativa_Final[".editFields"] = array();

$tdataMatricula_Relativa_Final[".inlineEditFields"] = array();

$tdataMatricula_Relativa_Final[".updateSelectedFields"] = array();


$tdataMatricula_Relativa_Final[".exportFields"] = array();

$tdataMatricula_Relativa_Final[".importFields"] = array();

$tdataMatricula_Relativa_Final[".printFields"] = array();



$tables_data["Matricula Relativa Final"]=&$tdataMatricula_Relativa_Final;
$field_labels["Matricula_Relativa_Final"] = &$fieldLabelsMatricula_Relativa_Final;
$fieldToolTips["Matricula_Relativa_Final"] = &$fieldToolTipsMatricula_Relativa_Final;
$placeHolders["Matricula_Relativa_Final"] = &$placeHoldersMatricula_Relativa_Final;
$page_titles["Matricula_Relativa_Final"] = &$pageTitlesMatricula_Relativa_Final;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Matricula Relativa Final"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Matricula Relativa Final"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Matricula_Relativa_Final()
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
$proto0["m_srcTableName"]="Matricula Relativa Final";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Matricula_Relativa_Final = createSqlQuery_Matricula_Relativa_Final();


	
		;



$tdataMatricula_Relativa_Final[".sqlquery"] = $queryData_Matricula_Relativa_Final;

$tableEvents["Matricula Relativa Final"] = new eventsBase;
$tdataMatricula_Relativa_Final[".hasEvents"] = false;

?>