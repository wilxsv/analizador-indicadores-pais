<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamined11 = array();
	$tdatamined11[".truncateText"] = true;
	$tdatamined11[".NumberOfChars"] = 80;
	$tdatamined11[".ShortName"] = "mined11";
	$tdatamined11[".OwnerID"] = "";
	$tdatamined11[".OriginalTable"] = "mined1";

//	field labels
$fieldLabelsmined11 = array();
$fieldToolTipsmined11 = array();
$pageTitlesmined11 = array();
$placeHoldersmined11 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmined11["Spanish"] = array();
	$fieldToolTipsmined11["Spanish"] = array();
	$placeHoldersmined11["Spanish"] = array();
	$pageTitlesmined11["Spanish"] = array();
	$fieldLabelsmined11["Spanish"]["idderespuesta"] = "Idderespuesta";
	$fieldToolTipsmined11["Spanish"]["idderespuesta"] = "";
	$placeHoldersmined11["Spanish"]["idderespuesta"] = "";
	$fieldLabelsmined11["Spanish"]["codigo"] = "Codigo";
	$fieldToolTipsmined11["Spanish"]["codigo"] = "";
	$placeHoldersmined11["Spanish"]["codigo"] = "";
	$fieldLabelsmined11["Spanish"]["depto"] = "Depto";
	$fieldToolTipsmined11["Spanish"]["depto"] = "";
	$placeHoldersmined11["Spanish"]["depto"] = "";
	$fieldLabelsmined11["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsmined11["Spanish"]["departamento"] = "";
	$placeHoldersmined11["Spanish"]["departamento"] = "";
	$fieldLabelsmined11["Spanish"]["mun"] = "Mun";
	$fieldToolTipsmined11["Spanish"]["mun"] = "";
	$placeHoldersmined11["Spanish"]["mun"] = "";
	$fieldLabelsmined11["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsmined11["Spanish"]["municipio"] = "";
	$placeHoldersmined11["Spanish"]["municipio"] = "";
	$fieldLabelsmined11["Spanish"]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsmined11["Spanish"]["nombre_c_e"] = "";
	$placeHoldersmined11["Spanish"]["nombre_c_e"] = "";
	$fieldLabelsmined11["Spanish"]["x"] = "X";
	$fieldToolTipsmined11["Spanish"]["x"] = "";
	$placeHoldersmined11["Spanish"]["x"] = "";
	$fieldLabelsmined11["Spanish"]["y"] = "Y";
	$fieldToolTipsmined11["Spanish"]["y"] = "";
	$placeHoldersmined11["Spanish"]["y"] = "";
	$fieldLabelsmined11["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsmined11["Spanish"]["sector_ppd"] = "";
	$placeHoldersmined11["Spanish"]["sector_ppd"] = "";
	$fieldLabelsmined11["Spanish"]["matricula_inicial"] = "Matricula Inicial";
	$fieldToolTipsmined11["Spanish"]["matricula_inicial"] = "";
	$placeHoldersmined11["Spanish"]["matricula_inicial"] = "";
	$fieldLabelsmined11["Spanish"]["matricula_final"] = "Matricula Final";
	$fieldToolTipsmined11["Spanish"]["matricula_final"] = "";
	$placeHoldersmined11["Spanish"]["matricula_final"] = "";
	$fieldLabelsmined11["Spanish"]["maras"] = "Maras";
	$fieldToolTipsmined11["Spanish"]["maras"] = "";
	$placeHoldersmined11["Spanish"]["maras"] = "";
	$fieldLabelsmined11["Spanish"]["robos"] = "Robos";
	$fieldToolTipsmined11["Spanish"]["robos"] = "";
	$placeHoldersmined11["Spanish"]["robos"] = "";
	$fieldLabelsmined11["Spanish"]["hurtos"] = "Hurtos";
	$fieldToolTipsmined11["Spanish"]["hurtos"] = "";
	$placeHoldersmined11["Spanish"]["hurtos"] = "";
	$fieldLabelsmined11["Spanish"]["drogas"] = "Drogas";
	$fieldToolTipsmined11["Spanish"]["drogas"] = "";
	$placeHoldersmined11["Spanish"]["drogas"] = "";
	$fieldLabelsmined11["Spanish"]["violaciones"] = "Violaciones";
	$fieldToolTipsmined11["Spanish"]["violaciones"] = "";
	$placeHoldersmined11["Spanish"]["violaciones"] = "";
	$fieldLabelsmined11["Spanish"]["pab"] = "Pab";
	$fieldToolTipsmined11["Spanish"]["pab"] = "";
	$placeHoldersmined11["Spanish"]["pab"] = "";
	$fieldLabelsmined11["Spanish"]["paf"] = "Paf";
	$fieldToolTipsmined11["Spanish"]["paf"] = "";
	$placeHoldersmined11["Spanish"]["paf"] = "";
	$fieldLabelsmined11["Spanish"]["escasos_recursos"] = "Escasos Recursos";
	$fieldToolTipsmined11["Spanish"]["escasos_recursos"] = "";
	$placeHoldersmined11["Spanish"]["escasos_recursos"] = "";
	$fieldLabelsmined11["Spanish"]["incorpo_actividades_prod"] = "Incorpo Actividades Prod";
	$fieldToolTipsmined11["Spanish"]["incorpo_actividades_prod"] = "";
	$placeHoldersmined11["Spanish"]["incorpo_actividades_prod"] = "";
	$fieldLabelsmined11["Spanish"]["lejania_ce"] = "Lejania Ce";
	$fieldToolTipsmined11["Spanish"]["lejania_ce"] = "";
	$placeHoldersmined11["Spanish"]["lejania_ce"] = "";
	$fieldLabelsmined11["Spanish"]["violencia_pandilleril"] = "Violencia Pandilleril";
	$fieldToolTipsmined11["Spanish"]["violencia_pandilleril"] = "";
	$placeHoldersmined11["Spanish"]["violencia_pandilleril"] = "";
	$fieldLabelsmined11["Spanish"]["embarazo"] = "Embarazo";
	$fieldToolTipsmined11["Spanish"]["embarazo"] = "";
	$placeHoldersmined11["Spanish"]["embarazo"] = "";
	$fieldLabelsmined11["Spanish"]["acoso"] = "Acoso";
	$fieldToolTipsmined11["Spanish"]["acoso"] = "";
	$placeHoldersmined11["Spanish"]["acoso"] = "";
	$fieldLabelsmined11["Spanish"]["violacion_sexual"] = "Violacion Sexual";
	$fieldToolTipsmined11["Spanish"]["violacion_sexual"] = "";
	$placeHoldersmined11["Spanish"]["violacion_sexual"] = "";
	$fieldLabelsmined11["Spanish"]["cambio_domicilio"] = "Cambio Domicilio";
	$fieldToolTipsmined11["Spanish"]["cambio_domicilio"] = "";
	$placeHoldersmined11["Spanish"]["cambio_domicilio"] = "";
	$fieldLabelsmined11["Spanish"]["migracion"] = "Migracion";
	$fieldToolTipsmined11["Spanish"]["migracion"] = "";
	$placeHoldersmined11["Spanish"]["migracion"] = "";
	$fieldLabelsmined11["Spanish"]["bajo_rendimiento"] = "Bajo Rendimiento";
	$fieldToolTipsmined11["Spanish"]["bajo_rendimiento"] = "";
	$placeHoldersmined11["Spanish"]["bajo_rendimiento"] = "";
	$fieldLabelsmined11["Spanish"]["enfermedad"] = "Enfermedad";
	$fieldToolTipsmined11["Spanish"]["enfermedad"] = "";
	$placeHoldersmined11["Spanish"]["enfermedad"] = "";
	$fieldLabelsmined11["Spanish"]["prostitucion"] = "Prostitucion";
	$fieldToolTipsmined11["Spanish"]["prostitucion"] = "";
	$placeHoldersmined11["Spanish"]["prostitucion"] = "";
	$fieldLabelsmined11["Spanish"]["dep_mun"] = "Dep Mun";
	$fieldToolTipsmined11["Spanish"]["dep_mun"] = "";
	$placeHoldersmined11["Spanish"]["dep_mun"] = "";
	$fieldLabelsmined11["Spanish"]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipsmined11["Spanish"]["max_matric2016"] = "";
	$placeHoldersmined11["Spanish"]["max_matric2016"] = "";
	$fieldLabelsmined11["Spanish"]["mrf2016"] = "Mrf2016";
	$fieldToolTipsmined11["Spanish"]["mrf2016"] = "";
	$placeHoldersmined11["Spanish"]["mrf2016"] = "";
	$fieldLabelsmined11["Spanish"]["pab_af"] = "Pab Af";
	$fieldToolTipsmined11["Spanish"]["pab_af"] = "";
	$placeHoldersmined11["Spanish"]["pab_af"] = "";
	$fieldLabelsmined11["Spanish"]["r_h"] = "R H";
	$fieldToolTipsmined11["Spanish"]["r_h"] = "";
	$placeHoldersmined11["Spanish"]["r_h"] = "";
	$fieldLabelsmined11["Spanish"]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipsmined11["Spanish"]["ipce_naive"] = "";
	$placeHoldersmined11["Spanish"]["ipce_naive"] = "";
	$fieldLabelsmined11["Spanish"]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipsmined11["Spanish"]["ipce_0_1"] = "";
	$placeHoldersmined11["Spanish"]["ipce_0_1"] = "";
	$fieldLabelsmined11["Spanish"]["a_o"] = "AÑo";
	$fieldToolTipsmined11["Spanish"]["a_o"] = "";
	$placeHoldersmined11["Spanish"]["a_o"] = "";
	if (count($fieldToolTipsmined11["Spanish"]))
		$tdatamined11[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmined11["English"] = array();
	$fieldToolTipsmined11["English"] = array();
	$placeHoldersmined11["English"] = array();
	$pageTitlesmined11["English"] = array();
	$fieldLabelsmined11["English"]["idderespuesta"] = "Idderespuesta";
	$fieldToolTipsmined11["English"]["idderespuesta"] = "";
	$placeHoldersmined11["English"]["idderespuesta"] = "";
	$fieldLabelsmined11["English"]["codigo"] = "Codigo";
	$fieldToolTipsmined11["English"]["codigo"] = "";
	$placeHoldersmined11["English"]["codigo"] = "";
	$fieldLabelsmined11["English"]["depto"] = "Depto";
	$fieldToolTipsmined11["English"]["depto"] = "";
	$placeHoldersmined11["English"]["depto"] = "";
	$fieldLabelsmined11["English"]["departamento"] = "Departamento";
	$fieldToolTipsmined11["English"]["departamento"] = "";
	$placeHoldersmined11["English"]["departamento"] = "";
	$fieldLabelsmined11["English"]["mun"] = "Mun";
	$fieldToolTipsmined11["English"]["mun"] = "";
	$placeHoldersmined11["English"]["mun"] = "";
	$fieldLabelsmined11["English"]["municipio"] = "Municipio";
	$fieldToolTipsmined11["English"]["municipio"] = "";
	$placeHoldersmined11["English"]["municipio"] = "";
	$fieldLabelsmined11["English"]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsmined11["English"]["nombre_c_e"] = "";
	$placeHoldersmined11["English"]["nombre_c_e"] = "";
	$fieldLabelsmined11["English"]["x"] = "X";
	$fieldToolTipsmined11["English"]["x"] = "";
	$placeHoldersmined11["English"]["x"] = "";
	$fieldLabelsmined11["English"]["y"] = "Y";
	$fieldToolTipsmined11["English"]["y"] = "";
	$placeHoldersmined11["English"]["y"] = "";
	$fieldLabelsmined11["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsmined11["English"]["sector_ppd"] = "";
	$placeHoldersmined11["English"]["sector_ppd"] = "";
	$fieldLabelsmined11["English"]["matricula_inicial"] = "Matricula Inicial";
	$fieldToolTipsmined11["English"]["matricula_inicial"] = "";
	$placeHoldersmined11["English"]["matricula_inicial"] = "";
	$fieldLabelsmined11["English"]["matricula_final"] = "Matricula Final";
	$fieldToolTipsmined11["English"]["matricula_final"] = "";
	$placeHoldersmined11["English"]["matricula_final"] = "";
	$fieldLabelsmined11["English"]["maras"] = "Maras";
	$fieldToolTipsmined11["English"]["maras"] = "";
	$placeHoldersmined11["English"]["maras"] = "";
	$fieldLabelsmined11["English"]["robos"] = "Robos";
	$fieldToolTipsmined11["English"]["robos"] = "";
	$placeHoldersmined11["English"]["robos"] = "";
	$fieldLabelsmined11["English"]["hurtos"] = "Hurtos";
	$fieldToolTipsmined11["English"]["hurtos"] = "";
	$placeHoldersmined11["English"]["hurtos"] = "";
	$fieldLabelsmined11["English"]["drogas"] = "Drogas";
	$fieldToolTipsmined11["English"]["drogas"] = "";
	$placeHoldersmined11["English"]["drogas"] = "";
	$fieldLabelsmined11["English"]["violaciones"] = "Violaciones";
	$fieldToolTipsmined11["English"]["violaciones"] = "";
	$placeHoldersmined11["English"]["violaciones"] = "";
	$fieldLabelsmined11["English"]["pab"] = "Pab";
	$fieldToolTipsmined11["English"]["pab"] = "";
	$placeHoldersmined11["English"]["pab"] = "";
	$fieldLabelsmined11["English"]["paf"] = "Paf";
	$fieldToolTipsmined11["English"]["paf"] = "";
	$placeHoldersmined11["English"]["paf"] = "";
	$fieldLabelsmined11["English"]["escasos_recursos"] = "Escasos Recursos";
	$fieldToolTipsmined11["English"]["escasos_recursos"] = "";
	$placeHoldersmined11["English"]["escasos_recursos"] = "";
	$fieldLabelsmined11["English"]["incorpo_actividades_prod"] = "Incorpo Actividades Prod";
	$fieldToolTipsmined11["English"]["incorpo_actividades_prod"] = "";
	$placeHoldersmined11["English"]["incorpo_actividades_prod"] = "";
	$fieldLabelsmined11["English"]["lejania_ce"] = "Lejania Ce";
	$fieldToolTipsmined11["English"]["lejania_ce"] = "";
	$placeHoldersmined11["English"]["lejania_ce"] = "";
	$fieldLabelsmined11["English"]["violencia_pandilleril"] = "Violencia Pandilleril";
	$fieldToolTipsmined11["English"]["violencia_pandilleril"] = "";
	$placeHoldersmined11["English"]["violencia_pandilleril"] = "";
	$fieldLabelsmined11["English"]["embarazo"] = "Embarazo";
	$fieldToolTipsmined11["English"]["embarazo"] = "";
	$placeHoldersmined11["English"]["embarazo"] = "";
	$fieldLabelsmined11["English"]["acoso"] = "Acoso";
	$fieldToolTipsmined11["English"]["acoso"] = "";
	$placeHoldersmined11["English"]["acoso"] = "";
	$fieldLabelsmined11["English"]["violacion_sexual"] = "Violacion Sexual";
	$fieldToolTipsmined11["English"]["violacion_sexual"] = "";
	$placeHoldersmined11["English"]["violacion_sexual"] = "";
	$fieldLabelsmined11["English"]["cambio_domicilio"] = "Cambio Domicilio";
	$fieldToolTipsmined11["English"]["cambio_domicilio"] = "";
	$placeHoldersmined11["English"]["cambio_domicilio"] = "";
	$fieldLabelsmined11["English"]["migracion"] = "Migracion";
	$fieldToolTipsmined11["English"]["migracion"] = "";
	$placeHoldersmined11["English"]["migracion"] = "";
	$fieldLabelsmined11["English"]["bajo_rendimiento"] = "Bajo Rendimiento";
	$fieldToolTipsmined11["English"]["bajo_rendimiento"] = "";
	$placeHoldersmined11["English"]["bajo_rendimiento"] = "";
	$fieldLabelsmined11["English"]["enfermedad"] = "Enfermedad";
	$fieldToolTipsmined11["English"]["enfermedad"] = "";
	$placeHoldersmined11["English"]["enfermedad"] = "";
	$fieldLabelsmined11["English"]["prostitucion"] = "Prostitucion";
	$fieldToolTipsmined11["English"]["prostitucion"] = "";
	$placeHoldersmined11["English"]["prostitucion"] = "";
	$fieldLabelsmined11["English"]["dep_mun"] = "Dep Mun";
	$fieldToolTipsmined11["English"]["dep_mun"] = "";
	$placeHoldersmined11["English"]["dep_mun"] = "";
	$fieldLabelsmined11["English"]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipsmined11["English"]["max_matric2016"] = "";
	$placeHoldersmined11["English"]["max_matric2016"] = "";
	$fieldLabelsmined11["English"]["mrf2016"] = "Mrf2016";
	$fieldToolTipsmined11["English"]["mrf2016"] = "";
	$placeHoldersmined11["English"]["mrf2016"] = "";
	$fieldLabelsmined11["English"]["pab_af"] = "Pab Af";
	$fieldToolTipsmined11["English"]["pab_af"] = "";
	$placeHoldersmined11["English"]["pab_af"] = "";
	$fieldLabelsmined11["English"]["r_h"] = "R H";
	$fieldToolTipsmined11["English"]["r_h"] = "";
	$placeHoldersmined11["English"]["r_h"] = "";
	$fieldLabelsmined11["English"]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipsmined11["English"]["ipce_naive"] = "";
	$placeHoldersmined11["English"]["ipce_naive"] = "";
	$fieldLabelsmined11["English"]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipsmined11["English"]["ipce_0_1"] = "";
	$placeHoldersmined11["English"]["ipce_0_1"] = "";
	$fieldLabelsmined11["English"]["a_o"] = "AÑo";
	$fieldToolTipsmined11["English"]["a_o"] = "";
	$placeHoldersmined11["English"]["a_o"] = "";
	if (count($fieldToolTipsmined11["English"]))
		$tdatamined11[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmined11[""] = array();
	$fieldToolTipsmined11[""] = array();
	$placeHoldersmined11[""] = array();
	$pageTitlesmined11[""] = array();
	$fieldLabelsmined11[""]["idderespuesta"] = "Idderespuesta";
	$fieldToolTipsmined11[""]["idderespuesta"] = "";
	$placeHoldersmined11[""]["idderespuesta"] = "";
	$fieldLabelsmined11[""]["codigo"] = "Codigo";
	$fieldToolTipsmined11[""]["codigo"] = "";
	$placeHoldersmined11[""]["codigo"] = "";
	$fieldLabelsmined11[""]["depto"] = "Depto";
	$fieldToolTipsmined11[""]["depto"] = "";
	$placeHoldersmined11[""]["depto"] = "";
	$fieldLabelsmined11[""]["departamento"] = "Departamento";
	$fieldToolTipsmined11[""]["departamento"] = "";
	$placeHoldersmined11[""]["departamento"] = "";
	$fieldLabelsmined11[""]["mun"] = "Mun";
	$fieldToolTipsmined11[""]["mun"] = "";
	$placeHoldersmined11[""]["mun"] = "";
	$fieldLabelsmined11[""]["municipio"] = "Municipio";
	$fieldToolTipsmined11[""]["municipio"] = "";
	$placeHoldersmined11[""]["municipio"] = "";
	$fieldLabelsmined11[""]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsmined11[""]["nombre_c_e"] = "";
	$placeHoldersmined11[""]["nombre_c_e"] = "";
	$fieldLabelsmined11[""]["x"] = "X";
	$fieldToolTipsmined11[""]["x"] = "";
	$placeHoldersmined11[""]["x"] = "";
	$fieldLabelsmined11[""]["y"] = "Y";
	$fieldToolTipsmined11[""]["y"] = "";
	$placeHoldersmined11[""]["y"] = "";
	$fieldLabelsmined11[""]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsmined11[""]["sector_ppd"] = "";
	$placeHoldersmined11[""]["sector_ppd"] = "";
	$fieldLabelsmined11[""]["matricula_inicial"] = "Matricula Inicial";
	$fieldToolTipsmined11[""]["matricula_inicial"] = "";
	$placeHoldersmined11[""]["matricula_inicial"] = "";
	$fieldLabelsmined11[""]["matricula_final"] = "Matricula Final";
	$fieldToolTipsmined11[""]["matricula_final"] = "";
	$placeHoldersmined11[""]["matricula_final"] = "";
	$fieldLabelsmined11[""]["maras"] = "Maras";
	$fieldToolTipsmined11[""]["maras"] = "";
	$placeHoldersmined11[""]["maras"] = "";
	$fieldLabelsmined11[""]["robos"] = "Robos";
	$fieldToolTipsmined11[""]["robos"] = "";
	$placeHoldersmined11[""]["robos"] = "";
	$fieldLabelsmined11[""]["hurtos"] = "Hurtos";
	$fieldToolTipsmined11[""]["hurtos"] = "";
	$placeHoldersmined11[""]["hurtos"] = "";
	$fieldLabelsmined11[""]["drogas"] = "Drogas";
	$fieldToolTipsmined11[""]["drogas"] = "";
	$placeHoldersmined11[""]["drogas"] = "";
	$fieldLabelsmined11[""]["violaciones"] = "Violaciones";
	$fieldToolTipsmined11[""]["violaciones"] = "";
	$placeHoldersmined11[""]["violaciones"] = "";
	$fieldLabelsmined11[""]["pab"] = "Pab";
	$fieldToolTipsmined11[""]["pab"] = "";
	$placeHoldersmined11[""]["pab"] = "";
	$fieldLabelsmined11[""]["paf"] = "Paf";
	$fieldToolTipsmined11[""]["paf"] = "";
	$placeHoldersmined11[""]["paf"] = "";
	$fieldLabelsmined11[""]["escasos_recursos"] = "Escasos Recursos";
	$fieldToolTipsmined11[""]["escasos_recursos"] = "";
	$placeHoldersmined11[""]["escasos_recursos"] = "";
	$fieldLabelsmined11[""]["incorpo_actividades_prod"] = "Incorpo Actividades Prod";
	$fieldToolTipsmined11[""]["incorpo_actividades_prod"] = "";
	$placeHoldersmined11[""]["incorpo_actividades_prod"] = "";
	$fieldLabelsmined11[""]["lejania_ce"] = "Lejania Ce";
	$fieldToolTipsmined11[""]["lejania_ce"] = "";
	$placeHoldersmined11[""]["lejania_ce"] = "";
	$fieldLabelsmined11[""]["violencia_pandilleril"] = "Violencia Pandilleril";
	$fieldToolTipsmined11[""]["violencia_pandilleril"] = "";
	$placeHoldersmined11[""]["violencia_pandilleril"] = "";
	$fieldLabelsmined11[""]["embarazo"] = "Embarazo";
	$fieldToolTipsmined11[""]["embarazo"] = "";
	$placeHoldersmined11[""]["embarazo"] = "";
	$fieldLabelsmined11[""]["acoso"] = "Acoso";
	$fieldToolTipsmined11[""]["acoso"] = "";
	$placeHoldersmined11[""]["acoso"] = "";
	$fieldLabelsmined11[""]["violacion_sexual"] = "Violacion Sexual";
	$fieldToolTipsmined11[""]["violacion_sexual"] = "";
	$placeHoldersmined11[""]["violacion_sexual"] = "";
	$fieldLabelsmined11[""]["cambio_domicilio"] = "Cambio Domicilio";
	$fieldToolTipsmined11[""]["cambio_domicilio"] = "";
	$placeHoldersmined11[""]["cambio_domicilio"] = "";
	$fieldLabelsmined11[""]["migracion"] = "Migracion";
	$fieldToolTipsmined11[""]["migracion"] = "";
	$placeHoldersmined11[""]["migracion"] = "";
	$fieldLabelsmined11[""]["bajo_rendimiento"] = "Bajo Rendimiento";
	$fieldToolTipsmined11[""]["bajo_rendimiento"] = "";
	$placeHoldersmined11[""]["bajo_rendimiento"] = "";
	$fieldLabelsmined11[""]["enfermedad"] = "Enfermedad";
	$fieldToolTipsmined11[""]["enfermedad"] = "";
	$placeHoldersmined11[""]["enfermedad"] = "";
	$fieldLabelsmined11[""]["prostitucion"] = "Prostitucion";
	$fieldToolTipsmined11[""]["prostitucion"] = "";
	$placeHoldersmined11[""]["prostitucion"] = "";
	$fieldLabelsmined11[""]["dep_mun"] = "Dep Mun";
	$fieldToolTipsmined11[""]["dep_mun"] = "";
	$placeHoldersmined11[""]["dep_mun"] = "";
	$fieldLabelsmined11[""]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipsmined11[""]["max_matric2016"] = "";
	$placeHoldersmined11[""]["max_matric2016"] = "";
	$fieldLabelsmined11[""]["mrf2016"] = "Mrf2016";
	$fieldToolTipsmined11[""]["mrf2016"] = "";
	$placeHoldersmined11[""]["mrf2016"] = "";
	$fieldLabelsmined11[""]["pab_af"] = "Pab Af";
	$fieldToolTipsmined11[""]["pab_af"] = "";
	$placeHoldersmined11[""]["pab_af"] = "";
	$fieldLabelsmined11[""]["r_h"] = "R H";
	$fieldToolTipsmined11[""]["r_h"] = "";
	$placeHoldersmined11[""]["r_h"] = "";
	$fieldLabelsmined11[""]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipsmined11[""]["ipce_naive"] = "";
	$placeHoldersmined11[""]["ipce_naive"] = "";
	$fieldLabelsmined11[""]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipsmined11[""]["ipce_0_1"] = "";
	$placeHoldersmined11[""]["ipce_0_1"] = "";
	$fieldLabelsmined11[""]["a_o"] = "AÑo";
	$fieldToolTipsmined11[""]["a_o"] = "";
	$placeHoldersmined11[""]["a_o"] = "";
	if (count($fieldToolTipsmined11[""]))
		$tdatamined11[".isUseToolTips"] = true;
}


	$tdatamined11[".NCSearch"] = true;



$tdatamined11[".shortTableName"] = "mined11";
$tdatamined11[".nSecOptions"] = 0;
$tdatamined11[".recsPerRowPrint"] = 1;
$tdatamined11[".mainTableOwnerID"] = "";
$tdatamined11[".moveNext"] = 1;
$tdatamined11[".entityType"] = 0;

$tdatamined11[".strOriginalTableName"] = "mined1";

	



$tdatamined11[".showAddInPopup"] = false;

$tdatamined11[".showEditInPopup"] = false;

$tdatamined11[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamined11[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamined11[".fieldsForRegister"] = array();

$tdatamined11[".listAjax"] = false;

	$tdatamined11[".audit"] = false;

	$tdatamined11[".locking"] = false;



$tdatamined11[".list"] = true;



$tdatamined11[".reorderRecordsByHeader"] = true;




$tdatamined11[".import"] = true;

$tdatamined11[".exportTo"] = true;

$tdatamined11[".printFriendly"] = true;


$tdatamined11[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamined11[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamined11[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamined11[".searchSaving"] = false;
//

$tdatamined11[".showSearchPanel"] = true;
		$tdatamined11[".flexibleSearch"] = true;

$tdatamined11[".isUseAjaxSuggest"] = true;

$tdatamined11[".rowHighlite"] = true;





$tdatamined11[".ajaxCodeSnippetAdded"] = false;

$tdatamined11[".buttonsAdded"] = false;

$tdatamined11[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamined11[".isUseTimeForSearch"] = false;





$tdatamined11[".allSearchFields"] = array();
$tdatamined11[".filterFields"] = array();
$tdatamined11[".requiredSearchFields"] = array();

$tdatamined11[".allSearchFields"][] = "idderespuesta";
	$tdatamined11[".allSearchFields"][] = "codigo";
	$tdatamined11[".allSearchFields"][] = "depto";
	$tdatamined11[".allSearchFields"][] = "departamento";
	$tdatamined11[".allSearchFields"][] = "mun";
	$tdatamined11[".allSearchFields"][] = "municipio";
	$tdatamined11[".allSearchFields"][] = "nombre_c_e";
	$tdatamined11[".allSearchFields"][] = "x";
	$tdatamined11[".allSearchFields"][] = "y";
	$tdatamined11[".allSearchFields"][] = "sector_ppd";
	$tdatamined11[".allSearchFields"][] = "matricula_inicial";
	$tdatamined11[".allSearchFields"][] = "matricula_final";
	$tdatamined11[".allSearchFields"][] = "maras";
	$tdatamined11[".allSearchFields"][] = "robos";
	$tdatamined11[".allSearchFields"][] = "hurtos";
	$tdatamined11[".allSearchFields"][] = "drogas";
	$tdatamined11[".allSearchFields"][] = "violaciones";
	$tdatamined11[".allSearchFields"][] = "pab";
	$tdatamined11[".allSearchFields"][] = "paf";
	$tdatamined11[".allSearchFields"][] = "escasos_recursos";
	$tdatamined11[".allSearchFields"][] = "incorpo_actividades_prod";
	$tdatamined11[".allSearchFields"][] = "lejania_ce";
	$tdatamined11[".allSearchFields"][] = "violencia_pandilleril";
	$tdatamined11[".allSearchFields"][] = "embarazo";
	$tdatamined11[".allSearchFields"][] = "acoso";
	$tdatamined11[".allSearchFields"][] = "violacion_sexual";
	$tdatamined11[".allSearchFields"][] = "cambio_domicilio";
	$tdatamined11[".allSearchFields"][] = "migracion";
	$tdatamined11[".allSearchFields"][] = "bajo_rendimiento";
	$tdatamined11[".allSearchFields"][] = "enfermedad";
	$tdatamined11[".allSearchFields"][] = "prostitucion";
	$tdatamined11[".allSearchFields"][] = "dep_mun";
	$tdatamined11[".allSearchFields"][] = "max_matric2016";
	$tdatamined11[".allSearchFields"][] = "mrf2016";
	$tdatamined11[".allSearchFields"][] = "pab_af";
	$tdatamined11[".allSearchFields"][] = "r_h";
	$tdatamined11[".allSearchFields"][] = "ipce_naive";
	$tdatamined11[".allSearchFields"][] = "ipce_0_1";
	$tdatamined11[".allSearchFields"][] = "aÑo";
	

$tdatamined11[".googleLikeFields"] = array();
$tdatamined11[".googleLikeFields"][] = "idderespuesta";
$tdatamined11[".googleLikeFields"][] = "codigo";
$tdatamined11[".googleLikeFields"][] = "depto";
$tdatamined11[".googleLikeFields"][] = "departamento";
$tdatamined11[".googleLikeFields"][] = "mun";
$tdatamined11[".googleLikeFields"][] = "municipio";
$tdatamined11[".googleLikeFields"][] = "nombre_c_e";
$tdatamined11[".googleLikeFields"][] = "x";
$tdatamined11[".googleLikeFields"][] = "y";
$tdatamined11[".googleLikeFields"][] = "sector_ppd";
$tdatamined11[".googleLikeFields"][] = "matricula_inicial";
$tdatamined11[".googleLikeFields"][] = "matricula_final";
$tdatamined11[".googleLikeFields"][] = "maras";
$tdatamined11[".googleLikeFields"][] = "robos";
$tdatamined11[".googleLikeFields"][] = "hurtos";
$tdatamined11[".googleLikeFields"][] = "drogas";
$tdatamined11[".googleLikeFields"][] = "violaciones";
$tdatamined11[".googleLikeFields"][] = "pab";
$tdatamined11[".googleLikeFields"][] = "paf";
$tdatamined11[".googleLikeFields"][] = "escasos_recursos";
$tdatamined11[".googleLikeFields"][] = "incorpo_actividades_prod";
$tdatamined11[".googleLikeFields"][] = "lejania_ce";
$tdatamined11[".googleLikeFields"][] = "violencia_pandilleril";
$tdatamined11[".googleLikeFields"][] = "embarazo";
$tdatamined11[".googleLikeFields"][] = "acoso";
$tdatamined11[".googleLikeFields"][] = "violacion_sexual";
$tdatamined11[".googleLikeFields"][] = "cambio_domicilio";
$tdatamined11[".googleLikeFields"][] = "migracion";
$tdatamined11[".googleLikeFields"][] = "bajo_rendimiento";
$tdatamined11[".googleLikeFields"][] = "enfermedad";
$tdatamined11[".googleLikeFields"][] = "prostitucion";
$tdatamined11[".googleLikeFields"][] = "dep_mun";
$tdatamined11[".googleLikeFields"][] = "max_matric2016";
$tdatamined11[".googleLikeFields"][] = "mrf2016";
$tdatamined11[".googleLikeFields"][] = "pab_af";
$tdatamined11[".googleLikeFields"][] = "r_h";
$tdatamined11[".googleLikeFields"][] = "ipce_naive";
$tdatamined11[".googleLikeFields"][] = "ipce_0_1";
$tdatamined11[".googleLikeFields"][] = "aÑo";


$tdatamined11[".advSearchFields"] = array();
$tdatamined11[".advSearchFields"][] = "idderespuesta";
$tdatamined11[".advSearchFields"][] = "codigo";
$tdatamined11[".advSearchFields"][] = "depto";
$tdatamined11[".advSearchFields"][] = "departamento";
$tdatamined11[".advSearchFields"][] = "mun";
$tdatamined11[".advSearchFields"][] = "municipio";
$tdatamined11[".advSearchFields"][] = "nombre_c_e";
$tdatamined11[".advSearchFields"][] = "x";
$tdatamined11[".advSearchFields"][] = "y";
$tdatamined11[".advSearchFields"][] = "sector_ppd";
$tdatamined11[".advSearchFields"][] = "matricula_inicial";
$tdatamined11[".advSearchFields"][] = "matricula_final";
$tdatamined11[".advSearchFields"][] = "maras";
$tdatamined11[".advSearchFields"][] = "robos";
$tdatamined11[".advSearchFields"][] = "hurtos";
$tdatamined11[".advSearchFields"][] = "drogas";
$tdatamined11[".advSearchFields"][] = "violaciones";
$tdatamined11[".advSearchFields"][] = "pab";
$tdatamined11[".advSearchFields"][] = "paf";
$tdatamined11[".advSearchFields"][] = "escasos_recursos";
$tdatamined11[".advSearchFields"][] = "incorpo_actividades_prod";
$tdatamined11[".advSearchFields"][] = "lejania_ce";
$tdatamined11[".advSearchFields"][] = "violencia_pandilleril";
$tdatamined11[".advSearchFields"][] = "embarazo";
$tdatamined11[".advSearchFields"][] = "acoso";
$tdatamined11[".advSearchFields"][] = "violacion_sexual";
$tdatamined11[".advSearchFields"][] = "cambio_domicilio";
$tdatamined11[".advSearchFields"][] = "migracion";
$tdatamined11[".advSearchFields"][] = "bajo_rendimiento";
$tdatamined11[".advSearchFields"][] = "enfermedad";
$tdatamined11[".advSearchFields"][] = "prostitucion";
$tdatamined11[".advSearchFields"][] = "dep_mun";
$tdatamined11[".advSearchFields"][] = "max_matric2016";
$tdatamined11[".advSearchFields"][] = "mrf2016";
$tdatamined11[".advSearchFields"][] = "pab_af";
$tdatamined11[".advSearchFields"][] = "r_h";
$tdatamined11[".advSearchFields"][] = "ipce_naive";
$tdatamined11[".advSearchFields"][] = "ipce_0_1";
$tdatamined11[".advSearchFields"][] = "aÑo";

$tdatamined11[".tableType"] = "list";

$tdatamined11[".printerPageOrientation"] = 0;
$tdatamined11[".nPrinterPageScale"] = 100;

$tdatamined11[".nPrinterSplitRecords"] = 40;

$tdatamined11[".nPrinterPDFSplitRecords"] = 40;



$tdatamined11[".geocodingEnabled"] = false;





$tdatamined11[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamined11[".pageSize"] = 20;

$tdatamined11[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamined11[".strOrderBy"] = $tstrOrderBy;

$tdatamined11[".orderindexes"] = array();

$tdatamined11[".sqlHead"] = "SELECT idderespuesta,  	codigo,  	depto,  	departamento,  	mun,  	municipio,  	nombre_c_e,  	x,  	y,  	sector_ppd,  	matricula_inicial,  	matricula_final,  	maras,  	robos,  	hurtos,  	drogas,  	violaciones,  	pab,  	paf,  	escasos_recursos,  	incorpo_actividades_prod,  	lejania_ce,  	violencia_pandilleril,  	embarazo,  	acoso,  	violacion_sexual,  	cambio_domicilio,  	migracion,  	bajo_rendimiento,  	enfermedad,  	prostitucion,  	dep_mun,  	max_matric2016,  	mrf2016,  	pab_af,  	r_h,  	ipce_naive,  	ipce_0_1,  	`aÑo`";
$tdatamined11[".sqlFrom"] = "FROM mined1";
$tdatamined11[".sqlWhereExpr"] = "";
$tdatamined11[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamined11[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamined11[".arrGroupsPerPage"] = $arrGPP;

$tdatamined11[".highlightSearchResults"] = true;

$tableKeysmined11 = array();
$tdatamined11[".Keys"] = $tableKeysmined11;

$tdatamined11[".listFields"] = array();
$tdatamined11[".listFields"][] = "idderespuesta";
$tdatamined11[".listFields"][] = "codigo";
$tdatamined11[".listFields"][] = "depto";
$tdatamined11[".listFields"][] = "departamento";
$tdatamined11[".listFields"][] = "mun";
$tdatamined11[".listFields"][] = "municipio";
$tdatamined11[".listFields"][] = "nombre_c_e";
$tdatamined11[".listFields"][] = "x";
$tdatamined11[".listFields"][] = "y";
$tdatamined11[".listFields"][] = "sector_ppd";
$tdatamined11[".listFields"][] = "matricula_inicial";
$tdatamined11[".listFields"][] = "matricula_final";
$tdatamined11[".listFields"][] = "maras";
$tdatamined11[".listFields"][] = "robos";
$tdatamined11[".listFields"][] = "hurtos";
$tdatamined11[".listFields"][] = "drogas";
$tdatamined11[".listFields"][] = "violaciones";
$tdatamined11[".listFields"][] = "pab";
$tdatamined11[".listFields"][] = "paf";
$tdatamined11[".listFields"][] = "escasos_recursos";
$tdatamined11[".listFields"][] = "incorpo_actividades_prod";
$tdatamined11[".listFields"][] = "lejania_ce";
$tdatamined11[".listFields"][] = "violencia_pandilleril";
$tdatamined11[".listFields"][] = "embarazo";
$tdatamined11[".listFields"][] = "acoso";
$tdatamined11[".listFields"][] = "violacion_sexual";
$tdatamined11[".listFields"][] = "cambio_domicilio";
$tdatamined11[".listFields"][] = "migracion";
$tdatamined11[".listFields"][] = "bajo_rendimiento";
$tdatamined11[".listFields"][] = "enfermedad";
$tdatamined11[".listFields"][] = "prostitucion";
$tdatamined11[".listFields"][] = "dep_mun";
$tdatamined11[".listFields"][] = "max_matric2016";
$tdatamined11[".listFields"][] = "mrf2016";
$tdatamined11[".listFields"][] = "pab_af";
$tdatamined11[".listFields"][] = "r_h";
$tdatamined11[".listFields"][] = "ipce_naive";
$tdatamined11[".listFields"][] = "ipce_0_1";
$tdatamined11[".listFields"][] = "aÑo";

$tdatamined11[".hideMobileList"] = array();


$tdatamined11[".viewFields"] = array();
$tdatamined11[".viewFields"][] = "idderespuesta";
$tdatamined11[".viewFields"][] = "codigo";
$tdatamined11[".viewFields"][] = "depto";
$tdatamined11[".viewFields"][] = "departamento";
$tdatamined11[".viewFields"][] = "mun";
$tdatamined11[".viewFields"][] = "municipio";
$tdatamined11[".viewFields"][] = "nombre_c_e";
$tdatamined11[".viewFields"][] = "x";
$tdatamined11[".viewFields"][] = "y";
$tdatamined11[".viewFields"][] = "sector_ppd";
$tdatamined11[".viewFields"][] = "matricula_inicial";
$tdatamined11[".viewFields"][] = "matricula_final";
$tdatamined11[".viewFields"][] = "maras";
$tdatamined11[".viewFields"][] = "robos";
$tdatamined11[".viewFields"][] = "hurtos";
$tdatamined11[".viewFields"][] = "drogas";
$tdatamined11[".viewFields"][] = "violaciones";
$tdatamined11[".viewFields"][] = "pab";
$tdatamined11[".viewFields"][] = "paf";
$tdatamined11[".viewFields"][] = "escasos_recursos";
$tdatamined11[".viewFields"][] = "incorpo_actividades_prod";
$tdatamined11[".viewFields"][] = "lejania_ce";
$tdatamined11[".viewFields"][] = "violencia_pandilleril";
$tdatamined11[".viewFields"][] = "embarazo";
$tdatamined11[".viewFields"][] = "acoso";
$tdatamined11[".viewFields"][] = "violacion_sexual";
$tdatamined11[".viewFields"][] = "cambio_domicilio";
$tdatamined11[".viewFields"][] = "migracion";
$tdatamined11[".viewFields"][] = "bajo_rendimiento";
$tdatamined11[".viewFields"][] = "enfermedad";
$tdatamined11[".viewFields"][] = "prostitucion";
$tdatamined11[".viewFields"][] = "dep_mun";
$tdatamined11[".viewFields"][] = "max_matric2016";
$tdatamined11[".viewFields"][] = "mrf2016";
$tdatamined11[".viewFields"][] = "pab_af";
$tdatamined11[".viewFields"][] = "r_h";
$tdatamined11[".viewFields"][] = "ipce_naive";
$tdatamined11[".viewFields"][] = "ipce_0_1";
$tdatamined11[".viewFields"][] = "aÑo";

$tdatamined11[".addFields"] = array();
$tdatamined11[".addFields"][] = "idderespuesta";
$tdatamined11[".addFields"][] = "codigo";
$tdatamined11[".addFields"][] = "depto";
$tdatamined11[".addFields"][] = "departamento";
$tdatamined11[".addFields"][] = "mun";
$tdatamined11[".addFields"][] = "municipio";
$tdatamined11[".addFields"][] = "nombre_c_e";
$tdatamined11[".addFields"][] = "x";
$tdatamined11[".addFields"][] = "y";
$tdatamined11[".addFields"][] = "sector_ppd";
$tdatamined11[".addFields"][] = "matricula_inicial";
$tdatamined11[".addFields"][] = "matricula_final";
$tdatamined11[".addFields"][] = "maras";
$tdatamined11[".addFields"][] = "robos";
$tdatamined11[".addFields"][] = "hurtos";
$tdatamined11[".addFields"][] = "drogas";
$tdatamined11[".addFields"][] = "violaciones";
$tdatamined11[".addFields"][] = "pab";
$tdatamined11[".addFields"][] = "paf";
$tdatamined11[".addFields"][] = "escasos_recursos";
$tdatamined11[".addFields"][] = "incorpo_actividades_prod";
$tdatamined11[".addFields"][] = "lejania_ce";
$tdatamined11[".addFields"][] = "violencia_pandilleril";
$tdatamined11[".addFields"][] = "embarazo";
$tdatamined11[".addFields"][] = "acoso";
$tdatamined11[".addFields"][] = "violacion_sexual";
$tdatamined11[".addFields"][] = "cambio_domicilio";
$tdatamined11[".addFields"][] = "migracion";
$tdatamined11[".addFields"][] = "bajo_rendimiento";
$tdatamined11[".addFields"][] = "enfermedad";
$tdatamined11[".addFields"][] = "prostitucion";
$tdatamined11[".addFields"][] = "dep_mun";
$tdatamined11[".addFields"][] = "max_matric2016";
$tdatamined11[".addFields"][] = "mrf2016";
$tdatamined11[".addFields"][] = "pab_af";
$tdatamined11[".addFields"][] = "r_h";
$tdatamined11[".addFields"][] = "ipce_naive";
$tdatamined11[".addFields"][] = "ipce_0_1";
$tdatamined11[".addFields"][] = "aÑo";

$tdatamined11[".masterListFields"] = array();
$tdatamined11[".masterListFields"][] = "idderespuesta";
$tdatamined11[".masterListFields"][] = "codigo";
$tdatamined11[".masterListFields"][] = "depto";
$tdatamined11[".masterListFields"][] = "departamento";
$tdatamined11[".masterListFields"][] = "mun";
$tdatamined11[".masterListFields"][] = "municipio";
$tdatamined11[".masterListFields"][] = "nombre_c_e";
$tdatamined11[".masterListFields"][] = "x";
$tdatamined11[".masterListFields"][] = "y";
$tdatamined11[".masterListFields"][] = "sector_ppd";
$tdatamined11[".masterListFields"][] = "matricula_inicial";
$tdatamined11[".masterListFields"][] = "matricula_final";
$tdatamined11[".masterListFields"][] = "maras";
$tdatamined11[".masterListFields"][] = "robos";
$tdatamined11[".masterListFields"][] = "hurtos";
$tdatamined11[".masterListFields"][] = "drogas";
$tdatamined11[".masterListFields"][] = "violaciones";
$tdatamined11[".masterListFields"][] = "pab";
$tdatamined11[".masterListFields"][] = "paf";
$tdatamined11[".masterListFields"][] = "escasos_recursos";
$tdatamined11[".masterListFields"][] = "incorpo_actividades_prod";
$tdatamined11[".masterListFields"][] = "lejania_ce";
$tdatamined11[".masterListFields"][] = "violencia_pandilleril";
$tdatamined11[".masterListFields"][] = "embarazo";
$tdatamined11[".masterListFields"][] = "acoso";
$tdatamined11[".masterListFields"][] = "violacion_sexual";
$tdatamined11[".masterListFields"][] = "cambio_domicilio";
$tdatamined11[".masterListFields"][] = "migracion";
$tdatamined11[".masterListFields"][] = "bajo_rendimiento";
$tdatamined11[".masterListFields"][] = "enfermedad";
$tdatamined11[".masterListFields"][] = "prostitucion";
$tdatamined11[".masterListFields"][] = "dep_mun";
$tdatamined11[".masterListFields"][] = "max_matric2016";
$tdatamined11[".masterListFields"][] = "mrf2016";
$tdatamined11[".masterListFields"][] = "pab_af";
$tdatamined11[".masterListFields"][] = "r_h";
$tdatamined11[".masterListFields"][] = "ipce_naive";
$tdatamined11[".masterListFields"][] = "ipce_0_1";
$tdatamined11[".masterListFields"][] = "aÑo";

$tdatamined11[".inlineAddFields"] = array();
$tdatamined11[".inlineAddFields"][] = "idderespuesta";
$tdatamined11[".inlineAddFields"][] = "codigo";
$tdatamined11[".inlineAddFields"][] = "depto";
$tdatamined11[".inlineAddFields"][] = "departamento";
$tdatamined11[".inlineAddFields"][] = "mun";
$tdatamined11[".inlineAddFields"][] = "municipio";
$tdatamined11[".inlineAddFields"][] = "nombre_c_e";
$tdatamined11[".inlineAddFields"][] = "x";
$tdatamined11[".inlineAddFields"][] = "y";
$tdatamined11[".inlineAddFields"][] = "sector_ppd";
$tdatamined11[".inlineAddFields"][] = "matricula_inicial";
$tdatamined11[".inlineAddFields"][] = "matricula_final";
$tdatamined11[".inlineAddFields"][] = "maras";
$tdatamined11[".inlineAddFields"][] = "robos";
$tdatamined11[".inlineAddFields"][] = "hurtos";
$tdatamined11[".inlineAddFields"][] = "drogas";
$tdatamined11[".inlineAddFields"][] = "violaciones";
$tdatamined11[".inlineAddFields"][] = "pab";
$tdatamined11[".inlineAddFields"][] = "paf";
$tdatamined11[".inlineAddFields"][] = "escasos_recursos";
$tdatamined11[".inlineAddFields"][] = "incorpo_actividades_prod";
$tdatamined11[".inlineAddFields"][] = "lejania_ce";
$tdatamined11[".inlineAddFields"][] = "violencia_pandilleril";
$tdatamined11[".inlineAddFields"][] = "embarazo";
$tdatamined11[".inlineAddFields"][] = "acoso";
$tdatamined11[".inlineAddFields"][] = "violacion_sexual";
$tdatamined11[".inlineAddFields"][] = "cambio_domicilio";
$tdatamined11[".inlineAddFields"][] = "migracion";
$tdatamined11[".inlineAddFields"][] = "bajo_rendimiento";
$tdatamined11[".inlineAddFields"][] = "enfermedad";
$tdatamined11[".inlineAddFields"][] = "prostitucion";
$tdatamined11[".inlineAddFields"][] = "dep_mun";
$tdatamined11[".inlineAddFields"][] = "max_matric2016";
$tdatamined11[".inlineAddFields"][] = "mrf2016";
$tdatamined11[".inlineAddFields"][] = "pab_af";
$tdatamined11[".inlineAddFields"][] = "r_h";
$tdatamined11[".inlineAddFields"][] = "ipce_naive";
$tdatamined11[".inlineAddFields"][] = "ipce_0_1";
$tdatamined11[".inlineAddFields"][] = "aÑo";

$tdatamined11[".editFields"] = array();
$tdatamined11[".editFields"][] = "idderespuesta";
$tdatamined11[".editFields"][] = "codigo";
$tdatamined11[".editFields"][] = "depto";
$tdatamined11[".editFields"][] = "departamento";
$tdatamined11[".editFields"][] = "mun";
$tdatamined11[".editFields"][] = "municipio";
$tdatamined11[".editFields"][] = "nombre_c_e";
$tdatamined11[".editFields"][] = "x";
$tdatamined11[".editFields"][] = "y";
$tdatamined11[".editFields"][] = "sector_ppd";
$tdatamined11[".editFields"][] = "matricula_inicial";
$tdatamined11[".editFields"][] = "matricula_final";
$tdatamined11[".editFields"][] = "maras";
$tdatamined11[".editFields"][] = "robos";
$tdatamined11[".editFields"][] = "hurtos";
$tdatamined11[".editFields"][] = "drogas";
$tdatamined11[".editFields"][] = "violaciones";
$tdatamined11[".editFields"][] = "pab";
$tdatamined11[".editFields"][] = "paf";
$tdatamined11[".editFields"][] = "escasos_recursos";
$tdatamined11[".editFields"][] = "incorpo_actividades_prod";
$tdatamined11[".editFields"][] = "lejania_ce";
$tdatamined11[".editFields"][] = "violencia_pandilleril";
$tdatamined11[".editFields"][] = "embarazo";
$tdatamined11[".editFields"][] = "acoso";
$tdatamined11[".editFields"][] = "violacion_sexual";
$tdatamined11[".editFields"][] = "cambio_domicilio";
$tdatamined11[".editFields"][] = "migracion";
$tdatamined11[".editFields"][] = "bajo_rendimiento";
$tdatamined11[".editFields"][] = "enfermedad";
$tdatamined11[".editFields"][] = "prostitucion";
$tdatamined11[".editFields"][] = "dep_mun";
$tdatamined11[".editFields"][] = "max_matric2016";
$tdatamined11[".editFields"][] = "mrf2016";
$tdatamined11[".editFields"][] = "pab_af";
$tdatamined11[".editFields"][] = "r_h";
$tdatamined11[".editFields"][] = "ipce_naive";
$tdatamined11[".editFields"][] = "ipce_0_1";
$tdatamined11[".editFields"][] = "aÑo";

$tdatamined11[".inlineEditFields"] = array();
$tdatamined11[".inlineEditFields"][] = "idderespuesta";
$tdatamined11[".inlineEditFields"][] = "codigo";
$tdatamined11[".inlineEditFields"][] = "depto";
$tdatamined11[".inlineEditFields"][] = "departamento";
$tdatamined11[".inlineEditFields"][] = "mun";
$tdatamined11[".inlineEditFields"][] = "municipio";
$tdatamined11[".inlineEditFields"][] = "nombre_c_e";
$tdatamined11[".inlineEditFields"][] = "x";
$tdatamined11[".inlineEditFields"][] = "y";
$tdatamined11[".inlineEditFields"][] = "sector_ppd";
$tdatamined11[".inlineEditFields"][] = "matricula_inicial";
$tdatamined11[".inlineEditFields"][] = "matricula_final";
$tdatamined11[".inlineEditFields"][] = "maras";
$tdatamined11[".inlineEditFields"][] = "robos";
$tdatamined11[".inlineEditFields"][] = "hurtos";
$tdatamined11[".inlineEditFields"][] = "drogas";
$tdatamined11[".inlineEditFields"][] = "violaciones";
$tdatamined11[".inlineEditFields"][] = "pab";
$tdatamined11[".inlineEditFields"][] = "paf";
$tdatamined11[".inlineEditFields"][] = "escasos_recursos";
$tdatamined11[".inlineEditFields"][] = "incorpo_actividades_prod";
$tdatamined11[".inlineEditFields"][] = "lejania_ce";
$tdatamined11[".inlineEditFields"][] = "violencia_pandilleril";
$tdatamined11[".inlineEditFields"][] = "embarazo";
$tdatamined11[".inlineEditFields"][] = "acoso";
$tdatamined11[".inlineEditFields"][] = "violacion_sexual";
$tdatamined11[".inlineEditFields"][] = "cambio_domicilio";
$tdatamined11[".inlineEditFields"][] = "migracion";
$tdatamined11[".inlineEditFields"][] = "bajo_rendimiento";
$tdatamined11[".inlineEditFields"][] = "enfermedad";
$tdatamined11[".inlineEditFields"][] = "prostitucion";
$tdatamined11[".inlineEditFields"][] = "dep_mun";
$tdatamined11[".inlineEditFields"][] = "max_matric2016";
$tdatamined11[".inlineEditFields"][] = "mrf2016";
$tdatamined11[".inlineEditFields"][] = "pab_af";
$tdatamined11[".inlineEditFields"][] = "r_h";
$tdatamined11[".inlineEditFields"][] = "ipce_naive";
$tdatamined11[".inlineEditFields"][] = "ipce_0_1";
$tdatamined11[".inlineEditFields"][] = "aÑo";

$tdatamined11[".updateSelectedFields"] = array();
$tdatamined11[".updateSelectedFields"][] = "idderespuesta";
$tdatamined11[".updateSelectedFields"][] = "codigo";
$tdatamined11[".updateSelectedFields"][] = "depto";
$tdatamined11[".updateSelectedFields"][] = "departamento";
$tdatamined11[".updateSelectedFields"][] = "mun";
$tdatamined11[".updateSelectedFields"][] = "municipio";
$tdatamined11[".updateSelectedFields"][] = "nombre_c_e";
$tdatamined11[".updateSelectedFields"][] = "x";
$tdatamined11[".updateSelectedFields"][] = "y";
$tdatamined11[".updateSelectedFields"][] = "sector_ppd";
$tdatamined11[".updateSelectedFields"][] = "matricula_inicial";
$tdatamined11[".updateSelectedFields"][] = "matricula_final";
$tdatamined11[".updateSelectedFields"][] = "maras";
$tdatamined11[".updateSelectedFields"][] = "robos";
$tdatamined11[".updateSelectedFields"][] = "hurtos";
$tdatamined11[".updateSelectedFields"][] = "drogas";
$tdatamined11[".updateSelectedFields"][] = "violaciones";
$tdatamined11[".updateSelectedFields"][] = "pab";
$tdatamined11[".updateSelectedFields"][] = "paf";
$tdatamined11[".updateSelectedFields"][] = "escasos_recursos";
$tdatamined11[".updateSelectedFields"][] = "incorpo_actividades_prod";
$tdatamined11[".updateSelectedFields"][] = "lejania_ce";
$tdatamined11[".updateSelectedFields"][] = "violencia_pandilleril";
$tdatamined11[".updateSelectedFields"][] = "embarazo";
$tdatamined11[".updateSelectedFields"][] = "acoso";
$tdatamined11[".updateSelectedFields"][] = "violacion_sexual";
$tdatamined11[".updateSelectedFields"][] = "cambio_domicilio";
$tdatamined11[".updateSelectedFields"][] = "migracion";
$tdatamined11[".updateSelectedFields"][] = "bajo_rendimiento";
$tdatamined11[".updateSelectedFields"][] = "enfermedad";
$tdatamined11[".updateSelectedFields"][] = "prostitucion";
$tdatamined11[".updateSelectedFields"][] = "dep_mun";
$tdatamined11[".updateSelectedFields"][] = "max_matric2016";
$tdatamined11[".updateSelectedFields"][] = "mrf2016";
$tdatamined11[".updateSelectedFields"][] = "pab_af";
$tdatamined11[".updateSelectedFields"][] = "r_h";
$tdatamined11[".updateSelectedFields"][] = "ipce_naive";
$tdatamined11[".updateSelectedFields"][] = "ipce_0_1";
$tdatamined11[".updateSelectedFields"][] = "aÑo";


$tdatamined11[".exportFields"] = array();
$tdatamined11[".exportFields"][] = "idderespuesta";
$tdatamined11[".exportFields"][] = "codigo";
$tdatamined11[".exportFields"][] = "depto";
$tdatamined11[".exportFields"][] = "departamento";
$tdatamined11[".exportFields"][] = "mun";
$tdatamined11[".exportFields"][] = "municipio";
$tdatamined11[".exportFields"][] = "nombre_c_e";
$tdatamined11[".exportFields"][] = "x";
$tdatamined11[".exportFields"][] = "y";
$tdatamined11[".exportFields"][] = "sector_ppd";
$tdatamined11[".exportFields"][] = "matricula_inicial";
$tdatamined11[".exportFields"][] = "matricula_final";
$tdatamined11[".exportFields"][] = "maras";
$tdatamined11[".exportFields"][] = "robos";
$tdatamined11[".exportFields"][] = "hurtos";
$tdatamined11[".exportFields"][] = "drogas";
$tdatamined11[".exportFields"][] = "violaciones";
$tdatamined11[".exportFields"][] = "pab";
$tdatamined11[".exportFields"][] = "paf";
$tdatamined11[".exportFields"][] = "escasos_recursos";
$tdatamined11[".exportFields"][] = "incorpo_actividades_prod";
$tdatamined11[".exportFields"][] = "lejania_ce";
$tdatamined11[".exportFields"][] = "violencia_pandilleril";
$tdatamined11[".exportFields"][] = "embarazo";
$tdatamined11[".exportFields"][] = "acoso";
$tdatamined11[".exportFields"][] = "violacion_sexual";
$tdatamined11[".exportFields"][] = "cambio_domicilio";
$tdatamined11[".exportFields"][] = "migracion";
$tdatamined11[".exportFields"][] = "bajo_rendimiento";
$tdatamined11[".exportFields"][] = "enfermedad";
$tdatamined11[".exportFields"][] = "prostitucion";
$tdatamined11[".exportFields"][] = "dep_mun";
$tdatamined11[".exportFields"][] = "max_matric2016";
$tdatamined11[".exportFields"][] = "mrf2016";
$tdatamined11[".exportFields"][] = "pab_af";
$tdatamined11[".exportFields"][] = "r_h";
$tdatamined11[".exportFields"][] = "ipce_naive";
$tdatamined11[".exportFields"][] = "ipce_0_1";
$tdatamined11[".exportFields"][] = "aÑo";

$tdatamined11[".importFields"] = array();
$tdatamined11[".importFields"][] = "idderespuesta";
$tdatamined11[".importFields"][] = "codigo";
$tdatamined11[".importFields"][] = "depto";
$tdatamined11[".importFields"][] = "departamento";
$tdatamined11[".importFields"][] = "mun";
$tdatamined11[".importFields"][] = "municipio";
$tdatamined11[".importFields"][] = "nombre_c_e";
$tdatamined11[".importFields"][] = "x";
$tdatamined11[".importFields"][] = "y";
$tdatamined11[".importFields"][] = "sector_ppd";
$tdatamined11[".importFields"][] = "matricula_inicial";
$tdatamined11[".importFields"][] = "matricula_final";
$tdatamined11[".importFields"][] = "maras";
$tdatamined11[".importFields"][] = "robos";
$tdatamined11[".importFields"][] = "hurtos";
$tdatamined11[".importFields"][] = "drogas";
$tdatamined11[".importFields"][] = "violaciones";
$tdatamined11[".importFields"][] = "pab";
$tdatamined11[".importFields"][] = "paf";
$tdatamined11[".importFields"][] = "escasos_recursos";
$tdatamined11[".importFields"][] = "incorpo_actividades_prod";
$tdatamined11[".importFields"][] = "lejania_ce";
$tdatamined11[".importFields"][] = "violencia_pandilleril";
$tdatamined11[".importFields"][] = "embarazo";
$tdatamined11[".importFields"][] = "acoso";
$tdatamined11[".importFields"][] = "violacion_sexual";
$tdatamined11[".importFields"][] = "cambio_domicilio";
$tdatamined11[".importFields"][] = "migracion";
$tdatamined11[".importFields"][] = "bajo_rendimiento";
$tdatamined11[".importFields"][] = "enfermedad";
$tdatamined11[".importFields"][] = "prostitucion";
$tdatamined11[".importFields"][] = "dep_mun";
$tdatamined11[".importFields"][] = "max_matric2016";
$tdatamined11[".importFields"][] = "mrf2016";
$tdatamined11[".importFields"][] = "pab_af";
$tdatamined11[".importFields"][] = "r_h";
$tdatamined11[".importFields"][] = "ipce_naive";
$tdatamined11[".importFields"][] = "ipce_0_1";
$tdatamined11[".importFields"][] = "aÑo";

$tdatamined11[".printFields"] = array();
$tdatamined11[".printFields"][] = "idderespuesta";
$tdatamined11[".printFields"][] = "codigo";
$tdatamined11[".printFields"][] = "depto";
$tdatamined11[".printFields"][] = "departamento";
$tdatamined11[".printFields"][] = "mun";
$tdatamined11[".printFields"][] = "municipio";
$tdatamined11[".printFields"][] = "nombre_c_e";
$tdatamined11[".printFields"][] = "x";
$tdatamined11[".printFields"][] = "y";
$tdatamined11[".printFields"][] = "sector_ppd";
$tdatamined11[".printFields"][] = "matricula_inicial";
$tdatamined11[".printFields"][] = "matricula_final";
$tdatamined11[".printFields"][] = "maras";
$tdatamined11[".printFields"][] = "robos";
$tdatamined11[".printFields"][] = "hurtos";
$tdatamined11[".printFields"][] = "drogas";
$tdatamined11[".printFields"][] = "violaciones";
$tdatamined11[".printFields"][] = "pab";
$tdatamined11[".printFields"][] = "paf";
$tdatamined11[".printFields"][] = "escasos_recursos";
$tdatamined11[".printFields"][] = "incorpo_actividades_prod";
$tdatamined11[".printFields"][] = "lejania_ce";
$tdatamined11[".printFields"][] = "violencia_pandilleril";
$tdatamined11[".printFields"][] = "embarazo";
$tdatamined11[".printFields"][] = "acoso";
$tdatamined11[".printFields"][] = "violacion_sexual";
$tdatamined11[".printFields"][] = "cambio_domicilio";
$tdatamined11[".printFields"][] = "migracion";
$tdatamined11[".printFields"][] = "bajo_rendimiento";
$tdatamined11[".printFields"][] = "enfermedad";
$tdatamined11[".printFields"][] = "prostitucion";
$tdatamined11[".printFields"][] = "dep_mun";
$tdatamined11[".printFields"][] = "max_matric2016";
$tdatamined11[".printFields"][] = "mrf2016";
$tdatamined11[".printFields"][] = "pab_af";
$tdatamined11[".printFields"][] = "r_h";
$tdatamined11[".printFields"][] = "ipce_naive";
$tdatamined11[".printFields"][] = "ipce_0_1";
$tdatamined11[".printFields"][] = "aÑo";

//	idderespuesta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idderespuesta";
	$fdata["GoodName"] = "idderespuesta";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","idderespuesta");
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




	$tdatamined11["idderespuesta"] = $fdata;
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","codigo");
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




	$tdatamined11["codigo"] = $fdata;
//	depto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "depto";
	$fdata["GoodName"] = "depto";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","depto");
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




	$tdatamined11["depto"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","departamento");
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




	$tdatamined11["departamento"] = $fdata;
//	mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mun";
	$fdata["GoodName"] = "mun";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","mun");
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




	$tdatamined11["mun"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","municipio");
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




	$tdatamined11["municipio"] = $fdata;
//	nombre_c_e
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nombre_c_e";
	$fdata["GoodName"] = "nombre_c_e";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","nombre_c_e");
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




	$tdatamined11["nombre_c_e"] = $fdata;
//	x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "x";
	$fdata["GoodName"] = "x";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","x");
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




	$tdatamined11["x"] = $fdata;
//	y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "y";
	$fdata["GoodName"] = "y";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","y");
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




	$tdatamined11["y"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","sector_ppd");
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




	$tdatamined11["sector_ppd"] = $fdata;
//	matricula_inicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "matricula_inicial";
	$fdata["GoodName"] = "matricula_inicial";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","matricula_inicial");
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




	$tdatamined11["matricula_inicial"] = $fdata;
//	matricula_final
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "matricula_final";
	$fdata["GoodName"] = "matricula_final";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","matricula_final");
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




	$tdatamined11["matricula_final"] = $fdata;
//	maras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "maras";
	$fdata["GoodName"] = "maras";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","maras");
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




	$tdatamined11["maras"] = $fdata;
//	robos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "robos";
	$fdata["GoodName"] = "robos";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","robos");
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




	$tdatamined11["robos"] = $fdata;
//	hurtos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "hurtos";
	$fdata["GoodName"] = "hurtos";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","hurtos");
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




	$tdatamined11["hurtos"] = $fdata;
//	drogas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "drogas";
	$fdata["GoodName"] = "drogas";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","drogas");
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




	$tdatamined11["drogas"] = $fdata;
//	violaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "violaciones";
	$fdata["GoodName"] = "violaciones";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","violaciones");
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




	$tdatamined11["violaciones"] = $fdata;
//	pab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "pab";
	$fdata["GoodName"] = "pab";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","pab");
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




	$tdatamined11["pab"] = $fdata;
//	paf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "paf";
	$fdata["GoodName"] = "paf";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","paf");
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




	$tdatamined11["paf"] = $fdata;
//	escasos_recursos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "escasos_recursos";
	$fdata["GoodName"] = "escasos_recursos";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","escasos_recursos");
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




	$tdatamined11["escasos_recursos"] = $fdata;
//	incorpo_actividades_prod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "incorpo_actividades_prod";
	$fdata["GoodName"] = "incorpo_actividades_prod";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","incorpo_actividades_prod");
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




	$tdatamined11["incorpo_actividades_prod"] = $fdata;
//	lejania_ce
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "lejania_ce";
	$fdata["GoodName"] = "lejania_ce";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","lejania_ce");
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




	$tdatamined11["lejania_ce"] = $fdata;
//	violencia_pandilleril
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "violencia_pandilleril";
	$fdata["GoodName"] = "violencia_pandilleril";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","violencia_pandilleril");
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




	$tdatamined11["violencia_pandilleril"] = $fdata;
//	embarazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "embarazo";
	$fdata["GoodName"] = "embarazo";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","embarazo");
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




	$tdatamined11["embarazo"] = $fdata;
//	acoso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "acoso";
	$fdata["GoodName"] = "acoso";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","acoso");
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




	$tdatamined11["acoso"] = $fdata;
//	violacion_sexual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "violacion_sexual";
	$fdata["GoodName"] = "violacion_sexual";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","violacion_sexual");
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




	$tdatamined11["violacion_sexual"] = $fdata;
//	cambio_domicilio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "cambio_domicilio";
	$fdata["GoodName"] = "cambio_domicilio";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","cambio_domicilio");
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




	$tdatamined11["cambio_domicilio"] = $fdata;
//	migracion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "migracion";
	$fdata["GoodName"] = "migracion";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","migracion");
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




	$tdatamined11["migracion"] = $fdata;
//	bajo_rendimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "bajo_rendimiento";
	$fdata["GoodName"] = "bajo_rendimiento";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","bajo_rendimiento");
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




	$tdatamined11["bajo_rendimiento"] = $fdata;
//	enfermedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "enfermedad";
	$fdata["GoodName"] = "enfermedad";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","enfermedad");
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




	$tdatamined11["enfermedad"] = $fdata;
//	prostitucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "prostitucion";
	$fdata["GoodName"] = "prostitucion";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","prostitucion");
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




	$tdatamined11["prostitucion"] = $fdata;
//	dep_mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "dep_mun";
	$fdata["GoodName"] = "dep_mun";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","dep_mun");
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




	$tdatamined11["dep_mun"] = $fdata;
//	max_matric2016
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "max_matric2016";
	$fdata["GoodName"] = "max_matric2016";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","max_matric2016");
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




	$tdatamined11["max_matric2016"] = $fdata;
//	mrf2016
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "mrf2016";
	$fdata["GoodName"] = "mrf2016";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","mrf2016");
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




	$tdatamined11["mrf2016"] = $fdata;
//	pab_af
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "pab_af";
	$fdata["GoodName"] = "pab_af";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","pab_af");
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




	$tdatamined11["pab_af"] = $fdata;
//	r_h
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "r_h";
	$fdata["GoodName"] = "r_h";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","r_h");
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




	$tdatamined11["r_h"] = $fdata;
//	ipce_naive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "ipce_naive";
	$fdata["GoodName"] = "ipce_naive";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","ipce_naive");
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




	$tdatamined11["ipce_naive"] = $fdata;
//	ipce_0_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "ipce_0_1";
	$fdata["GoodName"] = "ipce_0_1";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","ipce_0_1");
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




	$tdatamined11["ipce_0_1"] = $fdata;
//	aÑo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "aÑo";
	$fdata["GoodName"] = "a_o";
	$fdata["ownerTable"] = "mined1";
	$fdata["Label"] = GetFieldLabel("mined11","a_o");
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




	$tdatamined11["aÑo"] = $fdata;


$tables_data["mined11"]=&$tdatamined11;
$field_labels["mined11"] = &$fieldLabelsmined11;
$fieldToolTips["mined11"] = &$fieldToolTipsmined11;
$placeHolders["mined11"] = &$placeHoldersmined11;
$page_titles["mined11"] = &$pageTitlesmined11;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mined11"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mined11"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mined11()
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
	"m_srcTableName" => "mined11"
));

$proto6["m_sql"] = "idderespuesta";
$proto6["m_srcTableName"] = "mined11";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto8["m_sql"] = "codigo";
$proto8["m_srcTableName"] = "mined11";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "depto",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto10["m_sql"] = "depto";
$proto10["m_srcTableName"] = "mined11";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto12["m_sql"] = "departamento";
$proto12["m_srcTableName"] = "mined11";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "mun",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto14["m_sql"] = "mun";
$proto14["m_srcTableName"] = "mined11";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto16["m_sql"] = "municipio";
$proto16["m_srcTableName"] = "mined11";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_c_e",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto18["m_sql"] = "nombre_c_e";
$proto18["m_srcTableName"] = "mined11";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "x",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto20["m_sql"] = "x";
$proto20["m_srcTableName"] = "mined11";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "y",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto22["m_sql"] = "y";
$proto22["m_srcTableName"] = "mined11";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto24["m_sql"] = "sector_ppd";
$proto24["m_srcTableName"] = "mined11";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "matricula_inicial",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto26["m_sql"] = "matricula_inicial";
$proto26["m_srcTableName"] = "mined11";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "matricula_final",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto28["m_sql"] = "matricula_final";
$proto28["m_srcTableName"] = "mined11";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "maras",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto30["m_sql"] = "maras";
$proto30["m_srcTableName"] = "mined11";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "robos",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto32["m_sql"] = "robos";
$proto32["m_srcTableName"] = "mined11";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "hurtos",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto34["m_sql"] = "hurtos";
$proto34["m_srcTableName"] = "mined11";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "drogas",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto36["m_sql"] = "drogas";
$proto36["m_srcTableName"] = "mined11";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "violaciones",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto38["m_sql"] = "violaciones";
$proto38["m_srcTableName"] = "mined11";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "pab",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto40["m_sql"] = "pab";
$proto40["m_srcTableName"] = "mined11";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "paf",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto42["m_sql"] = "paf";
$proto42["m_srcTableName"] = "mined11";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "escasos_recursos",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto44["m_sql"] = "escasos_recursos";
$proto44["m_srcTableName"] = "mined11";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "incorpo_actividades_prod",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto46["m_sql"] = "incorpo_actividades_prod";
$proto46["m_srcTableName"] = "mined11";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "lejania_ce",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto48["m_sql"] = "lejania_ce";
$proto48["m_srcTableName"] = "mined11";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "violencia_pandilleril",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto50["m_sql"] = "violencia_pandilleril";
$proto50["m_srcTableName"] = "mined11";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "embarazo",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto52["m_sql"] = "embarazo";
$proto52["m_srcTableName"] = "mined11";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "acoso",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto54["m_sql"] = "acoso";
$proto54["m_srcTableName"] = "mined11";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "violacion_sexual",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto56["m_sql"] = "violacion_sexual";
$proto56["m_srcTableName"] = "mined11";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "cambio_domicilio",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto58["m_sql"] = "cambio_domicilio";
$proto58["m_srcTableName"] = "mined11";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "migracion",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto60["m_sql"] = "migracion";
$proto60["m_srcTableName"] = "mined11";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "bajo_rendimiento",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto62["m_sql"] = "bajo_rendimiento";
$proto62["m_srcTableName"] = "mined11";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "enfermedad",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto64["m_sql"] = "enfermedad";
$proto64["m_srcTableName"] = "mined11";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "prostitucion",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto66["m_sql"] = "prostitucion";
$proto66["m_srcTableName"] = "mined11";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "dep_mun",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto68["m_sql"] = "dep_mun";
$proto68["m_srcTableName"] = "mined11";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "max_matric2016",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto70["m_sql"] = "max_matric2016";
$proto70["m_srcTableName"] = "mined11";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "mrf2016",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto72["m_sql"] = "mrf2016";
$proto72["m_srcTableName"] = "mined11";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "pab_af",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto74["m_sql"] = "pab_af";
$proto74["m_srcTableName"] = "mined11";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "r_h",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto76["m_sql"] = "r_h";
$proto76["m_srcTableName"] = "mined11";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "ipce_naive",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto78["m_sql"] = "ipce_naive";
$proto78["m_srcTableName"] = "mined11";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "ipce_0_1",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto80["m_sql"] = "ipce_0_1";
$proto80["m_srcTableName"] = "mined11";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo",
	"m_strTable" => "mined1",
	"m_srcTableName" => "mined11"
));

$proto82["m_sql"] = "`aÑo`";
$proto82["m_srcTableName"] = "mined11";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto84=array();
$proto84["m_link"] = "SQLL_MAIN";
			$proto85=array();
$proto85["m_strName"] = "mined1";
$proto85["m_srcTableName"] = "mined11";
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
$proto84["m_srcTableName"] = "mined11";
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
$proto0["m_srcTableName"]="mined11";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mined11 = createSqlQuery_mined11();


	
		;

																																							

$tdatamined11[".sqlquery"] = $queryData_mined11;

$tableEvents["mined11"] = new eventsBase;
$tdatamined11[".hasEvents"] = false;

?>