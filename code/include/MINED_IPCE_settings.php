<?php
require_once(getabspath("classes/cipherer.php"));



$tdataMINED_IPCE = array();
$tdataMINED_IPCE[".ShortName"] = "MINED_IPCE";

//	field labels
$fieldLabelsMINED_IPCE = array();
$pageTitlesMINED_IPCE = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsMINED_IPCE["Spanish"] = array();
	$fieldLabelsMINED_IPCE["Spanish"]["Mined_Prueba_departamento"] = "Departamento";
	$fieldLabelsMINED_IPCE["Spanish"]["Mined_Prueba_municipio"] = "Municipio";
	$fieldLabelsMINED_IPCE["Spanish"]["Mined_Prueba_ipce_0_1"] = "Ipce 0 1";
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMINED_IPCE["English"] = array();
	$fieldLabelsMINED_IPCE["English"]["Mined_Prueba_departamento"] = "Departamento";
	$fieldLabelsMINED_IPCE["English"]["Mined_Prueba_municipio"] = "Municipio";
	$fieldLabelsMINED_IPCE["English"]["Mined_Prueba_ipce_0_1"] = "Ipce 0 1";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMINED_IPCE[""] = array();
}

//	search fields
$tdataMINED_IPCE[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"MINED INDICE", "field"=>"departamento" );
$tdataMINED_IPCE[".searchFields"]["Mined_Prueba_departamento"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MINED INDICE", "field"=>"municipio" );
$tdataMINED_IPCE[".searchFields"]["Mined_Prueba_municipio"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"MINED INDICE", "field"=>"ipce_0_1" );
$tdataMINED_IPCE[".searchFields"]["Mined_Prueba_ipce_0_1"] = $dashField;

// all search fields
$tdataMINED_IPCE[".allSearchFields"] = array();
$tdataMINED_IPCE[".allSearchFields"][] = "Mined_Prueba_departamento";
$tdataMINED_IPCE[".allSearchFields"][] = "Mined_Prueba_municipio";
$tdataMINED_IPCE[".allSearchFields"][] = "Mined_Prueba_ipce_0_1";

// good like search fields
$tdataMINED_IPCE[".googleLikeFields"] = array();
$tdataMINED_IPCE[".googleLikeFields"][] = "Mined_Prueba_departamento";
$tdataMINED_IPCE[".googleLikeFields"][] = "Mined_Prueba_municipio";
$tdataMINED_IPCE[".googleLikeFields"][] = "Mined_Prueba_ipce_0_1";

$tdataMINED_IPCE[".dashElements"] = array();

	$dbelement = array( "elementName" => "Mined_Prueba_map", "table" => "MINED INDICE", "type" => 6);
	$dbelement["cellName"] = "cell_0_0";

			$dbelement["width"] = 1200;
		$dbelement["height"] = 600;
		$dbelement["zoom"] = "auto";
	$dbelement["addressF"] = "";
	$dbelement["latF"] = "y";
	$dbelement["lonF"] = "x";
	$dbelement["descF"] = "DisplayOnMap";
	$dbelement["mapMarkerCount"] = 50;
	$dbelement["isMarkerIconCustom"] = 1;
			$dbelement["updateMoved"] = true;

	// Advanced map options
		$dbelement["clustering"] = (0 > 0);
	$dbelement["heatMap"] = (0 > 0);


	$tdataMINED_IPCE[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Mined_Prueba_search", "table" => "MINED INDICE", "type" => 4);
	$dbelement["cellName"] = "cell_1_0";

		$dbelement["reload"] = 60;
		

	$tdataMINED_IPCE[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Mined_Prueba_list", "table" => "MINED INDICE", "type" => 0);
	$dbelement["cellName"] = "cell_2_0";

		$dbelement["reload"] = 60;
			

	$tdataMINED_IPCE[".dashElements"][] = $dbelement;

$tdataMINED_IPCE[".shortTableName"] = "MINED_IPCE";
$tdataMINED_IPCE[".entityType"] = 4;



$tableEvents["MINED IPCE"] = new eventsBase;
$tdataMINED_IPCE[".hasEvents"] = false;


$tdataMINED_IPCE[".tableType"] = "dashboard";



$tdataMINED_IPCE[".addPageEvents"] = false;

$tables_data["MINED IPCE"]=&$tdataMINED_IPCE;
$field_labels["MINED_IPCE"] = &$fieldLabelsMINED_IPCE;
$page_titles["MINED_IPCE"] = &$pageTitlesMINED_IPCE;

?>