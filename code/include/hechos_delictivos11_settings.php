<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahechos_delictivos11 = array();
	$tdatahechos_delictivos11[".truncateText"] = true;
	$tdatahechos_delictivos11[".NumberOfChars"] = 80;
	$tdatahechos_delictivos11[".ShortName"] = "hechos_delictivos11";
	$tdatahechos_delictivos11[".OwnerID"] = "";
	$tdatahechos_delictivos11[".OriginalTable"] = "hechos_delictivos1";

//	field labels
$fieldLabelshechos_delictivos11 = array();
$fieldToolTipshechos_delictivos11 = array();
$pageTitleshechos_delictivos11 = array();
$placeHoldershechos_delictivos11 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshechos_delictivos11["Spanish"] = array();
	$fieldToolTipshechos_delictivos11["Spanish"] = array();
	$placeHoldershechos_delictivos11["Spanish"] = array();
	$pageTitleshechos_delictivos11["Spanish"] = array();
	$fieldLabelshechos_delictivos11["Spanish"]["hora_hecho"] = "Hora Hecho";
	$fieldToolTipshechos_delictivos11["Spanish"]["hora_hecho"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["hora_hecho"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["rango_hora"] = "Rango Hora";
	$fieldToolTipshechos_delictivos11["Spanish"]["rango_hora"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["rango_hora"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["id1"] = "Id1";
	$fieldToolTipshechos_delictivos11["Spanish"]["id1"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["id1"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["correlativo"] = "Correlativo";
	$fieldToolTipshechos_delictivos11["Spanish"]["correlativo"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["correlativo"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["numero"] = "Numero";
	$fieldToolTipshechos_delictivos11["Spanish"]["numero"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["numero"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["id"] = "Id";
	$fieldToolTipshechos_delictivos11["Spanish"]["id"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["id"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["codigo_muni"] = "Codigo Muni";
	$fieldToolTipshechos_delictivos11["Spanish"]["codigo_muni"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["codigo_muni"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["numero2"] = "Numero2";
	$fieldToolTipshechos_delictivos11["Spanish"]["numero2"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["numero2"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipshechos_delictivos11["Spanish"]["depart_he"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["depart_he"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipshechos_delictivos11["Spanish"]["muni_he"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["muni_he"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["dire_hecho"] = "Dire Hecho";
	$fieldToolTipshechos_delictivos11["Spanish"]["dire_hecho"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["dire_hecho"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["lugar_esp"] = "Lugar Esp";
	$fieldToolTipshechos_delictivos11["Spanish"]["lugar_esp"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["lugar_esp"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["lugaranalisis"] = "Lugaranalisis";
	$fieldToolTipshechos_delictivos11["Spanish"]["lugaranalisis"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["lugaranalisis"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["area"] = "Area";
	$fieldToolTipshechos_delictivos11["Spanish"]["area"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["area"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["forma_cono"] = "Forma Cono";
	$fieldToolTipshechos_delictivos11["Spanish"]["forma_cono"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["forma_cono"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["delito"] = "Delito";
	$fieldToolTipshechos_delictivos11["Spanish"]["delito"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["delito"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["delito_espe"] = "Delito Espe";
	$fieldToolTipshechos_delictivos11["Spanish"]["delito_espe"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["delito_espe"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["dia_hecho"] = "Dia Hecho";
	$fieldToolTipshechos_delictivos11["Spanish"]["dia_hecho"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["dia_hecho"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["fecha_hecho"] = "Fecha Hecho";
	$fieldToolTipshechos_delictivos11["Spanish"]["fecha_hecho"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["fecha_hecho"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["mes_hecho"] = "Mes Hecho";
	$fieldToolTipshechos_delictivos11["Spanish"]["mes_hecho"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["mes_hecho"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipshechos_delictivos11["Spanish"]["a_o_hecho"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["a_o_hecho"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["edad_victima"] = "Edad Victima";
	$fieldToolTipshechos_delictivos11["Spanish"]["edad_victima"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["edad_victima"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipshechos_delictivos11["Spanish"]["ran_eta_vic"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["ran_eta_vic"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["s_victima"] = "S Victima";
	$fieldToolTipshechos_delictivos11["Spanish"]["s_victima"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["s_victima"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["oc_victima"] = "Oc Victima";
	$fieldToolTipshechos_delictivos11["Spanish"]["oc_victima"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["oc_victima"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["relacion_vi_agre"] = "Relacion Vi Agre";
	$fieldToolTipshechos_delictivos11["Spanish"]["relacion_vi_agre"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["relacion_vi_agre"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["edad_agresor"] = "Edad Agresor";
	$fieldToolTipshechos_delictivos11["Spanish"]["edad_agresor"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["edad_agresor"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["sexo_agresor"] = "Sexo Agresor";
	$fieldToolTipshechos_delictivos11["Spanish"]["sexo_agresor"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["sexo_agresor"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["ocupa_agresor"] = "Ocupa Agresor";
	$fieldToolTipshechos_delictivos11["Spanish"]["ocupa_agresor"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["ocupa_agresor"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["movil"] = "Movil";
	$fieldToolTipshechos_delictivos11["Spanish"]["movil"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["movil"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipshechos_delictivos11["Spanish"]["tipo_arma"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["tipo_arma"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["canton_hecho"] = "Canton Hecho";
	$fieldToolTipshechos_delictivos11["Spanish"]["canton_hecho"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["canton_hecho"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["colonia_hecho"] = "Colonia Hecho";
	$fieldToolTipshechos_delictivos11["Spanish"]["colonia_hecho"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["colonia_hecho"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["caserio_hecho"] = "Caserio Hecho";
	$fieldToolTipshechos_delictivos11["Spanish"]["caserio_hecho"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["caserio_hecho"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["calle_hecho"] = "Calle Hecho";
	$fieldToolTipshechos_delictivos11["Spanish"]["calle_hecho"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["calle_hecho"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["avenida_hecho"] = "Avenida Hecho";
	$fieldToolTipshechos_delictivos11["Spanish"]["avenida_hecho"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["avenida_hecho"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["casa_hecho"] = "Casa Hecho";
	$fieldToolTipshechos_delictivos11["Spanish"]["casa_hecho"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["casa_hecho"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["com_hecho"] = "Com Hecho";
	$fieldToolTipshechos_delictivos11["Spanish"]["com_hecho"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["com_hecho"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["barrio_hecho"] = "Barrio Hecho";
	$fieldToolTipshechos_delictivos11["Spanish"]["barrio_hecho"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["barrio_hecho"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["comp_hecho"] = "Comp Hecho";
	$fieldToolTipshechos_delictivos11["Spanish"]["comp_hecho"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["comp_hecho"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipshechos_delictivos11["Spanish"]["sector_ppd"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["sector_ppd"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["tipo"] = "Tipo";
	$fieldToolTipshechos_delictivos11["Spanish"]["tipo"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["tipo"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipshechos_delictivos11["Spanish"]["nombre"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["nombre"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["x"] = "X";
	$fieldToolTipshechos_delictivos11["Spanish"]["x"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["x"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["y"] = "Y";
	$fieldToolTipshechos_delictivos11["Spanish"]["y"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["y"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["mes_corre"] = "Mes Corre";
	$fieldToolTipshechos_delictivos11["Spanish"]["mes_corre"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["mes_corre"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["correlativo1"] = "Correlativo1";
	$fieldToolTipshechos_delictivos11["Spanish"]["correlativo1"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["correlativo1"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["arma_analisis"] = "Arma Analisis";
	$fieldToolTipshechos_delictivos11["Spanish"]["arma_analisis"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["arma_analisis"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["movil_he"] = "Movil He";
	$fieldToolTipshechos_delictivos11["Spanish"]["movil_he"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["movil_he"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["ocupa_analisis"] = "Ocupa Analisis";
	$fieldToolTipshechos_delictivos11["Spanish"]["ocupa_analisis"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["ocupa_analisis"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["rel_vic_ag_anali"] = "Rel Vic Ag Anali";
	$fieldToolTipshechos_delictivos11["Spanish"]["rel_vic_ag_anali"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["rel_vic_ag_anali"] = "";
	$fieldLabelshechos_delictivos11["Spanish"]["id11"] = "Id11";
	$fieldToolTipshechos_delictivos11["Spanish"]["id11"] = "";
	$placeHoldershechos_delictivos11["Spanish"]["id11"] = "";
	if (count($fieldToolTipshechos_delictivos11["Spanish"]))
		$tdatahechos_delictivos11[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshechos_delictivos11["English"] = array();
	$fieldToolTipshechos_delictivos11["English"] = array();
	$placeHoldershechos_delictivos11["English"] = array();
	$pageTitleshechos_delictivos11["English"] = array();
	$fieldLabelshechos_delictivos11["English"]["hora_hecho"] = "Hora Hecho";
	$fieldToolTipshechos_delictivos11["English"]["hora_hecho"] = "";
	$placeHoldershechos_delictivos11["English"]["hora_hecho"] = "";
	$fieldLabelshechos_delictivos11["English"]["rango_hora"] = "Rango Hora";
	$fieldToolTipshechos_delictivos11["English"]["rango_hora"] = "";
	$placeHoldershechos_delictivos11["English"]["rango_hora"] = "";
	$fieldLabelshechos_delictivos11["English"]["id1"] = "Id1";
	$fieldToolTipshechos_delictivos11["English"]["id1"] = "";
	$placeHoldershechos_delictivos11["English"]["id1"] = "";
	$fieldLabelshechos_delictivos11["English"]["correlativo"] = "Correlativo";
	$fieldToolTipshechos_delictivos11["English"]["correlativo"] = "";
	$placeHoldershechos_delictivos11["English"]["correlativo"] = "";
	$fieldLabelshechos_delictivos11["English"]["numero"] = "Numero";
	$fieldToolTipshechos_delictivos11["English"]["numero"] = "";
	$placeHoldershechos_delictivos11["English"]["numero"] = "";
	$fieldLabelshechos_delictivos11["English"]["id"] = "Id";
	$fieldToolTipshechos_delictivos11["English"]["id"] = "";
	$placeHoldershechos_delictivos11["English"]["id"] = "";
	$fieldLabelshechos_delictivos11["English"]["codigo_muni"] = "Codigo Muni";
	$fieldToolTipshechos_delictivos11["English"]["codigo_muni"] = "";
	$placeHoldershechos_delictivos11["English"]["codigo_muni"] = "";
	$fieldLabelshechos_delictivos11["English"]["numero2"] = "Numero2";
	$fieldToolTipshechos_delictivos11["English"]["numero2"] = "";
	$placeHoldershechos_delictivos11["English"]["numero2"] = "";
	$fieldLabelshechos_delictivos11["English"]["depart_he"] = "Depart He";
	$fieldToolTipshechos_delictivos11["English"]["depart_he"] = "";
	$placeHoldershechos_delictivos11["English"]["depart_he"] = "";
	$fieldLabelshechos_delictivos11["English"]["muni_he"] = "Muni He";
	$fieldToolTipshechos_delictivos11["English"]["muni_he"] = "";
	$placeHoldershechos_delictivos11["English"]["muni_he"] = "";
	$fieldLabelshechos_delictivos11["English"]["dire_hecho"] = "Dire Hecho";
	$fieldToolTipshechos_delictivos11["English"]["dire_hecho"] = "";
	$placeHoldershechos_delictivos11["English"]["dire_hecho"] = "";
	$fieldLabelshechos_delictivos11["English"]["lugar_esp"] = "Lugar Esp";
	$fieldToolTipshechos_delictivos11["English"]["lugar_esp"] = "";
	$placeHoldershechos_delictivos11["English"]["lugar_esp"] = "";
	$fieldLabelshechos_delictivos11["English"]["lugaranalisis"] = "Lugaranalisis";
	$fieldToolTipshechos_delictivos11["English"]["lugaranalisis"] = "";
	$placeHoldershechos_delictivos11["English"]["lugaranalisis"] = "";
	$fieldLabelshechos_delictivos11["English"]["area"] = "Area";
	$fieldToolTipshechos_delictivos11["English"]["area"] = "";
	$placeHoldershechos_delictivos11["English"]["area"] = "";
	$fieldLabelshechos_delictivos11["English"]["forma_cono"] = "Forma Cono";
	$fieldToolTipshechos_delictivos11["English"]["forma_cono"] = "";
	$placeHoldershechos_delictivos11["English"]["forma_cono"] = "";
	$fieldLabelshechos_delictivos11["English"]["delito"] = "Delito";
	$fieldToolTipshechos_delictivos11["English"]["delito"] = "";
	$placeHoldershechos_delictivos11["English"]["delito"] = "";
	$fieldLabelshechos_delictivos11["English"]["delito_espe"] = "Delito Espe";
	$fieldToolTipshechos_delictivos11["English"]["delito_espe"] = "";
	$placeHoldershechos_delictivos11["English"]["delito_espe"] = "";
	$fieldLabelshechos_delictivos11["English"]["dia_hecho"] = "Dia Hecho";
	$fieldToolTipshechos_delictivos11["English"]["dia_hecho"] = "";
	$placeHoldershechos_delictivos11["English"]["dia_hecho"] = "";
	$fieldLabelshechos_delictivos11["English"]["fecha_hecho"] = "Fecha Hecho";
	$fieldToolTipshechos_delictivos11["English"]["fecha_hecho"] = "";
	$placeHoldershechos_delictivos11["English"]["fecha_hecho"] = "";
	$fieldLabelshechos_delictivos11["English"]["mes_hecho"] = "Mes Hecho";
	$fieldToolTipshechos_delictivos11["English"]["mes_hecho"] = "";
	$placeHoldershechos_delictivos11["English"]["mes_hecho"] = "";
	$fieldLabelshechos_delictivos11["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipshechos_delictivos11["English"]["a_o_hecho"] = "";
	$placeHoldershechos_delictivos11["English"]["a_o_hecho"] = "";
	$fieldLabelshechos_delictivos11["English"]["edad_victima"] = "Edad Victima";
	$fieldToolTipshechos_delictivos11["English"]["edad_victima"] = "";
	$placeHoldershechos_delictivos11["English"]["edad_victima"] = "";
	$fieldLabelshechos_delictivos11["English"]["ran_eta_vic"] = "Ran Eta Vic";
	$fieldToolTipshechos_delictivos11["English"]["ran_eta_vic"] = "";
	$placeHoldershechos_delictivos11["English"]["ran_eta_vic"] = "";
	$fieldLabelshechos_delictivos11["English"]["s_victima"] = "S Victima";
	$fieldToolTipshechos_delictivos11["English"]["s_victima"] = "";
	$placeHoldershechos_delictivos11["English"]["s_victima"] = "";
	$fieldLabelshechos_delictivos11["English"]["oc_victima"] = "Oc Victima";
	$fieldToolTipshechos_delictivos11["English"]["oc_victima"] = "";
	$placeHoldershechos_delictivos11["English"]["oc_victima"] = "";
	$fieldLabelshechos_delictivos11["English"]["relacion_vi_agre"] = "Relacion Vi Agre";
	$fieldToolTipshechos_delictivos11["English"]["relacion_vi_agre"] = "";
	$placeHoldershechos_delictivos11["English"]["relacion_vi_agre"] = "";
	$fieldLabelshechos_delictivos11["English"]["edad_agresor"] = "Edad Agresor";
	$fieldToolTipshechos_delictivos11["English"]["edad_agresor"] = "";
	$placeHoldershechos_delictivos11["English"]["edad_agresor"] = "";
	$fieldLabelshechos_delictivos11["English"]["sexo_agresor"] = "Sexo Agresor";
	$fieldToolTipshechos_delictivos11["English"]["sexo_agresor"] = "";
	$placeHoldershechos_delictivos11["English"]["sexo_agresor"] = "";
	$fieldLabelshechos_delictivos11["English"]["ocupa_agresor"] = "Ocupa Agresor";
	$fieldToolTipshechos_delictivos11["English"]["ocupa_agresor"] = "";
	$placeHoldershechos_delictivos11["English"]["ocupa_agresor"] = "";
	$fieldLabelshechos_delictivos11["English"]["movil"] = "Movil";
	$fieldToolTipshechos_delictivos11["English"]["movil"] = "";
	$placeHoldershechos_delictivos11["English"]["movil"] = "";
	$fieldLabelshechos_delictivos11["English"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipshechos_delictivos11["English"]["tipo_arma"] = "";
	$placeHoldershechos_delictivos11["English"]["tipo_arma"] = "";
	$fieldLabelshechos_delictivos11["English"]["canton_hecho"] = "Canton Hecho";
	$fieldToolTipshechos_delictivos11["English"]["canton_hecho"] = "";
	$placeHoldershechos_delictivos11["English"]["canton_hecho"] = "";
	$fieldLabelshechos_delictivos11["English"]["colonia_hecho"] = "Colonia Hecho";
	$fieldToolTipshechos_delictivos11["English"]["colonia_hecho"] = "";
	$placeHoldershechos_delictivos11["English"]["colonia_hecho"] = "";
	$fieldLabelshechos_delictivos11["English"]["caserio_hecho"] = "Caserio Hecho";
	$fieldToolTipshechos_delictivos11["English"]["caserio_hecho"] = "";
	$placeHoldershechos_delictivos11["English"]["caserio_hecho"] = "";
	$fieldLabelshechos_delictivos11["English"]["calle_hecho"] = "Calle Hecho";
	$fieldToolTipshechos_delictivos11["English"]["calle_hecho"] = "";
	$placeHoldershechos_delictivos11["English"]["calle_hecho"] = "";
	$fieldLabelshechos_delictivos11["English"]["avenida_hecho"] = "Avenida Hecho";
	$fieldToolTipshechos_delictivos11["English"]["avenida_hecho"] = "";
	$placeHoldershechos_delictivos11["English"]["avenida_hecho"] = "";
	$fieldLabelshechos_delictivos11["English"]["casa_hecho"] = "Casa Hecho";
	$fieldToolTipshechos_delictivos11["English"]["casa_hecho"] = "";
	$placeHoldershechos_delictivos11["English"]["casa_hecho"] = "";
	$fieldLabelshechos_delictivos11["English"]["com_hecho"] = "Com Hecho";
	$fieldToolTipshechos_delictivos11["English"]["com_hecho"] = "";
	$placeHoldershechos_delictivos11["English"]["com_hecho"] = "";
	$fieldLabelshechos_delictivos11["English"]["barrio_hecho"] = "Barrio Hecho";
	$fieldToolTipshechos_delictivos11["English"]["barrio_hecho"] = "";
	$placeHoldershechos_delictivos11["English"]["barrio_hecho"] = "";
	$fieldLabelshechos_delictivos11["English"]["comp_hecho"] = "Comp Hecho";
	$fieldToolTipshechos_delictivos11["English"]["comp_hecho"] = "";
	$placeHoldershechos_delictivos11["English"]["comp_hecho"] = "";
	$fieldLabelshechos_delictivos11["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipshechos_delictivos11["English"]["sector_ppd"] = "";
	$placeHoldershechos_delictivos11["English"]["sector_ppd"] = "";
	$fieldLabelshechos_delictivos11["English"]["tipo"] = "Tipo";
	$fieldToolTipshechos_delictivos11["English"]["tipo"] = "";
	$placeHoldershechos_delictivos11["English"]["tipo"] = "";
	$fieldLabelshechos_delictivos11["English"]["nombre"] = "Nombre";
	$fieldToolTipshechos_delictivos11["English"]["nombre"] = "";
	$placeHoldershechos_delictivos11["English"]["nombre"] = "";
	$fieldLabelshechos_delictivos11["English"]["x"] = "X";
	$fieldToolTipshechos_delictivos11["English"]["x"] = "";
	$placeHoldershechos_delictivos11["English"]["x"] = "";
	$fieldLabelshechos_delictivos11["English"]["y"] = "Y";
	$fieldToolTipshechos_delictivos11["English"]["y"] = "";
	$placeHoldershechos_delictivos11["English"]["y"] = "";
	$fieldLabelshechos_delictivos11["English"]["mes_corre"] = "Mes Corre";
	$fieldToolTipshechos_delictivos11["English"]["mes_corre"] = "";
	$placeHoldershechos_delictivos11["English"]["mes_corre"] = "";
	$fieldLabelshechos_delictivos11["English"]["correlativo1"] = "Correlativo1";
	$fieldToolTipshechos_delictivos11["English"]["correlativo1"] = "";
	$placeHoldershechos_delictivos11["English"]["correlativo1"] = "";
	$fieldLabelshechos_delictivos11["English"]["arma_analisis"] = "Arma Analisis";
	$fieldToolTipshechos_delictivos11["English"]["arma_analisis"] = "";
	$placeHoldershechos_delictivos11["English"]["arma_analisis"] = "";
	$fieldLabelshechos_delictivos11["English"]["movil_he"] = "Movil He";
	$fieldToolTipshechos_delictivos11["English"]["movil_he"] = "";
	$placeHoldershechos_delictivos11["English"]["movil_he"] = "";
	$fieldLabelshechos_delictivos11["English"]["ocupa_analisis"] = "Ocupa Analisis";
	$fieldToolTipshechos_delictivos11["English"]["ocupa_analisis"] = "";
	$placeHoldershechos_delictivos11["English"]["ocupa_analisis"] = "";
	$fieldLabelshechos_delictivos11["English"]["rel_vic_ag_anali"] = "Rel Vic Ag Anali";
	$fieldToolTipshechos_delictivos11["English"]["rel_vic_ag_anali"] = "";
	$placeHoldershechos_delictivos11["English"]["rel_vic_ag_anali"] = "";
	$fieldLabelshechos_delictivos11["English"]["id11"] = "Id11";
	$fieldToolTipshechos_delictivos11["English"]["id11"] = "";
	$placeHoldershechos_delictivos11["English"]["id11"] = "";
	if (count($fieldToolTipshechos_delictivos11["English"]))
		$tdatahechos_delictivos11[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshechos_delictivos11[""] = array();
	$fieldToolTipshechos_delictivos11[""] = array();
	$placeHoldershechos_delictivos11[""] = array();
	$pageTitleshechos_delictivos11[""] = array();
	if (count($fieldToolTipshechos_delictivos11[""]))
		$tdatahechos_delictivos11[".isUseToolTips"] = true;
}





$tdatahechos_delictivos11[".shortTableName"] = "hechos_delictivos11";
$tdatahechos_delictivos11[".nSecOptions"] = 0;
$tdatahechos_delictivos11[".recsPerRowPrint"] = 1;
$tdatahechos_delictivos11[".mainTableOwnerID"] = "";
$tdatahechos_delictivos11[".moveNext"] = 1;
$tdatahechos_delictivos11[".entityType"] = 1;

$tdatahechos_delictivos11[".strOriginalTableName"] = "hechos_delictivos1";

	



$tdatahechos_delictivos11[".showAddInPopup"] = false;

$tdatahechos_delictivos11[".showEditInPopup"] = false;

$tdatahechos_delictivos11[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahechos_delictivos11[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahechos_delictivos11[".fieldsForRegister"] = array();

	$tdatahechos_delictivos11[".listAjax"] = true;

	$tdatahechos_delictivos11[".audit"] = false;

	$tdatahechos_delictivos11[".locking"] = false;



$tdatahechos_delictivos11[".list"] = true;



$tdatahechos_delictivos11[".reorderRecordsByHeader"] = true;
$tdatahechos_delictivos11[".createSortByDropdown"] = true;
$tdatahechos_delictivos11[".strSortControlSettingsJSON"] = "";




$tdatahechos_delictivos11[".import"] = true;

$tdatahechos_delictivos11[".exportTo"] = true;

$tdatahechos_delictivos11[".printFriendly"] = true;


$tdatahechos_delictivos11[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatahechos_delictivos11[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatahechos_delictivos11[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatahechos_delictivos11[".searchSaving"] = false;
//

$tdatahechos_delictivos11[".showSearchPanel"] = true;
		$tdatahechos_delictivos11[".flexibleSearch"] = true;

$tdatahechos_delictivos11[".isUseAjaxSuggest"] = true;

$tdatahechos_delictivos11[".rowHighlite"] = true;





$tdatahechos_delictivos11[".ajaxCodeSnippetAdded"] = false;

$tdatahechos_delictivos11[".buttonsAdded"] = false;

$tdatahechos_delictivos11[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahechos_delictivos11[".isUseTimeForSearch"] = false;





$tdatahechos_delictivos11[".allSearchFields"] = array();
$tdatahechos_delictivos11[".filterFields"] = array();
$tdatahechos_delictivos11[".requiredSearchFields"] = array();

$tdatahechos_delictivos11[".allSearchFields"][] = "id1";
	$tdatahechos_delictivos11[".allSearchFields"][] = "id11";
	$tdatahechos_delictivos11[".allSearchFields"][] = "correlativo";
	$tdatahechos_delictivos11[".allSearchFields"][] = "numero";
	$tdatahechos_delictivos11[".allSearchFields"][] = "id";
	$tdatahechos_delictivos11[".allSearchFields"][] = "numero2";
	$tdatahechos_delictivos11[".allSearchFields"][] = "lugaranalisis";
	$tdatahechos_delictivos11[".allSearchFields"][] = "area";
	$tdatahechos_delictivos11[".allSearchFields"][] = "delito";
	$tdatahechos_delictivos11[".allSearchFields"][] = "codigo_muni";
	$tdatahechos_delictivos11[".allSearchFields"][] = "depart_he";
	$tdatahechos_delictivos11[".allSearchFields"][] = "muni_he";
	$tdatahechos_delictivos11[".allSearchFields"][] = "dire_hecho";
	$tdatahechos_delictivos11[".allSearchFields"][] = "lugar_esp";
	$tdatahechos_delictivos11[".allSearchFields"][] = "forma_cono";
	$tdatahechos_delictivos11[".allSearchFields"][] = "delito_espe";
	$tdatahechos_delictivos11[".allSearchFields"][] = "dia_hecho";
	$tdatahechos_delictivos11[".allSearchFields"][] = "hora_hecho";
	$tdatahechos_delictivos11[".allSearchFields"][] = "rango_hora";
	$tdatahechos_delictivos11[".allSearchFields"][] = "fecha_hecho";
	$tdatahechos_delictivos11[".allSearchFields"][] = "mes_hecho";
	$tdatahechos_delictivos11[".allSearchFields"][] = "aÑo_hecho";
	$tdatahechos_delictivos11[".allSearchFields"][] = "edad_victima";
	$tdatahechos_delictivos11[".allSearchFields"][] = "ran_eta_vic";
	$tdatahechos_delictivos11[".allSearchFields"][] = "s_victima";
	$tdatahechos_delictivos11[".allSearchFields"][] = "oc_victima";
	$tdatahechos_delictivos11[".allSearchFields"][] = "relacion_vi_agre";
	$tdatahechos_delictivos11[".allSearchFields"][] = "edad_agresor";
	$tdatahechos_delictivos11[".allSearchFields"][] = "sexo_agresor";
	$tdatahechos_delictivos11[".allSearchFields"][] = "ocupa_agresor";
	$tdatahechos_delictivos11[".allSearchFields"][] = "movil";
	$tdatahechos_delictivos11[".allSearchFields"][] = "tipo_arma";
	$tdatahechos_delictivos11[".allSearchFields"][] = "canton_hecho";
	$tdatahechos_delictivos11[".allSearchFields"][] = "colonia_hecho";
	$tdatahechos_delictivos11[".allSearchFields"][] = "caserio_hecho";
	$tdatahechos_delictivos11[".allSearchFields"][] = "calle_hecho";
	$tdatahechos_delictivos11[".allSearchFields"][] = "avenida_hecho";
	$tdatahechos_delictivos11[".allSearchFields"][] = "casa_hecho";
	$tdatahechos_delictivos11[".allSearchFields"][] = "com_hecho";
	$tdatahechos_delictivos11[".allSearchFields"][] = "barrio_hecho";
	$tdatahechos_delictivos11[".allSearchFields"][] = "comp_hecho";
	$tdatahechos_delictivos11[".allSearchFields"][] = "sector_ppd";
	$tdatahechos_delictivos11[".allSearchFields"][] = "tipo";
	$tdatahechos_delictivos11[".allSearchFields"][] = "nombre";
	$tdatahechos_delictivos11[".allSearchFields"][] = "x";
	$tdatahechos_delictivos11[".allSearchFields"][] = "y";
	$tdatahechos_delictivos11[".allSearchFields"][] = "correlativo1";
	$tdatahechos_delictivos11[".allSearchFields"][] = "mes_corre";
	$tdatahechos_delictivos11[".allSearchFields"][] = "arma_analisis";
	$tdatahechos_delictivos11[".allSearchFields"][] = "movil_he";
	$tdatahechos_delictivos11[".allSearchFields"][] = "ocupa_analisis";
	$tdatahechos_delictivos11[".allSearchFields"][] = "rel_vic_ag_anali";
	

$tdatahechos_delictivos11[".googleLikeFields"] = array();
$tdatahechos_delictivos11[".googleLikeFields"][] = "id1";
$tdatahechos_delictivos11[".googleLikeFields"][] = "id11";
$tdatahechos_delictivos11[".googleLikeFields"][] = "correlativo";
$tdatahechos_delictivos11[".googleLikeFields"][] = "numero";
$tdatahechos_delictivos11[".googleLikeFields"][] = "id";
$tdatahechos_delictivos11[".googleLikeFields"][] = "numero2";
$tdatahechos_delictivos11[".googleLikeFields"][] = "lugaranalisis";
$tdatahechos_delictivos11[".googleLikeFields"][] = "area";
$tdatahechos_delictivos11[".googleLikeFields"][] = "delito";
$tdatahechos_delictivos11[".googleLikeFields"][] = "codigo_muni";
$tdatahechos_delictivos11[".googleLikeFields"][] = "depart_he";
$tdatahechos_delictivos11[".googleLikeFields"][] = "muni_he";
$tdatahechos_delictivos11[".googleLikeFields"][] = "dire_hecho";
$tdatahechos_delictivos11[".googleLikeFields"][] = "lugar_esp";
$tdatahechos_delictivos11[".googleLikeFields"][] = "forma_cono";
$tdatahechos_delictivos11[".googleLikeFields"][] = "delito_espe";
$tdatahechos_delictivos11[".googleLikeFields"][] = "dia_hecho";
$tdatahechos_delictivos11[".googleLikeFields"][] = "hora_hecho";
$tdatahechos_delictivos11[".googleLikeFields"][] = "rango_hora";
$tdatahechos_delictivos11[".googleLikeFields"][] = "fecha_hecho";
$tdatahechos_delictivos11[".googleLikeFields"][] = "mes_hecho";
$tdatahechos_delictivos11[".googleLikeFields"][] = "aÑo_hecho";
$tdatahechos_delictivos11[".googleLikeFields"][] = "edad_victima";
$tdatahechos_delictivos11[".googleLikeFields"][] = "ran_eta_vic";
$tdatahechos_delictivos11[".googleLikeFields"][] = "s_victima";
$tdatahechos_delictivos11[".googleLikeFields"][] = "oc_victima";
$tdatahechos_delictivos11[".googleLikeFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos11[".googleLikeFields"][] = "edad_agresor";
$tdatahechos_delictivos11[".googleLikeFields"][] = "sexo_agresor";
$tdatahechos_delictivos11[".googleLikeFields"][] = "ocupa_agresor";
$tdatahechos_delictivos11[".googleLikeFields"][] = "movil";
$tdatahechos_delictivos11[".googleLikeFields"][] = "tipo_arma";
$tdatahechos_delictivos11[".googleLikeFields"][] = "canton_hecho";
$tdatahechos_delictivos11[".googleLikeFields"][] = "colonia_hecho";
$tdatahechos_delictivos11[".googleLikeFields"][] = "caserio_hecho";
$tdatahechos_delictivos11[".googleLikeFields"][] = "calle_hecho";
$tdatahechos_delictivos11[".googleLikeFields"][] = "avenida_hecho";
$tdatahechos_delictivos11[".googleLikeFields"][] = "casa_hecho";
$tdatahechos_delictivos11[".googleLikeFields"][] = "com_hecho";
$tdatahechos_delictivos11[".googleLikeFields"][] = "barrio_hecho";
$tdatahechos_delictivos11[".googleLikeFields"][] = "comp_hecho";
$tdatahechos_delictivos11[".googleLikeFields"][] = "sector_ppd";
$tdatahechos_delictivos11[".googleLikeFields"][] = "tipo";
$tdatahechos_delictivos11[".googleLikeFields"][] = "nombre";
$tdatahechos_delictivos11[".googleLikeFields"][] = "x";
$tdatahechos_delictivos11[".googleLikeFields"][] = "y";
$tdatahechos_delictivos11[".googleLikeFields"][] = "correlativo1";
$tdatahechos_delictivos11[".googleLikeFields"][] = "mes_corre";
$tdatahechos_delictivos11[".googleLikeFields"][] = "arma_analisis";
$tdatahechos_delictivos11[".googleLikeFields"][] = "movil_he";
$tdatahechos_delictivos11[".googleLikeFields"][] = "ocupa_analisis";
$tdatahechos_delictivos11[".googleLikeFields"][] = "rel_vic_ag_anali";


$tdatahechos_delictivos11[".advSearchFields"] = array();
$tdatahechos_delictivos11[".advSearchFields"][] = "id1";
$tdatahechos_delictivos11[".advSearchFields"][] = "id11";
$tdatahechos_delictivos11[".advSearchFields"][] = "correlativo";
$tdatahechos_delictivos11[".advSearchFields"][] = "numero";
$tdatahechos_delictivos11[".advSearchFields"][] = "id";
$tdatahechos_delictivos11[".advSearchFields"][] = "numero2";
$tdatahechos_delictivos11[".advSearchFields"][] = "lugaranalisis";
$tdatahechos_delictivos11[".advSearchFields"][] = "area";
$tdatahechos_delictivos11[".advSearchFields"][] = "delito";
$tdatahechos_delictivos11[".advSearchFields"][] = "codigo_muni";
$tdatahechos_delictivos11[".advSearchFields"][] = "depart_he";
$tdatahechos_delictivos11[".advSearchFields"][] = "muni_he";
$tdatahechos_delictivos11[".advSearchFields"][] = "dire_hecho";
$tdatahechos_delictivos11[".advSearchFields"][] = "lugar_esp";
$tdatahechos_delictivos11[".advSearchFields"][] = "forma_cono";
$tdatahechos_delictivos11[".advSearchFields"][] = "delito_espe";
$tdatahechos_delictivos11[".advSearchFields"][] = "dia_hecho";
$tdatahechos_delictivos11[".advSearchFields"][] = "hora_hecho";
$tdatahechos_delictivos11[".advSearchFields"][] = "rango_hora";
$tdatahechos_delictivos11[".advSearchFields"][] = "fecha_hecho";
$tdatahechos_delictivos11[".advSearchFields"][] = "mes_hecho";
$tdatahechos_delictivos11[".advSearchFields"][] = "aÑo_hecho";
$tdatahechos_delictivos11[".advSearchFields"][] = "edad_victima";
$tdatahechos_delictivos11[".advSearchFields"][] = "ran_eta_vic";
$tdatahechos_delictivos11[".advSearchFields"][] = "s_victima";
$tdatahechos_delictivos11[".advSearchFields"][] = "oc_victima";
$tdatahechos_delictivos11[".advSearchFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos11[".advSearchFields"][] = "edad_agresor";
$tdatahechos_delictivos11[".advSearchFields"][] = "sexo_agresor";
$tdatahechos_delictivos11[".advSearchFields"][] = "ocupa_agresor";
$tdatahechos_delictivos11[".advSearchFields"][] = "movil";
$tdatahechos_delictivos11[".advSearchFields"][] = "tipo_arma";
$tdatahechos_delictivos11[".advSearchFields"][] = "canton_hecho";
$tdatahechos_delictivos11[".advSearchFields"][] = "colonia_hecho";
$tdatahechos_delictivos11[".advSearchFields"][] = "caserio_hecho";
$tdatahechos_delictivos11[".advSearchFields"][] = "calle_hecho";
$tdatahechos_delictivos11[".advSearchFields"][] = "avenida_hecho";
$tdatahechos_delictivos11[".advSearchFields"][] = "casa_hecho";
$tdatahechos_delictivos11[".advSearchFields"][] = "com_hecho";
$tdatahechos_delictivos11[".advSearchFields"][] = "barrio_hecho";
$tdatahechos_delictivos11[".advSearchFields"][] = "comp_hecho";
$tdatahechos_delictivos11[".advSearchFields"][] = "sector_ppd";
$tdatahechos_delictivos11[".advSearchFields"][] = "tipo";
$tdatahechos_delictivos11[".advSearchFields"][] = "nombre";
$tdatahechos_delictivos11[".advSearchFields"][] = "x";
$tdatahechos_delictivos11[".advSearchFields"][] = "y";
$tdatahechos_delictivos11[".advSearchFields"][] = "correlativo1";
$tdatahechos_delictivos11[".advSearchFields"][] = "mes_corre";
$tdatahechos_delictivos11[".advSearchFields"][] = "arma_analisis";
$tdatahechos_delictivos11[".advSearchFields"][] = "movil_he";
$tdatahechos_delictivos11[".advSearchFields"][] = "ocupa_analisis";
$tdatahechos_delictivos11[".advSearchFields"][] = "rel_vic_ag_anali";

$tdatahechos_delictivos11[".tableType"] = "list";

$tdatahechos_delictivos11[".printerPageOrientation"] = 0;
$tdatahechos_delictivos11[".nPrinterPageScale"] = 100;

$tdatahechos_delictivos11[".nPrinterSplitRecords"] = 40;

$tdatahechos_delictivos11[".nPrinterPDFSplitRecords"] = 40;



$tdatahechos_delictivos11[".geocodingEnabled"] = false;





$tdatahechos_delictivos11[".listGridLayout"] = 3;

$tdatahechos_delictivos11[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatahechos_delictivos11[".pageSize"] = 10;

$tdatahechos_delictivos11[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY sector_ppd DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahechos_delictivos11[".strOrderBy"] = $tstrOrderBy;

$tdatahechos_delictivos11[".orderindexes"] = array();
$tdatahechos_delictivos11[".orderindexes"][] = array(42, (0 ? "ASC" : "DESC"), "sector_ppd");

$tdatahechos_delictivos11[".sqlHead"] = "SELECT id1,  id11,  correlativo,  numero,  id,  numero2,  lugaranalisis,  area,  delito,  codigo_muni,  depart_he,  muni_he,  dire_hecho,  lugar_esp,  forma_cono,  delito_espe,  dia_hecho,  hora_hecho,  rango_hora,  fecha_hecho,  mes_hecho,  `aÑo_hecho`,  edad_victima,  ran_eta_vic,  s_victima,  oc_victima,  relacion_vi_agre,  edad_agresor,  sexo_agresor,  ocupa_agresor,  movil,  tipo_arma,  canton_hecho,  colonia_hecho,  caserio_hecho,  calle_hecho,  avenida_hecho,  casa_hecho,  com_hecho,  barrio_hecho,  comp_hecho,  sector_ppd,  tipo,  nombre,  x,  y,  correlativo1,  mes_corre,  arma_analisis,  movil_he,  ocupa_analisis,  rel_vic_ag_anali";
$tdatahechos_delictivos11[".sqlFrom"] = "FROM hechos_delictivos1";
$tdatahechos_delictivos11[".sqlWhereExpr"] = "sector_ppd ='SS-240.026'";
$tdatahechos_delictivos11[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahechos_delictivos11[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahechos_delictivos11[".arrGroupsPerPage"] = $arrGPP;

$tdatahechos_delictivos11[".highlightSearchResults"] = true;

$tableKeyshechos_delictivos11 = array();
$tdatahechos_delictivos11[".Keys"] = $tableKeyshechos_delictivos11;

$tdatahechos_delictivos11[".listFields"] = array();
$tdatahechos_delictivos11[".listFields"][] = "id1";
$tdatahechos_delictivos11[".listFields"][] = "id11";
$tdatahechos_delictivos11[".listFields"][] = "correlativo";
$tdatahechos_delictivos11[".listFields"][] = "numero";
$tdatahechos_delictivos11[".listFields"][] = "id";
$tdatahechos_delictivos11[".listFields"][] = "numero2";
$tdatahechos_delictivos11[".listFields"][] = "lugaranalisis";
$tdatahechos_delictivos11[".listFields"][] = "area";
$tdatahechos_delictivos11[".listFields"][] = "delito";
$tdatahechos_delictivos11[".listFields"][] = "codigo_muni";
$tdatahechos_delictivos11[".listFields"][] = "depart_he";
$tdatahechos_delictivos11[".listFields"][] = "muni_he";
$tdatahechos_delictivos11[".listFields"][] = "dire_hecho";
$tdatahechos_delictivos11[".listFields"][] = "lugar_esp";
$tdatahechos_delictivos11[".listFields"][] = "forma_cono";
$tdatahechos_delictivos11[".listFields"][] = "delito_espe";
$tdatahechos_delictivos11[".listFields"][] = "dia_hecho";
$tdatahechos_delictivos11[".listFields"][] = "hora_hecho";
$tdatahechos_delictivos11[".listFields"][] = "rango_hora";
$tdatahechos_delictivos11[".listFields"][] = "fecha_hecho";
$tdatahechos_delictivos11[".listFields"][] = "mes_hecho";
$tdatahechos_delictivos11[".listFields"][] = "aÑo_hecho";
$tdatahechos_delictivos11[".listFields"][] = "edad_victima";
$tdatahechos_delictivos11[".listFields"][] = "ran_eta_vic";
$tdatahechos_delictivos11[".listFields"][] = "s_victima";
$tdatahechos_delictivos11[".listFields"][] = "oc_victima";
$tdatahechos_delictivos11[".listFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos11[".listFields"][] = "edad_agresor";
$tdatahechos_delictivos11[".listFields"][] = "sexo_agresor";
$tdatahechos_delictivos11[".listFields"][] = "ocupa_agresor";
$tdatahechos_delictivos11[".listFields"][] = "movil";
$tdatahechos_delictivos11[".listFields"][] = "tipo_arma";
$tdatahechos_delictivos11[".listFields"][] = "canton_hecho";
$tdatahechos_delictivos11[".listFields"][] = "colonia_hecho";
$tdatahechos_delictivos11[".listFields"][] = "caserio_hecho";
$tdatahechos_delictivos11[".listFields"][] = "calle_hecho";
$tdatahechos_delictivos11[".listFields"][] = "avenida_hecho";
$tdatahechos_delictivos11[".listFields"][] = "casa_hecho";
$tdatahechos_delictivos11[".listFields"][] = "com_hecho";
$tdatahechos_delictivos11[".listFields"][] = "barrio_hecho";
$tdatahechos_delictivos11[".listFields"][] = "comp_hecho";
$tdatahechos_delictivos11[".listFields"][] = "sector_ppd";
$tdatahechos_delictivos11[".listFields"][] = "tipo";
$tdatahechos_delictivos11[".listFields"][] = "nombre";
$tdatahechos_delictivos11[".listFields"][] = "x";
$tdatahechos_delictivos11[".listFields"][] = "y";
$tdatahechos_delictivos11[".listFields"][] = "correlativo1";
$tdatahechos_delictivos11[".listFields"][] = "mes_corre";
$tdatahechos_delictivos11[".listFields"][] = "arma_analisis";
$tdatahechos_delictivos11[".listFields"][] = "movil_he";
$tdatahechos_delictivos11[".listFields"][] = "ocupa_analisis";
$tdatahechos_delictivos11[".listFields"][] = "rel_vic_ag_anali";

$tdatahechos_delictivos11[".hideMobileList"] = array();


$tdatahechos_delictivos11[".viewFields"] = array();
$tdatahechos_delictivos11[".viewFields"][] = "id1";
$tdatahechos_delictivos11[".viewFields"][] = "id11";
$tdatahechos_delictivos11[".viewFields"][] = "correlativo";
$tdatahechos_delictivos11[".viewFields"][] = "numero";
$tdatahechos_delictivos11[".viewFields"][] = "id";
$tdatahechos_delictivos11[".viewFields"][] = "numero2";
$tdatahechos_delictivos11[".viewFields"][] = "lugaranalisis";
$tdatahechos_delictivos11[".viewFields"][] = "area";
$tdatahechos_delictivos11[".viewFields"][] = "delito";
$tdatahechos_delictivos11[".viewFields"][] = "codigo_muni";
$tdatahechos_delictivos11[".viewFields"][] = "depart_he";
$tdatahechos_delictivos11[".viewFields"][] = "muni_he";
$tdatahechos_delictivos11[".viewFields"][] = "dire_hecho";
$tdatahechos_delictivos11[".viewFields"][] = "lugar_esp";
$tdatahechos_delictivos11[".viewFields"][] = "forma_cono";
$tdatahechos_delictivos11[".viewFields"][] = "delito_espe";
$tdatahechos_delictivos11[".viewFields"][] = "dia_hecho";
$tdatahechos_delictivos11[".viewFields"][] = "hora_hecho";
$tdatahechos_delictivos11[".viewFields"][] = "rango_hora";
$tdatahechos_delictivos11[".viewFields"][] = "fecha_hecho";
$tdatahechos_delictivos11[".viewFields"][] = "mes_hecho";
$tdatahechos_delictivos11[".viewFields"][] = "aÑo_hecho";
$tdatahechos_delictivos11[".viewFields"][] = "edad_victima";
$tdatahechos_delictivos11[".viewFields"][] = "ran_eta_vic";
$tdatahechos_delictivos11[".viewFields"][] = "s_victima";
$tdatahechos_delictivos11[".viewFields"][] = "oc_victima";
$tdatahechos_delictivos11[".viewFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos11[".viewFields"][] = "edad_agresor";
$tdatahechos_delictivos11[".viewFields"][] = "sexo_agresor";
$tdatahechos_delictivos11[".viewFields"][] = "ocupa_agresor";
$tdatahechos_delictivos11[".viewFields"][] = "movil";
$tdatahechos_delictivos11[".viewFields"][] = "tipo_arma";
$tdatahechos_delictivos11[".viewFields"][] = "canton_hecho";
$tdatahechos_delictivos11[".viewFields"][] = "colonia_hecho";
$tdatahechos_delictivos11[".viewFields"][] = "caserio_hecho";
$tdatahechos_delictivos11[".viewFields"][] = "calle_hecho";
$tdatahechos_delictivos11[".viewFields"][] = "avenida_hecho";
$tdatahechos_delictivos11[".viewFields"][] = "casa_hecho";
$tdatahechos_delictivos11[".viewFields"][] = "com_hecho";
$tdatahechos_delictivos11[".viewFields"][] = "barrio_hecho";
$tdatahechos_delictivos11[".viewFields"][] = "comp_hecho";
$tdatahechos_delictivos11[".viewFields"][] = "sector_ppd";
$tdatahechos_delictivos11[".viewFields"][] = "tipo";
$tdatahechos_delictivos11[".viewFields"][] = "nombre";
$tdatahechos_delictivos11[".viewFields"][] = "x";
$tdatahechos_delictivos11[".viewFields"][] = "y";
$tdatahechos_delictivos11[".viewFields"][] = "correlativo1";
$tdatahechos_delictivos11[".viewFields"][] = "mes_corre";
$tdatahechos_delictivos11[".viewFields"][] = "arma_analisis";
$tdatahechos_delictivos11[".viewFields"][] = "movil_he";
$tdatahechos_delictivos11[".viewFields"][] = "ocupa_analisis";
$tdatahechos_delictivos11[".viewFields"][] = "rel_vic_ag_anali";

$tdatahechos_delictivos11[".addFields"] = array();
$tdatahechos_delictivos11[".addFields"][] = "id1";
$tdatahechos_delictivos11[".addFields"][] = "id11";
$tdatahechos_delictivos11[".addFields"][] = "correlativo";
$tdatahechos_delictivos11[".addFields"][] = "numero";
$tdatahechos_delictivos11[".addFields"][] = "id";
$tdatahechos_delictivos11[".addFields"][] = "numero2";
$tdatahechos_delictivos11[".addFields"][] = "lugaranalisis";
$tdatahechos_delictivos11[".addFields"][] = "area";
$tdatahechos_delictivos11[".addFields"][] = "delito";
$tdatahechos_delictivos11[".addFields"][] = "codigo_muni";
$tdatahechos_delictivos11[".addFields"][] = "depart_he";
$tdatahechos_delictivos11[".addFields"][] = "muni_he";
$tdatahechos_delictivos11[".addFields"][] = "dire_hecho";
$tdatahechos_delictivos11[".addFields"][] = "lugar_esp";
$tdatahechos_delictivos11[".addFields"][] = "forma_cono";
$tdatahechos_delictivos11[".addFields"][] = "delito_espe";
$tdatahechos_delictivos11[".addFields"][] = "dia_hecho";
$tdatahechos_delictivos11[".addFields"][] = "hora_hecho";
$tdatahechos_delictivos11[".addFields"][] = "rango_hora";
$tdatahechos_delictivos11[".addFields"][] = "fecha_hecho";
$tdatahechos_delictivos11[".addFields"][] = "mes_hecho";
$tdatahechos_delictivos11[".addFields"][] = "aÑo_hecho";
$tdatahechos_delictivos11[".addFields"][] = "edad_victima";
$tdatahechos_delictivos11[".addFields"][] = "ran_eta_vic";
$tdatahechos_delictivos11[".addFields"][] = "s_victima";
$tdatahechos_delictivos11[".addFields"][] = "oc_victima";
$tdatahechos_delictivos11[".addFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos11[".addFields"][] = "edad_agresor";
$tdatahechos_delictivos11[".addFields"][] = "sexo_agresor";
$tdatahechos_delictivos11[".addFields"][] = "ocupa_agresor";
$tdatahechos_delictivos11[".addFields"][] = "movil";
$tdatahechos_delictivos11[".addFields"][] = "tipo_arma";
$tdatahechos_delictivos11[".addFields"][] = "canton_hecho";
$tdatahechos_delictivos11[".addFields"][] = "colonia_hecho";
$tdatahechos_delictivos11[".addFields"][] = "caserio_hecho";
$tdatahechos_delictivos11[".addFields"][] = "calle_hecho";
$tdatahechos_delictivos11[".addFields"][] = "avenida_hecho";
$tdatahechos_delictivos11[".addFields"][] = "casa_hecho";
$tdatahechos_delictivos11[".addFields"][] = "com_hecho";
$tdatahechos_delictivos11[".addFields"][] = "barrio_hecho";
$tdatahechos_delictivos11[".addFields"][] = "comp_hecho";
$tdatahechos_delictivos11[".addFields"][] = "sector_ppd";
$tdatahechos_delictivos11[".addFields"][] = "tipo";
$tdatahechos_delictivos11[".addFields"][] = "nombre";
$tdatahechos_delictivos11[".addFields"][] = "x";
$tdatahechos_delictivos11[".addFields"][] = "y";
$tdatahechos_delictivos11[".addFields"][] = "correlativo1";
$tdatahechos_delictivos11[".addFields"][] = "mes_corre";
$tdatahechos_delictivos11[".addFields"][] = "arma_analisis";
$tdatahechos_delictivos11[".addFields"][] = "movil_he";
$tdatahechos_delictivos11[".addFields"][] = "ocupa_analisis";
$tdatahechos_delictivos11[".addFields"][] = "rel_vic_ag_anali";

$tdatahechos_delictivos11[".masterListFields"] = array();
$tdatahechos_delictivos11[".masterListFields"][] = "id1";
$tdatahechos_delictivos11[".masterListFields"][] = "id11";
$tdatahechos_delictivos11[".masterListFields"][] = "correlativo";
$tdatahechos_delictivos11[".masterListFields"][] = "numero";
$tdatahechos_delictivos11[".masterListFields"][] = "id";
$tdatahechos_delictivos11[".masterListFields"][] = "numero2";
$tdatahechos_delictivos11[".masterListFields"][] = "lugaranalisis";
$tdatahechos_delictivos11[".masterListFields"][] = "area";
$tdatahechos_delictivos11[".masterListFields"][] = "delito";
$tdatahechos_delictivos11[".masterListFields"][] = "codigo_muni";
$tdatahechos_delictivos11[".masterListFields"][] = "depart_he";
$tdatahechos_delictivos11[".masterListFields"][] = "muni_he";
$tdatahechos_delictivos11[".masterListFields"][] = "dire_hecho";
$tdatahechos_delictivos11[".masterListFields"][] = "lugar_esp";
$tdatahechos_delictivos11[".masterListFields"][] = "forma_cono";
$tdatahechos_delictivos11[".masterListFields"][] = "delito_espe";
$tdatahechos_delictivos11[".masterListFields"][] = "dia_hecho";
$tdatahechos_delictivos11[".masterListFields"][] = "hora_hecho";
$tdatahechos_delictivos11[".masterListFields"][] = "rango_hora";
$tdatahechos_delictivos11[".masterListFields"][] = "fecha_hecho";
$tdatahechos_delictivos11[".masterListFields"][] = "mes_hecho";
$tdatahechos_delictivos11[".masterListFields"][] = "aÑo_hecho";
$tdatahechos_delictivos11[".masterListFields"][] = "edad_victima";
$tdatahechos_delictivos11[".masterListFields"][] = "ran_eta_vic";
$tdatahechos_delictivos11[".masterListFields"][] = "s_victima";
$tdatahechos_delictivos11[".masterListFields"][] = "oc_victima";
$tdatahechos_delictivos11[".masterListFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos11[".masterListFields"][] = "edad_agresor";
$tdatahechos_delictivos11[".masterListFields"][] = "sexo_agresor";
$tdatahechos_delictivos11[".masterListFields"][] = "ocupa_agresor";
$tdatahechos_delictivos11[".masterListFields"][] = "movil";
$tdatahechos_delictivos11[".masterListFields"][] = "tipo_arma";
$tdatahechos_delictivos11[".masterListFields"][] = "canton_hecho";
$tdatahechos_delictivos11[".masterListFields"][] = "colonia_hecho";
$tdatahechos_delictivos11[".masterListFields"][] = "caserio_hecho";
$tdatahechos_delictivos11[".masterListFields"][] = "calle_hecho";
$tdatahechos_delictivos11[".masterListFields"][] = "avenida_hecho";
$tdatahechos_delictivos11[".masterListFields"][] = "casa_hecho";
$tdatahechos_delictivos11[".masterListFields"][] = "com_hecho";
$tdatahechos_delictivos11[".masterListFields"][] = "barrio_hecho";
$tdatahechos_delictivos11[".masterListFields"][] = "comp_hecho";
$tdatahechos_delictivos11[".masterListFields"][] = "sector_ppd";
$tdatahechos_delictivos11[".masterListFields"][] = "tipo";
$tdatahechos_delictivos11[".masterListFields"][] = "nombre";
$tdatahechos_delictivos11[".masterListFields"][] = "x";
$tdatahechos_delictivos11[".masterListFields"][] = "y";
$tdatahechos_delictivos11[".masterListFields"][] = "correlativo1";
$tdatahechos_delictivos11[".masterListFields"][] = "mes_corre";
$tdatahechos_delictivos11[".masterListFields"][] = "arma_analisis";
$tdatahechos_delictivos11[".masterListFields"][] = "movil_he";
$tdatahechos_delictivos11[".masterListFields"][] = "ocupa_analisis";
$tdatahechos_delictivos11[".masterListFields"][] = "rel_vic_ag_anali";

$tdatahechos_delictivos11[".inlineAddFields"] = array();
$tdatahechos_delictivos11[".inlineAddFields"][] = "id1";
$tdatahechos_delictivos11[".inlineAddFields"][] = "id11";
$tdatahechos_delictivos11[".inlineAddFields"][] = "correlativo";
$tdatahechos_delictivos11[".inlineAddFields"][] = "numero";
$tdatahechos_delictivos11[".inlineAddFields"][] = "id";
$tdatahechos_delictivos11[".inlineAddFields"][] = "numero2";
$tdatahechos_delictivos11[".inlineAddFields"][] = "lugaranalisis";
$tdatahechos_delictivos11[".inlineAddFields"][] = "area";
$tdatahechos_delictivos11[".inlineAddFields"][] = "delito";
$tdatahechos_delictivos11[".inlineAddFields"][] = "codigo_muni";
$tdatahechos_delictivos11[".inlineAddFields"][] = "depart_he";
$tdatahechos_delictivos11[".inlineAddFields"][] = "muni_he";
$tdatahechos_delictivos11[".inlineAddFields"][] = "dire_hecho";
$tdatahechos_delictivos11[".inlineAddFields"][] = "lugar_esp";
$tdatahechos_delictivos11[".inlineAddFields"][] = "forma_cono";
$tdatahechos_delictivos11[".inlineAddFields"][] = "delito_espe";
$tdatahechos_delictivos11[".inlineAddFields"][] = "dia_hecho";
$tdatahechos_delictivos11[".inlineAddFields"][] = "hora_hecho";
$tdatahechos_delictivos11[".inlineAddFields"][] = "rango_hora";
$tdatahechos_delictivos11[".inlineAddFields"][] = "fecha_hecho";
$tdatahechos_delictivos11[".inlineAddFields"][] = "mes_hecho";
$tdatahechos_delictivos11[".inlineAddFields"][] = "aÑo_hecho";
$tdatahechos_delictivos11[".inlineAddFields"][] = "edad_victima";
$tdatahechos_delictivos11[".inlineAddFields"][] = "ran_eta_vic";
$tdatahechos_delictivos11[".inlineAddFields"][] = "s_victima";
$tdatahechos_delictivos11[".inlineAddFields"][] = "oc_victima";
$tdatahechos_delictivos11[".inlineAddFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos11[".inlineAddFields"][] = "edad_agresor";
$tdatahechos_delictivos11[".inlineAddFields"][] = "sexo_agresor";
$tdatahechos_delictivos11[".inlineAddFields"][] = "ocupa_agresor";
$tdatahechos_delictivos11[".inlineAddFields"][] = "movil";
$tdatahechos_delictivos11[".inlineAddFields"][] = "tipo_arma";
$tdatahechos_delictivos11[".inlineAddFields"][] = "canton_hecho";
$tdatahechos_delictivos11[".inlineAddFields"][] = "colonia_hecho";
$tdatahechos_delictivos11[".inlineAddFields"][] = "caserio_hecho";
$tdatahechos_delictivos11[".inlineAddFields"][] = "calle_hecho";
$tdatahechos_delictivos11[".inlineAddFields"][] = "avenida_hecho";
$tdatahechos_delictivos11[".inlineAddFields"][] = "casa_hecho";
$tdatahechos_delictivos11[".inlineAddFields"][] = "com_hecho";
$tdatahechos_delictivos11[".inlineAddFields"][] = "barrio_hecho";
$tdatahechos_delictivos11[".inlineAddFields"][] = "comp_hecho";
$tdatahechos_delictivos11[".inlineAddFields"][] = "sector_ppd";
$tdatahechos_delictivos11[".inlineAddFields"][] = "tipo";
$tdatahechos_delictivos11[".inlineAddFields"][] = "nombre";
$tdatahechos_delictivos11[".inlineAddFields"][] = "x";
$tdatahechos_delictivos11[".inlineAddFields"][] = "y";
$tdatahechos_delictivos11[".inlineAddFields"][] = "correlativo1";
$tdatahechos_delictivos11[".inlineAddFields"][] = "mes_corre";
$tdatahechos_delictivos11[".inlineAddFields"][] = "arma_analisis";
$tdatahechos_delictivos11[".inlineAddFields"][] = "movil_he";
$tdatahechos_delictivos11[".inlineAddFields"][] = "ocupa_analisis";
$tdatahechos_delictivos11[".inlineAddFields"][] = "rel_vic_ag_anali";

$tdatahechos_delictivos11[".editFields"] = array();
$tdatahechos_delictivos11[".editFields"][] = "id1";
$tdatahechos_delictivos11[".editFields"][] = "id11";
$tdatahechos_delictivos11[".editFields"][] = "correlativo";
$tdatahechos_delictivos11[".editFields"][] = "numero";
$tdatahechos_delictivos11[".editFields"][] = "id";
$tdatahechos_delictivos11[".editFields"][] = "numero2";
$tdatahechos_delictivos11[".editFields"][] = "lugaranalisis";
$tdatahechos_delictivos11[".editFields"][] = "area";
$tdatahechos_delictivos11[".editFields"][] = "delito";
$tdatahechos_delictivos11[".editFields"][] = "codigo_muni";
$tdatahechos_delictivos11[".editFields"][] = "depart_he";
$tdatahechos_delictivos11[".editFields"][] = "muni_he";
$tdatahechos_delictivos11[".editFields"][] = "dire_hecho";
$tdatahechos_delictivos11[".editFields"][] = "lugar_esp";
$tdatahechos_delictivos11[".editFields"][] = "forma_cono";
$tdatahechos_delictivos11[".editFields"][] = "delito_espe";
$tdatahechos_delictivos11[".editFields"][] = "dia_hecho";
$tdatahechos_delictivos11[".editFields"][] = "hora_hecho";
$tdatahechos_delictivos11[".editFields"][] = "rango_hora";
$tdatahechos_delictivos11[".editFields"][] = "fecha_hecho";
$tdatahechos_delictivos11[".editFields"][] = "mes_hecho";
$tdatahechos_delictivos11[".editFields"][] = "aÑo_hecho";
$tdatahechos_delictivos11[".editFields"][] = "edad_victima";
$tdatahechos_delictivos11[".editFields"][] = "ran_eta_vic";
$tdatahechos_delictivos11[".editFields"][] = "s_victima";
$tdatahechos_delictivos11[".editFields"][] = "oc_victima";
$tdatahechos_delictivos11[".editFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos11[".editFields"][] = "edad_agresor";
$tdatahechos_delictivos11[".editFields"][] = "sexo_agresor";
$tdatahechos_delictivos11[".editFields"][] = "ocupa_agresor";
$tdatahechos_delictivos11[".editFields"][] = "movil";
$tdatahechos_delictivos11[".editFields"][] = "tipo_arma";
$tdatahechos_delictivos11[".editFields"][] = "canton_hecho";
$tdatahechos_delictivos11[".editFields"][] = "colonia_hecho";
$tdatahechos_delictivos11[".editFields"][] = "caserio_hecho";
$tdatahechos_delictivos11[".editFields"][] = "calle_hecho";
$tdatahechos_delictivos11[".editFields"][] = "avenida_hecho";
$tdatahechos_delictivos11[".editFields"][] = "casa_hecho";
$tdatahechos_delictivos11[".editFields"][] = "com_hecho";
$tdatahechos_delictivos11[".editFields"][] = "barrio_hecho";
$tdatahechos_delictivos11[".editFields"][] = "comp_hecho";
$tdatahechos_delictivos11[".editFields"][] = "sector_ppd";
$tdatahechos_delictivos11[".editFields"][] = "tipo";
$tdatahechos_delictivos11[".editFields"][] = "nombre";
$tdatahechos_delictivos11[".editFields"][] = "x";
$tdatahechos_delictivos11[".editFields"][] = "y";
$tdatahechos_delictivos11[".editFields"][] = "correlativo1";
$tdatahechos_delictivos11[".editFields"][] = "mes_corre";
$tdatahechos_delictivos11[".editFields"][] = "arma_analisis";
$tdatahechos_delictivos11[".editFields"][] = "movil_he";
$tdatahechos_delictivos11[".editFields"][] = "ocupa_analisis";
$tdatahechos_delictivos11[".editFields"][] = "rel_vic_ag_anali";

$tdatahechos_delictivos11[".inlineEditFields"] = array();
$tdatahechos_delictivos11[".inlineEditFields"][] = "id1";
$tdatahechos_delictivos11[".inlineEditFields"][] = "id11";
$tdatahechos_delictivos11[".inlineEditFields"][] = "correlativo";
$tdatahechos_delictivos11[".inlineEditFields"][] = "numero";
$tdatahechos_delictivos11[".inlineEditFields"][] = "id";
$tdatahechos_delictivos11[".inlineEditFields"][] = "numero2";
$tdatahechos_delictivos11[".inlineEditFields"][] = "lugaranalisis";
$tdatahechos_delictivos11[".inlineEditFields"][] = "area";
$tdatahechos_delictivos11[".inlineEditFields"][] = "delito";
$tdatahechos_delictivos11[".inlineEditFields"][] = "codigo_muni";
$tdatahechos_delictivos11[".inlineEditFields"][] = "depart_he";
$tdatahechos_delictivos11[".inlineEditFields"][] = "muni_he";
$tdatahechos_delictivos11[".inlineEditFields"][] = "dire_hecho";
$tdatahechos_delictivos11[".inlineEditFields"][] = "lugar_esp";
$tdatahechos_delictivos11[".inlineEditFields"][] = "forma_cono";
$tdatahechos_delictivos11[".inlineEditFields"][] = "delito_espe";
$tdatahechos_delictivos11[".inlineEditFields"][] = "dia_hecho";
$tdatahechos_delictivos11[".inlineEditFields"][] = "hora_hecho";
$tdatahechos_delictivos11[".inlineEditFields"][] = "rango_hora";
$tdatahechos_delictivos11[".inlineEditFields"][] = "fecha_hecho";
$tdatahechos_delictivos11[".inlineEditFields"][] = "mes_hecho";
$tdatahechos_delictivos11[".inlineEditFields"][] = "aÑo_hecho";
$tdatahechos_delictivos11[".inlineEditFields"][] = "edad_victima";
$tdatahechos_delictivos11[".inlineEditFields"][] = "ran_eta_vic";
$tdatahechos_delictivos11[".inlineEditFields"][] = "s_victima";
$tdatahechos_delictivos11[".inlineEditFields"][] = "oc_victima";
$tdatahechos_delictivos11[".inlineEditFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos11[".inlineEditFields"][] = "edad_agresor";
$tdatahechos_delictivos11[".inlineEditFields"][] = "sexo_agresor";
$tdatahechos_delictivos11[".inlineEditFields"][] = "ocupa_agresor";
$tdatahechos_delictivos11[".inlineEditFields"][] = "movil";
$tdatahechos_delictivos11[".inlineEditFields"][] = "tipo_arma";
$tdatahechos_delictivos11[".inlineEditFields"][] = "canton_hecho";
$tdatahechos_delictivos11[".inlineEditFields"][] = "colonia_hecho";
$tdatahechos_delictivos11[".inlineEditFields"][] = "caserio_hecho";
$tdatahechos_delictivos11[".inlineEditFields"][] = "calle_hecho";
$tdatahechos_delictivos11[".inlineEditFields"][] = "avenida_hecho";
$tdatahechos_delictivos11[".inlineEditFields"][] = "casa_hecho";
$tdatahechos_delictivos11[".inlineEditFields"][] = "com_hecho";
$tdatahechos_delictivos11[".inlineEditFields"][] = "barrio_hecho";
$tdatahechos_delictivos11[".inlineEditFields"][] = "comp_hecho";
$tdatahechos_delictivos11[".inlineEditFields"][] = "sector_ppd";
$tdatahechos_delictivos11[".inlineEditFields"][] = "tipo";
$tdatahechos_delictivos11[".inlineEditFields"][] = "nombre";
$tdatahechos_delictivos11[".inlineEditFields"][] = "x";
$tdatahechos_delictivos11[".inlineEditFields"][] = "y";
$tdatahechos_delictivos11[".inlineEditFields"][] = "correlativo1";
$tdatahechos_delictivos11[".inlineEditFields"][] = "mes_corre";
$tdatahechos_delictivos11[".inlineEditFields"][] = "arma_analisis";
$tdatahechos_delictivos11[".inlineEditFields"][] = "movil_he";
$tdatahechos_delictivos11[".inlineEditFields"][] = "ocupa_analisis";
$tdatahechos_delictivos11[".inlineEditFields"][] = "rel_vic_ag_anali";

$tdatahechos_delictivos11[".updateSelectedFields"] = array();
$tdatahechos_delictivos11[".updateSelectedFields"][] = "id1";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "id11";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "correlativo";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "numero";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "id";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "numero2";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "lugaranalisis";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "area";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "delito";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "codigo_muni";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "depart_he";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "muni_he";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "dire_hecho";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "lugar_esp";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "forma_cono";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "delito_espe";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "dia_hecho";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "hora_hecho";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "rango_hora";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "fecha_hecho";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "mes_hecho";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "aÑo_hecho";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "edad_victima";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "ran_eta_vic";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "s_victima";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "oc_victima";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "edad_agresor";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "sexo_agresor";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "ocupa_agresor";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "movil";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "tipo_arma";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "canton_hecho";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "colonia_hecho";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "caserio_hecho";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "calle_hecho";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "avenida_hecho";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "casa_hecho";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "com_hecho";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "barrio_hecho";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "comp_hecho";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "sector_ppd";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "tipo";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "nombre";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "x";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "y";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "correlativo1";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "mes_corre";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "arma_analisis";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "movil_he";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "ocupa_analisis";
$tdatahechos_delictivos11[".updateSelectedFields"][] = "rel_vic_ag_anali";


$tdatahechos_delictivos11[".exportFields"] = array();
$tdatahechos_delictivos11[".exportFields"][] = "id1";
$tdatahechos_delictivos11[".exportFields"][] = "id11";
$tdatahechos_delictivos11[".exportFields"][] = "correlativo";
$tdatahechos_delictivos11[".exportFields"][] = "numero";
$tdatahechos_delictivos11[".exportFields"][] = "id";
$tdatahechos_delictivos11[".exportFields"][] = "numero2";
$tdatahechos_delictivos11[".exportFields"][] = "lugaranalisis";
$tdatahechos_delictivos11[".exportFields"][] = "area";
$tdatahechos_delictivos11[".exportFields"][] = "delito";
$tdatahechos_delictivos11[".exportFields"][] = "codigo_muni";
$tdatahechos_delictivos11[".exportFields"][] = "depart_he";
$tdatahechos_delictivos11[".exportFields"][] = "muni_he";
$tdatahechos_delictivos11[".exportFields"][] = "dire_hecho";
$tdatahechos_delictivos11[".exportFields"][] = "lugar_esp";
$tdatahechos_delictivos11[".exportFields"][] = "forma_cono";
$tdatahechos_delictivos11[".exportFields"][] = "delito_espe";
$tdatahechos_delictivos11[".exportFields"][] = "dia_hecho";
$tdatahechos_delictivos11[".exportFields"][] = "hora_hecho";
$tdatahechos_delictivos11[".exportFields"][] = "rango_hora";
$tdatahechos_delictivos11[".exportFields"][] = "fecha_hecho";
$tdatahechos_delictivos11[".exportFields"][] = "mes_hecho";
$tdatahechos_delictivos11[".exportFields"][] = "aÑo_hecho";
$tdatahechos_delictivos11[".exportFields"][] = "edad_victima";
$tdatahechos_delictivos11[".exportFields"][] = "ran_eta_vic";
$tdatahechos_delictivos11[".exportFields"][] = "s_victima";
$tdatahechos_delictivos11[".exportFields"][] = "oc_victima";
$tdatahechos_delictivos11[".exportFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos11[".exportFields"][] = "edad_agresor";
$tdatahechos_delictivos11[".exportFields"][] = "sexo_agresor";
$tdatahechos_delictivos11[".exportFields"][] = "ocupa_agresor";
$tdatahechos_delictivos11[".exportFields"][] = "movil";
$tdatahechos_delictivos11[".exportFields"][] = "tipo_arma";
$tdatahechos_delictivos11[".exportFields"][] = "canton_hecho";
$tdatahechos_delictivos11[".exportFields"][] = "colonia_hecho";
$tdatahechos_delictivos11[".exportFields"][] = "caserio_hecho";
$tdatahechos_delictivos11[".exportFields"][] = "calle_hecho";
$tdatahechos_delictivos11[".exportFields"][] = "avenida_hecho";
$tdatahechos_delictivos11[".exportFields"][] = "casa_hecho";
$tdatahechos_delictivos11[".exportFields"][] = "com_hecho";
$tdatahechos_delictivos11[".exportFields"][] = "barrio_hecho";
$tdatahechos_delictivos11[".exportFields"][] = "comp_hecho";
$tdatahechos_delictivos11[".exportFields"][] = "sector_ppd";
$tdatahechos_delictivos11[".exportFields"][] = "tipo";
$tdatahechos_delictivos11[".exportFields"][] = "nombre";
$tdatahechos_delictivos11[".exportFields"][] = "x";
$tdatahechos_delictivos11[".exportFields"][] = "y";
$tdatahechos_delictivos11[".exportFields"][] = "correlativo1";
$tdatahechos_delictivos11[".exportFields"][] = "mes_corre";
$tdatahechos_delictivos11[".exportFields"][] = "arma_analisis";
$tdatahechos_delictivos11[".exportFields"][] = "movil_he";
$tdatahechos_delictivos11[".exportFields"][] = "ocupa_analisis";
$tdatahechos_delictivos11[".exportFields"][] = "rel_vic_ag_anali";

$tdatahechos_delictivos11[".importFields"] = array();
$tdatahechos_delictivos11[".importFields"][] = "id1";
$tdatahechos_delictivos11[".importFields"][] = "id11";
$tdatahechos_delictivos11[".importFields"][] = "correlativo";
$tdatahechos_delictivos11[".importFields"][] = "numero";
$tdatahechos_delictivos11[".importFields"][] = "id";
$tdatahechos_delictivos11[".importFields"][] = "numero2";
$tdatahechos_delictivos11[".importFields"][] = "lugaranalisis";
$tdatahechos_delictivos11[".importFields"][] = "area";
$tdatahechos_delictivos11[".importFields"][] = "delito";
$tdatahechos_delictivos11[".importFields"][] = "codigo_muni";
$tdatahechos_delictivos11[".importFields"][] = "depart_he";
$tdatahechos_delictivos11[".importFields"][] = "muni_he";
$tdatahechos_delictivos11[".importFields"][] = "dire_hecho";
$tdatahechos_delictivos11[".importFields"][] = "lugar_esp";
$tdatahechos_delictivos11[".importFields"][] = "forma_cono";
$tdatahechos_delictivos11[".importFields"][] = "delito_espe";
$tdatahechos_delictivos11[".importFields"][] = "dia_hecho";
$tdatahechos_delictivos11[".importFields"][] = "hora_hecho";
$tdatahechos_delictivos11[".importFields"][] = "rango_hora";
$tdatahechos_delictivos11[".importFields"][] = "fecha_hecho";
$tdatahechos_delictivos11[".importFields"][] = "mes_hecho";
$tdatahechos_delictivos11[".importFields"][] = "aÑo_hecho";
$tdatahechos_delictivos11[".importFields"][] = "edad_victima";
$tdatahechos_delictivos11[".importFields"][] = "ran_eta_vic";
$tdatahechos_delictivos11[".importFields"][] = "s_victima";
$tdatahechos_delictivos11[".importFields"][] = "oc_victima";
$tdatahechos_delictivos11[".importFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos11[".importFields"][] = "edad_agresor";
$tdatahechos_delictivos11[".importFields"][] = "sexo_agresor";
$tdatahechos_delictivos11[".importFields"][] = "ocupa_agresor";
$tdatahechos_delictivos11[".importFields"][] = "movil";
$tdatahechos_delictivos11[".importFields"][] = "tipo_arma";
$tdatahechos_delictivos11[".importFields"][] = "canton_hecho";
$tdatahechos_delictivos11[".importFields"][] = "colonia_hecho";
$tdatahechos_delictivos11[".importFields"][] = "caserio_hecho";
$tdatahechos_delictivos11[".importFields"][] = "calle_hecho";
$tdatahechos_delictivos11[".importFields"][] = "avenida_hecho";
$tdatahechos_delictivos11[".importFields"][] = "casa_hecho";
$tdatahechos_delictivos11[".importFields"][] = "com_hecho";
$tdatahechos_delictivos11[".importFields"][] = "barrio_hecho";
$tdatahechos_delictivos11[".importFields"][] = "comp_hecho";
$tdatahechos_delictivos11[".importFields"][] = "sector_ppd";
$tdatahechos_delictivos11[".importFields"][] = "tipo";
$tdatahechos_delictivos11[".importFields"][] = "nombre";
$tdatahechos_delictivos11[".importFields"][] = "x";
$tdatahechos_delictivos11[".importFields"][] = "y";
$tdatahechos_delictivos11[".importFields"][] = "correlativo1";
$tdatahechos_delictivos11[".importFields"][] = "mes_corre";
$tdatahechos_delictivos11[".importFields"][] = "arma_analisis";
$tdatahechos_delictivos11[".importFields"][] = "movil_he";
$tdatahechos_delictivos11[".importFields"][] = "ocupa_analisis";
$tdatahechos_delictivos11[".importFields"][] = "rel_vic_ag_anali";

$tdatahechos_delictivos11[".printFields"] = array();
$tdatahechos_delictivos11[".printFields"][] = "id1";
$tdatahechos_delictivos11[".printFields"][] = "id11";
$tdatahechos_delictivos11[".printFields"][] = "correlativo";
$tdatahechos_delictivos11[".printFields"][] = "numero";
$tdatahechos_delictivos11[".printFields"][] = "id";
$tdatahechos_delictivos11[".printFields"][] = "numero2";
$tdatahechos_delictivos11[".printFields"][] = "lugaranalisis";
$tdatahechos_delictivos11[".printFields"][] = "area";
$tdatahechos_delictivos11[".printFields"][] = "delito";
$tdatahechos_delictivos11[".printFields"][] = "codigo_muni";
$tdatahechos_delictivos11[".printFields"][] = "depart_he";
$tdatahechos_delictivos11[".printFields"][] = "muni_he";
$tdatahechos_delictivos11[".printFields"][] = "dire_hecho";
$tdatahechos_delictivos11[".printFields"][] = "lugar_esp";
$tdatahechos_delictivos11[".printFields"][] = "forma_cono";
$tdatahechos_delictivos11[".printFields"][] = "delito_espe";
$tdatahechos_delictivos11[".printFields"][] = "dia_hecho";
$tdatahechos_delictivos11[".printFields"][] = "hora_hecho";
$tdatahechos_delictivos11[".printFields"][] = "rango_hora";
$tdatahechos_delictivos11[".printFields"][] = "fecha_hecho";
$tdatahechos_delictivos11[".printFields"][] = "mes_hecho";
$tdatahechos_delictivos11[".printFields"][] = "aÑo_hecho";
$tdatahechos_delictivos11[".printFields"][] = "edad_victima";
$tdatahechos_delictivos11[".printFields"][] = "ran_eta_vic";
$tdatahechos_delictivos11[".printFields"][] = "s_victima";
$tdatahechos_delictivos11[".printFields"][] = "oc_victima";
$tdatahechos_delictivos11[".printFields"][] = "relacion_vi_agre";
$tdatahechos_delictivos11[".printFields"][] = "edad_agresor";
$tdatahechos_delictivos11[".printFields"][] = "sexo_agresor";
$tdatahechos_delictivos11[".printFields"][] = "ocupa_agresor";
$tdatahechos_delictivos11[".printFields"][] = "movil";
$tdatahechos_delictivos11[".printFields"][] = "tipo_arma";
$tdatahechos_delictivos11[".printFields"][] = "canton_hecho";
$tdatahechos_delictivos11[".printFields"][] = "colonia_hecho";
$tdatahechos_delictivos11[".printFields"][] = "caserio_hecho";
$tdatahechos_delictivos11[".printFields"][] = "calle_hecho";
$tdatahechos_delictivos11[".printFields"][] = "avenida_hecho";
$tdatahechos_delictivos11[".printFields"][] = "casa_hecho";
$tdatahechos_delictivos11[".printFields"][] = "com_hecho";
$tdatahechos_delictivos11[".printFields"][] = "barrio_hecho";
$tdatahechos_delictivos11[".printFields"][] = "comp_hecho";
$tdatahechos_delictivos11[".printFields"][] = "sector_ppd";
$tdatahechos_delictivos11[".printFields"][] = "tipo";
$tdatahechos_delictivos11[".printFields"][] = "nombre";
$tdatahechos_delictivos11[".printFields"][] = "x";
$tdatahechos_delictivos11[".printFields"][] = "y";
$tdatahechos_delictivos11[".printFields"][] = "correlativo1";
$tdatahechos_delictivos11[".printFields"][] = "mes_corre";
$tdatahechos_delictivos11[".printFields"][] = "arma_analisis";
$tdatahechos_delictivos11[".printFields"][] = "movil_he";
$tdatahechos_delictivos11[".printFields"][] = "ocupa_analisis";
$tdatahechos_delictivos11[".printFields"][] = "rel_vic_ag_anali";

//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id1";
	$fdata["GoodName"] = "id1";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","id1");
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




	$tdatahechos_delictivos11["id1"] = $fdata;
//	id11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id11";
	$fdata["GoodName"] = "id11";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","id11");
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

		$fdata["strField"] = "id11";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id11";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahechos_delictivos11["id11"] = $fdata;
//	correlativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "correlativo";
	$fdata["GoodName"] = "correlativo";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","correlativo");
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




	$tdatahechos_delictivos11["correlativo"] = $fdata;
//	numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "numero";
	$fdata["GoodName"] = "numero";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","numero");
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




	$tdatahechos_delictivos11["numero"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","id");
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




	$tdatahechos_delictivos11["id"] = $fdata;
//	numero2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "numero2";
	$fdata["GoodName"] = "numero2";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","numero2");
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




	$tdatahechos_delictivos11["numero2"] = $fdata;
//	lugaranalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "lugaranalisis";
	$fdata["GoodName"] = "lugaranalisis";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","lugaranalisis");
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




	$tdatahechos_delictivos11["lugaranalisis"] = $fdata;
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","area");
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




	$tdatahechos_delictivos11["area"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","delito");
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




	$tdatahechos_delictivos11["delito"] = $fdata;
//	codigo_muni
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "codigo_muni";
	$fdata["GoodName"] = "codigo_muni";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","codigo_muni");
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




	$tdatahechos_delictivos11["codigo_muni"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","depart_he");
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




	$tdatahechos_delictivos11["depart_he"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","muni_he");
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




	$tdatahechos_delictivos11["muni_he"] = $fdata;
//	dire_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "dire_hecho";
	$fdata["GoodName"] = "dire_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","dire_hecho");
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




	$tdatahechos_delictivos11["dire_hecho"] = $fdata;
//	lugar_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "lugar_esp";
	$fdata["GoodName"] = "lugar_esp";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","lugar_esp");
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




	$tdatahechos_delictivos11["lugar_esp"] = $fdata;
//	forma_cono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "forma_cono";
	$fdata["GoodName"] = "forma_cono";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","forma_cono");
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




	$tdatahechos_delictivos11["forma_cono"] = $fdata;
//	delito_espe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "delito_espe";
	$fdata["GoodName"] = "delito_espe";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","delito_espe");
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




	$tdatahechos_delictivos11["delito_espe"] = $fdata;
//	dia_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "dia_hecho";
	$fdata["GoodName"] = "dia_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","dia_hecho");
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




	$tdatahechos_delictivos11["dia_hecho"] = $fdata;
//	hora_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "hora_hecho";
	$fdata["GoodName"] = "hora_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","hora_hecho");
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




	$tdatahechos_delictivos11["hora_hecho"] = $fdata;
//	rango_hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "rango_hora";
	$fdata["GoodName"] = "rango_hora";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","rango_hora");
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




	$tdatahechos_delictivos11["rango_hora"] = $fdata;
//	fecha_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "fecha_hecho";
	$fdata["GoodName"] = "fecha_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","fecha_hecho");
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




	$tdatahechos_delictivos11["fecha_hecho"] = $fdata;
//	mes_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "mes_hecho";
	$fdata["GoodName"] = "mes_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","mes_hecho");
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




	$tdatahechos_delictivos11["mes_hecho"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","a_o_hecho");
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




	$tdatahechos_delictivos11["aÑo_hecho"] = $fdata;
//	edad_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "edad_victima";
	$fdata["GoodName"] = "edad_victima";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","edad_victima");
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




	$tdatahechos_delictivos11["edad_victima"] = $fdata;
//	ran_eta_vic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "ran_eta_vic";
	$fdata["GoodName"] = "ran_eta_vic";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","ran_eta_vic");
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




	$tdatahechos_delictivos11["ran_eta_vic"] = $fdata;
//	s_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "s_victima";
	$fdata["GoodName"] = "s_victima";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","s_victima");
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




	$tdatahechos_delictivos11["s_victima"] = $fdata;
//	oc_victima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "oc_victima";
	$fdata["GoodName"] = "oc_victima";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","oc_victima");
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




	$tdatahechos_delictivos11["oc_victima"] = $fdata;
//	relacion_vi_agre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "relacion_vi_agre";
	$fdata["GoodName"] = "relacion_vi_agre";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","relacion_vi_agre");
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




	$tdatahechos_delictivos11["relacion_vi_agre"] = $fdata;
//	edad_agresor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "edad_agresor";
	$fdata["GoodName"] = "edad_agresor";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","edad_agresor");
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




	$tdatahechos_delictivos11["edad_agresor"] = $fdata;
//	sexo_agresor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "sexo_agresor";
	$fdata["GoodName"] = "sexo_agresor";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","sexo_agresor");
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




	$tdatahechos_delictivos11["sexo_agresor"] = $fdata;
//	ocupa_agresor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "ocupa_agresor";
	$fdata["GoodName"] = "ocupa_agresor";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","ocupa_agresor");
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




	$tdatahechos_delictivos11["ocupa_agresor"] = $fdata;
//	movil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "movil";
	$fdata["GoodName"] = "movil";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","movil");
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




	$tdatahechos_delictivos11["movil"] = $fdata;
//	tipo_arma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "tipo_arma";
	$fdata["GoodName"] = "tipo_arma";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","tipo_arma");
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




	$tdatahechos_delictivos11["tipo_arma"] = $fdata;
//	canton_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "canton_hecho";
	$fdata["GoodName"] = "canton_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","canton_hecho");
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




	$tdatahechos_delictivos11["canton_hecho"] = $fdata;
//	colonia_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "colonia_hecho";
	$fdata["GoodName"] = "colonia_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","colonia_hecho");
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




	$tdatahechos_delictivos11["colonia_hecho"] = $fdata;
//	caserio_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "caserio_hecho";
	$fdata["GoodName"] = "caserio_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","caserio_hecho");
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




	$tdatahechos_delictivos11["caserio_hecho"] = $fdata;
//	calle_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "calle_hecho";
	$fdata["GoodName"] = "calle_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","calle_hecho");
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




	$tdatahechos_delictivos11["calle_hecho"] = $fdata;
//	avenida_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "avenida_hecho";
	$fdata["GoodName"] = "avenida_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","avenida_hecho");
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




	$tdatahechos_delictivos11["avenida_hecho"] = $fdata;
//	casa_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "casa_hecho";
	$fdata["GoodName"] = "casa_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","casa_hecho");
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




	$tdatahechos_delictivos11["casa_hecho"] = $fdata;
//	com_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "com_hecho";
	$fdata["GoodName"] = "com_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","com_hecho");
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




	$tdatahechos_delictivos11["com_hecho"] = $fdata;
//	barrio_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "barrio_hecho";
	$fdata["GoodName"] = "barrio_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","barrio_hecho");
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




	$tdatahechos_delictivos11["barrio_hecho"] = $fdata;
//	comp_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "comp_hecho";
	$fdata["GoodName"] = "comp_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","comp_hecho");
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




	$tdatahechos_delictivos11["comp_hecho"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","sector_ppd");
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




	$tdatahechos_delictivos11["sector_ppd"] = $fdata;
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","tipo");
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




	$tdatahechos_delictivos11["tipo"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","nombre");
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




	$tdatahechos_delictivos11["nombre"] = $fdata;
//	x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "x";
	$fdata["GoodName"] = "x";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","x");
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




	$tdatahechos_delictivos11["x"] = $fdata;
//	y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "y";
	$fdata["GoodName"] = "y";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","y");
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




	$tdatahechos_delictivos11["y"] = $fdata;
//	correlativo1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "correlativo1";
	$fdata["GoodName"] = "correlativo1";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","correlativo1");
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
	$fdata["FullName"] = "correlativo1";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahechos_delictivos11["correlativo1"] = $fdata;
//	mes_corre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "mes_corre";
	$fdata["GoodName"] = "mes_corre";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","mes_corre");
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




	$tdatahechos_delictivos11["mes_corre"] = $fdata;
//	arma_analisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "arma_analisis";
	$fdata["GoodName"] = "arma_analisis";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","arma_analisis");
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
	$fdata["FullName"] = "arma_analisis";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahechos_delictivos11["arma_analisis"] = $fdata;
//	movil_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "movil_he";
	$fdata["GoodName"] = "movil_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","movil_he");
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
	$fdata["FullName"] = "movil_he";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahechos_delictivos11["movil_he"] = $fdata;
//	ocupa_analisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "ocupa_analisis";
	$fdata["GoodName"] = "ocupa_analisis";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","ocupa_analisis");
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
	$fdata["FullName"] = "ocupa_analisis";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahechos_delictivos11["ocupa_analisis"] = $fdata;
//	rel_vic_ag_anali
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "rel_vic_ag_anali";
	$fdata["GoodName"] = "rel_vic_ag_anali";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos11","rel_vic_ag_anali");
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
	$fdata["FullName"] = "rel_vic_ag_anali";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahechos_delictivos11["rel_vic_ag_anali"] = $fdata;


$tables_data["hechos_delictivos11"]=&$tdatahechos_delictivos11;
$field_labels["hechos_delictivos11"] = &$fieldLabelshechos_delictivos11;
$fieldToolTips["hechos_delictivos11"] = &$fieldToolTipshechos_delictivos11;
$placeHolders["hechos_delictivos11"] = &$placeHoldershechos_delictivos11;
$page_titles["hechos_delictivos11"] = &$pageTitleshechos_delictivos11;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hechos_delictivos11"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hechos_delictivos11"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hechos_delictivos11()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id1,  id11,  correlativo,  numero,  id,  numero2,  lugaranalisis,  area,  delito,  codigo_muni,  depart_he,  muni_he,  dire_hecho,  lugar_esp,  forma_cono,  delito_espe,  dia_hecho,  hora_hecho,  rango_hora,  fecha_hecho,  mes_hecho,  `aÑo_hecho`,  edad_victima,  ran_eta_vic,  s_victima,  oc_victima,  relacion_vi_agre,  edad_agresor,  sexo_agresor,  ocupa_agresor,  movil,  tipo_arma,  canton_hecho,  colonia_hecho,  caserio_hecho,  calle_hecho,  avenida_hecho,  casa_hecho,  com_hecho,  barrio_hecho,  comp_hecho,  sector_ppd,  tipo,  nombre,  x,  y,  correlativo1,  mes_corre,  arma_analisis,  movil_he,  ocupa_analisis,  rel_vic_ag_anali";
$proto0["m_strFrom"] = "FROM hechos_delictivos1";
$proto0["m_strWhere"] = "sector_ppd ='SS-240.026'";
$proto0["m_strOrderBy"] = "ORDER BY sector_ppd DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "sector_ppd ='SS-240.026'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "='SS-240.026'";
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
	"m_srcTableName" => "hechos_delictivos11"
));

$proto6["m_sql"] = "id1";
$proto6["m_srcTableName"] = "hechos_delictivos11";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id11",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto8["m_sql"] = "id11";
$proto8["m_srcTableName"] = "hechos_delictivos11";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "correlativo",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto10["m_sql"] = "correlativo";
$proto10["m_srcTableName"] = "hechos_delictivos11";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "numero",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto12["m_sql"] = "numero";
$proto12["m_srcTableName"] = "hechos_delictivos11";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto14["m_sql"] = "id";
$proto14["m_srcTableName"] = "hechos_delictivos11";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "numero2",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto16["m_sql"] = "numero2";
$proto16["m_srcTableName"] = "hechos_delictivos11";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "lugaranalisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto18["m_sql"] = "lugaranalisis";
$proto18["m_srcTableName"] = "hechos_delictivos11";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto20["m_sql"] = "area";
$proto20["m_srcTableName"] = "hechos_delictivos11";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto22["m_sql"] = "delito";
$proto22["m_srcTableName"] = "hechos_delictivos11";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo_muni",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto24["m_sql"] = "codigo_muni";
$proto24["m_srcTableName"] = "hechos_delictivos11";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto26["m_sql"] = "depart_he";
$proto26["m_srcTableName"] = "hechos_delictivos11";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto28["m_sql"] = "muni_he";
$proto28["m_srcTableName"] = "hechos_delictivos11";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "dire_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto30["m_sql"] = "dire_hecho";
$proto30["m_srcTableName"] = "hechos_delictivos11";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "lugar_esp",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto32["m_sql"] = "lugar_esp";
$proto32["m_srcTableName"] = "hechos_delictivos11";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "forma_cono",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto34["m_sql"] = "forma_cono";
$proto34["m_srcTableName"] = "hechos_delictivos11";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "delito_espe",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto36["m_sql"] = "delito_espe";
$proto36["m_srcTableName"] = "hechos_delictivos11";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto38["m_sql"] = "dia_hecho";
$proto38["m_srcTableName"] = "hechos_delictivos11";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto40["m_sql"] = "hora_hecho";
$proto40["m_srcTableName"] = "hechos_delictivos11";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "rango_hora",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto42["m_sql"] = "rango_hora";
$proto42["m_srcTableName"] = "hechos_delictivos11";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto44["m_sql"] = "fecha_hecho";
$proto44["m_srcTableName"] = "hechos_delictivos11";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "mes_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto46["m_sql"] = "mes_hecho";
$proto46["m_srcTableName"] = "hechos_delictivos11";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto48["m_sql"] = "`aÑo_hecho`";
$proto48["m_srcTableName"] = "hechos_delictivos11";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "edad_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto50["m_sql"] = "edad_victima";
$proto50["m_srcTableName"] = "hechos_delictivos11";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "ran_eta_vic",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto52["m_sql"] = "ran_eta_vic";
$proto52["m_srcTableName"] = "hechos_delictivos11";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "s_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto54["m_sql"] = "s_victima";
$proto54["m_srcTableName"] = "hechos_delictivos11";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "oc_victima",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto56["m_sql"] = "oc_victima";
$proto56["m_srcTableName"] = "hechos_delictivos11";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "relacion_vi_agre",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto58["m_sql"] = "relacion_vi_agre";
$proto58["m_srcTableName"] = "hechos_delictivos11";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "edad_agresor",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto60["m_sql"] = "edad_agresor";
$proto60["m_srcTableName"] = "hechos_delictivos11";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo_agresor",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto62["m_sql"] = "sexo_agresor";
$proto62["m_srcTableName"] = "hechos_delictivos11";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "ocupa_agresor",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto64["m_sql"] = "ocupa_agresor";
$proto64["m_srcTableName"] = "hechos_delictivos11";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "movil",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto66["m_sql"] = "movil";
$proto66["m_srcTableName"] = "hechos_delictivos11";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_arma",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto68["m_sql"] = "tipo_arma";
$proto68["m_srcTableName"] = "hechos_delictivos11";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "canton_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto70["m_sql"] = "canton_hecho";
$proto70["m_srcTableName"] = "hechos_delictivos11";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "colonia_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto72["m_sql"] = "colonia_hecho";
$proto72["m_srcTableName"] = "hechos_delictivos11";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "caserio_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto74["m_sql"] = "caserio_hecho";
$proto74["m_srcTableName"] = "hechos_delictivos11";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "calle_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto76["m_sql"] = "calle_hecho";
$proto76["m_srcTableName"] = "hechos_delictivos11";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "avenida_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto78["m_sql"] = "avenida_hecho";
$proto78["m_srcTableName"] = "hechos_delictivos11";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "casa_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto80["m_sql"] = "casa_hecho";
$proto80["m_srcTableName"] = "hechos_delictivos11";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "com_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto82["m_sql"] = "com_hecho";
$proto82["m_srcTableName"] = "hechos_delictivos11";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "barrio_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto84["m_sql"] = "barrio_hecho";
$proto84["m_srcTableName"] = "hechos_delictivos11";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "comp_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto86["m_sql"] = "comp_hecho";
$proto86["m_srcTableName"] = "hechos_delictivos11";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto88["m_sql"] = "sector_ppd";
$proto88["m_srcTableName"] = "hechos_delictivos11";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto90["m_sql"] = "tipo";
$proto90["m_srcTableName"] = "hechos_delictivos11";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto92["m_sql"] = "nombre";
$proto92["m_srcTableName"] = "hechos_delictivos11";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "x",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto94["m_sql"] = "x";
$proto94["m_srcTableName"] = "hechos_delictivos11";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "y",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto96["m_sql"] = "y";
$proto96["m_srcTableName"] = "hechos_delictivos11";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "correlativo1",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto98["m_sql"] = "correlativo1";
$proto98["m_srcTableName"] = "hechos_delictivos11";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "mes_corre",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto100["m_sql"] = "mes_corre";
$proto100["m_srcTableName"] = "hechos_delictivos11";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "arma_analisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto102["m_sql"] = "arma_analisis";
$proto102["m_srcTableName"] = "hechos_delictivos11";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "movil_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto104["m_sql"] = "movil_he";
$proto104["m_srcTableName"] = "hechos_delictivos11";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "ocupa_analisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto106["m_sql"] = "ocupa_analisis";
$proto106["m_srcTableName"] = "hechos_delictivos11";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "rel_vic_ag_anali",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto108["m_sql"] = "rel_vic_ag_anali";
$proto108["m_srcTableName"] = "hechos_delictivos11";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto110=array();
$proto110["m_link"] = "SQLL_MAIN";
			$proto111=array();
$proto111["m_strName"] = "hechos_delictivos1";
$proto111["m_srcTableName"] = "hechos_delictivos11";
$proto111["m_columns"] = array();
$proto111["m_columns"][] = "id1";
$proto111["m_columns"][] = "id11";
$proto111["m_columns"][] = "correlativo";
$proto111["m_columns"][] = "numero";
$proto111["m_columns"][] = "id";
$proto111["m_columns"][] = "numero2";
$proto111["m_columns"][] = "lugaranalisis";
$proto111["m_columns"][] = "area";
$proto111["m_columns"][] = "delito";
$proto111["m_columns"][] = "codigo_muni";
$proto111["m_columns"][] = "depart_he";
$proto111["m_columns"][] = "muni_he";
$proto111["m_columns"][] = "dire_hecho";
$proto111["m_columns"][] = "lugar_esp";
$proto111["m_columns"][] = "forma_cono";
$proto111["m_columns"][] = "delito_espe";
$proto111["m_columns"][] = "dia_hecho";
$proto111["m_columns"][] = "hora_hecho";
$proto111["m_columns"][] = "rango_hora";
$proto111["m_columns"][] = "fecha_hecho";
$proto111["m_columns"][] = "mes_hecho";
$proto111["m_columns"][] = "aÑo_hecho";
$proto111["m_columns"][] = "edad_victima";
$proto111["m_columns"][] = "ran_eta_vic";
$proto111["m_columns"][] = "s_victima";
$proto111["m_columns"][] = "oc_victima";
$proto111["m_columns"][] = "relacion_vi_agre";
$proto111["m_columns"][] = "edad_agresor";
$proto111["m_columns"][] = "sexo_agresor";
$proto111["m_columns"][] = "ocupa_agresor";
$proto111["m_columns"][] = "movil";
$proto111["m_columns"][] = "tipo_arma";
$proto111["m_columns"][] = "canton_hecho";
$proto111["m_columns"][] = "colonia_hecho";
$proto111["m_columns"][] = "caserio_hecho";
$proto111["m_columns"][] = "calle_hecho";
$proto111["m_columns"][] = "avenida_hecho";
$proto111["m_columns"][] = "casa_hecho";
$proto111["m_columns"][] = "com_hecho";
$proto111["m_columns"][] = "barrio_hecho";
$proto111["m_columns"][] = "comp_hecho";
$proto111["m_columns"][] = "sector_ppd";
$proto111["m_columns"][] = "tipo";
$proto111["m_columns"][] = "nombre";
$proto111["m_columns"][] = "x";
$proto111["m_columns"][] = "y";
$proto111["m_columns"][] = "correlativo1";
$proto111["m_columns"][] = "mes_corre";
$proto111["m_columns"][] = "arma_analisis";
$proto111["m_columns"][] = "movil_he";
$proto111["m_columns"][] = "ocupa_analisis";
$proto111["m_columns"][] = "rel_vic_ag_anali";
$obj = new SQLTable($proto111);

$proto110["m_table"] = $obj;
$proto110["m_sql"] = "hechos_delictivos1";
$proto110["m_alias"] = "";
$proto110["m_srcTableName"] = "hechos_delictivos11";
$proto112=array();
$proto112["m_sql"] = "";
$proto112["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto112["m_column"]=$obj;
$proto112["m_contained"] = array();
$proto112["m_strCase"] = "";
$proto112["m_havingmode"] = false;
$proto112["m_inBrackets"] = false;
$proto112["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto112);

$proto110["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto110);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto114=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos11"
));

$proto114["m_column"]=$obj;
$proto114["m_bAsc"] = 0;
$proto114["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto114);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="hechos_delictivos11";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hechos_delictivos11 = createSqlQuery_hechos_delictivos11();


	
		;

																																																				

$tdatahechos_delictivos11[".sqlquery"] = $queryData_hechos_delictivos11;

$tableEvents["hechos_delictivos11"] = new eventsBase;
$tdatahechos_delictivos11[".hasEvents"] = false;

?>