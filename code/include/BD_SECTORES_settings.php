<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBD_SECTORES = array();
	$tdataBD_SECTORES[".truncateText"] = true;
	$tdataBD_SECTORES[".NumberOfChars"] = 80;
	$tdataBD_SECTORES[".ShortName"] = "BD_SECTORES";
	$tdataBD_SECTORES[".OwnerID"] = "";
	$tdataBD_SECTORES[".OriginalTable"] = "sectorppd1";

//	field labels
$fieldLabelsBD_SECTORES = array();
$fieldToolTipsBD_SECTORES = array();
$pageTitlesBD_SECTORES = array();
$placeHoldersBD_SECTORES = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsBD_SECTORES["Spanish"] = array();
	$fieldToolTipsBD_SECTORES["Spanish"] = array();
	$placeHoldersBD_SECTORES["Spanish"] = array();
	$pageTitlesBD_SECTORES["Spanish"] = array();
	$fieldLabelsBD_SECTORES["Spanish"]["sector_estandarizado"] = "Sector Estandarizado";
	$fieldToolTipsBD_SECTORES["Spanish"]["sector_estandarizado"] = "";
	$placeHoldersBD_SECTORES["Spanish"]["sector_estandarizado"] = "";
	$fieldLabelsBD_SECTORES["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsBD_SECTORES["Spanish"]["departamento"] = "";
	$placeHoldersBD_SECTORES["Spanish"]["departamento"] = "";
	$fieldLabelsBD_SECTORES["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsBD_SECTORES["Spanish"]["municipio"] = "";
	$placeHoldersBD_SECTORES["Spanish"]["municipio"] = "";
	$fieldLabelsBD_SECTORES["Spanish"]["canton"] = "Canton";
	$fieldToolTipsBD_SECTORES["Spanish"]["canton"] = "";
	$placeHoldersBD_SECTORES["Spanish"]["canton"] = "";
	$fieldLabelsBD_SECTORES["Spanish"]["area"] = "Area";
	$fieldToolTipsBD_SECTORES["Spanish"]["area"] = "";
	$placeHoldersBD_SECTORES["Spanish"]["area"] = "";
	$fieldLabelsBD_SECTORES["Spanish"]["tipo"] = "Tipo";
	$fieldToolTipsBD_SECTORES["Spanish"]["tipo"] = "";
	$placeHoldersBD_SECTORES["Spanish"]["tipo"] = "";
	$fieldLabelsBD_SECTORES["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsBD_SECTORES["Spanish"]["nombre"] = "";
	$placeHoldersBD_SECTORES["Spanish"]["nombre"] = "";
	$fieldLabelsBD_SECTORES["Spanish"]["x"] = "X";
	$fieldToolTipsBD_SECTORES["Spanish"]["x"] = "";
	$placeHoldersBD_SECTORES["Spanish"]["x"] = "";
	$fieldLabelsBD_SECTORES["Spanish"]["y"] = "Y";
	$fieldToolTipsBD_SECTORES["Spanish"]["y"] = "";
	$placeHoldersBD_SECTORES["Spanish"]["y"] = "";
	$fieldLabelsBD_SECTORES["Spanish"]["f10"] = "F10";
	$fieldToolTipsBD_SECTORES["Spanish"]["f10"] = "";
	$placeHoldersBD_SECTORES["Spanish"]["f10"] = "";
	$fieldLabelsBD_SECTORES["Spanish"]["f11"] = "F11";
	$fieldToolTipsBD_SECTORES["Spanish"]["f11"] = "";
	$placeHoldersBD_SECTORES["Spanish"]["f11"] = "";
	if (count($fieldToolTipsBD_SECTORES["Spanish"]))
		$tdataBD_SECTORES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBD_SECTORES["English"] = array();
	$fieldToolTipsBD_SECTORES["English"] = array();
	$placeHoldersBD_SECTORES["English"] = array();
	$pageTitlesBD_SECTORES["English"] = array();
	$fieldLabelsBD_SECTORES["English"]["sector_estandarizado"] = "Sector Estandarizado";
	$fieldToolTipsBD_SECTORES["English"]["sector_estandarizado"] = "";
	$placeHoldersBD_SECTORES["English"]["sector_estandarizado"] = "";
	$fieldLabelsBD_SECTORES["English"]["departamento"] = "Departamento";
	$fieldToolTipsBD_SECTORES["English"]["departamento"] = "";
	$placeHoldersBD_SECTORES["English"]["departamento"] = "";
	$fieldLabelsBD_SECTORES["English"]["municipio"] = "Municipio";
	$fieldToolTipsBD_SECTORES["English"]["municipio"] = "";
	$placeHoldersBD_SECTORES["English"]["municipio"] = "";
	$fieldLabelsBD_SECTORES["English"]["canton"] = "Canton";
	$fieldToolTipsBD_SECTORES["English"]["canton"] = "";
	$placeHoldersBD_SECTORES["English"]["canton"] = "";
	$fieldLabelsBD_SECTORES["English"]["area"] = "Area";
	$fieldToolTipsBD_SECTORES["English"]["area"] = "";
	$placeHoldersBD_SECTORES["English"]["area"] = "";
	$fieldLabelsBD_SECTORES["English"]["tipo"] = "Tipo";
	$fieldToolTipsBD_SECTORES["English"]["tipo"] = "";
	$placeHoldersBD_SECTORES["English"]["tipo"] = "";
	$fieldLabelsBD_SECTORES["English"]["nombre"] = "Nombre";
	$fieldToolTipsBD_SECTORES["English"]["nombre"] = "";
	$placeHoldersBD_SECTORES["English"]["nombre"] = "";
	$fieldLabelsBD_SECTORES["English"]["x"] = "X";
	$fieldToolTipsBD_SECTORES["English"]["x"] = "";
	$placeHoldersBD_SECTORES["English"]["x"] = "";
	$fieldLabelsBD_SECTORES["English"]["y"] = "Y";
	$fieldToolTipsBD_SECTORES["English"]["y"] = "";
	$placeHoldersBD_SECTORES["English"]["y"] = "";
	$fieldLabelsBD_SECTORES["English"]["f10"] = "F10";
	$fieldToolTipsBD_SECTORES["English"]["f10"] = "";
	$placeHoldersBD_SECTORES["English"]["f10"] = "";
	$fieldLabelsBD_SECTORES["English"]["f11"] = "F11";
	$fieldToolTipsBD_SECTORES["English"]["f11"] = "";
	$placeHoldersBD_SECTORES["English"]["f11"] = "";
	if (count($fieldToolTipsBD_SECTORES["English"]))
		$tdataBD_SECTORES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBD_SECTORES[""] = array();
	$fieldToolTipsBD_SECTORES[""] = array();
	$placeHoldersBD_SECTORES[""] = array();
	$pageTitlesBD_SECTORES[""] = array();
	if (count($fieldToolTipsBD_SECTORES[""]))
		$tdataBD_SECTORES[".isUseToolTips"] = true;
}


	$tdataBD_SECTORES[".NCSearch"] = true;



$tdataBD_SECTORES[".shortTableName"] = "BD_SECTORES";
$tdataBD_SECTORES[".nSecOptions"] = 0;
$tdataBD_SECTORES[".recsPerRowPrint"] = 1;
$tdataBD_SECTORES[".mainTableOwnerID"] = "";
$tdataBD_SECTORES[".moveNext"] = 1;
$tdataBD_SECTORES[".entityType"] = 1;

$tdataBD_SECTORES[".strOriginalTableName"] = "sectorppd1";

	



$tdataBD_SECTORES[".showAddInPopup"] = false;

$tdataBD_SECTORES[".showEditInPopup"] = false;

$tdataBD_SECTORES[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBD_SECTORES[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBD_SECTORES[".fieldsForRegister"] = array();

	$tdataBD_SECTORES[".listAjax"] = true;

	$tdataBD_SECTORES[".audit"] = false;

	$tdataBD_SECTORES[".locking"] = false;



$tdataBD_SECTORES[".list"] = true;



$tdataBD_SECTORES[".reorderRecordsByHeader"] = true;
$tdataBD_SECTORES[".createSortByDropdown"] = true;
$tdataBD_SECTORES[".strSortControlSettingsJSON"] = "";




$tdataBD_SECTORES[".import"] = true;

$tdataBD_SECTORES[".exportTo"] = true;

$tdataBD_SECTORES[".printFriendly"] = true;


$tdataBD_SECTORES[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataBD_SECTORES[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataBD_SECTORES[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataBD_SECTORES[".searchSaving"] = false;
//

$tdataBD_SECTORES[".showSearchPanel"] = true;
		$tdataBD_SECTORES[".flexibleSearch"] = true;

$tdataBD_SECTORES[".isUseAjaxSuggest"] = true;

$tdataBD_SECTORES[".rowHighlite"] = true;





$tdataBD_SECTORES[".ajaxCodeSnippetAdded"] = false;

$tdataBD_SECTORES[".buttonsAdded"] = false;

$tdataBD_SECTORES[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBD_SECTORES[".isUseTimeForSearch"] = false;



$tdataBD_SECTORES[".badgeColor"] = "3CB371";


$tdataBD_SECTORES[".allSearchFields"] = array();
$tdataBD_SECTORES[".filterFields"] = array();
$tdataBD_SECTORES[".requiredSearchFields"] = array();

$tdataBD_SECTORES[".allSearchFields"][] = "sector_estandarizado";
	$tdataBD_SECTORES[".allSearchFields"][] = "departamento";
	$tdataBD_SECTORES[".allSearchFields"][] = "municipio";
	$tdataBD_SECTORES[".allSearchFields"][] = "canton";
	$tdataBD_SECTORES[".allSearchFields"][] = "area";
	$tdataBD_SECTORES[".allSearchFields"][] = "tipo";
	$tdataBD_SECTORES[".allSearchFields"][] = "nombre";
	$tdataBD_SECTORES[".allSearchFields"][] = "x";
	$tdataBD_SECTORES[".allSearchFields"][] = "y";
	$tdataBD_SECTORES[".allSearchFields"][] = "f10";
	$tdataBD_SECTORES[".allSearchFields"][] = "f11";
	

$tdataBD_SECTORES[".googleLikeFields"] = array();
$tdataBD_SECTORES[".googleLikeFields"][] = "sector_estandarizado";
$tdataBD_SECTORES[".googleLikeFields"][] = "departamento";
$tdataBD_SECTORES[".googleLikeFields"][] = "municipio";
$tdataBD_SECTORES[".googleLikeFields"][] = "canton";
$tdataBD_SECTORES[".googleLikeFields"][] = "area";
$tdataBD_SECTORES[".googleLikeFields"][] = "tipo";
$tdataBD_SECTORES[".googleLikeFields"][] = "nombre";
$tdataBD_SECTORES[".googleLikeFields"][] = "x";
$tdataBD_SECTORES[".googleLikeFields"][] = "y";
$tdataBD_SECTORES[".googleLikeFields"][] = "f10";
$tdataBD_SECTORES[".googleLikeFields"][] = "f11";


$tdataBD_SECTORES[".advSearchFields"] = array();
$tdataBD_SECTORES[".advSearchFields"][] = "sector_estandarizado";
$tdataBD_SECTORES[".advSearchFields"][] = "departamento";
$tdataBD_SECTORES[".advSearchFields"][] = "municipio";
$tdataBD_SECTORES[".advSearchFields"][] = "canton";
$tdataBD_SECTORES[".advSearchFields"][] = "area";
$tdataBD_SECTORES[".advSearchFields"][] = "tipo";
$tdataBD_SECTORES[".advSearchFields"][] = "nombre";
$tdataBD_SECTORES[".advSearchFields"][] = "x";
$tdataBD_SECTORES[".advSearchFields"][] = "y";
$tdataBD_SECTORES[".advSearchFields"][] = "f10";
$tdataBD_SECTORES[".advSearchFields"][] = "f11";

$tdataBD_SECTORES[".tableType"] = "list";

$tdataBD_SECTORES[".printerPageOrientation"] = 0;
$tdataBD_SECTORES[".nPrinterPageScale"] = 100;

$tdataBD_SECTORES[".nPrinterSplitRecords"] = 40;

$tdataBD_SECTORES[".nPrinterPDFSplitRecords"] = 40;



$tdataBD_SECTORES[".geocodingEnabled"] = false;





$tdataBD_SECTORES[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataBD_SECTORES[".pageSize"] = 20;

$tdataBD_SECTORES[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBD_SECTORES[".strOrderBy"] = $tstrOrderBy;

$tdataBD_SECTORES[".orderindexes"] = array();

$tdataBD_SECTORES[".sqlHead"] = "SELECT sector_estandarizado,  	departamento,  	municipio,  	canton,  	area,  	tipo,  	nombre,  	x,  	y,  	f10,  	f11";
$tdataBD_SECTORES[".sqlFrom"] = "FROM sectorppd1";
$tdataBD_SECTORES[".sqlWhereExpr"] = "";
$tdataBD_SECTORES[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBD_SECTORES[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBD_SECTORES[".arrGroupsPerPage"] = $arrGPP;

$tdataBD_SECTORES[".highlightSearchResults"] = true;

$tableKeysBD_SECTORES = array();
$tdataBD_SECTORES[".Keys"] = $tableKeysBD_SECTORES;

$tdataBD_SECTORES[".listFields"] = array();
$tdataBD_SECTORES[".listFields"][] = "sector_estandarizado";
$tdataBD_SECTORES[".listFields"][] = "departamento";
$tdataBD_SECTORES[".listFields"][] = "municipio";
$tdataBD_SECTORES[".listFields"][] = "canton";
$tdataBD_SECTORES[".listFields"][] = "area";
$tdataBD_SECTORES[".listFields"][] = "tipo";
$tdataBD_SECTORES[".listFields"][] = "nombre";
$tdataBD_SECTORES[".listFields"][] = "x";
$tdataBD_SECTORES[".listFields"][] = "y";
$tdataBD_SECTORES[".listFields"][] = "f10";
$tdataBD_SECTORES[".listFields"][] = "f11";

$tdataBD_SECTORES[".hideMobileList"] = array();


$tdataBD_SECTORES[".viewFields"] = array();
$tdataBD_SECTORES[".viewFields"][] = "sector_estandarizado";
$tdataBD_SECTORES[".viewFields"][] = "departamento";
$tdataBD_SECTORES[".viewFields"][] = "municipio";
$tdataBD_SECTORES[".viewFields"][] = "canton";
$tdataBD_SECTORES[".viewFields"][] = "area";
$tdataBD_SECTORES[".viewFields"][] = "tipo";
$tdataBD_SECTORES[".viewFields"][] = "nombre";
$tdataBD_SECTORES[".viewFields"][] = "x";
$tdataBD_SECTORES[".viewFields"][] = "y";
$tdataBD_SECTORES[".viewFields"][] = "f10";
$tdataBD_SECTORES[".viewFields"][] = "f11";

$tdataBD_SECTORES[".addFields"] = array();
$tdataBD_SECTORES[".addFields"][] = "sector_estandarizado";
$tdataBD_SECTORES[".addFields"][] = "departamento";
$tdataBD_SECTORES[".addFields"][] = "municipio";
$tdataBD_SECTORES[".addFields"][] = "canton";
$tdataBD_SECTORES[".addFields"][] = "area";
$tdataBD_SECTORES[".addFields"][] = "tipo";
$tdataBD_SECTORES[".addFields"][] = "nombre";
$tdataBD_SECTORES[".addFields"][] = "x";
$tdataBD_SECTORES[".addFields"][] = "y";
$tdataBD_SECTORES[".addFields"][] = "f10";
$tdataBD_SECTORES[".addFields"][] = "f11";

$tdataBD_SECTORES[".masterListFields"] = array();
$tdataBD_SECTORES[".masterListFields"][] = "sector_estandarizado";
$tdataBD_SECTORES[".masterListFields"][] = "departamento";
$tdataBD_SECTORES[".masterListFields"][] = "municipio";
$tdataBD_SECTORES[".masterListFields"][] = "canton";
$tdataBD_SECTORES[".masterListFields"][] = "area";
$tdataBD_SECTORES[".masterListFields"][] = "tipo";
$tdataBD_SECTORES[".masterListFields"][] = "nombre";
$tdataBD_SECTORES[".masterListFields"][] = "x";
$tdataBD_SECTORES[".masterListFields"][] = "y";
$tdataBD_SECTORES[".masterListFields"][] = "f10";
$tdataBD_SECTORES[".masterListFields"][] = "f11";

$tdataBD_SECTORES[".inlineAddFields"] = array();
$tdataBD_SECTORES[".inlineAddFields"][] = "sector_estandarizado";
$tdataBD_SECTORES[".inlineAddFields"][] = "departamento";
$tdataBD_SECTORES[".inlineAddFields"][] = "municipio";
$tdataBD_SECTORES[".inlineAddFields"][] = "canton";
$tdataBD_SECTORES[".inlineAddFields"][] = "area";
$tdataBD_SECTORES[".inlineAddFields"][] = "tipo";
$tdataBD_SECTORES[".inlineAddFields"][] = "nombre";
$tdataBD_SECTORES[".inlineAddFields"][] = "x";
$tdataBD_SECTORES[".inlineAddFields"][] = "y";
$tdataBD_SECTORES[".inlineAddFields"][] = "f10";
$tdataBD_SECTORES[".inlineAddFields"][] = "f11";

$tdataBD_SECTORES[".editFields"] = array();
$tdataBD_SECTORES[".editFields"][] = "sector_estandarizado";
$tdataBD_SECTORES[".editFields"][] = "departamento";
$tdataBD_SECTORES[".editFields"][] = "municipio";
$tdataBD_SECTORES[".editFields"][] = "canton";
$tdataBD_SECTORES[".editFields"][] = "area";
$tdataBD_SECTORES[".editFields"][] = "tipo";
$tdataBD_SECTORES[".editFields"][] = "nombre";
$tdataBD_SECTORES[".editFields"][] = "x";
$tdataBD_SECTORES[".editFields"][] = "y";
$tdataBD_SECTORES[".editFields"][] = "f10";
$tdataBD_SECTORES[".editFields"][] = "f11";

$tdataBD_SECTORES[".inlineEditFields"] = array();
$tdataBD_SECTORES[".inlineEditFields"][] = "sector_estandarizado";
$tdataBD_SECTORES[".inlineEditFields"][] = "departamento";
$tdataBD_SECTORES[".inlineEditFields"][] = "municipio";
$tdataBD_SECTORES[".inlineEditFields"][] = "canton";
$tdataBD_SECTORES[".inlineEditFields"][] = "area";
$tdataBD_SECTORES[".inlineEditFields"][] = "tipo";
$tdataBD_SECTORES[".inlineEditFields"][] = "nombre";
$tdataBD_SECTORES[".inlineEditFields"][] = "x";
$tdataBD_SECTORES[".inlineEditFields"][] = "y";
$tdataBD_SECTORES[".inlineEditFields"][] = "f10";
$tdataBD_SECTORES[".inlineEditFields"][] = "f11";

$tdataBD_SECTORES[".updateSelectedFields"] = array();
$tdataBD_SECTORES[".updateSelectedFields"][] = "sector_estandarizado";
$tdataBD_SECTORES[".updateSelectedFields"][] = "departamento";
$tdataBD_SECTORES[".updateSelectedFields"][] = "municipio";
$tdataBD_SECTORES[".updateSelectedFields"][] = "canton";
$tdataBD_SECTORES[".updateSelectedFields"][] = "area";
$tdataBD_SECTORES[".updateSelectedFields"][] = "tipo";
$tdataBD_SECTORES[".updateSelectedFields"][] = "nombre";
$tdataBD_SECTORES[".updateSelectedFields"][] = "x";
$tdataBD_SECTORES[".updateSelectedFields"][] = "y";
$tdataBD_SECTORES[".updateSelectedFields"][] = "f10";
$tdataBD_SECTORES[".updateSelectedFields"][] = "f11";


$tdataBD_SECTORES[".exportFields"] = array();
$tdataBD_SECTORES[".exportFields"][] = "sector_estandarizado";
$tdataBD_SECTORES[".exportFields"][] = "departamento";
$tdataBD_SECTORES[".exportFields"][] = "municipio";
$tdataBD_SECTORES[".exportFields"][] = "canton";
$tdataBD_SECTORES[".exportFields"][] = "area";
$tdataBD_SECTORES[".exportFields"][] = "tipo";
$tdataBD_SECTORES[".exportFields"][] = "nombre";
$tdataBD_SECTORES[".exportFields"][] = "x";
$tdataBD_SECTORES[".exportFields"][] = "y";
$tdataBD_SECTORES[".exportFields"][] = "f10";
$tdataBD_SECTORES[".exportFields"][] = "f11";

$tdataBD_SECTORES[".importFields"] = array();
$tdataBD_SECTORES[".importFields"][] = "sector_estandarizado";
$tdataBD_SECTORES[".importFields"][] = "departamento";
$tdataBD_SECTORES[".importFields"][] = "municipio";
$tdataBD_SECTORES[".importFields"][] = "canton";
$tdataBD_SECTORES[".importFields"][] = "area";
$tdataBD_SECTORES[".importFields"][] = "tipo";
$tdataBD_SECTORES[".importFields"][] = "nombre";
$tdataBD_SECTORES[".importFields"][] = "x";
$tdataBD_SECTORES[".importFields"][] = "y";
$tdataBD_SECTORES[".importFields"][] = "f10";
$tdataBD_SECTORES[".importFields"][] = "f11";

$tdataBD_SECTORES[".printFields"] = array();
$tdataBD_SECTORES[".printFields"][] = "sector_estandarizado";
$tdataBD_SECTORES[".printFields"][] = "departamento";
$tdataBD_SECTORES[".printFields"][] = "municipio";
$tdataBD_SECTORES[".printFields"][] = "canton";
$tdataBD_SECTORES[".printFields"][] = "area";
$tdataBD_SECTORES[".printFields"][] = "tipo";
$tdataBD_SECTORES[".printFields"][] = "nombre";
$tdataBD_SECTORES[".printFields"][] = "x";
$tdataBD_SECTORES[".printFields"][] = "y";
$tdataBD_SECTORES[".printFields"][] = "f10";
$tdataBD_SECTORES[".printFields"][] = "f11";

//	sector_estandarizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sector_estandarizado";
	$fdata["GoodName"] = "sector_estandarizado";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("BD_SECTORES","sector_estandarizado");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBD_SECTORES["sector_estandarizado"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("BD_SECTORES","departamento");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBD_SECTORES["departamento"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("BD_SECTORES","municipio");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBD_SECTORES["municipio"] = $fdata;
//	canton
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "canton";
	$fdata["GoodName"] = "canton";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("BD_SECTORES","canton");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBD_SECTORES["canton"] = $fdata;
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("BD_SECTORES","area");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBD_SECTORES["area"] = $fdata;
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("BD_SECTORES","tipo");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBD_SECTORES["tipo"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("BD_SECTORES","nombre");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBD_SECTORES["nombre"] = $fdata;
//	x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "x";
	$fdata["GoodName"] = "x";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("BD_SECTORES","x");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBD_SECTORES["x"] = $fdata;
//	y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "y";
	$fdata["GoodName"] = "y";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("BD_SECTORES","y");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBD_SECTORES["y"] = $fdata;
//	f10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "f10";
	$fdata["GoodName"] = "f10";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("BD_SECTORES","f10");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBD_SECTORES["f10"] = $fdata;
//	f11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "f11";
	$fdata["GoodName"] = "f11";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("BD_SECTORES","f11");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBD_SECTORES["f11"] = $fdata;


$tables_data["BD SECTORES"]=&$tdataBD_SECTORES;
$field_labels["BD_SECTORES"] = &$fieldLabelsBD_SECTORES;
$fieldToolTips["BD_SECTORES"] = &$fieldToolTipsBD_SECTORES;
$placeHolders["BD_SECTORES"] = &$placeHoldersBD_SECTORES;
$page_titles["BD_SECTORES"] = &$pageTitlesBD_SECTORES;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BD SECTORES"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["BD SECTORES"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BD_SECTORES()
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
	"m_srcTableName" => "BD SECTORES"
));

$proto6["m_sql"] = "sector_estandarizado";
$proto6["m_srcTableName"] = "BD SECTORES";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "BD SECTORES"
));

$proto8["m_sql"] = "departamento";
$proto8["m_srcTableName"] = "BD SECTORES";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "BD SECTORES"
));

$proto10["m_sql"] = "municipio";
$proto10["m_srcTableName"] = "BD SECTORES";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "canton",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "BD SECTORES"
));

$proto12["m_sql"] = "canton";
$proto12["m_srcTableName"] = "BD SECTORES";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "BD SECTORES"
));

$proto14["m_sql"] = "area";
$proto14["m_srcTableName"] = "BD SECTORES";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "BD SECTORES"
));

$proto16["m_sql"] = "tipo";
$proto16["m_srcTableName"] = "BD SECTORES";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "BD SECTORES"
));

$proto18["m_sql"] = "nombre";
$proto18["m_srcTableName"] = "BD SECTORES";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "x",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "BD SECTORES"
));

$proto20["m_sql"] = "x";
$proto20["m_srcTableName"] = "BD SECTORES";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "y",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "BD SECTORES"
));

$proto22["m_sql"] = "y";
$proto22["m_srcTableName"] = "BD SECTORES";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "f10",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "BD SECTORES"
));

$proto24["m_sql"] = "f10";
$proto24["m_srcTableName"] = "BD SECTORES";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "f11",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "BD SECTORES"
));

$proto26["m_sql"] = "f11";
$proto26["m_srcTableName"] = "BD SECTORES";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "sectorppd1";
$proto29["m_srcTableName"] = "BD SECTORES";
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
$proto28["m_srcTableName"] = "BD SECTORES";
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
$proto0["m_srcTableName"]="BD SECTORES";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BD_SECTORES = createSqlQuery_BD_SECTORES();


	
		;

											

$tdataBD_SECTORES[".sqlquery"] = $queryData_BD_SECTORES;

$tableEvents["BD SECTORES"] = new eventsBase;
$tdataBD_SECTORES[".hasEvents"] = false;

?>