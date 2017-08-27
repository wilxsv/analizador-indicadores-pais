<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes = array();
	$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".truncateText"] = true;
	$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".NumberOfChars"] = 80;
	$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".ShortName"] = "Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes";
	$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".OwnerID"] = "";
	$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".OriginalTable"] = "transito";

//	field labels
$fieldLabelsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes = array();
$fieldToolTipsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes = array();
$pageTitlesTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes = array();
$placeHoldersTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"] = array();
	$fieldToolTipsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"] = array();
	$placeHoldersTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"] = array();
	$pageTitlesTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"] = array();
	$fieldLabelsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"]["munacc"] = "Munacc";
	$fieldToolTipsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"]["munacc"] = "";
	$placeHoldersTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"]["munacc"] = "";
	$fieldLabelsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"]["departamento"] = "";
	$placeHoldersTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"]["departamento"] = "";
	$fieldLabelsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"]["sectorppd"] = "";
	$placeHoldersTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"]["sectorppd"] = "";
	$fieldLabelsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"]["COUNT_munacc_"] = "COUNT(munacc)";
	$fieldToolTipsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"]["COUNT_munacc_"] = "";
	$placeHoldersTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"]["COUNT_munacc_"] = "";
	$fieldLabelsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"]["resu"] = "Resu";
	$fieldToolTipsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"]["resu"] = "";
	$placeHoldersTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"]["resu"] = "";
	$fieldLabelsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"]["rangohorario"] = "Rangohorario";
	$fieldToolTipsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"]["rangohorario"] = "";
	$placeHoldersTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"]["rangohorario"] = "";
	if (count($fieldToolTipsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["Spanish"]))
		$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"] = array();
	$fieldToolTipsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"] = array();
	$placeHoldersTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"] = array();
	$pageTitlesTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"] = array();
	$fieldLabelsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"]["munacc"] = "Munacc";
	$fieldToolTipsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"]["munacc"] = "";
	$placeHoldersTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"]["munacc"] = "";
	$fieldLabelsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"]["departamento"] = "Departamento";
	$fieldToolTipsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"]["departamento"] = "";
	$placeHoldersTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"]["departamento"] = "";
	$fieldLabelsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"]["sectorppd"] = "";
	$placeHoldersTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"]["sectorppd"] = "";
	$fieldLabelsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"]["COUNT_munacc_"] = "COUNT(munacc)";
	$fieldToolTipsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"]["COUNT_munacc_"] = "";
	$placeHoldersTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"]["COUNT_munacc_"] = "";
	$fieldLabelsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"]["resu"] = "Resu";
	$fieldToolTipsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"]["resu"] = "";
	$placeHoldersTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"]["resu"] = "";
	$fieldLabelsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"]["rangohorario"] = "Rangohorario";
	$fieldToolTipsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"]["rangohorario"] = "";
	$placeHoldersTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"]["rangohorario"] = "";
	if (count($fieldToolTipsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["English"]))
		$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[""] = array();
	$fieldToolTipsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[""] = array();
	$placeHoldersTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[""] = array();
	$pageTitlesTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[""] = array();
	if (count($fieldToolTipsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[""]))
		$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".isUseToolTips"] = true;
}


	$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".NCSearch"] = true;



$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".shortTableName"] = "Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".nSecOptions"] = 0;
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".recsPerRowPrint"] = 1;
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".mainTableOwnerID"] = "";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".moveNext"] = 1;
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".entityType"] = 2;

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".strOriginalTableName"] = "transito";

	



$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".showAddInPopup"] = false;

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".showEditInPopup"] = false;

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".fieldsForRegister"] = array();

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".listAjax"] = false;

	$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".audit"] = false;

	$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".locking"] = false;



$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".list"] = true;



$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".reorderRecordsByHeader"] = true;





$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".exportTo"] = true;

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".printFriendly"] = true;


$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".searchSaving"] = false;
//

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".showSearchPanel"] = true;
		$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".flexibleSearch"] = true;

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".isUseAjaxSuggest"] = true;






$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".ajaxCodeSnippetAdded"] = false;

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".buttonsAdded"] = false;

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".isUseTimeForSearch"] = false;





$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".allSearchFields"] = array();
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".filterFields"] = array();
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".requiredSearchFields"] = array();

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".allSearchFields"][] = "departamento";
		$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".requiredSearchFields"][] = "departamento";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".allSearchFields"][] = "sectorppd";
	$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".allSearchFields"][] = "munacc";
		$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".requiredSearchFields"][] = "munacc";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".allSearchFields"][] = "COUNT(munacc)";
	$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".allSearchFields"][] = "resu";
	$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".allSearchFields"][] = "rangohorario";
	

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".googleLikeFields"] = array();
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".googleLikeFields"][] = "departamento";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".googleLikeFields"][] = "sectorppd";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".googleLikeFields"][] = "munacc";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".googleLikeFields"][] = "COUNT(munacc)";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".googleLikeFields"][] = "resu";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".googleLikeFields"][] = "rangohorario";

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".panelSearchFields"] = array();
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".searchPanelOptions"] = array();
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".panelSearchFields"][] = "departamento";
	$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".panelSearchFields"][] = "sectorppd";
	$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".panelSearchFields"][] = "munacc";
	
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".advSearchFields"] = array();
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".advSearchFields"][] = "departamento";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".advSearchFields"][] = "sectorppd";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".advSearchFields"][] = "munacc";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".advSearchFields"][] = "COUNT(munacc)";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".advSearchFields"][] = "resu";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".advSearchFields"][] = "rangohorario";

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".tableType"] = "report";

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".printerPageOrientation"] = 0;
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".nPrinterPageScale"] = 100;

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".nPrinterSplitRecords"] = 40;

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".nPrinterPDFSplitRecords"] = 40;



$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".geocodingEnabled"] = false;

//report settings
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".crossTabReport"] = true;

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".reportGroupFields"] = true;
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "rangohorario";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "resu";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".reportGroupFieldsData"] = $reportGroupFields;

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".reportHorizontalSummary"] = true;

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".isExistTotalFields"] = true;

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".reportVerticalSummary"] = true;



$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".repShowDet"] = true;

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".reportLayout"] = 0;

//end of report settings




$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".strOrderBy"] = $tstrOrderBy;

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".orderindexes"] = array();

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".sqlHead"] = "SELECT departamento,  sectorppd,  munacc,  COUNT(munacc) AS `COUNT(munacc)`,  resu,  rangohorario";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".sqlFrom"] = "FROM transito";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".sqlWhereExpr"] = "";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".arrGroupsPerPage"] = $arrGPP;

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".highlightSearchResults"] = true;

$tableKeysTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes = array();
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".Keys"] = $tableKeysTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes;

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".listFields"] = array();
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".listFields"][] = "departamento";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".listFields"][] = "sectorppd";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".listFields"][] = "munacc";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".listFields"][] = "COUNT(munacc)";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".listFields"][] = "resu";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".listFields"][] = "rangohorario";

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".hideMobileList"] = array();


$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".viewFields"] = array();
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".viewFields"][] = "departamento";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".viewFields"][] = "sectorppd";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".viewFields"][] = "munacc";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".viewFields"][] = "COUNT(munacc)";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".viewFields"][] = "resu";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".viewFields"][] = "rangohorario";

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".addFields"] = array();
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".addFields"][] = "departamento";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".addFields"][] = "sectorppd";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".addFields"][] = "munacc";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".addFields"][] = "resu";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".addFields"][] = "rangohorario";

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".masterListFields"] = array();
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".masterListFields"][] = "departamento";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".masterListFields"][] = "sectorppd";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".masterListFields"][] = "munacc";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".masterListFields"][] = "COUNT(munacc)";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".masterListFields"][] = "resu";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".masterListFields"][] = "rangohorario";

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".inlineAddFields"] = array();
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".inlineAddFields"][] = "departamento";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".inlineAddFields"][] = "sectorppd";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".inlineAddFields"][] = "munacc";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".inlineAddFields"][] = "resu";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".inlineAddFields"][] = "rangohorario";

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".editFields"] = array();
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".editFields"][] = "departamento";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".editFields"][] = "sectorppd";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".editFields"][] = "munacc";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".editFields"][] = "resu";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".editFields"][] = "rangohorario";

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".inlineEditFields"] = array();
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".inlineEditFields"][] = "departamento";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".inlineEditFields"][] = "sectorppd";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".inlineEditFields"][] = "munacc";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".inlineEditFields"][] = "resu";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".inlineEditFields"][] = "rangohorario";

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".updateSelectedFields"] = array();
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".updateSelectedFields"][] = "departamento";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".updateSelectedFields"][] = "sectorppd";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".updateSelectedFields"][] = "munacc";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".updateSelectedFields"][] = "resu";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".updateSelectedFields"][] = "rangohorario";


$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".exportFields"] = array();
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".exportFields"][] = "departamento";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".exportFields"][] = "sectorppd";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".exportFields"][] = "munacc";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".exportFields"][] = "COUNT(munacc)";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".exportFields"][] = "resu";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".exportFields"][] = "rangohorario";

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".importFields"] = array();
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".importFields"][] = "departamento";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".importFields"][] = "sectorppd";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".importFields"][] = "munacc";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".importFields"][] = "COUNT(munacc)";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".importFields"][] = "resu";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".importFields"][] = "rangohorario";

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".printFields"] = array();
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".printFields"][] = "departamento";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".printFields"][] = "sectorppd";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".printFields"][] = "munacc";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".printFields"][] = "COUNT(munacc)";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".printFields"][] = "resu";
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".printFields"][] = "rangohorario";

//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes","departamento");
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




	$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["departamento"] = $fdata;
//	sectorppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sectorppd";
	$fdata["GoodName"] = "sectorppd";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes","sectorppd");
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["sectorppd"] = $fdata;
//	munacc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "munacc";
	$fdata["GoodName"] = "munacc";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes","munacc");
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

		$fdata["strField"] = "munacc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "munacc";

	
	
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




	$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["munacc"] = $fdata;
//	COUNT(munacc)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "COUNT(munacc)";
	$fdata["GoodName"] = "COUNT_munacc_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes","COUNT_munacc_");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(munacc)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(munacc)";

	
	
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




	$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["COUNT(munacc)"] = $fdata;
//	resu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "resu";
	$fdata["GoodName"] = "resu";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes","resu");
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

		$fdata["strField"] = "resu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resu";

	
	
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




	$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["resu"] = $fdata;
//	rangohorario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "rangohorario";
	$fdata["GoodName"] = "rangohorario";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes","rangohorario");
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

		$fdata["strField"] = "rangohorario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rangohorario";

	
	
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




	$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes["rangohorario"] = $fdata;


$tables_data["Tránsito-Resultado del accidente por rango horario de accidentes"]=&$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes;
$field_labels["Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes"] = &$fieldLabelsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes;
$fieldToolTips["Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes"] = &$fieldToolTipsTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes;
$placeHolders["Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes"] = &$placeHoldersTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes;
$page_titles["Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes"] = &$pageTitlesTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Tránsito-Resultado del accidente por rango horario de accidentes"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "departamento,  sectorppd,  munacc,  COUNT(munacc) AS `COUNT(munacc)`,  resu,  rangohorario";
$proto0["m_strFrom"] = "FROM transito";
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
	"m_strName" => "departamento",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Resultado del accidente por rango horario de accidentes"
));

$proto6["m_sql"] = "departamento";
$proto6["m_srcTableName"] = "Tránsito-Resultado del accidente por rango horario de accidentes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sectorppd",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Resultado del accidente por rango horario de accidentes"
));

$proto8["m_sql"] = "sectorppd";
$proto8["m_srcTableName"] = "Tránsito-Resultado del accidente por rango horario de accidentes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "munacc",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Resultado del accidente por rango horario de accidentes"
));

$proto10["m_sql"] = "munacc";
$proto10["m_srcTableName"] = "Tránsito-Resultado del accidente por rango horario de accidentes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_COUNT";
$proto13["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "munacc",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Resultado del accidente por rango horario de accidentes"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "COUNT(munacc)";
$proto12["m_srcTableName"] = "Tránsito-Resultado del accidente por rango horario de accidentes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "COUNT(munacc)";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "resu",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Resultado del accidente por rango horario de accidentes"
));

$proto15["m_sql"] = "resu";
$proto15["m_srcTableName"] = "Tránsito-Resultado del accidente por rango horario de accidentes";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "rangohorario",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Resultado del accidente por rango horario de accidentes"
));

$proto17["m_sql"] = "rangohorario";
$proto17["m_srcTableName"] = "Tránsito-Resultado del accidente por rango horario de accidentes";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "transito";
$proto20["m_srcTableName"] = "Tránsito-Resultado del accidente por rango horario de accidentes";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "eid";
$proto20["m_columns"][] = "pid";
$proto20["m_columns"][] = "unidad";
$proto20["m_columns"][] = "sexo";
$proto20["m_columns"][] = "edad";
$proto20["m_columns"][] = "resu";
$proto20["m_columns"][] = "calidad";
$proto20["m_columns"][] = "fecacc";
$proto20["m_columns"][] = "horacc";
$proto20["m_columns"][] = "rangohorario";
$proto20["m_columns"][] = "tipacc";
$proto20["m_columns"][] = "cauacc";
$proto20["m_columns"][] = "diracc";
$proto20["m_columns"][] = "munacc";
$proto20["m_columns"][] = "clares";
$proto20["m_columns"][] = "rutres";
$proto20["m_columns"][] = "repdet";
$proto20["m_columns"][] = "departamento";
$proto20["m_columns"][] = "dia";
$proto20["m_columns"][] = "sectorppd";
$proto20["m_columns"][] = "rangoetario";
$proto20["m_columns"][] = "causa_analisis";
$proto20["m_columns"][] = "tipo_analisis";
$proto20["m_columns"][] = "mes_analisis";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "transito";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "Tránsito-Resultado del accidente por rango horario de accidentes";
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
	"m_strName" => "departamento",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Resultado del accidente por rango horario de accidentes"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "sectorppd",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Resultado del accidente por rango horario de accidentes"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "munacc",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Resultado del accidente por rango horario de accidentes"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "resu",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Resultado del accidente por rango horario de accidentes"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "rangohorario",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Resultado del accidente por rango horario de accidentes"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Tránsito-Resultado del accidente por rango horario de accidentes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes = createSqlQuery_Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes();


	
		;

						

$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".sqlquery"] = $queryData_Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes;

$tableEvents["Tránsito-Resultado del accidente por rango horario de accidentes"] = new eventsBase;
$tdataTr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes[".hasEvents"] = false;

?>