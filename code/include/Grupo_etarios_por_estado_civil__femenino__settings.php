<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGrupo_etarios_por_estado_civil__femenino_ = array();
	$tdataGrupo_etarios_por_estado_civil__femenino_[".truncateText"] = true;
	$tdataGrupo_etarios_por_estado_civil__femenino_[".NumberOfChars"] = 80;
	$tdataGrupo_etarios_por_estado_civil__femenino_[".ShortName"] = "Grupo_etarios_por_estado_civil__femenino_";
	$tdataGrupo_etarios_por_estado_civil__femenino_[".OwnerID"] = "";
	$tdataGrupo_etarios_por_estado_civil__femenino_[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsGrupo_etarios_por_estado_civil__femenino_ = array();
$fieldToolTipsGrupo_etarios_por_estado_civil__femenino_ = array();
$pageTitlesGrupo_etarios_por_estado_civil__femenino_ = array();
$placeHoldersGrupo_etarios_por_estado_civil__femenino_ = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGrupo_etarios_por_estado_civil__femenino_["Spanish"] = array();
	$fieldToolTipsGrupo_etarios_por_estado_civil__femenino_["Spanish"] = array();
	$placeHoldersGrupo_etarios_por_estado_civil__femenino_["Spanish"] = array();
	$pageTitlesGrupo_etarios_por_estado_civil__femenino_["Spanish"] = array();
	$fieldLabelsGrupo_etarios_por_estado_civil__femenino_["Spanish"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsGrupo_etarios_por_estado_civil__femenino_["Spanish"]["rangoetario"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__femenino_["Spanish"]["rangoetario"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__femenino_["Spanish"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsGrupo_etarios_por_estado_civil__femenino_["Spanish"]["estado_civil"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__femenino_["Spanish"]["estado_civil"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__femenino_["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsGrupo_etarios_por_estado_civil__femenino_["Spanish"]["mun_resid"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__femenino_["Spanish"]["mun_resid"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__femenino_["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsGrupo_etarios_por_estado_civil__femenino_["Spanish"]["depart_resid"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__femenino_["Spanish"]["depart_resid"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__femenino_["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsGrupo_etarios_por_estado_civil__femenino_["Spanish"]["sector_ppd"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__femenino_["Spanish"]["sector_ppd"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__femenino_["Spanish"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsGrupo_etarios_por_estado_civil__femenino_["Spanish"]["COUNT_mun_resid_"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__femenino_["Spanish"]["COUNT_mun_resid_"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__femenino_["Spanish"]["genero"] = "Genero";
	$fieldToolTipsGrupo_etarios_por_estado_civil__femenino_["Spanish"]["genero"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__femenino_["Spanish"]["genero"] = "";
	if (count($fieldToolTipsGrupo_etarios_por_estado_civil__femenino_["Spanish"]))
		$tdataGrupo_etarios_por_estado_civil__femenino_[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsGrupo_etarios_por_estado_civil__femenino_["English"] = array();
	$fieldToolTipsGrupo_etarios_por_estado_civil__femenino_["English"] = array();
	$placeHoldersGrupo_etarios_por_estado_civil__femenino_["English"] = array();
	$pageTitlesGrupo_etarios_por_estado_civil__femenino_["English"] = array();
	$fieldLabelsGrupo_etarios_por_estado_civil__femenino_["English"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsGrupo_etarios_por_estado_civil__femenino_["English"]["rangoetario"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__femenino_["English"]["rangoetario"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__femenino_["English"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsGrupo_etarios_por_estado_civil__femenino_["English"]["estado_civil"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__femenino_["English"]["estado_civil"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__femenino_["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsGrupo_etarios_por_estado_civil__femenino_["English"]["mun_resid"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__femenino_["English"]["mun_resid"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__femenino_["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsGrupo_etarios_por_estado_civil__femenino_["English"]["depart_resid"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__femenino_["English"]["depart_resid"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__femenino_["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsGrupo_etarios_por_estado_civil__femenino_["English"]["sector_ppd"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__femenino_["English"]["sector_ppd"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__femenino_["English"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsGrupo_etarios_por_estado_civil__femenino_["English"]["COUNT_mun_resid_"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__femenino_["English"]["COUNT_mun_resid_"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__femenino_["English"]["genero"] = "Genero";
	$fieldToolTipsGrupo_etarios_por_estado_civil__femenino_["English"]["genero"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__femenino_["English"]["genero"] = "";
	if (count($fieldToolTipsGrupo_etarios_por_estado_civil__femenino_["English"]))
		$tdataGrupo_etarios_por_estado_civil__femenino_[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGrupo_etarios_por_estado_civil__femenino_[""] = array();
	$fieldToolTipsGrupo_etarios_por_estado_civil__femenino_[""] = array();
	$placeHoldersGrupo_etarios_por_estado_civil__femenino_[""] = array();
	$pageTitlesGrupo_etarios_por_estado_civil__femenino_[""] = array();
	if (count($fieldToolTipsGrupo_etarios_por_estado_civil__femenino_[""]))
		$tdataGrupo_etarios_por_estado_civil__femenino_[".isUseToolTips"] = true;
}





$tdataGrupo_etarios_por_estado_civil__femenino_[".shortTableName"] = "Grupo_etarios_por_estado_civil__femenino_";
$tdataGrupo_etarios_por_estado_civil__femenino_[".nSecOptions"] = 0;
$tdataGrupo_etarios_por_estado_civil__femenino_[".recsPerRowPrint"] = 1;
$tdataGrupo_etarios_por_estado_civil__femenino_[".mainTableOwnerID"] = "";
$tdataGrupo_etarios_por_estado_civil__femenino_[".moveNext"] = 1;
$tdataGrupo_etarios_por_estado_civil__femenino_[".entityType"] = 2;

$tdataGrupo_etarios_por_estado_civil__femenino_[".strOriginalTableName"] = "carcel";

	



$tdataGrupo_etarios_por_estado_civil__femenino_[".showAddInPopup"] = false;

$tdataGrupo_etarios_por_estado_civil__femenino_[".showEditInPopup"] = false;

$tdataGrupo_etarios_por_estado_civil__femenino_[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGrupo_etarios_por_estado_civil__femenino_[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGrupo_etarios_por_estado_civil__femenino_[".fieldsForRegister"] = array();

$tdataGrupo_etarios_por_estado_civil__femenino_[".listAjax"] = false;

	$tdataGrupo_etarios_por_estado_civil__femenino_[".audit"] = false;

	$tdataGrupo_etarios_por_estado_civil__femenino_[".locking"] = false;



$tdataGrupo_etarios_por_estado_civil__femenino_[".list"] = true;



$tdataGrupo_etarios_por_estado_civil__femenino_[".reorderRecordsByHeader"] = true;





$tdataGrupo_etarios_por_estado_civil__femenino_[".exportTo"] = true;

$tdataGrupo_etarios_por_estado_civil__femenino_[".printFriendly"] = true;


$tdataGrupo_etarios_por_estado_civil__femenino_[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataGrupo_etarios_por_estado_civil__femenino_[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataGrupo_etarios_por_estado_civil__femenino_[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataGrupo_etarios_por_estado_civil__femenino_[".searchSaving"] = false;
//

$tdataGrupo_etarios_por_estado_civil__femenino_[".showSearchPanel"] = true;
		$tdataGrupo_etarios_por_estado_civil__femenino_[".flexibleSearch"] = true;

$tdataGrupo_etarios_por_estado_civil__femenino_[".isUseAjaxSuggest"] = true;






$tdataGrupo_etarios_por_estado_civil__femenino_[".ajaxCodeSnippetAdded"] = false;

$tdataGrupo_etarios_por_estado_civil__femenino_[".buttonsAdded"] = false;

$tdataGrupo_etarios_por_estado_civil__femenino_[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGrupo_etarios_por_estado_civil__femenino_[".isUseTimeForSearch"] = false;





$tdataGrupo_etarios_por_estado_civil__femenino_[".allSearchFields"] = array();
$tdataGrupo_etarios_por_estado_civil__femenino_[".filterFields"] = array();
$tdataGrupo_etarios_por_estado_civil__femenino_[".requiredSearchFields"] = array();

$tdataGrupo_etarios_por_estado_civil__femenino_[".allSearchFields"][] = "rangoetario";
	$tdataGrupo_etarios_por_estado_civil__femenino_[".allSearchFields"][] = "estado_civil";
	$tdataGrupo_etarios_por_estado_civil__femenino_[".allSearchFields"][] = "depart_resid";
		$tdataGrupo_etarios_por_estado_civil__femenino_[".requiredSearchFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".allSearchFields"][] = "mun_resid";
		$tdataGrupo_etarios_por_estado_civil__femenino_[".requiredSearchFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".allSearchFields"][] = "COUNT(mun_resid)";
	$tdataGrupo_etarios_por_estado_civil__femenino_[".allSearchFields"][] = "sector_ppd";
	$tdataGrupo_etarios_por_estado_civil__femenino_[".allSearchFields"][] = "genero";
	

$tdataGrupo_etarios_por_estado_civil__femenino_[".googleLikeFields"] = array();
$tdataGrupo_etarios_por_estado_civil__femenino_[".googleLikeFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__femenino_[".googleLikeFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__femenino_[".googleLikeFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".googleLikeFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".googleLikeFields"][] = "COUNT(mun_resid)";
$tdataGrupo_etarios_por_estado_civil__femenino_[".googleLikeFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__femenino_[".googleLikeFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__femenino_[".panelSearchFields"] = array();
$tdataGrupo_etarios_por_estado_civil__femenino_[".searchPanelOptions"] = array();
$tdataGrupo_etarios_por_estado_civil__femenino_[".panelSearchFields"][] = "depart_resid";
	$tdataGrupo_etarios_por_estado_civil__femenino_[".panelSearchFields"][] = "mun_resid";
	
$tdataGrupo_etarios_por_estado_civil__femenino_[".advSearchFields"] = array();
$tdataGrupo_etarios_por_estado_civil__femenino_[".advSearchFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__femenino_[".advSearchFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__femenino_[".advSearchFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".advSearchFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".advSearchFields"][] = "COUNT(mun_resid)";
$tdataGrupo_etarios_por_estado_civil__femenino_[".advSearchFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__femenino_[".advSearchFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__femenino_[".tableType"] = "report";

$tdataGrupo_etarios_por_estado_civil__femenino_[".printerPageOrientation"] = 0;
$tdataGrupo_etarios_por_estado_civil__femenino_[".nPrinterPageScale"] = 100;

$tdataGrupo_etarios_por_estado_civil__femenino_[".nPrinterSplitRecords"] = 40;

$tdataGrupo_etarios_por_estado_civil__femenino_[".nPrinterPDFSplitRecords"] = 40;



$tdataGrupo_etarios_por_estado_civil__femenino_[".geocodingEnabled"] = false;

//report settings
$tdataGrupo_etarios_por_estado_civil__femenino_[".crossTabReport"] = true;

$tdataGrupo_etarios_por_estado_civil__femenino_[".reportGroupFields"] = true;
$tdataGrupo_etarios_por_estado_civil__femenino_[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "rangoetario";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "estado_civil";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataGrupo_etarios_por_estado_civil__femenino_[".reportGroupFieldsData"] = $reportGroupFields;

$tdataGrupo_etarios_por_estado_civil__femenino_[".reportHorizontalSummary"] = true;

$tdataGrupo_etarios_por_estado_civil__femenino_[".isExistTotalFields"] = true;

$tdataGrupo_etarios_por_estado_civil__femenino_[".reportVerticalSummary"] = true;



$tdataGrupo_etarios_por_estado_civil__femenino_[".repShowDet"] = true;

$tdataGrupo_etarios_por_estado_civil__femenino_[".reportLayout"] = 6;

//end of report settings




$tdataGrupo_etarios_por_estado_civil__femenino_[".listGridLayout"] = 3;

$tdataGrupo_etarios_por_estado_civil__femenino_[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGrupo_etarios_por_estado_civil__femenino_[".strOrderBy"] = $tstrOrderBy;

$tdataGrupo_etarios_por_estado_civil__femenino_[".orderindexes"] = array();

$tdataGrupo_etarios_por_estado_civil__femenino_[".sqlHead"] = "SELECT rangoetario,  estado_civil,  depart_resid,  mun_resid,  COUNT(mun_resid) AS `COUNT(mun_resid)`,  sector_ppd,  genero";
$tdataGrupo_etarios_por_estado_civil__femenino_[".sqlFrom"] = "FROM carcel";
$tdataGrupo_etarios_por_estado_civil__femenino_[".sqlWhereExpr"] = "genero ='FEMENINO'";
$tdataGrupo_etarios_por_estado_civil__femenino_[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGrupo_etarios_por_estado_civil__femenino_[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGrupo_etarios_por_estado_civil__femenino_[".arrGroupsPerPage"] = $arrGPP;

$tdataGrupo_etarios_por_estado_civil__femenino_[".highlightSearchResults"] = true;

$tableKeysGrupo_etarios_por_estado_civil__femenino_ = array();
$tdataGrupo_etarios_por_estado_civil__femenino_[".Keys"] = $tableKeysGrupo_etarios_por_estado_civil__femenino_;

$tdataGrupo_etarios_por_estado_civil__femenino_[".listFields"] = array();
$tdataGrupo_etarios_por_estado_civil__femenino_[".listFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__femenino_[".listFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__femenino_[".listFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".listFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".listFields"][] = "COUNT(mun_resid)";
$tdataGrupo_etarios_por_estado_civil__femenino_[".listFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__femenino_[".listFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__femenino_[".hideMobileList"] = array();


$tdataGrupo_etarios_por_estado_civil__femenino_[".viewFields"] = array();
$tdataGrupo_etarios_por_estado_civil__femenino_[".viewFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__femenino_[".viewFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__femenino_[".viewFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".viewFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".viewFields"][] = "COUNT(mun_resid)";
$tdataGrupo_etarios_por_estado_civil__femenino_[".viewFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__femenino_[".viewFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__femenino_[".addFields"] = array();
$tdataGrupo_etarios_por_estado_civil__femenino_[".addFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__femenino_[".addFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__femenino_[".addFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".addFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".addFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__femenino_[".addFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__femenino_[".masterListFields"] = array();
$tdataGrupo_etarios_por_estado_civil__femenino_[".masterListFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__femenino_[".masterListFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__femenino_[".masterListFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".masterListFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".masterListFields"][] = "COUNT(mun_resid)";
$tdataGrupo_etarios_por_estado_civil__femenino_[".masterListFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__femenino_[".masterListFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__femenino_[".inlineAddFields"] = array();
$tdataGrupo_etarios_por_estado_civil__femenino_[".inlineAddFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__femenino_[".inlineAddFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__femenino_[".inlineAddFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".inlineAddFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".inlineAddFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__femenino_[".inlineAddFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__femenino_[".editFields"] = array();
$tdataGrupo_etarios_por_estado_civil__femenino_[".editFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__femenino_[".editFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__femenino_[".editFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".editFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".editFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__femenino_[".editFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__femenino_[".inlineEditFields"] = array();
$tdataGrupo_etarios_por_estado_civil__femenino_[".inlineEditFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__femenino_[".inlineEditFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__femenino_[".inlineEditFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".inlineEditFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".inlineEditFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__femenino_[".inlineEditFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__femenino_[".updateSelectedFields"] = array();
$tdataGrupo_etarios_por_estado_civil__femenino_[".updateSelectedFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__femenino_[".updateSelectedFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__femenino_[".updateSelectedFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".updateSelectedFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".updateSelectedFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__femenino_[".updateSelectedFields"][] = "genero";


$tdataGrupo_etarios_por_estado_civil__femenino_[".exportFields"] = array();
$tdataGrupo_etarios_por_estado_civil__femenino_[".exportFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__femenino_[".exportFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__femenino_[".exportFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".exportFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".exportFields"][] = "COUNT(mun_resid)";
$tdataGrupo_etarios_por_estado_civil__femenino_[".exportFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__femenino_[".exportFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__femenino_[".importFields"] = array();
$tdataGrupo_etarios_por_estado_civil__femenino_[".importFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__femenino_[".importFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__femenino_[".importFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".importFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".importFields"][] = "COUNT(mun_resid)";
$tdataGrupo_etarios_por_estado_civil__femenino_[".importFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__femenino_[".importFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__femenino_[".printFields"] = array();
$tdataGrupo_etarios_por_estado_civil__femenino_[".printFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__femenino_[".printFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__femenino_[".printFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".printFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__femenino_[".printFields"][] = "COUNT(mun_resid)";
$tdataGrupo_etarios_por_estado_civil__femenino_[".printFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__femenino_[".printFields"][] = "genero";

//	rangoetario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rangoetario";
	$fdata["GoodName"] = "rangoetario";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Grupo_etarios_por_estado_civil__femenino_","rangoetario");
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




	$tdataGrupo_etarios_por_estado_civil__femenino_["rangoetario"] = $fdata;
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Grupo_etarios_por_estado_civil__femenino_","estado_civil");
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




	$tdataGrupo_etarios_por_estado_civil__femenino_["estado_civil"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Grupo_etarios_por_estado_civil__femenino_","depart_resid");
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




	$tdataGrupo_etarios_por_estado_civil__femenino_["depart_resid"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Grupo_etarios_por_estado_civil__femenino_","mun_resid");
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




	$tdataGrupo_etarios_por_estado_civil__femenino_["mun_resid"] = $fdata;
//	COUNT(mun_resid)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "COUNT(mun_resid)";
	$fdata["GoodName"] = "COUNT_mun_resid_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Grupo_etarios_por_estado_civil__femenino_","COUNT_mun_resid_");
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




	$tdataGrupo_etarios_por_estado_civil__femenino_["COUNT(mun_resid)"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Grupo_etarios_por_estado_civil__femenino_","sector_ppd");
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




	$tdataGrupo_etarios_por_estado_civil__femenino_["sector_ppd"] = $fdata;
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Grupo_etarios_por_estado_civil__femenino_","genero");
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




	$tdataGrupo_etarios_por_estado_civil__femenino_["genero"] = $fdata;


$tables_data["Grupo etarios por estado civil (femenino)"]=&$tdataGrupo_etarios_por_estado_civil__femenino_;
$field_labels["Grupo_etarios_por_estado_civil__femenino_"] = &$fieldLabelsGrupo_etarios_por_estado_civil__femenino_;
$fieldToolTips["Grupo_etarios_por_estado_civil__femenino_"] = &$fieldToolTipsGrupo_etarios_por_estado_civil__femenino_;
$placeHolders["Grupo_etarios_por_estado_civil__femenino_"] = &$placeHoldersGrupo_etarios_por_estado_civil__femenino_;
$page_titles["Grupo_etarios_por_estado_civil__femenino_"] = &$pageTitlesGrupo_etarios_por_estado_civil__femenino_;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Grupo etarios por estado civil (femenino)"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Grupo_etarios_por_estado_civil__femenino_()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rangoetario,  estado_civil,  depart_resid,  mun_resid,  COUNT(mun_resid) AS `COUNT(mun_resid)`,  sector_ppd,  genero";
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
	"m_srcTableName" => "Grupo etarios por estado civil (femenino)"
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
	"m_srcTableName" => "Grupo etarios por estado civil (femenino)"
));

$proto6["m_sql"] = "rangoetario";
$proto6["m_srcTableName"] = "Grupo etarios por estado civil (femenino)";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupo etarios por estado civil (femenino)"
));

$proto8["m_sql"] = "estado_civil";
$proto8["m_srcTableName"] = "Grupo etarios por estado civil (femenino)";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupo etarios por estado civil (femenino)"
));

$proto10["m_sql"] = "depart_resid";
$proto10["m_srcTableName"] = "Grupo etarios por estado civil (femenino)";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupo etarios por estado civil (femenino)"
));

$proto12["m_sql"] = "mun_resid";
$proto12["m_srcTableName"] = "Grupo etarios por estado civil (femenino)";
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
	"m_srcTableName" => "Grupo etarios por estado civil (femenino)"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(mun_resid)";
$proto14["m_srcTableName"] = "Grupo etarios por estado civil (femenino)";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "COUNT(mun_resid)";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupo etarios por estado civil (femenino)"
));

$proto17["m_sql"] = "sector_ppd";
$proto17["m_srcTableName"] = "Grupo etarios por estado civil (femenino)";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupo etarios por estado civil (femenino)"
));

$proto19["m_sql"] = "genero";
$proto19["m_srcTableName"] = "Grupo etarios por estado civil (femenino)";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "carcel";
$proto22["m_srcTableName"] = "Grupo etarios por estado civil (femenino)";
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
$proto21["m_srcTableName"] = "Grupo etarios por estado civil (femenino)";
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
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupo etarios por estado civil (femenino)"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupo etarios por estado civil (femenino)"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupo etarios por estado civil (femenino)"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupo etarios por estado civil (femenino)"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupo etarios por estado civil (femenino)"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupo etarios por estado civil (femenino)"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Grupo etarios por estado civil (femenino)";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Grupo_etarios_por_estado_civil__femenino_ = createSqlQuery_Grupo_etarios_por_estado_civil__femenino_();


	
		;

							

$tdataGrupo_etarios_por_estado_civil__femenino_[".sqlquery"] = $queryData_Grupo_etarios_por_estado_civil__femenino_;

$tableEvents["Grupo etarios por estado civil (femenino)"] = new eventsBase;
$tdataGrupo_etarios_por_estado_civil__femenino_[".hasEvents"] = false;

?>