<?php
$dDebug = false;
$dSQL = "";

$tables_data = array();
$page_layouts = array();
$field_labels = array();
$fieldToolTips = array();
$page_titles = array();
$placeHolders = array();
/**
 * Breadcrumb label templates
 
 *	Label without master table
 *	$breadcrumb_titles[<language>][<table>][<page>]["."] = "..."
 
 *	Label with master active
 *	$breadcrumb_titles[<language>][<table>][<page>][<master>] = "..."

 *	Label for the page with no table
 *	$breadcrumb_titles[<language>]["."][<page>]["."] = "..."
 */
$breadcrumb_labels = array();


$lookupTableLinks = array();

$_gmdays = array(0=>31,1=>31,2=>28,3=>31,4=>30,5=>31,6=>30,7=>31,8=>31,9=>30,10=>31,11=>30,12=>31);

include(getabspath('classes/layout.php'));


//	custom labels
$custom_labels = array();
$custom_labels["English"] = array();
	$custom_labels["English"]['BASE_DE_DATOS_PNC_911'] = "Database PNC 911";
	$custom_labels["Spanish"] = array();
		$custom_labels["Spanish"]['BASE_DE_DATOS_PNC_911'] = "Base de Datos 911";

define('NOT_TABLE_BASED_TNAME', ".global");

/**
 *  Define constants of page name
 */
define('PAGE_LIST',"list");
define('PAGE_MASTER_INFO_LIST',"masterlist");
define('PAGE_ADD',"add");
define('PAGE_EDIT',"edit");
define('PAGE_VIEW',"view");
define('PAGE_MENU',"menu");
define('PAGE_LOGIN',"login");
define('PAGE_REGISTER',"register");
define('PAGE_REMIND',"remind");
define('PAGE_CHANGEPASS',"changepwd");
define('PAGE_SEARCH',"search");
define('PAGE_REPORT',"report");
define('PAGE_MASTER_INFO_REPORT',"masterreport");
define('PAGE_CHART',"chart");
define('PAGE_PRINT',"print");
define('PAGE_MASTER_INFO_PRINT',"masterprint");
define('PAGE_RPRINT',"rprint");
define('PAGE_MASTER_INFO_RPRINT',"masterrprint");
define('PAGE_EXPORT',"export");
define('PAGE_IMPORT',"import");
define('PAGE_ADMIN_MEMBERS',"admin_members");
define('PAGE_ADMIN_RIGHTS',"admin_rights");
define('PAGE_INLINEADD',"inlineadd");
define('PAGE_INLINEEDIT',"inlineedit");
define('PAGE_DASHBOARD',"dashboard");
define('PAGE_DASHMAP', "map");

define('ADMIN_USERS',"admin_users");


define('FORMAT_VIEW',"ViewFormats");
define('FORMAT_EDIT',"EditFormats");
/**
 *  Define constants of view format
 */
define("FORMAT_NONE","");
define("FORMAT_DATE_SHORT","Short Date");
define("FORMAT_DATE_LONG","Long Date");
define("FORMAT_DATE_TIME","Datetime");
define("FORMAT_TIME","Time");
define("FORMAT_CURRENCY","Currency");
define("FORMAT_PERCENT","Percent");
define("FORMAT_HYPERLINK","Hyperlink");
define("FORMAT_EMAILHYPERLINK","Email Hyperlink");
define("FORMAT_FILE_IMAGE","File-based Image");
define("FORMAT_FILE_IMAGE_OLD","Old file-based Image");
define("FORMAT_DATABASE_IMAGE","Database Image");
define("FORMAT_DATABASE_FILE","Database File");
define("FORMAT_FILE","Document Download");
define("FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("FORMAT_PHONE_NUMBER","Phone Number");
define("FORMAT_NUMBER","Number");
define("FORMAT_HTML","HTML");
define("FORMAT_CHECKBOX","Checkbox");
define("FORMAT_MAP","Map");
define("FORMAT_CUSTOM","Custom");
define("FORMAT_AUDIO", "Audio file");
define("FORMAT_DATABASE_AUDIO", "Database audio");
define("FORMAT_VIDEO", "Video file");
define("FORMAT_VIDEO_HTML5", "Video file HTML5");
define("FORMAT_DATABASE_VIDEO", "Database video");
/**
 *  Define constants of edit format
 */
define("EDIT_FORMAT_NONE","");
define("EDIT_FORMAT_TEXT_FIELD","Text field");
define("EDIT_FORMAT_TEXT_AREA","Text area");
define("EDIT_FORMAT_PASSWORD","Password");
define("EDIT_FORMAT_DATE","Date");
define("EDIT_FORMAT_TIME","Time");
define("EDIT_FORMAT_RADIO","Radio button");
define("EDIT_FORMAT_CHECKBOX","Checkbox");
define("EDIT_FORMAT_DATABASE_IMAGE","Database image");
define("EDIT_FORMAT_DATABASE_FILE","Database file");
define("EDIT_FORMAT_FILE","Document upload");
define("EDIT_FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("EDIT_FORMAT_HIDDEN","Hidden field");
define("EDIT_FORMAT_READONLY","Readonly");

define("EDIT_DATE_SIMPLE",0);
define("EDIT_DATE_SIMPLE_INLINE",2);
define("EDIT_DATE_SIMPLE_DP",11);
define("EDIT_DATE_DD",12);
define("EDIT_DATE_DD_INLINE",5);
define("EDIT_DATE_DD_DP",13);

define("MODE_ADD",0);
define("MODE_EDIT",1);
define("MODE_SEARCH",2);
define("MODE_LIST",3);
define("MODE_PRINT",4);
define("MODE_VIEW",5);
define("MODE_INLINE_ADD",6);
define("MODE_INLINE_EDIT",7);
define("MODE_EXPORT",8);

define("LOGIN_HARDCODED",0);
define("LOGIN_TABLE",1);

define("SECURITY_NONE",-1);
define("SECURITY_HARDCODED", 0);
define("SECURITY_TABLE", 1);
define("SECURITY_AD", 2);

define("ADVSECURITY_ALL",0);
define("ADVSECURITY_VIEW_OWN",1);
define("ADVSECURITY_EDIT_OWN",2);
define("ADVSECURITY_NONE",3);

define("ACCESS_LEVEL_ADMIN","Admin");
define("ACCESS_LEVEL_ADMINGROUP","AdminGroup");
define("ACCESS_LEVEL_USER","User");
define("ACCESS_LEVEL_GUEST","Guest");

define("nDATABASE_MySQL",0);
define("nDATABASE_Oracle",1);
define("nDATABASE_MSSQLServer",2);
define("nDATABASE_Access",3);
define("nDATABASE_PostgreSQL",4);
define("nDATABASE_Informix",5);
define("nDATABASE_SQLite3",6);
define("nDATABASE_DB2",7);
define("nDATABASE_Interbase", 16);

define("ADD_SIMPLE",0);
define("ADD_INLINE",1);
define("ADD_ONTHEFLY",2);
define("ADD_MASTER",3);
define("ADD_POPUP",4);
define("ADD_DASHBOARD",5);
define("ADD_MASTER_POPUP",6);

//	Edit page modes
define("EDIT_SIMPLE",0); 	//	standalone Edit page
define("EDIT_INLINE",1);	//	inlineEdit
define("EDIT_POPUP",3);		//	edit page in popup
define("EDIT_DASHBOARD",4);	//	edit page in dashboard
define("EDIT_SELECTED_SIMPLE",5);
define("EDIT_SELECTED_POPUP",6);


//	View page modes
define("VIEW_SIMPLE",0); 	//	standalone View page
define("VIEW_POPUP",1); 	//	View page in popup
define("VIEW_DASHBOARD",2); 	//	View page in dashboard

define("LOGIN_SIMPLE", 0);
define("LOGIN_POPUP", 1);
define("LOGIN_EMBEDED", 2);

define("REGISTER_SIMPLE", 0);
define("REGISTER_POPUP", 1);

define("REMIND_SIMPLE", 0);
define("REMIND_POPUP", 1);

define("titTABLE",0);
define("titVIEW",1);
define("titREPORT",2);
define("titCHART",3);
define("titDASHBOARD",4);

define("TAB_TYPE_TAB", 0);
define("TAB_TYPE_SECTION", 1);
define("TAB_TYPE_STEP", 2);

// for report lib
define("REPORT_STEPPED", 0);
define("REPORT_BLOCK", 1);
define("REPORT_OUTLINE", 2);
define("REPORT_ALIGN", 3);
define("REPORT_TABULAR", 6);

define("TOTAL_NONE", -1);
define("TOTAL_MAX", 0);
define("TOTAL_AVG", 1);
define("TOTAL_SUM", 3);
define("TOTAL_MIN", 4);

define("LIST_SIMPLE",0);
define("LIST_LOOKUP",1);
define("LIST_DETAILS",3);
define("LIST_AJAX",4);
define("RIGHTS_PAGE", 5);
define("MEMBERS_PAGE", 6);
define("LIST_DASHBOARD", 7);
define("LIST_DASHDETAILS", 8);
define("MAP_DASHBOARD", 9);
define("LIST_MASTER",10);
define("PRINT_MASTER",11);

define("REPORT_SIMPLE", 0);
define("REPORT_POPUPDETAILS", 1);
define("REPORT_DASHBOARD", 2);
define("REPORT_DETAILS", 3);
define("REPORT_DASHDETAILS", 4);

define("CHART_SIMPLE", 0);
define("CHART_POPUPDETAILS", 1);
define("CHART_DASHBOARD", 2);
define("CHART_DETAILS", 3);
define("CHART_DASHDETAILS", 4);

define("DP_POPUP",0);
define("DP_INLINE",1);
define("DP_NONE",2);

define("DL_SINGLE",0);
define("DL_INDIVIDUAL",1);
define("DL_NONE",2);

define("SEARCH_SIMPLE", 0);
define("SEARCH_LOAD_CONTROL", 1);
define("SEARCH_DASHBOARD", 2);

define("LCT_DROPDOWN",0);
define("LCT_AJAX",1);
define("LCT_LIST",2);
define("LCT_CBLIST",3);
define("LCT_RADIO",4);

define("LT_LISTOFVALUES",0);
// lookup table is not added to the project
define("LT_LOOKUPTABLE",1);
define("LT_QUERY", 2);

define("ENCRYPTION_NONE", 0);
define("ENCRYPTION_DB", 1);
define("ENCRYPTION_PHP", 2);
define("ENCRYPTION_ALG_DES", 1);
define("ENCRYPTION_ALG_AES", 128);

define("SETTING_TYPE_GLOBAL", "global");
define("SETTING_TYPE_VIEW", "view");
define("SETTING_TYPE_EDIT", "edit");

define('otNone',0);
define('otUseMobile',1);
define('otUseDesktop',2);


define("CONTAINS", "Contains");
define("EQUALS", "Equals");
define("STARTS_WITH", "Starts with");
define("MORE_THAN", "More than");
define("LESS_THAN", "Less than");
define("BETWEEN", "Between");
define("EMPTY_SEARCH", "Empty");
define("NOT_CONTAINS", "NOT Contains");
define("NOT_EQUALS", "NOT Equals");
define("NOT_STARTS_WITH", "NOT Starts with");
define("NOT_MORE_THAN", "NOT More than");
define("NOT_LESS_THAN", "NOT Less than");
define("NOT_BETWEEN", "NOT Between");
define("NOT_EMPTY", "NOT Empty");

define("SEARCHID_SIMPLE", 1);
define("SEARCHID_PANEL", 10);
define("SEARCHID_ALL", 10000);


/* Define constants for the filters settings */
//fiter totals
define("FT_NONE", 0);
define("FT_COUNT", 1);
define("FT_MIN", 2);
define("FT_MAX", 3);
//filter multiselect
define("FM_NONE", 0);
define("FM_ON_DEMAND", 1);
define("FM_ALWAYS", 2);
//filter format
define("FF_VALUE_LIST", "Values list");
define("FF_BOOLEAN", "Options list");
define("FF_INTERVAL_LIST", "Interval list");
define("FF_INTERVAL_SLIDER", "Interval slider");
//define filter interval limits' constants
define("FIL_NONE", 0);
define("FIL_MORE_THAN", 1);
define("FIL_LESS_THAN", 1);
define("FIL_LESS_THAN_OR_EQUAL", 2);
define("FIL_MORE_THAN_OR_EQUAL", 2);
define("FIL_REMAINDER", 3);
//define slider filter constants
define("FS_BOTH", 0);
define("FS_MIN_ONLY", 1);
define("FS_MAX_ONLY", 2);
//define slider step types
define("FSST_SECONDS", 0);
define("FSST_MINUTES", 1);
define("FSST_HOURS", 2);
define("FSST_DAYS", 3);
define("FSST_MONTHS", 4);
define("FSST_YEARS", 5);
//sorting constants
define('SORT_BY_DISP_VALUE', 0);
define('SORT_BY_DB_VALUE', 1);
define('SORT_BY_GR_VALUE', 2);
/**/


define("gltHORIZONTAL", 0);
define("gltVERTICAL", 1);
define("gltCOLUMNS", 2);
define("gltFLEXIBLE", 3);

/* Define comstamts for hidden columns devices*/
define("DESKTOP", 1);
define("TABLET_10_IN", 2);
define("TABLET_7_IN", 3);
define("SMARTPHONE_LANDSCAPE", 4);
define("SMARTPHONE_PORTRAIT", 5);
/**/

/* Dashboard types */
define("DASHBOARD_LIST", 0);
define("DASHBOARD_CHART", 1);
define("DASHBOARD_REPORT", 2);
define("DASHBOARD_RECORD", 3);
define("DASHBOARD_SEARCH", 4);
define("DASHBOARD_DETAILS", 5);
define("DASHBOARD_MAP", 6);
define("DASHBOARD_SNIPPET", 7);
/**/

/* Define message type constants */
define("MESSAGE_INFO", 1);
define("MESSAGE_ERROR", 2);

/* Define print page and pdf page constants */
define("PRINT_PAGE_WIDTH", 700);
define("PRINT_PAGE_HEIGHT", 900);
define("PDF_PAGE_WIDTH", 750);
define("PDF_PAGE_HEIGHT", 1060);

/* Defined maps type */
define("GOOGLE_MAPS", 0);
define("OPEN_STREET_MAPS", 1);
define("BING_MAPS", 2);

/* Defined captcha type */
define("FLASH_CAPTCHA", 0);
define("RE_CAPTCHA", 1);

/* Define 'after record added/edited actions' constants*/
define("AA_TO_LIST", 0);
define("AA_TO_ADD", 1);
define("AA_TO_VIEW", 2);
define("AA_TO_EDIT", 3);
define("AA_TO_DETAIL_ADD", 4);
define("AA_TO_DETAIL_LIST", 5);

define("AE_TO_LIST", 0);
define("AE_TO_EDIT", 1);
define("AE_TO_VIEW", 2);
define("AE_TO_NEXT_EDIT", 3);
define("AE_TO_PREV_EDIT", 4);
define("AE_TO_DETAIL_LIST", 5);
/**/

define('BOOTSTRAP_LAYOUT', 3);

define('ICON_NONE', 0);
define('ICON_FILE', 1);
define('ICON_BOOTSTRAP_GLYPH', 2);



define('WELCOME_MENU', "welcome_page");

define('MENU_VERTICAL', "v");
define('MENU_HORIZONTAL', "h");
define('MENU_QUICKJUMP', "q");

// paramsLogger types
define('SSEARCH_PARAMS_TYPE', 1);
define('CRESIZE_PARAMS_TYPE', 2);
define('SHFIELDS_PARAMS_TYPE', 3);
define('FORDER_PARAMS_TYPE', 4);

// remind password method
define('RPM_SEND', 'SEND');
define('RPM_RESET', 'RESET');

$globalSettings = array();
$globalSettings["nLoginForm"] = 1;

$globalSettings["nLoginMethod"] = 0;



$globalSettings["UserName"] = "Admin";
$globalSettings["Password"] = "dia2017";


$globalSettings["popupPagesLayoutNames"] = array();
						
	;
$globalSettings["popupPagesLayoutNames"]["login"] = "login";

//mail settings
$globalSettings["useBuiltInMailer"] = false;

$globalSettings["useCustomSMTPSettings"] = false;

$globalSettings["strSMTPUser"] = "";
$globalSettings["strSMTPServer"] = "localhost";
$globalSettings["strSMTPPort"] = "25";
$globalSettings["strSMTPPassword"] = "";
$globalSettings["strFromEmail"] = "";

$globalSettings["useSSL"] = false;
//


$ajaxSearchStartsWith = true;




$globalSettings["LandingPageType"] = 1;
$globalSettings["LandingTable"] = "";
$globalSettings["LandingPage"] = "login";
$globalSettings["LandingURL"] = "Dashboard1_dashboard.php";

$globalSettings["ProjectLogo"] = array();
$globalSettings["ProjectLogo"]["English"] = "herramientav81";
$globalSettings["ProjectLogo"]["Spanish"] = "";

$globalSettings["createLoginPage"] = true;
$globalSettings["isSection508"] = true;

$globalSettings["apiGoogleMapsCode"] = " AIzaSyC9Di2X8xXUqCnjm2FjdxZvyhAghGcIH2o ";





/**
 * If true then detail table name will be printed before detail table on the view page
 * @var {bool}
 */
$globalSettings["printDetailTableName"] = true;

/**
 * Alias for custom expression in display field in ListPage_Lookup
 * @var {string}
 */
$globalSettings["dispFieldAlias"] = "rrdf1";

/**
 * If true then search suggest result will be handled in Lookup control
 * @var {bool}
 */
$globalSettings["handleSearchSuggestInLookup"] = true;

/**
 * Maximum size of search suggest result string
 * @var {int}
 */
$globalSettings["suggestStringSize"] = 40;

/**
 * The number of seach suggests displayed
 */
$globalSettings["searchSuggestsNumber"] = 10;

$globalSettings["override"] = array();


$globalSettings["mapProvider"]=0;

$globalSettings["CaptchaSettings"] = array();
$globalSettings["CaptchaSettings"]["type"] = 0;
$globalSettings["CaptchaSettings"]["siteKey"] = "";
$globalSettings["CaptchaSettings"]["secretKey"] = "";
$globalSettings["CaptchaSettings"]["captchaPassesCount"] = "5";

$globalSettings["CaptchaSettings"]["isEnabledOnLogin"] = false;
$globalSettings["CaptchaSettings"]["isEnabledOnRegister"] = false;
$globalSettings["CaptchaSettings"]["isEnabledOnRemind"] = false;

$wr_pagestylepath = "CityCity";
$wr_is_standalone = false;
$WRAdminPagePassword = "";

$cLoginTable = "carcel";
$cDisplayNameField = "";
$cUserNameField	= "";
$cPasswordField	= "";
$cUserGroupField = "groupid";
$cEmailField = "email";

if ($cDisplayNameField == ''){
	$cDisplayNameField = $cUserNameField;
}

$cDisplayNameFieldType	= 200;
$cUserNameFieldType	= 200;
$cPasswordFieldType	= 200;
$cEmailFieldType = 200;

																																																																																																																																																																																																																																																																																																																																				

$useAJAX = true;
$suggestAllContent = true;

$strLastSQL = "";
$showCustomMarkerOnPrint = false;

$mlang_messages = array();
$mlang_charsets = array();




$menuAssignments = array();
$menuSelector = array();
$menuSelector["page"] = "welcome_page";
$menuSelector["id"] = "mainmenu";
$menuSelector["name"] = "welcome_page";
$menuSelector["horizontal"] = "0";
$menuAssignments[] = $menuSelector;
$menuSelector = array();
$menuSelector["page"] = "welcome_page";
$menuSelector["id"] = "welcome_page";
$menuSelector["name"] = "welcome_page";
$menuSelector["horizontal"] = "0";
$menuAssignments[] = $menuSelector;
$menuSelector = array();
$menuSelector["page"] = "welcome_page";
$menuSelector["id"] = "welcome_page";
$menuSelector["name"] = "welcome_page";
$menuSelector["horizontal"] = "0";
$menuAssignments[] = $menuSelector;

$menuStyles = array();

$menuTreelikeFlags = array();
$menuTreelikeFlags["main"] = 1;

$menuDrillDownFlags = array();
$menuDrillDownFlags["main"] = 0;

$menuTreelikeFlags["welcome_page"] = 0;
$menuDrillDownFlags["welcome_page"] = 1;



// table captions
$tableCaptions = array();
$tableCaptions["Spanish"] = array();
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"]["Delitos_especificos"] = "Delitos Especificos";
$tableCaptions["Spanish"]["carcel1"] = "Carcel1";
$tableCaptions["Spanish"]["class_lugarespecifico"] = "Class Lugarespecifico";
$tableCaptions["Spanish"]["sectorppdf"] = "Sectorppdf";
$tableCaptions["Spanish"]["tipo_mara"] = "Tipo Mara";
$tableCaptions["Spanish"]["carcel_CAMBIOS"] = "Carcel CAMBIOS";
$tableCaptions["Spanish"]["clasificacion"] = "Clasificacion";
$tableCaptions["Spanish"]["Espacios_abiertos"] = "Espacios Abiertos";
$tableCaptions["Spanish"]["hechosdelictivos"] = "Hechosdelictivos";
$tableCaptions["Spanish"]["hechosdelictivos_lugaresp"] = "Hechosdelictivos Lugaresp";
$tableCaptions["Spanish"]["Todos_los_datos_PPL"] = "Todos los datos PPL";
$tableCaptions["Spanish"]["PPL_pertenecientes_a_Pandilla"] = "PPL pertenecientes a Pandilla";
$tableCaptions["Spanish"]["Sector_PPD"] = "Sector PPD";
$tableCaptions["Spanish"]["Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima"] = "Homicidios tentados por rango etarios, según sexo victima";
$tableCaptions["Spanish"]["Hurtos_por_rango_etarios__seg_n_sexo_victima"] = "Hurtos por rango etarios, según sexo victima";
$tableCaptions["Spanish"]["Hurtos_de_veh_culo_por_rango_etarios__seg_n_sexo_victima"] = "Hurtos de vehículo por rango etarios, según sexo victima";
$tableCaptions["Spanish"]["Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima"] = "Lesiones por rango etarios etarios, según sexo victima";
$tableCaptions["Spanish"]["Robos_por_rango_etario__seg_n_sexo_victima"] = "Robos por rango etario, según sexo victima";
$tableCaptions["Spanish"]["Robo_de_veh_culo_por_rango_etario__seg_n_sexo_victima"] = "Robo de vehículo por rango etario, según sexo victima";
$tableCaptions["Spanish"]["Robo_y_hurto_de_veh_culo_con_mercaderia_por_rango_etario__seg_n_sexo_victima"] = "Robo y hurto de vehículo con mercaderia por rango etario, según sexo victima";
$tableCaptions["Spanish"]["Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero"] = "Personas privadas de libertad por Sectores Estandarizados según género";
$tableCaptions["Spanish"]["Delitos_por__rea"] = "Delitos por área";
$tableCaptions["Spanish"]["Personas_privadas_de_libertad_por_rango_etario_seg_n_g_nero"] = "Personas privadas de libertad por rango etario según género";
$tableCaptions["Spanish"]["Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino"] = "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino";
$tableCaptions["Spanish"]["Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Masculino"] = "Personas privadas de libertad por rango etario, segun nivel educativo y genero Masculino";
$tableCaptions["Spanish"]["Personas_privadas_de_libertad__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas"] = "Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas";
$tableCaptions["Spanish"]["Delitos_por_lugar_del_hecho"] = "Delitos por lugar del hecho";
$tableCaptions["Spanish"]["Delitos_por_M_vil"] = "Delitos por Móvil";
$tableCaptions["Spanish"]["Conteo_de_delitos_por_sector_estandarizado_seg_n_Movil"] = "Conteo de delitos por sector estandarizado según Movil";
$tableCaptions["Spanish"]["Delitos_por_tipo_de_arma"] = "Delitos por tipo de arma";
$tableCaptions["Spanish"]["Ocupaci_n_de_la_v_ctima_por_Delitos"] = "Ocupación de la víctima por Delitos";
$tableCaptions["Spanish"]["Amenazas__por_rango_etarios__seg_n_sexo_victima"] = "Amenazas, por rango etarios, según sexo victima";
$tableCaptions["Spanish"]["Delitos_Sexuales__por_rango_etarios__seg_n_sexo_victima"] = "Delitos Sexuales  por rango etarios, según sexo victima";
$tableCaptions["Spanish"]["Homicidios_por_rango_etarios__seg_n_sexo"] = "Homicidios por rango etarios, según sexo";
$tableCaptions["Spanish"]["Delitos_por_sector_Estandarizado"] = "Delitos por sector Estandarizado";
$tableCaptions["Spanish"]["Delitos_por_rango_de_horas"] = "Delitos por rango de horas";
$tableCaptions["Spanish"]["Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil"] = "Conteo de delitos, por Sector Estandarizado según Movil";
$tableCaptions["Spanish"]["Delitos_por_mes_del_hecho"] = "Delitos por mes del hecho";
$tableCaptions["Spanish"]["homicidios_sv_2016"] = "Homicidios Sv 2016";
$tableCaptions["Spanish"]["homicidios_sv_2016_Report"] = "Homicidios Sv 2016 Report";
$tableCaptions["Spanish"]["homicidios_sv_2016_Report1"] = "Homicidios Sv 2016 Report1";
$tableCaptions["Spanish"]["Muertes_PNC_enfrentamientos"] = "Muertes PNC enfrentamientos";
$tableCaptions["Spanish"]["homicidios_municipio"] = "Homicidios Municipio";
$tableCaptions["Spanish"]["Municipios_con_porcentaje_de_enfrentamiento"] = "Municipios con porcentaje de enfrentamiento";
$tableCaptions["Spanish"]["PPL_pertenecientes_a_pandillas_por_municipio"] = "PPL pertenecientes a pandillas por municipio";
$tableCaptions["Spanish"]["PPL_delitos"] = "PPL Delitos";
$tableCaptions["Spanish"]["Transito_class_Rango_Etario"] = "Transito class Rango Etario";
$tableCaptions["Spanish"]["PPL_delitos_clasificacion"] = "PPL Delitos Clasificacion";
$tableCaptions["Spanish"]["Carcel_hurto_mercaderia"] = "Carcel Hurto Mercaderia";
$tableCaptions["Spanish"]["PPL_educacion"] = "PPL Educacion";
$tableCaptions["Spanish"]["Personas_Privadas_de_Libertad"] = "Personas Privadas de Libertad";
$tableCaptions["Spanish"]["hechos_delictivos_class_delitos"] = "Hechos Delictivos Class Delitos";
$tableCaptions["Spanish"]["Sector_PPD_por_pandilla_de_afiliacion__prueba_"] = "Sector PPD por pandilla de afiliacion (prueba)";
$tableCaptions["Spanish"]["tipo_organizacion_delictiva"] = "tipo organizacion delictiva";
$tableCaptions["Spanish"]["carcel_visualizacion_todos"] = "carcel visualizacion todos";
$tableCaptions["Spanish"]["Grupos_etarios_por_estado_civil__masculino_"] = "Grupos etarios por estado civil (masculino)";
$tableCaptions["Spanish"]["Grupo_etarios_por_estado_civil__masculino_"] = "Grupo etarios por estado civil (masculino)";
$tableCaptions["Spanish"]["Grupo_etarios_por_estado_civil__femenino_"] = "Grupo etarios por estado civil (femenino)";
$tableCaptions["Spanish"]["PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas"] = "PPL Grupos etarios por afiliación a Pandillas";
$tableCaptions["Spanish"]["PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino"] = "PPL Grupos etarios por afiliación a Pandillas femenino";
$tableCaptions["Spanish"]["PPL_grupos_etarios_por_Deportado_masculino"] = "PPL grupos etarios por Deportado masculino";
$tableCaptions["Spanish"]["PPL_grupos_etarios_por_Deportado_Femenino"] = "PPL grupos etarios por Deportado Femenino";
$tableCaptions["Spanish"]["PPL_grupos_etarios_delito_genero_masculino"] = "PPL grupos etarios delito genero masculino";
$tableCaptions["Spanish"]["hechos_delictivos1"] = "Hechos Delictivos1";
$tableCaptions["Spanish"]["PPL_Grupos_etarios_por_delitos_masculino"] = "PPL Grupos etarios por delitos masculino";
$tableCaptions["Spanish"]["PPL_Grupos_etarios_por_delitos_femenino"] = "PPL Grupos etarios por delitos femenino";
$tableCaptions["Spanish"]["DELITOS_PNC"] = "DELITOS PNC";
$tableCaptions["Spanish"]["carcel_prueba_santa_tecla"] = "carcel prueba santa tecla";
$tableCaptions["Spanish"]["carcel_clasificacion_lugar"] = "Carcel Clasificacion Lugar";
$tableCaptions["Spanish"]["mes_corregido"] = "Mes Corregido";
$tableCaptions["Spanish"]["Hechos_delictivos_dia_del_hecho"] = "Hechos delictivos dia del hecho";
$tableCaptions["Spanish"]["hechos_delictivos11"] = "Hechos Delictivos11";
$tableCaptions["Spanish"]["BD_Carcel"] = "BD Carcel";
$tableCaptions["Spanish"]["DB_PNC"] = "DB PNC";
$tableCaptions["Spanish"]["Hechosdelictivos_movil_class"] = "Hechosdelictivos movil class";
$tableCaptions["Spanish"]["hechosdelictivos_tipo_arma"] = "Hechosdelictivos Tipo Arma";
$tableCaptions["Spanish"]["Municipios_y_delitos"] = "Municipios y delitos";
$tableCaptions["Spanish"]["Hechosdelictivos_ocupacion_class"] = "Hechosdelictivos ocupacion class";
$tableCaptions["Spanish"]["hechosdelictivos_relacion_vict_agresor"] = "Hechosdelictivos Relacion Vict Agresor";
$tableCaptions["Spanish"]["Relacion_de_victima_con_agresor"] = "Relacion de victima con agresor";
$tableCaptions["Spanish"]["hechosdelictivos_lugar_del_hecho"] = "Hechosdelictivos Lugar Del Hecho";
$tableCaptions["Spanish"]["pnc911"] = "Pnc911";
$tableCaptions["Spanish"]["pnc9111_class_delito"] = "pnc9111 class delito";
$tableCaptions["Spanish"]["pnc9111"] = "Pnc9111";
$tableCaptions["Spanish"]["pnc911_Sector_por_eventos"] = "pnc911 Sector por eventos";
$tableCaptions["Spanish"]["pnc911municipios"] = "Pnc911municipios";
$tableCaptions["Spanish"]["PNC911_Avisos"] = "PNC911 Avisos";
$tableCaptions["Spanish"]["horas_completar"] = "Horas Completar";
$tableCaptions["Spanish"]["hora_sustituir"] = "Hora Sustituir";
$tableCaptions["Spanish"]["hechos_delictivos"] = "Hechos Delictivos";
$tableCaptions["Spanish"]["hechosdelictivos2"] = "Hechosdelictivos2";
$tableCaptions["Spanish"]["PPL_pertenecientes_a_Pandilla_prueba"] = "PPL pertenecientes a Pandilla_prueba";
$tableCaptions["Spanish"]["PPL_pertenecientes_a_Pandilla_prueba1"] = "PPL pertenecientes a Pandilla_prueba1";
$tableCaptions["Spanish"]["retornados"] = "Retornados";
$tableCaptions["Spanish"]["Retornados__clasificacion_rango_etario"] = "Retornados, clasificacion rango etario";
$tableCaptions["Spanish"]["BD_Retornados"] = "BD Retornados";
$tableCaptions["Spanish"]["Retornados_Regi_n_Repatriaci_n_por_a_o"] = "Retornados-Región Repatriación por año";
$tableCaptions["Spanish"]["mes_corregido_retornado"] = "mes corregido retornado";
$tableCaptions["Spanish"]["Retornados_Regiones_repatriaci_n_por_meses"] = "Retornados-Regiones repatriación por meses";
$tableCaptions["Spanish"]["Retornados_Consulados_por_a_o"] = "Retornados-Consulados por año";
$tableCaptions["Spanish"]["Retornados_Dashboard"] = "Retornados Dashboard";
$tableCaptions["Spanish"]["Retornados_Departamento_por_a_o"] = "Retornados-Departamento por año";
$tableCaptions["Spanish"]["Retornados_Municipios_por_a_o"] = "Retornados-Municipios por año";
$tableCaptions["Spanish"]["Retornados_Rango_etario_por_sexo"] = "Retornados-Rango etario por sexo";
$tableCaptions["Spanish"]["Retornados_Rango_etario_por_antecedentes_g_nero_masculino"] = "Retornados-Rango etario por antecedentes género masculino";
$tableCaptions["Spanish"]["Retornados_Rango_etario_por_antecedentes_g_nero_femenino"] = "Retornados-Rango etario por antecedentes género femenino";
$tableCaptions["Spanish"]["transito"] = "Transito";
$tableCaptions["Spanish"]["Tr_nsito__Departamento_por_resultado_del_accidente"] = "Tránsito- Departamento por resultado del accidente";
$tableCaptions["Spanish"]["Tr_nsito"] = "Tránsito";
$tableCaptions["Spanish"]["Tr_nsito__municipio_por_resultado_del_accidente"] = "Tránsito- municipio por resultado del accidente";
$tableCaptions["Spanish"]["Tr_nsito_Fallecidos_Rango_etario_v_ctima_por_sexo_v_ctima"] = "Tránsito-Fallecidos Rango etario víctima por sexo víctima";
$tableCaptions["Spanish"]["Tr_nsito_Lesionados_Rango_etario_v_ctima_por_sexo_v_ctima"] = "Tránsito-Lesionados Rango etario víctima por sexo víctima";
$tableCaptions["Spanish"]["Tr_nsito_Calidad_de_la_v_ctima_por_resultado_del_accidente"] = "Tránsito-Calidad de la víctima por resultado del accidente";
$tableCaptions["Spanish"]["Tr_nsito_Tipo_de_accidente_por_resultado_del_accidente"] = "Tránsito-Tipo de accidente por resultado del accidente";
$tableCaptions["Spanish"]["Transito_class_causas"] = "Transito class causas";
$tableCaptions["Spanish"]["transito1"] = "Transito1";
$tableCaptions["Spanish"]["Tr_nsito_Causa_del_accidente_por_resultado_del_accidente"] = "Tránsito-Causa del accidente por resultado del accidente";
$tableCaptions["Spanish"]["Transito_class_tipo_veh_culo"] = "Transito class tipo vehículo";
$tableCaptions["Spanish"]["Tr_nsito_Tipo_de_veh_culo_por_resultado_del_accidente"] = "Tránsito-Tipo de vehículo por resultado del accidente";
$tableCaptions["Spanish"]["Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente"] = "Tránsito-Ruta transporte colectivo por resultado del accidente";
$tableCaptions["Spanish"]["Tr_nsito_Responsable_accidente_detenido_por_resultado_del_accidente"] = "Tránsito-Responsable accidente detenido por resultado del accidente";
$tableCaptions["Spanish"]["Transito_extraer_mes"] = "Transito extraer mes";
$tableCaptions["Spanish"]["Tr_nsito_Resultado_del_accidente_por_meses_de_accidentes"] = "Tránsito-Resultado del accidente por meses de accidentes";
$tableCaptions["Spanish"]["Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes"] = "Tránsito-Resultado del accidente por rango horario de accidentes";
$tableCaptions["Spanish"]["Tr_nsito_Direcci_n_accidente_por_resultado_del_accidente"] = "Tránsito-Dirección accidente por resultado del accidente";
$tableCaptions["Spanish"]["Transito_prueba_datos"] = "Transito prueba datos";
$tableCaptions["Spanish"]["empalme_tablas"] = "Empalme Tablas";
$tableCaptions["Spanish"]["hechos_delictivos12"] = "Hechos Delictivos12";
$tableCaptions["Spanish"]["Municipios"] = "Municipios";
$tableCaptions["Spanish"]["Transito_arreglar_guiones"] = "Transito arreglar guiones";
$tableCaptions["Spanish"]["sectorppd1"] = "Sectorppd1";
$tableCaptions["Spanish"]["Sector_PPD_24"] = "Sector PPD 24";
$tableCaptions["Spanish"]["sectorppd1_Report"] = "Sectorppd1 Report";
$tableCaptions["Spanish"]["Dashboard"] = "Dashboard";
$tableCaptions["Spanish"]["sectorppd1_Chart"] = "Sectorppd1 Chart";
$tableCaptions["Spanish"]["Hechosdelictivos_rango_etario"] = "Hechosdelictivos Rango Etario";
$tableCaptions["Spanish"]["carcel_Report"] = "Carcel Report";
$tableCaptions["Spanish"]["pnc9112_PRUEBA"] = "Pnc9112 PRUEBA";
$tableCaptions["Spanish"]["Sector_PPD_por_tipo_de_arma"] = "Sector PPD por tipo de arma";
$tableCaptions["Spanish"]["Cruce_Sector_PPD"] = "Cruce Sector PPD";
$tableCaptions["Spanish"]["enlazando_sector"] = "Enlazando Sector";
$tableCaptions["Spanish"]["Retornados_Todos_los_departamentos"] = "Retornados-Todos los departamentos";
$tableCaptions["Spanish"]["reemplazar_sectores"] = "Reemplazar Sectores";
$tableCaptions["Spanish"]["hechos_delictivos_VISTA"] = "Hechos Delictivos VISTA";
$tableCaptions["Spanish"]["reemplazar_sectores_PPL"] = "reemplazar sectores PPL";
$tableCaptions["Spanish"]["anexar_carcel"] = "Anexar Carcel";
$tableCaptions["Spanish"]["anexar_carcel1"] = "Anexar Carcel1";
$tableCaptions["Spanish"]["SUPRIMIR_REGISTROS_ANEXO_CARCEL"] = "SUPRIMIR REGISTROS ANEXO CARCEL";
$tableCaptions["Spanish"]["Sectorizacion"] = "Sectorizacion";
$tableCaptions["Spanish"]["PPL_DGCP"] = "PPL DGCP";
$tableCaptions["Spanish"]["Personas_Privadas_de_Libertad123"] = "Personas Privadas de Libertad123";
$tableCaptions["Spanish"]["Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino"] = "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino";
$tableCaptions["Spanish"]["Dashboard1"] = "Dashboard1";
$tableCaptions["Spanish"]["PPL_por_rango_etario_seg_n_g_nero"] = "PPL por rango etario según género";
$tableCaptions["Spanish"]["reemplazar_sectores_hechosdelictivos"] = "Reemplazar Sectores Hechosdelictivos";
$tableCaptions["Spanish"]["mined"] = "Mined";
$tableCaptions["Spanish"]["mined1"] = "Mined1";
$tableCaptions["Spanish"]["mined2"] = "Mined2";
$tableCaptions["Spanish"]["mined21"] = "Mined21";
$tableCaptions["Spanish"]["mined_Report"] = "Mined Report";
$tableCaptions["Spanish"]["MINED_IPCE"] = "MINED IPCE";
$tableCaptions["Spanish"]["MINED_INDICE"] = "MINED INDICE";
$tableCaptions["Spanish"]["mined11"] = "Mined11";
$tableCaptions["Spanish"]["calcular_indice_MINED"] = "calcular indice MINED";
$tableCaptions["Spanish"]["calcular_indice_MINED2"] = "calcular indice MINED2";
$tableCaptions["Spanish"]["mined1_Report"] = "Mined1 Report";
$tableCaptions["Spanish"]["Maxima_Matricula_Mined"] = "Maxima Matricula Mined";
$tableCaptions["Spanish"]["Matricula_Relativa_Final"] = "Matricula Relativa Final";
$tableCaptions["Spanish"]["IPCE_NAIVE"] = "IPCE NAIVE";
$tableCaptions["Spanish"]["IPCE_FINAL"] = "IPCE FINAL";
$tableCaptions["Spanish"]["Mined_Maximo_IPCE"] = "Mined Maximo IPCE";
$tableCaptions["Spanish"]["mined_maximo_valor"] = "mined maximo valor";
$tableCaptions["Spanish"]["BD_Mined"] = "BD Mined";
$tableCaptions["Spanish"]["mined3"] = "Mined3";
$tableCaptions["Spanish"]["valor_maximo_mined_2"] = "valor maximo mined 2";
$tableCaptions["Spanish"]["BD_SECTORES"] = "BD SECTORES";
$tableCaptions["Spanish"]["Anexar_Sector_a_PPL"] = "Anexar Sector a PPL";
$tableCaptions["Spanish"]["mined4"] = "Mined4";
$tableCaptions["Spanish"]["anexar_carcel2"] = "Anexar Carcel2";
$tableCaptions["Spanish"]["BD_ANEXO_CARCEL"] = "BD ANEXO CARCEL";
$tableCaptions["English"] = array();
$tableCaptions["English"][""] = "";
$tableCaptions["English"]["Delitos_especificos"] = "Delitos Especificos";
$tableCaptions["English"]["carcel1"] = "Carcel1";
$tableCaptions["English"]["class_lugarespecifico"] = "Class Lugarespecifico";
$tableCaptions["English"]["sectorppdf"] = "Sectorppdf";
$tableCaptions["English"]["tipo_mara"] = "Tipo Mara";
$tableCaptions["English"]["carcel_CAMBIOS"] = "Carcel CAMBIOS";
$tableCaptions["English"]["clasificacion"] = "Clasificacion";
$tableCaptions["English"]["Espacios_abiertos"] = "Espacios Abiertos";
$tableCaptions["English"]["hechosdelictivos"] = "Hechosdelictivos";
$tableCaptions["English"]["hechosdelictivos_lugaresp"] = "Hechosdelictivos Lugaresp";
$tableCaptions["English"]["Todos_los_datos_PPL"] = "Todos los datos PPL";
$tableCaptions["English"]["PPL_pertenecientes_a_Pandilla"] = "PPL pertenecientes a Pandilla";
$tableCaptions["English"]["Sector_PPD"] = "Sector PPD";
$tableCaptions["English"]["Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima"] = "Homicidios tentados por rango etarios, según sexo victima";
$tableCaptions["English"]["Hurtos_por_rango_etarios__seg_n_sexo_victima"] = "Hurtos por rango etarios, según sexo victima";
$tableCaptions["English"]["Hurtos_de_veh_culo_por_rango_etarios__seg_n_sexo_victima"] = "Hurtos de vehículo por rango etarios, según sexo victima";
$tableCaptions["English"]["Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima"] = "Lesiones por rango etarios etarios, según sexo victima";
$tableCaptions["English"]["Robos_por_rango_etario__seg_n_sexo_victima"] = "Robos por rango etario, según sexo victima";
$tableCaptions["English"]["Robo_de_veh_culo_por_rango_etario__seg_n_sexo_victima"] = "Robo de vehículo por rango etario, según sexo victima";
$tableCaptions["English"]["Robo_y_hurto_de_veh_culo_con_mercaderia_por_rango_etario__seg_n_sexo_victima"] = "Robo y hurto de vehículo con mercaderia por rango etario, según sexo victima";
$tableCaptions["English"]["Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero"] = "Personas privadas de libertad por Sectores Estandarizados según género";
$tableCaptions["English"]["Delitos_por__rea"] = "Delitos por área";
$tableCaptions["English"]["Personas_privadas_de_libertad_por_rango_etario_seg_n_g_nero"] = "Personas privadas de libertad por rango etario según género";
$tableCaptions["English"]["Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino"] = "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino";
$tableCaptions["English"]["Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Masculino"] = "Personas privadas de libertad por rango etario, segun nivel educativo y genero Masculino";
$tableCaptions["English"]["Personas_privadas_de_libertad__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas"] = "Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas";
$tableCaptions["English"]["Delitos_por_lugar_del_hecho"] = "Delitos por lugar del hecho";
$tableCaptions["English"]["Delitos_por_M_vil"] = "Delitos por Móvil";
$tableCaptions["English"]["Conteo_de_delitos_por_sector_estandarizado_seg_n_Movil"] = "Conteo de delitos por sector estandarizado según Movil";
$tableCaptions["English"]["Delitos_por_tipo_de_arma"] = "Delitos por tipo de arma";
$tableCaptions["English"]["Ocupaci_n_de_la_v_ctima_por_Delitos"] = "Ocupación de la víctima por Delitos";
$tableCaptions["English"]["Amenazas__por_rango_etarios__seg_n_sexo_victima"] = "Amenazas, por rango etarios, según sexo victima";
$tableCaptions["English"]["Delitos_Sexuales__por_rango_etarios__seg_n_sexo_victima"] = "Delitos Sexuales  por rango etarios, según sexo victima";
$tableCaptions["English"]["Homicidios_por_rango_etarios__seg_n_sexo"] = "Homicidios por rango etarios, según sexo";
$tableCaptions["English"]["Delitos_por_sector_Estandarizado"] = "Delitos por sector Estandarizado";
$tableCaptions["English"]["Delitos_por_rango_de_horas"] = "Delitos por rango de horas";
$tableCaptions["English"]["Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil"] = "Conteo de delitos, por Sector Estandarizado según Movil";
$tableCaptions["English"]["Delitos_por_mes_del_hecho"] = "Delitos por mes del hecho";
$tableCaptions["English"]["homicidios_sv_2016"] = "Homicidios Sv 2016";
$tableCaptions["English"]["homicidios_sv_2016_Report"] = "Homicidios Sv 2016 Report";
$tableCaptions["English"]["homicidios_sv_2016_Report1"] = "Homicidios Sv 2016 Report1";
$tableCaptions["English"]["Muertes_PNC_enfrentamientos"] = "Muertes PNC enfrentamientos";
$tableCaptions["English"]["homicidios_municipio"] = "Homicidios Municipio";
$tableCaptions["English"]["Municipios_con_porcentaje_de_enfrentamiento"] = "Municipios con porcentaje de enfrentamiento";
$tableCaptions["English"]["PPL_pertenecientes_a_pandillas_por_municipio"] = "PPL pertenecientes a pandillas por municipio";
$tableCaptions["English"]["PPL_delitos"] = "PPL Delitos";
$tableCaptions["English"]["Transito_class_Rango_Etario"] = "Transito class Rango Etario";
$tableCaptions["English"]["PPL_delitos_clasificacion"] = "PPL Delitos Clasificacion";
$tableCaptions["English"]["Carcel_hurto_mercaderia"] = "Carcel Hurto Mercaderia";
$tableCaptions["English"]["PPL_educacion"] = "PPL Educacion";
$tableCaptions["English"]["Personas_Privadas_de_Libertad"] = "Personas Privadas de Libertad";
$tableCaptions["English"]["hechos_delictivos_class_delitos"] = "Hechos Delictivos Class Delitos";
$tableCaptions["English"]["Sector_PPD_por_pandilla_de_afiliacion__prueba_"] = "Sector PPD por pandilla de afiliacion (prueba)";
$tableCaptions["English"]["tipo_organizacion_delictiva"] = "tipo organizacion delictiva";
$tableCaptions["English"]["carcel_visualizacion_todos"] = "carcel visualizacion todos";
$tableCaptions["English"]["Grupos_etarios_por_estado_civil__masculino_"] = "Grupos etarios por estado civil (masculino)";
$tableCaptions["English"]["Grupo_etarios_por_estado_civil__masculino_"] = "Grupo etarios por estado civil (masculino)";
$tableCaptions["English"]["Grupo_etarios_por_estado_civil__femenino_"] = "Grupo etarios por estado civil (femenino)";
$tableCaptions["English"]["PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas"] = "PPL Grupos etarios por afiliación a Pandillas";
$tableCaptions["English"]["PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino"] = "PPL Grupos etarios por afiliación a Pandillas femenino";
$tableCaptions["English"]["PPL_grupos_etarios_por_Deportado_masculino"] = "PPL grupos etarios por Deportado masculino";
$tableCaptions["English"]["PPL_grupos_etarios_por_Deportado_Femenino"] = "PPL grupos etarios por Deportado Femenino";
$tableCaptions["English"]["PPL_grupos_etarios_delito_genero_masculino"] = "PPL grupos etarios delito genero masculino";
$tableCaptions["English"]["hechos_delictivos1"] = "Hechos Delictivos1";
$tableCaptions["English"]["PPL_Grupos_etarios_por_delitos_masculino"] = "PPL Grupos etarios por delitos masculino";
$tableCaptions["English"]["PPL_Grupos_etarios_por_delitos_femenino"] = "PPL Grupos etarios por delitos femenino";
$tableCaptions["English"]["DELITOS_PNC"] = "DELITOS PNC";
$tableCaptions["English"]["carcel_prueba_santa_tecla"] = "carcel prueba santa tecla";
$tableCaptions["English"]["carcel_clasificacion_lugar"] = "Carcel Clasificacion Lugar";
$tableCaptions["English"]["mes_corregido"] = "Mes Corregido";
$tableCaptions["English"]["Hechos_delictivos_dia_del_hecho"] = "Hechos delictivos dia del hecho";
$tableCaptions["English"]["hechos_delictivos11"] = "Hechos Delictivos11";
$tableCaptions["English"]["BD_Carcel"] = "BD Carcel";
$tableCaptions["English"]["DB_PNC"] = "DB PNC";
$tableCaptions["English"]["Hechosdelictivos_movil_class"] = "Hechosdelictivos movil class";
$tableCaptions["English"]["hechosdelictivos_tipo_arma"] = "Hechosdelictivos Tipo Arma";
$tableCaptions["English"]["Municipios_y_delitos"] = "Municipios y delitos";
$tableCaptions["English"]["Hechosdelictivos_ocupacion_class"] = "Hechosdelictivos ocupacion class";
$tableCaptions["English"]["hechosdelictivos_relacion_vict_agresor"] = "Hechosdelictivos Relacion Vict Agresor";
$tableCaptions["English"]["Relacion_de_victima_con_agresor"] = "Relacion de victima con agresor";
$tableCaptions["English"]["hechosdelictivos_lugar_del_hecho"] = "Hechosdelictivos Lugar Del Hecho";
$tableCaptions["English"]["pnc911"] = "Pnc911";
$tableCaptions["English"]["pnc9111_class_delito"] = "pnc9111 class delito";
$tableCaptions["English"]["pnc9111"] = "Pnc9111";
$tableCaptions["English"]["pnc911_Sector_por_eventos"] = "pnc911 Sector por eventos";
$tableCaptions["English"]["pnc911municipios"] = "Pnc911municipios";
$tableCaptions["English"]["PNC911_Avisos"] = "PNC911 Avisos";
$tableCaptions["English"]["horas_completar"] = "Horas Completar";
$tableCaptions["English"]["hora_sustituir"] = "Hora Sustituir";
$tableCaptions["English"]["hechos_delictivos"] = "Hechos Delictivos";
$tableCaptions["English"]["hechosdelictivos2"] = "Hechosdelictivos2";
$tableCaptions["English"]["PPL_pertenecientes_a_Pandilla_prueba"] = "PPL pertenecientes a Pandilla_prueba";
$tableCaptions["English"]["PPL_pertenecientes_a_Pandilla_prueba1"] = "PPL pertenecientes a Pandilla_prueba1";
$tableCaptions["English"]["retornados"] = "Retornados";
$tableCaptions["English"]["Retornados__clasificacion_rango_etario"] = "Retornados, clasificacion rango etario";
$tableCaptions["English"]["BD_Retornados"] = "BD Retornados";
$tableCaptions["English"]["Retornados_Regi_n_Repatriaci_n_por_a_o"] = "Retornados-Región Repatriación por año";
$tableCaptions["English"]["mes_corregido_retornado"] = "mes corregido retornado";
$tableCaptions["English"]["Retornados_Regiones_repatriaci_n_por_meses"] = "Retornados-Regiones repatriación por meses";
$tableCaptions["English"]["Retornados_Consulados_por_a_o"] = "Retornados-Consulados por año";
$tableCaptions["English"]["Retornados_Dashboard"] = "Retornados Dashboard";
$tableCaptions["English"]["Retornados_Departamento_por_a_o"] = "Retornados-Departamento por año";
$tableCaptions["English"]["Retornados_Municipios_por_a_o"] = "Retornados-Municipios por año";
$tableCaptions["English"]["Retornados_Rango_etario_por_sexo"] = "Retornados-Rango etario por sexo";
$tableCaptions["English"]["Retornados_Rango_etario_por_antecedentes_g_nero_masculino"] = "Retornados-Rango etario por antecedentes género masculino";
$tableCaptions["English"]["Retornados_Rango_etario_por_antecedentes_g_nero_femenino"] = "Retornados-Rango etario por antecedentes género femenino";
$tableCaptions["English"]["transito"] = "Transito";
$tableCaptions["English"]["Tr_nsito__Departamento_por_resultado_del_accidente"] = "Tránsito- Departamento por resultado del accidente";
$tableCaptions["English"]["Tr_nsito"] = "Tránsito";
$tableCaptions["English"]["Tr_nsito__municipio_por_resultado_del_accidente"] = "Tránsito- municipio por resultado del accidente";
$tableCaptions["English"]["Tr_nsito_Fallecidos_Rango_etario_v_ctima_por_sexo_v_ctima"] = "Tránsito-Fallecidos Rango etario víctima por sexo víctima";
$tableCaptions["English"]["Tr_nsito_Lesionados_Rango_etario_v_ctima_por_sexo_v_ctima"] = "Tránsito-Lesionados Rango etario víctima por sexo víctima";
$tableCaptions["English"]["Tr_nsito_Calidad_de_la_v_ctima_por_resultado_del_accidente"] = "Tránsito-Calidad de la víctima por resultado del accidente";
$tableCaptions["English"]["Tr_nsito_Tipo_de_accidente_por_resultado_del_accidente"] = "Tránsito-Tipo de accidente por resultado del accidente";
$tableCaptions["English"]["Transito_class_causas"] = "Transito class causas";
$tableCaptions["English"]["transito1"] = "Transito1";
$tableCaptions["English"]["Tr_nsito_Causa_del_accidente_por_resultado_del_accidente"] = "Tránsito-Causa del accidente por resultado del accidente";
$tableCaptions["English"]["Transito_class_tipo_veh_culo"] = "Transito class tipo vehículo";
$tableCaptions["English"]["Tr_nsito_Tipo_de_veh_culo_por_resultado_del_accidente"] = "Tránsito-Tipo de vehículo por resultado del accidente";
$tableCaptions["English"]["Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente"] = "Tránsito-Ruta transporte colectivo por resultado del accidente";
$tableCaptions["English"]["Tr_nsito_Responsable_accidente_detenido_por_resultado_del_accidente"] = "Tránsito-Responsable accidente detenido por resultado del accidente";
$tableCaptions["English"]["Transito_extraer_mes"] = "Transito extraer mes";
$tableCaptions["English"]["Tr_nsito_Resultado_del_accidente_por_meses_de_accidentes"] = "Tránsito-Resultado del accidente por meses de accidentes";
$tableCaptions["English"]["Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes"] = "Tránsito-Resultado del accidente por rango horario de accidentes";
$tableCaptions["English"]["Tr_nsito_Direcci_n_accidente_por_resultado_del_accidente"] = "Tránsito-Dirección accidente por resultado del accidente";
$tableCaptions["English"]["Transito_prueba_datos"] = "Transito prueba datos";
$tableCaptions["English"]["empalme_tablas"] = "Empalme Tablas";
$tableCaptions["English"]["hechos_delictivos12"] = "Hechos Delictivos12";
$tableCaptions["English"]["Municipios"] = "Municipios";
$tableCaptions["English"]["Transito_arreglar_guiones"] = "Transito arreglar guiones";
$tableCaptions["English"]["sectorppd1"] = "Sectorppd1";
$tableCaptions["English"]["Sector_PPD_24"] = "Sector PPD 24";
$tableCaptions["English"]["sectorppd1_Report"] = "Sectorppd1 Report";
$tableCaptions["English"]["Dashboard"] = "Dashboard";
$tableCaptions["English"]["sectorppd1_Chart"] = "Sectorppd1 Chart";
$tableCaptions["English"]["Hechosdelictivos_rango_etario"] = "Hechosdelictivos Rango Etario";
$tableCaptions["English"]["carcel_Report"] = "Carcel Report";
$tableCaptions["English"]["pnc9112_PRUEBA"] = "Pnc9112 PRUEBA";
$tableCaptions["English"]["Sector_PPD_por_tipo_de_arma"] = "Sector PPD por tipo de arma";
$tableCaptions["English"]["Cruce_Sector_PPD"] = "Cruce Sector PPD";
$tableCaptions["English"]["enlazando_sector"] = "Enlazando Sector";
$tableCaptions["English"]["Retornados_Todos_los_departamentos"] = "Retornados-Todos los departamentos";
$tableCaptions["English"]["reemplazar_sectores"] = "Reemplazar Sectores";
$tableCaptions["English"]["hechos_delictivos_VISTA"] = "Hechos Delictivos VISTA";
$tableCaptions["English"]["reemplazar_sectores_PPL"] = "reemplazar sectores PPL";
$tableCaptions["English"]["anexar_carcel"] = "Anexar Carcel";
$tableCaptions["English"]["anexar_carcel1"] = "Anexar Carcel1";
$tableCaptions["English"]["SUPRIMIR_REGISTROS_ANEXO_CARCEL"] = "SUPRIMIR REGISTROS ANEXO CARCEL";
$tableCaptions["English"]["Sectorizacion"] = "Sectorizacion";
$tableCaptions["English"]["PPL_DGCP"] = "PPL DGCP";
$tableCaptions["English"]["Personas_Privadas_de_Libertad123"] = "Personas Privadas de Libertad123";
$tableCaptions["English"]["Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino"] = "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino";
$tableCaptions["English"]["Dashboard1"] = "Dashboard1";
$tableCaptions["English"]["PPL_por_rango_etario_seg_n_g_nero"] = "PPL por rango etario según género";
$tableCaptions["English"]["reemplazar_sectores_hechosdelictivos"] = "Reemplazar Sectores Hechosdelictivos";
$tableCaptions["English"]["mined"] = "Mined";
$tableCaptions["English"]["mined1"] = "Mined1";
$tableCaptions["English"]["mined2"] = "Mined2";
$tableCaptions["English"]["mined21"] = "Mined21";
$tableCaptions["English"]["mined_Report"] = "Mined Report";
$tableCaptions["English"]["MINED_IPCE"] = "MINED IPCE";
$tableCaptions["English"]["MINED_INDICE"] = "MINED INDICE";
$tableCaptions["English"]["mined11"] = "Mined11";
$tableCaptions["English"]["calcular_indice_MINED"] = "calcular indice MINED";
$tableCaptions["English"]["calcular_indice_MINED2"] = "calcular indice MINED2";
$tableCaptions["English"]["mined1_Report"] = "Mined1 Report";
$tableCaptions["English"]["Maxima_Matricula_Mined"] = "Maxima Matricula Mined";
$tableCaptions["English"]["Matricula_Relativa_Final"] = "Matricula Relativa Final";
$tableCaptions["English"]["IPCE_NAIVE"] = "IPCE NAIVE";
$tableCaptions["English"]["IPCE_FINAL"] = "IPCE FINAL";
$tableCaptions["English"]["Mined_Maximo_IPCE"] = "Mined Maximo IPCE";
$tableCaptions["English"]["mined_maximo_valor"] = "mined maximo valor";
$tableCaptions["English"]["BD_Mined"] = "BD Mined";
$tableCaptions["English"]["mined3"] = "Mined3";
$tableCaptions["English"]["valor_maximo_mined_2"] = "valor maximo mined 2";
$tableCaptions["English"]["BD_SECTORES"] = "BD SECTORES";
$tableCaptions["English"]["Anexar_Sector_a_PPL"] = "Anexar Sector a PPL";
$tableCaptions["English"]["mined4"] = "Mined4";
$tableCaptions["English"]["anexar_carcel2"] = "Anexar Carcel2";
$tableCaptions["English"]["BD_ANEXO_CARCEL"] = "BD ANEXO CARCEL";
$tableCaptions[""] = array();
$tableCaptions[""][""] = "";
$tableCaptions[""]["Delitos_especificos"] = "Delitos Especificos";
$tableCaptions[""]["mined"] = "Mined";
$tableCaptions[""]["mined2"] = "Mined2";
$tableCaptions[""]["mined21"] = "Mined21";
$tableCaptions[""]["mined_Report"] = "Mined Report";
$tableCaptions[""]["MINED_IPCE"] = "MINED IPCE";
$tableCaptions[""]["MINED_INDICE"] = "MINED INDICE";
$tableCaptions[""]["mined11"] = "Mined11";
$tableCaptions[""]["calcular_indice_MINED"] = "calcular indice MINED";
$tableCaptions[""]["calcular_indice_MINED2"] = "calcular indice MINED2";
$tableCaptions[""]["mined1_Report"] = "Mined1 Report";
$tableCaptions[""]["Maxima_Matricula_Mined"] = "Maxima Matricula Mined";
$tableCaptions[""]["Matricula_Relativa_Final"] = "Matricula Relativa Final";
$tableCaptions[""]["IPCE_NAIVE"] = "IPCE NAIVE";
$tableCaptions[""]["IPCE_FINAL"] = "IPCE FINAL";
$tableCaptions[""]["Mined_Maximo_IPCE"] = "Mined Maximo IPCE";
$tableCaptions[""]["mined_maximo_valor"] = "mined maximo valor";
$tableCaptions[""]["BD_Mined"] = "BD Mined";
$tableCaptions[""]["mined3"] = "Mined3";
$tableCaptions[""]["valor_maximo_mined_2"] = "valor maximo mined 2";
$tableCaptions[""]["sectorppd1"] = "Sectorppd1";
$tableCaptions[""]["BD_SECTORES"] = "BD SECTORES";
$tableCaptions[""]["Anexar_Sector_a_PPL"] = "Anexar Sector a PPL";
$tableCaptions[""]["Dashboard"] = "Dashboard";
$tableCaptions[""]["DELITOS_PNC"] = "DELITOS PNC";
$tableCaptions[""]["Sector_PPD"] = "Sector PPD";
$tableCaptions[""]["Sectorizacion"] = "Sectorizacion";
$tableCaptions[""]["Tr_nsito"] = "Tránsito";
$tableCaptions[""]["Retornados_Dashboard"] = "Retornados Dashboard";
$tableCaptions[""]["PNC911_Avisos"] = "PNC911 Avisos";
$tableCaptions[""]["PPL_DGCP"] = "PPL DGCP";
$tableCaptions[""]["mined4"] = "Mined4";
$tableCaptions[""]["anexar_carcel2"] = "Anexar Carcel2";
$tableCaptions[""]["BD_ANEXO_CARCEL"] = "BD ANEXO CARCEL";


$globalEvents = new class_GlobalEvents;
$tableEvents = array();

require_once( getabspath('classes/labels.php') );
require_once( getabspath('classes/security.php') );
require_once( getabspath("connections/dbfunctions_legacy.php") );
require_once( getabspath("connections/ConnectionManager.php") );
include(getabspath('classes/searchclause.php'));
include(getabspath('classes/projectsettings.php'));
include_once(getabspath('classes/runnerpage.php'));
include_once(getabspath("classes/controls/ViewControl.php"));

$cman = new ConnectionManager();

$mlang_defaultlang = getDefaultLanguage();

include(getabspath("include/languages.php"));


$page_titles[".global"] = array();
if(mlang_getcurrentlang()=="Spanish")
{
}
if(mlang_getcurrentlang()=="English")
{
}
if(mlang_getcurrentlang()=="")
{
}

$globalSettings["showDetailedError"] = true;

// SearchClause::getSearchObject
$_cachedSeachClauses = array();


// default connection link #9875
$conn = $cman->getDefault()->conn;

$logoutPerformed = false;
$scriptname = getFileNameFromURL();
	if(!isLogged() && $scriptname!="login.php" && $scriptname!="remind.php" && $scriptname!="register.php" && $scriptname!="checkduplicates.php")
{
	Security::doGuestLogin();
}



$isGroupSecurity = false;

$isUseRTEBasic = true;

$isUseRTECK = false;

$isUseRTEInnova = false;

$caseInsensitiveUsername = 0;

$menuNodesIndex=0;



?>