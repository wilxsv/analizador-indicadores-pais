<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRetornados_Regi_n_Repatriaci_n_por_a_o = array();
	$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".truncateText"] = true;
	$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".NumberOfChars"] = 80;
	$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".ShortName"] = "Retornados_Regi_n_Repatriaci_n_por_a_o";
	$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".OwnerID"] = "";
	$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".OriginalTable"] = "retornados";

//	field labels
$fieldLabelsRetornados_Regi_n_Repatriaci_n_por_a_o = array();
$fieldToolTipsRetornados_Regi_n_Repatriaci_n_por_a_o = array();
$pageTitlesRetornados_Regi_n_Repatriaci_n_por_a_o = array();
$placeHoldersRetornados_Regi_n_Repatriaci_n_por_a_o = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"] = array();
	$fieldToolTipsRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"] = array();
	$placeHoldersRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"] = array();
	$pageTitlesRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"] = array();
	$fieldLabelsRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"]["a_o"] = "Año";
	$fieldToolTipsRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"]["a_o"] = "";
	$placeHoldersRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"]["a_o"] = "";
	$fieldLabelsRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"]["departamento"] = "";
	$placeHoldersRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"]["departamento"] = "";
	$fieldLabelsRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"]["municipio"] = "";
	$placeHoldersRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"]["municipio"] = "";
	$fieldLabelsRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"]["regionrepatriacion"] = "Regionrepatriacion";
	$fieldToolTipsRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"]["regionrepatriacion"] = "";
	$placeHoldersRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"]["regionrepatriacion"] = "";
	$fieldLabelsRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"]["sectorppd"] = "";
	$placeHoldersRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"]["sectorppd"] = "";
	$fieldLabelsRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"]["COUNT_municipio_"] = "COUNT(municipio)";
	$fieldToolTipsRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"]["COUNT_municipio_"] = "";
	$placeHoldersRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"]["COUNT_municipio_"] = "";
	if (count($fieldToolTipsRetornados_Regi_n_Repatriaci_n_por_a_o["Spanish"]))
		$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRetornados_Regi_n_Repatriaci_n_por_a_o["English"] = array();
	$fieldToolTipsRetornados_Regi_n_Repatriaci_n_por_a_o["English"] = array();
	$placeHoldersRetornados_Regi_n_Repatriaci_n_por_a_o["English"] = array();
	$pageTitlesRetornados_Regi_n_Repatriaci_n_por_a_o["English"] = array();
	$fieldLabelsRetornados_Regi_n_Repatriaci_n_por_a_o["English"]["a_o"] = "Año";
	$fieldToolTipsRetornados_Regi_n_Repatriaci_n_por_a_o["English"]["a_o"] = "";
	$placeHoldersRetornados_Regi_n_Repatriaci_n_por_a_o["English"]["a_o"] = "";
	$fieldLabelsRetornados_Regi_n_Repatriaci_n_por_a_o["English"]["departamento"] = "Departamento";
	$fieldToolTipsRetornados_Regi_n_Repatriaci_n_por_a_o["English"]["departamento"] = "";
	$placeHoldersRetornados_Regi_n_Repatriaci_n_por_a_o["English"]["departamento"] = "";
	$fieldLabelsRetornados_Regi_n_Repatriaci_n_por_a_o["English"]["municipio"] = "Municipio";
	$fieldToolTipsRetornados_Regi_n_Repatriaci_n_por_a_o["English"]["municipio"] = "";
	$placeHoldersRetornados_Regi_n_Repatriaci_n_por_a_o["English"]["municipio"] = "";
	$fieldLabelsRetornados_Regi_n_Repatriaci_n_por_a_o["English"]["regionrepatriacion"] = "Regionrepatriacion";
	$fieldToolTipsRetornados_Regi_n_Repatriaci_n_por_a_o["English"]["regionrepatriacion"] = "";
	$placeHoldersRetornados_Regi_n_Repatriaci_n_por_a_o["English"]["regionrepatriacion"] = "";
	$fieldLabelsRetornados_Regi_n_Repatriaci_n_por_a_o["English"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsRetornados_Regi_n_Repatriaci_n_por_a_o["English"]["sectorppd"] = "";
	$placeHoldersRetornados_Regi_n_Repatriaci_n_por_a_o["English"]["sectorppd"] = "";
	$fieldLabelsRetornados_Regi_n_Repatriaci_n_por_a_o["English"]["COUNT_municipio_"] = "COUNT(municipio)";
	$fieldToolTipsRetornados_Regi_n_Repatriaci_n_por_a_o["English"]["COUNT_municipio_"] = "";
	$placeHoldersRetornados_Regi_n_Repatriaci_n_por_a_o["English"]["COUNT_municipio_"] = "";
	if (count($fieldToolTipsRetornados_Regi_n_Repatriaci_n_por_a_o["English"]))
		$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRetornados_Regi_n_Repatriaci_n_por_a_o[""] = array();
	$fieldToolTipsRetornados_Regi_n_Repatriaci_n_por_a_o[""] = array();
	$placeHoldersRetornados_Regi_n_Repatriaci_n_por_a_o[""] = array();
	$pageTitlesRetornados_Regi_n_Repatriaci_n_por_a_o[""] = array();
	if (count($fieldToolTipsRetornados_Regi_n_Repatriaci_n_por_a_o[""]))
		$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".isUseToolTips"] = true;
}


	$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".NCSearch"] = true;



$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".shortTableName"] = "Retornados_Regi_n_Repatriaci_n_por_a_o";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".nSecOptions"] = 0;
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".recsPerRowPrint"] = 1;
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".mainTableOwnerID"] = "";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".moveNext"] = 1;
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".entityType"] = 2;

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".strOriginalTableName"] = "retornados";

	



$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".showAddInPopup"] = false;

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".showEditInPopup"] = false;

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".fieldsForRegister"] = array();

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".listAjax"] = false;

	$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".audit"] = false;

	$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".locking"] = false;



$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".list"] = true;



$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".reorderRecordsByHeader"] = true;





$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".exportTo"] = true;

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".printFriendly"] = true;


$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".searchSaving"] = false;
//

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".showSearchPanel"] = true;
		$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".flexibleSearch"] = true;

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".isUseAjaxSuggest"] = true;






$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".ajaxCodeSnippetAdded"] = false;

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".buttonsAdded"] = false;

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".isUseTimeForSearch"] = false;





$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".allSearchFields"] = array();
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".filterFields"] = array();
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".requiredSearchFields"] = array();

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".allSearchFields"][] = "sectorppd";
		$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".requiredSearchFields"][] = "sectorppd";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".allSearchFields"][] = "departamento";
		$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".requiredSearchFields"][] = "departamento";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".allSearchFields"][] = "municipio";
		$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".requiredSearchFields"][] = "municipio";



$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".panelSearchFields"] = array();
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".searchPanelOptions"] = array();
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".panelSearchFields"][] = "sectorppd";
	$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".panelSearchFields"][] = "departamento";
	$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".panelSearchFields"][] = "municipio";
	

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".tableType"] = "report";

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".printerPageOrientation"] = 0;
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".nPrinterPageScale"] = 100;

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".nPrinterSplitRecords"] = 40;

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".nPrinterPDFSplitRecords"] = 40;



$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".geocodingEnabled"] = false;

//report settings
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".crossTabReport"] = true;

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".reportGroupFields"] = true;
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "regionrepatriacion";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "año";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".reportGroupFieldsData"] = $reportGroupFields;

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".reportHorizontalSummary"] = true;

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".isExistTotalFields"] = true;

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".reportVerticalSummary"] = true;



$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".repShowDet"] = true;

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".reportLayout"] = 6;

//end of report settings




$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".strOrderBy"] = $tstrOrderBy;

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".orderindexes"] = array();

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".sqlHead"] = "SELECT sectorppd,  regionrepatriacion,  `año`,  departamento,  municipio,  COUNT(municipio) AS `COUNT(municipio)`";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".sqlFrom"] = "FROM retornados";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".sqlWhereExpr"] = "";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".arrGroupsPerPage"] = $arrGPP;

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".highlightSearchResults"] = true;

$tableKeysRetornados_Regi_n_Repatriaci_n_por_a_o = array();
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".Keys"] = $tableKeysRetornados_Regi_n_Repatriaci_n_por_a_o;

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".listFields"] = array();
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".listFields"][] = "sectorppd";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".listFields"][] = "regionrepatriacion";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".listFields"][] = "año";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".listFields"][] = "departamento";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".listFields"][] = "municipio";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".listFields"][] = "COUNT(municipio)";

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".hideMobileList"] = array();


$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".viewFields"] = array();
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".viewFields"][] = "sectorppd";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".viewFields"][] = "regionrepatriacion";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".viewFields"][] = "año";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".viewFields"][] = "departamento";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".viewFields"][] = "municipio";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".viewFields"][] = "COUNT(municipio)";

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".addFields"] = array();
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".addFields"][] = "sectorppd";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".addFields"][] = "regionrepatriacion";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".addFields"][] = "año";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".addFields"][] = "departamento";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".addFields"][] = "municipio";

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".masterListFields"] = array();
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".masterListFields"][] = "sectorppd";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".masterListFields"][] = "regionrepatriacion";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".masterListFields"][] = "año";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".masterListFields"][] = "departamento";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".masterListFields"][] = "municipio";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".masterListFields"][] = "COUNT(municipio)";

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".inlineAddFields"] = array();
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".inlineAddFields"][] = "sectorppd";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".inlineAddFields"][] = "regionrepatriacion";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".inlineAddFields"][] = "año";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".inlineAddFields"][] = "departamento";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".inlineAddFields"][] = "municipio";

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".editFields"] = array();
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".editFields"][] = "sectorppd";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".editFields"][] = "regionrepatriacion";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".editFields"][] = "año";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".editFields"][] = "departamento";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".editFields"][] = "municipio";

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".inlineEditFields"] = array();
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".inlineEditFields"][] = "sectorppd";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".inlineEditFields"][] = "regionrepatriacion";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".inlineEditFields"][] = "año";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".inlineEditFields"][] = "departamento";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".inlineEditFields"][] = "municipio";

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".updateSelectedFields"] = array();
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".updateSelectedFields"][] = "sectorppd";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".updateSelectedFields"][] = "regionrepatriacion";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".updateSelectedFields"][] = "año";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".updateSelectedFields"][] = "departamento";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".updateSelectedFields"][] = "municipio";


$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".exportFields"] = array();
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".exportFields"][] = "sectorppd";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".exportFields"][] = "regionrepatriacion";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".exportFields"][] = "año";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".exportFields"][] = "departamento";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".exportFields"][] = "municipio";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".exportFields"][] = "COUNT(municipio)";

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".importFields"] = array();
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".importFields"][] = "sectorppd";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".importFields"][] = "regionrepatriacion";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".importFields"][] = "año";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".importFields"][] = "departamento";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".importFields"][] = "municipio";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".importFields"][] = "COUNT(municipio)";

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".printFields"] = array();
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".printFields"][] = "sectorppd";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".printFields"][] = "regionrepatriacion";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".printFields"][] = "año";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".printFields"][] = "departamento";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".printFields"][] = "municipio";
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".printFields"][] = "COUNT(municipio)";

//	sectorppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sectorppd";
	$fdata["GoodName"] = "sectorppd";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Regi_n_Repatriaci_n_por_a_o","sectorppd");
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




	$tdataRetornados_Regi_n_Repatriaci_n_por_a_o["sectorppd"] = $fdata;
//	regionrepatriacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "regionrepatriacion";
	$fdata["GoodName"] = "regionrepatriacion";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Regi_n_Repatriaci_n_por_a_o","regionrepatriacion");
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








	$tdataRetornados_Regi_n_Repatriaci_n_por_a_o["regionrepatriacion"] = $fdata;
//	año
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "año";
	$fdata["GoodName"] = "a_o";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Regi_n_Repatriaci_n_por_a_o","a_o");
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








	$tdataRetornados_Regi_n_Repatriaci_n_por_a_o["año"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Regi_n_Repatriaci_n_por_a_o","departamento");
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




	$tdataRetornados_Regi_n_Repatriaci_n_por_a_o["departamento"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Regi_n_Repatriaci_n_por_a_o","municipio");
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




	$tdataRetornados_Regi_n_Repatriaci_n_por_a_o["municipio"] = $fdata;
//	COUNT(municipio)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "COUNT(municipio)";
	$fdata["GoodName"] = "COUNT_municipio_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Retornados_Regi_n_Repatriaci_n_por_a_o","COUNT_municipio_");
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








	$tdataRetornados_Regi_n_Repatriaci_n_por_a_o["COUNT(municipio)"] = $fdata;


$tables_data["Retornados-Región Repatriación por año"]=&$tdataRetornados_Regi_n_Repatriaci_n_por_a_o;
$field_labels["Retornados_Regi_n_Repatriaci_n_por_a_o"] = &$fieldLabelsRetornados_Regi_n_Repatriaci_n_por_a_o;
$fieldToolTips["Retornados_Regi_n_Repatriaci_n_por_a_o"] = &$fieldToolTipsRetornados_Regi_n_Repatriaci_n_por_a_o;
$placeHolders["Retornados_Regi_n_Repatriaci_n_por_a_o"] = &$placeHoldersRetornados_Regi_n_Repatriaci_n_por_a_o;
$page_titles["Retornados_Regi_n_Repatriaci_n_por_a_o"] = &$pageTitlesRetornados_Regi_n_Repatriaci_n_por_a_o;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Retornados-Región Repatriación por año"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Retornados_Regi_n_Repatriaci_n_por_a_o()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sectorppd,  regionrepatriacion,  `año`,  departamento,  municipio,  COUNT(municipio) AS `COUNT(municipio)`";
$proto0["m_strFrom"] = "FROM retornados";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
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
	"m_strName" => "sectorppd",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Región Repatriación por año"
));

$proto6["m_sql"] = "sectorppd";
$proto6["m_srcTableName"] = "Retornados-Región Repatriación por año";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "regionrepatriacion",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Región Repatriación por año"
));

$proto8["m_sql"] = "regionrepatriacion";
$proto8["m_srcTableName"] = "Retornados-Región Repatriación por año";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "año",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Región Repatriación por año"
));

$proto10["m_sql"] = "`año`";
$proto10["m_srcTableName"] = "Retornados-Región Repatriación por año";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Región Repatriación por año"
));

$proto12["m_sql"] = "departamento";
$proto12["m_srcTableName"] = "Retornados-Región Repatriación por año";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Región Repatriación por año"
));

$proto14["m_sql"] = "municipio";
$proto14["m_srcTableName"] = "Retornados-Región Repatriación por año";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_COUNT";
$proto17["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Región Repatriación por año"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "COUNT(municipio)";
$proto16["m_srcTableName"] = "Retornados-Región Repatriación por año";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "COUNT(municipio)";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "retornados";
$proto20["m_srcTableName"] = "Retornados-Región Repatriación por año";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "año";
$proto20["m_columns"][] = "mes";
$proto20["m_columns"][] = "fechaentrevista";
$proto20["m_columns"][] = "tipoentrevista";
$proto20["m_columns"][] = "ficha";
$proto20["m_columns"][] = "numalien";
$proto20["m_columns"][] = "fechanacimiento";
$proto20["m_columns"][] = "documentoficha";
$proto20["m_columns"][] = "numerodocumento";
$proto20["m_columns"][] = "nombredocumento";
$proto20["m_columns"][] = "consulado";
$proto20["m_columns"][] = "consulado_analisis";
$proto20["m_columns"][] = "departamento";
$proto20["m_columns"][] = "municipio";
$proto20["m_columns"][] = "sexo";
$proto20["m_columns"][] = "edad";
$proto20["m_columns"][] = "rango_etario";
$proto20["m_columns"][] = "tipoedad";
$proto20["m_columns"][] = "paisrepatriacion";
$proto20["m_columns"][] = "regionrepatriacion";
$proto20["m_columns"][] = "antecedentes_penales";
$proto20["m_columns"][] = "tipo_antecedentes";
$proto20["m_columns"][] = "antecedentes";
$proto20["m_columns"][] = "sectorppd";
$proto20["m_columns"][] = "num_mes";
$proto20["m_columns"][] = "antecedente_analisis";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "retornados";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "Retornados-Región Repatriación por año";
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
	"m_strName" => "sectorppd",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Región Repatriación por año"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "regionrepatriacion",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Región Repatriación por año"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "año",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Región Repatriación por año"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Región Repatriación por año"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Región Repatriación por año"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Retornados-Región Repatriación por año";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Retornados_Regi_n_Repatriaci_n_por_a_o = createSqlQuery_Retornados_Regi_n_Repatriaci_n_por_a_o();


	
		;

						

$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".sqlquery"] = $queryData_Retornados_Regi_n_Repatriaci_n_por_a_o;

$tableEvents["Retornados-Región Repatriación por año"] = new eventsBase;
$tdataRetornados_Regi_n_Repatriaci_n_por_a_o[".hasEvents"] = false;

?>