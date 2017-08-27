<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBD_Retornados = array();
	$tdataBD_Retornados[".truncateText"] = true;
	$tdataBD_Retornados[".NumberOfChars"] = 80;
	$tdataBD_Retornados[".ShortName"] = "BD_Retornados";
	$tdataBD_Retornados[".OwnerID"] = "";
	$tdataBD_Retornados[".OriginalTable"] = "retornados";

//	field labels
$fieldLabelsBD_Retornados = array();
$fieldToolTipsBD_Retornados = array();
$pageTitlesBD_Retornados = array();
$placeHoldersBD_Retornados = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsBD_Retornados["Spanish"] = array();
	$fieldToolTipsBD_Retornados["Spanish"] = array();
	$placeHoldersBD_Retornados["Spanish"] = array();
	$pageTitlesBD_Retornados["Spanish"] = array();
	$fieldLabelsBD_Retornados["Spanish"]["a_o"] = "Año";
	$fieldToolTipsBD_Retornados["Spanish"]["a_o"] = "";
	$placeHoldersBD_Retornados["Spanish"]["a_o"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["mes"] = "Mes";
	$fieldToolTipsBD_Retornados["Spanish"]["mes"] = "";
	$placeHoldersBD_Retornados["Spanish"]["mes"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["fechaentrevista"] = "Fechaentrevista";
	$fieldToolTipsBD_Retornados["Spanish"]["fechaentrevista"] = "";
	$placeHoldersBD_Retornados["Spanish"]["fechaentrevista"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["tipoentrevista"] = "Tipoentrevista";
	$fieldToolTipsBD_Retornados["Spanish"]["tipoentrevista"] = "";
	$placeHoldersBD_Retornados["Spanish"]["tipoentrevista"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["ficha"] = "Ficha";
	$fieldToolTipsBD_Retornados["Spanish"]["ficha"] = "";
	$placeHoldersBD_Retornados["Spanish"]["ficha"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["numalien"] = "Numalien";
	$fieldToolTipsBD_Retornados["Spanish"]["numalien"] = "";
	$placeHoldersBD_Retornados["Spanish"]["numalien"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["fechanacimiento"] = "Fechanacimiento";
	$fieldToolTipsBD_Retornados["Spanish"]["fechanacimiento"] = "";
	$placeHoldersBD_Retornados["Spanish"]["fechanacimiento"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["documentoficha"] = "Documentoficha";
	$fieldToolTipsBD_Retornados["Spanish"]["documentoficha"] = "";
	$placeHoldersBD_Retornados["Spanish"]["documentoficha"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["numerodocumento"] = "Numerodocumento";
	$fieldToolTipsBD_Retornados["Spanish"]["numerodocumento"] = "";
	$placeHoldersBD_Retornados["Spanish"]["numerodocumento"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["nombredocumento"] = "Nombredocumento";
	$fieldToolTipsBD_Retornados["Spanish"]["nombredocumento"] = "";
	$placeHoldersBD_Retornados["Spanish"]["nombredocumento"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["consulado"] = "Consulado";
	$fieldToolTipsBD_Retornados["Spanish"]["consulado"] = "";
	$placeHoldersBD_Retornados["Spanish"]["consulado"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["consulado_analisis"] = "Consulado Analisis";
	$fieldToolTipsBD_Retornados["Spanish"]["consulado_analisis"] = "";
	$placeHoldersBD_Retornados["Spanish"]["consulado_analisis"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsBD_Retornados["Spanish"]["departamento"] = "";
	$placeHoldersBD_Retornados["Spanish"]["departamento"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsBD_Retornados["Spanish"]["municipio"] = "";
	$placeHoldersBD_Retornados["Spanish"]["municipio"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["sexo"] = "Sexo";
	$fieldToolTipsBD_Retornados["Spanish"]["sexo"] = "";
	$placeHoldersBD_Retornados["Spanish"]["sexo"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["edad"] = "Edad";
	$fieldToolTipsBD_Retornados["Spanish"]["edad"] = "";
	$placeHoldersBD_Retornados["Spanish"]["edad"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["rango_etario"] = "Rango Etario";
	$fieldToolTipsBD_Retornados["Spanish"]["rango_etario"] = "";
	$placeHoldersBD_Retornados["Spanish"]["rango_etario"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["tipoedad"] = "Tipoedad";
	$fieldToolTipsBD_Retornados["Spanish"]["tipoedad"] = "";
	$placeHoldersBD_Retornados["Spanish"]["tipoedad"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["paisrepatriacion"] = "Paisrepatriacion";
	$fieldToolTipsBD_Retornados["Spanish"]["paisrepatriacion"] = "";
	$placeHoldersBD_Retornados["Spanish"]["paisrepatriacion"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["regionrepatriacion"] = "Regionrepatriacion";
	$fieldToolTipsBD_Retornados["Spanish"]["regionrepatriacion"] = "";
	$placeHoldersBD_Retornados["Spanish"]["regionrepatriacion"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["antecedentes_penales"] = "Antecedentes Penales";
	$fieldToolTipsBD_Retornados["Spanish"]["antecedentes_penales"] = "";
	$placeHoldersBD_Retornados["Spanish"]["antecedentes_penales"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["tipo_antecedentes"] = "Tipo Antecedentes";
	$fieldToolTipsBD_Retornados["Spanish"]["tipo_antecedentes"] = "";
	$placeHoldersBD_Retornados["Spanish"]["tipo_antecedentes"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["antecedentes"] = "Antecedentes";
	$fieldToolTipsBD_Retornados["Spanish"]["antecedentes"] = "";
	$placeHoldersBD_Retornados["Spanish"]["antecedentes"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsBD_Retornados["Spanish"]["sectorppd"] = "";
	$placeHoldersBD_Retornados["Spanish"]["sectorppd"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["num_mes"] = "Num Mes";
	$fieldToolTipsBD_Retornados["Spanish"]["num_mes"] = "";
	$placeHoldersBD_Retornados["Spanish"]["num_mes"] = "";
	$fieldLabelsBD_Retornados["Spanish"]["antecedente_analisis"] = "Antecedente Analisis";
	$fieldToolTipsBD_Retornados["Spanish"]["antecedente_analisis"] = "";
	$placeHoldersBD_Retornados["Spanish"]["antecedente_analisis"] = "";
	if (count($fieldToolTipsBD_Retornados["Spanish"]))
		$tdataBD_Retornados[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBD_Retornados["English"] = array();
	$fieldToolTipsBD_Retornados["English"] = array();
	$placeHoldersBD_Retornados["English"] = array();
	$pageTitlesBD_Retornados["English"] = array();
	$fieldLabelsBD_Retornados["English"]["a_o"] = "Año";
	$fieldToolTipsBD_Retornados["English"]["a_o"] = "";
	$placeHoldersBD_Retornados["English"]["a_o"] = "";
	$fieldLabelsBD_Retornados["English"]["mes"] = "Mes";
	$fieldToolTipsBD_Retornados["English"]["mes"] = "";
	$placeHoldersBD_Retornados["English"]["mes"] = "";
	$fieldLabelsBD_Retornados["English"]["fechaentrevista"] = "Fechaentrevista";
	$fieldToolTipsBD_Retornados["English"]["fechaentrevista"] = "";
	$placeHoldersBD_Retornados["English"]["fechaentrevista"] = "";
	$fieldLabelsBD_Retornados["English"]["tipoentrevista"] = "Tipoentrevista";
	$fieldToolTipsBD_Retornados["English"]["tipoentrevista"] = "";
	$placeHoldersBD_Retornados["English"]["tipoentrevista"] = "";
	$fieldLabelsBD_Retornados["English"]["ficha"] = "Ficha";
	$fieldToolTipsBD_Retornados["English"]["ficha"] = "";
	$placeHoldersBD_Retornados["English"]["ficha"] = "";
	$fieldLabelsBD_Retornados["English"]["numalien"] = "Numalien";
	$fieldToolTipsBD_Retornados["English"]["numalien"] = "";
	$placeHoldersBD_Retornados["English"]["numalien"] = "";
	$fieldLabelsBD_Retornados["English"]["fechanacimiento"] = "Fechanacimiento";
	$fieldToolTipsBD_Retornados["English"]["fechanacimiento"] = "";
	$placeHoldersBD_Retornados["English"]["fechanacimiento"] = "";
	$fieldLabelsBD_Retornados["English"]["documentoficha"] = "Documentoficha";
	$fieldToolTipsBD_Retornados["English"]["documentoficha"] = "";
	$placeHoldersBD_Retornados["English"]["documentoficha"] = "";
	$fieldLabelsBD_Retornados["English"]["numerodocumento"] = "Numerodocumento";
	$fieldToolTipsBD_Retornados["English"]["numerodocumento"] = "";
	$placeHoldersBD_Retornados["English"]["numerodocumento"] = "";
	$fieldLabelsBD_Retornados["English"]["nombredocumento"] = "Nombredocumento";
	$fieldToolTipsBD_Retornados["English"]["nombredocumento"] = "";
	$placeHoldersBD_Retornados["English"]["nombredocumento"] = "";
	$fieldLabelsBD_Retornados["English"]["consulado"] = "Consulado";
	$fieldToolTipsBD_Retornados["English"]["consulado"] = "";
	$placeHoldersBD_Retornados["English"]["consulado"] = "";
	$fieldLabelsBD_Retornados["English"]["consulado_analisis"] = "Consulado Analisis";
	$fieldToolTipsBD_Retornados["English"]["consulado_analisis"] = "";
	$placeHoldersBD_Retornados["English"]["consulado_analisis"] = "";
	$fieldLabelsBD_Retornados["English"]["departamento"] = "Departamento";
	$fieldToolTipsBD_Retornados["English"]["departamento"] = "";
	$placeHoldersBD_Retornados["English"]["departamento"] = "";
	$fieldLabelsBD_Retornados["English"]["municipio"] = "Municipio";
	$fieldToolTipsBD_Retornados["English"]["municipio"] = "";
	$placeHoldersBD_Retornados["English"]["municipio"] = "";
	$fieldLabelsBD_Retornados["English"]["sexo"] = "Sexo";
	$fieldToolTipsBD_Retornados["English"]["sexo"] = "";
	$placeHoldersBD_Retornados["English"]["sexo"] = "";
	$fieldLabelsBD_Retornados["English"]["edad"] = "Edad";
	$fieldToolTipsBD_Retornados["English"]["edad"] = "";
	$placeHoldersBD_Retornados["English"]["edad"] = "";
	$fieldLabelsBD_Retornados["English"]["rango_etario"] = "Rango Etario";
	$fieldToolTipsBD_Retornados["English"]["rango_etario"] = "";
	$placeHoldersBD_Retornados["English"]["rango_etario"] = "";
	$fieldLabelsBD_Retornados["English"]["tipoedad"] = "Tipoedad";
	$fieldToolTipsBD_Retornados["English"]["tipoedad"] = "";
	$placeHoldersBD_Retornados["English"]["tipoedad"] = "";
	$fieldLabelsBD_Retornados["English"]["paisrepatriacion"] = "Paisrepatriacion";
	$fieldToolTipsBD_Retornados["English"]["paisrepatriacion"] = "";
	$placeHoldersBD_Retornados["English"]["paisrepatriacion"] = "";
	$fieldLabelsBD_Retornados["English"]["regionrepatriacion"] = "Regionrepatriacion";
	$fieldToolTipsBD_Retornados["English"]["regionrepatriacion"] = "";
	$placeHoldersBD_Retornados["English"]["regionrepatriacion"] = "";
	$fieldLabelsBD_Retornados["English"]["antecedentes_penales"] = "Antecedentes Penales";
	$fieldToolTipsBD_Retornados["English"]["antecedentes_penales"] = "";
	$placeHoldersBD_Retornados["English"]["antecedentes_penales"] = "";
	$fieldLabelsBD_Retornados["English"]["tipo_antecedentes"] = "Tipo Antecedentes";
	$fieldToolTipsBD_Retornados["English"]["tipo_antecedentes"] = "";
	$placeHoldersBD_Retornados["English"]["tipo_antecedentes"] = "";
	$fieldLabelsBD_Retornados["English"]["antecedentes"] = "Antecedentes";
	$fieldToolTipsBD_Retornados["English"]["antecedentes"] = "";
	$placeHoldersBD_Retornados["English"]["antecedentes"] = "";
	$fieldLabelsBD_Retornados["English"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsBD_Retornados["English"]["sectorppd"] = "";
	$placeHoldersBD_Retornados["English"]["sectorppd"] = "";
	$fieldLabelsBD_Retornados["English"]["num_mes"] = "Num Mes";
	$fieldToolTipsBD_Retornados["English"]["num_mes"] = "";
	$placeHoldersBD_Retornados["English"]["num_mes"] = "";
	$fieldLabelsBD_Retornados["English"]["antecedente_analisis"] = "Antecedente Analisis";
	$fieldToolTipsBD_Retornados["English"]["antecedente_analisis"] = "";
	$placeHoldersBD_Retornados["English"]["antecedente_analisis"] = "";
	if (count($fieldToolTipsBD_Retornados["English"]))
		$tdataBD_Retornados[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBD_Retornados[""] = array();
	$fieldToolTipsBD_Retornados[""] = array();
	$placeHoldersBD_Retornados[""] = array();
	$pageTitlesBD_Retornados[""] = array();
	if (count($fieldToolTipsBD_Retornados[""]))
		$tdataBD_Retornados[".isUseToolTips"] = true;
}


	$tdataBD_Retornados[".NCSearch"] = true;



$tdataBD_Retornados[".shortTableName"] = "BD_Retornados";
$tdataBD_Retornados[".nSecOptions"] = 0;
$tdataBD_Retornados[".recsPerRowPrint"] = 1;
$tdataBD_Retornados[".mainTableOwnerID"] = "";
$tdataBD_Retornados[".moveNext"] = 1;
$tdataBD_Retornados[".entityType"] = 2;

$tdataBD_Retornados[".strOriginalTableName"] = "retornados";

	



$tdataBD_Retornados[".showAddInPopup"] = false;

$tdataBD_Retornados[".showEditInPopup"] = false;

$tdataBD_Retornados[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBD_Retornados[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBD_Retornados[".fieldsForRegister"] = array();

$tdataBD_Retornados[".listAjax"] = false;

	$tdataBD_Retornados[".audit"] = false;

	$tdataBD_Retornados[".locking"] = false;



$tdataBD_Retornados[".list"] = true;



$tdataBD_Retornados[".reorderRecordsByHeader"] = true;





$tdataBD_Retornados[".exportTo"] = true;

$tdataBD_Retornados[".printFriendly"] = true;


$tdataBD_Retornados[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataBD_Retornados[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataBD_Retornados[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataBD_Retornados[".searchSaving"] = false;
//

$tdataBD_Retornados[".showSearchPanel"] = true;
		$tdataBD_Retornados[".flexibleSearch"] = true;

$tdataBD_Retornados[".isUseAjaxSuggest"] = true;






$tdataBD_Retornados[".ajaxCodeSnippetAdded"] = false;

$tdataBD_Retornados[".buttonsAdded"] = false;

$tdataBD_Retornados[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBD_Retornados[".isUseTimeForSearch"] = false;





$tdataBD_Retornados[".allSearchFields"] = array();
$tdataBD_Retornados[".filterFields"] = array();
$tdataBD_Retornados[".requiredSearchFields"] = array();

$tdataBD_Retornados[".allSearchFields"][] = "año";
	$tdataBD_Retornados[".allSearchFields"][] = "mes";
	$tdataBD_Retornados[".allSearchFields"][] = "fechaentrevista";
	$tdataBD_Retornados[".allSearchFields"][] = "tipoentrevista";
	$tdataBD_Retornados[".allSearchFields"][] = "ficha";
	$tdataBD_Retornados[".allSearchFields"][] = "numalien";
	$tdataBD_Retornados[".allSearchFields"][] = "fechanacimiento";
	$tdataBD_Retornados[".allSearchFields"][] = "documentoficha";
	$tdataBD_Retornados[".allSearchFields"][] = "numerodocumento";
	$tdataBD_Retornados[".allSearchFields"][] = "nombredocumento";
	$tdataBD_Retornados[".allSearchFields"][] = "consulado";
	$tdataBD_Retornados[".allSearchFields"][] = "consulado_analisis";
	$tdataBD_Retornados[".allSearchFields"][] = "departamento";
	$tdataBD_Retornados[".allSearchFields"][] = "municipio";
	$tdataBD_Retornados[".allSearchFields"][] = "sexo";
	$tdataBD_Retornados[".allSearchFields"][] = "edad";
	$tdataBD_Retornados[".allSearchFields"][] = "rango_etario";
	$tdataBD_Retornados[".allSearchFields"][] = "tipoedad";
	$tdataBD_Retornados[".allSearchFields"][] = "paisrepatriacion";
	$tdataBD_Retornados[".allSearchFields"][] = "regionrepatriacion";
	$tdataBD_Retornados[".allSearchFields"][] = "antecedentes_penales";
	$tdataBD_Retornados[".allSearchFields"][] = "tipo_antecedentes";
	$tdataBD_Retornados[".allSearchFields"][] = "antecedentes";
	$tdataBD_Retornados[".allSearchFields"][] = "sectorppd";
	$tdataBD_Retornados[".allSearchFields"][] = "num_mes";
	$tdataBD_Retornados[".allSearchFields"][] = "antecedente_analisis";
	

$tdataBD_Retornados[".googleLikeFields"] = array();
$tdataBD_Retornados[".googleLikeFields"][] = "año";
$tdataBD_Retornados[".googleLikeFields"][] = "mes";
$tdataBD_Retornados[".googleLikeFields"][] = "fechaentrevista";
$tdataBD_Retornados[".googleLikeFields"][] = "tipoentrevista";
$tdataBD_Retornados[".googleLikeFields"][] = "ficha";
$tdataBD_Retornados[".googleLikeFields"][] = "numalien";
$tdataBD_Retornados[".googleLikeFields"][] = "fechanacimiento";
$tdataBD_Retornados[".googleLikeFields"][] = "documentoficha";
$tdataBD_Retornados[".googleLikeFields"][] = "numerodocumento";
$tdataBD_Retornados[".googleLikeFields"][] = "nombredocumento";
$tdataBD_Retornados[".googleLikeFields"][] = "consulado";
$tdataBD_Retornados[".googleLikeFields"][] = "consulado_analisis";
$tdataBD_Retornados[".googleLikeFields"][] = "departamento";
$tdataBD_Retornados[".googleLikeFields"][] = "municipio";
$tdataBD_Retornados[".googleLikeFields"][] = "sexo";
$tdataBD_Retornados[".googleLikeFields"][] = "edad";
$tdataBD_Retornados[".googleLikeFields"][] = "rango_etario";
$tdataBD_Retornados[".googleLikeFields"][] = "tipoedad";
$tdataBD_Retornados[".googleLikeFields"][] = "paisrepatriacion";
$tdataBD_Retornados[".googleLikeFields"][] = "regionrepatriacion";
$tdataBD_Retornados[".googleLikeFields"][] = "antecedentes_penales";
$tdataBD_Retornados[".googleLikeFields"][] = "tipo_antecedentes";
$tdataBD_Retornados[".googleLikeFields"][] = "antecedentes";
$tdataBD_Retornados[".googleLikeFields"][] = "sectorppd";
$tdataBD_Retornados[".googleLikeFields"][] = "num_mes";
$tdataBD_Retornados[".googleLikeFields"][] = "antecedente_analisis";


$tdataBD_Retornados[".advSearchFields"] = array();
$tdataBD_Retornados[".advSearchFields"][] = "año";
$tdataBD_Retornados[".advSearchFields"][] = "mes";
$tdataBD_Retornados[".advSearchFields"][] = "fechaentrevista";
$tdataBD_Retornados[".advSearchFields"][] = "tipoentrevista";
$tdataBD_Retornados[".advSearchFields"][] = "ficha";
$tdataBD_Retornados[".advSearchFields"][] = "numalien";
$tdataBD_Retornados[".advSearchFields"][] = "fechanacimiento";
$tdataBD_Retornados[".advSearchFields"][] = "documentoficha";
$tdataBD_Retornados[".advSearchFields"][] = "numerodocumento";
$tdataBD_Retornados[".advSearchFields"][] = "nombredocumento";
$tdataBD_Retornados[".advSearchFields"][] = "consulado";
$tdataBD_Retornados[".advSearchFields"][] = "consulado_analisis";
$tdataBD_Retornados[".advSearchFields"][] = "departamento";
$tdataBD_Retornados[".advSearchFields"][] = "municipio";
$tdataBD_Retornados[".advSearchFields"][] = "sexo";
$tdataBD_Retornados[".advSearchFields"][] = "edad";
$tdataBD_Retornados[".advSearchFields"][] = "rango_etario";
$tdataBD_Retornados[".advSearchFields"][] = "tipoedad";
$tdataBD_Retornados[".advSearchFields"][] = "paisrepatriacion";
$tdataBD_Retornados[".advSearchFields"][] = "regionrepatriacion";
$tdataBD_Retornados[".advSearchFields"][] = "antecedentes_penales";
$tdataBD_Retornados[".advSearchFields"][] = "tipo_antecedentes";
$tdataBD_Retornados[".advSearchFields"][] = "antecedentes";
$tdataBD_Retornados[".advSearchFields"][] = "sectorppd";
$tdataBD_Retornados[".advSearchFields"][] = "num_mes";
$tdataBD_Retornados[".advSearchFields"][] = "antecedente_analisis";

$tdataBD_Retornados[".tableType"] = "report";

$tdataBD_Retornados[".printerPageOrientation"] = 0;
$tdataBD_Retornados[".nPrinterPageScale"] = 100;

$tdataBD_Retornados[".nPrinterSplitRecords"] = 40;

$tdataBD_Retornados[".nPrinterPDFSplitRecords"] = 40;



$tdataBD_Retornados[".geocodingEnabled"] = false;

//report settings
$tdataBD_Retornados[".printReportLayout"] = 6;

$tdataBD_Retornados[".reportPrintPartitionType"] = 1;
$tdataBD_Retornados[".reportPrintGroupsPerPage"] = 40;
$tdataBD_Retornados[".reportPrintPDFGroupsPerPage"] = 40;
$tdataBD_Retornados[".lowGroup"] = 0;



$tdataBD_Retornados[".pageSize"] = 20;






$tdataBD_Retornados[".repShowDet"] = true;

$tdataBD_Retornados[".reportLayout"] = 6;

//end of report settings




$tdataBD_Retornados[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBD_Retornados[".strOrderBy"] = $tstrOrderBy;

$tdataBD_Retornados[".orderindexes"] = array();

$tdataBD_Retornados[".sqlHead"] = "SELECT `año`,  	mes,  	fechaentrevista,  	tipoentrevista,  	ficha,  	numalien,  	fechanacimiento,  	documentoficha,  	numerodocumento,  	nombredocumento,  	consulado,  	consulado_analisis,  	departamento,  	municipio,  	sexo,  	edad,  	rango_etario,  	tipoedad,  	paisrepatriacion,  	regionrepatriacion,  	antecedentes_penales,  	tipo_antecedentes,  	antecedentes,  	sectorppd,  	num_mes,  	antecedente_analisis";
$tdataBD_Retornados[".sqlFrom"] = "FROM retornados";
$tdataBD_Retornados[".sqlWhereExpr"] = "";
$tdataBD_Retornados[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBD_Retornados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBD_Retornados[".arrGroupsPerPage"] = $arrGPP;

$tdataBD_Retornados[".highlightSearchResults"] = true;

$tableKeysBD_Retornados = array();
$tdataBD_Retornados[".Keys"] = $tableKeysBD_Retornados;

$tdataBD_Retornados[".listFields"] = array();
$tdataBD_Retornados[".listFields"][] = "año";
$tdataBD_Retornados[".listFields"][] = "mes";
$tdataBD_Retornados[".listFields"][] = "fechaentrevista";
$tdataBD_Retornados[".listFields"][] = "tipoentrevista";
$tdataBD_Retornados[".listFields"][] = "ficha";
$tdataBD_Retornados[".listFields"][] = "numalien";
$tdataBD_Retornados[".listFields"][] = "fechanacimiento";
$tdataBD_Retornados[".listFields"][] = "documentoficha";
$tdataBD_Retornados[".listFields"][] = "numerodocumento";
$tdataBD_Retornados[".listFields"][] = "nombredocumento";
$tdataBD_Retornados[".listFields"][] = "consulado";
$tdataBD_Retornados[".listFields"][] = "consulado_analisis";
$tdataBD_Retornados[".listFields"][] = "departamento";
$tdataBD_Retornados[".listFields"][] = "municipio";
$tdataBD_Retornados[".listFields"][] = "sexo";
$tdataBD_Retornados[".listFields"][] = "edad";
$tdataBD_Retornados[".listFields"][] = "rango_etario";
$tdataBD_Retornados[".listFields"][] = "tipoedad";
$tdataBD_Retornados[".listFields"][] = "paisrepatriacion";
$tdataBD_Retornados[".listFields"][] = "regionrepatriacion";
$tdataBD_Retornados[".listFields"][] = "antecedentes_penales";
$tdataBD_Retornados[".listFields"][] = "tipo_antecedentes";
$tdataBD_Retornados[".listFields"][] = "antecedentes";
$tdataBD_Retornados[".listFields"][] = "sectorppd";
$tdataBD_Retornados[".listFields"][] = "num_mes";
$tdataBD_Retornados[".listFields"][] = "antecedente_analisis";

$tdataBD_Retornados[".hideMobileList"] = array();


$tdataBD_Retornados[".viewFields"] = array();
$tdataBD_Retornados[".viewFields"][] = "año";
$tdataBD_Retornados[".viewFields"][] = "mes";
$tdataBD_Retornados[".viewFields"][] = "fechaentrevista";
$tdataBD_Retornados[".viewFields"][] = "tipoentrevista";
$tdataBD_Retornados[".viewFields"][] = "ficha";
$tdataBD_Retornados[".viewFields"][] = "numalien";
$tdataBD_Retornados[".viewFields"][] = "fechanacimiento";
$tdataBD_Retornados[".viewFields"][] = "documentoficha";
$tdataBD_Retornados[".viewFields"][] = "numerodocumento";
$tdataBD_Retornados[".viewFields"][] = "nombredocumento";
$tdataBD_Retornados[".viewFields"][] = "consulado";
$tdataBD_Retornados[".viewFields"][] = "consulado_analisis";
$tdataBD_Retornados[".viewFields"][] = "departamento";
$tdataBD_Retornados[".viewFields"][] = "municipio";
$tdataBD_Retornados[".viewFields"][] = "sexo";
$tdataBD_Retornados[".viewFields"][] = "edad";
$tdataBD_Retornados[".viewFields"][] = "rango_etario";
$tdataBD_Retornados[".viewFields"][] = "tipoedad";
$tdataBD_Retornados[".viewFields"][] = "paisrepatriacion";
$tdataBD_Retornados[".viewFields"][] = "regionrepatriacion";
$tdataBD_Retornados[".viewFields"][] = "antecedentes_penales";
$tdataBD_Retornados[".viewFields"][] = "tipo_antecedentes";
$tdataBD_Retornados[".viewFields"][] = "antecedentes";
$tdataBD_Retornados[".viewFields"][] = "sectorppd";
$tdataBD_Retornados[".viewFields"][] = "num_mes";
$tdataBD_Retornados[".viewFields"][] = "antecedente_analisis";

$tdataBD_Retornados[".addFields"] = array();
$tdataBD_Retornados[".addFields"][] = "año";
$tdataBD_Retornados[".addFields"][] = "mes";
$tdataBD_Retornados[".addFields"][] = "fechaentrevista";
$tdataBD_Retornados[".addFields"][] = "tipoentrevista";
$tdataBD_Retornados[".addFields"][] = "ficha";
$tdataBD_Retornados[".addFields"][] = "numalien";
$tdataBD_Retornados[".addFields"][] = "fechanacimiento";
$tdataBD_Retornados[".addFields"][] = "documentoficha";
$tdataBD_Retornados[".addFields"][] = "numerodocumento";
$tdataBD_Retornados[".addFields"][] = "nombredocumento";
$tdataBD_Retornados[".addFields"][] = "consulado";
$tdataBD_Retornados[".addFields"][] = "consulado_analisis";
$tdataBD_Retornados[".addFields"][] = "departamento";
$tdataBD_Retornados[".addFields"][] = "municipio";
$tdataBD_Retornados[".addFields"][] = "sexo";
$tdataBD_Retornados[".addFields"][] = "edad";
$tdataBD_Retornados[".addFields"][] = "rango_etario";
$tdataBD_Retornados[".addFields"][] = "tipoedad";
$tdataBD_Retornados[".addFields"][] = "paisrepatriacion";
$tdataBD_Retornados[".addFields"][] = "regionrepatriacion";
$tdataBD_Retornados[".addFields"][] = "antecedentes_penales";
$tdataBD_Retornados[".addFields"][] = "tipo_antecedentes";
$tdataBD_Retornados[".addFields"][] = "antecedentes";
$tdataBD_Retornados[".addFields"][] = "sectorppd";
$tdataBD_Retornados[".addFields"][] = "num_mes";
$tdataBD_Retornados[".addFields"][] = "antecedente_analisis";

$tdataBD_Retornados[".masterListFields"] = array();
$tdataBD_Retornados[".masterListFields"][] = "año";
$tdataBD_Retornados[".masterListFields"][] = "mes";
$tdataBD_Retornados[".masterListFields"][] = "fechaentrevista";
$tdataBD_Retornados[".masterListFields"][] = "tipoentrevista";
$tdataBD_Retornados[".masterListFields"][] = "ficha";
$tdataBD_Retornados[".masterListFields"][] = "numalien";
$tdataBD_Retornados[".masterListFields"][] = "fechanacimiento";
$tdataBD_Retornados[".masterListFields"][] = "documentoficha";
$tdataBD_Retornados[".masterListFields"][] = "numerodocumento";
$tdataBD_Retornados[".masterListFields"][] = "nombredocumento";
$tdataBD_Retornados[".masterListFields"][] = "consulado";
$tdataBD_Retornados[".masterListFields"][] = "consulado_analisis";
$tdataBD_Retornados[".masterListFields"][] = "departamento";
$tdataBD_Retornados[".masterListFields"][] = "municipio";
$tdataBD_Retornados[".masterListFields"][] = "sexo";
$tdataBD_Retornados[".masterListFields"][] = "edad";
$tdataBD_Retornados[".masterListFields"][] = "rango_etario";
$tdataBD_Retornados[".masterListFields"][] = "tipoedad";
$tdataBD_Retornados[".masterListFields"][] = "paisrepatriacion";
$tdataBD_Retornados[".masterListFields"][] = "regionrepatriacion";
$tdataBD_Retornados[".masterListFields"][] = "antecedentes_penales";
$tdataBD_Retornados[".masterListFields"][] = "tipo_antecedentes";
$tdataBD_Retornados[".masterListFields"][] = "antecedentes";
$tdataBD_Retornados[".masterListFields"][] = "sectorppd";
$tdataBD_Retornados[".masterListFields"][] = "num_mes";
$tdataBD_Retornados[".masterListFields"][] = "antecedente_analisis";

$tdataBD_Retornados[".inlineAddFields"] = array();
$tdataBD_Retornados[".inlineAddFields"][] = "año";
$tdataBD_Retornados[".inlineAddFields"][] = "mes";
$tdataBD_Retornados[".inlineAddFields"][] = "fechaentrevista";
$tdataBD_Retornados[".inlineAddFields"][] = "tipoentrevista";
$tdataBD_Retornados[".inlineAddFields"][] = "ficha";
$tdataBD_Retornados[".inlineAddFields"][] = "numalien";
$tdataBD_Retornados[".inlineAddFields"][] = "fechanacimiento";
$tdataBD_Retornados[".inlineAddFields"][] = "documentoficha";
$tdataBD_Retornados[".inlineAddFields"][] = "numerodocumento";
$tdataBD_Retornados[".inlineAddFields"][] = "nombredocumento";
$tdataBD_Retornados[".inlineAddFields"][] = "consulado";
$tdataBD_Retornados[".inlineAddFields"][] = "consulado_analisis";
$tdataBD_Retornados[".inlineAddFields"][] = "departamento";
$tdataBD_Retornados[".inlineAddFields"][] = "municipio";
$tdataBD_Retornados[".inlineAddFields"][] = "sexo";
$tdataBD_Retornados[".inlineAddFields"][] = "edad";
$tdataBD_Retornados[".inlineAddFields"][] = "rango_etario";
$tdataBD_Retornados[".inlineAddFields"][] = "tipoedad";
$tdataBD_Retornados[".inlineAddFields"][] = "paisrepatriacion";
$tdataBD_Retornados[".inlineAddFields"][] = "regionrepatriacion";
$tdataBD_Retornados[".inlineAddFields"][] = "antecedentes_penales";
$tdataBD_Retornados[".inlineAddFields"][] = "tipo_antecedentes";
$tdataBD_Retornados[".inlineAddFields"][] = "antecedentes";
$tdataBD_Retornados[".inlineAddFields"][] = "sectorppd";
$tdataBD_Retornados[".inlineAddFields"][] = "num_mes";
$tdataBD_Retornados[".inlineAddFields"][] = "antecedente_analisis";

$tdataBD_Retornados[".editFields"] = array();
$tdataBD_Retornados[".editFields"][] = "año";
$tdataBD_Retornados[".editFields"][] = "mes";
$tdataBD_Retornados[".editFields"][] = "fechaentrevista";
$tdataBD_Retornados[".editFields"][] = "tipoentrevista";
$tdataBD_Retornados[".editFields"][] = "ficha";
$tdataBD_Retornados[".editFields"][] = "numalien";
$tdataBD_Retornados[".editFields"][] = "fechanacimiento";
$tdataBD_Retornados[".editFields"][] = "documentoficha";
$tdataBD_Retornados[".editFields"][] = "numerodocumento";
$tdataBD_Retornados[".editFields"][] = "nombredocumento";
$tdataBD_Retornados[".editFields"][] = "consulado";
$tdataBD_Retornados[".editFields"][] = "consulado_analisis";
$tdataBD_Retornados[".editFields"][] = "departamento";
$tdataBD_Retornados[".editFields"][] = "municipio";
$tdataBD_Retornados[".editFields"][] = "sexo";
$tdataBD_Retornados[".editFields"][] = "edad";
$tdataBD_Retornados[".editFields"][] = "rango_etario";
$tdataBD_Retornados[".editFields"][] = "tipoedad";
$tdataBD_Retornados[".editFields"][] = "paisrepatriacion";
$tdataBD_Retornados[".editFields"][] = "regionrepatriacion";
$tdataBD_Retornados[".editFields"][] = "antecedentes_penales";
$tdataBD_Retornados[".editFields"][] = "tipo_antecedentes";
$tdataBD_Retornados[".editFields"][] = "antecedentes";
$tdataBD_Retornados[".editFields"][] = "sectorppd";
$tdataBD_Retornados[".editFields"][] = "num_mes";
$tdataBD_Retornados[".editFields"][] = "antecedente_analisis";

$tdataBD_Retornados[".inlineEditFields"] = array();
$tdataBD_Retornados[".inlineEditFields"][] = "año";
$tdataBD_Retornados[".inlineEditFields"][] = "mes";
$tdataBD_Retornados[".inlineEditFields"][] = "fechaentrevista";
$tdataBD_Retornados[".inlineEditFields"][] = "tipoentrevista";
$tdataBD_Retornados[".inlineEditFields"][] = "ficha";
$tdataBD_Retornados[".inlineEditFields"][] = "numalien";
$tdataBD_Retornados[".inlineEditFields"][] = "fechanacimiento";
$tdataBD_Retornados[".inlineEditFields"][] = "documentoficha";
$tdataBD_Retornados[".inlineEditFields"][] = "numerodocumento";
$tdataBD_Retornados[".inlineEditFields"][] = "nombredocumento";
$tdataBD_Retornados[".inlineEditFields"][] = "consulado";
$tdataBD_Retornados[".inlineEditFields"][] = "consulado_analisis";
$tdataBD_Retornados[".inlineEditFields"][] = "departamento";
$tdataBD_Retornados[".inlineEditFields"][] = "municipio";
$tdataBD_Retornados[".inlineEditFields"][] = "sexo";
$tdataBD_Retornados[".inlineEditFields"][] = "edad";
$tdataBD_Retornados[".inlineEditFields"][] = "rango_etario";
$tdataBD_Retornados[".inlineEditFields"][] = "tipoedad";
$tdataBD_Retornados[".inlineEditFields"][] = "paisrepatriacion";
$tdataBD_Retornados[".inlineEditFields"][] = "regionrepatriacion";
$tdataBD_Retornados[".inlineEditFields"][] = "antecedentes_penales";
$tdataBD_Retornados[".inlineEditFields"][] = "tipo_antecedentes";
$tdataBD_Retornados[".inlineEditFields"][] = "antecedentes";
$tdataBD_Retornados[".inlineEditFields"][] = "sectorppd";
$tdataBD_Retornados[".inlineEditFields"][] = "num_mes";
$tdataBD_Retornados[".inlineEditFields"][] = "antecedente_analisis";

$tdataBD_Retornados[".updateSelectedFields"] = array();
$tdataBD_Retornados[".updateSelectedFields"][] = "año";
$tdataBD_Retornados[".updateSelectedFields"][] = "mes";
$tdataBD_Retornados[".updateSelectedFields"][] = "fechaentrevista";
$tdataBD_Retornados[".updateSelectedFields"][] = "tipoentrevista";
$tdataBD_Retornados[".updateSelectedFields"][] = "ficha";
$tdataBD_Retornados[".updateSelectedFields"][] = "numalien";
$tdataBD_Retornados[".updateSelectedFields"][] = "fechanacimiento";
$tdataBD_Retornados[".updateSelectedFields"][] = "documentoficha";
$tdataBD_Retornados[".updateSelectedFields"][] = "numerodocumento";
$tdataBD_Retornados[".updateSelectedFields"][] = "nombredocumento";
$tdataBD_Retornados[".updateSelectedFields"][] = "consulado";
$tdataBD_Retornados[".updateSelectedFields"][] = "consulado_analisis";
$tdataBD_Retornados[".updateSelectedFields"][] = "departamento";
$tdataBD_Retornados[".updateSelectedFields"][] = "municipio";
$tdataBD_Retornados[".updateSelectedFields"][] = "sexo";
$tdataBD_Retornados[".updateSelectedFields"][] = "edad";
$tdataBD_Retornados[".updateSelectedFields"][] = "rango_etario";
$tdataBD_Retornados[".updateSelectedFields"][] = "tipoedad";
$tdataBD_Retornados[".updateSelectedFields"][] = "paisrepatriacion";
$tdataBD_Retornados[".updateSelectedFields"][] = "regionrepatriacion";
$tdataBD_Retornados[".updateSelectedFields"][] = "antecedentes_penales";
$tdataBD_Retornados[".updateSelectedFields"][] = "tipo_antecedentes";
$tdataBD_Retornados[".updateSelectedFields"][] = "antecedentes";
$tdataBD_Retornados[".updateSelectedFields"][] = "sectorppd";
$tdataBD_Retornados[".updateSelectedFields"][] = "num_mes";
$tdataBD_Retornados[".updateSelectedFields"][] = "antecedente_analisis";


$tdataBD_Retornados[".exportFields"] = array();
$tdataBD_Retornados[".exportFields"][] = "año";
$tdataBD_Retornados[".exportFields"][] = "mes";
$tdataBD_Retornados[".exportFields"][] = "fechaentrevista";
$tdataBD_Retornados[".exportFields"][] = "tipoentrevista";
$tdataBD_Retornados[".exportFields"][] = "ficha";
$tdataBD_Retornados[".exportFields"][] = "numalien";
$tdataBD_Retornados[".exportFields"][] = "fechanacimiento";
$tdataBD_Retornados[".exportFields"][] = "documentoficha";
$tdataBD_Retornados[".exportFields"][] = "numerodocumento";
$tdataBD_Retornados[".exportFields"][] = "nombredocumento";
$tdataBD_Retornados[".exportFields"][] = "consulado";
$tdataBD_Retornados[".exportFields"][] = "consulado_analisis";
$tdataBD_Retornados[".exportFields"][] = "departamento";
$tdataBD_Retornados[".exportFields"][] = "municipio";
$tdataBD_Retornados[".exportFields"][] = "sexo";
$tdataBD_Retornados[".exportFields"][] = "edad";
$tdataBD_Retornados[".exportFields"][] = "rango_etario";
$tdataBD_Retornados[".exportFields"][] = "tipoedad";
$tdataBD_Retornados[".exportFields"][] = "paisrepatriacion";
$tdataBD_Retornados[".exportFields"][] = "regionrepatriacion";
$tdataBD_Retornados[".exportFields"][] = "antecedentes_penales";
$tdataBD_Retornados[".exportFields"][] = "tipo_antecedentes";
$tdataBD_Retornados[".exportFields"][] = "antecedentes";
$tdataBD_Retornados[".exportFields"][] = "sectorppd";
$tdataBD_Retornados[".exportFields"][] = "num_mes";
$tdataBD_Retornados[".exportFields"][] = "antecedente_analisis";

$tdataBD_Retornados[".importFields"] = array();
$tdataBD_Retornados[".importFields"][] = "año";
$tdataBD_Retornados[".importFields"][] = "mes";
$tdataBD_Retornados[".importFields"][] = "fechaentrevista";
$tdataBD_Retornados[".importFields"][] = "tipoentrevista";
$tdataBD_Retornados[".importFields"][] = "ficha";
$tdataBD_Retornados[".importFields"][] = "numalien";
$tdataBD_Retornados[".importFields"][] = "fechanacimiento";
$tdataBD_Retornados[".importFields"][] = "documentoficha";
$tdataBD_Retornados[".importFields"][] = "numerodocumento";
$tdataBD_Retornados[".importFields"][] = "nombredocumento";
$tdataBD_Retornados[".importFields"][] = "consulado";
$tdataBD_Retornados[".importFields"][] = "consulado_analisis";
$tdataBD_Retornados[".importFields"][] = "departamento";
$tdataBD_Retornados[".importFields"][] = "municipio";
$tdataBD_Retornados[".importFields"][] = "sexo";
$tdataBD_Retornados[".importFields"][] = "edad";
$tdataBD_Retornados[".importFields"][] = "rango_etario";
$tdataBD_Retornados[".importFields"][] = "tipoedad";
$tdataBD_Retornados[".importFields"][] = "paisrepatriacion";
$tdataBD_Retornados[".importFields"][] = "regionrepatriacion";
$tdataBD_Retornados[".importFields"][] = "antecedentes_penales";
$tdataBD_Retornados[".importFields"][] = "tipo_antecedentes";
$tdataBD_Retornados[".importFields"][] = "antecedentes";
$tdataBD_Retornados[".importFields"][] = "sectorppd";
$tdataBD_Retornados[".importFields"][] = "num_mes";
$tdataBD_Retornados[".importFields"][] = "antecedente_analisis";

$tdataBD_Retornados[".printFields"] = array();
$tdataBD_Retornados[".printFields"][] = "año";
$tdataBD_Retornados[".printFields"][] = "mes";
$tdataBD_Retornados[".printFields"][] = "fechaentrevista";
$tdataBD_Retornados[".printFields"][] = "tipoentrevista";
$tdataBD_Retornados[".printFields"][] = "ficha";
$tdataBD_Retornados[".printFields"][] = "numalien";
$tdataBD_Retornados[".printFields"][] = "fechanacimiento";
$tdataBD_Retornados[".printFields"][] = "documentoficha";
$tdataBD_Retornados[".printFields"][] = "numerodocumento";
$tdataBD_Retornados[".printFields"][] = "nombredocumento";
$tdataBD_Retornados[".printFields"][] = "consulado";
$tdataBD_Retornados[".printFields"][] = "consulado_analisis";
$tdataBD_Retornados[".printFields"][] = "departamento";
$tdataBD_Retornados[".printFields"][] = "municipio";
$tdataBD_Retornados[".printFields"][] = "sexo";
$tdataBD_Retornados[".printFields"][] = "edad";
$tdataBD_Retornados[".printFields"][] = "rango_etario";
$tdataBD_Retornados[".printFields"][] = "tipoedad";
$tdataBD_Retornados[".printFields"][] = "paisrepatriacion";
$tdataBD_Retornados[".printFields"][] = "regionrepatriacion";
$tdataBD_Retornados[".printFields"][] = "antecedentes_penales";
$tdataBD_Retornados[".printFields"][] = "tipo_antecedentes";
$tdataBD_Retornados[".printFields"][] = "antecedentes";
$tdataBD_Retornados[".printFields"][] = "sectorppd";
$tdataBD_Retornados[".printFields"][] = "num_mes";
$tdataBD_Retornados[".printFields"][] = "antecedente_analisis";

//	año
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "año";
	$fdata["GoodName"] = "a_o";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","a_o");
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

		$fdata["strField"] = "año";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`año`";

	
	
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




	$tdataBD_Retornados["año"] = $fdata;
//	mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "mes";
	$fdata["GoodName"] = "mes";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","mes");
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

		$fdata["strField"] = "mes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mes";

	
	
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




	$tdataBD_Retornados["mes"] = $fdata;
//	fechaentrevista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fechaentrevista";
	$fdata["GoodName"] = "fechaentrevista";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","fechaentrevista");
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

		$fdata["strField"] = "fechaentrevista";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fechaentrevista";

	
	
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




	$tdataBD_Retornados["fechaentrevista"] = $fdata;
//	tipoentrevista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tipoentrevista";
	$fdata["GoodName"] = "tipoentrevista";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","tipoentrevista");
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

		$fdata["strField"] = "tipoentrevista";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipoentrevista";

	
	
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




	$tdataBD_Retornados["tipoentrevista"] = $fdata;
//	ficha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ficha";
	$fdata["GoodName"] = "ficha";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","ficha");
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




	$tdataBD_Retornados["ficha"] = $fdata;
//	numalien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "numalien";
	$fdata["GoodName"] = "numalien";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","numalien");
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

		$fdata["strField"] = "numalien";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numalien";

	
	
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




	$tdataBD_Retornados["numalien"] = $fdata;
//	fechanacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fechanacimiento";
	$fdata["GoodName"] = "fechanacimiento";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","fechanacimiento");
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

		$fdata["strField"] = "fechanacimiento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fechanacimiento";

	
	
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




	$tdataBD_Retornados["fechanacimiento"] = $fdata;
//	documentoficha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "documentoficha";
	$fdata["GoodName"] = "documentoficha";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","documentoficha");
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

		$fdata["strField"] = "documentoficha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documentoficha";

	
	
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




	$tdataBD_Retornados["documentoficha"] = $fdata;
//	numerodocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "numerodocumento";
	$fdata["GoodName"] = "numerodocumento";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","numerodocumento");
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

		$fdata["strField"] = "numerodocumento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numerodocumento";

	
	
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




	$tdataBD_Retornados["numerodocumento"] = $fdata;
//	nombredocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "nombredocumento";
	$fdata["GoodName"] = "nombredocumento";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","nombredocumento");
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

		$fdata["strField"] = "nombredocumento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombredocumento";

	
	
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




	$tdataBD_Retornados["nombredocumento"] = $fdata;
//	consulado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "consulado";
	$fdata["GoodName"] = "consulado";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","consulado");
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

		$fdata["strField"] = "consulado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "consulado";

	
	
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




	$tdataBD_Retornados["consulado"] = $fdata;
//	consulado_analisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "consulado_analisis";
	$fdata["GoodName"] = "consulado_analisis";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","consulado_analisis");
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

		$fdata["strField"] = "consulado_analisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "consulado_analisis";

	
	
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




	$tdataBD_Retornados["consulado_analisis"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","departamento");
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

		$fdata["strField"] = "departamento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "departamento";

	
	
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




	$tdataBD_Retornados["departamento"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","municipio");
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

		$fdata["strField"] = "municipio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "municipio";

	
	
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




	$tdataBD_Retornados["municipio"] = $fdata;
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","sexo");
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

		$fdata["strField"] = "sexo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sexo";

	
	
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




	$tdataBD_Retornados["sexo"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","edad");
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




	$tdataBD_Retornados["edad"] = $fdata;
//	rango_etario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "rango_etario";
	$fdata["GoodName"] = "rango_etario";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","rango_etario");
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

		$fdata["strField"] = "rango_etario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rango_etario";

	
	
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




	$tdataBD_Retornados["rango_etario"] = $fdata;
//	tipoedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "tipoedad";
	$fdata["GoodName"] = "tipoedad";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","tipoedad");
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

		$fdata["strField"] = "tipoedad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipoedad";

	
	
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




	$tdataBD_Retornados["tipoedad"] = $fdata;
//	paisrepatriacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "paisrepatriacion";
	$fdata["GoodName"] = "paisrepatriacion";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","paisrepatriacion");
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

		$fdata["strField"] = "paisrepatriacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paisrepatriacion";

	
	
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




	$tdataBD_Retornados["paisrepatriacion"] = $fdata;
//	regionrepatriacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "regionrepatriacion";
	$fdata["GoodName"] = "regionrepatriacion";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","regionrepatriacion");
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

		$fdata["strField"] = "regionrepatriacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "regionrepatriacion";

	
	
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




	$tdataBD_Retornados["regionrepatriacion"] = $fdata;
//	antecedentes_penales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "antecedentes_penales";
	$fdata["GoodName"] = "antecedentes_penales";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","antecedentes_penales");
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

		$fdata["strField"] = "antecedentes_penales";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "antecedentes_penales";

	
	
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




	$tdataBD_Retornados["antecedentes_penales"] = $fdata;
//	tipo_antecedentes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "tipo_antecedentes";
	$fdata["GoodName"] = "tipo_antecedentes";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","tipo_antecedentes");
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

		$fdata["strField"] = "tipo_antecedentes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_antecedentes";

	
	
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




	$tdataBD_Retornados["tipo_antecedentes"] = $fdata;
//	antecedentes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "antecedentes";
	$fdata["GoodName"] = "antecedentes";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","antecedentes");
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

		$fdata["strField"] = "antecedentes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "antecedentes";

	
	
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




	$tdataBD_Retornados["antecedentes"] = $fdata;
//	sectorppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "sectorppd";
	$fdata["GoodName"] = "sectorppd";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","sectorppd");
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

		$fdata["strField"] = "sectorppd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sectorppd";

	
	
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




	$tdataBD_Retornados["sectorppd"] = $fdata;
//	num_mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "num_mes";
	$fdata["GoodName"] = "num_mes";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","num_mes");
	$fdata["FieldType"] = 3;

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

		$fdata["strField"] = "num_mes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "num_mes";

	
	
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




	$tdataBD_Retornados["num_mes"] = $fdata;
//	antecedente_analisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "antecedente_analisis";
	$fdata["GoodName"] = "antecedente_analisis";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("BD_Retornados","antecedente_analisis");
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

		$fdata["strField"] = "antecedente_analisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "antecedente_analisis";

	
	
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




	$tdataBD_Retornados["antecedente_analisis"] = $fdata;


$tables_data["BD Retornados"]=&$tdataBD_Retornados;
$field_labels["BD_Retornados"] = &$fieldLabelsBD_Retornados;
$fieldToolTips["BD_Retornados"] = &$fieldToolTipsBD_Retornados;
$placeHolders["BD_Retornados"] = &$placeHoldersBD_Retornados;
$page_titles["BD_Retornados"] = &$pageTitlesBD_Retornados;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BD Retornados"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["BD Retornados"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BD_Retornados()
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
	"m_srcTableName" => "BD Retornados"
));

$proto6["m_sql"] = "`año`";
$proto6["m_srcTableName"] = "BD Retornados";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "mes",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto8["m_sql"] = "mes";
$proto8["m_srcTableName"] = "BD Retornados";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fechaentrevista",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto10["m_sql"] = "fechaentrevista";
$proto10["m_srcTableName"] = "BD Retornados";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "tipoentrevista",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto12["m_sql"] = "tipoentrevista";
$proto12["m_srcTableName"] = "BD Retornados";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ficha",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto14["m_sql"] = "ficha";
$proto14["m_srcTableName"] = "BD Retornados";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "numalien",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto16["m_sql"] = "numalien";
$proto16["m_srcTableName"] = "BD Retornados";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fechanacimiento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto18["m_sql"] = "fechanacimiento";
$proto18["m_srcTableName"] = "BD Retornados";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "documentoficha",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto20["m_sql"] = "documentoficha";
$proto20["m_srcTableName"] = "BD Retornados";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "numerodocumento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto22["m_sql"] = "numerodocumento";
$proto22["m_srcTableName"] = "BD Retornados";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "nombredocumento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto24["m_sql"] = "nombredocumento";
$proto24["m_srcTableName"] = "BD Retornados";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "consulado",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto26["m_sql"] = "consulado";
$proto26["m_srcTableName"] = "BD Retornados";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "consulado_analisis",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto28["m_sql"] = "consulado_analisis";
$proto28["m_srcTableName"] = "BD Retornados";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto30["m_sql"] = "departamento";
$proto30["m_srcTableName"] = "BD Retornados";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto32["m_sql"] = "municipio";
$proto32["m_srcTableName"] = "BD Retornados";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto34["m_sql"] = "sexo";
$proto34["m_srcTableName"] = "BD Retornados";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "edad",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto36["m_sql"] = "edad";
$proto36["m_srcTableName"] = "BD Retornados";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "rango_etario",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto38["m_sql"] = "rango_etario";
$proto38["m_srcTableName"] = "BD Retornados";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "tipoedad",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto40["m_sql"] = "tipoedad";
$proto40["m_srcTableName"] = "BD Retornados";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "paisrepatriacion",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto42["m_sql"] = "paisrepatriacion";
$proto42["m_srcTableName"] = "BD Retornados";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "regionrepatriacion",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto44["m_sql"] = "regionrepatriacion";
$proto44["m_srcTableName"] = "BD Retornados";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "antecedentes_penales",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto46["m_sql"] = "antecedentes_penales";
$proto46["m_srcTableName"] = "BD Retornados";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_antecedentes",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto48["m_sql"] = "tipo_antecedentes";
$proto48["m_srcTableName"] = "BD Retornados";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "antecedentes",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto50["m_sql"] = "antecedentes";
$proto50["m_srcTableName"] = "BD Retornados";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "sectorppd",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto52["m_sql"] = "sectorppd";
$proto52["m_srcTableName"] = "BD Retornados";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "num_mes",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto54["m_sql"] = "num_mes";
$proto54["m_srcTableName"] = "BD Retornados";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "antecedente_analisis",
	"m_strTable" => "retornados",
	"m_srcTableName" => "BD Retornados"
));

$proto56["m_sql"] = "antecedente_analisis";
$proto56["m_srcTableName"] = "BD Retornados";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "retornados";
$proto59["m_srcTableName"] = "BD Retornados";
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
$proto58["m_srcTableName"] = "BD Retornados";
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
$proto0["m_srcTableName"]="BD Retornados";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BD_Retornados = createSqlQuery_BD_Retornados();


	
		;

																										

$tdataBD_Retornados[".sqlquery"] = $queryData_BD_Retornados;

$tableEvents["BD Retornados"] = new eventsBase;
$tdataBD_Retornados[".hasEvents"] = false;

?>