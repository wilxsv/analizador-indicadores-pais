<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino = array();
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".truncateText"] = true;
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".NumberOfChars"] = 80;
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".ShortName"] = "Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".OwnerID"] = "";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".OriginalTable"] = "dgcp";

//	field labels
$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino = array();
$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino = array();
$pageTitlesPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino = array();
$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"] = array();
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"] = array();
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"] = array();
	$pageTitlesPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"] = array();
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"]["rangoetario"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"]["rangoetario"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"]["COUNT_educacionanalisis_"] = "COUNT(educacionanalisis)";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"]["COUNT_educacionanalisis_"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"]["COUNT_educacionanalisis_"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"]["educacionanalisis"] = "Educacionanalisis";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"]["educacionanalisis"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"]["educacionanalisis"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"]["genero"] = "Genero";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"]["genero"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"]["genero"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"]["mun_resid"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"]["mun_resid"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"]["depart_resid"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"]["depart_resid"] = "";
	if (count($fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["Spanish"]))
		$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"] = array();
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"] = array();
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"] = array();
	$pageTitlesPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"] = array();
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"]["rangoetario"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"]["rangoetario"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"]["COUNT_educacionanalisis_"] = "COUNT(educacionanalisis)";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"]["COUNT_educacionanalisis_"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"]["COUNT_educacionanalisis_"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"]["educacionanalisis"] = "Educacionanalisis";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"]["educacionanalisis"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"]["educacionanalisis"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"]["genero"] = "Genero";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"]["genero"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"]["genero"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"]["mun_resid"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"]["mun_resid"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"]["depart_resid"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"]["depart_resid"] = "";
	if (count($fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["English"]))
		$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[""] = array();
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[""] = array();
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[""] = array();
	$pageTitlesPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[""] = array();
	if (count($fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[""]))
		$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".isUseToolTips"] = true;
}





$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".shortTableName"] = "Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".nSecOptions"] = 0;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".recsPerRowPrint"] = 1;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".mainTableOwnerID"] = "";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".moveNext"] = 1;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".entityType"] = 2;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".strOriginalTableName"] = "dgcp";

	



$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".showAddInPopup"] = false;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".showEditInPopup"] = false;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".fieldsForRegister"] = array();

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".listAjax"] = false;

	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".audit"] = false;

	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".locking"] = false;


$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".add"] = true;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".afterAddAction"] = 1;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".closePopupAfterAdd"] = 1;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".afterAddActionDetTable"] = "";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".list"] = true;



$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".reorderRecordsByHeader"] = true;



$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".inlineAdd"] = true;


$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".exportTo"] = true;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".printFriendly"] = true;


$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".searchSaving"] = false;
//

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".showSearchPanel"] = true;
		$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".flexibleSearch"] = true;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".isUseAjaxSuggest"] = true;






$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".ajaxCodeSnippetAdded"] = false;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".buttonsAdded"] = false;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".isUseTimeForSearch"] = false;





$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".allSearchFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".filterFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".requiredSearchFields"] = array();

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".allSearchFields"][] = "rangoetario";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".allSearchFields"][] = "educacionanalisis";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".allSearchFields"][] = "COUNT(educacionanalisis)";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".allSearchFields"][] = "genero";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".allSearchFields"][] = "mun_resid";
		$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".requiredSearchFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".allSearchFields"][] = "depart_resid";
		$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".requiredSearchFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".filterFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".filterFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".googleLikeFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".googleLikeFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".googleLikeFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".panelSearchFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".searchPanelOptions"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".panelSearchFields"][] = "mun_resid";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".panelSearchFields"][] = "depart_resid";
	
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".advSearchFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".advSearchFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".advSearchFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".tableType"] = "report";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".printerPageOrientation"] = 0;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".nPrinterPageScale"] = 100;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".nPrinterSplitRecords"] = 40;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".nPrinterPDFSplitRecords"] = 40;



$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".geocodingEnabled"] = false;

//report settings
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".crossTabReport"] = true;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".reportGroupFields"] = true;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "educacionanalisis";
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
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".reportGroupFieldsData"] = $reportGroupFields;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".reportHorizontalSummary"] = true;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".isExistTotalFields"] = true;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".reportVerticalSummary"] = true;



$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".repShowDet"] = true;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".reportLayout"] = 6;

//end of report settings




$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".listGridLayout"] = 3;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".strOrderBy"] = $tstrOrderBy;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".orderindexes"] = array();

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".sqlHead"] = "SELECT rangoetario,  educacionanalisis,  COUNT(educacionanalisis) AS `COUNT(educacionanalisis)`,  genero,  mun_resid,  depart_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".sqlFrom"] = "FROM carcel";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".sqlWhereExpr"] = "genero =\"FEMENINO\"";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".arrGroupsPerPage"] = $arrGPP;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".highlightSearchResults"] = true;

$tableKeysPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".Keys"] = $tableKeysPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".listFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".listFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".listFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".listFields"][] = "COUNT(educacionanalisis)";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".listFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".listFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".listFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".hideMobileList"] = array();


$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".viewFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".viewFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".viewFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".viewFields"][] = "COUNT(educacionanalisis)";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".viewFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".viewFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".viewFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".addFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".addFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".addFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".addFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".addFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".addFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".masterListFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".masterListFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".masterListFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".masterListFields"][] = "COUNT(educacionanalisis)";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".masterListFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".masterListFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".masterListFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".inlineAddFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".inlineAddFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".inlineAddFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".inlineAddFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".inlineAddFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".inlineAddFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".editFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".editFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".editFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".editFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".editFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".editFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".inlineEditFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".inlineEditFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".inlineEditFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".inlineEditFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".inlineEditFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".inlineEditFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".updateSelectedFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".updateSelectedFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".updateSelectedFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".updateSelectedFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".updateSelectedFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".updateSelectedFields"][] = "depart_resid";


$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".exportFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".exportFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".exportFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".exportFields"][] = "COUNT(educacionanalisis)";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".exportFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".exportFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".exportFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".importFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".importFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".importFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".importFields"][] = "COUNT(educacionanalisis)";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".importFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".importFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".importFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".printFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".printFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".printFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".printFields"][] = "COUNT(educacionanalisis)";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".printFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".printFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".printFields"][] = "depart_resid";

//	rangoetario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rangoetario";
	$fdata["GoodName"] = "rangoetario";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino","rangoetario");
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




	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["rangoetario"] = $fdata;
//	educacionanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "educacionanalisis";
	$fdata["GoodName"] = "educacionanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino","educacionanalisis");
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

		$fdata["strField"] = "educacionanalisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "educacionanalisis";

	
	
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




	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["educacionanalisis"] = $fdata;
//	COUNT(educacionanalisis)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "COUNT(educacionanalisis)";
	$fdata["GoodName"] = "COUNT_educacionanalisis_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino","COUNT_educacionanalisis_");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(educacionanalisis)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(educacionanalisis)";

	
	
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




	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["COUNT(educacionanalisis)"] = $fdata;
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino","genero");
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




	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["genero"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino","mun_resid");
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["mun_resid"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino","depart_resid");
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino["depart_resid"] = $fdata;


$tables_data["Personas privadas de libertad por rango etario, segun nivel educativo y género femenino"]=&$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino;
$field_labels["Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino"] = &$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino;
$fieldToolTips["Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino"] = &$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino;
$placeHolders["Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino"] = &$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino;
$page_titles["Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino"] = &$pageTitlesPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Personas privadas de libertad por rango etario, segun nivel educativo y género femenino"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rangoetario,  educacionanalisis,  COUNT(educacionanalisis) AS `COUNT(educacionanalisis)`,  genero,  mun_resid,  depart_resid";
$proto0["m_strFrom"] = "FROM carcel";
$proto0["m_strWhere"] = "genero =\"FEMENINO\"";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "genero =\"FEMENINO\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=\"FEMENINO\"";
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
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino"
));

$proto6["m_sql"] = "rangoetario";
$proto6["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "educacionanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino"
));

$proto8["m_sql"] = "educacionanalisis";
$proto8["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_COUNT";
$proto11["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "educacionanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "COUNT(educacionanalisis)";
$proto10["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "COUNT(educacionanalisis)";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino"
));

$proto13["m_sql"] = "genero";
$proto13["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino"
));

$proto15["m_sql"] = "mun_resid";
$proto15["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino"
));

$proto17["m_sql"] = "depart_resid";
$proto17["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "carcel";
$proto20["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "sipe";
$proto20["m_columns"][] = "afis";
$proto20["m_columns"][] = "edad";
$proto20["m_columns"][] = "rangoetario";
$proto20["m_columns"][] = "genero";
$proto20["m_columns"][] = "fecha_nac";
$proto20["m_columns"][] = "edad1";
$proto20["m_columns"][] = "dui";
$proto20["m_columns"][] = "nivel_edu";
$proto20["m_columns"][] = "educacionanalisis";
$proto20["m_columns"][] = "profesion_oficio";
$proto20["m_columns"][] = "estado_civil";
$proto20["m_columns"][] = "ciudadania";
$proto20["m_columns"][] = "mun_nacimiento";
$proto20["m_columns"][] = "depto_nacim";
$proto20["m_columns"][] = "direccion";
$proto20["m_columns"][] = "mun_resid";
$proto20["m_columns"][] = "depart_resid";
$proto20["m_columns"][] = "delitosanalisis";
$proto20["m_columns"][] = "sj_interno";
$proto20["m_columns"][] = "fase";
$proto20["m_columns"][] = "org_delictiva";
$proto20["m_columns"][] = "tipo_mara";
$proto20["m_columns"][] = "reincidente";
$proto20["m_columns"][] = "deportado";
$proto20["m_columns"][] = "direccion1";
$proto20["m_columns"][] = "sector";
$proto20["m_columns"][] = "celda";
$proto20["m_columns"][] = "fecha_ing__sp";
$proto20["m_columns"][] = "libro";
$proto20["m_columns"][] = "fecha_ing__cp";
$proto20["m_columns"][] = "total_delitos";
$proto20["m_columns"][] = "delitos";
$proto20["m_columns"][] = "delitoanalisis";
$proto20["m_columns"][] = "sector_ppd";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "carcel";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "educacionanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Personas privadas de libertad por rango etario, segun nivel educativo y género femenino";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino = createSqlQuery_Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino();


	
		;

						

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".sqlquery"] = $queryData_Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino;

$tableEvents["Personas privadas de libertad por rango etario, segun nivel educativo y género femenino"] = new eventsBase;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino[".hasEvents"] = false;

?>