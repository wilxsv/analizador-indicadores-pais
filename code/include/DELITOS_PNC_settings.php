<?php
require_once(getabspath("classes/cipherer.php"));



$tdataDELITOS_PNC = array();
$tdataDELITOS_PNC[".ShortName"] = "DELITOS_PNC";

//	field labels
$fieldLabelsDELITOS_PNC = array();
$pageTitlesDELITOS_PNC = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsDELITOS_PNC["Spanish"] = array();
	$fieldLabelsDELITOS_PNC["Spanish"]["Tabla1__1__Delitos_por_sector_Estandarizado_muni_he"] = "Tabla1  1  Delitos Por Sector Estandarizado Muni He";
	$fieldLabelsDELITOS_PNC["Spanish"]["Tabla_3__3__Delitos_por_lugar_del_hecho_depart_he"] = "Tabla 3  3  Delitos Por Lugar Del Hecho Depart He";
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDELITOS_PNC["English"] = array();
	$fieldLabelsDELITOS_PNC["English"]["Tabla1__1__Delitos_por_sector_Estandarizado_muni_he"] = "Tabla1  1  Delitos Por Sector Estandarizado Muni He";
	$fieldLabelsDELITOS_PNC["English"]["Tabla_3__3__Delitos_por_lugar_del_hecho_depart_he"] = "Tabla 3  3  Delitos Por Lugar Del Hecho Depart He";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDELITOS_PNC[""] = array();
}

//	search fields
$tdataDELITOS_PNC[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"Delitos por sector Estandarizado", "field"=>"muni_he" );
$dashField[] = array( "table"=>"Delitos por área", "field"=>"muni_he" );
$dashField[] = array( "table"=>"Delitos por lugar del hecho", "field"=>"muni_he" );
$dashField[] = array( "table"=>"Delitos por mes del hecho", "field"=>"muni_he" );
$dashField[] = array( "table"=>"Delitos por tipo de arma", "field"=>"muni_he" );
$dashField[] = array( "table"=>"Ocupación de la víctima por Delitos", "field"=>"muni_he" );
$dashField[] = array( "table"=>"Amenazas, por rango etarios, según sexo victima", "field"=>"muni_he" );
$dashField[] = array( "table"=>"Delitos Sexuales  por rango etarios, según sexo victima", "field"=>"muni_he" );
$dashField[] = array( "table"=>"Relacion de victima con agresor", "field"=>"muni_he" );
$dashField[] = array( "table"=>"Homicidios por rango etarios, según sexo", "field"=>"muni_he" );
$dashField[] = array( "table"=>"Homicidios tentados por rango etarios, según sexo victima", "field"=>"muni_he" );
$dashField[] = array( "table"=>"Hurtos por rango etarios, según sexo victima", "field"=>"muni_he" );
$dashField[] = array( "table"=>"Hurtos de vehículo por rango etarios, según sexo victima", "field"=>"muni_he" );
$dashField[] = array( "table"=>"Lesiones por rango etarios etarios, según sexo victima", "field"=>"muni_he" );
$dashField[] = array( "table"=>"Robo y hurto de vehículo con mercaderia por rango etario, según sexo victima", "field"=>"muni_he" );
$dashField[] = array( "table"=>"Robo de vehículo por rango etario, según sexo victima", "field"=>"muni_he" );
$dashField[] = array( "table"=>"Delitos por rango de horas", "field"=>"muni_he" );
$dashField[] = array( "table"=>"Municipios y delitos", "field"=>"muni_he" );
$dashField[] = array( "table"=>"Robos por rango etario, según sexo victima", "field"=>"muni_he" );
$dashField[] = array( "table"=>"Delitos por Móvil", "field"=>"muni_he" );
$dashField[] = array( "table"=>"Sector PPD por tipo de arma", "field"=>"muni_he" );
$dashField[] = array( "table"=>"Hechos delictivos dia del hecho", "field"=>"muni_he" );
$tdataDELITOS_PNC[".searchFields"]["Tabla1__1__Delitos_por_sector_Estandarizado_muni_he"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Delitos por sector Estandarizado", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Delitos por área", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Delitos por lugar del hecho", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Ocupación de la víctima por Delitos", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Hurtos por rango etarios, según sexo victima", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Homicidios por rango etarios, según sexo", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Delitos por rango de horas", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Delitos Sexuales  por rango etarios, según sexo victima", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Relacion de victima con agresor", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Robo y hurto de vehículo con mercaderia por rango etario, según sexo victima", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Homicidios tentados por rango etarios, según sexo victima", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Delitos por mes del hecho", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Delitos por Móvil", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Hurtos de vehículo por rango etarios, según sexo victima", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Amenazas, por rango etarios, según sexo victima", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Robo de vehículo por rango etario, según sexo victima", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Hechos delictivos dia del hecho", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Sector PPD por tipo de arma", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Robos por rango etario, según sexo victima", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Municipios y delitos", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Lesiones por rango etarios etarios, según sexo victima", "field"=>"depart_he" );
$dashField[] = array( "table"=>"Delitos por tipo de arma", "field"=>"depart_he" );
$tdataDELITOS_PNC[".searchFields"]["Tabla_3__3__Delitos_por_lugar_del_hecho_depart_he"] = $dashField;

// all search fields
$tdataDELITOS_PNC[".allSearchFields"] = array();
$tdataDELITOS_PNC[".allSearchFields"][] = "Tabla1__1__Delitos_por_sector_Estandarizado_muni_he";
$tdataDELITOS_PNC[".allSearchFields"][] = "Tabla_3__3__Delitos_por_lugar_del_hecho_depart_he";

// good like search fields
$tdataDELITOS_PNC[".googleLikeFields"] = array();
$tdataDELITOS_PNC[".googleLikeFields"][] = "Tabla1__1__Delitos_por_sector_Estandarizado_muni_he";
$tdataDELITOS_PNC[".googleLikeFields"][] = "Tabla_3__3__Delitos_por_lugar_del_hecho_depart_he";

$tdataDELITOS_PNC[".dashElements"] = array();

	$dbelement = array( "elementName" => "Tabla1__1__Delitos_por_sector_Estandarizado_report", "table" => "Delitos por sector Estandarizado", "type" => 2);
	$dbelement["cellName"] = "cell_5_0";

		$dbelement["reload"] = 60;
		

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tabla_2__2__Delitos_por__rea_report", "table" => "Delitos por área", "type" => 2);
	$dbelement["cellName"] = "cell_7_0";

		$dbelement["reload"] = 60;
		

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tabla_3__3__Delitos_por_lugar_del_hecho_report", "table" => "Delitos por lugar del hecho", "type" => 2);
	$dbelement["cellName"] = "cell_9_0";

		$dbelement["reload"] = 60;
		

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Hechos_delictivos_dia_del_hecho_report", "table" => "Hechos delictivos dia del hecho", "type" => 2);
	$dbelement["cellName"] = "cell_13_0";

		$dbelement["reload"] = 60;
		

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tabla_8__8_Delitos_Sexuales__por_rango_etarios__seg_n_sexo_victima_report", "table" => "Delitos Sexuales  por rango etarios, según sexo victima", "type" => 2);
	$dbelement["cellName"] = "cell_17_0";

		$dbelement["reload"] = 60;
		

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tabla_7__7_Amenazas__por_rango_etarios__seg_n_sexo_victima_report", "table" => "Amenazas, por rango etarios, según sexo victima", "type" => 2);
	$dbelement["cellName"] = "cell_15_0";

		$dbelement["reload"] = 60;
		

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tabla_9_9__Homicidios_por_rango_etarios__seg_n_sexo_report", "table" => "Homicidios por rango etarios, según sexo", "type" => 2);
	$dbelement["cellName"] = "cell_19_0";

		$dbelement["reload"] = 60;
		

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tabla_10__10__Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima_report", "table" => "Homicidios tentados por rango etarios, según sexo victima", "type" => 2);
	$dbelement["cellName"] = "cell_21_0";

		$dbelement["reload"] = 60;
		

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tabla_11__11_Hurtos_por_rango_etarios__seg_n_sexo_victima_report", "table" => "Hurtos por rango etarios, según sexo victima", "type" => 2);
	$dbelement["cellName"] = "cell_23_0";

		$dbelement["reload"] = 60;
		

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tabla_12__12_Hurtos_de_veh_culo_por_rango_etarios__seg_n_sexo_victima_report", "table" => "Hurtos de vehículo por rango etarios, según sexo victima", "type" => 2);
	$dbelement["cellName"] = "cell_25_0";

		$dbelement["reload"] = 60;
		

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tabla_13__13_Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima_report", "table" => "Lesiones por rango etarios etarios, según sexo victima", "type" => 2);
	$dbelement["cellName"] = "cell_27_0";

		$dbelement["reload"] = 60;
		

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tabla_15__15__Robo_de_veh_culo_por_rango_etario__seg_n_sexo_victima_report", "table" => "Robo de vehículo por rango etario, según sexo victima", "type" => 2);
	$dbelement["cellName"] = "cell_31_0";

		$dbelement["reload"] = 60;
		

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tabla_16__16__Robo_y_hurto_de_veh_culo_con_mercaderia_por_rango_etario__seg_n_sexo_victima_report", "table" => "Robo y hurto de vehículo con mercaderia por rango etario, según sexo victima", "type" => 2);
	$dbelement["cellName"] = "cell_33_0";

		$dbelement["reload"] = 60;
		

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tabla17__17__Delitos_por_rango_de_horas_report", "table" => "Delitos por rango de horas", "type" => 2);
	$dbelement["cellName"] = "cell_35_0";

		$dbelement["reload"] = 60;
		

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tabla_5__5_Delitos_por_tipo_de_arma_report", "table" => "Delitos por tipo de arma", "type" => 2);
	$dbelement["cellName"] = "cell_43_0";

		$dbelement["reload"] = 60;
		

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tabla_3__3_Delitos_por_M_vil_report", "table" => "Delitos por Móvil", "type" => 2);
	$dbelement["cellName"] = "cell_41_0";

		$dbelement["reload"] = 60;
		

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tabla4__4__Delitos_por_mes_del_hecho_report", "table" => "Delitos por mes del hecho", "type" => 2);
	$dbelement["cellName"] = "cell_11_0";

		$dbelement["reload"] = 60;
		

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Municipios_y_delitos_report", "table" => "Municipios y delitos", "type" => 2);
	$dbelement["cellName"] = "cell_3_0";

		$dbelement["reload"] = 60;
		

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tabla_6__6_Ocupaci_n_de_la_v_ctima_por_Delitos_report", "table" => "Ocupación de la víctima por Delitos", "type" => 2);
	$dbelement["cellName"] = "cell_37_0";

		$dbelement["reload"] = 60;
		

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Relacion_de_victima_con_agresor_report", "table" => "Relacion de victima con agresor", "type" => 2);
	$dbelement["cellName"] = "cell_39_0";

		$dbelement["reload"] = 60;
		

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tabla_14__14__Robos_por_rango_etario__seg_n_sexo_victima_report", "table" => "Robos por rango etario, según sexo victima", "type" => 2);
	$dbelement["cellName"] = "cell_29_0";

		$dbelement["reload"] = 60;
		

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "DELITOS_PNC_search", "table" => "DELITOS PNC", "type" => 4);
	$dbelement["cellName"] = "cell_0_0";

			

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Delitos_por_sector_PPD_por_tipo_de_arma_report", "table" => "Sector PPD por tipo de arma", "type" => 2);
	$dbelement["cellName"] = "cell_45_0";

			

	$tdataDELITOS_PNC[".dashElements"][] = $dbelement;

$tdataDELITOS_PNC[".shortTableName"] = "DELITOS_PNC";
$tdataDELITOS_PNC[".entityType"] = 4;



$tableEvents["DELITOS PNC"] = new eventsBase;
$tdataDELITOS_PNC[".hasEvents"] = false;


$tdataDELITOS_PNC[".tableType"] = "dashboard";



$tdataDELITOS_PNC[".addPageEvents"] = false;

$tables_data["DELITOS PNC"]=&$tdataDELITOS_PNC;
$field_labels["DELITOS_PNC"] = &$fieldLabelsDELITOS_PNC;
$page_titles["DELITOS_PNC"] = &$pageTitlesDELITOS_PNC;

?>