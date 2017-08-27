<?php
require_once(getabspath("classes/cipherer.php"));




$tdataIPCE_FINAL = array();
	$tdataIPCE_FINAL[".truncateText"] = true;
	$tdataIPCE_FINAL[".NumberOfChars"] = 80;
	$tdataIPCE_FINAL[".ShortName"] = "IPCE_FINAL";
	$tdataIPCE_FINAL[".OwnerID"] = "";
	$tdataIPCE_FINAL[".OriginalTable"] = "mined";

//	field labels
$fieldLabelsIPCE_FINAL = array();
$fieldToolTipsIPCE_FINAL = array();
$pageTitlesIPCE_FINAL = array();
$placeHoldersIPCE_FINAL = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsIPCE_FINAL["Spanish"] = array();
	$fieldToolTipsIPCE_FINAL["Spanish"] = array();
	$placeHoldersIPCE_FINAL["Spanish"] = array();
	$pageTitlesIPCE_FINAL["Spanish"] = array();
	if (count($fieldToolTipsIPCE_FINAL["Spanish"]))
		$tdataIPCE_FINAL[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsIPCE_FINAL["English"] = array();
	$fieldToolTipsIPCE_FINAL["English"] = array();
	$placeHoldersIPCE_FINAL["English"] = array();
	$pageTitlesIPCE_FINAL["English"] = array();
	if (count($fieldToolTipsIPCE_FINAL["English"]))
		$tdataIPCE_FINAL[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsIPCE_FINAL[""] = array();
	$fieldToolTipsIPCE_FINAL[""] = array();
	$placeHoldersIPCE_FINAL[""] = array();
	$pageTitlesIPCE_FINAL[""] = array();
	if (count($fieldToolTipsIPCE_FINAL[""]))
		$tdataIPCE_FINAL[".isUseToolTips"] = true;
}


	$tdataIPCE_FINAL[".NCSearch"] = true;



$tdataIPCE_FINAL[".shortTableName"] = "IPCE_FINAL";
$tdataIPCE_FINAL[".nSecOptions"] = 0;
$tdataIPCE_FINAL[".recsPerRowPrint"] = 1;
$tdataIPCE_FINAL[".mainTableOwnerID"] = "";
$tdataIPCE_FINAL[".moveNext"] = 1;
$tdataIPCE_FINAL[".entityType"] = 1;

$tdataIPCE_FINAL[".strOriginalTableName"] = "mined";

	



$tdataIPCE_FINAL[".showAddInPopup"] = false;

$tdataIPCE_FINAL[".showEditInPopup"] = false;

$tdataIPCE_FINAL[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataIPCE_FINAL[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataIPCE_FINAL[".fieldsForRegister"] = array();

	$tdataIPCE_FINAL[".listAjax"] = true;

	$tdataIPCE_FINAL[".audit"] = false;

	$tdataIPCE_FINAL[".locking"] = false;



$tdataIPCE_FINAL[".list"] = true;



$tdataIPCE_FINAL[".reorderRecordsByHeader"] = true;
$tdataIPCE_FINAL[".createSortByDropdown"] = true;
$tdataIPCE_FINAL[".strSortControlSettingsJSON"] = "[]";




$tdataIPCE_FINAL[".import"] = true;

$tdataIPCE_FINAL[".exportTo"] = true;

$tdataIPCE_FINAL[".printFriendly"] = true;


$tdataIPCE_FINAL[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataIPCE_FINAL[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataIPCE_FINAL[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataIPCE_FINAL[".searchSaving"] = false;
//

$tdataIPCE_FINAL[".showSearchPanel"] = true;
		$tdataIPCE_FINAL[".flexibleSearch"] = true;

$tdataIPCE_FINAL[".isUseAjaxSuggest"] = true;

$tdataIPCE_FINAL[".rowHighlite"] = true;





$tdataIPCE_FINAL[".ajaxCodeSnippetAdded"] = false;

$tdataIPCE_FINAL[".buttonsAdded"] = false;

$tdataIPCE_FINAL[".addPageEvents"] = false;

// use timepicker for search panel
$tdataIPCE_FINAL[".isUseTimeForSearch"] = false;



$tdataIPCE_FINAL[".badgeColor"] = "00C2C5";


$tdataIPCE_FINAL[".allSearchFields"] = array();
$tdataIPCE_FINAL[".filterFields"] = array();
$tdataIPCE_FINAL[".requiredSearchFields"] = array();






$tdataIPCE_FINAL[".tableType"] = "list";

$tdataIPCE_FINAL[".printerPageOrientation"] = 0;
$tdataIPCE_FINAL[".nPrinterPageScale"] = 100;

$tdataIPCE_FINAL[".nPrinterSplitRecords"] = 40;

$tdataIPCE_FINAL[".nPrinterPDFSplitRecords"] = 40;



$tdataIPCE_FINAL[".geocodingEnabled"] = true;
$tdataIPCE_FINAL[".geocodingData"] = array();
$tdataIPCE_FINAL[".geocodingData"]["latField"] = "y";
$tdataIPCE_FINAL[".geocodingData"]["lngField"] = "x";
$tdataIPCE_FINAL[".geocodingData"]["addressFields"] = array();
	$tdataIPCE_FINAL[".geocodingData"]["addressFields"][] = "departamento";
	$tdataIPCE_FINAL[".geocodingData"]["addressFields"][] = "dep_mun";





$tdataIPCE_FINAL[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataIPCE_FINAL[".pageSize"] = 20;

$tdataIPCE_FINAL[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataIPCE_FINAL[".strOrderBy"] = $tstrOrderBy;

$tdataIPCE_FINAL[".orderindexes"] = array();

$tdataIPCE_FINAL[".sqlHead"] = " ";
$tdataIPCE_FINAL[".sqlFrom"] = "";
$tdataIPCE_FINAL[".sqlWhereExpr"] = "";
$tdataIPCE_FINAL[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataIPCE_FINAL[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataIPCE_FINAL[".arrGroupsPerPage"] = $arrGPP;

$tdataIPCE_FINAL[".highlightSearchResults"] = true;

$tableKeysIPCE_FINAL = array();
$tdataIPCE_FINAL[".Keys"] = $tableKeysIPCE_FINAL;

$tdataIPCE_FINAL[".listFields"] = array();

$tdataIPCE_FINAL[".hideMobileList"] = array();


$tdataIPCE_FINAL[".viewFields"] = array();

$tdataIPCE_FINAL[".addFields"] = array();

$tdataIPCE_FINAL[".masterListFields"] = array();

$tdataIPCE_FINAL[".inlineAddFields"] = array();

$tdataIPCE_FINAL[".editFields"] = array();

$tdataIPCE_FINAL[".inlineEditFields"] = array();

$tdataIPCE_FINAL[".updateSelectedFields"] = array();


$tdataIPCE_FINAL[".exportFields"] = array();

$tdataIPCE_FINAL[".importFields"] = array();

$tdataIPCE_FINAL[".printFields"] = array();



$tables_data["IPCE_FINAL"]=&$tdataIPCE_FINAL;
$field_labels["IPCE_FINAL"] = &$fieldLabelsIPCE_FINAL;
$fieldToolTips["IPCE_FINAL"] = &$fieldToolTipsIPCE_FINAL;
$placeHolders["IPCE_FINAL"] = &$placeHoldersIPCE_FINAL;
$page_titles["IPCE_FINAL"] = &$pageTitlesIPCE_FINAL;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["IPCE_FINAL"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["IPCE_FINAL"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_IPCE_FINAL()
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
$proto0["m_srcTableName"]="IPCE_FINAL";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_IPCE_FINAL = createSqlQuery_IPCE_FINAL();


	
		;



$tdataIPCE_FINAL[".sqlquery"] = $queryData_IPCE_FINAL;

$tableEvents["IPCE_FINAL"] = new eventsBase;
$tdataIPCE_FINAL[".hasEvents"] = false;

?>