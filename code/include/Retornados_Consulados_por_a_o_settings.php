<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRetornados_Consulados_por_a_o = array();
	$tdataRetornados_Consulados_por_a_o[".truncateText"] = true;
	$tdataRetornados_Consulados_por_a_o[".NumberOfChars"] = 80;
	$tdataRetornados_Consulados_por_a_o[".ShortName"] = "Retornados_Consulados_por_a_o";
	$tdataRetornados_Consulados_por_a_o[".OwnerID"] = "";
	$tdataRetornados_Consulados_por_a_o[".OriginalTable"] = "retornados";

//	field labels
$fieldLabelsRetornados_Consulados_por_a_o = array();
$fieldToolTipsRetornados_Consulados_por_a_o = array();
$pageTitlesRetornados_Consulados_por_a_o = array();
$placeHoldersRetornados_Consulados_por_a_o = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsRetornados_Consulados_por_a_o["Spanish"] = array();
	$fieldToolTipsRetornados_Consulados_por_a_o["Spanish"] = array();
	$placeHoldersRetornados_Consulados_por_a_o["Spanish"] = array();
	$pageTitlesRetornados_Consulados_por_a_o["Spanish"] = array();
	$fieldLabelsRetornados_Consulados_por_a_o["Spanish"]["a_o"] = "Año";
	$fieldToolTipsRetornados_Consulados_por_a_o["Spanish"]["a_o"] = "";
	$placeHoldersRetornados_Consulados_por_a_o["Spanish"]["a_o"] = "";
	$fieldLabelsRetornados_Consulados_por_a_o["Spanish"]["mes"] = "Mes";
	$fieldToolTipsRetornados_Consulados_por_a_o["Spanish"]["mes"] = "";
	$placeHoldersRetornados_Consulados_por_a_o["Spanish"]["mes"] = "";
	$fieldLabelsRetornados_Consulados_por_a_o["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsRetornados_Consulados_por_a_o["Spanish"]["departamento"] = "";
	$placeHoldersRetornados_Consulados_por_a_o["Spanish"]["departamento"] = "";
	$fieldLabelsRetornados_Consulados_por_a_o["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsRetornados_Consulados_por_a_o["Spanish"]["municipio"] = "";
	$placeHoldersRetornados_Consulados_por_a_o["Spanish"]["municipio"] = "";
	$fieldLabelsRetornados_Consulados_por_a_o["Spanish"]["regionrepatriacion"] = "Regionrepatriacion";
	$fieldToolTipsRetornados_Consulados_por_a_o["Spanish"]["regionrepatriacion"] = "";
	$placeHoldersRetornados_Consulados_por_a_o["Spanish"]["regionrepatriacion"] = "";
	$fieldLabelsRetornados_Consulados_por_a_o["Spanish"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsRetornados_Consulados_por_a_o["Spanish"]["sectorppd"] = "";
	$placeHoldersRetornados_Consulados_por_a_o["Spanish"]["sectorppd"] = "";
	$fieldLabelsRetornados_Consulados_por_a_o["Spanish"]["COUNT_municipio_"] = "COUNT(municipio)";
	$fieldToolTipsRetornados_Consulados_por_a_o["Spanish"]["COUNT_municipio_"] = "";
	$placeHoldersRetornados_Consulados_por_a_o["Spanish"]["COUNT_municipio_"] = "";
	$fieldLabelsRetornados_Consulados_por_a_o["Spanish"]["consulado_analisis"] = "Consulado Analisis";
	$fieldToolTipsRetornados_Consulados_por_a_o["Spanish"]["consulado_analisis"] = "";
	$placeHoldersRetornados_Consulados_por_a_o["Spanish"]["consulado_analisis"] = "";
	$fieldLabelsRetornados_Consulados_por_a_o["Spanish"]["consulado"] = "Consulado";
	$fieldToolTipsRetornados_Consulados_por_a_o["Spanish"]["consulado"] = "";
	$placeHoldersRetornados_Consulados_por_a_o["Spanish"]["consulado"] = "";
	if (count($fieldToolTipsRetornados_Consulados_por_a_o["Spanish"]))
		$tdataRetornados_Consulados_por_a_o[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRetornados_Consulados_por_a_o["English"] = array();
	$fieldToolTipsRetornados_Consulados_por_a_o["English"] = array();
	$placeHoldersRetornados_Consulados_por_a_o["English"] = array();
	$pageTitlesRetornados_Consulados_por_a_o["English"] = array();
	$fieldLabelsRetornados_Consulados_por_a_o["English"]["a_o"] = "Año";
	$fieldToolTipsRetornados_Consulados_por_a_o["English"]["a_o"] = "";
	$placeHoldersRetornados_Consulados_por_a_o["English"]["a_o"] = "";
	$fieldLabelsRetornados_Consulados_por_a_o["English"]["mes"] = "Mes";
	$fieldToolTipsRetornados_Consulados_por_a_o["English"]["mes"] = "";
	$placeHoldersRetornados_Consulados_por_a_o["English"]["mes"] = "";
	$fieldLabelsRetornados_Consulados_por_a_o["English"]["departamento"] = "Departamento";
	$fieldToolTipsRetornados_Consulados_por_a_o["English"]["departamento"] = "";
	$placeHoldersRetornados_Consulados_por_a_o["English"]["departamento"] = "";
	$fieldLabelsRetornados_Consulados_por_a_o["English"]["municipio"] = "Municipio";
	$fieldToolTipsRetornados_Consulados_por_a_o["English"]["municipio"] = "";
	$placeHoldersRetornados_Consulados_por_a_o["English"]["municipio"] = "";
	$fieldLabelsRetornados_Consulados_por_a_o["English"]["regionrepatriacion"] = "Regionrepatriacion";
	$fieldToolTipsRetornados_Consulados_por_a_o["English"]["regionrepatriacion"] = "";
	$placeHoldersRetornados_Consulados_por_a_o["English"]["regionrepatriacion"] = "";
	$fieldLabelsRetornados_Consulados_por_a_o["English"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsRetornados_Consulados_por_a_o["English"]["sectorppd"] = "";
	$placeHoldersRetornados_Consulados_por_a_o["English"]["sectorppd"] = "";
	$fieldLabelsRetornados_Consulados_por_a_o["English"]["COUNT_municipio_"] = "COUNT(municipio)";
	$fieldToolTipsRetornados_Consulados_por_a_o["English"]["COUNT_municipio_"] = "";
	$placeHoldersRetornados_Consulados_por_a_o["English"]["COUNT_municipio_"] = "";
	$fieldLabelsRetornados_Consulados_por_a_o["English"]["consulado_analisis"] = "Consulado Analisis";
	$fieldToolTipsRetornados_Consulados_por_a_o["English"]["consulado_analisis"] = "";
	$placeHoldersRetornados_Consulados_por_a_o["English"]["consulado_analisis"] = "";
	$fieldLabelsRetornados_Consulados_por_a_o["English"]["consulado"] = "Consulado";
	$fieldToolTipsRetornados_Consulados_por_a_o["English"]["consulado"] = "";
	$placeHoldersRetornados_Consulados_por_a_o["English"]["consulado"] = "";
	if (count($fieldToolTipsRetornados_Consulados_por_a_o["English"]))
		$tdataRetornados_Consulados_por_a_o[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRetornados_Consulados_por_a_o[""] = array();
	$fieldToolTipsRetornados_Consulados_por_a_o[""] = array();
	$placeHoldersRetornados_Consulados_por_a_o[""] = array();
	$pageTitlesRetornados_Consulados_por_a_o[""] = array();
	if (count($fieldToolTipsRetornados_Consulados_por_a_o[""]))
		$tdataRetornados_Consulados_por_a_o[".isUseToolTips"] = true;
}


	$tdataRetornados_Consulados_por_a_o[".NCSearch"] = true;



$tdataRetornados_Consulados_por_a_o[".shortTableName"] = "Retornados_Consulados_por_a_o";
$tdataRetornados_Consulados_por_a_o[".nSecOptions"] = 0;
$tdataRetornados_Consulados_por_a_o[".recsPerRowPrint"] = 1;
$tdataRetornados_Consulados_por_a_o[".mainTableOwnerID"] = "";
$tdataRetornados_Consulados_por_a_o[".moveNext"] = 1;
$tdataRetornados_Consulados_por_a_o[".entityType"] = 2;

$tdataRetornados_Consulados_por_a_o[".strOriginalTableName"] = "retornados";

	



$tdataRetornados_Consulados_por_a_o[".showAddInPopup"] = false;

$tdataRetornados_Consulados_por_a_o[".showEditInPopup"] = false;

$tdataRetornados_Consulados_por_a_o[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRetornados_Consulados_por_a_o[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRetornados_Consulados_por_a_o[".fieldsForRegister"] = array();

$tdataRetornados_Consulados_por_a_o[".listAjax"] = false;

	$tdataRetornados_Consulados_por_a_o[".audit"] = false;

	$tdataRetornados_Consulados_por_a_o[".locking"] = false;



$tdataRetornados_Consulados_por_a_o[".list"] = true;



$tdataRetornados_Consulados_por_a_o[".reorderRecordsByHeader"] = true;





$tdataRetornados_Consulados_por_a_o[".exportTo"] = true;

$tdataRetornados_Consulados_por_a_o[".printFriendly"] = true;


$tdataRetornados_Consulados_por_a_o[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataRetornados_Consulados_por_a_o[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataRetornados_Consulados_por_a_o[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataRetornados_Consulados_por_a_o[".searchSaving"] = false;
//

$tdataRetornados_Consulados_por_a_o[".showSearchPanel"] = true;
		$tdataRetornados_Consulados_por_a_o[".flexibleSearch"] = true;

$tdataRetornados_Consulados_por_a_o[".isUseAjaxSuggest"] = true;






$tdataRetornados_Consulados_por_a_o[".ajaxCodeSnippetAdded"] = false;

$tdataRetornados_Consulados_por_a_o[".buttonsAdded"] = false;

$tdataRetornados_Consulados_por_a_o[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRetornados_Consulados_por_a_o[".isUseTimeForSearch"] = false;





$tdataRetornados_Consulados_por_a_o[".allSearchFields"] = array();
$tdataRetornados_Consulados_por_a_o[".filterFields"] = array();
$tdataRetornados_Consulados_por_a_o[".requiredSearchFields"] = array();

$tdataRetornados_Consulados_por_a_o[".allSearchFields"][] = "año";
		$tdataRetornados_Consulados_por_a_o[".requiredSearchFields"][] = "año";
$tdataRetornados_Consulados_por_a_o[".allSearchFields"][] = "consulado_analisis";
	$tdataRetornados_Consulados_por_a_o[".allSearchFields"][] = "sectorppd";
		$tdataRetornados_Consulados_por_a_o[".requiredSearchFields"][] = "sectorppd";
$tdataRetornados_Consulados_por_a_o[".allSearchFields"][] = "municipio";
		$tdataRetornados_Consulados_por_a_o[".requiredSearchFields"][] = "municipio";
$tdataRetornados_Consulados_por_a_o[".allSearchFields"][] = "departamento";
		$tdataRetornados_Consulados_por_a_o[".requiredSearchFields"][] = "departamento";
$tdataRetornados_Consulados_por_a_o[".allSearchFields"][] = "regionrepatriacion";
		$tdataRetornados_Consulados_por_a_o[".requiredSearchFields"][] = "regionrepatriacion";
$tdataRetornados_Consulados_por_a_o[".allSearchFields"][] = "consulado";
		$tdataRetornados_Consulados_por_a_o[".requiredSearchFields"][] = "consulado";


$tdataRetornados_Consulados_por_a_o[".googleLikeFields"] = array();
$tdataRetornados_Consulados_por_a_o[".googleLikeFields"][] = "año";
$tdataRetornados_Consulados_por_a_o[".googleLikeFields"][] = "consulado_analisis";
$tdataRetornados_Consulados_por_a_o[".googleLikeFields"][] = "sectorppd";
$tdataRetornados_Consulados_por_a_o[".googleLikeFields"][] = "municipio";
$tdataRetornados_Consulados_por_a_o[".googleLikeFields"][] = "departamento";
$tdataRetornados_Consulados_por_a_o[".googleLikeFields"][] = "regionrepatriacion";
$tdataRetornados_Consulados_por_a_o[".googleLikeFields"][] = "consulado";

$tdataRetornados_Consulados_por_a_o[".panelSearchFields"] = array();
$tdataRetornados_Consulados_por_a_o[".searchPanelOptions"] = array();
$tdataRetornados_Consulados_por_a_o[".panelSearchFields"][] = "año";
	$tdataRetornados_Consulados_por_a_o[".panelSearchFields"][] = "sectorppd";
	$tdataRetornados_Consulados_por_a_o[".panelSearchFields"][] = "municipio";
	$tdataRetornados_Consulados_por_a_o[".panelSearchFields"][] = "departamento";
	$tdataRetornados_Consulados_por_a_o[".panelSearchFields"][] = "regionrepatriacion";
	$tdataRetornados_Consulados_por_a_o[".panelSearchFields"][] = "consulado";
	
$tdataRetornados_Consulados_por_a_o[".advSearchFields"] = array();
$tdataRetornados_Consulados_por_a_o[".advSearchFields"][] = "año";
$tdataRetornados_Consulados_por_a_o[".advSearchFields"][] = "consulado_analisis";
$tdataRetornados_Consulados_por_a_o[".advSearchFields"][] = "sectorppd";
$tdataRetornados_Consulados_por_a_o[".advSearchFields"][] = "municipio";
$tdataRetornados_Consulados_por_a_o[".advSearchFields"][] = "departamento";
$tdataRetornados_Consulados_por_a_o[".advSearchFields"][] = "regionrepatriacion";
$tdataRetornados_Consulados_por_a_o[".advSearchFields"][] = "consulado";

$tdataRetornados_Consulados_por_a_o[".tableType"] = "report";

$tdataRetornados_Consulados_por_a_o[".printerPageOrientation"] = 0;
$tdataRetornados_Consulados_por_a_o[".nPrinterPageScale"] = 100;

$tdataRetornados_Consulados_por_a_o[".nPrinterSplitRecords"] = 40;

$tdataRetornados_Consulados_por_a_o[".nPrinterPDFSplitRecords"] = 40;



$tdataRetornados_Consulados_por_a_o[".geocodingEnabled"] = false;

//report settings
$tdataRetornados_Consulados_por_a_o[".crossTabReport"] = true;

$tdataRetornados_Consulados_por_a_o[".reportGroupFields"] = true;
$tdataRetornados_Consulados_por_a_o[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "año";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "consulado_analisis";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdataRetornados_Consulados_por_a_o[".reportGroupFieldsData"] = $reportGroupFields;

$tdataRetornados_Consulados_por_a_o[".reportHorizontalSummary"] = true;

$tdataRetornados_Consulados_por_a_o[".isExistTotalFields"] = true;

$tdataRetornados_Consulados_por_a_o[".reportVerticalSummary"] = true;



$tdataRetornados_Consulados_por_a_o[".repShowDet"] = true;

$tdataRetornados_Consulados_por_a_o[".reportLayout"] = 6;

//end of report settings




$tdataRetornados_Consulados_por_a_o[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY regionrepatriacion";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRetornados_Consulados_por_a_o[".strOrderBy"] = $tstrOrderBy;

$tdataRetornados_Consulados_por_a_o[".orderindexes"] = array();
$tdataRetornados_Consulados_por_a_o[".orderindexes"][] = array(7, (1 ? "ASC" : "DESC"), "regionrepatriacion");

$tdataRetornados_Consulados_por_a_o[".sqlHead"] = "SELECT `año`,  consulado_analisis,  mes,  sectorppd,  municipio,  departamento,  regionrepatriacion,  COUNT(municipio) AS `COUNT(municipio)`,  consulado";
$tdataRetornados_Consulados_por_a_o[".sqlFrom"] = "FROM retornados";
$tdataRetornados_Consulados_por_a_o[".sqlWhereExpr"] = "";
$tdataRetornados_Consulados_por_a_o[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRetornados_Consulados_por_a_o[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRetornados_Consulados_por_a_o[".arrGroupsPerPage"] = $arrGPP;

$tdataRetornados_Consulados_por_a_o[".highlightSearchResults"] = true;

$tableKeysRetornados_Consulados_por_a_o = array();
$tdataRetornados_Consulados_por_a_o[".Keys"] = $tableKeysRetornados_Consulados_por_a_o;

$tdataRetornados_Consulados_por_a_o[".listFields"] = array();
$tdataRetornados_Consulados_por_a_o[".listFields"][] = "año";
$tdataRetornados_Consulados_por_a_o[".listFields"][] = "consulado_analisis";
$tdataRetornados_Consulados_por_a_o[".listFields"][] = "mes";
$tdataRetornados_Consulados_por_a_o[".listFields"][] = "sectorppd";
$tdataRetornados_Consulados_por_a_o[".listFields"][] = "municipio";
$tdataRetornados_Consulados_por_a_o[".listFields"][] = "departamento";
$tdataRetornados_Consulados_por_a_o[".listFields"][] = "regionrepatriacion";
$tdataRetornados_Consulados_por_a_o[".listFields"][] = "COUNT(municipio)";
$tdataRetornados_Consulados_por_a_o[".listFields"][] = "consulado";

$tdataRetornados_Consulados_por_a_o[".hideMobileList"] = array();


$tdataRetornados_Consulados_por_a_o[".viewFields"] = array();
$tdataRetornados_Consulados_por_a_o[".viewFields"][] = "año";
$tdataRetornados_Consulados_por_a_o[".viewFields"][] = "consulado_analisis";
$tdataRetornados_Consulados_por_a_o[".viewFields"][] = "mes";
$tdataRetornados_Consulados_por_a_o[".viewFields"][] = "sectorppd";
$tdataRetornados_Consulados_por_a_o[".viewFields"][] = "municipio";
$tdataRetornados_Consulados_por_a_o[".viewFields"][] = "departamento";
$tdataRetornados_Consulados_por_a_o[".viewFields"][] = "regionrepatriacion";
$tdataRetornados_Consulados_por_a_o[".viewFields"][] = "COUNT(municipio)";
$tdataRetornados_Consulados_por_a_o[".viewFields"][] = "consulado";

$tdataRetornados_Consulados_por_a_o[".addFields"] = array();
$tdataRetornados_Consulados_por_a_o[".addFields"][] = "año";
$tdataRetornados_Consulados_por_a_o[".addFields"][] = "consulado_analisis";
$tdataRetornados_Consulados_por_a_o[".addFields"][] = "mes";
$tdataRetornados_Consulados_por_a_o[".addFields"][] = "sectorppd";
$tdataRetornados_Consulados_por_a_o[".addFields"][] = "municipio";
$tdataRetornados_Consulados_por_a_o[".addFields"][] = "departamento";
$tdataRetornados_Consulados_por_a_o[".addFields"][] = "regionrepatriacion";
$tdataRetornados_Consulados_por_a_o[".addFields"][] = "consulado";

$tdataRetornados_Consulados_por_a_o[".masterListFields"] = array();
$tdataRetornados_Consulados_por_a_o[".masterListFields"][] = "año";
$tdataRetornados_Consulados_por_a_o[".masterListFields"][] = "consulado_analisis";
$tdataRetornados_Consulados_por_a_o[".masterListFields"][] = "mes";
$tdataRetornados_Consulados_por_a_o[".masterListFields"][] = "sectorppd";
$tdataRetornados_Consulados_por_a_o[".masterListFields"][] = "municipio";
$tdataRetornados_Consulados_por_a_o[".masterListFields"][] = "departamento";
$tdataRetornados_Consulados_por_a_o[".masterListFields"][] = "regionrepatriacion";
$tdataRetornados_Consulados_por_a_o[".masterListFields"][] = "COUNT(municipio)";
$tdataRetornados_Consulados_por_a_o[".masterListFields"][] = "consulado";

$tdataRetornados_Consulados_por_a_o[".inlineAddFields"] = array();
$tdataRetornados_Consulados_por_a_o[".inlineAddFields"][] = "año";
$tdataRetornados_Consulados_por_a_o[".inlineAddFields"][] = "consulado_analisis";
$tdataRetornados_Consulados_por_a_o[".inlineAddFields"][] = "mes";
$tdataRetornados_Consulados_por_a_o[".inlineAddFields"][] = "sectorppd";
$tdataRetornados_Consulados_por_a_o[".inlineAddFields"][] = "municipio";
$tdataRetornados_Consulados_por_a_o[".inlineAddFields"][] = "departamento";
$tdataRetornados_Consulados_por_a_o[".inlineAddFields"][] = "regionrepatriacion";
$tdataRetornados_Consulados_por_a_o[".inlineAddFields"][] = "consulado";

$tdataRetornados_Consulados_por_a_o[".editFields"] = array();
$tdataRetornados_Consulados_por_a_o[".editFields"][] = "año";
$tdataRetornados_Consulados_por_a_o[".editFields"][] = "consulado_analisis";
$tdataRetornados_Consulados_por_a_o[".editFields"][] = "mes";
$tdataRetornados_Consulados_por_a_o[".editFields"][] = "sectorppd";
$tdataRetornados_Consulados_por_a_o[".editFields"][] = "municipio";
$tdataRetornados_Consulados_por_a_o[".editFields"][] = "departamento";
$tdataRetornados_Consulados_por_a_o[".editFields"][] = "regionrepatriacion";
$tdataRetornados_Consulados_por_a_o[".editFields"][] = "consulado";

$tdataRetornados_Consulados_por_a_o[".inlineEditFields"] = array();
$tdataRetornados_Consulados_por_a_o[".inlineEditFields"][] = "año";
$tdataRetornados_Consulados_por_a_o[".inlineEditFields"][] = "consulado_analisis";
$tdataRetornados_Consulados_por_a_o[".inlineEditFields"][] = "mes";
$tdataRetornados_Consulados_por_a_o[".inlineEditFields"][] = "sectorppd";
$tdataRetornados_Consulados_por_a_o[".inlineEditFields"][] = "municipio";
$tdataRetornados_Consulados_por_a_o[".inlineEditFields"][] = "departamento";
$tdataRetornados_Consulados_por_a_o[".inlineEditFields"][] = "regionrepatriacion";
$tdataRetornados_Consulados_por_a_o[".inlineEditFields"][] = "consulado";

$tdataRetornados_Consulados_por_a_o[".updateSelectedFields"] = array();
$tdataRetornados_Consulados_por_a_o[".updateSelectedFields"][] = "año";
$tdataRetornados_Consulados_por_a_o[".updateSelectedFields"][] = "consulado_analisis";
$tdataRetornados_Consulados_por_a_o[".updateSelectedFields"][] = "mes";
$tdataRetornados_Consulados_por_a_o[".updateSelectedFields"][] = "sectorppd";
$tdataRetornados_Consulados_por_a_o[".updateSelectedFields"][] = "municipio";
$tdataRetornados_Consulados_por_a_o[".updateSelectedFields"][] = "departamento";
$tdataRetornados_Consulados_por_a_o[".updateSelectedFields"][] = "regionrepatriacion";
$tdataRetornados_Consulados_por_a_o[".updateSelectedFields"][] = "consulado";


$tdataRetornados_Consulados_por_a_o[".exportFields"] = array();
$tdataRetornados_Consulados_por_a_o[".exportFields"][] = "año";
$tdataRetornados_Consulados_por_a_o[".exportFields"][] = "consulado_analisis";
$tdataRetornados_Consulados_por_a_o[".exportFields"][] = "mes";
$tdataRetornados_Consulados_por_a_o[".exportFields"][] = "sectorppd";
$tdataRetornados_Consulados_por_a_o[".exportFields"][] = "municipio";
$tdataRetornados_Consulados_por_a_o[".exportFields"][] = "departamento";
$tdataRetornados_Consulados_por_a_o[".exportFields"][] = "regionrepatriacion";
$tdataRetornados_Consulados_por_a_o[".exportFields"][] = "COUNT(municipio)";
$tdataRetornados_Consulados_por_a_o[".exportFields"][] = "consulado";

$tdataRetornados_Consulados_por_a_o[".importFields"] = array();
$tdataRetornados_Consulados_por_a_o[".importFields"][] = "año";
$tdataRetornados_Consulados_por_a_o[".importFields"][] = "consulado_analisis";
$tdataRetornados_Consulados_por_a_o[".importFields"][] = "mes";
$tdataRetornados_Consulados_por_a_o[".importFields"][] = "sectorppd";
$tdataRetornados_Consulados_por_a_o[".importFields"][] = "municipio";
$tdataRetornados_Consulados_por_a_o[".importFields"][] = "departamento";
$tdataRetornados_Consulados_por_a_o[".importFields"][] = "regionrepatriacion";
$tdataRetornados_Consulados_por_a_o[".importFields"][] = "COUNT(municipio)";
$tdataRetornados_Consulados_por_a_o[".importFields"][] = "consulado";

$tdataRetornados_Consulados_por_a_o[".printFields"] = array();
$tdataRetornados_Consulados_por_a_o[".printFields"][] = "año";
$tdataRetornados_Consulados_por_a_o[".printFields"][] = "consulado_analisis";
$tdataRetornados_Consulados_por_a_o[".printFields"][] = "mes";
$tdataRetornados_Consulados_por_a_o[".printFields"][] = "sectorppd";
$tdataRetornados_Consulados_por_a_o[".printFields"][] = "municipio";
$tdataRetornados_Consulados_por_a_o[".printFields"][] = "departamento";
$tdataRetornados_Consulados_por_a_o[".printFields"][] = "regionrepatriacion";
$tdataRetornados_Consulados_por_a_o[".printFields"][] = "COUNT(municipio)";
$tdataRetornados_Consulados_por_a_o[".printFields"][] = "consulado";

//	año
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "año";
	$fdata["GoodName"] = "a_o";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Consulados_por_a_o","a_o");
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataRetornados_Consulados_por_a_o["año"] = $fdata;
//	consulado_analisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "consulado_analisis";
	$fdata["GoodName"] = "consulado_analisis";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Consulados_por_a_o","consulado_analisis");
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

		$fdata["strField"] = "consulado_analisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "consulado_analisis";

	
	
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




	$tdataRetornados_Consulados_por_a_o["consulado_analisis"] = $fdata;
//	mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mes";
	$fdata["GoodName"] = "mes";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Consulados_por_a_o","mes");
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








	$tdataRetornados_Consulados_por_a_o["mes"] = $fdata;
//	sectorppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sectorppd";
	$fdata["GoodName"] = "sectorppd";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Consulados_por_a_o","sectorppd");
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




	$tdataRetornados_Consulados_por_a_o["sectorppd"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Consulados_por_a_o","municipio");
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




	$tdataRetornados_Consulados_por_a_o["municipio"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Consulados_por_a_o","departamento");
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




	$tdataRetornados_Consulados_por_a_o["departamento"] = $fdata;
//	regionrepatriacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "regionrepatriacion";
	$fdata["GoodName"] = "regionrepatriacion";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Consulados_por_a_o","regionrepatriacion");
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




	$tdataRetornados_Consulados_por_a_o["regionrepatriacion"] = $fdata;
//	COUNT(municipio)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "COUNT(municipio)";
	$fdata["GoodName"] = "COUNT_municipio_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Retornados_Consulados_por_a_o","COUNT_municipio_");
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








	$tdataRetornados_Consulados_por_a_o["COUNT(municipio)"] = $fdata;
//	consulado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "consulado";
	$fdata["GoodName"] = "consulado";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Consulados_por_a_o","consulado");
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

		$fdata["strField"] = "consulado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "consulado";

	
	
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




	$tdataRetornados_Consulados_por_a_o["consulado"] = $fdata;


$tables_data["Retornados-Consulados por año"]=&$tdataRetornados_Consulados_por_a_o;
$field_labels["Retornados_Consulados_por_a_o"] = &$fieldLabelsRetornados_Consulados_por_a_o;
$fieldToolTips["Retornados_Consulados_por_a_o"] = &$fieldToolTipsRetornados_Consulados_por_a_o;
$placeHolders["Retornados_Consulados_por_a_o"] = &$placeHoldersRetornados_Consulados_por_a_o;
$page_titles["Retornados_Consulados_por_a_o"] = &$pageTitlesRetornados_Consulados_por_a_o;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Retornados-Consulados por año"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Retornados_Consulados_por_a_o()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`año`,  consulado_analisis,  mes,  sectorppd,  municipio,  departamento,  regionrepatriacion,  COUNT(municipio) AS `COUNT(municipio)`,  consulado";
$proto0["m_strFrom"] = "FROM retornados";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY regionrepatriacion";
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
	"m_srcTableName" => "Retornados-Consulados por año"
));

$proto6["m_sql"] = "`año`";
$proto6["m_srcTableName"] = "Retornados-Consulados por año";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "consulado_analisis",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Consulados por año"
));

$proto8["m_sql"] = "consulado_analisis";
$proto8["m_srcTableName"] = "Retornados-Consulados por año";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mes",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Consulados por año"
));

$proto10["m_sql"] = "mes";
$proto10["m_srcTableName"] = "Retornados-Consulados por año";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sectorppd",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Consulados por año"
));

$proto12["m_sql"] = "sectorppd";
$proto12["m_srcTableName"] = "Retornados-Consulados por año";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Consulados por año"
));

$proto14["m_sql"] = "municipio";
$proto14["m_srcTableName"] = "Retornados-Consulados por año";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Consulados por año"
));

$proto16["m_sql"] = "departamento";
$proto16["m_srcTableName"] = "Retornados-Consulados por año";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "regionrepatriacion",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Consulados por año"
));

$proto18["m_sql"] = "regionrepatriacion";
$proto18["m_srcTableName"] = "Retornados-Consulados por año";
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
	"m_srcTableName" => "Retornados-Consulados por año"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "COUNT(municipio)";
$proto20["m_srcTableName"] = "Retornados-Consulados por año";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "COUNT(municipio)";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "consulado",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Consulados por año"
));

$proto23["m_sql"] = "consulado";
$proto23["m_srcTableName"] = "Retornados-Consulados por año";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "retornados";
$proto26["m_srcTableName"] = "Retornados-Consulados por año";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "año";
$proto26["m_columns"][] = "mes";
$proto26["m_columns"][] = "fechaentrevista";
$proto26["m_columns"][] = "tipoentrevista";
$proto26["m_columns"][] = "ficha";
$proto26["m_columns"][] = "numalien";
$proto26["m_columns"][] = "fechanacimiento";
$proto26["m_columns"][] = "documentoficha";
$proto26["m_columns"][] = "numerodocumento";
$proto26["m_columns"][] = "nombredocumento";
$proto26["m_columns"][] = "consulado";
$proto26["m_columns"][] = "consulado_analisis";
$proto26["m_columns"][] = "departamento";
$proto26["m_columns"][] = "municipio";
$proto26["m_columns"][] = "sexo";
$proto26["m_columns"][] = "edad";
$proto26["m_columns"][] = "rango_etario";
$proto26["m_columns"][] = "tipoedad";
$proto26["m_columns"][] = "paisrepatriacion";
$proto26["m_columns"][] = "regionrepatriacion";
$proto26["m_columns"][] = "antecedentes_penales";
$proto26["m_columns"][] = "tipo_antecedentes";
$proto26["m_columns"][] = "antecedentes";
$proto26["m_columns"][] = "sectorppd";
$proto26["m_columns"][] = "num_mes";
$proto26["m_columns"][] = "antecedente_analisis";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "retornados";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "Retornados-Consulados por año";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "año",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Consulados por año"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "consulado_analisis",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Consulados por año"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "mes",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Consulados por año"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "sectorppd",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Consulados por año"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Consulados por año"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Consulados por año"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "regionrepatriacion",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Consulados por año"
));

$proto41["m_column"]=$obj;
$obj = new SQLGroupByItem($proto41);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "regionrepatriacion",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Consulados por año"
));

$proto43["m_column"]=$obj;
$proto43["m_bAsc"] = 1;
$proto43["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto43);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Retornados-Consulados por año";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Retornados_Consulados_por_a_o = createSqlQuery_Retornados_Consulados_por_a_o();


	
		;

									

$tdataRetornados_Consulados_por_a_o[".sqlquery"] = $queryData_Retornados_Consulados_por_a_o;

$tableEvents["Retornados-Consulados por año"] = new eventsBase;
$tdataRetornados_Consulados_por_a_o[".hasEvents"] = false;

?>