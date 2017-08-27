<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBD_Carcel = array();
	$tdataBD_Carcel[".truncateText"] = true;
	$tdataBD_Carcel[".NumberOfChars"] = 80;
	$tdataBD_Carcel[".ShortName"] = "BD_Carcel";
	$tdataBD_Carcel[".OwnerID"] = "";
	$tdataBD_Carcel[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsBD_Carcel = array();
$fieldToolTipsBD_Carcel = array();
$pageTitlesBD_Carcel = array();
$placeHoldersBD_Carcel = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsBD_Carcel["Spanish"] = array();
	$fieldToolTipsBD_Carcel["Spanish"] = array();
	$placeHoldersBD_Carcel["Spanish"] = array();
	$pageTitlesBD_Carcel["Spanish"] = array();
	$fieldLabelsBD_Carcel["Spanish"]["id"] = "Id";
	$fieldToolTipsBD_Carcel["Spanish"]["id"] = "";
	$placeHoldersBD_Carcel["Spanish"]["id"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["sipe"] = "Sipe";
	$fieldToolTipsBD_Carcel["Spanish"]["sipe"] = "";
	$placeHoldersBD_Carcel["Spanish"]["sipe"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["afis"] = "Afis";
	$fieldToolTipsBD_Carcel["Spanish"]["afis"] = "";
	$placeHoldersBD_Carcel["Spanish"]["afis"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["edad"] = "Edad";
	$fieldToolTipsBD_Carcel["Spanish"]["edad"] = "";
	$placeHoldersBD_Carcel["Spanish"]["edad"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsBD_Carcel["Spanish"]["rangoetario"] = "";
	$placeHoldersBD_Carcel["Spanish"]["rangoetario"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["genero"] = "Genero";
	$fieldToolTipsBD_Carcel["Spanish"]["genero"] = "";
	$placeHoldersBD_Carcel["Spanish"]["genero"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipsBD_Carcel["Spanish"]["fecha_nac"] = "";
	$placeHoldersBD_Carcel["Spanish"]["fecha_nac"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["edad1"] = "Edad1";
	$fieldToolTipsBD_Carcel["Spanish"]["edad1"] = "";
	$placeHoldersBD_Carcel["Spanish"]["edad1"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["dui"] = "Dui";
	$fieldToolTipsBD_Carcel["Spanish"]["dui"] = "";
	$placeHoldersBD_Carcel["Spanish"]["dui"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["profesion_oficio"] = "Profesion Oficio";
	$fieldToolTipsBD_Carcel["Spanish"]["profesion_oficio"] = "";
	$placeHoldersBD_Carcel["Spanish"]["profesion_oficio"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsBD_Carcel["Spanish"]["estado_civil"] = "";
	$placeHoldersBD_Carcel["Spanish"]["estado_civil"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["ciudadania"] = "Ciudadania";
	$fieldToolTipsBD_Carcel["Spanish"]["ciudadania"] = "";
	$placeHoldersBD_Carcel["Spanish"]["ciudadania"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["mun_nacimiento"] = "Mun Nacimiento";
	$fieldToolTipsBD_Carcel["Spanish"]["mun_nacimiento"] = "";
	$placeHoldersBD_Carcel["Spanish"]["mun_nacimiento"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["depto_nacim"] = "Depto Nacim";
	$fieldToolTipsBD_Carcel["Spanish"]["depto_nacim"] = "";
	$placeHoldersBD_Carcel["Spanish"]["depto_nacim"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["direccion"] = "Direccion";
	$fieldToolTipsBD_Carcel["Spanish"]["direccion"] = "";
	$placeHoldersBD_Carcel["Spanish"]["direccion"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsBD_Carcel["Spanish"]["mun_resid"] = "";
	$placeHoldersBD_Carcel["Spanish"]["mun_resid"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsBD_Carcel["Spanish"]["depart_resid"] = "";
	$placeHoldersBD_Carcel["Spanish"]["depart_resid"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["sj_interno"] = "Sj Interno";
	$fieldToolTipsBD_Carcel["Spanish"]["sj_interno"] = "";
	$placeHoldersBD_Carcel["Spanish"]["sj_interno"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["fase"] = "Fase";
	$fieldToolTipsBD_Carcel["Spanish"]["fase"] = "";
	$placeHoldersBD_Carcel["Spanish"]["fase"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipsBD_Carcel["Spanish"]["org_delictiva"] = "";
	$placeHoldersBD_Carcel["Spanish"]["org_delictiva"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsBD_Carcel["Spanish"]["tipo_mara"] = "";
	$placeHoldersBD_Carcel["Spanish"]["tipo_mara"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["reincidente"] = "Reincidente";
	$fieldToolTipsBD_Carcel["Spanish"]["reincidente"] = "";
	$placeHoldersBD_Carcel["Spanish"]["reincidente"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["deportado"] = "Deportado";
	$fieldToolTipsBD_Carcel["Spanish"]["deportado"] = "";
	$placeHoldersBD_Carcel["Spanish"]["deportado"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["direccion1"] = "Direccion1";
	$fieldToolTipsBD_Carcel["Spanish"]["direccion1"] = "";
	$placeHoldersBD_Carcel["Spanish"]["direccion1"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["sector"] = "Sector";
	$fieldToolTipsBD_Carcel["Spanish"]["sector"] = "";
	$placeHoldersBD_Carcel["Spanish"]["sector"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["celda"] = "Celda";
	$fieldToolTipsBD_Carcel["Spanish"]["celda"] = "";
	$placeHoldersBD_Carcel["Spanish"]["celda"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["fecha_ing__sp"] = "Fecha Ing  Sp";
	$fieldToolTipsBD_Carcel["Spanish"]["fecha_ing__sp"] = "";
	$placeHoldersBD_Carcel["Spanish"]["fecha_ing__sp"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["libro"] = "Libro";
	$fieldToolTipsBD_Carcel["Spanish"]["libro"] = "";
	$placeHoldersBD_Carcel["Spanish"]["libro"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["fecha_ing__cp"] = "Fecha Ing  Cp";
	$fieldToolTipsBD_Carcel["Spanish"]["fecha_ing__cp"] = "";
	$placeHoldersBD_Carcel["Spanish"]["fecha_ing__cp"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["total_delitos"] = "Total Delitos";
	$fieldToolTipsBD_Carcel["Spanish"]["total_delitos"] = "";
	$placeHoldersBD_Carcel["Spanish"]["total_delitos"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["delitos"] = "Delitos";
	$fieldToolTipsBD_Carcel["Spanish"]["delitos"] = "";
	$placeHoldersBD_Carcel["Spanish"]["delitos"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipsBD_Carcel["Spanish"]["delitoanalisis"] = "";
	$placeHoldersBD_Carcel["Spanish"]["delitoanalisis"] = "";
	$fieldLabelsBD_Carcel["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsBD_Carcel["Spanish"]["sector_ppd"] = "";
	$placeHoldersBD_Carcel["Spanish"]["sector_ppd"] = "";
	if (count($fieldToolTipsBD_Carcel["Spanish"]))
		$tdataBD_Carcel[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBD_Carcel["English"] = array();
	$fieldToolTipsBD_Carcel["English"] = array();
	$placeHoldersBD_Carcel["English"] = array();
	$pageTitlesBD_Carcel["English"] = array();
	$fieldLabelsBD_Carcel["English"]["id"] = "Id";
	$fieldToolTipsBD_Carcel["English"]["id"] = "";
	$placeHoldersBD_Carcel["English"]["id"] = "";
	$fieldLabelsBD_Carcel["English"]["sipe"] = "Sipe";
	$fieldToolTipsBD_Carcel["English"]["sipe"] = "";
	$placeHoldersBD_Carcel["English"]["sipe"] = "";
	$fieldLabelsBD_Carcel["English"]["afis"] = "Afis";
	$fieldToolTipsBD_Carcel["English"]["afis"] = "";
	$placeHoldersBD_Carcel["English"]["afis"] = "";
	$fieldLabelsBD_Carcel["English"]["edad"] = "Edad";
	$fieldToolTipsBD_Carcel["English"]["edad"] = "";
	$placeHoldersBD_Carcel["English"]["edad"] = "";
	$fieldLabelsBD_Carcel["English"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsBD_Carcel["English"]["rangoetario"] = "";
	$placeHoldersBD_Carcel["English"]["rangoetario"] = "";
	$fieldLabelsBD_Carcel["English"]["genero"] = "Genero";
	$fieldToolTipsBD_Carcel["English"]["genero"] = "";
	$placeHoldersBD_Carcel["English"]["genero"] = "";
	$fieldLabelsBD_Carcel["English"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipsBD_Carcel["English"]["fecha_nac"] = "";
	$placeHoldersBD_Carcel["English"]["fecha_nac"] = "";
	$fieldLabelsBD_Carcel["English"]["edad1"] = "Edad1";
	$fieldToolTipsBD_Carcel["English"]["edad1"] = "";
	$placeHoldersBD_Carcel["English"]["edad1"] = "";
	$fieldLabelsBD_Carcel["English"]["dui"] = "Dui";
	$fieldToolTipsBD_Carcel["English"]["dui"] = "";
	$placeHoldersBD_Carcel["English"]["dui"] = "";
	$fieldLabelsBD_Carcel["English"]["profesion_oficio"] = "Profesion Oficio";
	$fieldToolTipsBD_Carcel["English"]["profesion_oficio"] = "";
	$placeHoldersBD_Carcel["English"]["profesion_oficio"] = "";
	$fieldLabelsBD_Carcel["English"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsBD_Carcel["English"]["estado_civil"] = "";
	$placeHoldersBD_Carcel["English"]["estado_civil"] = "";
	$fieldLabelsBD_Carcel["English"]["ciudadania"] = "Ciudadania";
	$fieldToolTipsBD_Carcel["English"]["ciudadania"] = "";
	$placeHoldersBD_Carcel["English"]["ciudadania"] = "";
	$fieldLabelsBD_Carcel["English"]["mun_nacimiento"] = "Mun Nacimiento";
	$fieldToolTipsBD_Carcel["English"]["mun_nacimiento"] = "";
	$placeHoldersBD_Carcel["English"]["mun_nacimiento"] = "";
	$fieldLabelsBD_Carcel["English"]["depto_nacim"] = "Depto Nacim";
	$fieldToolTipsBD_Carcel["English"]["depto_nacim"] = "";
	$placeHoldersBD_Carcel["English"]["depto_nacim"] = "";
	$fieldLabelsBD_Carcel["English"]["direccion"] = "Direccion";
	$fieldToolTipsBD_Carcel["English"]["direccion"] = "";
	$placeHoldersBD_Carcel["English"]["direccion"] = "";
	$fieldLabelsBD_Carcel["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsBD_Carcel["English"]["mun_resid"] = "";
	$placeHoldersBD_Carcel["English"]["mun_resid"] = "";
	$fieldLabelsBD_Carcel["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsBD_Carcel["English"]["depart_resid"] = "";
	$placeHoldersBD_Carcel["English"]["depart_resid"] = "";
	$fieldLabelsBD_Carcel["English"]["sj_interno"] = "Sj Interno";
	$fieldToolTipsBD_Carcel["English"]["sj_interno"] = "";
	$placeHoldersBD_Carcel["English"]["sj_interno"] = "";
	$fieldLabelsBD_Carcel["English"]["fase"] = "Fase";
	$fieldToolTipsBD_Carcel["English"]["fase"] = "";
	$placeHoldersBD_Carcel["English"]["fase"] = "";
	$fieldLabelsBD_Carcel["English"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipsBD_Carcel["English"]["org_delictiva"] = "";
	$placeHoldersBD_Carcel["English"]["org_delictiva"] = "";
	$fieldLabelsBD_Carcel["English"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsBD_Carcel["English"]["tipo_mara"] = "";
	$placeHoldersBD_Carcel["English"]["tipo_mara"] = "";
	$fieldLabelsBD_Carcel["English"]["reincidente"] = "Reincidente";
	$fieldToolTipsBD_Carcel["English"]["reincidente"] = "";
	$placeHoldersBD_Carcel["English"]["reincidente"] = "";
	$fieldLabelsBD_Carcel["English"]["deportado"] = "Deportado";
	$fieldToolTipsBD_Carcel["English"]["deportado"] = "";
	$placeHoldersBD_Carcel["English"]["deportado"] = "";
	$fieldLabelsBD_Carcel["English"]["direccion1"] = "Direccion1";
	$fieldToolTipsBD_Carcel["English"]["direccion1"] = "";
	$placeHoldersBD_Carcel["English"]["direccion1"] = "";
	$fieldLabelsBD_Carcel["English"]["sector"] = "Sector";
	$fieldToolTipsBD_Carcel["English"]["sector"] = "";
	$placeHoldersBD_Carcel["English"]["sector"] = "";
	$fieldLabelsBD_Carcel["English"]["celda"] = "Celda";
	$fieldToolTipsBD_Carcel["English"]["celda"] = "";
	$placeHoldersBD_Carcel["English"]["celda"] = "";
	$fieldLabelsBD_Carcel["English"]["fecha_ing__sp"] = "Fecha Ing  Sp";
	$fieldToolTipsBD_Carcel["English"]["fecha_ing__sp"] = "";
	$placeHoldersBD_Carcel["English"]["fecha_ing__sp"] = "";
	$fieldLabelsBD_Carcel["English"]["libro"] = "Libro";
	$fieldToolTipsBD_Carcel["English"]["libro"] = "";
	$placeHoldersBD_Carcel["English"]["libro"] = "";
	$fieldLabelsBD_Carcel["English"]["fecha_ing__cp"] = "Fecha Ing  Cp";
	$fieldToolTipsBD_Carcel["English"]["fecha_ing__cp"] = "";
	$placeHoldersBD_Carcel["English"]["fecha_ing__cp"] = "";
	$fieldLabelsBD_Carcel["English"]["total_delitos"] = "Total Delitos";
	$fieldToolTipsBD_Carcel["English"]["total_delitos"] = "";
	$placeHoldersBD_Carcel["English"]["total_delitos"] = "";
	$fieldLabelsBD_Carcel["English"]["delitos"] = "Delitos";
	$fieldToolTipsBD_Carcel["English"]["delitos"] = "";
	$placeHoldersBD_Carcel["English"]["delitos"] = "";
	$fieldLabelsBD_Carcel["English"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipsBD_Carcel["English"]["delitoanalisis"] = "";
	$placeHoldersBD_Carcel["English"]["delitoanalisis"] = "";
	$fieldLabelsBD_Carcel["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsBD_Carcel["English"]["sector_ppd"] = "";
	$placeHoldersBD_Carcel["English"]["sector_ppd"] = "";
	if (count($fieldToolTipsBD_Carcel["English"]))
		$tdataBD_Carcel[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBD_Carcel[""] = array();
	$fieldToolTipsBD_Carcel[""] = array();
	$placeHoldersBD_Carcel[""] = array();
	$pageTitlesBD_Carcel[""] = array();
	if (count($fieldToolTipsBD_Carcel[""]))
		$tdataBD_Carcel[".isUseToolTips"] = true;
}





$tdataBD_Carcel[".shortTableName"] = "BD_Carcel";
$tdataBD_Carcel[".nSecOptions"] = 0;
$tdataBD_Carcel[".recsPerRowPrint"] = 1;
$tdataBD_Carcel[".mainTableOwnerID"] = "";
$tdataBD_Carcel[".moveNext"] = 1;
$tdataBD_Carcel[".entityType"] = 1;

$tdataBD_Carcel[".strOriginalTableName"] = "carcel";

	



$tdataBD_Carcel[".showAddInPopup"] = false;

$tdataBD_Carcel[".showEditInPopup"] = false;

$tdataBD_Carcel[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBD_Carcel[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBD_Carcel[".fieldsForRegister"] = array();

	$tdataBD_Carcel[".listAjax"] = true;

	$tdataBD_Carcel[".audit"] = false;

	$tdataBD_Carcel[".locking"] = false;


$tdataBD_Carcel[".add"] = true;
$tdataBD_Carcel[".afterAddAction"] = 1;
$tdataBD_Carcel[".closePopupAfterAdd"] = 1;
$tdataBD_Carcel[".afterAddActionDetTable"] = "";

$tdataBD_Carcel[".list"] = true;



$tdataBD_Carcel[".reorderRecordsByHeader"] = true;
$tdataBD_Carcel[".createSortByDropdown"] = true;
$tdataBD_Carcel[".strSortControlSettingsJSON"] = "";



$tdataBD_Carcel[".inlineAdd"] = true;

$tdataBD_Carcel[".import"] = true;

$tdataBD_Carcel[".exportTo"] = true;

$tdataBD_Carcel[".printFriendly"] = true;


$tdataBD_Carcel[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataBD_Carcel[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataBD_Carcel[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataBD_Carcel[".searchSaving"] = false;
//

$tdataBD_Carcel[".showSearchPanel"] = true;
		$tdataBD_Carcel[".flexibleSearch"] = true;

$tdataBD_Carcel[".isUseAjaxSuggest"] = true;

$tdataBD_Carcel[".rowHighlite"] = true;





$tdataBD_Carcel[".ajaxCodeSnippetAdded"] = false;

$tdataBD_Carcel[".buttonsAdded"] = false;

$tdataBD_Carcel[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBD_Carcel[".isUseTimeForSearch"] = false;





$tdataBD_Carcel[".allSearchFields"] = array();
$tdataBD_Carcel[".filterFields"] = array();
$tdataBD_Carcel[".requiredSearchFields"] = array();

$tdataBD_Carcel[".allSearchFields"][] = "id";
	$tdataBD_Carcel[".allSearchFields"][] = "sipe";
	$tdataBD_Carcel[".allSearchFields"][] = "afis";
	$tdataBD_Carcel[".allSearchFields"][] = "edad";
	$tdataBD_Carcel[".allSearchFields"][] = "rangoetario";
	$tdataBD_Carcel[".allSearchFields"][] = "genero";
	$tdataBD_Carcel[".allSearchFields"][] = "fecha_nac";
	$tdataBD_Carcel[".allSearchFields"][] = "edad1";
	$tdataBD_Carcel[".allSearchFields"][] = "dui";
	$tdataBD_Carcel[".allSearchFields"][] = "profesion_oficio";
	$tdataBD_Carcel[".allSearchFields"][] = "estado_civil";
	$tdataBD_Carcel[".allSearchFields"][] = "ciudadania";
	$tdataBD_Carcel[".allSearchFields"][] = "mun_nacimiento";
	$tdataBD_Carcel[".allSearchFields"][] = "depto_nacim";
	$tdataBD_Carcel[".allSearchFields"][] = "direccion";
	$tdataBD_Carcel[".allSearchFields"][] = "mun_resid";
	$tdataBD_Carcel[".allSearchFields"][] = "depart_resid";
	$tdataBD_Carcel[".allSearchFields"][] = "sj_interno";
	$tdataBD_Carcel[".allSearchFields"][] = "fase";
	$tdataBD_Carcel[".allSearchFields"][] = "org_delictiva";
	$tdataBD_Carcel[".allSearchFields"][] = "tipo_mara";
	$tdataBD_Carcel[".allSearchFields"][] = "reincidente";
	$tdataBD_Carcel[".allSearchFields"][] = "deportado";
	$tdataBD_Carcel[".allSearchFields"][] = "direccion1";
	$tdataBD_Carcel[".allSearchFields"][] = "sector";
	$tdataBD_Carcel[".allSearchFields"][] = "celda";
	$tdataBD_Carcel[".allSearchFields"][] = "fecha_ing__sp";
	$tdataBD_Carcel[".allSearchFields"][] = "libro";
	$tdataBD_Carcel[".allSearchFields"][] = "fecha_ing__cp";
	$tdataBD_Carcel[".allSearchFields"][] = "total_delitos";
	$tdataBD_Carcel[".allSearchFields"][] = "delitos";
	$tdataBD_Carcel[".allSearchFields"][] = "delitoanalisis";
	$tdataBD_Carcel[".allSearchFields"][] = "sector_ppd";
	
$tdataBD_Carcel[".filterFields"][] = "mun_resid";
$tdataBD_Carcel[".filterFields"][] = "depart_resid";

$tdataBD_Carcel[".googleLikeFields"] = array();
$tdataBD_Carcel[".googleLikeFields"][] = "id";
$tdataBD_Carcel[".googleLikeFields"][] = "sipe";
$tdataBD_Carcel[".googleLikeFields"][] = "afis";
$tdataBD_Carcel[".googleLikeFields"][] = "edad";
$tdataBD_Carcel[".googleLikeFields"][] = "rangoetario";
$tdataBD_Carcel[".googleLikeFields"][] = "genero";
$tdataBD_Carcel[".googleLikeFields"][] = "fecha_nac";
$tdataBD_Carcel[".googleLikeFields"][] = "edad1";
$tdataBD_Carcel[".googleLikeFields"][] = "dui";
$tdataBD_Carcel[".googleLikeFields"][] = "profesion_oficio";
$tdataBD_Carcel[".googleLikeFields"][] = "estado_civil";
$tdataBD_Carcel[".googleLikeFields"][] = "ciudadania";
$tdataBD_Carcel[".googleLikeFields"][] = "mun_nacimiento";
$tdataBD_Carcel[".googleLikeFields"][] = "depto_nacim";
$tdataBD_Carcel[".googleLikeFields"][] = "direccion";
$tdataBD_Carcel[".googleLikeFields"][] = "mun_resid";
$tdataBD_Carcel[".googleLikeFields"][] = "depart_resid";
$tdataBD_Carcel[".googleLikeFields"][] = "sj_interno";
$tdataBD_Carcel[".googleLikeFields"][] = "fase";
$tdataBD_Carcel[".googleLikeFields"][] = "org_delictiva";
$tdataBD_Carcel[".googleLikeFields"][] = "tipo_mara";
$tdataBD_Carcel[".googleLikeFields"][] = "reincidente";
$tdataBD_Carcel[".googleLikeFields"][] = "deportado";
$tdataBD_Carcel[".googleLikeFields"][] = "direccion1";
$tdataBD_Carcel[".googleLikeFields"][] = "sector";
$tdataBD_Carcel[".googleLikeFields"][] = "celda";
$tdataBD_Carcel[".googleLikeFields"][] = "fecha_ing__sp";
$tdataBD_Carcel[".googleLikeFields"][] = "libro";
$tdataBD_Carcel[".googleLikeFields"][] = "fecha_ing__cp";
$tdataBD_Carcel[".googleLikeFields"][] = "total_delitos";
$tdataBD_Carcel[".googleLikeFields"][] = "delitos";
$tdataBD_Carcel[".googleLikeFields"][] = "delitoanalisis";
$tdataBD_Carcel[".googleLikeFields"][] = "sector_ppd";


$tdataBD_Carcel[".advSearchFields"] = array();
$tdataBD_Carcel[".advSearchFields"][] = "id";
$tdataBD_Carcel[".advSearchFields"][] = "sipe";
$tdataBD_Carcel[".advSearchFields"][] = "afis";
$tdataBD_Carcel[".advSearchFields"][] = "edad";
$tdataBD_Carcel[".advSearchFields"][] = "rangoetario";
$tdataBD_Carcel[".advSearchFields"][] = "genero";
$tdataBD_Carcel[".advSearchFields"][] = "fecha_nac";
$tdataBD_Carcel[".advSearchFields"][] = "edad1";
$tdataBD_Carcel[".advSearchFields"][] = "dui";
$tdataBD_Carcel[".advSearchFields"][] = "profesion_oficio";
$tdataBD_Carcel[".advSearchFields"][] = "estado_civil";
$tdataBD_Carcel[".advSearchFields"][] = "ciudadania";
$tdataBD_Carcel[".advSearchFields"][] = "mun_nacimiento";
$tdataBD_Carcel[".advSearchFields"][] = "depto_nacim";
$tdataBD_Carcel[".advSearchFields"][] = "direccion";
$tdataBD_Carcel[".advSearchFields"][] = "mun_resid";
$tdataBD_Carcel[".advSearchFields"][] = "depart_resid";
$tdataBD_Carcel[".advSearchFields"][] = "sj_interno";
$tdataBD_Carcel[".advSearchFields"][] = "fase";
$tdataBD_Carcel[".advSearchFields"][] = "org_delictiva";
$tdataBD_Carcel[".advSearchFields"][] = "tipo_mara";
$tdataBD_Carcel[".advSearchFields"][] = "reincidente";
$tdataBD_Carcel[".advSearchFields"][] = "deportado";
$tdataBD_Carcel[".advSearchFields"][] = "direccion1";
$tdataBD_Carcel[".advSearchFields"][] = "sector";
$tdataBD_Carcel[".advSearchFields"][] = "celda";
$tdataBD_Carcel[".advSearchFields"][] = "fecha_ing__sp";
$tdataBD_Carcel[".advSearchFields"][] = "libro";
$tdataBD_Carcel[".advSearchFields"][] = "fecha_ing__cp";
$tdataBD_Carcel[".advSearchFields"][] = "total_delitos";
$tdataBD_Carcel[".advSearchFields"][] = "delitos";
$tdataBD_Carcel[".advSearchFields"][] = "delitoanalisis";
$tdataBD_Carcel[".advSearchFields"][] = "sector_ppd";

$tdataBD_Carcel[".tableType"] = "list";

$tdataBD_Carcel[".printerPageOrientation"] = 0;
$tdataBD_Carcel[".nPrinterPageScale"] = 100;

$tdataBD_Carcel[".nPrinterSplitRecords"] = 40;

$tdataBD_Carcel[".nPrinterPDFSplitRecords"] = 40;



$tdataBD_Carcel[".geocodingEnabled"] = false;





$tdataBD_Carcel[".listGridLayout"] = 3;

$tdataBD_Carcel[".isDisplayLoading"] = true;




// view page pdf
$tdataBD_Carcel[".isViewPagePDF"] = true;
$tdataBD_Carcel[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataBD_Carcel[".isPrinterPagePDF"] = true;
$tdataBD_Carcel[".nPrinterPagePDFScale"] = 100;


$tdataBD_Carcel[".pageSize"] = 10;

$tdataBD_Carcel[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY org_delictiva DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBD_Carcel[".strOrderBy"] = $tstrOrderBy;

$tdataBD_Carcel[".orderindexes"] = array();
$tdataBD_Carcel[".orderindexes"][] = array(20, (0 ? "ASC" : "DESC"), "org_delictiva");

$tdataBD_Carcel[".sqlHead"] = "SELECT id,  sipe,  afis,  edad,  rangoetario,  genero,  fecha_nac,  edad1,  dui,  profesion_oficio,  estado_civil,  ciudadania,  mun_nacimiento,  depto_nacim,  direccion,  mun_resid,  depart_resid,  sj_interno,  fase,  org_delictiva,  tipo_mara,  reincidente,  deportado,  direccion1,  sector,  celda,  fecha_ing__sp,  libro,  fecha_ing__cp,  total_delitos,  delitos,  delitoanalisis,  sector_ppd";
$tdataBD_Carcel[".sqlFrom"] = "FROM carcel";
$tdataBD_Carcel[".sqlWhereExpr"] = "";
$tdataBD_Carcel[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBD_Carcel[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBD_Carcel[".arrGroupsPerPage"] = $arrGPP;

$tdataBD_Carcel[".highlightSearchResults"] = true;

$tableKeysBD_Carcel = array();
$tdataBD_Carcel[".Keys"] = $tableKeysBD_Carcel;

$tdataBD_Carcel[".listFields"] = array();
$tdataBD_Carcel[".listFields"][] = "id";
$tdataBD_Carcel[".listFields"][] = "sipe";
$tdataBD_Carcel[".listFields"][] = "afis";
$tdataBD_Carcel[".listFields"][] = "edad";
$tdataBD_Carcel[".listFields"][] = "rangoetario";
$tdataBD_Carcel[".listFields"][] = "genero";
$tdataBD_Carcel[".listFields"][] = "fecha_nac";
$tdataBD_Carcel[".listFields"][] = "edad1";
$tdataBD_Carcel[".listFields"][] = "dui";
$tdataBD_Carcel[".listFields"][] = "profesion_oficio";
$tdataBD_Carcel[".listFields"][] = "estado_civil";
$tdataBD_Carcel[".listFields"][] = "ciudadania";
$tdataBD_Carcel[".listFields"][] = "mun_nacimiento";
$tdataBD_Carcel[".listFields"][] = "depto_nacim";
$tdataBD_Carcel[".listFields"][] = "direccion";
$tdataBD_Carcel[".listFields"][] = "mun_resid";
$tdataBD_Carcel[".listFields"][] = "depart_resid";
$tdataBD_Carcel[".listFields"][] = "sj_interno";
$tdataBD_Carcel[".listFields"][] = "fase";
$tdataBD_Carcel[".listFields"][] = "org_delictiva";
$tdataBD_Carcel[".listFields"][] = "tipo_mara";
$tdataBD_Carcel[".listFields"][] = "reincidente";
$tdataBD_Carcel[".listFields"][] = "deportado";
$tdataBD_Carcel[".listFields"][] = "direccion1";
$tdataBD_Carcel[".listFields"][] = "sector";
$tdataBD_Carcel[".listFields"][] = "celda";
$tdataBD_Carcel[".listFields"][] = "fecha_ing__sp";
$tdataBD_Carcel[".listFields"][] = "libro";
$tdataBD_Carcel[".listFields"][] = "fecha_ing__cp";
$tdataBD_Carcel[".listFields"][] = "total_delitos";
$tdataBD_Carcel[".listFields"][] = "delitos";
$tdataBD_Carcel[".listFields"][] = "delitoanalisis";
$tdataBD_Carcel[".listFields"][] = "sector_ppd";

$tdataBD_Carcel[".hideMobileList"] = array();


$tdataBD_Carcel[".viewFields"] = array();

$tdataBD_Carcel[".addFields"] = array();
$tdataBD_Carcel[".addFields"][] = "id";
$tdataBD_Carcel[".addFields"][] = "sipe";
$tdataBD_Carcel[".addFields"][] = "afis";
$tdataBD_Carcel[".addFields"][] = "edad";
$tdataBD_Carcel[".addFields"][] = "rangoetario";
$tdataBD_Carcel[".addFields"][] = "genero";
$tdataBD_Carcel[".addFields"][] = "fecha_nac";
$tdataBD_Carcel[".addFields"][] = "edad1";
$tdataBD_Carcel[".addFields"][] = "dui";
$tdataBD_Carcel[".addFields"][] = "profesion_oficio";
$tdataBD_Carcel[".addFields"][] = "estado_civil";
$tdataBD_Carcel[".addFields"][] = "ciudadania";
$tdataBD_Carcel[".addFields"][] = "mun_nacimiento";
$tdataBD_Carcel[".addFields"][] = "depto_nacim";
$tdataBD_Carcel[".addFields"][] = "direccion";
$tdataBD_Carcel[".addFields"][] = "mun_resid";
$tdataBD_Carcel[".addFields"][] = "depart_resid";
$tdataBD_Carcel[".addFields"][] = "sj_interno";
$tdataBD_Carcel[".addFields"][] = "fase";
$tdataBD_Carcel[".addFields"][] = "org_delictiva";
$tdataBD_Carcel[".addFields"][] = "tipo_mara";
$tdataBD_Carcel[".addFields"][] = "reincidente";
$tdataBD_Carcel[".addFields"][] = "deportado";
$tdataBD_Carcel[".addFields"][] = "direccion1";
$tdataBD_Carcel[".addFields"][] = "sector";
$tdataBD_Carcel[".addFields"][] = "celda";
$tdataBD_Carcel[".addFields"][] = "fecha_ing__sp";
$tdataBD_Carcel[".addFields"][] = "libro";
$tdataBD_Carcel[".addFields"][] = "fecha_ing__cp";
$tdataBD_Carcel[".addFields"][] = "total_delitos";
$tdataBD_Carcel[".addFields"][] = "delitos";
$tdataBD_Carcel[".addFields"][] = "delitoanalisis";
$tdataBD_Carcel[".addFields"][] = "sector_ppd";

$tdataBD_Carcel[".masterListFields"] = array();
$tdataBD_Carcel[".masterListFields"][] = "id";
$tdataBD_Carcel[".masterListFields"][] = "sipe";
$tdataBD_Carcel[".masterListFields"][] = "afis";
$tdataBD_Carcel[".masterListFields"][] = "edad";
$tdataBD_Carcel[".masterListFields"][] = "rangoetario";
$tdataBD_Carcel[".masterListFields"][] = "genero";
$tdataBD_Carcel[".masterListFields"][] = "fecha_nac";
$tdataBD_Carcel[".masterListFields"][] = "edad1";
$tdataBD_Carcel[".masterListFields"][] = "dui";
$tdataBD_Carcel[".masterListFields"][] = "profesion_oficio";
$tdataBD_Carcel[".masterListFields"][] = "estado_civil";
$tdataBD_Carcel[".masterListFields"][] = "ciudadania";
$tdataBD_Carcel[".masterListFields"][] = "mun_nacimiento";
$tdataBD_Carcel[".masterListFields"][] = "depto_nacim";
$tdataBD_Carcel[".masterListFields"][] = "direccion";
$tdataBD_Carcel[".masterListFields"][] = "mun_resid";
$tdataBD_Carcel[".masterListFields"][] = "depart_resid";
$tdataBD_Carcel[".masterListFields"][] = "sj_interno";
$tdataBD_Carcel[".masterListFields"][] = "fase";
$tdataBD_Carcel[".masterListFields"][] = "org_delictiva";
$tdataBD_Carcel[".masterListFields"][] = "tipo_mara";
$tdataBD_Carcel[".masterListFields"][] = "reincidente";
$tdataBD_Carcel[".masterListFields"][] = "deportado";
$tdataBD_Carcel[".masterListFields"][] = "direccion1";
$tdataBD_Carcel[".masterListFields"][] = "sector";
$tdataBD_Carcel[".masterListFields"][] = "celda";
$tdataBD_Carcel[".masterListFields"][] = "fecha_ing__sp";
$tdataBD_Carcel[".masterListFields"][] = "libro";
$tdataBD_Carcel[".masterListFields"][] = "fecha_ing__cp";
$tdataBD_Carcel[".masterListFields"][] = "total_delitos";
$tdataBD_Carcel[".masterListFields"][] = "delitos";
$tdataBD_Carcel[".masterListFields"][] = "delitoanalisis";
$tdataBD_Carcel[".masterListFields"][] = "sector_ppd";

$tdataBD_Carcel[".inlineAddFields"] = array();
$tdataBD_Carcel[".inlineAddFields"][] = "id";
$tdataBD_Carcel[".inlineAddFields"][] = "sipe";
$tdataBD_Carcel[".inlineAddFields"][] = "afis";
$tdataBD_Carcel[".inlineAddFields"][] = "edad";
$tdataBD_Carcel[".inlineAddFields"][] = "rangoetario";
$tdataBD_Carcel[".inlineAddFields"][] = "genero";
$tdataBD_Carcel[".inlineAddFields"][] = "fecha_nac";
$tdataBD_Carcel[".inlineAddFields"][] = "edad1";
$tdataBD_Carcel[".inlineAddFields"][] = "dui";
$tdataBD_Carcel[".inlineAddFields"][] = "profesion_oficio";
$tdataBD_Carcel[".inlineAddFields"][] = "estado_civil";
$tdataBD_Carcel[".inlineAddFields"][] = "ciudadania";
$tdataBD_Carcel[".inlineAddFields"][] = "mun_nacimiento";
$tdataBD_Carcel[".inlineAddFields"][] = "depto_nacim";
$tdataBD_Carcel[".inlineAddFields"][] = "direccion";
$tdataBD_Carcel[".inlineAddFields"][] = "mun_resid";
$tdataBD_Carcel[".inlineAddFields"][] = "depart_resid";
$tdataBD_Carcel[".inlineAddFields"][] = "sj_interno";
$tdataBD_Carcel[".inlineAddFields"][] = "fase";
$tdataBD_Carcel[".inlineAddFields"][] = "org_delictiva";
$tdataBD_Carcel[".inlineAddFields"][] = "tipo_mara";
$tdataBD_Carcel[".inlineAddFields"][] = "reincidente";
$tdataBD_Carcel[".inlineAddFields"][] = "deportado";
$tdataBD_Carcel[".inlineAddFields"][] = "direccion1";
$tdataBD_Carcel[".inlineAddFields"][] = "sector";
$tdataBD_Carcel[".inlineAddFields"][] = "celda";
$tdataBD_Carcel[".inlineAddFields"][] = "fecha_ing__sp";
$tdataBD_Carcel[".inlineAddFields"][] = "libro";
$tdataBD_Carcel[".inlineAddFields"][] = "fecha_ing__cp";
$tdataBD_Carcel[".inlineAddFields"][] = "total_delitos";
$tdataBD_Carcel[".inlineAddFields"][] = "delitos";
$tdataBD_Carcel[".inlineAddFields"][] = "delitoanalisis";
$tdataBD_Carcel[".inlineAddFields"][] = "sector_ppd";

$tdataBD_Carcel[".editFields"] = array();

$tdataBD_Carcel[".inlineEditFields"] = array();

$tdataBD_Carcel[".updateSelectedFields"] = array();


$tdataBD_Carcel[".exportFields"] = array();
$tdataBD_Carcel[".exportFields"][] = "id";
$tdataBD_Carcel[".exportFields"][] = "sipe";
$tdataBD_Carcel[".exportFields"][] = "afis";
$tdataBD_Carcel[".exportFields"][] = "edad";
$tdataBD_Carcel[".exportFields"][] = "rangoetario";
$tdataBD_Carcel[".exportFields"][] = "genero";
$tdataBD_Carcel[".exportFields"][] = "fecha_nac";
$tdataBD_Carcel[".exportFields"][] = "edad1";
$tdataBD_Carcel[".exportFields"][] = "dui";
$tdataBD_Carcel[".exportFields"][] = "profesion_oficio";
$tdataBD_Carcel[".exportFields"][] = "estado_civil";
$tdataBD_Carcel[".exportFields"][] = "ciudadania";
$tdataBD_Carcel[".exportFields"][] = "mun_nacimiento";
$tdataBD_Carcel[".exportFields"][] = "depto_nacim";
$tdataBD_Carcel[".exportFields"][] = "direccion";
$tdataBD_Carcel[".exportFields"][] = "mun_resid";
$tdataBD_Carcel[".exportFields"][] = "depart_resid";
$tdataBD_Carcel[".exportFields"][] = "sj_interno";
$tdataBD_Carcel[".exportFields"][] = "fase";
$tdataBD_Carcel[".exportFields"][] = "org_delictiva";
$tdataBD_Carcel[".exportFields"][] = "tipo_mara";
$tdataBD_Carcel[".exportFields"][] = "reincidente";
$tdataBD_Carcel[".exportFields"][] = "deportado";
$tdataBD_Carcel[".exportFields"][] = "direccion1";
$tdataBD_Carcel[".exportFields"][] = "sector";
$tdataBD_Carcel[".exportFields"][] = "celda";
$tdataBD_Carcel[".exportFields"][] = "fecha_ing__sp";
$tdataBD_Carcel[".exportFields"][] = "libro";
$tdataBD_Carcel[".exportFields"][] = "fecha_ing__cp";
$tdataBD_Carcel[".exportFields"][] = "total_delitos";
$tdataBD_Carcel[".exportFields"][] = "delitos";
$tdataBD_Carcel[".exportFields"][] = "delitoanalisis";
$tdataBD_Carcel[".exportFields"][] = "sector_ppd";

$tdataBD_Carcel[".importFields"] = array();
$tdataBD_Carcel[".importFields"][] = "id";
$tdataBD_Carcel[".importFields"][] = "sipe";
$tdataBD_Carcel[".importFields"][] = "afis";
$tdataBD_Carcel[".importFields"][] = "edad";
$tdataBD_Carcel[".importFields"][] = "rangoetario";
$tdataBD_Carcel[".importFields"][] = "genero";
$tdataBD_Carcel[".importFields"][] = "fecha_nac";
$tdataBD_Carcel[".importFields"][] = "edad1";
$tdataBD_Carcel[".importFields"][] = "dui";
$tdataBD_Carcel[".importFields"][] = "profesion_oficio";
$tdataBD_Carcel[".importFields"][] = "estado_civil";
$tdataBD_Carcel[".importFields"][] = "ciudadania";
$tdataBD_Carcel[".importFields"][] = "mun_nacimiento";
$tdataBD_Carcel[".importFields"][] = "depto_nacim";
$tdataBD_Carcel[".importFields"][] = "direccion";
$tdataBD_Carcel[".importFields"][] = "mun_resid";
$tdataBD_Carcel[".importFields"][] = "depart_resid";
$tdataBD_Carcel[".importFields"][] = "sj_interno";
$tdataBD_Carcel[".importFields"][] = "fase";
$tdataBD_Carcel[".importFields"][] = "org_delictiva";
$tdataBD_Carcel[".importFields"][] = "tipo_mara";
$tdataBD_Carcel[".importFields"][] = "reincidente";
$tdataBD_Carcel[".importFields"][] = "deportado";
$tdataBD_Carcel[".importFields"][] = "direccion1";
$tdataBD_Carcel[".importFields"][] = "sector";
$tdataBD_Carcel[".importFields"][] = "celda";
$tdataBD_Carcel[".importFields"][] = "fecha_ing__sp";
$tdataBD_Carcel[".importFields"][] = "libro";
$tdataBD_Carcel[".importFields"][] = "fecha_ing__cp";
$tdataBD_Carcel[".importFields"][] = "total_delitos";
$tdataBD_Carcel[".importFields"][] = "delitos";
$tdataBD_Carcel[".importFields"][] = "delitoanalisis";
$tdataBD_Carcel[".importFields"][] = "sector_ppd";

$tdataBD_Carcel[".printFields"] = array();
$tdataBD_Carcel[".printFields"][] = "id";
$tdataBD_Carcel[".printFields"][] = "sipe";
$tdataBD_Carcel[".printFields"][] = "afis";
$tdataBD_Carcel[".printFields"][] = "edad";
$tdataBD_Carcel[".printFields"][] = "rangoetario";
$tdataBD_Carcel[".printFields"][] = "genero";
$tdataBD_Carcel[".printFields"][] = "fecha_nac";
$tdataBD_Carcel[".printFields"][] = "edad1";
$tdataBD_Carcel[".printFields"][] = "dui";
$tdataBD_Carcel[".printFields"][] = "profesion_oficio";
$tdataBD_Carcel[".printFields"][] = "estado_civil";
$tdataBD_Carcel[".printFields"][] = "ciudadania";
$tdataBD_Carcel[".printFields"][] = "mun_nacimiento";
$tdataBD_Carcel[".printFields"][] = "depto_nacim";
$tdataBD_Carcel[".printFields"][] = "direccion";
$tdataBD_Carcel[".printFields"][] = "mun_resid";
$tdataBD_Carcel[".printFields"][] = "depart_resid";
$tdataBD_Carcel[".printFields"][] = "sj_interno";
$tdataBD_Carcel[".printFields"][] = "fase";
$tdataBD_Carcel[".printFields"][] = "org_delictiva";
$tdataBD_Carcel[".printFields"][] = "tipo_mara";
$tdataBD_Carcel[".printFields"][] = "reincidente";
$tdataBD_Carcel[".printFields"][] = "deportado";
$tdataBD_Carcel[".printFields"][] = "direccion1";
$tdataBD_Carcel[".printFields"][] = "sector";
$tdataBD_Carcel[".printFields"][] = "celda";
$tdataBD_Carcel[".printFields"][] = "fecha_ing__sp";
$tdataBD_Carcel[".printFields"][] = "libro";
$tdataBD_Carcel[".printFields"][] = "fecha_ing__cp";
$tdataBD_Carcel[".printFields"][] = "total_delitos";
$tdataBD_Carcel[".printFields"][] = "delitos";
$tdataBD_Carcel[".printFields"][] = "delitoanalisis";
$tdataBD_Carcel[".printFields"][] = "sector_ppd";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["id"] = $fdata;
//	sipe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sipe";
	$fdata["GoodName"] = "sipe";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","sipe");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["sipe"] = $fdata;
//	afis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "afis";
	$fdata["GoodName"] = "afis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","afis");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["afis"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","edad");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["edad"] = $fdata;
//	rangoetario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rangoetario";
	$fdata["GoodName"] = "rangoetario";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","rangoetario");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["rangoetario"] = $fdata;
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","genero");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["genero"] = $fdata;
//	fecha_nac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fecha_nac";
	$fdata["GoodName"] = "fecha_nac";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","fecha_nac");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["fecha_nac"] = $fdata;
//	edad1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "edad1";
	$fdata["GoodName"] = "edad1";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","edad1");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["edad1"] = $fdata;
//	dui
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dui";
	$fdata["GoodName"] = "dui";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","dui");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["dui"] = $fdata;
//	profesion_oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "profesion_oficio";
	$fdata["GoodName"] = "profesion_oficio";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","profesion_oficio");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["profesion_oficio"] = $fdata;
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","estado_civil");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["estado_civil"] = $fdata;
//	ciudadania
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ciudadania";
	$fdata["GoodName"] = "ciudadania";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","ciudadania");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["ciudadania"] = $fdata;
//	mun_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "mun_nacimiento";
	$fdata["GoodName"] = "mun_nacimiento";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","mun_nacimiento");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["mun_nacimiento"] = $fdata;
//	depto_nacim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "depto_nacim";
	$fdata["GoodName"] = "depto_nacim";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","depto_nacim");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["depto_nacim"] = $fdata;
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","direccion");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["direccion"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","mun_resid");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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


	$tdataBD_Carcel["mun_resid"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","depart_resid");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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


	$tdataBD_Carcel["depart_resid"] = $fdata;
//	sj_interno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "sj_interno";
	$fdata["GoodName"] = "sj_interno";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","sj_interno");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["sj_interno"] = $fdata;
//	fase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "fase";
	$fdata["GoodName"] = "fase";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","fase");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["fase"] = $fdata;
//	org_delictiva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "org_delictiva";
	$fdata["GoodName"] = "org_delictiva";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","org_delictiva");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["org_delictiva"] = $fdata;
//	tipo_mara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "tipo_mara";
	$fdata["GoodName"] = "tipo_mara";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","tipo_mara");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["tipo_mara"] = $fdata;
//	reincidente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "reincidente";
	$fdata["GoodName"] = "reincidente";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","reincidente");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["reincidente"] = $fdata;
//	deportado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "deportado";
	$fdata["GoodName"] = "deportado";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","deportado");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["deportado"] = $fdata;
//	direccion1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "direccion1";
	$fdata["GoodName"] = "direccion1";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","direccion1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["direccion1"] = $fdata;
//	sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "sector";
	$fdata["GoodName"] = "sector";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","sector");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["sector"] = $fdata;
//	celda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "celda";
	$fdata["GoodName"] = "celda";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","celda");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["celda"] = $fdata;
//	fecha_ing__sp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "fecha_ing__sp";
	$fdata["GoodName"] = "fecha_ing__sp";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","fecha_ing__sp");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["fecha_ing__sp"] = $fdata;
//	libro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "libro";
	$fdata["GoodName"] = "libro";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","libro");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["libro"] = $fdata;
//	fecha_ing__cp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "fecha_ing__cp";
	$fdata["GoodName"] = "fecha_ing__cp";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","fecha_ing__cp");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["fecha_ing__cp"] = $fdata;
//	total_delitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "total_delitos";
	$fdata["GoodName"] = "total_delitos";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","total_delitos");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["total_delitos"] = $fdata;
//	delitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "delitos";
	$fdata["GoodName"] = "delitos";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","delitos");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["delitos"] = $fdata;
//	delitoanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "delitoanalisis";
	$fdata["GoodName"] = "delitoanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","delitoanalisis");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["delitoanalisis"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("BD_Carcel","sector_ppd");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataBD_Carcel["sector_ppd"] = $fdata;


$tables_data["BD Carcel"]=&$tdataBD_Carcel;
$field_labels["BD_Carcel"] = &$fieldLabelsBD_Carcel;
$fieldToolTips["BD_Carcel"] = &$fieldToolTipsBD_Carcel;
$placeHolders["BD_Carcel"] = &$placeHoldersBD_Carcel;
$page_titles["BD_Carcel"] = &$pageTitlesBD_Carcel;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BD Carcel"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["BD Carcel"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BD_Carcel()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  sipe,  afis,  edad,  rangoetario,  genero,  fecha_nac,  edad1,  dui,  profesion_oficio,  estado_civil,  ciudadania,  mun_nacimiento,  depto_nacim,  direccion,  mun_resid,  depart_resid,  sj_interno,  fase,  org_delictiva,  tipo_mara,  reincidente,  deportado,  direccion1,  sector,  celda,  fecha_ing__sp,  libro,  fecha_ing__cp,  total_delitos,  delitos,  delitoanalisis,  sector_ppd";
$proto0["m_strFrom"] = "FROM carcel";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY org_delictiva DESC";
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
	"m_srcTableName" => "BD Carcel"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "BD Carcel";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sipe",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto8["m_sql"] = "sipe";
$proto8["m_srcTableName"] = "BD Carcel";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "afis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto10["m_sql"] = "afis";
$proto10["m_srcTableName"] = "BD Carcel";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "edad",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto12["m_sql"] = "edad";
$proto12["m_srcTableName"] = "BD Carcel";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto14["m_sql"] = "rangoetario";
$proto14["m_srcTableName"] = "BD Carcel";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto16["m_sql"] = "genero";
$proto16["m_srcTableName"] = "BD Carcel";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_nac",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto18["m_sql"] = "fecha_nac";
$proto18["m_srcTableName"] = "BD Carcel";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "edad1",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto20["m_sql"] = "edad1";
$proto20["m_srcTableName"] = "BD Carcel";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dui",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto22["m_sql"] = "dui";
$proto22["m_srcTableName"] = "BD Carcel";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "profesion_oficio",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto24["m_sql"] = "profesion_oficio";
$proto24["m_srcTableName"] = "BD Carcel";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto26["m_sql"] = "estado_civil";
$proto26["m_srcTableName"] = "BD Carcel";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ciudadania",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto28["m_sql"] = "ciudadania";
$proto28["m_srcTableName"] = "BD Carcel";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_nacimiento",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto30["m_sql"] = "mun_nacimiento";
$proto30["m_srcTableName"] = "BD Carcel";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "depto_nacim",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto32["m_sql"] = "depto_nacim";
$proto32["m_srcTableName"] = "BD Carcel";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto34["m_sql"] = "direccion";
$proto34["m_srcTableName"] = "BD Carcel";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto36["m_sql"] = "mun_resid";
$proto36["m_srcTableName"] = "BD Carcel";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto38["m_sql"] = "depart_resid";
$proto38["m_srcTableName"] = "BD Carcel";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "sj_interno",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto40["m_sql"] = "sj_interno";
$proto40["m_srcTableName"] = "BD Carcel";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "fase",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto42["m_sql"] = "fase";
$proto42["m_srcTableName"] = "BD Carcel";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto44["m_sql"] = "org_delictiva";
$proto44["m_srcTableName"] = "BD Carcel";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto46["m_sql"] = "tipo_mara";
$proto46["m_srcTableName"] = "BD Carcel";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "reincidente",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto48["m_sql"] = "reincidente";
$proto48["m_srcTableName"] = "BD Carcel";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "deportado",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto50["m_sql"] = "deportado";
$proto50["m_srcTableName"] = "BD Carcel";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion1",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto52["m_sql"] = "direccion1";
$proto52["m_srcTableName"] = "BD Carcel";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "sector",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto54["m_sql"] = "sector";
$proto54["m_srcTableName"] = "BD Carcel";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "celda",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto56["m_sql"] = "celda";
$proto56["m_srcTableName"] = "BD Carcel";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ing__sp",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto58["m_sql"] = "fecha_ing__sp";
$proto58["m_srcTableName"] = "BD Carcel";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "libro",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto60["m_sql"] = "libro";
$proto60["m_srcTableName"] = "BD Carcel";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ing__cp",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto62["m_sql"] = "fecha_ing__cp";
$proto62["m_srcTableName"] = "BD Carcel";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "total_delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto64["m_sql"] = "total_delitos";
$proto64["m_srcTableName"] = "BD Carcel";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto66["m_sql"] = "delitos";
$proto66["m_srcTableName"] = "BD Carcel";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto68["m_sql"] = "delitoanalisis";
$proto68["m_srcTableName"] = "BD Carcel";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto70["m_sql"] = "sector_ppd";
$proto70["m_srcTableName"] = "BD Carcel";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto72=array();
$proto72["m_link"] = "SQLL_MAIN";
			$proto73=array();
$proto73["m_strName"] = "carcel";
$proto73["m_srcTableName"] = "BD Carcel";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "id";
$proto73["m_columns"][] = "sipe";
$proto73["m_columns"][] = "afis";
$proto73["m_columns"][] = "edad";
$proto73["m_columns"][] = "rangoetario";
$proto73["m_columns"][] = "genero";
$proto73["m_columns"][] = "fecha_nac";
$proto73["m_columns"][] = "edad1";
$proto73["m_columns"][] = "dui";
$proto73["m_columns"][] = "nivel_edu";
$proto73["m_columns"][] = "educacionanalisis";
$proto73["m_columns"][] = "profesion_oficio";
$proto73["m_columns"][] = "estado_civil";
$proto73["m_columns"][] = "ciudadania";
$proto73["m_columns"][] = "mun_nacimiento";
$proto73["m_columns"][] = "depto_nacim";
$proto73["m_columns"][] = "direccion";
$proto73["m_columns"][] = "mun_resid";
$proto73["m_columns"][] = "depart_resid";
$proto73["m_columns"][] = "delitosanalisis";
$proto73["m_columns"][] = "sj_interno";
$proto73["m_columns"][] = "fase";
$proto73["m_columns"][] = "org_delictiva";
$proto73["m_columns"][] = "tipo_mara";
$proto73["m_columns"][] = "reincidente";
$proto73["m_columns"][] = "deportado";
$proto73["m_columns"][] = "direccion1";
$proto73["m_columns"][] = "sector";
$proto73["m_columns"][] = "celda";
$proto73["m_columns"][] = "fecha_ing__sp";
$proto73["m_columns"][] = "libro";
$proto73["m_columns"][] = "fecha_ing__cp";
$proto73["m_columns"][] = "total_delitos";
$proto73["m_columns"][] = "delitos";
$proto73["m_columns"][] = "delitoanalisis";
$proto73["m_columns"][] = "sector_ppd";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "carcel";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "BD Carcel";
$proto74=array();
$proto74["m_sql"] = "";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto76=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto76["m_column"]=$obj;
$obj = new SQLGroupByItem($proto76);

$proto0["m_groupby"][]=$obj;
												$proto78=array();
						$obj = new SQLField(array(
	"m_strName" => "sipe",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto78["m_column"]=$obj;
$obj = new SQLGroupByItem($proto78);

$proto0["m_groupby"][]=$obj;
												$proto80=array();
						$obj = new SQLField(array(
	"m_strName" => "afis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto80["m_column"]=$obj;
$obj = new SQLGroupByItem($proto80);

$proto0["m_groupby"][]=$obj;
												$proto82=array();
						$obj = new SQLField(array(
	"m_strName" => "edad",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto82["m_column"]=$obj;
$obj = new SQLGroupByItem($proto82);

$proto0["m_groupby"][]=$obj;
												$proto84=array();
						$obj = new SQLField(array(
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto84["m_column"]=$obj;
$obj = new SQLGroupByItem($proto84);

$proto0["m_groupby"][]=$obj;
												$proto86=array();
						$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto86["m_column"]=$obj;
$obj = new SQLGroupByItem($proto86);

$proto0["m_groupby"][]=$obj;
												$proto88=array();
						$obj = new SQLField(array(
	"m_strName" => "fecha_nac",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto88["m_column"]=$obj;
$obj = new SQLGroupByItem($proto88);

$proto0["m_groupby"][]=$obj;
												$proto90=array();
						$obj = new SQLField(array(
	"m_strName" => "edad1",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto90["m_column"]=$obj;
$obj = new SQLGroupByItem($proto90);

$proto0["m_groupby"][]=$obj;
												$proto92=array();
						$obj = new SQLField(array(
	"m_strName" => "dui",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto92["m_column"]=$obj;
$obj = new SQLGroupByItem($proto92);

$proto0["m_groupby"][]=$obj;
												$proto94=array();
						$obj = new SQLField(array(
	"m_strName" => "profesion_oficio",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto94["m_column"]=$obj;
$obj = new SQLGroupByItem($proto94);

$proto0["m_groupby"][]=$obj;
												$proto96=array();
						$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto96["m_column"]=$obj;
$obj = new SQLGroupByItem($proto96);

$proto0["m_groupby"][]=$obj;
												$proto98=array();
						$obj = new SQLField(array(
	"m_strName" => "ciudadania",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto98["m_column"]=$obj;
$obj = new SQLGroupByItem($proto98);

$proto0["m_groupby"][]=$obj;
												$proto100=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_nacimiento",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto100["m_column"]=$obj;
$obj = new SQLGroupByItem($proto100);

$proto0["m_groupby"][]=$obj;
												$proto102=array();
						$obj = new SQLField(array(
	"m_strName" => "depto_nacim",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto102["m_column"]=$obj;
$obj = new SQLGroupByItem($proto102);

$proto0["m_groupby"][]=$obj;
												$proto104=array();
						$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto104["m_column"]=$obj;
$obj = new SQLGroupByItem($proto104);

$proto0["m_groupby"][]=$obj;
												$proto106=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto106["m_column"]=$obj;
$obj = new SQLGroupByItem($proto106);

$proto0["m_groupby"][]=$obj;
												$proto108=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto108["m_column"]=$obj;
$obj = new SQLGroupByItem($proto108);

$proto0["m_groupby"][]=$obj;
												$proto110=array();
						$obj = new SQLField(array(
	"m_strName" => "sj_interno",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto110["m_column"]=$obj;
$obj = new SQLGroupByItem($proto110);

$proto0["m_groupby"][]=$obj;
												$proto112=array();
						$obj = new SQLField(array(
	"m_strName" => "fase",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto112["m_column"]=$obj;
$obj = new SQLGroupByItem($proto112);

$proto0["m_groupby"][]=$obj;
												$proto114=array();
						$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto114["m_column"]=$obj;
$obj = new SQLGroupByItem($proto114);

$proto0["m_groupby"][]=$obj;
												$proto116=array();
						$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto116["m_column"]=$obj;
$obj = new SQLGroupByItem($proto116);

$proto0["m_groupby"][]=$obj;
												$proto118=array();
						$obj = new SQLField(array(
	"m_strName" => "reincidente",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto118["m_column"]=$obj;
$obj = new SQLGroupByItem($proto118);

$proto0["m_groupby"][]=$obj;
												$proto120=array();
						$obj = new SQLField(array(
	"m_strName" => "deportado",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto120["m_column"]=$obj;
$obj = new SQLGroupByItem($proto120);

$proto0["m_groupby"][]=$obj;
												$proto122=array();
						$obj = new SQLField(array(
	"m_strName" => "direccion1",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto122["m_column"]=$obj;
$obj = new SQLGroupByItem($proto122);

$proto0["m_groupby"][]=$obj;
												$proto124=array();
						$obj = new SQLField(array(
	"m_strName" => "sector",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto124["m_column"]=$obj;
$obj = new SQLGroupByItem($proto124);

$proto0["m_groupby"][]=$obj;
												$proto126=array();
						$obj = new SQLField(array(
	"m_strName" => "celda",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto126["m_column"]=$obj;
$obj = new SQLGroupByItem($proto126);

$proto0["m_groupby"][]=$obj;
												$proto128=array();
						$obj = new SQLField(array(
	"m_strName" => "fecha_ing__sp",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto128["m_column"]=$obj;
$obj = new SQLGroupByItem($proto128);

$proto0["m_groupby"][]=$obj;
												$proto130=array();
						$obj = new SQLField(array(
	"m_strName" => "libro",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto130["m_column"]=$obj;
$obj = new SQLGroupByItem($proto130);

$proto0["m_groupby"][]=$obj;
												$proto132=array();
						$obj = new SQLField(array(
	"m_strName" => "fecha_ing__cp",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto132["m_column"]=$obj;
$obj = new SQLGroupByItem($proto132);

$proto0["m_groupby"][]=$obj;
												$proto134=array();
						$obj = new SQLField(array(
	"m_strName" => "total_delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto134["m_column"]=$obj;
$obj = new SQLGroupByItem($proto134);

$proto0["m_groupby"][]=$obj;
												$proto136=array();
						$obj = new SQLField(array(
	"m_strName" => "delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto136["m_column"]=$obj;
$obj = new SQLGroupByItem($proto136);

$proto0["m_groupby"][]=$obj;
												$proto138=array();
						$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto138["m_column"]=$obj;
$obj = new SQLGroupByItem($proto138);

$proto0["m_groupby"][]=$obj;
												$proto140=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto140["m_column"]=$obj;
$obj = new SQLGroupByItem($proto140);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto142=array();
						$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "carcel",
	"m_srcTableName" => "BD Carcel"
));

$proto142["m_column"]=$obj;
$proto142["m_bAsc"] = 0;
$proto142["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto142);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="BD Carcel";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BD_Carcel = createSqlQuery_BD_Carcel();


	
		;

																																	

$tdataBD_Carcel[".sqlquery"] = $queryData_BD_Carcel;

$tableEvents["BD Carcel"] = new eventsBase;
$tdataBD_Carcel[".hasEvents"] = false;

?>