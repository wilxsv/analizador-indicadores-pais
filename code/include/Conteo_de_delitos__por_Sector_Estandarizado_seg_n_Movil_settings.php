<?php
require_once(getabspath("classes/cipherer.php"));




$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil = array();
	$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".truncateText"] = true;
	$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".NumberOfChars"] = 80;
	$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".ShortName"] = "Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil";
	$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".OwnerID"] = "";
	$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil = array();
$fieldToolTipsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil = array();
$pageTitlesConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil = array();
$placeHoldersConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"] = array();
	$fieldToolTipsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"] = array();
	$placeHoldersConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"] = array();
	$pageTitlesConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"] = array();
	$fieldLabelsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"]["muni_he"] = "Municipio Hecho";
	$fieldToolTipsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"]["muni_he"] = "";
	$placeHoldersConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"]["muni_he"] = "";
	$fieldLabelsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"]["a_o_hecho"] = "";
	$placeHoldersConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"]["a_o_hecho"] = "";
	$fieldLabelsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"]["movil"] = "Movil";
	$fieldToolTipsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"]["movil"] = "";
	$placeHoldersConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"]["movil"] = "";
	$fieldLabelsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"]["sector_ppd"] = "";
	$placeHoldersConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"]["sector_ppd"] = "";
	$fieldLabelsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"]["COUNT_movil_"] = "COUNT(movil)";
	$fieldToolTipsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"]["COUNT_movil_"] = "";
	$placeHoldersConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"]["COUNT_movil_"] = "";
	$fieldLabelsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"]["depart_he"] = "Departamento";
	$fieldToolTipsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"]["depart_he"] = "";
	$placeHoldersConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"]["depart_he"] = "";
	if (count($fieldToolTipsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["Spanish"]))
		$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"] = array();
	$fieldToolTipsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"] = array();
	$placeHoldersConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"] = array();
	$pageTitlesConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"] = array();
	$fieldLabelsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"]["muni_he"] = "Municipio Hecho";
	$fieldToolTipsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"]["muni_he"] = "";
	$placeHoldersConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"]["muni_he"] = "";
	$fieldLabelsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"]["a_o_hecho"] = "";
	$placeHoldersConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"]["a_o_hecho"] = "";
	$fieldLabelsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"]["movil"] = "Movil";
	$fieldToolTipsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"]["movil"] = "";
	$placeHoldersConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"]["movil"] = "";
	$fieldLabelsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"]["sector_ppd"] = "";
	$placeHoldersConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"]["sector_ppd"] = "";
	$fieldLabelsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"]["COUNT_movil_"] = "COUNT(movil)";
	$fieldToolTipsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"]["COUNT_movil_"] = "";
	$placeHoldersConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"]["COUNT_movil_"] = "";
	$fieldLabelsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"]["depart_he"] = "Departamento";
	$fieldToolTipsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"]["depart_he"] = "";
	$placeHoldersConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"]["depart_he"] = "";
	if (count($fieldToolTipsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["English"]))
		$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[""] = array();
	$fieldToolTipsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[""] = array();
	$placeHoldersConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[""] = array();
	$pageTitlesConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[""] = array();
	if (count($fieldToolTipsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[""]))
		$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".isUseToolTips"] = true;
}





$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".shortTableName"] = "Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".nSecOptions"] = 0;
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".recsPerRowPrint"] = 1;
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".mainTableOwnerID"] = "";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".moveNext"] = 1;
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".entityType"] = 2;

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".strOriginalTableName"] = "hechosdelictivos";

	



$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".showAddInPopup"] = false;

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".showEditInPopup"] = false;

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".fieldsForRegister"] = array();

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".listAjax"] = false;

	$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".audit"] = false;

	$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".locking"] = false;


$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".add"] = true;
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".afterAddAction"] = 1;
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".closePopupAfterAdd"] = 1;
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".afterAddActionDetTable"] = "";

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".list"] = true;



$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".reorderRecordsByHeader"] = true;



$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".inlineAdd"] = true;


$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".exportTo"] = true;

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".printFriendly"] = true;


$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".searchSaving"] = false;
//

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".showSearchPanel"] = true;
		$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".flexibleSearch"] = true;

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".isUseAjaxSuggest"] = true;






$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".ajaxCodeSnippetAdded"] = false;

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".buttonsAdded"] = false;

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".addPageEvents"] = false;

// use timepicker for search panel
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".isUseTimeForSearch"] = false;





$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".allSearchFields"] = array();
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".filterFields"] = array();
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".requiredSearchFields"] = array();

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".allSearchFields"][] = "sector_ppd";
		$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".requiredSearchFields"][] = "sector_ppd";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".allSearchFields"][] = "aÑo_hecho";
		$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".requiredSearchFields"][] = "aÑo_hecho";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".allSearchFields"][] = "muni_he";
		$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".requiredSearchFields"][] = "muni_he";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".allSearchFields"][] = "depart_he";
		$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".requiredSearchFields"][] = "depart_he";


$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".googleLikeFields"] = array();
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".googleLikeFields"][] = "sector_ppd";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".googleLikeFields"][] = "aÑo_hecho";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".googleLikeFields"][] = "muni_he";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".googleLikeFields"][] = "depart_he";

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".panelSearchFields"] = array();
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".searchPanelOptions"] = array();
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".panelSearchFields"][] = "sector_ppd";
	$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".panelSearchFields"][] = "aÑo_hecho";
	$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".panelSearchFields"][] = "muni_he";
	$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".panelSearchFields"][] = "depart_he";
	
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".advSearchFields"] = array();
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".advSearchFields"][] = "sector_ppd";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".advSearchFields"][] = "aÑo_hecho";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".advSearchFields"][] = "muni_he";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".advSearchFields"][] = "depart_he";

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".tableType"] = "report";

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".printerPageOrientation"] = 0;
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".nPrinterPageScale"] = 100;

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".nPrinterSplitRecords"] = 40;

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".nPrinterPDFSplitRecords"] = 40;



$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".geocodingEnabled"] = false;

//report settings
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".crossTabReport"] = true;

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".reportGroupFields"] = true;
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "movil";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "sector_ppd";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".reportGroupFieldsData"] = $reportGroupFields;

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".reportHorizontalSummary"] = true;

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".isExistTotalFields"] = true;

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".reportVerticalSummary"] = true;



$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".repShowDet"] = true;

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".reportLayout"] = 6;

//end of report settings




$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".listGridLayout"] = 3;

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY sector_ppd DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".strOrderBy"] = $tstrOrderBy;

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".orderindexes"] = array();
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "sector_ppd");

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".sqlHead"] = "SELECT sector_ppd,  movil,  COUNT(movil) AS `COUNT(movil)`,  `aÑo_hecho`,  muni_he,  depart_he";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".sqlFrom"] = "FROM hechos_delictivos1";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".sqlWhereExpr"] = "";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".arrGroupsPerPage"] = $arrGPP;

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".highlightSearchResults"] = true;

$tableKeysConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil = array();
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".Keys"] = $tableKeysConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil;

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".listFields"] = array();
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".listFields"][] = "sector_ppd";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".listFields"][] = "movil";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".listFields"][] = "COUNT(movil)";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".listFields"][] = "aÑo_hecho";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".listFields"][] = "muni_he";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".listFields"][] = "depart_he";

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".hideMobileList"] = array();


$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".viewFields"] = array();
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".viewFields"][] = "sector_ppd";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".viewFields"][] = "movil";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".viewFields"][] = "COUNT(movil)";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".viewFields"][] = "aÑo_hecho";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".viewFields"][] = "muni_he";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".viewFields"][] = "depart_he";

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".addFields"] = array();
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".addFields"][] = "sector_ppd";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".addFields"][] = "movil";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".addFields"][] = "aÑo_hecho";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".addFields"][] = "muni_he";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".addFields"][] = "depart_he";

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".masterListFields"] = array();
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".masterListFields"][] = "sector_ppd";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".masterListFields"][] = "movil";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".masterListFields"][] = "COUNT(movil)";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".masterListFields"][] = "aÑo_hecho";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".masterListFields"][] = "muni_he";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".masterListFields"][] = "depart_he";

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".inlineAddFields"] = array();
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".inlineAddFields"][] = "sector_ppd";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".inlineAddFields"][] = "movil";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".inlineAddFields"][] = "aÑo_hecho";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".inlineAddFields"][] = "muni_he";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".inlineAddFields"][] = "depart_he";

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".editFields"] = array();
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".editFields"][] = "sector_ppd";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".editFields"][] = "movil";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".editFields"][] = "aÑo_hecho";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".editFields"][] = "muni_he";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".editFields"][] = "depart_he";

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".inlineEditFields"] = array();
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".inlineEditFields"][] = "sector_ppd";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".inlineEditFields"][] = "movil";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".inlineEditFields"][] = "aÑo_hecho";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".inlineEditFields"][] = "muni_he";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".inlineEditFields"][] = "depart_he";

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".updateSelectedFields"] = array();
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".updateSelectedFields"][] = "sector_ppd";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".updateSelectedFields"][] = "movil";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".updateSelectedFields"][] = "aÑo_hecho";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".updateSelectedFields"][] = "muni_he";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".updateSelectedFields"][] = "depart_he";


$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".exportFields"] = array();
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".exportFields"][] = "sector_ppd";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".exportFields"][] = "movil";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".exportFields"][] = "COUNT(movil)";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".exportFields"][] = "aÑo_hecho";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".exportFields"][] = "muni_he";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".exportFields"][] = "depart_he";

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".importFields"] = array();
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".importFields"][] = "sector_ppd";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".importFields"][] = "movil";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".importFields"][] = "COUNT(movil)";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".importFields"][] = "aÑo_hecho";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".importFields"][] = "muni_he";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".importFields"][] = "depart_he";

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".printFields"] = array();
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".printFields"][] = "sector_ppd";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".printFields"][] = "movil";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".printFields"][] = "COUNT(movil)";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".printFields"][] = "aÑo_hecho";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".printFields"][] = "muni_he";
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".printFields"][] = "depart_he";

//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil","sector_ppd");
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




	$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["sector_ppd"] = $fdata;
//	movil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "movil";
	$fdata["GoodName"] = "movil";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil","movil");
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

		$fdata["strField"] = "movil";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "movil";

	
	
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








	$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["movil"] = $fdata;
//	COUNT(movil)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "COUNT(movil)";
	$fdata["GoodName"] = "COUNT_movil_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil","COUNT_movil_");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(movil)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(movil)";

	
	
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








	$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["COUNT(movil)"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil","a_o_hecho");
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




	$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["aÑo_hecho"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil","muni_he");
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




	$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["muni_he"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil","depart_he");
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




	$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil["depart_he"] = $fdata;


$tables_data["Conteo de delitos, por Sector Estandarizado según Movil"]=&$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil;
$field_labels["Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil"] = &$fieldLabelsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil;
$fieldToolTips["Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil"] = &$fieldToolTipsConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil;
$placeHolders["Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil"] = &$placeHoldersConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil;
$page_titles["Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil"] = &$pageTitlesConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Conteo de delitos, por Sector Estandarizado según Movil"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sector_ppd,  movil,  COUNT(movil) AS `COUNT(movil)`,  `aÑo_hecho`,  muni_he,  depart_he";
$proto0["m_strFrom"] = "FROM hechos_delictivos1";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY sector_ppd DESC";
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
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Conteo de delitos, por Sector Estandarizado según Movil"
));

$proto6["m_sql"] = "sector_ppd";
$proto6["m_srcTableName"] = "Conteo de delitos, por Sector Estandarizado según Movil";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "movil",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Conteo de delitos, por Sector Estandarizado según Movil"
));

$proto8["m_sql"] = "movil";
$proto8["m_srcTableName"] = "Conteo de delitos, por Sector Estandarizado según Movil";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_COUNT";
$proto11["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "movil",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Conteo de delitos, por Sector Estandarizado según Movil"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "COUNT(movil)";
$proto10["m_srcTableName"] = "Conteo de delitos, por Sector Estandarizado según Movil";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "COUNT(movil)";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Conteo de delitos, por Sector Estandarizado según Movil"
));

$proto13["m_sql"] = "`aÑo_hecho`";
$proto13["m_srcTableName"] = "Conteo de delitos, por Sector Estandarizado según Movil";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Conteo de delitos, por Sector Estandarizado según Movil"
));

$proto15["m_sql"] = "muni_he";
$proto15["m_srcTableName"] = "Conteo de delitos, por Sector Estandarizado según Movil";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Conteo de delitos, por Sector Estandarizado según Movil"
));

$proto17["m_sql"] = "depart_he";
$proto17["m_srcTableName"] = "Conteo de delitos, por Sector Estandarizado según Movil";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "hechos_delictivos1";
$proto20["m_srcTableName"] = "Conteo de delitos, por Sector Estandarizado según Movil";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id1";
$proto20["m_columns"][] = "id11";
$proto20["m_columns"][] = "correlativo";
$proto20["m_columns"][] = "numero";
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "numero2";
$proto20["m_columns"][] = "lugaranalisis";
$proto20["m_columns"][] = "area";
$proto20["m_columns"][] = "delito";
$proto20["m_columns"][] = "codigo_muni";
$proto20["m_columns"][] = "depart_he";
$proto20["m_columns"][] = "muni_he";
$proto20["m_columns"][] = "dire_hecho";
$proto20["m_columns"][] = "lugar_esp";
$proto20["m_columns"][] = "forma_cono";
$proto20["m_columns"][] = "delito_espe";
$proto20["m_columns"][] = "dia_hecho";
$proto20["m_columns"][] = "hora_hecho";
$proto20["m_columns"][] = "rango_hora";
$proto20["m_columns"][] = "fecha_hecho";
$proto20["m_columns"][] = "mes_hecho";
$proto20["m_columns"][] = "aÑo_hecho";
$proto20["m_columns"][] = "edad_victima";
$proto20["m_columns"][] = "ran_eta_vic";
$proto20["m_columns"][] = "s_victima";
$proto20["m_columns"][] = "oc_victima";
$proto20["m_columns"][] = "relacion_vi_agre";
$proto20["m_columns"][] = "edad_agresor";
$proto20["m_columns"][] = "sexo_agresor";
$proto20["m_columns"][] = "ocupa_agresor";
$proto20["m_columns"][] = "movil";
$proto20["m_columns"][] = "tipo_arma";
$proto20["m_columns"][] = "canton_hecho";
$proto20["m_columns"][] = "colonia_hecho";
$proto20["m_columns"][] = "caserio_hecho";
$proto20["m_columns"][] = "calle_hecho";
$proto20["m_columns"][] = "avenida_hecho";
$proto20["m_columns"][] = "casa_hecho";
$proto20["m_columns"][] = "com_hecho";
$proto20["m_columns"][] = "barrio_hecho";
$proto20["m_columns"][] = "comp_hecho";
$proto20["m_columns"][] = "sector_ppd";
$proto20["m_columns"][] = "tipo";
$proto20["m_columns"][] = "nombre";
$proto20["m_columns"][] = "x";
$proto20["m_columns"][] = "y";
$proto20["m_columns"][] = "correlativo1";
$proto20["m_columns"][] = "mes_corre";
$proto20["m_columns"][] = "arma_analisis";
$proto20["m_columns"][] = "movil_he";
$proto20["m_columns"][] = "ocupa_analisis";
$proto20["m_columns"][] = "rel_vic_ag_anali";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "hechos_delictivos1";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "Conteo de delitos, por Sector Estandarizado según Movil";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Conteo de delitos, por Sector Estandarizado según Movil"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "movil",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Conteo de delitos, por Sector Estandarizado según Movil"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Conteo de delitos, por Sector Estandarizado según Movil"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Conteo de delitos, por Sector Estandarizado según Movil"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Conteo de delitos, por Sector Estandarizado según Movil"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Conteo de delitos, por Sector Estandarizado según Movil"
));

$proto33["m_column"]=$obj;
$proto33["m_bAsc"] = 0;
$proto33["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto33);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Conteo de delitos, por Sector Estandarizado según Movil";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil = createSqlQuery_Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil();


	
		;

						

$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".sqlquery"] = $queryData_Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil;

$tableEvents["Conteo de delitos, por Sector Estandarizado según Movil"] = new eventsBase;
$tdataConteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil[".hasEvents"] = false;

?>