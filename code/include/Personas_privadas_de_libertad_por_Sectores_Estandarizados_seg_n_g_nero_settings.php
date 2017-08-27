<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero = array();
	$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".truncateText"] = true;
	$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".NumberOfChars"] = 80;
	$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".ShortName"] = "Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero";
	$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".OwnerID"] = "";
	$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".OriginalTable"] = "dgcp";

//	field labels
$fieldLabelsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero = array();
$fieldToolTipsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero = array();
$pageTitlesPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero = array();
$placeHoldersPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["Spanish"] = array();
	$fieldToolTipsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["Spanish"] = array();
	$placeHoldersPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["Spanish"] = array();
	$pageTitlesPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["Spanish"] = array();
	$fieldLabelsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["Spanish"]["genero"] = "Genero";
	$fieldToolTipsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["Spanish"]["genero"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["Spanish"]["genero"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["Spanish"]["mun_resid"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["Spanish"]["mun_resid"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["Spanish"]["sector_ppd"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["Spanish"]["sector_ppd"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["Spanish"]["COUNT_genero_"] = "COUNT(genero)";
	$fieldToolTipsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["Spanish"]["COUNT_genero_"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["Spanish"]["COUNT_genero_"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["Spanish"]["depart_resid"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["Spanish"]["depart_resid"] = "";
	if (count($fieldToolTipsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["Spanish"]))
		$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["English"] = array();
	$fieldToolTipsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["English"] = array();
	$placeHoldersPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["English"] = array();
	$pageTitlesPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["English"] = array();
	$fieldLabelsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["English"]["genero"] = "Genero";
	$fieldToolTipsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["English"]["genero"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["English"]["genero"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["English"]["mun_resid"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["English"]["mun_resid"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["English"]["sector_ppd"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["English"]["sector_ppd"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["English"]["COUNT_genero_"] = "COUNT(genero)";
	$fieldToolTipsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["English"]["COUNT_genero_"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["English"]["COUNT_genero_"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["English"]["depart_resid"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["English"]["depart_resid"] = "";
	if (count($fieldToolTipsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["English"]))
		$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[""] = array();
	$fieldToolTipsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[""] = array();
	$placeHoldersPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[""] = array();
	$pageTitlesPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[""] = array();
	if (count($fieldToolTipsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[""]))
		$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".isUseToolTips"] = true;
}





$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".shortTableName"] = "Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".nSecOptions"] = 0;
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".recsPerRowPrint"] = 1;
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".mainTableOwnerID"] = "";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".moveNext"] = 1;
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".entityType"] = 2;

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".strOriginalTableName"] = "dgcp";

	



$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".showAddInPopup"] = false;

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".showEditInPopup"] = false;

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".fieldsForRegister"] = array();

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".listAjax"] = false;

	$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".audit"] = false;

	$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".locking"] = false;


$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".add"] = true;
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".afterAddAction"] = 1;
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".closePopupAfterAdd"] = 1;
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".afterAddActionDetTable"] = "";

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".list"] = true;



$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".reorderRecordsByHeader"] = true;



$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".inlineAdd"] = true;


$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".exportTo"] = true;

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".printFriendly"] = true;


$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".searchSaving"] = false;
//

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".showSearchPanel"] = true;
		$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".flexibleSearch"] = true;

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".isUseAjaxSuggest"] = true;






$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".ajaxCodeSnippetAdded"] = false;

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".buttonsAdded"] = false;

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".isUseTimeForSearch"] = false;




$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".detailsLinksOnList"] = "1";

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".allSearchFields"] = array();
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".filterFields"] = array();
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".requiredSearchFields"] = array();

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".allSearchFields"][] = "mun_resid";
	$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".allSearchFields"][] = "depart_resid";
	

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".googleLikeFields"] = array();
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".googleLikeFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".googleLikeFields"][] = "depart_resid";


$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".advSearchFields"] = array();
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".advSearchFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".advSearchFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".tableType"] = "report";

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".printerPageOrientation"] = 0;
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".nPrinterPageScale"] = 100;

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".nPrinterSplitRecords"] = 40;

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".nPrinterPDFSplitRecords"] = 40;



$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".geocodingEnabled"] = false;

//report settings
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".crossTabReport"] = true;

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".reportGroupFields"] = true;
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "genero";
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
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".reportGroupFieldsData"] = $reportGroupFields;

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".reportHorizontalSummary"] = true;

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".isExistTotalFields"] = true;

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".reportVerticalSummary"] = true;



$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".repShowDet"] = true;

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".reportLayout"] = 6;

//end of report settings




$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".listGridLayout"] = 3;

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY carcel.mun_resid, anexar_carcel.sector_ppd DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".strOrderBy"] = $tstrOrderBy;

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".orderindexes"] = array();
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "anexar_carcel.sector_ppd");
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "carcel.mun_resid");

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".sqlHead"] = "SELECT anexar_carcel.sector_ppd,  carcel.genero,  COUNT(carcel.genero) AS `COUNT(genero)`,  carcel.mun_resid,  carcel.depart_resid";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".sqlFrom"] = "FROM carcel  INNER JOIN anexar_carcel ON carcel.sipe = anexar_carcel.sipe";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".sqlWhereExpr"] = "";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".arrGroupsPerPage"] = $arrGPP;

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".highlightSearchResults"] = true;

$tableKeysPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero = array();
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".Keys"] = $tableKeysPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero;

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".listFields"] = array();
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".listFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".listFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".listFields"][] = "COUNT(genero)";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".listFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".listFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".hideMobileList"] = array();


$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".viewFields"] = array();
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".viewFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".viewFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".viewFields"][] = "COUNT(genero)";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".viewFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".viewFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".addFields"] = array();
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".addFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".addFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".addFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".addFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".masterListFields"] = array();
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".masterListFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".masterListFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".masterListFields"][] = "COUNT(genero)";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".masterListFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".masterListFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".inlineAddFields"] = array();
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".inlineAddFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".inlineAddFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".inlineAddFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".inlineAddFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".editFields"] = array();
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".editFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".editFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".editFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".editFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".inlineEditFields"] = array();
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".inlineEditFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".inlineEditFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".inlineEditFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".inlineEditFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".updateSelectedFields"] = array();
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".updateSelectedFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".updateSelectedFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".updateSelectedFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".updateSelectedFields"][] = "depart_resid";


$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".exportFields"] = array();
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".exportFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".exportFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".exportFields"][] = "COUNT(genero)";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".exportFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".exportFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".importFields"] = array();
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".importFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".importFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".importFields"][] = "COUNT(genero)";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".importFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".importFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".printFields"] = array();
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".printFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".printFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".printFields"][] = "COUNT(genero)";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".printFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".printFields"][] = "depart_resid";

//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "anexar_carcel";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero","sector_ppd");
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

		$fdata["strField"] = "sector_ppd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anexar_carcel.sector_ppd";

	
	
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








	$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["sector_ppd"] = $fdata;
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero","genero");
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

		$fdata["strField"] = "genero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carcel.genero";

	
	
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








	$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["genero"] = $fdata;
//	COUNT(genero)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "COUNT(genero)";
	$fdata["GoodName"] = "COUNT_genero_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero","COUNT_genero_");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(genero)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(carcel.genero)";

	
	
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








	$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["COUNT(genero)"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero","mun_resid");
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

		$fdata["strField"] = "mun_resid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carcel.mun_resid";

	
	
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




	$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["mun_resid"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero","depart_resid");
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

		$fdata["strField"] = "depart_resid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carcel.depart_resid";

	
	
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




	$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero["depart_resid"] = $fdata;


$tables_data["Personas privadas de libertad por Sectores Estandarizados según género"]=&$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero;
$field_labels["Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero"] = &$fieldLabelsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero;
$fieldToolTips["Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero"] = &$fieldToolTipsPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero;
$placeHolders["Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero"] = &$placeHoldersPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero;
$page_titles["Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero"] = &$pageTitlesPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Personas privadas de libertad por Sectores Estandarizados según género"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "anexar_carcel.sector_ppd,  carcel.genero,  COUNT(carcel.genero) AS `COUNT(genero)`,  carcel.mun_resid,  carcel.depart_resid";
$proto0["m_strFrom"] = "FROM carcel  INNER JOIN anexar_carcel ON carcel.sipe = anexar_carcel.sipe";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY carcel.mun_resid, anexar_carcel.sector_ppd DESC";
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
	"m_strTable" => "anexar_carcel",
	"m_srcTableName" => "Personas privadas de libertad por Sectores Estandarizados según género"
));

$proto6["m_sql"] = "anexar_carcel.sector_ppd";
$proto6["m_srcTableName"] = "Personas privadas de libertad por Sectores Estandarizados según género";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por Sectores Estandarizados según género"
));

$proto8["m_sql"] = "carcel.genero";
$proto8["m_srcTableName"] = "Personas privadas de libertad por Sectores Estandarizados según género";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_COUNT";
$proto11["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por Sectores Estandarizados según género"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "COUNT(carcel.genero)";
$proto10["m_srcTableName"] = "Personas privadas de libertad por Sectores Estandarizados según género";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "COUNT(genero)";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por Sectores Estandarizados según género"
));

$proto13["m_sql"] = "carcel.mun_resid";
$proto13["m_srcTableName"] = "Personas privadas de libertad por Sectores Estandarizados según género";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por Sectores Estandarizados según género"
));

$proto15["m_sql"] = "carcel.depart_resid";
$proto15["m_srcTableName"] = "Personas privadas de libertad por Sectores Estandarizados según género";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "carcel";
$proto18["m_srcTableName"] = "Personas privadas de libertad por Sectores Estandarizados según género";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id";
$proto18["m_columns"][] = "sipe";
$proto18["m_columns"][] = "afis";
$proto18["m_columns"][] = "edad";
$proto18["m_columns"][] = "rangoetario";
$proto18["m_columns"][] = "genero";
$proto18["m_columns"][] = "fecha_nac";
$proto18["m_columns"][] = "edad1";
$proto18["m_columns"][] = "dui";
$proto18["m_columns"][] = "nivel_edu";
$proto18["m_columns"][] = "educacionanalisis";
$proto18["m_columns"][] = "profesion_oficio";
$proto18["m_columns"][] = "estado_civil";
$proto18["m_columns"][] = "ciudadania";
$proto18["m_columns"][] = "mun_nacimiento";
$proto18["m_columns"][] = "depto_nacim";
$proto18["m_columns"][] = "direccion";
$proto18["m_columns"][] = "mun_resid";
$proto18["m_columns"][] = "depart_resid";
$proto18["m_columns"][] = "delitosanalisis";
$proto18["m_columns"][] = "sj_interno";
$proto18["m_columns"][] = "fase";
$proto18["m_columns"][] = "org_delictiva";
$proto18["m_columns"][] = "tipo_mara";
$proto18["m_columns"][] = "reincidente";
$proto18["m_columns"][] = "deportado";
$proto18["m_columns"][] = "direccion1";
$proto18["m_columns"][] = "sector";
$proto18["m_columns"][] = "celda";
$proto18["m_columns"][] = "fecha_ing__sp";
$proto18["m_columns"][] = "libro";
$proto18["m_columns"][] = "fecha_ing__cp";
$proto18["m_columns"][] = "total_delitos";
$proto18["m_columns"][] = "delitos";
$proto18["m_columns"][] = "delitoanalisis";
$proto18["m_columns"][] = "sector_ppd";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "carcel";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "Personas privadas de libertad por Sectores Estandarizados según género";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
												$proto21=array();
$proto21["m_link"] = "SQLL_INNERJOIN";
			$proto22=array();
$proto22["m_strName"] = "anexar_carcel";
$proto22["m_srcTableName"] = "Personas privadas de libertad por Sectores Estandarizados según género";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "sipe";
$proto22["m_columns"][] = "sector_ppd";
$proto22["m_columns"][] = "municipio";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "INNER JOIN anexar_carcel ON carcel.sipe = anexar_carcel.sipe";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "Personas privadas de libertad por Sectores Estandarizados según género";
$proto23=array();
$proto23["m_sql"] = "carcel.sipe = anexar_carcel.sipe";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sipe",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por Sectores Estandarizados según género"
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "= anexar_carcel.sipe";
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
	"m_strName" => "sector_ppd",
	"m_strTable" => "anexar_carcel",
	"m_srcTableName" => "Personas privadas de libertad por Sectores Estandarizados según género"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por Sectores Estandarizados según género"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por Sectores Estandarizados según género"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por Sectores Estandarizados según género"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por Sectores Estandarizados según género"
));

$proto33["m_column"]=$obj;
$proto33["m_bAsc"] = 1;
$proto33["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto33);

$proto0["m_orderby"][]=$obj;					
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "anexar_carcel",
	"m_srcTableName" => "Personas privadas de libertad por Sectores Estandarizados según género"
));

$proto35["m_column"]=$obj;
$proto35["m_bAsc"] = 0;
$proto35["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto35);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Personas privadas de libertad por Sectores Estandarizados según género";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero = createSqlQuery_Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero();


	
		;

					

$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".sqlquery"] = $queryData_Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero;

$tableEvents["Personas privadas de libertad por Sectores Estandarizados según género"] = new eventsBase;
$tdataPersonas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero[".hasEvents"] = false;

?>