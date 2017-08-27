<?php
require_once(getabspath("classes/cipherer.php"));



$tdataRetornados_Dashboard = array();
$tdataRetornados_Dashboard[".ShortName"] = "Retornados_Dashboard";

//	field labels
$fieldLabelsRetornados_Dashboard = array();
$pageTitlesRetornados_Dashboard = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsRetornados_Dashboard["Spanish"] = array();
	$fieldLabelsRetornados_Dashboard["Spanish"]["Regi_n_Repatriaci_n_por_a_o_departamento"] = "Departamento";
	$fieldLabelsRetornados_Dashboard["Spanish"]["Regi_n_Repatriaci_n_por_a_o_municipio"] = "Municipio";
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRetornados_Dashboard["English"] = array();
	$fieldLabelsRetornados_Dashboard["English"]["Regi_n_Repatriaci_n_por_a_o_departamento"] = "Departamento";
	$fieldLabelsRetornados_Dashboard["English"]["Regi_n_Repatriaci_n_por_a_o_municipio"] = "Municipio";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRetornados_Dashboard[""] = array();
}

//	search fields
$tdataRetornados_Dashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"Retornados-Rango etario por antecedentes género femenino", "field"=>"departamento" );
$dashField[] = array( "table"=>"Retornados-Rango etario por antecedentes género masculino", "field"=>"departamento" );
$dashField[] = array( "table"=>"Retornados-Regiones repatriación por meses", "field"=>"departamento" );
$dashField[] = array( "table"=>"Retornados-Municipios por año", "field"=>"departamento" );
$dashField[] = array( "table"=>"Retornados-Rango etario por sexo", "field"=>"departamento" );
$dashField[] = array( "table"=>"Retornados-Consulados por año", "field"=>"departamento" );
$dashField[] = array( "table"=>"Retornados-Región Repatriación por año", "field"=>"departamento" );
$tdataRetornados_Dashboard[".searchFields"]["Regi_n_Repatriaci_n_por_a_o_departamento"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Retornados-Regiones repatriación por meses", "field"=>"municipio" );
$dashField[] = array( "table"=>"Retornados-Rango etario por antecedentes género femenino", "field"=>"municipio" );
$dashField[] = array( "table"=>"Retornados-Rango etario por sexo", "field"=>"municipio" );
$dashField[] = array( "table"=>"Retornados-Municipios por año", "field"=>"municipio" );
$dashField[] = array( "table"=>"Retornados-Rango etario por antecedentes género masculino", "field"=>"municipio" );
$dashField[] = array( "table"=>"Retornados-Consulados por año", "field"=>"municipio" );
$dashField[] = array( "table"=>"Retornados-Región Repatriación por año", "field"=>"municipio" );
$tdataRetornados_Dashboard[".searchFields"]["Regi_n_Repatriaci_n_por_a_o_municipio"] = $dashField;

// all search fields
$tdataRetornados_Dashboard[".allSearchFields"] = array();
$tdataRetornados_Dashboard[".allSearchFields"][] = "Regi_n_Repatriaci_n_por_a_o_departamento";
$tdataRetornados_Dashboard[".allSearchFields"][] = "Regi_n_Repatriaci_n_por_a_o_municipio";

// good like search fields
$tdataRetornados_Dashboard[".googleLikeFields"] = array();
$tdataRetornados_Dashboard[".googleLikeFields"][] = "Regi_n_Repatriaci_n_por_a_o_departamento";
$tdataRetornados_Dashboard[".googleLikeFields"][] = "Regi_n_Repatriaci_n_por_a_o_municipio";

$tdataRetornados_Dashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "Regi_n_Repatriaci_n_por_a_o_report", "table" => "Retornados-Región Repatriación por año", "type" => 2);
	$dbelement["cellName"] = "cell_2_0";

			

	$tdataRetornados_Dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Regiones_repatriaci_n_por_meses_report", "table" => "Retornados-Regiones repatriación por meses", "type" => 2);
	$dbelement["cellName"] = "cell_4_0";

			

	$tdataRetornados_Dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Consulados_por_a_o_report", "table" => "Retornados-Consulados por año", "type" => 2);
	$dbelement["cellName"] = "cell_6_0";

			

	$tdataRetornados_Dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Retornados_Municipios_por_a_o_report", "table" => "Retornados-Municipios por año", "type" => 2);
	$dbelement["cellName"] = "cell_10_0";

			

	$tdataRetornados_Dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Retornados_Rango_etario_por_sexo_report", "table" => "Retornados-Rango etario por sexo", "type" => 2);
	$dbelement["cellName"] = "cell_12_0";

			

	$tdataRetornados_Dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Retornados_Rango_etario_por_antecedentes_g_nero_masculino_report", "table" => "Retornados-Rango etario por antecedentes género masculino", "type" => 2);
	$dbelement["cellName"] = "cell_14_0";

			

	$tdataRetornados_Dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Retornados_Rango_etario_por_antecedentes_g_nero_femenino_report", "table" => "Retornados-Rango etario por antecedentes género femenino", "type" => 2);
	$dbelement["cellName"] = "cell_16_0";

			

	$tdataRetornados_Dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Retornados_Dashboard_search", "table" => "Retornados Dashboard", "type" => 4);
	$dbelement["cellName"] = "cell_0_0";

			

	$tdataRetornados_Dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Retornados_Todos_los_departamentos_report", "table" => "Retornados-Todos los departamentos", "type" => 2);
	$dbelement["cellName"] = "cell_8_0";

			

	$tdataRetornados_Dashboard[".dashElements"][] = $dbelement;

$tdataRetornados_Dashboard[".shortTableName"] = "Retornados_Dashboard";
$tdataRetornados_Dashboard[".entityType"] = 4;



$tableEvents["Retornados Dashboard"] = new eventsBase;
$tdataRetornados_Dashboard[".hasEvents"] = false;


$tdataRetornados_Dashboard[".tableType"] = "dashboard";



$tdataRetornados_Dashboard[".addPageEvents"] = false;

$tables_data["Retornados Dashboard"]=&$tdataRetornados_Dashboard;
$field_labels["Retornados_Dashboard"] = &$fieldLabelsRetornados_Dashboard;
$page_titles["Retornados_Dashboard"] = &$pageTitlesRetornados_Dashboard;

?>