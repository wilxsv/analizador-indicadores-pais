<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMined_Maximo_IPCE = array();
	$tdataMined_Maximo_IPCE[".truncateText"] = true;
	$tdataMined_Maximo_IPCE[".NumberOfChars"] = 80;
	$tdataMined_Maximo_IPCE[".ShortName"] = "Mined_Maximo_IPCE";
	$tdataMined_Maximo_IPCE[".OwnerID"] = "";
	$tdataMined_Maximo_IPCE[".OriginalTable"] = "mined";

//	field labels
$fieldLabelsMined_Maximo_IPCE = array();
$fieldToolTipsMined_Maximo_IPCE = array();
$pageTitlesMined_Maximo_IPCE = array();
$placeHoldersMined_Maximo_IPCE = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsMined_Maximo_IPCE["Spanish"] = array();
	$fieldToolTipsMined_Maximo_IPCE["Spanish"] = array();
	$placeHoldersMined_Maximo_IPCE["Spanish"] = array();
	$pageTitlesMined_Maximo_IPCE["Spanish"] = array();
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["departamento"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["departamento"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["municipio"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["municipio"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["ipce_naive"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["ipce_naive"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["MAX_ipce_naive_"] = "MAX(ipce Naive)";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["MAX_ipce_naive_"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["MAX_ipce_naive_"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["codigo"] = "Codigo";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["codigo"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["codigo"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["idderespuesta"] = "Idderespuesta";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["idderespuesta"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["idderespuesta"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["depto"] = "Depto";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["depto"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["depto"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["mun"] = "Mun";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["mun"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["mun"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["nombre_c_e"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["nombre_c_e"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["x"] = "X";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["x"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["x"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["y"] = "Y";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["y"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["y"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["sector_ppd"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["sector_ppd"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["matricula_inicial"] = "Matricula Inicial";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["matricula_inicial"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["matricula_inicial"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["matricula_final"] = "Matricula Final";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["matricula_final"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["matricula_final"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["maras"] = "Maras";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["maras"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["maras"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["robos"] = "Robos";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["robos"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["robos"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["hurtos"] = "Hurtos";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["hurtos"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["hurtos"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["drogas"] = "Drogas";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["drogas"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["drogas"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["violaciones"] = "Violaciones";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["violaciones"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["violaciones"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["pab"] = "Pab";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["pab"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["pab"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["paf"] = "Paf";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["paf"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["paf"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["escasos_recursos"] = "Escasos Recursos";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["escasos_recursos"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["escasos_recursos"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["incorpo_actividades_prod"] = "Incorpo Actividades Prod";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["incorpo_actividades_prod"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["incorpo_actividades_prod"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["lejania_ce"] = "Lejania Ce";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["lejania_ce"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["lejania_ce"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["violencia_pandilleril"] = "Violencia Pandilleril";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["violencia_pandilleril"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["violencia_pandilleril"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["embarazo"] = "Embarazo";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["embarazo"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["embarazo"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["acoso"] = "Acoso";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["acoso"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["acoso"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["violacion_sexual"] = "Violacion Sexual";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["violacion_sexual"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["violacion_sexual"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["cambio_domicilio"] = "Cambio Domicilio";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["cambio_domicilio"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["cambio_domicilio"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["migracion"] = "Migracion";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["migracion"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["migracion"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["bajo_rendimiento"] = "Bajo Rendimiento";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["bajo_rendimiento"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["bajo_rendimiento"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["enfermedad"] = "Enfermedad";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["enfermedad"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["enfermedad"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["prostitucion"] = "Prostitucion";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["prostitucion"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["prostitucion"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["dep_mun"] = "Dep Mun";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["dep_mun"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["dep_mun"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["max_matric2016"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["max_matric2016"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["mrf2016"] = "Mrf2016";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["mrf2016"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["mrf2016"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["pab_af"] = "Pab Af";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["pab_af"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["pab_af"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["r_h"] = "R H";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["r_h"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["r_h"] = "";
	$fieldLabelsMined_Maximo_IPCE["Spanish"]["a_o"] = "AÑo";
	$fieldToolTipsMined_Maximo_IPCE["Spanish"]["a_o"] = "";
	$placeHoldersMined_Maximo_IPCE["Spanish"]["a_o"] = "";
	if (count($fieldToolTipsMined_Maximo_IPCE["Spanish"]))
		$tdataMined_Maximo_IPCE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMined_Maximo_IPCE["English"] = array();
	$fieldToolTipsMined_Maximo_IPCE["English"] = array();
	$placeHoldersMined_Maximo_IPCE["English"] = array();
	$pageTitlesMined_Maximo_IPCE["English"] = array();
	$fieldLabelsMined_Maximo_IPCE["English"]["departamento"] = "Departamento";
	$fieldToolTipsMined_Maximo_IPCE["English"]["departamento"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["departamento"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["municipio"] = "Municipio";
	$fieldToolTipsMined_Maximo_IPCE["English"]["municipio"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["municipio"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipsMined_Maximo_IPCE["English"]["ipce_naive"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["ipce_naive"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["MAX_ipce_naive_"] = "MAX(ipce Naive)";
	$fieldToolTipsMined_Maximo_IPCE["English"]["MAX_ipce_naive_"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["MAX_ipce_naive_"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["codigo"] = "Codigo";
	$fieldToolTipsMined_Maximo_IPCE["English"]["codigo"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["codigo"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["idderespuesta"] = "Idderespuesta";
	$fieldToolTipsMined_Maximo_IPCE["English"]["idderespuesta"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["idderespuesta"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["depto"] = "Depto";
	$fieldToolTipsMined_Maximo_IPCE["English"]["depto"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["depto"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["mun"] = "Mun";
	$fieldToolTipsMined_Maximo_IPCE["English"]["mun"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["mun"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsMined_Maximo_IPCE["English"]["nombre_c_e"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["nombre_c_e"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["x"] = "X";
	$fieldToolTipsMined_Maximo_IPCE["English"]["x"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["x"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["y"] = "Y";
	$fieldToolTipsMined_Maximo_IPCE["English"]["y"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["y"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsMined_Maximo_IPCE["English"]["sector_ppd"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["sector_ppd"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["matricula_inicial"] = "Matricula Inicial";
	$fieldToolTipsMined_Maximo_IPCE["English"]["matricula_inicial"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["matricula_inicial"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["matricula_final"] = "Matricula Final";
	$fieldToolTipsMined_Maximo_IPCE["English"]["matricula_final"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["matricula_final"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["maras"] = "Maras";
	$fieldToolTipsMined_Maximo_IPCE["English"]["maras"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["maras"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["robos"] = "Robos";
	$fieldToolTipsMined_Maximo_IPCE["English"]["robos"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["robos"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["hurtos"] = "Hurtos";
	$fieldToolTipsMined_Maximo_IPCE["English"]["hurtos"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["hurtos"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["drogas"] = "Drogas";
	$fieldToolTipsMined_Maximo_IPCE["English"]["drogas"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["drogas"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["violaciones"] = "Violaciones";
	$fieldToolTipsMined_Maximo_IPCE["English"]["violaciones"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["violaciones"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["pab"] = "Pab";
	$fieldToolTipsMined_Maximo_IPCE["English"]["pab"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["pab"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["paf"] = "Paf";
	$fieldToolTipsMined_Maximo_IPCE["English"]["paf"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["paf"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["escasos_recursos"] = "Escasos Recursos";
	$fieldToolTipsMined_Maximo_IPCE["English"]["escasos_recursos"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["escasos_recursos"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["incorpo_actividades_prod"] = "Incorpo Actividades Prod";
	$fieldToolTipsMined_Maximo_IPCE["English"]["incorpo_actividades_prod"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["incorpo_actividades_prod"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["lejania_ce"] = "Lejania Ce";
	$fieldToolTipsMined_Maximo_IPCE["English"]["lejania_ce"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["lejania_ce"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["violencia_pandilleril"] = "Violencia Pandilleril";
	$fieldToolTipsMined_Maximo_IPCE["English"]["violencia_pandilleril"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["violencia_pandilleril"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["embarazo"] = "Embarazo";
	$fieldToolTipsMined_Maximo_IPCE["English"]["embarazo"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["embarazo"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["acoso"] = "Acoso";
	$fieldToolTipsMined_Maximo_IPCE["English"]["acoso"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["acoso"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["violacion_sexual"] = "Violacion Sexual";
	$fieldToolTipsMined_Maximo_IPCE["English"]["violacion_sexual"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["violacion_sexual"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["cambio_domicilio"] = "Cambio Domicilio";
	$fieldToolTipsMined_Maximo_IPCE["English"]["cambio_domicilio"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["cambio_domicilio"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["migracion"] = "Migracion";
	$fieldToolTipsMined_Maximo_IPCE["English"]["migracion"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["migracion"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["bajo_rendimiento"] = "Bajo Rendimiento";
	$fieldToolTipsMined_Maximo_IPCE["English"]["bajo_rendimiento"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["bajo_rendimiento"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["enfermedad"] = "Enfermedad";
	$fieldToolTipsMined_Maximo_IPCE["English"]["enfermedad"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["enfermedad"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["prostitucion"] = "Prostitucion";
	$fieldToolTipsMined_Maximo_IPCE["English"]["prostitucion"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["prostitucion"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["dep_mun"] = "Dep Mun";
	$fieldToolTipsMined_Maximo_IPCE["English"]["dep_mun"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["dep_mun"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipsMined_Maximo_IPCE["English"]["max_matric2016"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["max_matric2016"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["mrf2016"] = "Mrf2016";
	$fieldToolTipsMined_Maximo_IPCE["English"]["mrf2016"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["mrf2016"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["pab_af"] = "Pab Af";
	$fieldToolTipsMined_Maximo_IPCE["English"]["pab_af"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["pab_af"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["r_h"] = "R H";
	$fieldToolTipsMined_Maximo_IPCE["English"]["r_h"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["r_h"] = "";
	$fieldLabelsMined_Maximo_IPCE["English"]["a_o"] = "AÑo";
	$fieldToolTipsMined_Maximo_IPCE["English"]["a_o"] = "";
	$placeHoldersMined_Maximo_IPCE["English"]["a_o"] = "";
	if (count($fieldToolTipsMined_Maximo_IPCE["English"]))
		$tdataMined_Maximo_IPCE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMined_Maximo_IPCE[""] = array();
	$fieldToolTipsMined_Maximo_IPCE[""] = array();
	$placeHoldersMined_Maximo_IPCE[""] = array();
	$pageTitlesMined_Maximo_IPCE[""] = array();
	$fieldLabelsMined_Maximo_IPCE[""]["departamento"] = "Departamento";
	$fieldToolTipsMined_Maximo_IPCE[""]["departamento"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["departamento"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["municipio"] = "Municipio";
	$fieldToolTipsMined_Maximo_IPCE[""]["municipio"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["municipio"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipsMined_Maximo_IPCE[""]["ipce_naive"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["ipce_naive"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["MAX_ipce_naive_"] = "MAX(ipce Naive)";
	$fieldToolTipsMined_Maximo_IPCE[""]["MAX_ipce_naive_"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["MAX_ipce_naive_"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["codigo"] = "Codigo";
	$fieldToolTipsMined_Maximo_IPCE[""]["codigo"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["codigo"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["idderespuesta"] = "Idderespuesta";
	$fieldToolTipsMined_Maximo_IPCE[""]["idderespuesta"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["idderespuesta"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["depto"] = "Depto";
	$fieldToolTipsMined_Maximo_IPCE[""]["depto"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["depto"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["mun"] = "Mun";
	$fieldToolTipsMined_Maximo_IPCE[""]["mun"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["mun"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsMined_Maximo_IPCE[""]["nombre_c_e"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["nombre_c_e"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["x"] = "X";
	$fieldToolTipsMined_Maximo_IPCE[""]["x"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["x"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["y"] = "Y";
	$fieldToolTipsMined_Maximo_IPCE[""]["y"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["y"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsMined_Maximo_IPCE[""]["sector_ppd"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["sector_ppd"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["matricula_inicial"] = "Matricula Inicial";
	$fieldToolTipsMined_Maximo_IPCE[""]["matricula_inicial"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["matricula_inicial"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["matricula_final"] = "Matricula Final";
	$fieldToolTipsMined_Maximo_IPCE[""]["matricula_final"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["matricula_final"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["maras"] = "Maras";
	$fieldToolTipsMined_Maximo_IPCE[""]["maras"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["maras"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["robos"] = "Robos";
	$fieldToolTipsMined_Maximo_IPCE[""]["robos"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["robos"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["hurtos"] = "Hurtos";
	$fieldToolTipsMined_Maximo_IPCE[""]["hurtos"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["hurtos"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["drogas"] = "Drogas";
	$fieldToolTipsMined_Maximo_IPCE[""]["drogas"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["drogas"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["violaciones"] = "Violaciones";
	$fieldToolTipsMined_Maximo_IPCE[""]["violaciones"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["violaciones"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["pab"] = "Pab";
	$fieldToolTipsMined_Maximo_IPCE[""]["pab"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["pab"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["paf"] = "Paf";
	$fieldToolTipsMined_Maximo_IPCE[""]["paf"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["paf"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["escasos_recursos"] = "Escasos Recursos";
	$fieldToolTipsMined_Maximo_IPCE[""]["escasos_recursos"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["escasos_recursos"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["incorpo_actividades_prod"] = "Incorpo Actividades Prod";
	$fieldToolTipsMined_Maximo_IPCE[""]["incorpo_actividades_prod"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["incorpo_actividades_prod"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["lejania_ce"] = "Lejania Ce";
	$fieldToolTipsMined_Maximo_IPCE[""]["lejania_ce"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["lejania_ce"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["violencia_pandilleril"] = "Violencia Pandilleril";
	$fieldToolTipsMined_Maximo_IPCE[""]["violencia_pandilleril"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["violencia_pandilleril"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["embarazo"] = "Embarazo";
	$fieldToolTipsMined_Maximo_IPCE[""]["embarazo"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["embarazo"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["acoso"] = "Acoso";
	$fieldToolTipsMined_Maximo_IPCE[""]["acoso"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["acoso"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["violacion_sexual"] = "Violacion Sexual";
	$fieldToolTipsMined_Maximo_IPCE[""]["violacion_sexual"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["violacion_sexual"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["cambio_domicilio"] = "Cambio Domicilio";
	$fieldToolTipsMined_Maximo_IPCE[""]["cambio_domicilio"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["cambio_domicilio"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["migracion"] = "Migracion";
	$fieldToolTipsMined_Maximo_IPCE[""]["migracion"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["migracion"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["bajo_rendimiento"] = "Bajo Rendimiento";
	$fieldToolTipsMined_Maximo_IPCE[""]["bajo_rendimiento"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["bajo_rendimiento"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["enfermedad"] = "Enfermedad";
	$fieldToolTipsMined_Maximo_IPCE[""]["enfermedad"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["enfermedad"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["prostitucion"] = "Prostitucion";
	$fieldToolTipsMined_Maximo_IPCE[""]["prostitucion"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["prostitucion"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["dep_mun"] = "Dep Mun";
	$fieldToolTipsMined_Maximo_IPCE[""]["dep_mun"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["dep_mun"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipsMined_Maximo_IPCE[""]["max_matric2016"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["max_matric2016"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["mrf2016"] = "Mrf2016";
	$fieldToolTipsMined_Maximo_IPCE[""]["mrf2016"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["mrf2016"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["pab_af"] = "Pab Af";
	$fieldToolTipsMined_Maximo_IPCE[""]["pab_af"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["pab_af"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["r_h"] = "R H";
	$fieldToolTipsMined_Maximo_IPCE[""]["r_h"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["r_h"] = "";
	$fieldLabelsMined_Maximo_IPCE[""]["a_o"] = "AÑo";
	$fieldToolTipsMined_Maximo_IPCE[""]["a_o"] = "";
	$placeHoldersMined_Maximo_IPCE[""]["a_o"] = "";
	if (count($fieldToolTipsMined_Maximo_IPCE[""]))
		$tdataMined_Maximo_IPCE[".isUseToolTips"] = true;
}


	$tdataMined_Maximo_IPCE[".NCSearch"] = true;



$tdataMined_Maximo_IPCE[".shortTableName"] = "Mined_Maximo_IPCE";
$tdataMined_Maximo_IPCE[".nSecOptions"] = 0;
$tdataMined_Maximo_IPCE[".recsPerRowPrint"] = 1;
$tdataMined_Maximo_IPCE[".mainTableOwnerID"] = "";
$tdataMined_Maximo_IPCE[".moveNext"] = 1;
$tdataMined_Maximo_IPCE[".entityType"] = 1;

$tdataMined_Maximo_IPCE[".strOriginalTableName"] = "mined";

	



$tdataMined_Maximo_IPCE[".showAddInPopup"] = false;

$tdataMined_Maximo_IPCE[".showEditInPopup"] = false;

$tdataMined_Maximo_IPCE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMined_Maximo_IPCE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMined_Maximo_IPCE[".fieldsForRegister"] = array();

	$tdataMined_Maximo_IPCE[".listAjax"] = true;

	$tdataMined_Maximo_IPCE[".audit"] = false;

	$tdataMined_Maximo_IPCE[".locking"] = false;



$tdataMined_Maximo_IPCE[".list"] = true;



$tdataMined_Maximo_IPCE[".reorderRecordsByHeader"] = true;
$tdataMined_Maximo_IPCE[".createSortByDropdown"] = true;
$tdataMined_Maximo_IPCE[".strSortControlSettingsJSON"] = "[]";




$tdataMined_Maximo_IPCE[".import"] = true;

$tdataMined_Maximo_IPCE[".exportTo"] = true;

$tdataMined_Maximo_IPCE[".printFriendly"] = true;


$tdataMined_Maximo_IPCE[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataMined_Maximo_IPCE[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataMined_Maximo_IPCE[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataMined_Maximo_IPCE[".searchSaving"] = false;
//

$tdataMined_Maximo_IPCE[".showSearchPanel"] = true;
		$tdataMined_Maximo_IPCE[".flexibleSearch"] = true;

$tdataMined_Maximo_IPCE[".isUseAjaxSuggest"] = true;

$tdataMined_Maximo_IPCE[".rowHighlite"] = true;





$tdataMined_Maximo_IPCE[".ajaxCodeSnippetAdded"] = false;

$tdataMined_Maximo_IPCE[".buttonsAdded"] = false;

$tdataMined_Maximo_IPCE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMined_Maximo_IPCE[".isUseTimeForSearch"] = false;



$tdataMined_Maximo_IPCE[".badgeColor"] = "00C2C5";


$tdataMined_Maximo_IPCE[".allSearchFields"] = array();
$tdataMined_Maximo_IPCE[".filterFields"] = array();
$tdataMined_Maximo_IPCE[".requiredSearchFields"] = array();

$tdataMined_Maximo_IPCE[".allSearchFields"][] = "MAX(ipce_naive)";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "codigo";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "idderespuesta";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "depto";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "departamento";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "mun";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "municipio";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "nombre_c_e";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "x";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "y";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "sector_ppd";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "matricula_inicial";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "matricula_final";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "maras";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "robos";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "hurtos";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "drogas";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "violaciones";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "pab";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "paf";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "escasos_recursos";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "incorpo_actividades_prod";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "lejania_ce";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "violencia_pandilleril";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "embarazo";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "acoso";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "violacion_sexual";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "cambio_domicilio";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "migracion";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "bajo_rendimiento";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "enfermedad";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "prostitucion";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "dep_mun";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "max_matric2016";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "mrf2016";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "pab_af";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "r_h";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "ipce_naive";
	$tdataMined_Maximo_IPCE[".allSearchFields"][] = "aÑo";
	

$tdataMined_Maximo_IPCE[".googleLikeFields"] = array();
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "MAX(ipce_naive)";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "codigo";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "idderespuesta";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "depto";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "departamento";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "mun";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "municipio";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "nombre_c_e";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "x";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "y";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "sector_ppd";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "matricula_inicial";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "matricula_final";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "maras";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "robos";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "hurtos";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "drogas";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "violaciones";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "pab";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "paf";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "escasos_recursos";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "incorpo_actividades_prod";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "lejania_ce";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "violencia_pandilleril";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "embarazo";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "acoso";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "violacion_sexual";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "cambio_domicilio";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "migracion";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "bajo_rendimiento";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "enfermedad";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "prostitucion";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "dep_mun";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "max_matric2016";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "mrf2016";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "pab_af";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "r_h";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "ipce_naive";
$tdataMined_Maximo_IPCE[".googleLikeFields"][] = "aÑo";


$tdataMined_Maximo_IPCE[".advSearchFields"] = array();
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "MAX(ipce_naive)";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "codigo";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "idderespuesta";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "depto";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "departamento";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "mun";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "municipio";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "nombre_c_e";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "x";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "y";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "sector_ppd";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "matricula_inicial";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "matricula_final";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "maras";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "robos";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "hurtos";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "drogas";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "violaciones";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "pab";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "paf";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "escasos_recursos";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "incorpo_actividades_prod";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "lejania_ce";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "violencia_pandilleril";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "embarazo";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "acoso";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "violacion_sexual";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "cambio_domicilio";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "migracion";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "bajo_rendimiento";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "enfermedad";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "prostitucion";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "dep_mun";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "max_matric2016";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "mrf2016";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "pab_af";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "r_h";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "ipce_naive";
$tdataMined_Maximo_IPCE[".advSearchFields"][] = "aÑo";

$tdataMined_Maximo_IPCE[".tableType"] = "list";

$tdataMined_Maximo_IPCE[".printerPageOrientation"] = 0;
$tdataMined_Maximo_IPCE[".nPrinterPageScale"] = 100;

$tdataMined_Maximo_IPCE[".nPrinterSplitRecords"] = 40;

$tdataMined_Maximo_IPCE[".nPrinterPDFSplitRecords"] = 40;



$tdataMined_Maximo_IPCE[".geocodingEnabled"] = true;
$tdataMined_Maximo_IPCE[".geocodingData"] = array();
$tdataMined_Maximo_IPCE[".geocodingData"]["latField"] = "y";
$tdataMined_Maximo_IPCE[".geocodingData"]["lngField"] = "x";
$tdataMined_Maximo_IPCE[".geocodingData"]["addressFields"] = array();
	$tdataMined_Maximo_IPCE[".geocodingData"]["addressFields"][] = "departamento";
	$tdataMined_Maximo_IPCE[".geocodingData"]["addressFields"][] = "dep_mun";





$tdataMined_Maximo_IPCE[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataMined_Maximo_IPCE[".pageSize"] = 20;

$tdataMined_Maximo_IPCE[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY ipce_0_1 DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMined_Maximo_IPCE[".strOrderBy"] = $tstrOrderBy;

$tdataMined_Maximo_IPCE[".orderindexes"] = array();

$tdataMined_Maximo_IPCE[".sqlHead"] = "SELECT MAX(ipce_naive) AS `MAX(ipce_naive)`,  codigo,  idderespuesta,  depto,  departamento,  mun,  municipio,  nombre_c_e,  x,  y,  sector_ppd,  matricula_inicial,  matricula_final,  maras,  robos,  hurtos,  drogas,  violaciones,  pab,  paf,  escasos_recursos,  incorpo_actividades_prod,  lejania_ce,  violencia_pandilleril,  embarazo,  acoso,  violacion_sexual,  cambio_domicilio,  migracion,  bajo_rendimiento,  enfermedad,  prostitucion,  dep_mun,  max_matric2016,  mrf2016,  pab_af,  r_h,  ipce_naive,  `aÑo`";
$tdataMined_Maximo_IPCE[".sqlFrom"] = "FROM mined";
$tdataMined_Maximo_IPCE[".sqlWhereExpr"] = "";
$tdataMined_Maximo_IPCE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMined_Maximo_IPCE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMined_Maximo_IPCE[".arrGroupsPerPage"] = $arrGPP;

$tdataMined_Maximo_IPCE[".highlightSearchResults"] = true;

$tableKeysMined_Maximo_IPCE = array();
$tdataMined_Maximo_IPCE[".Keys"] = $tableKeysMined_Maximo_IPCE;

$tdataMined_Maximo_IPCE[".listFields"] = array();
$tdataMined_Maximo_IPCE[".listFields"][] = "MAX(ipce_naive)";
$tdataMined_Maximo_IPCE[".listFields"][] = "codigo";
$tdataMined_Maximo_IPCE[".listFields"][] = "idderespuesta";
$tdataMined_Maximo_IPCE[".listFields"][] = "depto";
$tdataMined_Maximo_IPCE[".listFields"][] = "departamento";
$tdataMined_Maximo_IPCE[".listFields"][] = "mun";
$tdataMined_Maximo_IPCE[".listFields"][] = "municipio";
$tdataMined_Maximo_IPCE[".listFields"][] = "nombre_c_e";
$tdataMined_Maximo_IPCE[".listFields"][] = "x";
$tdataMined_Maximo_IPCE[".listFields"][] = "y";
$tdataMined_Maximo_IPCE[".listFields"][] = "sector_ppd";
$tdataMined_Maximo_IPCE[".listFields"][] = "matricula_inicial";
$tdataMined_Maximo_IPCE[".listFields"][] = "matricula_final";
$tdataMined_Maximo_IPCE[".listFields"][] = "maras";
$tdataMined_Maximo_IPCE[".listFields"][] = "robos";
$tdataMined_Maximo_IPCE[".listFields"][] = "hurtos";
$tdataMined_Maximo_IPCE[".listFields"][] = "drogas";
$tdataMined_Maximo_IPCE[".listFields"][] = "violaciones";
$tdataMined_Maximo_IPCE[".listFields"][] = "pab";
$tdataMined_Maximo_IPCE[".listFields"][] = "paf";
$tdataMined_Maximo_IPCE[".listFields"][] = "escasos_recursos";
$tdataMined_Maximo_IPCE[".listFields"][] = "incorpo_actividades_prod";
$tdataMined_Maximo_IPCE[".listFields"][] = "lejania_ce";
$tdataMined_Maximo_IPCE[".listFields"][] = "violencia_pandilleril";
$tdataMined_Maximo_IPCE[".listFields"][] = "embarazo";
$tdataMined_Maximo_IPCE[".listFields"][] = "acoso";
$tdataMined_Maximo_IPCE[".listFields"][] = "violacion_sexual";
$tdataMined_Maximo_IPCE[".listFields"][] = "cambio_domicilio";
$tdataMined_Maximo_IPCE[".listFields"][] = "migracion";
$tdataMined_Maximo_IPCE[".listFields"][] = "bajo_rendimiento";
$tdataMined_Maximo_IPCE[".listFields"][] = "enfermedad";
$tdataMined_Maximo_IPCE[".listFields"][] = "prostitucion";
$tdataMined_Maximo_IPCE[".listFields"][] = "dep_mun";
$tdataMined_Maximo_IPCE[".listFields"][] = "max_matric2016";
$tdataMined_Maximo_IPCE[".listFields"][] = "mrf2016";
$tdataMined_Maximo_IPCE[".listFields"][] = "pab_af";
$tdataMined_Maximo_IPCE[".listFields"][] = "r_h";
$tdataMined_Maximo_IPCE[".listFields"][] = "ipce_naive";
$tdataMined_Maximo_IPCE[".listFields"][] = "aÑo";

$tdataMined_Maximo_IPCE[".hideMobileList"] = array();


$tdataMined_Maximo_IPCE[".viewFields"] = array();
$tdataMined_Maximo_IPCE[".viewFields"][] = "MAX(ipce_naive)";
$tdataMined_Maximo_IPCE[".viewFields"][] = "codigo";
$tdataMined_Maximo_IPCE[".viewFields"][] = "idderespuesta";
$tdataMined_Maximo_IPCE[".viewFields"][] = "depto";
$tdataMined_Maximo_IPCE[".viewFields"][] = "departamento";
$tdataMined_Maximo_IPCE[".viewFields"][] = "mun";
$tdataMined_Maximo_IPCE[".viewFields"][] = "municipio";
$tdataMined_Maximo_IPCE[".viewFields"][] = "nombre_c_e";
$tdataMined_Maximo_IPCE[".viewFields"][] = "x";
$tdataMined_Maximo_IPCE[".viewFields"][] = "y";
$tdataMined_Maximo_IPCE[".viewFields"][] = "sector_ppd";
$tdataMined_Maximo_IPCE[".viewFields"][] = "matricula_inicial";
$tdataMined_Maximo_IPCE[".viewFields"][] = "matricula_final";
$tdataMined_Maximo_IPCE[".viewFields"][] = "maras";
$tdataMined_Maximo_IPCE[".viewFields"][] = "robos";
$tdataMined_Maximo_IPCE[".viewFields"][] = "hurtos";
$tdataMined_Maximo_IPCE[".viewFields"][] = "drogas";
$tdataMined_Maximo_IPCE[".viewFields"][] = "violaciones";
$tdataMined_Maximo_IPCE[".viewFields"][] = "pab";
$tdataMined_Maximo_IPCE[".viewFields"][] = "paf";
$tdataMined_Maximo_IPCE[".viewFields"][] = "escasos_recursos";
$tdataMined_Maximo_IPCE[".viewFields"][] = "incorpo_actividades_prod";
$tdataMined_Maximo_IPCE[".viewFields"][] = "lejania_ce";
$tdataMined_Maximo_IPCE[".viewFields"][] = "violencia_pandilleril";
$tdataMined_Maximo_IPCE[".viewFields"][] = "embarazo";
$tdataMined_Maximo_IPCE[".viewFields"][] = "acoso";
$tdataMined_Maximo_IPCE[".viewFields"][] = "violacion_sexual";
$tdataMined_Maximo_IPCE[".viewFields"][] = "cambio_domicilio";
$tdataMined_Maximo_IPCE[".viewFields"][] = "migracion";
$tdataMined_Maximo_IPCE[".viewFields"][] = "bajo_rendimiento";
$tdataMined_Maximo_IPCE[".viewFields"][] = "enfermedad";
$tdataMined_Maximo_IPCE[".viewFields"][] = "prostitucion";
$tdataMined_Maximo_IPCE[".viewFields"][] = "dep_mun";
$tdataMined_Maximo_IPCE[".viewFields"][] = "max_matric2016";
$tdataMined_Maximo_IPCE[".viewFields"][] = "mrf2016";
$tdataMined_Maximo_IPCE[".viewFields"][] = "pab_af";
$tdataMined_Maximo_IPCE[".viewFields"][] = "r_h";
$tdataMined_Maximo_IPCE[".viewFields"][] = "ipce_naive";
$tdataMined_Maximo_IPCE[".viewFields"][] = "aÑo";

$tdataMined_Maximo_IPCE[".addFields"] = array();
$tdataMined_Maximo_IPCE[".addFields"][] = "codigo";
$tdataMined_Maximo_IPCE[".addFields"][] = "idderespuesta";
$tdataMined_Maximo_IPCE[".addFields"][] = "depto";
$tdataMined_Maximo_IPCE[".addFields"][] = "departamento";
$tdataMined_Maximo_IPCE[".addFields"][] = "mun";
$tdataMined_Maximo_IPCE[".addFields"][] = "municipio";
$tdataMined_Maximo_IPCE[".addFields"][] = "nombre_c_e";
$tdataMined_Maximo_IPCE[".addFields"][] = "x";
$tdataMined_Maximo_IPCE[".addFields"][] = "y";
$tdataMined_Maximo_IPCE[".addFields"][] = "sector_ppd";
$tdataMined_Maximo_IPCE[".addFields"][] = "matricula_inicial";
$tdataMined_Maximo_IPCE[".addFields"][] = "matricula_final";
$tdataMined_Maximo_IPCE[".addFields"][] = "maras";
$tdataMined_Maximo_IPCE[".addFields"][] = "robos";
$tdataMined_Maximo_IPCE[".addFields"][] = "hurtos";
$tdataMined_Maximo_IPCE[".addFields"][] = "drogas";
$tdataMined_Maximo_IPCE[".addFields"][] = "violaciones";
$tdataMined_Maximo_IPCE[".addFields"][] = "pab";
$tdataMined_Maximo_IPCE[".addFields"][] = "paf";
$tdataMined_Maximo_IPCE[".addFields"][] = "escasos_recursos";
$tdataMined_Maximo_IPCE[".addFields"][] = "incorpo_actividades_prod";
$tdataMined_Maximo_IPCE[".addFields"][] = "lejania_ce";
$tdataMined_Maximo_IPCE[".addFields"][] = "violencia_pandilleril";
$tdataMined_Maximo_IPCE[".addFields"][] = "embarazo";
$tdataMined_Maximo_IPCE[".addFields"][] = "acoso";
$tdataMined_Maximo_IPCE[".addFields"][] = "violacion_sexual";
$tdataMined_Maximo_IPCE[".addFields"][] = "cambio_domicilio";
$tdataMined_Maximo_IPCE[".addFields"][] = "migracion";
$tdataMined_Maximo_IPCE[".addFields"][] = "bajo_rendimiento";
$tdataMined_Maximo_IPCE[".addFields"][] = "enfermedad";
$tdataMined_Maximo_IPCE[".addFields"][] = "prostitucion";
$tdataMined_Maximo_IPCE[".addFields"][] = "dep_mun";
$tdataMined_Maximo_IPCE[".addFields"][] = "max_matric2016";
$tdataMined_Maximo_IPCE[".addFields"][] = "mrf2016";
$tdataMined_Maximo_IPCE[".addFields"][] = "pab_af";
$tdataMined_Maximo_IPCE[".addFields"][] = "r_h";
$tdataMined_Maximo_IPCE[".addFields"][] = "ipce_naive";
$tdataMined_Maximo_IPCE[".addFields"][] = "aÑo";

$tdataMined_Maximo_IPCE[".masterListFields"] = array();
$tdataMined_Maximo_IPCE[".masterListFields"][] = "MAX(ipce_naive)";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "codigo";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "idderespuesta";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "depto";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "departamento";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "mun";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "municipio";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "nombre_c_e";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "x";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "y";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "sector_ppd";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "matricula_inicial";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "matricula_final";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "maras";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "robos";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "hurtos";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "drogas";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "violaciones";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "pab";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "paf";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "escasos_recursos";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "incorpo_actividades_prod";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "lejania_ce";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "violencia_pandilleril";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "embarazo";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "acoso";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "violacion_sexual";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "cambio_domicilio";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "migracion";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "bajo_rendimiento";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "enfermedad";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "prostitucion";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "dep_mun";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "max_matric2016";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "mrf2016";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "pab_af";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "r_h";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "ipce_naive";
$tdataMined_Maximo_IPCE[".masterListFields"][] = "aÑo";

$tdataMined_Maximo_IPCE[".inlineAddFields"] = array();
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "codigo";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "idderespuesta";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "depto";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "departamento";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "mun";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "municipio";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "nombre_c_e";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "x";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "y";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "sector_ppd";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "matricula_inicial";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "matricula_final";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "maras";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "robos";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "hurtos";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "drogas";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "violaciones";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "pab";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "paf";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "escasos_recursos";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "incorpo_actividades_prod";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "lejania_ce";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "violencia_pandilleril";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "embarazo";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "acoso";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "violacion_sexual";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "cambio_domicilio";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "migracion";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "bajo_rendimiento";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "enfermedad";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "prostitucion";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "dep_mun";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "max_matric2016";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "mrf2016";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "pab_af";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "r_h";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "ipce_naive";
$tdataMined_Maximo_IPCE[".inlineAddFields"][] = "aÑo";

$tdataMined_Maximo_IPCE[".editFields"] = array();
$tdataMined_Maximo_IPCE[".editFields"][] = "codigo";
$tdataMined_Maximo_IPCE[".editFields"][] = "idderespuesta";
$tdataMined_Maximo_IPCE[".editFields"][] = "depto";
$tdataMined_Maximo_IPCE[".editFields"][] = "departamento";
$tdataMined_Maximo_IPCE[".editFields"][] = "mun";
$tdataMined_Maximo_IPCE[".editFields"][] = "municipio";
$tdataMined_Maximo_IPCE[".editFields"][] = "nombre_c_e";
$tdataMined_Maximo_IPCE[".editFields"][] = "x";
$tdataMined_Maximo_IPCE[".editFields"][] = "y";
$tdataMined_Maximo_IPCE[".editFields"][] = "sector_ppd";
$tdataMined_Maximo_IPCE[".editFields"][] = "matricula_inicial";
$tdataMined_Maximo_IPCE[".editFields"][] = "matricula_final";
$tdataMined_Maximo_IPCE[".editFields"][] = "maras";
$tdataMined_Maximo_IPCE[".editFields"][] = "robos";
$tdataMined_Maximo_IPCE[".editFields"][] = "hurtos";
$tdataMined_Maximo_IPCE[".editFields"][] = "drogas";
$tdataMined_Maximo_IPCE[".editFields"][] = "violaciones";
$tdataMined_Maximo_IPCE[".editFields"][] = "pab";
$tdataMined_Maximo_IPCE[".editFields"][] = "paf";
$tdataMined_Maximo_IPCE[".editFields"][] = "escasos_recursos";
$tdataMined_Maximo_IPCE[".editFields"][] = "incorpo_actividades_prod";
$tdataMined_Maximo_IPCE[".editFields"][] = "lejania_ce";
$tdataMined_Maximo_IPCE[".editFields"][] = "violencia_pandilleril";
$tdataMined_Maximo_IPCE[".editFields"][] = "embarazo";
$tdataMined_Maximo_IPCE[".editFields"][] = "acoso";
$tdataMined_Maximo_IPCE[".editFields"][] = "violacion_sexual";
$tdataMined_Maximo_IPCE[".editFields"][] = "cambio_domicilio";
$tdataMined_Maximo_IPCE[".editFields"][] = "migracion";
$tdataMined_Maximo_IPCE[".editFields"][] = "bajo_rendimiento";
$tdataMined_Maximo_IPCE[".editFields"][] = "enfermedad";
$tdataMined_Maximo_IPCE[".editFields"][] = "prostitucion";
$tdataMined_Maximo_IPCE[".editFields"][] = "dep_mun";
$tdataMined_Maximo_IPCE[".editFields"][] = "max_matric2016";
$tdataMined_Maximo_IPCE[".editFields"][] = "mrf2016";
$tdataMined_Maximo_IPCE[".editFields"][] = "pab_af";
$tdataMined_Maximo_IPCE[".editFields"][] = "r_h";
$tdataMined_Maximo_IPCE[".editFields"][] = "ipce_naive";
$tdataMined_Maximo_IPCE[".editFields"][] = "aÑo";

$tdataMined_Maximo_IPCE[".inlineEditFields"] = array();
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "codigo";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "idderespuesta";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "depto";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "departamento";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "mun";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "municipio";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "nombre_c_e";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "x";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "y";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "sector_ppd";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "matricula_inicial";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "matricula_final";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "maras";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "robos";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "hurtos";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "drogas";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "violaciones";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "pab";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "paf";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "escasos_recursos";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "incorpo_actividades_prod";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "lejania_ce";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "violencia_pandilleril";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "embarazo";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "acoso";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "violacion_sexual";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "cambio_domicilio";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "migracion";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "bajo_rendimiento";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "enfermedad";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "prostitucion";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "dep_mun";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "max_matric2016";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "mrf2016";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "pab_af";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "r_h";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "ipce_naive";
$tdataMined_Maximo_IPCE[".inlineEditFields"][] = "aÑo";

$tdataMined_Maximo_IPCE[".updateSelectedFields"] = array();
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "codigo";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "idderespuesta";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "depto";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "departamento";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "mun";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "municipio";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "nombre_c_e";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "x";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "y";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "sector_ppd";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "matricula_inicial";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "matricula_final";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "maras";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "robos";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "hurtos";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "drogas";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "violaciones";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "pab";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "paf";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "escasos_recursos";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "incorpo_actividades_prod";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "lejania_ce";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "violencia_pandilleril";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "embarazo";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "acoso";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "violacion_sexual";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "cambio_domicilio";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "migracion";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "bajo_rendimiento";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "enfermedad";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "prostitucion";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "dep_mun";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "max_matric2016";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "mrf2016";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "pab_af";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "r_h";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "ipce_naive";
$tdataMined_Maximo_IPCE[".updateSelectedFields"][] = "aÑo";


$tdataMined_Maximo_IPCE[".exportFields"] = array();
$tdataMined_Maximo_IPCE[".exportFields"][] = "MAX(ipce_naive)";
$tdataMined_Maximo_IPCE[".exportFields"][] = "codigo";
$tdataMined_Maximo_IPCE[".exportFields"][] = "idderespuesta";
$tdataMined_Maximo_IPCE[".exportFields"][] = "depto";
$tdataMined_Maximo_IPCE[".exportFields"][] = "departamento";
$tdataMined_Maximo_IPCE[".exportFields"][] = "mun";
$tdataMined_Maximo_IPCE[".exportFields"][] = "municipio";
$tdataMined_Maximo_IPCE[".exportFields"][] = "nombre_c_e";
$tdataMined_Maximo_IPCE[".exportFields"][] = "x";
$tdataMined_Maximo_IPCE[".exportFields"][] = "y";
$tdataMined_Maximo_IPCE[".exportFields"][] = "sector_ppd";
$tdataMined_Maximo_IPCE[".exportFields"][] = "matricula_inicial";
$tdataMined_Maximo_IPCE[".exportFields"][] = "matricula_final";
$tdataMined_Maximo_IPCE[".exportFields"][] = "maras";
$tdataMined_Maximo_IPCE[".exportFields"][] = "robos";
$tdataMined_Maximo_IPCE[".exportFields"][] = "hurtos";
$tdataMined_Maximo_IPCE[".exportFields"][] = "drogas";
$tdataMined_Maximo_IPCE[".exportFields"][] = "violaciones";
$tdataMined_Maximo_IPCE[".exportFields"][] = "pab";
$tdataMined_Maximo_IPCE[".exportFields"][] = "paf";
$tdataMined_Maximo_IPCE[".exportFields"][] = "escasos_recursos";
$tdataMined_Maximo_IPCE[".exportFields"][] = "incorpo_actividades_prod";
$tdataMined_Maximo_IPCE[".exportFields"][] = "lejania_ce";
$tdataMined_Maximo_IPCE[".exportFields"][] = "violencia_pandilleril";
$tdataMined_Maximo_IPCE[".exportFields"][] = "embarazo";
$tdataMined_Maximo_IPCE[".exportFields"][] = "acoso";
$tdataMined_Maximo_IPCE[".exportFields"][] = "violacion_sexual";
$tdataMined_Maximo_IPCE[".exportFields"][] = "cambio_domicilio";
$tdataMined_Maximo_IPCE[".exportFields"][] = "migracion";
$tdataMined_Maximo_IPCE[".exportFields"][] = "bajo_rendimiento";
$tdataMined_Maximo_IPCE[".exportFields"][] = "enfermedad";
$tdataMined_Maximo_IPCE[".exportFields"][] = "prostitucion";
$tdataMined_Maximo_IPCE[".exportFields"][] = "dep_mun";
$tdataMined_Maximo_IPCE[".exportFields"][] = "max_matric2016";
$tdataMined_Maximo_IPCE[".exportFields"][] = "mrf2016";
$tdataMined_Maximo_IPCE[".exportFields"][] = "pab_af";
$tdataMined_Maximo_IPCE[".exportFields"][] = "r_h";
$tdataMined_Maximo_IPCE[".exportFields"][] = "ipce_naive";
$tdataMined_Maximo_IPCE[".exportFields"][] = "aÑo";

$tdataMined_Maximo_IPCE[".importFields"] = array();
$tdataMined_Maximo_IPCE[".importFields"][] = "MAX(ipce_naive)";
$tdataMined_Maximo_IPCE[".importFields"][] = "codigo";
$tdataMined_Maximo_IPCE[".importFields"][] = "idderespuesta";
$tdataMined_Maximo_IPCE[".importFields"][] = "depto";
$tdataMined_Maximo_IPCE[".importFields"][] = "departamento";
$tdataMined_Maximo_IPCE[".importFields"][] = "mun";
$tdataMined_Maximo_IPCE[".importFields"][] = "municipio";
$tdataMined_Maximo_IPCE[".importFields"][] = "nombre_c_e";
$tdataMined_Maximo_IPCE[".importFields"][] = "x";
$tdataMined_Maximo_IPCE[".importFields"][] = "y";
$tdataMined_Maximo_IPCE[".importFields"][] = "sector_ppd";
$tdataMined_Maximo_IPCE[".importFields"][] = "matricula_inicial";
$tdataMined_Maximo_IPCE[".importFields"][] = "matricula_final";
$tdataMined_Maximo_IPCE[".importFields"][] = "maras";
$tdataMined_Maximo_IPCE[".importFields"][] = "robos";
$tdataMined_Maximo_IPCE[".importFields"][] = "hurtos";
$tdataMined_Maximo_IPCE[".importFields"][] = "drogas";
$tdataMined_Maximo_IPCE[".importFields"][] = "violaciones";
$tdataMined_Maximo_IPCE[".importFields"][] = "pab";
$tdataMined_Maximo_IPCE[".importFields"][] = "paf";
$tdataMined_Maximo_IPCE[".importFields"][] = "escasos_recursos";
$tdataMined_Maximo_IPCE[".importFields"][] = "incorpo_actividades_prod";
$tdataMined_Maximo_IPCE[".importFields"][] = "lejania_ce";
$tdataMined_Maximo_IPCE[".importFields"][] = "violencia_pandilleril";
$tdataMined_Maximo_IPCE[".importFields"][] = "embarazo";
$tdataMined_Maximo_IPCE[".importFields"][] = "acoso";
$tdataMined_Maximo_IPCE[".importFields"][] = "violacion_sexual";
$tdataMined_Maximo_IPCE[".importFields"][] = "cambio_domicilio";
$tdataMined_Maximo_IPCE[".importFields"][] = "migracion";
$tdataMined_Maximo_IPCE[".importFields"][] = "bajo_rendimiento";
$tdataMined_Maximo_IPCE[".importFields"][] = "enfermedad";
$tdataMined_Maximo_IPCE[".importFields"][] = "prostitucion";
$tdataMined_Maximo_IPCE[".importFields"][] = "dep_mun";
$tdataMined_Maximo_IPCE[".importFields"][] = "max_matric2016";
$tdataMined_Maximo_IPCE[".importFields"][] = "mrf2016";
$tdataMined_Maximo_IPCE[".importFields"][] = "pab_af";
$tdataMined_Maximo_IPCE[".importFields"][] = "r_h";
$tdataMined_Maximo_IPCE[".importFields"][] = "ipce_naive";
$tdataMined_Maximo_IPCE[".importFields"][] = "aÑo";

$tdataMined_Maximo_IPCE[".printFields"] = array();
$tdataMined_Maximo_IPCE[".printFields"][] = "MAX(ipce_naive)";
$tdataMined_Maximo_IPCE[".printFields"][] = "codigo";
$tdataMined_Maximo_IPCE[".printFields"][] = "idderespuesta";
$tdataMined_Maximo_IPCE[".printFields"][] = "depto";
$tdataMined_Maximo_IPCE[".printFields"][] = "departamento";
$tdataMined_Maximo_IPCE[".printFields"][] = "mun";
$tdataMined_Maximo_IPCE[".printFields"][] = "municipio";
$tdataMined_Maximo_IPCE[".printFields"][] = "nombre_c_e";
$tdataMined_Maximo_IPCE[".printFields"][] = "x";
$tdataMined_Maximo_IPCE[".printFields"][] = "y";
$tdataMined_Maximo_IPCE[".printFields"][] = "sector_ppd";
$tdataMined_Maximo_IPCE[".printFields"][] = "matricula_inicial";
$tdataMined_Maximo_IPCE[".printFields"][] = "matricula_final";
$tdataMined_Maximo_IPCE[".printFields"][] = "maras";
$tdataMined_Maximo_IPCE[".printFields"][] = "robos";
$tdataMined_Maximo_IPCE[".printFields"][] = "hurtos";
$tdataMined_Maximo_IPCE[".printFields"][] = "drogas";
$tdataMined_Maximo_IPCE[".printFields"][] = "violaciones";
$tdataMined_Maximo_IPCE[".printFields"][] = "pab";
$tdataMined_Maximo_IPCE[".printFields"][] = "paf";
$tdataMined_Maximo_IPCE[".printFields"][] = "escasos_recursos";
$tdataMined_Maximo_IPCE[".printFields"][] = "incorpo_actividades_prod";
$tdataMined_Maximo_IPCE[".printFields"][] = "lejania_ce";
$tdataMined_Maximo_IPCE[".printFields"][] = "violencia_pandilleril";
$tdataMined_Maximo_IPCE[".printFields"][] = "embarazo";
$tdataMined_Maximo_IPCE[".printFields"][] = "acoso";
$tdataMined_Maximo_IPCE[".printFields"][] = "violacion_sexual";
$tdataMined_Maximo_IPCE[".printFields"][] = "cambio_domicilio";
$tdataMined_Maximo_IPCE[".printFields"][] = "migracion";
$tdataMined_Maximo_IPCE[".printFields"][] = "bajo_rendimiento";
$tdataMined_Maximo_IPCE[".printFields"][] = "enfermedad";
$tdataMined_Maximo_IPCE[".printFields"][] = "prostitucion";
$tdataMined_Maximo_IPCE[".printFields"][] = "dep_mun";
$tdataMined_Maximo_IPCE[".printFields"][] = "max_matric2016";
$tdataMined_Maximo_IPCE[".printFields"][] = "mrf2016";
$tdataMined_Maximo_IPCE[".printFields"][] = "pab_af";
$tdataMined_Maximo_IPCE[".printFields"][] = "r_h";
$tdataMined_Maximo_IPCE[".printFields"][] = "ipce_naive";
$tdataMined_Maximo_IPCE[".printFields"][] = "aÑo";

//	MAX(ipce_naive)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MAX(ipce_naive)";
	$fdata["GoodName"] = "MAX_ipce_naive_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","MAX_ipce_naive_");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MAX(ipce_naive)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(ipce_naive)";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataMined_Maximo_IPCE["MAX(ipce_naive)"] = $fdata;
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","codigo");
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




	$tdataMined_Maximo_IPCE["codigo"] = $fdata;
//	idderespuesta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idderespuesta";
	$fdata["GoodName"] = "idderespuesta";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","idderespuesta");
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




	$tdataMined_Maximo_IPCE["idderespuesta"] = $fdata;
//	depto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "depto";
	$fdata["GoodName"] = "depto";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","depto");
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




	$tdataMined_Maximo_IPCE["depto"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","departamento");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

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




	$tdataMined_Maximo_IPCE["departamento"] = $fdata;
//	mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mun";
	$fdata["GoodName"] = "mun";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","mun");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

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




	$tdataMined_Maximo_IPCE["mun"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","municipio");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

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




	$tdataMined_Maximo_IPCE["municipio"] = $fdata;
//	nombre_c_e
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "nombre_c_e";
	$fdata["GoodName"] = "nombre_c_e";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","nombre_c_e");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

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




	$tdataMined_Maximo_IPCE["nombre_c_e"] = $fdata;
//	x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "x";
	$fdata["GoodName"] = "x";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","x");
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




	$tdataMined_Maximo_IPCE["x"] = $fdata;
//	y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "y";
	$fdata["GoodName"] = "y";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","y");
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




	$tdataMined_Maximo_IPCE["y"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","sector_ppd");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

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




	$tdataMined_Maximo_IPCE["sector_ppd"] = $fdata;
//	matricula_inicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "matricula_inicial";
	$fdata["GoodName"] = "matricula_inicial";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","matricula_inicial");
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




	$tdataMined_Maximo_IPCE["matricula_inicial"] = $fdata;
//	matricula_final
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "matricula_final";
	$fdata["GoodName"] = "matricula_final";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","matricula_final");
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




	$tdataMined_Maximo_IPCE["matricula_final"] = $fdata;
//	maras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "maras";
	$fdata["GoodName"] = "maras";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","maras");
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




	$tdataMined_Maximo_IPCE["maras"] = $fdata;
//	robos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "robos";
	$fdata["GoodName"] = "robos";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","robos");
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




	$tdataMined_Maximo_IPCE["robos"] = $fdata;
//	hurtos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "hurtos";
	$fdata["GoodName"] = "hurtos";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","hurtos");
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




	$tdataMined_Maximo_IPCE["hurtos"] = $fdata;
//	drogas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "drogas";
	$fdata["GoodName"] = "drogas";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","drogas");
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




	$tdataMined_Maximo_IPCE["drogas"] = $fdata;
//	violaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "violaciones";
	$fdata["GoodName"] = "violaciones";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","violaciones");
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




	$tdataMined_Maximo_IPCE["violaciones"] = $fdata;
//	pab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "pab";
	$fdata["GoodName"] = "pab";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","pab");
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




	$tdataMined_Maximo_IPCE["pab"] = $fdata;
//	paf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "paf";
	$fdata["GoodName"] = "paf";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","paf");
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




	$tdataMined_Maximo_IPCE["paf"] = $fdata;
//	escasos_recursos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "escasos_recursos";
	$fdata["GoodName"] = "escasos_recursos";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","escasos_recursos");
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




	$tdataMined_Maximo_IPCE["escasos_recursos"] = $fdata;
//	incorpo_actividades_prod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "incorpo_actividades_prod";
	$fdata["GoodName"] = "incorpo_actividades_prod";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","incorpo_actividades_prod");
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




	$tdataMined_Maximo_IPCE["incorpo_actividades_prod"] = $fdata;
//	lejania_ce
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "lejania_ce";
	$fdata["GoodName"] = "lejania_ce";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","lejania_ce");
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




	$tdataMined_Maximo_IPCE["lejania_ce"] = $fdata;
//	violencia_pandilleril
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "violencia_pandilleril";
	$fdata["GoodName"] = "violencia_pandilleril";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","violencia_pandilleril");
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




	$tdataMined_Maximo_IPCE["violencia_pandilleril"] = $fdata;
//	embarazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "embarazo";
	$fdata["GoodName"] = "embarazo";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","embarazo");
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




	$tdataMined_Maximo_IPCE["embarazo"] = $fdata;
//	acoso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "acoso";
	$fdata["GoodName"] = "acoso";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","acoso");
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




	$tdataMined_Maximo_IPCE["acoso"] = $fdata;
//	violacion_sexual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "violacion_sexual";
	$fdata["GoodName"] = "violacion_sexual";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","violacion_sexual");
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




	$tdataMined_Maximo_IPCE["violacion_sexual"] = $fdata;
//	cambio_domicilio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "cambio_domicilio";
	$fdata["GoodName"] = "cambio_domicilio";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","cambio_domicilio");
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




	$tdataMined_Maximo_IPCE["cambio_domicilio"] = $fdata;
//	migracion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "migracion";
	$fdata["GoodName"] = "migracion";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","migracion");
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




	$tdataMined_Maximo_IPCE["migracion"] = $fdata;
//	bajo_rendimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "bajo_rendimiento";
	$fdata["GoodName"] = "bajo_rendimiento";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","bajo_rendimiento");
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




	$tdataMined_Maximo_IPCE["bajo_rendimiento"] = $fdata;
//	enfermedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "enfermedad";
	$fdata["GoodName"] = "enfermedad";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","enfermedad");
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




	$tdataMined_Maximo_IPCE["enfermedad"] = $fdata;
//	prostitucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "prostitucion";
	$fdata["GoodName"] = "prostitucion";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","prostitucion");
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




	$tdataMined_Maximo_IPCE["prostitucion"] = $fdata;
//	dep_mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "dep_mun";
	$fdata["GoodName"] = "dep_mun";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","dep_mun");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

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




	$tdataMined_Maximo_IPCE["dep_mun"] = $fdata;
//	max_matric2016
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "max_matric2016";
	$fdata["GoodName"] = "max_matric2016";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","max_matric2016");
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




	$tdataMined_Maximo_IPCE["max_matric2016"] = $fdata;
//	mrf2016
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "mrf2016";
	$fdata["GoodName"] = "mrf2016";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","mrf2016");
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




	$tdataMined_Maximo_IPCE["mrf2016"] = $fdata;
//	pab_af
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "pab_af";
	$fdata["GoodName"] = "pab_af";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","pab_af");
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




	$tdataMined_Maximo_IPCE["pab_af"] = $fdata;
//	r_h
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "r_h";
	$fdata["GoodName"] = "r_h";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","r_h");
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




	$tdataMined_Maximo_IPCE["r_h"] = $fdata;
//	ipce_naive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "ipce_naive";
	$fdata["GoodName"] = "ipce_naive";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","ipce_naive");
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




	$tdataMined_Maximo_IPCE["ipce_naive"] = $fdata;
//	aÑo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "aÑo";
	$fdata["GoodName"] = "a_o";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Maximo_IPCE","a_o");
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




	$tdataMined_Maximo_IPCE["aÑo"] = $fdata;


$tables_data["Mined_Maximo IPCE"]=&$tdataMined_Maximo_IPCE;
$field_labels["Mined_Maximo_IPCE"] = &$fieldLabelsMined_Maximo_IPCE;
$fieldToolTips["Mined_Maximo_IPCE"] = &$fieldToolTipsMined_Maximo_IPCE;
$placeHolders["Mined_Maximo_IPCE"] = &$placeHoldersMined_Maximo_IPCE;
$page_titles["Mined_Maximo_IPCE"] = &$pageTitlesMined_Maximo_IPCE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Mined_Maximo IPCE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Mined_Maximo IPCE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Mined_Maximo_IPCE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MAX(ipce_naive) AS `MAX(ipce_naive)`,  codigo,  idderespuesta,  depto,  departamento,  mun,  municipio,  nombre_c_e,  x,  y,  sector_ppd,  matricula_inicial,  matricula_final,  maras,  robos,  hurtos,  drogas,  violaciones,  pab,  paf,  escasos_recursos,  incorpo_actividades_prod,  lejania_ce,  violencia_pandilleril,  embarazo,  acoso,  violacion_sexual,  cambio_domicilio,  migracion,  bajo_rendimiento,  enfermedad,  prostitucion,  dep_mun,  max_matric2016,  mrf2016,  pab_af,  r_h,  ipce_naive,  `aÑo`";
$proto0["m_strFrom"] = "FROM mined";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY ipce_0_1 DESC";
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
			$proto7=array();
$proto7["m_functiontype"] = "SQLF_MAX";
$proto7["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "ipce_naive",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "MAX(ipce_naive)";
$proto6["m_srcTableName"] = "Mined_Maximo IPCE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "MAX(ipce_naive)";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto9["m_sql"] = "codigo";
$proto9["m_srcTableName"] = "Mined_Maximo IPCE";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "idderespuesta",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto11["m_sql"] = "idderespuesta";
$proto11["m_srcTableName"] = "Mined_Maximo IPCE";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "depto",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto13["m_sql"] = "depto";
$proto13["m_srcTableName"] = "Mined_Maximo IPCE";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto15["m_sql"] = "departamento";
$proto15["m_srcTableName"] = "Mined_Maximo IPCE";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "mun",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto17["m_sql"] = "mun";
$proto17["m_srcTableName"] = "Mined_Maximo IPCE";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto19["m_sql"] = "municipio";
$proto19["m_srcTableName"] = "Mined_Maximo IPCE";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_c_e",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto21["m_sql"] = "nombre_c_e";
$proto21["m_srcTableName"] = "Mined_Maximo IPCE";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "x",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto23["m_sql"] = "x";
$proto23["m_srcTableName"] = "Mined_Maximo IPCE";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "y",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto25["m_sql"] = "y";
$proto25["m_srcTableName"] = "Mined_Maximo IPCE";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto27["m_sql"] = "sector_ppd";
$proto27["m_srcTableName"] = "Mined_Maximo IPCE";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "matricula_inicial",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto29["m_sql"] = "matricula_inicial";
$proto29["m_srcTableName"] = "Mined_Maximo IPCE";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "matricula_final",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto31["m_sql"] = "matricula_final";
$proto31["m_srcTableName"] = "Mined_Maximo IPCE";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "maras",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto33["m_sql"] = "maras";
$proto33["m_srcTableName"] = "Mined_Maximo IPCE";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "robos",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto35["m_sql"] = "robos";
$proto35["m_srcTableName"] = "Mined_Maximo IPCE";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "hurtos",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto37["m_sql"] = "hurtos";
$proto37["m_srcTableName"] = "Mined_Maximo IPCE";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "drogas",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto39["m_sql"] = "drogas";
$proto39["m_srcTableName"] = "Mined_Maximo IPCE";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "violaciones",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto41["m_sql"] = "violaciones";
$proto41["m_srcTableName"] = "Mined_Maximo IPCE";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "pab",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto43["m_sql"] = "pab";
$proto43["m_srcTableName"] = "Mined_Maximo IPCE";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "paf",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto45["m_sql"] = "paf";
$proto45["m_srcTableName"] = "Mined_Maximo IPCE";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "escasos_recursos",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto47["m_sql"] = "escasos_recursos";
$proto47["m_srcTableName"] = "Mined_Maximo IPCE";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "incorpo_actividades_prod",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto49["m_sql"] = "incorpo_actividades_prod";
$proto49["m_srcTableName"] = "Mined_Maximo IPCE";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "lejania_ce",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto51["m_sql"] = "lejania_ce";
$proto51["m_srcTableName"] = "Mined_Maximo IPCE";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "violencia_pandilleril",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto53["m_sql"] = "violencia_pandilleril";
$proto53["m_srcTableName"] = "Mined_Maximo IPCE";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "embarazo",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto55["m_sql"] = "embarazo";
$proto55["m_srcTableName"] = "Mined_Maximo IPCE";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "acoso",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto57["m_sql"] = "acoso";
$proto57["m_srcTableName"] = "Mined_Maximo IPCE";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "violacion_sexual",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto59["m_sql"] = "violacion_sexual";
$proto59["m_srcTableName"] = "Mined_Maximo IPCE";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "cambio_domicilio",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto61["m_sql"] = "cambio_domicilio";
$proto61["m_srcTableName"] = "Mined_Maximo IPCE";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "migracion",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto63["m_sql"] = "migracion";
$proto63["m_srcTableName"] = "Mined_Maximo IPCE";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "bajo_rendimiento",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto65["m_sql"] = "bajo_rendimiento";
$proto65["m_srcTableName"] = "Mined_Maximo IPCE";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "enfermedad",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto67["m_sql"] = "enfermedad";
$proto67["m_srcTableName"] = "Mined_Maximo IPCE";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "prostitucion",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto69["m_sql"] = "prostitucion";
$proto69["m_srcTableName"] = "Mined_Maximo IPCE";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "dep_mun",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto71["m_sql"] = "dep_mun";
$proto71["m_srcTableName"] = "Mined_Maximo IPCE";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "max_matric2016",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto73["m_sql"] = "max_matric2016";
$proto73["m_srcTableName"] = "Mined_Maximo IPCE";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "mrf2016",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto75["m_sql"] = "mrf2016";
$proto75["m_srcTableName"] = "Mined_Maximo IPCE";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "pab_af",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto77["m_sql"] = "pab_af";
$proto77["m_srcTableName"] = "Mined_Maximo IPCE";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "r_h",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto79["m_sql"] = "r_h";
$proto79["m_srcTableName"] = "Mined_Maximo IPCE";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "ipce_naive",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto81["m_sql"] = "ipce_naive";
$proto81["m_srcTableName"] = "Mined_Maximo IPCE";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto83["m_sql"] = "`aÑo`";
$proto83["m_srcTableName"] = "Mined_Maximo IPCE";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto85=array();
$proto85["m_link"] = "SQLL_MAIN";
			$proto86=array();
$proto86["m_strName"] = "mined";
$proto86["m_srcTableName"] = "Mined_Maximo IPCE";
$proto86["m_columns"] = array();
$proto86["m_columns"][] = "idderespuesta";
$proto86["m_columns"][] = "codigo";
$proto86["m_columns"][] = "depto";
$proto86["m_columns"][] = "departamento";
$proto86["m_columns"][] = "mun";
$proto86["m_columns"][] = "municipio";
$proto86["m_columns"][] = "nombre_c_e";
$proto86["m_columns"][] = "x";
$proto86["m_columns"][] = "y";
$proto86["m_columns"][] = "sector_ppd";
$proto86["m_columns"][] = "matricula_inicial";
$proto86["m_columns"][] = "matricula_final";
$proto86["m_columns"][] = "maras";
$proto86["m_columns"][] = "robos";
$proto86["m_columns"][] = "hurtos";
$proto86["m_columns"][] = "drogas";
$proto86["m_columns"][] = "violaciones";
$proto86["m_columns"][] = "pab";
$proto86["m_columns"][] = "paf";
$proto86["m_columns"][] = "escasos_recursos";
$proto86["m_columns"][] = "incorpo_actividades_prod";
$proto86["m_columns"][] = "lejania_ce";
$proto86["m_columns"][] = "violencia_pandilleril";
$proto86["m_columns"][] = "embarazo";
$proto86["m_columns"][] = "acoso";
$proto86["m_columns"][] = "violacion_sexual";
$proto86["m_columns"][] = "cambio_domicilio";
$proto86["m_columns"][] = "migracion";
$proto86["m_columns"][] = "bajo_rendimiento";
$proto86["m_columns"][] = "enfermedad";
$proto86["m_columns"][] = "prostitucion";
$proto86["m_columns"][] = "dep_mun";
$proto86["m_columns"][] = "max_matric2016";
$proto86["m_columns"][] = "mrf2016";
$proto86["m_columns"][] = "pab_af";
$proto86["m_columns"][] = "r_h";
$proto86["m_columns"][] = "ipce_naive";
$proto86["m_columns"][] = "ipce_0_1";
$proto86["m_columns"][] = "aÑo";
$obj = new SQLTable($proto86);

$proto85["m_table"] = $obj;
$proto85["m_sql"] = "mined";
$proto85["m_alias"] = "";
$proto85["m_srcTableName"] = "Mined_Maximo IPCE";
$proto87=array();
$proto87["m_sql"] = "";
$proto87["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto87["m_column"]=$obj;
$proto87["m_contained"] = array();
$proto87["m_strCase"] = "";
$proto87["m_havingmode"] = false;
$proto87["m_inBrackets"] = false;
$proto87["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto87);

$proto85["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto85);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto89=array();
						$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto89["m_column"]=$obj;
$obj = new SQLGroupByItem($proto89);

$proto0["m_groupby"][]=$obj;
												$proto91=array();
						$obj = new SQLField(array(
	"m_strName" => "idderespuesta",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto91["m_column"]=$obj;
$obj = new SQLGroupByItem($proto91);

$proto0["m_groupby"][]=$obj;
												$proto93=array();
						$obj = new SQLField(array(
	"m_strName" => "depto",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto93["m_column"]=$obj;
$obj = new SQLGroupByItem($proto93);

$proto0["m_groupby"][]=$obj;
												$proto95=array();
						$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto95["m_column"]=$obj;
$obj = new SQLGroupByItem($proto95);

$proto0["m_groupby"][]=$obj;
												$proto97=array();
						$obj = new SQLField(array(
	"m_strName" => "mun",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto97["m_column"]=$obj;
$obj = new SQLGroupByItem($proto97);

$proto0["m_groupby"][]=$obj;
												$proto99=array();
						$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto99["m_column"]=$obj;
$obj = new SQLGroupByItem($proto99);

$proto0["m_groupby"][]=$obj;
												$proto101=array();
						$obj = new SQLField(array(
	"m_strName" => "nombre_c_e",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto101["m_column"]=$obj;
$obj = new SQLGroupByItem($proto101);

$proto0["m_groupby"][]=$obj;
												$proto103=array();
						$obj = new SQLField(array(
	"m_strName" => "x",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto103["m_column"]=$obj;
$obj = new SQLGroupByItem($proto103);

$proto0["m_groupby"][]=$obj;
												$proto105=array();
						$obj = new SQLField(array(
	"m_strName" => "y",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto105["m_column"]=$obj;
$obj = new SQLGroupByItem($proto105);

$proto0["m_groupby"][]=$obj;
												$proto107=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto107["m_column"]=$obj;
$obj = new SQLGroupByItem($proto107);

$proto0["m_groupby"][]=$obj;
												$proto109=array();
						$obj = new SQLField(array(
	"m_strName" => "matricula_inicial",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto109["m_column"]=$obj;
$obj = new SQLGroupByItem($proto109);

$proto0["m_groupby"][]=$obj;
												$proto111=array();
						$obj = new SQLField(array(
	"m_strName" => "matricula_final",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto111["m_column"]=$obj;
$obj = new SQLGroupByItem($proto111);

$proto0["m_groupby"][]=$obj;
												$proto113=array();
						$obj = new SQLField(array(
	"m_strName" => "maras",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto113["m_column"]=$obj;
$obj = new SQLGroupByItem($proto113);

$proto0["m_groupby"][]=$obj;
												$proto115=array();
						$obj = new SQLField(array(
	"m_strName" => "robos",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto115["m_column"]=$obj;
$obj = new SQLGroupByItem($proto115);

$proto0["m_groupby"][]=$obj;
												$proto117=array();
						$obj = new SQLField(array(
	"m_strName" => "hurtos",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto117["m_column"]=$obj;
$obj = new SQLGroupByItem($proto117);

$proto0["m_groupby"][]=$obj;
												$proto119=array();
						$obj = new SQLField(array(
	"m_strName" => "drogas",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto119["m_column"]=$obj;
$obj = new SQLGroupByItem($proto119);

$proto0["m_groupby"][]=$obj;
												$proto121=array();
						$obj = new SQLField(array(
	"m_strName" => "violaciones",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto121["m_column"]=$obj;
$obj = new SQLGroupByItem($proto121);

$proto0["m_groupby"][]=$obj;
												$proto123=array();
						$obj = new SQLField(array(
	"m_strName" => "pab",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto123["m_column"]=$obj;
$obj = new SQLGroupByItem($proto123);

$proto0["m_groupby"][]=$obj;
												$proto125=array();
						$obj = new SQLField(array(
	"m_strName" => "paf",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto125["m_column"]=$obj;
$obj = new SQLGroupByItem($proto125);

$proto0["m_groupby"][]=$obj;
												$proto127=array();
						$obj = new SQLField(array(
	"m_strName" => "escasos_recursos",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto127["m_column"]=$obj;
$obj = new SQLGroupByItem($proto127);

$proto0["m_groupby"][]=$obj;
												$proto129=array();
						$obj = new SQLField(array(
	"m_strName" => "incorpo_actividades_prod",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto129["m_column"]=$obj;
$obj = new SQLGroupByItem($proto129);

$proto0["m_groupby"][]=$obj;
												$proto131=array();
						$obj = new SQLField(array(
	"m_strName" => "lejania_ce",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto131["m_column"]=$obj;
$obj = new SQLGroupByItem($proto131);

$proto0["m_groupby"][]=$obj;
												$proto133=array();
						$obj = new SQLField(array(
	"m_strName" => "violencia_pandilleril",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto133["m_column"]=$obj;
$obj = new SQLGroupByItem($proto133);

$proto0["m_groupby"][]=$obj;
												$proto135=array();
						$obj = new SQLField(array(
	"m_strName" => "embarazo",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto135["m_column"]=$obj;
$obj = new SQLGroupByItem($proto135);

$proto0["m_groupby"][]=$obj;
												$proto137=array();
						$obj = new SQLField(array(
	"m_strName" => "acoso",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto137["m_column"]=$obj;
$obj = new SQLGroupByItem($proto137);

$proto0["m_groupby"][]=$obj;
												$proto139=array();
						$obj = new SQLField(array(
	"m_strName" => "violacion_sexual",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto139["m_column"]=$obj;
$obj = new SQLGroupByItem($proto139);

$proto0["m_groupby"][]=$obj;
												$proto141=array();
						$obj = new SQLField(array(
	"m_strName" => "cambio_domicilio",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto141["m_column"]=$obj;
$obj = new SQLGroupByItem($proto141);

$proto0["m_groupby"][]=$obj;
												$proto143=array();
						$obj = new SQLField(array(
	"m_strName" => "migracion",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto143["m_column"]=$obj;
$obj = new SQLGroupByItem($proto143);

$proto0["m_groupby"][]=$obj;
												$proto145=array();
						$obj = new SQLField(array(
	"m_strName" => "bajo_rendimiento",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto145["m_column"]=$obj;
$obj = new SQLGroupByItem($proto145);

$proto0["m_groupby"][]=$obj;
												$proto147=array();
						$obj = new SQLField(array(
	"m_strName" => "enfermedad",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto147["m_column"]=$obj;
$obj = new SQLGroupByItem($proto147);

$proto0["m_groupby"][]=$obj;
												$proto149=array();
						$obj = new SQLField(array(
	"m_strName" => "prostitucion",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto149["m_column"]=$obj;
$obj = new SQLGroupByItem($proto149);

$proto0["m_groupby"][]=$obj;
												$proto151=array();
						$obj = new SQLField(array(
	"m_strName" => "dep_mun",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto151["m_column"]=$obj;
$obj = new SQLGroupByItem($proto151);

$proto0["m_groupby"][]=$obj;
												$proto153=array();
						$obj = new SQLField(array(
	"m_strName" => "max_matric2016",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto153["m_column"]=$obj;
$obj = new SQLGroupByItem($proto153);

$proto0["m_groupby"][]=$obj;
												$proto155=array();
						$obj = new SQLField(array(
	"m_strName" => "mrf2016",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto155["m_column"]=$obj;
$obj = new SQLGroupByItem($proto155);

$proto0["m_groupby"][]=$obj;
												$proto157=array();
						$obj = new SQLField(array(
	"m_strName" => "pab_af",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto157["m_column"]=$obj;
$obj = new SQLGroupByItem($proto157);

$proto0["m_groupby"][]=$obj;
												$proto159=array();
						$obj = new SQLField(array(
	"m_strName" => "r_h",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto159["m_column"]=$obj;
$obj = new SQLGroupByItem($proto159);

$proto0["m_groupby"][]=$obj;
												$proto161=array();
						$obj = new SQLField(array(
	"m_strName" => "ipce_naive",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto161["m_column"]=$obj;
$obj = new SQLGroupByItem($proto161);

$proto0["m_groupby"][]=$obj;
												$proto163=array();
						$obj = new SQLField(array(
	"m_strName" => "aÑo",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto163["m_column"]=$obj;
$obj = new SQLGroupByItem($proto163);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto165=array();
						$obj = new SQLField(array(
	"m_strName" => "ipce_0_1",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined_Maximo IPCE"
));

$proto165["m_column"]=$obj;
$proto165["m_bAsc"] = 0;
$proto165["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto165);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Mined_Maximo IPCE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Mined_Maximo_IPCE = createSqlQuery_Mined_Maximo_IPCE();


	
		;

																																							

$tdataMined_Maximo_IPCE[".sqlquery"] = $queryData_Mined_Maximo_IPCE;

$tableEvents["Mined_Maximo IPCE"] = new eventsBase;
$tdataMined_Maximo_IPCE[".hasEvents"] = false;

?>