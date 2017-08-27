<?php
require_once(getabspath("classes/cipherer.php"));




$tdataHurtos_por_rango_etarios__seg_n_sexo_victima = array();
	$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".truncateText"] = true;
	$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".NumberOfChars"] = 80;
	$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".ShortName"] = "Hurtos_por_rango_etarios__seg_n_sexo_victima";
	$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".OwnerID"] = "";
	$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima = array();
$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima = array();
$pageTitlesHurtos_por_rango_etarios__seg_n_sexo_victima = array();
$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"] = array();
	$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"] = array();
	$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"] = array();
	$pageTitlesHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"] = array();
	$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["muni_he"] = "";
	$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["muni_he"] = "";
	$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["delito"] = "Delito";
	$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["delito"] = "";
	$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["delito"] = "";
	$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["a_o_hecho"] = "";
	$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["a_o_hecho"] = "";
	$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["ran_eta_vic"] = "";
	$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["ran_eta_vic"] = "";
	$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["s_victima"] = "S Victima";
	$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["s_victima"] = "";
	$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["s_victima"] = "";
	$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["COUNT_ran_eta_vic_"] = "COUNT(ran Eta Vic)";
	$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["COUNT_ran_eta_vic_"] = "";
	$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["COUNT_ran_eta_vic_"] = "";
	$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["depart_he"] = "";
	$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["depart_he"] = "";
	$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["sector_ppd"] = "";
	$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["sector_ppd"] = "";
	$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["COUNT_muni_he_"] = "";
	$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]["COUNT_muni_he_"] = "";
	if (count($fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["Spanish"]))
		$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima["English"] = array();
	$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["English"] = array();
	$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima["English"] = array();
	$pageTitlesHurtos_por_rango_etarios__seg_n_sexo_victima["English"] = array();
	$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["muni_he"] = "Muni He";
	$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["muni_he"] = "";
	$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["muni_he"] = "";
	$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["delito"] = "Delito";
	$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["delito"] = "";
	$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["delito"] = "";
	$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["a_o_hecho"] = "";
	$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["a_o_hecho"] = "";
	$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["ran_eta_vic"] = "";
	$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["ran_eta_vic"] = "";
	$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["s_victima"] = "S Victima";
	$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["s_victima"] = "";
	$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["s_victima"] = "";
	$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["COUNT_ran_eta_vic_"] = "COUNT(ran Eta Vic)";
	$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["COUNT_ran_eta_vic_"] = "";
	$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["COUNT_ran_eta_vic_"] = "";
	$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["depart_he"] = "Depart He";
	$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["depart_he"] = "";
	$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["depart_he"] = "";
	$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["sector_ppd"] = "";
	$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["sector_ppd"] = "";
	$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["COUNT_muni_he_"] = "";
	$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima["English"]["COUNT_muni_he_"] = "";
	if (count($fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima["English"]))
		$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima[""] = array();
	$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima[""] = array();
	$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima[""] = array();
	$pageTitlesHurtos_por_rango_etarios__seg_n_sexo_victima[""] = array();
	if (count($fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima[""]))
		$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".isUseToolTips"] = true;
}





$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".shortTableName"] = "Hurtos_por_rango_etarios__seg_n_sexo_victima";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".nSecOptions"] = 0;
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".recsPerRowPrint"] = 1;
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".mainTableOwnerID"] = "";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".moveNext"] = 1;
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".entityType"] = 2;

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".strOriginalTableName"] = "hechosdelictivos";

	



$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".showAddInPopup"] = false;

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".showEditInPopup"] = false;

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".fieldsForRegister"] = array();

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".listAjax"] = false;

	$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".audit"] = false;

	$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".locking"] = false;


$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".add"] = true;
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".afterAddAction"] = 1;
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".closePopupAfterAdd"] = 1;
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".afterAddActionDetTable"] = "";

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".list"] = true;



$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".reorderRecordsByHeader"] = true;



$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".inlineAdd"] = true;


$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".exportTo"] = true;

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".printFriendly"] = true;


$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".searchSaving"] = false;
//

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".showSearchPanel"] = true;
		$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".flexibleSearch"] = true;

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".isUseAjaxSuggest"] = true;






$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".ajaxCodeSnippetAdded"] = false;

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".buttonsAdded"] = false;

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".addPageEvents"] = false;

// use timepicker for search panel
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".isUseTimeForSearch"] = false;





$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".allSearchFields"] = array();
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".filterFields"] = array();
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".requiredSearchFields"] = array();

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".allSearchFields"][] = "muni_he";
		$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".requiredSearchFields"][] = "muni_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".allSearchFields"][] = "aÑo_hecho";
		$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".requiredSearchFields"][] = "aÑo_hecho";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".allSearchFields"][] = "depart_he";
		$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".requiredSearchFields"][] = "depart_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".allSearchFields"][] = "sector_ppd";
		$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".requiredSearchFields"][] = "sector_ppd";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".allSearchFields"][] = "COUNT(muni_he)";
	


$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".panelSearchFields"] = array();
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".searchPanelOptions"] = array();
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".panelSearchFields"][] = "muni_he";
	$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".panelSearchFields"][] = "aÑo_hecho";
	$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".panelSearchFields"][] = "depart_he";
	$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".panelSearchFields"][] = "sector_ppd";
	

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".tableType"] = "report";

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".printerPageOrientation"] = 0;
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".nPrinterPageScale"] = 100;

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".nPrinterSplitRecords"] = 40;

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".nPrinterPDFSplitRecords"] = 40;



$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".geocodingEnabled"] = false;

//report settings
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".crossTabReport"] = true;

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".reportGroupFields"] = true;
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".pageSize"] = 5;
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
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".reportGroupFieldsData"] = $reportGroupFields;

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".reportHorizontalSummary"] = true;

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".isExistTotalFields"] = true;

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".reportVerticalSummary"] = true;



$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".repShowDet"] = true;

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".reportLayout"] = 6;

//end of report settings




$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".listGridLayout"] = 3;

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY s_victima DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".strOrderBy"] = $tstrOrderBy;

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".orderindexes"] = array();
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "s_victima");

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".sqlHead"] = "SELECT ran_eta_vic,  s_victima,  delito,  muni_he,  `aÑo_hecho`,  COUNT(ran_eta_vic),  depart_he,  sector_ppd,  COUNT(muni_he) AS `COUNT(muni_he)`";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".sqlFrom"] = "FROM hechos_delictivos1";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".sqlWhereExpr"] = "delito =\"HURTO\"";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".arrGroupsPerPage"] = $arrGPP;

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".highlightSearchResults"] = true;

$tableKeysHurtos_por_rango_etarios__seg_n_sexo_victima = array();
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".Keys"] = $tableKeysHurtos_por_rango_etarios__seg_n_sexo_victima;

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".listFields"] = array();
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "ran_eta_vic";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "s_victima";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "delito";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "muni_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "aÑo_hecho";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "COUNT(ran_eta_vic)";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "depart_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "sector_ppd";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "COUNT(muni_he)";

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".hideMobileList"] = array();


$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".viewFields"] = array();
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "ran_eta_vic";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "s_victima";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "delito";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "muni_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "aÑo_hecho";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "COUNT(ran_eta_vic)";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "depart_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "sector_ppd";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "COUNT(muni_he)";

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".addFields"] = array();
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".addFields"][] = "ran_eta_vic";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".addFields"][] = "s_victima";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".addFields"][] = "delito";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".addFields"][] = "muni_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".addFields"][] = "aÑo_hecho";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".addFields"][] = "depart_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".addFields"][] = "sector_ppd";

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".masterListFields"] = array();
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "ran_eta_vic";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "s_victima";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "delito";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "muni_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "aÑo_hecho";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "COUNT(ran_eta_vic)";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "depart_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "sector_ppd";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "COUNT(muni_he)";

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"] = array();
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "ran_eta_vic";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "s_victima";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "delito";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "muni_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "aÑo_hecho";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "depart_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "sector_ppd";

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".editFields"] = array();
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".editFields"][] = "ran_eta_vic";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".editFields"][] = "s_victima";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".editFields"][] = "delito";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".editFields"][] = "muni_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".editFields"][] = "aÑo_hecho";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".editFields"][] = "depart_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".editFields"][] = "sector_ppd";

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"] = array();
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "ran_eta_vic";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "s_victima";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "delito";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "muni_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "aÑo_hecho";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "depart_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "sector_ppd";

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"] = array();
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "ran_eta_vic";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "s_victima";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "delito";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "muni_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "aÑo_hecho";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "depart_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "sector_ppd";


$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".exportFields"] = array();
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "ran_eta_vic";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "s_victima";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "delito";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "muni_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "aÑo_hecho";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "COUNT(ran_eta_vic)";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "depart_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "sector_ppd";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "COUNT(muni_he)";

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".importFields"] = array();
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "ran_eta_vic";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "s_victima";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "delito";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "muni_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "aÑo_hecho";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "COUNT(ran_eta_vic)";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "depart_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "sector_ppd";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "COUNT(muni_he)";

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".printFields"] = array();
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "ran_eta_vic";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "s_victima";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "delito";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "muni_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "aÑo_hecho";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "COUNT(ran_eta_vic)";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "depart_he";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "sector_ppd";
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "COUNT(muni_he)";

//	ran_eta_vic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ran_eta_vic";
	$fdata["GoodName"] = "ran_eta_vic";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Hurtos_por_rango_etarios__seg_n_sexo_victima","ran_eta_vic");
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








	$tdataHurtos_por_rango_etarios__seg_n_sexo_victima["ran_eta_vic"] = $fdata;
//	s_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "s_victima";
	$fdata["GoodName"] = "s_victima";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Hurtos_por_rango_etarios__seg_n_sexo_victima","s_victima");
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








	$tdataHurtos_por_rango_etarios__seg_n_sexo_victima["s_victima"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Hurtos_por_rango_etarios__seg_n_sexo_victima","delito");
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








	$tdataHurtos_por_rango_etarios__seg_n_sexo_victima["delito"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Hurtos_por_rango_etarios__seg_n_sexo_victima","muni_he");
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




	$tdataHurtos_por_rango_etarios__seg_n_sexo_victima["muni_he"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Hurtos_por_rango_etarios__seg_n_sexo_victima","a_o_hecho");
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




	$tdataHurtos_por_rango_etarios__seg_n_sexo_victima["aÑo_hecho"] = $fdata;
//	COUNT(ran_eta_vic)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "COUNT(ran_eta_vic)";
	$fdata["GoodName"] = "COUNT_ran_eta_vic_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Hurtos_por_rango_etarios__seg_n_sexo_victima","COUNT_ran_eta_vic_");
	$fdata["FieldType"] = 3;

		// report field settings
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








	$tdataHurtos_por_rango_etarios__seg_n_sexo_victima["COUNT(ran_eta_vic)"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Hurtos_por_rango_etarios__seg_n_sexo_victima","depart_he");
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




	$tdataHurtos_por_rango_etarios__seg_n_sexo_victima["depart_he"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Hurtos_por_rango_etarios__seg_n_sexo_victima","sector_ppd");
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




	$tdataHurtos_por_rango_etarios__seg_n_sexo_victima["sector_ppd"] = $fdata;
//	COUNT(muni_he)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "COUNT(muni_he)";
	$fdata["GoodName"] = "COUNT_muni_he_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Hurtos_por_rango_etarios__seg_n_sexo_victima","COUNT_muni_he_");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(muni_he)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(muni_he)";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataHurtos_por_rango_etarios__seg_n_sexo_victima["COUNT(muni_he)"] = $fdata;


$tables_data["Hurtos por rango etarios, según sexo victima"]=&$tdataHurtos_por_rango_etarios__seg_n_sexo_victima;
$field_labels["Hurtos_por_rango_etarios__seg_n_sexo_victima"] = &$fieldLabelsHurtos_por_rango_etarios__seg_n_sexo_victima;
$fieldToolTips["Hurtos_por_rango_etarios__seg_n_sexo_victima"] = &$fieldToolTipsHurtos_por_rango_etarios__seg_n_sexo_victima;
$placeHolders["Hurtos_por_rango_etarios__seg_n_sexo_victima"] = &$placeHoldersHurtos_por_rango_etarios__seg_n_sexo_victima;
$page_titles["Hurtos_por_rango_etarios__seg_n_sexo_victima"] = &$pageTitlesHurtos_por_rango_etarios__seg_n_sexo_victima;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Hurtos por rango etarios, según sexo victima"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Hurtos_por_rango_etarios__seg_n_sexo_victima()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ran_eta_vic,  s_victima,  delito,  muni_he,  `aÑo_hecho`,  COUNT(ran_eta_vic),  depart_he,  sector_ppd,  COUNT(muni_he) AS `COUNT(muni_he)`";
$proto0["m_strFrom"] = "FROM hechos_delictivos1";
$proto0["m_strWhere"] = "delito =\"HURTO\"";
$proto0["m_strOrderBy"] = "ORDER BY s_victima DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "delito =\"HURTO\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hurtos por rango etarios, según sexo victima"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=\"HURTO\"";
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
	"m_srcTableName" => "Hurtos por rango etarios, según sexo victima"
));

$proto6["m_sql"] = "ran_eta_vic";
$proto6["m_srcTableName"] = "Hurtos por rango etarios, según sexo victima";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hurtos por rango etarios, según sexo victima"
));

$proto8["m_sql"] = "s_victima";
$proto8["m_srcTableName"] = "Hurtos por rango etarios, según sexo victima";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hurtos por rango etarios, según sexo victima"
));

$proto10["m_sql"] = "delito";
$proto10["m_srcTableName"] = "Hurtos por rango etarios, según sexo victima";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hurtos por rango etarios, según sexo victima"
));

$proto12["m_sql"] = "muni_he";
$proto12["m_srcTableName"] = "Hurtos por rango etarios, según sexo victima";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hurtos por rango etarios, según sexo victima"
));

$proto14["m_sql"] = "`aÑo_hecho`";
$proto14["m_srcTableName"] = "Hurtos por rango etarios, según sexo victima";
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
	"m_srcTableName" => "Hurtos por rango etarios, según sexo victima"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "COUNT(ran_eta_vic)";
$proto16["m_srcTableName"] = "Hurtos por rango etarios, según sexo victima";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hurtos por rango etarios, según sexo victima"
));

$proto19["m_sql"] = "depart_he";
$proto19["m_srcTableName"] = "Hurtos por rango etarios, según sexo victima";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hurtos por rango etarios, según sexo victima"
));

$proto21["m_sql"] = "sector_ppd";
$proto21["m_srcTableName"] = "Hurtos por rango etarios, según sexo victima";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$proto24=array();
$proto24["m_functiontype"] = "SQLF_COUNT";
$proto24["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hurtos por rango etarios, según sexo victima"
));

$proto24["m_arguments"][]=$obj;
$proto24["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto24);

$proto23["m_sql"] = "COUNT(muni_he)";
$proto23["m_srcTableName"] = "Hurtos por rango etarios, según sexo victima";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "COUNT(muni_he)";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "hechos_delictivos1";
$proto27["m_srcTableName"] = "Hurtos por rango etarios, según sexo victima";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id1";
$proto27["m_columns"][] = "id11";
$proto27["m_columns"][] = "correlativo";
$proto27["m_columns"][] = "numero";
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "numero2";
$proto27["m_columns"][] = "lugaranalisis";
$proto27["m_columns"][] = "area";
$proto27["m_columns"][] = "delito";
$proto27["m_columns"][] = "codigo_muni";
$proto27["m_columns"][] = "depart_he";
$proto27["m_columns"][] = "muni_he";
$proto27["m_columns"][] = "dire_hecho";
$proto27["m_columns"][] = "lugar_esp";
$proto27["m_columns"][] = "forma_cono";
$proto27["m_columns"][] = "delito_espe";
$proto27["m_columns"][] = "dia_hecho";
$proto27["m_columns"][] = "hora_hecho";
$proto27["m_columns"][] = "rango_hora";
$proto27["m_columns"][] = "fecha_hecho";
$proto27["m_columns"][] = "mes_hecho";
$proto27["m_columns"][] = "aÑo_hecho";
$proto27["m_columns"][] = "edad_victima";
$proto27["m_columns"][] = "ran_eta_vic";
$proto27["m_columns"][] = "s_victima";
$proto27["m_columns"][] = "oc_victima";
$proto27["m_columns"][] = "relacion_vi_agre";
$proto27["m_columns"][] = "edad_agresor";
$proto27["m_columns"][] = "sexo_agresor";
$proto27["m_columns"][] = "ocupa_agresor";
$proto27["m_columns"][] = "movil";
$proto27["m_columns"][] = "tipo_arma";
$proto27["m_columns"][] = "canton_hecho";
$proto27["m_columns"][] = "colonia_hecho";
$proto27["m_columns"][] = "caserio_hecho";
$proto27["m_columns"][] = "calle_hecho";
$proto27["m_columns"][] = "avenida_hecho";
$proto27["m_columns"][] = "casa_hecho";
$proto27["m_columns"][] = "com_hecho";
$proto27["m_columns"][] = "barrio_hecho";
$proto27["m_columns"][] = "comp_hecho";
$proto27["m_columns"][] = "sector_ppd";
$proto27["m_columns"][] = "tipo";
$proto27["m_columns"][] = "nombre";
$proto27["m_columns"][] = "x";
$proto27["m_columns"][] = "y";
$proto27["m_columns"][] = "correlativo1";
$proto27["m_columns"][] = "mes_corre";
$proto27["m_columns"][] = "arma_analisis";
$proto27["m_columns"][] = "movil_he";
$proto27["m_columns"][] = "ocupa_analisis";
$proto27["m_columns"][] = "rel_vic_ag_anali";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "hechos_delictivos1";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "Hurtos por rango etarios, según sexo victima";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "ran_eta_vic",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hurtos por rango etarios, según sexo victima"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hurtos por rango etarios, según sexo victima"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hurtos por rango etarios, según sexo victima"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hurtos por rango etarios, según sexo victima"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hurtos por rango etarios, según sexo victima"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hurtos por rango etarios, según sexo victima"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hurtos por rango etarios, según sexo victima"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hurtos por rango etarios, según sexo victima"
));

$proto44["m_column"]=$obj;
$proto44["m_bAsc"] = 0;
$proto44["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto44);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Hurtos por rango etarios, según sexo victima";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Hurtos_por_rango_etarios__seg_n_sexo_victima = createSqlQuery_Hurtos_por_rango_etarios__seg_n_sexo_victima();


	
		;

									

$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".sqlquery"] = $queryData_Hurtos_por_rango_etarios__seg_n_sexo_victima;

$tableEvents["Hurtos por rango etarios, según sexo victima"] = new eventsBase;
$tdataHurtos_por_rango_etarios__seg_n_sexo_victima[".hasEvents"] = false;

?>