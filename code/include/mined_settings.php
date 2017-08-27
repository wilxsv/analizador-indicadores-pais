<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamined = array();
	$tdatamined[".truncateText"] = true;
	$tdatamined[".NumberOfChars"] = 80;
	$tdatamined[".ShortName"] = "mined";
	$tdatamined[".OwnerID"] = "";
	$tdatamined[".OriginalTable"] = "mined";

//	field labels
$fieldLabelsmined = array();
$fieldToolTipsmined = array();
$pageTitlesmined = array();
$placeHoldersmined = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmined["Spanish"] = array();
	$fieldToolTipsmined["Spanish"] = array();
	$placeHoldersmined["Spanish"] = array();
	$pageTitlesmined["Spanish"] = array();
	$fieldLabelsmined["Spanish"]["idderespuesta"] = "Idderespuesta";
	$fieldToolTipsmined["Spanish"]["idderespuesta"] = "";
	$placeHoldersmined["Spanish"]["idderespuesta"] = "";
	$fieldLabelsmined["Spanish"]["codigo"] = "Codigo";
	$fieldToolTipsmined["Spanish"]["codigo"] = "";
	$placeHoldersmined["Spanish"]["codigo"] = "";
	$fieldLabelsmined["Spanish"]["depto"] = "Depto";
	$fieldToolTipsmined["Spanish"]["depto"] = "";
	$placeHoldersmined["Spanish"]["depto"] = "";
	$fieldLabelsmined["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsmined["Spanish"]["departamento"] = "";
	$placeHoldersmined["Spanish"]["departamento"] = "";
	$fieldLabelsmined["Spanish"]["mun"] = "Mun";
	$fieldToolTipsmined["Spanish"]["mun"] = "";
	$placeHoldersmined["Spanish"]["mun"] = "";
	$fieldLabelsmined["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsmined["Spanish"]["municipio"] = "";
	$placeHoldersmined["Spanish"]["municipio"] = "";
	$fieldLabelsmined["Spanish"]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsmined["Spanish"]["nombre_c_e"] = "";
	$placeHoldersmined["Spanish"]["nombre_c_e"] = "";
	$fieldLabelsmined["Spanish"]["x"] = "X";
	$fieldToolTipsmined["Spanish"]["x"] = "";
	$placeHoldersmined["Spanish"]["x"] = "";
	$fieldLabelsmined["Spanish"]["y"] = "Y";
	$fieldToolTipsmined["Spanish"]["y"] = "";
	$placeHoldersmined["Spanish"]["y"] = "";
	$fieldLabelsmined["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsmined["Spanish"]["sector_ppd"] = "";
	$placeHoldersmined["Spanish"]["sector_ppd"] = "";
	$fieldLabelsmined["Spanish"]["matricula_inicial"] = "Matricula Inicial";
	$fieldToolTipsmined["Spanish"]["matricula_inicial"] = "";
	$placeHoldersmined["Spanish"]["matricula_inicial"] = "";
	$fieldLabelsmined["Spanish"]["matricula_final"] = "Matricula Final";
	$fieldToolTipsmined["Spanish"]["matricula_final"] = "";
	$placeHoldersmined["Spanish"]["matricula_final"] = "";
	$fieldLabelsmined["Spanish"]["maras"] = "Maras";
	$fieldToolTipsmined["Spanish"]["maras"] = "";
	$placeHoldersmined["Spanish"]["maras"] = "";
	$fieldLabelsmined["Spanish"]["robos"] = "Robos";
	$fieldToolTipsmined["Spanish"]["robos"] = "";
	$placeHoldersmined["Spanish"]["robos"] = "";
	$fieldLabelsmined["Spanish"]["hurtos"] = "Hurtos";
	$fieldToolTipsmined["Spanish"]["hurtos"] = "";
	$placeHoldersmined["Spanish"]["hurtos"] = "";
	$fieldLabelsmined["Spanish"]["drogas"] = "Drogas";
	$fieldToolTipsmined["Spanish"]["drogas"] = "";
	$placeHoldersmined["Spanish"]["drogas"] = "";
	$fieldLabelsmined["Spanish"]["violaciones"] = "Violaciones";
	$fieldToolTipsmined["Spanish"]["violaciones"] = "";
	$placeHoldersmined["Spanish"]["violaciones"] = "";
	$fieldLabelsmined["Spanish"]["pab"] = "Pab";
	$fieldToolTipsmined["Spanish"]["pab"] = "";
	$placeHoldersmined["Spanish"]["pab"] = "";
	$fieldLabelsmined["Spanish"]["paf"] = "Paf";
	$fieldToolTipsmined["Spanish"]["paf"] = "";
	$placeHoldersmined["Spanish"]["paf"] = "";
	$fieldLabelsmined["Spanish"]["escasos_recursos"] = "Escasos Recursos";
	$fieldToolTipsmined["Spanish"]["escasos_recursos"] = "";
	$placeHoldersmined["Spanish"]["escasos_recursos"] = "";
	$fieldLabelsmined["Spanish"]["incorpo_actividades_prod"] = "Incorpo Actividades Prod";
	$fieldToolTipsmined["Spanish"]["incorpo_actividades_prod"] = "";
	$placeHoldersmined["Spanish"]["incorpo_actividades_prod"] = "";
	$fieldLabelsmined["Spanish"]["lejania_ce"] = "Lejania Ce";
	$fieldToolTipsmined["Spanish"]["lejania_ce"] = "";
	$placeHoldersmined["Spanish"]["lejania_ce"] = "";
	$fieldLabelsmined["Spanish"]["violencia_pandilleril"] = "Violencia Pandilleril";
	$fieldToolTipsmined["Spanish"]["violencia_pandilleril"] = "";
	$placeHoldersmined["Spanish"]["violencia_pandilleril"] = "";
	$fieldLabelsmined["Spanish"]["embarazo"] = "Embarazo";
	$fieldToolTipsmined["Spanish"]["embarazo"] = "";
	$placeHoldersmined["Spanish"]["embarazo"] = "";
	$fieldLabelsmined["Spanish"]["acoso"] = "Acoso";
	$fieldToolTipsmined["Spanish"]["acoso"] = "";
	$placeHoldersmined["Spanish"]["acoso"] = "";
	$fieldLabelsmined["Spanish"]["violacion_sexual"] = "Violacion Sexual";
	$fieldToolTipsmined["Spanish"]["violacion_sexual"] = "";
	$placeHoldersmined["Spanish"]["violacion_sexual"] = "";
	$fieldLabelsmined["Spanish"]["cambio_domicilio"] = "Cambio Domicilio";
	$fieldToolTipsmined["Spanish"]["cambio_domicilio"] = "";
	$placeHoldersmined["Spanish"]["cambio_domicilio"] = "";
	$fieldLabelsmined["Spanish"]["migracion"] = "Migracion";
	$fieldToolTipsmined["Spanish"]["migracion"] = "";
	$placeHoldersmined["Spanish"]["migracion"] = "";
	$fieldLabelsmined["Spanish"]["bajo_rendimiento"] = "Bajo Rendimiento";
	$fieldToolTipsmined["Spanish"]["bajo_rendimiento"] = "";
	$placeHoldersmined["Spanish"]["bajo_rendimiento"] = "";
	$fieldLabelsmined["Spanish"]["enfermedad"] = "Enfermedad";
	$fieldToolTipsmined["Spanish"]["enfermedad"] = "";
	$placeHoldersmined["Spanish"]["enfermedad"] = "";
	$fieldLabelsmined["Spanish"]["prostitucion"] = "Prostitucion";
	$fieldToolTipsmined["Spanish"]["prostitucion"] = "";
	$placeHoldersmined["Spanish"]["prostitucion"] = "";
	$fieldLabelsmined["Spanish"]["dep_mun"] = "Dep Mun";
	$fieldToolTipsmined["Spanish"]["dep_mun"] = "";
	$placeHoldersmined["Spanish"]["dep_mun"] = "";
	$fieldLabelsmined["Spanish"]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipsmined["Spanish"]["max_matric2016"] = "";
	$placeHoldersmined["Spanish"]["max_matric2016"] = "";
	$fieldLabelsmined["Spanish"]["mrf2016"] = "Mrf2016";
	$fieldToolTipsmined["Spanish"]["mrf2016"] = "";
	$placeHoldersmined["Spanish"]["mrf2016"] = "";
	$fieldLabelsmined["Spanish"]["pab_af"] = "Pab Af";
	$fieldToolTipsmined["Spanish"]["pab_af"] = "";
	$placeHoldersmined["Spanish"]["pab_af"] = "";
	$fieldLabelsmined["Spanish"]["r_h"] = "R H";
	$fieldToolTipsmined["Spanish"]["r_h"] = "";
	$placeHoldersmined["Spanish"]["r_h"] = "";
	$fieldLabelsmined["Spanish"]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipsmined["Spanish"]["ipce_naive"] = "";
	$placeHoldersmined["Spanish"]["ipce_naive"] = "";
	$fieldLabelsmined["Spanish"]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipsmined["Spanish"]["ipce_0_1"] = "";
	$placeHoldersmined["Spanish"]["ipce_0_1"] = "";
	$fieldLabelsmined["Spanish"]["a_o"] = "AÑo";
	$fieldToolTipsmined["Spanish"]["a_o"] = "";
	$placeHoldersmined["Spanish"]["a_o"] = "";
	if (count($fieldToolTipsmined["Spanish"]))
		$tdatamined[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmined["English"] = array();
	$fieldToolTipsmined["English"] = array();
	$placeHoldersmined["English"] = array();
	$pageTitlesmined["English"] = array();
	$fieldLabelsmined["English"]["idderespuesta"] = "Idderespuesta";
	$fieldToolTipsmined["English"]["idderespuesta"] = "";
	$placeHoldersmined["English"]["idderespuesta"] = "";
	$fieldLabelsmined["English"]["codigo"] = "Codigo";
	$fieldToolTipsmined["English"]["codigo"] = "";
	$placeHoldersmined["English"]["codigo"] = "";
	$fieldLabelsmined["English"]["depto"] = "Depto";
	$fieldToolTipsmined["English"]["depto"] = "";
	$placeHoldersmined["English"]["depto"] = "";
	$fieldLabelsmined["English"]["departamento"] = "Departamento";
	$fieldToolTipsmined["English"]["departamento"] = "";
	$placeHoldersmined["English"]["departamento"] = "";
	$fieldLabelsmined["English"]["mun"] = "Mun";
	$fieldToolTipsmined["English"]["mun"] = "";
	$placeHoldersmined["English"]["mun"] = "";
	$fieldLabelsmined["English"]["municipio"] = "Municipio";
	$fieldToolTipsmined["English"]["municipio"] = "";
	$placeHoldersmined["English"]["municipio"] = "";
	$fieldLabelsmined["English"]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsmined["English"]["nombre_c_e"] = "";
	$placeHoldersmined["English"]["nombre_c_e"] = "";
	$fieldLabelsmined["English"]["x"] = "X";
	$fieldToolTipsmined["English"]["x"] = "";
	$placeHoldersmined["English"]["x"] = "";
	$fieldLabelsmined["English"]["y"] = "Y";
	$fieldToolTipsmined["English"]["y"] = "";
	$placeHoldersmined["English"]["y"] = "";
	$fieldLabelsmined["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsmined["English"]["sector_ppd"] = "";
	$placeHoldersmined["English"]["sector_ppd"] = "";
	$fieldLabelsmined["English"]["matricula_inicial"] = "Matricula Inicial";
	$fieldToolTipsmined["English"]["matricula_inicial"] = "";
	$placeHoldersmined["English"]["matricula_inicial"] = "";
	$fieldLabelsmined["English"]["matricula_final"] = "Matricula Final";
	$fieldToolTipsmined["English"]["matricula_final"] = "";
	$placeHoldersmined["English"]["matricula_final"] = "";
	$fieldLabelsmined["English"]["maras"] = "Maras";
	$fieldToolTipsmined["English"]["maras"] = "";
	$placeHoldersmined["English"]["maras"] = "";
	$fieldLabelsmined["English"]["robos"] = "Robos";
	$fieldToolTipsmined["English"]["robos"] = "";
	$placeHoldersmined["English"]["robos"] = "";
	$fieldLabelsmined["English"]["hurtos"] = "Hurtos";
	$fieldToolTipsmined["English"]["hurtos"] = "";
	$placeHoldersmined["English"]["hurtos"] = "";
	$fieldLabelsmined["English"]["drogas"] = "Drogas";
	$fieldToolTipsmined["English"]["drogas"] = "";
	$placeHoldersmined["English"]["drogas"] = "";
	$fieldLabelsmined["English"]["violaciones"] = "Violaciones";
	$fieldToolTipsmined["English"]["violaciones"] = "";
	$placeHoldersmined["English"]["violaciones"] = "";
	$fieldLabelsmined["English"]["pab"] = "Pab";
	$fieldToolTipsmined["English"]["pab"] = "";
	$placeHoldersmined["English"]["pab"] = "";
	$fieldLabelsmined["English"]["paf"] = "Paf";
	$fieldToolTipsmined["English"]["paf"] = "";
	$placeHoldersmined["English"]["paf"] = "";
	$fieldLabelsmined["English"]["escasos_recursos"] = "Escasos Recursos";
	$fieldToolTipsmined["English"]["escasos_recursos"] = "";
	$placeHoldersmined["English"]["escasos_recursos"] = "";
	$fieldLabelsmined["English"]["incorpo_actividades_prod"] = "Incorpo Actividades Prod";
	$fieldToolTipsmined["English"]["incorpo_actividades_prod"] = "";
	$placeHoldersmined["English"]["incorpo_actividades_prod"] = "";
	$fieldLabelsmined["English"]["lejania_ce"] = "Lejania Ce";
	$fieldToolTipsmined["English"]["lejania_ce"] = "";
	$placeHoldersmined["English"]["lejania_ce"] = "";
	$fieldLabelsmined["English"]["violencia_pandilleril"] = "Violencia Pandilleril";
	$fieldToolTipsmined["English"]["violencia_pandilleril"] = "";
	$placeHoldersmined["English"]["violencia_pandilleril"] = "";
	$fieldLabelsmined["English"]["embarazo"] = "Embarazo";
	$fieldToolTipsmined["English"]["embarazo"] = "";
	$placeHoldersmined["English"]["embarazo"] = "";
	$fieldLabelsmined["English"]["acoso"] = "Acoso";
	$fieldToolTipsmined["English"]["acoso"] = "";
	$placeHoldersmined["English"]["acoso"] = "";
	$fieldLabelsmined["English"]["violacion_sexual"] = "Violacion Sexual";
	$fieldToolTipsmined["English"]["violacion_sexual"] = "";
	$placeHoldersmined["English"]["violacion_sexual"] = "";
	$fieldLabelsmined["English"]["cambio_domicilio"] = "Cambio Domicilio";
	$fieldToolTipsmined["English"]["cambio_domicilio"] = "";
	$placeHoldersmined["English"]["cambio_domicilio"] = "";
	$fieldLabelsmined["English"]["migracion"] = "Migracion";
	$fieldToolTipsmined["English"]["migracion"] = "";
	$placeHoldersmined["English"]["migracion"] = "";
	$fieldLabelsmined["English"]["bajo_rendimiento"] = "Bajo Rendimiento";
	$fieldToolTipsmined["English"]["bajo_rendimiento"] = "";
	$placeHoldersmined["English"]["bajo_rendimiento"] = "";
	$fieldLabelsmined["English"]["enfermedad"] = "Enfermedad";
	$fieldToolTipsmined["English"]["enfermedad"] = "";
	$placeHoldersmined["English"]["enfermedad"] = "";
	$fieldLabelsmined["English"]["prostitucion"] = "Prostitucion";
	$fieldToolTipsmined["English"]["prostitucion"] = "";
	$placeHoldersmined["English"]["prostitucion"] = "";
	$fieldLabelsmined["English"]["dep_mun"] = "Dep Mun";
	$fieldToolTipsmined["English"]["dep_mun"] = "";
	$placeHoldersmined["English"]["dep_mun"] = "";
	$fieldLabelsmined["English"]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipsmined["English"]["max_matric2016"] = "";
	$placeHoldersmined["English"]["max_matric2016"] = "";
	$fieldLabelsmined["English"]["mrf2016"] = "Mrf2016";
	$fieldToolTipsmined["English"]["mrf2016"] = "";
	$placeHoldersmined["English"]["mrf2016"] = "";
	$fieldLabelsmined["English"]["pab_af"] = "Pab Af";
	$fieldToolTipsmined["English"]["pab_af"] = "";
	$placeHoldersmined["English"]["pab_af"] = "";
	$fieldLabelsmined["English"]["r_h"] = "R H";
	$fieldToolTipsmined["English"]["r_h"] = "";
	$placeHoldersmined["English"]["r_h"] = "";
	$fieldLabelsmined["English"]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipsmined["English"]["ipce_naive"] = "";
	$placeHoldersmined["English"]["ipce_naive"] = "";
	$fieldLabelsmined["English"]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipsmined["English"]["ipce_0_1"] = "";
	$placeHoldersmined["English"]["ipce_0_1"] = "";
	$fieldLabelsmined["English"]["a_o"] = "AÑo";
	$fieldToolTipsmined["English"]["a_o"] = "";
	$placeHoldersmined["English"]["a_o"] = "";
	if (count($fieldToolTipsmined["English"]))
		$tdatamined[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmined[""] = array();
	$fieldToolTipsmined[""] = array();
	$placeHoldersmined[""] = array();
	$pageTitlesmined[""] = array();
	$fieldLabelsmined[""]["idderespuesta"] = "Idderespuesta";
	$fieldToolTipsmined[""]["idderespuesta"] = "";
	$placeHoldersmined[""]["idderespuesta"] = "";
	$fieldLabelsmined[""]["codigo"] = "Codigo";
	$fieldToolTipsmined[""]["codigo"] = "";
	$placeHoldersmined[""]["codigo"] = "";
	$fieldLabelsmined[""]["depto"] = "Depto";
	$fieldToolTipsmined[""]["depto"] = "";
	$placeHoldersmined[""]["depto"] = "";
	$fieldLabelsmined[""]["departamento"] = "Departamento";
	$fieldToolTipsmined[""]["departamento"] = "";
	$placeHoldersmined[""]["departamento"] = "";
	$fieldLabelsmined[""]["mun"] = "Mun";
	$fieldToolTipsmined[""]["mun"] = "";
	$placeHoldersmined[""]["mun"] = "";
	$fieldLabelsmined[""]["municipio"] = "Municipio";
	$fieldToolTipsmined[""]["municipio"] = "";
	$placeHoldersmined[""]["municipio"] = "";
	$fieldLabelsmined[""]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsmined[""]["nombre_c_e"] = "";
	$placeHoldersmined[""]["nombre_c_e"] = "";
	$fieldLabelsmined[""]["x"] = "X";
	$fieldToolTipsmined[""]["x"] = "";
	$placeHoldersmined[""]["x"] = "";
	$fieldLabelsmined[""]["y"] = "Y";
	$fieldToolTipsmined[""]["y"] = "";
	$placeHoldersmined[""]["y"] = "";
	$fieldLabelsmined[""]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsmined[""]["sector_ppd"] = "";
	$placeHoldersmined[""]["sector_ppd"] = "";
	$fieldLabelsmined[""]["matricula_inicial"] = "Matricula Inicial";
	$fieldToolTipsmined[""]["matricula_inicial"] = "";
	$placeHoldersmined[""]["matricula_inicial"] = "";
	$fieldLabelsmined[""]["matricula_final"] = "Matricula Final";
	$fieldToolTipsmined[""]["matricula_final"] = "";
	$placeHoldersmined[""]["matricula_final"] = "";
	$fieldLabelsmined[""]["maras"] = "Maras";
	$fieldToolTipsmined[""]["maras"] = "";
	$placeHoldersmined[""]["maras"] = "";
	$fieldLabelsmined[""]["robos"] = "Robos";
	$fieldToolTipsmined[""]["robos"] = "";
	$placeHoldersmined[""]["robos"] = "";
	$fieldLabelsmined[""]["hurtos"] = "Hurtos";
	$fieldToolTipsmined[""]["hurtos"] = "";
	$placeHoldersmined[""]["hurtos"] = "";
	$fieldLabelsmined[""]["drogas"] = "Drogas";
	$fieldToolTipsmined[""]["drogas"] = "";
	$placeHoldersmined[""]["drogas"] = "";
	$fieldLabelsmined[""]["violaciones"] = "Violaciones";
	$fieldToolTipsmined[""]["violaciones"] = "";
	$placeHoldersmined[""]["violaciones"] = "";
	$fieldLabelsmined[""]["pab"] = "Pab";
	$fieldToolTipsmined[""]["pab"] = "";
	$placeHoldersmined[""]["pab"] = "";
	$fieldLabelsmined[""]["paf"] = "Paf";
	$fieldToolTipsmined[""]["paf"] = "";
	$placeHoldersmined[""]["paf"] = "";
	$fieldLabelsmined[""]["escasos_recursos"] = "Escasos Recursos";
	$fieldToolTipsmined[""]["escasos_recursos"] = "";
	$placeHoldersmined[""]["escasos_recursos"] = "";
	$fieldLabelsmined[""]["incorpo_actividades_prod"] = "Incorpo Actividades Prod";
	$fieldToolTipsmined[""]["incorpo_actividades_prod"] = "";
	$placeHoldersmined[""]["incorpo_actividades_prod"] = "";
	$fieldLabelsmined[""]["lejania_ce"] = "Lejania Ce";
	$fieldToolTipsmined[""]["lejania_ce"] = "";
	$placeHoldersmined[""]["lejania_ce"] = "";
	$fieldLabelsmined[""]["violencia_pandilleril"] = "Violencia Pandilleril";
	$fieldToolTipsmined[""]["violencia_pandilleril"] = "";
	$placeHoldersmined[""]["violencia_pandilleril"] = "";
	$fieldLabelsmined[""]["embarazo"] = "Embarazo";
	$fieldToolTipsmined[""]["embarazo"] = "";
	$placeHoldersmined[""]["embarazo"] = "";
	$fieldLabelsmined[""]["acoso"] = "Acoso";
	$fieldToolTipsmined[""]["acoso"] = "";
	$placeHoldersmined[""]["acoso"] = "";
	$fieldLabelsmined[""]["violacion_sexual"] = "Violacion Sexual";
	$fieldToolTipsmined[""]["violacion_sexual"] = "";
	$placeHoldersmined[""]["violacion_sexual"] = "";
	$fieldLabelsmined[""]["cambio_domicilio"] = "Cambio Domicilio";
	$fieldToolTipsmined[""]["cambio_domicilio"] = "";
	$placeHoldersmined[""]["cambio_domicilio"] = "";
	$fieldLabelsmined[""]["migracion"] = "Migracion";
	$fieldToolTipsmined[""]["migracion"] = "";
	$placeHoldersmined[""]["migracion"] = "";
	$fieldLabelsmined[""]["bajo_rendimiento"] = "Bajo Rendimiento";
	$fieldToolTipsmined[""]["bajo_rendimiento"] = "";
	$placeHoldersmined[""]["bajo_rendimiento"] = "";
	$fieldLabelsmined[""]["enfermedad"] = "Enfermedad";
	$fieldToolTipsmined[""]["enfermedad"] = "";
	$placeHoldersmined[""]["enfermedad"] = "";
	$fieldLabelsmined[""]["prostitucion"] = "Prostitucion";
	$fieldToolTipsmined[""]["prostitucion"] = "";
	$placeHoldersmined[""]["prostitucion"] = "";
	$fieldLabelsmined[""]["dep_mun"] = "Dep Mun";
	$fieldToolTipsmined[""]["dep_mun"] = "";
	$placeHoldersmined[""]["dep_mun"] = "";
	$fieldLabelsmined[""]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipsmined[""]["max_matric2016"] = "";
	$placeHoldersmined[""]["max_matric2016"] = "";
	$fieldLabelsmined[""]["mrf2016"] = "Mrf2016";
	$fieldToolTipsmined[""]["mrf2016"] = "";
	$placeHoldersmined[""]["mrf2016"] = "";
	$fieldLabelsmined[""]["pab_af"] = "Pab Af";
	$fieldToolTipsmined[""]["pab_af"] = "";
	$placeHoldersmined[""]["pab_af"] = "";
	$fieldLabelsmined[""]["r_h"] = "R H";
	$fieldToolTipsmined[""]["r_h"] = "";
	$placeHoldersmined[""]["r_h"] = "";
	$fieldLabelsmined[""]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipsmined[""]["ipce_naive"] = "";
	$placeHoldersmined[""]["ipce_naive"] = "";
	$fieldLabelsmined[""]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipsmined[""]["ipce_0_1"] = "";
	$placeHoldersmined[""]["ipce_0_1"] = "";
	$fieldLabelsmined[""]["a_o"] = "AÑo";
	$fieldToolTipsmined[""]["a_o"] = "";
	$placeHoldersmined[""]["a_o"] = "";
	if (count($fieldToolTipsmined[""]))
		$tdatamined[".isUseToolTips"] = true;
}


	$tdatamined[".NCSearch"] = true;



$tdatamined[".shortTableName"] = "mined";
$tdatamined[".nSecOptions"] = 0;
$tdatamined[".recsPerRowPrint"] = 1;
$tdatamined[".mainTableOwnerID"] = "";
$tdatamined[".moveNext"] = 1;
$tdatamined[".entityType"] = 0;

$tdatamined[".strOriginalTableName"] = "mined";

	



$tdatamined[".showAddInPopup"] = false;

$tdatamined[".showEditInPopup"] = false;

$tdatamined[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamined[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamined[".fieldsForRegister"] = array();

	$tdatamined[".listAjax"] = true;

	$tdatamined[".audit"] = false;

	$tdatamined[".locking"] = false;


$tdatamined[".add"] = true;
$tdatamined[".afterAddAction"] = 1;
$tdatamined[".closePopupAfterAdd"] = 1;
$tdatamined[".afterAddActionDetTable"] = "";

$tdatamined[".list"] = true;



$tdatamined[".reorderRecordsByHeader"] = true;
$tdatamined[".createSortByDropdown"] = true;
$tdatamined[".strSortControlSettingsJSON"] = "";



$tdatamined[".inlineAdd"] = true;

$tdatamined[".import"] = true;

$tdatamined[".exportTo"] = true;

$tdatamined[".printFriendly"] = true;


$tdatamined[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamined[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamined[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamined[".searchSaving"] = false;
//

$tdatamined[".showSearchPanel"] = true;
		$tdatamined[".flexibleSearch"] = true;

$tdatamined[".isUseAjaxSuggest"] = true;

$tdatamined[".rowHighlite"] = true;





$tdatamined[".ajaxCodeSnippetAdded"] = false;

$tdatamined[".buttonsAdded"] = false;

$tdatamined[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamined[".isUseTimeForSearch"] = false;





$tdatamined[".allSearchFields"] = array();
$tdatamined[".filterFields"] = array();
$tdatamined[".requiredSearchFields"] = array();

$tdatamined[".allSearchFields"][] = "idderespuesta";
	$tdatamined[".allSearchFields"][] = "codigo";
	$tdatamined[".allSearchFields"][] = "depto";
	$tdatamined[".allSearchFields"][] = "departamento";
	$tdatamined[".allSearchFields"][] = "mun";
	$tdatamined[".allSearchFields"][] = "municipio";
	$tdatamined[".allSearchFields"][] = "nombre_c_e";
	$tdatamined[".allSearchFields"][] = "x";
	$tdatamined[".allSearchFields"][] = "y";
	$tdatamined[".allSearchFields"][] = "sector_ppd";
	$tdatamined[".allSearchFields"][] = "matricula_inicial";
	$tdatamined[".allSearchFields"][] = "matricula_final";
	$tdatamined[".allSearchFields"][] = "maras";
	$tdatamined[".allSearchFields"][] = "robos";
	$tdatamined[".allSearchFields"][] = "hurtos";
	$tdatamined[".allSearchFields"][] = "drogas";
	$tdatamined[".allSearchFields"][] = "violaciones";
	$tdatamined[".allSearchFields"][] = "pab";
	$tdatamined[".allSearchFields"][] = "paf";
	$tdatamined[".allSearchFields"][] = "escasos_recursos";
	$tdatamined[".allSearchFields"][] = "incorpo_actividades_prod";
	$tdatamined[".allSearchFields"][] = "lejania_ce";
	$tdatamined[".allSearchFields"][] = "violencia_pandilleril";
	$tdatamined[".allSearchFields"][] = "embarazo";
	$tdatamined[".allSearchFields"][] = "acoso";
	$tdatamined[".allSearchFields"][] = "violacion_sexual";
	$tdatamined[".allSearchFields"][] = "cambio_domicilio";
	$tdatamined[".allSearchFields"][] = "migracion";
	$tdatamined[".allSearchFields"][] = "bajo_rendimiento";
	$tdatamined[".allSearchFields"][] = "enfermedad";
	$tdatamined[".allSearchFields"][] = "prostitucion";
	$tdatamined[".allSearchFields"][] = "dep_mun";
	$tdatamined[".allSearchFields"][] = "max_matric2016";
	$tdatamined[".allSearchFields"][] = "mrf2016";
	$tdatamined[".allSearchFields"][] = "pab_af";
	$tdatamined[".allSearchFields"][] = "r_h";
	$tdatamined[".allSearchFields"][] = "ipce_naive";
	$tdatamined[".allSearchFields"][] = "ipce_0_1";
	$tdatamined[".allSearchFields"][] = "aÑo";
	

$tdatamined[".googleLikeFields"] = array();
$tdatamined[".googleLikeFields"][] = "idderespuesta";
$tdatamined[".googleLikeFields"][] = "codigo";
$tdatamined[".googleLikeFields"][] = "depto";
$tdatamined[".googleLikeFields"][] = "departamento";
$tdatamined[".googleLikeFields"][] = "mun";
$tdatamined[".googleLikeFields"][] = "municipio";
$tdatamined[".googleLikeFields"][] = "nombre_c_e";
$tdatamined[".googleLikeFields"][] = "x";
$tdatamined[".googleLikeFields"][] = "y";
$tdatamined[".googleLikeFields"][] = "sector_ppd";
$tdatamined[".googleLikeFields"][] = "matricula_inicial";
$tdatamined[".googleLikeFields"][] = "matricula_final";
$tdatamined[".googleLikeFields"][] = "maras";
$tdatamined[".googleLikeFields"][] = "robos";
$tdatamined[".googleLikeFields"][] = "hurtos";
$tdatamined[".googleLikeFields"][] = "drogas";
$tdatamined[".googleLikeFields"][] = "violaciones";
$tdatamined[".googleLikeFields"][] = "pab";
$tdatamined[".googleLikeFields"][] = "paf";
$tdatamined[".googleLikeFields"][] = "escasos_recursos";
$tdatamined[".googleLikeFields"][] = "incorpo_actividades_prod";
$tdatamined[".googleLikeFields"][] = "lejania_ce";
$tdatamined[".googleLikeFields"][] = "violencia_pandilleril";
$tdatamined[".googleLikeFields"][] = "embarazo";
$tdatamined[".googleLikeFields"][] = "acoso";
$tdatamined[".googleLikeFields"][] = "violacion_sexual";
$tdatamined[".googleLikeFields"][] = "cambio_domicilio";
$tdatamined[".googleLikeFields"][] = "migracion";
$tdatamined[".googleLikeFields"][] = "bajo_rendimiento";
$tdatamined[".googleLikeFields"][] = "enfermedad";
$tdatamined[".googleLikeFields"][] = "prostitucion";
$tdatamined[".googleLikeFields"][] = "dep_mun";
$tdatamined[".googleLikeFields"][] = "max_matric2016";
$tdatamined[".googleLikeFields"][] = "mrf2016";
$tdatamined[".googleLikeFields"][] = "pab_af";
$tdatamined[".googleLikeFields"][] = "r_h";
$tdatamined[".googleLikeFields"][] = "ipce_naive";
$tdatamined[".googleLikeFields"][] = "ipce_0_1";
$tdatamined[".googleLikeFields"][] = "aÑo";


$tdatamined[".advSearchFields"] = array();
$tdatamined[".advSearchFields"][] = "idderespuesta";
$tdatamined[".advSearchFields"][] = "codigo";
$tdatamined[".advSearchFields"][] = "depto";
$tdatamined[".advSearchFields"][] = "departamento";
$tdatamined[".advSearchFields"][] = "mun";
$tdatamined[".advSearchFields"][] = "municipio";
$tdatamined[".advSearchFields"][] = "nombre_c_e";
$tdatamined[".advSearchFields"][] = "x";
$tdatamined[".advSearchFields"][] = "y";
$tdatamined[".advSearchFields"][] = "sector_ppd";
$tdatamined[".advSearchFields"][] = "matricula_inicial";
$tdatamined[".advSearchFields"][] = "matricula_final";
$tdatamined[".advSearchFields"][] = "maras";
$tdatamined[".advSearchFields"][] = "robos";
$tdatamined[".advSearchFields"][] = "hurtos";
$tdatamined[".advSearchFields"][] = "drogas";
$tdatamined[".advSearchFields"][] = "violaciones";
$tdatamined[".advSearchFields"][] = "pab";
$tdatamined[".advSearchFields"][] = "paf";
$tdatamined[".advSearchFields"][] = "escasos_recursos";
$tdatamined[".advSearchFields"][] = "incorpo_actividades_prod";
$tdatamined[".advSearchFields"][] = "lejania_ce";
$tdatamined[".advSearchFields"][] = "violencia_pandilleril";
$tdatamined[".advSearchFields"][] = "embarazo";
$tdatamined[".advSearchFields"][] = "acoso";
$tdatamined[".advSearchFields"][] = "violacion_sexual";
$tdatamined[".advSearchFields"][] = "cambio_domicilio";
$tdatamined[".advSearchFields"][] = "migracion";
$tdatamined[".advSearchFields"][] = "bajo_rendimiento";
$tdatamined[".advSearchFields"][] = "enfermedad";
$tdatamined[".advSearchFields"][] = "prostitucion";
$tdatamined[".advSearchFields"][] = "dep_mun";
$tdatamined[".advSearchFields"][] = "max_matric2016";
$tdatamined[".advSearchFields"][] = "mrf2016";
$tdatamined[".advSearchFields"][] = "pab_af";
$tdatamined[".advSearchFields"][] = "r_h";
$tdatamined[".advSearchFields"][] = "ipce_naive";
$tdatamined[".advSearchFields"][] = "ipce_0_1";
$tdatamined[".advSearchFields"][] = "aÑo";

$tdatamined[".tableType"] = "list";

$tdatamined[".printerPageOrientation"] = 0;
$tdatamined[".nPrinterPageScale"] = 100;

$tdatamined[".nPrinterSplitRecords"] = 40;

$tdatamined[".nPrinterPDFSplitRecords"] = 40;



$tdatamined[".geocodingEnabled"] = false;





$tdatamined[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamined[".pageSize"] = 20;

$tdatamined[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamined[".strOrderBy"] = $tstrOrderBy;

$tdatamined[".orderindexes"] = array();

$tdatamined[".sqlHead"] = "SELECT idderespuesta,  	codigo,  	depto,  	departamento,  	mun,  	municipio,  	nombre_c_e,  	x,  	y,  	sector_ppd,  	matricula_inicial,  	matricula_final,  	maras,  	robos,  	hurtos,  	drogas,  	violaciones,  	pab,  	paf,  	escasos_recursos,  	incorpo_actividades_prod,  	lejania_ce,  	violencia_pandilleril,  	embarazo,  	acoso,  	violacion_sexual,  	cambio_domicilio,  	migracion,  	bajo_rendimiento,  	enfermedad,  	prostitucion,  	dep_mun,  	max_matric2016,  	mrf2016,  	pab_af,  	r_h,  	ipce_naive,  	ipce_0_1,  	`aÑo`";
$tdatamined[".sqlFrom"] = "FROM mined";
$tdatamined[".sqlWhereExpr"] = "";
$tdatamined[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamined[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamined[".arrGroupsPerPage"] = $arrGPP;

$tdatamined[".highlightSearchResults"] = true;

$tableKeysmined = array();
$tdatamined[".Keys"] = $tableKeysmined;

$tdatamined[".listFields"] = array();
$tdatamined[".listFields"][] = "idderespuesta";
$tdatamined[".listFields"][] = "codigo";
$tdatamined[".listFields"][] = "depto";
$tdatamined[".listFields"][] = "departamento";
$tdatamined[".listFields"][] = "mun";
$tdatamined[".listFields"][] = "municipio";
$tdatamined[".listFields"][] = "nombre_c_e";
$tdatamined[".listFields"][] = "x";
$tdatamined[".listFields"][] = "y";
$tdatamined[".listFields"][] = "sector_ppd";
$tdatamined[".listFields"][] = "matricula_inicial";
$tdatamined[".listFields"][] = "matricula_final";
$tdatamined[".listFields"][] = "maras";
$tdatamined[".listFields"][] = "robos";
$tdatamined[".listFields"][] = "hurtos";
$tdatamined[".listFields"][] = "drogas";
$tdatamined[".listFields"][] = "violaciones";
$tdatamined[".listFields"][] = "pab";
$tdatamined[".listFields"][] = "paf";
$tdatamined[".listFields"][] = "escasos_recursos";
$tdatamined[".listFields"][] = "incorpo_actividades_prod";
$tdatamined[".listFields"][] = "lejania_ce";
$tdatamined[".listFields"][] = "violencia_pandilleril";
$tdatamined[".listFields"][] = "embarazo";
$tdatamined[".listFields"][] = "acoso";
$tdatamined[".listFields"][] = "violacion_sexual";
$tdatamined[".listFields"][] = "cambio_domicilio";
$tdatamined[".listFields"][] = "migracion";
$tdatamined[".listFields"][] = "bajo_rendimiento";
$tdatamined[".listFields"][] = "enfermedad";
$tdatamined[".listFields"][] = "prostitucion";
$tdatamined[".listFields"][] = "dep_mun";
$tdatamined[".listFields"][] = "max_matric2016";
$tdatamined[".listFields"][] = "mrf2016";
$tdatamined[".listFields"][] = "pab_af";
$tdatamined[".listFields"][] = "r_h";
$tdatamined[".listFields"][] = "ipce_naive";
$tdatamined[".listFields"][] = "ipce_0_1";
$tdatamined[".listFields"][] = "aÑo";

$tdatamined[".hideMobileList"] = array();


$tdatamined[".viewFields"] = array();
$tdatamined[".viewFields"][] = "idderespuesta";
$tdatamined[".viewFields"][] = "codigo";
$tdatamined[".viewFields"][] = "depto";
$tdatamined[".viewFields"][] = "departamento";
$tdatamined[".viewFields"][] = "mun";
$tdatamined[".viewFields"][] = "municipio";
$tdatamined[".viewFields"][] = "nombre_c_e";
$tdatamined[".viewFields"][] = "x";
$tdatamined[".viewFields"][] = "y";
$tdatamined[".viewFields"][] = "sector_ppd";
$tdatamined[".viewFields"][] = "matricula_inicial";
$tdatamined[".viewFields"][] = "matricula_final";
$tdatamined[".viewFields"][] = "maras";
$tdatamined[".viewFields"][] = "robos";
$tdatamined[".viewFields"][] = "hurtos";
$tdatamined[".viewFields"][] = "drogas";
$tdatamined[".viewFields"][] = "violaciones";
$tdatamined[".viewFields"][] = "pab";
$tdatamined[".viewFields"][] = "paf";
$tdatamined[".viewFields"][] = "escasos_recursos";
$tdatamined[".viewFields"][] = "incorpo_actividades_prod";
$tdatamined[".viewFields"][] = "lejania_ce";
$tdatamined[".viewFields"][] = "violencia_pandilleril";
$tdatamined[".viewFields"][] = "embarazo";
$tdatamined[".viewFields"][] = "acoso";
$tdatamined[".viewFields"][] = "violacion_sexual";
$tdatamined[".viewFields"][] = "cambio_domicilio";
$tdatamined[".viewFields"][] = "migracion";
$tdatamined[".viewFields"][] = "bajo_rendimiento";
$tdatamined[".viewFields"][] = "enfermedad";
$tdatamined[".viewFields"][] = "prostitucion";
$tdatamined[".viewFields"][] = "dep_mun";
$tdatamined[".viewFields"][] = "max_matric2016";
$tdatamined[".viewFields"][] = "mrf2016";
$tdatamined[".viewFields"][] = "pab_af";
$tdatamined[".viewFields"][] = "r_h";
$tdatamined[".viewFields"][] = "ipce_naive";
$tdatamined[".viewFields"][] = "ipce_0_1";
$tdatamined[".viewFields"][] = "aÑo";

$tdatamined[".addFields"] = array();
$tdatamined[".addFields"][] = "idderespuesta";
$tdatamined[".addFields"][] = "codigo";
$tdatamined[".addFields"][] = "depto";
$tdatamined[".addFields"][] = "departamento";
$tdatamined[".addFields"][] = "mun";
$tdatamined[".addFields"][] = "municipio";
$tdatamined[".addFields"][] = "nombre_c_e";
$tdatamined[".addFields"][] = "x";
$tdatamined[".addFields"][] = "y";
$tdatamined[".addFields"][] = "sector_ppd";
$tdatamined[".addFields"][] = "matricula_inicial";
$tdatamined[".addFields"][] = "matricula_final";
$tdatamined[".addFields"][] = "maras";
$tdatamined[".addFields"][] = "robos";
$tdatamined[".addFields"][] = "hurtos";
$tdatamined[".addFields"][] = "drogas";
$tdatamined[".addFields"][] = "violaciones";
$tdatamined[".addFields"][] = "pab";
$tdatamined[".addFields"][] = "paf";
$tdatamined[".addFields"][] = "escasos_recursos";
$tdatamined[".addFields"][] = "incorpo_actividades_prod";
$tdatamined[".addFields"][] = "lejania_ce";
$tdatamined[".addFields"][] = "violencia_pandilleril";
$tdatamined[".addFields"][] = "embarazo";
$tdatamined[".addFields"][] = "acoso";
$tdatamined[".addFields"][] = "violacion_sexual";
$tdatamined[".addFields"][] = "cambio_domicilio";
$tdatamined[".addFields"][] = "migracion";
$tdatamined[".addFields"][] = "bajo_rendimiento";
$tdatamined[".addFields"][] = "enfermedad";
$tdatamined[".addFields"][] = "prostitucion";
$tdatamined[".addFields"][] = "dep_mun";
$tdatamined[".addFields"][] = "max_matric2016";
$tdatamined[".addFields"][] = "mrf2016";
$tdatamined[".addFields"][] = "pab_af";
$tdatamined[".addFields"][] = "r_h";
$tdatamined[".addFields"][] = "ipce_naive";
$tdatamined[".addFields"][] = "ipce_0_1";
$tdatamined[".addFields"][] = "aÑo";

$tdatamined[".masterListFields"] = array();
$tdatamined[".masterListFields"][] = "idderespuesta";
$tdatamined[".masterListFields"][] = "codigo";
$tdatamined[".masterListFields"][] = "depto";
$tdatamined[".masterListFields"][] = "departamento";
$tdatamined[".masterListFields"][] = "mun";
$tdatamined[".masterListFields"][] = "municipio";
$tdatamined[".masterListFields"][] = "nombre_c_e";
$tdatamined[".masterListFields"][] = "x";
$tdatamined[".masterListFields"][] = "y";
$tdatamined[".masterListFields"][] = "sector_ppd";
$tdatamined[".masterListFields"][] = "matricula_inicial";
$tdatamined[".masterListFields"][] = "matricula_final";
$tdatamined[".masterListFields"][] = "maras";
$tdatamined[".masterListFields"][] = "robos";
$tdatamined[".masterListFields"][] = "hurtos";
$tdatamined[".masterListFields"][] = "drogas";
$tdatamined[".masterListFields"][] = "violaciones";
$tdatamined[".masterListFields"][] = "pab";
$tdatamined[".masterListFields"][] = "paf";
$tdatamined[".masterListFields"][] = "escasos_recursos";
$tdatamined[".masterListFields"][] = "incorpo_actividades_prod";
$tdatamined[".masterListFields"][] = "lejania_ce";
$tdatamined[".masterListFields"][] = "violencia_pandilleril";
$tdatamined[".masterListFields"][] = "embarazo";
$tdatamined[".masterListFields"][] = "acoso";
$tdatamined[".masterListFields"][] = "violacion_sexual";
$tdatamined[".masterListFields"][] = "cambio_domicilio";
$tdatamined[".masterListFields"][] = "migracion";
$tdatamined[".masterListFields"][] = "bajo_rendimiento";
$tdatamined[".masterListFields"][] = "enfermedad";
$tdatamined[".masterListFields"][] = "prostitucion";
$tdatamined[".masterListFields"][] = "dep_mun";
$tdatamined[".masterListFields"][] = "max_matric2016";
$tdatamined[".masterListFields"][] = "mrf2016";
$tdatamined[".masterListFields"][] = "pab_af";
$tdatamined[".masterListFields"][] = "r_h";
$tdatamined[".masterListFields"][] = "ipce_naive";
$tdatamined[".masterListFields"][] = "ipce_0_1";
$tdatamined[".masterListFields"][] = "aÑo";

$tdatamined[".inlineAddFields"] = array();
$tdatamined[".inlineAddFields"][] = "idderespuesta";
$tdatamined[".inlineAddFields"][] = "codigo";
$tdatamined[".inlineAddFields"][] = "depto";
$tdatamined[".inlineAddFields"][] = "departamento";
$tdatamined[".inlineAddFields"][] = "mun";
$tdatamined[".inlineAddFields"][] = "municipio";
$tdatamined[".inlineAddFields"][] = "nombre_c_e";
$tdatamined[".inlineAddFields"][] = "x";
$tdatamined[".inlineAddFields"][] = "y";
$tdatamined[".inlineAddFields"][] = "sector_ppd";
$tdatamined[".inlineAddFields"][] = "matricula_inicial";
$tdatamined[".inlineAddFields"][] = "matricula_final";
$tdatamined[".inlineAddFields"][] = "maras";
$tdatamined[".inlineAddFields"][] = "robos";
$tdatamined[".inlineAddFields"][] = "hurtos";
$tdatamined[".inlineAddFields"][] = "drogas";
$tdatamined[".inlineAddFields"][] = "violaciones";
$tdatamined[".inlineAddFields"][] = "pab";
$tdatamined[".inlineAddFields"][] = "paf";
$tdatamined[".inlineAddFields"][] = "escasos_recursos";
$tdatamined[".inlineAddFields"][] = "incorpo_actividades_prod";
$tdatamined[".inlineAddFields"][] = "lejania_ce";
$tdatamined[".inlineAddFields"][] = "violencia_pandilleril";
$tdatamined[".inlineAddFields"][] = "embarazo";
$tdatamined[".inlineAddFields"][] = "acoso";
$tdatamined[".inlineAddFields"][] = "violacion_sexual";
$tdatamined[".inlineAddFields"][] = "cambio_domicilio";
$tdatamined[".inlineAddFields"][] = "migracion";
$tdatamined[".inlineAddFields"][] = "bajo_rendimiento";
$tdatamined[".inlineAddFields"][] = "enfermedad";
$tdatamined[".inlineAddFields"][] = "prostitucion";
$tdatamined[".inlineAddFields"][] = "dep_mun";
$tdatamined[".inlineAddFields"][] = "max_matric2016";
$tdatamined[".inlineAddFields"][] = "mrf2016";
$tdatamined[".inlineAddFields"][] = "pab_af";
$tdatamined[".inlineAddFields"][] = "r_h";
$tdatamined[".inlineAddFields"][] = "ipce_naive";
$tdatamined[".inlineAddFields"][] = "ipce_0_1";
$tdatamined[".inlineAddFields"][] = "aÑo";

$tdatamined[".editFields"] = array();
$tdatamined[".editFields"][] = "idderespuesta";
$tdatamined[".editFields"][] = "codigo";
$tdatamined[".editFields"][] = "depto";
$tdatamined[".editFields"][] = "departamento";
$tdatamined[".editFields"][] = "mun";
$tdatamined[".editFields"][] = "municipio";
$tdatamined[".editFields"][] = "nombre_c_e";
$tdatamined[".editFields"][] = "x";
$tdatamined[".editFields"][] = "y";
$tdatamined[".editFields"][] = "sector_ppd";
$tdatamined[".editFields"][] = "matricula_inicial";
$tdatamined[".editFields"][] = "matricula_final";
$tdatamined[".editFields"][] = "maras";
$tdatamined[".editFields"][] = "robos";
$tdatamined[".editFields"][] = "hurtos";
$tdatamined[".editFields"][] = "drogas";
$tdatamined[".editFields"][] = "violaciones";
$tdatamined[".editFields"][] = "pab";
$tdatamined[".editFields"][] = "paf";
$tdatamined[".editFields"][] = "escasos_recursos";
$tdatamined[".editFields"][] = "incorpo_actividades_prod";
$tdatamined[".editFields"][] = "lejania_ce";
$tdatamined[".editFields"][] = "violencia_pandilleril";
$tdatamined[".editFields"][] = "embarazo";
$tdatamined[".editFields"][] = "acoso";
$tdatamined[".editFields"][] = "violacion_sexual";
$tdatamined[".editFields"][] = "cambio_domicilio";
$tdatamined[".editFields"][] = "migracion";
$tdatamined[".editFields"][] = "bajo_rendimiento";
$tdatamined[".editFields"][] = "enfermedad";
$tdatamined[".editFields"][] = "prostitucion";
$tdatamined[".editFields"][] = "dep_mun";
$tdatamined[".editFields"][] = "max_matric2016";
$tdatamined[".editFields"][] = "mrf2016";
$tdatamined[".editFields"][] = "pab_af";
$tdatamined[".editFields"][] = "r_h";
$tdatamined[".editFields"][] = "ipce_naive";
$tdatamined[".editFields"][] = "ipce_0_1";
$tdatamined[".editFields"][] = "aÑo";

$tdatamined[".inlineEditFields"] = array();
$tdatamined[".inlineEditFields"][] = "idderespuesta";
$tdatamined[".inlineEditFields"][] = "codigo";
$tdatamined[".inlineEditFields"][] = "depto";
$tdatamined[".inlineEditFields"][] = "departamento";
$tdatamined[".inlineEditFields"][] = "mun";
$tdatamined[".inlineEditFields"][] = "municipio";
$tdatamined[".inlineEditFields"][] = "nombre_c_e";
$tdatamined[".inlineEditFields"][] = "x";
$tdatamined[".inlineEditFields"][] = "y";
$tdatamined[".inlineEditFields"][] = "sector_ppd";
$tdatamined[".inlineEditFields"][] = "matricula_inicial";
$tdatamined[".inlineEditFields"][] = "matricula_final";
$tdatamined[".inlineEditFields"][] = "maras";
$tdatamined[".inlineEditFields"][] = "robos";
$tdatamined[".inlineEditFields"][] = "hurtos";
$tdatamined[".inlineEditFields"][] = "drogas";
$tdatamined[".inlineEditFields"][] = "violaciones";
$tdatamined[".inlineEditFields"][] = "pab";
$tdatamined[".inlineEditFields"][] = "paf";
$tdatamined[".inlineEditFields"][] = "escasos_recursos";
$tdatamined[".inlineEditFields"][] = "incorpo_actividades_prod";
$tdatamined[".inlineEditFields"][] = "lejania_ce";
$tdatamined[".inlineEditFields"][] = "violencia_pandilleril";
$tdatamined[".inlineEditFields"][] = "embarazo";
$tdatamined[".inlineEditFields"][] = "acoso";
$tdatamined[".inlineEditFields"][] = "violacion_sexual";
$tdatamined[".inlineEditFields"][] = "cambio_domicilio";
$tdatamined[".inlineEditFields"][] = "migracion";
$tdatamined[".inlineEditFields"][] = "bajo_rendimiento";
$tdatamined[".inlineEditFields"][] = "enfermedad";
$tdatamined[".inlineEditFields"][] = "prostitucion";
$tdatamined[".inlineEditFields"][] = "dep_mun";
$tdatamined[".inlineEditFields"][] = "max_matric2016";
$tdatamined[".inlineEditFields"][] = "mrf2016";
$tdatamined[".inlineEditFields"][] = "pab_af";
$tdatamined[".inlineEditFields"][] = "r_h";
$tdatamined[".inlineEditFields"][] = "ipce_naive";
$tdatamined[".inlineEditFields"][] = "ipce_0_1";
$tdatamined[".inlineEditFields"][] = "aÑo";

$tdatamined[".updateSelectedFields"] = array();
$tdatamined[".updateSelectedFields"][] = "idderespuesta";
$tdatamined[".updateSelectedFields"][] = "codigo";
$tdatamined[".updateSelectedFields"][] = "depto";
$tdatamined[".updateSelectedFields"][] = "departamento";
$tdatamined[".updateSelectedFields"][] = "mun";
$tdatamined[".updateSelectedFields"][] = "municipio";
$tdatamined[".updateSelectedFields"][] = "nombre_c_e";
$tdatamined[".updateSelectedFields"][] = "x";
$tdatamined[".updateSelectedFields"][] = "y";
$tdatamined[".updateSelectedFields"][] = "sector_ppd";
$tdatamined[".updateSelectedFields"][] = "matricula_inicial";
$tdatamined[".updateSelectedFields"][] = "matricula_final";
$tdatamined[".updateSelectedFields"][] = "maras";
$tdatamined[".updateSelectedFields"][] = "robos";
$tdatamined[".updateSelectedFields"][] = "hurtos";
$tdatamined[".updateSelectedFields"][] = "drogas";
$tdatamined[".updateSelectedFields"][] = "violaciones";
$tdatamined[".updateSelectedFields"][] = "pab";
$tdatamined[".updateSelectedFields"][] = "paf";
$tdatamined[".updateSelectedFields"][] = "escasos_recursos";
$tdatamined[".updateSelectedFields"][] = "incorpo_actividades_prod";
$tdatamined[".updateSelectedFields"][] = "lejania_ce";
$tdatamined[".updateSelectedFields"][] = "violencia_pandilleril";
$tdatamined[".updateSelectedFields"][] = "embarazo";
$tdatamined[".updateSelectedFields"][] = "acoso";
$tdatamined[".updateSelectedFields"][] = "violacion_sexual";
$tdatamined[".updateSelectedFields"][] = "cambio_domicilio";
$tdatamined[".updateSelectedFields"][] = "migracion";
$tdatamined[".updateSelectedFields"][] = "bajo_rendimiento";
$tdatamined[".updateSelectedFields"][] = "enfermedad";
$tdatamined[".updateSelectedFields"][] = "prostitucion";
$tdatamined[".updateSelectedFields"][] = "dep_mun";
$tdatamined[".updateSelectedFields"][] = "max_matric2016";
$tdatamined[".updateSelectedFields"][] = "mrf2016";
$tdatamined[".updateSelectedFields"][] = "pab_af";
$tdatamined[".updateSelectedFields"][] = "r_h";
$tdatamined[".updateSelectedFields"][] = "ipce_naive";
$tdatamined[".updateSelectedFields"][] = "ipce_0_1";
$tdatamined[".updateSelectedFields"][] = "aÑo";


$tdatamined[".exportFields"] = array();
$tdatamined[".exportFields"][] = "idderespuesta";
$tdatamined[".exportFields"][] = "codigo";
$tdatamined[".exportFields"][] = "depto";
$tdatamined[".exportFields"][] = "departamento";
$tdatamined[".exportFields"][] = "mun";
$tdatamined[".exportFields"][] = "municipio";
$tdatamined[".exportFields"][] = "nombre_c_e";
$tdatamined[".exportFields"][] = "x";
$tdatamined[".exportFields"][] = "y";
$tdatamined[".exportFields"][] = "sector_ppd";
$tdatamined[".exportFields"][] = "matricula_inicial";
$tdatamined[".exportFields"][] = "matricula_final";
$tdatamined[".exportFields"][] = "maras";
$tdatamined[".exportFields"][] = "robos";
$tdatamined[".exportFields"][] = "hurtos";
$tdatamined[".exportFields"][] = "drogas";
$tdatamined[".exportFields"][] = "violaciones";
$tdatamined[".exportFields"][] = "pab";
$tdatamined[".exportFields"][] = "paf";
$tdatamined[".exportFields"][] = "escasos_recursos";
$tdatamined[".exportFields"][] = "incorpo_actividades_prod";
$tdatamined[".exportFields"][] = "lejania_ce";
$tdatamined[".exportFields"][] = "violencia_pandilleril";
$tdatamined[".exportFields"][] = "embarazo";
$tdatamined[".exportFields"][] = "acoso";
$tdatamined[".exportFields"][] = "violacion_sexual";
$tdatamined[".exportFields"][] = "cambio_domicilio";
$tdatamined[".exportFields"][] = "migracion";
$tdatamined[".exportFields"][] = "bajo_rendimiento";
$tdatamined[".exportFields"][] = "enfermedad";
$tdatamined[".exportFields"][] = "prostitucion";
$tdatamined[".exportFields"][] = "dep_mun";
$tdatamined[".exportFields"][] = "max_matric2016";
$tdatamined[".exportFields"][] = "mrf2016";
$tdatamined[".exportFields"][] = "pab_af";
$tdatamined[".exportFields"][] = "r_h";
$tdatamined[".exportFields"][] = "ipce_naive";
$tdatamined[".exportFields"][] = "ipce_0_1";
$tdatamined[".exportFields"][] = "aÑo";

$tdatamined[".importFields"] = array();
$tdatamined[".importFields"][] = "idderespuesta";
$tdatamined[".importFields"][] = "codigo";
$tdatamined[".importFields"][] = "depto";
$tdatamined[".importFields"][] = "departamento";
$tdatamined[".importFields"][] = "mun";
$tdatamined[".importFields"][] = "municipio";
$tdatamined[".importFields"][] = "nombre_c_e";
$tdatamined[".importFields"][] = "x";
$tdatamined[".importFields"][] = "y";
$tdatamined[".importFields"][] = "sector_ppd";
$tdatamined[".importFields"][] = "matricula_inicial";
$tdatamined[".importFields"][] = "matricula_final";
$tdatamined[".importFields"][] = "maras";
$tdatamined[".importFields"][] = "robos";
$tdatamined[".importFields"][] = "hurtos";
$tdatamined[".importFields"][] = "drogas";
$tdatamined[".importFields"][] = "violaciones";
$tdatamined[".importFields"][] = "pab";
$tdatamined[".importFields"][] = "paf";
$tdatamined[".importFields"][] = "escasos_recursos";
$tdatamined[".importFields"][] = "incorpo_actividades_prod";
$tdatamined[".importFields"][] = "lejania_ce";
$tdatamined[".importFields"][] = "violencia_pandilleril";
$tdatamined[".importFields"][] = "embarazo";
$tdatamined[".importFields"][] = "acoso";
$tdatamined[".importFields"][] = "violacion_sexual";
$tdatamined[".importFields"][] = "cambio_domicilio";
$tdatamined[".importFields"][] = "migracion";
$tdatamined[".importFields"][] = "bajo_rendimiento";
$tdatamined[".importFields"][] = "enfermedad";
$tdatamined[".importFields"][] = "prostitucion";
$tdatamined[".importFields"][] = "dep_mun";
$tdatamined[".importFields"][] = "max_matric2016";
$tdatamined[".importFields"][] = "mrf2016";
$tdatamined[".importFields"][] = "pab_af";
$tdatamined[".importFields"][] = "r_h";
$tdatamined[".importFields"][] = "ipce_naive";
$tdatamined[".importFields"][] = "ipce_0_1";
$tdatamined[".importFields"][] = "aÑo";

$tdatamined[".printFields"] = array();
$tdatamined[".printFields"][] = "idderespuesta";
$tdatamined[".printFields"][] = "codigo";
$tdatamined[".printFields"][] = "depto";
$tdatamined[".printFields"][] = "departamento";
$tdatamined[".printFields"][] = "mun";
$tdatamined[".printFields"][] = "municipio";
$tdatamined[".printFields"][] = "nombre_c_e";
$tdatamined[".printFields"][] = "x";
$tdatamined[".printFields"][] = "y";
$tdatamined[".printFields"][] = "sector_ppd";
$tdatamined[".printFields"][] = "matricula_inicial";
$tdatamined[".printFields"][] = "matricula_final";
$tdatamined[".printFields"][] = "maras";
$tdatamined[".printFields"][] = "robos";
$tdatamined[".printFields"][] = "hurtos";
$tdatamined[".printFields"][] = "drogas";
$tdatamined[".printFields"][] = "violaciones";
$tdatamined[".printFields"][] = "pab";
$tdatamined[".printFields"][] = "paf";
$tdatamined[".printFields"][] = "escasos_recursos";
$tdatamined[".printFields"][] = "incorpo_actividades_prod";
$tdatamined[".printFields"][] = "lejania_ce";
$tdatamined[".printFields"][] = "violencia_pandilleril";
$tdatamined[".printFields"][] = "embarazo";
$tdatamined[".printFields"][] = "acoso";
$tdatamined[".printFields"][] = "violacion_sexual";
$tdatamined[".printFields"][] = "cambio_domicilio";
$tdatamined[".printFields"][] = "migracion";
$tdatamined[".printFields"][] = "bajo_rendimiento";
$tdatamined[".printFields"][] = "enfermedad";
$tdatamined[".printFields"][] = "prostitucion";
$tdatamined[".printFields"][] = "dep_mun";
$tdatamined[".printFields"][] = "max_matric2016";
$tdatamined[".printFields"][] = "mrf2016";
$tdatamined[".printFields"][] = "pab_af";
$tdatamined[".printFields"][] = "r_h";
$tdatamined[".printFields"][] = "ipce_naive";
$tdatamined[".printFields"][] = "ipce_0_1";
$tdatamined[".printFields"][] = "aÑo";

//	idderespuesta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idderespuesta";
	$fdata["GoodName"] = "idderespuesta";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","idderespuesta");
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




	$tdatamined["idderespuesta"] = $fdata;
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","codigo");
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




	$tdatamined["codigo"] = $fdata;
//	depto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "depto";
	$fdata["GoodName"] = "depto";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","depto");
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




	$tdatamined["depto"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","departamento");
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




	$tdatamined["departamento"] = $fdata;
//	mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mun";
	$fdata["GoodName"] = "mun";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","mun");
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




	$tdatamined["mun"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","municipio");
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




	$tdatamined["municipio"] = $fdata;
//	nombre_c_e
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nombre_c_e";
	$fdata["GoodName"] = "nombre_c_e";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","nombre_c_e");
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




	$tdatamined["nombre_c_e"] = $fdata;
//	x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "x";
	$fdata["GoodName"] = "x";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","x");
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




	$tdatamined["x"] = $fdata;
//	y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "y";
	$fdata["GoodName"] = "y";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","y");
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




	$tdatamined["y"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","sector_ppd");
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




	$tdatamined["sector_ppd"] = $fdata;
//	matricula_inicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "matricula_inicial";
	$fdata["GoodName"] = "matricula_inicial";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","matricula_inicial");
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




	$tdatamined["matricula_inicial"] = $fdata;
//	matricula_final
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "matricula_final";
	$fdata["GoodName"] = "matricula_final";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","matricula_final");
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




	$tdatamined["matricula_final"] = $fdata;
//	maras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "maras";
	$fdata["GoodName"] = "maras";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","maras");
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




	$tdatamined["maras"] = $fdata;
//	robos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "robos";
	$fdata["GoodName"] = "robos";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","robos");
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




	$tdatamined["robos"] = $fdata;
//	hurtos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "hurtos";
	$fdata["GoodName"] = "hurtos";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","hurtos");
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




	$tdatamined["hurtos"] = $fdata;
//	drogas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "drogas";
	$fdata["GoodName"] = "drogas";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","drogas");
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




	$tdatamined["drogas"] = $fdata;
//	violaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "violaciones";
	$fdata["GoodName"] = "violaciones";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","violaciones");
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




	$tdatamined["violaciones"] = $fdata;
//	pab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "pab";
	$fdata["GoodName"] = "pab";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","pab");
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




	$tdatamined["pab"] = $fdata;
//	paf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "paf";
	$fdata["GoodName"] = "paf";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","paf");
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




	$tdatamined["paf"] = $fdata;
//	escasos_recursos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "escasos_recursos";
	$fdata["GoodName"] = "escasos_recursos";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","escasos_recursos");
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




	$tdatamined["escasos_recursos"] = $fdata;
//	incorpo_actividades_prod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "incorpo_actividades_prod";
	$fdata["GoodName"] = "incorpo_actividades_prod";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","incorpo_actividades_prod");
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




	$tdatamined["incorpo_actividades_prod"] = $fdata;
//	lejania_ce
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "lejania_ce";
	$fdata["GoodName"] = "lejania_ce";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","lejania_ce");
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




	$tdatamined["lejania_ce"] = $fdata;
//	violencia_pandilleril
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "violencia_pandilleril";
	$fdata["GoodName"] = "violencia_pandilleril";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","violencia_pandilleril");
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




	$tdatamined["violencia_pandilleril"] = $fdata;
//	embarazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "embarazo";
	$fdata["GoodName"] = "embarazo";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","embarazo");
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




	$tdatamined["embarazo"] = $fdata;
//	acoso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "acoso";
	$fdata["GoodName"] = "acoso";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","acoso");
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




	$tdatamined["acoso"] = $fdata;
//	violacion_sexual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "violacion_sexual";
	$fdata["GoodName"] = "violacion_sexual";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","violacion_sexual");
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




	$tdatamined["violacion_sexual"] = $fdata;
//	cambio_domicilio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "cambio_domicilio";
	$fdata["GoodName"] = "cambio_domicilio";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","cambio_domicilio");
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




	$tdatamined["cambio_domicilio"] = $fdata;
//	migracion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "migracion";
	$fdata["GoodName"] = "migracion";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","migracion");
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




	$tdatamined["migracion"] = $fdata;
//	bajo_rendimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "bajo_rendimiento";
	$fdata["GoodName"] = "bajo_rendimiento";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","bajo_rendimiento");
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




	$tdatamined["bajo_rendimiento"] = $fdata;
//	enfermedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "enfermedad";
	$fdata["GoodName"] = "enfermedad";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","enfermedad");
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




	$tdatamined["enfermedad"] = $fdata;
//	prostitucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "prostitucion";
	$fdata["GoodName"] = "prostitucion";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","prostitucion");
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




	$tdatamined["prostitucion"] = $fdata;
//	dep_mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "dep_mun";
	$fdata["GoodName"] = "dep_mun";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","dep_mun");
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




	$tdatamined["dep_mun"] = $fdata;
//	max_matric2016
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "max_matric2016";
	$fdata["GoodName"] = "max_matric2016";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","max_matric2016");
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




	$tdatamined["max_matric2016"] = $fdata;
//	mrf2016
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "mrf2016";
	$fdata["GoodName"] = "mrf2016";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","mrf2016");
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




	$tdatamined["mrf2016"] = $fdata;
//	pab_af
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "pab_af";
	$fdata["GoodName"] = "pab_af";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","pab_af");
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




	$tdatamined["pab_af"] = $fdata;
//	r_h
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "r_h";
	$fdata["GoodName"] = "r_h";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","r_h");
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




	$tdatamined["r_h"] = $fdata;
//	ipce_naive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "ipce_naive";
	$fdata["GoodName"] = "ipce_naive";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","ipce_naive");
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




	$tdatamined["ipce_naive"] = $fdata;
//	ipce_0_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "ipce_0_1";
	$fdata["GoodName"] = "ipce_0_1";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","ipce_0_1");
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




	$tdatamined["ipce_0_1"] = $fdata;
//	aÑo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "aÑo";
	$fdata["GoodName"] = "a_o";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined","a_o");
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




	$tdatamined["aÑo"] = $fdata;


$tables_data["mined"]=&$tdatamined;
$field_labels["mined"] = &$fieldLabelsmined;
$fieldToolTips["mined"] = &$fieldToolTipsmined;
$placeHolders["mined"] = &$placeHoldersmined;
$page_titles["mined"] = &$pageTitlesmined;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mined"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mined"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mined()
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
	"m_srcTableName" => "mined"
));

$proto6["m_sql"] = "idderespuesta";
$proto6["m_srcTableName"] = "mined";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto8["m_sql"] = "codigo";
$proto8["m_srcTableName"] = "mined";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "depto",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto10["m_sql"] = "depto";
$proto10["m_srcTableName"] = "mined";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto12["m_sql"] = "departamento";
$proto12["m_srcTableName"] = "mined";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "mun",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto14["m_sql"] = "mun";
$proto14["m_srcTableName"] = "mined";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto16["m_sql"] = "municipio";
$proto16["m_srcTableName"] = "mined";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_c_e",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto18["m_sql"] = "nombre_c_e";
$proto18["m_srcTableName"] = "mined";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "x",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto20["m_sql"] = "x";
$proto20["m_srcTableName"] = "mined";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "y",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto22["m_sql"] = "y";
$proto22["m_srcTableName"] = "mined";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto24["m_sql"] = "sector_ppd";
$proto24["m_srcTableName"] = "mined";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "matricula_inicial",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto26["m_sql"] = "matricula_inicial";
$proto26["m_srcTableName"] = "mined";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "matricula_final",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto28["m_sql"] = "matricula_final";
$proto28["m_srcTableName"] = "mined";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "maras",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto30["m_sql"] = "maras";
$proto30["m_srcTableName"] = "mined";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "robos",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto32["m_sql"] = "robos";
$proto32["m_srcTableName"] = "mined";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "hurtos",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto34["m_sql"] = "hurtos";
$proto34["m_srcTableName"] = "mined";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "drogas",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto36["m_sql"] = "drogas";
$proto36["m_srcTableName"] = "mined";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "violaciones",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto38["m_sql"] = "violaciones";
$proto38["m_srcTableName"] = "mined";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "pab",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto40["m_sql"] = "pab";
$proto40["m_srcTableName"] = "mined";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "paf",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto42["m_sql"] = "paf";
$proto42["m_srcTableName"] = "mined";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "escasos_recursos",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto44["m_sql"] = "escasos_recursos";
$proto44["m_srcTableName"] = "mined";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "incorpo_actividades_prod",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto46["m_sql"] = "incorpo_actividades_prod";
$proto46["m_srcTableName"] = "mined";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "lejania_ce",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto48["m_sql"] = "lejania_ce";
$proto48["m_srcTableName"] = "mined";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "violencia_pandilleril",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto50["m_sql"] = "violencia_pandilleril";
$proto50["m_srcTableName"] = "mined";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "embarazo",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto52["m_sql"] = "embarazo";
$proto52["m_srcTableName"] = "mined";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "acoso",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto54["m_sql"] = "acoso";
$proto54["m_srcTableName"] = "mined";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "violacion_sexual",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto56["m_sql"] = "violacion_sexual";
$proto56["m_srcTableName"] = "mined";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "cambio_domicilio",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto58["m_sql"] = "cambio_domicilio";
$proto58["m_srcTableName"] = "mined";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "migracion",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto60["m_sql"] = "migracion";
$proto60["m_srcTableName"] = "mined";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "bajo_rendimiento",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto62["m_sql"] = "bajo_rendimiento";
$proto62["m_srcTableName"] = "mined";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "enfermedad",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto64["m_sql"] = "enfermedad";
$proto64["m_srcTableName"] = "mined";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "prostitucion",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto66["m_sql"] = "prostitucion";
$proto66["m_srcTableName"] = "mined";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "dep_mun",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto68["m_sql"] = "dep_mun";
$proto68["m_srcTableName"] = "mined";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "max_matric2016",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto70["m_sql"] = "max_matric2016";
$proto70["m_srcTableName"] = "mined";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "mrf2016",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto72["m_sql"] = "mrf2016";
$proto72["m_srcTableName"] = "mined";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "pab_af",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto74["m_sql"] = "pab_af";
$proto74["m_srcTableName"] = "mined";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "r_h",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto76["m_sql"] = "r_h";
$proto76["m_srcTableName"] = "mined";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "ipce_naive",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto78["m_sql"] = "ipce_naive";
$proto78["m_srcTableName"] = "mined";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "ipce_0_1",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto80["m_sql"] = "ipce_0_1";
$proto80["m_srcTableName"] = "mined";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined"
));

$proto82["m_sql"] = "`aÑo`";
$proto82["m_srcTableName"] = "mined";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto84=array();
$proto84["m_link"] = "SQLL_MAIN";
			$proto85=array();
$proto85["m_strName"] = "mined";
$proto85["m_srcTableName"] = "mined";
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
$proto84["m_srcTableName"] = "mined";
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
$proto0["m_srcTableName"]="mined";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mined = createSqlQuery_mined();


	
		;

																																							

$tdatamined[".sqlquery"] = $queryData_mined;

$tableEvents["mined"] = new eventsBase;
$tdatamined[".hasEvents"] = false;

?>