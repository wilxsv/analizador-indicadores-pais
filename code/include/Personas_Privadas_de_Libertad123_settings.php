<?php
require_once(getabspath("classes/cipherer.php"));



$tdataPersonas_Privadas_de_Libertad123 = array();
$tdataPersonas_Privadas_de_Libertad123[".ShortName"] = "Personas_Privadas_de_Libertad123";

//	field labels
$fieldLabelsPersonas_Privadas_de_Libertad123 = array();
$pageTitlesPersonas_Privadas_de_Libertad123 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPersonas_Privadas_de_Libertad123["Spanish"] = array();
	$fieldLabelsPersonas_Privadas_de_Libertad123["Spanish"]["Tabla_21__21__Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino_mun_resid2"] = "Tabla 21  21  Personas Privadas De Libertad Por Rango Etario  Segun Nivel Educativo Y Genero Femenino Mun Resid2";
	$fieldLabelsPersonas_Privadas_de_Libertad123["Spanish"]["Tabla_21__21__Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino_depart_resid"] = "Tabla 21  21  Personas Privadas De Libertad Por Rango Etario  Segun Nivel Educativo Y Genero Femenino Depart Resid";
	$fieldLabelsPersonas_Privadas_de_Libertad123["Spanish"]["Grupo_etarios_por_estado_civil__masculino__rangoetario"] = "Grupo Etarios Por Estado Civil  Masculino  Rangoetario";
	$fieldLabelsPersonas_Privadas_de_Libertad123["Spanish"]["Grupo_etarios_por_estado_civil__masculino__estado_civil"] = "Grupo Etarios Por Estado Civil  Masculino  Estado Civil";
	$fieldLabelsPersonas_Privadas_de_Libertad123["Spanish"]["Grupo_etarios_por_estado_civil__masculino__COUNT_mun_resid_"] = "Grupo Etarios Por Estado Civil  Masculino  COUNT Mun Resid";
	$fieldLabelsPersonas_Privadas_de_Libertad123["Spanish"]["Grupo_etarios_por_estado_civil__masculino__sector_ppd"] = "Grupo Etarios Por Estado Civil  Masculino  Sector Ppd";
	$fieldLabelsPersonas_Privadas_de_Libertad123["Spanish"]["Grupo_etarios_por_estado_civil__masculino__genero"] = "Grupo Etarios Por Estado Civil  Masculino  Genero";
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPersonas_Privadas_de_Libertad123["English"] = array();
	$fieldLabelsPersonas_Privadas_de_Libertad123["English"]["Tabla_21__21__Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino_mun_resid2"] = "Tabla 21  21  Personas Privadas De Libertad Por Rango Etario  Segun Nivel Educativo Y Genero Femenino Mun Resid2";
	$fieldLabelsPersonas_Privadas_de_Libertad123["English"]["Tabla_21__21__Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino_depart_resid"] = "Tabla 21  21  Personas Privadas De Libertad Por Rango Etario  Segun Nivel Educativo Y Genero Femenino Depart Resid";
	$fieldLabelsPersonas_Privadas_de_Libertad123["English"]["Grupo_etarios_por_estado_civil__masculino__rangoetario"] = "Grupo Etarios Por Estado Civil  Masculino  Rangoetario";
	$fieldLabelsPersonas_Privadas_de_Libertad123["English"]["Grupo_etarios_por_estado_civil__masculino__estado_civil"] = "Grupo Etarios Por Estado Civil  Masculino  Estado Civil";
	$fieldLabelsPersonas_Privadas_de_Libertad123["English"]["Grupo_etarios_por_estado_civil__masculino__COUNT_mun_resid_"] = "Grupo Etarios Por Estado Civil  Masculino  COUNT Mun Resid";
	$fieldLabelsPersonas_Privadas_de_Libertad123["English"]["Grupo_etarios_por_estado_civil__masculino__sector_ppd"] = "Grupo Etarios Por Estado Civil  Masculino  Sector Ppd";
	$fieldLabelsPersonas_Privadas_de_Libertad123["English"]["Grupo_etarios_por_estado_civil__masculino__genero"] = "Grupo Etarios Por Estado Civil  Masculino  Genero";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPersonas_Privadas_de_Libertad123[""] = array();
}

//	search fields
$tdataPersonas_Privadas_de_Libertad123[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"Grupo etarios por estado civil (masculino)", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"PPL grupos etarios por Deportado masculino", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por afiliación a Pandillas femenino", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"Grupo etarios por estado civil (femenino)", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"PPL grupos etarios por Deportado Femenino", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por delitos masculino", "field"=>"mun_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por afiliación a Pandillas", "field"=>"mun_resid" );
$tdataPersonas_Privadas_de_Libertad123[".searchFields"]["Tabla_21__21__Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino_mun_resid2"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"PPL grupos etarios por Deportado masculino", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por afiliación a Pandillas", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por afiliación a Pandillas femenino", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"PPL Grupos etarios por delitos masculino", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"PPL grupos etarios por Deportado Femenino", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"Grupo etarios por estado civil (femenino)", "field"=>"depart_resid" );
$dashField[] = array( "table"=>"Grupo etarios por estado civil (masculino)", "field"=>"depart_resid" );
$tdataPersonas_Privadas_de_Libertad123[".searchFields"]["Tabla_21__21__Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino_depart_resid"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Grupo etarios por estado civil (masculino)", "field"=>"rangoetario" );
$tdataPersonas_Privadas_de_Libertad123[".searchFields"]["Grupo_etarios_por_estado_civil__masculino__rangoetario"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Grupo etarios por estado civil (masculino)", "field"=>"estado_civil" );
$tdataPersonas_Privadas_de_Libertad123[".searchFields"]["Grupo_etarios_por_estado_civil__masculino__estado_civil"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Grupo etarios por estado civil (masculino)", "field"=>"COUNT(mun_resid)" );
$tdataPersonas_Privadas_de_Libertad123[".searchFields"]["Grupo_etarios_por_estado_civil__masculino__COUNT_mun_resid_"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Grupo etarios por estado civil (masculino)", "field"=>"sector_ppd" );
$tdataPersonas_Privadas_de_Libertad123[".searchFields"]["Grupo_etarios_por_estado_civil__masculino__sector_ppd"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Grupo etarios por estado civil (masculino)", "field"=>"genero" );
$tdataPersonas_Privadas_de_Libertad123[".searchFields"]["Grupo_etarios_por_estado_civil__masculino__genero"] = $dashField;

// all search fields
$tdataPersonas_Privadas_de_Libertad123[".allSearchFields"] = array();
$tdataPersonas_Privadas_de_Libertad123[".allSearchFields"][] = "Tabla_21__21__Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino_mun_resid2";
$tdataPersonas_Privadas_de_Libertad123[".allSearchFields"][] = "Tabla_21__21__Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino_depart_resid";
$tdataPersonas_Privadas_de_Libertad123[".allSearchFields"][] = "Grupo_etarios_por_estado_civil__masculino__rangoetario";
$tdataPersonas_Privadas_de_Libertad123[".allSearchFields"][] = "Grupo_etarios_por_estado_civil__masculino__estado_civil";
$tdataPersonas_Privadas_de_Libertad123[".allSearchFields"][] = "Grupo_etarios_por_estado_civil__masculino__COUNT_mun_resid_";
$tdataPersonas_Privadas_de_Libertad123[".allSearchFields"][] = "Grupo_etarios_por_estado_civil__masculino__sector_ppd";
$tdataPersonas_Privadas_de_Libertad123[".allSearchFields"][] = "Grupo_etarios_por_estado_civil__masculino__genero";

// good like search fields
$tdataPersonas_Privadas_de_Libertad123[".googleLikeFields"] = array();
$tdataPersonas_Privadas_de_Libertad123[".googleLikeFields"][] = "Tabla_21__21__Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino_mun_resid2";
$tdataPersonas_Privadas_de_Libertad123[".googleLikeFields"][] = "Tabla_21__21__Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino_depart_resid";
$tdataPersonas_Privadas_de_Libertad123[".googleLikeFields"][] = "Grupo_etarios_por_estado_civil__masculino__rangoetario";
$tdataPersonas_Privadas_de_Libertad123[".googleLikeFields"][] = "Grupo_etarios_por_estado_civil__masculino__estado_civil";
$tdataPersonas_Privadas_de_Libertad123[".googleLikeFields"][] = "Grupo_etarios_por_estado_civil__masculino__COUNT_mun_resid_";
$tdataPersonas_Privadas_de_Libertad123[".googleLikeFields"][] = "Grupo_etarios_por_estado_civil__masculino__sector_ppd";
$tdataPersonas_Privadas_de_Libertad123[".googleLikeFields"][] = "Grupo_etarios_por_estado_civil__masculino__genero";

$tdataPersonas_Privadas_de_Libertad123[".dashElements"] = array();

	$dbelement = array( "elementName" => "Grupo_etarios_por_estado_civil__masculino__report", "table" => "Grupo etarios por estado civil (masculino)", "type" => 2);
	$dbelement["cellName"] = "cell_12_0";

		$dbelement["reload"] = 60;
		

	$tdataPersonas_Privadas_de_Libertad123[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Grupo_etarios_por_estado_civil__femenino__report", "table" => "Grupo etarios por estado civil (femenino)", "type" => 2);
	$dbelement["cellName"] = "cell_14_0";

		$dbelement["reload"] = 60;
		

	$tdataPersonas_Privadas_de_Libertad123[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_report", "table" => "PPL Grupos etarios por afiliación a Pandillas", "type" => 2);
	$dbelement["cellName"] = "cell_16_0";

		$dbelement["reload"] = 60;
		

	$tdataPersonas_Privadas_de_Libertad123[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino_report", "table" => "PPL Grupos etarios por afiliación a Pandillas femenino", "type" => 2);
	$dbelement["cellName"] = "cell_18_0";

		$dbelement["reload"] = 60;
		

	$tdataPersonas_Privadas_de_Libertad123[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "PPL_grupos_etarios_por_Deportado_masculino_report", "table" => "PPL grupos etarios por Deportado masculino", "type" => 2);
	$dbelement["cellName"] = "cell_20_0";

		$dbelement["reload"] = 60;
		

	$tdataPersonas_Privadas_de_Libertad123[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "PPL_grupos_etarios_por_Deportado_Femenino_report", "table" => "PPL grupos etarios por Deportado Femenino", "type" => 2);
	$dbelement["cellName"] = "cell_22_0";

		$dbelement["reload"] = 60;
		

	$tdataPersonas_Privadas_de_Libertad123[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "PPL_Grupos_etarios_por_delitos_masculino_report", "table" => "PPL Grupos etarios por delitos masculino", "type" => 2);
	$dbelement["cellName"] = "cell_24_0";

		$dbelement["reload"] = 60;
		

	$tdataPersonas_Privadas_de_Libertad123[".dashElements"][] = $dbelement;

$tdataPersonas_Privadas_de_Libertad123[".shortTableName"] = "Personas_Privadas_de_Libertad123";
$tdataPersonas_Privadas_de_Libertad123[".entityType"] = 4;



$tableEvents["Personas Privadas de Libertad123"] = new eventsBase;
$tdataPersonas_Privadas_de_Libertad123[".hasEvents"] = false;


$tdataPersonas_Privadas_de_Libertad123[".tableType"] = "dashboard";



$tdataPersonas_Privadas_de_Libertad123[".addPageEvents"] = false;

$tables_data["Personas Privadas de Libertad123"]=&$tdataPersonas_Privadas_de_Libertad123;
$field_labels["Personas_Privadas_de_Libertad123"] = &$fieldLabelsPersonas_Privadas_de_Libertad123;
$page_titles["Personas_Privadas_de_Libertad123"] = &$pageTitlesPersonas_Privadas_de_Libertad123;

?>