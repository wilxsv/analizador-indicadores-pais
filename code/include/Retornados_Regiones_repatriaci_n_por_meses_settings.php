<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRetornados_Regiones_repatriaci_n_por_meses = array();
	$tdataRetornados_Regiones_repatriaci_n_por_meses[".truncateText"] = true;
	$tdataRetornados_Regiones_repatriaci_n_por_meses[".NumberOfChars"] = 80;
	$tdataRetornados_Regiones_repatriaci_n_por_meses[".ShortName"] = "Retornados_Regiones_repatriaci_n_por_meses";
	$tdataRetornados_Regiones_repatriaci_n_por_meses[".OwnerID"] = "";
	$tdataRetornados_Regiones_repatriaci_n_por_meses[".OriginalTable"] = "retornados";

//	field labels
$fieldLabelsRetornados_Regiones_repatriaci_n_por_meses = array();
$fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses = array();
$pageTitlesRetornados_Regiones_repatriaci_n_por_meses = array();
$placeHoldersRetornados_Regiones_repatriaci_n_por_meses = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsRetornados_Regiones_repatriaci_n_por_meses["Spanish"] = array();
	$fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses["Spanish"] = array();
	$placeHoldersRetornados_Regiones_repatriaci_n_por_meses["Spanish"] = array();
	$pageTitlesRetornados_Regiones_repatriaci_n_por_meses["Spanish"] = array();
	$fieldLabelsRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["a_o"] = "Año";
	$fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["a_o"] = "";
	$placeHoldersRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["a_o"] = "";
	$fieldLabelsRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["mes"] = "Mes";
	$fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["mes"] = "";
	$placeHoldersRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["mes"] = "";
	$fieldLabelsRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["departamento"] = "";
	$placeHoldersRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["departamento"] = "";
	$fieldLabelsRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["municipio"] = "";
	$placeHoldersRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["municipio"] = "";
	$fieldLabelsRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["regionrepatriacion"] = "Regionrepatriacion";
	$fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["regionrepatriacion"] = "";
	$placeHoldersRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["regionrepatriacion"] = "";
	$fieldLabelsRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["sectorppd"] = "";
	$placeHoldersRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["sectorppd"] = "";
	$fieldLabelsRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["num_mes"] = "Num Mes";
	$fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["num_mes"] = "";
	$placeHoldersRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["num_mes"] = "";
	$fieldLabelsRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["COUNT_municipio_"] = "COUNT(municipio)";
	$fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["COUNT_municipio_"] = "";
	$placeHoldersRetornados_Regiones_repatriaci_n_por_meses["Spanish"]["COUNT_municipio_"] = "";
	if (count($fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses["Spanish"]))
		$tdataRetornados_Regiones_repatriaci_n_por_meses[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRetornados_Regiones_repatriaci_n_por_meses["English"] = array();
	$fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses["English"] = array();
	$placeHoldersRetornados_Regiones_repatriaci_n_por_meses["English"] = array();
	$pageTitlesRetornados_Regiones_repatriaci_n_por_meses["English"] = array();
	$fieldLabelsRetornados_Regiones_repatriaci_n_por_meses["English"]["a_o"] = "Año";
	$fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses["English"]["a_o"] = "";
	$placeHoldersRetornados_Regiones_repatriaci_n_por_meses["English"]["a_o"] = "";
	$fieldLabelsRetornados_Regiones_repatriaci_n_por_meses["English"]["mes"] = "Mes";
	$fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses["English"]["mes"] = "";
	$placeHoldersRetornados_Regiones_repatriaci_n_por_meses["English"]["mes"] = "";
	$fieldLabelsRetornados_Regiones_repatriaci_n_por_meses["English"]["departamento"] = "Departamento";
	$fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses["English"]["departamento"] = "";
	$placeHoldersRetornados_Regiones_repatriaci_n_por_meses["English"]["departamento"] = "";
	$fieldLabelsRetornados_Regiones_repatriaci_n_por_meses["English"]["municipio"] = "Municipio";
	$fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses["English"]["municipio"] = "";
	$placeHoldersRetornados_Regiones_repatriaci_n_por_meses["English"]["municipio"] = "";
	$fieldLabelsRetornados_Regiones_repatriaci_n_por_meses["English"]["regionrepatriacion"] = "Regionrepatriacion";
	$fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses["English"]["regionrepatriacion"] = "";
	$placeHoldersRetornados_Regiones_repatriaci_n_por_meses["English"]["regionrepatriacion"] = "";
	$fieldLabelsRetornados_Regiones_repatriaci_n_por_meses["English"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses["English"]["sectorppd"] = "";
	$placeHoldersRetornados_Regiones_repatriaci_n_por_meses["English"]["sectorppd"] = "";
	$fieldLabelsRetornados_Regiones_repatriaci_n_por_meses["English"]["num_mes"] = "Num Mes";
	$fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses["English"]["num_mes"] = "";
	$placeHoldersRetornados_Regiones_repatriaci_n_por_meses["English"]["num_mes"] = "";
	$fieldLabelsRetornados_Regiones_repatriaci_n_por_meses["English"]["COUNT_municipio_"] = "COUNT(municipio)";
	$fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses["English"]["COUNT_municipio_"] = "";
	$placeHoldersRetornados_Regiones_repatriaci_n_por_meses["English"]["COUNT_municipio_"] = "";
	if (count($fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses["English"]))
		$tdataRetornados_Regiones_repatriaci_n_por_meses[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRetornados_Regiones_repatriaci_n_por_meses[""] = array();
	$fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses[""] = array();
	$placeHoldersRetornados_Regiones_repatriaci_n_por_meses[""] = array();
	$pageTitlesRetornados_Regiones_repatriaci_n_por_meses[""] = array();
	if (count($fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses[""]))
		$tdataRetornados_Regiones_repatriaci_n_por_meses[".isUseToolTips"] = true;
}


	$tdataRetornados_Regiones_repatriaci_n_por_meses[".NCSearch"] = true;



$tdataRetornados_Regiones_repatriaci_n_por_meses[".shortTableName"] = "Retornados_Regiones_repatriaci_n_por_meses";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".nSecOptions"] = 0;
$tdataRetornados_Regiones_repatriaci_n_por_meses[".recsPerRowPrint"] = 1;
$tdataRetornados_Regiones_repatriaci_n_por_meses[".mainTableOwnerID"] = "";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".moveNext"] = 1;
$tdataRetornados_Regiones_repatriaci_n_por_meses[".entityType"] = 2;

$tdataRetornados_Regiones_repatriaci_n_por_meses[".strOriginalTableName"] = "retornados";

	



$tdataRetornados_Regiones_repatriaci_n_por_meses[".showAddInPopup"] = false;

$tdataRetornados_Regiones_repatriaci_n_por_meses[".showEditInPopup"] = false;

$tdataRetornados_Regiones_repatriaci_n_por_meses[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRetornados_Regiones_repatriaci_n_por_meses[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRetornados_Regiones_repatriaci_n_por_meses[".fieldsForRegister"] = array();

$tdataRetornados_Regiones_repatriaci_n_por_meses[".listAjax"] = false;

	$tdataRetornados_Regiones_repatriaci_n_por_meses[".audit"] = false;

	$tdataRetornados_Regiones_repatriaci_n_por_meses[".locking"] = false;



$tdataRetornados_Regiones_repatriaci_n_por_meses[".list"] = true;



$tdataRetornados_Regiones_repatriaci_n_por_meses[".reorderRecordsByHeader"] = true;





$tdataRetornados_Regiones_repatriaci_n_por_meses[".exportTo"] = true;

$tdataRetornados_Regiones_repatriaci_n_por_meses[".printFriendly"] = true;


$tdataRetornados_Regiones_repatriaci_n_por_meses[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataRetornados_Regiones_repatriaci_n_por_meses[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataRetornados_Regiones_repatriaci_n_por_meses[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataRetornados_Regiones_repatriaci_n_por_meses[".searchSaving"] = false;
//

$tdataRetornados_Regiones_repatriaci_n_por_meses[".showSearchPanel"] = true;
		$tdataRetornados_Regiones_repatriaci_n_por_meses[".flexibleSearch"] = true;

$tdataRetornados_Regiones_repatriaci_n_por_meses[".isUseAjaxSuggest"] = true;






$tdataRetornados_Regiones_repatriaci_n_por_meses[".ajaxCodeSnippetAdded"] = false;

$tdataRetornados_Regiones_repatriaci_n_por_meses[".buttonsAdded"] = false;

$tdataRetornados_Regiones_repatriaci_n_por_meses[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRetornados_Regiones_repatriaci_n_por_meses[".isUseTimeForSearch"] = false;





$tdataRetornados_Regiones_repatriaci_n_por_meses[".allSearchFields"] = array();
$tdataRetornados_Regiones_repatriaci_n_por_meses[".filterFields"] = array();
$tdataRetornados_Regiones_repatriaci_n_por_meses[".requiredSearchFields"] = array();

$tdataRetornados_Regiones_repatriaci_n_por_meses[".allSearchFields"][] = "sectorppd";
		$tdataRetornados_Regiones_repatriaci_n_por_meses[".requiredSearchFields"][] = "sectorppd";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".allSearchFields"][] = "municipio";
		$tdataRetornados_Regiones_repatriaci_n_por_meses[".requiredSearchFields"][] = "municipio";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".allSearchFields"][] = "departamento";
		$tdataRetornados_Regiones_repatriaci_n_por_meses[".requiredSearchFields"][] = "departamento";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".allSearchFields"][] = "regionrepatriacion";
		$tdataRetornados_Regiones_repatriaci_n_por_meses[".requiredSearchFields"][] = "regionrepatriacion";


$tdataRetornados_Regiones_repatriaci_n_por_meses[".googleLikeFields"] = array();
$tdataRetornados_Regiones_repatriaci_n_por_meses[".googleLikeFields"][] = "sectorppd";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".googleLikeFields"][] = "municipio";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".googleLikeFields"][] = "departamento";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".googleLikeFields"][] = "regionrepatriacion";

$tdataRetornados_Regiones_repatriaci_n_por_meses[".panelSearchFields"] = array();
$tdataRetornados_Regiones_repatriaci_n_por_meses[".searchPanelOptions"] = array();
$tdataRetornados_Regiones_repatriaci_n_por_meses[".panelSearchFields"][] = "sectorppd";
	$tdataRetornados_Regiones_repatriaci_n_por_meses[".panelSearchFields"][] = "municipio";
	$tdataRetornados_Regiones_repatriaci_n_por_meses[".panelSearchFields"][] = "departamento";
	$tdataRetornados_Regiones_repatriaci_n_por_meses[".panelSearchFields"][] = "regionrepatriacion";
	
$tdataRetornados_Regiones_repatriaci_n_por_meses[".advSearchFields"] = array();
$tdataRetornados_Regiones_repatriaci_n_por_meses[".advSearchFields"][] = "sectorppd";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".advSearchFields"][] = "municipio";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".advSearchFields"][] = "departamento";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".advSearchFields"][] = "regionrepatriacion";

$tdataRetornados_Regiones_repatriaci_n_por_meses[".tableType"] = "report";

$tdataRetornados_Regiones_repatriaci_n_por_meses[".printerPageOrientation"] = 0;
$tdataRetornados_Regiones_repatriaci_n_por_meses[".nPrinterPageScale"] = 100;

$tdataRetornados_Regiones_repatriaci_n_por_meses[".nPrinterSplitRecords"] = 40;

$tdataRetornados_Regiones_repatriaci_n_por_meses[".nPrinterPDFSplitRecords"] = 40;



$tdataRetornados_Regiones_repatriaci_n_por_meses[".geocodingEnabled"] = false;

//report settings
$tdataRetornados_Regiones_repatriaci_n_por_meses[".crossTabReport"] = true;

$tdataRetornados_Regiones_repatriaci_n_por_meses[".reportGroupFields"] = true;
$tdataRetornados_Regiones_repatriaci_n_por_meses[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "num_mes";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "regionrepatriacion";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdataRetornados_Regiones_repatriaci_n_por_meses[".reportGroupFieldsData"] = $reportGroupFields;

$tdataRetornados_Regiones_repatriaci_n_por_meses[".reportHorizontalSummary"] = true;

$tdataRetornados_Regiones_repatriaci_n_por_meses[".isExistTotalFields"] = true;

$tdataRetornados_Regiones_repatriaci_n_por_meses[".reportVerticalSummary"] = true;



$tdataRetornados_Regiones_repatriaci_n_por_meses[".repShowDet"] = true;

$tdataRetornados_Regiones_repatriaci_n_por_meses[".reportLayout"] = 6;

//end of report settings




$tdataRetornados_Regiones_repatriaci_n_por_meses[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY regionrepatriacion, num_mes";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRetornados_Regiones_repatriaci_n_por_meses[".strOrderBy"] = $tstrOrderBy;

$tdataRetornados_Regiones_repatriaci_n_por_meses[".orderindexes"] = array();
$tdataRetornados_Regiones_repatriaci_n_por_meses[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "num_mes");
$tdataRetornados_Regiones_repatriaci_n_por_meses[".orderindexes"][] = array(7, (1 ? "ASC" : "DESC"), "regionrepatriacion");

$tdataRetornados_Regiones_repatriaci_n_por_meses[".sqlHead"] = "SELECT `año`,  num_mes,  mes,  sectorppd,  municipio,  departamento,  regionrepatriacion,  COUNT(municipio) AS `COUNT(municipio)`";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".sqlFrom"] = "FROM retornados";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".sqlWhereExpr"] = "";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRetornados_Regiones_repatriaci_n_por_meses[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRetornados_Regiones_repatriaci_n_por_meses[".arrGroupsPerPage"] = $arrGPP;

$tdataRetornados_Regiones_repatriaci_n_por_meses[".highlightSearchResults"] = true;

$tableKeysRetornados_Regiones_repatriaci_n_por_meses = array();
$tdataRetornados_Regiones_repatriaci_n_por_meses[".Keys"] = $tableKeysRetornados_Regiones_repatriaci_n_por_meses;

$tdataRetornados_Regiones_repatriaci_n_por_meses[".listFields"] = array();
$tdataRetornados_Regiones_repatriaci_n_por_meses[".listFields"][] = "año";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".listFields"][] = "num_mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".listFields"][] = "mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".listFields"][] = "sectorppd";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".listFields"][] = "municipio";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".listFields"][] = "departamento";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".listFields"][] = "regionrepatriacion";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".listFields"][] = "COUNT(municipio)";

$tdataRetornados_Regiones_repatriaci_n_por_meses[".hideMobileList"] = array();


$tdataRetornados_Regiones_repatriaci_n_por_meses[".viewFields"] = array();
$tdataRetornados_Regiones_repatriaci_n_por_meses[".viewFields"][] = "año";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".viewFields"][] = "num_mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".viewFields"][] = "mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".viewFields"][] = "sectorppd";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".viewFields"][] = "municipio";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".viewFields"][] = "departamento";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".viewFields"][] = "regionrepatriacion";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".viewFields"][] = "COUNT(municipio)";

$tdataRetornados_Regiones_repatriaci_n_por_meses[".addFields"] = array();
$tdataRetornados_Regiones_repatriaci_n_por_meses[".addFields"][] = "año";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".addFields"][] = "num_mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".addFields"][] = "mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".addFields"][] = "sectorppd";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".addFields"][] = "municipio";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".addFields"][] = "departamento";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".addFields"][] = "regionrepatriacion";

$tdataRetornados_Regiones_repatriaci_n_por_meses[".masterListFields"] = array();
$tdataRetornados_Regiones_repatriaci_n_por_meses[".masterListFields"][] = "año";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".masterListFields"][] = "num_mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".masterListFields"][] = "mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".masterListFields"][] = "sectorppd";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".masterListFields"][] = "municipio";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".masterListFields"][] = "departamento";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".masterListFields"][] = "regionrepatriacion";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".masterListFields"][] = "COUNT(municipio)";

$tdataRetornados_Regiones_repatriaci_n_por_meses[".inlineAddFields"] = array();
$tdataRetornados_Regiones_repatriaci_n_por_meses[".inlineAddFields"][] = "año";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".inlineAddFields"][] = "num_mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".inlineAddFields"][] = "mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".inlineAddFields"][] = "sectorppd";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".inlineAddFields"][] = "municipio";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".inlineAddFields"][] = "departamento";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".inlineAddFields"][] = "regionrepatriacion";

$tdataRetornados_Regiones_repatriaci_n_por_meses[".editFields"] = array();
$tdataRetornados_Regiones_repatriaci_n_por_meses[".editFields"][] = "año";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".editFields"][] = "num_mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".editFields"][] = "mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".editFields"][] = "sectorppd";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".editFields"][] = "municipio";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".editFields"][] = "departamento";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".editFields"][] = "regionrepatriacion";

$tdataRetornados_Regiones_repatriaci_n_por_meses[".inlineEditFields"] = array();
$tdataRetornados_Regiones_repatriaci_n_por_meses[".inlineEditFields"][] = "año";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".inlineEditFields"][] = "num_mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".inlineEditFields"][] = "mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".inlineEditFields"][] = "sectorppd";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".inlineEditFields"][] = "municipio";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".inlineEditFields"][] = "departamento";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".inlineEditFields"][] = "regionrepatriacion";

$tdataRetornados_Regiones_repatriaci_n_por_meses[".updateSelectedFields"] = array();
$tdataRetornados_Regiones_repatriaci_n_por_meses[".updateSelectedFields"][] = "año";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".updateSelectedFields"][] = "num_mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".updateSelectedFields"][] = "mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".updateSelectedFields"][] = "sectorppd";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".updateSelectedFields"][] = "municipio";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".updateSelectedFields"][] = "departamento";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".updateSelectedFields"][] = "regionrepatriacion";


$tdataRetornados_Regiones_repatriaci_n_por_meses[".exportFields"] = array();
$tdataRetornados_Regiones_repatriaci_n_por_meses[".exportFields"][] = "año";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".exportFields"][] = "num_mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".exportFields"][] = "mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".exportFields"][] = "sectorppd";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".exportFields"][] = "municipio";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".exportFields"][] = "departamento";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".exportFields"][] = "regionrepatriacion";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".exportFields"][] = "COUNT(municipio)";

$tdataRetornados_Regiones_repatriaci_n_por_meses[".importFields"] = array();
$tdataRetornados_Regiones_repatriaci_n_por_meses[".importFields"][] = "año";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".importFields"][] = "num_mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".importFields"][] = "mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".importFields"][] = "sectorppd";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".importFields"][] = "municipio";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".importFields"][] = "departamento";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".importFields"][] = "regionrepatriacion";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".importFields"][] = "COUNT(municipio)";

$tdataRetornados_Regiones_repatriaci_n_por_meses[".printFields"] = array();
$tdataRetornados_Regiones_repatriaci_n_por_meses[".printFields"][] = "año";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".printFields"][] = "num_mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".printFields"][] = "mes";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".printFields"][] = "sectorppd";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".printFields"][] = "municipio";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".printFields"][] = "departamento";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".printFields"][] = "regionrepatriacion";
$tdataRetornados_Regiones_repatriaci_n_por_meses[".printFields"][] = "COUNT(municipio)";

//	año
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "año";
	$fdata["GoodName"] = "a_o";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Regiones_repatriaci_n_por_meses","a_o");
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

		$fdata["strField"] = "año";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`año`";

	
	
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








	$tdataRetornados_Regiones_repatriaci_n_por_meses["año"] = $fdata;
//	num_mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "num_mes";
	$fdata["GoodName"] = "num_mes";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Regiones_repatriaci_n_por_meses","num_mes");
	$fdata["FieldType"] = 3;

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

		$fdata["strField"] = "num_mes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "num_mes";

	
	
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








	$tdataRetornados_Regiones_repatriaci_n_por_meses["num_mes"] = $fdata;
//	mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mes";
	$fdata["GoodName"] = "mes";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Regiones_repatriaci_n_por_meses","mes");
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

		$fdata["strField"] = "mes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mes";

	
	
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








	$tdataRetornados_Regiones_repatriaci_n_por_meses["mes"] = $fdata;
//	sectorppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sectorppd";
	$fdata["GoodName"] = "sectorppd";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Regiones_repatriaci_n_por_meses","sectorppd");
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

		$fdata["strField"] = "sectorppd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sectorppd";

	
	
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




	$tdataRetornados_Regiones_repatriaci_n_por_meses["sectorppd"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Regiones_repatriaci_n_por_meses","municipio");
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

		$fdata["strField"] = "municipio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "municipio";

	
	
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




	$tdataRetornados_Regiones_repatriaci_n_por_meses["municipio"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Regiones_repatriaci_n_por_meses","departamento");
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

		$fdata["strField"] = "departamento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "departamento";

	
	
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




	$tdataRetornados_Regiones_repatriaci_n_por_meses["departamento"] = $fdata;
//	regionrepatriacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "regionrepatriacion";
	$fdata["GoodName"] = "regionrepatriacion";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Regiones_repatriaci_n_por_meses","regionrepatriacion");
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

		$fdata["strField"] = "regionrepatriacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "regionrepatriacion";

	
	
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




	$tdataRetornados_Regiones_repatriaci_n_por_meses["regionrepatriacion"] = $fdata;
//	COUNT(municipio)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "COUNT(municipio)";
	$fdata["GoodName"] = "COUNT_municipio_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Retornados_Regiones_repatriaci_n_por_meses","COUNT_municipio_");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(municipio)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(municipio)";

	
	
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








	$tdataRetornados_Regiones_repatriaci_n_por_meses["COUNT(municipio)"] = $fdata;


$tables_data["Retornados-Regiones repatriación por meses"]=&$tdataRetornados_Regiones_repatriaci_n_por_meses;
$field_labels["Retornados_Regiones_repatriaci_n_por_meses"] = &$fieldLabelsRetornados_Regiones_repatriaci_n_por_meses;
$fieldToolTips["Retornados_Regiones_repatriaci_n_por_meses"] = &$fieldToolTipsRetornados_Regiones_repatriaci_n_por_meses;
$placeHolders["Retornados_Regiones_repatriaci_n_por_meses"] = &$placeHoldersRetornados_Regiones_repatriaci_n_por_meses;
$page_titles["Retornados_Regiones_repatriaci_n_por_meses"] = &$pageTitlesRetornados_Regiones_repatriaci_n_por_meses;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Retornados-Regiones repatriación por meses"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Retornados_Regiones_repatriaci_n_por_meses()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`año`,  num_mes,  mes,  sectorppd,  municipio,  departamento,  regionrepatriacion,  COUNT(municipio) AS `COUNT(municipio)`";
$proto0["m_strFrom"] = "FROM retornados";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY regionrepatriacion, num_mes";
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
	"m_strName" => "año",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Regiones repatriación por meses"
));

$proto6["m_sql"] = "`año`";
$proto6["m_srcTableName"] = "Retornados-Regiones repatriación por meses";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "num_mes",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Regiones repatriación por meses"
));

$proto8["m_sql"] = "num_mes";
$proto8["m_srcTableName"] = "Retornados-Regiones repatriación por meses";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mes",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Regiones repatriación por meses"
));

$proto10["m_sql"] = "mes";
$proto10["m_srcTableName"] = "Retornados-Regiones repatriación por meses";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sectorppd",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Regiones repatriación por meses"
));

$proto12["m_sql"] = "sectorppd";
$proto12["m_srcTableName"] = "Retornados-Regiones repatriación por meses";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Regiones repatriación por meses"
));

$proto14["m_sql"] = "municipio";
$proto14["m_srcTableName"] = "Retornados-Regiones repatriación por meses";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Regiones repatriación por meses"
));

$proto16["m_sql"] = "departamento";
$proto16["m_srcTableName"] = "Retornados-Regiones repatriación por meses";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "regionrepatriacion",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Regiones repatriación por meses"
));

$proto18["m_sql"] = "regionrepatriacion";
$proto18["m_srcTableName"] = "Retornados-Regiones repatriación por meses";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_COUNT";
$proto21["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Regiones repatriación por meses"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "COUNT(municipio)";
$proto20["m_srcTableName"] = "Retornados-Regiones repatriación por meses";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "COUNT(municipio)";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "retornados";
$proto24["m_srcTableName"] = "Retornados-Regiones repatriación por meses";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "año";
$proto24["m_columns"][] = "mes";
$proto24["m_columns"][] = "fechaentrevista";
$proto24["m_columns"][] = "tipoentrevista";
$proto24["m_columns"][] = "ficha";
$proto24["m_columns"][] = "numalien";
$proto24["m_columns"][] = "fechanacimiento";
$proto24["m_columns"][] = "documentoficha";
$proto24["m_columns"][] = "numerodocumento";
$proto24["m_columns"][] = "nombredocumento";
$proto24["m_columns"][] = "consulado";
$proto24["m_columns"][] = "consulado_analisis";
$proto24["m_columns"][] = "departamento";
$proto24["m_columns"][] = "municipio";
$proto24["m_columns"][] = "sexo";
$proto24["m_columns"][] = "edad";
$proto24["m_columns"][] = "rango_etario";
$proto24["m_columns"][] = "tipoedad";
$proto24["m_columns"][] = "paisrepatriacion";
$proto24["m_columns"][] = "regionrepatriacion";
$proto24["m_columns"][] = "antecedentes_penales";
$proto24["m_columns"][] = "tipo_antecedentes";
$proto24["m_columns"][] = "antecedentes";
$proto24["m_columns"][] = "sectorppd";
$proto24["m_columns"][] = "num_mes";
$proto24["m_columns"][] = "antecedente_analisis";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "retornados";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "Retornados-Regiones repatriación por meses";
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
	"m_strName" => "año",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Regiones repatriación por meses"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "num_mes",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Regiones repatriación por meses"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "mes",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Regiones repatriación por meses"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "sectorppd",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Regiones repatriación por meses"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Regiones repatriación por meses"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Regiones repatriación por meses"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "regionrepatriacion",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Regiones repatriación por meses"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "regionrepatriacion",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Regiones repatriación por meses"
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 1;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto0["m_orderby"][]=$obj;					
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "num_mes",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Regiones repatriación por meses"
));

$proto43["m_column"]=$obj;
$proto43["m_bAsc"] = 1;
$proto43["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto43);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Retornados-Regiones repatriación por meses";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Retornados_Regiones_repatriaci_n_por_meses = createSqlQuery_Retornados_Regiones_repatriaci_n_por_meses();


	
		;

								

$tdataRetornados_Regiones_repatriaci_n_por_meses[".sqlquery"] = $queryData_Retornados_Regiones_repatriaci_n_por_meses;

$tableEvents["Retornados-Regiones repatriación por meses"] = new eventsBase;
$tdataRetornados_Regiones_repatriaci_n_por_meses[".hasEvents"] = false;

?>