<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima = array();
	$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".truncateText"] = true;
	$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".NumberOfChars"] = 80;
	$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".ShortName"] = "Amenazas__por_rango_etarios__seg_n_sexo_victima";
	$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".OwnerID"] = "";
	$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsAmenazas__por_rango_etarios__seg_n_sexo_victima = array();
$fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima = array();
$pageTitlesAmenazas__por_rango_etarios__seg_n_sexo_victima = array();
$placeHoldersAmenazas__por_rango_etarios__seg_n_sexo_victima = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"] = array();
	$fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"] = array();
	$placeHoldersAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"] = array();
	$pageTitlesAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"] = array();
	$fieldLabelsAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["muni_he"] = "";
	$placeHoldersAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["muni_he"] = "";
	$fieldLabelsAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["delito"] = "Delito";
	$fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["delito"] = "";
	$placeHoldersAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["delito"] = "";
	$fieldLabelsAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["a_o_hecho"] = "";
	$placeHoldersAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["a_o_hecho"] = "";
	$fieldLabelsAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["ran_eta_vic"] = "";
	$placeHoldersAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["ran_eta_vic"] = "";
	$fieldLabelsAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["s_victima"] = "S Victima";
	$fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["s_victima"] = "";
	$placeHoldersAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["s_victima"] = "";
	$fieldLabelsAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["COUNT_ran_eta_vic_"] = "COUNT(ran Eta Vic)";
	$fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["COUNT_ran_eta_vic_"] = "";
	$placeHoldersAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["COUNT_ran_eta_vic_"] = "";
	$fieldLabelsAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["COUNT_delito_"] = "COUNT(delito)";
	$fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["COUNT_delito_"] = "";
	$placeHoldersAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["COUNT_delito_"] = "";
	$fieldLabelsAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["depart_he"] = "";
	$placeHoldersAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]["depart_he"] = "";
	if (count($fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima["Spanish"]))
		$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAmenazas__por_rango_etarios__seg_n_sexo_victima["English"] = array();
	$fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima["English"] = array();
	$placeHoldersAmenazas__por_rango_etarios__seg_n_sexo_victima["English"] = array();
	$pageTitlesAmenazas__por_rango_etarios__seg_n_sexo_victima["English"] = array();
	$fieldLabelsAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["muni_he"] = "Muni He";
	$fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["muni_he"] = "";
	$placeHoldersAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["muni_he"] = "";
	$fieldLabelsAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["delito"] = "Delito";
	$fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["delito"] = "";
	$placeHoldersAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["delito"] = "";
	$fieldLabelsAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["a_o_hecho"] = "";
	$placeHoldersAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["a_o_hecho"] = "";
	$fieldLabelsAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["ran_eta_vic"] = "";
	$placeHoldersAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["ran_eta_vic"] = "";
	$fieldLabelsAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["s_victima"] = "S Victima";
	$fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["s_victima"] = "";
	$placeHoldersAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["s_victima"] = "";
	$fieldLabelsAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["COUNT_ran_eta_vic_"] = "COUNT(ran Eta Vic)";
	$fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["COUNT_ran_eta_vic_"] = "";
	$placeHoldersAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["COUNT_ran_eta_vic_"] = "";
	$fieldLabelsAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["COUNT_delito_"] = "COUNT(delito)";
	$fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["COUNT_delito_"] = "";
	$placeHoldersAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["COUNT_delito_"] = "";
	$fieldLabelsAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["depart_he"] = "Depart He";
	$fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["depart_he"] = "";
	$placeHoldersAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]["depart_he"] = "";
	if (count($fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima["English"]))
		$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAmenazas__por_rango_etarios__seg_n_sexo_victima[""] = array();
	$fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima[""] = array();
	$placeHoldersAmenazas__por_rango_etarios__seg_n_sexo_victima[""] = array();
	$pageTitlesAmenazas__por_rango_etarios__seg_n_sexo_victima[""] = array();
	if (count($fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima[""]))
		$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".isUseToolTips"] = true;
}





$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".shortTableName"] = "Amenazas__por_rango_etarios__seg_n_sexo_victima";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".nSecOptions"] = 0;
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".recsPerRowPrint"] = 1;
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".mainTableOwnerID"] = "";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".moveNext"] = 1;
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".entityType"] = 2;

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".strOriginalTableName"] = "hechosdelictivos";

	



$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".showAddInPopup"] = false;

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".showEditInPopup"] = false;

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".fieldsForRegister"] = array();

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".listAjax"] = false;

	$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".audit"] = false;

	$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".locking"] = false;


$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".add"] = true;
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".afterAddAction"] = 1;
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".closePopupAfterAdd"] = 1;
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".afterAddActionDetTable"] = "";

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".list"] = true;



$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".reorderRecordsByHeader"] = true;



$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".inlineAdd"] = true;


$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".exportTo"] = true;

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".printFriendly"] = true;


$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".searchSaving"] = false;
//

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".showSearchPanel"] = true;
		$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".flexibleSearch"] = true;

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".isUseAjaxSuggest"] = true;






$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".ajaxCodeSnippetAdded"] = false;

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".buttonsAdded"] = false;

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".isUseTimeForSearch"] = false;





$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".allSearchFields"] = array();
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".filterFields"] = array();
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".requiredSearchFields"] = array();

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".allSearchFields"][] = "muni_he";
		$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".requiredSearchFields"][] = "muni_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".allSearchFields"][] = "depart_he";
		$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".requiredSearchFields"][] = "depart_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".allSearchFields"][] = "aÑo_hecho";
		$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".requiredSearchFields"][] = "aÑo_hecho";



$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".panelSearchFields"] = array();
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".searchPanelOptions"] = array();
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".panelSearchFields"][] = "muni_he";
	$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".panelSearchFields"][] = "depart_he";
	$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".panelSearchFields"][] = "aÑo_hecho";
	

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".tableType"] = "report";

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".printerPageOrientation"] = 0;
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".nPrinterPageScale"] = 100;

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".nPrinterSplitRecords"] = 40;

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".nPrinterPDFSplitRecords"] = 40;



$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".geocodingEnabled"] = false;

//report settings
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".crossTabReport"] = true;

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".reportGroupFields"] = true;
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".pageSize"] = 5;
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
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".reportGroupFieldsData"] = $reportGroupFields;

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".reportHorizontalSummary"] = true;

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".isExistTotalFields"] = true;

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".reportVerticalSummary"] = true;



$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".repShowDet"] = true;

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".reportLayout"] = 6;

//end of report settings




$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".listGridLayout"] = 3;

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".strOrderBy"] = $tstrOrderBy;

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".orderindexes"] = array();

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".sqlHead"] = "SELECT ran_eta_vic,  s_victima,  delito,  muni_he,  depart_he,  `aÑo_hecho`,  COUNT(ran_eta_vic) AS `COUNT(ran_eta_vic)`,  COUNT(delito) AS `COUNT(delito)`";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".sqlFrom"] = "FROM hechos_delictivos1";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".sqlWhereExpr"] = "(delito =\"AMENAZAS\")";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".arrGroupsPerPage"] = $arrGPP;

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".highlightSearchResults"] = true;

$tableKeysAmenazas__por_rango_etarios__seg_n_sexo_victima = array();
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".Keys"] = $tableKeysAmenazas__por_rango_etarios__seg_n_sexo_victima;

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".listFields"] = array();
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "ran_eta_vic";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "s_victima";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "delito";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "muni_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "depart_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "aÑo_hecho";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "COUNT(ran_eta_vic)";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "COUNT(delito)";

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".hideMobileList"] = array();


$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".viewFields"] = array();
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "ran_eta_vic";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "s_victima";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "delito";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "muni_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "depart_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "aÑo_hecho";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "COUNT(ran_eta_vic)";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "COUNT(delito)";

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".addFields"] = array();
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".addFields"][] = "ran_eta_vic";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".addFields"][] = "s_victima";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".addFields"][] = "delito";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".addFields"][] = "muni_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".addFields"][] = "depart_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".addFields"][] = "aÑo_hecho";

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".masterListFields"] = array();
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "ran_eta_vic";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "s_victima";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "delito";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "muni_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "depart_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "aÑo_hecho";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "COUNT(ran_eta_vic)";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "COUNT(delito)";

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"] = array();
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "ran_eta_vic";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "s_victima";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "delito";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "muni_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "depart_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "aÑo_hecho";

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".editFields"] = array();
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".editFields"][] = "ran_eta_vic";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".editFields"][] = "s_victima";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".editFields"][] = "delito";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".editFields"][] = "muni_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".editFields"][] = "depart_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".editFields"][] = "aÑo_hecho";

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"] = array();
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "ran_eta_vic";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "s_victima";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "delito";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "muni_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "depart_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "aÑo_hecho";

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"] = array();
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "ran_eta_vic";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "s_victima";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "delito";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "muni_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "depart_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "aÑo_hecho";


$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".exportFields"] = array();
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "ran_eta_vic";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "s_victima";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "delito";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "muni_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "depart_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "aÑo_hecho";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "COUNT(ran_eta_vic)";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "COUNT(delito)";

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".importFields"] = array();
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "ran_eta_vic";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "s_victima";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "delito";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "muni_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "depart_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "aÑo_hecho";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "COUNT(ran_eta_vic)";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "COUNT(delito)";

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".printFields"] = array();
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "ran_eta_vic";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "s_victima";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "delito";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "muni_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "depart_he";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "aÑo_hecho";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "COUNT(ran_eta_vic)";
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "COUNT(delito)";

//	ran_eta_vic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ran_eta_vic";
	$fdata["GoodName"] = "ran_eta_vic";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Amenazas__por_rango_etarios__seg_n_sexo_victima","ran_eta_vic");
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








	$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima["ran_eta_vic"] = $fdata;
//	s_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "s_victima";
	$fdata["GoodName"] = "s_victima";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Amenazas__por_rango_etarios__seg_n_sexo_victima","s_victima");
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








	$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima["s_victima"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Amenazas__por_rango_etarios__seg_n_sexo_victima","delito");
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








	$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima["delito"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Amenazas__por_rango_etarios__seg_n_sexo_victima","muni_he");
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




	$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima["muni_he"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Amenazas__por_rango_etarios__seg_n_sexo_victima","depart_he");
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




	$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima["depart_he"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Amenazas__por_rango_etarios__seg_n_sexo_victima","a_o_hecho");
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




	$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima["aÑo_hecho"] = $fdata;
//	COUNT(ran_eta_vic)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "COUNT(ran_eta_vic)";
	$fdata["GoodName"] = "COUNT_ran_eta_vic_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Amenazas__por_rango_etarios__seg_n_sexo_victima","COUNT_ran_eta_vic_");
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








	$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima["COUNT(ran_eta_vic)"] = $fdata;
//	COUNT(delito)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "COUNT(delito)";
	$fdata["GoodName"] = "COUNT_delito_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Amenazas__por_rango_etarios__seg_n_sexo_victima","COUNT_delito_");
	$fdata["FieldType"] = 3;

		// report field settings
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








	$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima["COUNT(delito)"] = $fdata;


$tables_data["Amenazas, por rango etarios, según sexo victima"]=&$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima;
$field_labels["Amenazas__por_rango_etarios__seg_n_sexo_victima"] = &$fieldLabelsAmenazas__por_rango_etarios__seg_n_sexo_victima;
$fieldToolTips["Amenazas__por_rango_etarios__seg_n_sexo_victima"] = &$fieldToolTipsAmenazas__por_rango_etarios__seg_n_sexo_victima;
$placeHolders["Amenazas__por_rango_etarios__seg_n_sexo_victima"] = &$placeHoldersAmenazas__por_rango_etarios__seg_n_sexo_victima;
$page_titles["Amenazas__por_rango_etarios__seg_n_sexo_victima"] = &$pageTitlesAmenazas__por_rango_etarios__seg_n_sexo_victima;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Amenazas, por rango etarios, según sexo victima"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Amenazas__por_rango_etarios__seg_n_sexo_victima()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ran_eta_vic,  s_victima,  delito,  muni_he,  depart_he,  `aÑo_hecho`,  COUNT(ran_eta_vic) AS `COUNT(ran_eta_vic)`,  COUNT(delito) AS `COUNT(delito)`";
$proto0["m_strFrom"] = "FROM hechos_delictivos1";
$proto0["m_strWhere"] = "(delito =\"AMENAZAS\")";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "delito =\"AMENAZAS\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Amenazas, por rango etarios, según sexo victima"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=\"AMENAZAS\"";
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
	"m_srcTableName" => "Amenazas, por rango etarios, según sexo victima"
));

$proto6["m_sql"] = "ran_eta_vic";
$proto6["m_srcTableName"] = "Amenazas, por rango etarios, según sexo victima";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Amenazas, por rango etarios, según sexo victima"
));

$proto8["m_sql"] = "s_victima";
$proto8["m_srcTableName"] = "Amenazas, por rango etarios, según sexo victima";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Amenazas, por rango etarios, según sexo victima"
));

$proto10["m_sql"] = "delito";
$proto10["m_srcTableName"] = "Amenazas, por rango etarios, según sexo victima";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Amenazas, por rango etarios, según sexo victima"
));

$proto12["m_sql"] = "muni_he";
$proto12["m_srcTableName"] = "Amenazas, por rango etarios, según sexo victima";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Amenazas, por rango etarios, según sexo victima"
));

$proto14["m_sql"] = "depart_he";
$proto14["m_srcTableName"] = "Amenazas, por rango etarios, según sexo victima";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Amenazas, por rango etarios, según sexo victima"
));

$proto16["m_sql"] = "`aÑo_hecho`";
$proto16["m_srcTableName"] = "Amenazas, por rango etarios, según sexo victima";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_COUNT";
$proto19["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "ran_eta_vic",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Amenazas, por rango etarios, según sexo victima"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "COUNT(ran_eta_vic)";
$proto18["m_srcTableName"] = "Amenazas, por rango etarios, según sexo victima";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "COUNT(ran_eta_vic)";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_COUNT";
$proto22["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Amenazas, por rango etarios, según sexo victima"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "COUNT(delito)";
$proto21["m_srcTableName"] = "Amenazas, por rango etarios, según sexo victima";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "COUNT(delito)";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "hechos_delictivos1";
$proto25["m_srcTableName"] = "Amenazas, por rango etarios, según sexo victima";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id1";
$proto25["m_columns"][] = "id11";
$proto25["m_columns"][] = "correlativo";
$proto25["m_columns"][] = "numero";
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "numero2";
$proto25["m_columns"][] = "lugaranalisis";
$proto25["m_columns"][] = "area";
$proto25["m_columns"][] = "delito";
$proto25["m_columns"][] = "codigo_muni";
$proto25["m_columns"][] = "depart_he";
$proto25["m_columns"][] = "muni_he";
$proto25["m_columns"][] = "dire_hecho";
$proto25["m_columns"][] = "lugar_esp";
$proto25["m_columns"][] = "forma_cono";
$proto25["m_columns"][] = "delito_espe";
$proto25["m_columns"][] = "dia_hecho";
$proto25["m_columns"][] = "hora_hecho";
$proto25["m_columns"][] = "rango_hora";
$proto25["m_columns"][] = "fecha_hecho";
$proto25["m_columns"][] = "mes_hecho";
$proto25["m_columns"][] = "aÑo_hecho";
$proto25["m_columns"][] = "edad_victima";
$proto25["m_columns"][] = "ran_eta_vic";
$proto25["m_columns"][] = "s_victima";
$proto25["m_columns"][] = "oc_victima";
$proto25["m_columns"][] = "relacion_vi_agre";
$proto25["m_columns"][] = "edad_agresor";
$proto25["m_columns"][] = "sexo_agresor";
$proto25["m_columns"][] = "ocupa_agresor";
$proto25["m_columns"][] = "movil";
$proto25["m_columns"][] = "tipo_arma";
$proto25["m_columns"][] = "canton_hecho";
$proto25["m_columns"][] = "colonia_hecho";
$proto25["m_columns"][] = "caserio_hecho";
$proto25["m_columns"][] = "calle_hecho";
$proto25["m_columns"][] = "avenida_hecho";
$proto25["m_columns"][] = "casa_hecho";
$proto25["m_columns"][] = "com_hecho";
$proto25["m_columns"][] = "barrio_hecho";
$proto25["m_columns"][] = "comp_hecho";
$proto25["m_columns"][] = "sector_ppd";
$proto25["m_columns"][] = "tipo";
$proto25["m_columns"][] = "nombre";
$proto25["m_columns"][] = "x";
$proto25["m_columns"][] = "y";
$proto25["m_columns"][] = "correlativo1";
$proto25["m_columns"][] = "mes_corre";
$proto25["m_columns"][] = "arma_analisis";
$proto25["m_columns"][] = "movil_he";
$proto25["m_columns"][] = "ocupa_analisis";
$proto25["m_columns"][] = "rel_vic_ag_anali";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "hechos_delictivos1";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "Amenazas, por rango etarios, según sexo victima";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "ran_eta_vic",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Amenazas, por rango etarios, según sexo victima"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Amenazas, por rango etarios, según sexo victima"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Amenazas, por rango etarios, según sexo victima"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Amenazas, por rango etarios, según sexo victima"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Amenazas, por rango etarios, según sexo victima"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Amenazas, por rango etarios, según sexo victima"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Amenazas, por rango etarios, según sexo victima"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Amenazas, por rango etarios, según sexo victima";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Amenazas__por_rango_etarios__seg_n_sexo_victima = createSqlQuery_Amenazas__por_rango_etarios__seg_n_sexo_victima();


	
		;

								

$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".sqlquery"] = $queryData_Amenazas__por_rango_etarios__seg_n_sexo_victima;

$tableEvents["Amenazas, por rango etarios, según sexo victima"] = new eventsBase;
$tdataAmenazas__por_rango_etarios__seg_n_sexo_victima[".hasEvents"] = false;

?>