<?php
require_once(getabspath("classes/cipherer.php"));



$tdataTr_nsito = array();
$tdataTr_nsito[".ShortName"] = "Tr_nsito";

//	field labels
$fieldLabelsTr_nsito = array();
$pageTitlesTr_nsito = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsTr_nsito["Spanish"] = array();
	$fieldLabelsTr_nsito["Spanish"]["Tr_nsito__Departamento_por_resultado_del_accidente_departamento"] = "Departamento";
	$fieldLabelsTr_nsito["Spanish"]["Tr_nsito__Departamento_por_resultado_del_accidente_munacc"] = "Municipio";
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTr_nsito["English"] = array();
	$fieldLabelsTr_nsito["English"]["Tr_nsito__Departamento_por_resultado_del_accidente_departamento"] = "Departamento";
	$fieldLabelsTr_nsito["English"]["Tr_nsito__Departamento_por_resultado_del_accidente_munacc"] = "Municipio";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTr_nsito[""] = array();
}

//	search fields
$tdataTr_nsito[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"Tránsito-Causa del accidente por resultado del accidente", "field"=>"departamento" );
$dashField[] = array( "table"=>"Tránsito-Calidad de la víctima por resultado del accidente", "field"=>"departamento" );
$dashField[] = array( "table"=>"Tránsito-Fallecidos Rango etario víctima por sexo víctima", "field"=>"departamento" );
$dashField[] = array( "table"=>"Tránsito- municipio por resultado del accidente", "field"=>"departamento" );
$dashField[] = array( "table"=>"Tránsito-Lesionados Rango etario víctima por sexo víctima", "field"=>"departamento" );
$dashField[] = array( "table"=>"Tránsito-Dirección accidente por resultado del accidente", "field"=>"departamento" );
$dashField[] = array( "table"=>"Tránsito-Responsable accidente detenido por resultado del accidente", "field"=>"departamento" );
$dashField[] = array( "table"=>"Tránsito-Resultado del accidente por rango horario de accidentes", "field"=>"departamento" );
$dashField[] = array( "table"=>"Tránsito-Tipo de vehículo por resultado del accidente", "field"=>"departamento" );
$dashField[] = array( "table"=>"Tránsito- Departamento por resultado del accidente", "field"=>"departamento" );
$dashField[] = array( "table"=>"Tránsito-Ruta transporte colectivo por resultado del accidente", "field"=>"departamento" );
$dashField[] = array( "table"=>"Tránsito-Resultado del accidente por meses de accidentes", "field"=>"departamento" );
$dashField[] = array( "table"=>"Tránsito-Tipo de accidente por resultado del accidente", "field"=>"departamento" );
$tdataTr_nsito[".searchFields"]["Tr_nsito__Departamento_por_resultado_del_accidente_departamento"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Tránsito-Calidad de la víctima por resultado del accidente", "field"=>"munacc" );
$dashField[] = array( "table"=>"Tránsito-Tipo de vehículo por resultado del accidente", "field"=>"munacc" );
$dashField[] = array( "table"=>"Tránsito-Tipo de accidente por resultado del accidente", "field"=>"munacc" );
$dashField[] = array( "table"=>"Tránsito-Lesionados Rango etario víctima por sexo víctima", "field"=>"munacc" );
$dashField[] = array( "table"=>"Tránsito-Responsable accidente detenido por resultado del accidente", "field"=>"munacc" );
$dashField[] = array( "table"=>"Tránsito-Fallecidos Rango etario víctima por sexo víctima", "field"=>"munacc" );
$dashField[] = array( "table"=>"Tránsito-Causa del accidente por resultado del accidente", "field"=>"munacc" );
$dashField[] = array( "table"=>"Tránsito-Ruta transporte colectivo por resultado del accidente", "field"=>"munacc" );
$dashField[] = array( "table"=>"Tránsito-Dirección accidente por resultado del accidente", "field"=>"munacc" );
$dashField[] = array( "table"=>"Tránsito-Resultado del accidente por meses de accidentes", "field"=>"munacc" );
$dashField[] = array( "table"=>"Tránsito- municipio por resultado del accidente", "field"=>"munacc" );
$dashField[] = array( "table"=>"Tránsito-Resultado del accidente por rango horario de accidentes", "field"=>"munacc" );
$tdataTr_nsito[".searchFields"]["Tr_nsito__Departamento_por_resultado_del_accidente_munacc"] = $dashField;

// all search fields
$tdataTr_nsito[".allSearchFields"] = array();
$tdataTr_nsito[".allSearchFields"][] = "Tr_nsito__Departamento_por_resultado_del_accidente_departamento";
$tdataTr_nsito[".allSearchFields"][] = "Tr_nsito__Departamento_por_resultado_del_accidente_munacc";

// good like search fields
$tdataTr_nsito[".googleLikeFields"] = array();
$tdataTr_nsito[".googleLikeFields"][] = "Tr_nsito__Departamento_por_resultado_del_accidente_departamento";
$tdataTr_nsito[".googleLikeFields"][] = "Tr_nsito__Departamento_por_resultado_del_accidente_munacc";

$tdataTr_nsito[".dashElements"] = array();

	$dbelement = array( "elementName" => "Tr_nsito__Departamento_por_resultado_del_accidente_report", "table" => "Tránsito- Departamento por resultado del accidente", "type" => 2);
	$dbelement["cellName"] = "cell_2_0";

			

	$tdataTr_nsito[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tr_nsito__municipio_por_resultado_del_accidente_report", "table" => "Tránsito- municipio por resultado del accidente", "type" => 2);
	$dbelement["cellName"] = "cell_4_0";

			

	$tdataTr_nsito[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tr_nsito_Fallecidos_Rango_etario_v_ctima_por_sexo_v_ctima_report", "table" => "Tránsito-Fallecidos Rango etario víctima por sexo víctima", "type" => 2);
	$dbelement["cellName"] = "cell_6_0";

			

	$tdataTr_nsito[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tr_nsito_Lesionados_Rango_etario_v_ctima_por_sexo_v_ctima1_report", "table" => "Tránsito-Lesionados Rango etario víctima por sexo víctima", "type" => 2);
	$dbelement["cellName"] = "cell_8_0";

			

	$tdataTr_nsito[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tr_nsito_Calidad_de_la_v_ctima_por_resultado_del_accidente_report", "table" => "Tránsito-Calidad de la víctima por resultado del accidente", "type" => 2);
	$dbelement["cellName"] = "cell_10_0";

			

	$tdataTr_nsito[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tr_nsito_Tipo_de_accidente_por_resultado_del_accidente_report", "table" => "Tránsito-Tipo de accidente por resultado del accidente", "type" => 2);
	$dbelement["cellName"] = "cell_12_0";

			

	$tdataTr_nsito[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tr_nsito_Causa_del_accidente_por_resultado_del_accidente_report", "table" => "Tránsito-Causa del accidente por resultado del accidente", "type" => 2);
	$dbelement["cellName"] = "cell_14_0";

			

	$tdataTr_nsito[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tr_nsito_Tipo_de_veh_culo_por_resultado_del_accidente_report", "table" => "Tránsito-Tipo de vehículo por resultado del accidente", "type" => 2);
	$dbelement["cellName"] = "cell_16_0";

			

	$tdataTr_nsito[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente_report", "table" => "Tránsito-Ruta transporte colectivo por resultado del accidente", "type" => 2);
	$dbelement["cellName"] = "cell_18_0";

			

	$tdataTr_nsito[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tr_nsito_Responsable_accidente_detenido_por_resultado_del_accidente_report", "table" => "Tránsito-Responsable accidente detenido por resultado del accidente", "type" => 2);
	$dbelement["cellName"] = "cell_20_0";

			

	$tdataTr_nsito[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tr_nsito_Resultado_del_accidente_por_meses_de_accidentes_report", "table" => "Tránsito-Resultado del accidente por meses de accidentes", "type" => 2);
	$dbelement["cellName"] = "cell_22_0";

			

	$tdataTr_nsito[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tr_nsito_search", "table" => "Tránsito", "type" => 4);
	$dbelement["cellName"] = "cell_0_0";

			

	$tdataTr_nsito[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes_report", "table" => "Tránsito-Resultado del accidente por rango horario de accidentes", "type" => 2);
	$dbelement["cellName"] = "cell_24_0";

			

	$tdataTr_nsito[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Tr_nsito_Direcci_n_accidente_por_resultado_del_accidente_report", "table" => "Tránsito-Dirección accidente por resultado del accidente", "type" => 2);
	$dbelement["cellName"] = "cell_26_0";

			

	$tdataTr_nsito[".dashElements"][] = $dbelement;

$tdataTr_nsito[".shortTableName"] = "Tr_nsito";
$tdataTr_nsito[".entityType"] = 4;



$tableEvents["Tránsito"] = new eventsBase;
$tdataTr_nsito[".hasEvents"] = false;


$tdataTr_nsito[".tableType"] = "dashboard";



$tdataTr_nsito[".addPageEvents"] = false;

$tables_data["Tránsito"]=&$tdataTr_nsito;
$field_labels["Tr_nsito"] = &$fieldLabelsTr_nsito;
$page_titles["Tr_nsito"] = &$pageTitlesTr_nsito;

?>