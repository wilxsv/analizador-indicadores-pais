<?php
require_once(getabspath("classes/cipherer.php"));



$tdataPersonas_Privadas_de_Libertad = array();
$tdataPersonas_Privadas_de_Libertad[".ShortName"] = "Personas_Privadas_de_Libertad";

//	field labels
$fieldLabelsPersonas_Privadas_de_Libertad = array();
$pageTitlesPersonas_Privadas_de_Libertad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPersonas_Privadas_de_Libertad["Spanish"] = array();
	$fieldLabelsPersonas_Privadas_de_Libertad["Spanish"]["Tabla_21__21__Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino_mun_resid2"] = "Tabla 21  21  Personas Privadas De Libertad Por Rango Etario  Segun Nivel Educativo Y Genero Femenino Mun Resid2";
	$fieldLabelsPersonas_Privadas_de_Libertad["Spanish"]["Tabla_21__21__Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino_depart_resid"] = "Tabla 21  21  Personas Privadas De Libertad Por Rango Etario  Segun Nivel Educativo Y Genero Femenino Depart Resid";
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPersonas_Privadas_de_Libertad["English"] = array();
	$fieldLabelsPersonas_Privadas_de_Libertad["English"]["Tabla_21__21__Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino_mun_resid2"] = "Tabla 21  21  Personas Privadas De Libertad Por Rango Etario  Segun Nivel Educativo Y Genero Femenino Mun Resid2";
	$fieldLabelsPersonas_Privadas_de_Libertad["English"]["Tabla_21__21__Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino_depart_resid"] = "Tabla 21  21  Personas Privadas De Libertad Por Rango Etario  Segun Nivel Educativo Y Genero Femenino Depart Resid";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPersonas_Privadas_de_Libertad[""] = array();
}

//	search fields
$tdataPersonas_Privadas_de_Libertad[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"PPL pertenecientes a pandillas por municipio", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"Grupo etarios por estado civil (masculino)", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"PPL grupos etarios por Deportado masculino", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por afiliación a Pandillas femenino", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por delitos femenino", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"Grupo etarios por estado civil (femenino)", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"PPL grupos etarios por Deportado Femenino", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por delitos masculino", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por afiliación a Pandillas", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"Personas privadas de libertad por rango etario, segun nivel educativo y género femenino", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"Personas privadas de libertad por rango etario, segun nivel educativo y genero Masculino", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"PPL por rango etario según género", "field"=>"mun_resid" );
$tdataPersonas_Privadas_de_Libertad[".searchFields"]["Tabla_21__21__Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino_mun_resid2"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"PPL grupos etarios por Deportado masculino", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por delitos femenino", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"PPL pertenecientes a pandillas por municipio", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por afiliación a Pandillas", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por afiliación a Pandillas femenino", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"Personas privadas de libertad por rango etario, segun nivel educativo y género femenino", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por delitos masculino", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"Personas privadas de libertad por rango etario, segun nivel educativo y genero Masculino", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"PPL grupos etarios por Deportado Femenino", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"PPL por rango etario según género", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"Grupo etarios por estado civil (femenino)", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"Grupo etarios por estado civil (masculino)", "field"=>"depart_resid" );
$tdataPersonas_Privadas_de_Libertad[".searchFields"]["Tabla_21__21__Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino_depart_resid"] = $dashField;

// all search fields
$tdataPersonas_Privadas_de_Libertad[".allSearchFields"] = array();
$tdataPersonas_Privadas_de_Libertad[".allSearchFields"][] = "Tabla_21__21__Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino_mun_resid2";
$tdataPersonas_Privadas_de_Libertad[".allSearchFields"][] = "Tabla_21__21__Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino_depart_resid";

// good like search fields
$tdataPersonas_Privadas_de_Libertad[".googleLikeFields"] = array();
$tdataPersonas_Privadas_de_Libertad[".googleLikeFields"][] = "Tabla_21__21__Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino_mun_resid2";
$tdataPersonas_Privadas_de_Libertad[".googleLikeFields"][] = "Tabla_21__21__Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino_depart_resid";

$tdataPersonas_Privadas_de_Libertad[".dashElements"] = array();

	$dbelement = array( "elementName" => "PPL_pertenecientes_a_pandillas_por_municipio_report", "table" => "PPL pertenecientes a pandillas por municipio", "type" => 2);
	$dbelement["cellName"] = "cell_2_0";

		$dbelement["reload"] = 60;
		

	$tdataPersonas_Privadas_de_Libertad[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tabla_22__22__Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Masculino_report", "table" => "Personas privadas de libertad por rango etario, segun nivel educativo y genero Masculino", "type" => 2);
	$dbelement["cellName"] = "cell_8_0";

		$dbelement["reload"] = 60;
		

	$tdataPersonas_Privadas_de_Libertad[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tabla_23__23__Personas_privadas_de_libertad_por_rango_etario__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas_report", "table" => "Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas", "type" => 2);
	$dbelement["cellName"] = "cell_4_0";

		$dbelement["reload"] = 60;
		

	$tdataPersonas_Privadas_de_Libertad[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Grupo_etarios_por_estado_civil__masculino__report", "table" => "Grupo etarios por estado civil (masculino)", "type" => 2);
	$dbelement["cellName"] = "cell_12_0";

		$dbelement["reload"] = 60;
		

	$tdataPersonas_Privadas_de_Libertad[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Grupo_etarios_por_estado_civil__femenino__report", "table" => "Grupo etarios por estado civil (femenino)", "type" => 2);
	$dbelement["cellName"] = "cell_14_0";

		$dbelement["reload"] = 60;
		

	$tdataPersonas_Privadas_de_Libertad[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_report", "table" => "PPL Grupos etarios por afiliación a Pandillas", "type" => 2);
	$dbelement["cellName"] = "cell_16_0";

		$dbelement["reload"] = 60;
		

	$tdataPersonas_Privadas_de_Libertad[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino_report", "table" => "PPL Grupos etarios por afiliación a Pandillas femenino", "type" => 2);
	$dbelement["cellName"] = "cell_18_0";

		$dbelement["reload"] = 60;
		

	$tdataPersonas_Privadas_de_Libertad[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "PPL_grupos_etarios_por_Deportado_masculino_report", "table" => "PPL grupos etarios por Deportado masculino", "type" => 2);
	$dbelement["cellName"] = "cell_20_0";

		$dbelement["reload"] = 60;
		

	$tdataPersonas_Privadas_de_Libertad[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "PPL_grupos_etarios_por_Deportado_Femenino_report", "table" => "PPL grupos etarios por Deportado Femenino", "type" => 2);
	$dbelement["cellName"] = "cell_22_0";

		$dbelement["reload"] = 60;
		

	$tdataPersonas_Privadas_de_Libertad[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "PPL_Grupos_etarios_por_delitos_masculino_report", "table" => "PPL Grupos etarios por delitos masculino", "type" => 2);
	$dbelement["cellName"] = "cell_24_0";

		$dbelement["reload"] = 60;
		

	$tdataPersonas_Privadas_de_Libertad[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "PPL_Grupos_etarios_por_delitos_femenino_report", "table" => "PPL Grupos etarios por delitos femenino", "type" => 2);
	$dbelement["cellName"] = "cell_26_0";

		$dbelement["reload"] = 60;
		

	$tdataPersonas_Privadas_de_Libertad[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Personas_Privadas_de_Libertad_search", "table" => "Personas Privadas de Libertad", "type" => 4);
	$dbelement["cellName"] = "cell_0_0";

			

	$tdataPersonas_Privadas_de_Libertad[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino_report", "table" => "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino", "type" => 2);
	$dbelement["cellName"] = "cell_10_0";

			

	$tdataPersonas_Privadas_de_Libertad[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "PPL_por_rango_etario_seg_n_g_nero_report", "table" => "PPL por rango etario según género", "type" => 2);
	$dbelement["cellName"] = "cell_6_0";

			

	$tdataPersonas_Privadas_de_Libertad[".dashElements"][] = $dbelement;

$tdataPersonas_Privadas_de_Libertad[".shortTableName"] = "Personas_Privadas_de_Libertad";
$tdataPersonas_Privadas_de_Libertad[".entityType"] = 4;



$tableEvents["Personas Privadas de Libertad"] = new eventsBase;
$tdataPersonas_Privadas_de_Libertad[".hasEvents"] = false;


$tdataPersonas_Privadas_de_Libertad[".tableType"] = "dashboard";



$tdataPersonas_Privadas_de_Libertad[".addPageEvents"] = false;

$tables_data["Personas Privadas de Libertad"]=&$tdataPersonas_Privadas_de_Libertad;
$field_labels["Personas_Privadas_de_Libertad"] = &$fieldLabelsPersonas_Privadas_de_Libertad;
$page_titles["Personas_Privadas_de_Libertad"] = &$pageTitlesPersonas_Privadas_de_Libertad;

?>