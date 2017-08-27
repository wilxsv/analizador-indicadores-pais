<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
require_once("include/dbcommon.php");
require_once('classes/searchclause.php');
require_once('include/xtempl.php');

if( @$_REQUEST["format"] != "excel" && @$_REQUEST["format"] != "word" ) 
	add_nocache_headers();

require_once("include/Robo_y_hurto_de_veh_culo_con_mercaderia_por_rango_etario__seg_n_sexo_victima_variables.php");


if( !Security::processPageSecurity( $strTableName, 'P' ) )
	return;

	
require_once('classes/reportpage.php');
require_once('classes/reportprintpage.php');	
	



$layout = new TLayout("rprint_bootstrap", "CityCity", "MobileCity");
$layout->version = 3;
	$layout->bootstrapTheme = "sandstone";
		$layout->customCssPageName = "Robo_y_hurto_de_veh_culo_con_mercaderia_por_rango_etario__seg_n_sexo_victima_rprint";
$layout->blocks["top"] = array();
$layout->containers["pdf"] = array();
$layout->container_properties["pdf"] = array(  "print" => "none"  );
$layout->containers["pdf"][] = array("name"=>"printbuttons",
	"block"=>"printbuttons", "substyle"=>1  );

$layout->skins["pdf"] = "";

$layout->blocks["top"][] = "pdf";
$layout->skins["master"] = "";

$layout->blocks["top"][] = "master";
$layout->containers["pageheader"] = array();
$layout->container_properties["pageheader"] = array(  "print" => "repeat"  );
$layout->containers["pageheader"][] = array("name"=>"printheader",
	"block"=>"printheader", "substyle"=>1  );

$layout->containers["pageheader"][] = array("name"=>"page_of_print",
	"block"=>"page_number", "substyle"=>1  );

$layout->skins["pageheader"] = "";

$layout->blocks["top"][] = "pageheader";
$layout->containers["grid"] = array();
$layout->container_properties["grid"] = array(  );
$layout->containers["grid"][] = array("name"=>"report_print",
	"block"=>"", "substyle"=>1  );

$layout->skins["grid"] = "";

$layout->blocks["top"][] = "grid";
$page_layouts["Robo_y_hurto_de_veh_culo_con_mercaderia_por_rango_etario__seg_n_sexo_victima_rprint"] = $layout;





$xt = new Xtempl();

// an array of ReportPrintPage constructor params
$params = array();
$params["id"] = postvalue("id");
$params["xt"] = &$xt;
$params["mode"] = REPORT_SIMPLE;
$params["tName"] = $strTableName;
$params["pageType"] = PAGE_RPRINT;

$params["allPagesMode"] = postvalue("all");
$params["pdfMode"] = postvalue("pdf");
$params["exportPdf"] = postvalue("exportPdf");
$params["pdfContent"] = postvalue("htmlPdfContent");
$params["pdfWidth"] = postvalue("width");
$params["format"] = postvalue("format");
$params["splitByGroups"] = postvalue("records");


//crosstable params
$params["x"] = postvalue("x");
$params["y"] = postvalue("y");
$params["dataField"] = postvalue("data");
$params["operation"] = postvalue("op");
$params["xType"] = postvalue("xtype");
$params["yType"] = postvalue("ytype");
//

$pageObject = new ReportPrintPage($params);
$pageObject->init();

$pageObject->process();
/*

$pageObject->displayMasterTableInfo();
$pageObject->assignPDFFormatSettings( @$_REQUEST["format"], postvalue("exportPdf") );


$forExport = false;
if (@$_REQUEST["format"] == "excel")
{
	$forExport = "excel";
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment;Filename=Robo_y_hurto_de_veh_culo_con_mercaderia_por_rango_etario__seg_n_sexo_victima.xls");
	echo "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">";
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
}
else if (@$_REQUEST["format"] == "word")
{
	$forExport = "word";
	header("Content-Type: application/vnd.ms-word");
	header("Content-Disposition: attachment;Filename=Robo_y_hurto_de_veh_culo_con_mercaderia_por_rango_etario__seg_n_sexo_victima.doc");
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
}

if( @$_REQUEST["format"] )
	$xt->assign("stylesheetlink", false);
else
	$xt->assign("stylesheetlink", true);

	
// the table info params
$extraParams = $pageObject->getExtraReportParams();	
$extraParams['forExport'] = $forExport; 

$pageObject->setGoogleMapsParams( $extraParams['fieldsArr'] );
$pageObject->setReportData( $extraParams );


// add button events if exist
$pageObject->addButtonHandlers();
$pageObject->addCommonJs();

if( $pageObject->pSet->getReportPrintPartitionType() == 0 )
	$xt->assign("divideintopages_block", true);

if( $pageObject->pSet->isPrinterPagePDF() )
{	

	if( !postvalue("pdf") )
	{
		$buttonsVisible = @$_REQUEST["format"] != "pdf";
		$xt->assign("pdflink_block", $buttonsVisible && !postvalue("exportPdf"));
		if(!$buttonsVisible)
			$xt->assign("divideintopages_block", false);
	}
}


$pageObject->body["begin"] .= GetBaseScriptsForPage(false);
$pageObject->body['end'] = XTempl::create_method_assignment( "assignBodyEnd", $pageObject);

$xt->assignbyref("body", $pageObject->body);
$xt->assign("grid_block", true);
$xt->assign("grid_header", true);

foreach( $pageObject->pSet->getFieldsList() as $fName ) 
{
	$xt->assign( $fName."_fieldheader", true);
}


if( @$_REQUEST["format"] && $_REQUEST["format"] != "pdf" )
{
	$xt->assign("pdflink_block", false);
	$xt->assign("divideintopages_block", false);
	$pageObject->body["begin"] = "";
	$pageObject->body["end"] = "";
	$xt->assignbyref("body", $pageObject->body);
}

$pageObject->showPage();*/
?>