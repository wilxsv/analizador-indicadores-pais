<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasectorppd1_Chart = array();
	$tdatasectorppd1_Chart[".ShortName"] = "sectorppd1_Chart";
	$tdatasectorppd1_Chart[".OwnerID"] = "";
	$tdatasectorppd1_Chart[".OriginalTable"] = "sectorppd1";

//	field labels
$fieldLabelssectorppd1_Chart = array();
$fieldToolTipssectorppd1_Chart = array();
$pageTitlessectorppd1_Chart = array();
$placeHolderssectorppd1_Chart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssectorppd1_Chart["Spanish"] = array();
	$fieldToolTipssectorppd1_Chart["Spanish"] = array();
	$placeHolderssectorppd1_Chart["Spanish"] = array();
	$pageTitlessectorppd1_Chart["Spanish"] = array();
	$fieldLabelssectorppd1_Chart["Spanish"]["sector_estandarizado"] = "Sector Estandarizado";
	$fieldToolTipssectorppd1_Chart["Spanish"]["sector_estandarizado"] = "";
	$placeHolderssectorppd1_Chart["Spanish"]["sector_estandarizado"] = "";
	$fieldLabelssectorppd1_Chart["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipssectorppd1_Chart["Spanish"]["departamento"] = "";
	$placeHolderssectorppd1_Chart["Spanish"]["departamento"] = "";
	$fieldLabelssectorppd1_Chart["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipssectorppd1_Chart["Spanish"]["municipio"] = "";
	$placeHolderssectorppd1_Chart["Spanish"]["municipio"] = "";
	$fieldLabelssectorppd1_Chart["Spanish"]["canton"] = "Canton";
	$fieldToolTipssectorppd1_Chart["Spanish"]["canton"] = "";
	$placeHolderssectorppd1_Chart["Spanish"]["canton"] = "";
	$fieldLabelssectorppd1_Chart["Spanish"]["area"] = "Area";
	$fieldToolTipssectorppd1_Chart["Spanish"]["area"] = "";
	$placeHolderssectorppd1_Chart["Spanish"]["area"] = "";
	$fieldLabelssectorppd1_Chart["Spanish"]["tipo"] = "Tipo";
	$fieldToolTipssectorppd1_Chart["Spanish"]["tipo"] = "";
	$placeHolderssectorppd1_Chart["Spanish"]["tipo"] = "";
	$fieldLabelssectorppd1_Chart["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipssectorppd1_Chart["Spanish"]["nombre"] = "";
	$placeHolderssectorppd1_Chart["Spanish"]["nombre"] = "";
	$fieldLabelssectorppd1_Chart["Spanish"]["x"] = "X";
	$fieldToolTipssectorppd1_Chart["Spanish"]["x"] = "";
	$placeHolderssectorppd1_Chart["Spanish"]["x"] = "";
	$fieldLabelssectorppd1_Chart["Spanish"]["y"] = "Y";
	$fieldToolTipssectorppd1_Chart["Spanish"]["y"] = "";
	$placeHolderssectorppd1_Chart["Spanish"]["y"] = "";
	$fieldLabelssectorppd1_Chart["Spanish"]["f10"] = "F10";
	$fieldToolTipssectorppd1_Chart["Spanish"]["f10"] = "";
	$placeHolderssectorppd1_Chart["Spanish"]["f10"] = "";
	$fieldLabelssectorppd1_Chart["Spanish"]["f11"] = "F11";
	$fieldToolTipssectorppd1_Chart["Spanish"]["f11"] = "";
	$placeHolderssectorppd1_Chart["Spanish"]["f11"] = "";
	if (count($fieldToolTipssectorppd1_Chart["Spanish"]))
		$tdatasectorppd1_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssectorppd1_Chart["English"] = array();
	$fieldToolTipssectorppd1_Chart["English"] = array();
	$placeHolderssectorppd1_Chart["English"] = array();
	$pageTitlessectorppd1_Chart["English"] = array();
	$fieldLabelssectorppd1_Chart["English"]["sector_estandarizado"] = "Sector Estandarizado";
	$fieldToolTipssectorppd1_Chart["English"]["sector_estandarizado"] = "";
	$placeHolderssectorppd1_Chart["English"]["sector_estandarizado"] = "";
	$fieldLabelssectorppd1_Chart["English"]["departamento"] = "Departamento";
	$fieldToolTipssectorppd1_Chart["English"]["departamento"] = "";
	$placeHolderssectorppd1_Chart["English"]["departamento"] = "";
	$fieldLabelssectorppd1_Chart["English"]["municipio"] = "Municipio";
	$fieldToolTipssectorppd1_Chart["English"]["municipio"] = "";
	$placeHolderssectorppd1_Chart["English"]["municipio"] = "";
	$fieldLabelssectorppd1_Chart["English"]["canton"] = "Canton";
	$fieldToolTipssectorppd1_Chart["English"]["canton"] = "";
	$placeHolderssectorppd1_Chart["English"]["canton"] = "";
	$fieldLabelssectorppd1_Chart["English"]["area"] = "Area";
	$fieldToolTipssectorppd1_Chart["English"]["area"] = "";
	$placeHolderssectorppd1_Chart["English"]["area"] = "";
	$fieldLabelssectorppd1_Chart["English"]["tipo"] = "Tipo";
	$fieldToolTipssectorppd1_Chart["English"]["tipo"] = "";
	$placeHolderssectorppd1_Chart["English"]["tipo"] = "";
	$fieldLabelssectorppd1_Chart["English"]["nombre"] = "Nombre";
	$fieldToolTipssectorppd1_Chart["English"]["nombre"] = "";
	$placeHolderssectorppd1_Chart["English"]["nombre"] = "";
	$fieldLabelssectorppd1_Chart["English"]["x"] = "X";
	$fieldToolTipssectorppd1_Chart["English"]["x"] = "";
	$placeHolderssectorppd1_Chart["English"]["x"] = "";
	$fieldLabelssectorppd1_Chart["English"]["y"] = "Y";
	$fieldToolTipssectorppd1_Chart["English"]["y"] = "";
	$placeHolderssectorppd1_Chart["English"]["y"] = "";
	$fieldLabelssectorppd1_Chart["English"]["f10"] = "F10";
	$fieldToolTipssectorppd1_Chart["English"]["f10"] = "";
	$placeHolderssectorppd1_Chart["English"]["f10"] = "";
	$fieldLabelssectorppd1_Chart["English"]["f11"] = "F11";
	$fieldToolTipssectorppd1_Chart["English"]["f11"] = "";
	$placeHolderssectorppd1_Chart["English"]["f11"] = "";
	if (count($fieldToolTipssectorppd1_Chart["English"]))
		$tdatasectorppd1_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssectorppd1_Chart[""] = array();
	$fieldToolTipssectorppd1_Chart[""] = array();
	$placeHolderssectorppd1_Chart[""] = array();
	$pageTitlessectorppd1_Chart[""] = array();
	if (count($fieldToolTipssectorppd1_Chart[""]))
		$tdatasectorppd1_Chart[".isUseToolTips"] = true;
}


	$tdatasectorppd1_Chart[".NCSearch"] = true;

	$tdatasectorppd1_Chart[".ChartRefreshTime"] = 0;


$tdatasectorppd1_Chart[".shortTableName"] = "sectorppd1_Chart";
$tdatasectorppd1_Chart[".nSecOptions"] = 0;
$tdatasectorppd1_Chart[".recsPerRowPrint"] = 1;
$tdatasectorppd1_Chart[".mainTableOwnerID"] = "";
$tdatasectorppd1_Chart[".moveNext"] = 1;
$tdatasectorppd1_Chart[".entityType"] = 3;

$tdatasectorppd1_Chart[".strOriginalTableName"] = "sectorppd1";

	



$tdatasectorppd1_Chart[".showAddInPopup"] = false;

$tdatasectorppd1_Chart[".showEditInPopup"] = false;

$tdatasectorppd1_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasectorppd1_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasectorppd1_Chart[".fieldsForRegister"] = array();

$tdatasectorppd1_Chart[".listAjax"] = false;

	$tdatasectorppd1_Chart[".audit"] = false;

	$tdatasectorppd1_Chart[".locking"] = false;



$tdatasectorppd1_Chart[".list"] = true;



$tdatasectorppd1_Chart[".reorderRecordsByHeader"] = true;








$tdatasectorppd1_Chart[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasectorppd1_Chart[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasectorppd1_Chart[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasectorppd1_Chart[".searchSaving"] = false;
//

$tdatasectorppd1_Chart[".showSearchPanel"] = true;
		$tdatasectorppd1_Chart[".flexibleSearch"] = true;

$tdatasectorppd1_Chart[".isUseAjaxSuggest"] = true;






$tdatasectorppd1_Chart[".ajaxCodeSnippetAdded"] = false;

$tdatasectorppd1_Chart[".buttonsAdded"] = false;

$tdatasectorppd1_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasectorppd1_Chart[".isUseTimeForSearch"] = false;





$tdatasectorppd1_Chart[".allSearchFields"] = array();
$tdatasectorppd1_Chart[".filterFields"] = array();
$tdatasectorppd1_Chart[".requiredSearchFields"] = array();

$tdatasectorppd1_Chart[".allSearchFields"][] = "sector_estandarizado";
	$tdatasectorppd1_Chart[".allSearchFields"][] = "departamento";
	$tdatasectorppd1_Chart[".allSearchFields"][] = "municipio";
	$tdatasectorppd1_Chart[".allSearchFields"][] = "canton";
	$tdatasectorppd1_Chart[".allSearchFields"][] = "area";
	$tdatasectorppd1_Chart[".allSearchFields"][] = "tipo";
	$tdatasectorppd1_Chart[".allSearchFields"][] = "nombre";
	$tdatasectorppd1_Chart[".allSearchFields"][] = "x";
	$tdatasectorppd1_Chart[".allSearchFields"][] = "y";
	$tdatasectorppd1_Chart[".allSearchFields"][] = "f10";
	$tdatasectorppd1_Chart[".allSearchFields"][] = "f11";
	

$tdatasectorppd1_Chart[".googleLikeFields"] = array();
$tdatasectorppd1_Chart[".googleLikeFields"][] = "sector_estandarizado";
$tdatasectorppd1_Chart[".googleLikeFields"][] = "departamento";
$tdatasectorppd1_Chart[".googleLikeFields"][] = "municipio";
$tdatasectorppd1_Chart[".googleLikeFields"][] = "canton";
$tdatasectorppd1_Chart[".googleLikeFields"][] = "area";
$tdatasectorppd1_Chart[".googleLikeFields"][] = "tipo";
$tdatasectorppd1_Chart[".googleLikeFields"][] = "nombre";
$tdatasectorppd1_Chart[".googleLikeFields"][] = "x";
$tdatasectorppd1_Chart[".googleLikeFields"][] = "y";
$tdatasectorppd1_Chart[".googleLikeFields"][] = "f10";
$tdatasectorppd1_Chart[".googleLikeFields"][] = "f11";


$tdatasectorppd1_Chart[".advSearchFields"] = array();
$tdatasectorppd1_Chart[".advSearchFields"][] = "sector_estandarizado";
$tdatasectorppd1_Chart[".advSearchFields"][] = "departamento";
$tdatasectorppd1_Chart[".advSearchFields"][] = "municipio";
$tdatasectorppd1_Chart[".advSearchFields"][] = "canton";
$tdatasectorppd1_Chart[".advSearchFields"][] = "area";
$tdatasectorppd1_Chart[".advSearchFields"][] = "tipo";
$tdatasectorppd1_Chart[".advSearchFields"][] = "nombre";
$tdatasectorppd1_Chart[".advSearchFields"][] = "x";
$tdatasectorppd1_Chart[".advSearchFields"][] = "y";
$tdatasectorppd1_Chart[".advSearchFields"][] = "f10";
$tdatasectorppd1_Chart[".advSearchFields"][] = "f11";

$tdatasectorppd1_Chart[".tableType"] = "chart";

$tdatasectorppd1_Chart[".printerPageOrientation"] = 0;
$tdatasectorppd1_Chart[".nPrinterPageScale"] = 100;

$tdatasectorppd1_Chart[".nPrinterSplitRecords"] = 40;

$tdatasectorppd1_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdatasectorppd1_Chart[".geocodingEnabled"] = false;



// chart settings
$tdatasectorppd1_Chart[".chartType"] = "2DColumn";
// end of chart settings


$tdatasectorppd1_Chart[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasectorppd1_Chart[".strOrderBy"] = $tstrOrderBy;

$tdatasectorppd1_Chart[".orderindexes"] = array();

$tdatasectorppd1_Chart[".sqlHead"] = "SELECT sector_estandarizado,  	departamento,  	municipio,  	canton,  	area,  	tipo,  	nombre,  	x,  	y,  	f10,  	f11";
$tdatasectorppd1_Chart[".sqlFrom"] = "FROM sectorppd1";
$tdatasectorppd1_Chart[".sqlWhereExpr"] = "";
$tdatasectorppd1_Chart[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasectorppd1_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasectorppd1_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdatasectorppd1_Chart[".highlightSearchResults"] = true;

$tableKeyssectorppd1_Chart = array();
$tdatasectorppd1_Chart[".Keys"] = $tableKeyssectorppd1_Chart;

$tdatasectorppd1_Chart[".listFields"] = array();
$tdatasectorppd1_Chart[".listFields"][] = "sector_estandarizado";
$tdatasectorppd1_Chart[".listFields"][] = "departamento";
$tdatasectorppd1_Chart[".listFields"][] = "municipio";
$tdatasectorppd1_Chart[".listFields"][] = "canton";
$tdatasectorppd1_Chart[".listFields"][] = "area";
$tdatasectorppd1_Chart[".listFields"][] = "tipo";
$tdatasectorppd1_Chart[".listFields"][] = "nombre";
$tdatasectorppd1_Chart[".listFields"][] = "x";
$tdatasectorppd1_Chart[".listFields"][] = "y";
$tdatasectorppd1_Chart[".listFields"][] = "f10";
$tdatasectorppd1_Chart[".listFields"][] = "f11";

$tdatasectorppd1_Chart[".hideMobileList"] = array();


$tdatasectorppd1_Chart[".viewFields"] = array();
$tdatasectorppd1_Chart[".viewFields"][] = "sector_estandarizado";
$tdatasectorppd1_Chart[".viewFields"][] = "departamento";
$tdatasectorppd1_Chart[".viewFields"][] = "municipio";
$tdatasectorppd1_Chart[".viewFields"][] = "canton";
$tdatasectorppd1_Chart[".viewFields"][] = "area";
$tdatasectorppd1_Chart[".viewFields"][] = "tipo";
$tdatasectorppd1_Chart[".viewFields"][] = "nombre";
$tdatasectorppd1_Chart[".viewFields"][] = "x";
$tdatasectorppd1_Chart[".viewFields"][] = "y";
$tdatasectorppd1_Chart[".viewFields"][] = "f10";
$tdatasectorppd1_Chart[".viewFields"][] = "f11";

$tdatasectorppd1_Chart[".addFields"] = array();
$tdatasectorppd1_Chart[".addFields"][] = "sector_estandarizado";
$tdatasectorppd1_Chart[".addFields"][] = "departamento";
$tdatasectorppd1_Chart[".addFields"][] = "municipio";
$tdatasectorppd1_Chart[".addFields"][] = "canton";
$tdatasectorppd1_Chart[".addFields"][] = "area";
$tdatasectorppd1_Chart[".addFields"][] = "tipo";
$tdatasectorppd1_Chart[".addFields"][] = "nombre";
$tdatasectorppd1_Chart[".addFields"][] = "x";
$tdatasectorppd1_Chart[".addFields"][] = "y";
$tdatasectorppd1_Chart[".addFields"][] = "f10";
$tdatasectorppd1_Chart[".addFields"][] = "f11";

$tdatasectorppd1_Chart[".masterListFields"] = array();
$tdatasectorppd1_Chart[".masterListFields"][] = "sector_estandarizado";
$tdatasectorppd1_Chart[".masterListFields"][] = "departamento";
$tdatasectorppd1_Chart[".masterListFields"][] = "municipio";
$tdatasectorppd1_Chart[".masterListFields"][] = "canton";
$tdatasectorppd1_Chart[".masterListFields"][] = "area";
$tdatasectorppd1_Chart[".masterListFields"][] = "tipo";
$tdatasectorppd1_Chart[".masterListFields"][] = "nombre";
$tdatasectorppd1_Chart[".masterListFields"][] = "x";
$tdatasectorppd1_Chart[".masterListFields"][] = "y";
$tdatasectorppd1_Chart[".masterListFields"][] = "f10";
$tdatasectorppd1_Chart[".masterListFields"][] = "f11";

$tdatasectorppd1_Chart[".inlineAddFields"] = array();
$tdatasectorppd1_Chart[".inlineAddFields"][] = "sector_estandarizado";
$tdatasectorppd1_Chart[".inlineAddFields"][] = "departamento";
$tdatasectorppd1_Chart[".inlineAddFields"][] = "municipio";
$tdatasectorppd1_Chart[".inlineAddFields"][] = "canton";
$tdatasectorppd1_Chart[".inlineAddFields"][] = "area";
$tdatasectorppd1_Chart[".inlineAddFields"][] = "tipo";
$tdatasectorppd1_Chart[".inlineAddFields"][] = "nombre";
$tdatasectorppd1_Chart[".inlineAddFields"][] = "x";
$tdatasectorppd1_Chart[".inlineAddFields"][] = "y";
$tdatasectorppd1_Chart[".inlineAddFields"][] = "f10";
$tdatasectorppd1_Chart[".inlineAddFields"][] = "f11";

$tdatasectorppd1_Chart[".editFields"] = array();
$tdatasectorppd1_Chart[".editFields"][] = "sector_estandarizado";
$tdatasectorppd1_Chart[".editFields"][] = "departamento";
$tdatasectorppd1_Chart[".editFields"][] = "municipio";
$tdatasectorppd1_Chart[".editFields"][] = "canton";
$tdatasectorppd1_Chart[".editFields"][] = "area";
$tdatasectorppd1_Chart[".editFields"][] = "tipo";
$tdatasectorppd1_Chart[".editFields"][] = "nombre";
$tdatasectorppd1_Chart[".editFields"][] = "x";
$tdatasectorppd1_Chart[".editFields"][] = "y";
$tdatasectorppd1_Chart[".editFields"][] = "f10";
$tdatasectorppd1_Chart[".editFields"][] = "f11";

$tdatasectorppd1_Chart[".inlineEditFields"] = array();
$tdatasectorppd1_Chart[".inlineEditFields"][] = "sector_estandarizado";
$tdatasectorppd1_Chart[".inlineEditFields"][] = "departamento";
$tdatasectorppd1_Chart[".inlineEditFields"][] = "municipio";
$tdatasectorppd1_Chart[".inlineEditFields"][] = "canton";
$tdatasectorppd1_Chart[".inlineEditFields"][] = "area";
$tdatasectorppd1_Chart[".inlineEditFields"][] = "tipo";
$tdatasectorppd1_Chart[".inlineEditFields"][] = "nombre";
$tdatasectorppd1_Chart[".inlineEditFields"][] = "x";
$tdatasectorppd1_Chart[".inlineEditFields"][] = "y";
$tdatasectorppd1_Chart[".inlineEditFields"][] = "f10";
$tdatasectorppd1_Chart[".inlineEditFields"][] = "f11";

$tdatasectorppd1_Chart[".updateSelectedFields"] = array();
$tdatasectorppd1_Chart[".updateSelectedFields"][] = "sector_estandarizado";
$tdatasectorppd1_Chart[".updateSelectedFields"][] = "departamento";
$tdatasectorppd1_Chart[".updateSelectedFields"][] = "municipio";
$tdatasectorppd1_Chart[".updateSelectedFields"][] = "canton";
$tdatasectorppd1_Chart[".updateSelectedFields"][] = "area";
$tdatasectorppd1_Chart[".updateSelectedFields"][] = "tipo";
$tdatasectorppd1_Chart[".updateSelectedFields"][] = "nombre";
$tdatasectorppd1_Chart[".updateSelectedFields"][] = "x";
$tdatasectorppd1_Chart[".updateSelectedFields"][] = "y";
$tdatasectorppd1_Chart[".updateSelectedFields"][] = "f10";
$tdatasectorppd1_Chart[".updateSelectedFields"][] = "f11";


$tdatasectorppd1_Chart[".exportFields"] = array();
$tdatasectorppd1_Chart[".exportFields"][] = "sector_estandarizado";
$tdatasectorppd1_Chart[".exportFields"][] = "departamento";
$tdatasectorppd1_Chart[".exportFields"][] = "municipio";
$tdatasectorppd1_Chart[".exportFields"][] = "canton";
$tdatasectorppd1_Chart[".exportFields"][] = "area";
$tdatasectorppd1_Chart[".exportFields"][] = "tipo";
$tdatasectorppd1_Chart[".exportFields"][] = "nombre";
$tdatasectorppd1_Chart[".exportFields"][] = "x";
$tdatasectorppd1_Chart[".exportFields"][] = "y";
$tdatasectorppd1_Chart[".exportFields"][] = "f10";
$tdatasectorppd1_Chart[".exportFields"][] = "f11";

$tdatasectorppd1_Chart[".importFields"] = array();
$tdatasectorppd1_Chart[".importFields"][] = "sector_estandarizado";
$tdatasectorppd1_Chart[".importFields"][] = "departamento";
$tdatasectorppd1_Chart[".importFields"][] = "municipio";
$tdatasectorppd1_Chart[".importFields"][] = "canton";
$tdatasectorppd1_Chart[".importFields"][] = "area";
$tdatasectorppd1_Chart[".importFields"][] = "tipo";
$tdatasectorppd1_Chart[".importFields"][] = "nombre";
$tdatasectorppd1_Chart[".importFields"][] = "x";
$tdatasectorppd1_Chart[".importFields"][] = "y";
$tdatasectorppd1_Chart[".importFields"][] = "f10";
$tdatasectorppd1_Chart[".importFields"][] = "f11";

$tdatasectorppd1_Chart[".printFields"] = array();
$tdatasectorppd1_Chart[".printFields"][] = "sector_estandarizado";
$tdatasectorppd1_Chart[".printFields"][] = "departamento";
$tdatasectorppd1_Chart[".printFields"][] = "municipio";
$tdatasectorppd1_Chart[".printFields"][] = "canton";
$tdatasectorppd1_Chart[".printFields"][] = "area";
$tdatasectorppd1_Chart[".printFields"][] = "tipo";
$tdatasectorppd1_Chart[".printFields"][] = "nombre";
$tdatasectorppd1_Chart[".printFields"][] = "x";
$tdatasectorppd1_Chart[".printFields"][] = "y";
$tdatasectorppd1_Chart[".printFields"][] = "f10";
$tdatasectorppd1_Chart[".printFields"][] = "f11";

//	sector_estandarizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sector_estandarizado";
	$fdata["GoodName"] = "sector_estandarizado";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Chart","sector_estandarizado");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sector_estandarizado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sector_estandarizado";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasectorppd1_Chart["sector_estandarizado"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Chart","departamento");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "departamento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "departamento";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasectorppd1_Chart["departamento"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Chart","municipio");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "municipio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "municipio";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasectorppd1_Chart["municipio"] = $fdata;
//	canton
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "canton";
	$fdata["GoodName"] = "canton";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Chart","canton");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "canton";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "canton";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasectorppd1_Chart["canton"] = $fdata;
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Chart","area");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "area";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasectorppd1_Chart["area"] = $fdata;
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Chart","tipo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasectorppd1_Chart["tipo"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Chart","nombre");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasectorppd1_Chart["nombre"] = $fdata;
//	x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "x";
	$fdata["GoodName"] = "x";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Chart","x");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "x";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "x";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasectorppd1_Chart["x"] = $fdata;
//	y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "y";
	$fdata["GoodName"] = "y";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Chart","y");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "y";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "y";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasectorppd1_Chart["y"] = $fdata;
//	f10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "f10";
	$fdata["GoodName"] = "f10";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Chart","f10");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "f10";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "f10";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasectorppd1_Chart["f10"] = $fdata;
//	f11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "f11";
	$fdata["GoodName"] = "f11";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Chart","f11");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "f11";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "f11";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasectorppd1_Chart["f11"] = $fdata;

	$tdatasectorppd1_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">sectorppd1 Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatasectorppd1_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">x</attr>';
	$tdatasectorppd1_Chart[".chartXml"] .= '</attr>';
	$tdatasectorppd1_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">sector_estandarizado</attr>
	</attr>';
	$tdatasectorppd1_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatasectorppd1_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("sectorppd1 Chart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("x").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatasectorppd1_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatasectorppd1_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">sector_estandarizado</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("sectorppd1_Chart","sector_estandarizado")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatasectorppd1_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">departamento</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("sectorppd1_Chart","departamento")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatasectorppd1_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">municipio</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("sectorppd1_Chart","municipio")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatasectorppd1_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">canton</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("sectorppd1_Chart","canton")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatasectorppd1_Chart[".chartXml"] .= '<attr value="4">
		<attr value="name">area</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("sectorppd1_Chart","area")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatasectorppd1_Chart[".chartXml"] .= '<attr value="5">
		<attr value="name">tipo</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("sectorppd1_Chart","tipo")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatasectorppd1_Chart[".chartXml"] .= '<attr value="6">
		<attr value="name">nombre</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("sectorppd1_Chart","nombre")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatasectorppd1_Chart[".chartXml"] .= '<attr value="7">
		<attr value="name">x</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("sectorppd1_Chart","x")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatasectorppd1_Chart[".chartXml"] .= '<attr value="8">
		<attr value="name">y</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("sectorppd1_Chart","y")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatasectorppd1_Chart[".chartXml"] .= '<attr value="9">
		<attr value="name">f10</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("sectorppd1_Chart","f10")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatasectorppd1_Chart[".chartXml"] .= '<attr value="10">
		<attr value="name">f11</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("sectorppd1_Chart","f11")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatasectorppd1_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">sectorppd1 Chart</attr>
<attr value="short_table_name">sectorppd1_Chart</attr>
</attr>

</chart>';

$tables_data["sectorppd1 Chart"]=&$tdatasectorppd1_Chart;
$field_labels["sectorppd1_Chart"] = &$fieldLabelssectorppd1_Chart;
$fieldToolTips["sectorppd1_Chart"] = &$fieldToolTipssectorppd1_Chart;
$placeHolders["sectorppd1_Chart"] = &$placeHolderssectorppd1_Chart;
$page_titles["sectorppd1_Chart"] = &$pageTitlessectorppd1_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sectorppd1 Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["sectorppd1 Chart"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_sectorppd1_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sector_estandarizado,  	departamento,  	municipio,  	canton,  	area,  	tipo,  	nombre,  	x,  	y,  	f10,  	f11";
$proto0["m_strFrom"] = "FROM sectorppd1";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_estandarizado",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1 Chart"
));

$proto6["m_sql"] = "sector_estandarizado";
$proto6["m_srcTableName"] = "sectorppd1 Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1 Chart"
));

$proto8["m_sql"] = "departamento";
$proto8["m_srcTableName"] = "sectorppd1 Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1 Chart"
));

$proto10["m_sql"] = "municipio";
$proto10["m_srcTableName"] = "sectorppd1 Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "canton",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1 Chart"
));

$proto12["m_sql"] = "canton";
$proto12["m_srcTableName"] = "sectorppd1 Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1 Chart"
));

$proto14["m_sql"] = "area";
$proto14["m_srcTableName"] = "sectorppd1 Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1 Chart"
));

$proto16["m_sql"] = "tipo";
$proto16["m_srcTableName"] = "sectorppd1 Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1 Chart"
));

$proto18["m_sql"] = "nombre";
$proto18["m_srcTableName"] = "sectorppd1 Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "x",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1 Chart"
));

$proto20["m_sql"] = "x";
$proto20["m_srcTableName"] = "sectorppd1 Chart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "y",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1 Chart"
));

$proto22["m_sql"] = "y";
$proto22["m_srcTableName"] = "sectorppd1 Chart";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "f10",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1 Chart"
));

$proto24["m_sql"] = "f10";
$proto24["m_srcTableName"] = "sectorppd1 Chart";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "f11",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1 Chart"
));

$proto26["m_sql"] = "f11";
$proto26["m_srcTableName"] = "sectorppd1 Chart";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "sectorppd1";
$proto29["m_srcTableName"] = "sectorppd1 Chart";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "sector_estandarizado";
$proto29["m_columns"][] = "departamento";
$proto29["m_columns"][] = "municipio";
$proto29["m_columns"][] = "canton";
$proto29["m_columns"][] = "area";
$proto29["m_columns"][] = "tipo";
$proto29["m_columns"][] = "nombre";
$proto29["m_columns"][] = "x";
$proto29["m_columns"][] = "y";
$proto29["m_columns"][] = "f10";
$proto29["m_columns"][] = "f11";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "sectorppd1";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "sectorppd1 Chart";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="sectorppd1 Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sectorppd1_Chart = createSqlQuery_sectorppd1_Chart();


	
		;

											

$tdatasectorppd1_Chart[".sqlquery"] = $queryData_sectorppd1_Chart;

$tableEvents["sectorppd1 Chart"] = new eventsBase;
$tdatasectorppd1_Chart[".hasEvents"] = false;

?>