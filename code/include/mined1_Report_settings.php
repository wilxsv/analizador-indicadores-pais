<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamined1_Report = array();
	$tdatamined1_Report[".truncateText"] = true;
	$tdatamined1_Report[".NumberOfChars"] = 80;
	$tdatamined1_Report[".ShortName"] = "mined1_Report";
	$tdatamined1_Report[".OwnerID"] = "";
	$tdatamined1_Report[".OriginalTable"] = "mined1";

//	field labels
$fieldLabelsmined1_Report = array();
$fieldToolTipsmined1_Report = array();
$pageTitlesmined1_Report = array();
$placeHoldersmined1_Report = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmined1_Report["Spanish"] = array();
	$fieldToolTipsmined1_Report["Spanish"] = array();
	$placeHoldersmined1_Report["Spanish"] = array();
	$pageTitlesmined1_Report["Spanish"] = array();
	$fieldLabelsmined1_Report["Spanish"]["idderespuesta"] = "Idderespuesta";
	$fieldToolTipsmined1_Report["Spanish"]["idderespuesta"] = "";
	$placeHoldersmined1_Report["Spanish"]["idderespuesta"] = "";
	$fieldLabelsmined1_Report["Spanish"]["codigo"] = "Codigo";
	$fieldToolTipsmined1_Report["Spanish"]["codigo"] = "";
	$placeHoldersmined1_Report["Spanish"]["codigo"] = "";
	$fieldLabelsmined1_Report["Spanish"]["depto"] = "Depto";
	$fieldToolTipsmined1_Report["Spanish"]["depto"] = "";
	$placeHoldersmined1_Report["Spanish"]["depto"] = "";
	$fieldLabelsmined1_Report["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsmined1_Report["Spanish"]["departamento"] = "";
	$placeHoldersmined1_Report["Spanish"]["departamento"] = "";
	$fieldLabelsmined1_Report["Spanish"]["mun"] = "Mun";
	$fieldToolTipsmined1_Report["Spanish"]["mun"] = "";
	$placeHoldersmined1_Report["Spanish"]["mun"] = "";
	$fieldLabelsmined1_Report["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsmined1_Report["Spanish"]["municipio"] = "";
	$placeHoldersmined1_Report["Spanish"]["municipio"] = "";
	$fieldLabelsmined1_Report["Spanish"]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsmined1_Report["Spanish"]["nombre_c_e"] = "";
	$placeHoldersmined1_Report["Spanish"]["nombre_c_e"] = "";
	$fieldLabelsmined1_Report["Spanish"]["x"] = "X";
	$fieldToolTipsmined1_Report["Spanish"]["x"] = "";
	$placeHoldersmined1_Report["Spanish"]["x"] = "";
	$fieldLabelsmined1_Report["Spanish"]["y"] = "Y";
	$fieldToolTipsmined1_Report["Spanish"]["y"] = "";
	$placeHoldersmined1_Report["Spanish"]["y"] = "";
	$fieldLabelsmined1_Report["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsmined1_Report["Spanish"]["sector_ppd"] = "";
	$placeHoldersmined1_Report["Spanish"]["sector_ppd"] = "";
	$fieldLabelsmined1_Report["Spanish"]["matricula_inicial"] = "Matricula Inicial";
	$fieldToolTipsmined1_Report["Spanish"]["matricula_inicial"] = "";
	$placeHoldersmined1_Report["Spanish"]["matricula_inicial"] = "";
	$fieldLabelsmined1_Report["Spanish"]["matricula_final"] = "Matricula Final";
	$fieldToolTipsmined1_Report["Spanish"]["matricula_final"] = "";
	$placeHoldersmined1_Report["Spanish"]["matricula_final"] = "";
	$fieldLabelsmined1_Report["Spanish"]["maras"] = "Maras";
	$fieldToolTipsmined1_Report["Spanish"]["maras"] = "";
	$placeHoldersmined1_Report["Spanish"]["maras"] = "";
	$fieldLabelsmined1_Report["Spanish"]["robos"] = "Robos";
	$fieldToolTipsmined1_Report["Spanish"]["robos"] = "";
	$placeHoldersmined1_Report["Spanish"]["robos"] = "";
	$fieldLabelsmined1_Report["Spanish"]["hurtos"] = "Hurtos";
	$fieldToolTipsmined1_Report["Spanish"]["hurtos"] = "";
	$placeHoldersmined1_Report["Spanish"]["hurtos"] = "";
	$fieldLabelsmined1_Report["Spanish"]["drogas"] = "Drogas";
	$fieldToolTipsmined1_Report["Spanish"]["drogas"] = "";
	$placeHoldersmined1_Report["Spanish"]["drogas"] = "";
	$fieldLabelsmined1_Report["Spanish"]["violaciones"] = "Violaciones";
	$fieldToolTipsmined1_Report["Spanish"]["violaciones"] = "";
	$placeHoldersmined1_Report["Spanish"]["violaciones"] = "";
	$fieldLabelsmined1_Report["Spanish"]["pab"] = "Pab";
	$fieldToolTipsmined1_Report["Spanish"]["pab"] = "";
	$placeHoldersmined1_Report["Spanish"]["pab"] = "";
	$fieldLabelsmined1_Report["Spanish"]["paf"] = "Paf";
	$fieldToolTipsmined1_Report["Spanish"]["paf"] = "";
	$placeHoldersmined1_Report["Spanish"]["paf"] = "";
	$fieldLabelsmined1_Report["Spanish"]["escasos_recursos"] = "Escasos Recursos";
	$fieldToolTipsmined1_Report["Spanish"]["escasos_recursos"] = "";
	$placeHoldersmined1_Report["Spanish"]["escasos_recursos"] = "";
	$fieldLabelsmined1_Report["Spanish"]["incorpo_actividades_prod"] = "Incorpo Actividades Prod";
	$fieldToolTipsmined1_Report["Spanish"]["incorpo_actividades_prod"] = "";
	$placeHoldersmined1_Report["Spanish"]["incorpo_actividades_prod"] = "";
	$fieldLabelsmined1_Report["Spanish"]["lejania_ce"] = "Lejania Ce";
	$fieldToolTipsmined1_Report["Spanish"]["lejania_ce"] = "";
	$placeHoldersmined1_Report["Spanish"]["lejania_ce"] = "";
	$fieldLabelsmined1_Report["Spanish"]["violencia_pandilleril"] = "Violencia Pandilleril";
	$fieldToolTipsmined1_Report["Spanish"]["violencia_pandilleril"] = "";
	$placeHoldersmined1_Report["Spanish"]["violencia_pandilleril"] = "";
	$fieldLabelsmined1_Report["Spanish"]["embarazo"] = "Embarazo";
	$fieldToolTipsmined1_Report["Spanish"]["embarazo"] = "";
	$placeHoldersmined1_Report["Spanish"]["embarazo"] = "";
	$fieldLabelsmined1_Report["Spanish"]["acoso"] = "Acoso";
	$fieldToolTipsmined1_Report["Spanish"]["acoso"] = "";
	$placeHoldersmined1_Report["Spanish"]["acoso"] = "";
	$fieldLabelsmined1_Report["Spanish"]["violacion_sexual"] = "Violacion Sexual";
	$fieldToolTipsmined1_Report["Spanish"]["violacion_sexual"] = "";
	$placeHoldersmined1_Report["Spanish"]["violacion_sexual"] = "";
	$fieldLabelsmined1_Report["Spanish"]["cambio_domicilio"] = "Cambio Domicilio";
	$fieldToolTipsmined1_Report["Spanish"]["cambio_domicilio"] = "";
	$placeHoldersmined1_Report["Spanish"]["cambio_domicilio"] = "";
	$fieldLabelsmined1_Report["Spanish"]["migracion"] = "Migracion";
	$fieldToolTipsmined1_Report["Spanish"]["migracion"] = "";
	$placeHoldersmined1_Report["Spanish"]["migracion"] = "";
	$fieldLabelsmined1_Report["Spanish"]["bajo_rendimiento"] = "Bajo Rendimiento";
	$fieldToolTipsmined1_Report["Spanish"]["bajo_rendimiento"] = "";
	$placeHoldersmined1_Report["Spanish"]["bajo_rendimiento"] = "";
	$fieldLabelsmined1_Report["Spanish"]["enfermedad"] = "Enfermedad";
	$fieldToolTipsmined1_Report["Spanish"]["enfermedad"] = "";
	$placeHoldersmined1_Report["Spanish"]["enfermedad"] = "";
	$fieldLabelsmined1_Report["Spanish"]["prostitucion"] = "Prostitucion";
	$fieldToolTipsmined1_Report["Spanish"]["prostitucion"] = "";
	$placeHoldersmined1_Report["Spanish"]["prostitucion"] = "";
	$fieldLabelsmined1_Report["Spanish"]["dep_mun"] = "Dep Mun";
	$fieldToolTipsmined1_Report["Spanish"]["dep_mun"] = "";
	$placeHoldersmined1_Report["Spanish"]["dep_mun"] = "";
	$fieldLabelsmined1_Report["Spanish"]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipsmined1_Report["Spanish"]["max_matric2016"] = "";
	$placeHoldersmined1_Report["Spanish"]["max_matric2016"] = "";
	$fieldLabelsmined1_Report["Spanish"]["mrf2016"] = "Mrf2016";
	$fieldToolTipsmined1_Report["Spanish"]["mrf2016"] = "";
	$placeHoldersmined1_Report["Spanish"]["mrf2016"] = "";
	$fieldLabelsmined1_Report["Spanish"]["pab_af"] = "Pab Af";
	$fieldToolTipsmined1_Report["Spanish"]["pab_af"] = "";
	$placeHoldersmined1_Report["Spanish"]["pab_af"] = "";
	$fieldLabelsmined1_Report["Spanish"]["r_h"] = "R H";
	$fieldToolTipsmined1_Report["Spanish"]["r_h"] = "";
	$placeHoldersmined1_Report["Spanish"]["r_h"] = "";
	$fieldLabelsmined1_Report["Spanish"]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipsmined1_Report["Spanish"]["ipce_naive"] = "";
	$placeHoldersmined1_Report["Spanish"]["ipce_naive"] = "";
	$fieldLabelsmined1_Report["Spanish"]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipsmined1_Report["Spanish"]["ipce_0_1"] = "";
	$placeHoldersmined1_Report["Spanish"]["ipce_0_1"] = "";
	$fieldLabelsmined1_Report["Spanish"]["a_o"] = "AÑo";
	$fieldToolTipsmined1_Report["Spanish"]["a_o"] = "";
	$placeHoldersmined1_Report["Spanish"]["a_o"] = "";
	if (count($fieldToolTipsmined1_Report["Spanish"]))
		$tdatamined1_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmined1_Report["English"] = array();
	$fieldToolTipsmined1_Report["English"] = array();
	$placeHoldersmined1_Report["English"] = array();
	$pageTitlesmined1_Report["English"] = array();
	$fieldLabelsmined1_Report["English"]["idderespuesta"] = "Idderespuesta";
	$fieldToolTipsmined1_Report["English"]["idderespuesta"] = "";
	$placeHoldersmined1_Report["English"]["idderespuesta"] = "";
	$fieldLabelsmined1_Report["English"]["codigo"] = "Codigo";
	$fieldToolTipsmined1_Report["English"]["codigo"] = "";
	$placeHoldersmined1_Report["English"]["codigo"] = "";
	$fieldLabelsmined1_Report["English"]["depto"] = "Depto";
	$fieldToolTipsmined1_Report["English"]["depto"] = "";
	$placeHoldersmined1_Report["English"]["depto"] = "";
	$fieldLabelsmined1_Report["English"]["departamento"] = "Departamento";
	$fieldToolTipsmined1_Report["English"]["departamento"] = "";
	$placeHoldersmined1_Report["English"]["departamento"] = "";
	$fieldLabelsmined1_Report["English"]["mun"] = "Mun";
	$fieldToolTipsmined1_Report["English"]["mun"] = "";
	$placeHoldersmined1_Report["English"]["mun"] = "";
	$fieldLabelsmined1_Report["English"]["municipio"] = "Municipio";
	$fieldToolTipsmined1_Report["English"]["municipio"] = "";
	$placeHoldersmined1_Report["English"]["municipio"] = "";
	$fieldLabelsmined1_Report["English"]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsmined1_Report["English"]["nombre_c_e"] = "";
	$placeHoldersmined1_Report["English"]["nombre_c_e"] = "";
	$fieldLabelsmined1_Report["English"]["x"] = "X";
	$fieldToolTipsmined1_Report["English"]["x"] = "";
	$placeHoldersmined1_Report["English"]["x"] = "";
	$fieldLabelsmined1_Report["English"]["y"] = "Y";
	$fieldToolTipsmined1_Report["English"]["y"] = "";
	$placeHoldersmined1_Report["English"]["y"] = "";
	$fieldLabelsmined1_Report["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsmined1_Report["English"]["sector_ppd"] = "";
	$placeHoldersmined1_Report["English"]["sector_ppd"] = "";
	$fieldLabelsmined1_Report["English"]["matricula_inicial"] = "Matricula Inicial";
	$fieldToolTipsmined1_Report["English"]["matricula_inicial"] = "";
	$placeHoldersmined1_Report["English"]["matricula_inicial"] = "";
	$fieldLabelsmined1_Report["English"]["matricula_final"] = "Matricula Final";
	$fieldToolTipsmined1_Report["English"]["matricula_final"] = "";
	$placeHoldersmined1_Report["English"]["matricula_final"] = "";
	$fieldLabelsmined1_Report["English"]["maras"] = "Maras";
	$fieldToolTipsmined1_Report["English"]["maras"] = "";
	$placeHoldersmined1_Report["English"]["maras"] = "";
	$fieldLabelsmined1_Report["English"]["robos"] = "Robos";
	$fieldToolTipsmined1_Report["English"]["robos"] = "";
	$placeHoldersmined1_Report["English"]["robos"] = "";
	$fieldLabelsmined1_Report["English"]["hurtos"] = "Hurtos";
	$fieldToolTipsmined1_Report["English"]["hurtos"] = "";
	$placeHoldersmined1_Report["English"]["hurtos"] = "";
	$fieldLabelsmined1_Report["English"]["drogas"] = "Drogas";
	$fieldToolTipsmined1_Report["English"]["drogas"] = "";
	$placeHoldersmined1_Report["English"]["drogas"] = "";
	$fieldLabelsmined1_Report["English"]["violaciones"] = "Violaciones";
	$fieldToolTipsmined1_Report["English"]["violaciones"] = "";
	$placeHoldersmined1_Report["English"]["violaciones"] = "";
	$fieldLabelsmined1_Report["English"]["pab"] = "Pab";
	$fieldToolTipsmined1_Report["English"]["pab"] = "";
	$placeHoldersmined1_Report["English"]["pab"] = "";
	$fieldLabelsmined1_Report["English"]["paf"] = "Paf";
	$fieldToolTipsmined1_Report["English"]["paf"] = "";
	$placeHoldersmined1_Report["English"]["paf"] = "";
	$fieldLabelsmined1_Report["English"]["escasos_recursos"] = "Escasos Recursos";
	$fieldToolTipsmined1_Report["English"]["escasos_recursos"] = "";
	$placeHoldersmined1_Report["English"]["escasos_recursos"] = "";
	$fieldLabelsmined1_Report["English"]["incorpo_actividades_prod"] = "Incorpo Actividades Prod";
	$fieldToolTipsmined1_Report["English"]["incorpo_actividades_prod"] = "";
	$placeHoldersmined1_Report["English"]["incorpo_actividades_prod"] = "";
	$fieldLabelsmined1_Report["English"]["lejania_ce"] = "Lejania Ce";
	$fieldToolTipsmined1_Report["English"]["lejania_ce"] = "";
	$placeHoldersmined1_Report["English"]["lejania_ce"] = "";
	$fieldLabelsmined1_Report["English"]["violencia_pandilleril"] = "Violencia Pandilleril";
	$fieldToolTipsmined1_Report["English"]["violencia_pandilleril"] = "";
	$placeHoldersmined1_Report["English"]["violencia_pandilleril"] = "";
	$fieldLabelsmined1_Report["English"]["embarazo"] = "Embarazo";
	$fieldToolTipsmined1_Report["English"]["embarazo"] = "";
	$placeHoldersmined1_Report["English"]["embarazo"] = "";
	$fieldLabelsmined1_Report["English"]["acoso"] = "Acoso";
	$fieldToolTipsmined1_Report["English"]["acoso"] = "";
	$placeHoldersmined1_Report["English"]["acoso"] = "";
	$fieldLabelsmined1_Report["English"]["violacion_sexual"] = "Violacion Sexual";
	$fieldToolTipsmined1_Report["English"]["violacion_sexual"] = "";
	$placeHoldersmined1_Report["English"]["violacion_sexual"] = "";
	$fieldLabelsmined1_Report["English"]["cambio_domicilio"] = "Cambio Domicilio";
	$fieldToolTipsmined1_Report["English"]["cambio_domicilio"] = "";
	$placeHoldersmined1_Report["English"]["cambio_domicilio"] = "";
	$fieldLabelsmined1_Report["English"]["migracion"] = "Migracion";
	$fieldToolTipsmined1_Report["English"]["migracion"] = "";
	$placeHoldersmined1_Report["English"]["migracion"] = "";
	$fieldLabelsmined1_Report["English"]["bajo_rendimiento"] = "Bajo Rendimiento";
	$fieldToolTipsmined1_Report["English"]["bajo_rendimiento"] = "";
	$placeHoldersmined1_Report["English"]["bajo_rendimiento"] = "";
	$fieldLabelsmined1_Report["English"]["enfermedad"] = "Enfermedad";
	$fieldToolTipsmined1_Report["English"]["enfermedad"] = "";
	$placeHoldersmined1_Report["English"]["enfermedad"] = "";
	$fieldLabelsmined1_Report["English"]["prostitucion"] = "Prostitucion";
	$fieldToolTipsmined1_Report["English"]["prostitucion"] = "";
	$placeHoldersmined1_Report["English"]["prostitucion"] = "";
	$fieldLabelsmined1_Report["English"]["dep_mun"] = "Dep Mun";
	$fieldToolTipsmined1_Report["English"]["dep_mun"] = "";
	$placeHoldersmined1_Report["English"]["dep_mun"] = "";
	$fieldLabelsmined1_Report["English"]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipsmined1_Report["English"]["max_matric2016"] = "";
	$placeHoldersmined1_Report["English"]["max_matric2016"] = "";
	$fieldLabelsmined1_Report["English"]["mrf2016"] = "Mrf2016";
	$fieldToolTipsmined1_Report["English"]["mrf2016"] = "";
	$placeHoldersmined1_Report["English"]["mrf2016"] = "";
	$fieldLabelsmined1_Report["English"]["pab_af"] = "Pab Af";
	$fieldToolTipsmined1_Report["English"]["pab_af"] = "";
	$placeHoldersmined1_Report["English"]["pab_af"] = "";
	$fieldLabelsmined1_Report["English"]["r_h"] = "R H";
	$fieldToolTipsmined1_Report["English"]["r_h"] = "";
	$placeHoldersmined1_Report["English"]["r_h"] = "";
	$fieldLabelsmined1_Report["English"]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipsmined1_Report["English"]["ipce_naive"] = "";
	$placeHoldersmined1_Report["English"]["ipce_naive"] = "";
	$fieldLabelsmined1_Report["English"]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipsmined1_Report["English"]["ipce_0_1"] = "";
	$placeHoldersmined1_Report["English"]["ipce_0_1"] = "";
	$fieldLabelsmined1_Report["English"]["a_o"] = "AÑo";
	$fieldToolTipsmined1_Report["English"]["a_o"] = "";
	$placeHoldersmined1_Report["English"]["a_o"] = "";
	if (count($fieldToolTipsmined1_Report["English"]))
		$tdatamined1_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmined1_Report[""] = array();
	$fieldToolTipsmined1_Report[""] = array();
	$placeHoldersmined1_Report[""] = array();
	$pageTitlesmined1_Report[""] = array();
	$fieldLabelsmined1_Report[""]["idderespuesta"] = "Idderespuesta";
	$fieldToolTipsmined1_Report[""]["idderespuesta"] = "";
	$placeHoldersmined1_Report[""]["idderespuesta"] = "";
	$fieldLabelsmined1_Report[""]["codigo"] = "Codigo";
	$fieldToolTipsmined1_Report[""]["codigo"] = "";
	$placeHoldersmined1_Report[""]["codigo"] = "";
	$fieldLabelsmined1_Report[""]["depto"] = "Depto";
	$fieldToolTipsmined1_Report[""]["depto"] = "";
	$placeHoldersmined1_Report[""]["depto"] = "";
	$fieldLabelsmined1_Report[""]["departamento"] = "Departamento";
	$fieldToolTipsmined1_Report[""]["departamento"] = "";
	$placeHoldersmined1_Report[""]["departamento"] = "";
	$fieldLabelsmined1_Report[""]["mun"] = "Mun";
	$fieldToolTipsmined1_Report[""]["mun"] = "";
	$placeHoldersmined1_Report[""]["mun"] = "";
	$fieldLabelsmined1_Report[""]["municipio"] = "Municipio";
	$fieldToolTipsmined1_Report[""]["municipio"] = "";
	$placeHoldersmined1_Report[""]["municipio"] = "";
	$fieldLabelsmined1_Report[""]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsmined1_Report[""]["nombre_c_e"] = "";
	$placeHoldersmined1_Report[""]["nombre_c_e"] = "";
	$fieldLabelsmined1_Report[""]["x"] = "X";
	$fieldToolTipsmined1_Report[""]["x"] = "";
	$placeHoldersmined1_Report[""]["x"] = "";
	$fieldLabelsmined1_Report[""]["y"] = "Y";
	$fieldToolTipsmined1_Report[""]["y"] = "";
	$placeHoldersmined1_Report[""]["y"] = "";
	$fieldLabelsmined1_Report[""]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsmined1_Report[""]["sector_ppd"] = "";
	$placeHoldersmined1_Report[""]["sector_ppd"] = "";
	$fieldLabelsmined1_Report[""]["matricula_inicial"] = "Matricula Inicial";
	$fieldToolTipsmined1_Report[""]["matricula_inicial"] = "";
	$placeHoldersmined1_Report[""]["matricula_inicial"] = "";
	$fieldLabelsmined1_Report[""]["matricula_final"] = "Matricula Final";
	$fieldToolTipsmined1_Report[""]["matricula_final"] = "";
	$placeHoldersmined1_Report[""]["matricula_final"] = "";
	$fieldLabelsmined1_Report[""]["maras"] = "Maras";
	$fieldToolTipsmined1_Report[""]["maras"] = "";
	$placeHoldersmined1_Report[""]["maras"] = "";
	$fieldLabelsmined1_Report[""]["robos"] = "Robos";
	$fieldToolTipsmined1_Report[""]["robos"] = "";
	$placeHoldersmined1_Report[""]["robos"] = "";
	$fieldLabelsmined1_Report[""]["hurtos"] = "Hurtos";
	$fieldToolTipsmined1_Report[""]["hurtos"] = "";
	$placeHoldersmined1_Report[""]["hurtos"] = "";
	$fieldLabelsmined1_Report[""]["drogas"] = "Drogas";
	$fieldToolTipsmined1_Report[""]["drogas"] = "";
	$placeHoldersmined1_Report[""]["drogas"] = "";
	$fieldLabelsmined1_Report[""]["violaciones"] = "Violaciones";
	$fieldToolTipsmined1_Report[""]["violaciones"] = "";
	$placeHoldersmined1_Report[""]["violaciones"] = "";
	$fieldLabelsmined1_Report[""]["pab"] = "Pab";
	$fieldToolTipsmined1_Report[""]["pab"] = "";
	$placeHoldersmined1_Report[""]["pab"] = "";
	$fieldLabelsmined1_Report[""]["paf"] = "Paf";
	$fieldToolTipsmined1_Report[""]["paf"] = "";
	$placeHoldersmined1_Report[""]["paf"] = "";
	$fieldLabelsmined1_Report[""]["escasos_recursos"] = "Escasos Recursos";
	$fieldToolTipsmined1_Report[""]["escasos_recursos"] = "";
	$placeHoldersmined1_Report[""]["escasos_recursos"] = "";
	$fieldLabelsmined1_Report[""]["incorpo_actividades_prod"] = "Incorpo Actividades Prod";
	$fieldToolTipsmined1_Report[""]["incorpo_actividades_prod"] = "";
	$placeHoldersmined1_Report[""]["incorpo_actividades_prod"] = "";
	$fieldLabelsmined1_Report[""]["lejania_ce"] = "Lejania Ce";
	$fieldToolTipsmined1_Report[""]["lejania_ce"] = "";
	$placeHoldersmined1_Report[""]["lejania_ce"] = "";
	$fieldLabelsmined1_Report[""]["violencia_pandilleril"] = "Violencia Pandilleril";
	$fieldToolTipsmined1_Report[""]["violencia_pandilleril"] = "";
	$placeHoldersmined1_Report[""]["violencia_pandilleril"] = "";
	$fieldLabelsmined1_Report[""]["embarazo"] = "Embarazo";
	$fieldToolTipsmined1_Report[""]["embarazo"] = "";
	$placeHoldersmined1_Report[""]["embarazo"] = "";
	$fieldLabelsmined1_Report[""]["acoso"] = "Acoso";
	$fieldToolTipsmined1_Report[""]["acoso"] = "";
	$placeHoldersmined1_Report[""]["acoso"] = "";
	$fieldLabelsmined1_Report[""]["violacion_sexual"] = "Violacion Sexual";
	$fieldToolTipsmined1_Report[""]["violacion_sexual"] = "";
	$placeHoldersmined1_Report[""]["violacion_sexual"] = "";
	$fieldLabelsmined1_Report[""]["cambio_domicilio"] = "Cambio Domicilio";
	$fieldToolTipsmined1_Report[""]["cambio_domicilio"] = "";
	$placeHoldersmined1_Report[""]["cambio_domicilio"] = "";
	$fieldLabelsmined1_Report[""]["migracion"] = "Migracion";
	$fieldToolTipsmined1_Report[""]["migracion"] = "";
	$placeHoldersmined1_Report[""]["migracion"] = "";
	$fieldLabelsmined1_Report[""]["bajo_rendimiento"] = "Bajo Rendimiento";
	$fieldToolTipsmined1_Report[""]["bajo_rendimiento"] = "";
	$placeHoldersmined1_Report[""]["bajo_rendimiento"] = "";
	$fieldLabelsmined1_Report[""]["enfermedad"] = "Enfermedad";
	$fieldToolTipsmined1_Report[""]["enfermedad"] = "";
	$placeHoldersmined1_Report[""]["enfermedad"] = "";
	$fieldLabelsmined1_Report[""]["prostitucion"] = "Prostitucion";
	$fieldToolTipsmined1_Report[""]["prostitucion"] = "";
	$placeHoldersmined1_Report[""]["prostitucion"] = "";
	$fieldLabelsmined1_Report[""]["dep_mun"] = "Dep Mun";
	$fieldToolTipsmined1_Report[""]["dep_mun"] = "";
	$placeHoldersmined1_Report[""]["dep_mun"] = "";
	$fieldLabelsmined1_Report[""]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipsmined1_Report[""]["max_matric2016"] = "";
	$placeHoldersmined1_Report[""]["max_matric2016"] = "";
	$fieldLabelsmined1_Report[""]["mrf2016"] = "Mrf2016";
	$fieldToolTipsmined1_Report[""]["mrf2016"] = "";
	$placeHoldersmined1_Report[""]["mrf2016"] = "";
	$fieldLabelsmined1_Report[""]["pab_af"] = "Pab Af";
	$fieldToolTipsmined1_Report[""]["pab_af"] = "";
	$placeHoldersmined1_Report[""]["pab_af"] = "";
	$fieldLabelsmined1_Report[""]["r_h"] = "R H";
	$fieldToolTipsmined1_Report[""]["r_h"] = "";
	$placeHoldersmined1_Report[""]["r_h"] = "";
	$fieldLabelsmined1_Report[""]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipsmined1_Report[""]["ipce_naive"] = "";
	$placeHoldersmined1_Report[""]["ipce_naive"] = "";
	$fieldLabelsmined1_Report[""]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipsmined1_Report[""]["ipce_0_1"] = "";
	$placeHoldersmined1_Report[""]["ipce_0_1"] = "";
	$fieldLabelsmined1_Report[""]["a_o"] = "AÑo";
	$fieldToolTipsmined1_Report[""]["a_o"] = "";
	$placeHoldersmined1_Report[""]["a_o"] = "";
	if (count($fieldToolTipsmined1_Report[""]))
		$tdatamined1_Report[".isUseToolTips"] = true;
}


	$tdatamined1_Report[".NCSearch"] = true;



$tdatamined1_Report[".shortTableName"] = "mined1_Report";
$tdatamined1_Report[".nSecOptions"] = 0;
$tdatamined1_Report[".recsPerRowPrint"] = 1;
$tdatamined1_Report[".mainTableOwnerID"] = "";
$tdatamined1_Report[".moveNext"] = 1;
$tdatamined1_Report[".entityType"] = 2;

$tdatamined1_Report[".strOriginalTableName"] = "mined1";

	



$tdatamined1_Report[".showAddInPopup"] = false;

$tdatamined1_Report[".showEditInPopup"] = false;

$tdatamined1_Report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamined1_Report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamined1_Report[".fieldsForRegister"] = array();

$tdatamined1_Report[".listAjax"] = false;

	$tdatamined1_Report[".audit"] = false;

	$tdatamined1_Report[".locking"] = false;



$tdatamined1_Report[".list"] = true;



$tdatamined1_Report[".reorderRecordsByHeader"] = true;





$tdatamined1_Report[".exportTo"] = true;

$tdatamined1_Report[".printFriendly"] = true;


$tdatamined1_Report[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamined1_Report[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamined1_Report[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamined1_Report[".searchSaving"] = false;
//

$tdatamined1_Report[".showSearchPanel"] = true;
		$tdatamined1_Report[".flexibleSearch"] = true;

$tdatamined1_Report[".isUseAjaxSuggest"] = true;






$tdatamined1_Report[".ajaxCodeSnippetAdded"] = false;

$tdatamined1_Report[".buttonsAdded"] = false;

$tdatamined1_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamined1_Report[".isUseTimeForSearch"] = false;





$tdatamined1_Report[".allSearchFields"] = array();
$tdatamined1_Report[".filterFields"] = array();
$tdatamined1_Report[".requiredSearchFields"] = array();

$tdatamined1_Report[".allSearchFields"][] = "idderespuesta";
	$tdatamined1_Report[".allSearchFields"][] = "codigo";
	$tdatamined1_Report[".allSearchFields"][] = "depto";
	$tdatamined1_Report[".allSearchFields"][] = "departamento";
	$tdatamined1_Report[".allSearchFields"][] = "mun";
	$tdatamined1_Report[".allSearchFields"][] = "municipio";
	$tdatamined1_Report[".allSearchFields"][] = "nombre_c_e";
	$tdatamined1_Report[".allSearchFields"][] = "x";
	$tdatamined1_Report[".allSearchFields"][] = "y";
	$tdatamined1_Report[".allSearchFields"][] = "sector_ppd";
	$tdatamined1_Report[".allSearchFields"][] = "matricula_inicial";
	$tdatamined1_Report[".allSearchFields"][] = "matricula_final";
	$tdatamined1_Report[".allSearchFields"][] = "maras";
	$tdatamined1_Report[".allSearchFields"][] = "robos";
	$tdatamined1_Report[".allSearchFields"][] = "hurtos";
	$tdatamined1_Report[".allSearchFields"][] = "drogas";
	$tdatamined1_Report[".allSearchFields"][] = "violaciones";
	$tdatamined1_Report[".allSearchFields"][] = "pab";
	$tdatamined1_Report[".allSearchFields"][] = "paf";
	$tdatamined1_Report[".allSearchFields"][] = "escasos_recursos";
	$tdatamined1_Report[".allSearchFields"][] = "incorpo_actividades_prod";
	$tdatamined1_Report[".allSearchFields"][] = "lejania_ce";
	$tdatamined1_Report[".allSearchFields"][] = "violencia_pandilleril";
	$tdatamined1_Report[".allSearchFields"][] = "embarazo";
	$tdatamined1_Report[".allSearchFields"][] = "acoso";
	$tdatamined1_Report[".allSearchFields"][] = "violacion_sexual";
	$tdatamined1_Report[".allSearchFields"][] = "cambio_domicilio";
	$tdatamined1_Report[".allSearchFields"][] = "migracion";
	$tdatamined1_Report[".allSearchFields"][] = "bajo_rendimiento";
	$tdatamined1_Report[".allSearchFields"][] = "enfermedad";
	$tdatamined1_Report[".allSearchFields"][] = "prostitucion";
	$tdatamined1_Report[".allSearchFields"][] = "dep_mun";
	$tdatamined1_Report[".allSearchFields"][] = "max_matric2016";
	$tdatamined1_Report[".allSearchFields"][] = "mrf2016";
	$tdatamined1_Report[".allSearchFields"][] = "pab_af";
	$tdatamined1_Report[".allSearchFields"][] = "r_h";
	$tdatamined1_Report[".allSearchFields"][] = "ipce_naive";
	$tdatamined1_Report[".allSearchFields"][] = "ipce_0_1";
	$tdatamined1_Report[".allSearchFields"][] = "aÑo";
	

$tdatamined1_Report[".googleLikeFields"] = array();
$tdatamined1_Report[".googleLikeFields"][] = "idderespuesta";
$tdatamined1_Report[".googleLikeFields"][] = "codigo";
$tdatamined1_Report[".googleLikeFields"][] = "depto";
$tdatamined1_Report[".googleLikeFields"][] = "departamento";
$tdatamined1_Report[".googleLikeFields"][] = "mun";
$tdatamined1_Report[".googleLikeFields"][] = "municipio";
$tdatamined1_Report[".googleLikeFields"][] = "nombre_c_e";
$tdatamined1_Report[".googleLikeFields"][] = "x";
$tdatamined1_Report[".googleLikeFields"][] = "y";
$tdatamined1_Report[".googleLikeFields"][] = "sector_ppd";
$tdatamined1_Report[".googleLikeFields"][] = "matricula_inicial";
$tdatamined1_Report[".googleLikeFields"][] = "matricula_final";
$tdatamined1_Report[".googleLikeFields"][] = "maras";
$tdatamined1_Report[".googleLikeFields"][] = "robos";
$tdatamined1_Report[".googleLikeFields"][] = "hurtos";
$tdatamined1_Report[".googleLikeFields"][] = "drogas";
$tdatamined1_Report[".googleLikeFields"][] = "violaciones";
$tdatamined1_Report[".googleLikeFields"][] = "pab";
$tdatamined1_Report[".googleLikeFields"][] = "paf";
$tdatamined1_Report[".googleLikeFields"][] = "escasos_recursos";
$tdatamined1_Report[".googleLikeFields"][] = "incorpo_actividades_prod";
$tdatamined1_Report[".googleLikeFields"][] = "lejania_ce";
$tdatamined1_Report[".googleLikeFields"][] = "violencia_pandilleril";
$tdatamined1_Report[".googleLikeFields"][] = "embarazo";
$tdatamined1_Report[".googleLikeFields"][] = "acoso";
$tdatamined1_Report[".googleLikeFields"][] = "violacion_sexual";
$tdatamined1_Report[".googleLikeFields"][] = "cambio_domicilio";
$tdatamined1_Report[".googleLikeFields"][] = "migracion";
$tdatamined1_Report[".googleLikeFields"][] = "bajo_rendimiento";
$tdatamined1_Report[".googleLikeFields"][] = "enfermedad";
$tdatamined1_Report[".googleLikeFields"][] = "prostitucion";
$tdatamined1_Report[".googleLikeFields"][] = "dep_mun";
$tdatamined1_Report[".googleLikeFields"][] = "max_matric2016";
$tdatamined1_Report[".googleLikeFields"][] = "mrf2016";
$tdatamined1_Report[".googleLikeFields"][] = "pab_af";
$tdatamined1_Report[".googleLikeFields"][] = "r_h";
$tdatamined1_Report[".googleLikeFields"][] = "ipce_naive";
$tdatamined1_Report[".googleLikeFields"][] = "ipce_0_1";
$tdatamined1_Report[".googleLikeFields"][] = "aÑo";


$tdatamined1_Report[".advSearchFields"] = array();
$tdatamined1_Report[".advSearchFields"][] = "idderespuesta";
$tdatamined1_Report[".advSearchFields"][] = "codigo";
$tdatamined1_Report[".advSearchFields"][] = "depto";
$tdatamined1_Report[".advSearchFields"][] = "departamento";
$tdatamined1_Report[".advSearchFields"][] = "mun";
$tdatamined1_Report[".advSearchFields"][] = "municipio";
$tdatamined1_Report[".advSearchFields"][] = "nombre_c_e";
$tdatamined1_Report[".advSearchFields"][] = "x";
$tdatamined1_Report[".advSearchFields"][] = "y";
$tdatamined1_Report[".advSearchFields"][] = "sector_ppd";
$tdatamined1_Report[".advSearchFields"][] = "matricula_inicial";
$tdatamined1_Report[".advSearchFields"][] = "matricula_final";
$tdatamined1_Report[".advSearchFields"][] = "maras";
$tdatamined1_Report[".advSearchFields"][] = "robos";
$tdatamined1_Report[".advSearchFields"][] = "hurtos";
$tdatamined1_Report[".advSearchFields"][] = "drogas";
$tdatamined1_Report[".advSearchFields"][] = "violaciones";
$tdatamined1_Report[".advSearchFields"][] = "pab";
$tdatamined1_Report[".advSearchFields"][] = "paf";
$tdatamined1_Report[".advSearchFields"][] = "escasos_recursos";
$tdatamined1_Report[".advSearchFields"][] = "incorpo_actividades_prod";
$tdatamined1_Report[".advSearchFields"][] = "lejania_ce";
$tdatamined1_Report[".advSearchFields"][] = "violencia_pandilleril";
$tdatamined1_Report[".advSearchFields"][] = "embarazo";
$tdatamined1_Report[".advSearchFields"][] = "acoso";
$tdatamined1_Report[".advSearchFields"][] = "violacion_sexual";
$tdatamined1_Report[".advSearchFields"][] = "cambio_domicilio";
$tdatamined1_Report[".advSearchFields"][] = "migracion";
$tdatamined1_Report[".advSearchFields"][] = "bajo_rendimiento";
$tdatamined1_Report[".advSearchFields"][] = "enfermedad";
$tdatamined1_Report[".advSearchFields"][] = "prostitucion";
$tdatamined1_Report[".advSearchFields"][] = "dep_mun";
$tdatamined1_Report[".advSearchFields"][] = "max_matric2016";
$tdatamined1_Report[".advSearchFields"][] = "mrf2016";
$tdatamined1_Report[".advSearchFields"][] = "pab_af";
$tdatamined1_Report[".advSearchFields"][] = "r_h";
$tdatamined1_Report[".advSearchFields"][] = "ipce_naive";
$tdatamined1_Report[".advSearchFields"][] = "ipce_0_1";
$tdatamined1_Report[".advSearchFields"][] = "aÑo";

$tdatamined1_Report[".tableType"] = "report";

$tdatamined1_Report[".printerPageOrientation"] = 0;
$tdatamined1_Report[".nPrinterPageScale"] = 100;

$tdatamined1_Report[".nPrinterSplitRecords"] = 40;

$tdatamined1_Report[".nPrinterPDFSplitRecords"] = 40;



$tdatamined1_Report[".geocodingEnabled"] = false;

//report settings
$tdatamined1_Report[".crossTabReport"] = true;

$tdatamined1_Report[".reportGroupFields"] = true;
$tdatamined1_Report[".pageSize"] = 5;
$tdatamined1_Report[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "municipio";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "departamento";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdatamined1_Report[".reportGroupFieldsData"] = $reportGroupFields;

$tdatamined1_Report[".reportHorizontalSummary"] = true;

$tdatamined1_Report[".isExistTotalFields"] = true;

$tdatamined1_Report[".reportVerticalSummary"] = true;



$tdatamined1_Report[".repShowDet"] = true;

$tdatamined1_Report[".reportLayout"] = 0;

//end of report settings




$tdatamined1_Report[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamined1_Report[".strOrderBy"] = $tstrOrderBy;

$tdatamined1_Report[".orderindexes"] = array();

$tdatamined1_Report[".sqlHead"] = "SELECT idderespuesta,  	codigo,  	depto,  	departamento,  	mun,  	municipio,  	nombre_c_e,  	x,  	y,  	sector_ppd,  	matricula_inicial,  	matricula_final,  	maras,  	robos,  	hurtos,  	drogas,  	violaciones,  	pab,  	paf,  	escasos_recursos,  	incorpo_actividades_prod,  	lejania_ce,  	violencia_pandilleril,  	embarazo,  	acoso,  	violacion_sexual,  	cambio_domicilio,  	migracion,  	bajo_rendimiento,  	enfermedad,  	prostitucion,  	dep_mun,  	max_matric2016,  	mrf2016,  	pab_af,  	r_h,  	ipce_naive,  	ipce_0_1,  	`aÑo`";
$tdatamined1_Report[".sqlFrom"] = "FROM mined1";
$tdatamined1_Report[".sqlWhereExpr"] = "";
$tdatamined1_Report[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamined1_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamined1_Report[".arrGroupsPerPage"] = $arrGPP;

$tdatamined1_Report[".highlightSearchResults"] = true;

$tableKeysmined1_Report = array();
$tdatamined1_Report[".Keys"] = $tableKeysmined1_Report;

$tdatamined1_Report[".listFields"] = array();
$tdatamined1_Report[".listFields"][] = "idderespuesta";
$tdatamined1_Report[".listFields"][] = "codigo";
$tdatamined1_Report[".listFields"][] = "depto";
$tdatamined1_Report[".listFields"][] = "departamento";
$tdatamined1_Report[".listFields"][] = "mun";
$tdatamined1_Report[".listFields"][] = "municipio";
$tdatamined1_Report[".listFields"][] = "nombre_c_e";
$tdatamined1_Report[".listFields"][] = "x";
$tdatamined1_Report[".listFields"][] = "y";
$tdatamined1_Report[".listFields"][] = "sector_ppd";
$tdatamined1_Report[".listFields"][] = "matricula_inicial";
$tdatamined1_Report[".listFields"][] = "matricula_final";
$tdatamined1_Report[".listFields"][] = "maras";
$tdatamined1_Report[".listFields"][] = "robos";
$tdatamined1_Report[".listFields"][] = "hurtos";
$tdatamined1_Report[".listFields"][] = "drogas";
$tdatamined1_Report[".listFields"][] = "violaciones";
$tdatamined1_Report[".listFields"][] = "pab";
$tdatamined1_Report[".listFields"][] = "paf";
$tdatamined1_Report[".listFields"][] = "escasos_recursos";
$tdatamined1_Report[".listFields"][] = "incorpo_actividades_prod";
$tdatamined1_Report[".listFields"][] = "lejania_ce";
$tdatamined1_Report[".listFields"][] = "violencia_pandilleril";
$tdatamined1_Report[".listFields"][] = "embarazo";
$tdatamined1_Report[".listFields"][] = "acoso";
$tdatamined1_Report[".listFields"][] = "violacion_sexual";
$tdatamined1_Report[".listFields"][] = "cambio_domicilio";
$tdatamined1_Report[".listFields"][] = "migracion";
$tdatamined1_Report[".listFields"][] = "bajo_rendimiento";
$tdatamined1_Report[".listFields"][] = "enfermedad";
$tdatamined1_Report[".listFields"][] = "prostitucion";
$tdatamined1_Report[".listFields"][] = "dep_mun";
$tdatamined1_Report[".listFields"][] = "max_matric2016";
$tdatamined1_Report[".listFields"][] = "mrf2016";
$tdatamined1_Report[".listFields"][] = "pab_af";
$tdatamined1_Report[".listFields"][] = "r_h";
$tdatamined1_Report[".listFields"][] = "ipce_naive";
$tdatamined1_Report[".listFields"][] = "ipce_0_1";
$tdatamined1_Report[".listFields"][] = "aÑo";

$tdatamined1_Report[".hideMobileList"] = array();


$tdatamined1_Report[".viewFields"] = array();
$tdatamined1_Report[".viewFields"][] = "idderespuesta";
$tdatamined1_Report[".viewFields"][] = "codigo";
$tdatamined1_Report[".viewFields"][] = "depto";
$tdatamined1_Report[".viewFields"][] = "departamento";
$tdatamined1_Report[".viewFields"][] = "mun";
$tdatamined1_Report[".viewFields"][] = "municipio";
$tdatamined1_Report[".viewFields"][] = "nombre_c_e";
$tdatamined1_Report[".viewFields"][] = "x";
$tdatamined1_Report[".viewFields"][] = "y";
$tdatamined1_Report[".viewFields"][] = "sector_ppd";
$tdatamined1_Report[".viewFields"][] = "matricula_inicial";
$tdatamined1_Report[".viewFields"][] = "matricula_final";
$tdatamined1_Report[".viewFields"][] = "maras";
$tdatamined1_Report[".viewFields"][] = "robos";
$tdatamined1_Report[".viewFields"][] = "hurtos";
$tdatamined1_Report[".viewFields"][] = "drogas";
$tdatamined1_Report[".viewFields"][] = "violaciones";
$tdatamined1_Report[".viewFields"][] = "pab";
$tdatamined1_Report[".viewFields"][] = "paf";
$tdatamined1_Report[".viewFields"][] = "escasos_recursos";
$tdatamined1_Report[".viewFields"][] = "incorpo_actividades_prod";
$tdatamined1_Report[".viewFields"][] = "lejania_ce";
$tdatamined1_Report[".viewFields"][] = "violencia_pandilleril";
$tdatamined1_Report[".viewFields"][] = "embarazo";
$tdatamined1_Report[".viewFields"][] = "acoso";
$tdatamined1_Report[".viewFields"][] = "violacion_sexual";
$tdatamined1_Report[".viewFields"][] = "cambio_domicilio";
$tdatamined1_Report[".viewFields"][] = "migracion";
$tdatamined1_Report[".viewFields"][] = "bajo_rendimiento";
$tdatamined1_Report[".viewFields"][] = "enfermedad";
$tdatamined1_Report[".viewFields"][] = "prostitucion";
$tdatamined1_Report[".viewFields"][] = "dep_mun";
$tdatamined1_Report[".viewFields"][] = "max_matric2016";
$tdatamined1_Report[".viewFields"][] = "mrf2016";
$tdatamined1_Report[".viewFields"][] = "pab_af";
$tdatamined1_Report[".viewFields"][] = "r_h";
$tdatamined1_Report[".viewFields"][] = "ipce_naive";
$tdatamined1_Report[".viewFields"][] = "ipce_0_1";
$tdatamined1_Report[".viewFields"][] = "aÑo";

$tdatamined1_Report[".addFields"] = array();
$tdatamined1_Report[".addFields"][] = "idderespuesta";
$tdatamined1_Report[".addFields"][] = "codigo";
$tdatamined1_Report[".addFields"][] = "depto";
$tdatamined1_Report[".addFields"][] = "departamento";
$tdatamined1_Report[".addFields"][] = "mun";
$tdatamined1_Report[".addFields"][] = "municipio";
$tdatamined1_Report[".addFields"][] = "nombre_c_e";
$tdatamined1_Report[".addFields"][] = "x";
$tdatamined1_Report[".addFields"][] = "y";
$tdatamined1_Report[".addFields"][] = "sector_ppd";
$tdatamined1_Report[".addFields"][] = "matricula_inicial";
$tdatamined1_Report[".addFields"][] = "matricula_final";
$tdatamined1_Report[".addFields"][] = "maras";
$tdatamined1_Report[".addFields"][] = "robos";
$tdatamined1_Report[".addFields"][] = "hurtos";
$tdatamined1_Report[".addFields"][] = "drogas";
$tdatamined1_Report[".addFields"][] = "violaciones";
$tdatamined1_Report[".addFields"][] = "pab";
$tdatamined1_Report[".addFields"][] = "paf";
$tdatamined1_Report[".addFields"][] = "escasos_recursos";
$tdatamined1_Report[".addFields"][] = "incorpo_actividades_prod";
$tdatamined1_Report[".addFields"][] = "lejania_ce";
$tdatamined1_Report[".addFields"][] = "violencia_pandilleril";
$tdatamined1_Report[".addFields"][] = "embarazo";
$tdatamined1_Report[".addFields"][] = "acoso";
$tdatamined1_Report[".addFields"][] = "violacion_sexual";
$tdatamined1_Report[".addFields"][] = "cambio_domicilio";
$tdatamined1_Report[".addFields"][] = "migracion";
$tdatamined1_Report[".addFields"][] = "bajo_rendimiento";
$tdatamined1_Report[".addFields"][] = "enfermedad";
$tdatamined1_Report[".addFields"][] = "prostitucion";
$tdatamined1_Report[".addFields"][] = "dep_mun";
$tdatamined1_Report[".addFields"][] = "max_matric2016";
$tdatamined1_Report[".addFields"][] = "mrf2016";
$tdatamined1_Report[".addFields"][] = "pab_af";
$tdatamined1_Report[".addFields"][] = "r_h";
$tdatamined1_Report[".addFields"][] = "ipce_naive";
$tdatamined1_Report[".addFields"][] = "ipce_0_1";
$tdatamined1_Report[".addFields"][] = "aÑo";

$tdatamined1_Report[".masterListFields"] = array();
$tdatamined1_Report[".masterListFields"][] = "idderespuesta";
$tdatamined1_Report[".masterListFields"][] = "codigo";
$tdatamined1_Report[".masterListFields"][] = "depto";
$tdatamined1_Report[".masterListFields"][] = "departamento";
$tdatamined1_Report[".masterListFields"][] = "mun";
$tdatamined1_Report[".masterListFields"][] = "municipio";
$tdatamined1_Report[".masterListFields"][] = "nombre_c_e";
$tdatamined1_Report[".masterListFields"][] = "x";
$tdatamined1_Report[".masterListFields"][] = "y";
$tdatamined1_Report[".masterListFields"][] = "sector_ppd";
$tdatamined1_Report[".masterListFields"][] = "matricula_inicial";
$tdatamined1_Report[".masterListFields"][] = "matricula_final";
$tdatamined1_Report[".masterListFields"][] = "maras";
$tdatamined1_Report[".masterListFields"][] = "robos";
$tdatamined1_Report[".masterListFields"][] = "hurtos";
$tdatamined1_Report[".masterListFields"][] = "drogas";
$tdatamined1_Report[".masterListFields"][] = "violaciones";
$tdatamined1_Report[".masterListFields"][] = "pab";
$tdatamined1_Report[".masterListFields"][] = "paf";
$tdatamined1_Report[".masterListFields"][] = "escasos_recursos";
$tdatamined1_Report[".masterListFields"][] = "incorpo_actividades_prod";
$tdatamined1_Report[".masterListFields"][] = "lejania_ce";
$tdatamined1_Report[".masterListFields"][] = "violencia_pandilleril";
$tdatamined1_Report[".masterListFields"][] = "embarazo";
$tdatamined1_Report[".masterListFields"][] = "acoso";
$tdatamined1_Report[".masterListFields"][] = "violacion_sexual";
$tdatamined1_Report[".masterListFields"][] = "cambio_domicilio";
$tdatamined1_Report[".masterListFields"][] = "migracion";
$tdatamined1_Report[".masterListFields"][] = "bajo_rendimiento";
$tdatamined1_Report[".masterListFields"][] = "enfermedad";
$tdatamined1_Report[".masterListFields"][] = "prostitucion";
$tdatamined1_Report[".masterListFields"][] = "dep_mun";
$tdatamined1_Report[".masterListFields"][] = "max_matric2016";
$tdatamined1_Report[".masterListFields"][] = "mrf2016";
$tdatamined1_Report[".masterListFields"][] = "pab_af";
$tdatamined1_Report[".masterListFields"][] = "r_h";
$tdatamined1_Report[".masterListFields"][] = "ipce_naive";
$tdatamined1_Report[".masterListFields"][] = "ipce_0_1";
$tdatamined1_Report[".masterListFields"][] = "aÑo";

$tdatamined1_Report[".inlineAddFields"] = array();
$tdatamined1_Report[".inlineAddFields"][] = "idderespuesta";
$tdatamined1_Report[".inlineAddFields"][] = "codigo";
$tdatamined1_Report[".inlineAddFields"][] = "depto";
$tdatamined1_Report[".inlineAddFields"][] = "departamento";
$tdatamined1_Report[".inlineAddFields"][] = "mun";
$tdatamined1_Report[".inlineAddFields"][] = "municipio";
$tdatamined1_Report[".inlineAddFields"][] = "nombre_c_e";
$tdatamined1_Report[".inlineAddFields"][] = "x";
$tdatamined1_Report[".inlineAddFields"][] = "y";
$tdatamined1_Report[".inlineAddFields"][] = "sector_ppd";
$tdatamined1_Report[".inlineAddFields"][] = "matricula_inicial";
$tdatamined1_Report[".inlineAddFields"][] = "matricula_final";
$tdatamined1_Report[".inlineAddFields"][] = "maras";
$tdatamined1_Report[".inlineAddFields"][] = "robos";
$tdatamined1_Report[".inlineAddFields"][] = "hurtos";
$tdatamined1_Report[".inlineAddFields"][] = "drogas";
$tdatamined1_Report[".inlineAddFields"][] = "violaciones";
$tdatamined1_Report[".inlineAddFields"][] = "pab";
$tdatamined1_Report[".inlineAddFields"][] = "paf";
$tdatamined1_Report[".inlineAddFields"][] = "escasos_recursos";
$tdatamined1_Report[".inlineAddFields"][] = "incorpo_actividades_prod";
$tdatamined1_Report[".inlineAddFields"][] = "lejania_ce";
$tdatamined1_Report[".inlineAddFields"][] = "violencia_pandilleril";
$tdatamined1_Report[".inlineAddFields"][] = "embarazo";
$tdatamined1_Report[".inlineAddFields"][] = "acoso";
$tdatamined1_Report[".inlineAddFields"][] = "violacion_sexual";
$tdatamined1_Report[".inlineAddFields"][] = "cambio_domicilio";
$tdatamined1_Report[".inlineAddFields"][] = "migracion";
$tdatamined1_Report[".inlineAddFields"][] = "bajo_rendimiento";
$tdatamined1_Report[".inlineAddFields"][] = "enfermedad";
$tdatamined1_Report[".inlineAddFields"][] = "prostitucion";
$tdatamined1_Report[".inlineAddFields"][] = "dep_mun";
$tdatamined1_Report[".inlineAddFields"][] = "max_matric2016";
$tdatamined1_Report[".inlineAddFields"][] = "mrf2016";
$tdatamined1_Report[".inlineAddFields"][] = "pab_af";
$tdatamined1_Report[".inlineAddFields"][] = "r_h";
$tdatamined1_Report[".inlineAddFields"][] = "ipce_naive";
$tdatamined1_Report[".inlineAddFields"][] = "ipce_0_1";
$tdatamined1_Report[".inlineAddFields"][] = "aÑo";

$tdatamined1_Report[".editFields"] = array();
$tdatamined1_Report[".editFields"][] = "idderespuesta";
$tdatamined1_Report[".editFields"][] = "codigo";
$tdatamined1_Report[".editFields"][] = "depto";
$tdatamined1_Report[".editFields"][] = "departamento";
$tdatamined1_Report[".editFields"][] = "mun";
$tdatamined1_Report[".editFields"][] = "municipio";
$tdatamined1_Report[".editFields"][] = "nombre_c_e";
$tdatamined1_Report[".editFields"][] = "x";
$tdatamined1_Report[".editFields"][] = "y";
$tdatamined1_Report[".editFields"][] = "sector_ppd";
$tdatamined1_Report[".editFields"][] = "matricula_inicial";
$tdatamined1_Report[".editFields"][] = "matricula_final";
$tdatamined1_Report[".editFields"][] = "maras";
$tdatamined1_Report[".editFields"][] = "robos";
$tdatamined1_Report[".editFields"][] = "hurtos";
$tdatamined1_Report[".editFields"][] = "drogas";
$tdatamined1_Report[".editFields"][] = "violaciones";
$tdatamined1_Report[".editFields"][] = "pab";
$tdatamined1_Report[".editFields"][] = "paf";
$tdatamined1_Report[".editFields"][] = "escasos_recursos";
$tdatamined1_Report[".editFields"][] = "incorpo_actividades_prod";
$tdatamined1_Report[".editFields"][] = "lejania_ce";
$tdatamined1_Report[".editFields"][] = "violencia_pandilleril";
$tdatamined1_Report[".editFields"][] = "embarazo";
$tdatamined1_Report[".editFields"][] = "acoso";
$tdatamined1_Report[".editFields"][] = "violacion_sexual";
$tdatamined1_Report[".editFields"][] = "cambio_domicilio";
$tdatamined1_Report[".editFields"][] = "migracion";
$tdatamined1_Report[".editFields"][] = "bajo_rendimiento";
$tdatamined1_Report[".editFields"][] = "enfermedad";
$tdatamined1_Report[".editFields"][] = "prostitucion";
$tdatamined1_Report[".editFields"][] = "dep_mun";
$tdatamined1_Report[".editFields"][] = "max_matric2016";
$tdatamined1_Report[".editFields"][] = "mrf2016";
$tdatamined1_Report[".editFields"][] = "pab_af";
$tdatamined1_Report[".editFields"][] = "r_h";
$tdatamined1_Report[".editFields"][] = "ipce_naive";
$tdatamined1_Report[".editFields"][] = "ipce_0_1";
$tdatamined1_Report[".editFields"][] = "aÑo";

$tdatamined1_Report[".inlineEditFields"] = array();
$tdatamined1_Report[".inlineEditFields"][] = "idderespuesta";
$tdatamined1_Report[".inlineEditFields"][] = "codigo";
$tdatamined1_Report[".inlineEditFields"][] = "depto";
$tdatamined1_Report[".inlineEditFields"][] = "departamento";
$tdatamined1_Report[".inlineEditFields"][] = "mun";
$tdatamined1_Report[".inlineEditFields"][] = "municipio";
$tdatamined1_Report[".inlineEditFields"][] = "nombre_c_e";
$tdatamined1_Report[".inlineEditFields"][] = "x";
$tdatamined1_Report[".inlineEditFields"][] = "y";
$tdatamined1_Report[".inlineEditFields"][] = "sector_ppd";
$tdatamined1_Report[".inlineEditFields"][] = "matricula_inicial";
$tdatamined1_Report[".inlineEditFields"][] = "matricula_final";
$tdatamined1_Report[".inlineEditFields"][] = "maras";
$tdatamined1_Report[".inlineEditFields"][] = "robos";
$tdatamined1_Report[".inlineEditFields"][] = "hurtos";
$tdatamined1_Report[".inlineEditFields"][] = "drogas";
$tdatamined1_Report[".inlineEditFields"][] = "violaciones";
$tdatamined1_Report[".inlineEditFields"][] = "pab";
$tdatamined1_Report[".inlineEditFields"][] = "paf";
$tdatamined1_Report[".inlineEditFields"][] = "escasos_recursos";
$tdatamined1_Report[".inlineEditFields"][] = "incorpo_actividades_prod";
$tdatamined1_Report[".inlineEditFields"][] = "lejania_ce";
$tdatamined1_Report[".inlineEditFields"][] = "violencia_pandilleril";
$tdatamined1_Report[".inlineEditFields"][] = "embarazo";
$tdatamined1_Report[".inlineEditFields"][] = "acoso";
$tdatamined1_Report[".inlineEditFields"][] = "violacion_sexual";
$tdatamined1_Report[".inlineEditFields"][] = "cambio_domicilio";
$tdatamined1_Report[".inlineEditFields"][] = "migracion";
$tdatamined1_Report[".inlineEditFields"][] = "bajo_rendimiento";
$tdatamined1_Report[".inlineEditFields"][] = "enfermedad";
$tdatamined1_Report[".inlineEditFields"][] = "prostitucion";
$tdatamined1_Report[".inlineEditFields"][] = "dep_mun";
$tdatamined1_Report[".inlineEditFields"][] = "max_matric2016";
$tdatamined1_Report[".inlineEditFields"][] = "mrf2016";
$tdatamined1_Report[".inlineEditFields"][] = "pab_af";
$tdatamined1_Report[".inlineEditFields"][] = "r_h";
$tdatamined1_Report[".inlineEditFields"][] = "ipce_naive";
$tdatamined1_Report[".inlineEditFields"][] = "ipce_0_1";
$tdatamined1_Report[".inlineEditFields"][] = "aÑo";

$tdatamined1_Report[".updateSelectedFields"] = array();
$tdatamined1_Report[".updateSelectedFields"][] = "idderespuesta";
$tdatamined1_Report[".updateSelectedFields"][] = "codigo";
$tdatamined1_Report[".updateSelectedFields"][] = "depto";
$tdatamined1_Report[".updateSelectedFields"][] = "departamento";
$tdatamined1_Report[".updateSelectedFields"][] = "mun";
$tdatamined1_Report[".updateSelectedFields"][] = "municipio";
$tdatamined1_Report[".updateSelectedFields"][] = "nombre_c_e";
$tdatamined1_Report[".updateSelectedFields"][] = "x";
$tdatamined1_Report[".updateSelectedFields"][] = "y";
$tdatamined1_Report[".updateSelectedFields"][] = "sector_ppd";
$tdatamined1_Report[".updateSelectedFields"][] = "matricula_inicial";
$tdatamined1_Report[".updateSelectedFields"][] = "matricula_final";
$tdatamined1_Report[".updateSelectedFields"][] = "maras";
$tdatamined1_Report[".updateSelectedFields"][] = "robos";
$tdatamined1_Report[".updateSelectedFields"][] = "hurtos";
$tdatamined1_Report[".updateSelectedFields"][] = "drogas";
$tdatamined1_Report[".updateSelectedFields"][] = "violaciones";
$tdatamined1_Report[".updateSelectedFields"][] = "pab";
$tdatamined1_Report[".updateSelectedFields"][] = "paf";
$tdatamined1_Report[".updateSelectedFields"][] = "escasos_recursos";
$tdatamined1_Report[".updateSelectedFields"][] = "incorpo_actividades_prod";
$tdatamined1_Report[".updateSelectedFields"][] = "lejania_ce";
$tdatamined1_Report[".updateSelectedFields"][] = "violencia_pandilleril";
$tdatamined1_Report[".updateSelectedFields"][] = "embarazo";
$tdatamined1_Report[".updateSelectedFields"][] = "acoso";
$tdatamined1_Report[".updateSelectedFields"][] = "violacion_sexual";
$tdatamined1_Report[".updateSelectedFields"][] = "cambio_domicilio";
$tdatamined1_Report[".updateSelectedFields"][] = "migracion";
$tdatamined1_Report[".updateSelectedFields"][] = "bajo_rendimiento";
$tdatamined1_Report[".updateSelectedFields"][] = "enfermedad";
$tdatamined1_Report[".updateSelectedFields"][] = "prostitucion";
$tdatamined1_Report[".updateSelectedFields"][] = "dep_mun";
$tdatamined1_Report[".updateSelectedFields"][] = "max_matric2016";
$tdatamined1_Report[".updateSelectedFields"][] = "mrf2016";
$tdatamined1_Report[".updateSelectedFields"][] = "pab_af";
$tdatamined1_Report[".updateSelectedFields"][] = "r_h";
$tdatamined1_Report[".updateSelectedFields"][] = "ipce_naive";
$tdatamined1_Report[".updateSelectedFields"][] = "ipce_0_1";
$tdatamined1_Report[".updateSelectedFields"][] = "aÑo";


$tdatamined1_Report[".exportFields"] = array();
$tdatamined1_Report[".exportFields"][] = "idderespuesta";
$tdatamined1_Report[".exportFields"][] = "codigo";
$tdatamined1_Report[".exportFields"][] = "depto";
$tdatamined1_Report[".exportFields"][] = "departamento";
$tdatamined1_Report[".exportFields"][] = "mun";
$tdatamined1_Report[".exportFields"][] = "municipio";
$tdatamined1_Report[".exportFields"][] = "nombre_c_e";
$tdatamined1_Report[".exportFields"][] = "x";
$tdatamined1_Report[".exportFields"][] = "y";
$tdatamined1_Report[".exportFields"][] = "sector_ppd";
$tdatamined1_Report[".exportFields"][] = "matricula_inicial";
$tdatamined1_Report[".exportFields"][] = "matricula_final";
$tdatamined1_Report[".exportFields"][] = "maras";
$tdatamined1_Report[".exportFields"][] = "robos";
$tdatamined1_Report[".exportFields"][] = "hurtos";
$tdatamined1_Report[".exportFields"][] = "drogas";
$tdatamined1_Report[".exportFields"][] = "violaciones";
$tdatamined1_Report[".exportFields"][] = "pab";
$tdatamined1_Report[".exportFields"][] = "paf";
$tdatamined1_Report[".exportFields"][] = "escasos_recursos";
$tdatamined1_Report[".exportFields"][] = "incorpo_actividades_prod";
$tdatamined1_Report[".exportFields"][] = "lejania_ce";
$tdatamined1_Report[".exportFields"][] = "violencia_pandilleril";
$tdatamined1_Report[".exportFields"][] = "embarazo";
$tdatamined1_Report[".exportFields"][] = "acoso";
$tdatamined1_Report[".exportFields"][] = "violacion_sexual";
$tdatamined1_Report[".exportFields"][] = "cambio_domicilio";
$tdatamined1_Report[".exportFields"][] = "migracion";
$tdatamined1_Report[".exportFields"][] = "bajo_rendimiento";
$tdatamined1_Report[".exportFields"][] = "enfermedad";
$tdatamined1_Report[".exportFields"][] = "prostitucion";
$tdatamined1_Report[".exportFields"][] = "dep_mun";
$tdatamined1_Report[".exportFields"][] = "max_matric2016";
$tdatamined1_Report[".exportFields"][] = "mrf2016";
$tdatamined1_Report[".exportFields"][] = "pab_af";
$tdatamined1_Report[".exportFields"][] = "r_h";
$tdatamined1_Report[".exportFields"][] = "ipce_naive";
$tdatamined1_Report[".exportFields"][] = "ipce_0_1";
$tdatamined1_Report[".exportFields"][] = "aÑo";

$tdatamined1_Report[".importFields"] = array();
$tdatamined1_Report[".importFields"][] = "idderespuesta";
$tdatamined1_Report[".importFields"][] = "codigo";
$tdatamined1_Report[".importFields"][] = "depto";
$tdatamined1_Report[".importFields"][] = "departamento";
$tdatamined1_Report[".importFields"][] = "mun";
$tdatamined1_Report[".importFields"][] = "municipio";
$tdatamined1_Report[".importFields"][] = "nombre_c_e";
$tdatamined1_Report[".importFields"][] = "x";
$tdatamined1_Report[".importFields"][] = "y";
$tdatamined1_Report[".importFields"][] = "sector_ppd";
$tdatamined1_Report[".importFields"][] = "matricula_inicial";
$tdatamined1_Report[".importFields"][] = "matricula_final";
$tdatamined1_Report[".importFields"][] = "maras";
$tdatamined1_Report[".importFields"][] = "robos";
$tdatamined1_Report[".importFields"][] = "hurtos";
$tdatamined1_Report[".importFields"][] = "drogas";
$tdatamined1_Report[".importFields"][] = "violaciones";
$tdatamined1_Report[".importFields"][] = "pab";
$tdatamined1_Report[".importFields"][] = "paf";
$tdatamined1_Report[".importFields"][] = "escasos_recursos";
$tdatamined1_Report[".importFields"][] = "incorpo_actividades_prod";
$tdatamined1_Report[".importFields"][] = "lejania_ce";
$tdatamined1_Report[".importFields"][] = "violencia_pandilleril";
$tdatamined1_Report[".importFields"][] = "embarazo";
$tdatamined1_Report[".importFields"][] = "acoso";
$tdatamined1_Report[".importFields"][] = "violacion_sexual";
$tdatamined1_Report[".importFields"][] = "cambio_domicilio";
$tdatamined1_Report[".importFields"][] = "migracion";
$tdatamined1_Report[".importFields"][] = "bajo_rendimiento";
$tdatamined1_Report[".importFields"][] = "enfermedad";
$tdatamined1_Report[".importFields"][] = "prostitucion";
$tdatamined1_Report[".importFields"][] = "dep_mun";
$tdatamined1_Report[".importFields"][] = "max_matric2016";
$tdatamined1_Report[".importFields"][] = "mrf2016";
$tdatamined1_Report[".importFields"][] = "pab_af";
$tdatamined1_Report[".importFields"][] = "r_h";
$tdatamined1_Report[".importFields"][] = "ipce_naive";
$tdatamined1_Report[".importFields"][] = "ipce_0_1";
$tdatamined1_Report[".importFields"][] = "aÑo";

$tdatamined1_Report[".printFields"] = array();
$tdatamined1_Report[".printFields"][] = "idderespuesta";
$tdatamined1_Report[".printFields"][] = "codigo";
$tdatamined1_Report[".printFields"][] = "depto";
$tdatamined1_Report[".printFields"][] = "departamento";
$tdatamined1_Report[".printFields"][] = "mun";
$tdatamined1_Report[".printFields"][] = "municipio";
$tdatamined1_Report[".printFields"][] = "nombre_c_e";
$tdatamined1_Report[".printFields"][] = "x";
$tdatamined1_Report[".printFields"][] = "y";
$tdatamined1_Report[".printFields"][] = "sector_ppd";
$tdatamined1_Report[".printFields"][] = "matricula_inicial";
$tdatamined1_Report[".printFields"][] = "matricula_final";
$tdatamined1_Report[".printFields"][] = "maras";
$tdatamined1_Report[".printFields"][] = "robos";
$tdatamined1_Report[".printFields"][] = "hurtos";
$tdatamined1_Report[".printFields"][] = "drogas";
$tdatamined1_Report[".printFields"][] = "violaciones";
$tdatamined1_Report[".printFields"][] = "pab";
$tdatamined1_Report[".printFields"][] = "paf";
$tdatamined1_Report[".printFields"][] = "escasos_recursos";
$tdatamined1_Report[".printFields"][] = "incorpo_actividades_prod";
$tdatamined1_Report[".printFields"][] = "lejania_ce";
$tdatamined1_Report[".printFields"][] = "violencia_pandilleril";
$tdatamined1_Report[".printFields"][] = "embarazo";
$tdatamined1_Report[".printFields"][] = "acoso";
$tdatamined1_Report[".printFields"][] = "violacion_sexual";
$tdatamined1_Report[".printFields"][] = "cambio_domicilio";
$tdatamined1_Report[".printFields"][] = "migracion";
$tdatamined1_Report[".printFields"][] = "bajo_rendimiento";
$tdatamined1_Report[".printFields"][] = "enfermedad";
$tdatamined1_Report[".printFields"][] = "prostitucion";
$tdatamined1_Report[".printFields"][] = "dep_mun";
$tdatamined1_Report[".printFields"][] = "max_matric2016";
$tdatamined1_Report[".printFields"][] = "mrf2016";
$tdatamined1_Report[".printFields"][] = "pab_af";
$tdatamined1_Report[".printFields"][] = "r_h";
$tdatamined1_Report[".printFields"][] = "ipce_naive";
$tdatamined1_Report[".printFields"][] = "ipce_0_1";
$tdatamined1_Report[".printFields"][] = "aÑo";

//	idderespuesta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idderespuesta";
	$fdata["GoodName"] = "idderespuesta";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","idderespuesta");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["idderespuesta"] = $fdata;
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","codigo");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["codigo"] = $fdata;
//	depto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "depto";
	$fdata["GoodName"] = "depto";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","depto");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["depto"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","departamento");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["departamento"] = $fdata;
//	mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mun";
	$fdata["GoodName"] = "mun";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","mun");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["mun"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","municipio");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["municipio"] = $fdata;
//	nombre_c_e
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nombre_c_e";
	$fdata["GoodName"] = "nombre_c_e";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","nombre_c_e");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["nombre_c_e"] = $fdata;
//	x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "x";
	$fdata["GoodName"] = "x";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","x");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["x"] = $fdata;
//	y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "y";
	$fdata["GoodName"] = "y";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","y");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["y"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","sector_ppd");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["sector_ppd"] = $fdata;
//	matricula_inicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "matricula_inicial";
	$fdata["GoodName"] = "matricula_inicial";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","matricula_inicial");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["matricula_inicial"] = $fdata;
//	matricula_final
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "matricula_final";
	$fdata["GoodName"] = "matricula_final";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","matricula_final");
	$fdata["FieldType"] = 5;

		// report field settings
				$fdata["isTotalMax"] = true;
		// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["matricula_final"] = $fdata;
//	maras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "maras";
	$fdata["GoodName"] = "maras";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","maras");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["maras"] = $fdata;
//	robos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "robos";
	$fdata["GoodName"] = "robos";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","robos");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["robos"] = $fdata;
//	hurtos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "hurtos";
	$fdata["GoodName"] = "hurtos";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","hurtos");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["hurtos"] = $fdata;
//	drogas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "drogas";
	$fdata["GoodName"] = "drogas";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","drogas");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["drogas"] = $fdata;
//	violaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "violaciones";
	$fdata["GoodName"] = "violaciones";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","violaciones");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["violaciones"] = $fdata;
//	pab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "pab";
	$fdata["GoodName"] = "pab";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","pab");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["pab"] = $fdata;
//	paf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "paf";
	$fdata["GoodName"] = "paf";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","paf");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["paf"] = $fdata;
//	escasos_recursos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "escasos_recursos";
	$fdata["GoodName"] = "escasos_recursos";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","escasos_recursos");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["escasos_recursos"] = $fdata;
//	incorpo_actividades_prod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "incorpo_actividades_prod";
	$fdata["GoodName"] = "incorpo_actividades_prod";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","incorpo_actividades_prod");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["incorpo_actividades_prod"] = $fdata;
//	lejania_ce
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "lejania_ce";
	$fdata["GoodName"] = "lejania_ce";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","lejania_ce");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["lejania_ce"] = $fdata;
//	violencia_pandilleril
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "violencia_pandilleril";
	$fdata["GoodName"] = "violencia_pandilleril";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","violencia_pandilleril");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["violencia_pandilleril"] = $fdata;
//	embarazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "embarazo";
	$fdata["GoodName"] = "embarazo";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","embarazo");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["embarazo"] = $fdata;
//	acoso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "acoso";
	$fdata["GoodName"] = "acoso";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","acoso");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["acoso"] = $fdata;
//	violacion_sexual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "violacion_sexual";
	$fdata["GoodName"] = "violacion_sexual";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","violacion_sexual");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["violacion_sexual"] = $fdata;
//	cambio_domicilio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "cambio_domicilio";
	$fdata["GoodName"] = "cambio_domicilio";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","cambio_domicilio");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["cambio_domicilio"] = $fdata;
//	migracion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "migracion";
	$fdata["GoodName"] = "migracion";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","migracion");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["migracion"] = $fdata;
//	bajo_rendimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "bajo_rendimiento";
	$fdata["GoodName"] = "bajo_rendimiento";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","bajo_rendimiento");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["bajo_rendimiento"] = $fdata;
//	enfermedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "enfermedad";
	$fdata["GoodName"] = "enfermedad";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","enfermedad");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["enfermedad"] = $fdata;
//	prostitucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "prostitucion";
	$fdata["GoodName"] = "prostitucion";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","prostitucion");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["prostitucion"] = $fdata;
//	dep_mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "dep_mun";
	$fdata["GoodName"] = "dep_mun";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","dep_mun");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["dep_mun"] = $fdata;
//	max_matric2016
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "max_matric2016";
	$fdata["GoodName"] = "max_matric2016";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","max_matric2016");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["max_matric2016"] = $fdata;
//	mrf2016
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "mrf2016";
	$fdata["GoodName"] = "mrf2016";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","mrf2016");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["mrf2016"] = $fdata;
//	pab_af
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "pab_af";
	$fdata["GoodName"] = "pab_af";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","pab_af");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["pab_af"] = $fdata;
//	r_h
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "r_h";
	$fdata["GoodName"] = "r_h";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","r_h");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["r_h"] = $fdata;
//	ipce_naive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "ipce_naive";
	$fdata["GoodName"] = "ipce_naive";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","ipce_naive");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["ipce_naive"] = $fdata;
//	ipce_0_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "ipce_0_1";
	$fdata["GoodName"] = "ipce_0_1";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","ipce_0_1");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["ipce_0_1"] = $fdata;
//	aÑo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "aÑo";
	$fdata["GoodName"] = "a_o";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined1_Report","a_o");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined1_Report["aÑo"] = $fdata;


$tables_data["mined1 Report"]=&$tdatamined1_Report;
$field_labels["mined1_Report"] = &$fieldLabelsmined1_Report;
$fieldToolTips["mined1_Report"] = &$fieldToolTipsmined1_Report;
$placeHolders["mined1_Report"] = &$placeHoldersmined1_Report;
$page_titles["mined1_Report"] = &$pageTitlesmined1_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["mined1 Report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mined1_Report()
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
	"m_srcTableName" => "mined1 Report"
));

$proto6["m_sql"] = "idderespuesta";
$proto6["m_srcTableName"] = "mined1 Report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto8["m_sql"] = "codigo";
$proto8["m_srcTableName"] = "mined1 Report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "depto",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto10["m_sql"] = "depto";
$proto10["m_srcTableName"] = "mined1 Report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto12["m_sql"] = "departamento";
$proto12["m_srcTableName"] = "mined1 Report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "mun",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto14["m_sql"] = "mun";
$proto14["m_srcTableName"] = "mined1 Report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto16["m_sql"] = "municipio";
$proto16["m_srcTableName"] = "mined1 Report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_c_e",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto18["m_sql"] = "nombre_c_e";
$proto18["m_srcTableName"] = "mined1 Report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "x",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto20["m_sql"] = "x";
$proto20["m_srcTableName"] = "mined1 Report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "y",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto22["m_sql"] = "y";
$proto22["m_srcTableName"] = "mined1 Report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto24["m_sql"] = "sector_ppd";
$proto24["m_srcTableName"] = "mined1 Report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "matricula_inicial",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto26["m_sql"] = "matricula_inicial";
$proto26["m_srcTableName"] = "mined1 Report";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "matricula_final",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto28["m_sql"] = "matricula_final";
$proto28["m_srcTableName"] = "mined1 Report";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "maras",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto30["m_sql"] = "maras";
$proto30["m_srcTableName"] = "mined1 Report";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "robos",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto32["m_sql"] = "robos";
$proto32["m_srcTableName"] = "mined1 Report";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "hurtos",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto34["m_sql"] = "hurtos";
$proto34["m_srcTableName"] = "mined1 Report";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "drogas",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto36["m_sql"] = "drogas";
$proto36["m_srcTableName"] = "mined1 Report";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "violaciones",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto38["m_sql"] = "violaciones";
$proto38["m_srcTableName"] = "mined1 Report";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "pab",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto40["m_sql"] = "pab";
$proto40["m_srcTableName"] = "mined1 Report";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "paf",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto42["m_sql"] = "paf";
$proto42["m_srcTableName"] = "mined1 Report";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "escasos_recursos",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto44["m_sql"] = "escasos_recursos";
$proto44["m_srcTableName"] = "mined1 Report";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "incorpo_actividades_prod",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto46["m_sql"] = "incorpo_actividades_prod";
$proto46["m_srcTableName"] = "mined1 Report";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "lejania_ce",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto48["m_sql"] = "lejania_ce";
$proto48["m_srcTableName"] = "mined1 Report";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "violencia_pandilleril",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto50["m_sql"] = "violencia_pandilleril";
$proto50["m_srcTableName"] = "mined1 Report";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "embarazo",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto52["m_sql"] = "embarazo";
$proto52["m_srcTableName"] = "mined1 Report";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "acoso",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto54["m_sql"] = "acoso";
$proto54["m_srcTableName"] = "mined1 Report";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "violacion_sexual",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto56["m_sql"] = "violacion_sexual";
$proto56["m_srcTableName"] = "mined1 Report";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "cambio_domicilio",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto58["m_sql"] = "cambio_domicilio";
$proto58["m_srcTableName"] = "mined1 Report";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "migracion",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto60["m_sql"] = "migracion";
$proto60["m_srcTableName"] = "mined1 Report";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "bajo_rendimiento",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto62["m_sql"] = "bajo_rendimiento";
$proto62["m_srcTableName"] = "mined1 Report";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "enfermedad",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto64["m_sql"] = "enfermedad";
$proto64["m_srcTableName"] = "mined1 Report";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "prostitucion",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto66["m_sql"] = "prostitucion";
$proto66["m_srcTableName"] = "mined1 Report";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "dep_mun",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto68["m_sql"] = "dep_mun";
$proto68["m_srcTableName"] = "mined1 Report";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "max_matric2016",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto70["m_sql"] = "max_matric2016";
$proto70["m_srcTableName"] = "mined1 Report";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "mrf2016",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto72["m_sql"] = "mrf2016";
$proto72["m_srcTableName"] = "mined1 Report";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "pab_af",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto74["m_sql"] = "pab_af";
$proto74["m_srcTableName"] = "mined1 Report";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "r_h",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto76["m_sql"] = "r_h";
$proto76["m_srcTableName"] = "mined1 Report";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "ipce_naive",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto78["m_sql"] = "ipce_naive";
$proto78["m_srcTableName"] = "mined1 Report";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "ipce_0_1",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto80["m_sql"] = "ipce_0_1";
$proto80["m_srcTableName"] = "mined1 Report";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined1 Report"
));

$proto82["m_sql"] = "`aÑo`";
$proto82["m_srcTableName"] = "mined1 Report";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto84=array();
$proto84["m_link"] = "SQLL_MAIN";
			$proto85=array();
$proto85["m_strName"] = "mined1";
$proto85["m_srcTableName"] = "mined1 Report";
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
$proto84["m_srcTableName"] = "mined1 Report";
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
$proto0["m_srcTableName"]="mined1 Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mined1_Report = createSqlQuery_mined1_Report();


	
		;

																																							

$tdatamined1_Report[".sqlquery"] = $queryData_mined1_Report;

$tableEvents["mined1 Report"] = new eventsBase;
$tdatamined1_Report[".hasEvents"] = false;

?>