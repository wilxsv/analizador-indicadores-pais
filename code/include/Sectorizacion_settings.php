<?php
require_once(getabspath("classes/cipherer.php"));



$tdataSectorizacion = array();
$tdataSectorizacion[".ShortName"] = "Sectorizacion";

//	field labels
$fieldLabelsSectorizacion = array();
$pageTitlesSectorizacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsSectorizacion["Spanish"] = array();
	$fieldLabelsSectorizacion["Spanish"]["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_mun_resid"] = "Municipio";
	$fieldLabelsSectorizacion["Spanish"]["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_depart_resid"] = "Departamento";
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSectorizacion["English"] = array();
	$fieldLabelsSectorizacion["English"]["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_mun_resid"] = "Municipio";
	$fieldLabelsSectorizacion["English"]["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_depart_resid"] = "Departamento";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSectorizacion[""] = array();
}

//	search fields
$tdataSectorizacion[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"Delitos por sector Estandarizado", "field"=>"muni_he" );
$dashField[] = array( "table"=>"pnc911 Sector por eventos", "field"=>"municipio" );
$dashField[] = array( "table"=>"Sector PPD por tipo de arma", "field"=>"muni_he" );
$tdataSectorizacion[".searchFields"]["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_mun_resid"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Delitos por sector Estandarizado", "field"=>"depart_he" );
$dashField[] = array( "table"=>"pnc911 Sector por eventos", "field"=>"departamento" );
$dashField[] = array( "table"=>"Sector PPD por tipo de arma", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas", "field"=>"depart_resid" );
$tdataSectorizacion[".searchFields"]["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_depart_resid"] = $dashField;

// all search fields
$tdataSectorizacion[".allSearchFields"] = array();
$tdataSectorizacion[".allSearchFields"][] = "Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_mun_resid";
$tdataSectorizacion[".allSearchFields"][] = "Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_depart_resid";

// good like search fields
$tdataSectorizacion[".googleLikeFields"] = array();
$tdataSectorizacion[".googleLikeFields"][] = "Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_mun_resid";
$tdataSectorizacion[".googleLikeFields"][] = "Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_depart_resid";

$tdataSectorizacion[".dashElements"] = array();

	$dbelement = array( "elementName" => "Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_report", "table" => "Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas", "type" => 2);
	$dbelement["cellName"] = "cell_2_0";

			

	$tdataSectorizacion[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Delitos_por_sector_Estandarizado_report", "table" => "Delitos por sector Estandarizado", "type" => 2);
	$dbelement["cellName"] = "cell_4_0";

			

	$tdataSectorizacion[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Sector_PPD_por_tipo_de_arma_report", "table" => "Sector PPD por tipo de arma", "type" => 2);
	$dbelement["cellName"] = "cell_6_0";

			

	$tdataSectorizacion[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "pnc911_Sector_por_eventos_report", "table" => "pnc911 Sector por eventos", "type" => 2);
	$dbelement["cellName"] = "cell_8_0";

			

	$tdataSectorizacion[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Sectorizacion_search", "table" => "Sectorizacion", "type" => 4);
	$dbelement["cellName"] = "cell_0_0";

			

	$tdataSectorizacion[".dashElements"][] = $dbelement;

$tdataSectorizacion[".shortTableName"] = "Sectorizacion";
$tdataSectorizacion[".entityType"] = 4;



$tableEvents["Sectorizacion"] = new eventsBase;
$tdataSectorizacion[".hasEvents"] = false;


$tdataSectorizacion[".tableType"] = "dashboard";



$tdataSectorizacion[".addPageEvents"] = false;

$tables_data["Sectorizacion"]=&$tdataSectorizacion;
$field_labels["Sectorizacion"] = &$fieldLabelsSectorizacion;
$page_titles["Sectorizacion"] = &$pageTitlesSectorizacion;

?>