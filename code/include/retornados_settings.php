<?php
require_once(getabspath("classes/cipherer.php"));




$tdataretornados = array();
	$tdataretornados[".truncateText"] = true;
	$tdataretornados[".NumberOfChars"] = 80;
	$tdataretornados[".ShortName"] = "retornados";
	$tdataretornados[".OwnerID"] = "";
	$tdataretornados[".OriginalTable"] = "retornados";

//	field labels
$fieldLabelsretornados = array();
$fieldToolTipsretornados = array();
$pageTitlesretornados = array();
$placeHoldersretornados = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsretornados["Spanish"] = array();
	$fieldToolTipsretornados["Spanish"] = array();
	$placeHoldersretornados["Spanish"] = array();
	$pageTitlesretornados["Spanish"] = array();
	$fieldLabelsretornados["Spanish"]["a_o"] = "Año";
	$fieldToolTipsretornados["Spanish"]["a_o"] = "";
	$placeHoldersretornados["Spanish"]["a_o"] = "";
	$fieldLabelsretornados["Spanish"]["mes"] = "Mes";
	$fieldToolTipsretornados["Spanish"]["mes"] = "";
	$placeHoldersretornados["Spanish"]["mes"] = "";
	$fieldLabelsretornados["Spanish"]["fechaentrevista"] = "Fechaentrevista";
	$fieldToolTipsretornados["Spanish"]["fechaentrevista"] = "";
	$placeHoldersretornados["Spanish"]["fechaentrevista"] = "";
	$fieldLabelsretornados["Spanish"]["tipoentrevista"] = "Tipoentrevista";
	$fieldToolTipsretornados["Spanish"]["tipoentrevista"] = "";
	$placeHoldersretornados["Spanish"]["tipoentrevista"] = "";
	$fieldLabelsretornados["Spanish"]["ficha"] = "Ficha";
	$fieldToolTipsretornados["Spanish"]["ficha"] = "";
	$placeHoldersretornados["Spanish"]["ficha"] = "";
	$fieldLabelsretornados["Spanish"]["numalien"] = "Numalien";
	$fieldToolTipsretornados["Spanish"]["numalien"] = "";
	$placeHoldersretornados["Spanish"]["numalien"] = "";
	$fieldLabelsretornados["Spanish"]["fechanacimiento"] = "Fechanacimiento";
	$fieldToolTipsretornados["Spanish"]["fechanacimiento"] = "";
	$placeHoldersretornados["Spanish"]["fechanacimiento"] = "";
	$fieldLabelsretornados["Spanish"]["documentoficha"] = "Documentoficha";
	$fieldToolTipsretornados["Spanish"]["documentoficha"] = "";
	$placeHoldersretornados["Spanish"]["documentoficha"] = "";
	$fieldLabelsretornados["Spanish"]["numerodocumento"] = "Numerodocumento";
	$fieldToolTipsretornados["Spanish"]["numerodocumento"] = "";
	$placeHoldersretornados["Spanish"]["numerodocumento"] = "";
	$fieldLabelsretornados["Spanish"]["nombredocumento"] = "Nombredocumento";
	$fieldToolTipsretornados["Spanish"]["nombredocumento"] = "";
	$placeHoldersretornados["Spanish"]["nombredocumento"] = "";
	$fieldLabelsretornados["Spanish"]["consulado"] = "Consulado";
	$fieldToolTipsretornados["Spanish"]["consulado"] = "";
	$placeHoldersretornados["Spanish"]["consulado"] = "";
	$fieldLabelsretornados["Spanish"]["consulado_analisis"] = "Consulado Analisis";
	$fieldToolTipsretornados["Spanish"]["consulado_analisis"] = "";
	$placeHoldersretornados["Spanish"]["consulado_analisis"] = "";
	$fieldLabelsretornados["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsretornados["Spanish"]["departamento"] = "";
	$placeHoldersretornados["Spanish"]["departamento"] = "";
	$fieldLabelsretornados["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsretornados["Spanish"]["municipio"] = "";
	$placeHoldersretornados["Spanish"]["municipio"] = "";
	$fieldLabelsretornados["Spanish"]["sexo"] = "Sexo";
	$fieldToolTipsretornados["Spanish"]["sexo"] = "";
	$placeHoldersretornados["Spanish"]["sexo"] = "";
	$fieldLabelsretornados["Spanish"]["edad"] = "Edad";
	$fieldToolTipsretornados["Spanish"]["edad"] = "";
	$placeHoldersretornados["Spanish"]["edad"] = "";
	$fieldLabelsretornados["Spanish"]["rango_etario"] = "Rango Etario";
	$fieldToolTipsretornados["Spanish"]["rango_etario"] = "";
	$placeHoldersretornados["Spanish"]["rango_etario"] = "";
	$fieldLabelsretornados["Spanish"]["tipoedad"] = "Tipoedad";
	$fieldToolTipsretornados["Spanish"]["tipoedad"] = "";
	$placeHoldersretornados["Spanish"]["tipoedad"] = "";
	$fieldLabelsretornados["Spanish"]["paisrepatriacion"] = "Paisrepatriacion";
	$fieldToolTipsretornados["Spanish"]["paisrepatriacion"] = "";
	$placeHoldersretornados["Spanish"]["paisrepatriacion"] = "";
	$fieldLabelsretornados["Spanish"]["regionrepatriacion"] = "Regionrepatriacion";
	$fieldToolTipsretornados["Spanish"]["regionrepatriacion"] = "";
	$placeHoldersretornados["Spanish"]["regionrepatriacion"] = "";
	$fieldLabelsretornados["Spanish"]["antecedentes_penales"] = "Antecedentes Penales";
	$fieldToolTipsretornados["Spanish"]["antecedentes_penales"] = "";
	$placeHoldersretornados["Spanish"]["antecedentes_penales"] = "";
	$fieldLabelsretornados["Spanish"]["tipo_antecedentes"] = "Tipo Antecedentes";
	$fieldToolTipsretornados["Spanish"]["tipo_antecedentes"] = "";
	$placeHoldersretornados["Spanish"]["tipo_antecedentes"] = "";
	$fieldLabelsretornados["Spanish"]["antecedentes"] = "Antecedentes";
	$fieldToolTipsretornados["Spanish"]["antecedentes"] = "";
	$placeHoldersretornados["Spanish"]["antecedentes"] = "";
	$fieldLabelsretornados["Spanish"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsretornados["Spanish"]["sectorppd"] = "";
	$placeHoldersretornados["Spanish"]["sectorppd"] = "";
	$fieldLabelsretornados["Spanish"]["num_mes"] = "Num Mes";
	$fieldToolTipsretornados["Spanish"]["num_mes"] = "";
	$placeHoldersretornados["Spanish"]["num_mes"] = "";
	$fieldLabelsretornados["Spanish"]["antecedente_analisis"] = "Antecedente Analisis";
	$fieldToolTipsretornados["Spanish"]["antecedente_analisis"] = "";
	$placeHoldersretornados["Spanish"]["antecedente_analisis"] = "";
	if (count($fieldToolTipsretornados["Spanish"]))
		$tdataretornados[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsretornados["English"] = array();
	$fieldToolTipsretornados["English"] = array();
	$placeHoldersretornados["English"] = array();
	$pageTitlesretornados["English"] = array();
	$fieldLabelsretornados["English"]["a_o"] = "Año";
	$fieldToolTipsretornados["English"]["a_o"] = "";
	$placeHoldersretornados["English"]["a_o"] = "";
	$fieldLabelsretornados["English"]["mes"] = "Mes";
	$fieldToolTipsretornados["English"]["mes"] = "";
	$placeHoldersretornados["English"]["mes"] = "";
	$fieldLabelsretornados["English"]["fechaentrevista"] = "Fechaentrevista";
	$fieldToolTipsretornados["English"]["fechaentrevista"] = "";
	$placeHoldersretornados["English"]["fechaentrevista"] = "";
	$fieldLabelsretornados["English"]["tipoentrevista"] = "Tipoentrevista";
	$fieldToolTipsretornados["English"]["tipoentrevista"] = "";
	$placeHoldersretornados["English"]["tipoentrevista"] = "";
	$fieldLabelsretornados["English"]["ficha"] = "Ficha";
	$fieldToolTipsretornados["English"]["ficha"] = "";
	$placeHoldersretornados["English"]["ficha"] = "";
	$fieldLabelsretornados["English"]["numalien"] = "Numalien";
	$fieldToolTipsretornados["English"]["numalien"] = "";
	$placeHoldersretornados["English"]["numalien"] = "";
	$fieldLabelsretornados["English"]["fechanacimiento"] = "Fechanacimiento";
	$fieldToolTipsretornados["English"]["fechanacimiento"] = "";
	$placeHoldersretornados["English"]["fechanacimiento"] = "";
	$fieldLabelsretornados["English"]["documentoficha"] = "Documentoficha";
	$fieldToolTipsretornados["English"]["documentoficha"] = "";
	$placeHoldersretornados["English"]["documentoficha"] = "";
	$fieldLabelsretornados["English"]["numerodocumento"] = "Numerodocumento";
	$fieldToolTipsretornados["English"]["numerodocumento"] = "";
	$placeHoldersretornados["English"]["numerodocumento"] = "";
	$fieldLabelsretornados["English"]["nombredocumento"] = "Nombredocumento";
	$fieldToolTipsretornados["English"]["nombredocumento"] = "";
	$placeHoldersretornados["English"]["nombredocumento"] = "";
	$fieldLabelsretornados["English"]["consulado"] = "Consulado";
	$fieldToolTipsretornados["English"]["consulado"] = "";
	$placeHoldersretornados["English"]["consulado"] = "";
	$fieldLabelsretornados["English"]["consulado_analisis"] = "Consulado Analisis";
	$fieldToolTipsretornados["English"]["consulado_analisis"] = "";
	$placeHoldersretornados["English"]["consulado_analisis"] = "";
	$fieldLabelsretornados["English"]["departamento"] = "Departamento";
	$fieldToolTipsretornados["English"]["departamento"] = "";
	$placeHoldersretornados["English"]["departamento"] = "";
	$fieldLabelsretornados["English"]["municipio"] = "Municipio";
	$fieldToolTipsretornados["English"]["municipio"] = "";
	$placeHoldersretornados["English"]["municipio"] = "";
	$fieldLabelsretornados["English"]["sexo"] = "Sexo";
	$fieldToolTipsretornados["English"]["sexo"] = "";
	$placeHoldersretornados["English"]["sexo"] = "";
	$fieldLabelsretornados["English"]["edad"] = "Edad";
	$fieldToolTipsretornados["English"]["edad"] = "";
	$placeHoldersretornados["English"]["edad"] = "";
	$fieldLabelsretornados["English"]["rango_etario"] = "Rango Etario";
	$fieldToolTipsretornados["English"]["rango_etario"] = "";
	$placeHoldersretornados["English"]["rango_etario"] = "";
	$fieldLabelsretornados["English"]["tipoedad"] = "Tipoedad";
	$fieldToolTipsretornados["English"]["tipoedad"] = "";
	$placeHoldersretornados["English"]["tipoedad"] = "";
	$fieldLabelsretornados["English"]["paisrepatriacion"] = "Paisrepatriacion";
	$fieldToolTipsretornados["English"]["paisrepatriacion"] = "";
	$placeHoldersretornados["English"]["paisrepatriacion"] = "";
	$fieldLabelsretornados["English"]["regionrepatriacion"] = "Regionrepatriacion";
	$fieldToolTipsretornados["English"]["regionrepatriacion"] = "";
	$placeHoldersretornados["English"]["regionrepatriacion"] = "";
	$fieldLabelsretornados["English"]["antecedentes_penales"] = "Antecedentes Penales";
	$fieldToolTipsretornados["English"]["antecedentes_penales"] = "";
	$placeHoldersretornados["English"]["antecedentes_penales"] = "";
	$fieldLabelsretornados["English"]["tipo_antecedentes"] = "Tipo Antecedentes";
	$fieldToolTipsretornados["English"]["tipo_antecedentes"] = "";
	$placeHoldersretornados["English"]["tipo_antecedentes"] = "";
	$fieldLabelsretornados["English"]["antecedentes"] = "Antecedentes";
	$fieldToolTipsretornados["English"]["antecedentes"] = "";
	$placeHoldersretornados["English"]["antecedentes"] = "";
	$fieldLabelsretornados["English"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsretornados["English"]["sectorppd"] = "";
	$placeHoldersretornados["English"]["sectorppd"] = "";
	$fieldLabelsretornados["English"]["num_mes"] = "Num Mes";
	$fieldToolTipsretornados["English"]["num_mes"] = "";
	$placeHoldersretornados["English"]["num_mes"] = "";
	$fieldLabelsretornados["English"]["antecedente_analisis"] = "Antecedente Analisis";
	$fieldToolTipsretornados["English"]["antecedente_analisis"] = "";
	$placeHoldersretornados["English"]["antecedente_analisis"] = "";
	if (count($fieldToolTipsretornados["English"]))
		$tdataretornados[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsretornados[""] = array();
	$fieldToolTipsretornados[""] = array();
	$placeHoldersretornados[""] = array();
	$pageTitlesretornados[""] = array();
	if (count($fieldToolTipsretornados[""]))
		$tdataretornados[".isUseToolTips"] = true;
}


	$tdataretornados[".NCSearch"] = true;



$tdataretornados[".shortTableName"] = "retornados";
$tdataretornados[".nSecOptions"] = 0;
$tdataretornados[".recsPerRowPrint"] = 1;
$tdataretornados[".mainTableOwnerID"] = "";
$tdataretornados[".moveNext"] = 1;
$tdataretornados[".entityType"] = 0;

$tdataretornados[".strOriginalTableName"] = "retornados";

	



$tdataretornados[".showAddInPopup"] = false;

$tdataretornados[".showEditInPopup"] = false;

$tdataretornados[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataretornados[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataretornados[".fieldsForRegister"] = array();

	$tdataretornados[".listAjax"] = true;

	$tdataretornados[".audit"] = false;

	$tdataretornados[".locking"] = false;



$tdataretornados[".list"] = true;



$tdataretornados[".reorderRecordsByHeader"] = true;
$tdataretornados[".createSortByDropdown"] = true;
$tdataretornados[".strSortControlSettingsJSON"] = "";




$tdataretornados[".import"] = true;

$tdataretornados[".exportTo"] = true;

$tdataretornados[".printFriendly"] = true;


$tdataretornados[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataretornados[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataretornados[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataretornados[".searchSaving"] = false;
//

$tdataretornados[".showSearchPanel"] = true;
		$tdataretornados[".flexibleSearch"] = true;

$tdataretornados[".isUseAjaxSuggest"] = true;

$tdataretornados[".rowHighlite"] = true;





$tdataretornados[".ajaxCodeSnippetAdded"] = false;

$tdataretornados[".buttonsAdded"] = false;

$tdataretornados[".addPageEvents"] = false;

// use timepicker for search panel
$tdataretornados[".isUseTimeForSearch"] = false;





$tdataretornados[".allSearchFields"] = array();
$tdataretornados[".filterFields"] = array();
$tdataretornados[".requiredSearchFields"] = array();

$tdataretornados[".allSearchFields"][] = "año";
	$tdataretornados[".allSearchFields"][] = "mes";
	$tdataretornados[".allSearchFields"][] = "fechaentrevista";
	$tdataretornados[".allSearchFields"][] = "tipoentrevista";
	$tdataretornados[".allSearchFields"][] = "ficha";
	$tdataretornados[".allSearchFields"][] = "numalien";
	$tdataretornados[".allSearchFields"][] = "fechanacimiento";
	$tdataretornados[".allSearchFields"][] = "documentoficha";
	$tdataretornados[".allSearchFields"][] = "numerodocumento";
	$tdataretornados[".allSearchFields"][] = "nombredocumento";
	$tdataretornados[".allSearchFields"][] = "consulado";
	$tdataretornados[".allSearchFields"][] = "consulado_analisis";
	$tdataretornados[".allSearchFields"][] = "departamento";
	$tdataretornados[".allSearchFields"][] = "municipio";
	$tdataretornados[".allSearchFields"][] = "sexo";
	$tdataretornados[".allSearchFields"][] = "edad";
	$tdataretornados[".allSearchFields"][] = "rango_etario";
	$tdataretornados[".allSearchFields"][] = "tipoedad";
	$tdataretornados[".allSearchFields"][] = "paisrepatriacion";
	$tdataretornados[".allSearchFields"][] = "regionrepatriacion";
	$tdataretornados[".allSearchFields"][] = "antecedentes_penales";
	$tdataretornados[".allSearchFields"][] = "tipo_antecedentes";
	$tdataretornados[".allSearchFields"][] = "antecedentes";
	$tdataretornados[".allSearchFields"][] = "sectorppd";
	$tdataretornados[".allSearchFields"][] = "num_mes";
	$tdataretornados[".allSearchFields"][] = "antecedente_analisis";
	

$tdataretornados[".googleLikeFields"] = array();
$tdataretornados[".googleLikeFields"][] = "año";
$tdataretornados[".googleLikeFields"][] = "mes";
$tdataretornados[".googleLikeFields"][] = "fechaentrevista";
$tdataretornados[".googleLikeFields"][] = "tipoentrevista";
$tdataretornados[".googleLikeFields"][] = "ficha";
$tdataretornados[".googleLikeFields"][] = "numalien";
$tdataretornados[".googleLikeFields"][] = "fechanacimiento";
$tdataretornados[".googleLikeFields"][] = "documentoficha";
$tdataretornados[".googleLikeFields"][] = "numerodocumento";
$tdataretornados[".googleLikeFields"][] = "nombredocumento";
$tdataretornados[".googleLikeFields"][] = "consulado";
$tdataretornados[".googleLikeFields"][] = "consulado_analisis";
$tdataretornados[".googleLikeFields"][] = "departamento";
$tdataretornados[".googleLikeFields"][] = "municipio";
$tdataretornados[".googleLikeFields"][] = "sexo";
$tdataretornados[".googleLikeFields"][] = "edad";
$tdataretornados[".googleLikeFields"][] = "rango_etario";
$tdataretornados[".googleLikeFields"][] = "tipoedad";
$tdataretornados[".googleLikeFields"][] = "paisrepatriacion";
$tdataretornados[".googleLikeFields"][] = "regionrepatriacion";
$tdataretornados[".googleLikeFields"][] = "antecedentes_penales";
$tdataretornados[".googleLikeFields"][] = "tipo_antecedentes";
$tdataretornados[".googleLikeFields"][] = "antecedentes";
$tdataretornados[".googleLikeFields"][] = "sectorppd";
$tdataretornados[".googleLikeFields"][] = "num_mes";
$tdataretornados[".googleLikeFields"][] = "antecedente_analisis";


$tdataretornados[".advSearchFields"] = array();
$tdataretornados[".advSearchFields"][] = "año";
$tdataretornados[".advSearchFields"][] = "mes";
$tdataretornados[".advSearchFields"][] = "fechaentrevista";
$tdataretornados[".advSearchFields"][] = "tipoentrevista";
$tdataretornados[".advSearchFields"][] = "ficha";
$tdataretornados[".advSearchFields"][] = "numalien";
$tdataretornados[".advSearchFields"][] = "fechanacimiento";
$tdataretornados[".advSearchFields"][] = "documentoficha";
$tdataretornados[".advSearchFields"][] = "numerodocumento";
$tdataretornados[".advSearchFields"][] = "nombredocumento";
$tdataretornados[".advSearchFields"][] = "consulado";
$tdataretornados[".advSearchFields"][] = "consulado_analisis";
$tdataretornados[".advSearchFields"][] = "departamento";
$tdataretornados[".advSearchFields"][] = "municipio";
$tdataretornados[".advSearchFields"][] = "sexo";
$tdataretornados[".advSearchFields"][] = "edad";
$tdataretornados[".advSearchFields"][] = "rango_etario";
$tdataretornados[".advSearchFields"][] = "tipoedad";
$tdataretornados[".advSearchFields"][] = "paisrepatriacion";
$tdataretornados[".advSearchFields"][] = "regionrepatriacion";
$tdataretornados[".advSearchFields"][] = "antecedentes_penales";
$tdataretornados[".advSearchFields"][] = "tipo_antecedentes";
$tdataretornados[".advSearchFields"][] = "antecedentes";
$tdataretornados[".advSearchFields"][] = "sectorppd";
$tdataretornados[".advSearchFields"][] = "num_mes";
$tdataretornados[".advSearchFields"][] = "antecedente_analisis";

$tdataretornados[".tableType"] = "list";

$tdataretornados[".printerPageOrientation"] = 0;
$tdataretornados[".nPrinterPageScale"] = 100;

$tdataretornados[".nPrinterSplitRecords"] = 40;

$tdataretornados[".nPrinterPDFSplitRecords"] = 40;



$tdataretornados[".geocodingEnabled"] = false;





$tdataretornados[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataretornados[".pageSize"] = 20;

$tdataretornados[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataretornados[".strOrderBy"] = $tstrOrderBy;

$tdataretornados[".orderindexes"] = array();

$tdataretornados[".sqlHead"] = "SELECT `año`,  	mes,  	fechaentrevista,  	tipoentrevista,  	ficha,  	numalien,  	fechanacimiento,  	documentoficha,  	numerodocumento,  	nombredocumento,  	consulado,  	consulado_analisis,  	departamento,  	municipio,  	sexo,  	edad,  	rango_etario,  	tipoedad,  	paisrepatriacion,  	regionrepatriacion,  	antecedentes_penales,  	tipo_antecedentes,  	antecedentes,  	sectorppd,  	num_mes,  	antecedente_analisis";
$tdataretornados[".sqlFrom"] = "FROM retornados";
$tdataretornados[".sqlWhereExpr"] = "";
$tdataretornados[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataretornados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataretornados[".arrGroupsPerPage"] = $arrGPP;

$tdataretornados[".highlightSearchResults"] = true;

$tableKeysretornados = array();
$tdataretornados[".Keys"] = $tableKeysretornados;

$tdataretornados[".listFields"] = array();
$tdataretornados[".listFields"][] = "año";
$tdataretornados[".listFields"][] = "mes";
$tdataretornados[".listFields"][] = "fechaentrevista";
$tdataretornados[".listFields"][] = "tipoentrevista";
$tdataretornados[".listFields"][] = "ficha";
$tdataretornados[".listFields"][] = "numalien";
$tdataretornados[".listFields"][] = "fechanacimiento";
$tdataretornados[".listFields"][] = "documentoficha";
$tdataretornados[".listFields"][] = "numerodocumento";
$tdataretornados[".listFields"][] = "nombredocumento";
$tdataretornados[".listFields"][] = "consulado";
$tdataretornados[".listFields"][] = "consulado_analisis";
$tdataretornados[".listFields"][] = "departamento";
$tdataretornados[".listFields"][] = "municipio";
$tdataretornados[".listFields"][] = "sexo";
$tdataretornados[".listFields"][] = "edad";
$tdataretornados[".listFields"][] = "rango_etario";
$tdataretornados[".listFields"][] = "tipoedad";
$tdataretornados[".listFields"][] = "paisrepatriacion";
$tdataretornados[".listFields"][] = "regionrepatriacion";
$tdataretornados[".listFields"][] = "antecedentes_penales";
$tdataretornados[".listFields"][] = "tipo_antecedentes";
$tdataretornados[".listFields"][] = "antecedentes";
$tdataretornados[".listFields"][] = "sectorppd";
$tdataretornados[".listFields"][] = "num_mes";
$tdataretornados[".listFields"][] = "antecedente_analisis";

$tdataretornados[".hideMobileList"] = array();


$tdataretornados[".viewFields"] = array();
$tdataretornados[".viewFields"][] = "año";
$tdataretornados[".viewFields"][] = "mes";
$tdataretornados[".viewFields"][] = "fechaentrevista";
$tdataretornados[".viewFields"][] = "tipoentrevista";
$tdataretornados[".viewFields"][] = "ficha";
$tdataretornados[".viewFields"][] = "numalien";
$tdataretornados[".viewFields"][] = "fechanacimiento";
$tdataretornados[".viewFields"][] = "documentoficha";
$tdataretornados[".viewFields"][] = "numerodocumento";
$tdataretornados[".viewFields"][] = "nombredocumento";
$tdataretornados[".viewFields"][] = "consulado";
$tdataretornados[".viewFields"][] = "consulado_analisis";
$tdataretornados[".viewFields"][] = "departamento";
$tdataretornados[".viewFields"][] = "municipio";
$tdataretornados[".viewFields"][] = "sexo";
$tdataretornados[".viewFields"][] = "edad";
$tdataretornados[".viewFields"][] = "rango_etario";
$tdataretornados[".viewFields"][] = "tipoedad";
$tdataretornados[".viewFields"][] = "paisrepatriacion";
$tdataretornados[".viewFields"][] = "regionrepatriacion";
$tdataretornados[".viewFields"][] = "antecedentes_penales";
$tdataretornados[".viewFields"][] = "tipo_antecedentes";
$tdataretornados[".viewFields"][] = "antecedentes";
$tdataretornados[".viewFields"][] = "sectorppd";
$tdataretornados[".viewFields"][] = "num_mes";
$tdataretornados[".viewFields"][] = "antecedente_analisis";

$tdataretornados[".addFields"] = array();
$tdataretornados[".addFields"][] = "año";
$tdataretornados[".addFields"][] = "mes";
$tdataretornados[".addFields"][] = "fechaentrevista";
$tdataretornados[".addFields"][] = "tipoentrevista";
$tdataretornados[".addFields"][] = "ficha";
$tdataretornados[".addFields"][] = "numalien";
$tdataretornados[".addFields"][] = "fechanacimiento";
$tdataretornados[".addFields"][] = "documentoficha";
$tdataretornados[".addFields"][] = "numerodocumento";
$tdataretornados[".addFields"][] = "nombredocumento";
$tdataretornados[".addFields"][] = "consulado";
$tdataretornados[".addFields"][] = "consulado_analisis";
$tdataretornados[".addFields"][] = "departamento";
$tdataretornados[".addFields"][] = "municipio";
$tdataretornados[".addFields"][] = "sexo";
$tdataretornados[".addFields"][] = "edad";
$tdataretornados[".addFields"][] = "rango_etario";
$tdataretornados[".addFields"][] = "tipoedad";
$tdataretornados[".addFields"][] = "paisrepatriacion";
$tdataretornados[".addFields"][] = "regionrepatriacion";
$tdataretornados[".addFields"][] = "antecedentes_penales";
$tdataretornados[".addFields"][] = "tipo_antecedentes";
$tdataretornados[".addFields"][] = "antecedentes";
$tdataretornados[".addFields"][] = "sectorppd";
$tdataretornados[".addFields"][] = "num_mes";
$tdataretornados[".addFields"][] = "antecedente_analisis";

$tdataretornados[".masterListFields"] = array();
$tdataretornados[".masterListFields"][] = "año";
$tdataretornados[".masterListFields"][] = "mes";
$tdataretornados[".masterListFields"][] = "fechaentrevista";
$tdataretornados[".masterListFields"][] = "tipoentrevista";
$tdataretornados[".masterListFields"][] = "ficha";
$tdataretornados[".masterListFields"][] = "numalien";
$tdataretornados[".masterListFields"][] = "fechanacimiento";
$tdataretornados[".masterListFields"][] = "documentoficha";
$tdataretornados[".masterListFields"][] = "numerodocumento";
$tdataretornados[".masterListFields"][] = "nombredocumento";
$tdataretornados[".masterListFields"][] = "consulado";
$tdataretornados[".masterListFields"][] = "consulado_analisis";
$tdataretornados[".masterListFields"][] = "departamento";
$tdataretornados[".masterListFields"][] = "municipio";
$tdataretornados[".masterListFields"][] = "sexo";
$tdataretornados[".masterListFields"][] = "edad";
$tdataretornados[".masterListFields"][] = "rango_etario";
$tdataretornados[".masterListFields"][] = "tipoedad";
$tdataretornados[".masterListFields"][] = "paisrepatriacion";
$tdataretornados[".masterListFields"][] = "regionrepatriacion";
$tdataretornados[".masterListFields"][] = "antecedentes_penales";
$tdataretornados[".masterListFields"][] = "tipo_antecedentes";
$tdataretornados[".masterListFields"][] = "antecedentes";
$tdataretornados[".masterListFields"][] = "sectorppd";
$tdataretornados[".masterListFields"][] = "num_mes";
$tdataretornados[".masterListFields"][] = "antecedente_analisis";

$tdataretornados[".inlineAddFields"] = array();
$tdataretornados[".inlineAddFields"][] = "año";
$tdataretornados[".inlineAddFields"][] = "mes";
$tdataretornados[".inlineAddFields"][] = "fechaentrevista";
$tdataretornados[".inlineAddFields"][] = "tipoentrevista";
$tdataretornados[".inlineAddFields"][] = "ficha";
$tdataretornados[".inlineAddFields"][] = "numalien";
$tdataretornados[".inlineAddFields"][] = "fechanacimiento";
$tdataretornados[".inlineAddFields"][] = "documentoficha";
$tdataretornados[".inlineAddFields"][] = "numerodocumento";
$tdataretornados[".inlineAddFields"][] = "nombredocumento";
$tdataretornados[".inlineAddFields"][] = "consulado";
$tdataretornados[".inlineAddFields"][] = "consulado_analisis";
$tdataretornados[".inlineAddFields"][] = "departamento";
$tdataretornados[".inlineAddFields"][] = "municipio";
$tdataretornados[".inlineAddFields"][] = "sexo";
$tdataretornados[".inlineAddFields"][] = "edad";
$tdataretornados[".inlineAddFields"][] = "rango_etario";
$tdataretornados[".inlineAddFields"][] = "tipoedad";
$tdataretornados[".inlineAddFields"][] = "paisrepatriacion";
$tdataretornados[".inlineAddFields"][] = "regionrepatriacion";
$tdataretornados[".inlineAddFields"][] = "antecedentes_penales";
$tdataretornados[".inlineAddFields"][] = "tipo_antecedentes";
$tdataretornados[".inlineAddFields"][] = "antecedentes";
$tdataretornados[".inlineAddFields"][] = "sectorppd";
$tdataretornados[".inlineAddFields"][] = "num_mes";
$tdataretornados[".inlineAddFields"][] = "antecedente_analisis";

$tdataretornados[".editFields"] = array();
$tdataretornados[".editFields"][] = "año";
$tdataretornados[".editFields"][] = "mes";
$tdataretornados[".editFields"][] = "fechaentrevista";
$tdataretornados[".editFields"][] = "tipoentrevista";
$tdataretornados[".editFields"][] = "ficha";
$tdataretornados[".editFields"][] = "numalien";
$tdataretornados[".editFields"][] = "fechanacimiento";
$tdataretornados[".editFields"][] = "documentoficha";
$tdataretornados[".editFields"][] = "numerodocumento";
$tdataretornados[".editFields"][] = "nombredocumento";
$tdataretornados[".editFields"][] = "consulado";
$tdataretornados[".editFields"][] = "consulado_analisis";
$tdataretornados[".editFields"][] = "departamento";
$tdataretornados[".editFields"][] = "municipio";
$tdataretornados[".editFields"][] = "sexo";
$tdataretornados[".editFields"][] = "edad";
$tdataretornados[".editFields"][] = "rango_etario";
$tdataretornados[".editFields"][] = "tipoedad";
$tdataretornados[".editFields"][] = "paisrepatriacion";
$tdataretornados[".editFields"][] = "regionrepatriacion";
$tdataretornados[".editFields"][] = "antecedentes_penales";
$tdataretornados[".editFields"][] = "tipo_antecedentes";
$tdataretornados[".editFields"][] = "antecedentes";
$tdataretornados[".editFields"][] = "sectorppd";
$tdataretornados[".editFields"][] = "num_mes";
$tdataretornados[".editFields"][] = "antecedente_analisis";

$tdataretornados[".inlineEditFields"] = array();
$tdataretornados[".inlineEditFields"][] = "año";
$tdataretornados[".inlineEditFields"][] = "mes";
$tdataretornados[".inlineEditFields"][] = "fechaentrevista";
$tdataretornados[".inlineEditFields"][] = "tipoentrevista";
$tdataretornados[".inlineEditFields"][] = "ficha";
$tdataretornados[".inlineEditFields"][] = "numalien";
$tdataretornados[".inlineEditFields"][] = "fechanacimiento";
$tdataretornados[".inlineEditFields"][] = "documentoficha";
$tdataretornados[".inlineEditFields"][] = "numerodocumento";
$tdataretornados[".inlineEditFields"][] = "nombredocumento";
$tdataretornados[".inlineEditFields"][] = "consulado";
$tdataretornados[".inlineEditFields"][] = "consulado_analisis";
$tdataretornados[".inlineEditFields"][] = "departamento";
$tdataretornados[".inlineEditFields"][] = "municipio";
$tdataretornados[".inlineEditFields"][] = "sexo";
$tdataretornados[".inlineEditFields"][] = "edad";
$tdataretornados[".inlineEditFields"][] = "rango_etario";
$tdataretornados[".inlineEditFields"][] = "tipoedad";
$tdataretornados[".inlineEditFields"][] = "paisrepatriacion";
$tdataretornados[".inlineEditFields"][] = "regionrepatriacion";
$tdataretornados[".inlineEditFields"][] = "antecedentes_penales";
$tdataretornados[".inlineEditFields"][] = "tipo_antecedentes";
$tdataretornados[".inlineEditFields"][] = "antecedentes";
$tdataretornados[".inlineEditFields"][] = "sectorppd";
$tdataretornados[".inlineEditFields"][] = "num_mes";
$tdataretornados[".inlineEditFields"][] = "antecedente_analisis";

$tdataretornados[".updateSelectedFields"] = array();
$tdataretornados[".updateSelectedFields"][] = "año";
$tdataretornados[".updateSelectedFields"][] = "mes";
$tdataretornados[".updateSelectedFields"][] = "fechaentrevista";
$tdataretornados[".updateSelectedFields"][] = "tipoentrevista";
$tdataretornados[".updateSelectedFields"][] = "ficha";
$tdataretornados[".updateSelectedFields"][] = "numalien";
$tdataretornados[".updateSelectedFields"][] = "fechanacimiento";
$tdataretornados[".updateSelectedFields"][] = "documentoficha";
$tdataretornados[".updateSelectedFields"][] = "numerodocumento";
$tdataretornados[".updateSelectedFields"][] = "nombredocumento";
$tdataretornados[".updateSelectedFields"][] = "consulado";
$tdataretornados[".updateSelectedFields"][] = "consulado_analisis";
$tdataretornados[".updateSelectedFields"][] = "departamento";
$tdataretornados[".updateSelectedFields"][] = "municipio";
$tdataretornados[".updateSelectedFields"][] = "sexo";
$tdataretornados[".updateSelectedFields"][] = "edad";
$tdataretornados[".updateSelectedFields"][] = "rango_etario";
$tdataretornados[".updateSelectedFields"][] = "tipoedad";
$tdataretornados[".updateSelectedFields"][] = "paisrepatriacion";
$tdataretornados[".updateSelectedFields"][] = "regionrepatriacion";
$tdataretornados[".updateSelectedFields"][] = "antecedentes_penales";
$tdataretornados[".updateSelectedFields"][] = "tipo_antecedentes";
$tdataretornados[".updateSelectedFields"][] = "antecedentes";
$tdataretornados[".updateSelectedFields"][] = "sectorppd";
$tdataretornados[".updateSelectedFields"][] = "num_mes";
$tdataretornados[".updateSelectedFields"][] = "antecedente_analisis";


$tdataretornados[".exportFields"] = array();
$tdataretornados[".exportFields"][] = "año";
$tdataretornados[".exportFields"][] = "mes";
$tdataretornados[".exportFields"][] = "fechaentrevista";
$tdataretornados[".exportFields"][] = "tipoentrevista";
$tdataretornados[".exportFields"][] = "ficha";
$tdataretornados[".exportFields"][] = "numalien";
$tdataretornados[".exportFields"][] = "fechanacimiento";
$tdataretornados[".exportFields"][] = "documentoficha";
$tdataretornados[".exportFields"][] = "numerodocumento";
$tdataretornados[".exportFields"][] = "nombredocumento";
$tdataretornados[".exportFields"][] = "consulado";
$tdataretornados[".exportFields"][] = "consulado_analisis";
$tdataretornados[".exportFields"][] = "departamento";
$tdataretornados[".exportFields"][] = "municipio";
$tdataretornados[".exportFields"][] = "sexo";
$tdataretornados[".exportFields"][] = "edad";
$tdataretornados[".exportFields"][] = "rango_etario";
$tdataretornados[".exportFields"][] = "tipoedad";
$tdataretornados[".exportFields"][] = "paisrepatriacion";
$tdataretornados[".exportFields"][] = "regionrepatriacion";
$tdataretornados[".exportFields"][] = "antecedentes_penales";
$tdataretornados[".exportFields"][] = "tipo_antecedentes";
$tdataretornados[".exportFields"][] = "antecedentes";
$tdataretornados[".exportFields"][] = "sectorppd";
$tdataretornados[".exportFields"][] = "num_mes";
$tdataretornados[".exportFields"][] = "antecedente_analisis";

$tdataretornados[".importFields"] = array();
$tdataretornados[".importFields"][] = "año";
$tdataretornados[".importFields"][] = "mes";
$tdataretornados[".importFields"][] = "fechaentrevista";
$tdataretornados[".importFields"][] = "tipoentrevista";
$tdataretornados[".importFields"][] = "ficha";
$tdataretornados[".importFields"][] = "numalien";
$tdataretornados[".importFields"][] = "fechanacimiento";
$tdataretornados[".importFields"][] = "documentoficha";
$tdataretornados[".importFields"][] = "numerodocumento";
$tdataretornados[".importFields"][] = "nombredocumento";
$tdataretornados[".importFields"][] = "consulado";
$tdataretornados[".importFields"][] = "consulado_analisis";
$tdataretornados[".importFields"][] = "departamento";
$tdataretornados[".importFields"][] = "municipio";
$tdataretornados[".importFields"][] = "sexo";
$tdataretornados[".importFields"][] = "edad";
$tdataretornados[".importFields"][] = "rango_etario";
$tdataretornados[".importFields"][] = "tipoedad";
$tdataretornados[".importFields"][] = "paisrepatriacion";
$tdataretornados[".importFields"][] = "regionrepatriacion";
$tdataretornados[".importFields"][] = "antecedentes_penales";
$tdataretornados[".importFields"][] = "tipo_antecedentes";
$tdataretornados[".importFields"][] = "antecedentes";
$tdataretornados[".importFields"][] = "sectorppd";
$tdataretornados[".importFields"][] = "num_mes";
$tdataretornados[".importFields"][] = "antecedente_analisis";

$tdataretornados[".printFields"] = array();
$tdataretornados[".printFields"][] = "año";
$tdataretornados[".printFields"][] = "mes";
$tdataretornados[".printFields"][] = "fechaentrevista";
$tdataretornados[".printFields"][] = "tipoentrevista";
$tdataretornados[".printFields"][] = "ficha";
$tdataretornados[".printFields"][] = "numalien";
$tdataretornados[".printFields"][] = "fechanacimiento";
$tdataretornados[".printFields"][] = "documentoficha";
$tdataretornados[".printFields"][] = "numerodocumento";
$tdataretornados[".printFields"][] = "nombredocumento";
$tdataretornados[".printFields"][] = "consulado";
$tdataretornados[".printFields"][] = "consulado_analisis";
$tdataretornados[".printFields"][] = "departamento";
$tdataretornados[".printFields"][] = "municipio";
$tdataretornados[".printFields"][] = "sexo";
$tdataretornados[".printFields"][] = "edad";
$tdataretornados[".printFields"][] = "rango_etario";
$tdataretornados[".printFields"][] = "tipoedad";
$tdataretornados[".printFields"][] = "paisrepatriacion";
$tdataretornados[".printFields"][] = "regionrepatriacion";
$tdataretornados[".printFields"][] = "antecedentes_penales";
$tdataretornados[".printFields"][] = "tipo_antecedentes";
$tdataretornados[".printFields"][] = "antecedentes";
$tdataretornados[".printFields"][] = "sectorppd";
$tdataretornados[".printFields"][] = "num_mes";
$tdataretornados[".printFields"][] = "antecedente_analisis";

//	año
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "año";
	$fdata["GoodName"] = "a_o";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","a_o");
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

		$fdata["strField"] = "año";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`año`";

	
	
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




	$tdataretornados["año"] = $fdata;
//	mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "mes";
	$fdata["GoodName"] = "mes";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","mes");
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

		$fdata["strField"] = "mes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mes";

	
	
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




	$tdataretornados["mes"] = $fdata;
//	fechaentrevista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fechaentrevista";
	$fdata["GoodName"] = "fechaentrevista";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","fechaentrevista");
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

		$fdata["strField"] = "fechaentrevista";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fechaentrevista";

	
	
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




	$tdataretornados["fechaentrevista"] = $fdata;
//	tipoentrevista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tipoentrevista";
	$fdata["GoodName"] = "tipoentrevista";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","tipoentrevista");
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

		$fdata["strField"] = "tipoentrevista";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipoentrevista";

	
	
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




	$tdataretornados["tipoentrevista"] = $fdata;
//	ficha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ficha";
	$fdata["GoodName"] = "ficha";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","ficha");
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

		$fdata["strField"] = "ficha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ficha";

	
	
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




	$tdataretornados["ficha"] = $fdata;
//	numalien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "numalien";
	$fdata["GoodName"] = "numalien";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","numalien");
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

		$fdata["strField"] = "numalien";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numalien";

	
	
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




	$tdataretornados["numalien"] = $fdata;
//	fechanacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fechanacimiento";
	$fdata["GoodName"] = "fechanacimiento";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","fechanacimiento");
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

		$fdata["strField"] = "fechanacimiento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fechanacimiento";

	
	
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




	$tdataretornados["fechanacimiento"] = $fdata;
//	documentoficha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "documentoficha";
	$fdata["GoodName"] = "documentoficha";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","documentoficha");
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

		$fdata["strField"] = "documentoficha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documentoficha";

	
	
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




	$tdataretornados["documentoficha"] = $fdata;
//	numerodocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "numerodocumento";
	$fdata["GoodName"] = "numerodocumento";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","numerodocumento");
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

		$fdata["strField"] = "numerodocumento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numerodocumento";

	
	
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




	$tdataretornados["numerodocumento"] = $fdata;
//	nombredocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "nombredocumento";
	$fdata["GoodName"] = "nombredocumento";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","nombredocumento");
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

		$fdata["strField"] = "nombredocumento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombredocumento";

	
	
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




	$tdataretornados["nombredocumento"] = $fdata;
//	consulado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "consulado";
	$fdata["GoodName"] = "consulado";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","consulado");
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

		$fdata["strField"] = "consulado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "consulado";

	
	
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




	$tdataretornados["consulado"] = $fdata;
//	consulado_analisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "consulado_analisis";
	$fdata["GoodName"] = "consulado_analisis";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","consulado_analisis");
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

		$fdata["strField"] = "consulado_analisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "consulado_analisis";

	
	
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




	$tdataretornados["consulado_analisis"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","departamento");
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




	$tdataretornados["departamento"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","municipio");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataretornados["municipio"] = $fdata;
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","sexo");
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




	$tdataretornados["sexo"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","edad");
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




	$tdataretornados["edad"] = $fdata;
//	rango_etario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "rango_etario";
	$fdata["GoodName"] = "rango_etario";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","rango_etario");
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

		$fdata["strField"] = "rango_etario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rango_etario";

	
	
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




	$tdataretornados["rango_etario"] = $fdata;
//	tipoedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "tipoedad";
	$fdata["GoodName"] = "tipoedad";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","tipoedad");
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

		$fdata["strField"] = "tipoedad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipoedad";

	
	
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




	$tdataretornados["tipoedad"] = $fdata;
//	paisrepatriacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "paisrepatriacion";
	$fdata["GoodName"] = "paisrepatriacion";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","paisrepatriacion");
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

		$fdata["strField"] = "paisrepatriacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paisrepatriacion";

	
	
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




	$tdataretornados["paisrepatriacion"] = $fdata;
//	regionrepatriacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "regionrepatriacion";
	$fdata["GoodName"] = "regionrepatriacion";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","regionrepatriacion");
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

		$fdata["strField"] = "regionrepatriacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "regionrepatriacion";

	
	
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




	$tdataretornados["regionrepatriacion"] = $fdata;
//	antecedentes_penales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "antecedentes_penales";
	$fdata["GoodName"] = "antecedentes_penales";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","antecedentes_penales");
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

		$fdata["strField"] = "antecedentes_penales";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "antecedentes_penales";

	
	
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




	$tdataretornados["antecedentes_penales"] = $fdata;
//	tipo_antecedentes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "tipo_antecedentes";
	$fdata["GoodName"] = "tipo_antecedentes";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","tipo_antecedentes");
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

		$fdata["strField"] = "tipo_antecedentes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_antecedentes";

	
	
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




	$tdataretornados["tipo_antecedentes"] = $fdata;
//	antecedentes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "antecedentes";
	$fdata["GoodName"] = "antecedentes";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","antecedentes");
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

		$fdata["strField"] = "antecedentes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "antecedentes";

	
	
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




	$tdataretornados["antecedentes"] = $fdata;
//	sectorppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "sectorppd";
	$fdata["GoodName"] = "sectorppd";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","sectorppd");
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




	$tdataretornados["sectorppd"] = $fdata;
//	num_mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "num_mes";
	$fdata["GoodName"] = "num_mes";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","num_mes");
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

		$fdata["strField"] = "num_mes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "num_mes";

	
	
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




	$tdataretornados["num_mes"] = $fdata;
//	antecedente_analisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "antecedente_analisis";
	$fdata["GoodName"] = "antecedente_analisis";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("retornados","antecedente_analisis");
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

		$fdata["strField"] = "antecedente_analisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "antecedente_analisis";

	
	
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




	$tdataretornados["antecedente_analisis"] = $fdata;


$tables_data["retornados"]=&$tdataretornados;
$field_labels["retornados"] = &$fieldLabelsretornados;
$fieldToolTips["retornados"] = &$fieldToolTipsretornados;
$placeHolders["retornados"] = &$placeHoldersretornados;
$page_titles["retornados"] = &$pageTitlesretornados;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["retornados"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["retornados"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_retornados()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`año`,  	mes,  	fechaentrevista,  	tipoentrevista,  	ficha,  	numalien,  	fechanacimiento,  	documentoficha,  	numerodocumento,  	nombredocumento,  	consulado,  	consulado_analisis,  	departamento,  	municipio,  	sexo,  	edad,  	rango_etario,  	tipoedad,  	paisrepatriacion,  	regionrepatriacion,  	antecedentes_penales,  	tipo_antecedentes,  	antecedentes,  	sectorppd,  	num_mes,  	antecedente_analisis";
$proto0["m_strFrom"] = "FROM retornados";
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
	"m_strName" => "año",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto6["m_sql"] = "`año`";
$proto6["m_srcTableName"] = "retornados";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "mes",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto8["m_sql"] = "mes";
$proto8["m_srcTableName"] = "retornados";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fechaentrevista",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto10["m_sql"] = "fechaentrevista";
$proto10["m_srcTableName"] = "retornados";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "tipoentrevista",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto12["m_sql"] = "tipoentrevista";
$proto12["m_srcTableName"] = "retornados";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ficha",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto14["m_sql"] = "ficha";
$proto14["m_srcTableName"] = "retornados";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "numalien",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto16["m_sql"] = "numalien";
$proto16["m_srcTableName"] = "retornados";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fechanacimiento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto18["m_sql"] = "fechanacimiento";
$proto18["m_srcTableName"] = "retornados";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "documentoficha",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto20["m_sql"] = "documentoficha";
$proto20["m_srcTableName"] = "retornados";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "numerodocumento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto22["m_sql"] = "numerodocumento";
$proto22["m_srcTableName"] = "retornados";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "nombredocumento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto24["m_sql"] = "nombredocumento";
$proto24["m_srcTableName"] = "retornados";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "consulado",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto26["m_sql"] = "consulado";
$proto26["m_srcTableName"] = "retornados";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "consulado_analisis",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto28["m_sql"] = "consulado_analisis";
$proto28["m_srcTableName"] = "retornados";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto30["m_sql"] = "departamento";
$proto30["m_srcTableName"] = "retornados";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto32["m_sql"] = "municipio";
$proto32["m_srcTableName"] = "retornados";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto34["m_sql"] = "sexo";
$proto34["m_srcTableName"] = "retornados";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "edad",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto36["m_sql"] = "edad";
$proto36["m_srcTableName"] = "retornados";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "rango_etario",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto38["m_sql"] = "rango_etario";
$proto38["m_srcTableName"] = "retornados";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "tipoedad",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto40["m_sql"] = "tipoedad";
$proto40["m_srcTableName"] = "retornados";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "paisrepatriacion",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto42["m_sql"] = "paisrepatriacion";
$proto42["m_srcTableName"] = "retornados";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "regionrepatriacion",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto44["m_sql"] = "regionrepatriacion";
$proto44["m_srcTableName"] = "retornados";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "antecedentes_penales",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto46["m_sql"] = "antecedentes_penales";
$proto46["m_srcTableName"] = "retornados";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_antecedentes",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto48["m_sql"] = "tipo_antecedentes";
$proto48["m_srcTableName"] = "retornados";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "antecedentes",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto50["m_sql"] = "antecedentes";
$proto50["m_srcTableName"] = "retornados";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "sectorppd",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto52["m_sql"] = "sectorppd";
$proto52["m_srcTableName"] = "retornados";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "num_mes",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto54["m_sql"] = "num_mes";
$proto54["m_srcTableName"] = "retornados";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "antecedente_analisis",
	"m_strTable" => "retornados",
	"m_srcTableName" => "retornados"
));

$proto56["m_sql"] = "antecedente_analisis";
$proto56["m_srcTableName"] = "retornados";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "retornados";
$proto59["m_srcTableName"] = "retornados";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "año";
$proto59["m_columns"][] = "mes";
$proto59["m_columns"][] = "fechaentrevista";
$proto59["m_columns"][] = "tipoentrevista";
$proto59["m_columns"][] = "ficha";
$proto59["m_columns"][] = "numalien";
$proto59["m_columns"][] = "fechanacimiento";
$proto59["m_columns"][] = "documentoficha";
$proto59["m_columns"][] = "numerodocumento";
$proto59["m_columns"][] = "nombredocumento";
$proto59["m_columns"][] = "consulado";
$proto59["m_columns"][] = "consulado_analisis";
$proto59["m_columns"][] = "departamento";
$proto59["m_columns"][] = "municipio";
$proto59["m_columns"][] = "sexo";
$proto59["m_columns"][] = "edad";
$proto59["m_columns"][] = "rango_etario";
$proto59["m_columns"][] = "tipoedad";
$proto59["m_columns"][] = "paisrepatriacion";
$proto59["m_columns"][] = "regionrepatriacion";
$proto59["m_columns"][] = "antecedentes_penales";
$proto59["m_columns"][] = "tipo_antecedentes";
$proto59["m_columns"][] = "antecedentes";
$proto59["m_columns"][] = "sectorppd";
$proto59["m_columns"][] = "num_mes";
$proto59["m_columns"][] = "antecedente_analisis";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "retornados";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "retornados";
$proto60=array();
$proto60["m_sql"] = "";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="retornados";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_retornados = createSqlQuery_retornados();


	
		;

																										

$tdataretornados[".sqlquery"] = $queryData_retornados;

$tableEvents["retornados"] = new eventsBase;
$tdataretornados[".hasEvents"] = false;

?>