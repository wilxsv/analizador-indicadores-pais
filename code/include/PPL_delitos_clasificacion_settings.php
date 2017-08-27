<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPPL_delitos_clasificacion = array();
	$tdataPPL_delitos_clasificacion[".truncateText"] = true;
	$tdataPPL_delitos_clasificacion[".NumberOfChars"] = 80;
	$tdataPPL_delitos_clasificacion[".ShortName"] = "PPL_delitos_clasificacion";
	$tdataPPL_delitos_clasificacion[".OwnerID"] = "";
	$tdataPPL_delitos_clasificacion[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsPPL_delitos_clasificacion = array();
$fieldToolTipsPPL_delitos_clasificacion = array();
$pageTitlesPPL_delitos_clasificacion = array();
$placeHoldersPPL_delitos_clasificacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPPL_delitos_clasificacion["Spanish"] = array();
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"] = array();
	$placeHoldersPPL_delitos_clasificacion["Spanish"] = array();
	$pageTitlesPPL_delitos_clasificacion["Spanish"] = array();
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["id"] = "Id";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["id"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["id"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["sipe"] = "Sipe";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["sipe"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["sipe"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["afis"] = "Afis";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["afis"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["afis"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["edad"] = "Edad";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["edad"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["edad"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["rangoetario"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["rangoetario"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["genero"] = "Genero";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["genero"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["genero"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["fecha_nac"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["fecha_nac"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["edad1"] = "Edad1";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["edad1"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["edad1"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["dui"] = "Dui";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["dui"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["dui"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["nivel_edu"] = "Nivel Edu";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["nivel_edu"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["nivel_edu"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["educacionanalisis"] = "Educacionanalisis";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["educacionanalisis"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["educacionanalisis"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["profesion_oficio"] = "Profesion Oficio";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["profesion_oficio"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["profesion_oficio"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["estado_civil"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["estado_civil"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["ciudadania"] = "Ciudadania";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["ciudadania"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["ciudadania"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["mun_nacimiento"] = "Mun Nacimiento";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["mun_nacimiento"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["mun_nacimiento"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["depto_nacim"] = "Depto Nacim";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["depto_nacim"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["depto_nacim"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["direccion"] = "Direccion";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["direccion"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["direccion"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["mun_resid"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["mun_resid"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["depart_resid"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["depart_resid"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["delitosanalisis"] = "Delitosanalisis";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["delitosanalisis"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["delitosanalisis"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["sj_interno"] = "Sj Interno";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["sj_interno"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["sj_interno"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["fase"] = "Fase";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["fase"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["fase"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["tipo_mara"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["tipo_mara"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["reincidente"] = "Reincidente";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["reincidente"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["reincidente"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["deportado"] = "Deportado";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["deportado"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["deportado"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["direccion1"] = "Direccion1";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["direccion1"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["direccion1"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["sector"] = "Sector";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["sector"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["sector"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["celda"] = "Celda";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["celda"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["celda"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["fecha_ing__sp"] = "Fecha Ing  Sp";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["fecha_ing__sp"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["fecha_ing__sp"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["libro"] = "Libro";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["libro"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["libro"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["fecha_ing__cp"] = "Fecha Ing  Cp";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["fecha_ing__cp"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["fecha_ing__cp"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["total_delitos"] = "Total Delitos";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["total_delitos"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["total_delitos"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["org_delictiva"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["org_delictiva"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["delitos"] = "Delitos";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["delitos"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["delitos"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["delitoanalisis"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["delitoanalisis"] = "";
	$fieldLabelsPPL_delitos_clasificacion["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsPPL_delitos_clasificacion["Spanish"]["sector_ppd"] = "";
	$placeHoldersPPL_delitos_clasificacion["Spanish"]["sector_ppd"] = "";
	if (count($fieldToolTipsPPL_delitos_clasificacion["Spanish"]))
		$tdataPPL_delitos_clasificacion[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPPL_delitos_clasificacion["English"] = array();
	$fieldToolTipsPPL_delitos_clasificacion["English"] = array();
	$placeHoldersPPL_delitos_clasificacion["English"] = array();
	$pageTitlesPPL_delitos_clasificacion["English"] = array();
	$fieldLabelsPPL_delitos_clasificacion["English"]["id"] = "Id";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["id"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["id"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["sipe"] = "Sipe";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["sipe"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["sipe"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["afis"] = "Afis";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["afis"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["afis"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["edad"] = "Edad";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["edad"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["edad"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["rangoetario"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["rangoetario"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["genero"] = "Genero";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["genero"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["genero"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["fecha_nac"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["fecha_nac"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["edad1"] = "Edad1";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["edad1"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["edad1"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["dui"] = "Dui";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["dui"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["dui"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["nivel_edu"] = "Nivel Edu";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["nivel_edu"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["nivel_edu"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["educacionanalisis"] = "Educacionanalisis";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["educacionanalisis"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["educacionanalisis"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["profesion_oficio"] = "Profesion Oficio";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["profesion_oficio"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["profesion_oficio"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["estado_civil"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["estado_civil"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["ciudadania"] = "Ciudadania";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["ciudadania"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["ciudadania"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["mun_nacimiento"] = "Mun Nacimiento";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["mun_nacimiento"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["mun_nacimiento"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["depto_nacim"] = "Depto Nacim";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["depto_nacim"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["depto_nacim"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["direccion"] = "Direccion";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["direccion"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["direccion"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["mun_resid"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["mun_resid"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["depart_resid"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["depart_resid"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["delitosanalisis"] = "Delitosanalisis";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["delitosanalisis"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["delitosanalisis"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["sj_interno"] = "Sj Interno";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["sj_interno"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["sj_interno"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["fase"] = "Fase";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["fase"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["fase"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["tipo_mara"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["tipo_mara"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["reincidente"] = "Reincidente";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["reincidente"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["reincidente"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["deportado"] = "Deportado";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["deportado"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["deportado"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["direccion1"] = "Direccion1";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["direccion1"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["direccion1"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["sector"] = "Sector";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["sector"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["sector"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["celda"] = "Celda";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["celda"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["celda"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["fecha_ing__sp"] = "Fecha Ing  Sp";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["fecha_ing__sp"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["fecha_ing__sp"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["libro"] = "Libro";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["libro"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["libro"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["fecha_ing__cp"] = "Fecha Ing  Cp";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["fecha_ing__cp"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["fecha_ing__cp"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["total_delitos"] = "Total Delitos";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["total_delitos"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["total_delitos"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["org_delictiva"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["org_delictiva"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["delitos"] = "Delitos";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["delitos"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["delitos"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["delitoanalisis"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["delitoanalisis"] = "";
	$fieldLabelsPPL_delitos_clasificacion["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsPPL_delitos_clasificacion["English"]["sector_ppd"] = "";
	$placeHoldersPPL_delitos_clasificacion["English"]["sector_ppd"] = "";
	if (count($fieldToolTipsPPL_delitos_clasificacion["English"]))
		$tdataPPL_delitos_clasificacion[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPPL_delitos_clasificacion[""] = array();
	$fieldToolTipsPPL_delitos_clasificacion[""] = array();
	$placeHoldersPPL_delitos_clasificacion[""] = array();
	$pageTitlesPPL_delitos_clasificacion[""] = array();
	if (count($fieldToolTipsPPL_delitos_clasificacion[""]))
		$tdataPPL_delitos_clasificacion[".isUseToolTips"] = true;
}





$tdataPPL_delitos_clasificacion[".shortTableName"] = "PPL_delitos_clasificacion";
$tdataPPL_delitos_clasificacion[".nSecOptions"] = 0;
$tdataPPL_delitos_clasificacion[".recsPerRowPrint"] = 1;
$tdataPPL_delitos_clasificacion[".mainTableOwnerID"] = "";
$tdataPPL_delitos_clasificacion[".moveNext"] = 1;
$tdataPPL_delitos_clasificacion[".entityType"] = 1;

$tdataPPL_delitos_clasificacion[".strOriginalTableName"] = "carcel";

	



$tdataPPL_delitos_clasificacion[".showAddInPopup"] = false;

$tdataPPL_delitos_clasificacion[".showEditInPopup"] = false;

$tdataPPL_delitos_clasificacion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPPL_delitos_clasificacion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPPL_delitos_clasificacion[".fieldsForRegister"] = array();

	$tdataPPL_delitos_clasificacion[".listAjax"] = true;

	$tdataPPL_delitos_clasificacion[".audit"] = false;

	$tdataPPL_delitos_clasificacion[".locking"] = false;



$tdataPPL_delitos_clasificacion[".list"] = true;



$tdataPPL_delitos_clasificacion[".reorderRecordsByHeader"] = true;
$tdataPPL_delitos_clasificacion[".createSortByDropdown"] = true;
$tdataPPL_delitos_clasificacion[".strSortControlSettingsJSON"] = "";




$tdataPPL_delitos_clasificacion[".import"] = true;

$tdataPPL_delitos_clasificacion[".exportTo"] = true;

$tdataPPL_delitos_clasificacion[".printFriendly"] = true;


$tdataPPL_delitos_clasificacion[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPPL_delitos_clasificacion[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPPL_delitos_clasificacion[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPPL_delitos_clasificacion[".searchSaving"] = false;
//

$tdataPPL_delitos_clasificacion[".showSearchPanel"] = true;
		$tdataPPL_delitos_clasificacion[".flexibleSearch"] = true;

$tdataPPL_delitos_clasificacion[".isUseAjaxSuggest"] = true;

$tdataPPL_delitos_clasificacion[".rowHighlite"] = true;





$tdataPPL_delitos_clasificacion[".ajaxCodeSnippetAdded"] = false;

$tdataPPL_delitos_clasificacion[".buttonsAdded"] = false;

$tdataPPL_delitos_clasificacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPPL_delitos_clasificacion[".isUseTimeForSearch"] = false;





$tdataPPL_delitos_clasificacion[".allSearchFields"] = array();
$tdataPPL_delitos_clasificacion[".filterFields"] = array();
$tdataPPL_delitos_clasificacion[".requiredSearchFields"] = array();

$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "id";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "sipe";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "afis";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "edad";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "rangoetario";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "genero";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "fecha_nac";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "edad1";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "dui";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "nivel_edu";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "educacionanalisis";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "profesion_oficio";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "estado_civil";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "ciudadania";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "mun_nacimiento";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "depto_nacim";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "direccion";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "mun_resid";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "depart_resid";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "delitosanalisis";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "sj_interno";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "fase";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "org_delictiva";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "tipo_mara";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "reincidente";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "deportado";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "direccion1";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "sector";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "celda";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "fecha_ing__sp";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "libro";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "fecha_ing__cp";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "total_delitos";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "delitos";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "delitoanalisis";
	$tdataPPL_delitos_clasificacion[".allSearchFields"][] = "sector_ppd";
	

$tdataPPL_delitos_clasificacion[".googleLikeFields"] = array();
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "id";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "sipe";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "afis";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "edad";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "rangoetario";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "genero";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "fecha_nac";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "edad1";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "dui";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "nivel_edu";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "educacionanalisis";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "profesion_oficio";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "estado_civil";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "ciudadania";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "mun_nacimiento";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "depto_nacim";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "direccion";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "mun_resid";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "depart_resid";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "delitosanalisis";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "sj_interno";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "fase";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "org_delictiva";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "tipo_mara";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "reincidente";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "deportado";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "direccion1";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "sector";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "celda";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "fecha_ing__sp";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "libro";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "fecha_ing__cp";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "total_delitos";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "delitos";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "delitoanalisis";
$tdataPPL_delitos_clasificacion[".googleLikeFields"][] = "sector_ppd";


$tdataPPL_delitos_clasificacion[".advSearchFields"] = array();
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "id";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "sipe";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "afis";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "edad";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "rangoetario";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "genero";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "fecha_nac";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "edad1";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "dui";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "nivel_edu";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "educacionanalisis";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "profesion_oficio";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "estado_civil";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "ciudadania";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "mun_nacimiento";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "depto_nacim";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "direccion";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "mun_resid";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "depart_resid";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "delitosanalisis";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "sj_interno";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "fase";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "org_delictiva";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "tipo_mara";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "reincidente";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "deportado";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "direccion1";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "sector";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "celda";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "fecha_ing__sp";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "libro";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "fecha_ing__cp";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "total_delitos";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "delitos";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "delitoanalisis";
$tdataPPL_delitos_clasificacion[".advSearchFields"][] = "sector_ppd";

$tdataPPL_delitos_clasificacion[".tableType"] = "list";

$tdataPPL_delitos_clasificacion[".printerPageOrientation"] = 0;
$tdataPPL_delitos_clasificacion[".nPrinterPageScale"] = 100;

$tdataPPL_delitos_clasificacion[".nPrinterSplitRecords"] = 40;

$tdataPPL_delitos_clasificacion[".nPrinterPDFSplitRecords"] = 40;



$tdataPPL_delitos_clasificacion[".geocodingEnabled"] = false;





$tdataPPL_delitos_clasificacion[".listGridLayout"] = 3;

$tdataPPL_delitos_clasificacion[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdataPPL_delitos_clasificacion[".pageSize"] = 10;

$tdataPPL_delitos_clasificacion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPPL_delitos_clasificacion[".strOrderBy"] = $tstrOrderBy;

$tdataPPL_delitos_clasificacion[".orderindexes"] = array();

$tdataPPL_delitos_clasificacion[".sqlHead"] = "SELECT id,  	sipe,  	afis,  	edad,  	rangoetario,  	genero,  	fecha_nac,  	edad1,  	dui,  	nivel_edu,  	educacionanalisis,  	profesion_oficio,  	estado_civil,  	ciudadania,  	mun_nacimiento,  	depto_nacim,  	direccion,  	mun_resid,  	depart_resid,  	delitosanalisis,  	sj_interno,  	fase,  	org_delictiva,  	tipo_mara,  	reincidente,  	deportado,  	direccion1,  	sector,  	celda,  	fecha_ing__sp,  	libro,  	fecha_ing__cp,  	total_delitos,  	delitos,  	delitoanalisis,  	sector_ppd";
$tdataPPL_delitos_clasificacion[".sqlFrom"] = "FROM carcel";
$tdataPPL_delitos_clasificacion[".sqlWhereExpr"] = "";
$tdataPPL_delitos_clasificacion[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPPL_delitos_clasificacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPPL_delitos_clasificacion[".arrGroupsPerPage"] = $arrGPP;

$tdataPPL_delitos_clasificacion[".highlightSearchResults"] = true;

$tableKeysPPL_delitos_clasificacion = array();
$tdataPPL_delitos_clasificacion[".Keys"] = $tableKeysPPL_delitos_clasificacion;

$tdataPPL_delitos_clasificacion[".listFields"] = array();
$tdataPPL_delitos_clasificacion[".listFields"][] = "id";
$tdataPPL_delitos_clasificacion[".listFields"][] = "sipe";
$tdataPPL_delitos_clasificacion[".listFields"][] = "afis";
$tdataPPL_delitos_clasificacion[".listFields"][] = "edad";
$tdataPPL_delitos_clasificacion[".listFields"][] = "rangoetario";
$tdataPPL_delitos_clasificacion[".listFields"][] = "genero";
$tdataPPL_delitos_clasificacion[".listFields"][] = "fecha_nac";
$tdataPPL_delitos_clasificacion[".listFields"][] = "edad1";
$tdataPPL_delitos_clasificacion[".listFields"][] = "dui";
$tdataPPL_delitos_clasificacion[".listFields"][] = "nivel_edu";
$tdataPPL_delitos_clasificacion[".listFields"][] = "educacionanalisis";
$tdataPPL_delitos_clasificacion[".listFields"][] = "profesion_oficio";
$tdataPPL_delitos_clasificacion[".listFields"][] = "estado_civil";
$tdataPPL_delitos_clasificacion[".listFields"][] = "ciudadania";
$tdataPPL_delitos_clasificacion[".listFields"][] = "mun_nacimiento";
$tdataPPL_delitos_clasificacion[".listFields"][] = "depto_nacim";
$tdataPPL_delitos_clasificacion[".listFields"][] = "direccion";
$tdataPPL_delitos_clasificacion[".listFields"][] = "mun_resid";
$tdataPPL_delitos_clasificacion[".listFields"][] = "depart_resid";
$tdataPPL_delitos_clasificacion[".listFields"][] = "delitosanalisis";
$tdataPPL_delitos_clasificacion[".listFields"][] = "sj_interno";
$tdataPPL_delitos_clasificacion[".listFields"][] = "fase";
$tdataPPL_delitos_clasificacion[".listFields"][] = "org_delictiva";
$tdataPPL_delitos_clasificacion[".listFields"][] = "tipo_mara";
$tdataPPL_delitos_clasificacion[".listFields"][] = "reincidente";
$tdataPPL_delitos_clasificacion[".listFields"][] = "deportado";
$tdataPPL_delitos_clasificacion[".listFields"][] = "direccion1";
$tdataPPL_delitos_clasificacion[".listFields"][] = "sector";
$tdataPPL_delitos_clasificacion[".listFields"][] = "celda";
$tdataPPL_delitos_clasificacion[".listFields"][] = "fecha_ing__sp";
$tdataPPL_delitos_clasificacion[".listFields"][] = "libro";
$tdataPPL_delitos_clasificacion[".listFields"][] = "fecha_ing__cp";
$tdataPPL_delitos_clasificacion[".listFields"][] = "total_delitos";
$tdataPPL_delitos_clasificacion[".listFields"][] = "delitos";
$tdataPPL_delitos_clasificacion[".listFields"][] = "delitoanalisis";
$tdataPPL_delitos_clasificacion[".listFields"][] = "sector_ppd";

$tdataPPL_delitos_clasificacion[".hideMobileList"] = array();


$tdataPPL_delitos_clasificacion[".viewFields"] = array();

$tdataPPL_delitos_clasificacion[".addFields"] = array();

$tdataPPL_delitos_clasificacion[".masterListFields"] = array();
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "id";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "sipe";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "afis";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "edad";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "rangoetario";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "genero";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "fecha_nac";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "edad1";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "dui";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "nivel_edu";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "educacionanalisis";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "profesion_oficio";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "estado_civil";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "ciudadania";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "mun_nacimiento";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "depto_nacim";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "direccion";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "mun_resid";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "depart_resid";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "delitosanalisis";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "sj_interno";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "fase";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "org_delictiva";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "tipo_mara";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "reincidente";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "deportado";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "direccion1";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "sector";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "celda";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "fecha_ing__sp";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "libro";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "fecha_ing__cp";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "total_delitos";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "delitos";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "delitoanalisis";
$tdataPPL_delitos_clasificacion[".masterListFields"][] = "sector_ppd";

$tdataPPL_delitos_clasificacion[".inlineAddFields"] = array();

$tdataPPL_delitos_clasificacion[".editFields"] = array();

$tdataPPL_delitos_clasificacion[".inlineEditFields"] = array();

$tdataPPL_delitos_clasificacion[".updateSelectedFields"] = array();


$tdataPPL_delitos_clasificacion[".exportFields"] = array();
$tdataPPL_delitos_clasificacion[".exportFields"][] = "id";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "sipe";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "afis";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "edad";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "rangoetario";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "genero";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "fecha_nac";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "edad1";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "dui";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "nivel_edu";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "educacionanalisis";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "profesion_oficio";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "estado_civil";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "ciudadania";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "mun_nacimiento";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "depto_nacim";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "direccion";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "mun_resid";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "depart_resid";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "delitosanalisis";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "sj_interno";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "fase";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "org_delictiva";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "tipo_mara";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "reincidente";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "deportado";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "direccion1";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "sector";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "celda";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "fecha_ing__sp";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "libro";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "fecha_ing__cp";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "total_delitos";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "delitos";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "delitoanalisis";
$tdataPPL_delitos_clasificacion[".exportFields"][] = "sector_ppd";

$tdataPPL_delitos_clasificacion[".importFields"] = array();
$tdataPPL_delitos_clasificacion[".importFields"][] = "id";
$tdataPPL_delitos_clasificacion[".importFields"][] = "sipe";
$tdataPPL_delitos_clasificacion[".importFields"][] = "afis";
$tdataPPL_delitos_clasificacion[".importFields"][] = "edad";
$tdataPPL_delitos_clasificacion[".importFields"][] = "rangoetario";
$tdataPPL_delitos_clasificacion[".importFields"][] = "genero";
$tdataPPL_delitos_clasificacion[".importFields"][] = "fecha_nac";
$tdataPPL_delitos_clasificacion[".importFields"][] = "edad1";
$tdataPPL_delitos_clasificacion[".importFields"][] = "dui";
$tdataPPL_delitos_clasificacion[".importFields"][] = "nivel_edu";
$tdataPPL_delitos_clasificacion[".importFields"][] = "educacionanalisis";
$tdataPPL_delitos_clasificacion[".importFields"][] = "profesion_oficio";
$tdataPPL_delitos_clasificacion[".importFields"][] = "estado_civil";
$tdataPPL_delitos_clasificacion[".importFields"][] = "ciudadania";
$tdataPPL_delitos_clasificacion[".importFields"][] = "mun_nacimiento";
$tdataPPL_delitos_clasificacion[".importFields"][] = "depto_nacim";
$tdataPPL_delitos_clasificacion[".importFields"][] = "direccion";
$tdataPPL_delitos_clasificacion[".importFields"][] = "mun_resid";
$tdataPPL_delitos_clasificacion[".importFields"][] = "depart_resid";
$tdataPPL_delitos_clasificacion[".importFields"][] = "delitosanalisis";
$tdataPPL_delitos_clasificacion[".importFields"][] = "sj_interno";
$tdataPPL_delitos_clasificacion[".importFields"][] = "fase";
$tdataPPL_delitos_clasificacion[".importFields"][] = "org_delictiva";
$tdataPPL_delitos_clasificacion[".importFields"][] = "tipo_mara";
$tdataPPL_delitos_clasificacion[".importFields"][] = "reincidente";
$tdataPPL_delitos_clasificacion[".importFields"][] = "deportado";
$tdataPPL_delitos_clasificacion[".importFields"][] = "direccion1";
$tdataPPL_delitos_clasificacion[".importFields"][] = "sector";
$tdataPPL_delitos_clasificacion[".importFields"][] = "celda";
$tdataPPL_delitos_clasificacion[".importFields"][] = "fecha_ing__sp";
$tdataPPL_delitos_clasificacion[".importFields"][] = "libro";
$tdataPPL_delitos_clasificacion[".importFields"][] = "fecha_ing__cp";
$tdataPPL_delitos_clasificacion[".importFields"][] = "total_delitos";
$tdataPPL_delitos_clasificacion[".importFields"][] = "delitos";
$tdataPPL_delitos_clasificacion[".importFields"][] = "delitoanalisis";
$tdataPPL_delitos_clasificacion[".importFields"][] = "sector_ppd";

$tdataPPL_delitos_clasificacion[".printFields"] = array();
$tdataPPL_delitos_clasificacion[".printFields"][] = "id";
$tdataPPL_delitos_clasificacion[".printFields"][] = "sipe";
$tdataPPL_delitos_clasificacion[".printFields"][] = "afis";
$tdataPPL_delitos_clasificacion[".printFields"][] = "edad";
$tdataPPL_delitos_clasificacion[".printFields"][] = "rangoetario";
$tdataPPL_delitos_clasificacion[".printFields"][] = "genero";
$tdataPPL_delitos_clasificacion[".printFields"][] = "fecha_nac";
$tdataPPL_delitos_clasificacion[".printFields"][] = "edad1";
$tdataPPL_delitos_clasificacion[".printFields"][] = "dui";
$tdataPPL_delitos_clasificacion[".printFields"][] = "nivel_edu";
$tdataPPL_delitos_clasificacion[".printFields"][] = "educacionanalisis";
$tdataPPL_delitos_clasificacion[".printFields"][] = "profesion_oficio";
$tdataPPL_delitos_clasificacion[".printFields"][] = "estado_civil";
$tdataPPL_delitos_clasificacion[".printFields"][] = "ciudadania";
$tdataPPL_delitos_clasificacion[".printFields"][] = "mun_nacimiento";
$tdataPPL_delitos_clasificacion[".printFields"][] = "depto_nacim";
$tdataPPL_delitos_clasificacion[".printFields"][] = "direccion";
$tdataPPL_delitos_clasificacion[".printFields"][] = "mun_resid";
$tdataPPL_delitos_clasificacion[".printFields"][] = "depart_resid";
$tdataPPL_delitos_clasificacion[".printFields"][] = "delitosanalisis";
$tdataPPL_delitos_clasificacion[".printFields"][] = "sj_interno";
$tdataPPL_delitos_clasificacion[".printFields"][] = "fase";
$tdataPPL_delitos_clasificacion[".printFields"][] = "org_delictiva";
$tdataPPL_delitos_clasificacion[".printFields"][] = "tipo_mara";
$tdataPPL_delitos_clasificacion[".printFields"][] = "reincidente";
$tdataPPL_delitos_clasificacion[".printFields"][] = "deportado";
$tdataPPL_delitos_clasificacion[".printFields"][] = "direccion1";
$tdataPPL_delitos_clasificacion[".printFields"][] = "sector";
$tdataPPL_delitos_clasificacion[".printFields"][] = "celda";
$tdataPPL_delitos_clasificacion[".printFields"][] = "fecha_ing__sp";
$tdataPPL_delitos_clasificacion[".printFields"][] = "libro";
$tdataPPL_delitos_clasificacion[".printFields"][] = "fecha_ing__cp";
$tdataPPL_delitos_clasificacion[".printFields"][] = "total_delitos";
$tdataPPL_delitos_clasificacion[".printFields"][] = "delitos";
$tdataPPL_delitos_clasificacion[".printFields"][] = "delitoanalisis";
$tdataPPL_delitos_clasificacion[".printFields"][] = "sector_ppd";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["id"] = $fdata;
//	sipe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sipe";
	$fdata["GoodName"] = "sipe";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","sipe");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["sipe"] = $fdata;
//	afis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "afis";
	$fdata["GoodName"] = "afis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","afis");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["afis"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","edad");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["edad"] = $fdata;
//	rangoetario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rangoetario";
	$fdata["GoodName"] = "rangoetario";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","rangoetario");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["rangoetario"] = $fdata;
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","genero");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["genero"] = $fdata;
//	fecha_nac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fecha_nac";
	$fdata["GoodName"] = "fecha_nac";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","fecha_nac");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["fecha_nac"] = $fdata;
//	edad1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "edad1";
	$fdata["GoodName"] = "edad1";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","edad1");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["edad1"] = $fdata;
//	dui
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dui";
	$fdata["GoodName"] = "dui";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","dui");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["dui"] = $fdata;
//	nivel_edu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "nivel_edu";
	$fdata["GoodName"] = "nivel_edu";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","nivel_edu");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["nivel_edu"] = $fdata;
//	educacionanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "educacionanalisis";
	$fdata["GoodName"] = "educacionanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","educacionanalisis");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["educacionanalisis"] = $fdata;
//	profesion_oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "profesion_oficio";
	$fdata["GoodName"] = "profesion_oficio";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","profesion_oficio");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["profesion_oficio"] = $fdata;
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","estado_civil");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["estado_civil"] = $fdata;
//	ciudadania
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ciudadania";
	$fdata["GoodName"] = "ciudadania";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","ciudadania");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["ciudadania"] = $fdata;
//	mun_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "mun_nacimiento";
	$fdata["GoodName"] = "mun_nacimiento";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","mun_nacimiento");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["mun_nacimiento"] = $fdata;
//	depto_nacim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "depto_nacim";
	$fdata["GoodName"] = "depto_nacim";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","depto_nacim");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["depto_nacim"] = $fdata;
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","direccion");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["direccion"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","mun_resid");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["mun_resid"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","depart_resid");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["depart_resid"] = $fdata;
//	delitosanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "delitosanalisis";
	$fdata["GoodName"] = "delitosanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","delitosanalisis");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["delitosanalisis"] = $fdata;
//	sj_interno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "sj_interno";
	$fdata["GoodName"] = "sj_interno";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","sj_interno");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["sj_interno"] = $fdata;
//	fase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "fase";
	$fdata["GoodName"] = "fase";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","fase");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["fase"] = $fdata;
//	org_delictiva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "org_delictiva";
	$fdata["GoodName"] = "org_delictiva";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","org_delictiva");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["org_delictiva"] = $fdata;
//	tipo_mara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "tipo_mara";
	$fdata["GoodName"] = "tipo_mara";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","tipo_mara");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["tipo_mara"] = $fdata;
//	reincidente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "reincidente";
	$fdata["GoodName"] = "reincidente";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","reincidente");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["reincidente"] = $fdata;
//	deportado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "deportado";
	$fdata["GoodName"] = "deportado";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","deportado");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["deportado"] = $fdata;
//	direccion1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "direccion1";
	$fdata["GoodName"] = "direccion1";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","direccion1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["direccion1"] = $fdata;
//	sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "sector";
	$fdata["GoodName"] = "sector";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","sector");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["sector"] = $fdata;
//	celda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "celda";
	$fdata["GoodName"] = "celda";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","celda");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["celda"] = $fdata;
//	fecha_ing__sp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "fecha_ing__sp";
	$fdata["GoodName"] = "fecha_ing__sp";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","fecha_ing__sp");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["fecha_ing__sp"] = $fdata;
//	libro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "libro";
	$fdata["GoodName"] = "libro";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","libro");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["libro"] = $fdata;
//	fecha_ing__cp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "fecha_ing__cp";
	$fdata["GoodName"] = "fecha_ing__cp";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","fecha_ing__cp");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["fecha_ing__cp"] = $fdata;
//	total_delitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "total_delitos";
	$fdata["GoodName"] = "total_delitos";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","total_delitos");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["total_delitos"] = $fdata;
//	delitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "delitos";
	$fdata["GoodName"] = "delitos";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","delitos");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["delitos"] = $fdata;
//	delitoanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "delitoanalisis";
	$fdata["GoodName"] = "delitoanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","delitoanalisis");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["delitoanalisis"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos_clasificacion","sector_ppd");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPPL_delitos_clasificacion["sector_ppd"] = $fdata;


$tables_data["PPL delitos_clasificacion"]=&$tdataPPL_delitos_clasificacion;
$field_labels["PPL_delitos_clasificacion"] = &$fieldLabelsPPL_delitos_clasificacion;
$fieldToolTips["PPL_delitos_clasificacion"] = &$fieldToolTipsPPL_delitos_clasificacion;
$placeHolders["PPL_delitos_clasificacion"] = &$placeHoldersPPL_delitos_clasificacion;
$page_titles["PPL_delitos_clasificacion"] = &$pageTitlesPPL_delitos_clasificacion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PPL delitos_clasificacion"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PPL delitos_clasificacion"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PPL_delitos_clasificacion()
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
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "PPL delitos_clasificacion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sipe",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto8["m_sql"] = "sipe";
$proto8["m_srcTableName"] = "PPL delitos_clasificacion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "afis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto10["m_sql"] = "afis";
$proto10["m_srcTableName"] = "PPL delitos_clasificacion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "edad",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto12["m_sql"] = "edad";
$proto12["m_srcTableName"] = "PPL delitos_clasificacion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto14["m_sql"] = "rangoetario";
$proto14["m_srcTableName"] = "PPL delitos_clasificacion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto16["m_sql"] = "genero";
$proto16["m_srcTableName"] = "PPL delitos_clasificacion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_nac",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto18["m_sql"] = "fecha_nac";
$proto18["m_srcTableName"] = "PPL delitos_clasificacion";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "edad1",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto20["m_sql"] = "edad1";
$proto20["m_srcTableName"] = "PPL delitos_clasificacion";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dui",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto22["m_sql"] = "dui";
$proto22["m_srcTableName"] = "PPL delitos_clasificacion";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "nivel_edu",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto24["m_sql"] = "nivel_edu";
$proto24["m_srcTableName"] = "PPL delitos_clasificacion";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "educacionanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto26["m_sql"] = "educacionanalisis";
$proto26["m_srcTableName"] = "PPL delitos_clasificacion";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "profesion_oficio",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto28["m_sql"] = "profesion_oficio";
$proto28["m_srcTableName"] = "PPL delitos_clasificacion";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto30["m_sql"] = "estado_civil";
$proto30["m_srcTableName"] = "PPL delitos_clasificacion";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ciudadania",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto32["m_sql"] = "ciudadania";
$proto32["m_srcTableName"] = "PPL delitos_clasificacion";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_nacimiento",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto34["m_sql"] = "mun_nacimiento";
$proto34["m_srcTableName"] = "PPL delitos_clasificacion";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "depto_nacim",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto36["m_sql"] = "depto_nacim";
$proto36["m_srcTableName"] = "PPL delitos_clasificacion";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto38["m_sql"] = "direccion";
$proto38["m_srcTableName"] = "PPL delitos_clasificacion";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto40["m_sql"] = "mun_resid";
$proto40["m_srcTableName"] = "PPL delitos_clasificacion";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto42["m_sql"] = "depart_resid";
$proto42["m_srcTableName"] = "PPL delitos_clasificacion";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "delitosanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto44["m_sql"] = "delitosanalisis";
$proto44["m_srcTableName"] = "PPL delitos_clasificacion";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "sj_interno",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto46["m_sql"] = "sj_interno";
$proto46["m_srcTableName"] = "PPL delitos_clasificacion";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "fase",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto48["m_sql"] = "fase";
$proto48["m_srcTableName"] = "PPL delitos_clasificacion";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto50["m_sql"] = "org_delictiva";
$proto50["m_srcTableName"] = "PPL delitos_clasificacion";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto52["m_sql"] = "tipo_mara";
$proto52["m_srcTableName"] = "PPL delitos_clasificacion";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "reincidente",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto54["m_sql"] = "reincidente";
$proto54["m_srcTableName"] = "PPL delitos_clasificacion";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "deportado",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto56["m_sql"] = "deportado";
$proto56["m_srcTableName"] = "PPL delitos_clasificacion";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion1",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto58["m_sql"] = "direccion1";
$proto58["m_srcTableName"] = "PPL delitos_clasificacion";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "sector",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto60["m_sql"] = "sector";
$proto60["m_srcTableName"] = "PPL delitos_clasificacion";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "celda",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto62["m_sql"] = "celda";
$proto62["m_srcTableName"] = "PPL delitos_clasificacion";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ing__sp",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto64["m_sql"] = "fecha_ing__sp";
$proto64["m_srcTableName"] = "PPL delitos_clasificacion";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "libro",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto66["m_sql"] = "libro";
$proto66["m_srcTableName"] = "PPL delitos_clasificacion";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ing__cp",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto68["m_sql"] = "fecha_ing__cp";
$proto68["m_srcTableName"] = "PPL delitos_clasificacion";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "total_delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto70["m_sql"] = "total_delitos";
$proto70["m_srcTableName"] = "PPL delitos_clasificacion";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto72["m_sql"] = "delitos";
$proto72["m_srcTableName"] = "PPL delitos_clasificacion";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto74["m_sql"] = "delitoanalisis";
$proto74["m_srcTableName"] = "PPL delitos_clasificacion";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos_clasificacion"
));

$proto76["m_sql"] = "sector_ppd";
$proto76["m_srcTableName"] = "PPL delitos_clasificacion";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto78=array();
$proto78["m_link"] = "SQLL_MAIN";
			$proto79=array();
$proto79["m_strName"] = "carcel";
$proto79["m_srcTableName"] = "PPL delitos_clasificacion";
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
$proto78["m_srcTableName"] = "PPL delitos_clasificacion";
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
$proto0["m_srcTableName"]="PPL delitos_clasificacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PPL_delitos_clasificacion = createSqlQuery_PPL_delitos_clasificacion();


	
		;

																																				

$tdataPPL_delitos_clasificacion[".sqlquery"] = $queryData_PPL_delitos_clasificacion;

$tableEvents["PPL delitos_clasificacion"] = new eventsBase;
$tdataPPL_delitos_clasificacion[".hasEvents"] = false;

?>