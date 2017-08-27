<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamined4 = array();
	$tdatamined4[".truncateText"] = true;
	$tdatamined4[".NumberOfChars"] = 80;
	$tdatamined4[".ShortName"] = "mined4";
	$tdatamined4[".OwnerID"] = "";
	$tdatamined4[".OriginalTable"] = "mined";

//	field labels
$fieldLabelsmined4 = array();
$fieldToolTipsmined4 = array();
$pageTitlesmined4 = array();
$placeHoldersmined4 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmined4["Spanish"] = array();
	$fieldToolTipsmined4["Spanish"] = array();
	$placeHoldersmined4["Spanish"] = array();
	$pageTitlesmined4["Spanish"] = array();
	$fieldLabelsmined4["Spanish"]["idderespuesta"] = "Idderespuesta";
	$fieldToolTipsmined4["Spanish"]["idderespuesta"] = "";
	$placeHoldersmined4["Spanish"]["idderespuesta"] = "";
	$fieldLabelsmined4["Spanish"]["codigo"] = "Codigo";
	$fieldToolTipsmined4["Spanish"]["codigo"] = "";
	$placeHoldersmined4["Spanish"]["codigo"] = "";
	$fieldLabelsmined4["Spanish"]["depto"] = "Depto";
	$fieldToolTipsmined4["Spanish"]["depto"] = "";
	$placeHoldersmined4["Spanish"]["depto"] = "";
	$fieldLabelsmined4["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsmined4["Spanish"]["departamento"] = "";
	$placeHoldersmined4["Spanish"]["departamento"] = "";
	$fieldLabelsmined4["Spanish"]["mun"] = "Mun";
	$fieldToolTipsmined4["Spanish"]["mun"] = "";
	$placeHoldersmined4["Spanish"]["mun"] = "";
	$fieldLabelsmined4["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsmined4["Spanish"]["municipio"] = "";
	$placeHoldersmined4["Spanish"]["municipio"] = "";
	$fieldLabelsmined4["Spanish"]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsmined4["Spanish"]["nombre_c_e"] = "";
	$placeHoldersmined4["Spanish"]["nombre_c_e"] = "";
	$fieldLabelsmined4["Spanish"]["x"] = "X";
	$fieldToolTipsmined4["Spanish"]["x"] = "";
	$placeHoldersmined4["Spanish"]["x"] = "";
	$fieldLabelsmined4["Spanish"]["y"] = "Y";
	$fieldToolTipsmined4["Spanish"]["y"] = "";
	$placeHoldersmined4["Spanish"]["y"] = "";
	$fieldLabelsmined4["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsmined4["Spanish"]["sector_ppd"] = "";
	$placeHoldersmined4["Spanish"]["sector_ppd"] = "";
	$fieldLabelsmined4["Spanish"]["matricula_inicial"] = "Matricula Inicial";
	$fieldToolTipsmined4["Spanish"]["matricula_inicial"] = "";
	$placeHoldersmined4["Spanish"]["matricula_inicial"] = "";
	$fieldLabelsmined4["Spanish"]["matricula_final"] = "Matricula Final";
	$fieldToolTipsmined4["Spanish"]["matricula_final"] = "";
	$placeHoldersmined4["Spanish"]["matricula_final"] = "";
	$fieldLabelsmined4["Spanish"]["maras"] = "Maras";
	$fieldToolTipsmined4["Spanish"]["maras"] = "";
	$placeHoldersmined4["Spanish"]["maras"] = "";
	$fieldLabelsmined4["Spanish"]["robos"] = "Robos";
	$fieldToolTipsmined4["Spanish"]["robos"] = "";
	$placeHoldersmined4["Spanish"]["robos"] = "";
	$fieldLabelsmined4["Spanish"]["hurtos"] = "Hurtos";
	$fieldToolTipsmined4["Spanish"]["hurtos"] = "";
	$placeHoldersmined4["Spanish"]["hurtos"] = "";
	$fieldLabelsmined4["Spanish"]["drogas"] = "Drogas";
	$fieldToolTipsmined4["Spanish"]["drogas"] = "";
	$placeHoldersmined4["Spanish"]["drogas"] = "";
	$fieldLabelsmined4["Spanish"]["violaciones"] = "Violaciones";
	$fieldToolTipsmined4["Spanish"]["violaciones"] = "";
	$placeHoldersmined4["Spanish"]["violaciones"] = "";
	$fieldLabelsmined4["Spanish"]["pab"] = "Pab";
	$fieldToolTipsmined4["Spanish"]["pab"] = "";
	$placeHoldersmined4["Spanish"]["pab"] = "";
	$fieldLabelsmined4["Spanish"]["paf"] = "Paf";
	$fieldToolTipsmined4["Spanish"]["paf"] = "";
	$placeHoldersmined4["Spanish"]["paf"] = "";
	$fieldLabelsmined4["Spanish"]["escasos_recursos"] = "Escasos Recursos";
	$fieldToolTipsmined4["Spanish"]["escasos_recursos"] = "";
	$placeHoldersmined4["Spanish"]["escasos_recursos"] = "";
	$fieldLabelsmined4["Spanish"]["incorpo_actividades_prod"] = "Incorpo Actividades Prod";
	$fieldToolTipsmined4["Spanish"]["incorpo_actividades_prod"] = "";
	$placeHoldersmined4["Spanish"]["incorpo_actividades_prod"] = "";
	$fieldLabelsmined4["Spanish"]["lejania_ce"] = "Lejania Ce";
	$fieldToolTipsmined4["Spanish"]["lejania_ce"] = "";
	$placeHoldersmined4["Spanish"]["lejania_ce"] = "";
	$fieldLabelsmined4["Spanish"]["violencia_pandilleril"] = "Violencia Pandilleril";
	$fieldToolTipsmined4["Spanish"]["violencia_pandilleril"] = "";
	$placeHoldersmined4["Spanish"]["violencia_pandilleril"] = "";
	$fieldLabelsmined4["Spanish"]["embarazo"] = "Embarazo";
	$fieldToolTipsmined4["Spanish"]["embarazo"] = "";
	$placeHoldersmined4["Spanish"]["embarazo"] = "";
	$fieldLabelsmined4["Spanish"]["acoso"] = "Acoso";
	$fieldToolTipsmined4["Spanish"]["acoso"] = "";
	$placeHoldersmined4["Spanish"]["acoso"] = "";
	$fieldLabelsmined4["Spanish"]["violacion_sexual"] = "Violacion Sexual";
	$fieldToolTipsmined4["Spanish"]["violacion_sexual"] = "";
	$placeHoldersmined4["Spanish"]["violacion_sexual"] = "";
	$fieldLabelsmined4["Spanish"]["cambio_domicilio"] = "Cambio Domicilio";
	$fieldToolTipsmined4["Spanish"]["cambio_domicilio"] = "";
	$placeHoldersmined4["Spanish"]["cambio_domicilio"] = "";
	$fieldLabelsmined4["Spanish"]["migracion"] = "Migracion";
	$fieldToolTipsmined4["Spanish"]["migracion"] = "";
	$placeHoldersmined4["Spanish"]["migracion"] = "";
	$fieldLabelsmined4["Spanish"]["bajo_rendimiento"] = "Bajo Rendimiento";
	$fieldToolTipsmined4["Spanish"]["bajo_rendimiento"] = "";
	$placeHoldersmined4["Spanish"]["bajo_rendimiento"] = "";
	$fieldLabelsmined4["Spanish"]["enfermedad"] = "Enfermedad";
	$fieldToolTipsmined4["Spanish"]["enfermedad"] = "";
	$placeHoldersmined4["Spanish"]["enfermedad"] = "";
	$fieldLabelsmined4["Spanish"]["prostitucion"] = "Prostitucion";
	$fieldToolTipsmined4["Spanish"]["prostitucion"] = "";
	$placeHoldersmined4["Spanish"]["prostitucion"] = "";
	$fieldLabelsmined4["Spanish"]["dep_mun"] = "Dep Mun";
	$fieldToolTipsmined4["Spanish"]["dep_mun"] = "";
	$placeHoldersmined4["Spanish"]["dep_mun"] = "";
	$fieldLabelsmined4["Spanish"]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipsmined4["Spanish"]["max_matric2016"] = "";
	$placeHoldersmined4["Spanish"]["max_matric2016"] = "";
	$fieldLabelsmined4["Spanish"]["mrf2016"] = "Mrf2016";
	$fieldToolTipsmined4["Spanish"]["mrf2016"] = "";
	$placeHoldersmined4["Spanish"]["mrf2016"] = "";
	$fieldLabelsmined4["Spanish"]["pab_af"] = "Pab Af";
	$fieldToolTipsmined4["Spanish"]["pab_af"] = "";
	$placeHoldersmined4["Spanish"]["pab_af"] = "";
	$fieldLabelsmined4["Spanish"]["r_h"] = "R H";
	$fieldToolTipsmined4["Spanish"]["r_h"] = "";
	$placeHoldersmined4["Spanish"]["r_h"] = "";
	$fieldLabelsmined4["Spanish"]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipsmined4["Spanish"]["ipce_naive"] = "";
	$placeHoldersmined4["Spanish"]["ipce_naive"] = "";
	$fieldLabelsmined4["Spanish"]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipsmined4["Spanish"]["ipce_0_1"] = "";
	$placeHoldersmined4["Spanish"]["ipce_0_1"] = "";
	$fieldLabelsmined4["Spanish"]["a_o"] = "AÑo";
	$fieldToolTipsmined4["Spanish"]["a_o"] = "";
	$placeHoldersmined4["Spanish"]["a_o"] = "";
	if (count($fieldToolTipsmined4["Spanish"]))
		$tdatamined4[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmined4["English"] = array();
	$fieldToolTipsmined4["English"] = array();
	$placeHoldersmined4["English"] = array();
	$pageTitlesmined4["English"] = array();
	$fieldLabelsmined4["English"]["idderespuesta"] = "Idderespuesta";
	$fieldToolTipsmined4["English"]["idderespuesta"] = "";
	$placeHoldersmined4["English"]["idderespuesta"] = "";
	$fieldLabelsmined4["English"]["codigo"] = "Codigo";
	$fieldToolTipsmined4["English"]["codigo"] = "";
	$placeHoldersmined4["English"]["codigo"] = "";
	$fieldLabelsmined4["English"]["depto"] = "Depto";
	$fieldToolTipsmined4["English"]["depto"] = "";
	$placeHoldersmined4["English"]["depto"] = "";
	$fieldLabelsmined4["English"]["departamento"] = "Departamento";
	$fieldToolTipsmined4["English"]["departamento"] = "";
	$placeHoldersmined4["English"]["departamento"] = "";
	$fieldLabelsmined4["English"]["mun"] = "Mun";
	$fieldToolTipsmined4["English"]["mun"] = "";
	$placeHoldersmined4["English"]["mun"] = "";
	$fieldLabelsmined4["English"]["municipio"] = "Municipio";
	$fieldToolTipsmined4["English"]["municipio"] = "";
	$placeHoldersmined4["English"]["municipio"] = "";
	$fieldLabelsmined4["English"]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsmined4["English"]["nombre_c_e"] = "";
	$placeHoldersmined4["English"]["nombre_c_e"] = "";
	$fieldLabelsmined4["English"]["x"] = "X";
	$fieldToolTipsmined4["English"]["x"] = "";
	$placeHoldersmined4["English"]["x"] = "";
	$fieldLabelsmined4["English"]["y"] = "Y";
	$fieldToolTipsmined4["English"]["y"] = "";
	$placeHoldersmined4["English"]["y"] = "";
	$fieldLabelsmined4["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsmined4["English"]["sector_ppd"] = "";
	$placeHoldersmined4["English"]["sector_ppd"] = "";
	$fieldLabelsmined4["English"]["matricula_inicial"] = "Matricula Inicial";
	$fieldToolTipsmined4["English"]["matricula_inicial"] = "";
	$placeHoldersmined4["English"]["matricula_inicial"] = "";
	$fieldLabelsmined4["English"]["matricula_final"] = "Matricula Final";
	$fieldToolTipsmined4["English"]["matricula_final"] = "";
	$placeHoldersmined4["English"]["matricula_final"] = "";
	$fieldLabelsmined4["English"]["maras"] = "Maras";
	$fieldToolTipsmined4["English"]["maras"] = "";
	$placeHoldersmined4["English"]["maras"] = "";
	$fieldLabelsmined4["English"]["robos"] = "Robos";
	$fieldToolTipsmined4["English"]["robos"] = "";
	$placeHoldersmined4["English"]["robos"] = "";
	$fieldLabelsmined4["English"]["hurtos"] = "Hurtos";
	$fieldToolTipsmined4["English"]["hurtos"] = "";
	$placeHoldersmined4["English"]["hurtos"] = "";
	$fieldLabelsmined4["English"]["drogas"] = "Drogas";
	$fieldToolTipsmined4["English"]["drogas"] = "";
	$placeHoldersmined4["English"]["drogas"] = "";
	$fieldLabelsmined4["English"]["violaciones"] = "Violaciones";
	$fieldToolTipsmined4["English"]["violaciones"] = "";
	$placeHoldersmined4["English"]["violaciones"] = "";
	$fieldLabelsmined4["English"]["pab"] = "Pab";
	$fieldToolTipsmined4["English"]["pab"] = "";
	$placeHoldersmined4["English"]["pab"] = "";
	$fieldLabelsmined4["English"]["paf"] = "Paf";
	$fieldToolTipsmined4["English"]["paf"] = "";
	$placeHoldersmined4["English"]["paf"] = "";
	$fieldLabelsmined4["English"]["escasos_recursos"] = "Escasos Recursos";
	$fieldToolTipsmined4["English"]["escasos_recursos"] = "";
	$placeHoldersmined4["English"]["escasos_recursos"] = "";
	$fieldLabelsmined4["English"]["incorpo_actividades_prod"] = "Incorpo Actividades Prod";
	$fieldToolTipsmined4["English"]["incorpo_actividades_prod"] = "";
	$placeHoldersmined4["English"]["incorpo_actividades_prod"] = "";
	$fieldLabelsmined4["English"]["lejania_ce"] = "Lejania Ce";
	$fieldToolTipsmined4["English"]["lejania_ce"] = "";
	$placeHoldersmined4["English"]["lejania_ce"] = "";
	$fieldLabelsmined4["English"]["violencia_pandilleril"] = "Violencia Pandilleril";
	$fieldToolTipsmined4["English"]["violencia_pandilleril"] = "";
	$placeHoldersmined4["English"]["violencia_pandilleril"] = "";
	$fieldLabelsmined4["English"]["embarazo"] = "Embarazo";
	$fieldToolTipsmined4["English"]["embarazo"] = "";
	$placeHoldersmined4["English"]["embarazo"] = "";
	$fieldLabelsmined4["English"]["acoso"] = "Acoso";
	$fieldToolTipsmined4["English"]["acoso"] = "";
	$placeHoldersmined4["English"]["acoso"] = "";
	$fieldLabelsmined4["English"]["violacion_sexual"] = "Violacion Sexual";
	$fieldToolTipsmined4["English"]["violacion_sexual"] = "";
	$placeHoldersmined4["English"]["violacion_sexual"] = "";
	$fieldLabelsmined4["English"]["cambio_domicilio"] = "Cambio Domicilio";
	$fieldToolTipsmined4["English"]["cambio_domicilio"] = "";
	$placeHoldersmined4["English"]["cambio_domicilio"] = "";
	$fieldLabelsmined4["English"]["migracion"] = "Migracion";
	$fieldToolTipsmined4["English"]["migracion"] = "";
	$placeHoldersmined4["English"]["migracion"] = "";
	$fieldLabelsmined4["English"]["bajo_rendimiento"] = "Bajo Rendimiento";
	$fieldToolTipsmined4["English"]["bajo_rendimiento"] = "";
	$placeHoldersmined4["English"]["bajo_rendimiento"] = "";
	$fieldLabelsmined4["English"]["enfermedad"] = "Enfermedad";
	$fieldToolTipsmined4["English"]["enfermedad"] = "";
	$placeHoldersmined4["English"]["enfermedad"] = "";
	$fieldLabelsmined4["English"]["prostitucion"] = "Prostitucion";
	$fieldToolTipsmined4["English"]["prostitucion"] = "";
	$placeHoldersmined4["English"]["prostitucion"] = "";
	$fieldLabelsmined4["English"]["dep_mun"] = "Dep Mun";
	$fieldToolTipsmined4["English"]["dep_mun"] = "";
	$placeHoldersmined4["English"]["dep_mun"] = "";
	$fieldLabelsmined4["English"]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipsmined4["English"]["max_matric2016"] = "";
	$placeHoldersmined4["English"]["max_matric2016"] = "";
	$fieldLabelsmined4["English"]["mrf2016"] = "Mrf2016";
	$fieldToolTipsmined4["English"]["mrf2016"] = "";
	$placeHoldersmined4["English"]["mrf2016"] = "";
	$fieldLabelsmined4["English"]["pab_af"] = "Pab Af";
	$fieldToolTipsmined4["English"]["pab_af"] = "";
	$placeHoldersmined4["English"]["pab_af"] = "";
	$fieldLabelsmined4["English"]["r_h"] = "R H";
	$fieldToolTipsmined4["English"]["r_h"] = "";
	$placeHoldersmined4["English"]["r_h"] = "";
	$fieldLabelsmined4["English"]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipsmined4["English"]["ipce_naive"] = "";
	$placeHoldersmined4["English"]["ipce_naive"] = "";
	$fieldLabelsmined4["English"]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipsmined4["English"]["ipce_0_1"] = "";
	$placeHoldersmined4["English"]["ipce_0_1"] = "";
	$fieldLabelsmined4["English"]["a_o"] = "AÑo";
	$fieldToolTipsmined4["English"]["a_o"] = "";
	$placeHoldersmined4["English"]["a_o"] = "";
	if (count($fieldToolTipsmined4["English"]))
		$tdatamined4[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmined4[""] = array();
	$fieldToolTipsmined4[""] = array();
	$placeHoldersmined4[""] = array();
	$pageTitlesmined4[""] = array();
	$fieldLabelsmined4[""]["idderespuesta"] = "Idderespuesta";
	$fieldToolTipsmined4[""]["idderespuesta"] = "";
	$placeHoldersmined4[""]["idderespuesta"] = "";
	$fieldLabelsmined4[""]["codigo"] = "Codigo";
	$fieldToolTipsmined4[""]["codigo"] = "";
	$placeHoldersmined4[""]["codigo"] = "";
	$fieldLabelsmined4[""]["depto"] = "Depto";
	$fieldToolTipsmined4[""]["depto"] = "";
	$placeHoldersmined4[""]["depto"] = "";
	$fieldLabelsmined4[""]["departamento"] = "Departamento";
	$fieldToolTipsmined4[""]["departamento"] = "";
	$placeHoldersmined4[""]["departamento"] = "";
	$fieldLabelsmined4[""]["mun"] = "Mun";
	$fieldToolTipsmined4[""]["mun"] = "";
	$placeHoldersmined4[""]["mun"] = "";
	$fieldLabelsmined4[""]["municipio"] = "Municipio";
	$fieldToolTipsmined4[""]["municipio"] = "";
	$placeHoldersmined4[""]["municipio"] = "";
	$fieldLabelsmined4[""]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsmined4[""]["nombre_c_e"] = "";
	$placeHoldersmined4[""]["nombre_c_e"] = "";
	$fieldLabelsmined4[""]["x"] = "X";
	$fieldToolTipsmined4[""]["x"] = "";
	$placeHoldersmined4[""]["x"] = "";
	$fieldLabelsmined4[""]["y"] = "Y";
	$fieldToolTipsmined4[""]["y"] = "";
	$placeHoldersmined4[""]["y"] = "";
	$fieldLabelsmined4[""]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsmined4[""]["sector_ppd"] = "";
	$placeHoldersmined4[""]["sector_ppd"] = "";
	$fieldLabelsmined4[""]["matricula_inicial"] = "Matricula Inicial";
	$fieldToolTipsmined4[""]["matricula_inicial"] = "";
	$placeHoldersmined4[""]["matricula_inicial"] = "";
	$fieldLabelsmined4[""]["matricula_final"] = "Matricula Final";
	$fieldToolTipsmined4[""]["matricula_final"] = "";
	$placeHoldersmined4[""]["matricula_final"] = "";
	$fieldLabelsmined4[""]["maras"] = "Maras";
	$fieldToolTipsmined4[""]["maras"] = "";
	$placeHoldersmined4[""]["maras"] = "";
	$fieldLabelsmined4[""]["robos"] = "Robos";
	$fieldToolTipsmined4[""]["robos"] = "";
	$placeHoldersmined4[""]["robos"] = "";
	$fieldLabelsmined4[""]["hurtos"] = "Hurtos";
	$fieldToolTipsmined4[""]["hurtos"] = "";
	$placeHoldersmined4[""]["hurtos"] = "";
	$fieldLabelsmined4[""]["drogas"] = "Drogas";
	$fieldToolTipsmined4[""]["drogas"] = "";
	$placeHoldersmined4[""]["drogas"] = "";
	$fieldLabelsmined4[""]["violaciones"] = "Violaciones";
	$fieldToolTipsmined4[""]["violaciones"] = "";
	$placeHoldersmined4[""]["violaciones"] = "";
	$fieldLabelsmined4[""]["pab"] = "Pab";
	$fieldToolTipsmined4[""]["pab"] = "";
	$placeHoldersmined4[""]["pab"] = "";
	$fieldLabelsmined4[""]["paf"] = "Paf";
	$fieldToolTipsmined4[""]["paf"] = "";
	$placeHoldersmined4[""]["paf"] = "";
	$fieldLabelsmined4[""]["escasos_recursos"] = "Escasos Recursos";
	$fieldToolTipsmined4[""]["escasos_recursos"] = "";
	$placeHoldersmined4[""]["escasos_recursos"] = "";
	$fieldLabelsmined4[""]["incorpo_actividades_prod"] = "Incorpo Actividades Prod";
	$fieldToolTipsmined4[""]["incorpo_actividades_prod"] = "";
	$placeHoldersmined4[""]["incorpo_actividades_prod"] = "";
	$fieldLabelsmined4[""]["lejania_ce"] = "Lejania Ce";
	$fieldToolTipsmined4[""]["lejania_ce"] = "";
	$placeHoldersmined4[""]["lejania_ce"] = "";
	$fieldLabelsmined4[""]["violencia_pandilleril"] = "Violencia Pandilleril";
	$fieldToolTipsmined4[""]["violencia_pandilleril"] = "";
	$placeHoldersmined4[""]["violencia_pandilleril"] = "";
	$fieldLabelsmined4[""]["embarazo"] = "Embarazo";
	$fieldToolTipsmined4[""]["embarazo"] = "";
	$placeHoldersmined4[""]["embarazo"] = "";
	$fieldLabelsmined4[""]["acoso"] = "Acoso";
	$fieldToolTipsmined4[""]["acoso"] = "";
	$placeHoldersmined4[""]["acoso"] = "";
	$fieldLabelsmined4[""]["violacion_sexual"] = "Violacion Sexual";
	$fieldToolTipsmined4[""]["violacion_sexual"] = "";
	$placeHoldersmined4[""]["violacion_sexual"] = "";
	$fieldLabelsmined4[""]["cambio_domicilio"] = "Cambio Domicilio";
	$fieldToolTipsmined4[""]["cambio_domicilio"] = "";
	$placeHoldersmined4[""]["cambio_domicilio"] = "";
	$fieldLabelsmined4[""]["migracion"] = "Migracion";
	$fieldToolTipsmined4[""]["migracion"] = "";
	$placeHoldersmined4[""]["migracion"] = "";
	$fieldLabelsmined4[""]["bajo_rendimiento"] = "Bajo Rendimiento";
	$fieldToolTipsmined4[""]["bajo_rendimiento"] = "";
	$placeHoldersmined4[""]["bajo_rendimiento"] = "";
	$fieldLabelsmined4[""]["enfermedad"] = "Enfermedad";
	$fieldToolTipsmined4[""]["enfermedad"] = "";
	$placeHoldersmined4[""]["enfermedad"] = "";
	$fieldLabelsmined4[""]["prostitucion"] = "Prostitucion";
	$fieldToolTipsmined4[""]["prostitucion"] = "";
	$placeHoldersmined4[""]["prostitucion"] = "";
	$fieldLabelsmined4[""]["dep_mun"] = "Dep Mun";
	$fieldToolTipsmined4[""]["dep_mun"] = "";
	$placeHoldersmined4[""]["dep_mun"] = "";
	$fieldLabelsmined4[""]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipsmined4[""]["max_matric2016"] = "";
	$placeHoldersmined4[""]["max_matric2016"] = "";
	$fieldLabelsmined4[""]["mrf2016"] = "Mrf2016";
	$fieldToolTipsmined4[""]["mrf2016"] = "";
	$placeHoldersmined4[""]["mrf2016"] = "";
	$fieldLabelsmined4[""]["pab_af"] = "Pab Af";
	$fieldToolTipsmined4[""]["pab_af"] = "";
	$placeHoldersmined4[""]["pab_af"] = "";
	$fieldLabelsmined4[""]["r_h"] = "R H";
	$fieldToolTipsmined4[""]["r_h"] = "";
	$placeHoldersmined4[""]["r_h"] = "";
	$fieldLabelsmined4[""]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipsmined4[""]["ipce_naive"] = "";
	$placeHoldersmined4[""]["ipce_naive"] = "";
	$fieldLabelsmined4[""]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipsmined4[""]["ipce_0_1"] = "";
	$placeHoldersmined4[""]["ipce_0_1"] = "";
	$fieldLabelsmined4[""]["a_o"] = "AÑo";
	$fieldToolTipsmined4[""]["a_o"] = "";
	$placeHoldersmined4[""]["a_o"] = "";
	if (count($fieldToolTipsmined4[""]))
		$tdatamined4[".isUseToolTips"] = true;
}


	$tdatamined4[".NCSearch"] = true;



$tdatamined4[".shortTableName"] = "mined4";
$tdatamined4[".nSecOptions"] = 0;
$tdatamined4[".recsPerRowPrint"] = 1;
$tdatamined4[".mainTableOwnerID"] = "";
$tdatamined4[".moveNext"] = 1;
$tdatamined4[".entityType"] = 1;

$tdatamined4[".strOriginalTableName"] = "mined";

	



$tdatamined4[".showAddInPopup"] = false;

$tdatamined4[".showEditInPopup"] = false;

$tdatamined4[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamined4[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamined4[".fieldsForRegister"] = array();

	$tdatamined4[".listAjax"] = true;

	$tdatamined4[".audit"] = false;

	$tdatamined4[".locking"] = false;



$tdatamined4[".list"] = true;



$tdatamined4[".reorderRecordsByHeader"] = true;
$tdatamined4[".createSortByDropdown"] = true;
$tdatamined4[".strSortControlSettingsJSON"] = "";




$tdatamined4[".import"] = true;

$tdatamined4[".exportTo"] = true;

$tdatamined4[".printFriendly"] = true;


$tdatamined4[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamined4[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamined4[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamined4[".searchSaving"] = false;
//

$tdatamined4[".showSearchPanel"] = true;
		$tdatamined4[".flexibleSearch"] = true;

$tdatamined4[".isUseAjaxSuggest"] = true;

$tdatamined4[".rowHighlite"] = true;





$tdatamined4[".ajaxCodeSnippetAdded"] = false;

$tdatamined4[".buttonsAdded"] = false;

$tdatamined4[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamined4[".isUseTimeForSearch"] = false;



$tdatamined4[".badgeColor"] = "4682B4";


$tdatamined4[".allSearchFields"] = array();
$tdatamined4[".filterFields"] = array();
$tdatamined4[".requiredSearchFields"] = array();

$tdatamined4[".allSearchFields"][] = "municipio";
	$tdatamined4[".allSearchFields"][] = "codigo";
	$tdatamined4[".allSearchFields"][] = "idderespuesta";
	$tdatamined4[".allSearchFields"][] = "depto";
	$tdatamined4[".allSearchFields"][] = "departamento";
	$tdatamined4[".allSearchFields"][] = "mun";
	$tdatamined4[".allSearchFields"][] = "nombre_c_e";
	$tdatamined4[".allSearchFields"][] = "x";
	$tdatamined4[".allSearchFields"][] = "y";
	$tdatamined4[".allSearchFields"][] = "sector_ppd";
	$tdatamined4[".allSearchFields"][] = "matricula_inicial";
	$tdatamined4[".allSearchFields"][] = "matricula_final";
	$tdatamined4[".allSearchFields"][] = "maras";
	$tdatamined4[".allSearchFields"][] = "robos";
	$tdatamined4[".allSearchFields"][] = "hurtos";
	$tdatamined4[".allSearchFields"][] = "drogas";
	$tdatamined4[".allSearchFields"][] = "violaciones";
	$tdatamined4[".allSearchFields"][] = "pab";
	$tdatamined4[".allSearchFields"][] = "paf";
	$tdatamined4[".allSearchFields"][] = "escasos_recursos";
	$tdatamined4[".allSearchFields"][] = "incorpo_actividades_prod";
	$tdatamined4[".allSearchFields"][] = "lejania_ce";
	$tdatamined4[".allSearchFields"][] = "violencia_pandilleril";
	$tdatamined4[".allSearchFields"][] = "embarazo";
	$tdatamined4[".allSearchFields"][] = "acoso";
	$tdatamined4[".allSearchFields"][] = "violacion_sexual";
	$tdatamined4[".allSearchFields"][] = "cambio_domicilio";
	$tdatamined4[".allSearchFields"][] = "migracion";
	$tdatamined4[".allSearchFields"][] = "bajo_rendimiento";
	$tdatamined4[".allSearchFields"][] = "enfermedad";
	$tdatamined4[".allSearchFields"][] = "prostitucion";
	$tdatamined4[".allSearchFields"][] = "dep_mun";
	$tdatamined4[".allSearchFields"][] = "max_matric2016";
	$tdatamined4[".allSearchFields"][] = "mrf2016";
	$tdatamined4[".allSearchFields"][] = "pab_af";
	$tdatamined4[".allSearchFields"][] = "r_h";
	$tdatamined4[".allSearchFields"][] = "ipce_naive";
	$tdatamined4[".allSearchFields"][] = "ipce_0_1";
	$tdatamined4[".allSearchFields"][] = "aÑo";
	

$tdatamined4[".googleLikeFields"] = array();
$tdatamined4[".googleLikeFields"][] = "municipio";
$tdatamined4[".googleLikeFields"][] = "codigo";
$tdatamined4[".googleLikeFields"][] = "idderespuesta";
$tdatamined4[".googleLikeFields"][] = "depto";
$tdatamined4[".googleLikeFields"][] = "departamento";
$tdatamined4[".googleLikeFields"][] = "mun";
$tdatamined4[".googleLikeFields"][] = "nombre_c_e";
$tdatamined4[".googleLikeFields"][] = "x";
$tdatamined4[".googleLikeFields"][] = "y";
$tdatamined4[".googleLikeFields"][] = "sector_ppd";
$tdatamined4[".googleLikeFields"][] = "matricula_inicial";
$tdatamined4[".googleLikeFields"][] = "matricula_final";
$tdatamined4[".googleLikeFields"][] = "maras";
$tdatamined4[".googleLikeFields"][] = "robos";
$tdatamined4[".googleLikeFields"][] = "hurtos";
$tdatamined4[".googleLikeFields"][] = "drogas";
$tdatamined4[".googleLikeFields"][] = "violaciones";
$tdatamined4[".googleLikeFields"][] = "pab";
$tdatamined4[".googleLikeFields"][] = "paf";
$tdatamined4[".googleLikeFields"][] = "escasos_recursos";
$tdatamined4[".googleLikeFields"][] = "incorpo_actividades_prod";
$tdatamined4[".googleLikeFields"][] = "lejania_ce";
$tdatamined4[".googleLikeFields"][] = "violencia_pandilleril";
$tdatamined4[".googleLikeFields"][] = "embarazo";
$tdatamined4[".googleLikeFields"][] = "acoso";
$tdatamined4[".googleLikeFields"][] = "violacion_sexual";
$tdatamined4[".googleLikeFields"][] = "cambio_domicilio";
$tdatamined4[".googleLikeFields"][] = "migracion";
$tdatamined4[".googleLikeFields"][] = "bajo_rendimiento";
$tdatamined4[".googleLikeFields"][] = "enfermedad";
$tdatamined4[".googleLikeFields"][] = "prostitucion";
$tdatamined4[".googleLikeFields"][] = "dep_mun";
$tdatamined4[".googleLikeFields"][] = "max_matric2016";
$tdatamined4[".googleLikeFields"][] = "mrf2016";
$tdatamined4[".googleLikeFields"][] = "pab_af";
$tdatamined4[".googleLikeFields"][] = "r_h";
$tdatamined4[".googleLikeFields"][] = "ipce_naive";
$tdatamined4[".googleLikeFields"][] = "ipce_0_1";
$tdatamined4[".googleLikeFields"][] = "aÑo";


$tdatamined4[".advSearchFields"] = array();
$tdatamined4[".advSearchFields"][] = "municipio";
$tdatamined4[".advSearchFields"][] = "codigo";
$tdatamined4[".advSearchFields"][] = "idderespuesta";
$tdatamined4[".advSearchFields"][] = "depto";
$tdatamined4[".advSearchFields"][] = "departamento";
$tdatamined4[".advSearchFields"][] = "mun";
$tdatamined4[".advSearchFields"][] = "nombre_c_e";
$tdatamined4[".advSearchFields"][] = "x";
$tdatamined4[".advSearchFields"][] = "y";
$tdatamined4[".advSearchFields"][] = "sector_ppd";
$tdatamined4[".advSearchFields"][] = "matricula_inicial";
$tdatamined4[".advSearchFields"][] = "matricula_final";
$tdatamined4[".advSearchFields"][] = "maras";
$tdatamined4[".advSearchFields"][] = "robos";
$tdatamined4[".advSearchFields"][] = "hurtos";
$tdatamined4[".advSearchFields"][] = "drogas";
$tdatamined4[".advSearchFields"][] = "violaciones";
$tdatamined4[".advSearchFields"][] = "pab";
$tdatamined4[".advSearchFields"][] = "paf";
$tdatamined4[".advSearchFields"][] = "escasos_recursos";
$tdatamined4[".advSearchFields"][] = "incorpo_actividades_prod";
$tdatamined4[".advSearchFields"][] = "lejania_ce";
$tdatamined4[".advSearchFields"][] = "violencia_pandilleril";
$tdatamined4[".advSearchFields"][] = "embarazo";
$tdatamined4[".advSearchFields"][] = "acoso";
$tdatamined4[".advSearchFields"][] = "violacion_sexual";
$tdatamined4[".advSearchFields"][] = "cambio_domicilio";
$tdatamined4[".advSearchFields"][] = "migracion";
$tdatamined4[".advSearchFields"][] = "bajo_rendimiento";
$tdatamined4[".advSearchFields"][] = "enfermedad";
$tdatamined4[".advSearchFields"][] = "prostitucion";
$tdatamined4[".advSearchFields"][] = "dep_mun";
$tdatamined4[".advSearchFields"][] = "max_matric2016";
$tdatamined4[".advSearchFields"][] = "mrf2016";
$tdatamined4[".advSearchFields"][] = "pab_af";
$tdatamined4[".advSearchFields"][] = "r_h";
$tdatamined4[".advSearchFields"][] = "ipce_naive";
$tdatamined4[".advSearchFields"][] = "ipce_0_1";
$tdatamined4[".advSearchFields"][] = "aÑo";

$tdatamined4[".tableType"] = "list";

$tdatamined4[".printerPageOrientation"] = 0;
$tdatamined4[".nPrinterPageScale"] = 100;

$tdatamined4[".nPrinterSplitRecords"] = 40;

$tdatamined4[".nPrinterPDFSplitRecords"] = 40;



$tdatamined4[".geocodingEnabled"] = false;





$tdatamined4[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamined4[".pageSize"] = 20;

$tdatamined4[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamined4[".strOrderBy"] = $tstrOrderBy;

$tdatamined4[".orderindexes"] = array();

$tdatamined4[".sqlHead"] = "SELECT municipio,  codigo,  idderespuesta,  depto,  departamento,  mun,  nombre_c_e,  x,  y,  sector_ppd,  matricula_inicial,  matricula_final,  maras,  robos,  hurtos,  drogas,  violaciones,  pab,  paf,  escasos_recursos,  incorpo_actividades_prod,  lejania_ce,  violencia_pandilleril,  embarazo,  acoso,  violacion_sexual,  cambio_domicilio,  migracion,  bajo_rendimiento,  enfermedad,  prostitucion,  dep_mun,  max_matric2016,  mrf2016,  pab_af,  r_h,  ipce_naive,  ipce_0_1,  `aÑo`";
$tdatamined4[".sqlFrom"] = "FROM mined";
$tdatamined4[".sqlWhereExpr"] = "(codigo =86552)";
$tdatamined4[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamined4[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamined4[".arrGroupsPerPage"] = $arrGPP;

$tdatamined4[".highlightSearchResults"] = true;

$tableKeysmined4 = array();
$tdatamined4[".Keys"] = $tableKeysmined4;

$tdatamined4[".listFields"] = array();
$tdatamined4[".listFields"][] = "municipio";
$tdatamined4[".listFields"][] = "codigo";
$tdatamined4[".listFields"][] = "idderespuesta";
$tdatamined4[".listFields"][] = "depto";
$tdatamined4[".listFields"][] = "departamento";
$tdatamined4[".listFields"][] = "mun";
$tdatamined4[".listFields"][] = "nombre_c_e";
$tdatamined4[".listFields"][] = "x";
$tdatamined4[".listFields"][] = "y";
$tdatamined4[".listFields"][] = "sector_ppd";
$tdatamined4[".listFields"][] = "matricula_inicial";
$tdatamined4[".listFields"][] = "matricula_final";
$tdatamined4[".listFields"][] = "maras";
$tdatamined4[".listFields"][] = "robos";
$tdatamined4[".listFields"][] = "hurtos";
$tdatamined4[".listFields"][] = "drogas";
$tdatamined4[".listFields"][] = "violaciones";
$tdatamined4[".listFields"][] = "pab";
$tdatamined4[".listFields"][] = "paf";
$tdatamined4[".listFields"][] = "escasos_recursos";
$tdatamined4[".listFields"][] = "incorpo_actividades_prod";
$tdatamined4[".listFields"][] = "lejania_ce";
$tdatamined4[".listFields"][] = "violencia_pandilleril";
$tdatamined4[".listFields"][] = "embarazo";
$tdatamined4[".listFields"][] = "acoso";
$tdatamined4[".listFields"][] = "violacion_sexual";
$tdatamined4[".listFields"][] = "cambio_domicilio";
$tdatamined4[".listFields"][] = "migracion";
$tdatamined4[".listFields"][] = "bajo_rendimiento";
$tdatamined4[".listFields"][] = "enfermedad";
$tdatamined4[".listFields"][] = "prostitucion";
$tdatamined4[".listFields"][] = "dep_mun";
$tdatamined4[".listFields"][] = "max_matric2016";
$tdatamined4[".listFields"][] = "mrf2016";
$tdatamined4[".listFields"][] = "pab_af";
$tdatamined4[".listFields"][] = "r_h";
$tdatamined4[".listFields"][] = "ipce_naive";
$tdatamined4[".listFields"][] = "ipce_0_1";
$tdatamined4[".listFields"][] = "aÑo";

$tdatamined4[".hideMobileList"] = array();


$tdatamined4[".viewFields"] = array();
$tdatamined4[".viewFields"][] = "municipio";
$tdatamined4[".viewFields"][] = "codigo";
$tdatamined4[".viewFields"][] = "idderespuesta";
$tdatamined4[".viewFields"][] = "depto";
$tdatamined4[".viewFields"][] = "departamento";
$tdatamined4[".viewFields"][] = "mun";
$tdatamined4[".viewFields"][] = "nombre_c_e";
$tdatamined4[".viewFields"][] = "x";
$tdatamined4[".viewFields"][] = "y";
$tdatamined4[".viewFields"][] = "sector_ppd";
$tdatamined4[".viewFields"][] = "matricula_inicial";
$tdatamined4[".viewFields"][] = "matricula_final";
$tdatamined4[".viewFields"][] = "maras";
$tdatamined4[".viewFields"][] = "robos";
$tdatamined4[".viewFields"][] = "hurtos";
$tdatamined4[".viewFields"][] = "drogas";
$tdatamined4[".viewFields"][] = "violaciones";
$tdatamined4[".viewFields"][] = "pab";
$tdatamined4[".viewFields"][] = "paf";
$tdatamined4[".viewFields"][] = "escasos_recursos";
$tdatamined4[".viewFields"][] = "incorpo_actividades_prod";
$tdatamined4[".viewFields"][] = "lejania_ce";
$tdatamined4[".viewFields"][] = "violencia_pandilleril";
$tdatamined4[".viewFields"][] = "embarazo";
$tdatamined4[".viewFields"][] = "acoso";
$tdatamined4[".viewFields"][] = "violacion_sexual";
$tdatamined4[".viewFields"][] = "cambio_domicilio";
$tdatamined4[".viewFields"][] = "migracion";
$tdatamined4[".viewFields"][] = "bajo_rendimiento";
$tdatamined4[".viewFields"][] = "enfermedad";
$tdatamined4[".viewFields"][] = "prostitucion";
$tdatamined4[".viewFields"][] = "dep_mun";
$tdatamined4[".viewFields"][] = "max_matric2016";
$tdatamined4[".viewFields"][] = "mrf2016";
$tdatamined4[".viewFields"][] = "pab_af";
$tdatamined4[".viewFields"][] = "r_h";
$tdatamined4[".viewFields"][] = "ipce_naive";
$tdatamined4[".viewFields"][] = "ipce_0_1";
$tdatamined4[".viewFields"][] = "aÑo";

$tdatamined4[".addFields"] = array();
$tdatamined4[".addFields"][] = "municipio";
$tdatamined4[".addFields"][] = "codigo";
$tdatamined4[".addFields"][] = "idderespuesta";
$tdatamined4[".addFields"][] = "depto";
$tdatamined4[".addFields"][] = "departamento";
$tdatamined4[".addFields"][] = "mun";
$tdatamined4[".addFields"][] = "nombre_c_e";
$tdatamined4[".addFields"][] = "x";
$tdatamined4[".addFields"][] = "y";
$tdatamined4[".addFields"][] = "sector_ppd";
$tdatamined4[".addFields"][] = "matricula_inicial";
$tdatamined4[".addFields"][] = "matricula_final";
$tdatamined4[".addFields"][] = "maras";
$tdatamined4[".addFields"][] = "robos";
$tdatamined4[".addFields"][] = "hurtos";
$tdatamined4[".addFields"][] = "drogas";
$tdatamined4[".addFields"][] = "violaciones";
$tdatamined4[".addFields"][] = "pab";
$tdatamined4[".addFields"][] = "paf";
$tdatamined4[".addFields"][] = "escasos_recursos";
$tdatamined4[".addFields"][] = "incorpo_actividades_prod";
$tdatamined4[".addFields"][] = "lejania_ce";
$tdatamined4[".addFields"][] = "violencia_pandilleril";
$tdatamined4[".addFields"][] = "embarazo";
$tdatamined4[".addFields"][] = "acoso";
$tdatamined4[".addFields"][] = "violacion_sexual";
$tdatamined4[".addFields"][] = "cambio_domicilio";
$tdatamined4[".addFields"][] = "migracion";
$tdatamined4[".addFields"][] = "bajo_rendimiento";
$tdatamined4[".addFields"][] = "enfermedad";
$tdatamined4[".addFields"][] = "prostitucion";
$tdatamined4[".addFields"][] = "dep_mun";
$tdatamined4[".addFields"][] = "max_matric2016";
$tdatamined4[".addFields"][] = "mrf2016";
$tdatamined4[".addFields"][] = "pab_af";
$tdatamined4[".addFields"][] = "r_h";
$tdatamined4[".addFields"][] = "ipce_naive";
$tdatamined4[".addFields"][] = "ipce_0_1";
$tdatamined4[".addFields"][] = "aÑo";

$tdatamined4[".masterListFields"] = array();
$tdatamined4[".masterListFields"][] = "municipio";
$tdatamined4[".masterListFields"][] = "codigo";
$tdatamined4[".masterListFields"][] = "idderespuesta";
$tdatamined4[".masterListFields"][] = "depto";
$tdatamined4[".masterListFields"][] = "departamento";
$tdatamined4[".masterListFields"][] = "mun";
$tdatamined4[".masterListFields"][] = "nombre_c_e";
$tdatamined4[".masterListFields"][] = "x";
$tdatamined4[".masterListFields"][] = "y";
$tdatamined4[".masterListFields"][] = "sector_ppd";
$tdatamined4[".masterListFields"][] = "matricula_inicial";
$tdatamined4[".masterListFields"][] = "matricula_final";
$tdatamined4[".masterListFields"][] = "maras";
$tdatamined4[".masterListFields"][] = "robos";
$tdatamined4[".masterListFields"][] = "hurtos";
$tdatamined4[".masterListFields"][] = "drogas";
$tdatamined4[".masterListFields"][] = "violaciones";
$tdatamined4[".masterListFields"][] = "pab";
$tdatamined4[".masterListFields"][] = "paf";
$tdatamined4[".masterListFields"][] = "escasos_recursos";
$tdatamined4[".masterListFields"][] = "incorpo_actividades_prod";
$tdatamined4[".masterListFields"][] = "lejania_ce";
$tdatamined4[".masterListFields"][] = "violencia_pandilleril";
$tdatamined4[".masterListFields"][] = "embarazo";
$tdatamined4[".masterListFields"][] = "acoso";
$tdatamined4[".masterListFields"][] = "violacion_sexual";
$tdatamined4[".masterListFields"][] = "cambio_domicilio";
$tdatamined4[".masterListFields"][] = "migracion";
$tdatamined4[".masterListFields"][] = "bajo_rendimiento";
$tdatamined4[".masterListFields"][] = "enfermedad";
$tdatamined4[".masterListFields"][] = "prostitucion";
$tdatamined4[".masterListFields"][] = "dep_mun";
$tdatamined4[".masterListFields"][] = "max_matric2016";
$tdatamined4[".masterListFields"][] = "mrf2016";
$tdatamined4[".masterListFields"][] = "pab_af";
$tdatamined4[".masterListFields"][] = "r_h";
$tdatamined4[".masterListFields"][] = "ipce_naive";
$tdatamined4[".masterListFields"][] = "ipce_0_1";
$tdatamined4[".masterListFields"][] = "aÑo";

$tdatamined4[".inlineAddFields"] = array();
$tdatamined4[".inlineAddFields"][] = "municipio";
$tdatamined4[".inlineAddFields"][] = "codigo";
$tdatamined4[".inlineAddFields"][] = "idderespuesta";
$tdatamined4[".inlineAddFields"][] = "depto";
$tdatamined4[".inlineAddFields"][] = "departamento";
$tdatamined4[".inlineAddFields"][] = "mun";
$tdatamined4[".inlineAddFields"][] = "nombre_c_e";
$tdatamined4[".inlineAddFields"][] = "x";
$tdatamined4[".inlineAddFields"][] = "y";
$tdatamined4[".inlineAddFields"][] = "sector_ppd";
$tdatamined4[".inlineAddFields"][] = "matricula_inicial";
$tdatamined4[".inlineAddFields"][] = "matricula_final";
$tdatamined4[".inlineAddFields"][] = "maras";
$tdatamined4[".inlineAddFields"][] = "robos";
$tdatamined4[".inlineAddFields"][] = "hurtos";
$tdatamined4[".inlineAddFields"][] = "drogas";
$tdatamined4[".inlineAddFields"][] = "violaciones";
$tdatamined4[".inlineAddFields"][] = "pab";
$tdatamined4[".inlineAddFields"][] = "paf";
$tdatamined4[".inlineAddFields"][] = "escasos_recursos";
$tdatamined4[".inlineAddFields"][] = "incorpo_actividades_prod";
$tdatamined4[".inlineAddFields"][] = "lejania_ce";
$tdatamined4[".inlineAddFields"][] = "violencia_pandilleril";
$tdatamined4[".inlineAddFields"][] = "embarazo";
$tdatamined4[".inlineAddFields"][] = "acoso";
$tdatamined4[".inlineAddFields"][] = "violacion_sexual";
$tdatamined4[".inlineAddFields"][] = "cambio_domicilio";
$tdatamined4[".inlineAddFields"][] = "migracion";
$tdatamined4[".inlineAddFields"][] = "bajo_rendimiento";
$tdatamined4[".inlineAddFields"][] = "enfermedad";
$tdatamined4[".inlineAddFields"][] = "prostitucion";
$tdatamined4[".inlineAddFields"][] = "dep_mun";
$tdatamined4[".inlineAddFields"][] = "max_matric2016";
$tdatamined4[".inlineAddFields"][] = "mrf2016";
$tdatamined4[".inlineAddFields"][] = "pab_af";
$tdatamined4[".inlineAddFields"][] = "r_h";
$tdatamined4[".inlineAddFields"][] = "ipce_naive";
$tdatamined4[".inlineAddFields"][] = "ipce_0_1";
$tdatamined4[".inlineAddFields"][] = "aÑo";

$tdatamined4[".editFields"] = array();
$tdatamined4[".editFields"][] = "municipio";
$tdatamined4[".editFields"][] = "codigo";
$tdatamined4[".editFields"][] = "idderespuesta";
$tdatamined4[".editFields"][] = "depto";
$tdatamined4[".editFields"][] = "departamento";
$tdatamined4[".editFields"][] = "mun";
$tdatamined4[".editFields"][] = "nombre_c_e";
$tdatamined4[".editFields"][] = "x";
$tdatamined4[".editFields"][] = "y";
$tdatamined4[".editFields"][] = "sector_ppd";
$tdatamined4[".editFields"][] = "matricula_inicial";
$tdatamined4[".editFields"][] = "matricula_final";
$tdatamined4[".editFields"][] = "maras";
$tdatamined4[".editFields"][] = "robos";
$tdatamined4[".editFields"][] = "hurtos";
$tdatamined4[".editFields"][] = "drogas";
$tdatamined4[".editFields"][] = "violaciones";
$tdatamined4[".editFields"][] = "pab";
$tdatamined4[".editFields"][] = "paf";
$tdatamined4[".editFields"][] = "escasos_recursos";
$tdatamined4[".editFields"][] = "incorpo_actividades_prod";
$tdatamined4[".editFields"][] = "lejania_ce";
$tdatamined4[".editFields"][] = "violencia_pandilleril";
$tdatamined4[".editFields"][] = "embarazo";
$tdatamined4[".editFields"][] = "acoso";
$tdatamined4[".editFields"][] = "violacion_sexual";
$tdatamined4[".editFields"][] = "cambio_domicilio";
$tdatamined4[".editFields"][] = "migracion";
$tdatamined4[".editFields"][] = "bajo_rendimiento";
$tdatamined4[".editFields"][] = "enfermedad";
$tdatamined4[".editFields"][] = "prostitucion";
$tdatamined4[".editFields"][] = "dep_mun";
$tdatamined4[".editFields"][] = "max_matric2016";
$tdatamined4[".editFields"][] = "mrf2016";
$tdatamined4[".editFields"][] = "pab_af";
$tdatamined4[".editFields"][] = "r_h";
$tdatamined4[".editFields"][] = "ipce_naive";
$tdatamined4[".editFields"][] = "ipce_0_1";
$tdatamined4[".editFields"][] = "aÑo";

$tdatamined4[".inlineEditFields"] = array();
$tdatamined4[".inlineEditFields"][] = "municipio";
$tdatamined4[".inlineEditFields"][] = "codigo";
$tdatamined4[".inlineEditFields"][] = "idderespuesta";
$tdatamined4[".inlineEditFields"][] = "depto";
$tdatamined4[".inlineEditFields"][] = "departamento";
$tdatamined4[".inlineEditFields"][] = "mun";
$tdatamined4[".inlineEditFields"][] = "nombre_c_e";
$tdatamined4[".inlineEditFields"][] = "x";
$tdatamined4[".inlineEditFields"][] = "y";
$tdatamined4[".inlineEditFields"][] = "sector_ppd";
$tdatamined4[".inlineEditFields"][] = "matricula_inicial";
$tdatamined4[".inlineEditFields"][] = "matricula_final";
$tdatamined4[".inlineEditFields"][] = "maras";
$tdatamined4[".inlineEditFields"][] = "robos";
$tdatamined4[".inlineEditFields"][] = "hurtos";
$tdatamined4[".inlineEditFields"][] = "drogas";
$tdatamined4[".inlineEditFields"][] = "violaciones";
$tdatamined4[".inlineEditFields"][] = "pab";
$tdatamined4[".inlineEditFields"][] = "paf";
$tdatamined4[".inlineEditFields"][] = "escasos_recursos";
$tdatamined4[".inlineEditFields"][] = "incorpo_actividades_prod";
$tdatamined4[".inlineEditFields"][] = "lejania_ce";
$tdatamined4[".inlineEditFields"][] = "violencia_pandilleril";
$tdatamined4[".inlineEditFields"][] = "embarazo";
$tdatamined4[".inlineEditFields"][] = "acoso";
$tdatamined4[".inlineEditFields"][] = "violacion_sexual";
$tdatamined4[".inlineEditFields"][] = "cambio_domicilio";
$tdatamined4[".inlineEditFields"][] = "migracion";
$tdatamined4[".inlineEditFields"][] = "bajo_rendimiento";
$tdatamined4[".inlineEditFields"][] = "enfermedad";
$tdatamined4[".inlineEditFields"][] = "prostitucion";
$tdatamined4[".inlineEditFields"][] = "dep_mun";
$tdatamined4[".inlineEditFields"][] = "max_matric2016";
$tdatamined4[".inlineEditFields"][] = "mrf2016";
$tdatamined4[".inlineEditFields"][] = "pab_af";
$tdatamined4[".inlineEditFields"][] = "r_h";
$tdatamined4[".inlineEditFields"][] = "ipce_naive";
$tdatamined4[".inlineEditFields"][] = "ipce_0_1";
$tdatamined4[".inlineEditFields"][] = "aÑo";

$tdatamined4[".updateSelectedFields"] = array();
$tdatamined4[".updateSelectedFields"][] = "municipio";
$tdatamined4[".updateSelectedFields"][] = "codigo";
$tdatamined4[".updateSelectedFields"][] = "idderespuesta";
$tdatamined4[".updateSelectedFields"][] = "depto";
$tdatamined4[".updateSelectedFields"][] = "departamento";
$tdatamined4[".updateSelectedFields"][] = "mun";
$tdatamined4[".updateSelectedFields"][] = "nombre_c_e";
$tdatamined4[".updateSelectedFields"][] = "x";
$tdatamined4[".updateSelectedFields"][] = "y";
$tdatamined4[".updateSelectedFields"][] = "sector_ppd";
$tdatamined4[".updateSelectedFields"][] = "matricula_inicial";
$tdatamined4[".updateSelectedFields"][] = "matricula_final";
$tdatamined4[".updateSelectedFields"][] = "maras";
$tdatamined4[".updateSelectedFields"][] = "robos";
$tdatamined4[".updateSelectedFields"][] = "hurtos";
$tdatamined4[".updateSelectedFields"][] = "drogas";
$tdatamined4[".updateSelectedFields"][] = "violaciones";
$tdatamined4[".updateSelectedFields"][] = "pab";
$tdatamined4[".updateSelectedFields"][] = "paf";
$tdatamined4[".updateSelectedFields"][] = "escasos_recursos";
$tdatamined4[".updateSelectedFields"][] = "incorpo_actividades_prod";
$tdatamined4[".updateSelectedFields"][] = "lejania_ce";
$tdatamined4[".updateSelectedFields"][] = "violencia_pandilleril";
$tdatamined4[".updateSelectedFields"][] = "embarazo";
$tdatamined4[".updateSelectedFields"][] = "acoso";
$tdatamined4[".updateSelectedFields"][] = "violacion_sexual";
$tdatamined4[".updateSelectedFields"][] = "cambio_domicilio";
$tdatamined4[".updateSelectedFields"][] = "migracion";
$tdatamined4[".updateSelectedFields"][] = "bajo_rendimiento";
$tdatamined4[".updateSelectedFields"][] = "enfermedad";
$tdatamined4[".updateSelectedFields"][] = "prostitucion";
$tdatamined4[".updateSelectedFields"][] = "dep_mun";
$tdatamined4[".updateSelectedFields"][] = "max_matric2016";
$tdatamined4[".updateSelectedFields"][] = "mrf2016";
$tdatamined4[".updateSelectedFields"][] = "pab_af";
$tdatamined4[".updateSelectedFields"][] = "r_h";
$tdatamined4[".updateSelectedFields"][] = "ipce_naive";
$tdatamined4[".updateSelectedFields"][] = "ipce_0_1";
$tdatamined4[".updateSelectedFields"][] = "aÑo";


$tdatamined4[".exportFields"] = array();
$tdatamined4[".exportFields"][] = "municipio";
$tdatamined4[".exportFields"][] = "codigo";
$tdatamined4[".exportFields"][] = "idderespuesta";
$tdatamined4[".exportFields"][] = "depto";
$tdatamined4[".exportFields"][] = "departamento";
$tdatamined4[".exportFields"][] = "mun";
$tdatamined4[".exportFields"][] = "nombre_c_e";
$tdatamined4[".exportFields"][] = "x";
$tdatamined4[".exportFields"][] = "y";
$tdatamined4[".exportFields"][] = "sector_ppd";
$tdatamined4[".exportFields"][] = "matricula_inicial";
$tdatamined4[".exportFields"][] = "matricula_final";
$tdatamined4[".exportFields"][] = "maras";
$tdatamined4[".exportFields"][] = "robos";
$tdatamined4[".exportFields"][] = "hurtos";
$tdatamined4[".exportFields"][] = "drogas";
$tdatamined4[".exportFields"][] = "violaciones";
$tdatamined4[".exportFields"][] = "pab";
$tdatamined4[".exportFields"][] = "paf";
$tdatamined4[".exportFields"][] = "escasos_recursos";
$tdatamined4[".exportFields"][] = "incorpo_actividades_prod";
$tdatamined4[".exportFields"][] = "lejania_ce";
$tdatamined4[".exportFields"][] = "violencia_pandilleril";
$tdatamined4[".exportFields"][] = "embarazo";
$tdatamined4[".exportFields"][] = "acoso";
$tdatamined4[".exportFields"][] = "violacion_sexual";
$tdatamined4[".exportFields"][] = "cambio_domicilio";
$tdatamined4[".exportFields"][] = "migracion";
$tdatamined4[".exportFields"][] = "bajo_rendimiento";
$tdatamined4[".exportFields"][] = "enfermedad";
$tdatamined4[".exportFields"][] = "prostitucion";
$tdatamined4[".exportFields"][] = "dep_mun";
$tdatamined4[".exportFields"][] = "max_matric2016";
$tdatamined4[".exportFields"][] = "mrf2016";
$tdatamined4[".exportFields"][] = "pab_af";
$tdatamined4[".exportFields"][] = "r_h";
$tdatamined4[".exportFields"][] = "ipce_naive";
$tdatamined4[".exportFields"][] = "ipce_0_1";
$tdatamined4[".exportFields"][] = "aÑo";

$tdatamined4[".importFields"] = array();
$tdatamined4[".importFields"][] = "municipio";
$tdatamined4[".importFields"][] = "codigo";
$tdatamined4[".importFields"][] = "idderespuesta";
$tdatamined4[".importFields"][] = "depto";
$tdatamined4[".importFields"][] = "departamento";
$tdatamined4[".importFields"][] = "mun";
$tdatamined4[".importFields"][] = "nombre_c_e";
$tdatamined4[".importFields"][] = "x";
$tdatamined4[".importFields"][] = "y";
$tdatamined4[".importFields"][] = "sector_ppd";
$tdatamined4[".importFields"][] = "matricula_inicial";
$tdatamined4[".importFields"][] = "matricula_final";
$tdatamined4[".importFields"][] = "maras";
$tdatamined4[".importFields"][] = "robos";
$tdatamined4[".importFields"][] = "hurtos";
$tdatamined4[".importFields"][] = "drogas";
$tdatamined4[".importFields"][] = "violaciones";
$tdatamined4[".importFields"][] = "pab";
$tdatamined4[".importFields"][] = "paf";
$tdatamined4[".importFields"][] = "escasos_recursos";
$tdatamined4[".importFields"][] = "incorpo_actividades_prod";
$tdatamined4[".importFields"][] = "lejania_ce";
$tdatamined4[".importFields"][] = "violencia_pandilleril";
$tdatamined4[".importFields"][] = "embarazo";
$tdatamined4[".importFields"][] = "acoso";
$tdatamined4[".importFields"][] = "violacion_sexual";
$tdatamined4[".importFields"][] = "cambio_domicilio";
$tdatamined4[".importFields"][] = "migracion";
$tdatamined4[".importFields"][] = "bajo_rendimiento";
$tdatamined4[".importFields"][] = "enfermedad";
$tdatamined4[".importFields"][] = "prostitucion";
$tdatamined4[".importFields"][] = "dep_mun";
$tdatamined4[".importFields"][] = "max_matric2016";
$tdatamined4[".importFields"][] = "mrf2016";
$tdatamined4[".importFields"][] = "pab_af";
$tdatamined4[".importFields"][] = "r_h";
$tdatamined4[".importFields"][] = "ipce_naive";
$tdatamined4[".importFields"][] = "ipce_0_1";
$tdatamined4[".importFields"][] = "aÑo";

$tdatamined4[".printFields"] = array();
$tdatamined4[".printFields"][] = "municipio";
$tdatamined4[".printFields"][] = "codigo";
$tdatamined4[".printFields"][] = "idderespuesta";
$tdatamined4[".printFields"][] = "depto";
$tdatamined4[".printFields"][] = "departamento";
$tdatamined4[".printFields"][] = "mun";
$tdatamined4[".printFields"][] = "nombre_c_e";
$tdatamined4[".printFields"][] = "x";
$tdatamined4[".printFields"][] = "y";
$tdatamined4[".printFields"][] = "sector_ppd";
$tdatamined4[".printFields"][] = "matricula_inicial";
$tdatamined4[".printFields"][] = "matricula_final";
$tdatamined4[".printFields"][] = "maras";
$tdatamined4[".printFields"][] = "robos";
$tdatamined4[".printFields"][] = "hurtos";
$tdatamined4[".printFields"][] = "drogas";
$tdatamined4[".printFields"][] = "violaciones";
$tdatamined4[".printFields"][] = "pab";
$tdatamined4[".printFields"][] = "paf";
$tdatamined4[".printFields"][] = "escasos_recursos";
$tdatamined4[".printFields"][] = "incorpo_actividades_prod";
$tdatamined4[".printFields"][] = "lejania_ce";
$tdatamined4[".printFields"][] = "violencia_pandilleril";
$tdatamined4[".printFields"][] = "embarazo";
$tdatamined4[".printFields"][] = "acoso";
$tdatamined4[".printFields"][] = "violacion_sexual";
$tdatamined4[".printFields"][] = "cambio_domicilio";
$tdatamined4[".printFields"][] = "migracion";
$tdatamined4[".printFields"][] = "bajo_rendimiento";
$tdatamined4[".printFields"][] = "enfermedad";
$tdatamined4[".printFields"][] = "prostitucion";
$tdatamined4[".printFields"][] = "dep_mun";
$tdatamined4[".printFields"][] = "max_matric2016";
$tdatamined4[".printFields"][] = "mrf2016";
$tdatamined4[".printFields"][] = "pab_af";
$tdatamined4[".printFields"][] = "r_h";
$tdatamined4[".printFields"][] = "ipce_naive";
$tdatamined4[".printFields"][] = "ipce_0_1";
$tdatamined4[".printFields"][] = "aÑo";

//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","municipio");
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




	$tdatamined4["municipio"] = $fdata;
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","codigo");
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




	$tdatamined4["codigo"] = $fdata;
//	idderespuesta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idderespuesta";
	$fdata["GoodName"] = "idderespuesta";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","idderespuesta");
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




	$tdatamined4["idderespuesta"] = $fdata;
//	depto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "depto";
	$fdata["GoodName"] = "depto";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","depto");
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




	$tdatamined4["depto"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","departamento");
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




	$tdatamined4["departamento"] = $fdata;
//	mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mun";
	$fdata["GoodName"] = "mun";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","mun");
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




	$tdatamined4["mun"] = $fdata;
//	nombre_c_e
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nombre_c_e";
	$fdata["GoodName"] = "nombre_c_e";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","nombre_c_e");
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




	$tdatamined4["nombre_c_e"] = $fdata;
//	x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "x";
	$fdata["GoodName"] = "x";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","x");
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




	$tdatamined4["x"] = $fdata;
//	y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "y";
	$fdata["GoodName"] = "y";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","y");
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




	$tdatamined4["y"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","sector_ppd");
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




	$tdatamined4["sector_ppd"] = $fdata;
//	matricula_inicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "matricula_inicial";
	$fdata["GoodName"] = "matricula_inicial";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","matricula_inicial");
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




	$tdatamined4["matricula_inicial"] = $fdata;
//	matricula_final
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "matricula_final";
	$fdata["GoodName"] = "matricula_final";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","matricula_final");
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




	$tdatamined4["matricula_final"] = $fdata;
//	maras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "maras";
	$fdata["GoodName"] = "maras";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","maras");
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




	$tdatamined4["maras"] = $fdata;
//	robos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "robos";
	$fdata["GoodName"] = "robos";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","robos");
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




	$tdatamined4["robos"] = $fdata;
//	hurtos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "hurtos";
	$fdata["GoodName"] = "hurtos";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","hurtos");
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




	$tdatamined4["hurtos"] = $fdata;
//	drogas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "drogas";
	$fdata["GoodName"] = "drogas";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","drogas");
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




	$tdatamined4["drogas"] = $fdata;
//	violaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "violaciones";
	$fdata["GoodName"] = "violaciones";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","violaciones");
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




	$tdatamined4["violaciones"] = $fdata;
//	pab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "pab";
	$fdata["GoodName"] = "pab";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","pab");
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




	$tdatamined4["pab"] = $fdata;
//	paf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "paf";
	$fdata["GoodName"] = "paf";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","paf");
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




	$tdatamined4["paf"] = $fdata;
//	escasos_recursos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "escasos_recursos";
	$fdata["GoodName"] = "escasos_recursos";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","escasos_recursos");
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




	$tdatamined4["escasos_recursos"] = $fdata;
//	incorpo_actividades_prod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "incorpo_actividades_prod";
	$fdata["GoodName"] = "incorpo_actividades_prod";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","incorpo_actividades_prod");
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




	$tdatamined4["incorpo_actividades_prod"] = $fdata;
//	lejania_ce
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "lejania_ce";
	$fdata["GoodName"] = "lejania_ce";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","lejania_ce");
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




	$tdatamined4["lejania_ce"] = $fdata;
//	violencia_pandilleril
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "violencia_pandilleril";
	$fdata["GoodName"] = "violencia_pandilleril";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","violencia_pandilleril");
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




	$tdatamined4["violencia_pandilleril"] = $fdata;
//	embarazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "embarazo";
	$fdata["GoodName"] = "embarazo";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","embarazo");
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




	$tdatamined4["embarazo"] = $fdata;
//	acoso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "acoso";
	$fdata["GoodName"] = "acoso";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","acoso");
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




	$tdatamined4["acoso"] = $fdata;
//	violacion_sexual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "violacion_sexual";
	$fdata["GoodName"] = "violacion_sexual";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","violacion_sexual");
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




	$tdatamined4["violacion_sexual"] = $fdata;
//	cambio_domicilio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "cambio_domicilio";
	$fdata["GoodName"] = "cambio_domicilio";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","cambio_domicilio");
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




	$tdatamined4["cambio_domicilio"] = $fdata;
//	migracion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "migracion";
	$fdata["GoodName"] = "migracion";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","migracion");
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




	$tdatamined4["migracion"] = $fdata;
//	bajo_rendimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "bajo_rendimiento";
	$fdata["GoodName"] = "bajo_rendimiento";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","bajo_rendimiento");
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




	$tdatamined4["bajo_rendimiento"] = $fdata;
//	enfermedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "enfermedad";
	$fdata["GoodName"] = "enfermedad";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","enfermedad");
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




	$tdatamined4["enfermedad"] = $fdata;
//	prostitucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "prostitucion";
	$fdata["GoodName"] = "prostitucion";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","prostitucion");
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




	$tdatamined4["prostitucion"] = $fdata;
//	dep_mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "dep_mun";
	$fdata["GoodName"] = "dep_mun";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","dep_mun");
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




	$tdatamined4["dep_mun"] = $fdata;
//	max_matric2016
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "max_matric2016";
	$fdata["GoodName"] = "max_matric2016";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","max_matric2016");
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




	$tdatamined4["max_matric2016"] = $fdata;
//	mrf2016
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "mrf2016";
	$fdata["GoodName"] = "mrf2016";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","mrf2016");
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




	$tdatamined4["mrf2016"] = $fdata;
//	pab_af
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "pab_af";
	$fdata["GoodName"] = "pab_af";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","pab_af");
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




	$tdatamined4["pab_af"] = $fdata;
//	r_h
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "r_h";
	$fdata["GoodName"] = "r_h";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","r_h");
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




	$tdatamined4["r_h"] = $fdata;
//	ipce_naive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "ipce_naive";
	$fdata["GoodName"] = "ipce_naive";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","ipce_naive");
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




	$tdatamined4["ipce_naive"] = $fdata;
//	ipce_0_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "ipce_0_1";
	$fdata["GoodName"] = "ipce_0_1";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","ipce_0_1");
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




	$tdatamined4["ipce_0_1"] = $fdata;
//	aÑo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "aÑo";
	$fdata["GoodName"] = "a_o";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined4","a_o");
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




	$tdatamined4["aÑo"] = $fdata;


$tables_data["mined4"]=&$tdatamined4;
$field_labels["mined4"] = &$fieldLabelsmined4;
$fieldToolTips["mined4"] = &$fieldToolTipsmined4;
$placeHolders["mined4"] = &$placeHoldersmined4;
$page_titles["mined4"] = &$pageTitlesmined4;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mined4"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mined4"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mined4()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "municipio,  codigo,  idderespuesta,  depto,  departamento,  mun,  nombre_c_e,  x,  y,  sector_ppd,  matricula_inicial,  matricula_final,  maras,  robos,  hurtos,  drogas,  violaciones,  pab,  paf,  escasos_recursos,  incorpo_actividades_prod,  lejania_ce,  violencia_pandilleril,  embarazo,  acoso,  violacion_sexual,  cambio_domicilio,  migracion,  bajo_rendimiento,  enfermedad,  prostitucion,  dep_mun,  max_matric2016,  mrf2016,  pab_af,  r_h,  ipce_naive,  ipce_0_1,  `aÑo`";
$proto0["m_strFrom"] = "FROM mined";
$proto0["m_strWhere"] = "(codigo =86552)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "codigo =86552";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=86552";
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
	"m_strName" => "municipio",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto6["m_sql"] = "municipio";
$proto6["m_srcTableName"] = "mined4";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto8["m_sql"] = "codigo";
$proto8["m_srcTableName"] = "mined4";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idderespuesta",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto10["m_sql"] = "idderespuesta";
$proto10["m_srcTableName"] = "mined4";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "depto",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto12["m_sql"] = "depto";
$proto12["m_srcTableName"] = "mined4";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto14["m_sql"] = "departamento";
$proto14["m_srcTableName"] = "mined4";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "mun",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto16["m_sql"] = "mun";
$proto16["m_srcTableName"] = "mined4";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_c_e",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto18["m_sql"] = "nombre_c_e";
$proto18["m_srcTableName"] = "mined4";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "x",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto20["m_sql"] = "x";
$proto20["m_srcTableName"] = "mined4";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "y",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto22["m_sql"] = "y";
$proto22["m_srcTableName"] = "mined4";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto24["m_sql"] = "sector_ppd";
$proto24["m_srcTableName"] = "mined4";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "matricula_inicial",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto26["m_sql"] = "matricula_inicial";
$proto26["m_srcTableName"] = "mined4";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "matricula_final",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto28["m_sql"] = "matricula_final";
$proto28["m_srcTableName"] = "mined4";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "maras",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto30["m_sql"] = "maras";
$proto30["m_srcTableName"] = "mined4";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "robos",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto32["m_sql"] = "robos";
$proto32["m_srcTableName"] = "mined4";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "hurtos",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto34["m_sql"] = "hurtos";
$proto34["m_srcTableName"] = "mined4";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "drogas",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto36["m_sql"] = "drogas";
$proto36["m_srcTableName"] = "mined4";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "violaciones",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto38["m_sql"] = "violaciones";
$proto38["m_srcTableName"] = "mined4";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "pab",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto40["m_sql"] = "pab";
$proto40["m_srcTableName"] = "mined4";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "paf",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto42["m_sql"] = "paf";
$proto42["m_srcTableName"] = "mined4";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "escasos_recursos",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto44["m_sql"] = "escasos_recursos";
$proto44["m_srcTableName"] = "mined4";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "incorpo_actividades_prod",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto46["m_sql"] = "incorpo_actividades_prod";
$proto46["m_srcTableName"] = "mined4";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "lejania_ce",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto48["m_sql"] = "lejania_ce";
$proto48["m_srcTableName"] = "mined4";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "violencia_pandilleril",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto50["m_sql"] = "violencia_pandilleril";
$proto50["m_srcTableName"] = "mined4";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "embarazo",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto52["m_sql"] = "embarazo";
$proto52["m_srcTableName"] = "mined4";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "acoso",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto54["m_sql"] = "acoso";
$proto54["m_srcTableName"] = "mined4";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "violacion_sexual",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto56["m_sql"] = "violacion_sexual";
$proto56["m_srcTableName"] = "mined4";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "cambio_domicilio",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto58["m_sql"] = "cambio_domicilio";
$proto58["m_srcTableName"] = "mined4";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "migracion",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto60["m_sql"] = "migracion";
$proto60["m_srcTableName"] = "mined4";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "bajo_rendimiento",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto62["m_sql"] = "bajo_rendimiento";
$proto62["m_srcTableName"] = "mined4";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "enfermedad",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto64["m_sql"] = "enfermedad";
$proto64["m_srcTableName"] = "mined4";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "prostitucion",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto66["m_sql"] = "prostitucion";
$proto66["m_srcTableName"] = "mined4";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "dep_mun",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto68["m_sql"] = "dep_mun";
$proto68["m_srcTableName"] = "mined4";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "max_matric2016",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto70["m_sql"] = "max_matric2016";
$proto70["m_srcTableName"] = "mined4";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "mrf2016",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto72["m_sql"] = "mrf2016";
$proto72["m_srcTableName"] = "mined4";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "pab_af",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto74["m_sql"] = "pab_af";
$proto74["m_srcTableName"] = "mined4";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "r_h",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto76["m_sql"] = "r_h";
$proto76["m_srcTableName"] = "mined4";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "ipce_naive",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto78["m_sql"] = "ipce_naive";
$proto78["m_srcTableName"] = "mined4";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "ipce_0_1",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto80["m_sql"] = "ipce_0_1";
$proto80["m_srcTableName"] = "mined4";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined4"
));

$proto82["m_sql"] = "`aÑo`";
$proto82["m_srcTableName"] = "mined4";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto84=array();
$proto84["m_link"] = "SQLL_MAIN";
			$proto85=array();
$proto85["m_strName"] = "mined";
$proto85["m_srcTableName"] = "mined4";
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
$proto84["m_srcTableName"] = "mined4";
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
$proto0["m_srcTableName"]="mined4";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mined4 = createSqlQuery_mined4();


	
		;

																																							

$tdatamined4[".sqlquery"] = $queryData_mined4;

$tableEvents["mined4"] = new eventsBase;
$tdatamined4[".hasEvents"] = false;

?>