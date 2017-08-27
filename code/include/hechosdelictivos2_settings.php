<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahechosdelictivos2 = array();
	$tdatahechosdelictivos2[".truncateText"] = true;
	$tdatahechosdelictivos2[".NumberOfChars"] = 80;
	$tdatahechosdelictivos2[".ShortName"] = "hechosdelictivos2";
	$tdatahechosdelictivos2[".OwnerID"] = "";
	$tdatahechosdelictivos2[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelshechosdelictivos2 = array();
$fieldToolTipshechosdelictivos2 = array();
$pageTitleshechosdelictivos2 = array();
$placeHoldershechosdelictivos2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshechosdelictivos2["Spanish"] = array();
	$fieldToolTipshechosdelictivos2["Spanish"] = array();
	$placeHoldershechosdelictivos2["Spanish"] = array();
	$pageTitleshechosdelictivos2["Spanish"] = array();
	$fieldLabelshechosdelictivos2["Spanish"]["id1"] = "Id1";
	$fieldToolTipshechosdelictivos2["Spanish"]["id1"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["id1"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["correlativo"] = "Correlativo";
	$fieldToolTipshechosdelictivos2["Spanish"]["correlativo"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["correlativo"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["numero"] = "Numero";
	$fieldToolTipshechosdelictivos2["Spanish"]["numero"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["numero"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["id"] = "Id";
	$fieldToolTipshechosdelictivos2["Spanish"]["id"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["id"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["codigo_muni"] = "Codigo Muni";
	$fieldToolTipshechosdelictivos2["Spanish"]["codigo_muni"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["codigo_muni"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["numero2"] = "Numero2";
	$fieldToolTipshechosdelictivos2["Spanish"]["numero2"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["numero2"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipshechosdelictivos2["Spanish"]["depart_he"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["depart_he"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipshechosdelictivos2["Spanish"]["muni_he"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["muni_he"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["dire_hecho"] = "Dire Hecho";
	$fieldToolTipshechosdelictivos2["Spanish"]["dire_hecho"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["dire_hecho"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["area"] = "Area";
	$fieldToolTipshechosdelictivos2["Spanish"]["area"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["area"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["forma_cono"] = "Forma Cono";
	$fieldToolTipshechosdelictivos2["Spanish"]["forma_cono"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["forma_cono"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["delito"] = "Delito";
	$fieldToolTipshechosdelictivos2["Spanish"]["delito"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["delito"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["delito_espe"] = "Delito Espe";
	$fieldToolTipshechosdelictivos2["Spanish"]["delito_espe"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["delito_espe"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["dia_hecho"] = "Dia Hecho";
	$fieldToolTipshechosdelictivos2["Spanish"]["dia_hecho"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["dia_hecho"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["hora_hecho"] = "Hora Hecho";
	$fieldToolTipshechosdelictivos2["Spanish"]["hora_hecho"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["hora_hecho"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["rango_hora"] = "Rango Hora";
	$fieldToolTipshechosdelictivos2["Spanish"]["rango_hora"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["rango_hora"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["fecha_hecho"] = "Fecha Hecho";
	$fieldToolTipshechosdelictivos2["Spanish"]["fecha_hecho"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["fecha_hecho"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipshechosdelictivos2["Spanish"]["a_o_hecho"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["a_o_hecho"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["edad_victima"] = "Edad Victima";
	$fieldToolTipshechosdelictivos2["Spanish"]["edad_victima"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["edad_victima"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipshechosdelictivos2["Spanish"]["ran_eta_vic"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["ran_eta_vic"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["s_victima"] = "S Victima";
	$fieldToolTipshechosdelictivos2["Spanish"]["s_victima"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["s_victima"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["oc_victima"] = "Oc Victima";
	$fieldToolTipshechosdelictivos2["Spanish"]["oc_victima"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["oc_victima"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["relacion_vi_agre"] = "Relacion Vi Agre";
	$fieldToolTipshechosdelictivos2["Spanish"]["relacion_vi_agre"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["relacion_vi_agre"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["edad_agresor"] = "Edad Agresor";
	$fieldToolTipshechosdelictivos2["Spanish"]["edad_agresor"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["edad_agresor"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["sexo__agresor"] = "Sexo  Agresor";
	$fieldToolTipshechosdelictivos2["Spanish"]["sexo__agresor"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["sexo__agresor"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["ocupa_agresor"] = "Ocupa Agresor";
	$fieldToolTipshechosdelictivos2["Spanish"]["ocupa_agresor"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["ocupa_agresor"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["movil"] = "Movil";
	$fieldToolTipshechosdelictivos2["Spanish"]["movil"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["movil"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipshechosdelictivos2["Spanish"]["tipo_arma"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["tipo_arma"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["canton_hecho"] = "Canton Hecho";
	$fieldToolTipshechosdelictivos2["Spanish"]["canton_hecho"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["canton_hecho"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["colonia_hecho"] = "Colonia Hecho";
	$fieldToolTipshechosdelictivos2["Spanish"]["colonia_hecho"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["colonia_hecho"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["caserio_hecho"] = "Caserio Hecho";
	$fieldToolTipshechosdelictivos2["Spanish"]["caserio_hecho"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["caserio_hecho"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["calle_hecho"] = "Calle Hecho";
	$fieldToolTipshechosdelictivos2["Spanish"]["calle_hecho"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["calle_hecho"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["avenida_hecho"] = "Avenida Hecho";
	$fieldToolTipshechosdelictivos2["Spanish"]["avenida_hecho"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["avenida_hecho"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["casa_hecho"] = "Casa Hecho";
	$fieldToolTipshechosdelictivos2["Spanish"]["casa_hecho"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["casa_hecho"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["comu_hecho"] = "Comu Hecho";
	$fieldToolTipshechosdelictivos2["Spanish"]["comu_hecho"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["comu_hecho"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["barrio_hecho"] = "Barrio Hecho";
	$fieldToolTipshechosdelictivos2["Spanish"]["barrio_hecho"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["barrio_hecho"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["comp_hecho"] = "Comp Hecho";
	$fieldToolTipshechosdelictivos2["Spanish"]["comp_hecho"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["comp_hecho"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipshechosdelictivos2["Spanish"]["sector_ppd"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["sector_ppd"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["tipo"] = "Tipo";
	$fieldToolTipshechosdelictivos2["Spanish"]["tipo"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["tipo"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipshechosdelictivos2["Spanish"]["nombre"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["nombre"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["x"] = "X";
	$fieldToolTipshechosdelictivos2["Spanish"]["x"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["x"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["y"] = "Y";
	$fieldToolTipshechosdelictivos2["Spanish"]["y"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["y"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["lugaranalisis"] = "Lugaranalisis";
	$fieldToolTipshechosdelictivos2["Spanish"]["lugaranalisis"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["lugaranalisis"] = "";
	$fieldLabelshechosdelictivos2["Spanish"]["lugar_esp"] = "Lugar Esp";
	$fieldToolTipshechosdelictivos2["Spanish"]["lugar_esp"] = "";
	$placeHoldershechosdelictivos2["Spanish"]["lugar_esp"] = "";
	if (count($fieldToolTipshechosdelictivos2["Spanish"]))
		$tdatahechosdelictivos2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshechosdelictivos2["English"] = array();
	$fieldToolTipshechosdelictivos2["English"] = array();
	$placeHoldershechosdelictivos2["English"] = array();
	$pageTitleshechosdelictivos2["English"] = array();
	$fieldLabelshechosdelictivos2["English"]["id1"] = "Id1";
	$fieldToolTipshechosdelictivos2["English"]["id1"] = "";
	$placeHoldershechosdelictivos2["English"]["id1"] = "";
	$fieldLabelshechosdelictivos2["English"]["correlativo"] = "Correlativo";
	$fieldToolTipshechosdelictivos2["English"]["correlativo"] = "";
	$placeHoldershechosdelictivos2["English"]["correlativo"] = "";
	$fieldLabelshechosdelictivos2["English"]["numero"] = "Numero";
	$fieldToolTipshechosdelictivos2["English"]["numero"] = "";
	$placeHoldershechosdelictivos2["English"]["numero"] = "";
	$fieldLabelshechosdelictivos2["English"]["id"] = "Id";
	$fieldToolTipshechosdelictivos2["English"]["id"] = "";
	$placeHoldershechosdelictivos2["English"]["id"] = "";
	$fieldLabelshechosdelictivos2["English"]["codigo_muni"] = "Codigo Muni";
	$fieldToolTipshechosdelictivos2["English"]["codigo_muni"] = "";
	$placeHoldershechosdelictivos2["English"]["codigo_muni"] = "";
	$fieldLabelshechosdelictivos2["English"]["numero2"] = "Numero2";
	$fieldToolTipshechosdelictivos2["English"]["numero2"] = "";
	$placeHoldershechosdelictivos2["English"]["numero2"] = "";
	$fieldLabelshechosdelictivos2["English"]["depart_he"] = "Depart He";
	$fieldToolTipshechosdelictivos2["English"]["depart_he"] = "";
	$placeHoldershechosdelictivos2["English"]["depart_he"] = "";
	$fieldLabelshechosdelictivos2["English"]["muni_he"] = "Muni He";
	$fieldToolTipshechosdelictivos2["English"]["muni_he"] = "";
	$placeHoldershechosdelictivos2["English"]["muni_he"] = "";
	$fieldLabelshechosdelictivos2["English"]["dire_hecho"] = "Dire Hecho";
	$fieldToolTipshechosdelictivos2["English"]["dire_hecho"] = "";
	$placeHoldershechosdelictivos2["English"]["dire_hecho"] = "";
	$fieldLabelshechosdelictivos2["English"]["area"] = "Area";
	$fieldToolTipshechosdelictivos2["English"]["area"] = "";
	$placeHoldershechosdelictivos2["English"]["area"] = "";
	$fieldLabelshechosdelictivos2["English"]["forma_cono"] = "Forma Cono";
	$fieldToolTipshechosdelictivos2["English"]["forma_cono"] = "";
	$placeHoldershechosdelictivos2["English"]["forma_cono"] = "";
	$fieldLabelshechosdelictivos2["English"]["delito"] = "Delito";
	$fieldToolTipshechosdelictivos2["English"]["delito"] = "";
	$placeHoldershechosdelictivos2["English"]["delito"] = "";
	$fieldLabelshechosdelictivos2["English"]["delito_espe"] = "Delito Espe";
	$fieldToolTipshechosdelictivos2["English"]["delito_espe"] = "";
	$placeHoldershechosdelictivos2["English"]["delito_espe"] = "";
	$fieldLabelshechosdelictivos2["English"]["dia_hecho"] = "Dia Hecho";
	$fieldToolTipshechosdelictivos2["English"]["dia_hecho"] = "";
	$placeHoldershechosdelictivos2["English"]["dia_hecho"] = "";
	$fieldLabelshechosdelictivos2["English"]["hora_hecho"] = "Hora Hecho";
	$fieldToolTipshechosdelictivos2["English"]["hora_hecho"] = "";
	$placeHoldershechosdelictivos2["English"]["hora_hecho"] = "";
	$fieldLabelshechosdelictivos2["English"]["rango_hora"] = "Rango Hora";
	$fieldToolTipshechosdelictivos2["English"]["rango_hora"] = "";
	$placeHoldershechosdelictivos2["English"]["rango_hora"] = "";
	$fieldLabelshechosdelictivos2["English"]["fecha_hecho"] = "Fecha Hecho";
	$fieldToolTipshechosdelictivos2["English"]["fecha_hecho"] = "";
	$placeHoldershechosdelictivos2["English"]["fecha_hecho"] = "";
	$fieldLabelshechosdelictivos2["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipshechosdelictivos2["English"]["a_o_hecho"] = "";
	$placeHoldershechosdelictivos2["English"]["a_o_hecho"] = "";
	$fieldLabelshechosdelictivos2["English"]["edad_victima"] = "Edad Victima";
	$fieldToolTipshechosdelictivos2["English"]["edad_victima"] = "";
	$placeHoldershechosdelictivos2["English"]["edad_victima"] = "";
	$fieldLabelshechosdelictivos2["English"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipshechosdelictivos2["English"]["ran_eta_vic"] = "";
	$placeHoldershechosdelictivos2["English"]["ran_eta_vic"] = "";
	$fieldLabelshechosdelictivos2["English"]["s_victima"] = "S Victima";
	$fieldToolTipshechosdelictivos2["English"]["s_victima"] = "";
	$placeHoldershechosdelictivos2["English"]["s_victima"] = "";
	$fieldLabelshechosdelictivos2["English"]["oc_victima"] = "Oc Victima";
	$fieldToolTipshechosdelictivos2["English"]["oc_victima"] = "";
	$placeHoldershechosdelictivos2["English"]["oc_victima"] = "";
	$fieldLabelshechosdelictivos2["English"]["relacion_vi_agre"] = "Relacion Vi Agre";
	$fieldToolTipshechosdelictivos2["English"]["relacion_vi_agre"] = "";
	$placeHoldershechosdelictivos2["English"]["relacion_vi_agre"] = "";
	$fieldLabelshechosdelictivos2["English"]["edad_agresor"] = "Edad Agresor";
	$fieldToolTipshechosdelictivos2["English"]["edad_agresor"] = "";
	$placeHoldershechosdelictivos2["English"]["edad_agresor"] = "";
	$fieldLabelshechosdelictivos2["English"]["sexo__agresor"] = "Sexo  Agresor";
	$fieldToolTipshechosdelictivos2["English"]["sexo__agresor"] = "";
	$placeHoldershechosdelictivos2["English"]["sexo__agresor"] = "";
	$fieldLabelshechosdelictivos2["English"]["ocupa_agresor"] = "Ocupa Agresor";
	$fieldToolTipshechosdelictivos2["English"]["ocupa_agresor"] = "";
	$placeHoldershechosdelictivos2["English"]["ocupa_agresor"] = "";
	$fieldLabelshechosdelictivos2["English"]["movil"] = "Movil";
	$fieldToolTipshechosdelictivos2["English"]["movil"] = "";
	$placeHoldershechosdelictivos2["English"]["movil"] = "";
	$fieldLabelshechosdelictivos2["English"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipshechosdelictivos2["English"]["tipo_arma"] = "";
	$placeHoldershechosdelictivos2["English"]["tipo_arma"] = "";
	$fieldLabelshechosdelictivos2["English"]["canton_hecho"] = "Canton Hecho";
	$fieldToolTipshechosdelictivos2["English"]["canton_hecho"] = "";
	$placeHoldershechosdelictivos2["English"]["canton_hecho"] = "";
	$fieldLabelshechosdelictivos2["English"]["colonia_hecho"] = "Colonia Hecho";
	$fieldToolTipshechosdelictivos2["English"]["colonia_hecho"] = "";
	$placeHoldershechosdelictivos2["English"]["colonia_hecho"] = "";
	$fieldLabelshechosdelictivos2["English"]["caserio_hecho"] = "Caserio Hecho";
	$fieldToolTipshechosdelictivos2["English"]["caserio_hecho"] = "";
	$placeHoldershechosdelictivos2["English"]["caserio_hecho"] = "";
	$fieldLabelshechosdelictivos2["English"]["calle_hecho"] = "Calle Hecho";
	$fieldToolTipshechosdelictivos2["English"]["calle_hecho"] = "";
	$placeHoldershechosdelictivos2["English"]["calle_hecho"] = "";
	$fieldLabelshechosdelictivos2["English"]["avenida_hecho"] = "Avenida Hecho";
	$fieldToolTipshechosdelictivos2["English"]["avenida_hecho"] = "";
	$placeHoldershechosdelictivos2["English"]["avenida_hecho"] = "";
	$fieldLabelshechosdelictivos2["English"]["casa_hecho"] = "Casa Hecho";
	$fieldToolTipshechosdelictivos2["English"]["casa_hecho"] = "";
	$placeHoldershechosdelictivos2["English"]["casa_hecho"] = "";
	$fieldLabelshechosdelictivos2["English"]["comu_hecho"] = "Comu Hecho";
	$fieldToolTipshechosdelictivos2["English"]["comu_hecho"] = "";
	$placeHoldershechosdelictivos2["English"]["comu_hecho"] = "";
	$fieldLabelshechosdelictivos2["English"]["barrio_hecho"] = "Barrio Hecho";
	$fieldToolTipshechosdelictivos2["English"]["barrio_hecho"] = "";
	$placeHoldershechosdelictivos2["English"]["barrio_hecho"] = "";
	$fieldLabelshechosdelictivos2["English"]["comp_hecho"] = "Comp Hecho";
	$fieldToolTipshechosdelictivos2["English"]["comp_hecho"] = "";
	$placeHoldershechosdelictivos2["English"]["comp_hecho"] = "";
	$fieldLabelshechosdelictivos2["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipshechosdelictivos2["English"]["sector_ppd"] = "";
	$placeHoldershechosdelictivos2["English"]["sector_ppd"] = "";
	$fieldLabelshechosdelictivos2["English"]["tipo"] = "Tipo";
	$fieldToolTipshechosdelictivos2["English"]["tipo"] = "";
	$placeHoldershechosdelictivos2["English"]["tipo"] = "";
	$fieldLabelshechosdelictivos2["English"]["nombre"] = "Nombre";
	$fieldToolTipshechosdelictivos2["English"]["nombre"] = "";
	$placeHoldershechosdelictivos2["English"]["nombre"] = "";
	$fieldLabelshechosdelictivos2["English"]["x"] = "X";
	$fieldToolTipshechosdelictivos2["English"]["x"] = "";
	$placeHoldershechosdelictivos2["English"]["x"] = "";
	$fieldLabelshechosdelictivos2["English"]["y"] = "Y";
	$fieldToolTipshechosdelictivos2["English"]["y"] = "";
	$placeHoldershechosdelictivos2["English"]["y"] = "";
	$fieldLabelshechosdelictivos2["English"]["lugaranalisis"] = "Lugaranalisis";
	$fieldToolTipshechosdelictivos2["English"]["lugaranalisis"] = "";
	$placeHoldershechosdelictivos2["English"]["lugaranalisis"] = "";
	$fieldLabelshechosdelictivos2["English"]["lugar_esp"] = "Lugar Esp";
	$fieldToolTipshechosdelictivos2["English"]["lugar_esp"] = "";
	$placeHoldershechosdelictivos2["English"]["lugar_esp"] = "";
	if (count($fieldToolTipshechosdelictivos2["English"]))
		$tdatahechosdelictivos2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshechosdelictivos2[""] = array();
	$fieldToolTipshechosdelictivos2[""] = array();
	$placeHoldershechosdelictivos2[""] = array();
	$pageTitleshechosdelictivos2[""] = array();
	if (count($fieldToolTipshechosdelictivos2[""]))
		$tdatahechosdelictivos2[".isUseToolTips"] = true;
}





$tdatahechosdelictivos2[".shortTableName"] = "hechosdelictivos2";
$tdatahechosdelictivos2[".nSecOptions"] = 0;
$tdatahechosdelictivos2[".recsPerRowPrint"] = 1;
$tdatahechosdelictivos2[".mainTableOwnerID"] = "";
$tdatahechosdelictivos2[".moveNext"] = 1;
$tdatahechosdelictivos2[".entityType"] = 0;

$tdatahechosdelictivos2[".strOriginalTableName"] = "hechosdelictivos";

	



$tdatahechosdelictivos2[".showAddInPopup"] = false;

$tdatahechosdelictivos2[".showEditInPopup"] = false;

$tdatahechosdelictivos2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahechosdelictivos2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahechosdelictivos2[".fieldsForRegister"] = array();

	$tdatahechosdelictivos2[".listAjax"] = true;

	$tdatahechosdelictivos2[".audit"] = false;

	$tdatahechosdelictivos2[".locking"] = false;

$tdatahechosdelictivos2[".edit"] = true;
$tdatahechosdelictivos2[".afterEditAction"] = 1;
$tdatahechosdelictivos2[".closePopupAfterEdit"] = 1;
$tdatahechosdelictivos2[".afterEditActionDetTable"] = "";

$tdatahechosdelictivos2[".add"] = true;
$tdatahechosdelictivos2[".afterAddAction"] = 1;
$tdatahechosdelictivos2[".closePopupAfterAdd"] = 1;
$tdatahechosdelictivos2[".afterAddActionDetTable"] = "";

$tdatahechosdelictivos2[".list"] = true;

$tdatahechosdelictivos2[".inlineEdit"] = true;


$tdatahechosdelictivos2[".reorderRecordsByHeader"] = true;
$tdatahechosdelictivos2[".createSortByDropdown"] = true;
$tdatahechosdelictivos2[".strSortControlSettingsJSON"] = "";



$tdatahechosdelictivos2[".inlineAdd"] = true;
$tdatahechosdelictivos2[".view"] = true;

$tdatahechosdelictivos2[".import"] = true;

$tdatahechosdelictivos2[".exportTo"] = true;

$tdatahechosdelictivos2[".printFriendly"] = true;

$tdatahechosdelictivos2[".delete"] = true;

$tdatahechosdelictivos2[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatahechosdelictivos2[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatahechosdelictivos2[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatahechosdelictivos2[".searchSaving"] = false;
//

$tdatahechosdelictivos2[".showSearchPanel"] = true;
		$tdatahechosdelictivos2[".flexibleSearch"] = true;

$tdatahechosdelictivos2[".isUseAjaxSuggest"] = true;

$tdatahechosdelictivos2[".rowHighlite"] = true;





$tdatahechosdelictivos2[".ajaxCodeSnippetAdded"] = false;

$tdatahechosdelictivos2[".buttonsAdded"] = false;

$tdatahechosdelictivos2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahechosdelictivos2[".isUseTimeForSearch"] = false;





$tdatahechosdelictivos2[".allSearchFields"] = array();
$tdatahechosdelictivos2[".filterFields"] = array();
$tdatahechosdelictivos2[".requiredSearchFields"] = array();

$tdatahechosdelictivos2[".allSearchFields"][] = "id1";
	$tdatahechosdelictivos2[".allSearchFields"][] = "correlativo";
	$tdatahechosdelictivos2[".allSearchFields"][] = "numero";
	$tdatahechosdelictivos2[".allSearchFields"][] = "id";
	$tdatahechosdelictivos2[".allSearchFields"][] = "codigo_muni";
	$tdatahechosdelictivos2[".allSearchFields"][] = "numero2";
	$tdatahechosdelictivos2[".allSearchFields"][] = "depart_he";
	$tdatahechosdelictivos2[".allSearchFields"][] = "muni_he";
	$tdatahechosdelictivos2[".allSearchFields"][] = "dire_hecho";
	$tdatahechosdelictivos2[".allSearchFields"][] = "lugar_esp";
	$tdatahechosdelictivos2[".allSearchFields"][] = "lugaranalisis";
	$tdatahechosdelictivos2[".allSearchFields"][] = "area";
	$tdatahechosdelictivos2[".allSearchFields"][] = "forma_cono";
	$tdatahechosdelictivos2[".allSearchFields"][] = "delito";
	$tdatahechosdelictivos2[".allSearchFields"][] = "delito_espe";
	$tdatahechosdelictivos2[".allSearchFields"][] = "dia_hecho";
	$tdatahechosdelictivos2[".allSearchFields"][] = "hora_hecho";
	$tdatahechosdelictivos2[".allSearchFields"][] = "rango_hora";
	$tdatahechosdelictivos2[".allSearchFields"][] = "fecha_hecho";
	$tdatahechosdelictivos2[".allSearchFields"][] = "aÑo_hecho";
	$tdatahechosdelictivos2[".allSearchFields"][] = "edad_victima";
	$tdatahechosdelictivos2[".allSearchFields"][] = "ran_eta_vic";
	$tdatahechosdelictivos2[".allSearchFields"][] = "s_victima";
	$tdatahechosdelictivos2[".allSearchFields"][] = "oc_victima";
	$tdatahechosdelictivos2[".allSearchFields"][] = "relacion_vi_agre";
	$tdatahechosdelictivos2[".allSearchFields"][] = "edad_agresor";
	$tdatahechosdelictivos2[".allSearchFields"][] = "sexo__agresor";
	$tdatahechosdelictivos2[".allSearchFields"][] = "ocupa_agresor";
	$tdatahechosdelictivos2[".allSearchFields"][] = "movil";
	$tdatahechosdelictivos2[".allSearchFields"][] = "tipo_arma";
	$tdatahechosdelictivos2[".allSearchFields"][] = "canton_hecho";
	$tdatahechosdelictivos2[".allSearchFields"][] = "colonia_hecho";
	$tdatahechosdelictivos2[".allSearchFields"][] = "caserio_hecho";
	$tdatahechosdelictivos2[".allSearchFields"][] = "calle_hecho";
	$tdatahechosdelictivos2[".allSearchFields"][] = "avenida_hecho";
	$tdatahechosdelictivos2[".allSearchFields"][] = "casa_hecho";
	$tdatahechosdelictivos2[".allSearchFields"][] = "comu_hecho";
	$tdatahechosdelictivos2[".allSearchFields"][] = "barrio_hecho";
	$tdatahechosdelictivos2[".allSearchFields"][] = "comp_hecho";
	$tdatahechosdelictivos2[".allSearchFields"][] = "sector_ppd";
	$tdatahechosdelictivos2[".allSearchFields"][] = "tipo";
	$tdatahechosdelictivos2[".allSearchFields"][] = "nombre";
	$tdatahechosdelictivos2[".allSearchFields"][] = "x";
	$tdatahechosdelictivos2[".allSearchFields"][] = "y";
	

$tdatahechosdelictivos2[".googleLikeFields"] = array();
$tdatahechosdelictivos2[".googleLikeFields"][] = "id1";
$tdatahechosdelictivos2[".googleLikeFields"][] = "correlativo";
$tdatahechosdelictivos2[".googleLikeFields"][] = "numero";
$tdatahechosdelictivos2[".googleLikeFields"][] = "id";
$tdatahechosdelictivos2[".googleLikeFields"][] = "codigo_muni";
$tdatahechosdelictivos2[".googleLikeFields"][] = "numero2";
$tdatahechosdelictivos2[".googleLikeFields"][] = "depart_he";
$tdatahechosdelictivos2[".googleLikeFields"][] = "muni_he";
$tdatahechosdelictivos2[".googleLikeFields"][] = "dire_hecho";
$tdatahechosdelictivos2[".googleLikeFields"][] = "lugar_esp";
$tdatahechosdelictivos2[".googleLikeFields"][] = "lugaranalisis";
$tdatahechosdelictivos2[".googleLikeFields"][] = "area";
$tdatahechosdelictivos2[".googleLikeFields"][] = "forma_cono";
$tdatahechosdelictivos2[".googleLikeFields"][] = "delito";
$tdatahechosdelictivos2[".googleLikeFields"][] = "delito_espe";
$tdatahechosdelictivos2[".googleLikeFields"][] = "dia_hecho";
$tdatahechosdelictivos2[".googleLikeFields"][] = "hora_hecho";
$tdatahechosdelictivos2[".googleLikeFields"][] = "rango_hora";
$tdatahechosdelictivos2[".googleLikeFields"][] = "fecha_hecho";
$tdatahechosdelictivos2[".googleLikeFields"][] = "aÑo_hecho";
$tdatahechosdelictivos2[".googleLikeFields"][] = "edad_victima";
$tdatahechosdelictivos2[".googleLikeFields"][] = "ran_eta_vic";
$tdatahechosdelictivos2[".googleLikeFields"][] = "s_victima";
$tdatahechosdelictivos2[".googleLikeFields"][] = "oc_victima";
$tdatahechosdelictivos2[".googleLikeFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos2[".googleLikeFields"][] = "edad_agresor";
$tdatahechosdelictivos2[".googleLikeFields"][] = "sexo__agresor";
$tdatahechosdelictivos2[".googleLikeFields"][] = "ocupa_agresor";
$tdatahechosdelictivos2[".googleLikeFields"][] = "movil";
$tdatahechosdelictivos2[".googleLikeFields"][] = "tipo_arma";
$tdatahechosdelictivos2[".googleLikeFields"][] = "canton_hecho";
$tdatahechosdelictivos2[".googleLikeFields"][] = "colonia_hecho";
$tdatahechosdelictivos2[".googleLikeFields"][] = "caserio_hecho";
$tdatahechosdelictivos2[".googleLikeFields"][] = "calle_hecho";
$tdatahechosdelictivos2[".googleLikeFields"][] = "avenida_hecho";
$tdatahechosdelictivos2[".googleLikeFields"][] = "casa_hecho";
$tdatahechosdelictivos2[".googleLikeFields"][] = "comu_hecho";
$tdatahechosdelictivos2[".googleLikeFields"][] = "barrio_hecho";
$tdatahechosdelictivos2[".googleLikeFields"][] = "comp_hecho";
$tdatahechosdelictivos2[".googleLikeFields"][] = "sector_ppd";
$tdatahechosdelictivos2[".googleLikeFields"][] = "tipo";
$tdatahechosdelictivos2[".googleLikeFields"][] = "nombre";
$tdatahechosdelictivos2[".googleLikeFields"][] = "x";
$tdatahechosdelictivos2[".googleLikeFields"][] = "y";


$tdatahechosdelictivos2[".advSearchFields"] = array();
$tdatahechosdelictivos2[".advSearchFields"][] = "id1";
$tdatahechosdelictivos2[".advSearchFields"][] = "correlativo";
$tdatahechosdelictivos2[".advSearchFields"][] = "numero";
$tdatahechosdelictivos2[".advSearchFields"][] = "id";
$tdatahechosdelictivos2[".advSearchFields"][] = "codigo_muni";
$tdatahechosdelictivos2[".advSearchFields"][] = "numero2";
$tdatahechosdelictivos2[".advSearchFields"][] = "depart_he";
$tdatahechosdelictivos2[".advSearchFields"][] = "muni_he";
$tdatahechosdelictivos2[".advSearchFields"][] = "dire_hecho";
$tdatahechosdelictivos2[".advSearchFields"][] = "lugar_esp";
$tdatahechosdelictivos2[".advSearchFields"][] = "lugaranalisis";
$tdatahechosdelictivos2[".advSearchFields"][] = "area";
$tdatahechosdelictivos2[".advSearchFields"][] = "forma_cono";
$tdatahechosdelictivos2[".advSearchFields"][] = "delito";
$tdatahechosdelictivos2[".advSearchFields"][] = "delito_espe";
$tdatahechosdelictivos2[".advSearchFields"][] = "dia_hecho";
$tdatahechosdelictivos2[".advSearchFields"][] = "hora_hecho";
$tdatahechosdelictivos2[".advSearchFields"][] = "rango_hora";
$tdatahechosdelictivos2[".advSearchFields"][] = "fecha_hecho";
$tdatahechosdelictivos2[".advSearchFields"][] = "aÑo_hecho";
$tdatahechosdelictivos2[".advSearchFields"][] = "edad_victima";
$tdatahechosdelictivos2[".advSearchFields"][] = "ran_eta_vic";
$tdatahechosdelictivos2[".advSearchFields"][] = "s_victima";
$tdatahechosdelictivos2[".advSearchFields"][] = "oc_victima";
$tdatahechosdelictivos2[".advSearchFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos2[".advSearchFields"][] = "edad_agresor";
$tdatahechosdelictivos2[".advSearchFields"][] = "sexo__agresor";
$tdatahechosdelictivos2[".advSearchFields"][] = "ocupa_agresor";
$tdatahechosdelictivos2[".advSearchFields"][] = "movil";
$tdatahechosdelictivos2[".advSearchFields"][] = "tipo_arma";
$tdatahechosdelictivos2[".advSearchFields"][] = "canton_hecho";
$tdatahechosdelictivos2[".advSearchFields"][] = "colonia_hecho";
$tdatahechosdelictivos2[".advSearchFields"][] = "caserio_hecho";
$tdatahechosdelictivos2[".advSearchFields"][] = "calle_hecho";
$tdatahechosdelictivos2[".advSearchFields"][] = "avenida_hecho";
$tdatahechosdelictivos2[".advSearchFields"][] = "casa_hecho";
$tdatahechosdelictivos2[".advSearchFields"][] = "comu_hecho";
$tdatahechosdelictivos2[".advSearchFields"][] = "barrio_hecho";
$tdatahechosdelictivos2[".advSearchFields"][] = "comp_hecho";
$tdatahechosdelictivos2[".advSearchFields"][] = "sector_ppd";
$tdatahechosdelictivos2[".advSearchFields"][] = "tipo";
$tdatahechosdelictivos2[".advSearchFields"][] = "nombre";
$tdatahechosdelictivos2[".advSearchFields"][] = "x";
$tdatahechosdelictivos2[".advSearchFields"][] = "y";

$tdatahechosdelictivos2[".tableType"] = "list";

$tdatahechosdelictivos2[".printerPageOrientation"] = 0;
$tdatahechosdelictivos2[".nPrinterPageScale"] = 100;

$tdatahechosdelictivos2[".nPrinterSplitRecords"] = 40;

$tdatahechosdelictivos2[".nPrinterPDFSplitRecords"] = 40;



$tdatahechosdelictivos2[".geocodingEnabled"] = false;





$tdatahechosdelictivos2[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatahechosdelictivos2[".pageSize"] = 20;

$tdatahechosdelictivos2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahechosdelictivos2[".strOrderBy"] = $tstrOrderBy;

$tdatahechosdelictivos2[".orderindexes"] = array();

$tdatahechosdelictivos2[".sqlHead"] = "SELECT id1,  	correlativo,  	numero,  	id,  	codigo_muni,  	numero2,  	depart_he,  	muni_he,  	dire_hecho,  	lugar_esp,  	lugaranalisis,  	area,  	forma_cono,  	delito,  	delito_espe,  	dia_hecho,  	hora_hecho,  	rango_hora,  	fecha_hecho,  	`aÑo_hecho`,  	edad_victima,  	ran_eta_vic,  	s_victima,  	oc_victima,  	relacion_vi_agre,  	edad_agresor,  	sexo__agresor,  	ocupa_agresor,  	movil,  	tipo_arma,  	canton_hecho,  	colonia_hecho,  	caserio_hecho,  	calle_hecho,  	avenida_hecho,  	casa_hecho,  	comu_hecho,  	barrio_hecho,  	comp_hecho,  	sector_ppd,  	tipo,  	nombre,  	x,  	y";
$tdatahechosdelictivos2[".sqlFrom"] = "FROM hechosdelictivos";
$tdatahechosdelictivos2[".sqlWhereExpr"] = "";
$tdatahechosdelictivos2[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahechosdelictivos2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahechosdelictivos2[".arrGroupsPerPage"] = $arrGPP;

$tdatahechosdelictivos2[".highlightSearchResults"] = true;

$tableKeyshechosdelictivos2 = array();
$tableKeyshechosdelictivos2[] = "id1";
$tdatahechosdelictivos2[".Keys"] = $tableKeyshechosdelictivos2;

$tdatahechosdelictivos2[".listFields"] = array();
$tdatahechosdelictivos2[".listFields"][] = "id1";
$tdatahechosdelictivos2[".listFields"][] = "correlativo";
$tdatahechosdelictivos2[".listFields"][] = "numero";
$tdatahechosdelictivos2[".listFields"][] = "id";
$tdatahechosdelictivos2[".listFields"][] = "codigo_muni";
$tdatahechosdelictivos2[".listFields"][] = "numero2";
$tdatahechosdelictivos2[".listFields"][] = "depart_he";
$tdatahechosdelictivos2[".listFields"][] = "muni_he";
$tdatahechosdelictivos2[".listFields"][] = "dire_hecho";
$tdatahechosdelictivos2[".listFields"][] = "lugar_esp";
$tdatahechosdelictivos2[".listFields"][] = "lugaranalisis";
$tdatahechosdelictivos2[".listFields"][] = "area";
$tdatahechosdelictivos2[".listFields"][] = "forma_cono";
$tdatahechosdelictivos2[".listFields"][] = "delito";
$tdatahechosdelictivos2[".listFields"][] = "delito_espe";
$tdatahechosdelictivos2[".listFields"][] = "dia_hecho";
$tdatahechosdelictivos2[".listFields"][] = "hora_hecho";
$tdatahechosdelictivos2[".listFields"][] = "rango_hora";
$tdatahechosdelictivos2[".listFields"][] = "fecha_hecho";
$tdatahechosdelictivos2[".listFields"][] = "aÑo_hecho";
$tdatahechosdelictivos2[".listFields"][] = "edad_victima";
$tdatahechosdelictivos2[".listFields"][] = "ran_eta_vic";
$tdatahechosdelictivos2[".listFields"][] = "s_victima";
$tdatahechosdelictivos2[".listFields"][] = "oc_victima";
$tdatahechosdelictivos2[".listFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos2[".listFields"][] = "edad_agresor";
$tdatahechosdelictivos2[".listFields"][] = "sexo__agresor";
$tdatahechosdelictivos2[".listFields"][] = "ocupa_agresor";
$tdatahechosdelictivos2[".listFields"][] = "movil";
$tdatahechosdelictivos2[".listFields"][] = "tipo_arma";
$tdatahechosdelictivos2[".listFields"][] = "canton_hecho";
$tdatahechosdelictivos2[".listFields"][] = "colonia_hecho";
$tdatahechosdelictivos2[".listFields"][] = "caserio_hecho";
$tdatahechosdelictivos2[".listFields"][] = "calle_hecho";
$tdatahechosdelictivos2[".listFields"][] = "avenida_hecho";
$tdatahechosdelictivos2[".listFields"][] = "casa_hecho";
$tdatahechosdelictivos2[".listFields"][] = "comu_hecho";
$tdatahechosdelictivos2[".listFields"][] = "barrio_hecho";
$tdatahechosdelictivos2[".listFields"][] = "comp_hecho";
$tdatahechosdelictivos2[".listFields"][] = "sector_ppd";
$tdatahechosdelictivos2[".listFields"][] = "tipo";
$tdatahechosdelictivos2[".listFields"][] = "nombre";
$tdatahechosdelictivos2[".listFields"][] = "x";
$tdatahechosdelictivos2[".listFields"][] = "y";

$tdatahechosdelictivos2[".hideMobileList"] = array();


$tdatahechosdelictivos2[".viewFields"] = array();
$tdatahechosdelictivos2[".viewFields"][] = "id1";
$tdatahechosdelictivos2[".viewFields"][] = "correlativo";
$tdatahechosdelictivos2[".viewFields"][] = "numero";
$tdatahechosdelictivos2[".viewFields"][] = "id";
$tdatahechosdelictivos2[".viewFields"][] = "codigo_muni";
$tdatahechosdelictivos2[".viewFields"][] = "numero2";
$tdatahechosdelictivos2[".viewFields"][] = "depart_he";
$tdatahechosdelictivos2[".viewFields"][] = "muni_he";
$tdatahechosdelictivos2[".viewFields"][] = "dire_hecho";
$tdatahechosdelictivos2[".viewFields"][] = "lugar_esp";
$tdatahechosdelictivos2[".viewFields"][] = "lugaranalisis";
$tdatahechosdelictivos2[".viewFields"][] = "area";
$tdatahechosdelictivos2[".viewFields"][] = "forma_cono";
$tdatahechosdelictivos2[".viewFields"][] = "delito";
$tdatahechosdelictivos2[".viewFields"][] = "delito_espe";
$tdatahechosdelictivos2[".viewFields"][] = "dia_hecho";
$tdatahechosdelictivos2[".viewFields"][] = "hora_hecho";
$tdatahechosdelictivos2[".viewFields"][] = "rango_hora";
$tdatahechosdelictivos2[".viewFields"][] = "fecha_hecho";
$tdatahechosdelictivos2[".viewFields"][] = "aÑo_hecho";
$tdatahechosdelictivos2[".viewFields"][] = "edad_victima";
$tdatahechosdelictivos2[".viewFields"][] = "ran_eta_vic";
$tdatahechosdelictivos2[".viewFields"][] = "s_victima";
$tdatahechosdelictivos2[".viewFields"][] = "oc_victima";
$tdatahechosdelictivos2[".viewFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos2[".viewFields"][] = "edad_agresor";
$tdatahechosdelictivos2[".viewFields"][] = "sexo__agresor";
$tdatahechosdelictivos2[".viewFields"][] = "ocupa_agresor";
$tdatahechosdelictivos2[".viewFields"][] = "movil";
$tdatahechosdelictivos2[".viewFields"][] = "tipo_arma";
$tdatahechosdelictivos2[".viewFields"][] = "canton_hecho";
$tdatahechosdelictivos2[".viewFields"][] = "colonia_hecho";
$tdatahechosdelictivos2[".viewFields"][] = "caserio_hecho";
$tdatahechosdelictivos2[".viewFields"][] = "calle_hecho";
$tdatahechosdelictivos2[".viewFields"][] = "avenida_hecho";
$tdatahechosdelictivos2[".viewFields"][] = "casa_hecho";
$tdatahechosdelictivos2[".viewFields"][] = "comu_hecho";
$tdatahechosdelictivos2[".viewFields"][] = "barrio_hecho";
$tdatahechosdelictivos2[".viewFields"][] = "comp_hecho";
$tdatahechosdelictivos2[".viewFields"][] = "sector_ppd";
$tdatahechosdelictivos2[".viewFields"][] = "tipo";
$tdatahechosdelictivos2[".viewFields"][] = "nombre";
$tdatahechosdelictivos2[".viewFields"][] = "x";
$tdatahechosdelictivos2[".viewFields"][] = "y";

$tdatahechosdelictivos2[".addFields"] = array();
$tdatahechosdelictivos2[".addFields"][] = "id1";
$tdatahechosdelictivos2[".addFields"][] = "correlativo";
$tdatahechosdelictivos2[".addFields"][] = "numero";
$tdatahechosdelictivos2[".addFields"][] = "id";
$tdatahechosdelictivos2[".addFields"][] = "codigo_muni";
$tdatahechosdelictivos2[".addFields"][] = "numero2";
$tdatahechosdelictivos2[".addFields"][] = "depart_he";
$tdatahechosdelictivos2[".addFields"][] = "muni_he";
$tdatahechosdelictivos2[".addFields"][] = "dire_hecho";
$tdatahechosdelictivos2[".addFields"][] = "lugar_esp";
$tdatahechosdelictivos2[".addFields"][] = "lugaranalisis";
$tdatahechosdelictivos2[".addFields"][] = "area";
$tdatahechosdelictivos2[".addFields"][] = "forma_cono";
$tdatahechosdelictivos2[".addFields"][] = "delito";
$tdatahechosdelictivos2[".addFields"][] = "delito_espe";
$tdatahechosdelictivos2[".addFields"][] = "dia_hecho";
$tdatahechosdelictivos2[".addFields"][] = "hora_hecho";
$tdatahechosdelictivos2[".addFields"][] = "rango_hora";
$tdatahechosdelictivos2[".addFields"][] = "fecha_hecho";
$tdatahechosdelictivos2[".addFields"][] = "aÑo_hecho";
$tdatahechosdelictivos2[".addFields"][] = "edad_victima";
$tdatahechosdelictivos2[".addFields"][] = "ran_eta_vic";
$tdatahechosdelictivos2[".addFields"][] = "s_victima";
$tdatahechosdelictivos2[".addFields"][] = "oc_victima";
$tdatahechosdelictivos2[".addFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos2[".addFields"][] = "edad_agresor";
$tdatahechosdelictivos2[".addFields"][] = "sexo__agresor";
$tdatahechosdelictivos2[".addFields"][] = "ocupa_agresor";
$tdatahechosdelictivos2[".addFields"][] = "movil";
$tdatahechosdelictivos2[".addFields"][] = "tipo_arma";
$tdatahechosdelictivos2[".addFields"][] = "canton_hecho";
$tdatahechosdelictivos2[".addFields"][] = "colonia_hecho";
$tdatahechosdelictivos2[".addFields"][] = "caserio_hecho";
$tdatahechosdelictivos2[".addFields"][] = "calle_hecho";
$tdatahechosdelictivos2[".addFields"][] = "avenida_hecho";
$tdatahechosdelictivos2[".addFields"][] = "casa_hecho";
$tdatahechosdelictivos2[".addFields"][] = "comu_hecho";
$tdatahechosdelictivos2[".addFields"][] = "barrio_hecho";
$tdatahechosdelictivos2[".addFields"][] = "comp_hecho";
$tdatahechosdelictivos2[".addFields"][] = "sector_ppd";
$tdatahechosdelictivos2[".addFields"][] = "tipo";
$tdatahechosdelictivos2[".addFields"][] = "nombre";
$tdatahechosdelictivos2[".addFields"][] = "x";
$tdatahechosdelictivos2[".addFields"][] = "y";

$tdatahechosdelictivos2[".masterListFields"] = array();
$tdatahechosdelictivos2[".masterListFields"][] = "id1";
$tdatahechosdelictivos2[".masterListFields"][] = "correlativo";
$tdatahechosdelictivos2[".masterListFields"][] = "numero";
$tdatahechosdelictivos2[".masterListFields"][] = "id";
$tdatahechosdelictivos2[".masterListFields"][] = "codigo_muni";
$tdatahechosdelictivos2[".masterListFields"][] = "numero2";
$tdatahechosdelictivos2[".masterListFields"][] = "depart_he";
$tdatahechosdelictivos2[".masterListFields"][] = "muni_he";
$tdatahechosdelictivos2[".masterListFields"][] = "dire_hecho";
$tdatahechosdelictivos2[".masterListFields"][] = "lugar_esp";
$tdatahechosdelictivos2[".masterListFields"][] = "lugaranalisis";
$tdatahechosdelictivos2[".masterListFields"][] = "area";
$tdatahechosdelictivos2[".masterListFields"][] = "forma_cono";
$tdatahechosdelictivos2[".masterListFields"][] = "delito";
$tdatahechosdelictivos2[".masterListFields"][] = "delito_espe";
$tdatahechosdelictivos2[".masterListFields"][] = "dia_hecho";
$tdatahechosdelictivos2[".masterListFields"][] = "hora_hecho";
$tdatahechosdelictivos2[".masterListFields"][] = "rango_hora";
$tdatahechosdelictivos2[".masterListFields"][] = "fecha_hecho";
$tdatahechosdelictivos2[".masterListFields"][] = "aÑo_hecho";
$tdatahechosdelictivos2[".masterListFields"][] = "edad_victima";
$tdatahechosdelictivos2[".masterListFields"][] = "ran_eta_vic";
$tdatahechosdelictivos2[".masterListFields"][] = "s_victima";
$tdatahechosdelictivos2[".masterListFields"][] = "oc_victima";
$tdatahechosdelictivos2[".masterListFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos2[".masterListFields"][] = "edad_agresor";
$tdatahechosdelictivos2[".masterListFields"][] = "sexo__agresor";
$tdatahechosdelictivos2[".masterListFields"][] = "ocupa_agresor";
$tdatahechosdelictivos2[".masterListFields"][] = "movil";
$tdatahechosdelictivos2[".masterListFields"][] = "tipo_arma";
$tdatahechosdelictivos2[".masterListFields"][] = "canton_hecho";
$tdatahechosdelictivos2[".masterListFields"][] = "colonia_hecho";
$tdatahechosdelictivos2[".masterListFields"][] = "caserio_hecho";
$tdatahechosdelictivos2[".masterListFields"][] = "calle_hecho";
$tdatahechosdelictivos2[".masterListFields"][] = "avenida_hecho";
$tdatahechosdelictivos2[".masterListFields"][] = "casa_hecho";
$tdatahechosdelictivos2[".masterListFields"][] = "comu_hecho";
$tdatahechosdelictivos2[".masterListFields"][] = "barrio_hecho";
$tdatahechosdelictivos2[".masterListFields"][] = "comp_hecho";
$tdatahechosdelictivos2[".masterListFields"][] = "sector_ppd";
$tdatahechosdelictivos2[".masterListFields"][] = "tipo";
$tdatahechosdelictivos2[".masterListFields"][] = "nombre";
$tdatahechosdelictivos2[".masterListFields"][] = "x";
$tdatahechosdelictivos2[".masterListFields"][] = "y";

$tdatahechosdelictivos2[".inlineAddFields"] = array();
$tdatahechosdelictivos2[".inlineAddFields"][] = "id1";
$tdatahechosdelictivos2[".inlineAddFields"][] = "correlativo";
$tdatahechosdelictivos2[".inlineAddFields"][] = "numero";
$tdatahechosdelictivos2[".inlineAddFields"][] = "id";
$tdatahechosdelictivos2[".inlineAddFields"][] = "codigo_muni";
$tdatahechosdelictivos2[".inlineAddFields"][] = "numero2";
$tdatahechosdelictivos2[".inlineAddFields"][] = "depart_he";
$tdatahechosdelictivos2[".inlineAddFields"][] = "muni_he";
$tdatahechosdelictivos2[".inlineAddFields"][] = "dire_hecho";
$tdatahechosdelictivos2[".inlineAddFields"][] = "lugar_esp";
$tdatahechosdelictivos2[".inlineAddFields"][] = "lugaranalisis";
$tdatahechosdelictivos2[".inlineAddFields"][] = "area";
$tdatahechosdelictivos2[".inlineAddFields"][] = "forma_cono";
$tdatahechosdelictivos2[".inlineAddFields"][] = "delito";
$tdatahechosdelictivos2[".inlineAddFields"][] = "delito_espe";
$tdatahechosdelictivos2[".inlineAddFields"][] = "dia_hecho";
$tdatahechosdelictivos2[".inlineAddFields"][] = "hora_hecho";
$tdatahechosdelictivos2[".inlineAddFields"][] = "rango_hora";
$tdatahechosdelictivos2[".inlineAddFields"][] = "fecha_hecho";
$tdatahechosdelictivos2[".inlineAddFields"][] = "aÑo_hecho";
$tdatahechosdelictivos2[".inlineAddFields"][] = "edad_victima";
$tdatahechosdelictivos2[".inlineAddFields"][] = "ran_eta_vic";
$tdatahechosdelictivos2[".inlineAddFields"][] = "s_victima";
$tdatahechosdelictivos2[".inlineAddFields"][] = "oc_victima";
$tdatahechosdelictivos2[".inlineAddFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos2[".inlineAddFields"][] = "edad_agresor";
$tdatahechosdelictivos2[".inlineAddFields"][] = "sexo__agresor";
$tdatahechosdelictivos2[".inlineAddFields"][] = "ocupa_agresor";
$tdatahechosdelictivos2[".inlineAddFields"][] = "movil";
$tdatahechosdelictivos2[".inlineAddFields"][] = "tipo_arma";
$tdatahechosdelictivos2[".inlineAddFields"][] = "canton_hecho";
$tdatahechosdelictivos2[".inlineAddFields"][] = "colonia_hecho";
$tdatahechosdelictivos2[".inlineAddFields"][] = "caserio_hecho";
$tdatahechosdelictivos2[".inlineAddFields"][] = "calle_hecho";
$tdatahechosdelictivos2[".inlineAddFields"][] = "avenida_hecho";
$tdatahechosdelictivos2[".inlineAddFields"][] = "casa_hecho";
$tdatahechosdelictivos2[".inlineAddFields"][] = "comu_hecho";
$tdatahechosdelictivos2[".inlineAddFields"][] = "barrio_hecho";
$tdatahechosdelictivos2[".inlineAddFields"][] = "comp_hecho";
$tdatahechosdelictivos2[".inlineAddFields"][] = "sector_ppd";
$tdatahechosdelictivos2[".inlineAddFields"][] = "tipo";
$tdatahechosdelictivos2[".inlineAddFields"][] = "nombre";
$tdatahechosdelictivos2[".inlineAddFields"][] = "x";
$tdatahechosdelictivos2[".inlineAddFields"][] = "y";

$tdatahechosdelictivos2[".editFields"] = array();
$tdatahechosdelictivos2[".editFields"][] = "id1";
$tdatahechosdelictivos2[".editFields"][] = "correlativo";
$tdatahechosdelictivos2[".editFields"][] = "numero";
$tdatahechosdelictivos2[".editFields"][] = "id";
$tdatahechosdelictivos2[".editFields"][] = "codigo_muni";
$tdatahechosdelictivos2[".editFields"][] = "numero2";
$tdatahechosdelictivos2[".editFields"][] = "depart_he";
$tdatahechosdelictivos2[".editFields"][] = "muni_he";
$tdatahechosdelictivos2[".editFields"][] = "dire_hecho";
$tdatahechosdelictivos2[".editFields"][] = "lugar_esp";
$tdatahechosdelictivos2[".editFields"][] = "lugaranalisis";
$tdatahechosdelictivos2[".editFields"][] = "area";
$tdatahechosdelictivos2[".editFields"][] = "forma_cono";
$tdatahechosdelictivos2[".editFields"][] = "delito";
$tdatahechosdelictivos2[".editFields"][] = "delito_espe";
$tdatahechosdelictivos2[".editFields"][] = "dia_hecho";
$tdatahechosdelictivos2[".editFields"][] = "hora_hecho";
$tdatahechosdelictivos2[".editFields"][] = "rango_hora";
$tdatahechosdelictivos2[".editFields"][] = "fecha_hecho";
$tdatahechosdelictivos2[".editFields"][] = "aÑo_hecho";
$tdatahechosdelictivos2[".editFields"][] = "edad_victima";
$tdatahechosdelictivos2[".editFields"][] = "ran_eta_vic";
$tdatahechosdelictivos2[".editFields"][] = "s_victima";
$tdatahechosdelictivos2[".editFields"][] = "oc_victima";
$tdatahechosdelictivos2[".editFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos2[".editFields"][] = "edad_agresor";
$tdatahechosdelictivos2[".editFields"][] = "sexo__agresor";
$tdatahechosdelictivos2[".editFields"][] = "ocupa_agresor";
$tdatahechosdelictivos2[".editFields"][] = "movil";
$tdatahechosdelictivos2[".editFields"][] = "tipo_arma";
$tdatahechosdelictivos2[".editFields"][] = "canton_hecho";
$tdatahechosdelictivos2[".editFields"][] = "colonia_hecho";
$tdatahechosdelictivos2[".editFields"][] = "caserio_hecho";
$tdatahechosdelictivos2[".editFields"][] = "calle_hecho";
$tdatahechosdelictivos2[".editFields"][] = "avenida_hecho";
$tdatahechosdelictivos2[".editFields"][] = "casa_hecho";
$tdatahechosdelictivos2[".editFields"][] = "comu_hecho";
$tdatahechosdelictivos2[".editFields"][] = "barrio_hecho";
$tdatahechosdelictivos2[".editFields"][] = "comp_hecho";
$tdatahechosdelictivos2[".editFields"][] = "sector_ppd";
$tdatahechosdelictivos2[".editFields"][] = "tipo";
$tdatahechosdelictivos2[".editFields"][] = "nombre";
$tdatahechosdelictivos2[".editFields"][] = "x";
$tdatahechosdelictivos2[".editFields"][] = "y";

$tdatahechosdelictivos2[".inlineEditFields"] = array();
$tdatahechosdelictivos2[".inlineEditFields"][] = "id1";
$tdatahechosdelictivos2[".inlineEditFields"][] = "correlativo";
$tdatahechosdelictivos2[".inlineEditFields"][] = "numero";
$tdatahechosdelictivos2[".inlineEditFields"][] = "id";
$tdatahechosdelictivos2[".inlineEditFields"][] = "codigo_muni";
$tdatahechosdelictivos2[".inlineEditFields"][] = "numero2";
$tdatahechosdelictivos2[".inlineEditFields"][] = "depart_he";
$tdatahechosdelictivos2[".inlineEditFields"][] = "muni_he";
$tdatahechosdelictivos2[".inlineEditFields"][] = "dire_hecho";
$tdatahechosdelictivos2[".inlineEditFields"][] = "lugar_esp";
$tdatahechosdelictivos2[".inlineEditFields"][] = "lugaranalisis";
$tdatahechosdelictivos2[".inlineEditFields"][] = "area";
$tdatahechosdelictivos2[".inlineEditFields"][] = "forma_cono";
$tdatahechosdelictivos2[".inlineEditFields"][] = "delito";
$tdatahechosdelictivos2[".inlineEditFields"][] = "delito_espe";
$tdatahechosdelictivos2[".inlineEditFields"][] = "dia_hecho";
$tdatahechosdelictivos2[".inlineEditFields"][] = "hora_hecho";
$tdatahechosdelictivos2[".inlineEditFields"][] = "rango_hora";
$tdatahechosdelictivos2[".inlineEditFields"][] = "fecha_hecho";
$tdatahechosdelictivos2[".inlineEditFields"][] = "aÑo_hecho";
$tdatahechosdelictivos2[".inlineEditFields"][] = "edad_victima";
$tdatahechosdelictivos2[".inlineEditFields"][] = "ran_eta_vic";
$tdatahechosdelictivos2[".inlineEditFields"][] = "s_victima";
$tdatahechosdelictivos2[".inlineEditFields"][] = "oc_victima";
$tdatahechosdelictivos2[".inlineEditFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos2[".inlineEditFields"][] = "edad_agresor";
$tdatahechosdelictivos2[".inlineEditFields"][] = "sexo__agresor";
$tdatahechosdelictivos2[".inlineEditFields"][] = "ocupa_agresor";
$tdatahechosdelictivos2[".inlineEditFields"][] = "movil";
$tdatahechosdelictivos2[".inlineEditFields"][] = "tipo_arma";
$tdatahechosdelictivos2[".inlineEditFields"][] = "canton_hecho";
$tdatahechosdelictivos2[".inlineEditFields"][] = "colonia_hecho";
$tdatahechosdelictivos2[".inlineEditFields"][] = "caserio_hecho";
$tdatahechosdelictivos2[".inlineEditFields"][] = "calle_hecho";
$tdatahechosdelictivos2[".inlineEditFields"][] = "avenida_hecho";
$tdatahechosdelictivos2[".inlineEditFields"][] = "casa_hecho";
$tdatahechosdelictivos2[".inlineEditFields"][] = "comu_hecho";
$tdatahechosdelictivos2[".inlineEditFields"][] = "barrio_hecho";
$tdatahechosdelictivos2[".inlineEditFields"][] = "comp_hecho";
$tdatahechosdelictivos2[".inlineEditFields"][] = "sector_ppd";
$tdatahechosdelictivos2[".inlineEditFields"][] = "tipo";
$tdatahechosdelictivos2[".inlineEditFields"][] = "nombre";
$tdatahechosdelictivos2[".inlineEditFields"][] = "x";
$tdatahechosdelictivos2[".inlineEditFields"][] = "y";

$tdatahechosdelictivos2[".updateSelectedFields"] = array();
$tdatahechosdelictivos2[".updateSelectedFields"][] = "id1";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "correlativo";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "numero";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "id";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "codigo_muni";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "numero2";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "depart_he";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "muni_he";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "dire_hecho";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "lugar_esp";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "lugaranalisis";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "area";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "forma_cono";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "delito";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "delito_espe";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "dia_hecho";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "hora_hecho";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "rango_hora";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "fecha_hecho";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "aÑo_hecho";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "edad_victima";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "ran_eta_vic";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "s_victima";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "oc_victima";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "edad_agresor";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "sexo__agresor";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "ocupa_agresor";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "movil";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "tipo_arma";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "canton_hecho";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "colonia_hecho";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "caserio_hecho";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "calle_hecho";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "avenida_hecho";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "casa_hecho";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "comu_hecho";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "barrio_hecho";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "comp_hecho";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "sector_ppd";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "tipo";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "nombre";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "x";
$tdatahechosdelictivos2[".updateSelectedFields"][] = "y";


$tdatahechosdelictivos2[".exportFields"] = array();
$tdatahechosdelictivos2[".exportFields"][] = "id1";
$tdatahechosdelictivos2[".exportFields"][] = "correlativo";
$tdatahechosdelictivos2[".exportFields"][] = "numero";
$tdatahechosdelictivos2[".exportFields"][] = "id";
$tdatahechosdelictivos2[".exportFields"][] = "codigo_muni";
$tdatahechosdelictivos2[".exportFields"][] = "numero2";
$tdatahechosdelictivos2[".exportFields"][] = "depart_he";
$tdatahechosdelictivos2[".exportFields"][] = "muni_he";
$tdatahechosdelictivos2[".exportFields"][] = "dire_hecho";
$tdatahechosdelictivos2[".exportFields"][] = "lugar_esp";
$tdatahechosdelictivos2[".exportFields"][] = "lugaranalisis";
$tdatahechosdelictivos2[".exportFields"][] = "area";
$tdatahechosdelictivos2[".exportFields"][] = "forma_cono";
$tdatahechosdelictivos2[".exportFields"][] = "delito";
$tdatahechosdelictivos2[".exportFields"][] = "delito_espe";
$tdatahechosdelictivos2[".exportFields"][] = "dia_hecho";
$tdatahechosdelictivos2[".exportFields"][] = "hora_hecho";
$tdatahechosdelictivos2[".exportFields"][] = "rango_hora";
$tdatahechosdelictivos2[".exportFields"][] = "fecha_hecho";
$tdatahechosdelictivos2[".exportFields"][] = "aÑo_hecho";
$tdatahechosdelictivos2[".exportFields"][] = "edad_victima";
$tdatahechosdelictivos2[".exportFields"][] = "ran_eta_vic";
$tdatahechosdelictivos2[".exportFields"][] = "s_victima";
$tdatahechosdelictivos2[".exportFields"][] = "oc_victima";
$tdatahechosdelictivos2[".exportFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos2[".exportFields"][] = "edad_agresor";
$tdatahechosdelictivos2[".exportFields"][] = "sexo__agresor";
$tdatahechosdelictivos2[".exportFields"][] = "ocupa_agresor";
$tdatahechosdelictivos2[".exportFields"][] = "movil";
$tdatahechosdelictivos2[".exportFields"][] = "tipo_arma";
$tdatahechosdelictivos2[".exportFields"][] = "canton_hecho";
$tdatahechosdelictivos2[".exportFields"][] = "colonia_hecho";
$tdatahechosdelictivos2[".exportFields"][] = "caserio_hecho";
$tdatahechosdelictivos2[".exportFields"][] = "calle_hecho";
$tdatahechosdelictivos2[".exportFields"][] = "avenida_hecho";
$tdatahechosdelictivos2[".exportFields"][] = "casa_hecho";
$tdatahechosdelictivos2[".exportFields"][] = "comu_hecho";
$tdatahechosdelictivos2[".exportFields"][] = "barrio_hecho";
$tdatahechosdelictivos2[".exportFields"][] = "comp_hecho";
$tdatahechosdelictivos2[".exportFields"][] = "sector_ppd";
$tdatahechosdelictivos2[".exportFields"][] = "tipo";
$tdatahechosdelictivos2[".exportFields"][] = "nombre";
$tdatahechosdelictivos2[".exportFields"][] = "x";
$tdatahechosdelictivos2[".exportFields"][] = "y";

$tdatahechosdelictivos2[".importFields"] = array();
$tdatahechosdelictivos2[".importFields"][] = "id1";
$tdatahechosdelictivos2[".importFields"][] = "correlativo";
$tdatahechosdelictivos2[".importFields"][] = "numero";
$tdatahechosdelictivos2[".importFields"][] = "id";
$tdatahechosdelictivos2[".importFields"][] = "codigo_muni";
$tdatahechosdelictivos2[".importFields"][] = "numero2";
$tdatahechosdelictivos2[".importFields"][] = "depart_he";
$tdatahechosdelictivos2[".importFields"][] = "muni_he";
$tdatahechosdelictivos2[".importFields"][] = "dire_hecho";
$tdatahechosdelictivos2[".importFields"][] = "lugar_esp";
$tdatahechosdelictivos2[".importFields"][] = "lugaranalisis";
$tdatahechosdelictivos2[".importFields"][] = "area";
$tdatahechosdelictivos2[".importFields"][] = "forma_cono";
$tdatahechosdelictivos2[".importFields"][] = "delito";
$tdatahechosdelictivos2[".importFields"][] = "delito_espe";
$tdatahechosdelictivos2[".importFields"][] = "dia_hecho";
$tdatahechosdelictivos2[".importFields"][] = "hora_hecho";
$tdatahechosdelictivos2[".importFields"][] = "rango_hora";
$tdatahechosdelictivos2[".importFields"][] = "fecha_hecho";
$tdatahechosdelictivos2[".importFields"][] = "aÑo_hecho";
$tdatahechosdelictivos2[".importFields"][] = "edad_victima";
$tdatahechosdelictivos2[".importFields"][] = "ran_eta_vic";
$tdatahechosdelictivos2[".importFields"][] = "s_victima";
$tdatahechosdelictivos2[".importFields"][] = "oc_victima";
$tdatahechosdelictivos2[".importFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos2[".importFields"][] = "edad_agresor";
$tdatahechosdelictivos2[".importFields"][] = "sexo__agresor";
$tdatahechosdelictivos2[".importFields"][] = "ocupa_agresor";
$tdatahechosdelictivos2[".importFields"][] = "movil";
$tdatahechosdelictivos2[".importFields"][] = "tipo_arma";
$tdatahechosdelictivos2[".importFields"][] = "canton_hecho";
$tdatahechosdelictivos2[".importFields"][] = "colonia_hecho";
$tdatahechosdelictivos2[".importFields"][] = "caserio_hecho";
$tdatahechosdelictivos2[".importFields"][] = "calle_hecho";
$tdatahechosdelictivos2[".importFields"][] = "avenida_hecho";
$tdatahechosdelictivos2[".importFields"][] = "casa_hecho";
$tdatahechosdelictivos2[".importFields"][] = "comu_hecho";
$tdatahechosdelictivos2[".importFields"][] = "barrio_hecho";
$tdatahechosdelictivos2[".importFields"][] = "comp_hecho";
$tdatahechosdelictivos2[".importFields"][] = "sector_ppd";
$tdatahechosdelictivos2[".importFields"][] = "tipo";
$tdatahechosdelictivos2[".importFields"][] = "nombre";
$tdatahechosdelictivos2[".importFields"][] = "x";
$tdatahechosdelictivos2[".importFields"][] = "y";

$tdatahechosdelictivos2[".printFields"] = array();
$tdatahechosdelictivos2[".printFields"][] = "id1";
$tdatahechosdelictivos2[".printFields"][] = "correlativo";
$tdatahechosdelictivos2[".printFields"][] = "numero";
$tdatahechosdelictivos2[".printFields"][] = "id";
$tdatahechosdelictivos2[".printFields"][] = "codigo_muni";
$tdatahechosdelictivos2[".printFields"][] = "numero2";
$tdatahechosdelictivos2[".printFields"][] = "depart_he";
$tdatahechosdelictivos2[".printFields"][] = "muni_he";
$tdatahechosdelictivos2[".printFields"][] = "dire_hecho";
$tdatahechosdelictivos2[".printFields"][] = "lugar_esp";
$tdatahechosdelictivos2[".printFields"][] = "lugaranalisis";
$tdatahechosdelictivos2[".printFields"][] = "area";
$tdatahechosdelictivos2[".printFields"][] = "forma_cono";
$tdatahechosdelictivos2[".printFields"][] = "delito";
$tdatahechosdelictivos2[".printFields"][] = "delito_espe";
$tdatahechosdelictivos2[".printFields"][] = "dia_hecho";
$tdatahechosdelictivos2[".printFields"][] = "hora_hecho";
$tdatahechosdelictivos2[".printFields"][] = "rango_hora";
$tdatahechosdelictivos2[".printFields"][] = "fecha_hecho";
$tdatahechosdelictivos2[".printFields"][] = "aÑo_hecho";
$tdatahechosdelictivos2[".printFields"][] = "edad_victima";
$tdatahechosdelictivos2[".printFields"][] = "ran_eta_vic";
$tdatahechosdelictivos2[".printFields"][] = "s_victima";
$tdatahechosdelictivos2[".printFields"][] = "oc_victima";
$tdatahechosdelictivos2[".printFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos2[".printFields"][] = "edad_agresor";
$tdatahechosdelictivos2[".printFields"][] = "sexo__agresor";
$tdatahechosdelictivos2[".printFields"][] = "ocupa_agresor";
$tdatahechosdelictivos2[".printFields"][] = "movil";
$tdatahechosdelictivos2[".printFields"][] = "tipo_arma";
$tdatahechosdelictivos2[".printFields"][] = "canton_hecho";
$tdatahechosdelictivos2[".printFields"][] = "colonia_hecho";
$tdatahechosdelictivos2[".printFields"][] = "caserio_hecho";
$tdatahechosdelictivos2[".printFields"][] = "calle_hecho";
$tdatahechosdelictivos2[".printFields"][] = "avenida_hecho";
$tdatahechosdelictivos2[".printFields"][] = "casa_hecho";
$tdatahechosdelictivos2[".printFields"][] = "comu_hecho";
$tdatahechosdelictivos2[".printFields"][] = "barrio_hecho";
$tdatahechosdelictivos2[".printFields"][] = "comp_hecho";
$tdatahechosdelictivos2[".printFields"][] = "sector_ppd";
$tdatahechosdelictivos2[".printFields"][] = "tipo";
$tdatahechosdelictivos2[".printFields"][] = "nombre";
$tdatahechosdelictivos2[".printFields"][] = "x";
$tdatahechosdelictivos2[".printFields"][] = "y";

//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id1";
	$fdata["GoodName"] = "id1";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","id1");
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




	$tdatahechosdelictivos2["id1"] = $fdata;
//	correlativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "correlativo";
	$fdata["GoodName"] = "correlativo";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","correlativo");
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




	$tdatahechosdelictivos2["correlativo"] = $fdata;
//	numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "numero";
	$fdata["GoodName"] = "numero";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","numero");
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




	$tdatahechosdelictivos2["numero"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","id");
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




	$tdatahechosdelictivos2["id"] = $fdata;
//	codigo_muni
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "codigo_muni";
	$fdata["GoodName"] = "codigo_muni";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","codigo_muni");
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




	$tdatahechosdelictivos2["codigo_muni"] = $fdata;
//	numero2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "numero2";
	$fdata["GoodName"] = "numero2";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","numero2");
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




	$tdatahechosdelictivos2["numero2"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","depart_he");
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




	$tdatahechosdelictivos2["depart_he"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","muni_he");
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




	$tdatahechosdelictivos2["muni_he"] = $fdata;
//	dire_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dire_hecho";
	$fdata["GoodName"] = "dire_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","dire_hecho");
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




	$tdatahechosdelictivos2["dire_hecho"] = $fdata;
//	lugar_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "lugar_esp";
	$fdata["GoodName"] = "lugar_esp";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","lugar_esp");
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




	$tdatahechosdelictivos2["lugar_esp"] = $fdata;
//	lugaranalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "lugaranalisis";
	$fdata["GoodName"] = "lugaranalisis";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","lugaranalisis");
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




	$tdatahechosdelictivos2["lugaranalisis"] = $fdata;
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","area");
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




	$tdatahechosdelictivos2["area"] = $fdata;
//	forma_cono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "forma_cono";
	$fdata["GoodName"] = "forma_cono";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","forma_cono");
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




	$tdatahechosdelictivos2["forma_cono"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","delito");
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




	$tdatahechosdelictivos2["delito"] = $fdata;
//	delito_espe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "delito_espe";
	$fdata["GoodName"] = "delito_espe";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","delito_espe");
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




	$tdatahechosdelictivos2["delito_espe"] = $fdata;
//	dia_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "dia_hecho";
	$fdata["GoodName"] = "dia_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","dia_hecho");
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




	$tdatahechosdelictivos2["dia_hecho"] = $fdata;
//	hora_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "hora_hecho";
	$fdata["GoodName"] = "hora_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","hora_hecho");
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




	$tdatahechosdelictivos2["hora_hecho"] = $fdata;
//	rango_hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "rango_hora";
	$fdata["GoodName"] = "rango_hora";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","rango_hora");
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




	$tdatahechosdelictivos2["rango_hora"] = $fdata;
//	fecha_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "fecha_hecho";
	$fdata["GoodName"] = "fecha_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","fecha_hecho");
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




	$tdatahechosdelictivos2["fecha_hecho"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","a_o_hecho");
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




	$tdatahechosdelictivos2["aÑo_hecho"] = $fdata;
//	edad_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "edad_victima";
	$fdata["GoodName"] = "edad_victima";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","edad_victima");
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




	$tdatahechosdelictivos2["edad_victima"] = $fdata;
//	ran_eta_vic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "ran_eta_vic";
	$fdata["GoodName"] = "ran_eta_vic";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","ran_eta_vic");
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




	$tdatahechosdelictivos2["ran_eta_vic"] = $fdata;
//	s_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "s_victima";
	$fdata["GoodName"] = "s_victima";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","s_victima");
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




	$tdatahechosdelictivos2["s_victima"] = $fdata;
//	oc_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "oc_victima";
	$fdata["GoodName"] = "oc_victima";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","oc_victima");
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




	$tdatahechosdelictivos2["oc_victima"] = $fdata;
//	relacion_vi_agre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "relacion_vi_agre";
	$fdata["GoodName"] = "relacion_vi_agre";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","relacion_vi_agre");
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




	$tdatahechosdelictivos2["relacion_vi_agre"] = $fdata;
//	edad_agresor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "edad_agresor";
	$fdata["GoodName"] = "edad_agresor";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","edad_agresor");
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




	$tdatahechosdelictivos2["edad_agresor"] = $fdata;
//	sexo__agresor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "sexo__agresor";
	$fdata["GoodName"] = "sexo__agresor";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","sexo__agresor");
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




	$tdatahechosdelictivos2["sexo__agresor"] = $fdata;
//	ocupa_agresor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "ocupa_agresor";
	$fdata["GoodName"] = "ocupa_agresor";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","ocupa_agresor");
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




	$tdatahechosdelictivos2["ocupa_agresor"] = $fdata;
//	movil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "movil";
	$fdata["GoodName"] = "movil";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","movil");
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




	$tdatahechosdelictivos2["movil"] = $fdata;
//	tipo_arma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "tipo_arma";
	$fdata["GoodName"] = "tipo_arma";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","tipo_arma");
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




	$tdatahechosdelictivos2["tipo_arma"] = $fdata;
//	canton_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "canton_hecho";
	$fdata["GoodName"] = "canton_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","canton_hecho");
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




	$tdatahechosdelictivos2["canton_hecho"] = $fdata;
//	colonia_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "colonia_hecho";
	$fdata["GoodName"] = "colonia_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","colonia_hecho");
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




	$tdatahechosdelictivos2["colonia_hecho"] = $fdata;
//	caserio_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "caserio_hecho";
	$fdata["GoodName"] = "caserio_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","caserio_hecho");
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




	$tdatahechosdelictivos2["caserio_hecho"] = $fdata;
//	calle_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "calle_hecho";
	$fdata["GoodName"] = "calle_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","calle_hecho");
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




	$tdatahechosdelictivos2["calle_hecho"] = $fdata;
//	avenida_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "avenida_hecho";
	$fdata["GoodName"] = "avenida_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","avenida_hecho");
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




	$tdatahechosdelictivos2["avenida_hecho"] = $fdata;
//	casa_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "casa_hecho";
	$fdata["GoodName"] = "casa_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","casa_hecho");
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




	$tdatahechosdelictivos2["casa_hecho"] = $fdata;
//	comu_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "comu_hecho";
	$fdata["GoodName"] = "comu_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","comu_hecho");
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




	$tdatahechosdelictivos2["comu_hecho"] = $fdata;
//	barrio_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "barrio_hecho";
	$fdata["GoodName"] = "barrio_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","barrio_hecho");
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




	$tdatahechosdelictivos2["barrio_hecho"] = $fdata;
//	comp_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "comp_hecho";
	$fdata["GoodName"] = "comp_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","comp_hecho");
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




	$tdatahechosdelictivos2["comp_hecho"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","sector_ppd");
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




	$tdatahechosdelictivos2["sector_ppd"] = $fdata;
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","tipo");
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




	$tdatahechosdelictivos2["tipo"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","nombre");
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




	$tdatahechosdelictivos2["nombre"] = $fdata;
//	x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "x";
	$fdata["GoodName"] = "x";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","x");
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




	$tdatahechosdelictivos2["x"] = $fdata;
//	y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "y";
	$fdata["GoodName"] = "y";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos2","y");
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




	$tdatahechosdelictivos2["y"] = $fdata;


$tables_data["hechosdelictivos2"]=&$tdatahechosdelictivos2;
$field_labels["hechosdelictivos2"] = &$fieldLabelshechosdelictivos2;
$fieldToolTips["hechosdelictivos2"] = &$fieldToolTipshechosdelictivos2;
$placeHolders["hechosdelictivos2"] = &$placeHoldershechosdelictivos2;
$page_titles["hechosdelictivos2"] = &$pageTitleshechosdelictivos2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hechosdelictivos2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hechosdelictivos2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hechosdelictivos2()
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
	"m_srcTableName" => "hechosdelictivos2"
));

$proto6["m_sql"] = "id1";
$proto6["m_srcTableName"] = "hechosdelictivos2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "correlativo",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto8["m_sql"] = "correlativo";
$proto8["m_srcTableName"] = "hechosdelictivos2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "numero",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto10["m_sql"] = "numero";
$proto10["m_srcTableName"] = "hechosdelictivos2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto12["m_sql"] = "id";
$proto12["m_srcTableName"] = "hechosdelictivos2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo_muni",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto14["m_sql"] = "codigo_muni";
$proto14["m_srcTableName"] = "hechosdelictivos2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "numero2",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto16["m_sql"] = "numero2";
$proto16["m_srcTableName"] = "hechosdelictivos2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto18["m_sql"] = "depart_he";
$proto18["m_srcTableName"] = "hechosdelictivos2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto20["m_sql"] = "muni_he";
$proto20["m_srcTableName"] = "hechosdelictivos2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dire_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto22["m_sql"] = "dire_hecho";
$proto22["m_srcTableName"] = "hechosdelictivos2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "lugar_esp",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto24["m_sql"] = "lugar_esp";
$proto24["m_srcTableName"] = "hechosdelictivos2";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "lugaranalisis",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto26["m_sql"] = "lugaranalisis";
$proto26["m_srcTableName"] = "hechosdelictivos2";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto28["m_sql"] = "area";
$proto28["m_srcTableName"] = "hechosdelictivos2";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "forma_cono",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto30["m_sql"] = "forma_cono";
$proto30["m_srcTableName"] = "hechosdelictivos2";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto32["m_sql"] = "delito";
$proto32["m_srcTableName"] = "hechosdelictivos2";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "delito_espe",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto34["m_sql"] = "delito_espe";
$proto34["m_srcTableName"] = "hechosdelictivos2";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto36["m_sql"] = "dia_hecho";
$proto36["m_srcTableName"] = "hechosdelictivos2";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto38["m_sql"] = "hora_hecho";
$proto38["m_srcTableName"] = "hechosdelictivos2";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "rango_hora",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto40["m_sql"] = "rango_hora";
$proto40["m_srcTableName"] = "hechosdelictivos2";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto42["m_sql"] = "fecha_hecho";
$proto42["m_srcTableName"] = "hechosdelictivos2";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto44["m_sql"] = "`aÑo_hecho`";
$proto44["m_srcTableName"] = "hechosdelictivos2";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "edad_victima",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto46["m_sql"] = "edad_victima";
$proto46["m_srcTableName"] = "hechosdelictivos2";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "ran_eta_vic",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto48["m_sql"] = "ran_eta_vic";
$proto48["m_srcTableName"] = "hechosdelictivos2";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto50["m_sql"] = "s_victima";
$proto50["m_srcTableName"] = "hechosdelictivos2";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "oc_victima",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto52["m_sql"] = "oc_victima";
$proto52["m_srcTableName"] = "hechosdelictivos2";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "relacion_vi_agre",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto54["m_sql"] = "relacion_vi_agre";
$proto54["m_srcTableName"] = "hechosdelictivos2";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "edad_agresor",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto56["m_sql"] = "edad_agresor";
$proto56["m_srcTableName"] = "hechosdelictivos2";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo__agresor",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto58["m_sql"] = "sexo__agresor";
$proto58["m_srcTableName"] = "hechosdelictivos2";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "ocupa_agresor",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto60["m_sql"] = "ocupa_agresor";
$proto60["m_srcTableName"] = "hechosdelictivos2";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "movil",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto62["m_sql"] = "movil";
$proto62["m_srcTableName"] = "hechosdelictivos2";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_arma",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto64["m_sql"] = "tipo_arma";
$proto64["m_srcTableName"] = "hechosdelictivos2";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "canton_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto66["m_sql"] = "canton_hecho";
$proto66["m_srcTableName"] = "hechosdelictivos2";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "colonia_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto68["m_sql"] = "colonia_hecho";
$proto68["m_srcTableName"] = "hechosdelictivos2";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "caserio_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto70["m_sql"] = "caserio_hecho";
$proto70["m_srcTableName"] = "hechosdelictivos2";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "calle_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto72["m_sql"] = "calle_hecho";
$proto72["m_srcTableName"] = "hechosdelictivos2";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "avenida_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto74["m_sql"] = "avenida_hecho";
$proto74["m_srcTableName"] = "hechosdelictivos2";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "casa_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto76["m_sql"] = "casa_hecho";
$proto76["m_srcTableName"] = "hechosdelictivos2";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "comu_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto78["m_sql"] = "comu_hecho";
$proto78["m_srcTableName"] = "hechosdelictivos2";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "barrio_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto80["m_sql"] = "barrio_hecho";
$proto80["m_srcTableName"] = "hechosdelictivos2";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "comp_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto82["m_sql"] = "comp_hecho";
$proto82["m_srcTableName"] = "hechosdelictivos2";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto84["m_sql"] = "sector_ppd";
$proto84["m_srcTableName"] = "hechosdelictivos2";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto86["m_sql"] = "tipo";
$proto86["m_srcTableName"] = "hechosdelictivos2";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto88["m_sql"] = "nombre";
$proto88["m_srcTableName"] = "hechosdelictivos2";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "x",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto90["m_sql"] = "x";
$proto90["m_srcTableName"] = "hechosdelictivos2";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "y",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos2"
));

$proto92["m_sql"] = "y";
$proto92["m_srcTableName"] = "hechosdelictivos2";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto94=array();
$proto94["m_link"] = "SQLL_MAIN";
			$proto95=array();
$proto95["m_strName"] = "hechosdelictivos";
$proto95["m_srcTableName"] = "hechosdelictivos2";
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
$proto94["m_srcTableName"] = "hechosdelictivos2";
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
$proto0["m_srcTableName"]="hechosdelictivos2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hechosdelictivos2 = createSqlQuery_hechosdelictivos2();


	
		;

																																												

$tdatahechosdelictivos2[".sqlquery"] = $queryData_hechosdelictivos2;

$tableEvents["hechosdelictivos2"] = new eventsBase;
$tdatahechosdelictivos2[".hasEvents"] = false;

?>