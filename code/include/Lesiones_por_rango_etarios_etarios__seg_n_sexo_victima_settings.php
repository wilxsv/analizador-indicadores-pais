<?php
require_once(getabspath("classes/cipherer.php"));




$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima = array();
	$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".truncateText"] = true;
	$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".NumberOfChars"] = 80;
	$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".ShortName"] = "Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima";
	$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".OwnerID"] = "";
	$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima = array();
$fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima = array();
$pageTitlesLesiones_por_rango_etarios_etarios__seg_n_sexo_victima = array();
$placeHoldersLesiones_por_rango_etarios_etarios__seg_n_sexo_victima = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"] = array();
	$fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"] = array();
	$placeHoldersLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"] = array();
	$pageTitlesLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"] = array();
	$fieldLabelsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["muni_he"] = "";
	$placeHoldersLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["muni_he"] = "";
	$fieldLabelsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["delito"] = "Delito";
	$fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["delito"] = "";
	$placeHoldersLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["delito"] = "";
	$fieldLabelsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["a_o_hecho"] = "";
	$placeHoldersLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["a_o_hecho"] = "";
	$fieldLabelsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["ran_eta_vic"] = "";
	$placeHoldersLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["ran_eta_vic"] = "";
	$fieldLabelsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["s_victima"] = "S Victima";
	$fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["s_victima"] = "";
	$placeHoldersLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["s_victima"] = "";
	$fieldLabelsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["COUNT_ran_eta_vic_"] = "COUNT(ran Eta Vic)";
	$fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["COUNT_ran_eta_vic_"] = "";
	$placeHoldersLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["COUNT_ran_eta_vic_"] = "";
	$fieldLabelsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["sector_ppd"] = "";
	$placeHoldersLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["sector_ppd"] = "";
	$fieldLabelsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["depart_he"] = "";
	$placeHoldersLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]["depart_he"] = "";
	if (count($fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["Spanish"]))
		$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"] = array();
	$fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"] = array();
	$placeHoldersLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"] = array();
	$pageTitlesLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"] = array();
	$fieldLabelsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["muni_he"] = "Muni He";
	$fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["muni_he"] = "";
	$placeHoldersLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["muni_he"] = "";
	$fieldLabelsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["delito"] = "Delito";
	$fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["delito"] = "";
	$placeHoldersLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["delito"] = "";
	$fieldLabelsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["a_o_hecho"] = "";
	$placeHoldersLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["a_o_hecho"] = "";
	$fieldLabelsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["ran_eta_vic"] = "";
	$placeHoldersLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["ran_eta_vic"] = "";
	$fieldLabelsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["s_victima"] = "S Victima";
	$fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["s_victima"] = "";
	$placeHoldersLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["s_victima"] = "";
	$fieldLabelsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["COUNT_ran_eta_vic_"] = "COUNT(ran Eta Vic)";
	$fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["COUNT_ran_eta_vic_"] = "";
	$placeHoldersLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["COUNT_ran_eta_vic_"] = "";
	$fieldLabelsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["sector_ppd"] = "";
	$placeHoldersLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["sector_ppd"] = "";
	$fieldLabelsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["depart_he"] = "Depart He";
	$fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["depart_he"] = "";
	$placeHoldersLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]["depart_he"] = "";
	if (count($fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["English"]))
		$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[""] = array();
	$fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[""] = array();
	$placeHoldersLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[""] = array();
	$pageTitlesLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[""] = array();
	if (count($fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[""]))
		$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".isUseToolTips"] = true;
}





$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".shortTableName"] = "Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".nSecOptions"] = 0;
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".recsPerRowPrint"] = 1;
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".mainTableOwnerID"] = "";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".moveNext"] = 1;
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".entityType"] = 2;

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".strOriginalTableName"] = "hechosdelictivos";

	



$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".showAddInPopup"] = false;

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".showEditInPopup"] = false;

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".fieldsForRegister"] = array();

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".listAjax"] = false;

	$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".audit"] = false;

	$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".locking"] = false;


$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".add"] = true;
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".afterAddAction"] = 1;
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".closePopupAfterAdd"] = 1;
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".afterAddActionDetTable"] = "";

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".list"] = true;



$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".reorderRecordsByHeader"] = true;



$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".inlineAdd"] = true;


$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".exportTo"] = true;

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".printFriendly"] = true;


$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".searchSaving"] = false;
//

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".showSearchPanel"] = true;
		$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".flexibleSearch"] = true;

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".isUseAjaxSuggest"] = true;






$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".ajaxCodeSnippetAdded"] = false;

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".buttonsAdded"] = false;

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".addPageEvents"] = false;

// use timepicker for search panel
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".isUseTimeForSearch"] = false;





$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".allSearchFields"] = array();
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".filterFields"] = array();
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".requiredSearchFields"] = array();

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".allSearchFields"][] = "muni_he";
		$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".requiredSearchFields"][] = "muni_he";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".allSearchFields"][] = "aÑo_hecho";
		$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".requiredSearchFields"][] = "aÑo_hecho";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".allSearchFields"][] = "sector_ppd";
		$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".requiredSearchFields"][] = "sector_ppd";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".allSearchFields"][] = "depart_he";
		$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".requiredSearchFields"][] = "depart_he";



$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".panelSearchFields"] = array();
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".searchPanelOptions"] = array();
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".panelSearchFields"][] = "muni_he";
	$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".panelSearchFields"][] = "aÑo_hecho";
	$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".panelSearchFields"][] = "sector_ppd";
	$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".panelSearchFields"][] = "depart_he";
	

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".tableType"] = "report";

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".printerPageOrientation"] = 0;
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".nPrinterPageScale"] = 100;

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".nPrinterSplitRecords"] = 40;

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".nPrinterPDFSplitRecords"] = 40;



$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".geocodingEnabled"] = false;

//report settings
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".crossTabReport"] = true;

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".reportGroupFields"] = true;
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".pageSize"] = 5;
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
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".reportGroupFieldsData"] = $reportGroupFields;

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".reportHorizontalSummary"] = true;

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".isExistTotalFields"] = true;

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".reportVerticalSummary"] = true;



$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".repShowDet"] = true;

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".reportLayout"] = 6;

//end of report settings




$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".listGridLayout"] = 3;

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".strOrderBy"] = $tstrOrderBy;

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".orderindexes"] = array();

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".sqlHead"] = "SELECT ran_eta_vic,  s_victima,  delito,  muni_he,  `aÑo_hecho`,  COUNT(ran_eta_vic) AS `COUNT(ran_eta_vic)`,  sector_ppd,  depart_he";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".sqlFrom"] = "FROM hechos_delictivos1";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".sqlWhereExpr"] = "delito =\"LESIONES\"";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".arrGroupsPerPage"] = $arrGPP;

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".highlightSearchResults"] = true;

$tableKeysLesiones_por_rango_etarios_etarios__seg_n_sexo_victima = array();
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".Keys"] = $tableKeysLesiones_por_rango_etarios_etarios__seg_n_sexo_victima;

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".listFields"] = array();
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".listFields"][] = "ran_eta_vic";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".listFields"][] = "s_victima";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".listFields"][] = "delito";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".listFields"][] = "muni_he";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".listFields"][] = "aÑo_hecho";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".listFields"][] = "COUNT(ran_eta_vic)";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".listFields"][] = "sector_ppd";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".listFields"][] = "depart_he";

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".hideMobileList"] = array();


$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".viewFields"] = array();
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".viewFields"][] = "ran_eta_vic";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".viewFields"][] = "s_victima";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".viewFields"][] = "delito";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".viewFields"][] = "muni_he";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".viewFields"][] = "aÑo_hecho";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".viewFields"][] = "COUNT(ran_eta_vic)";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".viewFields"][] = "sector_ppd";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".viewFields"][] = "depart_he";

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".addFields"] = array();
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".addFields"][] = "ran_eta_vic";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".addFields"][] = "s_victima";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".addFields"][] = "delito";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".addFields"][] = "muni_he";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".addFields"][] = "aÑo_hecho";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".addFields"][] = "sector_ppd";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".addFields"][] = "depart_he";

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".masterListFields"] = array();
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".masterListFields"][] = "ran_eta_vic";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".masterListFields"][] = "s_victima";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".masterListFields"][] = "delito";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".masterListFields"][] = "muni_he";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".masterListFields"][] = "aÑo_hecho";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".masterListFields"][] = "COUNT(ran_eta_vic)";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".masterListFields"][] = "sector_ppd";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".masterListFields"][] = "depart_he";

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".inlineAddFields"] = array();
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "ran_eta_vic";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "s_victima";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "delito";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "muni_he";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "aÑo_hecho";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "sector_ppd";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "depart_he";

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".editFields"] = array();
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".editFields"][] = "ran_eta_vic";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".editFields"][] = "s_victima";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".editFields"][] = "delito";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".editFields"][] = "muni_he";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".editFields"][] = "aÑo_hecho";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".editFields"][] = "sector_ppd";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".editFields"][] = "depart_he";

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".inlineEditFields"] = array();
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "ran_eta_vic";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "s_victima";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "delito";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "muni_he";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "aÑo_hecho";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "sector_ppd";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "depart_he";

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".updateSelectedFields"] = array();
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "ran_eta_vic";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "s_victima";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "delito";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "muni_he";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "aÑo_hecho";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "sector_ppd";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "depart_he";


$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".exportFields"] = array();
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".exportFields"][] = "ran_eta_vic";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".exportFields"][] = "s_victima";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".exportFields"][] = "delito";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".exportFields"][] = "muni_he";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".exportFields"][] = "aÑo_hecho";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".exportFields"][] = "COUNT(ran_eta_vic)";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".exportFields"][] = "sector_ppd";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".exportFields"][] = "depart_he";

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".importFields"] = array();
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".importFields"][] = "ran_eta_vic";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".importFields"][] = "s_victima";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".importFields"][] = "delito";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".importFields"][] = "muni_he";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".importFields"][] = "aÑo_hecho";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".importFields"][] = "COUNT(ran_eta_vic)";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".importFields"][] = "sector_ppd";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".importFields"][] = "depart_he";

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".printFields"] = array();
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".printFields"][] = "ran_eta_vic";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".printFields"][] = "s_victima";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".printFields"][] = "delito";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".printFields"][] = "muni_he";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".printFields"][] = "aÑo_hecho";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".printFields"][] = "COUNT(ran_eta_vic)";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".printFields"][] = "sector_ppd";
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".printFields"][] = "depart_he";

//	ran_eta_vic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ran_eta_vic";
	$fdata["GoodName"] = "ran_eta_vic";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima","ran_eta_vic");
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








	$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["ran_eta_vic"] = $fdata;
//	s_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "s_victima";
	$fdata["GoodName"] = "s_victima";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima","s_victima");
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








	$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["s_victima"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima","delito");
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








	$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["delito"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima","muni_he");
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




	$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["muni_he"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima","a_o_hecho");
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




	$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["aÑo_hecho"] = $fdata;
//	COUNT(ran_eta_vic)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "COUNT(ran_eta_vic)";
	$fdata["GoodName"] = "COUNT_ran_eta_vic_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima","COUNT_ran_eta_vic_");
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








	$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["COUNT(ran_eta_vic)"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima","sector_ppd");
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




	$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["sector_ppd"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima","depart_he");
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




	$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima["depart_he"] = $fdata;


$tables_data["Lesiones por rango etarios etarios, según sexo victima"]=&$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima;
$field_labels["Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima"] = &$fieldLabelsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima;
$fieldToolTips["Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima"] = &$fieldToolTipsLesiones_por_rango_etarios_etarios__seg_n_sexo_victima;
$placeHolders["Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima"] = &$placeHoldersLesiones_por_rango_etarios_etarios__seg_n_sexo_victima;
$page_titles["Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima"] = &$pageTitlesLesiones_por_rango_etarios_etarios__seg_n_sexo_victima;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Lesiones por rango etarios etarios, según sexo victima"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ran_eta_vic,  s_victima,  delito,  muni_he,  `aÑo_hecho`,  COUNT(ran_eta_vic) AS `COUNT(ran_eta_vic)`,  sector_ppd,  depart_he";
$proto0["m_strFrom"] = "FROM hechos_delictivos1";
$proto0["m_strWhere"] = "delito =\"LESIONES\"";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "delito =\"LESIONES\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Lesiones por rango etarios etarios, según sexo victima"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=\"LESIONES\"";
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
	"m_srcTableName" => "Lesiones por rango etarios etarios, según sexo victima"
));

$proto6["m_sql"] = "ran_eta_vic";
$proto6["m_srcTableName"] = "Lesiones por rango etarios etarios, según sexo victima";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Lesiones por rango etarios etarios, según sexo victima"
));

$proto8["m_sql"] = "s_victima";
$proto8["m_srcTableName"] = "Lesiones por rango etarios etarios, según sexo victima";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Lesiones por rango etarios etarios, según sexo victima"
));

$proto10["m_sql"] = "delito";
$proto10["m_srcTableName"] = "Lesiones por rango etarios etarios, según sexo victima";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Lesiones por rango etarios etarios, según sexo victima"
));

$proto12["m_sql"] = "muni_he";
$proto12["m_srcTableName"] = "Lesiones por rango etarios etarios, según sexo victima";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Lesiones por rango etarios etarios, según sexo victima"
));

$proto14["m_sql"] = "`aÑo_hecho`";
$proto14["m_srcTableName"] = "Lesiones por rango etarios etarios, según sexo victima";
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
	"m_srcTableName" => "Lesiones por rango etarios etarios, según sexo victima"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "COUNT(ran_eta_vic)";
$proto16["m_srcTableName"] = "Lesiones por rango etarios etarios, según sexo victima";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "COUNT(ran_eta_vic)";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Lesiones por rango etarios etarios, según sexo victima"
));

$proto19["m_sql"] = "sector_ppd";
$proto19["m_srcTableName"] = "Lesiones por rango etarios etarios, según sexo victima";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Lesiones por rango etarios etarios, según sexo victima"
));

$proto21["m_sql"] = "depart_he";
$proto21["m_srcTableName"] = "Lesiones por rango etarios etarios, según sexo victima";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "hechos_delictivos1";
$proto24["m_srcTableName"] = "Lesiones por rango etarios etarios, según sexo victima";
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
$proto23["m_srcTableName"] = "Lesiones por rango etarios etarios, según sexo victima";
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
	"m_srcTableName" => "Lesiones por rango etarios etarios, según sexo victima"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Lesiones por rango etarios etarios, según sexo victima"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Lesiones por rango etarios etarios, según sexo victima"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Lesiones por rango etarios etarios, según sexo victima"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Lesiones por rango etarios etarios, según sexo victima"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Lesiones por rango etarios etarios, según sexo victima"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Lesiones por rango etarios etarios, según sexo victima"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Lesiones por rango etarios etarios, según sexo victima";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima = createSqlQuery_Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima();


	
		;

								

$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".sqlquery"] = $queryData_Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima;

$tableEvents["Lesiones por rango etarios etarios, según sexo victima"] = new eventsBase;
$tdataLesiones_por_rango_etarios_etarios__seg_n_sexo_victima[".hasEvents"] = false;

?>