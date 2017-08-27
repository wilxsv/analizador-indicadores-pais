<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
add_nocache_headers();

require_once("classes/searchclause.php");
require_once("include/MINED_2_variables.php");
require_once("classes/searchcontrol.php");
require_once("classes/advancedsearchcontrol.php");
require_once("classes/panelsearchcontrol.php");


Security::processLogoutRequest();

if( !isLogged() )
{ 
	Security::saveRedirectURL();
	redirectToLogin();
}

$cname = postvalue("cname");
$rname = postvalue("rname");

$chrt_array = array();
$rpt_array = array();
require_once( "include/reportfunctions.php" );
if( $rname )
{
	$rpt_array = getReportArray( $rname );
	$accessGranted = @$rpt_array['status'] != "private" || @$rpt_array['owner'] != @$_SESSION["UserID"];
}
else if( $cname )
{
	$chrt_array = getChartArray( $cname );
	$accessGranted = @$chrt_array['status'] != "private" || @$chrt_array['owner'] != @$_SESSION["UserID"];
}
else	
	$accessGranted = CheckTablePermissions($strTableName, "S");
if(!$accessGranted)
{
	HeaderRedirect("menu");
}





$layout = new TLayout("search2", "AvenueAvenue", "MobileAvenue");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["search"] = array();
$layout->container_properties["search"] = array(  );
$layout->containers["search"][] = array("name"=>"srchheader",
	"block"=>"searchheader", "substyle"=>2  );

$layout->containers["search"][] = array("name"=>"srchconditions",
	"block"=>"conditions_block", "substyle"=>1  );

$layout->containers["search"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
$layout->container_properties["fields"] = array(  );
$layout->containers["fields"][] = array("name"=>"srchfields",
	"block"=>"", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"srchbuttons",
	"block"=>"searchbuttons", "substyle"=>2  );

$layout->skins["fields"] = "fields";


$layout->skins["search"] = "1";

$layout->blocks["top"][] = "search";
$page_layouts["MINED_2_search"] = $layout;

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



require_once('include/xtempl.php');
require_once('classes/searchpage.php');
require_once('classes/searchpage_dash.php');
$xt = new Xtempl();

// id that used to add to controls names
$id = postvalue("id");
$id = $id ? $id : 1;
	
$mode = SEARCH_SIMPLE;
if( postvalue("mode") == "dashsearch" )
	$mode = SEARCH_DASHBOARD;
else if( postvalue("mode") == "inlineLoadCtrl" )
{
	// load search panel control
	$mode = SEARCH_LOAD_CONTROL;
	$layoutVersion = postvalue("layoutVersion");
}

$params = array();
$params["id"] = $id;
$params['xt'] = &$xt;
$params["mode"] = $mode;
$params['chartName'] = $cname;
$params['reportName'] = $rname;
$params['tName'] = $strTableName;
$params['pageType'] = PAGE_SEARCH;
$params['templatefile'] = $templatefile;
$params['shortTableName'] = 'MINED_2';
$params['layoutVersion'] = $layoutVersion;

$params['searchControllerId'] = postvalue('searchControllerId') ? postvalue('searchControllerId') : $id;
$params['ctrlField'] = postvalue('ctrlField');

$params['needSettings'] = postvalue('isNeedSettings');

if( $mode == SEARCH_DASHBOARD )
{
	$params["dashTName"] = postvalue("table");
	$params["dashElementName"] = postvalue("dashelement");
}

// e.g. crosstable params
$params["extraPageParams"] = SearchPage::getExtraPageParams();


$pageObject = new SearchPageDash($params);

if( $mode == SEARCH_LOAD_CONTROL )
{
	$pageObject->displaySearchControl();
	return;
}

$pageObject->init();
$pageObject->process();
?>