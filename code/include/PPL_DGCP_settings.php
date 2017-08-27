<?php
require_once(getabspath("classes/cipherer.php"));



$tdataPPL_DGCP = array();
$tdataPPL_DGCP[".ShortName"] = "PPL_DGCP";

//	field labels
$fieldLabelsPPL_DGCP = array();
$pageTitlesPPL_DGCP = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPPL_DGCP["Spanish"] = array();
	$fieldLabelsPPL_DGCP["Spanish"]["PPL_pertenecientes_a_pandillas_por_municipio_mun_resid"] = "Municipio";
	$fieldLabelsPPL_DGCP["Spanish"]["PPL_pertenecientes_a_pandillas_por_municipio_depart_resid"] = "Departamento";
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPPL_DGCP["English"] = array();
	$fieldLabelsPPL_DGCP["English"]["PPL_pertenecientes_a_pandillas_por_municipio_mun_resid"] = "Municipio";
	$fieldLabelsPPL_DGCP["English"]["PPL_pertenecientes_a_pandillas_por_municipio_depart_resid"] = "Departamento";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPPL_DGCP[""] = array();
}

//	search fields
$tdataPPL_DGCP[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"Grupo etarios por estado civil (masculino)", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por afiliación a Pandillas", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"Grupo etarios por estado civil (femenino)", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"Personas privadas de libertad por rango etario, segun nivel educativo y genero Masculino", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"PPL grupos etarios por Deportado Femenino", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por delitos femenino", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por afiliación a Pandillas femenino", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"Personas privadas de libertad por rango etario según género", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"PPL grupos etarios por Deportado masculino", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por delitos masculino", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"PPL pertenecientes a pandillas por municipio", "field"=>"mun_resid" );
$tdataPPL_DGCP[".searchFields"]["PPL_pertenecientes_a_pandillas_por_municipio_mun_resid"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"Grupo etarios por estado civil (masculino)", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"Personas privadas de libertad por rango etario, segun nivel educativo y genero Masculino", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por afiliación a Pandillas", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por delitos masculino", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por afiliación a Pandillas femenino", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"PPL grupos etarios por Deportado Femenino", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"Personas privadas de libertad por rango etario según género", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"PPL grupos etarios por Deportado masculino", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por delitos femenino", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"PPL pertenecientes a pandillas por municipio", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"Grupo etarios por estado civil (femenino)", "field"=>"depart_resid" );
$tdataPPL_DGCP[".searchFields"]["PPL_pertenecientes_a_pandillas_por_municipio_depart_resid"] = $dashField;

// all search fields
$tdataPPL_DGCP[".allSearchFields"] = array();
$tdataPPL_DGCP[".allSearchFields"][] = "PPL_pertenecientes_a_pandillas_por_municipio_mun_resid";
$tdataPPL_DGCP[".allSearchFields"][] = "PPL_pertenecientes_a_pandillas_por_municipio_depart_resid";

// good like search fields
$tdataPPL_DGCP[".googleLikeFields"] = array();
$tdataPPL_DGCP[".googleLikeFields"][] = "PPL_pertenecientes_a_pandillas_por_municipio_mun_resid";
$tdataPPL_DGCP[".googleLikeFields"][] = "PPL_pertenecientes_a_pandillas_por_municipio_depart_resid";

$tdataPPL_DGCP[".dashElements"] = array();

	$dbelement = array( "elementName" => "PPL_DGCP_search", "table" => "PPL DGCP", "type" => 4);
	$dbelement["cellName"] = "cell_0_0";

			

	$tdataPPL_DGCP[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "PPL_pertenecientes_a_pandillas_por_municipio_report", "table" => "PPL pertenecientes a pandillas por municipio", "type" => 2);
	$dbelement["cellName"] = "cell_2_0";

			

	$tdataPPL_DGCP[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_report", "table" => "Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas", "type" => 2);
	$dbelement["cellName"] = "cell_4_0";

			

	$tdataPPL_DGCP[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Personas_privadas_de_libertad_por_rango_etario_seg_n_g_nero_report", "table" => "Personas privadas de libertad por rango etario según género", "type" => 2);
	$dbelement["cellName"] = "cell_6_0";

			

	$tdataPPL_DGCP[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Masculino_report", "table" => "Personas privadas de libertad por rango etario, segun nivel educativo y genero Masculino", "type" => 2);
	$dbelement["cellName"] = "cell_8_0";

			

	$tdataPPL_DGCP[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino_report", "table" => "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino", "type" => 2);
	$dbelement["cellName"] = "cell_10_0";

			

	$tdataPPL_DGCP[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Grupo_etarios_por_estado_civil__masculino__report", "table" => "Grupo etarios por estado civil (masculino)", "type" => 2);
	$dbelement["cellName"] = "cell_12_0";

			

	$tdataPPL_DGCP[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Grupo_etarios_por_estado_civil__femenino__report", "table" => "Grupo etarios por estado civil (femenino)", "type" => 2);
	$dbelement["cellName"] = "cell_14_0";

			

	$tdataPPL_DGCP[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_report", "table" => "PPL Grupos etarios por afiliación a Pandillas", "type" => 2);
	$dbelement["cellName"] = "cell_16_0";

			

	$tdataPPL_DGCP[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino_report", "table" => "PPL Grupos etarios por afiliación a Pandillas femenino", "type" => 2);
	$dbelement["cellName"] = "cell_18_0";

			

	$tdataPPL_DGCP[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "PPL_grupos_etarios_por_Deportado_masculino_report", "table" => "PPL grupos etarios por Deportado masculino", "type" => 2);
	$dbelement["cellName"] = "cell_20_0";

			

	$tdataPPL_DGCP[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "PPL_grupos_etarios_por_Deportado_Femenino_report", "table" => "PPL grupos etarios por Deportado Femenino", "type" => 2);
	$dbelement["cellName"] = "cell_22_0";

			

	$tdataPPL_DGCP[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "PPL_Grupos_etarios_por_delitos_masculino_report", "table" => "PPL Grupos etarios por delitos masculino", "type" => 2);
	$dbelement["cellName"] = "cell_24_0";

			

	$tdataPPL_DGCP[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "PPL_Grupos_etarios_por_delitos_femenino_report", "table" => "PPL Grupos etarios por delitos femenino", "type" => 2);
	$dbelement["cellName"] = "cell_26_0";

			

	$tdataPPL_DGCP[".dashElements"][] = $dbelement;

$tdataPPL_DGCP[".shortTableName"] = "PPL_DGCP";
$tdataPPL_DGCP[".entityType"] = 4;



$tableEvents["PPL DGCP"] = new eventsBase;
$tdataPPL_DGCP[".hasEvents"] = false;


$tdataPPL_DGCP[".tableType"] = "dashboard";



$tdataPPL_DGCP[".addPageEvents"] = false;

$tables_data["PPL DGCP"]=&$tdataPPL_DGCP;
$field_labels["PPL_DGCP"] = &$fieldLabelsPPL_DGCP;
$page_titles["PPL_DGCP"] = &$pageTitlesPPL_DGCP;

?>