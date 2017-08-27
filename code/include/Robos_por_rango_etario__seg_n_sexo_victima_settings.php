<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRobos_por_rango_etario__seg_n_sexo_victima = array();
	$tdataRobos_por_rango_etario__seg_n_sexo_victima[".truncateText"] = true;
	$tdataRobos_por_rango_etario__seg_n_sexo_victima[".NumberOfChars"] = 80;
	$tdataRobos_por_rango_etario__seg_n_sexo_victima[".ShortName"] = "Robos_por_rango_etario__seg_n_sexo_victima";
	$tdataRobos_por_rango_etario__seg_n_sexo_victima[".OwnerID"] = "";
	$tdataRobos_por_rango_etario__seg_n_sexo_victima[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsRobos_por_rango_etario__seg_n_sexo_victima = array();
$fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima = array();
$pageTitlesRobos_por_rango_etario__seg_n_sexo_victima = array();
$placeHoldersRobos_por_rango_etario__seg_n_sexo_victima = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsRobos_por_rango_etario__seg_n_sexo_victima["Spanish"] = array();
	$fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima["Spanish"] = array();
	$placeHoldersRobos_por_rango_etario__seg_n_sexo_victima["Spanish"] = array();
	$pageTitlesRobos_por_rango_etario__seg_n_sexo_victima["Spanish"] = array();
	$fieldLabelsRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["muni_he"] = "";
	$placeHoldersRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["muni_he"] = "";
	$fieldLabelsRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["delito"] = "Delito";
	$fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["delito"] = "";
	$placeHoldersRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["delito"] = "";
	$fieldLabelsRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["a_o_hecho"] = "";
	$placeHoldersRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["a_o_hecho"] = "";
	$fieldLabelsRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["ran_eta_vic"] = "";
	$placeHoldersRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["ran_eta_vic"] = "";
	$fieldLabelsRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["s_victima"] = "S Victima";
	$fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["s_victima"] = "";
	$placeHoldersRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["s_victima"] = "";
	$fieldLabelsRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["COUNT_ran_eta_vic_"] = "COUNT(ran Eta Vic)";
	$fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["COUNT_ran_eta_vic_"] = "";
	$placeHoldersRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["COUNT_ran_eta_vic_"] = "";
	$fieldLabelsRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["depart_he"] = "";
	$placeHoldersRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["depart_he"] = "";
	$fieldLabelsRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["sector_ppd"] = "";
	$placeHoldersRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]["sector_ppd"] = "";
	if (count($fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima["Spanish"]))
		$tdataRobos_por_rango_etario__seg_n_sexo_victima[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRobos_por_rango_etario__seg_n_sexo_victima["English"] = array();
	$fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima["English"] = array();
	$placeHoldersRobos_por_rango_etario__seg_n_sexo_victima["English"] = array();
	$pageTitlesRobos_por_rango_etario__seg_n_sexo_victima["English"] = array();
	$fieldLabelsRobos_por_rango_etario__seg_n_sexo_victima["English"]["muni_he"] = "Muni He";
	$fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima["English"]["muni_he"] = "";
	$placeHoldersRobos_por_rango_etario__seg_n_sexo_victima["English"]["muni_he"] = "";
	$fieldLabelsRobos_por_rango_etario__seg_n_sexo_victima["English"]["delito"] = "Delito";
	$fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima["English"]["delito"] = "";
	$placeHoldersRobos_por_rango_etario__seg_n_sexo_victima["English"]["delito"] = "";
	$fieldLabelsRobos_por_rango_etario__seg_n_sexo_victima["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima["English"]["a_o_hecho"] = "";
	$placeHoldersRobos_por_rango_etario__seg_n_sexo_victima["English"]["a_o_hecho"] = "";
	$fieldLabelsRobos_por_rango_etario__seg_n_sexo_victima["English"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima["English"]["ran_eta_vic"] = "";
	$placeHoldersRobos_por_rango_etario__seg_n_sexo_victima["English"]["ran_eta_vic"] = "";
	$fieldLabelsRobos_por_rango_etario__seg_n_sexo_victima["English"]["s_victima"] = "S Victima";
	$fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima["English"]["s_victima"] = "";
	$placeHoldersRobos_por_rango_etario__seg_n_sexo_victima["English"]["s_victima"] = "";
	$fieldLabelsRobos_por_rango_etario__seg_n_sexo_victima["English"]["COUNT_ran_eta_vic_"] = "COUNT(ran Eta Vic)";
	$fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima["English"]["COUNT_ran_eta_vic_"] = "";
	$placeHoldersRobos_por_rango_etario__seg_n_sexo_victima["English"]["COUNT_ran_eta_vic_"] = "";
	$fieldLabelsRobos_por_rango_etario__seg_n_sexo_victima["English"]["depart_he"] = "Depart He";
	$fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima["English"]["depart_he"] = "";
	$placeHoldersRobos_por_rango_etario__seg_n_sexo_victima["English"]["depart_he"] = "";
	$fieldLabelsRobos_por_rango_etario__seg_n_sexo_victima["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima["English"]["sector_ppd"] = "";
	$placeHoldersRobos_por_rango_etario__seg_n_sexo_victima["English"]["sector_ppd"] = "";
	if (count($fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima["English"]))
		$tdataRobos_por_rango_etario__seg_n_sexo_victima[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRobos_por_rango_etario__seg_n_sexo_victima[""] = array();
	$fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima[""] = array();
	$placeHoldersRobos_por_rango_etario__seg_n_sexo_victima[""] = array();
	$pageTitlesRobos_por_rango_etario__seg_n_sexo_victima[""] = array();
	if (count($fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima[""]))
		$tdataRobos_por_rango_etario__seg_n_sexo_victima[".isUseToolTips"] = true;
}





$tdataRobos_por_rango_etario__seg_n_sexo_victima[".shortTableName"] = "Robos_por_rango_etario__seg_n_sexo_victima";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".nSecOptions"] = 0;
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".recsPerRowPrint"] = 1;
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".mainTableOwnerID"] = "";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".moveNext"] = 1;
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".entityType"] = 2;

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".strOriginalTableName"] = "hechosdelictivos";

	



$tdataRobos_por_rango_etario__seg_n_sexo_victima[".showAddInPopup"] = false;

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".showEditInPopup"] = false;

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRobos_por_rango_etario__seg_n_sexo_victima[".fieldsForRegister"] = array();

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".listAjax"] = false;

	$tdataRobos_por_rango_etario__seg_n_sexo_victima[".audit"] = false;

	$tdataRobos_por_rango_etario__seg_n_sexo_victima[".locking"] = false;


$tdataRobos_por_rango_etario__seg_n_sexo_victima[".add"] = true;
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".afterAddAction"] = 1;
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".closePopupAfterAdd"] = 1;
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".afterAddActionDetTable"] = "";

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".list"] = true;



$tdataRobos_por_rango_etario__seg_n_sexo_victima[".reorderRecordsByHeader"] = true;



$tdataRobos_por_rango_etario__seg_n_sexo_victima[".inlineAdd"] = true;


$tdataRobos_por_rango_etario__seg_n_sexo_victima[".exportTo"] = true;

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".printFriendly"] = true;


$tdataRobos_por_rango_etario__seg_n_sexo_victima[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".searchSaving"] = false;
//

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".showSearchPanel"] = true;
		$tdataRobos_por_rango_etario__seg_n_sexo_victima[".flexibleSearch"] = true;

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".isUseAjaxSuggest"] = true;






$tdataRobos_por_rango_etario__seg_n_sexo_victima[".ajaxCodeSnippetAdded"] = false;

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".buttonsAdded"] = false;

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".isUseTimeForSearch"] = false;





$tdataRobos_por_rango_etario__seg_n_sexo_victima[".allSearchFields"] = array();
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".filterFields"] = array();
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".requiredSearchFields"] = array();

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".allSearchFields"][] = "muni_he";
		$tdataRobos_por_rango_etario__seg_n_sexo_victima[".requiredSearchFields"][] = "muni_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".allSearchFields"][] = "aÑo_hecho";
		$tdataRobos_por_rango_etario__seg_n_sexo_victima[".requiredSearchFields"][] = "aÑo_hecho";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".allSearchFields"][] = "depart_he";
		$tdataRobos_por_rango_etario__seg_n_sexo_victima[".requiredSearchFields"][] = "depart_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".allSearchFields"][] = "sector_ppd";
		$tdataRobos_por_rango_etario__seg_n_sexo_victima[".requiredSearchFields"][] = "sector_ppd";



$tdataRobos_por_rango_etario__seg_n_sexo_victima[".panelSearchFields"] = array();
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".searchPanelOptions"] = array();
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".panelSearchFields"][] = "muni_he";
	$tdataRobos_por_rango_etario__seg_n_sexo_victima[".panelSearchFields"][] = "aÑo_hecho";
	$tdataRobos_por_rango_etario__seg_n_sexo_victima[".panelSearchFields"][] = "depart_he";
	$tdataRobos_por_rango_etario__seg_n_sexo_victima[".panelSearchFields"][] = "sector_ppd";
	

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".tableType"] = "report";

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".printerPageOrientation"] = 0;
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".nPrinterPageScale"] = 100;

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".nPrinterSplitRecords"] = 40;

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".nPrinterPDFSplitRecords"] = 40;



$tdataRobos_por_rango_etario__seg_n_sexo_victima[".geocodingEnabled"] = false;

//report settings
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".crossTabReport"] = true;

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".reportGroupFields"] = true;
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "s_victima";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "ran_eta_vic";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".reportGroupFieldsData"] = $reportGroupFields;

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".reportHorizontalSummary"] = true;

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".isExistTotalFields"] = true;

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".reportVerticalSummary"] = true;



$tdataRobos_por_rango_etario__seg_n_sexo_victima[".repShowDet"] = true;

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".reportLayout"] = 6;

//end of report settings




$tdataRobos_por_rango_etario__seg_n_sexo_victima[".listGridLayout"] = 3;

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".strOrderBy"] = $tstrOrderBy;

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".orderindexes"] = array();

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".sqlHead"] = "SELECT ran_eta_vic,  s_victima,  delito,  muni_he,  `aÑo_hecho`,  COUNT(ran_eta_vic) AS `COUNT(ran_eta_vic)`,  depart_he,  sector_ppd";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".sqlFrom"] = "FROM hechos_delictivos1";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".sqlWhereExpr"] = "delito =\"ROBO\"";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".arrGroupsPerPage"] = $arrGPP;

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".highlightSearchResults"] = true;

$tableKeysRobos_por_rango_etario__seg_n_sexo_victima = array();
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".Keys"] = $tableKeysRobos_por_rango_etario__seg_n_sexo_victima;

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".listFields"] = array();
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".listFields"][] = "ran_eta_vic";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".listFields"][] = "s_victima";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".listFields"][] = "delito";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".listFields"][] = "muni_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".listFields"][] = "aÑo_hecho";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".listFields"][] = "COUNT(ran_eta_vic)";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".listFields"][] = "depart_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".listFields"][] = "sector_ppd";

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".hideMobileList"] = array();


$tdataRobos_por_rango_etario__seg_n_sexo_victima[".viewFields"] = array();
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".viewFields"][] = "ran_eta_vic";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".viewFields"][] = "s_victima";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".viewFields"][] = "delito";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".viewFields"][] = "muni_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".viewFields"][] = "aÑo_hecho";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".viewFields"][] = "COUNT(ran_eta_vic)";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".viewFields"][] = "depart_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".viewFields"][] = "sector_ppd";

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".addFields"] = array();
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".addFields"][] = "ran_eta_vic";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".addFields"][] = "s_victima";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".addFields"][] = "delito";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".addFields"][] = "muni_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".addFields"][] = "aÑo_hecho";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".addFields"][] = "depart_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".addFields"][] = "sector_ppd";

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".masterListFields"] = array();
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".masterListFields"][] = "ran_eta_vic";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".masterListFields"][] = "s_victima";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".masterListFields"][] = "delito";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".masterListFields"][] = "muni_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".masterListFields"][] = "aÑo_hecho";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".masterListFields"][] = "COUNT(ran_eta_vic)";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".masterListFields"][] = "depart_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".masterListFields"][] = "sector_ppd";

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".inlineAddFields"] = array();
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".inlineAddFields"][] = "ran_eta_vic";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".inlineAddFields"][] = "s_victima";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".inlineAddFields"][] = "delito";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".inlineAddFields"][] = "muni_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".inlineAddFields"][] = "aÑo_hecho";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".inlineAddFields"][] = "depart_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".inlineAddFields"][] = "sector_ppd";

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".editFields"] = array();
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".editFields"][] = "ran_eta_vic";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".editFields"][] = "s_victima";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".editFields"][] = "delito";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".editFields"][] = "muni_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".editFields"][] = "aÑo_hecho";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".editFields"][] = "depart_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".editFields"][] = "sector_ppd";

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".inlineEditFields"] = array();
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".inlineEditFields"][] = "ran_eta_vic";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".inlineEditFields"][] = "s_victima";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".inlineEditFields"][] = "delito";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".inlineEditFields"][] = "muni_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".inlineEditFields"][] = "aÑo_hecho";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".inlineEditFields"][] = "depart_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".inlineEditFields"][] = "sector_ppd";

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".updateSelectedFields"] = array();
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".updateSelectedFields"][] = "ran_eta_vic";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".updateSelectedFields"][] = "s_victima";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".updateSelectedFields"][] = "delito";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".updateSelectedFields"][] = "muni_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".updateSelectedFields"][] = "aÑo_hecho";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".updateSelectedFields"][] = "depart_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".updateSelectedFields"][] = "sector_ppd";


$tdataRobos_por_rango_etario__seg_n_sexo_victima[".exportFields"] = array();
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".exportFields"][] = "ran_eta_vic";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".exportFields"][] = "s_victima";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".exportFields"][] = "delito";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".exportFields"][] = "muni_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".exportFields"][] = "aÑo_hecho";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".exportFields"][] = "COUNT(ran_eta_vic)";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".exportFields"][] = "depart_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".exportFields"][] = "sector_ppd";

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".importFields"] = array();
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".importFields"][] = "ran_eta_vic";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".importFields"][] = "s_victima";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".importFields"][] = "delito";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".importFields"][] = "muni_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".importFields"][] = "aÑo_hecho";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".importFields"][] = "COUNT(ran_eta_vic)";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".importFields"][] = "depart_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".importFields"][] = "sector_ppd";

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".printFields"] = array();
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".printFields"][] = "ran_eta_vic";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".printFields"][] = "s_victima";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".printFields"][] = "delito";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".printFields"][] = "muni_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".printFields"][] = "aÑo_hecho";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".printFields"][] = "COUNT(ran_eta_vic)";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".printFields"][] = "depart_he";
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".printFields"][] = "sector_ppd";

//	ran_eta_vic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ran_eta_vic";
	$fdata["GoodName"] = "ran_eta_vic";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Robos_por_rango_etario__seg_n_sexo_victima","ran_eta_vic");
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

		$fdata["strField"] = "ran_eta_vic";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ran_eta_vic";

	
	
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








	$tdataRobos_por_rango_etario__seg_n_sexo_victima["ran_eta_vic"] = $fdata;
//	s_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "s_victima";
	$fdata["GoodName"] = "s_victima";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Robos_por_rango_etario__seg_n_sexo_victima","s_victima");
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

		$fdata["strField"] = "s_victima";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s_victima";

	
	
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








	$tdataRobos_por_rango_etario__seg_n_sexo_victima["s_victima"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Robos_por_rango_etario__seg_n_sexo_victima","delito");
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








	$tdataRobos_por_rango_etario__seg_n_sexo_victima["delito"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Robos_por_rango_etario__seg_n_sexo_victima","muni_he");
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




	$tdataRobos_por_rango_etario__seg_n_sexo_victima["muni_he"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Robos_por_rango_etario__seg_n_sexo_victima","a_o_hecho");
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




	$tdataRobos_por_rango_etario__seg_n_sexo_victima["aÑo_hecho"] = $fdata;
//	COUNT(ran_eta_vic)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "COUNT(ran_eta_vic)";
	$fdata["GoodName"] = "COUNT_ran_eta_vic_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Robos_por_rango_etario__seg_n_sexo_victima","COUNT_ran_eta_vic_");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(ran_eta_vic)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(ran_eta_vic)";

	
	
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








	$tdataRobos_por_rango_etario__seg_n_sexo_victima["COUNT(ran_eta_vic)"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Robos_por_rango_etario__seg_n_sexo_victima","depart_he");
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




	$tdataRobos_por_rango_etario__seg_n_sexo_victima["depart_he"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Robos_por_rango_etario__seg_n_sexo_victima","sector_ppd");
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




	$tdataRobos_por_rango_etario__seg_n_sexo_victima["sector_ppd"] = $fdata;


$tables_data["Robos por rango etario, según sexo victima"]=&$tdataRobos_por_rango_etario__seg_n_sexo_victima;
$field_labels["Robos_por_rango_etario__seg_n_sexo_victima"] = &$fieldLabelsRobos_por_rango_etario__seg_n_sexo_victima;
$fieldToolTips["Robos_por_rango_etario__seg_n_sexo_victima"] = &$fieldToolTipsRobos_por_rango_etario__seg_n_sexo_victima;
$placeHolders["Robos_por_rango_etario__seg_n_sexo_victima"] = &$placeHoldersRobos_por_rango_etario__seg_n_sexo_victima;
$page_titles["Robos_por_rango_etario__seg_n_sexo_victima"] = &$pageTitlesRobos_por_rango_etario__seg_n_sexo_victima;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Robos por rango etario, según sexo victima"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Robos_por_rango_etario__seg_n_sexo_victima()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ran_eta_vic,  s_victima,  delito,  muni_he,  `aÑo_hecho`,  COUNT(ran_eta_vic) AS `COUNT(ran_eta_vic)`,  depart_he,  sector_ppd";
$proto0["m_strFrom"] = "FROM hechos_delictivos1";
$proto0["m_strWhere"] = "delito =\"ROBO\"";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "delito =\"ROBO\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Robos por rango etario, según sexo victima"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=\"ROBO\"";
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
	"m_strName" => "ran_eta_vic",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Robos por rango etario, según sexo victima"
));

$proto6["m_sql"] = "ran_eta_vic";
$proto6["m_srcTableName"] = "Robos por rango etario, según sexo victima";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Robos por rango etario, según sexo victima"
));

$proto8["m_sql"] = "s_victima";
$proto8["m_srcTableName"] = "Robos por rango etario, según sexo victima";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Robos por rango etario, según sexo victima"
));

$proto10["m_sql"] = "delito";
$proto10["m_srcTableName"] = "Robos por rango etario, según sexo victima";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Robos por rango etario, según sexo victima"
));

$proto12["m_sql"] = "muni_he";
$proto12["m_srcTableName"] = "Robos por rango etario, según sexo victima";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Robos por rango etario, según sexo victima"
));

$proto14["m_sql"] = "`aÑo_hecho`";
$proto14["m_srcTableName"] = "Robos por rango etario, según sexo victima";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_COUNT";
$proto17["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "ran_eta_vic",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Robos por rango etario, según sexo victima"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "COUNT(ran_eta_vic)";
$proto16["m_srcTableName"] = "Robos por rango etario, según sexo victima";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "COUNT(ran_eta_vic)";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Robos por rango etario, según sexo victima"
));

$proto19["m_sql"] = "depart_he";
$proto19["m_srcTableName"] = "Robos por rango etario, según sexo victima";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Robos por rango etario, según sexo victima"
));

$proto21["m_sql"] = "sector_ppd";
$proto21["m_srcTableName"] = "Robos por rango etario, según sexo victima";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "hechos_delictivos1";
$proto24["m_srcTableName"] = "Robos por rango etario, según sexo victima";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "id1";
$proto24["m_columns"][] = "id11";
$proto24["m_columns"][] = "correlativo";
$proto24["m_columns"][] = "numero";
$proto24["m_columns"][] = "id";
$proto24["m_columns"][] = "numero2";
$proto24["m_columns"][] = "lugaranalisis";
$proto24["m_columns"][] = "area";
$proto24["m_columns"][] = "delito";
$proto24["m_columns"][] = "codigo_muni";
$proto24["m_columns"][] = "depart_he";
$proto24["m_columns"][] = "muni_he";
$proto24["m_columns"][] = "dire_hecho";
$proto24["m_columns"][] = "lugar_esp";
$proto24["m_columns"][] = "forma_cono";
$proto24["m_columns"][] = "delito_espe";
$proto24["m_columns"][] = "dia_hecho";
$proto24["m_columns"][] = "hora_hecho";
$proto24["m_columns"][] = "rango_hora";
$proto24["m_columns"][] = "fecha_hecho";
$proto24["m_columns"][] = "mes_hecho";
$proto24["m_columns"][] = "aÑo_hecho";
$proto24["m_columns"][] = "edad_victima";
$proto24["m_columns"][] = "ran_eta_vic";
$proto24["m_columns"][] = "s_victima";
$proto24["m_columns"][] = "oc_victima";
$proto24["m_columns"][] = "relacion_vi_agre";
$proto24["m_columns"][] = "edad_agresor";
$proto24["m_columns"][] = "sexo_agresor";
$proto24["m_columns"][] = "ocupa_agresor";
$proto24["m_columns"][] = "movil";
$proto24["m_columns"][] = "tipo_arma";
$proto24["m_columns"][] = "canton_hecho";
$proto24["m_columns"][] = "colonia_hecho";
$proto24["m_columns"][] = "caserio_hecho";
$proto24["m_columns"][] = "calle_hecho";
$proto24["m_columns"][] = "avenida_hecho";
$proto24["m_columns"][] = "casa_hecho";
$proto24["m_columns"][] = "com_hecho";
$proto24["m_columns"][] = "barrio_hecho";
$proto24["m_columns"][] = "comp_hecho";
$proto24["m_columns"][] = "sector_ppd";
$proto24["m_columns"][] = "tipo";
$proto24["m_columns"][] = "nombre";
$proto24["m_columns"][] = "x";
$proto24["m_columns"][] = "y";
$proto24["m_columns"][] = "correlativo1";
$proto24["m_columns"][] = "mes_corre";
$proto24["m_columns"][] = "arma_analisis";
$proto24["m_columns"][] = "movil_he";
$proto24["m_columns"][] = "ocupa_analisis";
$proto24["m_columns"][] = "rel_vic_ag_anali";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "hechos_delictivos1";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "Robos por rango etario, según sexo victima";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "ran_eta_vic",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Robos por rango etario, según sexo victima"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Robos por rango etario, según sexo victima"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Robos por rango etario, según sexo victima"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Robos por rango etario, según sexo victima"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Robos por rango etario, según sexo victima"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Robos por rango etario, según sexo victima"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Robos por rango etario, según sexo victima"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Robos por rango etario, según sexo victima";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Robos_por_rango_etario__seg_n_sexo_victima = createSqlQuery_Robos_por_rango_etario__seg_n_sexo_victima();


	
		;

								

$tdataRobos_por_rango_etario__seg_n_sexo_victima[".sqlquery"] = $queryData_Robos_por_rango_etario__seg_n_sexo_victima;

$tableEvents["Robos por rango etario, según sexo victima"] = new eventsBase;
$tdataRobos_por_rango_etario__seg_n_sexo_victima[".hasEvents"] = false;

?>