<?php
require_once(getabspath("classes/cipherer.php"));



$tdataDashboard1 = array();
$tdataDashboard1[".ShortName"] = "Dashboard1";

//	field labels
$fieldLabelsDashboard1 = array();
$pageTitlesDashboard1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsDashboard1["Spanish"] = array();
	$fieldLabelsDashboard1["Spanish"]["PPL_pertenecientes_a_pandillas_por_municipio_mun_resid1"] = "PPL Pertenecientes A Pandillas Por Municipio Mun Resid1";
	$fieldLabelsDashboard1["Spanish"]["PPL_pertenecientes_a_pandillas_por_municipio_depart_resid"] = "PPL Pertenecientes A Pandillas Por Municipio Depart Resid";
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDashboard1["English"] = array();
	$fieldLabelsDashboard1["English"]["PPL_pertenecientes_a_pandillas_por_municipio_mun_resid1"] = "PPL Pertenecientes A Pandillas Por Municipio Mun Resid1";
	$fieldLabelsDashboard1["English"]["PPL_pertenecientes_a_pandillas_por_municipio_depart_resid"] = "PPL Pertenecientes A Pandillas Por Municipio Depart Resid";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDashboard1[""] = array();
}

//	search fields
$tdataDashboard1[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"PPL pertenecientes a pandillas por municipio", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"Personas privadas de libertad por rango etario, segun nivel educativo y genero Masculino", "field"=>"mun_resid" );
$tdataDashboard1[".searchFields"]["PPL_pertenecientes_a_pandillas_por_municipio_mun_resid1"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"PPL pertenecientes a pandillas por municipio", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"Personas privadas de libertad por rango etario, segun nivel educativo y genero Masculino", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas", "field"=>"depart_resid" );
$tdataDashboard1[".searchFields"]["PPL_pertenecientes_a_pandillas_por_municipio_depart_resid"] = $dashField;

// all search fields
$tdataDashboard1[".allSearchFields"] = array();
$tdataDashboard1[".allSearchFields"][] = "PPL_pertenecientes_a_pandillas_por_municipio_mun_resid1";
$tdataDashboard1[".allSearchFields"][] = "PPL_pertenecientes_a_pandillas_por_municipio_depart_resid";

// good like search fields
$tdataDashboard1[".googleLikeFields"] = array();
$tdataDashboard1[".googleLikeFields"][] = "PPL_pertenecientes_a_pandillas_por_municipio_mun_resid1";
$tdataDashboard1[".googleLikeFields"][] = "PPL_pertenecientes_a_pandillas_por_municipio_depart_resid";

$tdataDashboard1[".dashElements"] = array();

	$dbelement = array( "elementName" => "PPL_pertenecientes_a_pandillas_por_municipio_report", "table" => "PPL pertenecientes a pandillas por municipio", "type" => 2);
	$dbelement["cellName"] = "cell_2_0";

			

	$tdataDashboard1[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_report", "table" => "Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas", "type" => 2);
	$dbelement["cellName"] = "cell_4_0";

			

	$tdataDashboard1[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Dashboard1_search", "table" => "Dashboard1", "type" => 4);
	$dbelement["cellName"] = "cell_0_0";

			

	$tdataDashboard1[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Masculino_report", "table" => "Personas privadas de libertad por rango etario, segun nivel educativo y genero Masculino", "type" => 2);
	$dbelement["cellName"] = "cell_8_0";

			

	$tdataDashboard1[".dashElements"][] = $dbelement;

$tdataDashboard1[".shortTableName"] = "Dashboard1";
$tdataDashboard1[".entityType"] = 4;



$tableEvents["Dashboard1"] = new eventsBase;
$tdataDashboard1[".hasEvents"] = false;


$tdataDashboard1[".tableType"] = "dashboard";



$tdataDashboard1[".addPageEvents"] = false;

$tables_data["Dashboard1"]=&$tdataDashboard1;
$field_labels["Dashboard1"] = &$fieldLabelsDashboard1;
$page_titles["Dashboard1"] = &$pageTitlesDashboard1;

?>