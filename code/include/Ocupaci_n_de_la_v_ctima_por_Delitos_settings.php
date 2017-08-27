<?php
require_once(getabspath("classes/cipherer.php"));




$tdataOcupaci_n_de_la_v_ctima_por_Delitos = array();
	$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".truncateText"] = true;
	$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".NumberOfChars"] = 80;
	$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".ShortName"] = "Ocupaci_n_de_la_v_ctima_por_Delitos";
	$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".OwnerID"] = "";
	$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsOcupaci_n_de_la_v_ctima_por_Delitos = array();
$fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos = array();
$pageTitlesOcupaci_n_de_la_v_ctima_por_Delitos = array();
$placeHoldersOcupaci_n_de_la_v_ctima_por_Delitos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"] = array();
	$fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"] = array();
	$placeHoldersOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"] = array();
	$pageTitlesOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"] = array();
	$fieldLabelsOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]["delito"] = "Delito";
	$fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]["delito"] = "";
	$placeHoldersOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]["delito"] = "";
	$fieldLabelsOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]["a_o_hecho"] = "";
	$placeHoldersOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]["a_o_hecho"] = "";
	$fieldLabelsOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]["sector_ppd"] = "";
	$placeHoldersOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]["sector_ppd"] = "";
	$fieldLabelsOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]["COUNT_delito_"] = "COUNT(delito)";
	$fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]["COUNT_delito_"] = "";
	$placeHoldersOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]["COUNT_delito_"] = "";
	$fieldLabelsOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]["muni_he"] = "";
	$placeHoldersOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]["muni_he"] = "";
	$fieldLabelsOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]["ocupa_analisis"] = "Ocupa Analisis";
	$fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]["ocupa_analisis"] = "";
	$placeHoldersOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]["ocupa_analisis"] = "";
	$fieldLabelsOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]["depart_he"] = "";
	$placeHoldersOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]["depart_he"] = "";
	if (count($fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos["Spanish"]))
		$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsOcupaci_n_de_la_v_ctima_por_Delitos["English"] = array();
	$fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos["English"] = array();
	$placeHoldersOcupaci_n_de_la_v_ctima_por_Delitos["English"] = array();
	$pageTitlesOcupaci_n_de_la_v_ctima_por_Delitos["English"] = array();
	$fieldLabelsOcupaci_n_de_la_v_ctima_por_Delitos["English"]["delito"] = "Delito";
	$fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos["English"]["delito"] = "";
	$placeHoldersOcupaci_n_de_la_v_ctima_por_Delitos["English"]["delito"] = "";
	$fieldLabelsOcupaci_n_de_la_v_ctima_por_Delitos["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos["English"]["a_o_hecho"] = "";
	$placeHoldersOcupaci_n_de_la_v_ctima_por_Delitos["English"]["a_o_hecho"] = "";
	$fieldLabelsOcupaci_n_de_la_v_ctima_por_Delitos["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos["English"]["sector_ppd"] = "";
	$placeHoldersOcupaci_n_de_la_v_ctima_por_Delitos["English"]["sector_ppd"] = "";
	$fieldLabelsOcupaci_n_de_la_v_ctima_por_Delitos["English"]["COUNT_delito_"] = "COUNT(delito)";
	$fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos["English"]["COUNT_delito_"] = "";
	$placeHoldersOcupaci_n_de_la_v_ctima_por_Delitos["English"]["COUNT_delito_"] = "";
	$fieldLabelsOcupaci_n_de_la_v_ctima_por_Delitos["English"]["muni_he"] = "Muni He";
	$fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos["English"]["muni_he"] = "";
	$placeHoldersOcupaci_n_de_la_v_ctima_por_Delitos["English"]["muni_he"] = "";
	$fieldLabelsOcupaci_n_de_la_v_ctima_por_Delitos["English"]["ocupa_analisis"] = "Ocupa Analisis";
	$fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos["English"]["ocupa_analisis"] = "";
	$placeHoldersOcupaci_n_de_la_v_ctima_por_Delitos["English"]["ocupa_analisis"] = "";
	$fieldLabelsOcupaci_n_de_la_v_ctima_por_Delitos["English"]["depart_he"] = "Depart He";
	$fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos["English"]["depart_he"] = "";
	$placeHoldersOcupaci_n_de_la_v_ctima_por_Delitos["English"]["depart_he"] = "";
	if (count($fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos["English"]))
		$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsOcupaci_n_de_la_v_ctima_por_Delitos[""] = array();
	$fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos[""] = array();
	$placeHoldersOcupaci_n_de_la_v_ctima_por_Delitos[""] = array();
	$pageTitlesOcupaci_n_de_la_v_ctima_por_Delitos[""] = array();
	if (count($fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos[""]))
		$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".isUseToolTips"] = true;
}





$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".shortTableName"] = "Ocupaci_n_de_la_v_ctima_por_Delitos";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".nSecOptions"] = 0;
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".recsPerRowPrint"] = 1;
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".mainTableOwnerID"] = "";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".moveNext"] = 1;
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".entityType"] = 2;

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".strOriginalTableName"] = "hechosdelictivos";

	



$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".showAddInPopup"] = false;

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".showEditInPopup"] = false;

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".fieldsForRegister"] = array();

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".listAjax"] = false;

	$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".audit"] = false;

	$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".locking"] = false;


$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".add"] = true;
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".afterAddAction"] = 1;
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".closePopupAfterAdd"] = 1;
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".afterAddActionDetTable"] = "";

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".list"] = true;



$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".reorderRecordsByHeader"] = true;



$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".inlineAdd"] = true;


$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".exportTo"] = true;

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".printFriendly"] = true;


$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".searchSaving"] = false;
//

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".showSearchPanel"] = true;
		$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".flexibleSearch"] = true;

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".isUseAjaxSuggest"] = true;






$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".ajaxCodeSnippetAdded"] = false;

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".buttonsAdded"] = false;

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".isUseTimeForSearch"] = false;





$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".allSearchFields"] = array();
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".filterFields"] = array();
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".requiredSearchFields"] = array();

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".allSearchFields"][] = "sector_ppd";
		$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".requiredSearchFields"][] = "sector_ppd";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".allSearchFields"][] = "aÑo_hecho";
		$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".requiredSearchFields"][] = "aÑo_hecho";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".allSearchFields"][] = "muni_he";
		$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".requiredSearchFields"][] = "muni_he";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".allSearchFields"][] = "depart_he";
		$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".requiredSearchFields"][] = "depart_he";



$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".panelSearchFields"] = array();
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".searchPanelOptions"] = array();
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".panelSearchFields"][] = "sector_ppd";
	$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".panelSearchFields"][] = "aÑo_hecho";
	$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".panelSearchFields"][] = "muni_he";
	$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".panelSearchFields"][] = "depart_he";
	

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".tableType"] = "report";

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".printerPageOrientation"] = 0;
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".nPrinterPageScale"] = 100;

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".nPrinterSplitRecords"] = 40;

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".nPrinterPDFSplitRecords"] = 40;



$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".geocodingEnabled"] = false;

//report settings
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".crossTabReport"] = true;

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".reportGroupFields"] = true;
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "ocupa_analisis";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "delito";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".reportGroupFieldsData"] = $reportGroupFields;

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".reportHorizontalSummary"] = true;

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".isExistTotalFields"] = true;

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".reportVerticalSummary"] = true;



$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".repShowDet"] = true;

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".reportLayout"] = 6;

//end of report settings




$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".listGridLayout"] = 3;

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY ocupa_analisis DESC, sector_ppd DESC, `aÑo_hecho` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".strOrderBy"] = $tstrOrderBy;

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".orderindexes"] = array();
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "ocupa_analisis");
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "sector_ppd");
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".orderindexes"][] = array(5, (0 ? "ASC" : "DESC"), "`aÑo_hecho`");

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".sqlHead"] = "SELECT ocupa_analisis,  sector_ppd,  delito,  COUNT(delito) AS `COUNT(delito)`,  `aÑo_hecho`,  muni_he,  depart_he";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".sqlFrom"] = "FROM hechos_delictivos1";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".sqlWhereExpr"] = "";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".arrGroupsPerPage"] = $arrGPP;

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".highlightSearchResults"] = true;

$tableKeysOcupaci_n_de_la_v_ctima_por_Delitos = array();
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".Keys"] = $tableKeysOcupaci_n_de_la_v_ctima_por_Delitos;

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".listFields"] = array();
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".listFields"][] = "ocupa_analisis";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".listFields"][] = "sector_ppd";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".listFields"][] = "delito";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".listFields"][] = "COUNT(delito)";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".listFields"][] = "aÑo_hecho";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".listFields"][] = "muni_he";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".listFields"][] = "depart_he";

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".hideMobileList"] = array();


$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".viewFields"] = array();
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".viewFields"][] = "ocupa_analisis";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".viewFields"][] = "sector_ppd";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".viewFields"][] = "delito";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".viewFields"][] = "COUNT(delito)";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".viewFields"][] = "aÑo_hecho";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".viewFields"][] = "muni_he";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".viewFields"][] = "depart_he";

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".addFields"] = array();
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".addFields"][] = "sector_ppd";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".addFields"][] = "delito";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".addFields"][] = "aÑo_hecho";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".addFields"][] = "muni_he";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".addFields"][] = "depart_he";

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".masterListFields"] = array();
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".masterListFields"][] = "ocupa_analisis";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".masterListFields"][] = "sector_ppd";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".masterListFields"][] = "delito";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".masterListFields"][] = "COUNT(delito)";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".masterListFields"][] = "aÑo_hecho";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".masterListFields"][] = "muni_he";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".masterListFields"][] = "depart_he";

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".inlineAddFields"] = array();
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".inlineAddFields"][] = "sector_ppd";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".inlineAddFields"][] = "delito";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".inlineAddFields"][] = "aÑo_hecho";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".inlineAddFields"][] = "muni_he";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".inlineAddFields"][] = "depart_he";

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".editFields"] = array();
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".editFields"][] = "sector_ppd";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".editFields"][] = "delito";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".editFields"][] = "aÑo_hecho";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".editFields"][] = "muni_he";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".editFields"][] = "depart_he";

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".inlineEditFields"] = array();
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".inlineEditFields"][] = "sector_ppd";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".inlineEditFields"][] = "delito";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".inlineEditFields"][] = "aÑo_hecho";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".inlineEditFields"][] = "muni_he";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".inlineEditFields"][] = "depart_he";

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".updateSelectedFields"] = array();
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".updateSelectedFields"][] = "sector_ppd";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".updateSelectedFields"][] = "delito";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".updateSelectedFields"][] = "aÑo_hecho";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".updateSelectedFields"][] = "muni_he";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".updateSelectedFields"][] = "depart_he";


$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".exportFields"] = array();
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".exportFields"][] = "ocupa_analisis";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".exportFields"][] = "sector_ppd";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".exportFields"][] = "delito";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".exportFields"][] = "COUNT(delito)";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".exportFields"][] = "aÑo_hecho";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".exportFields"][] = "muni_he";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".exportFields"][] = "depart_he";

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".importFields"] = array();
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".importFields"][] = "ocupa_analisis";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".importFields"][] = "sector_ppd";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".importFields"][] = "delito";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".importFields"][] = "COUNT(delito)";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".importFields"][] = "aÑo_hecho";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".importFields"][] = "muni_he";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".importFields"][] = "depart_he";

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".printFields"] = array();
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".printFields"][] = "ocupa_analisis";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".printFields"][] = "sector_ppd";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".printFields"][] = "delito";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".printFields"][] = "COUNT(delito)";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".printFields"][] = "aÑo_hecho";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".printFields"][] = "muni_he";
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".printFields"][] = "depart_he";

//	ocupa_analisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ocupa_analisis";
	$fdata["GoodName"] = "ocupa_analisis";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Ocupaci_n_de_la_v_ctima_por_Delitos","ocupa_analisis");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ocupa_analisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ocupa_analisis";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataOcupaci_n_de_la_v_ctima_por_Delitos["ocupa_analisis"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Ocupaci_n_de_la_v_ctima_por_Delitos","sector_ppd");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sector_ppd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sector_ppd";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "sectorppd";
	$edata["LookupConnId"] = "delitos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idsectorppd";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "idsectorppd";

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataOcupaci_n_de_la_v_ctima_por_Delitos["sector_ppd"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Ocupaci_n_de_la_v_ctima_por_Delitos","delito");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "delito";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delito";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataOcupaci_n_de_la_v_ctima_por_Delitos["delito"] = $fdata;
//	COUNT(delito)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "COUNT(delito)";
	$fdata["GoodName"] = "COUNT_delito_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Ocupaci_n_de_la_v_ctima_por_Delitos","COUNT_delito_");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(delito)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(delito)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataOcupaci_n_de_la_v_ctima_por_Delitos["COUNT(delito)"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Ocupaci_n_de_la_v_ctima_por_Delitos","a_o_hecho");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "aÑo_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`aÑo_hecho`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataOcupaci_n_de_la_v_ctima_por_Delitos["aÑo_hecho"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Ocupaci_n_de_la_v_ctima_por_Delitos","muni_he");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "muni_he";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "muni_he";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataOcupaci_n_de_la_v_ctima_por_Delitos["muni_he"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Ocupaci_n_de_la_v_ctima_por_Delitos","depart_he");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "depart_he";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "depart_he";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataOcupaci_n_de_la_v_ctima_por_Delitos["depart_he"] = $fdata;


$tables_data["Ocupación de la víctima por Delitos"]=&$tdataOcupaci_n_de_la_v_ctima_por_Delitos;
$field_labels["Ocupaci_n_de_la_v_ctima_por_Delitos"] = &$fieldLabelsOcupaci_n_de_la_v_ctima_por_Delitos;
$fieldToolTips["Ocupaci_n_de_la_v_ctima_por_Delitos"] = &$fieldToolTipsOcupaci_n_de_la_v_ctima_por_Delitos;
$placeHolders["Ocupaci_n_de_la_v_ctima_por_Delitos"] = &$placeHoldersOcupaci_n_de_la_v_ctima_por_Delitos;
$page_titles["Ocupaci_n_de_la_v_ctima_por_Delitos"] = &$pageTitlesOcupaci_n_de_la_v_ctima_por_Delitos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Ocupación de la víctima por Delitos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Ocupaci_n_de_la_v_ctima_por_Delitos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ocupa_analisis,  sector_ppd,  delito,  COUNT(delito) AS `COUNT(delito)`,  `aÑo_hecho`,  muni_he,  depart_he";
$proto0["m_strFrom"] = "FROM hechos_delictivos1";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY ocupa_analisis DESC, sector_ppd DESC, `aÑo_hecho` DESC";
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
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "ocupa_analisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Ocupación de la víctima por Delitos"
));

$proto6["m_sql"] = "ocupa_analisis";
$proto6["m_srcTableName"] = "Ocupación de la víctima por Delitos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Ocupación de la víctima por Delitos"
));

$proto8["m_sql"] = "sector_ppd";
$proto8["m_srcTableName"] = "Ocupación de la víctima por Delitos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Ocupación de la víctima por Delitos"
));

$proto10["m_sql"] = "delito";
$proto10["m_srcTableName"] = "Ocupación de la víctima por Delitos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_COUNT";
$proto13["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Ocupación de la víctima por Delitos"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "COUNT(delito)";
$proto12["m_srcTableName"] = "Ocupación de la víctima por Delitos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "COUNT(delito)";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Ocupación de la víctima por Delitos"
));

$proto15["m_sql"] = "`aÑo_hecho`";
$proto15["m_srcTableName"] = "Ocupación de la víctima por Delitos";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Ocupación de la víctima por Delitos"
));

$proto17["m_sql"] = "muni_he";
$proto17["m_srcTableName"] = "Ocupación de la víctima por Delitos";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Ocupación de la víctima por Delitos"
));

$proto19["m_sql"] = "depart_he";
$proto19["m_srcTableName"] = "Ocupación de la víctima por Delitos";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "hechos_delictivos1";
$proto22["m_srcTableName"] = "Ocupación de la víctima por Delitos";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "id1";
$proto22["m_columns"][] = "id11";
$proto22["m_columns"][] = "correlativo";
$proto22["m_columns"][] = "numero";
$proto22["m_columns"][] = "id";
$proto22["m_columns"][] = "numero2";
$proto22["m_columns"][] = "lugaranalisis";
$proto22["m_columns"][] = "area";
$proto22["m_columns"][] = "delito";
$proto22["m_columns"][] = "codigo_muni";
$proto22["m_columns"][] = "depart_he";
$proto22["m_columns"][] = "muni_he";
$proto22["m_columns"][] = "dire_hecho";
$proto22["m_columns"][] = "lugar_esp";
$proto22["m_columns"][] = "forma_cono";
$proto22["m_columns"][] = "delito_espe";
$proto22["m_columns"][] = "dia_hecho";
$proto22["m_columns"][] = "hora_hecho";
$proto22["m_columns"][] = "rango_hora";
$proto22["m_columns"][] = "fecha_hecho";
$proto22["m_columns"][] = "mes_hecho";
$proto22["m_columns"][] = "aÑo_hecho";
$proto22["m_columns"][] = "edad_victima";
$proto22["m_columns"][] = "ran_eta_vic";
$proto22["m_columns"][] = "s_victima";
$proto22["m_columns"][] = "oc_victima";
$proto22["m_columns"][] = "relacion_vi_agre";
$proto22["m_columns"][] = "edad_agresor";
$proto22["m_columns"][] = "sexo_agresor";
$proto22["m_columns"][] = "ocupa_agresor";
$proto22["m_columns"][] = "movil";
$proto22["m_columns"][] = "tipo_arma";
$proto22["m_columns"][] = "canton_hecho";
$proto22["m_columns"][] = "colonia_hecho";
$proto22["m_columns"][] = "caserio_hecho";
$proto22["m_columns"][] = "calle_hecho";
$proto22["m_columns"][] = "avenida_hecho";
$proto22["m_columns"][] = "casa_hecho";
$proto22["m_columns"][] = "com_hecho";
$proto22["m_columns"][] = "barrio_hecho";
$proto22["m_columns"][] = "comp_hecho";
$proto22["m_columns"][] = "sector_ppd";
$proto22["m_columns"][] = "tipo";
$proto22["m_columns"][] = "nombre";
$proto22["m_columns"][] = "x";
$proto22["m_columns"][] = "y";
$proto22["m_columns"][] = "correlativo1";
$proto22["m_columns"][] = "mes_corre";
$proto22["m_columns"][] = "arma_analisis";
$proto22["m_columns"][] = "movil_he";
$proto22["m_columns"][] = "ocupa_analisis";
$proto22["m_columns"][] = "rel_vic_ag_anali";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "hechos_delictivos1";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "Ocupación de la víctima por Delitos";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "ocupa_analisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Ocupación de la víctima por Delitos"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Ocupación de la víctima por Delitos"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Ocupación de la víctima por Delitos"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Ocupación de la víctima por Delitos"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Ocupación de la víctima por Delitos"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Ocupación de la víctima por Delitos"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "ocupa_analisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Ocupación de la víctima por Delitos"
));

$proto37["m_column"]=$obj;
$proto37["m_bAsc"] = 0;
$proto37["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto37);

$proto0["m_orderby"][]=$obj;					
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Ocupación de la víctima por Delitos"
));

$proto39["m_column"]=$obj;
$proto39["m_bAsc"] = 0;
$proto39["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto39);

$proto0["m_orderby"][]=$obj;					
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Ocupación de la víctima por Delitos"
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 0;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Ocupación de la víctima por Delitos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Ocupaci_n_de_la_v_ctima_por_Delitos = createSqlQuery_Ocupaci_n_de_la_v_ctima_por_Delitos();


	
		;

							

$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".sqlquery"] = $queryData_Ocupaci_n_de_la_v_ctima_por_Delitos;

$tableEvents["Ocupación de la víctima por Delitos"] = new eventsBase;
$tdataOcupaci_n_de_la_v_ctima_por_Delitos[".hasEvents"] = false;

?>