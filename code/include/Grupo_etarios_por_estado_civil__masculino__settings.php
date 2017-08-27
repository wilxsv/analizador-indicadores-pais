<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGrupo_etarios_por_estado_civil__masculino_ = array();
	$tdataGrupo_etarios_por_estado_civil__masculino_[".truncateText"] = true;
	$tdataGrupo_etarios_por_estado_civil__masculino_[".NumberOfChars"] = 80;
	$tdataGrupo_etarios_por_estado_civil__masculino_[".ShortName"] = "Grupo_etarios_por_estado_civil__masculino_";
	$tdataGrupo_etarios_por_estado_civil__masculino_[".OwnerID"] = "";
	$tdataGrupo_etarios_por_estado_civil__masculino_[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsGrupo_etarios_por_estado_civil__masculino_ = array();
$fieldToolTipsGrupo_etarios_por_estado_civil__masculino_ = array();
$pageTitlesGrupo_etarios_por_estado_civil__masculino_ = array();
$placeHoldersGrupo_etarios_por_estado_civil__masculino_ = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGrupo_etarios_por_estado_civil__masculino_["Spanish"] = array();
	$fieldToolTipsGrupo_etarios_por_estado_civil__masculino_["Spanish"] = array();
	$placeHoldersGrupo_etarios_por_estado_civil__masculino_["Spanish"] = array();
	$pageTitlesGrupo_etarios_por_estado_civil__masculino_["Spanish"] = array();
	$fieldLabelsGrupo_etarios_por_estado_civil__masculino_["Spanish"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsGrupo_etarios_por_estado_civil__masculino_["Spanish"]["rangoetario"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__masculino_["Spanish"]["rangoetario"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__masculino_["Spanish"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsGrupo_etarios_por_estado_civil__masculino_["Spanish"]["estado_civil"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__masculino_["Spanish"]["estado_civil"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__masculino_["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsGrupo_etarios_por_estado_civil__masculino_["Spanish"]["mun_resid"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__masculino_["Spanish"]["mun_resid"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__masculino_["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsGrupo_etarios_por_estado_civil__masculino_["Spanish"]["depart_resid"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__masculino_["Spanish"]["depart_resid"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__masculino_["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsGrupo_etarios_por_estado_civil__masculino_["Spanish"]["sector_ppd"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__masculino_["Spanish"]["sector_ppd"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__masculino_["Spanish"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsGrupo_etarios_por_estado_civil__masculino_["Spanish"]["COUNT_mun_resid_"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__masculino_["Spanish"]["COUNT_mun_resid_"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__masculino_["Spanish"]["genero"] = "Genero";
	$fieldToolTipsGrupo_etarios_por_estado_civil__masculino_["Spanish"]["genero"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__masculino_["Spanish"]["genero"] = "";
	if (count($fieldToolTipsGrupo_etarios_por_estado_civil__masculino_["Spanish"]))
		$tdataGrupo_etarios_por_estado_civil__masculino_[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsGrupo_etarios_por_estado_civil__masculino_["English"] = array();
	$fieldToolTipsGrupo_etarios_por_estado_civil__masculino_["English"] = array();
	$placeHoldersGrupo_etarios_por_estado_civil__masculino_["English"] = array();
	$pageTitlesGrupo_etarios_por_estado_civil__masculino_["English"] = array();
	$fieldLabelsGrupo_etarios_por_estado_civil__masculino_["English"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsGrupo_etarios_por_estado_civil__masculino_["English"]["rangoetario"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__masculino_["English"]["rangoetario"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__masculino_["English"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsGrupo_etarios_por_estado_civil__masculino_["English"]["estado_civil"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__masculino_["English"]["estado_civil"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__masculino_["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsGrupo_etarios_por_estado_civil__masculino_["English"]["mun_resid"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__masculino_["English"]["mun_resid"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__masculino_["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsGrupo_etarios_por_estado_civil__masculino_["English"]["depart_resid"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__masculino_["English"]["depart_resid"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__masculino_["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsGrupo_etarios_por_estado_civil__masculino_["English"]["sector_ppd"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__masculino_["English"]["sector_ppd"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__masculino_["English"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsGrupo_etarios_por_estado_civil__masculino_["English"]["COUNT_mun_resid_"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__masculino_["English"]["COUNT_mun_resid_"] = "";
	$fieldLabelsGrupo_etarios_por_estado_civil__masculino_["English"]["genero"] = "Genero";
	$fieldToolTipsGrupo_etarios_por_estado_civil__masculino_["English"]["genero"] = "";
	$placeHoldersGrupo_etarios_por_estado_civil__masculino_["English"]["genero"] = "";
	if (count($fieldToolTipsGrupo_etarios_por_estado_civil__masculino_["English"]))
		$tdataGrupo_etarios_por_estado_civil__masculino_[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGrupo_etarios_por_estado_civil__masculino_[""] = array();
	$fieldToolTipsGrupo_etarios_por_estado_civil__masculino_[""] = array();
	$placeHoldersGrupo_etarios_por_estado_civil__masculino_[""] = array();
	$pageTitlesGrupo_etarios_por_estado_civil__masculino_[""] = array();
	if (count($fieldToolTipsGrupo_etarios_por_estado_civil__masculino_[""]))
		$tdataGrupo_etarios_por_estado_civil__masculino_[".isUseToolTips"] = true;
}





$tdataGrupo_etarios_por_estado_civil__masculino_[".shortTableName"] = "Grupo_etarios_por_estado_civil__masculino_";
$tdataGrupo_etarios_por_estado_civil__masculino_[".nSecOptions"] = 0;
$tdataGrupo_etarios_por_estado_civil__masculino_[".recsPerRowPrint"] = 1;
$tdataGrupo_etarios_por_estado_civil__masculino_[".mainTableOwnerID"] = "";
$tdataGrupo_etarios_por_estado_civil__masculino_[".moveNext"] = 1;
$tdataGrupo_etarios_por_estado_civil__masculino_[".entityType"] = 2;

$tdataGrupo_etarios_por_estado_civil__masculino_[".strOriginalTableName"] = "carcel";

	



$tdataGrupo_etarios_por_estado_civil__masculino_[".showAddInPopup"] = false;

$tdataGrupo_etarios_por_estado_civil__masculino_[".showEditInPopup"] = false;

$tdataGrupo_etarios_por_estado_civil__masculino_[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGrupo_etarios_por_estado_civil__masculino_[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGrupo_etarios_por_estado_civil__masculino_[".fieldsForRegister"] = array();

$tdataGrupo_etarios_por_estado_civil__masculino_[".listAjax"] = false;

	$tdataGrupo_etarios_por_estado_civil__masculino_[".audit"] = false;

	$tdataGrupo_etarios_por_estado_civil__masculino_[".locking"] = false;



$tdataGrupo_etarios_por_estado_civil__masculino_[".list"] = true;



$tdataGrupo_etarios_por_estado_civil__masculino_[".reorderRecordsByHeader"] = true;





$tdataGrupo_etarios_por_estado_civil__masculino_[".exportTo"] = true;

$tdataGrupo_etarios_por_estado_civil__masculino_[".printFriendly"] = true;


$tdataGrupo_etarios_por_estado_civil__masculino_[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataGrupo_etarios_por_estado_civil__masculino_[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataGrupo_etarios_por_estado_civil__masculino_[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataGrupo_etarios_por_estado_civil__masculino_[".searchSaving"] = false;
//

$tdataGrupo_etarios_por_estado_civil__masculino_[".showSearchPanel"] = true;
		$tdataGrupo_etarios_por_estado_civil__masculino_[".flexibleSearch"] = true;

$tdataGrupo_etarios_por_estado_civil__masculino_[".isUseAjaxSuggest"] = true;






$tdataGrupo_etarios_por_estado_civil__masculino_[".ajaxCodeSnippetAdded"] = false;

$tdataGrupo_etarios_por_estado_civil__masculino_[".buttonsAdded"] = false;

$tdataGrupo_etarios_por_estado_civil__masculino_[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGrupo_etarios_por_estado_civil__masculino_[".isUseTimeForSearch"] = false;





$tdataGrupo_etarios_por_estado_civil__masculino_[".allSearchFields"] = array();
$tdataGrupo_etarios_por_estado_civil__masculino_[".filterFields"] = array();
$tdataGrupo_etarios_por_estado_civil__masculino_[".requiredSearchFields"] = array();

$tdataGrupo_etarios_por_estado_civil__masculino_[".allSearchFields"][] = "rangoetario";
	$tdataGrupo_etarios_por_estado_civil__masculino_[".allSearchFields"][] = "estado_civil";
	$tdataGrupo_etarios_por_estado_civil__masculino_[".allSearchFields"][] = "depart_resid";
		$tdataGrupo_etarios_por_estado_civil__masculino_[".requiredSearchFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".allSearchFields"][] = "mun_resid";
		$tdataGrupo_etarios_por_estado_civil__masculino_[".requiredSearchFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".allSearchFields"][] = "COUNT(mun_resid)";
	$tdataGrupo_etarios_por_estado_civil__masculino_[".allSearchFields"][] = "sector_ppd";
	$tdataGrupo_etarios_por_estado_civil__masculino_[".allSearchFields"][] = "genero";
	

$tdataGrupo_etarios_por_estado_civil__masculino_[".googleLikeFields"] = array();
$tdataGrupo_etarios_por_estado_civil__masculino_[".googleLikeFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__masculino_[".googleLikeFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__masculino_[".googleLikeFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".googleLikeFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".googleLikeFields"][] = "COUNT(mun_resid)";
$tdataGrupo_etarios_por_estado_civil__masculino_[".googleLikeFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__masculino_[".googleLikeFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__masculino_[".panelSearchFields"] = array();
$tdataGrupo_etarios_por_estado_civil__masculino_[".searchPanelOptions"] = array();
$tdataGrupo_etarios_por_estado_civil__masculino_[".panelSearchFields"][] = "depart_resid";
	$tdataGrupo_etarios_por_estado_civil__masculino_[".panelSearchFields"][] = "mun_resid";
	
$tdataGrupo_etarios_por_estado_civil__masculino_[".advSearchFields"] = array();
$tdataGrupo_etarios_por_estado_civil__masculino_[".advSearchFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__masculino_[".advSearchFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__masculino_[".advSearchFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".advSearchFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".advSearchFields"][] = "COUNT(mun_resid)";
$tdataGrupo_etarios_por_estado_civil__masculino_[".advSearchFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__masculino_[".advSearchFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__masculino_[".tableType"] = "report";

$tdataGrupo_etarios_por_estado_civil__masculino_[".printerPageOrientation"] = 0;
$tdataGrupo_etarios_por_estado_civil__masculino_[".nPrinterPageScale"] = 100;

$tdataGrupo_etarios_por_estado_civil__masculino_[".nPrinterSplitRecords"] = 40;

$tdataGrupo_etarios_por_estado_civil__masculino_[".nPrinterPDFSplitRecords"] = 40;



$tdataGrupo_etarios_por_estado_civil__masculino_[".geocodingEnabled"] = false;

//report settings
$tdataGrupo_etarios_por_estado_civil__masculino_[".crossTabReport"] = true;

$tdataGrupo_etarios_por_estado_civil__masculino_[".reportGroupFields"] = true;
$tdataGrupo_etarios_por_estado_civil__masculino_[".pageSize"] = 5;
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
$tdataGrupo_etarios_por_estado_civil__masculino_[".reportGroupFieldsData"] = $reportGroupFields;

$tdataGrupo_etarios_por_estado_civil__masculino_[".reportHorizontalSummary"] = true;

$tdataGrupo_etarios_por_estado_civil__masculino_[".isExistTotalFields"] = true;

$tdataGrupo_etarios_por_estado_civil__masculino_[".reportVerticalSummary"] = true;



$tdataGrupo_etarios_por_estado_civil__masculino_[".repShowDet"] = true;

$tdataGrupo_etarios_por_estado_civil__masculino_[".reportLayout"] = 6;

//end of report settings




$tdataGrupo_etarios_por_estado_civil__masculino_[".listGridLayout"] = 3;

$tdataGrupo_etarios_por_estado_civil__masculino_[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGrupo_etarios_por_estado_civil__masculino_[".strOrderBy"] = $tstrOrderBy;

$tdataGrupo_etarios_por_estado_civil__masculino_[".orderindexes"] = array();

$tdataGrupo_etarios_por_estado_civil__masculino_[".sqlHead"] = "SELECT rangoetario,  estado_civil,  depart_resid,  mun_resid,  COUNT(mun_resid) AS `COUNT(mun_resid)`,  sector_ppd,  genero";
$tdataGrupo_etarios_por_estado_civil__masculino_[".sqlFrom"] = "FROM carcel";
$tdataGrupo_etarios_por_estado_civil__masculino_[".sqlWhereExpr"] = "genero ='MASCULINO'";
$tdataGrupo_etarios_por_estado_civil__masculino_[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGrupo_etarios_por_estado_civil__masculino_[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGrupo_etarios_por_estado_civil__masculino_[".arrGroupsPerPage"] = $arrGPP;

$tdataGrupo_etarios_por_estado_civil__masculino_[".highlightSearchResults"] = true;

$tableKeysGrupo_etarios_por_estado_civil__masculino_ = array();
$tdataGrupo_etarios_por_estado_civil__masculino_[".Keys"] = $tableKeysGrupo_etarios_por_estado_civil__masculino_;

$tdataGrupo_etarios_por_estado_civil__masculino_[".listFields"] = array();
$tdataGrupo_etarios_por_estado_civil__masculino_[".listFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__masculino_[".listFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__masculino_[".listFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".listFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".listFields"][] = "COUNT(mun_resid)";
$tdataGrupo_etarios_por_estado_civil__masculino_[".listFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__masculino_[".listFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__masculino_[".hideMobileList"] = array();


$tdataGrupo_etarios_por_estado_civil__masculino_[".viewFields"] = array();
$tdataGrupo_etarios_por_estado_civil__masculino_[".viewFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__masculino_[".viewFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__masculino_[".viewFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".viewFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".viewFields"][] = "COUNT(mun_resid)";
$tdataGrupo_etarios_por_estado_civil__masculino_[".viewFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__masculino_[".viewFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__masculino_[".addFields"] = array();
$tdataGrupo_etarios_por_estado_civil__masculino_[".addFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__masculino_[".addFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__masculino_[".addFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".addFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".addFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__masculino_[".addFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__masculino_[".masterListFields"] = array();
$tdataGrupo_etarios_por_estado_civil__masculino_[".masterListFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__masculino_[".masterListFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__masculino_[".masterListFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".masterListFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".masterListFields"][] = "COUNT(mun_resid)";
$tdataGrupo_etarios_por_estado_civil__masculino_[".masterListFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__masculino_[".masterListFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__masculino_[".inlineAddFields"] = array();
$tdataGrupo_etarios_por_estado_civil__masculino_[".inlineAddFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__masculino_[".inlineAddFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__masculino_[".inlineAddFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".inlineAddFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".inlineAddFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__masculino_[".inlineAddFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__masculino_[".editFields"] = array();
$tdataGrupo_etarios_por_estado_civil__masculino_[".editFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__masculino_[".editFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__masculino_[".editFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".editFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".editFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__masculino_[".editFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__masculino_[".inlineEditFields"] = array();
$tdataGrupo_etarios_por_estado_civil__masculino_[".inlineEditFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__masculino_[".inlineEditFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__masculino_[".inlineEditFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".inlineEditFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".inlineEditFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__masculino_[".inlineEditFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__masculino_[".updateSelectedFields"] = array();
$tdataGrupo_etarios_por_estado_civil__masculino_[".updateSelectedFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__masculino_[".updateSelectedFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__masculino_[".updateSelectedFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".updateSelectedFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".updateSelectedFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__masculino_[".updateSelectedFields"][] = "genero";


$tdataGrupo_etarios_por_estado_civil__masculino_[".exportFields"] = array();
$tdataGrupo_etarios_por_estado_civil__masculino_[".exportFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__masculino_[".exportFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__masculino_[".exportFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".exportFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".exportFields"][] = "COUNT(mun_resid)";
$tdataGrupo_etarios_por_estado_civil__masculino_[".exportFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__masculino_[".exportFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__masculino_[".importFields"] = array();
$tdataGrupo_etarios_por_estado_civil__masculino_[".importFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__masculino_[".importFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__masculino_[".importFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".importFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".importFields"][] = "COUNT(mun_resid)";
$tdataGrupo_etarios_por_estado_civil__masculino_[".importFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__masculino_[".importFields"][] = "genero";

$tdataGrupo_etarios_por_estado_civil__masculino_[".printFields"] = array();
$tdataGrupo_etarios_por_estado_civil__masculino_[".printFields"][] = "rangoetario";
$tdataGrupo_etarios_por_estado_civil__masculino_[".printFields"][] = "estado_civil";
$tdataGrupo_etarios_por_estado_civil__masculino_[".printFields"][] = "depart_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".printFields"][] = "mun_resid";
$tdataGrupo_etarios_por_estado_civil__masculino_[".printFields"][] = "COUNT(mun_resid)";
$tdataGrupo_etarios_por_estado_civil__masculino_[".printFields"][] = "sector_ppd";
$tdataGrupo_etarios_por_estado_civil__masculino_[".printFields"][] = "genero";

//	rangoetario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rangoetario";
	$fdata["GoodName"] = "rangoetario";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Grupo_etarios_por_estado_civil__masculino_","rangoetario");
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




	$tdataGrupo_etarios_por_estado_civil__masculino_["rangoetario"] = $fdata;
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Grupo_etarios_por_estado_civil__masculino_","estado_civil");
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




	$tdataGrupo_etarios_por_estado_civil__masculino_["estado_civil"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Grupo_etarios_por_estado_civil__masculino_","depart_resid");
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




	$tdataGrupo_etarios_por_estado_civil__masculino_["depart_resid"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Grupo_etarios_por_estado_civil__masculino_","mun_resid");
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




	$tdataGrupo_etarios_por_estado_civil__masculino_["mun_resid"] = $fdata;
//	COUNT(mun_resid)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "COUNT(mun_resid)";
	$fdata["GoodName"] = "COUNT_mun_resid_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Grupo_etarios_por_estado_civil__masculino_","COUNT_mun_resid_");
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




	$tdataGrupo_etarios_por_estado_civil__masculino_["COUNT(mun_resid)"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Grupo_etarios_por_estado_civil__masculino_","sector_ppd");
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




	$tdataGrupo_etarios_por_estado_civil__masculino_["sector_ppd"] = $fdata;
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Grupo_etarios_por_estado_civil__masculino_","genero");
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




	$tdataGrupo_etarios_por_estado_civil__masculino_["genero"] = $fdata;


$tables_data["Grupo etarios por estado civil (masculino)"]=&$tdataGrupo_etarios_por_estado_civil__masculino_;
$field_labels["Grupo_etarios_por_estado_civil__masculino_"] = &$fieldLabelsGrupo_etarios_por_estado_civil__masculino_;
$fieldToolTips["Grupo_etarios_por_estado_civil__masculino_"] = &$fieldToolTipsGrupo_etarios_por_estado_civil__masculino_;
$placeHolders["Grupo_etarios_por_estado_civil__masculino_"] = &$placeHoldersGrupo_etarios_por_estado_civil__masculino_;
$page_titles["Grupo_etarios_por_estado_civil__masculino_"] = &$pageTitlesGrupo_etarios_por_estado_civil__masculino_;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Grupo etarios por estado civil (masculino)"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Grupo_etarios_por_estado_civil__masculino_()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rangoetario,  estado_civil,  depart_resid,  mun_resid,  COUNT(mun_resid) AS `COUNT(mun_resid)`,  sector_ppd,  genero";
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
	"m_srcTableName" => "Grupo etarios por estado civil (masculino)"
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
	"m_srcTableName" => "Grupo etarios por estado civil (masculino)"
));

$proto6["m_sql"] = "rangoetario";
$proto6["m_srcTableName"] = "Grupo etarios por estado civil (masculino)";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupo etarios por estado civil (masculino)"
));

$proto8["m_sql"] = "estado_civil";
$proto8["m_srcTableName"] = "Grupo etarios por estado civil (masculino)";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupo etarios por estado civil (masculino)"
));

$proto10["m_sql"] = "depart_resid";
$proto10["m_srcTableName"] = "Grupo etarios por estado civil (masculino)";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupo etarios por estado civil (masculino)"
));

$proto12["m_sql"] = "mun_resid";
$proto12["m_srcTableName"] = "Grupo etarios por estado civil (masculino)";
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
	"m_srcTableName" => "Grupo etarios por estado civil (masculino)"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(mun_resid)";
$proto14["m_srcTableName"] = "Grupo etarios por estado civil (masculino)";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "COUNT(mun_resid)";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupo etarios por estado civil (masculino)"
));

$proto17["m_sql"] = "sector_ppd";
$proto17["m_srcTableName"] = "Grupo etarios por estado civil (masculino)";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupo etarios por estado civil (masculino)"
));

$proto19["m_sql"] = "genero";
$proto19["m_srcTableName"] = "Grupo etarios por estado civil (masculino)";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "carcel";
$proto22["m_srcTableName"] = "Grupo etarios por estado civil (masculino)";
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
$proto21["m_srcTableName"] = "Grupo etarios por estado civil (masculino)";
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
	"m_srcTableName" => "Grupo etarios por estado civil (masculino)"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupo etarios por estado civil (masculino)"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupo etarios por estado civil (masculino)"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupo etarios por estado civil (masculino)"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupo etarios por estado civil (masculino)"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupo etarios por estado civil (masculino)"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Grupo etarios por estado civil (masculino)";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Grupo_etarios_por_estado_civil__masculino_ = createSqlQuery_Grupo_etarios_por_estado_civil__masculino_();


	
		;

							

$tdataGrupo_etarios_por_estado_civil__masculino_[".sqlquery"] = $queryData_Grupo_etarios_por_estado_civil__masculino_;

$tableEvents["Grupo etarios por estado civil (masculino)"] = new eventsBase;
$tdataGrupo_etarios_por_estado_civil__masculino_[".hasEvents"] = false;

?>