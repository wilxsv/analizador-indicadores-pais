<?php
require_once(getabspath("classes/cipherer.php"));



$tdataSectorizaci_n = array();
$tdataSectorizaci_n[".ShortName"] = "Sectorizaci_n";

//	field labels
$fieldLabelsSectorizaci_n = array();
$pageTitlesSectorizaci_n = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsSectorizaci_n["Spanish"] = array();
	$fieldLabelsSectorizaci_n["Spanish"]["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_mun_resid"] = "Municipio";
	$fieldLabelsSectorizaci_n["Spanish"]["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_depart_resid"] = "Departamento";
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSectorizaci_n["English"] = array();
	$fieldLabelsSectorizaci_n["English"]["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_mun_resid"] = "Municipio";
	$fieldLabelsSectorizaci_n["English"]["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_depart_resid"] = "Departamento";
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsSectorizaci_n["French"] = array();
	$fieldLabelsSectorizaci_n["French"]["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_mun_resid"] = "Municipio";
	$fieldLabelsSectorizaci_n["French"]["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_depart_resid"] = "Departamento";
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsSectorizaci_n["German"] = array();
	$fieldLabelsSectorizaci_n["German"]["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_mun_resid"] = "Municipio";
	$fieldLabelsSectorizaci_n["German"]["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_depart_resid"] = "Departamento";
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsSectorizaci_n["Italian"] = array();
	$fieldLabelsSectorizaci_n["Italian"]["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_mun_resid"] = "Municipio";
	$fieldLabelsSectorizaci_n["Italian"]["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_depart_resid"] = "Departamento";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSectorizaci_n[""] = array();
}

//	search fields
$tdataSectorizaci_n[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"Delitos por sector Estandarizado", "field"=>"muni_he" );
$dashField[] = array( "table"=>"pnc911 Sector por eventos", "field"=>"municipio" );
$dashField[] = array( "table"=>"Sector PPD por tipo de arma", "field"=>"muni_he" );
$tdataSectorizaci_n[".searchFields"]["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_mun_resid"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Delitos por sector Estandarizado", "field"=>"depart_he" );
$dashField[] = array( "table"=>"pnc911 Sector por eventos", "field"=>"departamento" );
$dashField[] = array( "table"=>"Sector PPD por tipo de arma", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas", "field"=>"depart_resid" );
$tdataSectorizaci_n[".searchFields"]["Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_depart_resid"] = $dashField;

// all search fields
$tdataSectorizaci_n[".allSearchFields"] = array();
$tdataSectorizaci_n[".allSearchFields"][] = "Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_mun_resid";
$tdataSectorizaci_n[".allSearchFields"][] = "Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_depart_resid";

// good like search fields
$tdataSectorizaci_n[".googleLikeFields"] = array();
$tdataSectorizaci_n[".googleLikeFields"][] = "Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_mun_resid";
$tdataSectorizaci_n[".googleLikeFields"][] = "Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_depart_resid";

$tdataSectorizaci_n[".dashElements"] = array();

	$dbelement = array( "elementName" => "Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_report", "table" => "Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas", "type" => 2);
	$dbelement["cellName"] = "cell_2_0";

			

	$tdataSectorizaci_n[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Delitos_por_sector_Estandarizado_report", "table" => "Delitos por sector Estandarizado", "type" => 2);
	$dbelement["cellName"] = "cell_4_0";

			

	$tdataSectorizaci_n[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Sector_PPD_por_tipo_de_arma_report", "table" => "Sector PPD por tipo de arma", "type" => 2);
	$dbelement["cellName"] = "cell_6_0";

			

	$tdataSectorizaci_n[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "pnc911_Sector_por_eventos_report", "table" => "pnc911 Sector por eventos", "type" => 2);
	$dbelement["cellName"] = "cell_8_0";

			

	$tdataSectorizaci_n[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Sectorizacion_search", "table" => "Sectorización", "type" => 4);
	$dbelement["cellName"] = "cell_0_0";

			

	$tdataSectorizaci_n[".dashElements"][] = $dbelement;

$tdataSectorizaci_n[".shortTableName"] = "Sectorizaci_n";
$tdataSectorizaci_n[".entityType"] = 4;



$tableEvents["Sectorización"] = new eventsBase;
$tdataSectorizaci_n[".hasEvents"] = false;


$tdataSectorizaci_n[".tableType"] = "dashboard";



$tdataSectorizaci_n[".addPageEvents"] = false;

$tables_data["Sectorización"]=&$tdataSectorizaci_n;
$field_labels["Sectorizaci_n"] = &$fieldLabelsSectorizaci_n;
$page_titles["Sectorizaci_n"] = &$pageTitlesSectorizaci_n;

?>