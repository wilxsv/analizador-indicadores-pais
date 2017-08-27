<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahomicidios_sv_2016 = array();
	$tdatahomicidios_sv_2016[".truncateText"] = true;
	$tdatahomicidios_sv_2016[".NumberOfChars"] = 80;
	$tdatahomicidios_sv_2016[".ShortName"] = "homicidios_sv_2016";
	$tdatahomicidios_sv_2016[".OwnerID"] = "";
	$tdatahomicidios_sv_2016[".OriginalTable"] = "homicidios_sv_2016";

//	field labels
$fieldLabelshomicidios_sv_2016 = array();
$fieldToolTipshomicidios_sv_2016 = array();
$pageTitleshomicidios_sv_2016 = array();
$placeHoldershomicidios_sv_2016 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshomicidios_sv_2016["Spanish"] = array();
	$fieldToolTipshomicidios_sv_2016["Spanish"] = array();
	$placeHoldershomicidios_sv_2016["Spanish"] = array();
	$pageTitleshomicidios_sv_2016["Spanish"] = array();
	$fieldLabelshomicidios_sv_2016["Spanish"]["__ocupacion_"] = "Ocupacion";
	$fieldToolTipshomicidios_sv_2016["Spanish"]["__ocupacion_"] = "";
	$placeHoldershomicidios_sv_2016["Spanish"]["__ocupacion_"] = "";
	$fieldLabelshomicidios_sv_2016["Spanish"]["__tipo_arma"] = "Tipo Arma";
	$fieldToolTipshomicidios_sv_2016["Spanish"]["__tipo_arma"] = "";
	$placeHoldershomicidios_sv_2016["Spanish"]["__tipo_arma"] = "";
	$fieldLabelshomicidios_sv_2016["Spanish"]["__municipio_"] = "Municipio";
	$fieldToolTipshomicidios_sv_2016["Spanish"]["__municipio_"] = "";
	$placeHoldershomicidios_sv_2016["Spanish"]["__municipio_"] = "";
	$fieldLabelshomicidios_sv_2016["Spanish"]["__cdpto_cmun"] = "Cdpto Cmun";
	$fieldToolTipshomicidios_sv_2016["Spanish"]["__cdpto_cmun"] = "";
	$placeHoldershomicidios_sv_2016["Spanish"]["__cdpto_cmun"] = "";
	$fieldLabelshomicidios_sv_2016["Spanish"]["__dpto1"] = "Dpto1";
	$fieldToolTipshomicidios_sv_2016["Spanish"]["__dpto1"] = "";
	$placeHoldershomicidios_sv_2016["Spanish"]["__dpto1"] = "";
	$fieldLabelshomicidios_sv_2016["Spanish"]["__ocupacion_1"] = "Ocupacion 1";
	$fieldToolTipshomicidios_sv_2016["Spanish"]["__ocupacion_1"] = "";
	$placeHoldershomicidios_sv_2016["Spanish"]["__ocupacion_1"] = "";
	$fieldLabelshomicidios_sv_2016["Spanish"]["__municipio"] = "Municipio";
	$fieldToolTipshomicidios_sv_2016["Spanish"]["__municipio"] = "";
	$placeHoldershomicidios_sv_2016["Spanish"]["__municipio"] = "";
	$fieldLabelshomicidios_sv_2016["Spanish"]["__movil"] = "Movil";
	$fieldToolTipshomicidios_sv_2016["Spanish"]["__movil"] = "";
	$placeHoldershomicidios_sv_2016["Spanish"]["__movil"] = "";
	$fieldLabelshomicidios_sv_2016["Spanish"]["__circunstan"] = "Circunstan";
	$fieldToolTipshomicidios_sv_2016["Spanish"]["__circunstan"] = "";
	$placeHoldershomicidios_sv_2016["Spanish"]["__circunstan"] = "";
	$fieldLabelshomicidios_sv_2016["Spanish"]["__causa_prel"] = "Causa Prel";
	$fieldToolTipshomicidios_sv_2016["Spanish"]["__causa_prel"] = "";
	$placeHoldershomicidios_sv_2016["Spanish"]["__causa_prel"] = "";
	$fieldLabelshomicidios_sv_2016["Spanish"]["__causa_pr_1"] = "Causa Pr 1";
	$fieldToolTipshomicidios_sv_2016["Spanish"]["__causa_pr_1"] = "";
	$placeHoldershomicidios_sv_2016["Spanish"]["__causa_pr_1"] = "";
	$fieldLabelshomicidios_sv_2016["Spanish"]["__observacio"] = "Observacio";
	$fieldToolTipshomicidios_sv_2016["Spanish"]["__observacio"] = "";
	$placeHoldershomicidios_sv_2016["Spanish"]["__observacio"] = "";
	$fieldLabelshomicidios_sv_2016["Spanish"]["COUNT___municipio_"] = "COUNT(  Municipio)";
	$fieldToolTipshomicidios_sv_2016["Spanish"]["COUNT___municipio_"] = "";
	$placeHoldershomicidios_sv_2016["Spanish"]["COUNT___municipio_"] = "";
	if (count($fieldToolTipshomicidios_sv_2016["Spanish"]))
		$tdatahomicidios_sv_2016[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshomicidios_sv_2016["English"] = array();
	$fieldToolTipshomicidios_sv_2016["English"] = array();
	$placeHoldershomicidios_sv_2016["English"] = array();
	$pageTitleshomicidios_sv_2016["English"] = array();
	$fieldLabelshomicidios_sv_2016["English"]["__ocupacion_"] = "Ocupacion";
	$fieldToolTipshomicidios_sv_2016["English"]["__ocupacion_"] = "";
	$placeHoldershomicidios_sv_2016["English"]["__ocupacion_"] = "";
	$fieldLabelshomicidios_sv_2016["English"]["__tipo_arma"] = "Tipo Arma";
	$fieldToolTipshomicidios_sv_2016["English"]["__tipo_arma"] = "";
	$placeHoldershomicidios_sv_2016["English"]["__tipo_arma"] = "";
	$fieldLabelshomicidios_sv_2016["English"]["__municipio_"] = "Municipio";
	$fieldToolTipshomicidios_sv_2016["English"]["__municipio_"] = "";
	$placeHoldershomicidios_sv_2016["English"]["__municipio_"] = "";
	$fieldLabelshomicidios_sv_2016["English"]["__cdpto_cmun"] = "Cdpto Cmun";
	$fieldToolTipshomicidios_sv_2016["English"]["__cdpto_cmun"] = "";
	$placeHoldershomicidios_sv_2016["English"]["__cdpto_cmun"] = "";
	$fieldLabelshomicidios_sv_2016["English"]["__dpto1"] = "Dpto1";
	$fieldToolTipshomicidios_sv_2016["English"]["__dpto1"] = "";
	$placeHoldershomicidios_sv_2016["English"]["__dpto1"] = "";
	$fieldLabelshomicidios_sv_2016["English"]["__ocupacion_1"] = "Ocupacion 1";
	$fieldToolTipshomicidios_sv_2016["English"]["__ocupacion_1"] = "";
	$placeHoldershomicidios_sv_2016["English"]["__ocupacion_1"] = "";
	$fieldLabelshomicidios_sv_2016["English"]["__municipio"] = "Municipio";
	$fieldToolTipshomicidios_sv_2016["English"]["__municipio"] = "";
	$placeHoldershomicidios_sv_2016["English"]["__municipio"] = "";
	$fieldLabelshomicidios_sv_2016["English"]["__movil"] = "Movil";
	$fieldToolTipshomicidios_sv_2016["English"]["__movil"] = "";
	$placeHoldershomicidios_sv_2016["English"]["__movil"] = "";
	$fieldLabelshomicidios_sv_2016["English"]["__circunstan"] = "Circunstan";
	$fieldToolTipshomicidios_sv_2016["English"]["__circunstan"] = "";
	$placeHoldershomicidios_sv_2016["English"]["__circunstan"] = "";
	$fieldLabelshomicidios_sv_2016["English"]["__causa_prel"] = "Causa Prel";
	$fieldToolTipshomicidios_sv_2016["English"]["__causa_prel"] = "";
	$placeHoldershomicidios_sv_2016["English"]["__causa_prel"] = "";
	$fieldLabelshomicidios_sv_2016["English"]["__causa_pr_1"] = "Causa Pr 1";
	$fieldToolTipshomicidios_sv_2016["English"]["__causa_pr_1"] = "";
	$placeHoldershomicidios_sv_2016["English"]["__causa_pr_1"] = "";
	$fieldLabelshomicidios_sv_2016["English"]["__observacio"] = "Observacio";
	$fieldToolTipshomicidios_sv_2016["English"]["__observacio"] = "";
	$placeHoldershomicidios_sv_2016["English"]["__observacio"] = "";
	$fieldLabelshomicidios_sv_2016["English"]["COUNT___municipio_"] = "COUNT(  Municipio)";
	$fieldToolTipshomicidios_sv_2016["English"]["COUNT___municipio_"] = "";
	$placeHoldershomicidios_sv_2016["English"]["COUNT___municipio_"] = "";
	if (count($fieldToolTipshomicidios_sv_2016["English"]))
		$tdatahomicidios_sv_2016[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshomicidios_sv_2016[""] = array();
	$fieldToolTipshomicidios_sv_2016[""] = array();
	$placeHoldershomicidios_sv_2016[""] = array();
	$pageTitleshomicidios_sv_2016[""] = array();
	if (count($fieldToolTipshomicidios_sv_2016[""]))
		$tdatahomicidios_sv_2016[".isUseToolTips"] = true;
}





$tdatahomicidios_sv_2016[".shortTableName"] = "homicidios_sv_2016";
$tdatahomicidios_sv_2016[".nSecOptions"] = 0;
$tdatahomicidios_sv_2016[".recsPerRowPrint"] = 1;
$tdatahomicidios_sv_2016[".mainTableOwnerID"] = "";
$tdatahomicidios_sv_2016[".moveNext"] = 1;
$tdatahomicidios_sv_2016[".entityType"] = 1;

$tdatahomicidios_sv_2016[".strOriginalTableName"] = "homicidios_sv_2016";

	



$tdatahomicidios_sv_2016[".showAddInPopup"] = false;

$tdatahomicidios_sv_2016[".showEditInPopup"] = false;

$tdatahomicidios_sv_2016[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahomicidios_sv_2016[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahomicidios_sv_2016[".fieldsForRegister"] = array();

	$tdatahomicidios_sv_2016[".listAjax"] = true;

	$tdatahomicidios_sv_2016[".audit"] = false;

	$tdatahomicidios_sv_2016[".locking"] = false;



$tdatahomicidios_sv_2016[".list"] = true;



$tdatahomicidios_sv_2016[".reorderRecordsByHeader"] = true;
$tdatahomicidios_sv_2016[".createSortByDropdown"] = true;
$tdatahomicidios_sv_2016[".strSortControlSettingsJSON"] = "";




$tdatahomicidios_sv_2016[".import"] = true;

$tdatahomicidios_sv_2016[".exportTo"] = true;

$tdatahomicidios_sv_2016[".printFriendly"] = true;


$tdatahomicidios_sv_2016[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatahomicidios_sv_2016[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatahomicidios_sv_2016[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatahomicidios_sv_2016[".searchSaving"] = false;
//

$tdatahomicidios_sv_2016[".showSearchPanel"] = true;
		$tdatahomicidios_sv_2016[".flexibleSearch"] = true;

$tdatahomicidios_sv_2016[".isUseAjaxSuggest"] = true;

$tdatahomicidios_sv_2016[".rowHighlite"] = true;





$tdatahomicidios_sv_2016[".ajaxCodeSnippetAdded"] = false;

$tdatahomicidios_sv_2016[".buttonsAdded"] = false;

$tdatahomicidios_sv_2016[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahomicidios_sv_2016[".isUseTimeForSearch"] = false;





$tdatahomicidios_sv_2016[".allSearchFields"] = array();
$tdatahomicidios_sv_2016[".filterFields"] = array();
$tdatahomicidios_sv_2016[".requiredSearchFields"] = array();

$tdatahomicidios_sv_2016[".allSearchFields"][] = "__ocupacion_";
	$tdatahomicidios_sv_2016[".allSearchFields"][] = "__municipio_";
	$tdatahomicidios_sv_2016[".allSearchFields"][] = "__dpto1";
	$tdatahomicidios_sv_2016[".allSearchFields"][] = "__tipo_arma";
	$tdatahomicidios_sv_2016[".allSearchFields"][] = "__cdpto_cmun";
	$tdatahomicidios_sv_2016[".allSearchFields"][] = "__ocupacion_1";
	$tdatahomicidios_sv_2016[".allSearchFields"][] = "__municipio";
	$tdatahomicidios_sv_2016[".allSearchFields"][] = "__movil";
	$tdatahomicidios_sv_2016[".allSearchFields"][] = "__circunstan";
	$tdatahomicidios_sv_2016[".allSearchFields"][] = "__causa_prel";
	$tdatahomicidios_sv_2016[".allSearchFields"][] = "__causa_pr_1";
	$tdatahomicidios_sv_2016[".allSearchFields"][] = "__observacio";
	$tdatahomicidios_sv_2016[".allSearchFields"][] = "COUNT(__municipio)";
	

$tdatahomicidios_sv_2016[".googleLikeFields"] = array();
$tdatahomicidios_sv_2016[".googleLikeFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016[".googleLikeFields"][] = "__municipio_";
$tdatahomicidios_sv_2016[".googleLikeFields"][] = "__dpto1";
$tdatahomicidios_sv_2016[".googleLikeFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016[".googleLikeFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016[".googleLikeFields"][] = "__ocupacion_1";
$tdatahomicidios_sv_2016[".googleLikeFields"][] = "__municipio";
$tdatahomicidios_sv_2016[".googleLikeFields"][] = "__movil";
$tdatahomicidios_sv_2016[".googleLikeFields"][] = "__circunstan";
$tdatahomicidios_sv_2016[".googleLikeFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016[".googleLikeFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016[".googleLikeFields"][] = "__observacio";
$tdatahomicidios_sv_2016[".googleLikeFields"][] = "COUNT(__municipio)";


$tdatahomicidios_sv_2016[".advSearchFields"] = array();
$tdatahomicidios_sv_2016[".advSearchFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016[".advSearchFields"][] = "__municipio_";
$tdatahomicidios_sv_2016[".advSearchFields"][] = "__dpto1";
$tdatahomicidios_sv_2016[".advSearchFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016[".advSearchFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016[".advSearchFields"][] = "__ocupacion_1";
$tdatahomicidios_sv_2016[".advSearchFields"][] = "__municipio";
$tdatahomicidios_sv_2016[".advSearchFields"][] = "__movil";
$tdatahomicidios_sv_2016[".advSearchFields"][] = "__circunstan";
$tdatahomicidios_sv_2016[".advSearchFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016[".advSearchFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016[".advSearchFields"][] = "__observacio";
$tdatahomicidios_sv_2016[".advSearchFields"][] = "COUNT(__municipio)";

$tdatahomicidios_sv_2016[".tableType"] = "list";

$tdatahomicidios_sv_2016[".printerPageOrientation"] = 0;
$tdatahomicidios_sv_2016[".nPrinterPageScale"] = 100;

$tdatahomicidios_sv_2016[".nPrinterSplitRecords"] = 40;

$tdatahomicidios_sv_2016[".nPrinterPDFSplitRecords"] = 40;



$tdatahomicidios_sv_2016[".geocodingEnabled"] = false;





$tdatahomicidios_sv_2016[".listGridLayout"] = 3;

$tdatahomicidios_sv_2016[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatahomicidios_sv_2016[".pageSize"] = 10;

$tdatahomicidios_sv_2016[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahomicidios_sv_2016[".strOrderBy"] = $tstrOrderBy;

$tdatahomicidios_sv_2016[".orderindexes"] = array();

$tdatahomicidios_sv_2016[".sqlHead"] = "SELECT `__ocupacion_`,  `__municipio_`,  `__dpto1`,  `__tipo_arma`,  `__cdpto_cmun`,  `__ocupacion_` AS `__ocupacion_1`,  `__municipio`,  `__movil`,  `__circunstan`,  `__causa_prel`,  `__causa_pr_1`,  `__observacio`,  COUNT(`__municipio`) AS `COUNT(__municipio)`";
$tdatahomicidios_sv_2016[".sqlFrom"] = "FROM homicidios_sv_2016";
$tdatahomicidios_sv_2016[".sqlWhereExpr"] = "(`__ocupacion_` <> 'PANDILLERO(A)') AND (`__ocupacion_` ='PNC' OR `__ocupacion_` ='MILITAR')";
$tdatahomicidios_sv_2016[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahomicidios_sv_2016[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahomicidios_sv_2016[".arrGroupsPerPage"] = $arrGPP;

$tdatahomicidios_sv_2016[".highlightSearchResults"] = true;

$tableKeyshomicidios_sv_2016 = array();
$tdatahomicidios_sv_2016[".Keys"] = $tableKeyshomicidios_sv_2016;

$tdatahomicidios_sv_2016[".listFields"] = array();
$tdatahomicidios_sv_2016[".listFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016[".listFields"][] = "__municipio_";
$tdatahomicidios_sv_2016[".listFields"][] = "__dpto1";
$tdatahomicidios_sv_2016[".listFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016[".listFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016[".listFields"][] = "__ocupacion_1";
$tdatahomicidios_sv_2016[".listFields"][] = "__municipio";
$tdatahomicidios_sv_2016[".listFields"][] = "__movil";
$tdatahomicidios_sv_2016[".listFields"][] = "__circunstan";
$tdatahomicidios_sv_2016[".listFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016[".listFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016[".listFields"][] = "__observacio";
$tdatahomicidios_sv_2016[".listFields"][] = "COUNT(__municipio)";

$tdatahomicidios_sv_2016[".hideMobileList"] = array();


$tdatahomicidios_sv_2016[".viewFields"] = array();
$tdatahomicidios_sv_2016[".viewFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016[".viewFields"][] = "__municipio_";
$tdatahomicidios_sv_2016[".viewFields"][] = "__dpto1";
$tdatahomicidios_sv_2016[".viewFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016[".viewFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016[".viewFields"][] = "__ocupacion_1";
$tdatahomicidios_sv_2016[".viewFields"][] = "__municipio";
$tdatahomicidios_sv_2016[".viewFields"][] = "__movil";
$tdatahomicidios_sv_2016[".viewFields"][] = "__circunstan";
$tdatahomicidios_sv_2016[".viewFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016[".viewFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016[".viewFields"][] = "__observacio";
$tdatahomicidios_sv_2016[".viewFields"][] = "COUNT(__municipio)";

$tdatahomicidios_sv_2016[".addFields"] = array();
$tdatahomicidios_sv_2016[".addFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016[".addFields"][] = "__municipio_";
$tdatahomicidios_sv_2016[".addFields"][] = "__dpto1";
$tdatahomicidios_sv_2016[".addFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016[".addFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016[".addFields"][] = "__municipio";
$tdatahomicidios_sv_2016[".addFields"][] = "__movil";
$tdatahomicidios_sv_2016[".addFields"][] = "__circunstan";
$tdatahomicidios_sv_2016[".addFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016[".addFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016[".addFields"][] = "__observacio";

$tdatahomicidios_sv_2016[".masterListFields"] = array();
$tdatahomicidios_sv_2016[".masterListFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016[".masterListFields"][] = "__municipio_";
$tdatahomicidios_sv_2016[".masterListFields"][] = "__dpto1";
$tdatahomicidios_sv_2016[".masterListFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016[".masterListFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016[".masterListFields"][] = "__ocupacion_1";
$tdatahomicidios_sv_2016[".masterListFields"][] = "__municipio";
$tdatahomicidios_sv_2016[".masterListFields"][] = "__movil";
$tdatahomicidios_sv_2016[".masterListFields"][] = "__circunstan";
$tdatahomicidios_sv_2016[".masterListFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016[".masterListFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016[".masterListFields"][] = "__observacio";
$tdatahomicidios_sv_2016[".masterListFields"][] = "COUNT(__municipio)";

$tdatahomicidios_sv_2016[".inlineAddFields"] = array();
$tdatahomicidios_sv_2016[".inlineAddFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016[".inlineAddFields"][] = "__municipio_";
$tdatahomicidios_sv_2016[".inlineAddFields"][] = "__dpto1";
$tdatahomicidios_sv_2016[".inlineAddFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016[".inlineAddFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016[".inlineAddFields"][] = "__municipio";
$tdatahomicidios_sv_2016[".inlineAddFields"][] = "__movil";
$tdatahomicidios_sv_2016[".inlineAddFields"][] = "__circunstan";
$tdatahomicidios_sv_2016[".inlineAddFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016[".inlineAddFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016[".inlineAddFields"][] = "__observacio";

$tdatahomicidios_sv_2016[".editFields"] = array();
$tdatahomicidios_sv_2016[".editFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016[".editFields"][] = "__municipio_";
$tdatahomicidios_sv_2016[".editFields"][] = "__dpto1";
$tdatahomicidios_sv_2016[".editFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016[".editFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016[".editFields"][] = "__municipio";
$tdatahomicidios_sv_2016[".editFields"][] = "__movil";
$tdatahomicidios_sv_2016[".editFields"][] = "__circunstan";
$tdatahomicidios_sv_2016[".editFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016[".editFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016[".editFields"][] = "__observacio";

$tdatahomicidios_sv_2016[".inlineEditFields"] = array();
$tdatahomicidios_sv_2016[".inlineEditFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016[".inlineEditFields"][] = "__municipio_";
$tdatahomicidios_sv_2016[".inlineEditFields"][] = "__dpto1";
$tdatahomicidios_sv_2016[".inlineEditFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016[".inlineEditFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016[".inlineEditFields"][] = "__municipio";
$tdatahomicidios_sv_2016[".inlineEditFields"][] = "__movil";
$tdatahomicidios_sv_2016[".inlineEditFields"][] = "__circunstan";
$tdatahomicidios_sv_2016[".inlineEditFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016[".inlineEditFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016[".inlineEditFields"][] = "__observacio";

$tdatahomicidios_sv_2016[".updateSelectedFields"] = array();
$tdatahomicidios_sv_2016[".updateSelectedFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016[".updateSelectedFields"][] = "__municipio_";
$tdatahomicidios_sv_2016[".updateSelectedFields"][] = "__dpto1";
$tdatahomicidios_sv_2016[".updateSelectedFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016[".updateSelectedFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016[".updateSelectedFields"][] = "__municipio";
$tdatahomicidios_sv_2016[".updateSelectedFields"][] = "__movil";
$tdatahomicidios_sv_2016[".updateSelectedFields"][] = "__circunstan";
$tdatahomicidios_sv_2016[".updateSelectedFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016[".updateSelectedFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016[".updateSelectedFields"][] = "__observacio";


$tdatahomicidios_sv_2016[".exportFields"] = array();
$tdatahomicidios_sv_2016[".exportFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016[".exportFields"][] = "__municipio_";
$tdatahomicidios_sv_2016[".exportFields"][] = "__dpto1";
$tdatahomicidios_sv_2016[".exportFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016[".exportFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016[".exportFields"][] = "__ocupacion_1";
$tdatahomicidios_sv_2016[".exportFields"][] = "__municipio";
$tdatahomicidios_sv_2016[".exportFields"][] = "__movil";
$tdatahomicidios_sv_2016[".exportFields"][] = "__circunstan";
$tdatahomicidios_sv_2016[".exportFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016[".exportFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016[".exportFields"][] = "__observacio";
$tdatahomicidios_sv_2016[".exportFields"][] = "COUNT(__municipio)";

$tdatahomicidios_sv_2016[".importFields"] = array();
$tdatahomicidios_sv_2016[".importFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016[".importFields"][] = "__municipio_";
$tdatahomicidios_sv_2016[".importFields"][] = "__dpto1";
$tdatahomicidios_sv_2016[".importFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016[".importFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016[".importFields"][] = "__ocupacion_1";
$tdatahomicidios_sv_2016[".importFields"][] = "__municipio";
$tdatahomicidios_sv_2016[".importFields"][] = "__movil";
$tdatahomicidios_sv_2016[".importFields"][] = "__circunstan";
$tdatahomicidios_sv_2016[".importFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016[".importFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016[".importFields"][] = "__observacio";
$tdatahomicidios_sv_2016[".importFields"][] = "COUNT(__municipio)";

$tdatahomicidios_sv_2016[".printFields"] = array();
$tdatahomicidios_sv_2016[".printFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016[".printFields"][] = "__municipio_";
$tdatahomicidios_sv_2016[".printFields"][] = "__dpto1";
$tdatahomicidios_sv_2016[".printFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016[".printFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016[".printFields"][] = "__ocupacion_1";
$tdatahomicidios_sv_2016[".printFields"][] = "__municipio";
$tdatahomicidios_sv_2016[".printFields"][] = "__movil";
$tdatahomicidios_sv_2016[".printFields"][] = "__circunstan";
$tdatahomicidios_sv_2016[".printFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016[".printFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016[".printFields"][] = "__observacio";
$tdatahomicidios_sv_2016[".printFields"][] = "COUNT(__municipio)";

//	__ocupacion_
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "__ocupacion_";
	$fdata["GoodName"] = "__ocupacion_";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016","__ocupacion_");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "__ocupacion_";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__ocupacion_`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016["__ocupacion_"] = $fdata;
//	__municipio_
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "__municipio_";
	$fdata["GoodName"] = "__municipio_";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016","__municipio_");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "__municipio_";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__municipio_`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016["__municipio_"] = $fdata;
//	__dpto1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "__dpto1";
	$fdata["GoodName"] = "__dpto1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016","__dpto1");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "__dpto1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__dpto1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016["__dpto1"] = $fdata;
//	__tipo_arma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "__tipo_arma";
	$fdata["GoodName"] = "__tipo_arma";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016","__tipo_arma");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "__tipo_arma";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__tipo_arma`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016["__tipo_arma"] = $fdata;
//	__cdpto_cmun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "__cdpto_cmun";
	$fdata["GoodName"] = "__cdpto_cmun";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016","__cdpto_cmun");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "__cdpto_cmun";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__cdpto_cmun`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016["__cdpto_cmun"] = $fdata;
//	__ocupacion_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "__ocupacion_1";
	$fdata["GoodName"] = "__ocupacion_1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016","__ocupacion_1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__ocupacion_";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__ocupacion_`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016["__ocupacion_1"] = $fdata;
//	__municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "__municipio";
	$fdata["GoodName"] = "__municipio";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016","__municipio");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "__municipio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__municipio`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016["__municipio"] = $fdata;
//	__movil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "__movil";
	$fdata["GoodName"] = "__movil";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016","__movil");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "__movil";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__movil`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016["__movil"] = $fdata;
//	__circunstan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "__circunstan";
	$fdata["GoodName"] = "__circunstan";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016","__circunstan");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "__circunstan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__circunstan`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016["__circunstan"] = $fdata;
//	__causa_prel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "__causa_prel";
	$fdata["GoodName"] = "__causa_prel";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016","__causa_prel");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "__causa_prel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__causa_prel`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016["__causa_prel"] = $fdata;
//	__causa_pr_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "__causa_pr_1";
	$fdata["GoodName"] = "__causa_pr_1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016","__causa_pr_1");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "__causa_pr_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__causa_pr_1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016["__causa_pr_1"] = $fdata;
//	__observacio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "__observacio";
	$fdata["GoodName"] = "__observacio";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016","__observacio");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "__observacio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__observacio`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016["__observacio"] = $fdata;
//	COUNT(__municipio)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "COUNT(__municipio)";
	$fdata["GoodName"] = "COUNT___municipio_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016","COUNT___municipio_");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(__municipio)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(`__municipio`)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016["COUNT(__municipio)"] = $fdata;


$tables_data["homicidios_sv_2016"]=&$tdatahomicidios_sv_2016;
$field_labels["homicidios_sv_2016"] = &$fieldLabelshomicidios_sv_2016;
$fieldToolTips["homicidios_sv_2016"] = &$fieldToolTipshomicidios_sv_2016;
$placeHolders["homicidios_sv_2016"] = &$placeHoldershomicidios_sv_2016;
$page_titles["homicidios_sv_2016"] = &$pageTitleshomicidios_sv_2016;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["homicidios_sv_2016"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["homicidios_sv_2016"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_homicidios_sv_2016()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`__ocupacion_`,  `__municipio_`,  `__dpto1`,  `__tipo_arma`,  `__cdpto_cmun`,  `__ocupacion_` AS `__ocupacion_1`,  `__municipio`,  `__movil`,  `__circunstan`,  `__causa_prel`,  `__causa_pr_1`,  `__observacio`,  COUNT(`__municipio`) AS `COUNT(__municipio)`";
$proto0["m_strFrom"] = "FROM homicidios_sv_2016";
$proto0["m_strWhere"] = "(`__ocupacion_` <> 'PANDILLERO(A)') AND (`__ocupacion_` ='PNC' OR `__ocupacion_` ='MILITAR')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(`__ocupacion_` <> 'PANDILLERO(A)') AND (`__ocupacion_` ='PNC' OR `__ocupacion_` ='MILITAR')";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(`__ocupacion_` <> 'PANDILLERO(A)') AND (`__ocupacion_` ='PNC' OR `__ocupacion_` ='MILITAR')"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "`__ocupacion_` <> 'PANDILLERO(A)'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "__ocupacion_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "<> 'PANDILLERO(A)'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "`__ocupacion_` ='PNC' OR `__ocupacion_` ='MILITAR'";
$proto6["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`__ocupacion_` ='PNC' OR `__ocupacion_` ='MILITAR'"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
						$proto8=array();
$proto8["m_sql"] = "`__ocupacion_` ='PNC'";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "__ocupacion_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "='PNC'";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto6["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "`__ocupacion_` ='MILITAR'";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "__ocupacion_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "='MILITAR'";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto6["m_contained"][]=$obj;
$proto6["m_strCase"] = "";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "__ocupacion_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto14["m_sql"] = "`__ocupacion_`";
$proto14["m_srcTableName"] = "homicidios_sv_2016";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "__municipio_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto16["m_sql"] = "`__municipio_`";
$proto16["m_srcTableName"] = "homicidios_sv_2016";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "__dpto1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto18["m_sql"] = "`__dpto1`";
$proto18["m_srcTableName"] = "homicidios_sv_2016";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "__tipo_arma",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto20["m_sql"] = "`__tipo_arma`";
$proto20["m_srcTableName"] = "homicidios_sv_2016";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "__cdpto_cmun",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto22["m_sql"] = "`__cdpto_cmun`";
$proto22["m_srcTableName"] = "homicidios_sv_2016";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "__ocupacion_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto24["m_sql"] = "`__ocupacion_`";
$proto24["m_srcTableName"] = "homicidios_sv_2016";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "__ocupacion_1";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "__municipio",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto26["m_sql"] = "`__municipio`";
$proto26["m_srcTableName"] = "homicidios_sv_2016";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "__movil",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto28["m_sql"] = "`__movil`";
$proto28["m_srcTableName"] = "homicidios_sv_2016";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "__circunstan",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto30["m_sql"] = "`__circunstan`";
$proto30["m_srcTableName"] = "homicidios_sv_2016";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "__causa_prel",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto32["m_sql"] = "`__causa_prel`";
$proto32["m_srcTableName"] = "homicidios_sv_2016";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "__causa_pr_1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto34["m_sql"] = "`__causa_pr_1`";
$proto34["m_srcTableName"] = "homicidios_sv_2016";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "__observacio",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto36["m_sql"] = "`__observacio`";
$proto36["m_srcTableName"] = "homicidios_sv_2016";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$proto39=array();
$proto39["m_functiontype"] = "SQLF_COUNT";
$proto39["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "__municipio",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto39["m_arguments"][]=$obj;
$proto39["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto39);

$proto38["m_sql"] = "COUNT(`__municipio`)";
$proto38["m_srcTableName"] = "homicidios_sv_2016";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "COUNT(__municipio)";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto41=array();
$proto41["m_link"] = "SQLL_MAIN";
			$proto42=array();
$proto42["m_strName"] = "homicidios_sv_2016";
$proto42["m_srcTableName"] = "homicidios_sv_2016";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "situacion";
$proto42["m_columns"][] = "hoja";
$proto42["m_columns"][] = "__homicidios";
$proto42["m_columns"][] = "__edad";
$proto42["m_columns"][] = "__relacion_e";
$proto42["m_columns"][] = "__sexo";
$proto42["m_columns"][] = "__relacionad";
$proto42["m_columns"][] = "__causa_prel";
$proto42["m_columns"][] = "__circunstan";
$proto42["m_columns"][] = "__movil";
$proto42["m_columns"][] = "__tipo_viole";
$proto42["m_columns"][] = "__relac_vict";
$proto42["m_columns"][] = "__victima_pa";
$proto42["m_columns"][] = "__segun";
$proto42["m_columns"][] = "__pandilla";
$proto42["m_columns"][] = "__ocupacion_";
$proto42["m_columns"][] = "__nacionalid";
$proto42["m_columns"][] = "__depto";
$proto42["m_columns"][] = "__municipio";
$proto42["m_columns"][] = "__canton";
$proto42["m_columns"][] = "__caserio";
$proto42["m_columns"][] = "__barrio";
$proto42["m_columns"][] = "__comunidad";
$proto42["m_columns"][] = "__reparto";
$proto42["m_columns"][] = "__colonia";
$proto42["m_columns"][] = "__no";
$proto42["m_columns"][] = "__calle";
$proto42["m_columns"][] = "__avenida";
$proto42["m_columns"][] = "__alameda";
$proto42["m_columns"][] = "__boulevard";
$proto42["m_columns"][] = "__pasaje";
$proto42["m_columns"][] = "__sector_spd";
$proto42["m_columns"][] = "__tipo_lugar";
$proto42["m_columns"][] = "__area";
$proto42["m_columns"][] = "__x";
$proto42["m_columns"][] = "__y";
$proto42["m_columns"][] = "__fecha_hech";
$proto42["m_columns"][] = "__dia";
$proto42["m_columns"][] = "__mes";
$proto42["m_columns"][] = "__hora_hecho";
$proto42["m_columns"][] = "__periodo";
$proto42["m_columns"][] = "__tipo_arma";
$proto42["m_columns"][] = "__especifica";
$proto42["m_columns"][] = "__calibre";
$proto42["m_columns"][] = "__tipo_delit";
$proto42["m_columns"][] = "__muertos";
$proto42["m_columns"][] = "__fecha_leva";
$proto42["m_columns"][] = "__hora_de_le";
$proto42["m_columns"][] = "__observacio";
$proto42["m_columns"][] = "__f50";
$proto42["m_columns"][] = "__numforma";
$proto42["m_columns"][] = "__edad1";
$proto42["m_columns"][] = "__sexo1";
$proto42["m_columns"][] = "__departamen";
$proto42["m_columns"][] = "__municipio_";
$proto42["m_columns"][] = "__canton1";
$proto42["m_columns"][] = "__caserio1";
$proto42["m_columns"][] = "__colonia1";
$proto42["m_columns"][] = "__fechahecho";
$proto42["m_columns"][] = "__hora";
$proto42["m_columns"][] = "__minutos";
$proto42["m_columns"][] = "__tipoarma";
$proto42["m_columns"][] = "__especifiqu";
$proto42["m_columns"][] = "__calificaci";
$proto42["m_columns"][] = "__fecha_de_l";
$proto42["m_columns"][] = "__departam_1";
$proto42["m_columns"][] = "__municipi_1";
$proto42["m_columns"][] = "__conciliaci";
$proto42["m_columns"][] = "__levantamie";
$proto42["m_columns"][] = "__profesión";
$proto42["m_columns"][] = "__tipo_halla";
$proto42["m_columns"][] = "__victimario";
$proto42["m_columns"][] = "__causa_pr_1";
$proto42["m_columns"][] = "__dpto";
$proto42["m_columns"][] = "__munic";
$proto42["m_columns"][] = "__cdpto_cmun";
$proto42["m_columns"][] = "__cab_dpto";
$proto42["m_columns"][] = "__cdpto";
$proto42["m_columns"][] = "__fid";
$proto42["m_columns"][] = "__area1";
$proto42["m_columns"][] = "__munic25k_";
$proto42["m_columns"][] = "__munic25k_i";
$proto42["m_columns"][] = "__poly_";
$proto42["m_columns"][] = "__subclass";
$proto42["m_columns"][] = "__subclass_";
$proto42["m_columns"][] = "__rings_ok";
$proto42["m_columns"][] = "__rings_nok";
$proto42["m_columns"][] = "__dpto1";
$proto42["m_columns"][] = "__munic1";
$proto42["m_columns"][] = "__cdpto_cmun1";
$proto42["m_columns"][] = "__cab_dpto1";
$proto42["m_columns"][] = "__cdpto1";
$proto42["m_columns"][] = "__acres";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "homicidios_sv_2016";
$proto41["m_alias"] = "";
$proto41["m_srcTableName"] = "homicidios_sv_2016";
$proto43=array();
$proto43["m_sql"] = "";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto45=array();
						$obj = new SQLField(array(
	"m_strName" => "__ocupacion_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto45["m_column"]=$obj;
$obj = new SQLGroupByItem($proto45);

$proto0["m_groupby"][]=$obj;
												$proto47=array();
						$obj = new SQLField(array(
	"m_strName" => "__municipio_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto47["m_column"]=$obj;
$obj = new SQLGroupByItem($proto47);

$proto0["m_groupby"][]=$obj;
												$proto49=array();
						$obj = new SQLField(array(
	"m_strName" => "__dpto1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto49["m_column"]=$obj;
$obj = new SQLGroupByItem($proto49);

$proto0["m_groupby"][]=$obj;
												$proto51=array();
						$obj = new SQLField(array(
	"m_strName" => "__tipo_arma",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto51["m_column"]=$obj;
$obj = new SQLGroupByItem($proto51);

$proto0["m_groupby"][]=$obj;
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "__cdpto_cmun",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto53["m_column"]=$obj;
$obj = new SQLGroupByItem($proto53);

$proto0["m_groupby"][]=$obj;
												$proto55=array();
						$obj = new SQLField(array(
	"m_strName" => "__municipio",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto55["m_column"]=$obj;
$obj = new SQLGroupByItem($proto55);

$proto0["m_groupby"][]=$obj;
												$proto57=array();
						$obj = new SQLField(array(
	"m_strName" => "__movil",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto57["m_column"]=$obj;
$obj = new SQLGroupByItem($proto57);

$proto0["m_groupby"][]=$obj;
												$proto59=array();
						$obj = new SQLField(array(
	"m_strName" => "__circunstan",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto59["m_column"]=$obj;
$obj = new SQLGroupByItem($proto59);

$proto0["m_groupby"][]=$obj;
												$proto61=array();
						$obj = new SQLField(array(
	"m_strName" => "__causa_prel",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto61["m_column"]=$obj;
$obj = new SQLGroupByItem($proto61);

$proto0["m_groupby"][]=$obj;
												$proto63=array();
						$obj = new SQLField(array(
	"m_strName" => "__causa_pr_1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto63["m_column"]=$obj;
$obj = new SQLGroupByItem($proto63);

$proto0["m_groupby"][]=$obj;
												$proto65=array();
						$obj = new SQLField(array(
	"m_strName" => "__observacio",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016"
));

$proto65["m_column"]=$obj;
$obj = new SQLGroupByItem($proto65);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="homicidios_sv_2016";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_homicidios_sv_2016 = createSqlQuery_homicidios_sv_2016();


	
		;

													

$tdatahomicidios_sv_2016[".sqlquery"] = $queryData_homicidios_sv_2016;

$tableEvents["homicidios_sv_2016"] = new eventsBase;
$tdatahomicidios_sv_2016[".hasEvents"] = false;

?>