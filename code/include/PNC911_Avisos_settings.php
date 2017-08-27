<?php
require_once(getabspath("classes/cipherer.php"));



$tdataPNC911_Avisos = array();
$tdataPNC911_Avisos[".ShortName"] = "PNC911_Avisos";

//	field labels
$fieldLabelsPNC911_Avisos = array();
$pageTitlesPNC911_Avisos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPNC911_Avisos["Spanish"] = array();
	$fieldLabelsPNC911_Avisos["Spanish"]["pnc911_Sector_por_eventos_departamento"] = "Pnc911 Sector Por Eventos Departamento";
	$fieldLabelsPNC911_Avisos["Spanish"]["pnc911_Sector_por_eventos_municipio"] = "Pnc911 Sector Por Eventos Municipio";
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPNC911_Avisos["English"] = array();
	$fieldLabelsPNC911_Avisos["English"]["pnc911_Sector_por_eventos_departamento"] = "Pnc911 Sector Por Eventos Departamento";
	$fieldLabelsPNC911_Avisos["English"]["pnc911_Sector_por_eventos_municipio"] = "Pnc911 Sector Por Eventos Municipio";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPNC911_Avisos[""] = array();
}

//	search fields
$tdataPNC911_Avisos[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"pnc911 Sector por eventos", "field"=>"departamento" );
$dashField[] = array( "table"=>"pnc911municipios", "field"=>"departamento" );
$tdataPNC911_Avisos[".searchFields"]["pnc911_Sector_por_eventos_departamento"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"pnc911 Sector por eventos", "field"=>"municipio" );
$dashField[] = array( "table"=>"pnc911municipios", "field"=>"municipio" );
$tdataPNC911_Avisos[".searchFields"]["pnc911_Sector_por_eventos_municipio"] = $dashField;

// all search fields
$tdataPNC911_Avisos[".allSearchFields"] = array();
$tdataPNC911_Avisos[".allSearchFields"][] = "pnc911_Sector_por_eventos_departamento";
$tdataPNC911_Avisos[".allSearchFields"][] = "pnc911_Sector_por_eventos_municipio";

// good like search fields
$tdataPNC911_Avisos[".googleLikeFields"] = array();
$tdataPNC911_Avisos[".googleLikeFields"][] = "pnc911_Sector_por_eventos_departamento";
$tdataPNC911_Avisos[".googleLikeFields"][] = "pnc911_Sector_por_eventos_municipio";

$tdataPNC911_Avisos[".dashElements"] = array();

	$dbelement = array( "elementName" => "pnc911_Sector_por_eventos_report", "table" => "pnc911 Sector por eventos", "type" => 2);
	$dbelement["cellName"] = "cell_6_0";

		$dbelement["reload"] = 60;
		

	$tdataPNC911_Avisos[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "pnc911municipios_report", "table" => "pnc911municipios", "type" => 2);
	$dbelement["cellName"] = "cell_2_0";

		$dbelement["reload"] = 60;
		

	$tdataPNC911_Avisos[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "PNC911_Avisos_search", "table" => "PNC911 Avisos", "type" => 4);
	$dbelement["cellName"] = "cell_0_0";

			

	$tdataPNC911_Avisos[".dashElements"][] = $dbelement;

$tdataPNC911_Avisos[".shortTableName"] = "PNC911_Avisos";
$tdataPNC911_Avisos[".entityType"] = 4;



$tableEvents["PNC911 Avisos"] = new eventsBase;
$tdataPNC911_Avisos[".hasEvents"] = false;


$tdataPNC911_Avisos[".tableType"] = "dashboard";



$tdataPNC911_Avisos[".addPageEvents"] = false;

$tables_data["PNC911 Avisos"]=&$tdataPNC911_Avisos;
$field_labels["PNC911_Avisos"] = &$fieldLabelsPNC911_Avisos;
$page_titles["PNC911_Avisos"] = &$pageTitlesPNC911_Avisos;

?>