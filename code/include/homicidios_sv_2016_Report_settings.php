<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahomicidios_sv_2016_Report = array();
	$tdatahomicidios_sv_2016_Report[".truncateText"] = true;
	$tdatahomicidios_sv_2016_Report[".NumberOfChars"] = 80;
	$tdatahomicidios_sv_2016_Report[".ShortName"] = "homicidios_sv_2016_Report";
	$tdatahomicidios_sv_2016_Report[".OwnerID"] = "";
	$tdatahomicidios_sv_2016_Report[".OriginalTable"] = "homicidios_sv_2016";

//	field labels
$fieldLabelshomicidios_sv_2016_Report = array();
$fieldToolTipshomicidios_sv_2016_Report = array();
$pageTitleshomicidios_sv_2016_Report = array();
$placeHoldershomicidios_sv_2016_Report = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshomicidios_sv_2016_Report["Spanish"] = array();
	$fieldToolTipshomicidios_sv_2016_Report["Spanish"] = array();
	$placeHoldershomicidios_sv_2016_Report["Spanish"] = array();
	$pageTitleshomicidios_sv_2016_Report["Spanish"] = array();
	$fieldLabelshomicidios_sv_2016_Report["Spanish"]["__causa_prel"] = "Causa Prel";
	$fieldToolTipshomicidios_sv_2016_Report["Spanish"]["__causa_prel"] = "";
	$placeHoldershomicidios_sv_2016_Report["Spanish"]["__causa_prel"] = "";
	$fieldLabelshomicidios_sv_2016_Report["Spanish"]["__circunstan"] = "Circunstan";
	$fieldToolTipshomicidios_sv_2016_Report["Spanish"]["__circunstan"] = "";
	$placeHoldershomicidios_sv_2016_Report["Spanish"]["__circunstan"] = "";
	$fieldLabelshomicidios_sv_2016_Report["Spanish"]["__movil"] = "Movil";
	$fieldToolTipshomicidios_sv_2016_Report["Spanish"]["__movil"] = "";
	$placeHoldershomicidios_sv_2016_Report["Spanish"]["__movil"] = "";
	$fieldLabelshomicidios_sv_2016_Report["Spanish"]["__ocupacion_"] = "Ocupacion";
	$fieldToolTipshomicidios_sv_2016_Report["Spanish"]["__ocupacion_"] = "";
	$placeHoldershomicidios_sv_2016_Report["Spanish"]["__ocupacion_"] = "";
	$fieldLabelshomicidios_sv_2016_Report["Spanish"]["__municipio"] = "Municipio";
	$fieldToolTipshomicidios_sv_2016_Report["Spanish"]["__municipio"] = "";
	$placeHoldershomicidios_sv_2016_Report["Spanish"]["__municipio"] = "";
	$fieldLabelshomicidios_sv_2016_Report["Spanish"]["__tipo_arma"] = "Tipo Arma";
	$fieldToolTipshomicidios_sv_2016_Report["Spanish"]["__tipo_arma"] = "";
	$placeHoldershomicidios_sv_2016_Report["Spanish"]["__tipo_arma"] = "";
	$fieldLabelshomicidios_sv_2016_Report["Spanish"]["__observacio"] = "Observacio";
	$fieldToolTipshomicidios_sv_2016_Report["Spanish"]["__observacio"] = "";
	$placeHoldershomicidios_sv_2016_Report["Spanish"]["__observacio"] = "";
	$fieldLabelshomicidios_sv_2016_Report["Spanish"]["__causa_pr_1"] = "Causa Pr 1";
	$fieldToolTipshomicidios_sv_2016_Report["Spanish"]["__causa_pr_1"] = "";
	$placeHoldershomicidios_sv_2016_Report["Spanish"]["__causa_pr_1"] = "";
	$fieldLabelshomicidios_sv_2016_Report["Spanish"]["__cdpto_cmun"] = "Cdpto Cmun";
	$fieldToolTipshomicidios_sv_2016_Report["Spanish"]["__cdpto_cmun"] = "";
	$placeHoldershomicidios_sv_2016_Report["Spanish"]["__cdpto_cmun"] = "";
	$fieldLabelshomicidios_sv_2016_Report["Spanish"]["__ocupacion_1"] = "Ocupacion 1";
	$fieldToolTipshomicidios_sv_2016_Report["Spanish"]["__ocupacion_1"] = "";
	$placeHoldershomicidios_sv_2016_Report["Spanish"]["__ocupacion_1"] = "";
	$fieldLabelshomicidios_sv_2016_Report["Spanish"]["__munic1"] = "Munic1";
	$fieldToolTipshomicidios_sv_2016_Report["Spanish"]["__munic1"] = "";
	$placeHoldershomicidios_sv_2016_Report["Spanish"]["__munic1"] = "";
	if (count($fieldToolTipshomicidios_sv_2016_Report["Spanish"]))
		$tdatahomicidios_sv_2016_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshomicidios_sv_2016_Report["English"] = array();
	$fieldToolTipshomicidios_sv_2016_Report["English"] = array();
	$placeHoldershomicidios_sv_2016_Report["English"] = array();
	$pageTitleshomicidios_sv_2016_Report["English"] = array();
	$fieldLabelshomicidios_sv_2016_Report["English"]["__causa_prel"] = "Causa Prel";
	$fieldToolTipshomicidios_sv_2016_Report["English"]["__causa_prel"] = "";
	$placeHoldershomicidios_sv_2016_Report["English"]["__causa_prel"] = "";
	$fieldLabelshomicidios_sv_2016_Report["English"]["__circunstan"] = "Circunstan";
	$fieldToolTipshomicidios_sv_2016_Report["English"]["__circunstan"] = "";
	$placeHoldershomicidios_sv_2016_Report["English"]["__circunstan"] = "";
	$fieldLabelshomicidios_sv_2016_Report["English"]["__movil"] = "Movil";
	$fieldToolTipshomicidios_sv_2016_Report["English"]["__movil"] = "";
	$placeHoldershomicidios_sv_2016_Report["English"]["__movil"] = "";
	$fieldLabelshomicidios_sv_2016_Report["English"]["__ocupacion_"] = "Ocupacion";
	$fieldToolTipshomicidios_sv_2016_Report["English"]["__ocupacion_"] = "";
	$placeHoldershomicidios_sv_2016_Report["English"]["__ocupacion_"] = "";
	$fieldLabelshomicidios_sv_2016_Report["English"]["__municipio"] = "Municipio";
	$fieldToolTipshomicidios_sv_2016_Report["English"]["__municipio"] = "";
	$placeHoldershomicidios_sv_2016_Report["English"]["__municipio"] = "";
	$fieldLabelshomicidios_sv_2016_Report["English"]["__tipo_arma"] = "Tipo Arma";
	$fieldToolTipshomicidios_sv_2016_Report["English"]["__tipo_arma"] = "";
	$placeHoldershomicidios_sv_2016_Report["English"]["__tipo_arma"] = "";
	$fieldLabelshomicidios_sv_2016_Report["English"]["__observacio"] = "Observacio";
	$fieldToolTipshomicidios_sv_2016_Report["English"]["__observacio"] = "";
	$placeHoldershomicidios_sv_2016_Report["English"]["__observacio"] = "";
	$fieldLabelshomicidios_sv_2016_Report["English"]["__causa_pr_1"] = "Causa Pr 1";
	$fieldToolTipshomicidios_sv_2016_Report["English"]["__causa_pr_1"] = "";
	$placeHoldershomicidios_sv_2016_Report["English"]["__causa_pr_1"] = "";
	$fieldLabelshomicidios_sv_2016_Report["English"]["__cdpto_cmun"] = "Cdpto Cmun";
	$fieldToolTipshomicidios_sv_2016_Report["English"]["__cdpto_cmun"] = "";
	$placeHoldershomicidios_sv_2016_Report["English"]["__cdpto_cmun"] = "";
	$fieldLabelshomicidios_sv_2016_Report["English"]["__ocupacion_1"] = "Ocupacion 1";
	$fieldToolTipshomicidios_sv_2016_Report["English"]["__ocupacion_1"] = "";
	$placeHoldershomicidios_sv_2016_Report["English"]["__ocupacion_1"] = "";
	$fieldLabelshomicidios_sv_2016_Report["English"]["__munic1"] = "Munic1";
	$fieldToolTipshomicidios_sv_2016_Report["English"]["__munic1"] = "";
	$placeHoldershomicidios_sv_2016_Report["English"]["__munic1"] = "";
	if (count($fieldToolTipshomicidios_sv_2016_Report["English"]))
		$tdatahomicidios_sv_2016_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshomicidios_sv_2016_Report[""] = array();
	$fieldToolTipshomicidios_sv_2016_Report[""] = array();
	$placeHoldershomicidios_sv_2016_Report[""] = array();
	$pageTitleshomicidios_sv_2016_Report[""] = array();
	if (count($fieldToolTipshomicidios_sv_2016_Report[""]))
		$tdatahomicidios_sv_2016_Report[".isUseToolTips"] = true;
}





$tdatahomicidios_sv_2016_Report[".shortTableName"] = "homicidios_sv_2016_Report";
$tdatahomicidios_sv_2016_Report[".nSecOptions"] = 0;
$tdatahomicidios_sv_2016_Report[".recsPerRowPrint"] = 1;
$tdatahomicidios_sv_2016_Report[".mainTableOwnerID"] = "";
$tdatahomicidios_sv_2016_Report[".moveNext"] = 1;
$tdatahomicidios_sv_2016_Report[".entityType"] = 2;

$tdatahomicidios_sv_2016_Report[".strOriginalTableName"] = "homicidios_sv_2016";

	



$tdatahomicidios_sv_2016_Report[".showAddInPopup"] = false;

$tdatahomicidios_sv_2016_Report[".showEditInPopup"] = false;

$tdatahomicidios_sv_2016_Report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahomicidios_sv_2016_Report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahomicidios_sv_2016_Report[".fieldsForRegister"] = array();

$tdatahomicidios_sv_2016_Report[".listAjax"] = false;

	$tdatahomicidios_sv_2016_Report[".audit"] = false;

	$tdatahomicidios_sv_2016_Report[".locking"] = false;



$tdatahomicidios_sv_2016_Report[".list"] = true;



$tdatahomicidios_sv_2016_Report[".reorderRecordsByHeader"] = true;





$tdatahomicidios_sv_2016_Report[".exportTo"] = true;

$tdatahomicidios_sv_2016_Report[".printFriendly"] = true;


$tdatahomicidios_sv_2016_Report[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatahomicidios_sv_2016_Report[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatahomicidios_sv_2016_Report[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatahomicidios_sv_2016_Report[".searchSaving"] = false;
//

$tdatahomicidios_sv_2016_Report[".showSearchPanel"] = true;
		$tdatahomicidios_sv_2016_Report[".flexibleSearch"] = true;

$tdatahomicidios_sv_2016_Report[".isUseAjaxSuggest"] = true;






$tdatahomicidios_sv_2016_Report[".ajaxCodeSnippetAdded"] = false;

$tdatahomicidios_sv_2016_Report[".buttonsAdded"] = false;

$tdatahomicidios_sv_2016_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahomicidios_sv_2016_Report[".isUseTimeForSearch"] = false;





$tdatahomicidios_sv_2016_Report[".allSearchFields"] = array();
$tdatahomicidios_sv_2016_Report[".filterFields"] = array();
$tdatahomicidios_sv_2016_Report[".requiredSearchFields"] = array();

$tdatahomicidios_sv_2016_Report[".allSearchFields"][] = "__ocupacion_";
	$tdatahomicidios_sv_2016_Report[".allSearchFields"][] = "__tipo_arma";
	$tdatahomicidios_sv_2016_Report[".allSearchFields"][] = "__cdpto_cmun";
	$tdatahomicidios_sv_2016_Report[".allSearchFields"][] = "__ocupacion_1";
	$tdatahomicidios_sv_2016_Report[".allSearchFields"][] = "__municipio";
	$tdatahomicidios_sv_2016_Report[".allSearchFields"][] = "__movil";
	$tdatahomicidios_sv_2016_Report[".allSearchFields"][] = "__circunstan";
	$tdatahomicidios_sv_2016_Report[".allSearchFields"][] = "__causa_prel";
	$tdatahomicidios_sv_2016_Report[".allSearchFields"][] = "__causa_pr_1";
	$tdatahomicidios_sv_2016_Report[".allSearchFields"][] = "__observacio";
	$tdatahomicidios_sv_2016_Report[".allSearchFields"][] = "__munic1";
	

$tdatahomicidios_sv_2016_Report[".googleLikeFields"] = array();
$tdatahomicidios_sv_2016_Report[".googleLikeFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report[".googleLikeFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report[".googleLikeFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report[".googleLikeFields"][] = "__ocupacion_1";
$tdatahomicidios_sv_2016_Report[".googleLikeFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report[".googleLikeFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report[".googleLikeFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report[".googleLikeFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report[".googleLikeFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report[".googleLikeFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report[".googleLikeFields"][] = "__munic1";


$tdatahomicidios_sv_2016_Report[".advSearchFields"] = array();
$tdatahomicidios_sv_2016_Report[".advSearchFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report[".advSearchFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report[".advSearchFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report[".advSearchFields"][] = "__ocupacion_1";
$tdatahomicidios_sv_2016_Report[".advSearchFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report[".advSearchFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report[".advSearchFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report[".advSearchFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report[".advSearchFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report[".advSearchFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report[".advSearchFields"][] = "__munic1";

$tdatahomicidios_sv_2016_Report[".tableType"] = "report";

$tdatahomicidios_sv_2016_Report[".printerPageOrientation"] = 0;
$tdatahomicidios_sv_2016_Report[".nPrinterPageScale"] = 100;

$tdatahomicidios_sv_2016_Report[".nPrinterSplitRecords"] = 40;

$tdatahomicidios_sv_2016_Report[".nPrinterPDFSplitRecords"] = 40;



$tdatahomicidios_sv_2016_Report[".geocodingEnabled"] = false;

//report settings
$tdatahomicidios_sv_2016_Report[".crossTabReport"] = true;

$tdatahomicidios_sv_2016_Report[".reportGroupFields"] = true;
$tdatahomicidios_sv_2016_Report[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "__municipio";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "__causa_prel";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdatahomicidios_sv_2016_Report[".reportGroupFieldsData"] = $reportGroupFields;

$tdatahomicidios_sv_2016_Report[".reportHorizontalSummary"] = true;

$tdatahomicidios_sv_2016_Report[".isExistTotalFields"] = true;

$tdatahomicidios_sv_2016_Report[".reportVerticalSummary"] = true;



$tdatahomicidios_sv_2016_Report[".repShowDet"] = true;

$tdatahomicidios_sv_2016_Report[".reportLayout"] = 6;

//end of report settings




$tdatahomicidios_sv_2016_Report[".listGridLayout"] = 3;

$tdatahomicidios_sv_2016_Report[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahomicidios_sv_2016_Report[".strOrderBy"] = $tstrOrderBy;

$tdatahomicidios_sv_2016_Report[".orderindexes"] = array();

$tdatahomicidios_sv_2016_Report[".sqlHead"] = "SELECT `__ocupacion_`,  `__tipo_arma`,  `__cdpto_cmun`,  COUNT(`__ocupacion_`) AS `__ocupacion_1`,  `__municipio`,  `__movil`,  `__circunstan`,  `__causa_prel`,  `__causa_pr_1`,  `__observacio`,  `__munic1`";
$tdatahomicidios_sv_2016_Report[".sqlFrom"] = "FROM homicidios_sv_2016";
$tdatahomicidios_sv_2016_Report[".sqlWhereExpr"] = "(`__ocupacion_` <> 'PANDILLERO(A)') AND (`__ocupacion_` ='PNC' OR `__ocupacion_` ='MILITAR')";
$tdatahomicidios_sv_2016_Report[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahomicidios_sv_2016_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahomicidios_sv_2016_Report[".arrGroupsPerPage"] = $arrGPP;

$tdatahomicidios_sv_2016_Report[".highlightSearchResults"] = true;

$tableKeyshomicidios_sv_2016_Report = array();
$tdatahomicidios_sv_2016_Report[".Keys"] = $tableKeyshomicidios_sv_2016_Report;

$tdatahomicidios_sv_2016_Report[".listFields"] = array();
$tdatahomicidios_sv_2016_Report[".listFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report[".listFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report[".listFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report[".listFields"][] = "__ocupacion_1";
$tdatahomicidios_sv_2016_Report[".listFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report[".listFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report[".listFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report[".listFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report[".listFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report[".listFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report[".listFields"][] = "__munic1";

$tdatahomicidios_sv_2016_Report[".hideMobileList"] = array();


$tdatahomicidios_sv_2016_Report[".viewFields"] = array();
$tdatahomicidios_sv_2016_Report[".viewFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report[".viewFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report[".viewFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report[".viewFields"][] = "__ocupacion_1";
$tdatahomicidios_sv_2016_Report[".viewFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report[".viewFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report[".viewFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report[".viewFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report[".viewFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report[".viewFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report[".viewFields"][] = "__munic1";

$tdatahomicidios_sv_2016_Report[".addFields"] = array();
$tdatahomicidios_sv_2016_Report[".addFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report[".addFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report[".addFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report[".addFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report[".addFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report[".addFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report[".addFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report[".addFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report[".addFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report[".addFields"][] = "__munic1";

$tdatahomicidios_sv_2016_Report[".masterListFields"] = array();
$tdatahomicidios_sv_2016_Report[".masterListFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report[".masterListFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report[".masterListFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report[".masterListFields"][] = "__ocupacion_1";
$tdatahomicidios_sv_2016_Report[".masterListFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report[".masterListFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report[".masterListFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report[".masterListFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report[".masterListFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report[".masterListFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report[".masterListFields"][] = "__munic1";

$tdatahomicidios_sv_2016_Report[".inlineAddFields"] = array();
$tdatahomicidios_sv_2016_Report[".inlineAddFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report[".inlineAddFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report[".inlineAddFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report[".inlineAddFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report[".inlineAddFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report[".inlineAddFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report[".inlineAddFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report[".inlineAddFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report[".inlineAddFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report[".inlineAddFields"][] = "__munic1";

$tdatahomicidios_sv_2016_Report[".editFields"] = array();
$tdatahomicidios_sv_2016_Report[".editFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report[".editFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report[".editFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report[".editFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report[".editFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report[".editFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report[".editFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report[".editFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report[".editFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report[".editFields"][] = "__munic1";

$tdatahomicidios_sv_2016_Report[".inlineEditFields"] = array();
$tdatahomicidios_sv_2016_Report[".inlineEditFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report[".inlineEditFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report[".inlineEditFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report[".inlineEditFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report[".inlineEditFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report[".inlineEditFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report[".inlineEditFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report[".inlineEditFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report[".inlineEditFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report[".inlineEditFields"][] = "__munic1";

$tdatahomicidios_sv_2016_Report[".updateSelectedFields"] = array();
$tdatahomicidios_sv_2016_Report[".updateSelectedFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report[".updateSelectedFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report[".updateSelectedFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report[".updateSelectedFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report[".updateSelectedFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report[".updateSelectedFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report[".updateSelectedFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report[".updateSelectedFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report[".updateSelectedFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report[".updateSelectedFields"][] = "__munic1";


$tdatahomicidios_sv_2016_Report[".exportFields"] = array();
$tdatahomicidios_sv_2016_Report[".exportFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report[".exportFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report[".exportFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report[".exportFields"][] = "__ocupacion_1";
$tdatahomicidios_sv_2016_Report[".exportFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report[".exportFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report[".exportFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report[".exportFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report[".exportFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report[".exportFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report[".exportFields"][] = "__munic1";

$tdatahomicidios_sv_2016_Report[".importFields"] = array();
$tdatahomicidios_sv_2016_Report[".importFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report[".importFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report[".importFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report[".importFields"][] = "__ocupacion_1";
$tdatahomicidios_sv_2016_Report[".importFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report[".importFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report[".importFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report[".importFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report[".importFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report[".importFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report[".importFields"][] = "__munic1";

$tdatahomicidios_sv_2016_Report[".printFields"] = array();
$tdatahomicidios_sv_2016_Report[".printFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report[".printFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report[".printFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report[".printFields"][] = "__ocupacion_1";
$tdatahomicidios_sv_2016_Report[".printFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report[".printFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report[".printFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report[".printFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report[".printFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report[".printFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report[".printFields"][] = "__munic1";

//	__ocupacion_
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "__ocupacion_";
	$fdata["GoodName"] = "__ocupacion_";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report","__ocupacion_");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
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

		$fdata["strField"] = "__ocupacion_";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__ocupacion_`";

	
	
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




	$tdatahomicidios_sv_2016_Report["__ocupacion_"] = $fdata;
//	__tipo_arma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "__tipo_arma";
	$fdata["GoodName"] = "__tipo_arma";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report","__tipo_arma");
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

		$fdata["strField"] = "__tipo_arma";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__tipo_arma`";

	
	
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




	$tdatahomicidios_sv_2016_Report["__tipo_arma"] = $fdata;
//	__cdpto_cmun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "__cdpto_cmun";
	$fdata["GoodName"] = "__cdpto_cmun";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report","__cdpto_cmun");
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

		$fdata["strField"] = "__cdpto_cmun";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__cdpto_cmun`";

	
	
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




	$tdatahomicidios_sv_2016_Report["__cdpto_cmun"] = $fdata;
//	__ocupacion_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "__ocupacion_1";
	$fdata["GoodName"] = "__ocupacion_1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report","__ocupacion_1");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__ocupacion_";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(`__ocupacion_`)";

	
	
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




	$tdatahomicidios_sv_2016_Report["__ocupacion_1"] = $fdata;
//	__municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "__municipio";
	$fdata["GoodName"] = "__municipio";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report","__municipio");
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

		$fdata["strField"] = "__municipio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__municipio`";

	
	
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




	$tdatahomicidios_sv_2016_Report["__municipio"] = $fdata;
//	__movil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "__movil";
	$fdata["GoodName"] = "__movil";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report","__movil");
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

		$fdata["strField"] = "__movil";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__movil`";

	
	
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




	$tdatahomicidios_sv_2016_Report["__movil"] = $fdata;
//	__circunstan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "__circunstan";
	$fdata["GoodName"] = "__circunstan";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report","__circunstan");
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

		$fdata["strField"] = "__circunstan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__circunstan`";

	
	
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




	$tdatahomicidios_sv_2016_Report["__circunstan"] = $fdata;
//	__causa_prel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "__causa_prel";
	$fdata["GoodName"] = "__causa_prel";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report","__causa_prel");
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

		$fdata["strField"] = "__causa_prel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__causa_prel`";

	
	
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




	$tdatahomicidios_sv_2016_Report["__causa_prel"] = $fdata;
//	__causa_pr_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "__causa_pr_1";
	$fdata["GoodName"] = "__causa_pr_1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report","__causa_pr_1");
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

		$fdata["strField"] = "__causa_pr_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__causa_pr_1`";

	
	
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




	$tdatahomicidios_sv_2016_Report["__causa_pr_1"] = $fdata;
//	__observacio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "__observacio";
	$fdata["GoodName"] = "__observacio";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report","__observacio");
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

		$fdata["strField"] = "__observacio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__observacio`";

	
	
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




	$tdatahomicidios_sv_2016_Report["__observacio"] = $fdata;
//	__munic1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "__munic1";
	$fdata["GoodName"] = "__munic1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report","__munic1");
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

		$fdata["strField"] = "__munic1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__munic1`";

	
	
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




	$tdatahomicidios_sv_2016_Report["__munic1"] = $fdata;


$tables_data["homicidios_sv_2016 Report"]=&$tdatahomicidios_sv_2016_Report;
$field_labels["homicidios_sv_2016_Report"] = &$fieldLabelshomicidios_sv_2016_Report;
$fieldToolTips["homicidios_sv_2016_Report"] = &$fieldToolTipshomicidios_sv_2016_Report;
$placeHolders["homicidios_sv_2016_Report"] = &$placeHoldershomicidios_sv_2016_Report;
$page_titles["homicidios_sv_2016_Report"] = &$pageTitleshomicidios_sv_2016_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["homicidios_sv_2016 Report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_homicidios_sv_2016_Report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`__ocupacion_`,  `__tipo_arma`,  `__cdpto_cmun`,  COUNT(`__ocupacion_`) AS `__ocupacion_1`,  `__municipio`,  `__movil`,  `__circunstan`,  `__causa_prel`,  `__causa_pr_1`,  `__observacio`,  `__munic1`";
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
	"m_srcTableName" => "homicidios_sv_2016 Report"
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
	"m_srcTableName" => "homicidios_sv_2016 Report"
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
	"m_srcTableName" => "homicidios_sv_2016 Report"
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
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto14["m_sql"] = "`__ocupacion_`";
$proto14["m_srcTableName"] = "homicidios_sv_2016 Report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "__tipo_arma",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto16["m_sql"] = "`__tipo_arma`";
$proto16["m_srcTableName"] = "homicidios_sv_2016 Report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "__cdpto_cmun",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto18["m_sql"] = "`__cdpto_cmun`";
$proto18["m_srcTableName"] = "homicidios_sv_2016 Report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_COUNT";
$proto21["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "__ocupacion_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "COUNT(`__ocupacion_`)";
$proto20["m_srcTableName"] = "homicidios_sv_2016 Report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "__ocupacion_1";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "__municipio",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto23["m_sql"] = "`__municipio`";
$proto23["m_srcTableName"] = "homicidios_sv_2016 Report";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "__movil",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto25["m_sql"] = "`__movil`";
$proto25["m_srcTableName"] = "homicidios_sv_2016 Report";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "__circunstan",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto27["m_sql"] = "`__circunstan`";
$proto27["m_srcTableName"] = "homicidios_sv_2016 Report";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "__causa_prel",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto29["m_sql"] = "`__causa_prel`";
$proto29["m_srcTableName"] = "homicidios_sv_2016 Report";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "__causa_pr_1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto31["m_sql"] = "`__causa_pr_1`";
$proto31["m_srcTableName"] = "homicidios_sv_2016 Report";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "__observacio",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto33["m_sql"] = "`__observacio`";
$proto33["m_srcTableName"] = "homicidios_sv_2016 Report";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "__munic1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto35["m_sql"] = "`__munic1`";
$proto35["m_srcTableName"] = "homicidios_sv_2016 Report";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "homicidios_sv_2016";
$proto38["m_srcTableName"] = "homicidios_sv_2016 Report";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "situacion";
$proto38["m_columns"][] = "hoja";
$proto38["m_columns"][] = "__homicidios";
$proto38["m_columns"][] = "__edad";
$proto38["m_columns"][] = "__relacion_e";
$proto38["m_columns"][] = "__sexo";
$proto38["m_columns"][] = "__relacionad";
$proto38["m_columns"][] = "__causa_prel";
$proto38["m_columns"][] = "__circunstan";
$proto38["m_columns"][] = "__movil";
$proto38["m_columns"][] = "__tipo_viole";
$proto38["m_columns"][] = "__relac_vict";
$proto38["m_columns"][] = "__victima_pa";
$proto38["m_columns"][] = "__segun";
$proto38["m_columns"][] = "__pandilla";
$proto38["m_columns"][] = "__ocupacion_";
$proto38["m_columns"][] = "__nacionalid";
$proto38["m_columns"][] = "__depto";
$proto38["m_columns"][] = "__municipio";
$proto38["m_columns"][] = "__canton";
$proto38["m_columns"][] = "__caserio";
$proto38["m_columns"][] = "__barrio";
$proto38["m_columns"][] = "__comunidad";
$proto38["m_columns"][] = "__reparto";
$proto38["m_columns"][] = "__colonia";
$proto38["m_columns"][] = "__no";
$proto38["m_columns"][] = "__calle";
$proto38["m_columns"][] = "__avenida";
$proto38["m_columns"][] = "__alameda";
$proto38["m_columns"][] = "__boulevard";
$proto38["m_columns"][] = "__pasaje";
$proto38["m_columns"][] = "__sector_spd";
$proto38["m_columns"][] = "__tipo_lugar";
$proto38["m_columns"][] = "__area";
$proto38["m_columns"][] = "__x";
$proto38["m_columns"][] = "__y";
$proto38["m_columns"][] = "__fecha_hech";
$proto38["m_columns"][] = "__dia";
$proto38["m_columns"][] = "__mes";
$proto38["m_columns"][] = "__hora_hecho";
$proto38["m_columns"][] = "__periodo";
$proto38["m_columns"][] = "__tipo_arma";
$proto38["m_columns"][] = "__especifica";
$proto38["m_columns"][] = "__calibre";
$proto38["m_columns"][] = "__tipo_delit";
$proto38["m_columns"][] = "__muertos";
$proto38["m_columns"][] = "__fecha_leva";
$proto38["m_columns"][] = "__hora_de_le";
$proto38["m_columns"][] = "__observacio";
$proto38["m_columns"][] = "__f50";
$proto38["m_columns"][] = "__numforma";
$proto38["m_columns"][] = "__edad1";
$proto38["m_columns"][] = "__sexo1";
$proto38["m_columns"][] = "__departamen";
$proto38["m_columns"][] = "__municipio_";
$proto38["m_columns"][] = "__canton1";
$proto38["m_columns"][] = "__caserio1";
$proto38["m_columns"][] = "__colonia1";
$proto38["m_columns"][] = "__fechahecho";
$proto38["m_columns"][] = "__hora";
$proto38["m_columns"][] = "__minutos";
$proto38["m_columns"][] = "__tipoarma";
$proto38["m_columns"][] = "__especifiqu";
$proto38["m_columns"][] = "__calificaci";
$proto38["m_columns"][] = "__fecha_de_l";
$proto38["m_columns"][] = "__departam_1";
$proto38["m_columns"][] = "__municipi_1";
$proto38["m_columns"][] = "__conciliaci";
$proto38["m_columns"][] = "__levantamie";
$proto38["m_columns"][] = "__profesión";
$proto38["m_columns"][] = "__tipo_halla";
$proto38["m_columns"][] = "__victimario";
$proto38["m_columns"][] = "__causa_pr_1";
$proto38["m_columns"][] = "__dpto";
$proto38["m_columns"][] = "__munic";
$proto38["m_columns"][] = "__cdpto_cmun";
$proto38["m_columns"][] = "__cab_dpto";
$proto38["m_columns"][] = "__cdpto";
$proto38["m_columns"][] = "__fid";
$proto38["m_columns"][] = "__area1";
$proto38["m_columns"][] = "__munic25k_";
$proto38["m_columns"][] = "__munic25k_i";
$proto38["m_columns"][] = "__poly_";
$proto38["m_columns"][] = "__subclass";
$proto38["m_columns"][] = "__subclass_";
$proto38["m_columns"][] = "__rings_ok";
$proto38["m_columns"][] = "__rings_nok";
$proto38["m_columns"][] = "__dpto1";
$proto38["m_columns"][] = "__munic1";
$proto38["m_columns"][] = "__cdpto_cmun1";
$proto38["m_columns"][] = "__cab_dpto1";
$proto38["m_columns"][] = "__cdpto1";
$proto38["m_columns"][] = "__acres";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "homicidios_sv_2016";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "homicidios_sv_2016 Report";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "__ocupacion_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto41["m_column"]=$obj;
$obj = new SQLGroupByItem($proto41);

$proto0["m_groupby"][]=$obj;
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "__tipo_arma",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto43["m_column"]=$obj;
$obj = new SQLGroupByItem($proto43);

$proto0["m_groupby"][]=$obj;
												$proto45=array();
						$obj = new SQLField(array(
	"m_strName" => "__cdpto_cmun",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto45["m_column"]=$obj;
$obj = new SQLGroupByItem($proto45);

$proto0["m_groupby"][]=$obj;
												$proto47=array();
						$obj = new SQLField(array(
	"m_strName" => "__municipio",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto47["m_column"]=$obj;
$obj = new SQLGroupByItem($proto47);

$proto0["m_groupby"][]=$obj;
												$proto49=array();
						$obj = new SQLField(array(
	"m_strName" => "__movil",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto49["m_column"]=$obj;
$obj = new SQLGroupByItem($proto49);

$proto0["m_groupby"][]=$obj;
												$proto51=array();
						$obj = new SQLField(array(
	"m_strName" => "__circunstan",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto51["m_column"]=$obj;
$obj = new SQLGroupByItem($proto51);

$proto0["m_groupby"][]=$obj;
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "__causa_prel",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto53["m_column"]=$obj;
$obj = new SQLGroupByItem($proto53);

$proto0["m_groupby"][]=$obj;
												$proto55=array();
						$obj = new SQLField(array(
	"m_strName" => "__causa_pr_1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto55["m_column"]=$obj;
$obj = new SQLGroupByItem($proto55);

$proto0["m_groupby"][]=$obj;
												$proto57=array();
						$obj = new SQLField(array(
	"m_strName" => "__observacio",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto57["m_column"]=$obj;
$obj = new SQLGroupByItem($proto57);

$proto0["m_groupby"][]=$obj;
												$proto59=array();
						$obj = new SQLField(array(
	"m_strName" => "__munic1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto59["m_column"]=$obj;
$obj = new SQLGroupByItem($proto59);

$proto0["m_groupby"][]=$obj;
												$proto61=array();
						$obj = new SQLField(array(
	"m_strName" => "__municipio_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto61["m_column"]=$obj;
$obj = new SQLGroupByItem($proto61);

$proto0["m_groupby"][]=$obj;
												$proto63=array();
						$obj = new SQLField(array(
	"m_strName" => "__dpto1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report"
));

$proto63["m_column"]=$obj;
$obj = new SQLGroupByItem($proto63);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="homicidios_sv_2016 Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_homicidios_sv_2016_Report = createSqlQuery_homicidios_sv_2016_Report();


	
		;

											

$tdatahomicidios_sv_2016_Report[".sqlquery"] = $queryData_homicidios_sv_2016_Report;

$tableEvents["homicidios_sv_2016 Report"] = new eventsBase;
$tdatahomicidios_sv_2016_Report[".hasEvents"] = false;

?>