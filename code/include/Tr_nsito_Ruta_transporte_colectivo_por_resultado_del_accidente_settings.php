<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente = array();
	$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".truncateText"] = true;
	$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".NumberOfChars"] = 80;
	$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".ShortName"] = "Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente";
	$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".OwnerID"] = "";
	$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".OriginalTable"] = "transito";

//	field labels
$fieldLabelsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente = array();
$fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente = array();
$pageTitlesTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente = array();
$placeHoldersTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"] = array();
	$fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"] = array();
	$placeHoldersTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"] = array();
	$pageTitlesTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"] = array();
	$fieldLabelsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]["munacc"] = "Munacc";
	$fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]["munacc"] = "";
	$placeHoldersTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]["munacc"] = "";
	$fieldLabelsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]["departamento"] = "";
	$placeHoldersTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]["departamento"] = "";
	$fieldLabelsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]["sectorppd"] = "";
	$placeHoldersTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]["sectorppd"] = "";
	$fieldLabelsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]["resu"] = "Resu";
	$fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]["resu"] = "";
	$placeHoldersTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]["resu"] = "";
	$fieldLabelsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]["tipo_analisis"] = "Tipo Analisis";
	$fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]["tipo_analisis"] = "";
	$placeHoldersTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]["tipo_analisis"] = "";
	$fieldLabelsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]["rutres"] = "Rutres";
	$fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]["rutres"] = "";
	$placeHoldersTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]["rutres"] = "";
	$fieldLabelsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]["COUNT_resu_"] = "COUNT(resu)";
	$fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]["COUNT_resu_"] = "";
	$placeHoldersTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]["COUNT_resu_"] = "";
	if (count($fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["Spanish"]))
		$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"] = array();
	$fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"] = array();
	$placeHoldersTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"] = array();
	$pageTitlesTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"] = array();
	$fieldLabelsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]["munacc"] = "Munacc";
	$fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]["munacc"] = "";
	$placeHoldersTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]["munacc"] = "";
	$fieldLabelsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]["departamento"] = "Departamento";
	$fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]["departamento"] = "";
	$placeHoldersTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]["departamento"] = "";
	$fieldLabelsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]["sectorppd"] = "";
	$placeHoldersTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]["sectorppd"] = "";
	$fieldLabelsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]["resu"] = "Resu";
	$fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]["resu"] = "";
	$placeHoldersTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]["resu"] = "";
	$fieldLabelsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]["tipo_analisis"] = "Tipo Analisis";
	$fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]["tipo_analisis"] = "";
	$placeHoldersTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]["tipo_analisis"] = "";
	$fieldLabelsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]["rutres"] = "Rutres";
	$fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]["rutres"] = "";
	$placeHoldersTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]["rutres"] = "";
	$fieldLabelsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]["COUNT_resu_"] = "COUNT(resu)";
	$fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]["COUNT_resu_"] = "";
	$placeHoldersTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]["COUNT_resu_"] = "";
	if (count($fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["English"]))
		$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[""] = array();
	$fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[""] = array();
	$placeHoldersTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[""] = array();
	$pageTitlesTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[""] = array();
	if (count($fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[""]))
		$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".isUseToolTips"] = true;
}


	$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".NCSearch"] = true;



$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".shortTableName"] = "Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".nSecOptions"] = 0;
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".recsPerRowPrint"] = 1;
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".mainTableOwnerID"] = "";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".moveNext"] = 1;
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".entityType"] = 2;

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".strOriginalTableName"] = "transito";

	



$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".showAddInPopup"] = false;

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".showEditInPopup"] = false;

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".fieldsForRegister"] = array();

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".listAjax"] = false;

	$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".audit"] = false;

	$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".locking"] = false;



$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".list"] = true;



$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".reorderRecordsByHeader"] = true;





$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".exportTo"] = true;

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".printFriendly"] = true;


$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".searchSaving"] = false;
//

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".showSearchPanel"] = true;
		$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".flexibleSearch"] = true;

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".isUseAjaxSuggest"] = true;






$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".ajaxCodeSnippetAdded"] = false;

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".buttonsAdded"] = false;

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".isUseTimeForSearch"] = false;





$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".allSearchFields"] = array();
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".filterFields"] = array();
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".requiredSearchFields"] = array();

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".allSearchFields"][] = "departamento";
		$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".requiredSearchFields"][] = "departamento";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".allSearchFields"][] = "sectorppd";
	$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".allSearchFields"][] = "munacc";
		$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".requiredSearchFields"][] = "munacc";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".allSearchFields"][] = "COUNT(resu)";
	$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".allSearchFields"][] = "resu";
	$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".allSearchFields"][] = "rutres";
	$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".allSearchFields"][] = "tipo_analisis";
	

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".googleLikeFields"] = array();
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".googleLikeFields"][] = "departamento";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".googleLikeFields"][] = "sectorppd";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".googleLikeFields"][] = "munacc";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".googleLikeFields"][] = "COUNT(resu)";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".googleLikeFields"][] = "resu";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".googleLikeFields"][] = "rutres";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".googleLikeFields"][] = "tipo_analisis";

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".panelSearchFields"] = array();
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".searchPanelOptions"] = array();
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".panelSearchFields"][] = "departamento";
	$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".panelSearchFields"][] = "sectorppd";
	$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".panelSearchFields"][] = "munacc";
	
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".advSearchFields"] = array();
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".advSearchFields"][] = "departamento";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".advSearchFields"][] = "sectorppd";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".advSearchFields"][] = "munacc";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".advSearchFields"][] = "COUNT(resu)";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".advSearchFields"][] = "resu";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".advSearchFields"][] = "rutres";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".advSearchFields"][] = "tipo_analisis";

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".tableType"] = "report";

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".printerPageOrientation"] = 0;
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".nPrinterPageScale"] = 100;

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".nPrinterSplitRecords"] = 40;

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".nPrinterPDFSplitRecords"] = 40;



$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".geocodingEnabled"] = false;

//report settings
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".crossTabReport"] = true;

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".reportGroupFields"] = true;
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "rutres";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "resu";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".reportGroupFieldsData"] = $reportGroupFields;

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".reportHorizontalSummary"] = true;

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".isExistTotalFields"] = true;

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".reportVerticalSummary"] = true;



$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".repShowDet"] = true;

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".reportLayout"] = 0;

//end of report settings




$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".strOrderBy"] = $tstrOrderBy;

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".orderindexes"] = array();

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".sqlHead"] = "SELECT departamento,  sectorppd,  munacc,  COUNT(resu) AS `COUNT(resu)`,  resu,  rutres,  tipo_analisis";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".sqlFrom"] = "FROM transito";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".sqlWhereExpr"] = "(tipo_analisis ='transporte colectivo')";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".arrGroupsPerPage"] = $arrGPP;

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".highlightSearchResults"] = true;

$tableKeysTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente = array();
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".Keys"] = $tableKeysTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente;

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".listFields"] = array();
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".listFields"][] = "departamento";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".listFields"][] = "sectorppd";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".listFields"][] = "munacc";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".listFields"][] = "COUNT(resu)";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".listFields"][] = "resu";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".listFields"][] = "rutres";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".listFields"][] = "tipo_analisis";

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".hideMobileList"] = array();


$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".viewFields"] = array();
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".viewFields"][] = "departamento";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".viewFields"][] = "sectorppd";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".viewFields"][] = "munacc";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".viewFields"][] = "COUNT(resu)";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".viewFields"][] = "resu";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".viewFields"][] = "rutres";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".viewFields"][] = "tipo_analisis";

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".addFields"] = array();
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".addFields"][] = "departamento";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".addFields"][] = "sectorppd";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".addFields"][] = "munacc";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".addFields"][] = "resu";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".addFields"][] = "rutres";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".addFields"][] = "tipo_analisis";

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".masterListFields"] = array();
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".masterListFields"][] = "departamento";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".masterListFields"][] = "sectorppd";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".masterListFields"][] = "munacc";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".masterListFields"][] = "COUNT(resu)";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".masterListFields"][] = "resu";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".masterListFields"][] = "rutres";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".masterListFields"][] = "tipo_analisis";

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".inlineAddFields"] = array();
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".inlineAddFields"][] = "departamento";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".inlineAddFields"][] = "sectorppd";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".inlineAddFields"][] = "munacc";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".inlineAddFields"][] = "resu";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".inlineAddFields"][] = "rutres";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".inlineAddFields"][] = "tipo_analisis";

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".editFields"] = array();
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".editFields"][] = "departamento";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".editFields"][] = "sectorppd";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".editFields"][] = "munacc";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".editFields"][] = "resu";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".editFields"][] = "rutres";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".editFields"][] = "tipo_analisis";

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".inlineEditFields"] = array();
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".inlineEditFields"][] = "departamento";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".inlineEditFields"][] = "sectorppd";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".inlineEditFields"][] = "munacc";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".inlineEditFields"][] = "resu";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".inlineEditFields"][] = "rutres";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".inlineEditFields"][] = "tipo_analisis";

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".updateSelectedFields"] = array();
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".updateSelectedFields"][] = "departamento";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".updateSelectedFields"][] = "sectorppd";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".updateSelectedFields"][] = "munacc";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".updateSelectedFields"][] = "resu";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".updateSelectedFields"][] = "rutres";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".updateSelectedFields"][] = "tipo_analisis";


$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".exportFields"] = array();
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".exportFields"][] = "departamento";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".exportFields"][] = "sectorppd";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".exportFields"][] = "munacc";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".exportFields"][] = "COUNT(resu)";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".exportFields"][] = "resu";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".exportFields"][] = "rutres";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".exportFields"][] = "tipo_analisis";

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".importFields"] = array();
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".importFields"][] = "departamento";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".importFields"][] = "sectorppd";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".importFields"][] = "munacc";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".importFields"][] = "COUNT(resu)";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".importFields"][] = "resu";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".importFields"][] = "rutres";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".importFields"][] = "tipo_analisis";

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".printFields"] = array();
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".printFields"][] = "departamento";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".printFields"][] = "sectorppd";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".printFields"][] = "munacc";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".printFields"][] = "COUNT(resu)";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".printFields"][] = "resu";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".printFields"][] = "rutres";
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".printFields"][] = "tipo_analisis";

//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente","departamento");
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




	$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["departamento"] = $fdata;
//	sectorppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sectorppd";
	$fdata["GoodName"] = "sectorppd";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente","sectorppd");
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




	$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["sectorppd"] = $fdata;
//	munacc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "munacc";
	$fdata["GoodName"] = "munacc";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente","munacc");
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




	$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["munacc"] = $fdata;
//	COUNT(resu)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "COUNT(resu)";
	$fdata["GoodName"] = "COUNT_resu_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente","COUNT_resu_");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(resu)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(resu)";

	
	
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




	$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["COUNT(resu)"] = $fdata;
//	resu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "resu";
	$fdata["GoodName"] = "resu";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente","resu");
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




	$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["resu"] = $fdata;
//	rutres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "rutres";
	$fdata["GoodName"] = "rutres";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente","rutres");
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

		$fdata["strField"] = "rutres";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rutres";

	
	
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




	$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["rutres"] = $fdata;
//	tipo_analisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tipo_analisis";
	$fdata["GoodName"] = "tipo_analisis";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente","tipo_analisis");
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

		$fdata["strField"] = "tipo_analisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_analisis";

	
	
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




	$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente["tipo_analisis"] = $fdata;


$tables_data["Tránsito-Ruta transporte colectivo por resultado del accidente"]=&$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente;
$field_labels["Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente"] = &$fieldLabelsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente;
$fieldToolTips["Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente"] = &$fieldToolTipsTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente;
$placeHolders["Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente"] = &$placeHoldersTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente;
$page_titles["Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente"] = &$pageTitlesTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Tránsito-Ruta transporte colectivo por resultado del accidente"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "departamento,  sectorppd,  munacc,  COUNT(resu) AS `COUNT(resu)`,  resu,  rutres,  tipo_analisis";
$proto0["m_strFrom"] = "FROM transito";
$proto0["m_strWhere"] = "(tipo_analisis ='transporte colectivo')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "tipo_analisis ='transporte colectivo'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "tipo_analisis",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Ruta transporte colectivo por resultado del accidente"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "='transporte colectivo'";
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
	"m_srcTableName" => "Tránsito-Ruta transporte colectivo por resultado del accidente"
));

$proto6["m_sql"] = "departamento";
$proto6["m_srcTableName"] = "Tránsito-Ruta transporte colectivo por resultado del accidente";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sectorppd",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Ruta transporte colectivo por resultado del accidente"
));

$proto8["m_sql"] = "sectorppd";
$proto8["m_srcTableName"] = "Tránsito-Ruta transporte colectivo por resultado del accidente";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "munacc",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Ruta transporte colectivo por resultado del accidente"
));

$proto10["m_sql"] = "munacc";
$proto10["m_srcTableName"] = "Tránsito-Ruta transporte colectivo por resultado del accidente";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_COUNT";
$proto13["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "resu",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Ruta transporte colectivo por resultado del accidente"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "COUNT(resu)";
$proto12["m_srcTableName"] = "Tránsito-Ruta transporte colectivo por resultado del accidente";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "COUNT(resu)";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "resu",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Ruta transporte colectivo por resultado del accidente"
));

$proto15["m_sql"] = "resu";
$proto15["m_srcTableName"] = "Tránsito-Ruta transporte colectivo por resultado del accidente";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "rutres",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Ruta transporte colectivo por resultado del accidente"
));

$proto17["m_sql"] = "rutres";
$proto17["m_srcTableName"] = "Tránsito-Ruta transporte colectivo por resultado del accidente";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_analisis",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Ruta transporte colectivo por resultado del accidente"
));

$proto19["m_sql"] = "tipo_analisis";
$proto19["m_srcTableName"] = "Tránsito-Ruta transporte colectivo por resultado del accidente";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "transito";
$proto22["m_srcTableName"] = "Tránsito-Ruta transporte colectivo por resultado del accidente";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "eid";
$proto22["m_columns"][] = "pid";
$proto22["m_columns"][] = "unidad";
$proto22["m_columns"][] = "sexo";
$proto22["m_columns"][] = "edad";
$proto22["m_columns"][] = "resu";
$proto22["m_columns"][] = "calidad";
$proto22["m_columns"][] = "fecacc";
$proto22["m_columns"][] = "horacc";
$proto22["m_columns"][] = "rangohorario";
$proto22["m_columns"][] = "tipacc";
$proto22["m_columns"][] = "cauacc";
$proto22["m_columns"][] = "diracc";
$proto22["m_columns"][] = "munacc";
$proto22["m_columns"][] = "clares";
$proto22["m_columns"][] = "rutres";
$proto22["m_columns"][] = "repdet";
$proto22["m_columns"][] = "departamento";
$proto22["m_columns"][] = "dia";
$proto22["m_columns"][] = "sectorppd";
$proto22["m_columns"][] = "rangoetario";
$proto22["m_columns"][] = "causa_analisis";
$proto22["m_columns"][] = "tipo_analisis";
$proto22["m_columns"][] = "mes_analisis";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "transito";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "Tránsito-Ruta transporte colectivo por resultado del accidente";
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
	"m_strName" => "departamento",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Ruta transporte colectivo por resultado del accidente"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "sectorppd",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Ruta transporte colectivo por resultado del accidente"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "munacc",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Ruta transporte colectivo por resultado del accidente"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "resu",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Ruta transporte colectivo por resultado del accidente"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "rutres",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Ruta transporte colectivo por resultado del accidente"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "tipo_analisis",
	"m_strTable" => "transito",
	"m_srcTableName" => "Tránsito-Ruta transporte colectivo por resultado del accidente"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Tránsito-Ruta transporte colectivo por resultado del accidente";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente = createSqlQuery_Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente();


	
		;

							

$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".sqlquery"] = $queryData_Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente;

$tableEvents["Tránsito-Ruta transporte colectivo por resultado del accidente"] = new eventsBase;
$tdataTr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente[".hasEvents"] = false;

?>