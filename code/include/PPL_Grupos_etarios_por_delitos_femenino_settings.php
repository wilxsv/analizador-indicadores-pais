<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPPL_Grupos_etarios_por_delitos_femenino = array();
	$tdataPPL_Grupos_etarios_por_delitos_femenino[".truncateText"] = true;
	$tdataPPL_Grupos_etarios_por_delitos_femenino[".NumberOfChars"] = 80;
	$tdataPPL_Grupos_etarios_por_delitos_femenino[".ShortName"] = "PPL_Grupos_etarios_por_delitos_femenino";
	$tdataPPL_Grupos_etarios_por_delitos_femenino[".OwnerID"] = "";
	$tdataPPL_Grupos_etarios_por_delitos_femenino[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsPPL_Grupos_etarios_por_delitos_femenino = array();
$fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino = array();
$pageTitlesPPL_Grupos_etarios_por_delitos_femenino = array();
$placeHoldersPPL_Grupos_etarios_por_delitos_femenino = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPPL_Grupos_etarios_por_delitos_femenino["Spanish"] = array();
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino["Spanish"] = array();
	$placeHoldersPPL_Grupos_etarios_por_delitos_femenino["Spanish"] = array();
	$pageTitlesPPL_Grupos_etarios_por_delitos_femenino["Spanish"] = array();
	$fieldLabelsPPL_Grupos_etarios_por_delitos_femenino["Spanish"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino["Spanish"]["rangoetario"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_femenino["Spanish"]["rangoetario"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_femenino["Spanish"]["genero"] = "Genero";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino["Spanish"]["genero"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_femenino["Spanish"]["genero"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_femenino["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino["Spanish"]["mun_resid"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_femenino["Spanish"]["mun_resid"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_femenino["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino["Spanish"]["depart_resid"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_femenino["Spanish"]["depart_resid"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_femenino["Spanish"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino["Spanish"]["delitoanalisis"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_femenino["Spanish"]["delitoanalisis"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_femenino["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino["Spanish"]["sector_ppd"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_femenino["Spanish"]["sector_ppd"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_femenino["Spanish"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino["Spanish"]["COUNT_mun_resid_"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_femenino["Spanish"]["COUNT_mun_resid_"] = "";
	if (count($fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino["Spanish"]))
		$tdataPPL_Grupos_etarios_por_delitos_femenino[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPPL_Grupos_etarios_por_delitos_femenino["English"] = array();
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino["English"] = array();
	$placeHoldersPPL_Grupos_etarios_por_delitos_femenino["English"] = array();
	$pageTitlesPPL_Grupos_etarios_por_delitos_femenino["English"] = array();
	$fieldLabelsPPL_Grupos_etarios_por_delitos_femenino["English"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino["English"]["rangoetario"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_femenino["English"]["rangoetario"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_femenino["English"]["genero"] = "Genero";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino["English"]["genero"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_femenino["English"]["genero"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_femenino["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino["English"]["mun_resid"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_femenino["English"]["mun_resid"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_femenino["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino["English"]["depart_resid"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_femenino["English"]["depart_resid"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_femenino["English"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino["English"]["delitoanalisis"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_femenino["English"]["delitoanalisis"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_femenino["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino["English"]["sector_ppd"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_femenino["English"]["sector_ppd"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_delitos_femenino["English"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino["English"]["COUNT_mun_resid_"] = "";
	$placeHoldersPPL_Grupos_etarios_por_delitos_femenino["English"]["COUNT_mun_resid_"] = "";
	if (count($fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino["English"]))
		$tdataPPL_Grupos_etarios_por_delitos_femenino[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPPL_Grupos_etarios_por_delitos_femenino[""] = array();
	$fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino[""] = array();
	$placeHoldersPPL_Grupos_etarios_por_delitos_femenino[""] = array();
	$pageTitlesPPL_Grupos_etarios_por_delitos_femenino[""] = array();
	if (count($fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino[""]))
		$tdataPPL_Grupos_etarios_por_delitos_femenino[".isUseToolTips"] = true;
}





$tdataPPL_Grupos_etarios_por_delitos_femenino[".shortTableName"] = "PPL_Grupos_etarios_por_delitos_femenino";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".nSecOptions"] = 0;
$tdataPPL_Grupos_etarios_por_delitos_femenino[".recsPerRowPrint"] = 1;
$tdataPPL_Grupos_etarios_por_delitos_femenino[".mainTableOwnerID"] = "";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".moveNext"] = 1;
$tdataPPL_Grupos_etarios_por_delitos_femenino[".entityType"] = 2;

$tdataPPL_Grupos_etarios_por_delitos_femenino[".strOriginalTableName"] = "carcel";

	



$tdataPPL_Grupos_etarios_por_delitos_femenino[".showAddInPopup"] = false;

$tdataPPL_Grupos_etarios_por_delitos_femenino[".showEditInPopup"] = false;

$tdataPPL_Grupos_etarios_por_delitos_femenino[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPPL_Grupos_etarios_por_delitos_femenino[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPPL_Grupos_etarios_por_delitos_femenino[".fieldsForRegister"] = array();

$tdataPPL_Grupos_etarios_por_delitos_femenino[".listAjax"] = false;

	$tdataPPL_Grupos_etarios_por_delitos_femenino[".audit"] = false;

	$tdataPPL_Grupos_etarios_por_delitos_femenino[".locking"] = false;



$tdataPPL_Grupos_etarios_por_delitos_femenino[".list"] = true;



$tdataPPL_Grupos_etarios_por_delitos_femenino[".reorderRecordsByHeader"] = true;





$tdataPPL_Grupos_etarios_por_delitos_femenino[".exportTo"] = true;

$tdataPPL_Grupos_etarios_por_delitos_femenino[".printFriendly"] = true;


$tdataPPL_Grupos_etarios_por_delitos_femenino[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPPL_Grupos_etarios_por_delitos_femenino[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPPL_Grupos_etarios_por_delitos_femenino[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPPL_Grupos_etarios_por_delitos_femenino[".searchSaving"] = false;
//

$tdataPPL_Grupos_etarios_por_delitos_femenino[".showSearchPanel"] = true;
		$tdataPPL_Grupos_etarios_por_delitos_femenino[".flexibleSearch"] = true;

$tdataPPL_Grupos_etarios_por_delitos_femenino[".isUseAjaxSuggest"] = true;






$tdataPPL_Grupos_etarios_por_delitos_femenino[".ajaxCodeSnippetAdded"] = false;

$tdataPPL_Grupos_etarios_por_delitos_femenino[".buttonsAdded"] = false;

$tdataPPL_Grupos_etarios_por_delitos_femenino[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPPL_Grupos_etarios_por_delitos_femenino[".isUseTimeForSearch"] = false;





$tdataPPL_Grupos_etarios_por_delitos_femenino[".allSearchFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_femenino[".filterFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_femenino[".requiredSearchFields"] = array();

$tdataPPL_Grupos_etarios_por_delitos_femenino[".allSearchFields"][] = "sector_ppd";
	$tdataPPL_Grupos_etarios_por_delitos_femenino[".allSearchFields"][] = "delitoanalisis";
	$tdataPPL_Grupos_etarios_por_delitos_femenino[".allSearchFields"][] = "mun_resid";
	$tdataPPL_Grupos_etarios_por_delitos_femenino[".allSearchFields"][] = "depart_resid";
	$tdataPPL_Grupos_etarios_por_delitos_femenino[".allSearchFields"][] = "rangoetario";
	$tdataPPL_Grupos_etarios_por_delitos_femenino[".allSearchFields"][] = "genero";
	$tdataPPL_Grupos_etarios_por_delitos_femenino[".allSearchFields"][] = "COUNT(mun_resid)";
	

$tdataPPL_Grupos_etarios_por_delitos_femenino[".googleLikeFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_femenino[".googleLikeFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".googleLikeFields"][] = "depart_resid";


$tdataPPL_Grupos_etarios_por_delitos_femenino[".advSearchFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_femenino[".advSearchFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".advSearchFields"][] = "depart_resid";

$tdataPPL_Grupos_etarios_por_delitos_femenino[".tableType"] = "report";

$tdataPPL_Grupos_etarios_por_delitos_femenino[".printerPageOrientation"] = 0;
$tdataPPL_Grupos_etarios_por_delitos_femenino[".nPrinterPageScale"] = 100;

$tdataPPL_Grupos_etarios_por_delitos_femenino[".nPrinterSplitRecords"] = 40;

$tdataPPL_Grupos_etarios_por_delitos_femenino[".nPrinterPDFSplitRecords"] = 40;



$tdataPPL_Grupos_etarios_por_delitos_femenino[".geocodingEnabled"] = false;

//report settings
$tdataPPL_Grupos_etarios_por_delitos_femenino[".crossTabReport"] = true;

$tdataPPL_Grupos_etarios_por_delitos_femenino[".reportGroupFields"] = true;
$tdataPPL_Grupos_etarios_por_delitos_femenino[".pageSize"] = 5;
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
$tdataPPL_Grupos_etarios_por_delitos_femenino[".reportGroupFieldsData"] = $reportGroupFields;

$tdataPPL_Grupos_etarios_por_delitos_femenino[".reportHorizontalSummary"] = true;

$tdataPPL_Grupos_etarios_por_delitos_femenino[".isExistTotalFields"] = true;

$tdataPPL_Grupos_etarios_por_delitos_femenino[".reportVerticalSummary"] = true;



$tdataPPL_Grupos_etarios_por_delitos_femenino[".repShowDet"] = true;

$tdataPPL_Grupos_etarios_por_delitos_femenino[".reportLayout"] = 6;

//end of report settings




$tdataPPL_Grupos_etarios_por_delitos_femenino[".listGridLayout"] = 3;

$tdataPPL_Grupos_etarios_por_delitos_femenino[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPPL_Grupos_etarios_por_delitos_femenino[".strOrderBy"] = $tstrOrderBy;

$tdataPPL_Grupos_etarios_por_delitos_femenino[".orderindexes"] = array();

$tdataPPL_Grupos_etarios_por_delitos_femenino[".sqlHead"] = "SELECT sector_ppd,  delitoanalisis,  mun_resid,  depart_resid,  rangoetario,  genero,  COUNT(mun_resid) AS `COUNT(mun_resid)`";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".sqlFrom"] = "FROM carcel";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".sqlWhereExpr"] = "genero ='FEMENINO'";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPPL_Grupos_etarios_por_delitos_femenino[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPPL_Grupos_etarios_por_delitos_femenino[".arrGroupsPerPage"] = $arrGPP;

$tdataPPL_Grupos_etarios_por_delitos_femenino[".highlightSearchResults"] = true;

$tableKeysPPL_Grupos_etarios_por_delitos_femenino = array();
$tdataPPL_Grupos_etarios_por_delitos_femenino[".Keys"] = $tableKeysPPL_Grupos_etarios_por_delitos_femenino;

$tdataPPL_Grupos_etarios_por_delitos_femenino[".listFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_femenino[".listFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".listFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".listFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".listFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".listFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".listFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".listFields"][] = "COUNT(mun_resid)";

$tdataPPL_Grupos_etarios_por_delitos_femenino[".hideMobileList"] = array();


$tdataPPL_Grupos_etarios_por_delitos_femenino[".viewFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_femenino[".viewFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".viewFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".viewFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".viewFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".viewFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".viewFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".viewFields"][] = "COUNT(mun_resid)";

$tdataPPL_Grupos_etarios_por_delitos_femenino[".addFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_femenino[".addFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".addFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".addFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".addFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".addFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".addFields"][] = "genero";

$tdataPPL_Grupos_etarios_por_delitos_femenino[".masterListFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_femenino[".masterListFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".masterListFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".masterListFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".masterListFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".masterListFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".masterListFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".masterListFields"][] = "COUNT(mun_resid)";

$tdataPPL_Grupos_etarios_por_delitos_femenino[".inlineAddFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_femenino[".inlineAddFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".inlineAddFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".inlineAddFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".inlineAddFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".inlineAddFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".inlineAddFields"][] = "genero";

$tdataPPL_Grupos_etarios_por_delitos_femenino[".editFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_femenino[".editFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".editFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".editFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".editFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".editFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".editFields"][] = "genero";

$tdataPPL_Grupos_etarios_por_delitos_femenino[".inlineEditFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_femenino[".inlineEditFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".inlineEditFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".inlineEditFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".inlineEditFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".inlineEditFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".inlineEditFields"][] = "genero";

$tdataPPL_Grupos_etarios_por_delitos_femenino[".updateSelectedFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_femenino[".updateSelectedFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".updateSelectedFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".updateSelectedFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".updateSelectedFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".updateSelectedFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".updateSelectedFields"][] = "genero";


$tdataPPL_Grupos_etarios_por_delitos_femenino[".exportFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_femenino[".exportFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".exportFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".exportFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".exportFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".exportFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".exportFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".exportFields"][] = "COUNT(mun_resid)";

$tdataPPL_Grupos_etarios_por_delitos_femenino[".importFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_femenino[".importFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".importFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".importFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".importFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".importFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".importFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".importFields"][] = "COUNT(mun_resid)";

$tdataPPL_Grupos_etarios_por_delitos_femenino[".printFields"] = array();
$tdataPPL_Grupos_etarios_por_delitos_femenino[".printFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".printFields"][] = "delitoanalisis";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".printFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".printFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".printFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".printFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_delitos_femenino[".printFields"][] = "COUNT(mun_resid)";

//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_delitos_femenino","sector_ppd");
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




	$tdataPPL_Grupos_etarios_por_delitos_femenino["sector_ppd"] = $fdata;
//	delitoanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "delitoanalisis";
	$fdata["GoodName"] = "delitoanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_delitos_femenino","delitoanalisis");
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




	$tdataPPL_Grupos_etarios_por_delitos_femenino["delitoanalisis"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_delitos_femenino","mun_resid");
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




	$tdataPPL_Grupos_etarios_por_delitos_femenino["mun_resid"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_delitos_femenino","depart_resid");
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




	$tdataPPL_Grupos_etarios_por_delitos_femenino["depart_resid"] = $fdata;
//	rangoetario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rangoetario";
	$fdata["GoodName"] = "rangoetario";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_delitos_femenino","rangoetario");
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




	$tdataPPL_Grupos_etarios_por_delitos_femenino["rangoetario"] = $fdata;
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_delitos_femenino","genero");
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




	$tdataPPL_Grupos_etarios_por_delitos_femenino["genero"] = $fdata;
//	COUNT(mun_resid)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "COUNT(mun_resid)";
	$fdata["GoodName"] = "COUNT_mun_resid_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_delitos_femenino","COUNT_mun_resid_");
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




	$tdataPPL_Grupos_etarios_por_delitos_femenino["COUNT(mun_resid)"] = $fdata;


$tables_data["PPL Grupos etarios por delitos femenino"]=&$tdataPPL_Grupos_etarios_por_delitos_femenino;
$field_labels["PPL_Grupos_etarios_por_delitos_femenino"] = &$fieldLabelsPPL_Grupos_etarios_por_delitos_femenino;
$fieldToolTips["PPL_Grupos_etarios_por_delitos_femenino"] = &$fieldToolTipsPPL_Grupos_etarios_por_delitos_femenino;
$placeHolders["PPL_Grupos_etarios_por_delitos_femenino"] = &$placeHoldersPPL_Grupos_etarios_por_delitos_femenino;
$page_titles["PPL_Grupos_etarios_por_delitos_femenino"] = &$pageTitlesPPL_Grupos_etarios_por_delitos_femenino;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["PPL Grupos etarios por delitos femenino"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PPL_Grupos_etarios_por_delitos_femenino()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sector_ppd,  delitoanalisis,  mun_resid,  depart_resid,  rangoetario,  genero,  COUNT(mun_resid) AS `COUNT(mun_resid)`";
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
	"m_srcTableName" => "PPL Grupos etarios por delitos femenino"
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
	"m_srcTableName" => "PPL Grupos etarios por delitos femenino"
));

$proto6["m_sql"] = "sector_ppd";
$proto6["m_srcTableName"] = "PPL Grupos etarios por delitos femenino";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos femenino"
));

$proto8["m_sql"] = "delitoanalisis";
$proto8["m_srcTableName"] = "PPL Grupos etarios por delitos femenino";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos femenino"
));

$proto10["m_sql"] = "mun_resid";
$proto10["m_srcTableName"] = "PPL Grupos etarios por delitos femenino";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos femenino"
));

$proto12["m_sql"] = "depart_resid";
$proto12["m_srcTableName"] = "PPL Grupos etarios por delitos femenino";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos femenino"
));

$proto14["m_sql"] = "rangoetario";
$proto14["m_srcTableName"] = "PPL Grupos etarios por delitos femenino";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos femenino"
));

$proto16["m_sql"] = "genero";
$proto16["m_srcTableName"] = "PPL Grupos etarios por delitos femenino";
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
	"m_srcTableName" => "PPL Grupos etarios por delitos femenino"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "COUNT(mun_resid)";
$proto18["m_srcTableName"] = "PPL Grupos etarios por delitos femenino";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "COUNT(mun_resid)";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "carcel";
$proto22["m_srcTableName"] = "PPL Grupos etarios por delitos femenino";
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
$proto21["m_srcTableName"] = "PPL Grupos etarios por delitos femenino";
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
	"m_srcTableName" => "PPL Grupos etarios por delitos femenino"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos femenino"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos femenino"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos femenino"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos femenino"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por delitos femenino"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PPL Grupos etarios por delitos femenino";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PPL_Grupos_etarios_por_delitos_femenino = createSqlQuery_PPL_Grupos_etarios_por_delitos_femenino();


	
		;

							

$tdataPPL_Grupos_etarios_por_delitos_femenino[".sqlquery"] = $queryData_PPL_Grupos_etarios_por_delitos_femenino;

$tableEvents["PPL Grupos etarios por delitos femenino"] = new eventsBase;
$tdataPPL_Grupos_etarios_por_delitos_femenino[".hasEvents"] = false;

?>