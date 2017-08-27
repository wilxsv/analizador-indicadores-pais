<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPPL_grupos_etarios_por_Deportado_Femenino = array();
	$tdataPPL_grupos_etarios_por_Deportado_Femenino[".truncateText"] = true;
	$tdataPPL_grupos_etarios_por_Deportado_Femenino[".NumberOfChars"] = 80;
	$tdataPPL_grupos_etarios_por_Deportado_Femenino[".ShortName"] = "PPL_grupos_etarios_por_Deportado_Femenino";
	$tdataPPL_grupos_etarios_por_Deportado_Femenino[".OwnerID"] = "";
	$tdataPPL_grupos_etarios_por_Deportado_Femenino[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsPPL_grupos_etarios_por_Deportado_Femenino = array();
$fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino = array();
$pageTitlesPPL_grupos_etarios_por_Deportado_Femenino = array();
$placeHoldersPPL_grupos_etarios_por_Deportado_Femenino = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPPL_grupos_etarios_por_Deportado_Femenino["Spanish"] = array();
	$fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino["Spanish"] = array();
	$placeHoldersPPL_grupos_etarios_por_Deportado_Femenino["Spanish"] = array();
	$pageTitlesPPL_grupos_etarios_por_Deportado_Femenino["Spanish"] = array();
	$fieldLabelsPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]["rangoetario"] = "";
	$placeHoldersPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]["rangoetario"] = "";
	$fieldLabelsPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]["genero"] = "Genero";
	$fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]["genero"] = "";
	$placeHoldersPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]["genero"] = "";
	$fieldLabelsPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]["mun_resid"] = "";
	$placeHoldersPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]["mun_resid"] = "";
	$fieldLabelsPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]["depart_resid"] = "";
	$placeHoldersPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]["depart_resid"] = "";
	$fieldLabelsPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]["deportado"] = "Deportado";
	$fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]["deportado"] = "";
	$placeHoldersPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]["deportado"] = "";
	$fieldLabelsPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]["sector_ppd"] = "";
	$placeHoldersPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]["sector_ppd"] = "";
	$fieldLabelsPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]["COUNT_mun_resid_"] = "";
	$placeHoldersPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]["COUNT_mun_resid_"] = "";
	if (count($fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino["Spanish"]))
		$tdataPPL_grupos_etarios_por_Deportado_Femenino[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPPL_grupos_etarios_por_Deportado_Femenino["English"] = array();
	$fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino["English"] = array();
	$placeHoldersPPL_grupos_etarios_por_Deportado_Femenino["English"] = array();
	$pageTitlesPPL_grupos_etarios_por_Deportado_Femenino["English"] = array();
	$fieldLabelsPPL_grupos_etarios_por_Deportado_Femenino["English"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino["English"]["rangoetario"] = "";
	$placeHoldersPPL_grupos_etarios_por_Deportado_Femenino["English"]["rangoetario"] = "";
	$fieldLabelsPPL_grupos_etarios_por_Deportado_Femenino["English"]["genero"] = "Genero";
	$fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino["English"]["genero"] = "";
	$placeHoldersPPL_grupos_etarios_por_Deportado_Femenino["English"]["genero"] = "";
	$fieldLabelsPPL_grupos_etarios_por_Deportado_Femenino["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino["English"]["mun_resid"] = "";
	$placeHoldersPPL_grupos_etarios_por_Deportado_Femenino["English"]["mun_resid"] = "";
	$fieldLabelsPPL_grupos_etarios_por_Deportado_Femenino["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino["English"]["depart_resid"] = "";
	$placeHoldersPPL_grupos_etarios_por_Deportado_Femenino["English"]["depart_resid"] = "";
	$fieldLabelsPPL_grupos_etarios_por_Deportado_Femenino["English"]["deportado"] = "Deportado";
	$fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino["English"]["deportado"] = "";
	$placeHoldersPPL_grupos_etarios_por_Deportado_Femenino["English"]["deportado"] = "";
	$fieldLabelsPPL_grupos_etarios_por_Deportado_Femenino["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino["English"]["sector_ppd"] = "";
	$placeHoldersPPL_grupos_etarios_por_Deportado_Femenino["English"]["sector_ppd"] = "";
	$fieldLabelsPPL_grupos_etarios_por_Deportado_Femenino["English"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino["English"]["COUNT_mun_resid_"] = "";
	$placeHoldersPPL_grupos_etarios_por_Deportado_Femenino["English"]["COUNT_mun_resid_"] = "";
	if (count($fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino["English"]))
		$tdataPPL_grupos_etarios_por_Deportado_Femenino[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPPL_grupos_etarios_por_Deportado_Femenino[""] = array();
	$fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino[""] = array();
	$placeHoldersPPL_grupos_etarios_por_Deportado_Femenino[""] = array();
	$pageTitlesPPL_grupos_etarios_por_Deportado_Femenino[""] = array();
	if (count($fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino[""]))
		$tdataPPL_grupos_etarios_por_Deportado_Femenino[".isUseToolTips"] = true;
}





$tdataPPL_grupos_etarios_por_Deportado_Femenino[".shortTableName"] = "PPL_grupos_etarios_por_Deportado_Femenino";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".nSecOptions"] = 0;
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".recsPerRowPrint"] = 1;
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".mainTableOwnerID"] = "";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".moveNext"] = 1;
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".entityType"] = 2;

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".strOriginalTableName"] = "carcel";

	



$tdataPPL_grupos_etarios_por_Deportado_Femenino[".showAddInPopup"] = false;

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".showEditInPopup"] = false;

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPPL_grupos_etarios_por_Deportado_Femenino[".fieldsForRegister"] = array();

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".listAjax"] = false;

	$tdataPPL_grupos_etarios_por_Deportado_Femenino[".audit"] = false;

	$tdataPPL_grupos_etarios_por_Deportado_Femenino[".locking"] = false;



$tdataPPL_grupos_etarios_por_Deportado_Femenino[".list"] = true;



$tdataPPL_grupos_etarios_por_Deportado_Femenino[".reorderRecordsByHeader"] = true;





$tdataPPL_grupos_etarios_por_Deportado_Femenino[".exportTo"] = true;

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".printFriendly"] = true;


$tdataPPL_grupos_etarios_por_Deportado_Femenino[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".searchSaving"] = false;
//

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".showSearchPanel"] = true;
		$tdataPPL_grupos_etarios_por_Deportado_Femenino[".flexibleSearch"] = true;

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".isUseAjaxSuggest"] = true;






$tdataPPL_grupos_etarios_por_Deportado_Femenino[".ajaxCodeSnippetAdded"] = false;

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".buttonsAdded"] = false;

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".isUseTimeForSearch"] = false;





$tdataPPL_grupos_etarios_por_Deportado_Femenino[".allSearchFields"] = array();
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".filterFields"] = array();
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".requiredSearchFields"] = array();

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".allSearchFields"][] = "sector_ppd";
	$tdataPPL_grupos_etarios_por_Deportado_Femenino[".allSearchFields"][] = "mun_resid";
		$tdataPPL_grupos_etarios_por_Deportado_Femenino[".requiredSearchFields"][] = "mun_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".allSearchFields"][] = "depart_resid";
		$tdataPPL_grupos_etarios_por_Deportado_Femenino[".requiredSearchFields"][] = "depart_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".allSearchFields"][] = "genero";
	$tdataPPL_grupos_etarios_por_Deportado_Femenino[".allSearchFields"][] = "deportado";
	$tdataPPL_grupos_etarios_por_Deportado_Femenino[".allSearchFields"][] = "COUNT(mun_resid)";
	$tdataPPL_grupos_etarios_por_Deportado_Femenino[".allSearchFields"][] = "rangoetario";
	

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".googleLikeFields"] = array();
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".googleLikeFields"][] = "mun_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".googleLikeFields"][] = "depart_resid";

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".panelSearchFields"] = array();
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".searchPanelOptions"] = array();
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".panelSearchFields"][] = "mun_resid";
	$tdataPPL_grupos_etarios_por_Deportado_Femenino[".panelSearchFields"][] = "depart_resid";
	
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".advSearchFields"] = array();
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".advSearchFields"][] = "mun_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".advSearchFields"][] = "depart_resid";

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".tableType"] = "report";

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".printerPageOrientation"] = 0;
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".nPrinterPageScale"] = 100;

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".nPrinterSplitRecords"] = 40;

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".nPrinterPDFSplitRecords"] = 40;



$tdataPPL_grupos_etarios_por_Deportado_Femenino[".geocodingEnabled"] = false;

//report settings
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".crossTabReport"] = true;

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".reportGroupFields"] = true;
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "deportado";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "rangoetario";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".reportGroupFieldsData"] = $reportGroupFields;

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".reportHorizontalSummary"] = true;

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".isExistTotalFields"] = true;

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".reportVerticalSummary"] = true;



$tdataPPL_grupos_etarios_por_Deportado_Femenino[".repShowDet"] = true;

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".reportLayout"] = 6;

//end of report settings




$tdataPPL_grupos_etarios_por_Deportado_Femenino[".listGridLayout"] = 3;

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".strOrderBy"] = $tstrOrderBy;

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".orderindexes"] = array();

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".sqlHead"] = "SELECT sector_ppd,  mun_resid,  depart_resid,  genero,  deportado,  COUNT(mun_resid) AS `COUNT(mun_resid)`,  rangoetario";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".sqlFrom"] = "FROM carcel";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".sqlWhereExpr"] = "genero ='FEMENINO'";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".arrGroupsPerPage"] = $arrGPP;

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".highlightSearchResults"] = true;

$tableKeysPPL_grupos_etarios_por_Deportado_Femenino = array();
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".Keys"] = $tableKeysPPL_grupos_etarios_por_Deportado_Femenino;

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".listFields"] = array();
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".listFields"][] = "sector_ppd";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".listFields"][] = "mun_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".listFields"][] = "depart_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".listFields"][] = "genero";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".listFields"][] = "deportado";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".listFields"][] = "COUNT(mun_resid)";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".listFields"][] = "rangoetario";

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".hideMobileList"] = array();


$tdataPPL_grupos_etarios_por_Deportado_Femenino[".viewFields"] = array();
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".viewFields"][] = "sector_ppd";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".viewFields"][] = "mun_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".viewFields"][] = "depart_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".viewFields"][] = "genero";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".viewFields"][] = "deportado";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".viewFields"][] = "COUNT(mun_resid)";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".viewFields"][] = "rangoetario";

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".addFields"] = array();
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".addFields"][] = "sector_ppd";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".addFields"][] = "mun_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".addFields"][] = "depart_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".addFields"][] = "genero";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".addFields"][] = "deportado";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".addFields"][] = "rangoetario";

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".masterListFields"] = array();
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".masterListFields"][] = "sector_ppd";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".masterListFields"][] = "mun_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".masterListFields"][] = "depart_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".masterListFields"][] = "genero";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".masterListFields"][] = "deportado";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".masterListFields"][] = "COUNT(mun_resid)";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".masterListFields"][] = "rangoetario";

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".inlineAddFields"] = array();
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".inlineAddFields"][] = "sector_ppd";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".inlineAddFields"][] = "mun_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".inlineAddFields"][] = "depart_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".inlineAddFields"][] = "genero";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".inlineAddFields"][] = "deportado";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".inlineAddFields"][] = "rangoetario";

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".editFields"] = array();
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".editFields"][] = "sector_ppd";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".editFields"][] = "mun_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".editFields"][] = "depart_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".editFields"][] = "genero";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".editFields"][] = "deportado";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".editFields"][] = "rangoetario";

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".inlineEditFields"] = array();
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".inlineEditFields"][] = "sector_ppd";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".inlineEditFields"][] = "mun_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".inlineEditFields"][] = "depart_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".inlineEditFields"][] = "genero";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".inlineEditFields"][] = "deportado";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".inlineEditFields"][] = "rangoetario";

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".updateSelectedFields"] = array();
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".updateSelectedFields"][] = "sector_ppd";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".updateSelectedFields"][] = "mun_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".updateSelectedFields"][] = "depart_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".updateSelectedFields"][] = "genero";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".updateSelectedFields"][] = "deportado";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".updateSelectedFields"][] = "rangoetario";


$tdataPPL_grupos_etarios_por_Deportado_Femenino[".exportFields"] = array();
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".exportFields"][] = "sector_ppd";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".exportFields"][] = "mun_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".exportFields"][] = "depart_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".exportFields"][] = "genero";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".exportFields"][] = "deportado";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".exportFields"][] = "COUNT(mun_resid)";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".exportFields"][] = "rangoetario";

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".importFields"] = array();
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".importFields"][] = "sector_ppd";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".importFields"][] = "mun_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".importFields"][] = "depart_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".importFields"][] = "genero";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".importFields"][] = "deportado";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".importFields"][] = "COUNT(mun_resid)";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".importFields"][] = "rangoetario";

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".printFields"] = array();
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".printFields"][] = "sector_ppd";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".printFields"][] = "mun_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".printFields"][] = "depart_resid";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".printFields"][] = "genero";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".printFields"][] = "deportado";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".printFields"][] = "COUNT(mun_resid)";
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".printFields"][] = "rangoetario";

//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_grupos_etarios_por_Deportado_Femenino","sector_ppd");
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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

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




	$tdataPPL_grupos_etarios_por_Deportado_Femenino["sector_ppd"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_grupos_etarios_por_Deportado_Femenino","mun_resid");
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
	$fdata["FullName"] = "mun_resid";

	
	
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




	$tdataPPL_grupos_etarios_por_Deportado_Femenino["mun_resid"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_grupos_etarios_por_Deportado_Femenino","depart_resid");
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
	$fdata["FullName"] = "depart_resid";

	
	
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




	$tdataPPL_grupos_etarios_por_Deportado_Femenino["depart_resid"] = $fdata;
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_grupos_etarios_por_Deportado_Femenino","genero");
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

		$fdata["strField"] = "genero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "genero";

	
	
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




	$tdataPPL_grupos_etarios_por_Deportado_Femenino["genero"] = $fdata;
//	deportado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "deportado";
	$fdata["GoodName"] = "deportado";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_grupos_etarios_por_Deportado_Femenino","deportado");
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

		$fdata["strField"] = "deportado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "deportado";

	
	
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




	$tdataPPL_grupos_etarios_por_Deportado_Femenino["deportado"] = $fdata;
//	COUNT(mun_resid)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "COUNT(mun_resid)";
	$fdata["GoodName"] = "COUNT_mun_resid_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PPL_grupos_etarios_por_Deportado_Femenino","COUNT_mun_resid_");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(mun_resid)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(mun_resid)";

	
	
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




	$tdataPPL_grupos_etarios_por_Deportado_Femenino["COUNT(mun_resid)"] = $fdata;
//	rangoetario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "rangoetario";
	$fdata["GoodName"] = "rangoetario";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_grupos_etarios_por_Deportado_Femenino","rangoetario");
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

		$fdata["strField"] = "rangoetario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rangoetario";

	
	
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




	$tdataPPL_grupos_etarios_por_Deportado_Femenino["rangoetario"] = $fdata;


$tables_data["PPL grupos etarios por Deportado Femenino"]=&$tdataPPL_grupos_etarios_por_Deportado_Femenino;
$field_labels["PPL_grupos_etarios_por_Deportado_Femenino"] = &$fieldLabelsPPL_grupos_etarios_por_Deportado_Femenino;
$fieldToolTips["PPL_grupos_etarios_por_Deportado_Femenino"] = &$fieldToolTipsPPL_grupos_etarios_por_Deportado_Femenino;
$placeHolders["PPL_grupos_etarios_por_Deportado_Femenino"] = &$placeHoldersPPL_grupos_etarios_por_Deportado_Femenino;
$page_titles["PPL_grupos_etarios_por_Deportado_Femenino"] = &$pageTitlesPPL_grupos_etarios_por_Deportado_Femenino;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["PPL grupos etarios por Deportado Femenino"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PPL_grupos_etarios_por_Deportado_Femenino()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sector_ppd,  mun_resid,  depart_resid,  genero,  deportado,  COUNT(mun_resid) AS `COUNT(mun_resid)`,  rangoetario";
$proto0["m_strFrom"] = "FROM carcel";
$proto0["m_strWhere"] = "genero ='FEMENINO'";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "genero ='FEMENINO'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL grupos etarios por Deportado Femenino"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "='FEMENINO'";
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
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL grupos etarios por Deportado Femenino"
));

$proto6["m_sql"] = "sector_ppd";
$proto6["m_srcTableName"] = "PPL grupos etarios por Deportado Femenino";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL grupos etarios por Deportado Femenino"
));

$proto8["m_sql"] = "mun_resid";
$proto8["m_srcTableName"] = "PPL grupos etarios por Deportado Femenino";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL grupos etarios por Deportado Femenino"
));

$proto10["m_sql"] = "depart_resid";
$proto10["m_srcTableName"] = "PPL grupos etarios por Deportado Femenino";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL grupos etarios por Deportado Femenino"
));

$proto12["m_sql"] = "genero";
$proto12["m_srcTableName"] = "PPL grupos etarios por Deportado Femenino";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "deportado",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL grupos etarios por Deportado Femenino"
));

$proto14["m_sql"] = "deportado";
$proto14["m_srcTableName"] = "PPL grupos etarios por Deportado Femenino";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_COUNT";
$proto17["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL grupos etarios por Deportado Femenino"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "COUNT(mun_resid)";
$proto16["m_srcTableName"] = "PPL grupos etarios por Deportado Femenino";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "COUNT(mun_resid)";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL grupos etarios por Deportado Femenino"
));

$proto19["m_sql"] = "rangoetario";
$proto19["m_srcTableName"] = "PPL grupos etarios por Deportado Femenino";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "carcel";
$proto22["m_srcTableName"] = "PPL grupos etarios por Deportado Femenino";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "id";
$proto22["m_columns"][] = "sipe";
$proto22["m_columns"][] = "afis";
$proto22["m_columns"][] = "edad";
$proto22["m_columns"][] = "rangoetario";
$proto22["m_columns"][] = "genero";
$proto22["m_columns"][] = "fecha_nac";
$proto22["m_columns"][] = "edad1";
$proto22["m_columns"][] = "dui";
$proto22["m_columns"][] = "nivel_edu";
$proto22["m_columns"][] = "educacionanalisis";
$proto22["m_columns"][] = "profesion_oficio";
$proto22["m_columns"][] = "estado_civil";
$proto22["m_columns"][] = "ciudadania";
$proto22["m_columns"][] = "mun_nacimiento";
$proto22["m_columns"][] = "depto_nacim";
$proto22["m_columns"][] = "direccion";
$proto22["m_columns"][] = "mun_resid";
$proto22["m_columns"][] = "depart_resid";
$proto22["m_columns"][] = "delitosanalisis";
$proto22["m_columns"][] = "sj_interno";
$proto22["m_columns"][] = "fase";
$proto22["m_columns"][] = "org_delictiva";
$proto22["m_columns"][] = "tipo_mara";
$proto22["m_columns"][] = "reincidente";
$proto22["m_columns"][] = "deportado";
$proto22["m_columns"][] = "direccion1";
$proto22["m_columns"][] = "sector";
$proto22["m_columns"][] = "celda";
$proto22["m_columns"][] = "fecha_ing__sp";
$proto22["m_columns"][] = "libro";
$proto22["m_columns"][] = "fecha_ing__cp";
$proto22["m_columns"][] = "total_delitos";
$proto22["m_columns"][] = "delitos";
$proto22["m_columns"][] = "delitoanalisis";
$proto22["m_columns"][] = "sector_ppd";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "carcel";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "PPL grupos etarios por Deportado Femenino";
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
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL grupos etarios por Deportado Femenino"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL grupos etarios por Deportado Femenino"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL grupos etarios por Deportado Femenino"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL grupos etarios por Deportado Femenino"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "deportado",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL grupos etarios por Deportado Femenino"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL grupos etarios por Deportado Femenino"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PPL grupos etarios por Deportado Femenino";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PPL_grupos_etarios_por_Deportado_Femenino = createSqlQuery_PPL_grupos_etarios_por_Deportado_Femenino();


	
		;

							

$tdataPPL_grupos_etarios_por_Deportado_Femenino[".sqlquery"] = $queryData_PPL_grupos_etarios_por_Deportado_Femenino;

$tableEvents["PPL grupos etarios por Deportado Femenino"] = new eventsBase;
$tdataPPL_grupos_etarios_por_Deportado_Femenino[".hasEvents"] = false;

?>