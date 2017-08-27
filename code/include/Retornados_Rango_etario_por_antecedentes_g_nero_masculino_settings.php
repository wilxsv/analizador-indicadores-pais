<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino = array();
	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".truncateText"] = true;
	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".NumberOfChars"] = 80;
	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".ShortName"] = "Retornados_Rango_etario_por_antecedentes_g_nero_masculino";
	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".OwnerID"] = "";
	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".OriginalTable"] = "retornados";

//	field labels
$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_masculino = array();
$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino = array();
$pageTitlesRetornados_Rango_etario_por_antecedentes_g_nero_masculino = array();
$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_masculino = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"] = array();
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"] = array();
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"] = array();
	$pageTitlesRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"] = array();
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["a_o"] = "Año";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["a_o"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["a_o"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["departamento"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["departamento"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["municipio"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["municipio"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["sectorppd"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["sectorppd"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["COUNT_municipio_"] = "COUNT(municipio)";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["COUNT_municipio_"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["COUNT_municipio_"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["rango_etario"] = "Rango Etario";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["rango_etario"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["rango_etario"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["antecedentes_penales"] = "Antecedentes Penales";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["antecedentes_penales"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["antecedentes_penales"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["sexo"] = "Sexo";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["sexo"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]["sexo"] = "";
	if (count($fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["Spanish"]))
		$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"] = array();
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"] = array();
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"] = array();
	$pageTitlesRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"] = array();
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["a_o"] = "Año";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["a_o"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["a_o"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["departamento"] = "Departamento";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["departamento"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["departamento"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["municipio"] = "Municipio";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["municipio"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["municipio"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["sectorppd"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["sectorppd"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["COUNT_municipio_"] = "COUNT(municipio)";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["COUNT_municipio_"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["COUNT_municipio_"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["rango_etario"] = "Rango Etario";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["rango_etario"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["rango_etario"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["antecedentes_penales"] = "Antecedentes Penales";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["antecedentes_penales"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["antecedentes_penales"] = "";
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["sexo"] = "Sexo";
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["sexo"] = "";
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]["sexo"] = "";
	if (count($fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino["English"]))
		$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_masculino[""] = array();
	$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino[""] = array();
	$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_masculino[""] = array();
	$pageTitlesRetornados_Rango_etario_por_antecedentes_g_nero_masculino[""] = array();
	if (count($fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino[""]))
		$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".isUseToolTips"] = true;
}


	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".NCSearch"] = true;



$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".shortTableName"] = "Retornados_Rango_etario_por_antecedentes_g_nero_masculino";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".nSecOptions"] = 0;
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".recsPerRowPrint"] = 1;
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".mainTableOwnerID"] = "";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".moveNext"] = 1;
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".entityType"] = 2;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".strOriginalTableName"] = "retornados";

	



$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".showAddInPopup"] = false;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".showEditInPopup"] = false;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".fieldsForRegister"] = array();

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".listAjax"] = false;

	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".audit"] = false;

	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".locking"] = false;



$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".list"] = true;



$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".reorderRecordsByHeader"] = true;





$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".exportTo"] = true;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".printFriendly"] = true;


$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".searchSaving"] = false;
//

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".showSearchPanel"] = true;
		$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".flexibleSearch"] = true;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".isUseAjaxSuggest"] = true;






$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".ajaxCodeSnippetAdded"] = false;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".buttonsAdded"] = false;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".isUseTimeForSearch"] = false;





$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".allSearchFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".filterFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".requiredSearchFields"] = array();

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".allSearchFields"][] = "año";
		$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".requiredSearchFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".allSearchFields"][] = "sectorppd";
		$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".requiredSearchFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".allSearchFields"][] = "municipio";
		$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".requiredSearchFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".allSearchFields"][] = "departamento";
		$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".requiredSearchFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".allSearchFields"][] = "sexo";
	

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".googleLikeFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".googleLikeFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".googleLikeFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".googleLikeFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".googleLikeFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".googleLikeFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".panelSearchFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".searchPanelOptions"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".panelSearchFields"][] = "año";
	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".panelSearchFields"][] = "sectorppd";
	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".panelSearchFields"][] = "municipio";
	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".panelSearchFields"][] = "departamento";
	
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".advSearchFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".advSearchFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".advSearchFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".advSearchFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".advSearchFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".advSearchFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".tableType"] = "report";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".printerPageOrientation"] = 0;
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".nPrinterPageScale"] = 100;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".nPrinterSplitRecords"] = 40;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".nPrinterPDFSplitRecords"] = 40;



$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".geocodingEnabled"] = false;

//report settings
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".crossTabReport"] = true;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".reportGroupFields"] = true;
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".pageSize"] = 5;
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
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".reportGroupFieldsData"] = $reportGroupFields;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".reportHorizontalSummary"] = true;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".isExistTotalFields"] = true;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".reportVerticalSummary"] = true;



$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".repShowDet"] = true;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".reportLayout"] = 6;

//end of report settings




$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY rango_etario";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".strOrderBy"] = $tstrOrderBy;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".orderindexes"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".orderindexes"][] = array(6, (1 ? "ASC" : "DESC"), "rango_etario");

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".sqlHead"] = "SELECT `año`,  sectorppd,  municipio,  departamento,  COUNT(municipio) AS `COUNT(municipio)`,  rango_etario,  antecedentes_penales,  sexo";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".sqlFrom"] = "FROM retornados";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".sqlWhereExpr"] = "sexo ='M'";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".arrGroupsPerPage"] = $arrGPP;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".highlightSearchResults"] = true;

$tableKeysRetornados_Rango_etario_por_antecedentes_g_nero_masculino = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".Keys"] = $tableKeysRetornados_Rango_etario_por_antecedentes_g_nero_masculino;

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".listFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".listFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".listFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".listFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".listFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".listFields"][] = "COUNT(municipio)";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".listFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".listFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".listFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".hideMobileList"] = array();


$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".viewFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".viewFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".viewFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".viewFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".viewFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".viewFields"][] = "COUNT(municipio)";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".viewFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".viewFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".viewFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".addFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".addFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".addFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".addFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".addFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".addFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".addFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".addFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".masterListFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".masterListFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".masterListFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".masterListFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".masterListFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".masterListFields"][] = "COUNT(municipio)";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".masterListFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".masterListFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".masterListFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".inlineAddFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".inlineAddFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".inlineAddFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".inlineAddFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".inlineAddFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".inlineAddFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".inlineAddFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".inlineAddFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".editFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".editFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".editFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".editFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".editFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".editFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".editFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".editFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".inlineEditFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".inlineEditFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".inlineEditFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".inlineEditFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".inlineEditFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".inlineEditFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".inlineEditFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".inlineEditFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".updateSelectedFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".updateSelectedFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".updateSelectedFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".updateSelectedFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".updateSelectedFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".updateSelectedFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".updateSelectedFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".updateSelectedFields"][] = "sexo";


$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".exportFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".exportFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".exportFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".exportFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".exportFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".exportFields"][] = "COUNT(municipio)";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".exportFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".exportFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".exportFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".importFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".importFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".importFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".importFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".importFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".importFields"][] = "COUNT(municipio)";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".importFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".importFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".importFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".printFields"] = array();
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".printFields"][] = "año";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".printFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".printFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".printFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".printFields"][] = "COUNT(municipio)";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".printFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".printFields"][] = "antecedentes_penales";
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".printFields"][] = "sexo";

//	año
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "año";
	$fdata["GoodName"] = "a_o";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_antecedentes_g_nero_masculino","a_o");
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




	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino["año"] = $fdata;
//	sectorppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sectorppd";
	$fdata["GoodName"] = "sectorppd";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_antecedentes_g_nero_masculino","sectorppd");
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




	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino["sectorppd"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_antecedentes_g_nero_masculino","municipio");
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




	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino["municipio"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_antecedentes_g_nero_masculino","departamento");
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




	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino["departamento"] = $fdata;
//	COUNT(municipio)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "COUNT(municipio)";
	$fdata["GoodName"] = "COUNT_municipio_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_antecedentes_g_nero_masculino","COUNT_municipio_");
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








	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino["COUNT(municipio)"] = $fdata;
//	rango_etario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "rango_etario";
	$fdata["GoodName"] = "rango_etario";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_antecedentes_g_nero_masculino","rango_etario");
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








	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino["rango_etario"] = $fdata;
//	antecedentes_penales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "antecedentes_penales";
	$fdata["GoodName"] = "antecedentes_penales";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_antecedentes_g_nero_masculino","antecedentes_penales");
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








	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino["antecedentes_penales"] = $fdata;
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_antecedentes_g_nero_masculino","sexo");
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




	$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino["sexo"] = $fdata;


$tables_data["Retornados-Rango etario por antecedentes género masculino"]=&$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino;
$field_labels["Retornados_Rango_etario_por_antecedentes_g_nero_masculino"] = &$fieldLabelsRetornados_Rango_etario_por_antecedentes_g_nero_masculino;
$fieldToolTips["Retornados_Rango_etario_por_antecedentes_g_nero_masculino"] = &$fieldToolTipsRetornados_Rango_etario_por_antecedentes_g_nero_masculino;
$placeHolders["Retornados_Rango_etario_por_antecedentes_g_nero_masculino"] = &$placeHoldersRetornados_Rango_etario_por_antecedentes_g_nero_masculino;
$page_titles["Retornados_Rango_etario_por_antecedentes_g_nero_masculino"] = &$pageTitlesRetornados_Rango_etario_por_antecedentes_g_nero_masculino;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Retornados-Rango etario por antecedentes género masculino"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Retornados_Rango_etario_por_antecedentes_g_nero_masculino()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`año`,  sectorppd,  municipio,  departamento,  COUNT(municipio) AS `COUNT(municipio)`,  rango_etario,  antecedentes_penales,  sexo";
$proto0["m_strFrom"] = "FROM retornados";
$proto0["m_strWhere"] = "sexo ='M'";
$proto0["m_strOrderBy"] = "ORDER BY rango_etario";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "sexo ='M'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género masculino"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "='M'";
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
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género masculino"
));

$proto6["m_sql"] = "`año`";
$proto6["m_srcTableName"] = "Retornados-Rango etario por antecedentes género masculino";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sectorppd",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género masculino"
));

$proto8["m_sql"] = "sectorppd";
$proto8["m_srcTableName"] = "Retornados-Rango etario por antecedentes género masculino";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género masculino"
));

$proto10["m_sql"] = "municipio";
$proto10["m_srcTableName"] = "Retornados-Rango etario por antecedentes género masculino";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género masculino"
));

$proto12["m_sql"] = "departamento";
$proto12["m_srcTableName"] = "Retornados-Rango etario por antecedentes género masculino";
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
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género masculino"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(municipio)";
$proto14["m_srcTableName"] = "Retornados-Rango etario por antecedentes género masculino";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "COUNT(municipio)";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "rango_etario",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género masculino"
));

$proto17["m_sql"] = "rango_etario";
$proto17["m_srcTableName"] = "Retornados-Rango etario por antecedentes género masculino";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "antecedentes_penales",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género masculino"
));

$proto19["m_sql"] = "antecedentes_penales";
$proto19["m_srcTableName"] = "Retornados-Rango etario por antecedentes género masculino";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género masculino"
));

$proto21["m_sql"] = "sexo";
$proto21["m_srcTableName"] = "Retornados-Rango etario por antecedentes género masculino";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "retornados";
$proto24["m_srcTableName"] = "Retornados-Rango etario por antecedentes género masculino";
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
$proto23["m_srcTableName"] = "Retornados-Rango etario por antecedentes género masculino";
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
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género masculino"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "sectorppd",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género masculino"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género masculino"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género masculino"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "rango_etario",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género masculino"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "antecedentes_penales",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género masculino"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género masculino"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "rango_etario",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por antecedentes género masculino"
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 1;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Retornados-Rango etario por antecedentes género masculino";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Retornados_Rango_etario_por_antecedentes_g_nero_masculino = createSqlQuery_Retornados_Rango_etario_por_antecedentes_g_nero_masculino();


	
		;

								

$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".sqlquery"] = $queryData_Retornados_Rango_etario_por_antecedentes_g_nero_masculino;

$tableEvents["Retornados-Rango etario por antecedentes género masculino"] = new eventsBase;
$tdataRetornados_Rango_etario_por_antecedentes_g_nero_masculino[".hasEvents"] = false;

?>