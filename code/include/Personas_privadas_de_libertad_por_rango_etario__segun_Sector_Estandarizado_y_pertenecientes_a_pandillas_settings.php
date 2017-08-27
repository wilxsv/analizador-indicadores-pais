<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas = array();
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".truncateText"] = true;
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".NumberOfChars"] = 80;
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".ShortName"] = "Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".OwnerID"] = "";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".OriginalTable"] = "dgcp";

//	field labels
$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas = array();
$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas = array();
$pageTitlesPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas = array();
$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"] = array();
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"] = array();
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"] = array();
	$pageTitlesPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"] = array();
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["rangoetario"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["rangoetario"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["tipo_mara"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["tipo_mara"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["sector_ppd"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["sector_ppd"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["org_delictiva"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["org_delictiva"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["COUNT_rangoetario_"] = "COUNT(rangoetario)";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["COUNT_rangoetario_"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["COUNT_rangoetario_"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["carcel_genero"] = "Carcel.genero";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["carcel_genero"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["carcel_genero"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["mun_resid"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["mun_resid"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["depart_resid"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]["depart_resid"] = "";
	if (count($fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["Spanish"]))
		$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"] = array();
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"] = array();
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"] = array();
	$pageTitlesPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"] = array();
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["rangoetario"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["rangoetario"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["tipo_mara"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["tipo_mara"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["sector_ppd"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["sector_ppd"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["org_delictiva"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["org_delictiva"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["COUNT_rangoetario_"] = "COUNT(rangoetario)";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["COUNT_rangoetario_"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["COUNT_rangoetario_"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["carcel_genero"] = "Carcel.genero";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["carcel_genero"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["carcel_genero"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["mun_resid"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["mun_resid"] = "";
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["depart_resid"] = "";
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]["depart_resid"] = "";
	if (count($fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["English"]))
		$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[""] = array();
	$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[""] = array();
	$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[""] = array();
	$pageTitlesPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[""] = array();
	if (count($fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[""]))
		$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".isUseToolTips"] = true;
}





$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".shortTableName"] = "Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".nSecOptions"] = 0;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".recsPerRowPrint"] = 1;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".mainTableOwnerID"] = "";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".moveNext"] = 1;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".entityType"] = 2;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".strOriginalTableName"] = "dgcp";

	



$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".showAddInPopup"] = false;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".showEditInPopup"] = false;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".fieldsForRegister"] = array();

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".listAjax"] = false;

	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".audit"] = false;

	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".locking"] = false;


$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".add"] = true;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".afterAddAction"] = 1;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".closePopupAfterAdd"] = 1;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".afterAddActionDetTable"] = "";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".list"] = true;



$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".reorderRecordsByHeader"] = true;



$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".inlineAdd"] = true;


$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".exportTo"] = true;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".printFriendly"] = true;


$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".searchSaving"] = false;
//

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".showSearchPanel"] = true;
		$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".flexibleSearch"] = true;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".isUseAjaxSuggest"] = true;






$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".ajaxCodeSnippetAdded"] = false;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".buttonsAdded"] = false;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".isUseTimeForSearch"] = false;





$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".allSearchFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".filterFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".requiredSearchFields"] = array();

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".allSearchFields"][] = "tipo_mara";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".allSearchFields"][] = "sector_ppd";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".allSearchFields"][] = "org_delictiva";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".allSearchFields"][] = "COUNT(rangoetario)";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".allSearchFields"][] = "rangoetario";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".allSearchFields"][] = "carcel.genero";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".allSearchFields"][] = "mun_resid";
		$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".requiredSearchFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".allSearchFields"][] = "depart_resid";
		$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".requiredSearchFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".filterFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".filterFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".googleLikeFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".googleLikeFields"][] = "tipo_mara";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".googleLikeFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".googleLikeFields"][] = "org_delictiva";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".googleLikeFields"][] = "COUNT(rangoetario)";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".googleLikeFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".googleLikeFields"][] = "carcel.genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".googleLikeFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".googleLikeFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".panelSearchFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".searchPanelOptions"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".panelSearchFields"][] = "mun_resid";
	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".panelSearchFields"][] = "depart_resid";
	
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".advSearchFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".advSearchFields"][] = "tipo_mara";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".advSearchFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".advSearchFields"][] = "org_delictiva";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".advSearchFields"][] = "COUNT(rangoetario)";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".advSearchFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".advSearchFields"][] = "carcel.genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".advSearchFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".advSearchFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".tableType"] = "report";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".printerPageOrientation"] = 0;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".nPrinterPageScale"] = 100;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".nPrinterSplitRecords"] = 40;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".nPrinterPDFSplitRecords"] = 40;



$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".geocodingEnabled"] = false;

//report settings
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".crossTabReport"] = true;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".reportGroupFields"] = true;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "sector_ppd";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "tipo_mara";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".reportGroupFieldsData"] = $reportGroupFields;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".reportHorizontalSummary"] = true;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".isExistTotalFields"] = true;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".reportVerticalSummary"] = true;



$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".repShowDet"] = true;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".reportLayout"] = 6;

//end of report settings




$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".listGridLayout"] = 3;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY carcel.genero DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".strOrderBy"] = $tstrOrderBy;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".orderindexes"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".orderindexes"][] = array(6, (0 ? "ASC" : "DESC"), "carcel.genero");

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".sqlHead"] = "SELECT tipo_mara.tipo_mara,  carcel.sector_ppd,  tipo_mara.org_delictiva,  COUNT(carcel.rangoetario)/2 AS `COUNT(rangoetario)`,  carcel.rangoetario,  carcel.genero AS `carcel.genero`,  carcel.mun_resid,  carcel.depart_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".sqlFrom"] = "FROM carcel  INNER JOIN tipo_mara ON carcel.org_delictiva = tipo_mara.org_delictiva";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".sqlWhereExpr"] = "";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".arrGroupsPerPage"] = $arrGPP;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".highlightSearchResults"] = true;

$tableKeysPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".Keys"] = $tableKeysPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas;

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".listFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".listFields"][] = "tipo_mara";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".listFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".listFields"][] = "org_delictiva";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".listFields"][] = "COUNT(rangoetario)";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".listFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".listFields"][] = "carcel.genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".listFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".listFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".hideMobileList"] = array();


$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".viewFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".viewFields"][] = "tipo_mara";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".viewFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".viewFields"][] = "org_delictiva";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".viewFields"][] = "COUNT(rangoetario)";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".viewFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".viewFields"][] = "carcel.genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".viewFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".viewFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".addFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".addFields"][] = "tipo_mara";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".addFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".addFields"][] = "org_delictiva";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".addFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".addFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".addFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".masterListFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".masterListFields"][] = "tipo_mara";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".masterListFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".masterListFields"][] = "org_delictiva";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".masterListFields"][] = "COUNT(rangoetario)";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".masterListFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".masterListFields"][] = "carcel.genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".masterListFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".masterListFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".inlineAddFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".inlineAddFields"][] = "tipo_mara";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".inlineAddFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".inlineAddFields"][] = "org_delictiva";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".inlineAddFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".inlineAddFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".inlineAddFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".editFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".editFields"][] = "tipo_mara";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".editFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".editFields"][] = "org_delictiva";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".editFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".editFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".editFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".inlineEditFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".inlineEditFields"][] = "tipo_mara";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".inlineEditFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".inlineEditFields"][] = "org_delictiva";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".inlineEditFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".inlineEditFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".inlineEditFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".updateSelectedFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".updateSelectedFields"][] = "tipo_mara";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".updateSelectedFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".updateSelectedFields"][] = "org_delictiva";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".updateSelectedFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".updateSelectedFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".updateSelectedFields"][] = "depart_resid";


$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".exportFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".exportFields"][] = "tipo_mara";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".exportFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".exportFields"][] = "org_delictiva";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".exportFields"][] = "COUNT(rangoetario)";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".exportFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".exportFields"][] = "carcel.genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".exportFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".exportFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".importFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".importFields"][] = "tipo_mara";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".importFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".importFields"][] = "org_delictiva";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".importFields"][] = "COUNT(rangoetario)";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".importFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".importFields"][] = "carcel.genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".importFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".importFields"][] = "depart_resid";

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".printFields"] = array();
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".printFields"][] = "tipo_mara";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".printFields"][] = "sector_ppd";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".printFields"][] = "org_delictiva";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".printFields"][] = "COUNT(rangoetario)";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".printFields"][] = "rangoetario";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".printFields"][] = "carcel.genero";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".printFields"][] = "mun_resid";
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".printFields"][] = "depart_resid";

//	tipo_mara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tipo_mara";
	$fdata["GoodName"] = "tipo_mara";
	$fdata["ownerTable"] = "tipo_mara";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas","tipo_mara");
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
	$fdata["FullName"] = "tipo_mara.tipo_mara";

	
	
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




	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["tipo_mara"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas","sector_ppd");
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
	$fdata["FullName"] = "carcel.sector_ppd";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "sectorppd";
	$edata["LookupConnId"] = "delitos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idsectorppd";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "idsectorppd";

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["sector_ppd"] = $fdata;
//	org_delictiva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "org_delictiva";
	$fdata["GoodName"] = "org_delictiva";
	$fdata["ownerTable"] = "tipo_mara";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas","org_delictiva");
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
	$fdata["FullName"] = "tipo_mara.org_delictiva";

	
	
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




	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["org_delictiva"] = $fdata;
//	COUNT(rangoetario)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "COUNT(rangoetario)";
	$fdata["GoodName"] = "COUNT_rangoetario_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas","COUNT_rangoetario_");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(rangoetario)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(carcel.rangoetario)/2";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["COUNT(rangoetario)"] = $fdata;
//	rangoetario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rangoetario";
	$fdata["GoodName"] = "rangoetario";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas","rangoetario");
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
	$fdata["FullName"] = "carcel.rangoetario";

	
	
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




	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["rangoetario"] = $fdata;
//	carcel.genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "carcel.genero";
	$fdata["GoodName"] = "carcel_genero";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas","carcel_genero");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "genero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carcel.genero";

	
	
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




	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["carcel.genero"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas","mun_resid");
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
	$fdata["FullName"] = "carcel.mun_resid";

	
	
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["mun_resid"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas","depart_resid");
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
	$fdata["FullName"] = "carcel.depart_resid";

	
	
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas["depart_resid"] = $fdata;


$tables_data["Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas"]=&$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas;
$field_labels["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas"] = &$fieldLabelsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas;
$fieldToolTips["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas"] = &$fieldToolTipsPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas;
$placeHolders["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas"] = &$placeHoldersPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas;
$page_titles["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas"] = &$pageTitlesPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tipo_mara.tipo_mara,  carcel.sector_ppd,  tipo_mara.org_delictiva,  COUNT(carcel.rangoetario)/2 AS `COUNT(rangoetario)`,  carcel.rangoetario,  carcel.genero AS `carcel.genero`,  carcel.mun_resid,  carcel.depart_resid";
$proto0["m_strFrom"] = "FROM carcel  INNER JOIN tipo_mara ON carcel.org_delictiva = tipo_mara.org_delictiva";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY carcel.genero DESC";
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
	"m_strName" => "tipo_mara",
	"m_strTable" => "tipo_mara",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas"
));

$proto6["m_sql"] = "tipo_mara.tipo_mara";
$proto6["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas"
));

$proto8["m_sql"] = "carcel.sector_ppd";
$proto8["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "tipo_mara",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas"
));

$proto10["m_sql"] = "tipo_mara.org_delictiva";
$proto10["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "COUNT(carcel.rangoetario)/2"
));

$proto12["m_sql"] = "COUNT(carcel.rangoetario)/2";
$proto12["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "COUNT(rangoetario)";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas"
));

$proto14["m_sql"] = "carcel.rangoetario";
$proto14["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas"
));

$proto16["m_sql"] = "carcel.genero";
$proto16["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "carcel.genero";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas"
));

$proto18["m_sql"] = "carcel.mun_resid";
$proto18["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas"
));

$proto20["m_sql"] = "carcel.depart_resid";
$proto20["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "carcel";
$proto23["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "sipe";
$proto23["m_columns"][] = "afis";
$proto23["m_columns"][] = "edad";
$proto23["m_columns"][] = "rangoetario";
$proto23["m_columns"][] = "genero";
$proto23["m_columns"][] = "fecha_nac";
$proto23["m_columns"][] = "edad1";
$proto23["m_columns"][] = "dui";
$proto23["m_columns"][] = "nivel_edu";
$proto23["m_columns"][] = "educacionanalisis";
$proto23["m_columns"][] = "profesion_oficio";
$proto23["m_columns"][] = "estado_civil";
$proto23["m_columns"][] = "ciudadania";
$proto23["m_columns"][] = "mun_nacimiento";
$proto23["m_columns"][] = "depto_nacim";
$proto23["m_columns"][] = "direccion";
$proto23["m_columns"][] = "mun_resid";
$proto23["m_columns"][] = "depart_resid";
$proto23["m_columns"][] = "delitosanalisis";
$proto23["m_columns"][] = "sj_interno";
$proto23["m_columns"][] = "fase";
$proto23["m_columns"][] = "org_delictiva";
$proto23["m_columns"][] = "tipo_mara";
$proto23["m_columns"][] = "reincidente";
$proto23["m_columns"][] = "deportado";
$proto23["m_columns"][] = "direccion1";
$proto23["m_columns"][] = "sector";
$proto23["m_columns"][] = "celda";
$proto23["m_columns"][] = "fecha_ing__sp";
$proto23["m_columns"][] = "libro";
$proto23["m_columns"][] = "fecha_ing__cp";
$proto23["m_columns"][] = "total_delitos";
$proto23["m_columns"][] = "delitos";
$proto23["m_columns"][] = "delitoanalisis";
$proto23["m_columns"][] = "sector_ppd";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "carcel";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
												$proto26=array();
$proto26["m_link"] = "SQLL_INNERJOIN";
			$proto27=array();
$proto27["m_strName"] = "tipo_mara";
$proto27["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "org_delictiva";
$proto27["m_columns"][] = "tipo_mara";
$proto27["m_columns"][] = "ID_1";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "INNER JOIN tipo_mara ON carcel.org_delictiva = tipo_mara.org_delictiva";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas";
$proto28=array();
$proto28["m_sql"] = "carcel.org_delictiva = tipo_mara.org_delictiva";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "= tipo_mara.org_delictiva";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "tipo_mara",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "tipo_mara",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas = createSqlQuery_Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas();


	
		;

								

$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".sqlquery"] = $queryData_Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas;

$tableEvents["Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas"] = new eventsBase;
$tdataPersonas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas[".hasEvents"] = false;

?>