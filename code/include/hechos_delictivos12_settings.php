<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahechos_delictivos12 = array();
	$tdatahechos_delictivos12[".truncateText"] = true;
	$tdatahechos_delictivos12[".NumberOfChars"] = 80;
	$tdatahechos_delictivos12[".ShortName"] = "hechos_delictivos12";
	$tdatahechos_delictivos12[".OwnerID"] = "";
	$tdatahechos_delictivos12[".OriginalTable"] = "hechos_delictivos1";

//	field labels
$fieldLabelshechos_delictivos12 = array();
$fieldToolTipshechos_delictivos12 = array();
$pageTitleshechos_delictivos12 = array();
$placeHoldershechos_delictivos12 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshechos_delictivos12["Spanish"] = array();
	$fieldToolTipshechos_delictivos12["Spanish"] = array();
	$placeHoldershechos_delictivos12["Spanish"] = array();
	$pageTitleshechos_delictivos12["Spanish"] = array();
	$fieldLabelshechos_delictivos12["Spanish"]["id1"] = "Id1";
	$fieldToolTipshechos_delictivos12["Spanish"]["id1"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["id1"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["correlativo"] = "Correlativo";
	$fieldToolTipshechos_delictivos12["Spanish"]["correlativo"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["correlativo"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["numero"] = "Numero";
	$fieldToolTipshechos_delictivos12["Spanish"]["numero"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["numero"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["id"] = "Id";
	$fieldToolTipshechos_delictivos12["Spanish"]["id"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["id"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["numero2"] = "Numero2";
	$fieldToolTipshechos_delictivos12["Spanish"]["numero2"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["numero2"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["lugaranalisis"] = "Lugaranalisis";
	$fieldToolTipshechos_delictivos12["Spanish"]["lugaranalisis"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["lugaranalisis"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["area"] = "Area";
	$fieldToolTipshechos_delictivos12["Spanish"]["area"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["area"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["delito"] = "Delito";
	$fieldToolTipshechos_delictivos12["Spanish"]["delito"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["delito"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["hora_hecho"] = "Hora Hecho";
	$fieldToolTipshechos_delictivos12["Spanish"]["hora_hecho"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["hora_hecho"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["rango_hora"] = "Rango Hora";
	$fieldToolTipshechos_delictivos12["Spanish"]["rango_hora"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["rango_hora"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["movil"] = "Movil";
	$fieldToolTipshechos_delictivos12["Spanish"]["movil"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["movil"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["tipo"] = "Tipo";
	$fieldToolTipshechos_delictivos12["Spanish"]["tipo"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["tipo"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipshechos_delictivos12["Spanish"]["nombre"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["nombre"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["x"] = "X";
	$fieldToolTipshechos_delictivos12["Spanish"]["x"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["x"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["y"] = "Y";
	$fieldToolTipshechos_delictivos12["Spanish"]["y"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["y"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["correlativo1"] = "Correlativo1";
	$fieldToolTipshechos_delictivos12["Spanish"]["correlativo1"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["correlativo1"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["codigo_muni"] = "Codigo Muni";
	$fieldToolTipshechos_delictivos12["Spanish"]["codigo_muni"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["codigo_muni"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipshechos_delictivos12["Spanish"]["depart_he"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["depart_he"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipshechos_delictivos12["Spanish"]["muni_he"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["muni_he"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["dire_hecho"] = "Dire Hecho";
	$fieldToolTipshechos_delictivos12["Spanish"]["dire_hecho"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["dire_hecho"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["lugar_esp"] = "Lugar Esp";
	$fieldToolTipshechos_delictivos12["Spanish"]["lugar_esp"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["lugar_esp"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["forma_cono"] = "Forma Cono";
	$fieldToolTipshechos_delictivos12["Spanish"]["forma_cono"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["forma_cono"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["delito_espe"] = "Delito Espe";
	$fieldToolTipshechos_delictivos12["Spanish"]["delito_espe"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["delito_espe"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["dia_hecho"] = "Dia Hecho";
	$fieldToolTipshechos_delictivos12["Spanish"]["dia_hecho"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["dia_hecho"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["fecha_hecho"] = "Fecha Hecho";
	$fieldToolTipshechos_delictivos12["Spanish"]["fecha_hecho"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["fecha_hecho"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["mes_hecho"] = "Mes Hecho";
	$fieldToolTipshechos_delictivos12["Spanish"]["mes_hecho"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["mes_hecho"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipshechos_delictivos12["Spanish"]["a_o_hecho"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["a_o_hecho"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["edad_victima"] = "Edad Victima";
	$fieldToolTipshechos_delictivos12["Spanish"]["edad_victima"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["edad_victima"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipshechos_delictivos12["Spanish"]["ran_eta_vic"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["ran_eta_vic"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["s_victima"] = "S Victima";
	$fieldToolTipshechos_delictivos12["Spanish"]["s_victima"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["s_victima"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["oc_victima"] = "Oc Victima";
	$fieldToolTipshechos_delictivos12["Spanish"]["oc_victima"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["oc_victima"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["relacion_vi_agre"] = "Relacion Vi Agre";
	$fieldToolTipshechos_delictivos12["Spanish"]["relacion_vi_agre"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["relacion_vi_agre"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["edad_agresor"] = "Edad Agresor";
	$fieldToolTipshechos_delictivos12["Spanish"]["edad_agresor"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["edad_agresor"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["sexo_agresor"] = "Sexo Agresor";
	$fieldToolTipshechos_delictivos12["Spanish"]["sexo_agresor"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["sexo_agresor"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["ocupa_agresor"] = "Ocupa Agresor";
	$fieldToolTipshechos_delictivos12["Spanish"]["ocupa_agresor"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["ocupa_agresor"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipshechos_delictivos12["Spanish"]["tipo_arma"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["tipo_arma"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["canton_hecho"] = "Canton Hecho";
	$fieldToolTipshechos_delictivos12["Spanish"]["canton_hecho"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["canton_hecho"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["colonia_hecho"] = "Colonia Hecho";
	$fieldToolTipshechos_delictivos12["Spanish"]["colonia_hecho"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["colonia_hecho"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["caserio_hecho"] = "Caserio Hecho";
	$fieldToolTipshechos_delictivos12["Spanish"]["caserio_hecho"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["caserio_hecho"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["calle_hecho"] = "Calle Hecho";
	$fieldToolTipshechos_delictivos12["Spanish"]["calle_hecho"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["calle_hecho"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["avenida_hecho"] = "Avenida Hecho";
	$fieldToolTipshechos_delictivos12["Spanish"]["avenida_hecho"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["avenida_hecho"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["casa_hecho"] = "Casa Hecho";
	$fieldToolTipshechos_delictivos12["Spanish"]["casa_hecho"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["casa_hecho"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["com_hecho"] = "Com Hecho";
	$fieldToolTipshechos_delictivos12["Spanish"]["com_hecho"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["com_hecho"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["barrio_hecho"] = "Barrio Hecho";
	$fieldToolTipshechos_delictivos12["Spanish"]["barrio_hecho"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["barrio_hecho"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["comp_hecho"] = "Comp Hecho";
	$fieldToolTipshechos_delictivos12["Spanish"]["comp_hecho"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["comp_hecho"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipshechos_delictivos12["Spanish"]["sector_ppd"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["sector_ppd"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["mes_corre"] = "Mes Corre";
	$fieldToolTipshechos_delictivos12["Spanish"]["mes_corre"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["mes_corre"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["arma_analisis"] = "Arma Analisis";
	$fieldToolTipshechos_delictivos12["Spanish"]["arma_analisis"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["arma_analisis"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["movil_he"] = "Movil He";
	$fieldToolTipshechos_delictivos12["Spanish"]["movil_he"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["movil_he"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["ocupa_analisis"] = "Ocupa Analisis";
	$fieldToolTipshechos_delictivos12["Spanish"]["ocupa_analisis"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["ocupa_analisis"] = "";
	$fieldLabelshechos_delictivos12["Spanish"]["rel_vic_ag_anali"] = "Rel Vic Ag Anali";
	$fieldToolTipshechos_delictivos12["Spanish"]["rel_vic_ag_anali"] = "";
	$placeHoldershechos_delictivos12["Spanish"]["rel_vic_ag_anali"] = "";
	if (count($fieldToolTipshechos_delictivos12["Spanish"]))
		$tdatahechos_delictivos12[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshechos_delictivos12["English"] = array();
	$fieldToolTipshechos_delictivos12["English"] = array();
	$placeHoldershechos_delictivos12["English"] = array();
	$pageTitleshechos_delictivos12["English"] = array();
	$fieldLabelshechos_delictivos12["English"]["id1"] = "Id1";
	$fieldToolTipshechos_delictivos12["English"]["id1"] = "";
	$placeHoldershechos_delictivos12["English"]["id1"] = "";
	$fieldLabelshechos_delictivos12["English"]["correlativo"] = "Correlativo";
	$fieldToolTipshechos_delictivos12["English"]["correlativo"] = "";
	$placeHoldershechos_delictivos12["English"]["correlativo"] = "";
	$fieldLabelshechos_delictivos12["English"]["numero"] = "Numero";
	$fieldToolTipshechos_delictivos12["English"]["numero"] = "";
	$placeHoldershechos_delictivos12["English"]["numero"] = "";
	$fieldLabelshechos_delictivos12["English"]["id"] = "Id";
	$fieldToolTipshechos_delictivos12["English"]["id"] = "";
	$placeHoldershechos_delictivos12["English"]["id"] = "";
	$fieldLabelshechos_delictivos12["English"]["numero2"] = "Numero2";
	$fieldToolTipshechos_delictivos12["English"]["numero2"] = "";
	$placeHoldershechos_delictivos12["English"]["numero2"] = "";
	$fieldLabelshechos_delictivos12["English"]["lugaranalisis"] = "Lugaranalisis";
	$fieldToolTipshechos_delictivos12["English"]["lugaranalisis"] = "";
	$placeHoldershechos_delictivos12["English"]["lugaranalisis"] = "";
	$fieldLabelshechos_delictivos12["English"]["area"] = "Area";
	$fieldToolTipshechos_delictivos12["English"]["area"] = "";
	$placeHoldershechos_delictivos12["English"]["area"] = "";
	$fieldLabelshechos_delictivos12["English"]["delito"] = "Delito";
	$fieldToolTipshechos_delictivos12["English"]["delito"] = "";
	$placeHoldershechos_delictivos12["English"]["delito"] = "";
	$fieldLabelshechos_delictivos12["English"]["hora_hecho"] = "Hora Hecho";
	$fieldToolTipshechos_delictivos12["English"]["hora_hecho"] = "";
	$placeHoldershechos_delictivos12["English"]["hora_hecho"] = "";
	$fieldLabelshechos_delictivos12["English"]["rango_hora"] = "Rango Hora";
	$fieldToolTipshechos_delictivos12["English"]["rango_hora"] = "";
	$placeHoldershechos_delictivos12["English"]["rango_hora"] = "";
	$fieldLabelshechos_delictivos12["English"]["movil"] = "Movil";
	$fieldToolTipshechos_delictivos12["English"]["movil"] = "";
	$placeHoldershechos_delictivos12["English"]["movil"] = "";
	$fieldLabelshechos_delictivos12["English"]["tipo"] = "Tipo";
	$fieldToolTipshechos_delictivos12["English"]["tipo"] = "";
	$placeHoldershechos_delictivos12["English"]["tipo"] = "";
	$fieldLabelshechos_delictivos12["English"]["nombre"] = "Nombre";
	$fieldToolTipshechos_delictivos12["English"]["nombre"] = "";
	$placeHoldershechos_delictivos12["English"]["nombre"] = "";
	$fieldLabelshechos_delictivos12["English"]["x"] = "X";
	$fieldToolTipshechos_delictivos12["English"]["x"] = "";
	$placeHoldershechos_delictivos12["English"]["x"] = "";
	$fieldLabelshechos_delictivos12["English"]["y"] = "Y";
	$fieldToolTipshechos_delictivos12["English"]["y"] = "";
	$placeHoldershechos_delictivos12["English"]["y"] = "";
	$fieldLabelshechos_delictivos12["English"]["correlativo1"] = "Correlativo1";
	$fieldToolTipshechos_delictivos12["English"]["correlativo1"] = "";
	$placeHoldershechos_delictivos12["English"]["correlativo1"] = "";
	$fieldLabelshechos_delictivos12["English"]["codigo_muni"] = "Codigo Muni";
	$fieldToolTipshechos_delictivos12["English"]["codigo_muni"] = "";
	$placeHoldershechos_delictivos12["English"]["codigo_muni"] = "";
	$fieldLabelshechos_delictivos12["English"]["depart_he"] = "Depart He";
	$fieldToolTipshechos_delictivos12["English"]["depart_he"] = "";
	$placeHoldershechos_delictivos12["English"]["depart_he"] = "";
	$fieldLabelshechos_delictivos12["English"]["muni_he"] = "Muni He";
	$fieldToolTipshechos_delictivos12["English"]["muni_he"] = "";
	$placeHoldershechos_delictivos12["English"]["muni_he"] = "";
	$fieldLabelshechos_delictivos12["English"]["dire_hecho"] = "Dire Hecho";
	$fieldToolTipshechos_delictivos12["English"]["dire_hecho"] = "";
	$placeHoldershechos_delictivos12["English"]["dire_hecho"] = "";
	$fieldLabelshechos_delictivos12["English"]["lugar_esp"] = "Lugar Esp";
	$fieldToolTipshechos_delictivos12["English"]["lugar_esp"] = "";
	$placeHoldershechos_delictivos12["English"]["lugar_esp"] = "";
	$fieldLabelshechos_delictivos12["English"]["forma_cono"] = "Forma Cono";
	$fieldToolTipshechos_delictivos12["English"]["forma_cono"] = "";
	$placeHoldershechos_delictivos12["English"]["forma_cono"] = "";
	$fieldLabelshechos_delictivos12["English"]["delito_espe"] = "Delito Espe";
	$fieldToolTipshechos_delictivos12["English"]["delito_espe"] = "";
	$placeHoldershechos_delictivos12["English"]["delito_espe"] = "";
	$fieldLabelshechos_delictivos12["English"]["dia_hecho"] = "Dia Hecho";
	$fieldToolTipshechos_delictivos12["English"]["dia_hecho"] = "";
	$placeHoldershechos_delictivos12["English"]["dia_hecho"] = "";
	$fieldLabelshechos_delictivos12["English"]["fecha_hecho"] = "Fecha Hecho";
	$fieldToolTipshechos_delictivos12["English"]["fecha_hecho"] = "";
	$placeHoldershechos_delictivos12["English"]["fecha_hecho"] = "";
	$fieldLabelshechos_delictivos12["English"]["mes_hecho"] = "Mes Hecho";
	$fieldToolTipshechos_delictivos12["English"]["mes_hecho"] = "";
	$placeHoldershechos_delictivos12["English"]["mes_hecho"] = "";
	$fieldLabelshechos_delictivos12["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipshechos_delictivos12["English"]["a_o_hecho"] = "";
	$placeHoldershechos_delictivos12["English"]["a_o_hecho"] = "";
	$fieldLabelshechos_delictivos12["English"]["edad_victima"] = "Edad Victima";
	$fieldToolTipshechos_delictivos12["English"]["edad_victima"] = "";
	$placeHoldershechos_delictivos12["English"]["edad_victima"] = "";
	$fieldLabelshechos_delictivos12["English"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipshechos_delictivos12["English"]["ran_eta_vic"] = "";
	$placeHoldershechos_delictivos12["English"]["ran_eta_vic"] = "";
	$fieldLabelshechos_delictivos12["English"]["s_victima"] = "S Victima";
	$fieldToolTipshechos_delictivos12["English"]["s_victima"] = "";
	$placeHoldershechos_delictivos12["English"]["s_victima"] = "";
	$fieldLabelshechos_delictivos12["English"]["oc_victima"] = "Oc Victima";
	$fieldToolTipshechos_delictivos12["English"]["oc_victima"] = "";
	$placeHoldershechos_delictivos12["English"]["oc_victima"] = "";
	$fieldLabelshechos_delictivos12["English"]["relacion_vi_agre"] = "Relacion Vi Agre";
	$fieldToolTipshechos_delictivos12["English"]["relacion_vi_agre"] = "";
	$placeHoldershechos_delictivos12["English"]["relacion_vi_agre"] = "";
	$fieldLabelshechos_delictivos12["English"]["edad_agresor"] = "Edad Agresor";
	$fieldToolTipshechos_delictivos12["English"]["edad_agresor"] = "";
	$placeHoldershechos_delictivos12["English"]["edad_agresor"] = "";
	$fieldLabelshechos_delictivos12["English"]["sexo_agresor"] = "Sexo Agresor";
	$fieldToolTipshechos_delictivos12["English"]["sexo_agresor"] = "";
	$placeHoldershechos_delictivos12["English"]["sexo_agresor"] = "";
	$fieldLabelshechos_delictivos12["English"]["ocupa_agresor"] = "Ocupa Agresor";
	$fieldToolTipshechos_delictivos12["English"]["ocupa_agresor"] = "";
	$placeHoldershechos_delictivos12["English"]["ocupa_agresor"] = "";
	$fieldLabelshechos_delictivos12["English"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipshechos_delictivos12["English"]["tipo_arma"] = "";
	$placeHoldershechos_delictivos12["English"]["tipo_arma"] = "";
	$fieldLabelshechos_delictivos12["English"]["canton_hecho"] = "Canton Hecho";
	$fieldToolTipshechos_delictivos12["English"]["canton_hecho"] = "";
	$placeHoldershechos_delictivos12["English"]["canton_hecho"] = "";
	$fieldLabelshechos_delictivos12["English"]["colonia_hecho"] = "Colonia Hecho";
	$fieldToolTipshechos_delictivos12["English"]["colonia_hecho"] = "";
	$placeHoldershechos_delictivos12["English"]["colonia_hecho"] = "";
	$fieldLabelshechos_delictivos12["English"]["caserio_hecho"] = "Caserio Hecho";
	$fieldToolTipshechos_delictivos12["English"]["caserio_hecho"] = "";
	$placeHoldershechos_delictivos12["English"]["caserio_hecho"] = "";
	$fieldLabelshechos_delictivos12["English"]["calle_hecho"] = "Calle Hecho";
	$fieldToolTipshechos_delictivos12["English"]["calle_hecho"] = "";
	$placeHoldershechos_delictivos12["English"]["calle_hecho"] = "";
	$fieldLabelshechos_delictivos12["English"]["avenida_hecho"] = "Avenida Hecho";
	$fieldToolTipshechos_delictivos12["English"]["avenida_hecho"] = "";
	$placeHoldershechos_delictivos12["English"]["avenida_hecho"] = "";
	$fieldLabelshechos_delictivos12["English"]["casa_hecho"] = "Casa Hecho";
	$fieldToolTipshechos_delictivos12["English"]["casa_hecho"] = "";
	$placeHoldershechos_delictivos12["English"]["casa_hecho"] = "";
	$fieldLabelshechos_delictivos12["English"]["com_hecho"] = "Com Hecho";
	$fieldToolTipshechos_delictivos12["English"]["com_hecho"] = "";
	$placeHoldershechos_delictivos12["English"]["com_hecho"] = "";
	$fieldLabelshechos_delictivos12["English"]["barrio_hecho"] = "Barrio Hecho";
	$fieldToolTipshechos_delictivos12["English"]["barrio_hecho"] = "";
	$placeHoldershechos_delictivos12["English"]["barrio_hecho"] = "";
	$fieldLabelshechos_delictivos12["English"]["comp_hecho"] = "Comp Hecho";
	$fieldToolTipshechos_delictivos12["English"]["comp_hecho"] = "";
	$placeHoldershechos_delictivos12["English"]["comp_hecho"] = "";
	$fieldLabelshechos_delictivos12["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipshechos_delictivos12["English"]["sector_ppd"] = "";
	$placeHoldershechos_delictivos12["English"]["sector_ppd"] = "";
	$fieldLabelshechos_delictivos12["English"]["mes_corre"] = "Mes Corre";
	$fieldToolTipshechos_delictivos12["English"]["mes_corre"] = "";
	$placeHoldershechos_delictivos12["English"]["mes_corre"] = "";
	$fieldLabelshechos_delictivos12["English"]["arma_analisis"] = "Arma Analisis";
	$fieldToolTipshechos_delictivos12["English"]["arma_analisis"] = "";
	$placeHoldershechos_delictivos12["English"]["arma_analisis"] = "";
	$fieldLabelshechos_delictivos12["English"]["movil_he"] = "Movil He";
	$fieldToolTipshechos_delictivos12["English"]["movil_he"] = "";
	$placeHoldershechos_delictivos12["English"]["movil_he"] = "";
	$fieldLabelshechos_delictivos12["English"]["ocupa_analisis"] = "Ocupa Analisis";
	$fieldToolTipshechos_delictivos12["English"]["ocupa_analisis"] = "";
	$placeHoldershechos_delictivos12["English"]["ocupa_analisis"] = "";
	$fieldLabelshechos_delictivos12["English"]["rel_vic_ag_anali"] = "Rel Vic Ag Anali";
	$fieldToolTipshechos_delictivos12["English"]["rel_vic_ag_anali"] = "";
	$placeHoldershechos_delictivos12["English"]["rel_vic_ag_anali"] = "";
	if (count($fieldToolTipshechos_delictivos12["English"]))
		$tdatahechos_delictivos12[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshechos_delictivos12[""] = array();
	$fieldToolTipshechos_delictivos12[""] = array();
	$placeHoldershechos_delictivos12[""] = array();
	$pageTitleshechos_delictivos12[""] = array();
	if (count($fieldToolTipshechos_delictivos12[""]))
		$tdatahechos_delictivos12[".isUseToolTips"] = true;
}





$tdatahechos_delictivos12[".shortTableName"] = "hechos_delictivos12";
$tdatahechos_delictivos12[".nSecOptions"] = 0;
$tdatahechos_delictivos12[".recsPerRowPrint"] = 1;
$tdatahechos_delictivos12[".mainTableOwnerID"] = "";
$tdatahechos_delictivos12[".moveNext"] = 1;
$tdatahechos_delictivos12[".entityType"] = 1;

$tdatahechos_delictivos12[".strOriginalTableName"] = "hechos_delictivos1";

	



$tdatahechos_delictivos12[".showAddInPopup"] = false;

$tdatahechos_delictivos12[".showEditInPopup"] = false;

$tdatahechos_delictivos12[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahechos_delictivos12[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahechos_delictivos12[".fieldsForRegister"] = array();

	$tdatahechos_delictivos12[".listAjax"] = true;

	$tdatahechos_delictivos12[".audit"] = false;

	$tdatahechos_delictivos12[".locking"] = false;



$tdatahechos_delictivos12[".list"] = true;



$tdatahechos_delictivos12[".reorderRecordsByHeader"] = true;
$tdatahechos_delictivos12[".createSortByDropdown"] = true;
$tdatahechos_delictivos12[".strSortControlSettingsJSON"] = "";




$tdatahechos_delictivos12[".import"] = true;

$tdatahechos_delictivos12[".exportTo"] = true;

$tdatahechos_delictivos12[".printFriendly"] = true;


$tdatahechos_delictivos12[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatahechos_delictivos12[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatahechos_delictivos12[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatahechos_delictivos12[".searchSaving"] = false;
//

$tdatahechos_delictivos12[".showSearchPanel"] = true;
		$tdatahechos_delictivos12[".flexibleSearch"] = true;

$tdatahechos_delictivos12[".isUseAjaxSuggest"] = true;

$tdatahechos_delictivos12[".rowHighlite"] = true;





$tdatahechos_delictivos12[".ajaxCodeSnippetAdded"] = false;

$tdatahechos_delictivos12[".buttonsAdded"] = false;

$tdatahechos_delictivos12[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahechos_delictivos12[".isUseTimeForSearch"] = false;





$tdatahechos_delictivos12[".allSearchFields"] = array();
$tdatahechos_delictivos12[".filterFields"] = array();
$tdatahechos_delictivos12[".requiredSearchFields"] = array();

$tdatahechos_delictivos12[".allSearchFields"][] = "id1";
	$tdatahechos_delictivos12[".allSearchFields"][] = "correlativo";
	$tdatahechos_delictivos12[".allSearchFields"][] = "numero";
	$tdatahechos_delictivos12[".allSearchFields"][] = "id";
	$tdatahechos_delictivos12[".allSearchFields"][] = "numero2";
	$tdatahechos_delictivos12[".allSearchFields"][] = "lugaranalisis";
	$tdatahechos_delictivos12[".allSearchFields"][] = "area";
	$tdatahechos_delictivos12[".allSearchFields"][] = "delito";
	$tdatahechos_delictivos12[".allSearchFields"][] = "hora_hecho";
	$tdatahechos_delictivos12[".allSearchFields"][] = "rango_hora";
	$tdatahechos_delictivos12[".allSearchFields"][] = "movil";
	$tdatahechos_delictivos12[".allSearchFields"][] = "tipo";
	$tdatahechos_delictivos12[".allSearchFields"][] = "nombre";
	$tdatahechos_delictivos12[".allSearchFields"][] = "x";
	$tdatahechos_delictivos12[".allSearchFields"][] = "y";
	$tdatahechos_delictivos12[".allSearchFields"][] = "correlativo1";
	$tdatahechos_delictivos12[".allSearchFields"][] = "codigo_muni";
	$tdatahechos_delictivos12[".allSearchFields"][] = "depart_he";
	$tdatahechos_delictivos12[".allSearchFields"][] = "muni_he";
	$tdatahechos_delictivos12[".allSearchFields"][] = "dire_hecho";
	$tdatahechos_delictivos12[".allSearchFields"][] = "lugar_esp";
	$tdatahechos_delictivos12[".allSearchFields"][] = "forma_cono";
	$tdatahechos_delictivos12[".allSearchFields"][] = "delito_espe";
	$tdatahechos_delictivos12[".allSearchFields"][] = "dia_hecho";
	$tdatahechos_delictivos12[".allSearchFields"][] = "fecha_hecho";
	$tdatahechos_delictivos12[".allSearchFields"][] = "mes_hecho";
	$tdatahechos_delictivos12[".allSearchFields"][] = "aÑo_hecho";
	$tdatahechos_delictivos12[".allSearchFields"][] = "edad_victima";
	$tdatahechos_delictivos12[".allSearchFields"][] = "ran_eta_vic";
	$tdatahechos_delictivos12[".allSearchFields"][] = "s_victima";
	$tdatahechos_delictivos12[".allSearchFields"][] = "oc_victima";
	$tdatahechos_delictivos12[".allSearchFields"][] = "relacion_vi_agre";
	$tdatahechos_delictivos12[".allSearchFields"][] = "edad_agresor";
	$tdatahechos_delictivos12[".allSearchFields"][] = "sexo_agresor";
	$tdatahechos_delictivos12[".allSearchFields"][] = "ocupa_agresor";
	$tdatahechos_delictivos12[".allSearchFields"][] = "tipo_arma";
	$tdatahechos_delictivos12[".allSearchFields"][] = "canton_hecho";
	$tdatahechos_delictivos12[".allSearchFields"][] = "colonia_hecho";
	$tdatahechos_delictivos12[".allSearchFields"][] = "caserio_hecho";
	$tdatahechos_delictivos12[".allSearchFields"][] = "calle_hecho";
	$tdatahechos_delictivos12[".allSearchFields"][] = "avenida_hecho";
	$tdatahechos_delictivos12[".allSearchFields"][] = "casa_hecho";
	$tdatahechos_delictivos12[".allSearchFields"][] = "com_hecho";
	$tdatahechos_delictivos12[".allSearchFields"][] = "barrio_hecho";
	$tdatahechos_delictivos12[".allSearchFields"][] = "comp_hecho";
	$tdatahechos_delictivos12[".allSearchFields"][] = "sector_ppd";
	$tdatahechos_delictivos12[".allSearchFields"][] = "mes_corre";
	$tdatahechos_delictivos12[".allSearchFields"][] = "arma_analisis";
	$tdatahechos_delictivos12[".allSearchFields"][] = "movil_he";
	$tdatahechos_delictivos12[".allSearchFields"][] = "ocupa_analisis";
	$tdatahechos_delictivos12[".allSearchFields"][] = "rel_vic_ag_anali";
	

$tdatahechos_delictivos12[".googleLikeFields"] = array();
$tdatahechos_delictivos12[".googleLikeFields"][] = "id1";
$tdatahechos_delictivos12[".googleLikeFields"][] = "correlativo";
$tdatahechos_delictivos12[".googleLikeFields"][] = "numero";
$tdatahechos_delictivos12[".googleLikeFields"][] = "id";
$tdatahechos_delictivos12[".googleLikeFields"][] = "numero2";
$tdatahechos_delictivos12[".googleLikeFields"][] = "lugaranalisis";
$tdatahechos_delictivos12[".googleLikeFields"][] = "area";
$tdatahechos_delictivos12[".googleLikeFields"][] = "delito";
$tdatahechos_delictivos12[".googleLikeFields"][] = "hora_hecho";
$tdatahechos_delictivos12[".googleLikeFields"][] = "rango_hora";
$tdatahechos_delictivos12[".googleLikeFields"][] = "movil";
$tdatahechos_delictivos12[".googleLikeFields"][] = "tipo";
$tdatahechos_delictivos12[".googleLikeFields"][] = "nombre";
$tdatahechos_delictivos12[".googleLikeFields"][] = "x";
$tdatahechos_delictivos12[".googleLikeFields"][] = "y";
$tdatahechos_delictivos12[".googleLikeFields"][] = "correlativo1";
$tdatahechos_delictivos12[".googleLikeFields"][] = "codigo_muni";
$tdatahechos_delictivos12[".googleLikeFields"][] = "depart_he";
$tdatahechos_delictivos12[".googleLikeFields"][] = "muni_he";
$tdatahechos_delictivos12[".googleLikeFields"][] = "dire_hecho";
$tdatahechos_delictivos12[".googleLikeFields"][] = "lugar_esp";
$tdatahechos_delictivos12[".googleLikeFields"][] = "forma_cono";
$tdatahechos_delictivos12[".googleLikeFields"][] = "delito_espe";
$tdatahechos_delictivos12[".googleLikeFields"][] = "dia_hecho";
$tdatahechos_delictivos12[".googleLikeFields"][] = "fecha_hecho";
$tdatahechos_delictivos12[".googleLikeFields"][] = "mes_hecho";
$tdatahechos_delictivos12[".googleLikeFields"][] = "aÑo_hecho";
$tdatahechos_delictivos12[".googleLikeFields"][] = "edad_victima";
$tdatahechos_delictivos12[".googleLikeFields"][] = "ran_eta_vic";
$tdatahechos_delictivos12[".googleLikeFields"][] = "s_victima";
$tdatahechos_delictivos12[".googleLikeFields"][] = "oc_victima";
$tdatahechos_delictivos12[".googleLikeFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos12[".googleLikeFields"][] = "edad_agresor";
$tdatahechos_delictivos12[".googleLikeFields"][] = "sexo_agresor";
$tdatahechos_delictivos12[".googleLikeFields"][] = "ocupa_agresor";
$tdatahechos_delictivos12[".googleLikeFields"][] = "tipo_arma";
$tdatahechos_delictivos12[".googleLikeFields"][] = "canton_hecho";
$tdatahechos_delictivos12[".googleLikeFields"][] = "colonia_hecho";
$tdatahechos_delictivos12[".googleLikeFields"][] = "caserio_hecho";
$tdatahechos_delictivos12[".googleLikeFields"][] = "calle_hecho";
$tdatahechos_delictivos12[".googleLikeFields"][] = "avenida_hecho";
$tdatahechos_delictivos12[".googleLikeFields"][] = "casa_hecho";
$tdatahechos_delictivos12[".googleLikeFields"][] = "com_hecho";
$tdatahechos_delictivos12[".googleLikeFields"][] = "barrio_hecho";
$tdatahechos_delictivos12[".googleLikeFields"][] = "comp_hecho";
$tdatahechos_delictivos12[".googleLikeFields"][] = "sector_ppd";
$tdatahechos_delictivos12[".googleLikeFields"][] = "mes_corre";
$tdatahechos_delictivos12[".googleLikeFields"][] = "arma_analisis";
$tdatahechos_delictivos12[".googleLikeFields"][] = "movil_he";
$tdatahechos_delictivos12[".googleLikeFields"][] = "ocupa_analisis";
$tdatahechos_delictivos12[".googleLikeFields"][] = "rel_vic_ag_anali";


$tdatahechos_delictivos12[".advSearchFields"] = array();
$tdatahechos_delictivos12[".advSearchFields"][] = "id1";
$tdatahechos_delictivos12[".advSearchFields"][] = "correlativo";
$tdatahechos_delictivos12[".advSearchFields"][] = "numero";
$tdatahechos_delictivos12[".advSearchFields"][] = "id";
$tdatahechos_delictivos12[".advSearchFields"][] = "numero2";
$tdatahechos_delictivos12[".advSearchFields"][] = "lugaranalisis";
$tdatahechos_delictivos12[".advSearchFields"][] = "area";
$tdatahechos_delictivos12[".advSearchFields"][] = "delito";
$tdatahechos_delictivos12[".advSearchFields"][] = "hora_hecho";
$tdatahechos_delictivos12[".advSearchFields"][] = "rango_hora";
$tdatahechos_delictivos12[".advSearchFields"][] = "movil";
$tdatahechos_delictivos12[".advSearchFields"][] = "tipo";
$tdatahechos_delictivos12[".advSearchFields"][] = "nombre";
$tdatahechos_delictivos12[".advSearchFields"][] = "x";
$tdatahechos_delictivos12[".advSearchFields"][] = "y";
$tdatahechos_delictivos12[".advSearchFields"][] = "correlativo1";
$tdatahechos_delictivos12[".advSearchFields"][] = "codigo_muni";
$tdatahechos_delictivos12[".advSearchFields"][] = "depart_he";
$tdatahechos_delictivos12[".advSearchFields"][] = "muni_he";
$tdatahechos_delictivos12[".advSearchFields"][] = "dire_hecho";
$tdatahechos_delictivos12[".advSearchFields"][] = "lugar_esp";
$tdatahechos_delictivos12[".advSearchFields"][] = "forma_cono";
$tdatahechos_delictivos12[".advSearchFields"][] = "delito_espe";
$tdatahechos_delictivos12[".advSearchFields"][] = "dia_hecho";
$tdatahechos_delictivos12[".advSearchFields"][] = "fecha_hecho";
$tdatahechos_delictivos12[".advSearchFields"][] = "mes_hecho";
$tdatahechos_delictivos12[".advSearchFields"][] = "aÑo_hecho";
$tdatahechos_delictivos12[".advSearchFields"][] = "edad_victima";
$tdatahechos_delictivos12[".advSearchFields"][] = "ran_eta_vic";
$tdatahechos_delictivos12[".advSearchFields"][] = "s_victima";
$tdatahechos_delictivos12[".advSearchFields"][] = "oc_victima";
$tdatahechos_delictivos12[".advSearchFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos12[".advSearchFields"][] = "edad_agresor";
$tdatahechos_delictivos12[".advSearchFields"][] = "sexo_agresor";
$tdatahechos_delictivos12[".advSearchFields"][] = "ocupa_agresor";
$tdatahechos_delictivos12[".advSearchFields"][] = "tipo_arma";
$tdatahechos_delictivos12[".advSearchFields"][] = "canton_hecho";
$tdatahechos_delictivos12[".advSearchFields"][] = "colonia_hecho";
$tdatahechos_delictivos12[".advSearchFields"][] = "caserio_hecho";
$tdatahechos_delictivos12[".advSearchFields"][] = "calle_hecho";
$tdatahechos_delictivos12[".advSearchFields"][] = "avenida_hecho";
$tdatahechos_delictivos12[".advSearchFields"][] = "casa_hecho";
$tdatahechos_delictivos12[".advSearchFields"][] = "com_hecho";
$tdatahechos_delictivos12[".advSearchFields"][] = "barrio_hecho";
$tdatahechos_delictivos12[".advSearchFields"][] = "comp_hecho";
$tdatahechos_delictivos12[".advSearchFields"][] = "sector_ppd";
$tdatahechos_delictivos12[".advSearchFields"][] = "mes_corre";
$tdatahechos_delictivos12[".advSearchFields"][] = "arma_analisis";
$tdatahechos_delictivos12[".advSearchFields"][] = "movil_he";
$tdatahechos_delictivos12[".advSearchFields"][] = "ocupa_analisis";
$tdatahechos_delictivos12[".advSearchFields"][] = "rel_vic_ag_anali";

$tdatahechos_delictivos12[".tableType"] = "list";

$tdatahechos_delictivos12[".printerPageOrientation"] = 0;
$tdatahechos_delictivos12[".nPrinterPageScale"] = 100;

$tdatahechos_delictivos12[".nPrinterSplitRecords"] = 40;

$tdatahechos_delictivos12[".nPrinterPDFSplitRecords"] = 40;



$tdatahechos_delictivos12[".geocodingEnabled"] = false;





$tdatahechos_delictivos12[".listGridLayout"] = 3;

$tdatahechos_delictivos12[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatahechos_delictivos12[".pageSize"] = 10;

$tdatahechos_delictivos12[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahechos_delictivos12[".strOrderBy"] = $tstrOrderBy;

$tdatahechos_delictivos12[".orderindexes"] = array();

$tdatahechos_delictivos12[".sqlHead"] = "SELECT hechos_delictivos1.id1,  hechos_delictivos1.correlativo,  hechos_delictivos1.numero,  hechos_delictivos1.id,  hechos_delictivos1.numero2,  hechos_delictivos1.lugaranalisis,  hechos_delictivos1.area,  hechos_delictivos1.delito,  hechos_delictivos1.hora_hecho,  hechos_delictivos1.rango_hora,  hechos_delictivos1.movil,  hechos_delictivos1.tipo,  hechos_delictivos1.nombre,  hechos_delictivos1.x,  hechos_delictivos1.y,  hechos_delictivos1.correlativo1,  hechos_delictivos1.codigo_muni,  hechos_delictivos1.depart_he,  hechos_delictivos1.muni_he,  hechos_delictivos1.dire_hecho,  hechos_delictivos1.lugar_esp,  hechos_delictivos1.forma_cono,  hechos_delictivos1.delito_espe,  hechos_delictivos1.dia_hecho,  hechos_delictivos1.fecha_hecho,  hechos_delictivos1.mes_hecho,  hechos_delictivos1.`aÑo_hecho`,  hechos_delictivos1.edad_victima,  hechos_delictivos1.ran_eta_vic,  hechos_delictivos1.s_victima,  hechos_delictivos1.oc_victima,  hechos_delictivos1.relacion_vi_agre,  hechos_delictivos1.edad_agresor,  hechos_delictivos1.sexo_agresor,  hechos_delictivos1.ocupa_agresor,  hechos_delictivos1.tipo_arma,  hechos_delictivos1.canton_hecho,  hechos_delictivos1.colonia_hecho,  hechos_delictivos1.caserio_hecho,  hechos_delictivos1.calle_hecho,  hechos_delictivos1.avenida_hecho,  hechos_delictivos1.casa_hecho,  hechos_delictivos1.com_hecho,  hechos_delictivos1.barrio_hecho,  hechos_delictivos1.comp_hecho,  hechos_delictivos1.sector_ppd,  hechos_delictivos1.mes_corre,  hechos_delictivos1.arma_analisis,  hechos_delictivos1.movil_he,  hechos_delictivos1.ocupa_analisis,  hechos_delictivos1.rel_vic_ag_anali";
$tdatahechos_delictivos12[".sqlFrom"] = "FROM hechos_delictivos1  , retornados  , carcel  , transito  , pnc911";
$tdatahechos_delictivos12[".sqlWhereExpr"] = "";
$tdatahechos_delictivos12[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahechos_delictivos12[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahechos_delictivos12[".arrGroupsPerPage"] = $arrGPP;

$tdatahechos_delictivos12[".highlightSearchResults"] = true;

$tableKeyshechos_delictivos12 = array();
$tdatahechos_delictivos12[".Keys"] = $tableKeyshechos_delictivos12;

$tdatahechos_delictivos12[".listFields"] = array();
$tdatahechos_delictivos12[".listFields"][] = "id1";
$tdatahechos_delictivos12[".listFields"][] = "correlativo";
$tdatahechos_delictivos12[".listFields"][] = "numero";
$tdatahechos_delictivos12[".listFields"][] = "id";
$tdatahechos_delictivos12[".listFields"][] = "numero2";
$tdatahechos_delictivos12[".listFields"][] = "lugaranalisis";
$tdatahechos_delictivos12[".listFields"][] = "area";
$tdatahechos_delictivos12[".listFields"][] = "delito";
$tdatahechos_delictivos12[".listFields"][] = "hora_hecho";
$tdatahechos_delictivos12[".listFields"][] = "rango_hora";
$tdatahechos_delictivos12[".listFields"][] = "movil";
$tdatahechos_delictivos12[".listFields"][] = "tipo";
$tdatahechos_delictivos12[".listFields"][] = "nombre";
$tdatahechos_delictivos12[".listFields"][] = "x";
$tdatahechos_delictivos12[".listFields"][] = "y";
$tdatahechos_delictivos12[".listFields"][] = "correlativo1";
$tdatahechos_delictivos12[".listFields"][] = "codigo_muni";
$tdatahechos_delictivos12[".listFields"][] = "depart_he";
$tdatahechos_delictivos12[".listFields"][] = "muni_he";
$tdatahechos_delictivos12[".listFields"][] = "dire_hecho";
$tdatahechos_delictivos12[".listFields"][] = "lugar_esp";
$tdatahechos_delictivos12[".listFields"][] = "forma_cono";
$tdatahechos_delictivos12[".listFields"][] = "delito_espe";
$tdatahechos_delictivos12[".listFields"][] = "dia_hecho";
$tdatahechos_delictivos12[".listFields"][] = "fecha_hecho";
$tdatahechos_delictivos12[".listFields"][] = "mes_hecho";
$tdatahechos_delictivos12[".listFields"][] = "aÑo_hecho";
$tdatahechos_delictivos12[".listFields"][] = "edad_victima";
$tdatahechos_delictivos12[".listFields"][] = "ran_eta_vic";
$tdatahechos_delictivos12[".listFields"][] = "s_victima";
$tdatahechos_delictivos12[".listFields"][] = "oc_victima";
$tdatahechos_delictivos12[".listFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos12[".listFields"][] = "edad_agresor";
$tdatahechos_delictivos12[".listFields"][] = "sexo_agresor";
$tdatahechos_delictivos12[".listFields"][] = "ocupa_agresor";
$tdatahechos_delictivos12[".listFields"][] = "tipo_arma";
$tdatahechos_delictivos12[".listFields"][] = "canton_hecho";
$tdatahechos_delictivos12[".listFields"][] = "colonia_hecho";
$tdatahechos_delictivos12[".listFields"][] = "caserio_hecho";
$tdatahechos_delictivos12[".listFields"][] = "calle_hecho";
$tdatahechos_delictivos12[".listFields"][] = "avenida_hecho";
$tdatahechos_delictivos12[".listFields"][] = "casa_hecho";
$tdatahechos_delictivos12[".listFields"][] = "com_hecho";
$tdatahechos_delictivos12[".listFields"][] = "barrio_hecho";
$tdatahechos_delictivos12[".listFields"][] = "comp_hecho";
$tdatahechos_delictivos12[".listFields"][] = "sector_ppd";
$tdatahechos_delictivos12[".listFields"][] = "mes_corre";
$tdatahechos_delictivos12[".listFields"][] = "arma_analisis";
$tdatahechos_delictivos12[".listFields"][] = "movil_he";
$tdatahechos_delictivos12[".listFields"][] = "ocupa_analisis";
$tdatahechos_delictivos12[".listFields"][] = "rel_vic_ag_anali";

$tdatahechos_delictivos12[".hideMobileList"] = array();


$tdatahechos_delictivos12[".viewFields"] = array();
$tdatahechos_delictivos12[".viewFields"][] = "id1";
$tdatahechos_delictivos12[".viewFields"][] = "correlativo";
$tdatahechos_delictivos12[".viewFields"][] = "numero";
$tdatahechos_delictivos12[".viewFields"][] = "id";
$tdatahechos_delictivos12[".viewFields"][] = "numero2";
$tdatahechos_delictivos12[".viewFields"][] = "lugaranalisis";
$tdatahechos_delictivos12[".viewFields"][] = "area";
$tdatahechos_delictivos12[".viewFields"][] = "delito";
$tdatahechos_delictivos12[".viewFields"][] = "hora_hecho";
$tdatahechos_delictivos12[".viewFields"][] = "rango_hora";
$tdatahechos_delictivos12[".viewFields"][] = "movil";
$tdatahechos_delictivos12[".viewFields"][] = "tipo";
$tdatahechos_delictivos12[".viewFields"][] = "nombre";
$tdatahechos_delictivos12[".viewFields"][] = "x";
$tdatahechos_delictivos12[".viewFields"][] = "y";
$tdatahechos_delictivos12[".viewFields"][] = "correlativo1";
$tdatahechos_delictivos12[".viewFields"][] = "codigo_muni";
$tdatahechos_delictivos12[".viewFields"][] = "depart_he";
$tdatahechos_delictivos12[".viewFields"][] = "muni_he";
$tdatahechos_delictivos12[".viewFields"][] = "dire_hecho";
$tdatahechos_delictivos12[".viewFields"][] = "lugar_esp";
$tdatahechos_delictivos12[".viewFields"][] = "forma_cono";
$tdatahechos_delictivos12[".viewFields"][] = "delito_espe";
$tdatahechos_delictivos12[".viewFields"][] = "dia_hecho";
$tdatahechos_delictivos12[".viewFields"][] = "fecha_hecho";
$tdatahechos_delictivos12[".viewFields"][] = "mes_hecho";
$tdatahechos_delictivos12[".viewFields"][] = "aÑo_hecho";
$tdatahechos_delictivos12[".viewFields"][] = "edad_victima";
$tdatahechos_delictivos12[".viewFields"][] = "ran_eta_vic";
$tdatahechos_delictivos12[".viewFields"][] = "s_victima";
$tdatahechos_delictivos12[".viewFields"][] = "oc_victima";
$tdatahechos_delictivos12[".viewFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos12[".viewFields"][] = "edad_agresor";
$tdatahechos_delictivos12[".viewFields"][] = "sexo_agresor";
$tdatahechos_delictivos12[".viewFields"][] = "ocupa_agresor";
$tdatahechos_delictivos12[".viewFields"][] = "tipo_arma";
$tdatahechos_delictivos12[".viewFields"][] = "canton_hecho";
$tdatahechos_delictivos12[".viewFields"][] = "colonia_hecho";
$tdatahechos_delictivos12[".viewFields"][] = "caserio_hecho";
$tdatahechos_delictivos12[".viewFields"][] = "calle_hecho";
$tdatahechos_delictivos12[".viewFields"][] = "avenida_hecho";
$tdatahechos_delictivos12[".viewFields"][] = "casa_hecho";
$tdatahechos_delictivos12[".viewFields"][] = "com_hecho";
$tdatahechos_delictivos12[".viewFields"][] = "barrio_hecho";
$tdatahechos_delictivos12[".viewFields"][] = "comp_hecho";
$tdatahechos_delictivos12[".viewFields"][] = "sector_ppd";
$tdatahechos_delictivos12[".viewFields"][] = "mes_corre";
$tdatahechos_delictivos12[".viewFields"][] = "arma_analisis";
$tdatahechos_delictivos12[".viewFields"][] = "movil_he";
$tdatahechos_delictivos12[".viewFields"][] = "ocupa_analisis";
$tdatahechos_delictivos12[".viewFields"][] = "rel_vic_ag_anali";

$tdatahechos_delictivos12[".addFields"] = array();
$tdatahechos_delictivos12[".addFields"][] = "id1";
$tdatahechos_delictivos12[".addFields"][] = "correlativo";
$tdatahechos_delictivos12[".addFields"][] = "numero";
$tdatahechos_delictivos12[".addFields"][] = "id";
$tdatahechos_delictivos12[".addFields"][] = "numero2";
$tdatahechos_delictivos12[".addFields"][] = "lugaranalisis";
$tdatahechos_delictivos12[".addFields"][] = "area";
$tdatahechos_delictivos12[".addFields"][] = "delito";
$tdatahechos_delictivos12[".addFields"][] = "hora_hecho";
$tdatahechos_delictivos12[".addFields"][] = "rango_hora";
$tdatahechos_delictivos12[".addFields"][] = "movil";
$tdatahechos_delictivos12[".addFields"][] = "tipo";
$tdatahechos_delictivos12[".addFields"][] = "nombre";
$tdatahechos_delictivos12[".addFields"][] = "x";
$tdatahechos_delictivos12[".addFields"][] = "y";
$tdatahechos_delictivos12[".addFields"][] = "correlativo1";
$tdatahechos_delictivos12[".addFields"][] = "codigo_muni";
$tdatahechos_delictivos12[".addFields"][] = "depart_he";
$tdatahechos_delictivos12[".addFields"][] = "muni_he";
$tdatahechos_delictivos12[".addFields"][] = "dire_hecho";
$tdatahechos_delictivos12[".addFields"][] = "lugar_esp";
$tdatahechos_delictivos12[".addFields"][] = "forma_cono";
$tdatahechos_delictivos12[".addFields"][] = "delito_espe";
$tdatahechos_delictivos12[".addFields"][] = "dia_hecho";
$tdatahechos_delictivos12[".addFields"][] = "fecha_hecho";
$tdatahechos_delictivos12[".addFields"][] = "mes_hecho";
$tdatahechos_delictivos12[".addFields"][] = "aÑo_hecho";
$tdatahechos_delictivos12[".addFields"][] = "edad_victima";
$tdatahechos_delictivos12[".addFields"][] = "ran_eta_vic";
$tdatahechos_delictivos12[".addFields"][] = "s_victima";
$tdatahechos_delictivos12[".addFields"][] = "oc_victima";
$tdatahechos_delictivos12[".addFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos12[".addFields"][] = "edad_agresor";
$tdatahechos_delictivos12[".addFields"][] = "sexo_agresor";
$tdatahechos_delictivos12[".addFields"][] = "ocupa_agresor";
$tdatahechos_delictivos12[".addFields"][] = "tipo_arma";
$tdatahechos_delictivos12[".addFields"][] = "canton_hecho";
$tdatahechos_delictivos12[".addFields"][] = "colonia_hecho";
$tdatahechos_delictivos12[".addFields"][] = "caserio_hecho";
$tdatahechos_delictivos12[".addFields"][] = "calle_hecho";
$tdatahechos_delictivos12[".addFields"][] = "avenida_hecho";
$tdatahechos_delictivos12[".addFields"][] = "casa_hecho";
$tdatahechos_delictivos12[".addFields"][] = "com_hecho";
$tdatahechos_delictivos12[".addFields"][] = "barrio_hecho";
$tdatahechos_delictivos12[".addFields"][] = "comp_hecho";
$tdatahechos_delictivos12[".addFields"][] = "sector_ppd";
$tdatahechos_delictivos12[".addFields"][] = "mes_corre";
$tdatahechos_delictivos12[".addFields"][] = "arma_analisis";
$tdatahechos_delictivos12[".addFields"][] = "movil_he";
$tdatahechos_delictivos12[".addFields"][] = "ocupa_analisis";
$tdatahechos_delictivos12[".addFields"][] = "rel_vic_ag_anali";

$tdatahechos_delictivos12[".masterListFields"] = array();
$tdatahechos_delictivos12[".masterListFields"][] = "id1";
$tdatahechos_delictivos12[".masterListFields"][] = "correlativo";
$tdatahechos_delictivos12[".masterListFields"][] = "numero";
$tdatahechos_delictivos12[".masterListFields"][] = "id";
$tdatahechos_delictivos12[".masterListFields"][] = "numero2";
$tdatahechos_delictivos12[".masterListFields"][] = "lugaranalisis";
$tdatahechos_delictivos12[".masterListFields"][] = "area";
$tdatahechos_delictivos12[".masterListFields"][] = "delito";
$tdatahechos_delictivos12[".masterListFields"][] = "hora_hecho";
$tdatahechos_delictivos12[".masterListFields"][] = "rango_hora";
$tdatahechos_delictivos12[".masterListFields"][] = "movil";
$tdatahechos_delictivos12[".masterListFields"][] = "tipo";
$tdatahechos_delictivos12[".masterListFields"][] = "nombre";
$tdatahechos_delictivos12[".masterListFields"][] = "x";
$tdatahechos_delictivos12[".masterListFields"][] = "y";
$tdatahechos_delictivos12[".masterListFields"][] = "correlativo1";
$tdatahechos_delictivos12[".masterListFields"][] = "codigo_muni";
$tdatahechos_delictivos12[".masterListFields"][] = "depart_he";
$tdatahechos_delictivos12[".masterListFields"][] = "muni_he";
$tdatahechos_delictivos12[".masterListFields"][] = "dire_hecho";
$tdatahechos_delictivos12[".masterListFields"][] = "lugar_esp";
$tdatahechos_delictivos12[".masterListFields"][] = "forma_cono";
$tdatahechos_delictivos12[".masterListFields"][] = "delito_espe";
$tdatahechos_delictivos12[".masterListFields"][] = "dia_hecho";
$tdatahechos_delictivos12[".masterListFields"][] = "fecha_hecho";
$tdatahechos_delictivos12[".masterListFields"][] = "mes_hecho";
$tdatahechos_delictivos12[".masterListFields"][] = "aÑo_hecho";
$tdatahechos_delictivos12[".masterListFields"][] = "edad_victima";
$tdatahechos_delictivos12[".masterListFields"][] = "ran_eta_vic";
$tdatahechos_delictivos12[".masterListFields"][] = "s_victima";
$tdatahechos_delictivos12[".masterListFields"][] = "oc_victima";
$tdatahechos_delictivos12[".masterListFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos12[".masterListFields"][] = "edad_agresor";
$tdatahechos_delictivos12[".masterListFields"][] = "sexo_agresor";
$tdatahechos_delictivos12[".masterListFields"][] = "ocupa_agresor";
$tdatahechos_delictivos12[".masterListFields"][] = "tipo_arma";
$tdatahechos_delictivos12[".masterListFields"][] = "canton_hecho";
$tdatahechos_delictivos12[".masterListFields"][] = "colonia_hecho";
$tdatahechos_delictivos12[".masterListFields"][] = "caserio_hecho";
$tdatahechos_delictivos12[".masterListFields"][] = "calle_hecho";
$tdatahechos_delictivos12[".masterListFields"][] = "avenida_hecho";
$tdatahechos_delictivos12[".masterListFields"][] = "casa_hecho";
$tdatahechos_delictivos12[".masterListFields"][] = "com_hecho";
$tdatahechos_delictivos12[".masterListFields"][] = "barrio_hecho";
$tdatahechos_delictivos12[".masterListFields"][] = "comp_hecho";
$tdatahechos_delictivos12[".masterListFields"][] = "sector_ppd";
$tdatahechos_delictivos12[".masterListFields"][] = "mes_corre";
$tdatahechos_delictivos12[".masterListFields"][] = "arma_analisis";
$tdatahechos_delictivos12[".masterListFields"][] = "movil_he";
$tdatahechos_delictivos12[".masterListFields"][] = "ocupa_analisis";
$tdatahechos_delictivos12[".masterListFields"][] = "rel_vic_ag_anali";

$tdatahechos_delictivos12[".inlineAddFields"] = array();
$tdatahechos_delictivos12[".inlineAddFields"][] = "id1";
$tdatahechos_delictivos12[".inlineAddFields"][] = "correlativo";
$tdatahechos_delictivos12[".inlineAddFields"][] = "numero";
$tdatahechos_delictivos12[".inlineAddFields"][] = "id";
$tdatahechos_delictivos12[".inlineAddFields"][] = "numero2";
$tdatahechos_delictivos12[".inlineAddFields"][] = "lugaranalisis";
$tdatahechos_delictivos12[".inlineAddFields"][] = "area";
$tdatahechos_delictivos12[".inlineAddFields"][] = "delito";
$tdatahechos_delictivos12[".inlineAddFields"][] = "hora_hecho";
$tdatahechos_delictivos12[".inlineAddFields"][] = "rango_hora";
$tdatahechos_delictivos12[".inlineAddFields"][] = "movil";
$tdatahechos_delictivos12[".inlineAddFields"][] = "tipo";
$tdatahechos_delictivos12[".inlineAddFields"][] = "nombre";
$tdatahechos_delictivos12[".inlineAddFields"][] = "x";
$tdatahechos_delictivos12[".inlineAddFields"][] = "y";
$tdatahechos_delictivos12[".inlineAddFields"][] = "correlativo1";
$tdatahechos_delictivos12[".inlineAddFields"][] = "codigo_muni";
$tdatahechos_delictivos12[".inlineAddFields"][] = "depart_he";
$tdatahechos_delictivos12[".inlineAddFields"][] = "muni_he";
$tdatahechos_delictivos12[".inlineAddFields"][] = "dire_hecho";
$tdatahechos_delictivos12[".inlineAddFields"][] = "lugar_esp";
$tdatahechos_delictivos12[".inlineAddFields"][] = "forma_cono";
$tdatahechos_delictivos12[".inlineAddFields"][] = "delito_espe";
$tdatahechos_delictivos12[".inlineAddFields"][] = "dia_hecho";
$tdatahechos_delictivos12[".inlineAddFields"][] = "fecha_hecho";
$tdatahechos_delictivos12[".inlineAddFields"][] = "mes_hecho";
$tdatahechos_delictivos12[".inlineAddFields"][] = "aÑo_hecho";
$tdatahechos_delictivos12[".inlineAddFields"][] = "edad_victima";
$tdatahechos_delictivos12[".inlineAddFields"][] = "ran_eta_vic";
$tdatahechos_delictivos12[".inlineAddFields"][] = "s_victima";
$tdatahechos_delictivos12[".inlineAddFields"][] = "oc_victima";
$tdatahechos_delictivos12[".inlineAddFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos12[".inlineAddFields"][] = "edad_agresor";
$tdatahechos_delictivos12[".inlineAddFields"][] = "sexo_agresor";
$tdatahechos_delictivos12[".inlineAddFields"][] = "ocupa_agresor";
$tdatahechos_delictivos12[".inlineAddFields"][] = "tipo_arma";
$tdatahechos_delictivos12[".inlineAddFields"][] = "canton_hecho";
$tdatahechos_delictivos12[".inlineAddFields"][] = "colonia_hecho";
$tdatahechos_delictivos12[".inlineAddFields"][] = "caserio_hecho";
$tdatahechos_delictivos12[".inlineAddFields"][] = "calle_hecho";
$tdatahechos_delictivos12[".inlineAddFields"][] = "avenida_hecho";
$tdatahechos_delictivos12[".inlineAddFields"][] = "casa_hecho";
$tdatahechos_delictivos12[".inlineAddFields"][] = "com_hecho";
$tdatahechos_delictivos12[".inlineAddFields"][] = "barrio_hecho";
$tdatahechos_delictivos12[".inlineAddFields"][] = "comp_hecho";
$tdatahechos_delictivos12[".inlineAddFields"][] = "sector_ppd";
$tdatahechos_delictivos12[".inlineAddFields"][] = "mes_corre";
$tdatahechos_delictivos12[".inlineAddFields"][] = "arma_analisis";
$tdatahechos_delictivos12[".inlineAddFields"][] = "movil_he";
$tdatahechos_delictivos12[".inlineAddFields"][] = "ocupa_analisis";
$tdatahechos_delictivos12[".inlineAddFields"][] = "rel_vic_ag_anali";

$tdatahechos_delictivos12[".editFields"] = array();
$tdatahechos_delictivos12[".editFields"][] = "id1";
$tdatahechos_delictivos12[".editFields"][] = "correlativo";
$tdatahechos_delictivos12[".editFields"][] = "numero";
$tdatahechos_delictivos12[".editFields"][] = "id";
$tdatahechos_delictivos12[".editFields"][] = "numero2";
$tdatahechos_delictivos12[".editFields"][] = "lugaranalisis";
$tdatahechos_delictivos12[".editFields"][] = "area";
$tdatahechos_delictivos12[".editFields"][] = "delito";
$tdatahechos_delictivos12[".editFields"][] = "hora_hecho";
$tdatahechos_delictivos12[".editFields"][] = "rango_hora";
$tdatahechos_delictivos12[".editFields"][] = "movil";
$tdatahechos_delictivos12[".editFields"][] = "tipo";
$tdatahechos_delictivos12[".editFields"][] = "nombre";
$tdatahechos_delictivos12[".editFields"][] = "x";
$tdatahechos_delictivos12[".editFields"][] = "y";
$tdatahechos_delictivos12[".editFields"][] = "correlativo1";
$tdatahechos_delictivos12[".editFields"][] = "codigo_muni";
$tdatahechos_delictivos12[".editFields"][] = "depart_he";
$tdatahechos_delictivos12[".editFields"][] = "muni_he";
$tdatahechos_delictivos12[".editFields"][] = "dire_hecho";
$tdatahechos_delictivos12[".editFields"][] = "lugar_esp";
$tdatahechos_delictivos12[".editFields"][] = "forma_cono";
$tdatahechos_delictivos12[".editFields"][] = "delito_espe";
$tdatahechos_delictivos12[".editFields"][] = "dia_hecho";
$tdatahechos_delictivos12[".editFields"][] = "fecha_hecho";
$tdatahechos_delictivos12[".editFields"][] = "mes_hecho";
$tdatahechos_delictivos12[".editFields"][] = "aÑo_hecho";
$tdatahechos_delictivos12[".editFields"][] = "edad_victima";
$tdatahechos_delictivos12[".editFields"][] = "ran_eta_vic";
$tdatahechos_delictivos12[".editFields"][] = "s_victima";
$tdatahechos_delictivos12[".editFields"][] = "oc_victima";
$tdatahechos_delictivos12[".editFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos12[".editFields"][] = "edad_agresor";
$tdatahechos_delictivos12[".editFields"][] = "sexo_agresor";
$tdatahechos_delictivos12[".editFields"][] = "ocupa_agresor";
$tdatahechos_delictivos12[".editFields"][] = "tipo_arma";
$tdatahechos_delictivos12[".editFields"][] = "canton_hecho";
$tdatahechos_delictivos12[".editFields"][] = "colonia_hecho";
$tdatahechos_delictivos12[".editFields"][] = "caserio_hecho";
$tdatahechos_delictivos12[".editFields"][] = "calle_hecho";
$tdatahechos_delictivos12[".editFields"][] = "avenida_hecho";
$tdatahechos_delictivos12[".editFields"][] = "casa_hecho";
$tdatahechos_delictivos12[".editFields"][] = "com_hecho";
$tdatahechos_delictivos12[".editFields"][] = "barrio_hecho";
$tdatahechos_delictivos12[".editFields"][] = "comp_hecho";
$tdatahechos_delictivos12[".editFields"][] = "sector_ppd";
$tdatahechos_delictivos12[".editFields"][] = "mes_corre";
$tdatahechos_delictivos12[".editFields"][] = "arma_analisis";
$tdatahechos_delictivos12[".editFields"][] = "movil_he";
$tdatahechos_delictivos12[".editFields"][] = "ocupa_analisis";
$tdatahechos_delictivos12[".editFields"][] = "rel_vic_ag_anali";

$tdatahechos_delictivos12[".inlineEditFields"] = array();
$tdatahechos_delictivos12[".inlineEditFields"][] = "id1";
$tdatahechos_delictivos12[".inlineEditFields"][] = "correlativo";
$tdatahechos_delictivos12[".inlineEditFields"][] = "numero";
$tdatahechos_delictivos12[".inlineEditFields"][] = "id";
$tdatahechos_delictivos12[".inlineEditFields"][] = "numero2";
$tdatahechos_delictivos12[".inlineEditFields"][] = "lugaranalisis";
$tdatahechos_delictivos12[".inlineEditFields"][] = "area";
$tdatahechos_delictivos12[".inlineEditFields"][] = "delito";
$tdatahechos_delictivos12[".inlineEditFields"][] = "hora_hecho";
$tdatahechos_delictivos12[".inlineEditFields"][] = "rango_hora";
$tdatahechos_delictivos12[".inlineEditFields"][] = "movil";
$tdatahechos_delictivos12[".inlineEditFields"][] = "tipo";
$tdatahechos_delictivos12[".inlineEditFields"][] = "nombre";
$tdatahechos_delictivos12[".inlineEditFields"][] = "x";
$tdatahechos_delictivos12[".inlineEditFields"][] = "y";
$tdatahechos_delictivos12[".inlineEditFields"][] = "correlativo1";
$tdatahechos_delictivos12[".inlineEditFields"][] = "codigo_muni";
$tdatahechos_delictivos12[".inlineEditFields"][] = "depart_he";
$tdatahechos_delictivos12[".inlineEditFields"][] = "muni_he";
$tdatahechos_delictivos12[".inlineEditFields"][] = "dire_hecho";
$tdatahechos_delictivos12[".inlineEditFields"][] = "lugar_esp";
$tdatahechos_delictivos12[".inlineEditFields"][] = "forma_cono";
$tdatahechos_delictivos12[".inlineEditFields"][] = "delito_espe";
$tdatahechos_delictivos12[".inlineEditFields"][] = "dia_hecho";
$tdatahechos_delictivos12[".inlineEditFields"][] = "fecha_hecho";
$tdatahechos_delictivos12[".inlineEditFields"][] = "mes_hecho";
$tdatahechos_delictivos12[".inlineEditFields"][] = "aÑo_hecho";
$tdatahechos_delictivos12[".inlineEditFields"][] = "edad_victima";
$tdatahechos_delictivos12[".inlineEditFields"][] = "ran_eta_vic";
$tdatahechos_delictivos12[".inlineEditFields"][] = "s_victima";
$tdatahechos_delictivos12[".inlineEditFields"][] = "oc_victima";
$tdatahechos_delictivos12[".inlineEditFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos12[".inlineEditFields"][] = "edad_agresor";
$tdatahechos_delictivos12[".inlineEditFields"][] = "sexo_agresor";
$tdatahechos_delictivos12[".inlineEditFields"][] = "ocupa_agresor";
$tdatahechos_delictivos12[".inlineEditFields"][] = "tipo_arma";
$tdatahechos_delictivos12[".inlineEditFields"][] = "canton_hecho";
$tdatahechos_delictivos12[".inlineEditFields"][] = "colonia_hecho";
$tdatahechos_delictivos12[".inlineEditFields"][] = "caserio_hecho";
$tdatahechos_delictivos12[".inlineEditFields"][] = "calle_hecho";
$tdatahechos_delictivos12[".inlineEditFields"][] = "avenida_hecho";
$tdatahechos_delictivos12[".inlineEditFields"][] = "casa_hecho";
$tdatahechos_delictivos12[".inlineEditFields"][] = "com_hecho";
$tdatahechos_delictivos12[".inlineEditFields"][] = "barrio_hecho";
$tdatahechos_delictivos12[".inlineEditFields"][] = "comp_hecho";
$tdatahechos_delictivos12[".inlineEditFields"][] = "sector_ppd";
$tdatahechos_delictivos12[".inlineEditFields"][] = "mes_corre";
$tdatahechos_delictivos12[".inlineEditFields"][] = "arma_analisis";
$tdatahechos_delictivos12[".inlineEditFields"][] = "movil_he";
$tdatahechos_delictivos12[".inlineEditFields"][] = "ocupa_analisis";
$tdatahechos_delictivos12[".inlineEditFields"][] = "rel_vic_ag_anali";

$tdatahechos_delictivos12[".updateSelectedFields"] = array();
$tdatahechos_delictivos12[".updateSelectedFields"][] = "id1";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "correlativo";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "numero";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "id";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "numero2";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "lugaranalisis";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "area";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "delito";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "hora_hecho";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "rango_hora";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "movil";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "tipo";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "nombre";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "x";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "y";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "correlativo1";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "codigo_muni";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "depart_he";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "muni_he";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "dire_hecho";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "lugar_esp";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "forma_cono";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "delito_espe";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "dia_hecho";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "fecha_hecho";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "mes_hecho";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "aÑo_hecho";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "edad_victima";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "ran_eta_vic";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "s_victima";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "oc_victima";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "edad_agresor";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "sexo_agresor";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "ocupa_agresor";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "tipo_arma";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "canton_hecho";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "colonia_hecho";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "caserio_hecho";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "calle_hecho";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "avenida_hecho";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "casa_hecho";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "com_hecho";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "barrio_hecho";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "comp_hecho";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "sector_ppd";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "mes_corre";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "arma_analisis";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "movil_he";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "ocupa_analisis";
$tdatahechos_delictivos12[".updateSelectedFields"][] = "rel_vic_ag_anali";


$tdatahechos_delictivos12[".exportFields"] = array();
$tdatahechos_delictivos12[".exportFields"][] = "id1";
$tdatahechos_delictivos12[".exportFields"][] = "correlativo";
$tdatahechos_delictivos12[".exportFields"][] = "numero";
$tdatahechos_delictivos12[".exportFields"][] = "id";
$tdatahechos_delictivos12[".exportFields"][] = "numero2";
$tdatahechos_delictivos12[".exportFields"][] = "lugaranalisis";
$tdatahechos_delictivos12[".exportFields"][] = "area";
$tdatahechos_delictivos12[".exportFields"][] = "delito";
$tdatahechos_delictivos12[".exportFields"][] = "hora_hecho";
$tdatahechos_delictivos12[".exportFields"][] = "rango_hora";
$tdatahechos_delictivos12[".exportFields"][] = "movil";
$tdatahechos_delictivos12[".exportFields"][] = "tipo";
$tdatahechos_delictivos12[".exportFields"][] = "nombre";
$tdatahechos_delictivos12[".exportFields"][] = "x";
$tdatahechos_delictivos12[".exportFields"][] = "y";
$tdatahechos_delictivos12[".exportFields"][] = "correlativo1";
$tdatahechos_delictivos12[".exportFields"][] = "codigo_muni";
$tdatahechos_delictivos12[".exportFields"][] = "depart_he";
$tdatahechos_delictivos12[".exportFields"][] = "muni_he";
$tdatahechos_delictivos12[".exportFields"][] = "dire_hecho";
$tdatahechos_delictivos12[".exportFields"][] = "lugar_esp";
$tdatahechos_delictivos12[".exportFields"][] = "forma_cono";
$tdatahechos_delictivos12[".exportFields"][] = "delito_espe";
$tdatahechos_delictivos12[".exportFields"][] = "dia_hecho";
$tdatahechos_delictivos12[".exportFields"][] = "fecha_hecho";
$tdatahechos_delictivos12[".exportFields"][] = "mes_hecho";
$tdatahechos_delictivos12[".exportFields"][] = "aÑo_hecho";
$tdatahechos_delictivos12[".exportFields"][] = "edad_victima";
$tdatahechos_delictivos12[".exportFields"][] = "ran_eta_vic";
$tdatahechos_delictivos12[".exportFields"][] = "s_victima";
$tdatahechos_delictivos12[".exportFields"][] = "oc_victima";
$tdatahechos_delictivos12[".exportFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos12[".exportFields"][] = "edad_agresor";
$tdatahechos_delictivos12[".exportFields"][] = "sexo_agresor";
$tdatahechos_delictivos12[".exportFields"][] = "ocupa_agresor";
$tdatahechos_delictivos12[".exportFields"][] = "tipo_arma";
$tdatahechos_delictivos12[".exportFields"][] = "canton_hecho";
$tdatahechos_delictivos12[".exportFields"][] = "colonia_hecho";
$tdatahechos_delictivos12[".exportFields"][] = "caserio_hecho";
$tdatahechos_delictivos12[".exportFields"][] = "calle_hecho";
$tdatahechos_delictivos12[".exportFields"][] = "avenida_hecho";
$tdatahechos_delictivos12[".exportFields"][] = "casa_hecho";
$tdatahechos_delictivos12[".exportFields"][] = "com_hecho";
$tdatahechos_delictivos12[".exportFields"][] = "barrio_hecho";
$tdatahechos_delictivos12[".exportFields"][] = "comp_hecho";
$tdatahechos_delictivos12[".exportFields"][] = "sector_ppd";
$tdatahechos_delictivos12[".exportFields"][] = "mes_corre";
$tdatahechos_delictivos12[".exportFields"][] = "arma_analisis";
$tdatahechos_delictivos12[".exportFields"][] = "movil_he";
$tdatahechos_delictivos12[".exportFields"][] = "ocupa_analisis";
$tdatahechos_delictivos12[".exportFields"][] = "rel_vic_ag_anali";

$tdatahechos_delictivos12[".importFields"] = array();
$tdatahechos_delictivos12[".importFields"][] = "id1";
$tdatahechos_delictivos12[".importFields"][] = "correlativo";
$tdatahechos_delictivos12[".importFields"][] = "numero";
$tdatahechos_delictivos12[".importFields"][] = "id";
$tdatahechos_delictivos12[".importFields"][] = "numero2";
$tdatahechos_delictivos12[".importFields"][] = "lugaranalisis";
$tdatahechos_delictivos12[".importFields"][] = "area";
$tdatahechos_delictivos12[".importFields"][] = "delito";
$tdatahechos_delictivos12[".importFields"][] = "hora_hecho";
$tdatahechos_delictivos12[".importFields"][] = "rango_hora";
$tdatahechos_delictivos12[".importFields"][] = "movil";
$tdatahechos_delictivos12[".importFields"][] = "tipo";
$tdatahechos_delictivos12[".importFields"][] = "nombre";
$tdatahechos_delictivos12[".importFields"][] = "x";
$tdatahechos_delictivos12[".importFields"][] = "y";
$tdatahechos_delictivos12[".importFields"][] = "correlativo1";
$tdatahechos_delictivos12[".importFields"][] = "codigo_muni";
$tdatahechos_delictivos12[".importFields"][] = "depart_he";
$tdatahechos_delictivos12[".importFields"][] = "muni_he";
$tdatahechos_delictivos12[".importFields"][] = "dire_hecho";
$tdatahechos_delictivos12[".importFields"][] = "lugar_esp";
$tdatahechos_delictivos12[".importFields"][] = "forma_cono";
$tdatahechos_delictivos12[".importFields"][] = "delito_espe";
$tdatahechos_delictivos12[".importFields"][] = "dia_hecho";
$tdatahechos_delictivos12[".importFields"][] = "fecha_hecho";
$tdatahechos_delictivos12[".importFields"][] = "mes_hecho";
$tdatahechos_delictivos12[".importFields"][] = "aÑo_hecho";
$tdatahechos_delictivos12[".importFields"][] = "edad_victima";
$tdatahechos_delictivos12[".importFields"][] = "ran_eta_vic";
$tdatahechos_delictivos12[".importFields"][] = "s_victima";
$tdatahechos_delictivos12[".importFields"][] = "oc_victima";
$tdatahechos_delictivos12[".importFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos12[".importFields"][] = "edad_agresor";
$tdatahechos_delictivos12[".importFields"][] = "sexo_agresor";
$tdatahechos_delictivos12[".importFields"][] = "ocupa_agresor";
$tdatahechos_delictivos12[".importFields"][] = "tipo_arma";
$tdatahechos_delictivos12[".importFields"][] = "canton_hecho";
$tdatahechos_delictivos12[".importFields"][] = "colonia_hecho";
$tdatahechos_delictivos12[".importFields"][] = "caserio_hecho";
$tdatahechos_delictivos12[".importFields"][] = "calle_hecho";
$tdatahechos_delictivos12[".importFields"][] = "avenida_hecho";
$tdatahechos_delictivos12[".importFields"][] = "casa_hecho";
$tdatahechos_delictivos12[".importFields"][] = "com_hecho";
$tdatahechos_delictivos12[".importFields"][] = "barrio_hecho";
$tdatahechos_delictivos12[".importFields"][] = "comp_hecho";
$tdatahechos_delictivos12[".importFields"][] = "sector_ppd";
$tdatahechos_delictivos12[".importFields"][] = "mes_corre";
$tdatahechos_delictivos12[".importFields"][] = "arma_analisis";
$tdatahechos_delictivos12[".importFields"][] = "movil_he";
$tdatahechos_delictivos12[".importFields"][] = "ocupa_analisis";
$tdatahechos_delictivos12[".importFields"][] = "rel_vic_ag_anali";

$tdatahechos_delictivos12[".printFields"] = array();
$tdatahechos_delictivos12[".printFields"][] = "id1";
$tdatahechos_delictivos12[".printFields"][] = "correlativo";
$tdatahechos_delictivos12[".printFields"][] = "numero";
$tdatahechos_delictivos12[".printFields"][] = "id";
$tdatahechos_delictivos12[".printFields"][] = "numero2";
$tdatahechos_delictivos12[".printFields"][] = "lugaranalisis";
$tdatahechos_delictivos12[".printFields"][] = "area";
$tdatahechos_delictivos12[".printFields"][] = "delito";
$tdatahechos_delictivos12[".printFields"][] = "hora_hecho";
$tdatahechos_delictivos12[".printFields"][] = "rango_hora";
$tdatahechos_delictivos12[".printFields"][] = "movil";
$tdatahechos_delictivos12[".printFields"][] = "tipo";
$tdatahechos_delictivos12[".printFields"][] = "nombre";
$tdatahechos_delictivos12[".printFields"][] = "x";
$tdatahechos_delictivos12[".printFields"][] = "y";
$tdatahechos_delictivos12[".printFields"][] = "correlativo1";
$tdatahechos_delictivos12[".printFields"][] = "codigo_muni";
$tdatahechos_delictivos12[".printFields"][] = "depart_he";
$tdatahechos_delictivos12[".printFields"][] = "muni_he";
$tdatahechos_delictivos12[".printFields"][] = "dire_hecho";
$tdatahechos_delictivos12[".printFields"][] = "lugar_esp";
$tdatahechos_delictivos12[".printFields"][] = "forma_cono";
$tdatahechos_delictivos12[".printFields"][] = "delito_espe";
$tdatahechos_delictivos12[".printFields"][] = "dia_hecho";
$tdatahechos_delictivos12[".printFields"][] = "fecha_hecho";
$tdatahechos_delictivos12[".printFields"][] = "mes_hecho";
$tdatahechos_delictivos12[".printFields"][] = "aÑo_hecho";
$tdatahechos_delictivos12[".printFields"][] = "edad_victima";
$tdatahechos_delictivos12[".printFields"][] = "ran_eta_vic";
$tdatahechos_delictivos12[".printFields"][] = "s_victima";
$tdatahechos_delictivos12[".printFields"][] = "oc_victima";
$tdatahechos_delictivos12[".printFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos12[".printFields"][] = "edad_agresor";
$tdatahechos_delictivos12[".printFields"][] = "sexo_agresor";
$tdatahechos_delictivos12[".printFields"][] = "ocupa_agresor";
$tdatahechos_delictivos12[".printFields"][] = "tipo_arma";
$tdatahechos_delictivos12[".printFields"][] = "canton_hecho";
$tdatahechos_delictivos12[".printFields"][] = "colonia_hecho";
$tdatahechos_delictivos12[".printFields"][] = "caserio_hecho";
$tdatahechos_delictivos12[".printFields"][] = "calle_hecho";
$tdatahechos_delictivos12[".printFields"][] = "avenida_hecho";
$tdatahechos_delictivos12[".printFields"][] = "casa_hecho";
$tdatahechos_delictivos12[".printFields"][] = "com_hecho";
$tdatahechos_delictivos12[".printFields"][] = "barrio_hecho";
$tdatahechos_delictivos12[".printFields"][] = "comp_hecho";
$tdatahechos_delictivos12[".printFields"][] = "sector_ppd";
$tdatahechos_delictivos12[".printFields"][] = "mes_corre";
$tdatahechos_delictivos12[".printFields"][] = "arma_analisis";
$tdatahechos_delictivos12[".printFields"][] = "movil_he";
$tdatahechos_delictivos12[".printFields"][] = "ocupa_analisis";
$tdatahechos_delictivos12[".printFields"][] = "rel_vic_ag_anali";

//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id1";
	$fdata["GoodName"] = "id1";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","id1");
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
	$fdata["FullName"] = "hechos_delictivos1.id1";

	
	
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




	$tdatahechos_delictivos12["id1"] = $fdata;
//	correlativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "correlativo";
	$fdata["GoodName"] = "correlativo";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","correlativo");
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
	$fdata["FullName"] = "hechos_delictivos1.correlativo";

	
	
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




	$tdatahechos_delictivos12["correlativo"] = $fdata;
//	numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "numero";
	$fdata["GoodName"] = "numero";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","numero");
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
	$fdata["FullName"] = "hechos_delictivos1.numero";

	
	
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




	$tdatahechos_delictivos12["numero"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","id");
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
	$fdata["FullName"] = "hechos_delictivos1.id";

	
	
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




	$tdatahechos_delictivos12["id"] = $fdata;
//	numero2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "numero2";
	$fdata["GoodName"] = "numero2";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","numero2");
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
	$fdata["FullName"] = "hechos_delictivos1.numero2";

	
	
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




	$tdatahechos_delictivos12["numero2"] = $fdata;
//	lugaranalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "lugaranalisis";
	$fdata["GoodName"] = "lugaranalisis";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","lugaranalisis");
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
	$fdata["FullName"] = "hechos_delictivos1.lugaranalisis";

	
	
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




	$tdatahechos_delictivos12["lugaranalisis"] = $fdata;
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","area");
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
	$fdata["FullName"] = "hechos_delictivos1.area";

	
	
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




	$tdatahechos_delictivos12["area"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","delito");
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
	$fdata["FullName"] = "hechos_delictivos1.delito";

	
	
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




	$tdatahechos_delictivos12["delito"] = $fdata;
//	hora_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "hora_hecho";
	$fdata["GoodName"] = "hora_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","hora_hecho");
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
	$fdata["FullName"] = "hechos_delictivos1.hora_hecho";

	
	
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




	$tdatahechos_delictivos12["hora_hecho"] = $fdata;
//	rango_hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rango_hora";
	$fdata["GoodName"] = "rango_hora";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","rango_hora");
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
	$fdata["FullName"] = "hechos_delictivos1.rango_hora";

	
	
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




	$tdatahechos_delictivos12["rango_hora"] = $fdata;
//	movil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "movil";
	$fdata["GoodName"] = "movil";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","movil");
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
	$fdata["FullName"] = "hechos_delictivos1.movil";

	
	
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




	$tdatahechos_delictivos12["movil"] = $fdata;
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","tipo");
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
	$fdata["FullName"] = "hechos_delictivos1.tipo";

	
	
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




	$tdatahechos_delictivos12["tipo"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","nombre");
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
	$fdata["FullName"] = "hechos_delictivos1.nombre";

	
	
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




	$tdatahechos_delictivos12["nombre"] = $fdata;
//	x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "x";
	$fdata["GoodName"] = "x";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","x");
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
	$fdata["FullName"] = "hechos_delictivos1.x";

	
	
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




	$tdatahechos_delictivos12["x"] = $fdata;
//	y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "y";
	$fdata["GoodName"] = "y";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","y");
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
	$fdata["FullName"] = "hechos_delictivos1.y";

	
	
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




	$tdatahechos_delictivos12["y"] = $fdata;
//	correlativo1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "correlativo1";
	$fdata["GoodName"] = "correlativo1";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","correlativo1");
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

		$fdata["strField"] = "correlativo1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hechos_delictivos1.correlativo1";

	
	
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




	$tdatahechos_delictivos12["correlativo1"] = $fdata;
//	codigo_muni
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "codigo_muni";
	$fdata["GoodName"] = "codigo_muni";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","codigo_muni");
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
	$fdata["FullName"] = "hechos_delictivos1.codigo_muni";

	
	
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




	$tdatahechos_delictivos12["codigo_muni"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","depart_he");
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
	$fdata["FullName"] = "hechos_delictivos1.depart_he";

	
	
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




	$tdatahechos_delictivos12["depart_he"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","muni_he");
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
	$fdata["FullName"] = "hechos_delictivos1.muni_he";

	
	
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




	$tdatahechos_delictivos12["muni_he"] = $fdata;
//	dire_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "dire_hecho";
	$fdata["GoodName"] = "dire_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","dire_hecho");
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
	$fdata["FullName"] = "hechos_delictivos1.dire_hecho";

	
	
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




	$tdatahechos_delictivos12["dire_hecho"] = $fdata;
//	lugar_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "lugar_esp";
	$fdata["GoodName"] = "lugar_esp";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","lugar_esp");
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
	$fdata["FullName"] = "hechos_delictivos1.lugar_esp";

	
	
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




	$tdatahechos_delictivos12["lugar_esp"] = $fdata;
//	forma_cono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "forma_cono";
	$fdata["GoodName"] = "forma_cono";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","forma_cono");
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
	$fdata["FullName"] = "hechos_delictivos1.forma_cono";

	
	
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




	$tdatahechos_delictivos12["forma_cono"] = $fdata;
//	delito_espe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "delito_espe";
	$fdata["GoodName"] = "delito_espe";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","delito_espe");
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
	$fdata["FullName"] = "hechos_delictivos1.delito_espe";

	
	
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




	$tdatahechos_delictivos12["delito_espe"] = $fdata;
//	dia_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "dia_hecho";
	$fdata["GoodName"] = "dia_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","dia_hecho");
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
	$fdata["FullName"] = "hechos_delictivos1.dia_hecho";

	
	
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




	$tdatahechos_delictivos12["dia_hecho"] = $fdata;
//	fecha_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "fecha_hecho";
	$fdata["GoodName"] = "fecha_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","fecha_hecho");
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
	$fdata["FullName"] = "hechos_delictivos1.fecha_hecho";

	
	
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




	$tdatahechos_delictivos12["fecha_hecho"] = $fdata;
//	mes_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "mes_hecho";
	$fdata["GoodName"] = "mes_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","mes_hecho");
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
	$fdata["FullName"] = "hechos_delictivos1.mes_hecho";

	
	
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




	$tdatahechos_delictivos12["mes_hecho"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","a_o_hecho");
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
	$fdata["FullName"] = "hechos_delictivos1.`aÑo_hecho`";

	
	
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




	$tdatahechos_delictivos12["aÑo_hecho"] = $fdata;
//	edad_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "edad_victima";
	$fdata["GoodName"] = "edad_victima";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","edad_victima");
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
	$fdata["FullName"] = "hechos_delictivos1.edad_victima";

	
	
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




	$tdatahechos_delictivos12["edad_victima"] = $fdata;
//	ran_eta_vic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "ran_eta_vic";
	$fdata["GoodName"] = "ran_eta_vic";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","ran_eta_vic");
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
	$fdata["FullName"] = "hechos_delictivos1.ran_eta_vic";

	
	
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




	$tdatahechos_delictivos12["ran_eta_vic"] = $fdata;
//	s_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "s_victima";
	$fdata["GoodName"] = "s_victima";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","s_victima");
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
	$fdata["FullName"] = "hechos_delictivos1.s_victima";

	
	
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




	$tdatahechos_delictivos12["s_victima"] = $fdata;
//	oc_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "oc_victima";
	$fdata["GoodName"] = "oc_victima";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","oc_victima");
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
	$fdata["FullName"] = "hechos_delictivos1.oc_victima";

	
	
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




	$tdatahechos_delictivos12["oc_victima"] = $fdata;
//	relacion_vi_agre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "relacion_vi_agre";
	$fdata["GoodName"] = "relacion_vi_agre";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","relacion_vi_agre");
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
	$fdata["FullName"] = "hechos_delictivos1.relacion_vi_agre";

	
	
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




	$tdatahechos_delictivos12["relacion_vi_agre"] = $fdata;
//	edad_agresor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "edad_agresor";
	$fdata["GoodName"] = "edad_agresor";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","edad_agresor");
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
	$fdata["FullName"] = "hechos_delictivos1.edad_agresor";

	
	
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




	$tdatahechos_delictivos12["edad_agresor"] = $fdata;
//	sexo_agresor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "sexo_agresor";
	$fdata["GoodName"] = "sexo_agresor";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","sexo_agresor");
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
	$fdata["FullName"] = "hechos_delictivos1.sexo_agresor";

	
	
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




	$tdatahechos_delictivos12["sexo_agresor"] = $fdata;
//	ocupa_agresor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "ocupa_agresor";
	$fdata["GoodName"] = "ocupa_agresor";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","ocupa_agresor");
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
	$fdata["FullName"] = "hechos_delictivos1.ocupa_agresor";

	
	
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




	$tdatahechos_delictivos12["ocupa_agresor"] = $fdata;
//	tipo_arma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "tipo_arma";
	$fdata["GoodName"] = "tipo_arma";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","tipo_arma");
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
	$fdata["FullName"] = "hechos_delictivos1.tipo_arma";

	
	
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




	$tdatahechos_delictivos12["tipo_arma"] = $fdata;
//	canton_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "canton_hecho";
	$fdata["GoodName"] = "canton_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","canton_hecho");
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
	$fdata["FullName"] = "hechos_delictivos1.canton_hecho";

	
	
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




	$tdatahechos_delictivos12["canton_hecho"] = $fdata;
//	colonia_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "colonia_hecho";
	$fdata["GoodName"] = "colonia_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","colonia_hecho");
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
	$fdata["FullName"] = "hechos_delictivos1.colonia_hecho";

	
	
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




	$tdatahechos_delictivos12["colonia_hecho"] = $fdata;
//	caserio_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "caserio_hecho";
	$fdata["GoodName"] = "caserio_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","caserio_hecho");
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
	$fdata["FullName"] = "hechos_delictivos1.caserio_hecho";

	
	
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




	$tdatahechos_delictivos12["caserio_hecho"] = $fdata;
//	calle_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "calle_hecho";
	$fdata["GoodName"] = "calle_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","calle_hecho");
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
	$fdata["FullName"] = "hechos_delictivos1.calle_hecho";

	
	
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




	$tdatahechos_delictivos12["calle_hecho"] = $fdata;
//	avenida_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "avenida_hecho";
	$fdata["GoodName"] = "avenida_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","avenida_hecho");
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
	$fdata["FullName"] = "hechos_delictivos1.avenida_hecho";

	
	
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




	$tdatahechos_delictivos12["avenida_hecho"] = $fdata;
//	casa_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "casa_hecho";
	$fdata["GoodName"] = "casa_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","casa_hecho");
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
	$fdata["FullName"] = "hechos_delictivos1.casa_hecho";

	
	
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




	$tdatahechos_delictivos12["casa_hecho"] = $fdata;
//	com_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "com_hecho";
	$fdata["GoodName"] = "com_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","com_hecho");
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
	$fdata["FullName"] = "hechos_delictivos1.com_hecho";

	
	
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




	$tdatahechos_delictivos12["com_hecho"] = $fdata;
//	barrio_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "barrio_hecho";
	$fdata["GoodName"] = "barrio_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","barrio_hecho");
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
	$fdata["FullName"] = "hechos_delictivos1.barrio_hecho";

	
	
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




	$tdatahechos_delictivos12["barrio_hecho"] = $fdata;
//	comp_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "comp_hecho";
	$fdata["GoodName"] = "comp_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","comp_hecho");
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
	$fdata["FullName"] = "hechos_delictivos1.comp_hecho";

	
	
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




	$tdatahechos_delictivos12["comp_hecho"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","sector_ppd");
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
	$fdata["FullName"] = "hechos_delictivos1.sector_ppd";

	
	
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




	$tdatahechos_delictivos12["sector_ppd"] = $fdata;
//	mes_corre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "mes_corre";
	$fdata["GoodName"] = "mes_corre";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","mes_corre");
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
	$fdata["FullName"] = "hechos_delictivos1.mes_corre";

	
	
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




	$tdatahechos_delictivos12["mes_corre"] = $fdata;
//	arma_analisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "arma_analisis";
	$fdata["GoodName"] = "arma_analisis";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","arma_analisis");
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

		$fdata["strField"] = "arma_analisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hechos_delictivos1.arma_analisis";

	
	
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




	$tdatahechos_delictivos12["arma_analisis"] = $fdata;
//	movil_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "movil_he";
	$fdata["GoodName"] = "movil_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","movil_he");
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

		$fdata["strField"] = "movil_he";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hechos_delictivos1.movil_he";

	
	
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




	$tdatahechos_delictivos12["movil_he"] = $fdata;
//	ocupa_analisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "ocupa_analisis";
	$fdata["GoodName"] = "ocupa_analisis";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","ocupa_analisis");
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

		$fdata["strField"] = "ocupa_analisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hechos_delictivos1.ocupa_analisis";

	
	
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




	$tdatahechos_delictivos12["ocupa_analisis"] = $fdata;
//	rel_vic_ag_anali
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "rel_vic_ag_anali";
	$fdata["GoodName"] = "rel_vic_ag_anali";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos12","rel_vic_ag_anali");
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

		$fdata["strField"] = "rel_vic_ag_anali";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hechos_delictivos1.rel_vic_ag_anali";

	
	
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




	$tdatahechos_delictivos12["rel_vic_ag_anali"] = $fdata;


$tables_data["hechos_delictivos12"]=&$tdatahechos_delictivos12;
$field_labels["hechos_delictivos12"] = &$fieldLabelshechos_delictivos12;
$fieldToolTips["hechos_delictivos12"] = &$fieldToolTipshechos_delictivos12;
$placeHolders["hechos_delictivos12"] = &$placeHoldershechos_delictivos12;
$page_titles["hechos_delictivos12"] = &$pageTitleshechos_delictivos12;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hechos_delictivos12"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hechos_delictivos12"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hechos_delictivos12()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "hechos_delictivos1.id1,  hechos_delictivos1.correlativo,  hechos_delictivos1.numero,  hechos_delictivos1.id,  hechos_delictivos1.numero2,  hechos_delictivos1.lugaranalisis,  hechos_delictivos1.area,  hechos_delictivos1.delito,  hechos_delictivos1.hora_hecho,  hechos_delictivos1.rango_hora,  hechos_delictivos1.movil,  hechos_delictivos1.tipo,  hechos_delictivos1.nombre,  hechos_delictivos1.x,  hechos_delictivos1.y,  hechos_delictivos1.correlativo1,  hechos_delictivos1.codigo_muni,  hechos_delictivos1.depart_he,  hechos_delictivos1.muni_he,  hechos_delictivos1.dire_hecho,  hechos_delictivos1.lugar_esp,  hechos_delictivos1.forma_cono,  hechos_delictivos1.delito_espe,  hechos_delictivos1.dia_hecho,  hechos_delictivos1.fecha_hecho,  hechos_delictivos1.mes_hecho,  hechos_delictivos1.`aÑo_hecho`,  hechos_delictivos1.edad_victima,  hechos_delictivos1.ran_eta_vic,  hechos_delictivos1.s_victima,  hechos_delictivos1.oc_victima,  hechos_delictivos1.relacion_vi_agre,  hechos_delictivos1.edad_agresor,  hechos_delictivos1.sexo_agresor,  hechos_delictivos1.ocupa_agresor,  hechos_delictivos1.tipo_arma,  hechos_delictivos1.canton_hecho,  hechos_delictivos1.colonia_hecho,  hechos_delictivos1.caserio_hecho,  hechos_delictivos1.calle_hecho,  hechos_delictivos1.avenida_hecho,  hechos_delictivos1.casa_hecho,  hechos_delictivos1.com_hecho,  hechos_delictivos1.barrio_hecho,  hechos_delictivos1.comp_hecho,  hechos_delictivos1.sector_ppd,  hechos_delictivos1.mes_corre,  hechos_delictivos1.arma_analisis,  hechos_delictivos1.movil_he,  hechos_delictivos1.ocupa_analisis,  hechos_delictivos1.rel_vic_ag_anali";
$proto0["m_strFrom"] = "FROM hechos_delictivos1  , retornados  , carcel  , transito  , pnc911";
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
	"m_srcTableName" => "hechos_delictivos12"
));

$proto6["m_sql"] = "hechos_delictivos1.id1";
$proto6["m_srcTableName"] = "hechos_delictivos12";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "correlativo",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto8["m_sql"] = "hechos_delictivos1.correlativo";
$proto8["m_srcTableName"] = "hechos_delictivos12";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "numero",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto10["m_sql"] = "hechos_delictivos1.numero";
$proto10["m_srcTableName"] = "hechos_delictivos12";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto12["m_sql"] = "hechos_delictivos1.id";
$proto12["m_srcTableName"] = "hechos_delictivos12";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "numero2",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto14["m_sql"] = "hechos_delictivos1.numero2";
$proto14["m_srcTableName"] = "hechos_delictivos12";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "lugaranalisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto16["m_sql"] = "hechos_delictivos1.lugaranalisis";
$proto16["m_srcTableName"] = "hechos_delictivos12";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto18["m_sql"] = "hechos_delictivos1.area";
$proto18["m_srcTableName"] = "hechos_delictivos12";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto20["m_sql"] = "hechos_delictivos1.delito";
$proto20["m_srcTableName"] = "hechos_delictivos12";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto22["m_sql"] = "hechos_delictivos1.hora_hecho";
$proto22["m_srcTableName"] = "hechos_delictivos12";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "rango_hora",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto24["m_sql"] = "hechos_delictivos1.rango_hora";
$proto24["m_srcTableName"] = "hechos_delictivos12";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "movil",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto26["m_sql"] = "hechos_delictivos1.movil";
$proto26["m_srcTableName"] = "hechos_delictivos12";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto28["m_sql"] = "hechos_delictivos1.tipo";
$proto28["m_srcTableName"] = "hechos_delictivos12";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto30["m_sql"] = "hechos_delictivos1.nombre";
$proto30["m_srcTableName"] = "hechos_delictivos12";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "x",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto32["m_sql"] = "hechos_delictivos1.x";
$proto32["m_srcTableName"] = "hechos_delictivos12";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "y",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto34["m_sql"] = "hechos_delictivos1.y";
$proto34["m_srcTableName"] = "hechos_delictivos12";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "correlativo1",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto36["m_sql"] = "hechos_delictivos1.correlativo1";
$proto36["m_srcTableName"] = "hechos_delictivos12";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo_muni",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto38["m_sql"] = "hechos_delictivos1.codigo_muni";
$proto38["m_srcTableName"] = "hechos_delictivos12";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto40["m_sql"] = "hechos_delictivos1.depart_he";
$proto40["m_srcTableName"] = "hechos_delictivos12";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto42["m_sql"] = "hechos_delictivos1.muni_he";
$proto42["m_srcTableName"] = "hechos_delictivos12";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "dire_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto44["m_sql"] = "hechos_delictivos1.dire_hecho";
$proto44["m_srcTableName"] = "hechos_delictivos12";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "lugar_esp",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto46["m_sql"] = "hechos_delictivos1.lugar_esp";
$proto46["m_srcTableName"] = "hechos_delictivos12";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "forma_cono",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto48["m_sql"] = "hechos_delictivos1.forma_cono";
$proto48["m_srcTableName"] = "hechos_delictivos12";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "delito_espe",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto50["m_sql"] = "hechos_delictivos1.delito_espe";
$proto50["m_srcTableName"] = "hechos_delictivos12";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto52["m_sql"] = "hechos_delictivos1.dia_hecho";
$proto52["m_srcTableName"] = "hechos_delictivos12";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto54["m_sql"] = "hechos_delictivos1.fecha_hecho";
$proto54["m_srcTableName"] = "hechos_delictivos12";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "mes_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto56["m_sql"] = "hechos_delictivos1.mes_hecho";
$proto56["m_srcTableName"] = "hechos_delictivos12";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto58["m_sql"] = "hechos_delictivos1.`aÑo_hecho`";
$proto58["m_srcTableName"] = "hechos_delictivos12";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "edad_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto60["m_sql"] = "hechos_delictivos1.edad_victima";
$proto60["m_srcTableName"] = "hechos_delictivos12";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "ran_eta_vic",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto62["m_sql"] = "hechos_delictivos1.ran_eta_vic";
$proto62["m_srcTableName"] = "hechos_delictivos12";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto64["m_sql"] = "hechos_delictivos1.s_victima";
$proto64["m_srcTableName"] = "hechos_delictivos12";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "oc_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto66["m_sql"] = "hechos_delictivos1.oc_victima";
$proto66["m_srcTableName"] = "hechos_delictivos12";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "relacion_vi_agre",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto68["m_sql"] = "hechos_delictivos1.relacion_vi_agre";
$proto68["m_srcTableName"] = "hechos_delictivos12";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "edad_agresor",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto70["m_sql"] = "hechos_delictivos1.edad_agresor";
$proto70["m_srcTableName"] = "hechos_delictivos12";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo_agresor",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto72["m_sql"] = "hechos_delictivos1.sexo_agresor";
$proto72["m_srcTableName"] = "hechos_delictivos12";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "ocupa_agresor",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto74["m_sql"] = "hechos_delictivos1.ocupa_agresor";
$proto74["m_srcTableName"] = "hechos_delictivos12";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_arma",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto76["m_sql"] = "hechos_delictivos1.tipo_arma";
$proto76["m_srcTableName"] = "hechos_delictivos12";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "canton_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto78["m_sql"] = "hechos_delictivos1.canton_hecho";
$proto78["m_srcTableName"] = "hechos_delictivos12";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "colonia_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto80["m_sql"] = "hechos_delictivos1.colonia_hecho";
$proto80["m_srcTableName"] = "hechos_delictivos12";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "caserio_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto82["m_sql"] = "hechos_delictivos1.caserio_hecho";
$proto82["m_srcTableName"] = "hechos_delictivos12";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "calle_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto84["m_sql"] = "hechos_delictivos1.calle_hecho";
$proto84["m_srcTableName"] = "hechos_delictivos12";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "avenida_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto86["m_sql"] = "hechos_delictivos1.avenida_hecho";
$proto86["m_srcTableName"] = "hechos_delictivos12";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "casa_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto88["m_sql"] = "hechos_delictivos1.casa_hecho";
$proto88["m_srcTableName"] = "hechos_delictivos12";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "com_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto90["m_sql"] = "hechos_delictivos1.com_hecho";
$proto90["m_srcTableName"] = "hechos_delictivos12";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "barrio_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto92["m_sql"] = "hechos_delictivos1.barrio_hecho";
$proto92["m_srcTableName"] = "hechos_delictivos12";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "comp_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto94["m_sql"] = "hechos_delictivos1.comp_hecho";
$proto94["m_srcTableName"] = "hechos_delictivos12";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto96["m_sql"] = "hechos_delictivos1.sector_ppd";
$proto96["m_srcTableName"] = "hechos_delictivos12";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "mes_corre",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto98["m_sql"] = "hechos_delictivos1.mes_corre";
$proto98["m_srcTableName"] = "hechos_delictivos12";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "arma_analisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto100["m_sql"] = "hechos_delictivos1.arma_analisis";
$proto100["m_srcTableName"] = "hechos_delictivos12";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "movil_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto102["m_sql"] = "hechos_delictivos1.movil_he";
$proto102["m_srcTableName"] = "hechos_delictivos12";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "ocupa_analisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto104["m_sql"] = "hechos_delictivos1.ocupa_analisis";
$proto104["m_srcTableName"] = "hechos_delictivos12";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "rel_vic_ag_anali",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos12"
));

$proto106["m_sql"] = "hechos_delictivos1.rel_vic_ag_anali";
$proto106["m_srcTableName"] = "hechos_delictivos12";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto108=array();
$proto108["m_link"] = "SQLL_MAIN";
			$proto109=array();
$proto109["m_strName"] = "hechos_delictivos1";
$proto109["m_srcTableName"] = "hechos_delictivos12";
$proto109["m_columns"] = array();
$proto109["m_columns"][] = "id1";
$proto109["m_columns"][] = "id11";
$proto109["m_columns"][] = "correlativo";
$proto109["m_columns"][] = "numero";
$proto109["m_columns"][] = "id";
$proto109["m_columns"][] = "numero2";
$proto109["m_columns"][] = "lugaranalisis";
$proto109["m_columns"][] = "area";
$proto109["m_columns"][] = "delito";
$proto109["m_columns"][] = "codigo_muni";
$proto109["m_columns"][] = "depart_he";
$proto109["m_columns"][] = "muni_he";
$proto109["m_columns"][] = "dire_hecho";
$proto109["m_columns"][] = "lugar_esp";
$proto109["m_columns"][] = "forma_cono";
$proto109["m_columns"][] = "delito_espe";
$proto109["m_columns"][] = "dia_hecho";
$proto109["m_columns"][] = "hora_hecho";
$proto109["m_columns"][] = "rango_hora";
$proto109["m_columns"][] = "fecha_hecho";
$proto109["m_columns"][] = "mes_hecho";
$proto109["m_columns"][] = "aÑo_hecho";
$proto109["m_columns"][] = "edad_victima";
$proto109["m_columns"][] = "ran_eta_vic";
$proto109["m_columns"][] = "s_victima";
$proto109["m_columns"][] = "oc_victima";
$proto109["m_columns"][] = "relacion_vi_agre";
$proto109["m_columns"][] = "edad_agresor";
$proto109["m_columns"][] = "sexo_agresor";
$proto109["m_columns"][] = "ocupa_agresor";
$proto109["m_columns"][] = "movil";
$proto109["m_columns"][] = "tipo_arma";
$proto109["m_columns"][] = "canton_hecho";
$proto109["m_columns"][] = "colonia_hecho";
$proto109["m_columns"][] = "caserio_hecho";
$proto109["m_columns"][] = "calle_hecho";
$proto109["m_columns"][] = "avenida_hecho";
$proto109["m_columns"][] = "casa_hecho";
$proto109["m_columns"][] = "com_hecho";
$proto109["m_columns"][] = "barrio_hecho";
$proto109["m_columns"][] = "comp_hecho";
$proto109["m_columns"][] = "sector_ppd";
$proto109["m_columns"][] = "tipo";
$proto109["m_columns"][] = "nombre";
$proto109["m_columns"][] = "x";
$proto109["m_columns"][] = "y";
$proto109["m_columns"][] = "correlativo1";
$proto109["m_columns"][] = "mes_corre";
$proto109["m_columns"][] = "arma_analisis";
$proto109["m_columns"][] = "movil_he";
$proto109["m_columns"][] = "ocupa_analisis";
$proto109["m_columns"][] = "rel_vic_ag_anali";
$obj = new SQLTable($proto109);

$proto108["m_table"] = $obj;
$proto108["m_sql"] = "hechos_delictivos1";
$proto108["m_alias"] = "";
$proto108["m_srcTableName"] = "hechos_delictivos12";
$proto110=array();
$proto110["m_sql"] = "";
$proto110["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto110["m_column"]=$obj;
$proto110["m_contained"] = array();
$proto110["m_strCase"] = "";
$proto110["m_havingmode"] = false;
$proto110["m_inBrackets"] = false;
$proto110["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto110);

$proto108["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto108);

$proto0["m_fromlist"][]=$obj;
												$proto112=array();
$proto112["m_link"] = "SQLL_CROSSJOIN";
			$proto113=array();
$proto113["m_strName"] = "retornados";
$proto113["m_srcTableName"] = "hechos_delictivos12";
$proto113["m_columns"] = array();
$proto113["m_columns"][] = "año";
$proto113["m_columns"][] = "mes";
$proto113["m_columns"][] = "fechaentrevista";
$proto113["m_columns"][] = "tipoentrevista";
$proto113["m_columns"][] = "ficha";
$proto113["m_columns"][] = "numalien";
$proto113["m_columns"][] = "fechanacimiento";
$proto113["m_columns"][] = "documentoficha";
$proto113["m_columns"][] = "numerodocumento";
$proto113["m_columns"][] = "nombredocumento";
$proto113["m_columns"][] = "consulado";
$proto113["m_columns"][] = "consulado_analisis";
$proto113["m_columns"][] = "departamento";
$proto113["m_columns"][] = "municipio";
$proto113["m_columns"][] = "sexo";
$proto113["m_columns"][] = "edad";
$proto113["m_columns"][] = "rango_etario";
$proto113["m_columns"][] = "tipoedad";
$proto113["m_columns"][] = "paisrepatriacion";
$proto113["m_columns"][] = "regionrepatriacion";
$proto113["m_columns"][] = "antecedentes_penales";
$proto113["m_columns"][] = "tipo_antecedentes";
$proto113["m_columns"][] = "antecedentes";
$proto113["m_columns"][] = "sectorppd";
$proto113["m_columns"][] = "num_mes";
$proto113["m_columns"][] = "antecedente_analisis";
$obj = new SQLTable($proto113);

$proto112["m_table"] = $obj;
$proto112["m_sql"] = "retornados";
$proto112["m_alias"] = "";
$proto112["m_srcTableName"] = "hechos_delictivos12";
$proto114=array();
$proto114["m_sql"] = "";
$proto114["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto114["m_column"]=$obj;
$proto114["m_contained"] = array();
$proto114["m_strCase"] = "";
$proto114["m_havingmode"] = false;
$proto114["m_inBrackets"] = false;
$proto114["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto114);

$proto112["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto112);

$proto0["m_fromlist"][]=$obj;
												$proto116=array();
$proto116["m_link"] = "SQLL_CROSSJOIN";
			$proto117=array();
$proto117["m_strName"] = "carcel";
$proto117["m_srcTableName"] = "hechos_delictivos12";
$proto117["m_columns"] = array();
$proto117["m_columns"][] = "id";
$proto117["m_columns"][] = "sipe";
$proto117["m_columns"][] = "afis";
$proto117["m_columns"][] = "edad";
$proto117["m_columns"][] = "rangoetario";
$proto117["m_columns"][] = "genero";
$proto117["m_columns"][] = "fecha_nac";
$proto117["m_columns"][] = "edad1";
$proto117["m_columns"][] = "dui";
$proto117["m_columns"][] = "nivel_edu";
$proto117["m_columns"][] = "educacionanalisis";
$proto117["m_columns"][] = "profesion_oficio";
$proto117["m_columns"][] = "estado_civil";
$proto117["m_columns"][] = "ciudadania";
$proto117["m_columns"][] = "mun_nacimiento";
$proto117["m_columns"][] = "depto_nacim";
$proto117["m_columns"][] = "direccion";
$proto117["m_columns"][] = "mun_resid";
$proto117["m_columns"][] = "depart_resid";
$proto117["m_columns"][] = "delitosanalisis";
$proto117["m_columns"][] = "sj_interno";
$proto117["m_columns"][] = "fase";
$proto117["m_columns"][] = "org_delictiva";
$proto117["m_columns"][] = "tipo_mara";
$proto117["m_columns"][] = "reincidente";
$proto117["m_columns"][] = "deportado";
$proto117["m_columns"][] = "direccion1";
$proto117["m_columns"][] = "sector";
$proto117["m_columns"][] = "celda";
$proto117["m_columns"][] = "fecha_ing__sp";
$proto117["m_columns"][] = "libro";
$proto117["m_columns"][] = "fecha_ing__cp";
$proto117["m_columns"][] = "total_delitos";
$proto117["m_columns"][] = "delitos";
$proto117["m_columns"][] = "delitoanalisis";
$proto117["m_columns"][] = "sector_ppd";
$obj = new SQLTable($proto117);

$proto116["m_table"] = $obj;
$proto116["m_sql"] = "carcel";
$proto116["m_alias"] = "";
$proto116["m_srcTableName"] = "hechos_delictivos12";
$proto118=array();
$proto118["m_sql"] = "";
$proto118["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto118["m_column"]=$obj;
$proto118["m_contained"] = array();
$proto118["m_strCase"] = "";
$proto118["m_havingmode"] = false;
$proto118["m_inBrackets"] = false;
$proto118["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto118);

$proto116["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto116);

$proto0["m_fromlist"][]=$obj;
												$proto120=array();
$proto120["m_link"] = "SQLL_CROSSJOIN";
			$proto121=array();
$proto121["m_strName"] = "transito";
$proto121["m_srcTableName"] = "hechos_delictivos12";
$proto121["m_columns"] = array();
$proto121["m_columns"][] = "eid";
$proto121["m_columns"][] = "pid";
$proto121["m_columns"][] = "unidad";
$proto121["m_columns"][] = "sexo";
$proto121["m_columns"][] = "edad";
$proto121["m_columns"][] = "resu";
$proto121["m_columns"][] = "calidad";
$proto121["m_columns"][] = "fecacc";
$proto121["m_columns"][] = "horacc";
$proto121["m_columns"][] = "rangohorario";
$proto121["m_columns"][] = "tipacc";
$proto121["m_columns"][] = "cauacc";
$proto121["m_columns"][] = "diracc";
$proto121["m_columns"][] = "munacc";
$proto121["m_columns"][] = "clares";
$proto121["m_columns"][] = "rutres";
$proto121["m_columns"][] = "repdet";
$proto121["m_columns"][] = "departamento";
$proto121["m_columns"][] = "dia";
$proto121["m_columns"][] = "sectorppd";
$proto121["m_columns"][] = "rangoetario";
$proto121["m_columns"][] = "causa_analisis";
$proto121["m_columns"][] = "tipo_analisis";
$proto121["m_columns"][] = "mes_analisis";
$obj = new SQLTable($proto121);

$proto120["m_table"] = $obj;
$proto120["m_sql"] = "transito";
$proto120["m_alias"] = "";
$proto120["m_srcTableName"] = "hechos_delictivos12";
$proto122=array();
$proto122["m_sql"] = "";
$proto122["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto122["m_column"]=$obj;
$proto122["m_contained"] = array();
$proto122["m_strCase"] = "";
$proto122["m_havingmode"] = false;
$proto122["m_inBrackets"] = false;
$proto122["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto122);

$proto120["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto120);

$proto0["m_fromlist"][]=$obj;
												$proto124=array();
$proto124["m_link"] = "SQLL_CROSSJOIN";
			$proto125=array();
$proto125["m_strName"] = "pnc911";
$proto125["m_srcTableName"] = "hechos_delictivos12";
$proto125["m_columns"] = array();
$proto125["m_columns"][] = "tipificacion";
$proto125["m_columns"][] = "direccion_validacion";
$proto125["m_columns"][] = "direccion_libre";
$proto125["m_columns"][] = "coordenadas_x";
$proto125["m_columns"][] = "coordenadas_y";
$proto125["m_columns"][] = "departamento";
$proto125["m_columns"][] = "municipio";
$proto125["m_columns"][] = "ppddsc";
$proto125["m_columns"][] = "meses";
$proto125["m_columns"][] = "avisos911";
$obj = new SQLTable($proto125);

$proto124["m_table"] = $obj;
$proto124["m_sql"] = "pnc911";
$proto124["m_alias"] = "";
$proto124["m_srcTableName"] = "hechos_delictivos12";
$proto126=array();
$proto126["m_sql"] = "";
$proto126["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto126["m_column"]=$obj;
$proto126["m_contained"] = array();
$proto126["m_strCase"] = "";
$proto126["m_havingmode"] = false;
$proto126["m_inBrackets"] = false;
$proto126["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto126);

$proto124["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto124);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hechos_delictivos12";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hechos_delictivos12 = createSqlQuery_hechos_delictivos12();


	
		;

																																																			

$tdatahechos_delictivos12[".sqlquery"] = $queryData_hechos_delictivos12;

$tableEvents["hechos_delictivos12"] = new eventsBase;
$tdatahechos_delictivos12[".hasEvents"] = false;

?>