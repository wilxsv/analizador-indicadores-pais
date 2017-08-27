<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDB_PNC = array();
	$tdataDB_PNC[".truncateText"] = true;
	$tdataDB_PNC[".NumberOfChars"] = 80;
	$tdataDB_PNC[".ShortName"] = "DB_PNC";
	$tdataDB_PNC[".OwnerID"] = "";
	$tdataDB_PNC[".OriginalTable"] = "hechos_delictivos1";

//	field labels
$fieldLabelsDB_PNC = array();
$fieldToolTipsDB_PNC = array();
$pageTitlesDB_PNC = array();
$placeHoldersDB_PNC = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsDB_PNC["Spanish"] = array();
	$fieldToolTipsDB_PNC["Spanish"] = array();
	$placeHoldersDB_PNC["Spanish"] = array();
	$pageTitlesDB_PNC["Spanish"] = array();
	$fieldLabelsDB_PNC["Spanish"]["id1"] = "Id1";
	$fieldToolTipsDB_PNC["Spanish"]["id1"] = "";
	$placeHoldersDB_PNC["Spanish"]["id1"] = "";
	$fieldLabelsDB_PNC["Spanish"]["correlativo"] = "Correlativo";
	$fieldToolTipsDB_PNC["Spanish"]["correlativo"] = "";
	$placeHoldersDB_PNC["Spanish"]["correlativo"] = "";
	$fieldLabelsDB_PNC["Spanish"]["numero"] = "Numero";
	$fieldToolTipsDB_PNC["Spanish"]["numero"] = "";
	$placeHoldersDB_PNC["Spanish"]["numero"] = "";
	$fieldLabelsDB_PNC["Spanish"]["id"] = "Id";
	$fieldToolTipsDB_PNC["Spanish"]["id"] = "";
	$placeHoldersDB_PNC["Spanish"]["id"] = "";
	$fieldLabelsDB_PNC["Spanish"]["codigo_muni"] = "Codigo Muni";
	$fieldToolTipsDB_PNC["Spanish"]["codigo_muni"] = "";
	$placeHoldersDB_PNC["Spanish"]["codigo_muni"] = "";
	$fieldLabelsDB_PNC["Spanish"]["numero2"] = "Numero2";
	$fieldToolTipsDB_PNC["Spanish"]["numero2"] = "";
	$placeHoldersDB_PNC["Spanish"]["numero2"] = "";
	$fieldLabelsDB_PNC["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipsDB_PNC["Spanish"]["depart_he"] = "";
	$placeHoldersDB_PNC["Spanish"]["depart_he"] = "";
	$fieldLabelsDB_PNC["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipsDB_PNC["Spanish"]["muni_he"] = "";
	$placeHoldersDB_PNC["Spanish"]["muni_he"] = "";
	$fieldLabelsDB_PNC["Spanish"]["dire_hecho"] = "Dire Hecho";
	$fieldToolTipsDB_PNC["Spanish"]["dire_hecho"] = "";
	$placeHoldersDB_PNC["Spanish"]["dire_hecho"] = "";
	$fieldLabelsDB_PNC["Spanish"]["lugar_esp"] = "Lugar Esp";
	$fieldToolTipsDB_PNC["Spanish"]["lugar_esp"] = "";
	$placeHoldersDB_PNC["Spanish"]["lugar_esp"] = "";
	$fieldLabelsDB_PNC["Spanish"]["lugaranalisis"] = "Lugaranalisis";
	$fieldToolTipsDB_PNC["Spanish"]["lugaranalisis"] = "";
	$placeHoldersDB_PNC["Spanish"]["lugaranalisis"] = "";
	$fieldLabelsDB_PNC["Spanish"]["area"] = "Area";
	$fieldToolTipsDB_PNC["Spanish"]["area"] = "";
	$placeHoldersDB_PNC["Spanish"]["area"] = "";
	$fieldLabelsDB_PNC["Spanish"]["forma_cono"] = "Forma Cono";
	$fieldToolTipsDB_PNC["Spanish"]["forma_cono"] = "";
	$placeHoldersDB_PNC["Spanish"]["forma_cono"] = "";
	$fieldLabelsDB_PNC["Spanish"]["delito"] = "Delito";
	$fieldToolTipsDB_PNC["Spanish"]["delito"] = "";
	$placeHoldersDB_PNC["Spanish"]["delito"] = "";
	$fieldLabelsDB_PNC["Spanish"]["delito_espe"] = "Delito Espe";
	$fieldToolTipsDB_PNC["Spanish"]["delito_espe"] = "";
	$placeHoldersDB_PNC["Spanish"]["delito_espe"] = "";
	$fieldLabelsDB_PNC["Spanish"]["dia_hecho"] = "Dia Hecho";
	$fieldToolTipsDB_PNC["Spanish"]["dia_hecho"] = "";
	$placeHoldersDB_PNC["Spanish"]["dia_hecho"] = "";
	$fieldLabelsDB_PNC["Spanish"]["fecha_hecho"] = "Fecha Hecho";
	$fieldToolTipsDB_PNC["Spanish"]["fecha_hecho"] = "";
	$placeHoldersDB_PNC["Spanish"]["fecha_hecho"] = "";
	$fieldLabelsDB_PNC["Spanish"]["mes_hecho"] = "Mes Hecho";
	$fieldToolTipsDB_PNC["Spanish"]["mes_hecho"] = "";
	$placeHoldersDB_PNC["Spanish"]["mes_hecho"] = "";
	$fieldLabelsDB_PNC["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsDB_PNC["Spanish"]["a_o_hecho"] = "";
	$placeHoldersDB_PNC["Spanish"]["a_o_hecho"] = "";
	$fieldLabelsDB_PNC["Spanish"]["edad_victima"] = "Edad Victima";
	$fieldToolTipsDB_PNC["Spanish"]["edad_victima"] = "";
	$placeHoldersDB_PNC["Spanish"]["edad_victima"] = "";
	$fieldLabelsDB_PNC["Spanish"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipsDB_PNC["Spanish"]["ran_eta_vic"] = "";
	$placeHoldersDB_PNC["Spanish"]["ran_eta_vic"] = "";
	$fieldLabelsDB_PNC["Spanish"]["s_victima"] = "S Victima";
	$fieldToolTipsDB_PNC["Spanish"]["s_victima"] = "";
	$placeHoldersDB_PNC["Spanish"]["s_victima"] = "";
	$fieldLabelsDB_PNC["Spanish"]["oc_victima"] = "Oc Victima";
	$fieldToolTipsDB_PNC["Spanish"]["oc_victima"] = "";
	$placeHoldersDB_PNC["Spanish"]["oc_victima"] = "";
	$fieldLabelsDB_PNC["Spanish"]["relacion_vi_agre"] = "Relacion Vi Agre";
	$fieldToolTipsDB_PNC["Spanish"]["relacion_vi_agre"] = "";
	$placeHoldersDB_PNC["Spanish"]["relacion_vi_agre"] = "";
	$fieldLabelsDB_PNC["Spanish"]["edad_agresor"] = "Edad Agresor";
	$fieldToolTipsDB_PNC["Spanish"]["edad_agresor"] = "";
	$placeHoldersDB_PNC["Spanish"]["edad_agresor"] = "";
	$fieldLabelsDB_PNC["Spanish"]["sexo_agresor"] = "Sexo Agresor";
	$fieldToolTipsDB_PNC["Spanish"]["sexo_agresor"] = "";
	$placeHoldersDB_PNC["Spanish"]["sexo_agresor"] = "";
	$fieldLabelsDB_PNC["Spanish"]["ocupa_agresor"] = "Ocupa Agresor";
	$fieldToolTipsDB_PNC["Spanish"]["ocupa_agresor"] = "";
	$placeHoldersDB_PNC["Spanish"]["ocupa_agresor"] = "";
	$fieldLabelsDB_PNC["Spanish"]["movil"] = "Movil";
	$fieldToolTipsDB_PNC["Spanish"]["movil"] = "";
	$placeHoldersDB_PNC["Spanish"]["movil"] = "";
	$fieldLabelsDB_PNC["Spanish"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipsDB_PNC["Spanish"]["tipo_arma"] = "";
	$placeHoldersDB_PNC["Spanish"]["tipo_arma"] = "";
	$fieldLabelsDB_PNC["Spanish"]["canton_hecho"] = "Canton Hecho";
	$fieldToolTipsDB_PNC["Spanish"]["canton_hecho"] = "";
	$placeHoldersDB_PNC["Spanish"]["canton_hecho"] = "";
	$fieldLabelsDB_PNC["Spanish"]["colonia_hecho"] = "Colonia Hecho";
	$fieldToolTipsDB_PNC["Spanish"]["colonia_hecho"] = "";
	$placeHoldersDB_PNC["Spanish"]["colonia_hecho"] = "";
	$fieldLabelsDB_PNC["Spanish"]["caserio_hecho"] = "Caserio Hecho";
	$fieldToolTipsDB_PNC["Spanish"]["caserio_hecho"] = "";
	$placeHoldersDB_PNC["Spanish"]["caserio_hecho"] = "";
	$fieldLabelsDB_PNC["Spanish"]["calle_hecho"] = "Calle Hecho";
	$fieldToolTipsDB_PNC["Spanish"]["calle_hecho"] = "";
	$placeHoldersDB_PNC["Spanish"]["calle_hecho"] = "";
	$fieldLabelsDB_PNC["Spanish"]["avenida_hecho"] = "Avenida Hecho";
	$fieldToolTipsDB_PNC["Spanish"]["avenida_hecho"] = "";
	$placeHoldersDB_PNC["Spanish"]["avenida_hecho"] = "";
	$fieldLabelsDB_PNC["Spanish"]["casa_hecho"] = "Casa Hecho";
	$fieldToolTipsDB_PNC["Spanish"]["casa_hecho"] = "";
	$placeHoldersDB_PNC["Spanish"]["casa_hecho"] = "";
	$fieldLabelsDB_PNC["Spanish"]["com_hecho"] = "Com Hecho";
	$fieldToolTipsDB_PNC["Spanish"]["com_hecho"] = "";
	$placeHoldersDB_PNC["Spanish"]["com_hecho"] = "";
	$fieldLabelsDB_PNC["Spanish"]["barrio_hecho"] = "Barrio Hecho";
	$fieldToolTipsDB_PNC["Spanish"]["barrio_hecho"] = "";
	$placeHoldersDB_PNC["Spanish"]["barrio_hecho"] = "";
	$fieldLabelsDB_PNC["Spanish"]["comp_hecho"] = "Comp Hecho";
	$fieldToolTipsDB_PNC["Spanish"]["comp_hecho"] = "";
	$placeHoldersDB_PNC["Spanish"]["comp_hecho"] = "";
	$fieldLabelsDB_PNC["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsDB_PNC["Spanish"]["sector_ppd"] = "";
	$placeHoldersDB_PNC["Spanish"]["sector_ppd"] = "";
	$fieldLabelsDB_PNC["Spanish"]["tipo"] = "Tipo";
	$fieldToolTipsDB_PNC["Spanish"]["tipo"] = "";
	$placeHoldersDB_PNC["Spanish"]["tipo"] = "";
	$fieldLabelsDB_PNC["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsDB_PNC["Spanish"]["nombre"] = "";
	$placeHoldersDB_PNC["Spanish"]["nombre"] = "";
	$fieldLabelsDB_PNC["Spanish"]["x"] = "X";
	$fieldToolTipsDB_PNC["Spanish"]["x"] = "";
	$placeHoldersDB_PNC["Spanish"]["x"] = "";
	$fieldLabelsDB_PNC["Spanish"]["y"] = "Y";
	$fieldToolTipsDB_PNC["Spanish"]["y"] = "";
	$placeHoldersDB_PNC["Spanish"]["y"] = "";
	$fieldLabelsDB_PNC["Spanish"]["mes_corre"] = "Mes Corre";
	$fieldToolTipsDB_PNC["Spanish"]["mes_corre"] = "";
	$placeHoldersDB_PNC["Spanish"]["mes_corre"] = "";
	if (count($fieldToolTipsDB_PNC["Spanish"]))
		$tdataDB_PNC[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDB_PNC["English"] = array();
	$fieldToolTipsDB_PNC["English"] = array();
	$placeHoldersDB_PNC["English"] = array();
	$pageTitlesDB_PNC["English"] = array();
	$fieldLabelsDB_PNC["English"]["id1"] = "Id1";
	$fieldToolTipsDB_PNC["English"]["id1"] = "";
	$placeHoldersDB_PNC["English"]["id1"] = "";
	$fieldLabelsDB_PNC["English"]["correlativo"] = "Correlativo";
	$fieldToolTipsDB_PNC["English"]["correlativo"] = "";
	$placeHoldersDB_PNC["English"]["correlativo"] = "";
	$fieldLabelsDB_PNC["English"]["numero"] = "Numero";
	$fieldToolTipsDB_PNC["English"]["numero"] = "";
	$placeHoldersDB_PNC["English"]["numero"] = "";
	$fieldLabelsDB_PNC["English"]["id"] = "Id";
	$fieldToolTipsDB_PNC["English"]["id"] = "";
	$placeHoldersDB_PNC["English"]["id"] = "";
	$fieldLabelsDB_PNC["English"]["codigo_muni"] = "Codigo Muni";
	$fieldToolTipsDB_PNC["English"]["codigo_muni"] = "";
	$placeHoldersDB_PNC["English"]["codigo_muni"] = "";
	$fieldLabelsDB_PNC["English"]["numero2"] = "Numero2";
	$fieldToolTipsDB_PNC["English"]["numero2"] = "";
	$placeHoldersDB_PNC["English"]["numero2"] = "";
	$fieldLabelsDB_PNC["English"]["depart_he"] = "Depart He";
	$fieldToolTipsDB_PNC["English"]["depart_he"] = "";
	$placeHoldersDB_PNC["English"]["depart_he"] = "";
	$fieldLabelsDB_PNC["English"]["muni_he"] = "Muni He";
	$fieldToolTipsDB_PNC["English"]["muni_he"] = "";
	$placeHoldersDB_PNC["English"]["muni_he"] = "";
	$fieldLabelsDB_PNC["English"]["dire_hecho"] = "Dire Hecho";
	$fieldToolTipsDB_PNC["English"]["dire_hecho"] = "";
	$placeHoldersDB_PNC["English"]["dire_hecho"] = "";
	$fieldLabelsDB_PNC["English"]["lugar_esp"] = "Lugar Esp";
	$fieldToolTipsDB_PNC["English"]["lugar_esp"] = "";
	$placeHoldersDB_PNC["English"]["lugar_esp"] = "";
	$fieldLabelsDB_PNC["English"]["lugaranalisis"] = "Lugaranalisis";
	$fieldToolTipsDB_PNC["English"]["lugaranalisis"] = "";
	$placeHoldersDB_PNC["English"]["lugaranalisis"] = "";
	$fieldLabelsDB_PNC["English"]["area"] = "Area";
	$fieldToolTipsDB_PNC["English"]["area"] = "";
	$placeHoldersDB_PNC["English"]["area"] = "";
	$fieldLabelsDB_PNC["English"]["forma_cono"] = "Forma Cono";
	$fieldToolTipsDB_PNC["English"]["forma_cono"] = "";
	$placeHoldersDB_PNC["English"]["forma_cono"] = "";
	$fieldLabelsDB_PNC["English"]["delito"] = "Delito";
	$fieldToolTipsDB_PNC["English"]["delito"] = "";
	$placeHoldersDB_PNC["English"]["delito"] = "";
	$fieldLabelsDB_PNC["English"]["delito_espe"] = "Delito Espe";
	$fieldToolTipsDB_PNC["English"]["delito_espe"] = "";
	$placeHoldersDB_PNC["English"]["delito_espe"] = "";
	$fieldLabelsDB_PNC["English"]["dia_hecho"] = "Dia Hecho";
	$fieldToolTipsDB_PNC["English"]["dia_hecho"] = "";
	$placeHoldersDB_PNC["English"]["dia_hecho"] = "";
	$fieldLabelsDB_PNC["English"]["fecha_hecho"] = "Fecha Hecho";
	$fieldToolTipsDB_PNC["English"]["fecha_hecho"] = "";
	$placeHoldersDB_PNC["English"]["fecha_hecho"] = "";
	$fieldLabelsDB_PNC["English"]["mes_hecho"] = "Mes Hecho";
	$fieldToolTipsDB_PNC["English"]["mes_hecho"] = "";
	$placeHoldersDB_PNC["English"]["mes_hecho"] = "";
	$fieldLabelsDB_PNC["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsDB_PNC["English"]["a_o_hecho"] = "";
	$placeHoldersDB_PNC["English"]["a_o_hecho"] = "";
	$fieldLabelsDB_PNC["English"]["edad_victima"] = "Edad Victima";
	$fieldToolTipsDB_PNC["English"]["edad_victima"] = "";
	$placeHoldersDB_PNC["English"]["edad_victima"] = "";
	$fieldLabelsDB_PNC["English"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipsDB_PNC["English"]["ran_eta_vic"] = "";
	$placeHoldersDB_PNC["English"]["ran_eta_vic"] = "";
	$fieldLabelsDB_PNC["English"]["s_victima"] = "S Victima";
	$fieldToolTipsDB_PNC["English"]["s_victima"] = "";
	$placeHoldersDB_PNC["English"]["s_victima"] = "";
	$fieldLabelsDB_PNC["English"]["oc_victima"] = "Oc Victima";
	$fieldToolTipsDB_PNC["English"]["oc_victima"] = "";
	$placeHoldersDB_PNC["English"]["oc_victima"] = "";
	$fieldLabelsDB_PNC["English"]["relacion_vi_agre"] = "Relacion Vi Agre";
	$fieldToolTipsDB_PNC["English"]["relacion_vi_agre"] = "";
	$placeHoldersDB_PNC["English"]["relacion_vi_agre"] = "";
	$fieldLabelsDB_PNC["English"]["edad_agresor"] = "Edad Agresor";
	$fieldToolTipsDB_PNC["English"]["edad_agresor"] = "";
	$placeHoldersDB_PNC["English"]["edad_agresor"] = "";
	$fieldLabelsDB_PNC["English"]["sexo_agresor"] = "Sexo Agresor";
	$fieldToolTipsDB_PNC["English"]["sexo_agresor"] = "";
	$placeHoldersDB_PNC["English"]["sexo_agresor"] = "";
	$fieldLabelsDB_PNC["English"]["ocupa_agresor"] = "Ocupa Agresor";
	$fieldToolTipsDB_PNC["English"]["ocupa_agresor"] = "";
	$placeHoldersDB_PNC["English"]["ocupa_agresor"] = "";
	$fieldLabelsDB_PNC["English"]["movil"] = "Movil";
	$fieldToolTipsDB_PNC["English"]["movil"] = "";
	$placeHoldersDB_PNC["English"]["movil"] = "";
	$fieldLabelsDB_PNC["English"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipsDB_PNC["English"]["tipo_arma"] = "";
	$placeHoldersDB_PNC["English"]["tipo_arma"] = "";
	$fieldLabelsDB_PNC["English"]["canton_hecho"] = "Canton Hecho";
	$fieldToolTipsDB_PNC["English"]["canton_hecho"] = "";
	$placeHoldersDB_PNC["English"]["canton_hecho"] = "";
	$fieldLabelsDB_PNC["English"]["colonia_hecho"] = "Colonia Hecho";
	$fieldToolTipsDB_PNC["English"]["colonia_hecho"] = "";
	$placeHoldersDB_PNC["English"]["colonia_hecho"] = "";
	$fieldLabelsDB_PNC["English"]["caserio_hecho"] = "Caserio Hecho";
	$fieldToolTipsDB_PNC["English"]["caserio_hecho"] = "";
	$placeHoldersDB_PNC["English"]["caserio_hecho"] = "";
	$fieldLabelsDB_PNC["English"]["calle_hecho"] = "Calle Hecho";
	$fieldToolTipsDB_PNC["English"]["calle_hecho"] = "";
	$placeHoldersDB_PNC["English"]["calle_hecho"] = "";
	$fieldLabelsDB_PNC["English"]["avenida_hecho"] = "Avenida Hecho";
	$fieldToolTipsDB_PNC["English"]["avenida_hecho"] = "";
	$placeHoldersDB_PNC["English"]["avenida_hecho"] = "";
	$fieldLabelsDB_PNC["English"]["casa_hecho"] = "Casa Hecho";
	$fieldToolTipsDB_PNC["English"]["casa_hecho"] = "";
	$placeHoldersDB_PNC["English"]["casa_hecho"] = "";
	$fieldLabelsDB_PNC["English"]["com_hecho"] = "Com Hecho";
	$fieldToolTipsDB_PNC["English"]["com_hecho"] = "";
	$placeHoldersDB_PNC["English"]["com_hecho"] = "";
	$fieldLabelsDB_PNC["English"]["barrio_hecho"] = "Barrio Hecho";
	$fieldToolTipsDB_PNC["English"]["barrio_hecho"] = "";
	$placeHoldersDB_PNC["English"]["barrio_hecho"] = "";
	$fieldLabelsDB_PNC["English"]["comp_hecho"] = "Comp Hecho";
	$fieldToolTipsDB_PNC["English"]["comp_hecho"] = "";
	$placeHoldersDB_PNC["English"]["comp_hecho"] = "";
	$fieldLabelsDB_PNC["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsDB_PNC["English"]["sector_ppd"] = "";
	$placeHoldersDB_PNC["English"]["sector_ppd"] = "";
	$fieldLabelsDB_PNC["English"]["tipo"] = "Tipo";
	$fieldToolTipsDB_PNC["English"]["tipo"] = "";
	$placeHoldersDB_PNC["English"]["tipo"] = "";
	$fieldLabelsDB_PNC["English"]["nombre"] = "Nombre";
	$fieldToolTipsDB_PNC["English"]["nombre"] = "";
	$placeHoldersDB_PNC["English"]["nombre"] = "";
	$fieldLabelsDB_PNC["English"]["x"] = "X";
	$fieldToolTipsDB_PNC["English"]["x"] = "";
	$placeHoldersDB_PNC["English"]["x"] = "";
	$fieldLabelsDB_PNC["English"]["y"] = "Y";
	$fieldToolTipsDB_PNC["English"]["y"] = "";
	$placeHoldersDB_PNC["English"]["y"] = "";
	$fieldLabelsDB_PNC["English"]["mes_corre"] = "Mes Corre";
	$fieldToolTipsDB_PNC["English"]["mes_corre"] = "";
	$placeHoldersDB_PNC["English"]["mes_corre"] = "";
	if (count($fieldToolTipsDB_PNC["English"]))
		$tdataDB_PNC[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDB_PNC[""] = array();
	$fieldToolTipsDB_PNC[""] = array();
	$placeHoldersDB_PNC[""] = array();
	$pageTitlesDB_PNC[""] = array();
	if (count($fieldToolTipsDB_PNC[""]))
		$tdataDB_PNC[".isUseToolTips"] = true;
}





$tdataDB_PNC[".shortTableName"] = "DB_PNC";
$tdataDB_PNC[".nSecOptions"] = 0;
$tdataDB_PNC[".recsPerRowPrint"] = 1;
$tdataDB_PNC[".mainTableOwnerID"] = "";
$tdataDB_PNC[".moveNext"] = 1;
$tdataDB_PNC[".entityType"] = 1;

$tdataDB_PNC[".strOriginalTableName"] = "hechos_delictivos1";

	



$tdataDB_PNC[".showAddInPopup"] = false;

$tdataDB_PNC[".showEditInPopup"] = false;

$tdataDB_PNC[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDB_PNC[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDB_PNC[".fieldsForRegister"] = array();

	$tdataDB_PNC[".listAjax"] = true;

	$tdataDB_PNC[".audit"] = false;

	$tdataDB_PNC[".locking"] = false;


$tdataDB_PNC[".add"] = true;
$tdataDB_PNC[".afterAddAction"] = 1;
$tdataDB_PNC[".closePopupAfterAdd"] = 1;
$tdataDB_PNC[".afterAddActionDetTable"] = "";

$tdataDB_PNC[".list"] = true;



$tdataDB_PNC[".reorderRecordsByHeader"] = true;
$tdataDB_PNC[".createSortByDropdown"] = true;
$tdataDB_PNC[".strSortControlSettingsJSON"] = "";



$tdataDB_PNC[".inlineAdd"] = true;

$tdataDB_PNC[".import"] = true;

$tdataDB_PNC[".exportTo"] = true;

$tdataDB_PNC[".printFriendly"] = true;


$tdataDB_PNC[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataDB_PNC[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataDB_PNC[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataDB_PNC[".searchSaving"] = false;
//

$tdataDB_PNC[".showSearchPanel"] = true;
		$tdataDB_PNC[".flexibleSearch"] = true;

$tdataDB_PNC[".isUseAjaxSuggest"] = true;

$tdataDB_PNC[".rowHighlite"] = true;





$tdataDB_PNC[".ajaxCodeSnippetAdded"] = false;

$tdataDB_PNC[".buttonsAdded"] = false;

$tdataDB_PNC[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDB_PNC[".isUseTimeForSearch"] = false;





$tdataDB_PNC[".allSearchFields"] = array();
$tdataDB_PNC[".filterFields"] = array();
$tdataDB_PNC[".requiredSearchFields"] = array();

$tdataDB_PNC[".allSearchFields"][] = "id1";
	$tdataDB_PNC[".allSearchFields"][] = "correlativo";
	$tdataDB_PNC[".allSearchFields"][] = "numero";
	$tdataDB_PNC[".allSearchFields"][] = "id";
	$tdataDB_PNC[".allSearchFields"][] = "codigo_muni";
	$tdataDB_PNC[".allSearchFields"][] = "numero2";
	$tdataDB_PNC[".allSearchFields"][] = "depart_he";
	$tdataDB_PNC[".allSearchFields"][] = "muni_he";
	$tdataDB_PNC[".allSearchFields"][] = "dire_hecho";
	$tdataDB_PNC[".allSearchFields"][] = "lugar_esp";
	$tdataDB_PNC[".allSearchFields"][] = "lugaranalisis";
	$tdataDB_PNC[".allSearchFields"][] = "area";
	$tdataDB_PNC[".allSearchFields"][] = "forma_cono";
	$tdataDB_PNC[".allSearchFields"][] = "delito";
	$tdataDB_PNC[".allSearchFields"][] = "delito_espe";
	$tdataDB_PNC[".allSearchFields"][] = "dia_hecho";
	$tdataDB_PNC[".allSearchFields"][] = "fecha_hecho";
	$tdataDB_PNC[".allSearchFields"][] = "mes_hecho";
	$tdataDB_PNC[".allSearchFields"][] = "aÑo_hecho";
	$tdataDB_PNC[".allSearchFields"][] = "edad_victima";
	$tdataDB_PNC[".allSearchFields"][] = "ran_eta_vic";
	$tdataDB_PNC[".allSearchFields"][] = "s_victima";
	$tdataDB_PNC[".allSearchFields"][] = "oc_victima";
	$tdataDB_PNC[".allSearchFields"][] = "relacion_vi_agre";
	$tdataDB_PNC[".allSearchFields"][] = "edad_agresor";
	$tdataDB_PNC[".allSearchFields"][] = "sexo_agresor";
	$tdataDB_PNC[".allSearchFields"][] = "ocupa_agresor";
	$tdataDB_PNC[".allSearchFields"][] = "movil";
	$tdataDB_PNC[".allSearchFields"][] = "tipo_arma";
	$tdataDB_PNC[".allSearchFields"][] = "canton_hecho";
	$tdataDB_PNC[".allSearchFields"][] = "colonia_hecho";
	$tdataDB_PNC[".allSearchFields"][] = "caserio_hecho";
	$tdataDB_PNC[".allSearchFields"][] = "calle_hecho";
	$tdataDB_PNC[".allSearchFields"][] = "avenida_hecho";
	$tdataDB_PNC[".allSearchFields"][] = "casa_hecho";
	$tdataDB_PNC[".allSearchFields"][] = "com_hecho";
	$tdataDB_PNC[".allSearchFields"][] = "barrio_hecho";
	$tdataDB_PNC[".allSearchFields"][] = "comp_hecho";
	$tdataDB_PNC[".allSearchFields"][] = "sector_ppd";
	$tdataDB_PNC[".allSearchFields"][] = "tipo";
	$tdataDB_PNC[".allSearchFields"][] = "nombre";
	$tdataDB_PNC[".allSearchFields"][] = "x";
	$tdataDB_PNC[".allSearchFields"][] = "y";
	$tdataDB_PNC[".allSearchFields"][] = "mes_corre";
	

$tdataDB_PNC[".googleLikeFields"] = array();
$tdataDB_PNC[".googleLikeFields"][] = "id1";
$tdataDB_PNC[".googleLikeFields"][] = "correlativo";
$tdataDB_PNC[".googleLikeFields"][] = "numero";
$tdataDB_PNC[".googleLikeFields"][] = "id";
$tdataDB_PNC[".googleLikeFields"][] = "codigo_muni";
$tdataDB_PNC[".googleLikeFields"][] = "numero2";
$tdataDB_PNC[".googleLikeFields"][] = "depart_he";
$tdataDB_PNC[".googleLikeFields"][] = "muni_he";
$tdataDB_PNC[".googleLikeFields"][] = "dire_hecho";
$tdataDB_PNC[".googleLikeFields"][] = "lugar_esp";
$tdataDB_PNC[".googleLikeFields"][] = "lugaranalisis";
$tdataDB_PNC[".googleLikeFields"][] = "area";
$tdataDB_PNC[".googleLikeFields"][] = "forma_cono";
$tdataDB_PNC[".googleLikeFields"][] = "delito";
$tdataDB_PNC[".googleLikeFields"][] = "delito_espe";
$tdataDB_PNC[".googleLikeFields"][] = "dia_hecho";
$tdataDB_PNC[".googleLikeFields"][] = "fecha_hecho";
$tdataDB_PNC[".googleLikeFields"][] = "mes_hecho";
$tdataDB_PNC[".googleLikeFields"][] = "aÑo_hecho";
$tdataDB_PNC[".googleLikeFields"][] = "edad_victima";
$tdataDB_PNC[".googleLikeFields"][] = "ran_eta_vic";
$tdataDB_PNC[".googleLikeFields"][] = "s_victima";
$tdataDB_PNC[".googleLikeFields"][] = "oc_victima";
$tdataDB_PNC[".googleLikeFields"][] = "relacion_vi_agre";
$tdataDB_PNC[".googleLikeFields"][] = "edad_agresor";
$tdataDB_PNC[".googleLikeFields"][] = "sexo_agresor";
$tdataDB_PNC[".googleLikeFields"][] = "ocupa_agresor";
$tdataDB_PNC[".googleLikeFields"][] = "movil";
$tdataDB_PNC[".googleLikeFields"][] = "tipo_arma";
$tdataDB_PNC[".googleLikeFields"][] = "canton_hecho";
$tdataDB_PNC[".googleLikeFields"][] = "colonia_hecho";
$tdataDB_PNC[".googleLikeFields"][] = "caserio_hecho";
$tdataDB_PNC[".googleLikeFields"][] = "calle_hecho";
$tdataDB_PNC[".googleLikeFields"][] = "avenida_hecho";
$tdataDB_PNC[".googleLikeFields"][] = "casa_hecho";
$tdataDB_PNC[".googleLikeFields"][] = "com_hecho";
$tdataDB_PNC[".googleLikeFields"][] = "barrio_hecho";
$tdataDB_PNC[".googleLikeFields"][] = "comp_hecho";
$tdataDB_PNC[".googleLikeFields"][] = "sector_ppd";
$tdataDB_PNC[".googleLikeFields"][] = "tipo";
$tdataDB_PNC[".googleLikeFields"][] = "nombre";
$tdataDB_PNC[".googleLikeFields"][] = "x";
$tdataDB_PNC[".googleLikeFields"][] = "y";
$tdataDB_PNC[".googleLikeFields"][] = "mes_corre";


$tdataDB_PNC[".advSearchFields"] = array();
$tdataDB_PNC[".advSearchFields"][] = "id1";
$tdataDB_PNC[".advSearchFields"][] = "correlativo";
$tdataDB_PNC[".advSearchFields"][] = "numero";
$tdataDB_PNC[".advSearchFields"][] = "id";
$tdataDB_PNC[".advSearchFields"][] = "codigo_muni";
$tdataDB_PNC[".advSearchFields"][] = "numero2";
$tdataDB_PNC[".advSearchFields"][] = "depart_he";
$tdataDB_PNC[".advSearchFields"][] = "muni_he";
$tdataDB_PNC[".advSearchFields"][] = "dire_hecho";
$tdataDB_PNC[".advSearchFields"][] = "lugar_esp";
$tdataDB_PNC[".advSearchFields"][] = "lugaranalisis";
$tdataDB_PNC[".advSearchFields"][] = "area";
$tdataDB_PNC[".advSearchFields"][] = "forma_cono";
$tdataDB_PNC[".advSearchFields"][] = "delito";
$tdataDB_PNC[".advSearchFields"][] = "delito_espe";
$tdataDB_PNC[".advSearchFields"][] = "dia_hecho";
$tdataDB_PNC[".advSearchFields"][] = "fecha_hecho";
$tdataDB_PNC[".advSearchFields"][] = "mes_hecho";
$tdataDB_PNC[".advSearchFields"][] = "aÑo_hecho";
$tdataDB_PNC[".advSearchFields"][] = "edad_victima";
$tdataDB_PNC[".advSearchFields"][] = "ran_eta_vic";
$tdataDB_PNC[".advSearchFields"][] = "s_victima";
$tdataDB_PNC[".advSearchFields"][] = "oc_victima";
$tdataDB_PNC[".advSearchFields"][] = "relacion_vi_agre";
$tdataDB_PNC[".advSearchFields"][] = "edad_agresor";
$tdataDB_PNC[".advSearchFields"][] = "sexo_agresor";
$tdataDB_PNC[".advSearchFields"][] = "ocupa_agresor";
$tdataDB_PNC[".advSearchFields"][] = "movil";
$tdataDB_PNC[".advSearchFields"][] = "tipo_arma";
$tdataDB_PNC[".advSearchFields"][] = "canton_hecho";
$tdataDB_PNC[".advSearchFields"][] = "colonia_hecho";
$tdataDB_PNC[".advSearchFields"][] = "caserio_hecho";
$tdataDB_PNC[".advSearchFields"][] = "calle_hecho";
$tdataDB_PNC[".advSearchFields"][] = "avenida_hecho";
$tdataDB_PNC[".advSearchFields"][] = "casa_hecho";
$tdataDB_PNC[".advSearchFields"][] = "com_hecho";
$tdataDB_PNC[".advSearchFields"][] = "barrio_hecho";
$tdataDB_PNC[".advSearchFields"][] = "comp_hecho";
$tdataDB_PNC[".advSearchFields"][] = "sector_ppd";
$tdataDB_PNC[".advSearchFields"][] = "tipo";
$tdataDB_PNC[".advSearchFields"][] = "nombre";
$tdataDB_PNC[".advSearchFields"][] = "x";
$tdataDB_PNC[".advSearchFields"][] = "y";
$tdataDB_PNC[".advSearchFields"][] = "mes_corre";

$tdataDB_PNC[".tableType"] = "list";

$tdataDB_PNC[".printerPageOrientation"] = 0;
$tdataDB_PNC[".nPrinterPageScale"] = 100;

$tdataDB_PNC[".nPrinterSplitRecords"] = 40;

$tdataDB_PNC[".nPrinterPDFSplitRecords"] = 40;



$tdataDB_PNC[".geocodingEnabled"] = false;





$tdataDB_PNC[".listGridLayout"] = 3;

$tdataDB_PNC[".isDisplayLoading"] = true;




// view page pdf
$tdataDB_PNC[".isViewPagePDF"] = true;
$tdataDB_PNC[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataDB_PNC[".isPrinterPagePDF"] = true;
$tdataDB_PNC[".nPrinterPagePDFScale"] = 100;


$tdataDB_PNC[".pageSize"] = 10;

$tdataDB_PNC[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDB_PNC[".strOrderBy"] = $tstrOrderBy;

$tdataDB_PNC[".orderindexes"] = array();

$tdataDB_PNC[".sqlHead"] = "SELECT id1,  correlativo,  numero,  id,  codigo_muni,  numero2,  depart_he,  muni_he,  dire_hecho,  lugar_esp,  lugaranalisis,  area,  forma_cono,  delito,  delito_espe,  dia_hecho,  fecha_hecho,  mes_hecho,  `aÑo_hecho`,  edad_victima,  ran_eta_vic,  s_victima,  oc_victima,  relacion_vi_agre,  edad_agresor,  sexo_agresor,  ocupa_agresor,  movil,  tipo_arma,  canton_hecho,  colonia_hecho,  caserio_hecho,  calle_hecho,  avenida_hecho,  casa_hecho,  com_hecho,  barrio_hecho,  comp_hecho,  sector_ppd,  tipo,  nombre,  x,  y,  mes_corre";
$tdataDB_PNC[".sqlFrom"] = "FROM hechos_delictivos1";
$tdataDB_PNC[".sqlWhereExpr"] = "";
$tdataDB_PNC[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDB_PNC[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDB_PNC[".arrGroupsPerPage"] = $arrGPP;

$tdataDB_PNC[".highlightSearchResults"] = true;

$tableKeysDB_PNC = array();
$tdataDB_PNC[".Keys"] = $tableKeysDB_PNC;

$tdataDB_PNC[".listFields"] = array();
$tdataDB_PNC[".listFields"][] = "id1";
$tdataDB_PNC[".listFields"][] = "correlativo";
$tdataDB_PNC[".listFields"][] = "numero";
$tdataDB_PNC[".listFields"][] = "id";
$tdataDB_PNC[".listFields"][] = "codigo_muni";
$tdataDB_PNC[".listFields"][] = "numero2";
$tdataDB_PNC[".listFields"][] = "depart_he";
$tdataDB_PNC[".listFields"][] = "muni_he";
$tdataDB_PNC[".listFields"][] = "dire_hecho";
$tdataDB_PNC[".listFields"][] = "lugar_esp";
$tdataDB_PNC[".listFields"][] = "lugaranalisis";
$tdataDB_PNC[".listFields"][] = "area";
$tdataDB_PNC[".listFields"][] = "forma_cono";
$tdataDB_PNC[".listFields"][] = "delito";
$tdataDB_PNC[".listFields"][] = "delito_espe";
$tdataDB_PNC[".listFields"][] = "dia_hecho";
$tdataDB_PNC[".listFields"][] = "fecha_hecho";
$tdataDB_PNC[".listFields"][] = "mes_hecho";
$tdataDB_PNC[".listFields"][] = "aÑo_hecho";
$tdataDB_PNC[".listFields"][] = "edad_victima";
$tdataDB_PNC[".listFields"][] = "ran_eta_vic";
$tdataDB_PNC[".listFields"][] = "s_victima";
$tdataDB_PNC[".listFields"][] = "oc_victima";
$tdataDB_PNC[".listFields"][] = "relacion_vi_agre";
$tdataDB_PNC[".listFields"][] = "edad_agresor";
$tdataDB_PNC[".listFields"][] = "sexo_agresor";
$tdataDB_PNC[".listFields"][] = "ocupa_agresor";
$tdataDB_PNC[".listFields"][] = "movil";
$tdataDB_PNC[".listFields"][] = "tipo_arma";
$tdataDB_PNC[".listFields"][] = "canton_hecho";
$tdataDB_PNC[".listFields"][] = "colonia_hecho";
$tdataDB_PNC[".listFields"][] = "caserio_hecho";
$tdataDB_PNC[".listFields"][] = "calle_hecho";
$tdataDB_PNC[".listFields"][] = "avenida_hecho";
$tdataDB_PNC[".listFields"][] = "casa_hecho";
$tdataDB_PNC[".listFields"][] = "com_hecho";
$tdataDB_PNC[".listFields"][] = "barrio_hecho";
$tdataDB_PNC[".listFields"][] = "comp_hecho";
$tdataDB_PNC[".listFields"][] = "sector_ppd";
$tdataDB_PNC[".listFields"][] = "tipo";
$tdataDB_PNC[".listFields"][] = "nombre";
$tdataDB_PNC[".listFields"][] = "x";
$tdataDB_PNC[".listFields"][] = "y";
$tdataDB_PNC[".listFields"][] = "mes_corre";

$tdataDB_PNC[".hideMobileList"] = array();


$tdataDB_PNC[".viewFields"] = array();
$tdataDB_PNC[".viewFields"][] = "id1";
$tdataDB_PNC[".viewFields"][] = "correlativo";
$tdataDB_PNC[".viewFields"][] = "numero";
$tdataDB_PNC[".viewFields"][] = "id";
$tdataDB_PNC[".viewFields"][] = "codigo_muni";
$tdataDB_PNC[".viewFields"][] = "numero2";
$tdataDB_PNC[".viewFields"][] = "depart_he";
$tdataDB_PNC[".viewFields"][] = "muni_he";
$tdataDB_PNC[".viewFields"][] = "dire_hecho";
$tdataDB_PNC[".viewFields"][] = "lugar_esp";
$tdataDB_PNC[".viewFields"][] = "lugaranalisis";
$tdataDB_PNC[".viewFields"][] = "area";
$tdataDB_PNC[".viewFields"][] = "forma_cono";
$tdataDB_PNC[".viewFields"][] = "delito";
$tdataDB_PNC[".viewFields"][] = "delito_espe";
$tdataDB_PNC[".viewFields"][] = "dia_hecho";
$tdataDB_PNC[".viewFields"][] = "fecha_hecho";
$tdataDB_PNC[".viewFields"][] = "mes_hecho";
$tdataDB_PNC[".viewFields"][] = "aÑo_hecho";
$tdataDB_PNC[".viewFields"][] = "edad_victima";
$tdataDB_PNC[".viewFields"][] = "ran_eta_vic";
$tdataDB_PNC[".viewFields"][] = "s_victima";
$tdataDB_PNC[".viewFields"][] = "oc_victima";
$tdataDB_PNC[".viewFields"][] = "relacion_vi_agre";
$tdataDB_PNC[".viewFields"][] = "edad_agresor";
$tdataDB_PNC[".viewFields"][] = "sexo_agresor";
$tdataDB_PNC[".viewFields"][] = "ocupa_agresor";
$tdataDB_PNC[".viewFields"][] = "movil";
$tdataDB_PNC[".viewFields"][] = "tipo_arma";
$tdataDB_PNC[".viewFields"][] = "canton_hecho";
$tdataDB_PNC[".viewFields"][] = "colonia_hecho";
$tdataDB_PNC[".viewFields"][] = "caserio_hecho";
$tdataDB_PNC[".viewFields"][] = "calle_hecho";
$tdataDB_PNC[".viewFields"][] = "avenida_hecho";
$tdataDB_PNC[".viewFields"][] = "casa_hecho";
$tdataDB_PNC[".viewFields"][] = "com_hecho";
$tdataDB_PNC[".viewFields"][] = "barrio_hecho";
$tdataDB_PNC[".viewFields"][] = "comp_hecho";
$tdataDB_PNC[".viewFields"][] = "sector_ppd";
$tdataDB_PNC[".viewFields"][] = "tipo";
$tdataDB_PNC[".viewFields"][] = "nombre";
$tdataDB_PNC[".viewFields"][] = "x";
$tdataDB_PNC[".viewFields"][] = "y";
$tdataDB_PNC[".viewFields"][] = "mes_corre";

$tdataDB_PNC[".addFields"] = array();
$tdataDB_PNC[".addFields"][] = "id1";
$tdataDB_PNC[".addFields"][] = "correlativo";
$tdataDB_PNC[".addFields"][] = "numero";
$tdataDB_PNC[".addFields"][] = "id";
$tdataDB_PNC[".addFields"][] = "codigo_muni";
$tdataDB_PNC[".addFields"][] = "numero2";
$tdataDB_PNC[".addFields"][] = "depart_he";
$tdataDB_PNC[".addFields"][] = "muni_he";
$tdataDB_PNC[".addFields"][] = "dire_hecho";
$tdataDB_PNC[".addFields"][] = "lugar_esp";
$tdataDB_PNC[".addFields"][] = "lugaranalisis";
$tdataDB_PNC[".addFields"][] = "area";
$tdataDB_PNC[".addFields"][] = "forma_cono";
$tdataDB_PNC[".addFields"][] = "delito";
$tdataDB_PNC[".addFields"][] = "delito_espe";
$tdataDB_PNC[".addFields"][] = "dia_hecho";
$tdataDB_PNC[".addFields"][] = "fecha_hecho";
$tdataDB_PNC[".addFields"][] = "mes_hecho";
$tdataDB_PNC[".addFields"][] = "aÑo_hecho";
$tdataDB_PNC[".addFields"][] = "edad_victima";
$tdataDB_PNC[".addFields"][] = "ran_eta_vic";
$tdataDB_PNC[".addFields"][] = "s_victima";
$tdataDB_PNC[".addFields"][] = "oc_victima";
$tdataDB_PNC[".addFields"][] = "relacion_vi_agre";
$tdataDB_PNC[".addFields"][] = "edad_agresor";
$tdataDB_PNC[".addFields"][] = "sexo_agresor";
$tdataDB_PNC[".addFields"][] = "ocupa_agresor";
$tdataDB_PNC[".addFields"][] = "movil";
$tdataDB_PNC[".addFields"][] = "tipo_arma";
$tdataDB_PNC[".addFields"][] = "canton_hecho";
$tdataDB_PNC[".addFields"][] = "colonia_hecho";
$tdataDB_PNC[".addFields"][] = "caserio_hecho";
$tdataDB_PNC[".addFields"][] = "calle_hecho";
$tdataDB_PNC[".addFields"][] = "avenida_hecho";
$tdataDB_PNC[".addFields"][] = "casa_hecho";
$tdataDB_PNC[".addFields"][] = "com_hecho";
$tdataDB_PNC[".addFields"][] = "barrio_hecho";
$tdataDB_PNC[".addFields"][] = "comp_hecho";
$tdataDB_PNC[".addFields"][] = "sector_ppd";
$tdataDB_PNC[".addFields"][] = "tipo";
$tdataDB_PNC[".addFields"][] = "nombre";
$tdataDB_PNC[".addFields"][] = "x";
$tdataDB_PNC[".addFields"][] = "y";
$tdataDB_PNC[".addFields"][] = "mes_corre";

$tdataDB_PNC[".masterListFields"] = array();
$tdataDB_PNC[".masterListFields"][] = "id1";
$tdataDB_PNC[".masterListFields"][] = "correlativo";
$tdataDB_PNC[".masterListFields"][] = "numero";
$tdataDB_PNC[".masterListFields"][] = "id";
$tdataDB_PNC[".masterListFields"][] = "codigo_muni";
$tdataDB_PNC[".masterListFields"][] = "numero2";
$tdataDB_PNC[".masterListFields"][] = "depart_he";
$tdataDB_PNC[".masterListFields"][] = "muni_he";
$tdataDB_PNC[".masterListFields"][] = "dire_hecho";
$tdataDB_PNC[".masterListFields"][] = "lugar_esp";
$tdataDB_PNC[".masterListFields"][] = "lugaranalisis";
$tdataDB_PNC[".masterListFields"][] = "area";
$tdataDB_PNC[".masterListFields"][] = "forma_cono";
$tdataDB_PNC[".masterListFields"][] = "delito";
$tdataDB_PNC[".masterListFields"][] = "delito_espe";
$tdataDB_PNC[".masterListFields"][] = "dia_hecho";
$tdataDB_PNC[".masterListFields"][] = "fecha_hecho";
$tdataDB_PNC[".masterListFields"][] = "mes_hecho";
$tdataDB_PNC[".masterListFields"][] = "aÑo_hecho";
$tdataDB_PNC[".masterListFields"][] = "edad_victima";
$tdataDB_PNC[".masterListFields"][] = "ran_eta_vic";
$tdataDB_PNC[".masterListFields"][] = "s_victima";
$tdataDB_PNC[".masterListFields"][] = "oc_victima";
$tdataDB_PNC[".masterListFields"][] = "relacion_vi_agre";
$tdataDB_PNC[".masterListFields"][] = "edad_agresor";
$tdataDB_PNC[".masterListFields"][] = "sexo_agresor";
$tdataDB_PNC[".masterListFields"][] = "ocupa_agresor";
$tdataDB_PNC[".masterListFields"][] = "movil";
$tdataDB_PNC[".masterListFields"][] = "tipo_arma";
$tdataDB_PNC[".masterListFields"][] = "canton_hecho";
$tdataDB_PNC[".masterListFields"][] = "colonia_hecho";
$tdataDB_PNC[".masterListFields"][] = "caserio_hecho";
$tdataDB_PNC[".masterListFields"][] = "calle_hecho";
$tdataDB_PNC[".masterListFields"][] = "avenida_hecho";
$tdataDB_PNC[".masterListFields"][] = "casa_hecho";
$tdataDB_PNC[".masterListFields"][] = "com_hecho";
$tdataDB_PNC[".masterListFields"][] = "barrio_hecho";
$tdataDB_PNC[".masterListFields"][] = "comp_hecho";
$tdataDB_PNC[".masterListFields"][] = "sector_ppd";
$tdataDB_PNC[".masterListFields"][] = "tipo";
$tdataDB_PNC[".masterListFields"][] = "nombre";
$tdataDB_PNC[".masterListFields"][] = "x";
$tdataDB_PNC[".masterListFields"][] = "y";
$tdataDB_PNC[".masterListFields"][] = "mes_corre";

$tdataDB_PNC[".inlineAddFields"] = array();
$tdataDB_PNC[".inlineAddFields"][] = "id1";
$tdataDB_PNC[".inlineAddFields"][] = "correlativo";
$tdataDB_PNC[".inlineAddFields"][] = "numero";
$tdataDB_PNC[".inlineAddFields"][] = "id";
$tdataDB_PNC[".inlineAddFields"][] = "codigo_muni";
$tdataDB_PNC[".inlineAddFields"][] = "numero2";
$tdataDB_PNC[".inlineAddFields"][] = "depart_he";
$tdataDB_PNC[".inlineAddFields"][] = "muni_he";
$tdataDB_PNC[".inlineAddFields"][] = "dire_hecho";
$tdataDB_PNC[".inlineAddFields"][] = "lugar_esp";
$tdataDB_PNC[".inlineAddFields"][] = "lugaranalisis";
$tdataDB_PNC[".inlineAddFields"][] = "area";
$tdataDB_PNC[".inlineAddFields"][] = "forma_cono";
$tdataDB_PNC[".inlineAddFields"][] = "delito";
$tdataDB_PNC[".inlineAddFields"][] = "delito_espe";
$tdataDB_PNC[".inlineAddFields"][] = "dia_hecho";
$tdataDB_PNC[".inlineAddFields"][] = "fecha_hecho";
$tdataDB_PNC[".inlineAddFields"][] = "mes_hecho";
$tdataDB_PNC[".inlineAddFields"][] = "aÑo_hecho";
$tdataDB_PNC[".inlineAddFields"][] = "edad_victima";
$tdataDB_PNC[".inlineAddFields"][] = "ran_eta_vic";
$tdataDB_PNC[".inlineAddFields"][] = "s_victima";
$tdataDB_PNC[".inlineAddFields"][] = "oc_victima";
$tdataDB_PNC[".inlineAddFields"][] = "relacion_vi_agre";
$tdataDB_PNC[".inlineAddFields"][] = "edad_agresor";
$tdataDB_PNC[".inlineAddFields"][] = "sexo_agresor";
$tdataDB_PNC[".inlineAddFields"][] = "ocupa_agresor";
$tdataDB_PNC[".inlineAddFields"][] = "movil";
$tdataDB_PNC[".inlineAddFields"][] = "tipo_arma";
$tdataDB_PNC[".inlineAddFields"][] = "canton_hecho";
$tdataDB_PNC[".inlineAddFields"][] = "colonia_hecho";
$tdataDB_PNC[".inlineAddFields"][] = "caserio_hecho";
$tdataDB_PNC[".inlineAddFields"][] = "calle_hecho";
$tdataDB_PNC[".inlineAddFields"][] = "avenida_hecho";
$tdataDB_PNC[".inlineAddFields"][] = "casa_hecho";
$tdataDB_PNC[".inlineAddFields"][] = "com_hecho";
$tdataDB_PNC[".inlineAddFields"][] = "barrio_hecho";
$tdataDB_PNC[".inlineAddFields"][] = "comp_hecho";
$tdataDB_PNC[".inlineAddFields"][] = "sector_ppd";
$tdataDB_PNC[".inlineAddFields"][] = "tipo";
$tdataDB_PNC[".inlineAddFields"][] = "nombre";
$tdataDB_PNC[".inlineAddFields"][] = "x";
$tdataDB_PNC[".inlineAddFields"][] = "y";
$tdataDB_PNC[".inlineAddFields"][] = "mes_corre";

$tdataDB_PNC[".editFields"] = array();
$tdataDB_PNC[".editFields"][] = "id1";
$tdataDB_PNC[".editFields"][] = "correlativo";
$tdataDB_PNC[".editFields"][] = "numero";
$tdataDB_PNC[".editFields"][] = "id";
$tdataDB_PNC[".editFields"][] = "codigo_muni";
$tdataDB_PNC[".editFields"][] = "numero2";
$tdataDB_PNC[".editFields"][] = "depart_he";
$tdataDB_PNC[".editFields"][] = "muni_he";
$tdataDB_PNC[".editFields"][] = "dire_hecho";
$tdataDB_PNC[".editFields"][] = "lugar_esp";
$tdataDB_PNC[".editFields"][] = "lugaranalisis";
$tdataDB_PNC[".editFields"][] = "area";
$tdataDB_PNC[".editFields"][] = "forma_cono";
$tdataDB_PNC[".editFields"][] = "delito";
$tdataDB_PNC[".editFields"][] = "delito_espe";
$tdataDB_PNC[".editFields"][] = "dia_hecho";
$tdataDB_PNC[".editFields"][] = "fecha_hecho";
$tdataDB_PNC[".editFields"][] = "mes_hecho";
$tdataDB_PNC[".editFields"][] = "aÑo_hecho";
$tdataDB_PNC[".editFields"][] = "edad_victima";
$tdataDB_PNC[".editFields"][] = "ran_eta_vic";
$tdataDB_PNC[".editFields"][] = "s_victima";
$tdataDB_PNC[".editFields"][] = "oc_victima";
$tdataDB_PNC[".editFields"][] = "relacion_vi_agre";
$tdataDB_PNC[".editFields"][] = "edad_agresor";
$tdataDB_PNC[".editFields"][] = "sexo_agresor";
$tdataDB_PNC[".editFields"][] = "ocupa_agresor";
$tdataDB_PNC[".editFields"][] = "movil";
$tdataDB_PNC[".editFields"][] = "tipo_arma";
$tdataDB_PNC[".editFields"][] = "canton_hecho";
$tdataDB_PNC[".editFields"][] = "colonia_hecho";
$tdataDB_PNC[".editFields"][] = "caserio_hecho";
$tdataDB_PNC[".editFields"][] = "calle_hecho";
$tdataDB_PNC[".editFields"][] = "avenida_hecho";
$tdataDB_PNC[".editFields"][] = "casa_hecho";
$tdataDB_PNC[".editFields"][] = "com_hecho";
$tdataDB_PNC[".editFields"][] = "barrio_hecho";
$tdataDB_PNC[".editFields"][] = "comp_hecho";
$tdataDB_PNC[".editFields"][] = "sector_ppd";
$tdataDB_PNC[".editFields"][] = "tipo";
$tdataDB_PNC[".editFields"][] = "nombre";
$tdataDB_PNC[".editFields"][] = "x";
$tdataDB_PNC[".editFields"][] = "y";
$tdataDB_PNC[".editFields"][] = "mes_corre";

$tdataDB_PNC[".inlineEditFields"] = array();
$tdataDB_PNC[".inlineEditFields"][] = "id1";
$tdataDB_PNC[".inlineEditFields"][] = "correlativo";
$tdataDB_PNC[".inlineEditFields"][] = "numero";
$tdataDB_PNC[".inlineEditFields"][] = "id";
$tdataDB_PNC[".inlineEditFields"][] = "codigo_muni";
$tdataDB_PNC[".inlineEditFields"][] = "numero2";
$tdataDB_PNC[".inlineEditFields"][] = "depart_he";
$tdataDB_PNC[".inlineEditFields"][] = "muni_he";
$tdataDB_PNC[".inlineEditFields"][] = "dire_hecho";
$tdataDB_PNC[".inlineEditFields"][] = "lugar_esp";
$tdataDB_PNC[".inlineEditFields"][] = "lugaranalisis";
$tdataDB_PNC[".inlineEditFields"][] = "area";
$tdataDB_PNC[".inlineEditFields"][] = "forma_cono";
$tdataDB_PNC[".inlineEditFields"][] = "delito";
$tdataDB_PNC[".inlineEditFields"][] = "delito_espe";
$tdataDB_PNC[".inlineEditFields"][] = "dia_hecho";
$tdataDB_PNC[".inlineEditFields"][] = "fecha_hecho";
$tdataDB_PNC[".inlineEditFields"][] = "mes_hecho";
$tdataDB_PNC[".inlineEditFields"][] = "aÑo_hecho";
$tdataDB_PNC[".inlineEditFields"][] = "edad_victima";
$tdataDB_PNC[".inlineEditFields"][] = "ran_eta_vic";
$tdataDB_PNC[".inlineEditFields"][] = "s_victima";
$tdataDB_PNC[".inlineEditFields"][] = "oc_victima";
$tdataDB_PNC[".inlineEditFields"][] = "relacion_vi_agre";
$tdataDB_PNC[".inlineEditFields"][] = "edad_agresor";
$tdataDB_PNC[".inlineEditFields"][] = "sexo_agresor";
$tdataDB_PNC[".inlineEditFields"][] = "ocupa_agresor";
$tdataDB_PNC[".inlineEditFields"][] = "movil";
$tdataDB_PNC[".inlineEditFields"][] = "tipo_arma";
$tdataDB_PNC[".inlineEditFields"][] = "canton_hecho";
$tdataDB_PNC[".inlineEditFields"][] = "colonia_hecho";
$tdataDB_PNC[".inlineEditFields"][] = "caserio_hecho";
$tdataDB_PNC[".inlineEditFields"][] = "calle_hecho";
$tdataDB_PNC[".inlineEditFields"][] = "avenida_hecho";
$tdataDB_PNC[".inlineEditFields"][] = "casa_hecho";
$tdataDB_PNC[".inlineEditFields"][] = "com_hecho";
$tdataDB_PNC[".inlineEditFields"][] = "barrio_hecho";
$tdataDB_PNC[".inlineEditFields"][] = "comp_hecho";
$tdataDB_PNC[".inlineEditFields"][] = "sector_ppd";
$tdataDB_PNC[".inlineEditFields"][] = "tipo";
$tdataDB_PNC[".inlineEditFields"][] = "nombre";
$tdataDB_PNC[".inlineEditFields"][] = "x";
$tdataDB_PNC[".inlineEditFields"][] = "y";
$tdataDB_PNC[".inlineEditFields"][] = "mes_corre";

$tdataDB_PNC[".updateSelectedFields"] = array();
$tdataDB_PNC[".updateSelectedFields"][] = "id1";
$tdataDB_PNC[".updateSelectedFields"][] = "correlativo";
$tdataDB_PNC[".updateSelectedFields"][] = "numero";
$tdataDB_PNC[".updateSelectedFields"][] = "id";
$tdataDB_PNC[".updateSelectedFields"][] = "codigo_muni";
$tdataDB_PNC[".updateSelectedFields"][] = "numero2";
$tdataDB_PNC[".updateSelectedFields"][] = "depart_he";
$tdataDB_PNC[".updateSelectedFields"][] = "muni_he";
$tdataDB_PNC[".updateSelectedFields"][] = "dire_hecho";
$tdataDB_PNC[".updateSelectedFields"][] = "lugar_esp";
$tdataDB_PNC[".updateSelectedFields"][] = "lugaranalisis";
$tdataDB_PNC[".updateSelectedFields"][] = "area";
$tdataDB_PNC[".updateSelectedFields"][] = "forma_cono";
$tdataDB_PNC[".updateSelectedFields"][] = "delito";
$tdataDB_PNC[".updateSelectedFields"][] = "delito_espe";
$tdataDB_PNC[".updateSelectedFields"][] = "dia_hecho";
$tdataDB_PNC[".updateSelectedFields"][] = "fecha_hecho";
$tdataDB_PNC[".updateSelectedFields"][] = "mes_hecho";
$tdataDB_PNC[".updateSelectedFields"][] = "aÑo_hecho";
$tdataDB_PNC[".updateSelectedFields"][] = "edad_victima";
$tdataDB_PNC[".updateSelectedFields"][] = "ran_eta_vic";
$tdataDB_PNC[".updateSelectedFields"][] = "s_victima";
$tdataDB_PNC[".updateSelectedFields"][] = "oc_victima";
$tdataDB_PNC[".updateSelectedFields"][] = "relacion_vi_agre";
$tdataDB_PNC[".updateSelectedFields"][] = "edad_agresor";
$tdataDB_PNC[".updateSelectedFields"][] = "sexo_agresor";
$tdataDB_PNC[".updateSelectedFields"][] = "ocupa_agresor";
$tdataDB_PNC[".updateSelectedFields"][] = "movil";
$tdataDB_PNC[".updateSelectedFields"][] = "tipo_arma";
$tdataDB_PNC[".updateSelectedFields"][] = "canton_hecho";
$tdataDB_PNC[".updateSelectedFields"][] = "colonia_hecho";
$tdataDB_PNC[".updateSelectedFields"][] = "caserio_hecho";
$tdataDB_PNC[".updateSelectedFields"][] = "calle_hecho";
$tdataDB_PNC[".updateSelectedFields"][] = "avenida_hecho";
$tdataDB_PNC[".updateSelectedFields"][] = "casa_hecho";
$tdataDB_PNC[".updateSelectedFields"][] = "com_hecho";
$tdataDB_PNC[".updateSelectedFields"][] = "barrio_hecho";
$tdataDB_PNC[".updateSelectedFields"][] = "comp_hecho";
$tdataDB_PNC[".updateSelectedFields"][] = "sector_ppd";
$tdataDB_PNC[".updateSelectedFields"][] = "tipo";
$tdataDB_PNC[".updateSelectedFields"][] = "nombre";
$tdataDB_PNC[".updateSelectedFields"][] = "x";
$tdataDB_PNC[".updateSelectedFields"][] = "y";
$tdataDB_PNC[".updateSelectedFields"][] = "mes_corre";


$tdataDB_PNC[".exportFields"] = array();
$tdataDB_PNC[".exportFields"][] = "id1";
$tdataDB_PNC[".exportFields"][] = "correlativo";
$tdataDB_PNC[".exportFields"][] = "numero";
$tdataDB_PNC[".exportFields"][] = "id";
$tdataDB_PNC[".exportFields"][] = "codigo_muni";
$tdataDB_PNC[".exportFields"][] = "numero2";
$tdataDB_PNC[".exportFields"][] = "depart_he";
$tdataDB_PNC[".exportFields"][] = "muni_he";
$tdataDB_PNC[".exportFields"][] = "dire_hecho";
$tdataDB_PNC[".exportFields"][] = "lugar_esp";
$tdataDB_PNC[".exportFields"][] = "lugaranalisis";
$tdataDB_PNC[".exportFields"][] = "area";
$tdataDB_PNC[".exportFields"][] = "forma_cono";
$tdataDB_PNC[".exportFields"][] = "delito";
$tdataDB_PNC[".exportFields"][] = "delito_espe";
$tdataDB_PNC[".exportFields"][] = "dia_hecho";
$tdataDB_PNC[".exportFields"][] = "fecha_hecho";
$tdataDB_PNC[".exportFields"][] = "mes_hecho";
$tdataDB_PNC[".exportFields"][] = "aÑo_hecho";
$tdataDB_PNC[".exportFields"][] = "edad_victima";
$tdataDB_PNC[".exportFields"][] = "ran_eta_vic";
$tdataDB_PNC[".exportFields"][] = "s_victima";
$tdataDB_PNC[".exportFields"][] = "oc_victima";
$tdataDB_PNC[".exportFields"][] = "relacion_vi_agre";
$tdataDB_PNC[".exportFields"][] = "edad_agresor";
$tdataDB_PNC[".exportFields"][] = "sexo_agresor";
$tdataDB_PNC[".exportFields"][] = "ocupa_agresor";
$tdataDB_PNC[".exportFields"][] = "movil";
$tdataDB_PNC[".exportFields"][] = "tipo_arma";
$tdataDB_PNC[".exportFields"][] = "canton_hecho";
$tdataDB_PNC[".exportFields"][] = "colonia_hecho";
$tdataDB_PNC[".exportFields"][] = "caserio_hecho";
$tdataDB_PNC[".exportFields"][] = "calle_hecho";
$tdataDB_PNC[".exportFields"][] = "avenida_hecho";
$tdataDB_PNC[".exportFields"][] = "casa_hecho";
$tdataDB_PNC[".exportFields"][] = "com_hecho";
$tdataDB_PNC[".exportFields"][] = "barrio_hecho";
$tdataDB_PNC[".exportFields"][] = "comp_hecho";
$tdataDB_PNC[".exportFields"][] = "sector_ppd";
$tdataDB_PNC[".exportFields"][] = "tipo";
$tdataDB_PNC[".exportFields"][] = "nombre";
$tdataDB_PNC[".exportFields"][] = "x";
$tdataDB_PNC[".exportFields"][] = "y";
$tdataDB_PNC[".exportFields"][] = "mes_corre";

$tdataDB_PNC[".importFields"] = array();
$tdataDB_PNC[".importFields"][] = "id1";
$tdataDB_PNC[".importFields"][] = "correlativo";
$tdataDB_PNC[".importFields"][] = "numero";
$tdataDB_PNC[".importFields"][] = "id";
$tdataDB_PNC[".importFields"][] = "codigo_muni";
$tdataDB_PNC[".importFields"][] = "numero2";
$tdataDB_PNC[".importFields"][] = "depart_he";
$tdataDB_PNC[".importFields"][] = "muni_he";
$tdataDB_PNC[".importFields"][] = "dire_hecho";
$tdataDB_PNC[".importFields"][] = "lugar_esp";
$tdataDB_PNC[".importFields"][] = "lugaranalisis";
$tdataDB_PNC[".importFields"][] = "area";
$tdataDB_PNC[".importFields"][] = "forma_cono";
$tdataDB_PNC[".importFields"][] = "delito";
$tdataDB_PNC[".importFields"][] = "delito_espe";
$tdataDB_PNC[".importFields"][] = "dia_hecho";
$tdataDB_PNC[".importFields"][] = "fecha_hecho";
$tdataDB_PNC[".importFields"][] = "mes_hecho";
$tdataDB_PNC[".importFields"][] = "aÑo_hecho";
$tdataDB_PNC[".importFields"][] = "edad_victima";
$tdataDB_PNC[".importFields"][] = "ran_eta_vic";
$tdataDB_PNC[".importFields"][] = "s_victima";
$tdataDB_PNC[".importFields"][] = "oc_victima";
$tdataDB_PNC[".importFields"][] = "relacion_vi_agre";
$tdataDB_PNC[".importFields"][] = "edad_agresor";
$tdataDB_PNC[".importFields"][] = "sexo_agresor";
$tdataDB_PNC[".importFields"][] = "ocupa_agresor";
$tdataDB_PNC[".importFields"][] = "movil";
$tdataDB_PNC[".importFields"][] = "tipo_arma";
$tdataDB_PNC[".importFields"][] = "canton_hecho";
$tdataDB_PNC[".importFields"][] = "colonia_hecho";
$tdataDB_PNC[".importFields"][] = "caserio_hecho";
$tdataDB_PNC[".importFields"][] = "calle_hecho";
$tdataDB_PNC[".importFields"][] = "avenida_hecho";
$tdataDB_PNC[".importFields"][] = "casa_hecho";
$tdataDB_PNC[".importFields"][] = "com_hecho";
$tdataDB_PNC[".importFields"][] = "barrio_hecho";
$tdataDB_PNC[".importFields"][] = "comp_hecho";
$tdataDB_PNC[".importFields"][] = "sector_ppd";
$tdataDB_PNC[".importFields"][] = "tipo";
$tdataDB_PNC[".importFields"][] = "nombre";
$tdataDB_PNC[".importFields"][] = "x";
$tdataDB_PNC[".importFields"][] = "y";
$tdataDB_PNC[".importFields"][] = "mes_corre";

$tdataDB_PNC[".printFields"] = array();
$tdataDB_PNC[".printFields"][] = "id1";
$tdataDB_PNC[".printFields"][] = "correlativo";
$tdataDB_PNC[".printFields"][] = "numero";
$tdataDB_PNC[".printFields"][] = "id";
$tdataDB_PNC[".printFields"][] = "codigo_muni";
$tdataDB_PNC[".printFields"][] = "numero2";
$tdataDB_PNC[".printFields"][] = "depart_he";
$tdataDB_PNC[".printFields"][] = "muni_he";
$tdataDB_PNC[".printFields"][] = "dire_hecho";
$tdataDB_PNC[".printFields"][] = "lugar_esp";
$tdataDB_PNC[".printFields"][] = "lugaranalisis";
$tdataDB_PNC[".printFields"][] = "area";
$tdataDB_PNC[".printFields"][] = "forma_cono";
$tdataDB_PNC[".printFields"][] = "delito";
$tdataDB_PNC[".printFields"][] = "delito_espe";
$tdataDB_PNC[".printFields"][] = "dia_hecho";
$tdataDB_PNC[".printFields"][] = "fecha_hecho";
$tdataDB_PNC[".printFields"][] = "mes_hecho";
$tdataDB_PNC[".printFields"][] = "aÑo_hecho";
$tdataDB_PNC[".printFields"][] = "edad_victima";
$tdataDB_PNC[".printFields"][] = "ran_eta_vic";
$tdataDB_PNC[".printFields"][] = "s_victima";
$tdataDB_PNC[".printFields"][] = "oc_victima";
$tdataDB_PNC[".printFields"][] = "relacion_vi_agre";
$tdataDB_PNC[".printFields"][] = "edad_agresor";
$tdataDB_PNC[".printFields"][] = "sexo_agresor";
$tdataDB_PNC[".printFields"][] = "ocupa_agresor";
$tdataDB_PNC[".printFields"][] = "movil";
$tdataDB_PNC[".printFields"][] = "tipo_arma";
$tdataDB_PNC[".printFields"][] = "canton_hecho";
$tdataDB_PNC[".printFields"][] = "colonia_hecho";
$tdataDB_PNC[".printFields"][] = "caserio_hecho";
$tdataDB_PNC[".printFields"][] = "calle_hecho";
$tdataDB_PNC[".printFields"][] = "avenida_hecho";
$tdataDB_PNC[".printFields"][] = "casa_hecho";
$tdataDB_PNC[".printFields"][] = "com_hecho";
$tdataDB_PNC[".printFields"][] = "barrio_hecho";
$tdataDB_PNC[".printFields"][] = "comp_hecho";
$tdataDB_PNC[".printFields"][] = "sector_ppd";
$tdataDB_PNC[".printFields"][] = "tipo";
$tdataDB_PNC[".printFields"][] = "nombre";
$tdataDB_PNC[".printFields"][] = "x";
$tdataDB_PNC[".printFields"][] = "y";
$tdataDB_PNC[".printFields"][] = "mes_corre";

//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id1";
	$fdata["GoodName"] = "id1";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","id1");
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




	$tdataDB_PNC["id1"] = $fdata;
//	correlativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "correlativo";
	$fdata["GoodName"] = "correlativo";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","correlativo");
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




	$tdataDB_PNC["correlativo"] = $fdata;
//	numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "numero";
	$fdata["GoodName"] = "numero";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","numero");
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




	$tdataDB_PNC["numero"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","id");
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




	$tdataDB_PNC["id"] = $fdata;
//	codigo_muni
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "codigo_muni";
	$fdata["GoodName"] = "codigo_muni";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","codigo_muni");
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




	$tdataDB_PNC["codigo_muni"] = $fdata;
//	numero2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "numero2";
	$fdata["GoodName"] = "numero2";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","numero2");
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




	$tdataDB_PNC["numero2"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","depart_he");
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




	$tdataDB_PNC["depart_he"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","muni_he");
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




	$tdataDB_PNC["muni_he"] = $fdata;
//	dire_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dire_hecho";
	$fdata["GoodName"] = "dire_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","dire_hecho");
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

		$fdata["strField"] = "dire_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dire_hecho";

	
	
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




	$tdataDB_PNC["dire_hecho"] = $fdata;
//	lugar_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "lugar_esp";
	$fdata["GoodName"] = "lugar_esp";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","lugar_esp");
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




	$tdataDB_PNC["lugar_esp"] = $fdata;
//	lugaranalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "lugaranalisis";
	$fdata["GoodName"] = "lugaranalisis";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","lugaranalisis");
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




	$tdataDB_PNC["lugaranalisis"] = $fdata;
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","area");
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




	$tdataDB_PNC["area"] = $fdata;
//	forma_cono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "forma_cono";
	$fdata["GoodName"] = "forma_cono";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","forma_cono");
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




	$tdataDB_PNC["forma_cono"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","delito");
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




	$tdataDB_PNC["delito"] = $fdata;
//	delito_espe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "delito_espe";
	$fdata["GoodName"] = "delito_espe";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","delito_espe");
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




	$tdataDB_PNC["delito_espe"] = $fdata;
//	dia_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "dia_hecho";
	$fdata["GoodName"] = "dia_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","dia_hecho");
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




	$tdataDB_PNC["dia_hecho"] = $fdata;
//	fecha_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "fecha_hecho";
	$fdata["GoodName"] = "fecha_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","fecha_hecho");
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

		$fdata["strField"] = "fecha_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_hecho";

	
	
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




	$tdataDB_PNC["fecha_hecho"] = $fdata;
//	mes_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "mes_hecho";
	$fdata["GoodName"] = "mes_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","mes_hecho");
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




	$tdataDB_PNC["mes_hecho"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","a_o_hecho");
	$fdata["FieldType"] = 5;

	
	
	
			
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




	$tdataDB_PNC["aÑo_hecho"] = $fdata;
//	edad_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "edad_victima";
	$fdata["GoodName"] = "edad_victima";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","edad_victima");
	$fdata["FieldType"] = 5;

	
	
	
			
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

		$fdata["strField"] = "edad_victima";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edad_victima";

	
	
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




	$tdataDB_PNC["edad_victima"] = $fdata;
//	ran_eta_vic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "ran_eta_vic";
	$fdata["GoodName"] = "ran_eta_vic";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","ran_eta_vic");
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




	$tdataDB_PNC["ran_eta_vic"] = $fdata;
//	s_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "s_victima";
	$fdata["GoodName"] = "s_victima";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","s_victima");
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




	$tdataDB_PNC["s_victima"] = $fdata;
//	oc_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "oc_victima";
	$fdata["GoodName"] = "oc_victima";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","oc_victima");
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




	$tdataDB_PNC["oc_victima"] = $fdata;
//	relacion_vi_agre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "relacion_vi_agre";
	$fdata["GoodName"] = "relacion_vi_agre";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","relacion_vi_agre");
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




	$tdataDB_PNC["relacion_vi_agre"] = $fdata;
//	edad_agresor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "edad_agresor";
	$fdata["GoodName"] = "edad_agresor";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","edad_agresor");
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

		$fdata["strField"] = "edad_agresor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edad_agresor";

	
	
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




	$tdataDB_PNC["edad_agresor"] = $fdata;
//	sexo_agresor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "sexo_agresor";
	$fdata["GoodName"] = "sexo_agresor";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","sexo_agresor");
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

		$fdata["strField"] = "sexo_agresor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sexo_agresor";

	
	
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




	$tdataDB_PNC["sexo_agresor"] = $fdata;
//	ocupa_agresor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "ocupa_agresor";
	$fdata["GoodName"] = "ocupa_agresor";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","ocupa_agresor");
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

		$fdata["strField"] = "ocupa_agresor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ocupa_agresor";

	
	
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




	$tdataDB_PNC["ocupa_agresor"] = $fdata;
//	movil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "movil";
	$fdata["GoodName"] = "movil";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","movil");
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




	$tdataDB_PNC["movil"] = $fdata;
//	tipo_arma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "tipo_arma";
	$fdata["GoodName"] = "tipo_arma";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","tipo_arma");
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




	$tdataDB_PNC["tipo_arma"] = $fdata;
//	canton_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "canton_hecho";
	$fdata["GoodName"] = "canton_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","canton_hecho");
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

		$fdata["strField"] = "canton_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "canton_hecho";

	
	
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




	$tdataDB_PNC["canton_hecho"] = $fdata;
//	colonia_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "colonia_hecho";
	$fdata["GoodName"] = "colonia_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","colonia_hecho");
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

		$fdata["strField"] = "colonia_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "colonia_hecho";

	
	
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




	$tdataDB_PNC["colonia_hecho"] = $fdata;
//	caserio_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "caserio_hecho";
	$fdata["GoodName"] = "caserio_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","caserio_hecho");
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

		$fdata["strField"] = "caserio_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "caserio_hecho";

	
	
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




	$tdataDB_PNC["caserio_hecho"] = $fdata;
//	calle_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "calle_hecho";
	$fdata["GoodName"] = "calle_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","calle_hecho");
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

		$fdata["strField"] = "calle_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calle_hecho";

	
	
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




	$tdataDB_PNC["calle_hecho"] = $fdata;
//	avenida_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "avenida_hecho";
	$fdata["GoodName"] = "avenida_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","avenida_hecho");
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

		$fdata["strField"] = "avenida_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "avenida_hecho";

	
	
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




	$tdataDB_PNC["avenida_hecho"] = $fdata;
//	casa_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "casa_hecho";
	$fdata["GoodName"] = "casa_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","casa_hecho");
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

		$fdata["strField"] = "casa_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "casa_hecho";

	
	
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




	$tdataDB_PNC["casa_hecho"] = $fdata;
//	com_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "com_hecho";
	$fdata["GoodName"] = "com_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","com_hecho");
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

		$fdata["strField"] = "com_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "com_hecho";

	
	
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




	$tdataDB_PNC["com_hecho"] = $fdata;
//	barrio_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "barrio_hecho";
	$fdata["GoodName"] = "barrio_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","barrio_hecho");
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

		$fdata["strField"] = "barrio_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "barrio_hecho";

	
	
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




	$tdataDB_PNC["barrio_hecho"] = $fdata;
//	comp_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "comp_hecho";
	$fdata["GoodName"] = "comp_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","comp_hecho");
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

		$fdata["strField"] = "comp_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comp_hecho";

	
	
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




	$tdataDB_PNC["comp_hecho"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","sector_ppd");
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




	$tdataDB_PNC["sector_ppd"] = $fdata;
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","tipo");
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

		$fdata["strField"] = "tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo";

	
	
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




	$tdataDB_PNC["tipo"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","nombre");
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

		$fdata["strField"] = "nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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




	$tdataDB_PNC["nombre"] = $fdata;
//	x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "x";
	$fdata["GoodName"] = "x";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","x");
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

		$fdata["strField"] = "x";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "x";

	
	
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




	$tdataDB_PNC["x"] = $fdata;
//	y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "y";
	$fdata["GoodName"] = "y";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","y");
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

		$fdata["strField"] = "y";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "y";

	
	
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




	$tdataDB_PNC["y"] = $fdata;
//	mes_corre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "mes_corre";
	$fdata["GoodName"] = "mes_corre";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("DB_PNC","mes_corre");
	$fdata["FieldType"] = 3;

	
	
	
			
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

		$fdata["strField"] = "mes_corre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mes_corre";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdataDB_PNC["mes_corre"] = $fdata;


$tables_data["DB PNC"]=&$tdataDB_PNC;
$field_labels["DB_PNC"] = &$fieldLabelsDB_PNC;
$fieldToolTips["DB_PNC"] = &$fieldToolTipsDB_PNC;
$placeHolders["DB_PNC"] = &$placeHoldersDB_PNC;
$page_titles["DB_PNC"] = &$pageTitlesDB_PNC;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["DB PNC"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["DB PNC"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_DB_PNC()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id1,  correlativo,  numero,  id,  codigo_muni,  numero2,  depart_he,  muni_he,  dire_hecho,  lugar_esp,  lugaranalisis,  area,  forma_cono,  delito,  delito_espe,  dia_hecho,  fecha_hecho,  mes_hecho,  `aÑo_hecho`,  edad_victima,  ran_eta_vic,  s_victima,  oc_victima,  relacion_vi_agre,  edad_agresor,  sexo_agresor,  ocupa_agresor,  movil,  tipo_arma,  canton_hecho,  colonia_hecho,  caserio_hecho,  calle_hecho,  avenida_hecho,  casa_hecho,  com_hecho,  barrio_hecho,  comp_hecho,  sector_ppd,  tipo,  nombre,  x,  y,  mes_corre";
$proto0["m_strFrom"] = "FROM hechos_delictivos1";
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
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto6["m_sql"] = "id1";
$proto6["m_srcTableName"] = "DB PNC";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "correlativo",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto8["m_sql"] = "correlativo";
$proto8["m_srcTableName"] = "DB PNC";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "numero",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto10["m_sql"] = "numero";
$proto10["m_srcTableName"] = "DB PNC";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto12["m_sql"] = "id";
$proto12["m_srcTableName"] = "DB PNC";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo_muni",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto14["m_sql"] = "codigo_muni";
$proto14["m_srcTableName"] = "DB PNC";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "numero2",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto16["m_sql"] = "numero2";
$proto16["m_srcTableName"] = "DB PNC";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto18["m_sql"] = "depart_he";
$proto18["m_srcTableName"] = "DB PNC";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto20["m_sql"] = "muni_he";
$proto20["m_srcTableName"] = "DB PNC";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dire_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto22["m_sql"] = "dire_hecho";
$proto22["m_srcTableName"] = "DB PNC";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "lugar_esp",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto24["m_sql"] = "lugar_esp";
$proto24["m_srcTableName"] = "DB PNC";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "lugaranalisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto26["m_sql"] = "lugaranalisis";
$proto26["m_srcTableName"] = "DB PNC";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto28["m_sql"] = "area";
$proto28["m_srcTableName"] = "DB PNC";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "forma_cono",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto30["m_sql"] = "forma_cono";
$proto30["m_srcTableName"] = "DB PNC";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto32["m_sql"] = "delito";
$proto32["m_srcTableName"] = "DB PNC";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "delito_espe",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto34["m_sql"] = "delito_espe";
$proto34["m_srcTableName"] = "DB PNC";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto36["m_sql"] = "dia_hecho";
$proto36["m_srcTableName"] = "DB PNC";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto38["m_sql"] = "fecha_hecho";
$proto38["m_srcTableName"] = "DB PNC";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "mes_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto40["m_sql"] = "mes_hecho";
$proto40["m_srcTableName"] = "DB PNC";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto42["m_sql"] = "`aÑo_hecho`";
$proto42["m_srcTableName"] = "DB PNC";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "edad_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto44["m_sql"] = "edad_victima";
$proto44["m_srcTableName"] = "DB PNC";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "ran_eta_vic",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto46["m_sql"] = "ran_eta_vic";
$proto46["m_srcTableName"] = "DB PNC";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto48["m_sql"] = "s_victima";
$proto48["m_srcTableName"] = "DB PNC";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "oc_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto50["m_sql"] = "oc_victima";
$proto50["m_srcTableName"] = "DB PNC";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "relacion_vi_agre",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto52["m_sql"] = "relacion_vi_agre";
$proto52["m_srcTableName"] = "DB PNC";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "edad_agresor",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto54["m_sql"] = "edad_agresor";
$proto54["m_srcTableName"] = "DB PNC";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo_agresor",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto56["m_sql"] = "sexo_agresor";
$proto56["m_srcTableName"] = "DB PNC";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "ocupa_agresor",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto58["m_sql"] = "ocupa_agresor";
$proto58["m_srcTableName"] = "DB PNC";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "movil",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto60["m_sql"] = "movil";
$proto60["m_srcTableName"] = "DB PNC";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_arma",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto62["m_sql"] = "tipo_arma";
$proto62["m_srcTableName"] = "DB PNC";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "canton_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto64["m_sql"] = "canton_hecho";
$proto64["m_srcTableName"] = "DB PNC";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "colonia_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto66["m_sql"] = "colonia_hecho";
$proto66["m_srcTableName"] = "DB PNC";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "caserio_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto68["m_sql"] = "caserio_hecho";
$proto68["m_srcTableName"] = "DB PNC";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "calle_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto70["m_sql"] = "calle_hecho";
$proto70["m_srcTableName"] = "DB PNC";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "avenida_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto72["m_sql"] = "avenida_hecho";
$proto72["m_srcTableName"] = "DB PNC";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "casa_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto74["m_sql"] = "casa_hecho";
$proto74["m_srcTableName"] = "DB PNC";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "com_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto76["m_sql"] = "com_hecho";
$proto76["m_srcTableName"] = "DB PNC";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "barrio_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto78["m_sql"] = "barrio_hecho";
$proto78["m_srcTableName"] = "DB PNC";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "comp_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto80["m_sql"] = "comp_hecho";
$proto80["m_srcTableName"] = "DB PNC";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto82["m_sql"] = "sector_ppd";
$proto82["m_srcTableName"] = "DB PNC";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto84["m_sql"] = "tipo";
$proto84["m_srcTableName"] = "DB PNC";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto86["m_sql"] = "nombre";
$proto86["m_srcTableName"] = "DB PNC";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "x",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto88["m_sql"] = "x";
$proto88["m_srcTableName"] = "DB PNC";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "y",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto90["m_sql"] = "y";
$proto90["m_srcTableName"] = "DB PNC";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "mes_corre",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "DB PNC"
));

$proto92["m_sql"] = "mes_corre";
$proto92["m_srcTableName"] = "DB PNC";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto94=array();
$proto94["m_link"] = "SQLL_MAIN";
			$proto95=array();
$proto95["m_strName"] = "hechos_delictivos1";
$proto95["m_srcTableName"] = "DB PNC";
$proto95["m_columns"] = array();
$proto95["m_columns"][] = "id1";
$proto95["m_columns"][] = "id11";
$proto95["m_columns"][] = "correlativo";
$proto95["m_columns"][] = "numero";
$proto95["m_columns"][] = "id";
$proto95["m_columns"][] = "numero2";
$proto95["m_columns"][] = "lugaranalisis";
$proto95["m_columns"][] = "area";
$proto95["m_columns"][] = "delito";
$proto95["m_columns"][] = "codigo_muni";
$proto95["m_columns"][] = "depart_he";
$proto95["m_columns"][] = "muni_he";
$proto95["m_columns"][] = "dire_hecho";
$proto95["m_columns"][] = "lugar_esp";
$proto95["m_columns"][] = "forma_cono";
$proto95["m_columns"][] = "delito_espe";
$proto95["m_columns"][] = "dia_hecho";
$proto95["m_columns"][] = "hora_hecho";
$proto95["m_columns"][] = "rango_hora";
$proto95["m_columns"][] = "fecha_hecho";
$proto95["m_columns"][] = "mes_hecho";
$proto95["m_columns"][] = "aÑo_hecho";
$proto95["m_columns"][] = "edad_victima";
$proto95["m_columns"][] = "ran_eta_vic";
$proto95["m_columns"][] = "s_victima";
$proto95["m_columns"][] = "oc_victima";
$proto95["m_columns"][] = "relacion_vi_agre";
$proto95["m_columns"][] = "edad_agresor";
$proto95["m_columns"][] = "sexo_agresor";
$proto95["m_columns"][] = "ocupa_agresor";
$proto95["m_columns"][] = "movil";
$proto95["m_columns"][] = "tipo_arma";
$proto95["m_columns"][] = "canton_hecho";
$proto95["m_columns"][] = "colonia_hecho";
$proto95["m_columns"][] = "caserio_hecho";
$proto95["m_columns"][] = "calle_hecho";
$proto95["m_columns"][] = "avenida_hecho";
$proto95["m_columns"][] = "casa_hecho";
$proto95["m_columns"][] = "com_hecho";
$proto95["m_columns"][] = "barrio_hecho";
$proto95["m_columns"][] = "comp_hecho";
$proto95["m_columns"][] = "sector_ppd";
$proto95["m_columns"][] = "tipo";
$proto95["m_columns"][] = "nombre";
$proto95["m_columns"][] = "x";
$proto95["m_columns"][] = "y";
$proto95["m_columns"][] = "correlativo1";
$proto95["m_columns"][] = "mes_corre";
$proto95["m_columns"][] = "arma_analisis";
$proto95["m_columns"][] = "movil_he";
$proto95["m_columns"][] = "ocupa_analisis";
$proto95["m_columns"][] = "rel_vic_ag_anali";
$obj = new SQLTable($proto95);

$proto94["m_table"] = $obj;
$proto94["m_sql"] = "hechos_delictivos1";
$proto94["m_alias"] = "";
$proto94["m_srcTableName"] = "DB PNC";
$proto96=array();
$proto96["m_sql"] = "";
$proto96["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto96["m_column"]=$obj;
$proto96["m_contained"] = array();
$proto96["m_strCase"] = "";
$proto96["m_havingmode"] = false;
$proto96["m_inBrackets"] = false;
$proto96["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto96);

$proto94["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto94);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="DB PNC";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_DB_PNC = createSqlQuery_DB_PNC();


	
		;

																																												

$tdataDB_PNC[".sqlquery"] = $queryData_DB_PNC;

$tableEvents["DB PNC"] = new eventsBase;
$tdataDB_PNC[".hasEvents"] = false;

?>