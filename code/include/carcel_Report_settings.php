<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacarcel_Report = array();
	$tdatacarcel_Report[".truncateText"] = true;
	$tdatacarcel_Report[".NumberOfChars"] = 80;
	$tdatacarcel_Report[".ShortName"] = "carcel_Report";
	$tdatacarcel_Report[".OwnerID"] = "";
	$tdatacarcel_Report[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelscarcel_Report = array();
$fieldToolTipscarcel_Report = array();
$pageTitlescarcel_Report = array();
$placeHolderscarcel_Report = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscarcel_Report["Spanish"] = array();
	$fieldToolTipscarcel_Report["Spanish"] = array();
	$placeHolderscarcel_Report["Spanish"] = array();
	$pageTitlescarcel_Report["Spanish"] = array();
	$fieldLabelscarcel_Report["Spanish"]["id"] = "Id";
	$fieldToolTipscarcel_Report["Spanish"]["id"] = "";
	$placeHolderscarcel_Report["Spanish"]["id"] = "";
	$fieldLabelscarcel_Report["Spanish"]["sipe"] = "Sipe";
	$fieldToolTipscarcel_Report["Spanish"]["sipe"] = "";
	$placeHolderscarcel_Report["Spanish"]["sipe"] = "";
	$fieldLabelscarcel_Report["Spanish"]["afis"] = "Afis";
	$fieldToolTipscarcel_Report["Spanish"]["afis"] = "";
	$placeHolderscarcel_Report["Spanish"]["afis"] = "";
	$fieldLabelscarcel_Report["Spanish"]["edad"] = "Edad";
	$fieldToolTipscarcel_Report["Spanish"]["edad"] = "";
	$placeHolderscarcel_Report["Spanish"]["edad"] = "";
	$fieldLabelscarcel_Report["Spanish"]["rangoetario"] = "Rangoetario";
	$fieldToolTipscarcel_Report["Spanish"]["rangoetario"] = "";
	$placeHolderscarcel_Report["Spanish"]["rangoetario"] = "";
	$fieldLabelscarcel_Report["Spanish"]["genero"] = "Genero";
	$fieldToolTipscarcel_Report["Spanish"]["genero"] = "";
	$placeHolderscarcel_Report["Spanish"]["genero"] = "";
	$fieldLabelscarcel_Report["Spanish"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipscarcel_Report["Spanish"]["fecha_nac"] = "";
	$placeHolderscarcel_Report["Spanish"]["fecha_nac"] = "";
	$fieldLabelscarcel_Report["Spanish"]["edad1"] = "Edad1";
	$fieldToolTipscarcel_Report["Spanish"]["edad1"] = "";
	$placeHolderscarcel_Report["Spanish"]["edad1"] = "";
	$fieldLabelscarcel_Report["Spanish"]["dui"] = "Dui";
	$fieldToolTipscarcel_Report["Spanish"]["dui"] = "";
	$placeHolderscarcel_Report["Spanish"]["dui"] = "";
	$fieldLabelscarcel_Report["Spanish"]["nivel_edu"] = "Nivel Edu";
	$fieldToolTipscarcel_Report["Spanish"]["nivel_edu"] = "";
	$placeHolderscarcel_Report["Spanish"]["nivel_edu"] = "";
	$fieldLabelscarcel_Report["Spanish"]["educacionanalisis"] = "Educacionanalisis";
	$fieldToolTipscarcel_Report["Spanish"]["educacionanalisis"] = "";
	$placeHolderscarcel_Report["Spanish"]["educacionanalisis"] = "";
	$fieldLabelscarcel_Report["Spanish"]["profesion_oficio"] = "Profesion Oficio";
	$fieldToolTipscarcel_Report["Spanish"]["profesion_oficio"] = "";
	$placeHolderscarcel_Report["Spanish"]["profesion_oficio"] = "";
	$fieldLabelscarcel_Report["Spanish"]["estado_civil"] = "Estado Civil";
	$fieldToolTipscarcel_Report["Spanish"]["estado_civil"] = "";
	$placeHolderscarcel_Report["Spanish"]["estado_civil"] = "";
	$fieldLabelscarcel_Report["Spanish"]["ciudadania"] = "Ciudadania";
	$fieldToolTipscarcel_Report["Spanish"]["ciudadania"] = "";
	$placeHolderscarcel_Report["Spanish"]["ciudadania"] = "";
	$fieldLabelscarcel_Report["Spanish"]["mun_nacimiento"] = "Mun Nacimiento";
	$fieldToolTipscarcel_Report["Spanish"]["mun_nacimiento"] = "";
	$placeHolderscarcel_Report["Spanish"]["mun_nacimiento"] = "";
	$fieldLabelscarcel_Report["Spanish"]["depto_nacim"] = "Depto Nacim";
	$fieldToolTipscarcel_Report["Spanish"]["depto_nacim"] = "";
	$placeHolderscarcel_Report["Spanish"]["depto_nacim"] = "";
	$fieldLabelscarcel_Report["Spanish"]["direccion"] = "Direccion";
	$fieldToolTipscarcel_Report["Spanish"]["direccion"] = "";
	$placeHolderscarcel_Report["Spanish"]["direccion"] = "";
	$fieldLabelscarcel_Report["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipscarcel_Report["Spanish"]["mun_resid"] = "";
	$placeHolderscarcel_Report["Spanish"]["mun_resid"] = "";
	$fieldLabelscarcel_Report["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipscarcel_Report["Spanish"]["depart_resid"] = "";
	$placeHolderscarcel_Report["Spanish"]["depart_resid"] = "";
	$fieldLabelscarcel_Report["Spanish"]["delitosanalisis"] = "Delitosanalisis";
	$fieldToolTipscarcel_Report["Spanish"]["delitosanalisis"] = "";
	$placeHolderscarcel_Report["Spanish"]["delitosanalisis"] = "";
	$fieldLabelscarcel_Report["Spanish"]["sj_interno"] = "Sj Interno";
	$fieldToolTipscarcel_Report["Spanish"]["sj_interno"] = "";
	$placeHolderscarcel_Report["Spanish"]["sj_interno"] = "";
	$fieldLabelscarcel_Report["Spanish"]["fase"] = "Fase";
	$fieldToolTipscarcel_Report["Spanish"]["fase"] = "";
	$placeHolderscarcel_Report["Spanish"]["fase"] = "";
	$fieldLabelscarcel_Report["Spanish"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipscarcel_Report["Spanish"]["org_delictiva"] = "";
	$placeHolderscarcel_Report["Spanish"]["org_delictiva"] = "";
	$fieldLabelscarcel_Report["Spanish"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipscarcel_Report["Spanish"]["tipo_mara"] = "";
	$placeHolderscarcel_Report["Spanish"]["tipo_mara"] = "";
	$fieldLabelscarcel_Report["Spanish"]["reincidente"] = "Reincidente";
	$fieldToolTipscarcel_Report["Spanish"]["reincidente"] = "";
	$placeHolderscarcel_Report["Spanish"]["reincidente"] = "";
	$fieldLabelscarcel_Report["Spanish"]["deportado"] = "Deportado";
	$fieldToolTipscarcel_Report["Spanish"]["deportado"] = "";
	$placeHolderscarcel_Report["Spanish"]["deportado"] = "";
	$fieldLabelscarcel_Report["Spanish"]["direccion1"] = "Direccion1";
	$fieldToolTipscarcel_Report["Spanish"]["direccion1"] = "";
	$placeHolderscarcel_Report["Spanish"]["direccion1"] = "";
	$fieldLabelscarcel_Report["Spanish"]["sector"] = "Sector";
	$fieldToolTipscarcel_Report["Spanish"]["sector"] = "";
	$placeHolderscarcel_Report["Spanish"]["sector"] = "";
	$fieldLabelscarcel_Report["Spanish"]["celda"] = "Celda";
	$fieldToolTipscarcel_Report["Spanish"]["celda"] = "";
	$placeHolderscarcel_Report["Spanish"]["celda"] = "";
	$fieldLabelscarcel_Report["Spanish"]["fecha_ing__sp"] = "Fecha Ing  Sp";
	$fieldToolTipscarcel_Report["Spanish"]["fecha_ing__sp"] = "";
	$placeHolderscarcel_Report["Spanish"]["fecha_ing__sp"] = "";
	$fieldLabelscarcel_Report["Spanish"]["libro"] = "Libro";
	$fieldToolTipscarcel_Report["Spanish"]["libro"] = "";
	$placeHolderscarcel_Report["Spanish"]["libro"] = "";
	$fieldLabelscarcel_Report["Spanish"]["fecha_ing__cp"] = "Fecha Ing  Cp";
	$fieldToolTipscarcel_Report["Spanish"]["fecha_ing__cp"] = "";
	$placeHolderscarcel_Report["Spanish"]["fecha_ing__cp"] = "";
	$fieldLabelscarcel_Report["Spanish"]["total_delitos"] = "Total Delitos";
	$fieldToolTipscarcel_Report["Spanish"]["total_delitos"] = "";
	$placeHolderscarcel_Report["Spanish"]["total_delitos"] = "";
	$fieldLabelscarcel_Report["Spanish"]["delitos"] = "Delitos";
	$fieldToolTipscarcel_Report["Spanish"]["delitos"] = "";
	$placeHolderscarcel_Report["Spanish"]["delitos"] = "";
	$fieldLabelscarcel_Report["Spanish"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipscarcel_Report["Spanish"]["delitoanalisis"] = "";
	$placeHolderscarcel_Report["Spanish"]["delitoanalisis"] = "";
	$fieldLabelscarcel_Report["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipscarcel_Report["Spanish"]["sector_ppd"] = "";
	$placeHolderscarcel_Report["Spanish"]["sector_ppd"] = "";
	if (count($fieldToolTipscarcel_Report["Spanish"]))
		$tdatacarcel_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscarcel_Report["English"] = array();
	$fieldToolTipscarcel_Report["English"] = array();
	$placeHolderscarcel_Report["English"] = array();
	$pageTitlescarcel_Report["English"] = array();
	$fieldLabelscarcel_Report["English"]["id"] = "Id";
	$fieldToolTipscarcel_Report["English"]["id"] = "";
	$placeHolderscarcel_Report["English"]["id"] = "";
	$fieldLabelscarcel_Report["English"]["sipe"] = "Sipe";
	$fieldToolTipscarcel_Report["English"]["sipe"] = "";
	$placeHolderscarcel_Report["English"]["sipe"] = "";
	$fieldLabelscarcel_Report["English"]["afis"] = "Afis";
	$fieldToolTipscarcel_Report["English"]["afis"] = "";
	$placeHolderscarcel_Report["English"]["afis"] = "";
	$fieldLabelscarcel_Report["English"]["edad"] = "Edad";
	$fieldToolTipscarcel_Report["English"]["edad"] = "";
	$placeHolderscarcel_Report["English"]["edad"] = "";
	$fieldLabelscarcel_Report["English"]["rangoetario"] = "Rangoetario";
	$fieldToolTipscarcel_Report["English"]["rangoetario"] = "";
	$placeHolderscarcel_Report["English"]["rangoetario"] = "";
	$fieldLabelscarcel_Report["English"]["genero"] = "Genero";
	$fieldToolTipscarcel_Report["English"]["genero"] = "";
	$placeHolderscarcel_Report["English"]["genero"] = "";
	$fieldLabelscarcel_Report["English"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipscarcel_Report["English"]["fecha_nac"] = "";
	$placeHolderscarcel_Report["English"]["fecha_nac"] = "";
	$fieldLabelscarcel_Report["English"]["edad1"] = "Edad1";
	$fieldToolTipscarcel_Report["English"]["edad1"] = "";
	$placeHolderscarcel_Report["English"]["edad1"] = "";
	$fieldLabelscarcel_Report["English"]["dui"] = "Dui";
	$fieldToolTipscarcel_Report["English"]["dui"] = "";
	$placeHolderscarcel_Report["English"]["dui"] = "";
	$fieldLabelscarcel_Report["English"]["nivel_edu"] = "Nivel Edu";
	$fieldToolTipscarcel_Report["English"]["nivel_edu"] = "";
	$placeHolderscarcel_Report["English"]["nivel_edu"] = "";
	$fieldLabelscarcel_Report["English"]["educacionanalisis"] = "Educacionanalisis";
	$fieldToolTipscarcel_Report["English"]["educacionanalisis"] = "";
	$placeHolderscarcel_Report["English"]["educacionanalisis"] = "";
	$fieldLabelscarcel_Report["English"]["profesion_oficio"] = "Profesion Oficio";
	$fieldToolTipscarcel_Report["English"]["profesion_oficio"] = "";
	$placeHolderscarcel_Report["English"]["profesion_oficio"] = "";
	$fieldLabelscarcel_Report["English"]["estado_civil"] = "Estado Civil";
	$fieldToolTipscarcel_Report["English"]["estado_civil"] = "";
	$placeHolderscarcel_Report["English"]["estado_civil"] = "";
	$fieldLabelscarcel_Report["English"]["ciudadania"] = "Ciudadania";
	$fieldToolTipscarcel_Report["English"]["ciudadania"] = "";
	$placeHolderscarcel_Report["English"]["ciudadania"] = "";
	$fieldLabelscarcel_Report["English"]["mun_nacimiento"] = "Mun Nacimiento";
	$fieldToolTipscarcel_Report["English"]["mun_nacimiento"] = "";
	$placeHolderscarcel_Report["English"]["mun_nacimiento"] = "";
	$fieldLabelscarcel_Report["English"]["depto_nacim"] = "Depto Nacim";
	$fieldToolTipscarcel_Report["English"]["depto_nacim"] = "";
	$placeHolderscarcel_Report["English"]["depto_nacim"] = "";
	$fieldLabelscarcel_Report["English"]["direccion"] = "Direccion";
	$fieldToolTipscarcel_Report["English"]["direccion"] = "";
	$placeHolderscarcel_Report["English"]["direccion"] = "";
	$fieldLabelscarcel_Report["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipscarcel_Report["English"]["mun_resid"] = "";
	$placeHolderscarcel_Report["English"]["mun_resid"] = "";
	$fieldLabelscarcel_Report["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipscarcel_Report["English"]["depart_resid"] = "";
	$placeHolderscarcel_Report["English"]["depart_resid"] = "";
	$fieldLabelscarcel_Report["English"]["delitosanalisis"] = "Delitosanalisis";
	$fieldToolTipscarcel_Report["English"]["delitosanalisis"] = "";
	$placeHolderscarcel_Report["English"]["delitosanalisis"] = "";
	$fieldLabelscarcel_Report["English"]["sj_interno"] = "Sj Interno";
	$fieldToolTipscarcel_Report["English"]["sj_interno"] = "";
	$placeHolderscarcel_Report["English"]["sj_interno"] = "";
	$fieldLabelscarcel_Report["English"]["fase"] = "Fase";
	$fieldToolTipscarcel_Report["English"]["fase"] = "";
	$placeHolderscarcel_Report["English"]["fase"] = "";
	$fieldLabelscarcel_Report["English"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipscarcel_Report["English"]["org_delictiva"] = "";
	$placeHolderscarcel_Report["English"]["org_delictiva"] = "";
	$fieldLabelscarcel_Report["English"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipscarcel_Report["English"]["tipo_mara"] = "";
	$placeHolderscarcel_Report["English"]["tipo_mara"] = "";
	$fieldLabelscarcel_Report["English"]["reincidente"] = "Reincidente";
	$fieldToolTipscarcel_Report["English"]["reincidente"] = "";
	$placeHolderscarcel_Report["English"]["reincidente"] = "";
	$fieldLabelscarcel_Report["English"]["deportado"] = "Deportado";
	$fieldToolTipscarcel_Report["English"]["deportado"] = "";
	$placeHolderscarcel_Report["English"]["deportado"] = "";
	$fieldLabelscarcel_Report["English"]["direccion1"] = "Direccion1";
	$fieldToolTipscarcel_Report["English"]["direccion1"] = "";
	$placeHolderscarcel_Report["English"]["direccion1"] = "";
	$fieldLabelscarcel_Report["English"]["sector"] = "Sector";
	$fieldToolTipscarcel_Report["English"]["sector"] = "";
	$placeHolderscarcel_Report["English"]["sector"] = "";
	$fieldLabelscarcel_Report["English"]["celda"] = "Celda";
	$fieldToolTipscarcel_Report["English"]["celda"] = "";
	$placeHolderscarcel_Report["English"]["celda"] = "";
	$fieldLabelscarcel_Report["English"]["fecha_ing__sp"] = "Fecha Ing  Sp";
	$fieldToolTipscarcel_Report["English"]["fecha_ing__sp"] = "";
	$placeHolderscarcel_Report["English"]["fecha_ing__sp"] = "";
	$fieldLabelscarcel_Report["English"]["libro"] = "Libro";
	$fieldToolTipscarcel_Report["English"]["libro"] = "";
	$placeHolderscarcel_Report["English"]["libro"] = "";
	$fieldLabelscarcel_Report["English"]["fecha_ing__cp"] = "Fecha Ing  Cp";
	$fieldToolTipscarcel_Report["English"]["fecha_ing__cp"] = "";
	$placeHolderscarcel_Report["English"]["fecha_ing__cp"] = "";
	$fieldLabelscarcel_Report["English"]["total_delitos"] = "Total Delitos";
	$fieldToolTipscarcel_Report["English"]["total_delitos"] = "";
	$placeHolderscarcel_Report["English"]["total_delitos"] = "";
	$fieldLabelscarcel_Report["English"]["delitos"] = "Delitos";
	$fieldToolTipscarcel_Report["English"]["delitos"] = "";
	$placeHolderscarcel_Report["English"]["delitos"] = "";
	$fieldLabelscarcel_Report["English"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipscarcel_Report["English"]["delitoanalisis"] = "";
	$placeHolderscarcel_Report["English"]["delitoanalisis"] = "";
	$fieldLabelscarcel_Report["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipscarcel_Report["English"]["sector_ppd"] = "";
	$placeHolderscarcel_Report["English"]["sector_ppd"] = "";
	if (count($fieldToolTipscarcel_Report["English"]))
		$tdatacarcel_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscarcel_Report[""] = array();
	$fieldToolTipscarcel_Report[""] = array();
	$placeHolderscarcel_Report[""] = array();
	$pageTitlescarcel_Report[""] = array();
	if (count($fieldToolTipscarcel_Report[""]))
		$tdatacarcel_Report[".isUseToolTips"] = true;
}


	$tdatacarcel_Report[".NCSearch"] = true;



$tdatacarcel_Report[".shortTableName"] = "carcel_Report";
$tdatacarcel_Report[".nSecOptions"] = 0;
$tdatacarcel_Report[".recsPerRowPrint"] = 1;
$tdatacarcel_Report[".mainTableOwnerID"] = "";
$tdatacarcel_Report[".moveNext"] = 1;
$tdatacarcel_Report[".entityType"] = 2;

$tdatacarcel_Report[".strOriginalTableName"] = "carcel";

	



$tdatacarcel_Report[".showAddInPopup"] = false;

$tdatacarcel_Report[".showEditInPopup"] = false;

$tdatacarcel_Report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacarcel_Report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacarcel_Report[".fieldsForRegister"] = array();

$tdatacarcel_Report[".listAjax"] = false;

	$tdatacarcel_Report[".audit"] = false;

	$tdatacarcel_Report[".locking"] = false;



$tdatacarcel_Report[".list"] = true;



$tdatacarcel_Report[".reorderRecordsByHeader"] = true;





$tdatacarcel_Report[".exportTo"] = true;

$tdatacarcel_Report[".printFriendly"] = true;


$tdatacarcel_Report[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacarcel_Report[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacarcel_Report[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacarcel_Report[".searchSaving"] = false;
//

$tdatacarcel_Report[".showSearchPanel"] = true;
		$tdatacarcel_Report[".flexibleSearch"] = true;

$tdatacarcel_Report[".isUseAjaxSuggest"] = true;






$tdatacarcel_Report[".ajaxCodeSnippetAdded"] = false;

$tdatacarcel_Report[".buttonsAdded"] = false;

$tdatacarcel_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacarcel_Report[".isUseTimeForSearch"] = false;





$tdatacarcel_Report[".allSearchFields"] = array();
$tdatacarcel_Report[".filterFields"] = array();
$tdatacarcel_Report[".requiredSearchFields"] = array();

$tdatacarcel_Report[".allSearchFields"][] = "id";
	$tdatacarcel_Report[".allSearchFields"][] = "sipe";
	$tdatacarcel_Report[".allSearchFields"][] = "afis";
	$tdatacarcel_Report[".allSearchFields"][] = "edad";
	$tdatacarcel_Report[".allSearchFields"][] = "rangoetario";
	$tdatacarcel_Report[".allSearchFields"][] = "genero";
	$tdatacarcel_Report[".allSearchFields"][] = "fecha_nac";
	$tdatacarcel_Report[".allSearchFields"][] = "edad1";
	$tdatacarcel_Report[".allSearchFields"][] = "dui";
	$tdatacarcel_Report[".allSearchFields"][] = "nivel_edu";
	$tdatacarcel_Report[".allSearchFields"][] = "educacionanalisis";
	$tdatacarcel_Report[".allSearchFields"][] = "profesion_oficio";
	$tdatacarcel_Report[".allSearchFields"][] = "estado_civil";
	$tdatacarcel_Report[".allSearchFields"][] = "ciudadania";
	$tdatacarcel_Report[".allSearchFields"][] = "mun_nacimiento";
	$tdatacarcel_Report[".allSearchFields"][] = "depto_nacim";
	$tdatacarcel_Report[".allSearchFields"][] = "direccion";
	$tdatacarcel_Report[".allSearchFields"][] = "mun_resid";
	$tdatacarcel_Report[".allSearchFields"][] = "depart_resid";
	$tdatacarcel_Report[".allSearchFields"][] = "delitosanalisis";
	$tdatacarcel_Report[".allSearchFields"][] = "sj_interno";
	$tdatacarcel_Report[".allSearchFields"][] = "fase";
	$tdatacarcel_Report[".allSearchFields"][] = "org_delictiva";
	$tdatacarcel_Report[".allSearchFields"][] = "tipo_mara";
	$tdatacarcel_Report[".allSearchFields"][] = "reincidente";
	$tdatacarcel_Report[".allSearchFields"][] = "deportado";
	$tdatacarcel_Report[".allSearchFields"][] = "direccion1";
	$tdatacarcel_Report[".allSearchFields"][] = "sector";
	$tdatacarcel_Report[".allSearchFields"][] = "celda";
	$tdatacarcel_Report[".allSearchFields"][] = "fecha_ing__sp";
	$tdatacarcel_Report[".allSearchFields"][] = "libro";
	$tdatacarcel_Report[".allSearchFields"][] = "fecha_ing__cp";
	$tdatacarcel_Report[".allSearchFields"][] = "total_delitos";
	$tdatacarcel_Report[".allSearchFields"][] = "delitos";
	$tdatacarcel_Report[".allSearchFields"][] = "delitoanalisis";
	$tdatacarcel_Report[".allSearchFields"][] = "sector_ppd";
	

$tdatacarcel_Report[".googleLikeFields"] = array();
$tdatacarcel_Report[".googleLikeFields"][] = "id";
$tdatacarcel_Report[".googleLikeFields"][] = "sipe";
$tdatacarcel_Report[".googleLikeFields"][] = "afis";
$tdatacarcel_Report[".googleLikeFields"][] = "edad";
$tdatacarcel_Report[".googleLikeFields"][] = "rangoetario";
$tdatacarcel_Report[".googleLikeFields"][] = "genero";
$tdatacarcel_Report[".googleLikeFields"][] = "fecha_nac";
$tdatacarcel_Report[".googleLikeFields"][] = "edad1";
$tdatacarcel_Report[".googleLikeFields"][] = "dui";
$tdatacarcel_Report[".googleLikeFields"][] = "nivel_edu";
$tdatacarcel_Report[".googleLikeFields"][] = "educacionanalisis";
$tdatacarcel_Report[".googleLikeFields"][] = "profesion_oficio";
$tdatacarcel_Report[".googleLikeFields"][] = "estado_civil";
$tdatacarcel_Report[".googleLikeFields"][] = "ciudadania";
$tdatacarcel_Report[".googleLikeFields"][] = "mun_nacimiento";
$tdatacarcel_Report[".googleLikeFields"][] = "depto_nacim";
$tdatacarcel_Report[".googleLikeFields"][] = "direccion";
$tdatacarcel_Report[".googleLikeFields"][] = "mun_resid";
$tdatacarcel_Report[".googleLikeFields"][] = "depart_resid";
$tdatacarcel_Report[".googleLikeFields"][] = "delitosanalisis";
$tdatacarcel_Report[".googleLikeFields"][] = "sj_interno";
$tdatacarcel_Report[".googleLikeFields"][] = "fase";
$tdatacarcel_Report[".googleLikeFields"][] = "org_delictiva";
$tdatacarcel_Report[".googleLikeFields"][] = "tipo_mara";
$tdatacarcel_Report[".googleLikeFields"][] = "reincidente";
$tdatacarcel_Report[".googleLikeFields"][] = "deportado";
$tdatacarcel_Report[".googleLikeFields"][] = "direccion1";
$tdatacarcel_Report[".googleLikeFields"][] = "sector";
$tdatacarcel_Report[".googleLikeFields"][] = "celda";
$tdatacarcel_Report[".googleLikeFields"][] = "fecha_ing__sp";
$tdatacarcel_Report[".googleLikeFields"][] = "libro";
$tdatacarcel_Report[".googleLikeFields"][] = "fecha_ing__cp";
$tdatacarcel_Report[".googleLikeFields"][] = "total_delitos";
$tdatacarcel_Report[".googleLikeFields"][] = "delitos";
$tdatacarcel_Report[".googleLikeFields"][] = "delitoanalisis";
$tdatacarcel_Report[".googleLikeFields"][] = "sector_ppd";


$tdatacarcel_Report[".advSearchFields"] = array();
$tdatacarcel_Report[".advSearchFields"][] = "id";
$tdatacarcel_Report[".advSearchFields"][] = "sipe";
$tdatacarcel_Report[".advSearchFields"][] = "afis";
$tdatacarcel_Report[".advSearchFields"][] = "edad";
$tdatacarcel_Report[".advSearchFields"][] = "rangoetario";
$tdatacarcel_Report[".advSearchFields"][] = "genero";
$tdatacarcel_Report[".advSearchFields"][] = "fecha_nac";
$tdatacarcel_Report[".advSearchFields"][] = "edad1";
$tdatacarcel_Report[".advSearchFields"][] = "dui";
$tdatacarcel_Report[".advSearchFields"][] = "nivel_edu";
$tdatacarcel_Report[".advSearchFields"][] = "educacionanalisis";
$tdatacarcel_Report[".advSearchFields"][] = "profesion_oficio";
$tdatacarcel_Report[".advSearchFields"][] = "estado_civil";
$tdatacarcel_Report[".advSearchFields"][] = "ciudadania";
$tdatacarcel_Report[".advSearchFields"][] = "mun_nacimiento";
$tdatacarcel_Report[".advSearchFields"][] = "depto_nacim";
$tdatacarcel_Report[".advSearchFields"][] = "direccion";
$tdatacarcel_Report[".advSearchFields"][] = "mun_resid";
$tdatacarcel_Report[".advSearchFields"][] = "depart_resid";
$tdatacarcel_Report[".advSearchFields"][] = "delitosanalisis";
$tdatacarcel_Report[".advSearchFields"][] = "sj_interno";
$tdatacarcel_Report[".advSearchFields"][] = "fase";
$tdatacarcel_Report[".advSearchFields"][] = "org_delictiva";
$tdatacarcel_Report[".advSearchFields"][] = "tipo_mara";
$tdatacarcel_Report[".advSearchFields"][] = "reincidente";
$tdatacarcel_Report[".advSearchFields"][] = "deportado";
$tdatacarcel_Report[".advSearchFields"][] = "direccion1";
$tdatacarcel_Report[".advSearchFields"][] = "sector";
$tdatacarcel_Report[".advSearchFields"][] = "celda";
$tdatacarcel_Report[".advSearchFields"][] = "fecha_ing__sp";
$tdatacarcel_Report[".advSearchFields"][] = "libro";
$tdatacarcel_Report[".advSearchFields"][] = "fecha_ing__cp";
$tdatacarcel_Report[".advSearchFields"][] = "total_delitos";
$tdatacarcel_Report[".advSearchFields"][] = "delitos";
$tdatacarcel_Report[".advSearchFields"][] = "delitoanalisis";
$tdatacarcel_Report[".advSearchFields"][] = "sector_ppd";

$tdatacarcel_Report[".tableType"] = "report";

$tdatacarcel_Report[".printerPageOrientation"] = 0;
$tdatacarcel_Report[".nPrinterPageScale"] = 100;

$tdatacarcel_Report[".nPrinterSplitRecords"] = 40;

$tdatacarcel_Report[".nPrinterPDFSplitRecords"] = 40;



$tdatacarcel_Report[".geocodingEnabled"] = false;

//report settings
$tdatacarcel_Report[".printReportLayout"] = 6;

$tdatacarcel_Report[".reportPrintPartitionType"] = 1;
$tdatacarcel_Report[".reportPrintGroupsPerPage"] = 40;
$tdatacarcel_Report[".reportPrintPDFGroupsPerPage"] = 40;
$tdatacarcel_Report[".lowGroup"] = 0;



$tdatacarcel_Report[".pageSize"] = 20;






$tdatacarcel_Report[".repShowDet"] = true;

$tdatacarcel_Report[".reportLayout"] = 6;

//end of report settings




$tdatacarcel_Report[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacarcel_Report[".strOrderBy"] = $tstrOrderBy;

$tdatacarcel_Report[".orderindexes"] = array();

$tdatacarcel_Report[".sqlHead"] = "SELECT id,  	sipe,  	afis,  	edad,  	rangoetario,  	genero,  	fecha_nac,  	edad1,  	dui,  	nivel_edu,  	educacionanalisis,  	profesion_oficio,  	estado_civil,  	ciudadania,  	mun_nacimiento,  	depto_nacim,  	direccion,  	mun_resid,  	depart_resid,  	delitosanalisis,  	sj_interno,  	fase,  	org_delictiva,  	tipo_mara,  	reincidente,  	deportado,  	direccion1,  	sector,  	celda,  	fecha_ing__sp,  	libro,  	fecha_ing__cp,  	total_delitos,  	delitos,  	delitoanalisis,  	sector_ppd";
$tdatacarcel_Report[".sqlFrom"] = "FROM carcel";
$tdatacarcel_Report[".sqlWhereExpr"] = "";
$tdatacarcel_Report[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarcel_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarcel_Report[".arrGroupsPerPage"] = $arrGPP;

$tdatacarcel_Report[".highlightSearchResults"] = true;

$tableKeyscarcel_Report = array();
$tdatacarcel_Report[".Keys"] = $tableKeyscarcel_Report;

$tdatacarcel_Report[".listFields"] = array();
$tdatacarcel_Report[".listFields"][] = "id";
$tdatacarcel_Report[".listFields"][] = "sipe";
$tdatacarcel_Report[".listFields"][] = "afis";
$tdatacarcel_Report[".listFields"][] = "edad";
$tdatacarcel_Report[".listFields"][] = "rangoetario";
$tdatacarcel_Report[".listFields"][] = "genero";
$tdatacarcel_Report[".listFields"][] = "fecha_nac";
$tdatacarcel_Report[".listFields"][] = "edad1";
$tdatacarcel_Report[".listFields"][] = "dui";
$tdatacarcel_Report[".listFields"][] = "nivel_edu";
$tdatacarcel_Report[".listFields"][] = "educacionanalisis";
$tdatacarcel_Report[".listFields"][] = "profesion_oficio";
$tdatacarcel_Report[".listFields"][] = "estado_civil";
$tdatacarcel_Report[".listFields"][] = "ciudadania";
$tdatacarcel_Report[".listFields"][] = "mun_nacimiento";
$tdatacarcel_Report[".listFields"][] = "depto_nacim";
$tdatacarcel_Report[".listFields"][] = "direccion";
$tdatacarcel_Report[".listFields"][] = "mun_resid";
$tdatacarcel_Report[".listFields"][] = "depart_resid";
$tdatacarcel_Report[".listFields"][] = "delitosanalisis";
$tdatacarcel_Report[".listFields"][] = "sj_interno";
$tdatacarcel_Report[".listFields"][] = "fase";
$tdatacarcel_Report[".listFields"][] = "org_delictiva";
$tdatacarcel_Report[".listFields"][] = "tipo_mara";
$tdatacarcel_Report[".listFields"][] = "reincidente";
$tdatacarcel_Report[".listFields"][] = "deportado";
$tdatacarcel_Report[".listFields"][] = "direccion1";
$tdatacarcel_Report[".listFields"][] = "sector";
$tdatacarcel_Report[".listFields"][] = "celda";
$tdatacarcel_Report[".listFields"][] = "fecha_ing__sp";
$tdatacarcel_Report[".listFields"][] = "libro";
$tdatacarcel_Report[".listFields"][] = "fecha_ing__cp";
$tdatacarcel_Report[".listFields"][] = "total_delitos";
$tdatacarcel_Report[".listFields"][] = "delitos";
$tdatacarcel_Report[".listFields"][] = "delitoanalisis";
$tdatacarcel_Report[".listFields"][] = "sector_ppd";

$tdatacarcel_Report[".hideMobileList"] = array();


$tdatacarcel_Report[".viewFields"] = array();
$tdatacarcel_Report[".viewFields"][] = "id";
$tdatacarcel_Report[".viewFields"][] = "sipe";
$tdatacarcel_Report[".viewFields"][] = "afis";
$tdatacarcel_Report[".viewFields"][] = "edad";
$tdatacarcel_Report[".viewFields"][] = "rangoetario";
$tdatacarcel_Report[".viewFields"][] = "genero";
$tdatacarcel_Report[".viewFields"][] = "fecha_nac";
$tdatacarcel_Report[".viewFields"][] = "edad1";
$tdatacarcel_Report[".viewFields"][] = "dui";
$tdatacarcel_Report[".viewFields"][] = "nivel_edu";
$tdatacarcel_Report[".viewFields"][] = "educacionanalisis";
$tdatacarcel_Report[".viewFields"][] = "profesion_oficio";
$tdatacarcel_Report[".viewFields"][] = "estado_civil";
$tdatacarcel_Report[".viewFields"][] = "ciudadania";
$tdatacarcel_Report[".viewFields"][] = "mun_nacimiento";
$tdatacarcel_Report[".viewFields"][] = "depto_nacim";
$tdatacarcel_Report[".viewFields"][] = "direccion";
$tdatacarcel_Report[".viewFields"][] = "mun_resid";
$tdatacarcel_Report[".viewFields"][] = "depart_resid";
$tdatacarcel_Report[".viewFields"][] = "delitosanalisis";
$tdatacarcel_Report[".viewFields"][] = "sj_interno";
$tdatacarcel_Report[".viewFields"][] = "fase";
$tdatacarcel_Report[".viewFields"][] = "org_delictiva";
$tdatacarcel_Report[".viewFields"][] = "tipo_mara";
$tdatacarcel_Report[".viewFields"][] = "reincidente";
$tdatacarcel_Report[".viewFields"][] = "deportado";
$tdatacarcel_Report[".viewFields"][] = "direccion1";
$tdatacarcel_Report[".viewFields"][] = "sector";
$tdatacarcel_Report[".viewFields"][] = "celda";
$tdatacarcel_Report[".viewFields"][] = "fecha_ing__sp";
$tdatacarcel_Report[".viewFields"][] = "libro";
$tdatacarcel_Report[".viewFields"][] = "fecha_ing__cp";
$tdatacarcel_Report[".viewFields"][] = "total_delitos";
$tdatacarcel_Report[".viewFields"][] = "delitos";
$tdatacarcel_Report[".viewFields"][] = "delitoanalisis";
$tdatacarcel_Report[".viewFields"][] = "sector_ppd";

$tdatacarcel_Report[".addFields"] = array();
$tdatacarcel_Report[".addFields"][] = "id";
$tdatacarcel_Report[".addFields"][] = "sipe";
$tdatacarcel_Report[".addFields"][] = "afis";
$tdatacarcel_Report[".addFields"][] = "edad";
$tdatacarcel_Report[".addFields"][] = "rangoetario";
$tdatacarcel_Report[".addFields"][] = "genero";
$tdatacarcel_Report[".addFields"][] = "fecha_nac";
$tdatacarcel_Report[".addFields"][] = "edad1";
$tdatacarcel_Report[".addFields"][] = "dui";
$tdatacarcel_Report[".addFields"][] = "nivel_edu";
$tdatacarcel_Report[".addFields"][] = "educacionanalisis";
$tdatacarcel_Report[".addFields"][] = "profesion_oficio";
$tdatacarcel_Report[".addFields"][] = "estado_civil";
$tdatacarcel_Report[".addFields"][] = "ciudadania";
$tdatacarcel_Report[".addFields"][] = "mun_nacimiento";
$tdatacarcel_Report[".addFields"][] = "depto_nacim";
$tdatacarcel_Report[".addFields"][] = "direccion";
$tdatacarcel_Report[".addFields"][] = "mun_resid";
$tdatacarcel_Report[".addFields"][] = "depart_resid";
$tdatacarcel_Report[".addFields"][] = "delitosanalisis";
$tdatacarcel_Report[".addFields"][] = "sj_interno";
$tdatacarcel_Report[".addFields"][] = "fase";
$tdatacarcel_Report[".addFields"][] = "org_delictiva";
$tdatacarcel_Report[".addFields"][] = "tipo_mara";
$tdatacarcel_Report[".addFields"][] = "reincidente";
$tdatacarcel_Report[".addFields"][] = "deportado";
$tdatacarcel_Report[".addFields"][] = "direccion1";
$tdatacarcel_Report[".addFields"][] = "sector";
$tdatacarcel_Report[".addFields"][] = "celda";
$tdatacarcel_Report[".addFields"][] = "fecha_ing__sp";
$tdatacarcel_Report[".addFields"][] = "libro";
$tdatacarcel_Report[".addFields"][] = "fecha_ing__cp";
$tdatacarcel_Report[".addFields"][] = "total_delitos";
$tdatacarcel_Report[".addFields"][] = "delitos";
$tdatacarcel_Report[".addFields"][] = "delitoanalisis";
$tdatacarcel_Report[".addFields"][] = "sector_ppd";

$tdatacarcel_Report[".masterListFields"] = array();
$tdatacarcel_Report[".masterListFields"][] = "id";
$tdatacarcel_Report[".masterListFields"][] = "sipe";
$tdatacarcel_Report[".masterListFields"][] = "afis";
$tdatacarcel_Report[".masterListFields"][] = "edad";
$tdatacarcel_Report[".masterListFields"][] = "rangoetario";
$tdatacarcel_Report[".masterListFields"][] = "genero";
$tdatacarcel_Report[".masterListFields"][] = "fecha_nac";
$tdatacarcel_Report[".masterListFields"][] = "edad1";
$tdatacarcel_Report[".masterListFields"][] = "dui";
$tdatacarcel_Report[".masterListFields"][] = "nivel_edu";
$tdatacarcel_Report[".masterListFields"][] = "educacionanalisis";
$tdatacarcel_Report[".masterListFields"][] = "profesion_oficio";
$tdatacarcel_Report[".masterListFields"][] = "estado_civil";
$tdatacarcel_Report[".masterListFields"][] = "ciudadania";
$tdatacarcel_Report[".masterListFields"][] = "mun_nacimiento";
$tdatacarcel_Report[".masterListFields"][] = "depto_nacim";
$tdatacarcel_Report[".masterListFields"][] = "direccion";
$tdatacarcel_Report[".masterListFields"][] = "mun_resid";
$tdatacarcel_Report[".masterListFields"][] = "depart_resid";
$tdatacarcel_Report[".masterListFields"][] = "delitosanalisis";
$tdatacarcel_Report[".masterListFields"][] = "sj_interno";
$tdatacarcel_Report[".masterListFields"][] = "fase";
$tdatacarcel_Report[".masterListFields"][] = "org_delictiva";
$tdatacarcel_Report[".masterListFields"][] = "tipo_mara";
$tdatacarcel_Report[".masterListFields"][] = "reincidente";
$tdatacarcel_Report[".masterListFields"][] = "deportado";
$tdatacarcel_Report[".masterListFields"][] = "direccion1";
$tdatacarcel_Report[".masterListFields"][] = "sector";
$tdatacarcel_Report[".masterListFields"][] = "celda";
$tdatacarcel_Report[".masterListFields"][] = "fecha_ing__sp";
$tdatacarcel_Report[".masterListFields"][] = "libro";
$tdatacarcel_Report[".masterListFields"][] = "fecha_ing__cp";
$tdatacarcel_Report[".masterListFields"][] = "total_delitos";
$tdatacarcel_Report[".masterListFields"][] = "delitos";
$tdatacarcel_Report[".masterListFields"][] = "delitoanalisis";
$tdatacarcel_Report[".masterListFields"][] = "sector_ppd";

$tdatacarcel_Report[".inlineAddFields"] = array();
$tdatacarcel_Report[".inlineAddFields"][] = "id";
$tdatacarcel_Report[".inlineAddFields"][] = "sipe";
$tdatacarcel_Report[".inlineAddFields"][] = "afis";
$tdatacarcel_Report[".inlineAddFields"][] = "edad";
$tdatacarcel_Report[".inlineAddFields"][] = "rangoetario";
$tdatacarcel_Report[".inlineAddFields"][] = "genero";
$tdatacarcel_Report[".inlineAddFields"][] = "fecha_nac";
$tdatacarcel_Report[".inlineAddFields"][] = "edad1";
$tdatacarcel_Report[".inlineAddFields"][] = "dui";
$tdatacarcel_Report[".inlineAddFields"][] = "nivel_edu";
$tdatacarcel_Report[".inlineAddFields"][] = "educacionanalisis";
$tdatacarcel_Report[".inlineAddFields"][] = "profesion_oficio";
$tdatacarcel_Report[".inlineAddFields"][] = "estado_civil";
$tdatacarcel_Report[".inlineAddFields"][] = "ciudadania";
$tdatacarcel_Report[".inlineAddFields"][] = "mun_nacimiento";
$tdatacarcel_Report[".inlineAddFields"][] = "depto_nacim";
$tdatacarcel_Report[".inlineAddFields"][] = "direccion";
$tdatacarcel_Report[".inlineAddFields"][] = "mun_resid";
$tdatacarcel_Report[".inlineAddFields"][] = "depart_resid";
$tdatacarcel_Report[".inlineAddFields"][] = "delitosanalisis";
$tdatacarcel_Report[".inlineAddFields"][] = "sj_interno";
$tdatacarcel_Report[".inlineAddFields"][] = "fase";
$tdatacarcel_Report[".inlineAddFields"][] = "org_delictiva";
$tdatacarcel_Report[".inlineAddFields"][] = "tipo_mara";
$tdatacarcel_Report[".inlineAddFields"][] = "reincidente";
$tdatacarcel_Report[".inlineAddFields"][] = "deportado";
$tdatacarcel_Report[".inlineAddFields"][] = "direccion1";
$tdatacarcel_Report[".inlineAddFields"][] = "sector";
$tdatacarcel_Report[".inlineAddFields"][] = "celda";
$tdatacarcel_Report[".inlineAddFields"][] = "fecha_ing__sp";
$tdatacarcel_Report[".inlineAddFields"][] = "libro";
$tdatacarcel_Report[".inlineAddFields"][] = "fecha_ing__cp";
$tdatacarcel_Report[".inlineAddFields"][] = "total_delitos";
$tdatacarcel_Report[".inlineAddFields"][] = "delitos";
$tdatacarcel_Report[".inlineAddFields"][] = "delitoanalisis";
$tdatacarcel_Report[".inlineAddFields"][] = "sector_ppd";

$tdatacarcel_Report[".editFields"] = array();
$tdatacarcel_Report[".editFields"][] = "id";
$tdatacarcel_Report[".editFields"][] = "sipe";
$tdatacarcel_Report[".editFields"][] = "afis";
$tdatacarcel_Report[".editFields"][] = "edad";
$tdatacarcel_Report[".editFields"][] = "rangoetario";
$tdatacarcel_Report[".editFields"][] = "genero";
$tdatacarcel_Report[".editFields"][] = "fecha_nac";
$tdatacarcel_Report[".editFields"][] = "edad1";
$tdatacarcel_Report[".editFields"][] = "dui";
$tdatacarcel_Report[".editFields"][] = "nivel_edu";
$tdatacarcel_Report[".editFields"][] = "educacionanalisis";
$tdatacarcel_Report[".editFields"][] = "profesion_oficio";
$tdatacarcel_Report[".editFields"][] = "estado_civil";
$tdatacarcel_Report[".editFields"][] = "ciudadania";
$tdatacarcel_Report[".editFields"][] = "mun_nacimiento";
$tdatacarcel_Report[".editFields"][] = "depto_nacim";
$tdatacarcel_Report[".editFields"][] = "direccion";
$tdatacarcel_Report[".editFields"][] = "mun_resid";
$tdatacarcel_Report[".editFields"][] = "depart_resid";
$tdatacarcel_Report[".editFields"][] = "delitosanalisis";
$tdatacarcel_Report[".editFields"][] = "sj_interno";
$tdatacarcel_Report[".editFields"][] = "fase";
$tdatacarcel_Report[".editFields"][] = "org_delictiva";
$tdatacarcel_Report[".editFields"][] = "tipo_mara";
$tdatacarcel_Report[".editFields"][] = "reincidente";
$tdatacarcel_Report[".editFields"][] = "deportado";
$tdatacarcel_Report[".editFields"][] = "direccion1";
$tdatacarcel_Report[".editFields"][] = "sector";
$tdatacarcel_Report[".editFields"][] = "celda";
$tdatacarcel_Report[".editFields"][] = "fecha_ing__sp";
$tdatacarcel_Report[".editFields"][] = "libro";
$tdatacarcel_Report[".editFields"][] = "fecha_ing__cp";
$tdatacarcel_Report[".editFields"][] = "total_delitos";
$tdatacarcel_Report[".editFields"][] = "delitos";
$tdatacarcel_Report[".editFields"][] = "delitoanalisis";
$tdatacarcel_Report[".editFields"][] = "sector_ppd";

$tdatacarcel_Report[".inlineEditFields"] = array();
$tdatacarcel_Report[".inlineEditFields"][] = "id";
$tdatacarcel_Report[".inlineEditFields"][] = "sipe";
$tdatacarcel_Report[".inlineEditFields"][] = "afis";
$tdatacarcel_Report[".inlineEditFields"][] = "edad";
$tdatacarcel_Report[".inlineEditFields"][] = "rangoetario";
$tdatacarcel_Report[".inlineEditFields"][] = "genero";
$tdatacarcel_Report[".inlineEditFields"][] = "fecha_nac";
$tdatacarcel_Report[".inlineEditFields"][] = "edad1";
$tdatacarcel_Report[".inlineEditFields"][] = "dui";
$tdatacarcel_Report[".inlineEditFields"][] = "nivel_edu";
$tdatacarcel_Report[".inlineEditFields"][] = "educacionanalisis";
$tdatacarcel_Report[".inlineEditFields"][] = "profesion_oficio";
$tdatacarcel_Report[".inlineEditFields"][] = "estado_civil";
$tdatacarcel_Report[".inlineEditFields"][] = "ciudadania";
$tdatacarcel_Report[".inlineEditFields"][] = "mun_nacimiento";
$tdatacarcel_Report[".inlineEditFields"][] = "depto_nacim";
$tdatacarcel_Report[".inlineEditFields"][] = "direccion";
$tdatacarcel_Report[".inlineEditFields"][] = "mun_resid";
$tdatacarcel_Report[".inlineEditFields"][] = "depart_resid";
$tdatacarcel_Report[".inlineEditFields"][] = "delitosanalisis";
$tdatacarcel_Report[".inlineEditFields"][] = "sj_interno";
$tdatacarcel_Report[".inlineEditFields"][] = "fase";
$tdatacarcel_Report[".inlineEditFields"][] = "org_delictiva";
$tdatacarcel_Report[".inlineEditFields"][] = "tipo_mara";
$tdatacarcel_Report[".inlineEditFields"][] = "reincidente";
$tdatacarcel_Report[".inlineEditFields"][] = "deportado";
$tdatacarcel_Report[".inlineEditFields"][] = "direccion1";
$tdatacarcel_Report[".inlineEditFields"][] = "sector";
$tdatacarcel_Report[".inlineEditFields"][] = "celda";
$tdatacarcel_Report[".inlineEditFields"][] = "fecha_ing__sp";
$tdatacarcel_Report[".inlineEditFields"][] = "libro";
$tdatacarcel_Report[".inlineEditFields"][] = "fecha_ing__cp";
$tdatacarcel_Report[".inlineEditFields"][] = "total_delitos";
$tdatacarcel_Report[".inlineEditFields"][] = "delitos";
$tdatacarcel_Report[".inlineEditFields"][] = "delitoanalisis";
$tdatacarcel_Report[".inlineEditFields"][] = "sector_ppd";

$tdatacarcel_Report[".updateSelectedFields"] = array();
$tdatacarcel_Report[".updateSelectedFields"][] = "id";
$tdatacarcel_Report[".updateSelectedFields"][] = "sipe";
$tdatacarcel_Report[".updateSelectedFields"][] = "afis";
$tdatacarcel_Report[".updateSelectedFields"][] = "edad";
$tdatacarcel_Report[".updateSelectedFields"][] = "rangoetario";
$tdatacarcel_Report[".updateSelectedFields"][] = "genero";
$tdatacarcel_Report[".updateSelectedFields"][] = "fecha_nac";
$tdatacarcel_Report[".updateSelectedFields"][] = "edad1";
$tdatacarcel_Report[".updateSelectedFields"][] = "dui";
$tdatacarcel_Report[".updateSelectedFields"][] = "nivel_edu";
$tdatacarcel_Report[".updateSelectedFields"][] = "educacionanalisis";
$tdatacarcel_Report[".updateSelectedFields"][] = "profesion_oficio";
$tdatacarcel_Report[".updateSelectedFields"][] = "estado_civil";
$tdatacarcel_Report[".updateSelectedFields"][] = "ciudadania";
$tdatacarcel_Report[".updateSelectedFields"][] = "mun_nacimiento";
$tdatacarcel_Report[".updateSelectedFields"][] = "depto_nacim";
$tdatacarcel_Report[".updateSelectedFields"][] = "direccion";
$tdatacarcel_Report[".updateSelectedFields"][] = "mun_resid";
$tdatacarcel_Report[".updateSelectedFields"][] = "depart_resid";
$tdatacarcel_Report[".updateSelectedFields"][] = "delitosanalisis";
$tdatacarcel_Report[".updateSelectedFields"][] = "sj_interno";
$tdatacarcel_Report[".updateSelectedFields"][] = "fase";
$tdatacarcel_Report[".updateSelectedFields"][] = "org_delictiva";
$tdatacarcel_Report[".updateSelectedFields"][] = "tipo_mara";
$tdatacarcel_Report[".updateSelectedFields"][] = "reincidente";
$tdatacarcel_Report[".updateSelectedFields"][] = "deportado";
$tdatacarcel_Report[".updateSelectedFields"][] = "direccion1";
$tdatacarcel_Report[".updateSelectedFields"][] = "sector";
$tdatacarcel_Report[".updateSelectedFields"][] = "celda";
$tdatacarcel_Report[".updateSelectedFields"][] = "fecha_ing__sp";
$tdatacarcel_Report[".updateSelectedFields"][] = "libro";
$tdatacarcel_Report[".updateSelectedFields"][] = "fecha_ing__cp";
$tdatacarcel_Report[".updateSelectedFields"][] = "total_delitos";
$tdatacarcel_Report[".updateSelectedFields"][] = "delitos";
$tdatacarcel_Report[".updateSelectedFields"][] = "delitoanalisis";
$tdatacarcel_Report[".updateSelectedFields"][] = "sector_ppd";


$tdatacarcel_Report[".exportFields"] = array();
$tdatacarcel_Report[".exportFields"][] = "id";
$tdatacarcel_Report[".exportFields"][] = "sipe";
$tdatacarcel_Report[".exportFields"][] = "afis";
$tdatacarcel_Report[".exportFields"][] = "edad";
$tdatacarcel_Report[".exportFields"][] = "rangoetario";
$tdatacarcel_Report[".exportFields"][] = "genero";
$tdatacarcel_Report[".exportFields"][] = "fecha_nac";
$tdatacarcel_Report[".exportFields"][] = "edad1";
$tdatacarcel_Report[".exportFields"][] = "dui";
$tdatacarcel_Report[".exportFields"][] = "nivel_edu";
$tdatacarcel_Report[".exportFields"][] = "educacionanalisis";
$tdatacarcel_Report[".exportFields"][] = "profesion_oficio";
$tdatacarcel_Report[".exportFields"][] = "estado_civil";
$tdatacarcel_Report[".exportFields"][] = "ciudadania";
$tdatacarcel_Report[".exportFields"][] = "mun_nacimiento";
$tdatacarcel_Report[".exportFields"][] = "depto_nacim";
$tdatacarcel_Report[".exportFields"][] = "direccion";
$tdatacarcel_Report[".exportFields"][] = "mun_resid";
$tdatacarcel_Report[".exportFields"][] = "depart_resid";
$tdatacarcel_Report[".exportFields"][] = "delitosanalisis";
$tdatacarcel_Report[".exportFields"][] = "sj_interno";
$tdatacarcel_Report[".exportFields"][] = "fase";
$tdatacarcel_Report[".exportFields"][] = "org_delictiva";
$tdatacarcel_Report[".exportFields"][] = "tipo_mara";
$tdatacarcel_Report[".exportFields"][] = "reincidente";
$tdatacarcel_Report[".exportFields"][] = "deportado";
$tdatacarcel_Report[".exportFields"][] = "direccion1";
$tdatacarcel_Report[".exportFields"][] = "sector";
$tdatacarcel_Report[".exportFields"][] = "celda";
$tdatacarcel_Report[".exportFields"][] = "fecha_ing__sp";
$tdatacarcel_Report[".exportFields"][] = "libro";
$tdatacarcel_Report[".exportFields"][] = "fecha_ing__cp";
$tdatacarcel_Report[".exportFields"][] = "total_delitos";
$tdatacarcel_Report[".exportFields"][] = "delitos";
$tdatacarcel_Report[".exportFields"][] = "delitoanalisis";
$tdatacarcel_Report[".exportFields"][] = "sector_ppd";

$tdatacarcel_Report[".importFields"] = array();
$tdatacarcel_Report[".importFields"][] = "id";
$tdatacarcel_Report[".importFields"][] = "sipe";
$tdatacarcel_Report[".importFields"][] = "afis";
$tdatacarcel_Report[".importFields"][] = "edad";
$tdatacarcel_Report[".importFields"][] = "rangoetario";
$tdatacarcel_Report[".importFields"][] = "genero";
$tdatacarcel_Report[".importFields"][] = "fecha_nac";
$tdatacarcel_Report[".importFields"][] = "edad1";
$tdatacarcel_Report[".importFields"][] = "dui";
$tdatacarcel_Report[".importFields"][] = "nivel_edu";
$tdatacarcel_Report[".importFields"][] = "educacionanalisis";
$tdatacarcel_Report[".importFields"][] = "profesion_oficio";
$tdatacarcel_Report[".importFields"][] = "estado_civil";
$tdatacarcel_Report[".importFields"][] = "ciudadania";
$tdatacarcel_Report[".importFields"][] = "mun_nacimiento";
$tdatacarcel_Report[".importFields"][] = "depto_nacim";
$tdatacarcel_Report[".importFields"][] = "direccion";
$tdatacarcel_Report[".importFields"][] = "mun_resid";
$tdatacarcel_Report[".importFields"][] = "depart_resid";
$tdatacarcel_Report[".importFields"][] = "delitosanalisis";
$tdatacarcel_Report[".importFields"][] = "sj_interno";
$tdatacarcel_Report[".importFields"][] = "fase";
$tdatacarcel_Report[".importFields"][] = "org_delictiva";
$tdatacarcel_Report[".importFields"][] = "tipo_mara";
$tdatacarcel_Report[".importFields"][] = "reincidente";
$tdatacarcel_Report[".importFields"][] = "deportado";
$tdatacarcel_Report[".importFields"][] = "direccion1";
$tdatacarcel_Report[".importFields"][] = "sector";
$tdatacarcel_Report[".importFields"][] = "celda";
$tdatacarcel_Report[".importFields"][] = "fecha_ing__sp";
$tdatacarcel_Report[".importFields"][] = "libro";
$tdatacarcel_Report[".importFields"][] = "fecha_ing__cp";
$tdatacarcel_Report[".importFields"][] = "total_delitos";
$tdatacarcel_Report[".importFields"][] = "delitos";
$tdatacarcel_Report[".importFields"][] = "delitoanalisis";
$tdatacarcel_Report[".importFields"][] = "sector_ppd";

$tdatacarcel_Report[".printFields"] = array();
$tdatacarcel_Report[".printFields"][] = "id";
$tdatacarcel_Report[".printFields"][] = "sipe";
$tdatacarcel_Report[".printFields"][] = "afis";
$tdatacarcel_Report[".printFields"][] = "edad";
$tdatacarcel_Report[".printFields"][] = "rangoetario";
$tdatacarcel_Report[".printFields"][] = "genero";
$tdatacarcel_Report[".printFields"][] = "fecha_nac";
$tdatacarcel_Report[".printFields"][] = "edad1";
$tdatacarcel_Report[".printFields"][] = "dui";
$tdatacarcel_Report[".printFields"][] = "nivel_edu";
$tdatacarcel_Report[".printFields"][] = "educacionanalisis";
$tdatacarcel_Report[".printFields"][] = "profesion_oficio";
$tdatacarcel_Report[".printFields"][] = "estado_civil";
$tdatacarcel_Report[".printFields"][] = "ciudadania";
$tdatacarcel_Report[".printFields"][] = "mun_nacimiento";
$tdatacarcel_Report[".printFields"][] = "depto_nacim";
$tdatacarcel_Report[".printFields"][] = "direccion";
$tdatacarcel_Report[".printFields"][] = "mun_resid";
$tdatacarcel_Report[".printFields"][] = "depart_resid";
$tdatacarcel_Report[".printFields"][] = "delitosanalisis";
$tdatacarcel_Report[".printFields"][] = "sj_interno";
$tdatacarcel_Report[".printFields"][] = "fase";
$tdatacarcel_Report[".printFields"][] = "org_delictiva";
$tdatacarcel_Report[".printFields"][] = "tipo_mara";
$tdatacarcel_Report[".printFields"][] = "reincidente";
$tdatacarcel_Report[".printFields"][] = "deportado";
$tdatacarcel_Report[".printFields"][] = "direccion1";
$tdatacarcel_Report[".printFields"][] = "sector";
$tdatacarcel_Report[".printFields"][] = "celda";
$tdatacarcel_Report[".printFields"][] = "fecha_ing__sp";
$tdatacarcel_Report[".printFields"][] = "libro";
$tdatacarcel_Report[".printFields"][] = "fecha_ing__cp";
$tdatacarcel_Report[".printFields"][] = "total_delitos";
$tdatacarcel_Report[".printFields"][] = "delitos";
$tdatacarcel_Report[".printFields"][] = "delitoanalisis";
$tdatacarcel_Report[".printFields"][] = "sector_ppd";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","id");
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

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["id"] = $fdata;
//	sipe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sipe";
	$fdata["GoodName"] = "sipe";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","sipe");
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

		$fdata["strField"] = "sipe";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sipe";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["sipe"] = $fdata;
//	afis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "afis";
	$fdata["GoodName"] = "afis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","afis");
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

		$fdata["strField"] = "afis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "afis";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["afis"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","edad");
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

		$fdata["strField"] = "edad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edad";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["edad"] = $fdata;
//	rangoetario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rangoetario";
	$fdata["GoodName"] = "rangoetario";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","rangoetario");
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

		$fdata["strField"] = "rangoetario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rangoetario";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["rangoetario"] = $fdata;
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","genero");
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

		$fdata["strField"] = "genero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "genero";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["genero"] = $fdata;
//	fecha_nac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fecha_nac";
	$fdata["GoodName"] = "fecha_nac";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","fecha_nac");
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

		$fdata["strField"] = "fecha_nac";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_nac";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["fecha_nac"] = $fdata;
//	edad1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "edad1";
	$fdata["GoodName"] = "edad1";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","edad1");
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

		$fdata["strField"] = "edad1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edad1";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["edad1"] = $fdata;
//	dui
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dui";
	$fdata["GoodName"] = "dui";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","dui");
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

		$fdata["strField"] = "dui";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dui";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["dui"] = $fdata;
//	nivel_edu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "nivel_edu";
	$fdata["GoodName"] = "nivel_edu";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","nivel_edu");
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

		$fdata["strField"] = "nivel_edu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nivel_edu";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["nivel_edu"] = $fdata;
//	educacionanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "educacionanalisis";
	$fdata["GoodName"] = "educacionanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","educacionanalisis");
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

		$fdata["strField"] = "educacionanalisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "educacionanalisis";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["educacionanalisis"] = $fdata;
//	profesion_oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "profesion_oficio";
	$fdata["GoodName"] = "profesion_oficio";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","profesion_oficio");
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

		$fdata["strField"] = "profesion_oficio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "profesion_oficio";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["profesion_oficio"] = $fdata;
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","estado_civil");
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

		$fdata["strField"] = "estado_civil";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_civil";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["estado_civil"] = $fdata;
//	ciudadania
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ciudadania";
	$fdata["GoodName"] = "ciudadania";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","ciudadania");
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

		$fdata["strField"] = "ciudadania";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ciudadania";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["ciudadania"] = $fdata;
//	mun_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "mun_nacimiento";
	$fdata["GoodName"] = "mun_nacimiento";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","mun_nacimiento");
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

		$fdata["strField"] = "mun_nacimiento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mun_nacimiento";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["mun_nacimiento"] = $fdata;
//	depto_nacim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "depto_nacim";
	$fdata["GoodName"] = "depto_nacim";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","depto_nacim");
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

		$fdata["strField"] = "depto_nacim";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "depto_nacim";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["depto_nacim"] = $fdata;
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","direccion");
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

		$fdata["strField"] = "direccion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direccion";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["direccion"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","mun_resid");
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

		$fdata["strField"] = "mun_resid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mun_resid";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["mun_resid"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","depart_resid");
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

		$fdata["strField"] = "depart_resid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "depart_resid";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["depart_resid"] = $fdata;
//	delitosanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "delitosanalisis";
	$fdata["GoodName"] = "delitosanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","delitosanalisis");
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

		$fdata["strField"] = "delitosanalisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delitosanalisis";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["delitosanalisis"] = $fdata;
//	sj_interno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "sj_interno";
	$fdata["GoodName"] = "sj_interno";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","sj_interno");
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

		$fdata["strField"] = "sj_interno";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sj_interno";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["sj_interno"] = $fdata;
//	fase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "fase";
	$fdata["GoodName"] = "fase";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","fase");
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

		$fdata["strField"] = "fase";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fase";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["fase"] = $fdata;
//	org_delictiva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "org_delictiva";
	$fdata["GoodName"] = "org_delictiva";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","org_delictiva");
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

		$fdata["strField"] = "org_delictiva";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "org_delictiva";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["org_delictiva"] = $fdata;
//	tipo_mara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "tipo_mara";
	$fdata["GoodName"] = "tipo_mara";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","tipo_mara");
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

		$fdata["strField"] = "tipo_mara";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_mara";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["tipo_mara"] = $fdata;
//	reincidente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "reincidente";
	$fdata["GoodName"] = "reincidente";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","reincidente");
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

		$fdata["strField"] = "reincidente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reincidente";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["reincidente"] = $fdata;
//	deportado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "deportado";
	$fdata["GoodName"] = "deportado";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","deportado");
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

		$fdata["strField"] = "deportado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "deportado";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["deportado"] = $fdata;
//	direccion1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "direccion1";
	$fdata["GoodName"] = "direccion1";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","direccion1");
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

		$fdata["strField"] = "direccion1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direccion1";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["direccion1"] = $fdata;
//	sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "sector";
	$fdata["GoodName"] = "sector";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","sector");
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

		$fdata["strField"] = "sector";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sector";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["sector"] = $fdata;
//	celda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "celda";
	$fdata["GoodName"] = "celda";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","celda");
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

		$fdata["strField"] = "celda";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "celda";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["celda"] = $fdata;
//	fecha_ing__sp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "fecha_ing__sp";
	$fdata["GoodName"] = "fecha_ing__sp";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","fecha_ing__sp");
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

		$fdata["strField"] = "fecha_ing__sp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_ing__sp";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["fecha_ing__sp"] = $fdata;
//	libro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "libro";
	$fdata["GoodName"] = "libro";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","libro");
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

		$fdata["strField"] = "libro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "libro";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["libro"] = $fdata;
//	fecha_ing__cp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "fecha_ing__cp";
	$fdata["GoodName"] = "fecha_ing__cp";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","fecha_ing__cp");
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

		$fdata["strField"] = "fecha_ing__cp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_ing__cp";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["fecha_ing__cp"] = $fdata;
//	total_delitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "total_delitos";
	$fdata["GoodName"] = "total_delitos";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","total_delitos");
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

		$fdata["strField"] = "total_delitos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_delitos";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["total_delitos"] = $fdata;
//	delitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "delitos";
	$fdata["GoodName"] = "delitos";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","delitos");
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

		$fdata["strField"] = "delitos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delitos";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["delitos"] = $fdata;
//	delitoanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "delitoanalisis";
	$fdata["GoodName"] = "delitoanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","delitoanalisis");
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

		$fdata["strField"] = "delitoanalisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delitoanalisis";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["delitoanalisis"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_Report","sector_ppd");
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
			$edata["EditParams"].= " maxlength=50";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacarcel_Report["sector_ppd"] = $fdata;


$tables_data["carcel Report"]=&$tdatacarcel_Report;
$field_labels["carcel_Report"] = &$fieldLabelscarcel_Report;
$fieldToolTips["carcel_Report"] = &$fieldToolTipscarcel_Report;
$placeHolders["carcel_Report"] = &$placeHolderscarcel_Report;
$page_titles["carcel_Report"] = &$pageTitlescarcel_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["carcel Report"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["carcel Report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_carcel_Report()
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
	"m_srcTableName" => "carcel Report"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "carcel Report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sipe",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto8["m_sql"] = "sipe";
$proto8["m_srcTableName"] = "carcel Report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "afis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto10["m_sql"] = "afis";
$proto10["m_srcTableName"] = "carcel Report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "edad",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto12["m_sql"] = "edad";
$proto12["m_srcTableName"] = "carcel Report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto14["m_sql"] = "rangoetario";
$proto14["m_srcTableName"] = "carcel Report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto16["m_sql"] = "genero";
$proto16["m_srcTableName"] = "carcel Report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_nac",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto18["m_sql"] = "fecha_nac";
$proto18["m_srcTableName"] = "carcel Report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "edad1",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto20["m_sql"] = "edad1";
$proto20["m_srcTableName"] = "carcel Report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dui",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto22["m_sql"] = "dui";
$proto22["m_srcTableName"] = "carcel Report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "nivel_edu",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto24["m_sql"] = "nivel_edu";
$proto24["m_srcTableName"] = "carcel Report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "educacionanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto26["m_sql"] = "educacionanalisis";
$proto26["m_srcTableName"] = "carcel Report";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "profesion_oficio",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto28["m_sql"] = "profesion_oficio";
$proto28["m_srcTableName"] = "carcel Report";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto30["m_sql"] = "estado_civil";
$proto30["m_srcTableName"] = "carcel Report";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ciudadania",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto32["m_sql"] = "ciudadania";
$proto32["m_srcTableName"] = "carcel Report";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_nacimiento",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto34["m_sql"] = "mun_nacimiento";
$proto34["m_srcTableName"] = "carcel Report";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "depto_nacim",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto36["m_sql"] = "depto_nacim";
$proto36["m_srcTableName"] = "carcel Report";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto38["m_sql"] = "direccion";
$proto38["m_srcTableName"] = "carcel Report";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto40["m_sql"] = "mun_resid";
$proto40["m_srcTableName"] = "carcel Report";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto42["m_sql"] = "depart_resid";
$proto42["m_srcTableName"] = "carcel Report";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "delitosanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto44["m_sql"] = "delitosanalisis";
$proto44["m_srcTableName"] = "carcel Report";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "sj_interno",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto46["m_sql"] = "sj_interno";
$proto46["m_srcTableName"] = "carcel Report";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "fase",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto48["m_sql"] = "fase";
$proto48["m_srcTableName"] = "carcel Report";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto50["m_sql"] = "org_delictiva";
$proto50["m_srcTableName"] = "carcel Report";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto52["m_sql"] = "tipo_mara";
$proto52["m_srcTableName"] = "carcel Report";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "reincidente",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto54["m_sql"] = "reincidente";
$proto54["m_srcTableName"] = "carcel Report";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "deportado",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto56["m_sql"] = "deportado";
$proto56["m_srcTableName"] = "carcel Report";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion1",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto58["m_sql"] = "direccion1";
$proto58["m_srcTableName"] = "carcel Report";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "sector",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto60["m_sql"] = "sector";
$proto60["m_srcTableName"] = "carcel Report";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "celda",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto62["m_sql"] = "celda";
$proto62["m_srcTableName"] = "carcel Report";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ing__sp",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto64["m_sql"] = "fecha_ing__sp";
$proto64["m_srcTableName"] = "carcel Report";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "libro",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto66["m_sql"] = "libro";
$proto66["m_srcTableName"] = "carcel Report";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ing__cp",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto68["m_sql"] = "fecha_ing__cp";
$proto68["m_srcTableName"] = "carcel Report";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "total_delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto70["m_sql"] = "total_delitos";
$proto70["m_srcTableName"] = "carcel Report";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto72["m_sql"] = "delitos";
$proto72["m_srcTableName"] = "carcel Report";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto74["m_sql"] = "delitoanalisis";
$proto74["m_srcTableName"] = "carcel Report";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel Report"
));

$proto76["m_sql"] = "sector_ppd";
$proto76["m_srcTableName"] = "carcel Report";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto78=array();
$proto78["m_link"] = "SQLL_MAIN";
			$proto79=array();
$proto79["m_strName"] = "carcel";
$proto79["m_srcTableName"] = "carcel Report";
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
$proto78["m_srcTableName"] = "carcel Report";
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
$proto0["m_srcTableName"]="carcel Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carcel_Report = createSqlQuery_carcel_Report();


	
		;

																																				

$tdatacarcel_Report[".sqlquery"] = $queryData_carcel_Report;

$tableEvents["carcel Report"] = new eventsBase;
$tdatacarcel_Report[".hasEvents"] = false;

?>