<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPPL_Grupos_etarios_por_delitos_masculino = array();
	$tdataPPL_Grupos_etarios_por_delitos_masculino[".truncateText"] = true;
	$tdataPPL_Grupos_etarios_por_delitos_masculino[".NumberOfChars"] = 80;
	$tdataPPL_Grupos_etarios_por_delitos_masculino[".ShortName"] = "PPL_Grupos_etarios_por_delitos_masculino";
	$tdataPPL_Grupos_etarios_por_delitos_masculino[".OwnerID"] = "";
	$tdataPPL_Grupos_etarios_por_delitos_masculino[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsPPL_Grupos_etarios_por_delitos_masculino = array();
$fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino = array();
$pageTitlesPPL_Grupos_etarios_por_delitos_masculino = array();
$placeHoldersPPL_Grupos_etarios_por_delitos_masculino = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPPL_Grupos_etarios_por_delitos_masculino["Spanish"] = array();
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino["Spanish"] = array();
	$placeHoldersPPL_Grupos_etarios_por_delitos_masculino["Spanish"] = array();
	$pageTitlesPPL_Grupos_etarios_por_delitos_masculino["Spanish"] = array();
	$fieldLabelsPPL_Grupos_etarios_por_delitos_masculino["Spanish"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino["Spanish"]["rangoetario"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_masculino["Spanish"]["rangoetario"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_masculino["Spanish"]["genero"] = "Genero";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino["Spanish"]["genero"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_masculino["Spanish"]["genero"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_masculino["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino["Spanish"]["mun_resid"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_masculino["Spanish"]["mun_resid"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_masculino["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino["Spanish"]["depart_resid"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_masculino["Spanish"]["depart_resid"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_masculino["Spanish"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino["Spanish"]["delitoanalisis"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_masculino["Spanish"]["delitoanalisis"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_masculino["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino["Spanish"]["sector_ppd"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_masculino["Spanish"]["sector_ppd"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_masculino["Spanish"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino["Spanish"]["COUNT_mun_resid_"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_masculino["Spanish"]["COUNT_mun_resid_"] = "";
	if (count($fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino["Spanish"]))
		$tdataPPL_Grupos_etarios_por_delitos_masculino[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPPL_Grupos_etarios_por_delitos_masculino["English"] = array();
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino["English"] = array();
	$placeHoldersPPL_Grupos_etarios_por_delitos_masculino["English"] = array();
	$pageTitlesPPL_Grupos_etarios_por_delitos_masculino["English"] = array();
	$fieldLabelsPPL_Grupos_etarios_por_delitos_masculino["English"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino["English"]["rangoetario"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_masculino["English"]["rangoetario"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_masculino["English"]["genero"] = "Genero";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino["English"]["genero"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_masculino["English"]["genero"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_masculino["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino["English"]["mun_resid"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_masculino["English"]["mun_resid"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_masculino["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino["English"]["depart_resid"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_masculino["English"]["depart_resid"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_masculino["English"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino["English"]["delitoanalisis"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_masculino["English"]["delitoanalisis"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_masculino["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino["English"]["sector_ppd"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_masculino["English"]["sector_ppd"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_masculino["English"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino["English"]["COUNT_mun_resid_"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_masculino["English"]["COUNT_mun_resid_"] = "";
	if (count($fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino["English"]))
		$tdataPPL_Grupos_etarios_por_delitos_masculino[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPPL_Grupos_etarios_por_delitos_masculino[""] = array();
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino[""] = array();
	$placeHoldersPPL_Grupos_etarios_por_delitos_masculino[""] = array();
	$pageTitlesPPL_Grupos_etarios_por_delitos_masculino[""] = array();
	if (count($fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino[""]))
		$tdataPPL_Grupos_etarios_por_delitos_masculino[".isUseToolTips"] = true;
}





$tdataPPL_Grupos_etarios_por_delitos_masculino[".shortTableName"] = "PPL_Grupos_etarios_por_delitos_masculino";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".nSecOptions"] = 0;
$tdataPPL_Grupos_etarios_por_delitos_masculino[".recsPerRowPrint"] = 1;
$tdataPPL_Grupos_etarios_por_delitos_masculino[".mainTableOwnerID"] = "";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".moveNext"] = 1;
$tdataPPL_Grupos_etarios_por_delitos_masculino[".entityType"] = 2;

$tdataPPL_Grupos_etarios_por_delitos_masculino[".strOriginalTableName"] = "carcel";

	



$tdataPPL_Grupos_etarios_por_delitos_masculino[".showAddInPopup"] = false;

$tdataPPL_Grupos_etarios_por_delitos_masculino[".showEditInPopup"] = false;

$tdataPPL_Grupos_etarios_por_delitos_masculino[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPPL_Grupos_etarios_por_delitos_masculino[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPPL_Grupos_etarios_por_delitos_masculino[".fieldsForRegister"] = array();

$tdataPPL_Grupos_etarios_por_delitos_masculino[".listAjax"] = false;

	$tdataPPL_Grupos_etarios_por_delitos_masculino[".audit"] = false;

	$tdataPPL_Grupos_etarios_por_delitos_masculino[".locking"] = false;



$tdataPPL_Grupos_etarios_por_delitos_masculino[".list"] = true;



$tdataPPL_Grupos_etarios_por_delitos_masculino[".reorderRecordsByHeader"] = true;





$tdataPPL_Grupos_etarios_por_delitos_masculino[".exportTo"] = true;

$tdataPPL_Grupos_etarios_por_delitos_masculino[".printFriendly"] = true;


$tdataPPL_Grupos_etarios_por_delitos_masculino[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPPL_Grupos_etarios_por_delitos_masculino[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPPL_Grupos_etarios_por_delitos_masculino[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPPL_Grupos_etarios_por_delitos_masculino[".searchSaving"] = false;
//

$tdataPPL_Grupos_etarios_por_delitos_masculino[".showSearchPanel"] = true;
		$tdataPPL_Grupos_etarios_por_delitos_masculino[".flexibleSearch"] = true;

$tdataPPL_Grupos_etarios_por_delitos_masculino[".isUseAjaxSuggest"] = true;






$tdataPPL_Grupos_etarios_por_delitos_masculino[".ajaxCodeSnippetAdded"] = false;

$tdataPPL_Grupos_etarios_por_delitos_masculino[".buttonsAdded"] = false;

$tdataPPL_Grupos_etarios_por_delitos_masculino[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPPL_Grupos_etarios_por_delitos_masculino[".isUseTimeForSearch"] = false;





$tdataPPL_Grupos_etarios_por_delitos_masculino[".allSearchFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_masculino[".filterFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_masculino[".requiredSearchFields"] = array();

$tdataPPL_Grupos_etarios_por_delitos_masculino[".allSearchFields"][] = "sector_ppd";
	$tdataPPL_Grupos_etarios_por_delitos_masculino[".allSearchFields"][] = "delitoanalisis";
	$tdataPPL_Grupos_etarios_por_delitos_masculino[".allSearchFields"][] = "mun_resid";
		$tdataPPL_Grupos_etarios_por_delitos_masculino[".requiredSearchFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".allSearchFields"][] = "depart_resid";
		$tdataPPL_Grupos_etarios_por_delitos_masculino[".requiredSearchFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".allSearchFields"][] = "rangoetario";
	$tdataPPL_Grupos_etarios_por_delitos_masculino[".allSearchFields"][] = "genero";
	$tdataPPL_Grupos_etarios_por_delitos_masculino[".allSearchFields"][] = "COUNT(mun_resid)";
	

$tdataPPL_Grupos_etarios_por_delitos_masculino[".googleLikeFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_masculino[".googleLikeFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".googleLikeFields"][] = "depart_resid";

$tdataPPL_Grupos_etarios_por_delitos_masculino[".panelSearchFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_masculino[".searchPanelOptions"] = array();
$tdataPPL_Grupos_etarios_por_delitos_masculino[".panelSearchFields"][] = "mun_resid";
	$tdataPPL_Grupos_etarios_por_delitos_masculino[".panelSearchFields"][] = "depart_resid";
	
$tdataPPL_Grupos_etarios_por_delitos_masculino[".advSearchFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_masculino[".advSearchFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".advSearchFields"][] = "depart_resid";

$tdataPPL_Grupos_etarios_por_delitos_masculino[".tableType"] = "report";

$tdataPPL_Grupos_etarios_por_delitos_masculino[".printerPageOrientation"] = 0;
$tdataPPL_Grupos_etarios_por_delitos_masculino[".nPrinterPageScale"] = 100;

$tdataPPL_Grupos_etarios_por_delitos_masculino[".nPrinterSplitRecords"] = 40;

$tdataPPL_Grupos_etarios_por_delitos_masculino[".nPrinterPDFSplitRecords"] = 40;



$tdataPPL_Grupos_etarios_por_delitos_masculino[".geocodingEnabled"] = false;

//report settings
$tdataPPL_Grupos_etarios_por_delitos_masculino[".crossTabReport"] = true;

$tdataPPL_Grupos_etarios_por_delitos_masculino[".reportGroupFields"] = true;
$tdataPPL_Grupos_etarios_por_delitos_masculino[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "rangoetario";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "delitoanalisis";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataPPL_Grupos_etarios_por_delitos_masculino[".reportGroupFieldsData"] = $reportGroupFields;

$tdataPPL_Grupos_etarios_por_delitos_masculino[".reportHorizontalSummary"] = true;

$tdataPPL_Grupos_etarios_por_delitos_masculino[".isExistTotalFields"] = true;

$tdataPPL_Grupos_etarios_por_delitos_masculino[".reportVerticalSummary"] = true;



$tdataPPL_Grupos_etarios_por_delitos_masculino[".repShowDet"] = true;

$tdataPPL_Grupos_etarios_por_delitos_masculino[".reportLayout"] = 6;

//end of report settings




$tdataPPL_Grupos_etarios_por_delitos_masculino[".listGridLayout"] = 3;

$tdataPPL_Grupos_etarios_por_delitos_masculino[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPPL_Grupos_etarios_por_delitos_masculino[".strOrderBy"] = $tstrOrderBy;

$tdataPPL_Grupos_etarios_por_delitos_masculino[".orderindexes"] = array();

$tdataPPL_Grupos_etarios_por_delitos_masculino[".sqlHead"] = "SELECT sector_ppd,  delitoanalisis,  mun_resid,  depart_resid,  rangoetario,  genero,  COUNT(mun_resid) AS `COUNT(mun_resid)`";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".sqlFrom"] = "FROM carcel";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".sqlWhereExpr"] = "genero ='MASCULINO'";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPPL_Grupos_etarios_por_delitos_masculino[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPPL_Grupos_etarios_por_delitos_masculino[".arrGroupsPerPage"] = $arrGPP;

$tdataPPL_Grupos_etarios_por_delitos_masculino[".highlightSearchResults"] = true;

$tableKeysPPL_Grupos_etarios_por_delitos_masculino = array();
$tdataPPL_Grupos_etarios_por_delitos_masculino[".Keys"] = $tableKeysPPL_Grupos_etarios_por_delitos_masculino;

$tdataPPL_Grupos_etarios_por_delitos_masculino[".listFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_masculino[".listFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".listFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".listFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".listFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".listFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".listFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".listFields"][] = "COUNT(mun_resid)";

$tdataPPL_Grupos_etarios_por_delitos_masculino[".hideMobileList"] = array();


$tdataPPL_Grupos_etarios_por_delitos_masculino[".viewFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_masculino[".viewFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".viewFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".viewFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".viewFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".viewFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".viewFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".viewFields"][] = "COUNT(mun_resid)";

$tdataPPL_Grupos_etarios_por_delitos_masculino[".addFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_masculino[".addFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".addFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".addFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".addFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".addFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".addFields"][] = "genero";

$tdataPPL_Grupos_etarios_por_delitos_masculino[".masterListFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_masculino[".masterListFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".masterListFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".masterListFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".masterListFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".masterListFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".masterListFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".masterListFields"][] = "COUNT(mun_resid)";

$tdataPPL_Grupos_etarios_por_delitos_masculino[".inlineAddFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_masculino[".inlineAddFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".inlineAddFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".inlineAddFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".inlineAddFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".inlineAddFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".inlineAddFields"][] = "genero";

$tdataPPL_Grupos_etarios_por_delitos_masculino[".editFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_masculino[".editFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".editFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".editFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".editFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".editFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".editFields"][] = "genero";

$tdataPPL_Grupos_etarios_por_delitos_masculino[".inlineEditFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_masculino[".inlineEditFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".inlineEditFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".inlineEditFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".inlineEditFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".inlineEditFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".inlineEditFields"][] = "genero";

$tdataPPL_Grupos_etarios_por_delitos_masculino[".updateSelectedFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_masculino[".updateSelectedFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".updateSelectedFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".updateSelectedFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".updateSelectedFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".updateSelectedFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".updateSelectedFields"][] = "genero";


$tdataPPL_Grupos_etarios_por_delitos_masculino[".exportFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_masculino[".exportFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".exportFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".exportFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".exportFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".exportFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".exportFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".exportFields"][] = "COUNT(mun_resid)";

$tdataPPL_Grupos_etarios_por_delitos_masculino[".importFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_masculino[".importFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".importFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".importFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".importFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".importFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".importFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".importFields"][] = "COUNT(mun_resid)";

$tdataPPL_Grupos_etarios_por_delitos_masculino[".printFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_masculino[".printFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".printFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".printFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".printFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".printFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".printFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_delitos_masculino[".printFields"][] = "COUNT(mun_resid)";

//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_delitos_masculino","sector_ppd");
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




	$tdataPPL_Grupos_etarios_por_delitos_masculino["sector_ppd"] = $fdata;
//	delitoanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "delitoanalisis";
	$fdata["GoodName"] = "delitoanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_delitos_masculino","delitoanalisis");
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

		$fdata["strField"] = "delitoanalisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delitoanalisis";

	
	
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




	$tdataPPL_Grupos_etarios_por_delitos_masculino["delitoanalisis"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_delitos_masculino","mun_resid");
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




	$tdataPPL_Grupos_etarios_por_delitos_masculino["mun_resid"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_delitos_masculino","depart_resid");
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




	$tdataPPL_Grupos_etarios_por_delitos_masculino["depart_resid"] = $fdata;
//	rangoetario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rangoetario";
	$fdata["GoodName"] = "rangoetario";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_delitos_masculino","rangoetario");
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




	$tdataPPL_Grupos_etarios_por_delitos_masculino["rangoetario"] = $fdata;
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_delitos_masculino","genero");
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




	$tdataPPL_Grupos_etarios_por_delitos_masculino["genero"] = $fdata;
//	COUNT(mun_resid)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "COUNT(mun_resid)";
	$fdata["GoodName"] = "COUNT_mun_resid_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_delitos_masculino","COUNT_mun_resid_");
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




	$tdataPPL_Grupos_etarios_por_delitos_masculino["COUNT(mun_resid)"] = $fdata;


$tables_data["PPL Grupos etarios por delitos masculino"]=&$tdataPPL_Grupos_etarios_por_delitos_masculino;
$field_labels["PPL_Grupos_etarios_por_delitos_masculino"] = &$fieldLabelsPPL_Grupos_etarios_por_delitos_masculino;
$fieldToolTips["PPL_Grupos_etarios_por_delitos_masculino"] = &$fieldToolTipsPPL_Grupos_etarios_por_delitos_masculino;
$placeHolders["PPL_Grupos_etarios_por_delitos_masculino"] = &$placeHoldersPPL_Grupos_etarios_por_delitos_masculino;
$page_titles["PPL_Grupos_etarios_por_delitos_masculino"] = &$pageTitlesPPL_Grupos_etarios_por_delitos_masculino;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["PPL Grupos etarios por delitos masculino"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PPL_Grupos_etarios_por_delitos_masculino()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sector_ppd,  delitoanalisis,  mun_resid,  depart_resid,  rangoetario,  genero,  COUNT(mun_resid) AS `COUNT(mun_resid)`";
$proto0["m_strFrom"] = "FROM carcel";
$proto0["m_strWhere"] = "genero ='MASCULINO'";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "genero ='MASCULINO'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos masculino"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "='MASCULINO'";
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
	"m_srcTableName" => "PPL Grupos etarios por delitos masculino"
));

$proto6["m_sql"] = "sector_ppd";
$proto6["m_srcTableName"] = "PPL Grupos etarios por delitos masculino";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos masculino"
));

$proto8["m_sql"] = "delitoanalisis";
$proto8["m_srcTableName"] = "PPL Grupos etarios por delitos masculino";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos masculino"
));

$proto10["m_sql"] = "mun_resid";
$proto10["m_srcTableName"] = "PPL Grupos etarios por delitos masculino";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos masculino"
));

$proto12["m_sql"] = "depart_resid";
$proto12["m_srcTableName"] = "PPL Grupos etarios por delitos masculino";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos masculino"
));

$proto14["m_sql"] = "rangoetario";
$proto14["m_srcTableName"] = "PPL Grupos etarios por delitos masculino";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos masculino"
));

$proto16["m_sql"] = "genero";
$proto16["m_srcTableName"] = "PPL Grupos etarios por delitos masculino";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_COUNT";
$proto19["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos masculino"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "COUNT(mun_resid)";
$proto18["m_srcTableName"] = "PPL Grupos etarios por delitos masculino";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "COUNT(mun_resid)";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "carcel";
$proto22["m_srcTableName"] = "PPL Grupos etarios por delitos masculino";
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
$proto21["m_srcTableName"] = "PPL Grupos etarios por delitos masculino";
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
	"m_srcTableName" => "PPL Grupos etarios por delitos masculino"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos masculino"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos masculino"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos masculino"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos masculino"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos masculino"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PPL Grupos etarios por delitos masculino";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PPL_Grupos_etarios_por_delitos_masculino = createSqlQuery_PPL_Grupos_etarios_por_delitos_masculino();


	
		;

							

$tdataPPL_Grupos_etarios_por_delitos_masculino[".sqlquery"] = $queryData_PPL_Grupos_etarios_por_delitos_masculino;

$tableEvents["PPL Grupos etarios por delitos masculino"] = new eventsBase;
$tdataPPL_Grupos_etarios_por_delitos_masculino[".hasEvents"] = false;

?>