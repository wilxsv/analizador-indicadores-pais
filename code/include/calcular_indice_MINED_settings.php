<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacalcular_indice_MINED = array();
	$tdatacalcular_indice_MINED[".truncateText"] = true;
	$tdatacalcular_indice_MINED[".NumberOfChars"] = 80;
	$tdatacalcular_indice_MINED[".ShortName"] = "calcular_indice_MINED";
	$tdatacalcular_indice_MINED[".OwnerID"] = "";
	$tdatacalcular_indice_MINED[".OriginalTable"] = "mined1";

//	field labels
$fieldLabelscalcular_indice_MINED = array();
$fieldToolTipscalcular_indice_MINED = array();
$pageTitlescalcular_indice_MINED = array();
$placeHolderscalcular_indice_MINED = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscalcular_indice_MINED["Spanish"] = array();
	$fieldToolTipscalcular_indice_MINED["Spanish"] = array();
	$placeHolderscalcular_indice_MINED["Spanish"] = array();
	$pageTitlescalcular_indice_MINED["Spanish"] = array();
	$fieldLabelscalcular_indice_MINED["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["departamento"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["departamento"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["municipio"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["municipio"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["idderespuesta"] = "Idderespuesta";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["idderespuesta"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["idderespuesta"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["codigo"] = "Codigo";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["codigo"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["codigo"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["depto"] = "Depto";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["depto"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["depto"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["mun"] = "Mun";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["mun"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["mun"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["nombre_c_e"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["nombre_c_e"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["x"] = "X";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["x"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["x"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["y"] = "Y";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["y"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["y"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["sector_ppd"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["sector_ppd"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["matricula_inicial"] = "Matricula Inicial";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["matricula_inicial"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["matricula_inicial"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["matricula_final"] = "Matricula Final";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["matricula_final"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["matricula_final"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["maras"] = "Maras";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["maras"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["maras"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["robos"] = "Robos";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["robos"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["robos"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["hurtos"] = "Hurtos";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["hurtos"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["hurtos"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["drogas"] = "Drogas";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["drogas"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["drogas"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["violaciones"] = "Violaciones";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["violaciones"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["violaciones"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["pab"] = "Pab";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["pab"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["pab"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["paf"] = "Paf";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["paf"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["paf"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["escasos_recursos"] = "Escasos Recursos";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["escasos_recursos"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["escasos_recursos"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["incorpo_actividades_prod"] = "Incorpo Actividades Prod";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["incorpo_actividades_prod"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["incorpo_actividades_prod"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["lejania_ce"] = "Lejania Ce";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["lejania_ce"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["lejania_ce"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["violencia_pandilleril"] = "Violencia Pandilleril";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["violencia_pandilleril"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["violencia_pandilleril"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["embarazo"] = "Embarazo";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["embarazo"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["embarazo"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["acoso"] = "Acoso";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["acoso"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["acoso"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["violacion_sexual"] = "Violacion Sexual";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["violacion_sexual"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["violacion_sexual"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["cambio_domicilio"] = "Cambio Domicilio";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["cambio_domicilio"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["cambio_domicilio"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["migracion"] = "Migracion";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["migracion"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["migracion"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["bajo_rendimiento"] = "Bajo Rendimiento";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["bajo_rendimiento"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["bajo_rendimiento"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["enfermedad"] = "Enfermedad";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["enfermedad"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["enfermedad"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["prostitucion"] = "Prostitucion";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["prostitucion"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["prostitucion"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["dep_mun"] = "Dep Mun";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["dep_mun"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["dep_mun"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["max_matric2016"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["max_matric2016"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["mrf2016"] = "Mrf2016";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["mrf2016"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["mrf2016"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["pab_af"] = "Pab Af";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["pab_af"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["pab_af"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["r_h"] = "R H";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["r_h"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["r_h"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["ipce_naive"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["ipce_naive"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["ipce_0_1"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["ipce_0_1"] = "";
	$fieldLabelscalcular_indice_MINED["Spanish"]["a_o"] = "AÑo";
	$fieldToolTipscalcular_indice_MINED["Spanish"]["a_o"] = "";
	$placeHolderscalcular_indice_MINED["Spanish"]["a_o"] = "";
	if (count($fieldToolTipscalcular_indice_MINED["Spanish"]))
		$tdatacalcular_indice_MINED[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscalcular_indice_MINED["English"] = array();
	$fieldToolTipscalcular_indice_MINED["English"] = array();
	$placeHolderscalcular_indice_MINED["English"] = array();
	$pageTitlescalcular_indice_MINED["English"] = array();
	$fieldLabelscalcular_indice_MINED["English"]["departamento"] = "Departamento";
	$fieldToolTipscalcular_indice_MINED["English"]["departamento"] = "";
	$placeHolderscalcular_indice_MINED["English"]["departamento"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["municipio"] = "Municipio";
	$fieldToolTipscalcular_indice_MINED["English"]["municipio"] = "";
	$placeHolderscalcular_indice_MINED["English"]["municipio"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["idderespuesta"] = "Idderespuesta";
	$fieldToolTipscalcular_indice_MINED["English"]["idderespuesta"] = "";
	$placeHolderscalcular_indice_MINED["English"]["idderespuesta"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["codigo"] = "Codigo";
	$fieldToolTipscalcular_indice_MINED["English"]["codigo"] = "";
	$placeHolderscalcular_indice_MINED["English"]["codigo"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["depto"] = "Depto";
	$fieldToolTipscalcular_indice_MINED["English"]["depto"] = "";
	$placeHolderscalcular_indice_MINED["English"]["depto"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["mun"] = "Mun";
	$fieldToolTipscalcular_indice_MINED["English"]["mun"] = "";
	$placeHolderscalcular_indice_MINED["English"]["mun"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipscalcular_indice_MINED["English"]["nombre_c_e"] = "";
	$placeHolderscalcular_indice_MINED["English"]["nombre_c_e"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["x"] = "X";
	$fieldToolTipscalcular_indice_MINED["English"]["x"] = "";
	$placeHolderscalcular_indice_MINED["English"]["x"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["y"] = "Y";
	$fieldToolTipscalcular_indice_MINED["English"]["y"] = "";
	$placeHolderscalcular_indice_MINED["English"]["y"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipscalcular_indice_MINED["English"]["sector_ppd"] = "";
	$placeHolderscalcular_indice_MINED["English"]["sector_ppd"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["matricula_inicial"] = "Matricula Inicial";
	$fieldToolTipscalcular_indice_MINED["English"]["matricula_inicial"] = "";
	$placeHolderscalcular_indice_MINED["English"]["matricula_inicial"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["matricula_final"] = "Matricula Final";
	$fieldToolTipscalcular_indice_MINED["English"]["matricula_final"] = "";
	$placeHolderscalcular_indice_MINED["English"]["matricula_final"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["maras"] = "Maras";
	$fieldToolTipscalcular_indice_MINED["English"]["maras"] = "";
	$placeHolderscalcular_indice_MINED["English"]["maras"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["robos"] = "Robos";
	$fieldToolTipscalcular_indice_MINED["English"]["robos"] = "";
	$placeHolderscalcular_indice_MINED["English"]["robos"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["hurtos"] = "Hurtos";
	$fieldToolTipscalcular_indice_MINED["English"]["hurtos"] = "";
	$placeHolderscalcular_indice_MINED["English"]["hurtos"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["drogas"] = "Drogas";
	$fieldToolTipscalcular_indice_MINED["English"]["drogas"] = "";
	$placeHolderscalcular_indice_MINED["English"]["drogas"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["violaciones"] = "Violaciones";
	$fieldToolTipscalcular_indice_MINED["English"]["violaciones"] = "";
	$placeHolderscalcular_indice_MINED["English"]["violaciones"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["pab"] = "Pab";
	$fieldToolTipscalcular_indice_MINED["English"]["pab"] = "";
	$placeHolderscalcular_indice_MINED["English"]["pab"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["paf"] = "Paf";
	$fieldToolTipscalcular_indice_MINED["English"]["paf"] = "";
	$placeHolderscalcular_indice_MINED["English"]["paf"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["escasos_recursos"] = "Escasos Recursos";
	$fieldToolTipscalcular_indice_MINED["English"]["escasos_recursos"] = "";
	$placeHolderscalcular_indice_MINED["English"]["escasos_recursos"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["incorpo_actividades_prod"] = "Incorpo Actividades Prod";
	$fieldToolTipscalcular_indice_MINED["English"]["incorpo_actividades_prod"] = "";
	$placeHolderscalcular_indice_MINED["English"]["incorpo_actividades_prod"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["lejania_ce"] = "Lejania Ce";
	$fieldToolTipscalcular_indice_MINED["English"]["lejania_ce"] = "";
	$placeHolderscalcular_indice_MINED["English"]["lejania_ce"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["violencia_pandilleril"] = "Violencia Pandilleril";
	$fieldToolTipscalcular_indice_MINED["English"]["violencia_pandilleril"] = "";
	$placeHolderscalcular_indice_MINED["English"]["violencia_pandilleril"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["embarazo"] = "Embarazo";
	$fieldToolTipscalcular_indice_MINED["English"]["embarazo"] = "";
	$placeHolderscalcular_indice_MINED["English"]["embarazo"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["acoso"] = "Acoso";
	$fieldToolTipscalcular_indice_MINED["English"]["acoso"] = "";
	$placeHolderscalcular_indice_MINED["English"]["acoso"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["violacion_sexual"] = "Violacion Sexual";
	$fieldToolTipscalcular_indice_MINED["English"]["violacion_sexual"] = "";
	$placeHolderscalcular_indice_MINED["English"]["violacion_sexual"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["cambio_domicilio"] = "Cambio Domicilio";
	$fieldToolTipscalcular_indice_MINED["English"]["cambio_domicilio"] = "";
	$placeHolderscalcular_indice_MINED["English"]["cambio_domicilio"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["migracion"] = "Migracion";
	$fieldToolTipscalcular_indice_MINED["English"]["migracion"] = "";
	$placeHolderscalcular_indice_MINED["English"]["migracion"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["bajo_rendimiento"] = "Bajo Rendimiento";
	$fieldToolTipscalcular_indice_MINED["English"]["bajo_rendimiento"] = "";
	$placeHolderscalcular_indice_MINED["English"]["bajo_rendimiento"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["enfermedad"] = "Enfermedad";
	$fieldToolTipscalcular_indice_MINED["English"]["enfermedad"] = "";
	$placeHolderscalcular_indice_MINED["English"]["enfermedad"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["prostitucion"] = "Prostitucion";
	$fieldToolTipscalcular_indice_MINED["English"]["prostitucion"] = "";
	$placeHolderscalcular_indice_MINED["English"]["prostitucion"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["dep_mun"] = "Dep Mun";
	$fieldToolTipscalcular_indice_MINED["English"]["dep_mun"] = "";
	$placeHolderscalcular_indice_MINED["English"]["dep_mun"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipscalcular_indice_MINED["English"]["max_matric2016"] = "";
	$placeHolderscalcular_indice_MINED["English"]["max_matric2016"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["mrf2016"] = "Mrf2016";
	$fieldToolTipscalcular_indice_MINED["English"]["mrf2016"] = "";
	$placeHolderscalcular_indice_MINED["English"]["mrf2016"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["pab_af"] = "Pab Af";
	$fieldToolTipscalcular_indice_MINED["English"]["pab_af"] = "";
	$placeHolderscalcular_indice_MINED["English"]["pab_af"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["r_h"] = "R H";
	$fieldToolTipscalcular_indice_MINED["English"]["r_h"] = "";
	$placeHolderscalcular_indice_MINED["English"]["r_h"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipscalcular_indice_MINED["English"]["ipce_naive"] = "";
	$placeHolderscalcular_indice_MINED["English"]["ipce_naive"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipscalcular_indice_MINED["English"]["ipce_0_1"] = "";
	$placeHolderscalcular_indice_MINED["English"]["ipce_0_1"] = "";
	$fieldLabelscalcular_indice_MINED["English"]["a_o"] = "AÑo";
	$fieldToolTipscalcular_indice_MINED["English"]["a_o"] = "";
	$placeHolderscalcular_indice_MINED["English"]["a_o"] = "";
	if (count($fieldToolTipscalcular_indice_MINED["English"]))
		$tdatacalcular_indice_MINED[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscalcular_indice_MINED[""] = array();
	$fieldToolTipscalcular_indice_MINED[""] = array();
	$placeHolderscalcular_indice_MINED[""] = array();
	$pageTitlescalcular_indice_MINED[""] = array();
	$fieldLabelscalcular_indice_MINED[""]["departamento"] = "Departamento";
	$fieldToolTipscalcular_indice_MINED[""]["departamento"] = "";
	$placeHolderscalcular_indice_MINED[""]["departamento"] = "";
	$fieldLabelscalcular_indice_MINED[""]["municipio"] = "Municipio";
	$fieldToolTipscalcular_indice_MINED[""]["municipio"] = "";
	$placeHolderscalcular_indice_MINED[""]["municipio"] = "";
	$fieldLabelscalcular_indice_MINED[""]["idderespuesta"] = "Idderespuesta";
	$fieldToolTipscalcular_indice_MINED[""]["idderespuesta"] = "";
	$placeHolderscalcular_indice_MINED[""]["idderespuesta"] = "";
	$fieldLabelscalcular_indice_MINED[""]["codigo"] = "Codigo";
	$fieldToolTipscalcular_indice_MINED[""]["codigo"] = "";
	$placeHolderscalcular_indice_MINED[""]["codigo"] = "";
	$fieldLabelscalcular_indice_MINED[""]["depto"] = "Depto";
	$fieldToolTipscalcular_indice_MINED[""]["depto"] = "";
	$placeHolderscalcular_indice_MINED[""]["depto"] = "";
	$fieldLabelscalcular_indice_MINED[""]["mun"] = "Mun";
	$fieldToolTipscalcular_indice_MINED[""]["mun"] = "";
	$placeHolderscalcular_indice_MINED[""]["mun"] = "";
	$fieldLabelscalcular_indice_MINED[""]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipscalcular_indice_MINED[""]["nombre_c_e"] = "";
	$placeHolderscalcular_indice_MINED[""]["nombre_c_e"] = "";
	$fieldLabelscalcular_indice_MINED[""]["x"] = "X";
	$fieldToolTipscalcular_indice_MINED[""]["x"] = "";
	$placeHolderscalcular_indice_MINED[""]["x"] = "";
	$fieldLabelscalcular_indice_MINED[""]["y"] = "Y";
	$fieldToolTipscalcular_indice_MINED[""]["y"] = "";
	$placeHolderscalcular_indice_MINED[""]["y"] = "";
	$fieldLabelscalcular_indice_MINED[""]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipscalcular_indice_MINED[""]["sector_ppd"] = "";
	$placeHolderscalcular_indice_MINED[""]["sector_ppd"] = "";
	$fieldLabelscalcular_indice_MINED[""]["matricula_inicial"] = "Matricula Inicial";
	$fieldToolTipscalcular_indice_MINED[""]["matricula_inicial"] = "";
	$placeHolderscalcular_indice_MINED[""]["matricula_inicial"] = "";
	$fieldLabelscalcular_indice_MINED[""]["matricula_final"] = "Matricula Final";
	$fieldToolTipscalcular_indice_MINED[""]["matricula_final"] = "";
	$placeHolderscalcular_indice_MINED[""]["matricula_final"] = "";
	$fieldLabelscalcular_indice_MINED[""]["maras"] = "Maras";
	$fieldToolTipscalcular_indice_MINED[""]["maras"] = "";
	$placeHolderscalcular_indice_MINED[""]["maras"] = "";
	$fieldLabelscalcular_indice_MINED[""]["robos"] = "Robos";
	$fieldToolTipscalcular_indice_MINED[""]["robos"] = "";
	$placeHolderscalcular_indice_MINED[""]["robos"] = "";
	$fieldLabelscalcular_indice_MINED[""]["hurtos"] = "Hurtos";
	$fieldToolTipscalcular_indice_MINED[""]["hurtos"] = "";
	$placeHolderscalcular_indice_MINED[""]["hurtos"] = "";
	$fieldLabelscalcular_indice_MINED[""]["drogas"] = "Drogas";
	$fieldToolTipscalcular_indice_MINED[""]["drogas"] = "";
	$placeHolderscalcular_indice_MINED[""]["drogas"] = "";
	$fieldLabelscalcular_indice_MINED[""]["violaciones"] = "Violaciones";
	$fieldToolTipscalcular_indice_MINED[""]["violaciones"] = "";
	$placeHolderscalcular_indice_MINED[""]["violaciones"] = "";
	$fieldLabelscalcular_indice_MINED[""]["pab"] = "Pab";
	$fieldToolTipscalcular_indice_MINED[""]["pab"] = "";
	$placeHolderscalcular_indice_MINED[""]["pab"] = "";
	$fieldLabelscalcular_indice_MINED[""]["paf"] = "Paf";
	$fieldToolTipscalcular_indice_MINED[""]["paf"] = "";
	$placeHolderscalcular_indice_MINED[""]["paf"] = "";
	$fieldLabelscalcular_indice_MINED[""]["escasos_recursos"] = "Escasos Recursos";
	$fieldToolTipscalcular_indice_MINED[""]["escasos_recursos"] = "";
	$placeHolderscalcular_indice_MINED[""]["escasos_recursos"] = "";
	$fieldLabelscalcular_indice_MINED[""]["incorpo_actividades_prod"] = "Incorpo Actividades Prod";
	$fieldToolTipscalcular_indice_MINED[""]["incorpo_actividades_prod"] = "";
	$placeHolderscalcular_indice_MINED[""]["incorpo_actividades_prod"] = "";
	$fieldLabelscalcular_indice_MINED[""]["lejania_ce"] = "Lejania Ce";
	$fieldToolTipscalcular_indice_MINED[""]["lejania_ce"] = "";
	$placeHolderscalcular_indice_MINED[""]["lejania_ce"] = "";
	$fieldLabelscalcular_indice_MINED[""]["violencia_pandilleril"] = "Violencia Pandilleril";
	$fieldToolTipscalcular_indice_MINED[""]["violencia_pandilleril"] = "";
	$placeHolderscalcular_indice_MINED[""]["violencia_pandilleril"] = "";
	$fieldLabelscalcular_indice_MINED[""]["embarazo"] = "Embarazo";
	$fieldToolTipscalcular_indice_MINED[""]["embarazo"] = "";
	$placeHolderscalcular_indice_MINED[""]["embarazo"] = "";
	$fieldLabelscalcular_indice_MINED[""]["acoso"] = "Acoso";
	$fieldToolTipscalcular_indice_MINED[""]["acoso"] = "";
	$placeHolderscalcular_indice_MINED[""]["acoso"] = "";
	$fieldLabelscalcular_indice_MINED[""]["violacion_sexual"] = "Violacion Sexual";
	$fieldToolTipscalcular_indice_MINED[""]["violacion_sexual"] = "";
	$placeHolderscalcular_indice_MINED[""]["violacion_sexual"] = "";
	$fieldLabelscalcular_indice_MINED[""]["cambio_domicilio"] = "Cambio Domicilio";
	$fieldToolTipscalcular_indice_MINED[""]["cambio_domicilio"] = "";
	$placeHolderscalcular_indice_MINED[""]["cambio_domicilio"] = "";
	$fieldLabelscalcular_indice_MINED[""]["migracion"] = "Migracion";
	$fieldToolTipscalcular_indice_MINED[""]["migracion"] = "";
	$placeHolderscalcular_indice_MINED[""]["migracion"] = "";
	$fieldLabelscalcular_indice_MINED[""]["bajo_rendimiento"] = "Bajo Rendimiento";
	$fieldToolTipscalcular_indice_MINED[""]["bajo_rendimiento"] = "";
	$placeHolderscalcular_indice_MINED[""]["bajo_rendimiento"] = "";
	$fieldLabelscalcular_indice_MINED[""]["enfermedad"] = "Enfermedad";
	$fieldToolTipscalcular_indice_MINED[""]["enfermedad"] = "";
	$placeHolderscalcular_indice_MINED[""]["enfermedad"] = "";
	$fieldLabelscalcular_indice_MINED[""]["prostitucion"] = "Prostitucion";
	$fieldToolTipscalcular_indice_MINED[""]["prostitucion"] = "";
	$placeHolderscalcular_indice_MINED[""]["prostitucion"] = "";
	$fieldLabelscalcular_indice_MINED[""]["dep_mun"] = "Dep Mun";
	$fieldToolTipscalcular_indice_MINED[""]["dep_mun"] = "";
	$placeHolderscalcular_indice_MINED[""]["dep_mun"] = "";
	$fieldLabelscalcular_indice_MINED[""]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipscalcular_indice_MINED[""]["max_matric2016"] = "";
	$placeHolderscalcular_indice_MINED[""]["max_matric2016"] = "";
	$fieldLabelscalcular_indice_MINED[""]["mrf2016"] = "Mrf2016";
	$fieldToolTipscalcular_indice_MINED[""]["mrf2016"] = "";
	$placeHolderscalcular_indice_MINED[""]["mrf2016"] = "";
	$fieldLabelscalcular_indice_MINED[""]["pab_af"] = "Pab Af";
	$fieldToolTipscalcular_indice_MINED[""]["pab_af"] = "";
	$placeHolderscalcular_indice_MINED[""]["pab_af"] = "";
	$fieldLabelscalcular_indice_MINED[""]["r_h"] = "R H";
	$fieldToolTipscalcular_indice_MINED[""]["r_h"] = "";
	$placeHolderscalcular_indice_MINED[""]["r_h"] = "";
	$fieldLabelscalcular_indice_MINED[""]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipscalcular_indice_MINED[""]["ipce_naive"] = "";
	$placeHolderscalcular_indice_MINED[""]["ipce_naive"] = "";
	$fieldLabelscalcular_indice_MINED[""]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipscalcular_indice_MINED[""]["ipce_0_1"] = "";
	$placeHolderscalcular_indice_MINED[""]["ipce_0_1"] = "";
	$fieldLabelscalcular_indice_MINED[""]["a_o"] = "AÑo";
	$fieldToolTipscalcular_indice_MINED[""]["a_o"] = "";
	$placeHolderscalcular_indice_MINED[""]["a_o"] = "";
	if (count($fieldToolTipscalcular_indice_MINED[""]))
		$tdatacalcular_indice_MINED[".isUseToolTips"] = true;
}


	$tdatacalcular_indice_MINED[".NCSearch"] = true;



$tdatacalcular_indice_MINED[".shortTableName"] = "calcular_indice_MINED";
$tdatacalcular_indice_MINED[".nSecOptions"] = 0;
$tdatacalcular_indice_MINED[".recsPerRowPrint"] = 1;
$tdatacalcular_indice_MINED[".mainTableOwnerID"] = "";
$tdatacalcular_indice_MINED[".moveNext"] = 1;
$tdatacalcular_indice_MINED[".entityType"] = 1;

$tdatacalcular_indice_MINED[".strOriginalTableName"] = "mined1";

	



$tdatacalcular_indice_MINED[".showAddInPopup"] = false;

$tdatacalcular_indice_MINED[".showEditInPopup"] = false;

$tdatacalcular_indice_MINED[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacalcular_indice_MINED[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacalcular_indice_MINED[".fieldsForRegister"] = array();

$tdatacalcular_indice_MINED[".listAjax"] = false;

	$tdatacalcular_indice_MINED[".audit"] = false;

	$tdatacalcular_indice_MINED[".locking"] = false;



$tdatacalcular_indice_MINED[".list"] = true;



$tdatacalcular_indice_MINED[".reorderRecordsByHeader"] = true;




$tdatacalcular_indice_MINED[".import"] = true;

$tdatacalcular_indice_MINED[".exportTo"] = true;

$tdatacalcular_indice_MINED[".printFriendly"] = true;


$tdatacalcular_indice_MINED[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacalcular_indice_MINED[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacalcular_indice_MINED[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacalcular_indice_MINED[".searchSaving"] = false;
//

$tdatacalcular_indice_MINED[".showSearchPanel"] = true;
		$tdatacalcular_indice_MINED[".flexibleSearch"] = true;

$tdatacalcular_indice_MINED[".isUseAjaxSuggest"] = true;

$tdatacalcular_indice_MINED[".rowHighlite"] = true;





$tdatacalcular_indice_MINED[".ajaxCodeSnippetAdded"] = false;

$tdatacalcular_indice_MINED[".buttonsAdded"] = false;

$tdatacalcular_indice_MINED[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalcular_indice_MINED[".isUseTimeForSearch"] = false;



$tdatacalcular_indice_MINED[".badgeColor"] = "CFAE83";


$tdatacalcular_indice_MINED[".allSearchFields"] = array();
$tdatacalcular_indice_MINED[".filterFields"] = array();
$tdatacalcular_indice_MINED[".requiredSearchFields"] = array();

$tdatacalcular_indice_MINED[".allSearchFields"][] = "idderespuesta";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "codigo";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "depto";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "departamento";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "mun";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "municipio";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "nombre_c_e";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "x";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "y";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "sector_ppd";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "matricula_inicial";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "matricula_final";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "maras";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "robos";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "hurtos";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "drogas";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "violaciones";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "pab";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "paf";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "escasos_recursos";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "incorpo_actividades_prod";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "lejania_ce";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "violencia_pandilleril";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "embarazo";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "acoso";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "violacion_sexual";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "cambio_domicilio";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "migracion";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "bajo_rendimiento";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "enfermedad";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "prostitucion";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "dep_mun";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "max_matric2016";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "mrf2016";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "pab_af";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "r_h";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "ipce_naive";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "ipce_0_1";
	$tdatacalcular_indice_MINED[".allSearchFields"][] = "aÑo";
	

$tdatacalcular_indice_MINED[".googleLikeFields"] = array();
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "idderespuesta";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "codigo";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "depto";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "departamento";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "mun";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "municipio";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "nombre_c_e";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "x";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "y";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "sector_ppd";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "matricula_inicial";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "matricula_final";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "maras";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "robos";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "hurtos";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "drogas";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "violaciones";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "pab";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "paf";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "escasos_recursos";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "incorpo_actividades_prod";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "lejania_ce";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "violencia_pandilleril";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "embarazo";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "acoso";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "violacion_sexual";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "cambio_domicilio";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "migracion";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "bajo_rendimiento";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "enfermedad";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "prostitucion";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "dep_mun";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "max_matric2016";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "mrf2016";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "pab_af";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "r_h";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "ipce_naive";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "ipce_0_1";
$tdatacalcular_indice_MINED[".googleLikeFields"][] = "aÑo";


$tdatacalcular_indice_MINED[".advSearchFields"] = array();
$tdatacalcular_indice_MINED[".advSearchFields"][] = "idderespuesta";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "codigo";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "depto";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "departamento";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "mun";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "municipio";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "nombre_c_e";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "x";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "y";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "sector_ppd";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "matricula_inicial";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "matricula_final";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "maras";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "robos";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "hurtos";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "drogas";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "violaciones";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "pab";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "paf";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "escasos_recursos";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "incorpo_actividades_prod";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "lejania_ce";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "violencia_pandilleril";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "embarazo";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "acoso";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "violacion_sexual";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "cambio_domicilio";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "migracion";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "bajo_rendimiento";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "enfermedad";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "prostitucion";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "dep_mun";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "max_matric2016";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "mrf2016";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "pab_af";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "r_h";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "ipce_naive";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "ipce_0_1";
$tdatacalcular_indice_MINED[".advSearchFields"][] = "aÑo";

$tdatacalcular_indice_MINED[".tableType"] = "list";

$tdatacalcular_indice_MINED[".printerPageOrientation"] = 0;
$tdatacalcular_indice_MINED[".nPrinterPageScale"] = 100;

$tdatacalcular_indice_MINED[".nPrinterSplitRecords"] = 40;

$tdatacalcular_indice_MINED[".nPrinterPDFSplitRecords"] = 40;



$tdatacalcular_indice_MINED[".geocodingEnabled"] = false;





$tdatacalcular_indice_MINED[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatacalcular_indice_MINED[".pageSize"] = 20;

$tdatacalcular_indice_MINED[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacalcular_indice_MINED[".strOrderBy"] = $tstrOrderBy;

$tdatacalcular_indice_MINED[".orderindexes"] = array();

$tdatacalcular_indice_MINED[".sqlHead"] = "SELECT idderespuesta,  	codigo,  	depto,  	departamento,  	mun,  	municipio,  	nombre_c_e,  	x,  	y,  	sector_ppd,  	matricula_inicial,  	matricula_final,  	maras,  	robos,  	hurtos,  	drogas,  	violaciones,  	pab,  	paf,  	escasos_recursos,  	incorpo_actividades_prod,  	lejania_ce,  	violencia_pandilleril,  	embarazo,  	acoso,  	violacion_sexual,  	cambio_domicilio,  	migracion,  	bajo_rendimiento,  	enfermedad,  	prostitucion,  	dep_mun,  	max_matric2016,  	mrf2016,  	pab_af,  	r_h,  	ipce_naive,  	ipce_0_1,  	`aÑo`";
$tdatacalcular_indice_MINED[".sqlFrom"] = "FROM mined1";
$tdatacalcular_indice_MINED[".sqlWhereExpr"] = "";
$tdatacalcular_indice_MINED[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalcular_indice_MINED[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalcular_indice_MINED[".arrGroupsPerPage"] = $arrGPP;

$tdatacalcular_indice_MINED[".highlightSearchResults"] = true;

$tableKeyscalcular_indice_MINED = array();
$tdatacalcular_indice_MINED[".Keys"] = $tableKeyscalcular_indice_MINED;

$tdatacalcular_indice_MINED[".listFields"] = array();
$tdatacalcular_indice_MINED[".listFields"][] = "idderespuesta";
$tdatacalcular_indice_MINED[".listFields"][] = "codigo";
$tdatacalcular_indice_MINED[".listFields"][] = "depto";
$tdatacalcular_indice_MINED[".listFields"][] = "departamento";
$tdatacalcular_indice_MINED[".listFields"][] = "mun";
$tdatacalcular_indice_MINED[".listFields"][] = "municipio";
$tdatacalcular_indice_MINED[".listFields"][] = "nombre_c_e";
$tdatacalcular_indice_MINED[".listFields"][] = "x";
$tdatacalcular_indice_MINED[".listFields"][] = "y";
$tdatacalcular_indice_MINED[".listFields"][] = "sector_ppd";
$tdatacalcular_indice_MINED[".listFields"][] = "matricula_inicial";
$tdatacalcular_indice_MINED[".listFields"][] = "matricula_final";
$tdatacalcular_indice_MINED[".listFields"][] = "maras";
$tdatacalcular_indice_MINED[".listFields"][] = "robos";
$tdatacalcular_indice_MINED[".listFields"][] = "hurtos";
$tdatacalcular_indice_MINED[".listFields"][] = "drogas";
$tdatacalcular_indice_MINED[".listFields"][] = "violaciones";
$tdatacalcular_indice_MINED[".listFields"][] = "pab";
$tdatacalcular_indice_MINED[".listFields"][] = "paf";
$tdatacalcular_indice_MINED[".listFields"][] = "escasos_recursos";
$tdatacalcular_indice_MINED[".listFields"][] = "incorpo_actividades_prod";
$tdatacalcular_indice_MINED[".listFields"][] = "lejania_ce";
$tdatacalcular_indice_MINED[".listFields"][] = "violencia_pandilleril";
$tdatacalcular_indice_MINED[".listFields"][] = "embarazo";
$tdatacalcular_indice_MINED[".listFields"][] = "acoso";
$tdatacalcular_indice_MINED[".listFields"][] = "violacion_sexual";
$tdatacalcular_indice_MINED[".listFields"][] = "cambio_domicilio";
$tdatacalcular_indice_MINED[".listFields"][] = "migracion";
$tdatacalcular_indice_MINED[".listFields"][] = "bajo_rendimiento";
$tdatacalcular_indice_MINED[".listFields"][] = "enfermedad";
$tdatacalcular_indice_MINED[".listFields"][] = "prostitucion";
$tdatacalcular_indice_MINED[".listFields"][] = "dep_mun";
$tdatacalcular_indice_MINED[".listFields"][] = "max_matric2016";
$tdatacalcular_indice_MINED[".listFields"][] = "mrf2016";
$tdatacalcular_indice_MINED[".listFields"][] = "pab_af";
$tdatacalcular_indice_MINED[".listFields"][] = "r_h";
$tdatacalcular_indice_MINED[".listFields"][] = "ipce_naive";
$tdatacalcular_indice_MINED[".listFields"][] = "ipce_0_1";
$tdatacalcular_indice_MINED[".listFields"][] = "aÑo";

$tdatacalcular_indice_MINED[".hideMobileList"] = array();


$tdatacalcular_indice_MINED[".viewFields"] = array();
$tdatacalcular_indice_MINED[".viewFields"][] = "idderespuesta";
$tdatacalcular_indice_MINED[".viewFields"][] = "codigo";
$tdatacalcular_indice_MINED[".viewFields"][] = "depto";
$tdatacalcular_indice_MINED[".viewFields"][] = "departamento";
$tdatacalcular_indice_MINED[".viewFields"][] = "mun";
$tdatacalcular_indice_MINED[".viewFields"][] = "municipio";
$tdatacalcular_indice_MINED[".viewFields"][] = "nombre_c_e";
$tdatacalcular_indice_MINED[".viewFields"][] = "x";
$tdatacalcular_indice_MINED[".viewFields"][] = "y";
$tdatacalcular_indice_MINED[".viewFields"][] = "sector_ppd";
$tdatacalcular_indice_MINED[".viewFields"][] = "matricula_inicial";
$tdatacalcular_indice_MINED[".viewFields"][] = "matricula_final";
$tdatacalcular_indice_MINED[".viewFields"][] = "maras";
$tdatacalcular_indice_MINED[".viewFields"][] = "robos";
$tdatacalcular_indice_MINED[".viewFields"][] = "hurtos";
$tdatacalcular_indice_MINED[".viewFields"][] = "drogas";
$tdatacalcular_indice_MINED[".viewFields"][] = "violaciones";
$tdatacalcular_indice_MINED[".viewFields"][] = "pab";
$tdatacalcular_indice_MINED[".viewFields"][] = "paf";
$tdatacalcular_indice_MINED[".viewFields"][] = "escasos_recursos";
$tdatacalcular_indice_MINED[".viewFields"][] = "incorpo_actividades_prod";
$tdatacalcular_indice_MINED[".viewFields"][] = "lejania_ce";
$tdatacalcular_indice_MINED[".viewFields"][] = "violencia_pandilleril";
$tdatacalcular_indice_MINED[".viewFields"][] = "embarazo";
$tdatacalcular_indice_MINED[".viewFields"][] = "acoso";
$tdatacalcular_indice_MINED[".viewFields"][] = "violacion_sexual";
$tdatacalcular_indice_MINED[".viewFields"][] = "cambio_domicilio";
$tdatacalcular_indice_MINED[".viewFields"][] = "migracion";
$tdatacalcular_indice_MINED[".viewFields"][] = "bajo_rendimiento";
$tdatacalcular_indice_MINED[".viewFields"][] = "enfermedad";
$tdatacalcular_indice_MINED[".viewFields"][] = "prostitucion";
$tdatacalcular_indice_MINED[".viewFields"][] = "dep_mun";
$tdatacalcular_indice_MINED[".viewFields"][] = "max_matric2016";
$tdatacalcular_indice_MINED[".viewFields"][] = "mrf2016";
$tdatacalcular_indice_MINED[".viewFields"][] = "pab_af";
$tdatacalcular_indice_MINED[".viewFields"][] = "r_h";
$tdatacalcular_indice_MINED[".viewFields"][] = "ipce_naive";
$tdatacalcular_indice_MINED[".viewFields"][] = "ipce_0_1";
$tdatacalcular_indice_MINED[".viewFields"][] = "aÑo";

$tdatacalcular_indice_MINED[".addFields"] = array();
$tdatacalcular_indice_MINED[".addFields"][] = "idderespuesta";
$tdatacalcular_indice_MINED[".addFields"][] = "codigo";
$tdatacalcular_indice_MINED[".addFields"][] = "depto";
$tdatacalcular_indice_MINED[".addFields"][] = "departamento";
$tdatacalcular_indice_MINED[".addFields"][] = "mun";
$tdatacalcular_indice_MINED[".addFields"][] = "municipio";
$tdatacalcular_indice_MINED[".addFields"][] = "nombre_c_e";
$tdatacalcular_indice_MINED[".addFields"][] = "x";
$tdatacalcular_indice_MINED[".addFields"][] = "y";
$tdatacalcular_indice_MINED[".addFields"][] = "sector_ppd";
$tdatacalcular_indice_MINED[".addFields"][] = "matricula_inicial";
$tdatacalcular_indice_MINED[".addFields"][] = "matricula_final";
$tdatacalcular_indice_MINED[".addFields"][] = "maras";
$tdatacalcular_indice_MINED[".addFields"][] = "robos";
$tdatacalcular_indice_MINED[".addFields"][] = "hurtos";
$tdatacalcular_indice_MINED[".addFields"][] = "drogas";
$tdatacalcular_indice_MINED[".addFields"][] = "violaciones";
$tdatacalcular_indice_MINED[".addFields"][] = "pab";
$tdatacalcular_indice_MINED[".addFields"][] = "paf";
$tdatacalcular_indice_MINED[".addFields"][] = "escasos_recursos";
$tdatacalcular_indice_MINED[".addFields"][] = "incorpo_actividades_prod";
$tdatacalcular_indice_MINED[".addFields"][] = "lejania_ce";
$tdatacalcular_indice_MINED[".addFields"][] = "violencia_pandilleril";
$tdatacalcular_indice_MINED[".addFields"][] = "embarazo";
$tdatacalcular_indice_MINED[".addFields"][] = "acoso";
$tdatacalcular_indice_MINED[".addFields"][] = "violacion_sexual";
$tdatacalcular_indice_MINED[".addFields"][] = "cambio_domicilio";
$tdatacalcular_indice_MINED[".addFields"][] = "migracion";
$tdatacalcular_indice_MINED[".addFields"][] = "bajo_rendimiento";
$tdatacalcular_indice_MINED[".addFields"][] = "enfermedad";
$tdatacalcular_indice_MINED[".addFields"][] = "prostitucion";
$tdatacalcular_indice_MINED[".addFields"][] = "dep_mun";
$tdatacalcular_indice_MINED[".addFields"][] = "max_matric2016";
$tdatacalcular_indice_MINED[".addFields"][] = "mrf2016";
$tdatacalcular_indice_MINED[".addFields"][] = "pab_af";
$tdatacalcular_indice_MINED[".addFields"][] = "r_h";
$tdatacalcular_indice_MINED[".addFields"][] = "ipce_naive";
$tdatacalcular_indice_MINED[".addFields"][] = "ipce_0_1";
$tdatacalcular_indice_MINED[".addFields"][] = "aÑo";

$tdatacalcular_indice_MINED[".masterListFields"] = array();
$tdatacalcular_indice_MINED[".masterListFields"][] = "idderespuesta";
$tdatacalcular_indice_MINED[".masterListFields"][] = "codigo";
$tdatacalcular_indice_MINED[".masterListFields"][] = "depto";
$tdatacalcular_indice_MINED[".masterListFields"][] = "departamento";
$tdatacalcular_indice_MINED[".masterListFields"][] = "mun";
$tdatacalcular_indice_MINED[".masterListFields"][] = "municipio";
$tdatacalcular_indice_MINED[".masterListFields"][] = "nombre_c_e";
$tdatacalcular_indice_MINED[".masterListFields"][] = "x";
$tdatacalcular_indice_MINED[".masterListFields"][] = "y";
$tdatacalcular_indice_MINED[".masterListFields"][] = "sector_ppd";
$tdatacalcular_indice_MINED[".masterListFields"][] = "matricula_inicial";
$tdatacalcular_indice_MINED[".masterListFields"][] = "matricula_final";
$tdatacalcular_indice_MINED[".masterListFields"][] = "maras";
$tdatacalcular_indice_MINED[".masterListFields"][] = "robos";
$tdatacalcular_indice_MINED[".masterListFields"][] = "hurtos";
$tdatacalcular_indice_MINED[".masterListFields"][] = "drogas";
$tdatacalcular_indice_MINED[".masterListFields"][] = "violaciones";
$tdatacalcular_indice_MINED[".masterListFields"][] = "pab";
$tdatacalcular_indice_MINED[".masterListFields"][] = "paf";
$tdatacalcular_indice_MINED[".masterListFields"][] = "escasos_recursos";
$tdatacalcular_indice_MINED[".masterListFields"][] = "incorpo_actividades_prod";
$tdatacalcular_indice_MINED[".masterListFields"][] = "lejania_ce";
$tdatacalcular_indice_MINED[".masterListFields"][] = "violencia_pandilleril";
$tdatacalcular_indice_MINED[".masterListFields"][] = "embarazo";
$tdatacalcular_indice_MINED[".masterListFields"][] = "acoso";
$tdatacalcular_indice_MINED[".masterListFields"][] = "violacion_sexual";
$tdatacalcular_indice_MINED[".masterListFields"][] = "cambio_domicilio";
$tdatacalcular_indice_MINED[".masterListFields"][] = "migracion";
$tdatacalcular_indice_MINED[".masterListFields"][] = "bajo_rendimiento";
$tdatacalcular_indice_MINED[".masterListFields"][] = "enfermedad";
$tdatacalcular_indice_MINED[".masterListFields"][] = "prostitucion";
$tdatacalcular_indice_MINED[".masterListFields"][] = "dep_mun";
$tdatacalcular_indice_MINED[".masterListFields"][] = "max_matric2016";
$tdatacalcular_indice_MINED[".masterListFields"][] = "mrf2016";
$tdatacalcular_indice_MINED[".masterListFields"][] = "pab_af";
$tdatacalcular_indice_MINED[".masterListFields"][] = "r_h";
$tdatacalcular_indice_MINED[".masterListFields"][] = "ipce_naive";
$tdatacalcular_indice_MINED[".masterListFields"][] = "ipce_0_1";
$tdatacalcular_indice_MINED[".masterListFields"][] = "aÑo";

$tdatacalcular_indice_MINED[".inlineAddFields"] = array();
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "idderespuesta";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "codigo";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "depto";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "departamento";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "mun";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "municipio";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "nombre_c_e";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "x";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "y";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "sector_ppd";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "matricula_inicial";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "matricula_final";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "maras";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "robos";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "hurtos";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "drogas";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "violaciones";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "pab";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "paf";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "escasos_recursos";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "incorpo_actividades_prod";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "lejania_ce";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "violencia_pandilleril";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "embarazo";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "acoso";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "violacion_sexual";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "cambio_domicilio";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "migracion";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "bajo_rendimiento";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "enfermedad";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "prostitucion";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "dep_mun";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "max_matric2016";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "mrf2016";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "pab_af";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "r_h";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "ipce_naive";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "ipce_0_1";
$tdatacalcular_indice_MINED[".inlineAddFields"][] = "aÑo";

$tdatacalcular_indice_MINED[".editFields"] = array();
$tdatacalcular_indice_MINED[".editFields"][] = "idderespuesta";
$tdatacalcular_indice_MINED[".editFields"][] = "codigo";
$tdatacalcular_indice_MINED[".editFields"][] = "depto";
$tdatacalcular_indice_MINED[".editFields"][] = "departamento";
$tdatacalcular_indice_MINED[".editFields"][] = "mun";
$tdatacalcular_indice_MINED[".editFields"][] = "municipio";
$tdatacalcular_indice_MINED[".editFields"][] = "nombre_c_e";
$tdatacalcular_indice_MINED[".editFields"][] = "x";
$tdatacalcular_indice_MINED[".editFields"][] = "y";
$tdatacalcular_indice_MINED[".editFields"][] = "sector_ppd";
$tdatacalcular_indice_MINED[".editFields"][] = "matricula_inicial";
$tdatacalcular_indice_MINED[".editFields"][] = "matricula_final";
$tdatacalcular_indice_MINED[".editFields"][] = "maras";
$tdatacalcular_indice_MINED[".editFields"][] = "robos";
$tdatacalcular_indice_MINED[".editFields"][] = "hurtos";
$tdatacalcular_indice_MINED[".editFields"][] = "drogas";
$tdatacalcular_indice_MINED[".editFields"][] = "violaciones";
$tdatacalcular_indice_MINED[".editFields"][] = "pab";
$tdatacalcular_indice_MINED[".editFields"][] = "paf";
$tdatacalcular_indice_MINED[".editFields"][] = "escasos_recursos";
$tdatacalcular_indice_MINED[".editFields"][] = "incorpo_actividades_prod";
$tdatacalcular_indice_MINED[".editFields"][] = "lejania_ce";
$tdatacalcular_indice_MINED[".editFields"][] = "violencia_pandilleril";
$tdatacalcular_indice_MINED[".editFields"][] = "embarazo";
$tdatacalcular_indice_MINED[".editFields"][] = "acoso";
$tdatacalcular_indice_MINED[".editFields"][] = "violacion_sexual";
$tdatacalcular_indice_MINED[".editFields"][] = "cambio_domicilio";
$tdatacalcular_indice_MINED[".editFields"][] = "migracion";
$tdatacalcular_indice_MINED[".editFields"][] = "bajo_rendimiento";
$tdatacalcular_indice_MINED[".editFields"][] = "enfermedad";
$tdatacalcular_indice_MINED[".editFields"][] = "prostitucion";
$tdatacalcular_indice_MINED[".editFields"][] = "dep_mun";
$tdatacalcular_indice_MINED[".editFields"][] = "max_matric2016";
$tdatacalcular_indice_MINED[".editFields"][] = "mrf2016";
$tdatacalcular_indice_MINED[".editFields"][] = "pab_af";
$tdatacalcular_indice_MINED[".editFields"][] = "r_h";
$tdatacalcular_indice_MINED[".editFields"][] = "ipce_naive";
$tdatacalcular_indice_MINED[".editFields"][] = "ipce_0_1";
$tdatacalcular_indice_MINED[".editFields"][] = "aÑo";

$tdatacalcular_indice_MINED[".inlineEditFields"] = array();
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "idderespuesta";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "codigo";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "depto";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "departamento";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "mun";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "municipio";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "nombre_c_e";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "x";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "y";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "sector_ppd";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "matricula_inicial";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "matricula_final";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "maras";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "robos";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "hurtos";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "drogas";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "violaciones";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "pab";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "paf";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "escasos_recursos";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "incorpo_actividades_prod";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "lejania_ce";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "violencia_pandilleril";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "embarazo";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "acoso";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "violacion_sexual";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "cambio_domicilio";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "migracion";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "bajo_rendimiento";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "enfermedad";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "prostitucion";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "dep_mun";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "max_matric2016";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "mrf2016";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "pab_af";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "r_h";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "ipce_naive";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "ipce_0_1";
$tdatacalcular_indice_MINED[".inlineEditFields"][] = "aÑo";

$tdatacalcular_indice_MINED[".updateSelectedFields"] = array();
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "idderespuesta";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "codigo";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "depto";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "departamento";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "mun";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "municipio";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "nombre_c_e";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "x";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "y";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "sector_ppd";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "matricula_inicial";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "matricula_final";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "maras";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "robos";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "hurtos";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "drogas";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "violaciones";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "pab";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "paf";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "escasos_recursos";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "incorpo_actividades_prod";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "lejania_ce";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "violencia_pandilleril";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "embarazo";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "acoso";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "violacion_sexual";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "cambio_domicilio";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "migracion";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "bajo_rendimiento";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "enfermedad";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "prostitucion";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "dep_mun";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "max_matric2016";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "mrf2016";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "pab_af";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "r_h";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "ipce_naive";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "ipce_0_1";
$tdatacalcular_indice_MINED[".updateSelectedFields"][] = "aÑo";


$tdatacalcular_indice_MINED[".exportFields"] = array();
$tdatacalcular_indice_MINED[".exportFields"][] = "idderespuesta";
$tdatacalcular_indice_MINED[".exportFields"][] = "codigo";
$tdatacalcular_indice_MINED[".exportFields"][] = "depto";
$tdatacalcular_indice_MINED[".exportFields"][] = "departamento";
$tdatacalcular_indice_MINED[".exportFields"][] = "mun";
$tdatacalcular_indice_MINED[".exportFields"][] = "municipio";
$tdatacalcular_indice_MINED[".exportFields"][] = "nombre_c_e";
$tdatacalcular_indice_MINED[".exportFields"][] = "x";
$tdatacalcular_indice_MINED[".exportFields"][] = "y";
$tdatacalcular_indice_MINED[".exportFields"][] = "sector_ppd";
$tdatacalcular_indice_MINED[".exportFields"][] = "matricula_inicial";
$tdatacalcular_indice_MINED[".exportFields"][] = "matricula_final";
$tdatacalcular_indice_MINED[".exportFields"][] = "maras";
$tdatacalcular_indice_MINED[".exportFields"][] = "robos";
$tdatacalcular_indice_MINED[".exportFields"][] = "hurtos";
$tdatacalcular_indice_MINED[".exportFields"][] = "drogas";
$tdatacalcular_indice_MINED[".exportFields"][] = "violaciones";
$tdatacalcular_indice_MINED[".exportFields"][] = "pab";
$tdatacalcular_indice_MINED[".exportFields"][] = "paf";
$tdatacalcular_indice_MINED[".exportFields"][] = "escasos_recursos";
$tdatacalcular_indice_MINED[".exportFields"][] = "incorpo_actividades_prod";
$tdatacalcular_indice_MINED[".exportFields"][] = "lejania_ce";
$tdatacalcular_indice_MINED[".exportFields"][] = "violencia_pandilleril";
$tdatacalcular_indice_MINED[".exportFields"][] = "embarazo";
$tdatacalcular_indice_MINED[".exportFields"][] = "acoso";
$tdatacalcular_indice_MINED[".exportFields"][] = "violacion_sexual";
$tdatacalcular_indice_MINED[".exportFields"][] = "cambio_domicilio";
$tdatacalcular_indice_MINED[".exportFields"][] = "migracion";
$tdatacalcular_indice_MINED[".exportFields"][] = "bajo_rendimiento";
$tdatacalcular_indice_MINED[".exportFields"][] = "enfermedad";
$tdatacalcular_indice_MINED[".exportFields"][] = "prostitucion";
$tdatacalcular_indice_MINED[".exportFields"][] = "dep_mun";
$tdatacalcular_indice_MINED[".exportFields"][] = "max_matric2016";
$tdatacalcular_indice_MINED[".exportFields"][] = "mrf2016";
$tdatacalcular_indice_MINED[".exportFields"][] = "pab_af";
$tdatacalcular_indice_MINED[".exportFields"][] = "r_h";
$tdatacalcular_indice_MINED[".exportFields"][] = "ipce_naive";
$tdatacalcular_indice_MINED[".exportFields"][] = "ipce_0_1";
$tdatacalcular_indice_MINED[".exportFields"][] = "aÑo";

$tdatacalcular_indice_MINED[".importFields"] = array();
$tdatacalcular_indice_MINED[".importFields"][] = "idderespuesta";
$tdatacalcular_indice_MINED[".importFields"][] = "codigo";
$tdatacalcular_indice_MINED[".importFields"][] = "depto";
$tdatacalcular_indice_MINED[".importFields"][] = "departamento";
$tdatacalcular_indice_MINED[".importFields"][] = "mun";
$tdatacalcular_indice_MINED[".importFields"][] = "municipio";
$tdatacalcular_indice_MINED[".importFields"][] = "nombre_c_e";
$tdatacalcular_indice_MINED[".importFields"][] = "x";
$tdatacalcular_indice_MINED[".importFields"][] = "y";
$tdatacalcular_indice_MINED[".importFields"][] = "sector_ppd";
$tdatacalcular_indice_MINED[".importFields"][] = "matricula_inicial";
$tdatacalcular_indice_MINED[".importFields"][] = "matricula_final";
$tdatacalcular_indice_MINED[".importFields"][] = "maras";
$tdatacalcular_indice_MINED[".importFields"][] = "robos";
$tdatacalcular_indice_MINED[".importFields"][] = "hurtos";
$tdatacalcular_indice_MINED[".importFields"][] = "drogas";
$tdatacalcular_indice_MINED[".importFields"][] = "violaciones";
$tdatacalcular_indice_MINED[".importFields"][] = "pab";
$tdatacalcular_indice_MINED[".importFields"][] = "paf";
$tdatacalcular_indice_MINED[".importFields"][] = "escasos_recursos";
$tdatacalcular_indice_MINED[".importFields"][] = "incorpo_actividades_prod";
$tdatacalcular_indice_MINED[".importFields"][] = "lejania_ce";
$tdatacalcular_indice_MINED[".importFields"][] = "violencia_pandilleril";
$tdatacalcular_indice_MINED[".importFields"][] = "embarazo";
$tdatacalcular_indice_MINED[".importFields"][] = "acoso";
$tdatacalcular_indice_MINED[".importFields"][] = "violacion_sexual";
$tdatacalcular_indice_MINED[".importFields"][] = "cambio_domicilio";
$tdatacalcular_indice_MINED[".importFields"][] = "migracion";
$tdatacalcular_indice_MINED[".importFields"][] = "bajo_rendimiento";
$tdatacalcular_indice_MINED[".importFields"][] = "enfermedad";
$tdatacalcular_indice_MINED[".importFields"][] = "prostitucion";
$tdatacalcular_indice_MINED[".importFields"][] = "dep_mun";
$tdatacalcular_indice_MINED[".importFields"][] = "max_matric2016";
$tdatacalcular_indice_MINED[".importFields"][] = "mrf2016";
$tdatacalcular_indice_MINED[".importFields"][] = "pab_af";
$tdatacalcular_indice_MINED[".importFields"][] = "r_h";
$tdatacalcular_indice_MINED[".importFields"][] = "ipce_naive";
$tdatacalcular_indice_MINED[".importFields"][] = "ipce_0_1";
$tdatacalcular_indice_MINED[".importFields"][] = "aÑo";

$tdatacalcular_indice_MINED[".printFields"] = array();
$tdatacalcular_indice_MINED[".printFields"][] = "idderespuesta";
$tdatacalcular_indice_MINED[".printFields"][] = "codigo";
$tdatacalcular_indice_MINED[".printFields"][] = "depto";
$tdatacalcular_indice_MINED[".printFields"][] = "departamento";
$tdatacalcular_indice_MINED[".printFields"][] = "mun";
$tdatacalcular_indice_MINED[".printFields"][] = "municipio";
$tdatacalcular_indice_MINED[".printFields"][] = "nombre_c_e";
$tdatacalcular_indice_MINED[".printFields"][] = "x";
$tdatacalcular_indice_MINED[".printFields"][] = "y";
$tdatacalcular_indice_MINED[".printFields"][] = "sector_ppd";
$tdatacalcular_indice_MINED[".printFields"][] = "matricula_inicial";
$tdatacalcular_indice_MINED[".printFields"][] = "matricula_final";
$tdatacalcular_indice_MINED[".printFields"][] = "maras";
$tdatacalcular_indice_MINED[".printFields"][] = "robos";
$tdatacalcular_indice_MINED[".printFields"][] = "hurtos";
$tdatacalcular_indice_MINED[".printFields"][] = "drogas";
$tdatacalcular_indice_MINED[".printFields"][] = "violaciones";
$tdatacalcular_indice_MINED[".printFields"][] = "pab";
$tdatacalcular_indice_MINED[".printFields"][] = "paf";
$tdatacalcular_indice_MINED[".printFields"][] = "escasos_recursos";
$tdatacalcular_indice_MINED[".printFields"][] = "incorpo_actividades_prod";
$tdatacalcular_indice_MINED[".printFields"][] = "lejania_ce";
$tdatacalcular_indice_MINED[".printFields"][] = "violencia_pandilleril";
$tdatacalcular_indice_MINED[".printFields"][] = "embarazo";
$tdatacalcular_indice_MINED[".printFields"][] = "acoso";
$tdatacalcular_indice_MINED[".printFields"][] = "violacion_sexual";
$tdatacalcular_indice_MINED[".printFields"][] = "cambio_domicilio";
$tdatacalcular_indice_MINED[".printFields"][] = "migracion";
$tdatacalcular_indice_MINED[".printFields"][] = "bajo_rendimiento";
$tdatacalcular_indice_MINED[".printFields"][] = "enfermedad";
$tdatacalcular_indice_MINED[".printFields"][] = "prostitucion";
$tdatacalcular_indice_MINED[".printFields"][] = "dep_mun";
$tdatacalcular_indice_MINED[".printFields"][] = "max_matric2016";
$tdatacalcular_indice_MINED[".printFields"][] = "mrf2016";
$tdatacalcular_indice_MINED[".printFields"][] = "pab_af";
$tdatacalcular_indice_MINED[".printFields"][] = "r_h";
$tdatacalcular_indice_MINED[".printFields"][] = "ipce_naive";
$tdatacalcular_indice_MINED[".printFields"][] = "ipce_0_1";
$tdatacalcular_indice_MINED[".printFields"][] = "aÑo";

//	idderespuesta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idderespuesta";
	$fdata["GoodName"] = "idderespuesta";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","idderespuesta");
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

		$fdata["strField"] = "idderespuesta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idderespuesta";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["idderespuesta"] = $fdata;
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","codigo");
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

		$fdata["strField"] = "codigo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigo";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["codigo"] = $fdata;
//	depto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "depto";
	$fdata["GoodName"] = "depto";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","depto");
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

		$fdata["strField"] = "depto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "depto";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["depto"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","departamento");
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

		$fdata["strField"] = "departamento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "departamento";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["departamento"] = $fdata;
//	mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mun";
	$fdata["GoodName"] = "mun";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","mun");
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

		$fdata["strField"] = "mun";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mun";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["mun"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","municipio");
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

		$fdata["strField"] = "municipio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "municipio";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["municipio"] = $fdata;
//	nombre_c_e
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nombre_c_e";
	$fdata["GoodName"] = "nombre_c_e";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","nombre_c_e");
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

		$fdata["strField"] = "nombre_c_e";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_c_e";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["nombre_c_e"] = $fdata;
//	x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "x";
	$fdata["GoodName"] = "x";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","x");
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["x"] = $fdata;
//	y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "y";
	$fdata["GoodName"] = "y";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","y");
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["y"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","sector_ppd");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["sector_ppd"] = $fdata;
//	matricula_inicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "matricula_inicial";
	$fdata["GoodName"] = "matricula_inicial";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","matricula_inicial");
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

		$fdata["strField"] = "matricula_inicial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "matricula_inicial";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["matricula_inicial"] = $fdata;
//	matricula_final
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "matricula_final";
	$fdata["GoodName"] = "matricula_final";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","matricula_final");
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

		$fdata["strField"] = "matricula_final";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "matricula_final";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["matricula_final"] = $fdata;
//	maras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "maras";
	$fdata["GoodName"] = "maras";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","maras");
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

		$fdata["strField"] = "maras";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "maras";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["maras"] = $fdata;
//	robos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "robos";
	$fdata["GoodName"] = "robos";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","robos");
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

		$fdata["strField"] = "robos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "robos";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["robos"] = $fdata;
//	hurtos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "hurtos";
	$fdata["GoodName"] = "hurtos";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","hurtos");
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

		$fdata["strField"] = "hurtos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hurtos";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["hurtos"] = $fdata;
//	drogas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "drogas";
	$fdata["GoodName"] = "drogas";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","drogas");
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

		$fdata["strField"] = "drogas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "drogas";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["drogas"] = $fdata;
//	violaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "violaciones";
	$fdata["GoodName"] = "violaciones";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","violaciones");
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

		$fdata["strField"] = "violaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "violaciones";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["violaciones"] = $fdata;
//	pab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "pab";
	$fdata["GoodName"] = "pab";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","pab");
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

		$fdata["strField"] = "pab";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pab";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["pab"] = $fdata;
//	paf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "paf";
	$fdata["GoodName"] = "paf";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","paf");
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

		$fdata["strField"] = "paf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paf";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["paf"] = $fdata;
//	escasos_recursos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "escasos_recursos";
	$fdata["GoodName"] = "escasos_recursos";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","escasos_recursos");
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

		$fdata["strField"] = "escasos_recursos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escasos_recursos";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["escasos_recursos"] = $fdata;
//	incorpo_actividades_prod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "incorpo_actividades_prod";
	$fdata["GoodName"] = "incorpo_actividades_prod";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","incorpo_actividades_prod");
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

		$fdata["strField"] = "incorpo_actividades_prod";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "incorpo_actividades_prod";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["incorpo_actividades_prod"] = $fdata;
//	lejania_ce
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "lejania_ce";
	$fdata["GoodName"] = "lejania_ce";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","lejania_ce");
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

		$fdata["strField"] = "lejania_ce";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lejania_ce";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["lejania_ce"] = $fdata;
//	violencia_pandilleril
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "violencia_pandilleril";
	$fdata["GoodName"] = "violencia_pandilleril";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","violencia_pandilleril");
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

		$fdata["strField"] = "violencia_pandilleril";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "violencia_pandilleril";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["violencia_pandilleril"] = $fdata;
//	embarazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "embarazo";
	$fdata["GoodName"] = "embarazo";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","embarazo");
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

		$fdata["strField"] = "embarazo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "embarazo";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["embarazo"] = $fdata;
//	acoso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "acoso";
	$fdata["GoodName"] = "acoso";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","acoso");
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

		$fdata["strField"] = "acoso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "acoso";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["acoso"] = $fdata;
//	violacion_sexual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "violacion_sexual";
	$fdata["GoodName"] = "violacion_sexual";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","violacion_sexual");
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

		$fdata["strField"] = "violacion_sexual";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "violacion_sexual";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["violacion_sexual"] = $fdata;
//	cambio_domicilio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "cambio_domicilio";
	$fdata["GoodName"] = "cambio_domicilio";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","cambio_domicilio");
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

		$fdata["strField"] = "cambio_domicilio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cambio_domicilio";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["cambio_domicilio"] = $fdata;
//	migracion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "migracion";
	$fdata["GoodName"] = "migracion";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","migracion");
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

		$fdata["strField"] = "migracion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "migracion";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["migracion"] = $fdata;
//	bajo_rendimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "bajo_rendimiento";
	$fdata["GoodName"] = "bajo_rendimiento";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","bajo_rendimiento");
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

		$fdata["strField"] = "bajo_rendimiento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bajo_rendimiento";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["bajo_rendimiento"] = $fdata;
//	enfermedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "enfermedad";
	$fdata["GoodName"] = "enfermedad";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","enfermedad");
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

		$fdata["strField"] = "enfermedad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "enfermedad";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["enfermedad"] = $fdata;
//	prostitucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "prostitucion";
	$fdata["GoodName"] = "prostitucion";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","prostitucion");
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

		$fdata["strField"] = "prostitucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prostitucion";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["prostitucion"] = $fdata;
//	dep_mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "dep_mun";
	$fdata["GoodName"] = "dep_mun";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","dep_mun");
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

		$fdata["strField"] = "dep_mun";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dep_mun";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["dep_mun"] = $fdata;
//	max_matric2016
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "max_matric2016";
	$fdata["GoodName"] = "max_matric2016";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","max_matric2016");
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

		$fdata["strField"] = "max_matric2016";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "max_matric2016";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["max_matric2016"] = $fdata;
//	mrf2016
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "mrf2016";
	$fdata["GoodName"] = "mrf2016";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","mrf2016");
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

		$fdata["strField"] = "mrf2016";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mrf2016";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["mrf2016"] = $fdata;
//	pab_af
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "pab_af";
	$fdata["GoodName"] = "pab_af";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","pab_af");
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

		$fdata["strField"] = "pab_af";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pab_af";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["pab_af"] = $fdata;
//	r_h
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "r_h";
	$fdata["GoodName"] = "r_h";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","r_h");
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

		$fdata["strField"] = "r_h";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "r_h";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["r_h"] = $fdata;
//	ipce_naive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "ipce_naive";
	$fdata["GoodName"] = "ipce_naive";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","ipce_naive");
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

		$fdata["strField"] = "ipce_naive";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ipce_naive";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["ipce_naive"] = $fdata;
//	ipce_0_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "ipce_0_1";
	$fdata["GoodName"] = "ipce_0_1";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","ipce_0_1");
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

		$fdata["strField"] = "ipce_0_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ipce_0_1";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["ipce_0_1"] = $fdata;
//	aÑo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "aÑo";
	$fdata["GoodName"] = "a_o";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("calcular_indice_MINED","a_o");
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

		$fdata["strField"] = "aÑo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`aÑo`";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacalcular_indice_MINED["aÑo"] = $fdata;


$tables_data["calcular indice MINED"]=&$tdatacalcular_indice_MINED;
$field_labels["calcular_indice_MINED"] = &$fieldLabelscalcular_indice_MINED;
$fieldToolTips["calcular_indice_MINED"] = &$fieldToolTipscalcular_indice_MINED;
$placeHolders["calcular_indice_MINED"] = &$placeHolderscalcular_indice_MINED;
$page_titles["calcular_indice_MINED"] = &$pageTitlescalcular_indice_MINED;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["calcular indice MINED"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["calcular indice MINED"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_calcular_indice_MINED()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idderespuesta,  	codigo,  	depto,  	departamento,  	mun,  	municipio,  	nombre_c_e,  	x,  	y,  	sector_ppd,  	matricula_inicial,  	matricula_final,  	maras,  	robos,  	hurtos,  	drogas,  	violaciones,  	pab,  	paf,  	escasos_recursos,  	incorpo_actividades_prod,  	lejania_ce,  	violencia_pandilleril,  	embarazo,  	acoso,  	violacion_sexual,  	cambio_domicilio,  	migracion,  	bajo_rendimiento,  	enfermedad,  	prostitucion,  	dep_mun,  	max_matric2016,  	mrf2016,  	pab_af,  	r_h,  	ipce_naive,  	ipce_0_1,  	`aÑo`";
$proto0["m_strFrom"] = "FROM mined1";
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
	"m_strName" => "idderespuesta",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto6["m_sql"] = "idderespuesta";
$proto6["m_srcTableName"] = "calcular indice MINED";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto8["m_sql"] = "codigo";
$proto8["m_srcTableName"] = "calcular indice MINED";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "depto",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto10["m_sql"] = "depto";
$proto10["m_srcTableName"] = "calcular indice MINED";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto12["m_sql"] = "departamento";
$proto12["m_srcTableName"] = "calcular indice MINED";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "mun",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto14["m_sql"] = "mun";
$proto14["m_srcTableName"] = "calcular indice MINED";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto16["m_sql"] = "municipio";
$proto16["m_srcTableName"] = "calcular indice MINED";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_c_e",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto18["m_sql"] = "nombre_c_e";
$proto18["m_srcTableName"] = "calcular indice MINED";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "x",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto20["m_sql"] = "x";
$proto20["m_srcTableName"] = "calcular indice MINED";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "y",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto22["m_sql"] = "y";
$proto22["m_srcTableName"] = "calcular indice MINED";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto24["m_sql"] = "sector_ppd";
$proto24["m_srcTableName"] = "calcular indice MINED";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "matricula_inicial",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto26["m_sql"] = "matricula_inicial";
$proto26["m_srcTableName"] = "calcular indice MINED";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "matricula_final",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto28["m_sql"] = "matricula_final";
$proto28["m_srcTableName"] = "calcular indice MINED";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "maras",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto30["m_sql"] = "maras";
$proto30["m_srcTableName"] = "calcular indice MINED";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "robos",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto32["m_sql"] = "robos";
$proto32["m_srcTableName"] = "calcular indice MINED";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "hurtos",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto34["m_sql"] = "hurtos";
$proto34["m_srcTableName"] = "calcular indice MINED";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "drogas",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto36["m_sql"] = "drogas";
$proto36["m_srcTableName"] = "calcular indice MINED";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "violaciones",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto38["m_sql"] = "violaciones";
$proto38["m_srcTableName"] = "calcular indice MINED";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "pab",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto40["m_sql"] = "pab";
$proto40["m_srcTableName"] = "calcular indice MINED";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "paf",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto42["m_sql"] = "paf";
$proto42["m_srcTableName"] = "calcular indice MINED";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "escasos_recursos",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto44["m_sql"] = "escasos_recursos";
$proto44["m_srcTableName"] = "calcular indice MINED";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "incorpo_actividades_prod",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto46["m_sql"] = "incorpo_actividades_prod";
$proto46["m_srcTableName"] = "calcular indice MINED";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "lejania_ce",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto48["m_sql"] = "lejania_ce";
$proto48["m_srcTableName"] = "calcular indice MINED";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "violencia_pandilleril",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto50["m_sql"] = "violencia_pandilleril";
$proto50["m_srcTableName"] = "calcular indice MINED";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "embarazo",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto52["m_sql"] = "embarazo";
$proto52["m_srcTableName"] = "calcular indice MINED";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "acoso",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto54["m_sql"] = "acoso";
$proto54["m_srcTableName"] = "calcular indice MINED";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "violacion_sexual",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto56["m_sql"] = "violacion_sexual";
$proto56["m_srcTableName"] = "calcular indice MINED";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "cambio_domicilio",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto58["m_sql"] = "cambio_domicilio";
$proto58["m_srcTableName"] = "calcular indice MINED";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "migracion",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto60["m_sql"] = "migracion";
$proto60["m_srcTableName"] = "calcular indice MINED";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "bajo_rendimiento",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto62["m_sql"] = "bajo_rendimiento";
$proto62["m_srcTableName"] = "calcular indice MINED";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "enfermedad",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto64["m_sql"] = "enfermedad";
$proto64["m_srcTableName"] = "calcular indice MINED";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "prostitucion",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto66["m_sql"] = "prostitucion";
$proto66["m_srcTableName"] = "calcular indice MINED";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "dep_mun",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto68["m_sql"] = "dep_mun";
$proto68["m_srcTableName"] = "calcular indice MINED";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "max_matric2016",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto70["m_sql"] = "max_matric2016";
$proto70["m_srcTableName"] = "calcular indice MINED";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "mrf2016",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto72["m_sql"] = "mrf2016";
$proto72["m_srcTableName"] = "calcular indice MINED";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "pab_af",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto74["m_sql"] = "pab_af";
$proto74["m_srcTableName"] = "calcular indice MINED";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "r_h",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto76["m_sql"] = "r_h";
$proto76["m_srcTableName"] = "calcular indice MINED";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "ipce_naive",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto78["m_sql"] = "ipce_naive";
$proto78["m_srcTableName"] = "calcular indice MINED";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "ipce_0_1",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto80["m_sql"] = "ipce_0_1";
$proto80["m_srcTableName"] = "calcular indice MINED";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo",
	"m_strTable" => "mined1",
	"m_srcTableName" => "calcular indice MINED"
));

$proto82["m_sql"] = "`aÑo`";
$proto82["m_srcTableName"] = "calcular indice MINED";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto84=array();
$proto84["m_link"] = "SQLL_MAIN";
			$proto85=array();
$proto85["m_strName"] = "mined1";
$proto85["m_srcTableName"] = "calcular indice MINED";
$proto85["m_columns"] = array();
$proto85["m_columns"][] = "idderespuesta";
$proto85["m_columns"][] = "codigo";
$proto85["m_columns"][] = "depto";
$proto85["m_columns"][] = "departamento";
$proto85["m_columns"][] = "mun";
$proto85["m_columns"][] = "municipio";
$proto85["m_columns"][] = "nombre_c_e";
$proto85["m_columns"][] = "x";
$proto85["m_columns"][] = "y";
$proto85["m_columns"][] = "sector_ppd";
$proto85["m_columns"][] = "matricula_inicial";
$proto85["m_columns"][] = "matricula_final";
$proto85["m_columns"][] = "maras";
$proto85["m_columns"][] = "robos";
$proto85["m_columns"][] = "hurtos";
$proto85["m_columns"][] = "drogas";
$proto85["m_columns"][] = "violaciones";
$proto85["m_columns"][] = "pab";
$proto85["m_columns"][] = "paf";
$proto85["m_columns"][] = "escasos_recursos";
$proto85["m_columns"][] = "incorpo_actividades_prod";
$proto85["m_columns"][] = "lejania_ce";
$proto85["m_columns"][] = "violencia_pandilleril";
$proto85["m_columns"][] = "embarazo";
$proto85["m_columns"][] = "acoso";
$proto85["m_columns"][] = "violacion_sexual";
$proto85["m_columns"][] = "cambio_domicilio";
$proto85["m_columns"][] = "migracion";
$proto85["m_columns"][] = "bajo_rendimiento";
$proto85["m_columns"][] = "enfermedad";
$proto85["m_columns"][] = "prostitucion";
$proto85["m_columns"][] = "dep_mun";
$proto85["m_columns"][] = "max_matric2016";
$proto85["m_columns"][] = "mrf2016";
$proto85["m_columns"][] = "pab_af";
$proto85["m_columns"][] = "r_h";
$proto85["m_columns"][] = "ipce_naive";
$proto85["m_columns"][] = "ipce_0_1";
$proto85["m_columns"][] = "aÑo";
$obj = new SQLTable($proto85);

$proto84["m_table"] = $obj;
$proto84["m_sql"] = "mined1";
$proto84["m_alias"] = "";
$proto84["m_srcTableName"] = "calcular indice MINED";
$proto86=array();
$proto86["m_sql"] = "";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "";
$proto86["m_havingmode"] = false;
$proto86["m_inBrackets"] = false;
$proto86["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto86);

$proto84["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto84);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="calcular indice MINED";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_calcular_indice_MINED = createSqlQuery_calcular_indice_MINED();


	
		;

																																							

$tdatacalcular_indice_MINED[".sqlquery"] = $queryData_calcular_indice_MINED;

$tableEvents["calcular indice MINED"] = new eventsBase;
$tdatacalcular_indice_MINED[".hasEvents"] = false;

?>