<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTodos_los_datos_PPL = array();
	$tdataTodos_los_datos_PPL[".truncateText"] = true;
	$tdataTodos_los_datos_PPL[".NumberOfChars"] = 80;
	$tdataTodos_los_datos_PPL[".ShortName"] = "Todos_los_datos_PPL";
	$tdataTodos_los_datos_PPL[".OwnerID"] = "";
	$tdataTodos_los_datos_PPL[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsTodos_los_datos_PPL = array();
$fieldToolTipsTodos_los_datos_PPL = array();
$pageTitlesTodos_los_datos_PPL = array();
$placeHoldersTodos_los_datos_PPL = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsTodos_los_datos_PPL["Spanish"] = array();
	$fieldToolTipsTodos_los_datos_PPL["Spanish"] = array();
	$placeHoldersTodos_los_datos_PPL["Spanish"] = array();
	$pageTitlesTodos_los_datos_PPL["Spanish"] = array();
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["delitos"] = "Delitos";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["delitos"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["delitos"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["delitoanalisis"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["delitoanalisis"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["org_delictiva"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["org_delictiva"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["tipo_mara"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["tipo_mara"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["mun_resid"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["mun_resid"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["id"] = "Id";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["id"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["id"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["sipe"] = "Sipe";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["sipe"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["sipe"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["afis"] = "Afis";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["afis"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["afis"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["edad"] = "Edad";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["edad"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["edad"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["rangoetario"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["rangoetario"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["genero"] = "Genero";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["genero"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["genero"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["fecha_nac"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["fecha_nac"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["edad1"] = "Edad1";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["edad1"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["edad1"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["dui"] = "Dui";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["dui"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["dui"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["nivel_edu"] = "Nivel Edu";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["nivel_edu"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["nivel_edu"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["educacionanalisis"] = "Educacionanalisis";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["educacionanalisis"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["educacionanalisis"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["profesion_oficio"] = "Profesion Oficio";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["profesion_oficio"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["profesion_oficio"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["estado_civil"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["estado_civil"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["ciudadania"] = "Ciudadania";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["ciudadania"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["ciudadania"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["mun_nacimiento"] = "Mun Nacimiento";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["mun_nacimiento"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["mun_nacimiento"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["depto_nacim"] = "Depto Nacim";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["depto_nacim"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["depto_nacim"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["direccion"] = "Direccion";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["direccion"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["direccion"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["depart_resid"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["depart_resid"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["delitosanalisis"] = "Delitosanalisis";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["delitosanalisis"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["delitosanalisis"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["sj_interno"] = "Sj Interno";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["sj_interno"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["sj_interno"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["fase"] = "Fase";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["fase"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["fase"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["reincidente"] = "Reincidente";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["reincidente"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["reincidente"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["deportado"] = "Deportado";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["deportado"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["deportado"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["direccion1"] = "Direccion1";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["direccion1"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["direccion1"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["sector"] = "Sector";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["sector"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["sector"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["celda"] = "Celda";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["celda"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["celda"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["fecha_ing__sp"] = "Fecha Ing  Sp";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["fecha_ing__sp"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["fecha_ing__sp"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["libro"] = "Libro";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["libro"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["libro"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["fecha_ing__cp"] = "Fecha Ing  Cp";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["fecha_ing__cp"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["fecha_ing__cp"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["total_delitos"] = "Total Delitos";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["total_delitos"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["total_delitos"] = "";
	$fieldLabelsTodos_los_datos_PPL["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsTodos_los_datos_PPL["Spanish"]["sector_ppd"] = "";
	$placeHoldersTodos_los_datos_PPL["Spanish"]["sector_ppd"] = "";
	if (count($fieldToolTipsTodos_los_datos_PPL["Spanish"]))
		$tdataTodos_los_datos_PPL[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTodos_los_datos_PPL["English"] = array();
	$fieldToolTipsTodos_los_datos_PPL["English"] = array();
	$placeHoldersTodos_los_datos_PPL["English"] = array();
	$pageTitlesTodos_los_datos_PPL["English"] = array();
	$fieldLabelsTodos_los_datos_PPL["English"]["delitos"] = "Delitos";
	$fieldToolTipsTodos_los_datos_PPL["English"]["delitos"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["delitos"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipsTodos_los_datos_PPL["English"]["delitoanalisis"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["delitoanalisis"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipsTodos_los_datos_PPL["English"]["org_delictiva"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["org_delictiva"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsTodos_los_datos_PPL["English"]["tipo_mara"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["tipo_mara"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsTodos_los_datos_PPL["English"]["mun_resid"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["mun_resid"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["id"] = "Id";
	$fieldToolTipsTodos_los_datos_PPL["English"]["id"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["id"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["sipe"] = "Sipe";
	$fieldToolTipsTodos_los_datos_PPL["English"]["sipe"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["sipe"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["afis"] = "Afis";
	$fieldToolTipsTodos_los_datos_PPL["English"]["afis"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["afis"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["edad"] = "Edad";
	$fieldToolTipsTodos_los_datos_PPL["English"]["edad"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["edad"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsTodos_los_datos_PPL["English"]["rangoetario"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["rangoetario"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["genero"] = "Genero";
	$fieldToolTipsTodos_los_datos_PPL["English"]["genero"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["genero"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipsTodos_los_datos_PPL["English"]["fecha_nac"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["fecha_nac"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["edad1"] = "Edad1";
	$fieldToolTipsTodos_los_datos_PPL["English"]["edad1"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["edad1"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["dui"] = "Dui";
	$fieldToolTipsTodos_los_datos_PPL["English"]["dui"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["dui"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["nivel_edu"] = "Nivel Edu";
	$fieldToolTipsTodos_los_datos_PPL["English"]["nivel_edu"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["nivel_edu"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["educacionanalisis"] = "Educacionanalisis";
	$fieldToolTipsTodos_los_datos_PPL["English"]["educacionanalisis"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["educacionanalisis"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["profesion_oficio"] = "Profesion Oficio";
	$fieldToolTipsTodos_los_datos_PPL["English"]["profesion_oficio"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["profesion_oficio"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsTodos_los_datos_PPL["English"]["estado_civil"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["estado_civil"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["ciudadania"] = "Ciudadania";
	$fieldToolTipsTodos_los_datos_PPL["English"]["ciudadania"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["ciudadania"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["mun_nacimiento"] = "Mun Nacimiento";
	$fieldToolTipsTodos_los_datos_PPL["English"]["mun_nacimiento"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["mun_nacimiento"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["depto_nacim"] = "Depto Nacim";
	$fieldToolTipsTodos_los_datos_PPL["English"]["depto_nacim"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["depto_nacim"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["direccion"] = "Direccion";
	$fieldToolTipsTodos_los_datos_PPL["English"]["direccion"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["direccion"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsTodos_los_datos_PPL["English"]["depart_resid"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["depart_resid"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["delitosanalisis"] = "Delitosanalisis";
	$fieldToolTipsTodos_los_datos_PPL["English"]["delitosanalisis"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["delitosanalisis"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["sj_interno"] = "Sj Interno";
	$fieldToolTipsTodos_los_datos_PPL["English"]["sj_interno"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["sj_interno"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["fase"] = "Fase";
	$fieldToolTipsTodos_los_datos_PPL["English"]["fase"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["fase"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["reincidente"] = "Reincidente";
	$fieldToolTipsTodos_los_datos_PPL["English"]["reincidente"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["reincidente"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["deportado"] = "Deportado";
	$fieldToolTipsTodos_los_datos_PPL["English"]["deportado"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["deportado"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["direccion1"] = "Direccion1";
	$fieldToolTipsTodos_los_datos_PPL["English"]["direccion1"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["direccion1"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["sector"] = "Sector";
	$fieldToolTipsTodos_los_datos_PPL["English"]["sector"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["sector"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["celda"] = "Celda";
	$fieldToolTipsTodos_los_datos_PPL["English"]["celda"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["celda"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["fecha_ing__sp"] = "Fecha Ing  Sp";
	$fieldToolTipsTodos_los_datos_PPL["English"]["fecha_ing__sp"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["fecha_ing__sp"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["libro"] = "Libro";
	$fieldToolTipsTodos_los_datos_PPL["English"]["libro"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["libro"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["fecha_ing__cp"] = "Fecha Ing  Cp";
	$fieldToolTipsTodos_los_datos_PPL["English"]["fecha_ing__cp"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["fecha_ing__cp"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["total_delitos"] = "Total Delitos";
	$fieldToolTipsTodos_los_datos_PPL["English"]["total_delitos"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["total_delitos"] = "";
	$fieldLabelsTodos_los_datos_PPL["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsTodos_los_datos_PPL["English"]["sector_ppd"] = "";
	$placeHoldersTodos_los_datos_PPL["English"]["sector_ppd"] = "";
	if (count($fieldToolTipsTodos_los_datos_PPL["English"]))
		$tdataTodos_los_datos_PPL[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTodos_los_datos_PPL[""] = array();
	$fieldToolTipsTodos_los_datos_PPL[""] = array();
	$placeHoldersTodos_los_datos_PPL[""] = array();
	$pageTitlesTodos_los_datos_PPL[""] = array();
	if (count($fieldToolTipsTodos_los_datos_PPL[""]))
		$tdataTodos_los_datos_PPL[".isUseToolTips"] = true;
}





$tdataTodos_los_datos_PPL[".shortTableName"] = "Todos_los_datos_PPL";
$tdataTodos_los_datos_PPL[".nSecOptions"] = 0;
$tdataTodos_los_datos_PPL[".recsPerRowPrint"] = 1;
$tdataTodos_los_datos_PPL[".mainTableOwnerID"] = "";
$tdataTodos_los_datos_PPL[".moveNext"] = 1;
$tdataTodos_los_datos_PPL[".entityType"] = 1;

$tdataTodos_los_datos_PPL[".strOriginalTableName"] = "carcel";

	



$tdataTodos_los_datos_PPL[".showAddInPopup"] = false;

$tdataTodos_los_datos_PPL[".showEditInPopup"] = false;

$tdataTodos_los_datos_PPL[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTodos_los_datos_PPL[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTodos_los_datos_PPL[".fieldsForRegister"] = array();

	$tdataTodos_los_datos_PPL[".listAjax"] = true;

	$tdataTodos_los_datos_PPL[".audit"] = false;

	$tdataTodos_los_datos_PPL[".locking"] = false;



$tdataTodos_los_datos_PPL[".list"] = true;



$tdataTodos_los_datos_PPL[".reorderRecordsByHeader"] = true;
$tdataTodos_los_datos_PPL[".createSortByDropdown"] = true;
$tdataTodos_los_datos_PPL[".strSortControlSettingsJSON"] = "";




$tdataTodos_los_datos_PPL[".import"] = true;

$tdataTodos_los_datos_PPL[".exportTo"] = true;

$tdataTodos_los_datos_PPL[".printFriendly"] = true;


$tdataTodos_los_datos_PPL[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataTodos_los_datos_PPL[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataTodos_los_datos_PPL[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataTodos_los_datos_PPL[".searchSaving"] = false;
//

$tdataTodos_los_datos_PPL[".showSearchPanel"] = true;
		$tdataTodos_los_datos_PPL[".flexibleSearch"] = true;

$tdataTodos_los_datos_PPL[".isUseAjaxSuggest"] = true;

$tdataTodos_los_datos_PPL[".rowHighlite"] = true;





$tdataTodos_los_datos_PPL[".ajaxCodeSnippetAdded"] = false;

$tdataTodos_los_datos_PPL[".buttonsAdded"] = false;

$tdataTodos_los_datos_PPL[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTodos_los_datos_PPL[".isUseTimeForSearch"] = false;





$tdataTodos_los_datos_PPL[".allSearchFields"] = array();
$tdataTodos_los_datos_PPL[".filterFields"] = array();
$tdataTodos_los_datos_PPL[".requiredSearchFields"] = array();

$tdataTodos_los_datos_PPL[".allSearchFields"][] = "id";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "sipe";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "afis";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "edad";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "rangoetario";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "genero";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "fecha_nac";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "edad1";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "dui";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "nivel_edu";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "educacionanalisis";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "profesion_oficio";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "estado_civil";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "ciudadania";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "mun_nacimiento";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "depto_nacim";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "direccion";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "mun_resid";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "depart_resid";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "delitosanalisis";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "sj_interno";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "fase";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "org_delictiva";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "tipo_mara";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "reincidente";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "deportado";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "direccion1";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "sector";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "celda";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "fecha_ing__sp";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "libro";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "fecha_ing__cp";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "total_delitos";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "delitos";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "delitoanalisis";
	$tdataTodos_los_datos_PPL[".allSearchFields"][] = "sector_ppd";
	

$tdataTodos_los_datos_PPL[".googleLikeFields"] = array();
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "id";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "sipe";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "afis";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "edad";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "rangoetario";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "genero";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "fecha_nac";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "edad1";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "dui";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "nivel_edu";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "educacionanalisis";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "profesion_oficio";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "estado_civil";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "ciudadania";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "mun_nacimiento";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "depto_nacim";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "direccion";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "mun_resid";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "depart_resid";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "delitosanalisis";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "sj_interno";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "fase";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "org_delictiva";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "tipo_mara";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "reincidente";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "deportado";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "direccion1";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "sector";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "celda";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "fecha_ing__sp";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "libro";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "fecha_ing__cp";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "total_delitos";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "delitos";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "delitoanalisis";
$tdataTodos_los_datos_PPL[".googleLikeFields"][] = "sector_ppd";


$tdataTodos_los_datos_PPL[".advSearchFields"] = array();
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "id";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "sipe";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "afis";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "edad";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "rangoetario";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "genero";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "fecha_nac";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "edad1";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "dui";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "nivel_edu";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "educacionanalisis";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "profesion_oficio";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "estado_civil";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "ciudadania";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "mun_nacimiento";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "depto_nacim";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "direccion";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "mun_resid";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "depart_resid";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "delitosanalisis";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "sj_interno";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "fase";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "org_delictiva";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "tipo_mara";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "reincidente";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "deportado";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "direccion1";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "sector";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "celda";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "fecha_ing__sp";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "libro";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "fecha_ing__cp";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "total_delitos";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "delitos";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "delitoanalisis";
$tdataTodos_los_datos_PPL[".advSearchFields"][] = "sector_ppd";

$tdataTodos_los_datos_PPL[".tableType"] = "list";

$tdataTodos_los_datos_PPL[".printerPageOrientation"] = 0;
$tdataTodos_los_datos_PPL[".nPrinterPageScale"] = 100;

$tdataTodos_los_datos_PPL[".nPrinterSplitRecords"] = 40;

$tdataTodos_los_datos_PPL[".nPrinterPDFSplitRecords"] = 40;



$tdataTodos_los_datos_PPL[".geocodingEnabled"] = false;





$tdataTodos_los_datos_PPL[".listGridLayout"] = 3;

$tdataTodos_los_datos_PPL[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdataTodos_los_datos_PPL[".pageSize"] = 10;

$tdataTodos_los_datos_PPL[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTodos_los_datos_PPL[".strOrderBy"] = $tstrOrderBy;

$tdataTodos_los_datos_PPL[".orderindexes"] = array();

$tdataTodos_los_datos_PPL[".sqlHead"] = "SELECT id,  	sipe,  	afis,  	edad,  	rangoetario,  	genero,  	fecha_nac,  	edad1,  	dui,  	nivel_edu,  	educacionanalisis,  	profesion_oficio,  	estado_civil,  	ciudadania,  	mun_nacimiento,  	depto_nacim,  	direccion,  	mun_resid,  	depart_resid,  	delitosanalisis,  	sj_interno,  	fase,  	org_delictiva,  	tipo_mara,  	reincidente,  	deportado,  	direccion1,  	sector,  	celda,  	fecha_ing__sp,  	libro,  	fecha_ing__cp,  	total_delitos,  	delitos,  	delitoanalisis,  	sector_ppd";
$tdataTodos_los_datos_PPL[".sqlFrom"] = "FROM carcel";
$tdataTodos_los_datos_PPL[".sqlWhereExpr"] = "";
$tdataTodos_los_datos_PPL[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTodos_los_datos_PPL[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTodos_los_datos_PPL[".arrGroupsPerPage"] = $arrGPP;

$tdataTodos_los_datos_PPL[".highlightSearchResults"] = true;

$tableKeysTodos_los_datos_PPL = array();
$tdataTodos_los_datos_PPL[".Keys"] = $tableKeysTodos_los_datos_PPL;

$tdataTodos_los_datos_PPL[".listFields"] = array();
$tdataTodos_los_datos_PPL[".listFields"][] = "id";
$tdataTodos_los_datos_PPL[".listFields"][] = "sipe";
$tdataTodos_los_datos_PPL[".listFields"][] = "afis";
$tdataTodos_los_datos_PPL[".listFields"][] = "edad";
$tdataTodos_los_datos_PPL[".listFields"][] = "rangoetario";
$tdataTodos_los_datos_PPL[".listFields"][] = "genero";
$tdataTodos_los_datos_PPL[".listFields"][] = "fecha_nac";
$tdataTodos_los_datos_PPL[".listFields"][] = "edad1";
$tdataTodos_los_datos_PPL[".listFields"][] = "dui";
$tdataTodos_los_datos_PPL[".listFields"][] = "nivel_edu";
$tdataTodos_los_datos_PPL[".listFields"][] = "educacionanalisis";
$tdataTodos_los_datos_PPL[".listFields"][] = "profesion_oficio";
$tdataTodos_los_datos_PPL[".listFields"][] = "estado_civil";
$tdataTodos_los_datos_PPL[".listFields"][] = "ciudadania";
$tdataTodos_los_datos_PPL[".listFields"][] = "mun_nacimiento";
$tdataTodos_los_datos_PPL[".listFields"][] = "depto_nacim";
$tdataTodos_los_datos_PPL[".listFields"][] = "direccion";
$tdataTodos_los_datos_PPL[".listFields"][] = "depart_resid";
$tdataTodos_los_datos_PPL[".listFields"][] = "delitosanalisis";
$tdataTodos_los_datos_PPL[".listFields"][] = "sj_interno";
$tdataTodos_los_datos_PPL[".listFields"][] = "fase";
$tdataTodos_los_datos_PPL[".listFields"][] = "reincidente";
$tdataTodos_los_datos_PPL[".listFields"][] = "deportado";
$tdataTodos_los_datos_PPL[".listFields"][] = "direccion1";
$tdataTodos_los_datos_PPL[".listFields"][] = "sector";
$tdataTodos_los_datos_PPL[".listFields"][] = "celda";
$tdataTodos_los_datos_PPL[".listFields"][] = "fecha_ing__sp";
$tdataTodos_los_datos_PPL[".listFields"][] = "libro";
$tdataTodos_los_datos_PPL[".listFields"][] = "fecha_ing__cp";
$tdataTodos_los_datos_PPL[".listFields"][] = "total_delitos";
$tdataTodos_los_datos_PPL[".listFields"][] = "delitos";
$tdataTodos_los_datos_PPL[".listFields"][] = "delitoanalisis";
$tdataTodos_los_datos_PPL[".listFields"][] = "org_delictiva";
$tdataTodos_los_datos_PPL[".listFields"][] = "tipo_mara";
$tdataTodos_los_datos_PPL[".listFields"][] = "mun_resid";
$tdataTodos_los_datos_PPL[".listFields"][] = "sector_ppd";

$tdataTodos_los_datos_PPL[".hideMobileList"] = array();


$tdataTodos_los_datos_PPL[".viewFields"] = array();
$tdataTodos_los_datos_PPL[".viewFields"][] = "id";
$tdataTodos_los_datos_PPL[".viewFields"][] = "sipe";
$tdataTodos_los_datos_PPL[".viewFields"][] = "afis";
$tdataTodos_los_datos_PPL[".viewFields"][] = "edad";
$tdataTodos_los_datos_PPL[".viewFields"][] = "rangoetario";
$tdataTodos_los_datos_PPL[".viewFields"][] = "genero";
$tdataTodos_los_datos_PPL[".viewFields"][] = "fecha_nac";
$tdataTodos_los_datos_PPL[".viewFields"][] = "edad1";
$tdataTodos_los_datos_PPL[".viewFields"][] = "dui";
$tdataTodos_los_datos_PPL[".viewFields"][] = "nivel_edu";
$tdataTodos_los_datos_PPL[".viewFields"][] = "educacionanalisis";
$tdataTodos_los_datos_PPL[".viewFields"][] = "profesion_oficio";
$tdataTodos_los_datos_PPL[".viewFields"][] = "estado_civil";
$tdataTodos_los_datos_PPL[".viewFields"][] = "ciudadania";
$tdataTodos_los_datos_PPL[".viewFields"][] = "mun_nacimiento";
$tdataTodos_los_datos_PPL[".viewFields"][] = "depto_nacim";
$tdataTodos_los_datos_PPL[".viewFields"][] = "direccion";
$tdataTodos_los_datos_PPL[".viewFields"][] = "mun_resid";
$tdataTodos_los_datos_PPL[".viewFields"][] = "depart_resid";
$tdataTodos_los_datos_PPL[".viewFields"][] = "delitosanalisis";
$tdataTodos_los_datos_PPL[".viewFields"][] = "sj_interno";
$tdataTodos_los_datos_PPL[".viewFields"][] = "fase";
$tdataTodos_los_datos_PPL[".viewFields"][] = "org_delictiva";
$tdataTodos_los_datos_PPL[".viewFields"][] = "tipo_mara";
$tdataTodos_los_datos_PPL[".viewFields"][] = "reincidente";
$tdataTodos_los_datos_PPL[".viewFields"][] = "deportado";
$tdataTodos_los_datos_PPL[".viewFields"][] = "direccion1";
$tdataTodos_los_datos_PPL[".viewFields"][] = "sector";
$tdataTodos_los_datos_PPL[".viewFields"][] = "celda";
$tdataTodos_los_datos_PPL[".viewFields"][] = "fecha_ing__sp";
$tdataTodos_los_datos_PPL[".viewFields"][] = "libro";
$tdataTodos_los_datos_PPL[".viewFields"][] = "fecha_ing__cp";
$tdataTodos_los_datos_PPL[".viewFields"][] = "total_delitos";
$tdataTodos_los_datos_PPL[".viewFields"][] = "delitos";
$tdataTodos_los_datos_PPL[".viewFields"][] = "delitoanalisis";
$tdataTodos_los_datos_PPL[".viewFields"][] = "sector_ppd";

$tdataTodos_los_datos_PPL[".addFields"] = array();
$tdataTodos_los_datos_PPL[".addFields"][] = "id";
$tdataTodos_los_datos_PPL[".addFields"][] = "sipe";
$tdataTodos_los_datos_PPL[".addFields"][] = "afis";
$tdataTodos_los_datos_PPL[".addFields"][] = "edad";
$tdataTodos_los_datos_PPL[".addFields"][] = "rangoetario";
$tdataTodos_los_datos_PPL[".addFields"][] = "genero";
$tdataTodos_los_datos_PPL[".addFields"][] = "fecha_nac";
$tdataTodos_los_datos_PPL[".addFields"][] = "edad1";
$tdataTodos_los_datos_PPL[".addFields"][] = "dui";
$tdataTodos_los_datos_PPL[".addFields"][] = "nivel_edu";
$tdataTodos_los_datos_PPL[".addFields"][] = "educacionanalisis";
$tdataTodos_los_datos_PPL[".addFields"][] = "profesion_oficio";
$tdataTodos_los_datos_PPL[".addFields"][] = "estado_civil";
$tdataTodos_los_datos_PPL[".addFields"][] = "ciudadania";
$tdataTodos_los_datos_PPL[".addFields"][] = "mun_nacimiento";
$tdataTodos_los_datos_PPL[".addFields"][] = "depto_nacim";
$tdataTodos_los_datos_PPL[".addFields"][] = "direccion";
$tdataTodos_los_datos_PPL[".addFields"][] = "mun_resid";
$tdataTodos_los_datos_PPL[".addFields"][] = "depart_resid";
$tdataTodos_los_datos_PPL[".addFields"][] = "delitosanalisis";
$tdataTodos_los_datos_PPL[".addFields"][] = "sj_interno";
$tdataTodos_los_datos_PPL[".addFields"][] = "fase";
$tdataTodos_los_datos_PPL[".addFields"][] = "org_delictiva";
$tdataTodos_los_datos_PPL[".addFields"][] = "tipo_mara";
$tdataTodos_los_datos_PPL[".addFields"][] = "reincidente";
$tdataTodos_los_datos_PPL[".addFields"][] = "deportado";
$tdataTodos_los_datos_PPL[".addFields"][] = "direccion1";
$tdataTodos_los_datos_PPL[".addFields"][] = "sector";
$tdataTodos_los_datos_PPL[".addFields"][] = "celda";
$tdataTodos_los_datos_PPL[".addFields"][] = "fecha_ing__sp";
$tdataTodos_los_datos_PPL[".addFields"][] = "libro";
$tdataTodos_los_datos_PPL[".addFields"][] = "fecha_ing__cp";
$tdataTodos_los_datos_PPL[".addFields"][] = "total_delitos";
$tdataTodos_los_datos_PPL[".addFields"][] = "delitos";
$tdataTodos_los_datos_PPL[".addFields"][] = "delitoanalisis";
$tdataTodos_los_datos_PPL[".addFields"][] = "sector_ppd";

$tdataTodos_los_datos_PPL[".masterListFields"] = array();
$tdataTodos_los_datos_PPL[".masterListFields"][] = "id";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "sipe";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "afis";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "edad";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "rangoetario";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "genero";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "fecha_nac";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "edad1";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "dui";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "nivel_edu";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "educacionanalisis";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "profesion_oficio";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "estado_civil";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "ciudadania";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "mun_nacimiento";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "depto_nacim";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "direccion";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "mun_resid";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "depart_resid";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "delitosanalisis";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "sj_interno";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "fase";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "org_delictiva";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "tipo_mara";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "reincidente";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "deportado";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "direccion1";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "sector";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "celda";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "fecha_ing__sp";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "libro";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "fecha_ing__cp";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "total_delitos";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "delitos";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "delitoanalisis";
$tdataTodos_los_datos_PPL[".masterListFields"][] = "sector_ppd";

$tdataTodos_los_datos_PPL[".inlineAddFields"] = array();
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "id";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "sipe";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "afis";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "edad";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "rangoetario";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "genero";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "fecha_nac";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "edad1";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "dui";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "nivel_edu";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "educacionanalisis";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "profesion_oficio";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "estado_civil";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "ciudadania";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "mun_nacimiento";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "depto_nacim";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "direccion";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "depart_resid";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "delitosanalisis";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "sj_interno";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "fase";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "reincidente";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "deportado";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "direccion1";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "sector";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "celda";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "fecha_ing__sp";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "libro";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "fecha_ing__cp";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "total_delitos";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "delitos";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "delitoanalisis";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "org_delictiva";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "tipo_mara";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "mun_resid";
$tdataTodos_los_datos_PPL[".inlineAddFields"][] = "sector_ppd";

$tdataTodos_los_datos_PPL[".editFields"] = array();
$tdataTodos_los_datos_PPL[".editFields"][] = "id";
$tdataTodos_los_datos_PPL[".editFields"][] = "sipe";
$tdataTodos_los_datos_PPL[".editFields"][] = "afis";
$tdataTodos_los_datos_PPL[".editFields"][] = "edad";
$tdataTodos_los_datos_PPL[".editFields"][] = "rangoetario";
$tdataTodos_los_datos_PPL[".editFields"][] = "genero";
$tdataTodos_los_datos_PPL[".editFields"][] = "fecha_nac";
$tdataTodos_los_datos_PPL[".editFields"][] = "edad1";
$tdataTodos_los_datos_PPL[".editFields"][] = "dui";
$tdataTodos_los_datos_PPL[".editFields"][] = "nivel_edu";
$tdataTodos_los_datos_PPL[".editFields"][] = "educacionanalisis";
$tdataTodos_los_datos_PPL[".editFields"][] = "profesion_oficio";
$tdataTodos_los_datos_PPL[".editFields"][] = "estado_civil";
$tdataTodos_los_datos_PPL[".editFields"][] = "ciudadania";
$tdataTodos_los_datos_PPL[".editFields"][] = "mun_nacimiento";
$tdataTodos_los_datos_PPL[".editFields"][] = "depto_nacim";
$tdataTodos_los_datos_PPL[".editFields"][] = "direccion";
$tdataTodos_los_datos_PPL[".editFields"][] = "mun_resid";
$tdataTodos_los_datos_PPL[".editFields"][] = "depart_resid";
$tdataTodos_los_datos_PPL[".editFields"][] = "delitosanalisis";
$tdataTodos_los_datos_PPL[".editFields"][] = "sj_interno";
$tdataTodos_los_datos_PPL[".editFields"][] = "fase";
$tdataTodos_los_datos_PPL[".editFields"][] = "org_delictiva";
$tdataTodos_los_datos_PPL[".editFields"][] = "tipo_mara";
$tdataTodos_los_datos_PPL[".editFields"][] = "reincidente";
$tdataTodos_los_datos_PPL[".editFields"][] = "deportado";
$tdataTodos_los_datos_PPL[".editFields"][] = "direccion1";
$tdataTodos_los_datos_PPL[".editFields"][] = "sector";
$tdataTodos_los_datos_PPL[".editFields"][] = "celda";
$tdataTodos_los_datos_PPL[".editFields"][] = "fecha_ing__sp";
$tdataTodos_los_datos_PPL[".editFields"][] = "libro";
$tdataTodos_los_datos_PPL[".editFields"][] = "fecha_ing__cp";
$tdataTodos_los_datos_PPL[".editFields"][] = "total_delitos";
$tdataTodos_los_datos_PPL[".editFields"][] = "delitos";
$tdataTodos_los_datos_PPL[".editFields"][] = "delitoanalisis";
$tdataTodos_los_datos_PPL[".editFields"][] = "sector_ppd";

$tdataTodos_los_datos_PPL[".inlineEditFields"] = array();
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "id";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "sipe";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "afis";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "edad";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "rangoetario";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "genero";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "fecha_nac";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "edad1";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "dui";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "nivel_edu";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "educacionanalisis";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "profesion_oficio";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "estado_civil";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "ciudadania";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "mun_nacimiento";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "depto_nacim";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "direccion";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "depart_resid";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "delitosanalisis";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "sj_interno";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "fase";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "reincidente";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "deportado";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "direccion1";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "sector";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "celda";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "fecha_ing__sp";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "libro";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "fecha_ing__cp";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "total_delitos";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "delitos";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "delitoanalisis";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "org_delictiva";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "tipo_mara";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "mun_resid";
$tdataTodos_los_datos_PPL[".inlineEditFields"][] = "sector_ppd";

$tdataTodos_los_datos_PPL[".updateSelectedFields"] = array();
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "id";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "sipe";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "afis";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "edad";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "rangoetario";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "genero";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "fecha_nac";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "edad1";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "dui";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "nivel_edu";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "educacionanalisis";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "profesion_oficio";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "estado_civil";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "ciudadania";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "mun_nacimiento";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "depto_nacim";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "direccion";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "mun_resid";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "depart_resid";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "delitosanalisis";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "sj_interno";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "fase";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "org_delictiva";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "tipo_mara";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "reincidente";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "deportado";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "direccion1";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "sector";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "celda";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "fecha_ing__sp";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "libro";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "fecha_ing__cp";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "total_delitos";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "delitos";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "delitoanalisis";
$tdataTodos_los_datos_PPL[".updateSelectedFields"][] = "sector_ppd";


$tdataTodos_los_datos_PPL[".exportFields"] = array();
$tdataTodos_los_datos_PPL[".exportFields"][] = "id";
$tdataTodos_los_datos_PPL[".exportFields"][] = "sipe";
$tdataTodos_los_datos_PPL[".exportFields"][] = "afis";
$tdataTodos_los_datos_PPL[".exportFields"][] = "edad";
$tdataTodos_los_datos_PPL[".exportFields"][] = "rangoetario";
$tdataTodos_los_datos_PPL[".exportFields"][] = "genero";
$tdataTodos_los_datos_PPL[".exportFields"][] = "fecha_nac";
$tdataTodos_los_datos_PPL[".exportFields"][] = "edad1";
$tdataTodos_los_datos_PPL[".exportFields"][] = "dui";
$tdataTodos_los_datos_PPL[".exportFields"][] = "nivel_edu";
$tdataTodos_los_datos_PPL[".exportFields"][] = "educacionanalisis";
$tdataTodos_los_datos_PPL[".exportFields"][] = "profesion_oficio";
$tdataTodos_los_datos_PPL[".exportFields"][] = "estado_civil";
$tdataTodos_los_datos_PPL[".exportFields"][] = "ciudadania";
$tdataTodos_los_datos_PPL[".exportFields"][] = "mun_nacimiento";
$tdataTodos_los_datos_PPL[".exportFields"][] = "depto_nacim";
$tdataTodos_los_datos_PPL[".exportFields"][] = "direccion";
$tdataTodos_los_datos_PPL[".exportFields"][] = "mun_resid";
$tdataTodos_los_datos_PPL[".exportFields"][] = "depart_resid";
$tdataTodos_los_datos_PPL[".exportFields"][] = "delitosanalisis";
$tdataTodos_los_datos_PPL[".exportFields"][] = "sj_interno";
$tdataTodos_los_datos_PPL[".exportFields"][] = "fase";
$tdataTodos_los_datos_PPL[".exportFields"][] = "org_delictiva";
$tdataTodos_los_datos_PPL[".exportFields"][] = "tipo_mara";
$tdataTodos_los_datos_PPL[".exportFields"][] = "reincidente";
$tdataTodos_los_datos_PPL[".exportFields"][] = "deportado";
$tdataTodos_los_datos_PPL[".exportFields"][] = "direccion1";
$tdataTodos_los_datos_PPL[".exportFields"][] = "sector";
$tdataTodos_los_datos_PPL[".exportFields"][] = "celda";
$tdataTodos_los_datos_PPL[".exportFields"][] = "fecha_ing__sp";
$tdataTodos_los_datos_PPL[".exportFields"][] = "libro";
$tdataTodos_los_datos_PPL[".exportFields"][] = "fecha_ing__cp";
$tdataTodos_los_datos_PPL[".exportFields"][] = "total_delitos";
$tdataTodos_los_datos_PPL[".exportFields"][] = "delitos";
$tdataTodos_los_datos_PPL[".exportFields"][] = "delitoanalisis";
$tdataTodos_los_datos_PPL[".exportFields"][] = "sector_ppd";

$tdataTodos_los_datos_PPL[".importFields"] = array();
$tdataTodos_los_datos_PPL[".importFields"][] = "id";
$tdataTodos_los_datos_PPL[".importFields"][] = "sipe";
$tdataTodos_los_datos_PPL[".importFields"][] = "afis";
$tdataTodos_los_datos_PPL[".importFields"][] = "edad";
$tdataTodos_los_datos_PPL[".importFields"][] = "rangoetario";
$tdataTodos_los_datos_PPL[".importFields"][] = "genero";
$tdataTodos_los_datos_PPL[".importFields"][] = "fecha_nac";
$tdataTodos_los_datos_PPL[".importFields"][] = "edad1";
$tdataTodos_los_datos_PPL[".importFields"][] = "dui";
$tdataTodos_los_datos_PPL[".importFields"][] = "nivel_edu";
$tdataTodos_los_datos_PPL[".importFields"][] = "educacionanalisis";
$tdataTodos_los_datos_PPL[".importFields"][] = "profesion_oficio";
$tdataTodos_los_datos_PPL[".importFields"][] = "estado_civil";
$tdataTodos_los_datos_PPL[".importFields"][] = "ciudadania";
$tdataTodos_los_datos_PPL[".importFields"][] = "mun_nacimiento";
$tdataTodos_los_datos_PPL[".importFields"][] = "depto_nacim";
$tdataTodos_los_datos_PPL[".importFields"][] = "direccion";
$tdataTodos_los_datos_PPL[".importFields"][] = "mun_resid";
$tdataTodos_los_datos_PPL[".importFields"][] = "depart_resid";
$tdataTodos_los_datos_PPL[".importFields"][] = "delitosanalisis";
$tdataTodos_los_datos_PPL[".importFields"][] = "sj_interno";
$tdataTodos_los_datos_PPL[".importFields"][] = "fase";
$tdataTodos_los_datos_PPL[".importFields"][] = "org_delictiva";
$tdataTodos_los_datos_PPL[".importFields"][] = "tipo_mara";
$tdataTodos_los_datos_PPL[".importFields"][] = "reincidente";
$tdataTodos_los_datos_PPL[".importFields"][] = "deportado";
$tdataTodos_los_datos_PPL[".importFields"][] = "direccion1";
$tdataTodos_los_datos_PPL[".importFields"][] = "sector";
$tdataTodos_los_datos_PPL[".importFields"][] = "celda";
$tdataTodos_los_datos_PPL[".importFields"][] = "fecha_ing__sp";
$tdataTodos_los_datos_PPL[".importFields"][] = "libro";
$tdataTodos_los_datos_PPL[".importFields"][] = "fecha_ing__cp";
$tdataTodos_los_datos_PPL[".importFields"][] = "total_delitos";
$tdataTodos_los_datos_PPL[".importFields"][] = "delitos";
$tdataTodos_los_datos_PPL[".importFields"][] = "delitoanalisis";
$tdataTodos_los_datos_PPL[".importFields"][] = "sector_ppd";

$tdataTodos_los_datos_PPL[".printFields"] = array();
$tdataTodos_los_datos_PPL[".printFields"][] = "id";
$tdataTodos_los_datos_PPL[".printFields"][] = "sipe";
$tdataTodos_los_datos_PPL[".printFields"][] = "afis";
$tdataTodos_los_datos_PPL[".printFields"][] = "edad";
$tdataTodos_los_datos_PPL[".printFields"][] = "rangoetario";
$tdataTodos_los_datos_PPL[".printFields"][] = "genero";
$tdataTodos_los_datos_PPL[".printFields"][] = "fecha_nac";
$tdataTodos_los_datos_PPL[".printFields"][] = "edad1";
$tdataTodos_los_datos_PPL[".printFields"][] = "dui";
$tdataTodos_los_datos_PPL[".printFields"][] = "nivel_edu";
$tdataTodos_los_datos_PPL[".printFields"][] = "educacionanalisis";
$tdataTodos_los_datos_PPL[".printFields"][] = "profesion_oficio";
$tdataTodos_los_datos_PPL[".printFields"][] = "estado_civil";
$tdataTodos_los_datos_PPL[".printFields"][] = "ciudadania";
$tdataTodos_los_datos_PPL[".printFields"][] = "mun_nacimiento";
$tdataTodos_los_datos_PPL[".printFields"][] = "depto_nacim";
$tdataTodos_los_datos_PPL[".printFields"][] = "direccion";
$tdataTodos_los_datos_PPL[".printFields"][] = "mun_resid";
$tdataTodos_los_datos_PPL[".printFields"][] = "depart_resid";
$tdataTodos_los_datos_PPL[".printFields"][] = "delitosanalisis";
$tdataTodos_los_datos_PPL[".printFields"][] = "sj_interno";
$tdataTodos_los_datos_PPL[".printFields"][] = "fase";
$tdataTodos_los_datos_PPL[".printFields"][] = "org_delictiva";
$tdataTodos_los_datos_PPL[".printFields"][] = "tipo_mara";
$tdataTodos_los_datos_PPL[".printFields"][] = "reincidente";
$tdataTodos_los_datos_PPL[".printFields"][] = "deportado";
$tdataTodos_los_datos_PPL[".printFields"][] = "direccion1";
$tdataTodos_los_datos_PPL[".printFields"][] = "sector";
$tdataTodos_los_datos_PPL[".printFields"][] = "celda";
$tdataTodos_los_datos_PPL[".printFields"][] = "fecha_ing__sp";
$tdataTodos_los_datos_PPL[".printFields"][] = "libro";
$tdataTodos_los_datos_PPL[".printFields"][] = "fecha_ing__cp";
$tdataTodos_los_datos_PPL[".printFields"][] = "total_delitos";
$tdataTodos_los_datos_PPL[".printFields"][] = "delitos";
$tdataTodos_los_datos_PPL[".printFields"][] = "delitoanalisis";
$tdataTodos_los_datos_PPL[".printFields"][] = "sector_ppd";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","id");
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




	$tdataTodos_los_datos_PPL["id"] = $fdata;
//	sipe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sipe";
	$fdata["GoodName"] = "sipe";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","sipe");
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

		$fdata["strField"] = "sipe";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sipe";

	
	
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




	$tdataTodos_los_datos_PPL["sipe"] = $fdata;
//	afis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "afis";
	$fdata["GoodName"] = "afis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","afis");
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

		$fdata["strField"] = "afis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "afis";

	
	
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




	$tdataTodos_los_datos_PPL["afis"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","edad");
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

		$fdata["strField"] = "edad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edad";

	
	
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




	$tdataTodos_los_datos_PPL["edad"] = $fdata;
//	rangoetario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rangoetario";
	$fdata["GoodName"] = "rangoetario";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","rangoetario");
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

		$fdata["strField"] = "rangoetario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rangoetario";

	
	
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




	$tdataTodos_los_datos_PPL["rangoetario"] = $fdata;
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","genero");
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

		$fdata["strField"] = "genero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "genero";

	
	
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




	$tdataTodos_los_datos_PPL["genero"] = $fdata;
//	fecha_nac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fecha_nac";
	$fdata["GoodName"] = "fecha_nac";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","fecha_nac");
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

		$fdata["strField"] = "fecha_nac";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_nac";

	
	
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




	$tdataTodos_los_datos_PPL["fecha_nac"] = $fdata;
//	edad1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "edad1";
	$fdata["GoodName"] = "edad1";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","edad1");
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

		$fdata["strField"] = "edad1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edad1";

	
	
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




	$tdataTodos_los_datos_PPL["edad1"] = $fdata;
//	dui
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dui";
	$fdata["GoodName"] = "dui";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","dui");
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

		$fdata["strField"] = "dui";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dui";

	
	
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




	$tdataTodos_los_datos_PPL["dui"] = $fdata;
//	nivel_edu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "nivel_edu";
	$fdata["GoodName"] = "nivel_edu";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","nivel_edu");
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

		$fdata["strField"] = "nivel_edu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nivel_edu";

	
	
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




	$tdataTodos_los_datos_PPL["nivel_edu"] = $fdata;
//	educacionanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "educacionanalisis";
	$fdata["GoodName"] = "educacionanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","educacionanalisis");
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

		$fdata["strField"] = "educacionanalisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "educacionanalisis";

	
	
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




	$tdataTodos_los_datos_PPL["educacionanalisis"] = $fdata;
//	profesion_oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "profesion_oficio";
	$fdata["GoodName"] = "profesion_oficio";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","profesion_oficio");
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

		$fdata["strField"] = "profesion_oficio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "profesion_oficio";

	
	
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




	$tdataTodos_los_datos_PPL["profesion_oficio"] = $fdata;
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","estado_civil");
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

		$fdata["strField"] = "estado_civil";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_civil";

	
	
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




	$tdataTodos_los_datos_PPL["estado_civil"] = $fdata;
//	ciudadania
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ciudadania";
	$fdata["GoodName"] = "ciudadania";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","ciudadania");
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

		$fdata["strField"] = "ciudadania";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ciudadania";

	
	
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




	$tdataTodos_los_datos_PPL["ciudadania"] = $fdata;
//	mun_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "mun_nacimiento";
	$fdata["GoodName"] = "mun_nacimiento";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","mun_nacimiento");
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

		$fdata["strField"] = "mun_nacimiento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mun_nacimiento";

	
	
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




	$tdataTodos_los_datos_PPL["mun_nacimiento"] = $fdata;
//	depto_nacim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "depto_nacim";
	$fdata["GoodName"] = "depto_nacim";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","depto_nacim");
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

		$fdata["strField"] = "depto_nacim";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "depto_nacim";

	
	
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




	$tdataTodos_los_datos_PPL["depto_nacim"] = $fdata;
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","direccion");
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

		$fdata["strField"] = "direccion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direccion";

	
	
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




	$tdataTodos_los_datos_PPL["direccion"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","mun_resid");
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

		$fdata["strField"] = "mun_resid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mun_resid";

	
	
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




	$tdataTodos_los_datos_PPL["mun_resid"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","depart_resid");
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

		$fdata["strField"] = "depart_resid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "depart_resid";

	
	
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




	$tdataTodos_los_datos_PPL["depart_resid"] = $fdata;
//	delitosanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "delitosanalisis";
	$fdata["GoodName"] = "delitosanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","delitosanalisis");
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

		$fdata["strField"] = "delitosanalisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delitosanalisis";

	
	
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




	$tdataTodos_los_datos_PPL["delitosanalisis"] = $fdata;
//	sj_interno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "sj_interno";
	$fdata["GoodName"] = "sj_interno";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","sj_interno");
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

		$fdata["strField"] = "sj_interno";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sj_interno";

	
	
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




	$tdataTodos_los_datos_PPL["sj_interno"] = $fdata;
//	fase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "fase";
	$fdata["GoodName"] = "fase";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","fase");
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

		$fdata["strField"] = "fase";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fase";

	
	
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




	$tdataTodos_los_datos_PPL["fase"] = $fdata;
//	org_delictiva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "org_delictiva";
	$fdata["GoodName"] = "org_delictiva";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","org_delictiva");
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

		$fdata["strField"] = "org_delictiva";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "org_delictiva";

	
	
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




	$tdataTodos_los_datos_PPL["org_delictiva"] = $fdata;
//	tipo_mara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "tipo_mara";
	$fdata["GoodName"] = "tipo_mara";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","tipo_mara");
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

		$fdata["strField"] = "tipo_mara";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_mara";

	
	
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




	$tdataTodos_los_datos_PPL["tipo_mara"] = $fdata;
//	reincidente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "reincidente";
	$fdata["GoodName"] = "reincidente";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","reincidente");
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

		$fdata["strField"] = "reincidente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reincidente";

	
	
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




	$tdataTodos_los_datos_PPL["reincidente"] = $fdata;
//	deportado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "deportado";
	$fdata["GoodName"] = "deportado";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","deportado");
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

		$fdata["strField"] = "deportado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "deportado";

	
	
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




	$tdataTodos_los_datos_PPL["deportado"] = $fdata;
//	direccion1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "direccion1";
	$fdata["GoodName"] = "direccion1";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","direccion1");
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

		$fdata["strField"] = "direccion1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direccion1";

	
	
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




	$tdataTodos_los_datos_PPL["direccion1"] = $fdata;
//	sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "sector";
	$fdata["GoodName"] = "sector";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","sector");
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

		$fdata["strField"] = "sector";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sector";

	
	
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




	$tdataTodos_los_datos_PPL["sector"] = $fdata;
//	celda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "celda";
	$fdata["GoodName"] = "celda";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","celda");
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

		$fdata["strField"] = "celda";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "celda";

	
	
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




	$tdataTodos_los_datos_PPL["celda"] = $fdata;
//	fecha_ing__sp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "fecha_ing__sp";
	$fdata["GoodName"] = "fecha_ing__sp";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","fecha_ing__sp");
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

		$fdata["strField"] = "fecha_ing__sp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_ing__sp";

	
	
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




	$tdataTodos_los_datos_PPL["fecha_ing__sp"] = $fdata;
//	libro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "libro";
	$fdata["GoodName"] = "libro";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","libro");
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

		$fdata["strField"] = "libro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "libro";

	
	
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




	$tdataTodos_los_datos_PPL["libro"] = $fdata;
//	fecha_ing__cp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "fecha_ing__cp";
	$fdata["GoodName"] = "fecha_ing__cp";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","fecha_ing__cp");
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

		$fdata["strField"] = "fecha_ing__cp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_ing__cp";

	
	
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




	$tdataTodos_los_datos_PPL["fecha_ing__cp"] = $fdata;
//	total_delitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "total_delitos";
	$fdata["GoodName"] = "total_delitos";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","total_delitos");
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

		$fdata["strField"] = "total_delitos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_delitos";

	
	
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




	$tdataTodos_los_datos_PPL["total_delitos"] = $fdata;
//	delitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "delitos";
	$fdata["GoodName"] = "delitos";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","delitos");
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

		$fdata["strField"] = "delitos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delitos";

	
	
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




	$tdataTodos_los_datos_PPL["delitos"] = $fdata;
//	delitoanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "delitoanalisis";
	$fdata["GoodName"] = "delitoanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","delitoanalisis");
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

		$fdata["strField"] = "delitoanalisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delitoanalisis";

	
	
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




	$tdataTodos_los_datos_PPL["delitoanalisis"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Todos_los_datos_PPL","sector_ppd");
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




	$tdataTodos_los_datos_PPL["sector_ppd"] = $fdata;


$tables_data["Todos los datos PPL"]=&$tdataTodos_los_datos_PPL;
$field_labels["Todos_los_datos_PPL"] = &$fieldLabelsTodos_los_datos_PPL;
$fieldToolTips["Todos_los_datos_PPL"] = &$fieldToolTipsTodos_los_datos_PPL;
$placeHolders["Todos_los_datos_PPL"] = &$placeHoldersTodos_los_datos_PPL;
$page_titles["Todos_los_datos_PPL"] = &$pageTitlesTodos_los_datos_PPL;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Todos los datos PPL"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Todos los datos PPL"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Todos_los_datos_PPL()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	sipe,  	afis,  	edad,  	rangoetario,  	genero,  	fecha_nac,  	edad1,  	dui,  	nivel_edu,  	educacionanalisis,  	profesion_oficio,  	estado_civil,  	ciudadania,  	mun_nacimiento,  	depto_nacim,  	direccion,  	mun_resid,  	depart_resid,  	delitosanalisis,  	sj_interno,  	fase,  	org_delictiva,  	tipo_mara,  	reincidente,  	deportado,  	direccion1,  	sector,  	celda,  	fecha_ing__sp,  	libro,  	fecha_ing__cp,  	total_delitos,  	delitos,  	delitoanalisis,  	sector_ppd";
$proto0["m_strFrom"] = "FROM carcel";
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
	"m_strName" => "id",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "Todos los datos PPL";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sipe",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto8["m_sql"] = "sipe";
$proto8["m_srcTableName"] = "Todos los datos PPL";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "afis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto10["m_sql"] = "afis";
$proto10["m_srcTableName"] = "Todos los datos PPL";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "edad",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto12["m_sql"] = "edad";
$proto12["m_srcTableName"] = "Todos los datos PPL";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto14["m_sql"] = "rangoetario";
$proto14["m_srcTableName"] = "Todos los datos PPL";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto16["m_sql"] = "genero";
$proto16["m_srcTableName"] = "Todos los datos PPL";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_nac",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto18["m_sql"] = "fecha_nac";
$proto18["m_srcTableName"] = "Todos los datos PPL";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "edad1",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto20["m_sql"] = "edad1";
$proto20["m_srcTableName"] = "Todos los datos PPL";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dui",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto22["m_sql"] = "dui";
$proto22["m_srcTableName"] = "Todos los datos PPL";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "nivel_edu",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto24["m_sql"] = "nivel_edu";
$proto24["m_srcTableName"] = "Todos los datos PPL";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "educacionanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto26["m_sql"] = "educacionanalisis";
$proto26["m_srcTableName"] = "Todos los datos PPL";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "profesion_oficio",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto28["m_sql"] = "profesion_oficio";
$proto28["m_srcTableName"] = "Todos los datos PPL";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto30["m_sql"] = "estado_civil";
$proto30["m_srcTableName"] = "Todos los datos PPL";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ciudadania",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto32["m_sql"] = "ciudadania";
$proto32["m_srcTableName"] = "Todos los datos PPL";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_nacimiento",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto34["m_sql"] = "mun_nacimiento";
$proto34["m_srcTableName"] = "Todos los datos PPL";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "depto_nacim",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto36["m_sql"] = "depto_nacim";
$proto36["m_srcTableName"] = "Todos los datos PPL";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto38["m_sql"] = "direccion";
$proto38["m_srcTableName"] = "Todos los datos PPL";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto40["m_sql"] = "mun_resid";
$proto40["m_srcTableName"] = "Todos los datos PPL";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto42["m_sql"] = "depart_resid";
$proto42["m_srcTableName"] = "Todos los datos PPL";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "delitosanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto44["m_sql"] = "delitosanalisis";
$proto44["m_srcTableName"] = "Todos los datos PPL";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "sj_interno",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto46["m_sql"] = "sj_interno";
$proto46["m_srcTableName"] = "Todos los datos PPL";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "fase",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto48["m_sql"] = "fase";
$proto48["m_srcTableName"] = "Todos los datos PPL";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto50["m_sql"] = "org_delictiva";
$proto50["m_srcTableName"] = "Todos los datos PPL";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto52["m_sql"] = "tipo_mara";
$proto52["m_srcTableName"] = "Todos los datos PPL";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "reincidente",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto54["m_sql"] = "reincidente";
$proto54["m_srcTableName"] = "Todos los datos PPL";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "deportado",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto56["m_sql"] = "deportado";
$proto56["m_srcTableName"] = "Todos los datos PPL";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion1",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto58["m_sql"] = "direccion1";
$proto58["m_srcTableName"] = "Todos los datos PPL";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "sector",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto60["m_sql"] = "sector";
$proto60["m_srcTableName"] = "Todos los datos PPL";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "celda",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto62["m_sql"] = "celda";
$proto62["m_srcTableName"] = "Todos los datos PPL";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ing__sp",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto64["m_sql"] = "fecha_ing__sp";
$proto64["m_srcTableName"] = "Todos los datos PPL";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "libro",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto66["m_sql"] = "libro";
$proto66["m_srcTableName"] = "Todos los datos PPL";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ing__cp",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto68["m_sql"] = "fecha_ing__cp";
$proto68["m_srcTableName"] = "Todos los datos PPL";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "total_delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto70["m_sql"] = "total_delitos";
$proto70["m_srcTableName"] = "Todos los datos PPL";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto72["m_sql"] = "delitos";
$proto72["m_srcTableName"] = "Todos los datos PPL";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto74["m_sql"] = "delitoanalisis";
$proto74["m_srcTableName"] = "Todos los datos PPL";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Todos los datos PPL"
));

$proto76["m_sql"] = "sector_ppd";
$proto76["m_srcTableName"] = "Todos los datos PPL";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto78=array();
$proto78["m_link"] = "SQLL_MAIN";
			$proto79=array();
$proto79["m_strName"] = "carcel";
$proto79["m_srcTableName"] = "Todos los datos PPL";
$proto79["m_columns"] = array();
$proto79["m_columns"][] = "id";
$proto79["m_columns"][] = "sipe";
$proto79["m_columns"][] = "afis";
$proto79["m_columns"][] = "edad";
$proto79["m_columns"][] = "rangoetario";
$proto79["m_columns"][] = "genero";
$proto79["m_columns"][] = "fecha_nac";
$proto79["m_columns"][] = "edad1";
$proto79["m_columns"][] = "dui";
$proto79["m_columns"][] = "nivel_edu";
$proto79["m_columns"][] = "educacionanalisis";
$proto79["m_columns"][] = "profesion_oficio";
$proto79["m_columns"][] = "estado_civil";
$proto79["m_columns"][] = "ciudadania";
$proto79["m_columns"][] = "mun_nacimiento";
$proto79["m_columns"][] = "depto_nacim";
$proto79["m_columns"][] = "direccion";
$proto79["m_columns"][] = "mun_resid";
$proto79["m_columns"][] = "depart_resid";
$proto79["m_columns"][] = "delitosanalisis";
$proto79["m_columns"][] = "sj_interno";
$proto79["m_columns"][] = "fase";
$proto79["m_columns"][] = "org_delictiva";
$proto79["m_columns"][] = "tipo_mara";
$proto79["m_columns"][] = "reincidente";
$proto79["m_columns"][] = "deportado";
$proto79["m_columns"][] = "direccion1";
$proto79["m_columns"][] = "sector";
$proto79["m_columns"][] = "celda";
$proto79["m_columns"][] = "fecha_ing__sp";
$proto79["m_columns"][] = "libro";
$proto79["m_columns"][] = "fecha_ing__cp";
$proto79["m_columns"][] = "total_delitos";
$proto79["m_columns"][] = "delitos";
$proto79["m_columns"][] = "delitoanalisis";
$proto79["m_columns"][] = "sector_ppd";
$obj = new SQLTable($proto79);

$proto78["m_table"] = $obj;
$proto78["m_sql"] = "carcel";
$proto78["m_alias"] = "";
$proto78["m_srcTableName"] = "Todos los datos PPL";
$proto80=array();
$proto80["m_sql"] = "";
$proto80["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
$proto80["m_strCase"] = "";
$proto80["m_havingmode"] = false;
$proto80["m_inBrackets"] = false;
$proto80["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto80);

$proto78["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto78);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Todos los datos PPL";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Todos_los_datos_PPL = createSqlQuery_Todos_los_datos_PPL();


	
		;

																																				

$tdataTodos_los_datos_PPL[".sqlquery"] = $queryData_Todos_los_datos_PPL;

$tableEvents["Todos los datos PPL"] = new eventsBase;
$tdataTodos_los_datos_PPL[".hasEvents"] = false;

?>