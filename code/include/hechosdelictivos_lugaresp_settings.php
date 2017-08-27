<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahechosdelictivos_lugaresp = array();
	$tdatahechosdelictivos_lugaresp[".truncateText"] = true;
	$tdatahechosdelictivos_lugaresp[".NumberOfChars"] = 80;
	$tdatahechosdelictivos_lugaresp[".ShortName"] = "hechosdelictivos_lugaresp";
	$tdatahechosdelictivos_lugaresp[".OwnerID"] = "";
	$tdatahechosdelictivos_lugaresp[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelshechosdelictivos_lugaresp = array();
$fieldToolTipshechosdelictivos_lugaresp = array();
$pageTitleshechosdelictivos_lugaresp = array();
$placeHoldershechosdelictivos_lugaresp = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshechosdelictivos_lugaresp["Spanish"] = array();
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"] = array();
	$placeHoldershechosdelictivos_lugaresp["Spanish"] = array();
	$pageTitleshechosdelictivos_lugaresp["Spanish"] = array();
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["id1"] = "Id1";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["id1"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["id1"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["correlativo"] = "Correlativo";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["correlativo"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["correlativo"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["numero"] = "Numero";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["numero"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["numero"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["id"] = "Id";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["id"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["id"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["codigo_muni"] = "Codigo Muni";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["codigo_muni"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["codigo_muni"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["numero2"] = "Numero2";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["numero2"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["numero2"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["depart_he"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["depart_he"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["muni_he"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["muni_he"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["dire_hecho"] = "Dire Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["dire_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["dire_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["area"] = "Area";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["area"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["area"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["forma_cono"] = "Forma Cono";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["forma_cono"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["forma_cono"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["delito"] = "Delito";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["delito"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["delito"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["delito_espe"] = "Delito Espe";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["delito_espe"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["delito_espe"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["dia_hecho"] = "Dia Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["dia_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["dia_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["hora_hecho"] = "Hora Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["hora_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["hora_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["rango_hora"] = "Rango Hora";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["rango_hora"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["rango_hora"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["fecha_hecho"] = "Fecha Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["fecha_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["fecha_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["a_o_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["a_o_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["edad_victima"] = "Edad Victima";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["edad_victima"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["edad_victima"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["ran_eta_vic"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["ran_eta_vic"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["s_victima"] = "S Victima";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["s_victima"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["s_victima"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["oc_victima"] = "Oc Victima";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["oc_victima"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["oc_victima"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["relacion_vi_agre"] = "Relacion Vi Agre";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["relacion_vi_agre"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["relacion_vi_agre"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["edad_agresor"] = "Edad Agresor";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["edad_agresor"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["edad_agresor"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["sexo__agresor"] = "Sexo  Agresor";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["sexo__agresor"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["sexo__agresor"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["ocupa_agresor"] = "Ocupa Agresor";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["ocupa_agresor"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["ocupa_agresor"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["movil"] = "Movil";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["movil"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["movil"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["tipo_arma"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["tipo_arma"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["canton_hecho"] = "Canton Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["canton_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["canton_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["colonia_hecho"] = "Colonia Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["colonia_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["colonia_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["caserio_hecho"] = "Caserio Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["caserio_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["caserio_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["calle_hecho"] = "Calle Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["calle_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["calle_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["avenida_hecho"] = "Avenida Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["avenida_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["avenida_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["casa_hecho"] = "Casa Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["casa_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["casa_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["comu_hecho"] = "Comu Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["comu_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["comu_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["barrio_hecho"] = "Barrio Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["barrio_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["barrio_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["comp_hecho"] = "Comp Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["comp_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["comp_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["sector_ppd"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["sector_ppd"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["tipo"] = "Tipo";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["tipo"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["tipo"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["nombre"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["nombre"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["x"] = "X";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["x"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["x"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["y"] = "Y";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["y"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["y"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["lugar_esp"] = "Lugar Esp";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["lugar_esp"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["lugar_esp"] = "";
	$fieldLabelshechosdelictivos_lugaresp["Spanish"]["lugaranalisis"] = "Lugaranalisis";
	$fieldToolTipshechosdelictivos_lugaresp["Spanish"]["lugaranalisis"] = "";
	$placeHoldershechosdelictivos_lugaresp["Spanish"]["lugaranalisis"] = "";
	if (count($fieldToolTipshechosdelictivos_lugaresp["Spanish"]))
		$tdatahechosdelictivos_lugaresp[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshechosdelictivos_lugaresp["English"] = array();
	$fieldToolTipshechosdelictivos_lugaresp["English"] = array();
	$placeHoldershechosdelictivos_lugaresp["English"] = array();
	$pageTitleshechosdelictivos_lugaresp["English"] = array();
	$fieldLabelshechosdelictivos_lugaresp["English"]["id1"] = "Id1";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["id1"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["id1"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["correlativo"] = "Correlativo";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["correlativo"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["correlativo"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["numero"] = "Numero";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["numero"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["numero"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["id"] = "Id";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["id"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["id"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["codigo_muni"] = "Codigo Muni";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["codigo_muni"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["codigo_muni"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["numero2"] = "Numero2";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["numero2"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["numero2"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["depart_he"] = "Depart He";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["depart_he"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["depart_he"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["muni_he"] = "Muni He";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["muni_he"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["muni_he"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["dire_hecho"] = "Dire Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["dire_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["dire_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["area"] = "Area";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["area"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["area"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["forma_cono"] = "Forma Cono";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["forma_cono"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["forma_cono"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["delito"] = "Delito";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["delito"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["delito"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["delito_espe"] = "Delito Espe";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["delito_espe"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["delito_espe"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["dia_hecho"] = "Dia Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["dia_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["dia_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["hora_hecho"] = "Hora Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["hora_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["hora_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["rango_hora"] = "Rango Hora";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["rango_hora"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["rango_hora"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["fecha_hecho"] = "Fecha Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["fecha_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["fecha_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["a_o_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["a_o_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["edad_victima"] = "Edad Victima";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["edad_victima"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["edad_victima"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["ran_eta_vic"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["ran_eta_vic"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["s_victima"] = "S Victima";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["s_victima"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["s_victima"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["oc_victima"] = "Oc Victima";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["oc_victima"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["oc_victima"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["relacion_vi_agre"] = "Relacion Vi Agre";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["relacion_vi_agre"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["relacion_vi_agre"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["edad_agresor"] = "Edad Agresor";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["edad_agresor"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["edad_agresor"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["sexo__agresor"] = "Sexo  Agresor";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["sexo__agresor"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["sexo__agresor"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["ocupa_agresor"] = "Ocupa Agresor";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["ocupa_agresor"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["ocupa_agresor"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["movil"] = "Movil";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["movil"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["movil"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["tipo_arma"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["tipo_arma"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["canton_hecho"] = "Canton Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["canton_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["canton_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["colonia_hecho"] = "Colonia Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["colonia_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["colonia_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["caserio_hecho"] = "Caserio Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["caserio_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["caserio_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["calle_hecho"] = "Calle Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["calle_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["calle_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["avenida_hecho"] = "Avenida Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["avenida_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["avenida_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["casa_hecho"] = "Casa Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["casa_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["casa_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["comu_hecho"] = "Comu Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["comu_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["comu_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["barrio_hecho"] = "Barrio Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["barrio_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["barrio_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["comp_hecho"] = "Comp Hecho";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["comp_hecho"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["comp_hecho"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["sector_ppd"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["sector_ppd"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["tipo"] = "Tipo";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["tipo"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["tipo"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["nombre"] = "Nombre";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["nombre"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["nombre"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["x"] = "X";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["x"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["x"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["y"] = "Y";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["y"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["y"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["lugar_esp"] = "Lugar Esp";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["lugar_esp"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["lugar_esp"] = "";
	$fieldLabelshechosdelictivos_lugaresp["English"]["lugaranalisis"] = "Lugaranalisis";
	$fieldToolTipshechosdelictivos_lugaresp["English"]["lugaranalisis"] = "";
	$placeHoldershechosdelictivos_lugaresp["English"]["lugaranalisis"] = "";
	if (count($fieldToolTipshechosdelictivos_lugaresp["English"]))
		$tdatahechosdelictivos_lugaresp[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshechosdelictivos_lugaresp[""] = array();
	$fieldToolTipshechosdelictivos_lugaresp[""] = array();
	$placeHoldershechosdelictivos_lugaresp[""] = array();
	$pageTitleshechosdelictivos_lugaresp[""] = array();
	if (count($fieldToolTipshechosdelictivos_lugaresp[""]))
		$tdatahechosdelictivos_lugaresp[".isUseToolTips"] = true;
}





$tdatahechosdelictivos_lugaresp[".shortTableName"] = "hechosdelictivos_lugaresp";
$tdatahechosdelictivos_lugaresp[".nSecOptions"] = 0;
$tdatahechosdelictivos_lugaresp[".recsPerRowPrint"] = 1;
$tdatahechosdelictivos_lugaresp[".mainTableOwnerID"] = "";
$tdatahechosdelictivos_lugaresp[".moveNext"] = 1;
$tdatahechosdelictivos_lugaresp[".entityType"] = 1;

$tdatahechosdelictivos_lugaresp[".strOriginalTableName"] = "hechosdelictivos";

	



$tdatahechosdelictivos_lugaresp[".showAddInPopup"] = false;

$tdatahechosdelictivos_lugaresp[".showEditInPopup"] = false;

$tdatahechosdelictivos_lugaresp[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahechosdelictivos_lugaresp[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahechosdelictivos_lugaresp[".fieldsForRegister"] = array();

	$tdatahechosdelictivos_lugaresp[".listAjax"] = true;

	$tdatahechosdelictivos_lugaresp[".audit"] = false;

	$tdatahechosdelictivos_lugaresp[".locking"] = false;


$tdatahechosdelictivos_lugaresp[".add"] = true;
$tdatahechosdelictivos_lugaresp[".afterAddAction"] = 1;
$tdatahechosdelictivos_lugaresp[".closePopupAfterAdd"] = 1;
$tdatahechosdelictivos_lugaresp[".afterAddActionDetTable"] = "";

$tdatahechosdelictivos_lugaresp[".list"] = true;



$tdatahechosdelictivos_lugaresp[".reorderRecordsByHeader"] = true;
$tdatahechosdelictivos_lugaresp[".createSortByDropdown"] = true;
$tdatahechosdelictivos_lugaresp[".strSortControlSettingsJSON"] = "";



$tdatahechosdelictivos_lugaresp[".inlineAdd"] = true;

$tdatahechosdelictivos_lugaresp[".import"] = true;

$tdatahechosdelictivos_lugaresp[".exportTo"] = true;

$tdatahechosdelictivos_lugaresp[".printFriendly"] = true;


$tdatahechosdelictivos_lugaresp[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatahechosdelictivos_lugaresp[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatahechosdelictivos_lugaresp[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatahechosdelictivos_lugaresp[".searchSaving"] = false;
//

$tdatahechosdelictivos_lugaresp[".showSearchPanel"] = true;
		$tdatahechosdelictivos_lugaresp[".flexibleSearch"] = true;

$tdatahechosdelictivos_lugaresp[".isUseAjaxSuggest"] = true;

$tdatahechosdelictivos_lugaresp[".rowHighlite"] = true;





$tdatahechosdelictivos_lugaresp[".ajaxCodeSnippetAdded"] = false;

$tdatahechosdelictivos_lugaresp[".buttonsAdded"] = false;

$tdatahechosdelictivos_lugaresp[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahechosdelictivos_lugaresp[".isUseTimeForSearch"] = false;





$tdatahechosdelictivos_lugaresp[".allSearchFields"] = array();
$tdatahechosdelictivos_lugaresp[".filterFields"] = array();
$tdatahechosdelictivos_lugaresp[".requiredSearchFields"] = array();

$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "id1";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "correlativo";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "numero";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "id";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "codigo_muni";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "numero2";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "depart_he";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "muni_he";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "dire_hecho";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "lugar_esp";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "lugaranalisis";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "area";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "forma_cono";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "delito";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "delito_espe";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "dia_hecho";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "hora_hecho";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "rango_hora";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "fecha_hecho";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "aÑo_hecho";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "edad_victima";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "ran_eta_vic";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "s_victima";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "oc_victima";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "relacion_vi_agre";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "edad_agresor";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "sexo__agresor";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "ocupa_agresor";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "movil";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "tipo_arma";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "canton_hecho";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "colonia_hecho";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "caserio_hecho";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "calle_hecho";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "avenida_hecho";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "casa_hecho";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "comu_hecho";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "barrio_hecho";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "comp_hecho";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "sector_ppd";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "tipo";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "nombre";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "x";
	$tdatahechosdelictivos_lugaresp[".allSearchFields"][] = "y";
	

$tdatahechosdelictivos_lugaresp[".googleLikeFields"] = array();
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "id1";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "correlativo";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "numero";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "id";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "codigo_muni";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "numero2";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "depart_he";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "muni_he";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "dire_hecho";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "lugar_esp";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "lugaranalisis";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "area";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "forma_cono";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "delito";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "delito_espe";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "dia_hecho";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "hora_hecho";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "rango_hora";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "fecha_hecho";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "aÑo_hecho";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "edad_victima";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "ran_eta_vic";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "s_victima";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "oc_victima";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "edad_agresor";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "sexo__agresor";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "ocupa_agresor";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "movil";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "tipo_arma";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "canton_hecho";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "colonia_hecho";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "caserio_hecho";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "calle_hecho";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "avenida_hecho";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "casa_hecho";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "comu_hecho";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "barrio_hecho";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "comp_hecho";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "sector_ppd";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "tipo";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "nombre";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "x";
$tdatahechosdelictivos_lugaresp[".googleLikeFields"][] = "y";


$tdatahechosdelictivos_lugaresp[".advSearchFields"] = array();
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "id1";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "correlativo";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "numero";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "id";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "codigo_muni";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "numero2";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "depart_he";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "muni_he";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "dire_hecho";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "lugar_esp";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "lugaranalisis";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "area";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "forma_cono";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "delito";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "delito_espe";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "dia_hecho";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "hora_hecho";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "rango_hora";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "fecha_hecho";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "aÑo_hecho";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "edad_victima";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "ran_eta_vic";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "s_victima";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "oc_victima";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "edad_agresor";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "sexo__agresor";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "ocupa_agresor";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "movil";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "tipo_arma";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "canton_hecho";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "colonia_hecho";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "caserio_hecho";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "calle_hecho";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "avenida_hecho";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "casa_hecho";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "comu_hecho";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "barrio_hecho";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "comp_hecho";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "sector_ppd";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "tipo";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "nombre";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "x";
$tdatahechosdelictivos_lugaresp[".advSearchFields"][] = "y";

$tdatahechosdelictivos_lugaresp[".tableType"] = "list";

$tdatahechosdelictivos_lugaresp[".printerPageOrientation"] = 0;
$tdatahechosdelictivos_lugaresp[".nPrinterPageScale"] = 100;

$tdatahechosdelictivos_lugaresp[".nPrinterSplitRecords"] = 40;

$tdatahechosdelictivos_lugaresp[".nPrinterPDFSplitRecords"] = 40;



$tdatahechosdelictivos_lugaresp[".geocodingEnabled"] = false;





$tdatahechosdelictivos_lugaresp[".listGridLayout"] = 3;

$tdatahechosdelictivos_lugaresp[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatahechosdelictivos_lugaresp[".pageSize"] = 10;

$tdatahechosdelictivos_lugaresp[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahechosdelictivos_lugaresp[".strOrderBy"] = $tstrOrderBy;

$tdatahechosdelictivos_lugaresp[".orderindexes"] = array();

$tdatahechosdelictivos_lugaresp[".sqlHead"] = "SELECT id1,  	correlativo,  	numero,  	id,  	codigo_muni,  	numero2,  	depart_he,  	muni_he,  	dire_hecho,  	lugar_esp,  	lugaranalisis,  	area,  	forma_cono,  	delito,  	delito_espe,  	dia_hecho,  	hora_hecho,  	rango_hora,  	fecha_hecho,  	`aÑo_hecho`,  	edad_victima,  	ran_eta_vic,  	s_victima,  	oc_victima,  	relacion_vi_agre,  	edad_agresor,  	sexo__agresor,  	ocupa_agresor,  	movil,  	tipo_arma,  	canton_hecho,  	colonia_hecho,  	caserio_hecho,  	calle_hecho,  	avenida_hecho,  	casa_hecho,  	comu_hecho,  	barrio_hecho,  	comp_hecho,  	sector_ppd,  	tipo,  	nombre,  	x,  	y";
$tdatahechosdelictivos_lugaresp[".sqlFrom"] = "FROM hechosdelictivos";
$tdatahechosdelictivos_lugaresp[".sqlWhereExpr"] = "";
$tdatahechosdelictivos_lugaresp[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahechosdelictivos_lugaresp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahechosdelictivos_lugaresp[".arrGroupsPerPage"] = $arrGPP;

$tdatahechosdelictivos_lugaresp[".highlightSearchResults"] = true;

$tableKeyshechosdelictivos_lugaresp = array();
$tdatahechosdelictivos_lugaresp[".Keys"] = $tableKeyshechosdelictivos_lugaresp;

$tdatahechosdelictivos_lugaresp[".listFields"] = array();
$tdatahechosdelictivos_lugaresp[".listFields"][] = "id1";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "correlativo";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "numero";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "id";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "codigo_muni";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "numero2";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "depart_he";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "muni_he";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "dire_hecho";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "lugar_esp";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "lugaranalisis";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "area";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "forma_cono";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "delito";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "delito_espe";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "dia_hecho";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "hora_hecho";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "rango_hora";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "fecha_hecho";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "aÑo_hecho";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "edad_victima";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "ran_eta_vic";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "s_victima";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "oc_victima";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "edad_agresor";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "sexo__agresor";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "ocupa_agresor";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "movil";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "tipo_arma";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "canton_hecho";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "colonia_hecho";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "caserio_hecho";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "calle_hecho";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "avenida_hecho";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "casa_hecho";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "comu_hecho";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "barrio_hecho";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "comp_hecho";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "sector_ppd";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "tipo";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "nombre";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "x";
$tdatahechosdelictivos_lugaresp[".listFields"][] = "y";

$tdatahechosdelictivos_lugaresp[".hideMobileList"] = array();


$tdatahechosdelictivos_lugaresp[".viewFields"] = array();

$tdatahechosdelictivos_lugaresp[".addFields"] = array();
$tdatahechosdelictivos_lugaresp[".addFields"][] = "id1";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "correlativo";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "numero";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "id";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "codigo_muni";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "numero2";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "depart_he";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "muni_he";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "dire_hecho";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "lugar_esp";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "lugaranalisis";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "area";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "forma_cono";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "delito";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "delito_espe";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "dia_hecho";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "hora_hecho";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "rango_hora";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "fecha_hecho";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "aÑo_hecho";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "edad_victima";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "ran_eta_vic";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "s_victima";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "oc_victima";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "edad_agresor";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "sexo__agresor";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "ocupa_agresor";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "movil";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "tipo_arma";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "canton_hecho";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "colonia_hecho";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "caserio_hecho";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "calle_hecho";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "avenida_hecho";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "casa_hecho";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "comu_hecho";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "barrio_hecho";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "comp_hecho";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "sector_ppd";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "tipo";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "nombre";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "x";
$tdatahechosdelictivos_lugaresp[".addFields"][] = "y";

$tdatahechosdelictivos_lugaresp[".masterListFields"] = array();
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "id1";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "correlativo";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "numero";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "id";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "codigo_muni";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "numero2";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "depart_he";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "muni_he";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "dire_hecho";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "lugar_esp";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "lugaranalisis";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "area";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "forma_cono";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "delito";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "delito_espe";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "dia_hecho";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "hora_hecho";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "rango_hora";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "fecha_hecho";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "aÑo_hecho";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "edad_victima";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "ran_eta_vic";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "s_victima";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "oc_victima";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "edad_agresor";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "sexo__agresor";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "ocupa_agresor";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "movil";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "tipo_arma";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "canton_hecho";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "colonia_hecho";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "caserio_hecho";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "calle_hecho";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "avenida_hecho";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "casa_hecho";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "comu_hecho";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "barrio_hecho";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "comp_hecho";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "sector_ppd";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "tipo";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "nombre";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "x";
$tdatahechosdelictivos_lugaresp[".masterListFields"][] = "y";

$tdatahechosdelictivos_lugaresp[".inlineAddFields"] = array();
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "id1";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "correlativo";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "numero";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "id";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "codigo_muni";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "numero2";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "depart_he";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "muni_he";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "dire_hecho";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "lugar_esp";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "lugaranalisis";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "area";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "forma_cono";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "delito";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "delito_espe";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "dia_hecho";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "hora_hecho";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "rango_hora";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "fecha_hecho";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "aÑo_hecho";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "edad_victima";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "ran_eta_vic";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "s_victima";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "oc_victima";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "edad_agresor";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "sexo__agresor";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "ocupa_agresor";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "movil";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "tipo_arma";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "canton_hecho";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "colonia_hecho";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "caserio_hecho";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "calle_hecho";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "avenida_hecho";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "casa_hecho";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "comu_hecho";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "barrio_hecho";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "comp_hecho";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "sector_ppd";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "tipo";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "nombre";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "x";
$tdatahechosdelictivos_lugaresp[".inlineAddFields"][] = "y";

$tdatahechosdelictivos_lugaresp[".editFields"] = array();

$tdatahechosdelictivos_lugaresp[".inlineEditFields"] = array();

$tdatahechosdelictivos_lugaresp[".updateSelectedFields"] = array();


$tdatahechosdelictivos_lugaresp[".exportFields"] = array();
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "id1";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "correlativo";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "numero";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "id";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "codigo_muni";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "numero2";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "depart_he";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "muni_he";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "dire_hecho";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "lugar_esp";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "lugaranalisis";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "area";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "forma_cono";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "delito";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "delito_espe";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "dia_hecho";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "hora_hecho";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "rango_hora";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "fecha_hecho";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "aÑo_hecho";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "edad_victima";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "ran_eta_vic";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "s_victima";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "oc_victima";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "edad_agresor";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "sexo__agresor";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "ocupa_agresor";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "movil";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "tipo_arma";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "canton_hecho";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "colonia_hecho";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "caserio_hecho";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "calle_hecho";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "avenida_hecho";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "casa_hecho";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "comu_hecho";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "barrio_hecho";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "comp_hecho";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "sector_ppd";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "tipo";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "nombre";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "x";
$tdatahechosdelictivos_lugaresp[".exportFields"][] = "y";

$tdatahechosdelictivos_lugaresp[".importFields"] = array();
$tdatahechosdelictivos_lugaresp[".importFields"][] = "id1";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "correlativo";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "numero";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "id";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "codigo_muni";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "numero2";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "depart_he";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "muni_he";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "dire_hecho";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "lugar_esp";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "lugaranalisis";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "area";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "forma_cono";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "delito";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "delito_espe";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "dia_hecho";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "hora_hecho";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "rango_hora";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "fecha_hecho";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "aÑo_hecho";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "edad_victima";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "ran_eta_vic";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "s_victima";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "oc_victima";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "edad_agresor";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "sexo__agresor";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "ocupa_agresor";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "movil";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "tipo_arma";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "canton_hecho";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "colonia_hecho";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "caserio_hecho";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "calle_hecho";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "avenida_hecho";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "casa_hecho";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "comu_hecho";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "barrio_hecho";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "comp_hecho";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "sector_ppd";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "tipo";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "nombre";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "x";
$tdatahechosdelictivos_lugaresp[".importFields"][] = "y";

$tdatahechosdelictivos_lugaresp[".printFields"] = array();
$tdatahechosdelictivos_lugaresp[".printFields"][] = "id1";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "correlativo";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "numero";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "id";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "codigo_muni";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "numero2";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "depart_he";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "muni_he";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "dire_hecho";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "lugar_esp";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "lugaranalisis";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "area";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "forma_cono";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "delito";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "delito_espe";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "dia_hecho";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "hora_hecho";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "rango_hora";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "fecha_hecho";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "aÑo_hecho";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "edad_victima";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "ran_eta_vic";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "s_victima";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "oc_victima";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "relacion_vi_agre";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "edad_agresor";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "sexo__agresor";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "ocupa_agresor";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "movil";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "tipo_arma";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "canton_hecho";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "colonia_hecho";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "caserio_hecho";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "calle_hecho";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "avenida_hecho";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "casa_hecho";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "comu_hecho";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "barrio_hecho";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "comp_hecho";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "sector_ppd";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "tipo";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "nombre";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "x";
$tdatahechosdelictivos_lugaresp[".printFields"][] = "y";

//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id1";
	$fdata["GoodName"] = "id1";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["id1"] = $fdata;
//	correlativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "correlativo";
	$fdata["GoodName"] = "correlativo";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","correlativo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["correlativo"] = $fdata;
//	numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "numero";
	$fdata["GoodName"] = "numero";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","numero");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["numero"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["id"] = $fdata;
//	codigo_muni
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "codigo_muni";
	$fdata["GoodName"] = "codigo_muni";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","codigo_muni");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["codigo_muni"] = $fdata;
//	numero2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "numero2";
	$fdata["GoodName"] = "numero2";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","numero2");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["numero2"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","depart_he");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["depart_he"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","muni_he");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["muni_he"] = $fdata;
//	dire_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dire_hecho";
	$fdata["GoodName"] = "dire_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","dire_hecho");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["dire_hecho"] = $fdata;
//	lugar_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "lugar_esp";
	$fdata["GoodName"] = "lugar_esp";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","lugar_esp");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["lugar_esp"] = $fdata;
//	lugaranalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "lugaranalisis";
	$fdata["GoodName"] = "lugaranalisis";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","lugaranalisis");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["lugaranalisis"] = $fdata;
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","area");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["area"] = $fdata;
//	forma_cono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "forma_cono";
	$fdata["GoodName"] = "forma_cono";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","forma_cono");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["forma_cono"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","delito");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["delito"] = $fdata;
//	delito_espe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "delito_espe";
	$fdata["GoodName"] = "delito_espe";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","delito_espe");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["delito_espe"] = $fdata;
//	dia_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "dia_hecho";
	$fdata["GoodName"] = "dia_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","dia_hecho");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["dia_hecho"] = $fdata;
//	hora_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "hora_hecho";
	$fdata["GoodName"] = "hora_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","hora_hecho");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["hora_hecho"] = $fdata;
//	rango_hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "rango_hora";
	$fdata["GoodName"] = "rango_hora";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","rango_hora");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["rango_hora"] = $fdata;
//	fecha_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "fecha_hecho";
	$fdata["GoodName"] = "fecha_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","fecha_hecho");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["fecha_hecho"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","a_o_hecho");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["aÑo_hecho"] = $fdata;
//	edad_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "edad_victima";
	$fdata["GoodName"] = "edad_victima";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","edad_victima");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["edad_victima"] = $fdata;
//	ran_eta_vic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "ran_eta_vic";
	$fdata["GoodName"] = "ran_eta_vic";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","ran_eta_vic");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["ran_eta_vic"] = $fdata;
//	s_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "s_victima";
	$fdata["GoodName"] = "s_victima";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","s_victima");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["s_victima"] = $fdata;
//	oc_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "oc_victima";
	$fdata["GoodName"] = "oc_victima";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","oc_victima");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["oc_victima"] = $fdata;
//	relacion_vi_agre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "relacion_vi_agre";
	$fdata["GoodName"] = "relacion_vi_agre";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","relacion_vi_agre");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["relacion_vi_agre"] = $fdata;
//	edad_agresor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "edad_agresor";
	$fdata["GoodName"] = "edad_agresor";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","edad_agresor");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["edad_agresor"] = $fdata;
//	sexo__agresor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "sexo__agresor";
	$fdata["GoodName"] = "sexo__agresor";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","sexo__agresor");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["sexo__agresor"] = $fdata;
//	ocupa_agresor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "ocupa_agresor";
	$fdata["GoodName"] = "ocupa_agresor";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","ocupa_agresor");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["ocupa_agresor"] = $fdata;
//	movil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "movil";
	$fdata["GoodName"] = "movil";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","movil");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["movil"] = $fdata;
//	tipo_arma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "tipo_arma";
	$fdata["GoodName"] = "tipo_arma";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","tipo_arma");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["tipo_arma"] = $fdata;
//	canton_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "canton_hecho";
	$fdata["GoodName"] = "canton_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","canton_hecho");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["canton_hecho"] = $fdata;
//	colonia_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "colonia_hecho";
	$fdata["GoodName"] = "colonia_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","colonia_hecho");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["colonia_hecho"] = $fdata;
//	caserio_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "caserio_hecho";
	$fdata["GoodName"] = "caserio_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","caserio_hecho");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["caserio_hecho"] = $fdata;
//	calle_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "calle_hecho";
	$fdata["GoodName"] = "calle_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","calle_hecho");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["calle_hecho"] = $fdata;
//	avenida_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "avenida_hecho";
	$fdata["GoodName"] = "avenida_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","avenida_hecho");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["avenida_hecho"] = $fdata;
//	casa_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "casa_hecho";
	$fdata["GoodName"] = "casa_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","casa_hecho");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["casa_hecho"] = $fdata;
//	comu_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "comu_hecho";
	$fdata["GoodName"] = "comu_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","comu_hecho");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["comu_hecho"] = $fdata;
//	barrio_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "barrio_hecho";
	$fdata["GoodName"] = "barrio_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","barrio_hecho");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["barrio_hecho"] = $fdata;
//	comp_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "comp_hecho";
	$fdata["GoodName"] = "comp_hecho";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","comp_hecho");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["comp_hecho"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","sector_ppd");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["sector_ppd"] = $fdata;
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","tipo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["tipo"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","nombre");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["nombre"] = $fdata;
//	x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "x";
	$fdata["GoodName"] = "x";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","x");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["x"] = $fdata;
//	y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "y";
	$fdata["GoodName"] = "y";
	$fdata["ownerTable"] = "hechosdelictivos";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos_lugaresp","y");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatahechosdelictivos_lugaresp["y"] = $fdata;


$tables_data["hechosdelictivos_lugaresp"]=&$tdatahechosdelictivos_lugaresp;
$field_labels["hechosdelictivos_lugaresp"] = &$fieldLabelshechosdelictivos_lugaresp;
$fieldToolTips["hechosdelictivos_lugaresp"] = &$fieldToolTipshechosdelictivos_lugaresp;
$placeHolders["hechosdelictivos_lugaresp"] = &$placeHoldershechosdelictivos_lugaresp;
$page_titles["hechosdelictivos_lugaresp"] = &$pageTitleshechosdelictivos_lugaresp;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hechosdelictivos_lugaresp"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hechosdelictivos_lugaresp"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hechosdelictivos_lugaresp()
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
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto6["m_sql"] = "id1";
$proto6["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "correlativo",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto8["m_sql"] = "correlativo";
$proto8["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "numero",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto10["m_sql"] = "numero";
$proto10["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto12["m_sql"] = "id";
$proto12["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo_muni",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto14["m_sql"] = "codigo_muni";
$proto14["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "numero2",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto16["m_sql"] = "numero2";
$proto16["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto18["m_sql"] = "depart_he";
$proto18["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto20["m_sql"] = "muni_he";
$proto20["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dire_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto22["m_sql"] = "dire_hecho";
$proto22["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "lugar_esp",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto24["m_sql"] = "lugar_esp";
$proto24["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "lugaranalisis",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto26["m_sql"] = "lugaranalisis";
$proto26["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto28["m_sql"] = "area";
$proto28["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "forma_cono",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto30["m_sql"] = "forma_cono";
$proto30["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto32["m_sql"] = "delito";
$proto32["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "delito_espe",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto34["m_sql"] = "delito_espe";
$proto34["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto36["m_sql"] = "dia_hecho";
$proto36["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto38["m_sql"] = "hora_hecho";
$proto38["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "rango_hora",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto40["m_sql"] = "rango_hora";
$proto40["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto42["m_sql"] = "fecha_hecho";
$proto42["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto44["m_sql"] = "`aÑo_hecho`";
$proto44["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "edad_victima",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto46["m_sql"] = "edad_victima";
$proto46["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "ran_eta_vic",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto48["m_sql"] = "ran_eta_vic";
$proto48["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto50["m_sql"] = "s_victima";
$proto50["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "oc_victima",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto52["m_sql"] = "oc_victima";
$proto52["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "relacion_vi_agre",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto54["m_sql"] = "relacion_vi_agre";
$proto54["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "edad_agresor",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto56["m_sql"] = "edad_agresor";
$proto56["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo__agresor",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto58["m_sql"] = "sexo__agresor";
$proto58["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "ocupa_agresor",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto60["m_sql"] = "ocupa_agresor";
$proto60["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "movil",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto62["m_sql"] = "movil";
$proto62["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_arma",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto64["m_sql"] = "tipo_arma";
$proto64["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "canton_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto66["m_sql"] = "canton_hecho";
$proto66["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "colonia_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto68["m_sql"] = "colonia_hecho";
$proto68["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "caserio_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto70["m_sql"] = "caserio_hecho";
$proto70["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "calle_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto72["m_sql"] = "calle_hecho";
$proto72["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "avenida_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto74["m_sql"] = "avenida_hecho";
$proto74["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "casa_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto76["m_sql"] = "casa_hecho";
$proto76["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "comu_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto78["m_sql"] = "comu_hecho";
$proto78["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "barrio_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto80["m_sql"] = "barrio_hecho";
$proto80["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "comp_hecho",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto82["m_sql"] = "comp_hecho";
$proto82["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto84["m_sql"] = "sector_ppd";
$proto84["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto86["m_sql"] = "tipo";
$proto86["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto88["m_sql"] = "nombre";
$proto88["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "x",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto90["m_sql"] = "x";
$proto90["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "y",
	"m_strTable" => "hechosdelictivos",
	"m_srcTableName" => "hechosdelictivos_lugaresp"
));

$proto92["m_sql"] = "y";
$proto92["m_srcTableName"] = "hechosdelictivos_lugaresp";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto94=array();
$proto94["m_link"] = "SQLL_MAIN";
			$proto95=array();
$proto95["m_strName"] = "hechosdelictivos";
$proto95["m_srcTableName"] = "hechosdelictivos_lugaresp";
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
$proto94["m_srcTableName"] = "hechosdelictivos_lugaresp";
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
$proto0["m_srcTableName"]="hechosdelictivos_lugaresp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hechosdelictivos_lugaresp = createSqlQuery_hechosdelictivos_lugaresp();


	
		;

																																												

$tdatahechosdelictivos_lugaresp[".sqlquery"] = $queryData_hechosdelictivos_lugaresp;

$tableEvents["hechosdelictivos_lugaresp"] = new eventsBase;
$tdatahechosdelictivos_lugaresp[".hasEvents"] = false;

?>