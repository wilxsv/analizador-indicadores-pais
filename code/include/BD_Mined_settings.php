<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBD_Mined = array();
	$tdataBD_Mined[".truncateText"] = true;
	$tdataBD_Mined[".NumberOfChars"] = 80;
	$tdataBD_Mined[".ShortName"] = "BD_Mined";
	$tdataBD_Mined[".OwnerID"] = "";
	$tdataBD_Mined[".OriginalTable"] = "mined";

//	field labels
$fieldLabelsBD_Mined = array();
$fieldToolTipsBD_Mined = array();
$pageTitlesBD_Mined = array();
$placeHoldersBD_Mined = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsBD_Mined["Spanish"] = array();
	$fieldToolTipsBD_Mined["Spanish"] = array();
	$placeHoldersBD_Mined["Spanish"] = array();
	$pageTitlesBD_Mined["Spanish"] = array();
	$fieldLabelsBD_Mined["Spanish"]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipsBD_Mined["Spanish"]["ipce_naive"] = "";
	$placeHoldersBD_Mined["Spanish"]["ipce_naive"] = "";
	$fieldLabelsBD_Mined["Spanish"]["idderespuesta"] = "Idderespuesta";
	$fieldToolTipsBD_Mined["Spanish"]["idderespuesta"] = "";
	$placeHoldersBD_Mined["Spanish"]["idderespuesta"] = "";
	$fieldLabelsBD_Mined["Spanish"]["codigo"] = "Codigo";
	$fieldToolTipsBD_Mined["Spanish"]["codigo"] = "";
	$placeHoldersBD_Mined["Spanish"]["codigo"] = "";
	$fieldLabelsBD_Mined["Spanish"]["depto"] = "Depto";
	$fieldToolTipsBD_Mined["Spanish"]["depto"] = "";
	$placeHoldersBD_Mined["Spanish"]["depto"] = "";
	$fieldLabelsBD_Mined["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsBD_Mined["Spanish"]["departamento"] = "";
	$placeHoldersBD_Mined["Spanish"]["departamento"] = "";
	$fieldLabelsBD_Mined["Spanish"]["mun"] = "Mun";
	$fieldToolTipsBD_Mined["Spanish"]["mun"] = "";
	$placeHoldersBD_Mined["Spanish"]["mun"] = "";
	$fieldLabelsBD_Mined["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsBD_Mined["Spanish"]["municipio"] = "";
	$placeHoldersBD_Mined["Spanish"]["municipio"] = "";
	$fieldLabelsBD_Mined["Spanish"]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsBD_Mined["Spanish"]["nombre_c_e"] = "";
	$placeHoldersBD_Mined["Spanish"]["nombre_c_e"] = "";
	$fieldLabelsBD_Mined["Spanish"]["x"] = "X";
	$fieldToolTipsBD_Mined["Spanish"]["x"] = "";
	$placeHoldersBD_Mined["Spanish"]["x"] = "";
	$fieldLabelsBD_Mined["Spanish"]["y"] = "Y";
	$fieldToolTipsBD_Mined["Spanish"]["y"] = "";
	$placeHoldersBD_Mined["Spanish"]["y"] = "";
	$fieldLabelsBD_Mined["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsBD_Mined["Spanish"]["sector_ppd"] = "";
	$placeHoldersBD_Mined["Spanish"]["sector_ppd"] = "";
	$fieldLabelsBD_Mined["Spanish"]["matricula_inicial"] = "Matricula Inicial";
	$fieldToolTipsBD_Mined["Spanish"]["matricula_inicial"] = "";
	$placeHoldersBD_Mined["Spanish"]["matricula_inicial"] = "";
	$fieldLabelsBD_Mined["Spanish"]["matricula_final"] = "Matricula Final";
	$fieldToolTipsBD_Mined["Spanish"]["matricula_final"] = "";
	$placeHoldersBD_Mined["Spanish"]["matricula_final"] = "";
	$fieldLabelsBD_Mined["Spanish"]["maras"] = "Maras";
	$fieldToolTipsBD_Mined["Spanish"]["maras"] = "";
	$placeHoldersBD_Mined["Spanish"]["maras"] = "";
	$fieldLabelsBD_Mined["Spanish"]["robos"] = "Robos";
	$fieldToolTipsBD_Mined["Spanish"]["robos"] = "";
	$placeHoldersBD_Mined["Spanish"]["robos"] = "";
	$fieldLabelsBD_Mined["Spanish"]["hurtos"] = "Hurtos";
	$fieldToolTipsBD_Mined["Spanish"]["hurtos"] = "";
	$placeHoldersBD_Mined["Spanish"]["hurtos"] = "";
	$fieldLabelsBD_Mined["Spanish"]["drogas"] = "Drogas";
	$fieldToolTipsBD_Mined["Spanish"]["drogas"] = "";
	$placeHoldersBD_Mined["Spanish"]["drogas"] = "";
	$fieldLabelsBD_Mined["Spanish"]["violaciones"] = "Violaciones";
	$fieldToolTipsBD_Mined["Spanish"]["violaciones"] = "";
	$placeHoldersBD_Mined["Spanish"]["violaciones"] = "";
	$fieldLabelsBD_Mined["Spanish"]["pab"] = "Pab";
	$fieldToolTipsBD_Mined["Spanish"]["pab"] = "";
	$placeHoldersBD_Mined["Spanish"]["pab"] = "";
	$fieldLabelsBD_Mined["Spanish"]["paf"] = "Paf";
	$fieldToolTipsBD_Mined["Spanish"]["paf"] = "";
	$placeHoldersBD_Mined["Spanish"]["paf"] = "";
	$fieldLabelsBD_Mined["Spanish"]["escasos_recursos"] = "Escasos Recursos";
	$fieldToolTipsBD_Mined["Spanish"]["escasos_recursos"] = "";
	$placeHoldersBD_Mined["Spanish"]["escasos_recursos"] = "";
	$fieldLabelsBD_Mined["Spanish"]["incorpo_actividades_prod"] = "Incorpo Actividades Prod";
	$fieldToolTipsBD_Mined["Spanish"]["incorpo_actividades_prod"] = "";
	$placeHoldersBD_Mined["Spanish"]["incorpo_actividades_prod"] = "";
	$fieldLabelsBD_Mined["Spanish"]["lejania_ce"] = "Lejania Ce";
	$fieldToolTipsBD_Mined["Spanish"]["lejania_ce"] = "";
	$placeHoldersBD_Mined["Spanish"]["lejania_ce"] = "";
	$fieldLabelsBD_Mined["Spanish"]["violencia_pandilleril"] = "Violencia Pandilleril";
	$fieldToolTipsBD_Mined["Spanish"]["violencia_pandilleril"] = "";
	$placeHoldersBD_Mined["Spanish"]["violencia_pandilleril"] = "";
	$fieldLabelsBD_Mined["Spanish"]["embarazo"] = "Embarazo";
	$fieldToolTipsBD_Mined["Spanish"]["embarazo"] = "";
	$placeHoldersBD_Mined["Spanish"]["embarazo"] = "";
	$fieldLabelsBD_Mined["Spanish"]["acoso"] = "Acoso";
	$fieldToolTipsBD_Mined["Spanish"]["acoso"] = "";
	$placeHoldersBD_Mined["Spanish"]["acoso"] = "";
	$fieldLabelsBD_Mined["Spanish"]["violacion_sexual"] = "Violacion Sexual";
	$fieldToolTipsBD_Mined["Spanish"]["violacion_sexual"] = "";
	$placeHoldersBD_Mined["Spanish"]["violacion_sexual"] = "";
	$fieldLabelsBD_Mined["Spanish"]["cambio_domicilio"] = "Cambio Domicilio";
	$fieldToolTipsBD_Mined["Spanish"]["cambio_domicilio"] = "";
	$placeHoldersBD_Mined["Spanish"]["cambio_domicilio"] = "";
	$fieldLabelsBD_Mined["Spanish"]["migracion"] = "Migracion";
	$fieldToolTipsBD_Mined["Spanish"]["migracion"] = "";
	$placeHoldersBD_Mined["Spanish"]["migracion"] = "";
	$fieldLabelsBD_Mined["Spanish"]["bajo_rendimiento"] = "Bajo Rendimiento";
	$fieldToolTipsBD_Mined["Spanish"]["bajo_rendimiento"] = "";
	$placeHoldersBD_Mined["Spanish"]["bajo_rendimiento"] = "";
	$fieldLabelsBD_Mined["Spanish"]["enfermedad"] = "Enfermedad";
	$fieldToolTipsBD_Mined["Spanish"]["enfermedad"] = "";
	$placeHoldersBD_Mined["Spanish"]["enfermedad"] = "";
	$fieldLabelsBD_Mined["Spanish"]["prostitucion"] = "Prostitucion";
	$fieldToolTipsBD_Mined["Spanish"]["prostitucion"] = "";
	$placeHoldersBD_Mined["Spanish"]["prostitucion"] = "";
	$fieldLabelsBD_Mined["Spanish"]["dep_mun"] = "Dep Mun";
	$fieldToolTipsBD_Mined["Spanish"]["dep_mun"] = "";
	$placeHoldersBD_Mined["Spanish"]["dep_mun"] = "";
	$fieldLabelsBD_Mined["Spanish"]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipsBD_Mined["Spanish"]["max_matric2016"] = "";
	$placeHoldersBD_Mined["Spanish"]["max_matric2016"] = "";
	$fieldLabelsBD_Mined["Spanish"]["mrf2016"] = "Mrf2016";
	$fieldToolTipsBD_Mined["Spanish"]["mrf2016"] = "";
	$placeHoldersBD_Mined["Spanish"]["mrf2016"] = "";
	$fieldLabelsBD_Mined["Spanish"]["pab_af"] = "Pab Af";
	$fieldToolTipsBD_Mined["Spanish"]["pab_af"] = "";
	$placeHoldersBD_Mined["Spanish"]["pab_af"] = "";
	$fieldLabelsBD_Mined["Spanish"]["r_h"] = "R H";
	$fieldToolTipsBD_Mined["Spanish"]["r_h"] = "";
	$placeHoldersBD_Mined["Spanish"]["r_h"] = "";
	$fieldLabelsBD_Mined["Spanish"]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipsBD_Mined["Spanish"]["ipce_0_1"] = "";
	$placeHoldersBD_Mined["Spanish"]["ipce_0_1"] = "";
	$fieldLabelsBD_Mined["Spanish"]["a_o"] = "AÑo";
	$fieldToolTipsBD_Mined["Spanish"]["a_o"] = "";
	$placeHoldersBD_Mined["Spanish"]["a_o"] = "";
	if (count($fieldToolTipsBD_Mined["Spanish"]))
		$tdataBD_Mined[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBD_Mined["English"] = array();
	$fieldToolTipsBD_Mined["English"] = array();
	$placeHoldersBD_Mined["English"] = array();
	$pageTitlesBD_Mined["English"] = array();
	$fieldLabelsBD_Mined["English"]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipsBD_Mined["English"]["ipce_naive"] = "";
	$placeHoldersBD_Mined["English"]["ipce_naive"] = "";
	$fieldLabelsBD_Mined["English"]["idderespuesta"] = "Idderespuesta";
	$fieldToolTipsBD_Mined["English"]["idderespuesta"] = "";
	$placeHoldersBD_Mined["English"]["idderespuesta"] = "";
	$fieldLabelsBD_Mined["English"]["codigo"] = "Codigo";
	$fieldToolTipsBD_Mined["English"]["codigo"] = "";
	$placeHoldersBD_Mined["English"]["codigo"] = "";
	$fieldLabelsBD_Mined["English"]["depto"] = "Depto";
	$fieldToolTipsBD_Mined["English"]["depto"] = "";
	$placeHoldersBD_Mined["English"]["depto"] = "";
	$fieldLabelsBD_Mined["English"]["departamento"] = "Departamento";
	$fieldToolTipsBD_Mined["English"]["departamento"] = "";
	$placeHoldersBD_Mined["English"]["departamento"] = "";
	$fieldLabelsBD_Mined["English"]["mun"] = "Mun";
	$fieldToolTipsBD_Mined["English"]["mun"] = "";
	$placeHoldersBD_Mined["English"]["mun"] = "";
	$fieldLabelsBD_Mined["English"]["municipio"] = "Municipio";
	$fieldToolTipsBD_Mined["English"]["municipio"] = "";
	$placeHoldersBD_Mined["English"]["municipio"] = "";
	$fieldLabelsBD_Mined["English"]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsBD_Mined["English"]["nombre_c_e"] = "";
	$placeHoldersBD_Mined["English"]["nombre_c_e"] = "";
	$fieldLabelsBD_Mined["English"]["x"] = "X";
	$fieldToolTipsBD_Mined["English"]["x"] = "";
	$placeHoldersBD_Mined["English"]["x"] = "";
	$fieldLabelsBD_Mined["English"]["y"] = "Y";
	$fieldToolTipsBD_Mined["English"]["y"] = "";
	$placeHoldersBD_Mined["English"]["y"] = "";
	$fieldLabelsBD_Mined["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsBD_Mined["English"]["sector_ppd"] = "";
	$placeHoldersBD_Mined["English"]["sector_ppd"] = "";
	$fieldLabelsBD_Mined["English"]["matricula_inicial"] = "Matricula Inicial";
	$fieldToolTipsBD_Mined["English"]["matricula_inicial"] = "";
	$placeHoldersBD_Mined["English"]["matricula_inicial"] = "";
	$fieldLabelsBD_Mined["English"]["matricula_final"] = "Matricula Final";
	$fieldToolTipsBD_Mined["English"]["matricula_final"] = "";
	$placeHoldersBD_Mined["English"]["matricula_final"] = "";
	$fieldLabelsBD_Mined["English"]["maras"] = "Maras";
	$fieldToolTipsBD_Mined["English"]["maras"] = "";
	$placeHoldersBD_Mined["English"]["maras"] = "";
	$fieldLabelsBD_Mined["English"]["robos"] = "Robos";
	$fieldToolTipsBD_Mined["English"]["robos"] = "";
	$placeHoldersBD_Mined["English"]["robos"] = "";
	$fieldLabelsBD_Mined["English"]["hurtos"] = "Hurtos";
	$fieldToolTipsBD_Mined["English"]["hurtos"] = "";
	$placeHoldersBD_Mined["English"]["hurtos"] = "";
	$fieldLabelsBD_Mined["English"]["drogas"] = "Drogas";
	$fieldToolTipsBD_Mined["English"]["drogas"] = "";
	$placeHoldersBD_Mined["English"]["drogas"] = "";
	$fieldLabelsBD_Mined["English"]["violaciones"] = "Violaciones";
	$fieldToolTipsBD_Mined["English"]["violaciones"] = "";
	$placeHoldersBD_Mined["English"]["violaciones"] = "";
	$fieldLabelsBD_Mined["English"]["pab"] = "Pab";
	$fieldToolTipsBD_Mined["English"]["pab"] = "";
	$placeHoldersBD_Mined["English"]["pab"] = "";
	$fieldLabelsBD_Mined["English"]["paf"] = "Paf";
	$fieldToolTipsBD_Mined["English"]["paf"] = "";
	$placeHoldersBD_Mined["English"]["paf"] = "";
	$fieldLabelsBD_Mined["English"]["escasos_recursos"] = "Escasos Recursos";
	$fieldToolTipsBD_Mined["English"]["escasos_recursos"] = "";
	$placeHoldersBD_Mined["English"]["escasos_recursos"] = "";
	$fieldLabelsBD_Mined["English"]["incorpo_actividades_prod"] = "Incorpo Actividades Prod";
	$fieldToolTipsBD_Mined["English"]["incorpo_actividades_prod"] = "";
	$placeHoldersBD_Mined["English"]["incorpo_actividades_prod"] = "";
	$fieldLabelsBD_Mined["English"]["lejania_ce"] = "Lejania Ce";
	$fieldToolTipsBD_Mined["English"]["lejania_ce"] = "";
	$placeHoldersBD_Mined["English"]["lejania_ce"] = "";
	$fieldLabelsBD_Mined["English"]["violencia_pandilleril"] = "Violencia Pandilleril";
	$fieldToolTipsBD_Mined["English"]["violencia_pandilleril"] = "";
	$placeHoldersBD_Mined["English"]["violencia_pandilleril"] = "";
	$fieldLabelsBD_Mined["English"]["embarazo"] = "Embarazo";
	$fieldToolTipsBD_Mined["English"]["embarazo"] = "";
	$placeHoldersBD_Mined["English"]["embarazo"] = "";
	$fieldLabelsBD_Mined["English"]["acoso"] = "Acoso";
	$fieldToolTipsBD_Mined["English"]["acoso"] = "";
	$placeHoldersBD_Mined["English"]["acoso"] = "";
	$fieldLabelsBD_Mined["English"]["violacion_sexual"] = "Violacion Sexual";
	$fieldToolTipsBD_Mined["English"]["violacion_sexual"] = "";
	$placeHoldersBD_Mined["English"]["violacion_sexual"] = "";
	$fieldLabelsBD_Mined["English"]["cambio_domicilio"] = "Cambio Domicilio";
	$fieldToolTipsBD_Mined["English"]["cambio_domicilio"] = "";
	$placeHoldersBD_Mined["English"]["cambio_domicilio"] = "";
	$fieldLabelsBD_Mined["English"]["migracion"] = "Migracion";
	$fieldToolTipsBD_Mined["English"]["migracion"] = "";
	$placeHoldersBD_Mined["English"]["migracion"] = "";
	$fieldLabelsBD_Mined["English"]["bajo_rendimiento"] = "Bajo Rendimiento";
	$fieldToolTipsBD_Mined["English"]["bajo_rendimiento"] = "";
	$placeHoldersBD_Mined["English"]["bajo_rendimiento"] = "";
	$fieldLabelsBD_Mined["English"]["enfermedad"] = "Enfermedad";
	$fieldToolTipsBD_Mined["English"]["enfermedad"] = "";
	$placeHoldersBD_Mined["English"]["enfermedad"] = "";
	$fieldLabelsBD_Mined["English"]["prostitucion"] = "Prostitucion";
	$fieldToolTipsBD_Mined["English"]["prostitucion"] = "";
	$placeHoldersBD_Mined["English"]["prostitucion"] = "";
	$fieldLabelsBD_Mined["English"]["dep_mun"] = "Dep Mun";
	$fieldToolTipsBD_Mined["English"]["dep_mun"] = "";
	$placeHoldersBD_Mined["English"]["dep_mun"] = "";
	$fieldLabelsBD_Mined["English"]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipsBD_Mined["English"]["max_matric2016"] = "";
	$placeHoldersBD_Mined["English"]["max_matric2016"] = "";
	$fieldLabelsBD_Mined["English"]["mrf2016"] = "Mrf2016";
	$fieldToolTipsBD_Mined["English"]["mrf2016"] = "";
	$placeHoldersBD_Mined["English"]["mrf2016"] = "";
	$fieldLabelsBD_Mined["English"]["pab_af"] = "Pab Af";
	$fieldToolTipsBD_Mined["English"]["pab_af"] = "";
	$placeHoldersBD_Mined["English"]["pab_af"] = "";
	$fieldLabelsBD_Mined["English"]["r_h"] = "R H";
	$fieldToolTipsBD_Mined["English"]["r_h"] = "";
	$placeHoldersBD_Mined["English"]["r_h"] = "";
	$fieldLabelsBD_Mined["English"]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipsBD_Mined["English"]["ipce_0_1"] = "";
	$placeHoldersBD_Mined["English"]["ipce_0_1"] = "";
	$fieldLabelsBD_Mined["English"]["a_o"] = "AÑo";
	$fieldToolTipsBD_Mined["English"]["a_o"] = "";
	$placeHoldersBD_Mined["English"]["a_o"] = "";
	if (count($fieldToolTipsBD_Mined["English"]))
		$tdataBD_Mined[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBD_Mined[""] = array();
	$fieldToolTipsBD_Mined[""] = array();
	$placeHoldersBD_Mined[""] = array();
	$pageTitlesBD_Mined[""] = array();
	$fieldLabelsBD_Mined[""]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipsBD_Mined[""]["ipce_naive"] = "";
	$placeHoldersBD_Mined[""]["ipce_naive"] = "";
	$fieldLabelsBD_Mined[""]["idderespuesta"] = "Idderespuesta";
	$fieldToolTipsBD_Mined[""]["idderespuesta"] = "";
	$placeHoldersBD_Mined[""]["idderespuesta"] = "";
	$fieldLabelsBD_Mined[""]["codigo"] = "Codigo";
	$fieldToolTipsBD_Mined[""]["codigo"] = "";
	$placeHoldersBD_Mined[""]["codigo"] = "";
	$fieldLabelsBD_Mined[""]["depto"] = "Depto";
	$fieldToolTipsBD_Mined[""]["depto"] = "";
	$placeHoldersBD_Mined[""]["depto"] = "";
	$fieldLabelsBD_Mined[""]["departamento"] = "Departamento";
	$fieldToolTipsBD_Mined[""]["departamento"] = "";
	$placeHoldersBD_Mined[""]["departamento"] = "";
	$fieldLabelsBD_Mined[""]["mun"] = "Mun";
	$fieldToolTipsBD_Mined[""]["mun"] = "";
	$placeHoldersBD_Mined[""]["mun"] = "";
	$fieldLabelsBD_Mined[""]["municipio"] = "Municipio";
	$fieldToolTipsBD_Mined[""]["municipio"] = "";
	$placeHoldersBD_Mined[""]["municipio"] = "";
	$fieldLabelsBD_Mined[""]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsBD_Mined[""]["nombre_c_e"] = "";
	$placeHoldersBD_Mined[""]["nombre_c_e"] = "";
	$fieldLabelsBD_Mined[""]["x"] = "X";
	$fieldToolTipsBD_Mined[""]["x"] = "";
	$placeHoldersBD_Mined[""]["x"] = "";
	$fieldLabelsBD_Mined[""]["y"] = "Y";
	$fieldToolTipsBD_Mined[""]["y"] = "";
	$placeHoldersBD_Mined[""]["y"] = "";
	$fieldLabelsBD_Mined[""]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsBD_Mined[""]["sector_ppd"] = "";
	$placeHoldersBD_Mined[""]["sector_ppd"] = "";
	$fieldLabelsBD_Mined[""]["matricula_inicial"] = "Matricula Inicial";
	$fieldToolTipsBD_Mined[""]["matricula_inicial"] = "";
	$placeHoldersBD_Mined[""]["matricula_inicial"] = "";
	$fieldLabelsBD_Mined[""]["matricula_final"] = "Matricula Final";
	$fieldToolTipsBD_Mined[""]["matricula_final"] = "";
	$placeHoldersBD_Mined[""]["matricula_final"] = "";
	$fieldLabelsBD_Mined[""]["maras"] = "Maras";
	$fieldToolTipsBD_Mined[""]["maras"] = "";
	$placeHoldersBD_Mined[""]["maras"] = "";
	$fieldLabelsBD_Mined[""]["robos"] = "Robos";
	$fieldToolTipsBD_Mined[""]["robos"] = "";
	$placeHoldersBD_Mined[""]["robos"] = "";
	$fieldLabelsBD_Mined[""]["hurtos"] = "Hurtos";
	$fieldToolTipsBD_Mined[""]["hurtos"] = "";
	$placeHoldersBD_Mined[""]["hurtos"] = "";
	$fieldLabelsBD_Mined[""]["drogas"] = "Drogas";
	$fieldToolTipsBD_Mined[""]["drogas"] = "";
	$placeHoldersBD_Mined[""]["drogas"] = "";
	$fieldLabelsBD_Mined[""]["violaciones"] = "Violaciones";
	$fieldToolTipsBD_Mined[""]["violaciones"] = "";
	$placeHoldersBD_Mined[""]["violaciones"] = "";
	$fieldLabelsBD_Mined[""]["pab"] = "Pab";
	$fieldToolTipsBD_Mined[""]["pab"] = "";
	$placeHoldersBD_Mined[""]["pab"] = "";
	$fieldLabelsBD_Mined[""]["paf"] = "Paf";
	$fieldToolTipsBD_Mined[""]["paf"] = "";
	$placeHoldersBD_Mined[""]["paf"] = "";
	$fieldLabelsBD_Mined[""]["escasos_recursos"] = "Escasos Recursos";
	$fieldToolTipsBD_Mined[""]["escasos_recursos"] = "";
	$placeHoldersBD_Mined[""]["escasos_recursos"] = "";
	$fieldLabelsBD_Mined[""]["incorpo_actividades_prod"] = "Incorpo Actividades Prod";
	$fieldToolTipsBD_Mined[""]["incorpo_actividades_prod"] = "";
	$placeHoldersBD_Mined[""]["incorpo_actividades_prod"] = "";
	$fieldLabelsBD_Mined[""]["lejania_ce"] = "Lejania Ce";
	$fieldToolTipsBD_Mined[""]["lejania_ce"] = "";
	$placeHoldersBD_Mined[""]["lejania_ce"] = "";
	$fieldLabelsBD_Mined[""]["violencia_pandilleril"] = "Violencia Pandilleril";
	$fieldToolTipsBD_Mined[""]["violencia_pandilleril"] = "";
	$placeHoldersBD_Mined[""]["violencia_pandilleril"] = "";
	$fieldLabelsBD_Mined[""]["embarazo"] = "Embarazo";
	$fieldToolTipsBD_Mined[""]["embarazo"] = "";
	$placeHoldersBD_Mined[""]["embarazo"] = "";
	$fieldLabelsBD_Mined[""]["acoso"] = "Acoso";
	$fieldToolTipsBD_Mined[""]["acoso"] = "";
	$placeHoldersBD_Mined[""]["acoso"] = "";
	$fieldLabelsBD_Mined[""]["violacion_sexual"] = "Violacion Sexual";
	$fieldToolTipsBD_Mined[""]["violacion_sexual"] = "";
	$placeHoldersBD_Mined[""]["violacion_sexual"] = "";
	$fieldLabelsBD_Mined[""]["cambio_domicilio"] = "Cambio Domicilio";
	$fieldToolTipsBD_Mined[""]["cambio_domicilio"] = "";
	$placeHoldersBD_Mined[""]["cambio_domicilio"] = "";
	$fieldLabelsBD_Mined[""]["migracion"] = "Migracion";
	$fieldToolTipsBD_Mined[""]["migracion"] = "";
	$placeHoldersBD_Mined[""]["migracion"] = "";
	$fieldLabelsBD_Mined[""]["bajo_rendimiento"] = "Bajo Rendimiento";
	$fieldToolTipsBD_Mined[""]["bajo_rendimiento"] = "";
	$placeHoldersBD_Mined[""]["bajo_rendimiento"] = "";
	$fieldLabelsBD_Mined[""]["enfermedad"] = "Enfermedad";
	$fieldToolTipsBD_Mined[""]["enfermedad"] = "";
	$placeHoldersBD_Mined[""]["enfermedad"] = "";
	$fieldLabelsBD_Mined[""]["prostitucion"] = "Prostitucion";
	$fieldToolTipsBD_Mined[""]["prostitucion"] = "";
	$placeHoldersBD_Mined[""]["prostitucion"] = "";
	$fieldLabelsBD_Mined[""]["dep_mun"] = "Dep Mun";
	$fieldToolTipsBD_Mined[""]["dep_mun"] = "";
	$placeHoldersBD_Mined[""]["dep_mun"] = "";
	$fieldLabelsBD_Mined[""]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipsBD_Mined[""]["max_matric2016"] = "";
	$placeHoldersBD_Mined[""]["max_matric2016"] = "";
	$fieldLabelsBD_Mined[""]["mrf2016"] = "Mrf2016";
	$fieldToolTipsBD_Mined[""]["mrf2016"] = "";
	$placeHoldersBD_Mined[""]["mrf2016"] = "";
	$fieldLabelsBD_Mined[""]["pab_af"] = "Pab Af";
	$fieldToolTipsBD_Mined[""]["pab_af"] = "";
	$placeHoldersBD_Mined[""]["pab_af"] = "";
	$fieldLabelsBD_Mined[""]["r_h"] = "R H";
	$fieldToolTipsBD_Mined[""]["r_h"] = "";
	$placeHoldersBD_Mined[""]["r_h"] = "";
	$fieldLabelsBD_Mined[""]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipsBD_Mined[""]["ipce_0_1"] = "";
	$placeHoldersBD_Mined[""]["ipce_0_1"] = "";
	$fieldLabelsBD_Mined[""]["a_o"] = "AÑo";
	$fieldToolTipsBD_Mined[""]["a_o"] = "";
	$placeHoldersBD_Mined[""]["a_o"] = "";
	if (count($fieldToolTipsBD_Mined[""]))
		$tdataBD_Mined[".isUseToolTips"] = true;
}


	$tdataBD_Mined[".NCSearch"] = true;



$tdataBD_Mined[".shortTableName"] = "BD_Mined";
$tdataBD_Mined[".nSecOptions"] = 0;
$tdataBD_Mined[".recsPerRowPrint"] = 1;
$tdataBD_Mined[".mainTableOwnerID"] = "";
$tdataBD_Mined[".moveNext"] = 1;
$tdataBD_Mined[".entityType"] = 1;

$tdataBD_Mined[".strOriginalTableName"] = "mined";

	



$tdataBD_Mined[".showAddInPopup"] = false;

$tdataBD_Mined[".showEditInPopup"] = false;

$tdataBD_Mined[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBD_Mined[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBD_Mined[".fieldsForRegister"] = array();

	$tdataBD_Mined[".listAjax"] = true;

	$tdataBD_Mined[".audit"] = false;

	$tdataBD_Mined[".locking"] = false;



$tdataBD_Mined[".list"] = true;



$tdataBD_Mined[".reorderRecordsByHeader"] = true;
$tdataBD_Mined[".createSortByDropdown"] = true;
$tdataBD_Mined[".strSortControlSettingsJSON"] = "";



$tdataBD_Mined[".inlineAdd"] = true;

$tdataBD_Mined[".import"] = true;

$tdataBD_Mined[".exportTo"] = true;

$tdataBD_Mined[".printFriendly"] = true;


$tdataBD_Mined[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataBD_Mined[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataBD_Mined[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataBD_Mined[".searchSaving"] = false;
//

$tdataBD_Mined[".showSearchPanel"] = true;
		$tdataBD_Mined[".flexibleSearch"] = true;

$tdataBD_Mined[".isUseAjaxSuggest"] = true;

$tdataBD_Mined[".rowHighlite"] = true;





$tdataBD_Mined[".ajaxCodeSnippetAdded"] = false;

$tdataBD_Mined[".buttonsAdded"] = false;

$tdataBD_Mined[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBD_Mined[".isUseTimeForSearch"] = false;



$tdataBD_Mined[".badgeColor"] = "BC8F8F";


$tdataBD_Mined[".allSearchFields"] = array();
$tdataBD_Mined[".filterFields"] = array();
$tdataBD_Mined[".requiredSearchFields"] = array();

$tdataBD_Mined[".allSearchFields"][] = "idderespuesta";
	$tdataBD_Mined[".allSearchFields"][] = "codigo";
	$tdataBD_Mined[".allSearchFields"][] = "depto";
	$tdataBD_Mined[".allSearchFields"][] = "departamento";
	$tdataBD_Mined[".allSearchFields"][] = "mun";
	$tdataBD_Mined[".allSearchFields"][] = "municipio";
	$tdataBD_Mined[".allSearchFields"][] = "nombre_c_e";
	$tdataBD_Mined[".allSearchFields"][] = "x";
	$tdataBD_Mined[".allSearchFields"][] = "y";
	$tdataBD_Mined[".allSearchFields"][] = "sector_ppd";
	$tdataBD_Mined[".allSearchFields"][] = "matricula_inicial";
	$tdataBD_Mined[".allSearchFields"][] = "matricula_final";
	$tdataBD_Mined[".allSearchFields"][] = "maras";
	$tdataBD_Mined[".allSearchFields"][] = "robos";
	$tdataBD_Mined[".allSearchFields"][] = "hurtos";
	$tdataBD_Mined[".allSearchFields"][] = "drogas";
	$tdataBD_Mined[".allSearchFields"][] = "violaciones";
	$tdataBD_Mined[".allSearchFields"][] = "pab";
	$tdataBD_Mined[".allSearchFields"][] = "paf";
	$tdataBD_Mined[".allSearchFields"][] = "escasos_recursos";
	$tdataBD_Mined[".allSearchFields"][] = "incorpo_actividades_prod";
	$tdataBD_Mined[".allSearchFields"][] = "lejania_ce";
	$tdataBD_Mined[".allSearchFields"][] = "violencia_pandilleril";
	$tdataBD_Mined[".allSearchFields"][] = "embarazo";
	$tdataBD_Mined[".allSearchFields"][] = "acoso";
	$tdataBD_Mined[".allSearchFields"][] = "violacion_sexual";
	$tdataBD_Mined[".allSearchFields"][] = "cambio_domicilio";
	$tdataBD_Mined[".allSearchFields"][] = "migracion";
	$tdataBD_Mined[".allSearchFields"][] = "bajo_rendimiento";
	$tdataBD_Mined[".allSearchFields"][] = "enfermedad";
	$tdataBD_Mined[".allSearchFields"][] = "prostitucion";
	$tdataBD_Mined[".allSearchFields"][] = "dep_mun";
	$tdataBD_Mined[".allSearchFields"][] = "max_matric2016";
	$tdataBD_Mined[".allSearchFields"][] = "mrf2016";
	$tdataBD_Mined[".allSearchFields"][] = "pab_af";
	$tdataBD_Mined[".allSearchFields"][] = "r_h";
	$tdataBD_Mined[".allSearchFields"][] = "ipce_naive";
	$tdataBD_Mined[".allSearchFields"][] = "ipce_0_1";
	$tdataBD_Mined[".allSearchFields"][] = "aÑo";
	

$tdataBD_Mined[".googleLikeFields"] = array();
$tdataBD_Mined[".googleLikeFields"][] = "idderespuesta";
$tdataBD_Mined[".googleLikeFields"][] = "codigo";
$tdataBD_Mined[".googleLikeFields"][] = "depto";
$tdataBD_Mined[".googleLikeFields"][] = "departamento";
$tdataBD_Mined[".googleLikeFields"][] = "mun";
$tdataBD_Mined[".googleLikeFields"][] = "municipio";
$tdataBD_Mined[".googleLikeFields"][] = "nombre_c_e";
$tdataBD_Mined[".googleLikeFields"][] = "x";
$tdataBD_Mined[".googleLikeFields"][] = "y";
$tdataBD_Mined[".googleLikeFields"][] = "sector_ppd";
$tdataBD_Mined[".googleLikeFields"][] = "matricula_inicial";
$tdataBD_Mined[".googleLikeFields"][] = "matricula_final";
$tdataBD_Mined[".googleLikeFields"][] = "maras";
$tdataBD_Mined[".googleLikeFields"][] = "robos";
$tdataBD_Mined[".googleLikeFields"][] = "hurtos";
$tdataBD_Mined[".googleLikeFields"][] = "drogas";
$tdataBD_Mined[".googleLikeFields"][] = "violaciones";
$tdataBD_Mined[".googleLikeFields"][] = "pab";
$tdataBD_Mined[".googleLikeFields"][] = "paf";
$tdataBD_Mined[".googleLikeFields"][] = "escasos_recursos";
$tdataBD_Mined[".googleLikeFields"][] = "incorpo_actividades_prod";
$tdataBD_Mined[".googleLikeFields"][] = "lejania_ce";
$tdataBD_Mined[".googleLikeFields"][] = "violencia_pandilleril";
$tdataBD_Mined[".googleLikeFields"][] = "embarazo";
$tdataBD_Mined[".googleLikeFields"][] = "acoso";
$tdataBD_Mined[".googleLikeFields"][] = "violacion_sexual";
$tdataBD_Mined[".googleLikeFields"][] = "cambio_domicilio";
$tdataBD_Mined[".googleLikeFields"][] = "migracion";
$tdataBD_Mined[".googleLikeFields"][] = "bajo_rendimiento";
$tdataBD_Mined[".googleLikeFields"][] = "enfermedad";
$tdataBD_Mined[".googleLikeFields"][] = "prostitucion";
$tdataBD_Mined[".googleLikeFields"][] = "dep_mun";
$tdataBD_Mined[".googleLikeFields"][] = "max_matric2016";
$tdataBD_Mined[".googleLikeFields"][] = "mrf2016";
$tdataBD_Mined[".googleLikeFields"][] = "pab_af";
$tdataBD_Mined[".googleLikeFields"][] = "r_h";
$tdataBD_Mined[".googleLikeFields"][] = "ipce_naive";
$tdataBD_Mined[".googleLikeFields"][] = "ipce_0_1";
$tdataBD_Mined[".googleLikeFields"][] = "aÑo";


$tdataBD_Mined[".advSearchFields"] = array();
$tdataBD_Mined[".advSearchFields"][] = "idderespuesta";
$tdataBD_Mined[".advSearchFields"][] = "codigo";
$tdataBD_Mined[".advSearchFields"][] = "depto";
$tdataBD_Mined[".advSearchFields"][] = "departamento";
$tdataBD_Mined[".advSearchFields"][] = "mun";
$tdataBD_Mined[".advSearchFields"][] = "municipio";
$tdataBD_Mined[".advSearchFields"][] = "nombre_c_e";
$tdataBD_Mined[".advSearchFields"][] = "x";
$tdataBD_Mined[".advSearchFields"][] = "y";
$tdataBD_Mined[".advSearchFields"][] = "sector_ppd";
$tdataBD_Mined[".advSearchFields"][] = "matricula_inicial";
$tdataBD_Mined[".advSearchFields"][] = "matricula_final";
$tdataBD_Mined[".advSearchFields"][] = "maras";
$tdataBD_Mined[".advSearchFields"][] = "robos";
$tdataBD_Mined[".advSearchFields"][] = "hurtos";
$tdataBD_Mined[".advSearchFields"][] = "drogas";
$tdataBD_Mined[".advSearchFields"][] = "violaciones";
$tdataBD_Mined[".advSearchFields"][] = "pab";
$tdataBD_Mined[".advSearchFields"][] = "paf";
$tdataBD_Mined[".advSearchFields"][] = "escasos_recursos";
$tdataBD_Mined[".advSearchFields"][] = "incorpo_actividades_prod";
$tdataBD_Mined[".advSearchFields"][] = "lejania_ce";
$tdataBD_Mined[".advSearchFields"][] = "violencia_pandilleril";
$tdataBD_Mined[".advSearchFields"][] = "embarazo";
$tdataBD_Mined[".advSearchFields"][] = "acoso";
$tdataBD_Mined[".advSearchFields"][] = "violacion_sexual";
$tdataBD_Mined[".advSearchFields"][] = "cambio_domicilio";
$tdataBD_Mined[".advSearchFields"][] = "migracion";
$tdataBD_Mined[".advSearchFields"][] = "bajo_rendimiento";
$tdataBD_Mined[".advSearchFields"][] = "enfermedad";
$tdataBD_Mined[".advSearchFields"][] = "prostitucion";
$tdataBD_Mined[".advSearchFields"][] = "dep_mun";
$tdataBD_Mined[".advSearchFields"][] = "max_matric2016";
$tdataBD_Mined[".advSearchFields"][] = "mrf2016";
$tdataBD_Mined[".advSearchFields"][] = "pab_af";
$tdataBD_Mined[".advSearchFields"][] = "r_h";
$tdataBD_Mined[".advSearchFields"][] = "ipce_naive";
$tdataBD_Mined[".advSearchFields"][] = "ipce_0_1";
$tdataBD_Mined[".advSearchFields"][] = "aÑo";

$tdataBD_Mined[".tableType"] = "list";

$tdataBD_Mined[".printerPageOrientation"] = 0;
$tdataBD_Mined[".nPrinterPageScale"] = 100;

$tdataBD_Mined[".nPrinterSplitRecords"] = 40;

$tdataBD_Mined[".nPrinterPDFSplitRecords"] = 40;



$tdataBD_Mined[".geocodingEnabled"] = false;





$tdataBD_Mined[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataBD_Mined[".pageSize"] = 20;

$tdataBD_Mined[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBD_Mined[".strOrderBy"] = $tstrOrderBy;

$tdataBD_Mined[".orderindexes"] = array();

$tdataBD_Mined[".sqlHead"] = "SELECT idderespuesta,  	codigo,  	depto,  	departamento,  	mun,  	municipio,  	nombre_c_e,  	x,  	y,  	sector_ppd,  	matricula_inicial,  	matricula_final,  	maras,  	robos,  	hurtos,  	drogas,  	violaciones,  	pab,  	paf,  	escasos_recursos,  	incorpo_actividades_prod,  	lejania_ce,  	violencia_pandilleril,  	embarazo,  	acoso,  	violacion_sexual,  	cambio_domicilio,  	migracion,  	bajo_rendimiento,  	enfermedad,  	prostitucion,  	dep_mun,  	max_matric2016,  	mrf2016,  	pab_af,  	r_h,  	ipce_naive,  	ipce_0_1,  	`aÑo`";
$tdataBD_Mined[".sqlFrom"] = "FROM mined";
$tdataBD_Mined[".sqlWhereExpr"] = "";
$tdataBD_Mined[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBD_Mined[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBD_Mined[".arrGroupsPerPage"] = $arrGPP;

$tdataBD_Mined[".highlightSearchResults"] = true;

$tableKeysBD_Mined = array();
$tdataBD_Mined[".Keys"] = $tableKeysBD_Mined;

$tdataBD_Mined[".listFields"] = array();
$tdataBD_Mined[".listFields"][] = "idderespuesta";
$tdataBD_Mined[".listFields"][] = "codigo";
$tdataBD_Mined[".listFields"][] = "depto";
$tdataBD_Mined[".listFields"][] = "departamento";
$tdataBD_Mined[".listFields"][] = "mun";
$tdataBD_Mined[".listFields"][] = "municipio";
$tdataBD_Mined[".listFields"][] = "nombre_c_e";
$tdataBD_Mined[".listFields"][] = "x";
$tdataBD_Mined[".listFields"][] = "y";
$tdataBD_Mined[".listFields"][] = "sector_ppd";
$tdataBD_Mined[".listFields"][] = "matricula_inicial";
$tdataBD_Mined[".listFields"][] = "matricula_final";
$tdataBD_Mined[".listFields"][] = "maras";
$tdataBD_Mined[".listFields"][] = "robos";
$tdataBD_Mined[".listFields"][] = "hurtos";
$tdataBD_Mined[".listFields"][] = "drogas";
$tdataBD_Mined[".listFields"][] = "violaciones";
$tdataBD_Mined[".listFields"][] = "pab";
$tdataBD_Mined[".listFields"][] = "paf";
$tdataBD_Mined[".listFields"][] = "escasos_recursos";
$tdataBD_Mined[".listFields"][] = "incorpo_actividades_prod";
$tdataBD_Mined[".listFields"][] = "lejania_ce";
$tdataBD_Mined[".listFields"][] = "violencia_pandilleril";
$tdataBD_Mined[".listFields"][] = "embarazo";
$tdataBD_Mined[".listFields"][] = "acoso";
$tdataBD_Mined[".listFields"][] = "violacion_sexual";
$tdataBD_Mined[".listFields"][] = "cambio_domicilio";
$tdataBD_Mined[".listFields"][] = "migracion";
$tdataBD_Mined[".listFields"][] = "bajo_rendimiento";
$tdataBD_Mined[".listFields"][] = "enfermedad";
$tdataBD_Mined[".listFields"][] = "prostitucion";
$tdataBD_Mined[".listFields"][] = "dep_mun";
$tdataBD_Mined[".listFields"][] = "max_matric2016";
$tdataBD_Mined[".listFields"][] = "mrf2016";
$tdataBD_Mined[".listFields"][] = "pab_af";
$tdataBD_Mined[".listFields"][] = "r_h";
$tdataBD_Mined[".listFields"][] = "ipce_naive";
$tdataBD_Mined[".listFields"][] = "ipce_0_1";
$tdataBD_Mined[".listFields"][] = "aÑo";

$tdataBD_Mined[".hideMobileList"] = array();


$tdataBD_Mined[".viewFields"] = array();
$tdataBD_Mined[".viewFields"][] = "idderespuesta";
$tdataBD_Mined[".viewFields"][] = "codigo";
$tdataBD_Mined[".viewFields"][] = "depto";
$tdataBD_Mined[".viewFields"][] = "departamento";
$tdataBD_Mined[".viewFields"][] = "mun";
$tdataBD_Mined[".viewFields"][] = "municipio";
$tdataBD_Mined[".viewFields"][] = "nombre_c_e";
$tdataBD_Mined[".viewFields"][] = "x";
$tdataBD_Mined[".viewFields"][] = "y";
$tdataBD_Mined[".viewFields"][] = "sector_ppd";
$tdataBD_Mined[".viewFields"][] = "matricula_inicial";
$tdataBD_Mined[".viewFields"][] = "matricula_final";
$tdataBD_Mined[".viewFields"][] = "maras";
$tdataBD_Mined[".viewFields"][] = "robos";
$tdataBD_Mined[".viewFields"][] = "hurtos";
$tdataBD_Mined[".viewFields"][] = "drogas";
$tdataBD_Mined[".viewFields"][] = "violaciones";
$tdataBD_Mined[".viewFields"][] = "pab";
$tdataBD_Mined[".viewFields"][] = "paf";
$tdataBD_Mined[".viewFields"][] = "escasos_recursos";
$tdataBD_Mined[".viewFields"][] = "incorpo_actividades_prod";
$tdataBD_Mined[".viewFields"][] = "lejania_ce";
$tdataBD_Mined[".viewFields"][] = "violencia_pandilleril";
$tdataBD_Mined[".viewFields"][] = "embarazo";
$tdataBD_Mined[".viewFields"][] = "acoso";
$tdataBD_Mined[".viewFields"][] = "violacion_sexual";
$tdataBD_Mined[".viewFields"][] = "cambio_domicilio";
$tdataBD_Mined[".viewFields"][] = "migracion";
$tdataBD_Mined[".viewFields"][] = "bajo_rendimiento";
$tdataBD_Mined[".viewFields"][] = "enfermedad";
$tdataBD_Mined[".viewFields"][] = "prostitucion";
$tdataBD_Mined[".viewFields"][] = "dep_mun";
$tdataBD_Mined[".viewFields"][] = "max_matric2016";
$tdataBD_Mined[".viewFields"][] = "mrf2016";
$tdataBD_Mined[".viewFields"][] = "pab_af";
$tdataBD_Mined[".viewFields"][] = "r_h";
$tdataBD_Mined[".viewFields"][] = "ipce_naive";
$tdataBD_Mined[".viewFields"][] = "ipce_0_1";
$tdataBD_Mined[".viewFields"][] = "aÑo";

$tdataBD_Mined[".addFields"] = array();
$tdataBD_Mined[".addFields"][] = "idderespuesta";
$tdataBD_Mined[".addFields"][] = "codigo";
$tdataBD_Mined[".addFields"][] = "depto";
$tdataBD_Mined[".addFields"][] = "departamento";
$tdataBD_Mined[".addFields"][] = "mun";
$tdataBD_Mined[".addFields"][] = "municipio";
$tdataBD_Mined[".addFields"][] = "nombre_c_e";
$tdataBD_Mined[".addFields"][] = "x";
$tdataBD_Mined[".addFields"][] = "y";
$tdataBD_Mined[".addFields"][] = "sector_ppd";
$tdataBD_Mined[".addFields"][] = "matricula_inicial";
$tdataBD_Mined[".addFields"][] = "matricula_final";
$tdataBD_Mined[".addFields"][] = "maras";
$tdataBD_Mined[".addFields"][] = "robos";
$tdataBD_Mined[".addFields"][] = "hurtos";
$tdataBD_Mined[".addFields"][] = "drogas";
$tdataBD_Mined[".addFields"][] = "violaciones";
$tdataBD_Mined[".addFields"][] = "pab";
$tdataBD_Mined[".addFields"][] = "paf";
$tdataBD_Mined[".addFields"][] = "escasos_recursos";
$tdataBD_Mined[".addFields"][] = "incorpo_actividades_prod";
$tdataBD_Mined[".addFields"][] = "lejania_ce";
$tdataBD_Mined[".addFields"][] = "violencia_pandilleril";
$tdataBD_Mined[".addFields"][] = "embarazo";
$tdataBD_Mined[".addFields"][] = "acoso";
$tdataBD_Mined[".addFields"][] = "violacion_sexual";
$tdataBD_Mined[".addFields"][] = "cambio_domicilio";
$tdataBD_Mined[".addFields"][] = "migracion";
$tdataBD_Mined[".addFields"][] = "bajo_rendimiento";
$tdataBD_Mined[".addFields"][] = "enfermedad";
$tdataBD_Mined[".addFields"][] = "prostitucion";
$tdataBD_Mined[".addFields"][] = "dep_mun";
$tdataBD_Mined[".addFields"][] = "max_matric2016";
$tdataBD_Mined[".addFields"][] = "mrf2016";
$tdataBD_Mined[".addFields"][] = "pab_af";
$tdataBD_Mined[".addFields"][] = "r_h";
$tdataBD_Mined[".addFields"][] = "ipce_naive";
$tdataBD_Mined[".addFields"][] = "ipce_0_1";
$tdataBD_Mined[".addFields"][] = "aÑo";

$tdataBD_Mined[".masterListFields"] = array();
$tdataBD_Mined[".masterListFields"][] = "idderespuesta";
$tdataBD_Mined[".masterListFields"][] = "codigo";
$tdataBD_Mined[".masterListFields"][] = "depto";
$tdataBD_Mined[".masterListFields"][] = "departamento";
$tdataBD_Mined[".masterListFields"][] = "mun";
$tdataBD_Mined[".masterListFields"][] = "municipio";
$tdataBD_Mined[".masterListFields"][] = "nombre_c_e";
$tdataBD_Mined[".masterListFields"][] = "x";
$tdataBD_Mined[".masterListFields"][] = "y";
$tdataBD_Mined[".masterListFields"][] = "sector_ppd";
$tdataBD_Mined[".masterListFields"][] = "matricula_inicial";
$tdataBD_Mined[".masterListFields"][] = "matricula_final";
$tdataBD_Mined[".masterListFields"][] = "maras";
$tdataBD_Mined[".masterListFields"][] = "robos";
$tdataBD_Mined[".masterListFields"][] = "hurtos";
$tdataBD_Mined[".masterListFields"][] = "drogas";
$tdataBD_Mined[".masterListFields"][] = "violaciones";
$tdataBD_Mined[".masterListFields"][] = "pab";
$tdataBD_Mined[".masterListFields"][] = "paf";
$tdataBD_Mined[".masterListFields"][] = "escasos_recursos";
$tdataBD_Mined[".masterListFields"][] = "incorpo_actividades_prod";
$tdataBD_Mined[".masterListFields"][] = "lejania_ce";
$tdataBD_Mined[".masterListFields"][] = "violencia_pandilleril";
$tdataBD_Mined[".masterListFields"][] = "embarazo";
$tdataBD_Mined[".masterListFields"][] = "acoso";
$tdataBD_Mined[".masterListFields"][] = "violacion_sexual";
$tdataBD_Mined[".masterListFields"][] = "cambio_domicilio";
$tdataBD_Mined[".masterListFields"][] = "migracion";
$tdataBD_Mined[".masterListFields"][] = "bajo_rendimiento";
$tdataBD_Mined[".masterListFields"][] = "enfermedad";
$tdataBD_Mined[".masterListFields"][] = "prostitucion";
$tdataBD_Mined[".masterListFields"][] = "dep_mun";
$tdataBD_Mined[".masterListFields"][] = "max_matric2016";
$tdataBD_Mined[".masterListFields"][] = "mrf2016";
$tdataBD_Mined[".masterListFields"][] = "pab_af";
$tdataBD_Mined[".masterListFields"][] = "r_h";
$tdataBD_Mined[".masterListFields"][] = "ipce_naive";
$tdataBD_Mined[".masterListFields"][] = "ipce_0_1";
$tdataBD_Mined[".masterListFields"][] = "aÑo";

$tdataBD_Mined[".inlineAddFields"] = array();
$tdataBD_Mined[".inlineAddFields"][] = "idderespuesta";
$tdataBD_Mined[".inlineAddFields"][] = "codigo";
$tdataBD_Mined[".inlineAddFields"][] = "depto";
$tdataBD_Mined[".inlineAddFields"][] = "departamento";
$tdataBD_Mined[".inlineAddFields"][] = "mun";
$tdataBD_Mined[".inlineAddFields"][] = "municipio";
$tdataBD_Mined[".inlineAddFields"][] = "nombre_c_e";
$tdataBD_Mined[".inlineAddFields"][] = "x";
$tdataBD_Mined[".inlineAddFields"][] = "y";
$tdataBD_Mined[".inlineAddFields"][] = "sector_ppd";
$tdataBD_Mined[".inlineAddFields"][] = "matricula_inicial";
$tdataBD_Mined[".inlineAddFields"][] = "matricula_final";
$tdataBD_Mined[".inlineAddFields"][] = "maras";
$tdataBD_Mined[".inlineAddFields"][] = "robos";
$tdataBD_Mined[".inlineAddFields"][] = "hurtos";
$tdataBD_Mined[".inlineAddFields"][] = "drogas";
$tdataBD_Mined[".inlineAddFields"][] = "violaciones";
$tdataBD_Mined[".inlineAddFields"][] = "pab";
$tdataBD_Mined[".inlineAddFields"][] = "paf";
$tdataBD_Mined[".inlineAddFields"][] = "escasos_recursos";
$tdataBD_Mined[".inlineAddFields"][] = "incorpo_actividades_prod";
$tdataBD_Mined[".inlineAddFields"][] = "lejania_ce";
$tdataBD_Mined[".inlineAddFields"][] = "violencia_pandilleril";
$tdataBD_Mined[".inlineAddFields"][] = "embarazo";
$tdataBD_Mined[".inlineAddFields"][] = "acoso";
$tdataBD_Mined[".inlineAddFields"][] = "violacion_sexual";
$tdataBD_Mined[".inlineAddFields"][] = "cambio_domicilio";
$tdataBD_Mined[".inlineAddFields"][] = "migracion";
$tdataBD_Mined[".inlineAddFields"][] = "bajo_rendimiento";
$tdataBD_Mined[".inlineAddFields"][] = "enfermedad";
$tdataBD_Mined[".inlineAddFields"][] = "prostitucion";
$tdataBD_Mined[".inlineAddFields"][] = "dep_mun";
$tdataBD_Mined[".inlineAddFields"][] = "max_matric2016";
$tdataBD_Mined[".inlineAddFields"][] = "mrf2016";
$tdataBD_Mined[".inlineAddFields"][] = "pab_af";
$tdataBD_Mined[".inlineAddFields"][] = "r_h";
$tdataBD_Mined[".inlineAddFields"][] = "ipce_naive";
$tdataBD_Mined[".inlineAddFields"][] = "ipce_0_1";
$tdataBD_Mined[".inlineAddFields"][] = "aÑo";

$tdataBD_Mined[".editFields"] = array();
$tdataBD_Mined[".editFields"][] = "idderespuesta";
$tdataBD_Mined[".editFields"][] = "codigo";
$tdataBD_Mined[".editFields"][] = "depto";
$tdataBD_Mined[".editFields"][] = "departamento";
$tdataBD_Mined[".editFields"][] = "mun";
$tdataBD_Mined[".editFields"][] = "municipio";
$tdataBD_Mined[".editFields"][] = "nombre_c_e";
$tdataBD_Mined[".editFields"][] = "x";
$tdataBD_Mined[".editFields"][] = "y";
$tdataBD_Mined[".editFields"][] = "sector_ppd";
$tdataBD_Mined[".editFields"][] = "matricula_inicial";
$tdataBD_Mined[".editFields"][] = "matricula_final";
$tdataBD_Mined[".editFields"][] = "maras";
$tdataBD_Mined[".editFields"][] = "robos";
$tdataBD_Mined[".editFields"][] = "hurtos";
$tdataBD_Mined[".editFields"][] = "drogas";
$tdataBD_Mined[".editFields"][] = "violaciones";
$tdataBD_Mined[".editFields"][] = "pab";
$tdataBD_Mined[".editFields"][] = "paf";
$tdataBD_Mined[".editFields"][] = "escasos_recursos";
$tdataBD_Mined[".editFields"][] = "incorpo_actividades_prod";
$tdataBD_Mined[".editFields"][] = "lejania_ce";
$tdataBD_Mined[".editFields"][] = "violencia_pandilleril";
$tdataBD_Mined[".editFields"][] = "embarazo";
$tdataBD_Mined[".editFields"][] = "acoso";
$tdataBD_Mined[".editFields"][] = "violacion_sexual";
$tdataBD_Mined[".editFields"][] = "cambio_domicilio";
$tdataBD_Mined[".editFields"][] = "migracion";
$tdataBD_Mined[".editFields"][] = "bajo_rendimiento";
$tdataBD_Mined[".editFields"][] = "enfermedad";
$tdataBD_Mined[".editFields"][] = "prostitucion";
$tdataBD_Mined[".editFields"][] = "dep_mun";
$tdataBD_Mined[".editFields"][] = "max_matric2016";
$tdataBD_Mined[".editFields"][] = "mrf2016";
$tdataBD_Mined[".editFields"][] = "pab_af";
$tdataBD_Mined[".editFields"][] = "r_h";
$tdataBD_Mined[".editFields"][] = "ipce_naive";
$tdataBD_Mined[".editFields"][] = "ipce_0_1";
$tdataBD_Mined[".editFields"][] = "aÑo";

$tdataBD_Mined[".inlineEditFields"] = array();
$tdataBD_Mined[".inlineEditFields"][] = "idderespuesta";
$tdataBD_Mined[".inlineEditFields"][] = "codigo";
$tdataBD_Mined[".inlineEditFields"][] = "depto";
$tdataBD_Mined[".inlineEditFields"][] = "departamento";
$tdataBD_Mined[".inlineEditFields"][] = "mun";
$tdataBD_Mined[".inlineEditFields"][] = "municipio";
$tdataBD_Mined[".inlineEditFields"][] = "nombre_c_e";
$tdataBD_Mined[".inlineEditFields"][] = "x";
$tdataBD_Mined[".inlineEditFields"][] = "y";
$tdataBD_Mined[".inlineEditFields"][] = "sector_ppd";
$tdataBD_Mined[".inlineEditFields"][] = "matricula_inicial";
$tdataBD_Mined[".inlineEditFields"][] = "matricula_final";
$tdataBD_Mined[".inlineEditFields"][] = "maras";
$tdataBD_Mined[".inlineEditFields"][] = "robos";
$tdataBD_Mined[".inlineEditFields"][] = "hurtos";
$tdataBD_Mined[".inlineEditFields"][] = "drogas";
$tdataBD_Mined[".inlineEditFields"][] = "violaciones";
$tdataBD_Mined[".inlineEditFields"][] = "pab";
$tdataBD_Mined[".inlineEditFields"][] = "paf";
$tdataBD_Mined[".inlineEditFields"][] = "escasos_recursos";
$tdataBD_Mined[".inlineEditFields"][] = "incorpo_actividades_prod";
$tdataBD_Mined[".inlineEditFields"][] = "lejania_ce";
$tdataBD_Mined[".inlineEditFields"][] = "violencia_pandilleril";
$tdataBD_Mined[".inlineEditFields"][] = "embarazo";
$tdataBD_Mined[".inlineEditFields"][] = "acoso";
$tdataBD_Mined[".inlineEditFields"][] = "violacion_sexual";
$tdataBD_Mined[".inlineEditFields"][] = "cambio_domicilio";
$tdataBD_Mined[".inlineEditFields"][] = "migracion";
$tdataBD_Mined[".inlineEditFields"][] = "bajo_rendimiento";
$tdataBD_Mined[".inlineEditFields"][] = "enfermedad";
$tdataBD_Mined[".inlineEditFields"][] = "prostitucion";
$tdataBD_Mined[".inlineEditFields"][] = "dep_mun";
$tdataBD_Mined[".inlineEditFields"][] = "max_matric2016";
$tdataBD_Mined[".inlineEditFields"][] = "mrf2016";
$tdataBD_Mined[".inlineEditFields"][] = "pab_af";
$tdataBD_Mined[".inlineEditFields"][] = "r_h";
$tdataBD_Mined[".inlineEditFields"][] = "ipce_naive";
$tdataBD_Mined[".inlineEditFields"][] = "ipce_0_1";
$tdataBD_Mined[".inlineEditFields"][] = "aÑo";

$tdataBD_Mined[".updateSelectedFields"] = array();
$tdataBD_Mined[".updateSelectedFields"][] = "idderespuesta";
$tdataBD_Mined[".updateSelectedFields"][] = "codigo";
$tdataBD_Mined[".updateSelectedFields"][] = "depto";
$tdataBD_Mined[".updateSelectedFields"][] = "departamento";
$tdataBD_Mined[".updateSelectedFields"][] = "mun";
$tdataBD_Mined[".updateSelectedFields"][] = "municipio";
$tdataBD_Mined[".updateSelectedFields"][] = "nombre_c_e";
$tdataBD_Mined[".updateSelectedFields"][] = "x";
$tdataBD_Mined[".updateSelectedFields"][] = "y";
$tdataBD_Mined[".updateSelectedFields"][] = "sector_ppd";
$tdataBD_Mined[".updateSelectedFields"][] = "matricula_inicial";
$tdataBD_Mined[".updateSelectedFields"][] = "matricula_final";
$tdataBD_Mined[".updateSelectedFields"][] = "maras";
$tdataBD_Mined[".updateSelectedFields"][] = "robos";
$tdataBD_Mined[".updateSelectedFields"][] = "hurtos";
$tdataBD_Mined[".updateSelectedFields"][] = "drogas";
$tdataBD_Mined[".updateSelectedFields"][] = "violaciones";
$tdataBD_Mined[".updateSelectedFields"][] = "pab";
$tdataBD_Mined[".updateSelectedFields"][] = "paf";
$tdataBD_Mined[".updateSelectedFields"][] = "escasos_recursos";
$tdataBD_Mined[".updateSelectedFields"][] = "incorpo_actividades_prod";
$tdataBD_Mined[".updateSelectedFields"][] = "lejania_ce";
$tdataBD_Mined[".updateSelectedFields"][] = "violencia_pandilleril";
$tdataBD_Mined[".updateSelectedFields"][] = "embarazo";
$tdataBD_Mined[".updateSelectedFields"][] = "acoso";
$tdataBD_Mined[".updateSelectedFields"][] = "violacion_sexual";
$tdataBD_Mined[".updateSelectedFields"][] = "cambio_domicilio";
$tdataBD_Mined[".updateSelectedFields"][] = "migracion";
$tdataBD_Mined[".updateSelectedFields"][] = "bajo_rendimiento";
$tdataBD_Mined[".updateSelectedFields"][] = "enfermedad";
$tdataBD_Mined[".updateSelectedFields"][] = "prostitucion";
$tdataBD_Mined[".updateSelectedFields"][] = "dep_mun";
$tdataBD_Mined[".updateSelectedFields"][] = "max_matric2016";
$tdataBD_Mined[".updateSelectedFields"][] = "mrf2016";
$tdataBD_Mined[".updateSelectedFields"][] = "pab_af";
$tdataBD_Mined[".updateSelectedFields"][] = "r_h";
$tdataBD_Mined[".updateSelectedFields"][] = "ipce_naive";
$tdataBD_Mined[".updateSelectedFields"][] = "ipce_0_1";
$tdataBD_Mined[".updateSelectedFields"][] = "aÑo";


$tdataBD_Mined[".exportFields"] = array();
$tdataBD_Mined[".exportFields"][] = "idderespuesta";
$tdataBD_Mined[".exportFields"][] = "codigo";
$tdataBD_Mined[".exportFields"][] = "depto";
$tdataBD_Mined[".exportFields"][] = "departamento";
$tdataBD_Mined[".exportFields"][] = "mun";
$tdataBD_Mined[".exportFields"][] = "municipio";
$tdataBD_Mined[".exportFields"][] = "nombre_c_e";
$tdataBD_Mined[".exportFields"][] = "x";
$tdataBD_Mined[".exportFields"][] = "y";
$tdataBD_Mined[".exportFields"][] = "sector_ppd";
$tdataBD_Mined[".exportFields"][] = "matricula_inicial";
$tdataBD_Mined[".exportFields"][] = "matricula_final";
$tdataBD_Mined[".exportFields"][] = "maras";
$tdataBD_Mined[".exportFields"][] = "robos";
$tdataBD_Mined[".exportFields"][] = "hurtos";
$tdataBD_Mined[".exportFields"][] = "drogas";
$tdataBD_Mined[".exportFields"][] = "violaciones";
$tdataBD_Mined[".exportFields"][] = "pab";
$tdataBD_Mined[".exportFields"][] = "paf";
$tdataBD_Mined[".exportFields"][] = "escasos_recursos";
$tdataBD_Mined[".exportFields"][] = "incorpo_actividades_prod";
$tdataBD_Mined[".exportFields"][] = "lejania_ce";
$tdataBD_Mined[".exportFields"][] = "violencia_pandilleril";
$tdataBD_Mined[".exportFields"][] = "embarazo";
$tdataBD_Mined[".exportFields"][] = "acoso";
$tdataBD_Mined[".exportFields"][] = "violacion_sexual";
$tdataBD_Mined[".exportFields"][] = "cambio_domicilio";
$tdataBD_Mined[".exportFields"][] = "migracion";
$tdataBD_Mined[".exportFields"][] = "bajo_rendimiento";
$tdataBD_Mined[".exportFields"][] = "enfermedad";
$tdataBD_Mined[".exportFields"][] = "prostitucion";
$tdataBD_Mined[".exportFields"][] = "dep_mun";
$tdataBD_Mined[".exportFields"][] = "max_matric2016";
$tdataBD_Mined[".exportFields"][] = "mrf2016";
$tdataBD_Mined[".exportFields"][] = "pab_af";
$tdataBD_Mined[".exportFields"][] = "r_h";
$tdataBD_Mined[".exportFields"][] = "ipce_naive";
$tdataBD_Mined[".exportFields"][] = "ipce_0_1";
$tdataBD_Mined[".exportFields"][] = "aÑo";

$tdataBD_Mined[".importFields"] = array();
$tdataBD_Mined[".importFields"][] = "idderespuesta";
$tdataBD_Mined[".importFields"][] = "codigo";
$tdataBD_Mined[".importFields"][] = "depto";
$tdataBD_Mined[".importFields"][] = "departamento";
$tdataBD_Mined[".importFields"][] = "mun";
$tdataBD_Mined[".importFields"][] = "municipio";
$tdataBD_Mined[".importFields"][] = "nombre_c_e";
$tdataBD_Mined[".importFields"][] = "x";
$tdataBD_Mined[".importFields"][] = "y";
$tdataBD_Mined[".importFields"][] = "sector_ppd";
$tdataBD_Mined[".importFields"][] = "matricula_inicial";
$tdataBD_Mined[".importFields"][] = "matricula_final";
$tdataBD_Mined[".importFields"][] = "maras";
$tdataBD_Mined[".importFields"][] = "robos";
$tdataBD_Mined[".importFields"][] = "hurtos";
$tdataBD_Mined[".importFields"][] = "drogas";
$tdataBD_Mined[".importFields"][] = "violaciones";
$tdataBD_Mined[".importFields"][] = "pab";
$tdataBD_Mined[".importFields"][] = "paf";
$tdataBD_Mined[".importFields"][] = "escasos_recursos";
$tdataBD_Mined[".importFields"][] = "incorpo_actividades_prod";
$tdataBD_Mined[".importFields"][] = "lejania_ce";
$tdataBD_Mined[".importFields"][] = "violencia_pandilleril";
$tdataBD_Mined[".importFields"][] = "embarazo";
$tdataBD_Mined[".importFields"][] = "acoso";
$tdataBD_Mined[".importFields"][] = "violacion_sexual";
$tdataBD_Mined[".importFields"][] = "cambio_domicilio";
$tdataBD_Mined[".importFields"][] = "migracion";
$tdataBD_Mined[".importFields"][] = "bajo_rendimiento";
$tdataBD_Mined[".importFields"][] = "enfermedad";
$tdataBD_Mined[".importFields"][] = "prostitucion";
$tdataBD_Mined[".importFields"][] = "dep_mun";
$tdataBD_Mined[".importFields"][] = "max_matric2016";
$tdataBD_Mined[".importFields"][] = "mrf2016";
$tdataBD_Mined[".importFields"][] = "pab_af";
$tdataBD_Mined[".importFields"][] = "r_h";
$tdataBD_Mined[".importFields"][] = "ipce_naive";
$tdataBD_Mined[".importFields"][] = "ipce_0_1";
$tdataBD_Mined[".importFields"][] = "aÑo";

$tdataBD_Mined[".printFields"] = array();
$tdataBD_Mined[".printFields"][] = "idderespuesta";
$tdataBD_Mined[".printFields"][] = "codigo";
$tdataBD_Mined[".printFields"][] = "depto";
$tdataBD_Mined[".printFields"][] = "departamento";
$tdataBD_Mined[".printFields"][] = "mun";
$tdataBD_Mined[".printFields"][] = "municipio";
$tdataBD_Mined[".printFields"][] = "nombre_c_e";
$tdataBD_Mined[".printFields"][] = "x";
$tdataBD_Mined[".printFields"][] = "y";
$tdataBD_Mined[".printFields"][] = "sector_ppd";
$tdataBD_Mined[".printFields"][] = "matricula_inicial";
$tdataBD_Mined[".printFields"][] = "matricula_final";
$tdataBD_Mined[".printFields"][] = "maras";
$tdataBD_Mined[".printFields"][] = "robos";
$tdataBD_Mined[".printFields"][] = "hurtos";
$tdataBD_Mined[".printFields"][] = "drogas";
$tdataBD_Mined[".printFields"][] = "violaciones";
$tdataBD_Mined[".printFields"][] = "pab";
$tdataBD_Mined[".printFields"][] = "paf";
$tdataBD_Mined[".printFields"][] = "escasos_recursos";
$tdataBD_Mined[".printFields"][] = "incorpo_actividades_prod";
$tdataBD_Mined[".printFields"][] = "lejania_ce";
$tdataBD_Mined[".printFields"][] = "violencia_pandilleril";
$tdataBD_Mined[".printFields"][] = "embarazo";
$tdataBD_Mined[".printFields"][] = "acoso";
$tdataBD_Mined[".printFields"][] = "violacion_sexual";
$tdataBD_Mined[".printFields"][] = "cambio_domicilio";
$tdataBD_Mined[".printFields"][] = "migracion";
$tdataBD_Mined[".printFields"][] = "bajo_rendimiento";
$tdataBD_Mined[".printFields"][] = "enfermedad";
$tdataBD_Mined[".printFields"][] = "prostitucion";
$tdataBD_Mined[".printFields"][] = "dep_mun";
$tdataBD_Mined[".printFields"][] = "max_matric2016";
$tdataBD_Mined[".printFields"][] = "mrf2016";
$tdataBD_Mined[".printFields"][] = "pab_af";
$tdataBD_Mined[".printFields"][] = "r_h";
$tdataBD_Mined[".printFields"][] = "ipce_naive";
$tdataBD_Mined[".printFields"][] = "ipce_0_1";
$tdataBD_Mined[".printFields"][] = "aÑo";

//	idderespuesta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idderespuesta";
	$fdata["GoodName"] = "idderespuesta";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","idderespuesta");
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




	$tdataBD_Mined["idderespuesta"] = $fdata;
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","codigo");
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




	$tdataBD_Mined["codigo"] = $fdata;
//	depto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "depto";
	$fdata["GoodName"] = "depto";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","depto");
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




	$tdataBD_Mined["depto"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","departamento");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

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




	$tdataBD_Mined["departamento"] = $fdata;
//	mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mun";
	$fdata["GoodName"] = "mun";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","mun");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

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




	$tdataBD_Mined["mun"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","municipio");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

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




	$tdataBD_Mined["municipio"] = $fdata;
//	nombre_c_e
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nombre_c_e";
	$fdata["GoodName"] = "nombre_c_e";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","nombre_c_e");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

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




	$tdataBD_Mined["nombre_c_e"] = $fdata;
//	x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "x";
	$fdata["GoodName"] = "x";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","x");
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




	$tdataBD_Mined["x"] = $fdata;
//	y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "y";
	$fdata["GoodName"] = "y";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","y");
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




	$tdataBD_Mined["y"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","sector_ppd");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

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




	$tdataBD_Mined["sector_ppd"] = $fdata;
//	matricula_inicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "matricula_inicial";
	$fdata["GoodName"] = "matricula_inicial";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","matricula_inicial");
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




	$tdataBD_Mined["matricula_inicial"] = $fdata;
//	matricula_final
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "matricula_final";
	$fdata["GoodName"] = "matricula_final";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","matricula_final");
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




	$tdataBD_Mined["matricula_final"] = $fdata;
//	maras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "maras";
	$fdata["GoodName"] = "maras";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","maras");
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




	$tdataBD_Mined["maras"] = $fdata;
//	robos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "robos";
	$fdata["GoodName"] = "robos";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","robos");
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




	$tdataBD_Mined["robos"] = $fdata;
//	hurtos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "hurtos";
	$fdata["GoodName"] = "hurtos";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","hurtos");
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




	$tdataBD_Mined["hurtos"] = $fdata;
//	drogas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "drogas";
	$fdata["GoodName"] = "drogas";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","drogas");
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




	$tdataBD_Mined["drogas"] = $fdata;
//	violaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "violaciones";
	$fdata["GoodName"] = "violaciones";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","violaciones");
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




	$tdataBD_Mined["violaciones"] = $fdata;
//	pab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "pab";
	$fdata["GoodName"] = "pab";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","pab");
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




	$tdataBD_Mined["pab"] = $fdata;
//	paf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "paf";
	$fdata["GoodName"] = "paf";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","paf");
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




	$tdataBD_Mined["paf"] = $fdata;
//	escasos_recursos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "escasos_recursos";
	$fdata["GoodName"] = "escasos_recursos";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","escasos_recursos");
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




	$tdataBD_Mined["escasos_recursos"] = $fdata;
//	incorpo_actividades_prod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "incorpo_actividades_prod";
	$fdata["GoodName"] = "incorpo_actividades_prod";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","incorpo_actividades_prod");
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




	$tdataBD_Mined["incorpo_actividades_prod"] = $fdata;
//	lejania_ce
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "lejania_ce";
	$fdata["GoodName"] = "lejania_ce";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","lejania_ce");
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




	$tdataBD_Mined["lejania_ce"] = $fdata;
//	violencia_pandilleril
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "violencia_pandilleril";
	$fdata["GoodName"] = "violencia_pandilleril";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","violencia_pandilleril");
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




	$tdataBD_Mined["violencia_pandilleril"] = $fdata;
//	embarazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "embarazo";
	$fdata["GoodName"] = "embarazo";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","embarazo");
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




	$tdataBD_Mined["embarazo"] = $fdata;
//	acoso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "acoso";
	$fdata["GoodName"] = "acoso";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","acoso");
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




	$tdataBD_Mined["acoso"] = $fdata;
//	violacion_sexual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "violacion_sexual";
	$fdata["GoodName"] = "violacion_sexual";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","violacion_sexual");
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




	$tdataBD_Mined["violacion_sexual"] = $fdata;
//	cambio_domicilio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "cambio_domicilio";
	$fdata["GoodName"] = "cambio_domicilio";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","cambio_domicilio");
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




	$tdataBD_Mined["cambio_domicilio"] = $fdata;
//	migracion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "migracion";
	$fdata["GoodName"] = "migracion";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","migracion");
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




	$tdataBD_Mined["migracion"] = $fdata;
//	bajo_rendimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "bajo_rendimiento";
	$fdata["GoodName"] = "bajo_rendimiento";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","bajo_rendimiento");
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




	$tdataBD_Mined["bajo_rendimiento"] = $fdata;
//	enfermedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "enfermedad";
	$fdata["GoodName"] = "enfermedad";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","enfermedad");
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




	$tdataBD_Mined["enfermedad"] = $fdata;
//	prostitucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "prostitucion";
	$fdata["GoodName"] = "prostitucion";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","prostitucion");
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




	$tdataBD_Mined["prostitucion"] = $fdata;
//	dep_mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "dep_mun";
	$fdata["GoodName"] = "dep_mun";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","dep_mun");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

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




	$tdataBD_Mined["dep_mun"] = $fdata;
//	max_matric2016
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "max_matric2016";
	$fdata["GoodName"] = "max_matric2016";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","max_matric2016");
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




	$tdataBD_Mined["max_matric2016"] = $fdata;
//	mrf2016
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "mrf2016";
	$fdata["GoodName"] = "mrf2016";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","mrf2016");
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




	$tdataBD_Mined["mrf2016"] = $fdata;
//	pab_af
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "pab_af";
	$fdata["GoodName"] = "pab_af";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","pab_af");
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




	$tdataBD_Mined["pab_af"] = $fdata;
//	r_h
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "r_h";
	$fdata["GoodName"] = "r_h";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","r_h");
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




	$tdataBD_Mined["r_h"] = $fdata;
//	ipce_naive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "ipce_naive";
	$fdata["GoodName"] = "ipce_naive";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","ipce_naive");
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




	$tdataBD_Mined["ipce_naive"] = $fdata;
//	ipce_0_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "ipce_0_1";
	$fdata["GoodName"] = "ipce_0_1";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","ipce_0_1");
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




	$tdataBD_Mined["ipce_0_1"] = $fdata;
//	aÑo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "aÑo";
	$fdata["GoodName"] = "a_o";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("BD_Mined","a_o");
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




	$tdataBD_Mined["aÑo"] = $fdata;


$tables_data["BD Mined"]=&$tdataBD_Mined;
$field_labels["BD_Mined"] = &$fieldLabelsBD_Mined;
$fieldToolTips["BD_Mined"] = &$fieldToolTipsBD_Mined;
$placeHolders["BD_Mined"] = &$placeHoldersBD_Mined;
$page_titles["BD_Mined"] = &$pageTitlesBD_Mined;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BD Mined"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["BD Mined"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BD_Mined()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idderespuesta,  	codigo,  	depto,  	departamento,  	mun,  	municipio,  	nombre_c_e,  	x,  	y,  	sector_ppd,  	matricula_inicial,  	matricula_final,  	maras,  	robos,  	hurtos,  	drogas,  	violaciones,  	pab,  	paf,  	escasos_recursos,  	incorpo_actividades_prod,  	lejania_ce,  	violencia_pandilleril,  	embarazo,  	acoso,  	violacion_sexual,  	cambio_domicilio,  	migracion,  	bajo_rendimiento,  	enfermedad,  	prostitucion,  	dep_mun,  	max_matric2016,  	mrf2016,  	pab_af,  	r_h,  	ipce_naive,  	ipce_0_1,  	`aÑo`";
$proto0["m_strFrom"] = "FROM mined";
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
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto6["m_sql"] = "idderespuesta";
$proto6["m_srcTableName"] = "BD Mined";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto8["m_sql"] = "codigo";
$proto8["m_srcTableName"] = "BD Mined";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "depto",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto10["m_sql"] = "depto";
$proto10["m_srcTableName"] = "BD Mined";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto12["m_sql"] = "departamento";
$proto12["m_srcTableName"] = "BD Mined";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "mun",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto14["m_sql"] = "mun";
$proto14["m_srcTableName"] = "BD Mined";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto16["m_sql"] = "municipio";
$proto16["m_srcTableName"] = "BD Mined";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_c_e",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto18["m_sql"] = "nombre_c_e";
$proto18["m_srcTableName"] = "BD Mined";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "x",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto20["m_sql"] = "x";
$proto20["m_srcTableName"] = "BD Mined";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "y",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto22["m_sql"] = "y";
$proto22["m_srcTableName"] = "BD Mined";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto24["m_sql"] = "sector_ppd";
$proto24["m_srcTableName"] = "BD Mined";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "matricula_inicial",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto26["m_sql"] = "matricula_inicial";
$proto26["m_srcTableName"] = "BD Mined";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "matricula_final",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto28["m_sql"] = "matricula_final";
$proto28["m_srcTableName"] = "BD Mined";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "maras",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto30["m_sql"] = "maras";
$proto30["m_srcTableName"] = "BD Mined";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "robos",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto32["m_sql"] = "robos";
$proto32["m_srcTableName"] = "BD Mined";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "hurtos",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto34["m_sql"] = "hurtos";
$proto34["m_srcTableName"] = "BD Mined";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "drogas",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto36["m_sql"] = "drogas";
$proto36["m_srcTableName"] = "BD Mined";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "violaciones",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto38["m_sql"] = "violaciones";
$proto38["m_srcTableName"] = "BD Mined";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "pab",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto40["m_sql"] = "pab";
$proto40["m_srcTableName"] = "BD Mined";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "paf",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto42["m_sql"] = "paf";
$proto42["m_srcTableName"] = "BD Mined";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "escasos_recursos",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto44["m_sql"] = "escasos_recursos";
$proto44["m_srcTableName"] = "BD Mined";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "incorpo_actividades_prod",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto46["m_sql"] = "incorpo_actividades_prod";
$proto46["m_srcTableName"] = "BD Mined";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "lejania_ce",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto48["m_sql"] = "lejania_ce";
$proto48["m_srcTableName"] = "BD Mined";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "violencia_pandilleril",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto50["m_sql"] = "violencia_pandilleril";
$proto50["m_srcTableName"] = "BD Mined";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "embarazo",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto52["m_sql"] = "embarazo";
$proto52["m_srcTableName"] = "BD Mined";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "acoso",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto54["m_sql"] = "acoso";
$proto54["m_srcTableName"] = "BD Mined";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "violacion_sexual",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto56["m_sql"] = "violacion_sexual";
$proto56["m_srcTableName"] = "BD Mined";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "cambio_domicilio",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto58["m_sql"] = "cambio_domicilio";
$proto58["m_srcTableName"] = "BD Mined";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "migracion",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto60["m_sql"] = "migracion";
$proto60["m_srcTableName"] = "BD Mined";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "bajo_rendimiento",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto62["m_sql"] = "bajo_rendimiento";
$proto62["m_srcTableName"] = "BD Mined";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "enfermedad",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto64["m_sql"] = "enfermedad";
$proto64["m_srcTableName"] = "BD Mined";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "prostitucion",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto66["m_sql"] = "prostitucion";
$proto66["m_srcTableName"] = "BD Mined";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "dep_mun",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto68["m_sql"] = "dep_mun";
$proto68["m_srcTableName"] = "BD Mined";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "max_matric2016",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto70["m_sql"] = "max_matric2016";
$proto70["m_srcTableName"] = "BD Mined";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "mrf2016",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto72["m_sql"] = "mrf2016";
$proto72["m_srcTableName"] = "BD Mined";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "pab_af",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto74["m_sql"] = "pab_af";
$proto74["m_srcTableName"] = "BD Mined";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "r_h",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto76["m_sql"] = "r_h";
$proto76["m_srcTableName"] = "BD Mined";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "ipce_naive",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto78["m_sql"] = "ipce_naive";
$proto78["m_srcTableName"] = "BD Mined";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "ipce_0_1",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto80["m_sql"] = "ipce_0_1";
$proto80["m_srcTableName"] = "BD Mined";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo",
	"m_strTable" => "mined",
	"m_srcTableName" => "BD Mined"
));

$proto82["m_sql"] = "`aÑo`";
$proto82["m_srcTableName"] = "BD Mined";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto84=array();
$proto84["m_link"] = "SQLL_MAIN";
			$proto85=array();
$proto85["m_strName"] = "mined";
$proto85["m_srcTableName"] = "BD Mined";
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
$proto84["m_sql"] = "mined";
$proto84["m_alias"] = "";
$proto84["m_srcTableName"] = "BD Mined";
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
$proto0["m_srcTableName"]="BD Mined";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BD_Mined = createSqlQuery_BD_Mined();


	
		;

																																							

$tdataBD_Mined[".sqlquery"] = $queryData_BD_Mined;

$tableEvents["BD Mined"] = new eventsBase;
$tdataBD_Mined[".hasEvents"] = false;

?>