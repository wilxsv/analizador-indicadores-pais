<?php
require_once(getabspath("classes/cipherer.php"));




$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima = array();
	$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".truncateText"] = true;
	$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".NumberOfChars"] = 80;
	$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".ShortName"] = "Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima";
	$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".OwnerID"] = "";
	$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima = array();
$fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima = array();
$pageTitlesHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima = array();
$placeHoldersHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"] = array();
	$fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"] = array();
	$placeHoldersHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"] = array();
	$pageTitlesHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"] = array();
	$fieldLabelsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["muni_he"] = "";
	$placeHoldersHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["muni_he"] = "";
	$fieldLabelsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["delito"] = "Delito";
	$fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["delito"] = "";
	$placeHoldersHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["delito"] = "";
	$fieldLabelsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["a_o_hecho"] = "";
	$placeHoldersHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["a_o_hecho"] = "";
	$fieldLabelsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["ran_eta_vic"] = "";
	$placeHoldersHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["ran_eta_vic"] = "";
	$fieldLabelsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["s_victima"] = "S Victima";
	$fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["s_victima"] = "";
	$placeHoldersHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["s_victima"] = "";
	$fieldLabelsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["depart_he"] = "";
	$placeHoldersHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["depart_he"] = "";
	$fieldLabelsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["sector_ppd"] = "";
	$placeHoldersHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["sector_ppd"] = "";
	$fieldLabelsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["COUNT_ran_eta_vic_"] = "COUNT(ran Eta Vic)";
	$fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["COUNT_ran_eta_vic_"] = "";
	$placeHoldersHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]["COUNT_ran_eta_vic_"] = "";
	if (count($fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["Spanish"]))
		$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"] = array();
	$fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"] = array();
	$placeHoldersHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"] = array();
	$pageTitlesHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"] = array();
	$fieldLabelsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["muni_he"] = "Muni He";
	$fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["muni_he"] = "";
	$placeHoldersHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["muni_he"] = "";
	$fieldLabelsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["delito"] = "Delito";
	$fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["delito"] = "";
	$placeHoldersHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["delito"] = "";
	$fieldLabelsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["a_o_hecho"] = "";
	$placeHoldersHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["a_o_hecho"] = "";
	$fieldLabelsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["ran_eta_vic"] = "";
	$placeHoldersHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["ran_eta_vic"] = "";
	$fieldLabelsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["s_victima"] = "S Victima";
	$fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["s_victima"] = "";
	$placeHoldersHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["s_victima"] = "";
	$fieldLabelsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["depart_he"] = "Depart He";
	$fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["depart_he"] = "";
	$placeHoldersHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["depart_he"] = "";
	$fieldLabelsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["sector_ppd"] = "";
	$placeHoldersHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["sector_ppd"] = "";
	$fieldLabelsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["COUNT_ran_eta_vic_"] = "COUNT(ran Eta Vic)";
	$fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["COUNT_ran_eta_vic_"] = "";
	$placeHoldersHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]["COUNT_ran_eta_vic_"] = "";
	if (count($fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["English"]))
		$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[""] = array();
	$fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[""] = array();
	$placeHoldersHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[""] = array();
	$pageTitlesHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[""] = array();
	if (count($fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[""]))
		$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".isUseToolTips"] = true;
}





$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".shortTableName"] = "Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".nSecOptions"] = 0;
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".recsPerRowPrint"] = 1;
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".mainTableOwnerID"] = "";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".moveNext"] = 1;
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".entityType"] = 2;

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".strOriginalTableName"] = "hechosdelictivos";

	



$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".showAddInPopup"] = false;

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".showEditInPopup"] = false;

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".fieldsForRegister"] = array();

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".listAjax"] = false;

	$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".audit"] = false;

	$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".locking"] = false;


$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".add"] = true;
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".afterAddAction"] = 1;
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".closePopupAfterAdd"] = 1;
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".afterAddActionDetTable"] = "";

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".list"] = true;



$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".reorderRecordsByHeader"] = true;



$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".inlineAdd"] = true;


$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".exportTo"] = true;

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".printFriendly"] = true;


$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".searchSaving"] = false;
//

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".showSearchPanel"] = true;
		$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".flexibleSearch"] = true;

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".isUseAjaxSuggest"] = true;






$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".ajaxCodeSnippetAdded"] = false;

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".buttonsAdded"] = false;

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".addPageEvents"] = false;

// use timepicker for search panel
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".isUseTimeForSearch"] = false;





$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".allSearchFields"] = array();
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".filterFields"] = array();
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".requiredSearchFields"] = array();

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".allSearchFields"][] = "muni_he";
		$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".requiredSearchFields"][] = "muni_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".allSearchFields"][] = "aÑo_hecho";
		$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".requiredSearchFields"][] = "aÑo_hecho";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".allSearchFields"][] = "depart_he";
		$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".requiredSearchFields"][] = "depart_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".allSearchFields"][] = "sector_ppd";
		$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".requiredSearchFields"][] = "sector_ppd";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".allSearchFields"][] = "COUNT(ran_eta_vic)";
	

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".googleLikeFields"] = array();
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".googleLikeFields"][] = "COUNT(ran_eta_vic)";

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".panelSearchFields"] = array();
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".searchPanelOptions"] = array();
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".panelSearchFields"][] = "muni_he";
	$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".panelSearchFields"][] = "aÑo_hecho";
	$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".panelSearchFields"][] = "depart_he";
	$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".panelSearchFields"][] = "sector_ppd";
	
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".advSearchFields"] = array();
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".advSearchFields"][] = "COUNT(ran_eta_vic)";

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".tableType"] = "report";

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".printerPageOrientation"] = 0;
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".nPrinterPageScale"] = 100;

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".nPrinterSplitRecords"] = 40;

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".nPrinterPDFSplitRecords"] = 40;



$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".geocodingEnabled"] = false;

//report settings
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".crossTabReport"] = true;

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".reportGroupFields"] = true;
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".pageSize"] = 5;
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
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".reportGroupFieldsData"] = $reportGroupFields;

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".reportHorizontalSummary"] = true;

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".isExistTotalFields"] = true;

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".reportVerticalSummary"] = true;



$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".repShowDet"] = true;

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".reportLayout"] = 6;

//end of report settings




$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".listGridLayout"] = 3;

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".strOrderBy"] = $tstrOrderBy;

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".orderindexes"] = array();

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".sqlHead"] = "SELECT ran_eta_vic,  s_victima,  delito,  muni_he,  `aÑo_hecho`,  depart_he,  sector_ppd,  COUNT(ran_eta_vic) AS `COUNT(ran_eta_vic)`";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".sqlFrom"] = "FROM hechos_delictivos1";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".sqlWhereExpr"] = "delito =\"HOMICIDIO TENTADO\" OR delito =\"homicidio tentado\"";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".arrGroupsPerPage"] = $arrGPP;

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".highlightSearchResults"] = true;

$tableKeysHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima = array();
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".Keys"] = $tableKeysHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima;

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".listFields"] = array();
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "ran_eta_vic";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "s_victima";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "delito";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "muni_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "aÑo_hecho";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "depart_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "sector_ppd";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".listFields"][] = "COUNT(ran_eta_vic)";

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".hideMobileList"] = array();


$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".viewFields"] = array();
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "ran_eta_vic";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "s_victima";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "delito";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "muni_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "aÑo_hecho";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "depart_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "sector_ppd";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".viewFields"][] = "COUNT(ran_eta_vic)";

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".addFields"] = array();
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".addFields"][] = "ran_eta_vic";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".addFields"][] = "s_victima";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".addFields"][] = "delito";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".addFields"][] = "muni_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".addFields"][] = "aÑo_hecho";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".addFields"][] = "depart_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".addFields"][] = "sector_ppd";

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".masterListFields"] = array();
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "ran_eta_vic";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "s_victima";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "delito";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "muni_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "aÑo_hecho";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "depart_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "sector_ppd";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".masterListFields"][] = "COUNT(ran_eta_vic)";

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"] = array();
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "ran_eta_vic";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "s_victima";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "delito";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "muni_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "aÑo_hecho";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "depart_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".inlineAddFields"][] = "sector_ppd";

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".editFields"] = array();
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".editFields"][] = "ran_eta_vic";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".editFields"][] = "s_victima";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".editFields"][] = "delito";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".editFields"][] = "muni_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".editFields"][] = "aÑo_hecho";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".editFields"][] = "depart_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".editFields"][] = "sector_ppd";

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"] = array();
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "ran_eta_vic";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "s_victima";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "delito";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "muni_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "aÑo_hecho";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "depart_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".inlineEditFields"][] = "sector_ppd";

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"] = array();
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "ran_eta_vic";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "s_victima";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "delito";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "muni_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "aÑo_hecho";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "depart_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".updateSelectedFields"][] = "sector_ppd";


$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".exportFields"] = array();
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "ran_eta_vic";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "s_victima";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "delito";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "muni_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "aÑo_hecho";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "depart_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "sector_ppd";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".exportFields"][] = "COUNT(ran_eta_vic)";

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".importFields"] = array();
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "ran_eta_vic";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "s_victima";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "delito";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "muni_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "aÑo_hecho";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "depart_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "sector_ppd";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".importFields"][] = "COUNT(ran_eta_vic)";

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".printFields"] = array();
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "ran_eta_vic";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "s_victima";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "delito";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "muni_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "aÑo_hecho";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "depart_he";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "sector_ppd";
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".printFields"][] = "COUNT(ran_eta_vic)";

//	ran_eta_vic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ran_eta_vic";
	$fdata["GoodName"] = "ran_eta_vic";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima","ran_eta_vic");
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








	$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["ran_eta_vic"] = $fdata;
//	s_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "s_victima";
	$fdata["GoodName"] = "s_victima";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima","s_victima");
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








	$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["s_victima"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima","delito");
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








	$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["delito"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima","muni_he");
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




	$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["muni_he"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima","a_o_hecho");
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




	$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["aÑo_hecho"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima","depart_he");
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




	$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["depart_he"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima","sector_ppd");
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




	$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["sector_ppd"] = $fdata;
//	COUNT(ran_eta_vic)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "COUNT(ran_eta_vic)";
	$fdata["GoodName"] = "COUNT_ran_eta_vic_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima","COUNT_ran_eta_vic_");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima["COUNT(ran_eta_vic)"] = $fdata;


$tables_data["Homicidios tentados por rango etarios, según sexo victima"]=&$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima;
$field_labels["Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima"] = &$fieldLabelsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima;
$fieldToolTips["Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima"] = &$fieldToolTipsHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima;
$placeHolders["Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima"] = &$placeHoldersHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima;
$page_titles["Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima"] = &$pageTitlesHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Homicidios tentados por rango etarios, según sexo victima"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ran_eta_vic,  s_victima,  delito,  muni_he,  `aÑo_hecho`,  depart_he,  sector_ppd,  COUNT(ran_eta_vic) AS `COUNT(ran_eta_vic)`";
$proto0["m_strFrom"] = "FROM hechos_delictivos1";
$proto0["m_strWhere"] = "delito =\"HOMICIDIO TENTADO\" OR delito =\"homicidio tentado\"";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "delito =\"HOMICIDIO TENTADO\" OR delito =\"homicidio tentado\"";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "delito =\"HOMICIDIO TENTADO\" OR delito =\"homicidio tentado\""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "delito =\"HOMICIDIO TENTADO\"";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios tentados por rango etarios, según sexo victima"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=\"HOMICIDIO TENTADO\"";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "delito =\"homicidio tentado\"";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios tentados por rango etarios, según sexo victima"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=\"homicidio tentado\"";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ran_eta_vic",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios tentados por rango etarios, según sexo victima"
));

$proto10["m_sql"] = "ran_eta_vic";
$proto10["m_srcTableName"] = "Homicidios tentados por rango etarios, según sexo victima";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios tentados por rango etarios, según sexo victima"
));

$proto12["m_sql"] = "s_victima";
$proto12["m_srcTableName"] = "Homicidios tentados por rango etarios, según sexo victima";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios tentados por rango etarios, según sexo victima"
));

$proto14["m_sql"] = "delito";
$proto14["m_srcTableName"] = "Homicidios tentados por rango etarios, según sexo victima";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios tentados por rango etarios, según sexo victima"
));

$proto16["m_sql"] = "muni_he";
$proto16["m_srcTableName"] = "Homicidios tentados por rango etarios, según sexo victima";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios tentados por rango etarios, según sexo victima"
));

$proto18["m_sql"] = "`aÑo_hecho`";
$proto18["m_srcTableName"] = "Homicidios tentados por rango etarios, según sexo victima";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios tentados por rango etarios, según sexo victima"
));

$proto20["m_sql"] = "depart_he";
$proto20["m_srcTableName"] = "Homicidios tentados por rango etarios, según sexo victima";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios tentados por rango etarios, según sexo victima"
));

$proto22["m_sql"] = "sector_ppd";
$proto22["m_srcTableName"] = "Homicidios tentados por rango etarios, según sexo victima";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$proto25=array();
$proto25["m_functiontype"] = "SQLF_COUNT";
$proto25["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "ran_eta_vic",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios tentados por rango etarios, según sexo victima"
));

$proto25["m_arguments"][]=$obj;
$proto25["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto25);

$proto24["m_sql"] = "COUNT(ran_eta_vic)";
$proto24["m_srcTableName"] = "Homicidios tentados por rango etarios, según sexo victima";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "COUNT(ran_eta_vic)";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "hechos_delictivos1";
$proto28["m_srcTableName"] = "Homicidios tentados por rango etarios, según sexo victima";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "id1";
$proto28["m_columns"][] = "id11";
$proto28["m_columns"][] = "correlativo";
$proto28["m_columns"][] = "numero";
$proto28["m_columns"][] = "id";
$proto28["m_columns"][] = "numero2";
$proto28["m_columns"][] = "lugaranalisis";
$proto28["m_columns"][] = "area";
$proto28["m_columns"][] = "delito";
$proto28["m_columns"][] = "codigo_muni";
$proto28["m_columns"][] = "depart_he";
$proto28["m_columns"][] = "muni_he";
$proto28["m_columns"][] = "dire_hecho";
$proto28["m_columns"][] = "lugar_esp";
$proto28["m_columns"][] = "forma_cono";
$proto28["m_columns"][] = "delito_espe";
$proto28["m_columns"][] = "dia_hecho";
$proto28["m_columns"][] = "hora_hecho";
$proto28["m_columns"][] = "rango_hora";
$proto28["m_columns"][] = "fecha_hecho";
$proto28["m_columns"][] = "mes_hecho";
$proto28["m_columns"][] = "aÑo_hecho";
$proto28["m_columns"][] = "edad_victima";
$proto28["m_columns"][] = "ran_eta_vic";
$proto28["m_columns"][] = "s_victima";
$proto28["m_columns"][] = "oc_victima";
$proto28["m_columns"][] = "relacion_vi_agre";
$proto28["m_columns"][] = "edad_agresor";
$proto28["m_columns"][] = "sexo_agresor";
$proto28["m_columns"][] = "ocupa_agresor";
$proto28["m_columns"][] = "movil";
$proto28["m_columns"][] = "tipo_arma";
$proto28["m_columns"][] = "canton_hecho";
$proto28["m_columns"][] = "colonia_hecho";
$proto28["m_columns"][] = "caserio_hecho";
$proto28["m_columns"][] = "calle_hecho";
$proto28["m_columns"][] = "avenida_hecho";
$proto28["m_columns"][] = "casa_hecho";
$proto28["m_columns"][] = "com_hecho";
$proto28["m_columns"][] = "barrio_hecho";
$proto28["m_columns"][] = "comp_hecho";
$proto28["m_columns"][] = "sector_ppd";
$proto28["m_columns"][] = "tipo";
$proto28["m_columns"][] = "nombre";
$proto28["m_columns"][] = "x";
$proto28["m_columns"][] = "y";
$proto28["m_columns"][] = "correlativo1";
$proto28["m_columns"][] = "mes_corre";
$proto28["m_columns"][] = "arma_analisis";
$proto28["m_columns"][] = "movil_he";
$proto28["m_columns"][] = "ocupa_analisis";
$proto28["m_columns"][] = "rel_vic_ag_anali";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "hechos_delictivos1";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "Homicidios tentados por rango etarios, según sexo victima";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "ran_eta_vic",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios tentados por rango etarios, según sexo victima"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios tentados por rango etarios, según sexo victima"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios tentados por rango etarios, según sexo victima"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios tentados por rango etarios, según sexo victima"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios tentados por rango etarios, según sexo victima"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios tentados por rango etarios, según sexo victima"
));

$proto41["m_column"]=$obj;
$obj = new SQLGroupByItem($proto41);

$proto0["m_groupby"][]=$obj;
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Homicidios tentados por rango etarios, según sexo victima"
));

$proto43["m_column"]=$obj;
$obj = new SQLGroupByItem($proto43);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Homicidios tentados por rango etarios, según sexo victima";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima = createSqlQuery_Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima();


	
		;

								

$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".sqlquery"] = $queryData_Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima;

$tableEvents["Homicidios tentados por rango etarios, según sexo victima"] = new eventsBase;
$tdataHomicidios_tentados_por_rango_etarios__seg_n_sexo_victima[".hasEvents"] = false;

?>