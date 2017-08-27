<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas = array();
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".truncateText"] = true;
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".NumberOfChars"] = 80;
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".ShortName"] = "PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas";
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".OwnerID"] = "";
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas = array();
$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas = array();
$pageTitlesPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas = array();
$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"] = array();
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"] = array();
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"] = array();
	$pageTitlesPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"] = array();
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["rangoetario"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["rangoetario"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["estado_civil"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["estado_civil"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["mun_resid"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["mun_resid"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["depart_resid"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["depart_resid"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["sector_ppd"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["sector_ppd"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["COUNT_mun_resid_"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["COUNT_mun_resid_"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["genero"] = "Genero";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["genero"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["genero"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["tipo_mara"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]["tipo_mara"] = "";
	if (count($fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["Spanish"]))
		$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"] = array();
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"] = array();
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"] = array();
	$pageTitlesPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"] = array();
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["rangoetario"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["rangoetario"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["estado_civil"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["estado_civil"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["mun_resid"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["mun_resid"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["depart_resid"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["depart_resid"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["sector_ppd"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["sector_ppd"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["COUNT_mun_resid_"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["COUNT_mun_resid_"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["genero"] = "Genero";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["genero"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["genero"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["tipo_mara"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]["tipo_mara"] = "";
	if (count($fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["English"]))
		$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[""] = array();
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[""] = array();
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[""] = array();
	$pageTitlesPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[""] = array();
	if (count($fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[""]))
		$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".isUseToolTips"] = true;
}





$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".shortTableName"] = "PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".nSecOptions"] = 0;
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".recsPerRowPrint"] = 1;
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".mainTableOwnerID"] = "";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".moveNext"] = 1;
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".entityType"] = 2;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".strOriginalTableName"] = "carcel";

	



$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".showAddInPopup"] = false;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".showEditInPopup"] = false;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".fieldsForRegister"] = array();

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".listAjax"] = false;

	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".audit"] = false;

	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".locking"] = false;



$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".list"] = true;



$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".reorderRecordsByHeader"] = true;





$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".exportTo"] = true;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".printFriendly"] = true;


$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".searchSaving"] = false;
//

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".showSearchPanel"] = true;
		$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".flexibleSearch"] = true;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".isUseAjaxSuggest"] = true;






$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".ajaxCodeSnippetAdded"] = false;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".buttonsAdded"] = false;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".isUseTimeForSearch"] = false;





$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".allSearchFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".filterFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".requiredSearchFields"] = array();

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".allSearchFields"][] = "rangoetario";
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".allSearchFields"][] = "estado_civil";
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".allSearchFields"][] = "depart_resid";
		$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".requiredSearchFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".allSearchFields"][] = "mun_resid";
		$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".requiredSearchFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".allSearchFields"][] = "COUNT(mun_resid)";
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".allSearchFields"][] = "sector_ppd";
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".allSearchFields"][] = "genero";
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".allSearchFields"][] = "tipo_mara";
	

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".googleLikeFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".googleLikeFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".googleLikeFields"][] = "mun_resid";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".panelSearchFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".searchPanelOptions"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".panelSearchFields"][] = "depart_resid";
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".panelSearchFields"][] = "mun_resid";
	
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".advSearchFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".advSearchFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".advSearchFields"][] = "mun_resid";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".tableType"] = "report";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".printerPageOrientation"] = 0;
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".nPrinterPageScale"] = 100;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".nPrinterSplitRecords"] = 40;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".nPrinterPDFSplitRecords"] = 40;



$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".geocodingEnabled"] = false;

//report settings
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".crossTabReport"] = true;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".reportGroupFields"] = true;
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "rangoetario";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "tipo_mara";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".reportGroupFieldsData"] = $reportGroupFields;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".reportHorizontalSummary"] = true;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".isExistTotalFields"] = true;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".reportVerticalSummary"] = true;



$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".repShowDet"] = true;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".reportLayout"] = 6;

//end of report settings




$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".listGridLayout"] = 3;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".strOrderBy"] = $tstrOrderBy;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".orderindexes"] = array();

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".sqlHead"] = "SELECT rangoetario,  estado_civil,  depart_resid,  mun_resid,  COUNT(mun_resid) AS `COUNT(mun_resid)`,  sector_ppd,  genero,  tipo_mara";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".sqlFrom"] = "FROM carcel";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".sqlWhereExpr"] = "genero ='MASCULINO'";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".arrGroupsPerPage"] = $arrGPP;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".highlightSearchResults"] = true;

$tableKeysPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".Keys"] = $tableKeysPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".listFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".listFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".listFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".listFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".listFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".listFields"][] = "COUNT(mun_resid)";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".listFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".listFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".listFields"][] = "tipo_mara";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".hideMobileList"] = array();


$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".viewFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".viewFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".viewFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".viewFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".viewFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".viewFields"][] = "COUNT(mun_resid)";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".viewFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".viewFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".viewFields"][] = "tipo_mara";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".addFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".addFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".addFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".addFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".addFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".addFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".addFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".addFields"][] = "tipo_mara";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".masterListFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".masterListFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".masterListFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".masterListFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".masterListFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".masterListFields"][] = "COUNT(mun_resid)";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".masterListFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".masterListFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".masterListFields"][] = "tipo_mara";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".inlineAddFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".inlineAddFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".inlineAddFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".inlineAddFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".inlineAddFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".inlineAddFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".inlineAddFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".inlineAddFields"][] = "tipo_mara";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".editFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".editFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".editFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".editFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".editFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".editFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".editFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".editFields"][] = "tipo_mara";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".inlineEditFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".inlineEditFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".inlineEditFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".inlineEditFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".inlineEditFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".inlineEditFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".inlineEditFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".inlineEditFields"][] = "tipo_mara";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".updateSelectedFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".updateSelectedFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".updateSelectedFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".updateSelectedFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".updateSelectedFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".updateSelectedFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".updateSelectedFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".updateSelectedFields"][] = "tipo_mara";


$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".exportFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".exportFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".exportFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".exportFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".exportFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".exportFields"][] = "COUNT(mun_resid)";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".exportFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".exportFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".exportFields"][] = "tipo_mara";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".importFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".importFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".importFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".importFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".importFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".importFields"][] = "COUNT(mun_resid)";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".importFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".importFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".importFields"][] = "tipo_mara";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".printFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".printFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".printFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".printFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".printFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".printFields"][] = "COUNT(mun_resid)";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".printFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".printFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".printFields"][] = "tipo_mara";

//	rangoetario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rangoetario";
	$fdata["GoodName"] = "rangoetario";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas","rangoetario");
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




	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["rangoetario"] = $fdata;
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas","estado_civil");
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

		$fdata["strField"] = "estado_civil";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_civil";

	
	
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




	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["estado_civil"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas","depart_resid");
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




	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["depart_resid"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas","mun_resid");
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




	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["mun_resid"] = $fdata;
//	COUNT(mun_resid)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "COUNT(mun_resid)";
	$fdata["GoodName"] = "COUNT_mun_resid_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas","COUNT_mun_resid_");
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




	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["COUNT(mun_resid)"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas","sector_ppd");
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




	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["sector_ppd"] = $fdata;
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas","genero");
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




	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["genero"] = $fdata;
//	tipo_mara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tipo_mara";
	$fdata["GoodName"] = "tipo_mara";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas","tipo_mara");
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

		$fdata["strField"] = "tipo_mara";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_mara";

	
	
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




	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas["tipo_mara"] = $fdata;


$tables_data["PPL Grupos etarios por afiliación a Pandillas"]=&$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas;
$field_labels["PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas"] = &$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas;
$fieldToolTips["PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas"] = &$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas;
$placeHolders["PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas"] = &$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas;
$page_titles["PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas"] = &$pageTitlesPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["PPL Grupos etarios por afiliación a Pandillas"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rangoetario,  estado_civil,  depart_resid,  mun_resid,  COUNT(mun_resid) AS `COUNT(mun_resid)`,  sector_ppd,  genero,  tipo_mara";
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
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas"
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
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas"
));

$proto6["m_sql"] = "rangoetario";
$proto6["m_srcTableName"] = "PPL Grupos etarios por afiliación a Pandillas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas"
));

$proto8["m_sql"] = "estado_civil";
$proto8["m_srcTableName"] = "PPL Grupos etarios por afiliación a Pandillas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas"
));

$proto10["m_sql"] = "depart_resid";
$proto10["m_srcTableName"] = "PPL Grupos etarios por afiliación a Pandillas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas"
));

$proto12["m_sql"] = "mun_resid";
$proto12["m_srcTableName"] = "PPL Grupos etarios por afiliación a Pandillas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_COUNT";
$proto15["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(mun_resid)";
$proto14["m_srcTableName"] = "PPL Grupos etarios por afiliación a Pandillas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "COUNT(mun_resid)";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas"
));

$proto17["m_sql"] = "sector_ppd";
$proto17["m_srcTableName"] = "PPL Grupos etarios por afiliación a Pandillas";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas"
));

$proto19["m_sql"] = "genero";
$proto19["m_srcTableName"] = "PPL Grupos etarios por afiliación a Pandillas";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas"
));

$proto21["m_sql"] = "tipo_mara";
$proto21["m_srcTableName"] = "PPL Grupos etarios por afiliación a Pandillas";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "carcel";
$proto24["m_srcTableName"] = "PPL Grupos etarios por afiliación a Pandillas";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "id";
$proto24["m_columns"][] = "sipe";
$proto24["m_columns"][] = "afis";
$proto24["m_columns"][] = "edad";
$proto24["m_columns"][] = "rangoetario";
$proto24["m_columns"][] = "genero";
$proto24["m_columns"][] = "fecha_nac";
$proto24["m_columns"][] = "edad1";
$proto24["m_columns"][] = "dui";
$proto24["m_columns"][] = "nivel_edu";
$proto24["m_columns"][] = "educacionanalisis";
$proto24["m_columns"][] = "profesion_oficio";
$proto24["m_columns"][] = "estado_civil";
$proto24["m_columns"][] = "ciudadania";
$proto24["m_columns"][] = "mun_nacimiento";
$proto24["m_columns"][] = "depto_nacim";
$proto24["m_columns"][] = "direccion";
$proto24["m_columns"][] = "mun_resid";
$proto24["m_columns"][] = "depart_resid";
$proto24["m_columns"][] = "delitosanalisis";
$proto24["m_columns"][] = "sj_interno";
$proto24["m_columns"][] = "fase";
$proto24["m_columns"][] = "org_delictiva";
$proto24["m_columns"][] = "tipo_mara";
$proto24["m_columns"][] = "reincidente";
$proto24["m_columns"][] = "deportado";
$proto24["m_columns"][] = "direccion1";
$proto24["m_columns"][] = "sector";
$proto24["m_columns"][] = "celda";
$proto24["m_columns"][] = "fecha_ing__sp";
$proto24["m_columns"][] = "libro";
$proto24["m_columns"][] = "fecha_ing__cp";
$proto24["m_columns"][] = "total_delitos";
$proto24["m_columns"][] = "delitos";
$proto24["m_columns"][] = "delitoanalisis";
$proto24["m_columns"][] = "sector_ppd";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "carcel";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "PPL Grupos etarios por afiliación a Pandillas";
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
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PPL Grupos etarios por afiliación a Pandillas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas = createSqlQuery_PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas();


	
		;

								

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".sqlquery"] = $queryData_PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas;

$tableEvents["PPL Grupos etarios por afiliación a Pandillas"] = new eventsBase;
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas[".hasEvents"] = false;

?>