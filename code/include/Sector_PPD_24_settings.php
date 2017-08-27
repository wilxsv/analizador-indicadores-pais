<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSector_PPD_24 = array();
	$tdataSector_PPD_24[".truncateText"] = true;
	$tdataSector_PPD_24[".NumberOfChars"] = 80;
	$tdataSector_PPD_24[".ShortName"] = "Sector_PPD_24";
	$tdataSector_PPD_24[".OwnerID"] = "";
	$tdataSector_PPD_24[".OriginalTable"] = "sectorppd1";

//	field labels
$fieldLabelsSector_PPD_24 = array();
$fieldToolTipsSector_PPD_24 = array();
$pageTitlesSector_PPD_24 = array();
$placeHoldersSector_PPD_24 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsSector_PPD_24["Spanish"] = array();
	$fieldToolTipsSector_PPD_24["Spanish"] = array();
	$placeHoldersSector_PPD_24["Spanish"] = array();
	$pageTitlesSector_PPD_24["Spanish"] = array();
	$fieldLabelsSector_PPD_24["Spanish"]["sector_estandarizado"] = "Sector Estandarizado";
	$fieldToolTipsSector_PPD_24["Spanish"]["sector_estandarizado"] = "";
	$placeHoldersSector_PPD_24["Spanish"]["sector_estandarizado"] = "";
	$fieldLabelsSector_PPD_24["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsSector_PPD_24["Spanish"]["departamento"] = "";
	$placeHoldersSector_PPD_24["Spanish"]["departamento"] = "";
	$fieldLabelsSector_PPD_24["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsSector_PPD_24["Spanish"]["municipio"] = "";
	$placeHoldersSector_PPD_24["Spanish"]["municipio"] = "";
	$fieldLabelsSector_PPD_24["Spanish"]["canton"] = "Canton";
	$fieldToolTipsSector_PPD_24["Spanish"]["canton"] = "";
	$placeHoldersSector_PPD_24["Spanish"]["canton"] = "";
	$fieldLabelsSector_PPD_24["Spanish"]["area"] = "Area";
	$fieldToolTipsSector_PPD_24["Spanish"]["area"] = "";
	$placeHoldersSector_PPD_24["Spanish"]["area"] = "";
	$fieldLabelsSector_PPD_24["Spanish"]["tipo"] = "Tipo";
	$fieldToolTipsSector_PPD_24["Spanish"]["tipo"] = "";
	$placeHoldersSector_PPD_24["Spanish"]["tipo"] = "";
	$fieldLabelsSector_PPD_24["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsSector_PPD_24["Spanish"]["nombre"] = "";
	$placeHoldersSector_PPD_24["Spanish"]["nombre"] = "";
	$fieldLabelsSector_PPD_24["Spanish"]["x"] = "X";
	$fieldToolTipsSector_PPD_24["Spanish"]["x"] = "";
	$placeHoldersSector_PPD_24["Spanish"]["x"] = "";
	$fieldLabelsSector_PPD_24["Spanish"]["y"] = "Y";
	$fieldToolTipsSector_PPD_24["Spanish"]["y"] = "";
	$placeHoldersSector_PPD_24["Spanish"]["y"] = "";
	$fieldLabelsSector_PPD_24["Spanish"]["f10"] = "F10";
	$fieldToolTipsSector_PPD_24["Spanish"]["f10"] = "";
	$placeHoldersSector_PPD_24["Spanish"]["f10"] = "";
	$fieldLabelsSector_PPD_24["Spanish"]["f11"] = "F11";
	$fieldToolTipsSector_PPD_24["Spanish"]["f11"] = "";
	$placeHoldersSector_PPD_24["Spanish"]["f11"] = "";
	if (count($fieldToolTipsSector_PPD_24["Spanish"]))
		$tdataSector_PPD_24[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSector_PPD_24["English"] = array();
	$fieldToolTipsSector_PPD_24["English"] = array();
	$placeHoldersSector_PPD_24["English"] = array();
	$pageTitlesSector_PPD_24["English"] = array();
	$fieldLabelsSector_PPD_24["English"]["sector_estandarizado"] = "Sector Estandarizado";
	$fieldToolTipsSector_PPD_24["English"]["sector_estandarizado"] = "";
	$placeHoldersSector_PPD_24["English"]["sector_estandarizado"] = "";
	$fieldLabelsSector_PPD_24["English"]["departamento"] = "Departamento";
	$fieldToolTipsSector_PPD_24["English"]["departamento"] = "";
	$placeHoldersSector_PPD_24["English"]["departamento"] = "";
	$fieldLabelsSector_PPD_24["English"]["municipio"] = "Municipio";
	$fieldToolTipsSector_PPD_24["English"]["municipio"] = "";
	$placeHoldersSector_PPD_24["English"]["municipio"] = "";
	$fieldLabelsSector_PPD_24["English"]["canton"] = "Canton";
	$fieldToolTipsSector_PPD_24["English"]["canton"] = "";
	$placeHoldersSector_PPD_24["English"]["canton"] = "";
	$fieldLabelsSector_PPD_24["English"]["area"] = "Area";
	$fieldToolTipsSector_PPD_24["English"]["area"] = "";
	$placeHoldersSector_PPD_24["English"]["area"] = "";
	$fieldLabelsSector_PPD_24["English"]["tipo"] = "Tipo";
	$fieldToolTipsSector_PPD_24["English"]["tipo"] = "";
	$placeHoldersSector_PPD_24["English"]["tipo"] = "";
	$fieldLabelsSector_PPD_24["English"]["nombre"] = "Nombre";
	$fieldToolTipsSector_PPD_24["English"]["nombre"] = "";
	$placeHoldersSector_PPD_24["English"]["nombre"] = "";
	$fieldLabelsSector_PPD_24["English"]["x"] = "X";
	$fieldToolTipsSector_PPD_24["English"]["x"] = "";
	$placeHoldersSector_PPD_24["English"]["x"] = "";
	$fieldLabelsSector_PPD_24["English"]["y"] = "Y";
	$fieldToolTipsSector_PPD_24["English"]["y"] = "";
	$placeHoldersSector_PPD_24["English"]["y"] = "";
	$fieldLabelsSector_PPD_24["English"]["f10"] = "F10";
	$fieldToolTipsSector_PPD_24["English"]["f10"] = "";
	$placeHoldersSector_PPD_24["English"]["f10"] = "";
	$fieldLabelsSector_PPD_24["English"]["f11"] = "F11";
	$fieldToolTipsSector_PPD_24["English"]["f11"] = "";
	$placeHoldersSector_PPD_24["English"]["f11"] = "";
	if (count($fieldToolTipsSector_PPD_24["English"]))
		$tdataSector_PPD_24[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSector_PPD_24[""] = array();
	$fieldToolTipsSector_PPD_24[""] = array();
	$placeHoldersSector_PPD_24[""] = array();
	$pageTitlesSector_PPD_24[""] = array();
	if (count($fieldToolTipsSector_PPD_24[""]))
		$tdataSector_PPD_24[".isUseToolTips"] = true;
}


	$tdataSector_PPD_24[".NCSearch"] = true;



$tdataSector_PPD_24[".shortTableName"] = "Sector_PPD_24";
$tdataSector_PPD_24[".nSecOptions"] = 0;
$tdataSector_PPD_24[".recsPerRowPrint"] = 1;
$tdataSector_PPD_24[".mainTableOwnerID"] = "";
$tdataSector_PPD_24[".moveNext"] = 1;
$tdataSector_PPD_24[".entityType"] = 1;

$tdataSector_PPD_24[".strOriginalTableName"] = "sectorppd1";

	



$tdataSector_PPD_24[".showAddInPopup"] = false;

$tdataSector_PPD_24[".showEditInPopup"] = false;

$tdataSector_PPD_24[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSector_PPD_24[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSector_PPD_24[".fieldsForRegister"] = array();

	$tdataSector_PPD_24[".listAjax"] = true;

	$tdataSector_PPD_24[".audit"] = false;

	$tdataSector_PPD_24[".locking"] = false;



$tdataSector_PPD_24[".list"] = true;



$tdataSector_PPD_24[".reorderRecordsByHeader"] = true;
$tdataSector_PPD_24[".createSortByDropdown"] = true;
$tdataSector_PPD_24[".strSortControlSettingsJSON"] = "";




$tdataSector_PPD_24[".import"] = true;

$tdataSector_PPD_24[".exportTo"] = true;

$tdataSector_PPD_24[".printFriendly"] = true;


$tdataSector_PPD_24[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataSector_PPD_24[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataSector_PPD_24[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataSector_PPD_24[".searchSaving"] = false;
//

$tdataSector_PPD_24[".showSearchPanel"] = true;
		$tdataSector_PPD_24[".flexibleSearch"] = true;

$tdataSector_PPD_24[".isUseAjaxSuggest"] = true;

$tdataSector_PPD_24[".rowHighlite"] = true;





$tdataSector_PPD_24[".ajaxCodeSnippetAdded"] = false;

$tdataSector_PPD_24[".buttonsAdded"] = false;

$tdataSector_PPD_24[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSector_PPD_24[".isUseTimeForSearch"] = false;





$tdataSector_PPD_24[".allSearchFields"] = array();
$tdataSector_PPD_24[".filterFields"] = array();
$tdataSector_PPD_24[".requiredSearchFields"] = array();

$tdataSector_PPD_24[".allSearchFields"][] = "sector_estandarizado";
	$tdataSector_PPD_24[".allSearchFields"][] = "departamento";
	$tdataSector_PPD_24[".allSearchFields"][] = "municipio";
	$tdataSector_PPD_24[".allSearchFields"][] = "canton";
	$tdataSector_PPD_24[".allSearchFields"][] = "area";
	$tdataSector_PPD_24[".allSearchFields"][] = "tipo";
	$tdataSector_PPD_24[".allSearchFields"][] = "nombre";
	$tdataSector_PPD_24[".allSearchFields"][] = "x";
	$tdataSector_PPD_24[".allSearchFields"][] = "y";
	$tdataSector_PPD_24[".allSearchFields"][] = "f10";
	$tdataSector_PPD_24[".allSearchFields"][] = "f11";
	

$tdataSector_PPD_24[".googleLikeFields"] = array();
$tdataSector_PPD_24[".googleLikeFields"][] = "sector_estandarizado";
$tdataSector_PPD_24[".googleLikeFields"][] = "departamento";
$tdataSector_PPD_24[".googleLikeFields"][] = "municipio";
$tdataSector_PPD_24[".googleLikeFields"][] = "canton";
$tdataSector_PPD_24[".googleLikeFields"][] = "area";
$tdataSector_PPD_24[".googleLikeFields"][] = "tipo";
$tdataSector_PPD_24[".googleLikeFields"][] = "nombre";
$tdataSector_PPD_24[".googleLikeFields"][] = "x";
$tdataSector_PPD_24[".googleLikeFields"][] = "y";
$tdataSector_PPD_24[".googleLikeFields"][] = "f10";
$tdataSector_PPD_24[".googleLikeFields"][] = "f11";


$tdataSector_PPD_24[".advSearchFields"] = array();
$tdataSector_PPD_24[".advSearchFields"][] = "sector_estandarizado";
$tdataSector_PPD_24[".advSearchFields"][] = "departamento";
$tdataSector_PPD_24[".advSearchFields"][] = "municipio";
$tdataSector_PPD_24[".advSearchFields"][] = "canton";
$tdataSector_PPD_24[".advSearchFields"][] = "area";
$tdataSector_PPD_24[".advSearchFields"][] = "tipo";
$tdataSector_PPD_24[".advSearchFields"][] = "nombre";
$tdataSector_PPD_24[".advSearchFields"][] = "x";
$tdataSector_PPD_24[".advSearchFields"][] = "y";
$tdataSector_PPD_24[".advSearchFields"][] = "f10";
$tdataSector_PPD_24[".advSearchFields"][] = "f11";

$tdataSector_PPD_24[".tableType"] = "list";

$tdataSector_PPD_24[".printerPageOrientation"] = 0;
$tdataSector_PPD_24[".nPrinterPageScale"] = 100;

$tdataSector_PPD_24[".nPrinterSplitRecords"] = 40;

$tdataSector_PPD_24[".nPrinterPDFSplitRecords"] = 40;



$tdataSector_PPD_24[".geocodingEnabled"] = false;





$tdataSector_PPD_24[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataSector_PPD_24[".pageSize"] = 20;

$tdataSector_PPD_24[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSector_PPD_24[".strOrderBy"] = $tstrOrderBy;

$tdataSector_PPD_24[".orderindexes"] = array();

$tdataSector_PPD_24[".sqlHead"] = "SELECT sector_estandarizado,  	departamento,  	municipio,  	canton,  	area,  	tipo,  	nombre,  	x,  	y,  	f10,  	f11";
$tdataSector_PPD_24[".sqlFrom"] = "FROM sectorppd1";
$tdataSector_PPD_24[".sqlWhereExpr"] = "";
$tdataSector_PPD_24[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSector_PPD_24[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSector_PPD_24[".arrGroupsPerPage"] = $arrGPP;

$tdataSector_PPD_24[".highlightSearchResults"] = true;

$tableKeysSector_PPD_24 = array();
$tdataSector_PPD_24[".Keys"] = $tableKeysSector_PPD_24;

$tdataSector_PPD_24[".listFields"] = array();
$tdataSector_PPD_24[".listFields"][] = "sector_estandarizado";
$tdataSector_PPD_24[".listFields"][] = "departamento";
$tdataSector_PPD_24[".listFields"][] = "municipio";
$tdataSector_PPD_24[".listFields"][] = "canton";
$tdataSector_PPD_24[".listFields"][] = "area";
$tdataSector_PPD_24[".listFields"][] = "tipo";
$tdataSector_PPD_24[".listFields"][] = "nombre";
$tdataSector_PPD_24[".listFields"][] = "x";
$tdataSector_PPD_24[".listFields"][] = "y";
$tdataSector_PPD_24[".listFields"][] = "f10";
$tdataSector_PPD_24[".listFields"][] = "f11";

$tdataSector_PPD_24[".hideMobileList"] = array();


$tdataSector_PPD_24[".viewFields"] = array();

$tdataSector_PPD_24[".addFields"] = array();

$tdataSector_PPD_24[".masterListFields"] = array();
$tdataSector_PPD_24[".masterListFields"][] = "sector_estandarizado";
$tdataSector_PPD_24[".masterListFields"][] = "departamento";
$tdataSector_PPD_24[".masterListFields"][] = "municipio";
$tdataSector_PPD_24[".masterListFields"][] = "canton";
$tdataSector_PPD_24[".masterListFields"][] = "area";
$tdataSector_PPD_24[".masterListFields"][] = "tipo";
$tdataSector_PPD_24[".masterListFields"][] = "nombre";
$tdataSector_PPD_24[".masterListFields"][] = "x";
$tdataSector_PPD_24[".masterListFields"][] = "y";
$tdataSector_PPD_24[".masterListFields"][] = "f10";
$tdataSector_PPD_24[".masterListFields"][] = "f11";

$tdataSector_PPD_24[".inlineAddFields"] = array();

$tdataSector_PPD_24[".editFields"] = array();

$tdataSector_PPD_24[".inlineEditFields"] = array();

$tdataSector_PPD_24[".updateSelectedFields"] = array();


$tdataSector_PPD_24[".exportFields"] = array();
$tdataSector_PPD_24[".exportFields"][] = "sector_estandarizado";
$tdataSector_PPD_24[".exportFields"][] = "departamento";
$tdataSector_PPD_24[".exportFields"][] = "municipio";
$tdataSector_PPD_24[".exportFields"][] = "canton";
$tdataSector_PPD_24[".exportFields"][] = "area";
$tdataSector_PPD_24[".exportFields"][] = "tipo";
$tdataSector_PPD_24[".exportFields"][] = "nombre";
$tdataSector_PPD_24[".exportFields"][] = "x";
$tdataSector_PPD_24[".exportFields"][] = "y";
$tdataSector_PPD_24[".exportFields"][] = "f10";
$tdataSector_PPD_24[".exportFields"][] = "f11";

$tdataSector_PPD_24[".importFields"] = array();
$tdataSector_PPD_24[".importFields"][] = "sector_estandarizado";
$tdataSector_PPD_24[".importFields"][] = "departamento";
$tdataSector_PPD_24[".importFields"][] = "municipio";
$tdataSector_PPD_24[".importFields"][] = "canton";
$tdataSector_PPD_24[".importFields"][] = "area";
$tdataSector_PPD_24[".importFields"][] = "tipo";
$tdataSector_PPD_24[".importFields"][] = "nombre";
$tdataSector_PPD_24[".importFields"][] = "x";
$tdataSector_PPD_24[".importFields"][] = "y";
$tdataSector_PPD_24[".importFields"][] = "f10";
$tdataSector_PPD_24[".importFields"][] = "f11";

$tdataSector_PPD_24[".printFields"] = array();
$tdataSector_PPD_24[".printFields"][] = "sector_estandarizado";
$tdataSector_PPD_24[".printFields"][] = "departamento";
$tdataSector_PPD_24[".printFields"][] = "municipio";
$tdataSector_PPD_24[".printFields"][] = "canton";
$tdataSector_PPD_24[".printFields"][] = "area";
$tdataSector_PPD_24[".printFields"][] = "tipo";
$tdataSector_PPD_24[".printFields"][] = "nombre";
$tdataSector_PPD_24[".printFields"][] = "x";
$tdataSector_PPD_24[".printFields"][] = "y";
$tdataSector_PPD_24[".printFields"][] = "f10";
$tdataSector_PPD_24[".printFields"][] = "f11";

//	sector_estandarizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sector_estandarizado";
	$fdata["GoodName"] = "sector_estandarizado";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_24","sector_estandarizado");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataSector_PPD_24["sector_estandarizado"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_24","departamento");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataSector_PPD_24["departamento"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_24","municipio");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataSector_PPD_24["municipio"] = $fdata;
//	canton
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "canton";
	$fdata["GoodName"] = "canton";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_24","canton");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataSector_PPD_24["canton"] = $fdata;
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_24","area");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataSector_PPD_24["area"] = $fdata;
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_24","tipo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataSector_PPD_24["tipo"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_24","nombre");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataSector_PPD_24["nombre"] = $fdata;
//	x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "x";
	$fdata["GoodName"] = "x";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_24","x");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataSector_PPD_24["x"] = $fdata;
//	y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "y";
	$fdata["GoodName"] = "y";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_24","y");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataSector_PPD_24["y"] = $fdata;
//	f10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "f10";
	$fdata["GoodName"] = "f10";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_24","f10");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataSector_PPD_24["f10"] = $fdata;
//	f11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "f11";
	$fdata["GoodName"] = "f11";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_24","f11");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataSector_PPD_24["f11"] = $fdata;


$tables_data["Sector PPD 24"]=&$tdataSector_PPD_24;
$field_labels["Sector_PPD_24"] = &$fieldLabelsSector_PPD_24;
$fieldToolTips["Sector_PPD_24"] = &$fieldToolTipsSector_PPD_24;
$placeHolders["Sector_PPD_24"] = &$placeHoldersSector_PPD_24;
$page_titles["Sector_PPD_24"] = &$pageTitlesSector_PPD_24;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Sector PPD 24"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Sector PPD 24"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Sector_PPD_24()
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
	"m_srcTableName" => "Sector PPD 24"
));

$proto6["m_sql"] = "sector_estandarizado";
$proto6["m_srcTableName"] = "Sector PPD 24";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "Sector PPD 24"
));

$proto8["m_sql"] = "departamento";
$proto8["m_srcTableName"] = "Sector PPD 24";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "Sector PPD 24"
));

$proto10["m_sql"] = "municipio";
$proto10["m_srcTableName"] = "Sector PPD 24";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "canton",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "Sector PPD 24"
));

$proto12["m_sql"] = "canton";
$proto12["m_srcTableName"] = "Sector PPD 24";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "Sector PPD 24"
));

$proto14["m_sql"] = "area";
$proto14["m_srcTableName"] = "Sector PPD 24";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "Sector PPD 24"
));

$proto16["m_sql"] = "tipo";
$proto16["m_srcTableName"] = "Sector PPD 24";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "Sector PPD 24"
));

$proto18["m_sql"] = "nombre";
$proto18["m_srcTableName"] = "Sector PPD 24";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "x",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "Sector PPD 24"
));

$proto20["m_sql"] = "x";
$proto20["m_srcTableName"] = "Sector PPD 24";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "y",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "Sector PPD 24"
));

$proto22["m_sql"] = "y";
$proto22["m_srcTableName"] = "Sector PPD 24";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "f10",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "Sector PPD 24"
));

$proto24["m_sql"] = "f10";
$proto24["m_srcTableName"] = "Sector PPD 24";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "f11",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "Sector PPD 24"
));

$proto26["m_sql"] = "f11";
$proto26["m_srcTableName"] = "Sector PPD 24";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "sectorppd1";
$proto29["m_srcTableName"] = "Sector PPD 24";
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
$proto28["m_srcTableName"] = "Sector PPD 24";
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
$proto0["m_srcTableName"]="Sector PPD 24";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Sector_PPD_24 = createSqlQuery_Sector_PPD_24();


	
		;

											

$tdataSector_PPD_24[".sqlquery"] = $queryData_Sector_PPD_24;

$tableEvents["Sector PPD 24"] = new eventsBase;
$tdataSector_PPD_24[".hasEvents"] = false;

?>