<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino = array();
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".truncateText"] = true;
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".NumberOfChars"] = 80;
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".ShortName"] = "PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino";
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".OwnerID"] = "";
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino = array();
$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino = array();
$pageTitlesPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino = array();
$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"] = array();
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"] = array();
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"] = array();
	$pageTitlesPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"] = array();
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["rangoetario"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["rangoetario"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["estado_civil"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["estado_civil"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["mun_resid"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["mun_resid"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["depart_resid"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["depart_resid"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["sector_ppd"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["sector_ppd"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["COUNT_mun_resid_"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["COUNT_mun_resid_"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["genero"] = "Genero";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["genero"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["genero"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["tipo_mara"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]["tipo_mara"] = "";
	if (count($fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["Spanish"]))
		$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"] = array();
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"] = array();
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"] = array();
	$pageTitlesPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"] = array();
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["rangoetario"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["rangoetario"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["estado_civil"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["estado_civil"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["mun_resid"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["mun_resid"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["depart_resid"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["depart_resid"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["sector_ppd"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["sector_ppd"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["COUNT_mun_resid_"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["COUNT_mun_resid_"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["genero"] = "Genero";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["genero"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["genero"] = "";
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["tipo_mara"] = "";
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]["tipo_mara"] = "";
	if (count($fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["English"]))
		$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[""] = array();
	$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[""] = array();
	$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[""] = array();
	$pageTitlesPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[""] = array();
	if (count($fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[""]))
		$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".isUseToolTips"] = true;
}





$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".shortTableName"] = "PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".nSecOptions"] = 0;
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".recsPerRowPrint"] = 1;
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".mainTableOwnerID"] = "";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".moveNext"] = 1;
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".entityType"] = 2;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".strOriginalTableName"] = "carcel";

	



$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".showAddInPopup"] = false;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".showEditInPopup"] = false;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".fieldsForRegister"] = array();

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".listAjax"] = false;

	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".audit"] = false;

	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".locking"] = false;



$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".list"] = true;



$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".reorderRecordsByHeader"] = true;





$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".exportTo"] = true;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".printFriendly"] = true;


$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".searchSaving"] = false;
//

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".showSearchPanel"] = true;
		$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".flexibleSearch"] = true;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".isUseAjaxSuggest"] = true;






$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".ajaxCodeSnippetAdded"] = false;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".buttonsAdded"] = false;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".isUseTimeForSearch"] = false;





$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".allSearchFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".filterFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".requiredSearchFields"] = array();

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".allSearchFields"][] = "rangoetario";
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".allSearchFields"][] = "estado_civil";
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".allSearchFields"][] = "depart_resid";
		$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".requiredSearchFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".allSearchFields"][] = "mun_resid";
		$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".requiredSearchFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".allSearchFields"][] = "COUNT(mun_resid)";
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".allSearchFields"][] = "sector_ppd";
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".allSearchFields"][] = "genero";
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".allSearchFields"][] = "tipo_mara";
	

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".googleLikeFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".googleLikeFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".googleLikeFields"][] = "mun_resid";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".panelSearchFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".searchPanelOptions"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".panelSearchFields"][] = "depart_resid";
	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".panelSearchFields"][] = "mun_resid";
	
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".advSearchFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".advSearchFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".advSearchFields"][] = "mun_resid";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".tableType"] = "report";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".printerPageOrientation"] = 0;
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".nPrinterPageScale"] = 100;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".nPrinterSplitRecords"] = 40;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".nPrinterPDFSplitRecords"] = 40;



$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".geocodingEnabled"] = false;

//report settings
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".crossTabReport"] = true;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".reportGroupFields"] = true;
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".pageSize"] = 5;
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
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".reportGroupFieldsData"] = $reportGroupFields;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".reportHorizontalSummary"] = true;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".isExistTotalFields"] = true;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".reportVerticalSummary"] = true;



$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".repShowDet"] = true;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".reportLayout"] = 6;

//end of report settings




$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".listGridLayout"] = 3;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".strOrderBy"] = $tstrOrderBy;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".orderindexes"] = array();

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".sqlHead"] = "SELECT rangoetario,  estado_civil,  depart_resid,  mun_resid,  COUNT(mun_resid) AS `COUNT(mun_resid)`,  sector_ppd,  genero,  tipo_mara";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".sqlFrom"] = "FROM carcel";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".sqlWhereExpr"] = "genero ='FEMENINO'";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".arrGroupsPerPage"] = $arrGPP;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".highlightSearchResults"] = true;

$tableKeysPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".Keys"] = $tableKeysPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino;

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".listFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".listFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".listFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".listFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".listFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".listFields"][] = "COUNT(mun_resid)";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".listFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".listFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".listFields"][] = "tipo_mara";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".hideMobileList"] = array();


$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".viewFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".viewFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".viewFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".viewFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".viewFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".viewFields"][] = "COUNT(mun_resid)";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".viewFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".viewFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".viewFields"][] = "tipo_mara";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".addFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".addFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".addFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".addFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".addFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".addFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".addFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".addFields"][] = "tipo_mara";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".masterListFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".masterListFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".masterListFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".masterListFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".masterListFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".masterListFields"][] = "COUNT(mun_resid)";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".masterListFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".masterListFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".masterListFields"][] = "tipo_mara";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".inlineAddFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".inlineAddFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".inlineAddFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".inlineAddFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".inlineAddFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".inlineAddFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".inlineAddFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".inlineAddFields"][] = "tipo_mara";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".editFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".editFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".editFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".editFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".editFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".editFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".editFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".editFields"][] = "tipo_mara";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".inlineEditFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".inlineEditFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".inlineEditFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".inlineEditFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".inlineEditFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".inlineEditFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".inlineEditFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".inlineEditFields"][] = "tipo_mara";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".updateSelectedFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".updateSelectedFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".updateSelectedFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".updateSelectedFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".updateSelectedFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".updateSelectedFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".updateSelectedFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".updateSelectedFields"][] = "tipo_mara";


$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".exportFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".exportFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".exportFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".exportFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".exportFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".exportFields"][] = "COUNT(mun_resid)";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".exportFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".exportFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".exportFields"][] = "tipo_mara";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".importFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".importFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".importFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".importFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".importFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".importFields"][] = "COUNT(mun_resid)";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".importFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".importFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".importFields"][] = "tipo_mara";

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".printFields"] = array();
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".printFields"][] = "rangoetario";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".printFields"][] = "estado_civil";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".printFields"][] = "depart_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".printFields"][] = "mun_resid";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".printFields"][] = "COUNT(mun_resid)";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".printFields"][] = "sector_ppd";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".printFields"][] = "genero";
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".printFields"][] = "tipo_mara";

//	rangoetario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rangoetario";
	$fdata["GoodName"] = "rangoetario";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino","rangoetario");
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




	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["rangoetario"] = $fdata;
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino","estado_civil");
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




	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["estado_civil"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino","depart_resid");
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




	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["depart_resid"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino","mun_resid");
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




	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["mun_resid"] = $fdata;
//	COUNT(mun_resid)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "COUNT(mun_resid)";
	$fdata["GoodName"] = "COUNT_mun_resid_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino","COUNT_mun_resid_");
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




	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["COUNT(mun_resid)"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino","sector_ppd");
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




	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["sector_ppd"] = $fdata;
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino","genero");
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




	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["genero"] = $fdata;
//	tipo_mara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tipo_mara";
	$fdata["GoodName"] = "tipo_mara";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino","tipo_mara");
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




	$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino["tipo_mara"] = $fdata;


$tables_data["PPL Grupos etarios por afiliación a Pandillas femenino"]=&$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino;
$field_labels["PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino"] = &$fieldLabelsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino;
$fieldToolTips["PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino"] = &$fieldToolTipsPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino;
$placeHolders["PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino"] = &$placeHoldersPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino;
$page_titles["PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino"] = &$pageTitlesPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["PPL Grupos etarios por afiliación a Pandillas femenino"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rangoetario,  estado_civil,  depart_resid,  mun_resid,  COUNT(mun_resid) AS `COUNT(mun_resid)`,  sector_ppd,  genero,  tipo_mara";
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
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas femenino"
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
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas femenino"
));

$proto6["m_sql"] = "rangoetario";
$proto6["m_srcTableName"] = "PPL Grupos etarios por afiliación a Pandillas femenino";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas femenino"
));

$proto8["m_sql"] = "estado_civil";
$proto8["m_srcTableName"] = "PPL Grupos etarios por afiliación a Pandillas femenino";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas femenino"
));

$proto10["m_sql"] = "depart_resid";
$proto10["m_srcTableName"] = "PPL Grupos etarios por afiliación a Pandillas femenino";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas femenino"
));

$proto12["m_sql"] = "mun_resid";
$proto12["m_srcTableName"] = "PPL Grupos etarios por afiliación a Pandillas femenino";
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
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas femenino"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(mun_resid)";
$proto14["m_srcTableName"] = "PPL Grupos etarios por afiliación a Pandillas femenino";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "COUNT(mun_resid)";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas femenino"
));

$proto17["m_sql"] = "sector_ppd";
$proto17["m_srcTableName"] = "PPL Grupos etarios por afiliación a Pandillas femenino";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas femenino"
));

$proto19["m_sql"] = "genero";
$proto19["m_srcTableName"] = "PPL Grupos etarios por afiliación a Pandillas femenino";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas femenino"
));

$proto21["m_sql"] = "tipo_mara";
$proto21["m_srcTableName"] = "PPL Grupos etarios por afiliación a Pandillas femenino";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "carcel";
$proto24["m_srcTableName"] = "PPL Grupos etarios por afiliación a Pandillas femenino";
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
$proto23["m_srcTableName"] = "PPL Grupos etarios por afiliación a Pandillas femenino";
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
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas femenino"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas femenino"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas femenino"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas femenino"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas femenino"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas femenino"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL Grupos etarios por afiliación a Pandillas femenino"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PPL Grupos etarios por afiliación a Pandillas femenino";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino = createSqlQuery_PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino();


	
		;

								

$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".sqlquery"] = $queryData_PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino;

$tableEvents["PPL Grupos etarios por afiliación a Pandillas femenino"] = new eventsBase;
$tdataPPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino[".hasEvents"] = false;

?>