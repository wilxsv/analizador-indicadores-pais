<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
add_nocache_headers();

require_once('include/xtempl.php');
require_once("classes/searchpanel.php");
require_once("classes/searchcontrol.php");
require_once("classes/searchclause.php");
require_once("classes/panelsearchcontrol.php");
require_once("include/Mined_Prueba_variables.php");
require_once('classes/listpage.php');
require_once('include/lookuplinks.php');

//	Check whether the page was called as a part of Lookup wizard - List page with search.
//  Verify the eligibility of such a call.

InitLookupLinks();
if( !ListPage::processListPageSecurity( $strTableName ) )
	return;

if( ListPage::processSaveParams( $strTableName ) )
	return;




$layout = new TLayout("list8", "AvenueAvenue", "MobileAvenue");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["bigblock"] = array();
$layout->container_properties["bigblock"] = array(  );
$layout->containers["bigblock"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"recordcontrols" );
$layout->containers["recordcontrols"] = array();
$layout->container_properties["recordcontrols"] = array(  );
$layout->containers["recordcontrols"][] = array("name"=>"recordcontrols_new",
	"block"=>"newrecord_controls_block", "substyle"=>1  );

$layout->containers["recordcontrols"][] = array("name"=>"recordcontrol",
	"block"=>"record_controls_block", "substyle"=>1  );

$layout->containers["recordcontrols"][] = array("name"=>"toplinks",
	"block"=>"more_list", "substyle"=>1  );

$layout->skins["recordcontrols"] = "2";


$layout->containers["bigblock"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"message" );
$layout->containers["message"] = array();
$layout->container_properties["message"] = array(  );
$layout->containers["message"][] = array("name"=>"message",
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "2";


$layout->containers["bigblock"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"grid" );
$layout->containers["grid"] = array();
$layout->container_properties["grid"] = array(  );
$layout->containers["grid"][] = array("name"=>"grid",
	"block"=>"grid_block", "substyle"=>1  );

$layout->skins["grid"] = "grid";


$layout->containers["bigblock"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"pagination" );
$layout->containers["pagination"] = array();
$layout->container_properties["pagination"] = array(  );
$layout->containers["pagination"][] = array("name"=>"pagination",
	"block"=>"pagination_block", "substyle"=>1  );

$layout->skins["pagination"] = "2";


$layout->skins["bigblock"] = "1";

$layout->blocks["center"][] = "bigblock";
$layout->blocks["left"] = array();
$layout->containers["left"] = array();
$layout->container_properties["left"] = array(  );
$layout->containers["left"][] = array("name"=>"vmenu",
	"block"=>"menu_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"vsearch1",
	"block"=>"searchform_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"vsearch2",
	"block"=>"searchform_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"search_saving_buttons",
	"block"=>"searchsaving_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"vdetails_found",
	"block"=>"details_block", "substyle"=>2  );

$layout->containers["left"][] = array("name"=>"vpage_of",
	"block"=>"pages_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"vrecsperpage",
	"block"=>"recordspp_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"searchpanel",
	"block"=>"searchPanel", "substyle"=>1  );

$layout->skins["left"] = "menu";

$layout->blocks["left"][] = "left";
$layout->blocks["top"] = array();
$layout->containers["master"] = array();
$layout->container_properties["master"] = array(  );
$layout->containers["master"][] = array("name"=>"masterinfo",
	"block"=>"mastertable_block", "substyle"=>1  );

$layout->skins["master"] = "empty";

$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();
$layout->container_properties["toplinks"] = array(  );
$layout->containers["toplinks"][] = array("name"=>"loggedas",
	"block"=>"security_block", "substyle"=>1  );

$layout->containers["toplinks"][] = array("name"=>"languages",
	"block"=>"languages_block", "substyle"=>1  );

$layout->skins["toplinks"] = "2";

$layout->blocks["top"][] = "toplinks";
$page_layouts["Mined_Prueba_list"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");


// add master layouts 




$layout = new TLayout("masterreport", "AvenueAvenue", "MobileAvenue");
$layout->version = 2;
$layout->blocks["bare"] = array();
$layout->containers["masterlistheader"] = array();
$layout->container_properties["masterlistheader"] = array(  );
$layout->containers["masterlistheader"][] = array("name"=>"masterlistheader",
	"block"=>"", "substyle"=>1  );

$layout->skins["masterlistheader"] = "empty";

$layout->blocks["bare"][] = "masterlistheader";
$layout->containers["mastergrid"] = array();
$layout->container_properties["mastergrid"] = array(  );
$layout->containers["mastergrid"][] = array("name"=>"masterlistgrid",
	"block"=>"", "substyle"=>1  );

$layout->skins["mastergrid"] = "grid";

$layout->blocks["bare"][] = "mastergrid";
$page_layouts["Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero_masterreport"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



$options = array();
//array of params for classes

//	Include necessary files in accordance with the page displaying mode
$mode = ListPage::readListModeFromRequest();
if( $mode == LIST_SIMPLE )
{
	require_once('classes/listpage_simple.php');
	require_once("classes/searchpanelsimple.php");
}
elseif( $mode == LIST_AJAX )
{
	require_once('classes/listpage_simple.php');
	require_once('classes/listpage_ajax.php');
	require_once("classes/searchpanelsimple.php");
}
elseif( $mode == LIST_LOOKUP )
{	
	require_once('classes/listpage_embed.php');
	require_once('classes/listpage_lookup.php');
	require_once("classes/searchpanellookup.php");
	
	$options["lookupTable"] = postvalue("table");
	$options["lookupField"] = postvalue("field");
	$options["lookupPageType"] = postvalue("pageType");
	
	if( postvalue("parentsExist") )
		$options["parentCtrlsData"] = my_json_decode( postvalue("parentCtrlsData") );
}
elseif( $mode == LIST_DETAILS )
{	
	require_once('classes/listpage_embed.php');
	require_once('classes/listpage_dpinline.php');
	require_once('classes/listpage_dplist.php');
}
elseif( $mode == LIST_DASHDETAILS )
{
	require_once('classes/listpage_embed.php');
	require_once('classes/listpage_dashboard.php');
	require_once('classes/listpage_dpdash.php');
}
elseif( $mode == LIST_DASHBOARD )
{
	require_once('classes/listpage_embed.php');
	require_once('classes/listpage_dashboard.php');
}
elseif( $mode == MAP_DASHBOARD )
{
	require_once('classes/listpage_embed.php');
	require_once('classes/listpage_dashboard.php');
	require_once('classes/map_dashboard.php');
} 

$xt = new Xtempl( $mode != LIST_SIMPLE ); //#9607 1. Temporary fix

$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["flyId"] = postvalue("recordId") + 0;
$options["mode"] = $mode;
$options['xt'] = &$xt;
$options['mainMasterPageType'] = postvalue("mainmasterpagetype");
$options['masterPageType'] = postvalue("masterpagetype");
$options["masterTable"] = postvalue("mastertable");
$options["masterId"] = postvalue("masterid");
$options["firstTime"] = postvalue("firsttime");
$options["sortBy"] = postvalue("sortby");


if( $mode == LIST_DASHBOARD && postvalue("nodata") && strlen($options["masterTable"]) )
	$options["showNoData"] = true;

if( $mode != LIST_LOOKUP )
{
	$options["dashElementName"] = postvalue("dashelement");
	$options["dashTName"] = postvalue("table");
}

if(	postvalue("mapRefresh") )
{
	$options["mapRefresh"] = true;
	$options["vpCoordinates"] = my_json_decode( postvalue("vpCoordinates") );
}	

$i = 1;
while(isset($_REQUEST["masterkey".$i])) 
{
	if($i == 1)
	{
		$options["masterKeysReq"] = array();
	}
	$options["masterKeysReq"][$i] = $_REQUEST["masterkey".$i];
	$i++;
}
//	Create $pageObject
$pageObject = ListPage::createListPage($strTableName, $options);

if( $pageObject->processSaveSearch() )
	exit();

$gQuery->ReplaceFieldsWithDummies( $pageObject->getNotListBlobFieldsIndices() );


if( $mode != LIST_DETAILS && $mode != MAP_DASHBOARD && $mode != LIST_DASHBOARD ) 
{ 
$mapSettings['id'] = "Mined_Prueba_map";
// Longitude and latitude or address field should be specified
// name of field in table that used as address for map
$mapSettings["addressField"] = "DisplayOnMap";

// name of field in table that used as latitude for map
$mapSettings["latField"] = "Latitude";

// name of field in table that used as longitude for map
$mapSettings["lngField"] = "Longitude";

// You can specify a custom marker icon.
// Enter either a file name for all markers:
//  $mapSettings["markerIcon"] = "images/Smile.png";
// Or specify a field from your SQL query that contains marker name:
//  $mapSettings["markerField"] = "map_icon";
// The query field should contain a path tho the image file
// Leave both fields blank to use default marker.
$mapSettings["markerIcon"] = "";
$mapSettings["markerField"] = "";

// width of map in px
$mapSettings["width"] = 1200;
// height of map in px
$mapSettings["height"] = 450;
$mapSettings['description'] = 'Escuelas Priorizadas MINED'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
//$mapSettings['zoom'] = 13;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
$mapSettings['clustering'] = true;


// Google maps only.
// Display markers in a form of a heat map.
// This feature works only with markers with coordinates specified.
//$mapSettings['heatMap'] = true;

// Uncomment the next line to make map markers lead to Edit pages.
// By default clicks on markers open View pages.
$mapSettings["markerAsEditLink"] = true;

// Display Center map link in the address field
// 1 - display center link near the address
// 2 - center map when clicking on the address itself
$mapSettings['showCenterLink'] = 1;
// Center Link text
$mapSettings['centerLinkText'] = 'Center';
$mapSettings['center']='-80.218,13';
$mapSettings['maximum-scale'] = 1;
$mapSettings['minimum-scale'] = 1;
$mapSettings['user-scalable'] = true;


DisplayMap($mapSettings);;
}

unset($_SESSION["message_add"]);
unset($_SESSION["message_edit"]);

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();

?>