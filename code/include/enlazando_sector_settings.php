<?php
require_once(getabspath("classes/cipherer.php"));




$tdataenlazando_sector = array();
	$tdataenlazando_sector[".truncateText"] = true;
	$tdataenlazando_sector[".NumberOfChars"] = 80;
	$tdataenlazando_sector[".ShortName"] = "enlazando_sector";
	$tdataenlazando_sector[".OwnerID"] = "";
	$tdataenlazando_sector[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsenlazando_sector = array();
$fieldToolTipsenlazando_sector = array();
$pageTitlesenlazando_sector = array();
$placeHoldersenlazando_sector = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsenlazando_sector["Spanish"] = array();
	$fieldToolTipsenlazando_sector["Spanish"] = array();
	$placeHoldersenlazando_sector["Spanish"] = array();
	$pageTitlesenlazando_sector["Spanish"] = array();
	$fieldLabelsenlazando_sector["Spanish"]["id"] = "Id";
	$fieldToolTipsenlazando_sector["Spanish"]["id"] = "";
	$placeHoldersenlazando_sector["Spanish"]["id"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["sipe"] = "Sipe";
	$fieldToolTipsenlazando_sector["Spanish"]["sipe"] = "";
	$placeHoldersenlazando_sector["Spanish"]["sipe"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["afis"] = "Afis";
	$fieldToolTipsenlazando_sector["Spanish"]["afis"] = "";
	$placeHoldersenlazando_sector["Spanish"]["afis"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsenlazando_sector["Spanish"]["sector_ppd"] = "";
	$placeHoldersenlazando_sector["Spanish"]["sector_ppd"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["edad"] = "Edad";
	$fieldToolTipsenlazando_sector["Spanish"]["edad"] = "";
	$placeHoldersenlazando_sector["Spanish"]["edad"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsenlazando_sector["Spanish"]["rangoetario"] = "";
	$placeHoldersenlazando_sector["Spanish"]["rangoetario"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["genero"] = "Genero";
	$fieldToolTipsenlazando_sector["Spanish"]["genero"] = "";
	$placeHoldersenlazando_sector["Spanish"]["genero"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipsenlazando_sector["Spanish"]["fecha_nac"] = "";
	$placeHoldersenlazando_sector["Spanish"]["fecha_nac"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["edad1"] = "Edad1";
	$fieldToolTipsenlazando_sector["Spanish"]["edad1"] = "";
	$placeHoldersenlazando_sector["Spanish"]["edad1"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["dui"] = "Dui";
	$fieldToolTipsenlazando_sector["Spanish"]["dui"] = "";
	$placeHoldersenlazando_sector["Spanish"]["dui"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["nivel_edu"] = "Nivel Edu";
	$fieldToolTipsenlazando_sector["Spanish"]["nivel_edu"] = "";
	$placeHoldersenlazando_sector["Spanish"]["nivel_edu"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["educacionanalisis"] = "Educacionanalisis";
	$fieldToolTipsenlazando_sector["Spanish"]["educacionanalisis"] = "";
	$placeHoldersenlazando_sector["Spanish"]["educacionanalisis"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["profesion_oficio"] = "Profesion Oficio";
	$fieldToolTipsenlazando_sector["Spanish"]["profesion_oficio"] = "";
	$placeHoldersenlazando_sector["Spanish"]["profesion_oficio"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsenlazando_sector["Spanish"]["estado_civil"] = "";
	$placeHoldersenlazando_sector["Spanish"]["estado_civil"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["ciudadania"] = "Ciudadania";
	$fieldToolTipsenlazando_sector["Spanish"]["ciudadania"] = "";
	$placeHoldersenlazando_sector["Spanish"]["ciudadania"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["mun_nacimiento"] = "Mun Nacimiento";
	$fieldToolTipsenlazando_sector["Spanish"]["mun_nacimiento"] = "";
	$placeHoldersenlazando_sector["Spanish"]["mun_nacimiento"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["depto_nacim"] = "Depto Nacim";
	$fieldToolTipsenlazando_sector["Spanish"]["depto_nacim"] = "";
	$placeHoldersenlazando_sector["Spanish"]["depto_nacim"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["direccion"] = "Direccion";
	$fieldToolTipsenlazando_sector["Spanish"]["direccion"] = "";
	$placeHoldersenlazando_sector["Spanish"]["direccion"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsenlazando_sector["Spanish"]["mun_resid"] = "";
	$placeHoldersenlazando_sector["Spanish"]["mun_resid"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsenlazando_sector["Spanish"]["depart_resid"] = "";
	$placeHoldersenlazando_sector["Spanish"]["depart_resid"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["delitosanalisis"] = "Delitosanalisis";
	$fieldToolTipsenlazando_sector["Spanish"]["delitosanalisis"] = "";
	$placeHoldersenlazando_sector["Spanish"]["delitosanalisis"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["sj_interno"] = "Sj Interno";
	$fieldToolTipsenlazando_sector["Spanish"]["sj_interno"] = "";
	$placeHoldersenlazando_sector["Spanish"]["sj_interno"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["fase"] = "Fase";
	$fieldToolTipsenlazando_sector["Spanish"]["fase"] = "";
	$placeHoldersenlazando_sector["Spanish"]["fase"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipsenlazando_sector["Spanish"]["org_delictiva"] = "";
	$placeHoldersenlazando_sector["Spanish"]["org_delictiva"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsenlazando_sector["Spanish"]["tipo_mara"] = "";
	$placeHoldersenlazando_sector["Spanish"]["tipo_mara"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["reincidente"] = "Reincidente";
	$fieldToolTipsenlazando_sector["Spanish"]["reincidente"] = "";
	$placeHoldersenlazando_sector["Spanish"]["reincidente"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["deportado"] = "Deportado";
	$fieldToolTipsenlazando_sector["Spanish"]["deportado"] = "";
	$placeHoldersenlazando_sector["Spanish"]["deportado"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["direccion1"] = "Direccion1";
	$fieldToolTipsenlazando_sector["Spanish"]["direccion1"] = "";
	$placeHoldersenlazando_sector["Spanish"]["direccion1"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["sector"] = "Sector";
	$fieldToolTipsenlazando_sector["Spanish"]["sector"] = "";
	$placeHoldersenlazando_sector["Spanish"]["sector"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["celda"] = "Celda";
	$fieldToolTipsenlazando_sector["Spanish"]["celda"] = "";
	$placeHoldersenlazando_sector["Spanish"]["celda"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["fecha_ing__sp"] = "Fecha Ing  Sp";
	$fieldToolTipsenlazando_sector["Spanish"]["fecha_ing__sp"] = "";
	$placeHoldersenlazando_sector["Spanish"]["fecha_ing__sp"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["libro"] = "Libro";
	$fieldToolTipsenlazando_sector["Spanish"]["libro"] = "";
	$placeHoldersenlazando_sector["Spanish"]["libro"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["fecha_ing__cp"] = "Fecha Ing  Cp";
	$fieldToolTipsenlazando_sector["Spanish"]["fecha_ing__cp"] = "";
	$placeHoldersenlazando_sector["Spanish"]["fecha_ing__cp"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["total_delitos"] = "Total Delitos";
	$fieldToolTipsenlazando_sector["Spanish"]["total_delitos"] = "";
	$placeHoldersenlazando_sector["Spanish"]["total_delitos"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["delitos"] = "Delitos";
	$fieldToolTipsenlazando_sector["Spanish"]["delitos"] = "";
	$placeHoldersenlazando_sector["Spanish"]["delitos"] = "";
	$fieldLabelsenlazando_sector["Spanish"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipsenlazando_sector["Spanish"]["delitoanalisis"] = "";
	$placeHoldersenlazando_sector["Spanish"]["delitoanalisis"] = "";
	if (count($fieldToolTipsenlazando_sector["Spanish"]))
		$tdataenlazando_sector[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsenlazando_sector["English"] = array();
	$fieldToolTipsenlazando_sector["English"] = array();
	$placeHoldersenlazando_sector["English"] = array();
	$pageTitlesenlazando_sector["English"] = array();
	$fieldLabelsenlazando_sector["English"]["id"] = "Id";
	$fieldToolTipsenlazando_sector["English"]["id"] = "";
	$placeHoldersenlazando_sector["English"]["id"] = "";
	$fieldLabelsenlazando_sector["English"]["sipe"] = "Sipe";
	$fieldToolTipsenlazando_sector["English"]["sipe"] = "";
	$placeHoldersenlazando_sector["English"]["sipe"] = "";
	$fieldLabelsenlazando_sector["English"]["afis"] = "Afis";
	$fieldToolTipsenlazando_sector["English"]["afis"] = "";
	$placeHoldersenlazando_sector["English"]["afis"] = "";
	$fieldLabelsenlazando_sector["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsenlazando_sector["English"]["sector_ppd"] = "";
	$placeHoldersenlazando_sector["English"]["sector_ppd"] = "";
	$fieldLabelsenlazando_sector["English"]["edad"] = "Edad";
	$fieldToolTipsenlazando_sector["English"]["edad"] = "";
	$placeHoldersenlazando_sector["English"]["edad"] = "";
	$fieldLabelsenlazando_sector["English"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsenlazando_sector["English"]["rangoetario"] = "";
	$placeHoldersenlazando_sector["English"]["rangoetario"] = "";
	$fieldLabelsenlazando_sector["English"]["genero"] = "Genero";
	$fieldToolTipsenlazando_sector["English"]["genero"] = "";
	$placeHoldersenlazando_sector["English"]["genero"] = "";
	$fieldLabelsenlazando_sector["English"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipsenlazando_sector["English"]["fecha_nac"] = "";
	$placeHoldersenlazando_sector["English"]["fecha_nac"] = "";
	$fieldLabelsenlazando_sector["English"]["edad1"] = "Edad1";
	$fieldToolTipsenlazando_sector["English"]["edad1"] = "";
	$placeHoldersenlazando_sector["English"]["edad1"] = "";
	$fieldLabelsenlazando_sector["English"]["dui"] = "Dui";
	$fieldToolTipsenlazando_sector["English"]["dui"] = "";
	$placeHoldersenlazando_sector["English"]["dui"] = "";
	$fieldLabelsenlazando_sector["English"]["nivel_edu"] = "Nivel Edu";
	$fieldToolTipsenlazando_sector["English"]["nivel_edu"] = "";
	$placeHoldersenlazando_sector["English"]["nivel_edu"] = "";
	$fieldLabelsenlazando_sector["English"]["educacionanalisis"] = "Educacionanalisis";
	$fieldToolTipsenlazando_sector["English"]["educacionanalisis"] = "";
	$placeHoldersenlazando_sector["English"]["educacionanalisis"] = "";
	$fieldLabelsenlazando_sector["English"]["profesion_oficio"] = "Profesion Oficio";
	$fieldToolTipsenlazando_sector["English"]["profesion_oficio"] = "";
	$placeHoldersenlazando_sector["English"]["profesion_oficio"] = "";
	$fieldLabelsenlazando_sector["English"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsenlazando_sector["English"]["estado_civil"] = "";
	$placeHoldersenlazando_sector["English"]["estado_civil"] = "";
	$fieldLabelsenlazando_sector["English"]["ciudadania"] = "Ciudadania";
	$fieldToolTipsenlazando_sector["English"]["ciudadania"] = "";
	$placeHoldersenlazando_sector["English"]["ciudadania"] = "";
	$fieldLabelsenlazando_sector["English"]["mun_nacimiento"] = "Mun Nacimiento";
	$fieldToolTipsenlazando_sector["English"]["mun_nacimiento"] = "";
	$placeHoldersenlazando_sector["English"]["mun_nacimiento"] = "";
	$fieldLabelsenlazando_sector["English"]["depto_nacim"] = "Depto Nacim";
	$fieldToolTipsenlazando_sector["English"]["depto_nacim"] = "";
	$placeHoldersenlazando_sector["English"]["depto_nacim"] = "";
	$fieldLabelsenlazando_sector["English"]["direccion"] = "Direccion";
	$fieldToolTipsenlazando_sector["English"]["direccion"] = "";
	$placeHoldersenlazando_sector["English"]["direccion"] = "";
	$fieldLabelsenlazando_sector["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsenlazando_sector["English"]["mun_resid"] = "";
	$placeHoldersenlazando_sector["English"]["mun_resid"] = "";
	$fieldLabelsenlazando_sector["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsenlazando_sector["English"]["depart_resid"] = "";
	$placeHoldersenlazando_sector["English"]["depart_resid"] = "";
	$fieldLabelsenlazando_sector["English"]["delitosanalisis"] = "Delitosanalisis";
	$fieldToolTipsenlazando_sector["English"]["delitosanalisis"] = "";
	$placeHoldersenlazando_sector["English"]["delitosanalisis"] = "";
	$fieldLabelsenlazando_sector["English"]["sj_interno"] = "Sj Interno";
	$fieldToolTipsenlazando_sector["English"]["sj_interno"] = "";
	$placeHoldersenlazando_sector["English"]["sj_interno"] = "";
	$fieldLabelsenlazando_sector["English"]["fase"] = "Fase";
	$fieldToolTipsenlazando_sector["English"]["fase"] = "";
	$placeHoldersenlazando_sector["English"]["fase"] = "";
	$fieldLabelsenlazando_sector["English"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipsenlazando_sector["English"]["org_delictiva"] = "";
	$placeHoldersenlazando_sector["English"]["org_delictiva"] = "";
	$fieldLabelsenlazando_sector["English"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsenlazando_sector["English"]["tipo_mara"] = "";
	$placeHoldersenlazando_sector["English"]["tipo_mara"] = "";
	$fieldLabelsenlazando_sector["English"]["reincidente"] = "Reincidente";
	$fieldToolTipsenlazando_sector["English"]["reincidente"] = "";
	$placeHoldersenlazando_sector["English"]["reincidente"] = "";
	$fieldLabelsenlazando_sector["English"]["deportado"] = "Deportado";
	$fieldToolTipsenlazando_sector["English"]["deportado"] = "";
	$placeHoldersenlazando_sector["English"]["deportado"] = "";
	$fieldLabelsenlazando_sector["English"]["direccion1"] = "Direccion1";
	$fieldToolTipsenlazando_sector["English"]["direccion1"] = "";
	$placeHoldersenlazando_sector["English"]["direccion1"] = "";
	$fieldLabelsenlazando_sector["English"]["sector"] = "Sector";
	$fieldToolTipsenlazando_sector["English"]["sector"] = "";
	$placeHoldersenlazando_sector["English"]["sector"] = "";
	$fieldLabelsenlazando_sector["English"]["celda"] = "Celda";
	$fieldToolTipsenlazando_sector["English"]["celda"] = "";
	$placeHoldersenlazando_sector["English"]["celda"] = "";
	$fieldLabelsenlazando_sector["English"]["fecha_ing__sp"] = "Fecha Ing  Sp";
	$fieldToolTipsenlazando_sector["English"]["fecha_ing__sp"] = "";
	$placeHoldersenlazando_sector["English"]["fecha_ing__sp"] = "";
	$fieldLabelsenlazando_sector["English"]["libro"] = "Libro";
	$fieldToolTipsenlazando_sector["English"]["libro"] = "";
	$placeHoldersenlazando_sector["English"]["libro"] = "";
	$fieldLabelsenlazando_sector["English"]["fecha_ing__cp"] = "Fecha Ing  Cp";
	$fieldToolTipsenlazando_sector["English"]["fecha_ing__cp"] = "";
	$placeHoldersenlazando_sector["English"]["fecha_ing__cp"] = "";
	$fieldLabelsenlazando_sector["English"]["total_delitos"] = "Total Delitos";
	$fieldToolTipsenlazando_sector["English"]["total_delitos"] = "";
	$placeHoldersenlazando_sector["English"]["total_delitos"] = "";
	$fieldLabelsenlazando_sector["English"]["delitos"] = "Delitos";
	$fieldToolTipsenlazando_sector["English"]["delitos"] = "";
	$placeHoldersenlazando_sector["English"]["delitos"] = "";
	$fieldLabelsenlazando_sector["English"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipsenlazando_sector["English"]["delitoanalisis"] = "";
	$placeHoldersenlazando_sector["English"]["delitoanalisis"] = "";
	if (count($fieldToolTipsenlazando_sector["English"]))
		$tdataenlazando_sector[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsenlazando_sector[""] = array();
	$fieldToolTipsenlazando_sector[""] = array();
	$placeHoldersenlazando_sector[""] = array();
	$pageTitlesenlazando_sector[""] = array();
	if (count($fieldToolTipsenlazando_sector[""]))
		$tdataenlazando_sector[".isUseToolTips"] = true;
}





$tdataenlazando_sector[".shortTableName"] = "enlazando_sector";
$tdataenlazando_sector[".nSecOptions"] = 0;
$tdataenlazando_sector[".recsPerRowPrint"] = 1;
$tdataenlazando_sector[".mainTableOwnerID"] = "";
$tdataenlazando_sector[".moveNext"] = 1;
$tdataenlazando_sector[".entityType"] = 1;

$tdataenlazando_sector[".strOriginalTableName"] = "carcel";

	



$tdataenlazando_sector[".showAddInPopup"] = false;

$tdataenlazando_sector[".showEditInPopup"] = false;

$tdataenlazando_sector[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataenlazando_sector[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataenlazando_sector[".fieldsForRegister"] = array();

	$tdataenlazando_sector[".listAjax"] = true;

	$tdataenlazando_sector[".audit"] = false;

	$tdataenlazando_sector[".locking"] = false;



$tdataenlazando_sector[".list"] = true;



$tdataenlazando_sector[".reorderRecordsByHeader"] = true;
$tdataenlazando_sector[".createSortByDropdown"] = true;
$tdataenlazando_sector[".strSortControlSettingsJSON"] = "";




$tdataenlazando_sector[".import"] = true;

$tdataenlazando_sector[".exportTo"] = true;

$tdataenlazando_sector[".printFriendly"] = true;


$tdataenlazando_sector[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataenlazando_sector[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataenlazando_sector[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataenlazando_sector[".searchSaving"] = false;
//

$tdataenlazando_sector[".showSearchPanel"] = true;
		$tdataenlazando_sector[".flexibleSearch"] = true;

$tdataenlazando_sector[".isUseAjaxSuggest"] = true;

$tdataenlazando_sector[".rowHighlite"] = true;





$tdataenlazando_sector[".ajaxCodeSnippetAdded"] = false;

$tdataenlazando_sector[".buttonsAdded"] = false;

$tdataenlazando_sector[".addPageEvents"] = false;

// use timepicker for search panel
$tdataenlazando_sector[".isUseTimeForSearch"] = false;



$tdataenlazando_sector[".badgeColor"] = "B22222";


$tdataenlazando_sector[".allSearchFields"] = array();
$tdataenlazando_sector[".filterFields"] = array();
$tdataenlazando_sector[".requiredSearchFields"] = array();

$tdataenlazando_sector[".allSearchFields"][] = "id";
	$tdataenlazando_sector[".allSearchFields"][] = "sipe";
	$tdataenlazando_sector[".allSearchFields"][] = "afis";
	$tdataenlazando_sector[".allSearchFields"][] = "edad";
	$tdataenlazando_sector[".allSearchFields"][] = "rangoetario";
	$tdataenlazando_sector[".allSearchFields"][] = "genero";
	$tdataenlazando_sector[".allSearchFields"][] = "fecha_nac";
	$tdataenlazando_sector[".allSearchFields"][] = "edad1";
	$tdataenlazando_sector[".allSearchFields"][] = "dui";
	$tdataenlazando_sector[".allSearchFields"][] = "nivel_edu";
	$tdataenlazando_sector[".allSearchFields"][] = "educacionanalisis";
	$tdataenlazando_sector[".allSearchFields"][] = "profesion_oficio";
	$tdataenlazando_sector[".allSearchFields"][] = "estado_civil";
	$tdataenlazando_sector[".allSearchFields"][] = "ciudadania";
	$tdataenlazando_sector[".allSearchFields"][] = "mun_nacimiento";
	$tdataenlazando_sector[".allSearchFields"][] = "depto_nacim";
	$tdataenlazando_sector[".allSearchFields"][] = "direccion";
	$tdataenlazando_sector[".allSearchFields"][] = "mun_resid";
	$tdataenlazando_sector[".allSearchFields"][] = "depart_resid";
	$tdataenlazando_sector[".allSearchFields"][] = "delitosanalisis";
	$tdataenlazando_sector[".allSearchFields"][] = "sj_interno";
	$tdataenlazando_sector[".allSearchFields"][] = "fase";
	$tdataenlazando_sector[".allSearchFields"][] = "org_delictiva";
	$tdataenlazando_sector[".allSearchFields"][] = "tipo_mara";
	$tdataenlazando_sector[".allSearchFields"][] = "reincidente";
	$tdataenlazando_sector[".allSearchFields"][] = "deportado";
	$tdataenlazando_sector[".allSearchFields"][] = "direccion1";
	$tdataenlazando_sector[".allSearchFields"][] = "sector";
	$tdataenlazando_sector[".allSearchFields"][] = "celda";
	$tdataenlazando_sector[".allSearchFields"][] = "fecha_ing__sp";
	$tdataenlazando_sector[".allSearchFields"][] = "libro";
	$tdataenlazando_sector[".allSearchFields"][] = "fecha_ing__cp";
	$tdataenlazando_sector[".allSearchFields"][] = "total_delitos";
	$tdataenlazando_sector[".allSearchFields"][] = "delitos";
	$tdataenlazando_sector[".allSearchFields"][] = "delitoanalisis";
	$tdataenlazando_sector[".allSearchFields"][] = "sector_ppd";
	

$tdataenlazando_sector[".googleLikeFields"] = array();
$tdataenlazando_sector[".googleLikeFields"][] = "id";
$tdataenlazando_sector[".googleLikeFields"][] = "sipe";
$tdataenlazando_sector[".googleLikeFields"][] = "afis";
$tdataenlazando_sector[".googleLikeFields"][] = "edad";
$tdataenlazando_sector[".googleLikeFields"][] = "rangoetario";
$tdataenlazando_sector[".googleLikeFields"][] = "genero";
$tdataenlazando_sector[".googleLikeFields"][] = "fecha_nac";
$tdataenlazando_sector[".googleLikeFields"][] = "edad1";
$tdataenlazando_sector[".googleLikeFields"][] = "dui";
$tdataenlazando_sector[".googleLikeFields"][] = "nivel_edu";
$tdataenlazando_sector[".googleLikeFields"][] = "educacionanalisis";
$tdataenlazando_sector[".googleLikeFields"][] = "profesion_oficio";
$tdataenlazando_sector[".googleLikeFields"][] = "estado_civil";
$tdataenlazando_sector[".googleLikeFields"][] = "ciudadania";
$tdataenlazando_sector[".googleLikeFields"][] = "mun_nacimiento";
$tdataenlazando_sector[".googleLikeFields"][] = "depto_nacim";
$tdataenlazando_sector[".googleLikeFields"][] = "direccion";
$tdataenlazando_sector[".googleLikeFields"][] = "mun_resid";
$tdataenlazando_sector[".googleLikeFields"][] = "depart_resid";
$tdataenlazando_sector[".googleLikeFields"][] = "delitosanalisis";
$tdataenlazando_sector[".googleLikeFields"][] = "sj_interno";
$tdataenlazando_sector[".googleLikeFields"][] = "fase";
$tdataenlazando_sector[".googleLikeFields"][] = "org_delictiva";
$tdataenlazando_sector[".googleLikeFields"][] = "tipo_mara";
$tdataenlazando_sector[".googleLikeFields"][] = "reincidente";
$tdataenlazando_sector[".googleLikeFields"][] = "deportado";
$tdataenlazando_sector[".googleLikeFields"][] = "direccion1";
$tdataenlazando_sector[".googleLikeFields"][] = "sector";
$tdataenlazando_sector[".googleLikeFields"][] = "celda";
$tdataenlazando_sector[".googleLikeFields"][] = "fecha_ing__sp";
$tdataenlazando_sector[".googleLikeFields"][] = "libro";
$tdataenlazando_sector[".googleLikeFields"][] = "fecha_ing__cp";
$tdataenlazando_sector[".googleLikeFields"][] = "total_delitos";
$tdataenlazando_sector[".googleLikeFields"][] = "delitos";
$tdataenlazando_sector[".googleLikeFields"][] = "delitoanalisis";
$tdataenlazando_sector[".googleLikeFields"][] = "sector_ppd";


$tdataenlazando_sector[".advSearchFields"] = array();
$tdataenlazando_sector[".advSearchFields"][] = "id";
$tdataenlazando_sector[".advSearchFields"][] = "sipe";
$tdataenlazando_sector[".advSearchFields"][] = "afis";
$tdataenlazando_sector[".advSearchFields"][] = "edad";
$tdataenlazando_sector[".advSearchFields"][] = "rangoetario";
$tdataenlazando_sector[".advSearchFields"][] = "genero";
$tdataenlazando_sector[".advSearchFields"][] = "fecha_nac";
$tdataenlazando_sector[".advSearchFields"][] = "edad1";
$tdataenlazando_sector[".advSearchFields"][] = "dui";
$tdataenlazando_sector[".advSearchFields"][] = "nivel_edu";
$tdataenlazando_sector[".advSearchFields"][] = "educacionanalisis";
$tdataenlazando_sector[".advSearchFields"][] = "profesion_oficio";
$tdataenlazando_sector[".advSearchFields"][] = "estado_civil";
$tdataenlazando_sector[".advSearchFields"][] = "ciudadania";
$tdataenlazando_sector[".advSearchFields"][] = "mun_nacimiento";
$tdataenlazando_sector[".advSearchFields"][] = "depto_nacim";
$tdataenlazando_sector[".advSearchFields"][] = "direccion";
$tdataenlazando_sector[".advSearchFields"][] = "mun_resid";
$tdataenlazando_sector[".advSearchFields"][] = "depart_resid";
$tdataenlazando_sector[".advSearchFields"][] = "delitosanalisis";
$tdataenlazando_sector[".advSearchFields"][] = "sj_interno";
$tdataenlazando_sector[".advSearchFields"][] = "fase";
$tdataenlazando_sector[".advSearchFields"][] = "org_delictiva";
$tdataenlazando_sector[".advSearchFields"][] = "tipo_mara";
$tdataenlazando_sector[".advSearchFields"][] = "reincidente";
$tdataenlazando_sector[".advSearchFields"][] = "deportado";
$tdataenlazando_sector[".advSearchFields"][] = "direccion1";
$tdataenlazando_sector[".advSearchFields"][] = "sector";
$tdataenlazando_sector[".advSearchFields"][] = "celda";
$tdataenlazando_sector[".advSearchFields"][] = "fecha_ing__sp";
$tdataenlazando_sector[".advSearchFields"][] = "libro";
$tdataenlazando_sector[".advSearchFields"][] = "fecha_ing__cp";
$tdataenlazando_sector[".advSearchFields"][] = "total_delitos";
$tdataenlazando_sector[".advSearchFields"][] = "delitos";
$tdataenlazando_sector[".advSearchFields"][] = "delitoanalisis";
$tdataenlazando_sector[".advSearchFields"][] = "sector_ppd";

$tdataenlazando_sector[".tableType"] = "list";

$tdataenlazando_sector[".printerPageOrientation"] = 0;
$tdataenlazando_sector[".nPrinterPageScale"] = 100;

$tdataenlazando_sector[".nPrinterSplitRecords"] = 40;

$tdataenlazando_sector[".nPrinterPDFSplitRecords"] = 40;



$tdataenlazando_sector[".geocodingEnabled"] = false;





$tdataenlazando_sector[".listGridLayout"] = 3;

$tdataenlazando_sector[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdataenlazando_sector[".pageSize"] = 10;

$tdataenlazando_sector[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataenlazando_sector[".strOrderBy"] = $tstrOrderBy;

$tdataenlazando_sector[".orderindexes"] = array();

$tdataenlazando_sector[".sqlHead"] = "SELECT id,  	sipe,  	afis,  	edad,  	rangoetario,  	genero,  	fecha_nac,  	edad1,  	dui,  	nivel_edu,  	educacionanalisis,  	profesion_oficio,  	estado_civil,  	ciudadania,  	mun_nacimiento,  	depto_nacim,  	direccion,  	mun_resid,  	depart_resid,  	delitosanalisis,  	sj_interno,  	fase,  	org_delictiva,  	tipo_mara,  	reincidente,  	deportado,  	direccion1,  	sector,  	celda,  	fecha_ing__sp,  	libro,  	fecha_ing__cp,  	total_delitos,  	delitos,  	delitoanalisis,  	sector_ppd";
$tdataenlazando_sector[".sqlFrom"] = "FROM carcel";
$tdataenlazando_sector[".sqlWhereExpr"] = "";
$tdataenlazando_sector[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataenlazando_sector[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataenlazando_sector[".arrGroupsPerPage"] = $arrGPP;

$tdataenlazando_sector[".highlightSearchResults"] = true;

$tableKeysenlazando_sector = array();
$tdataenlazando_sector[".Keys"] = $tableKeysenlazando_sector;

$tdataenlazando_sector[".listFields"] = array();
$tdataenlazando_sector[".listFields"][] = "id";
$tdataenlazando_sector[".listFields"][] = "sipe";
$tdataenlazando_sector[".listFields"][] = "afis";
$tdataenlazando_sector[".listFields"][] = "edad";
$tdataenlazando_sector[".listFields"][] = "rangoetario";
$tdataenlazando_sector[".listFields"][] = "genero";
$tdataenlazando_sector[".listFields"][] = "fecha_nac";
$tdataenlazando_sector[".listFields"][] = "edad1";
$tdataenlazando_sector[".listFields"][] = "dui";
$tdataenlazando_sector[".listFields"][] = "nivel_edu";
$tdataenlazando_sector[".listFields"][] = "educacionanalisis";
$tdataenlazando_sector[".listFields"][] = "profesion_oficio";
$tdataenlazando_sector[".listFields"][] = "estado_civil";
$tdataenlazando_sector[".listFields"][] = "ciudadania";
$tdataenlazando_sector[".listFields"][] = "mun_nacimiento";
$tdataenlazando_sector[".listFields"][] = "depto_nacim";
$tdataenlazando_sector[".listFields"][] = "direccion";
$tdataenlazando_sector[".listFields"][] = "mun_resid";
$tdataenlazando_sector[".listFields"][] = "depart_resid";
$tdataenlazando_sector[".listFields"][] = "delitosanalisis";
$tdataenlazando_sector[".listFields"][] = "sj_interno";
$tdataenlazando_sector[".listFields"][] = "fase";
$tdataenlazando_sector[".listFields"][] = "org_delictiva";
$tdataenlazando_sector[".listFields"][] = "tipo_mara";
$tdataenlazando_sector[".listFields"][] = "reincidente";
$tdataenlazando_sector[".listFields"][] = "deportado";
$tdataenlazando_sector[".listFields"][] = "direccion1";
$tdataenlazando_sector[".listFields"][] = "sector";
$tdataenlazando_sector[".listFields"][] = "celda";
$tdataenlazando_sector[".listFields"][] = "fecha_ing__sp";
$tdataenlazando_sector[".listFields"][] = "libro";
$tdataenlazando_sector[".listFields"][] = "fecha_ing__cp";
$tdataenlazando_sector[".listFields"][] = "total_delitos";
$tdataenlazando_sector[".listFields"][] = "delitos";
$tdataenlazando_sector[".listFields"][] = "delitoanalisis";
$tdataenlazando_sector[".listFields"][] = "sector_ppd";

$tdataenlazando_sector[".hideMobileList"] = array();


$tdataenlazando_sector[".viewFields"] = array();
$tdataenlazando_sector[".viewFields"][] = "edad";
$tdataenlazando_sector[".viewFields"][] = "rangoetario";
$tdataenlazando_sector[".viewFields"][] = "genero";
$tdataenlazando_sector[".viewFields"][] = "fecha_nac";
$tdataenlazando_sector[".viewFields"][] = "edad1";
$tdataenlazando_sector[".viewFields"][] = "dui";
$tdataenlazando_sector[".viewFields"][] = "nivel_edu";
$tdataenlazando_sector[".viewFields"][] = "educacionanalisis";
$tdataenlazando_sector[".viewFields"][] = "profesion_oficio";
$tdataenlazando_sector[".viewFields"][] = "estado_civil";
$tdataenlazando_sector[".viewFields"][] = "ciudadania";
$tdataenlazando_sector[".viewFields"][] = "mun_nacimiento";
$tdataenlazando_sector[".viewFields"][] = "depto_nacim";
$tdataenlazando_sector[".viewFields"][] = "direccion";
$tdataenlazando_sector[".viewFields"][] = "mun_resid";
$tdataenlazando_sector[".viewFields"][] = "depart_resid";
$tdataenlazando_sector[".viewFields"][] = "delitosanalisis";
$tdataenlazando_sector[".viewFields"][] = "sj_interno";
$tdataenlazando_sector[".viewFields"][] = "fase";
$tdataenlazando_sector[".viewFields"][] = "org_delictiva";
$tdataenlazando_sector[".viewFields"][] = "tipo_mara";
$tdataenlazando_sector[".viewFields"][] = "reincidente";
$tdataenlazando_sector[".viewFields"][] = "deportado";
$tdataenlazando_sector[".viewFields"][] = "direccion1";
$tdataenlazando_sector[".viewFields"][] = "sector";
$tdataenlazando_sector[".viewFields"][] = "celda";
$tdataenlazando_sector[".viewFields"][] = "fecha_ing__sp";
$tdataenlazando_sector[".viewFields"][] = "libro";
$tdataenlazando_sector[".viewFields"][] = "fecha_ing__cp";
$tdataenlazando_sector[".viewFields"][] = "total_delitos";
$tdataenlazando_sector[".viewFields"][] = "delitos";
$tdataenlazando_sector[".viewFields"][] = "delitoanalisis";

$tdataenlazando_sector[".addFields"] = array();
$tdataenlazando_sector[".addFields"][] = "edad";
$tdataenlazando_sector[".addFields"][] = "rangoetario";
$tdataenlazando_sector[".addFields"][] = "genero";
$tdataenlazando_sector[".addFields"][] = "fecha_nac";
$tdataenlazando_sector[".addFields"][] = "edad1";
$tdataenlazando_sector[".addFields"][] = "dui";
$tdataenlazando_sector[".addFields"][] = "nivel_edu";
$tdataenlazando_sector[".addFields"][] = "educacionanalisis";
$tdataenlazando_sector[".addFields"][] = "profesion_oficio";
$tdataenlazando_sector[".addFields"][] = "estado_civil";
$tdataenlazando_sector[".addFields"][] = "ciudadania";
$tdataenlazando_sector[".addFields"][] = "mun_nacimiento";
$tdataenlazando_sector[".addFields"][] = "depto_nacim";
$tdataenlazando_sector[".addFields"][] = "direccion";
$tdataenlazando_sector[".addFields"][] = "mun_resid";
$tdataenlazando_sector[".addFields"][] = "depart_resid";
$tdataenlazando_sector[".addFields"][] = "delitosanalisis";
$tdataenlazando_sector[".addFields"][] = "sj_interno";
$tdataenlazando_sector[".addFields"][] = "fase";
$tdataenlazando_sector[".addFields"][] = "org_delictiva";
$tdataenlazando_sector[".addFields"][] = "tipo_mara";
$tdataenlazando_sector[".addFields"][] = "reincidente";
$tdataenlazando_sector[".addFields"][] = "deportado";
$tdataenlazando_sector[".addFields"][] = "direccion1";
$tdataenlazando_sector[".addFields"][] = "sector";
$tdataenlazando_sector[".addFields"][] = "celda";
$tdataenlazando_sector[".addFields"][] = "fecha_ing__sp";
$tdataenlazando_sector[".addFields"][] = "libro";
$tdataenlazando_sector[".addFields"][] = "fecha_ing__cp";
$tdataenlazando_sector[".addFields"][] = "total_delitos";
$tdataenlazando_sector[".addFields"][] = "delitos";
$tdataenlazando_sector[".addFields"][] = "delitoanalisis";

$tdataenlazando_sector[".masterListFields"] = array();
$tdataenlazando_sector[".masterListFields"][] = "id";
$tdataenlazando_sector[".masterListFields"][] = "sipe";
$tdataenlazando_sector[".masterListFields"][] = "afis";
$tdataenlazando_sector[".masterListFields"][] = "edad";
$tdataenlazando_sector[".masterListFields"][] = "rangoetario";
$tdataenlazando_sector[".masterListFields"][] = "genero";
$tdataenlazando_sector[".masterListFields"][] = "fecha_nac";
$tdataenlazando_sector[".masterListFields"][] = "edad1";
$tdataenlazando_sector[".masterListFields"][] = "dui";
$tdataenlazando_sector[".masterListFields"][] = "nivel_edu";
$tdataenlazando_sector[".masterListFields"][] = "educacionanalisis";
$tdataenlazando_sector[".masterListFields"][] = "profesion_oficio";
$tdataenlazando_sector[".masterListFields"][] = "estado_civil";
$tdataenlazando_sector[".masterListFields"][] = "ciudadania";
$tdataenlazando_sector[".masterListFields"][] = "mun_nacimiento";
$tdataenlazando_sector[".masterListFields"][] = "depto_nacim";
$tdataenlazando_sector[".masterListFields"][] = "direccion";
$tdataenlazando_sector[".masterListFields"][] = "mun_resid";
$tdataenlazando_sector[".masterListFields"][] = "depart_resid";
$tdataenlazando_sector[".masterListFields"][] = "delitosanalisis";
$tdataenlazando_sector[".masterListFields"][] = "sj_interno";
$tdataenlazando_sector[".masterListFields"][] = "fase";
$tdataenlazando_sector[".masterListFields"][] = "org_delictiva";
$tdataenlazando_sector[".masterListFields"][] = "tipo_mara";
$tdataenlazando_sector[".masterListFields"][] = "reincidente";
$tdataenlazando_sector[".masterListFields"][] = "deportado";
$tdataenlazando_sector[".masterListFields"][] = "direccion1";
$tdataenlazando_sector[".masterListFields"][] = "sector";
$tdataenlazando_sector[".masterListFields"][] = "celda";
$tdataenlazando_sector[".masterListFields"][] = "fecha_ing__sp";
$tdataenlazando_sector[".masterListFields"][] = "libro";
$tdataenlazando_sector[".masterListFields"][] = "fecha_ing__cp";
$tdataenlazando_sector[".masterListFields"][] = "total_delitos";
$tdataenlazando_sector[".masterListFields"][] = "delitos";
$tdataenlazando_sector[".masterListFields"][] = "delitoanalisis";
$tdataenlazando_sector[".masterListFields"][] = "sector_ppd";

$tdataenlazando_sector[".inlineAddFields"] = array();
$tdataenlazando_sector[".inlineAddFields"][] = "edad";
$tdataenlazando_sector[".inlineAddFields"][] = "rangoetario";
$tdataenlazando_sector[".inlineAddFields"][] = "genero";
$tdataenlazando_sector[".inlineAddFields"][] = "fecha_nac";
$tdataenlazando_sector[".inlineAddFields"][] = "edad1";
$tdataenlazando_sector[".inlineAddFields"][] = "dui";
$tdataenlazando_sector[".inlineAddFields"][] = "nivel_edu";
$tdataenlazando_sector[".inlineAddFields"][] = "educacionanalisis";
$tdataenlazando_sector[".inlineAddFields"][] = "profesion_oficio";
$tdataenlazando_sector[".inlineAddFields"][] = "estado_civil";
$tdataenlazando_sector[".inlineAddFields"][] = "ciudadania";
$tdataenlazando_sector[".inlineAddFields"][] = "mun_nacimiento";
$tdataenlazando_sector[".inlineAddFields"][] = "depto_nacim";
$tdataenlazando_sector[".inlineAddFields"][] = "direccion";
$tdataenlazando_sector[".inlineAddFields"][] = "mun_resid";
$tdataenlazando_sector[".inlineAddFields"][] = "depart_resid";
$tdataenlazando_sector[".inlineAddFields"][] = "delitosanalisis";
$tdataenlazando_sector[".inlineAddFields"][] = "sj_interno";
$tdataenlazando_sector[".inlineAddFields"][] = "fase";
$tdataenlazando_sector[".inlineAddFields"][] = "org_delictiva";
$tdataenlazando_sector[".inlineAddFields"][] = "tipo_mara";
$tdataenlazando_sector[".inlineAddFields"][] = "reincidente";
$tdataenlazando_sector[".inlineAddFields"][] = "deportado";
$tdataenlazando_sector[".inlineAddFields"][] = "direccion1";
$tdataenlazando_sector[".inlineAddFields"][] = "sector";
$tdataenlazando_sector[".inlineAddFields"][] = "celda";
$tdataenlazando_sector[".inlineAddFields"][] = "fecha_ing__sp";
$tdataenlazando_sector[".inlineAddFields"][] = "libro";
$tdataenlazando_sector[".inlineAddFields"][] = "fecha_ing__cp";
$tdataenlazando_sector[".inlineAddFields"][] = "total_delitos";
$tdataenlazando_sector[".inlineAddFields"][] = "delitos";
$tdataenlazando_sector[".inlineAddFields"][] = "delitoanalisis";

$tdataenlazando_sector[".editFields"] = array();
$tdataenlazando_sector[".editFields"][] = "edad";
$tdataenlazando_sector[".editFields"][] = "rangoetario";
$tdataenlazando_sector[".editFields"][] = "genero";
$tdataenlazando_sector[".editFields"][] = "fecha_nac";
$tdataenlazando_sector[".editFields"][] = "edad1";
$tdataenlazando_sector[".editFields"][] = "dui";
$tdataenlazando_sector[".editFields"][] = "nivel_edu";
$tdataenlazando_sector[".editFields"][] = "educacionanalisis";
$tdataenlazando_sector[".editFields"][] = "profesion_oficio";
$tdataenlazando_sector[".editFields"][] = "estado_civil";
$tdataenlazando_sector[".editFields"][] = "ciudadania";
$tdataenlazando_sector[".editFields"][] = "mun_nacimiento";
$tdataenlazando_sector[".editFields"][] = "depto_nacim";
$tdataenlazando_sector[".editFields"][] = "direccion";
$tdataenlazando_sector[".editFields"][] = "mun_resid";
$tdataenlazando_sector[".editFields"][] = "depart_resid";
$tdataenlazando_sector[".editFields"][] = "delitosanalisis";
$tdataenlazando_sector[".editFields"][] = "sj_interno";
$tdataenlazando_sector[".editFields"][] = "fase";
$tdataenlazando_sector[".editFields"][] = "org_delictiva";
$tdataenlazando_sector[".editFields"][] = "tipo_mara";
$tdataenlazando_sector[".editFields"][] = "reincidente";
$tdataenlazando_sector[".editFields"][] = "deportado";
$tdataenlazando_sector[".editFields"][] = "direccion1";
$tdataenlazando_sector[".editFields"][] = "sector";
$tdataenlazando_sector[".editFields"][] = "celda";
$tdataenlazando_sector[".editFields"][] = "fecha_ing__sp";
$tdataenlazando_sector[".editFields"][] = "libro";
$tdataenlazando_sector[".editFields"][] = "fecha_ing__cp";
$tdataenlazando_sector[".editFields"][] = "total_delitos";
$tdataenlazando_sector[".editFields"][] = "delitos";
$tdataenlazando_sector[".editFields"][] = "delitoanalisis";

$tdataenlazando_sector[".inlineEditFields"] = array();
$tdataenlazando_sector[".inlineEditFields"][] = "edad";
$tdataenlazando_sector[".inlineEditFields"][] = "rangoetario";
$tdataenlazando_sector[".inlineEditFields"][] = "genero";
$tdataenlazando_sector[".inlineEditFields"][] = "fecha_nac";
$tdataenlazando_sector[".inlineEditFields"][] = "edad1";
$tdataenlazando_sector[".inlineEditFields"][] = "dui";
$tdataenlazando_sector[".inlineEditFields"][] = "nivel_edu";
$tdataenlazando_sector[".inlineEditFields"][] = "educacionanalisis";
$tdataenlazando_sector[".inlineEditFields"][] = "profesion_oficio";
$tdataenlazando_sector[".inlineEditFields"][] = "estado_civil";
$tdataenlazando_sector[".inlineEditFields"][] = "ciudadania";
$tdataenlazando_sector[".inlineEditFields"][] = "mun_nacimiento";
$tdataenlazando_sector[".inlineEditFields"][] = "depto_nacim";
$tdataenlazando_sector[".inlineEditFields"][] = "direccion";
$tdataenlazando_sector[".inlineEditFields"][] = "mun_resid";
$tdataenlazando_sector[".inlineEditFields"][] = "depart_resid";
$tdataenlazando_sector[".inlineEditFields"][] = "delitosanalisis";
$tdataenlazando_sector[".inlineEditFields"][] = "sj_interno";
$tdataenlazando_sector[".inlineEditFields"][] = "fase";
$tdataenlazando_sector[".inlineEditFields"][] = "org_delictiva";
$tdataenlazando_sector[".inlineEditFields"][] = "tipo_mara";
$tdataenlazando_sector[".inlineEditFields"][] = "reincidente";
$tdataenlazando_sector[".inlineEditFields"][] = "deportado";
$tdataenlazando_sector[".inlineEditFields"][] = "direccion1";
$tdataenlazando_sector[".inlineEditFields"][] = "sector";
$tdataenlazando_sector[".inlineEditFields"][] = "celda";
$tdataenlazando_sector[".inlineEditFields"][] = "fecha_ing__sp";
$tdataenlazando_sector[".inlineEditFields"][] = "libro";
$tdataenlazando_sector[".inlineEditFields"][] = "fecha_ing__cp";
$tdataenlazando_sector[".inlineEditFields"][] = "total_delitos";
$tdataenlazando_sector[".inlineEditFields"][] = "delitos";
$tdataenlazando_sector[".inlineEditFields"][] = "delitoanalisis";

$tdataenlazando_sector[".updateSelectedFields"] = array();
$tdataenlazando_sector[".updateSelectedFields"][] = "edad";
$tdataenlazando_sector[".updateSelectedFields"][] = "rangoetario";
$tdataenlazando_sector[".updateSelectedFields"][] = "genero";
$tdataenlazando_sector[".updateSelectedFields"][] = "fecha_nac";
$tdataenlazando_sector[".updateSelectedFields"][] = "edad1";
$tdataenlazando_sector[".updateSelectedFields"][] = "dui";
$tdataenlazando_sector[".updateSelectedFields"][] = "nivel_edu";
$tdataenlazando_sector[".updateSelectedFields"][] = "educacionanalisis";
$tdataenlazando_sector[".updateSelectedFields"][] = "profesion_oficio";
$tdataenlazando_sector[".updateSelectedFields"][] = "estado_civil";
$tdataenlazando_sector[".updateSelectedFields"][] = "ciudadania";
$tdataenlazando_sector[".updateSelectedFields"][] = "mun_nacimiento";
$tdataenlazando_sector[".updateSelectedFields"][] = "depto_nacim";
$tdataenlazando_sector[".updateSelectedFields"][] = "direccion";
$tdataenlazando_sector[".updateSelectedFields"][] = "mun_resid";
$tdataenlazando_sector[".updateSelectedFields"][] = "depart_resid";
$tdataenlazando_sector[".updateSelectedFields"][] = "delitosanalisis";
$tdataenlazando_sector[".updateSelectedFields"][] = "sj_interno";
$tdataenlazando_sector[".updateSelectedFields"][] = "fase";
$tdataenlazando_sector[".updateSelectedFields"][] = "org_delictiva";
$tdataenlazando_sector[".updateSelectedFields"][] = "tipo_mara";
$tdataenlazando_sector[".updateSelectedFields"][] = "reincidente";
$tdataenlazando_sector[".updateSelectedFields"][] = "deportado";
$tdataenlazando_sector[".updateSelectedFields"][] = "direccion1";
$tdataenlazando_sector[".updateSelectedFields"][] = "sector";
$tdataenlazando_sector[".updateSelectedFields"][] = "celda";
$tdataenlazando_sector[".updateSelectedFields"][] = "fecha_ing__sp";
$tdataenlazando_sector[".updateSelectedFields"][] = "libro";
$tdataenlazando_sector[".updateSelectedFields"][] = "fecha_ing__cp";
$tdataenlazando_sector[".updateSelectedFields"][] = "total_delitos";
$tdataenlazando_sector[".updateSelectedFields"][] = "delitos";
$tdataenlazando_sector[".updateSelectedFields"][] = "delitoanalisis";


$tdataenlazando_sector[".exportFields"] = array();
$tdataenlazando_sector[".exportFields"][] = "id";
$tdataenlazando_sector[".exportFields"][] = "sipe";
$tdataenlazando_sector[".exportFields"][] = "afis";
$tdataenlazando_sector[".exportFields"][] = "edad";
$tdataenlazando_sector[".exportFields"][] = "rangoetario";
$tdataenlazando_sector[".exportFields"][] = "genero";
$tdataenlazando_sector[".exportFields"][] = "fecha_nac";
$tdataenlazando_sector[".exportFields"][] = "edad1";
$tdataenlazando_sector[".exportFields"][] = "dui";
$tdataenlazando_sector[".exportFields"][] = "nivel_edu";
$tdataenlazando_sector[".exportFields"][] = "educacionanalisis";
$tdataenlazando_sector[".exportFields"][] = "profesion_oficio";
$tdataenlazando_sector[".exportFields"][] = "estado_civil";
$tdataenlazando_sector[".exportFields"][] = "ciudadania";
$tdataenlazando_sector[".exportFields"][] = "mun_nacimiento";
$tdataenlazando_sector[".exportFields"][] = "depto_nacim";
$tdataenlazando_sector[".exportFields"][] = "direccion";
$tdataenlazando_sector[".exportFields"][] = "mun_resid";
$tdataenlazando_sector[".exportFields"][] = "depart_resid";
$tdataenlazando_sector[".exportFields"][] = "delitosanalisis";
$tdataenlazando_sector[".exportFields"][] = "sj_interno";
$tdataenlazando_sector[".exportFields"][] = "fase";
$tdataenlazando_sector[".exportFields"][] = "org_delictiva";
$tdataenlazando_sector[".exportFields"][] = "tipo_mara";
$tdataenlazando_sector[".exportFields"][] = "reincidente";
$tdataenlazando_sector[".exportFields"][] = "deportado";
$tdataenlazando_sector[".exportFields"][] = "direccion1";
$tdataenlazando_sector[".exportFields"][] = "sector";
$tdataenlazando_sector[".exportFields"][] = "celda";
$tdataenlazando_sector[".exportFields"][] = "fecha_ing__sp";
$tdataenlazando_sector[".exportFields"][] = "libro";
$tdataenlazando_sector[".exportFields"][] = "fecha_ing__cp";
$tdataenlazando_sector[".exportFields"][] = "total_delitos";
$tdataenlazando_sector[".exportFields"][] = "delitos";
$tdataenlazando_sector[".exportFields"][] = "delitoanalisis";
$tdataenlazando_sector[".exportFields"][] = "sector_ppd";

$tdataenlazando_sector[".importFields"] = array();
$tdataenlazando_sector[".importFields"][] = "id";
$tdataenlazando_sector[".importFields"][] = "sipe";
$tdataenlazando_sector[".importFields"][] = "afis";
$tdataenlazando_sector[".importFields"][] = "edad";
$tdataenlazando_sector[".importFields"][] = "rangoetario";
$tdataenlazando_sector[".importFields"][] = "genero";
$tdataenlazando_sector[".importFields"][] = "fecha_nac";
$tdataenlazando_sector[".importFields"][] = "edad1";
$tdataenlazando_sector[".importFields"][] = "dui";
$tdataenlazando_sector[".importFields"][] = "nivel_edu";
$tdataenlazando_sector[".importFields"][] = "educacionanalisis";
$tdataenlazando_sector[".importFields"][] = "profesion_oficio";
$tdataenlazando_sector[".importFields"][] = "estado_civil";
$tdataenlazando_sector[".importFields"][] = "ciudadania";
$tdataenlazando_sector[".importFields"][] = "mun_nacimiento";
$tdataenlazando_sector[".importFields"][] = "depto_nacim";
$tdataenlazando_sector[".importFields"][] = "direccion";
$tdataenlazando_sector[".importFields"][] = "mun_resid";
$tdataenlazando_sector[".importFields"][] = "depart_resid";
$tdataenlazando_sector[".importFields"][] = "delitosanalisis";
$tdataenlazando_sector[".importFields"][] = "sj_interno";
$tdataenlazando_sector[".importFields"][] = "fase";
$tdataenlazando_sector[".importFields"][] = "org_delictiva";
$tdataenlazando_sector[".importFields"][] = "tipo_mara";
$tdataenlazando_sector[".importFields"][] = "reincidente";
$tdataenlazando_sector[".importFields"][] = "deportado";
$tdataenlazando_sector[".importFields"][] = "direccion1";
$tdataenlazando_sector[".importFields"][] = "sector";
$tdataenlazando_sector[".importFields"][] = "celda";
$tdataenlazando_sector[".importFields"][] = "fecha_ing__sp";
$tdataenlazando_sector[".importFields"][] = "libro";
$tdataenlazando_sector[".importFields"][] = "fecha_ing__cp";
$tdataenlazando_sector[".importFields"][] = "total_delitos";
$tdataenlazando_sector[".importFields"][] = "delitos";
$tdataenlazando_sector[".importFields"][] = "delitoanalisis";
$tdataenlazando_sector[".importFields"][] = "sector_ppd";

$tdataenlazando_sector[".printFields"] = array();
$tdataenlazando_sector[".printFields"][] = "id";
$tdataenlazando_sector[".printFields"][] = "sipe";
$tdataenlazando_sector[".printFields"][] = "afis";
$tdataenlazando_sector[".printFields"][] = "edad";
$tdataenlazando_sector[".printFields"][] = "rangoetario";
$tdataenlazando_sector[".printFields"][] = "genero";
$tdataenlazando_sector[".printFields"][] = "fecha_nac";
$tdataenlazando_sector[".printFields"][] = "edad1";
$tdataenlazando_sector[".printFields"][] = "dui";
$tdataenlazando_sector[".printFields"][] = "nivel_edu";
$tdataenlazando_sector[".printFields"][] = "educacionanalisis";
$tdataenlazando_sector[".printFields"][] = "profesion_oficio";
$tdataenlazando_sector[".printFields"][] = "estado_civil";
$tdataenlazando_sector[".printFields"][] = "ciudadania";
$tdataenlazando_sector[".printFields"][] = "mun_nacimiento";
$tdataenlazando_sector[".printFields"][] = "depto_nacim";
$tdataenlazando_sector[".printFields"][] = "direccion";
$tdataenlazando_sector[".printFields"][] = "mun_resid";
$tdataenlazando_sector[".printFields"][] = "depart_resid";
$tdataenlazando_sector[".printFields"][] = "delitosanalisis";
$tdataenlazando_sector[".printFields"][] = "sj_interno";
$tdataenlazando_sector[".printFields"][] = "fase";
$tdataenlazando_sector[".printFields"][] = "org_delictiva";
$tdataenlazando_sector[".printFields"][] = "tipo_mara";
$tdataenlazando_sector[".printFields"][] = "reincidente";
$tdataenlazando_sector[".printFields"][] = "deportado";
$tdataenlazando_sector[".printFields"][] = "direccion1";
$tdataenlazando_sector[".printFields"][] = "sector";
$tdataenlazando_sector[".printFields"][] = "celda";
$tdataenlazando_sector[".printFields"][] = "fecha_ing__sp";
$tdataenlazando_sector[".printFields"][] = "libro";
$tdataenlazando_sector[".printFields"][] = "fecha_ing__cp";
$tdataenlazando_sector[".printFields"][] = "total_delitos";
$tdataenlazando_sector[".printFields"][] = "delitos";
$tdataenlazando_sector[".printFields"][] = "delitoanalisis";
$tdataenlazando_sector[".printFields"][] = "sector_ppd";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","id");
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




	$tdataenlazando_sector["id"] = $fdata;
//	sipe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sipe";
	$fdata["GoodName"] = "sipe";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","sipe");
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




	$tdataenlazando_sector["sipe"] = $fdata;
//	afis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "afis";
	$fdata["GoodName"] = "afis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","afis");
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




	$tdataenlazando_sector["afis"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","edad");
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




	$tdataenlazando_sector["edad"] = $fdata;
//	rangoetario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rangoetario";
	$fdata["GoodName"] = "rangoetario";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","rangoetario");
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




	$tdataenlazando_sector["rangoetario"] = $fdata;
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","genero");
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




	$tdataenlazando_sector["genero"] = $fdata;
//	fecha_nac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fecha_nac";
	$fdata["GoodName"] = "fecha_nac";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","fecha_nac");
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




	$tdataenlazando_sector["fecha_nac"] = $fdata;
//	edad1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "edad1";
	$fdata["GoodName"] = "edad1";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","edad1");
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




	$tdataenlazando_sector["edad1"] = $fdata;
//	dui
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dui";
	$fdata["GoodName"] = "dui";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","dui");
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




	$tdataenlazando_sector["dui"] = $fdata;
//	nivel_edu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "nivel_edu";
	$fdata["GoodName"] = "nivel_edu";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","nivel_edu");
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




	$tdataenlazando_sector["nivel_edu"] = $fdata;
//	educacionanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "educacionanalisis";
	$fdata["GoodName"] = "educacionanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","educacionanalisis");
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




	$tdataenlazando_sector["educacionanalisis"] = $fdata;
//	profesion_oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "profesion_oficio";
	$fdata["GoodName"] = "profesion_oficio";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","profesion_oficio");
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




	$tdataenlazando_sector["profesion_oficio"] = $fdata;
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","estado_civil");
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




	$tdataenlazando_sector["estado_civil"] = $fdata;
//	ciudadania
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ciudadania";
	$fdata["GoodName"] = "ciudadania";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","ciudadania");
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




	$tdataenlazando_sector["ciudadania"] = $fdata;
//	mun_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "mun_nacimiento";
	$fdata["GoodName"] = "mun_nacimiento";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","mun_nacimiento");
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




	$tdataenlazando_sector["mun_nacimiento"] = $fdata;
//	depto_nacim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "depto_nacim";
	$fdata["GoodName"] = "depto_nacim";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","depto_nacim");
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




	$tdataenlazando_sector["depto_nacim"] = $fdata;
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","direccion");
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




	$tdataenlazando_sector["direccion"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","mun_resid");
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




	$tdataenlazando_sector["mun_resid"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","depart_resid");
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




	$tdataenlazando_sector["depart_resid"] = $fdata;
//	delitosanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "delitosanalisis";
	$fdata["GoodName"] = "delitosanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","delitosanalisis");
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




	$tdataenlazando_sector["delitosanalisis"] = $fdata;
//	sj_interno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "sj_interno";
	$fdata["GoodName"] = "sj_interno";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","sj_interno");
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




	$tdataenlazando_sector["sj_interno"] = $fdata;
//	fase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "fase";
	$fdata["GoodName"] = "fase";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","fase");
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




	$tdataenlazando_sector["fase"] = $fdata;
//	org_delictiva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "org_delictiva";
	$fdata["GoodName"] = "org_delictiva";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","org_delictiva");
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




	$tdataenlazando_sector["org_delictiva"] = $fdata;
//	tipo_mara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "tipo_mara";
	$fdata["GoodName"] = "tipo_mara";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","tipo_mara");
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




	$tdataenlazando_sector["tipo_mara"] = $fdata;
//	reincidente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "reincidente";
	$fdata["GoodName"] = "reincidente";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","reincidente");
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




	$tdataenlazando_sector["reincidente"] = $fdata;
//	deportado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "deportado";
	$fdata["GoodName"] = "deportado";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","deportado");
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




	$tdataenlazando_sector["deportado"] = $fdata;
//	direccion1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "direccion1";
	$fdata["GoodName"] = "direccion1";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","direccion1");
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




	$tdataenlazando_sector["direccion1"] = $fdata;
//	sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "sector";
	$fdata["GoodName"] = "sector";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","sector");
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




	$tdataenlazando_sector["sector"] = $fdata;
//	celda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "celda";
	$fdata["GoodName"] = "celda";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","celda");
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




	$tdataenlazando_sector["celda"] = $fdata;
//	fecha_ing__sp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "fecha_ing__sp";
	$fdata["GoodName"] = "fecha_ing__sp";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","fecha_ing__sp");
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




	$tdataenlazando_sector["fecha_ing__sp"] = $fdata;
//	libro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "libro";
	$fdata["GoodName"] = "libro";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","libro");
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




	$tdataenlazando_sector["libro"] = $fdata;
//	fecha_ing__cp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "fecha_ing__cp";
	$fdata["GoodName"] = "fecha_ing__cp";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","fecha_ing__cp");
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




	$tdataenlazando_sector["fecha_ing__cp"] = $fdata;
//	total_delitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "total_delitos";
	$fdata["GoodName"] = "total_delitos";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","total_delitos");
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




	$tdataenlazando_sector["total_delitos"] = $fdata;
//	delitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "delitos";
	$fdata["GoodName"] = "delitos";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","delitos");
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




	$tdataenlazando_sector["delitos"] = $fdata;
//	delitoanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "delitoanalisis";
	$fdata["GoodName"] = "delitoanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","delitoanalisis");
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




	$tdataenlazando_sector["delitoanalisis"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("enlazando_sector","sector_ppd");
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




	$tdataenlazando_sector["sector_ppd"] = $fdata;


$tables_data["enlazando sector"]=&$tdataenlazando_sector;
$field_labels["enlazando_sector"] = &$fieldLabelsenlazando_sector;
$fieldToolTips["enlazando_sector"] = &$fieldToolTipsenlazando_sector;
$placeHolders["enlazando_sector"] = &$placeHoldersenlazando_sector;
$page_titles["enlazando_sector"] = &$pageTitlesenlazando_sector;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["enlazando sector"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["enlazando sector"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_enlazando_sector()
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
	"m_srcTableName" => "enlazando sector"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "enlazando sector";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sipe",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto8["m_sql"] = "sipe";
$proto8["m_srcTableName"] = "enlazando sector";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "afis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto10["m_sql"] = "afis";
$proto10["m_srcTableName"] = "enlazando sector";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "edad",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto12["m_sql"] = "edad";
$proto12["m_srcTableName"] = "enlazando sector";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto14["m_sql"] = "rangoetario";
$proto14["m_srcTableName"] = "enlazando sector";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto16["m_sql"] = "genero";
$proto16["m_srcTableName"] = "enlazando sector";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_nac",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto18["m_sql"] = "fecha_nac";
$proto18["m_srcTableName"] = "enlazando sector";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "edad1",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto20["m_sql"] = "edad1";
$proto20["m_srcTableName"] = "enlazando sector";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dui",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto22["m_sql"] = "dui";
$proto22["m_srcTableName"] = "enlazando sector";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "nivel_edu",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto24["m_sql"] = "nivel_edu";
$proto24["m_srcTableName"] = "enlazando sector";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "educacionanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto26["m_sql"] = "educacionanalisis";
$proto26["m_srcTableName"] = "enlazando sector";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "profesion_oficio",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto28["m_sql"] = "profesion_oficio";
$proto28["m_srcTableName"] = "enlazando sector";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto30["m_sql"] = "estado_civil";
$proto30["m_srcTableName"] = "enlazando sector";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ciudadania",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto32["m_sql"] = "ciudadania";
$proto32["m_srcTableName"] = "enlazando sector";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_nacimiento",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto34["m_sql"] = "mun_nacimiento";
$proto34["m_srcTableName"] = "enlazando sector";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "depto_nacim",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto36["m_sql"] = "depto_nacim";
$proto36["m_srcTableName"] = "enlazando sector";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto38["m_sql"] = "direccion";
$proto38["m_srcTableName"] = "enlazando sector";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto40["m_sql"] = "mun_resid";
$proto40["m_srcTableName"] = "enlazando sector";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto42["m_sql"] = "depart_resid";
$proto42["m_srcTableName"] = "enlazando sector";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "delitosanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto44["m_sql"] = "delitosanalisis";
$proto44["m_srcTableName"] = "enlazando sector";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "sj_interno",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto46["m_sql"] = "sj_interno";
$proto46["m_srcTableName"] = "enlazando sector";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "fase",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto48["m_sql"] = "fase";
$proto48["m_srcTableName"] = "enlazando sector";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto50["m_sql"] = "org_delictiva";
$proto50["m_srcTableName"] = "enlazando sector";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto52["m_sql"] = "tipo_mara";
$proto52["m_srcTableName"] = "enlazando sector";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "reincidente",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto54["m_sql"] = "reincidente";
$proto54["m_srcTableName"] = "enlazando sector";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "deportado",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto56["m_sql"] = "deportado";
$proto56["m_srcTableName"] = "enlazando sector";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion1",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto58["m_sql"] = "direccion1";
$proto58["m_srcTableName"] = "enlazando sector";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "sector",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto60["m_sql"] = "sector";
$proto60["m_srcTableName"] = "enlazando sector";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "celda",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto62["m_sql"] = "celda";
$proto62["m_srcTableName"] = "enlazando sector";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ing__sp",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto64["m_sql"] = "fecha_ing__sp";
$proto64["m_srcTableName"] = "enlazando sector";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "libro",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto66["m_sql"] = "libro";
$proto66["m_srcTableName"] = "enlazando sector";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ing__cp",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto68["m_sql"] = "fecha_ing__cp";
$proto68["m_srcTableName"] = "enlazando sector";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "total_delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto70["m_sql"] = "total_delitos";
$proto70["m_srcTableName"] = "enlazando sector";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto72["m_sql"] = "delitos";
$proto72["m_srcTableName"] = "enlazando sector";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto74["m_sql"] = "delitoanalisis";
$proto74["m_srcTableName"] = "enlazando sector";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "enlazando sector"
));

$proto76["m_sql"] = "sector_ppd";
$proto76["m_srcTableName"] = "enlazando sector";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto78=array();
$proto78["m_link"] = "SQLL_MAIN";
			$proto79=array();
$proto79["m_strName"] = "carcel";
$proto79["m_srcTableName"] = "enlazando sector";
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
$proto78["m_srcTableName"] = "enlazando sector";
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
$proto0["m_srcTableName"]="enlazando sector";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_enlazando_sector = createSqlQuery_enlazando_sector();


	
		;

																																				

$tdataenlazando_sector[".sqlquery"] = $queryData_enlazando_sector;

$tableEvents["enlazando sector"] = new eventsBase;
$tdataenlazando_sector[".hasEvents"] = false;

?>