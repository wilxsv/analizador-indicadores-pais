<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasectorppd1_Report = array();
	$tdatasectorppd1_Report[".truncateText"] = true;
	$tdatasectorppd1_Report[".NumberOfChars"] = 80;
	$tdatasectorppd1_Report[".ShortName"] = "sectorppd1_Report";
	$tdatasectorppd1_Report[".OwnerID"] = "";
	$tdatasectorppd1_Report[".OriginalTable"] = "sectorppd1";

//	field labels
$fieldLabelssectorppd1_Report = array();
$fieldToolTipssectorppd1_Report = array();
$pageTitlessectorppd1_Report = array();
$placeHolderssectorppd1_Report = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssectorppd1_Report["Spanish"] = array();
	$fieldToolTipssectorppd1_Report["Spanish"] = array();
	$placeHolderssectorppd1_Report["Spanish"] = array();
	$pageTitlessectorppd1_Report["Spanish"] = array();
	$fieldLabelssectorppd1_Report["Spanish"]["sector_estandarizado"] = "Sector Estandarizado";
	$fieldToolTipssectorppd1_Report["Spanish"]["sector_estandarizado"] = "";
	$placeHolderssectorppd1_Report["Spanish"]["sector_estandarizado"] = "";
	$fieldLabelssectorppd1_Report["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipssectorppd1_Report["Spanish"]["departamento"] = "";
	$placeHolderssectorppd1_Report["Spanish"]["departamento"] = "";
	$fieldLabelssectorppd1_Report["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipssectorppd1_Report["Spanish"]["municipio"] = "";
	$placeHolderssectorppd1_Report["Spanish"]["municipio"] = "";
	$fieldLabelssectorppd1_Report["Spanish"]["canton"] = "Canton";
	$fieldToolTipssectorppd1_Report["Spanish"]["canton"] = "";
	$placeHolderssectorppd1_Report["Spanish"]["canton"] = "";
	$fieldLabelssectorppd1_Report["Spanish"]["area"] = "Area";
	$fieldToolTipssectorppd1_Report["Spanish"]["area"] = "";
	$placeHolderssectorppd1_Report["Spanish"]["area"] = "";
	$fieldLabelssectorppd1_Report["Spanish"]["tipo"] = "Tipo";
	$fieldToolTipssectorppd1_Report["Spanish"]["tipo"] = "";
	$placeHolderssectorppd1_Report["Spanish"]["tipo"] = "";
	$fieldLabelssectorppd1_Report["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipssectorppd1_Report["Spanish"]["nombre"] = "";
	$placeHolderssectorppd1_Report["Spanish"]["nombre"] = "";
	$fieldLabelssectorppd1_Report["Spanish"]["x"] = "X";
	$fieldToolTipssectorppd1_Report["Spanish"]["x"] = "";
	$placeHolderssectorppd1_Report["Spanish"]["x"] = "";
	$fieldLabelssectorppd1_Report["Spanish"]["y"] = "Y";
	$fieldToolTipssectorppd1_Report["Spanish"]["y"] = "";
	$placeHolderssectorppd1_Report["Spanish"]["y"] = "";
	$fieldLabelssectorppd1_Report["Spanish"]["f10"] = "F10";
	$fieldToolTipssectorppd1_Report["Spanish"]["f10"] = "";
	$placeHolderssectorppd1_Report["Spanish"]["f10"] = "";
	$fieldLabelssectorppd1_Report["Spanish"]["f11"] = "F11";
	$fieldToolTipssectorppd1_Report["Spanish"]["f11"] = "";
	$placeHolderssectorppd1_Report["Spanish"]["f11"] = "";
	if (count($fieldToolTipssectorppd1_Report["Spanish"]))
		$tdatasectorppd1_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssectorppd1_Report["English"] = array();
	$fieldToolTipssectorppd1_Report["English"] = array();
	$placeHolderssectorppd1_Report["English"] = array();
	$pageTitlessectorppd1_Report["English"] = array();
	$fieldLabelssectorppd1_Report["English"]["sector_estandarizado"] = "Sector Estandarizado";
	$fieldToolTipssectorppd1_Report["English"]["sector_estandarizado"] = "";
	$placeHolderssectorppd1_Report["English"]["sector_estandarizado"] = "";
	$fieldLabelssectorppd1_Report["English"]["departamento"] = "Departamento";
	$fieldToolTipssectorppd1_Report["English"]["departamento"] = "";
	$placeHolderssectorppd1_Report["English"]["departamento"] = "";
	$fieldLabelssectorppd1_Report["English"]["municipio"] = "Municipio";
	$fieldToolTipssectorppd1_Report["English"]["municipio"] = "";
	$placeHolderssectorppd1_Report["English"]["municipio"] = "";
	$fieldLabelssectorppd1_Report["English"]["canton"] = "Canton";
	$fieldToolTipssectorppd1_Report["English"]["canton"] = "";
	$placeHolderssectorppd1_Report["English"]["canton"] = "";
	$fieldLabelssectorppd1_Report["English"]["area"] = "Area";
	$fieldToolTipssectorppd1_Report["English"]["area"] = "";
	$placeHolderssectorppd1_Report["English"]["area"] = "";
	$fieldLabelssectorppd1_Report["English"]["tipo"] = "Tipo";
	$fieldToolTipssectorppd1_Report["English"]["tipo"] = "";
	$placeHolderssectorppd1_Report["English"]["tipo"] = "";
	$fieldLabelssectorppd1_Report["English"]["nombre"] = "Nombre";
	$fieldToolTipssectorppd1_Report["English"]["nombre"] = "";
	$placeHolderssectorppd1_Report["English"]["nombre"] = "";
	$fieldLabelssectorppd1_Report["English"]["x"] = "X";
	$fieldToolTipssectorppd1_Report["English"]["x"] = "";
	$placeHolderssectorppd1_Report["English"]["x"] = "";
	$fieldLabelssectorppd1_Report["English"]["y"] = "Y";
	$fieldToolTipssectorppd1_Report["English"]["y"] = "";
	$placeHolderssectorppd1_Report["English"]["y"] = "";
	$fieldLabelssectorppd1_Report["English"]["f10"] = "F10";
	$fieldToolTipssectorppd1_Report["English"]["f10"] = "";
	$placeHolderssectorppd1_Report["English"]["f10"] = "";
	$fieldLabelssectorppd1_Report["English"]["f11"] = "F11";
	$fieldToolTipssectorppd1_Report["English"]["f11"] = "";
	$placeHolderssectorppd1_Report["English"]["f11"] = "";
	if (count($fieldToolTipssectorppd1_Report["English"]))
		$tdatasectorppd1_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssectorppd1_Report[""] = array();
	$fieldToolTipssectorppd1_Report[""] = array();
	$placeHolderssectorppd1_Report[""] = array();
	$pageTitlessectorppd1_Report[""] = array();
	if (count($fieldToolTipssectorppd1_Report[""]))
		$tdatasectorppd1_Report[".isUseToolTips"] = true;
}


	$tdatasectorppd1_Report[".NCSearch"] = true;



$tdatasectorppd1_Report[".shortTableName"] = "sectorppd1_Report";
$tdatasectorppd1_Report[".nSecOptions"] = 0;
$tdatasectorppd1_Report[".recsPerRowPrint"] = 1;
$tdatasectorppd1_Report[".mainTableOwnerID"] = "";
$tdatasectorppd1_Report[".moveNext"] = 1;
$tdatasectorppd1_Report[".entityType"] = 2;

$tdatasectorppd1_Report[".strOriginalTableName"] = "sectorppd1";

	



$tdatasectorppd1_Report[".showAddInPopup"] = false;

$tdatasectorppd1_Report[".showEditInPopup"] = false;

$tdatasectorppd1_Report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasectorppd1_Report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasectorppd1_Report[".fieldsForRegister"] = array();

$tdatasectorppd1_Report[".listAjax"] = false;

	$tdatasectorppd1_Report[".audit"] = false;

	$tdatasectorppd1_Report[".locking"] = false;



$tdatasectorppd1_Report[".list"] = true;



$tdatasectorppd1_Report[".reorderRecordsByHeader"] = true;





$tdatasectorppd1_Report[".exportTo"] = true;

$tdatasectorppd1_Report[".printFriendly"] = true;


$tdatasectorppd1_Report[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasectorppd1_Report[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasectorppd1_Report[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasectorppd1_Report[".searchSaving"] = false;
//

$tdatasectorppd1_Report[".showSearchPanel"] = true;
		$tdatasectorppd1_Report[".flexibleSearch"] = true;

$tdatasectorppd1_Report[".isUseAjaxSuggest"] = true;






$tdatasectorppd1_Report[".ajaxCodeSnippetAdded"] = false;

$tdatasectorppd1_Report[".buttonsAdded"] = false;

$tdatasectorppd1_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasectorppd1_Report[".isUseTimeForSearch"] = false;





$tdatasectorppd1_Report[".allSearchFields"] = array();
$tdatasectorppd1_Report[".filterFields"] = array();
$tdatasectorppd1_Report[".requiredSearchFields"] = array();

$tdatasectorppd1_Report[".allSearchFields"][] = "sector_estandarizado";
	$tdatasectorppd1_Report[".allSearchFields"][] = "departamento";
	$tdatasectorppd1_Report[".allSearchFields"][] = "municipio";
	$tdatasectorppd1_Report[".allSearchFields"][] = "canton";
	$tdatasectorppd1_Report[".allSearchFields"][] = "area";
	$tdatasectorppd1_Report[".allSearchFields"][] = "tipo";
	$tdatasectorppd1_Report[".allSearchFields"][] = "nombre";
	$tdatasectorppd1_Report[".allSearchFields"][] = "x";
	$tdatasectorppd1_Report[".allSearchFields"][] = "y";
	$tdatasectorppd1_Report[".allSearchFields"][] = "f10";
	$tdatasectorppd1_Report[".allSearchFields"][] = "f11";
	

$tdatasectorppd1_Report[".googleLikeFields"] = array();
$tdatasectorppd1_Report[".googleLikeFields"][] = "sector_estandarizado";
$tdatasectorppd1_Report[".googleLikeFields"][] = "departamento";
$tdatasectorppd1_Report[".googleLikeFields"][] = "municipio";
$tdatasectorppd1_Report[".googleLikeFields"][] = "canton";
$tdatasectorppd1_Report[".googleLikeFields"][] = "area";
$tdatasectorppd1_Report[".googleLikeFields"][] = "tipo";
$tdatasectorppd1_Report[".googleLikeFields"][] = "nombre";
$tdatasectorppd1_Report[".googleLikeFields"][] = "x";
$tdatasectorppd1_Report[".googleLikeFields"][] = "y";
$tdatasectorppd1_Report[".googleLikeFields"][] = "f10";
$tdatasectorppd1_Report[".googleLikeFields"][] = "f11";


$tdatasectorppd1_Report[".advSearchFields"] = array();
$tdatasectorppd1_Report[".advSearchFields"][] = "sector_estandarizado";
$tdatasectorppd1_Report[".advSearchFields"][] = "departamento";
$tdatasectorppd1_Report[".advSearchFields"][] = "municipio";
$tdatasectorppd1_Report[".advSearchFields"][] = "canton";
$tdatasectorppd1_Report[".advSearchFields"][] = "area";
$tdatasectorppd1_Report[".advSearchFields"][] = "tipo";
$tdatasectorppd1_Report[".advSearchFields"][] = "nombre";
$tdatasectorppd1_Report[".advSearchFields"][] = "x";
$tdatasectorppd1_Report[".advSearchFields"][] = "y";
$tdatasectorppd1_Report[".advSearchFields"][] = "f10";
$tdatasectorppd1_Report[".advSearchFields"][] = "f11";

$tdatasectorppd1_Report[".tableType"] = "report";

$tdatasectorppd1_Report[".printerPageOrientation"] = 0;
$tdatasectorppd1_Report[".nPrinterPageScale"] = 100;

$tdatasectorppd1_Report[".nPrinterSplitRecords"] = 40;

$tdatasectorppd1_Report[".nPrinterPDFSplitRecords"] = 40;



$tdatasectorppd1_Report[".geocodingEnabled"] = false;

//report settings
$tdatasectorppd1_Report[".printReportLayout"] = 6;

$tdatasectorppd1_Report[".reportPrintPartitionType"] = 1;
$tdatasectorppd1_Report[".reportPrintGroupsPerPage"] = 40;
$tdatasectorppd1_Report[".reportPrintPDFGroupsPerPage"] = 40;
$tdatasectorppd1_Report[".lowGroup"] = 0;



$tdatasectorppd1_Report[".pageSize"] = 20;






$tdatasectorppd1_Report[".repShowDet"] = true;

$tdatasectorppd1_Report[".reportLayout"] = 6;

//end of report settings




$tdatasectorppd1_Report[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasectorppd1_Report[".strOrderBy"] = $tstrOrderBy;

$tdatasectorppd1_Report[".orderindexes"] = array();

$tdatasectorppd1_Report[".sqlHead"] = "SELECT sector_estandarizado,  	departamento,  	municipio,  	canton,  	area,  	tipo,  	nombre,  	x,  	y,  	f10,  	f11";
$tdatasectorppd1_Report[".sqlFrom"] = "FROM sectorppd1";
$tdatasectorppd1_Report[".sqlWhereExpr"] = "";
$tdatasectorppd1_Report[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasectorppd1_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasectorppd1_Report[".arrGroupsPerPage"] = $arrGPP;

$tdatasectorppd1_Report[".highlightSearchResults"] = true;

$tableKeyssectorppd1_Report = array();
$tdatasectorppd1_Report[".Keys"] = $tableKeyssectorppd1_Report;

$tdatasectorppd1_Report[".listFields"] = array();
$tdatasectorppd1_Report[".listFields"][] = "sector_estandarizado";
$tdatasectorppd1_Report[".listFields"][] = "departamento";
$tdatasectorppd1_Report[".listFields"][] = "municipio";
$tdatasectorppd1_Report[".listFields"][] = "canton";
$tdatasectorppd1_Report[".listFields"][] = "area";
$tdatasectorppd1_Report[".listFields"][] = "tipo";
$tdatasectorppd1_Report[".listFields"][] = "nombre";
$tdatasectorppd1_Report[".listFields"][] = "x";
$tdatasectorppd1_Report[".listFields"][] = "y";
$tdatasectorppd1_Report[".listFields"][] = "f10";
$tdatasectorppd1_Report[".listFields"][] = "f11";

$tdatasectorppd1_Report[".hideMobileList"] = array();


$tdatasectorppd1_Report[".viewFields"] = array();
$tdatasectorppd1_Report[".viewFields"][] = "sector_estandarizado";
$tdatasectorppd1_Report[".viewFields"][] = "departamento";
$tdatasectorppd1_Report[".viewFields"][] = "municipio";
$tdatasectorppd1_Report[".viewFields"][] = "canton";
$tdatasectorppd1_Report[".viewFields"][] = "area";
$tdatasectorppd1_Report[".viewFields"][] = "tipo";
$tdatasectorppd1_Report[".viewFields"][] = "nombre";
$tdatasectorppd1_Report[".viewFields"][] = "x";
$tdatasectorppd1_Report[".viewFields"][] = "y";
$tdatasectorppd1_Report[".viewFields"][] = "f10";
$tdatasectorppd1_Report[".viewFields"][] = "f11";

$tdatasectorppd1_Report[".addFields"] = array();
$tdatasectorppd1_Report[".addFields"][] = "sector_estandarizado";
$tdatasectorppd1_Report[".addFields"][] = "departamento";
$tdatasectorppd1_Report[".addFields"][] = "municipio";
$tdatasectorppd1_Report[".addFields"][] = "canton";
$tdatasectorppd1_Report[".addFields"][] = "area";
$tdatasectorppd1_Report[".addFields"][] = "tipo";
$tdatasectorppd1_Report[".addFields"][] = "nombre";
$tdatasectorppd1_Report[".addFields"][] = "x";
$tdatasectorppd1_Report[".addFields"][] = "y";
$tdatasectorppd1_Report[".addFields"][] = "f10";
$tdatasectorppd1_Report[".addFields"][] = "f11";

$tdatasectorppd1_Report[".masterListFields"] = array();
$tdatasectorppd1_Report[".masterListFields"][] = "sector_estandarizado";
$tdatasectorppd1_Report[".masterListFields"][] = "departamento";
$tdatasectorppd1_Report[".masterListFields"][] = "municipio";
$tdatasectorppd1_Report[".masterListFields"][] = "canton";
$tdatasectorppd1_Report[".masterListFields"][] = "area";
$tdatasectorppd1_Report[".masterListFields"][] = "tipo";
$tdatasectorppd1_Report[".masterListFields"][] = "nombre";
$tdatasectorppd1_Report[".masterListFields"][] = "x";
$tdatasectorppd1_Report[".masterListFields"][] = "y";
$tdatasectorppd1_Report[".masterListFields"][] = "f10";
$tdatasectorppd1_Report[".masterListFields"][] = "f11";

$tdatasectorppd1_Report[".inlineAddFields"] = array();
$tdatasectorppd1_Report[".inlineAddFields"][] = "sector_estandarizado";
$tdatasectorppd1_Report[".inlineAddFields"][] = "departamento";
$tdatasectorppd1_Report[".inlineAddFields"][] = "municipio";
$tdatasectorppd1_Report[".inlineAddFields"][] = "canton";
$tdatasectorppd1_Report[".inlineAddFields"][] = "area";
$tdatasectorppd1_Report[".inlineAddFields"][] = "tipo";
$tdatasectorppd1_Report[".inlineAddFields"][] = "nombre";
$tdatasectorppd1_Report[".inlineAddFields"][] = "x";
$tdatasectorppd1_Report[".inlineAddFields"][] = "y";
$tdatasectorppd1_Report[".inlineAddFields"][] = "f10";
$tdatasectorppd1_Report[".inlineAddFields"][] = "f11";

$tdatasectorppd1_Report[".editFields"] = array();
$tdatasectorppd1_Report[".editFields"][] = "sector_estandarizado";
$tdatasectorppd1_Report[".editFields"][] = "departamento";
$tdatasectorppd1_Report[".editFields"][] = "municipio";
$tdatasectorppd1_Report[".editFields"][] = "canton";
$tdatasectorppd1_Report[".editFields"][] = "area";
$tdatasectorppd1_Report[".editFields"][] = "tipo";
$tdatasectorppd1_Report[".editFields"][] = "nombre";
$tdatasectorppd1_Report[".editFields"][] = "x";
$tdatasectorppd1_Report[".editFields"][] = "y";
$tdatasectorppd1_Report[".editFields"][] = "f10";
$tdatasectorppd1_Report[".editFields"][] = "f11";

$tdatasectorppd1_Report[".inlineEditFields"] = array();
$tdatasectorppd1_Report[".inlineEditFields"][] = "sector_estandarizado";
$tdatasectorppd1_Report[".inlineEditFields"][] = "departamento";
$tdatasectorppd1_Report[".inlineEditFields"][] = "municipio";
$tdatasectorppd1_Report[".inlineEditFields"][] = "canton";
$tdatasectorppd1_Report[".inlineEditFields"][] = "area";
$tdatasectorppd1_Report[".inlineEditFields"][] = "tipo";
$tdatasectorppd1_Report[".inlineEditFields"][] = "nombre";
$tdatasectorppd1_Report[".inlineEditFields"][] = "x";
$tdatasectorppd1_Report[".inlineEditFields"][] = "y";
$tdatasectorppd1_Report[".inlineEditFields"][] = "f10";
$tdatasectorppd1_Report[".inlineEditFields"][] = "f11";

$tdatasectorppd1_Report[".updateSelectedFields"] = array();
$tdatasectorppd1_Report[".updateSelectedFields"][] = "sector_estandarizado";
$tdatasectorppd1_Report[".updateSelectedFields"][] = "departamento";
$tdatasectorppd1_Report[".updateSelectedFields"][] = "municipio";
$tdatasectorppd1_Report[".updateSelectedFields"][] = "canton";
$tdatasectorppd1_Report[".updateSelectedFields"][] = "area";
$tdatasectorppd1_Report[".updateSelectedFields"][] = "tipo";
$tdatasectorppd1_Report[".updateSelectedFields"][] = "nombre";
$tdatasectorppd1_Report[".updateSelectedFields"][] = "x";
$tdatasectorppd1_Report[".updateSelectedFields"][] = "y";
$tdatasectorppd1_Report[".updateSelectedFields"][] = "f10";
$tdatasectorppd1_Report[".updateSelectedFields"][] = "f11";


$tdatasectorppd1_Report[".exportFields"] = array();
$tdatasectorppd1_Report[".exportFields"][] = "sector_estandarizado";
$tdatasectorppd1_Report[".exportFields"][] = "departamento";
$tdatasectorppd1_Report[".exportFields"][] = "municipio";
$tdatasectorppd1_Report[".exportFields"][] = "canton";
$tdatasectorppd1_Report[".exportFields"][] = "area";
$tdatasectorppd1_Report[".exportFields"][] = "tipo";
$tdatasectorppd1_Report[".exportFields"][] = "nombre";
$tdatasectorppd1_Report[".exportFields"][] = "x";
$tdatasectorppd1_Report[".exportFields"][] = "y";
$tdatasectorppd1_Report[".exportFields"][] = "f10";
$tdatasectorppd1_Report[".exportFields"][] = "f11";

$tdatasectorppd1_Report[".importFields"] = array();
$tdatasectorppd1_Report[".importFields"][] = "sector_estandarizado";
$tdatasectorppd1_Report[".importFields"][] = "departamento";
$tdatasectorppd1_Report[".importFields"][] = "municipio";
$tdatasectorppd1_Report[".importFields"][] = "canton";
$tdatasectorppd1_Report[".importFields"][] = "area";
$tdatasectorppd1_Report[".importFields"][] = "tipo";
$tdatasectorppd1_Report[".importFields"][] = "nombre";
$tdatasectorppd1_Report[".importFields"][] = "x";
$tdatasectorppd1_Report[".importFields"][] = "y";
$tdatasectorppd1_Report[".importFields"][] = "f10";
$tdatasectorppd1_Report[".importFields"][] = "f11";

$tdatasectorppd1_Report[".printFields"] = array();
$tdatasectorppd1_Report[".printFields"][] = "sector_estandarizado";
$tdatasectorppd1_Report[".printFields"][] = "departamento";
$tdatasectorppd1_Report[".printFields"][] = "municipio";
$tdatasectorppd1_Report[".printFields"][] = "canton";
$tdatasectorppd1_Report[".printFields"][] = "area";
$tdatasectorppd1_Report[".printFields"][] = "tipo";
$tdatasectorppd1_Report[".printFields"][] = "nombre";
$tdatasectorppd1_Report[".printFields"][] = "x";
$tdatasectorppd1_Report[".printFields"][] = "y";
$tdatasectorppd1_Report[".printFields"][] = "f10";
$tdatasectorppd1_Report[".printFields"][] = "f11";

//	sector_estandarizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sector_estandarizado";
	$fdata["GoodName"] = "sector_estandarizado";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Report","sector_estandarizado");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
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

	$fdata["ViewFormats"]["report"] = $vdata;
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




	$tdatasectorppd1_Report["sector_estandarizado"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Report","departamento");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
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

	$fdata["ViewFormats"]["report"] = $vdata;
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




	$tdatasectorppd1_Report["departamento"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Report","municipio");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
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

	$fdata["ViewFormats"]["report"] = $vdata;
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




	$tdatasectorppd1_Report["municipio"] = $fdata;
//	canton
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "canton";
	$fdata["GoodName"] = "canton";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Report","canton");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
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

	$fdata["ViewFormats"]["report"] = $vdata;
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




	$tdatasectorppd1_Report["canton"] = $fdata;
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Report","area");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
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

	$fdata["ViewFormats"]["report"] = $vdata;
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




	$tdatasectorppd1_Report["area"] = $fdata;
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Report","tipo");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
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

	$fdata["ViewFormats"]["report"] = $vdata;
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




	$tdatasectorppd1_Report["tipo"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Report","nombre");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
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

	$fdata["ViewFormats"]["report"] = $vdata;
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




	$tdatasectorppd1_Report["nombre"] = $fdata;
//	x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "x";
	$fdata["GoodName"] = "x";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Report","x");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
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

	$fdata["ViewFormats"]["report"] = $vdata;
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




	$tdatasectorppd1_Report["x"] = $fdata;
//	y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "y";
	$fdata["GoodName"] = "y";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Report","y");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
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

	$fdata["ViewFormats"]["report"] = $vdata;
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




	$tdatasectorppd1_Report["y"] = $fdata;
//	f10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "f10";
	$fdata["GoodName"] = "f10";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Report","f10");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
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

	$fdata["ViewFormats"]["report"] = $vdata;
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




	$tdatasectorppd1_Report["f10"] = $fdata;
//	f11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "f11";
	$fdata["GoodName"] = "f11";
	$fdata["ownerTable"] = "sectorppd1";
	$fdata["Label"] = GetFieldLabel("sectorppd1_Report","f11");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
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

	$fdata["ViewFormats"]["report"] = $vdata;
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




	$tdatasectorppd1_Report["f11"] = $fdata;


$tables_data["sectorppd1 Report"]=&$tdatasectorppd1_Report;
$field_labels["sectorppd1_Report"] = &$fieldLabelssectorppd1_Report;
$fieldToolTips["sectorppd1_Report"] = &$fieldToolTipssectorppd1_Report;
$placeHolders["sectorppd1_Report"] = &$placeHolderssectorppd1_Report;
$page_titles["sectorppd1_Report"] = &$pageTitlessectorppd1_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sectorppd1 Report"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["sectorppd1 Report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_sectorppd1_Report()
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
	"m_srcTableName" => "sectorppd1 Report"
));

$proto6["m_sql"] = "sector_estandarizado";
$proto6["m_srcTableName"] = "sectorppd1 Report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1 Report"
));

$proto8["m_sql"] = "departamento";
$proto8["m_srcTableName"] = "sectorppd1 Report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1 Report"
));

$proto10["m_sql"] = "municipio";
$proto10["m_srcTableName"] = "sectorppd1 Report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "canton",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1 Report"
));

$proto12["m_sql"] = "canton";
$proto12["m_srcTableName"] = "sectorppd1 Report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1 Report"
));

$proto14["m_sql"] = "area";
$proto14["m_srcTableName"] = "sectorppd1 Report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1 Report"
));

$proto16["m_sql"] = "tipo";
$proto16["m_srcTableName"] = "sectorppd1 Report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1 Report"
));

$proto18["m_sql"] = "nombre";
$proto18["m_srcTableName"] = "sectorppd1 Report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "x",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1 Report"
));

$proto20["m_sql"] = "x";
$proto20["m_srcTableName"] = "sectorppd1 Report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "y",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1 Report"
));

$proto22["m_sql"] = "y";
$proto22["m_srcTableName"] = "sectorppd1 Report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "f10",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1 Report"
));

$proto24["m_sql"] = "f10";
$proto24["m_srcTableName"] = "sectorppd1 Report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "f11",
	"m_strTable" => "sectorppd1",
	"m_srcTableName" => "sectorppd1 Report"
));

$proto26["m_sql"] = "f11";
$proto26["m_srcTableName"] = "sectorppd1 Report";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "sectorppd1";
$proto29["m_srcTableName"] = "sectorppd1 Report";
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
$proto28["m_srcTableName"] = "sectorppd1 Report";
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
$proto0["m_srcTableName"]="sectorppd1 Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sectorppd1_Report = createSqlQuery_sectorppd1_Report();


	
		;

											

$tdatasectorppd1_Report[".sqlquery"] = $queryData_sectorppd1_Report;

$tableEvents["sectorppd1 Report"] = new eventsBase;
$tdatasectorppd1_Report[".hasEvents"] = false;

?>