<?php
require_once(getabspath("classes/cipherer.php"));




$tdataHomicidios_por_rango_etarios__seg_n_sexo = array();
	$tdataHomicidios_por_rango_etarios__seg_n_sexo[".truncateText"] = true;
	$tdataHomicidios_por_rango_etarios__seg_n_sexo[".NumberOfChars"] = 80;
	$tdataHomicidios_por_rango_etarios__seg_n_sexo[".ShortName"] = "Homicidios_por_rango_etarios__seg_n_sexo";
	$tdataHomicidios_por_rango_etarios__seg_n_sexo[".OwnerID"] = "";
	$tdataHomicidios_por_rango_etarios__seg_n_sexo[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo = array();
$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo = array();
$pageTitlesHomicidios_por_rango_etarios__seg_n_sexo = array();
$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo["Spanish"] = array();
	$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["Spanish"] = array();
	$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo["Spanish"] = array();
	$pageTitlesHomicidios_por_rango_etarios__seg_n_sexo["Spanish"] = array();
	$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["muni_he"] = "";
	$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["muni_he"] = "";
	$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["delito"] = "Delito";
	$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["delito"] = "";
	$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["delito"] = "";
	$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["a_o_hecho"] = "";
	$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["a_o_hecho"] = "";
	$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["ran_eta_vic"] = "";
	$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["ran_eta_vic"] = "";
	$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["s_victima"] = "S Victima";
	$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["s_victima"] = "";
	$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["s_victima"] = "";
	$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["COUNT_ran_eta_vic_"] = "COUNT(ran Eta Vic)";
	$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["COUNT_ran_eta_vic_"] = "";
	$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["COUNT_ran_eta_vic_"] = "";
	$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["depart_he"] = "";
	$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["depart_he"] = "";
	$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["sector_ppd"] = "";
	$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["sector_ppd"] = "";
	$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["edad_victima"] = "Edad Victima";
	$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["edad_victima"] = "";
	$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]["edad_victima"] = "";
	if (count($fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["Spanish"]))
		$tdataHomicidios_por_rango_etarios__seg_n_sexo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo["English"] = array();
	$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["English"] = array();
	$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo["English"] = array();
	$pageTitlesHomicidios_por_rango_etarios__seg_n_sexo["English"] = array();
	$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo["English"]["muni_he"] = "Muni He";
	$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["English"]["muni_he"] = "";
	$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo["English"]["muni_he"] = "";
	$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo["English"]["delito"] = "Delito";
	$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["English"]["delito"] = "";
	$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo["English"]["delito"] = "";
	$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["English"]["a_o_hecho"] = "";
	$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo["English"]["a_o_hecho"] = "";
	$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo["English"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["English"]["ran_eta_vic"] = "";
	$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo["English"]["ran_eta_vic"] = "";
	$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo["English"]["s_victima"] = "S Victima";
	$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["English"]["s_victima"] = "";
	$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo["English"]["s_victima"] = "";
	$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo["English"]["COUNT_ran_eta_vic_"] = "COUNT(ran Eta Vic)";
	$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["English"]["COUNT_ran_eta_vic_"] = "";
	$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo["English"]["COUNT_ran_eta_vic_"] = "";
	$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo["English"]["depart_he"] = "Depart He";
	$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["English"]["depart_he"] = "";
	$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo["English"]["depart_he"] = "";
	$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["English"]["sector_ppd"] = "";
	$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo["English"]["sector_ppd"] = "";
	$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo["English"]["edad_victima"] = "Edad Victima";
	$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["English"]["edad_victima"] = "";
	$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo["English"]["edad_victima"] = "";
	if (count($fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo["English"]))
		$tdataHomicidios_por_rango_etarios__seg_n_sexo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo[""] = array();
	$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo[""] = array();
	$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo[""] = array();
	$pageTitlesHomicidios_por_rango_etarios__seg_n_sexo[""] = array();
	if (count($fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo[""]))
		$tdataHomicidios_por_rango_etarios__seg_n_sexo[".isUseToolTips"] = true;
}





$tdataHomicidios_por_rango_etarios__seg_n_sexo[".shortTableName"] = "Homicidios_por_rango_etarios__seg_n_sexo";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".nSecOptions"] = 0;
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".recsPerRowPrint"] = 1;
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".mainTableOwnerID"] = "";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".moveNext"] = 1;
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".entityType"] = 2;

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".strOriginalTableName"] = "hechosdelictivos";

	



$tdataHomicidios_por_rango_etarios__seg_n_sexo[".showAddInPopup"] = false;

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".showEditInPopup"] = false;

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataHomicidios_por_rango_etarios__seg_n_sexo[".fieldsForRegister"] = array();

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".listAjax"] = false;

	$tdataHomicidios_por_rango_etarios__seg_n_sexo[".audit"] = false;

	$tdataHomicidios_por_rango_etarios__seg_n_sexo[".locking"] = false;


$tdataHomicidios_por_rango_etarios__seg_n_sexo[".add"] = true;
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".afterAddAction"] = 1;
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".closePopupAfterAdd"] = 1;
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".afterAddActionDetTable"] = "";

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".list"] = true;



$tdataHomicidios_por_rango_etarios__seg_n_sexo[".reorderRecordsByHeader"] = true;



$tdataHomicidios_por_rango_etarios__seg_n_sexo[".inlineAdd"] = true;


$tdataHomicidios_por_rango_etarios__seg_n_sexo[".exportTo"] = true;

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".printFriendly"] = true;


$tdataHomicidios_por_rango_etarios__seg_n_sexo[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".searchSaving"] = false;
//

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".showSearchPanel"] = true;
		$tdataHomicidios_por_rango_etarios__seg_n_sexo[".flexibleSearch"] = true;

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".isUseAjaxSuggest"] = true;






$tdataHomicidios_por_rango_etarios__seg_n_sexo[".ajaxCodeSnippetAdded"] = false;

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".buttonsAdded"] = false;

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".addPageEvents"] = false;

// use timepicker for search panel
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".isUseTimeForSearch"] = false;





$tdataHomicidios_por_rango_etarios__seg_n_sexo[".allSearchFields"] = array();
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".filterFields"] = array();
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".requiredSearchFields"] = array();

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".allSearchFields"][] = "muni_he";
		$tdataHomicidios_por_rango_etarios__seg_n_sexo[".requiredSearchFields"][] = "muni_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".allSearchFields"][] = "aÑo_hecho";
		$tdataHomicidios_por_rango_etarios__seg_n_sexo[".requiredSearchFields"][] = "aÑo_hecho";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".allSearchFields"][] = "depart_he";
		$tdataHomicidios_por_rango_etarios__seg_n_sexo[".requiredSearchFields"][] = "depart_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".allSearchFields"][] = "sector_ppd";
		$tdataHomicidios_por_rango_etarios__seg_n_sexo[".requiredSearchFields"][] = "sector_ppd";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".allSearchFields"][] = "edad_victima";
	

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".googleLikeFields"] = array();
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".googleLikeFields"][] = "edad_victima";

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".panelSearchFields"] = array();
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".searchPanelOptions"] = array();
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".panelSearchFields"][] = "muni_he";
	$tdataHomicidios_por_rango_etarios__seg_n_sexo[".panelSearchFields"][] = "aÑo_hecho";
	$tdataHomicidios_por_rango_etarios__seg_n_sexo[".panelSearchFields"][] = "depart_he";
	$tdataHomicidios_por_rango_etarios__seg_n_sexo[".panelSearchFields"][] = "sector_ppd";
	
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".advSearchFields"] = array();
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".advSearchFields"][] = "edad_victima";

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".tableType"] = "report";

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".printerPageOrientation"] = 0;
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".nPrinterPageScale"] = 100;

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".nPrinterSplitRecords"] = 40;

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".nPrinterPDFSplitRecords"] = 40;



$tdataHomicidios_por_rango_etarios__seg_n_sexo[".geocodingEnabled"] = false;

//report settings
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".crossTabReport"] = true;

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".reportGroupFields"] = true;
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".pageSize"] = 5;
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
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".reportGroupFieldsData"] = $reportGroupFields;

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".reportHorizontalSummary"] = true;

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".isExistTotalFields"] = true;

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".reportVerticalSummary"] = true;



$tdataHomicidios_por_rango_etarios__seg_n_sexo[".repShowDet"] = true;

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".reportLayout"] = 6;

//end of report settings




$tdataHomicidios_por_rango_etarios__seg_n_sexo[".listGridLayout"] = 3;

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".strOrderBy"] = $tstrOrderBy;

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".orderindexes"] = array();

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".sqlHead"] = "SELECT ran_eta_vic,  s_victima,  delito,  muni_he,  `aÑo_hecho`,  COUNT(ran_eta_vic) AS `COUNT(ran_eta_vic)`,  depart_he,  sector_ppd,  edad_victima";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".sqlFrom"] = "FROM hechos_delictivos1";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".sqlWhereExpr"] = "delito =\"HOMICIDIO\" OR delito =\"Homicidios\" OR delito =\"HOMICIDIO1\"";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".arrGroupsPerPage"] = $arrGPP;

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".highlightSearchResults"] = true;

$tableKeysHomicidios_por_rango_etarios__seg_n_sexo = array();
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".Keys"] = $tableKeysHomicidios_por_rango_etarios__seg_n_sexo;

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".listFields"] = array();
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".listFields"][] = "ran_eta_vic";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".listFields"][] = "s_victima";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".listFields"][] = "delito";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".listFields"][] = "muni_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".listFields"][] = "aÑo_hecho";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".listFields"][] = "COUNT(ran_eta_vic)";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".listFields"][] = "depart_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".listFields"][] = "sector_ppd";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".listFields"][] = "edad_victima";

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".hideMobileList"] = array();


$tdataHomicidios_por_rango_etarios__seg_n_sexo[".viewFields"] = array();
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".viewFields"][] = "ran_eta_vic";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".viewFields"][] = "s_victima";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".viewFields"][] = "delito";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".viewFields"][] = "muni_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".viewFields"][] = "aÑo_hecho";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".viewFields"][] = "COUNT(ran_eta_vic)";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".viewFields"][] = "depart_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".viewFields"][] = "sector_ppd";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".viewFields"][] = "edad_victima";

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".addFields"] = array();
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".addFields"][] = "ran_eta_vic";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".addFields"][] = "s_victima";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".addFields"][] = "delito";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".addFields"][] = "muni_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".addFields"][] = "aÑo_hecho";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".addFields"][] = "depart_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".addFields"][] = "sector_ppd";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".addFields"][] = "edad_victima";

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".masterListFields"] = array();
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".masterListFields"][] = "ran_eta_vic";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".masterListFields"][] = "s_victima";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".masterListFields"][] = "delito";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".masterListFields"][] = "muni_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".masterListFields"][] = "aÑo_hecho";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".masterListFields"][] = "COUNT(ran_eta_vic)";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".masterListFields"][] = "depart_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".masterListFields"][] = "sector_ppd";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".masterListFields"][] = "edad_victima";

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".inlineAddFields"] = array();
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".inlineAddFields"][] = "ran_eta_vic";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".inlineAddFields"][] = "s_victima";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".inlineAddFields"][] = "delito";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".inlineAddFields"][] = "muni_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".inlineAddFields"][] = "aÑo_hecho";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".inlineAddFields"][] = "depart_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".inlineAddFields"][] = "sector_ppd";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".inlineAddFields"][] = "edad_victima";

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".editFields"] = array();
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".editFields"][] = "ran_eta_vic";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".editFields"][] = "s_victima";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".editFields"][] = "delito";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".editFields"][] = "muni_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".editFields"][] = "aÑo_hecho";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".editFields"][] = "depart_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".editFields"][] = "sector_ppd";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".editFields"][] = "edad_victima";

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".inlineEditFields"] = array();
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".inlineEditFields"][] = "ran_eta_vic";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".inlineEditFields"][] = "s_victima";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".inlineEditFields"][] = "delito";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".inlineEditFields"][] = "muni_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".inlineEditFields"][] = "aÑo_hecho";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".inlineEditFields"][] = "depart_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".inlineEditFields"][] = "sector_ppd";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".inlineEditFields"][] = "edad_victima";

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".updateSelectedFields"] = array();
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".updateSelectedFields"][] = "ran_eta_vic";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".updateSelectedFields"][] = "s_victima";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".updateSelectedFields"][] = "delito";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".updateSelectedFields"][] = "muni_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".updateSelectedFields"][] = "aÑo_hecho";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".updateSelectedFields"][] = "depart_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".updateSelectedFields"][] = "sector_ppd";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".updateSelectedFields"][] = "edad_victima";


$tdataHomicidios_por_rango_etarios__seg_n_sexo[".exportFields"] = array();
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".exportFields"][] = "ran_eta_vic";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".exportFields"][] = "s_victima";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".exportFields"][] = "delito";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".exportFields"][] = "muni_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".exportFields"][] = "aÑo_hecho";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".exportFields"][] = "COUNT(ran_eta_vic)";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".exportFields"][] = "depart_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".exportFields"][] = "sector_ppd";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".exportFields"][] = "edad_victima";

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".importFields"] = array();
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".importFields"][] = "ran_eta_vic";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".importFields"][] = "s_victima";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".importFields"][] = "delito";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".importFields"][] = "muni_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".importFields"][] = "aÑo_hecho";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".importFields"][] = "COUNT(ran_eta_vic)";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".importFields"][] = "depart_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".importFields"][] = "sector_ppd";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".importFields"][] = "edad_victima";

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".printFields"] = array();
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".printFields"][] = "ran_eta_vic";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".printFields"][] = "s_victima";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".printFields"][] = "delito";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".printFields"][] = "muni_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".printFields"][] = "aÑo_hecho";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".printFields"][] = "COUNT(ran_eta_vic)";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".printFields"][] = "depart_he";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".printFields"][] = "sector_ppd";
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".printFields"][] = "edad_victima";

//	ran_eta_vic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ran_eta_vic";
	$fdata["GoodName"] = "ran_eta_vic";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Homicidios_por_rango_etarios__seg_n_sexo","ran_eta_vic");
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








	$tdataHomicidios_por_rango_etarios__seg_n_sexo["ran_eta_vic"] = $fdata;
//	s_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "s_victima";
	$fdata["GoodName"] = "s_victima";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Homicidios_por_rango_etarios__seg_n_sexo","s_victima");
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








	$tdataHomicidios_por_rango_etarios__seg_n_sexo["s_victima"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Homicidios_por_rango_etarios__seg_n_sexo","delito");
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








	$tdataHomicidios_por_rango_etarios__seg_n_sexo["delito"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Homicidios_por_rango_etarios__seg_n_sexo","muni_he");
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




	$tdataHomicidios_por_rango_etarios__seg_n_sexo["muni_he"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Homicidios_por_rango_etarios__seg_n_sexo","a_o_hecho");
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




	$tdataHomicidios_por_rango_etarios__seg_n_sexo["aÑo_hecho"] = $fdata;
//	COUNT(ran_eta_vic)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "COUNT(ran_eta_vic)";
	$fdata["GoodName"] = "COUNT_ran_eta_vic_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Homicidios_por_rango_etarios__seg_n_sexo","COUNT_ran_eta_vic_");
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








	$tdataHomicidios_por_rango_etarios__seg_n_sexo["COUNT(ran_eta_vic)"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Homicidios_por_rango_etarios__seg_n_sexo","depart_he");
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




	$tdataHomicidios_por_rango_etarios__seg_n_sexo["depart_he"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Homicidios_por_rango_etarios__seg_n_sexo","sector_ppd");
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




	$tdataHomicidios_por_rango_etarios__seg_n_sexo["sector_ppd"] = $fdata;
//	edad_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "edad_victima";
	$fdata["GoodName"] = "edad_victima";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Homicidios_por_rango_etarios__seg_n_sexo","edad_victima");
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

		$fdata["strField"] = "edad_victima";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edad_victima";

	
	
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




	$tdataHomicidios_por_rango_etarios__seg_n_sexo["edad_victima"] = $fdata;


$tables_data["Homicidios por rango etarios, según sexo"]=&$tdataHomicidios_por_rango_etarios__seg_n_sexo;
$field_labels["Homicidios_por_rango_etarios__seg_n_sexo"] = &$fieldLabelsHomicidios_por_rango_etarios__seg_n_sexo;
$fieldToolTips["Homicidios_por_rango_etarios__seg_n_sexo"] = &$fieldToolTipsHomicidios_por_rango_etarios__seg_n_sexo;
$placeHolders["Homicidios_por_rango_etarios__seg_n_sexo"] = &$placeHoldersHomicidios_por_rango_etarios__seg_n_sexo;
$page_titles["Homicidios_por_rango_etarios__seg_n_sexo"] = &$pageTitlesHomicidios_por_rango_etarios__seg_n_sexo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Homicidios por rango etarios, según sexo"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Homicidios_por_rango_etarios__seg_n_sexo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ran_eta_vic,  s_victima,  delito,  muni_he,  `aÑo_hecho`,  COUNT(ran_eta_vic) AS `COUNT(ran_eta_vic)`,  depart_he,  sector_ppd,  edad_victima";
$proto0["m_strFrom"] = "FROM hechos_delictivos1";
$proto0["m_strWhere"] = "delito =\"HOMICIDIO\" OR delito =\"Homicidios\" OR delito =\"HOMICIDIO1\"";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "delito =\"HOMICIDIO\" OR delito =\"Homicidios\" OR delito =\"HOMICIDIO1\"";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "delito =\"HOMICIDIO\" OR delito =\"Homicidios\" OR delito =\"HOMICIDIO1\""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "delito =\"HOMICIDIO\"";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios por rango etarios, según sexo"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=\"HOMICIDIO\"";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "delito =\"Homicidios\"";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios por rango etarios, según sexo"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=\"Homicidios\"";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "delito =\"HOMICIDIO1\"";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios por rango etarios, según sexo"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "=\"HOMICIDIO1\"";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ran_eta_vic",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios por rango etarios, según sexo"
));

$proto12["m_sql"] = "ran_eta_vic";
$proto12["m_srcTableName"] = "Homicidios por rango etarios, según sexo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios por rango etarios, según sexo"
));

$proto14["m_sql"] = "s_victima";
$proto14["m_srcTableName"] = "Homicidios por rango etarios, según sexo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios por rango etarios, según sexo"
));

$proto16["m_sql"] = "delito";
$proto16["m_srcTableName"] = "Homicidios por rango etarios, según sexo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios por rango etarios, según sexo"
));

$proto18["m_sql"] = "muni_he";
$proto18["m_srcTableName"] = "Homicidios por rango etarios, según sexo";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios por rango etarios, según sexo"
));

$proto20["m_sql"] = "`aÑo_hecho`";
$proto20["m_srcTableName"] = "Homicidios por rango etarios, según sexo";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$proto23=array();
$proto23["m_functiontype"] = "SQLF_COUNT";
$proto23["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "ran_eta_vic",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios por rango etarios, según sexo"
));

$proto23["m_arguments"][]=$obj;
$proto23["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto23);

$proto22["m_sql"] = "COUNT(ran_eta_vic)";
$proto22["m_srcTableName"] = "Homicidios por rango etarios, según sexo";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "COUNT(ran_eta_vic)";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios por rango etarios, según sexo"
));

$proto25["m_sql"] = "depart_he";
$proto25["m_srcTableName"] = "Homicidios por rango etarios, según sexo";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios por rango etarios, según sexo"
));

$proto27["m_sql"] = "sector_ppd";
$proto27["m_srcTableName"] = "Homicidios por rango etarios, según sexo";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "edad_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios por rango etarios, según sexo"
));

$proto29["m_sql"] = "edad_victima";
$proto29["m_srcTableName"] = "Homicidios por rango etarios, según sexo";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "hechos_delictivos1";
$proto32["m_srcTableName"] = "Homicidios por rango etarios, según sexo";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "id1";
$proto32["m_columns"][] = "id11";
$proto32["m_columns"][] = "correlativo";
$proto32["m_columns"][] = "numero";
$proto32["m_columns"][] = "id";
$proto32["m_columns"][] = "numero2";
$proto32["m_columns"][] = "lugaranalisis";
$proto32["m_columns"][] = "area";
$proto32["m_columns"][] = "delito";
$proto32["m_columns"][] = "codigo_muni";
$proto32["m_columns"][] = "depart_he";
$proto32["m_columns"][] = "muni_he";
$proto32["m_columns"][] = "dire_hecho";
$proto32["m_columns"][] = "lugar_esp";
$proto32["m_columns"][] = "forma_cono";
$proto32["m_columns"][] = "delito_espe";
$proto32["m_columns"][] = "dia_hecho";
$proto32["m_columns"][] = "hora_hecho";
$proto32["m_columns"][] = "rango_hora";
$proto32["m_columns"][] = "fecha_hecho";
$proto32["m_columns"][] = "mes_hecho";
$proto32["m_columns"][] = "aÑo_hecho";
$proto32["m_columns"][] = "edad_victima";
$proto32["m_columns"][] = "ran_eta_vic";
$proto32["m_columns"][] = "s_victima";
$proto32["m_columns"][] = "oc_victima";
$proto32["m_columns"][] = "relacion_vi_agre";
$proto32["m_columns"][] = "edad_agresor";
$proto32["m_columns"][] = "sexo_agresor";
$proto32["m_columns"][] = "ocupa_agresor";
$proto32["m_columns"][] = "movil";
$proto32["m_columns"][] = "tipo_arma";
$proto32["m_columns"][] = "canton_hecho";
$proto32["m_columns"][] = "colonia_hecho";
$proto32["m_columns"][] = "caserio_hecho";
$proto32["m_columns"][] = "calle_hecho";
$proto32["m_columns"][] = "avenida_hecho";
$proto32["m_columns"][] = "casa_hecho";
$proto32["m_columns"][] = "com_hecho";
$proto32["m_columns"][] = "barrio_hecho";
$proto32["m_columns"][] = "comp_hecho";
$proto32["m_columns"][] = "sector_ppd";
$proto32["m_columns"][] = "tipo";
$proto32["m_columns"][] = "nombre";
$proto32["m_columns"][] = "x";
$proto32["m_columns"][] = "y";
$proto32["m_columns"][] = "correlativo1";
$proto32["m_columns"][] = "mes_corre";
$proto32["m_columns"][] = "arma_analisis";
$proto32["m_columns"][] = "movil_he";
$proto32["m_columns"][] = "ocupa_analisis";
$proto32["m_columns"][] = "rel_vic_ag_anali";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "hechos_delictivos1";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "Homicidios por rango etarios, según sexo";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "ran_eta_vic",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios por rango etarios, según sexo"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios por rango etarios, según sexo"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios por rango etarios, según sexo"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios por rango etarios, según sexo"
));

$proto41["m_column"]=$obj;
$obj = new SQLGroupByItem($proto41);

$proto0["m_groupby"][]=$obj;
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios por rango etarios, según sexo"
));

$proto43["m_column"]=$obj;
$obj = new SQLGroupByItem($proto43);

$proto0["m_groupby"][]=$obj;
												$proto45=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios por rango etarios, según sexo"
));

$proto45["m_column"]=$obj;
$obj = new SQLGroupByItem($proto45);

$proto0["m_groupby"][]=$obj;
												$proto47=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios por rango etarios, según sexo"
));

$proto47["m_column"]=$obj;
$obj = new SQLGroupByItem($proto47);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Homicidios por rango etarios, según sexo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Homicidios_por_rango_etarios__seg_n_sexo = createSqlQuery_Homicidios_por_rango_etarios__seg_n_sexo();


	
		;

									

$tdataHomicidios_por_rango_etarios__seg_n_sexo[".sqlquery"] = $queryData_Homicidios_por_rango_etarios__seg_n_sexo;

$tableEvents["Homicidios por rango etarios, según sexo"] = new eventsBase;
$tdataHomicidios_por_rango_etarios__seg_n_sexo[".hasEvents"] = false;

?>