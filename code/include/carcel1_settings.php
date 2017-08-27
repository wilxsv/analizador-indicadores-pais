<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacarcel1 = array();
	$tdatacarcel1[".truncateText"] = true;
	$tdatacarcel1[".NumberOfChars"] = 80;
	$tdatacarcel1[".ShortName"] = "carcel1";
	$tdatacarcel1[".OwnerID"] = "";
	$tdatacarcel1[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelscarcel1 = array();
$fieldToolTipscarcel1 = array();
$pageTitlescarcel1 = array();
$placeHolderscarcel1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscarcel1["Spanish"] = array();
	$fieldToolTipscarcel1["Spanish"] = array();
	$placeHolderscarcel1["Spanish"] = array();
	$pageTitlescarcel1["Spanish"] = array();
	$fieldLabelscarcel1["Spanish"]["id"] = "Id";
	$fieldToolTipscarcel1["Spanish"]["id"] = "";
	$placeHolderscarcel1["Spanish"]["id"] = "";
	$fieldLabelscarcel1["Spanish"]["sipe"] = "Sipe";
	$fieldToolTipscarcel1["Spanish"]["sipe"] = "";
	$placeHolderscarcel1["Spanish"]["sipe"] = "";
	$fieldLabelscarcel1["Spanish"]["afis"] = "Afis";
	$fieldToolTipscarcel1["Spanish"]["afis"] = "";
	$placeHolderscarcel1["Spanish"]["afis"] = "";
	$fieldLabelscarcel1["Spanish"]["edad"] = "Edad";
	$fieldToolTipscarcel1["Spanish"]["edad"] = "";
	$placeHolderscarcel1["Spanish"]["edad"] = "";
	$fieldLabelscarcel1["Spanish"]["rangoetario"] = "Rangoetario";
	$fieldToolTipscarcel1["Spanish"]["rangoetario"] = "";
	$placeHolderscarcel1["Spanish"]["rangoetario"] = "";
	$fieldLabelscarcel1["Spanish"]["genero"] = "Genero";
	$fieldToolTipscarcel1["Spanish"]["genero"] = "";
	$placeHolderscarcel1["Spanish"]["genero"] = "";
	$fieldLabelscarcel1["Spanish"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipscarcel1["Spanish"]["fecha_nac"] = "";
	$placeHolderscarcel1["Spanish"]["fecha_nac"] = "";
	$fieldLabelscarcel1["Spanish"]["edad1"] = "Edad1";
	$fieldToolTipscarcel1["Spanish"]["edad1"] = "";
	$placeHolderscarcel1["Spanish"]["edad1"] = "";
	$fieldLabelscarcel1["Spanish"]["dui"] = "Dui";
	$fieldToolTipscarcel1["Spanish"]["dui"] = "";
	$placeHolderscarcel1["Spanish"]["dui"] = "";
	$fieldLabelscarcel1["Spanish"]["profesion_oficio"] = "Profesion Oficio";
	$fieldToolTipscarcel1["Spanish"]["profesion_oficio"] = "";
	$placeHolderscarcel1["Spanish"]["profesion_oficio"] = "";
	$fieldLabelscarcel1["Spanish"]["estado_civil"] = "Estado Civil";
	$fieldToolTipscarcel1["Spanish"]["estado_civil"] = "";
	$placeHolderscarcel1["Spanish"]["estado_civil"] = "";
	$fieldLabelscarcel1["Spanish"]["ciudadania"] = "Ciudadania";
	$fieldToolTipscarcel1["Spanish"]["ciudadania"] = "";
	$placeHolderscarcel1["Spanish"]["ciudadania"] = "";
	$fieldLabelscarcel1["Spanish"]["mun_nacimiento"] = "Mun Nacimiento";
	$fieldToolTipscarcel1["Spanish"]["mun_nacimiento"] = "";
	$placeHolderscarcel1["Spanish"]["mun_nacimiento"] = "";
	$fieldLabelscarcel1["Spanish"]["depto_nacim"] = "Depto Nacim";
	$fieldToolTipscarcel1["Spanish"]["depto_nacim"] = "";
	$placeHolderscarcel1["Spanish"]["depto_nacim"] = "";
	$fieldLabelscarcel1["Spanish"]["direccion"] = "Direccion";
	$fieldToolTipscarcel1["Spanish"]["direccion"] = "";
	$placeHolderscarcel1["Spanish"]["direccion"] = "";
	$fieldLabelscarcel1["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipscarcel1["Spanish"]["mun_resid"] = "";
	$placeHolderscarcel1["Spanish"]["mun_resid"] = "";
	$fieldLabelscarcel1["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipscarcel1["Spanish"]["depart_resid"] = "";
	$placeHolderscarcel1["Spanish"]["depart_resid"] = "";
	$fieldLabelscarcel1["Spanish"]["sj_interno"] = "Sj Interno";
	$fieldToolTipscarcel1["Spanish"]["sj_interno"] = "";
	$placeHolderscarcel1["Spanish"]["sj_interno"] = "";
	$fieldLabelscarcel1["Spanish"]["fase"] = "Fase";
	$fieldToolTipscarcel1["Spanish"]["fase"] = "";
	$placeHolderscarcel1["Spanish"]["fase"] = "";
	$fieldLabelscarcel1["Spanish"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipscarcel1["Spanish"]["org_delictiva"] = "";
	$placeHolderscarcel1["Spanish"]["org_delictiva"] = "";
	$fieldLabelscarcel1["Spanish"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipscarcel1["Spanish"]["tipo_mara"] = "";
	$placeHolderscarcel1["Spanish"]["tipo_mara"] = "";
	$fieldLabelscarcel1["Spanish"]["reincidente"] = "Reincidente";
	$fieldToolTipscarcel1["Spanish"]["reincidente"] = "";
	$placeHolderscarcel1["Spanish"]["reincidente"] = "";
	$fieldLabelscarcel1["Spanish"]["deportado"] = "Deportado";
	$fieldToolTipscarcel1["Spanish"]["deportado"] = "";
	$placeHolderscarcel1["Spanish"]["deportado"] = "";
	$fieldLabelscarcel1["Spanish"]["direccion1"] = "Direccion1";
	$fieldToolTipscarcel1["Spanish"]["direccion1"] = "";
	$placeHolderscarcel1["Spanish"]["direccion1"] = "";
	$fieldLabelscarcel1["Spanish"]["sector"] = "Sector";
	$fieldToolTipscarcel1["Spanish"]["sector"] = "";
	$placeHolderscarcel1["Spanish"]["sector"] = "";
	$fieldLabelscarcel1["Spanish"]["celda"] = "Celda";
	$fieldToolTipscarcel1["Spanish"]["celda"] = "";
	$placeHolderscarcel1["Spanish"]["celda"] = "";
	$fieldLabelscarcel1["Spanish"]["fecha_ing__sp"] = "Fecha Ing  Sp";
	$fieldToolTipscarcel1["Spanish"]["fecha_ing__sp"] = "";
	$placeHolderscarcel1["Spanish"]["fecha_ing__sp"] = "";
	$fieldLabelscarcel1["Spanish"]["libro"] = "Libro";
	$fieldToolTipscarcel1["Spanish"]["libro"] = "";
	$placeHolderscarcel1["Spanish"]["libro"] = "";
	$fieldLabelscarcel1["Spanish"]["fecha_ing__cp"] = "Fecha Ing  Cp";
	$fieldToolTipscarcel1["Spanish"]["fecha_ing__cp"] = "";
	$placeHolderscarcel1["Spanish"]["fecha_ing__cp"] = "";
	$fieldLabelscarcel1["Spanish"]["total_delitos"] = "Total Delitos";
	$fieldToolTipscarcel1["Spanish"]["total_delitos"] = "";
	$placeHolderscarcel1["Spanish"]["total_delitos"] = "";
	$fieldLabelscarcel1["Spanish"]["delitos"] = "Delitos";
	$fieldToolTipscarcel1["Spanish"]["delitos"] = "";
	$placeHolderscarcel1["Spanish"]["delitos"] = "";
	$fieldLabelscarcel1["Spanish"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipscarcel1["Spanish"]["delitoanalisis"] = "";
	$placeHolderscarcel1["Spanish"]["delitoanalisis"] = "";
	$fieldLabelscarcel1["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipscarcel1["Spanish"]["sector_ppd"] = "";
	$placeHolderscarcel1["Spanish"]["sector_ppd"] = "";
	if (count($fieldToolTipscarcel1["Spanish"]))
		$tdatacarcel1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscarcel1["English"] = array();
	$fieldToolTipscarcel1["English"] = array();
	$placeHolderscarcel1["English"] = array();
	$pageTitlescarcel1["English"] = array();
	$fieldLabelscarcel1["English"]["id"] = "Id";
	$fieldToolTipscarcel1["English"]["id"] = "";
	$placeHolderscarcel1["English"]["id"] = "";
	$fieldLabelscarcel1["English"]["sipe"] = "Sipe";
	$fieldToolTipscarcel1["English"]["sipe"] = "";
	$placeHolderscarcel1["English"]["sipe"] = "";
	$fieldLabelscarcel1["English"]["afis"] = "Afis";
	$fieldToolTipscarcel1["English"]["afis"] = "";
	$placeHolderscarcel1["English"]["afis"] = "";
	$fieldLabelscarcel1["English"]["edad"] = "Edad";
	$fieldToolTipscarcel1["English"]["edad"] = "";
	$placeHolderscarcel1["English"]["edad"] = "";
	$fieldLabelscarcel1["English"]["rangoetario"] = "Rangoetario";
	$fieldToolTipscarcel1["English"]["rangoetario"] = "";
	$placeHolderscarcel1["English"]["rangoetario"] = "";
	$fieldLabelscarcel1["English"]["genero"] = "Genero";
	$fieldToolTipscarcel1["English"]["genero"] = "";
	$placeHolderscarcel1["English"]["genero"] = "";
	$fieldLabelscarcel1["English"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipscarcel1["English"]["fecha_nac"] = "";
	$placeHolderscarcel1["English"]["fecha_nac"] = "";
	$fieldLabelscarcel1["English"]["edad1"] = "Edad1";
	$fieldToolTipscarcel1["English"]["edad1"] = "";
	$placeHolderscarcel1["English"]["edad1"] = "";
	$fieldLabelscarcel1["English"]["dui"] = "Dui";
	$fieldToolTipscarcel1["English"]["dui"] = "";
	$placeHolderscarcel1["English"]["dui"] = "";
	$fieldLabelscarcel1["English"]["profesion_oficio"] = "Profesion Oficio";
	$fieldToolTipscarcel1["English"]["profesion_oficio"] = "";
	$placeHolderscarcel1["English"]["profesion_oficio"] = "";
	$fieldLabelscarcel1["English"]["estado_civil"] = "Estado Civil";
	$fieldToolTipscarcel1["English"]["estado_civil"] = "";
	$placeHolderscarcel1["English"]["estado_civil"] = "";
	$fieldLabelscarcel1["English"]["ciudadania"] = "Ciudadania";
	$fieldToolTipscarcel1["English"]["ciudadania"] = "";
	$placeHolderscarcel1["English"]["ciudadania"] = "";
	$fieldLabelscarcel1["English"]["mun_nacimiento"] = "Mun Nacimiento";
	$fieldToolTipscarcel1["English"]["mun_nacimiento"] = "";
	$placeHolderscarcel1["English"]["mun_nacimiento"] = "";
	$fieldLabelscarcel1["English"]["depto_nacim"] = "Depto Nacim";
	$fieldToolTipscarcel1["English"]["depto_nacim"] = "";
	$placeHolderscarcel1["English"]["depto_nacim"] = "";
	$fieldLabelscarcel1["English"]["direccion"] = "Direccion";
	$fieldToolTipscarcel1["English"]["direccion"] = "";
	$placeHolderscarcel1["English"]["direccion"] = "";
	$fieldLabelscarcel1["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipscarcel1["English"]["mun_resid"] = "";
	$placeHolderscarcel1["English"]["mun_resid"] = "";
	$fieldLabelscarcel1["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipscarcel1["English"]["depart_resid"] = "";
	$placeHolderscarcel1["English"]["depart_resid"] = "";
	$fieldLabelscarcel1["English"]["sj_interno"] = "Sj Interno";
	$fieldToolTipscarcel1["English"]["sj_interno"] = "";
	$placeHolderscarcel1["English"]["sj_interno"] = "";
	$fieldLabelscarcel1["English"]["fase"] = "Fase";
	$fieldToolTipscarcel1["English"]["fase"] = "";
	$placeHolderscarcel1["English"]["fase"] = "";
	$fieldLabelscarcel1["English"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipscarcel1["English"]["org_delictiva"] = "";
	$placeHolderscarcel1["English"]["org_delictiva"] = "";
	$fieldLabelscarcel1["English"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipscarcel1["English"]["tipo_mara"] = "";
	$placeHolderscarcel1["English"]["tipo_mara"] = "";
	$fieldLabelscarcel1["English"]["reincidente"] = "Reincidente";
	$fieldToolTipscarcel1["English"]["reincidente"] = "";
	$placeHolderscarcel1["English"]["reincidente"] = "";
	$fieldLabelscarcel1["English"]["deportado"] = "Deportado";
	$fieldToolTipscarcel1["English"]["deportado"] = "";
	$placeHolderscarcel1["English"]["deportado"] = "";
	$fieldLabelscarcel1["English"]["direccion1"] = "Direccion1";
	$fieldToolTipscarcel1["English"]["direccion1"] = "";
	$placeHolderscarcel1["English"]["direccion1"] = "";
	$fieldLabelscarcel1["English"]["sector"] = "Sector";
	$fieldToolTipscarcel1["English"]["sector"] = "";
	$placeHolderscarcel1["English"]["sector"] = "";
	$fieldLabelscarcel1["English"]["celda"] = "Celda";
	$fieldToolTipscarcel1["English"]["celda"] = "";
	$placeHolderscarcel1["English"]["celda"] = "";
	$fieldLabelscarcel1["English"]["fecha_ing__sp"] = "Fecha Ing  Sp";
	$fieldToolTipscarcel1["English"]["fecha_ing__sp"] = "";
	$placeHolderscarcel1["English"]["fecha_ing__sp"] = "";
	$fieldLabelscarcel1["English"]["libro"] = "Libro";
	$fieldToolTipscarcel1["English"]["libro"] = "";
	$placeHolderscarcel1["English"]["libro"] = "";
	$fieldLabelscarcel1["English"]["fecha_ing__cp"] = "Fecha Ing  Cp";
	$fieldToolTipscarcel1["English"]["fecha_ing__cp"] = "";
	$placeHolderscarcel1["English"]["fecha_ing__cp"] = "";
	$fieldLabelscarcel1["English"]["total_delitos"] = "Total Delitos";
	$fieldToolTipscarcel1["English"]["total_delitos"] = "";
	$placeHolderscarcel1["English"]["total_delitos"] = "";
	$fieldLabelscarcel1["English"]["delitos"] = "Delitos";
	$fieldToolTipscarcel1["English"]["delitos"] = "";
	$placeHolderscarcel1["English"]["delitos"] = "";
	$fieldLabelscarcel1["English"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipscarcel1["English"]["delitoanalisis"] = "";
	$placeHolderscarcel1["English"]["delitoanalisis"] = "";
	$fieldLabelscarcel1["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipscarcel1["English"]["sector_ppd"] = "";
	$placeHolderscarcel1["English"]["sector_ppd"] = "";
	if (count($fieldToolTipscarcel1["English"]))
		$tdatacarcel1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscarcel1[""] = array();
	$fieldToolTipscarcel1[""] = array();
	$placeHolderscarcel1[""] = array();
	$pageTitlescarcel1[""] = array();
	if (count($fieldToolTipscarcel1[""]))
		$tdatacarcel1[".isUseToolTips"] = true;
}





$tdatacarcel1[".shortTableName"] = "carcel1";
$tdatacarcel1[".nSecOptions"] = 0;
$tdatacarcel1[".recsPerRowPrint"] = 1;
$tdatacarcel1[".mainTableOwnerID"] = "";
$tdatacarcel1[".moveNext"] = 1;
$tdatacarcel1[".entityType"] = 0;

$tdatacarcel1[".strOriginalTableName"] = "carcel";

	



$tdatacarcel1[".showAddInPopup"] = false;

$tdatacarcel1[".showEditInPopup"] = false;

$tdatacarcel1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacarcel1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacarcel1[".fieldsForRegister"] = array();

	$tdatacarcel1[".listAjax"] = true;

	$tdatacarcel1[".audit"] = false;

	$tdatacarcel1[".locking"] = false;



$tdatacarcel1[".list"] = true;



$tdatacarcel1[".reorderRecordsByHeader"] = true;
$tdatacarcel1[".createSortByDropdown"] = true;
$tdatacarcel1[".strSortControlSettingsJSON"] = "";




$tdatacarcel1[".import"] = true;

$tdatacarcel1[".exportTo"] = true;

$tdatacarcel1[".printFriendly"] = true;


$tdatacarcel1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacarcel1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacarcel1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacarcel1[".searchSaving"] = false;
//

$tdatacarcel1[".showSearchPanel"] = true;
		$tdatacarcel1[".flexibleSearch"] = true;

$tdatacarcel1[".isUseAjaxSuggest"] = true;

$tdatacarcel1[".rowHighlite"] = true;





$tdatacarcel1[".ajaxCodeSnippetAdded"] = false;

$tdatacarcel1[".buttonsAdded"] = false;

$tdatacarcel1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacarcel1[".isUseTimeForSearch"] = false;



$tdatacarcel1[".badgeColor"] = "B22222";


$tdatacarcel1[".allSearchFields"] = array();
$tdatacarcel1[".filterFields"] = array();
$tdatacarcel1[".requiredSearchFields"] = array();

$tdatacarcel1[".allSearchFields"][] = "id";
	$tdatacarcel1[".allSearchFields"][] = "sipe";
	$tdatacarcel1[".allSearchFields"][] = "afis";
	$tdatacarcel1[".allSearchFields"][] = "edad";
	$tdatacarcel1[".allSearchFields"][] = "rangoetario";
	$tdatacarcel1[".allSearchFields"][] = "genero";
	$tdatacarcel1[".allSearchFields"][] = "fecha_nac";
	$tdatacarcel1[".allSearchFields"][] = "edad1";
	$tdatacarcel1[".allSearchFields"][] = "dui";
	$tdatacarcel1[".allSearchFields"][] = "profesion_oficio";
	$tdatacarcel1[".allSearchFields"][] = "estado_civil";
	$tdatacarcel1[".allSearchFields"][] = "ciudadania";
	$tdatacarcel1[".allSearchFields"][] = "mun_nacimiento";
	$tdatacarcel1[".allSearchFields"][] = "depto_nacim";
	$tdatacarcel1[".allSearchFields"][] = "direccion";
	$tdatacarcel1[".allSearchFields"][] = "mun_resid";
	$tdatacarcel1[".allSearchFields"][] = "depart_resid";
	$tdatacarcel1[".allSearchFields"][] = "sj_interno";
	$tdatacarcel1[".allSearchFields"][] = "fase";
	$tdatacarcel1[".allSearchFields"][] = "org_delictiva";
	$tdatacarcel1[".allSearchFields"][] = "tipo_mara";
	$tdatacarcel1[".allSearchFields"][] = "reincidente";
	$tdatacarcel1[".allSearchFields"][] = "deportado";
	$tdatacarcel1[".allSearchFields"][] = "direccion1";
	$tdatacarcel1[".allSearchFields"][] = "sector";
	$tdatacarcel1[".allSearchFields"][] = "celda";
	$tdatacarcel1[".allSearchFields"][] = "fecha_ing__sp";
	$tdatacarcel1[".allSearchFields"][] = "libro";
	$tdatacarcel1[".allSearchFields"][] = "fecha_ing__cp";
	$tdatacarcel1[".allSearchFields"][] = "total_delitos";
	$tdatacarcel1[".allSearchFields"][] = "delitos";
	$tdatacarcel1[".allSearchFields"][] = "delitoanalisis";
	$tdatacarcel1[".allSearchFields"][] = "sector_ppd";
	
$tdatacarcel1[".filterFields"][] = "mun_resid";
$tdatacarcel1[".filterFields"][] = "depart_resid";

$tdatacarcel1[".googleLikeFields"] = array();
$tdatacarcel1[".googleLikeFields"][] = "id";
$tdatacarcel1[".googleLikeFields"][] = "sipe";
$tdatacarcel1[".googleLikeFields"][] = "afis";
$tdatacarcel1[".googleLikeFields"][] = "edad";
$tdatacarcel1[".googleLikeFields"][] = "rangoetario";
$tdatacarcel1[".googleLikeFields"][] = "genero";
$tdatacarcel1[".googleLikeFields"][] = "fecha_nac";
$tdatacarcel1[".googleLikeFields"][] = "edad1";
$tdatacarcel1[".googleLikeFields"][] = "dui";
$tdatacarcel1[".googleLikeFields"][] = "profesion_oficio";
$tdatacarcel1[".googleLikeFields"][] = "estado_civil";
$tdatacarcel1[".googleLikeFields"][] = "ciudadania";
$tdatacarcel1[".googleLikeFields"][] = "mun_nacimiento";
$tdatacarcel1[".googleLikeFields"][] = "depto_nacim";
$tdatacarcel1[".googleLikeFields"][] = "direccion";
$tdatacarcel1[".googleLikeFields"][] = "mun_resid";
$tdatacarcel1[".googleLikeFields"][] = "depart_resid";
$tdatacarcel1[".googleLikeFields"][] = "sj_interno";
$tdatacarcel1[".googleLikeFields"][] = "fase";
$tdatacarcel1[".googleLikeFields"][] = "org_delictiva";
$tdatacarcel1[".googleLikeFields"][] = "tipo_mara";
$tdatacarcel1[".googleLikeFields"][] = "reincidente";
$tdatacarcel1[".googleLikeFields"][] = "deportado";
$tdatacarcel1[".googleLikeFields"][] = "direccion1";
$tdatacarcel1[".googleLikeFields"][] = "sector";
$tdatacarcel1[".googleLikeFields"][] = "celda";
$tdatacarcel1[".googleLikeFields"][] = "fecha_ing__sp";
$tdatacarcel1[".googleLikeFields"][] = "libro";
$tdatacarcel1[".googleLikeFields"][] = "fecha_ing__cp";
$tdatacarcel1[".googleLikeFields"][] = "total_delitos";
$tdatacarcel1[".googleLikeFields"][] = "delitos";
$tdatacarcel1[".googleLikeFields"][] = "delitoanalisis";
$tdatacarcel1[".googleLikeFields"][] = "sector_ppd";


$tdatacarcel1[".advSearchFields"] = array();
$tdatacarcel1[".advSearchFields"][] = "id";
$tdatacarcel1[".advSearchFields"][] = "sipe";
$tdatacarcel1[".advSearchFields"][] = "afis";
$tdatacarcel1[".advSearchFields"][] = "edad";
$tdatacarcel1[".advSearchFields"][] = "rangoetario";
$tdatacarcel1[".advSearchFields"][] = "genero";
$tdatacarcel1[".advSearchFields"][] = "fecha_nac";
$tdatacarcel1[".advSearchFields"][] = "edad1";
$tdatacarcel1[".advSearchFields"][] = "dui";
$tdatacarcel1[".advSearchFields"][] = "profesion_oficio";
$tdatacarcel1[".advSearchFields"][] = "estado_civil";
$tdatacarcel1[".advSearchFields"][] = "ciudadania";
$tdatacarcel1[".advSearchFields"][] = "mun_nacimiento";
$tdatacarcel1[".advSearchFields"][] = "depto_nacim";
$tdatacarcel1[".advSearchFields"][] = "direccion";
$tdatacarcel1[".advSearchFields"][] = "mun_resid";
$tdatacarcel1[".advSearchFields"][] = "depart_resid";
$tdatacarcel1[".advSearchFields"][] = "sj_interno";
$tdatacarcel1[".advSearchFields"][] = "fase";
$tdatacarcel1[".advSearchFields"][] = "org_delictiva";
$tdatacarcel1[".advSearchFields"][] = "tipo_mara";
$tdatacarcel1[".advSearchFields"][] = "reincidente";
$tdatacarcel1[".advSearchFields"][] = "deportado";
$tdatacarcel1[".advSearchFields"][] = "direccion1";
$tdatacarcel1[".advSearchFields"][] = "sector";
$tdatacarcel1[".advSearchFields"][] = "celda";
$tdatacarcel1[".advSearchFields"][] = "fecha_ing__sp";
$tdatacarcel1[".advSearchFields"][] = "libro";
$tdatacarcel1[".advSearchFields"][] = "fecha_ing__cp";
$tdatacarcel1[".advSearchFields"][] = "total_delitos";
$tdatacarcel1[".advSearchFields"][] = "delitos";
$tdatacarcel1[".advSearchFields"][] = "delitoanalisis";
$tdatacarcel1[".advSearchFields"][] = "sector_ppd";

$tdatacarcel1[".tableType"] = "list";

$tdatacarcel1[".printerPageOrientation"] = 0;
$tdatacarcel1[".nPrinterPageScale"] = 100;

$tdatacarcel1[".nPrinterSplitRecords"] = 40;

$tdatacarcel1[".nPrinterPDFSplitRecords"] = 40;



$tdatacarcel1[".geocodingEnabled"] = false;





$tdatacarcel1[".listGridLayout"] = 3;

$tdatacarcel1[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatacarcel1[".pageSize"] = 10;

$tdatacarcel1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY org_delictiva DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacarcel1[".strOrderBy"] = $tstrOrderBy;

$tdatacarcel1[".orderindexes"] = array();
$tdatacarcel1[".orderindexes"][] = array(20, (0 ? "ASC" : "DESC"), "org_delictiva");

$tdatacarcel1[".sqlHead"] = "SELECT id,  sipe,  afis,  edad,  rangoetario,  genero,  fecha_nac,  edad1,  dui,  profesion_oficio,  estado_civil,  ciudadania,  mun_nacimiento,  depto_nacim,  direccion,  mun_resid,  depart_resid,  sj_interno,  fase,  org_delictiva,  tipo_mara,  reincidente,  deportado,  direccion1,  sector,  celda,  fecha_ing__sp,  libro,  fecha_ing__cp,  total_delitos,  delitos,  delitoanalisis,  sector_ppd";
$tdatacarcel1[".sqlFrom"] = "FROM carcel";
$tdatacarcel1[".sqlWhereExpr"] = "";
$tdatacarcel1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarcel1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarcel1[".arrGroupsPerPage"] = $arrGPP;

$tdatacarcel1[".highlightSearchResults"] = true;

$tableKeyscarcel1 = array();
$tdatacarcel1[".Keys"] = $tableKeyscarcel1;

$tdatacarcel1[".listFields"] = array();
$tdatacarcel1[".listFields"][] = "id";
$tdatacarcel1[".listFields"][] = "sipe";
$tdatacarcel1[".listFields"][] = "afis";
$tdatacarcel1[".listFields"][] = "edad";
$tdatacarcel1[".listFields"][] = "rangoetario";
$tdatacarcel1[".listFields"][] = "genero";
$tdatacarcel1[".listFields"][] = "fecha_nac";
$tdatacarcel1[".listFields"][] = "edad1";
$tdatacarcel1[".listFields"][] = "dui";
$tdatacarcel1[".listFields"][] = "profesion_oficio";
$tdatacarcel1[".listFields"][] = "estado_civil";
$tdatacarcel1[".listFields"][] = "ciudadania";
$tdatacarcel1[".listFields"][] = "mun_nacimiento";
$tdatacarcel1[".listFields"][] = "depto_nacim";
$tdatacarcel1[".listFields"][] = "direccion";
$tdatacarcel1[".listFields"][] = "mun_resid";
$tdatacarcel1[".listFields"][] = "depart_resid";
$tdatacarcel1[".listFields"][] = "sj_interno";
$tdatacarcel1[".listFields"][] = "fase";
$tdatacarcel1[".listFields"][] = "org_delictiva";
$tdatacarcel1[".listFields"][] = "tipo_mara";
$tdatacarcel1[".listFields"][] = "reincidente";
$tdatacarcel1[".listFields"][] = "deportado";
$tdatacarcel1[".listFields"][] = "direccion1";
$tdatacarcel1[".listFields"][] = "sector";
$tdatacarcel1[".listFields"][] = "celda";
$tdatacarcel1[".listFields"][] = "fecha_ing__sp";
$tdatacarcel1[".listFields"][] = "libro";
$tdatacarcel1[".listFields"][] = "fecha_ing__cp";
$tdatacarcel1[".listFields"][] = "total_delitos";
$tdatacarcel1[".listFields"][] = "delitos";
$tdatacarcel1[".listFields"][] = "delitoanalisis";
$tdatacarcel1[".listFields"][] = "sector_ppd";

$tdatacarcel1[".hideMobileList"] = array();


$tdatacarcel1[".viewFields"] = array();

$tdatacarcel1[".addFields"] = array();

$tdatacarcel1[".masterListFields"] = array();
$tdatacarcel1[".masterListFields"][] = "id";
$tdatacarcel1[".masterListFields"][] = "sipe";
$tdatacarcel1[".masterListFields"][] = "afis";
$tdatacarcel1[".masterListFields"][] = "edad";
$tdatacarcel1[".masterListFields"][] = "rangoetario";
$tdatacarcel1[".masterListFields"][] = "genero";
$tdatacarcel1[".masterListFields"][] = "fecha_nac";
$tdatacarcel1[".masterListFields"][] = "edad1";
$tdatacarcel1[".masterListFields"][] = "dui";
$tdatacarcel1[".masterListFields"][] = "profesion_oficio";
$tdatacarcel1[".masterListFields"][] = "estado_civil";
$tdatacarcel1[".masterListFields"][] = "ciudadania";
$tdatacarcel1[".masterListFields"][] = "mun_nacimiento";
$tdatacarcel1[".masterListFields"][] = "depto_nacim";
$tdatacarcel1[".masterListFields"][] = "direccion";
$tdatacarcel1[".masterListFields"][] = "mun_resid";
$tdatacarcel1[".masterListFields"][] = "depart_resid";
$tdatacarcel1[".masterListFields"][] = "sj_interno";
$tdatacarcel1[".masterListFields"][] = "fase";
$tdatacarcel1[".masterListFields"][] = "org_delictiva";
$tdatacarcel1[".masterListFields"][] = "tipo_mara";
$tdatacarcel1[".masterListFields"][] = "reincidente";
$tdatacarcel1[".masterListFields"][] = "deportado";
$tdatacarcel1[".masterListFields"][] = "direccion1";
$tdatacarcel1[".masterListFields"][] = "sector";
$tdatacarcel1[".masterListFields"][] = "celda";
$tdatacarcel1[".masterListFields"][] = "fecha_ing__sp";
$tdatacarcel1[".masterListFields"][] = "libro";
$tdatacarcel1[".masterListFields"][] = "fecha_ing__cp";
$tdatacarcel1[".masterListFields"][] = "total_delitos";
$tdatacarcel1[".masterListFields"][] = "delitos";
$tdatacarcel1[".masterListFields"][] = "delitoanalisis";
$tdatacarcel1[".masterListFields"][] = "sector_ppd";

$tdatacarcel1[".inlineAddFields"] = array();

$tdatacarcel1[".editFields"] = array();

$tdatacarcel1[".inlineEditFields"] = array();

$tdatacarcel1[".updateSelectedFields"] = array();


$tdatacarcel1[".exportFields"] = array();
$tdatacarcel1[".exportFields"][] = "id";
$tdatacarcel1[".exportFields"][] = "sipe";
$tdatacarcel1[".exportFields"][] = "afis";
$tdatacarcel1[".exportFields"][] = "edad";
$tdatacarcel1[".exportFields"][] = "rangoetario";
$tdatacarcel1[".exportFields"][] = "genero";
$tdatacarcel1[".exportFields"][] = "fecha_nac";
$tdatacarcel1[".exportFields"][] = "edad1";
$tdatacarcel1[".exportFields"][] = "dui";
$tdatacarcel1[".exportFields"][] = "profesion_oficio";
$tdatacarcel1[".exportFields"][] = "estado_civil";
$tdatacarcel1[".exportFields"][] = "ciudadania";
$tdatacarcel1[".exportFields"][] = "mun_nacimiento";
$tdatacarcel1[".exportFields"][] = "depto_nacim";
$tdatacarcel1[".exportFields"][] = "direccion";
$tdatacarcel1[".exportFields"][] = "mun_resid";
$tdatacarcel1[".exportFields"][] = "depart_resid";
$tdatacarcel1[".exportFields"][] = "sj_interno";
$tdatacarcel1[".exportFields"][] = "fase";
$tdatacarcel1[".exportFields"][] = "org_delictiva";
$tdatacarcel1[".exportFields"][] = "tipo_mara";
$tdatacarcel1[".exportFields"][] = "reincidente";
$tdatacarcel1[".exportFields"][] = "deportado";
$tdatacarcel1[".exportFields"][] = "direccion1";
$tdatacarcel1[".exportFields"][] = "sector";
$tdatacarcel1[".exportFields"][] = "celda";
$tdatacarcel1[".exportFields"][] = "fecha_ing__sp";
$tdatacarcel1[".exportFields"][] = "libro";
$tdatacarcel1[".exportFields"][] = "fecha_ing__cp";
$tdatacarcel1[".exportFields"][] = "total_delitos";
$tdatacarcel1[".exportFields"][] = "delitos";
$tdatacarcel1[".exportFields"][] = "delitoanalisis";
$tdatacarcel1[".exportFields"][] = "sector_ppd";

$tdatacarcel1[".importFields"] = array();
$tdatacarcel1[".importFields"][] = "id";
$tdatacarcel1[".importFields"][] = "sipe";
$tdatacarcel1[".importFields"][] = "afis";
$tdatacarcel1[".importFields"][] = "edad";
$tdatacarcel1[".importFields"][] = "rangoetario";
$tdatacarcel1[".importFields"][] = "genero";
$tdatacarcel1[".importFields"][] = "fecha_nac";
$tdatacarcel1[".importFields"][] = "edad1";
$tdatacarcel1[".importFields"][] = "dui";
$tdatacarcel1[".importFields"][] = "profesion_oficio";
$tdatacarcel1[".importFields"][] = "estado_civil";
$tdatacarcel1[".importFields"][] = "ciudadania";
$tdatacarcel1[".importFields"][] = "mun_nacimiento";
$tdatacarcel1[".importFields"][] = "depto_nacim";
$tdatacarcel1[".importFields"][] = "direccion";
$tdatacarcel1[".importFields"][] = "mun_resid";
$tdatacarcel1[".importFields"][] = "depart_resid";
$tdatacarcel1[".importFields"][] = "sj_interno";
$tdatacarcel1[".importFields"][] = "fase";
$tdatacarcel1[".importFields"][] = "org_delictiva";
$tdatacarcel1[".importFields"][] = "tipo_mara";
$tdatacarcel1[".importFields"][] = "reincidente";
$tdatacarcel1[".importFields"][] = "deportado";
$tdatacarcel1[".importFields"][] = "direccion1";
$tdatacarcel1[".importFields"][] = "sector";
$tdatacarcel1[".importFields"][] = "celda";
$tdatacarcel1[".importFields"][] = "fecha_ing__sp";
$tdatacarcel1[".importFields"][] = "libro";
$tdatacarcel1[".importFields"][] = "fecha_ing__cp";
$tdatacarcel1[".importFields"][] = "total_delitos";
$tdatacarcel1[".importFields"][] = "delitos";
$tdatacarcel1[".importFields"][] = "delitoanalisis";
$tdatacarcel1[".importFields"][] = "sector_ppd";

$tdatacarcel1[".printFields"] = array();
$tdatacarcel1[".printFields"][] = "id";
$tdatacarcel1[".printFields"][] = "sipe";
$tdatacarcel1[".printFields"][] = "afis";
$tdatacarcel1[".printFields"][] = "edad";
$tdatacarcel1[".printFields"][] = "rangoetario";
$tdatacarcel1[".printFields"][] = "genero";
$tdatacarcel1[".printFields"][] = "fecha_nac";
$tdatacarcel1[".printFields"][] = "edad1";
$tdatacarcel1[".printFields"][] = "dui";
$tdatacarcel1[".printFields"][] = "profesion_oficio";
$tdatacarcel1[".printFields"][] = "estado_civil";
$tdatacarcel1[".printFields"][] = "ciudadania";
$tdatacarcel1[".printFields"][] = "mun_nacimiento";
$tdatacarcel1[".printFields"][] = "depto_nacim";
$tdatacarcel1[".printFields"][] = "direccion";
$tdatacarcel1[".printFields"][] = "mun_resid";
$tdatacarcel1[".printFields"][] = "depart_resid";
$tdatacarcel1[".printFields"][] = "sj_interno";
$tdatacarcel1[".printFields"][] = "fase";
$tdatacarcel1[".printFields"][] = "org_delictiva";
$tdatacarcel1[".printFields"][] = "tipo_mara";
$tdatacarcel1[".printFields"][] = "reincidente";
$tdatacarcel1[".printFields"][] = "deportado";
$tdatacarcel1[".printFields"][] = "direccion1";
$tdatacarcel1[".printFields"][] = "sector";
$tdatacarcel1[".printFields"][] = "celda";
$tdatacarcel1[".printFields"][] = "fecha_ing__sp";
$tdatacarcel1[".printFields"][] = "libro";
$tdatacarcel1[".printFields"][] = "fecha_ing__cp";
$tdatacarcel1[".printFields"][] = "total_delitos";
$tdatacarcel1[".printFields"][] = "delitos";
$tdatacarcel1[".printFields"][] = "delitoanalisis";
$tdatacarcel1[".printFields"][] = "sector_ppd";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","id");
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




	$tdatacarcel1["id"] = $fdata;
//	sipe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sipe";
	$fdata["GoodName"] = "sipe";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","sipe");
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




	$tdatacarcel1["sipe"] = $fdata;
//	afis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "afis";
	$fdata["GoodName"] = "afis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","afis");
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




	$tdatacarcel1["afis"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","edad");
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




	$tdatacarcel1["edad"] = $fdata;
//	rangoetario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rangoetario";
	$fdata["GoodName"] = "rangoetario";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","rangoetario");
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




	$tdatacarcel1["rangoetario"] = $fdata;
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","genero");
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




	$tdatacarcel1["genero"] = $fdata;
//	fecha_nac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fecha_nac";
	$fdata["GoodName"] = "fecha_nac";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","fecha_nac");
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




	$tdatacarcel1["fecha_nac"] = $fdata;
//	edad1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "edad1";
	$fdata["GoodName"] = "edad1";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","edad1");
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




	$tdatacarcel1["edad1"] = $fdata;
//	dui
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dui";
	$fdata["GoodName"] = "dui";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","dui");
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




	$tdatacarcel1["dui"] = $fdata;
//	profesion_oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "profesion_oficio";
	$fdata["GoodName"] = "profesion_oficio";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","profesion_oficio");
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




	$tdatacarcel1["profesion_oficio"] = $fdata;
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","estado_civil");
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




	$tdatacarcel1["estado_civil"] = $fdata;
//	ciudadania
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ciudadania";
	$fdata["GoodName"] = "ciudadania";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","ciudadania");
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




	$tdatacarcel1["ciudadania"] = $fdata;
//	mun_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "mun_nacimiento";
	$fdata["GoodName"] = "mun_nacimiento";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","mun_nacimiento");
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




	$tdatacarcel1["mun_nacimiento"] = $fdata;
//	depto_nacim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "depto_nacim";
	$fdata["GoodName"] = "depto_nacim";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","depto_nacim");
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




	$tdatacarcel1["depto_nacim"] = $fdata;
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","direccion");
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




	$tdatacarcel1["direccion"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","mun_resid");
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


	$tdatacarcel1["mun_resid"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","depart_resid");
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


	$tdatacarcel1["depart_resid"] = $fdata;
//	sj_interno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "sj_interno";
	$fdata["GoodName"] = "sj_interno";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","sj_interno");
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




	$tdatacarcel1["sj_interno"] = $fdata;
//	fase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "fase";
	$fdata["GoodName"] = "fase";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","fase");
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




	$tdatacarcel1["fase"] = $fdata;
//	org_delictiva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "org_delictiva";
	$fdata["GoodName"] = "org_delictiva";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","org_delictiva");
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




	$tdatacarcel1["org_delictiva"] = $fdata;
//	tipo_mara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "tipo_mara";
	$fdata["GoodName"] = "tipo_mara";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","tipo_mara");
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




	$tdatacarcel1["tipo_mara"] = $fdata;
//	reincidente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "reincidente";
	$fdata["GoodName"] = "reincidente";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","reincidente");
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




	$tdatacarcel1["reincidente"] = $fdata;
//	deportado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "deportado";
	$fdata["GoodName"] = "deportado";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","deportado");
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




	$tdatacarcel1["deportado"] = $fdata;
//	direccion1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "direccion1";
	$fdata["GoodName"] = "direccion1";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","direccion1");
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




	$tdatacarcel1["direccion1"] = $fdata;
//	sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "sector";
	$fdata["GoodName"] = "sector";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","sector");
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




	$tdatacarcel1["sector"] = $fdata;
//	celda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "celda";
	$fdata["GoodName"] = "celda";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","celda");
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




	$tdatacarcel1["celda"] = $fdata;
//	fecha_ing__sp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "fecha_ing__sp";
	$fdata["GoodName"] = "fecha_ing__sp";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","fecha_ing__sp");
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




	$tdatacarcel1["fecha_ing__sp"] = $fdata;
//	libro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "libro";
	$fdata["GoodName"] = "libro";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","libro");
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




	$tdatacarcel1["libro"] = $fdata;
//	fecha_ing__cp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "fecha_ing__cp";
	$fdata["GoodName"] = "fecha_ing__cp";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","fecha_ing__cp");
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




	$tdatacarcel1["fecha_ing__cp"] = $fdata;
//	total_delitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "total_delitos";
	$fdata["GoodName"] = "total_delitos";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","total_delitos");
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




	$tdatacarcel1["total_delitos"] = $fdata;
//	delitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "delitos";
	$fdata["GoodName"] = "delitos";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","delitos");
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




	$tdatacarcel1["delitos"] = $fdata;
//	delitoanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "delitoanalisis";
	$fdata["GoodName"] = "delitoanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","delitoanalisis");
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




	$tdatacarcel1["delitoanalisis"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel1","sector_ppd");
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




	$tdatacarcel1["sector_ppd"] = $fdata;


$tables_data["carcel1"]=&$tdatacarcel1;
$field_labels["carcel1"] = &$fieldLabelscarcel1;
$fieldToolTips["carcel1"] = &$fieldToolTipscarcel1;
$placeHolders["carcel1"] = &$placeHolderscarcel1;
$page_titles["carcel1"] = &$pageTitlescarcel1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["carcel1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["carcel1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_carcel1()
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
	"m_srcTableName" => "carcel1"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "carcel1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sipe",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto8["m_sql"] = "sipe";
$proto8["m_srcTableName"] = "carcel1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "afis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto10["m_sql"] = "afis";
$proto10["m_srcTableName"] = "carcel1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "edad",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto12["m_sql"] = "edad";
$proto12["m_srcTableName"] = "carcel1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto14["m_sql"] = "rangoetario";
$proto14["m_srcTableName"] = "carcel1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto16["m_sql"] = "genero";
$proto16["m_srcTableName"] = "carcel1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_nac",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto18["m_sql"] = "fecha_nac";
$proto18["m_srcTableName"] = "carcel1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "edad1",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto20["m_sql"] = "edad1";
$proto20["m_srcTableName"] = "carcel1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dui",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto22["m_sql"] = "dui";
$proto22["m_srcTableName"] = "carcel1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "profesion_oficio",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto24["m_sql"] = "profesion_oficio";
$proto24["m_srcTableName"] = "carcel1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto26["m_sql"] = "estado_civil";
$proto26["m_srcTableName"] = "carcel1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ciudadania",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto28["m_sql"] = "ciudadania";
$proto28["m_srcTableName"] = "carcel1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_nacimiento",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto30["m_sql"] = "mun_nacimiento";
$proto30["m_srcTableName"] = "carcel1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "depto_nacim",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto32["m_sql"] = "depto_nacim";
$proto32["m_srcTableName"] = "carcel1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto34["m_sql"] = "direccion";
$proto34["m_srcTableName"] = "carcel1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto36["m_sql"] = "mun_resid";
$proto36["m_srcTableName"] = "carcel1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto38["m_sql"] = "depart_resid";
$proto38["m_srcTableName"] = "carcel1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "sj_interno",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto40["m_sql"] = "sj_interno";
$proto40["m_srcTableName"] = "carcel1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "fase",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto42["m_sql"] = "fase";
$proto42["m_srcTableName"] = "carcel1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto44["m_sql"] = "org_delictiva";
$proto44["m_srcTableName"] = "carcel1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto46["m_sql"] = "tipo_mara";
$proto46["m_srcTableName"] = "carcel1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "reincidente",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto48["m_sql"] = "reincidente";
$proto48["m_srcTableName"] = "carcel1";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "deportado",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto50["m_sql"] = "deportado";
$proto50["m_srcTableName"] = "carcel1";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion1",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto52["m_sql"] = "direccion1";
$proto52["m_srcTableName"] = "carcel1";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "sector",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto54["m_sql"] = "sector";
$proto54["m_srcTableName"] = "carcel1";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "celda",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto56["m_sql"] = "celda";
$proto56["m_srcTableName"] = "carcel1";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ing__sp",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto58["m_sql"] = "fecha_ing__sp";
$proto58["m_srcTableName"] = "carcel1";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "libro",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto60["m_sql"] = "libro";
$proto60["m_srcTableName"] = "carcel1";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ing__cp",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto62["m_sql"] = "fecha_ing__cp";
$proto62["m_srcTableName"] = "carcel1";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "total_delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto64["m_sql"] = "total_delitos";
$proto64["m_srcTableName"] = "carcel1";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto66["m_sql"] = "delitos";
$proto66["m_srcTableName"] = "carcel1";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto68["m_sql"] = "delitoanalisis";
$proto68["m_srcTableName"] = "carcel1";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto70["m_sql"] = "sector_ppd";
$proto70["m_srcTableName"] = "carcel1";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto72=array();
$proto72["m_link"] = "SQLL_MAIN";
			$proto73=array();
$proto73["m_strName"] = "carcel";
$proto73["m_srcTableName"] = "carcel1";
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
$proto72["m_srcTableName"] = "carcel1";
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
	"m_srcTableName" => "carcel1"
));

$proto76["m_column"]=$obj;
$obj = new SQLGroupByItem($proto76);

$proto0["m_groupby"][]=$obj;
												$proto78=array();
						$obj = new SQLField(array(
	"m_strName" => "sipe",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto78["m_column"]=$obj;
$obj = new SQLGroupByItem($proto78);

$proto0["m_groupby"][]=$obj;
												$proto80=array();
						$obj = new SQLField(array(
	"m_strName" => "afis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto80["m_column"]=$obj;
$obj = new SQLGroupByItem($proto80);

$proto0["m_groupby"][]=$obj;
												$proto82=array();
						$obj = new SQLField(array(
	"m_strName" => "edad",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto82["m_column"]=$obj;
$obj = new SQLGroupByItem($proto82);

$proto0["m_groupby"][]=$obj;
												$proto84=array();
						$obj = new SQLField(array(
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto84["m_column"]=$obj;
$obj = new SQLGroupByItem($proto84);

$proto0["m_groupby"][]=$obj;
												$proto86=array();
						$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto86["m_column"]=$obj;
$obj = new SQLGroupByItem($proto86);

$proto0["m_groupby"][]=$obj;
												$proto88=array();
						$obj = new SQLField(array(
	"m_strName" => "fecha_nac",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto88["m_column"]=$obj;
$obj = new SQLGroupByItem($proto88);

$proto0["m_groupby"][]=$obj;
												$proto90=array();
						$obj = new SQLField(array(
	"m_strName" => "edad1",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto90["m_column"]=$obj;
$obj = new SQLGroupByItem($proto90);

$proto0["m_groupby"][]=$obj;
												$proto92=array();
						$obj = new SQLField(array(
	"m_strName" => "dui",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto92["m_column"]=$obj;
$obj = new SQLGroupByItem($proto92);

$proto0["m_groupby"][]=$obj;
												$proto94=array();
						$obj = new SQLField(array(
	"m_strName" => "profesion_oficio",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto94["m_column"]=$obj;
$obj = new SQLGroupByItem($proto94);

$proto0["m_groupby"][]=$obj;
												$proto96=array();
						$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto96["m_column"]=$obj;
$obj = new SQLGroupByItem($proto96);

$proto0["m_groupby"][]=$obj;
												$proto98=array();
						$obj = new SQLField(array(
	"m_strName" => "ciudadania",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto98["m_column"]=$obj;
$obj = new SQLGroupByItem($proto98);

$proto0["m_groupby"][]=$obj;
												$proto100=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_nacimiento",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto100["m_column"]=$obj;
$obj = new SQLGroupByItem($proto100);

$proto0["m_groupby"][]=$obj;
												$proto102=array();
						$obj = new SQLField(array(
	"m_strName" => "depto_nacim",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto102["m_column"]=$obj;
$obj = new SQLGroupByItem($proto102);

$proto0["m_groupby"][]=$obj;
												$proto104=array();
						$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto104["m_column"]=$obj;
$obj = new SQLGroupByItem($proto104);

$proto0["m_groupby"][]=$obj;
												$proto106=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto106["m_column"]=$obj;
$obj = new SQLGroupByItem($proto106);

$proto0["m_groupby"][]=$obj;
												$proto108=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto108["m_column"]=$obj;
$obj = new SQLGroupByItem($proto108);

$proto0["m_groupby"][]=$obj;
												$proto110=array();
						$obj = new SQLField(array(
	"m_strName" => "sj_interno",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto110["m_column"]=$obj;
$obj = new SQLGroupByItem($proto110);

$proto0["m_groupby"][]=$obj;
												$proto112=array();
						$obj = new SQLField(array(
	"m_strName" => "fase",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto112["m_column"]=$obj;
$obj = new SQLGroupByItem($proto112);

$proto0["m_groupby"][]=$obj;
												$proto114=array();
						$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto114["m_column"]=$obj;
$obj = new SQLGroupByItem($proto114);

$proto0["m_groupby"][]=$obj;
												$proto116=array();
						$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto116["m_column"]=$obj;
$obj = new SQLGroupByItem($proto116);

$proto0["m_groupby"][]=$obj;
												$proto118=array();
						$obj = new SQLField(array(
	"m_strName" => "reincidente",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto118["m_column"]=$obj;
$obj = new SQLGroupByItem($proto118);

$proto0["m_groupby"][]=$obj;
												$proto120=array();
						$obj = new SQLField(array(
	"m_strName" => "deportado",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto120["m_column"]=$obj;
$obj = new SQLGroupByItem($proto120);

$proto0["m_groupby"][]=$obj;
												$proto122=array();
						$obj = new SQLField(array(
	"m_strName" => "direccion1",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto122["m_column"]=$obj;
$obj = new SQLGroupByItem($proto122);

$proto0["m_groupby"][]=$obj;
												$proto124=array();
						$obj = new SQLField(array(
	"m_strName" => "sector",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto124["m_column"]=$obj;
$obj = new SQLGroupByItem($proto124);

$proto0["m_groupby"][]=$obj;
												$proto126=array();
						$obj = new SQLField(array(
	"m_strName" => "celda",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto126["m_column"]=$obj;
$obj = new SQLGroupByItem($proto126);

$proto0["m_groupby"][]=$obj;
												$proto128=array();
						$obj = new SQLField(array(
	"m_strName" => "fecha_ing__sp",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto128["m_column"]=$obj;
$obj = new SQLGroupByItem($proto128);

$proto0["m_groupby"][]=$obj;
												$proto130=array();
						$obj = new SQLField(array(
	"m_strName" => "libro",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto130["m_column"]=$obj;
$obj = new SQLGroupByItem($proto130);

$proto0["m_groupby"][]=$obj;
												$proto132=array();
						$obj = new SQLField(array(
	"m_strName" => "fecha_ing__cp",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto132["m_column"]=$obj;
$obj = new SQLGroupByItem($proto132);

$proto0["m_groupby"][]=$obj;
												$proto134=array();
						$obj = new SQLField(array(
	"m_strName" => "total_delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto134["m_column"]=$obj;
$obj = new SQLGroupByItem($proto134);

$proto0["m_groupby"][]=$obj;
												$proto136=array();
						$obj = new SQLField(array(
	"m_strName" => "delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto136["m_column"]=$obj;
$obj = new SQLGroupByItem($proto136);

$proto0["m_groupby"][]=$obj;
												$proto138=array();
						$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto138["m_column"]=$obj;
$obj = new SQLGroupByItem($proto138);

$proto0["m_groupby"][]=$obj;
												$proto140=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto140["m_column"]=$obj;
$obj = new SQLGroupByItem($proto140);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto142=array();
						$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel1"
));

$proto142["m_column"]=$obj;
$proto142["m_bAsc"] = 0;
$proto142["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto142);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="carcel1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carcel1 = createSqlQuery_carcel1();


	
		;

																																	

$tdatacarcel1[".sqlquery"] = $queryData_carcel1;

$tableEvents["carcel1"] = new eventsBase;
$tdatacarcel1[".hasEvents"] = false;

?>