<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");


Security::processLogoutRequest();
if(!isLogged())
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}




$layout = new TLayout("menu_bootstrap3", "CityCity", "MobileCity");
$layout->version = 3;
	$layout->bootstrapTheme = "sandstone";
		$layout->customCssPageName = "_menu";
$layout->blocks["left"] = array();
$layout->containers["logo"] = array();
$layout->container_properties["logo"] = array(  );
$layout->containers["logo"][] = array("name"=>"logo",
	"block"=>"logo_block", "substyle"=>1  );

$layout->skins["logo"] = "";

$layout->blocks["left"][] = "logo";
$layout->containers["hdr"] = array();
$layout->container_properties["hdr"] = array(  );
$layout->containers["hdr"][] = array("name"=>"bsnavbarcollapse",
	"block"=>"collapse_block", "substyle"=>1  );

$layout->skins["hdr"] = "";

$layout->blocks["left"][] = "hdr";
$layout->containers["sidemenu"] = array();
$layout->container_properties["sidemenu"] = array(  );
$layout->containers["sidemenu"][] = array("name"=>"vmenu",
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["sidemenu"] = "";

$layout->blocks["left"][] = "sidemenu";
$layout->blocks["top"] = array();
$layout->containers["menu"] = array();
$layout->container_properties["menu"] = array(  );
$layout->containers["menu"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"menu_1" );
$layout->containers["menu_1"] = array();
$layout->container_properties["menu_1"] = array(  );
$layout->containers["menu_1"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"more" );
$layout->containers["more"] = array();
$layout->container_properties["more"] = array(  );
$layout->containers["more"][] = array("name"=>"morebutton",
	"block"=>"more_list", "substyle"=>1  );

$layout->containers["more"][] = array("name"=>"loggedas",
	"block"=>"security_block", "substyle"=>1  );

$layout->skins["more"] = "";


$layout->skins["menu_1"] = "";


$layout->skins["menu"] = "";

$layout->blocks["top"][] = "menu";
$layout->blocks["topmiddle"] = array();
$layout->containers["center"] = array();
$layout->container_properties["center"] = array(  );
$layout->containers["center"][] = array("name"=>"welcome",
	"block"=>"", "substyle"=>1  );

$layout->skins["center"] = "";

$layout->blocks["topmiddle"][] = "center";
$page_layouts["menu"] = $layout;




require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/MINED_INDICE_events.php"));
$tableEvents["MINED INDICE"] = new eventclass_MINED_INDICE;

$xt = new Xtempl();

$id = postvalue("id")!=="" ? postvalue("id") : 1;

//array of params for classes
$params = array();
$params["id"] = $id; 
$params["xt"] = &$xt;
$params["tName"] = NOT_TABLE_BASED_TNAME;
$params["pageType"] = PAGE_MENU;
$params["templatefile"] = "menu.htm";
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);
$pageObject->init();
$pageObject->commonAssign();
// button handlers file names

//	Before Process event
if($globalEvents->exists("BeforeProcessMenu"))
	$globalEvents->BeforeProcessMenu( $pageObject );

$pageObject->body["begin"] .= GetBaseScriptsForPage(false);

$pageObject->addCommonJs();

//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();
$pageObject->setLangParams();
$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";</script>";
$pageObject->body["end"] .= "<script type=\"text/javascript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>";
$pageObject->body["end"] .= '<script>'.$pageObject->PrepareJS()."</script>";
$xt->assignbyref("body",$pageObject->body);
$xt->assign("id", $id);
// The user might rewrite $_SESSION["UserName"] value with HTML code in an event, so no encoding will be performed while printing this value.
$xt->assign("username", $_SESSION["UserName"]);
$xt->assign("changepwd_link",$_SESSION["AccessLevel"] != ACCESS_LEVEL_GUEST && $_SESSION["fromFacebook"] == false);
$xt->assign("changepwdlink_attrs","onclick=\"window.location.href='".GetTableLink("changepwd")."';return false;\"");

$xt->assign("logoutlink_attrs", 'id="logoutButton'.$id.'"');
$xt->assign("guestloginlink_attrs", 'id="loginButton'.$id.'"');

$xt->assign("loggedas_block", !isLoggedAsGuest());
$xt->assign("loggedas_message", !isLoggedAsGuest());

$xt->assign("logout_link", true);
$xt->assign("guestloginbutton", isLoggedAsGuest());
$xt->assign("logoutbutton", isSingleSign() && !isLoggedAsGuest());


// get redirect location for menu page
$redirect = $pageObject->getRedirectForMenuPage();
if($redirect)
{
	header("Location: ".$redirect); 
	exit();
}

$xt->assign("menu_block",true);
if($globalEvents->exists("BeforeShowMenu"))
	$globalEvents->BeforeShowMenu($xt, $pageObject->templatefile, $pageObject);

$pageObject->display($pageObject->templatefile);
?>