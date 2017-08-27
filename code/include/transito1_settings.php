<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatransito1 = array();
	$tdatatransito1[".truncateText"] = true;
	$tdatatransito1[".NumberOfChars"] = 80;
	$tdatatransito1[".ShortName"] = "transito1";
	$tdatatransito1[".OwnerID"] = "";
	$tdatatransito1[".OriginalTable"] = "transito";

//	field labels
$fieldLabelstransito1 = array();
$fieldToolTipstransito1 = array();
$pageTitlestransito1 = array();
$placeHolderstransito1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstransito1["Spanish"] = array();
	$fieldToolTipstransito1["Spanish"] = array();
	$placeHolderstransito1["Spanish"] = array();
	$pageTitlestransito1["Spanish"] = array();
	$fieldLabelstransito1["Spanish"]["cauacc"] = "Cauacc";
	$fieldToolTipstransito1["Spanish"]["cauacc"] = "";
	$placeHolderstransito1["Spanish"]["cauacc"] = "";
	$fieldLabelstransito1["Spanish"]["causa_analisis"] = "Causa Analisis";
	$fieldToolTipstransito1["Spanish"]["causa_analisis"] = "";
	$placeHolderstransito1["Spanish"]["causa_analisis"] = "";
	$fieldLabelstransito1["Spanish"]["eid"] = "Eid";
	$fieldToolTipstransito1["Spanish"]["eid"] = "";
	$placeHolderstransito1["Spanish"]["eid"] = "";
	$fieldLabelstransito1["Spanish"]["pid"] = "Pid";
	$fieldToolTipstransito1["Spanish"]["pid"] = "";
	$placeHolderstransito1["Spanish"]["pid"] = "";
	$fieldLabelstransito1["Spanish"]["unidad"] = "Unidad";
	$fieldToolTipstransito1["Spanish"]["unidad"] = "";
	$placeHolderstransito1["Spanish"]["unidad"] = "";
	$fieldLabelstransito1["Spanish"]["sexo"] = "Sexo";
	$fieldToolTipstransito1["Spanish"]["sexo"] = "";
	$placeHolderstransito1["Spanish"]["sexo"] = "";
	$fieldLabelstransito1["Spanish"]["edad"] = "Edad";
	$fieldToolTipstransito1["Spanish"]["edad"] = "";
	$placeHolderstransito1["Spanish"]["edad"] = "";
	$fieldLabelstransito1["Spanish"]["resu"] = "Resu";
	$fieldToolTipstransito1["Spanish"]["resu"] = "";
	$placeHolderstransito1["Spanish"]["resu"] = "";
	$fieldLabelstransito1["Spanish"]["calidad"] = "Calidad";
	$fieldToolTipstransito1["Spanish"]["calidad"] = "";
	$placeHolderstransito1["Spanish"]["calidad"] = "";
	$fieldLabelstransito1["Spanish"]["fecacc"] = "Fecacc";
	$fieldToolTipstransito1["Spanish"]["fecacc"] = "";
	$placeHolderstransito1["Spanish"]["fecacc"] = "";
	$fieldLabelstransito1["Spanish"]["horacc"] = "Horacc";
	$fieldToolTipstransito1["Spanish"]["horacc"] = "";
	$placeHolderstransito1["Spanish"]["horacc"] = "";
	$fieldLabelstransito1["Spanish"]["rangohorario"] = "Rangohorario";
	$fieldToolTipstransito1["Spanish"]["rangohorario"] = "";
	$placeHolderstransito1["Spanish"]["rangohorario"] = "";
	$fieldLabelstransito1["Spanish"]["tipacc"] = "Tipacc";
	$fieldToolTipstransito1["Spanish"]["tipacc"] = "";
	$placeHolderstransito1["Spanish"]["tipacc"] = "";
	$fieldLabelstransito1["Spanish"]["diracc"] = "Diracc";
	$fieldToolTipstransito1["Spanish"]["diracc"] = "";
	$placeHolderstransito1["Spanish"]["diracc"] = "";
	$fieldLabelstransito1["Spanish"]["munacc"] = "Munacc";
	$fieldToolTipstransito1["Spanish"]["munacc"] = "";
	$placeHolderstransito1["Spanish"]["munacc"] = "";
	$fieldLabelstransito1["Spanish"]["clares"] = "Clares";
	$fieldToolTipstransito1["Spanish"]["clares"] = "";
	$placeHolderstransito1["Spanish"]["clares"] = "";
	$fieldLabelstransito1["Spanish"]["rutres"] = "Rutres";
	$fieldToolTipstransito1["Spanish"]["rutres"] = "";
	$placeHolderstransito1["Spanish"]["rutres"] = "";
	$fieldLabelstransito1["Spanish"]["repdet"] = "Repdet";
	$fieldToolTipstransito1["Spanish"]["repdet"] = "";
	$placeHolderstransito1["Spanish"]["repdet"] = "";
	$fieldLabelstransito1["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipstransito1["Spanish"]["departamento"] = "";
	$placeHolderstransito1["Spanish"]["departamento"] = "";
	$fieldLabelstransito1["Spanish"]["dia"] = "Dia";
	$fieldToolTipstransito1["Spanish"]["dia"] = "";
	$placeHolderstransito1["Spanish"]["dia"] = "";
	$fieldLabelstransito1["Spanish"]["sectorppd"] = "Sectorppd";
	$fieldToolTipstransito1["Spanish"]["sectorppd"] = "";
	$placeHolderstransito1["Spanish"]["sectorppd"] = "";
	$fieldLabelstransito1["Spanish"]["rangoetario"] = "Rangoetario";
	$fieldToolTipstransito1["Spanish"]["rangoetario"] = "";
	$placeHolderstransito1["Spanish"]["rangoetario"] = "";
	$fieldLabelstransito1["Spanish"]["tipo_analisis"] = "Tipo Analisis";
	$fieldToolTipstransito1["Spanish"]["tipo_analisis"] = "";
	$placeHolderstransito1["Spanish"]["tipo_analisis"] = "";
	$fieldLabelstransito1["Spanish"]["mes_analisis"] = "Mes Analisis";
	$fieldToolTipstransito1["Spanish"]["mes_analisis"] = "";
	$placeHolderstransito1["Spanish"]["mes_analisis"] = "";
	if (count($fieldToolTipstransito1["Spanish"]))
		$tdatatransito1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstransito1["English"] = array();
	$fieldToolTipstransito1["English"] = array();
	$placeHolderstransito1["English"] = array();
	$pageTitlestransito1["English"] = array();
	$fieldLabelstransito1["English"]["cauacc"] = "Cauacc";
	$fieldToolTipstransito1["English"]["cauacc"] = "";
	$placeHolderstransito1["English"]["cauacc"] = "";
	$fieldLabelstransito1["English"]["causa_analisis"] = "Causa Analisis";
	$fieldToolTipstransito1["English"]["causa_analisis"] = "";
	$placeHolderstransito1["English"]["causa_analisis"] = "";
	$fieldLabelstransito1["English"]["eid"] = "Eid";
	$fieldToolTipstransito1["English"]["eid"] = "";
	$placeHolderstransito1["English"]["eid"] = "";
	$fieldLabelstransito1["English"]["pid"] = "Pid";
	$fieldToolTipstransito1["English"]["pid"] = "";
	$placeHolderstransito1["English"]["pid"] = "";
	$fieldLabelstransito1["English"]["unidad"] = "Unidad";
	$fieldToolTipstransito1["English"]["unidad"] = "";
	$placeHolderstransito1["English"]["unidad"] = "";
	$fieldLabelstransito1["English"]["sexo"] = "Sexo";
	$fieldToolTipstransito1["English"]["sexo"] = "";
	$placeHolderstransito1["English"]["sexo"] = "";
	$fieldLabelstransito1["English"]["edad"] = "Edad";
	$fieldToolTipstransito1["English"]["edad"] = "";
	$placeHolderstransito1["English"]["edad"] = "";
	$fieldLabelstransito1["English"]["resu"] = "Resu";
	$fieldToolTipstransito1["English"]["resu"] = "";
	$placeHolderstransito1["English"]["resu"] = "";
	$fieldLabelstransito1["English"]["calidad"] = "Calidad";
	$fieldToolTipstransito1["English"]["calidad"] = "";
	$placeHolderstransito1["English"]["calidad"] = "";
	$fieldLabelstransito1["English"]["fecacc"] = "Fecacc";
	$fieldToolTipstransito1["English"]["fecacc"] = "";
	$placeHolderstransito1["English"]["fecacc"] = "";
	$fieldLabelstransito1["English"]["horacc"] = "Horacc";
	$fieldToolTipstransito1["English"]["horacc"] = "";
	$placeHolderstransito1["English"]["horacc"] = "";
	$fieldLabelstransito1["English"]["rangohorario"] = "Rangohorario";
	$fieldToolTipstransito1["English"]["rangohorario"] = "";
	$placeHolderstransito1["English"]["rangohorario"] = "";
	$fieldLabelstransito1["English"]["tipacc"] = "Tipacc";
	$fieldToolTipstransito1["English"]["tipacc"] = "";
	$placeHolderstransito1["English"]["tipacc"] = "";
	$fieldLabelstransito1["English"]["diracc"] = "Diracc";
	$fieldToolTipstransito1["English"]["diracc"] = "";
	$placeHolderstransito1["English"]["diracc"] = "";
	$fieldLabelstransito1["English"]["munacc"] = "Munacc";
	$fieldToolTipstransito1["English"]["munacc"] = "";
	$placeHolderstransito1["English"]["munacc"] = "";
	$fieldLabelstransito1["English"]["clares"] = "Clares";
	$fieldToolTipstransito1["English"]["clares"] = "";
	$placeHolderstransito1["English"]["clares"] = "";
	$fieldLabelstransito1["English"]["rutres"] = "Rutres";
	$fieldToolTipstransito1["English"]["rutres"] = "";
	$placeHolderstransito1["English"]["rutres"] = "";
	$fieldLabelstransito1["English"]["repdet"] = "Repdet";
	$fieldToolTipstransito1["English"]["repdet"] = "";
	$placeHolderstransito1["English"]["repdet"] = "";
	$fieldLabelstransito1["English"]["departamento"] = "Departamento";
	$fieldToolTipstransito1["English"]["departamento"] = "";
	$placeHolderstransito1["English"]["departamento"] = "";
	$fieldLabelstransito1["English"]["dia"] = "Dia";
	$fieldToolTipstransito1["English"]["dia"] = "";
	$placeHolderstransito1["English"]["dia"] = "";
	$fieldLabelstransito1["English"]["sectorppd"] = "Sectorppd";
	$fieldToolTipstransito1["English"]["sectorppd"] = "";
	$placeHolderstransito1["English"]["sectorppd"] = "";
	$fieldLabelstransito1["English"]["rangoetario"] = "Rangoetario";
	$fieldToolTipstransito1["English"]["rangoetario"] = "";
	$placeHolderstransito1["English"]["rangoetario"] = "";
	$fieldLabelstransito1["English"]["tipo_analisis"] = "Tipo Analisis";
	$fieldToolTipstransito1["English"]["tipo_analisis"] = "";
	$placeHolderstransito1["English"]["tipo_analisis"] = "";
	$fieldLabelstransito1["English"]["mes_analisis"] = "Mes Analisis";
	$fieldToolTipstransito1["English"]["mes_analisis"] = "";
	$placeHolderstransito1["English"]["mes_analisis"] = "";
	if (count($fieldToolTipstransito1["English"]))
		$tdatatransito1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstransito1[""] = array();
	$fieldToolTipstransito1[""] = array();
	$placeHolderstransito1[""] = array();
	$pageTitlestransito1[""] = array();
	if (count($fieldToolTipstransito1[""]))
		$tdatatransito1[".isUseToolTips"] = true;
}


	$tdatatransito1[".NCSearch"] = true;



$tdatatransito1[".shortTableName"] = "transito1";
$tdatatransito1[".nSecOptions"] = 0;
$tdatatransito1[".recsPerRowPrint"] = 1;
$tdatatransito1[".mainTableOwnerID"] = "";
$tdatatransito1[".moveNext"] = 1;
$tdatatransito1[".entityType"] = 1;

$tdatatransito1[".strOriginalTableName"] = "transito";

	



$tdatatransito1[".showAddInPopup"] = false;

$tdatatransito1[".showEditInPopup"] = false;

$tdatatransito1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatransito1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatransito1[".fieldsForRegister"] = array();

	$tdatatransito1[".listAjax"] = true;

	$tdatatransito1[".audit"] = false;

	$tdatatransito1[".locking"] = false;



$tdatatransito1[".list"] = true;



$tdatatransito1[".reorderRecordsByHeader"] = true;
$tdatatransito1[".createSortByDropdown"] = true;
$tdatatransito1[".strSortControlSettingsJSON"] = "";




$tdatatransito1[".import"] = true;

$tdatatransito1[".exportTo"] = true;

$tdatatransito1[".printFriendly"] = true;


$tdatatransito1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatatransito1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatatransito1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatatransito1[".searchSaving"] = false;
//

$tdatatransito1[".showSearchPanel"] = true;
		$tdatatransito1[".flexibleSearch"] = true;

$tdatatransito1[".isUseAjaxSuggest"] = true;

$tdatatransito1[".rowHighlite"] = true;





$tdatatransito1[".ajaxCodeSnippetAdded"] = false;

$tdatatransito1[".buttonsAdded"] = false;

$tdatatransito1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatransito1[".isUseTimeForSearch"] = false;





$tdatatransito1[".allSearchFields"] = array();
$tdatatransito1[".filterFields"] = array();
$tdatatransito1[".requiredSearchFields"] = array();

$tdatatransito1[".allSearchFields"][] = "eid";
	$tdatatransito1[".allSearchFields"][] = "pid";
	$tdatatransito1[".allSearchFields"][] = "unidad";
	$tdatatransito1[".allSearchFields"][] = "sexo";
	$tdatatransito1[".allSearchFields"][] = "edad";
	$tdatatransito1[".allSearchFields"][] = "resu";
	$tdatatransito1[".allSearchFields"][] = "calidad";
	$tdatatransito1[".allSearchFields"][] = "fecacc";
	$tdatatransito1[".allSearchFields"][] = "horacc";
	$tdatatransito1[".allSearchFields"][] = "rangohorario";
	$tdatatransito1[".allSearchFields"][] = "tipacc";
	$tdatatransito1[".allSearchFields"][] = "cauacc";
	$tdatatransito1[".allSearchFields"][] = "diracc";
	$tdatatransito1[".allSearchFields"][] = "munacc";
	$tdatatransito1[".allSearchFields"][] = "clares";
	$tdatatransito1[".allSearchFields"][] = "rutres";
	$tdatatransito1[".allSearchFields"][] = "repdet";
	$tdatatransito1[".allSearchFields"][] = "departamento";
	$tdatatransito1[".allSearchFields"][] = "dia";
	$tdatatransito1[".allSearchFields"][] = "sectorppd";
	$tdatatransito1[".allSearchFields"][] = "rangoetario";
	$tdatatransito1[".allSearchFields"][] = "causa_analisis";
	$tdatatransito1[".allSearchFields"][] = "tipo_analisis";
	$tdatatransito1[".allSearchFields"][] = "mes_analisis";
	

$tdatatransito1[".googleLikeFields"] = array();
$tdatatransito1[".googleLikeFields"][] = "eid";
$tdatatransito1[".googleLikeFields"][] = "pid";
$tdatatransito1[".googleLikeFields"][] = "unidad";
$tdatatransito1[".googleLikeFields"][] = "sexo";
$tdatatransito1[".googleLikeFields"][] = "edad";
$tdatatransito1[".googleLikeFields"][] = "resu";
$tdatatransito1[".googleLikeFields"][] = "calidad";
$tdatatransito1[".googleLikeFields"][] = "fecacc";
$tdatatransito1[".googleLikeFields"][] = "horacc";
$tdatatransito1[".googleLikeFields"][] = "rangohorario";
$tdatatransito1[".googleLikeFields"][] = "tipacc";
$tdatatransito1[".googleLikeFields"][] = "cauacc";
$tdatatransito1[".googleLikeFields"][] = "diracc";
$tdatatransito1[".googleLikeFields"][] = "munacc";
$tdatatransito1[".googleLikeFields"][] = "clares";
$tdatatransito1[".googleLikeFields"][] = "rutres";
$tdatatransito1[".googleLikeFields"][] = "repdet";
$tdatatransito1[".googleLikeFields"][] = "departamento";
$tdatatransito1[".googleLikeFields"][] = "dia";
$tdatatransito1[".googleLikeFields"][] = "sectorppd";
$tdatatransito1[".googleLikeFields"][] = "rangoetario";
$tdatatransito1[".googleLikeFields"][] = "causa_analisis";
$tdatatransito1[".googleLikeFields"][] = "tipo_analisis";
$tdatatransito1[".googleLikeFields"][] = "mes_analisis";


$tdatatransito1[".advSearchFields"] = array();
$tdatatransito1[".advSearchFields"][] = "eid";
$tdatatransito1[".advSearchFields"][] = "pid";
$tdatatransito1[".advSearchFields"][] = "unidad";
$tdatatransito1[".advSearchFields"][] = "sexo";
$tdatatransito1[".advSearchFields"][] = "edad";
$tdatatransito1[".advSearchFields"][] = "resu";
$tdatatransito1[".advSearchFields"][] = "calidad";
$tdatatransito1[".advSearchFields"][] = "fecacc";
$tdatatransito1[".advSearchFields"][] = "horacc";
$tdatatransito1[".advSearchFields"][] = "rangohorario";
$tdatatransito1[".advSearchFields"][] = "tipacc";
$tdatatransito1[".advSearchFields"][] = "cauacc";
$tdatatransito1[".advSearchFields"][] = "diracc";
$tdatatransito1[".advSearchFields"][] = "munacc";
$tdatatransito1[".advSearchFields"][] = "clares";
$tdatatransito1[".advSearchFields"][] = "rutres";
$tdatatransito1[".advSearchFields"][] = "repdet";
$tdatatransito1[".advSearchFields"][] = "departamento";
$tdatatransito1[".advSearchFields"][] = "dia";
$tdatatransito1[".advSearchFields"][] = "sectorppd";
$tdatatransito1[".advSearchFields"][] = "rangoetario";
$tdatatransito1[".advSearchFields"][] = "causa_analisis";
$tdatatransito1[".advSearchFields"][] = "tipo_analisis";
$tdatatransito1[".advSearchFields"][] = "mes_analisis";

$tdatatransito1[".tableType"] = "list";

$tdatatransito1[".printerPageOrientation"] = 0;
$tdatatransito1[".nPrinterPageScale"] = 100;

$tdatatransito1[".nPrinterSplitRecords"] = 40;

$tdatatransito1[".nPrinterPDFSplitRecords"] = 40;



$tdatatransito1[".geocodingEnabled"] = false;





$tdatatransito1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatatransito1[".pageSize"] = 20;

$tdatatransito1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatransito1[".strOrderBy"] = $tstrOrderBy;

$tdatatransito1[".orderindexes"] = array();

$tdatatransito1[".sqlHead"] = "SELECT eid,  	pid,  	unidad,  	sexo,  	edad,  	resu,  	calidad,  	fecacc,  	horacc,  	rangohorario,  	tipacc,  	cauacc,  	diracc,  	munacc,  	clares,  	rutres,  	repdet,  	departamento,  	dia,  	sectorppd,  	rangoetario,  	causa_analisis,  	tipo_analisis,  	mes_analisis";
$tdatatransito1[".sqlFrom"] = "FROM transito";
$tdatatransito1[".sqlWhereExpr"] = "";
$tdatatransito1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatransito1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatransito1[".arrGroupsPerPage"] = $arrGPP;

$tdatatransito1[".highlightSearchResults"] = true;

$tableKeystransito1 = array();
$tdatatransito1[".Keys"] = $tableKeystransito1;

$tdatatransito1[".listFields"] = array();
$tdatatransito1[".listFields"][] = "eid";
$tdatatransito1[".listFields"][] = "pid";
$tdatatransito1[".listFields"][] = "unidad";
$tdatatransito1[".listFields"][] = "sexo";
$tdatatransito1[".listFields"][] = "edad";
$tdatatransito1[".listFields"][] = "resu";
$tdatatransito1[".listFields"][] = "calidad";
$tdatatransito1[".listFields"][] = "fecacc";
$tdatatransito1[".listFields"][] = "horacc";
$tdatatransito1[".listFields"][] = "rangohorario";
$tdatatransito1[".listFields"][] = "tipacc";
$tdatatransito1[".listFields"][] = "cauacc";
$tdatatransito1[".listFields"][] = "diracc";
$tdatatransito1[".listFields"][] = "munacc";
$tdatatransito1[".listFields"][] = "clares";
$tdatatransito1[".listFields"][] = "rutres";
$tdatatransito1[".listFields"][] = "repdet";
$tdatatransito1[".listFields"][] = "departamento";
$tdatatransito1[".listFields"][] = "dia";
$tdatatransito1[".listFields"][] = "sectorppd";
$tdatatransito1[".listFields"][] = "rangoetario";
$tdatatransito1[".listFields"][] = "causa_analisis";
$tdatatransito1[".listFields"][] = "tipo_analisis";
$tdatatransito1[".listFields"][] = "mes_analisis";

$tdatatransito1[".hideMobileList"] = array();


$tdatatransito1[".viewFields"] = array();
$tdatatransito1[".viewFields"][] = "eid";
$tdatatransito1[".viewFields"][] = "pid";
$tdatatransito1[".viewFields"][] = "unidad";
$tdatatransito1[".viewFields"][] = "sexo";
$tdatatransito1[".viewFields"][] = "edad";
$tdatatransito1[".viewFields"][] = "resu";
$tdatatransito1[".viewFields"][] = "calidad";
$tdatatransito1[".viewFields"][] = "fecacc";
$tdatatransito1[".viewFields"][] = "horacc";
$tdatatransito1[".viewFields"][] = "rangohorario";
$tdatatransito1[".viewFields"][] = "tipacc";
$tdatatransito1[".viewFields"][] = "cauacc";
$tdatatransito1[".viewFields"][] = "diracc";
$tdatatransito1[".viewFields"][] = "munacc";
$tdatatransito1[".viewFields"][] = "clares";
$tdatatransito1[".viewFields"][] = "rutres";
$tdatatransito1[".viewFields"][] = "repdet";
$tdatatransito1[".viewFields"][] = "departamento";
$tdatatransito1[".viewFields"][] = "dia";
$tdatatransito1[".viewFields"][] = "sectorppd";
$tdatatransito1[".viewFields"][] = "rangoetario";
$tdatatransito1[".viewFields"][] = "causa_analisis";
$tdatatransito1[".viewFields"][] = "tipo_analisis";
$tdatatransito1[".viewFields"][] = "mes_analisis";

$tdatatransito1[".addFields"] = array();
$tdatatransito1[".addFields"][] = "eid";
$tdatatransito1[".addFields"][] = "pid";
$tdatatransito1[".addFields"][] = "unidad";
$tdatatransito1[".addFields"][] = "sexo";
$tdatatransito1[".addFields"][] = "edad";
$tdatatransito1[".addFields"][] = "resu";
$tdatatransito1[".addFields"][] = "calidad";
$tdatatransito1[".addFields"][] = "fecacc";
$tdatatransito1[".addFields"][] = "horacc";
$tdatatransito1[".addFields"][] = "rangohorario";
$tdatatransito1[".addFields"][] = "tipacc";
$tdatatransito1[".addFields"][] = "cauacc";
$tdatatransito1[".addFields"][] = "diracc";
$tdatatransito1[".addFields"][] = "munacc";
$tdatatransito1[".addFields"][] = "clares";
$tdatatransito1[".addFields"][] = "rutres";
$tdatatransito1[".addFields"][] = "repdet";
$tdatatransito1[".addFields"][] = "departamento";
$tdatatransito1[".addFields"][] = "dia";
$tdatatransito1[".addFields"][] = "sectorppd";
$tdatatransito1[".addFields"][] = "rangoetario";
$tdatatransito1[".addFields"][] = "causa_analisis";
$tdatatransito1[".addFields"][] = "tipo_analisis";
$tdatatransito1[".addFields"][] = "mes_analisis";

$tdatatransito1[".masterListFields"] = array();
$tdatatransito1[".masterListFields"][] = "eid";
$tdatatransito1[".masterListFields"][] = "pid";
$tdatatransito1[".masterListFields"][] = "unidad";
$tdatatransito1[".masterListFields"][] = "sexo";
$tdatatransito1[".masterListFields"][] = "edad";
$tdatatransito1[".masterListFields"][] = "resu";
$tdatatransito1[".masterListFields"][] = "calidad";
$tdatatransito1[".masterListFields"][] = "fecacc";
$tdatatransito1[".masterListFields"][] = "horacc";
$tdatatransito1[".masterListFields"][] = "rangohorario";
$tdatatransito1[".masterListFields"][] = "tipacc";
$tdatatransito1[".masterListFields"][] = "cauacc";
$tdatatransito1[".masterListFields"][] = "diracc";
$tdatatransito1[".masterListFields"][] = "munacc";
$tdatatransito1[".masterListFields"][] = "clares";
$tdatatransito1[".masterListFields"][] = "rutres";
$tdatatransito1[".masterListFields"][] = "repdet";
$tdatatransito1[".masterListFields"][] = "departamento";
$tdatatransito1[".masterListFields"][] = "dia";
$tdatatransito1[".masterListFields"][] = "sectorppd";
$tdatatransito1[".masterListFields"][] = "rangoetario";
$tdatatransito1[".masterListFields"][] = "causa_analisis";
$tdatatransito1[".masterListFields"][] = "tipo_analisis";
$tdatatransito1[".masterListFields"][] = "mes_analisis";

$tdatatransito1[".inlineAddFields"] = array();
$tdatatransito1[".inlineAddFields"][] = "eid";
$tdatatransito1[".inlineAddFields"][] = "pid";
$tdatatransito1[".inlineAddFields"][] = "unidad";
$tdatatransito1[".inlineAddFields"][] = "sexo";
$tdatatransito1[".inlineAddFields"][] = "edad";
$tdatatransito1[".inlineAddFields"][] = "resu";
$tdatatransito1[".inlineAddFields"][] = "calidad";
$tdatatransito1[".inlineAddFields"][] = "fecacc";
$tdatatransito1[".inlineAddFields"][] = "horacc";
$tdatatransito1[".inlineAddFields"][] = "rangohorario";
$tdatatransito1[".inlineAddFields"][] = "tipacc";
$tdatatransito1[".inlineAddFields"][] = "cauacc";
$tdatatransito1[".inlineAddFields"][] = "diracc";
$tdatatransito1[".inlineAddFields"][] = "munacc";
$tdatatransito1[".inlineAddFields"][] = "clares";
$tdatatransito1[".inlineAddFields"][] = "rutres";
$tdatatransito1[".inlineAddFields"][] = "repdet";
$tdatatransito1[".inlineAddFields"][] = "departamento";
$tdatatransito1[".inlineAddFields"][] = "dia";
$tdatatransito1[".inlineAddFields"][] = "sectorppd";
$tdatatransito1[".inlineAddFields"][] = "rangoetario";
$tdatatransito1[".inlineAddFields"][] = "causa_analisis";
$tdatatransito1[".inlineAddFields"][] = "tipo_analisis";
$tdatatransito1[".inlineAddFields"][] = "mes_analisis";

$tdatatransito1[".editFields"] = array();
$tdatatransito1[".editFields"][] = "eid";
$tdatatransito1[".editFields"][] = "pid";
$tdatatransito1[".editFields"][] = "unidad";
$tdatatransito1[".editFields"][] = "sexo";
$tdatatransito1[".editFields"][] = "edad";
$tdatatransito1[".editFields"][] = "resu";
$tdatatransito1[".editFields"][] = "calidad";
$tdatatransito1[".editFields"][] = "fecacc";
$tdatatransito1[".editFields"][] = "horacc";
$tdatatransito1[".editFields"][] = "rangohorario";
$tdatatransito1[".editFields"][] = "tipacc";
$tdatatransito1[".editFields"][] = "cauacc";
$tdatatransito1[".editFields"][] = "diracc";
$tdatatransito1[".editFields"][] = "munacc";
$tdatatransito1[".editFields"][] = "clares";
$tdatatransito1[".editFields"][] = "rutres";
$tdatatransito1[".editFields"][] = "repdet";
$tdatatransito1[".editFields"][] = "departamento";
$tdatatransito1[".editFields"][] = "dia";
$tdatatransito1[".editFields"][] = "sectorppd";
$tdatatransito1[".editFields"][] = "rangoetario";
$tdatatransito1[".editFields"][] = "causa_analisis";
$tdatatransito1[".editFields"][] = "tipo_analisis";
$tdatatransito1[".editFields"][] = "mes_analisis";

$tdatatransito1[".inlineEditFields"] = array();
$tdatatransito1[".inlineEditFields"][] = "eid";
$tdatatransito1[".inlineEditFields"][] = "pid";
$tdatatransito1[".inlineEditFields"][] = "unidad";
$tdatatransito1[".inlineEditFields"][] = "sexo";
$tdatatransito1[".inlineEditFields"][] = "edad";
$tdatatransito1[".inlineEditFields"][] = "resu";
$tdatatransito1[".inlineEditFields"][] = "calidad";
$tdatatransito1[".inlineEditFields"][] = "fecacc";
$tdatatransito1[".inlineEditFields"][] = "horacc";
$tdatatransito1[".inlineEditFields"][] = "rangohorario";
$tdatatransito1[".inlineEditFields"][] = "tipacc";
$tdatatransito1[".inlineEditFields"][] = "cauacc";
$tdatatransito1[".inlineEditFields"][] = "diracc";
$tdatatransito1[".inlineEditFields"][] = "munacc";
$tdatatransito1[".inlineEditFields"][] = "clares";
$tdatatransito1[".inlineEditFields"][] = "rutres";
$tdatatransito1[".inlineEditFields"][] = "repdet";
$tdatatransito1[".inlineEditFields"][] = "departamento";
$tdatatransito1[".inlineEditFields"][] = "dia";
$tdatatransito1[".inlineEditFields"][] = "sectorppd";
$tdatatransito1[".inlineEditFields"][] = "rangoetario";
$tdatatransito1[".inlineEditFields"][] = "causa_analisis";
$tdatatransito1[".inlineEditFields"][] = "tipo_analisis";
$tdatatransito1[".inlineEditFields"][] = "mes_analisis";

$tdatatransito1[".updateSelectedFields"] = array();
$tdatatransito1[".updateSelectedFields"][] = "eid";
$tdatatransito1[".updateSelectedFields"][] = "pid";
$tdatatransito1[".updateSelectedFields"][] = "unidad";
$tdatatransito1[".updateSelectedFields"][] = "sexo";
$tdatatransito1[".updateSelectedFields"][] = "edad";
$tdatatransito1[".updateSelectedFields"][] = "resu";
$tdatatransito1[".updateSelectedFields"][] = "calidad";
$tdatatransito1[".updateSelectedFields"][] = "fecacc";
$tdatatransito1[".updateSelectedFields"][] = "horacc";
$tdatatransito1[".updateSelectedFields"][] = "rangohorario";
$tdatatransito1[".updateSelectedFields"][] = "tipacc";
$tdatatransito1[".updateSelectedFields"][] = "cauacc";
$tdatatransito1[".updateSelectedFields"][] = "diracc";
$tdatatransito1[".updateSelectedFields"][] = "munacc";
$tdatatransito1[".updateSelectedFields"][] = "clares";
$tdatatransito1[".updateSelectedFields"][] = "rutres";
$tdatatransito1[".updateSelectedFields"][] = "repdet";
$tdatatransito1[".updateSelectedFields"][] = "departamento";
$tdatatransito1[".updateSelectedFields"][] = "dia";
$tdatatransito1[".updateSelectedFields"][] = "sectorppd";
$tdatatransito1[".updateSelectedFields"][] = "rangoetario";
$tdatatransito1[".updateSelectedFields"][] = "causa_analisis";
$tdatatransito1[".updateSelectedFields"][] = "tipo_analisis";
$tdatatransito1[".updateSelectedFields"][] = "mes_analisis";


$tdatatransito1[".exportFields"] = array();
$tdatatransito1[".exportFields"][] = "eid";
$tdatatransito1[".exportFields"][] = "pid";
$tdatatransito1[".exportFields"][] = "unidad";
$tdatatransito1[".exportFields"][] = "sexo";
$tdatatransito1[".exportFields"][] = "edad";
$tdatatransito1[".exportFields"][] = "resu";
$tdatatransito1[".exportFields"][] = "calidad";
$tdatatransito1[".exportFields"][] = "fecacc";
$tdatatransito1[".exportFields"][] = "horacc";
$tdatatransito1[".exportFields"][] = "rangohorario";
$tdatatransito1[".exportFields"][] = "tipacc";
$tdatatransito1[".exportFields"][] = "cauacc";
$tdatatransito1[".exportFields"][] = "diracc";
$tdatatransito1[".exportFields"][] = "munacc";
$tdatatransito1[".exportFields"][] = "clares";
$tdatatransito1[".exportFields"][] = "rutres";
$tdatatransito1[".exportFields"][] = "repdet";
$tdatatransito1[".exportFields"][] = "departamento";
$tdatatransito1[".exportFields"][] = "dia";
$tdatatransito1[".exportFields"][] = "sectorppd";
$tdatatransito1[".exportFields"][] = "rangoetario";
$tdatatransito1[".exportFields"][] = "causa_analisis";
$tdatatransito1[".exportFields"][] = "tipo_analisis";
$tdatatransito1[".exportFields"][] = "mes_analisis";

$tdatatransito1[".importFields"] = array();
$tdatatransito1[".importFields"][] = "eid";
$tdatatransito1[".importFields"][] = "pid";
$tdatatransito1[".importFields"][] = "unidad";
$tdatatransito1[".importFields"][] = "sexo";
$tdatatransito1[".importFields"][] = "edad";
$tdatatransito1[".importFields"][] = "resu";
$tdatatransito1[".importFields"][] = "calidad";
$tdatatransito1[".importFields"][] = "fecacc";
$tdatatransito1[".importFields"][] = "horacc";
$tdatatransito1[".importFields"][] = "rangohorario";
$tdatatransito1[".importFields"][] = "tipacc";
$tdatatransito1[".importFields"][] = "cauacc";
$tdatatransito1[".importFields"][] = "diracc";
$tdatatransito1[".importFields"][] = "munacc";
$tdatatransito1[".importFields"][] = "clares";
$tdatatransito1[".importFields"][] = "rutres";
$tdatatransito1[".importFields"][] = "repdet";
$tdatatransito1[".importFields"][] = "departamento";
$tdatatransito1[".importFields"][] = "dia";
$tdatatransito1[".importFields"][] = "sectorppd";
$tdatatransito1[".importFields"][] = "rangoetario";
$tdatatransito1[".importFields"][] = "causa_analisis";
$tdatatransito1[".importFields"][] = "tipo_analisis";
$tdatatransito1[".importFields"][] = "mes_analisis";

$tdatatransito1[".printFields"] = array();
$tdatatransito1[".printFields"][] = "eid";
$tdatatransito1[".printFields"][] = "pid";
$tdatatransito1[".printFields"][] = "unidad";
$tdatatransito1[".printFields"][] = "sexo";
$tdatatransito1[".printFields"][] = "edad";
$tdatatransito1[".printFields"][] = "resu";
$tdatatransito1[".printFields"][] = "calidad";
$tdatatransito1[".printFields"][] = "fecacc";
$tdatatransito1[".printFields"][] = "horacc";
$tdatatransito1[".printFields"][] = "rangohorario";
$tdatatransito1[".printFields"][] = "tipacc";
$tdatatransito1[".printFields"][] = "cauacc";
$tdatatransito1[".printFields"][] = "diracc";
$tdatatransito1[".printFields"][] = "munacc";
$tdatatransito1[".printFields"][] = "clares";
$tdatatransito1[".printFields"][] = "rutres";
$tdatatransito1[".printFields"][] = "repdet";
$tdatatransito1[".printFields"][] = "departamento";
$tdatatransito1[".printFields"][] = "dia";
$tdatatransito1[".printFields"][] = "sectorppd";
$tdatatransito1[".printFields"][] = "rangoetario";
$tdatatransito1[".printFields"][] = "causa_analisis";
$tdatatransito1[".printFields"][] = "tipo_analisis";
$tdatatransito1[".printFields"][] = "mes_analisis";

//	eid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "eid";
	$fdata["GoodName"] = "eid";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","eid");
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

		$fdata["strField"] = "eid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eid";

	
	
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




	$tdatatransito1["eid"] = $fdata;
//	pid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pid";
	$fdata["GoodName"] = "pid";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","pid");
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

		$fdata["strField"] = "pid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pid";

	
	
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




	$tdatatransito1["pid"] = $fdata;
//	unidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "unidad";
	$fdata["GoodName"] = "unidad";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","unidad");
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

		$fdata["strField"] = "unidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unidad";

	
	
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




	$tdatatransito1["unidad"] = $fdata;
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","sexo");
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

		$fdata["strField"] = "sexo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sexo";

	
	
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




	$tdatatransito1["sexo"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","edad");
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

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
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




	$tdatatransito1["edad"] = $fdata;
//	resu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "resu";
	$fdata["GoodName"] = "resu";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","resu");
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

		$fdata["strField"] = "resu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resu";

	
	
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




	$tdatatransito1["resu"] = $fdata;
//	calidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "calidad";
	$fdata["GoodName"] = "calidad";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","calidad");
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

		$fdata["strField"] = "calidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calidad";

	
	
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




	$tdatatransito1["calidad"] = $fdata;
//	fecacc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fecacc";
	$fdata["GoodName"] = "fecacc";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","fecacc");
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

		$fdata["strField"] = "fecacc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecacc";

	
	
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




	$tdatatransito1["fecacc"] = $fdata;
//	horacc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "horacc";
	$fdata["GoodName"] = "horacc";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","horacc");
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

		$fdata["strField"] = "horacc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "horacc";

	
	
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




	$tdatatransito1["horacc"] = $fdata;
//	rangohorario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rangohorario";
	$fdata["GoodName"] = "rangohorario";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","rangohorario");
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

		$fdata["strField"] = "rangohorario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rangohorario";

	
	
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




	$tdatatransito1["rangohorario"] = $fdata;
//	tipacc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "tipacc";
	$fdata["GoodName"] = "tipacc";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","tipacc");
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

		$fdata["strField"] = "tipacc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipacc";

	
	
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




	$tdatatransito1["tipacc"] = $fdata;
//	cauacc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cauacc";
	$fdata["GoodName"] = "cauacc";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","cauacc");
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

		$fdata["strField"] = "cauacc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cauacc";

	
	
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




	$tdatatransito1["cauacc"] = $fdata;
//	diracc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "diracc";
	$fdata["GoodName"] = "diracc";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","diracc");
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

		$fdata["strField"] = "diracc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "diracc";

	
	
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




	$tdatatransito1["diracc"] = $fdata;
//	munacc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "munacc";
	$fdata["GoodName"] = "munacc";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","munacc");
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

		$fdata["strField"] = "munacc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "munacc";

	
	
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




	$tdatatransito1["munacc"] = $fdata;
//	clares
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "clares";
	$fdata["GoodName"] = "clares";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","clares");
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

		$fdata["strField"] = "clares";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clares";

	
	
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




	$tdatatransito1["clares"] = $fdata;
//	rutres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "rutres";
	$fdata["GoodName"] = "rutres";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","rutres");
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

		$fdata["strField"] = "rutres";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rutres";

	
	
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




	$tdatatransito1["rutres"] = $fdata;
//	repdet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "repdet";
	$fdata["GoodName"] = "repdet";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","repdet");
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

		$fdata["strField"] = "repdet";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "repdet";

	
	
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




	$tdatatransito1["repdet"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","departamento");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatransito1["departamento"] = $fdata;
//	dia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "dia";
	$fdata["GoodName"] = "dia";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","dia");
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

		$fdata["strField"] = "dia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dia";

	
	
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




	$tdatatransito1["dia"] = $fdata;
//	sectorppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "sectorppd";
	$fdata["GoodName"] = "sectorppd";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","sectorppd");
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

		$fdata["strField"] = "sectorppd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sectorppd";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdatatransito1["sectorppd"] = $fdata;
//	rangoetario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "rangoetario";
	$fdata["GoodName"] = "rangoetario";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","rangoetario");
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdatatransito1["rangoetario"] = $fdata;
//	causa_analisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "causa_analisis";
	$fdata["GoodName"] = "causa_analisis";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","causa_analisis");
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

		$fdata["strField"] = "causa_analisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "causa_analisis";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdatatransito1["causa_analisis"] = $fdata;
//	tipo_analisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "tipo_analisis";
	$fdata["GoodName"] = "tipo_analisis";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","tipo_analisis");
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

		$fdata["strField"] = "tipo_analisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_analisis";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdatatransito1["tipo_analisis"] = $fdata;
//	mes_analisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "mes_analisis";
	$fdata["GoodName"] = "mes_analisis";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito1","mes_analisis");
	$fdata["FieldType"] = 3;

	
	
	
			
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

		$fdata["strField"] = "mes_analisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mes_analisis";

	
	
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




	$tdatatransito1["mes_analisis"] = $fdata;


$tables_data["transito1"]=&$tdatatransito1;
$field_labels["transito1"] = &$fieldLabelstransito1;
$fieldToolTips["transito1"] = &$fieldToolTipstransito1;
$placeHolders["transito1"] = &$placeHolderstransito1;
$page_titles["transito1"] = &$pageTitlestransito1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["transito1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["transito1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_transito1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eid,  	pid,  	unidad,  	sexo,  	edad,  	resu,  	calidad,  	fecacc,  	horacc,  	rangohorario,  	tipacc,  	cauacc,  	diracc,  	munacc,  	clares,  	rutres,  	repdet,  	departamento,  	dia,  	sectorppd,  	rangoetario,  	causa_analisis,  	tipo_analisis,  	mes_analisis";
$proto0["m_strFrom"] = "FROM transito";
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
	"m_strName" => "eid",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto6["m_sql"] = "eid";
$proto6["m_srcTableName"] = "transito1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "pid",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto8["m_sql"] = "pid";
$proto8["m_srcTableName"] = "transito1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "unidad",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto10["m_sql"] = "unidad";
$proto10["m_srcTableName"] = "transito1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto12["m_sql"] = "sexo";
$proto12["m_srcTableName"] = "transito1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "edad",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto14["m_sql"] = "edad";
$proto14["m_srcTableName"] = "transito1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "resu",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto16["m_sql"] = "resu";
$proto16["m_srcTableName"] = "transito1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "calidad",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto18["m_sql"] = "calidad";
$proto18["m_srcTableName"] = "transito1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fecacc",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto20["m_sql"] = "fecacc";
$proto20["m_srcTableName"] = "transito1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "horacc",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto22["m_sql"] = "horacc";
$proto22["m_srcTableName"] = "transito1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "rangohorario",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto24["m_sql"] = "rangohorario";
$proto24["m_srcTableName"] = "transito1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "tipacc",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto26["m_sql"] = "tipacc";
$proto26["m_srcTableName"] = "transito1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cauacc",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto28["m_sql"] = "cauacc";
$proto28["m_srcTableName"] = "transito1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "diracc",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto30["m_sql"] = "diracc";
$proto30["m_srcTableName"] = "transito1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "munacc",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto32["m_sql"] = "munacc";
$proto32["m_srcTableName"] = "transito1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "clares",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto34["m_sql"] = "clares";
$proto34["m_srcTableName"] = "transito1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "rutres",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto36["m_sql"] = "rutres";
$proto36["m_srcTableName"] = "transito1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "repdet",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto38["m_sql"] = "repdet";
$proto38["m_srcTableName"] = "transito1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto40["m_sql"] = "departamento";
$proto40["m_srcTableName"] = "transito1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "dia",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto42["m_sql"] = "dia";
$proto42["m_srcTableName"] = "transito1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "sectorppd",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto44["m_sql"] = "sectorppd";
$proto44["m_srcTableName"] = "transito1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "rangoetario",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto46["m_sql"] = "rangoetario";
$proto46["m_srcTableName"] = "transito1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "causa_analisis",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto48["m_sql"] = "causa_analisis";
$proto48["m_srcTableName"] = "transito1";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_analisis",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto50["m_sql"] = "tipo_analisis";
$proto50["m_srcTableName"] = "transito1";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "mes_analisis",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito1"
));

$proto52["m_sql"] = "mes_analisis";
$proto52["m_srcTableName"] = "transito1";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "transito";
$proto55["m_srcTableName"] = "transito1";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "eid";
$proto55["m_columns"][] = "pid";
$proto55["m_columns"][] = "unidad";
$proto55["m_columns"][] = "sexo";
$proto55["m_columns"][] = "edad";
$proto55["m_columns"][] = "resu";
$proto55["m_columns"][] = "calidad";
$proto55["m_columns"][] = "fecacc";
$proto55["m_columns"][] = "horacc";
$proto55["m_columns"][] = "rangohorario";
$proto55["m_columns"][] = "tipacc";
$proto55["m_columns"][] = "cauacc";
$proto55["m_columns"][] = "diracc";
$proto55["m_columns"][] = "munacc";
$proto55["m_columns"][] = "clares";
$proto55["m_columns"][] = "rutres";
$proto55["m_columns"][] = "repdet";
$proto55["m_columns"][] = "departamento";
$proto55["m_columns"][] = "dia";
$proto55["m_columns"][] = "sectorppd";
$proto55["m_columns"][] = "rangoetario";
$proto55["m_columns"][] = "causa_analisis";
$proto55["m_columns"][] = "tipo_analisis";
$proto55["m_columns"][] = "mes_analisis";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "transito";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "transito1";
$proto56=array();
$proto56["m_sql"] = "";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="transito1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_transito1 = createSqlQuery_transito1();


	
		;

																								

$tdatatransito1[".sqlquery"] = $queryData_transito1;

$tableEvents["transito1"] = new eventsBase;
$tdatatransito1[".hasEvents"] = false;

?>