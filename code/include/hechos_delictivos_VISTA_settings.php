<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahechos_delictivos_VISTA = array();
	$tdatahechos_delictivos_VISTA[".truncateText"] = true;
	$tdatahechos_delictivos_VISTA[".NumberOfChars"] = 80;
	$tdatahechos_delictivos_VISTA[".ShortName"] = "hechos_delictivos_VISTA";
	$tdatahechos_delictivos_VISTA[".OwnerID"] = "";
	$tdatahechos_delictivos_VISTA[".OriginalTable"] = "hechos_delictivos1";

//	field labels
$fieldLabelshechos_delictivos_VISTA = array();
$fieldToolTipshechos_delictivos_VISTA = array();
$pageTitleshechos_delictivos_VISTA = array();
$placeHoldershechos_delictivos_VISTA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshechos_delictivos_VISTA["Spanish"] = array();
	$fieldToolTipshechos_delictivos_VISTA["Spanish"] = array();
	$placeHoldershechos_delictivos_VISTA["Spanish"] = array();
	$pageTitleshechos_delictivos_VISTA["Spanish"] = array();
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["numero"] = "Numero";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["numero"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["numero"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["id"] = "Id";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["id"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["id"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["numero2"] = "Numero2";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["numero2"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["numero2"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["lugaranalisis"] = "Lugaranalisis";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["lugaranalisis"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["lugaranalisis"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["area"] = "Area";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["area"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["area"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["delito"] = "Delito";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["delito"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["delito"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["codigo_muni"] = "Codigo Muni";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["codigo_muni"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["codigo_muni"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["depart_he"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["depart_he"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["muni_he"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["muni_he"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["dire_hecho"] = "Dire Hecho";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["dire_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["dire_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["lugar_esp"] = "Lugar Esp";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["lugar_esp"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["lugar_esp"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["forma_cono"] = "Forma Cono";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["forma_cono"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["forma_cono"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["delito_espe"] = "Delito Espe";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["delito_espe"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["delito_espe"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["dia_hecho"] = "Dia Hecho";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["dia_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["dia_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["hora_hecho"] = "Hora Hecho";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["hora_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["hora_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["rango_hora"] = "Rango Hora";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["rango_hora"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["rango_hora"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["fecha_hecho"] = "Fecha Hecho";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["fecha_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["fecha_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["mes_hecho"] = "Mes Hecho";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["mes_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["mes_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["a_o_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["a_o_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["edad_victima"] = "Edad Victima";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["edad_victima"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["edad_victima"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["ran_eta_vic"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["ran_eta_vic"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["s_victima"] = "S Victima";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["s_victima"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["s_victima"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["oc_victima"] = "Oc Victima";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["oc_victima"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["oc_victima"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["relacion_vi_agre"] = "Relacion Vi Agre";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["relacion_vi_agre"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["relacion_vi_agre"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["edad_agresor"] = "Edad Agresor";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["edad_agresor"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["edad_agresor"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["sexo_agresor"] = "Sexo Agresor";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["sexo_agresor"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["sexo_agresor"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["ocupa_agresor"] = "Ocupa Agresor";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["ocupa_agresor"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["ocupa_agresor"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["movil"] = "Movil";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["movil"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["movil"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["tipo_arma"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["tipo_arma"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["canton_hecho"] = "Canton Hecho";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["canton_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["canton_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["colonia_hecho"] = "Colonia Hecho";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["colonia_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["colonia_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["caserio_hecho"] = "Caserio Hecho";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["caserio_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["caserio_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["calle_hecho"] = "Calle Hecho";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["calle_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["calle_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["avenida_hecho"] = "Avenida Hecho";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["avenida_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["avenida_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["casa_hecho"] = "Casa Hecho";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["casa_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["casa_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["com_hecho"] = "Com Hecho";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["com_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["com_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["barrio_hecho"] = "Barrio Hecho";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["barrio_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["barrio_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["comp_hecho"] = "Comp Hecho";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["comp_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["comp_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["sector_ppd"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["sector_ppd"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["tipo"] = "Tipo";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["tipo"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["tipo"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["nombre"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["nombre"] = "";
	$fieldLabelshechos_delictivos_VISTA["Spanish"]["x"] = "X";
	$fieldToolTipshechos_delictivos_VISTA["Spanish"]["x"] = "";
	$placeHoldershechos_delictivos_VISTA["Spanish"]["x"] = "";
	if (count($fieldToolTipshechos_delictivos_VISTA["Spanish"]))
		$tdatahechos_delictivos_VISTA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshechos_delictivos_VISTA["English"] = array();
	$fieldToolTipshechos_delictivos_VISTA["English"] = array();
	$placeHoldershechos_delictivos_VISTA["English"] = array();
	$pageTitleshechos_delictivos_VISTA["English"] = array();
	$fieldLabelshechos_delictivos_VISTA["English"]["numero"] = "Numero";
	$fieldToolTipshechos_delictivos_VISTA["English"]["numero"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["numero"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["id"] = "Id";
	$fieldToolTipshechos_delictivos_VISTA["English"]["id"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["id"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["numero2"] = "Numero2";
	$fieldToolTipshechos_delictivos_VISTA["English"]["numero2"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["numero2"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["lugaranalisis"] = "Lugaranalisis";
	$fieldToolTipshechos_delictivos_VISTA["English"]["lugaranalisis"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["lugaranalisis"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["area"] = "Area";
	$fieldToolTipshechos_delictivos_VISTA["English"]["area"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["area"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["delito"] = "Delito";
	$fieldToolTipshechos_delictivos_VISTA["English"]["delito"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["delito"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["codigo_muni"] = "Codigo Muni";
	$fieldToolTipshechos_delictivos_VISTA["English"]["codigo_muni"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["codigo_muni"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["depart_he"] = "Depart He";
	$fieldToolTipshechos_delictivos_VISTA["English"]["depart_he"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["depart_he"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["muni_he"] = "Muni He";
	$fieldToolTipshechos_delictivos_VISTA["English"]["muni_he"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["muni_he"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["dire_hecho"] = "Dire Hecho";
	$fieldToolTipshechos_delictivos_VISTA["English"]["dire_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["dire_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["lugar_esp"] = "Lugar Esp";
	$fieldToolTipshechos_delictivos_VISTA["English"]["lugar_esp"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["lugar_esp"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["forma_cono"] = "Forma Cono";
	$fieldToolTipshechos_delictivos_VISTA["English"]["forma_cono"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["forma_cono"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["delito_espe"] = "Delito Espe";
	$fieldToolTipshechos_delictivos_VISTA["English"]["delito_espe"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["delito_espe"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["dia_hecho"] = "Dia Hecho";
	$fieldToolTipshechos_delictivos_VISTA["English"]["dia_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["dia_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["hora_hecho"] = "Hora Hecho";
	$fieldToolTipshechos_delictivos_VISTA["English"]["hora_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["hora_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["rango_hora"] = "Rango Hora";
	$fieldToolTipshechos_delictivos_VISTA["English"]["rango_hora"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["rango_hora"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["fecha_hecho"] = "Fecha Hecho";
	$fieldToolTipshechos_delictivos_VISTA["English"]["fecha_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["fecha_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["mes_hecho"] = "Mes Hecho";
	$fieldToolTipshechos_delictivos_VISTA["English"]["mes_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["mes_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipshechos_delictivos_VISTA["English"]["a_o_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["a_o_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["edad_victima"] = "Edad Victima";
	$fieldToolTipshechos_delictivos_VISTA["English"]["edad_victima"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["edad_victima"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipshechos_delictivos_VISTA["English"]["ran_eta_vic"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["ran_eta_vic"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["s_victima"] = "S Victima";
	$fieldToolTipshechos_delictivos_VISTA["English"]["s_victima"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["s_victima"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["oc_victima"] = "Oc Victima";
	$fieldToolTipshechos_delictivos_VISTA["English"]["oc_victima"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["oc_victima"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["relacion_vi_agre"] = "Relacion Vi Agre";
	$fieldToolTipshechos_delictivos_VISTA["English"]["relacion_vi_agre"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["relacion_vi_agre"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["edad_agresor"] = "Edad Agresor";
	$fieldToolTipshechos_delictivos_VISTA["English"]["edad_agresor"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["edad_agresor"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["sexo_agresor"] = "Sexo Agresor";
	$fieldToolTipshechos_delictivos_VISTA["English"]["sexo_agresor"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["sexo_agresor"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["ocupa_agresor"] = "Ocupa Agresor";
	$fieldToolTipshechos_delictivos_VISTA["English"]["ocupa_agresor"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["ocupa_agresor"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["movil"] = "Movil";
	$fieldToolTipshechos_delictivos_VISTA["English"]["movil"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["movil"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipshechos_delictivos_VISTA["English"]["tipo_arma"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["tipo_arma"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["canton_hecho"] = "Canton Hecho";
	$fieldToolTipshechos_delictivos_VISTA["English"]["canton_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["canton_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["colonia_hecho"] = "Colonia Hecho";
	$fieldToolTipshechos_delictivos_VISTA["English"]["colonia_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["colonia_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["caserio_hecho"] = "Caserio Hecho";
	$fieldToolTipshechos_delictivos_VISTA["English"]["caserio_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["caserio_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["calle_hecho"] = "Calle Hecho";
	$fieldToolTipshechos_delictivos_VISTA["English"]["calle_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["calle_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["avenida_hecho"] = "Avenida Hecho";
	$fieldToolTipshechos_delictivos_VISTA["English"]["avenida_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["avenida_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["casa_hecho"] = "Casa Hecho";
	$fieldToolTipshechos_delictivos_VISTA["English"]["casa_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["casa_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["com_hecho"] = "Com Hecho";
	$fieldToolTipshechos_delictivos_VISTA["English"]["com_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["com_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["barrio_hecho"] = "Barrio Hecho";
	$fieldToolTipshechos_delictivos_VISTA["English"]["barrio_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["barrio_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["comp_hecho"] = "Comp Hecho";
	$fieldToolTipshechos_delictivos_VISTA["English"]["comp_hecho"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["comp_hecho"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipshechos_delictivos_VISTA["English"]["sector_ppd"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["sector_ppd"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["tipo"] = "Tipo";
	$fieldToolTipshechos_delictivos_VISTA["English"]["tipo"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["tipo"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["nombre"] = "Nombre";
	$fieldToolTipshechos_delictivos_VISTA["English"]["nombre"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["nombre"] = "";
	$fieldLabelshechos_delictivos_VISTA["English"]["x"] = "X";
	$fieldToolTipshechos_delictivos_VISTA["English"]["x"] = "";
	$placeHoldershechos_delictivos_VISTA["English"]["x"] = "";
	if (count($fieldToolTipshechos_delictivos_VISTA["English"]))
		$tdatahechos_delictivos_VISTA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshechos_delictivos_VISTA[""] = array();
	$fieldToolTipshechos_delictivos_VISTA[""] = array();
	$placeHoldershechos_delictivos_VISTA[""] = array();
	$pageTitleshechos_delictivos_VISTA[""] = array();
	if (count($fieldToolTipshechos_delictivos_VISTA[""]))
		$tdatahechos_delictivos_VISTA[".isUseToolTips"] = true;
}





$tdatahechos_delictivos_VISTA[".shortTableName"] = "hechos_delictivos_VISTA";
$tdatahechos_delictivos_VISTA[".nSecOptions"] = 0;
$tdatahechos_delictivos_VISTA[".recsPerRowPrint"] = 1;
$tdatahechos_delictivos_VISTA[".mainTableOwnerID"] = "";
$tdatahechos_delictivos_VISTA[".moveNext"] = 1;
$tdatahechos_delictivos_VISTA[".entityType"] = 1;

$tdatahechos_delictivos_VISTA[".strOriginalTableName"] = "hechos_delictivos1";

	



$tdatahechos_delictivos_VISTA[".showAddInPopup"] = false;

$tdatahechos_delictivos_VISTA[".showEditInPopup"] = false;

$tdatahechos_delictivos_VISTA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahechos_delictivos_VISTA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahechos_delictivos_VISTA[".fieldsForRegister"] = array();

	$tdatahechos_delictivos_VISTA[".listAjax"] = true;

	$tdatahechos_delictivos_VISTA[".audit"] = false;

	$tdatahechos_delictivos_VISTA[".locking"] = false;



$tdatahechos_delictivos_VISTA[".list"] = true;



$tdatahechos_delictivos_VISTA[".reorderRecordsByHeader"] = true;
$tdatahechos_delictivos_VISTA[".createSortByDropdown"] = true;
$tdatahechos_delictivos_VISTA[".strSortControlSettingsJSON"] = "";




$tdatahechos_delictivos_VISTA[".import"] = true;

$tdatahechos_delictivos_VISTA[".exportTo"] = true;

$tdatahechos_delictivos_VISTA[".printFriendly"] = true;


$tdatahechos_delictivos_VISTA[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatahechos_delictivos_VISTA[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatahechos_delictivos_VISTA[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatahechos_delictivos_VISTA[".searchSaving"] = false;
//

$tdatahechos_delictivos_VISTA[".showSearchPanel"] = true;
		$tdatahechos_delictivos_VISTA[".flexibleSearch"] = true;

$tdatahechos_delictivos_VISTA[".isUseAjaxSuggest"] = true;

$tdatahechos_delictivos_VISTA[".rowHighlite"] = true;





$tdatahechos_delictivos_VISTA[".ajaxCodeSnippetAdded"] = false;

$tdatahechos_delictivos_VISTA[".buttonsAdded"] = false;

$tdatahechos_delictivos_VISTA[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahechos_delictivos_VISTA[".isUseTimeForSearch"] = false;





$tdatahechos_delictivos_VISTA[".allSearchFields"] = array();
$tdatahechos_delictivos_VISTA[".filterFields"] = array();
$tdatahechos_delictivos_VISTA[".requiredSearchFields"] = array();

$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "numero";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "id";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "numero2";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "lugaranalisis";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "area";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "delito";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "codigo_muni";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "depart_he";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "muni_he";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "dire_hecho";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "lugar_esp";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "forma_cono";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "delito_espe";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "dia_hecho";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "hora_hecho";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "rango_hora";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "fecha_hecho";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "mes_hecho";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "aÑo_hecho";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "edad_victima";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "ran_eta_vic";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "s_victima";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "oc_victima";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "relacion_vi_agre";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "edad_agresor";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "sexo_agresor";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "ocupa_agresor";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "movil";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "tipo_arma";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "canton_hecho";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "colonia_hecho";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "caserio_hecho";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "calle_hecho";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "avenida_hecho";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "casa_hecho";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "com_hecho";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "barrio_hecho";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "comp_hecho";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "sector_ppd";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "tipo";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "nombre";
	$tdatahechos_delictivos_VISTA[".allSearchFields"][] = "x";
	

$tdatahechos_delictivos_VISTA[".googleLikeFields"] = array();
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "numero";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "id";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "numero2";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "lugaranalisis";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "area";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "delito";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "codigo_muni";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "depart_he";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "muni_he";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "dire_hecho";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "lugar_esp";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "forma_cono";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "delito_espe";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "dia_hecho";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "hora_hecho";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "rango_hora";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "fecha_hecho";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "mes_hecho";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "aÑo_hecho";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "edad_victima";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "ran_eta_vic";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "s_victima";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "oc_victima";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "edad_agresor";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "sexo_agresor";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "ocupa_agresor";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "movil";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "tipo_arma";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "canton_hecho";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "colonia_hecho";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "caserio_hecho";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "calle_hecho";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "avenida_hecho";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "casa_hecho";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "com_hecho";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "barrio_hecho";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "comp_hecho";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "sector_ppd";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "tipo";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "nombre";
$tdatahechos_delictivos_VISTA[".googleLikeFields"][] = "x";


$tdatahechos_delictivos_VISTA[".advSearchFields"] = array();
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "numero";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "id";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "numero2";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "lugaranalisis";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "area";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "delito";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "codigo_muni";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "depart_he";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "muni_he";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "dire_hecho";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "lugar_esp";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "forma_cono";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "delito_espe";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "dia_hecho";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "hora_hecho";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "rango_hora";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "fecha_hecho";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "mes_hecho";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "aÑo_hecho";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "edad_victima";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "ran_eta_vic";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "s_victima";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "oc_victima";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "edad_agresor";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "sexo_agresor";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "ocupa_agresor";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "movil";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "tipo_arma";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "canton_hecho";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "colonia_hecho";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "caserio_hecho";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "calle_hecho";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "avenida_hecho";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "casa_hecho";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "com_hecho";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "barrio_hecho";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "comp_hecho";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "sector_ppd";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "tipo";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "nombre";
$tdatahechos_delictivos_VISTA[".advSearchFields"][] = "x";

$tdatahechos_delictivos_VISTA[".tableType"] = "list";

$tdatahechos_delictivos_VISTA[".printerPageOrientation"] = 0;
$tdatahechos_delictivos_VISTA[".nPrinterPageScale"] = 100;

$tdatahechos_delictivos_VISTA[".nPrinterSplitRecords"] = 40;

$tdatahechos_delictivos_VISTA[".nPrinterPDFSplitRecords"] = 40;



$tdatahechos_delictivos_VISTA[".geocodingEnabled"] = false;





$tdatahechos_delictivos_VISTA[".listGridLayout"] = 3;

$tdatahechos_delictivos_VISTA[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatahechos_delictivos_VISTA[".pageSize"] = 10;

$tdatahechos_delictivos_VISTA[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY sector_ppd DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahechos_delictivos_VISTA[".strOrderBy"] = $tstrOrderBy;

$tdatahechos_delictivos_VISTA[".orderindexes"] = array();
$tdatahechos_delictivos_VISTA[".orderindexes"][] = array(39, (0 ? "ASC" : "DESC"), "sector_ppd");

$tdatahechos_delictivos_VISTA[".sqlHead"] = "SELECT numero,  id,  numero2,  lugaranalisis,  area,  delito,  codigo_muni,  depart_he,  muni_he,  dire_hecho,  lugar_esp,  forma_cono,  delito_espe,  dia_hecho,  hora_hecho,  rango_hora,  fecha_hecho,  mes_hecho,  `aÑo_hecho`,  edad_victima,  ran_eta_vic,  s_victima,  oc_victima,  relacion_vi_agre,  edad_agresor,  sexo_agresor,  ocupa_agresor,  movil,  tipo_arma,  canton_hecho,  colonia_hecho,  caserio_hecho,  calle_hecho,  avenida_hecho,  casa_hecho,  com_hecho,  barrio_hecho,  comp_hecho,  sector_ppd,  tipo,  nombre,  x";
$tdatahechos_delictivos_VISTA[".sqlFrom"] = "FROM hechos_delictivos1";
$tdatahechos_delictivos_VISTA[".sqlWhereExpr"] = "(muni_he LIKE 'ARMENIA') AND (sector_ppd =null)";
$tdatahechos_delictivos_VISTA[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahechos_delictivos_VISTA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahechos_delictivos_VISTA[".arrGroupsPerPage"] = $arrGPP;

$tdatahechos_delictivos_VISTA[".highlightSearchResults"] = true;

$tableKeyshechos_delictivos_VISTA = array();
$tdatahechos_delictivos_VISTA[".Keys"] = $tableKeyshechos_delictivos_VISTA;

$tdatahechos_delictivos_VISTA[".listFields"] = array();
$tdatahechos_delictivos_VISTA[".listFields"][] = "numero";
$tdatahechos_delictivos_VISTA[".listFields"][] = "id";
$tdatahechos_delictivos_VISTA[".listFields"][] = "numero2";
$tdatahechos_delictivos_VISTA[".listFields"][] = "lugaranalisis";
$tdatahechos_delictivos_VISTA[".listFields"][] = "area";
$tdatahechos_delictivos_VISTA[".listFields"][] = "delito";
$tdatahechos_delictivos_VISTA[".listFields"][] = "codigo_muni";
$tdatahechos_delictivos_VISTA[".listFields"][] = "depart_he";
$tdatahechos_delictivos_VISTA[".listFields"][] = "muni_he";
$tdatahechos_delictivos_VISTA[".listFields"][] = "dire_hecho";
$tdatahechos_delictivos_VISTA[".listFields"][] = "lugar_esp";
$tdatahechos_delictivos_VISTA[".listFields"][] = "forma_cono";
$tdatahechos_delictivos_VISTA[".listFields"][] = "delito_espe";
$tdatahechos_delictivos_VISTA[".listFields"][] = "dia_hecho";
$tdatahechos_delictivos_VISTA[".listFields"][] = "hora_hecho";
$tdatahechos_delictivos_VISTA[".listFields"][] = "rango_hora";
$tdatahechos_delictivos_VISTA[".listFields"][] = "fecha_hecho";
$tdatahechos_delictivos_VISTA[".listFields"][] = "mes_hecho";
$tdatahechos_delictivos_VISTA[".listFields"][] = "aÑo_hecho";
$tdatahechos_delictivos_VISTA[".listFields"][] = "edad_victima";
$tdatahechos_delictivos_VISTA[".listFields"][] = "ran_eta_vic";
$tdatahechos_delictivos_VISTA[".listFields"][] = "s_victima";
$tdatahechos_delictivos_VISTA[".listFields"][] = "oc_victima";
$tdatahechos_delictivos_VISTA[".listFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos_VISTA[".listFields"][] = "edad_agresor";
$tdatahechos_delictivos_VISTA[".listFields"][] = "sexo_agresor";
$tdatahechos_delictivos_VISTA[".listFields"][] = "ocupa_agresor";
$tdatahechos_delictivos_VISTA[".listFields"][] = "movil";
$tdatahechos_delictivos_VISTA[".listFields"][] = "tipo_arma";
$tdatahechos_delictivos_VISTA[".listFields"][] = "canton_hecho";
$tdatahechos_delictivos_VISTA[".listFields"][] = "colonia_hecho";
$tdatahechos_delictivos_VISTA[".listFields"][] = "caserio_hecho";
$tdatahechos_delictivos_VISTA[".listFields"][] = "calle_hecho";
$tdatahechos_delictivos_VISTA[".listFields"][] = "avenida_hecho";
$tdatahechos_delictivos_VISTA[".listFields"][] = "casa_hecho";
$tdatahechos_delictivos_VISTA[".listFields"][] = "com_hecho";
$tdatahechos_delictivos_VISTA[".listFields"][] = "barrio_hecho";
$tdatahechos_delictivos_VISTA[".listFields"][] = "comp_hecho";
$tdatahechos_delictivos_VISTA[".listFields"][] = "sector_ppd";
$tdatahechos_delictivos_VISTA[".listFields"][] = "tipo";
$tdatahechos_delictivos_VISTA[".listFields"][] = "nombre";
$tdatahechos_delictivos_VISTA[".listFields"][] = "x";

$tdatahechos_delictivos_VISTA[".hideMobileList"] = array();


$tdatahechos_delictivos_VISTA[".viewFields"] = array();
$tdatahechos_delictivos_VISTA[".viewFields"][] = "numero";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "id";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "numero2";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "lugaranalisis";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "area";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "delito";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "codigo_muni";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "depart_he";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "muni_he";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "dire_hecho";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "lugar_esp";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "forma_cono";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "delito_espe";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "dia_hecho";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "hora_hecho";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "rango_hora";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "fecha_hecho";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "mes_hecho";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "aÑo_hecho";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "edad_victima";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "ran_eta_vic";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "s_victima";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "oc_victima";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "edad_agresor";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "sexo_agresor";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "ocupa_agresor";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "movil";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "tipo_arma";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "canton_hecho";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "colonia_hecho";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "caserio_hecho";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "calle_hecho";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "avenida_hecho";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "casa_hecho";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "com_hecho";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "barrio_hecho";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "comp_hecho";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "sector_ppd";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "tipo";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "nombre";
$tdatahechos_delictivos_VISTA[".viewFields"][] = "x";

$tdatahechos_delictivos_VISTA[".addFields"] = array();
$tdatahechos_delictivos_VISTA[".addFields"][] = "numero";
$tdatahechos_delictivos_VISTA[".addFields"][] = "id";
$tdatahechos_delictivos_VISTA[".addFields"][] = "numero2";
$tdatahechos_delictivos_VISTA[".addFields"][] = "lugaranalisis";
$tdatahechos_delictivos_VISTA[".addFields"][] = "area";
$tdatahechos_delictivos_VISTA[".addFields"][] = "delito";
$tdatahechos_delictivos_VISTA[".addFields"][] = "codigo_muni";
$tdatahechos_delictivos_VISTA[".addFields"][] = "depart_he";
$tdatahechos_delictivos_VISTA[".addFields"][] = "muni_he";
$tdatahechos_delictivos_VISTA[".addFields"][] = "dire_hecho";
$tdatahechos_delictivos_VISTA[".addFields"][] = "lugar_esp";
$tdatahechos_delictivos_VISTA[".addFields"][] = "forma_cono";
$tdatahechos_delictivos_VISTA[".addFields"][] = "delito_espe";
$tdatahechos_delictivos_VISTA[".addFields"][] = "dia_hecho";
$tdatahechos_delictivos_VISTA[".addFields"][] = "hora_hecho";
$tdatahechos_delictivos_VISTA[".addFields"][] = "rango_hora";
$tdatahechos_delictivos_VISTA[".addFields"][] = "fecha_hecho";
$tdatahechos_delictivos_VISTA[".addFields"][] = "mes_hecho";
$tdatahechos_delictivos_VISTA[".addFields"][] = "aÑo_hecho";
$tdatahechos_delictivos_VISTA[".addFields"][] = "edad_victima";
$tdatahechos_delictivos_VISTA[".addFields"][] = "ran_eta_vic";
$tdatahechos_delictivos_VISTA[".addFields"][] = "s_victima";
$tdatahechos_delictivos_VISTA[".addFields"][] = "oc_victima";
$tdatahechos_delictivos_VISTA[".addFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos_VISTA[".addFields"][] = "edad_agresor";
$tdatahechos_delictivos_VISTA[".addFields"][] = "sexo_agresor";
$tdatahechos_delictivos_VISTA[".addFields"][] = "ocupa_agresor";
$tdatahechos_delictivos_VISTA[".addFields"][] = "movil";
$tdatahechos_delictivos_VISTA[".addFields"][] = "tipo_arma";
$tdatahechos_delictivos_VISTA[".addFields"][] = "canton_hecho";
$tdatahechos_delictivos_VISTA[".addFields"][] = "colonia_hecho";
$tdatahechos_delictivos_VISTA[".addFields"][] = "caserio_hecho";
$tdatahechos_delictivos_VISTA[".addFields"][] = "calle_hecho";
$tdatahechos_delictivos_VISTA[".addFields"][] = "avenida_hecho";
$tdatahechos_delictivos_VISTA[".addFields"][] = "casa_hecho";
$tdatahechos_delictivos_VISTA[".addFields"][] = "com_hecho";
$tdatahechos_delictivos_VISTA[".addFields"][] = "barrio_hecho";
$tdatahechos_delictivos_VISTA[".addFields"][] = "comp_hecho";
$tdatahechos_delictivos_VISTA[".addFields"][] = "sector_ppd";
$tdatahechos_delictivos_VISTA[".addFields"][] = "tipo";
$tdatahechos_delictivos_VISTA[".addFields"][] = "nombre";
$tdatahechos_delictivos_VISTA[".addFields"][] = "x";

$tdatahechos_delictivos_VISTA[".masterListFields"] = array();
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "numero";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "id";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "numero2";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "lugaranalisis";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "area";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "delito";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "codigo_muni";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "depart_he";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "muni_he";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "dire_hecho";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "lugar_esp";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "forma_cono";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "delito_espe";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "dia_hecho";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "hora_hecho";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "rango_hora";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "fecha_hecho";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "mes_hecho";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "aÑo_hecho";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "edad_victima";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "ran_eta_vic";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "s_victima";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "oc_victima";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "edad_agresor";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "sexo_agresor";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "ocupa_agresor";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "movil";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "tipo_arma";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "canton_hecho";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "colonia_hecho";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "caserio_hecho";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "calle_hecho";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "avenida_hecho";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "casa_hecho";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "com_hecho";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "barrio_hecho";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "comp_hecho";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "sector_ppd";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "tipo";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "nombre";
$tdatahechos_delictivos_VISTA[".masterListFields"][] = "x";

$tdatahechos_delictivos_VISTA[".inlineAddFields"] = array();
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "numero";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "id";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "numero2";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "lugaranalisis";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "area";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "delito";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "codigo_muni";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "depart_he";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "muni_he";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "dire_hecho";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "lugar_esp";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "forma_cono";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "delito_espe";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "dia_hecho";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "hora_hecho";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "rango_hora";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "fecha_hecho";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "mes_hecho";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "aÑo_hecho";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "edad_victima";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "ran_eta_vic";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "s_victima";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "oc_victima";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "edad_agresor";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "sexo_agresor";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "ocupa_agresor";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "movil";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "tipo_arma";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "canton_hecho";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "colonia_hecho";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "caserio_hecho";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "calle_hecho";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "avenida_hecho";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "casa_hecho";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "com_hecho";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "barrio_hecho";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "comp_hecho";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "sector_ppd";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "tipo";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "nombre";
$tdatahechos_delictivos_VISTA[".inlineAddFields"][] = "x";

$tdatahechos_delictivos_VISTA[".editFields"] = array();
$tdatahechos_delictivos_VISTA[".editFields"][] = "numero";
$tdatahechos_delictivos_VISTA[".editFields"][] = "id";
$tdatahechos_delictivos_VISTA[".editFields"][] = "numero2";
$tdatahechos_delictivos_VISTA[".editFields"][] = "lugaranalisis";
$tdatahechos_delictivos_VISTA[".editFields"][] = "area";
$tdatahechos_delictivos_VISTA[".editFields"][] = "delito";
$tdatahechos_delictivos_VISTA[".editFields"][] = "codigo_muni";
$tdatahechos_delictivos_VISTA[".editFields"][] = "depart_he";
$tdatahechos_delictivos_VISTA[".editFields"][] = "muni_he";
$tdatahechos_delictivos_VISTA[".editFields"][] = "dire_hecho";
$tdatahechos_delictivos_VISTA[".editFields"][] = "lugar_esp";
$tdatahechos_delictivos_VISTA[".editFields"][] = "forma_cono";
$tdatahechos_delictivos_VISTA[".editFields"][] = "delito_espe";
$tdatahechos_delictivos_VISTA[".editFields"][] = "dia_hecho";
$tdatahechos_delictivos_VISTA[".editFields"][] = "hora_hecho";
$tdatahechos_delictivos_VISTA[".editFields"][] = "rango_hora";
$tdatahechos_delictivos_VISTA[".editFields"][] = "fecha_hecho";
$tdatahechos_delictivos_VISTA[".editFields"][] = "mes_hecho";
$tdatahechos_delictivos_VISTA[".editFields"][] = "aÑo_hecho";
$tdatahechos_delictivos_VISTA[".editFields"][] = "edad_victima";
$tdatahechos_delictivos_VISTA[".editFields"][] = "ran_eta_vic";
$tdatahechos_delictivos_VISTA[".editFields"][] = "s_victima";
$tdatahechos_delictivos_VISTA[".editFields"][] = "oc_victima";
$tdatahechos_delictivos_VISTA[".editFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos_VISTA[".editFields"][] = "edad_agresor";
$tdatahechos_delictivos_VISTA[".editFields"][] = "sexo_agresor";
$tdatahechos_delictivos_VISTA[".editFields"][] = "ocupa_agresor";
$tdatahechos_delictivos_VISTA[".editFields"][] = "movil";
$tdatahechos_delictivos_VISTA[".editFields"][] = "tipo_arma";
$tdatahechos_delictivos_VISTA[".editFields"][] = "canton_hecho";
$tdatahechos_delictivos_VISTA[".editFields"][] = "colonia_hecho";
$tdatahechos_delictivos_VISTA[".editFields"][] = "caserio_hecho";
$tdatahechos_delictivos_VISTA[".editFields"][] = "calle_hecho";
$tdatahechos_delictivos_VISTA[".editFields"][] = "avenida_hecho";
$tdatahechos_delictivos_VISTA[".editFields"][] = "casa_hecho";
$tdatahechos_delictivos_VISTA[".editFields"][] = "com_hecho";
$tdatahechos_delictivos_VISTA[".editFields"][] = "barrio_hecho";
$tdatahechos_delictivos_VISTA[".editFields"][] = "comp_hecho";
$tdatahechos_delictivos_VISTA[".editFields"][] = "sector_ppd";
$tdatahechos_delictivos_VISTA[".editFields"][] = "tipo";
$tdatahechos_delictivos_VISTA[".editFields"][] = "nombre";
$tdatahechos_delictivos_VISTA[".editFields"][] = "x";

$tdatahechos_delictivos_VISTA[".inlineEditFields"] = array();
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "numero";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "id";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "numero2";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "lugaranalisis";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "area";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "delito";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "codigo_muni";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "depart_he";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "muni_he";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "dire_hecho";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "lugar_esp";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "forma_cono";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "delito_espe";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "dia_hecho";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "hora_hecho";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "rango_hora";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "fecha_hecho";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "mes_hecho";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "aÑo_hecho";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "edad_victima";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "ran_eta_vic";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "s_victima";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "oc_victima";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "edad_agresor";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "sexo_agresor";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "ocupa_agresor";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "movil";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "tipo_arma";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "canton_hecho";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "colonia_hecho";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "caserio_hecho";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "calle_hecho";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "avenida_hecho";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "casa_hecho";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "com_hecho";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "barrio_hecho";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "comp_hecho";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "sector_ppd";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "tipo";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "nombre";
$tdatahechos_delictivos_VISTA[".inlineEditFields"][] = "x";

$tdatahechos_delictivos_VISTA[".updateSelectedFields"] = array();
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "numero";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "id";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "numero2";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "lugaranalisis";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "area";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "delito";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "codigo_muni";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "depart_he";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "muni_he";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "dire_hecho";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "lugar_esp";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "forma_cono";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "delito_espe";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "dia_hecho";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "hora_hecho";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "rango_hora";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "fecha_hecho";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "mes_hecho";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "aÑo_hecho";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "edad_victima";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "ran_eta_vic";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "s_victima";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "oc_victima";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "edad_agresor";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "sexo_agresor";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "ocupa_agresor";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "movil";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "tipo_arma";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "canton_hecho";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "colonia_hecho";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "caserio_hecho";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "calle_hecho";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "avenida_hecho";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "casa_hecho";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "com_hecho";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "barrio_hecho";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "comp_hecho";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "sector_ppd";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "tipo";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "nombre";
$tdatahechos_delictivos_VISTA[".updateSelectedFields"][] = "x";


$tdatahechos_delictivos_VISTA[".exportFields"] = array();
$tdatahechos_delictivos_VISTA[".exportFields"][] = "numero";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "id";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "numero2";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "lugaranalisis";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "area";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "delito";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "codigo_muni";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "depart_he";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "muni_he";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "dire_hecho";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "lugar_esp";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "forma_cono";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "delito_espe";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "dia_hecho";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "hora_hecho";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "rango_hora";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "fecha_hecho";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "mes_hecho";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "aÑo_hecho";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "edad_victima";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "ran_eta_vic";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "s_victima";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "oc_victima";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "edad_agresor";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "sexo_agresor";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "ocupa_agresor";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "movil";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "tipo_arma";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "canton_hecho";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "colonia_hecho";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "caserio_hecho";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "calle_hecho";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "avenida_hecho";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "casa_hecho";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "com_hecho";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "barrio_hecho";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "comp_hecho";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "sector_ppd";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "tipo";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "nombre";
$tdatahechos_delictivos_VISTA[".exportFields"][] = "x";

$tdatahechos_delictivos_VISTA[".importFields"] = array();
$tdatahechos_delictivos_VISTA[".importFields"][] = "numero";
$tdatahechos_delictivos_VISTA[".importFields"][] = "id";
$tdatahechos_delictivos_VISTA[".importFields"][] = "numero2";
$tdatahechos_delictivos_VISTA[".importFields"][] = "lugaranalisis";
$tdatahechos_delictivos_VISTA[".importFields"][] = "area";
$tdatahechos_delictivos_VISTA[".importFields"][] = "delito";
$tdatahechos_delictivos_VISTA[".importFields"][] = "codigo_muni";
$tdatahechos_delictivos_VISTA[".importFields"][] = "depart_he";
$tdatahechos_delictivos_VISTA[".importFields"][] = "muni_he";
$tdatahechos_delictivos_VISTA[".importFields"][] = "dire_hecho";
$tdatahechos_delictivos_VISTA[".importFields"][] = "lugar_esp";
$tdatahechos_delictivos_VISTA[".importFields"][] = "forma_cono";
$tdatahechos_delictivos_VISTA[".importFields"][] = "delito_espe";
$tdatahechos_delictivos_VISTA[".importFields"][] = "dia_hecho";
$tdatahechos_delictivos_VISTA[".importFields"][] = "hora_hecho";
$tdatahechos_delictivos_VISTA[".importFields"][] = "rango_hora";
$tdatahechos_delictivos_VISTA[".importFields"][] = "fecha_hecho";
$tdatahechos_delictivos_VISTA[".importFields"][] = "mes_hecho";
$tdatahechos_delictivos_VISTA[".importFields"][] = "aÑo_hecho";
$tdatahechos_delictivos_VISTA[".importFields"][] = "edad_victima";
$tdatahechos_delictivos_VISTA[".importFields"][] = "ran_eta_vic";
$tdatahechos_delictivos_VISTA[".importFields"][] = "s_victima";
$tdatahechos_delictivos_VISTA[".importFields"][] = "oc_victima";
$tdatahechos_delictivos_VISTA[".importFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos_VISTA[".importFields"][] = "edad_agresor";
$tdatahechos_delictivos_VISTA[".importFields"][] = "sexo_agresor";
$tdatahechos_delictivos_VISTA[".importFields"][] = "ocupa_agresor";
$tdatahechos_delictivos_VISTA[".importFields"][] = "movil";
$tdatahechos_delictivos_VISTA[".importFields"][] = "tipo_arma";
$tdatahechos_delictivos_VISTA[".importFields"][] = "canton_hecho";
$tdatahechos_delictivos_VISTA[".importFields"][] = "colonia_hecho";
$tdatahechos_delictivos_VISTA[".importFields"][] = "caserio_hecho";
$tdatahechos_delictivos_VISTA[".importFields"][] = "calle_hecho";
$tdatahechos_delictivos_VISTA[".importFields"][] = "avenida_hecho";
$tdatahechos_delictivos_VISTA[".importFields"][] = "casa_hecho";
$tdatahechos_delictivos_VISTA[".importFields"][] = "com_hecho";
$tdatahechos_delictivos_VISTA[".importFields"][] = "barrio_hecho";
$tdatahechos_delictivos_VISTA[".importFields"][] = "comp_hecho";
$tdatahechos_delictivos_VISTA[".importFields"][] = "sector_ppd";
$tdatahechos_delictivos_VISTA[".importFields"][] = "tipo";
$tdatahechos_delictivos_VISTA[".importFields"][] = "nombre";
$tdatahechos_delictivos_VISTA[".importFields"][] = "x";

$tdatahechos_delictivos_VISTA[".printFields"] = array();
$tdatahechos_delictivos_VISTA[".printFields"][] = "numero";
$tdatahechos_delictivos_VISTA[".printFields"][] = "id";
$tdatahechos_delictivos_VISTA[".printFields"][] = "numero2";
$tdatahechos_delictivos_VISTA[".printFields"][] = "lugaranalisis";
$tdatahechos_delictivos_VISTA[".printFields"][] = "area";
$tdatahechos_delictivos_VISTA[".printFields"][] = "delito";
$tdatahechos_delictivos_VISTA[".printFields"][] = "codigo_muni";
$tdatahechos_delictivos_VISTA[".printFields"][] = "depart_he";
$tdatahechos_delictivos_VISTA[".printFields"][] = "muni_he";
$tdatahechos_delictivos_VISTA[".printFields"][] = "dire_hecho";
$tdatahechos_delictivos_VISTA[".printFields"][] = "lugar_esp";
$tdatahechos_delictivos_VISTA[".printFields"][] = "forma_cono";
$tdatahechos_delictivos_VISTA[".printFields"][] = "delito_espe";
$tdatahechos_delictivos_VISTA[".printFields"][] = "dia_hecho";
$tdatahechos_delictivos_VISTA[".printFields"][] = "hora_hecho";
$tdatahechos_delictivos_VISTA[".printFields"][] = "rango_hora";
$tdatahechos_delictivos_VISTA[".printFields"][] = "fecha_hecho";
$tdatahechos_delictivos_VISTA[".printFields"][] = "mes_hecho";
$tdatahechos_delictivos_VISTA[".printFields"][] = "aÑo_hecho";
$tdatahechos_delictivos_VISTA[".printFields"][] = "edad_victima";
$tdatahechos_delictivos_VISTA[".printFields"][] = "ran_eta_vic";
$tdatahechos_delictivos_VISTA[".printFields"][] = "s_victima";
$tdatahechos_delictivos_VISTA[".printFields"][] = "oc_victima";
$tdatahechos_delictivos_VISTA[".printFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos_VISTA[".printFields"][] = "edad_agresor";
$tdatahechos_delictivos_VISTA[".printFields"][] = "sexo_agresor";
$tdatahechos_delictivos_VISTA[".printFields"][] = "ocupa_agresor";
$tdatahechos_delictivos_VISTA[".printFields"][] = "movil";
$tdatahechos_delictivos_VISTA[".printFields"][] = "tipo_arma";
$tdatahechos_delictivos_VISTA[".printFields"][] = "canton_hecho";
$tdatahechos_delictivos_VISTA[".printFields"][] = "colonia_hecho";
$tdatahechos_delictivos_VISTA[".printFields"][] = "caserio_hecho";
$tdatahechos_delictivos_VISTA[".printFields"][] = "calle_hecho";
$tdatahechos_delictivos_VISTA[".printFields"][] = "avenida_hecho";
$tdatahechos_delictivos_VISTA[".printFields"][] = "casa_hecho";
$tdatahechos_delictivos_VISTA[".printFields"][] = "com_hecho";
$tdatahechos_delictivos_VISTA[".printFields"][] = "barrio_hecho";
$tdatahechos_delictivos_VISTA[".printFields"][] = "comp_hecho";
$tdatahechos_delictivos_VISTA[".printFields"][] = "sector_ppd";
$tdatahechos_delictivos_VISTA[".printFields"][] = "tipo";
$tdatahechos_delictivos_VISTA[".printFields"][] = "nombre";
$tdatahechos_delictivos_VISTA[".printFields"][] = "x";

//	numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "numero";
	$fdata["GoodName"] = "numero";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","numero");
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




	$tdatahechos_delictivos_VISTA["numero"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","id");
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




	$tdatahechos_delictivos_VISTA["id"] = $fdata;
//	numero2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "numero2";
	$fdata["GoodName"] = "numero2";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","numero2");
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




	$tdatahechos_delictivos_VISTA["numero2"] = $fdata;
//	lugaranalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "lugaranalisis";
	$fdata["GoodName"] = "lugaranalisis";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","lugaranalisis");
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




	$tdatahechos_delictivos_VISTA["lugaranalisis"] = $fdata;
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","area");
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




	$tdatahechos_delictivos_VISTA["area"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","delito");
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




	$tdatahechos_delictivos_VISTA["delito"] = $fdata;
//	codigo_muni
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "codigo_muni";
	$fdata["GoodName"] = "codigo_muni";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","codigo_muni");
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




	$tdatahechos_delictivos_VISTA["codigo_muni"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","depart_he");
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




	$tdatahechos_delictivos_VISTA["depart_he"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","muni_he");
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




	$tdatahechos_delictivos_VISTA["muni_he"] = $fdata;
//	dire_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "dire_hecho";
	$fdata["GoodName"] = "dire_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","dire_hecho");
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




	$tdatahechos_delictivos_VISTA["dire_hecho"] = $fdata;
//	lugar_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "lugar_esp";
	$fdata["GoodName"] = "lugar_esp";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","lugar_esp");
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




	$tdatahechos_delictivos_VISTA["lugar_esp"] = $fdata;
//	forma_cono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "forma_cono";
	$fdata["GoodName"] = "forma_cono";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","forma_cono");
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




	$tdatahechos_delictivos_VISTA["forma_cono"] = $fdata;
//	delito_espe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "delito_espe";
	$fdata["GoodName"] = "delito_espe";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","delito_espe");
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




	$tdatahechos_delictivos_VISTA["delito_espe"] = $fdata;
//	dia_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "dia_hecho";
	$fdata["GoodName"] = "dia_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","dia_hecho");
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




	$tdatahechos_delictivos_VISTA["dia_hecho"] = $fdata;
//	hora_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "hora_hecho";
	$fdata["GoodName"] = "hora_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","hora_hecho");
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

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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




	$tdatahechos_delictivos_VISTA["hora_hecho"] = $fdata;
//	rango_hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "rango_hora";
	$fdata["GoodName"] = "rango_hora";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","rango_hora");
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




	$tdatahechos_delictivos_VISTA["rango_hora"] = $fdata;
//	fecha_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "fecha_hecho";
	$fdata["GoodName"] = "fecha_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","fecha_hecho");
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




	$tdatahechos_delictivos_VISTA["fecha_hecho"] = $fdata;
//	mes_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "mes_hecho";
	$fdata["GoodName"] = "mes_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","mes_hecho");
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




	$tdatahechos_delictivos_VISTA["mes_hecho"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","a_o_hecho");
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




	$tdatahechos_delictivos_VISTA["aÑo_hecho"] = $fdata;
//	edad_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "edad_victima";
	$fdata["GoodName"] = "edad_victima";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","edad_victima");
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




	$tdatahechos_delictivos_VISTA["edad_victima"] = $fdata;
//	ran_eta_vic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "ran_eta_vic";
	$fdata["GoodName"] = "ran_eta_vic";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","ran_eta_vic");
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




	$tdatahechos_delictivos_VISTA["ran_eta_vic"] = $fdata;
//	s_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "s_victima";
	$fdata["GoodName"] = "s_victima";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","s_victima");
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




	$tdatahechos_delictivos_VISTA["s_victima"] = $fdata;
//	oc_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "oc_victima";
	$fdata["GoodName"] = "oc_victima";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","oc_victima");
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




	$tdatahechos_delictivos_VISTA["oc_victima"] = $fdata;
//	relacion_vi_agre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "relacion_vi_agre";
	$fdata["GoodName"] = "relacion_vi_agre";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","relacion_vi_agre");
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




	$tdatahechos_delictivos_VISTA["relacion_vi_agre"] = $fdata;
//	edad_agresor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "edad_agresor";
	$fdata["GoodName"] = "edad_agresor";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","edad_agresor");
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




	$tdatahechos_delictivos_VISTA["edad_agresor"] = $fdata;
//	sexo_agresor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "sexo_agresor";
	$fdata["GoodName"] = "sexo_agresor";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","sexo_agresor");
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




	$tdatahechos_delictivos_VISTA["sexo_agresor"] = $fdata;
//	ocupa_agresor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "ocupa_agresor";
	$fdata["GoodName"] = "ocupa_agresor";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","ocupa_agresor");
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




	$tdatahechos_delictivos_VISTA["ocupa_agresor"] = $fdata;
//	movil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "movil";
	$fdata["GoodName"] = "movil";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","movil");
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




	$tdatahechos_delictivos_VISTA["movil"] = $fdata;
//	tipo_arma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "tipo_arma";
	$fdata["GoodName"] = "tipo_arma";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","tipo_arma");
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




	$tdatahechos_delictivos_VISTA["tipo_arma"] = $fdata;
//	canton_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "canton_hecho";
	$fdata["GoodName"] = "canton_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","canton_hecho");
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




	$tdatahechos_delictivos_VISTA["canton_hecho"] = $fdata;
//	colonia_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "colonia_hecho";
	$fdata["GoodName"] = "colonia_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","colonia_hecho");
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




	$tdatahechos_delictivos_VISTA["colonia_hecho"] = $fdata;
//	caserio_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "caserio_hecho";
	$fdata["GoodName"] = "caserio_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","caserio_hecho");
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




	$tdatahechos_delictivos_VISTA["caserio_hecho"] = $fdata;
//	calle_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "calle_hecho";
	$fdata["GoodName"] = "calle_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","calle_hecho");
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




	$tdatahechos_delictivos_VISTA["calle_hecho"] = $fdata;
//	avenida_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "avenida_hecho";
	$fdata["GoodName"] = "avenida_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","avenida_hecho");
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




	$tdatahechos_delictivos_VISTA["avenida_hecho"] = $fdata;
//	casa_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "casa_hecho";
	$fdata["GoodName"] = "casa_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","casa_hecho");
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




	$tdatahechos_delictivos_VISTA["casa_hecho"] = $fdata;
//	com_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "com_hecho";
	$fdata["GoodName"] = "com_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","com_hecho");
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




	$tdatahechos_delictivos_VISTA["com_hecho"] = $fdata;
//	barrio_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "barrio_hecho";
	$fdata["GoodName"] = "barrio_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","barrio_hecho");
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




	$tdatahechos_delictivos_VISTA["barrio_hecho"] = $fdata;
//	comp_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "comp_hecho";
	$fdata["GoodName"] = "comp_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","comp_hecho");
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




	$tdatahechos_delictivos_VISTA["comp_hecho"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","sector_ppd");
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




	$tdatahechos_delictivos_VISTA["sector_ppd"] = $fdata;
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","tipo");
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




	$tdatahechos_delictivos_VISTA["tipo"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","nombre");
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




	$tdatahechos_delictivos_VISTA["nombre"] = $fdata;
//	x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "x";
	$fdata["GoodName"] = "x";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_VISTA","x");
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




	$tdatahechos_delictivos_VISTA["x"] = $fdata;


$tables_data["hechos_delictivos_VISTA"]=&$tdatahechos_delictivos_VISTA;
$field_labels["hechos_delictivos_VISTA"] = &$fieldLabelshechos_delictivos_VISTA;
$fieldToolTips["hechos_delictivos_VISTA"] = &$fieldToolTipshechos_delictivos_VISTA;
$placeHolders["hechos_delictivos_VISTA"] = &$placeHoldershechos_delictivos_VISTA;
$page_titles["hechos_delictivos_VISTA"] = &$pageTitleshechos_delictivos_VISTA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hechos_delictivos_VISTA"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hechos_delictivos_VISTA"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hechos_delictivos_VISTA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "numero,  id,  numero2,  lugaranalisis,  area,  delito,  codigo_muni,  depart_he,  muni_he,  dire_hecho,  lugar_esp,  forma_cono,  delito_espe,  dia_hecho,  hora_hecho,  rango_hora,  fecha_hecho,  mes_hecho,  `aÑo_hecho`,  edad_victima,  ran_eta_vic,  s_victima,  oc_victima,  relacion_vi_agre,  edad_agresor,  sexo_agresor,  ocupa_agresor,  movil,  tipo_arma,  canton_hecho,  colonia_hecho,  caserio_hecho,  calle_hecho,  avenida_hecho,  casa_hecho,  com_hecho,  barrio_hecho,  comp_hecho,  sector_ppd,  tipo,  nombre,  x";
$proto0["m_strFrom"] = "FROM hechos_delictivos1";
$proto0["m_strWhere"] = "(muni_he LIKE 'ARMENIA') AND (sector_ppd =null)";
$proto0["m_strOrderBy"] = "ORDER BY sector_ppd DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(muni_he LIKE 'ARMENIA') AND (sector_ppd =null)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(muni_he LIKE 'ARMENIA') AND (sector_ppd =null)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "muni_he LIKE 'ARMENIA'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "LIKE 'ARMENIA'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "sector_ppd =null";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=null";
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
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "numero",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto10["m_sql"] = "numero";
$proto10["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto12["m_sql"] = "id";
$proto12["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "numero2",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto14["m_sql"] = "numero2";
$proto14["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "lugaranalisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto16["m_sql"] = "lugaranalisis";
$proto16["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto18["m_sql"] = "area";
$proto18["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto20["m_sql"] = "delito";
$proto20["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo_muni",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto22["m_sql"] = "codigo_muni";
$proto22["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto24["m_sql"] = "depart_he";
$proto24["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto26["m_sql"] = "muni_he";
$proto26["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "dire_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto28["m_sql"] = "dire_hecho";
$proto28["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "lugar_esp",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto30["m_sql"] = "lugar_esp";
$proto30["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "forma_cono",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto32["m_sql"] = "forma_cono";
$proto32["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "delito_espe",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto34["m_sql"] = "delito_espe";
$proto34["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto36["m_sql"] = "dia_hecho";
$proto36["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto38["m_sql"] = "hora_hecho";
$proto38["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "rango_hora",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto40["m_sql"] = "rango_hora";
$proto40["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto42["m_sql"] = "fecha_hecho";
$proto42["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "mes_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto44["m_sql"] = "mes_hecho";
$proto44["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto46["m_sql"] = "`aÑo_hecho`";
$proto46["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "edad_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto48["m_sql"] = "edad_victima";
$proto48["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "ran_eta_vic",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto50["m_sql"] = "ran_eta_vic";
$proto50["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto52["m_sql"] = "s_victima";
$proto52["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "oc_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto54["m_sql"] = "oc_victima";
$proto54["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "relacion_vi_agre",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto56["m_sql"] = "relacion_vi_agre";
$proto56["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "edad_agresor",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto58["m_sql"] = "edad_agresor";
$proto58["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo_agresor",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto60["m_sql"] = "sexo_agresor";
$proto60["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "ocupa_agresor",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto62["m_sql"] = "ocupa_agresor";
$proto62["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "movil",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto64["m_sql"] = "movil";
$proto64["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_arma",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto66["m_sql"] = "tipo_arma";
$proto66["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "canton_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto68["m_sql"] = "canton_hecho";
$proto68["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "colonia_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto70["m_sql"] = "colonia_hecho";
$proto70["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "caserio_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto72["m_sql"] = "caserio_hecho";
$proto72["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "calle_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto74["m_sql"] = "calle_hecho";
$proto74["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "avenida_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto76["m_sql"] = "avenida_hecho";
$proto76["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "casa_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto78["m_sql"] = "casa_hecho";
$proto78["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "com_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto80["m_sql"] = "com_hecho";
$proto80["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "barrio_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto82["m_sql"] = "barrio_hecho";
$proto82["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "comp_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto84["m_sql"] = "comp_hecho";
$proto84["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto86["m_sql"] = "sector_ppd";
$proto86["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto88["m_sql"] = "tipo";
$proto88["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto90["m_sql"] = "nombre";
$proto90["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "x",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto92["m_sql"] = "x";
$proto92["m_srcTableName"] = "hechos_delictivos_VISTA";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto94=array();
$proto94["m_link"] = "SQLL_MAIN";
			$proto95=array();
$proto95["m_strName"] = "hechos_delictivos1";
$proto95["m_srcTableName"] = "hechos_delictivos_VISTA";
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
$proto94["m_srcTableName"] = "hechos_delictivos_VISTA";
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
												$proto98=array();
						$obj = new SQLField(array(
	"m_strName" => "numero",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto98["m_column"]=$obj;
$obj = new SQLGroupByItem($proto98);

$proto0["m_groupby"][]=$obj;
												$proto100=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto100["m_column"]=$obj;
$obj = new SQLGroupByItem($proto100);

$proto0["m_groupby"][]=$obj;
												$proto102=array();
						$obj = new SQLField(array(
	"m_strName" => "numero2",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto102["m_column"]=$obj;
$obj = new SQLGroupByItem($proto102);

$proto0["m_groupby"][]=$obj;
												$proto104=array();
						$obj = new SQLField(array(
	"m_strName" => "lugaranalisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto104["m_column"]=$obj;
$obj = new SQLGroupByItem($proto104);

$proto0["m_groupby"][]=$obj;
												$proto106=array();
						$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto106["m_column"]=$obj;
$obj = new SQLGroupByItem($proto106);

$proto0["m_groupby"][]=$obj;
												$proto108=array();
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto108["m_column"]=$obj;
$obj = new SQLGroupByItem($proto108);

$proto0["m_groupby"][]=$obj;
												$proto110=array();
						$obj = new SQLField(array(
	"m_strName" => "codigo_muni",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto110["m_column"]=$obj;
$obj = new SQLGroupByItem($proto110);

$proto0["m_groupby"][]=$obj;
												$proto112=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto112["m_column"]=$obj;
$obj = new SQLGroupByItem($proto112);

$proto0["m_groupby"][]=$obj;
												$proto114=array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto114["m_column"]=$obj;
$obj = new SQLGroupByItem($proto114);

$proto0["m_groupby"][]=$obj;
												$proto116=array();
						$obj = new SQLField(array(
	"m_strName" => "dire_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto116["m_column"]=$obj;
$obj = new SQLGroupByItem($proto116);

$proto0["m_groupby"][]=$obj;
												$proto118=array();
						$obj = new SQLField(array(
	"m_strName" => "lugar_esp",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto118["m_column"]=$obj;
$obj = new SQLGroupByItem($proto118);

$proto0["m_groupby"][]=$obj;
												$proto120=array();
						$obj = new SQLField(array(
	"m_strName" => "forma_cono",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto120["m_column"]=$obj;
$obj = new SQLGroupByItem($proto120);

$proto0["m_groupby"][]=$obj;
												$proto122=array();
						$obj = new SQLField(array(
	"m_strName" => "delito_espe",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto122["m_column"]=$obj;
$obj = new SQLGroupByItem($proto122);

$proto0["m_groupby"][]=$obj;
												$proto124=array();
						$obj = new SQLField(array(
	"m_strName" => "dia_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto124["m_column"]=$obj;
$obj = new SQLGroupByItem($proto124);

$proto0["m_groupby"][]=$obj;
												$proto126=array();
						$obj = new SQLField(array(
	"m_strName" => "hora_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto126["m_column"]=$obj;
$obj = new SQLGroupByItem($proto126);

$proto0["m_groupby"][]=$obj;
												$proto128=array();
						$obj = new SQLField(array(
	"m_strName" => "rango_hora",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto128["m_column"]=$obj;
$obj = new SQLGroupByItem($proto128);

$proto0["m_groupby"][]=$obj;
												$proto130=array();
						$obj = new SQLField(array(
	"m_strName" => "fecha_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto130["m_column"]=$obj;
$obj = new SQLGroupByItem($proto130);

$proto0["m_groupby"][]=$obj;
												$proto132=array();
						$obj = new SQLField(array(
	"m_strName" => "mes_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto132["m_column"]=$obj;
$obj = new SQLGroupByItem($proto132);

$proto0["m_groupby"][]=$obj;
												$proto134=array();
						$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto134["m_column"]=$obj;
$obj = new SQLGroupByItem($proto134);

$proto0["m_groupby"][]=$obj;
												$proto136=array();
						$obj = new SQLField(array(
	"m_strName" => "edad_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto136["m_column"]=$obj;
$obj = new SQLGroupByItem($proto136);

$proto0["m_groupby"][]=$obj;
												$proto138=array();
						$obj = new SQLField(array(
	"m_strName" => "ran_eta_vic",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto138["m_column"]=$obj;
$obj = new SQLGroupByItem($proto138);

$proto0["m_groupby"][]=$obj;
												$proto140=array();
						$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto140["m_column"]=$obj;
$obj = new SQLGroupByItem($proto140);

$proto0["m_groupby"][]=$obj;
												$proto142=array();
						$obj = new SQLField(array(
	"m_strName" => "oc_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto142["m_column"]=$obj;
$obj = new SQLGroupByItem($proto142);

$proto0["m_groupby"][]=$obj;
												$proto144=array();
						$obj = new SQLField(array(
	"m_strName" => "relacion_vi_agre",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto144["m_column"]=$obj;
$obj = new SQLGroupByItem($proto144);

$proto0["m_groupby"][]=$obj;
												$proto146=array();
						$obj = new SQLField(array(
	"m_strName" => "edad_agresor",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto146["m_column"]=$obj;
$obj = new SQLGroupByItem($proto146);

$proto0["m_groupby"][]=$obj;
												$proto148=array();
						$obj = new SQLField(array(
	"m_strName" => "sexo_agresor",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto148["m_column"]=$obj;
$obj = new SQLGroupByItem($proto148);

$proto0["m_groupby"][]=$obj;
												$proto150=array();
						$obj = new SQLField(array(
	"m_strName" => "ocupa_agresor",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto150["m_column"]=$obj;
$obj = new SQLGroupByItem($proto150);

$proto0["m_groupby"][]=$obj;
												$proto152=array();
						$obj = new SQLField(array(
	"m_strName" => "movil",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto152["m_column"]=$obj;
$obj = new SQLGroupByItem($proto152);

$proto0["m_groupby"][]=$obj;
												$proto154=array();
						$obj = new SQLField(array(
	"m_strName" => "tipo_arma",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto154["m_column"]=$obj;
$obj = new SQLGroupByItem($proto154);

$proto0["m_groupby"][]=$obj;
												$proto156=array();
						$obj = new SQLField(array(
	"m_strName" => "canton_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto156["m_column"]=$obj;
$obj = new SQLGroupByItem($proto156);

$proto0["m_groupby"][]=$obj;
												$proto158=array();
						$obj = new SQLField(array(
	"m_strName" => "colonia_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto158["m_column"]=$obj;
$obj = new SQLGroupByItem($proto158);

$proto0["m_groupby"][]=$obj;
												$proto160=array();
						$obj = new SQLField(array(
	"m_strName" => "caserio_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto160["m_column"]=$obj;
$obj = new SQLGroupByItem($proto160);

$proto0["m_groupby"][]=$obj;
												$proto162=array();
						$obj = new SQLField(array(
	"m_strName" => "calle_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto162["m_column"]=$obj;
$obj = new SQLGroupByItem($proto162);

$proto0["m_groupby"][]=$obj;
												$proto164=array();
						$obj = new SQLField(array(
	"m_strName" => "avenida_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto164["m_column"]=$obj;
$obj = new SQLGroupByItem($proto164);

$proto0["m_groupby"][]=$obj;
												$proto166=array();
						$obj = new SQLField(array(
	"m_strName" => "casa_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto166["m_column"]=$obj;
$obj = new SQLGroupByItem($proto166);

$proto0["m_groupby"][]=$obj;
												$proto168=array();
						$obj = new SQLField(array(
	"m_strName" => "com_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto168["m_column"]=$obj;
$obj = new SQLGroupByItem($proto168);

$proto0["m_groupby"][]=$obj;
												$proto170=array();
						$obj = new SQLField(array(
	"m_strName" => "barrio_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto170["m_column"]=$obj;
$obj = new SQLGroupByItem($proto170);

$proto0["m_groupby"][]=$obj;
												$proto172=array();
						$obj = new SQLField(array(
	"m_strName" => "comp_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto172["m_column"]=$obj;
$obj = new SQLGroupByItem($proto172);

$proto0["m_groupby"][]=$obj;
												$proto174=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto174["m_column"]=$obj;
$obj = new SQLGroupByItem($proto174);

$proto0["m_groupby"][]=$obj;
												$proto176=array();
						$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto176["m_column"]=$obj;
$obj = new SQLGroupByItem($proto176);

$proto0["m_groupby"][]=$obj;
												$proto178=array();
						$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto178["m_column"]=$obj;
$obj = new SQLGroupByItem($proto178);

$proto0["m_groupby"][]=$obj;
												$proto180=array();
						$obj = new SQLField(array(
	"m_strName" => "x",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto180["m_column"]=$obj;
$obj = new SQLGroupByItem($proto180);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto182=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_VISTA"
));

$proto182["m_column"]=$obj;
$proto182["m_bAsc"] = 0;
$proto182["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto182);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="hechos_delictivos_VISTA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hechos_delictivos_VISTA = createSqlQuery_hechos_delictivos_VISTA();


	
		;

																																										

$tdatahechos_delictivos_VISTA[".sqlquery"] = $queryData_hechos_delictivos_VISTA;

$tableEvents["hechos_delictivos_VISTA"] = new eventsBase;
$tdatahechos_delictivos_VISTA[".hasEvents"] = false;

?>