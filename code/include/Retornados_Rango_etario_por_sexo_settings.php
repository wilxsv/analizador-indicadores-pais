<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRetornados_Rango_etario_por_sexo = array();
	$tdataRetornados_Rango_etario_por_sexo[".truncateText"] = true;
	$tdataRetornados_Rango_etario_por_sexo[".NumberOfChars"] = 80;
	$tdataRetornados_Rango_etario_por_sexo[".ShortName"] = "Retornados_Rango_etario_por_sexo";
	$tdataRetornados_Rango_etario_por_sexo[".OwnerID"] = "";
	$tdataRetornados_Rango_etario_por_sexo[".OriginalTable"] = "retornados";

//	field labels
$fieldLabelsRetornados_Rango_etario_por_sexo = array();
$fieldToolTipsRetornados_Rango_etario_por_sexo = array();
$pageTitlesRetornados_Rango_etario_por_sexo = array();
$placeHoldersRetornados_Rango_etario_por_sexo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsRetornados_Rango_etario_por_sexo["Spanish"] = array();
	$fieldToolTipsRetornados_Rango_etario_por_sexo["Spanish"] = array();
	$placeHoldersRetornados_Rango_etario_por_sexo["Spanish"] = array();
	$pageTitlesRetornados_Rango_etario_por_sexo["Spanish"] = array();
	$fieldLabelsRetornados_Rango_etario_por_sexo["Spanish"]["a_o"] = "Año";
	$fieldToolTipsRetornados_Rango_etario_por_sexo["Spanish"]["a_o"] = "";
	$placeHoldersRetornados_Rango_etario_por_sexo["Spanish"]["a_o"] = "";
	$fieldLabelsRetornados_Rango_etario_por_sexo["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsRetornados_Rango_etario_por_sexo["Spanish"]["departamento"] = "";
	$placeHoldersRetornados_Rango_etario_por_sexo["Spanish"]["departamento"] = "";
	$fieldLabelsRetornados_Rango_etario_por_sexo["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsRetornados_Rango_etario_por_sexo["Spanish"]["municipio"] = "";
	$placeHoldersRetornados_Rango_etario_por_sexo["Spanish"]["municipio"] = "";
	$fieldLabelsRetornados_Rango_etario_por_sexo["Spanish"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsRetornados_Rango_etario_por_sexo["Spanish"]["sectorppd"] = "";
	$placeHoldersRetornados_Rango_etario_por_sexo["Spanish"]["sectorppd"] = "";
	$fieldLabelsRetornados_Rango_etario_por_sexo["Spanish"]["COUNT_municipio_"] = "COUNT(municipio)";
	$fieldToolTipsRetornados_Rango_etario_por_sexo["Spanish"]["COUNT_municipio_"] = "";
	$placeHoldersRetornados_Rango_etario_por_sexo["Spanish"]["COUNT_municipio_"] = "";
	$fieldLabelsRetornados_Rango_etario_por_sexo["Spanish"]["rango_etario"] = "Rango Etario";
	$fieldToolTipsRetornados_Rango_etario_por_sexo["Spanish"]["rango_etario"] = "";
	$placeHoldersRetornados_Rango_etario_por_sexo["Spanish"]["rango_etario"] = "";
	$fieldLabelsRetornados_Rango_etario_por_sexo["Spanish"]["sexo"] = "Sexo";
	$fieldToolTipsRetornados_Rango_etario_por_sexo["Spanish"]["sexo"] = "";
	$placeHoldersRetornados_Rango_etario_por_sexo["Spanish"]["sexo"] = "";
	if (count($fieldToolTipsRetornados_Rango_etario_por_sexo["Spanish"]))
		$tdataRetornados_Rango_etario_por_sexo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRetornados_Rango_etario_por_sexo["English"] = array();
	$fieldToolTipsRetornados_Rango_etario_por_sexo["English"] = array();
	$placeHoldersRetornados_Rango_etario_por_sexo["English"] = array();
	$pageTitlesRetornados_Rango_etario_por_sexo["English"] = array();
	$fieldLabelsRetornados_Rango_etario_por_sexo["English"]["a_o"] = "Año";
	$fieldToolTipsRetornados_Rango_etario_por_sexo["English"]["a_o"] = "";
	$placeHoldersRetornados_Rango_etario_por_sexo["English"]["a_o"] = "";
	$fieldLabelsRetornados_Rango_etario_por_sexo["English"]["departamento"] = "Departamento";
	$fieldToolTipsRetornados_Rango_etario_por_sexo["English"]["departamento"] = "";
	$placeHoldersRetornados_Rango_etario_por_sexo["English"]["departamento"] = "";
	$fieldLabelsRetornados_Rango_etario_por_sexo["English"]["municipio"] = "Municipio";
	$fieldToolTipsRetornados_Rango_etario_por_sexo["English"]["municipio"] = "";
	$placeHoldersRetornados_Rango_etario_por_sexo["English"]["municipio"] = "";
	$fieldLabelsRetornados_Rango_etario_por_sexo["English"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsRetornados_Rango_etario_por_sexo["English"]["sectorppd"] = "";
	$placeHoldersRetornados_Rango_etario_por_sexo["English"]["sectorppd"] = "";
	$fieldLabelsRetornados_Rango_etario_por_sexo["English"]["COUNT_municipio_"] = "COUNT(municipio)";
	$fieldToolTipsRetornados_Rango_etario_por_sexo["English"]["COUNT_municipio_"] = "";
	$placeHoldersRetornados_Rango_etario_por_sexo["English"]["COUNT_municipio_"] = "";
	$fieldLabelsRetornados_Rango_etario_por_sexo["English"]["rango_etario"] = "Rango Etario";
	$fieldToolTipsRetornados_Rango_etario_por_sexo["English"]["rango_etario"] = "";
	$placeHoldersRetornados_Rango_etario_por_sexo["English"]["rango_etario"] = "";
	$fieldLabelsRetornados_Rango_etario_por_sexo["English"]["sexo"] = "Sexo";
	$fieldToolTipsRetornados_Rango_etario_por_sexo["English"]["sexo"] = "";
	$placeHoldersRetornados_Rango_etario_por_sexo["English"]["sexo"] = "";
	if (count($fieldToolTipsRetornados_Rango_etario_por_sexo["English"]))
		$tdataRetornados_Rango_etario_por_sexo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRetornados_Rango_etario_por_sexo[""] = array();
	$fieldToolTipsRetornados_Rango_etario_por_sexo[""] = array();
	$placeHoldersRetornados_Rango_etario_por_sexo[""] = array();
	$pageTitlesRetornados_Rango_etario_por_sexo[""] = array();
	if (count($fieldToolTipsRetornados_Rango_etario_por_sexo[""]))
		$tdataRetornados_Rango_etario_por_sexo[".isUseToolTips"] = true;
}


	$tdataRetornados_Rango_etario_por_sexo[".NCSearch"] = true;



$tdataRetornados_Rango_etario_por_sexo[".shortTableName"] = "Retornados_Rango_etario_por_sexo";
$tdataRetornados_Rango_etario_por_sexo[".nSecOptions"] = 0;
$tdataRetornados_Rango_etario_por_sexo[".recsPerRowPrint"] = 1;
$tdataRetornados_Rango_etario_por_sexo[".mainTableOwnerID"] = "";
$tdataRetornados_Rango_etario_por_sexo[".moveNext"] = 1;
$tdataRetornados_Rango_etario_por_sexo[".entityType"] = 2;

$tdataRetornados_Rango_etario_por_sexo[".strOriginalTableName"] = "retornados";

	



$tdataRetornados_Rango_etario_por_sexo[".showAddInPopup"] = false;

$tdataRetornados_Rango_etario_por_sexo[".showEditInPopup"] = false;

$tdataRetornados_Rango_etario_por_sexo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRetornados_Rango_etario_por_sexo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRetornados_Rango_etario_por_sexo[".fieldsForRegister"] = array();

$tdataRetornados_Rango_etario_por_sexo[".listAjax"] = false;

	$tdataRetornados_Rango_etario_por_sexo[".audit"] = false;

	$tdataRetornados_Rango_etario_por_sexo[".locking"] = false;



$tdataRetornados_Rango_etario_por_sexo[".list"] = true;



$tdataRetornados_Rango_etario_por_sexo[".reorderRecordsByHeader"] = true;





$tdataRetornados_Rango_etario_por_sexo[".exportTo"] = true;

$tdataRetornados_Rango_etario_por_sexo[".printFriendly"] = true;


$tdataRetornados_Rango_etario_por_sexo[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataRetornados_Rango_etario_por_sexo[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataRetornados_Rango_etario_por_sexo[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataRetornados_Rango_etario_por_sexo[".searchSaving"] = false;
//

$tdataRetornados_Rango_etario_por_sexo[".showSearchPanel"] = true;
		$tdataRetornados_Rango_etario_por_sexo[".flexibleSearch"] = true;

$tdataRetornados_Rango_etario_por_sexo[".isUseAjaxSuggest"] = true;






$tdataRetornados_Rango_etario_por_sexo[".ajaxCodeSnippetAdded"] = false;

$tdataRetornados_Rango_etario_por_sexo[".buttonsAdded"] = false;

$tdataRetornados_Rango_etario_por_sexo[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRetornados_Rango_etario_por_sexo[".isUseTimeForSearch"] = false;





$tdataRetornados_Rango_etario_por_sexo[".allSearchFields"] = array();
$tdataRetornados_Rango_etario_por_sexo[".filterFields"] = array();
$tdataRetornados_Rango_etario_por_sexo[".requiredSearchFields"] = array();

$tdataRetornados_Rango_etario_por_sexo[".allSearchFields"][] = "año";
		$tdataRetornados_Rango_etario_por_sexo[".requiredSearchFields"][] = "año";
$tdataRetornados_Rango_etario_por_sexo[".allSearchFields"][] = "sectorppd";
		$tdataRetornados_Rango_etario_por_sexo[".requiredSearchFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_sexo[".allSearchFields"][] = "municipio";
		$tdataRetornados_Rango_etario_por_sexo[".requiredSearchFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_sexo[".allSearchFields"][] = "departamento";
		$tdataRetornados_Rango_etario_por_sexo[".requiredSearchFields"][] = "departamento";


$tdataRetornados_Rango_etario_por_sexo[".googleLikeFields"] = array();
$tdataRetornados_Rango_etario_por_sexo[".googleLikeFields"][] = "año";
$tdataRetornados_Rango_etario_por_sexo[".googleLikeFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_sexo[".googleLikeFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_sexo[".googleLikeFields"][] = "departamento";

$tdataRetornados_Rango_etario_por_sexo[".panelSearchFields"] = array();
$tdataRetornados_Rango_etario_por_sexo[".searchPanelOptions"] = array();
$tdataRetornados_Rango_etario_por_sexo[".panelSearchFields"][] = "año";
	$tdataRetornados_Rango_etario_por_sexo[".panelSearchFields"][] = "sectorppd";
	$tdataRetornados_Rango_etario_por_sexo[".panelSearchFields"][] = "municipio";
	$tdataRetornados_Rango_etario_por_sexo[".panelSearchFields"][] = "departamento";
	
$tdataRetornados_Rango_etario_por_sexo[".advSearchFields"] = array();
$tdataRetornados_Rango_etario_por_sexo[".advSearchFields"][] = "año";
$tdataRetornados_Rango_etario_por_sexo[".advSearchFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_sexo[".advSearchFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_sexo[".advSearchFields"][] = "departamento";

$tdataRetornados_Rango_etario_por_sexo[".tableType"] = "report";

$tdataRetornados_Rango_etario_por_sexo[".printerPageOrientation"] = 0;
$tdataRetornados_Rango_etario_por_sexo[".nPrinterPageScale"] = 100;

$tdataRetornados_Rango_etario_por_sexo[".nPrinterSplitRecords"] = 40;

$tdataRetornados_Rango_etario_por_sexo[".nPrinterPDFSplitRecords"] = 40;



$tdataRetornados_Rango_etario_por_sexo[".geocodingEnabled"] = false;

//report settings
$tdataRetornados_Rango_etario_por_sexo[".crossTabReport"] = true;

$tdataRetornados_Rango_etario_por_sexo[".reportGroupFields"] = true;
$tdataRetornados_Rango_etario_por_sexo[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "sexo";
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
$tdataRetornados_Rango_etario_por_sexo[".reportGroupFieldsData"] = $reportGroupFields;

$tdataRetornados_Rango_etario_por_sexo[".reportHorizontalSummary"] = true;

$tdataRetornados_Rango_etario_por_sexo[".isExistTotalFields"] = true;

$tdataRetornados_Rango_etario_por_sexo[".reportVerticalSummary"] = true;



$tdataRetornados_Rango_etario_por_sexo[".repShowDet"] = true;

$tdataRetornados_Rango_etario_por_sexo[".reportLayout"] = 6;

//end of report settings




$tdataRetornados_Rango_etario_por_sexo[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY rango_etario";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRetornados_Rango_etario_por_sexo[".strOrderBy"] = $tstrOrderBy;

$tdataRetornados_Rango_etario_por_sexo[".orderindexes"] = array();
$tdataRetornados_Rango_etario_por_sexo[".orderindexes"][] = array(6, (1 ? "ASC" : "DESC"), "rango_etario");

$tdataRetornados_Rango_etario_por_sexo[".sqlHead"] = "SELECT `año`,  sectorppd,  municipio,  departamento,  COUNT(municipio) AS `COUNT(municipio)`,  rango_etario,  sexo";
$tdataRetornados_Rango_etario_por_sexo[".sqlFrom"] = "FROM retornados";
$tdataRetornados_Rango_etario_por_sexo[".sqlWhereExpr"] = "";
$tdataRetornados_Rango_etario_por_sexo[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRetornados_Rango_etario_por_sexo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRetornados_Rango_etario_por_sexo[".arrGroupsPerPage"] = $arrGPP;

$tdataRetornados_Rango_etario_por_sexo[".highlightSearchResults"] = true;

$tableKeysRetornados_Rango_etario_por_sexo = array();
$tdataRetornados_Rango_etario_por_sexo[".Keys"] = $tableKeysRetornados_Rango_etario_por_sexo;

$tdataRetornados_Rango_etario_por_sexo[".listFields"] = array();
$tdataRetornados_Rango_etario_por_sexo[".listFields"][] = "año";
$tdataRetornados_Rango_etario_por_sexo[".listFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_sexo[".listFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_sexo[".listFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_sexo[".listFields"][] = "COUNT(municipio)";
$tdataRetornados_Rango_etario_por_sexo[".listFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_sexo[".listFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_sexo[".hideMobileList"] = array();


$tdataRetornados_Rango_etario_por_sexo[".viewFields"] = array();
$tdataRetornados_Rango_etario_por_sexo[".viewFields"][] = "año";
$tdataRetornados_Rango_etario_por_sexo[".viewFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_sexo[".viewFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_sexo[".viewFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_sexo[".viewFields"][] = "COUNT(municipio)";
$tdataRetornados_Rango_etario_por_sexo[".viewFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_sexo[".viewFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_sexo[".addFields"] = array();
$tdataRetornados_Rango_etario_por_sexo[".addFields"][] = "año";
$tdataRetornados_Rango_etario_por_sexo[".addFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_sexo[".addFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_sexo[".addFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_sexo[".addFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_sexo[".addFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_sexo[".masterListFields"] = array();
$tdataRetornados_Rango_etario_por_sexo[".masterListFields"][] = "año";
$tdataRetornados_Rango_etario_por_sexo[".masterListFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_sexo[".masterListFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_sexo[".masterListFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_sexo[".masterListFields"][] = "COUNT(municipio)";
$tdataRetornados_Rango_etario_por_sexo[".masterListFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_sexo[".masterListFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_sexo[".inlineAddFields"] = array();
$tdataRetornados_Rango_etario_por_sexo[".inlineAddFields"][] = "año";
$tdataRetornados_Rango_etario_por_sexo[".inlineAddFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_sexo[".inlineAddFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_sexo[".inlineAddFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_sexo[".inlineAddFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_sexo[".inlineAddFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_sexo[".editFields"] = array();
$tdataRetornados_Rango_etario_por_sexo[".editFields"][] = "año";
$tdataRetornados_Rango_etario_por_sexo[".editFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_sexo[".editFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_sexo[".editFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_sexo[".editFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_sexo[".editFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_sexo[".inlineEditFields"] = array();
$tdataRetornados_Rango_etario_por_sexo[".inlineEditFields"][] = "año";
$tdataRetornados_Rango_etario_por_sexo[".inlineEditFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_sexo[".inlineEditFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_sexo[".inlineEditFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_sexo[".inlineEditFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_sexo[".inlineEditFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_sexo[".updateSelectedFields"] = array();
$tdataRetornados_Rango_etario_por_sexo[".updateSelectedFields"][] = "año";
$tdataRetornados_Rango_etario_por_sexo[".updateSelectedFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_sexo[".updateSelectedFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_sexo[".updateSelectedFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_sexo[".updateSelectedFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_sexo[".updateSelectedFields"][] = "sexo";


$tdataRetornados_Rango_etario_por_sexo[".exportFields"] = array();
$tdataRetornados_Rango_etario_por_sexo[".exportFields"][] = "año";
$tdataRetornados_Rango_etario_por_sexo[".exportFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_sexo[".exportFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_sexo[".exportFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_sexo[".exportFields"][] = "COUNT(municipio)";
$tdataRetornados_Rango_etario_por_sexo[".exportFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_sexo[".exportFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_sexo[".importFields"] = array();
$tdataRetornados_Rango_etario_por_sexo[".importFields"][] = "año";
$tdataRetornados_Rango_etario_por_sexo[".importFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_sexo[".importFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_sexo[".importFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_sexo[".importFields"][] = "COUNT(municipio)";
$tdataRetornados_Rango_etario_por_sexo[".importFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_sexo[".importFields"][] = "sexo";

$tdataRetornados_Rango_etario_por_sexo[".printFields"] = array();
$tdataRetornados_Rango_etario_por_sexo[".printFields"][] = "año";
$tdataRetornados_Rango_etario_por_sexo[".printFields"][] = "sectorppd";
$tdataRetornados_Rango_etario_por_sexo[".printFields"][] = "municipio";
$tdataRetornados_Rango_etario_por_sexo[".printFields"][] = "departamento";
$tdataRetornados_Rango_etario_por_sexo[".printFields"][] = "COUNT(municipio)";
$tdataRetornados_Rango_etario_por_sexo[".printFields"][] = "rango_etario";
$tdataRetornados_Rango_etario_por_sexo[".printFields"][] = "sexo";

//	año
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "año";
	$fdata["GoodName"] = "a_o";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_sexo","a_o");
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




	$tdataRetornados_Rango_etario_por_sexo["año"] = $fdata;
//	sectorppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sectorppd";
	$fdata["GoodName"] = "sectorppd";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_sexo","sectorppd");
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




	$tdataRetornados_Rango_etario_por_sexo["sectorppd"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_sexo","municipio");
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




	$tdataRetornados_Rango_etario_por_sexo["municipio"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_sexo","departamento");
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




	$tdataRetornados_Rango_etario_por_sexo["departamento"] = $fdata;
//	COUNT(municipio)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "COUNT(municipio)";
	$fdata["GoodName"] = "COUNT_municipio_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_sexo","COUNT_municipio_");
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








	$tdataRetornados_Rango_etario_por_sexo["COUNT(municipio)"] = $fdata;
//	rango_etario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "rango_etario";
	$fdata["GoodName"] = "rango_etario";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_sexo","rango_etario");
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








	$tdataRetornados_Rango_etario_por_sexo["rango_etario"] = $fdata;
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Rango_etario_por_sexo","sexo");
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








	$tdataRetornados_Rango_etario_por_sexo["sexo"] = $fdata;


$tables_data["Retornados-Rango etario por sexo"]=&$tdataRetornados_Rango_etario_por_sexo;
$field_labels["Retornados_Rango_etario_por_sexo"] = &$fieldLabelsRetornados_Rango_etario_por_sexo;
$fieldToolTips["Retornados_Rango_etario_por_sexo"] = &$fieldToolTipsRetornados_Rango_etario_por_sexo;
$placeHolders["Retornados_Rango_etario_por_sexo"] = &$placeHoldersRetornados_Rango_etario_por_sexo;
$page_titles["Retornados_Rango_etario_por_sexo"] = &$pageTitlesRetornados_Rango_etario_por_sexo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Retornados-Rango etario por sexo"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Retornados_Rango_etario_por_sexo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`año`,  sectorppd,  municipio,  departamento,  COUNT(municipio) AS `COUNT(municipio)`,  rango_etario,  sexo";
$proto0["m_strFrom"] = "FROM retornados";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY rango_etario";
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
	"m_srcTableName" => "Retornados-Rango etario por sexo"
));

$proto6["m_sql"] = "`año`";
$proto6["m_srcTableName"] = "Retornados-Rango etario por sexo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sectorppd",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por sexo"
));

$proto8["m_sql"] = "sectorppd";
$proto8["m_srcTableName"] = "Retornados-Rango etario por sexo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por sexo"
));

$proto10["m_sql"] = "municipio";
$proto10["m_srcTableName"] = "Retornados-Rango etario por sexo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por sexo"
));

$proto12["m_sql"] = "departamento";
$proto12["m_srcTableName"] = "Retornados-Rango etario por sexo";
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
	"m_srcTableName" => "Retornados-Rango etario por sexo"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(municipio)";
$proto14["m_srcTableName"] = "Retornados-Rango etario por sexo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "COUNT(municipio)";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "rango_etario",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por sexo"
));

$proto17["m_sql"] = "rango_etario";
$proto17["m_srcTableName"] = "Retornados-Rango etario por sexo";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por sexo"
));

$proto19["m_sql"] = "sexo";
$proto19["m_srcTableName"] = "Retornados-Rango etario por sexo";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "retornados";
$proto22["m_srcTableName"] = "Retornados-Rango etario por sexo";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "año";
$proto22["m_columns"][] = "mes";
$proto22["m_columns"][] = "fechaentrevista";
$proto22["m_columns"][] = "tipoentrevista";
$proto22["m_columns"][] = "ficha";
$proto22["m_columns"][] = "numalien";
$proto22["m_columns"][] = "fechanacimiento";
$proto22["m_columns"][] = "documentoficha";
$proto22["m_columns"][] = "numerodocumento";
$proto22["m_columns"][] = "nombredocumento";
$proto22["m_columns"][] = "consulado";
$proto22["m_columns"][] = "consulado_analisis";
$proto22["m_columns"][] = "departamento";
$proto22["m_columns"][] = "municipio";
$proto22["m_columns"][] = "sexo";
$proto22["m_columns"][] = "edad";
$proto22["m_columns"][] = "rango_etario";
$proto22["m_columns"][] = "tipoedad";
$proto22["m_columns"][] = "paisrepatriacion";
$proto22["m_columns"][] = "regionrepatriacion";
$proto22["m_columns"][] = "antecedentes_penales";
$proto22["m_columns"][] = "tipo_antecedentes";
$proto22["m_columns"][] = "antecedentes";
$proto22["m_columns"][] = "sectorppd";
$proto22["m_columns"][] = "num_mes";
$proto22["m_columns"][] = "antecedente_analisis";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "retornados";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "Retornados-Rango etario por sexo";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
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
	"m_strName" => "año",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por sexo"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "sectorppd",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por sexo"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por sexo"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por sexo"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "rango_etario",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por sexo"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por sexo"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "rango_etario",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Rango etario por sexo"
));

$proto37["m_column"]=$obj;
$proto37["m_bAsc"] = 1;
$proto37["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto37);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Retornados-Rango etario por sexo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Retornados_Rango_etario_por_sexo = createSqlQuery_Retornados_Rango_etario_por_sexo();


	
		;

							

$tdataRetornados_Rango_etario_por_sexo[".sqlquery"] = $queryData_Retornados_Rango_etario_por_sexo;

$tableEvents["Retornados-Rango etario por sexo"] = new eventsBase;
$tdataRetornados_Rango_etario_por_sexo[".hasEvents"] = false;

?>