<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahora_sustituir = array();
	$tdatahora_sustituir[".truncateText"] = true;
	$tdatahora_sustituir[".NumberOfChars"] = 80;
	$tdatahora_sustituir[".ShortName"] = "hora_sustituir";
	$tdatahora_sustituir[".OwnerID"] = "";
	$tdatahora_sustituir[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelshora_sustituir = array();
$fieldToolTipshora_sustituir = array();
$pageTitleshora_sustituir = array();
$placeHoldershora_sustituir = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshora_sustituir["Spanish"] = array();
	$fieldToolTipshora_sustituir["Spanish"] = array();
	$placeHoldershora_sustituir["Spanish"] = array();
	$pageTitleshora_sustituir["Spanish"] = array();
	$fieldLabelshora_sustituir["Spanish"]["id1"] = "Id1";
	$fieldToolTipshora_sustituir["Spanish"]["id1"] = "";
	$placeHoldershora_sustituir["Spanish"]["id1"] = "";
	$fieldLabelshora_sustituir["Spanish"]["correlativo"] = "Correlativo";
	$fieldToolTipshora_sustituir["Spanish"]["correlativo"] = "";
	$placeHoldershora_sustituir["Spanish"]["correlativo"] = "";
	$fieldLabelshora_sustituir["Spanish"]["numero"] = "Numero";
	$fieldToolTipshora_sustituir["Spanish"]["numero"] = "";
	$placeHoldershora_sustituir["Spanish"]["numero"] = "";
	$fieldLabelshora_sustituir["Spanish"]["id"] = "Id";
	$fieldToolTipshora_sustituir["Spanish"]["id"] = "";
	$placeHoldershora_sustituir["Spanish"]["id"] = "";
	$fieldLabelshora_sustituir["Spanish"]["codigo_muni"] = "Codigo Muni";
	$fieldToolTipshora_sustituir["Spanish"]["codigo_muni"] = "";
	$placeHoldershora_sustituir["Spanish"]["codigo_muni"] = "";
	$fieldLabelshora_sustituir["Spanish"]["numero2"] = "Numero2";
	$fieldToolTipshora_sustituir["Spanish"]["numero2"] = "";
	$placeHoldershora_sustituir["Spanish"]["numero2"] = "";
	$fieldLabelshora_sustituir["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipshora_sustituir["Spanish"]["depart_he"] = "";
	$placeHoldershora_sustituir["Spanish"]["depart_he"] = "";
	$fieldLabelshora_sustituir["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipshora_sustituir["Spanish"]["muni_he"] = "";
	$placeHoldershora_sustituir["Spanish"]["muni_he"] = "";
	$fieldLabelshora_sustituir["Spanish"]["dire_hecho"] = "Dire Hecho";
	$fieldToolTipshora_sustituir["Spanish"]["dire_hecho"] = "";
	$placeHoldershora_sustituir["Spanish"]["dire_hecho"] = "";
	$fieldLabelshora_sustituir["Spanish"]["lugar_esp"] = "Lugar Esp";
	$fieldToolTipshora_sustituir["Spanish"]["lugar_esp"] = "";
	$placeHoldershora_sustituir["Spanish"]["lugar_esp"] = "";
	$fieldLabelshora_sustituir["Spanish"]["lugaranalisis"] = "Lugaranalisis";
	$fieldToolTipshora_sustituir["Spanish"]["lugaranalisis"] = "";
	$placeHoldershora_sustituir["Spanish"]["lugaranalisis"] = "";
	$fieldLabelshora_sustituir["Spanish"]["area"] = "Area";
	$fieldToolTipshora_sustituir["Spanish"]["area"] = "";
	$placeHoldershora_sustituir["Spanish"]["area"] = "";
	$fieldLabelshora_sustituir["Spanish"]["forma_cono"] = "Forma Cono";
	$fieldToolTipshora_sustituir["Spanish"]["forma_cono"] = "";
	$placeHoldershora_sustituir["Spanish"]["forma_cono"] = "";
	$fieldLabelshora_sustituir["Spanish"]["delito"] = "Delito";
	$fieldToolTipshora_sustituir["Spanish"]["delito"] = "";
	$placeHoldershora_sustituir["Spanish"]["delito"] = "";
	$fieldLabelshora_sustituir["Spanish"]["delito_espe"] = "Delito Espe";
	$fieldToolTipshora_sustituir["Spanish"]["delito_espe"] = "";
	$placeHoldershora_sustituir["Spanish"]["delito_espe"] = "";
	$fieldLabelshora_sustituir["Spanish"]["dia_hecho"] = "Dia Hecho";
	$fieldToolTipshora_sustituir["Spanish"]["dia_hecho"] = "";
	$placeHoldershora_sustituir["Spanish"]["dia_hecho"] = "";
	$fieldLabelshora_sustituir["Spanish"]["hora_hecho"] = "Hora Hecho";
	$fieldToolTipshora_sustituir["Spanish"]["hora_hecho"] = "";
	$placeHoldershora_sustituir["Spanish"]["hora_hecho"] = "";
	$fieldLabelshora_sustituir["Spanish"]["rango_hora"] = "Rango Hora";
	$fieldToolTipshora_sustituir["Spanish"]["rango_hora"] = "";
	$placeHoldershora_sustituir["Spanish"]["rango_hora"] = "";
	$fieldLabelshora_sustituir["Spanish"]["fecha_hecho"] = "Fecha Hecho";
	$fieldToolTipshora_sustituir["Spanish"]["fecha_hecho"] = "";
	$placeHoldershora_sustituir["Spanish"]["fecha_hecho"] = "";
	$fieldLabelshora_sustituir["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipshora_sustituir["Spanish"]["a_o_hecho"] = "";
	$placeHoldershora_sustituir["Spanish"]["a_o_hecho"] = "";
	$fieldLabelshora_sustituir["Spanish"]["edad_victima"] = "Edad Victima";
	$fieldToolTipshora_sustituir["Spanish"]["edad_victima"] = "";
	$placeHoldershora_sustituir["Spanish"]["edad_victima"] = "";
	$fieldLabelshora_sustituir["Spanish"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipshora_sustituir["Spanish"]["ran_eta_vic"] = "";
	$placeHoldershora_sustituir["Spanish"]["ran_eta_vic"] = "";
	$fieldLabelshora_sustituir["Spanish"]["s_victima"] = "S Victima";
	$fieldToolTipshora_sustituir["Spanish"]["s_victima"] = "";
	$placeHoldershora_sustituir["Spanish"]["s_victima"] = "";
	$fieldLabelshora_sustituir["Spanish"]["oc_victima"] = "Oc Victima";
	$fieldToolTipshora_sustituir["Spanish"]["oc_victima"] = "";
	$placeHoldershora_sustituir["Spanish"]["oc_victima"] = "";
	$fieldLabelshora_sustituir["Spanish"]["relacion_vi_agre"] = "Relacion Vi Agre";
	$fieldToolTipshora_sustituir["Spanish"]["relacion_vi_agre"] = "";
	$placeHoldershora_sustituir["Spanish"]["relacion_vi_agre"] = "";
	$fieldLabelshora_sustituir["Spanish"]["edad_agresor"] = "Edad Agresor";
	$fieldToolTipshora_sustituir["Spanish"]["edad_agresor"] = "";
	$placeHoldershora_sustituir["Spanish"]["edad_agresor"] = "";
	$fieldLabelshora_sustituir["Spanish"]["sexo__agresor"] = "Sexo  Agresor";
	$fieldToolTipshora_sustituir["Spanish"]["sexo__agresor"] = "";
	$placeHoldershora_sustituir["Spanish"]["sexo__agresor"] = "";
	$fieldLabelshora_sustituir["Spanish"]["ocupa_agresor"] = "Ocupa Agresor";
	$fieldToolTipshora_sustituir["Spanish"]["ocupa_agresor"] = "";
	$placeHoldershora_sustituir["Spanish"]["ocupa_agresor"] = "";
	$fieldLabelshora_sustituir["Spanish"]["movil"] = "Movil";
	$fieldToolTipshora_sustituir["Spanish"]["movil"] = "";
	$placeHoldershora_sustituir["Spanish"]["movil"] = "";
	$fieldLabelshora_sustituir["Spanish"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipshora_sustituir["Spanish"]["tipo_arma"] = "";
	$placeHoldershora_sustituir["Spanish"]["tipo_arma"] = "";
	$fieldLabelshora_sustituir["Spanish"]["canton_hecho"] = "Canton Hecho";
	$fieldToolTipshora_sustituir["Spanish"]["canton_hecho"] = "";
	$placeHoldershora_sustituir["Spanish"]["canton_hecho"] = "";
	$fieldLabelshora_sustituir["Spanish"]["colonia_hecho"] = "Colonia Hecho";
	$fieldToolTipshora_sustituir["Spanish"]["colonia_hecho"] = "";
	$placeHoldershora_sustituir["Spanish"]["colonia_hecho"] = "";
	$fieldLabelshora_sustituir["Spanish"]["caserio_hecho"] = "Caserio Hecho";
	$fieldToolTipshora_sustituir["Spanish"]["caserio_hecho"] = "";
	$placeHoldershora_sustituir["Spanish"]["caserio_hecho"] = "";
	$fieldLabelshora_sustituir["Spanish"]["calle_hecho"] = "Calle Hecho";
	$fieldToolTipshora_sustituir["Spanish"]["calle_hecho"] = "";
	$placeHoldershora_sustituir["Spanish"]["calle_hecho"] = "";
	$fieldLabelshora_sustituir["Spanish"]["avenida_hecho"] = "Avenida Hecho";
	$fieldToolTipshora_sustituir["Spanish"]["avenida_hecho"] = "";
	$placeHoldershora_sustituir["Spanish"]["avenida_hecho"] = "";
	$fieldLabelshora_sustituir["Spanish"]["casa_hecho"] = "Casa Hecho";
	$fieldToolTipshora_sustituir["Spanish"]["casa_hecho"] = "";
	$placeHoldershora_sustituir["Spanish"]["casa_hecho"] = "";
	$fieldLabelshora_sustituir["Spanish"]["comu_hecho"] = "Comu Hecho";
	$fieldToolTipshora_sustituir["Spanish"]["comu_hecho"] = "";
	$placeHoldershora_sustituir["Spanish"]["comu_hecho"] = "";
	$fieldLabelshora_sustituir["Spanish"]["barrio_hecho"] = "Barrio Hecho";
	$fieldToolTipshora_sustituir["Spanish"]["barrio_hecho"] = "";
	$placeHoldershora_sustituir["Spanish"]["barrio_hecho"] = "";
	$fieldLabelshora_sustituir["Spanish"]["comp_hecho"] = "Comp Hecho";
	$fieldToolTipshora_sustituir["Spanish"]["comp_hecho"] = "";
	$placeHoldershora_sustituir["Spanish"]["comp_hecho"] = "";
	$fieldLabelshora_sustituir["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipshora_sustituir["Spanish"]["sector_ppd"] = "";
	$placeHoldershora_sustituir["Spanish"]["sector_ppd"] = "";
	$fieldLabelshora_sustituir["Spanish"]["tipo"] = "Tipo";
	$fieldToolTipshora_sustituir["Spanish"]["tipo"] = "";
	$placeHoldershora_sustituir["Spanish"]["tipo"] = "";
	$fieldLabelshora_sustituir["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipshora_sustituir["Spanish"]["nombre"] = "";
	$placeHoldershora_sustituir["Spanish"]["nombre"] = "";
	$fieldLabelshora_sustituir["Spanish"]["x"] = "X";
	$fieldToolTipshora_sustituir["Spanish"]["x"] = "";
	$placeHoldershora_sustituir["Spanish"]["x"] = "";
	$fieldLabelshora_sustituir["Spanish"]["y"] = "Y";
	$fieldToolTipshora_sustituir["Spanish"]["y"] = "";
	$placeHoldershora_sustituir["Spanish"]["y"] = "";
	if (count($fieldToolTipshora_sustituir["Spanish"]))
		$tdatahora_sustituir[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshora_sustituir["English"] = array();
	$fieldToolTipshora_sustituir["English"] = array();
	$placeHoldershora_sustituir["English"] = array();
	$pageTitleshora_sustituir["English"] = array();
	$fieldLabelshora_sustituir["English"]["id1"] = "Id1";
	$fieldToolTipshora_sustituir["English"]["id1"] = "";
	$placeHoldershora_sustituir["English"]["id1"] = "";
	$fieldLabelshora_sustituir["English"]["correlativo"] = "Correlativo";
	$fieldToolTipshora_sustituir["English"]["correlativo"] = "";
	$placeHoldershora_sustituir["English"]["correlativo"] = "";
	$fieldLabelshora_sustituir["English"]["numero"] = "Numero";
	$fieldToolTipshora_sustituir["English"]["numero"] = "";
	$placeHoldershora_sustituir["English"]["numero"] = "";
	$fieldLabelshora_sustituir["English"]["id"] = "Id";
	$fieldToolTipshora_sustituir["English"]["id"] = "";
	$placeHoldershora_sustituir["English"]["id"] = "";
	$fieldLabelshora_sustituir["English"]["codigo_muni"] = "Codigo Muni";
	$fieldToolTipshora_sustituir["English"]["codigo_muni"] = "";
	$placeHoldershora_sustituir["English"]["codigo_muni"] = "";
	$fieldLabelshora_sustituir["English"]["numero2"] = "Numero2";
	$fieldToolTipshora_sustituir["English"]["numero2"] = "";
	$placeHoldershora_sustituir["English"]["numero2"] = "";
	$fieldLabelshora_sustituir["English"]["depart_he"] = "Depart He";
	$fieldToolTipshora_sustituir["English"]["depart_he"] = "";
	$placeHoldershora_sustituir["English"]["depart_he"] = "";
	$fieldLabelshora_sustituir["English"]["muni_he"] = "Muni He";
	$fieldToolTipshora_sustituir["English"]["muni_he"] = "";
	$placeHoldershora_sustituir["English"]["muni_he"] = "";
	$fieldLabelshora_sustituir["English"]["dire_hecho"] = "Dire Hecho";
	$fieldToolTipshora_sustituir["English"]["dire_hecho"] = "";
	$placeHoldershora_sustituir["English"]["dire_hecho"] = "";
	$fieldLabelshora_sustituir["English"]["lugar_esp"] = "Lugar Esp";
	$fieldToolTipshora_sustituir["English"]["lugar_esp"] = "";
	$placeHoldershora_sustituir["English"]["lugar_esp"] = "";
	$fieldLabelshora_sustituir["English"]["lugaranalisis"] = "Lugaranalisis";
	$fieldToolTipshora_sustituir["English"]["lugaranalisis"] = "";
	$placeHoldershora_sustituir["English"]["lugaranalisis"] = "";
	$fieldLabelshora_sustituir["English"]["area"] = "Area";
	$fieldToolTipshora_sustituir["English"]["area"] = "";
	$placeHoldershora_sustituir["English"]["area"] = "";
	$fieldLabelshora_sustituir["English"]["forma_cono"] = "Forma Cono";
	$fieldToolTipshora_sustituir["English"]["forma_cono"] = "";
	$placeHoldershora_sustituir["English"]["forma_cono"] = "";
	$fieldLabelshora_sustituir["English"]["delito"] = "Delito";
	$fieldToolTipshora_sustituir["English"]["delito"] = "";
	$placeHoldershora_sustituir["English"]["delito"] = "";
	$fieldLabelshora_sustituir["English"]["delito_espe"] = "Delito Espe";
	$fieldToolTipshora_sustituir["English"]["delito_espe"] = "";
	$placeHoldershora_sustituir["English"]["delito_espe"] = "";
	$fieldLabelshora_sustituir["English"]["dia_hecho"] = "Dia Hecho";
	$fieldToolTipshora_sustituir["English"]["dia_hecho"] = "";
	$placeHoldershora_sustituir["English"]["dia_hecho"] = "";
	$fieldLabelshora_sustituir["English"]["hora_hecho"] = "Hora Hecho";
	$fieldToolTipshora_sustituir["English"]["hora_hecho"] = "";
	$placeHoldershora_sustituir["English"]["hora_hecho"] = "";
	$fieldLabelshora_sustituir["English"]["rango_hora"] = "Rango Hora";
	$fieldToolTipshora_sustituir["English"]["rango_hora"] = "";
	$placeHoldershora_sustituir["English"]["rango_hora"] = "";
	$fieldLabelshora_sustituir["English"]["fecha_hecho"] = "Fecha Hecho";
	$fieldToolTipshora_sustituir["English"]["fecha_hecho"] = "";
	$placeHoldershora_sustituir["English"]["fecha_hecho"] = "";
	$fieldLabelshora_sustituir["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipshora_sustituir["English"]["a_o_hecho"] = "";
	$placeHoldershora_sustituir["English"]["a_o_hecho"] = "";
	$fieldLabelshora_sustituir["English"]["edad_victima"] = "Edad Victima";
	$fieldToolTipshora_sustituir["English"]["edad_victima"] = "";
	$placeHoldershora_sustituir["English"]["edad_victima"] = "";
	$fieldLabelshora_sustituir["English"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipshora_sustituir["English"]["ran_eta_vic"] = "";
	$placeHoldershora_sustituir["English"]["ran_eta_vic"] = "";
	$fieldLabelshora_sustituir["English"]["s_victima"] = "S Victima";
	$fieldToolTipshora_sustituir["English"]["s_victima"] = "";
	$placeHoldershora_sustituir["English"]["s_victima"] = "";
	$fieldLabelshora_sustituir["English"]["oc_victima"] = "Oc Victima";
	$fieldToolTipshora_sustituir["English"]["oc_victima"] = "";
	$placeHoldershora_sustituir["English"]["oc_victima"] = "";
	$fieldLabelshora_sustituir["English"]["relacion_vi_agre"] = "Relacion Vi Agre";
	$fieldToolTipshora_sustituir["English"]["relacion_vi_agre"] = "";
	$placeHoldershora_sustituir["English"]["relacion_vi_agre"] = "";
	$fieldLabelshora_sustituir["English"]["edad_agresor"] = "Edad Agresor";
	$fieldToolTipshora_sustituir["English"]["edad_agresor"] = "";
	$placeHoldershora_sustituir["English"]["edad_agresor"] = "";
	$fieldLabelshora_sustituir["English"]["sexo__agresor"] = "Sexo  Agresor";
	$fieldToolTipshora_sustituir["English"]["sexo__agresor"] = "";
	$placeHoldershora_sustituir["English"]["sexo__agresor"] = "";
	$fieldLabelshora_sustituir["English"]["ocupa_agresor"] = "Ocupa Agresor";
	$fieldToolTipshora_sustituir["English"]["ocupa_agresor"] = "";
	$placeHoldershora_sustituir["English"]["ocupa_agresor"] = "";
	$fieldLabelshora_sustituir["English"]["movil"] = "Movil";
	$fieldToolTipshora_sustituir["English"]["movil"] = "";
	$placeHoldershora_sustituir["English"]["movil"] = "";
	$fieldLabelshora_sustituir["English"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipshora_sustituir["English"]["tipo_arma"] = "";
	$placeHoldershora_sustituir["English"]["tipo_arma"] = "";
	$fieldLabelshora_sustituir["English"]["canton_hecho"] = "Canton Hecho";
	$fieldToolTipshora_sustituir["English"]["canton_hecho"] = "";
	$placeHoldershora_sustituir["English"]["canton_hecho"] = "";
	$fieldLabelshora_sustituir["English"]["colonia_hecho"] = "Colonia Hecho";
	$fieldToolTipshora_sustituir["English"]["colonia_hecho"] = "";
	$placeHoldershora_sustituir["English"]["colonia_hecho"] = "";
	$fieldLabelshora_sustituir["English"]["caserio_hecho"] = "Caserio Hecho";
	$fieldToolTipshora_sustituir["English"]["caserio_hecho"] = "";
	$placeHoldershora_sustituir["English"]["caserio_hecho"] = "";
	$fieldLabelshora_sustituir["English"]["calle_hecho"] = "Calle Hecho";
	$fieldToolTipshora_sustituir["English"]["calle_hecho"] = "";
	$placeHoldershora_sustituir["English"]["calle_hecho"] = "";
	$fieldLabelshora_sustituir["English"]["avenida_hecho"] = "Avenida Hecho";
	$fieldToolTipshora_sustituir["English"]["avenida_hecho"] = "";
	$placeHoldershora_sustituir["English"]["avenida_hecho"] = "";
	$fieldLabelshora_sustituir["English"]["casa_hecho"] = "Casa Hecho";
	$fieldToolTipshora_sustituir["English"]["casa_hecho"] = "";
	$placeHoldershora_sustituir["English"]["casa_hecho"] = "";
	$fieldLabelshora_sustituir["English"]["comu_hecho"] = "Comu Hecho";
	$fieldToolTipshora_sustituir["English"]["comu_hecho"] = "";
	$placeHoldershora_sustituir["English"]["comu_hecho"] = "";
	$fieldLabelshora_sustituir["English"]["barrio_hecho"] = "Barrio Hecho";
	$fieldToolTipshora_sustituir["English"]["barrio_hecho"] = "";
	$placeHoldershora_sustituir["English"]["barrio_hecho"] = "";
	$fieldLabelshora_sustituir["English"]["comp_hecho"] = "Comp Hecho";
	$fieldToolTipshora_sustituir["English"]["comp_hecho"] = "";
	$placeHoldershora_sustituir["English"]["comp_hecho"] = "";
	$fieldLabelshora_sustituir["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipshora_sustituir["English"]["sector_ppd"] = "";
	$placeHoldershora_sustituir["English"]["sector_ppd"] = "";
	$fieldLabelshora_sustituir["English"]["tipo"] = "Tipo";
	$fieldToolTipshora_sustituir["English"]["tipo"] = "";
	$placeHoldershora_sustituir["English"]["tipo"] = "";
	$fieldLabelshora_sustituir["English"]["nombre"] = "Nombre";
	$fieldToolTipshora_sustituir["English"]["nombre"] = "";
	$placeHoldershora_sustituir["English"]["nombre"] = "";
	$fieldLabelshora_sustituir["English"]["x"] = "X";
	$fieldToolTipshora_sustituir["English"]["x"] = "";
	$placeHoldershora_sustituir["English"]["x"] = "";
	$fieldLabelshora_sustituir["English"]["y"] = "Y";
	$fieldToolTipshora_sustituir["English"]["y"] = "";
	$placeHoldershora_sustituir["English"]["y"] = "";
	if (count($fieldToolTipshora_sustituir["English"]))
		$tdatahora_sustituir[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshora_sustituir[""] = array();
	$fieldToolTipshora_sustituir[""] = array();
	$placeHoldershora_sustituir[""] = array();
	$pageTitleshora_sustituir[""] = array();
	if (count($fieldToolTipshora_sustituir[""]))
		$tdatahora_sustituir[".isUseToolTips"] = true;
}





$tdatahora_sustituir[".shortTableName"] = "hora_sustituir";
$tdatahora_sustituir[".nSecOptions"] = 0;
$tdatahora_sustituir[".recsPerRowPrint"] = 1;
$tdatahora_sustituir[".mainTableOwnerID"] = "";
$tdatahora_sustituir[".moveNext"] = 1;
$tdatahora_sustituir[".entityType"] = 1;

$tdatahora_sustituir[".strOriginalTableName"] = "hechosdelictivos";

	



$tdatahora_sustituir[".showAddInPopup"] = false;

$tdatahora_sustituir[".showEditInPopup"] = false;

$tdatahora_sustituir[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahora_sustituir[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahora_sustituir[".fieldsForRegister"] = array();

	$tdatahora_sustituir[".listAjax"] = true;

	$tdatahora_sustituir[".audit"] = false;

	$tdatahora_sustituir[".locking"] = false;


$tdatahora_sustituir[".add"] = true;
$tdatahora_sustituir[".afterAddAction"] = 1;
$tdatahora_sustituir[".closePopupAfterAdd"] = 1;
$tdatahora_sustituir[".afterAddActionDetTable"] = "";

$tdatahora_sustituir[".list"] = true;



$tdatahora_sustituir[".reorderRecordsByHeader"] = true;
$tdatahora_sustituir[".createSortByDropdown"] = true;
$tdatahora_sustituir[".strSortControlSettingsJSON"] = "";



$tdatahora_sustituir[".inlineAdd"] = true;

$tdatahora_sustituir[".import"] = true;

$tdatahora_sustituir[".exportTo"] = true;

$tdatahora_sustituir[".printFriendly"] = true;


$tdatahora_sustituir[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatahora_sustituir[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatahora_sustituir[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatahora_sustituir[".searchSaving"] = false;
//

$tdatahora_sustituir[".showSearchPanel"] = true;
		$tdatahora_sustituir[".flexibleSearch"] = true;

$tdatahora_sustituir[".isUseAjaxSuggest"] = true;

$tdatahora_sustituir[".rowHighlite"] = true;





$tdatahora_sustituir[".ajaxCodeSnippetAdded"] = false;

$tdatahora_sustituir[".buttonsAdded"] = false;

$tdatahora_sustituir[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahora_sustituir[".isUseTimeForSearch"] = false;





$tdatahora_sustituir[".allSearchFields"] = array();
$tdatahora_sustituir[".filterFields"] = array();
$tdatahora_sustituir[".requiredSearchFields"] = array();

$tdatahora_sustituir[".allSearchFields"][] = "id1";
	$tdatahora_sustituir[".allSearchFields"][] = "correlativo";
	$tdatahora_sustituir[".allSearchFields"][] = "numero";
	$tdatahora_sustituir[".allSearchFields"][] = "id";
	$tdatahora_sustituir[".allSearchFields"][] = "codigo_muni";
	$tdatahora_sustituir[".allSearchFields"][] = "numero2";
	$tdatahora_sustituir[".allSearchFields"][] = "depart_he";
	$tdatahora_sustituir[".allSearchFields"][] = "muni_he";
	$tdatahora_sustituir[".allSearchFields"][] = "dire_hecho";
	$tdatahora_sustituir[".allSearchFields"][] = "lugar_esp";
	$tdatahora_sustituir[".allSearchFields"][] = "lugaranalisis";
	$tdatahora_sustituir[".allSearchFields"][] = "area";
	$tdatahora_sustituir[".allSearchFields"][] = "forma_cono";
	$tdatahora_sustituir[".allSearchFields"][] = "delito";
	$tdatahora_sustituir[".allSearchFields"][] = "delito_espe";
	$tdatahora_sustituir[".allSearchFields"][] = "dia_hecho";
	$tdatahora_sustituir[".allSearchFields"][] = "hora_hecho";
	$tdatahora_sustituir[".allSearchFields"][] = "rango_hora";
	$tdatahora_sustituir[".allSearchFields"][] = "fecha_hecho";
	$tdatahora_sustituir[".allSearchFields"][] = "aÑo_hecho";
	$tdatahora_sustituir[".allSearchFields"][] = "edad_victima";
	$tdatahora_sustituir[".allSearchFields"][] = "ran_eta_vic";
	$tdatahora_sustituir[".allSearchFields"][] = "s_victima";
	$tdatahora_sustituir[".allSearchFields"][] = "oc_victima";
	$tdatahora_sustituir[".allSearchFields"][] = "relacion_vi_agre";
	$tdatahora_sustituir[".allSearchFields"][] = "edad_agresor";
	$tdatahora_sustituir[".allSearchFields"][] = "sexo__agresor";
	$tdatahora_sustituir[".allSearchFields"][] = "ocupa_agresor";
	$tdatahora_sustituir[".allSearchFields"][] = "movil";
	$tdatahora_sustituir[".allSearchFields"][] = "tipo_arma";
	$tdatahora_sustituir[".allSearchFields"][] = "canton_hecho";
	$tdatahora_sustituir[".allSearchFields"][] = "colonia_hecho";
	$tdatahora_sustituir[".allSearchFields"][] = "caserio_hecho";
	$tdatahora_sustituir[".allSearchFields"][] = "calle_hecho";
	$tdatahora_sustituir[".allSearchFields"][] = "avenida_hecho";
	$tdatahora_sustituir[".allSearchFields"][] = "casa_hecho";
	$tdatahora_sustituir[".allSearchFields"][] = "comu_hecho";
	$tdatahora_sustituir[".allSearchFields"][] = "barrio_hecho";
	$tdatahora_sustituir[".allSearchFields"][] = "comp_hecho";
	$tdatahora_sustituir[".allSearchFields"][] = "sector_ppd";
	$tdatahora_sustituir[".allSearchFields"][] = "tipo";
	$tdatahora_sustituir[".allSearchFields"][] = "nombre";
	$tdatahora_sustituir[".allSearchFields"][] = "x";
	$tdatahora_sustituir[".allSearchFields"][] = "y";
	

$tdatahora_sustituir[".googleLikeFields"] = array();
$tdatahora_sustituir[".googleLikeFields"][] = "id1";
$tdatahora_sustituir[".googleLikeFields"][] = "correlativo";
$tdatahora_sustituir[".googleLikeFields"][] = "numero";
$tdatahora_sustituir[".googleLikeFields"][] = "id";
$tdatahora_sustituir[".googleLikeFields"][] = "codigo_muni";
$tdatahora_sustituir[".googleLikeFields"][] = "numero2";
$tdatahora_sustituir[".googleLikeFields"][] = "depart_he";
$tdatahora_sustituir[".googleLikeFields"][] = "muni_he";
$tdatahora_sustituir[".googleLikeFields"][] = "dire_hecho";
$tdatahora_sustituir[".googleLikeFields"][] = "lugar_esp";
$tdatahora_sustituir[".googleLikeFields"][] = "lugaranalisis";
$tdatahora_sustituir[".googleLikeFields"][] = "area";
$tdatahora_sustituir[".googleLikeFields"][] = "forma_cono";
$tdatahora_sustituir[".googleLikeFields"][] = "delito";
$tdatahora_sustituir[".googleLikeFields"][] = "delito_espe";
$tdatahora_sustituir[".googleLikeFields"][] = "dia_hecho";
$tdatahora_sustituir[".googleLikeFields"][] = "hora_hecho";
$tdatahora_sustituir[".googleLikeFields"][] = "rango_hora";
$tdatahora_sustituir[".googleLikeFields"][] = "fecha_hecho";
$tdatahora_sustituir[".googleLikeFields"][] = "aÑo_hecho";
$tdatahora_sustituir[".googleLikeFields"][] = "edad_victima";
$tdatahora_sustituir[".googleLikeFields"][] = "ran_eta_vic";
$tdatahora_sustituir[".googleLikeFields"][] = "s_victima";
$tdatahora_sustituir[".googleLikeFields"][] = "oc_victima";
$tdatahora_sustituir[".googleLikeFields"][] = "relacion_vi_agre";
$tdatahora_sustituir[".googleLikeFields"][] = "edad_agresor";
$tdatahora_sustituir[".googleLikeFields"][] = "sexo__agresor";
$tdatahora_sustituir[".googleLikeFields"][] = "ocupa_agresor";
$tdatahora_sustituir[".googleLikeFields"][] = "movil";
$tdatahora_sustituir[".googleLikeFields"][] = "tipo_arma";
$tdatahora_sustituir[".googleLikeFields"][] = "canton_hecho";
$tdatahora_sustituir[".googleLikeFields"][] = "colonia_hecho";
$tdatahora_sustituir[".googleLikeFields"][] = "caserio_hecho";
$tdatahora_sustituir[".googleLikeFields"][] = "calle_hecho";
$tdatahora_sustituir[".googleLikeFields"][] = "avenida_hecho";
$tdatahora_sustituir[".googleLikeFields"][] = "casa_hecho";
$tdatahora_sustituir[".googleLikeFields"][] = "comu_hecho";
$tdatahora_sustituir[".googleLikeFields"][] = "barrio_hecho";
$tdatahora_sustituir[".googleLikeFields"][] = "comp_hecho";
$tdatahora_sustituir[".googleLikeFields"][] = "sector_ppd";
$tdatahora_sustituir[".googleLikeFields"][] = "tipo";
$tdatahora_sustituir[".googleLikeFields"][] = "nombre";
$tdatahora_sustituir[".googleLikeFields"][] = "x";
$tdatahora_sustituir[".googleLikeFields"][] = "y";


$tdatahora_sustituir[".advSearchFields"] = array();
$tdatahora_sustituir[".advSearchFields"][] = "id1";
$tdatahora_sustituir[".advSearchFields"][] = "correlativo";
$tdatahora_sustituir[".advSearchFields"][] = "numero";
$tdatahora_sustituir[".advSearchFields"][] = "id";
$tdatahora_sustituir[".advSearchFields"][] = "codigo_muni";
$tdatahora_sustituir[".advSearchFields"][] = "numero2";
$tdatahora_sustituir[".advSearchFields"][] = "depart_he";
$tdatahora_sustituir[".advSearchFields"][] = "muni_he";
$tdatahora_sustituir[".advSearchFields"][] = "dire_hecho";
$tdatahora_sustituir[".advSearchFields"][] = "lugar_esp";
$tdatahora_sustituir[".advSearchFields"][] = "lugaranalisis";
$tdatahora_sustituir[".advSearchFields"][] = "area";
$tdatahora_sustituir[".advSearchFields"][] = "forma_cono";
$tdatahora_sustituir[".advSearchFields"][] = "delito";
$tdatahora_sustituir[".advSearchFields"][] = "delito_espe";
$tdatahora_sustituir[".advSearchFields"][] = "dia_hecho";
$tdatahora_sustituir[".advSearchFields"][] = "hora_hecho";
$tdatahora_sustituir[".advSearchFields"][] = "rango_hora";
$tdatahora_sustituir[".advSearchFields"][] = "fecha_hecho";
$tdatahora_sustituir[".advSearchFields"][] = "aÑo_hecho";
$tdatahora_sustituir[".advSearchFields"][] = "edad_victima";
$tdatahora_sustituir[".advSearchFields"][] = "ran_eta_vic";
$tdatahora_sustituir[".advSearchFields"][] = "s_victima";
$tdatahora_sustituir[".advSearchFields"][] = "oc_victima";
$tdatahora_sustituir[".advSearchFields"][] = "relacion_vi_agre";
$tdatahora_sustituir[".advSearchFields"][] = "edad_agresor";
$tdatahora_sustituir[".advSearchFields"][] = "sexo__agresor";
$tdatahora_sustituir[".advSearchFields"][] = "ocupa_agresor";
$tdatahora_sustituir[".advSearchFields"][] = "movil";
$tdatahora_sustituir[".advSearchFields"][] = "tipo_arma";
$tdatahora_sustituir[".advSearchFields"][] = "canton_hecho";
$tdatahora_sustituir[".advSearchFields"][] = "colonia_hecho";
$tdatahora_sustituir[".advSearchFields"][] = "caserio_hecho";
$tdatahora_sustituir[".advSearchFields"][] = "calle_hecho";
$tdatahora_sustituir[".advSearchFields"][] = "avenida_hecho";
$tdatahora_sustituir[".advSearchFields"][] = "casa_hecho";
$tdatahora_sustituir[".advSearchFields"][] = "comu_hecho";
$tdatahora_sustituir[".advSearchFields"][] = "barrio_hecho";
$tdatahora_sustituir[".advSearchFields"][] = "comp_hecho";
$tdatahora_sustituir[".advSearchFields"][] = "sector_ppd";
$tdatahora_sustituir[".advSearchFields"][] = "tipo";
$tdatahora_sustituir[".advSearchFields"][] = "nombre";
$tdatahora_sustituir[".advSearchFields"][] = "x";
$tdatahora_sustituir[".advSearchFields"][] = "y";

$tdatahora_sustituir[".tableType"] = "list";

$tdatahora_sustituir[".printerPageOrientation"] = 0;
$tdatahora_sustituir[".nPrinterPageScale"] = 100;

$tdatahora_sustituir[".nPrinterSplitRecords"] = 40;

$tdatahora_sustituir[".nPrinterPDFSplitRecords"] = 40;



$tdatahora_sustituir[".geocodingEnabled"] = false;





$tdatahora_sustituir[".listGridLayout"] = 3;

$tdatahora_sustituir[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatahora_sustituir[".pageSize"] = 10;

$tdatahora_sustituir[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahora_sustituir[".strOrderBy"] = $tstrOrderBy;

$tdatahora_sustituir[".orderindexes"] = array();

$tdatahora_sustituir[".sqlHead"] = "SELECT id1,  	correlativo,  	numero,  	id,  	codigo_muni,  	numero2,  	depart_he,  	muni_he,  	dire_hecho,  	lugar_esp,  	lugaranalisis,  	area,  	forma_cono,  	delito,  	delito_espe,  	dia_hecho,  	hora_hecho,  	rango_hora,  	fecha_hecho,  	`aÑo_hecho`,  	edad_victima,  	ran_eta_vic,  	s_victima,  	oc_victima,  	relacion_vi_agre,  	edad_agresor,  	sexo__agresor,  	ocupa_agresor,  	movil,  	tipo_arma,  	canton_hecho,  	colonia_hecho,  	caserio_hecho,  	calle_hecho,  	avenida_hecho,  	casa_hecho,  	comu_hecho,  	barrio_hecho,  	comp_hecho,  	sector_ppd,  	tipo,  	nombre,  	x,  	y";
$tdatahora_sustituir[".sqlFrom"] = "FROM hechosdelictivos";
$tdatahora_sustituir[".sqlWhereExpr"] = "";
$tdatahora_sustituir[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahora_sustituir[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahora_sustituir[".arrGroupsPerPage"] = $arrGPP;

$tdatahora_sustituir[".highlightSearchResults"] = true;

$tableKeyshora_sustituir = array();
$tdatahora_sustituir[".Keys"] = $tableKeyshora_sustituir;

$tdatahora_sustituir[".listFields"] = array();
$tdatahora_sustituir[".listFields"][] = "id1";
$tdatahora_sustituir[".listFields"][] = "correlativo";
$tdatahora_sustituir[".listFields"][] = "numero";
$tdatahora_sustituir[".listFields"][] = "id";
$tdatahora_sustituir[".listFields"][] = "codigo_muni";
$tdatahora_sustituir[".listFields"][] = "numero2";
$tdatahora_sustituir[".listFields"][] = "depart_he";
$tdatahora_sustituir[".listFields"][] = "muni_he";
$tdatahora_sustituir[".listFields"][] = "dire_hecho";
$tdatahora_sustituir[".listFields"][] = "lugar_esp";
$tdatahora_sustituir[".listFields"][] = "lugaranalisis";
$tdatahora_sustituir[".listFields"][] = "area";
$tdatahora_sustituir[".listFields"][] = "forma_cono";
$tdatahora_sustituir[".listFields"][] = "delito";
$tdatahora_sustituir[".listFields"][] = "delito_espe";
$tdatahora_sustituir[".listFields"][] = "dia_hecho";
$tdatahora_sustituir[".listFields"][] = "hora_hecho";
$tdatahora_sustituir[".listFields"][] = "rango_hora";
$tdatahora_sustituir[".listFields"][] = "fecha_hecho";
$tdatahora_sustituir[".listFields"][] = "aÑo_hecho";
$tdatahora_sustituir[".listFields"][] = "edad_victima";
$tdatahora_sustituir[".listFields"][] = "ran_eta_vic";
$tdatahora_sustituir[".listFields"][] = "s_victima";
$tdatahora_sustituir[".listFields"][] = "oc_victima";
$tdatahora_sustituir[".listFields"][] = "relacion_vi_agre";
$tdatahora_sustituir[".listFields"][] = "edad_agresor";
$tdatahora_sustituir[".listFields"][] = "sexo__agresor";
$tdatahora_sustituir[".listFields"][] = "ocupa_agresor";
$tdatahora_sustituir[".listFields"][] = "movil";
$tdatahora_sustituir[".listFields"][] = "tipo_arma";
$tdatahora_sustituir[".listFields"][] = "canton_hecho";
$tdatahora_sustituir[".listFields"][] = "colonia_hecho";
$tdatahora_sustituir[".listFields"][] = "caserio_hecho";
$tdatahora_sustituir[".listFields"][] = "calle_hecho";
$tdatahora_sustituir[".listFields"][] = "avenida_hecho";
$tdatahora_sustituir[".listFields"][] = "casa_hecho";
$tdatahora_sustituir[".listFields"][] = "comu_hecho";
$tdatahora_sustituir[".listFields"][] = "barrio_hecho";
$tdatahora_sustituir[".listFields"][] = "comp_hecho";
$tdatahora_sustituir[".listFields"][] = "sector_ppd";
$tdatahora_sustituir[".listFields"][] = "tipo";
$tdatahora_sustituir[".listFields"][] = "nombre";
$tdatahora_sustituir[".listFields"][] = "x";
$tdatahora_sustituir[".listFields"][] = "y";

$tdatahora_sustituir[".hideMobileList"] = array();


$tdatahora_sustituir[".viewFields"] = array();
$tdatahora_sustituir[".viewFields"][] = "id1";
$tdatahora_sustituir[".viewFields"][] = "correlativo";
$tdatahora_sustituir[".viewFields"][] = "numero";
$tdatahora_sustituir[".viewFields"][] = "id";
$tdatahora_sustituir[".viewFields"][] = "codigo_muni";
$tdatahora_sustituir[".viewFields"][] = "numero2";
$tdatahora_sustituir[".viewFields"][] = "depart_he";
$tdatahora_sustituir[".viewFields"][] = "muni_he";
$tdatahora_sustituir[".viewFields"][] = "dire_hecho";
$tdatahora_sustituir[".viewFields"][] = "lugar_esp";
$tdatahora_sustituir[".viewFields"][] = "lugaranalisis";
$tdatahora_sustituir[".viewFields"][] = "area";
$tdatahora_sustituir[".viewFields"][] = "forma_cono";
$tdatahora_sustituir[".viewFields"][] = "delito";
$tdatahora_sustituir[".viewFields"][] = "delito_espe";
$tdatahora_sustituir[".viewFields"][] = "dia_hecho";
$tdatahora_sustituir[".viewFields"][] = "hora_hecho";
$tdatahora_sustituir[".viewFields"][] = "rango_hora";
$tdatahora_sustituir[".viewFields"][] = "fecha_hecho";
$tdatahora_sustituir[".viewFields"][] = "aÑo_hecho";
$tdatahora_sustituir[".viewFields"][] = "edad_victima";
$tdatahora_sustituir[".viewFields"][] = "ran_eta_vic";
$tdatahora_sustituir[".viewFields"][] = "s_victima";
$tdatahora_sustituir[".viewFields"][] = "oc_victima";
$tdatahora_sustituir[".viewFields"][] = "relacion_vi_agre";
$tdatahora_sustituir[".viewFields"][] = "edad_agresor";
$tdatahora_sustituir[".viewFields"][] = "sexo__agresor";
$tdatahora_sustituir[".viewFields"][] = "ocupa_agresor";
$tdatahora_sustituir[".viewFields"][] = "movil";
$tdatahora_sustituir[".viewFields"][] = "tipo_arma";
$tdatahora_sustituir[".viewFields"][] = "canton_hecho";
$tdatahora_sustituir[".viewFields"][] = "colonia_hecho";
$tdatahora_sustituir[".viewFields"][] = "caserio_hecho";
$tdatahora_sustituir[".viewFields"][] = "calle_hecho";
$tdatahora_sustituir[".viewFields"][] = "avenida_hecho";
$tdatahora_sustituir[".viewFields"][] = "casa_hecho";
$tdatahora_sustituir[".viewFields"][] = "comu_hecho";
$tdatahora_sustituir[".viewFields"][] = "barrio_hecho";
$tdatahora_sustituir[".viewFields"][] = "comp_hecho";
$tdatahora_sustituir[".viewFields"][] = "sector_ppd";
$tdatahora_sustituir[".viewFields"][] = "tipo";
$tdatahora_sustituir[".viewFields"][] = "nombre";
$tdatahora_sustituir[".viewFields"][] = "x";
$tdatahora_sustituir[".viewFields"][] = "y";

$tdatahora_sustituir[".addFields"] = array();
$tdatahora_sustituir[".addFields"][] = "id1";
$tdatahora_sustituir[".addFields"][] = "correlativo";
$tdatahora_sustituir[".addFields"][] = "numero";
$tdatahora_sustituir[".addFields"][] = "id";
$tdatahora_sustituir[".addFields"][] = "codigo_muni";
$tdatahora_sustituir[".addFields"][] = "numero2";
$tdatahora_sustituir[".addFields"][] = "depart_he";
$tdatahora_sustituir[".addFields"][] = "muni_he";
$tdatahora_sustituir[".addFields"][] = "dire_hecho";
$tdatahora_sustituir[".addFields"][] = "lugar_esp";
$tdatahora_sustituir[".addFields"][] = "lugaranalisis";
$tdatahora_sustituir[".addFields"][] = "area";
$tdatahora_sustituir[".addFields"][] = "forma_cono";
$tdatahora_sustituir[".addFields"][] = "delito";
$tdatahora_sustituir[".addFields"][] = "delito_espe";
$tdatahora_sustituir[".addFields"][] = "dia_hecho";
$tdatahora_sustituir[".addFields"][] = "hora_hecho";
$tdatahora_sustituir[".addFields"][] = "rango_hora";
$tdatahora_sustituir[".addFields"][] = "fecha_hecho";
$tdatahora_sustituir[".addFields"][] = "aÑo_hecho";
$tdatahora_sustituir[".addFields"][] = "edad_victima";
$tdatahora_sustituir[".addFields"][] = "ran_eta_vic";
$tdatahora_sustituir[".addFields"][] = "s_victima";
$tdatahora_sustituir[".addFields"][] = "oc_victima";
$tdatahora_sustituir[".addFields"][] = "relacion_vi_agre";
$tdatahora_sustituir[".addFields"][] = "edad_agresor";
$tdatahora_sustituir[".addFields"][] = "sexo__agresor";
$tdatahora_sustituir[".addFields"][] = "ocupa_agresor";
$tdatahora_sustituir[".addFields"][] = "movil";
$tdatahora_sustituir[".addFields"][] = "tipo_arma";
$tdatahora_sustituir[".addFields"][] = "canton_hecho";
$tdatahora_sustituir[".addFields"][] = "colonia_hecho";
$tdatahora_sustituir[".addFields"][] = "caserio_hecho";
$tdatahora_sustituir[".addFields"][] = "calle_hecho";
$tdatahora_sustituir[".addFields"][] = "avenida_hecho";
$tdatahora_sustituir[".addFields"][] = "casa_hecho";
$tdatahora_sustituir[".addFields"][] = "comu_hecho";
$tdatahora_sustituir[".addFields"][] = "barrio_hecho";
$tdatahora_sustituir[".addFields"][] = "comp_hecho";
$tdatahora_sustituir[".addFields"][] = "sector_ppd";
$tdatahora_sustituir[".addFields"][] = "tipo";
$tdatahora_sustituir[".addFields"][] = "nombre";
$tdatahora_sustituir[".addFields"][] = "x";
$tdatahora_sustituir[".addFields"][] = "y";

$tdatahora_sustituir[".masterListFields"] = array();
$tdatahora_sustituir[".masterListFields"][] = "id1";
$tdatahora_sustituir[".masterListFields"][] = "correlativo";
$tdatahora_sustituir[".masterListFields"][] = "numero";
$tdatahora_sustituir[".masterListFields"][] = "id";
$tdatahora_sustituir[".masterListFields"][] = "codigo_muni";
$tdatahora_sustituir[".masterListFields"][] = "numero2";
$tdatahora_sustituir[".masterListFields"][] = "depart_he";
$tdatahora_sustituir[".masterListFields"][] = "muni_he";
$tdatahora_sustituir[".masterListFields"][] = "dire_hecho";
$tdatahora_sustituir[".masterListFields"][] = "lugar_esp";
$tdatahora_sustituir[".masterListFields"][] = "lugaranalisis";
$tdatahora_sustituir[".masterListFields"][] = "area";
$tdatahora_sustituir[".masterListFields"][] = "forma_cono";
$tdatahora_sustituir[".masterListFields"][] = "delito";
$tdatahora_sustituir[".masterListFields"][] = "delito_espe";
$tdatahora_sustituir[".masterListFields"][] = "dia_hecho";
$tdatahora_sustituir[".masterListFields"][] = "hora_hecho";
$tdatahora_sustituir[".masterListFields"][] = "rango_hora";
$tdatahora_sustituir[".masterListFields"][] = "fecha_hecho";
$tdatahora_sustituir[".masterListFields"][] = "aÑo_hecho";
$tdatahora_sustituir[".masterListFields"][] = "edad_victima";
$tdatahora_sustituir[".masterListFields"][] = "ran_eta_vic";
$tdatahora_sustituir[".masterListFields"][] = "s_victima";
$tdatahora_sustituir[".masterListFields"][] = "oc_victima";
$tdatahora_sustituir[".masterListFields"][] = "relacion_vi_agre";
$tdatahora_sustituir[".masterListFields"][] = "edad_agresor";
$tdatahora_sustituir[".masterListFields"][] = "sexo__agresor";
$tdatahora_sustituir[".masterListFields"][] = "ocupa_agresor";
$tdatahora_sustituir[".masterListFields"][] = "movil";
$tdatahora_sustituir[".masterListFields"][] = "tipo_arma";
$tdatahora_sustituir[".masterListFields"][] = "canton_hecho";
$tdatahora_sustituir[".masterListFields"][] = "colonia_hecho";
$tdatahora_sustituir[".masterListFields"][] = "caserio_hecho";
$tdatahora_sustituir[".masterListFields"][] = "calle_hecho";
$tdatahora_sustituir[".masterListFields"][] = "avenida_hecho";
$tdatahora_sustituir[".masterListFields"][] = "casa_hecho";
$tdatahora_sustituir[".masterListFields"][] = "comu_hecho";
$tdatahora_sustituir[".masterListFields"][] = "barrio_hecho";
$tdatahora_sustituir[".masterListFields"][] = "comp_hecho";
$tdatahora_sustituir[".masterListFields"][] = "sector_ppd";
$tdatahora_sustituir[".masterListFields"][] = "tipo";
$tdatahora_sustituir[".masterListFields"][] = "nombre";
$tdatahora_sustituir[".masterListFields"][] = "x";
$tdatahora_sustituir[".masterListFields"][] = "y";

$tdatahora_sustituir[".inlineAddFields"] = array();
$tdatahora_sustituir[".inlineAddFields"][] = "id1";
$tdatahora_sustituir[".inlineAddFields"][] = "correlativo";
$tdatahora_sustituir[".inlineAddFields"][] = "numero";
$tdatahora_sustituir[".inlineAddFields"][] = "id";
$tdatahora_sustituir[".inlineAddFields"][] = "codigo_muni";
$tdatahora_sustituir[".inlineAddFields"][] = "numero2";
$tdatahora_sustituir[".inlineAddFields"][] = "depart_he";
$tdatahora_sustituir[".inlineAddFields"][] = "muni_he";
$tdatahora_sustituir[".inlineAddFields"][] = "dire_hecho";
$tdatahora_sustituir[".inlineAddFields"][] = "lugar_esp";
$tdatahora_sustituir[".inlineAddFields"][] = "lugaranalisis";
$tdatahora_sustituir[".inlineAddFields"][] = "area";
$tdatahora_sustituir[".inlineAddFields"][] = "forma_cono";
$tdatahora_sustituir[".inlineAddFields"][] = "delito";
$tdatahora_sustituir[".inlineAddFields"][] = "delito_espe";
$tdatahora_sustituir[".inlineAddFields"][] = "dia_hecho";
$tdatahora_sustituir[".inlineAddFields"][] = "hora_hecho";
$tdatahora_sustituir[".inlineAddFields"][] = "rango_hora";
$tdatahora_sustituir[".inlineAddFields"][] = "fecha_hecho";
$tdatahora_sustituir[".inlineAddFields"][] = "aÑo_hecho";
$tdatahora_sustituir[".inlineAddFields"][] = "edad_victima";
$tdatahora_sustituir[".inlineAddFields"][] = "ran_eta_vic";
$tdatahora_sustituir[".inlineAddFields"][] = "s_victima";
$tdatahora_sustituir[".inlineAddFields"][] = "oc_victima";
$tdatahora_sustituir[".inlineAddFields"][] = "relacion_vi_agre";
$tdatahora_sustituir[".inlineAddFields"][] = "edad_agresor";
$tdatahora_sustituir[".inlineAddFields"][] = "sexo__agresor";
$tdatahora_sustituir[".inlineAddFields"][] = "ocupa_agresor";
$tdatahora_sustituir[".inlineAddFields"][] = "movil";
$tdatahora_sustituir[".inlineAddFields"][] = "tipo_arma";
$tdatahora_sustituir[".inlineAddFields"][] = "canton_hecho";
$tdatahora_sustituir[".inlineAddFields"][] = "colonia_hecho";
$tdatahora_sustituir[".inlineAddFields"][] = "caserio_hecho";
$tdatahora_sustituir[".inlineAddFields"][] = "calle_hecho";
$tdatahora_sustituir[".inlineAddFields"][] = "avenida_hecho";
$tdatahora_sustituir[".inlineAddFields"][] = "casa_hecho";
$tdatahora_sustituir[".inlineAddFields"][] = "comu_hecho";
$tdatahora_sustituir[".inlineAddFields"][] = "barrio_hecho";
$tdatahora_sustituir[".inlineAddFields"][] = "comp_hecho";
$tdatahora_sustituir[".inlineAddFields"][] = "sector_ppd";
$tdatahora_sustituir[".inlineAddFields"][] = "tipo";
$tdatahora_sustituir[".inlineAddFields"][] = "nombre";
$tdatahora_sustituir[".inlineAddFields"][] = "x";
$tdatahora_sustituir[".inlineAddFields"][] = "y";

$tdatahora_sustituir[".editFields"] = array();
$tdatahora_sustituir[".editFields"][] = "id1";
$tdatahora_sustituir[".editFields"][] = "correlativo";
$tdatahora_sustituir[".editFields"][] = "numero";
$tdatahora_sustituir[".editFields"][] = "id";
$tdatahora_sustituir[".editFields"][] = "codigo_muni";
$tdatahora_sustituir[".editFields"][] = "numero2";
$tdatahora_sustituir[".editFields"][] = "depart_he";
$tdatahora_sustituir[".editFields"][] = "muni_he";
$tdatahora_sustituir[".editFields"][] = "dire_hecho";
$tdatahora_sustituir[".editFields"][] = "lugar_esp";
$tdatahora_sustituir[".editFields"][] = "lugaranalisis";
$tdatahora_sustituir[".editFields"][] = "area";
$tdatahora_sustituir[".editFields"][] = "forma_cono";
$tdatahora_sustituir[".editFields"][] = "delito";
$tdatahora_sustituir[".editFields"][] = "delito_espe";
$tdatahora_sustituir[".editFields"][] = "dia_hecho";
$tdatahora_sustituir[".editFields"][] = "hora_hecho";
$tdatahora_sustituir[".editFields"][] = "rango_hora";
$tdatahora_sustituir[".editFields"][] = "fecha_hecho";
$tdatahora_sustituir[".editFields"][] = "aÑo_hecho";
$tdatahora_sustituir[".editFields"][] = "edad_victima";
$tdatahora_sustituir[".editFields"][] = "ran_eta_vic";
$tdatahora_sustituir[".editFields"][] = "s_victima";
$tdatahora_sustituir[".editFields"][] = "oc_victima";
$tdatahora_sustituir[".editFields"][] = "relacion_vi_agre";
$tdatahora_sustituir[".editFields"][] = "edad_agresor";
$tdatahora_sustituir[".editFields"][] = "sexo__agresor";
$tdatahora_sustituir[".editFields"][] = "ocupa_agresor";
$tdatahora_sustituir[".editFields"][] = "movil";
$tdatahora_sustituir[".editFields"][] = "tipo_arma";
$tdatahora_sustituir[".editFields"][] = "canton_hecho";
$tdatahora_sustituir[".editFields"][] = "colonia_hecho";
$tdatahora_sustituir[".editFields"][] = "caserio_hecho";
$tdatahora_sustituir[".editFields"][] = "calle_hecho";
$tdatahora_sustituir[".editFields"][] = "avenida_hecho";
$tdatahora_sustituir[".editFields"][] = "casa_hecho";
$tdatahora_sustituir[".editFields"][] = "comu_hecho";
$tdatahora_sustituir[".editFields"][] = "barrio_hecho";
$tdatahora_sustituir[".editFields"][] = "comp_hecho";
$tdatahora_sustituir[".editFields"][] = "sector_ppd";
$tdatahora_sustituir[".editFields"][] = "tipo";
$tdatahora_sustituir[".editFields"][] = "nombre";
$tdatahora_sustituir[".editFields"][] = "x";
$tdatahora_sustituir[".editFields"][] = "y";

$tdatahora_sustituir[".inlineEditFields"] = array();
$tdatahora_sustituir[".inlineEditFields"][] = "id1";
$tdatahora_sustituir[".inlineEditFields"][] = "correlativo";
$tdatahora_sustituir[".inlineEditFields"][] = "numero";
$tdatahora_sustituir[".inlineEditFields"][] = "id";
$tdatahora_sustituir[".inlineEditFields"][] = "codigo_muni";
$tdatahora_sustituir[".inlineEditFields"][] = "numero2";
$tdatahora_sustituir[".inlineEditFields"][] = "depart_he";
$tdatahora_sustituir[".inlineEditFields"][] = "muni_he";
$tdatahora_sustituir[".inlineEditFields"][] = "dire_hecho";
$tdatahora_sustituir[".inlineEditFields"][] = "lugar_esp";
$tdatahora_sustituir[".inlineEditFields"][] = "lugaranalisis";
$tdatahora_sustituir[".inlineEditFields"][] = "area";
$tdatahora_sustituir[".inlineEditFields"][] = "forma_cono";
$tdatahora_sustituir[".inlineEditFields"][] = "delito";
$tdatahora_sustituir[".inlineEditFields"][] = "delito_espe";
$tdatahora_sustituir[".inlineEditFields"][] = "dia_hecho";
$tdatahora_sustituir[".inlineEditFields"][] = "hora_hecho";
$tdatahora_sustituir[".inlineEditFields"][] = "rango_hora";
$tdatahora_sustituir[".inlineEditFields"][] = "fecha_hecho";
$tdatahora_sustituir[".inlineEditFields"][] = "aÑo_hecho";
$tdatahora_sustituir[".inlineEditFields"][] = "edad_victima";
$tdatahora_sustituir[".inlineEditFields"][] = "ran_eta_vic";
$tdatahora_sustituir[".inlineEditFields"][] = "s_victima";
$tdatahora_sustituir[".inlineEditFields"][] = "oc_victima";
$tdatahora_sustituir[".inlineEditFields"][] = "relacion_vi_agre";
$tdatahora_sustituir[".inlineEditFields"][] = "edad_agresor";
$tdatahora_sustituir[".inlineEditFields"][] = "sexo__agresor";
$tdatahora_sustituir[".inlineEditFields"][] = "ocupa_agresor";
$tdatahora_sustituir[".inlineEditFields"][] = "movil";
$tdatahora_sustituir[".inlineEditFields"][] = "tipo_arma";
$tdatahora_sustituir[".inlineEditFields"][] = "canton_hecho";
$tdatahora_sustituir[".inlineEditFields"][] = "colonia_hecho";
$tdatahora_sustituir[".inlineEditFields"][] = "caserio_hecho";
$tdatahora_sustituir[".inlineEditFields"][] = "calle_hecho";
$tdatahora_sustituir[".inlineEditFields"][] = "avenida_hecho";
$tdatahora_sustituir[".inlineEditFields"][] = "casa_hecho";
$tdatahora_sustituir[".inlineEditFields"][] = "comu_hecho";
$tdatahora_sustituir[".inlineEditFields"][] = "barrio_hecho";
$tdatahora_sustituir[".inlineEditFields"][] = "comp_hecho";
$tdatahora_sustituir[".inlineEditFields"][] = "sector_ppd";
$tdatahora_sustituir[".inlineEditFields"][] = "tipo";
$tdatahora_sustituir[".inlineEditFields"][] = "nombre";
$tdatahora_sustituir[".inlineEditFields"][] = "x";
$tdatahora_sustituir[".inlineEditFields"][] = "y";

$tdatahora_sustituir[".updateSelectedFields"] = array();
$tdatahora_sustituir[".updateSelectedFields"][] = "id1";
$tdatahora_sustituir[".updateSelectedFields"][] = "correlativo";
$tdatahora_sustituir[".updateSelectedFields"][] = "numero";
$tdatahora_sustituir[".updateSelectedFields"][] = "id";
$tdatahora_sustituir[".updateSelectedFields"][] = "codigo_muni";
$tdatahora_sustituir[".updateSelectedFields"][] = "numero2";
$tdatahora_sustituir[".updateSelectedFields"][] = "depart_he";
$tdatahora_sustituir[".updateSelectedFields"][] = "muni_he";
$tdatahora_sustituir[".updateSelectedFields"][] = "dire_hecho";
$tdatahora_sustituir[".updateSelectedFields"][] = "lugar_esp";
$tdatahora_sustituir[".updateSelectedFields"][] = "lugaranalisis";
$tdatahora_sustituir[".updateSelectedFields"][] = "area";
$tdatahora_sustituir[".updateSelectedFields"][] = "forma_cono";
$tdatahora_sustituir[".updateSelectedFields"][] = "delito";
$tdatahora_sustituir[".updateSelectedFields"][] = "delito_espe";
$tdatahora_sustituir[".updateSelectedFields"][] = "dia_hecho";
$tdatahora_sustituir[".updateSelectedFields"][] = "hora_hecho";
$tdatahora_sustituir[".updateSelectedFields"][] = "rango_hora";
$tdatahora_sustituir[".updateSelectedFields"][] = "fecha_hecho";
$tdatahora_sustituir[".updateSelectedFields"][] = "aÑo_hecho";
$tdatahora_sustituir[".updateSelectedFields"][] = "edad_victima";
$tdatahora_sustituir[".updateSelectedFields"][] = "ran_eta_vic";
$tdatahora_sustituir[".updateSelectedFields"][] = "s_victima";
$tdatahora_sustituir[".updateSelectedFields"][] = "oc_victima";
$tdatahora_sustituir[".updateSelectedFields"][] = "relacion_vi_agre";
$tdatahora_sustituir[".updateSelectedFields"][] = "edad_agresor";
$tdatahora_sustituir[".updateSelectedFields"][] = "sexo__agresor";
$tdatahora_sustituir[".updateSelectedFields"][] = "ocupa_agresor";
$tdatahora_sustituir[".updateSelectedFields"][] = "movil";
$tdatahora_sustituir[".updateSelectedFields"][] = "tipo_arma";
$tdatahora_sustituir[".updateSelectedFields"][] = "canton_hecho";
$tdatahora_sustituir[".updateSelectedFields"][] = "colonia_hecho";
$tdatahora_sustituir[".updateSelectedFields"][] = "caserio_hecho";
$tdatahora_sustituir[".updateSelectedFields"][] = "calle_hecho";
$tdatahora_sustituir[".updateSelectedFields"][] = "avenida_hecho";
$tdatahora_sustituir[".updateSelectedFields"][] = "casa_hecho";
$tdatahora_sustituir[".updateSelectedFields"][] = "comu_hecho";
$tdatahora_sustituir[".updateSelectedFields"][] = "barrio_hecho";
$tdatahora_sustituir[".updateSelectedFields"][] = "comp_hecho";
$tdatahora_sustituir[".updateSelectedFields"][] = "sector_ppd";
$tdatahora_sustituir[".updateSelectedFields"][] = "tipo";
$tdatahora_sustituir[".updateSelectedFields"][] = "nombre";
$tdatahora_sustituir[".updateSelectedFields"][] = "x";
$tdatahora_sustituir[".updateSelectedFields"][] = "y";


$tdatahora_sustituir[".exportFields"] = array();
$tdatahora_sustituir[".exportFields"][] = "id1";
$tdatahora_sustituir[".exportFields"][] = "correlativo";
$tdatahora_sustituir[".exportFields"][] = "numero";
$tdatahora_sustituir[".exportFields"][] = "id";
$tdatahora_sustituir[".exportFields"][] = "codigo_muni";
$tdatahora_sustituir[".exportFields"][] = "numero2";
$tdatahora_sustituir[".exportFields"][] = "depart_he";
$tdatahora_sustituir[".exportFields"][] = "muni_he";
$tdatahora_sustituir[".exportFields"][] = "dire_hecho";
$tdatahora_sustituir[".exportFields"][] = "lugar_esp";
$tdatahora_sustituir[".exportFields"][] = "lugaranalisis";
$tdatahora_sustituir[".exportFields"][] = "area";
$tdatahora_sustituir[".exportFields"][] = "forma_cono";
$tdatahora_sustituir[".exportFields"][] = "delito";
$tdatahora_sustituir[".exportFields"][] = "delito_espe";
$tdatahora_sustituir[".exportFields"][] = "dia_hecho";
$tdatahora_sustituir[".exportFields"][] = "hora_hecho";
$tdatahora_sustituir[".exportFields"][] = "rango_hora";
$tdatahora_sustituir[".exportFields"][] = "fecha_hecho";
$tdatahora_sustituir[".exportFields"][] = "aÑo_hecho";
$tdatahora_sustituir[".exportFields"][] = "edad_victima";
$tdatahora_sustituir[".exportFields"][] = "ran_eta_vic";
$tdatahora_sustituir[".exportFields"][] = "s_victima";
$tdatahora_sustituir[".exportFields"][] = "oc_victima";
$tdatahora_sustituir[".exportFields"][] = "relacion_vi_agre";
$tdatahora_sustituir[".exportFields"][] = "edad_agresor";
$tdatahora_sustituir[".exportFields"][] = "sexo__agresor";
$tdatahora_sustituir[".exportFields"][] = "ocupa_agresor";
$tdatahora_sustituir[".exportFields"][] = "movil";
$tdatahora_sustituir[".exportFields"][] = "tipo_arma";
$tdatahora_sustituir[".exportFields"][] = "canton_hecho";
$tdatahora_sustituir[".exportFields"][] = "colonia_hecho";
$tdatahora_sustituir[".exportFields"][] = "caserio_hecho";
$tdatahora_sustituir[".exportFields"][] = "calle_hecho";
$tdatahora_sustituir[".exportFields"][] = "avenida_hecho";
$tdatahora_sustituir[".exportFields"][] = "casa_hecho";
$tdatahora_sustituir[".exportFields"][] = "comu_hecho";
$tdatahora_sustituir[".exportFields"][] = "barrio_hecho";
$tdatahora_sustituir[".exportFields"][] = "comp_hecho";
$tdatahora_sustituir[".exportFields"][] = "sector_ppd";
$tdatahora_sustituir[".exportFields"][] = "tipo";
$tdatahora_sustituir[".exportFields"][] = "nombre";
$tdatahora_sustituir[".exportFields"][] = "x";
$tdatahora_sustituir[".exportFields"][] = "y";

$tdatahora_sustituir[".importFields"] = array();
$tdatahora_sustituir[".importFields"][] = "id1";
$tdatahora_sustituir[".importFields"][] = "correlativo";
$tdatahora_sustituir[".importFields"][] = "numero";
$tdatahora_sustituir[".importFields"][] = "id";
$tdatahora_sustituir[".importFields"][] = "codigo_muni";
$tdatahora_sustituir[".importFields"][] = "numero2";
$tdatahora_sustituir[".importFields"][] = "depart_he";
$tdatahora_sustituir[".importFields"][] = "muni_he";
$tdatahora_sustituir[".importFields"][] = "dire_hecho";
$tdatahora_sustituir[".importFields"][] = "lugar_esp";
$tdatahora_sustituir[".importFields"][] = "lugaranalisis";
$tdatahora_sustituir[".importFields"][] = "area";
$tdatahora_sustituir[".importFields"][] = "forma_cono";
$tdatahora_sustituir[".importFields"][] = "delito";
$tdatahora_sustituir[".importFields"][] = "delito_espe";
$tdatahora_sustituir[".importFields"][] = "dia_hecho";
$tdatahora_sustituir[".importFields"][] = "hora_hecho";
$tdatahora_sustituir[".importFields"][] = "rango_hora";
$tdatahora_sustituir[".importFields"][] = "fecha_hecho";
$tdatahora_sustituir[".importFields"][] = "aÑo_hecho";
$tdatahora_sustituir[".importFields"][] = "edad_victima";
$tdatahora_sustituir[".importFields"][] = "ran_eta_vic";
$tdatahora_sustituir[".importFields"][] = "s_victima";
$tdatahora_sustituir[".importFields"][] = "oc_victima";
$tdatahora_sustituir[".importFields"][] = "relacion_vi_agre";
$tdatahora_sustituir[".importFields"][] = "edad_agresor";
$tdatahora_sustituir[".importFields"][] = "sexo__agresor";
$tdatahora_sustituir[".importFields"][] = "ocupa_agresor";
$tdatahora_sustituir[".importFields"][] = "movil";
$tdatahora_sustituir[".importFields"][] = "tipo_arma";
$tdatahora_sustituir[".importFields"][] = "canton_hecho";
$tdatahora_sustituir[".importFields"][] = "colonia_hecho";
$tdatahora_sustituir[".importFields"][] = "caserio_hecho";
$tdatahora_sustituir[".importFields"][] = "calle_hecho";
$tdatahora_sustituir[".importFields"][] = "avenida_hecho";
$tdatahora_sustituir[".importFields"][] = "casa_hecho";
$tdatahora_sustituir[".importFields"][] = "comu_hecho";
$tdatahora_sustituir[".importFields"][] = "barrio_hecho";
$tdatahora_sustituir[".importFields"][] = "comp_hecho";
$tdatahora_sustituir[".importFields"][] = "sector_ppd";
$tdatahora_sustituir[".importFields"][] = "tipo";
$tdatahora_sustituir[".importFields"][] = "nombre";
$tdatahora_sustituir[".importFields"][] = "x";
$tdatahora_sustituir[".importFields"][] = "y";

$tdatahora_sustituir[".printFields"] = array();
$tdatahora_sustituir[".printFields"][] = "id1";
$tdatahora_sustituir[".printFields"][] = "correlativo";
$tdatahora_sustituir[".printFields"][] = "numero";
$tdatahora_sustituir[".printFields"][] = "id";
$tdatahora_sustituir[".printFields"][] = "codigo_muni";
$tdatahora_sustituir[".printFields"][] = "numero2";
$tdatahora_sustituir[".printFields"][] = "depart_he";
$tdatahora_sustituir[".printFields"][] = "muni_he";
$tdatahora_sustituir[".printFields"][] = "dire_hecho";
$tdatahora_sustituir[".printFields"][] = "lugar_esp";
$tdatahora_sustituir[".printFields"][] = "lugaranalisis";
$tdatahora_sustituir[".printFields"][] = "area";
$tdatahora_sustituir[".printFields"][] = "forma_cono";
$tdatahora_sustituir[".printFields"][] = "delito";
$tdatahora_sustituir[".printFields"][] = "delito_espe";
$tdatahora_sustituir[".printFields"][] = "dia_hecho";
$tdatahora_sustituir[".printFields"][] = "hora_hecho";
$tdatahora_sustituir[".printFields"][] = "rango_hora";
$tdatahora_sustituir[".printFields"][] = "fecha_hecho";
$tdatahora_sustituir[".printFields"][] = "aÑo_hecho";
$tdatahora_sustituir[".printFields"][] = "edad_victima";
$tdatahora_sustituir[".printFields"][] = "ran_eta_vic";
$tdatahora_sustituir[".printFields"][] = "s_victima";
$tdatahora_sustituir[".printFields"][] = "oc_victima";
$tdatahora_sustituir[".printFields"][] = "relacion_vi_agre";
$tdatahora_sustituir[".printFields"][] = "edad_agresor";
$tdatahora_sustituir[".printFields"][] = "sexo__agresor";
$tdatahora_sustituir[".printFields"][] = "ocupa_agresor";
$tdatahora_sustituir[".printFields"][] = "movil";
$tdatahora_sustituir[".printFields"][] = "tipo_arma";
$tdatahora_sustituir[".printFields"][] = "canton_hecho";
$tdatahora_sustituir[".printFields"][] = "colonia_hecho";
$tdatahora_sustituir[".printFields"][] = "caserio_hecho";
$tdatahora_sustituir[".printFields"][] = "calle_hecho";
$tdatahora_sustituir[".printFields"][] = "avenida_hecho";
$tdatahora_sustituir[".printFields"][] = "casa_hecho";
$tdatahora_sustituir[".printFields"][] = "comu_hecho";
$tdatahora_sustituir[".printFields"][] = "barrio_hecho";
$tdatahora_sustituir[".printFields"][] = "comp_hecho";
$tdatahora_sustituir[".printFields"][] = "sector_ppd";
$tdatahora_sustituir[".printFields"][] = "tipo";
$tdatahora_sustituir[".printFields"][] = "nombre";
$tdatahora_sustituir[".printFields"][] = "x";
$tdatahora_sustituir[".printFields"][] = "y";

//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id1";
	$fdata["GoodName"] = "id1";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","id1");
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




	$tdatahora_sustituir["id1"] = $fdata;
//	correlativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "correlativo";
	$fdata["GoodName"] = "correlativo";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","correlativo");
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




	$tdatahora_sustituir["correlativo"] = $fdata;
//	numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "numero";
	$fdata["GoodName"] = "numero";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","numero");
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

		$fdata["strField"] = "numero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numero";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
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




	$tdatahora_sustituir["numero"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","id");
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




	$tdatahora_sustituir["id"] = $fdata;
//	codigo_muni
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "codigo_muni";
	$fdata["GoodName"] = "codigo_muni";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","codigo_muni");
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




	$tdatahora_sustituir["codigo_muni"] = $fdata;
//	numero2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "numero2";
	$fdata["GoodName"] = "numero2";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","numero2");
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

		$fdata["strField"] = "numero2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numero2";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
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




	$tdatahora_sustituir["numero2"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","depart_he");
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




	$tdatahora_sustituir["depart_he"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","muni_he");
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




	$tdatahora_sustituir["muni_he"] = $fdata;
//	dire_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dire_hecho";
	$fdata["GoodName"] = "dire_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","dire_hecho");
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




	$tdatahora_sustituir["dire_hecho"] = $fdata;
//	lugar_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "lugar_esp";
	$fdata["GoodName"] = "lugar_esp";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","lugar_esp");
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




	$tdatahora_sustituir["lugar_esp"] = $fdata;
//	lugaranalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "lugaranalisis";
	$fdata["GoodName"] = "lugaranalisis";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","lugaranalisis");
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




	$tdatahora_sustituir["lugaranalisis"] = $fdata;
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","area");
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




	$tdatahora_sustituir["area"] = $fdata;
//	forma_cono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "forma_cono";
	$fdata["GoodName"] = "forma_cono";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","forma_cono");
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




	$tdatahora_sustituir["forma_cono"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","delito");
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




	$tdatahora_sustituir["delito"] = $fdata;
//	delito_espe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "delito_espe";
	$fdata["GoodName"] = "delito_espe";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","delito_espe");
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




	$tdatahora_sustituir["delito_espe"] = $fdata;
//	dia_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "dia_hecho";
	$fdata["GoodName"] = "dia_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","dia_hecho");
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




	$tdatahora_sustituir["dia_hecho"] = $fdata;
//	hora_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "hora_hecho";
	$fdata["GoodName"] = "hora_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","hora_hecho");
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




	$tdatahora_sustituir["hora_hecho"] = $fdata;
//	rango_hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "rango_hora";
	$fdata["GoodName"] = "rango_hora";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","rango_hora");
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




	$tdatahora_sustituir["rango_hora"] = $fdata;
//	fecha_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "fecha_hecho";
	$fdata["GoodName"] = "fecha_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","fecha_hecho");
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




	$tdatahora_sustituir["fecha_hecho"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","a_o_hecho");
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

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
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




	$tdatahora_sustituir["aÑo_hecho"] = $fdata;
//	edad_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "edad_victima";
	$fdata["GoodName"] = "edad_victima";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","edad_victima");
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




	$tdatahora_sustituir["edad_victima"] = $fdata;
//	ran_eta_vic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "ran_eta_vic";
	$fdata["GoodName"] = "ran_eta_vic";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","ran_eta_vic");
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




	$tdatahora_sustituir["ran_eta_vic"] = $fdata;
//	s_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "s_victima";
	$fdata["GoodName"] = "s_victima";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","s_victima");
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




	$tdatahora_sustituir["s_victima"] = $fdata;
//	oc_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "oc_victima";
	$fdata["GoodName"] = "oc_victima";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","oc_victima");
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




	$tdatahora_sustituir["oc_victima"] = $fdata;
//	relacion_vi_agre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "relacion_vi_agre";
	$fdata["GoodName"] = "relacion_vi_agre";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","relacion_vi_agre");
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




	$tdatahora_sustituir["relacion_vi_agre"] = $fdata;
//	edad_agresor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "edad_agresor";
	$fdata["GoodName"] = "edad_agresor";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","edad_agresor");
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




	$tdatahora_sustituir["edad_agresor"] = $fdata;
//	sexo__agresor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "sexo__agresor";
	$fdata["GoodName"] = "sexo__agresor";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","sexo__agresor");
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

		$fdata["strField"] = "sexo__agresor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sexo__agresor";

	
	
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




	$tdatahora_sustituir["sexo__agresor"] = $fdata;
//	ocupa_agresor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "ocupa_agresor";
	$fdata["GoodName"] = "ocupa_agresor";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","ocupa_agresor");
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




	$tdatahora_sustituir["ocupa_agresor"] = $fdata;
//	movil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "movil";
	$fdata["GoodName"] = "movil";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","movil");
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




	$tdatahora_sustituir["movil"] = $fdata;
//	tipo_arma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "tipo_arma";
	$fdata["GoodName"] = "tipo_arma";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","tipo_arma");
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




	$tdatahora_sustituir["tipo_arma"] = $fdata;
//	canton_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "canton_hecho";
	$fdata["GoodName"] = "canton_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","canton_hecho");
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




	$tdatahora_sustituir["canton_hecho"] = $fdata;
//	colonia_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "colonia_hecho";
	$fdata["GoodName"] = "colonia_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","colonia_hecho");
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




	$tdatahora_sustituir["colonia_hecho"] = $fdata;
//	caserio_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "caserio_hecho";
	$fdata["GoodName"] = "caserio_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","caserio_hecho");
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




	$tdatahora_sustituir["caserio_hecho"] = $fdata;
//	calle_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "calle_hecho";
	$fdata["GoodName"] = "calle_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","calle_hecho");
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




	$tdatahora_sustituir["calle_hecho"] = $fdata;
//	avenida_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "avenida_hecho";
	$fdata["GoodName"] = "avenida_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","avenida_hecho");
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




	$tdatahora_sustituir["avenida_hecho"] = $fdata;
//	casa_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "casa_hecho";
	$fdata["GoodName"] = "casa_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","casa_hecho");
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




	$tdatahora_sustituir["casa_hecho"] = $fdata;
//	comu_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "comu_hecho";
	$fdata["GoodName"] = "comu_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","comu_hecho");
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

		$fdata["strField"] = "comu_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comu_hecho";

	
	
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




	$tdatahora_sustituir["comu_hecho"] = $fdata;
//	barrio_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "barrio_hecho";
	$fdata["GoodName"] = "barrio_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","barrio_hecho");
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




	$tdatahora_sustituir["barrio_hecho"] = $fdata;
//	comp_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "comp_hecho";
	$fdata["GoodName"] = "comp_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","comp_hecho");
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




	$tdatahora_sustituir["comp_hecho"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","sector_ppd");
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




	$tdatahora_sustituir["sector_ppd"] = $fdata;
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","tipo");
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




	$tdatahora_sustituir["tipo"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","nombre");
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




	$tdatahora_sustituir["nombre"] = $fdata;
//	x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "x";
	$fdata["GoodName"] = "x";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","x");
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

		$fdata["strField"] = "x";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "x";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
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




	$tdatahora_sustituir["x"] = $fdata;
//	y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "y";
	$fdata["GoodName"] = "y";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hora_sustituir","y");
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

		$fdata["strField"] = "y";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "y";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
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




	$tdatahora_sustituir["y"] = $fdata;


$tables_data["hora_sustituir"]=&$tdatahora_sustituir;
$field_labels["hora_sustituir"] = &$fieldLabelshora_sustituir;
$fieldToolTips["hora_sustituir"] = &$fieldToolTipshora_sustituir;
$placeHolders["hora_sustituir"] = &$placeHoldershora_sustituir;
$page_titles["hora_sustituir"] = &$pageTitleshora_sustituir;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hora_sustituir"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hora_sustituir"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hora_sustituir()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id1,  	correlativo,  	numero,  	id,  	codigo_muni,  	numero2,  	depart_he,  	muni_he,  	dire_hecho,  	lugar_esp,  	lugaranalisis,  	area,  	forma_cono,  	delito,  	delito_espe,  	dia_hecho,  	hora_hecho,  	rango_hora,  	fecha_hecho,  	`aÑo_hecho`,  	edad_victima,  	ran_eta_vic,  	s_victima,  	oc_victima,  	relacion_vi_agre,  	edad_agresor,  	sexo__agresor,  	ocupa_agresor,  	movil,  	tipo_arma,  	canton_hecho,  	colonia_hecho,  	caserio_hecho,  	calle_hecho,  	avenida_hecho,  	casa_hecho,  	comu_hecho,  	barrio_hecho,  	comp_hecho,  	sector_ppd,  	tipo,  	nombre,  	x,  	y";
$proto0["m_strFrom"] = "FROM hechosdelictivos";
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
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto6["m_sql"] = "id1";
$proto6["m_srcTableName"] = "hora_sustituir";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "correlativo",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto8["m_sql"] = "correlativo";
$proto8["m_srcTableName"] = "hora_sustituir";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "numero",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto10["m_sql"] = "numero";
$proto10["m_srcTableName"] = "hora_sustituir";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto12["m_sql"] = "id";
$proto12["m_srcTableName"] = "hora_sustituir";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo_muni",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto14["m_sql"] = "codigo_muni";
$proto14["m_srcTableName"] = "hora_sustituir";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "numero2",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto16["m_sql"] = "numero2";
$proto16["m_srcTableName"] = "hora_sustituir";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto18["m_sql"] = "depart_he";
$proto18["m_srcTableName"] = "hora_sustituir";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto20["m_sql"] = "muni_he";
$proto20["m_srcTableName"] = "hora_sustituir";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dire_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto22["m_sql"] = "dire_hecho";
$proto22["m_srcTableName"] = "hora_sustituir";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "lugar_esp",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto24["m_sql"] = "lugar_esp";
$proto24["m_srcTableName"] = "hora_sustituir";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "lugaranalisis",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto26["m_sql"] = "lugaranalisis";
$proto26["m_srcTableName"] = "hora_sustituir";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto28["m_sql"] = "area";
$proto28["m_srcTableName"] = "hora_sustituir";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "forma_cono",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto30["m_sql"] = "forma_cono";
$proto30["m_srcTableName"] = "hora_sustituir";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto32["m_sql"] = "delito";
$proto32["m_srcTableName"] = "hora_sustituir";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "delito_espe",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto34["m_sql"] = "delito_espe";
$proto34["m_srcTableName"] = "hora_sustituir";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto36["m_sql"] = "dia_hecho";
$proto36["m_srcTableName"] = "hora_sustituir";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto38["m_sql"] = "hora_hecho";
$proto38["m_srcTableName"] = "hora_sustituir";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "rango_hora",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto40["m_sql"] = "rango_hora";
$proto40["m_srcTableName"] = "hora_sustituir";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto42["m_sql"] = "fecha_hecho";
$proto42["m_srcTableName"] = "hora_sustituir";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto44["m_sql"] = "`aÑo_hecho`";
$proto44["m_srcTableName"] = "hora_sustituir";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "edad_victima",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto46["m_sql"] = "edad_victima";
$proto46["m_srcTableName"] = "hora_sustituir";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "ran_eta_vic",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto48["m_sql"] = "ran_eta_vic";
$proto48["m_srcTableName"] = "hora_sustituir";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto50["m_sql"] = "s_victima";
$proto50["m_srcTableName"] = "hora_sustituir";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "oc_victima",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto52["m_sql"] = "oc_victima";
$proto52["m_srcTableName"] = "hora_sustituir";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "relacion_vi_agre",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto54["m_sql"] = "relacion_vi_agre";
$proto54["m_srcTableName"] = "hora_sustituir";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "edad_agresor",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto56["m_sql"] = "edad_agresor";
$proto56["m_srcTableName"] = "hora_sustituir";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo__agresor",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto58["m_sql"] = "sexo__agresor";
$proto58["m_srcTableName"] = "hora_sustituir";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "ocupa_agresor",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto60["m_sql"] = "ocupa_agresor";
$proto60["m_srcTableName"] = "hora_sustituir";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "movil",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto62["m_sql"] = "movil";
$proto62["m_srcTableName"] = "hora_sustituir";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_arma",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto64["m_sql"] = "tipo_arma";
$proto64["m_srcTableName"] = "hora_sustituir";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "canton_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto66["m_sql"] = "canton_hecho";
$proto66["m_srcTableName"] = "hora_sustituir";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "colonia_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto68["m_sql"] = "colonia_hecho";
$proto68["m_srcTableName"] = "hora_sustituir";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "caserio_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto70["m_sql"] = "caserio_hecho";
$proto70["m_srcTableName"] = "hora_sustituir";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "calle_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto72["m_sql"] = "calle_hecho";
$proto72["m_srcTableName"] = "hora_sustituir";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "avenida_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto74["m_sql"] = "avenida_hecho";
$proto74["m_srcTableName"] = "hora_sustituir";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "casa_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto76["m_sql"] = "casa_hecho";
$proto76["m_srcTableName"] = "hora_sustituir";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "comu_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto78["m_sql"] = "comu_hecho";
$proto78["m_srcTableName"] = "hora_sustituir";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "barrio_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto80["m_sql"] = "barrio_hecho";
$proto80["m_srcTableName"] = "hora_sustituir";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "comp_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto82["m_sql"] = "comp_hecho";
$proto82["m_srcTableName"] = "hora_sustituir";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto84["m_sql"] = "sector_ppd";
$proto84["m_srcTableName"] = "hora_sustituir";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto86["m_sql"] = "tipo";
$proto86["m_srcTableName"] = "hora_sustituir";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto88["m_sql"] = "nombre";
$proto88["m_srcTableName"] = "hora_sustituir";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "x",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto90["m_sql"] = "x";
$proto90["m_srcTableName"] = "hora_sustituir";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "y",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hora_sustituir"
));

$proto92["m_sql"] = "y";
$proto92["m_srcTableName"] = "hora_sustituir";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto94=array();
$proto94["m_link"] = "SQLL_MAIN";
			$proto95=array();
$proto95["m_strName"] = "hechosdelictivos";
$proto95["m_srcTableName"] = "hora_sustituir";
$proto95["m_columns"] = array();
$proto95["m_columns"][] = "id1";
$proto95["m_columns"][] = "correlativo";
$proto95["m_columns"][] = "numero";
$proto95["m_columns"][] = "id";
$proto95["m_columns"][] = "codigo_muni";
$proto95["m_columns"][] = "numero2";
$proto95["m_columns"][] = "depart_he";
$proto95["m_columns"][] = "muni_he";
$proto95["m_columns"][] = "dire_hecho";
$proto95["m_columns"][] = "lugar_esp";
$proto95["m_columns"][] = "lugaranalisis";
$proto95["m_columns"][] = "area";
$proto95["m_columns"][] = "forma_cono";
$proto95["m_columns"][] = "delito";
$proto95["m_columns"][] = "delito_espe";
$proto95["m_columns"][] = "dia_hecho";
$proto95["m_columns"][] = "hora_hecho";
$proto95["m_columns"][] = "rango_hora";
$proto95["m_columns"][] = "fecha_hecho";
$proto95["m_columns"][] = "aÑo_hecho";
$proto95["m_columns"][] = "edad_victima";
$proto95["m_columns"][] = "ran_eta_vic";
$proto95["m_columns"][] = "s_victima";
$proto95["m_columns"][] = "oc_victima";
$proto95["m_columns"][] = "relacion_vi_agre";
$proto95["m_columns"][] = "edad_agresor";
$proto95["m_columns"][] = "sexo__agresor";
$proto95["m_columns"][] = "ocupa_agresor";
$proto95["m_columns"][] = "movil";
$proto95["m_columns"][] = "tipo_arma";
$proto95["m_columns"][] = "canton_hecho";
$proto95["m_columns"][] = "colonia_hecho";
$proto95["m_columns"][] = "caserio_hecho";
$proto95["m_columns"][] = "calle_hecho";
$proto95["m_columns"][] = "avenida_hecho";
$proto95["m_columns"][] = "casa_hecho";
$proto95["m_columns"][] = "comu_hecho";
$proto95["m_columns"][] = "barrio_hecho";
$proto95["m_columns"][] = "comp_hecho";
$proto95["m_columns"][] = "sector_ppd";
$proto95["m_columns"][] = "tipo";
$proto95["m_columns"][] = "nombre";
$proto95["m_columns"][] = "x";
$proto95["m_columns"][] = "y";
$obj = new SQLTable($proto95);

$proto94["m_table"] = $obj;
$proto94["m_sql"] = "hechosdelictivos";
$proto94["m_alias"] = "";
$proto94["m_srcTableName"] = "hora_sustituir";
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
$proto0["m_srcTableName"]="hora_sustituir";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hora_sustituir = createSqlQuery_hora_sustituir();


	
		;

																																												

$tdatahora_sustituir[".sqlquery"] = $queryData_hora_sustituir;

$tableEvents["hora_sustituir"] = new eventsBase;
$tdatahora_sustituir[".hasEvents"] = false;

?>