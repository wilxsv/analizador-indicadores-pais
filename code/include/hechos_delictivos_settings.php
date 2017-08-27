<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahechos_delictivos = array();
	$tdatahechos_delictivos[".truncateText"] = true;
	$tdatahechos_delictivos[".NumberOfChars"] = 80;
	$tdatahechos_delictivos[".ShortName"] = "hechos_delictivos";
	$tdatahechos_delictivos[".OwnerID"] = "";
	$tdatahechos_delictivos[".OriginalTable"] = "hechos_delictivos";

//	field labels
$fieldLabelshechos_delictivos = array();
$fieldToolTipshechos_delictivos = array();
$pageTitleshechos_delictivos = array();
$placeHoldershechos_delictivos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshechos_delictivos["Spanish"] = array();
	$fieldToolTipshechos_delictivos["Spanish"] = array();
	$placeHoldershechos_delictivos["Spanish"] = array();
	$pageTitleshechos_delictivos["Spanish"] = array();
	$fieldLabelshechos_delictivos["Spanish"]["id1"] = "Id1";
	$fieldToolTipshechos_delictivos["Spanish"]["id1"] = "";
	$placeHoldershechos_delictivos["Spanish"]["id1"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["correlativo"] = "Correlativo";
	$fieldToolTipshechos_delictivos["Spanish"]["correlativo"] = "";
	$placeHoldershechos_delictivos["Spanish"]["correlativo"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["numero"] = "Numero";
	$fieldToolTipshechos_delictivos["Spanish"]["numero"] = "";
	$placeHoldershechos_delictivos["Spanish"]["numero"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["id"] = "Id";
	$fieldToolTipshechos_delictivos["Spanish"]["id"] = "";
	$placeHoldershechos_delictivos["Spanish"]["id"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["codigo_muni"] = "Codigo Muni";
	$fieldToolTipshechos_delictivos["Spanish"]["codigo_muni"] = "";
	$placeHoldershechos_delictivos["Spanish"]["codigo_muni"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["numero2"] = "Numero2";
	$fieldToolTipshechos_delictivos["Spanish"]["numero2"] = "";
	$placeHoldershechos_delictivos["Spanish"]["numero2"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipshechos_delictivos["Spanish"]["depart_he"] = "";
	$placeHoldershechos_delictivos["Spanish"]["depart_he"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipshechos_delictivos["Spanish"]["muni_he"] = "";
	$placeHoldershechos_delictivos["Spanish"]["muni_he"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["lugar_esp"] = "Lugar Esp";
	$fieldToolTipshechos_delictivos["Spanish"]["lugar_esp"] = "";
	$placeHoldershechos_delictivos["Spanish"]["lugar_esp"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["lugaranalisis"] = "Lugaranalisis";
	$fieldToolTipshechos_delictivos["Spanish"]["lugaranalisis"] = "";
	$placeHoldershechos_delictivos["Spanish"]["lugaranalisis"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["area"] = "Area";
	$fieldToolTipshechos_delictivos["Spanish"]["area"] = "";
	$placeHoldershechos_delictivos["Spanish"]["area"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["forma_cono"] = "Forma Cono";
	$fieldToolTipshechos_delictivos["Spanish"]["forma_cono"] = "";
	$placeHoldershechos_delictivos["Spanish"]["forma_cono"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["delito"] = "Delito";
	$fieldToolTipshechos_delictivos["Spanish"]["delito"] = "";
	$placeHoldershechos_delictivos["Spanish"]["delito"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["delito_espe"] = "Delito Espe";
	$fieldToolTipshechos_delictivos["Spanish"]["delito_espe"] = "";
	$placeHoldershechos_delictivos["Spanish"]["delito_espe"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["dia_hecho"] = "Dia Hecho";
	$fieldToolTipshechos_delictivos["Spanish"]["dia_hecho"] = "";
	$placeHoldershechos_delictivos["Spanish"]["dia_hecho"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["edad_victima"] = "Edad Victima";
	$fieldToolTipshechos_delictivos["Spanish"]["edad_victima"] = "";
	$placeHoldershechos_delictivos["Spanish"]["edad_victima"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipshechos_delictivos["Spanish"]["ran_eta_vic"] = "";
	$placeHoldershechos_delictivos["Spanish"]["ran_eta_vic"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["s_victima"] = "S Victima";
	$fieldToolTipshechos_delictivos["Spanish"]["s_victima"] = "";
	$placeHoldershechos_delictivos["Spanish"]["s_victima"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["circunstancias"] = "Circunstancias";
	$fieldToolTipshechos_delictivos["Spanish"]["circunstancias"] = "";
	$placeHoldershechos_delictivos["Spanish"]["circunstancias"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["movil"] = "Movil";
	$fieldToolTipshechos_delictivos["Spanish"]["movil"] = "";
	$placeHoldershechos_delictivos["Spanish"]["movil"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["relacion_vi_agre"] = "Relacion Vi Agre";
	$fieldToolTipshechos_delictivos["Spanish"]["relacion_vi_agre"] = "";
	$placeHoldershechos_delictivos["Spanish"]["relacion_vi_agre"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["oc_victima"] = "Oc Victima";
	$fieldToolTipshechos_delictivos["Spanish"]["oc_victima"] = "";
	$placeHoldershechos_delictivos["Spanish"]["oc_victima"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipshechos_delictivos["Spanish"]["sector_ppd"] = "";
	$placeHoldershechos_delictivos["Spanish"]["sector_ppd"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["mes_hecho"] = "Mes Hecho";
	$fieldToolTipshechos_delictivos["Spanish"]["mes_hecho"] = "";
	$placeHoldershechos_delictivos["Spanish"]["mes_hecho"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["hora_hecho"] = "Hora Hecho";
	$fieldToolTipshechos_delictivos["Spanish"]["hora_hecho"] = "";
	$placeHoldershechos_delictivos["Spanish"]["hora_hecho"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipshechos_delictivos["Spanish"]["tipo_arma"] = "";
	$placeHoldershechos_delictivos["Spanish"]["tipo_arma"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipshechos_delictivos["Spanish"]["a_o_hecho"] = "";
	$placeHoldershechos_delictivos["Spanish"]["a_o_hecho"] = "";
	$fieldLabelshechos_delictivos["Spanish"]["rango_hora"] = "Rango Hora";
	$fieldToolTipshechos_delictivos["Spanish"]["rango_hora"] = "";
	$placeHoldershechos_delictivos["Spanish"]["rango_hora"] = "";
	if (count($fieldToolTipshechos_delictivos["Spanish"]))
		$tdatahechos_delictivos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshechos_delictivos["English"] = array();
	$fieldToolTipshechos_delictivos["English"] = array();
	$placeHoldershechos_delictivos["English"] = array();
	$pageTitleshechos_delictivos["English"] = array();
	$fieldLabelshechos_delictivos["English"]["id1"] = "Id1";
	$fieldToolTipshechos_delictivos["English"]["id1"] = "";
	$placeHoldershechos_delictivos["English"]["id1"] = "";
	$fieldLabelshechos_delictivos["English"]["correlativo"] = "Correlativo";
	$fieldToolTipshechos_delictivos["English"]["correlativo"] = "";
	$placeHoldershechos_delictivos["English"]["correlativo"] = "";
	$fieldLabelshechos_delictivos["English"]["numero"] = "Numero";
	$fieldToolTipshechos_delictivos["English"]["numero"] = "";
	$placeHoldershechos_delictivos["English"]["numero"] = "";
	$fieldLabelshechos_delictivos["English"]["id"] = "Id";
	$fieldToolTipshechos_delictivos["English"]["id"] = "";
	$placeHoldershechos_delictivos["English"]["id"] = "";
	$fieldLabelshechos_delictivos["English"]["codigo_muni"] = "Codigo Muni";
	$fieldToolTipshechos_delictivos["English"]["codigo_muni"] = "";
	$placeHoldershechos_delictivos["English"]["codigo_muni"] = "";
	$fieldLabelshechos_delictivos["English"]["numero2"] = "Numero2";
	$fieldToolTipshechos_delictivos["English"]["numero2"] = "";
	$placeHoldershechos_delictivos["English"]["numero2"] = "";
	$fieldLabelshechos_delictivos["English"]["depart_he"] = "Depart He";
	$fieldToolTipshechos_delictivos["English"]["depart_he"] = "";
	$placeHoldershechos_delictivos["English"]["depart_he"] = "";
	$fieldLabelshechos_delictivos["English"]["muni_he"] = "Muni He";
	$fieldToolTipshechos_delictivos["English"]["muni_he"] = "";
	$placeHoldershechos_delictivos["English"]["muni_he"] = "";
	$fieldLabelshechos_delictivos["English"]["lugar_esp"] = "Lugar Esp";
	$fieldToolTipshechos_delictivos["English"]["lugar_esp"] = "";
	$placeHoldershechos_delictivos["English"]["lugar_esp"] = "";
	$fieldLabelshechos_delictivos["English"]["lugaranalisis"] = "Lugaranalisis";
	$fieldToolTipshechos_delictivos["English"]["lugaranalisis"] = "";
	$placeHoldershechos_delictivos["English"]["lugaranalisis"] = "";
	$fieldLabelshechos_delictivos["English"]["area"] = "Area";
	$fieldToolTipshechos_delictivos["English"]["area"] = "";
	$placeHoldershechos_delictivos["English"]["area"] = "";
	$fieldLabelshechos_delictivos["English"]["forma_cono"] = "Forma Cono";
	$fieldToolTipshechos_delictivos["English"]["forma_cono"] = "";
	$placeHoldershechos_delictivos["English"]["forma_cono"] = "";
	$fieldLabelshechos_delictivos["English"]["delito"] = "Delito";
	$fieldToolTipshechos_delictivos["English"]["delito"] = "";
	$placeHoldershechos_delictivos["English"]["delito"] = "";
	$fieldLabelshechos_delictivos["English"]["delito_espe"] = "Delito Espe";
	$fieldToolTipshechos_delictivos["English"]["delito_espe"] = "";
	$placeHoldershechos_delictivos["English"]["delito_espe"] = "";
	$fieldLabelshechos_delictivos["English"]["dia_hecho"] = "Dia Hecho";
	$fieldToolTipshechos_delictivos["English"]["dia_hecho"] = "";
	$placeHoldershechos_delictivos["English"]["dia_hecho"] = "";
	$fieldLabelshechos_delictivos["English"]["edad_victima"] = "Edad Victima";
	$fieldToolTipshechos_delictivos["English"]["edad_victima"] = "";
	$placeHoldershechos_delictivos["English"]["edad_victima"] = "";
	$fieldLabelshechos_delictivos["English"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipshechos_delictivos["English"]["ran_eta_vic"] = "";
	$placeHoldershechos_delictivos["English"]["ran_eta_vic"] = "";
	$fieldLabelshechos_delictivos["English"]["s_victima"] = "S Victima";
	$fieldToolTipshechos_delictivos["English"]["s_victima"] = "";
	$placeHoldershechos_delictivos["English"]["s_victima"] = "";
	$fieldLabelshechos_delictivos["English"]["circunstancias"] = "Circunstancias";
	$fieldToolTipshechos_delictivos["English"]["circunstancias"] = "";
	$placeHoldershechos_delictivos["English"]["circunstancias"] = "";
	$fieldLabelshechos_delictivos["English"]["movil"] = "Movil";
	$fieldToolTipshechos_delictivos["English"]["movil"] = "";
	$placeHoldershechos_delictivos["English"]["movil"] = "";
	$fieldLabelshechos_delictivos["English"]["relacion_vi_agre"] = "Relacion Vi Agre";
	$fieldToolTipshechos_delictivos["English"]["relacion_vi_agre"] = "";
	$placeHoldershechos_delictivos["English"]["relacion_vi_agre"] = "";
	$fieldLabelshechos_delictivos["English"]["oc_victima"] = "Oc Victima";
	$fieldToolTipshechos_delictivos["English"]["oc_victima"] = "";
	$placeHoldershechos_delictivos["English"]["oc_victima"] = "";
	$fieldLabelshechos_delictivos["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipshechos_delictivos["English"]["sector_ppd"] = "";
	$placeHoldershechos_delictivos["English"]["sector_ppd"] = "";
	$fieldLabelshechos_delictivos["English"]["mes_hecho"] = "Mes Hecho";
	$fieldToolTipshechos_delictivos["English"]["mes_hecho"] = "";
	$placeHoldershechos_delictivos["English"]["mes_hecho"] = "";
	$fieldLabelshechos_delictivos["English"]["hora_hecho"] = "Hora Hecho";
	$fieldToolTipshechos_delictivos["English"]["hora_hecho"] = "";
	$placeHoldershechos_delictivos["English"]["hora_hecho"] = "";
	$fieldLabelshechos_delictivos["English"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipshechos_delictivos["English"]["tipo_arma"] = "";
	$placeHoldershechos_delictivos["English"]["tipo_arma"] = "";
	$fieldLabelshechos_delictivos["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipshechos_delictivos["English"]["a_o_hecho"] = "";
	$placeHoldershechos_delictivos["English"]["a_o_hecho"] = "";
	$fieldLabelshechos_delictivos["English"]["rango_hora"] = "Rango Hora";
	$fieldToolTipshechos_delictivos["English"]["rango_hora"] = "";
	$placeHoldershechos_delictivos["English"]["rango_hora"] = "";
	if (count($fieldToolTipshechos_delictivos["English"]))
		$tdatahechos_delictivos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshechos_delictivos[""] = array();
	$fieldToolTipshechos_delictivos[""] = array();
	$placeHoldershechos_delictivos[""] = array();
	$pageTitleshechos_delictivos[""] = array();
	if (count($fieldToolTipshechos_delictivos[""]))
		$tdatahechos_delictivos[".isUseToolTips"] = true;
}





$tdatahechos_delictivos[".shortTableName"] = "hechos_delictivos";
$tdatahechos_delictivos[".nSecOptions"] = 0;
$tdatahechos_delictivos[".recsPerRowPrint"] = 1;
$tdatahechos_delictivos[".mainTableOwnerID"] = "";
$tdatahechos_delictivos[".moveNext"] = 1;
$tdatahechos_delictivos[".entityType"] = 0;

$tdatahechos_delictivos[".strOriginalTableName"] = "hechos_delictivos";

	



$tdatahechos_delictivos[".showAddInPopup"] = false;

$tdatahechos_delictivos[".showEditInPopup"] = false;

$tdatahechos_delictivos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahechos_delictivos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahechos_delictivos[".fieldsForRegister"] = array();

	$tdatahechos_delictivos[".listAjax"] = true;

	$tdatahechos_delictivos[".audit"] = false;

	$tdatahechos_delictivos[".locking"] = false;



$tdatahechos_delictivos[".list"] = true;



$tdatahechos_delictivos[".reorderRecordsByHeader"] = true;
$tdatahechos_delictivos[".createSortByDropdown"] = true;
$tdatahechos_delictivos[".strSortControlSettingsJSON"] = "";




$tdatahechos_delictivos[".import"] = true;

$tdatahechos_delictivos[".exportTo"] = true;

$tdatahechos_delictivos[".printFriendly"] = true;


$tdatahechos_delictivos[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatahechos_delictivos[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatahechos_delictivos[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatahechos_delictivos[".searchSaving"] = false;
//

$tdatahechos_delictivos[".showSearchPanel"] = true;
		$tdatahechos_delictivos[".flexibleSearch"] = true;

$tdatahechos_delictivos[".isUseAjaxSuggest"] = true;

$tdatahechos_delictivos[".rowHighlite"] = true;





$tdatahechos_delictivos[".ajaxCodeSnippetAdded"] = false;

$tdatahechos_delictivos[".buttonsAdded"] = false;

$tdatahechos_delictivos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahechos_delictivos[".isUseTimeForSearch"] = false;





$tdatahechos_delictivos[".allSearchFields"] = array();
$tdatahechos_delictivos[".filterFields"] = array();
$tdatahechos_delictivos[".requiredSearchFields"] = array();

$tdatahechos_delictivos[".allSearchFields"][] = "id1";
	$tdatahechos_delictivos[".allSearchFields"][] = "correlativo";
	$tdatahechos_delictivos[".allSearchFields"][] = "numero";
	$tdatahechos_delictivos[".allSearchFields"][] = "id";
	$tdatahechos_delictivos[".allSearchFields"][] = "codigo_muni";
	$tdatahechos_delictivos[".allSearchFields"][] = "numero2";
	$tdatahechos_delictivos[".allSearchFields"][] = "depart_he";
	$tdatahechos_delictivos[".allSearchFields"][] = "muni_he";
	$tdatahechos_delictivos[".allSearchFields"][] = "lugar_esp";
	$tdatahechos_delictivos[".allSearchFields"][] = "lugaranalisis";
	$tdatahechos_delictivos[".allSearchFields"][] = "area";
	$tdatahechos_delictivos[".allSearchFields"][] = "forma_cono";
	$tdatahechos_delictivos[".allSearchFields"][] = "delito";
	$tdatahechos_delictivos[".allSearchFields"][] = "delito_espe";
	$tdatahechos_delictivos[".allSearchFields"][] = "dia_hecho";
	$tdatahechos_delictivos[".allSearchFields"][] = "edad_victima";
	$tdatahechos_delictivos[".allSearchFields"][] = "ran_eta_vic";
	$tdatahechos_delictivos[".allSearchFields"][] = "s_victima";
	$tdatahechos_delictivos[".allSearchFields"][] = "circunstancias";
	$tdatahechos_delictivos[".allSearchFields"][] = "movil";
	$tdatahechos_delictivos[".allSearchFields"][] = "relacion_vi_agre";
	$tdatahechos_delictivos[".allSearchFields"][] = "oc_victima";
	$tdatahechos_delictivos[".allSearchFields"][] = "sector_ppd";
	$tdatahechos_delictivos[".allSearchFields"][] = "mes_hecho";
	$tdatahechos_delictivos[".allSearchFields"][] = "hora_hecho";
	$tdatahechos_delictivos[".allSearchFields"][] = "tipo_arma";
	$tdatahechos_delictivos[".allSearchFields"][] = "aÑo_hecho";
	$tdatahechos_delictivos[".allSearchFields"][] = "rango_hora";
	

$tdatahechos_delictivos[".googleLikeFields"] = array();
$tdatahechos_delictivos[".googleLikeFields"][] = "id1";
$tdatahechos_delictivos[".googleLikeFields"][] = "correlativo";
$tdatahechos_delictivos[".googleLikeFields"][] = "numero";
$tdatahechos_delictivos[".googleLikeFields"][] = "id";
$tdatahechos_delictivos[".googleLikeFields"][] = "codigo_muni";
$tdatahechos_delictivos[".googleLikeFields"][] = "numero2";
$tdatahechos_delictivos[".googleLikeFields"][] = "depart_he";
$tdatahechos_delictivos[".googleLikeFields"][] = "muni_he";
$tdatahechos_delictivos[".googleLikeFields"][] = "lugar_esp";
$tdatahechos_delictivos[".googleLikeFields"][] = "lugaranalisis";
$tdatahechos_delictivos[".googleLikeFields"][] = "area";
$tdatahechos_delictivos[".googleLikeFields"][] = "forma_cono";
$tdatahechos_delictivos[".googleLikeFields"][] = "delito";
$tdatahechos_delictivos[".googleLikeFields"][] = "delito_espe";
$tdatahechos_delictivos[".googleLikeFields"][] = "dia_hecho";
$tdatahechos_delictivos[".googleLikeFields"][] = "edad_victima";
$tdatahechos_delictivos[".googleLikeFields"][] = "ran_eta_vic";
$tdatahechos_delictivos[".googleLikeFields"][] = "s_victima";
$tdatahechos_delictivos[".googleLikeFields"][] = "circunstancias";
$tdatahechos_delictivos[".googleLikeFields"][] = "movil";
$tdatahechos_delictivos[".googleLikeFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos[".googleLikeFields"][] = "oc_victima";
$tdatahechos_delictivos[".googleLikeFields"][] = "sector_ppd";
$tdatahechos_delictivos[".googleLikeFields"][] = "mes_hecho";
$tdatahechos_delictivos[".googleLikeFields"][] = "hora_hecho";
$tdatahechos_delictivos[".googleLikeFields"][] = "tipo_arma";
$tdatahechos_delictivos[".googleLikeFields"][] = "aÑo_hecho";
$tdatahechos_delictivos[".googleLikeFields"][] = "rango_hora";


$tdatahechos_delictivos[".advSearchFields"] = array();
$tdatahechos_delictivos[".advSearchFields"][] = "id1";
$tdatahechos_delictivos[".advSearchFields"][] = "correlativo";
$tdatahechos_delictivos[".advSearchFields"][] = "numero";
$tdatahechos_delictivos[".advSearchFields"][] = "id";
$tdatahechos_delictivos[".advSearchFields"][] = "codigo_muni";
$tdatahechos_delictivos[".advSearchFields"][] = "numero2";
$tdatahechos_delictivos[".advSearchFields"][] = "depart_he";
$tdatahechos_delictivos[".advSearchFields"][] = "muni_he";
$tdatahechos_delictivos[".advSearchFields"][] = "lugar_esp";
$tdatahechos_delictivos[".advSearchFields"][] = "lugaranalisis";
$tdatahechos_delictivos[".advSearchFields"][] = "area";
$tdatahechos_delictivos[".advSearchFields"][] = "forma_cono";
$tdatahechos_delictivos[".advSearchFields"][] = "delito";
$tdatahechos_delictivos[".advSearchFields"][] = "delito_espe";
$tdatahechos_delictivos[".advSearchFields"][] = "dia_hecho";
$tdatahechos_delictivos[".advSearchFields"][] = "edad_victima";
$tdatahechos_delictivos[".advSearchFields"][] = "ran_eta_vic";
$tdatahechos_delictivos[".advSearchFields"][] = "s_victima";
$tdatahechos_delictivos[".advSearchFields"][] = "circunstancias";
$tdatahechos_delictivos[".advSearchFields"][] = "movil";
$tdatahechos_delictivos[".advSearchFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos[".advSearchFields"][] = "oc_victima";
$tdatahechos_delictivos[".advSearchFields"][] = "sector_ppd";
$tdatahechos_delictivos[".advSearchFields"][] = "mes_hecho";
$tdatahechos_delictivos[".advSearchFields"][] = "hora_hecho";
$tdatahechos_delictivos[".advSearchFields"][] = "tipo_arma";
$tdatahechos_delictivos[".advSearchFields"][] = "aÑo_hecho";
$tdatahechos_delictivos[".advSearchFields"][] = "rango_hora";

$tdatahechos_delictivos[".tableType"] = "list";

$tdatahechos_delictivos[".printerPageOrientation"] = 0;
$tdatahechos_delictivos[".nPrinterPageScale"] = 100;

$tdatahechos_delictivos[".nPrinterSplitRecords"] = 40;

$tdatahechos_delictivos[".nPrinterPDFSplitRecords"] = 40;



$tdatahechos_delictivos[".geocodingEnabled"] = false;





$tdatahechos_delictivos[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatahechos_delictivos[".pageSize"] = 20;

$tdatahechos_delictivos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahechos_delictivos[".strOrderBy"] = $tstrOrderBy;

$tdatahechos_delictivos[".orderindexes"] = array();

$tdatahechos_delictivos[".sqlHead"] = "SELECT id1,  	correlativo,  	numero,  	id,  	codigo_muni,  	numero2,  	depart_he,  	muni_he,  	lugar_esp,  	lugaranalisis,  	area,  	forma_cono,  	delito,  	delito_espe,  	dia_hecho,  	edad_victima,  	ran_eta_vic,  	s_victima,  	circunstancias,  	movil,  	relacion_vi_agre,  	oc_victima,  	sector_ppd,  	mes_hecho,  	hora_hecho,  	tipo_arma,  	`aÑo_hecho`,  	rango_hora";
$tdatahechos_delictivos[".sqlFrom"] = "FROM hechos_delictivos";
$tdatahechos_delictivos[".sqlWhereExpr"] = "";
$tdatahechos_delictivos[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahechos_delictivos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahechos_delictivos[".arrGroupsPerPage"] = $arrGPP;

$tdatahechos_delictivos[".highlightSearchResults"] = true;

$tableKeyshechos_delictivos = array();
$tdatahechos_delictivos[".Keys"] = $tableKeyshechos_delictivos;

$tdatahechos_delictivos[".listFields"] = array();
$tdatahechos_delictivos[".listFields"][] = "id1";
$tdatahechos_delictivos[".listFields"][] = "correlativo";
$tdatahechos_delictivos[".listFields"][] = "numero";
$tdatahechos_delictivos[".listFields"][] = "id";
$tdatahechos_delictivos[".listFields"][] = "codigo_muni";
$tdatahechos_delictivos[".listFields"][] = "numero2";
$tdatahechos_delictivos[".listFields"][] = "depart_he";
$tdatahechos_delictivos[".listFields"][] = "muni_he";
$tdatahechos_delictivos[".listFields"][] = "lugar_esp";
$tdatahechos_delictivos[".listFields"][] = "lugaranalisis";
$tdatahechos_delictivos[".listFields"][] = "area";
$tdatahechos_delictivos[".listFields"][] = "forma_cono";
$tdatahechos_delictivos[".listFields"][] = "delito";
$tdatahechos_delictivos[".listFields"][] = "delito_espe";
$tdatahechos_delictivos[".listFields"][] = "dia_hecho";
$tdatahechos_delictivos[".listFields"][] = "edad_victima";
$tdatahechos_delictivos[".listFields"][] = "ran_eta_vic";
$tdatahechos_delictivos[".listFields"][] = "s_victima";
$tdatahechos_delictivos[".listFields"][] = "circunstancias";
$tdatahechos_delictivos[".listFields"][] = "movil";
$tdatahechos_delictivos[".listFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos[".listFields"][] = "oc_victima";
$tdatahechos_delictivos[".listFields"][] = "sector_ppd";
$tdatahechos_delictivos[".listFields"][] = "mes_hecho";
$tdatahechos_delictivos[".listFields"][] = "hora_hecho";
$tdatahechos_delictivos[".listFields"][] = "tipo_arma";
$tdatahechos_delictivos[".listFields"][] = "aÑo_hecho";
$tdatahechos_delictivos[".listFields"][] = "rango_hora";

$tdatahechos_delictivos[".hideMobileList"] = array();


$tdatahechos_delictivos[".viewFields"] = array();

$tdatahechos_delictivos[".addFields"] = array();

$tdatahechos_delictivos[".masterListFields"] = array();
$tdatahechos_delictivos[".masterListFields"][] = "id1";
$tdatahechos_delictivos[".masterListFields"][] = "correlativo";
$tdatahechos_delictivos[".masterListFields"][] = "numero";
$tdatahechos_delictivos[".masterListFields"][] = "id";
$tdatahechos_delictivos[".masterListFields"][] = "codigo_muni";
$tdatahechos_delictivos[".masterListFields"][] = "numero2";
$tdatahechos_delictivos[".masterListFields"][] = "depart_he";
$tdatahechos_delictivos[".masterListFields"][] = "muni_he";
$tdatahechos_delictivos[".masterListFields"][] = "lugar_esp";
$tdatahechos_delictivos[".masterListFields"][] = "lugaranalisis";
$tdatahechos_delictivos[".masterListFields"][] = "area";
$tdatahechos_delictivos[".masterListFields"][] = "forma_cono";
$tdatahechos_delictivos[".masterListFields"][] = "delito";
$tdatahechos_delictivos[".masterListFields"][] = "delito_espe";
$tdatahechos_delictivos[".masterListFields"][] = "dia_hecho";
$tdatahechos_delictivos[".masterListFields"][] = "edad_victima";
$tdatahechos_delictivos[".masterListFields"][] = "ran_eta_vic";
$tdatahechos_delictivos[".masterListFields"][] = "s_victima";
$tdatahechos_delictivos[".masterListFields"][] = "circunstancias";
$tdatahechos_delictivos[".masterListFields"][] = "movil";
$tdatahechos_delictivos[".masterListFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos[".masterListFields"][] = "oc_victima";
$tdatahechos_delictivos[".masterListFields"][] = "sector_ppd";
$tdatahechos_delictivos[".masterListFields"][] = "mes_hecho";
$tdatahechos_delictivos[".masterListFields"][] = "hora_hecho";
$tdatahechos_delictivos[".masterListFields"][] = "tipo_arma";
$tdatahechos_delictivos[".masterListFields"][] = "aÑo_hecho";
$tdatahechos_delictivos[".masterListFields"][] = "rango_hora";

$tdatahechos_delictivos[".inlineAddFields"] = array();

$tdatahechos_delictivos[".editFields"] = array();

$tdatahechos_delictivos[".inlineEditFields"] = array();

$tdatahechos_delictivos[".updateSelectedFields"] = array();


$tdatahechos_delictivos[".exportFields"] = array();
$tdatahechos_delictivos[".exportFields"][] = "id1";
$tdatahechos_delictivos[".exportFields"][] = "correlativo";
$tdatahechos_delictivos[".exportFields"][] = "numero";
$tdatahechos_delictivos[".exportFields"][] = "id";
$tdatahechos_delictivos[".exportFields"][] = "codigo_muni";
$tdatahechos_delictivos[".exportFields"][] = "numero2";
$tdatahechos_delictivos[".exportFields"][] = "depart_he";
$tdatahechos_delictivos[".exportFields"][] = "muni_he";
$tdatahechos_delictivos[".exportFields"][] = "lugar_esp";
$tdatahechos_delictivos[".exportFields"][] = "lugaranalisis";
$tdatahechos_delictivos[".exportFields"][] = "area";
$tdatahechos_delictivos[".exportFields"][] = "forma_cono";
$tdatahechos_delictivos[".exportFields"][] = "delito";
$tdatahechos_delictivos[".exportFields"][] = "delito_espe";
$tdatahechos_delictivos[".exportFields"][] = "dia_hecho";
$tdatahechos_delictivos[".exportFields"][] = "edad_victima";
$tdatahechos_delictivos[".exportFields"][] = "ran_eta_vic";
$tdatahechos_delictivos[".exportFields"][] = "s_victima";
$tdatahechos_delictivos[".exportFields"][] = "circunstancias";
$tdatahechos_delictivos[".exportFields"][] = "movil";
$tdatahechos_delictivos[".exportFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos[".exportFields"][] = "oc_victima";
$tdatahechos_delictivos[".exportFields"][] = "sector_ppd";
$tdatahechos_delictivos[".exportFields"][] = "mes_hecho";
$tdatahechos_delictivos[".exportFields"][] = "hora_hecho";
$tdatahechos_delictivos[".exportFields"][] = "tipo_arma";
$tdatahechos_delictivos[".exportFields"][] = "aÑo_hecho";
$tdatahechos_delictivos[".exportFields"][] = "rango_hora";

$tdatahechos_delictivos[".importFields"] = array();
$tdatahechos_delictivos[".importFields"][] = "id1";
$tdatahechos_delictivos[".importFields"][] = "correlativo";
$tdatahechos_delictivos[".importFields"][] = "numero";
$tdatahechos_delictivos[".importFields"][] = "id";
$tdatahechos_delictivos[".importFields"][] = "codigo_muni";
$tdatahechos_delictivos[".importFields"][] = "numero2";
$tdatahechos_delictivos[".importFields"][] = "depart_he";
$tdatahechos_delictivos[".importFields"][] = "muni_he";
$tdatahechos_delictivos[".importFields"][] = "lugar_esp";
$tdatahechos_delictivos[".importFields"][] = "lugaranalisis";
$tdatahechos_delictivos[".importFields"][] = "area";
$tdatahechos_delictivos[".importFields"][] = "forma_cono";
$tdatahechos_delictivos[".importFields"][] = "delito";
$tdatahechos_delictivos[".importFields"][] = "delito_espe";
$tdatahechos_delictivos[".importFields"][] = "dia_hecho";
$tdatahechos_delictivos[".importFields"][] = "edad_victima";
$tdatahechos_delictivos[".importFields"][] = "ran_eta_vic";
$tdatahechos_delictivos[".importFields"][] = "s_victima";
$tdatahechos_delictivos[".importFields"][] = "circunstancias";
$tdatahechos_delictivos[".importFields"][] = "movil";
$tdatahechos_delictivos[".importFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos[".importFields"][] = "oc_victima";
$tdatahechos_delictivos[".importFields"][] = "sector_ppd";
$tdatahechos_delictivos[".importFields"][] = "mes_hecho";
$tdatahechos_delictivos[".importFields"][] = "hora_hecho";
$tdatahechos_delictivos[".importFields"][] = "tipo_arma";
$tdatahechos_delictivos[".importFields"][] = "aÑo_hecho";
$tdatahechos_delictivos[".importFields"][] = "rango_hora";

$tdatahechos_delictivos[".printFields"] = array();
$tdatahechos_delictivos[".printFields"][] = "id1";
$tdatahechos_delictivos[".printFields"][] = "correlativo";
$tdatahechos_delictivos[".printFields"][] = "numero";
$tdatahechos_delictivos[".printFields"][] = "id";
$tdatahechos_delictivos[".printFields"][] = "codigo_muni";
$tdatahechos_delictivos[".printFields"][] = "numero2";
$tdatahechos_delictivos[".printFields"][] = "depart_he";
$tdatahechos_delictivos[".printFields"][] = "muni_he";
$tdatahechos_delictivos[".printFields"][] = "lugar_esp";
$tdatahechos_delictivos[".printFields"][] = "lugaranalisis";
$tdatahechos_delictivos[".printFields"][] = "area";
$tdatahechos_delictivos[".printFields"][] = "forma_cono";
$tdatahechos_delictivos[".printFields"][] = "delito";
$tdatahechos_delictivos[".printFields"][] = "delito_espe";
$tdatahechos_delictivos[".printFields"][] = "dia_hecho";
$tdatahechos_delictivos[".printFields"][] = "edad_victima";
$tdatahechos_delictivos[".printFields"][] = "ran_eta_vic";
$tdatahechos_delictivos[".printFields"][] = "s_victima";
$tdatahechos_delictivos[".printFields"][] = "circunstancias";
$tdatahechos_delictivos[".printFields"][] = "movil";
$tdatahechos_delictivos[".printFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos[".printFields"][] = "oc_victima";
$tdatahechos_delictivos[".printFields"][] = "sector_ppd";
$tdatahechos_delictivos[".printFields"][] = "mes_hecho";
$tdatahechos_delictivos[".printFields"][] = "hora_hecho";
$tdatahechos_delictivos[".printFields"][] = "tipo_arma";
$tdatahechos_delictivos[".printFields"][] = "aÑo_hecho";
$tdatahechos_delictivos[".printFields"][] = "rango_hora";

//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id1";
	$fdata["GoodName"] = "id1";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","id1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id1";

	
	
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




	$tdatahechos_delictivos["id1"] = $fdata;
//	correlativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "correlativo";
	$fdata["GoodName"] = "correlativo";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","correlativo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "correlativo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "correlativo";

	
	
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




	$tdatahechos_delictivos["correlativo"] = $fdata;
//	numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "numero";
	$fdata["GoodName"] = "numero";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","numero");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "numero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numero";

	
	
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




	$tdatahechos_delictivos["numero"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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




	$tdatahechos_delictivos["id"] = $fdata;
//	codigo_muni
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "codigo_muni";
	$fdata["GoodName"] = "codigo_muni";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","codigo_muni");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "codigo_muni";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigo_muni";

	
	
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




	$tdatahechos_delictivos["codigo_muni"] = $fdata;
//	numero2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "numero2";
	$fdata["GoodName"] = "numero2";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","numero2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "numero2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numero2";

	
	
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




	$tdatahechos_delictivos["numero2"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","depart_he");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "depart_he";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "depart_he";

	
	
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




	$tdatahechos_delictivos["depart_he"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","muni_he");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "muni_he";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "muni_he";

	
	
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




	$tdatahechos_delictivos["muni_he"] = $fdata;
//	lugar_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "lugar_esp";
	$fdata["GoodName"] = "lugar_esp";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","lugar_esp");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "lugar_esp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lugar_esp";

	
	
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




	$tdatahechos_delictivos["lugar_esp"] = $fdata;
//	lugaranalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "lugaranalisis";
	$fdata["GoodName"] = "lugaranalisis";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","lugaranalisis");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "lugaranalisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lugaranalisis";

	
	
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




	$tdatahechos_delictivos["lugaranalisis"] = $fdata;
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","area");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "area";

	
	
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




	$tdatahechos_delictivos["area"] = $fdata;
//	forma_cono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "forma_cono";
	$fdata["GoodName"] = "forma_cono";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","forma_cono");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "forma_cono";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forma_cono";

	
	
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




	$tdatahechos_delictivos["forma_cono"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","delito");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "delito";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delito";

	
	
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




	$tdatahechos_delictivos["delito"] = $fdata;
//	delito_espe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "delito_espe";
	$fdata["GoodName"] = "delito_espe";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","delito_espe");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "delito_espe";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delito_espe";

	
	
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




	$tdatahechos_delictivos["delito_espe"] = $fdata;
//	dia_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "dia_hecho";
	$fdata["GoodName"] = "dia_hecho";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","dia_hecho");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dia_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dia_hecho";

	
	
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




	$tdatahechos_delictivos["dia_hecho"] = $fdata;
//	edad_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "edad_victima";
	$fdata["GoodName"] = "edad_victima";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","edad_victima");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "edad_victima";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edad_victima";

	
	
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




	$tdatahechos_delictivos["edad_victima"] = $fdata;
//	ran_eta_vic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ran_eta_vic";
	$fdata["GoodName"] = "ran_eta_vic";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","ran_eta_vic");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ran_eta_vic";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ran_eta_vic";

	
	
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




	$tdatahechos_delictivos["ran_eta_vic"] = $fdata;
//	s_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "s_victima";
	$fdata["GoodName"] = "s_victima";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","s_victima");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s_victima";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s_victima";

	
	
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




	$tdatahechos_delictivos["s_victima"] = $fdata;
//	circunstancias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "circunstancias";
	$fdata["GoodName"] = "circunstancias";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","circunstancias");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "circunstancias";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "circunstancias";

	
	
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




	$tdatahechos_delictivos["circunstancias"] = $fdata;
//	movil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "movil";
	$fdata["GoodName"] = "movil";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","movil");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "movil";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "movil";

	
	
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




	$tdatahechos_delictivos["movil"] = $fdata;
//	relacion_vi_agre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "relacion_vi_agre";
	$fdata["GoodName"] = "relacion_vi_agre";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","relacion_vi_agre");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "relacion_vi_agre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "relacion_vi_agre";

	
	
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




	$tdatahechos_delictivos["relacion_vi_agre"] = $fdata;
//	oc_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "oc_victima";
	$fdata["GoodName"] = "oc_victima";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","oc_victima");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "oc_victima";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oc_victima";

	
	
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




	$tdatahechos_delictivos["oc_victima"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","sector_ppd");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatahechos_delictivos["sector_ppd"] = $fdata;
//	mes_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "mes_hecho";
	$fdata["GoodName"] = "mes_hecho";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","mes_hecho");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mes_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mes_hecho";

	
	
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




	$tdatahechos_delictivos["mes_hecho"] = $fdata;
//	hora_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "hora_hecho";
	$fdata["GoodName"] = "hora_hecho";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","hora_hecho");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hora_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hora_hecho";

	
	
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




	$tdatahechos_delictivos["hora_hecho"] = $fdata;
//	tipo_arma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "tipo_arma";
	$fdata["GoodName"] = "tipo_arma";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","tipo_arma");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tipo_arma";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_arma";

	
	
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




	$tdatahechos_delictivos["tipo_arma"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","a_o_hecho");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "aÑo_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`aÑo_hecho`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahechos_delictivos["aÑo_hecho"] = $fdata;
//	rango_hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "rango_hora";
	$fdata["GoodName"] = "rango_hora";
	$fdata["ownerTable"] = "hechos_delictivos";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos","rango_hora");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rango_hora";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rango_hora";

	
	
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




	$tdatahechos_delictivos["rango_hora"] = $fdata;


$tables_data["hechos_delictivos"]=&$tdatahechos_delictivos;
$field_labels["hechos_delictivos"] = &$fieldLabelshechos_delictivos;
$fieldToolTips["hechos_delictivos"] = &$fieldToolTipshechos_delictivos;
$placeHolders["hechos_delictivos"] = &$placeHoldershechos_delictivos;
$page_titles["hechos_delictivos"] = &$pageTitleshechos_delictivos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hechos_delictivos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hechos_delictivos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hechos_delictivos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id1,  	correlativo,  	numero,  	id,  	codigo_muni,  	numero2,  	depart_he,  	muni_he,  	lugar_esp,  	lugaranalisis,  	area,  	forma_cono,  	delito,  	delito_espe,  	dia_hecho,  	edad_victima,  	ran_eta_vic,  	s_victima,  	circunstancias,  	movil,  	relacion_vi_agre,  	oc_victima,  	sector_ppd,  	mes_hecho,  	hora_hecho,  	tipo_arma,  	`aÑo_hecho`,  	rango_hora";
$proto0["m_strFrom"] = "FROM hechos_delictivos";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
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
	"m_strName" => "id1",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto6["m_sql"] = "id1";
$proto6["m_srcTableName"] = "hechos_delictivos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "correlativo",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto8["m_sql"] = "correlativo";
$proto8["m_srcTableName"] = "hechos_delictivos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "numero",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto10["m_sql"] = "numero";
$proto10["m_srcTableName"] = "hechos_delictivos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto12["m_sql"] = "id";
$proto12["m_srcTableName"] = "hechos_delictivos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo_muni",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto14["m_sql"] = "codigo_muni";
$proto14["m_srcTableName"] = "hechos_delictivos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "numero2",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto16["m_sql"] = "numero2";
$proto16["m_srcTableName"] = "hechos_delictivos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto18["m_sql"] = "depart_he";
$proto18["m_srcTableName"] = "hechos_delictivos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto20["m_sql"] = "muni_he";
$proto20["m_srcTableName"] = "hechos_delictivos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "lugar_esp",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto22["m_sql"] = "lugar_esp";
$proto22["m_srcTableName"] = "hechos_delictivos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "lugaranalisis",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto24["m_sql"] = "lugaranalisis";
$proto24["m_srcTableName"] = "hechos_delictivos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto26["m_sql"] = "area";
$proto26["m_srcTableName"] = "hechos_delictivos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "forma_cono",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto28["m_sql"] = "forma_cono";
$proto28["m_srcTableName"] = "hechos_delictivos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto30["m_sql"] = "delito";
$proto30["m_srcTableName"] = "hechos_delictivos";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "delito_espe",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto32["m_sql"] = "delito_espe";
$proto32["m_srcTableName"] = "hechos_delictivos";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_hecho",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto34["m_sql"] = "dia_hecho";
$proto34["m_srcTableName"] = "hechos_delictivos";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "edad_victima",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto36["m_sql"] = "edad_victima";
$proto36["m_srcTableName"] = "hechos_delictivos";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "ran_eta_vic",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto38["m_sql"] = "ran_eta_vic";
$proto38["m_srcTableName"] = "hechos_delictivos";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto40["m_sql"] = "s_victima";
$proto40["m_srcTableName"] = "hechos_delictivos";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "circunstancias",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto42["m_sql"] = "circunstancias";
$proto42["m_srcTableName"] = "hechos_delictivos";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "movil",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto44["m_sql"] = "movil";
$proto44["m_srcTableName"] = "hechos_delictivos";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "relacion_vi_agre",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto46["m_sql"] = "relacion_vi_agre";
$proto46["m_srcTableName"] = "hechos_delictivos";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "oc_victima",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto48["m_sql"] = "oc_victima";
$proto48["m_srcTableName"] = "hechos_delictivos";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto50["m_sql"] = "sector_ppd";
$proto50["m_srcTableName"] = "hechos_delictivos";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "mes_hecho",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto52["m_sql"] = "mes_hecho";
$proto52["m_srcTableName"] = "hechos_delictivos";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_hecho",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto54["m_sql"] = "hora_hecho";
$proto54["m_srcTableName"] = "hechos_delictivos";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_arma",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto56["m_sql"] = "tipo_arma";
$proto56["m_srcTableName"] = "hechos_delictivos";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto58["m_sql"] = "`aÑo_hecho`";
$proto58["m_srcTableName"] = "hechos_delictivos";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "rango_hora",
	"m_strTable" => "hechos_delictivos",
	"m_srcTableName" => "hechos_delictivos"
));

$proto60["m_sql"] = "rango_hora";
$proto60["m_srcTableName"] = "hechos_delictivos";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto62=array();
$proto62["m_link"] = "SQLL_MAIN";
			$proto63=array();
$proto63["m_strName"] = "hechos_delictivos";
$proto63["m_srcTableName"] = "hechos_delictivos";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "id1";
$proto63["m_columns"][] = "correlativo";
$proto63["m_columns"][] = "numero";
$proto63["m_columns"][] = "id";
$proto63["m_columns"][] = "codigo_muni";
$proto63["m_columns"][] = "numero2";
$proto63["m_columns"][] = "depart_he";
$proto63["m_columns"][] = "muni_he";
$proto63["m_columns"][] = "lugar_esp";
$proto63["m_columns"][] = "lugaranalisis";
$proto63["m_columns"][] = "area";
$proto63["m_columns"][] = "forma_cono";
$proto63["m_columns"][] = "delito";
$proto63["m_columns"][] = "delito_espe";
$proto63["m_columns"][] = "dia_hecho";
$proto63["m_columns"][] = "edad_victima";
$proto63["m_columns"][] = "ran_eta_vic";
$proto63["m_columns"][] = "s_victima";
$proto63["m_columns"][] = "circunstancias";
$proto63["m_columns"][] = "movil";
$proto63["m_columns"][] = "relacion_vi_agre";
$proto63["m_columns"][] = "oc_victima";
$proto63["m_columns"][] = "sector_ppd";
$proto63["m_columns"][] = "mes_hecho";
$proto63["m_columns"][] = "hora_hecho";
$proto63["m_columns"][] = "tipo_arma";
$proto63["m_columns"][] = "aÑo_hecho";
$proto63["m_columns"][] = "rango_hora";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "hechos_delictivos";
$proto62["m_alias"] = "";
$proto62["m_srcTableName"] = "hechos_delictivos";
$proto64=array();
$proto64["m_sql"] = "";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

$proto62["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto62);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hechos_delictivos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hechos_delictivos = createSqlQuery_hechos_delictivos();


	
		;

																												

$tdatahechos_delictivos[".sqlquery"] = $queryData_hechos_delictivos;

$tableEvents["hechos_delictivos"] = new eventsBase;
$tdatahechos_delictivos[".hasEvents"] = false;

?>