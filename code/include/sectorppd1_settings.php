<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasectorppd1 = array();
	$tdatasectorppd1[".truncateText"] = true;
	$tdatasectorppd1[".NumberOfChars"] = 80;
	$tdatasectorppd1[".ShortName"] = "sectorppd1";
	$tdatasectorppd1[".OwnerID"] = "";
	$tdatasectorppd1[".OriginalTable"] = "sectorppd1";

//	field labels
$fieldLabelssectorppd1 = array();
$fieldToolTipssectorppd1 = array();
$pageTitlessectorppd1 = array();
$placeHolderssectorppd1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssectorppd1["Spanish"] = array();
	$fieldToolTipssectorppd1["Spanish"] = array();
	$placeHolderssectorppd1["Spanish"] = array();
	$pageTitlessectorppd1["Spanish"] = array();
	$fieldLabelssectorppd1["Spanish"]["sector_estandarizado"] = "Sector Estandarizado";
	$fieldToolTipssectorppd1["Spanish"]["sector_estandarizado"] = "";
	$placeHolderssectorppd1["Spanish"]["sector_estandarizado"] = "";
	$fieldLabelssectorppd1["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipssectorppd1["Spanish"]["departamento"] = "";
	$placeHolderssectorppd1["Spanish"]["departamento"] = "";
	$fieldLabelssectorppd1["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipssectorppd1["Spanish"]["municipio"] = "";
	$placeHolderssectorppd1["Spanish"]["municipio"] = "";
	$fieldLabelssectorppd1["Spanish"]["canton"] = "Canton";
	$fieldToolTipssectorppd1["Spanish"]["canton"] = "";
	$placeHolderssectorppd1["Spanish"]["canton"] = "";
	$fieldLabelssectorppd1["Spanish"]["area"] = "Area";
	$fieldToolTipssectorppd1["Spanish"]["area"] = "";
	$placeHolderssectorppd1["Spanish"]["area"] = "";
	$fieldLabelssectorppd1["Spanish"]["tipo"] = "Tipo";
	$fieldToolTipssectorppd1["Spanish"]["tipo"] = "";
	$placeHolderssectorppd1["Spanish"]["tipo"] = "";
	$fieldLabelssectorppd1["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipssectorppd1["Spanish"]["nombre"] = "";
	$placeHolderssectorppd1["Spanish"]["nombre"] = "";
	$fieldLabelssectorppd1["Spanish"]["x"] = "X";
	$fieldToolTipssectorppd1["Spanish"]["x"] = "";
	$placeHolderssectorppd1["Spanish"]["x"] = "";
	$fieldLabelssectorppd1["Spanish"]["y"] = "Y";
	$fieldToolTipssectorppd1["Spanish"]["y"] = "";
	$placeHolderssectorppd1["Spanish"]["y"] = "";
	$fieldLabelssectorppd1["Spanish"]["f10"] = "F10";
	$fieldToolTipssectorppd1["Spanish"]["f10"] = "";
	$placeHolderssectorppd1["Spanish"]["f10"] = "";
	$fieldLabelssectorppd1["Spanish"]["f11"] = "F11";
	$fieldToolTipssectorppd1["Spanish"]["f11"] = "";
	$placeHolderssectorppd1["Spanish"]["f11"] = "";
	if (count($fieldToolTipssectorppd1["Spanish"]))
		$tdatasectorppd1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssectorppd1["English"] = array();
	$fieldToolTipssectorppd1["English"] = array();
	$placeHolderssectorppd1["English"] = array();
	$pageTitlessectorppd1["English"] = array();
	$fieldLabelssectorppd1["English"]["sector_estandarizado"] = "Sector Estandarizado";
	$fieldToolTipssectorppd1["English"]["sector_estandarizado"] = "";
	$placeHolderssectorppd1["English"]["sector_estandarizado"] = "";
	$fieldLabelssectorppd1["English"]["departamento"] = "Departamento";
	$fieldToolTipssectorppd1["English"]["departamento"] = "";
	$placeHolderssectorppd1["English"]["departamento"] = "";
	$fieldLabelssectorppd1["English"]["municipio"] = "Municipio";
	$fieldToolTipssectorppd1["English"]["municipio"] = "";
	$placeHolderssectorppd1["English"]["municipio"] = "";
	$fieldLabelssectorppd1["English"]["canton"] = "Canton";
	$fieldToolTipssectorppd1["English"]["canton"] = "";
	$placeHolderssectorppd1["English"]["canton"] = "";
	$fieldLabelssectorppd1["English"]["area"] = "Area";
	$fieldToolTipssectorppd1["English"]["area"] = "";
	$placeHolderssectorppd1["English"]["area"] = "";
	$fieldLabelssectorppd1["English"]["tipo"] = "Tipo";
	$fieldToolTipssectorppd1["English"]["tipo"] = "";
	$placeHolderssectorppd1["English"]["tipo"] = "";
	$fieldLabelssectorppd1["English"]["nombre"] = "Nombre";
	$fieldToolTipssectorppd1["English"]["nombre"] = "";
	$placeHolderssectorppd1["English"]["nombre"] = "";
	$fieldLabelssectorppd1["English"]["x"] = "X";
	$fieldToolTipssectorppd1["English"]["x"] = "";
	$placeHolderssectorppd1["English"]["x"] = "";
	$fieldLabelssectorppd1["English"]["y"] = "Y";
	$fieldToolTipssectorppd1["English"]["y"] = "";
	$placeHolderssectorppd1["English"]["y"] = "";
	$fieldLabelssectorppd1["English"]["f10"] = "F10";
	$fieldToolTipssectorppd1["English"]["f10"] = "";
	$placeHolderssectorppd1["English"]["f10"] = "";
	$fieldLabelssectorppd1["English"]["f11"] = "F11";
	$fieldToolTipssectorppd1["English"]["f11"] = "";
	$placeHolderssectorppd1["English"]["f11"] = "";
	if (count($fieldToolTipssectorppd1["English"]))
		$tdatasectorppd1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssectorppd1[""] = array();
	$fieldToolTipssectorppd1[""] = array();
	$placeHolderssectorppd1[""] = array();
	$pageTitlessectorppd1[""] = array();
	if (count($fieldToolTipssectorppd1[""]))
		$tdatasectorppd1[".isUseToolTips"] = true;
}


	$tdatasectorppd1[".NCSearch"] = true;



$tdatasectorppd1[".shortTableName"] = "sectorppd1";
$tdatasectorppd1[".nSecOptions"] = 0;
$tdatasectorppd1[".recsPerRowPrint"] = 1;
$tdatasectorppd1[".mainTableOwnerID"] = "";
$tdatasectorppd1[".moveNext"] = 1;
$tdatasectorppd1[".entityType"] = 0;

$tdatasectorppd1[".strOriginalTableName"] = "sectorppd1";

	



$tdatasectorppd1[".showAddInPopup"] = false;

$tdatasectorppd1[".showEditInPopup"] = false;

$tdatasectorppd1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasectorppd1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasectorppd1[".fieldsForRegister"] = array();

	$tdatasectorppd1[".listAjax"] = true;

	$tdatasectorppd1[".audit"] = false;

	$tdatasectorppd1[".locking"] = false;



$tdatasectorppd1[".list"] = true;



$tdatasectorppd1[".reorderRecordsByHeader"] = true;
$tdatasectorppd1[".createSortByDropdown"] = true;
$tdatasectorppd1[".strSortControlSettingsJSON"] = "";




$tdatasectorppd1[".import"] = true;

$tdatasectorppd1[".exportTo"] = true;

$tdatasectorppd1[".printFriendly"] = true;


$tdatasectorppd1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasectorppd1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasectorppd1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasectorppd1[".searchSaving"] = false;
//

$tdatasectorppd1[".showSearchPanel"] = true;
		$tdatasectorppd1[".flexibleSearch"] = true;

$tdatasectorppd1[".isUseAjaxSuggest"] = true;

$tdatasectorppd1[".rowHighlite"] = true;





$tdatasectorppd1[".ajaxCodeSnippetAdded"] = false;

$tdatasectorppd1[".buttonsAdded"] = false;

$tdatasectorppd1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasectorppd1[".isUseTimeForSearch"] = false;





$tdatasectorppd1[".allSearchFields"] = array();
$tdatasectorppd1[".filterFields"] = array();
$tdatasectorppd1[".requiredSearchFields"] = array();

$tdatasectorppd1[".allSearchFields"][] = "sector_estandarizado";
	$tdatasectorppd1[".allSearchFields"][] = "departamento";
	$tdatasectorppd1[".allSearchFields"][] = "municipio";
	$tdatasectorppd1[".allSearchFields"][] = "canton";
	$tdatasectorppd1[".allSearchFields"][] = "area";
	$tdatasectorppd1[".allSearchFields"][] = "tipo";
	$tdatasectorppd1[".allSearchFields"][] = "nombre";
	$tdatasectorppd1[".allSearchFields"][] = "x";
	$tdatasectorppd1[".allSearchFields"][] = "y";
	$tdatasectorppd1[".allSearchFields"][] = "f10";
	$tdatasectorppd1[".allSearchFields"][] = "f11";
	

$tdatasectorppd1[".googleLikeFields"] = array();
$tdatasectorppd1[".googleLikeFields"][] = "sector_estandarizado";
$tdatasectorppd1[".googleLikeFields"][] = "departamento";
$tdatasectorppd1[".googleLikeFields"][] = "municipio";
$tdatasectorppd1[".googleLikeFields"][] = "canton";
$tdatasectorppd1[".googleLikeFields"][] = "area";
$tdatasectorppd1[".googleLikeFields"][] = "tipo";
$tdatasectorppd1[".googleLikeFields"][] = "nombre";
$tdatasectorppd1[".googleLikeFields"][] = "x";
$tdatasectorppd1[".googleLikeFields"][] = "y";
$tdatasectorppd1[".googleLikeFields"][] = "f10";
$tdatasectorppd1[".googleLikeFields"][] = "f11";


$tdatasectorppd1[".advSearchFields"] = array();
$tdatasectorppd1[".advSearchFields"][] = "sector_estandarizado";
$tdatasectorppd1[".advSearchFields"][] = "departamento";
$tdatasectorppd1[".advSearchFields"][] = "municipio";
$tdatasectorppd1[".advSearchFields"][] = "canton";
$tdatasectorppd1[".advSearchFields"][] = "area";
$tdatasectorppd1[".advSearchFields"][] = "tipo";
$tdatasectorppd1[".advSearchFields"][] = "nombre";
$tdatasectorppd1[".advSearchFields"][] = "x";
$tdatasectorppd1[".advSearchFields"][] = "y";
$tdatasectorppd1[".advSearchFields"][] = "f10";
$tdatasectorppd1[".advSearchFields"][] = "f11";

$tdatasectorppd1[".tableType"] = "list";

$tdatasectorppd1[".printerPageOrientation"] = 0;
$tdatasectorppd1[".nPrinterPageScale"] = 100;

$tdatasectorppd1[".nPrinterSplitRecords"] = 40;

$tdatasectorppd1[".nPrinterPDFSplitRecords"] = 40;



$tdatasectorppd1[".geocodingEnabled"] = false;





$tdatasectorppd1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatasectorppd1[".pageSize"] = 20;

$tdatasectorppd1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasectorppd1[".strOrderBy"] = $tstrOrderBy;

$tdatasectorppd1[".orderindexes"] = array();

$tdatasectorppd1[".sqlHead"] = "SELECT sector_estandarizado,  	departamento,  	municipio,  	canton,  	area,  	tipo,  	nombre,  	x,  	y,  	f10,  	f11";
$tdatasectorppd1[".sqlFrom"] = "FROM sectorppd1";
$tdatasectorppd1[".sqlWhereExpr"] = "";
$tdatasectorppd1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasectorppd1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasectorppd1[".arrGroupsPerPage"] = $arrGPP;

$tdatasectorppd1[".highlightSearchResults"] = true;

$tableKeyssectorppd1 = array();
$tdatasectorppd1[".Keys"] = $tableKeyssectorppd1;

$tdatasectorppd1[".listFields"] = array();
$tdatasectorppd1[".listFields"][] = "sector_estandarizado";
$tdatasectorppd1[".listFields"][] = "departamento";
$tdatasectorppd1[".listFields"][] = "municipio";
$tdatasectorppd1[".listFields"][] = "canton";
$tdatasectorppd1[".listFields"][] = "area";
$tdatasectorppd1[".listFields"][] = "tipo";
$tdatasectorppd1[".listFields"][] = "nombre";
$tdatasectorppd1[".listFields"][] = "x";
$tdatasectorppd1[".listFields"][] = "y";
$tdatasectorppd1[".listFields"][] = "f10";
$tdatasectorppd1[".listFields"][] = "f11";

$tdatasectorppd1[".hideMobileList"] = array();


$tdatasectorppd1[".viewFields"] = array();
$tdatasectorppd1[".viewFields"][] = "sector_estandarizado";
$tdatasectorppd1[".viewFields"][] = "departamento";
$tdatasectorppd1[".viewFields"][] = "municipio";
$tdatasectorppd1[".viewFields"][] = "canton";
$tdatasectorppd1[".viewFields"][] = "area";
$tdatasectorppd1[".viewFields"][] = "tipo";
$tdatasectorppd1[".viewFields"][] = "nombre";
$tdatasectorppd1[".viewFields"][] = "x";
$tdatasectorppd1[".viewFields"][] = "y";
$tdatasectorppd1[".viewFields"][] = "f10";
$tdatasectorppd1[".viewFields"][] = "f11";

$tdatasectorppd1[".addFields"] = array();
$tdatasectorppd1[".addFields"][] = "sector_estandarizado";
$tdatasectorppd1[".addFields"][] = "departamento";
$tdatasectorppd1[".addFields"][] = "municipio";
$tdatasectorppd1[".addFields"][] = "canton";
$tdatasectorppd1[".addFields"][] = "area";
$tdatasectorppd1[".addFields"][] = "tipo";
$tdatasectorppd1[".addFields"][] = "nombre";
$tdatasectorppd1[".addFields"][] = "x";
$tdatasectorppd1[".addFields"][] = "y";
$tdatasectorppd1[".addFields"][] = "f10";
$tdatasectorppd1[".addFields"][] = "f11";

$tdatasectorppd1[".masterListFields"] = array();
$tdatasectorppd1[".masterListFields"][] = "sector_estandarizado";
$tdatasectorppd1[".masterListFields"][] = "departamento";
$tdatasectorppd1[".masterListFields"][] = "municipio";
$tdatasectorppd1[".masterListFields"][] = "canton";
$tdatasectorppd1[".masterListFields"][] = "area";
$tdatasectorppd1[".masterListFields"][] = "tipo";
$tdatasectorppd1[".masterListFields"][] = "nombre";
$tdatasectorppd1[".masterListFields"][] = "x";
$tdatasectorppd1[".masterListFields"][] = "y";
$tdatasectorppd1[".masterListFields"][] = "f10";
$tdatasectorppd1[".masterListFields"][] = "f11";

$tdatasectorppd1[".inlineAddFields"] = array();
$tdatasectorppd1[".inlineAddFields"][] = "sector_estandarizado";
$tdatasectorppd1[".inlineAddFields"][] = "departamento";
$tdatasectorppd1[".inlineAddFields"][] = "municipio";
$tdatasectorppd1[".inlineAddFields"][] = "canton";
$tdatasectorppd1[".inlineAddFields"][] = "area";
$tdatasectorppd1[".inlineAddFields"][] = "tipo";
$tdatasectorppd1[".inlineAddFields"][] = "nombre";
$tdatasectorppd1[".inlineAddFields"][] = "x";
$tdatasectorppd1[".inlineAddFields"][] = "y";
$tdatasectorppd1[".inlineAddFields"][] = "f10";
$tdatasectorppd1[".inlineAddFields"][] = "f11";

$tdatasectorppd1[".editFields"] = array();
$tdatasectorppd1[".editFields"][] = "sector_estandarizado";
$tdatasectorppd1[".editFields"][] = "departamento";
$tdatasectorppd1[".editFields"][] = "municipio";
$tdatasectorppd1[".editFields"][] = "canton";
$tdatasectorppd1[".editFields"][] = "area";
$tdatasectorppd1[".editFields"][] = "tipo";
$tdatasectorppd1[".editFields"][] = "nombre";
$tdatasectorppd1[".editFields"][] = "x";
$tdatasectorppd1[".editFields"][] = "y";
$tdatasectorppd1[".editFields"][] = "f10";
$tdatasectorppd1[".editFields"][] = "f11";

$tdatasectorppd1[".inlineEditFields"] = array();
$tdatasectorppd1[".inlineEditFields"][] = "sector_estandarizado";
$tdatasectorppd1[".inlineEditFields"][] = "departamento";
$tdatasectorppd1[".inlineEditFields"][] = "municipio";
$tdatasectorppd1[".inlineEditFields"][] = "canton";
$tdatasectorppd1[".inlineEditFields"][] = "area";
$tdatasectorppd1[".inlineEditFields"][] = "tipo";
$tdatasectorppd1[".inlineEditFields"][] = "nombre";
$tdatasectorppd1[".inlineEditFields"][] = "x";
$tdatasectorppd1[".inlineEditFields"][] = "y";
$tdatasectorppd1[".inlineEditFields"][] = "f10";
$tdatasectorppd1[".inlineEditFields"][] = "f11";

$tdatasectorppd1[".updateSelectedFields"] = array();
$tdatasectorppd1[".updateSelectedFields"][] = "sector_estandarizado";
$tdatasectorppd1[".updateSelectedFields"][] = "departamento";
$tdatasectorppd1[".updateSelectedFields"][] = "municipio";
$tdatasectorppd1[".updateSelectedFields"][] = "canton";
$tdatasectorppd1[".updateSelectedFields"][] = "area";
$tdatasectorppd1[".updateSelectedFields"][] = "tipo";
$tdatasectorppd1[".updateSelectedFields"][] = "nombre";
$tdatasectorppd1[".updateSelectedFields"][] = "x";
$tdatasectorppd1[".updateSelectedFields"][] = "y";
$tdatasectorppd1[".updateSelectedFields"][] = "f10";
$tdatasectorppd1[".updateSelectedFields"][] = "f11";


$tdatasectorppd1[".exportFields"] = array();
$tdatasectorppd1[".exportFields"][] = "sector_estandarizado";
$tdatasectorppd1[".exportFields"][] = "departamento";
$tdatasectorppd1[".exportFields"][] = "municipio";
$tdatasectorppd1[".exportFields"][] = "canton";
$tdatasectorppd1[".exportFields"][] = "area";
$tdatasectorppd1[".exportFields"][] = "tipo";
$tdatasectorppd1[".exportFields"][] = "nombre";
$tdatasectorppd1[".exportFields"][] = "x";
$tdatasectorppd1[".exportFields"][] = "y";
$tdatasectorppd1[".exportFields"][] = "f10";
$tdatasectorppd1[".exportFields"][] = "f11";

$tdatasectorppd1[".importFields"] = array();
$tdatasectorppd1[".importFields"][] = "sector_estandarizado";
$tdatasectorppd1[".importFields"][] = "departamento";
$tdatasectorppd1[".importFields"][] = "municipio";
$tdatasectorppd1[".importFields"][] = "canton";
$tdatasectorppd1[".importFields"][] = "area";
$tdatasectorppd1[".importFields"][] = "tipo";
$tdatasectorppd1[".importFields"][] = "nombre";
$tdatasectorppd1[".importFields"][] = "x";
$tdatasectorppd1[".importFields"][] = "y";
$tdatasectorppd1[".importFields"][] = "f10";
$tdatasectorppd1[".importFields"][] = "f11";

$tdatasectorppd1[".printFields"] = array();
$tdatasectorppd1[".printFields"][] = "sector_estandarizado";
$tdatasectorppd1[".printFields"][] = "departamento";
$tdatasectorppd1[".printFields"][] = "municipio";
$tdatasectorppd1[".printFields"][] = "canton";
$tdatasectorppd1[".printFields"][] = "area";
$tdatasectorppd1[".printFields"][] = "tipo";
$tdatasectorppd1[".printFields"][] = "nombre";
$tdatasectorppd1[".printFields"][] = "x";
$tdatasectorppd1[".printFields"][] = "y";
$tdatasectorppd1[".printFields"][] = "f10";
$tdatasectorppd1[".printFields"][] = "f11";

//	sector_estandarizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sector_estandarizado";
	$fdata["GoodName"] = "sector_estandarizado";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1","sector_estandarizado");
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




	$tdatasectorppd1["sector_estandarizado"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1","departamento");
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




	$tdatasectorppd1["departamento"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1","municipio");
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




	$tdatasectorppd1["municipio"] = $fdata;
//	canton
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "canton";
	$fdata["GoodName"] = "canton";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1","canton");
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




	$tdatasectorppd1["canton"] = $fdata;
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1","area");
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




	$tdatasectorppd1["area"] = $fdata;
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1","tipo");
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




	$tdatasectorppd1["tipo"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1","nombre");
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




	$tdatasectorppd1["nombre"] = $fdata;
//	x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "x";
	$fdata["GoodName"] = "x";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1","x");
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




	$tdatasectorppd1["x"] = $fdata;
//	y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "y";
	$fdata["GoodName"] = "y";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1","y");
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




	$tdatasectorppd1["y"] = $fdata;
//	f10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "f10";
	$fdata["GoodName"] = "f10";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1","f10");
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




	$tdatasectorppd1["f10"] = $fdata;
//	f11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "f11";
	$fdata["GoodName"] = "f11";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1","f11");
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




	$tdatasectorppd1["f11"] = $fdata;


$tables_data["sectorppd1"]=&$tdatasectorppd1;
$field_labels["sectorppd1"] = &$fieldLabelssectorppd1;
$fieldToolTips["sectorppd1"] = &$fieldToolTipssectorppd1;
$placeHolders["sectorppd1"] = &$placeHolderssectorppd1;
$page_titles["sectorppd1"] = &$pageTitlessectorppd1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sectorppd1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["sectorppd1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_sectorppd1()
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
	"m_srcTableName" => "sectorppd1"
));

$proto6["m_sql"] = "sector_estandarizado";
$proto6["m_srcTableName"] = "sectorppd1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1"
));

$proto8["m_sql"] = "departamento";
$proto8["m_srcTableName"] = "sectorppd1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1"
));

$proto10["m_sql"] = "municipio";
$proto10["m_srcTableName"] = "sectorppd1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "canton",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1"
));

$proto12["m_sql"] = "canton";
$proto12["m_srcTableName"] = "sectorppd1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1"
));

$proto14["m_sql"] = "area";
$proto14["m_srcTableName"] = "sectorppd1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1"
));

$proto16["m_sql"] = "tipo";
$proto16["m_srcTableName"] = "sectorppd1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1"
));

$proto18["m_sql"] = "nombre";
$proto18["m_srcTableName"] = "sectorppd1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "x",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1"
));

$proto20["m_sql"] = "x";
$proto20["m_srcTableName"] = "sectorppd1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "y",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1"
));

$proto22["m_sql"] = "y";
$proto22["m_srcTableName"] = "sectorppd1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "f10",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1"
));

$proto24["m_sql"] = "f10";
$proto24["m_srcTableName"] = "sectorppd1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "f11",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1"
));

$proto26["m_sql"] = "f11";
$proto26["m_srcTableName"] = "sectorppd1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "sectorppd1";
$proto29["m_srcTableName"] = "sectorppd1";
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
$proto28["m_srcTableName"] = "sectorppd1";
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
$proto0["m_srcTableName"]="sectorppd1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sectorppd1 = createSqlQuery_sectorppd1();


	
		;

											

$tdatasectorppd1[".sqlquery"] = $queryData_sectorppd1;

$tableEvents["sectorppd1"] = new eventsBase;
$tdatasectorppd1[".hasEvents"] = false;

?>