<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino = array();
	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".truncateText"] = true;
	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".NumberOfChars"] = 80;
	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".ShortName"] = "Retornados_Rango_etario_por_antecedentes_g_nero_femenino";
	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".OwnerID"] = "";
	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".OriginalTable"] = "retornados";

//	field labels
$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_femenino = array();
$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino = array();
$pageTitlesRetornados_Rango_etario_por_antecedentes_g_nero_femenino = array();
$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_femenino = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"] = array();
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"] = array();
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"] = array();
	$pageTitlesRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"] = array();
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["a_o"] = "Año";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["a_o"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["a_o"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["departamento"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["departamento"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["municipio"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["municipio"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["sectorppd"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["sectorppd"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["COUNT_municipio_"] = "COUNT(municipio)";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["COUNT_municipio_"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["COUNT_municipio_"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["rango_etario"] = "Rango Etario";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["rango_etario"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["rango_etario"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["antecedentes_penales"] = "Antecedentes Penales";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["antecedentes_penales"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["antecedentes_penales"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["sexo"] = "Sexo";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["sexo"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]["sexo"] = "";
	if (count($fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["Spanish"]))
		$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"] = array();
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"] = array();
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"] = array();
	$pageTitlesRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"] = array();
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["a_o"] = "Año";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["a_o"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["a_o"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["departamento"] = "Departamento";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["departamento"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["departamento"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["municipio"] = "Municipio";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["municipio"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["municipio"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["sectorppd"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["sectorppd"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["COUNT_municipio_"] = "COUNT(municipio)";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["COUNT_municipio_"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["COUNT_municipio_"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["rango_etario"] = "Rango Etario";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["rango_etario"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["rango_etario"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["antecedentes_penales"] = "Antecedentes Penales";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["antecedentes_penales"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["antecedentes_penales"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["sexo"] = "Sexo";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["sexo"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]["sexo"] = "";
	if (count($fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino["English"]))
		$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_femenino[""] = array();
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino[""] = array();
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_femenino[""] = array();
	$pageTitlesRetornados_Rango_etario_por_antecedentes_g_nero_femenino[""] = array();
	if (count($fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino[""]))
		$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".isUseToolTips"] = true;
}


	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".NCSearch"] = true;



$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".shortTableName"] = "Retornados_Rango_etario_por_antecedentes_g_nero_femenino";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".nSecOptions"] = 0;
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".recsPerRowPrint"] = 1;
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".mainTableOwnerID"] = "";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".moveNext"] = 1;
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".entityType"] = 2;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".strOriginalTableName"] = "retornados";

	



$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".showAddInPopup"] = false;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".showEditInPopup"] = false;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".fieldsForRegister"] = array();

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".listAjax"] = false;

	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".audit"] = false;

	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".locking"] = false;



$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".list"] = true;



$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".reorderRecordsByHeader"] = true;





$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".exportTo"] = true;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".printFriendly"] = true;


$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".searchSaving"] = false;
//

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".showSearchPanel"] = true;
		$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".flexibleSearch"] = true;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".isUseAjaxSuggest"] = true;






$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".ajaxCodeSnippetAdded"] = false;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".buttonsAdded"] = false;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".isUseTimeForSearch"] = false;





$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".allSearchFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".filterFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".requiredSearchFields"] = array();

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".allSearchFields"][] = "año";
		$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".requiredSearchFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".allSearchFields"][] = "sectorppd";
		$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".requiredSearchFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".allSearchFields"][] = "municipio";
		$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".requiredSearchFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".allSearchFields"][] = "departamento";
		$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".requiredSearchFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".allSearchFields"][] = "sexo";
	

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".googleLikeFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".googleLikeFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".googleLikeFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".googleLikeFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".googleLikeFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".googleLikeFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".panelSearchFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".searchPanelOptions"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".panelSearchFields"][] = "año";
	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".panelSearchFields"][] = "sectorppd";
	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".panelSearchFields"][] = "municipio";
	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".panelSearchFields"][] = "departamento";
	
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".advSearchFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".advSearchFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".advSearchFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".advSearchFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".advSearchFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".advSearchFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".tableType"] = "report";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".printerPageOrientation"] = 0;
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".nPrinterPageScale"] = 100;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".nPrinterSplitRecords"] = 40;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".nPrinterPDFSplitRecords"] = 40;



$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".geocodingEnabled"] = false;

//report settings
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".crossTabReport"] = true;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".reportGroupFields"] = true;
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "antecedentes_penales";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "rango_etario";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".reportGroupFieldsData"] = $reportGroupFields;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".reportHorizontalSummary"] = true;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".isExistTotalFields"] = true;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".reportVerticalSummary"] = true;



$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".repShowDet"] = true;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".reportLayout"] = 6;

//end of report settings




$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY rango_etario";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".strOrderBy"] = $tstrOrderBy;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".orderindexes"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".orderindexes"][] = array(6, (1 ? "ASC" : "DESC"), "rango_etario");

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".sqlHead"] = "SELECT `año`,  sectorppd,  municipio,  departamento,  COUNT(municipio) AS `COUNT(municipio)`,  rango_etario,  antecedentes_penales,  sexo";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".sqlFrom"] = "FROM retornados";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".sqlWhereExpr"] = "sexo ='F'";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".arrGroupsPerPage"] = $arrGPP;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".highlightSearchResults"] = true;

$tableKeysRetornados_Rango_etario_por_antecedentes_g_nero_femenino = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".Keys"] = $tableKeysRetornados_Rango_etario_por_antecedentes_g_nero_femenino;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".listFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".listFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".listFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".listFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".listFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".listFields"][] = "COUNT(municipio)";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".listFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".listFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".listFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".hideMobileList"] = array();


$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".viewFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".viewFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".viewFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".viewFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".viewFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".viewFields"][] = "COUNT(municipio)";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".viewFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".viewFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".viewFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".addFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".addFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".addFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".addFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".addFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".addFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".addFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".addFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".masterListFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".masterListFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".masterListFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".masterListFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".masterListFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".masterListFields"][] = "COUNT(municipio)";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".masterListFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".masterListFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".masterListFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".inlineAddFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".inlineAddFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".inlineAddFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".inlineAddFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".inlineAddFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".inlineAddFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".inlineAddFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".inlineAddFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".editFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".editFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".editFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".editFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".editFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".editFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".editFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".editFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".inlineEditFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".inlineEditFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".inlineEditFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".inlineEditFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".inlineEditFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".inlineEditFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".inlineEditFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".inlineEditFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".updateSelectedFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".updateSelectedFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".updateSelectedFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".updateSelectedFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".updateSelectedFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".updateSelectedFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".updateSelectedFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".updateSelectedFields"][] = "sexo";


$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".exportFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".exportFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".exportFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".exportFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".exportFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".exportFields"][] = "COUNT(municipio)";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".exportFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".exportFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".exportFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".importFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".importFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".importFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".importFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".importFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".importFields"][] = "COUNT(municipio)";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".importFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".importFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".importFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".printFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".printFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".printFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".printFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".printFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".printFields"][] = "COUNT(municipio)";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".printFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".printFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".printFields"][] = "sexo";

//	año
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "año";
	$fdata["GoodName"] = "a_o";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_antecedentes_g_nero_femenino","a_o");
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




	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino["año"] = $fdata;
//	sectorppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sectorppd";
	$fdata["GoodName"] = "sectorppd";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_antecedentes_g_nero_femenino","sectorppd");
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




	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino["sectorppd"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_antecedentes_g_nero_femenino","municipio");
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




	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino["municipio"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_antecedentes_g_nero_femenino","departamento");
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




	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino["departamento"] = $fdata;
//	COUNT(municipio)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "COUNT(municipio)";
	$fdata["GoodName"] = "COUNT_municipio_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_antecedentes_g_nero_femenino","COUNT_municipio_");
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








	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino["COUNT(municipio)"] = $fdata;
//	rango_etario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "rango_etario";
	$fdata["GoodName"] = "rango_etario";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_antecedentes_g_nero_femenino","rango_etario");
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

		$fdata["strField"] = "rango_etario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rango_etario";

	
	
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








	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino["rango_etario"] = $fdata;
//	antecedentes_penales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "antecedentes_penales";
	$fdata["GoodName"] = "antecedentes_penales";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_antecedentes_g_nero_femenino","antecedentes_penales");
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

		$fdata["strField"] = "antecedentes_penales";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "antecedentes_penales";

	
	
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








	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino["antecedentes_penales"] = $fdata;
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_antecedentes_g_nero_femenino","sexo");
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

		$fdata["strField"] = "sexo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sexo";

	
	
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




	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino["sexo"] = $fdata;


$tables_data["Retornados-Rango etario por antecedentes género femenino"]=&$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino;
$field_labels["Retornados_Rango_etario_por_antecedentes_g_nero_femenino"] = &$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_femenino;
$fieldToolTips["Retornados_Rango_etario_por_antecedentes_g_nero_femenino"] = &$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_femenino;
$placeHolders["Retornados_Rango_etario_por_antecedentes_g_nero_femenino"] = &$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_femenino;
$page_titles["Retornados_Rango_etario_por_antecedentes_g_nero_femenino"] = &$pageTitlesRetornados_Rango_etario_por_antecedentes_g_nero_femenino;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Retornados-Rango etario por antecedentes género femenino"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Retornados_Rango_etario_por_antecedentes_g_nero_femenino()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`año`,  sectorppd,  municipio,  departamento,  COUNT(municipio) AS `COUNT(municipio)`,  rango_etario,  antecedentes_penales,  sexo";
$proto0["m_strFrom"] = "FROM retornados";
$proto0["m_strWhere"] = "sexo ='F'";
$proto0["m_strOrderBy"] = "ORDER BY rango_etario";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "sexo ='F'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género femenino"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "='F'";
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
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género femenino"
));

$proto6["m_sql"] = "`año`";
$proto6["m_srcTableName"] = "Retornados-Rango etario por antecedentes género femenino";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sectorppd",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género femenino"
));

$proto8["m_sql"] = "sectorppd";
$proto8["m_srcTableName"] = "Retornados-Rango etario por antecedentes género femenino";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género femenino"
));

$proto10["m_sql"] = "municipio";
$proto10["m_srcTableName"] = "Retornados-Rango etario por antecedentes género femenino";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género femenino"
));

$proto12["m_sql"] = "departamento";
$proto12["m_srcTableName"] = "Retornados-Rango etario por antecedentes género femenino";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_COUNT";
$proto15["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género femenino"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(municipio)";
$proto14["m_srcTableName"] = "Retornados-Rango etario por antecedentes género femenino";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "COUNT(municipio)";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "rango_etario",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género femenino"
));

$proto17["m_sql"] = "rango_etario";
$proto17["m_srcTableName"] = "Retornados-Rango etario por antecedentes género femenino";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "antecedentes_penales",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género femenino"
));

$proto19["m_sql"] = "antecedentes_penales";
$proto19["m_srcTableName"] = "Retornados-Rango etario por antecedentes género femenino";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género femenino"
));

$proto21["m_sql"] = "sexo";
$proto21["m_srcTableName"] = "Retornados-Rango etario por antecedentes género femenino";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "retornados";
$proto24["m_srcTableName"] = "Retornados-Rango etario por antecedentes género femenino";
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
$proto23["m_srcTableName"] = "Retornados-Rango etario por antecedentes género femenino";
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
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género femenino"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "sectorppd",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género femenino"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género femenino"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género femenino"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "rango_etario",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género femenino"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "antecedentes_penales",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género femenino"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género femenino"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "rango_etario",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género femenino"
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 1;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Retornados-Rango etario por antecedentes género femenino";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Retornados_Rango_etario_por_antecedentes_g_nero_femenino = createSqlQuery_Retornados_Rango_etario_por_antecedentes_g_nero_femenino();


	
		;

								

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".sqlquery"] = $queryData_Retornados_Rango_etario_por_antecedentes_g_nero_femenino;

$tableEvents["Retornados-Rango etario por antecedentes género femenino"] = new eventsBase;
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_femenino[".hasEvents"] = false;

?>