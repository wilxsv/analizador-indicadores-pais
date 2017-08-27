<?php
require_once(getabspath("classes/cipherer.php"));



$tdataMINED_2 = array();
$tdataMINED_2[".ShortName"] = "MINED_2";

//	field labels
$fieldLabelsMINED_2 = array();
$pageTitlesMINED_2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsMINED_2["Spanish"] = array();
	$fieldLabelsMINED_2["Spanish"]["Mined_Prueba_departamento"] = "Departamento";
	$fieldLabelsMINED_2["Spanish"]["Mined_Prueba_municipio"] = "Municipio";
	$fieldLabelsMINED_2["Spanish"]["Mined_Prueba_ipce_0_1"] = "Ipce 0 1";
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMINED_2["English"] = array();
	$fieldLabelsMINED_2["English"]["Mined_Prueba_departamento"] = "Departamento";
	$fieldLabelsMINED_2["English"]["Mined_Prueba_municipio"] = "Municipio";
	$fieldLabelsMINED_2["English"]["Mined_Prueba_ipce_0_1"] = "Ipce 0 1";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMINED_2[""] = array();
}

//	search fields
$tdataMINED_2[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"Mined Prueba", "field"=>"departamento" );
$tdataMINED_2[".searchFields"]["Mined_Prueba_departamento"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Mined Prueba", "field"=>"municipio" );
$tdataMINED_2[".searchFields"]["Mined_Prueba_municipio"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Mined Prueba", "field"=>"ipce_0_1" );
$tdataMINED_2[".searchFields"]["Mined_Prueba_ipce_0_1"] = $dashField;

// all search fields
$tdataMINED_2[".allSearchFields"] = array();
$tdataMINED_2[".allSearchFields"][] = "Mined_Prueba_departamento";
$tdataMINED_2[".allSearchFields"][] = "Mined_Prueba_municipio";
$tdataMINED_2[".allSearchFields"][] = "Mined_Prueba_ipce_0_1";

// good like search fields
$tdataMINED_2[".googleLikeFields"] = array();
$tdataMINED_2[".googleLikeFields"][] = "Mined_Prueba_departamento";
$tdataMINED_2[".googleLikeFields"][] = "Mined_Prueba_municipio";
$tdataMINED_2[".googleLikeFields"][] = "Mined_Prueba_ipce_0_1";

$tdataMINED_2[".dashElements"] = array();

	$dbelement = array( "elementName" => "Mined_Prueba_map", "table" => "Mined Prueba", "type" => 6);
	$dbelement["cellName"] = "cell_0_0";

			$dbelement["width"] = 1200;
		$dbelement["height"] = 600;
		$dbelement["zoom"] = "auto";
	$dbelement["addressF"] = "";
	$dbelement["latF"] = "y";
	$dbelement["lonF"] = "x";
	$dbelement["descF"] = "nombre_c_e";
	$dbelement["mapMarkerCount"] = 50;
	$dbelement["isMarkerIconCustom"] = 0;
		$dbelement["iconF"] = "images/menuicons/escuela.png";
		$dbelement["updateMoved"] = true;

	// Advanced map options
		$dbelement["clustering"] = (0 > 0);
	$dbelement["heatMap"] = (0 > 0);


	$tdataMINED_2[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Mined_Prueba_search", "table" => "Mined Prueba", "type" => 4);
	$dbelement["cellName"] = "cell_1_0";

		$dbelement["reload"] = 60;
		

	$tdataMINED_2[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Mined_Prueba_list", "table" => "Mined Prueba", "type" => 0);
	$dbelement["cellName"] = "cell_1_1";

		$dbelement["reload"] = 60;
			

	$tdataMINED_2[".dashElements"][] = $dbelement;

$tdataMINED_2[".shortTableName"] = "MINED_2";
$tdataMINED_2[".entityType"] = 4;



$tableEvents["MINED 2"] = new eventsBase;
$tdataMINED_2[".hasEvents"] = false;


$tdataMINED_2[".tableType"] = "dashboard";



$tdataMINED_2[".addPageEvents"] = false;

$tables_data["MINED 2"]=&$tdataMINED_2;
$field_labels["MINED_2"] = &$fieldLabelsMINED_2;
$page_titles["MINED_2"] = &$pageTitlesMINED_2;

?>