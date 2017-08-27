<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacarcel_clasificacion_lugar = array();
	$tdatacarcel_clasificacion_lugar[".truncateText"] = true;
	$tdatacarcel_clasificacion_lugar[".NumberOfChars"] = 80;
	$tdatacarcel_clasificacion_lugar[".ShortName"] = "carcel_clasificacion_lugar";
	$tdatacarcel_clasificacion_lugar[".OwnerID"] = "";
	$tdatacarcel_clasificacion_lugar[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelscarcel_clasificacion_lugar = array();
$fieldToolTipscarcel_clasificacion_lugar = array();
$pageTitlescarcel_clasificacion_lugar = array();
$placeHolderscarcel_clasificacion_lugar = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscarcel_clasificacion_lugar["Spanish"] = array();
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"] = array();
	$placeHolderscarcel_clasificacion_lugar["Spanish"] = array();
	$pageTitlescarcel_clasificacion_lugar["Spanish"] = array();
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["id"] = "Id";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["id"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["id"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["sipe"] = "Sipe";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["sipe"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["sipe"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["afis"] = "Afis";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["afis"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["afis"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["edad"] = "Edad";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["edad"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["edad"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["rangoetario"] = "Rangoetario";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["rangoetario"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["rangoetario"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["genero"] = "Genero";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["genero"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["genero"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["fecha_nac"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["fecha_nac"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["edad1"] = "Edad1";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["edad1"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["edad1"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["dui"] = "Dui";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["dui"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["dui"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["profesion_oficio"] = "Profesion Oficio";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["profesion_oficio"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["profesion_oficio"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["estado_civil"] = "Estado Civil";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["estado_civil"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["estado_civil"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["ciudadania"] = "Ciudadania";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["ciudadania"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["ciudadania"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["mun_nacimiento"] = "Mun Nacimiento";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["mun_nacimiento"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["mun_nacimiento"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["depto_nacim"] = "Depto Nacim";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["depto_nacim"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["depto_nacim"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["direccion"] = "Direccion";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["direccion"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["direccion"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["mun_resid"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["mun_resid"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["depart_resid"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["depart_resid"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["sj_interno"] = "Sj Interno";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["sj_interno"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["sj_interno"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["fase"] = "Fase";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["fase"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["fase"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["org_delictiva"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["org_delictiva"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["tipo_mara"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["tipo_mara"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["reincidente"] = "Reincidente";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["reincidente"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["reincidente"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["deportado"] = "Deportado";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["deportado"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["deportado"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["direccion1"] = "Direccion1";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["direccion1"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["direccion1"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["sector"] = "Sector";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["sector"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["sector"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["celda"] = "Celda";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["celda"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["celda"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["fecha_ing__sp"] = "Fecha Ing  Sp";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["fecha_ing__sp"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["fecha_ing__sp"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["libro"] = "Libro";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["libro"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["libro"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["fecha_ing__cp"] = "Fecha Ing  Cp";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["fecha_ing__cp"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["fecha_ing__cp"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["total_delitos"] = "Total Delitos";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["total_delitos"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["total_delitos"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["delitos"] = "Delitos";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["delitos"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["delitos"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["delitoanalisis"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["delitoanalisis"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["sector_ppd"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["sector_ppd"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["nivel_edu"] = "Nivel Edu";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["nivel_edu"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["nivel_edu"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["educacionanalisis"] = "Educacionanalisis";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["educacionanalisis"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["educacionanalisis"] = "";
	$fieldLabelscarcel_clasificacion_lugar["Spanish"]["delitosanalisis"] = "Delitosanalisis";
	$fieldToolTipscarcel_clasificacion_lugar["Spanish"]["delitosanalisis"] = "";
	$placeHolderscarcel_clasificacion_lugar["Spanish"]["delitosanalisis"] = "";
	if (count($fieldToolTipscarcel_clasificacion_lugar["Spanish"]))
		$tdatacarcel_clasificacion_lugar[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscarcel_clasificacion_lugar["English"] = array();
	$fieldToolTipscarcel_clasificacion_lugar["English"] = array();
	$placeHolderscarcel_clasificacion_lugar["English"] = array();
	$pageTitlescarcel_clasificacion_lugar["English"] = array();
	$fieldLabelscarcel_clasificacion_lugar["English"]["id"] = "Id";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["id"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["id"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["sipe"] = "Sipe";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["sipe"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["sipe"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["afis"] = "Afis";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["afis"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["afis"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["edad"] = "Edad";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["edad"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["edad"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["rangoetario"] = "Rangoetario";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["rangoetario"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["rangoetario"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["genero"] = "Genero";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["genero"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["genero"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["fecha_nac"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["fecha_nac"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["edad1"] = "Edad1";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["edad1"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["edad1"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["dui"] = "Dui";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["dui"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["dui"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["profesion_oficio"] = "Profesion Oficio";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["profesion_oficio"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["profesion_oficio"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["estado_civil"] = "Estado Civil";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["estado_civil"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["estado_civil"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["ciudadania"] = "Ciudadania";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["ciudadania"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["ciudadania"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["mun_nacimiento"] = "Mun Nacimiento";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["mun_nacimiento"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["mun_nacimiento"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["depto_nacim"] = "Depto Nacim";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["depto_nacim"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["depto_nacim"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["direccion"] = "Direccion";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["direccion"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["direccion"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["mun_resid"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["mun_resid"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["depart_resid"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["depart_resid"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["sj_interno"] = "Sj Interno";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["sj_interno"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["sj_interno"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["fase"] = "Fase";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["fase"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["fase"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["org_delictiva"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["org_delictiva"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["tipo_mara"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["tipo_mara"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["reincidente"] = "Reincidente";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["reincidente"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["reincidente"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["deportado"] = "Deportado";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["deportado"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["deportado"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["direccion1"] = "Direccion1";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["direccion1"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["direccion1"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["sector"] = "Sector";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["sector"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["sector"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["celda"] = "Celda";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["celda"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["celda"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["fecha_ing__sp"] = "Fecha Ing  Sp";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["fecha_ing__sp"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["fecha_ing__sp"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["libro"] = "Libro";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["libro"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["libro"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["fecha_ing__cp"] = "Fecha Ing  Cp";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["fecha_ing__cp"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["fecha_ing__cp"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["total_delitos"] = "Total Delitos";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["total_delitos"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["total_delitos"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["delitos"] = "Delitos";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["delitos"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["delitos"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["delitoanalisis"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["delitoanalisis"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["sector_ppd"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["sector_ppd"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["nivel_edu"] = "Nivel Edu";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["nivel_edu"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["nivel_edu"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["educacionanalisis"] = "Educacionanalisis";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["educacionanalisis"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["educacionanalisis"] = "";
	$fieldLabelscarcel_clasificacion_lugar["English"]["delitosanalisis"] = "Delitosanalisis";
	$fieldToolTipscarcel_clasificacion_lugar["English"]["delitosanalisis"] = "";
	$placeHolderscarcel_clasificacion_lugar["English"]["delitosanalisis"] = "";
	if (count($fieldToolTipscarcel_clasificacion_lugar["English"]))
		$tdatacarcel_clasificacion_lugar[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscarcel_clasificacion_lugar[""] = array();
	$fieldToolTipscarcel_clasificacion_lugar[""] = array();
	$placeHolderscarcel_clasificacion_lugar[""] = array();
	$pageTitlescarcel_clasificacion_lugar[""] = array();
	if (count($fieldToolTipscarcel_clasificacion_lugar[""]))
		$tdatacarcel_clasificacion_lugar[".isUseToolTips"] = true;
}





$tdatacarcel_clasificacion_lugar[".shortTableName"] = "carcel_clasificacion_lugar";
$tdatacarcel_clasificacion_lugar[".nSecOptions"] = 0;
$tdatacarcel_clasificacion_lugar[".recsPerRowPrint"] = 1;
$tdatacarcel_clasificacion_lugar[".mainTableOwnerID"] = "";
$tdatacarcel_clasificacion_lugar[".moveNext"] = 1;
$tdatacarcel_clasificacion_lugar[".entityType"] = 1;

$tdatacarcel_clasificacion_lugar[".strOriginalTableName"] = "carcel";

	



$tdatacarcel_clasificacion_lugar[".showAddInPopup"] = false;

$tdatacarcel_clasificacion_lugar[".showEditInPopup"] = false;

$tdatacarcel_clasificacion_lugar[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacarcel_clasificacion_lugar[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacarcel_clasificacion_lugar[".fieldsForRegister"] = array();

	$tdatacarcel_clasificacion_lugar[".listAjax"] = true;

	$tdatacarcel_clasificacion_lugar[".audit"] = false;

	$tdatacarcel_clasificacion_lugar[".locking"] = false;



$tdatacarcel_clasificacion_lugar[".list"] = true;



$tdatacarcel_clasificacion_lugar[".reorderRecordsByHeader"] = true;
$tdatacarcel_clasificacion_lugar[".createSortByDropdown"] = true;
$tdatacarcel_clasificacion_lugar[".strSortControlSettingsJSON"] = "";




$tdatacarcel_clasificacion_lugar[".import"] = true;

$tdatacarcel_clasificacion_lugar[".exportTo"] = true;

$tdatacarcel_clasificacion_lugar[".printFriendly"] = true;


$tdatacarcel_clasificacion_lugar[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacarcel_clasificacion_lugar[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacarcel_clasificacion_lugar[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacarcel_clasificacion_lugar[".searchSaving"] = false;
//

$tdatacarcel_clasificacion_lugar[".showSearchPanel"] = true;
		$tdatacarcel_clasificacion_lugar[".flexibleSearch"] = true;

$tdatacarcel_clasificacion_lugar[".isUseAjaxSuggest"] = true;

$tdatacarcel_clasificacion_lugar[".rowHighlite"] = true;





$tdatacarcel_clasificacion_lugar[".ajaxCodeSnippetAdded"] = false;

$tdatacarcel_clasificacion_lugar[".buttonsAdded"] = false;

$tdatacarcel_clasificacion_lugar[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacarcel_clasificacion_lugar[".isUseTimeForSearch"] = false;





$tdatacarcel_clasificacion_lugar[".allSearchFields"] = array();
$tdatacarcel_clasificacion_lugar[".filterFields"] = array();
$tdatacarcel_clasificacion_lugar[".requiredSearchFields"] = array();

$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "id";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "sipe";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "afis";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "edad";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "rangoetario";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "genero";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "fecha_nac";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "edad1";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "dui";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "nivel_edu";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "educacionanalisis";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "profesion_oficio";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "estado_civil";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "ciudadania";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "mun_nacimiento";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "depto_nacim";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "direccion";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "mun_resid";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "depart_resid";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "delitosanalisis";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "sj_interno";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "fase";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "org_delictiva";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "tipo_mara";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "reincidente";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "deportado";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "direccion1";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "sector";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "celda";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "fecha_ing__sp";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "libro";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "fecha_ing__cp";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "total_delitos";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "delitos";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "delitoanalisis";
	$tdatacarcel_clasificacion_lugar[".allSearchFields"][] = "sector_ppd";
	
$tdatacarcel_clasificacion_lugar[".filterFields"][] = "mun_resid";
$tdatacarcel_clasificacion_lugar[".filterFields"][] = "depart_resid";

$tdatacarcel_clasificacion_lugar[".googleLikeFields"] = array();
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "id";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "sipe";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "afis";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "edad";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "rangoetario";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "genero";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "fecha_nac";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "edad1";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "dui";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "nivel_edu";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "educacionanalisis";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "profesion_oficio";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "estado_civil";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "ciudadania";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "mun_nacimiento";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "depto_nacim";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "direccion";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "mun_resid";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "depart_resid";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "delitosanalisis";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "sj_interno";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "fase";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "org_delictiva";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "tipo_mara";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "reincidente";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "deportado";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "direccion1";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "sector";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "celda";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "fecha_ing__sp";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "libro";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "fecha_ing__cp";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "total_delitos";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "delitos";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "delitoanalisis";
$tdatacarcel_clasificacion_lugar[".googleLikeFields"][] = "sector_ppd";


$tdatacarcel_clasificacion_lugar[".advSearchFields"] = array();
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "id";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "sipe";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "afis";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "edad";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "rangoetario";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "genero";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "fecha_nac";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "edad1";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "dui";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "nivel_edu";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "educacionanalisis";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "profesion_oficio";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "estado_civil";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "ciudadania";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "mun_nacimiento";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "depto_nacim";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "direccion";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "mun_resid";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "depart_resid";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "delitosanalisis";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "sj_interno";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "fase";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "org_delictiva";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "tipo_mara";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "reincidente";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "deportado";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "direccion1";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "sector";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "celda";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "fecha_ing__sp";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "libro";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "fecha_ing__cp";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "total_delitos";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "delitos";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "delitoanalisis";
$tdatacarcel_clasificacion_lugar[".advSearchFields"][] = "sector_ppd";

$tdatacarcel_clasificacion_lugar[".tableType"] = "list";

$tdatacarcel_clasificacion_lugar[".printerPageOrientation"] = 0;
$tdatacarcel_clasificacion_lugar[".nPrinterPageScale"] = 100;

$tdatacarcel_clasificacion_lugar[".nPrinterSplitRecords"] = 40;

$tdatacarcel_clasificacion_lugar[".nPrinterPDFSplitRecords"] = 40;



$tdatacarcel_clasificacion_lugar[".geocodingEnabled"] = false;





$tdatacarcel_clasificacion_lugar[".listGridLayout"] = 3;

$tdatacarcel_clasificacion_lugar[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatacarcel_clasificacion_lugar[".pageSize"] = 10;

$tdatacarcel_clasificacion_lugar[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacarcel_clasificacion_lugar[".strOrderBy"] = $tstrOrderBy;

$tdatacarcel_clasificacion_lugar[".orderindexes"] = array();

$tdatacarcel_clasificacion_lugar[".sqlHead"] = "SELECT id,  	sipe,  	afis,  	edad,  	rangoetario,  	genero,  	fecha_nac,  	edad1,  	dui,  	nivel_edu,  	educacionanalisis,  	profesion_oficio,  	estado_civil,  	ciudadania,  	mun_nacimiento,  	depto_nacim,  	direccion,  	mun_resid,  	depart_resid,  	delitosanalisis,  	sj_interno,  	fase,  	org_delictiva,  	tipo_mara,  	reincidente,  	deportado,  	direccion1,  	sector,  	celda,  	fecha_ing__sp,  	libro,  	fecha_ing__cp,  	total_delitos,  	delitos,  	delitoanalisis,  	sector_ppd";
$tdatacarcel_clasificacion_lugar[".sqlFrom"] = "FROM carcel";
$tdatacarcel_clasificacion_lugar[".sqlWhereExpr"] = "";
$tdatacarcel_clasificacion_lugar[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarcel_clasificacion_lugar[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarcel_clasificacion_lugar[".arrGroupsPerPage"] = $arrGPP;

$tdatacarcel_clasificacion_lugar[".highlightSearchResults"] = true;

$tableKeyscarcel_clasificacion_lugar = array();
$tdatacarcel_clasificacion_lugar[".Keys"] = $tableKeyscarcel_clasificacion_lugar;

$tdatacarcel_clasificacion_lugar[".listFields"] = array();
$tdatacarcel_clasificacion_lugar[".listFields"][] = "id";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "sipe";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "afis";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "edad";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "rangoetario";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "genero";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "fecha_nac";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "edad1";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "dui";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "nivel_edu";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "educacionanalisis";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "profesion_oficio";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "estado_civil";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "ciudadania";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "mun_nacimiento";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "depto_nacim";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "direccion";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "mun_resid";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "depart_resid";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "delitosanalisis";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "sj_interno";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "fase";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "org_delictiva";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "tipo_mara";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "reincidente";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "deportado";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "direccion1";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "sector";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "celda";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "fecha_ing__sp";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "libro";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "fecha_ing__cp";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "total_delitos";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "delitos";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "delitoanalisis";
$tdatacarcel_clasificacion_lugar[".listFields"][] = "sector_ppd";

$tdatacarcel_clasificacion_lugar[".hideMobileList"] = array();


$tdatacarcel_clasificacion_lugar[".viewFields"] = array();

$tdatacarcel_clasificacion_lugar[".addFields"] = array();

$tdatacarcel_clasificacion_lugar[".masterListFields"] = array();
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "id";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "sipe";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "afis";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "edad";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "rangoetario";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "genero";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "fecha_nac";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "edad1";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "dui";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "nivel_edu";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "educacionanalisis";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "profesion_oficio";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "estado_civil";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "ciudadania";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "mun_nacimiento";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "depto_nacim";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "direccion";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "mun_resid";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "depart_resid";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "delitosanalisis";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "sj_interno";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "fase";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "org_delictiva";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "tipo_mara";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "reincidente";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "deportado";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "direccion1";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "sector";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "celda";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "fecha_ing__sp";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "libro";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "fecha_ing__cp";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "total_delitos";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "delitos";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "delitoanalisis";
$tdatacarcel_clasificacion_lugar[".masterListFields"][] = "sector_ppd";

$tdatacarcel_clasificacion_lugar[".inlineAddFields"] = array();

$tdatacarcel_clasificacion_lugar[".editFields"] = array();

$tdatacarcel_clasificacion_lugar[".inlineEditFields"] = array();

$tdatacarcel_clasificacion_lugar[".updateSelectedFields"] = array();


$tdatacarcel_clasificacion_lugar[".exportFields"] = array();
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "id";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "sipe";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "afis";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "edad";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "rangoetario";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "genero";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "fecha_nac";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "edad1";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "dui";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "nivel_edu";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "educacionanalisis";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "profesion_oficio";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "estado_civil";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "ciudadania";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "mun_nacimiento";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "depto_nacim";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "direccion";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "mun_resid";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "depart_resid";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "delitosanalisis";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "sj_interno";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "fase";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "org_delictiva";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "tipo_mara";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "reincidente";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "deportado";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "direccion1";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "sector";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "celda";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "fecha_ing__sp";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "libro";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "fecha_ing__cp";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "total_delitos";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "delitos";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "delitoanalisis";
$tdatacarcel_clasificacion_lugar[".exportFields"][] = "sector_ppd";

$tdatacarcel_clasificacion_lugar[".importFields"] = array();
$tdatacarcel_clasificacion_lugar[".importFields"][] = "id";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "sipe";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "afis";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "edad";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "rangoetario";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "genero";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "fecha_nac";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "edad1";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "dui";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "nivel_edu";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "educacionanalisis";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "profesion_oficio";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "estado_civil";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "ciudadania";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "mun_nacimiento";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "depto_nacim";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "direccion";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "mun_resid";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "depart_resid";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "delitosanalisis";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "sj_interno";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "fase";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "org_delictiva";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "tipo_mara";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "reincidente";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "deportado";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "direccion1";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "sector";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "celda";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "fecha_ing__sp";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "libro";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "fecha_ing__cp";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "total_delitos";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "delitos";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "delitoanalisis";
$tdatacarcel_clasificacion_lugar[".importFields"][] = "sector_ppd";

$tdatacarcel_clasificacion_lugar[".printFields"] = array();
$tdatacarcel_clasificacion_lugar[".printFields"][] = "id";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "sipe";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "afis";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "edad";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "rangoetario";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "genero";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "fecha_nac";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "edad1";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "dui";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "nivel_edu";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "educacionanalisis";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "profesion_oficio";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "estado_civil";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "ciudadania";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "mun_nacimiento";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "depto_nacim";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "direccion";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "mun_resid";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "depart_resid";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "delitosanalisis";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "sj_interno";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "fase";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "org_delictiva";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "tipo_mara";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "reincidente";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "deportado";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "direccion1";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "sector";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "celda";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "fecha_ing__sp";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "libro";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "fecha_ing__cp";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "total_delitos";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "delitos";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "delitoanalisis";
$tdatacarcel_clasificacion_lugar[".printFields"][] = "sector_ppd";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","id");
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




	$tdatacarcel_clasificacion_lugar["id"] = $fdata;
//	sipe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sipe";
	$fdata["GoodName"] = "sipe";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","sipe");
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




	$tdatacarcel_clasificacion_lugar["sipe"] = $fdata;
//	afis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "afis";
	$fdata["GoodName"] = "afis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","afis");
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




	$tdatacarcel_clasificacion_lugar["afis"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","edad");
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




	$tdatacarcel_clasificacion_lugar["edad"] = $fdata;
//	rangoetario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rangoetario";
	$fdata["GoodName"] = "rangoetario";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","rangoetario");
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




	$tdatacarcel_clasificacion_lugar["rangoetario"] = $fdata;
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","genero");
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




	$tdatacarcel_clasificacion_lugar["genero"] = $fdata;
//	fecha_nac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fecha_nac";
	$fdata["GoodName"] = "fecha_nac";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","fecha_nac");
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




	$tdatacarcel_clasificacion_lugar["fecha_nac"] = $fdata;
//	edad1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "edad1";
	$fdata["GoodName"] = "edad1";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","edad1");
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




	$tdatacarcel_clasificacion_lugar["edad1"] = $fdata;
//	dui
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dui";
	$fdata["GoodName"] = "dui";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","dui");
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




	$tdatacarcel_clasificacion_lugar["dui"] = $fdata;
//	nivel_edu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "nivel_edu";
	$fdata["GoodName"] = "nivel_edu";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","nivel_edu");
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




	$tdatacarcel_clasificacion_lugar["nivel_edu"] = $fdata;
//	educacionanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "educacionanalisis";
	$fdata["GoodName"] = "educacionanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","educacionanalisis");
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




	$tdatacarcel_clasificacion_lugar["educacionanalisis"] = $fdata;
//	profesion_oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "profesion_oficio";
	$fdata["GoodName"] = "profesion_oficio";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","profesion_oficio");
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




	$tdatacarcel_clasificacion_lugar["profesion_oficio"] = $fdata;
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","estado_civil");
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




	$tdatacarcel_clasificacion_lugar["estado_civil"] = $fdata;
//	ciudadania
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ciudadania";
	$fdata["GoodName"] = "ciudadania";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","ciudadania");
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




	$tdatacarcel_clasificacion_lugar["ciudadania"] = $fdata;
//	mun_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "mun_nacimiento";
	$fdata["GoodName"] = "mun_nacimiento";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","mun_nacimiento");
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




	$tdatacarcel_clasificacion_lugar["mun_nacimiento"] = $fdata;
//	depto_nacim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "depto_nacim";
	$fdata["GoodName"] = "depto_nacim";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","depto_nacim");
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




	$tdatacarcel_clasificacion_lugar["depto_nacim"] = $fdata;
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","direccion");
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




	$tdatacarcel_clasificacion_lugar["direccion"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","mun_resid");
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatacarcel_clasificacion_lugar["mun_resid"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","depart_resid");
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatacarcel_clasificacion_lugar["depart_resid"] = $fdata;
//	delitosanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "delitosanalisis";
	$fdata["GoodName"] = "delitosanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","delitosanalisis");
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




	$tdatacarcel_clasificacion_lugar["delitosanalisis"] = $fdata;
//	sj_interno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "sj_interno";
	$fdata["GoodName"] = "sj_interno";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","sj_interno");
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




	$tdatacarcel_clasificacion_lugar["sj_interno"] = $fdata;
//	fase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "fase";
	$fdata["GoodName"] = "fase";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","fase");
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




	$tdatacarcel_clasificacion_lugar["fase"] = $fdata;
//	org_delictiva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "org_delictiva";
	$fdata["GoodName"] = "org_delictiva";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","org_delictiva");
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




	$tdatacarcel_clasificacion_lugar["org_delictiva"] = $fdata;
//	tipo_mara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "tipo_mara";
	$fdata["GoodName"] = "tipo_mara";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","tipo_mara");
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




	$tdatacarcel_clasificacion_lugar["tipo_mara"] = $fdata;
//	reincidente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "reincidente";
	$fdata["GoodName"] = "reincidente";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","reincidente");
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




	$tdatacarcel_clasificacion_lugar["reincidente"] = $fdata;
//	deportado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "deportado";
	$fdata["GoodName"] = "deportado";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","deportado");
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




	$tdatacarcel_clasificacion_lugar["deportado"] = $fdata;
//	direccion1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "direccion1";
	$fdata["GoodName"] = "direccion1";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","direccion1");
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




	$tdatacarcel_clasificacion_lugar["direccion1"] = $fdata;
//	sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "sector";
	$fdata["GoodName"] = "sector";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","sector");
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




	$tdatacarcel_clasificacion_lugar["sector"] = $fdata;
//	celda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "celda";
	$fdata["GoodName"] = "celda";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","celda");
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




	$tdatacarcel_clasificacion_lugar["celda"] = $fdata;
//	fecha_ing__sp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "fecha_ing__sp";
	$fdata["GoodName"] = "fecha_ing__sp";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","fecha_ing__sp");
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




	$tdatacarcel_clasificacion_lugar["fecha_ing__sp"] = $fdata;
//	libro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "libro";
	$fdata["GoodName"] = "libro";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","libro");
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




	$tdatacarcel_clasificacion_lugar["libro"] = $fdata;
//	fecha_ing__cp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "fecha_ing__cp";
	$fdata["GoodName"] = "fecha_ing__cp";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","fecha_ing__cp");
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




	$tdatacarcel_clasificacion_lugar["fecha_ing__cp"] = $fdata;
//	total_delitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "total_delitos";
	$fdata["GoodName"] = "total_delitos";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","total_delitos");
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




	$tdatacarcel_clasificacion_lugar["total_delitos"] = $fdata;
//	delitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "delitos";
	$fdata["GoodName"] = "delitos";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","delitos");
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




	$tdatacarcel_clasificacion_lugar["delitos"] = $fdata;
//	delitoanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "delitoanalisis";
	$fdata["GoodName"] = "delitoanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","delitoanalisis");
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




	$tdatacarcel_clasificacion_lugar["delitoanalisis"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_clasificacion_lugar","sector_ppd");
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




	$tdatacarcel_clasificacion_lugar["sector_ppd"] = $fdata;


$tables_data["carcel_clasificacion lugar"]=&$tdatacarcel_clasificacion_lugar;
$field_labels["carcel_clasificacion_lugar"] = &$fieldLabelscarcel_clasificacion_lugar;
$fieldToolTips["carcel_clasificacion_lugar"] = &$fieldToolTipscarcel_clasificacion_lugar;
$placeHolders["carcel_clasificacion_lugar"] = &$placeHolderscarcel_clasificacion_lugar;
$page_titles["carcel_clasificacion_lugar"] = &$pageTitlescarcel_clasificacion_lugar;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["carcel_clasificacion lugar"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["carcel_clasificacion lugar"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_carcel_clasificacion_lugar()
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
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "carcel_clasificacion lugar";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sipe",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto8["m_sql"] = "sipe";
$proto8["m_srcTableName"] = "carcel_clasificacion lugar";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "afis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto10["m_sql"] = "afis";
$proto10["m_srcTableName"] = "carcel_clasificacion lugar";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "edad",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto12["m_sql"] = "edad";
$proto12["m_srcTableName"] = "carcel_clasificacion lugar";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto14["m_sql"] = "rangoetario";
$proto14["m_srcTableName"] = "carcel_clasificacion lugar";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto16["m_sql"] = "genero";
$proto16["m_srcTableName"] = "carcel_clasificacion lugar";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_nac",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto18["m_sql"] = "fecha_nac";
$proto18["m_srcTableName"] = "carcel_clasificacion lugar";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "edad1",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto20["m_sql"] = "edad1";
$proto20["m_srcTableName"] = "carcel_clasificacion lugar";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dui",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto22["m_sql"] = "dui";
$proto22["m_srcTableName"] = "carcel_clasificacion lugar";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "nivel_edu",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto24["m_sql"] = "nivel_edu";
$proto24["m_srcTableName"] = "carcel_clasificacion lugar";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "educacionanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto26["m_sql"] = "educacionanalisis";
$proto26["m_srcTableName"] = "carcel_clasificacion lugar";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "profesion_oficio",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto28["m_sql"] = "profesion_oficio";
$proto28["m_srcTableName"] = "carcel_clasificacion lugar";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto30["m_sql"] = "estado_civil";
$proto30["m_srcTableName"] = "carcel_clasificacion lugar";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ciudadania",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto32["m_sql"] = "ciudadania";
$proto32["m_srcTableName"] = "carcel_clasificacion lugar";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_nacimiento",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto34["m_sql"] = "mun_nacimiento";
$proto34["m_srcTableName"] = "carcel_clasificacion lugar";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "depto_nacim",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto36["m_sql"] = "depto_nacim";
$proto36["m_srcTableName"] = "carcel_clasificacion lugar";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto38["m_sql"] = "direccion";
$proto38["m_srcTableName"] = "carcel_clasificacion lugar";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto40["m_sql"] = "mun_resid";
$proto40["m_srcTableName"] = "carcel_clasificacion lugar";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto42["m_sql"] = "depart_resid";
$proto42["m_srcTableName"] = "carcel_clasificacion lugar";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "delitosanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto44["m_sql"] = "delitosanalisis";
$proto44["m_srcTableName"] = "carcel_clasificacion lugar";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "sj_interno",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto46["m_sql"] = "sj_interno";
$proto46["m_srcTableName"] = "carcel_clasificacion lugar";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "fase",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto48["m_sql"] = "fase";
$proto48["m_srcTableName"] = "carcel_clasificacion lugar";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto50["m_sql"] = "org_delictiva";
$proto50["m_srcTableName"] = "carcel_clasificacion lugar";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto52["m_sql"] = "tipo_mara";
$proto52["m_srcTableName"] = "carcel_clasificacion lugar";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "reincidente",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto54["m_sql"] = "reincidente";
$proto54["m_srcTableName"] = "carcel_clasificacion lugar";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "deportado",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto56["m_sql"] = "deportado";
$proto56["m_srcTableName"] = "carcel_clasificacion lugar";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion1",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto58["m_sql"] = "direccion1";
$proto58["m_srcTableName"] = "carcel_clasificacion lugar";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "sector",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto60["m_sql"] = "sector";
$proto60["m_srcTableName"] = "carcel_clasificacion lugar";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "celda",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto62["m_sql"] = "celda";
$proto62["m_srcTableName"] = "carcel_clasificacion lugar";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ing__sp",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto64["m_sql"] = "fecha_ing__sp";
$proto64["m_srcTableName"] = "carcel_clasificacion lugar";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "libro",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto66["m_sql"] = "libro";
$proto66["m_srcTableName"] = "carcel_clasificacion lugar";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ing__cp",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto68["m_sql"] = "fecha_ing__cp";
$proto68["m_srcTableName"] = "carcel_clasificacion lugar";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "total_delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto70["m_sql"] = "total_delitos";
$proto70["m_srcTableName"] = "carcel_clasificacion lugar";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto72["m_sql"] = "delitos";
$proto72["m_srcTableName"] = "carcel_clasificacion lugar";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto74["m_sql"] = "delitoanalisis";
$proto74["m_srcTableName"] = "carcel_clasificacion lugar";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_clasificacion lugar"
));

$proto76["m_sql"] = "sector_ppd";
$proto76["m_srcTableName"] = "carcel_clasificacion lugar";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto78=array();
$proto78["m_link"] = "SQLL_MAIN";
			$proto79=array();
$proto79["m_strName"] = "carcel";
$proto79["m_srcTableName"] = "carcel_clasificacion lugar";
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
$proto78["m_srcTableName"] = "carcel_clasificacion lugar";
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
$proto0["m_srcTableName"]="carcel_clasificacion lugar";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carcel_clasificacion_lugar = createSqlQuery_carcel_clasificacion_lugar();


	
		;

																																				

$tdatacarcel_clasificacion_lugar[".sqlquery"] = $queryData_carcel_clasificacion_lugar;

$tableEvents["carcel_clasificacion lugar"] = new eventsBase;
$tdatacarcel_clasificacion_lugar[".hasEvents"] = false;

?>