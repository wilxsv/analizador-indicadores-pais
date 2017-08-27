<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino = array();
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".truncateText"] = true;
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".NumberOfChars"] = 80;
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".ShortName"] = "Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".OwnerID"] = "";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".OriginalTable"] = "dgcp";

//	field labels
$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino = array();
$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino = array();
$pageTitlesPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino = array();
$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"] = array();
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"] = array();
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"] = array();
	$pageTitlesPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"] = array();
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"]["rangoetario"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"]["rangoetario"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"]["COUNT_educacionanalisis_"] = "COUNT(educacionanalisis)";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"]["COUNT_educacionanalisis_"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"]["COUNT_educacionanalisis_"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"]["educacionanalisis"] = "Educacionanalisis";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"]["educacionanalisis"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"]["educacionanalisis"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"]["genero"] = "Genero";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"]["genero"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"]["genero"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"]["depart_resid"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"]["depart_resid"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"]["mun_resid"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"]["mun_resid"] = "";
	if (count($fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["Spanish"]))
		$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"] = array();
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"] = array();
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"] = array();
	$pageTitlesPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"] = array();
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"]["rangoetario"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"]["rangoetario"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"]["COUNT_educacionanalisis_"] = "COUNT(educacionanalisis)";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"]["COUNT_educacionanalisis_"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"]["COUNT_educacionanalisis_"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"]["educacionanalisis"] = "Educacionanalisis";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"]["educacionanalisis"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"]["educacionanalisis"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"]["genero"] = "Genero";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"]["genero"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"]["genero"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"]["depart_resid"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"]["depart_resid"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"]["mun_resid"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"]["mun_resid"] = "";
	if (count($fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["English"]))
		$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[""] = array();
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[""] = array();
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[""] = array();
	$pageTitlesPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[""] = array();
	if (count($fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[""]))
		$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".isUseToolTips"] = true;
}





$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".shortTableName"] = "Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".nSecOptions"] = 0;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".recsPerRowPrint"] = 1;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".mainTableOwnerID"] = "";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".moveNext"] = 1;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".entityType"] = 2;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".strOriginalTableName"] = "dgcp";

	



$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".showAddInPopup"] = false;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".showEditInPopup"] = false;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".fieldsForRegister"] = array();

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".listAjax"] = false;

	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".audit"] = false;

	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".locking"] = false;


$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".add"] = true;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".afterAddAction"] = 1;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".closePopupAfterAdd"] = 1;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".afterAddActionDetTable"] = "";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".list"] = true;



$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".reorderRecordsByHeader"] = true;



$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".inlineAdd"] = true;


$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".exportTo"] = true;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".printFriendly"] = true;


$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".searchSaving"] = false;
//

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".showSearchPanel"] = true;
		$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".flexibleSearch"] = true;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".isUseAjaxSuggest"] = true;






$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".ajaxCodeSnippetAdded"] = false;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".buttonsAdded"] = false;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".isUseTimeForSearch"] = false;





$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".allSearchFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".filterFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".requiredSearchFields"] = array();

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".allSearchFields"][] = "rangoetario";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".allSearchFields"][] = "educacionanalisis";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".allSearchFields"][] = "COUNT(educacionanalisis)";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".allSearchFields"][] = "genero";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".allSearchFields"][] = "depart_resid";
		$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".requiredSearchFields"][] = "depart_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".allSearchFields"][] = "mun_resid";
		$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".requiredSearchFields"][] = "mun_resid";


$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".googleLikeFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".googleLikeFields"][] = "depart_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".googleLikeFields"][] = "mun_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".panelSearchFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".searchPanelOptions"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".panelSearchFields"][] = "depart_resid";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".panelSearchFields"][] = "mun_resid";
	
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".advSearchFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".advSearchFields"][] = "depart_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".advSearchFields"][] = "mun_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".tableType"] = "report";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".printerPageOrientation"] = 0;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".nPrinterPageScale"] = 100;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".nPrinterSplitRecords"] = 40;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".nPrinterPDFSplitRecords"] = 40;



$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".geocodingEnabled"] = false;

//report settings
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".crossTabReport"] = true;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".reportGroupFields"] = true;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".pageSize"] = 5;
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
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".reportGroupFieldsData"] = $reportGroupFields;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".reportHorizontalSummary"] = true;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".isExistTotalFields"] = true;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".reportVerticalSummary"] = true;



$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".repShowDet"] = true;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".reportLayout"] = 6;

//end of report settings




$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".listGridLayout"] = 3;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".strOrderBy"] = $tstrOrderBy;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".orderindexes"] = array();

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".sqlHead"] = "SELECT rangoetario,  educacionanalisis,  COUNT(educacionanalisis) AS `COUNT(educacionanalisis)`,  genero,  depart_resid,  mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".sqlFrom"] = "FROM carcel";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".sqlWhereExpr"] = "genero =\"FEMENINO\"";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".arrGroupsPerPage"] = $arrGPP;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".highlightSearchResults"] = true;

$tableKeysPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".Keys"] = $tableKeysPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".listFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".listFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".listFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".listFields"][] = "COUNT(educacionanalisis)";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".listFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".listFields"][] = "depart_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".listFields"][] = "mun_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".hideMobileList"] = array();


$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".viewFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".viewFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".viewFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".viewFields"][] = "COUNT(educacionanalisis)";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".viewFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".viewFields"][] = "depart_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".viewFields"][] = "mun_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".addFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".addFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".addFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".addFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".addFields"][] = "depart_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".addFields"][] = "mun_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".masterListFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".masterListFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".masterListFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".masterListFields"][] = "COUNT(educacionanalisis)";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".masterListFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".masterListFields"][] = "depart_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".masterListFields"][] = "mun_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".inlineAddFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".inlineAddFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".inlineAddFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".inlineAddFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".inlineAddFields"][] = "depart_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".inlineAddFields"][] = "mun_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".editFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".editFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".editFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".editFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".editFields"][] = "depart_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".editFields"][] = "mun_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".inlineEditFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".inlineEditFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".inlineEditFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".inlineEditFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".inlineEditFields"][] = "depart_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".inlineEditFields"][] = "mun_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".updateSelectedFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".updateSelectedFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".updateSelectedFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".updateSelectedFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".updateSelectedFields"][] = "depart_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".updateSelectedFields"][] = "mun_resid";


$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".exportFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".exportFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".exportFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".exportFields"][] = "COUNT(educacionanalisis)";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".exportFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".exportFields"][] = "depart_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".exportFields"][] = "mun_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".importFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".importFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".importFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".importFields"][] = "COUNT(educacionanalisis)";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".importFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".importFields"][] = "depart_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".importFields"][] = "mun_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".printFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".printFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".printFields"][] = "educacionanalisis";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".printFields"][] = "COUNT(educacionanalisis)";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".printFields"][] = "genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".printFields"][] = "depart_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".printFields"][] = "mun_resid";

//	rangoetario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rangoetario";
	$fdata["GoodName"] = "rangoetario";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino","rangoetario");
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




	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["rangoetario"] = $fdata;
//	educacionanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "educacionanalisis";
	$fdata["GoodName"] = "educacionanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino","educacionanalisis");
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




	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["educacionanalisis"] = $fdata;
//	COUNT(educacionanalisis)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "COUNT(educacionanalisis)";
	$fdata["GoodName"] = "COUNT_educacionanalisis_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino","COUNT_educacionanalisis_");
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




	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["COUNT(educacionanalisis)"] = $fdata;
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino","genero");
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




	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["genero"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino","depart_resid");
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




	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["depart_resid"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino","mun_resid");
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




	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino["mun_resid"] = $fdata;


$tables_data["Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino"]=&$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino;
$field_labels["Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino"] = &$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino;
$fieldToolTips["Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino"] = &$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino;
$placeHolders["Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino"] = &$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino;
$page_titles["Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino"] = &$pageTitlesPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rangoetario,  educacionanalisis,  COUNT(educacionanalisis) AS `COUNT(educacionanalisis)`,  genero,  depart_resid,  mun_resid";
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
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino"
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
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino"
));

$proto6["m_sql"] = "rangoetario";
$proto6["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "educacionanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino"
));

$proto8["m_sql"] = "educacionanalisis";
$proto8["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino";
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
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "COUNT(educacionanalisis)";
$proto10["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "COUNT(educacionanalisis)";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino"
));

$proto13["m_sql"] = "genero";
$proto13["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino"
));

$proto15["m_sql"] = "depart_resid";
$proto15["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino"
));

$proto17["m_sql"] = "mun_resid";
$proto17["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "carcel";
$proto20["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino";
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
$proto19["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino";
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
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "educacionanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino = createSqlQuery_Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino();


	
		;

						

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".sqlquery"] = $queryData_Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino;

$tableEvents["Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino"] = new eventsBase;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino[".hasEvents"] = false;

?>